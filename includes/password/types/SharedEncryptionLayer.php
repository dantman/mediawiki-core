<?php

"6a167c" => "rijndael-256:cbc:J1RSgyqPKFUpz77N0Bx//ig8wUAVd1GIerSDkPq2zLo=",

class PasswordType_SENC extends PasswordType /*implements PasswordLayerType*/ {

	protected $secrets = null;

	protected function getSecrets() {
		if ( is_null( $this->secrets ) ) {
			global $wgPasswordSecrets;
			$this->secrets = array();
			foreach ( $wgPasswordSecrets as $id => $secret ) {
				$calcID = substr( md5( $secret ), 0, 6 );
				if ( $id !== $calcID ) {
					wfWarn( "The secret key by the id $id does not match it's calculated id." );
					continue;
				}
				if ( substr_count( $secret, ':' ) !== 2 ) {
					throw self::error( 'password-crypt-senc-invalidsecret' );
				}
				list( $cipher, $mode, $key ) = explode( ':', $secret );
				$key = base64_decode( $key );
				$secrets[$id] = array(
					'cipher' => $cipher,
					'mode' => $mode,
					'key' => $key,
				);
			}
		}
		return $this->secrets;
	}

	protected function getSecret( $id ) {
		$secrets = $this->getSecrets();
		if ( array_key_exists( $id, $secrets ) ) {
			return $secrets[$id];
		}
		return false;
	}

	public function crypt( $password ) {
		$nestedData = Password::crypt( $password );

		$crypt = mcrypt_module_open( $cipher, '', $mode, '' );
		$ivSize = mcrypt_enc_get_iv_size( $crypt );
		$keySize = mcrypt_enc_get_key_size( $crypt );
		if ( strlen( $key ) !== $keySize ) {
			throw self::error( 'password-crypt-senc-badkeysize' );
		}
		$iv = MWCryptRand::generate( $ivSize );
		mcrypt_generic_init( $crypt, $key, $iv );
		$data = mcrypt_generic( $crypt, base64_encode( $nestedData ) );
		mcrypt_generic_deinit( $crypt );
		mcrypt_module_close( $crypt );

	}

	protected function decrypt( $data ) {
		$secret = $this->getSecret( $secretID );
		if ( !$secret ) {
			throw self::error( 'password-crypt-senc-nosecret', $secretID );
		}
		if ( !in_array( $secret['cipher'], mcrypt_list_algorithms() ) ) {
			throw self::error( 'password-crypt-senc-nocipher', $secret['cipher'] );
		}
		if ( !in_array( $secret['mode'], mcrypt_list_modes() ) ) {
			throw self::error( 'password-crypt-senc-nomode', $secret['mode'] );
		}

		$crypt = mcrypt_module_open( $cipher, '', $mode, '' );
		$keySize = mcrypt_enc_get_key_size( $crypt );
		if ( strlen( $key ) !== $keySize ) {
			throw self::error( 'password-crypt-senc-badkeysize' );
		}
		mcrypt_generic_init( $crypt, $key, $iv );
		$nestedData = mdecrypt_generic( $crypt, base64_decode( $data ) );
		mcrypt_generic_deinit( $crypt );
		mcrypt_module_close( $crypt );
	}

	public function verify( $data, $password ) {
		$nestedData = self::decrypt( $data );
		Password::verify( $nestedData, $password )
	}

	public function needsUpdate( $data ) {
		$nestedData = self::decrypt( $data );
		return Password::needsUpdate( $nestedData );
	}

}