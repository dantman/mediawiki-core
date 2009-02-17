<?php
/** Limburgish (Limburgs)
 *
 * @ingroup Language
 * @file
 *
 * @author Cicero
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Pahles
 * @author Remember the dot
 * @author Tibor
 * @author לערי ריינהארט
 */

$fallback = 'nl';


$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Speciaal',
	NS_MAIN           => '',
	NS_TALK           => 'Euverlèk',
	NS_USER           => 'Gebroeker',
	NS_USER_TALK      => 'Euverlèk_gebroeker',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => 'Euverlèk_$1',
	NS_FILE           => 'Plaetje',
	NS_FILE_TALK      => 'Euverlèk_plaetje',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'Euverlèk_MediaWiki',
	NS_TEMPLATE       => 'Sjabloon',
	NS_TEMPLATE_TALK  => 'Euverlèk_sjabloon',
	NS_HELP           => 'Help',
	NS_HELP_TALK      => 'Euverlèk_help',
	NS_CATEGORY       => 'Categorie',
	NS_CATEGORY_TALK  => 'Euverlèk_categorie'
);

$namespaceAliases = array(
	'Kategorie'           => NS_CATEGORY,
	'Euverlèk_kategorie'  => NS_CATEGORY_TALK,
	'Aafbeilding'         => NS_FILE,
	'Euverlèk_afbeelding' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Dobbel doorverwiezinge' ),
	'BrokenRedirects'           => array( 'Gebraoke doorverwiezinge' ),
	'Disambiguations'           => array( 'Verdudelikingspazjena\'s' ),
	'Userlogin'                 => array( 'Aanmelje' ),
	'Userlogout'                => array( 'Aafmelje' ),
	'CreateAccount'             => array( 'Gebroeker aonmake' ),
	'Preferences'               => array( 'Veurkäöre' ),
	'Watchlist'                 => array( 'Volglies' ),
	'Recentchanges'             => array( 'Lètste verangeringe' ),
	'Upload'                    => array( 'Uploade' ),
	'Listfiles'                 => array( 'Plaetjes' ),
	'Newimages'                 => array( 'Nuuj plaetjes' ),
	'Listusers'                 => array( 'Gebroekers' ),
	'Listgrouprights'           => array( 'Groepsrechte weergeve' ),
	'Statistics'                => array( 'Sjtatistieke' ),
	'Randompage'                => array( 'Willekäörig artikkel' ),
	'Lonelypages'               => array( 'Weispazjena\'s' ),
	'Uncategorizedpages'        => array( 'Óngecategoriseerde pazjena\'s' ),
	'Uncategorizedcategories'   => array( 'Óngecategoriseerde categorieë' ),
	'Uncategorizedimages'       => array( 'Óngecategoriseerde plaetjes' ),
	'Uncategorizedtemplates'    => array( 'Óngecategorisserde sjablone' ),
	'Unusedcategories'          => array( 'Óngebroekde categorieë' ),
	'Unusedimages'              => array( 'Óngebroekde plaetjes' ),
	'Wantedpages'               => array( 'Gewunsjde pazjena\'s' ),
	'Wantedcategories'          => array( 'Gewunsjde categorieë' ),
	'Wantedfiles'               => array( 'Gevraogde besjtande' ),
	'Wantedtemplates'           => array( 'Gevraogde sjablone' ),
	'Mostlinked'                => array( 'Meis gelinkde pazjena\'s' ),
	'Mostlinkedcategories'      => array( 'Meis gelinkde categorieë' ),
	'Mostlinkedtemplates'       => array( 'Meis gebroekde sjablone' ),
	'Mostimages'                => array( 'Meis gebroekde plaetjes' ),
	'Mostcategories'            => array( 'Meiste categorieë' ),
	'Mostrevisions'             => array( 'Meis bewirkde pazjena\'s' ),
	'Fewestrevisions'           => array( 'Winnigs bewirkde pazjena\'s' ),
	'Shortpages'                => array( 'Kórte pazjena\'s' ),
	'Longpages'                 => array( 'Lang pazjena\'s' ),
	'Newpages'                  => array( 'Nuuj pazjena\'s' ),
	'Ancientpages'              => array( 'Audste pazjena\'s' ),
	'Deadendpages'              => array( 'Doedloupende pazjena\'s' ),
	'Protectedpages'            => array( 'Beveiligde pazjena\'s' ),
	'Protectedtitles'           => array( 'Beveiligde titels' ),
	'Allpages'                  => array( 'Alle pazjena\'s' ),
	'Prefixindex'               => array( 'Alle artikele' ),
	'Ipblocklist'               => array( 'Geblokkeerde IP\'s' ),
	'Specialpages'              => array( 'Sjpeciaal pazjena\'s' ),
	'Contributions'             => array( 'Biedrage' ),
	'Emailuser'                 => array( 'E-maile' ),
	'Confirmemail'              => array( 'E-mail bevestige' ),
	'Whatlinkshere'             => array( 'Verwiezinge nao hie' ),
	'Recentchangeslinked'       => array( 'Verwante wiezinge' ),
	'Movepage'                  => array( 'Versjuve' ),
	'Blockme'                   => array( 'Blokkeer mich' ),
	'Booksources'               => array( 'Bookwinkele' ),
	'Categories'                => array( 'Categorieë' ),
	'Export'                    => array( 'Exportere' ),
	'Version'                   => array( 'Versie' ),
	'Allmessages'               => array( 'Alle berichte' ),
	'Log'                       => array( 'Logbeuk', 'Logbook' ),
	'Blockip'                   => array( 'Blokkere' ),
	'Undelete'                  => array( 'Hersjtèlle' ),
	'Import'                    => array( 'Importere' ),
	'Lockdb'                    => array( 'DB blokkere' ),
	'Unlockdb'                  => array( 'DB vriegaeve' ),
	'Userrights'                => array( 'Gebroekersrechte' ),
	'MIMEsearch'                => array( 'MIME zeuke' ),
	'FileDuplicateSearch'       => array( 'Bestandsduplicate zeuke' ),
	'Unwatchedpages'            => array( 'Neet-gevolgde pazjena\'s' ),
	'Listredirects'             => array( 'Doorverwiezinge' ),
	'Revisiondelete'            => array( 'Versie eweghaole' ),
	'Unusedtemplates'           => array( 'Óngebroekde sjablone' ),
	'Randomredirect'            => array( 'Willekäörige doorverwiezing' ),
	'Mypage'                    => array( 'Mien pazjena\'s' ),
	'Mytalk'                    => array( 'Mien euverlèk' ),
	'Mycontributions'           => array( 'Mien biedrage' ),
	'Listadmins'                => array( 'Systeemwèrkers' ),
	'Listbots'                  => array( 'Botlies' ),
	'Popularpages'              => array( 'Populair pazjena\'s' ),
	'Search'                    => array( 'Zeuke' ),
	'Resetpass'                 => array( 'Wachwaord opnuuj insjtèlle' ),
	'Withoutinterwiki'          => array( 'Gein interwiki' ),
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'M j, Y H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'j M Y H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'Y M j H:i',
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Links óngersjtriepe',
'tog-highlightbroken'         => 'Formatteer gebraoke links <a href="" class="new">op dees meneer</a> (angers: zoe<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Paragrafe oetvölle',
'tog-hideminor'               => 'Versjtaek klein bewirkinge bie recènte verangeringe',
'tog-extendwatchlist'         => 'Oetgebreide volglies',
'tog-usenewrc'                => 'Oetgebreide recènte vervangeringe (Javascript nudig)',
'tog-numberheadings'          => 'Köpkes automatisch nummere',
'tog-showtoolbar'             => 'Laot edit toolbar zeen',
'tog-editondblclick'          => "Bewirk pazjena's bie 'ne dobbelklik (JavaScript)",
'tog-editsection'             => 'Bewirke van secties via [bewirke] links',
'tog-editsectiononrightclick' => 'Sècties bewirke mit inne rechtermoesklik op sèctietitels (JavaScript)',
'tog-showtoc'                 => "Inhawdsopgaaf vuur pazjena's mit mië as 3 köpkes",
'tog-rememberpassword'        => "Wachwaord ónthauwe bie 't aafmèlde",
'tog-editwidth'               => 'Edit boks haet de vol breidte',
'tog-watchcreations'          => "Pazjena's die ich aanmaak automatisch volge",
'tog-watchdefault'            => "Voog pazjena's die se bewirks toe aan dien volglies",
'tog-watchmoves'              => "Pazjena's die ich verplaats automatisch volge",
'tog-watchdeletion'           => "Pazjena's die ich ewegsjaf automatisch volge",
'tog-minordefault'            => 'Merkeer sjtandaard alle bewirke as klein',
'tog-previewontop'            => 'Veurvertuin baove bewèrkingsveld tuine',
'tog-previewonfirst'          => 'Preview laote zien bie de iesjte bewirking',
'tog-nocache'                 => 'Pazjena cache oetzitte',
'tog-enotifwatchlistpages'    => "'ne E-mail nao mich verzende biej bewèrkinge van pazjena's op mien volglies",
'tog-enotifusertalkpages'     => "'ne E-mail nao mich verzende es emes mien euverlèkpazjena verangert",
'tog-enotifminoredits'        => "'ne E-mail nao mich verzende biej kleine bewèrkinge op pazjena's op mien volglies",
'tog-enotifrevealaddr'        => 'Mien e-mailadres tuine in e-mailberichte',
'tog-shownumberswatching'     => "'t Aantal gebroekers tuine die dees pazjena volg",
'tog-fancysig'                => 'Handjteikening zónger link nao dien gebroekerspazjena',
'tog-externaleditor'          => "Standaard 'ne externe teksbewèrker gebroeke (noer veur henkels, speciaal instellige zi'jn neudig)",
'tog-externaldiff'            => "Standaard 'n extern vergeliekingsprogramma gebroeke (noer veur henkels, speciaal instellige zi'jn neudig)",
'tog-showjumplinks'           => '"gank nao"-toegankelikheidslinks mäögelik make',
'tog-uselivepreview'          => '"live veurbesjouwing" gebroeke (vereis JavaScript - experimenteel)',
'tog-forceeditsummary'        => "'ne Meljing gaeve biej 'n laege samevatting",
'tog-watchlisthideown'        => 'Eige bewèrkinge verberge op mien volglies',
'tog-watchlisthidebots'       => 'Botbewèrkinge op mien volglies verberge',
'tog-watchlisthideminor'      => 'Kleine bewèrkinge op mien volglies verberge',
'tog-watchlisthideliu'        => 'Bewirkinge van aangemelde gebroekers op mien volglies versjtaeke',
'tog-watchlisthideanons'      => 'Bewirkinge van anonieme gebroekers op mien volglies versjtaeke',
'tog-nolangconversion'        => 'Variantconversie oetsjakele',
'tog-ccmeonemails'            => "'ne Kopie nao mich verzende van de e-mail dae ich nao anger gebroekers sjtuur",
'tog-diffonly'                => 'Pazjena-inhaud zónger verangeringe neet tuine',
'tog-showhiddencats'          => 'Verbórge categorië toeane',
'tog-norollbackdiff'          => 'Wieziginge eweglaote nao trökdrieje',

'underline-always'  => 'Altied',
'underline-never'   => 'Noets',
'underline-default' => 'Standaard van de browser',

# Dates
'sunday'        => 'zóndig',
'monday'        => 'maondig',
'tuesday'       => 'dinsdig',
'wednesday'     => 'goonsdig',
'thursday'      => 'donderdig',
'friday'        => 'vriedig',
'saturday'      => 'zaoterdig',
'sun'           => 'zón',
'mon'           => 'mao',
'tue'           => 'din',
'wed'           => 'woo',
'thu'           => 'dón',
'fri'           => 'vri',
'sat'           => 'zao',
'january'       => 'jannewarie',
'february'      => 'fibberwarie',
'march'         => 'miert',
'april'         => 'april',
'may_long'      => 'mei',
'june'          => 'juni',
'july'          => 'juli',
'august'        => 'augustus',
'september'     => 'september',
'october'       => 'oktober',
'november'      => 'november',
'december'      => 'december',
'january-gen'   => 'jannewarie',
'february-gen'  => 'fibberwarie',
'march-gen'     => 'miert',
'april-gen'     => 'april',
'may-gen'       => 'mei',
'june-gen'      => 'juni',
'july-gen'      => 'juli',
'august-gen'    => 'augustus',
'september-gen' => 'september',
'october-gen'   => 'oktober',
'november-gen'  => 'november',
'december-gen'  => 'december',
'jan'           => 'jan',
'feb'           => 'fib',
'mar'           => 'mie',
'apr'           => 'apr',
'may'           => 'mei',
'jun'           => 'jun',
'jul'           => 'jul',
'aug'           => 'aug',
'sep'           => 'sep',
'oct'           => 'okt',
'nov'           => 'nov',
'dec'           => 'dec',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Categorie|Categorieë}}',
'category_header'                => 'Artikele in categorie "$1"',
'subcategories'                  => 'Subcategorieë',
'category-media-header'          => 'Media in de categorie "$1"',
'category-empty'                 => "''Dees categorie bevat op 't memènt gein artikele of media.''",
'hidden-categories'              => 'Verbórge {{PLURAL:$1|categorie|categorië}}',
'hidden-category-category'       => 'Verbórge categorië', # Name of the category where hidden categories will be listed
'category-subcat-count'          => "{{PLURAL:$2|Dees categorie haet de volgende óngercategorie.|Dees categorie haet de volgende {{PLURAL:$1|óngercategorie|$1 óngercategorië}}, van 'n totaal van $2.}}",
'category-subcat-count-limited'  => 'Dees categorie haet de volgende {{PLURAL:$1|óngercategorie|$1 óngercategorië}}.',
'category-article-count'         => "{{PLURAL:$2|Dees categorie bevat de volgende pazjena.|Dees categorie bevat de volgende {{PLURAL:$1|pazjena|$1 pazjena's}}, van in totaal $2.}}",
'category-article-count-limited' => "Dees categorie bevat de volgende {{PLURAL:$1|pazjena|$1 pazjena's}}.",
'category-file-count'            => "{{PLURAL:$2|Dees categorie bevat 't volgende bestandj.|Dees categorie bevat {{PLURAL:$1|'t volgende bestandj|de volgende $1 bestenj}}, van in totaal $2.}}",
'category-file-count-limited'    => "Dees categorie bevat {{PLURAL:$1|'t volgende bestandj|de volgende $1 bestenj}}.",
'listingcontinuesabbrev'         => 'wiejer',

'mainpagetext'      => 'Wiki software succesvol geïnsjtalleerd.',
'mainpagedocfooter' => "Raodpleeg de [http://meta.wikimedia.org/wiki/NL_Help:Inhoudsopgave handjleiding] veur informatie euver 't gebroek van de wikisoftware.

== Mieë hölp ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lies mit instellinge]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki VGV (FAQ)]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce MediaWiki mailinglies veur nuuj versies]",

'about'          => 'Informatie',
'article'        => 'Contentpazjena',
'newwindow'      => '(in nuuj venster)',
'cancel'         => 'Aafbraeke',
'qbfind'         => 'Zeuke',
'qbbrowse'       => 'Bladere',
'qbedit'         => 'Bewirke',
'qbpageoptions'  => 'Pazjena-opties',
'qbpageinfo'     => 'Pazjena-informatie',
'qbmyoptions'    => 'mien opties',
'qbspecialpages' => "Speciaal pazjena's",
'moredotdotdot'  => 'Miè...',
'mypage'         => 'Mien gebroekerspazjena',
'mytalk'         => 'Mien euverlèkpazjena',
'anontalk'       => 'Euverlèk veur dit IP adres',
'navigation'     => 'Navegatie',
'and'            => '&#32;en',

# Metadata in edit box
'metadata_help' => 'Metadata:',

'errorpagetitle'    => 'Fout',
'returnto'          => 'Truuk nao $1.',
'tagline'           => 'Van {{SITENAME}}',
'help'              => 'Hulp',
'search'            => 'Zeuke',
'searchbutton'      => 'Zeuke',
'go'                => 'OK',
'searcharticle'     => 'Gao',
'history'           => 'Historie',
'history_short'     => 'Historie',
'updatedmarker'     => 'bewirk sins mien lètste bezeuk',
'info_short'        => 'Infermasie',
'printableversion'  => 'Printer-vruntelike versie',
'permalink'         => 'Permanente link',
'print'             => 'Aafdrukke',
'edit'              => 'Bewirk',
'create'            => 'Aanmake',
'editthispage'      => 'Pazjena bewirke',
'create-this-page'  => 'Dees pazjena aanmake',
'delete'            => 'Wisse',
'deletethispage'    => 'Wisse',
'undelete_short'    => '$1 {{PLURAL:$1|bewèrking|bewèrkinge}} trökplaatse',
'protect'           => 'Besjirm',
'protect_change'    => 'beveiligingssjtatus verangere',
'protectthispage'   => 'Beveilige',
'unprotect'         => 'vriegaeve',
'unprotectthispage' => 'Besjerming opheffe',
'newpage'           => 'Nuuj pazjena',
'talkpage'          => 'euverlèkpazjena',
'talkpagelinktext'  => 'Euverlèk',
'specialpage'       => 'Speciaal Pazjena',
'personaltools'     => 'Persoenlike hulpmiddele',
'postcomment'       => 'Nuuj sectie',
'articlepage'       => 'Artikel',
'talk'              => 'Euverlèk',
'views'             => 'Aspecte/acties',
'toolbox'           => 'Gereidsjapskis',
'userpage'          => 'gebroekerspazjena',
'projectpage'       => 'Projekpazjena tuine',
'imagepage'         => 'Besjtandjspagina betrachte',
'mediawikipage'     => 'Berichpazjena tuine',
'templatepage'      => 'Sjabloonblaad',
'viewhelppage'      => 'Hölppazjena tuine',
'categorypage'      => 'Categoriepazjena tuine',
'viewtalkpage'      => 'Bekiek euverlèk',
'otherlanguages'    => 'Anger tale',
'redirectedfrom'    => '(Doorverweze van $1)',
'redirectpagesub'   => 'Redirectpazjena',
'lastmodifiedat'    => "Dees pazjena is 't litst verangert op $2, $1.", # $1 date, $2 time
'viewcount'         => 'Dees pazjena is {{PLURAL:$1|1 kier|$1 kier}} bekeke.',
'protectedpage'     => 'Beveiligde pazjena',
'jumpto'            => 'Gank nao:',
'jumptonavigation'  => 'navigatie',
'jumptosearch'      => 'zeuke',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Euver {{SITENAME}}',
'aboutpage'            => 'Project:Info',
'copyright'            => 'De inhawd is besjikbaar ónger de $1.',
'copyrightpagename'    => '{{SITENAME}} auteursrechte',
'copyrightpage'        => '{{ns:project}}:Auteursrechte',
'currentevents'        => "In 't nuujs",
'currentevents-url'    => "Project:In 't nuujs",
'disclaimers'          => 'Aafwiezinge aansjprakelikheid',
'disclaimerpage'       => 'Project:Algemein aafwiezing aansjprakelikheid',
'edithelp'             => 'Hulp bie bewirke',
'edithelppage'         => 'Help:Instructies',
'faq'                  => 'VGV',
'faqpage'              => 'Project:Veulgestjilde vraoge',
'helppage'             => 'Help:Help',
'mainpage'             => 'Veurblaad',
'mainpage-description' => 'Veurblaad',
'policy-url'           => 'Project:Beleid',
'portal'               => 'Gebroekersportaol',
'portal-url'           => 'Project:Gebroekersportaol',
'privacy'              => 'Privacybeleid',
'privacypage'          => 'Project:Privacy_policy',

'badaccess'        => 'Toeganksfout',
'badaccess-group0' => 'Doe höbs gén rechte om de gevräögde hanjeling oet te veure.',
'badaccess-groups' => 'De gevraogde hanjeling is veurbehauwe aan gebroekers in {{PLURAL:$2|de gróp|ein van de gróppe}}: $1.',

'versionrequired'     => 'Versie $1 van MediaWiki is vereis',
'versionrequiredtext' => 'Versie $1 van MediaWiki is vereis om deze pazjena te gebroeke. Zee [[Special:Version|Softwareversie]]',

'ok'                      => 'ok',
'retrievedfrom'           => 'Aafkómstig van "$1"',
'youhavenewmessages'      => 'Doe höbs $1 ($2).',
'newmessageslink'         => 'nuuj berichte',
'newmessagesdifflink'     => 'Lèste verangering',
'youhavenewmessagesmulti' => 'Doe höbs nuje berichter op $1',
'editsection'             => 'bewirk',
'editold'                 => 'bewirke',
'viewsourceold'           => 'brónteks bekieke',
'editlink'                => 'bewirk',
'viewsourcelink'          => 'brónteks betrachte',
'editsectionhint'         => 'Deilpazjena bewèrke: $1',
'toc'                     => 'Inhawd',
'showtoc'                 => 'tuine',
'hidetoc'                 => 'verberg',
'thisisdeleted'           => '$1 bekieke of trökzètte?',
'viewdeleted'             => 'tuun $1?',
'restorelink'             => '{{PLURAL:$1|ein verwiederde versie|$1 verwiederde versies}}',
'feedlinks'               => 'Feed:',
'feed-invalid'            => 'Feedtype wörd neet ongersteund.',
'feed-unavailable'        => 'Syndicatiefeeds zeen neet besjikbaar op {{SITENAME}}',
'site-rss-feed'           => '$1 RSS-feed',
'site-atom-feed'          => '$1 Atom-feed',
'page-rss-feed'           => '“$1” RSS-feed',
'page-atom-feed'          => '“$1” Atom-feed',
'red-link-title'          => '$1 (pagina besteit neet)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Pazjena',
'nstab-user'      => 'Gebroeker',
'nstab-media'     => 'Mediapazjena',
'nstab-special'   => 'Speciaal pagina',
'nstab-project'   => 'Projekpazjena',
'nstab-image'     => 'Besjtandj',
'nstab-mediawiki' => 'Berich',
'nstab-template'  => 'Sjabloon',
'nstab-help'      => 'Help pazjena',
'nstab-category'  => 'Categorie',

# Main script and global functions
'nosuchaction'      => 'Gevräögde hanjeling besjteit neet',
'nosuchactiontext'  => 'De door de URL gespecifieerde handeling wordt neet herkend door de MediaWiki software',
'nosuchspecialpage' => "D'r besjteit gein speciaal pazjena mit deze naam",
'nospecialpagetext' => "Doe höbs 'ne speciale pazjena aangevräögd dae neet wörd herkind door de MediaWiki software",

# General errors
'error'                => 'Fout',
'databaseerror'        => 'Databasefout',
'dberrortext'          => 'Bie \'t zeuke is \'n syntaxfout in de database opgetreje.
Dit kint zien veroorzaak door \'n fout in de software.
De lètste zeukpoeging in de database waor:
<blockquote><tt>$1</tt></blockquote>
vanoet de functie "<tt>$2</tt>".
MySQL gaof de foutmèlling "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Dao is \'n syntaxfout opgetreje bie \'t zeuke in de database.
De lèste opgevraogde zeukactie waor:
"$1"
vanoet de functie "$2".
MySQL brach fout "$3" nao veure: "$4"',
'noconnect'            => 'De wiki óngervènjt technische meujelikhede en kan de database neet bereike.<br />
$1',
'nodb'                 => 'Selectie van database $1 neet mogelijk',
'cachederror'          => "Dit is 'n gearsjiveerde kopie van de gevraogde pazjena, en is mesjien neet gans actueel.",
'laggedslavemode'      => 'Waorsjuwing: De pazjena kin veraajerd zeen.',
'readonly'             => 'Database geblokkeerd',
'enterlockreason'      => "Gaef 'n rae veur de blokkering en wie lank 't dinkelik zal dore. De ingegaeve rae zal aan de gebroekers getuind waere.",
'readonlytext'         => 'De database van {{SITENAME}} is momenteel gesloten voor nieuwe bewerkingen en wijzigingen, waarschijnlijk voor bestandsonderhoud.
De verantwoordelijke systeembeheerder gaf hiervoor volgende reden op:
<p>$1',
'missing-article'      => "In de database is gein inhauwd aongetroffe veur de pazjena \"\$1\" die d'r wel zou mote zien (\$2).

