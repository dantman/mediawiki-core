<?php
/**
 * Implements Special:Search
 *
 * Copyright © 2004 Brion Vibber <brion@pobox.com>
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
 * @ingroup SpecialPage
 */

/**
 * implements Special:Search - Run text & title search and display the output
 * @ingroup SpecialPage
 */
class SpecialSearch extends SpecialPage {
	/**
	 * Current search profile. Search profile is just a name that identifies
	 * the active search tab on the search page (content, help, discussions...)
	 * For users tt replaces the set of enabled namespaces from the query
	 * string when applicable. Extensions can add new profiles with hooks
	 * with custom search options just for that profile.
	 * null|string
	 */
	protected $profile;
	function getProfile() { return $this->profile; }

	/// Search engine
	protected $searchEngine;

	/// For links
	protected $extraParams = array();

	/// No idea, apparently used by some other classes
	protected $mPrefix;

	/**
	 * @var int
	 */
	protected $limit, $offset;

	/**
	 * @var array
	 */
	protected $namespaces;
	function getNamespaces() { return $this->namespaces; }

	/**
	 * @var bool
	 */
	protected $searchRedirects;

	/**
	 * @var string
	 */
	protected $didYouMeanHtml, $fulltext;

	const NAMESPACES_CURRENT = 'sense';

	public function __construct() {
		parent::__construct( 'Search' );
	}

	/**
	 * Entry point
	 *
	 * @param $par String or null
	 */
	public function execute( $par ) {
		$this->setHeaders();
		$this->outputHeader();
		$out = $this->getOutput();
		$out->allowClickjacking();
		$out->addModuleStyles( 'mediawiki.special' );

		// Strip underscores from title parameter; most of the time we'll want
		// text form here. But don't strip underscores from actual text params!
		$titleParam = str_replace( '_', ' ', $par );

		$request = $this->getRequest();

		// Fetch the search term
		$search = str_replace( "\n", " ", $request->getText( 'search', $titleParam ) );

		$this->load();

		if ( $request->getVal( 'fulltext' )
			|| !is_null( $request->getVal( 'offset' ) )
			|| !is_null( $request->getVal( 'searchx' ) ) )
		{
			$this->showResults( $search );
		} else {
			$this->goResult( $search );
		}
	}

	/**
	 * Set up basic search parameters from the request and user settings.
	 *
	 * @see tests/phpunit/includes/specials/SpecialSearchTest.php
	 */
	public function load() {
		$request = $this->getRequest();
		list( $this->limit, $this->offset ) = $request->getLimitOffset( 20, 'searchlimit' );
		$this->mPrefix = $request->getVal( 'prefix', '' );

		$user = $this->getUser();

		# Extract manually requested namespaces
		$nslist = $this->powerSearch( $request );
		if ( !count( $nslist ) ) {
			# Fallback to user preference
			$nslist = SearchEngine::userNamespaces( $user );
		}

		$profile = null;
		if ( !count( $nslist ) ) {
			$profile = 'default';
		}

		$profile = $request->getVal( 'profile', $profile );
		$profiles = $this->getSearchProfiles();
		if ( $profile === null ) {
			// BC with old request format
			$profile = 'advanced';
			foreach( $profiles as $key => $data ) {
				if ( $nslist === $data['namespaces'] && $key !== 'advanced') {
					$profile = $key;
				}
			}
			$this->namespaces = $nslist;
		} elseif ( $profile === 'advanced' ) {
			$this->namespaces = $nslist;
		} else {
			if ( isset( $profiles[$profile]['namespaces'] ) ) {
				$this->namespaces = $profiles[$profile]['namespaces'];
			} else {
				// Unknown profile requested
				$profile = 'default';
				$this->namespaces = $profiles['default']['namespaces'];
			}
		}

		// Redirects defaults to true, but we don't know whether it was ticked of or just missing
		$default = $request->getBool( 'profile' ) ? 0 : 1;
		$this->searchRedirects = $request->getBool( 'redirs', $default ) ? 1 : 0;
		$this->didYouMeanHtml = ''; # html of did you mean... link
		$this->fulltext = $request->getVal('fulltext');
		$this->profile = $profile;
	}

