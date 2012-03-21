<?php
/**
 * Class for MWSkin .tpl files
 *
 * @file
 */
use MWSkinTemplateTypes as TT;

class MWSkinTemplate {

	private $fileName;
	private $loaded, $tree, $regions;

	public function __construct( $fileName ) {
		if ( !is_readable( $fileName ) ) {
			throw new Exception( "Template file does not exist or is not readable." );
		}
		$this->fileName = $fileName;
		$this->loaded = false;
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

	private static function extractRegions( $tree ) {
		$regions = new SplDoublyLinkedList;

		$queue = new SplQueue;
		$queue->enqueue( $tree );
		while( !$queue->isEmpty() ) {
			$node = $queue->dequeue();
			if ( $node instanceof STP_Node ) {
				foreach ( $node as $child ) {
					$queue->enqueue( $child );
				}
			}
			if ( $node instanceof STP_Tag ) {
				if ( $node->blankFirstAttribute() == 'mw:region' ) {
					$attrs = $node->expandStaticAttributes();
					$region = MWSkinRegion::newFromAttributes( $attrs ); 
					$regions->push( $region );
				}
			}
		}

		return $regions;
	}

	public function parse() {
		if ( $this->loaded ) {
			return;
		}
		$stp = new SkinTemplateParser;
		// @todo See if optimizing this by caching the tree in some form has value
		$this->tree = $stp->parse( $this->getText() );
		$this->regions = self::extractRegions( $this->tree );
		$this->loaded = true;
	}

	public function getTree() {
		$this->parse();
		return $this->tree;
	}

	public function getRegions() {
		$this->parse();
		return $this->regions;
	}

	public function outputBody( MWTemplateContext $context ) {
		global $wgScript;

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
						$prepend = array();
						if ( $node instanceof STP_Tag && $tagName = $node->name() ) {
							$attrs = array();
							foreach( $node->attributes() as $attr ) {
								$name = $attr->name();
								if ( $attr->isValueless() ) {
									$value = true;
								} else {
									$value = "";
									$attrQueue = new SplQueue;
									foreach ( $attr as $piece ) {
										$attrQueue->push( $piece );
									}
									while( !$attrQueue->isEmpty() ) {
										$piece = $attrQueue->shift();
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
														$attrQueue->unshift( $child );
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
							if ( $tagName == 'form' && isset( $attrs['action'] ) && $attrs['action'] == 'mw:search' ) {
								$attrs['action'] = $wgScript;

						 		$input = new STP_Tag( 'input' );
								$input->setAttribute( 'type', 'hidden' );
								$input->setAttribute( 'name', 'title' );
								$input->setAttribute( 'value', SpecialPage::getTitleFor( 'Search' )->getPrefixedDBKey() );
								$prepend[] = $input;
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
						} elseif ( $node instanceof STP_Tag && $node->blankFirstAttribute() == 'mw:region' ) {
							$attrs = $node->expandStaticAttributes();
							$region = $context->getRegion( $attrs['mw:region'] );
							if ( !$region ) {
								throw new Exception( __METHOD__ . ": <mw:region> tag present but no extracted region object present." );
							}
							echo "\n<!-- Start of " . htmlspecialchars( $region->name() ) . " region -->\n";
							foreach ( $region as $block ) {
								echo "\n<!-- Start of " . htmlspecialchars( $block->name() ) . " block -->\n";
								echo $block->getHTML();
								echo "\n<!-- End of " . htmlspecialchars( $block->name() ) . " block -->\n";
							}
							echo "\n<!-- End of " . htmlspecialchars( $region->name() ) . " region -->\n";
							
							// Regions aren't meant to have children
							$recursive = false;
						}
						// Let void tags skip recursion
						if ( $recursive ) {
							$item = new stdClass;
							$item->node = $node;
							$item->queue = new SplQueue;
							if ( $prepend ) {
								foreach ( $prepend as $c ) {
									$item->queue->push( $c );
								}
							}
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