Dit kin veurkómme as g'r 'n verauwerde verwiezing nao 't versjil tösje twee versies van ein pazjena volg of 'n versie opvraog die is eweggesjaf.

Es dit neet 't geval is, hebt g'r wellich 'n fout in de software gevónje.
Maak hievan melding bie 'ne systeembeheerder van {{SITENAME}} en vermeld daobie de URL van dees pazjena.",
'missingarticle-rev'   => '(versienummer: $1)',
'missingarticle-diff'  => '(Wijziging: $1, $2)',
'readonly_lag'         => 'De database is automatisch vergrendeld wiele de slave databaseservers synchronisere mèt de master.',
'internalerror'        => 'Interne fout',
'internalerror_info'   => 'Interne fout: $1',
'filecopyerror'        => 'Besjtand "$1" nao "$2" kopiëre neet mugelik.',
'filerenameerror'      => 'Verangere van de titel van \'t besjtand "$1" in "$2" neet meugelik.',
'filedeleteerror'      => 'Kos bestjand "$1" neet weghaole.',
'directorycreateerror' => 'Map "$1" kòs neet aangemaak waere.',
'filenotfound'         => 'Kos bestjand "$1" neet vinge.',
'fileexistserror'      => 'Sjrijve nao bestandj "$1" woor neet meugelik: \'t bestandj besjteit al',
'unexpected'           => 'Onverwachte waarde: "$1"="$2".',
'formerror'            => 'Fout: kos formeleer neet verzende',
'badarticleerror'      => 'Dees hanjeling kint neet weure oetgeveurd op dees pazjena.',
'cannotdelete'         => 'Kós de pazjena of aafbeilding neet wisse.',
'badtitle'             => 'Óngeljige pazjenatitel',
'badtitletext'         => 'De opgevraogde pazjena is neet besjikbaar of laeg.',
'perfcached'           => 'De volgende data is gecachet en is mesjien neet gans up to date:',
'perfcachedts'         => "De getuunde gegaeves komme oet 'n cache en zeen veur 't letst biejgewèrk op $1.",
'querypage-no-updates' => "Deze pazjena kin op 't memènt neet biejgewèrk waere. Deze gegaeves waere neet vervèrs.",
'wrong_wfQuery_params' => 'Verkeerde paramaeters veur wfQuery()<br />
Funksie: $1<br />
Query: $2',
'viewsource'           => 'Bekiek brónteks',
'viewsourcefor'        => 'van $1',
'actionthrottled'      => 'Hanjeling taegegehaje',
'actionthrottledtext'  => "Es maotregel taege spam is 't aantal keer per tiedseinheid dets te dees hanjeling kèns verrichte beperk. De höbs de limiet euversjreje. Perbeer 't euver 'n aantal minute obbenuuj.",
'protectedpagetext'    => 'Dees pazjena is beveilig. Bewirke is neet meugelik.',
'viewsourcetext'       => 'De kèns de brónteks van dees pazjena bekieke en kopiëre:',
'protectedinterface'   => 'Deze pazjena bevat teks veur berichte van de software en is beveilig om misbroek te veurkomme.',
'editinginterface'     => "'''Waarsjoewing:''' Doe bewirks 'n pazjena die gebroek waert door de software. Bewirkinge op dees pazjena beïnvlode de gebroekersinterface van ederein. Euverwaeg veur vertalinge óm [http://translatewiki.net/wiki/Main_Page?setlang=nl Betawiki] te gebroeke, 't vertalingsprojek veur MediaWiki.",
'sqlhidden'            => '(SQL query verborge)',
'cascadeprotected'     => "Deze pazjena kin neet bewèrk waere, omdet dae is opgenaome in de volgende {{PLURAL:$1|pazjena|pazjena's}} die beveilig {{PLURAL:$1|is|zeen}} mèt de kaskaad-optie:
$2",
'namespaceprotected'   => "Doe höbs gén rechte om pazjena's in de naamruumde '''$1''' te bewèrke.",
'customcssjsprotected' => "De kèns dees pazjena neet bewirke ómdet die persuunlike insjtèllinge van 'ne angere gebroeker bevat.",
'ns-specialprotected'  => 'Pazjena\'s in de naamruumde "{{ns:special}}" kinne neet bewèrk waere.',
'titleprotected'       => "'t aanmake van deze pagina is beveilig door [[User:$1|$1]].
De gegaeve ree is ''$2''.",

# Virus scanner
'virus-badscanner'     => "Slechte configuratie: onbekenge virusscanner: ''$1''",
'virus-scanfailed'     => 'scanne is mislukt (code $1)',
'virus-unknownscanner' => 'onbekeng antivirus:',

# Login and logout pages
'logouttitle'                => 'Aafmèlde gebroeker',
'logouttext'                 => 'De bis noe aafgemèld. De kins {{SITENAME}} noe anoniem (mit vermèlding van IP adres) gebroeke, of opnuui aanmèlde onger dezelfde of ein anger naam.',
'welcomecreation'            => '<h2>Wilkóm, $1!</h2><p>Dien gebroekersprofiel is vaerdig. De kins noe dien persuunlike veurkäöre insjtèlle.',
'loginpagetitle'             => 'gebroekersnaam',
'yourname'                   => 'Diene gebroekersnaam',
'yourpassword'               => 'Die wachwaord',
'yourpasswordagain'          => 'Wachwaord opnuuj intype',
'remembermypassword'         => 'Mien wachwaord onthouwe veur later sessies.',
'yourdomainname'             => 'Die domein',
'externaldberror'            => "d'r Is 'n fout opgetraoje biej 't aanmelje biej de database of doe höbs gén toesjtömming diene externe gebroeker biej te wèrke.",
'login'                      => 'Aanmèlde',
'nav-login-createaccount'    => 'Aanmèlde',
'loginprompt'                => "Diene browser mót ''cookies'' acceptere óm in te logge op {{SITENAME}}.",
'userlogin'                  => 'Aanmèlde',
'logout'                     => 'Aafmèlde',
'userlogout'                 => 'Aafmèlde',
'notloggedin'                => 'Neet aangemeld',
'nologin'                    => 'Höbs te nog geine gebroekersnaam? $1.',
'nologinlink'                => "Maak 'ne gebroekersnaam aan",
'createaccount'              => 'Nuuj gebroekersprofiel aanmake.',
'gotaccount'                 => "Höbs te al 'ne gebroekersnaam? $1.",
'gotaccountlink'             => 'Inlogge',
'createaccountmail'          => 'via de e-mail',
'badretype'                  => 'De ingeveurde wachwäörd versjille vanein.',
'userexists'                 => "De gebroekersnaam dae se höbs ingeveurd weurt al gebroek.<br />Kees estebleef 'ne angere naam.",
'youremail'                  => 'Dien e-mailadres',
'username'                   => 'Gebroekersnaam:',
'uid'                        => 'Gebroekersnómmer:',
'prefs-memberingroups'       => 'Lid van {{PLURAL:$1|gróp|gróppe}}:',
'yourrealname'               => 'Dienen echte naam*',
'yourlanguage'               => 'Taal van de gebroekersinterface',
'yournick'                   => "Diene bienaam (veur ''handjteikeninge'')",
'badsig'                     => 'Óngeljige roew handjteikening; zuug de HTML-tags nao.',
'badsiglength'               => "De biejnaam is te lank.
't {{PLURAL:$1|Maag slèchs ein karakter zeen|Mót óngere $1 karaktere zeen}}.",
'email'                      => 'E-mail',
'prefs-help-realname'        => '* Echte naam (opsjeneel): esse deze opgufs kin deze naam gebroek waere om dich erkinning te gaeve veur dien wèrk.',
'loginerror'                 => 'Inlogfout',
'prefs-help-email'           => 'E-mail (optioneel): Hiedoor kan me contak mit diech opnumme zónger dats te dien identiteit hoofs vrie te gaeve.',
'prefs-help-email-required'  => "Hiej veur is 'n e-mailadres neudig.",
'nocookiesnew'               => "De gebroeker is aangemaak mèr neet aangemeld. {{SITENAME}} gebroek cookies veur 't aanmelje van gebroekers. Sjakel die a.u.b. in en meld dao nao aan mèt diene nuje gebroekersnaam en wachwaord.",
'nocookieslogin'             => "{{SITENAME}} gebroek cookies veur 't aanmelje van gebroekers. Doe accepteers gén cookies. Sjakel deze optie a.u.b. in en perbeer 't oppernuuj.",
'noname'                     => "De mos 'n gebroekersnaam opgaeve.",
'loginsuccesstitle'          => 'Aanmèlde geluk.',
'loginsuccess'               => 'De bis noe es "$1" aangemèld bie {{SITENAME}}.',
'nosuchuser'                 => 'D\'r besjteit geine gebroeker mit de naam "$1".
Controleer dien spelling, of gebroek ongersjtaond formuleer om \'n nuuj gebroekersprofiel aan te make.',
'nosuchusershort'            => 'De gebroeker "<nowiki>$1</nowiki>" besjteit neet. Konterleer de sjriefwieze.',
'nouserspecified'            => "Doe deens 'ne gebroekersnaam op te gaeve.",
'wrongpassword'              => "'t Ingegaeve wachwaord is neet zjus. Perbeer 't obbenuujts.",
'wrongpasswordempty'         => "'t Ingegaeve wachwoord waor laeg. Perbeer 't obbenuujts.",
'passwordtooshort'           => "Dien wachwaord is te kort. 't Mót minstes oet {{PLURAL:$1|1 teike|$1 teikes}} besjtaon.",
'mailmypassword'             => "Sjik mich 'n nuuj wachwaord",
'passwordremindertitle'      => 'Nuuj tiedelik wachwaord van {{SITENAME}}',
'passwordremindertext'       => 'Emes (waorsjienlik dich zelf) haet vanaaf IP-adres $1 \'n nuuj wachwoord veur {{SITENAME}} ($4) verzoch. \'t Nuuj wachwoord veur gebroeker "$2" is "$3". Es dat dien bedoeling waor, mèl diech daan noe aan en kees \'n nuuj wachwoord. \'t Tiedelik wachwoord verluip euver {{PLURAL:$5|$5 daag|$5 daag}}.

Es emes anders dit verzeuk heet gedoon, of wens te diech dien wachwoord weer herinners en \'t neet mie wèls wiezige, negeer dan dit berich en blief dien aud wachwoord gebroeke.',
'noemail'                    => 'D\'r is gein geregistreerd e-mailadres veur "$1".',
'passwordsent'               => 'D\'r is \'n nuui wachwaord verzonde nao \'t e-mailadres dat geregistreerd sjtit veur "$1".
Gelieve na ontvangst opnieuw aan te melden.',
'blocked-mailpassword'       => "Dien IP-adres is geblokkeerd veur 't make van verangeringe. Om misbroek te veurkomme is 't neet meugelik om 'n nuuj wachwaord aan te vraoge.",
'eauthentsent'               => "Dao is 'ne bevèstigingse-mail nao 't genomineerd e-mailadres gesjik.
Iedat anger mail nao dat account versjik kan weure, mós te de insjtructies in daen e-mail volge,
óm te bevèstige dat dit wirkelik dien account is.",
'throttled-mailpassword'     => "'n Wachwaordherinnering wörd gedurende de letste {{PLURAL:$1|1 oer|$1 oer}} verzönje. Om misbroek te veurkomme, wörd d'r sjlechs éin herinnering per {{PLURAL:$1|oer|$1 oer}} verzönje.",
'mailerror'                  => "Fout bie 't versjture van mail: $1",
'acct_creation_throttle_hit' => "Sorry, de höbs al $1 accounts aangemak. De kins d'r gein mië aanmake.",
'emailauthenticated'         => 'Dien e-mailadres is op $2 um $3 bevestig.',
'emailnotauthenticated'      => 'Dien e-mailadres is nog neet geauthentiseerd. De zals gein
e-mail óntvange veur alle volgende toepassinge.',
'noemailprefs'               => "Gaef 'n e-mailadres op om deze functies te gebroeke.",
'emailconfirmlink'           => 'Bevèstig dien e-mailadres',
'invalidemailaddress'        => "'t E-mailadres is neet geaccepteerd omdet 't 'n ongeldige opmaak haet. Gaef a.u.b. 'n geldig e-mailadres op of laot 't veld laeg.",
'accountcreated'             => 'Gebroeker aangemaak',
'accountcreatedtext'         => 'De gebroeker $1 is aangemaak.',
'createaccount-title'        => 'Gebroekers aanmake veur {{SITENAME}}',
'createaccount-text'         => 'Emes genaamp "$2" haet \'ne gebroeker veur $2 aangemaak op {{SITENAME}}
($4) mit \'t wachwaord "$3". Meld dich aan en wiezig dien wachwaord.

Negeer dit berich as deze gebroeker zonger dien medewete is aangemaak.',
'login-throttled'            => "Doe höbs te huifig geperbeerd aan te melje mèt 'n verkierd wachwaord.
Doe mós effe wachte ierdets te 't obbenuuts kens perbere.",
'loginlanguagelabel'         => 'Taol: $1',

# Password reset dialog
'resetpass'                 => 'Wachwaord obbenuuts insjtèlle',
'resetpass_announce'        => "Doe bös aangemeld mèt 'ne tiejdelikke code dae per e-mail is toegezönje. Veur 'n nuuj wachwaord in om 't aanmelje te voltooie:",
'resetpass_header'          => 'Wachwaord obbenuuts insjtèlle',
'oldpassword'               => 'Hujig wachwaord',
'newpassword'               => 'Nuuj wachwaord',
'retypenew'                 => "Veur 't nuuj wachwaord nogins in",
'resetpass_submit'          => 'Wachwaord instelle en aanmelje',
'resetpass_success'         => 'Dien wachwaord is verangerd. Bezig mèt aanmelje...',
'resetpass_bad_temporary'   => "Ongeldig tiejdelik wachwaord. Doe höbs dien wachwaord al verangerd of 'n nuuj tiejdelik wachwaord aangevräög.",
'resetpass_forbidden'       => 'Wachwäörd kónne neet verangerd waere op {{SITENAME}}',
'resetpass-no-info'         => 'Doe moos aangemeld zien ierdets doe dees pagina gebroeke kens.',
'resetpass-submit-loggedin' => 'Wachwaord wiezige',
'resetpass-wrong-oldpass'   => "'t Hujig of tiedelik wachwaord is ongeljig.
Meugelik höbs doe dien wachwaord al gewiezig of 'n nuuj tiedelik wachwaord aangevraog.",
'resetpass-temp-password'   => 'Tiedelik wachwaord:',

# Edit page toolbar
'bold_sample'     => 'Vètten teks',
'bold_tip'        => 'Vetten teks',
'italic_sample'   => 'Sjuunsen tèks',
'italic_tip'      => 'Sjuunsen tèks',
'link_sample'     => 'Link titel',
'link_tip'        => 'Interne link',
'extlink_sample'  => 'http://www.example.com link titel',
'extlink_tip'     => 'Extern link (mit de http:// prefix)',
'headline_sample' => 'Deilongerwerp',
'headline_tip'    => 'Tusseköpske (hoogste niveau)',
'math_sample'     => 'Veur de formule in',
'math_tip'        => 'Wiskóndige formule (LaTeX)',
'nowiki_sample'   => 'Veur hiej de neet op te make teks in',
'nowiki_tip'      => 'Verloup wiki-opmaak',
'image_tip'       => 'Mediabesjtandj',
'media_tip'       => 'Link nao bestandj',
'sig_tip'         => 'Dien handjteikening mit datum en tied',
'hr_tip'          => 'Horizontaal lien (gebroek spaarzaam)',

# Edit pages
'summary'                          => 'Samevatting:',
'subject'                          => 'Ongerwerp/kop:',
'minoredit'                        => "Dit is 'n klein verangering",
'watchthis'                        => 'Volg dees pazjena',
'savearticle'                      => 'Pazjena opsjlaon',
'preview'                          => 'Naokieke',
'showpreview'                      => 'Bekiek dees bewirking',
'showlivepreview'                  => 'Bewèrking ter controle tuine',
'showdiff'                         => 'Toen verangeringe',
'anoneditwarning'                  => 'Doe bis neet aangemeld. Dien IP adres weurt opgesjlage in de historie van dees pazjena.',
'missingsummary'                   => "'''Herinnering:''' Doe höbs gén samevatting opgegaeve veur dien bewèrking. Esse nogmaals op ''Pazjena opslaon'' kliks wörd de bewèrking zonger samevatting opgeslage.",
'missingcommenttext'               => 'Plaats dien opmèrking hiej onger, a.u.b.',
'missingcommentheader'             => "'''Let op:''' Doe höbs gén ongerwerp/kop veur deze opmèrking opgegaeve. Esse oppernuuj op \"opslaon\" kliks, wörd dien verangering zonger ongerwerp/kop opgeslage.",
'summary-preview'                  => 'Naokieke samevatting:',
'subject-preview'                  => 'Naokieke ongerwerp/kop:',
'blockedtitle'                     => 'Gebroeker is geblokkeerd',
'blockedtext'                      => "<big>'''Dien gebroekersaccount of IP-adres is geblokkeerd.'''</big>

De blokkade is oetgeveurd door $1. De opgegaeve raej is ''$2''.

* Aanvang blokkade: $8
* Ènj blokkade: $6
* Bedoeld te blokkere: $7

De kèns contak opnumme mit $1 of 'ne angere [[{{MediaWiki:Grouppage-sysop}}|systeemwèrker]] óm de blokkade te besjpraeke.
De kèns gein gebroek make van de functie 'e-mail deze gebroeker', behauve es te 'n geldig e-mailadres höbs opgegaeve in dien [[Special:Preferences|veurkäöre]] en 't gebroek van deze fónksie neet geblokkeerd is.
Dien hujig IP-adres is $3 en 't nómmer van de blokkade is #$5. Vermeld beide gegaeves wens te örges op dees blokkade reageers.",
'autoblockedtext'                  => "Dien IP-adres is automatisch geblokkeerd omdet 't gebroek is door 'ne gebroeker, dae is geblokkeerd door $1.
De opgegaeve reje is:

:''$2''

* Aanvang blokkade: $8
* Einde blokkade: $6

Doe kins deze blokkaasj bespraeke mèt $1 of 'ne angere [[{{MediaWiki:Grouppage-sysop}}|beheerder]]. Doe kins gén gebroek make van de functie 'e-mail deze gebroeker', tenzijse 'n geldig e-mailadres opgegaeve höbs in dien [[Special:Preferences|veurkeure]] en 't gebroek van deze functie neet is geblokkeerd.

Dien nömmer vanne blokkaasj is #$5.
Vermeld das esse örges euver deze blokkaasj reageers.",
'blockednoreason'                  => 'geine ree opgegaeve',
'blockedoriginalsource'            => "Hiej onger stuit de bronteks van '''$1''':",
'blockededitsource'                => "Hiej onger stuit de teks van '''dien bewèrkinge''' aan '''$1''':",
'whitelistedittitle'               => 'Geer mót óch inlogke óm te bewirke',
'whitelistedittext'                => 'Geer mót uch $1 óm pajzená te bewirke.',
'confirmedittitle'                 => 'E-mailbevestiging is verplich veurdets te kèns bewirke',
'confirmedittext'                  => "De mós dien e-mailadres bevestige veurdats te kèns bewirke.
Veur dien e-mailadres in en bevestig 'm bie [[Special:Preferences|dien veurkäöre]].",
'nosuchsectiontitle'               => 'Deze subkop bestuit neet',
'nosuchsectiontext'                => "Doe probeers 'ne subkop te bewirke dae neet besjtuit. Ómdet subkop $1 neet besjtuit, kin dien bewirking ouch neet waere opgesjlage.",
'loginreqtitle'                    => 'Aanmelje verplich',
'loginreqlink'                     => 'inglogge',
'loginreqpagetext'                 => "De mos $1 om anger pazjena's te bekieke.",
'accmailtitle'                     => 'Wachwaord versjtuurd.',
'accmailtext'                      => "'t Wachwaord veur '$1' is nao $2 versjtuurd.",
'newarticle'                       => '(Nuuj)',
'newarticletext'                   => "De höbs 'ne link gevolg nao 'n pazjena die nog neet besjteit.
Type in de box hiejónger óm de pazjena te beginne (zuug de [[{{MediaWiki:Helppage}}|helppazjena]] veur mie informatie).
Es te hie per óngelök terech bis gekómme, klik dan op de '''trök'''-knóp van diene browser.",
'anontalkpagetext'                 => "----''Dit is de euverlèkpazjena veur 'ne anonieme gebroeker dae nog gein account haet aangemaak of dae 't neet gebroek. Daoveur gebroeke v'r 't IP-adres óm de gebroeker te identificere. Dat adres kan waere gedeild doer mierdere gebroekers. Es te 'ne anonieme gebroeker bis en de höbs 't geveul dat 'r ónrelevante commentare aan dich gerich zeen, kèns te 't bèste [[Special:UserLogin|'n account crëere of inlogge]] óm toekomstige verwarring mit anger anoniem gebroekers te veurkomme.''",
'noarticletext'                    => 'Dees pagina bevat gein teks.
De kèns [[Speciaal:Zeuke/{{PAGENAME}}|nao deze term zeuke]] in anger pagina\'s of <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} dees pagina bewirke]</span>.',
'userpage-userdoesnotexist'        => 'Doe bewirks \'n gebroekerspazjena van \'ne gebroeker dae neet besjteit (gebroeker "$1"). Controlere ofs doe dees pazjena waal wils aanmake/bewirke.',
'clearyourcache'                   => "'''Lèt op:''' Nao 't opsjlaon mós te diene browserbuffer wisse óm de verangeringe te zeen: '''Mozilla:''' klik ''Reload'' (of ''Ctrl-R''), '''Firefox / IE / Opera:''' ''Ctrl-F5'', '''Safari:''' ''Cmd-R'', '''Konqueror''' ''Ctrl-R''.",
'usercssjsyoucanpreview'           => "'''Tip:''' Gebroek de knóp 'Bekiek dees bewirking' om dien nuuj CSS/JS te teste veurdets te opsjleis.",
'usercsspreview'                   => "'''Dit is allein 'n veurvertuun van dien perseunlike css, deze is neet opgeslage!'''",
'userjspreview'                    => "'''Let op: doe tes noe dien perseunlik JavaScript. De pazjena is neet opgeslage!'''",
'userinvalidcssjstitle'            => "'''Waorsjuwing:''' d'r is geine skin \"\$1\". Let op: dien eige .css- en .js-pazjena's beginne mèt  'ne kleine letter, bijveurbeeld {{ns:user}}:Naam/monobook.css in plaats van {{ns:user}}:Naam/Monobook.css.",
'updated'                          => '(Biegewèrk)',
'note'                             => "'''Opmirking:'''",
'previewnote'                      => "'''Lèt op: dit is 'n controlepazjena; dien tèks is nog neet opgesjlage!'''",
'previewconflict'                  => "Dees versie toent wie de tèks in 't bôvesjte vèld oet git zeen es e zouws opsjlaon.",
'session_fail_preview'             => "'''Sorry! Dien bewerking is neet verwerkt omdat sessiegegevens verlaore zeen gegaon.
Probeer 't opnieuw. Als 't dan nog neet lukt, meldt dich dan aaf en weer aan.'''",
'session_fail_preview_html'        => "'''Sorry! Dien bewerking is neet verwerk omdat sessiegegevens verlaore zeen gegaon.'''

''Omdat in deze wiki ruwe HTML is ingesjakeld, is 'n voorvertoning neet meugelik als bescherming taege aanvalle met JavaScript.''

'''Als dit een legitieme bewerking is, probeer 't dan opnieuw. Als 't dan nog neet lukt, meldt dich dan aaf en weer aan.'''",
'token_suffix_mismatch'            => "'''Dien bewerking is geweigerd omdat dien client de laesteikes in 't bewerkingstoken onjuist haet behandeld. De bewerking is geweigerd om verminking van de paginateks te veurkomme. Dit gebeurt soms es d'r een webgebaseerde proxydienst wurt gebroek die foute bevat.'''",
'editing'                          => 'Bewirkingspazjena: $1',
'editingsection'                   => 'Bewirke van sectie van $1',
'editingcomment'                   => 'Bewirk $1 (commentair)',
'editconflict'                     => 'Bewirkingsconflik: $1',
'explainconflict'                  => "Jemes angers haet dees pazjena verangerd naodats doe aan dees bewirking bis begos.
't Ierste teksveld tuint de hujige versie van de pazjena.
De mós dien eige verangeringe dao-in inpasse.
'''Allein''' d'n tèks in 't ierste teksveld weurt opgesjlage wens te noe op \"Pazjena opsjlaon\" duujs.",
'yourtext'                         => 'Euren teks',
'storedversion'                    => 'Opgesjlage versie',
'nonunicodebrowser'                => "'''WAARSJUWING: Diene browser is voldit neet aan de unicode sjtandaarde, gebroek estebleef inne angere browser veurdas e artikele gis bewirke.'''",
'editingold'                       => "'''WAARSJUWING: De bis 'n aw versie van dees pazjena aan 't bewirke. Es e dees bewirking opjsleis, gaon alle verangeringe die na dees versie zien aangebrach verlore.'''",
'yourdiff'                         => 'Verangeringe',
'copyrightwarning'                 => "Opgelèt: Alle biedrage aan {{SITENAME}} weure geach te zeen vriegegaeve ónger de $2 (zuug $1 veur details). Wens te neet wils dat dienen teks door angere bewirk en versjpreid weurt, kees dan neet veur 'Pazjena opsjlaon'.<br /> Hiebie belaofs te ós ouch dats te dees teks zelf höbs gesjreve, of höbs euvergenómme oet 'n vriej, openbaar brón.<br /> '''GEBROEK GEI MATERIAAL DAT BESJIRMP WEURT DOOR AUTEURSRECH, BEHAUVE WENS TE DAO TOESJTÖMMING VEUR HÖBS!'''",
'copyrightwarning2'                => "Mèrk op dat alle biedrages aan {{SITENAME}} kinne weure verangerd, aangepas of weggehaold door anger luuj. As te neet wils dat dienen tèks zoemer kint weure aangepas mós te 't hie neet plaatsje.<br />
De beluifs ós ouch dats te dezen tèks zelf höbs gesjreve, of gekopieerd van 'n brón in 't publiek domein of get vergliekbaars (zuug $1 veur details).
'''HIE GEIN AUTEURSRECHTELIK BESJIRMP WERK ZÓNGER TOESJTUMMING!'''",
'longpagewarning'                  => "WAARSJOEWING: Dees pazjena is $1 kilobytes lank; 'n aantal browsers kint probleme höbbe mit 't verangere van pazjena's in de buurt van of groeter es 32 kB. Kiek ofs te sjtökker van de pazjena mesjiens kins verplaatse nao 'n nuuj pazjena.",
'longpageerror'                    => "'''ERROR: De teks diese höbs toegevoegd haet is $1 kilobyte
groot, wat groter is dan 't maximum van $2 kilobyte. Opslaon is neet meugelik.'''",
'readonlywarning'                  => "WAARSJUWING: De database is vasgezèt veur ongerhoud, dus op 't mement kins e dien verangeringe neet opsjlaon. De kins dien tèks 't biste opsjlaon in 'n tèksbesjtand om 't later hie nog es te prebere.",
'protectedpagewarning'             => 'WAARSJUWING:  Dees pazjena is besjermd zoedat ze allein doer gebroekers mit administratorrechte kint weure verangerd.',
'semiprotectedpagewarning'         => "'''Let op:''' Deze pagina is beveilig en kin allein door geregistreerde gebroekers bewerk waere.",
'cascadeprotectedwarning'          => "'''Waarschuwing:''' Deze pagina is beveilig en kin allein door beheerders bewerk waere, omdat deze is opgenaome in de volgende {{PLURAL:$1|pagina|pagina's}} {{PLURAL:$1|dae|die}} beveilig {{PLURAL:$1|is|zeen}} met de cascade-optie:",
'titleprotectedwarning'            => "'''WAORSJUWING: Deze pagina is beveilig zodet allein inkele gebroekers 'm kinne aanmake.'''",
'templatesused'                    => 'Sjablone gebroek in dees pazjena:',
'templatesusedpreview'             => 'Sjablone gebroek in deze veurvertuning:',
'templatesusedsection'             => 'Sjablone die gebroek waere in deze subkop:',
'template-protected'               => '(besjirmp)',
'template-semiprotected'           => '(semi-besjörmp)',
'hiddencategories'                 => 'Dees pazjena velt in de volgendje verbórge {{PLURAL:$1|categorie|categorië}}:',
'nocreatetitle'                    => "'t Aanmake van pazjena's is beperk",
'nocreatetext'                     => "{{SITENAME}} haet de mäögelikheid óm nuuj pazjena's te make bepèrk.
De kèns al besjtaonde pazjena's verangere, of de kèns [[Special:UserLogin|dich aanmelje of 'n gebroekersaccount aanmake]].",
'nocreate-loggedin'                => "De kèns gein nuuj pazjena's make op {{SITENAME}}.",
'permissionserrors'                => 'Foute inne rèchter',
'permissionserrorstext'            => 'Doe höbs gein rèchter om det te daon om de volgende {{PLURAL:$1|reje|rejer}}:',
'permissionserrorstext-withaction' => 'Geer höb gein rech óm $2 óm de volgende {{PLURAL:$1|raej|raej}}:',
'recreate-deleted-warn'            => "'''Waorsjuwing: Doe bis bezig mit 't aanmake van 'n pazjena die in 't verleje gewis is.'''