	/**
	 * If an exact title match can be found, jump straight ahead to it.
	 *
	 * @param $term String
	 */
	public function goResult( $term ) {
		$this->setupPage( $term );
		# Try to go to page as entered.
		$t = Title::newFromText( $term );
		# If the string cannot be used to create a title
		if( is_null( $t ) ) {
			$this->showResults( $term );
			return;
		}
		# If there's an exact or very near match, jump right there.
		$t = SearchEngine::getNearMatch( $term );

		if ( !wfRunHooks( 'SpecialSearchGo', array( &$t, &$term ) ) ) {
			# Hook requested termination
			return;
		}

		if( !is_null( $t ) ) {
			$this->getOutput()->redirect( $t->getFullURL() );
			return;
		}
		# No match, generate an edit URL
		$t = Title::newFromText( $term );
		if( !is_null( $t ) ) {
			global $wgGoToEdit;
			wfRunHooks( 'SpecialSearchNogomatch', array( &$t ) );
			wfDebugLog( 'nogomatch', $t->getText(), false );

			# If the feature is enabled, go straight to the edit page
			if( $wgGoToEdit ) {
				$this->getOutput()->redirect( $t->getFullURL( array( 'action' => 'edit' ) ) );
				return;
			}
		}
		$this->showResults( $term );
	}

