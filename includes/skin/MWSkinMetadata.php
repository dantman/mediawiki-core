<?php
/**
 * Class implementing MWSkin metadata extraction
 *
 * @file
 */

class MWSkinMetadata {

	private $dir, $name, $xml;

	public function __construct( $dir, $name, $string ) {
		$this->dir = $dir;
		$this->name = $name;
		$this->xml = new SimpleXMLElement( $string );
	}

	public static function newFromFile( $fileName ) {
		if ( is_readable( $fileName ) ) {
			return self::newFromString(
				dirname( $fileName ),
				pathinfo( $fileName, PATHINFO_FILENAME ),
				file_get_contents( $fileName )
			);
		} else {
			throw new Exception( "Skin metadata file does not exist or could not be read." );
		}
	}

	public static function newFromString( $dir, $name, $string ) {
		$meta = new self( $dir, $name, $string );
		return $meta;
	}

	protected function getTemplateFromName( $name ) {
		return MWSkinTemplate::newFromFile( "{$this->dir}/$name" );
	}

	/**
	 * Return the primary template for the skin
	 * @return MWSkinTemplate
	 */
	public function getTemplate() {
		if ( count( $this->xml->template ) ) {
			return self::getTemplateFromName( strval( $this->xml->template[0] ) );
		} else {
			foreach ( $this->xml->template as $template ) {
				if ( isset( $template['primary'] ) ) {
					return self::getTemplateFromName( strval( $template ) );
				}
			}
		}
		return false;
	}

	/**
	 * Return a definition for link grouping within this skin
	 * @return MWSkinLinksDefinition
	 */
	public function getLinksDefinition() {
		$linksDefinition = strval( $this->xml->{'links-definition'} );
		if ( $linksDefinition ) {
			return MWSkinLinksDefinition::newFromFile( "{$this->dir}/$linksDefinition" );
		}
		return false;
	}

	/**
	 * Return an array of ResourceLoader modules defined in this skin's metadata
	 * @return Array
	 */
	public function getModules() {
		$modules = array();
		foreach ( $this->xml->resource as $resource ) {
			$name = strval( $resource['name'] );
			$module = array();
			foreach( $resource->style as $style ) {
				if ( $common = strval( $style['common'] ) ) {
					if ( in_array( $common, array( 'elements', 'content', 'interface' ) ) ) {
						$media = 'screen';
						$path = "common/common" . ucfirst( $common ) . ".css";
						$module['styles'][$path] = array( 'media' => $media );
					} else {
						wfWarn( "Invalid common style type." );
					}
				} else {
					$media = strval( $style['media'] );
					if( !$media ) {
						$media = 'all';
					}
					$path = "{$this->name}/$style";
					$module['styles'][$path] = array( 'media' => $media );
				}
			}
			$module['remoteBasePath'] = &$GLOBALS['wgStylePath'];
			$module['localBasePath'] = &$GLOBALS['wgStyleDirectory'];
			$module['load'] = isset( $resource['load'] );
			if ( !$name ) {
				if ( count( $modules ) <= 0 ) {
					$name = "skin.{$this->name}";
					$module['load'] = true;
				} else {
					wfWarn( "Found an extra <resource> missing a required module name in the {$this->name} skin metadata definition." );
					continue;
				}
			}
			$modules[$name] = $module;
		}
		return $modules;
	}

}