Euverwaeg of 't terech is dets te wiejer wèrks aan dees pazjena. Veur dien gemaak stuit hiejónger 't logbook eweggesjafde pazjena's veur dees pazjena:",
'deleted-notice'                   => "Dees pazjena is eweggesjaf.
Ter informatie weurt 't verwijderingslogbook van dees pazjena hiejónger weergegeve.",
'deletelog-fulllog'                => 'Gans logbook betrachte',
'edit-hook-aborted'                => "De bewèrking is aafgebroke door 'ne 'hook'.
D'r is gein toelichting besjikbaar.",
'edit-gone-missing'                => 'De pazjena is neet biegewirk.
Ze liek eweggesjaf te zien.',
'edit-conflict'                    => 'Bewirkingsconflik.',
'edit-no-change'                   => "Dien bewirking is genegeerd, ómdet d'r gein verangering in de teks is gemaak.",
'edit-already-exists'              => 'De pagina is neet aangemaak.
Zie besteit al.',

# Parser/template warnings
'expensive-parserfunction-warning'        => "Waarschuwing: dees pazjena gebroek te väöl kosbare parserfuncties.

Noe zeen 't d'r $1, terwiel 't d'r minder es $2 motte zeen.",
'expensive-parserfunction-category'       => "Pazjena's die te väöl kosbare parserfuncties gebroeke",
'post-expand-template-inclusion-warning'  => 'Waorsjuwing: de maximaal transclusiegruudje veur sjablone is euversjri-jje.
Sommige sjablone waere neet getranscludeerd.',
'post-expand-template-inclusion-category' => "Pazjena's woveur de maximaal transclusiegruudje is euversjri-jje",
'post-expand-template-argument-warning'   => "Waorsjuwing: dees pazjena bevat teminste eine sjabloonparamaeter mit 'n te groeate transclusiegruudje.
Dees paramaetere zeen eweggelaote.",
'post-expand-template-argument-category'  => "Pazjena's die missendje sjabloonillemènter bevatte",
'parser-template-loop-warning'            => "D'r is 'ne krinkloup in sjablone geconstateerd: [[$1]]",
'parser-template-recursion-depth-warning' => 'De recursiedeepte veur sjablone is euversjrede ($1)',

# "Undo" feature
'undo-success' => "Hiej onger stuit de teks wo in de verangering ongedaon gemaak is. Controleer veur 't opslaon of 't resultaot gewins is.",
'undo-failure' => 'De verangering kòs neet ongedaon gemaak waere waeges angere striedige verangeringe.',
'undo-norev'   => 'De bewerking kon neet ongedaan gemaak waere, omdat die neet besteet of is verwijderd.',
'undo-summary' => 'Versie $1 van [[Special:Contributions/$2|$2]] ([[User talk:$2|euverlèk]]) óngedaon gemaak.',

# Account creation failure
'cantcreateaccounttitle' => 'Aanmake gebroeker misluk.',
'cantcreateaccount-text' => "'t Aanmake van gebroekers van dit IP-adres ('''$1''') is geblokkeerd door [[User:$3|$3]].

De door $3 opgegaeve reje is ''$2''",

# History pages
'viewpagelogs'           => 'Logbeuk veur dees pazjena tuine',
'nohistory'              => 'Dees pazjena is nog neet bewirk.',
'currentrev'             => 'Hujige versie',
'currentrev-asof'        => 'Hujige versie per $1',
'revisionasof'           => 'Versie op $1',
'revision-info'          => 'Versie op $1 door $2', # Additionally available: $3: revision id
'previousrevision'       => '← Awwer versie',
'nextrevision'           => 'Nuujere versie→',
'currentrevisionlink'    => 'zuug hujige versie',
'cur'                    => 'hujig',
'next'                   => 'volgende',
'last'                   => 'veurige',
'page_first'             => 'ierste',
'page_last'              => 'lèste',
'histlegend'             => 'Verklaoring aafkortinge: (wijz) = versjil mit actueile versie, (vörrige) = versjil mit vörrige versie, K = kleine verangering',
'history-fieldset-title' => 'Door de historie blajere',
'deletedrev'             => '[gewis]',
'histfirst'              => 'Aajste',
'histlast'               => 'Nuujste',
'historysize'            => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'           => '(laeg)',

# Revision feed
'history-feed-title'          => 'Bewerkingseuverzich',
'history-feed-description'    => 'Bewerkingseuverzich veur dees pazjena op de wiki',
'history-feed-item-nocomment' => '$1 op $2', # user at time
'history-feed-empty'          => "De gevraogde pazjena bestuit neet.
Wellich is d'r gewis of vernäömp.
[[Special:Search|Doorzeuk de wiki]] veur relevante pazjena's.",

# Revision deletion
'rev-deleted-comment'         => '(opmerking weggehaold)',
'rev-deleted-user'            => '(gebroeker weggehaold)',
'rev-deleted-event'           => '(actie weggehaold)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
De historie van dees pazjena is gewusj oet de publieke archieve.
Dao kónne details aanwezig zeen in \'t [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} wusjlogbook].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
De historie van dees pazjena is gewösj oet de publieke archieve.
Es beheerder van deze site kèns te deze zeen;
dao kónne details aanwezig zeen in \'t [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} wusjlogbook].
</div>',
'rev-delundel'                => 'tuun/verberg',
'revisiondelete'              => 'Verwijder/herstel bewerkinge',
'revdelete-nooldid-title'     => 'Geine doelverzie',
'revdelete-nooldid-text'      => "Doe höbs gein(e) doelverzie(s) veur deze hanjeling opgegaeve, d'n aangaeving besteit neet, of doe perbeers de letste versie te verberge.",
'revdelete-selected'          => "'''Geselecteerde {{PLURAL:$2|bewerking|bewerkinge}} van '''[[:$1]]''':'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Geselecteerde log gebeurtenis|Geselecteerde log gebeurtenisse}}:'''",
'revdelete-text'              => "'''Gewisjde bewerkinge zeen zichbaar in de gesjiedenis, maar de inhoud is neet langer publiek toegankelik.'''

Anger beheerders van {{SITENAME}} kinne de verborge inhoud benäöjere en de verwiedering ongedaon make mit behölp van dit sjerm, tenzij d'r additionele restricties gelje die zeen ingesteld door de systeembeheerder.",
'revdelete-legend'            => 'Stel zichbaarheidsbeperkinge in',
'revdelete-hide-text'         => 'Verberg de bewerkte teks',
'revdelete-hide-name'         => 'Actie en doel verberge',
'revdelete-hide-comment'      => 'De bewerkingssamevatting verberge',
'revdelete-hide-user'         => 'Verberg gebroekersnaam/IP van de gebroeker',
'revdelete-hide-restricted'   => 'Pas deze beperkinge toe op zowaal beheerders es angere en sloet de interface aaf',
'revdelete-suppress'          => 'Ongerdruk gegaeves veur zowaal admins es angere',
'revdelete-hide-image'        => 'Verberg bestandjsinhoud',
'revdelete-unsuppress'        => 'Verwijder beperkinge op truuk gezatte wieziginge',
'revdelete-log'               => 'Opmerking in logbook:',
'revdelete-submit'            => 'Pas toe op de geselecteerde bewèrking',
'revdelete-logentry'          => 'zichbaarheid van bewerkinge is gewiezig veur [[$1]]',
'logdelete-logentry'          => 'gewiezigde zichbaarheid van gebeurtenis [[$1]]',
'revdelete-success'           => "'''Wieziging zichbaarheid succesvol ingesteld.'''",
'logdelete-success'           => "'''Zichbaarheid van de gebeurtenis succesvol ingesteld.'''",
'revdel-restore'              => 'Zichbaarheid wiezige',
'pagehist'                    => 'Pazjenagesjiedenis',
'deletedhist'                 => 'Verwiederde gesjiedenis',
'revdelete-content'           => 'inhoud',
'revdelete-summary'           => 'samevatting bewerke',
'revdelete-uname'             => 'gebroekersnaam',
'revdelete-restricted'        => 'haet beperkinge aan beheerders opgelag',
'revdelete-unrestricted'      => 'haet beperkinge veur beheerders opgehaeve',
'revdelete-hid'               => 'haet $1 verborge',
'revdelete-unhid'             => 'haet $1 zichbaar gemaak',
'revdelete-log-message'       => '$1 veur $2 {{PLURAL:$2|versie|versies}}',
'logdelete-log-message'       => '$1 veur $2 {{PLURAL:$2|logbookregel|logbookregels}}',

# Suppression log
'suppressionlog'     => 'Verbergingslogbook',
'suppressionlogtext' => 'De ongerstaonde lies bevat de verwiederinge en blokkades die veur beheerders verborge zeen.
In de [[Special:IPBlockList|IP-blokkeerlies]] zeen de hudige blokkades te bekieke.',

# History merging
'mergehistory'                     => "Gesjiedenis van pagina's samevoege",
'mergehistory-header'              => "Deze pagina laot uch toe om versies van de gesjiedenis van 'n brónpagina nao 'n nuujere pagina same te voege.
Wees zeker det deze wieziging de gesjiedenisdoorloupendheid van de pagina zal behaje.",
'mergehistory-box'                 => "Versies van twee pagina's samevoege:",
'mergehistory-from'                => 'Brónpazjena:',
'mergehistory-into'                => 'Bestömmingspazjena:',
'mergehistory-list'                => 'Samevoegbare bewerkingsgesjiedenis',
'mergehistory-merge'               => "De volgende versies van [[:$1]] kinne samegevoeg waere nao [[:$2]]. Gebroek de kolom mit keuzeröndjes om allein de versies gemaak op en vwur de aangegaeve tied same te voege. Let op det 't gebroeke van de navigatielinks deze kolom zal herinstelle.",
'mergehistory-go'                  => 'Samevoegbare bewerkinge toeane',
'mergehistory-submit'              => 'Versies samevoege',
'mergehistory-empty'               => 'Gein inkele versies kinne samegevoeg waere.',
'mergehistory-success'             => '$3 {{PLURAL:$3|versie|versies}} van [[:$1]] zeen succesvol samegevoeg nao [[:$2]].',
'mergehistory-fail'                => 'Kan gein gesjiedenis samevoege, lèvver opnuuj de pagina- en tiedparamaeters te controlere.',
'mergehistory-no-source'           => 'Bronpagina $1 besteit neet.',
'mergehistory-no-destination'      => 'Bestömmingspagina $1 besteit neet.',
'mergehistory-invalid-source'      => "De bronpagina mot 'ne geldige titel zeen.",
'mergehistory-invalid-destination' => "De bestömmingspagina mot 'ne geldige titel zeen.",
'mergehistory-autocomment'         => '[[:$1]] samegevoeg nao [[:$2]]',
'mergehistory-comment'             => '[[:$1]] samegevoeg nao [[:$2]]: $3',
'mergehistory-same-destination'    => 'De bronpazjena en doelpazjena kinne neet dezelfde zien',

# Merge log
'mergelog'           => 'Samevoegingslogbook',
'pagemerge-logentry' => 'voegde [[$1]] nao [[$2]] same (versies tot en met $3)',
'revertmerge'        => 'Samevoeging ongedaon make',
'mergelogpagetext'   => "Hiejonger zuut geer 'ne lies van recente samevoeginge van 'ne paginagesjiedenis nao 'ne angere.",

# Diffs
'history-title'           => 'Gesjiedenis van "$1"',
'difference'              => '(Versjil tösje bewirkinge)',
'lineno'                  => 'Tekslien $1:',
'compareselectedversions' => 'Vergeliek geselecteerde versies',
'visualcomparison'        => 'Visueel vergelieking',
'wikicodecomparison'      => 'Wikiteksvergelieking',
'editundo'                => 'ongedaon make',
'diff-multi'              => '({{PLURAL:$1|éin tusseligkede versie wörd|$1 tusseligkede versies waere}} neet getuund)',
'diff-movedto'            => 'Verplaats nao $1',
'diff-styleadded'         => 'stijl $1 biegedoon',
'diff-added'              => '$1 biegedoon',
'diff-changedto'          => 'verangerd in $1',
'diff-movedoutof'         => 'verplaats boete $1',
'diff-styleremoved'       => 'stijl $1 eweggesjaf',
'diff-removed'            => '$1 eweggesjaf',
'diff-changedfrom'        => 'verangerd van $1',
'diff-src'                => 'brón',
'diff-withdestination'    => 'mit besjtömming $1',
'diff-with'               => '&#32;mit $1 $2',
'diff-with-final'         => '&#32;en $1 $2',
'diff-width'              => 'breidte',
'diff-height'             => 'huugde',
'diff-p'                  => "'n '''paragraaf'''",
'diff-blockquote'         => "'n '''häökske'''",
'diff-h1'                 => "'n '''köpke (niveau 1)'''",
'diff-h2'                 => "'n '''köpke (niveau 2)'''",
'diff-h3'                 => "'n '''köpke (niveau 3)'''",
'diff-h4'                 => "'n '''köpke (niveau 4)'''",
'diff-h5'                 => "'n '''köpke (niveau 5)'''",
'diff-pre'                => "'n '''veurgeformatteerd teksblok'''",
'diff-div'                => "'n '''deiling'''",
'diff-ul'                 => "'n '''óngenómmerde lies'''",
'diff-ol'                 => "'n '''genómmerde lies'''",
'diff-li'                 => "'n '''liesóngerdeil'''",
'diff-table'              => "'n '''tabel'''",
'diff-tbody'              => "'''tabelinhaud'''",
'diff-tr'                 => "'n '''riej'''",
'diff-td'                 => "'n '''cel'''",
'diff-th'                 => "'ne '''kolomkop'''",
'diff-br'                 => "'ne '''nuje regel'''",
'diff-hr'                 => "'n '''horizontaal lien'''",
'diff-code'               => "'n '''teksblok mit programmacode'''",
'diff-dl'                 => "'n '''definitielies'''",
'diff-dt'                 => "'n '''definitieterm'''",
'diff-dd'                 => "'n '''definitie'''",
'diff-input'              => "'ne '''input'''",
'diff-form'               => "'n '''formulier'''",
'diff-img'                => "n '''plaetje'''",
'diff-span'               => "'ne '''span'''",
'diff-a'                  => "'n '''verwiezing'''",
'diff-i'                  => "'''cursief'''",
'diff-b'                  => "'''vèt'''",
'diff-strong'             => "'''sjterk'''",
'diff-em'                 => "'''naodrök'''",
'diff-font'               => "'''lèttertype'''",
'diff-big'                => "'''groet'''",
'diff-del'                => "'''eweggesjaf'''",
'diff-tt'                 => "'''vaste breidte'''",
'diff-sub'                => "'''subscript'''",
'diff-sup'                => "'''superscript'''",
'diff-strike'             => "'''doorhaoling'''",

# Search results
'searchresults'                    => 'Zeukresultate',
'searchresults-title'              => 'Zeukresultate veur "$1"',
'searchresulttext'                 => 'Veur mier informatie euver zeuke op {{SITENAME}}, zuug [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'Doe zeukdes veur \'\'\'[[:$1]]\'\'\' ([[Speciaal:Prefixindex/$1|pagina\'s die beginne mit "$1"]] {{int:pipe-separator}}[[Speciaal:Verwiezinge nao hie/$1|pagina\'s die verwieze nao "$1"]])',
'searchsubtitleinvalid'            => 'Voor zoekopdracht "$1"',
'noexactmatch'                     => "'''Dao besjteit gein pazjena mit de naam $1.''' De kèns 'm [[:$1|aanmake]].",
'noexactmatch-nocreate'            => "'''Er besteit gein pagina genaamp \"\$1\".'''",
'toomanymatches'                   => "d'r Wore te väöl resultate. Probeer estebleef  'n anger zeukopdrach.",
'titlematches'                     => 'Overeinkoms mèt volgende titels',
'notitlematches'                   => 'Geen enkele paginatitel gevonden met de opgegeven zoekterm',
'textmatches'                      => 'Euvereinkoms mèt artikelinhoud',
'notextmatches'                    => 'Geen artikel gevonden met opgegeven zoekterm',
'prevn'                            => 'vörrige $1',
'nextn'                            => 'volgende $1',
'viewprevnext'                     => '($1) ($2) ($3) bekieke.',
'searchmenu-legend'                => 'Zeukopties',
'searchmenu-exists'                => "* Pagina '''[[$1]]'''",
'searchmenu-new'                   => "'''De pagina \"[[:\$1]]\" aanmake op deze wiki'''",
'searchhelp-url'                   => 'Help:Help',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Paginanaome mit dit veurveugsel weergaeve]]',
'searchprofile-articles'           => "Pazjena's",
'searchprofile-articles-and-proj'  => "Inhaudelike en projekpagina's",
'searchprofile-project'            => "Projekpagina's",
'searchprofile-images'             => 'Besjtandje',
'searchprofile-everything'         => 'Alles',
'searchprofile-advanced'           => 'Oetgebreid',
'searchprofile-articles-tooltip'   => 'Zeuke in $1',
'searchprofile-project-tooltip'    => 'Zeuke in $1',
'searchprofile-images-tooltip'     => 'Zeuke naor besjtandje',
'searchprofile-everything-tooltip' => "Alle inhaud doorzeuke (inklusief euverlèkpagina's)",
'searchprofile-advanced-tooltip'   => 'Zeuke in aongegeve naamruumdes',
'prefs-search-nsdefault'           => 'Zeuke mit sjtandaardinsjtèllinge:',
'prefs-search-nscustom'            => 'Zeuke in aangegaeve naamruumdes:',
'search-result-size'               => '$1 ({{PLURAL:$2|1 waord|$2 wäörd}})',
'search-result-score'              => 'Relevantie: $1%',
'search-redirect'                  => '(doorverwiezing $1)',
'search-section'                   => '(subkop $1)',
'search-suggest'                   => 'Bedoeldese: $1',
'search-interwiki-caption'         => 'Zösterprojecte',
'search-interwiki-default'         => '$1 resultate:',
'search-interwiki-more'            => '(meer)',
'search-mwsuggest-enabled'         => 'mit suggesties',
'search-mwsuggest-disabled'        => 'gein suggesties',
'search-relatedarticle'            => 'Gerelateerd',
'mwsuggest-disable'                => 'Suggesties via AJAX oetsjakele',
'searchrelated'                    => 'gerelateerd',
'searchall'                        => 'alle',
'showingresults'                   => 'Hieonger staon de <b>$1</b> {{PLURAL:$1|resultaat|resultaat}}, vanaaf #<b>$2</b>.',
'showingresultsnum'                => "Hieonger {{PLURAL:$3|steit '''1''' resultaat|staon '''$3''' resultate}} vanaaf #<b>$2</b>.",
'showingresultstotal'              => "Hiejónger {{PLURAL:$4|waert resultaat '''$1'''|waere de resultate '''$1 tót $2''' van '''$3'''}} weergegaeve",
'nonefound'                        => "'''Lèt op:''' sjtandaard waere neet alle naamruumdes naogezeuk.
Wens doe in dien zeukopdrach es veurvoegsel \"''all:''\" gebroeks waere alle pagina's naogezeuk (inclusief euverlèkpagina's, sjablone, enzoewiejer).
Doe kèns ouch 'n naamruumde es veurvoegsel gebroeke.",
'search-nonefound'                 => "D'r zien gein resultate veur diene zeukopdrach.",
'powersearch'                      => 'Zeuke',
'powersearch-legend'               => 'Oetgebrèd zeuke',
'powersearch-ns'                   => 'Zeuke in naamruumdes:',
'powersearch-redir'                => 'Doorverwiezinge waergaeve',
'powersearch-field'                => 'Zeuk nao',
'search-external'                  => 'Extern zeuke',
'searchdisabled'                   => 'Zeuke op {{SITENAME}} is oetgesjakeld vanweige gebrek aan servercapaciteit.
Zoelang as de servers nog neet sjterk genog zunt kins e zeuke bie Google.
Mèrk op dat hun indexe van {{SITENAME}} content e bietje gedatierd kint zien.',

