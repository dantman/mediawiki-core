<?php

/**
 * Class representing a MediaWiki site.
 *
 * @since 1.21
 *
 * @file
 * @ingroup Site
 *
 * @license GNU GPL v2+
 * @author John Erling Blad < jeblad@gmail.com >
 * @author Daniel Kinzler
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MediaWikiSite extends SiteObject {

	const PATH_FILE = 'file_path';
	const PATH_PAGE = 'page_path';

	/**
	 * @since 1.21
	 *
	 * @param integer $globalId
	 *
	 * @return MediaWikiSite
	 */
	public static function newFromGlobalId( $globalId ) {
		return SitesTable::singleton()->newRow( array(
			'type' => Site::TYPE_MEDIAWIKI,
			'global_key' => $globalId,
		), true );
	}

	/**
	 * Returns the database form of the given title.
	 *
	 * @since 1.21
	 *
	 * @param String $title the target page's title, in normalized form.
	 *
	 * @return String
	 */
	public function toDBKey( $title ) {
		return str_replace( ' ', '_', $title );
	}

	/**
	 * Returns the normalized form of the given page title, using the normalization rules of the given site.
	 * If the given title is a redirect, the redirect weill be resolved and the redirect target is returned.
	 *
	 * @note  : This actually makes an API request to the remote site, so beware that this function is slow and depends
	 *          on an external service.
	 *
	 * @note  : If MW_PHPUNIT_TEST is defined or $egWBRemoteTitleNormalization is set to false, the call to the
	 *          external site is skipped, and the title is normalized using the local normalization rules as
	 *          implemented by the Title class.
	 *
	 * @see Site::normalizePageName
	 *
	 * @since 1.21
	 *
	 * @param string $pageName
	 *
	 * @return string
	 * @throws MWException
	 */
	public function normalizePageName( $pageName ) {
		global $egWBRemoteTitleNormalization;

		// Check if we have strings as arguments.
		if ( !is_string( $pageName ) ) {
			throw new MWException( '$pageName must be a string' );
		}

		// Go on call the external site
		if ( defined( 'MW_PHPUNIT_TEST' ) ) {
			// If the code is under test, don't call out to other sites, just normalize locally.
			// Note: this may cause results to be inconsistent with the actual normalization used by the respective remote site!

			$t = Title::newFromText( $pageName );
			return $t->getPrefixedText();
		} else {

			// Make sure the string is normalized into NFC (due to the bug 40017)
			// but do nothing to the whitespaces, that should work appropriately.
			// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=40017
			$pageName = UtfNormal::cleanUp( $pageName );

			// Build the args for the specific call
			$args = array(
				'action' => 'query',
				'prop' => 'info',
				'redirects' => true,
				'converttitles' => true,
				'format' => 'json',
				'titles' => $pageName,
				//@todo: options for maxlag and maxage
				// Note that maxlag will lead to a long delay before a reply is made,
				// but that maxage can avoid the extreme delay. On the other hand
				// maxage could be nice to use anyhow as it stops unnecessary requests.
				// Also consider smaxage if maxage is used.
			);

			$url = $this->getFileUrl( 'api.php' ) . '?' . wfArrayToCgi( $args );

			// Go on call the external site
			//@todo: we need a good way to specify a timeout here.
			$ret = Http::get( $url );
		}

		if ( $ret === false ) {
			wfDebugLog( "MediaWikiSite", "call to external site failed: $url" );
			return false;
		}

		$data = FormatJson::decode( $ret, true );

		if ( !is_array( $data ) ) {
			wfDebugLog( "MediaWikiSite", "call to <$url> returned bad json: " . $ret );
			return false;
		}

		$page = static::extractPageRecord( $data, $pageName );

		if ( isset( $page['missing'] ) ) {
			wfDebugLog( "MediaWikiSite", "call to <$url> returned a marker for a missing page title! " . $ret );
			return false;
		}

		if ( isset( $page['invalid'] ) ) {
			wfDebugLog( "MediaWikiSite", "call to <$url> returned a marker for an invalid page title! " . $ret );
			return false;
		}

		if ( !isset( $page['title'] ) ) {
			wfDebugLog( "MediaWikiSite", "call to <$url> did not return a page title! " . $ret );
			return false;
		}

		return $page['title'];
	}


	/**
	 * Get normalization record for a given page title from an API response.
	 *
	 * @since 1.21
	 *
	 * @param array $externalData A reply from the API on a external server.
	 * @param string $pageTitle Identifies the page at the external site, needing normalization.
	 *
	 * @return array|false a 'page' structure representing the page identified by $pageTitle.
	 */
	private static function extractPageRecord( $externalData, $pageTitle ) {
		// If there is a special case with only one returned page
		// we can cheat, and only return
		// the single page in the "pages" substructure.
		if ( isset( $externalData['query']['pages'] ) ) {
			$pages = array_values( $externalData['query']['pages'] );
			if ( count( $pages) === 1 ) {
				return $pages[0];
			}
		}
		// This is only used during internal testing, as it is assumed
		// a more optimal (and lossfree) storage.
		// Make initial checks and return if prerequisites are not meet.
		if ( !is_array( $externalData ) || !isset( $externalData['query'] ) ) {
			return false;
		}
		// Loop over the tree different named structures, that otherwise are similar
		$structs = array(
			'normalized' => 'from',
			'converted' => 'from',
			'redirects' => 'from',
			'pages' => 'title'
		);
		foreach ( $structs as $listId => $fieldId ) {
			// Check if the substructure exist at all.
			if ( !isset( $externalData['query'][$listId] ) ) {
				continue;
			}
			// Filter the substructure down to what we actually are using.
			$collectedHits = array_filter(
				array_values( $externalData['query'][$listId] ),
				function( $a ) use ( $fieldId, $pageTitle ) {
					return $a[$fieldId] === $pageTitle;
				}
			);
			// If still looping over normalization, conversion or redirects,
			// then we need to keep the new page title for later rounds.
			if ( $fieldId === 'from' && is_array( $collectedHits ) ) {
				switch ( count( $collectedHits ) ) {
					case 0:
						break;
					case 1:
						$pageTitle = $collectedHits[0]['to'];
						break;
					default:
						return false;
				}
			}
			// If on the pages structure we should prepare for returning.
			elseif ( $fieldId === 'title' && is_array( $collectedHits ) ) {
				switch ( count( $collectedHits ) ) {
					case 0:
						return false;
					case 1:
						return array_shift( $collectedHits );
					default:
						return false;
				}
			}
		}
		// should never be here
		return false;
	}

	/**
	 * @see Site::getLinkPathType
	 * Returns Site::PATH_PAGE
	 *
	 * @since 1.21
	 *
	 * @return string
	 */
	public function getLinkPathType() {
		return self::PATH_PAGE;
	}

	/**
	 * Returns the relative page path.
	 *
	 * @since 1.21
	 *
	 * @return string
	 */
	public function getRelativePagePath() {
		return parse_url( $this->getPath( self::PATH_PAGE ), PHP_URL_PATH );
	}

	/**
	 * Returns the relative file path.
	 *
	 * @since 1.21
	 *
	 * @return string
	 */
	public function getRelativeFilePath() {
		return parse_url( $this->getPath( self::PATH_FILE ), PHP_URL_PATH );
	}

	/**
	 * Sets the relative page path.
	 *
	 * @since 1.21
	 *
	 * @param string $path
	 */
	public function setPagePath( $path ) {
		$this->setPath( self::PATH_PAGE, $path );
	}

	/**
	 * Sets the relative file path.
	 *
	 * @since 1.21
	 *
	 * @param string $path
	 */
	public function setFilePath( $path ) {
		$this->setPath( self::PATH_FILE, $path );
	}

	/**
	 * @see Site::getPagePath
	 *
	 * This implementation returns a URL constructed using the path returned by getLinkPath().
	 * In addition to the default behaviour implemented by SiteObject::getPageUrl(), this
	 * method converts the $pageName to DBKey-format by replacing spaces with underscores
	 * before using it in the URL.
	 *
	 * @since 1.21
	 *
	 * @param $pagename string: Page name (default: false)
	 *
	 * @return string
	 */
	public function getPageUrl( $pageName = false ) {
		$url = $this->getLinkPath();

		if ( $url === false ) {
			return false;
		}

		if ( $pageName !== false ) {
			$pageName = $this->toDBKey( trim( $pageName ) );
			$url = str_replace( '$1', wfUrlencode( $pageName ), $url ) ;
		}

		return $url;
	}

	/**
	 * Returns the full file path (ie site url + relative file path).
	 * The path should go at the $1 marker. If the $path
	 * argument is provided, the marker will be replaced by it's value.
	 *
	 * @since 1.21
	 *
	 * @param string|false $path
	 *
	 * @return string
	 */
	public function getFileUrl( $path = false ) {
		$filePath = $this->getPath( self::PATH_FILE );

		if ( $filePath !== false ) {
			$filePath = str_replace( '$1', $path, $filePath );
		}

		return $filePath;
	}

}
