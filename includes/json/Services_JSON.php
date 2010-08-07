<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
* Converts to and from JSON format.
*
* JSON (JavaScript Object Notation) is a lightweight data-interchange
* format. It is easy for humans to read and write. It is easy for machines
* to parse and generate. It is based on a subset of the JavaScript
* Programming Language, Standard ECMA-262 3rd Edition - December 1999.
* This feature can also be found in  Python. JSON is a text format that is
* completely language independent but uses conventions that are familiar
* to programmers of the C-family of languages, including C, C++, C#, Java,
* JavaScript, Perl, TCL, and many others. These properties make JSON an
* ideal data-interchange language.
*
* This package provides a simple encoder and decoder for JSON notation. It
* is intended for use with client-side Javascript applications that make
* use of HTTPRequest to perform server communication functions - data can
* be encoded into JSON notation for use in a client-side javascript, or
* decoded from incoming Javascript requests. JSON format is native to
* Javascript, and can be directly eval()'ed with no further parsing
* overhead
*
* All strings should be in ASCII or UTF-8 format!
*
* LICENSE: Redistribution and use in source and binary forms, with or
* without modification, are permitted provided that the following
* conditions are met: Redistributions of source code must retain the
* above copyright notice, this list of conditions and the following
* disclaimer. Redistributions in binary form must reproduce the above
* copyright notice, this list of conditions and the following disclaimer
* in the documentation and/or other materials provided with the
* distribution.
*
* THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED
* WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
* MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN
* NO EVENT SHALL CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
* INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
* BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
* OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
* ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
* TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
* USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
* DAMAGE.
*
* @file
* @ingroup API
* @author Michal Migurski <mike-json@teczno.com>
* @author Matt Knapp <mdknapp[at]gmail[dot]com>
* @author Brett Stimmerman <brettstimmerman[at]gmail[dot]com>
* @copyright 2005 Michal Migurski
* @version CVS: $Id$
* @license http://www.opensource.org/licenses/bsd-license.php
* @see http://pear.php.net/pepr/pepr-proposal-show.php?id=198
*/

/**
* Marker constant for Services_JSON::decode(), used to flag stack state
*/
define('SERVICES_JSON_SLICE',   1);

/**
* Marker constant for Services_JSON::decode(), used to flag stack state
*/
define('SERVICES_JSON_IN_STR',  2);

/**
* Marker constant for Services_JSON::decode(), used to flag stack state
*/
define('SERVICES_JSON_IN_ARR',  3);

/**
* Marker constant for Services_JSON::decode(), used to flag stack state
*/
define('SERVICES_JSON_IN_OBJ',  4);

/**
* Marker constant for Services_JSON::decode(), used to flag stack state
*/
define('SERVICES_JSON_IN_CMT', 5);

/**
* Behavior switch for Services_JSON::decode()
*/
define('SERVICES_JSON_LOOSE_TYPE', 16);

/**
* Behavior switch for Services_JSON::decode()
*/
define('SERVICES_JSON_SUPPRESS_ERRORS', 32);

/**
 * Converts to and from JSON format.
 *
 * Brief example of use:
 *
 * <code>
 * // create a new instance of Services_JSON
 * $json = new Services_JSON();
 *
 * // convert a complexe value to JSON notation, and send it to the browser
 * $value = array('foo', 'bar', array(1, 2, 'baz'), array(3, array(4)));
 * $output = $json->encode($value);
 *
 * print($output);
 * // prints: ["foo","bar",[1,2,"baz"],[3,[4]]]
 *
 * // accept incoming POST data, assumed to be in JSON notation
 * $input = file_get_contents('php://input', 1000000);
 * $value = $json->decode($input);
 * </code>
 *
 * @ingroup API
 */
class Services_JSON
{
	/**
	 * constructs a new JSON instance
	 *
	 * @param $use Integer: object behavior flags; combine with boolean-OR
	 *
	 *	possible values:
	 *	- SERVICES_JSON_LOOSE_TYPE:  loose typing.
	 *			"{...}" syntax creates associative arrays
	 *			instead of objects in decode().
	 *	- SERVICES_JSON_SUPPRESS_ERRORS:  error suppression.
	 *			Values which can't be encoded (e.g. resources)
	 *			appear as NULL instead of throwing errors.
	 *			By default, a deeply-nested resource will
	 *			bubble up with an error, so all return values
	 *			from encode() should be checked with isError()
	 */
	function Services_JSON($use = 0)
	{
		$this->use = $use;
	}
	
