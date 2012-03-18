<?php
/**
 * Parser for a MediaWiki skin's template files
 *
 * @file
 */

abstract class STP_Item {

	protected function toString_startExt( $ind ) {
		return "";
	}

	protected function toString_block( $indent ) {
		return "";
	}

	public function toString( $indent = 0 ) {
		$ind = str_repeat( '	', $indent );
		$str = $ind . get_class( $this ) . $this->toString_startExt( $ind ) .  $this->toString_block( $indent ) . "\n";
		return $str;
	}

	public function __toString() {
		return $this->toString();
	}

}

abstract class STP_Curly extends STP_Item {

	public function __construct( $name ) {
		$this->name = $name;
		// $this->args = new SplDoublyLinkedList;
	}

	public function name() {
		return $this->name;
	}

	public function toString_startExt( $ind ) {
		return ":" . $this->name;
	}

	public function addArg( $arg ) {
		// $this->args->push( $arg );
	}
/*
	public function toString_block( $indent ) {
		$ind = str_repeat( '	', $indent );
		$str = " [\n";
		foreach ( $this->args as $arg ) {
			$str .= $ind . "	" . strtr( strlen( $arg ) > 32 ? substr( $arg, 0, 32 - 3 ) . '...' : $arg, array( "\n" => '\n' ) ) . "\n";
		}
		$str .= $ind . "]";
		return $str;
	}*/

}

class STP_Function extends STP_Curly {

	private $args;

	public function __construct( $name ) {
		parent::__construct( $name );
		$this->args = new MWSkinFunctionArgs;
	}

	public function addArg( $arg ) {
		$this->args->addPositional( $arg );
	}

	public function args() {
		return $this->args;
	}

}

class STP_Substitution extends STP_Curly {

}

abstract class STP_Node extends STP_Item implements IteratorAggregate {

	protected $children;

	public function __construct() {
		$this->children = new SplDoublyLinkedList;
	}

	public function toString_block( $indent ) {
		$ind = str_repeat( '	', $indent );
		$str = " {\n";
		foreach ( $this->children as $node ) {
			if ( $node instanceof STP_Item ) {
				$str .= $node->toString( $indent + 1 );
			} else {
				$str .= $ind . "	" . strtr( strlen( $node ) > 32 ? substr( $node, 0, 32 - 3 ) . '...' : $node, array( "\n" => '\n' ) ) . "\n";
			}
		}
		$str .= $ind . "}";
		return $str;
	}

	/** Children **/
	public function getIterator() {
		return $this->children;
	}

	public function hasChildren() {
		return !$this->children->isEmpty();
	}

	public function children() {
		return $this->children;
	}

	public function pushChild( $node ) {
		if ( !($node instanceof STP_Item) && !is_string( $node ) ) {
			throw new Exception( "Tried to push an invalid node type (" . gettype( $node ) . ") into the tree." );
		}
		if ( $node instanceof STP_Attr ) {
			throw new Exception( "Tried to push a STP_Attr where it doesn't belong." );
		}
		$this->children->push( $node );
	}

	/**
	 * Return the first child of this node
	 * @return STP_Node
	 */
	public function firstChild() {
		return $this->children->bottom();
	}

	/**
	 * Return the last child of this node
	 * @return STP_Node
	 */
	public function lastChild() {
		return $this->children->top();
	}

}

class STP_Root extends STP_Node {

}

class STP_Tag extends STP_Node {

	protected $tagName = null, $attributes = null, $blankFirstAttribute = false;
	public function __construct( $tagName ) {
		parent::__construct();
		$this->tagName = $tagName;
		$this->attributes = new SplDoublyLinkedList;
	}

	public function name() {
		return $this->tagName;
	}

	public function pushChild( $node ) {
		if ( $node instanceof STP_Attr ) {
			$this->attributes->push( $node );
		} else {
			parent::pushChild( $node );
		}
	}

	public function blankFirstAttribute( $name = null ) {
		if ( !is_null( $name ) ) {
			if ( count( $this->attributes ) > 0 || $this->blankFirstAttribute ) {
				throw new Exception( "Tried to set a blank first attribute on a node already with attributes." );
			}
			$this->blankFirstAttribute = $name;
		} else {
			return $this->blankFirstAttribute;
		}
	}

