<?php
/**
 * Skin class implementing our template based skin system
 *
 * @file
 */

// @fixme Autoload once we've created all the different template types
require_once( "$IP/includes/skin/TemplateTypes.php" );

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

		$context = new MWSkinTemplateContext;
		$context->set( 'title', new MWSkinTemplateTypes\HtmlText( $out->getPageTitle() ) );

		echo $out->headElement( $this );

		$tpl->outputBody( $context );

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	function setupSkinUserCss( OutputPage $out ) {

	}


}