	/**
	 * @param $term String
	 */
	public function showResults( $term ) {
		global $wgDisableTextSearch, $wgSearchForwardUrl, $wgContLang, $wgScript;
		wfProfileIn( __METHOD__ );

		$search = $this->getSearchEngine();
		$search->setLimitOffset( $this->limit, $this->offset );
		$search->setNamespaces( $this->namespaces );
		$search->showRedirects = $this->searchRedirects; // BC
		$search->setFeatureData( 'list-redirects', $this->searchRedirects );
		$search->prefix = $this->mPrefix;
		$term = $search->transformSearchTerm($term);

		wfRunHooks( 'SpecialSearchSetupEngine', array( $this, $this->profile, $search ) );

		$this->setupPage( $term );

		$out = $this->getOutput();

		if ( $wgDisableTextSearch ) {
			if ( $wgSearchForwardUrl ) {
				$url = str_replace( '$1', urlencode( $term ), $wgSearchForwardUrl );
				$out->redirect( $url );
			} else {
				$out->addHTML(
					Xml::openElement( 'fieldset' ) .
					Xml::element( 'legend', null, $this->msg( 'search-external' )->text() ) .
					Xml::element( 'p', array( 'class' => 'mw-searchdisabled' ), $this->msg( 'searchdisabled' )->text() ) .
					$this->msg( 'googlesearch' )->rawParams(
						htmlspecialchars( $term ),
						'UTF-8',
						$this->msg( 'searchbutton' )->escaped()
					)->text() .
					Xml::closeElement( 'fieldset' )
				);
			}
			wfProfileOut( __METHOD__ );
			return;
		}

		$t = Title::newFromText( $term );

		// fetch search results
		$rewritten = $search->replacePrefixes($term);

		$titleMatches = $search->searchTitle( $rewritten );
		if( !( $titleMatches instanceof SearchResultTooMany ) ) {
			$textMatches = $search->searchText( $rewritten );
		}

		// did you mean... suggestions
		if( $textMatches && $textMatches->hasSuggestion() ) {
			$st = SpecialPage::getTitleFor( 'Search' );

			# mirror Go/Search behaviour of original request ..
			$didYouMeanParams = array( 'search' => $textMatches->getSuggestionQuery() );

			if( $this->fulltext != null ) {
				$didYouMeanParams['fulltext'] = $this->fulltext;
			}

			$stParams = array_merge(
				$didYouMeanParams,
				$this->powerSearchOptions()
			);

			$suggestionSnippet = $textMatches->getSuggestionSnippet();

			if( $suggestionSnippet == '' ) {
				$suggestionSnippet = null;
			}

			$suggestLink = Linker::linkKnown(
				$st,
				$suggestionSnippet,
				array(),
				$stParams
			);

			$this->didYouMeanHtml = '<div class="searchdidyoumean">' . $this->msg( 'search-suggest' )->rawParams( $suggestLink )->text() . '</div>';
		}
		// start rendering the page
		$out->addHtml(
			Xml::openElement(
				'form',
				array(
					'id' => ( $this->profile === 'advanced' ? 'powersearch' : 'search' ),
					'method' => 'get',
					'action' => $wgScript
				)
			)
		);
		$out->addHtml(
			Xml::openElement( 'table', array( 'id' => 'mw-search-top-table', 'cellpadding' => 0, 'cellspacing' => 0 ) ) .
			Xml::openElement( 'tr' ) .
			Xml::openElement( 'td' ) . "\n" .
			$this->shortDialog( $term ) .
			Xml::closeElement('td') .
			Xml::closeElement('tr') .
			Xml::closeElement('table')
		);

		// Sometimes the search engine knows there are too many hits
		if( $titleMatches instanceof SearchResultTooMany ) {
			$out->wrapWikiMsg( "==$1==\n", 'toomanymatches' );
			wfProfileOut( __METHOD__ );
			return;
		}

		$filePrefix = $wgContLang->getFormattedNsText(NS_FILE).':';
		if( trim( $term ) === '' || $filePrefix === trim( $term ) ) {
			$out->addHTML( $this->formHeader( $term, 0, 0 ) );
			$out->addHtml( $this->getProfileForm( $this->profile, $term ) );
			$out->addHTML( '</form>' );
			// Empty query -- straight view of search form
			wfProfileOut( __METHOD__ );
			return;
		}

		// Get number of results
		$titleMatchesNum = $titleMatches ? $titleMatches->numRows() : 0;
		$textMatchesNum = $textMatches ? $textMatches->numRows() : 0;
		// Total initial query matches (possible false positives)
		$num = $titleMatchesNum + $textMatchesNum;

		// Get total actual results (after second filtering, if any)
		$numTitleMatches = $titleMatches && !is_null( $titleMatches->getTotalHits() ) ?
			$titleMatches->getTotalHits() : $titleMatchesNum;
		$numTextMatches = $textMatches && !is_null( $textMatches->getTotalHits() ) ?
			$textMatches->getTotalHits() : $textMatchesNum;

		// get total number of results if backend can calculate it
		$totalRes = 0;
		if($titleMatches && !is_null( $titleMatches->getTotalHits() ) )
			$totalRes += $titleMatches->getTotalHits();
		if($textMatches && !is_null( $textMatches->getTotalHits() ))
			$totalRes += $textMatches->getTotalHits();

		// show number of results and current offset
		$out->addHTML( $this->formHeader( $term, $num, $totalRes ) );
		$out->addHtml( $this->getProfileForm( $this->profile, $term ) );


		$out->addHtml( Xml::closeElement( 'form' ) );
		$out->addHtml( "<div class='searchresults'>" );

		// prev/next links
		if( $num || $this->offset ) {
			// Show the create link ahead
			$this->showCreateLink( $t );
			$prevnext = $this->getLanguage()->viewPrevNext( $this->getTitle(), $this->offset, $this->limit,
				$this->powerSearchOptions() + array( 'search' => $term ),
				max( $titleMatchesNum, $textMatchesNum ) < $this->limit
			);
			//$out->addHTML( "<p class='mw-search-pager-top'>{$prevnext}</p>\n" );
			wfRunHooks( 'SpecialSearchResults', array( $term, &$titleMatches, &$textMatches ) );
		} else {
			wfRunHooks( 'SpecialSearchNoResults', array( $term ) );
		}

		$out->parserOptions()->setEditSection( false );
		if( $titleMatches ) {
			if( $numTitleMatches > 0 ) {
				$out->wrapWikiMsg( "==$1==\n", 'titlematches' );
				$out->addHTML( $this->showMatches( $titleMatches ) );
			}
			$titleMatches->free();
		}
		if( $textMatches ) {
			// output appropriate heading
			if( $numTextMatches > 0 && $numTitleMatches > 0 ) {
				// if no title matches the heading is redundant
				$out->wrapWikiMsg( "==$1==\n", 'textmatches' );
			} elseif( $totalRes == 0 ) {
				# Don't show the 'no text matches' if we received title matches
				# $out->wrapWikiMsg( "==$1==\n", 'notextmatches' );
			}
			// show interwiki results if any
			if( $textMatches->hasInterwikiResults() ) {
				$out->addHTML( $this->showInterwiki( $textMatches->getInterwikiResults(), $term ) );
			}
			// show results
			if( $numTextMatches > 0 ) {
				$out->addHTML( $this->showMatches( $textMatches ) );
			}

			$textMatches->free();
		}
		if( $num === 0 ) {
			$out->wrapWikiMsg( "<p class=\"mw-search-nonefound\">\n$1</p>", array( 'search-nonefound', wfEscapeWikiText( $term ) ) );
			$this->showCreateLink( $t );
		}
		$out->addHtml( "</div>" );

		if( $num || $this->offset ) {
			$out->addHTML( "<p class='mw-search-pager-bottom'>{$prevnext}</p>\n" );
		}
		wfProfileOut( __METHOD__ );
	}

	/**
	 * @param $t Title
	 */
	protected function showCreateLink( $t ) {
		// show direct page/create link if applicable

		// Check DBkey !== '' in case of fragment link only.
		if( is_null( $t ) || $t->getDBkey() === '' ) {
			// invalid title
			// preserve the paragraph for margins etc...
			$this->getOutput()->addHtml( '<p></p>' );
			return;
		}

		if( $t->isKnown() ) {
			$messageName = 'searchmenu-exists';
		} elseif( $t->userCan( 'create', $this->getUser() ) ) {
			$messageName = 'searchmenu-new';
		} else {
			$messageName = 'searchmenu-new-nocreate';
		}
		$params = array( $messageName, wfEscapeWikiText( $t->getPrefixedText() ) );
		wfRunHooks( 'SpecialSearchCreateLink', array( $t, &$params ) );

		// Extensions using the hook might still return an empty $messageName
		if( $messageName ) {
			$this->getOutput()->wrapWikiMsg( "<p class=\"mw-search-createlink\">\n$1</p>", $params );
		} else {
			// preserve the paragraph for margins etc...
			$this->getOutput()->addHtml( '<p></p>' );
		}
	}

