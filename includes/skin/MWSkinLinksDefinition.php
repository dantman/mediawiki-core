<?php
/**
 * Class implementing link definition handling
 *
 * @file
 */

class MWSkinLinksDefinition {

	protected $groups;

	public function __construct( $string ) {
		$this->groups = new stdClass;
		$this->parse( $string );
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
		$stack = new SplStack;
		foreach ( $lines as $line ) {
			if ( preg_match( '/^\s*#|^\s*$/', $line ) ) {
				// Comment or blank line, ignore
				continue;
			} elseif ( preg_match( '/^\[([-_a-zA-Z0-9]+)\]$/', $line, $m ) ) {
				$groupName = $m[1];
				if ( isset( $this->groups->{$groupName} ) ) {
					wfWarn( __METHOD__ . ": Duplicate group $groupName found, appending to it." );
				} else {
					$this->groups->{$groupName} = new stdClass;
					$this->groups->{$groupName}->name = $groupName;
					$this->groups->{$groupName}->list = new SplDoublyLinkedList;
				}
				$group = $this->groups->{$groupName};
				// Clear the stack
				while( !$stack->isEmpty() ) {
					$stack->pop();
				}
				// Push the group onto it
				$stack->push( $group );
			} elseif ( preg_match( '/^(?P<start>\*+|\++|-+)\s+(?<name>[-_.a-zA-Z0-9*]+)$/', $line, $m ) ) {
				if ( $stack->isEmpty() ) {
					wfWarn( __METHOD__ . ': Ignored link rule outside of group.' ); 
					continue;
				}
				$name = self::validName( $m['name'] );
				if ( !$name ) {
					wfWarn( __METHOD__ . ': Invalid rule name "' . $name . '".' );
					continue;
				}
				$depth = strlen( $m['start'] );
				// Trim the size of the stack to match our depth
				// eg: When a * follows a ** we pop off items so we start inserting at the right spot
				while( $stack->count() > $depth ) {
					$stack->pop();
				}
				// Deal with bad depths, eg: a *** following a * with no ** in between
				if ( $stack->count() != $depth ) {
					wfWarn( __METHOD__ . ': Invalid depth for rule "' . $name . '".' );
					continue;
				}
				$rule = new stdClass;
				$rule->name = $name;
				$rule->type = $m['start'][0];
				$rule->list = new SplDoublyLinkedList; 
				$stack->top()->list->push( $rule );
				$stack->push( $rule );
			} else {
				wfWarn( __METHOD__ . ': Invalid line in links definition "' . $line . '".' );
			}
	 	}
		$x = null;
		$x = function( $i ) use( &$x ) {
			echo '<li>' . implode( '.', $i->name ) . '<ul>';
			foreach ( $i->list as $it ) {
				$x( $it );
			}
			echo '</ul></li>';
		};
		echo '<ul>';
		foreach ( $this->groups as $groupName => $group ) {
			echo '<li>Group: ' . $groupName . ' (' . $group->list->count() . ')<ul>';
			foreach ( $group->list as $it ) {
				$x( $it );
			}
			echo '</ul></li>';
		}
		echo '</ul>';
	}

}