<?php

require_once('UserMailer.php');

function wfSpecialUserlogin()
{
	global $wgCommandLineMode;
	global $wgRequest;
	if( !$wgCommandLineMode && !isset( $_COOKIE[ini_get("session.name")] )  ) {
		User::SetupSession();
	}
	
	$form = new LoginForm( $wgRequest );
	$form->execute();
}

class LoginForm {
	var $mName, $mPassword, $mRetype, $mReturnto, $mCookieCheck, $mPosted;
	var $mAction, $mCreateaccount, $mCreateaccountMail, $mMailmypassword;
	var $mLoginattempt, $mRemember, $mEmail;
	
	function LoginForm( &$request ) {
		global $wgLang;

		$this->mName = $request->getText( 'wpName' );
		$this->mPassword = $request->getText( 'wpPassword' );
		$this->mRetype = $request->getText( 'wpRetype' );
		$this->mReturnto = $request->getText( 'returnto' );
		$this->mCookieCheck = $request->getVal( "wpCookieCheck" );
		$this->mPosted = $request->wasPosted();
		$this->mCreateaccount = $request->getCheck( 'wpCreateaccount' );
		$this->mCreateaccountMail = $request->getCheck( 'wpCreateaccountMail' );
		$this->mMailmypassword = $request->getCheck( 'wpMailmypassword' );
		$this->mLoginattempt = $request->getCheck( 'wpLoginattempt' );
		$this->mAction = $request->getVal( 'action' );
		$this->mRemember = $request->getCheck( 'wpRemember' );
		$this->mEmail = $request->getText( 'wpEmail' );
		$this->mRealName = $request->getText( 'wpRealName' );
		
		# When switching accounts, it sucks to get automatically logged out
		if( $this->mReturnto == $wgLang->specialPage( "Userlogout" ) ) {
			$this->mReturnto = "";
		}
	}

	function execute() {
		if ( !is_null( $this->mCookieCheck ) ) {
			$this->onCookieRedirectCheck( $this->mCookieCheck );
		} else if( $this->mPosted ) {
			if( $this->mCreateaccount ) {
				return $this->addNewAccount();
			} else if ( $this->mCreateaccountMail ) {
				return $this->addNewAccountMailPassword();
			} else if ( $this->mMailmypassword ) {
				return $this->mailPassword();
			} else if ( ( "submit" == $this->mAction ) || $this->mLoginattempt ) {
				return $this->processLogin();
			}
		}
		$this->mainLoginForm( "" );
	}

	/* private */ function addNewAccountMailPassword()
	{
		global $wgOut;
		
		if ("" == $this->mEmail) {
			$this->mainLoginForm( wfMsg( "noemail", $this->mName ) );
			return;
		}

		$u = $this->addNewaccountInternal();

		if ($u == NULL) {
			return;
		}

		$u->saveSettings();
		$error = $this->mailPasswordInternal($u);

		$wgOut->setPageTitle( wfMsg( "accmailtitle" ) );
		$wgOut->setRobotpolicy( "noindex,nofollow" );
		$wgOut->setArticleRelated( false );
	
		if ( $error === "" ) {
			$wgOut->addWikiText( wfMsg( "accmailtext", $u->getName(), $u->getEmail() ) );
			$wgOut->returnToMain( false );
		} else {
			$this->mainLoginForm( wfMsg( "mailerror", $error ) );
		}

		$u = 0;
	}


	/* private */ function addNewAccount()
	{
		global $wgUser, $wgOut;
		global $wgDeferredUpdateList;

		$u = $this->addNewAccountInternal();

		if ($u == NULL) {
			return;
		}

		$wgUser = $u;
		$wgUser->setCookies();

		$up = new UserUpdate();
		array_push( $wgDeferredUpdateList, $up );

		if( $this->hasSessionCookie() ) {
			return $this->successfulLogin( wfMsg( "welcomecreation", $wgUser->getName() ) );
		} else {
			return $this->cookieRedirectCheck( "new" );
		}
	}


