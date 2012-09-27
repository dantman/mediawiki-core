<?php
/**
 * Provide things related to namespaces.
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
 */

/**
 * This is a utility class with only static functions
 * for dealing with namespaces that encodes all the
 * "magic" behaviors of them based on index.  The textual
 * names of the namespaces are handled by Language.php.
 *
 * These are synonyms for the names given in the language file
 * Users and translators should not change them
 *
 */
class MWNamespace {

	/**
	 * These namespaces should always be first-letter capitalized, now and
	 * forevermore. Historically, they could've probably been lowercased too,
	 * but some things are just too ingrained now. :)
	 */
	private static $alwaysCapitalizedNamespaces = array( NS_SPECIAL, NS_USER, NS_MEDIAWIKI );

	/**
	 * Throw an exception when trying to get the subject or talk page
	 * for a given namespace where it does not make sense.
	 * Special namespaces are defined in includes/Defines.php and have
	 * a value below 0 (ex: NS_SPECIAL = -1 , NS_MEDIA = -2)
	 *
	 * @param $index
	 * @param $method
	 *
	 * @return bool
	 */
	private static function isMethodValidFor( $index, $method ) {
		if ( $index < NS_MAIN ) {
			throw new MWException( "$method does not make any sense for given namespace $index" );
		}
		return true;
	}

	/**
	 * Can pages in the given namespace be moved?
	 *
	 * @param $index Int: namespace index
	 * @return bool
	 */
	public static function isMovable( $index ) {
		global $wgAllowImageMoving;

		$result = !( $index < NS_MAIN || ( $index == NS_FILE && !$wgAllowImageMoving )  || $index == NS_CATEGORY );

		/**
		 * @since 1.20
		 */
		wfRunHooks( 'NamespaceIsMovable', array( $index, &$result ) );

		return $result;
	}

	/**
	 * Is the given namespace is a subject (non-talk) namespace?
	 *
	 * @param $index Int: namespace index
	 * @return bool
	 * @since 1.19
	 */
	public static function isSubject( $index ) {
		return !self::isTalk( $index );
	}

	/**
	 * @see self::isSubject
	 * @deprecated Please use the more consistently named isSubject (since 1.19)
	 * @return bool
	 */
	public static function isMain( $index ) {
		wfDeprecated( __METHOD__, '1.19' );
		return self::isSubject( $index );
	}

	/**
	 * Is the given namespace a talk namespace?
	 *
	 * @param $index Int: namespace index
	 * @return bool
	 */
	public static function isTalk( $index ) {
		return $index > NS_MAIN
			&& $index % 2;
	}

	/**
	 * Get the talk namespace index for a given namespace
	 *
	 * @param $index Int: namespace index
	 * @return int
	 */
	public static function getTalk( $index ) {
		self::isMethodValidFor( $index, __METHOD__ );
		return self::isTalk( $index )
			? $index
			: $index + 1;
	}

	/**
	 * Get the subject namespace index for a given namespace
	 * Special namespaces (NS_MEDIA, NS_SPECIAL) are always the subject.
	 *
	 * @param $index Int: Namespace index
	 * @return int
	 */
	public static function getSubject( $index ) {
		# Handle special namespaces
		if ( $index < NS_MAIN ) {
			return $index;
		}

		return self::isTalk( $index )
			? $index - 1
			: $index;
	}

	/**
	 * Get the associated namespace.
	 * For talk namespaces, returns the subject (non-talk) namespace
	 * For subject (non-talk) namespaces, returns the talk namespace
	 *
	 * @param $index Int: namespace index
	 * @return int or null if no associated namespace could be found
	 */
	public static function getAssociated( $index ) {
		self::isMethodValidFor( $index, __METHOD__ );

		if ( self::isSubject( $index ) ) {
			return self::getTalk( $index );
		} elseif ( self::isTalk( $index ) ) {
			return self::getSubject( $index );
		} else {
			return null;
		}
	}