	/**
	 * @param $term string
	 */
	protected function setupPage( $term ) {
		# Should advanced UI be used?
		$this->searchAdvanced = ($this->profile === 'advanced');
		$out = $this->getOutput();
		if( strval( $term ) !== ''  ) {
			$out->setPageTitle( $this->msg( 'searchresults' ) );
			$out->setHTMLTitle( $this->msg( 'pagetitle' )->rawParams(
				$this->msg( 'searchresults-title' )->rawParams( $term )->text()
			) );
		}
		// add javascript specific to special:search
		$out->addModules( 'mediawiki.special.search' );
	}

	/**
	 * Extract "power search" namespace settings from the request object,
	 * returning a list of index numbers to search.
	 *
	 * @param $request WebRequest
	 * @return Array
	 */
	protected function powerSearch( &$request ) {
		$arr = array();
		foreach( SearchEngine::searchableNamespaces() as $ns => $name ) {
			if( $request->getCheck( 'ns' . $ns ) ) {
				$arr[] = $ns;
			}
		}

		return $arr;
	}

	/**
	 * Reconstruct the 'power search' options for links
	 *
	 * @return Array
	 */
	protected function powerSearchOptions() {
		$opt = array();
		$opt['redirs'] = $this->searchRedirects ? 1 : 0;
		if( $this->profile !== 'advanced' ) {
			$opt['profile'] = $this->profile;
		} else {
			foreach( $this->namespaces as $n ) {
				$opt['ns' . $n] = 1;
			}
		}
		return $opt + $this->extraParams;
	}

	/**
	 * Show whole set of results
	 *
	 * @param $matches SearchResultSet
	 *
	 * @return string
	 */
	protected function showMatches( &$matches ) {
		global $wgContLang;
		wfProfileIn( __METHOD__ );

		$terms = $wgContLang->convertForSearchResult( $matches->termMatches() );

		$out = "";
		$infoLine = $matches->getInfo();
		if( !is_null($infoLine) ) {
			$out .= "\n<!-- {$infoLine} -->\n";
		}
		$out .= "<ul class='mw-search-results'>\n";
		$result = $matches->next();
		while( $result ) {
			$out .= $this->showHit( $result, $terms );
			$result = $matches->next();
		}
		$out .= "</ul>\n";

		// convert the whole thing to desired language variant
		$out = $wgContLang->convert( $out );
		wfProfileOut( __METHOD__ );
		return $out;
	}