	/* private */ function addNewAccountInternal()
	{
		global $wgUser, $wgOut;
		global $wgMaxNameChars;

		if (!$wgUser->isAllowedToCreateAccount()) {
			$this->userNotPrivilegedMessage();
			return;
		}

		if ( 0 != strcmp( $this->mPassword, $this->mRetype ) ) {
			$this->mainLoginForm( wfMsg( "badretype" ) );
			return;
		}
		
		$name = trim( $this->mName );
		if ( ( "" == $name ) ||
		  preg_match( "/\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}/", $name ) ||
		  (strpos( $name, "/" ) !== false) ||
		  (strlen( $name ) > $wgMaxNameChars) ) 
		{
			$this->mainLoginForm( wfMsg( "noname" ) );
			return;
		}
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		$u = User::newFromName( $name );
		
		if ( 0 != $u->idForName() ) {
			$this->mainLoginForm( wfMsg( "userexists" ) );
			return;
		}
		$u->addToDatabase();
		$u->setPassword( $this->mPassword );
		$u->setEmail( $this->mEmail );
		$u->setRealName( $this->mRealName );

		if ( $this->mRemember ) { $r = 1; }
		else { $r = 0; }
		$u->setOption( "rememberpassword", $r );
		
		return $u;
	}



	/* private */ function processLogin()
	{
		global $wgUser;
		global $wgDeferredUpdateList;

		if ( "" == $this->mName ) {
			$this->mainLoginForm( wfMsg( "noname" ) );
			return;
		}
		$u = User::newFromName( $this->mName );
		$id = $u->idForName();
		if ( 0 == $id ) {
			$this->mainLoginForm( wfMsg( "nosuchuser", $u->getName() ) );
			return;
		}
		$u->setId( $id );
		$u->loadFromDatabase();
		$ep = $u->encryptPassword( $this->mPassword );
		if ( 0 != strcmp( $ep, $u->getPassword() ) ) {
			if ( 0 != strcmp( $ep, $u->getNewpassword() ) ) {
				$this->mainLoginForm( wfMsg( "wrongpassword" ) );
				return;
			}
		}

		# We've verified now, update the real record
		#
		if ( $this->mRemember ) {
			$r = 1;
			$u->setCookiePassword( $this->mPassword );
		} else {
			$r = 0;
		}
		$u->setOption( "rememberpassword", $r );

		$wgUser = $u;
		$wgUser->setCookies();

		$up = new UserUpdate();
		array_push( $wgDeferredUpdateList, $up );

		if( $this->hasSessionCookie() ) {
			return $this->successfulLogin( wfMsg( "loginsuccess", $wgUser->getName() ) );
		} else {
			return $this->cookieRedirectCheck( "login" );
		}
	}

	/* private */ function mailPassword()
	{
		global $wgUser, $wgDeferredUpdateList, $wgOutputEncoding;
		global $wgCookiePath, $wgCookieDomain, $wgDBname;

		if ( "" == $this->mName ) {
			$this->mainLoginForm( wfMsg( "noname" ) );
			return;
		}
		$u = User::newFromName( $this->mName );
		$id = $u->idForName();
		if ( 0 == $id ) {
			$this->mainLoginForm( wfMsg( "nosuchuser", $u->getName() ) );
			return;
		}
		$u->setId( $id );
		$u->loadFromDatabase();

		$error = $this->mailPasswordInternal( $u );
		if ($error === "") {
			$this->mainLoginForm( wfMsg( "passwordsent", $u->getName() ) );
		} else {
			$this->mainLoginForm( wfMsg( "mailerror", $error ) );
		}

	}


