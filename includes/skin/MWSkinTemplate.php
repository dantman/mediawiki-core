<?php
/**
 * Class for MWSkin .tpl files
 *
 * @file
 */
use MWSkinTemplateTypes as TT;

class MWSkinTemplate {

	private $fileName;
	private $tree;

	public function __construct( $fileName ) {
		if ( !is_readable( $fileName ) ) {
			throw new Exception( "Template file does not exist or is not readable." );
		}
		$this->fileName = $fileName;
	}

	public static function newFromFile( $fileName ) {
		if ( is_readable( $fileName ) ) {
			return new self( $fileName );
		} else {
			return false;
		}
	}

	public function getText() {
		return file_get_contents( $this->fileName );
	}

	public function parse() {
		$stp = new SkinTemplateParser;
		// @todo See if optimizing this by caching the tree in some form has value
		$this->tree = $stp->parse( $this->getText() );
	}

	public function getTree() {
		if ( !isset( $this->tree ) ) {
			$this->parse();
		}
		return $this->tree;
	}

	public function outputBody( MWTemplateContext $context ) {
		$tree = $this->getTree();
		if ( $tree instanceof Exception ) {
			echo "<pre>" . htmlspecialchars( $tree ) . "</pre>";
			return;
		}
		wfProfileIn( __METHOD__ . '-output' );
		$stack = new SplStack;
		$item = new stdClass;
		$item->queue = new SplQueue;
		$item->queue->push( $tree );
		$stack->push( $item );

		do {
			$queue = $stack->top()->queue;
			while ( !$queue->isEmpty() ) {
				$node = $queue->shift();
				if ( is_string( $node ) ) {
					echo $node;
				} elseif ( $node instanceof STP_Substitution ) {
					echo MWTemplateContext::expandHtmlContext(
						$context->get( $node->name() )
					);
				} elseif ( $node instanceof STP_Function ) {
					echo MWTemplateContext::expandHtmlContext(
						MWSkinFunction::getFunction( $node->name() )->execute( $node->args() )
					);
				} elseif ( $node instanceof STP_Node ) {
					if ( $node instanceof STP_Comment ) {
					} else {
						$recursive = true;
						if ( $node instanceof STP_Tag && $tagName = $node->name() ) {
							$attrs = array();
							foreach( $node->attributes() as $attr ) {
								$name = $attr->name();
								if ( $attr->isValueless() ) {
									$value = true;
								} else {
									$value = "";
									$queue = new SplQueue;
									foreach ( $attr as $piece ) {
										$queue->push( $piece );
									}
									while( !$queue->isEmpty() ) {
										$piece = $queue->shift();
										if ( is_string( $piece ) ) {
											$value .= $piece;
										} elseif ( $piece instanceof STP_Substitution ) {
											$value .= MWTemplateContext::expandAttrContext(
												$name,
												$context->get( $piece->name() )
											);
										} elseif ( $piece instanceof STP_Function ) {
											$value .= MWTemplateContext::expandAttrContext(
												$name,
												MWSkinFunction::getFunction( $piece->name() )->execute( $piece->args() )
											);
										} elseif ( $piece instanceof STP_Conditional ) {
											$type = $piece->type();
											$expression = $piece->expression();
											// @fixme Should we have a new class for conditionals?
											if ( !in_array( $type, array( 'if', 'unless' ) ) ) {
												$value .= MWTemplateContext::expandAttrContext(
													new TT\Error( "There is no conditional by the name $type." )
												);
											} else {
												$test = MWTemplateContext::expandExpressionContext(
													// @fixme Should we have a complex expression parser instead?
													$context->get( $expression )
												);
												if ( $type == 'unless' ) {
													$test = !$test;
												}
												// If test is falsy we just continue and nothing inside the conditional gets added
												// If it's truthy the we add the children to the start of the queue and they get added to the value
												if ( $test ) {
													// Clone and reverse the children so we can shift onto the queue's start in the right order
													$children = clone $piece->children();
													$children->setIteratorMode( SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_KEEP );
													foreach ( $children as $child ) {
														$queue->unshift( $child );
													}
												}
											}
										} else {
											wfWarn( 'Unknown node type reached when iterating through attribute nodes.' );
										}
									}
								}
								$attrs[$name] = $value;
							}
							if ( Html::isVoid( $tagName ) ) {
								// Output the whole tag for a void element
								$recursive = false;
								echo Html::element( $tagName, $attrs );
								if ( $node->hasChildren() ) {
									wfWarn( "A void <$tagName>'s child nodes were discarded." );
								}
							} else {
								// Just open a non-void element
								echo Html::openElement( $tagName, $attrs );
							}
						}
						// Let void tags skip recursion
						if ( $recursive ) {
							$item = new stdClass;
							$item->node = $node;
							$item->queue = new SplQueue;
							foreach( $node as $child ) {
								$item->queue->push( $child );
							}
							$stack->push( $item );
							continue 2;
						}
					}
				} else {
					wfWarn( 'Unknown node type reached when iterating through a skin template dom.' );
				}
			}
			$item = $stack->pop();
			if ( isset( $item->node ) && $item->node instanceof STP_Tag ) {
				$tag = $item->node;
				if ( $tagName = $tag->name() ) {
					// @fixme Don't output end tags like </img> for void tags
					echo Html::closeElement( $tagName );
				}
			}
		} while ( !$stack->isEmpty() );
		wfProfileOut( __METHOD__ . '-output' );
	}

}