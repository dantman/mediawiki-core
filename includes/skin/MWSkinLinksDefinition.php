<?php
/**
 * Class implementing link definition handling
 *
 * @file
 */

class MWSkinLinksDefinition {

	protected $rules;

	public function __construct( $string ) {
		$this->parse( $string );
		$this->rules = new stdObj;
	}

	public static function newFromFile( $fileName ) {
		if ( is_readable( $fileName ) ) {
			return self::newFromString( file_get_contents( $fileName ) );
		} else {
			throw new Exception( "Links definition file does not exist or could not be read." );
		}
	}

	public static function newFromString( $string ) {
		$dfn = new self( $string );
		return $dfn;
	}

	protected static function validName( $name ) {
		$name = explode( '.', $name );
		// Validate the indiviual pieces
		// * is only valid as * or **, no more than ** and it cannot be used anywhere else
		// * - and _ must be used in a foo-bar pattern, not as foo- or -bar
		// A double .. creating an empty item is not valid
		foreach ( $name as $piece ) {
			if ( !preg_match( '/^([a-zA-Z0-9]+([-_][a-zA-Z0-9]+)*|\*{1,2})$/', $piece ) ) {
				// Invalid
				return false;
			}
		}
		// Validate wildcards
		// - Wildcards must be at the end, you cannot have foo.*.foo
		// - A ** wildcard must be the very last, and you cannot have more than one
		$wild = 0;
		foreach ( $name as $piece ) {
			if ( $wild >= 2 ) {
				// ** must be the very last, this is invalid
				return false;
			}
			if ( $piece == '*' ) {
				$wild = 1;
			} elseif ( $piece == '**' ) {
				$wild = 2;
			} else {
				if ( $wild >= 1 ) {
					// foo.*.foo is invalid
					// once a * has been reached everything after must be * or **
					return false;
				}
			}
		}
		// Return the separated name if valid
		return $name;
	}

	protected function parse( $string ) {
		$lines = preg_split( '/\r\n|\n|\r/', $string );
		$group = null;
		foreach ( $lines as $line ) {
			if ( preg_match( '/^\s*#|^\s*$/', $line ) ) {
				// Comment or blank line, ignore
				continue;
			} elseif ( preg_match( '/^\[([-_a-zA-Z0-9]+)\]$/', $line, $m ) ) {
				$group = $m[1];
			} elseif ( preg_match( '/^(?P<start>\*+|\++|-+)\s+(?<name>[-_.a-zA-Z0-9*]+)$/', $line, $m ) ) {
				if ( !$group ) {
					wfWarn( __METHOD__ . ': Ignored link rule outside of group.' ); 
					continue;
				}
				// @fixme This is wrong I need to properly account for the depth
				$this->addRule( $group, $m['name'] );
			} else {
				wfWarn( __METHOD__ . ': Invalid line in links definition "' . $line . '".' );
			}
		}
	}

	public function addRule( $group, $name ) {
		$name = self::validName( $name );
		if ( !$name ) {
			wfWarn( __METHOD__ . ': Invalid rule name "' . $name . '".' );
			return false;
		}
		// @todo
		return true;
	}

}