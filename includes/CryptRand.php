<?php
/**
 * A static cryptographic random generator class used for generating secret keys
 *
 * This is based in part on Drupal code as well as what we used in our own code
 * prior to introduction of this class.
 *
 * @file
 */

final class MWCryptRand {

	/**
	 * Initialize an initial random state based off of whatever we can find
	 */
	private static function initialRandomState() {
		// $_SERVER contains a variety of unstable user and system specific information
		// It'll vary a little with each page, and vary even more with separate users
		// It'll also vary slightly across different machines
		$state = serialize( $_SERVER );

		// To try and vary the system information of the state a bit more
		// by including the system's hostname into the state
		$state .= wfHostname();

		// Try and make this a little more unstable by including the varying process
		// id of the php process we are running inside of if we are able to access it
		if ( function_exists( 'getmypid' ) ) {
			$state .= getmypid();
		}

		// If available try to increase the instability of the data by throwing in
		// the precise amount of memory that we happen to be using at the moment.
		if ( function_exists( 'memory_get_usage' ) ) {
			$state .= memory_get_usage( true );
		}

		// It's mostly worthless but throw the wiki's id into the data for a little more variance
		$state .= wfWikiID();

		// If we have a secret key or proxy key set then throw it into the state as well
		global $wgSecretKey, $wgProxyKey;
		if ( $wgSecretKey ) {
			$state .= $wgSecretKey;
		} elseif ( $wgProxyKey ) {
			$state .= $wgProxyKey;
		}

		return $state;
	}

	/**
	 * Return a rolling random state initially build using data from unstable sources
	 * @return A new weak random state
	 */
	public static function randomState() {
		static $state = null;
		if ( is_null( $state ) ) {
			// Initialize the state with whatever unstable data we can find
			// It's important that this data is hashed right afterwards to prevent
			// it from being leaked into the output stream
			$state = self::initialRandomState();
		}
		// Generate a new random state based on the initial random state or previous
		// random state by combining it with both the current time and a random value
		// Simple append/prepend based methods of combining data and a salt have
		// weaknesses in them, take advantage of the availability of hmac to abuse
		// it's method of combining data and a key into a hash which is free of
		// the typical weakness of simple concatenation
		// Note that in hmac large keys are reduced in size and the key is then
		// xor-ed to create two separate keys. For this reason we use the smaller
		// time+rand as the key and the larger state as the data.
		// We also don't bother passing numbers to mt_rand since you can't make
		// it generate with any more entropy than it's default max value.
		$state = self::hmac( $state, microtime() . mt_rand() );
		return $state;
	}

	/**
	 * Decide on the best acceptable hash algorithm we have available for hash()
	 * @return String A hash algorithm
	 */
	private static function hashAlgo() {
		static $algo = null;
		if ( !is_null( $algo ) ) {
			return $algo;
		}

		$algos = hash_algos();
		$preference = array( 'whirlpool', 'sha256', 'sha1', 'md5' );

		foreach ( $preference as $algorithm ) {
			if ( in_array( $algorithm, $algos ) ) {
				$algo = $algorithm; # assign to static
				wfDebug( __METHOD__ . ": Using the $algo hash algorithm.\n" );
				return $algo;
			}
		}

		// We only reach here if no acceptable hash is found in the list, this should
		// be a technical impossibility since most of php's hash list is fixed and
		// some of the ones we list are available as their own native functions
		// But since we already require at least 5.2 and hash() was default in
		// 5.1.2 we don't bother falling back to methods like sha1 and md5.
		throw new MWException( "Could not find an acceptable hashing function in hash_algos()" );
	}

	/**
	 * Generate an acceptably unstable one-way-hash of some text
	 * making use of the best hash algorithm that we have available.
	 *
	 * @return String A raw hash of the data
	 */
	private static function hash( $data ) {
		return hash( self::hashAlgo(), $data, true );
	}

	/**
	 * Generate an acceptably unstable one-way-hmac of some text
	 * making use of the best hash algorithm that we have available.
	 *
	 * @return String A raw hash of the data
	 */
	private static function hmac( $data, $key ) {
		return hash_hmac( self::hashAlgo(), $data, $key, true );
	}



	private static $strong = null;

	/**
	 * Return a boolean indicating whether or not the source used for cryptographic
	 * random bytes generation in the previously run generate* call
	 * was cryptographically strong.
	 *
	 * @return bool Returns true if the source was strong, false if not.
	 */
	public static function wasStrong() {
		if ( is_null( self::$strong ) ) {
			throw new MWException( __METHOD__ . ' called before generation of random data' );
		}
		return self::$strong;
	}

