<?php
/**
 * Skin class implementing our template based skin system
 *
 * @file
 */
use MWSkinTemplateTypes as TT;

class MWSkin extends Skin {

	public function __construct( $skinname ) {
		$this->skinname = $skinname;
		$this->stylename = $skinname; // @fixme May need separate stylename for subskins?
		$this->metadata = MWSkinMetadata::newFromFile( "{$GLOBALS['IP']}/skins/{$this->skinname}/{$this->skinname}.xml" );
	}

	public function getMetadata() {
		return $this->metadata; 
	}

	protected function execute() {
		wfProfileIn( __METHOD__ );

		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();
		$title = $this->getTitle();

		$bodyTextBlock = new MWRegionBlock( 'bodytext' );
		
		# An ID that includes the actual body text; without categories, contentSub, ...
		$realBodyAttribs = array( 'id' => 'mw-content-text' );

		# Add a mw-content-ltr/rtl class to be able to style based on text direction
		# when the content is different from the UI language, i.e.:
		# not for special pages or file pages AND only when viewing AND if the page exists
		# (or is in MW namespace, because that has default content)
		if ( !in_array( $title->getNamespace(), array( NS_SPECIAL, NS_FILE ) ) &&
			in_array( $request->getVal( 'action', 'view' ), array( 'view', 'historysubmit' ) ) &&
			( $title->exists() || $title->getNamespace() == NS_MEDIAWIKI ) ) {
			$pageLang = $title->getPageLanguage();
			$realBodyAttribs['lang'] = $pageLang->getHtmlCode();
			$realBodyAttribs['dir'] = $pageLang->getDir();
			$realBodyAttribs['class'] = 'mw-content-'.$pageLang->getDir();
		}
		$bodyTextBlock->addHTML(
			Html::rawElement( 'div', $realBodyAttribs, $out->mBodytext ) .
			Html::rawElement( 'div', array( 'class' => 'printfooter' ), "\n" . $this->printSource() ) . "\n" .
			$this->generateDebugHTML()
		);
		$out->getRegions()->addRegion( $bodyTextBlock );

		if ( true ) {
			// @todo This should be a conditional that checks if we use a 'categories' variable somewhere in the
			// template. If we don't then this will run, but if we do we will leave this out
			$catlinksBlock = new MWRegionBlock( 'catlinks' );
			$catlinksBlock->addHTML( $this->getCategories() );
			$out->getRegions()->addRegion( $catlinksBlock );
		}

		if ( $afterContent = $this->afterContentHook() ) {
			$afterContentBlock = new MWRegionBlock( 'legacy-aftercontent' );
			$afterContentBlock->addHTML( $afterContent );
			$out->getRegions()->addRegion( $afterContentBlock );
		}
		
		$tpl = $this->metadata->getTemplate();
		if ( !$tpl ) {
			throw new Exception( "Template does not exist." );
		}

		$skinRegions = $tpl->getRegions();
		$blocks = $out->getRegions();
		$blocks->fillRegions( $skinRegions, $tpl );

		$context = new MWTemplateContext;
		$context->extendContext( new MWSkinTemplateContext( $this, $skinRegions ) );

		echo $out->headElement( $this );

		$tpl->outputBody( $context );

		echo "</body>\n</html>";

		wfProfileOut( __METHOD__ );
	}

	public function getLinkStructure() {
		// XXX: I wonder if this is the kind of thing we could split out into a separate interface
		$links = $this->getMetadata()->getLinksDefinition();

		$this->setupUserLinks( $links );
		$this->setupPageLinks( $links );
		$this->setupRelatedLinks( $links );
		$this->setupGlobalLinks( $links );
	}