	/**
	 * Returns whether the specified namespace exists
	 *
	 * @param $index
	 *
	 * @return bool
	 * @since 1.19
	 */
	public static function exists( $index ) {
		$nslist = self::getCanonicalNamespaces();
		return isset( $nslist[$index] );
	}

	/**
	 * Returns whether the specified namespaces are the same namespace
	 *
	 * @note It's possible that in the future we may start using something
	 * other than just namespace indexes. Under that circumstance making use
	 * of this function rather than directly doing comparison will make
	 * sure that code will not potentially break.
	 *
	 * @param $ns1 int The first namespace index
	 * @param $ns2 int The second namespae index
	 *
	 * @return bool
	 * @since 1.19
	 */
	public static function equals( $ns1, $ns2 ) {
		return $ns1 == $ns2;
	}

	/**
	 * Returns whether the specified namespaces share the same subject.
	 * eg: NS_USER and NS_USER wil return true, as well
	 *     NS_USER and NS_USER_TALK will return true.
	 *
	 * @param $ns1 int The first namespace index
	 * @param $ns2 int The second namespae index
	 *
	 * @return bool
	 * @since 1.19
	 */
	public static function subjectEquals( $ns1, $ns2 ) {
		return self::getSubject( $ns1 ) == self::getSubject( $ns2 );
	}

	/**
	 * Returns array of all defined namespaces with their canonical
	 * (English) names.
	 *
	 * @return array
	 * @since 1.17
	 */
	public static function getCanonicalNamespaces() {
		static $namespaces = null;
		if ( $namespaces === null ) {
			global $wgExtraNamespaces, $wgCanonicalNamespaceNames;
			$namespaces = array( NS_MAIN => '' ) + $wgCanonicalNamespaceNames;
			if ( is_array( $wgExtraNamespaces ) ) {
				$namespaces += $wgExtraNamespaces;
			}
			wfRunHooks( 'CanonicalNamespaces', array( &$namespaces ) );
		}
		return $namespaces;
	}

	/**
	 * Returns the canonical (English) name for a given index
	 *
	 * @param $index Int: namespace index
	 * @return string or false if no canonical definition.
	 */
	public static function getCanonicalName( $index ) {
		$nslist = self::getCanonicalNamespaces();
		if ( isset( $nslist[$index] ) ) {
			return $nslist[$index];
		} else {
			return false;
		}
	}

	/**
	 * Returns the index for a given canonical name, or NULL
	 * The input *must* be converted to lower case first
	 *
	 * @param $name String: namespace name
	 * @return int
	 */
	public static function getCanonicalIndex( $name ) {
		static $xNamespaces = false;
		if ( $xNamespaces === false ) {
			$xNamespaces = array();
			foreach ( self::getCanonicalNamespaces() as $i => $text ) {
				$xNamespaces[strtolower( $text )] = $i;
			}
		}
		if ( array_key_exists( $name, $xNamespaces ) ) {
			return $xNamespaces[$name];
		} else {
			return null;
		}
	}

	/**
	 * Returns an array of the namespaces (by integer id) that exist on the
	 * wiki. Used primarily by the api in help documentation.
	 * @return array
	 */
	public static function getValidNamespaces() {
		static $mValidNamespaces = null;

		if ( is_null( $mValidNamespaces ) ) {
			foreach ( array_keys( self::getCanonicalNamespaces() ) as $ns ) {
				if ( $ns >= 0 ) {
					$mValidNamespaces[] = $ns;
				}
			}
		}

		return $mValidNamespaces;
	}

	/**
	 * Can this namespace ever have a talk namespace?
	 *
	 * @param $index Int: namespace index
	 * @return bool
	 */
	 public static function canTalk( $index ) {
		return $index >= NS_MAIN;
	 }

	/**
	 * Does this namespace contain content, for the purposes of calculating
	 * statistics, etc?
	 *
	 * @param $index Int: index to check
	 * @return bool
	 */
	public static function isContent( $index ) {
		global $wgContentNamespaces;
		return $index == NS_MAIN || in_array( $index, $wgContentNamespaces );
	}

