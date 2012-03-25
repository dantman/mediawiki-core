<?php
/**
 * Class implementing link definition handling
 *
 * @file
 */

class MWSkinLinksDefinition {

	protected $groups, $ruleTree;

	public function __construct( $string ) {
		$this->groups = new stdClass;
		$this->ruleTree = new stdClass;
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

	protected static function validName( $name, $type = 'rule' ) {
		$name = explode( '.', $name );
		// Validate the individual pieces
		// * is only valid as * or **, no more than ** and it cannot be used anywhere else
		// * - and _ must be used in a foo-bar pattern, not as foo- or -bar
		// A double .. creating an empty item is not valid
		foreach ( $name as $piece ) {
			if ( !preg_match( '/^([a-zA-Z0-9]+([-_][a-zA-Z0-9]+)*|\*{1,2}|#)$/', $piece ) ) {
				// Invalid
				return false;
			}
		}
		// Validate wildcards
		// - Wildcards must be at the end, you cannot have foo.*.foo
		// - A ** wildcard must be the very last, and you cannot have more than one
		// - #'s can also only be the very last
		$wild = 0;
		foreach ( $name as $piece ) {
			if ( $wild >= 2 || $wild === '#' ) {
				// ** and # must be the very last, this is invalid
				return false;
			}
			if ( $piece === '*' ) {
				$wild = 1;
			} elseif ( $piece === '**' ) {
				$wild = 2;
			} elseif ( $piece === '#' ) {
				$wild = '#';
			} else {
				if ( $wild >= 1 ) {
					// foo.*.foo is invalid
					// once a * has been reached everything after must be * or **
					return false;
				}
			}
		}
		// * is not valid in forInsert, and # is not valid in normal names
		$last = $name[count( $name ) - 1];
		if ( $type !== 'rule' && $last[0] === '*' ) {
			// * and ** is only valid in rule
			return false;
		} elseif ( $type !== 'link' && $last === '#' ) {
			// # is only valid in linke
			return false;
		} elseif ( $type === 'as' && count( $name ) > 1 ) {
			// as cannot have multiple pieces
			return false;
		}
		// Return the separated name if valid
		return $name;
	}

	protected function parse( $string ) {
		$lines = preg_split( '/\r\n|\n|\r/', $string );
		$group = null;
		$stack = new SplStack;
		foreach ( $lines as $line ) {
			// Strip comments off the line
			$line = preg_replace( '/\s*#.*$/', '', $line );
			if ( preg_match( '/^\s*$/', $line ) ) {
				// Nothing but a comment or blank line, ignore
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
			} elseif ( preg_match( '/^(?P<start>\*+|\++|-+)\s+(?<name>[-_.a-zA-Z0-9*]+)(?:\s+as\s+(?<as>[-_.a-zA-Z0-9*]+)|(?P<colon>:))?$/', $line, $m ) ) {
				if ( $stack->isEmpty() ) {
					wfWarn( __METHOD__ . ': Ignored link rule outside of group.' ); 
					continue;
				}
				$name = self::validName( $m['name'], isset( $m['colon'] ) && $m['colon'] ? 'as' : 'rule' );
				if ( !$name ) {
					wfWarn( __METHOD__ . ': Invalid rule name "' . $m['name'] . '".' );
					continue;
				}
				$as = null;
				if ( isset( $m['as'] ) && $m['as'] ) {
					$as = self::validName( $m['as'], 'as' );
					if ( !$as ) {
						wfWarn( __METHOD__ . ': Invalid as name "' . $m['as'] . '".' );
						continue;
					}
				}
				$depth = strlen( $m['start'] );
				// Trim the size of the stack to match our depth
				// eg: When a * follows a ** we pop off items so we start inserting at the right spot
				while( $stack->count() > $depth ) {
					$stack->pop();
				}
				// Deal with bad depths, eg: a *** following a * with no ** in between
				if ( $stack->count() != $depth ) {
					wfWarn( __METHOD__ . ': Invalid depth for rule "' . implode( '.', $name ) . '".' );
					continue;
				}
				$rule = new stdClass;
				if ( isset( $m['colon'] ) && $m['colon'] ) {
					$rule->name = false;
					$rule->as = implode( '.', $name );
					$rule->type = false;
				} else {
					$rule->name = $name;
					$last = $name[count( $name ) - 1];
					if ( $as ) {
						$rule->as = implode( '.', $as );
					} elseif ( $last[0] !== '*' ) {
						$rule->as = $last;
					} else {
						$rule->as = false;
					}
					$rule->type = $m['start'][0];
				}
				$rule->list = new SplDoublyLinkedList;

				// Push rule into the tree of rules in the group
				$stack->top()->list->push( $rule );
				$stack->push( $rule );

				if ( $rule->name ) {
					// For actual rules add a branch into the rules tree for efficient lookups
					$this->addRuleLookup( $rule );
				}
			} else {
				wfWarn( __METHOD__ . ': Invalid line in links definition "' . $line . '".' );
			}
	 	}
		$x = null;
		$x = function( $i ) use( &$x ) {
			echo '<li>(' . $i->type . ') ' . ( $i->name ? implode( '.', $i->name ) : '{none}' ) . ( $i->as ? ' as ' . $i->as : '' ) . '<ul>';
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

		$y = null;
		$y = function( $branch ) use( &$y ) {
			if ( isset( $branch->node ) ) {
				echo '<ul>';
				foreach ( $branch->node as $nodeName => $nodes ) {
					echo '<li>Node: ' . $nodeName . '<ul>';
					foreach ( $nodes as $i ) {
						echo '<li>(' . $i->type . ') ' . ( $i->name ? implode( '.', $i->name ) : '{none}' ) . ( $i->as ? ' as ' . $i->as : '' ) . '</li>';
					}
					echo '</ul></li>';
				}
				echo '</ul>';
			}
			if ( isset( $branch->tree ) ) {
				echo '<ul>';
				foreach ( $branch->tree as $sBranchName => $subBranch ) {
					echo '<li>Branch: ' . $sBranchName;
					$y( $subBranch );
					echo '</li>';
				}
				echo '</ul>';
			}
		};
		$y( $this->ruleTree );
	}

	protected function addRuleLookup( $rule ) {
		$name = $rule->name;
		$branch = $this->ruleTree;
		while ( count( $name ) > 1 ) {
			$piece = array_shift( $name );
			if ( !isset( $branch->tree ) ) {
				$branch->tree = new stdClass;
			}
			if ( !isset( $branch ->tree->{$piece} ) ) {
				$branch->tree->{$piece} = new stdClass;
			}
			$branch = $branch->tree->{$piece};
		}
		$last = array_shift( $name );
		if ( !isset( $branch->node ) ) {
			$branch->node = new stdClass;
		}
		if ( !isset( $branch->node->{$last} ) ) {
			$branch->node->{$last} = new SplDoublyLinkedList;
		}
		$branch->node->{$last}->push( $rule );
	}

	public function addLink( $origName, $link ) {
		$name = self::validName( $origName, 'link' );
		if ( !$name ) {
			wfWarn( __METHOD__ . ': Invalid link name "' . $origName . '".' );
			continue;
		}

		$rules = new MWSkinLinksRulesList;
		$additions = new SplDoublyLinkedList;
		$subtractions = new SplDoublyLinkedList;
		$insert = new SplQueue;
		$branches = array( $this->ruleTree );
		$pieces = $name; // copy		
		while( count( $pieces ) > 1 ) {
			$piece = array_shift( $pieces );
			$nextBranches = array();
			foreach ( $branches as $branch ) {
				if ( isset( $branch->tree ) ) {
					if ( isset( $branch->tree->{$piece} ) ) {
						$nextBranches[] = $branch->tree->{$piece};
					}
					if ( isset( $branch->tree->{'*'} ) ) {
						$nextBranches[] = $branch->tree->{'*'};
					}
				}
				if ( isset( $branch->node ) && isset( $branch->node->{'**'} ) ) {
					foreach ( $branch->node->{'**'} as $node ) {
						$insert->push( $node );
					}
				}
			}
			$branches = $nextBranches;
		}

		$last = array_shift( $pieces );
		$keys = array( $last, '*', '**' );
		foreach ( $branches as $branch ) {
			if ( $branch->node ) {
				foreach ( $keys  as $key ) {
					if ( isset( $branch->node->{$key} ) ) {
						foreach ( $branch->node->{$key} as $node ) {
							$insert->push( $node );
						}
					}
				}
			}
		}

		foreach ( $insert as $node ) {
			switch( $node->type ) {
			case '+': $additions->push( $node ); break;
			case '-': $subtractions->push( $node ); break;
			default: $rules->insert( $node ); break;
			}
		}

		echo '<fieldset><legend>' . implode( '.', $name ) . '</legend><ul>';
		foreach ( $rules as $rule ) {
			echo '<li> (' . $rule->type . ') ' . implode( '.', $rule->name ) . '</li>';
		}
		echo '</ul></fieldset>';

	}

}

class MWSkinLinksRulesList extends SplHeap {

	const A_TOP = +1;
	const B_TOP = -1;

	public function compare( $aR, $bR ) {
		$a = $aR->name;
		$b = $bR->name;
		do {
			$aP = array_shift( $a );
			$bP = array_shift( $b );
			if ( $aP === $bP ) {
				// Move on to the next chunk if the same
				continue;
			}
			// Sort things using ** at the start
			if ( $aP == '**' ) return self::B_TOP;
			if ( $bP == '**' ) return self::A_TOP;
			// Sort wildcards towards the start
			if ( $aP == '*' ) return self::B_TOP;
			if ( $bP == '*' ) return self::A_TOP;
			// We need to do /some/ kind of comparison, so in the event
			// there's a text match that should never happen just string compare
			return strcmp( $aP, $bP );
		} while( count( $a ) > 0 && count( $b ) > 0 );
		 // If we get here then everything up to min( a.length, b.length ) is the same
		// Sort shorter matches towards the start (if one is longer than 0 then it's the longer one)
		if ( count( $a ) > 0 ) return self::A_TOP;
		if ( count( $b ) > 0 ) return self::B_TOP;
		// If everything is exactly the same
		return 0;
	}

}


