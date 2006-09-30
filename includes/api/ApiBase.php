<?php


/*
 * Created on Sep 5, 2006
 *
 * API for MediaWiki 1.8+
 *
 * Copyright (C) 2006 Yuri Astrakhan <FirstnameLastname@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

// Multi-valued enums, limit the values user can supply for the parameter
define('GN_ENUM_DFLT', 'dflt');
define('GN_ENUM_ISMULTI', 'multi');
define('GN_ENUM_TYPE', 'type');
define('GN_ENUM_MAX1', 'max1');
define('GN_ENUM_MAX2', 'max2');
define('GN_ENUM_MIN', 'min');

abstract class ApiBase {

	private $mMainModule;

	/**
	* Constructor
	*/
	public function __construct($mainModule) {
		$this->mMainModule = $mainModule;
	}

	/**
	 * Executes this module
	 */
	abstract function execute();

	/**
	 * Get main module
	 */
	public function getMain() {
		return $this->mMainModule;
	}

	/**
	 * If this module's $this is the same as $this->mMainModule, its the root, otherwise no
	 */
	public function isMain() {
		return $this === $this->mMainModule;
	}

	/**
	 * Get result object
	 */
	public function getResult() {
		// Main module has getResult() method overriden
		// Safety - avoid infinite loop:
		if ($this->isMain())
			$this->dieDebug(__METHOD__ .
			' base method was called on main module. ');
		return $this->getMain()->getResult();
	}

	/**
	 * Generates help message for this module, or false if there is no description
	 */
	public function makeHelpMsg() {

		static $lnPrfx = "\n  ";

		$msg = $this->getDescription();

		if ($msg !== false) {

			if (!is_array($msg))
				$msg = array (
					$msg
				);
			$msg = $lnPrfx . implode($lnPrfx, $msg) . "\n";

			// Parameters
			$paramsMsg = $this->makeHelpMsgParameters();
			if ($paramsMsg !== false) {
				$msg .= "Parameters:\n$paramsMsg";
			}

			// Examples
			$examples = $this->getExamples();
			if ($examples !== false) {
				if (!is_array($examples))
					$examples = array (
						$examples
					);
				$msg .= 'Example' . (count($examples) > 1 ? 's' : '') . ":\n  ";
				$msg .= implode($lnPrfx, $examples) . "\n";
			}
		}

		return $msg;
	}

	public function makeHelpMsgParameters() {
		$params = $this->getAllowedParams();
		if ($params !== false) {
			
			$paramsDescription = $this->getParamDescription();
			$msg = '';
			foreach (array_keys($params) as $paramName) {
				$desc = isset ($paramsDescription[$paramName]) ? $paramsDescription[$paramName] : '';
				if (is_array($desc))
					$desc = implode("\n" . str_repeat(' ', 19), $desc);
				$msg .= sprintf("  %-14s - %s\n", $paramName, $desc);
			}
			return $msg;
		
		}
		else
		 	return false; 
	}

	/**
	 * Returns the description string for this module
	 */
	protected function getDescription() {
		return false;
	}

	/**
	 * Returns usage examples for this module. Return null if no examples are available.
	 */
	protected function getExamples() {
		return false;
	}

	/**
	 * Returns an array of allowed parameters (keys) => default value for that parameter
	 */
	protected function getAllowedParams() {
		return false;
	}

	/**
	 * Returns the description string for the given parameter.
	 */
	protected function getParamDescription() {
		return false;
	}

	/**
	* Using getAllowedParams(), makes an array of the values provided by the user,
	* with key being the name of the variable, and value - validated value from user or default.
	* This method can be used to generate local variables using extract().
	*/
	public function extractRequestParams() {
		$params = $this->getAllowedParams();
		$results = array ();

		foreach ($params as $paramName => $paramSettings)
			$results[$paramName] = $this->getParameter($paramName, $paramSettings);

		return $results;
	}

	public function getParameter($paramName, $paramSettings){
		global $wgRequest;

		if (!is_array($paramSettings)) {
			$default = $paramSettings;
			$multi = false;
			$type = gettype($paramSettings);
		} else {
			$default = isset ($paramSettings[GN_ENUM_DFLT]) ? $paramSettings[GN_ENUM_DFLT] : null;
			$multi = isset ($paramSettings[GN_ENUM_ISMULTI]) ? $paramSettings[GN_ENUM_ISMULTI] : false;
			$type = isset ($paramSettings[GN_ENUM_TYPE]) ? $paramSettings[GN_ENUM_TYPE] : null;

			// When type is not given, and no choices, the type is the same as $default
			if (!isset ($type)) {
				if (isset ($default))
					$type = gettype($default);
				else
					$type = 'NULL'; // allow everything
			}
		}

		if ($type == 'boolean') {
			if (isset ($default) && $default !== false) {
				// Having a default value of anything other than 'false' is pointless
				$this->dieDebug("Boolean param $paramName's default is set to '$default'");
			}

            $value = $wgRequest->getCheck($paramName);
		} else
        	$value = $wgRequest->getVal($paramName, $default);

		if (isset ($value) && ($multi || is_array($type)))
			$value = $this->parseMultiValue($paramName, $value, $multi, is_array($type) ? $type : null);

		// More validation only when choices were not given
		// choices were validated in parseMultiValue()
		if (!is_array($type) && isset ($value)) {

			switch ($type) {
				case 'NULL' : // nothing to do
					break;
				case 'string' : // nothing to do
					break;
				case 'integer' : // Force everything using intval()
					$value = is_array($value) ? array_map('intval', $value) : intval($value);
					break;
				case 'limit' :
					if (!isset ($paramSettings[GN_ENUM_MAX1]) || !isset ($paramSettings[GN_ENUM_MAX2]))
						$this->dieDebug("MAX1 or MAX2 are not defined for the limit $paramName");
					if ($multi)
						$this->dieDebug("Multi-values not supported for $paramName");
					$min = isset ($paramSettings[GN_ENUM_MIN]) ? $paramSettings[GN_ENUM_MIN] : 0;
					$value = intval($value);
					$this->validateLimit($paramName, $value, $min, $paramSettings[GN_ENUM_MAX1], $paramSettings[GN_ENUM_MAX2]);
					break;
				case 'boolean' :
					if ($multi)
						$this->dieDebug("Multi-values not supported for $paramName");
					break;
				case 'timestamp' :
					if ($multi)
						$this->dieDebug("Multi-values not supported for $paramName");
					$value = $this->prepareTimestamp($value); // Adds quotes around timestamp							
					break;
				default :
					$this->dieDebug("Param $paramName's type is unknown - $type");

			}
		}

		return $value;	
	}
	
	/**
	* Return an array of values that were given in a "a|b|c" notation,
	* after it optionally validates them against the list allowed values.
	* 
	* @param valueName - The name of the parameter (for error reporting)
	* @param value - The value being parsed
	* @param allowMultiple - Can $value contain more than one value separated by '|'?
	* @param allowedValues - An array of values to check against. If null, all values are accepted.
	* @return (allowMultiple ? an_array_of_values : a_single_value) 
	*/
	protected function parseMultiValue($valueName, $value, $allowMultiple, $allowedValues) {
		$valuesList = explode('|', $value);
		if (!$allowMultiple && count($valuesList) != 1) {
			$possibleValues = is_array($allowedValues) ? "of '" . implode("', '", $allowedValues) . "'" : '';
			$this->dieUsage("Only one $possibleValues is allowed for parameter '$valueName'", "multival_$valueName");
		}
		if (is_array($allowedValues)) {
			$unknownValues = array_diff($valuesList, $allowedValues);
			if ($unknownValues) {
				$this->dieUsage("Unrecognised value" . (count($unknownValues) > 1 ? "s '" : " '") . implode("', '", $unknownValues) . "' for parameter '$valueName'", "unknown_$valueName");
			}
		}

		return $allowMultiple ? $valuesList : $valuesList[0];
	}

	/**
	* Validate the proper format of the timestamp string (14 digits), and add quotes to it.
	*/
	function prepareTimestamp($value) {
		if (preg_match('/^[0-9]{14}$/', $value)) {
			return $this->db->addQuotes($value);
		} else {
			$this->dieUsage('Incorrect timestamp format', 'badtimestamp');
		}
	}

	/**
	* Validate the value against the minimum and user/bot maximum limits. Prints usage info on failure.
	*/
	function validateLimit($varname, $value, $min, $max, $botMax) {
		global $wgUser;

		if ($value < $min) {
			$this->dieUsage("$varname may not be less than $min (set to $value)", $varname);
		}

		if ($this->getMain()->isBot()) {
			if ($value > $botMax) {
				$this->dieUsage("$varname may not be over $botMax (set to $value) for bots", $varname);
			}
		} else {
			if ($value > $max) {
				$this->dieUsage("$varname may not be over $max (set to $value) for users", $varname);
			}
		}
	}

	/**
	 * Call main module's error handler 
	 */
	public function dieUsage($description, $errorCode, $httpRespCode = 0) {
		$this->getMain()->mainDieUsage($description, $errorCode, $httpRespCode);
	}

	/**
	 * Internal code errors should be reported with this method
	 */
	protected function dieDebug($message) {
		wfDebugDieBacktrace("Internal error in '{get_class($this)}': $message");
	}
	
	/**
	 * Profiling: total module execution time
	 */
	private $mTimeIn = 0, $mModuleTime = 0; 
	
	/**
	 * Start module profiling
	 */
	public function profileIn()
	{
		if ($this->mTimeIn !== 0)
			$this->dieDebug(__FUNCTION__ . ' called twice without calling profileOut()');
		$this->mTimeIn = microtime(true);
	}
	
	/**
	 * End module profiling
	 */
	public function profileOut()
	{
		if ($this->mTimeIn === 0)
			$this->dieDebug(__FUNCTION__ . ' called without calling profileIn() first');
		if ($this->mDBTimeIn !== 0)
			$this->dieDebug(__FUNCTION__ . ' must be called after database profiling is done with profileDBOut()');

		$this->mModuleTime += microtime(true) - $this->mTimeIn;
		$this->mTimeIn = 0;
	}
	
	/**
	 * Total time the module was executed
	 */
	public function getProfileTime()
	{
		if ($this->mTimeIn !== 0)
			$this->dieDebug(__FUNCTION__ . ' called without calling profileOut() first');
		return $this->mModuleTime;
	}
	
	/**
	 * Profiling: database execution time
	 */
	private $mDBTimeIn = 0, $mDBTime = 0; 
	
	/**
	 * Start module profiling
	 */
	public function profileDBIn()
	{
		if ($this->mTimeIn === 0)
			$this->dieDebug(__FUNCTION__ . ' must be called while profiling the entire module with profileIn()');
		if ($this->mDBTimeIn !== 0)
			$this->dieDebug(__FUNCTION__ . ' called twice without calling profileDBOut()');
		$this->mDBTimeIn = microtime(true);
	}
	
	/**
	 * End database profiling
	 */
	public function profileDBOut()
	{
		if ($this->mTimeIn === 0)
			$this->dieDebug(__FUNCTION__ . ' must be called while profiling the entire module with profileIn()');
		if ($this->mDBTimeIn === 0)
			$this->dieDebug(__FUNCTION__ . ' called without calling profileDBIn() first');

		$time = microtime(true) - $this->mDBTimeIn;
		$this->mDBTimeIn = 0;

		$this->mDBTime += $time;
		$this->getMain()->mDBTime += $time;
	}
	
	/**
	 * Total time the module used the database
	 */
	public function getProfileDBTime()
	{
		if ($this->mDBTimeIn !== 0)
			$this->dieDebug(__FUNCTION__ . ' called without calling profileDBOut() first');
		return $this->mDBTime;
	}
}
?>