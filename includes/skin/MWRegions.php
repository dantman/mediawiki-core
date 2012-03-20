<?php
/**
 * Class implementing MWSkin block regions
 *
 * @file
 */

class MWRegionBlocks {

	private $blocks;

	public function __construct() {
		$this->blocks = new SplDoublyLinkedList;
	}

	public function addRegion( $region ) {
		$this->blocks->push( $region );
	}

	public function fillRegions( $regions ) {
		// XXX: This code is just so the test will work
		$primary = null;
		foreach ( $regions as $region ) {
			if ( $region->isPrimary() ) {
				$primary = $region;
			}
		}
		if ( !$primary ) {
			$primary = $region->bottom();
		}
		// XXX: For now we're assuming everything goes in one primary region
		$primary->clearBlocks();
		foreach ( $this->blocks as $block ) {
			$primary->addBlock( $block );
		}
	}

}

class MWRegionBlock {

	const SIZE_NORMAL = 1;
	const SIZE_NARROW = 2;
	const SIZE_WIDE = 3;
	const SIZE_SHORT = 4;

	private $name, $size, $html;

	public function __construct( $name, array $options = array() ) {
		$this->name = $name;
		$this->size = self::SIZE_NORMAL;
		$this->html = '';
	}

	public function name() {
		return $this->name;
	}

	public function setSize( $size ) {
		if ( !in_array( $size, array( self::SIZE_NORMAL, self::SIZE_NARROW, self::SIZE_WIDE, self::SIZE_SHORT ) ) ) {
			throw new Exception( "Invalid region block size." );
		}
		$this->size = $size;
	}

	public function addHTML( $html ) {
		$this->html .= $html;
	}

	public function getHTML() {
		return $this->html;
	}

}

class MWSkinRegion implements IteratorAggregate {

	const SIZE_NORMAL = 1;
	const SIZE_NARROW = 2;
	const SIZE_WIDE = 3;
	const SIZE_SHORT = 4;

	private $name, $size, $isPrimary, $isSpecial, $blocks;

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

	public function name() {
		return $this->name;
	}

	public function isPrimary() {
		return $this->isPrimary; 
	}

	public function clearBlocks() {
		unset( $this->blocks );
	}

	public function addBlock( $block ) {
		if ( !isset( $this->blocks ) ) {
			$this->blocks = new SplDoublyLinkedList;
		}
		$this->blocks->push( $block );
	}

	public function getIterator() {
		if ( isset( $this->blocks ) ) {
			return new IteratorIterator( $this->blocks );
		} else {
			return new EmptyIterator;
		}
	}

}