	protected function setupUserLinks( $links ) {
		global $wgUseCombinedLoginLink;
		/**
		 * user.** links
		 */
		$request = $this->getRequest();
		$user = $this->getUser();
		$title = $this->getTitle();
		$pageurl = $title->getLocalURL();

		$query = array();
		if ( !$request->wasPosted() ) {
			$query = $request->getValues();
			unset( $query['title'] );
			unset( $query['returnto'] );
			unset( $query['returntoquery'] );
		}
		$query = wfArrayToCGI( $query );

		# Due to bug 32276, if a user does not have read permissions,
		# $this->getTitle() will just give Special:Badtitle, which is
		# not especially useful as a returnto parameter. Use the title
		# from the request instead, if there was one.
		$page = Title::newFromURL( $request->getVal( 'title', '' ) );
		$page = $request->getVal( 'returnto', $page );
		$a = array();
		if ( strval( $page ) !== '' ) {
			$a['returnto'] = $page;
			$query = $request->getVal( 'returntoquery', $query );
			if( $query != '' ) {
				$a['returntoquery'] = $query;
			}
		}
		$returnto = wfArrayToCGI( $a );

		$username = $user->getName();

		$userpage = $user->getUserPage();
		$userpageUrlDetails = array(
			'href' => $userpage->getLocalURL(),
			'exists' => $user->isLoggedIn() || $this->showIPinHeader()
				? $userpage->getArticleID() != 0
				: true
		);
		$usertalk = $user->getTalkPage();
		$usertalkUrlDetails = array(
			'href' => $usertalk->getLocalURL(),
			'exists' => $usertalk->getArticleID() != 0
		);

		if ( $user->isLoggedIn() ) {
			$links->addLink( 'user.links.userpage', array(
				'text' => $user->getName(),
				'href' => &$userpageUrlDetails['href'],
				'exists' => $userpageUrlDetails['exists'],
				'active' => ( $userpageUrlDetails['href'] == $pageurl )
			) );

			$links->addLink( 'user.links.talk', array(
				'text' => $this->msg( 'mytalk' ),
				'href' => &$usertalkUrlDetails['href'],
				'exists' => $usertalkUrlDetails['exists'],
				'active' => ( $usertalkUrlDetails['href'] == $pageurl )
			) );
			$href = self::makeSpecialUrl( 'Preferences' );
			$links->addLink( 'user.tools.preferences', array(
				'text' => $this->msg( 'mypreferences' ),
				'href' => $href,
				'active' => ( $href == $pageurl )
			) );
			$href = self::makeSpecialUrl( 'Watchlist' );
			$links->addLink( 'user.tools.watchlist', array(
				'text' => $this->msg( 'mywatchlist' ),
				'href' => $href,
				'active' => ( $href == $pageurl )
			) );

			# We need to do an explicit check for Special:Contributions, as we
			# have to match both the title, and the target (which could come
			# from request values or be specified in "sub page" form. The plot
			# thickens, because the Title object is altered for special pages,
			# so doesn't contain the original alias-with-subpage.
			$origTitle = Title::newFromText( $request->getText( 'title' ) );
			if ( $origTitle instanceof Title && $origTitle->isSpecialPage() ) {
				list( $spName, $spPar ) = SpecialPageFactory::resolveAlias( $origTitle->getText() );
				$active = $spName == 'Contributions'
					&& ( ( $spPar && $spPar == $username )
						|| $request->getText( 'target' ) == $username );
			} else {
				$active = false;
			}

			$href = self::makeSpecialUrlSubpage( 'Contributions', $username );
			$links->addLink( 'user.tools.contribs', array(
				'text' => $this->msg( 'mycontris' ),
				'href' => $href,
				'active' => $active
			) );
			$links->addLink( 'user.actions.logout', array(
				'text' => $this->msg( 'userlogout' ),
				'href' => self::makeSpecialUrl( 'Userlogout',
					// userlogout link must always contain an & character, otherwise we might not be able
					// to detect a buggy precaching proxy (bug 17790)
					$title->isSpecial( 'Preferences' ) ? 'noreturnto' : $returnto
				),
				'active' => false
			) );
		} else {
			// XXX: Provide a way for skins to override $wgUseCombinedLoginLink?
			$loginlink = $this->getUser()->isAllowed( 'createaccount' ) && $wgUseCombinedLoginLink
				? 'nav-login-createaccount'
				: 'login';
			$is_signup = $request->getText( 'type' ) == "signup";

			$login_url = array(
				'text' => $this->msg( $loginlink ),
				'href' => self::makeSpecialUrl( 'Userlogin', $returnto ),
				'active' => $title->isSpecial( 'Userlogin' ) && ( $loginlink == "nav-login-createaccount" || !$is_signup )
			);
			if ( $this->getUser()->isAllowed( 'createaccount' ) && !$wgUseCombinedLoginLink ) {
				$createaccount_url = array(
					'text' => $this->msg( 'createaccount' ),
					'href' => self::makeSpecialUrl( 'Userlogin', "$returnto&type=signup" ),
					'active' => $title->isSpecial( 'Userlogin' ) && $is_signup
				);
			}
			global $wgServer, $wgSecureLogin;
			if ( substr( $wgServer, 0, 5 ) === 'http:' && $wgSecureLogin ) {
				$title = SpecialPage::getTitleFor( 'Userlogin' );
				$https_url = preg_replace( '/^http:/', 'https:', $title->getFullURL() );
				$login_url['href']  = $https_url;
				# @todo FIXME: C lass depends on skin
				$login_url['class'] = 'link-https';
				if ( isset( $createaccount_url ) ) {
					$https_url = preg_replace( '/^http:/', 'https:', $title->getFullURL("type=signup") );
					$createaccount_url['href']  = $https_url;
					# @todo FIXME: Class depends on skin
					$createaccount_url['class'] = 'link-https';
				}
			}

			if ( $this->showIPinHeader() ) {
				# anonuserpage
				$links->addLink( 'user.links.userpage', array(
					'text' => $username,
					'href' => &$userpageUrlDetails['href'],
					'exists' => $userpageUrlDetails['exists'],
					'active' => ( $pageurl == $userpageUrlDetails['href'] )
				) );
				# anontalk
				$links->addLink( 'user.links.talk', array(
					'text' => $this->msg( 'anontalk' ),
					'href' => &$usertalkUrlDetails['href'],
					'exists' => $usertalkUrlDetails['exists'],
					'active' => ( $pageurl == $usertalkUrlDetails['href'] )
				) );
			}
			# login & anonlogin
			$links->addLink( 'user.actions.login', $login_url );
			if ( isset( $createaccount_url ) ) {
				$links->addLink( 'user.actions.createaccount', $createaccount_url );
			}
		}
	}

