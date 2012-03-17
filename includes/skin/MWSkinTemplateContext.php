<?php
/**
 * Variable context class for MWSkin .tpl executions
 *
 * @file
 */

class MWSkinTemplateContext {

	private $variables;

	public function __construct( ) {
		$this->variables = array();
	}

	private function parseKey( $key ) {
		if ( !is_array( $key ) ) {
			$key = explode( '.', $key );
		}
		$first = true;
		foreach ( $key as $p ) {
			if ( preg_match( '/^\$+$/', $p ) ) {
				if ( !$first ) {
					throw new Exception( "\$ variables are only valid at the start of an expression." );
				}
			} elseif ( !preg_match( '/^[-_\w]+$/', $p ) ) {
				// @fixme Add some sort of template exception we can catch
				throw new Exception( "Invalid characters in variable." );
			}
			$first = false;
		}

		return $key;
	}

	public function set( $key, $value ) {
		$key = self::parseKey( $key );
		if ( count( $key ) > 1 ) {
			throw new Exception( "Cannot use ->set to set a variable at a deeper depth." );
		}
		$this->variables[$key[0]] = $value;
	}

	public function get( $key ) {
		$key = self::parseKey( $key );
		$k = array_shift( $key );
		if ( !isset( $this->variables[$k] ) ) {
			// @todo Warn
			return null;
		}
		$value = $this->variables[$k];
		if ( count( $key ) <= 0 ) {
			// @todo Context
			return $value;
		} else {
			$k = array_shift( $key );
			if ( $value instanceof MWSkinTemplateContext ) {
				array_push( $key, $k );
				return $value->get( $key );
			} else {
				// @todo Warn
				return null;
			}
		}
	}

	public static function expandHtmlContext( $value ) {
		if ( is_null( $value ) ) {
			return null;
		}
		if ( $value instanceof MWSkinTemplateTypes\IHtml ) {
			return $value->getHtml();
		}
		// @fixme Output some sort of inline error
		return '???';
	}

}
