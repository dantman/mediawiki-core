<?php
/**
 * Variable context class for MWSkin .tpl executions
 *
 * @file
 */
use MWSkinTemplateTypes as TT;

class MWTemplateContext {

	private $variables;

	public function __construct( ) {
		$this->variables = array();
		$this->extensions = new SplDoublyLinkedList;
	} 

	public function extendContext( MWTemplateContextExtension $ext ) {
		$this->extensions->push( $ext );
	}

	private function getVariable( $name ) {
		if ( !array_key_exists( $name, $this->variables ) ) {
			// Set variable to null so it will be set to null if we don't find a value for it
			$this->variables[$name] = null;
			// Loop over extensions and see if one has the variable
			foreach ( $this->extensions as $ext ) {
				try {
					$this->variables[$name] = $ext->getVariable( $name );
					break;
				} catch ( MWTemplateContextNoVariableException $e ) {
					// Not found, continue
				}
			}
		}
		return $this->variables[$name];
	}

	private function parseKey( $key ) {
		wfProfileIn( __METHOD__ );
		if ( !is_array( $key ) ) {
			$key = explode( '.', $key );
		}
		$first = true;
		foreach ( $key as $p ) {
			if ( preg_match( '/^\$+$/', $p ) ) {
				if ( !$first ) {
					wfProfileOut( __METHOD__ );
					throw new Exception( "\$ variables are only valid at the start of an expression." );
				}
			} elseif ( !preg_match( '/^[-_\w]+$/', $p ) ) {
				// @fixme Add some sort of template exception we can catch
				wfProfileOut( __METHOD__ );
				throw new Exception( "Invalid characters in variable '" . htmlspecialchars( $p ) . "'." );
			}
			$first = false;
		}

		wfProfileOut( __METHOD__ );
		return $key;
	}

	public function set( $key, $value ) {
		wfProfileIn( __METHOD__ );
		$key = self::parseKey( $key );
		if ( count( $key ) > 1 ) {
			wfProfileOut( __METHOD__ );
			throw new Exception( "Cannot use ->set to set a variable at a deeper depth." );
		}
		$this->variables[$key[0]] = $value;
		wfProfileOut( __METHOD__ );
	}

	public function get( $key ) {
		wfProfileIn( __METHOD__ );
		$key = self::parseKey( $key );
		$k = array_shift( $key );
		$value = $this->getVariable( $k );
		if ( is_null( $value ) ) {
			// @todo Warn
			wfProfileOut( __METHOD__ );
			return null;
		}
		if ( count( $key ) <= 0 ) {
			// @todo Context
			wfProfileOut( __METHOD__ );
			return $value;
		} else {
			$k = array_shift( $key );
			if ( $value instanceof MWTemplateContext ) {
				array_push( $key, $k );
				wfProfileOut( __METHOD__ );
				return $value->get( $key );
			} else {
				// @todo Warn
				wfProfileOut( __METHOD__ );
				return null;
			}
		}
	}

	public static function expandHtmlContext( $value ) {
		if ( is_null( $value ) ) {
			return null;
		}
		if ( $value instanceof TT\IHtml ) {
			return $value->getHtml();
		}
		// @fixme Output some sort of inline error
		return '???';
	}

	public static function expandAttrContext( $attr, $value ) {
		if ( is_null( $value ) ) {
			return null;
		}
		// @todo Special cases like href and src
		if ( $value instanceof TT\IText ) {
			return $value->getText();
		}
		// @fixme Output some sort of inline error
		return '???';
	}

	public static function expandExpressionContext( $value ) {
		if ( $value instanceof TT\IText ) {
			return $value->getText();
		}
		return $value;
	}

}

class MWTemplateContextNoVariableException extends Exception {}

class MWTemplateContextExtension {

	public function getVariable( $name ) {
		throw new MWTemplateContextNoVariableException;
	}

}