# Preferences page
'preferences'               => 'Veurkäöre',
'mypreferences'             => 'Mien veurkäöre',
'prefs-edits'               => 'Aantal bewèrkinge:',
'prefsnologin'              => 'Neet aangemèld',
'prefsnologintext'          => 'De mós zeen [[Special:UserLogin|aangemeld]] óm dien veurkäöre te kónne insjtèlle.',
'prefsreset'                => 'Sjtandaardveurkäöre hersjtèld.',
'qbsettings'                => 'Menubalkinsjtèllinge',
'qbsettings-none'           => 'Oetgesjakeld',
'qbsettings-fixedleft'      => 'Links vas',
'qbsettings-fixedright'     => 'Rechts vas',
'qbsettings-floatingleft'   => 'Links zjwevend',
'qbsettings-floatingright'  => 'Rechs zjwevend',
'changepassword'            => 'Wachwaord verangere',
'skin'                      => '{{SITENAME}}-uterlik',
'skin-preview'              => 'Veurbesjouwing',
'math'                      => 'Mattemetik rendere',
'dateformat'                => 'Datumformaat',
'datedefault'               => 'Gein veurkäör',
'datetime'                  => 'Datum en tied',
'math_failure'              => 'Parse misluk',
'math_unknown_error'        => 'onbekènde fout',
'math_unknown_function'     => 'onbekènde functie',
'math_lexing_error'         => 'lexicografische fout',
'math_syntax_error'         => 'fout vanne syntax',
'math_image_error'          => 'PNG-conversie is misluk. Gao nao of latex, dvips en gs correc geïnstalleerd zeen en converteer nogmaols',
'math_bad_tmpdir'           => 'De map veur tiedelike bestenj veur wiskóndige formules bestuit neet of kin neet gemaak waere',
'math_bad_output'           => 'Kin neet sjrieve nao de output directory veur mattematik',
'math_notexvc'              => "Kin 't programma texvc neet vinje; stel alles in volges de besjrieving in math/README.",
'prefs-personal'            => 'Gebroekersinfo',
'prefs-rc'                  => 'Recènte verangeringe en weergaaf van sjtumpkes',
'prefs-watchlist'           => 'Volglies',
'prefs-watchlist-days'      => 'Te tuine daag in de volglies:',
'prefs-watchlist-days-max'  => '(maximaal 7 daag)',
'prefs-watchlist-edits'     => 'Maximaal aantal bewirkinge in de oetgebreide volglies:',
'prefs-watchlist-edits-max' => '(maximaal aantal: 1000)',
'prefs-misc'                => 'Anger insjtèllinge',
'prefs-resetpass'           => 'Wachwaord wiezige',
'saveprefs'                 => 'Veurkäöre opsjlaon',
'resetprefs'                => 'Sjtandaardveurkäöre hersjtèlle',
'textboxsize'               => 'Aafmeitinge tèksveld',
'prefs-edit-boxsize'        => "Aafmetinge van 't bewirkingsvinster.",
'rows'                      => 'Regels',
'columns'                   => 'Kolomme',
'searchresultshead'         => 'Insjtèllinge veur zeukresultate',
'resultsperpage'            => 'Aantal te toene zeukresultate per pazjena',
'contextlines'              => 'Aantal reigels per gevónje pazjena',
'contextchars'              => 'Aantal teikes van de conteks per reigel',
'stub-threshold'            => 'Drempel veur markering <a href="#" class="stub">begske</a>:',
'recentchangesdays'         => 'Aantal daag te tuine in de recènte verangeringe:',
'recentchangesdays-max'     => '(maximaal $1 {{PLURAL:$1|daag|daag}})',
'recentchangescount'        => 'Aantal titels in lies recènte verangeringe',
'savedprefs'                => 'Dien veurkäöre zint opgesjlage.',
'timezonelegend'            => 'Tiedzone',
'timezonetext'              => "¹'t Aantal oere dat diene lokale tied versjilt van de servertied (UTC).",
'localtime'                 => 'Plaatselike tied',
'timezoneselect'            => 'Tiedzone:',
'timezoneuseserverdefault'  => 'Gebroek servertied',
'timezoneuseoffset'         => 'Angers (gaef tiedversjil)',
'timezoneoffset'            => 'Tiedsversjil¹:',
'servertime'                => 'Server tied:',
'guesstimezone'             => 'Invulle van browser',
'allowemail'                => 'E-mail van anger gebroekers toesjtaon',
'prefs-searchoptions'       => 'Zeukinstellinge',
'prefs-namespaces'          => 'Naamruimte',
'defaultns'                 => 'Zeuk sjtandaard in dees naomruumdes:',
'default'                   => 'sjtandaard',
'files'                     => 'Bestenj',

# User rights
'userrights'                  => 'Gebroekersrechtebeheer', # Not used as normal message but as header for the special page itself
'userrights-lookup-user'      => 'Beheer gebroekersgróppe',
'userrights-user-editname'    => "Veur 'ne gebroekersnaam in:",
'editusergroup'               => 'Bewirk gebroekersgróppe',
'editinguser'                 => "Bezig mit bewèrke van 't gebroekersrech van '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => 'Bewirk gebroekersgróppe',
'saveusergroups'              => 'Gebroekersgróppe opsjlaon',
'userrights-groupsmember'     => 'Leed van:',
'userrights-groups-help'      => "De kèns de gróppe verangere woe deze gebroeker lid van is.
* 'n Aangekruuts vinkvekske beteikent det de gebroeker lid is van de gróp.
* 'n Neet aangekruuts vinkvekske beteikent det de gebroeker neet lid is van de gróp.
* \"*\" Beteikent dets te 'ne gebroeker neet oet 'ne gróp eweg kèns haole naodets te die daobie höbs gedoon, of angersóm.",
'userrights-reason'           => "Reje veur 't verangere:",
'userrights-no-interwiki'     => "Doe höbs gein rechte om gebroekersrechte op anger wiki's te wiezige.",
'userrights-nodatabase'       => 'Database $1 besteit neet of is gein plaatselike database.',
'userrights-nologin'          => "Doe mos dich [[Special:UserLogin|aanmelle]] mit 'ne gebroeker mit de zjuuste rech om gebroekersrech toe te wieze.",
'userrights-notallowed'       => 'Doe höbs gein rechte om gebroekersrechte toe te wieze.',
'userrights-changeable-col'   => 'Gróppe dies te kèns behere',
'userrights-unchangeable-col' => 'Gróppe dies te neet kèns behere',

# Groups
'group'               => 'Groep:',
'group-user'          => 'Gebroekers',
'group-autoconfirmed' => 'Geregistreerde gebroekers',
'group-bot'           => 'Bots',
'group-sysop'         => 'Administrators',
'group-bureaucrat'    => 'Bureaucrate',
'group-suppress'      => 'Toezichhajers',
'group-all'           => '(alle)',

'group-user-member'          => 'Gebroeker',
'group-autoconfirmed-member' => 'Geregistreerde gebroeker',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Administrator',
'group-bureaucrat-member'    => 'Bureaucraat',
'group-suppress-member'      => 'Toezichhajer',

'grouppage-user'          => '{{ns:project}}:Gebroekers',
'grouppage-autoconfirmed' => '{{ns:project}}:Geregistreerde gebroekers',
'grouppage-bot'           => '{{ns:project}}:Bots',
'grouppage-sysop'         => '{{ns:project}}:Beheerders',
'grouppage-bureaucrat'    => '{{ns:project}}:Bureaucrate',
'grouppage-suppress'      => '{{ns:project}}:Euverzich',

# Rights
'right-read'                 => "Pagina's bekieke",
'right-edit'                 => "Pagina's bewerke",
'right-createpage'           => "Pagina's aanmake",
'right-createtalk'           => "Euverlegpagina's aanmake",
'right-createaccount'        => 'Nuwe gebroekers aanmake',
'right-minoredit'            => 'Bewerkinge markere as klein',
'right-move'                 => "Pagina's hernaome",
'right-move-subpages'        => "Pagina's inclusief subpagina's verplaatse",
'right-move-rootuserpages'   => "Gebroekerspazjena's van 't hoegste niveau herneume",
'right-suppressredirect'     => "Een doorverwijzing op de doelpagina verwijdere bie 't hernaome van 'n pagina",
'right-upload'               => 'Bestande uploade',
'right-reupload'             => "'n bestaond bestand euversjrieve",
'right-reupload-own'         => 'Eige bestandsuploads euversjrieve',
'right-reupload-shared'      => 'Euverride files on the shared media repository locally',
'right-upload_by_url'        => 'Bestande uploade via een URL',
'right-purge'                => "De cache veur 'n pagina lege",
'right-autoconfirmed'        => "Behandeld waere as 'n geregistreerde gebroeker",
'right-bot'                  => "Behandeld waere as 'n geautomatiseerd proces",
'right-nominornewtalk'       => "Kleine bewerkinge aan 'n euverlegpagina leide neet tot 'n melding 'nuwe berichte'",
'right-apihighlimits'        => 'Hoegere API-limiete gebroeke',
'right-writeapi'             => 'Bewèrke via de API',
'right-delete'               => "Pagina's verwijdere",
'right-bigdelete'            => "Pagina's mit 'n grote gesjiedenis verwijdere",
'right-deleterevision'       => "Versies van pagina's verberge",
'right-deletedhistory'       => 'Verwijderde versies bekieke, zonder te kinne zeen wat verwijderd is',
'right-browsearchive'        => "Verwijderde pagina's bekieke",
'right-undelete'             => "Verwijderde pagina's terugplaatse",
'right-suppressrevision'     => 'Verborge versies bekijke en terugplaatse',
'right-suppressionlog'       => 'Neet-publieke logboke bekieke',
'right-block'                => 'Angere gebroekers de mogelijkheid te bewerke ontnaeme',
'right-blockemail'           => "'ne gebroeker 't rech ontnaeme om e-mail te versture",
'right-hideuser'             => "'ne gebroeker veur de euverige gebroekers verberge",
'right-ipblock-exempt'       => 'IP-blokkades omzeile',
'right-proxyunbannable'      => "Blokkades veur proxy's gelde neet",
'right-protect'              => 'Beveiligingsniveaus wijzige',
'right-editprotected'        => "Beveiligde pagina's bewerke",
'right-editinterface'        => 'De gebroekersinterface bewerke',
'right-editusercssjs'        => 'De CSS- en JS-bestande van angere gebroekers bewerke',
'right-rollback'             => "Snel de letste bewerking(e) van 'n gebroeker van 'n pagina terugdraaie",
'right-markbotedits'         => 'Teruggedraaide bewerkinge markere es botbewerkinge',
'right-noratelimit'          => "Heet gein ti'jdsafhankelijke beperkinge",
'right-import'               => "Pagina's oet angere wiki's importere",
'right-importupload'         => "Pagina's importere oet 'n bestandsupload",
'right-patrol'               => 'Bewerkinge es gecontroleerd markere',
'right-autopatrol'           => 'Bewerkinge waere automatisch es gecontroleerd gemarkeerd',
'right-patrolmarks'          => 'Kontraolteikes in recènte verangeringe bekieke.',
'right-unwatchedpages'       => "'n lies mit pagina's die neet op 'n volglies staon bekieke",
'right-trackback'            => "'n trackback opgeve",
'right-mergehistory'         => "De gesjiedenis van pagina's samevoege",
'right-userrights'           => 'Alle gebroekersrechte bewerke',
'right-userrights-interwiki' => "Gebroekersrechte van gebroekers in angere wiki's wijzige",
'right-siteadmin'            => 'De database blokkere en weer vriegaeve',

# User rights log
'rightslog'      => 'Gebroekersrechtelogbook',
'rightslogtext'  => 'Hiej onger staon de wieziginge in gebroekersrechte.',
'rightslogentry' => 'wiezigde de gebroekersrechte veur $1 van $2 nao $3',
'rightsnone'     => '(gein)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'               => 'dees pazjena te bekieke',
'action-edit'               => 'dees pazjena te bewirke',
'action-createpage'         => "pazjena's aan te make",
'action-createtalk'         => "euverlèkpazjena's aan te make",
'action-createaccount'      => 'deze gebroeker aan te make',
'action-minoredit'          => 'deze bewirking es klein te markere',
'action-move'               => 'deze pazjena te herneume',
'action-move-subpages'      => "deze pazjena en biebehurende subpazjena's te herneume",
'action-move-rootuserpages' => "gebroekerspazjena's van 't hoegste niveau te herneume",
'action-upload'             => 'dit besjtandj te uploade',
'action-reupload'           => 'dit besjtaond besjtandj te euversjrieve',
'action-reupload-shared'    => "dit besjtandj te uploade, terwiel d'r al 'n besjtandj mèt dezelfde naam in de gedeilde repository sjteit",
'action-upload_by_url'      => "dit besjtandj vanaaf 'ne URL te uploade",
'action-writeapi'           => 'via de API te bewirke',
'action-delete'             => 'dees pazjena eweg te sjaffe',
'action-deleterevision'     => 'dees versie eweg te sjaffe',
'action-deletedhistory'     => 'de eweggesjafte versies van dees pazjena te betrachte',
'action-browsearchive'      => "eweggesjafte pazjena's te zeuke",
'action-undelete'           => 'dees pagina trökplaatse',
'action-suppressrevision'   => 'dees verborge versie betrachte en trök plaatse',
'action-suppressionlog'     => 'dit besjirmp logbook betrachte',
'action-block'              => "deze gebroeker 'n bewirkingsblokkaad op lèkge",
'action-protect'            => "'t beveiligingsniveau van dees pagina aan passe",
'action-import'             => "dees pagina van 'n angere wiki importere",
'action-importupload'       => "dees pagina van 'n besjtandsupload importere",

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|bewerking|bewerkinge}}',
'recentchanges'                     => 'Lètste verangeringe',
'recentchanges-legend'              => 'Opties veur recènte verangeringe',
'recentchangestext'                 => 'op dees pazjena kins doe de recènte verangeringe in deze wiki betrachte.',
'recentchanges-feed-description'    => 'Volg de meis recente bewerkinge in deze wiki via deze feed.',
'rcnote'                            => "Hiejónger {{PLURAL:$1|steit de lètste bewirking|staon de lètste '''$1''' bewirkinge}} van de aafgeloupe {{PLURAL:$2|daag|'''$2''' daag}}, op $4, um $5.",
'rcnotefrom'                        => "Verangeringe sins <b>$2</b> (mit 'n maximum van <b>$1</b> verangeringe).",
'rclistfrom'                        => 'Tuin de verangeringe vanaaf $1',
'rcshowhideminor'                   => '$1 klein bewèrkinge',
'rcshowhidebots'                    => 'bots $1',
'rcshowhideliu'                     => '$1 aangemelde gebroekers',
'rcshowhideanons'                   => '$1 anonieme gebroekers',
'rcshowhidepatr'                    => '$1 gecontroleerde bewerkinge',
'rcshowhidemine'                    => '$1 mien bewirkinge',
'rclinks'                           => 'Bekiek de $1 lètste verangeringe van de aafgeloupe $2 daag.<br />$3',
'diff'                              => 'vers',
'hist'                              => 'gesj',
'hide'                              => 'Versjtaek',
'show'                              => 'Tuin',
'minoreditletter'                   => 'K',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => "[$1 {{PLURAL:$1|keer|keer}} op 'ne volglies]",
'rc_categories'                     => 'Tuun allein categorië (sjèt mit \'ne "|")',
'rc_categories_any'                 => 'Iddere',
'newsectionsummary'                 => '/* $1 */ nuje subkop',
'rc-enhanced-expand'                => 'Details weergaeve (JavaScript verplich)',
'rc-enhanced-hide'                  => 'Details verberge',

# Recent changes linked
'recentchangeslinked'          => 'Volg links',
'recentchangeslinked-title'    => 'Wieziginge verwantj mit "$1"',
'recentchangeslinked-noresult' => "d'r Zeen gein bewerkinge in de gegaeve periode gewaes op de pagina's die vanaaf hiej gelink waere.",
'recentchangeslinked-summary'  => "Deze speciale pagina tuunt de letste bewerkinge op pagina's die gelink waere vanaaf deze pagina. Pagina's die op [[Special:Watchlist|diene volglies]] staon waere '''vet''' weergegaeve.",
'recentchangeslinked-page'     => 'Pazjenanaam:',
'recentchangeslinked-to'       => "Wieziginge weergaeve nao de gelinkde pazjena's",

# Upload
'upload'                      => 'Upload',
'uploadbtn'                   => 'bestandj uploade',
'reupload'                    => 'Opnuui uploade',
'reuploaddesc'                => "Truuk nao 't uploadformeleer.",
'uploadnologin'               => 'Neet aangemèld',
'uploadnologintext'           => 'De mos [[Special:UserLogin|zien aangemèld]] om besjtande te uploade.',
'upload_directory_read_only'  => 'De webserver kin neet sjrieve in de uploadmap ($1).',
'uploaderror'                 => "fout in 't uploade",
'uploadtext'                  => "Gebroek 't óngersjtaonde formuleer óm besjtande op te laje.
Óm ierder opgelaje besjtande te bekieke of te zeuke, gank nao de [[Special:FileList|lies van opgelaje besjtande]].
Uploads en verwiederinge waere ouch biegehauwte in 't [[Special:Log/upload|uploadlogbook]].

Gebroek óm 'n plaetje of 'n besjtand in 'n pazjena op te numme 'ne link in de vörm:
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Besjtand.jpg]]</nowiki>'''
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Besjtand.png|alternatief teks]]</nowiki>'''
of veur mediabesjtande:
* '''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Besjtand.ogg]]</nowiki>'''

De letste link is bedoeld veur mediabestenj die gein aafbeilding zeen.",
'upload-permitted'            => 'Toegelaote bestandstypes: $1.',
'upload-preferred'            => 'Aangeweze bestandstypes: $1.',
'upload-prohibited'           => 'Verbaoje bestandstypes: $1.',
'uploadlog'                   => 'uploadlogbook',
'uploadlogpage'               => 'Uploadlogbook',
'uploadlogpagetext'           => 'Hieonger de lies mit de meist recent ge-uploade besjtande. Alle tiede zunt servertiede.',
'filename'                    => 'Besjtandsnaom',
'filedesc'                    => 'Besjrieving',
'fileuploadsummary'           => 'Samevatting:',
'filestatus'                  => 'Auteursrechtesituatie:',
'filesource'                  => 'Brón:',
'uploadedfiles'               => 'Ge-uploade bestanden',
'ignorewarning'               => "Negeer deze waarsjuwing en slao 't bestandj toch op",
'ignorewarnings'              => 'Negeer alle waarsjuwinge',
'minlength1'                  => 'Bestandsname mòtte minstes éine letter bevatte.',
'illegalfilename'             => 'De bestandjsnaam "$1" bevat ongeldige karakters. Gaef \'t bestandj \'ne angere naam, en probeer \'t dan opnuuj te uploade.',
'badfilename'                 => 'De naom van \'t besjtand is verangerd in "$1".',
'filetype-badmime'            => '\'t Is neet toegestaon om bestenj van MIME type "$1" te uploade.',
'filetype-unwanted-type'      => "'''\".\$1\"''' is 'n ongewunsj bestandstype.  Aangeweze bestandstypes zeen \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' is gein toegelaote bestandstype.  Toegelaote bestandstypes zeen \$2.",
'filetype-missing'            => 'Dit bestandj haet gein extensie (wie ".jpg").',
'large-file'                  => 'Aanbeveling: maak bestenj neet groter dan $1, dit bestand is $2.',
'largefileserver'             => "'t Bestandj is groter dan de instelling van de server toestuit.",
'emptyfile'                   => "'t Besjtand wats re höbs geupload is laeg. Dit kump waorsjienliek door 'n typfout in de besjtandsnaom. Kiek estebleef ofs te dit besjtand wirkelik wils uploade.",
'fileexists'                  => "D'r is al e besjtand mit dees naam, bekiek '''<tt>$1</tt>''' of se dat besjtand mesjien wils vervange.",
'filepageexists'              => "De besjrievingspazjena veur dit bestandj besjteit al op '''<tt>$1</tt>''', meh d'r besjteit gein bestandj mit deze naam. De samevatting dies te höbs opgegaeve zal neet op de besjrievingspazjena versjiene. Bewirk de pazjena handjmaotig óm dien besjrieving dao te tuine.",
'fileexists-extension'        => "'n bestand met dezelfde naam bestuit al:<br />
Naam van 't geüploade bestand: '''<tt>$1</tt>'''<br />
Naam van 't bestaonde bestand: '''<tt>$2</tt>'''<br />
Lèver 'ne angere naam te keze.",
'fileexists-thumb'            => "<center>'''Bestaonde afbeilding'''</center>",
'fileexists-thumbnail-yes'    => "'t Liek 'n afbeilding van 'n verkleinde grootte te zeen ''(thumbnail)''. Lèver 't bestand '''<tt>$1</tt>''' te controlere.<br />
Es 't gecontroleerde bestand dezelfde afbeilding van oorspronkelike grootte is, is 't neet noodzakelik 'ne extra thumbnail te uploade.",
'file-thumbnail-no'           => "De bestandsnaam begint met '''<tt>$1</tt>'''. 't Liek 'n verkleinde afbeelding te zeen ''(thumbnail)''. Esse deze afbeelding in volledige resolutie höbs, upload dae afbeelding dan. Wiezig anges estebleef de bestandsnaam.",
'fileexists-forbidden'        => "d'r Bestuit al 'n bestand met deze naam. Upload dien bestand onger 'ne angere naam.
[[File:$1|thumb|center|$1]]",
'fileexists-shared-forbidden' => "d'r Bestuit al 'n bestand met deze naam bie de gedeilde bestenj. Upload 't bestand onger  'ne angere naam. [[File:$1|thumb|center|$1]]",
'file-exists-duplicate'       => "Dit besjtandj is identiek aon {{PLURAL:$1|'t volgende besjtandj|de volgende besjtande}}:",
'successfulupload'            => 'De upload is geluk',
'uploadwarning'               => 'Upload waarsjuwing',
'savefile'                    => 'Bestand opsjlaon',
'uploadedimage'               => 'haet ge-upload: [[$1]]',
'overwroteimage'              => 'haet \'ne nuuje versie van "[[$1]]" toegevoeg',
'uploaddisabled'              => 'Uploade is oetgesjakeld',
'uploaddisabledtext'          => "'t uploade van bestenj is oetgesjakeld op {{SITENAME}}.",
'uploadscripted'              => 'Dit bestandj bevat HTML- of scriptcode die foutief door diene browser weergegaeve kinne waere.',
'uploadcorrupt'               => "'t bestand is corrup of haet 'n onzjuste extensie. Controleer 't bestand en upload 't opnuuj.",
'uploadvirus'                 => "'t Bestand bevat 'n virus! Details: $1",
'sourcefilename'              => 'Oorspronkelike bestandsnaam:',
'destfilename'                => 'Doeltitel:',
'upload-maxfilesize'          => 'Maximale bestandjsgrootte: $1',
'watchthisupload'             => 'Volg dees pazjena',
'filewasdeleted'              => "d'r Is eerder 'n bestandj mit deze naam verwiederd. Raodpleeg 't $1 veurdetse 't opnuuj toevoegs.",
'upload-wasdeleted'           => "'''Waarsjuwing: Doe bös 'n bestand det eerder verwiederd woor aan 't uploade.'''

Lèver zeker te zeen detse gesjik bös om door te gaon met 't uploade van dit bestand.
't verwiederingslogbook van dit bestand kinse hiej zeen:",
'filename-bad-prefix'         => "De naam van 't bestand detse aan 't uploade bös begint met '''\"\$1\"''', wat 'ne neet-besjrievende naam is dae meestal automatisch door 'ne digitale camera wörd gegaeve. Kees estebleef 'ne dudelike naam veur dien bestand.",