	/**
	 * Can pages in a namespace be watched?
	 *
	 * @param $index Int
	 * @return bool
	 */
	public static function isWatchable( $index ) {
		return $index >= NS_MAIN;
	}

	/**
	 * Does the namespace allow subpages?
	 *
	 * @param $index int Index to check
	 * @return bool
	 */
	public static function hasSubpages( $index ) {
		global $wgNamespacesWithSubpages;
		return !empty( $wgNamespacesWithSubpages[$index] );
	}

	/**
	 * Get a list of all namespace indices which are considered to contain content
	 * @return array of namespace indices
	 */
	public static function getContentNamespaces() {
		global $wgContentNamespaces;
		if ( !is_array( $wgContentNamespaces ) || $wgContentNamespaces === array() ) {
			return NS_MAIN;
		} elseif ( !in_array( NS_MAIN, $wgContentNamespaces ) ) {
			// always force NS_MAIN to be part of array (to match the algorithm used by isContent)
			return array_merge( array( NS_MAIN ), $wgContentNamespaces );
		} else {
			return $wgContentNamespaces;
		}
	}

	/**
	 * List all namespace indices which are considered subject, aka not a talk
	 * or special namespace. See also MWNamespace::isSubject
	 *
	 * @return array of namespace indices
	 */
	public static function getSubjectNamespaces() {
		return array_filter(
			MWNamespace::getValidNamespaces(),
			'MWNamespace::isSubject'
		);
	}

	/**
	 * List all namespace indices which are considered talks, aka not a subject
	 * or special namespace. See also MWNamespace::isTalk
	 *
	 * @return array of namespace indices
	 */
	public static function getTalkNamespaces() {
		return array_filter(
			MWNamespace::getValidNamespaces(),
			'MWNamespace::isTalk'
		);
	}

	/**
	 * Is the namespace first-letter capitalized?
	 *
	 * @param $index int Index to check
	 * @return bool
	 */
	public static function isCapitalized( $index ) {
		global $wgCapitalLinks, $wgCapitalLinkOverrides;
		// Turn NS_MEDIA into NS_FILE
		$index = $index === NS_MEDIA ? NS_FILE : $index;

		// Make sure to get the subject of our namespace
		$index = self::getSubject( $index );

		// Some namespaces are special and should always be upper case
		if ( in_array( $index, self::$alwaysCapitalizedNamespaces ) ) {
			return true;
		}
		if ( isset( $wgCapitalLinkOverrides[ $index ] ) ) {
			// $wgCapitalLinkOverrides is explicitly set
			return $wgCapitalLinkOverrides[ $index ];
		}
		// Default to the global setting
		return $wgCapitalLinks;
	}

	/**
	 * Does the namespace (potentially) have different aliases for different
	 * genders. Not all languages make a distinction here.
	 *
	 * @since 1.18
	 * @param $index int Index to check
	 * @return bool
	 */
	public static function hasGenderDistinction( $index ) {
		return $index == NS_USER || $index == NS_USER_TALK;
	}

	/**
	 * It is not possible to use pages from this namespace as template?
	 *
	 * @since 1.20
	 * @param $index int Index to check
	 * @return bool
	 */
	public static function isNonincludable( $index ) {
		global $wgNonincludableNamespaces;
		return $wgNonincludableNamespaces && in_array( $index, $wgNonincludableNamespaces );
	}

}

class WikiNamespace {

	/**
	 * Constants for the values of namespace.ns_type used directly by core.
	 */
	const TYPE_SPECIAL = 'special';
	const TYPE_SUBJECT = 'subject';
	const TYPE_TALK = 'talk';

	/** Static variables */