	private static $mHavePear = null;
	/**
	 * Returns cached result of class_exists('pear'), to avoid calling AutoLoader numerous times
	 * in cases when PEAR is not present.
	 * @return boolean
	 */
	private static function pearInstalled() {
		if ( self::$mHavePear === null ) {
			self::$mHavePear = class_exists( 'pear' );
		}
		return self::$mHavePear;
	}

	/**
	 * convert a string from one UTF-16 char to one UTF-8 char
	 *
	 * Normally should be handled by mb_convert_encoding, but
	 * provides a slower PHP-only method for installations
	 * that lack the multibye string extension.
	 *
	 * @param $utf16 String: UTF-16 character
	 * @return String: UTF-8 character
	 * @access private
	 */
	function utf162utf8($utf16)
	{
		// oh please oh please oh please oh please oh please
		if(function_exists('mb_convert_encoding')) {
			return mb_convert_encoding($utf16, 'UTF-8', 'UTF-16');
		}

		$bytes = (ord($utf16{0}) << 8) | ord($utf16{1});

		switch(true) {
			case ((0x7F & $bytes) == $bytes):
				// this case should never be reached, because we are in ASCII range
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return chr(0x7F & $bytes);

			case (0x07FF & $bytes) == $bytes:
				// return a 2-byte UTF-8 character
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return chr(0xC0 | (($bytes >> 6) & 0x1F))
					 . chr(0x80 | ($bytes & 0x3F));

			case (0xFC00 & $bytes) == 0xD800 && strlen($utf16) >= 4 && (0xFC & ord($utf16{2})) == 0xDC:
				// return a 4-byte UTF-8 character
				$char = ((($bytes & 0x03FF) << 10)
					   | ((ord($utf16{2}) & 0x03) << 8)
					   | ord($utf16{3}));
				$char += 0x10000;
				return chr(0xF0 | (($char >> 18) & 0x07))
					 . chr(0x80 | (($char >> 12) & 0x3F))
					 . chr(0x80 | (($char >> 6) & 0x3F))
					 . chr(0x80 | ($char & 0x3F));

			case (0xFFFF & $bytes) == $bytes:
				// return a 3-byte UTF-8 character
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return chr(0xE0 | (($bytes >> 12) & 0x0F))
					 . chr(0x80 | (($bytes >> 6) & 0x3F))
					 . chr(0x80 | ($bytes & 0x3F));
		}

		// ignoring UTF-32 for now, sorry
		return '';
	}

	/**
	 * convert a string from one UTF-8 char to one UTF-16 char
	 *
	 * Normally should be handled by mb_convert_encoding, but
	 * provides a slower PHP-only method for installations
	 * that lack the multibye string extension.
	 *
	 * @param $utf8 String: UTF-8 character
	 * @return String: UTF-16 character
	 * @access private
	 */
	function utf82utf16($utf8)
	{
		// oh please oh please oh please oh please oh please
		if(function_exists('mb_convert_encoding')) {
			return mb_convert_encoding($utf8, 'UTF-16', 'UTF-8');
		}

		switch(strlen($utf8)) {
			case 1:
				// this case should never be reached, because we are in ASCII range
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return $utf8;

			case 2:
				// return a UTF-16 character from a 2-byte UTF-8 char
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return chr(0x07 & (ord($utf8{0}) >> 2))
					 . chr((0xC0 & (ord($utf8{0}) << 6))
						 | (0x3F & ord($utf8{1})));

			case 3:
				// return a UTF-16 character from a 3-byte UTF-8 char
				// see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
				return chr((0xF0 & (ord($utf8{0}) << 4))
						 | (0x0F & (ord($utf8{1}) >> 2)))
					 . chr((0xC0 & (ord($utf8{1}) << 6))
						 | (0x7F & ord($utf8{2})));

			case 4:
				// return a UTF-16 surrogate pair from a 4-byte UTF-8 char
				if(ord($utf8{0}) > 0xF4) return ''; # invalid
				$char = ((0x1C0000 & (ord($utf8{0}) << 18))
					   | (0x03F000 & (ord($utf8{1}) << 12))
					   | (0x000FC0 & (ord($utf8{2}) << 6))
					   | (0x00003F & ord($utf8{3})));
				if($char > 0x10FFFF) return ''; # invalid
				$char -= 0x10000;
				return chr(0xD8 | (($char >> 18) & 0x03))
					 . chr(($char >> 10) & 0xFF)
					 . chr(0xDC | (($char >> 8) & 0x03))
					 . chr($char & 0xFF);
		}

		// ignoring UTF-32 for now, sorry
		return '';
	}