'upload-proto-error'      => 'Verkeerd protocol',
'upload-proto-error-text' => "Uploads via deze methode vereise URL's die beginne met <code>http://</code> of <code>ftp://</code>.",
'upload-file-error'       => 'Interne fout',
'upload-file-error-text'  => "'n Intern fuitje vonj plaats wie 'n tiedelik besjtandj op de server woort aangemaak. Num aub contac op met 'ne systeembeheerder.",
'upload-misc-error'       => 'Onbekinde uploadfout',
'upload-misc-error-text'  => "d'r Is tiedes 't uploade 'ne onbekinde fout opgetraeje. Controleer of de URL correc en besjikbaar is en probeer 't opnuuj. Es 't probleem aanhaojt, nöm dan contac op met 'ne systeembeheerder.",

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Kòs de URL neet bereike',
'upload-curl-error6-text'  => 'De opgegaeve URL is neet bereikbaar. Controleer estebleef of de URL zjus is, en of de website besjikbaar is.',
'upload-curl-error28'      => 'time-out dèr upload',
'upload-curl-error28-text' => "'t Doorde te lang veurdet de website antwaord goof. Controleer a.u.b. of de website besjikbaar is, wach effe en probeer 't dan opnuuj. De kèns 't mesjiens probere es 't minder drök is.",

'license'            => 'Lisènsie:',
'nolicense'          => "Maak 'ne keuze",
'license-nopreview'  => '(Veurvertuun neet besjikbaar)',
'upload_source_url'  => " ('ne geldige, publiek toegankelike URL)",
'upload_source_file' => " ('n bestand op diene computer)",

# Special:ListFiles
'listfiles-summary'     => "Op dees speciaal pazjena zeen alle toegevoogde bestenj te bekieke.
Standerd waere de lets toegevoogde bestenj baovenaan de lies weergegaeve.
Klikke op 'ne kolomkop verangert de sortering.",
'listfiles_search_for'  => 'Zeuk nao bestandj:',
'imgfile'               => 'bestandj',
'listfiles'             => 'Lies van aafbeildinge',
'listfiles_date'        => 'Datum',
'listfiles_name'        => 'Naom',
'listfiles_user'        => 'Gebroeker',
'listfiles_size'        => 'Gruutde (bytes)',
'listfiles_description' => 'Besjrieving',

# File description page
'filehist'                       => 'Bestandsgesjiedenis',
'filehist-help'                  => "Klik op 'ne datum/tied om 't besjtandj te zeen wie 't destieds waor.",
'filehist-deleteall'             => 'wis alles',
'filehist-deleteone'             => 'wis',
'filehist-revert'                => 'trökdrèjje',
'filehist-current'               => 'hujig',
'filehist-datetime'              => 'Datum/tiejd',
'filehist-thumb'                 => 'Miniatuurplaetje',
'filehist-thumbtext'             => 'Miniatuurplaetje veur versie per $1',
'filehist-user'                  => 'Gebroeker',
'filehist-dimensions'            => 'Aafmaetinge',
'filehist-filesize'              => 'Besjtandjgruutde',
'filehist-comment'               => 'Opmirking',
'imagelinks'                     => 'Besjtandjsverwiezinge',
'linkstoimage'                   => "Dit besjtandj weurt op de volgende {{PLURAL:$1|pazjena|pazjena's}} gebroek:",
'nolinkstoimage'                 => 'Gein enkele pazjena gebroek dees aafbeilding.',
'morelinkstoimage'               => '[[Special:WhatLinksHere/$1|Mier verwijzinge]] naor dit bestaand bekèèke.',
'redirectstofile'                => 'De volgende bestaande verwèèze door naor dit bestaand:',
'duplicatesoffile'               => 'De nègsvóggendje bestenj zeen identiek aan dit bestandj:',
'sharedupload'                   => "Dit besjtandj is 'ne gedeilde upload en kin ouch door anger projekte waere gebroek",
'shareduploadwiki'               => 'Zee $1 veur meer informatie.',
'shareduploadwiki-desc'          => 'De omschrèèving op zie $1 op de gedèèlde map is hij onder wiergegeve.',
'shareduploadwiki-linktext'      => 'bestandsbesjrieving',
'shareduploadduplicate'          => "Dit bestandj is 'ne dóbbelgenger van $1 in de gedeildje mediabank.",
'shareduploadduplicate-linktext' => "'n anger bestandj",
'shareduploadconflict'           => 'Dit bestandj haet dezelvendje naam es $1 in de gedeildje mediabank.',
'shareduploadconflict-linktext'  => "'n anger bestandj",
'noimage'                        => "D'r besjteit gein besjtandj mit deze naam, mer doe kèns 't $1.",
'noimage-linktext'               => 'uploade',
'uploadnewversion-linktext'      => "Upload 'n nuuje versie van dit bestand",

# File reversion
'filerevert'                => '$1 trökdrèjje',
'filerevert-legend'         => 'Bestandj trökdrejje',
'filerevert-intro'          => "Doe bös '''[[Media:$1|$1]]''' aan 't trökdrèjje tot de [$4 versie op $2, $3]",
'filerevert-comment'        => 'Opmèrking:',
'filerevert-defaultcomment' => 'Trökgedrèjt tot de versie op $1, $2',
'filerevert-submit'         => 'Trökdrèjje',
'filerevert-success'        => "'''[[Media:$1|$1]]''' is trökgedrèjt tot de [$4 versie op $2, $3]",
'filerevert-badversion'     => "d'r is geine vörge lokale versie van dit bestand mit 't opgegaeve tiejdstip.",

# File deletion
'filedelete'                  => 'Wis $1',
'filedelete-legend'           => 'Wis bestand',
'filedelete-intro'            => "Doe bös '''[[Media:$1|$1]]''' aan 't wisse.",
'filedelete-intro-old'        => "Doe bös de versie van '''[[Media:$1|$1]]''' van [$4 $3, $2] aan 't wisse.",
'filedelete-comment'          => 'Opmèrking:',
'filedelete-submit'           => 'Wisse',
'filedelete-success'          => "'''$1''' is gewis.",
'filedelete-success-old'      => '<span class="plainlinks">De versie van \'\'\'[[Media:$1|$1]]\'\'\' van $3, $2 is gewis.</span>',
'filedelete-nofile'           => "'''$1''' bestuit neet op {{SITENAME}}.",
'filedelete-nofile-old'       => "d'r is geine versie van '''$1''' in 't archief met de aangegaeve eigensjappe.",
'filedelete-otherreason'      => 'Angere/additionele ree:',
'filedelete-reason-otherlist' => 'Angere ree',
'filedelete-reason-dropdown'  => '*Väölveurkómmende ree veur wisse
** Auteursrechsjenjing
** Duplicaatbestandj',
'filedelete-edit-reasonlist'  => 'Reeje veur verwiedering bewèrke',

# MIME search
'mimesearch'         => 'Zeuk op MIME-type',
'mimesearch-summary' => "Deze pagina maak het filtere van bestenj veur 't MIME-type meugelik. Inveur: contenttype/subtype, bv <tt>image/jpeg</tt>.",
'mimetype'           => 'MIME-type:',
'download'           => 'Downloade',

# Unwatched pages
'unwatchedpages' => "Neet-gevolgde pazjena's",

# List redirects
'listredirects' => 'Lies van redirects',

# Unused templates
'unusedtemplates'     => 'Óngerbroekde sjablone',
'unusedtemplatestext' => 'Deze pagina guf alle pagina\'s weer in de naamruumde sjabloon die op gein inkele pagina gebroek waere. Vergaet neet de "Links nao deze pagina" te controlere veures dit sjabloon te wösse.',
'unusedtemplateswlh'  => 'anger links',

# Random page
'randompage'         => 'Willekäörige pazjena',
'randompage-nopages' => "d'r zeen gein pagina's in deze naamruumde.",

# Random redirect
'randomredirect'         => 'Willekäörige redirect',
'randomredirect-nopages' => "d'r zeen gein redirects in deze naamruumde.",

# Statistics
'statistics'              => 'Sjtattestieke',
'statistics-header-users' => 'Stattestieke euver gebroekers',
'statistics-pages-desc'   => "Alle pagina's in de wiki, inclusief euverlèkpagina's, doorverwiezinge, enz.",
'statistics-mostpopular'  => "Meisbekeke pazjena's",

'disambiguations'      => "Verdudelikingspazjena's",
'disambiguationspage'  => 'Template:Verdudeliking',
'disambiguations-text' => "Hiej onger staon pagina's die verwieze nao 'ne '''redirect'''.
Deze heure waarsjienlik direct nao 't zjuste ongerwerp te verwiezen.<br />
'ne pagina wörd gezeen es redirect wen d'r 'n sjabloon op stuit det gelink is vanaaf [[MediaWiki:Disambiguationspage]]",

'doubleredirects'            => 'Dobbel redirects',
'doubleredirectstext'        => '<b>Kiek oet:</b> In dees lies kanne redirects sjtaon die neet dao-in toeshure. Dat kump meistal doordat nao de #REDIRECT nog anger links op de pazjena sjtaon.<br />
Op eder raegel vings te de ierste redirectpazjena, de twiede redirectpazjena en de iesjte raegel van de twiede redirectpazjena. Normaal bevat dees litste de pazjena woe de iesjte redirect naotoe zouw mótte verwieze.',
'double-redirect-fixed-move' => "[[$1]] is verplaats en is noe 'n doorverwiezing nao [[$2]]",
'double-redirect-fixer'      => 'Doorverwiezinge opsjone',

'brokenredirects'        => 'Gebraoke redirects',
'brokenredirectstext'    => "De óngersjtaonde redirectpazjena's bevatte 'n redirect nao 'n neet-besjtaonde pazjena.",
'brokenredirects-edit'   => '(bewerke)',
'brokenredirects-delete' => '(wisse)',

'withoutinterwiki'         => "Pazjena's zónger interwiki's",
'withoutinterwiki-summary' => "De volgende pagina's linke neet nao versies in 'n anger taal:",
'withoutinterwiki-legend'  => 'Veurvoegsel',
'withoutinterwiki-submit'  => 'Toean',

'fewestrevisions' => 'Artikele met de minste bewerkinge',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categorie|categorië}}',
'nlinks'                  => '$1 {{PLURAL:$1|verwiezing|verwiezinge}}',
'nmembers'                => '$1 {{PLURAL:$1|lid|lede}}',
'nrevisions'              => '$1 {{PLURAL:$1|herzening|herzeninge}}',
'nviews'                  => '{{PLURAL:$1|eine kieër|$1 kieër}} bekeke',
'specialpage-empty'       => 'Deze pagina is laeg.',
'lonelypages'             => "Weispazjena's",
'lonelypagestext'         => "Nao de ongerstäönde pagina's wörd vanoet {{SITENAME}} neet verweze.",
'uncategorizedpages'      => "Ongekattegoriseerde pazjena's",
'uncategorizedcategories' => 'Ongekattegoriseerde kattegorië',
'uncategorizedimages'     => 'Óngecategorizeerde bestenj',
'uncategorizedtemplates'  => 'Óngecategorizeerde sjablone',
'unusedcategories'        => 'Óngebroekde kategorieë',
'unusedimages'            => 'Ongebroekde aafbeildinge',
'popularpages'            => 'Populaire artikels',
'wantedcategories'        => 'Gewunsjde categorieë',
'wantedpages'             => "Gewunsjde pazjena's",
'mostlinked'              => "Meis gelinkde pazjena's",
'mostlinkedcategories'    => 'Meis-gelinkde categorië',
'mostlinkedtemplates'     => 'Meis-gebroekde sjablone',
'mostcategories'          => 'Artikele mit de meiste kategorieë',
'mostimages'              => 'Meis gelinkde aafbeildinge',
'mostrevisions'           => 'Artikele mit de meiste bewirkinge',
'prefixindex'             => "Alle pagina's op veurvoegsel",
'shortpages'              => 'Korte artikele',
'longpages'               => 'Lang artikele',
'deadendpages'            => "Doedloupende pazjena's",
'deadendpagestext'        => "De ongerstäönde pagina's verwieze neet nao anger pagina's in {{SITENAME}}.",
'protectedpages'          => "Besjörmde pagina's",
'protectedpages-indef'    => 'Allein blokkades zonger verloupdatum',
'protectedpagestext'      => "De volgende pagina's zeen beveilig en kinne neet bewerk en/of hernömp waere",
'protectedpagesempty'     => "d'r Zeen noe gein pagina's besjörmp die aan deze paramaetere voldaon.",
'protectedtitles'         => "Beveiligde pazjena's",
'protectedtitlestext'     => 'De volgende titels zeen beveilig en kinne neet aangemaak waere',
'protectedtitlesempty'    => "d'r Zeen momenteel gein titels beveilig die aan deze paramaeters voldaon.",
'listusers'               => 'Lies van gebroekers',
'newpages'                => "Nuuj pazjena's",
'newpages-username'       => 'Gebroekersnaam:',
'ancientpages'            => 'Artikele die lank neet bewèrk zeen',
'move'                    => 'Verplaats',
'movethispage'            => 'Verplaats dees pazjena',
'unusedimagestext'        => "<p>Lèt op! 't Zou kinne dat er via een directe link verweze weurt nao 'n aafbeilding, bevoorbild vanoet 'n angesjtalige {{SITENAME}}. Het is daorom meugelijk dat 'n aafbeilding hie vermeld sjtit terwiel e toch gebroek weurt.",
'unusedcategoriestext'    => 'Hiej onger staon categorië die aangemaak zeen, mèr door geine inkele pagina of angere categorie gebroek waere.',
'notargettitle'           => 'Gein doelpagina',
'notargettext'            => 'Ger hubt neet gezag veur welleke pagina ger deze functie wilt bekieke.',
'nopagetitle'             => 'Te hernömme pazjena besteit neet',
'nopagetext'              => "De pazjena dae't geer wiltj hernömme besteit neet.",
'pager-newer-n'           => '{{PLURAL:$1|nujer 1|nujer $1}}',
'pager-older-n'           => '{{PLURAL:$1|auwer 1|auwer $1}}',
'suppress'                => 'Toezich',

# Book sources
'booksources'               => 'Bookwinkele',
'booksources-search-legend' => "Zeuk informatie euver 'n book",
'booksources-go'            => 'Zeuk',
'booksources-text'          => "Hiej onger stuit 'n lies met koppelinge nao anger websites die nuuje of gebroekde beuk verkoupe, en die wellich meer informatie euver 't book detse zeuks höbbe:",

# Special:Log
'specialloguserlabel'  => 'Gebroeker:',
'speciallogtitlelabel' => 'Titel:',
'log'                  => 'Logbeuk',
'all-logs-page'        => 'Alle logbeuk',
'alllogstext'          => "Dit is 't gecombineerd logbook. De kins ouch 'n bepaald logbook keze, of filtere op gebroekersnaam of  pazjena.",
'logempty'             => "d'r Zeen gein regels in 't logbook die voldaon aan deze criteria.",
'log-title-wildcard'   => "Zeuk pagina's die met deze naam beginne",

# Special:AllPages
'allpages'          => "Alle pazjena's",
'alphaindexline'    => '$1 nao $2',
'nextpage'          => 'Volgende pazjena ($1)',
'prevpage'          => 'Vörge pazjena ($1)',
'allpagesfrom'      => "Tuin pazjena's vanaaf:",
'allpagesto'        => "Pagina's betrachte tot:",
'allarticles'       => 'Alle artikele',
'allinnamespace'    => "Alle pazjena's (naamruumde $1)",
'allnotinnamespace' => "Alle pazjena's (neet in naamruumde $1)",
'allpagesprev'      => 'Veurige',
'allpagesnext'      => 'Irsvolgende',
'allpagessubmit'    => 'Gank',
'allpagesprefix'    => "Betrach pazjena's mit 't veurvoogsel:",
'allpagesbadtitle'  => "De opgegaeve paginanaam is ongeldig of haj 'n intertaal of interwiki veurvoegsel. Meugelik bevatte de naam karakters die neet gebroek moge waere in paginanäöm.",
'allpages-bad-ns'   => '{{SITENAME}} haet gein naamruumde mit de naam "$1".',

# Special:Categories
'categories'                    => 'Categorieë',
'categoriespagetext'            => 'De wiki haet de volgende categorieë:',
'categoriesfrom'                => 'Categorië waergaeve vanaaf:',
'special-categories-sort-count' => 'op aantal sortere',
'special-categories-sort-abc'   => 'alfabetisch sortere',

# Special:DeletedContributions
'deletedcontributions'       => 'Gewisde gebroekersbiedrage',
'deletedcontributions-title' => 'Gewisde gebroekersbiedrage',

# Special:LinkSearch
'linksearch'       => 'Extern verwiezinge',
'linksearch-pat'   => 'Zeukpatroon:',
'linksearch-ns'    => 'Naamruumde:',
'linksearch-ok'    => 'Zeuk',
'linksearch-text'  => 'Wildcards wie "*.wikipedia.org" of "*.org" zeen toegestaon.<br />Supported protocols: <tt>$1</tt>',
'linksearch-line'  => '$1 gelink vanaaf $2',
'linksearch-error' => 'Wildcards zijn alleen toegestaan aan het begin van een hostnaam.',

# Special:ListUsers
'listusersfrom'      => 'Tuun gebroekers vanaaf:',
'listusers-submit'   => 'Tuun',
'listusers-noresult' => 'Gein(e) gebroeker(s) gevonje.',

# Special:Log/newusers
'newuserlogpage'              => 'Logbook nuuj gebroekers',
'newuserlogpagetext'          => 'Hiej ónger saton de nuuj ingesjreve gebroekers.',
'newuserlog-byemail'          => 'wachwaord is versjik per e-mail',
'newuserlog-create-entry'     => "is 'ne nuje gebroeker",
'newuserlog-create2-entry'    => 'haet de gebroeker [[$1]] aangemaak',
'newuserlog-autocreate-entry' => 'Gebroeker automatisch aangemaak',

# Special:ListGroupRights
'listgrouprights'          => 'Rechte van gebroekersgróppe',
'listgrouprights-summary'  => 'Op dees pazjena sjtaon de gebroekersgróppe in deze wiki besjreve, mit zien biebehurende rechte.
Infermasie daoreuver vunds te [[{{MediaWiki:Listgrouprights-helppage}}|hie]].',
'listgrouprights-group'    => 'Groep',
'listgrouprights-rights'   => 'Rechte',
'listgrouprights-helppage' => 'Help:Gebroekersrechte',
'listgrouprights-members'  => '(ledelies)',

# E-mail user
'mailnologin'     => 'Gein e-mailadres bekènd veur deze gebroeker',
'mailnologintext' => "De mos zien [[Special:UserLogin|aangemèld]] en 'n gèldig e-mailadres in bie dien [[Special:Preferences|veurkäöre]] höbbe ingevuld om mail nao anger gebroekers te sjture.",
'emailuser'       => "Sjik deze gebroeker 'nen e-mail",
'emailpage'       => "Sjik gebroeker 'nen e-mail",
'emailpagetext'   => "As deze gebroeker e geljig e-mailadres heet opgegaeve dan kant geer via dit formuleer e berich sjikke. 't E-mailadres wat geer heet opgegeve bie eur veurkäöre zal as versjikker aangegaeve waere.",
'usermailererror' => "Foutmeljing biej 't zenje:",
'defemailsubject' => 'E-mail van {{SITENAME}}',
'noemailtitle'    => 'Gein e-mailadres bekènd veur deze gebroeker',
'noemailtext'     => 'Deze gebroeker haet gein gèldig e-mailadres opgegaeve of haet dees functie oetgesjakeld.',
'emailfrom'       => 'Van',
'emailto'         => 'Aan',
'emailsubject'    => 'Óngerwerp',
'emailmessage'    => 'Berich',
'emailsend'       => 'Sjik berich',
'emailccme'       => "Stuur 'n kopie van dit berich nao mien e-mailadres.",
'emailccsubject'  => 'Kopie van dien berich aan $1: $2',
'emailsent'       => 'E-mail sjikke',
'emailsenttext'   => 'Die berich is versjik.',
'emailuserfooter' => 'Deze e-mail is verstuurd door $1 aan $2 door de functie "Deze gebroeker e-maile" van {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Volglies',
'mywatchlist'          => 'Volglies',
'watchlistfor'         => "(veur '''$1''')",
'nowatchlist'          => "D'r sjtit niks op dien volglies.",
'watchlistanontext'    => '$1 is verplich om dien volglies in te zeen of te wiezige.',
'watchnologin'         => 'De bis neet aangemèld',
'watchnologintext'     => "De mós [[Special:UserLogin|aangemèld]] zeen veur 't verangere van dien volglies.",
'addedwatch'           => 'Aan volglies toegeveug',
'addedwatchtext'       => 'De pazjena "<nowiki>$1</nowiki>" is aan dien [[Special:Watchlist|volglies]] toegeveug.
Toekomstige verangeringe aan dees pazjena en de biebehurende euverlèkpazjena weure hie vermèld.
Ouch versjiene gevolgde pazjena\'s in \'t <b>vèt</b> in de [[Special:RecentChanges|lies van recènte verangeringe]]. <!-- zodat u ze eenvoudiger kan opmerken.-->

<!-- huh? Wen se ein pazjena van dien volgliest wils haole mos e op "sjtop volge"  -- pagina wenst te verwijderen van uw volgliest klik dan op "Van volgliest verwijderen" in de menubalk. -->',
'removedwatch'         => 'Van volglies aafhoale',
'removedwatchtext'     => 'De pazjena "<nowiki>$1</nowiki>" is van dien volglies aafgehaold.',
'watch'                => 'Volg',
'watchthispage'        => 'Volg dees pazjena',
'unwatch'              => 'Sjtop volge',
'unwatchthispage'      => 'Neet mië volge',
'notanarticle'         => 'Is gein artikel',
'notvisiblerev'        => 'Bewèrking is verwiederd',
'watchnochange'        => 'Gein van dien gevolgde items is aangepas in dees periode.',
'watchlist-details'    => "D'r {{PLURAL:$1|sjteit ein pazjena|sjtaon $1 pazjena's}} op dien volglies mit oetzunjering van de euverlèkpazjena's.",
'wlheader-enotif'      => '* Doe wörs per e-mail gewaarsjuwd',
'wlheader-showupdated' => "* Pazjena's die verangerd zeen saers doe ze veur 't lètste bekeeks sjtaon '''vet'''",
'watchmethod-recent'   => "Controleer recènte verangere veur gevolgde pazjena's",
'watchmethod-list'     => "controlere van gevolgde pazjena's veur recènte verangeringe",
'watchlistcontains'    => "Dien volglies bevat $1 {{PLURAL:$1|pazjena|pazjena's}}.",
'iteminvalidname'      => "Probleem mit object '$1', ongeljige naam...",
'wlnote'               => "Hieonger {{PLURAL:$1|steit de lètste verangering|staon de lètste $1 verangeringe}} van {{PLURAL:$2|'t lètse oer|de lètste <b>$2</b> oer}}.",
'wlshowlast'           => 'Tuin lètste $1 ore $2 daag $3',
'watchlist-options'    => 'Opties veur volglies',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Bezig mit plaatse op de volglies...',
'unwatching' => "Oet de volglies aan 't haole...",

'enotif_mailer'                => '{{SITENAME}} notificatiemail',
'enotif_reset'                 => "Mèrk alle bezochde pazjena's aan.",
'enotif_newpagetext'           => "DIt is 'n nuuj pazjena.",
'enotif_impersonal_salutation' => '{{SITENAME}} gebroeker',
'changed'                      => 'verangerd',
'created'                      => 'aangemaak',
'enotif_subject'               => 'De {{SITENAME}}pazjena $PAGETITLE is $CHANGEDORCREATED door $PAGEEDITOR',
'enotif_lastvisited'           => 'Zuug $1 veur al verangeringe saer dien lèste bezeuk.',
'enotif_lastdiff'              => 'Zuug $1 om deze wieziging te zeen.',
'enotif_anon_editor'           => 'anonieme gebroeker $1',
'enotif_body'                  => 'Bèste $WATCHINGUSERNAME,

