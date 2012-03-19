<?php
/**
 * Skin class implementing our template based skin system
 *
 * @file
 */
use MWSkinTemplateTypes as TT;

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

		$context = new MWTemplateContext;
		$context->extendContext( new MWSkinTemplateContext( $this ) );

		$skinRegions = $tpl->getRegions();
		var_dump( $skinRegions );

		echo $out->headElement( $this );

		$tpl->outputBody( $context );

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	function setupSkinUserCss( OutputPage $out ) {

	}


}

class MWSkinTemplateContext extends MWTemplateContextExtension {

	protected $skin;

	public function __construct( $skin ) {
		$this->skin = $skin;
	}

	public function getVariable( $name ) {
		$out = $this->skin->getOutput();
		switch( $name ) {
		case 'title':
			return new TT\HtmlText( $out->getPageTitle() );
		case 'isarticle':
			return $out->isArticle();
		case 'footer':
			$footer = new MWTemplateContext;
			//$footer->set( 'links',  );
			// $footer->set( 'icons', );
			return $footer;
		}
		return parent::getVariable( $name );
	}

}

