<?php

namespace MWSkinTemplateTypes;

interface IText {
	public function getText();
}

interface IHtml {
	public function getHtml();
}

class Text implements IText, IHtml {
	
	public function __construct( $text ) {
		$this->text = $text;
	}

	public function getText() {
		return $this->text;
	}

	public function getHtml() {
		return htmlspecialchars( $this->getText() );
	}
}

class Html implements IHtml {
	
	public function __construct( $html ) {
		$this->html = $html;
	}

	public function getHtml() {
		return $this->html;
	}

}

class HtmlText extends Html implements IHtml {

	public function getText() {
		return Sanitizer::stripAllTags( $this->getHtml() );
	}

}
