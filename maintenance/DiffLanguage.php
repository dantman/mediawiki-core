<?php
# MediaWiki web-based config/installation
# Copyright (C) 2004 Ashar Voultoiz <thoane@altern.org> and others
# http://www.mediawiki.org/
# 
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
# 
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
# http://www.gnu.org/copyleft/gpl.html


# This script is an alpha version.
#
# The goal is to get a list of messages not yet localised in a
# languageXX.php file using the language.php file as reference.
#
# Usage:
# php DiffLanguage.php
#
# Enter the language code following "Language" of the LanguageXX.php
# you want to check. If using linux you might need to follow case aka
# Zh and not zh.
#
# The script then print a list of wgAllMessagesXX keys that aren't
# localised, a percentage of messages correctly localised and the
# number of messages to be translated.
#
#
# Known bugs:
# - File paths are hardcoded
# - Can't check your configured language.(says nothing is localised)
#


$wgCommandLineMode = true;
# Turn off output buffering if it's on
@ob_end_flush();

include_once("../LocalSettings.php");
include_once( "../includes/Setup.php" );
include_once( "../install-utils.inc" );

# read command line argument
if ( isset($argv[1]) ) {
	$lang = $argv[1];

# or prompt a simple menu
} else {
	$loop = true;
	print "Enter the language you want to check [$wgLanguageCode]:";
	do {
		@ob_end_flush();
		$input = readconsole();
		
		# set the input to current language
		if($input == "") {
			$input = $wgLanguageCode;
		}
		
		# try to get the file		
		if( file_exists("../Languages/Language$input.php") ) {
			$loop = false;
			$lang = $input;
		}
	} while ($loop);
	
}

/* TODO
	Need to check case of the $lang : 1st char upper 2nd char lower
*/


# include the language if it's not the already loaded one
if($lang != $wgLanguageCode) {
	print "Including language file for $lang.\n";

	include("Language{$lang}.php");
}

/* ugly hack to load the correct array, if you have a better way
to achieve the same goal, recode it ! */
$foo = "wgAllMessages$lang";
$testme = &$$foo;
/* end of ugly hack */


# Get all references messages and check if they exist in the tested language
$i = 0;
print "Checking $lang localisation file against reference (en):\n----\n";
foreach($wgAllMessagesEn as $index => $localized)
{
	if(!(isset($testme[$index]))) {
		$i++;

		echo "$index\n";
	}
}
echo "----\n";
echo (100 - $i/count($wgAllMessagesEn) * 100)."% completed\n";
echo "$i unlocalised of the ".count($wgAllMessagesEn)." messages available.\n";