	public function setAttribute( $name, $value, $blankFirst = false ) {
		if ( array_key_exists( $name, $this->attributes ) ) {
			throw new Exception( "Duplicate attribute $name found on tag." );
		}
		if ( $blankFirst ) {
			if ( count( $this->attributes ) > 0 ) {
				throw new Exception( "Tried to set a blank first attribute on a node already with attributes." );
			}
			$this->blankFirstAttribute = $name;
		}
		$this->attributes[$name] = $value;
	}

	public function attributes() {
		return $this->attributes;
	}

	public function toString_startExt( $ind ) {
		$str = ":";
		if ( $this->tagName ) {
			$str .= $this->tagName;
		} else {
			$str .= "{blank}";
		}
		$str .= "[";
		$first = true;
		foreach ( $this->attributes as $name => $value ) {
			if ( !$first ) {
				$str .= ", ";
			}
			$str .= "$name";
			if ( is_string( $value ) ) {
				$str .= "=\"$value\"";
			}
			$first = false;
		}
		$str .= "]";
		return $str;
	}

}

class STP_Attr extends STP_Node {

	private $name, $isBlank, $valueless;

	public function __construct( $name ) {
		parent::__construct();
		$this->name = $name;
		$this->valueless = false;
	}

	public function name() {
		return $this->name;
	}

	function setValueless() {
		$this->valueless = true;
	}

	public function isValueless() {
		return $this->valueless;
	}

}

class STP_Conditional extends STP_Node {

	private $type, $expression;

	public function __construct( $type, $expression ) { 
		parent::__construct();
		$this->type = $type;
		$this->expression = $expression;
	}

	public function type() {
		return $this->type;
	}

	public function expression() {
		return $this->expression;
	}

}

class STP_Comment extends STP_Node {

}

class SkinTemplateParser {

	const IDENT_CHARS = "-_:.a-zA-Z0-9\\x{C0}-\\x{D6}\\x{D8}-\\x{F6}\\x{F8}-\\x{2FF}\\x{370}-\\x{37D}\\x{37F}-\\x{1FFF}\\x{200C}-\\x{200D}\\x{2070}-\\x{218F}\\x{2C00}-\\x{2FEF}\\x{3001}-\\x{D7FF}\\x{F900}-\\x{FDCF}\\x{FDF0}-\\x{FFFD}\\x{10000}-\\x{EFFFF}\\x{B7}\\x{0300}-\\x{036F}\\x{203F}-\\x{2040}";

	const STATE_DEFAULT = 'DEFAULT';
	const STATE_TAG = 'TAG';
	const STATE_STARTBLANKTAG = 'STARTBLANKTAG';
	const STATE_ARG_START = 'ARG_START';
	const STATE_ARG_SINGLE = 'ARG_SINGLE';
	const STATE_ARG_DOUBLE = 'ARG_DOUBLE';
	const STATE_COMMENT = 'COMMENT';
	const STATE_CURLY = 'CURLY';
	const STATE_SUBST = 'SUBST';
	const STATE_SUBST_ARGS = 'SUBST_ARGS'; // @fixme These aren't really args
	const STATE_FUNC = 'FUNC';
	const STATE_FUNC_ARGS = 'FUNC_ARGS';
	///const STATE_CONDITIONAL = 'CONDITIONAL';


	# List of void elements from HTML5, section 8.1.2 as of 2011-08-12
	private static $voidElements = array(
		'area',
		'base',
		'br',
		'col',
		'command',
		'embed',
		'hr',
		'img',
		'input',
		'keygen',
		'link',
		'meta',
		'param',
		'source',
		'track',
		'wbr',
	);