	protected function setupPageLinks( $links ) {
		global $wgContLang;
		/**
		 * page.** links
		 */
		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();
		$title = $this->getRelevantTitle(); // Display tabs for the relevant title rather than always the title itself
		$onPage = $title->equals( $this->getTitle() );

		$action = $request->getVal( 'action', 'view' );
		$userCanRead = $title->quickUserCan( 'read', $user );

		/**
		 * page.namespace.* links
		 */
		$preventActiveTabs = false;
		wfRunHooks( 'SkinTemplatePreventOtherActiveTabs', array( &$this, &$preventActiveTabs ) );

		$namespaces = array();

		// Checks if page is some kind of content
		if ( $title->canExist() ) {
			// Gets page objects for the related namespaces
			$subjectPage = $title->getSubjectPage();
			$talkPage = $title->getTalkPage();

			// Determines if this is a talk page
			$isTalk = $title->isTalkPage();

			// Generates XML IDs from namespace names
			$subjectId = $title->getNamespaceKey( '' );

			if ( $subjectId == 'main' ) {
				$talkId = 'talk';
			} else {
				$talkId = "{$subjectId}_talk";
			}

			$skname = $this->skinname;

			// XXX: Need to replace tabAction

			// Adds namespace links
			$subjectMsg = array( "nstab-$subjectId" );
			if ( $subjectPage->isMainPage() ) {
				array_unshift( $subjectMsg, 'mainpage-nstab' );
			}
			$text = wfMessageFallback( $subjectMsg )->setContext( $this->getContext() );
			if ( !$text->exists() ) {
				$text = $wgContLang->getFormattedNsText(
					MWNamespace::getSubject( $talkPage->getNamespace() ) );
			}
			$namespaces['subject'] = array(
				'text' => $text,
				'href' => $userCanRead
					? $subjectPage->getContentURL()
					: $subjectPage->getLocalURL(),
				'exists' => !$userCanRead || $subjectPage->isKnown()
			);
			// $content_navigation['namespaces'][$subjectId]['context'] = 'subject';
			$text = wfMessageFallback( array( "nstab-$talkId", 'talk' ) )->setContext( $this->getContext() );
			if ( !$text->exists() ) {
				$text = $wgContLang->getFormattedNsText(
					MWNamespace::getSubject( $talkPage->getNamespace() ) );
			}
			$namespaces['talk'] = array(
				'text' => $text,
				'href' => $userCanRead
					? $talkPage->getContentURL()
					: $talkPage->getLocalURL(),
				'exists' => !$userCanRead || $talkPage->isKnown(),
			);
			// content_navigation['namespaces'][$talkId]['context'] = 'talk';
		} else {
			// If it's not content, it's got to be a special page
			$namespaces['special'] = array(
				'text' => $this->msg( 'nstab-special' ),
				'href' => $request->getRequestURL(), // @bug 2457, 2510
			);
		}

		$activeNamespace = 'subject';
		if ( !$title->canExist() ) {
			$activeNamespace = 'special';
		} elseif ( !$title->isTalkPage() ) {
			$activeNamespace = 'talk';
		}

		wfRunHooks( 'SkinNamespaceLinks', array( $this, $namespaces, &$activeNamespace ) );

		foreach ( $namespaces as $key => $link ) {
			if ( $activeNamespace == $key ) {
				$link['active'] = true;
			}
			$links->addLink( "page.namespaces.$key", $link );
		}

		/**
		 * page.views.* links
		 */
		if ( $title->canExist() && $userCanRead ) {
			wfProfileIn( __METHOD__ . '-views' );
			// Determines if this is a talk page
			$isTalk = $title->isTalkPage();

			// Adds view view link
			if ( $title->exists() ) {
				$text = wfMessageFallback( "$skname-view-view", 'view' )->setContext( $this->getContext() );
				if ( !$text->exists() ) {
					$text = $wgContLang->getFormattedNsText(
						MWNamespace::getSubject( $title->getNamespace() ) );
				}
				$links->addLink( 'page.views.view', array(
					'active' => ( $onPage && ($action == 'view' || $action == 'purge' ) ),
					'text' => $text,
					'href' => $title->getContentURL(),
					'exists' => $title->isKnown(),
					'primary' => true, // don't collapse this in vector (XXX: Does this apply to the new system?)
				) );
			}

			// Checks if user can edit the current page if it exists or create it otherwise
			if ( $title->quickUserCan( 'edit', $user ) && ( $title->exists() || $title->quickUserCan( 'create', $user ) ) ) {
				// Builds CSS class for talk page links
				$isTalkClass = $isTalk ? ' istalk' : '';
				// Whether the user is editing the page
				$isEditing = $onPage && ( $action == 'edit' || $action == 'submit' );
				// Whether to show the "Add a new section" tab
				// Checks if this is a current rev of talk page and is not forced to be hidden
				$showNewSection = !$out->forceHideNewSectionLink()
					&& ( ( $isTalk && $this->isRevisionCurrent() ) || $out->showNewSectionLink() );
				$section = $request->getVal( 'section' );

				$msgKey = $title->exists() || ( $title->getNamespace() == NS_MEDIAWIKI && $title->getDefaultMessageText() !== false ) ?
					"edit" : "create";
				$links->addLink( 'page.views.edit', array(
					'active' => ( $isEditing && ( $section !== 'new' || !$showNewSection ) ),
					'class' => $isTalkClass,
					'text' => wfMessageFallback( "$skname-view-$msgKey", $msgKey )->setContext( $this->getContext() ),
					'href' => $title->getLocalURL( $this->editUrlOptions() ),
					'primary' => true, // don't collapse this in vector (XXX: Does this apply to the new system?)
				) );
				
				// section link
				if ( $showNewSection ) {
					// Adds new section link
					//$content_navigation['actions']['addsection']
					$links->addLink( 'page.views.addsection', array(
						'active' => ( $isEditing && $section == 'new' ),
						'text' => wfMessageFallback( "$skname-action-addsection", 'addsection' )->setContext( $this->getContext() ),
						'href' => $title->getLocalURL( 'action=edit&section=new' )
					) );
				}
			// Checks if the page has some kind of viewable content
			} elseif ( $title->hasSourceText() ) {
				// Adds view source view link
				$links->addLink( 'page.views.viewsource', array(
					'active' => ( $onPage && $action == 'edit' ),
					'text' => wfMessageFallback( "$skname-action-viewsource", 'viewsource' )->setContext( $this->getContext() ),
					'href' => $title->getLocalURL( $this->editUrlOptions() ),
					'primary' => true, // don't collapse this in vector (XXX: Does this apply to the new system?)
				) );
			}
			if ( $title->exists() ) {
				// Adds history view link
				$links->addLink( 'page.views.history', array(
					'active' => ( $onPage && $action == 'history' ),
					'text' => wfMessageFallback( "$skname-view-history", 'history_short' )->setContext( $this->getContext() ),
					'href' => $title->getLocalURL( 'action=history' ),
					'rel' => 'archives',
				) );
			}
			wfProfileOut( __METHOD__ . '-views' );
		}

		/**
		 * page.actions.* links
		 */
		if ( $title->canExist() && $userCanRead ) {
			wfProfileIn( __METHOD__ . '-actions' );
			// Checks if the page exists
			if ( $title->exists() ) {
				if ( $title->quickUserCan( 'delete', $user ) ) {
					$links->addLink( 'page.actions.delete', array(
						'active' => ( $onPage && $action == 'delete' ),
						'text' => wfMessageFallback( "$skname-action-delete", 'delete' )->setContext( $this->getContext() ),
						'href' => $title->getLocalURL( 'action=delete' )
					) );
				}

				if ( $title->quickUserCan( 'move', $user ) ) {
					$moveTitle = SpecialPage::getTitleFor( 'Movepage', $title->getPrefixedDBkey() );
					$links->addLink( 'page.actions.move', array(
						'active' => $this->getTitle()->isSpecial( 'Movepage' ),
						'text' => wfMessageFallback( "$skname-action-move", 'move' )->setContext( $this->getContext() ),
						'href' => $moveTitle->getLocalURL()
					) );
				}
			} else {
				// article doesn't exist or is deleted
				if ( $user->isAllowed( 'deletedhistory' ) ) {
					$n = $title->isDeleted();
					if ( $n ) {
						$undelTitle = SpecialPage::getTitleFor( 'Undelete' );
						// If the user can't undelete but can view deleted history show them a "View .. deleted" tab instead
						$msgKey = $user->isAllowed( 'undelete' ) ? 'undelete' : 'viewdeleted';
						$links->addLink( 'page.actions.undelete', array(
							'active' => $this->getTitle()->isSpecial( 'Undelete' ),
							'text' => wfMessageFallback( "$skname-action-$msgKey", "{$msgKey}_short" )
								->setContext( $this->getContext() )->numParams( $n ),
							'href' => $undelTitle->getLocalURL( array( 'target' => $title->getPrefixedDBkey() ) )
						) );
					}
				}
			}

			if ( $title->getNamespace() !== NS_MEDIAWIKI && $title->quickUserCan( 'protect', $user ) ) {
				$mode = $title->isProtected() ? 'unprotect' : 'protect';
				$links->addLink( "page.actions.$mode", array(
					'active' => ( $onPage && $action == $mode ),
					'text' => wfMessageFallback( "$skname-action-$mode", $mode )->setContext( $this->getContext() ),
					'href' => $title->getLocalURL( "action=$mode" )
				) );
			}

			// Checks if the user is logged in
			if ( $user->isLoggedIn() ) {
				/**
				 * The following actions use messages which, if made particular to
				 * the any specific skins, would break the Ajax code which makes this
				 * action happen entirely inline. Skin::makeGlobalVariablesScript
				 * defines a set of messages in a javascript object - and these
				 * messages are assumed to be global for all skins. Without making
				 * a change to that procedure these messages will have to remain as
				 * the global versions.
				 */
				$mode = $title->userIsWatching() ? 'unwatch' : 'watch';
				$token = WatchAction::getWatchToken( $title, $user, $mode );
				$links->addLink( "page.actions.$mode", array(
					'active' => $onPage && ( $action == 'watch' || $action == 'unwatch' ),
					'text' => $this->msg( $mode ), // uses 'watch' or 'unwatch' message
					'href' => $title->getLocalURL( array( 'action' => $mode, 'token' => $token ) )
				) );
			}
			wfProfileOut( __METHOD__ . '-actions' );
		}

		/**
		 * page.links.*
		 */
		if ( $out->isArticleRelated() ) {
			$links->addLink( 'page.links.whatlinkshere', array(
				'text' => $this->msg( 'whatlinkshere' ),
				'href' => SpecialPage::getTitleFor( 'Whatlinkshere', $out->getTitle()->getPrefixedDBkey() )->getLocalUrl()
			) );
			if ( $this->getTitle()->getArticleID() ) {
				$links->addLink( 'page.links.recentchangeslinked', array(
					'text' => $this->msg( 'recentchangeslinked-toolbox' ),
					'href' => SpecialPage::getTitleFor( 'Recentchangeslinked', $out->getTitle()->getPrefixedDBkey() )->getLocalUrl()
				) );
			}
		}

/*		if ( isset( $this->data['feeds'] ) && $this->data['feeds'] ) {
			$toolbox['feeds']['id'] = 'feedlinks';
			$toolbox['feeds']['links'] = array();
			foreach ( $this->data['feeds'] as $key => $feed ) {
				$toolbox['feeds']['links'][$key] = $feed;
				$toolbox['feeds']['links'][$key]['id'] = "feed-$key";
				$toolbox['feeds']['links'][$key]['rel'] = 'alternate';
				$toolbox['feeds']['links'][$key]['type'] = "application/{$key}+xml";
				$toolbox['feeds']['links'][$key]['class'] = 'feedlink';
			}
		}*/

		if( $out->isArticle() ) {
			if ( !$out->isPrintable() ) {
				$links->addLink( 'page.links.print', array(
					'text' => $this->msg( 'printableversion' ),
					'href' => $this->getTitle()->getLocalURL(
						$request->appendQueryValue( 'printable', 'yes', true ) ),
					'rel' => 'alternate'
				) );
			}

			// Also add a "permalink" while we're at it
			$revid = $this->getRevisionId();
			if ( $revid ) {
				// XXX: This probably needs a trick to make the ispermalink style of link possible
				$links->addLink( 'page.links.permalink', array(
					'text' => $this->msg( 'permalink' ),
					'href' => $out->getTitle()->getLocalURL( array( 'oldid' => $revid ) )
				) );
			}
		}
		/**
		 * page.user.* links
		 */
		foreach ( array( 'contributions', 'log', 'blockip', 'emailuser', 'upload', 'specialpages' ) as $special ) {
			if ( isset( $this->data['nav_urls'][$special] ) && $this->data['nav_urls'][$special] ) {
				$toolbox[$special] = $this->data['nav_urls'][$special];
				$toolbox[$special]['id'] = "t-$special";
			}
		}
		$user = $this->getRelevantUser();
		if ( $user ) {
			$rootUser = $user->getName();

			$links->addLink( 'page.user.contributions', array(
				'text' => $this->msg( 'contributions' ),
				'href' => self::makeSpecialUrlSubpage( 'Contributions', $rootUser )
			) );

			if ( $user->isLoggedIn() ) {
				$logPage = SpecialPage::getTitleFor( 'Log' );
				$links->addLink( 'page.user.log', array(
					'text' => $this->msg( 'log' ),
					'href' => $logPage->getLocalUrl( array( 'user' => $rootUser ) )
				) );
			}

			if ( $this->getUser()->isAllowed( 'block' ) ) {
				$links->addLink( 'page.user.blockip', array(
					'text' => $this->msg( 'blockip' ),
					'href' => self::makeSpecialUrlSubpage( 'Block', $rootUser )
				) );
			}

			if ( $this->showEmailUser( $user ) ) {
				$links->addLink( 'page.user.emailuser', array(
					'text' => $this->msg( 'emailuser' ),
					'href' => self::makeSpecialUrlSubpage( 'Emailuser', $rootUser )
				) );
			}
		}

		/* XXX: Find some way to incorporate this old code into the system?

		// Setup xml ids and tooltip info
		foreach ( $content_navigation as $section => &$links ) {
			foreach ( $links as $key => &$link ) {
				$xmlID = $key;
				if ( isset( $link['context'] ) && $link['context'] == 'subject' ) {
					$xmlID = 'ca-nstab-' . $xmlID;
				} elseif ( isset( $link['context'] ) && $link['context'] == 'talk' ) {
					$xmlID = 'ca-talk';
				} elseif ( $section == "variants" ) {
					$xmlID = 'ca-varlang-' . $xmlID;
				} else {
					$xmlID = 'ca-' . $xmlID;
				}
				$link['id'] = $xmlID;
			}
		}

		# We don't want to give the watch tab an accesskey if the
		# page is being edited, because that conflicts with the
		# accesskey on the watch checkbox.  We also don't want to
		# give the edit tab an accesskey, because that's fairly su-
		# perfluous and conflicts with an accesskey (Ctrl-E) often
		# used for editing in Safari.
		if ( in_array( $action, array( 'edit', 'submit' ) ) ) {
			if ( isset($content_navigation['views']['edit']) ) {
				$content_navigation['views']['edit']['tooltiponly'] = true;
			}
			if ( isset($content_navigation['actions']['watch']) ) {
				$content_navigation['actions']['watch']['tooltiponly'] = true;
			}
			if ( isset($content_navigation['actions']['unwatch']) ) {
				$content_navigation['actions']['unwatch']['tooltiponly'] = true;
			}
		}*/
	}