	/**
	 * Generate a run of (ideally) cryptographically random data and return
	 * it in raw binary form.
	 * You can use MWCryptRand::wasStrong() if you wish to know if the source used
	 * was cryptographically strong.
	 *
	 * @param $bytes int the number of bytes of random data to generate
	 * @param $forceStrong bool Pass true if you want generate to prefer cryptographically
	 *                          strong sources of entropy even if reading from them may steal
	 *                          more entropy from the system than optimal.
	 * @return String Raw binary random data
	 */
	public static function generate( $bytes, $forceStrong = false ) {
		wfProfileIn( __METHOD__ );
		$bytes = floor( $bytes );
		static $buffer = '';
		if ( is_null( self::$strong ) ) {
			// Set strength to false initially until we know what source data is coming from
			self::$strong = true;
		}

		if ( strlen( $buffer ) < $bytes ) {
			// If available make use of mcrypt_create_iv URANDOM source to generate randomness
			// On unix-like systems this reads from /dev/urandom but does it without any buffering
			// and bypasses openbasdir restrictions so it's preferable to reading directly
			// On Windows starting in PHP 5.3.0 Windows' native CryptGenRandom is used to generate
			// entropy so this is also preferable to just trying to read urandom because it may work
			// on Windows systems as well.
			if ( function_exists( 'mcrypt_create_iv' ) ) {
				wfProfileIn( __METHOD__ . '-mcrypt' );
				$rem = $bytes - strlen( $buffer );
				wfDebug( __METHOD__ . ": Trying to generate $rem bytes of randomness using mcrypt_create_iv.\n" );
				$iv = mcrypt_create_iv( $rem, MCRYPT_DEV_URANDOM );
				if ( $iv === false ) {
					wfDebug( __METHOD__ . ": mcrypt_create_iv returned false.\n" );
				} else {
					$bytes .= $iv;
					wfDebug( __METHOD__ . ": mcrypt_create_iv generated " . strlen( $iv ) . " bytes of randomness.\n" );
				}
				wfProfileOut( __METHOD__ . '-mcrypt' );
			}
		}

		if ( strlen( $buffer ) < $bytes ) {
			// If available make use of openssl's random_pesudo_bytes method to attempt to generate randomness.
			// However don't do this on Windows with PHP < 5.3.4 due to a bug:
			// http://stackoverflow.com/questions/1940168/openssl-random-pseudo-bytes-is-slow-php
			if ( function_exists( 'openssl_random_pseudo_bytes' )
				&& ( !wfIsWindows() || version_compare( PHP_VERSION, '5.3.4', '>=' ) )
			) {
				wfProfileIn( __METHOD__ . '-openssl' );
				$rem = $bytes - strlen( $buffer );
				wfDebug( __METHOD__ . ": Trying to generate $rem bytes of randomness using openssl_random_pseudo_bytes.\n" );
				$openssl_bytes = openssl_random_pseudo_bytes( $rem, $openssl_strong );
				if ( $openssl_bytes === false ) {
					wfDebug( __METHOD__ . ": openssl_random_pseudo_bytes returned false.\n" );
				} else {
					$buffer .= $openssl_bytes;
					wfDebug( __METHOD__ . ": openssl_random_pseudo_bytes generated " . strlen( $openssl_bytes ) . " bytes of " . ( $openssl_strong ? "strong" : "weak" ) . " randomness.\n" );
				}
				if ( strlen( $buffer ) >= $bytes ) {
					// openssl tells us if the random source was strong, if some of our data was generated
					// using it use it's say on whether the randomness is strong
					self::$strong = !!$openssl_strong;
				}
				wfProfileOut( __METHOD__ . '-openssl' );
			}
		}

		// Only read from urandom if we can control the buffer size or were passed forceStrong
		if ( strlen( $buffer ) < $bytes && ( function_exists( 'stream_set_read_buffer' ) || $forceStrong ) ) {
			wfProfileIn( __METHOD__ . '-fopen-urandom' );
			$rem = $bytes - strlen( $buffer );
			wfDebug( __METHOD__ . ": Trying to generate $rem bytes of randomness using /dev/urandom.\n" );
			if ( !function_exists( 'stream_set_read_buffer' ) && $forceStrong ) {
				wfDebug( __METHOD__ . ": Was forced to read from /dev/urandom without control over the buffer size.\n" );
			}
			// /dev/urandom is generally considered the best possible commonly
			// available random source, and is available on most *nix systems.
			wfSuppressWarnings();
			$urandom = fopen( "/dev/urandom", "rb" );
			wfRestoreWarnings();

			// Attempt to read all our random data from urandom
			// php's fread always does buffered reads based on the stream's chunk_size
			// so in reality it will usually read more than the amount of data we're
			// asked for and not storing that risks depleting the system's random pool.
			// If stream_set_read_buffer is available set the chunk_size to the amount
			// of data we need. Otherwise read 8k, php's default chunk_size.
			if ( $urandom ) {
				// php's default chunk_size is 8k
				$chunk_size = 1024 * 8;
				if ( function_exists( 'stream_set_read_buffer' ) ) {
					// If possible set the chunk_size to the amount of data we need
					stream_set_read_buffer( $urandom, $rem );
					$chunk_size = $rem;
				}
				wfDebug( __METHOD__ . ": Reading from /dev/urandom with a buffer size of $chunk_size.\n" );
				$random_bytes = fread( $urandom, max( $chunk_size, $rem ) );
				$buffer .= $random_bytes;
				fclose( $urandom );
				wfDebug( __METHOD__ . ": /dev/urandom generated " . strlen( $random_bytes ) . " bytes of randomness.\n" );
				if ( strlen( $buffer ) >= $bytes ) {
					// urandom is always strong, set to true if all our data was generated using it
					self::$strong = true;
				}
			} else {
				wfDebug( __METHOD__ . ": /dev/urandom could not be opened.\n" );
			}
			wfProfileOut( __METHOD__ . '-fopen-urandom' );
		}

		// If we cannot use or generate enough data from a secure source
		// use this loop to generate a good set of pesudo random data.
		// This works by initializing a random state using a pile of unstable data
		// and continually shoving it through a hash along with a variable salt.
		// We hash the random state with more salt to avoid the state from leaking
		// out and being used to predict the /randomness/ that follows.
		if ( strlen( $buffer ) < $bytes ) {
			wfDebug( __METHOD__ . ": Falling back to using a pesudo random state to generate randomness.\n" ); 
		}
		while ( strlen( $buffer ) < $bytes ) {
			wfProfileIn( __METHOD__ . '-fallback' );
			$buffer .= self::hmac( self::randomState(), mt_rand() );
			// This code is never really cryptographically strong, if we use it
			// at all, then set strong to false.
			self::$strong = false;
			wfProfileOut( __METHOD__ . '-fallback' );
		}

		// Once the buffer has been filled up with enough random data to fulfill
		// the request shift off enough data to handle the request and leave the
		// unused portion left inside the buffer for the next request for random data
		$generated = substr( $buffer, 0, $bytes );
		$buffer = substr( $buffer, $bytes );

		wfDebug( __METHOD__ . ": " . strlen( $buffer ) . " bytes of randomness leftover in the buffer.\n" );

		wfProfileOut( __METHOD__ );
		return $generated;
	}