	/* private */ function mailPasswordInternal( $u )
	{
		global $wgDeferredUpdateList, $wgOutputEncoding;
		global $wgPasswordSender, $wgDBname, $wgIP;
		global $wgCookiePath, $wgCookieDomain;

		if ( "" == $u->getEmail() ) {
			$this->mainLoginForm( wfMsg( "noemail", $u->getName() ) );
			return;
		}
		$np = User::randomPassword();
		$u->setNewpassword( $np );

		setcookie( "{$wgDBname}Password", "", time() - 3600, $wgCookiePath, $wgCookieDomain );
		$u->saveSettings();

		$ip = $wgIP;
		if ( "" == $ip ) { $ip = "(Unknown)"; }

		$m = wfMsg( "passwordremindertext", $ip, $u->getName(), $np );

		$error = userMailer( $u->getEmail(), $wgPasswordSender, wfMsg( "passwordremindertitle" ), $m );
		  
		return $error;
	}





	/* private */ function successfulLogin( $msg )
	{
		global $wgUser;
		global $wgDeferredUpdateList;
		global $wgOut;

		$wgOut->setPageTitle( wfMsg( "loginsuccesstitle" ) );
		$wgOut->setRobotpolicy( "noindex,nofollow" );
		$wgOut->setArticleRelated( false );
		$wgOut->addHTML( $msg );
		$wgOut->returnToMain();
	}

	function userNotPrivilegedMessage()
	{
		global $wgOut, $wgUser, $wgLang;
		
		$wgOut->setPageTitle( wfMsg( "whitelistacctitle" ) );
		$wgOut->setRobotpolicy( "noindex,nofollow" );
		$wgOut->setArticleRelated( false );

		$wgOut->addWikiText( wfMsg( "whitelistacctext" ) );
		
		$wgOut->returnToMain( false );
	}