	/**
	 * encodes an arbitrary variable into JSON format
	 *
	 * @param $var Mixed: any number, boolean, string, array, or object to be encoded.
	 *			see argument 1 to Services_JSON() above for array-parsing behavior.
	 *			if var is a strng, note that encode() always expects it
	 *			to be in ASCII or UTF-8 format!
	 * @param $pretty Boolean: pretty-print output with indents and newlines
	 *
	 * @return mixed JSON string representation of input var or an error if a problem occurs
	 * @access public
	 */
	function encode($var, $pretty=false)
	{
		$this->indent = 0;
		$this->pretty = $pretty;
		$this->nameValSeparator = $pretty ? ': ' : ':';
		return $this->encode2($var);
	}

   	/**
	 * encodes an arbitrary variable into JSON format
	 *
	 * @param $var Mixed: any number, boolean, string, array, or object to be encoded.
	 *			see argument 1 to Services_JSON() above for array-parsing behavior.
	 *			if var is a strng, note that encode() always expects it
	 *			to be in ASCII or UTF-8 format!
	 *
	 * @return mixed JSON string representation of input var or an error if a problem occurs
	 * @access private
	 */
	function encode2($var)
	{
		if ($this->pretty) {
			$close = "\n" . str_repeat("\t", $this->indent);
			$open = $close . "\t";
			$mid = ',' . $open;
		}
		else {
			$open = $close = '';
			$mid = ',';
		}

		switch (gettype($var)) {
			case 'boolean':
				return $var ? 'true' : 'false';

			case 'NULL':
				return 'null';

			case 'integer':
				return (int) $var;

			case 'double':
			case 'float':
				return (float) $var;

			case 'string':
				// STRINGS ARE EXPECTED TO BE IN ASCII OR UTF-8 FORMAT
				$ascii = '';
				$strlen_var = strlen($var);

			   /*
				* Iterate over every character in the string,
				* escaping with a slash or encoding to UTF-8 where necessary
				*/
				for ($c = 0; $c < $strlen_var; ++$c) {

					$ord_var_c = ord($var{$c});

					switch (true) {
						case $ord_var_c == 0x08:
							$ascii .= '\b';
							break;
						case $ord_var_c == 0x09:
							$ascii .= '\t';
							break;
						case $ord_var_c == 0x0A:
							$ascii .= '\n';
							break;
						case $ord_var_c == 0x0C:
							$ascii .= '\f';
							break;
						case $ord_var_c == 0x0D:
							$ascii .= '\r';
							break;

						case $ord_var_c == 0x22:
						case $ord_var_c == 0x2F:
						case $ord_var_c == 0x5C:
							// double quote, slash, slosh
							$ascii .= '\\'.$var{$c};
							break;

						case (($ord_var_c >= 0x20) && ($ord_var_c <= 0x7F)):
							// characters U-00000000 - U-0000007F (same as ASCII)
							$ascii .= $var{$c};
							break;

						case (($ord_var_c & 0xE0) == 0xC0):
							// characters U-00000080 - U-000007FF, mask 110XXXXX
							// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
							$char = pack('C*', $ord_var_c, ord($var{$c + 1}));
							$c += 1;
							$utf16 = $this->utf82utf16($char);
							$ascii .= sprintf('\u%04s', bin2hex($utf16));
							break;

						case (($ord_var_c & 0xF0) == 0xE0):
							// characters U-00000800 - U-0000FFFF, mask 1110XXXX
							// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
							$char = pack('C*', $ord_var_c,
									ord($var{$c + 1}),
									ord($var{$c + 2}));
							$c += 2;
							$utf16 = $this->utf82utf16($char);
							$ascii .= sprintf('\u%04s', bin2hex($utf16));
							break;

						case (($ord_var_c & 0xF8) == 0xF0):
							// characters U-00010000 - U-001FFFFF, mask 11110XXX
							// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
							// These will always return a surrogate pair
							$char = pack('C*', $ord_var_c,
									ord($var{$c + 1}),
									ord($var{$c + 2}),
									ord($var{$c + 3}));
							$c += 3;
							$utf16 = $this->utf82utf16($char);
							if($utf16 == '') {
								$ascii .= '\ufffd';
							} else {
								$utf16 = str_split($utf16, 2);
								$ascii .= sprintf('\u%04s\u%04s', bin2hex($utf16[0]), bin2hex($utf16[1]));
							}
							break;
					}
				}

				return '"'.$ascii.'"';

			case 'array':
			   /*
				* As per JSON spec if any array key is not an integer
				* we must treat the the whole array as an object. We
				* also try to catch a sparsely populated associative
				* array with numeric keys here because some JS engines
				* will create an array with empty indexes up to
				* max_index which can cause memory issues and because
				* the keys, which may be relevant, will be remapped
				* otherwise.
				*
				* As per the ECMA and JSON specification an object may
				* have any string as a property. Unfortunately due to
				* a hole in the ECMA specification if the key is a
				* ECMA reserved word or starts with a digit the
				* parameter is only accessible using ECMAScript's
				* bracket notation.
				*/

				// treat as a JSON object
				if (is_array($var) && count($var) && (array_keys($var) !== range(0, sizeof($var) - 1))) {
					$this->indent++;
					$properties = array_map(array($this, 'name_value'),
								array_keys($var),
								array_values($var));
					$this->indent--;

					foreach($properties as $property) {
						if($this->isError($property)) {
							return $property;
						}
					}

					return '{' . $open . join($mid, $properties) . $close . '}';
				}

				// treat it like a regular array
				$this->indent++;
				$elements = array_map(array($this, 'encode2'), $var);
				$this->indent--;

				foreach($elements as $element) {
					if($this->isError($element)) {
						return $element;
					}
				}

				return '[' . $open . join($mid, $elements) . $close . ']';

			case 'object':
				$vars = get_object_vars($var);

				$this->indent++;
				$properties = array_map(array($this, 'name_value'),
							array_keys($vars),
							array_values($vars));
				$this->indent--;

				foreach($properties as $property) {
					if($this->isError($property)) {
						return $property;
					}
				}

				return '{' . $open . join($mid, $properties) . $close . '}';

			default:
				return ($this->use & SERVICES_JSON_SUPPRESS_ERRORS)
					? 'null'
					: new Services_JSON_Error(gettype($var)." can not be encoded as JSON string");
		}
	}

