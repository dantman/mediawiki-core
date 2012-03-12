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
	 * Whitelist a source for a specific directive
	 *
	 * @param $directive The directive (without -src) to whitelist the source in
	 * @param $source The source to whitelist (ContentSecurityPolicy::SELF, domain, schema:, origin, etc...)
	 */
	public function allow( $directive, $source ) {
		$this->src[$directive][] = $source;
	}

	/**
	 * Whitelist a source for all types of content
	 * 
	 * @param $source The source to whitelist (ContentSecurityPolicy::SELF, domain, schema:, origin, etc...)
	 */
	public function globalAllow( $source ) {
		$this->global[] = $source;
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
		if ( isset( $policies['default'] ) ) {
			$policyList[] = 'default-src ' . implode( ' ', $policies['default'] );
			unset( $policies['default'] );
		}
		foreach ( $policies as $directive => $policy ) {
			$policyList[] = "$directive-src " . implode( ' ', $policy );
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