	/**
	 * Format a single hit result
	 *
	 * @param $result SearchResult
	 * @param $terms Array: terms to highlight
	 *
	 * @return string
	 */
	protected function showHit( $result, $terms ) {
		wfProfileIn( __METHOD__ );

		if( $result->isBrokenTitle() ) {
			wfProfileOut( __METHOD__ );
			return "<!-- Broken link in search result -->\n";
		}

		$t = $result->getTitle();

		$titleSnippet = $result->getTitleSnippet($terms);

		if( $titleSnippet == '' )
			$titleSnippet = null;

		$link_t = clone $t;

		wfRunHooks( 'ShowSearchHitTitle',
					array( &$link_t, &$titleSnippet, $result, $terms, $this ) );

		$link = Linker::linkKnown(
			$link_t,
			$titleSnippet
		);

		//If page content is not readable, just return the title.
		//This is not quite safe, but better than showing excerpts from non-readable pages
		//Note that hiding the entry entirely would screw up paging.
		if( !$t->userCan( 'read', $this->getUser() ) ) {
			wfProfileOut( __METHOD__ );
			return "<li>{$link}</li>\n";
		}

		// If the page doesn't *exist*... our search index is out of date.
		// The least confusing at this point is to drop the result.
		// You may get less results, but... oh well. :P
		if( $result->isMissingRevision() ) {
			wfProfileOut( __METHOD__ );
			return "<!-- missing page " . htmlspecialchars( $t->getPrefixedText() ) . "-->\n";
		}

		// format redirects / relevant sections
		$redirectTitle = $result->getRedirectTitle();
		$redirectText = $result->getRedirectSnippet($terms);
		$sectionTitle = $result->getSectionTitle();
		$sectionText = $result->getSectionSnippet($terms);
		$redirect = '';

		if( !is_null($redirectTitle) ) {
			if( $redirectText == '' )
				$redirectText = null;

			$redirect = "<span class='searchalttitle'>" .
				$this->msg( 'search-redirect' )->rawParams(
					Linker::linkKnown( $redirectTitle, $redirectText ) )->text() .
				"</span>";
		}

		$section = '';

		if( !is_null($sectionTitle) ) {
			if( $sectionText == '' )
				$sectionText = null;

			$section = "<span class='searchalttitle'>" .
				$this->msg( 'search-section' )->rawParams(
					Linker::linkKnown( $sectionTitle, $sectionText ) )->text() .
				"</span>";
		}

		// format text extract
		$extract = "<div class='searchresult'>".$result->getTextSnippet($terms)."</div>";

		$lang = $this->getLanguage();

		// format score
		if( is_null( $result->getScore() ) ) {
			// Search engine doesn't report scoring info
			$score = '';
		} else {
			$percent = sprintf( '%2.1f', $result->getScore() * 100 );
			$score = $this->msg( 'search-result-score' )->numParams( $percent )->text()
				. ' - ';
		}

		// format description
		$byteSize = $result->getByteSize();
		$wordCount = $result->getWordCount();
		$timestamp = $result->getTimestamp();
		$size = $this->msg( 'search-result-size', $lang->formatSize( $byteSize ) )
			->numParams( $wordCount )->escaped();

		if( $t->getNamespace() == NS_CATEGORY ) {
			$cat = Category::newFromTitle( $t );
			$size = $this->msg( 'search-result-category-size' )
				->numParams( $cat->getPageCount(), $cat->getSubcatCount(), $cat->getFileCount() )
				->escaped();
		}

		$date = $lang->userTimeAndDate( $timestamp, $this->getUser() );

		// link to related articles if supported
		$related = '';
		if( $result->hasRelated() ) {
			$st = SpecialPage::getTitleFor( 'Search' );
			$stParams = array_merge(
				$this->powerSearchOptions(),
				array(
					'search' => $this->msg( 'searchrelated' )->inContentLanguage()->text() .
						':' . $t->getPrefixedText(),
					'fulltext' => $this->msg( 'search' )->text()
				)
			);

			$related = ' -- ' . Linker::linkKnown(
				$st,
				$this->msg( 'search-relatedarticle' )->text(),
				array(),
				$stParams
			);
		}

		// Include a thumbnail for media files...
		if( $t->getNamespace() == NS_FILE ) {
			$img = wfFindFile( $t );
			if( $img ) {
				$thumb = $img->transform( array( 'width' => 120, 'height' => 120 ) );
				if( $thumb ) {
					$desc = $this->msg( 'parentheses' )->rawParams( $img->getShortDesc() )->escaped();
					wfProfileOut( __METHOD__ );
					// Float doesn't seem to interact well with the bullets.
					// Table messes up vertical alignment of the bullets.
					// Bullets are therefore disabled (didn't look great anyway).
					return "<li>" .
						'<table class="searchResultImage">' .
						'<tr>' .
						'<td style="width: 120px; text-align: center; vertical-align: top;">' .
						$thumb->toHtml( array( 'desc-link' => true ) ) .
						'</td>' .
						'<td style="vertical-align: top;">' .
						$link .
						$extract .
						"<div class='mw-search-result-data'>{$score}{$desc} - {$date}{$related}</div>" .
						'</td>' .
						'</tr>' .
						'</table>' .
						"</li>\n";
				}
			}
		}

		wfProfileOut( __METHOD__ );
		return "<li><div class='mw-search-result-heading'>{$link} {$redirect} {$section}</div> {$extract}\n" .
			"<div class='mw-search-result-data'>{$score}{$size} - {$date}{$related}</div>" .
			"</li>\n";

	}

	/**
	 * Show results from other wikis
	 *
	 * @param $matches SearchResultSet
	 * @param $query String
	 *
	 * @return string
	 */
	protected function showInterwiki( &$matches, $query ) {
		global $wgContLang;
		wfProfileIn( __METHOD__ );
		$terms = $wgContLang->convertForSearchResult( $matches->termMatches() );

		$out = "<div id='mw-search-interwiki'><div id='mw-search-interwiki-caption'>".
			$this->msg( 'search-interwiki-caption' )->text()  . "</div>\n";
		$out .= "<ul class='mw-search-iwresults'>\n";

		// work out custom project captions
		$customCaptions = array();
		$customLines = explode( "\n", $this->msg( 'search-interwiki-custom' )->text() ); // format per line <iwprefix>:<caption>
		foreach($customLines as $line) {
			$parts = explode(":",$line,2);
			if(count($parts) == 2) // validate line
				$customCaptions[$parts[0]] = $parts[1];
		}

		$prev = null;
		$result = $matches->next();
		while( $result ) {
			$out .= $this->showInterwikiHit( $result, $prev, $terms, $query, $customCaptions );
			$prev = $result->getInterwikiPrefix();
			$result = $matches->next();
		}
		// TODO: should support paging in a non-confusing way (not sure how though, maybe via ajax)..
		$out .= "</ul></div>\n";

		// convert the whole thing to desired language variant
		$out = $wgContLang->convert( $out );
		wfProfileOut( __METHOD__ );
		return $out;
	}