	/**
	 * array-walking function for use in generating JSON-formatted name-value pairs
	 *
	 * @param $name String: name of key to use
	 * @param $value Mixed: reference to an array element to be encoded
	 *
	 * @return String: JSON-formatted name-value pair, like '"name":value'
	 * @access private
	 */
	function name_value($name, $value)
	{
		$encoded_value = $this->encode2($value);

		if($this->isError($encoded_value)) {
			return $encoded_value;
		}

		return $this->encode2(strval($name)) . $this->nameValSeparator . $encoded_value;
	}

	/**
	 * reduce a string by removing leading and trailing comments and whitespace
	 *
	 * @param $str String: string value to strip of comments and whitespace
	 *
	 * @return String: string value stripped of comments and whitespace
	 * @access private
	 */
	function reduce_string($str)
	{
		$str = preg_replace(array(

				// eliminate single line comments in '// ...' form
				'#^\s*//(.+)$#m',

				// eliminate multi-line comments in '/* ... */' form, at start of string
				'#^\s*/\*(.+)\*/#Us',

				// eliminate multi-line comments in '/* ... */' form, at end of string
				'#/\*(.+)\*/\s*$#Us'

			), '', $str);

		// eliminate extraneous space
		return trim($str);
	}

	/**
	 * decodes a JSON string into appropriate variable
	 *
	 * @param $str String: JSON-formatted string
	 *
	 * @return mixed number, boolean, string, array, or object
	 *		   corresponding to given JSON input string.
	 *		   See argument 1 to Services_JSON() above for object-output behavior.
	 *		   Note that decode() always returns strings
	 *		   in ASCII or UTF-8 format!
	 * @access public
	 */
	function decode($str)
	{
		$str = $this->reduce_string($str);

		switch (strtolower($str)) {
			case 'true':
				return true;

			case 'false':
				return false;

			case 'null':
				return null;

			default:
				$m = array();

				if (is_numeric($str)) {
					// Lookie-loo, it's a number

					// This would work on its own, but I'm trying to be
					// good about returning integers where appropriate:
					// return (float)$str;

					// Return float or int, as appropriate
					return ((float)$str == (integer)$str)
						? (integer)$str
						: (float)$str;

				} elseif (preg_match('/^("|\').*(\1)$/s', $str, $m) && $m[1] == $m[2]) {
					// STRINGS RETURNED IN UTF-8 FORMAT
					$delim = substr($str, 0, 1);
					$chrs = substr($str, 1, -1);
					$utf8 = '';
					$strlen_chrs = strlen($chrs);

					for ($c = 0; $c < $strlen_chrs; ++$c) {

						$substr_chrs_c_2 = substr($chrs, $c, 2);
						$ord_chrs_c = ord($chrs{$c});

						switch (true) {
							case $substr_chrs_c_2 == '\b':
								$utf8 .= chr(0x08);
								++$c;
								break;
							case $substr_chrs_c_2 == '\t':
								$utf8 .= chr(0x09);
								++$c;
								break;
							case $substr_chrs_c_2 == '\n':
								$utf8 .= chr(0x0A);
								++$c;
								break;
							case $substr_chrs_c_2 == '\f':
								$utf8 .= chr(0x0C);
								++$c;
								break;
							case $substr_chrs_c_2 == '\r':
								$utf8 .= chr(0x0D);
								++$c;
								break;

							case $substr_chrs_c_2 == '\\"':
							case $substr_chrs_c_2 == '\\\'':
							case $substr_chrs_c_2 == '\\\\':
							case $substr_chrs_c_2 == '\\/':
								if (($delim == '"' && $substr_chrs_c_2 != '\\\'') ||
								   ($delim == "'" && $substr_chrs_c_2 != '\\"')) {
									$utf8 .= $chrs{++$c};
								}
								break;

							case preg_match('/\\\uD[89AB][0-9A-F]{2}\\\uD[C-F][0-9A-F]{2}/i', substr($chrs, $c, 12)):
								// escaped unicode surrogate pair
								$utf16 = chr(hexdec(substr($chrs, ($c + 2), 2)))
									   . chr(hexdec(substr($chrs, ($c + 4), 2)))
									   . chr(hexdec(substr($chrs, ($c + 8), 2)))
									   . chr(hexdec(substr($chrs, ($c + 10), 2)));
								$utf8 .= $this->utf162utf8($utf16);
								$c += 11;
								break;

							case preg_match('/\\\u[0-9A-F]{4}/i', substr($chrs, $c, 6)):
								// single, escaped unicode character
								$utf16 = chr(hexdec(substr($chrs, ($c + 2), 2)))
									   . chr(hexdec(substr($chrs, ($c + 4), 2)));
								$utf8 .= $this->utf162utf8($utf16);
								$c += 5;
								break;

							case ($ord_chrs_c >= 0x20) && ($ord_chrs_c <= 0x7F):
								$utf8 .= $chrs{$c};
								break;

							case ($ord_chrs_c & 0xE0) == 0xC0:
								// characters U-00000080 - U-000007FF, mask 110XXXXX
								//see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
								$utf8 .= substr($chrs, $c, 2);
								++$c;
								break;

							case ($ord_chrs_c & 0xF0) == 0xE0:
								// characters U-00000800 - U-0000FFFF, mask 1110XXXX
								// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
								$utf8 .= substr($chrs, $c, 3);
								$c += 2;
								break;

							case ($ord_chrs_c & 0xF8) == 0xF0:
								// characters U-00010000 - U-001FFFFF, mask 11110XXX
								// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
								$utf8 .= substr($chrs, $c, 4);
								$c += 3;
								break;

							case ($ord_chrs_c & 0xFC) == 0xF8:
								// characters U-00200000 - U-03FFFFFF, mask 111110XX
								// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
								$utf8 .= substr($chrs, $c, 5);
								$c += 4;
								break;

							case ($ord_chrs_c & 0xFE) == 0xFC:
								// characters U-04000000 - U-7FFFFFFF, mask 1111110X
								// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
								$utf8 .= substr($chrs, $c, 6);
								$c += 5;
								break;

						}

					}

					return $utf8;

				} elseif (preg_match('/^\[.*\]$/s', $str) || preg_match('/^\{.*\}$/s', $str)) {
					// array, or object notation

					if ($str{0} == '[') {
						$stk = array(SERVICES_JSON_IN_ARR);
						$arr = array();
					} else {
						if ($this->use & SERVICES_JSON_LOOSE_TYPE) {
							$stk = array(SERVICES_JSON_IN_OBJ);
							$obj = array();
						} else {
							$stk = array(SERVICES_JSON_IN_OBJ);
							$obj = new stdClass();
						}
					}

					array_push($stk, array(	'what'  => SERVICES_JSON_SLICE,
								'where' => 0,
								'delim' => false));

					$chrs = substr($str, 1, -1);
					$chrs = $this->reduce_string($chrs);

					if ($chrs == '') {
						if (reset($stk) == SERVICES_JSON_IN_ARR) {
							return $arr;

						} else {
							return $obj;

						}
					}

					//print("\nparsing {$chrs}\n");

					$strlen_chrs = strlen($chrs);

					for ($c = 0; $c <= $strlen_chrs; ++$c) {

						$top = end($stk);
						$substr_chrs_c_2 = substr($chrs, $c, 2);

						if (($c == $strlen_chrs) || (($chrs{$c} == ',') && ($top['what'] == SERVICES_JSON_SLICE))) {
							// found a comma that is not inside a string, array, etc.,
							// OR we've reached the end of the character list
							$slice = substr($chrs, $top['where'], ($c - $top['where']));
							array_push($stk, array('what' => SERVICES_JSON_SLICE, 'where' => ($c + 1), 'delim' => false));
							//print("Found split at {$c}: ".substr($chrs, $top['where'], (1 + $c - $top['where']))."\n");

							if (reset($stk) == SERVICES_JSON_IN_ARR) {
								// we are in an array, so just push an element onto the stack
								array_push($arr, $this->decode($slice));

							} elseif (reset($stk) == SERVICES_JSON_IN_OBJ) {
								// we are in an object, so figure
								// out the property name and set an
								// element in an associative array,
								// for now
								$parts = array();

								if (preg_match('/^\s*(["\'].*[^\\\]["\'])\s*:\s*(\S.*),?$/Uis', $slice, $parts)) {
									// "name":value pair
									$key = $this->decode($parts[1]);
									$val = $this->decode($parts[2]);

									if ($this->use & SERVICES_JSON_LOOSE_TYPE) {
										$obj[$key] = $val;
									} else {
										$obj->$key = $val;
									}
								} elseif (preg_match('/^\s*(\w+)\s*:\s*(\S.*),?$/Uis', $slice, $parts)) {
									// name:value pair, where name is unquoted
									$key = $parts[1];
									$val = $this->decode($parts[2]);

									if ($this->use & SERVICES_JSON_LOOSE_TYPE) {
										$obj[$key] = $val;
									} else {
										$obj->$key = $val;
									}
								}

							}

						} elseif ((($chrs{$c} == '"') || ($chrs{$c} == "'")) && ($top['what'] != SERVICES_JSON_IN_STR)) {
							// found a quote, and we are not inside a string
							array_push($stk, array('what' => SERVICES_JSON_IN_STR, 'where' => $c, 'delim' => $chrs{$c}));
							//print("Found start of string at {$c}\n");

						} elseif (($chrs{$c} == $top['delim']) &&
								 ($top['what'] == SERVICES_JSON_IN_STR) &&
								 (($chrs{$c - 1} != '\\') ||
								 ($chrs{$c - 1} == '\\' && $chrs{$c - 2} == '\\'))) {
							// found a quote, we're in a string, and it's not escaped
							array_pop($stk);
							//print("Found end of string at {$c}: ".substr($chrs, $top['where'], (1 + 1 + $c - $top['where']))."\n");

						} elseif (($chrs{$c} == '[') &&
								 in_array($top['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) {
							// found a left-bracket, and we are in an array, object, or slice
							array_push($stk, array('what' => SERVICES_JSON_IN_ARR, 'where' => $c, 'delim' => false));
							//print("Found start of array at {$c}\n");

						} elseif (($chrs{$c} == ']') && ($top['what'] == SERVICES_JSON_IN_ARR)) {
							// found a right-bracket, and we're in an array
							array_pop($stk);
							//print("Found end of array at {$c}: ".substr($chrs, $top['where'], (1 + $c - $top['where']))."\n");

						} elseif (($chrs{$c} == '{') &&
								 in_array($top['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) {
							// found a left-brace, and we are in an array, object, or slice
							array_push($stk, array('what' => SERVICES_JSON_IN_OBJ, 'where' => $c, 'delim' => false));
							//print("Found start of object at {$c}\n");

						} elseif (($chrs{$c} == '}') && ($top['what'] == SERVICES_JSON_IN_OBJ)) {
							// found a right-brace, and we're in an object
							array_pop($stk);
							//print("Found end of object at {$c}: ".substr($chrs, $top['where'], (1 + $c - $top['where']))."\n");

						} elseif (($substr_chrs_c_2 == '/*') &&
								 in_array($top['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) {
							// found a comment start, and we are in an array, object, or slice
							array_push($stk, array('what' => SERVICES_JSON_IN_CMT, 'where' => $c, 'delim' => false));
							$c++;
							//print("Found start of comment at {$c}\n");

						} elseif (($substr_chrs_c_2 == '*/') && ($top['what'] == SERVICES_JSON_IN_CMT)) {
							// found a comment end, and we're in one now
							array_pop($stk);
							$c++;

							for ($i = $top['where']; $i <= $c; ++$i)
								$chrs = substr_replace($chrs, ' ', $i, 1);

							//print("Found end of comment at {$c}: ".substr($chrs, $top['where'], (1 + $c - $top['where']))."\n");

						}

					}

					if (reset($stk) == SERVICES_JSON_IN_ARR) {
						return $arr;

					} elseif (reset($stk) == SERVICES_JSON_IN_OBJ) {
						return $obj;

					}

				}
		}
	}

	/**
	 * @todo Ultimately, this should just call PEAR::isError()
	 */
	function isError($data, $code = null)
	{
		if ( self::pearInstalled() ) {
			//avoid some strict warnings on PEAR isError check (looks like http://pear.php.net/bugs/bug.php?id=9950 has been around for some time)
			return @PEAR::isError($data, $code);
		} elseif (is_object($data) && (get_class($data) == 'services_json_error' ||
				is_subclass_of($data, 'services_json_error'))) {
			return true;
		}

		return false;
	}
}


// Hide the PEAR_Error variant from Doxygen
/// @cond
if (class_exists('PEAR_Error')) {

	/**
	 * @ingroup API
	 */
	class Services_JSON_Error extends PEAR_Error
	{
		function Services_JSON_Error($message = 'unknown error', $code = null,
						$mode = null, $options = null, $userinfo = null)
		{
			parent::PEAR_Error($message, $code, $mode, $options, $userinfo);
		}
	}

} else {
/// @endcond

	/**
	 * @todo Ultimately, this class shall be descended from PEAR_Error
	 * @ingroup API
	 */
	class Services_JSON_Error
	{
		function Services_JSON_Error($message = 'unknown error', $code = null,
						$mode = null, $options = null, $userinfo = null)
		{

		}
	}
}