	# Subset of the rules for end tag omissions
	private static $endTagRules = array(
		'body' => array( false ),
		'li' => array( 'li', false ),
		'dt' => array( 'dt', 'dd' ),
		'dd' => array( 'dd', 'dt', false ),
		// <p> has an extra restriction when the parent is an <a> but it's not important enough to special case
		'p' => array( 'address', 'article', 'aside', 'blockquote', 'dir', 'div', 'dl', 'fieldset', 'footer', 'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'header', 'hgroup', 'hr', 'menu', 'nav', 'ol', 'p', 'pre', 'section', 'table', 'ul', false ),
		'rt' => array( 'rt', 'rp', false ),
		'rp' => array( 'rt', 'rp', false ),
		'optgroup' => array( 'optgroup', false ),
		'option' => array( 'option', 'optgroup', false ),
		// <colgroup>'s definition is different than this but this suits our purposes well enough
		'colgroup' => array( 'thead', 'tbody', 'tfoot', 'tr' ),
		'thead' => array( 'tbody', 'tfoot' ),
		'tbody' => array( 'tbody', 'tfoot', false ),
		'tfoot' => array( 'tbody', false ),
		'tr' => array( 'tr', false ),
		'td' => array( 'td', 'th', false ),
		'th' => array( 'td', 'th', false ),
	);
	private function matchAndContinue( $re, $option = null ) {
		if ( $option && !in_array( $option, array( 'start-anchor' ) ) ) {
			throw new Exception( "Invalid match option." );
		}
		$m = null;
		if ( preg_match( "{$re}u", $this->source, $m, PREG_OFFSET_CAPTURE, $this->offset ) ) {
			$match = array();
			foreach ( $m as $key => $value ) {
				$match[$key] = new stdClass;
				$match[$key]->text = $value[0];
				$match[$key]->offset = $value[1];
			}
			if ( $option == 'start-anchor' ) {
				// If we are anchored to the start and the offset does not match up return false
				if ( $this->offset != $match[0]->offset ) {
					return false;
				}
			}
			// Push everything before the match onto the topmost node as a text node
			$before = substr( $this->source, $this->offset, $match[0]->offset - $this->offset );
			if ( $before ) {
				$this->stack->top()->pushChild( $before );
			}
			// Increment the offset to AFTER the end of the match
			$this->offset = $match[0]->offset + strlen( $match[0]->text );
			return $match;
		} else {
			return false;
		}
	}

	private function unmatch( $m ) {
		$this->offset = $m[0]->offset;
	}

	private function rest() {
		$rest = substr( $this->source, $this->offset );
		$this->offset = strlen( $this->source ); // +1?
		return $rest;
	}

	private function pushTree( $node ) {
		$this->stack->top()->pushChild( $node );
		$this->stack->push( $node );
	}

	private function error( $msg ) {
		$parsedSource = substr( $this->source, 0, $this->offset );
		$line = substr_count( $parsedSource, "\n" ) + 1;
		$col = $this->offset - intval( strrpos( $parsedSource, "\n" ) );
		$chunk = strtr( substr( $this->source, max( 0, $this->offset - 5 ), 15 ), array( "\n" => '\n', "\r" => '\r' ) );
		$msg = "Parse error \"$msg\" at offset {$this->offset} (line: $line, col: $col, around: \"$chunk\")";
		return new Exception( $msg );
	}

	public function pushState( $state ) {
		$this->state->push( $state );
	}
	public function popState() {
		$this->state->pop();
	}
	public function replaceState( $state ) {
		$this->state->pop();
		$this->state->push( $state );
	}
	public function state( /* $state... */ ) {
		$states = func_get_args();
		if ( count( $states ) <= 0 ) {
			return $this->state->isEmpty() ? self::STATE_DEFAULT : $this->state->top();
		}
		if ( $this->state->isEmpty() ) {
			return in_array( self::STATE_DEFAULT, $states );
		}
		return in_array( $this->state->top(), $states );
	}


	public function parse( $source ) {
		wfProfileIn( __METHOD__ );
		$this->offset = 0;
		$this->source = $source;

		$this->stack = new SplStack;
		$this->state = new SplStack;
		$this->stack->push( new STP_Root );

		do {
			if ( $this->state( self::STATE_DEFAULT ) ) {
				if ( $m = $this->matchAndContinue( '#<!--|</|<|\{#' ) ) {
					switch( $m[0]->text ) {
					case '<!--':
						$this->pushTree( new STP_Comment );
						// Continue in comment state parsing the comment ending
						$this->pushState( self::STATE_COMMENT );
						break;
					case '</':
						if ( $m = $this->matchAndContinue( '/([' . self::IDENT_CHARS . ']+)?\s*>/', 'start-anchor' ) ) {
							$tagName = isset( $m[1] ) && $m[1]->text ? $m[1]->text : null;
							do {
								$tag = $this->stack->top();
								if ( $tag instanceof STP_Root ) {
									wfProfileOut( __METHOD__ );
									return $this->error( "Found a closing tag <{$tagName}> when all elements are already closed." );
								}
								$realTag = $tag->name();
								if ( $realTag && !$tagName ) {
									wfProfileOut( __METHOD__ );
									return $this->error( "Cannot close <{$realTag}> with a blank end tag (</>)." );
								} elseif ( $realTag && $realTag != $tagName ) {
									// If the tag on the top of the stack allows the end tag to be omitted when it's parent
									// element is closed pop the tag off the stack and then try matching the parent's tag
									if ( isset( self::$endTagRules[$realTag] ) && in_array( false, self::$endTagRules[$realTag] ) ) {
										$this->stack->pop();
										if ( !($this->stack->top() instanceof STP_Root) ) {
											continue;
										}
									}
									wfProfileOut( __METHOD__ );
									return $this->error( "Tag mismatch. Found a closing tag </{$tagName}> when expecting a closing tag for <{$realTag}>." );
								} elseif ( !$realTag && $tagName ) {
									// Blank tags like <mw:if="..."> CAN be closed with non-blank tags like </mw:if>
									$blankFirst = $tag->blankFirstAttribute();
									$blankMatch = $blankFirst &&
										(
											$tagName == $blankFirst ||
											($tagName == 'mw:' || $tagName == 'mw') && preg_match( '/^mw:.+$/', $blankFirst )
										);
									if ( !$blankMatch ) {
										wfProfileOut( __METHOD__ );
										return $this->error( "Tag mismatch. Found a closing tag </{$tagName}> when expecting a blank node closing tag." );
									}
								}
								break;
							} while ( true );
							// Nothing was wrong with  the end tag name, pop the tag off the stack and continue on in it's parent
							$this->stack->pop();
						} else {
							wfProfileOut( __METHOD__ );
							return $this->error( "Starting end of tag (\"</\") found without proper tag name or tag end (\"<\")." );
						}
						break;
					case '<':
						// Do a check for the tag name
						$tagName = null;
						if ( $m = $this->matchAndContinue( '/[' . self::IDENT_CHARS . ']+(=?)/', 'start-anchor' ) ) {
							if ( $m[1]->text != '=' ) {
								$tagName = $m[0]->text;
							} else {
								// If we find a = after the name it's probably something like <mw:if="..."> which is a blank node
								// We need to rewind the match we just had
								$this->unmatch( $m );
							}
						}

						$prevNode = $this->stack->top();
						if ( $prevNode instanceof STP_Tag && $prevName = $prevNode->name() ) {
							// Check the end tag rules for the current node
							// If this tag name we're abbout to create is included in the end tag rules t hen the current node allows
							// end tags to be omitted.
							// In that case pop the current node off the stack and continue by pushing the new node into the parent
							if ( isset( self::$endTagRules[$prevName] ) && in_array( $tagName, self::$endTagRules[$prevName] ) ) {
								$this->stack->pop();
							}
						}

						// Add a tag to the tree
						$tag = new STP_Tag( $tagName );
						$this->pushTree( $tag );
						// Continue in tag state parsing the arguments
						if ( $tagName ) {
							$this->pushState( self::STATE_TAG );
						} else {
							// If there is no tag name we continue in an alt mode where we ignore the normal whitespace rule for attributes
							$this->pushState( self::STATE_STARTBLANKTAG );
						}
						break;
					case '{':
						$this->pushState( self::STATE_CURLY );
						break;
					default:
						throw new Exception( "Invalid match {$m[0]->text}." );
					}
				} else {
					// No matches, everything else is text
					$rest = $this->rest();
					if ( $rest ) {
						$this->stack->top()->pushChild( $rest );
					}
					break;
				}
			} elseif ( $this->state( self::STATE_TAG ) || $this->state( self::STATE_STARTBLANKTAG ) ) {
				// If we're at the start of a blank tag like <mw:if="..."> the normal rules about whitespace preceding
				// the attribute do not apply.
				$whitespace = $this->state( self::STATE_STARTBLANKTAG ) ? '\s*' : '\s+';
				// @fixme Should we fix the attribute parsing so that foo=asdf/asdf works (the / that is)?
				// (?|"(?P<value>[^"]*)"|\'(?P<value>[^\']*)\'|(?P<value>[^\s/>]+))
				if ( $m = $this->matchAndContinue( '#' . $whitespace . '(?P<name>[' . self::IDENT_CHARS . ']+)(?P<eq>=)?|\s*(?P<close>/?)(?P<end>>)#', 'start-anchor' ) ) {
					if ( isset( $m['end'] ) && $m['end']->text ) {
						$tagName = $this->stack->top()->name();
						if ( isset( $m['close'] ) && $m['close']->text || in_array( $tagName, self::$voidElements ) ) {
							// This is a self-closing tag pop it off the end of the stack
							$this->stack->pop();
						}
						// Return to default state parsing
						$this->popState();
					} else {
						$name = $m['name']->text;

						if ( $this->state( self::STATE_STARTBLANKTAG ) ) {
							$this->stack->top()->blankFirstAttribute( $name );
						}

						$arg = new STP_Attr( $name );
						$this->pushTree( $arg );
						/*$value = true;
						if ( isset( $m['value'] ) ) {
							$value = $m['value']->text;
						}*/
						//$tag = $this->stack->top();
						/*try {
							//$tag->setAttribute( $name, $value, $this->state( self::STATE_STARTBLANKTAG ) );
						} catch ( Exception $e ) {
							wfProfileOut( __METHOD__ );
							return $this->error( $e->getMessage() );
						}*/
						// Make sure we're set to STATE_TAG, the STARTBLANKTAG behavior ends after the first attribute
						$this->replaceState( self::STATE_TAG );

						if ( isset( $m['eq'] ) && $m['eq']->text ) {
							$this->pushState( self::STATE_ARG_START );
						} else {
							// 
							$arg->setValueless();
							$this->stack->pop();
						}
					}
				} else {
					wfProfileOut( __METHOD__ );
					return $this->error( "End of tag started by < not found, or invalid sequence of characters before the closing >." );
				}
			} elseif ( $this->state( self::STATE_ARG_START ) ) {
				if ( $m = $this->matchAndContinue( '#(?P<start>["\'])|(?P<str>(?:[^\s/>]+|/(?!>))+)#s', 'start-anchor' ) ) {
					if ( isset( $m['start'] ) && $m['start']->text ) {
						$this->replaceState( $m['start']->text == "'" ? self::STATE_ARG_SINGLE : self::STATE_ARG_DOUBLE );
					} else {
						// Add the text used in this argument then pop the arg off and return to parsing out tag arguments
						$this->stack->top()->pushChild( $m['str']->text );
						$this->stack->pop();
						$this->popState();
					}
				} else {
					wfProfileOut( __METHOD__ );
					return $this->error( "End of attribute not found." );
				}
			} elseif ( $this->state( self::STATE_ARG_SINGLE, self::STATE_ARG_DOUBLE ) ) {
				$q = $this->state( self::STATE_ARG_SINGLE ) ? "'" : '"';
				if ( $m = $this->matchAndContinue( "#(?P<str>[^$q{]*)(?P<end>[$q{])#s", 'start-anchor' ) ) {
					if ( $m['str']->text ) {
						$this->stack->top()->pushChild( $m['str']->text );
					}
					if ( $m['end']->text == '{' ) {
						// Start parsing curly patterns
						$this->pushState( self::STATE_CURLY );
					} else {
						// Return to parsing out tag arguments
						$this->stack->pop();
						$this->popState();
					}
				} else {
					wfProfileOut( __METHOD__ );
					return $this->error( "End of attribute not found." );
				}
			} elseif ( $this->state( self::STATE_CURLY ) ) {
				if ( $m = $this->matchAndContinue( '#/(?P<cond>[-_\w]+)\}#', 'start-anchor' ) ) {
					// Matches an {/foo} end tag
					$top = $this->stack->top();
					if ( $top instanceof STP_Conditional ) {
						if ( $top->type() == $m['cond']->text ) {
							$this->stack->pop();
							$this->popState();
						} else {
							wfProfileOut( __METHOD__ );
							return $this->error( "Unexpected {/{$m['cond']->text}}, expecting a {/$top->name()} close tag." );
						}
					} else {
						wfProfileOut( __METHOD__ );
						return $this->error( "No {{$m['cond']->text}} condition to close." );
					}
				} elseif ( $m = $this->matchAndContinue( '/(?:(?:(?P<func>[-_\w]+):)|(?P<cond>[-_\w]+)\s+)?(?P<str>.*?)(?P<stop>\||\})/', 'start-anchor' ) ) {
					if ( isset( $m['func'] ) && $m['func']->text ) {
						$block = new STP_Function( $m['func']->text );
						$block->addArg( $m['str']->text );
					} elseif ( isset( $m['cond'] ) && $m['cond']->text ) {
						$top = $this->stack->top();
						if ( !($top instanceof STP_Conditional) && !($top instanceof STP_Attr) ) {
							wfProfileOut( __METHOD__ );
							return $this->error( "Curly conditionals may only be used inside attributes." );
						}
						$block = new STP_Conditional( $m['cond']->text, $m['str']->text );
					} else {
						$block = new STP_Substitution( $m['str']->text );
					}

					$this->pushTree( $block );

					switch( $m['stop']->text ) {
					case '|':
						if ( $block instanceof STP_Conditional ) {
							wfProfileOut( __METHOD__ );
							return $this->error( "Conditionals cannot have | parameters." );
						} else {
							// If we find a | continue into arg parsing
							$this->replaceState( $block instanceof STP_Function ? self::STATE_FUNC_ARGS : self::STATE_SUBST_ARGS );
						}
						break;
					case '}':
						if ( $block instanceof STP_Conditional ) {
							$this->popState();
						} else {
							// If we find a } pop off the curly item and return to default parsing
							$this->stack->pop();
							$this->popState();
						}
						break;
					default:
						throw new Exception( "Invalid match {$m['stop']->text}." );
					}
				} else {
					wfProfileOut( __METHOD__ );
					return $this->error( "Failed to find end of { tag." );
				}
			} elseif ( $this->state( self::STATE_SUBST_ARGS ) || $this->state( self::STATE_FUNC_ARGS ) ) {
				if ( $m = $this->matchAndContinue( '/(?P<str>.*?)(?P<stop>\||\})/', 'start-anchor' ) ) {
					$block = $this->stack->top();
					$block->addArg( $m['str']->text );

					if ( $m['stop']->text == '}' ) {
						// If we find a } pop off the curly item and return to the previous parsing
						$this->stack->pop();
						$this->popState();
					}
				} else {
					wfProfileOut( __METHOD__ );
					return $this->error( "Failed to find end of { tag." );
				}
			} else {
				throw new Exception( "Invalid state." );
			}
		} while( true );

		// Now that the source has ended pop off any tags on the top of the stack that allow the end tag to be omitted
		// when it's parent element is closed.
		while ( $this->stack->top() instanceof STP_Tag ) {
			$tag = $this->stack->top();
			$tagName = $tag->name();
			if ( isset( self::$endTagRules[$tagName] ) && in_array( false, self::$endTagRules[$tagName] ) ) {
				$this->stack->pop();
				continue;
			}
			break;
		}
		
		if ( !($this->stack->top() instanceof STP_Root) ) {
			wfProfileOut( __METHOD__ );
			return $this->error( "End of template reached with missing end tags." );
		}

		wfProfileOut( __METHOD__ );
		return $this->stack->bottom();
	}

}