	/**
	 * Show single interwiki link
	 *
	 * @param $result SearchResult
	 * @param $lastInterwiki String
	 * @param $terms Array
	 * @param $query String
	 * @param $customCaptions Array: iw prefix -> caption
	 *
	 * @return string
	 */
	protected function showInterwikiHit( $result, $lastInterwiki, $terms, $query, $customCaptions) {
		wfProfileIn( __METHOD__ );

		if( $result->isBrokenTitle() ) {
			wfProfileOut( __METHOD__ );
			return "<!-- Broken link in search result -->\n";
		}

		$t = $result->getTitle();

		$titleSnippet = $result->getTitleSnippet($terms);

		if( $titleSnippet == '' )
			$titleSnippet = null;

		$link = Linker::linkKnown(
			$t,
			$titleSnippet
		);

		// format redirect if any
		$redirectTitle = $result->getRedirectTitle();
		$redirectText = $result->getRedirectSnippet($terms);
		$redirect = '';
		if( !is_null($redirectTitle) ) {
			if( $redirectText == '' )
				$redirectText = null;

			$redirect = "<span class='searchalttitle'>" .
				$this->msg( 'search-redirect' )->rawParams(
					Linker::linkKnown( $redirectTitle, $redirectText ) )->text() .
				"</span>";
		}

		$out = "";
		// display project name
		if(is_null($lastInterwiki) || $lastInterwiki != $t->getInterwiki()) {
			if( array_key_exists($t->getInterwiki(),$customCaptions) ) {
				// captions from 'search-interwiki-custom'
				$caption = $customCaptions[$t->getInterwiki()];
			} else {
				// default is to show the hostname of the other wiki which might suck
				// if there are many wikis on one hostname
				$parsed = wfParseUrl( $t->getFullURL() );
				$caption = $this->msg( 'search-interwiki-default', $parsed['host'] )->text();
			}
			// "more results" link (special page stuff could be localized, but we might not know target lang)
			$searchTitle = Title::newFromText($t->getInterwiki().":Special:Search");
			$searchLink = Linker::linkKnown(
				$searchTitle,
				$this->msg( 'search-interwiki-more' )->text(),
				array(),
				array(
					'search' => $query,
					'fulltext' => 'Search'
				)
			);
			$out .= "</ul><div class='mw-search-interwiki-project'><span class='mw-search-interwiki-more'>
				{$searchLink}</span>{$caption}</div>\n<ul>";
		}

		$out .= "<li>{$link} {$redirect}</li>\n";
		wfProfileOut( __METHOD__ );
		return $out;
	}

	/**
	 * @param $profile
	 * @param $term
	 * @return String
	 */
	protected function getProfileForm( $profile, $term ) {
		// Hidden stuff
		$opts = array();
		$opts['redirs'] = $this->searchRedirects;
		$opts['profile'] = $this->profile;

		if ( $profile === 'advanced' ) {
			return $this->powerSearchBox( $term, $opts );
		} else {
			$form = '';
			wfRunHooks( 'SpecialSearchProfileForm', array( $this, &$form, $profile, $term, $opts ) );
			return $form;
		}
	}