	protected function setupRelatedLinks( $links ) {
		global $wgDisableLangConversion;
		$user = $this->getUser();
		$title = $this->getRelevantTitle();
		$userCanRead = $title->quickUserCan( 'read', $user );
		/**
		 * related.variants.* links
		 */
		if ( $title->canExist() && $userCanRead && !$wgDisableLangConversion ) {
			$pageLang = $title->getPageLanguage();
			// Gets list of language variants
			$variants = $pageLang->getVariants();
			// Checks that language conversion is enabled and variants exist
			// And if it is not in the special namespace
			if ( count( $variants ) > 1 ) {
				// Gets preferred variant (note that user preference is 
				// only possible for wiki content language variant)
				$preferred = $pageLang->getPreferredVariant();
				// Loops over each variant
				foreach ( $variants as $code ) {
					// Gets variant name from language code
					$varname = $pageLang->getVariantname( $code );
					// Checks if the variant is marked as disabled
					if ( $varname == 'disable' ) {
						// Skips this variant
						continue;
					}
					// Appends variant link
					$links->addLink( 'related.variants.#', array(
						'active' => ( $code == $preferred ),
						'text' => $varname,
						'href' => $title->getLocalURL( array( 'variant' => $code ) ),
						'lang' => $code,
						'hreflang' => $code
					) );
				}
			}
		}
	}

