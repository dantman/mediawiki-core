<?php
/**
 * Class implementing MWSkin template functions
 *
 * @file
 */

class MWSkinFunctionArgs {

	private $positional, $named;

	public function __construct() {
		$this->positional = new SplDoublyLinkedList;
		$this->named = new stdClass;
	}

	public function addPositional( $value ) {
		$this->positional->push( $value );
	}

	public function setNamed( $name, $value ) {
		$this->named->{$name} = $value;
	}

	public function getPositional( $n ) {
		return $this->positional->offsetGet( $n );
	}

	public function getNamed( $name ) {
		return $this->named->{$name};
	}

}

abstract class MWSkinFunction {

	public function __construct( $name ) {
		$this->name = $name;
	}

	private static $functions = array(
		'msg' => 'MWSkinFunction_msg',
	);

	public static function getFunction( $name ) {
		if ( isset( self::$functions[$name] ) ) {
			$className = self::$functions[$name];
		} else {
			wfDebug( __METHOD__ . ": there is no skin function by the name $name." );
			$className = 'MWSkinFunction_nofunction';
		}
		$func = new $className( $name );
		// @todo Singletons?
		return $func;
	}

	/**
	 *
	 */
	abstract public function execute( MWSkinFunctionArgs $args );

}

class MWSkinFunction_msg extends MWSkinFunction {

	public function execute( MWSkinFunctionArgs $args ) {
		// @fixme The real msg function will support a number of extra args and use a proper wfMessage class
		$msgName = $args->getPositional( 0 );
		return new MWSkinTemplateTypes\Text( wfMsg( $msgName ) );
	}

}

class MWSkinFunction_nofunction extends MWSkinFunction {

	public function execute( MWSkinFunctionArgs $args ) {
		// @todo i18n the error
		return new MWSkinTemplateTypes\FunctionError( "There is no function by the name {$this->name}." );
	} 
}