	/**
	 * Generate a run of (ideally) cryptographically random data and return
	 * it in hexadecimal string format.
	 * You can use MWCryptRand::wasStrong() if you wish to know if the source used
	 * was cryptographically strong.
	 *
	 * @param $chars int the number of hex chars of random data to generate
	 * @param $forceStrong bool Pass true if you want generate to prefer cryptographically
	 *                          strong sources of entropy even if reading from them may steal
	 *                          more entropy from the system than optimal.
	 * @return String Hexadecimal random data
	 */
	public static function generateHex( $chars, $forceStrong = false ) {
		// hex strings are 2x the length of raw binary so we divide the length in half
		// odd numbers will result in a .5 that leads the generate() being 1 character
		// short, so we use ceil() to ensure that we always have enough bytes
		$bytes = ceil( $chars / 2 );
		// Generate the data and then convert it to a hex string
		$hex = bin2hex( self::generate( $bytes, $forceStrong ) );
		// A bit of paranoia here, the caller asked for a specific length of string
		// here, and it's possible (eg when given an odd number) that we may actually
		// have at least 1 char more than they asked for. Just in case they made this
		// call intending to insert it into a database that does truncation we don't
		// want to give them too much and end up with their database and their live
		// code having two different values because part of what we gave them is truncated
		// hence, we strip out any run of characters longer than what we were asked for.
		return substr( $hex, 0, $chars );
	}

}