	/**
	 * Generates the power search box at [[Special:Search]]
	 *
	 * @param $term String: search term
	 * @param $opts array
	 * @return String: HTML form
	 */
	protected function powerSearchBox( $term, $opts ) {
		// Groups namespaces into rows according to subject
		$rows = array();
		foreach( SearchEngine::searchableNamespaces() as $namespace => $name ) {
			$subject = MWNamespace::getSubject( $namespace );
			if( !array_key_exists( $subject, $rows ) ) {
				$rows[$subject] = "";
			}
			$name = str_replace( '_', ' ', $name );
			if( $name == '' ) {
				$name = $this->msg( 'blanknamespace' )->text();
			}
			$rows[$subject] .=
				Xml::openElement(
					'td', array( 'style' => 'white-space: nowrap' )
				) .
				Xml::checkLabel(
					$name,
					"ns{$namespace}",
					"mw-search-ns{$namespace}",
					in_array( $namespace, $this->namespaces )
				) .
				Xml::closeElement( 'td' );
		}
		$rows = array_values( $rows );
		$numRows = count( $rows );

		// Lays out namespaces in multiple floating two-column tables so they'll
		// be arranged nicely while still accommodating different screen widths
		$namespaceTables = '';
		for( $i = 0; $i < $numRows; $i += 4 ) {
			$namespaceTables .= Xml::openElement(
				'table',
				array( 'cellpadding' => 0, 'cellspacing' => 0 )
			);
			for( $j = $i; $j < $i + 4 && $j < $numRows; $j++ ) {
				$namespaceTables .= Xml::tags( 'tr', null, $rows[$j] );
			}
			$namespaceTables .= Xml::closeElement( 'table' );
		}

		$showSections = array( 'namespaceTables' => $namespaceTables );

		// Show redirects check only if backend supports it
		if( $this->getSearchEngine()->supports( 'list-redirects' ) ) {
			$showSections['redirects'] =
				Xml::checkLabel( $this->msg( 'powersearch-redir' )->text(), 'redirs', 'redirs', $this->searchRedirects );
		}

		wfRunHooks( 'SpecialSearchPowerBox', array( &$showSections, $term, $opts ) );

		$hidden = '';
		unset( $opts['redirs'] );
		foreach( $opts as $key => $value ) {
			$hidden .= Html::hidden( $key, $value );
		}
		// Return final output
		return
			Xml::openElement(
				'fieldset',
				array( 'id' => 'mw-searchoptions', 'style' => 'margin:0em;' )
			) .
			Xml::element( 'legend', null, $this->msg('powersearch-legend' )->text() ) .
			Xml::tags( 'h4', null, $this->msg( 'powersearch-ns' )->parse() ) .
			Html::element( 'div', array( 'id' => 'mw-search-togglebox' ) ) .
			Xml::element( 'div', array( 'class' => 'divider' ), '', false ) .
			implode( Xml::element( 'div', array( 'class' => 'divider' ), '', false ), $showSections ) .
			$hidden .
			Xml::closeElement( 'fieldset' );
	}

	/**
	 * @return array
	 */
	protected function getSearchProfiles() {
		// Builds list of Search Types (profiles)
		$nsAllSet = array_keys( SearchEngine::searchableNamespaces() );

		$profiles = array(
			'default' => array(
				'message' => 'searchprofile-articles',
				'tooltip' => 'searchprofile-articles-tooltip',
				'namespaces' => SearchEngine::defaultNamespaces(),
				'namespace-messages' => SearchEngine::namespacesAsText(
					SearchEngine::defaultNamespaces()
				),
			),
			'images' => array(
				'message' => 'searchprofile-images',
				'tooltip' => 'searchprofile-images-tooltip',
				'namespaces' => array( NS_FILE ),
			),
			'help' => array(
				'message' => 'searchprofile-project',
				'tooltip' => 'searchprofile-project-tooltip',
				'namespaces' => SearchEngine::helpNamespaces(),
				'namespace-messages' => SearchEngine::namespacesAsText(
					SearchEngine::helpNamespaces()
				),
			),
			'all' => array(
				'message' => 'searchprofile-everything',
				'tooltip' => 'searchprofile-everything-tooltip',
				'namespaces' => $nsAllSet,
			),
			'advanced' => array(
				'message' => 'searchprofile-advanced',
				'tooltip' => 'searchprofile-advanced-tooltip',
				'namespaces' => self::NAMESPACES_CURRENT,
			)
		);

		wfRunHooks( 'SpecialSearchProfiles', array( &$profiles ) );

		foreach( $profiles as &$data ) {
			if ( !is_array( $data['namespaces'] ) ) continue;
			sort( $data['namespaces'] );
		}

		return $profiles;
	}

