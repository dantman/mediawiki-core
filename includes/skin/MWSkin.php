<?php
/**
 * Skin class implementing our template based skin system
 *
 * @file
 */

class MWSkin extends Skin {

	public function __construct( $skinname ) {
		$this->skinname = $skinname;
		$this->stylename = $skinname; // @fixme May need separate stylename for subskins?
	}

	protected function execute() {
		wfProfileIn( __METHOD__ );

		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();
		$title = $this->getTitle();

		$stp = new SkinTemplateParser;
		// @temp @fixme This method of doing things is just to get the initial test working
		$tree = $stp->parse( file_get_contents( "{$GLOBALS['IP']}/skins/{$this->skinname}/{$this->skinname}.tpl" )  );

		$stack = new SplStack;
		$item = new stdClass;
		$item->queue = new SplQueue;
		$item->queue->push( $tree );
		$stack->push( $item );

		echo $out->headElement( $this );

		do {
			$queue = $stack->top()->queue;
			while ( !$queue->isEmpty() ) {
				$node = $queue->shift();
				if ( is_string( $node ) ) {
					echo htmlspecialchars( $node );
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

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	function setupSkinUserCss( OutputPage $out ) {

	}


}
