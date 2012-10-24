<?php
/**
 * Slovenian (Slovenščina) specific code.
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
 * @ingroup Language
 */

/**
 * Slovenian (Slovenščina)
 *
 * @ingroup Language
 */
class LanguageSl extends Language {
	# Convert from the nominative form of a noun to some other case
	# Invoked with {{GRAMMAR:case|word}}
	/**
	 * Cases: rodilnik, dajalnik, tožilnik, mestnik, orodnik
	 *
	 * @param $word string
	 * @param $case string
	 *
	 * @return string
	 */
	function convertGrammar( $word, $case ) {
		global $wgGrammarForms;
		if ( isset( $wgGrammarForms['sl'][$case][$word] ) ) {
			return $wgGrammarForms['sl'][$case][$word];
		}

		switch ( $case ) {
			case 'mestnik': # locative
				$word = 'o ' . $word; break;
			case 'orodnik': # instrumental
				$word = 'z ' . $word;
		}

		return $word; # this will return the original value for 'imenovalnik' (nominativ) and all undefined case values
	}

	/**
	 * @param $count int
	 * @param $forms array
	 *
	 * @return string
	 */
	function convertPlural( $count, $forms ) {
		if ( !count( $forms ) ) { return ''; }
		$forms = $this->preConvertPlural( $forms, 5 );

		if ( $count % 100 == 1 ) {
			$index = 0;
		} elseif ( $count % 100 == 2 ) {
			$index = 1;
		} elseif ( $count % 100 == 3 || $count % 100 == 4 ) {
			$index = 2;
		} elseif ( $count != 0 ) {
			$index = 3;
		} else {
			$index = 4;
		}
		return $forms[$index];
	}
}