	/**
	 * Key for core namespaces built into MediaWiki. Namespace texts are inside localization files.
	 * Because of historical issues the namespace numbers for core namespaces
	 * are hardcoded and fixed to the number defined.
	 * These are not use directly but rather are use in namespace initialization.
	 */
	private static $coreNamespaceReservations = array(
		array( 'mw.media',          -2,  'Media'          ),
		array( 'mw.special',        -1,  'Special'        ),
		array( 'mw.main',            0,  ''               ),
		array( 'mw.talk',            1,  'Talk'           ),
		array( 'mw.user',            2,  'User'           ),
		array( 'mw.user.talk',       3,  'User_talk'      ),
		array( 'mw.project',         4,  'Project'        ),
		array( 'mw.project.talk',    5,  'Project_talk'   ),
		array( 'mw.file',            6,  'File'           ),
		array( 'mw.file.talk',       7,  'File_talk'      ),
		array( 'mw.mediawiki',       8,  'MediaWiki'      ),
		array( 'mw.mediawiki.talk',  9,  'MediaWiki_talk' ),
		array( 'mw.template',        10, 'Template'       ),
		array( 'mw.template.talk',   11, 'Template_talk'  ),
		array( 'mw.help',            12, 'Help'           ),
		array( 'mw.help.talk',       13, 'Help_talk'      ),
		array( 'mw.category',        14, 'Category'       ),
		array( 'mw.category.talk',   15, 'Category_talk'  ),
	);

	/**
	 *
	 */
	protected static $namespacesByID;

	/**
	 *
	 */
	protected static $namespacesByKey;

	/**
	 *
	 */
	protected static $namespacesByTextKey;

	/** Instance properties */

	/**
	 * Boolean indicating if the namespace already exists in the database.
	 * This is simply used to determine whether to use INSERT or UPDATE inside of save.
	 */
	protected $exists;

	/**
	 * Namespace number for the namespace.
	 */
	protected $id;

	/**
	 * Namespace key for the namespace (eg: 'mw.main')
	 */
	protected $key;

	/**
	 * Namespace type. eg: 'special', 'subject', 'talk'.
	 */
	protected $type;

	/**
	 * The canonical namespace text in different forms.
	 */
	protected $canonical_id;
	protected $canonical_nst;

	/**
	 * Array of namespace settings. eg: subpages
	 */
	protected $settings;

	/**
	 * Namespace canonical and alias texts for this namespace from the namespace_text table.
	 */
	protected $texts;

	/** Static methods */