	protected function setupGlobalLinks( $links ) {
		global $wgUploadNavigationUrl;
		/**
		 * global.* links
		 */
		$href = null;
		if ( $wgUploadNavigationUrl ) {
			$href = $wgUploadNavigationUrl;
		} elseif( UploadBase::isEnabled() && UploadBase::isAllowed( $this->getUser() ) === true ) {
			$href = self::makeSpecialUrl( 'Upload' );
		}
		if ( $href ) {
			$links->addLink( 'global.upload', array(
				'text' => $this->msg( 'upload' ),
				'href' => $href,
			) );
		}
		$links->addLink( 'global.specialpages', array(
			'text' => $this->msg( 'specialpages' ),
			'href' => self::makeSpecialUrl( 'Specialpages' )
		) );
	}

	function setupSkinUserCss( OutputPage $out ) {
		$out->addModuleStyles( array( 'mediawiki.legacy.shared', 'mediawiki.legacy.commonPrint' ) );

		foreach ( $this->metadata->getModules() as $name => $module ) {
			if ( $module['load'] ) {
				$out->addModuleStyles( $name );
			}
		}
	}


	public function commonPrintStylesheet() {
		return false;
	}

}

class MWSkinTemplateContext extends MWTemplateContextExtension {

	protected $skin, $regions;

	public function __construct( $skin, $regions ) {
		$this->skin = $skin;
		$this->regions = $regions;
	}

	public function getRegion( $name ) {
		foreach ( $this->regions as $region ) {
			if ( $region->name() == $name ) {
				return $region;
			}
		}
		return parent::getRegion( $name );
	}

	public function getVariable( $name ) {
		$out = $this->skin->getOutput();
		switch( $name ) {
		case 'page':
			$page = new MWTemplateContext;
			$page->set( 'title', new TT\HtmlText( $out->getPageTitle() ) );
			return $page;
		case 'isarticle':
			return $out->isArticle();
		case 'links':
			$this->skin->getLinkStructure();

			return new MWTemplateContext; // XXX: Till we have $dfn working
		case 'footer':
			$footer = new MWTemplateContext;
			//$footer->set( 'links',  );
			// $footer->set( 'icons', );
			return $footer;
		}
		return parent::getVariable( $name );
	}

}
