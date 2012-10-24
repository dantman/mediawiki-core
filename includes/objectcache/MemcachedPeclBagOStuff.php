<?php
/**
 * Object caching using memcached.
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
 * @ingroup Cache
 */

/**
 * A wrapper class for the PECL memcached client
 *
 * @ingroup Cache
 */
class MemcachedPeclBagOStuff extends MemcachedBagOStuff {

	/**
	 * Constructor
	 *
	 * Available parameters are:
	 *   - servers:             The list of IP:port combinations holding the memcached servers.
	 *   - persistent:          Whether to use a persistent connection
	 *   - compress_threshold:  The minimum size an object must be before it is compressed
	 *   - timeout:             The read timeout in microseconds
	 *   - connect_timeout:     The connect timeout in seconds
	 *   - serializer:          May be either "php" or "igbinary". Igbinary produces more compact
	 *                          values, but serialization is much slower unless the php.ini option
	 *                          igbinary.compact_strings is off.
	 */
	function __construct( $params ) {
		$params = $this->applyDefaultParams( $params );

		if ( $params['persistent'] ) {
			// The pool ID must be unique to the server/option combination.
			// The Memcached object is essentially shared for each pool ID.
			// We can only resuse a pool ID if we keep the config consistent.
			$this->client = new Memcached( md5( serialize( $params ) ) );
			if ( count( $this->client->getServerList() ) ) {
				wfDebug( __METHOD__ . ": persistent Memcached object already loaded.\n" );
				return; // already initialized; don't add duplicate servers
			}
		} else {
			$this->client = new Memcached;
		}

		if ( !isset( $params['serializer'] ) ) {
			$params['serializer'] = 'php';
		}

		// The compression threshold is an undocumented php.ini option for some
		// reason. There's probably not much harm in setting it globally, for
		// compatibility with the settings for the PHP client.
		ini_set( 'memcached.compression_threshold', $params['compress_threshold'] );

		// Set timeouts
		$this->client->setOption( Memcached::OPT_CONNECT_TIMEOUT, $params['connect_timeout'] * 1000 );
		$this->client->setOption( Memcached::OPT_SEND_TIMEOUT, $params['timeout'] );
		$this->client->setOption( Memcached::OPT_RECV_TIMEOUT, $params['timeout'] );
		$this->client->setOption( Memcached::OPT_POLL_TIMEOUT, $params['timeout'] / 1000 );

		// Set libketama mode since it's recommended by the documentation and
		// is as good as any. There's no way to configure libmemcached to use
		// hashes identical to the ones currently in use by the PHP client, and
		// even implementing one of the libmemcached hashes in pure PHP for
		// forwards compatibility would require MWMemcached::get_sock() to be
		// rewritten.
		$this->client->setOption( Memcached::OPT_LIBKETAMA_COMPATIBLE, true );

		// Set the serializer
		switch ( $params['serializer'] ) {
			case 'php':
				$this->client->setOption( Memcached::OPT_SERIALIZER, Memcached::SERIALIZER_PHP );
				break;
			case 'igbinary':
				if ( !Memcached::HAVE_IGBINARY ) {
					throw new MWException( __CLASS__.': the igbinary extension is not available ' .
						'but igbinary serialization was requested.' );
				}
				$this->client->setOption( Memcached::OPT_SERIALIZER, Memcached::SERIALIZER_IGBINARY );
				break;
			default:
				throw new MWException( __CLASS__.': invalid value for serializer parameter' );
		}
		$servers = array();
		foreach ( $params['servers'] as $host ) {
			$servers[] = IP::splitHostAndPort( $host ); // (ip, port)
		}
		$this->client->addServers( $servers );
	}

	/**
	 * @param $key string
	 * @return Mixed
	 */
	public function get( $key ) {
		$this->debugLog( "get($key)" );
		return $this->checkResult( $key, parent::get( $key ) );
	}

	/**
	 * @param $key string
	 * @param $value
	 * @param $exptime int
	 * @return bool
	 */
	public function set( $key, $value, $exptime = 0 ) {
		$this->debugLog( "set($key)" );
		return $this->checkResult( $key, parent::set( $key, $value, $exptime ) );
	}

	/**
	 * @param $key string
	 * @param $time int
	 * @return bool
	 */
	public function delete( $key, $time = 0 ) {
		$this->debugLog( "delete($key)" );
		$result = parent::delete( $key, $time );
		if ( $result === false && $this->client->getResultCode() === Memcached::RES_NOTFOUND ) {
			// "Not found" is counted as success in our interface
			return true;
		} else {
			return $this->checkResult( $key, $result );
		}
	}

	/**
	 * @param $key string
	 * @param $value int
	 * @param $exptime int
	 * @return Mixed
	 */
	public function add( $key, $value, $exptime = 0 ) {
		$this->debugLog( "add($key)" );
		return $this->checkResult( $key, parent::add( $key, $value, $exptime ) );
	}

	/**
	 * @param $key string
	 * @param $value int
	 * @param $exptime
	 * @return Mixed
	 */
	public function replace( $key, $value, $exptime = 0 ) {
		$this->debugLog( "replace($key)" );
		return $this->checkResult( $key, parent::replace( $key, $value, $exptime ) );
	}

	/**
	 * @param $key string
	 * @param $value int
	 * @return Mixed
	 */
	public function incr( $key, $value = 1 ) {
		$this->debugLog( "incr($key)" );
		$result = $this->client->increment( $key, $value );
		return $this->checkResult( $key, $result );
	}

	/**
	 * @param $key string
	 * @param $value int
	 * @return Mixed
	 */
	public function decr( $key, $value = 1 ) {
		$this->debugLog( "decr($key)" );
		$result = $this->client->decrement( $key, $value );
		return $this->checkResult( $key, $result );
	}

	/**
	 * Check the return value from a client method call and take any necessary
	 * action. Returns the value that the wrapper function should return. At
	 * present, the return value is always the same as the return value from
	 * the client, but some day we might find a case where it should be
	 * different.
	 *
	 * @param $key string The key used by the caller, or false if there wasn't one.
	 * @param $result Mixed The return value
	 * @return Mixed
	 */
	protected function checkResult( $key, $result ) {
		if ( $result !== false ) {
			return $result;
		}
		switch ( $this->client->getResultCode() ) {
			case Memcached::RES_SUCCESS:
				break;
			case Memcached::RES_DATA_EXISTS:
			case Memcached::RES_NOTSTORED:
			case Memcached::RES_NOTFOUND:
				$this->debugLog( "result: " . $this->client->getResultMessage() );
				break;
			default:
				$msg = $this->client->getResultMessage();
				if ( $key !== false ) {
					$server = $this->client->getServerByKey( $key );
					$serverName = "{$server['host']}:{$server['port']}";
					$msg = "Memcached error for key \"$key\" on server \"$serverName\": $msg";
				} else {
					$msg = "Memcached error: $msg";
				}
				wfDebugLog( 'memcached-serious', $msg );
		}
		return $result;
	}

	/**
	 * @param $keys Array
	 * @return Array
	 */
	public function getMulti( array $keys ) {
		$this->debugLog( 'getMulti(' . implode( ', ', $keys ) . ')' );
		$callback = array( $this, 'encodeKey' );
		$result = $this->client->getMulti( array_map( $callback, $keys ) );
		return $this->checkResult( false, $result );
	}

	/* NOTE: there is no cas() method here because it is currently not supported
	 * by the BagOStuff interface and other BagOStuff subclasses, such as
	 * SqlBagOStuff.
	 */
}
