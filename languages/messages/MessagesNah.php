<?php
/** Nahuatl (Nahuatl)
 *
 * @ingroup Language
 * @file
 *
 * @author Rob Church <robchur@gmail.com>
 * @author Fluence
 *
 * @copyright Copyright © 2006-2007, Rob Church, Fluence
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

# Per conversation with a user in IRC, we inherit from Spanish and work from there
# Nahuatl was the language of the Aztecs, and a modern speaker is most likely to
# understand Spanish if a Nah translation is not available
$fallback = 'es';

$messages = array(
# User preference toggles
'tog-hideminor'            => 'Tiquintlātīz tlapatlatzintli yancuīc tlapatlalizpan',
'tog-editondblclick'       => 'Tiquimpatlāz zāzaniltin ōme clicca (JavaScript)',
'tog-showtoc'              => 'Tiquittāz in tlein cah zāzotlahcuilōlco',
'tog-watchcreations'       => 'Tiquintlachiyāz zāzaniltin tiquinchīhua',
'tog-watchdefault'         => 'Tiquintlachiyāz zāzaniltin tiquimpatla',
'tog-watchmoves'           => 'Tiquintlachiyāz zāzaniltin tiquinzaca',
'tog-watchdeletion'        => 'Tiquintlachiyāz zāzaniltin tiquimpoloa',
'tog-minordefault'         => 'Ticmachiyōtīz mochīntīn tlapatlalitzintli ic default',
'tog-previewontop'         => 'Tiquittāz achtochīhualiztli achtopa tlapatlaliztli caxitl',
'tog-previewonfirst'       => 'Xiquitta achtochīhualiztli inic cē tlapatlalizpan',
'tog-enotifwatchlistpages' => 'Timitz-e-mailīzqueh ihcuāc mopatla cē zāzanilli tictlachiya.',
'tog-enotifusertalkpages'  => 'Nēchihtoa ihcuāc tlecpatla motēixnāmiquiliz',
'tog-enotifminoredits'     => 'Timitz-e-mailīzqueh nō zāzanilpatlatzintli ītechcopa',
'tog-enotifrevealaddr'     => 'Ticnēxtīz mo e-mailcān āxcāncayōtechcopa āmatlacuilizpan',
'tog-watchlisthideown'     => 'Tiquintlātīz mopatlaliz motlachiyalizpan',
'tog-watchlisthidebots'    => 'Tiquintlātīz tepozpatlaliztli motlachiyalizpan',
'tog-watchlisthideminor'   => 'Tiquintlātīz tlapatlalitzintli motlachiyalizpan',
'tog-nolangconversion'     => 'Ahmo tictēquitiltia tlahtōlcuepaliztli',

'underline-always' => 'Mochipa',
'underline-never'  => 'Aīcmah',

'skinpreview' => '(Xiquitta quemeh yez)',

# Dates
'sunday'        => 'Tōnatiuhtōnal',
'monday'        => 'Mētztlitōnal',
'tuesday'       => 'Huītzilōpōchtōnal',
'wednesday'     => 'Yacatlipotōnal',
'thursday'      => 'Tezcatlipotōnal',
'friday'        => 'Quetzalcōātōnal',
'saturday'      => 'Tlāloctitōnal',
'sun'           => 'Tōn',
'mon'           => 'Mētz',
'tue'           => 'Huītz',
'wed'           => 'Yac',
'thu'           => 'Tez',
'fri'           => 'Quetz',
'sat'           => 'Tlāl',
'january'       => 'Tlacēnti',
'february'      => 'Tlaōnti',
'march'         => 'Tlayēti',
'april'         => 'Tlanāuhti',
'may_long'      => 'Tlamācuīlti',
'june'          => 'Tlachicuazti',
'july'          => 'Tlachicōnti',
'august'        => 'Tlachicuēiti',
'september'     => 'Tlachiucnāuhti',
'october'       => 'Tlamahtlācti',
'november'      => 'Tlamahtlāccēti',
'december'      => 'Tlamahtlācōnti',
'january-gen'   => 'Tlacēnti',
'february-gen'  => 'Tlaōnti',
'march-gen'     => 'Tlayēti',
'april-gen'     => 'Tlanāuhti',
'may-gen'       => 'Tlamācuīlti',
'june-gen'      => 'Tlachicuazti',
'july-gen'      => 'Tlachicōnti',
'august-gen'    => 'Tlachicuēiti',
'september-gen' => 'Tlachiucnāuhti',
'october-gen'   => 'Tlamahtlācti',
'november-gen'  => 'Tlamahtlāccēti',
'december-gen'  => 'Tlamahtlācōnti',
'jan'           => 'Cēn',
'feb'           => 'Ōnt',
'mar'           => 'Yēt',
'apr'           => 'Nāuh',
'may'           => 'Mācuīl',
'jun'           => 'Chicuacē',
'jul'           => 'Chicōn',
'aug'           => 'Chicuēi',
'sep'           => 'Chiucnāuh',
'oct'           => 'Mahtlāc',
'nov'           => 'Īhuāncē',
'dec'           => 'Īhuānōme',

# Bits of text used by many pages
'categories'            => 'Neneuhcāyōtl',
'pagecategories'        => '{{PLURAL:$1|Neneuhcāyōtl|Neneuhcāyōtl}}',
'category_header'       => 'Tlahcuilōlli "$1" neneuhcāyōc',
'subcategories'         => 'Neneuhcāyōtzintli',
'category-media-header' => 'Media "$1" neneuhcāyōc',
'category-empty'        => "''Cah ahtlein inīn neneuhcāyōc.''",

'about'          => 'Ītechcopa',
'article'        => 'tlahcuilōlli',
'newwindow'      => '(Motlapoāz cē yancuīc tlanexillōtl)',
'cancel'         => 'Ticcuepāz',
'qbfind'         => 'Tlatēmōz',
'qbedit'         => 'Ticpatlāz',
'qbpageoptions'  => 'Inīn zāzanilli',
'qbmyoptions'    => 'Nozāzanil',
'qbspecialpages' => 'Nōncuahquīzqui āmatl',
'moredotdotdot'  => 'Huehca ōmpa...',
'mypage'         => 'Nozāzanil',
'mytalk'         => 'Notēixnāmiquiliz',
'anontalk'       => 'Inīn IP ītēixnāmiquiliz',
'navigation'     => 'Ācalpapanōliztli',
'and'            => 'īhuān',

'errorpagetitle'    => 'Ahcuallōtl',
'returnto'          => 'Timocuepāz īhuīc $1.',
'tagline'           => 'Īhuīcpa {{SITENAME}}',
'help'              => 'Tēpalēhuiliztli',
'search'            => 'Tlatēmōz',
'searchbutton'      => 'Tlatēmōz',
'go'                => 'Yāuh',
'searcharticle'     => 'Yāuh',
'history'           => 'tlahcuilōlloh',
'history_short'     => 'Tlahcuilōlloh',
'info_short'        => 'Tlanōnōtzaliztli',
'printableversion'  => 'Tepoztlahcuilōlli',
'permalink'         => 'Mochipa tzonhuiliztli',
'print'             => 'Tictepoztlahcuilōz',
'edit'              => 'Ticpatlāz',
'editthispage'      => 'Ticpatlāz inīn zāzanilli',
'delete'            => 'Ticpolōz',
'deletethispage'    => 'Ticpolōz inīn zāzanilli',
'undelete_short'    => 'Ahticpolōz {{PLURAL:$1|cē tlapatlaliztli|$1 tlapatlaliztli}}',
'protect'           => 'Ticquīxtīz',
'protect_change'    => 'ticpatlāz tlaquīxtiliztli',
'protectthispage'   => 'Ticquīxtiāz inīn zāzanilli',
'unprotect'         => 'Ahticquīxtīz',
'unprotectthispage' => 'Ahticquīxtīz inīn zāzanilli',
'newpage'           => 'Yancuīc zāzanilli',
'talkpage'          => 'Tictlahtōz inīn zāzaniltechcopa',
'talkpagelinktext'  => 'Tēixnāmiquiliztli',
'specialpage'       => 'Nōncuahquīzqui āmatl',
'personaltools'     => 'In tlein nitēquitiltilia',
'postcomment'       => 'Xiquihcuiloa cē tlanehnemiliztli',
'articlepage'       => 'Xiquittaz in tlahcuilōlli',
'talk'              => 'tēixnāmiquiliztli',
'toolbox'           => 'In tlein motequitiltia',
'userpage'          => 'Xiquitta tlatequitiltilīlli zāzanilli',
'projectpage'       => 'Xiquitta tlachīhualiztli zāzanilli',
'imagepage'         => 'Xiquitta īxiptli zāzanilli',
'mediawikipage'     => 'Xiquitta tlahcuilōltzin zāzanilli',
'templatepage'      => 'Tiquittāz nemachiyōtīlli zāzanilli',
'viewhelppage'      => 'Xiquitta tēpalēhuiliztli zāzanilli',
'categorypage'      => 'Xiquitta neneuhcāyōtl zāzanilli',
'viewtalkpage'      => 'Xiquitta tēixnāmiquiliztli zāzanilli',
'otherlanguages'    => 'Occequīntīn tlahtōlcopa',
'redirectedfrom'    => '(Ōmotlacuep īhuīcpa $1)',
'redirectpagesub'   => 'Ōmotlacuep zāzanilli',
'lastmodifiedat'    => 'Inīn zāzanilli ōtlapatlac catca īpan $2, $1.', # $1 date, $2 time
'viewcount'         => 'Inīn zāzanilli quintlapōhua {{PLURAL:$1|cē tlahpololiztli|$1 tlahpololiztli}}.',
'protectedpage'     => 'Ōmoquīxtix zāzanilli',
'jumptonavigation'  => 'ācalpapanōliztli',
'jumptosearch'      => 'tlatēmoliztli',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Ītechcopa {{SITENAME}}',
'aboutpage'         => 'Project:Ītechcopa',
'copyright'         => 'Tlahcuilōltzin cah yōllōxoxouhqui īpan $1',
'copyrightpagename' => '{{SITENAME}} copyright',
'currentevents'     => 'Āxcāncāyōtl',
'currentevents-url' => 'Project:Āxcāncāyōtl',
'disclaimers'       => 'Nahuatīllahtōl',
'edithelp'          => 'Tlapatlaliztechcopa tēpalēhuiliztli',
'edithelppage'      => 'Help:¿Quēn motlahcuiloa cē zāzanilli?',
'faq'               => 'FAQ',
'faqpage'           => 'Project:FAQ',
'helppage'          => 'Help:Tlapiyaliztli',
'mainpage'          => 'Calīxatl',
'portal'            => 'Calīxcuātl tocalpōl',
'portal-url'        => 'Project:Calīxcuātl tocalpōl',
'privacy'           => 'Tlahcuilōlli piyaliznahuatīlli',
'sitesupport'       => 'Tēyocatiliztli',

'badaccess-group0' => 'Tehhuātl ahmo tiquichīhua inōn tiquiēlēhuia.',
'badaccess-group1' => 'Inōn tiquiēlēhuia zan quichīhuah tlatequitiltilīlli oncān: $1.',
'badaccess-group2' => 'Inōn tiquiēlēhuia zan quichīhuah tlatequitiltilīlli oncān: $1.',
'badaccess-groups' => 'Inōn tiquiēlēhuia zan quichīhuah tlatequitiltilīlli oncān: $1.',

'ok'                      => 'Cualli',
'youhavenewmessages'      => 'Tiquimpiya $1 ($2).',
'newmessageslink'         => 'yancuīc tlahcuilōltzintli',
'newmessagesdifflink'     => 'achto tlapatlaliztli',
'youhavenewmessagesmulti' => 'Tiquimpiya yancuīc tlahcuilōlli īpan $1',
'editsection'             => 'ticpatlāz',
'editold'                 => 'ticpatlāz',
'editsectionhint'         => 'Ticpatlahua: $1',
'toc'                     => 'Inīn tlahcuilōlco',
'showtoc'                 => 'xiquitta',
'hidetoc'                 => 'tictlātīz',
'thisisdeleted'           => '¿Tiquittāz nozo ahticpolōz $1?',
'viewdeleted'             => '¿Tiquiēlēhuia tiquitta $1?',
'restorelink'             => '{{PLURAL:$1|cē tlapatlaliztli polotic|$1 tlapatlaliztli polotic}}',
'site-rss-feed'           => '$1 RSS huelītiliztli',
'site-atom-feed'          => '$1 Atom huelītiliztli',
'page-rss-feed'           => '"$1" RSS huelītiliztli',
'page-atom-feed'          => '"$1" RSS huelītiliztli',
'red-link-title'          => '$1 (ticchīhuāz)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Tlahcuilōlli',
'nstab-user'      => 'Tlatequitiltilīlli',
'nstab-media'     => 'Mēdiatl',
'nstab-special'   => 'Nōncuahquīzqui',
'nstab-project'   => 'Tlachīhualiztli zāzanilli',
'nstab-image'     => 'Īxiptli',
'nstab-mediawiki' => 'Tlahcuilōltzintli',
'nstab-template'  => 'Nemachiyōtīlli',
'nstab-help'      => 'Tēpalēhuiliztli',
'nstab-category'  => 'Neneuhcāyōtl',

# Main script and global functions
'nosuchaction'      => 'Ahmo ia tlachīhualiztli',
'nosuchspecialpage' => 'Ahmelāhuac nōncuahquīzqui zāzanilli',

# General errors
'error'               => 'Ahcuallōtl',
'filecopyerror'       => 'Ahmo ōmohuelītic tlacopīna "$1" īhuīc "$2".',
'filerenameerror'     => 'Ahmo ōmohuelītic tlazaca "$1" īhuīc "$2".',
'filedeleteerror'     => 'Ahmo ōmohuelītic tlapoloa "$1".',
'filenotfound'        => 'Ahmo ōmohuelītic tlanāmiqui "$1".',
'fileexistserror'     => 'Ahmo ōmohuelītih tlahcuiloa "$1" tlahcuilōlhuīc: tlahcuilōlli ia',
'badtitle'            => 'Ahcualli tōcāitl',
'viewsource'          => 'Tiquittāz tlahtōlcaquiliztilōni',
'viewsourcefor'       => '$1 ītechcopa',
'actionthrottled'     => 'Tlachīhualiztli ōmotzacuili',
'viewsourcetext'      => 'Tihuelīti tiquitta auh ticcopīna inīn zāzanilli ītlahtōlcaquiliztilōni:',
'sqlhidden'           => '(Tlatēmoliztli SQL omotlāti)',
'namespaceprotected'  => "Ahmo tiquihuelīti tiquimpatla zāzaniltin īpan '''$1'''.",
'ns-specialprotected' => 'Ahmohuelīti quimpatla nōncuahquīzqui zāzaniltin.',

# Login and logout pages
'logouttitle'               => 'Ōtiquīz',
'loginpagetitle'            => 'Ximomachiyōmaca/Ximocalaqui',
'yourname'                  => 'Motlatequitiltilīltōcā:',
'yourpassword'              => 'Tlahtolichtacayo',
'yourpasswordagain'         => 'Tlahtolichtacayo zapa',
'yourdomainname'            => 'Moāxcāyō',
'login'                     => 'Ximomachiyōmaca/Ximocalaqui',
'userlogin'                 => 'Ximomachiyōmaca/Ximocalaqui',
'logout'                    => 'Tiquīzāz',
'userlogout'                => 'Tiquīzāz',
'notloggedin'               => 'Ahmo ōtimocalac',
'nologin'                   => '¿Ahmo tiquipiya calaquiliztli? $1.',
'gotaccountlink'            => 'Ximocalaqui',
'createaccountmail'         => 'e-mailcopa',
'youremail'                 => 'E-mail:',
'username'                  => 'Tlatequitiltilīltōcāitl:',
'uid'                       => 'Tlatequitiltilīlli ID:',
'yourrealname'              => 'Melāhuac motōcā:',
'yourlanguage'              => 'Motlahtōl:',
'yournick'                  => 'Motōcātlaliz:',
'email'                     => 'E-mail',
'loginerror'                => 'Ahcuallōtl tlacalaquiliztechcopa',
'prefs-help-email-required' => 'Tihuīquilia quihcuiloa mo e-mailcān.',
'noname'                    => 'Ahmo ōtiquihto cualli tlatequitiltilīlli tōcāitl.',
'loginsuccesstitle'         => 'Cualli calaquiliztli',
'loginsuccess'              => "'''Ōticalac {{SITENAME}} quemeh \"\$1\".'''",
'nosuchusershort'           => 'Ahmo cah tlatequitiltilīlli ītōcā "<nowiki>$1</nowiki>". 
Xiquimpiya motlahtōl.',
'emailconfirmlink'          => 'Ticchicāhua mo e-mail',
'loginlanguagelabel'        => 'Tlahtōlli: $1',

# Edit page toolbar
'bold_sample'    => 'Tlīltic tlahcuilōlli',
'bold_tip'       => 'Tlīltic tlahcuilōlli',
'italic_sample'  => 'Italic tlahcuilōlli',
'italic_tip'     => 'Italic tlahcuilōlli',
'link_sample'    => 'Tzonhuiliztli ītōcā',
'link_tip'       => 'Tzonhuiliztli tlahtic',
'extlink_sample' => 'http://www.tlamantli.com Tōcāitl',
'extlink_tip'    => 'Tzonhuilizcallān (xitequitiltia http://)',
'headline_tip'   => 'Iuhcāyōtl 2 tōcāyōtl',
'math_sample'    => 'Xihcuiloa nicān',
'math_tip'       => 'Tlapōhualmatiliztlahtōl (LaTeX)',
'media_tip'      => 'Mēdiahuīc tzonhuiliztli',
'sig_tip'        => 'Motōcā īca cāhuitl',

# Edit pages
'summary'               => 'Mopatlaliz',
'minoredit'             => 'Inīn cah tlapatlalitzintli',
'watchthis'             => 'Tictlachiyāz inīn zāzanilli',
'savearticle'           => 'Ticpiyāz',
'preview'               => 'Xiquitta achtochīhualiztli',
'showpreview'           => 'Xiquitta achtochīhualiztli',
'showlivepreview'       => 'Niman achtochīhualiztli',
'showdiff'              => 'Tiquinttāz tlapatlaliztli',
'summary-preview'       => 'Tlahcuilōltōn achtochīhualiztli',
'blockedtitle'          => 'Ōmotzacuili tlatequitiltilīlli',
'blockednoreason'       => 'ahmo cah īxtlamatiliztli',
'blockedoriginalsource' => "Nicān motta '''$1''' ītlahtōlcaquiliztilōni:",
'blockededitsource'     => "'''Mopatlaliz''' ītlahtōl īpan '''$1''' motta nicān:",
'whitelistedittitle'    => 'Tihuīquilia timocalaqui ic patla',
'whitelistedittext'     => 'Tihuīquilia $1 ic ticpatla zāzaniltin.',
'whitelistreadtitle'    => 'Tihuīquilia timocalaqui ic āmaxpōhua',
'whitelistreadtext'     => 'Tihuīquilia [[Special:Userlogin|timocalaqui]] ic tiquimpōhua zāzaniltin.',
'confirmedittitle'      => 'E-mail chicāhualiztli moēlēhuia ic ticpatla',
'loginreqtitle'         => 'Ximocalaqui',
'loginreqlink'          => 'ximocalaqui',
'loginreqpagetext'      => 'Tihuīquilia $1 ic tiquintta occequīntīn zāzaniltin.',
'newarticle'            => '(Yancuīc)',
'newarticletext'        => 'Ōtictocac cētiliztli cē zāzanilhuīc oc ahmo ia. Intlā quiēlēhuia quichīhua, xitlahcuiloa niman (nō xiquitta [[{{MediaWiki:Helppage}}|tēpalēhuiliztli zāzanilli]] huehca ōmpa tlapatlaliztli). Intlā ahmo, yāuh achtopa zāzanilli.',
'noarticletext'         => 'Āxcān, in ahmō cateh tlahtōl inīn zāzanilpan. Tihuelīti tictēmoa [[Special:Search/{{PAGENAME}}|inīn zāzaniltōcācopa]] occequīntīn zāzanilpan nozo [{{fullurl:{{FULLPAGENAME}}|action=edit}} quipatla inīn zāzanilli].',
'updated'               => '(Ōmoyancuīli)',
'previewnote'           => '<strong>¡Ca inīn moachtochīhualiz, auh mopatlaliz ahmō cateh ōmochīhuah nozan!</strong>',
'editing'               => 'Ticpatlahua $1',
'editingsection'        => 'Ticpatlahua $1 (tlahtōltzintli)',
'yourtext'              => 'Motlahcuilōl',
'yourdiff'              => 'Ahneneuhquiliztli',
'copyrightwarning'      => '<small>Timitztlātlauhtiah xiquitta mochi mopatlaliz cana {{SITENAME}} tlatzayāna īpan $2 (huēhca ōmpa xiquitta $1). Āqueh tlācah quipatlazqueh in motlahcuilōl auh tlatzayāna occeppa; intlā ahmō ticnequi, zātēpan ahmō titlahcuilōz nicān. Nō mitzihtoah in ōtitlahcuiloh ahmō quipiya in copyright nozo in yōllōxoxouhqui tlahcuilōlli. <strong>¡AHMŌ XITĒQUITILTIA AHYŌLLŌXOXOUHQUI TLAHCUILŌLLI!</strong></small>',
'copyrightwarning2'     => '<small>Timitztlātlauhtiah xiquitta mochi mopatlaliz cana {{SITENAME}} tlatzayāna īpan $2 (huēhca ōmpa xiquitta $1). Āqueh tlācah quipatlazqueh in motlahcuilōl auh tlatzayāna occeppa; intlā ahmō ticnequi, zātēpan ahmō titlahcuilōz nicān. Nō mitzihtoah in ōtitlahcuiloh ahmō quipiya in copyright nozo in yōllōxoxouhqui tlahcuilōlli. <strong>¡AHMŌ XITĒQUITILTIA AHYŌLLŌXOXOUHQUI TLAHCUILŌLLI!</strong></small>',
'longpageerror'         => '<strong>AHCUALLŌTL: Motlahcuilōl cah huēiyac $1 KB, huehca ōmpa $2 KB. Ahmo mopiyāz.</strong>',
'templatesused'         => 'Nemachiyōtīlli inīn zāzanilpan:',
'templatesusedpreview'  => 'Nemachiyōtīlli motequitiltia inīn achtochīhualizpan:',
'templatesusedsection'  => 'Nemachiyōtīlli motequitiltia nicān:',
'template-protected'    => '(ōmoquīxti)',
'nocreate-loggedin'     => 'Ahmo tihuelīti tiquinchīhua yancuīc zāzaniltin īpan {{SITENAME}}.',
'permissionserrors'     => 'Huelītiliztechcopa ahcuallōtl',
'permissionserrorstext' => 'Ahmo tihuelīti quichīhua inōn, inīn {{PLURAL:$1|īxtlamatilizpampa|īxtlamatilizpampa}}:',

# History pages
'viewpagelogs'        => 'Tiquinttāz tlahcuilōlloh inīn zāzaniltechcopa',
'nohistory'           => 'Ahmo cah tlapatlaliztechcopa tlahcuilōlloh inīn zāzaniltechcopa.',
'revnotfound'         => 'Ahmo ōmonēxti tlachiyaliztli',
'currentrev'          => 'Āxcān tlapatlaliztli',
'revisionasof'        => 'Tlachiyaliztli īpan $1',
'revision-info'       => 'Tlachiyaliztli īpan $1; $2',
'previousrevision'    => '← Huēhueh tlapatlaliztli',
'nextrevision'        => 'Yancuīc tlapatlaliztli →',
'currentrevisionlink' => 'Āxcān tlapatlaliztli',
'cur'                 => 'āxcān',
'next'                => 'niman',
'last'                => 'xōcoyōc',
'page_first'          => 'achto',
'page_last'           => 'xōcoyōc',
'deletedrev'          => '[ōmopolo]',
'histfirst'           => 'Achto',
'histlast'            => 'Yancuīc',
'historysize'         => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'        => '(iztāc)',

# Revision feed
'history-feed-title'       => 'Tlachiyaliztli tlahcuilōlloh',
'history-feed-description' => 'Tlachiyaliztli tlahcuilōlloh inīn zāzaniltechcopa huiquipan',
'history-feed-empty'       => 'In zāzanilli tiquiēlēhuia ahmo ia.
Hueliz ōmopolo huiqui nozo ōmozacac.
[[Special:Search|Xitēmoa huiquipan]] yancuīc huēyi zāzaniltin.',

# Revision deletion
'rev-delundel'         => 'tiquittāz/tictlātīz',
'revdelete-selected'   => '{{PLURAL:$2|Tlachiyaliztli ōmoēlēhui|Tlachiyaliztli ōmoēlēhuih}} [[:$1]] ītechcopa:',
'revdelete-hide-text'  => 'Tictlātīz tlachiyaliztli ītlahcuilōl',
'revdelete-hide-image' => 'Tictlātīz tlahcuilōlli ītlapiyaliz',

# History merging
'mergehistory-from'           => 'Zāzanilhuīcpa:',
'mergehistory-into'           => 'Zāzanilhuīc:',
'mergehistory-no-source'      => 'Zāzanilhuīcpa $1 ahmo ia.',
'mergehistory-no-destination' => 'Zāzanilhuīc $1 ahmo ia.',

# Diffs
'difference' => '(Ahneneuhquiliztli tlapatlaliznepantlah)',
'editundo'   => 'ahticchīhuāz',

# Search results
'searchresults'         => 'Tlatēmoliztli',
'searchsubtitle'        => "Ōtictēmōz '''[[:$1]]'''",
'searchsubtitleinvalid' => "Ōtictēmōz '''$1'''",
'noexactmatch'          => "'''Ahmo ia zāzanilli ītōcā \"\$1\".''' Tihuelīti [[:\$1|ticchīhua]].",
'noexactmatch-nocreate' => "'''Ahmo ia \"\$1\" zāzanilli.'''",
'prevn'                 => '$1 achtopa',
'nextn'                 => 'niman $1',
'viewprevnext'          => 'Xiquintta ($1) ($2) ($3).',
'powersearch'           => 'Chicāhuac tlatēmoliztli',

# Preferences page
'mypreferences'     => 'Notlaēlēhuiliz',
'prefsnologin'      => 'Ahmo ōtimocalac',
'qbsettings-none'   => 'Ahtlein',
'math'              => 'Tlapōhualmatiliztli',
'prefs-misc'        => 'Zāzo',
'saveprefs'         => 'Ticpiyāz',
'textboxsize'       => 'Tlapatlaliztli',
'rows'              => 'Pāntli:',
'searchresultshead' => 'Tlatēmoliztli',
'defaultns'         => 'Tlatēmōz inīn tōcātzimpan ic default:',
'default'           => 'ic default',
'files'             => 'Tlahcuilōlli',

# User rights
'userrights-user-editname' => 'Xihcuiloa cē tlatequitiltilīltōcāitl:',
'userrights-groupsmember'  => 'Olōlco:',

# Groups
'group'       => 'Olōlli:',
'group-bot'   => 'Tepoztlācah',
'group-sysop' => 'Tlahcuilōlpixqueh',
'group-all'   => '(mochīntīn)',

'group-bot-member'   => 'Tepoztlācatl',
'group-sysop-member' => 'Tlahcuilōlpixqui',

'grouppage-bot'   => '{{ns:project}}:Tepoztlācah',
'grouppage-sysop' => '{{ns:project}}:Tlahcuilōlpixqueh',

# User rights log
'rightsnone' => 'ahtlein',

# Recent changes
'recentchanges'     => 'Yancuīc patlaliztli',
'recentchangestext' => 'Xiquitta in achi yancuīc patlaliztli huiquipan inīn zāzanilpan.',
'rcnote'            => 'Nicān in xōcoyōc <b>$1</b> patlaliztli īpan in xōcoyōc <b>$2</b> tōnalli cah, ōāxcānic $3',
'rclistfrom'        => 'Xiquittaz yancuīc patlaliztli īhuīcpa $1',
'rcshowhideminor'   => '$1 tlapatlalitzintli',
'rcshowhidebots'    => '$1 tepoztlācah',
'rcshowhideliu'     => '$1 tlatequitiltilīlli ōmocalacqueh',
'rcshowhideanons'   => '$1 ahtōcā tlatequitiltilīlli',
'rcshowhidemine'    => '$1 notlahcuilōl',
'rclinks'           => 'Xiquintta xōcoyōc $1 tlapatlaliztli xōcoyōc $2 tōnalpan.<br />$3',
'diff'              => 'ahneneuh',
'hist'              => 'tlahcuil',
'hide'              => 'Tiquintlātīz',
'show'              => 'Tiquinttāz',
'minoreditletter'   => 'p',
'newpageletter'     => 'Y',

# Recent changes linked
'recentchangeslinked'       => 'Tlapatlaliztli tzonhuilizpan',
'recentchangeslinked-title' => 'Tlapatlaliztli "$1" ītechcopa',

# Upload
'upload'            => 'Tlahcuilōlquetza',
'uploadbtn'         => 'Tlahcuilōlquetza',
'reupload'          => 'Tiquiquetzāz occeppa',
'uploadnologin'     => 'Ahmo ōtimocalac',
'uploadlogpage'     => 'Tlaquetzaliztli tlahcuilōlloh',
'filename'          => 'Tlahcuilōlli ītōcā',
'filedesc'          => 'Tlahcuilōltōn',
'fileuploadsummary' => 'Tlahcuilōltōn:',
'filestatus'        => 'Copyright:',
'filesource'        => 'Īhuīcpa:',
'minlength1'        => 'Tlahcuilōltōcāitl quihuīlquilia huehca ōmpa cē tlahtōl.',
'badfilename'       => 'Īxiptli ītōcā ōmopatlac īhuīc "$1".',
'successfulupload'  => 'Cualli quetzaliztli',
'savefile'          => 'Quipiyāz tlahcuilōlli',
'uploadedimage'     => 'ōmoquetz "[[$1]]"',
'sourcefilename'    => 'Tōcāhuīcpa:',
'destfilename'      => 'Tōcāhuīc:',
'watchthisupload'   => 'Tictlachiyāz inīn zāzanilli',

'upload_source_file' => ' (cē tlahcuilōlli mochīuhpōhualhuazco)',

# Image list
'ilsubmit'           => 'Tlatēmōz',
'bydate'             => 'tōnalcopa',
'imgfile'            => 'īxiptli',
'filehist-deleteall' => 'tiquimpolōz mochīntīn',
'filehist-deleteone' => 'ticpolōz',
'filehist-revert'    => 'tlacuepāz',
'filehist-current'   => 'āxcān',
'filehist-user'      => 'Tlatequitiltilīlli',
'imagelinks'         => 'Īxiphuīc tzonhuiliztli',
'sharedupload'       => 'Inīn īxiptli huelīti motequitiltia zāzocāmpa',
'noimage-linktext'   => 'ticquetzāz',
'imagelist_name'     => 'Tōcāitl',
'imagelist_user'     => 'Tlatequitiltilīlli',

# File reversion
'filerevert-submit' => 'Tlacuepāz',

# File deletion
'filedelete'                  => 'Ticpolōz $1',
'filedelete-legend'           => 'Ticpolōz tlahcuilōlli',
'filedelete-comment'          => 'Tlapololiztli īxtlamatiliztli:',
'filedelete-submit'           => 'Ticpolōz',
'filedelete-success'          => "Ōmopolo '''$1'''.",
'filedelete-nofile'           => "'''$1''' ahmo ia īpan {{SITENAME}}.",
'filedelete-otherreason'      => 'Occē īxtlamatiliztli:',
'filedelete-reason-otherlist' => 'Occē īxtlamatiliztli',

# MIME search
'mimesearch' => 'MIME tlatēmoliztli',

# Unused templates
'unusedtemplates' => 'Nemachiyōtīlli ahmotequitiltiah',

# Random page
'randompage' => 'Zāzozāzanilli',

# Statistics
'statistics'    => 'Tlapōhualiztli',
'sitestatstext' => "{{PLURAL:$1|Cah '''1''' zāzanilli|Cateh '''$1''' zāzaniltin}} nicān.
Inīn quimpiya tēixnāmiquiliztli zāzanilli, {{SITENAME}} ītechcopa zāzanilli, machiyōtōn, tlacuepaliztli auh occequīntīn hueliz ahmo cualli.
Ahtle, in {{PLURAL:$2|cah '''1''' cualli zāzanilli|cateh '''$2''' cualli zāzaniltin}}.

{{PLURAL:$8|Nō cah '''$8''' tlahcuilōlli|Nō cateh '''$8''' tlahcuilōlli}} inīn huēychīuhpōhualhuazco.

In īhuīcpa huiqui īpēhualiz {{PLURAL:$3|ōcatca|ōcatcah}} '''$3''' tlahpaloliztli auh '''$4''' tlapatlaliztli.
Inīn quicētilia huehca '''$5''' tlapatlaliztli cēcem zāzanilli auh '''$6''' tlahpaloliztli cēcem tlapatlaliztli.

Huēiyacaliztli [http://www.mediawiki.org/wiki/Manual:Job_queue tequilcān] cah '''$7'''.",

'disambiguations' => 'Ōmetōcāitl zāzaniltin',

'doubleredirects' => 'Ōntetl tlacuepaliztli',

'brokenredirects-edit'   => '(ticpatlāz)',
'brokenredirects-delete' => '(ticpolōz)',

'withoutinterwiki-submit' => 'Tiquittāz',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'nlinks'                  => '$1 {{PLURAL:$1|tzonhuiliztli|tzonhuiliztli}}',
'uncategorizedpages'      => 'Zāzaniltin ahmoneneuhcāyōtiah',
'uncategorizedcategories' => 'Neneuhcāyōtl ahmoneneuhcāyōtiah',
'uncategorizedimages'     => 'Īxiptli ahmoneneuhcāyōtiah',
'uncategorizedtemplates'  => 'Nemachiyōtīlli ahmoneneuhcāyōtiah',
'unusedcategories'        => 'Neneuhcāyōtl ahmotequitiltiah',
'unusedimages'            => 'Īxiptli ahmotequitiltiah',
'wantedcategories'        => 'Neneuhcāyōtl moēlēhuiah',
'wantedpages'             => 'Zāzaniltin moēlēhuiah',
'allpages'                => 'Mochīntīn zāzanilli',
'longpages'               => 'Huēiyac zāzaniltin',
'specialpages'            => 'Nōncuahquīzqui āmatl',
'newpages'                => 'Yancuīc zāzaniltin',
'newpages-username'       => 'Tlatequitiltilīltōcāitl:',
'ancientpages'            => 'Huēhuehzāzanilli',
'move'                    => 'Ticzacāz',
'movethispage'            => 'Ticzacāz inīn zāzanilli',

# Book sources
'booksources-go' => 'Yāuh',

'categoriespagetext' => 'Inīn neneuhcāyōtl īpan inīn huiqui cateh.',
'alphaindexline'     => '$1 oc $2',
'version'            => 'Machiyōtzin',

# Special:Log
'specialloguserlabel'  => 'Tlatequitiltilīlli:',
'speciallogtitlelabel' => 'Tōcāitl:',
'log'                  => 'Tlahcuilōlloh',
'log-search-submit'    => 'Yāuh',

# Special:Allpages
'nextpage'          => 'Niman zāzanilli ($1)',
'prevpage'          => 'Achto zāzanilli ($1)',
'allarticles'       => 'Mochīntīn tlahcuilōlli',
'allinnamespace'    => 'Mochīntīn zāzanilli (īpan $1)',
'allnotinnamespace' => 'Mochīntīn zāzanilli (quihcuāc $1)',
'allpagesprev'      => 'Achtopa',
'allpagesnext'      => 'Niman',
'allpagessubmit'    => 'Tiquittāz',

# Special:Listusers
'listusers-submit' => 'Tiquittāz',

# E-mail user
'emailuser'    => 'Tique-mailīz inīn tlatequitiltilīlli',
'emailfrom'    => 'Īhuīcpa',
'emailto'      => 'Īhuīc',
'emailmessage' => 'Tlahcuilōltzintli',

# Watchlist
'watchlist'            => 'Notlachiyaliz',
'mywatchlist'          => 'Notlachiyaliz',
'watchlistfor'         => "('''$1''' ītechcopa)",
'watchnologin'         => 'Ahmo ōtimocalac',
'addedwatch'           => 'Ōmocētili tlachiyalizpan',
'watch'                => 'Tictlachiyāz',
'watchthispage'        => 'Tictlachiyāz inīn zāzanilli',
'unwatch'              => 'Ahtictlachiyāz',
'watchlist-hide-bots'  => 'Tiquintlātīz tepoztlācah īntlapatlaliz',
'watchlist-hide-own'   => 'Tiquintlātīz notlahcuilōl',
'watchlist-hide-minor' => 'Tiquintlātīz tlapatlalitzintli',

'changed' => 'ōmotlacuep',
'created' => 'ōmochīuh',

# Delete/protect/revert
'deletepage'            => 'Ticpolōz inīn zāzanilli',
'excontent'             => "Tlapiyaliztli ōcatca: '$1'",
'excontentauthor'       => "Tlapiyaliztli ōcatca: '$1' (auh zancē ōquipatlac ōcatca '[[Special:Contributions/$2|$2]]')",
'exblank'               => 'zāzanilli ōcatca iztāc',
'delete-confirm'        => 'Ticpolōz "$1"',
'delete-legend'         => 'Ticpolōz',
'actioncomplete'        => 'Cēntetl',
'deletedarticle'        => 'ōmopolo "$1"',
'dellogpage'            => 'Tlapololiztli tlahcuilōlloh',
'deletionlog'           => 'tlapololiztli tlahcuilōlloh',
'deletecomment'         => 'Tlapololiztli īxtlamatiliztli:',
'deleteotherreason'     => 'Occē īxtlamatiliztli:',
'deletereasonotherlist' => 'Occē īxtlamatiliztli',
'rollback_short'        => 'Tlacuepāz',
'rollbacklink'          => 'tlacuepāz',
'rollback-success'      => 'Ōmotlacuep $1 ītlahcuilōl; āxcān achto $2 ītlahcuilōl.',
'protect-default'       => '(ic default)',

# Restrictions (nouns)
'restriction-edit'   => 'Ticpatlāz',
'restriction-move'   => 'Ticzacāz',
'restriction-create' => 'Ticchīhuāz',

# Undelete
'undelete'               => 'Tiquinttāz zāzaniltin ōmopolōzqueh',
'viewdeletedpage'        => 'Tiquinttāz zāzaniltin ōmopolōzqueh',
'undeletebtn'            => 'Ahticpolōz',
'undeletelink'           => 'ahticpolōz',
'undelete-search-box'    => 'Tiquintlatēmōz zāzaniltin ōmopolōz',
'undelete-search-prefix' => 'Tiquittāz zāzaniltin mopēhua īca:',
'undelete-search-submit' => 'Tlatēmōz',

# Namespace form on various pages
'namespace'      => 'Tōcātzin:',
'invert'         => 'Tlacuepāz motlahtōl',
'blanknamespace' => '(Huēyi)',

# Contributions
'contributions' => 'Ītlahcuilōl',
'mycontris'     => 'Notlahcuilōl',
'uctop'         => ' (ahco)',
'month'         => 'Īhuīcpa mētztli (auh achtopa):',
'year'          => 'Xiuhhuīcpa (auh achtopa):',

'sp-contributions-newbies'  => 'Tiquinttāz zan yancuīc tlatequitiltilīlli īntlapatlaliz',
'sp-contributions-blocklog' => 'Tlatzacuiliztli tlahcuilōlloh',
'sp-contributions-search'   => 'Tiquintlatēmōz tlapatlaliztli',
'sp-contributions-username' => 'IP nozo tlatequitiltilīlli ītōcā:',
'sp-contributions-submit'   => 'Tlatēmōz',

# What links here
'whatlinkshere'       => 'In tlein quitzonhuilia nicān',
'whatlinkshere-title' => 'Zāzanilli quitzonhuilia $1',
'whatlinkshere-page'  => 'Zāzanilli:',
'linklistsub'         => '(Tzonhuiliztli)',
'linkshere'           => "Inīn zāzaniltin quitzonhuiliah '''[[:$1]]''' īhuīc:",
'nolinkshere'         => "Ahtle quitzonhuilia '''[[:$1]]''' īhuīc.",
'isredirect'          => 'ōmotlacuep zāzanilli',
'whatlinkshere-prev'  => '{{PLURAL:$1|achtopa|$1 achtopa}}',
'whatlinkshere-next'  => '{{PLURAL:$1|niman|$1 niman}}',
'whatlinkshere-links' => '← tzonhuiliztli',

# Block/unblock
'blockip'            => 'Tiquitzacuilīz tlatequitiltilīlli',
'ipaddress'          => 'IP:',
'ipadressorusername' => 'IP nozo tlatequitiltilīlli ītōcā:',
'ipbreason'          => 'Īīxtlamatiliztli:',
'ipbreasonotherlist' => 'Occē īxtlamatiliztli',
'ipbsubmit'          => 'Tiquitzacuilīz inīn tlatequitiltilīlli',
'ipboptions'         => '2 yēmpōhualminutl:2 hours,1 tōnalli:1 day,3 tōnaltin:3 days,7 tōnaltin:1 week,14 tōnaltin:2 weeks,1 mētztli:1 month,3 mētztli:3 months,6 mētztli:6 months,1 xihuitl:1 year,Mochipa:infinite', # display1:time1,display2:time2,...
'ipbotheroption'     => 'occē',
'ipbotherreason'     => 'Occē īxtlamatiliztli:',
'blockipsuccesssub'  => 'Cualli tlatzacuiliztli',
'ipb-unblock-addr'   => 'Ahtiquitzacuilīz $1',
'ipb-unblock'        => 'Ahtiquitzacuilīz IP nozo tlatequitiltilīlli',
'unblockip'          => 'Ahtiquitzacuilīz tlatequitiltilīlli',
'ipblocklist-submit' => 'Tlatēmōz',
'blocklistline'      => '$1, $2 ōquitzacuili $3 ($4)',
'infiniteblock'      => 'ahtlamic',
'anononlyblock'      => 'zan ahtōcā',
'blocklink'          => 'tiquitzacuilīz',
'unblocklink'        => 'ahtiquitzacuilīz',
'contribslink'       => 'tlapatlaliztli',
'proxyblocksuccess'  => 'Ōmochīuh.',

# Move page
'movearticle'             => 'Ticzacāz tlahcuilōlli',
'movenologin'             => 'Ahmo ōtimocalac',
'movenotallowed'          => 'Ahmo tihuelīti tiquinzaca zāzaniltin īpan {{SITENAME}}.',
'newtitle'                => 'Yancuīc tōcāhuīc',
'move-watch'              => 'Tictlachiyāz inīn zāzanilli',
'movepagebtn'             => 'Ticzacāz zāzanilli',
'pagemovedsub'            => 'Cualli ōmozacac',
'movepage-moved'          => '<big>\'\'\'"$1" ōmotlacuep īhuīc "$2".\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'movedto'                 => 'ōmozacac īhuīc',
'movetalk'                => 'Ticzacāz nō tēixnāmiquiliztli tlahcuilōltechcopa.',
'1movedto2'               => '[[$1]] ōmozacac īhuīc [[$2]]',
'1movedto2_redir'         => '[[$1]] ōmozacac īhuīc [[$2]] tlacuepalpampa',
'movelogpage'             => 'Tlazacaliztli tlahcuilōlloh',
'movereason'              => 'Īxtlamatiliztli:',
'revertmove'              => 'tlacuepāz',
'delete_and_move'         => 'Ticpolōz auh ticzacāz',
'delete_and_move_confirm' => 'Quēmah, nicpolōz in zāzanilli',

# Export
'export'          => 'Tiquinnamacāz zāzaniltin',
'export-submit'   => 'Ticnamacāz',
'export-addcat'   => 'Ticcētilīz',
'export-download' => 'Ticpiyāz quemeh tlahcuilōlli',

# Namespace 8 related
'allmessages'        => 'Mochīntīn Huiquimedia tlahcuilōltzintli',
'allmessagesname'    => 'Tōcāitl',
'allmessagescurrent' => 'Āxcān tlahcuilōlli',

# Special:Import
'import'                  => 'Tiquincōhuāz zāzaniltin',
'import-interwiki-submit' => 'Tiquicōhuāz',
'importstart'             => 'Motlacōhua zāzaniltin...',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Notlatequitiltilīlzāzanil',
'tooltip-pt-mytalk'               => 'Notēixnāmiquiliz',
'tooltip-pt-preferences'          => 'Notlaēlēhuiliz',
'tooltip-pt-watchlist'            => 'Zāzaniltin tiquintlachiya ic tlapatlaliztli',
'tooltip-pt-mycontris'            => 'Notlahcuilōl',
'tooltip-pt-login'                => 'Tihuelīti timocalaqui, tēl ahmo tihuīquilia.',
'tooltip-pt-anonlogin'            => 'Tihuelīti timocalaqui, tēl ahmo tihuīquilia.',
'tooltip-pt-logout'               => 'Tiquīzāz',
'tooltip-ca-talk'                 => 'Inīn tlahcuilōlli ītēixnāmiquiliz',
'tooltip-ca-edit'                 => 'Tihuelīti ticpatla inīn zāzanilli. Timitztlātlauhtiah, tiquiclica achtochīhualizpan achtopa ticpiya.',
'tooltip-ca-addsection'           => 'Tiquihcuilōz itlah inīn tēixnāmiquilizhuīc.',
'tooltip-ca-viewsource'           => 'Inīn zāzanilli ōmoquīxti. Tihuelīti tiquitta ītlahtōlcaquiliztilōni.',
'tooltip-ca-history'              => 'Achtopa āxcān zāzanilli īhuān in tlatequitiltilīlli ōquinchīuhqueh',
'tooltip-ca-protect'              => 'Ticquīxtiāz inīn zāzanilli',
'tooltip-ca-delete'               => 'Ticpolōz inīn zāzanilli',
'tooltip-ca-undelete'             => 'Ahticpolōz inīn zāzanilli',
'tooltip-ca-move'                 => 'Ticzacāz inīn zāzanilli',
'tooltip-ca-watch'                => 'Ticcēntilīz inīn zāzanilli motlachiyalizhuīc',
'tooltip-ca-unwatch'              => 'Ahtictlachiyāz inīn zāzanilli',
'tooltip-search'                  => 'Tlatēmōz īpan {{SITENAME}}',
'tooltip-p-logo'                  => 'Calīxatl',
'tooltip-n-mainpage'              => 'Tictlahpolōz in Calīxatl',
'tooltip-n-recentchanges'         => 'Yancuīc tlapatlaliztli huiquipan',
'tooltip-n-randompage'            => 'Tiquittāz cē zāzotlein zāzanilli',
'tooltip-n-sitesupport'           => 'Xitēchtēpalēhuia',
'tooltip-t-whatlinkshere'         => 'Mochīntīn zāzaniltin huiquipan quitzonhuiliah nicān',
'tooltip-t-recentchangeslinked'   => 'Yancuīc tlapatlaliztli inīn zāzanilhuīcpa moquintzonhuilia',
'tooltip-feed-rss'                => 'RSS tlachicāhualiztli inīn zāzaniltechcopa',
'tooltip-feed-atom'               => 'Atom tlachicāhualiztli inīn zāzaniltechcopa',
'tooltip-t-contributions'         => 'Xiquitta inīn tlatequitiltilīlli ītlahcuilōl',
'tooltip-t-emailuser'             => 'Tiquihcuilōz inīn tlatequitiltililhuīc',
'tooltip-t-upload'                => 'Tiquinquetzāz tlahcuilōlli',
'tooltip-t-specialpages'          => 'Mochīntīn nōncuahquīzqui zāzaniltin',
'tooltip-ca-nstab-main'           => 'Xiquitta in tlahcuilōlli',
'tooltip-ca-nstab-user'           => 'Xiquitta tlatequitiltilīlli īzāzanil',
'tooltip-ca-nstab-special'        => 'Cah inīn cē nōncuahquīzqui zāzanilli; ahmo tihuelīti ticpatla.',
'tooltip-ca-nstab-project'        => 'Xiquitta tlachīhualiztli īzāzanil',
'tooltip-ca-nstab-mediawiki'      => 'Xiquitta in tlahcuilōltzin',
'tooltip-ca-nstab-template'       => 'Xiquitta in nemachiyōtīlli',
'tooltip-ca-nstab-help'           => 'Xiquitta in tēpalēhuiliztli zāzanilli',
'tooltip-ca-nstab-category'       => 'Xiquitta in neneuhcāyōtl zāzanilli',
'tooltip-minoredit'               => 'Ticmachiyōz quemeh tlapatlalitzintli',
'tooltip-save'                    => 'Ticpiyāz mopatlaliz',
'tooltip-preview'                 => 'Xiquitta achtopa mopatlaliz, ¡timitztlātlauhtiah quitēquitiltilia achto ticpiya!',
'tooltip-diff'                    => 'Xiquitta in tlein ōticpatlāz tlahcuilōlco.',
'tooltip-compareselectedversions' => 'Tiquinttāz ahneneuhquiliztli ōme zāzanilli tlapatlaliznepantlah.',
'tooltip-watch'                   => 'Ticcēntilīz inīn zāzanilli motlachiyalizhuīc',
'tooltip-upload'                  => 'Ticpēhua quetzaliztli',

# Attribution
'anonymous'        => 'Ahtōcāitl tlatequitiltilīlli īpan {{SITENAME}}',
'siteuser'         => '$1 tlatequitiltilīlli īpan {{SITENAME}}',
'lastmodifiedatby' => 'Inīn zāzanilli ōtlapatlac catca īpan $2, $1 īpal $3.', # $1 date, $2 time, $3 user
'others'           => 'occequīntīn',
'siteusers'        => '$1 tlatequitiltilīlli īpan {{SITENAME}}',

# Spam protection
'listingcontinuesabbrev' => 'niman',

# Browsing diffs
'previousdiff' => '← Achtopa',
'nextdiff'     => 'Niman →',

# Media information
'show-big-image' => 'Mochi cuallōtl',

# Special:Newimages
'newimages'    => 'Yancuīc īxipcān',
'showhidebots' => '($1 tepoztlācah)',

# EXIF tags
'exif-photometricinterpretation' => 'Pixelli chīhualiztli',
'exif-imagedescription'          => 'Īxiptli ītōcā',
'exif-software'                  => 'Software ōmotēquitilti',
'exif-artist'                    => 'Chīhualōni',
'exif-usercomment'               => 'Quihtoa tlatequitiltilīlli',
'exif-exposuretime'              => 'Cāuhcāyōtl',
'exif-isospeedratings'           => 'ISO iciuhquiliztli tlapōhualcāyōtl',
'exif-flash'                     => 'Flax',
'exif-flashenergy'               => 'Flax chicāhualiztli',

'exif-meteringmode-255' => 'Occē',

'exif-lightsource-1'   => 'Tōnameyyōtl',
'exif-lightsource-4'   => 'Flax',
'exif-lightsource-10'  => 'Mixxoh',
'exif-lightsource-11'  => 'Ecahuīlli',
'exif-lightsource-255' => 'Occequīntīn tlāhuīlli',

'exif-scenecapturetype-3' => 'Yohualcopa',

'exif-gaincontrol-0' => 'Ahtlein',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Ayamictlān',
'exif-gpslatitude-s' => 'Huiztlān',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'mochīntīn',
'imagelistall'     => 'mochīntīn',
'watchlistall2'    => 'mochīntīn',
'namespacesall'    => 'mochīntīn',
'monthsall'        => '(mochīntīn)',

# E-mail address confirmation
'confirmemail'           => 'Ticchicāhuāz e-mail',
'confirmemail_needlogin' => 'Tihuīquilia $1 ic ticchicāhua mo e-mail.',
'confirmemail_success'   => 'Mo e-mailcān ōmochicāuh. 
Niman tihuelīti timocalaqui auh quiyōlēhua huiqui.',
'confirmemail_loggedin'  => 'Mo e-mailcān ōmochicāuh.',
'confirmemail_error'     => 'Achi ōcatcah ahcualli mochicāhualiztechcopa.',
'confirmemail_subject'   => 'e-mailcān {{SITENAME}} ītlachicāhualiz',

# Scary transclusion
'scarytranscludetoolong' => '[Cah URL achi huēiyac; xitēchpohpolhuia]',

# Trackbacks
'trackbackremove' => ' ([$1 Ticpolōz])',

# Delete conflict
'recreate' => 'Ticchīhuāz occeppa',

# action=purge
'confirm_purge_button' => 'Cualli',

# AJAX search
'searchcontaining' => "Tiquintēmōz zāzaniltin quipiyah ''$1''.",
'searchnamed'      => "Tiquintēmōz zāzaniltin īntōcā ''$1''.",
'articletitles'    => "Tlahcuilōlli mopēhuah īca ''$1''",

# Multipage image navigation
'imgmultipageprev' => '← achto zāzanilli',
'imgmultipagenext' => 'niman zāzanilli →',
'imgmultigo'       => '¡Yāuh!',

# Table pager
'table_pager_next'         => 'Niman zāzanilli',
'table_pager_prev'         => 'Achto zāzanilli',
'table_pager_first'        => 'Achtopa zāzanilli',
'table_pager_last'         => 'Xōcoyōc zāzanilli',
'table_pager_limit_submit' => 'Yāuh',

# Auto-summaries
'autosumm-blank'   => 'Iztāc zāzanilli',
'autoredircomment' => 'Mocuepahua īhuīc [[$1]]',
'autosumm-new'     => 'Yancuīc zāzanilli: $1',

# Live preview
'livepreview-loading' => 'Tēmohua...',

# Watchlist editor
'watchlistedit-numitems'     => 'Motlachiyaliz {{PLURAL:$1|quipiya cē zāzanilli|quimpiya $1 zāzaniltin}}, ahtle tēixnāmiquiliztli.',
'watchlistedit-normal-title' => 'Ticpatlāz motlachiyaliz',
'watchlistedit-raw-added'    => '{{PLURAL:$1|Ōmocentili cē zāzanilli|Ōmocentilih $1 zāzaniltin}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Tiquinttāz huēyi tlapatlaliztli',
'watchlisttools-edit' => 'Tiquittāz auh ticpatlāz motlachiyaliz',

# Special:Version
'version-specialpages'     => 'Nōncuahquīzqui āmatl',
'version-other'            => 'Occē',
'version-version'          => 'Machiyōtzin',
'version-software-version' => 'Machiyōtzin',

# Special:Filepath
'filepath-page' => 'Tlahcuilōlli:',

);