	/**
	 * Do a complete initialization of the namespace system.
	 *   - Make sure the namespace data has been loaded.
	 *   - Call the extension namespace registration hooks,
	 *     examine the deprecated config settings, etc...
	 *   - Check to make sure that there are no namespaces missing from the registry.
	 *     - If a namespace is missing from the registry load the namespaces directly
	 *       from the master database and double check.
	 *     - If a namespaces is still missing update the registry with the new namespace.
	 * This functionality basically makes sure that core namespaces are registered first time they're needed,
	 * extension namespaces are registered whenever you install them, and whenever localizations of namespaces
	 * are changed the namespace canonical and alias texts are updated.
	 */
	public static function initialize() {
		self::load();
		global $wgContLang;
		// Namespace related globals
		global $wgMetaNamespace, $wgMetaNamespaceTalk, $wgNamespacesWithSubpages;

		// Make sure all core namespaces are reserved
		foreach ( self::$coreNamespaceReservations as $coreNS ) {
			list( $key, $id, $text ) = $coreNS;
			if ( isset( self::$namespacesByKey[ $key ] ) ) {
				$ns = self::$namespacesByKey[ $key ];
				if ( $ns->id != $id ) {
					// Make sure we don't get very far when the namespace registry has gone corrupt.
					throw new MWException( __METHOD__ .
						": The core namespace '$key' is registered incorrectly with the id {$ns->id}"
						. " when it must be hardcoded to $id for MediaWiki to function correctly." );
						// @fixme The skin stuff MWException uses depends on namespaces, is this really what we want?
				}
			} else {
				// @todo Move this to a method and throw something to trigger us to start over with data fetched directly from the master
				// This core namespace doesn't exist. Prepare to create it.
				$ns = new WikiNamespace;
				$ns->id = $id;
				$ns->key = $key;
				// Namespace types for MediaWiki have hardcoded patterns
				// so just set type based on the settings.
				if ( $id < 0 ) {
					$ns->type = self::TYPE_SPECIAL;
				} elseif ( $id % 2 ) {
					$ns->type = self::TYPE_TALK;
				} else {
					$ns->type = self::TYPE_SUBJECT;
				}
				$ns->setCanonicalText( $text );
				$ns->setSetting( 'subpages', wfArrayGet( $wgNamespacesWithSubpages, $id, false ) );
				$ns->save();

				// Make sure our indexes are up to date
				self::$namespacesByID[$ns->id] = $ns;
				self::$namespacesByKey[$ns->key] = $ns;
				foreach ( $ns->texts as $nst ) {
					self::$namespacesByTextKey[$nst->nst_key] = $ns;
				}
			}
		}

		$lc = Language::getLocalisationCache();
		$namespaceNames = $lc->getItem( $wgContLang->getCode(), 'namespaceNames' );

		// @todo Use namespaceNames to add the localized names as canonical text
		// @todo Use other localized info like namespaceAliases and namespaceGenderAliases to fill out aliases.

		// Make sure that our Project: and Project_talk: namespaces use their wg namespace settings
		// We don't do this in the section above because we don't want to deprecate these config
		// variables which are based on the sitename.
		$project = self::get( 'mw.project' );
		if ( $project->getCanonicalText() != $wgMetaNamespace ) {
			$project->setCanonicalText( $wgMetaNamespace );
			$project->save();
			// Make sure our indexes are up to date
			foreach ( $project->texts as $nst ) {
				self::$namespacesByTextKey[$nst->nst_key] = $project;
			}
		}

		$project_talk = self::get( 'mw.project.talk' );
		$project_talk_text = $wgMetaNamespaceTalk;
		if ( !$project_talk_text ) {
			$project_talk_text = $wgContLang->fixVariableInNamespace( $namespaceNames[NS_PROJECT_TALK] );
		}
		if ( $project_talk->getCanonicalText() != $project_talk_text ) {
			$project_talk->setCanonicalText( $project_talk_text );
			$project_talk->save();
			// Make sure our indexes are up to date
			foreach ( $project_talk->texts as $nst ) {
				self::$namespacesByTextKey[$nst->nst_key] = $project_talk;
			}
		}

	}

	public static function load() {
		if ( !is_null( self::$namespacesByID ) ) {
			return;
		}
		self::loadFromDatabase();
	}

	public static function loadFromDatabase( $db = DB_SLAVE ) {
		if ( !( $db instanceof DatabaseBase ) ) {
			$db = wfGetDB( $db );
		}
		$namespacesByID = array();
		$res = $db->select( 'namespace', '*' );
		foreach ( $res as $row ) {
			$ns = WikiNamespace::newFromRow( $row );
			$namespacesByID[$ns->id] = $ns;
		}
		$res = $db->select( 'namespace_text', '*' );
		foreach ( $res as $nst ) {
			$nst->nst_id = (int)$nst->nst_id;
			$ns = $namespacesByID[ $nst->nst_namespace ];
			$ns->texts[ $nst->nst_key ] = $nst;
			if ( $ns->canonical_id >= 0 && $ns->canonical_id == $nst->nst_id ) {
				$ns->canonical_nst = $nst;
			}
		}

		$namespacesByKey = array();
		$namespacesByTextKey = array();
		foreach ( $namespacesByID as $ns ) {
			$namespacesByKey[ $ns->key ] = $ns;
			foreach ( $ns->texts as $nst ) {
				$namespacesByTextKey[ $nst->nst_key ] = $ns;
			}
		}

		self::$namespacesByID = $namespacesByID;
		self::$namespacesByKey = $namespacesByKey;
		self::$namespacesByTextKey = $namespacesByTextKey;
	}

	public static function normalizeNamespaceText( $text ) {
		global $wgContLang;
		// Keys are normalized to lowercase
		$text = $wgContLang->lc( $text );
		// Spaces are converted to underscores
		$text = str_replace( ' ', '_', $text );
		return $text;
	}