De {{SITENAME}}-pazjena "$PAGETITLE" is $CHANGEDORCREATED op $PAGEEDITDATE door $PAGEEDITOR, zuug $PAGETITLE_URL veur de hujige versie.

$NEWPAGE

Bewirkingssamevatting: $PAGESUMMARY $PAGEMINOREDIT

Contacteer de bewirker:
mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Dao zalle bie volgende verangeringe gein nuuj berichte kómme tenzies te dees pazjena obbenuujts bezeuks. De kans ouch de notificatievlegskes op dien volglies verzètte.

             \'t {{SITENAME}}-notificatiesysteem

--
Óm de insjtèllinge van dien volglies te verangere, zuug
{{fullurl:Special:Watchlist/edit}}

Commentaar en wiejer assistentie:
{{fullurl:Help:Contents}}',

# Delete
'deletepage'             => 'Pazjena wisse',
'confirm'                => 'Bevèstig',
'excontent'              => "inhawd waor: '$1'",
'excontentauthor'        => "inhawd waor: '$1' (aangemaak door [[Special:Contributions/$2|$2]])",
'exbeforeblank'          => "inhawd veur 't wisse waor: '$1'",
'exblank'                => 'pazjena waor laeg',
'delete-confirm'         => '"$1" wisse',
'delete-legend'          => 'Wisse',
'historywarning'         => 'Waorsjuwing: de pazjena daese wils wisse haet meerdere versies:',
'confirmdeletetext'      => "De sjteis op 't punt 'n pazjena of e plaetje veur ummer te wisse. Dit haolt allen inhawd en historie oet de database eweg. Bevèstig hieónger dat dit welzeker dien bedoeling is, dats te de gevolge begrieps.",
'actioncomplete'         => 'Actie voltoeid',
'deletedtext'            => '"<nowiki>$1</nowiki>" is gewis. Zuug $2 vuur \'n euverzich van recèntelik gewisde pazjena\'s.',
'deletedarticle'         => '"[[$1]]" is eweggesjaf',
'suppressedarticle'      => 'haet "[[$1]]" verborge',
'dellogpage'             => 'Wislogbook',
'dellogpagetext'         => "Hie volg 'n lies van de meis recèntelik gewisde pazjena's en plaetjes.",
'deletionlog'            => 'Wislogbook',
'reverted'               => 'Iedere versie hersjtèld',
'deletecomment'          => 'Rae veur wisactie',
'deleteotherreason'      => 'Angere/eventuele ree:',
'deletereasonotherlist'  => 'Angere ree',
'deletereason-dropdown'  => '*Väölveurkommende wisree
** Op aanvraog van auteur
** Sjending van auteursrech
** Vandalisme',
'delete-edit-reasonlist' => 'Reeje veur verwiedering bewèrke',
'delete-toobig'          => "Dees pazjena haet 'ne lange bewerkingsgesjiedenis, mieë es $1 versies. 't Wisse van dit saort pazjena's is mit rech beperk óm 't próngelök versteure van de werking van {{SITENAME}} te veurkómme.",
'delete-warning-toobig'  => "Dees pazjena haet 'ne lange bewerkingsgesjiedenis, mieë es $1 versies. 't Wisse van dees pazjena kan de werking van de database van {{SITENAME}} versteure. Bön veurzichtig.",

# Rollback
'rollback'         => 'Verangering ongedaon gemaak',
'rollback_short'   => 'Trökdrèjje',
'rollbacklink'     => 'Trökdrieje',
'rollbackfailed'   => 'Ongedaon make van wieziginge mislùk.',
'cantrollback'     => 'Trökdrejje van verangeringe neet meugelik: Dit artikel haet mer einen auteur.',
'alreadyrolled'    => "'t Is neet meugelik óm de lèste verangering van [[$1]] door [[User:$2|$2]] ([[User talk:$2|euverlik]]) óngedaon te make.
Emes angers haet de pazjena al hersjtèld of haet 'n anger bewèrking gedaon.

De lèste bewèrking is gedaon door [[User:$3|$3]] ([[User talk:$3|euverlik]]).",
'editcomment'      => "'t Bewirkingscommentair waor: \"''\$1''\".", # only shown if there is an edit comment
'revertpage'       => 'Wieziginge door [[Special:Contributions/$2|$2]] ([[User_talk:$2|Euverlik]]) trukgedriejd tot de lètste versie door [[User:$1|$1]]', # Additionally available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success' => 'Wieziginge door $1 trökgedrèjd; letste versie van $2 hersteld.',
'sessionfailure'   => "d'r Liek 'n probleem te zeen mit dien aanmelsessie. Diene hanjeling is gestop oet veurzorg taenge 'n beveiligingsrisico (det bestuit oet meugelik \"hijacking\"(euverkape) van deze sessie). Gao 'n pazjena trök, laaj die pazjena opnuuj en probeer 't nog ins.",

# Protect
'protectlogpage'              => "Logbook besjermde pazjena's",
'protectlogtext'              => "Hiej onger staon pazjena's die recèntelik beveilig zeen, of wo van de beveiliging is opgeheve.
Zuug de [[Special:ProtectedPages|lies mit beveiligde pazjena's]] veur alle hujige beveiligde pazjena's.",
'protectedarticle'            => '$1 besjermd',
'modifiedarticleprotection'   => 'verangerde beveiligingsniveau van "[[$1]]"',
'unprotectedarticle'          => 'besjerming van $1 opgeheve',
'protect-title'               => 'Besjerme van "$1"',
'prot_1movedto2'              => '[[$1]] verplaats nao [[$2]]',
'protect-legend'              => 'Bevèstig besjerme',
'protectcomment'              => 'Rede veur besjerming',
'protectexpiry'               => 'Verlöp:',
'protect_expiry_invalid'      => "De pazjena's aangegaeve verloup is ongeldig.",
'protect_expiry_old'          => "De pazjena verlöp in 't verleje.",
'protect-unchain'             => 'Maak verplaatse meugelik',
'protect-text'                => "Hiej kinse 't beveiligingsniveau veur de pazjena '''<nowiki>$1</nowiki>''' bekieke en wiezige.",
'protect-locked-blocked'      => "De kèns 't beveiligingsniveau neet verangere terwiels te geblokkeerd bis.
Hie zeen de hujige insjtèllinge veur de pazjena '''[[$1]]''':",
'protect-locked-dblock'       => "'t Beveiligingsniveau kin neet waere gewiezig ómdet de database geslaote is.
Hiej zeen de hujige instellinge veur de pazjena '''[[$1]]''':",
'protect-locked-access'       => "'''Diene gebroeker haet gein rechte om 't beveiligingsniveau te wiezige.'''
Dit zeen de hujige instellinge veur de pazjena '''[[$1]]''':",
'protect-cascadeon'           => "Deze pazjena is beveilig ómdet d'r in de volgende {{PLURAL:$1|pazjena|pazjena's}} is opgenaome, {{PLURAL:$1|dae|die}} beveilig {{PLURAL:$1|is|zeen}} mit de kaskaad-opsie. 't Beveiligingsniveau wiezige haet gein inkel effèk.",
'protect-default'             => 'Toesjtoon veur alle gebroekers',
'protect-fallback'            => 'Rech "$1" is neudig',
'protect-level-autoconfirmed' => 'Blokkere veur nuuj en anoniem gebroekers',
'protect-level-sysop'         => 'Allein systeemwèrkers',
'protect-summary-cascade'     => 'kaskaad',
'protect-expiring'            => 'verlöp op $1',
'protect-cascade'             => "Kaskaadbeveiliging - beveilig alle pazjena's en sjablone die in deze pazjena opgenaome zeen (let op; dit kin grote gevolge höbbe).",
'protect-cantedit'            => "De kèns 't beveiligingsniveau van dees pazjena neet verangere, ómdets te gein rech höbs det te bewirke.",
'protect-expiry-options'      => '2 oer:2 hours,1 daag:1 day,3 daag:3 days,1 waek:1 week,2 waek:2 weeks,1 maondj:1 month,3 maondj:3 months,6 maondj:6 months,1 jaor:1 year,veur iwweg:infinite', # display1:time1,display2:time2,...
'restriction-type'            => 'Rech:',
'restriction-level'           => 'Bepèrkingsniveau:',
'minimum-size'                => 'Min. gruutde',
'maximum-size'                => 'Max. gruutde:',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Bewèrke',
'restriction-move'   => 'Verplaatse',
'restriction-create' => 'Aanmake',
'restriction-upload' => 'Uploade',

# Restriction levels
'restriction-level-sysop'         => 'volledig beveilig',
'restriction-level-autoconfirmed' => 'semibeveilig',
'restriction-level-all'           => 'eder niveau',

# Undelete
'undelete'                     => 'Verwiederde pazjena trukplaatse',
'undeletepage'                 => "Verwiederde pazjena's bekieke en trukplaatse",
'undeletepagetitle'            => "''''t Volgende besteit oet verwiederde bewèrkinge van [[:$1]]'''.",
'viewdeletedpage'              => "Tuun gewisde pazjena's",
'undeletepagetext'             => "De ongersjtaande pazjena's zint verwiederd, meh bevinge zich nog sjteeds in 't archief, en kinne weure truukgeplaatsj.",
'undelete-fieldset-title'      => 'Versies trukplaatse',
'undeleteextrahelp'            => "Om de algehele pazjena inclusief alle irdere versies trök te plaatse: laot alle hökskes onafgevink en klik op '''''Trökplaatse'''''. Om slechs bepaalde versies trök te zètte: vink de trök te plaatse versies aan en klik op '''''Trökplaatse'''''. Esse op '''''Reset''''' kliks wörd 't toelichtingsveld laeggemaak en waere alle versies gedeselecteerd.",
'undeleterevisions'            => "$1 {{PLURAL:$1|versie|versies}} in 't archief",
'undeletehistory'              => 'Als u een pagina terugplaatst, worden alle versies als oude versies teruggeplaatst. Als er al een nieuwe pagina met dezelfde naam is aangemaakt, zullen deze versies als oude versies worden teruggeplaatst, maar de huidige versie neet gewijzigd worden.',
'undeleterevdel'               => 'Herstelle is neet meugelik es dao door de meis recènte versie van de pazjena gedeiltelik vewiederd wörd. Wis in zulke gevalle de meis recènt gewisde versies oet de selectie. Versies van bestenj waose gein toegang toe höbs waere neet hersteld.',
'undeletehistorynoadmin'       => 'Deze pazjena is gewis. De reje hiej veur stuit hiej onger, same mit de details van de gebroekers die deze pazjena höbbe bewerk véur de verwiedering. De verwiederde inhoud van de pazjena is allein zichbaar veur beheerders.',
'undelete-revision'            => 'Verwiederde versie van $1 (per $2) door $3:',
'undeleterevision-missing'     => "Ongeldige of missende versie. Meugelik höbse 'n verkeerde verwiezing of is de versie hersteld of verwiederd oet 't archief.",
'undelete-nodiff'              => 'Gein eerdere versie gevonje.',
'undeletebtn'                  => 'Trökzètte!',
'undeletelink'                 => 'trökplaatse',
'undeletereset'                => 'Resette',
'undeletecomment'              => 'Infermasie:',
'undeletedarticle'             => '"$1" is truukgeplaatsj.',
'undeletedrevisions'           => '$1 {{PLURAL:$1|versie|versies}} truukgeplaatsj',
'undeletedrevisions-files'     => '$1 {{PLURAL:$1|versie|versies}} en $2 {{PLURAL:$2|bestandj|bestenj}} trökgeplaats',
'undeletedfiles'               => '$1 {{PLURAL:$1|bestandj|bestenj}} trökgeplaats',
'cannotundelete'               => "Verwiedere mislùk. Mesjien haet 'ne angere gebroeker de pazjena al verwiederd.",
'undeletedpage'                => "<big>'''$1 is trökgeplaats'''</big>

In 't [[Special:Log/delete|logbook verwiederde pazjena's]] staon recènte verwiederinge en herstelhanjelinge.",
'undelete-header'              => "Zuug [[Special:Log/delete|'t logbook verwiederde pazjena's]] veur recènt verwiederde pazjena's.",
'undelete-search-box'          => "Doorzeuk verwiederde pazjena's",
'undelete-search-prefix'       => "Tuun pazjena's die beginne mit:",
'undelete-search-submit'       => 'Zeuk',
'undelete-no-results'          => "Gein pazjena's gevonje in 't archief mit verwiederde pazjena's.",
'undelete-filename-mismatch'   => 'Bestandsversie van tiedstip $1 kos neet hersteld waere: bestandsnaam klopte neet',
'undelete-bad-store-key'       => "Bestandsversie van tiedstip $1 kos neet hersteld waere: 't bestand miste al veurdet 't waerde verwiederd.",
'undelete-cleanup-error'       => 'Fout bie \'t herstelle van ongebroek archiefbestand "$1".',
'undelete-missing-filearchive' => "'t Luk neet om ID $1 trök te plaatse omdet 't neet in de database is. Mesjien is 't al trökgeplaats.",
'undelete-error-short'         => "Fout bie 't herstelle van bestand: $1",
'undelete-error-long'          => "d'r Zeen foute opgetraeje bie 't herstelle van 't bestand:

$1",
'undelete-show-file-submit'    => 'Jao',

# Namespace form on various pages
'namespace'      => 'Naamruumde:',
'invert'         => 'Ómgedriejde selectie',
'blanknamespace' => '(huidnaamruumde)',

# Contributions
'contributions'       => 'Biedrages per gebroeker',
'contributions-title' => 'Biedrage van $1',
'mycontris'           => 'Mien biedrages',
'contribsub2'         => 'Veur $1 ($2)',
'nocontribs'          => 'Gein wijzigingen gevonden die aan de gestelde criteria voldoen.',
'uctop'               => '(lèste verangering)',
'month'               => 'Van maond (en ierder):',
'year'                => 'Van jaor (en ierder):',

'sp-contributions-newbies'     => 'Tuun allein de bijdrages van nuuje gebroekers',
'sp-contributions-newbies-sub' => 'Veur nuujelinge',
'sp-contributions-blocklog'    => 'Blokkeerlogbook',
'sp-contributions-search'      => 'Zeuke nao biedrages',
'sp-contributions-username'    => 'IP-adres of gebroekersnaam:',
'sp-contributions-submit'      => 'Zeuk/tuun',

# What links here
'whatlinkshere'            => 'Links nao dees pazjena',
'whatlinkshere-title'      => 'Pazjena\'s die verwieze nao "$1"',
'whatlinkshere-page'       => 'Pazjena:',
'linkshere'                => "De volgende pazjena's verwieze nao '''[[:$1]]''':",
'nolinkshere'              => "D'r zint gein pazjena's mit links nao '''[[:$1]]''' haer.",
'nolinkshere-ns'           => "Geine inkele pazjena link nao '''[[:$1]]''' in de gekaoze naamruumde.",
'isredirect'               => 'redirect pazjena',
'istemplate'               => 'ingevoog es sjabloon',
'isimage'                  => 'bestandjslink',
'whatlinkshere-prev'       => '{{PLURAL:$1|veurige|veurige $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|volgende|volgende $1}}',
'whatlinkshere-links'      => '← verwiezinge nao dees pazjena',
'whatlinkshere-hideredirs' => '$1 redirects',
'whatlinkshere-hidetrans'  => '$1 transclusies',
'whatlinkshere-hidelinks'  => '$1 links',
'whatlinkshere-hideimages' => '$1 bestandjslinker',
'whatlinkshere-filters'    => 'Filters',

# Block/unblock
'blockip'                         => 'Blokkeer dit IP-adres',
'blockip-legend'                  => "'ne Gebroeker of IP-adres blokkere",
'blockiptext'                     => "Gebroek 't óngerstjaondj formeleer óm sjrieftoegank van e zeker IP-adres te verbeje. Dit maag allein gedaon weure om vandalisme te veurkómme.",
'ipaddress'                       => 'IP-adres',
'ipadressorusername'              => 'IP-adres of gebroekersnaam',
'ipbexpiry'                       => "Verlöp (maak 'n keuze)",
'ipbreason'                       => 'Reje',
'ipbreasonotherlist'              => 'Angere reje',
'ipbreason-dropdown'              => '*Väöl veurkommende rejer veur blokkaazjes
** Foutieve informatie inveure
** Verwiedere van informatie oet artikele
** Spamlinks nao externe websites
** Inveuge van nonsens in artikele
** Intimiderend gedraag
** Misbroek van meerdere gebroekers
** Onacceptabele gebroekersnaam',
'ipbanononly'                     => 'Blokkeer allein anonieme gebroekers',
'ipbcreateaccount'                => 'Blokkeer aanmake gebroekers',
'ipbemailban'                     => "Haoj de gebrorker van 't sture van e-mail",
'ipbenableautoblock'              => 'Automatisch de IP-adresse van deze gebroeker blokkere',
'ipbsubmit'                       => 'Blokkeer dit IP-adres',
'ipbother'                        => 'Anger verloup',
'ipboptions'                      => '2 oer:2 hours,1 daag:1 day,3 daag:3 days,1 waek:1 week,2 waek:2 weeks,1 maondj:1 month,3 maondj:3 months,6 maondj:6 months,1 jaor:1 year,veur iwweg:infinite', # display1:time1,display2:time2,...
'ipbotheroption'                  => 'anger verloup',
'ipbotherreason'                  => 'Angere/eventuele rejer:',
'ipbhidename'                     => "Verberg gebroekersnaam van 't blokkeerlogbook, de actieve blokkeerlies en de gebroekerslies",
'ipbwatchuser'                    => 'Gebroekerspazjena en euverlèkpazjena op vólglies plaatse',
'badipaddress'                    => "'t IP-adres haet 'n ongeldige opmaak.",
'blockipsuccesssub'               => 'Blokkaad gelök',
'blockipsuccesstext'              => '\'t IP-adres "$1" is geblokkeerd.<br />
Zuug de [[Special:IPBlockList|lies van geblokkeerde IP-adresse]].',
'ipb-edit-dropdown'               => 'Bewerk lies van rejer',
'ipb-unblock-addr'                => 'Ónblokkeer $1',
'ipb-unblock'                     => "Ónblokkeer 'ne gebroeker of IP-adres",
'ipb-blocklist-addr'              => 'Bekiek bestaonde blokkades veur $1',
'ipb-blocklist'                   => 'Bekiek bestaonde blokkades',
'unblockip'                       => 'Deblokkeer IP adres',
'unblockiptext'                   => 'Gebroek het ongersjtaonde formeleer om weer sjrieftoegang te gaeve aan e geblokkierd IP adres.',
'ipusubmit'                       => 'Deblokkeer dit IP-adres.',
'unblocked'                       => 'Blokkade van [[User:$1|$1]] is opgeheve',
'unblocked-id'                    => 'Blokkade $1 is opgeheve',
'ipblocklist'                     => 'Lies van geblokkeerde IP-adresse en gebroekers',
'ipblocklist-legend'              => "'ne Geblokkeerde gebroeker zeuke",
'ipblocklist-username'            => 'Gebroekersnaam of IP-adres:',
'ipblocklist-submit'              => 'Zeuk',
'blocklistline'                   => 'Op $1 blokkeerde $2 $3 ($4)',
'infiniteblock'                   => 'veur iwweg',
'expiringblock'                   => 'verlöp op $1',
'anononlyblock'                   => 'allein anoniem',
'noautoblockblock'                => 'autoblok neet actief',
'createaccountblock'              => 'aanmake gebroekers geblokkeerd',
'emailblock'                      => 'e-mail geblokkeerd',
'ipblocklist-empty'               => 'De blokkeerlies is laeg.',
'ipblocklist-no-results'          => 'Dit IP-adres of deze gebroekersnaam is neet geblokkeerd.',
'blocklink'                       => 'Blokkeer',
'unblocklink'                     => 'deblokkere',
'change-blocklink'                => 'blokkaasj verangere',
'contribslink'                    => 'biedrages',
'autoblocker'                     => 'Ómdets te \'n IP-adres deils mit "$1" (geblokkeerd mit raeje "$2") bis te automatisch geblokkeerd.',
'blocklogpage'                    => 'Blokkeerlogbook',
'blocklogentry'                   => '"[[$1]]" is geblokkeerd veur d\'n tied van $2 $3',
'blocklogtext'                    => "Dit is 'n log van blokkades van gebroekers. Automatisch geblokkeerde IP-adresse sjtoon hie neet bie. Zuug de [[Special:IPBlockList|Lies van geblokkeerde IP-adresse]] veur de lies van op dit mement wèrkende blokkades.",
'unblocklogentry'                 => 'blokkade van $1 opgeheve',
'block-log-flags-anononly'        => 'allein anoniem',
'block-log-flags-nocreate'        => 'aanmake gebroekers geblokkeerd',
'block-log-flags-noautoblock'     => 'autoblok ongedaon gemaak',
'block-log-flags-noemail'         => 'e-mail geblokkeerd',
'block-log-flags-angry-autoblock' => 'oetgebreide automatische blokkade ingesjakeld',
'range_block_disabled'            => "De meugelikheid veur beheerders om 'ne groep IP-adresse te blokkere is oetgesjakeld.",
'ipb_expiry_invalid'              => 'Ongeldig verloup.',
'ipb_already_blocked'             => '"$1" is al geblokkeerd',
'ipb_cant_unblock'                => 'Fout: Blokkadenummer $1 neet gevonje. Mesjiens is de blokkade al opgeheve.',
'ipb_blocked_as_range'            => "Fout: 't IP-adres $1 is neet direct geblokkeerd en de blokkade kan neet opgeheve waere. De blokkade is ongerdeil van de reeks $2, wovan de blokkade waal opgeheve kan waere.",
'ip_range_invalid'                => 'Ongeldige IP-reeks',
'blockme'                         => 'Blokkeer mich',
'proxyblocker'                    => 'Proxyblokker',
'proxyblocker-disabled'           => 'Deze functie is oetgesjakeld.',
'proxyblockreason'                => "Dien IP-adres is geblokkeerd ómdat 't 'n aope proxy is. Contacteer estebleef diene internet service provider of technische óngersjteuning en informeer ze euver dit serjeus veiligheidsprebleem.",
'proxyblocksuccess'               => 'Klaor.',
'sorbsreason'                     => 'Dien IP-adres is opgenaome in de DNS-blacklist es open proxyserver, dae {{SITENAME}} gebroek.',
'sorbs_create_account_reason'     => 'Dien IP-adres is opgenómme in de DNS-blacklist es open proxyserver, dae {{SITENAME}} gebroek. De kèns gein gebroekersaccount aanmake.',

# Developer tools
'lockdb'              => 'Database blokkere',
'unlockdb'            => 'Deblokkeer de database',
'lockdbtext'          => "Waarsjoewing: De database blokkere haet 't gevolg dat nemes nog pazjena's kint bewirke, veurkäöre kint verangere of get angers kint doon woeveur d'r verangeringe in de database nudig zint.",
'unlockdbtext'        => "Het de-blokkeren van de database zal de gebroekers de mogelijkheid geven om wijzigingen aan pagina's op te slaan, hun voorkeuren te wijzigen en alle andere bewerkingen waarvoor er wijzigingen in de database nodig zijn. Is dit inderdaad wat u wilt doen?.",
'lockconfirm'         => 'Jao, ich wil de database blokkere.',
'unlockconfirm'       => 'Ja, ik wil de database de-blokkeren.',
'lockbtn'             => 'Database blokkere',
'unlockbtn'           => 'Deblokkeer de database',
'locknoconfirm'       => "De höbs 't vekske neet aangevink om dien keuze te bevèstige.",
'lockdbsuccesssub'    => 'Blokkering database succesvol',
'unlockdbsuccesssub'  => 'Blokkering van de database opgeheven',
'lockdbsuccesstext'   => "De database is geblokkeerd.<br />

Vergaet neet de database opnuuj te [[Special:UnlockDB|deblokkere]] wens te klaor bis mit 't óngerhaud.",
'unlockdbsuccesstext' => 'Blokkering van de database van {{SITENAME}} is opgeheven.',
'lockfilenotwritable' => "Gein sjriefrechte op 't databaselockbestandj. Om de database te kinne blokkere of vrie te gaeve, dient de webserver sjriefrechte op dit bestandj te höbbe.",
'databasenotlocked'   => 'De database is neet geblokkeerd.',

