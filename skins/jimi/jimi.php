<?php
/**
 * XXX: Test skin for the skinrewrite branch. This should be deleted when merged into the loader.
 */

$wgValidSkinNames['jimi'] = "{MWSkin}";

$meta = MWSkinMetadata::newFromFile( __DIR__ . '/jimi.xml' );
foreach ( $meta->getModules() as $name => $module ) {
	if ( array_key_exists( $name, $wgResourceModules ) ) {
		wfWarn( "Ignoring module definition for $name in skin, a module by that name already exists." );
	} else {
		unset( $module['load'] );
		$wgResourceModules[$name] = $module;
		$wgResourceModules[$name]['remoteBasePath'] = &$GLOBALS['wgStylePath'];
		$wgResourceModules[$name]['localBasePath'] = &$GLOBALS['wgStyleDirectory'];
	}
}
