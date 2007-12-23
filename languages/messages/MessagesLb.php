<?php
/** Luxembourgish (Lëtzebuergesch)
 *
 * @addtogroup Language
 *
 * @author SPQRobin
 * @author Siebrand
 * @author לערי ריינהארט
 * @author Kaffi
 * @author Robby
 */

$fallback = 'de';

$messages = array(
# User preference toggles
'tog-underline'        => 'Linken ënnersträichen:',
'tog-highlightbroken'  => 'Format vu futtise Linken <a href="" class="new">esou</a> (alternativ: <a href="" class="internal">?</a>).',
'tog-justify'          => "Ränner vun Text riten (''justify'')",
'tog-hideminor'        => 'Verstopp kleng Ännerungen an de rezenten Ännerungen',
'tog-extendwatchlist'  => 'Suivis-Lëscht op all Ännerungen ausbreeden',
'tog-usenewrc'         => 'Mat JavaScript erweidert rezent Ännerungen (klappt net mat all Browser)',
'tog-numberheadings'   => 'Iwwerschrëften automatesch numeréieren',
'tog-editondblclick'   => 'Säite mat Duebelklick veränneren (JavaScript)',
'tog-editsection'      => "Linken fir d'Verännere vun eenzelnen Abschnitten uweisen",
'tog-showtoc'          => 'Inhaltsverzeechniss uweisen bäi Säite matt méi wéi dräi Iwwerschreften',
'tog-rememberpassword' => 'Meng Umeldung op dësem Computer verhalen',
'tog-editwidth'        => 'Verännerungskëscht iwwert déi ganz Breed vum Ecran',
'tog-watchcreations'   => 'Säiten déi ech ufänken automatesch op meng Suivi-Lëscht setzen',
'tog-watchdefault'     => 'Säiten déi ech veränneren automatesch op meng Suivi-Lëscht setzen',
'tog-watchmoves'       => 'Säiten déi ech réckelen automatesch op meng Suivi-Lëscht setzen',
'tog-watchdeletion'    => 'Säiten déi ech läschen automatesch op meng Suivi-Lëscht setzen',
'tog-minordefault'     => "Alle Verännerungen déi ech maachen automatesch als 'Kleng Ännerungen' uweisen",
'tog-fancysig'         => 'Ënnerschrëft ouni automatesche Link op déi eege Benotzersäit',
'tog-forceeditsummary' => 'Warnen, wa beim Späicheren de Résumé feelt',
'tog-ccmeonemails'     => 'Schéck mir eng Kopie vun de Mailen, déi ech anere Benotzer schécken.',
'tog-diffonly'         => "Weis bei Versiounevergläicher just d'Ënnerscheeder an net de ganzen Artikel",

'underline-always' => 'ëmmer',
'underline-never'  => 'Ni',

# Dates
'sunday'    => 'Sonndeg',
'monday'    => 'Méindeg',
'tuesday'   => 'Dënschdeg',
'wednesday' => 'Mëttwoch',
'thursday'  => 'Donneschdeg',
'friday'    => 'Freideg',
'saturday'  => 'Samsdeg',
'january'   => 'Januar',
'february'  => 'Februar',
'march'     => 'Mäerz',
'april'     => 'Abrëll',
'may_long'  => 'Mee',
'june'      => 'Juni',
'july'      => 'Juli',
'august'    => 'August',
'september' => 'September',
'october'   => 'Oktober',
'november'  => 'November',
'december'  => 'Dezember',
'jan'       => 'Jan.',
'feb'       => 'Feb.',
'mar'       => 'Mäe.',
'apr'       => 'Abr.',
'may'       => 'Mee',
'jun'       => 'Jun.',
'jul'       => 'Jul.',
'aug'       => 'Aug.',
'sep'       => 'Sep.',
'oct'       => 'Okt.',
'nov'       => 'Nov.',
'dec'       => 'Dez.',

# Bits of text used by many pages
'categories'      => 'Kategorien',
'pagecategories'  => '{{PLURAL:$1|Kategorie|Kategorien}}',
'category_header' => 'Artikelen an der Kategorie "$1"',
'subcategories'   => 'Ënnerkategorien',
'category-empty'  => "''An dëser Kategorie gëtt et am Ament nach keng Artikelen oder Medien''",

'about'          => 'A propos',
'article'        => 'Artikel',
'newwindow'      => '(geet an enger neier Fënster op)',
'cancel'         => 'Zeréck',
'qbspecialpages' => 'Spezialsäiten',
'moredotdotdot'  => 'Méi …',
'mypage'         => 'meng Säit',
'mytalk'         => 'meng Diskussioun',
'anontalk'       => 'Diskussioun fir dës IP Adress',
'navigation'     => 'Navigatioun',

'errorpagetitle'   => 'Feeler',
'returnto'         => 'Zréck op $1.',
'help'             => 'Hëllef',
'search'           => 'Sichen',
'searchbutton'     => 'Volltext-Sich',
'go'               => 'Lass',
'searcharticle'    => 'Artikel',
'history'          => 'Historique vun der Säit',
'history_short'    => 'Historique',
'info_short'       => 'Informatioun',
'printableversion' => 'Printversioun',
'permalink'        => 'Zitéierfäege Link',
'print'            => 'Drécken',
'edit'             => 'Änneren',
'editthispage'     => 'Dës Säit änneren',
'delete'           => 'Läschen',
'deletethispage'   => 'Dës Säit läschen',
'protect'          => 'Protegéieren',
'unprotect'        => 'Deprotegéieren',
'newpage'          => 'Nei Säit',
'talkpagelinktext' => 'Diskussioun',
'specialpage'      => 'Spezialsäit',
'personaltools'    => 'Perséinlech Tools',
'articlepage'      => 'Artikel',
'talk'             => 'Diskussioun',
'toolbox'          => 'Geschirkëscht',
'otherlanguages'   => 'Aner Sproochen',
'jumptonavigation' => 'Navigatioun',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Iwwer {{SITENAME}}',
'aboutpage'         => 'Project:A propos_{{SITENAME}}',
'bugreports'        => 'Feelermeldungen',
'bugreportspage'    => 'Project:Feelermeldungen',
'copyright'         => 'Inhalt ass zur Verfügung gestallt ënnert der $1.<br />',
'copyrightpagename' => '{{SITENAME}} Copyright',
'copyrightpage'     => '{{ns:project}}:Copyright',
'currentevents'     => 'Aktualitéit',
'currentevents-url' => 'Project:Aktualitéit',
'disclaimers'       => 'Impressum',
'disclaimerpage'    => 'Project:Impressum',
'edithelp'          => 'Hëllef beim Änneren',
'edithelppage'      => 'Hëllef:Wéi änneren ech eng Säit',
'mainpage'          => 'Haaptsäit',
'portal'            => 'Kommunautéit',
'portal-url'        => 'Project:Kommunautéit',
'sitesupport'       => 'Donatiounen',
'sitesupport-url'   => 'Project:En Don maachen',

'badaccess'        => 'Net genuch Rechter',
'badaccess-group0' => 'Dir hutt net déi néideg Rechter fir dës Aktioun duerchzeféieren.',
'badaccess-group1' => "D'Aktioun déi dir gewielt hutt, kann nëmme vu Benotzer aus de Gruppen $1 duerchgefouert ginn.",
'badaccess-group2' => "D'Aktioun déi dir gewielt hutt, kann nëmme vu Benotzer aus enger vun den $1 Gruppen duerchgefouert ginn.",
'badaccess-groups' => "D'Aktioun déi dir gewielt hutt, kann nëmme vu Benotzer aus de Gruppen $1 duerchgefouert ginn.",

'newmessageslink' => 'nei Messagen',
'editsection'     => 'änneren',
'editold'         => 'änneren',
'toc'             => 'Inhaltsverzeechnis',
'showtoc'         => 'weis',
'hidetoc'         => 'verstoppen',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-user'     => 'Benotzersäit',
'nstab-special'  => 'Spezialsäit',
'nstab-template' => 'Schabloun',
'nstab-category' => 'Kategorie',

# Main script and global functions
'nosuchspecialpage' => 'Spezialsäit gëtt et net',
'nospecialpagetext' => "<big>'''Dir hutt eng Spezialsäit ofgefrot déi et net gëtt.'''</big>

All Spezialsäiten déi et gëtt sinn op der [[{{ns:special}}:Specialpages|Lescht vun de Spezialsäiten]] ze fannen.",

# General errors
'error'            => 'Feeler',
'databaseerror'    => 'Datebank Feeler',
'dberrortext'      => 'En Datebank Syntax Fehler ass opgetrueden. De läschten Datebank Query war: "$1" vun der Funktioun "$2". MySQL Feeler "$3: $4".',
'cachederror'      => 'Folgend Säit ass eng Kopie aus dem Cache an net onbedéngt aktuell.',
'readonly'         => "D'Datebank ass gespart",
'enterlockreason'  => 'Gitt w.e.g. e Grond fir de Lock an, a wéilaang en ongeféier bestoe soll.',
'readonly_lag'     => "D'Datebank gouf automatesch gespaart fir datt d'Zweetserveren (slaves) nees mat dem Haaptserver (master) synchron geschalt kënne ginn.",
'badarticleerror'  => 'Dës Aktioun kann net op dëser Säit duerchgefouert ginn.',
'cannotdelete'     => "D'Bild oder d'Säit kann net geläscht ginn (ass waarscheinlech schonns vun engem Anere geläscht ginn).",
'badtitle'         => 'Schlechten Titel',
'badtitletext'     => 'De gewënschten Titel ass invalid, eidel, oder een net korrekten Interwiki Link.',
'viewsource'       => 'Source kucken',
'editinginterface' => "'''Opgepasst:''' Dir sidd am Gaang, eng Säit z'änneren, déi do ass, fir Interface-Text fir d'Software ze liwweren. Ännerungen op dëser Säit änneren den Interface-Text, dee jidderee liese kann.",

# Login and logout pages
'logouttitle'                => 'Benotzer-Ofmeldung',
'logouttext'                 => '<strong>Dir sidd elo ofgemeld.</strong>

Dir kënnt {{SITENAME}} elo anonym benotzen, oder Iech nacheemol als deeselwechten oder en anere Benotzer umelden. 

Opgepasst: Op verschiddene Säite gesäit et nach esou aus, wéi wann Dir nach ugemeld wiert, bis Dir ärem Browser seng Cache eidelmaacht.',
'yourname'                   => 'Benotzernumm:',
'yourpassword'               => 'Passwuert:',
'yourdomainname'             => 'Ären Domain',
'userlogin'                  => 'Aloggen',
'userlogout'                 => 'Ausloggen',
'createaccount'              => 'Neie Kont opmaachen',
'createaccountmail'          => 'Via Email',
'badretype'                  => 'Är Passwierder stëmmen net iwwerdeneen.',
'youremail'                  => 'E-Mail-Adress:',
'username'                   => 'Benotzernumm:',
'uid'                        => 'Benotzer-Nummer:',
'yourrealname'               => 'Richtege Numm:',
'yourlanguage'               => 'Sprooch:',
'badsig'                     => "D'Syntax vun ärer Ënnerschëft ass net korrekt; iwwerpréift w.e.g. ären HTML Code.",
'badsiglength'               => 'De gewielten Numm ass ze laang; e muss manner wéi $1 Zeechen hunn.',
'email'                      => 'E-Mail',
'nouserspecified'            => 'Gitt w.e.g. e Benotzernumm un.',
'passwordremindertitle'      => 'Neit Passwuert fir ee {{SITENAME}}-Benotzerkonto',
'eauthentsent'               => "Eng Confirmatiouns-Email gouf un déi uginnen Adress geschéckt.<br>Ier iergend eng Email vun anere Benotzer op dee Kont geschéckt ka ginn, muss der als éischt d'Instructiounen an der Confirmatiouns-Email befollegen, fir ze bestätegen datt de Kont wierklech ären eegenen ass.",
'mailerror'                  => 'Feeler beim Schécke vun der E-Mail: $1',
'acct_creation_throttle_hit' => 'Dir hutt schon $1 Konten. Dir kënnt keng weider kreéieren.',
'emailauthenticated'         => 'Äer E-Mail-Adress gouf confirméiert: $1.',
'emailnotauthenticated'      => 'Är Email Adress gouf <strong>nach net confirméiert</strong>.<br>Dowéinst ass et bis ewell net méiglech, fir déi folgend Funktiounen Emailen ze schécken oder ze kréien.',
'emailconfirmlink'           => 'Confirméiert äer E-Mail-Adress w.e.g..',
'accountcreated'             => 'De Kont gouf geschaf',
'accountcreatedtext'         => 'De Benotzerkont fir $1 gouf geschaf.',
'loginlanguagelabel'         => 'Sprooch: $1',

# Edit page toolbar
'bold_sample'    => 'Fettgedréckten Text',
'bold_tip'       => 'Fettgedréckten Text',
'extlink_sample' => 'http://www.example.com Link Titel',
'sig_tip'        => 'Är Ënnerschrëft matt Zäitstempel',

# Edit pages
'summary'            => 'Résumé',
'minoredit'          => 'Kleng Ännerung',
'watchthis'          => 'Dës Säit verfollegen',
'savearticle'        => 'Säit späicheren',
'preview'            => 'Kucken ouni ofzespäicheren',
'showpreview'        => 'Kucken ouni ofzespäicheren',
'showlivepreview'    => 'Live-Kucken ouni ofzespäicheren',
'showdiff'           => 'Weis Ännerungen',
'anoneditwarning'    => 'Dir sidd net ageloggt. Dowéinst gëtt amplaz vun engem Benotzernumm är IP Adress am Historique vun dëser Säit gespäichert.',
'summary-preview'    => 'Résumé kucken ouni ofzespäicheren',
'blockedtitle'       => 'Benotzer ass gespärt',
'blockedtext'        => "Äre Benotzernumm oder är IP Adress gouf vum \$1 blockéiert. De Grond dofir ass deen heiten:<br />''\$2''<p>Dir kënnt den/d' \$1 kontaktéieren oder ee vun deenen aneren [[Wikipedia:Administrators|Administratoren]] fir de Blockage ze beschwätzen. Dëst sollt Der besonnesch maachen, wann der d'Gefill hutt, dass de Grond fir d'Spären net bei Iech läit. D'Ursaach dofir ass an deem Fall, datt der eng dynamesch IP hutt, iwwert en Access-Provider, iwwert deen och aner Leit fueren. Aus deem Grond ass et recommandéiert, sech e Benotzernumm zouzeleeën, fir all Mëssverständnes z'évitéieren. Dir kënnt d'Fonktioun \"Dësem Benotzer eng E-mail schécken\" nëmme benotzen, wann Dir eng valid Email Adress bei äre [[Special:Preferences|Preferenzen]] aginn hutt. Är IP Adress ass \$3. Schreift dës w.e.g. bei all Fro dobäi.",
'autoblockedtext'    => 'Är IP-Adress gouf automatesch gespaart, well se vun engem anere Benotzer gebraucht gouf, an dëse vum $1 gespaart ginn ass. De Grond dofir war: 

\'\'$2\'\' (<span class="plainlinks">[{{fullurl:Special:Ipblocklist|&action=search&limit=&ip=%23}}$5 Mentioun am Logbuch]</span>) 

<p style="border-style: solid; border-color: red; border-width: 1px; padding:5px;"><b>Dir kënnt d\'Säit weiderhi liesen,</b> nëmmen d\'Méiglechkeet, se ze änneren oder soss Säiten op der {{SITENAME}} unzeleeën oder ze änneren, gouf gespaart.
Wann der dësen Text gesitt, obwuel der just liese wollt, hutt der op e roude Link geklickt gehat, deen op eng Säit verknëppt, déi et nach net gëtt.</p> 

Dir kënnt de(n) $1 oder soss een [[{{MediaWiki:Grouppage-sysop}}|Administrateur]] kontaktéieren, fir iwwer dës Spär ze diskutéieren.

<div style="border-style: solid; border-color: red; border-width: 1px; padding:5px;"> \'\'\'Gitt dofir w.e.gl. dës Donnéeën un:\'\'\'
*Administrateur dee gespaart huet: $1 
*Grond fir d\'Spär: $2 
*Ufank vun der Spär: $8 
*Enn: $6 
*IP-Adress: $3 
*Spär-ID: #$5 </div>',
'whitelistreadtitle' => 'Fir ze liesen muss Dir ugemeld sinn',
'loginreqlink'       => 'umellen',
'accmailtitle'       => 'Passwuert gouf geschéckt.',
'accmailtext'        => "D'Passwuert fir „$1“ gouf op $2 geschéckt.",
'anontalkpagetext'   => "---- ''Dëst ass d'Diskussiounssäit fir en anonyme Benotzer deen nach kee Kont opgemaach huet oder en net benotzt. Dowéinster musse mer d'[[IP Adress]] benotzen fir hien/hatt z'identifizéieren. Sou eng IP Adress ka vun e puer Benotzer gedeelt gin. Wann Dir en anonyme Benotzer sidd an dir irrelevant Kommentäre krut, [[Special:Userlogin|maacht e Kont op oder loggt Iech an]] fir weider Verwiesselungen mat anonyme Benotzer ze verhënneren.''",
'clearyourcache'     => "'''Opgepasst:''' Nom Späichere muss der Ärem Browser seng Cache eidel maachen, fir d'Ännerungen ze gesinn: '''Mozilla/Firefox:''' klickt ''reload'' (oder ''ctrl-R''), '''IE / Opera:''' ''ctrl-f5'', '''Safari:''' ''cmd-r'', '''Konqueror''' ''ctrl-r''.",
'editing'            => 'Ännere vun $1',
'editinguser'        => 'Ännere vum Benotzer <b>$1</b>',
'editingsection'     => 'Ännere vun $1 (Abschnitt)',
'editingcomment'     => 'Ännere vun $1 (Kommentar)',
'editconflict'       => 'Ännerungskonflikt: $1',
'explainconflict'    => 'Een anere Benotzer huet un dëser Säit geschafft, während Dir amgaange waart, se ze änneren.

Dat iewegt Textfeld weist Iech den aktuellen Text.

Är Ännerunge gesitt Dir am ënneschten Textfeld.

Dir musst Är Ännerungen an dat iewegt Textfeld androen.

<b>Nëmmen</b> den Text aus dem iewegten Textfeld gëtt gehale wann Dir op "Säit späicheren" klickt. <br />',
'yourtext'           => 'Ären Text',
'storedversion'      => 'Gespäichert Versioun',
'editingold'         => '<strong>OPGEPASST: Dir ännert eng al Versioun vun dëser Säit. Wann Dir späichert, sinn all rezent Versioune vun dëser Säit verluer.</strong>',
'yourdiff'           => 'Ënnerscheeder',
'copyrightwarning2'  => 'W.e.g. notéiert datt all Kontributiounen op {{SITENAME}} vun anere Matschaffer verännert oder geläscht kënne ginn. Wann dir dat net wëllt, da setzt näischt heihinner.<br /> Dir verspriecht ausserdeem datt dir dësen Text selwer verfaasst hutt, oder aus dem Domaine public oder ähnlecher Ressource kopéiert hutt. (cf. $1 fir méi Detailler). <strong>DROT KEE COPYRECHTLECH GESCHÜTZTE CONTENU AN!</strong>',
'templatesused'      => 'Schablounen déi an dësem Artikel gebraucht ginn:',
'nocreate-loggedin'  => 'Dir hutt keng Berechtigung fir nei Säiten an dëser Wiki anzuleeën.',

# Account creation failure
'cantcreateaccount-text' => 'Dës IP Adress (<b>$1</b>) gouf vum [[User:$3|$3]] blokéiert fir Benotzer-Konten op der lëtzebuergescher Wikipedia opzemaachen. De Benotzer $3 huet "$2" als Ursaach uginn.',

# History pages
'currentrev'          => 'Aktuell Versioun',
'nextrevision'        => 'Méi rezent Ännerung→',
'currentrevisionlink' => 'aktuell Revisioun kucken',
'cur'                 => 'aktuell',
'next'                => 'nächst',
'last'                => 'lescht',
'orig'                => 'Original',
'page_first'          => 'éischt',
'histlegend'          => "Fir d'Ännerungen unzeweisen: Klickt déi zwou Versiounen un déi verglach solle ginn.<br/> 
*(aktuell) = Ënnerscheed mat der aktueller Versioun,
*(lescht) = Ënnerscheed mat der aler Versioun, M = Kleng Ännerung.",
'deletedrev'          => '[geläscht]',
'historyempty'        => '(eidel)',

# Revision feed
'history-feed-title' => 'Historique vun de Versiounen',

# Diffs
'difference'              => '(Ennerscheed tëscht Versiounen)',
'compareselectedversions' => 'Ausgewielte Versioune vergläichen',
'diff-multi'              => '({{PLURAL:$1|Eng Tëscheversioun gëtt net|$1 Tëscheversioune ginn net}} gewisen.',

# Search results
'nextn' => 'nächst $1',

# Preferences page
'preferences'        => 'Preferenzen',
'mypreferences'      => 'Meng Preferenzen',
'prefs-edits'        => 'Zuel vun den Ännerungen:',
'prefsnologin'       => 'Net ugemeld',
'qbsettings-none'    => 'Keen',
'changepassword'     => 'Passwuert änneren',
'dateformat'         => 'Datumsformat',
'datedefault'        => 'Egal (Standard)',
'datetime'           => 'Datum an Auerzäit',
'math_unknown_error' => 'Onbekannte Feeler',
'math_lexing_error'  => "'Lexing'-Feeler",
'math_syntax_error'  => 'Syntaxfeeler',
'prefs-personal'     => 'Benotzerprofil',
'prefs-rc'           => 'Rezent Ännerungen',
'prefs-watchlist'    => 'Suivi-Lëscht',
'saveprefs'          => 'Späicheren',
'oldpassword'        => 'Aalt Passwuert:',
'newpassword'        => 'Neit Passwuert:',
'retypenew'          => 'Neit Passwuert (nachemol):',
'textboxsize'        => 'Änneren',
'columns'            => 'Kolonnen',
'contextlines'       => 'Zuel vun de Linnen:',
'contextchars'       => 'Kontextcharactère pro Linn:',
'recentchangesdays'  => 'Deeg déi an de Rezenten Ännerungen ugewise ginn:',
'recentchangescount' => 'Zuel vun Titelen bei de rezenten Ännerungen an den Neie Säiten:',
'timezonelegend'     => 'Zäitzon',
'timezonetext'       => "Gitt d'Zuel vun de Stonnen an, déi tëscht ärer Zäitzon an der Serverzäit (UTC) leien (A West- a Mëtteleuropa ass dat +1 Stonn am Wanter an +2 am Summer).",
'localtime'          => 'Lokalzäit:',
'servertime'         => 'Serverzäit:',
'allowemail'         => 'Emaile vun anere Benotzer kréien.',
'defaultns'          => 'Dës Nimmraim duerchsichen:',
'default'            => 'Standard',

# User rights
'editusergroup' => 'Benotzergruppen änneren',

'group-bot-member'        => 'Bot',
'group-sysop-member'      => 'Administrateur',
'group-bureaucrat-member' => 'Bürokrat',

'grouppage-bot'   => '{{ns:project}}:Botten',
'grouppage-sysop' => '{{ns:project}}:Administrateuren',

# Recent changes
'recentchanges'   => 'Rezent Ännerungen',
'rcshowhideminor' => 'Kleng Ännerungen $1',
'rcshowhidebots'  => 'Botten $1',
'rcshowhideliu'   => 'Ugemellte Benotzer $1',
'rcshowhidemine'  => 'Meng Ännerungen $1',
'diff'            => 'Ënnerscheed',
'newpageletter'   => 'N',

# Recent changes linked
'recentchangeslinked' => 'Ännerungen op verlinkte Säiten',

# Upload
'upload'            => 'Eroplueden',
'filedesc'          => 'Résumé',
'fileuploadsummary' => 'Résumé/Quell:',
'badfilename'       => 'Den Numm vum Fichier gouf an "$1" ëmgeännert.',
'emptyfile'         => 'De Fichier deen Dir eropgelueden hutt, schéngt eidel ze sinn. Dëst kann duerch en Tippfeeler am Numm vum Fichier kommen. Préift w.e.g. no, op Dir dëse Fichier wierklech eropluede wëllt.',
'savefile'          => 'Fichier späicheren',
'destfilename'      => 'Numm op der Wiki',
'watchthisupload'   => 'Dës Säit verfollegen',

# Image list
'byname'           => 'no Numm',
'bydate'           => 'no Datum',
'bysize'           => 'no Gréisst',
'filehist-comment' => 'Bemierkung',
'imagelist_name'   => 'Numm',
'imagelist_user'   => 'Benotzer',

# MIME search
'download' => 'eroflueden',

# Unused templates
'unusedtemplateswlh' => 'Aner Linken',

# Random page
'randompage' => 'Zoufallssäit',

# Statistics
'statistics'    => 'Statistik',
'userstats'     => 'Benotzerstatistik',
'sitestatstext' => "Et sinn am Ganzen '''\$1''' {{PLURAL:\$1|Artikel|Artikelen}} an der Datebank.
Dozou zielen d'\"Diskussiounssäiten\", Säiten iwwert {{SITENAME}}, kuerz Artikelen, Redirecten an anerer déi eventuell net als Artikele gezielt kënne ginn.

Déi ausgeschloss ginn et {{PLURAL:\$2|Artikel den|Artikelen déi}} als Artikel betruecht {{PLURAL:\$2|ka|kënne}} ginn. 

Am ganzen {{PLURAL:\$8|gouf '''1''' Fichier|goufen '''\$8''' Fichieren}} eropgelueden.

Am ganze gouf '''\$3''' {{PLURAL:\$3|Artikeloffro|Artikeloffroen}} ann '''\$4''' {{PLURAL:\$4|Artikelbearbechtung|Artikelbearbechtungen}} zënter datt {{SITENAME}} ageriicht gouf.
Doraus ergi sech '''\$5''' Bearbechtungen pro Artikel an '''\$6''' Artikeloffroen pro Bearbechtung.

Längt vun der [http://meta.wikimedia.org/wiki/Help:Job_queue „Job queue“]: '''\$7'''",

'disambiguations'     => 'Homonymie Säiten',
'disambiguationspage' => 'Template:Homonymie',

'doubleredirects'     => 'Duebel Redirecten',
'doubleredirectstext' => '<b>Opgepasst:</b> An dëser Lëscht kënne falsch Positiver stoen. Dat heescht meeschtens datt et nach Text zu de Linke vum éischte #REDIRECT gëtt.<br /> An all Rei sti Linken zum éischten an zweete Redirect, souwéi déi éischt Zeil vum Text vum zweete Redirect, wou normalerweis déi "richteg" Zilsäit drasteet, op déi den éischte Redirect hilinke soll.',

'brokenredirects'        => 'Futtise Redirect',
'brokenredirectstext'    => 'Folgend Redirects linken op Säiten déi et net gëtt.',
'brokenredirects-delete' => '(läschen)',

# Miscellaneous special pages
'nlinks'            => '$1 {{PLURAL:$1|Link|Linken}}',
'lonelypages'       => 'Weesesäiten',
'popularpages'      => 'Populär Säiten',
'allpages'          => 'All Säiten',
'deadendpages'      => 'Sakgaasse-Säiten',
'deadendpagestext'  => 'Dës Säite si mat kenger anerer Säit vun der Wiki verlinkt.',
'specialpages'      => 'Spezialsäiten',
'newpages-username' => 'Benotzernumm:',
'ancientpages'      => 'Al Säiten',
'move'              => 'Réckelen',

# Book sources
'booksources' => 'Bicherressourcen',

'categoriespagetext' => 'Et existéiere folgend Kategorien op {{SITENAME}}:',
'alphaindexline'     => '$1 bis $2',
'version'            => 'Versioun',

# Special:Log
'all-logs-page' => "All d'Logbicher",
'alllogstext'   => 'Dëst ass eng kombinéiert Lëscht vu [[Special:Log/block|Benotzerblockaden-]], [[Special:Log/protect|Säiteschutz-]], [[Special:Log/rights|Bürokraten-]], [[Special:Log/delete|Läsch-]], [[Special:Log/upload|Datei-]], [[Special:Log/move|Réckelen-]], [[Special:Log/newusers|Neiumellungs-]] a [[Special:Log/renameuser|Benotzerännerungs-]]Logbicher.',
'logempty'      => 'Näischt fonnt.',

# Special:Allpages
'nextpage'          => 'Nächst Säit ($1)',
'prevpage'          => 'Virescht Säit ($1)',
'allpagesfrom'      => 'Säite weisen, ugefaange mat:',
'allarticles'       => "All d'Artikelen",
'allinnamespace'    => "All d'Säiten ($1 Nummraum)",
'allnotinnamespace' => "All d'Säiten (net am $1 Nummraum)",
'allpagesprev'      => 'Virescht',
'allpagesnext'      => 'Nächst',
'allpagessubmit'    => 'Lass',
'allpagesprefix'    => 'Säite mat Präfix weisen:',
'allpagesbadtitle'  => 'Den Titel vun dëser Säit ass net valabel oder hat en Interwiki-Prefix. Et ka sinn datt een oder méi Zeechen drasinn, déi net an Titele benotzt kënne ginn.',
'allpages-bad-ns'   => 'De Nummraum „$1“ gëtt et net op {{SITENAME}}.',

# E-mail user
'emailuser'       => 'Dësem Benotzer eng Email schécken',
'emailpage'       => 'Dem Benotzer eng Email schécken',
'emailpagetext'   => 'Wann dëse Benotzer eng valid Email Adress a senge Preferenzen agestallt huet, kënnt Dir mat dësem Formulaire e Message schécken. Déi Email Adress déi dir an Äre Preferenzen aginn hutt, steet an der "From" Adress vun der Mail, sou datt den Destinataire Iech och äntwerte kann.',
'defemailsubject' => '{{SITENAME}}-E-Mail',
'noemailtitle'    => 'Keng E-Mail-Adress',
'emailfrom'       => 'Vum',
'emailto'         => 'Fir',
'emailsubject'    => 'Sujet',
'emailmessage'    => 'Message',
'emailsend'       => 'Schécken',
'emailccme'       => 'Eng E-mail-Kopie vum Message fir mech',
'emailsent'       => 'Email geschéckt',
'emailsenttext'   => 'Är Email gouf fortgeschéckt.',

# Watchlist
'watchlist'      => 'Meng Suivi-Lëscht',
'mywatchlist'    => 'Meng Suivi-Lëscht',
'addedwatch'     => "An d'Suivilëscht derbäigesat.",
'addedwatchtext' => "D'Säit \"\$1\" gouf bei är [[Special:Watchlist|Suivi-Lëscht]] bäigefügt. All weider Ännerungen op dëser Säit an/oder der Diskussiounssäit gin hei opgelëscht, an d'Säit gesäit '''fettgedréckt''' bei de [[Special:Recentchanges|rezenten Ännerungen]] aus fir se méi schnell erëmzefannen. <p>Wann dir dës Säit nëmmi verfollege wëllt, klickt op \"Nëmmi verfollegen\" op der Säit.",
'watch'          => 'Verfollegen',
'watchthispage'  => 'Dës Säit verfollegen',
'unwatch'        => 'Net méi verfollegen',

'enotif_newpagetext' => 'Dëst ass eng nei Säit.',
'changed'            => 'geännert',
'enotif_anon_editor' => 'Anonyme Benotzer $1',

# Delete/protect/revert
'deletepage'        => 'Läschungssäit',
'confirm'           => 'Konfirméieren',
'excontent'         => 'Inhalt wor:',
'excontentauthor'   => "Am Artikel stung: '$1' (An als eenzegen dru geschriwwen hat den '$2')",
'exbeforeblank'     => 'Den Inhalt virum Läsche wor:',
'exblank'           => "D'Säit wor eidel",
'confirmdelete'     => "Konfirméiert d'Läschen",
'deletesub'         => '("$1" gëtt geläscht)',
'confirmdeletetext' => "Dir sidd am Gaang, eng Säit mat hirem kompletten Historique vollstänneg aus der Datebank ze läschen. W.e.g. konfirméiert, datt Dir dëst wierklech wëllt, datt Dir d'Konsequenze verstitt, an datt dat Ganzt en accordance mat de [[Wikipedia:Administrators#Konsequenze vun engem Muechtmëssbrauch|Wikipediaregele]] geschitt.",
'actioncomplete'    => 'Aktioun ofgeschloss',
'deletedtext'       => '"$1" gouf geläscht. Kuckt $2 fir eng Lëscht vu rezent geläschte Säiten.',
'deletedarticle'    => '"$1" gouf geläscht',
'dellogpage'        => 'Läschungslog',
'dellogpagetext'    => 'Hei fannt dir eng Lëscht mat rezent geläschte Säiten. All Auerzäiten sinn déi vum Server (UTC).',
'deletionlog'       => 'Läschungslog',
'deletecomment'     => "Grond fir d'Läschen",
'cantrollback'      => 'Lescht Ännerung kann net zeréckgesat ginn. De leschten Auteur ass deen eenzegen Auteur vun dëser Säit.',
'alreadyrolled'     => 'Déi lescht Ännerung vun der Säit [[$1]] vum [[User:$2|$2]] ([[User talk:$2|Diskussioun]]) kann net zeréckgesat ginn; een Aneren huet dëst entweder scho gemaach oder nei Ännerungen agedroen. Lescht Ännerung vum [[User:$3|$3]] ([[User talk:$3|Diskussioun]]).',
'editcomment'       => 'Ännerungskommentar: "<i>$1</i>".', # only shown if there is an edit comment
'confirmprotect'    => "Konfirméiert d'Protectioun",

# Undelete
'undelete' => 'Geläschte Säit restauréieren',

# Namespace form on various pages
'namespace'      => 'Nummraum:',
'blanknamespace' => '(Haapt)',

# Contributions
'contributions' => 'Kontributiounen',
'mycontris'     => 'Meng Kontributiounen',

'sp-contributions-newbies'  => 'Nëmme Beiträg vun neie Mataarbechter weisen',
'sp-contributions-search'   => 'No Beiträg sichen',
'sp-contributions-username' => 'IP-Adress oder Benotzernumm:',
'sp-contributions-submit'   => 'Sichen',

# What links here
'whatlinkshere' => 'Linken op dës Säit',

# Block/unblock
'blockip'                     => 'Benotzer blockéieren',
'blockiptext'                 => 'Benotzt dës Form fir eng spezifesch IP Adress oder e Benotzernumm ze blockéieren. Dëst soll nëmmen am Fall vu Vandalismus gemaach ginn, en accordance mat der [[Wikipedia:Vandalismus|Wikipedia Policy]]. Gitt e spezifesche Grond un (zum Beispill Säite wou Vandalismus virgefall ass).',
'badipaddress'                => "D'IP-Adress huet dat falscht Format.",
'blockipsuccesssub'           => 'Blockage erfollegräich',
'blockipsuccesstext'          => "[[Special:Contributions/$1|$1]] gouf blockéiert. <br />Kuckt d'[[Special:Ipblocklist|IP block list]] fir all Blockage ze gesin.",
'blocklistline'               => '$1, $2 blockéiert $3 (gülteg bis $4)',
'anononlyblock'               => 'nëmmen anonym Benotzer',
'createaccountblock'          => 'Opmaache vu Benotzerkonte gespaart',
'blocklink'                   => 'blockéier',
'contribslink'                => 'Kontributiounen',
'autoblocker'                 => 'Dir sidd autoblockéiert well dir eng IP Adress mam "$1" deelt. Grond "$2".',
'blocklogpage'                => 'Block Log',
'blocklogentry'               => '"[[$1]]" blockéiert, gülteg bis $2',
'blocklogtext'                => "Dëst ass e Log vu Blockéieren an Deblockéieren. Automatesch blockéiert IP Adresse sinn hei net opgelëscht. Kuckt d'[[Special:Ipblocklist|IP block list]] fir déi aktuell Blockagen.",
'block-log-flags-anononly'    => 'Nëmmen anonym Benotzer',
'block-log-flags-noautoblock' => 'Autoblock deaktivéiert',

# Move page
'movepage'                => 'Säit réckelen',
'newtitle'                => 'Op neien Titel:',
'move-watch'              => 'Dës Säit verfollegen',
'articleexists'           => 'Eng Säit mat dësem Numm gëtt et schonns, oder den Numm deen Dir gewielt hutt gëtt net akzeptéiert. Wielt w.e.g. en aneren Numm.',
'1movedto2'               => '[[$1]] gouf op [[$2]] geréckelt',
'1movedto2_redir'         => '[[$1]] gouf op [[$2]] geréckelt, dobäi gouf eng Weiderleedung iwwerschriwwen.',
'delete_and_move'         => 'Läschen a réckelen',
'delete_and_move_text'    => '== Läsche vum Destinatiounsartikel néideg == Den Artikel "[[$1]]" existéiert schonn. Wëll der e läsche fir d\'Réckelen ze erméiglechen?',
'delete_and_move_confirm' => "Jo, läsch d'Destinatiounssäit",
'delete_and_move_reason'  => 'Geläscht fir Plaz ze maache fir eng Säit heihin ze réckelen',

# Export
'export'        => 'Säiten exportéieren',
'exporttext'    => "Dir kënnt den Text an den Historique vun enger bestëmmter Säit, oder engem Set vu Säiten, an XML agepak, exportéieren. An Zukunft kann dat dann an eng aner Wiki mat MediaWiki Software agedroë ginn, mee dat gëtt mat der aktueller Versioun nach net ënnerstëtzt. Fir en Artikel z'exportéieren, gitt den Titel an d'Textkëscht heidrënner an, een Titel pro Linn, a wielt aus op Dir nëmmen déi aktuell Versioun oder all Versioune mam ganzen Historique exportéiere wëllt. Wann nëmmen déi aktuell Versioun exportéiert soll ginn, kënnt Dir och e Link benotze wéi z.B [[{{ns:special}}:Export/{{Mediawiki:mainpage}}]] fir d'[[{{Mediawiki:mainpage}}]].",
'exportcuronly' => 'Nëmmen déi aktuell Versioun exportéieren an net de ganzen Historique',
'export-submit' => 'Exportéieren',
'export-addcat' => 'Derbäisetzen',

# Namespace 8 related
'allmessages'               => 'All Systemmessagen',
'allmessagesname'           => 'Numm',
'allmessagesdefault'        => 'Standardtext',
'allmessagescurrent'        => 'Aktuellen Text',
'allmessagestext'           => "Dëst ass eng Lëscht vun alle '''Messagen am MediaWiki:namespace''', déi vun der MediaWiki-Software benotzt ginn. Si kënnen nëmme vun [[Wikipedia:Administrators|Administratore]] geännert ginn.",
'allmessagesnotsupportedDB' => "'''Special:AllMessages''' gëtt den Ament net ënnertstëtzt well d'Datebank ''offline'' ass.",
'allmessagesfilter'         => 'Noriichtennummfilter:',
'allmessagesmodified'       => 'Nëmme geännert uweisen',

# Attribution
'anonymous'   => 'Anonym(e) Benotzer op {{SITENAME}}',
'creditspage' => 'Quellen',

# Spam protection
'categoryarticlecount' => 'An dëser Kategorie {{PLURAL:$1|gëtt et bis ewell 1 Artikel|ginn et bis ewell $1 Artikelen}}.',
'category-media-count' => 'Et {{PLURAL:$1|gëtt eng Datei|ginn $1 Dateien}} an dëser Kategorie',

# Image deletion
'deletedrevision' => 'Al Revisioun $1 läschen',

# Browsing diffs
'nextdiff' => 'Nächsten Ënnerscheed →',

# External editor support
'edit-externally'      => 'Dëse Fichier mat engem externe Programm veränneren',
'edit-externally-help' => "<small>Fir gewuer ze gi wéi dat genee geet liest d'[http://meta.wikimedia.org/wiki/Help:External_editors Installatiounsinstruktiounen].</small>",

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'all',
'imagelistall'     => 'all',
'watchlistall2'    => 'all',

# E-mail address confirmation
'confirmemail'            => 'Email-Adress bestätegen',
'confirmemail_text'       => "Ier der d'Email-Funktioune vun der {{SITENAME}} notze kënnt musst der als éischt är Email-Adress bestätegen. Dréckt w.e.g. de Knäppchen hei ënnendrënner fir eng Confirmatiouns-Email op déi Adress ze schécken déi der uginn hutt. An deer Email steet e Link mat engem Code, deen der dann an ärem Browser opmaache musst fir esou ze bestätegen, datt är Adress och wierklech existéiert a valabel ass.",
'confirmemail_send'       => 'Confirmatiouns-Email schécken',
'confirmemail_sent'       => 'Confirmatiouns-Email gouf geschéckt.',
'confirmemail_sendfailed' => "D'Confirmatiouns-Email konnt net verschéckt ginn. Iwwerpréift w.e.g. är Adress op keng ongëlteg Zeechen dran enthale sinn.",
'confirmemail_invalid'    => "Ongëltege Confirmatiounscode. Eventuell ass d'Gëltegkeetsdauer vum Code ofgelaf.",
'confirmemail_success'    => 'Är Email Address gouf konfirméiert. Där kënnt iech elo aloggen an a vollem Ëmfang vun der Wiki profitéiren.',
'confirmemail_loggedin'   => 'Är Email-Adress gouf elo confirméiert.',
'confirmemail_error'      => 'Et ass eppes falsch gelaf bäim Späichere vun ärer Confirmatioun.',
'confirmemail_subject'    => '{{SITENAME}} Email-Adress-Confirmatioun',
'confirmemail_body'       => 'E User, waarscheinlech där selwer, huet mat der IP Adress $1 de Benotzerkont "$2" um Site {{SITENAME}} opgemaach. Fir ze bestätegen, datt dee Kont iech wierklech gehéiert a fir d\'Email-Funktiounen um Site {{SITENAME}} z\'aktivéieren, maacht w.e.g. de folgende Link an ärem Browser op: $3 Sollt et sech net ëm äre Benotzerkont handelen, da maacht de Link *net* op. De Confirmatiounscode gëtt den $4 ongëlteg.',

# Delete conflict
'deletedwhileediting' => 'Opgepasst: Dës Säit gouf geläscht nodeems datt der ugefaangen hutt se ze änneren!',
'confirmrecreate'     => "De Benotzer [[User:$1|$1]] ([[User talk:$1|Diskussioun]]) huet dësen Artikel geläscht, nodeems datt där ugefaangen hutt drun ze schaffen. D'Begrënnung war: ''$2'' Bestätegt w.e.g., datt där dësen Artikel wierklich erëm nei opmaache wëllt.",

# AJAX search
'searchcontaining' => "No Artikelen siche mat ''$1''.",
'articletitles'    => "Artikelen ugefaange mat ''$1''",

# Auto-summaries
'autosumm-blank'   => 'All Inhalt vun der Säit gëtt geläscht',
'autosumm-replace' => "Säit gëtt ersat duerch '$1'",
'autoredircomment' => 'Virugeleet op [[$1]]',
'autosumm-new'     => 'Nei Säit: $1',

);
