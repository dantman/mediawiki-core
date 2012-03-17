<?php
/**
 * Class for MWSkin .tpl files
 *
 * @file
 */

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

	public function outputBody() {
		$stack = new SplStack;
		$item = new stdClass;
		$item->queue = new SplQueue;
		$item->queue->push( $this->getTree() );
		$stack->push( $item );

		do {
			$queue = $stack->top()->queue;
			while ( !$queue->isEmpty() ) {
				$node = $queue->shift();
				if ( is_string( $node ) ) {
					echo $node;
				} elseif ( $node instanceof STP_Substitution ) {
					echo "{" . $node->name() . "}";
				} elseif ( $node instanceof STP_Function ) {
					echo "{" . $node->name() . ":}";
				} elseif ( $node instanceof STP_Node ) {
					if ( $node instanceof STP_Comment ) {
					} else {
						$recursive = true;
						if ( $node instanceof STP_Tag && $tagName = $node->name() ) {
							if ( Html::isVoid( $tagName ) ) {
								// Output the whole tag for a void element
								$recursive = false;
								echo Html::element( $tagName, $node->attributes() );
								if ( $node->hasChildren() ) {
									wfWarn( "A void <$tagName>'s child nodes were discarded." );
								}
							} else {
								// Just open a non-void element
								echo Html::openElement( $tagName, $node->attributes() );
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
	}

}