	public static function get( $key ) {
		self::load();

		if ( array_key_exists( $key, self::$namespacesByKey) ) {
			return self::$namespacesByKey[ $key ];
		}

		throw new MWException( __METHOD__ . ": The namespace '$key' does not exist." );
	}

	public function __construct() {
		$this->exists = false;
		$this->canonical_id = -1;
		$this->settings = array();
		$this->texts = array();
	}

	public static function newFromRow( $row ) {
		$ns = new WikiNamespace;
		$ns->exists = true;
		$ns->id = $row->ns_id;
		$ns->key = $row->ns_key;
		$ns->type = $row->ns_type;
		$ns->canonical_id = $row->ns_canonical;
		$ns->settings = unserialize( $row->ns_settings );

		return $ns;
	}

	/** Instance methods */
	public function getCanonicalText() {
		if ( is_null( $this->canonical_nst ) ) {
			throw new MWException( __METHOD__ . ": No canonical namespace text is defined for '{$this->key}'." );
		}
		return $this->canonical_nst->nst_text;
	}

	public function addNamespaceText( $text ) {
		if ( in_string( ':', $text ) ) {
			throw new MWException( __METHOD__ . ': Namespace text may not contain a :.' );
		}
		if( preg_match( Title::getTitleInvalidRegex(), $text ) ) {
			throw new MWException( __METHOD__ . ': Namespace text may not contain an invalid title character.' );
		}
		$key = self::normalizeNamespaceText( $text );
		if ( array_key_exists( $key, $this->texts ) ) {
			$nst = $this->texts[$key];
			if ( $nst->nst_text != $text ) {
				// Looks like this is a simple display text tweak eg: 'Foobar' -> 'FooBar'
				$nst->nst_text = $text;
			}
			return $nst;
		}
		$nst = new stdClass;
		$nst->nst_id        = -1; // -1 indicates the row does not exist and needs to be inserted
		$nst->nst_namespace = $this->id;
		$nst->nst_key       = $key;
		$nst->nst_text      = $text;
		$this->texts[$key] = $nst;
		return $nst;
	}

	public function setCanonicalText( $text ) {
		$nst = $this->addNamespaceText( $text );
		$this->canonical_id = $nst->nst_id;
		$this->canonical_nst = $nst;
	}

	public function setSetting( $key, $value ) {
		$this->settings[ $key ] = $value;
	}

	public function save() {
		$dbw = wfGetDB( DB_MASTER );

		// Update or insert the namespace row.
		$fields = array(
			'ns_id'        => $this->id,
			'ns_key'       => $this->key,
			'ns_type'      => $this->type,
			'ns_canonical' => $this->canonical_id,
			'ns_settings'  => serialize( $this->settings ),
		);
		if ( $this->exists ) {
			// Do not permit updates of the id or key, ever.
			unset( $fields['ns_id'], $fields['ns_key'] );
			$dbw->update( 'namespace', $fields, array( 'ns_id' => $this->id ), __METHOD__ );
		} else {
			$success = $dbw->insert( 'namespace', $fields, __METHOD__ );
			$this->exists = $success;
		};

		// Insert or delete namespace_text rows.
		foreach ( $this->texts as $nst ) {
			if ( $nst->nst_id == -1 ) {
				// Insert namespace_text entries that do not exist.
				$seqVal = $dbw->nextSequenceValue( array( 'namespace_text', 'nst_id') );
				$dbw->insert( 'namespace_text',
					array(
						'nst_id'        => $seqVal,
						'nst_namespace' => $nst->nst_namespace,
						'nst_key'       => $nst->nst_key,
						'nst_text'      => $nst->nst_text,
					), __METHOD__
				);
				$nst->nst_id = $dbw->insertId();
			}
		}

		// Deal with ns_canonical when the canonical text was added after
		if ( $this->canonical_nst && $this->canonical_id == -1 ) {
			$this->canonical_id = $this->canonical_nst->nst_id;
			$dbw->update( 'namespace',
				array( 'ns_canonical' => $this->canonical_id ),
				array( 'ns_id' => $this->id ),
				__METHOD__
			);
		}
	}

}
