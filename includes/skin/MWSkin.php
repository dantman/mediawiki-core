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
		$this->metadata = MWSkinMetadata::newFromFile( "{$GLOBALS['IP']}/skins/{$this->skinname}/{$this->skinname}.xml" );
	}

	protected function execute() {
		wfProfileIn( __METHOD__ );

		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();
		$title = $this->getTitle();

		$bodyTextBlock = new MWRegionBlock( 'bodytext' );
		
		# An ID that includes the actual body text; without categories, contentSub, ...
		$realBodyAttribs = array( 'id' => 'mw-content-text' );

		# Add a mw-content-ltr/rtl class to be able to style based on text direction
		# when the content is different from the UI language, i.e.:
		# not for special pages or file pages AND only when viewing AND if the page exists
		# (or is in MW namespace, because that has default content)
		if( !in_array( $title->getNamespace(), array( NS_SPECIAL, NS_FILE ) ) &&
			in_array( $request->getVal( 'action', 'view' ), array( 'view', 'historysubmit' ) ) &&
			( $title->exists() || $title->getNamespace() == NS_MEDIAWIKI ) ) {
			$pageLang = $title->getPageLanguage();
			$realBodyAttribs['lang'] = $pageLang->getHtmlCode();
			$realBodyAttribs['dir'] = $pageLang->getDir();
			$realBodyAttribs['class'] = 'mw-content-'.$pageLang->getDir();
		}
		$bodyTextBlock->addHTML(
			Html::rawElement( 'div', $realBodyAttribs, $out->mBodytext ) .
			Html::rawElement( 'div', array( 'class' => 'printfooter' ), "\n" . $this->printSource() ) . "\n" .
			$this->generateDebugHTML()
		);
		$out->getRegions()->addRegion( $bodyTextBlock );

		if ( true ) {
			// @todo This should be a conditional that checks if we use a 'categories' variable somewhere in the
			// template. If we don't then this will run, but if we do we will leave this out
			$catlinksBlock = new MWRegionBlock( 'catlinks' );
			$catlinksBlock->addHTML( $this->getCategories() );
			$out->getRegions()->addRegion( $catlinksBlock );
		}

		if ( $afterContent = $this->afterContentHook() ) {
			$afterContentBlock = new MWRegionBlock( 'legacy-aftercontent' );
			$afterContentBlock->addHTML( $afterContent );
			$out->getRegions()->addRegion( $afterContentBlock );
		}
		
		$tpl = $this->metadata->getTemplate();
		if ( !$tpl ) {
			throw new Exception( "Template does not exist." );
		}

		$skinRegions = $tpl->getRegions();
		$blocks = $out->getRegions();
		$blocks->fillRegions( $skinRegions, $tpl );

		$context = new MWTemplateContext;
		$context->extendContext( new MWSkinTemplateContext( $this, $skinRegions ) );

		echo $out->headElement( $this );

		$tpl->outputBody( $context );

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	function setupSkinUserCss( OutputPage $out ) {
		$out->addModuleStyles( array( 'mediawiki.legacy.shared', 'mediawiki.legacy.commonPrint' ) );

		foreach ( $this->metadata->getModules() as $name => $module ) {
			if ( $module['load'] ) {
				$out->addModuleStyles( $name );
			}
		}
	}


	public function commonPrintStylesheet() {
		return false;
	}

}

class MWSkinTemplateContext extends MWTemplateContextExtension {

	protected $skin, $regions;

	public function __construct( $skin, $regions ) {
		$this->skin = $skin;
		$this->regions = $regions;
	}

	public function getRegion( $name ) {
		foreach ( $this->regions as $region ) {
			if ( $region->name() == $name ) {
				return $region;
			}
		}
		return parent::getRegion( $name );
	}

	public function getVariable( $name ) {
		$out = $this->skin->getOutput();
		switch( $name ) {
		case 'page':
			$page = new MWTemplateContext;
			$page->set( 'title', new TT\HtmlText( $out->getPageTitle() ) );
			return $page;
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

