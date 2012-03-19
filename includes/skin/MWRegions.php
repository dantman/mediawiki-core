<?php
/**
 * Class implementing MWSkin block regions
 *
 * @file
 */

class MWRegionBlock {

}

class MWSkinRegion {

	const SIZE_NORMAL = 1;
	const SIZE_NARROW = 2;
	const SIZE_WIDE = 3;

	private $name, $size, $isPrimary, $isSpecial;

	public function __construct( $name, array $options ) {
		$this->name = $name;
		$this->size = isset( $options['size'] ) ? $options['size'] : self::SIZE_NORMAL;
		$this->isPrimary = isset( $options['primary'] ) && $options['primary'];
		$this->isSpecial = isset( $options['special'] ) && $options['special'];
	}

	public static function newFromAttributes( array $attrs ) {
		if ( !isset( $attrs['mw:region'] ) ) {
			throw new Exception( __METHOD__ . ": A mw:region='' attribute was not defined in the attributes." );
		}
		$name = $attrs['mw:region'];
		$options = array();
		if ( isset( $attrs['size'] ) ) {
			switch ( $attrs['size'] ) {
			case 'normal':
				$options['size'] = self::SIZE_NORMAL;
				break;
			case 'narrow':
				$options['size'] = self::SIZE_NARROW;
				break;
			case 'wide':
				$options['size'] = self::SIZE_WIDE;
				break;
			default:
				throw new Exception( __METHOD__ . ": Unknown size {$attrs['size']}." );
			}
		} else {
			$options['size'] = self::SIZE_NORMAL;
		}
		$options['primary'] = isset( $attrs['primary'] );
		$options['special'] = isset( $attrs['special'] );
		return new self( $name, $options );
	}

}