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

		
		// @temp @fixme This method of doing things is just to get the initial test working
		$tpl = MWSkinTemplate::newFromFile( "{$GLOBALS['IP']}/skins/{$this->skinname}/{$this->skinname}.tpl" );
		if ( !$tpl ) {
			throw new Exception( "Template file does not exist." );
		}
		$tree = $tpl->getTree();

		echo $out->headElement( $this );

		$tpl->outputBody();

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	function setupSkinUserCss( OutputPage $out ) {

	}


}