	/**
	 * @param $term
	 * @param $resultsShown
	 * @param $totalNum
	 * @return string
	 */
	protected function formHeader( $term, $resultsShown, $totalNum ) {
		$out = Xml::openElement('div', array( 'class' =>  'mw-search-formheader' ) );

		$bareterm = $term;
		if( $this->startsWithImage( $term ) ) {
			// Deletes prefixes
			$bareterm = substr( $term, strpos( $term, ':' ) + 1 );
		}

		$profiles = $this->getSearchProfiles();
		$lang = $this->getLanguage();

		// Outputs XML for Search Types
		$out .= Xml::openElement( 'div', array( 'class' => 'search-types' ) );
		$out .= Xml::openElement( 'ul' );
		foreach ( $profiles as $id => $profile ) {
			if ( !isset( $profile['parameters'] ) ) {
				$profile['parameters'] = array();
			}
			$profile['parameters']['profile'] = $id;

			$tooltipParam = isset( $profile['namespace-messages'] ) ?
				$lang->commaList( $profile['namespace-messages'] ) : null;
			$out .= Xml::tags(
				'li',
				array(
					'class' => $this->profile === $id ? 'current' : 'normal'
				),
				$this->makeSearchLink(
					$bareterm,
					array(),
					$this->msg( $profile['message'] )->text(),
					$this->msg( $profile['tooltip'], $tooltipParam )->text(),
					$profile['parameters']
				)
			);
		}
		$out .= Xml::closeElement( 'ul' );
		$out .= Xml::closeElement('div') ;

		// Results-info
		if ( $resultsShown > 0 ) {
			if ( $totalNum > 0 ){
				$top = $this->msg( 'showingresultsheader' )
					->numParams( $this->offset + 1, $this->offset + $resultsShown, $totalNum )
					->params( wfEscapeWikiText( $term ) )
					->numParams( $resultsShown )
					->parse();
			} elseif ( $resultsShown >= $this->limit ) {
				$top = $this->msg( 'showingresults' )
					->numParams( $this->limit, $this->offset + 1 )
					->parse();
			} else {
				$top = $this->msg( 'showingresultsnum' )
					->numParams( $this->limit, $this->offset + 1, $resultsShown )
					->parse();
			}
			$out .= Xml::tags( 'div', array( 'class' => 'results-info' ),
				Xml::tags( 'ul', null, Xml::tags( 'li', null, $top ) )
			);
		}

		$out .= Xml::element( 'div', array( 'style' => 'clear:both' ), '', false );
		$out .= Xml::closeElement('div');

		return $out;
	}

	/**
	 * @param $term string
	 * @return string
	 */
	protected function shortDialog( $term ) {
		$out = Html::hidden( 'title', $this->getTitle()->getPrefixedText() );
		$out .= Html::hidden( 'profile', $this->profile ) . "\n";
		// Term box
		$out .= Html::input( 'search', $term, 'search', array(
			'id' => $this->profile === 'advanced' ? 'powerSearchText' : 'searchText',
			'size' => '50',
			'autofocus'
		) ) . "\n";
		$out .= Html::hidden( 'fulltext', 'Search' ) . "\n";
		$out .= Xml::submitButton( $this->msg( 'searchbutton' )->text() ) . "\n";
		return $out . $this->didYouMeanHtml;
	}

	/**
	 * Make a search link with some target namespaces
	 *
	 * @param $term String
	 * @param $namespaces Array ignored
	 * @param $label String: link's text
	 * @param $tooltip String: link's tooltip
	 * @param $params Array: query string parameters
	 * @return String: HTML fragment
	 */
	protected function makeSearchLink( $term, $namespaces, $label, $tooltip, $params = array() ) {
		$opt = $params;
		foreach( $namespaces as $n ) {
			$opt['ns' . $n] = 1;
		}
		$opt['redirs'] = $this->searchRedirects;

		$stParams = array_merge(
			array(
				'search' => $term,
				'fulltext' => $this->msg( 'search' )->text()
			),
			$opt
		);

		return Xml::element(
			'a',
			array(
				'href' => $this->getTitle()->getLocalURL( $stParams ),
				'title' => $tooltip),
			$label
		);
	}

	/**
	 * Check if query starts with image: prefix
	 *
	 * @param $term String: the string to check
	 * @return Boolean
	 */
	protected function startsWithImage( $term ) {
		global $wgContLang;

		$p = explode( ':', $term );
		if( count( $p ) > 1 ) {
			return $wgContLang->getNsIndex( $p[0] ) == NS_FILE;
		}
		return false;
	}

	/**
	 * Check if query starts with all: prefix
	 *
	 * @param $term String: the string to check
	 * @return Boolean
	 */
	protected function startsWithAll( $term ) {

		$allkeyword = $this->msg( 'searchall' )->inContentLanguage()->text();

		$p = explode( ':', $term );
		if( count( $p ) > 1 ) {
			return $p[0]  == $allkeyword;
		}
		return false;
	}

	/**
	 * @since 1.18
	 *
	 * @return SearchEngine
	 */
	public function getSearchEngine() {
		if ( $this->searchEngine === null ) {
			$this->searchEngine = SearchEngine::create();
		}
		return $this->searchEngine;
	}

	/**
	 * Users of hook SpecialSearchSetupEngine can use this to
	 * add more params to links to not lose selection when
	 * user navigates search results.
	 * @since 1.18
	 *
	 * @param $key
	 * @param $value
	 */
	public function setExtraParam( $key, $value ) {
		$this->extraParams[$key] = $value;
	}

}