# Move page
'move-page'               => '"$1" hernömme',
'move-page-legend'        => 'Verplaats pazjena',
'movepagetext'            => "Mit 't óngersjtaond formuleer kans te 'n pazjena verplaatse. De historie van de ouw pazjena zal nao de nuuj mitgaon. De ouwe titel zal automatisch 'ne redirect nao de nuuj pazjena waere. Doe kans 'n pazjena allein verplaatse, es gein pazjena besjteit mit de nuje naam, of es op die pazjena allein 'ne redirect zónger historie sjteit.",
'movepagetalktext'        => "De biebehurende euverlèkpazjena weurt ouch verplaats, mer '''neet''' in de volgende gevalle:
* es al 'n euverlèkpazjena besjteit ónger de angere naam
* es doe 't óngersjtaond vekske neet aanvinks",
'movearticle'             => 'Verplaats pazjena',
'movenologin'             => 'Neet aangemèld',
'movenologintext'         => "Veur 't verplaatsje van 'n pazjena mos e zien [[Special:UserLogin|aangemèld]].",
'movenotallowed'          => "De kèns gein pazjena's verplaatse.",
'newtitle'                => 'Nao de nuje titel',
'move-watch'              => 'Volg deze pazjena',
'movepagebtn'             => 'Verplaats pazjena',
'pagemovedsub'            => 'De verplaatsing is gelök',
'movepage-moved'          => '<big>\'\'\'"$1" is verplaats nao "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => "Dao is al 'n pazjena mit dees titel of de titel is óngeljig. <br />Kees estebleef 'n anger titel.",
'cantmove-titleprotected' => "De kèns gein pazjena nao deze titel herneume, ómdet de nuje titel beveilig is taege 't aanmake d'rvan.",
'talkexists'              => "De pazjena zelf is verplaats, meh de euverlikpazjena kós neet verplaats waere, ómdat d'r al 'n euverlikpazjena mit de nuje titel besjtóng. Combineer de euverlikpazjena's estebleef mit de hand.",
'movedto'                 => 'verplaats nao',
'movetalk'                => 'Verplaats de euverlikpazjena ouch.',
'move-subpages'           => "Alle subpazjena's hernömme",
'move-talk-subpages'      => "Alle subpazjena's van euverlèkpazjena's hernömme",
'movepage-page-exists'    => 'De pazjena $1 besteit al en kan neet automatisch gewis waere.',
'movepage-page-moved'     => 'De pazjena $1 is hernömp nao $2.',
'movepage-page-unmoved'   => 'De pazjena $1 kós neet hernömp waere nao $2.',
'movepage-max-pages'      => "'t Maximaal aantal automatisch te hernömme pazjena's is bereik ($1). De euverige pazjena's waere neet automatisch hernömp.",
'1movedto2'               => '[[$1]] verplaats nao [[$2]]',
'1movedto2_redir'         => '[[$1]] euver redirect verplaats nao [[$2]]',
'movelogpage'             => "Logbook verplaatsde pazjena's",
'movelogpagetext'         => "Dit is de lies van verplaatsde pazjena's.",
'movereason'              => 'Lèk oet woeróm',
'revertmove'              => 'trökdrieje',
'delete_and_move'         => 'Wis en verplaats',
'delete_and_move_text'    => '==Wisse vereis==

De doeltitel "[[:$1]]" besjteit al. Wils te dit artikel wisse óm ruumde te make veur de verplaatsing?',
'delete_and_move_confirm' => 'Jao, wis de pazjena',
'delete_and_move_reason'  => 'Gewis óm artikel te kónne verplaatse',
'selfmove'                => "De kèns 'n pazjena neet verplaatse nao dezelfde paginanaam.",
'imagenocrossnamespace'   => "'n Mediabestand kin neet nao 'n anger naamruumde verplaats waere",
'imagetypemismatch'       => "De nuje bestandjsextensie is neet gliek aan 't bestandjstype.",
'imageinvalidfilename'    => 'De nuje bestandsnaam is ongeldig',
'fix-double-redirects'    => 'Alle doorverwiezinge biewerke die verwieze nao de originele paginanaam',
'move-leave-redirect'     => "'n Doorverwiezing achterlaote",

# Export
'export'            => "Exporteer pazjena's",
'exporttext'        => "De kèns de teks en historie van 'n pazjena of van pazjena's exportere (oetveure) nao XML. Dit exportbestandj is daonao te importere (inveure) in 'ne angere MediaWiki mit de [[Special:Import|importpazjena]]. (dèks is hie importrech veur nudig)

Gaef in 't óngersjtaonde veldj de name van de te exportere pazjena's op, ein pazjena per regel, en gaef aan ofs te alle versies mit de bewerkingssamevatting of allein de hujige versies mit de bewirkingssamevatting wils exportere.

In 't letste geval kèns te ouch 'ne link gebroeken, bieveurbild [[{{ns:special}}:Export/{{MediaWiki:Mainpage}}]] veur de pazjena \"[[{{MediaWiki:Mainpage}}]]\".",
'exportcuronly'     => 'Allein de letste versie, neet de volledige gesjiedenis',
'exportnohistory'   => "----
'''Let op:''' 't exportere van de ganse gesjiedenis is oetgezat waeges prestatieree.",
'export-submit'     => 'Exportere',
'export-addcattext' => "Voeg pagina's toe van categorie:",
'export-addcat'     => 'Toevoege',
'export-download'   => 'Es bestandj opslaon',
'export-templates'  => 'Sjablone toevoge',

# Namespace 8 related
'allmessages'               => 'Alle systeemberichte',
'allmessagesname'           => 'Naam',
'allmessagesdefault'        => 'Obligaten teks',
'allmessagescurrent'        => 'Hujige teks',
'allmessagestext'           => "Dit is 'n lies van alle systeemberichte besjikbaar in de MediaWiki:-naamruumde.",
'allmessagesnotsupportedDB' => "Deze pagina kan neet gebroek waere omdet '''\$wgUseDatabaseMessages''' oet steit.",
'allmessagesfilter'         => 'Berich naamfilter:',
'allmessagesmodified'       => 'Tuun allein gewiezigde systeemtekste',

# Thumbnails
'thumbnail-more'           => 'Vergroete',
'filemissing'              => 'Besjtand ontbrik',
'thumbnail_error'          => "Fout bie 't aanmake van thumbnail: $1",
'djvu_page_error'          => 'DjVu-pagina boete bereik',
'djvu_no_xml'              => "De XML veur 't DjVu-bestandj kos neet opgehaald waere",
'thumbnail_invalid_params' => 'Onzjuste thumbnailparamaetere',
'thumbnail_dest_directory' => 'Neet in staat doel directory aan te make',

# Special:Import
'import'                     => "Pazjena's importere",
'importinterwiki'            => 'Transwiki-import',
'import-interwiki-text'      => "Selecteer 'ne wiki en pazjenanaam om te importere.
Versie- en auteursgegaeves blieve hiej bie bewaard.
Alle transwiki-importhanjelinge waere opgeslage in 't [[Special:Log/import|importlogbook]].",
'import-interwiki-history'   => 'Volledige gesjiedenis van deze pazjena ouch kopiëre',
'import-interwiki-submit'    => 'Importere',
'import-interwiki-namespace' => 'Pazjena in de volgende naamruumde plaatse:',
'import-comment'             => 'Opmèrking:',
'importtext'                 => 'Gebroek de functie Special:Export in de wiki wo de informatie vanaaf kömp, slao de oetveur op dien eige systeem op, en voeg dae dao nao hiej toe.',
'importstart'                => "Pazjena's aan 't importere ...",
'import-revision-count'      => '$1 {{PLURAL:$1|versie|versies}}',
'importnopages'              => "Gein pazjena's te importere.",
'importfailed'               => 'Import is misluk: $1',
'importunknownsource'        => 'Ónbekindj importbróntype',
'importcantopen'             => "Kós 't importbestandj neet äöpene",
'importbadinterwiki'         => 'Verkeerde interwikilink',
'importnotext'               => 'Laeg of geine teks',
'importsuccess'              => 'Import geslaag!',
'importhistoryconflict'      => "d'r Zeen conflicte in de gesjiedenis van de pazjena (is mesjiens eerder geïmporteerd)",
'importnosources'            => "d'r Zeen gein transwiki-importbrónne gedefinieerd en directe gesjiedenis-uploads zeen oetgezat.",
'importnofile'               => "d'r Is gein importbestandj geüpload.",
'importuploaderrorsize'      => "Upload van 't importbestandj is misluk. 't Bestand is groter es de ingesteldje limiet.",
'importuploaderrorpartial'   => "Upload van 't importbestandj is misluk. 't Bestandj is slechs gedeiltelik aangekómme.",
'importuploaderrortemp'      => "Upload van 't importbestandj is misluk. De tiedelike map is neet aanwezig.",
'import-parse-failure'       => "Fout bie 't verwerke van de XML-import",
'import-noarticle'           => "d'r Zeen gein importeerbaar pazjena's!",
'import-nonewrevisions'      => 'Alle versies zeen al eerder geïmporteerd.',
'xml-error-string'           => '$1 op regel $2, kolom $3 (byte $4): $5',
'import-upload'              => 'XML-gegaeves uploade',
'import-invalid-interwiki'   => "'t Is neet mäögelik van de aangegeve wiki te importere.",

# Import log
'importlogpage'                    => 'Importlogbook',
'importlogpagetext'                => "Administratieve import van pazjena's mit gesjiedenis van anger wiki's.",
'import-logentry-upload'           => "[[$1]] geïmporteerd via 'ne bestandjsupload",
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|versie|versies}}',
'import-logentry-interwiki'        => 'transwiki veur $1 geslaag',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|versie|versies}} van $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Dien gebroekerspagina',
'tooltip-pt-anonuserpage'         => 'De gebroekerspazjena veur dit IP adres',
'tooltip-pt-mytalk'               => 'Dien euverlèkpagina',
'tooltip-pt-anontalk'             => 'Euverlèk euver verangeringe doer dit IP addres',
'tooltip-pt-preferences'          => 'Mien veurkäöre',
'tooltip-pt-watchlist'            => "De lies van gevolgde pazjena's.",
'tooltip-pt-mycontris'            => 'Lies van dien biedraag',
'tooltip-pt-login'                => "De weurs aangemodigd om in te logge, meh 't is neet verplich.",
'tooltip-pt-anonlogin'            => 'De weurs aangemodigd om in te logge, meh t is neet verplich.',
'tooltip-pt-logout'               => 'Aafmèlde',
'tooltip-ca-talk'                 => 'Euverlèk euver dit artikel',
'tooltip-ca-edit'                 => 'De kins dees pazjena verangere.',
'tooltip-ca-addsection'           => "Begin 'n nuuj sectie",
'tooltip-ca-viewsource'           => 'Dees pazjena is besjirmp. De kins häör brontèks bekieke.',
'tooltip-ca-history'              => 'Auw versies van dees pazjena.',
'tooltip-ca-protect'              => 'Besjirm dees pazjena',
'tooltip-ca-delete'               => 'Sjaf dees pazjena eweg',
'tooltip-ca-undelete'             => 'Hersjtèl de verangeringe van dees pazjena van veurdat ze gewist woerd',
'tooltip-ca-move'                 => 'Verplaats dees pazjena',
'tooltip-ca-watch'                => 'Dees pazjena toeveuge aan volgliest',
'tooltip-ca-unwatch'              => 'Dees pazjena van volgliest aafhaole',
'tooltip-search'                  => 'Doorzeuk {{SITENAME}}',
'tooltip-search-go'               => "Gao nao 'ne pazjena mit dezelfde naam es d'r bestuit",
'tooltip-search-fulltext'         => "Zeuk de pazjena's veur dees teks",
'tooltip-p-logo'                  => 'Veurblaad',
'tooltip-n-mainpage'              => "Bezeuk 't veurblaad",
'tooltip-n-portal'                => "Euver 't projèk, was e kins doon, woe se dinger kins vinge",
'tooltip-n-currentevents'         => "Achtergrondinfo van 't nuuis",
'tooltip-n-recentchanges'         => 'De lies van recènte verangeringe in de wiki.',
'tooltip-n-randompage'            => "Laaj 'n willekäörige pazjena",
'tooltip-n-help'                  => 'De plek om informatie euver dit projèk te vinge.',
'tooltip-t-whatlinkshere'         => "Lies van alle wikipazjena's die hieheen linke",
'tooltip-t-recentchangeslinked'   => "Recènte verangeringe in pazjena's woeheen gelink weurd",
'tooltip-feed-rss'                => 'RSS feed veur dees pazjena',
'tooltip-feed-atom'               => 'Atom feed veur dees pazjena',
'tooltip-t-contributions'         => 'Bekiek de lies van contributies van dizze gebroeker',
'tooltip-t-emailuser'             => 'Sjtuur inne mail noa dizze gebroeker',
'tooltip-t-upload'                => 'Upload plaetsjes of media besjtande',
'tooltip-t-specialpages'          => "Lies van alle speciaal pazjena's",
'tooltip-t-print'                 => 'Printvruntjelike versie van deze pagina',
'tooltip-t-permalink'             => 'Permanente link nao deze versie van de pagina',
'tooltip-ca-nstab-main'           => 'Bekiek de pazjena',
'tooltip-ca-nstab-user'           => 'Bekiek de gebroekerspazjena',
'tooltip-ca-nstab-media'          => 'Bekiek de mediapazjena',
'tooltip-ca-nstab-special'        => 'Dit is n speciaal pazjena, de kins dees pazjena neet zelf editte.',
'tooltip-ca-nstab-project'        => 'Bekiek de projèkpazjena',
'tooltip-ca-nstab-image'          => 'Bekiek de besjtandjspazjena',
'tooltip-ca-nstab-mediawiki'      => 'Bekiek t systeimberich',
'tooltip-ca-nstab-template'       => 'Bekiek t sjabloon',
'tooltip-ca-nstab-help'           => 'Bekiek de helppazjena',
'tooltip-ca-nstab-category'       => 'Bekiek de kattegoriepazjena',
'tooltip-minoredit'               => "Markeer dit es 'n klein verangering",
'tooltip-save'                    => 'Bewaar dien verangeringe',
'tooltip-preview'                 => 'Bekiek dien verangeringe veurdets te ze definitief opsjleis!',
'tooltip-diff'                    => 'Bekiek dien verangeringe in de teks.',
'tooltip-compareselectedversions' => 'Bekiek de versjille tusje de twie geselecteerde versies van dees pazjena.',
'tooltip-watch'                   => 'Voog dees pazjena toe aan dien volglies',
'tooltip-recreate'                => 'Maak deze pagina opnuuj aan ondanks irdere verwiedering',
'tooltip-upload'                  => 'Uploade',
'tooltip-rollback'                => 'Mit "trökdrieje" drejs doe mit ein klik de bewirking(e) trök van de lètste gebroeker dee dees pagina haet bewirk.',
'tooltip-undo'                    => 'Mit "óngedaon make" drejs te dees bewirking trök en koms te in \'t bewirkingsvinster.
Doe kens in de bewirkingssamevatting \'n reej opgaeve.',

# Metadata
'nodublincore'      => 'Dublin Core RDF metadata is oetgesjakeld op deze server.',
'nocreativecommons' => 'Creative Commons RDF metadata is oetgesjakeld op deze server.',
'notacceptable'     => "De wikiserver kin de gegaeves neet levere in  'ne vorm dae diene client kin laeze.",

# Attribution
'anonymous'        => 'Anoniem(e) gebroeker(s) van {{SITENAME}}',
'siteuser'         => '{{SITENAME}} gebroeker $1',
'lastmodifiedatby' => "Dees pazjena is 't litst verangert op $2, $1 doer $3.", # $1 date, $2 time, $3 user
'othercontribs'    => 'Gebaseerd op wèrk van $1.',
'others'           => 'angere',
'siteusers'        => '{{SITENAME}} gebroekers(s) $1',
'creditspage'      => 'Sjrievers van dees pazjena',
'nocredits'        => "d'r Is gein auteursinformatie besjikbaar veur deze pagina.",

# Spam protection
'spamprotectiontitle' => 'Spamfilter',
'spamprotectiontext'  => "De pagina daese wildes opslaon is geblokkeerd door de spamfilter. Meistal wörd dit door 'ne externe link veroorzaak.",
'spamprotectionmatch' => "De volgende teks veroorzaakte 'n alarm van de spamfilter: $1",
'spambot_username'    => 'MediaWiki spam opruming',
'spam_reverting'      => 'Bezig mit trökdrèjje nao de letste versie die gein verwiezing haet nao $1',
'spam_blanking'       => "Alle wieziginge mit 'ne link nao $1 waere verwiederd",

# Info page
'infosubtitle'   => 'Informatie veur pagina',
'numedits'       => 'Aantal bewerkinge (pagina): $1',
'numtalkedits'   => 'Aantal bewerkinge (euverlikpagina): $1',
'numwatchers'    => 'Aantal volgende: $1',
'numauthors'     => 'Aantal sjrievers (pagina): $1',
'numtalkauthors' => 'Aantal versjilende auteurs (euverlikpagina): $1',

# Skin names
'skinname-standard'    => 'Standaard',
'skinname-nostalgia'   => 'Nostalgie',
'skinname-cologneblue' => 'Keuls blauw',

# Math options
'mw_math_png'    => 'Ummer PNG rendere',
'mw_math_simple' => 'HTML in erg simpele gevalle en angesj PNG',
'mw_math_html'   => 'HTML woe meugelik en angesj PNG',
'mw_math_source' => 'Laot de TeX code sjtaon (vuur tèksbrowsers)',
'mw_math_modern' => 'Aangeroaje vuur nuui browsers',
'mw_math_mathml' => 'MathML woe meugelik (experimenteil)',

# Patrolling
'markaspatrolleddiff'                 => 'Markeer es gecontroleerd',
'markaspatrolledtext'                 => 'Markeer deze pagina es gecontroleerd',
'markedaspatrolled'                   => 'Gemarkeerd es gecontroleerd',
'markedaspatrolledtext'               => 'De gekaoze versie is gemarkeerd es gecontroleerd.',
'rcpatroldisabled'                    => 'De controlemeugelikheid op recènte wieziginge is oetgesjakeld.',
'rcpatroldisabledtext'                => 'De meugelikheid om recènte verangeringe es gecontroleerd aan te mèrke is op dit ougeblik oetgesjakeld.',
'markedaspatrollederror'              => 'Kin neet es gecontroleerd waere aangemèrk',
'markedaspatrollederrortext'          => "Selecteer 'ne versie om es gecontroleerd aan te mèrke.",
'markedaspatrollederror-noautopatrol' => 'De kèns dien eige verangeringe neet es gecontroleerd markere.',

# Patrol log
'patrol-log-page' => 'Markeerlogbook',
'patrol-log-line' => 'markeerde versie $1 van $2 es gecontroleerd $3',
'patrol-log-auto' => '(automatisch)',

# Image deletion
'deletedrevision'                 => 'Aw versie $1 gewis',
'filedeleteerror-short'           => "Fout biej 't wisse van bestandj: $1",
'filedeleteerror-long'            => "d'r Zeen foute opgetraoje bie 't verwiedere van 't bestandj:

$1",
'filedelete-missing'              => '\'t Bestandj "$1" kin neet gewis waere, ómdet \'t neet bestuit.',
'filedelete-old-unregistered'     => 'De aangegaeve bestandjsversie "$1" stuit neet in de database.',
'filedelete-current-unregistered' => '\'t Aangegaeve bestandj "$1" stuit neet in de database.',
'filedelete-archive-read-only'    => 'De webserver kin neet in de archiefmap "$1" sjrieve.',

# Browsing diffs
'previousdiff' => '← Veurige bewirking',
'nextdiff'     => 'Volgende bewirking →',

# Media information
'mediawarning'         => "'''Waorsjuwing''': Dit bestanj kin 'ne angere code höbbe, door 't te doorveure in dien systeem kin 't gecompromiseerde dinger oplevere.<hr />",
'imagemaxsize'         => "Bepèrk plaetsjes op de besjrievingspazjena's van aafbeildinge tot:",
'thumbsize'            => 'Gruutde vanne thumbnail:',
'widthheightpage'      => "$1×$2, $3 {{PLURAL:$3|pazjena|pazjena's}}",
'file-info'            => '(bestandsgruutde: $1, MIME-type: $2)',
'file-info-size'       => '($1 × $2 pixels, besjtandjgruutde: $3, MIME-type: $4)',
'file-nohires'         => '<small>Gein hogere resolutie besjikbaar.</small>',
'svg-long-desc'        => '(SVG-bestandj, nominaal $1 × $2 pixels, bestandsgruutde: $3)',
'show-big-image'       => 'Vol resolutie',
'show-big-image-thumb' => '<small>Gruutde van deze afbeilding: $1 × $2 pixels</small>',

# Special:NewFiles
'newimages'             => 'Nuuj plaetjes',
'imagelisttext'         => "Hie volg 'n lies mit $1 {{PLURAL:$1|aafbeilding|aafbeildinge}} geordend $2.",
'newimages-summary'     => 'Op dees speciaal pazjena waere de meis recènt toegevoogde bestenj weergegaeve.',
'showhidebots'          => '($1 Bots)',
'noimages'              => 'Niks te zeen.',
'ilsubmit'              => 'Zeuk',
'bydate'                => 'op datum',
'sp-newimages-showfrom' => 'Tuun nuuj aafbeildinge vanaaf $2, $1',

# Bad image list
'bad_image_list' => "De opmaak is es volg:

Allein regele in 'n lies (regele die mit * beginnen) waere verwirk. De ierste link op 'ne regel mót 'ne link zeen nao 'n óngewunsj plaetje.
Alle volgende links die op dezelfde regel sjtaon, waere behanjeld es oetzunjering, zoe wie pazjena's woe-op 't plaetje in de teks opgenómme is.",

