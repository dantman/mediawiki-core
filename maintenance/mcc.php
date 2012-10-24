<?php
/**
 * memcached diagnostic tool
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
 * @todo document
 * @ingroup Maintenance
 */

/** */
require_once( __DIR__ . '/commandLine.inc' );

$mcc = new MWMemcached( array( 'persistent' => true/*, 'debug' => true*/ ) );
$mcc->set_servers( $wgMemCachedServers );
# $mcc->set_debug( true );

function mccShowHelp( $command ) {
	$commandList = array(
		'get' => 'grabs something',
		'getsock' => 'lists sockets',
		'set' => 'changes something',
		'delete' => 'deletes something',
		'history' => 'show command line history',
		'server' => 'show current memcached server',
		'dumpmcc' => 'shows the whole thing',
		'exit' => 'exit mcc',
		'quit' => 'exit mcc',
		'help' => 'help about a command',
	);
	if ( !$command ) {
		$command = 'fullhelp';
	}
	if ( $command === 'fullhelp' ) {
		$max_cmd_len = max( array_map( 'strlen', array_keys( $commandList ) ) );
		foreach ( $commandList as $cmd => $desc ) {
			printf( "%-{$max_cmd_len}s: %s\n", $cmd, $desc );
		}
	} elseif ( isset( $commandList[$command] ) ) {
		print "$command: $commandList[$command]\n";
	} else {
		print "$command: command does not exist or no help for it\n";
	}
}

do {
	$bad = false;
	$showhelp = false;
	$quit = false;

	$line = Maintenance::readconsole();
	if ( $line === false ) exit;

	$args = explode( ' ', $line );
	$command = array_shift( $args );

	// process command
	switch ( $command ) {
		case 'help':
			// show an help message
			mccShowHelp( array_shift( $args ) );
		break;

		case 'get':
			$sub = '';
			if ( array_key_exists( 1, $args ) ) {
				$sub = $args[1];
			}
			print "Getting {$args[0]}[$sub]\n";
			$res = $mcc->get( $args[0] );
			if ( array_key_exists( 1, $args ) ) {
				$res = $res[$args[1]];
			}
			if ( $res === false ) {
				# print 'Error: ' . $mcc->error_string() . "\n";
				print "MemCached error\n";
			} elseif ( is_string( $res ) ) {
				print "$res\n";
			} else {
				var_dump( $res );
			}
		break;

		case 'getsock':
			$res = $mcc->get( $args[0] );
			$sock = $mcc->get_sock( $args[0] );
			var_dump( $sock );
			break;

		case 'server':
			if ( $mcc->_single_sock !== null ) {
				print $mcc->_single_sock . "\n";
				break;
			}
			$res = $mcc->get( $args[0] );
			$hv = $mcc->_hashfunc( $args[0] );
			for ( $i = 0; $i < 3; $i++ ) {
				print $mcc->_buckets[$hv % $mcc->_bucketcount] . "\n";
				$hv += $mcc->_hashfunc( $i . $args[0] );
			}
			break;

		case 'set':
			$key = array_shift( $args );
			if ( $args[0] == "#" && is_numeric( $args[1] ) ) {
				$value = str_repeat( '*', $args[1] );
			} else {
				$value = implode( ' ', $args );
			}
			if ( !$mcc->set( $key, $value, 0 ) ) {
				# print 'Error: ' . $mcc->error_string() . "\n";
				print "MemCached error\n";
			}
			break;

		case 'delete':
			$key = implode( ' ', $args );
			if ( !$mcc->delete( $key ) ) {
				# print 'Error: ' . $mcc->error_string() . "\n";
				print "MemCached error\n";
			}
			break;

		case 'history':
			if ( function_exists( 'readline_list_history' ) ) {
				foreach ( readline_list_history() as $num => $line ) {
					print "$num: $line\n";
				}
			} else {
				print "readline_list_history() not available\n";
			}
			break;

		case 'dumpmcc':
			var_dump( $mcc );
			break;

		case 'quit':
		case 'exit':
			$quit = true;
			break;

		default:
			$bad = true;
	} // switch() end

	if ( $bad ) {
		if ( $command ) {
			print "Bad command\n";
		}
	} else {
		if ( function_exists( 'readline_add_history' ) ) {
			readline_add_history( $line );
		}
	}
} while ( !$quit );
