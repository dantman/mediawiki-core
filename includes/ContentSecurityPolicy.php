<?php
/**
 * Api for controlling the Content Security Policy.
 *
 * @file
 */

class ContentSecurityPolicy {

	/**
	 * Directives (excluding default-src) used in content security policies
	 */
	private static $directives = array(
		'script',
		'object',
		'style',
		'img',
		'media',
		'frame',
		'font',
		'connect',
	);

	const SELF = "'self'";
	const UNSAFE_INLINE = "'unsafe-inline'";
	const UNSAFE_EVAL = "'unsafe-eval'";
	const NONE = "'none'";

	private $src, $global, $enabled;
	public function __construct() {
		$this->src = array();
		$this->global = array();
		foreach ( self::$directives as $directive ) {
			$this->src[$directive] = array();
		}
	}

	/**
	 * Cleanup a source we are provided
	 *
	 * @param $source The source to clean up
	 */
	protected function fixSource( $source ) {

		// If a full URI is specified as a source trim it down just to a legal origin
		$source = preg_replace( '!^([a-z][-+.a-z0-9]*://.+?)/.*$!iu', '$1', $source );

		return $source;
	}

	/**
	 * Whitelist a source for a specific directive
	 *
	 * @param $directive The directive (without -src) to whitelist the source in
	 * @param $source The source to whitelist (ContentSecurityPolicy::SELF, domain, schema:, origin, etc...)
	 */
	public function allow( $directive, $source ) {
		$this->src[$directive][] = self::fixSource( $source );
	}

	/**
	 * Whitelist a source for all types of content
	 * 
	 * @param $source The source to whitelist (ContentSecurityPolicy::SELF, domain, schema:, origin, etc...)
	 */
	public function globalAllow( $source ) {
		$this->global[] = self::fixSource( $source );
	}

	/**
	 * Quick helper when you add a script to update policies to allow the script
	 *
	 * @param $uri The uri of the script. Leave out if inline.
	 */
	public function addScript( $uri = null ) {
		if ( $uri ) {
			// Allow scripts from the uri's origin
			$this->allow( 'script', $uri );
		} else {
			// Allow inline scripts
			$this->allow( 'script', self::UNSAFE_INLINE );
		}
	}

	/**
	 * Quick helper when you add a style to update policies to allow the style
	 *
	 * @param $uri The uri of the style. Leave out if inline.
	 */
	public function addStyle( $uri = null ) {
		if ( $uri ) {
			// Allow styles from the uri's origin
			$this->allow( 'style', $uri );
			// Allow images in the stylesheet from the same origin
			$this->allow( 'img', $uri );
		} else {
			// Allow inline styles
			$this->allow( 'style', self::UNSAFE_INLINE );
			// Allow images in the stylesheet from our origin
			$this->allow( 'img', self::SELF );
		}
		// In case this was loaded by ResourceLoader allow inline data: images
		$this->allow( 'img', 'data:' );
	}

	protected static function sort( $policy ) {
		// Fixme try sorting things like 'self' at the start
		sort( $policy );
		return $policy;
	}

	public function getPolicyString() {
		$policies = array();
		foreach ( self::$directives as $directive ) {
			$policies[$directive] = self::sort( array_unique( array_merge( $this->global, $this->src[$directive] ) ) );
		}
		// Build a list of policies that are used by all directives
		$globals = self::sort( call_user_func_array( 'array_intersect', array_values( $policies ) ) );
		foreach ( self::$directives as $directive ) {
			// If the policy matches the globals list unset the policy and set the default policy
			if ( $policies[$directive] == $globals ) {
				unset( $policies[$directive] );
				$policies['default'] = $globals;
			}
		}

		$policyList = array();
		if ( !isset( $policies['default'] ) || count( $policies['default'] ) <= 0 ) {
			$policies['default'] = array( self::NONE );
		}
		$policyList[] = 'default-src ' . implode( ' ', $policies['default'] );
		
		foreach ( self::$directives as $directive ) {
			if ( !isset( $policies[$directive] ) || count( $policies[$directive] ) <= 0 ) {
				continue;
			}
			$policyList[] = "$directive-src " . implode( ' ', $policies[$directive] );
		}
		return implode( '; ', $policyList );
	}

	public function applyToWebResponse( WebResponse $response ) {
		$cspString = $this->getPolicyString();
		// Send X- header used by Firefox and IE
		$response->header( "X-Content-Security-Policy: $cspString" );
		// Send WebKit header used by Chrome
		$response->header( "X-WebKit-CSP: $cspString" );
		// Send official header
		$response->header( "Content-Security-Policy: $cspString" );
	}

}