# Metadata
'metadata'          => 'Metadata',
'metadata-help'     => "Dit besjtandj bevat aanvullende informatie, dae door 'ne fotocamera, 'ne scanner of 'n fotobewèrkingsprogramma toegevoog kin zeen. Es 't besjtandj aangepas is, dan komme details meugelik neet euverein mit 't gewiezigde besjtandj.",
'metadata-expand'   => 'Tuun oetgebreide gegaeves',
'metadata-collapse' => 'Versjtaek oetgebreide gegaeves',
'metadata-fields'   => "De EXIF metadatavelde in dit berich waere ouch getuund op 'n afbeildingspazjena es de metadatatabel is ingeklap. Anger velde waere verborge.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength", # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Breidte',
'exif-imagelength'                 => 'Hoogte',
'exif-bitspersample'               => 'Bits per componènt',
'exif-compression'                 => 'Cómpressiesjema',
'exif-photometricinterpretation'   => 'Pixelcompositie',
'exif-orientation'                 => 'Oriëntatie',
'exif-samplesperpixel'             => 'Aantal componente',
'exif-planarconfiguration'         => 'Gegaevesstructuur',
'exif-ycbcrsubsampling'            => 'Subsampleverhajing van Y toet C',
'exif-ycbcrpositioning'            => 'Y- en C-positionering',
'exif-xresolution'                 => 'Horizontale resolutie',
'exif-yresolution'                 => 'Verticale resolutie',
'exif-resolutionunit'              => 'Einheid X en Y resolutie',
'exif-stripoffsets'                => 'Locatie aafbeildingsgegaeves',
'exif-rowsperstrip'                => 'Rie per strip',
'exif-stripbytecounts'             => 'Bytes per gecomprimeerde strip',
'exif-jpeginterchangeformat'       => 'Aafstandj towt JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes JPEG-gegaeves',
'exif-transferfunction'            => 'Transferfunctie',
'exif-whitepoint'                  => 'Witpuntchromaticiteit',
'exif-primarychromaticities'       => 'Chromaticities of primaries',
'exif-ycbcrcoefficients'           => 'Transformatiematrixcoëfficiënte veur de kleurruumde',
'exif-referenceblackwhite'         => 'Paar zwarte en wite referentiewaarde',
'exif-datetime'                    => 'Datum en momènt besjtandjsverangering',
'exif-imagedescription'            => 'Omsjrieving aafbeilding',
'exif-make'                        => 'Merk camera',
'exif-model'                       => 'Cameramodel',
'exif-software'                    => 'Gebroekdje software',
'exif-artist'                      => 'Auteur',
'exif-copyright'                   => 'Copyrighthawter',
'exif-exifversion'                 => 'Exif-versie',
'exif-flashpixversion'             => 'Ongersteundje Flashpix-versie',
'exif-colorspace'                  => 'Kläörruumde',
'exif-componentsconfiguration'     => 'Beteikenis van edere componènt',
'exif-compressedbitsperpixel'      => 'Cómpressiemeneer bie dit plaetje',
'exif-pixelydimension'             => 'Broekbare aafbeildingsbreidte',
'exif-pixelxdimension'             => 'Valind image height',
'exif-makernote'                   => 'Opmerkinge maker',
'exif-usercomment'                 => 'Opmerkinge',
'exif-relatedsoundfile'            => 'Biebeheurendj audiobestandj',
'exif-datetimeoriginal'            => 'Datum en momint van verwèkking',
'exif-datetimedigitized'           => 'Datum en momènt van digitizing',
'exif-subsectime'                  => 'Datum tied subsecond',
'exif-subsectimeoriginal'          => 'Subsecond tiedstip datageneratie',
'exif-subsectimedigitized'         => 'Subsecond tiedstip digitalisatie',
'exif-exposuretime'                => 'Beleechtingstied',
'exif-exposuretime-format'         => '$1 sec ($2)',
'exif-fnumber'                     => 'F-getal',
'exif-exposureprogram'             => 'Beleechtingsprogramma',
'exif-spectralsensitivity'         => 'Spectrale geveuligheid',
'exif-isospeedratings'             => 'ISO/ASA-waarde',
'exif-oecf'                        => 'Opto-elektronische conversiefactor',
'exif-shutterspeedvalue'           => 'Sloetersnelheid',
'exif-aperturevalue'               => 'Eupening',
'exif-brightnessvalue'             => 'Heljerheid',
'exif-exposurebiasvalue'           => 'Beleechtingscompensatie',
'exif-maxaperturevalue'            => 'Maximale diafragma-äöpening',
'exif-subjectdistance'             => 'Objekaafstandj',
'exif-meteringmode'                => 'Methode leechmaeting',
'exif-lightsource'                 => 'Leechbron',
'exif-flash'                       => 'Flitser',
'exif-focallength'                 => 'Brandjpuntjsaafstandj',
'exif-subjectarea'                 => 'Objekruumde',
'exif-flashenergy'                 => 'Flitssterkdje',
'exif-spatialfrequencyresponse'    => 'Ruumdelike frequentiereactie',
'exif-focalplanexresolution'       => 'Brandjpuntjsvlak-X-resolutie',
'exif-focalplaneyresolution'       => 'Brandjpuntjsvlak-Y-resolutie',
'exif-focalplaneresolutionunit'    => 'Einheid CCD-resolutie',
'exif-subjectlocation'             => 'Objekslocatie',
'exif-exposureindex'               => 'Beleechtingsindex',
'exif-sensingmethod'               => 'Opvangmethode',
'exif-filesource'                  => 'Bestandjsbron',
'exif-scenetype'                   => 'Saort scene',
'exif-cfapattern'                  => 'CFA-patroen',
'exif-customrendered'              => 'Aangepasdje beildverwerking',
'exif-exposuremode'                => 'Beleechtingsinstelling',
'exif-whitebalance'                => 'Witbalans',
'exif-digitalzoomratio'            => 'Digitale zoomfactor',
'exif-focallengthin35mmfilm'       => 'Brandjpuntjsaafstandj (35mm-equivalent)',
'exif-scenecapturetype'            => 'Saort opname',
'exif-gaincontrol'                 => 'Piekbeheersing',
'exif-contrast'                    => 'Contras',
'exif-saturation'                  => 'Verzaodiging',
'exif-sharpness'                   => 'Sjerpdje',
'exif-devicesettingdescription'    => 'Besjrieving methode-opties',
'exif-subjectdistancerange'        => 'Bereik objekaafstandj',
'exif-imageuniqueid'               => 'Unieke ID aafbeilding',
'exif-gpsversionid'                => 'GPS versienómmer',
'exif-gpslatituderef'              => 'Noorder- of zuderbreidte',
'exif-gpslatitude'                 => 'Breidtegraod',
'exif-gpslongituderef'             => 'Ooster- of westerlingdje',
'exif-gpslongitude'                => 'Lingdjegraod',
'exif-gpsaltituderef'              => 'Hoogdjereferentie',
'exif-gpsaltitude'                 => 'Hoogdje',
'exif-gpstimestamp'                => 'GPS-tied (atoomklok)',
'exif-gpssatellites'               => 'Gebroekdje satelliete veur maeting',
'exif-gpsstatus'                   => 'Ontvangerstatus',
'exif-gpsmeasuremode'              => 'Maetmodus',
'exif-gpsdop'                      => 'Maetprontheid',
'exif-gpsspeedref'                 => 'Snelheid einheid',
'exif-gpsspeed'                    => 'Snelheid van GPS-ontvanger',
'exif-gpstrackref'                 => 'Referentie veur bewaegingsrichting',
'exif-gpstrack'                    => 'Bewaegingsrichting',
'exif-gpsimgdirectionref'          => 'Referentie veur aafbeildingsrichting',
'exif-gpsimgdirection'             => 'Aafbeildingsrichting',
'exif-gpsmapdatum'                 => 'Gebroekdje geodetische ongerzeuksgegaeves',
'exif-gpsdestlatituderef'          => 'Referentie veur breidtegraod bestömming',
'exif-gpsdestlatitude'             => 'Breidtegraod bestömming',
'exif-gpsdestlongituderef'         => 'Referentie veur lingdjegraod bestömming',
'exif-gpsdestlongitude'            => 'Lingdjegraod bestömming',
'exif-gpsdestbearingref'           => 'Referentie veur richting nao bestömming',
'exif-gpsdestbearing'              => 'Richting nao bestömming',
'exif-gpsdestdistanceref'          => 'Referentie veur aafstandj toet bestömming',
'exif-gpsdestdistance'             => 'Aafstandj toet bestömming',
'exif-gpsprocessingmethod'         => 'GPS-verwerkingsmethode',
'exif-gpsareainformation'          => 'Naam GPS-gebied',
'exif-gpsdatestamp'                => 'GPS-datum',
'exif-gpsdifferential'             => 'Differentiële GPS-correctie',

# EXIF attributes
'exif-compression-1' => 'Óngecómprimeerd',

'exif-unknowndate' => 'Datum ónbekindj',

'exif-orientation-1' => 'Normaal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontaal gespegeldj', # 0th row: top; 0th column: right
'exif-orientation-3' => '180° gedrejd', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Verticaal gespegeldj', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Gespegeldj om as linksbaove-rechsonger', # 0th row: left; 0th column: top
'exif-orientation-6' => '90° rechsom gedrejd', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Gespegeldj om as linksonger-rechsbaove', # 0th row: right; 0th column: bottom
'exif-orientation-8' => '90° linksom gedrejd', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'chunky gegaevesformaat',
'exif-planarconfiguration-2' => 'planar gegaevesformaat',

'exif-componentsconfiguration-0' => 'besjteit neet',

'exif-exposureprogram-0' => 'Neet gedefiniëerd',
'exif-exposureprogram-1' => 'Handjmaotig',
'exif-exposureprogram-2' => 'Normaal programma',
'exif-exposureprogram-3' => 'Diafragmaprioriteit',
'exif-exposureprogram-4' => 'Sloeterprioriteit',
'exif-exposureprogram-5' => 'Creatief (veurkeur veur hoge sjerpte/deepdje)',
'exif-exposureprogram-6' => 'Actie (veurkeur veur hoge sloetersnelheid)',
'exif-exposureprogram-7' => 'Portret (detailopname mit ónsjerpe achtergróndj)',
'exif-exposureprogram-8' => 'Landjsjap (sjerpe achtergróndj)',

'exif-subjectdistance-value' => '$1 maeter',

'exif-meteringmode-0'   => 'Ónbekindj',
'exif-meteringmode-1'   => 'Gemiddeldj',
'exif-meteringmode-2'   => 'Centrumgewaoge',
'exif-meteringmode-3'   => 'Spot',
'exif-meteringmode-4'   => 'Multi-spot',
'exif-meteringmode-5'   => 'Multi-segment (patroon)',
'exif-meteringmode-6'   => 'Deilmaeting',
'exif-meteringmode-255' => 'Anges',

'exif-lightsource-0'   => 'Ónbekindj',
'exif-lightsource-1'   => 'Daagleech',
'exif-lightsource-2'   => 'TL-leech',
'exif-lightsource-3'   => 'Tungsten (lampeleech)',
'exif-lightsource-4'   => 'Flits',
'exif-lightsource-9'   => 'Net waer',
'exif-lightsource-10'  => 'Bewólk waer',
'exif-lightsource-11'  => 'Sjeem',
'exif-lightsource-12'  => 'Daagleech fluorescerend (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Daagwit fluorescerend (N 4600 - 5400K)',
'exif-lightsource-14'  => 'Keul wit fluorescerend (W 3900 - 4500K)',
'exif-lightsource-15'  => 'Wit fluorescerend (WW 3200 - 3700K)',
'exif-lightsource-17'  => 'Standaard leech A',
'exif-lightsource-18'  => 'Standaard leech B',
'exif-lightsource-19'  => 'Standaard leech C',
'exif-lightsource-24'  => 'ISO-studiotungsten',
'exif-lightsource-255' => 'Angere leechbron',

'exif-focalplaneresolutionunit-2' => 'inch',

'exif-sensingmethod-1' => 'Neet gedefiniëerd',
'exif-sensingmethod-2' => 'Ein-chip-kleursensor',
'exif-sensingmethod-3' => 'Twee-chip-kleursensor',
'exif-sensingmethod-4' => 'Drie-chip-kleursensor',
'exif-sensingmethod-5' => 'Kleurvolgendje gebiedssensor',
'exif-sensingmethod-7' => 'Drielienige sensor',
'exif-sensingmethod-8' => 'Kleurvolgendje liensensor',

'exif-scenetype-1' => "'ne Direk gefotografeerdje aafbeilding",

'exif-customrendered-0' => 'Normaal perces',
'exif-customrendered-1' => 'Aangepasdje verwerking',

'exif-exposuremode-0' => 'Automatische beleechting',
'exif-exposuremode-1' => 'Handjmaotige beleechting',
'exif-exposuremode-2' => 'Auto-Bracket',

'exif-whitebalance-0' => 'Automatische witbalans',
'exif-whitebalance-1' => 'Handjmaotige witbalans',

'exif-scenecapturetype-0' => 'Standaard',
'exif-scenecapturetype-1' => 'Landjsjap',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Nachscène',

'exif-gaincontrol-0' => 'Gein',
'exif-gaincontrol-1' => 'Lege pieke omhoog',
'exif-gaincontrol-2' => 'Hoge pieke omhoog',
'exif-gaincontrol-3' => 'Lege pieke omleeg',
'exif-gaincontrol-4' => 'Hoge pieke omleeg',

'exif-contrast-0' => 'Normaal',
'exif-contrast-1' => 'Weik',
'exif-contrast-2' => 'Hel',

'exif-saturation-0' => 'Normaal',
'exif-saturation-1' => 'Leeg',
'exif-saturation-2' => 'Hoog',

'exif-sharpness-0' => 'Normaal',
'exif-sharpness-1' => 'Zaach',
'exif-sharpness-2' => 'Hel',

'exif-subjectdistancerange-0' => 'Onbekindj',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Kortbie',
'exif-subjectdistancerange-3' => 'Wied weg',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Noorderbreidte',
'exif-gpslatitude-s' => 'Zuderbreidte',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Oosterlingdje',
'exif-gpslongitude-w' => 'Westerlingdje',

'exif-gpsstatus-a' => 'Bezig mit maete',
'exif-gpsstatus-v' => 'Maetinteroperabiliteit',

'exif-gpsmeasuremode-2' => '2-dimensionale maeting',
'exif-gpsmeasuremode-3' => '3-dimensionale maeting',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilomaeter per oer',
'exif-gpsspeed-m' => 'Miel per oer',
'exif-gpsspeed-n' => 'Knuip',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Eigelike richting',
'exif-gpsdirection-m' => 'Magnetische richting',

# External editor support
'edit-externally'      => "Bewirk dit bestand mit 'n extern toepassing",
'edit-externally-help' => '(zuug de [http://www.mediawiki.org/wiki/Manual:External_editors setupinsjtructies] veur mie informatie)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'al',
'imagelistall'     => 'al',
'watchlistall2'    => 'al',
'namespacesall'    => 'alle',
'monthsall'        => 'al',

# E-mail address confirmation
'confirmemail'             => 'Bevèstig e-mailadres',
'confirmemail_noemail'     => 'Doe höbs gein geldig e-mailadres ingegaeve in dien [[Special:Preferences|veurkäöre]].',
'confirmemail_text'        => "Deze wiki vereis dats te dien e-mailadres instèls iedats te e-mailfuncties
gebroeks. Klik op de knop hieónger óm e bevèstegingsberich nao dien adres te
sjikke. D'n e-mail zal 'ne link mèt 'n code bevatte; eupen de link in diene
browser óm te bevestege dat dien e-mailadres werk.",
'confirmemail_pending'     => "Dao is al 'n bevestigingsberich aan dich versjik. Wens te zjus diene gebroeker aangemaak höbs, wach dan e paar minute pès 't aankump veurdets te opnuuj 'n e-mail leuts sjikke.",
'confirmemail_send'        => "Sjik 'n bevèstegingcode",
'confirmemail_sent'        => 'Bevèstegingsberich versjik.',
'confirmemail_oncreate'    => "D'r is 'n bevestigingscode nao dien e-mailadres versjik. Dees code is neet nudig óm aan te melje, meh doe mós dees waal bevestige veurdets te de e-mailmäögelikheite van deze wiki kèns nótse.",
'confirmemail_sendfailed'  => "Kós 't bevèstegingsberich neet versjikke. Zuug dien e-mailadres nao op óngeljige karakters.

't E-mailprogramma goof: $1",
'confirmemail_invalid'     => 'Óngeljige bevèstigingscode. De code is meugelik verloupe.',
'confirmemail_needlogin'   => 'Doe mós $1 óm dien e-mailadres te bevestige.',
'confirmemail_success'     => 'Dien e-mailadres is bevesteg. De kins noe inlogke en van de wiki genete.',
'confirmemail_loggedin'    => 'Dien e-mailadres is noe vasgelag.',
'confirmemail_error'       => "Bie 't opsjlaon van eur bevèstiging is get fout gegange.",
'confirmemail_subject'     => 'Bevèstiging e-mailadres veur {{SITENAME}}',
'confirmemail_body'        => "Emes, waorsjienlik doe vanaaf 't IP-adres $1, heet 'n account $2
aangemaak mit dit e-mailadres op {{SITENAME}}.

Eupen óm te bevèstige dat dit account wirkelik van dich is en de
e-mailgegaeves op {{SITENAME}} te activere deze link in diene browser:

$3

Es geer dit *neet* zeet, vólg den deze link:

$5

Dees bevèstigingscode blief geljig tot $4",
'confirmemail_invalidated' => 'De e-mailbevestiging is geannuleerdj',
'invalidateemail'          => 'E-mailbevestiging annulere',

# Scary transclusion
'scarytranscludedisabled' => '[Interwikitransclusie is oetgesjakeld]',
'scarytranscludefailed'   => '[Sjabloon $1 kós neet opgehaold waere; sorry]',
'scarytranscludetoolong'  => '[URL is te lank; sorry]',

# Trackbacks
'trackbackbox'      => "<div id='mw_trackbacks'>
Trackbacks veur deze pazjena:<br />
$1
</div>",
'trackbackremove'   => ' ([$1 Wusje])',
'trackbacklink'     => 'Trackback',
'trackbackdeleteok' => 'De trackback is gewusj.',

# Delete conflict
'deletedwhileediting' => 'Waorsjoewing: dees pazjena is gewis naodats doe bis begós mit bewirke.',
'confirmrecreate'     => "Gebroeker [[User:$1|$1]] ([[User talk:$1|euverlèk]]) heet dit artikel gewis naodats doe mèt bewirke begós mèt de rae:
: ''$2''
Bevèsteg estebleef dats te dees pazjena ech obbenuujts wils make.",
'recreate'            => 'Pazjena obbenuujts make',

# action=purge
'confirm_purge_button' => 'ok',
'confirm-purge-top'    => 'Wils te de buffer vaan dees paas wisse?',

# Multipage image navigation
'imgmultipageprev' => '← veurige pazjena',
'imgmultipagenext' => 'volgende pazjena →',
'imgmultigo'       => 'Gank!',
'imgmultigoto'     => 'Gank naor pazjena $1',

# Table pager
'ascending_abbrev'         => 'opl.',
'descending_abbrev'        => 'aaf.',
'table_pager_next'         => 'Volgende pazjena',
'table_pager_prev'         => 'Veurige pazjena',
'table_pager_first'        => 'Ierste pazjena',
'table_pager_last'         => 'Lètste pazjena',
'table_pager_limit'        => 'Tuin $1 resultate per pazjena',
'table_pager_limit_submit' => 'Gao',
'table_pager_empty'        => 'Gein resultate',

# Auto-summaries
'autosumm-blank'   => 'Pazjena laeggehaold',
'autosumm-replace' => "Teks vervange mit '$1'",
'autoredircomment' => 'Verwies door nao [[$1]]',
'autosumm-new'     => 'Nuje pazjena: $1',

# Live preview
'livepreview-loading' => 'Laje…',
'livepreview-ready'   => 'Laje… Vaerdig!',
'livepreview-failed'  => 'Live veurvertuin mislök!
Probeer normaal veurvertuin.',
'livepreview-error'   => 'Verbènje mislök: $1 "$2"
Probeer normaal veurvertuin.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Verangeringe die nujer zeen es $1 seconde waere mesjiens neet getuind in dees lies.',
'lag-warn-high'   => "Door 'ne hoege database-servertoeveur zeen verangeringe nujer es $1 {{PLURAL:$1|seconde|seconde}} mäögelik neet besjikbaar in de lies.",

# Watchlist editor
'watchlistedit-numitems'       => "Op dien volglies sjtaon {{PLURAL:$1|1 pazjena|$1 pazjena's}}, exclusief euverlèkpazjena's.",
'watchlistedit-noitems'        => "Dao sjtaon gein pazjena's op dien volglies.",
'watchlistedit-normal-title'   => 'Volglies bewirke',
'watchlistedit-normal-legend'  => "Pazjena's ewegsjaffe van dien volglies",
'watchlistedit-normal-explain' => "Pazjena's op dien volglies waere hiejónger getuind.
Klik op 't veerkentje d'rnaeve óm 'n pazjena eweg te sjaffe. Klik daonao op 'Pazjena's ewegsjaffe'.
De kèns ouch [[Special:Watchlist/raw|de roew lies bewirke]].",
'watchlistedit-normal-submit'  => "Pazjena's ewegsjaffe",
'watchlistedit-normal-done'    => "{{PLURAL:$1|1 pazjena is|$1 pazjena's zeen}} eweggesjaf van dien volglies:",
'watchlistedit-raw-title'      => 'Roew volglies bewirke',
'watchlistedit-raw-legend'     => 'Roew volglies bewirke',
'watchlistedit-raw-explain'    => "Hiejónger sjtaon pazjena's op dien volglies. De kèns de lies bewirke door pazjena's eweg te sjaffe en d'rbie te doon. Ein pazjena per regel.
Wens te vaerdig bis, klik dan op 'Volglies biewirke'.
De kèns ouch [[Special:Watchlist/edit|'t sjtanderd bewirkingssjirm gebroeke]].",
'watchlistedit-raw-titles'     => "Pazjena's:",
'watchlistedit-raw-submit'     => 'Volglies biewirke',
'watchlistedit-raw-done'       => 'Dien volglies is biegewirk.',
'watchlistedit-raw-added'      => "{{PLURAL:$1|1 pazjena is|$1 pazjena's zeen}} toegevoog:",
'watchlistedit-raw-removed'    => "{{PLURAL:$1|1 pazjena is|$1 pazjena's zeen}} eweggesjaf:",

# Watchlist editing tools
'watchlisttools-view' => 'Volglies bekieke',
'watchlisttools-edit' => 'Volglies bekieke en bewirke',
'watchlisttools-raw'  => 'Roew volglies bewirke',

# Core parser functions
'unknown_extension_tag' => 'Ónbekindje tag "$1"',

# Special:Version
'version'                          => 'Versie', # Not used as normal message but as header for the special page itself
'version-extensions'               => 'Geïnstalleerde oetbreijinge',
'version-specialpages'             => "Speciaal pazjena's",
'version-parserhooks'              => 'Parserheuk',
'version-variables'                => 'Variabele',
'version-other'                    => 'Euverige',
'version-mediahandlers'            => 'Mediaverwerkers',
'version-hooks'                    => 'Heuk',
'version-extension-functions'      => 'Oetbreijingsfuncties',
'version-parser-extensiontags'     => 'Parseroetbreijingstags',
'version-parser-function-hooks'    => 'Parserfunctieheuk',
'version-skin-extension-functions' => 'Vormgaevingsoetbreijingsfuncties',
'version-hook-name'                => 'Hooknaam',
'version-hook-subscribedby'        => 'Geabonneerd door',
'version-version'                  => 'Versie',
'version-license'                  => 'Licentie',
'version-software'                 => 'Geïnstallieërde sofwaer',
'version-software-product'         => 'Perduk',
'version-software-version'         => 'Versie',

# Special:FilePath
'filepath'         => 'Bestandjspaad',
'filepath-page'    => 'Bestandj:',
'filepath-submit'  => 'Zeuk',
'filepath-summary' => "Dees speciaal pazjena guf 't vollejig paad veur 'n bestandj. Aafbeildinge waere in häör vollejige resolutie getoeandj. Anger bestandjstypes waere drèk in 't mit 't MIME-type verbónje programma geäöpendj.

Veur de bestandjsnaam in zónger 't veurvoegsel \"{{ns:file}}:\".",

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Zeuk veur döbbelbestaondje bestenj',
'fileduplicatesearch-summary'  => 'Zeuk veur döbbel bestaondje bestenj op basis van zien hashwaarde.

Gaef de bestandjsnaam zónger \'t "{{ns:file}}:" veurvoogsel.',
'fileduplicatesearch-legend'   => "Zeuk veur 'ne döbbele",
'fileduplicatesearch-filename' => 'Bestandjsnaam:',
'fileduplicatesearch-submit'   => 'Zeuk',
'fileduplicatesearch-info'     => '$1 × $2 pixel<br />Bestandjsgrootte: $3<br />MIME type: $4',
'fileduplicatesearch-result-1' => '\'t Bestandh "$1" haet gein identieke döbbelversie.',
'fileduplicatesearch-result-n' => '\'t Bestandj "$1" haet {{PLURAL:$2|1 identieke döbbelversie|$2 identiek döbbelversies}}.',

# Special:SpecialPages
'specialpages'                   => "Speciaal pazjena's",
'specialpages-note'              => '----
* Normale speciale pagina\'s
* <span class="mw-specialpagerestricted">Beperk toegankelijke speciale pagina\'s</span>',
'specialpages-group-maintenance' => 'Óngerhajingsrapporter',
'specialpages-group-other'       => "Euverige speciaal pazjena's",
'specialpages-group-login'       => 'Aanmelje / registrere',
'specialpages-group-changes'     => 'Recènte wieziginge en logbeuk',
'specialpages-group-media'       => 'Mediaeuverzichte en uploads',
'specialpages-group-users'       => 'Gebroekers en rechte',
'specialpages-group-highuse'     => "Väölgebroekde pazjena's",
'specialpages-group-pages'       => 'Pazjenalieste',
'specialpages-group-pagetools'   => 'Pazjenahölpmiddele',
'specialpages-group-wiki'        => 'Wikigegaeves en -hölpmiddele',
'specialpages-group-redirects'   => "Doorverwiezende speciaal pazjena's",
'specialpages-group-spam'        => 'Spamhölpmiddele',

# Special:BlankPage
'blankpage'              => 'Laeg pazjena',
'intentionallyblankpage' => 'Deze pagina is bewus laeg gelaote en wurt gebroek veur benchmarks, enzovoort.',

);
