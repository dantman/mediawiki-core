<?php
/**
 * Generate a new SEL password secret
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Maintenance
 */
require_once( dirname( __FILE__ ) . '/Maintenance.php' );

/**
 * Maintenance script to generate a new SEL password secret
 *
 * @ingroup Maintenance
 */
class GeneratePasswordSecret extends Maintenance {

	public function __construct() {
		parent::__construct();
		$this->mDescription = "Generate a new secret key for the shared encryption password storage layer";
	}

	public function execute() {
		$cipher = "rijndael-256";
		$mode = "cbc";
		$bytes = mcrypt_get_key_size( $cipher, $mode );
		$secret = implode( ':', array( $cipher, $mode, base64_encode( MWCryptRand::generate( $bytes ) ) ) );
		$secretID = substr( md5( $secret ), 0, 6 );
		
		$secrets = array();

		$secrets[$secretID] = $secret;

		$this->output( "\$wgPasswordSecrets = array(\n";
		foreach ( $secrets as $id => $key ) {
			$this->output( '	"' . $id . '" => "' . $key . '",' . "\n";
		}
		$this->output( ");\n" );

	}
}

$maintClass = "GeneratePasswordSecret";
require_once( RUN_MAINTENANCE_IF_MAIN );
