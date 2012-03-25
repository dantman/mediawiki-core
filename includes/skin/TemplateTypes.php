<?php

namespace MWSkinTemplateTypes;

/**
 * Defines the text interface.
 * Types using this interface will support the output
 * of text into attributes and expressions.
 */
interface IText {
	public function getText();
}

/**
 * Defines the html interface.
 * Types using this interface will support the output
 * of raw html when used inside html.
 */
interface IHtml {
	public function getHtml();
}

/**
 * Implements a basic text type
 * - Takes a string of text as input
 * - Outputs the text when used in text
 * - Escapes the text when used in html
 */
class Text implements IText, IHtml {
	
	protected $text;

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

/**
 * Implements a basic html type
 * - Takes a string of html as input
 * - Outputs the html when used in html
 */
class Html implements IHtml {
	
	protected $html;

	public function __construct( $html ) {
		$this->html = $html;
	}

	public function getHtml() {
		return $this->html;
	}

}

/**
 * Implements a special html type that also supports usage as text
 * - Takes a string of html as input
 * - Outputs the html when used in html
 * - When used in text outputs the html as text with all the tags stripped out
 */
class HtmlText extends Html implements IHtml {

	public function getText() {
		return Sanitizer::stripAllTags( $this->getHtml() );
	}

}

/**
 * Implements a fully featured link type with text, href, rel, active, and known support
 */
class Link implements IText, IHtml {

	protected $text, $href;

	public function __construct( $options ) {
		$this->text = $options['text'] instanceof \Message
			? $options['text']->text()
			: $options['text'];
		$this->href = $options['href'];
		// $this->rel = $options['rel'];
	}

	public function getHref() {
		return $this->href;
	}

	public function getText() {
		return $this->text;
	}

	public function getRel() {

	}

	public function isActive() {

	} 

	public function isKnown() {

	}

	public function getHtml() {
		return htmlspecialchars( $this->getText() );
	}
}

/**
 * Implements an ordered list type.
 * - Nests a list of other template types inside of itself
 * - Supports use in mw:loop to output each of the items
 */
class NumericList {

}

/**
 * Implements a named ordered list type.
 * - Nests a list of other template types inside of itself
 * - Supports use in mw:loop to output each of the items
 * - Supports key lookup ie: 'foo' can be used in mw:loop and
 *   {foo.bar} can also output the item with the name 'bar'.
 */
class NamedList {

}

/**
 * Impelements a named map type.
 * - Nests a map of other template types inside of itself
 * - Supports key lookup ie: Where 'foo' is a named map
 *   {foo.bar} will output the item with the name 'bar'.
 */
class NamedMap {

}

/**
 * Implements an error block type.
 * - Takes an error message as input
 * - Outputs a styled error block when used in html
 * - Outputs the error message surrounded by delimiters when used in text
 */
class Error implements IHtml, IText {

	private $msg;

	public function __construct( $msg ) {
		$this->msg = $msg;
	}

	public function getHtml() {
		return Html::element( 'div', array( 'class' => 'error' ), $this->msg );
	}

	public function getText() {
		return '[[' . $this->msg . ']]';
	}

}