	/* private */ function mainLoginForm( $err )
	{
		global $wgUser, $wgOut, $wgLang;
		global $wgDBname;

		$le = wfMsg( "loginerror" );
		$yn = wfMsg( "yourname" );
		$yp = wfMsg( "yourpassword" );
		$ypa = wfMsg( "yourpasswordagain" );
		$rmp = wfMsg( "remembermypassword" );
		$nuo = wfMsg( "newusersonly" );
		$li = wfMsg( "login" );
		$ca = wfMsg( "createaccount" );
		$cam = wfMsg( "createaccountmail" );
		$ye = wfMsg( "youremail" );
		$yrn = wfMsg( "yourrealname" );
		$efl = wfMsg( "emailforlost" );
		$mmp = wfMsg( "mailmypassword" );
		$endText = wfMsg( "loginend" );

		if ( $endText = "&lt;loginend&gt;" ) {
			$endText = "";
		}

		if ( "" == $this->mName ) {
			if ( 0 != $wgUser->getID() ) {
				$this->mName = $wgUser->getName();
			} else {
				$this->mName = @$_COOKIE["{$wgDBname}UserName"];
			}
		}

		$wgOut->setPageTitle( wfMsg( "userlogin" ) );
		$wgOut->setRobotpolicy( "noindex,nofollow" );
		$wgOut->setArticleRelated( false );

		if ( "" == $err ) {
			$lp = wfMsg( "loginprompt" );
			$wgOut->addHTML( "<h2>$li:</h2>\n<p>$lp</p>" );
		} else {
			$wgOut->addHTML( "<h2>$le:</h2>\n<font size='+1' 
	color='red'>$err</font>\n" );
		}
		if ( 1 == $wgUser->getOption( "rememberpassword" ) ) {
			$checked = " checked";
		} else {
			$checked = "";
		}
		
		$q = "action=submit";
		if ( !empty( $this->mReturnto ) ) {
			$q .= "&returnto=" . wfUrlencode( $this->mReturnto );
		}
		
		$titleObj = Title::makeTitle( NS_SPECIAL, "Userlogin" );
		$action = $titleObj->escapeLocalUrl( $q );

		$encName = wfEscapeHTML( $this->mName );
		$encPassword = wfEscapeHTML( $this->mPassword );
		$encRetype = wfEscapeHTML( $this->mRetype );
		$encEmail = wfEscapeHTML( $this->mEmail );
		$encRealName = wfEscapeHTML( $this->mRealName );

		if ($wgUser->getID() != 0) {
			$cambutton = "<input tabindex='6' type='submit' name=\"wpCreateaccountMail\" value=\"{$cam}\" />";
		} else {
			$cambutton = "";
		}

		$wgOut->addHTML( "
	<form name=\"userlogin\" id=\"userlogin\" method=\"post\" action=\"{$action}\">
	<table border='0'><tr>
	<td align='right'>$yn:</td>
	<td align='left'>
	<input tabindex='1' type='text' name=\"wpName\" value=\"{$encName}\" size='20' />
	</td>
	<td align='left'>
	<input tabindex='3' type='submit' name=\"wpLoginattempt\" value=\"{$li}\" />
	</td>
	</tr>
	<tr>
	<td align='right'>$yp:</td>
	<td align='left'>
	<input tabindex='2' type='password' name=\"wpPassword\" value=\"{$encPassword}\" size='20' />
	</td>
	<td align='left'>
	<input tabindex='7' type='checkbox' name=\"wpRemember\" value=\"1\" id=\"wpRemember\"$checked /><label for=\"wpRemember\">$rmp</label>
	</td>
	</tr>");

		if ($wgUser->isAllowedToCreateAccount()) {
			$encRetype = htmlspecialchars( $this->mRetype );
			$encEmail = htmlspecialchars( $this->mEmail );
	$wgOut->addHTML("<tr><td colspan='3'>&nbsp;</td></tr><tr>
	<td align='right'>$ypa:</td>
	<td align='left'>
	<input tabindex='4' type='password' name=\"wpRetype\" value=\"{$encRetype}\" 
	size='20' />
	</td><td>$nuo</td></tr>
	<tr>
	<td align='right'>$ye:</td>
	<td align='left'>
	<input tabindex='6' type='text' name=\"wpEmail\" value=\"{$encEmail}\" size='20' />
	</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
	<td align='right'>$yrn:</td>
	<td align='left'>
	<input tabindex='6' type='text' name=\"wpRealName\" value=\"{$encRealName}\" size='20' />
	</td>
        <td align='left'>
	<input tabindex='7' type='submit' name=\"wpCreateaccount\" value=\"{$ca}\" />
	$cambutton
	</td></tr>");
		}

		$wgOut->addHTML("
	<tr><td colspan='3'>&nbsp;</td></tr><tr>
	<td colspan='3' align='left'>
	<p>$efl<br />
	<input tabindex='8' type='submit' name=\"wpMailmypassword\" value=\"{$mmp}\" /></p>
	</td></tr></table>
	</form>\n" );
		$wgOut->addHTML( $endText );
	}

	/* private */ function hasSessionCookie()
	{
		global $wgDisableCookieCheck;
		return ( $wgDisableCookieCheck ) ? true : ( "" != $_COOKIE[session_name()] );
	}
	  
	/* private */ function cookieRedirectCheck( $type )
	{
		global $wgOut, $wgLang;

		$titleObj = Title::makeTitle( NS_SPECIAL, "Userlogin" );
		$check = $titleObj->getFullURL( "wpCookieCheck=$type" );

		return $wgOut->redirect( $check );
	}

	/* private */ function onCookieRedirectCheck( $type ) {
		global $wgUser;

		if ( !$this->hasSessionCookie() ) {
			if ( $type == "new" ) {
				return $this->mainLoginForm( wfMsg( "nocookiesnew" ) );
			} else if ( $type == "login" ) {
				return $this->mainLoginForm( wfMsg( "nocookieslogin" ) );
			} else {
				# shouldn't happen
				return $this->mainLoginForm( wfMsg( "error" ) );
			}
		} else {
			return $this->successfulLogin( wfMsg( "loginsuccess", $wgUser->getName() ) );
		}
	}
}
?>
