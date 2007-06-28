<?php
/** Piedmontese (Piemontèis)
  * Users are bilingual in Piedmontese and Italian, using Italian as template.
  *
  * @addtogroup Language
  *
  * @bug 5362
  *
  * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>, Jens Frank
  * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason, Jens Frank
  * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
  */
$fallback = 'it';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_MAIN             => '',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Utent',
	NS_USER_TALK        => 'Ciaciarade',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => 'Discussion_ant_sla_$1',
	NS_IMAGE            => 'Figura',
	NS_IMAGE_TALK       => 'Discussion_dla_figura',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_dla_MediaWiki',
	NS_TEMPLATE         => 'Stamp',
	NS_TEMPLATE_TALK    => 'Discussion_dlë_stamp',
	NS_HELP             => 'Agiut',
	NS_HELP_TALK        => 'Discussion_ant_sl\'agiut',
	NS_CATEGORY         => 'Categorìa',
	NS_CATEGORY_TALK    => 'Discussion_ant_sla_categorìa'
);


$messages = array(
# User preference toggles
'tog-underline'               => 'Anliure con la sotliniadura',
'tog-highlightbroken'         => "Buta an evidensa j'anliure che a men-o a<br />
dj'artìcol ancó pa scrit",
'tog-justify'                 => 'Paràgraf: giustificà',
'tog-hideminor'               => 'Stërma le modifiche cite<br />ant sla pàgina "Ùltime Modìfiche"',
'tog-extendwatchlist'         => 'Slarga la funsion "ten sot euj" an manera che a la smon-a tute le modìfiche che as peulo fesse',
'tog-usenewrc'                => 'Ùltime modìfiche an bela forma (a-i va Javascript)',
'tog-numberheadings'          => 'Tìtoj ëd paràgraf<br />che as nùmero daspërlor',
'tog-showtoolbar'             => "Mostra la bara dj'utiss (a-i va Javascript)",
'tog-editondblclick'          => "Dobia sgnacà për modifiché l'artìcol<br />(a-i va JavaScript)",
'tog-editsection'             => "Abìlita la modìfica dle session con j'anliure [modìfica]",
'tog-editsectiononrightclick' => 'Abilité la modìfica dle session ën sgnacand-je ansima<br />  al tìtol col tast drit dël rat (a-i va Javascript)',
'tog-showtoc'                 => "Buta le tàole dij contnù<br />(për j'artìcoj che l'han pì che 3 session)",
'tog-rememberpassword'        => "Vis-te la ciav<br />(nen mach për na session<br />- a l'ha da manca dij cookies)",
'tog-editwidth'               => 'Quàder ëd modìfica slargà<br />al màssim',
'tog-watchcreations'          => 'Gionta le pàgine che i creo mi a la lista ëd lòn che im ten-o sot euj',
'tog-watchdefault'            => "Notìfica dj'articoli neuv e ëd coj modificà",
'tog-minordefault'            => 'Marca tute le modìfica coma cite<br />(mach coma predefinission dla casela)',
'tog-previewontop'            => 'Smon-e la preuva dzora al quàder ëd modìfica dël test e nen sota',
'tog-previewonfirst'          => 'Smon na preuva la prima vira che as fa na modìfica',
'tog-nocache'                 => "Dòvra pa la memorisassion ''cache'' për le pàgine",
'tog-enotifwatchlistpages'    => 'Mand-me un messagi an pòsta eletrònica quand a-i son dle modìfiche a le pàgine',
'tog-enotifusertalkpages'     => 'Mand-me un messagi ëd pòsta eletrònica quand a-i son dle modìfiche a mia pàgina dle ciaciarade',
'tog-enotifminoredits'        => 'Mand-me un messagi an pòsta bele che për le modìfiche cite',
'tog-enotifrevealaddr'        => 'Lassa che a së s-ciàira mia adrëssa ëd pòsta eletrònica ant ij messagi ëd notìfica',
'tog-shownumberswatching'     => "Smon ël nùmer d'utent che as ten-o la pàgina sot euj",
'tog-fancysig'                => "Modìfica mai la firma da coma a l'é ambelessì (as dòvra për fesse na firma fòra stàndard)",
'tog-externaleditor'          => "Dòvra coma stàndard n'editor ëd test estern",
'tog-externaldiff'            => 'Dòvra për stàndard un programa "diff" estern',
'tog-showjumplinks'           => 'Dòvra j\'anliure d\'acessibilità dla sòrt "Va a"',
'tog-uselivepreview'          => "Dòvra la funsion ''Preuva dal viv'' (a-i va JavaScript e a l'é mach sperimental)",
'tog-forceeditsummary'        => "Ciama conferma se ël somari dla modìfica a l'é veujd",
'tog-watchlisthideown'        => 'Stërma mie modìfiche ant la ròba che im ten-o sot euj',
'tog-watchlisthidebots'       => 'Stërma le modìfiche faite daj trigomiro ant la lista dle ròbe che im ten-o sot euj',

'underline-always'  => 'Sempe',
'underline-never'   => 'Mai',
'underline-default' => 'Dòvra lë stàndard dël programma ëd navigassion (browser)',

'skinpreview' => '(Preuva)',

# Dates
'sunday'    => 'Dumìnica',
'monday'    => 'Lun-es',
'tuesday'   => 'Martes',
'wednesday' => 'Merco',
'thursday'  => 'Giòbia',
'friday'    => 'Vënner',
'saturday'  => 'Saba',
'january'   => 'Gené',
'february'  => 'Fërvé',
'march'     => 'Mars',
'april'     => 'Avril',
'may_long'  => 'Magg',
'june'      => 'Giugn',
'july'      => 'Luj',
'august'    => 'Aost',
'september' => 'Stémber',
'october'   => 'Otóber',
'november'  => 'Novémber',
'december'  => 'Dzémber',
'jan'       => 'Gen',
'feb'       => 'Fër',
'mar'       => 'Mar',
'apr'       => 'Avr',
'may'       => 'Mag',
'jun'       => 'Giu',
'jul'       => 'Luj',
'aug'       => 'Aos',
'sep'       => 'Ste',
'oct'       => 'Oto',
'nov'       => 'Nov',
'dec'       => 'Dze',

# Bits of text used by many pages
'categories'      => 'Categorìe',
'pagecategories'  => '{{PLURAL:$1|Categorìa|Categorìe}}',
'category_header' => 'Artìcoj ant la categorìa "$1"',
'subcategories'   => 'Sotacategorìe',

'mainpagetext'      => "<big>'''MediaWiki a l'é staita anstalà a la perfession.'''</big>",
'mainpagedocfooter' => "Che a varda la [http://meta.wikimedia.org/wiki/MediaWiki_User%27s_Guide User's Guide] ([[belavans]] për adess a-i é mach n'anglèis) për avej dj'anformassion suplementar ant sël coma dovré ël programa dla wiki.

== Për anandiesse a travajé ==

* [http://www.mediawiki.org/wiki/Help:Configuration_settings Configuration settings list]
* [http://www.mediawiki.org/wiki/Help:FAQ MediaWiki FAQ]
* [http://mail.wikipedia.org/mailman/listinfo/mediawiki-announce MediaWiki release mailing list]",

'about'          => 'A propòsit ëd',
'article'        => 'Pàgina ëd contnù',
'newwindow'      => '(as deurb ant na fnestra neuva)',
'cancel'         => 'Scancela',
'qbfind'         => 'Treuva',
'qbbrowse'       => 'Sfeuja',
'qbedit'         => 'Modìfica',
'qbpageoptions'  => 'Opsion dla pàgina',
'qbpageinfo'     => 'Informassioni rësguard a la pagina',
'qbmyoptions'    => 'Mie opsion',
'qbspecialpages' => 'Pàgine speciaj',
'moredotdotdot'  => 'Dë pì...',
'mypage'         => 'Mia pàgina',
'mytalk'         => 'Mie ciaciarade',
'anontalk'       => "Ciaciarade për st'adrëssa IP-sì",
'navigation'     => 'Navigassion',

# Metadata in edit box
'metadata_help' => 'Metadat:',

'errorpagetitle'    => 'Eror',
'returnto'          => 'Torna andré a $1.',
'tagline'           => 'Da {{SITENAME}}.',
'help'              => 'Agiut',
'search'            => 'Sërca',
'searchbutton'      => 'Sërca',
'go'                => 'Va',
'searcharticle'     => 'Va',
'history'           => 'Version pì veje',
'history_short'     => 'Stòria',
'updatedmarker'     => "Agiornà da 'nt l'ùltima vira che i son passà",
'info_short'        => 'Anformassion',
'printableversion'  => 'Version bon-a për stampé',
'permalink'         => 'Anliura fissa',
'print'             => 'Stampa',
'edit'              => 'Modìfica',
'editthispage'      => "Modìfica st'artìcol-sì",
'delete'            => 'Scancela',
'deletethispage'    => 'Scancela pàgina',
'undelete_short'    => 'Disdëscancela {{PLURAL:$1|na modìfica|$1 modìfiche}}',
'protect'           => 'Protegg',
'protectthispage'   => 'Protegg sta pàgina-sì',
'unprotect'         => 'gava la protession',
'unprotectthispage' => 'Gava via la protession',
'newpage'           => 'Pàgina neuva',
'talkpage'          => 'Discussion',
'specialpage'       => 'Pàgina Special',
'personaltools'     => 'Utiss personaj',
'postcomment'       => 'Gionta un coment',
'articlepage'       => "Che a varda l'articol",
'talk'              => 'Discussion',
'views'             => 'vìsite',
'toolbox'           => 'utiss',
'userpage'          => 'Che a varda la pàgina Utent',
'projectpage'       => 'Che a varda la pàgina ëd servissi',
'imagepage'         => 'Pàgina dla figura',
'viewtalkpage'      => 'Vardé la discussion',
'otherlanguages'    => 'Àutre lenghe',
'redirectedfrom'    => '(Ridiression da $1)',
'redirectpagesub'   => 'Pàgina ëd ridiression',
'lastmodifiedat'    => "Modificà l'ùltima vira al $2, $1.", # $1 date, $2 time
'viewcount'         => "St'artìcol-sì a l'é stait lesù {{plural:$1|na vira|$1 vire}}.",
'protectedpage'     => 'Pàgina proteta',
'jumpto'            => 'Va a:',
'jumptonavigation'  => 'navigassion',
'jumptosearch'      => 'arsërca',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'A propòsit ëd {{SITENAME}}',
'aboutpage'         => 'Project:A propòsit',
'bugreports'        => 'Malfunsionament',
'bugreportspage'    => 'Project:Malfunsionament',
'copyright'         => 'Ël contnù a resta disponibil sota a na licensa $1.',
'copyrightpagename' => "Drit d'autor ëd {{SITENAME}}",
'copyrightpage'     => "Project:Drit d'autor",
'currentevents'     => 'Neuve',
'currentevents-url' => 'Project:Neuve',
'disclaimers'       => 'Difide',
'disclaimerpage'    => 'Project:Avertense generaj',
'edithelp'          => 'Manual dë spiegassion',
'edithelppage'      => "Project:Coma scrive n'artìcol",
'faq'               => 'FAQ',
'faqpage'           => 'Project:FAQ',
'helppage'          => 'Project:Agiut',
'mainpage'          => 'Intrada',
'portal'            => 'Piòla',
'portal-url'        => 'Project:Piòla',
'privacy'           => 'Polìtica ëd confindensialità',
'privacypage'       => 'Project:Polìtica ëd confidensialità',
'sitesupport'       => 'Oferte',
'sitesupport-url'   => 'Project:Oferte',

'badaccess' => 'Përmess nen giust',

'versionrequired'     => 'A-i va për fòrsa la version $1 ëd MediaWiki',
'versionrequiredtext' => 'Për dovrè sta pàgina-sì a-i va la version $1 dël programa MediaWiki. Che a varda [[Special:Version]]',

'ok'                  => 'Va bin',
'retrievedfrom'       => 'Pijait da  "$1"',
'youhavenewmessages'  => "A l'ha $1 ($2).",
'newmessageslink'     => 'ëd messagi neuv',
'newmessagesdifflink' => "A-i é chèich-còs ëd diferent da 'nt l'ùltima revision",
'editsection'         => 'modìfica',
'editold'             => 'modìfica',
'editsectionhint'     => 'I soma dapress a modifiché la session: $1',
'toc'                 => 'Contnù',
'showtoc'             => 'smon',
'hidetoc'             => 'stërma',
'thisisdeleted'       => 'Veul-lo vardé ò ripristiné $1?',
'viewdeleted'         => 'Veul-lo vardé $1?',
'restorelink'         => '{{PLURAL:$1|na modìfica scancelà|$1 modìfiche scancelà}}',
'feedlinks'           => 'Fluss:',
'feed-invalid'        => 'Modalità ëd sotoscrission dël fluss nen vàlida.',

# Short words for each namespace, by default used in the 'article' tab in monobook
'nstab-main'      => 'Artìcol',
'nstab-user'      => "Pàgina dl'utent",
'nstab-media'     => 'Pàgina multimedial',
'nstab-special'   => 'Special',
'nstab-project'   => 'Pàgina ëd servissi',
'nstab-image'     => 'Figura',
'nstab-mediawiki' => 'Messagi',
'nstab-template'  => 'Stamp',
'nstab-help'      => 'Agiut',
'nstab-category'  => 'Categorìa',

# Main script and global functions
'nosuchaction'      => 'Operassione nen arconossùa',
'nosuchactiontext'  => "L'operassion che a l'ha ciamà a l'é nen arconossùa dal programa MediaWiki",
'nosuchspecialpage' => "A-i é pa gnun-a pàgina special tan-me cola che chiel a l'ha ciamà.",
'nospecialpagetext' => "A l'ha ciamà na pàgina special che a l'é pa staita arconossùa dal programa MediaWiki, ò pura a l'é nen disponibila.",

# General errors
'error'                => 'Eror',
'databaseerror'        => 'Eror ant la base dat',
'dberrortext'          => 'Eror ëd sintassi ant la domanda mandà a la base dat.
L\'ùltima domanda mandà a la base dat a l\'é staita:
<blockquote><tt>$1</tt></blockquote>
da \'nt la funsion "<tt>$2</tt>".
MySQL a l\'ha dane andré n\'eror "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'A-i é staje n\'eror ant la sintassi d\'anterogassion dla base dat.
L\'ùltima anterogassion a l\'é staita:
"$1"
da andrinta a la funsion "$2".
MySQL a l\'ha dane n\'eror "$3: $4"',
'noconnect'            => 'Conession a la base dat falà ansima a $1',
'nodb'                 => 'Selession da la base dat $1 falìa',
'cachederror'          => "Costa a l'é mach na còpia memorisà dla pàgina che a l'ha ciamà, donca a podrìa ëdcò nen esse agiornà.",
'laggedslavemode'      => 'Avis: la pàgina a podrìa ëdcò nen mostré tute soe modìfiche.',
'readonly'             => 'Acess a la base dat sërà për chèich temp.',
'enterlockreason'      => 'Che a buta na rason për ël blocagi, con andrinta data e ora ëd quand che a stima che a sarà gavà.',
'readonlytext'         => "La base dat ëd {{SITENAME}} për adess a l'é blocà, e as peulo pa fesse nì dle neuve imission, nì dle modìfiche, con tute le probabilità për n'operassion ëd manutension dël server. Se a l'é parej motobin ampressa la base a sarà torna doèrta.<br />
L'aministrator che a l'ha blocala a l'ha lassà sto messagi-sì:
<p>:$1",
'missingarticle'       => "La base dat a l'ha pa trovà ël test ëd la pàgina \"\$1\", che però a l'avrìa pro dovù trové.<br />
Sòn a l'é pa n'eror dla base dat, ma a l'ha l'ària dë esse na gran-a dël programa.<br />
Për piasì, che a-j segnala sossì a n'[[{{MediaWiki:policy-url}}|aministrator]] dël sistema, specificand tìtol dla pàgina e ora dl'assident.",
'readonly_lag'         => "La base dat a l'é staita blocà n'automàtich antramentr che che le màchine dël circuito secondari (slave) as buto an pari con cole dël prinsipal (master)",
'internalerror'        => 'Eror intern',
'filecopyerror'        => 'A l\'é pa stait possibil copié l\'archivi "$1" coma "$2".',
'filerenameerror'      => 'A l\'é pa podusse cangeje nòm a l\'archivi "$1" an "$2".',
'filedeleteerror'      => 'A l\'é pa podusse scancelé l\'archivi "$1".',
'filenotfound'         => ' A l\'é pa trovasse l\'archivi "$1".',
'unexpected'           => 'Valor che i së spitavo pa: "$1"="$2".',
'formerror'            => "Eror: la domanda a l'é staita mandà mal",
'badarticleerror'      => "N'operassion parej as peul pa fesse ansima a sta pàgina-sì.",
'cannotdelete'         => "As peul pa scancelesse la pàgina, l'archivi ò la figura che a veul scancelé.",
'badtitle'             => 'Tìtol nen giust',
'badtitletext'         => "La pàgina che a l'ha ciamà a peul pa esse mostrà. A podrìa tratesse ëd na pàgina nen bon-a, veujda, ò pura a podrìa ëdcò esse n'eror ant n'anliura antra lenghe diferente ò tra diferente version ëd {{SITENAME}}.",
'perfdisabled'         => "An dëspias, ma costa funsion a l'é nen disponibila ant j'ore ëd pì gran acess a la base dat, për nen ralenté l'acess dj'Utent!<br />Che a preuva torna antra 2 bot e 4 ore dòp mesdì (UTC).<br /><br />Mersì.",
'perfcached'           => "Sòn a l'é stait memorisà an local e podrìa ëdcò nen esse agiornà:",
'perfcachedts'         => "Lòn che a-j ven dapress a sossì a l'é pijait da 'nt na còpia local \"cache\" dla base dat. L'ùltim agiornament a l'é dël: \$1.",
'wrong_wfQuery_params' => 'Paràmetro nen giust për wfQuery()<br />
Funsion: $1<br />
Query: $2',
'viewsource'           => 'Vardé la sorgiss',
'viewsourcefor'        => 'ëd $1',
'protectedinterface'   => "Costa pàgina-sì a l'ha andrinta un chèich-còs che a fa part d'antërfacia dël programa che a dòvro tùit; donca a l'é proteta për evité che a-i rivo dle ròbe brute.",
'editinginterface'     => "'''A l'euj!:''' A sta modificand na pàgina che as dòvra për generé ël test dl'antërfassa dël programa. Le modìfiche faite ambelessì a l'avran efet dë cangé l'antërfassa për j'àutri Utent.",
'sqlhidden'            => "(l'anterogassion SQL a l'é stërmà)",

# Login and logout pages
'logouttitle'                => "Seurte da 'nt ël sistema",
'logouttext'                 => "A l'é sortù da 'nt ël sistema.
A peul tiré anans a dovré {{SITENAME}} coma Utent anonim, ò pura a peul rintré torna ant ël sistema con l'istess stranòm che a dovrava prima, ò con un diferent.",
'welcomecreation'            => '<h2>Bin avnù, $1!</h2><p>Sò cont a l\'è stait creà.<br />Mersì për avej sërnù dë giutene a fé chërse {{SITENAME}}.<br />Për fé {{SITENAME}} pì soa, e përchè a sia pì belfé dovrela, che as dësmentia nen dë compilé la pàgina dij "sò gust".',
'loginpagetitle'             => 'rintré ant ël sistema',
'yourname'                   => 'Sò stranòm',
'yourpassword'               => 'Soa ciav',
'yourpasswordagain'          => 'Che a bata torna soa ciav',
'remembermypassword'         => "Vis-te mia ciav për vàire session (për podej felo a fa da manca che un a l'abia ij ''cookies'' abilità).",
'yourdomainname'             => 'Sò domini',
'externaldberror'            => "Ò che a l'é rivaje n'eror d'autenticassion esterna, ò pura a l'é chiel (chila) che a l'é nen autorisà a agiornesse sò cont estern.",
'loginproblem'               => "<b>A l'é staje n'eror dëmentré che as provava a rintré ant ël sistema.</b><br />
Che a preuva n'àutra vira, miraco che sta vira a andèissa mai bin!",
'alreadyloggedin'            => "<strong>Utent $1, che a varda che a l'é già andrinta al sistema, a l'ha pa dë manca dë felo torna!</strong><br />",
'login'                      => 'Rintré ant ël sistema',
'loginprompt'                => 'Che a varda mach che a venta avej ij cookies abilità për podej rintré an {{SITENAME}}.',
'userlogin'                  => 'rintré ant ël sistema',
'logout'                     => "Seurte da 'nt ël sistema",
'userlogout'                 => 'seurte dal sistema',
'notloggedin'                => "a l'é pa ant ël sistema",
'nologin'                    => 'Ha-lo ancó nen sò cont? $1.',
'nologinlink'                => 'creésse un cont.',
'createaccount'              => 'Crea un cont neuv',
'gotaccount'                 => 'Ha-lo già un sò cont? $1.',
'gotaccountlink'             => 'Rintré ant ël sistema',
'createaccountmail'          => 'për pòsta eletrònica',
'badretype'                  => "Le doe ciav che a l'ha scrivù a resto diferente antra lor, e a venta che a sio mideme.",
'userexists'                 => "An dëspias.<br />Lë stranòm che a l'ha sërnusse a l'é già dovrà da n'àutr Utent.<br />
Për son i-j ciamoma dë sërn-se në stranòm diferent.",
'youremail'                  => 'Soa adrëssa ëd pòsta eletrònica',
'username'                   => 'Stranòm:',
'uid'                        => "ID dl'utent:",
'yourrealname'               => 'Nòm vèir *',
'yourlanguage'               => 'Lenga:',
'yourvariant'                => 'Variant',
'yournick'                   => 'Sò stranòm (për firmé)',
'badsig'                     => "Soa forma a l'é nen giusta, che a controla le istrussion HTML.",
'email'                      => 'pòsta eletrònica',
'prefs-help-realname'        => '* Nòm vèir (opsional): se i sërne da butelo ambelessì a sarà dovrà për deve mérit ëd vòstr travaj.',
'loginerror'                 => 'Eror ën rintrand ant ël sistema',
'prefs-help-email'           => "* Adrëssa ëd pòsta eletrònica (opsional): ën butandlo i feve an manera che la gent a peula contateve passand për vòstra pàgina dle ciaciarade sensa dë manca che a sapia chi i seve e che adrëssa che i l'eve.",
'nocookiesnew'               => "Sò cont a l'é doèrt, ma chiel (ò chila) a l'ha nen podù rintré ant ël sistema. 
{{SITENAME}} a dòvra ij cookies për fé rintré la gent ant sò sistema. Belavans chiel a l'ha pa ij cookies abilità.
Për piasì, che as j'abìlita e peuj che a preuva torna a rintré con sò stranòm e soa ciav.",
'nocookieslogin'             => "{{SITENAME}} a dòvra ij cookies për fé rintré la gent ant sò sistema. Belavans chiel a l'ha pa ij cookies abilità. Pëër piasì, che a j'abìlita e peuj che a preuva torna.",
'noname'                     => "Lë stranòm che a l'ha batù as peul pa dovresse, as peul nen creésse un cont Utent con ës nòm-sì.",
'loginsuccesstitle'          => "Compliment! A l'é pen-a rintrà ant ël sistema. A-i é pa staje gnun eror.",
'loginsuccess'               => 'A l\'ha avù ël përmess ëd conession al server ëd {{SITENAME}} con lë stranòm utent ëd "$1".',
'nosuchuser'                 => 'Atension<br /><br /> dapress a na verìfica, a n\'arsulta pa gnin Utent che a l\'abia stranòm "$1".<br /><br />
Për piasì, che a contròla ël nòm che a l\'ha batù, ò pura che a dòvra la domanda ambelessì sota për fé un cont Utent neuv.',
'nosuchusershort'            => 'A-i é pa gnun utent che as ciama "$1". Për piasì, che a contròla se a l\'ha scrit tut giust.',
'nouserspecified'            => 'A venta che a specìfica në stranòm utent',
'wrongpassword'              => "La ciav batùa a l'é pa giusta.<br /><br />Che a preuva torna, për piasì.",
'wrongpasswordempty'         => "A l'ha butà na ciav veujda. Për piasì, che a preuva torna.",
'mailmypassword'             => 'Mandme na neuva ciav con un messagi ëd pòsta eletrònica',
'passwordremindertitle'      => 'Servissi për visé la paròla ciav ëd {{SITENAME}}',
'passwordremindertext'       => 'Cheidun (a l\'é belfé che a sia stait pròpe chiel, da \'nt l\'adrëssa IP $1)
a l\'ha ciamà che i-j mandèisso na neuva paròla ciav për rintré ant ël sistema ëd {{SITENAME}} ($4).
La ciav për l\'Utent "$2" adess a resta "$3".
Për rason ëd sicurëssa, a sarìa mej che chiel a la dovrèissa për rintré ant ël sistema pì ampressa che a peul, e che tut sùbit as la cambièissa con un-a che a sern daspërchiel.',
'noemail'                    => 'An arsulta pa gnun-a casela ëd pòsta eletrònica për l\'Utent "$1".',
'passwordsent'               => "Na neuva paròla ciav a l'é staita mandà a l'adrëssa eletrònica registrà për l'Utent \"\$1\".
Për piasì, che a la dòvra sùbit për rintré ant ël sistema pen-a che a l'arsèiv.",
'eauthentsent'               => "A l'adrëssa che a l'ha dane i l'oma mandaje un messagi ëd pòsta eletrònica për conferma.
Anans che qualsëssìa àutr messagi ëd pòsta a ven-a mandà a 's cont-sì, a venta che a a fasa coma che a-j diso dë fé ant ël messagi, për confermé che ës cont a l'é da bon sò.",
'mailerror'                  => 'Eror ën mandand via un messagi ëd pòsta eletrònica: $1',
'acct_creation_throttle_hit' => "Darmagi, ma chiel (chila) a l'ha già creasse $1 cont. A peul pa pì deurb-ne dj'àutri.",
'emailauthenticated'         => "Soa adrëssa ëd pòsta eletrònica a l'é staita autenticà ël $1.",
'emailnotauthenticated'      => "Soa adrëssa ëd pòsta eletrònica a l'é ancó pa staita autenticà.
Da qualsëssìa ëd coste funsion a sarà mandà gnun messagi fin che chiel (chila) a s'auténtica nen.",
'noemailprefs'               => "<strong>Che a specìfica n'adrëssa ëd pòsta eletrònica se a veul dovré coste funsion-sì.</strong>",
'emailconfirmlink'           => 'Che an conferma sa adrëssa ëd pòsta eletrònica',
'invalidemailaddress'        => "Costa adrëssa ëd pòsta eletrònica-sì as peul nen pijesse përchè a l'ha na forma nen bon-a.
Për piasì che a buta n'adrëssa scrita giusta ò che a lassa ël camp veujd.",
'accountcreated'             => 'Cont creà',
'accountcreatedtext'         => "Ël cont Utent për $1 a l'é stait creà.",

# Edit page toolbar
'bold_sample'     => 'Test an grassèt',
'bold_tip'        => 'Test an grassèt',
'italic_sample'   => 'Test an corsiv',
'italic_tip'      => 'Test an corsiv',
'link_sample'     => "Tìtol dl'anliura",
'link_tip'        => 'Anliura interna',
'extlink_sample'  => "http://www.esempi.com tìtol dl'anliura",
'extlink_tip'     => 'Anliura esterna (che as visa dë buté ël prefiss http://)',
'headline_sample' => "Antestassion dl'artìcol",
'headline_tip'    => 'Antestassion dë scond livel',
'math_sample'     => 'Che a buta la fòrmula ambelessì',
'math_tip'        => 'Fòrmula matemàtica (LaTeX)',
'nowiki_sample'   => 'Che a buta ël test nen formatà ambelessì',
'nowiki_tip'      => 'Lassé un tòch ëd test fòra dla formatassion dla wiki',
'image_sample'    => 'Esempi.jpg',
'image_tip'       => 'Figura anglobà ant ël test',
'media_sample'    => 'Esempi.ogg',
'media_tip'       => "Anliura a n'archivi multimedial",
'sig_tip'         => 'Firma butand data e ora',
'hr_tip'          => 'Riga orisontal (da dovresse nen tròp soèns)',

# Edit pages
'summary'                   => 'Somari',
'subject'                   => 'Sogèt',
'minoredit'                 => "Costa-sì a l'è na modìfica cita",
'watchthis'                 => "Ten sot euj st'artìcol-sì",
'savearticle'               => 'Salva sta pàgina',
'preview'                   => 'Preuva',
'showpreview'               => 'Mostra na preuva',
'showlivepreview'           => "Funsion ''Preuva dal viv''",
'showdiff'                  => 'Smon-me le modìfiche',
'anoneditwarning'           => "A l'é ancó nen rintrà ant ël sistema. Soa adrëssa IP a sarà registrà ant la stòria dle modìfiche dë sta pàgina-sì.",
'missingsummary'            => "'''Nòta:''' a l'ha pa butà gnun somari dla modìfica. Se a sgnaca Salva n'àutra vira, soa modìfica a resterà salvà sensa pa ëd somari.",
'missingcommenttext'        => 'Për piasì che a buta un coment ambelessì sota.',
'blockedtitle'              => "Belavans cost ëstranòm-sì a resta col ëd n'utent che a l'é stait disabilità a fé 'd modìfiche a j'articoj.",
'blockedtext'               => "Sò stranòm ò pura soa adrëssa IP a son stait blocà da \$1.<br />
La rason dël blocagi a l'é:<br />
:''\$2''<p>
Se a veul, a peul contaté \$1 ò pura un dj'àutri [[{{MediaWiki:grouppage-sysop}}|aministrator]] për discute d'ës blocagi.

Che a nòta mach che a peul nen dovré la funsion \"Mand-je un messagi eletrònich a st'utent-sì\" se a l'ha nen buta na soa adrëssa ëd pòsta ant ij [[Special:Preferences|sò gust]].

Soa adrëssa IP a la resta \$3. Për piasì che a lo fasa present ant soe comunicassion an materia.",
'blockedoriginalsource'     => "La sorgiss ëd '''$1''' a së s-ciàira ambelessì sota:",
'blockededitsource'         => "Ël test ëd le '''soe modìfiche''' a '''$1''' a së s-ciàira ambelessì sota:",
'whitelistedittitle'        => 'Sòn as peul pa fesse nen rintrand ant ël sistema',
'whitelistedittext'         => 'A venta $1 për podej fé dle modìfiche.',
'whitelistreadtitle'        => 'Sòn as peul pa fesse nen rintrand ant ël sistema',
'whitelistreadtext'         => "A l'ha da [[Special:Userlogin|rintré ant ël sistema]] për podej lese dle pàgine.",
'whitelistacctitle'         => 'Che a në scusa, ma a peul nen creésse un cont.',
'whitelistacctext'          => "Për podej creé dij cont ant sta wiki-sì a l'ha da [[Special:Userlogin|rintré ant ël sistema]] e avej ël drit da creéje.",
'confirmedittitle'          => "Confermé l'adrëssa postal për podej fé dle modìfiche",
'confirmedittext'           => 'A dev confermé soa adrëssa ëd pòsta eletrònica, anans che modifiché dle pàgine. Për piasì, che a convalida soa adrëssa ën dovrand la pàgina [[Special:Preferences|mè gust]].',
'loginreqtitle'             => 'a venta rintré ant ël sistema',
'loginreqlink'              => 'rintré ant ël sistema',
'loginreqpagetext'          => "Che a pòrta passiensa, ma a dev $1 për podej vëdde dj'àutre pàgine.",
'accmailtitle'              => 'Ciav spedìa.',
'accmailtext'               => 'La paròla ciav për "$1" a l\'é staita mandà a $2.',
'newarticle'                => '(Neuv)',
'newarticletext'            => 'Che a scriva sò test ambelessì.',
'anontalkpagetext'          => "----''Costa a l'é la pàgina ëd ciaciarade che a s-ciàira n'utent anònim che a l'é ancó pa dorbusse un cont, ò pura che a lo dòvra nen. Nen savend chi che a sia chiel (chila) i l'oma da dovré ël nùmer IP address për deje n'identificassion. Belavans, ës nùmer-sì a peul esse dovrà da vàire Utent. J'Utent anònim che a l'han l'impression d'arsèive dij coment sensa sust a dovrìo [[Special:Userlogin|creésse sò cont ò pura rintré ant ël sistema]] për evité dë fé confusion con dj'àutri Utent che a peulo avej l'istess nùmer IP.''",
'noarticletext'             => "(St'artìcol-sì a l'é veujd, a podrìa për gentilëssa anandielo chiel, ò pura ciamé la scancelassion dë sta pàgina)",
'clearyourcache'            => "'''Nòta:''' na vira che i l'ha salvà, a peul esse che a-j fasa da manca da passé via la memorisassion (cache) dël sò programa ëd navigassion (browser) për podej ës-ciairé le modìfiche. 
*'''Mozilla / Firefox / Safari:''' Che a ten-a sgnacà ''Shift'' antramentr che a sgnaca col rat ansima a ''Reload'', ò pura che a sgnaca tut ansema ''Ctrl-Shift-R'' (''Cmd-Shift-R'' ansima a j'Apple Mac); 
*'''IE:''' che a ten-a sgnacà ''Ctrl'' antramentr che a sgnaca col rat ansima a ''Refresh'', ò pura che a sgnaca tut ansema ''Ctrl-F5''; 
*'''Konqueror:''': a basta mach sgnaché ël boton ''Reload'', ò pura sgnaché ''F5''; 
*'''Opera''' j'utent a peulo avej da manca dë veujdé 'd continùo soa memorisassion (cache) andrinta a ''Tools&rarr;Preferences''.",
'usercssjsyoucanpreview'    => "<strong>Drita:</strong> che a dòvra ël boton 'Mostra na preuva' për controlé l'efet ëd sò còdes CSS/JS anans che salvelo.",
'usercsspreview'            => "'''Che a varda che a lòn che a s-ciàira a l'é nomach na preuva ëd sò CSS, che salvà a resta ancó nen!'''",
'userjspreview'             => "'''Che as visa che a l'é mach antramentr che as fa na preuva ëd sò Javascript, che a l'é ancó pa stait salvà!'''",
'userinvalidcssjstitle'     => "'''Avis:''' A-i é pa gnun-a facia \"\$1\". Che as visa che le pàgine .css e .js che un as fa daspërchiel a dòvro tute minùscole për tìtol, pr'esempi {{ns:user}}:Scaramacaj/monobook.css nopà che {{ns:user}}:Scaramacaj/Monobook.css.",
'updated'                   => '(Agiornà)',
'note'                      => '<strong>NÒTA:</strong>',
'previewnote'               => "Che a ten-a mach present che costa-sì a l'é nomach na PREUVA, e che soa version a l'é ancó pa staita salvà!",
'previewconflict'           => "Costa preuva a-j mostra ël test dl'articol ambelessì dzora. Se a sërn dë salvelo, a l'é parej che a lo s-ciaireran ëdcò tuti j'àutri Utent.",
'session_fail_preview'      => "<strong>Darmagi! I l'oma pa podù processé soa modìfica per via che a son përdusse për la stra ij dat ëd session.
Për piasì che a preuva n'àutra vira. Se a dovèissa mai torna riveje sossì, che a preuva a seurte dal sistema e peuj torna a rintré.</strong>",
'session_fail_preview_html' => "<strong>Darmagi! I l'oma nen podù processé soa modìfica ën essend che a son përdusse për la stra ij dat ëd session.</strong>

''Contand che sta wiki-sì a mostra dël còdes HTMP nen filtrà, la preuva a ven ëstarmà coma precaussion contra a dij possibij atach fait an Javascript.''

<strong>Se sòn a l'èra na modìfica normal, për piasì che a preuva a fela n'àutra vira. Se a dovèissa mai torna deje dle gran-e, che a preuva a seurte da 'nt ël sistema e peuj torna a rintré.</strong>",
'importing'                 => 'I soma dapress a amporté $1',
'editing'                   => 'Modìfica ëd $1',
'editinguser'               => 'Modìfica ëd $1',
'editingsection'            => 'I soma dapress a modifiché $1 (session)',
'editingcomment'            => 'I soma dapress a modifiché $1 (coment)',
'editconflict'              => "Conflit d'edission: $1",
'explainconflict'           => "Cheidun d'àutr a l'ha salvà soa version dl'artìcol antramentré che chiel (chila) as prontava la soa.<br />
Ël quàder ëd modìfica dë dzora a mostra ël test ëd l'articol coma a resta adess (visadì, lòn che a-i é ant sla Ragnà). Soe modìfiche a stan ant ël quàder dë sota.
Ën volend a peul gionté soe modìfiche ant ël quàder dë dzora.
<b>Mach</b> ël test ant ël quàder dë dzora a sarà salvà, ën sgnacand ël boton \"Salva\".<br />",
'yourtext'                  => 'Sò test',
'storedversion'             => 'Version memorisà',
'nonunicodebrowser'         => "<strong>A L'EUJ! Sò programa ëd navigassion (browser) a travaja pa giust con lë stàndard unicode. I soma obligà a dovré dij truschin përchè a peula salvesse sò artìcoj sensa problema: ij caràter che a son nen ASCII a jë s-ciairerà ant ël quàder ëd modìfica test coma còdes esadecimaj.</strong>",
'editingold'                => "<strong>CHE A FASA MACH ATENSION: che a sta fasend-je dle modìfiche a na version nen agiornà dl'artìcol.<br />
Se a la salva parej, lòn che a l'era stait fait dapress a sta revision-sì as përderà d'autut.</strong>",
'yourdiff'                  => 'Diferense',
'copyrightwarning'          => "Che a ten-a për piasì present che tute le contribussion a {{SITENAME}} as considero daite sota a na licensa ëd la sòrt $2 (che a varda $1 për avej pì 'd detaj).
Se a veul nen che sò test a peula esse modificà e distribuì da qualsëssìa person-a sensa gnun-a limitassion ëd gnun-a sòrt, che a lo buta pa ansima a {{SITENAME}}, ma pitòst che as lo pùblica ansima a un sò sit personal.<br />
Ën mandand ës test-sì chiel (chila) as fa garant sota soa responsabilità che ël test a l'ha scrivusslo despërchiel (daspërchila) coma original, ò pura che a l'ha tracopialo da na sorgiss ëd pùblich domini, ò da n'àutra sorgiss dla midema sòrt, ò pura che chiel (chila) a l'ha arseivù autorisassion scrita a dovré sto test e che sòn a peul dimostrelo.<br />
<strong>DOVRÉ PA MAI DËL MATERIAL COERTÀ DA DRIT D'AUTOR (c) SENSA AVEJ N'AUTORISASSION SCRITA PËR FELO!!!</strong>",
'copyrightwarning2'         => "Për piasì, che a ten-a present che tute le contribussion a {{SITENAME}} a peulo esse modificà ò scancelà da dj'àutri contributor. Se a veul nen che lòn che a scriv a ven-a modificà sensa limitassion ëd gnun-a sòrt, che a lo manda nen ambelessì.<br />
Ant l'istess temp, ën mandand dël material un as pija la responsabilità dë dì che a l'ha scrivusslo daspërchiel (ò daspërchila), ò pura che a l'ha copialo da na sorgiss ëd domini pùblich, ò pura da 'nt n'àutra sorgiss dla midema sòrt (che a varda $1 për avej pì d'anformassion).
<strong>CHE A MANDA PA DËL MATERIAL COERTÀ DA DRIT D'AUTOR SENSA AVEJ AVÙ ËL PËRMESS SCRIT DË FELO!</strong>",
'longpagewarning'           => "<strong>CHE A TEN-A PRESENT!: Sta pàgina-sì a l'é longa $1 kb; chèich
programa ëd navigassion a podrìa avej dle gran-e a modifiché dle pàgine che a-j rivo a brus 
ò pura a passo ij 32 kb.
Për piasì che a varda se a-i fussa mai la possibilità dë divide sto paginon an vàire tòch pì cit.</strong>",
'longpageerror'             => "<strong>EROR: Ël test che a l'ha mandà a l'é longh $1 kb, che a resta pì che ël 
lìmit màssim ëd $2 kb. Parej as peul nen salvesse. A venta che a në fasa vàire 
pàgine diferente për rintré ant ij lìmit tècnich.</strong>",
'readonlywarning'           => "<strong>AVIS: La base dat a l'é staita blocà për manutension,
e donca a peudrà pa salvesse soe modìfiche tut sùbit. A peul esse che
a-j ven-a còmod copiesse via sò test e butesslo da na part për salvelo peuj.</strong>",
'protectedpagewarning'      => "<strong>AVIS: costa pàgina-sì a l'é staita blocà an manera che mach dj'utent con la qualìfica da aministrator a peulo modifichelo. Che a varda le [[Project:Pàgina proteta|polìtiche për la protession dle pàgine]] për savejne dë pì.</strong>",
'semiprotectedpagewarning'  => "'''Nòta:'''costa pàgina-sì a l'é staita protegiùa an manera che mach j'utent registrà a peulo modifichela.",
'templatesused'             => 'Stamp dovrà dzora a sta pàgina-sì:',
'nocreatetitle'             => 'Creassion ëd pàgine limità',
'nocreatetext'              => "Cost sit-sì a l'ha limità la possibilità ëd creé dle pàgine neuve.
A peul torné andaré e modifiché na pàgine che a-i é già, ò pura [[Special:Userlogin|rintré ant ël sistema ò deurb-se un cont]].",

# History pages
'revhistory'          => 'Stòria dle version dë sta pàgina-sì.',
'nohistory'           => "La stòria dle version dë sta pàgina-sì a l'é pa trovasse.",
'revnotfound'         => 'Version nen trovà',
'revnotfoundtext'     => "La version prima dl'artìcol che a l'ha ciamà a l'é pa staita trovà.
Che as controla për piasì l'adrëssa (URL) che a l'ha dovrà për rivé a sta pàgina-sì.",
'loadhist'            => 'I soma antramentr che i carioma la stòria dë sta pàgina-sì',
'currentrev'          => "Versione dël dì d'ancheuj",
'revisionasof'        => 'Revision $1',
'revision-info'       => 'Revision al $1; $2',
'previousrevision'    => '←Version pì veja',
'nextrevision'        => 'Revision pì neuve→',
'currentrevisionlink' => 'vardé la version corenta',
'cur'                 => 'cor',
'next'                => 'anans',
'last'                => 'andaré',
'orig'                => 'orig',
'histlegend'          => 'Confront antra version diferente: che as selession-a le casele dle version che a veul e peui che a sgnaca ël boton për anandié ël process.<br />
Legenda: (cor) = diferense con la version corenta,
(prim) = diferense con la version prima, M = modìfica cita',
'deletedrev'          => '[scancelà]',
'histfirst'           => 'Prima',
'histlast'            => 'Ùltima',

# Revision feed
'history-feed-title'          => 'Stòria',
'history-feed-description'    => 'Stòria dla pàgina ansima a sto sit-sì',
'history-feed-item-nocomment' => '$1 al $2', # user at time
'history-feed-empty'          => "La pàgina che a l'ha ciamà a-i é pa; a podrìa esse staita scancelà da 'nt ël sit, ò pura tramudà a n'àutr nòm.

Che a verìfica con la [[Special:Search|pàgina d'arserca]] se a-i fusso mai dj'àutre pàgine che a podèisso andeje bin.",

# Revision deletion
'rev-deleted-comment'         => '(coment gavà)',
'rev-deleted-user'            => '(stranòm gavà)',
'rev-deleted-text-permission' => "<div class=\"mw-warning plainlinks\">
Costa revision  dla pàgina-sì a l'é staita gavà via da 'nt j'archivi pùblich.
A peul esse che a sio restajne chèich marca ant ël [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} Registr ëd jë scancelament].
</div>",
'rev-deleted-text-view'       => "<div class=\"mw-warning plainlinks\">
Costa revision dla pàgina-sì a l'é staita gavà via da 'nt j'archivi pùblich. 
Coma aministrator d'ës sit-sì chiel a peul ës-ciairela;
a peul esse che a sio restajne chèich marca ant ël [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} Registr ëd jë scancelament].
</div>",
'rev-delundel'                => 'mostra/stërma',
'revisiondelete'              => 'Scancela/disdëscancela revision',
'revdelete-selected'          => 'Revision selessionà për [[:$1]]:',
'revdelete-text'              => "Le version scancelà a së s-ciaireran sempe ant la stòria dla pàgina,
ma sò test al pùblich a-j andran pì nen.

J'àutri aministrator ëd sta wiki-sì a saran ancó sempe bon a s-ciairé ël contnù stërmà
e a podran disdëscancelelo andré con la midema antërfacia, sempe che a sia nen staita butà
na restrission adissional da j'operator dël sit.",
'revdelete-legend'            => 'But-je coste limitassion-sì a le version scancelà:',
'revdelete-hide-text'         => 'Stërma ël test dla revision',
'revdelete-hide-comment'      => 'Stërma ël coment a la modìfica',
'revdelete-hide-user'         => "Stërma lë stranòm ò l'adrëssa IP dël contributor",
'revdelete-hide-restricted'   => "But-je ste restrission-sì a j'aministrator tan-me a j'àutri",
'revdelete-log'               => 'Coment për ël registr:',
'revdelete-submit'            => 'But-jlo a la version selessionà',
'revdelete-logentry'          => 'visibilità dla revision cangià për [[$1]]',

# Diffs
'difference'                => '(Diferense antra revision)',
'loadingrev'                => 'i soma antramentr che i carioma la revision për diferensa',
'lineno'                    => 'Riga $1:',
'editcurrent'               => 'Modìfica la version corenta dë sta pàgina-sì',
'selectnewerversionfordiff' => 'Selession-a na version pì neuva për fé paragon',
'selectolderversionfordiff' => 'Selession-a na version pì veja për fé paragon',
'compareselectedversions'   => 'Paragon-a le version selessionà',

# Search results
'searchresults'         => "Arsultà dl'arserca",
'searchresulttext'      => "Per avej pì d'anformassion ant sl'arserca interna ëd {{SITENAME}}, che a varda [[{{MediaWiki:helppage}}|Arserca ant la {{SITENAME}}]].",
'searchsubtitle'        => 'Domanda "[[:$1]]"',
'searchsubtitleinvalid' => 'Domanda "$1"',
'badquery'              => 'Domanda mal faita',
'badquerytext'          => "Soa domanda a l'é pa podusse processé.
Sòn a podrìa dipende da lòn che chiel (chila) a l'ha arsercà na paròla con manch che tre caràter.
Ò pura a podrìa esse che a l'abia scrivù mal la domanda, pr'esempi \"bleu and and pom\" 
Për piasì, che a preuva torna.",
'matchtotals'           => 'L\'arserca për la vos "$1" a l\'ha trovà<br />$2 rëscontr ant ij tìtoj ëd  j\'artìcoj e<br />$3 rëscontr ant ij test ëd j\'artìcoj.',
'noexactmatch'          => "'''La pàgina \"\$1\" a-i é pa.''' As peul [[:\$1|creéla d'amblé]].",
'titlematches'          => "Ant ij tìtoj dj'artìcoj",
'notitlematches'        => "La vos che a l'ha ciamà a l'é pa trovasse antrames aj tìtoj dj'articol",
'textmatches'           => "Ant ël test ëd j'artìcoj",
'notextmatches'         => "La vos che a l'ha ciamà a l'é pa trovasse antrames aj test dj'articol",
'prevn'                 => 'ij $1 prima',
'nextn'                 => 'ij $1 peuj',
'viewprevnext'          => 'Che a varda ($1) ($2) ($3).',
'showingresults'        => 'Ambelessì sota <b>$1</b> arsultà, a parte dal nùmer #<b>$2</b>.',
'showingresultsnum'     => 'Për sòlit a së smon-o <b>$3</b> arzultà a parte da #<b>$2</b>.',
'nonefound'             => '<strong>Nòta</strong>: l\'arserchè dle paròle soèns dovrà, coma "avej" ò "esse", che a son pa indicisà, a peul dé n\'arsultà negativ, tan-me buté pì che na paròla da arserché (che a ven-o fòra mach cole pàgine andoa le paròle arsercà a-i son tute ansema).',
'powersearch'           => 'Arserca',
'powersearchtext'       => 'Sërca antra jë spassi nominaj:<br />
$1<br />
$2 Elenca le ridiression &nbsp; sërca për $3 $9',
'searchdisabled'        => "L'arserca anterna ëd {{SITENAME}} a l'é nen abilità; për adess a peul prové a dovré un motor d'arserca estern coma Google. (Però che a ten-a present che ij contnù ëd {{SITENAME}} listà ant ij motor pùblich a podrìo ëdcò esse nen d'autut agiornà)",
'blanknamespace'        => '(Prinsipal)',

# Preferences page
'preferences'           => 'Mè gust',
'prefsnologin'          => "A l'é ancó pa rintrà ant ël sistema",
'prefsnologintext'      => 'A dev [[Special:Userlogin|rintré ant ël sistema]]
për podej specifiché ij sò gust.',
'prefsreset'            => 'Ij "sò gust" a son stait pijait andré da \'nt la memòria dël server ëd {{SITENAME}}.',
'qbsettings'            => 'Regolassion dla bara dij menù',
'changepassword'        => 'Cambia ciav',
'skin'                  => 'Facia',
'math'                  => 'Fòrmule ëd matemàtica',
'dateformat'            => 'Forma dla data',
'datedefault'           => "franch l'istess",
'datetime'              => 'Data e ora',
'math_failure'          => 'Parsificassion falà',
'math_unknown_error'    => 'Eror nen conossù',
'math_unknown_function' => 'funsion che as sa pa lòn che a la sia',
'math_lexing_error'     => 'eror ëd léssich',
'math_syntax_error'     => 'eror ëd sintassi',
'math_image_error'      => 'Conversion a PNG falà; che a contròla che latex, dvips, gs, e convert a sio instalà giust',
'math_bad_tmpdir'       => "Ël sistema a-i la fa pa a creé la diretriss '''math temp''', ò pura a-i la fa nen a scriv-je andrinta",
'math_bad_output'       => "Ël sistema a-i la fa pa a creé la diretriss '''math output''', ò pura a-i la fa nen a scriv-je andrinta",
'math_notexvc'          => 'Pa gnun texvc executable; për piasì, che a contròla math/README për la configurassion.',
'prefs-personal'        => "Profil dl'utent",
'prefs-rc'              => 'Ùltime modìfiche',
'prefs-watchlist'       => 'Ròba che as ten sot euj',
'prefs-watchlist-days'  => 'Vàire dì che a veul ës-ciairé an soa lista ëd lòn che as ten sot euj:',
'prefs-watchlist-edits' => 'Vàire modìfiche che a veul ës-ciairé con le funsion avansà:',
'prefs-misc'            => 'Sòn e lòn',
'saveprefs'             => 'Salvé ij sò gust',
'resetprefs'            => 'Buta torna ij "mè gust" coma a-i ero al prinsipi',
'oldpassword'           => 'Veja ciav',
'newpassword'           => 'Neuva ciav',
'retypenew'             => 'Che a scriva torna soa neuva ciav',
'textboxsize'           => 'Amzure dël quàder ëd modìfica dël test',
'rows'                  => 'Righe',
'columns'               => 'Colòne',
'searchresultshead'     => "Specifiché soe preferense d'arserca",
'resultsperpage'        => 'Arsultà da mostré për vira pàgina',
'contextlines'          => 'Righe ëd test për vira arsultà',
'contextchars'          => 'Caràter për riga',
'recentchangescount'    => "Nùmer ëd tìtoj ant j'ùltime modìfiche",
'savedprefs'            => 'Ij sò gust a son stait salvà.',
'timezonelegend'        => 'Fus orari',
'timezonetext'          => "Che a buta ël nùmer d'ore ëd diferensa antra soa ora local e l'ora dël server (UTC).",
'localtime'             => 'Ora Local',
'timezoneoffset'        => 'Diferensa oraria (1)',
'servertime'            => 'Ora dël server',
'guesstimezone'         => "Ciapa sù l'ora da 'nt ël mè programa ëd navigassion (browser)",
'allowemail'            => "Lassa che j'àutri Utent am mando ëd pòsta eletrònica",
'defaultns'             => 'Se as dis nen divers, as sërca ant costi spassi nominaj-sì:',
'default'               => 'stàndard',
'files'                 => 'Archivi',

# User rights
'userrights-lookup-user'     => "Gestion dle partìe d'utent",
'userrights-user-editname'   => 'Che a buta në stranòm:',
'editusergroup'              => "Modifiché le partìe d'Utent",
'userrights-editusergroup'   => "Modìfiché le partìe dj'utent",
'saveusergroups'             => "Salva le partìe d'utent",
'userrights-groupsmember'    => "A l'é andrinta a:",
'userrights-groupsavailable' => 'Partìe disponibij:',
'userrights-groupshelp'      => "Che as selession-a le partìe d'andoa che a veul gavé ò andoa che a veul buteje andrinta l'utent.
Le partìe nen selessionà a saran nen tocà. Për deselessioné na partìa a venta che a jë sgnaca ansima ën tnisend ësgnacà ëdcò ël tast CTRL ëd soa tastera.",

# Groups
'group'            => 'Partìa:',
'group-bot'        => 'Trigomiro',
'group-sysop'      => 'Aministrator',
'group-bureaucrat' => 'Mangiapapé',
'group-all'        => '(utent)',

'group-bot-member'        => 'Trigomiro',
'group-sysop-member'      => 'Aministrator',
'group-bureaucrat-member' => 'Mangiapapé',

'grouppage-bot'        => '{{ns:project}}:Trigomiro',
'grouppage-sysop'      => '{{ns:project}}:Aministrator',
'grouppage-bureaucrat' => '{{ns:project}}:Mangiapapé',

# User rights log
'rightslog'      => "Drit dj'utent",
'rightslogtext'  => "Sòn a l'é na lista dij cambiament aj drit dj'utent.",
'rightslogentry' => "a l'ha tramudà $1 da 'nt la partìa $2 a la partìa $3",
'rightsnone'     => '(gnun)',

# Recent changes
'recentchanges'                     => 'Ùltime Modìfiche',
'recentchangestext'                 => "Costa a l'é la pàgina che a ten ël registr dij cambiament a la wiki pì davsin ant ël temp.",
'rcnote'                            => "Ambelessì sota a-i é la lista dj'ùltime <strong>$1</strong> pàgine modificà ant j'ùltim <strong>$2</strong> dì, a fé data al $3.",
'rcnotefrom'                        => ' Ambelessì sota a-i é la lista dle modìfiche da <b>$2</b> (fin-a a <b>$1</b>).',
'rclistfrom'                        => 'Most-me le modìfiche a parte da $1',
'rcshowhideminor'                   => '$1 le modìfiche cite',
'rcshowhidebots'                    => '$1 ij trigomiro',
'rcshowhideliu'                     => "$1 j'utent registrà",
'rcshowhideanons'                   => "$1 j'utent anònim",
'rcshowhidepatr'                    => '$1 le modìfiche verificà',
'rcshowhidemine'                    => '$1 mie modìfiche',
'rclinks'                           => "Most-me j'ùltime $1 modìfiche ëd j'ùltim $2 dì<br />$3",
'diff'                              => 'dif.',
'hist'                              => 'stòria',
'hide'                              => 'stërma',
'show'                              => 'smon',
'minoreditletter'                   => 'c',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 utent che as ten-o sossì sot euj]',
'rc_categories'                     => 'Limité a le categorìe (che a jë scriva separand-je antra lor con un "|")',
'rc_categories_any'                 => 'Qualsëssìa',

# Recent changes linked
'recentchangeslinked' => 'Modìfiche colegà',

# Upload
'upload'                      => 'Carié',
'uploadbtn'                   => 'Carié',
'reupload'                    => 'Caria torna',
'reuploaddesc'                => 'Torné al mòdulo ëd domanda për carié archivi',
'uploadnologin'               => "A dev [[Special:Userlogin|rintré ant ël sistema]] për podej fé st'operassion-sì",
'uploadnologintext'           => "A dev [[Special:Userlogin|rintré ant ël sistema]]
për podej carié dj'archivi.",
'upload_directory_read_only'  => 'Ël programa webserver a-i la fa nen a scrive ansima a la diretriss ëd càrich ($1).',
'uploaderror'                 => 'Eror dëmentré che as cariava',
'uploadtext'                  => "'''DOSMAN!''' Anans che carié dla ròba ansima a {{SITENAME}}, che a sia motobin sigur d'avej bin lesù e capì 
[[{{MediaWiki:policy-url}}|ël regolament ëd {{SITENAME}} ansima al dovré dle figure]].

Për vardé ò pura sërché figure già carià ant sla {{SITENAME}}, che a vada ant sla [[Special:Imagelist|lista dle figure]].
Lòn che as caria e së scancela a resta marcà ant ël [[Special:Log/upload|registr dij càrich]].

Che a dòvra ël mòdulo ambelessì sota për carié neuv archivi con figure da dovré për fé pì bej e bin spiegà ij sò artìcoj.
Ant sla pì part dij programa ëd navigassion dla Ragnà (browsers) a dovr ia s-ciairesse un boton con scrit \"Browse...\" (ò pura \"Sfeuja...\", se i l'eve un sistema n'italian) che av deurb la sòlita fnestra che as dòvra për carié dj'archivi.<br />

Ën sërnend un dj'archivi che i l'eve ant sij vòstri disco, ël nòm a vnirà scrit n'automàtich ant la casela ëd test da fianch dël boton.<p>

'''A dev ëdcò selessioné la casela ëd conferma che a dis che l'archivi a-j va nen contra a gnun-a nòrma ant sël drit d'autor.'''<p>

Fait lolì, che a sgnaca ël boton \"Carié\" për completé l'operassion.
Ël càrich a podrìa duré ëdcò chèich minuta, se chiel (chila) a l'avèissa na conession che a va pian, ò pura se la figura a la fussa tròp gròssa (figure parej as conseja dë nen carieje).<p>

Le sòrt d'archivi che as preferisso a son ël JPEG për le fotografìe, ël PNG për ij dissègn, j'icòne e ij simboj, l'OGG për j'archivi sonòr.<p>

Për piasì, anans che carieje, che a rinòmina ij sò archivi con dij nòm che diso lòn che a son, për evité dë fé confusion.
Për buté na neuva figura ant n'articol, dovré n'anliura ant la forma
'''<nowiki>[[image:archivi.jpg]]</nowiki>''' ò pura
'''<nowiki>[[image:archivi.png|alt text, test alternativ]]</nowiki>''' ò pura
'''<nowiki>[[media:archivi.ogg]]</nowiki>''' per ij son.<p>

Che a ten-a present che tan-me për tuti ij contnù ëd la {{SITENAME}}, qualsëssìa person-a a peul modifiché, cangé ò pura scancelé ij sò archivi, se a jë smija che sòn a sia ant j'anteressi ëd l'enciclopedìa. Che a ten-a ëdcò da ment che, se a-i fusso dij comportament nen conformà a le nòrme, ò pura se a-i fussa na caria tròp gròssa për ël sistema, a podrìa esse blocà (ant sël pat d'esse perseguì se a-i fusso dle responsabilita legaj).",
'uploadlog'                   => 'Registr dij càrich',
'uploadlogpage'               => 'Registr dij càrich',
'uploadlogpagetext'           => "Ambelessì sota a-i é la lista dj'ùltim archivi carià ant sël server ëd {{SITENAME}}.",
'filename'                    => "Nòm dl'archivi",
'filedesc'                    => 'Oget',
'fileuploadsummary'           => "Detaj dl'archivi:",
'filestatus'                  => "Situassion dij drit d'autor",
'filesource'                  => 'Sorgiss:',
'uploadedfiles'               => 'Archivi carià ant la {{SITENAME}}',
'ignorewarning'               => "Piantla-lì con j'avis e salva an tute le manere",
'ignorewarnings'              => "Lassa sté j'avis",
'minlength'                   => "Ij nòm dj'archivi dle figure a l'han dë esse longh almanch 3 caràter, ma a l'é pì bon deuit dovré dij nòm longh, basta che a faso na bon-a descrission dël soget dla figura.",
'illegalfilename'             => 'Ël nòm d\'archivi "$1" a l\'ha andrinta dij caràter che as peulo pa dovresse ant ij tìtoj dle pàgine. Për piasì che a-j cangia nòm e peui che a torna a carielo.',
'badfilename'                 => 'Ël nòm dl\'archivi a l\'é stait cambià an "$1".',
'largefileserver'             => "St'archivi-sì a resta pì gròss che lòn che la màchina sentral a përmet.",
'emptyfile'                   => "L'archivi che a l'ha pen-a carià a smija veujd. 
Sòn a podrìa esse rivà përchè che chiel a l'ha scrivù mal ël nòm dl'archivi midem. 
Për piasì che a contròla se a l'é pro cost l'archivi che a veul carié.",
'fileexists'                  => "N'archivi con ës nòm-sì a-i é già, për piasì che as contròla $1 se a l'é pa sigur dë volej cangelo.",
'fileexists-forbidden'        => "Belavans n'archivi con ës nòm-sì a-i é già, donca ël nòm as peul pa pì dovresse; për piasì che a torna andré e che as caria sò archivi con un nòm diferent. [[Image:$1|thumb|center|$1]]",
'fileexists-shared-forbidden' => "Belavans n'archivi con ës nòm-sì ant la diretriss dj'archivi condivis a-i é già, donca ël nòm as peul pa pì dovresse; për piasì che a torna andré e che as caria sò archivi con un nòm diferent.
[[Image:$1|thumb|center|$1]]",
'successfulupload'            => 'Carià complet',
'fileuploaded'                => "L'archivi \"\$1\" a l'é stait carià ant sël server coma che as dev.
Che a dòvra st'anliura-sì: (\$2) për modifiché la pàgina ëd descrission dl'archivi che a l'ha pen-a carià, e che a buta bele sùbit cole anformassion che a jë smija dë buté (lòn che a l'é, andoa a l'ha trovalo, chi che a l'ha falo e quand, e via fòrt) e na nòta ansma a la situassion dij drit d'autor dl'archivi midem.<br /> Che as dësmentia pa dla nota ant sij drit, che dësnò l'archivi a sarà scancelà motobin ampressa.",
'uploadwarning'               => 'Avis che i soma dapress a carié',
'savefile'                    => "Salva l'archivi",
'uploadedimage'               => 'a l\'ha carià "[[$1]]"',
'uploaddisabled'              => 'Càrich blocà',
'uploaddisabledtext'          => "La possibilità ëd carié dj'archivi ansima a sta wiki-sì a l'é staita disabilità.",
'uploadscripted'              => "St'archivi-sì a l'ha andrinta chèich-còs (dël còdes HTML ò pura dlë script) che a podrìe esse travajà mal da chèich programa ëd navigassion (browser).",
'uploadcorrupt'               => "St'archivi-sì ò che a l'é falà ò che a l'ha n'estension cioca. Për piasì, che as contròla l'archivi e peuj che a preuva torna a carielo.",
'uploadvirus'                 => "St'archivi-sì a l'han andrinta un '''vìrus!''' Detaj: $1",
'sourcefilename'              => "Nòm dl'archivi sorgiss",
'destfilename'                => "Nòm dl'archivi ëd destinassion",
'filewasdeleted'              => "N'archivi con ës nòm-sì a l'é gia stait caria e peui scancelà. Për piasì, che a verìfica $1 anans che carielo n'àutra vira.",

'license'   => 'Licensa:',
'nolicense' => 'Pa gnun-a selession faita',

# Image list
'imagelist'                 => 'Lista dle figure',
'imagelisttext'             => "Ambelessì sota a-i é {{PLURAL:$1|l'ùnica figura che a-i sia|na lista ëd '''$1''' figure, ordinà për $2}}.",
'imagelistforuser'          => 'Sòn a mostra mach le figure carià da $1.',
'getimagelist'              => 'arserca ant la lista dle figure',
'ilsubmit'                  => 'Sërca',
'showlast'                  => "Lista ëd $1, antra j'ùltime figure, ordinà për $2.",
'byname'                    => 'nòm',
'bydate'                    => 'për data',
'bysize'                    => 'pèis',
'imgdelete'                 => 'scanc',
'imgdesc'                   => 'descr',
'imglegend'                 => 'Legenda: (desc) = mostra/modìfica la descrission dla figura.',
'imghistory'                => 'Stòria dë sta figura',
'revertimg'                 => 'buta torna',
'deleteimg'                 => 'scanc',
'deleteimgcompletely'       => 'scanc',
'imghistlegend'             => 'Legenda: (cor) = figura corenta, (scanc) = scancela sta version veja, (arb) = arbuta sù sta veja version coma version corenta.
<br /><i>Che a jë sgnaca ansima a na data për ës-ciairé tute le figure che sono staite carià an cola data-lì </i>.',
'imagelinks'                => 'Anliure a le figure',
'linkstoimage'              => "Le pàgine sì sota a l'han andrinta dj'anliure a sta figura-sì:",
'nolinkstoimage'            => "Pa gnun-a pàgina che a l'abia n'anliura a sta figura-sì.",
'sharedupload'              => "St'archivi-sì a l'é stait carià an comun; donca a peul esse dovrà antra vàire proget wiki diferent.",
'shareduploadwiki'          => 'Che as varda $1 për savejne dë pì.',
'shareduploadwiki-linktext' => "pàgina dë spiegon dl'archivi",
'noimage'                   => 'A-i é pa gnun archivi che as ciama parej, a peul $1.',
'noimage-linktext'          => 'carijlo',
'uploadnewversion-linktext' => "Carié na version neuva dë st'archivi-sì",

# MIME search
'mimesearch' => 'Arsërca për sòrt MIME',
'mimetype'   => 'Sòrt MIME:',
'download'   => 'dëscarié',

# Unwatched pages
'unwatchedpages' => 'Pàgine che as ten-o pì nen sot euj',

# List redirects
'listredirects' => 'Lista dle ridiression',

# Unused templates
'unusedtemplates'     => 'Stamp nen dovrà',
'unusedtemplatestext' => "Sta pàgina-sì a la smon tuti jë stamp (pàgine dlë spassi nominal Stamp) che a son pa dovrà andrinta a gnun-a pàgina. Mej verifiché che në stamp a-j serva nen a dj'àutri stamp (che dle vire në stamp gròss a l'é fait ëd vàire cit sotastamp), anans che fé che ranchelo via.",
'unusedtemplateswlh'  => 'àutre anliure',

# Random redirect
'randomredirect' => 'Na ridiression qualsëssìa',

# Statistics
'statistics'    => 'Statìstiche',
'sitestats'     => 'Statìstiche dël sit',
'userstats'     => 'Statìstiche ëd {{SITENAME}}',
'sitestatstext' => "A-i é la blëssa ëd <b>\$1</b> pàgine ant la base dat.
Ës nùmer-sì a comprend le pàgine ëd ciaciarada, cole ansima a {{SITENAME}}, artìcoj curt (che ant ël parlé técnich dla wiki as ciamo \"sbòss\"), ridiression, e àutre pàgine che a l'é belfé che a sio pa dj'artìcoj.
Gavà coste, a resto <b>\$2</b> pàgine che a l'han tuta l'ària d'esse dj'artìcoj da bon.

'''\$8''' archivi a son stait carià.

A-i é staje un total ëd '''\$3''' pàgine consultà, e '''\$4''' modìfiche a j'artìcoj, da quand sta wiki a l'é doèrta.
Costa media an dis che a-i son ëstaje <b>\$5</b> modìfiche për artìcol, e che vira artìcol a l'é stait lesù <b>\$6</b> vire për modìfica.

Ant la [http://meta.wikimedia.org/wiki/Help:Job_queue coa] a-i {{plural|é|son}} '''\$7''' process.",
'userstatstext' => "A-i son <b>$1</b> utent registrà, dont
<b>$2</b> (ël '''$4%''') a l'han la qualìfica d'aministrator (che a varda $3).",

'disambiguations'     => 'Pàgine për la gestion dij sinònim',
'disambiguationspage' => 'Template:Gestion dij sinònim',

'doubleredirects'     => 'Ridiression dobie',
'doubleredirectstext' => "<b>Pieve varda:</b> costa lista-sì dle vire a peul avej andrinta dj'arsultà nen giust. Sòn a peul rivé miraco përchè a-i sio dj'anliure ò pura dël test giontà dapress a l'istrussion #REDIRECT.<br />
Vira riga a l'ha andrinta j'anliure a la prima e a la sconda rediression, ant sël pat ëd la prima riga ëd test dla seconda rediression, che për sòlit a l'ha andrinta l'artìcol ëd destinassion vèir, col andoa che a dovrìa ëmné ëdcò la prima reiression.",

'brokenredirects'     => 'Ridiression nen giuste',
'brokenredirectstext' => "Coste ridiression-sì a men-o a dj'articoj ancó pa creà.",

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categorìa|categorìe}}',
'nlinks'                  => '$1 {{PLURAL:$1|anliura|anliure}}',
'nmembers'                => '$1 {{PLURAL:$1|element|element}}',
'nrevisions'              => '{{PLURAL:$1|na revision|$1 revision}}',
'nviews'                  => '{{PLURAL:$1|na consultassion|$1 consultassion}}',
'lonelypages'             => 'Pàgine daspërlor',
'uncategorizedpages'      => 'Pàgine che a son nen assignà a na categorìa',
'uncategorizedcategories' => 'Categorìe che a son pa assignà a na categorìa',
'uncategorizedimages'     => 'Figure nen dovrà',
'unusedcategories'        => 'Categorìe nen dovrà',
'unusedimages'            => 'Figure nen dovrà',
'popularpages'            => 'Pàgine pì s-ciairà',
'wantedcategories'        => 'Categorìe dont a fa da manca',
'wantedpages'             => 'Artìcoj pì ciamà',
'mostlinked'              => "Pàgine che a l'han pì d'anliure che a-i men-o la gent ansima",
'mostlinkedcategories'    => "Categorìe che a l'han pì d'anliure che a-i men-o la gent ansima",
'mostcategories'          => 'Artìcoj che a son marcà an pì categorìe',
'mostimages'              => 'Figure pì dovrà',
'mostrevisions'           => 'Artìcoj pì modificà',
'allpages'                => 'Tute le pàgine',
'prefixindex'             => 'Ìndess për inissiaj',
'randompage'              => 'Na pàgina qualsëssìa',
'shortpages'              => 'Pàgine curte',
'longpages'               => 'Pàgine longhe',
'deadendpages'            => 'Pàgine che a men-o da gnun-a part',
'listusers'               => "Lista dj'utent",
'specialpages'            => 'Pàgine Speciaj',
'spheading'               => 'Pàgine Speciaj',
'restrictedpheading'      => 'Pàgine speciaj riservà',
'rclsub'                  => '(pàgine che a l\'han n\'anliura che a riva da "$1")',
'newpages'                => 'Pàgine neuve',
'ancientpages'            => 'Le pàgine pì veje',
'intl'                    => 'Anliure antra lenghe diferente',
'move'                    => 'Tramuda',
'movethispage'            => 'Tramuda costa pàgina-sì',
'unusedimagestext'        => "<p>Che ten-a present che dj'àutri sit ant sla Ragnà, coma la {{SITENAME}} antërnassional, a podrìo avej butà n'anliura a na figura con n'adrëssa direta, e donca a peul esse che le figure ant costa lista-sì, contut che son nen dovrà ant costa version-sì dla {{SITENAME}}, a sio però dovrà ant chèich àutr pòst.",
'unusedcategoriestext'    => "Le pàgine ëd coste categorìe-sì a son fasse ma peuj a l'han andrinta nì d'artìcoj, nì ëd sotacategorìe.",

# Book sources
'booksources' => 'Andoa trové dij lìber',

'categoriespagetext' => 'An costa wiki a-i son ste categorìe-sì.',
'data'               => 'Dat',
'userrights'         => "Gestion dij drit dj'utent",
'groups'             => "Partìe d'utent",
'alphaindexline'     => '$1 a $2',
'version'            => 'Version',

# Special:Log
'specialloguserlabel'  => 'Utent:',
'speciallogtitlelabel' => 'Tìtol:',
'log'                  => 'Registr',
'alllogstext'          => "Son a mostra na combinassion dij registr ëd lòn che a l'é cariasse, scancelasse, blocasse e ëd lòn che a l'han fait j'aministrator.
A peul sern-se n'arsultà pì strèit ën selessionand na sòrt ëd registr sola, un nòm Utent ò pura la pàgina che a-j anteressa.",
'logempty'             => 'Pa gnun element parej che a sia trovasse ant ij registr.',

# Special:Allpages
'nextpage'          => 'Pàgina che a-i ven ($1)',
'allpagesfrom'      => 'Most-me la pàgine ën partend da:',
'allarticles'       => "Tùit j'artìcoj",
'allinnamespace'    => 'Tute le pàgine (spassi nominal $1)',
'allnotinnamespace' => 'Tute le pàgine (che a son nen ant lë spassi nominal $1)',
'allpagesprev'      => 'Cole prima',
'allpagesnext'      => 'Cole che a ven-o',
'allpagessubmit'    => 'Va',
'allpagesprefix'    => "Most-me la pàgine che a l'ha prefiss:",

# E-mail user
'mailnologin'     => 'A-i é pa gnun-a adrëssa për mandé ël messagi',
'mailnologintext' => "A dev [[Special:Userlogin|rintré ant ël sistema]]
e avej registrà n'adrëssa ëd pòsta eletrònica vàlida ant ij [[Special:Preferences|sò gust]] për podej mandé dij messagi ëd pòsta eletrònica a j'àutri Utent.",
'emailuser'       => "Mand-je un messagi eletrònich a st'Utent-sì",
'emailpage'       => "Mand-je un messagi ëd pòsta eletrònica a st'utent-sì",
'emailpagetext'   => "Se st'Utent-sì a l'ha registrà na soa casela ëd pòsta eletrònica, i peule scriv-je un messagi con ël mòdulo ambelessì sota.
L'adrëssa eletrònica che a l'ha specificà ant ij sò \"gust\" a sarà butà coma mitent, an manera che ël destinatari, ën volend, a peula arspond-je.",
'usermailererror' => "L'oget che a goèrna la pòsta eletrònica a l'ha dait eror:",
'defemailsubject' => 'Messagi da {{SITENAME}}',
'noemailtitle'    => 'Pa gnun-a adrëssa ëd pòsta eletrònica',
'noemailtext'     => "Cost Utent-sì a l'ha nen registrà gnun-a casela ëd pòsta eletrònica, ò pura a l'ha sërnù ëd nen fesse mandé pòsta da j'àutri Utent.",
'emailfrom'       => 'Da',
'emailto'         => 'A',
'emailsubject'    => 'Oget',
'emailmessage'    => 'Messagi',
'emailsend'       => 'Manda',
'emailsent'       => 'Messagi eletrònich mandà',
'emailsenttext'   => "Sò messagi eletrònich a l'é stait mandà",

# Watchlist
'watchlist'            => 'Ròba che im ten-o sot euj',
'mywatchlist'            => 'Ròba che im ten-o sot euj',
'watchlistfor'         => "(për '''$1''')",
'nowatchlist'          => 'A l\'ha ancó pa marcà dj\'artìcoj coma "ròba da tnì sot euj".',
'watchlistanontext'    => "Për piasì, $1 për ës-ciairé ò pura modifiché j'element ëd soa lista dla ròba che as ten sot euj.",
'watchlistcount'       => "'''La lista dla ròba che as ten sot euj a l'ha andrinta $1 element (contand ëdcò le pàgine ëd discussion).'''",
'clearwatchlist'       => 'Veujda la lista dle ròbe da tnì sot euj',
'watchlistcleartext'   => "Che a conferma che a veul gavé via tùit j'element",
'watchlistclearbutton' => 'Dësveujda la lista',
'watchlistcleardone'   => "La lista dla ròba che as ten sot euj a l'è staita dësveujdà. Ën fasendlo a son gavasse via $1 element.",
'watchnologin'         => "A l'é ancó nen rintrà ant ël sistema",
'watchnologintext'     => "A l'ha da manca prima ëd tut dë [[Special:Userlogin|rintré ant ël sistema]]
për podej modifiché soa lista dla ròba dë tnì sot euj.",
'addedwatch'           => "Sòn a l'é stait giontà a le pàgine che it ten-e sot euj",
'addedwatchtext'       => " La pàgina  \"\$1\" a l'é staita giontà a tua [[Special:Watchlist|lista dla ròba da tnì sot euj]].
Le modìfiche che a-i vniran ant costa pàgina-sì e ant soa pàgina ëd discussion a saran listà ambelessì, e la pàgina a së s-ciairerà ën <b>grassèt</b> ant la pàgina ëd j'[[Special:Recentchanges|ùltime modìfiche]] përchè che a resta belfé a ten-la d'euj.

Se a vorèissa mai gavé st'articol-sì da 'nt la lista dij ''Sot Euj'', che a sgnaca \" Chita da tnì sot euj \" ant sla bara dij menù.",
'removedwatch'         => "Gavà via da 'nt la lista dla ròba da tnì sot euj",
'removedwatchtext'     => 'La pàgina  "$1" a l\'è staita gavà via da soa lista dla ròba da tnì sot euj.',
'watch'                => 'ten sot euj',
'watchthispage'        => "Ten sot euj st'artìcol-sì",
'unwatch'              => 'Chita-lì da ten-e sossì sot euj',
'unwatchthispage'      => 'Chita-lì da ten-e sossì sot euj',
'notanarticle'         => "Sòn a l'é pa n'artìcol",
'watchnochange'        => 'Pa gnun-a dle ròbe che as ten sot euj che a sia staita modificà ant ël temp indicà.',
'watchdetails'         => '* $1 pàgine che im ten-o sot euj nen contand cole ëd discussion
* [[Special:Watchlist/edit|most-me e lass-me modifiché la lista antrega ëd lòn che im ten-o sot euj]]',
'wlheader-enotif'      => '* Le notìfiche për pòsta eletrònica a son abilità.',
'wlheader-showupdated' => "* Cole pàgine che a son staite modificà da quand che a l'é passa l'ùltima vira a resto marcà an '''grassèt'''",
'watchmethod-recent'   => "controland j'ùltime modìfiche faite a le pàgine che as ten sot euj",
'watchmethod-list'     => 'controland le pàgine che as ten sot euj për vëdde se a-i sio mai staje dle modìfiche',
'removechecked'        => "Gava via j'element marcà da 'nt la lista dle ròbe da ten-e sot euj",
'watchlistcontains'    => "Soa lista dla ròba che as ten sot euj a l'ha andrinta $1 pàgine.",
'watcheditlist'        => 'Sossì a l\'é un elench alfabétich ëd tute le pàgine ëd contnù che as ten sot euj.
Che a-j buta la cros ant sle casele dle pàgine che a veul gavé via da \'nt la lista e peuj che a jë sgnaca ansima al boton "gava cole selessionà" che a treuva sota (pàgina ëd contnù e ëd discussion a fa mach basta gavene un-a, che as bogio sempe an cobia).',
'removingchecked'      => "I soma antramentr che ij gavoma j'element da 'nt la lista dle ròbe da ten-se sot euj...",
'couldntremove'        => "A l'é pa podusse gavé via l'element '$1'...",
'iteminvalidname'      => "Problema con l'element '$1', nòm nen vàlid...",
'wlnote'               => "Ambelessì sota a-i son j'ùltime $1 modìfiche ant j'ùltime <b>$2</b> ore.",
'wlshowlast'           => "Most-me j'ùltime $1 ore $2 dì $3",
'wlsaved'              => "Costa-sì a l'é na version memorisà ëd soa lista dle ròbe da tnì sot euj.",
'wldone'               => 'Fait.',

'enotif_mailer'      => '{{SITENAME}} - Servissi ëd Notìfica Postal',
'enotif_reset'       => 'March-me tute le pàgine visità',
'enotif_newpagetext' => "Costa-sì a l'é na pàgina neuva",
'changed'            => 'cangià',
'created'            => 'creà',
'enotif_subject'     => 'La pàgina $PAGETITLE ëd {{SITENAME}} a l\'é staita $CHANGEDORCREATED da $PAGEEDITOR',
'enotif_lastvisited' => "Che as varda $1 për ës-ciaré tute le modìfiche da 'nt l'ùltima vira che a l'é passà.",
'enotif_body'        => 'A l\'atension ëd $WATCHINGUSERNAME,

La pàgina $PAGETITLE dël sit {{SITENAME}} a l\'é staita $CHANGEDORCREATED al $PAGEEDITDATE da $PAGEEDITOR, che a varda $PAGETITLE_URL për la version corenta.

$NEWPAGE

Somari dl\'editor: $PAGESUMMARY $PAGEMINOREDIT

Për contaté l\'editor:
Pòsta eletrònica: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Se chiel (chila) a visitèissa nen la pàgina modificà për contròl a-i sarìa pì gnun-a notìfica ëd modìfiche che a podèisso riveje dapress a costa.
Che as visa che a peul cangeje ij setagi dle notìfiche a le pàgine che as ten sot-euj ansima a soa lista dla ròba da ten-e sot euj.

             Comunicassion dël sistema ëd notìfica da {{SITENAME}} 

--
Për cangé ij setagi ëd lòn che as ten sot euj che a vada ansima a
{{fullurl:Special:Watchlist/edit}}

Për fé dle comunicassion ëd servissi e avej pì d\'agiut:
{{fullurl:{{MediaWiki:helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Scancela pàgina',
'confirm'                     => 'Conferma',
'excontent'                   => "Ël contnù a l'era: '$1'",
'excontentauthor'             => "ël contnù a l'era: '$1' (e l'ùnich contributor a l'era stait '$2')",
'exbeforeblank'               => "Anans d'esse dësvojdà ël contnù a l'era: '$1'",
'exblank'                     => "La pàgina a l'era veujda",
'confirmdelete'               => 'Conferma dlë scancelament',
'deletesub'                   => '(Scancelament ëd "$1")',
'historywarning'              => "Avis: la pàgina che a l'é antramentr che a scancela a l'ha na stòria:",
'confirmdeletetext'           => "A sta për scancelé d'autut da 'nt la base dat na pàgina ò pura na figura, ansema a tuta soa cronologìa.<p>
Për piasì, che an conferma che sòn a l'é da bon sò but, che a as rend cont ëd le conseguense ëd lòn che a fa, e che sòn a resta an pien an régola con lòn che a l'é stabilì ant la [[{{MediaWiki:policy-url}}]].",
'actioncomplete'              => 'Travaj fait e finì',
'deletedtext'                 => 'La pàgina "$1" a l\'é staita scancelà.
Che a varda $2 për na lista dle pàgine scancelà ant j\'ùltim temp.',
'deletedarticle'              => 'Scancelà "$1"',
'dellogpage'                  => 'Registr djë scancelament',
'dellogpagetext'              => "Ambelessì sota na lista dle pàgine scancelà ant j'ùltim temp.
Ij temp a son conforma a l'ora dël server (UTC).",
'deletionlog'                 => 'Registr djë scancelament',
'reverted'                    => 'Version prima butà torna sù',
'deletecomment'               => 'Motiv dlë scancelament',
'imagereverted'               => "La version pì veja a l'é staita torna buta sù. Gnun eror.",
'rollback'                    => 'Dòvra na revision pì veja',
'rollback_short'              => 'Ripristinè',
'rollbacklink'                => "ripristiné j'archivi",
'rollbackfailed'              => "A l'é pa podusse ripristiné",
'cantrollback'                => "As peul pa tornesse a na version pì veja: l'ùltima modìfica a l'ha fala l'ùnich utent che a l'abia travajà a cost artìcol-sì.",
'alreadyrolled'               => "As peulo pa anulé j'Ultime modìfiche ëd [[:$1]]
faite da [[User:$2|$2]] ([[User talk:$2|Talk]]); Cheidun d'àutr a l'ha già modificà ò pura anulà le modìfiche a sta pàgina-sì.

L'ùltima modìfica a l'é staita faita da [[User:$3|$3]] ([[User talk:$3|Talk]]).",
'editcomment'                 => 'Ël coment dla modìfica a l\'era: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'                  => "Gavà via le modìfiche dl'utent [[Special:Contributions/$2|$2]] ([[User_talk:$2|Talk]]); ël contnù a l'é stait tirà andarè a l'ùltima version dl'utent [[User:$1|$1]]",
'sessionfailure'              => "A-i son ëstaje dle gran-e con la session che a identìfica sò acess; ël sistema a l'ha nen eseguì l'ordin che a l'ha daje për precaussion. Che a torna andaré a la pàgina prima con ël boton \"andaré\" ëd sò programa ëd navigassion (browser), peuj che as carìa n'àutra vira costa pàgina-sì e che a preuva torna a fé lòn che vorìa fé.",
'protectlogpage'              => 'Registr dle protession',
'protectlogtext'              => "Ambelessì sota a-i é na lista d'event ëd protession e dësprotession ëd pàgine.
Che a varda la [[Project:Pàgina proteta|guida a le pàgine protete]] për savejne dë pì.",
'protectedarticle'            => '"[[$1]]" a l\'é protet',
'unprotectedarticle'          => 'Dësprotegiù "[[$1]]"',
'protectsub'                  => '(I soma antramentr che i protegioma "$1")',
'confirmprotect'              => 'Che an conferma la protession',
'protectcomment'              => 'Motiv dla protession',
'unprotectsub'                => '(dësprotession ëd "$1")',
'protect-unchain'             => 'Dësbloché ij permess ëd tramudé dla ròba',
'protect-text'                => 'Ambelessì a peul vardé e cangé ël livel ëd protession dla pàgina <strong>$1</strong>.
Për piasì, che a resta mach motobin sigur da esse ant ij lìmit ëd le [[Project:Pàgina proteta|polìtiche ëd proget]].',
'protect-default'             => '(stàndard)',
'protect-level-autoconfirmed' => "Bloché j'utent nen registrà",
'protect-level-sysop'         => "mach për j'aministrator",

# Restrictions (nouns)
'restriction-edit' => 'Modìfica',
'restriction-move' => 'Tramuda',

# Undelete
'undelete'                 => 'Pija andré na pàgina scancelà',
'undeletepage'             => 'S-ciàira e pija andaré le pàgine scancelà',
'viewdeletedpage'          => 'Smon le pàgine scancelà',
'undeletepagetext'         => 'Le pàgine ambelessì sota a son staite scancelà, ma a resto ancó memorisà e donca as peulo pijesse andaré. La memòria a ven polidà passaje un pòch ëd temp.',
'undeleteextrahelp'        => "Për ripristiné la pàgina antrega, che a lassa tute le casele nen selessionà e che a jë sgnaca ansima a '''''Buta coma a l'era '''''.
Për ripristiné mach chèich-còs, che a selession-a lòn che a veul ripristiné anans che sgnaché. Ën sgacand-je ansima a '''''Veujda casele''''' peul polidesse d'amblé tute le casele selessionà e dësvojdé ël coment.",
'undeleterevisions'        => '$1 revision memorisà',
'undeletehistory'          => "Se a pija andré st'articol-sì, ëdcò tute soe revision a saran pijaite andaré ansema a chiel ant soa cronologìa.<br />
Se a fussa mai staita creà na pàgina neuva con l'istess nòm dòp che la veja a l'era staita scancelà, le revision a saran buta ant la cronologìa e la version pùblica dla pàgina a sarà nen modificà.",
'undeletehistorynoadmin'   => "Sta pàgina-sì a l'é staita scancelà. Ël motiv che a l'é scancelasse 
as peul savejsse ën vardand ël somari ambelessì sota, andoa che a së s-ciàira ëdcò chi che a 
l'avìa travaje ansima anans che a la scancelèisso.
Ël test che a-i era ant le vàire version a peulo s-ciairelo mach j'aministrator.",
'undeletebtn'              => 'Ripristiné',
'undeletereset'            => 'Gava tute le selession',
'undeletecomment'          => 'Coment:',
'undeletedarticle'         => 'Pijaita andré "$1"',
'undeletedrevisions'       => '$1 revision pijaite andaré',
'undeletedrevisions-files' => '$1 revision e $2 archivi pijait andaré',
'undeletedfiles'           => '$1 archivi pijait andaré',
'cannotundelete'           => "Disdëscancelament falì; a peul esse che i fusse antra doi a felo ant l'istess temp e l'àutr a sia riva prima.",
'undeletedpage'            => "<big>'''$1 a l'é stait pijait andaré'''</big>

Che as varda ël [[Special:Log/delete|Registr djë scancelament]] për ës-ciairé j'ùltim scancelament e disdëscancelament.",

# Namespace form on various pages
'namespace' => 'Spassi nominal:',
'invert'    => 'Anvert la selession',

# Contributions
'contributions' => "Contribussion dë st'Utent-sì",
'mycontris'     => 'Mie contribussion',
'contribsub2'    => 'Për $1 ($2)',
'nocontribs'    => "A l'é pa trovasse gnun-a modìfica che a fussa conforma a costi criteri-sì",
'ucnote'        => "Ambelessì sota a-i son j'ùltime <b>$1</b> modìfiche faite da st'Utent-sì ant j'ùltim <b>$2</b> dì.",
'uclinks'       => "Vardé j'ùltimi $1 modifiche; vardé j'ùltim $2 dì.",
'uctop'         => ' (ùltima dla pàgina)',

'sp-contributions-newest'      => "J'ùltim",
'sp-contributions-oldest'      => 'Ij prim',
'sp-contributions-newer'       => '$1 andaré',
'sp-contributions-older'       => '$1 anans',
'sp-contributions-newbies-sub' => "Për j'utent neuv",

'sp-newimages-showfrom' => "Smon j'ùltime figure anandiandse da $1",

# What links here
'whatlinkshere' => "Pàgine con dj'anliure che a men-o a costa-sì",
'notargettitle' => 'A manco ij dat',
'notargettext'  => "A l'ha pa dit a che pàgina ò Utent apliché l'operassion ciamà.",
'linklistsub'   => "(Lista d'anliure)",
'linkshere'     => "Le pàgine sì sota a l'han andrinta dj'anliure che a men-o ambelessì:",
'nolinkshere'   => "Pa gnun-a pàgina che a l'abia dj'anliure che a men-o a costa-sì.",
'isredirect'    => 'ridiression',
'istemplate'    => 'inclusion',

# Block/unblock
'blockip'                     => "Blochè n'adrëssa IP",
'blockiptext'                 => "Che a dòvra ël mòdulo ëd domanda 'd blocagi ambelessì sota për bloché l'acess con drit dë scritura da na chèich adrëssa IP.<br />
Ës blocagi-sì as dev dovresse MACH për evité dij comportament vandàlich, ën strèita osservansa ëd tùit ij prinsipi dla [[{{MediaWiki:policy-url}}|polìtica ëd {{SITENAME}}]].<br />
Ël blocagi a peul nen ën gnun-a manera esse dovrà për dle question d'ideologìa.

Che a scriva codì che st'adrëssa IP-sì a dev second chiel (chila) esse blocà (pr'esempi, che a buta ij tìtoj ëd pàgine che a l'abio già patì dj'at vandàlich da cost'adrëssa IP-sì).",
'ipaddress'                   => 'Adrëssa IP',
'ipadressorusername'          => 'Adrëssa IP ò stranòm',
'ipbexpiry'                   => 'Fin-a al',
'ipbreason'                   => 'Motiv dël blocagi',
'ipbsubmit'                   => "Bloca st'adrëssa IP-sì",
'ipbother'                    => "N'àutra durà",
'ipboptions'                  => "2 ore:2 ore,1 dì:1 dì,3 dì:3 dì,na sman-a:na sman-a,2 sman-e:2 sman-e,1 mèis:1 mèis,3 mèis:3 mèis,6 mèis:6 mèis,n'ann:n'ann,për sempe:për sempe",
'ipbotheroption'              => "d'àutr",
'badipaddress'                => "L'adrëssa IP che a l'ha dane a l'é nen giusta.",
'blockipsuccesssub'           => 'Blocagi fait',
'blockipsuccesstext'          => ' L\'adrëssa IP "$1" a l\'é staita blocà.<br />
Che a varda la [[Special:Ipblocklist|lista dj\'IP blocà]].',
'unblockip'                   => "Dësblòca st'adrëssa IP-sì",
'unblockiptext'               => "Che a dòvra ël mòdulo ëd domanda ambelessì sota për deje andé al drit dë scritura a n'adrëssa IP che a l'era staita blocà.",
'ipusubmit'                   => "Dësblòca st'adrëssa IP-sì",
'unblocked'                   => "[[User:$1|$1]] a l'é stait dësblocà",
'ipblocklist'                 => "Lista dj'adrësse IP blocà",
'blocklistline'               => "$1, $2 a l'ha blocà $3 ($4)",
'infiniteblock'               => 'për sempe',
'expiringblock'               => 'fin-a al $1',
'blocklink'                   => 'blòca',
'unblocklink'                 => 'dësblòca',
'contribslink'                => 'contribussion',
'autoblocker'                 => "A l'é scataje un blocagi përchè soa adrëssa IP a l'é staita dovrà ant j'ùltim temp da l'Utent \"[[User:\$1|\$1]]\". Ël motiv për bloché \$1 a l'é stait: \"'''\$2'''\"",
'blocklogpage'                => 'Registr dij blocagi',
'blocklogentry'               => '"[[$1]]" a l\'é stait blocà fin-a a $2',
'blocklogtext'                => "Sossì a l'é ël registr dij blocagi e dësblocagi dj'Utent. J'adrësse che
a son staite blocà n'automàtich ambelessì a së s-ciàiro nen. 
Che a varda la [[Special:Ipblocklist|lista dj'adrësse IP blocà]] për vëdde
coj che sio ij blocagi ativ al dì d'ancheuj.",
'unblocklogentry'             => "a l'ha dësblocà $1",
'range_block_disabled'        => "La possibilità che n'aministrator a fasa dij blocagi a ragg a l'é disabilità.",
'ipb_expiry_invalid'          => 'Temp dë scadensa nen bon.',
'ip_range_invalid'            => 'Nùmer IP nen bon.',
'proxyblocker'                => "Bloché j'arpetitor (Proxy) doèrt",
'proxyblockreason'            => "Soa adrëssa IP a l'é staita bloca përchè a l'é cola ëd n'arpetitor (proxy) doèrt. Për piasì che a contata al sò fornitor ëd conession e che a lo anforma. As trata d'un problema ëd siguressa motobin serio.",
'proxyblocksuccess'           => 'Bele fait.',
'sorbs'                       => 'SORBS DNSBL',
'sorbsreason'                 => "Soa adrëssa IP a l'é listà coma arpetitor doèrt (open proxy) ansima a [http://www.sorbs.net SORBS] DNSBL.",
'sorbs_create_account_reason' => "Soa adrëssa IP a l'é listà coma arpetitor doèrt (open proxy) ansima a [http://www.sorbs.net SORBS] DNSBL. A peul nen creésse un cont.",

# Developer tools
'lockdb'              => 'Blòca la base dat',
'unlockdb'            => 'Dësblòca la base dat',
'lockdbtext'          => "Ën blocand la base dat as fërma la possibilità che tuti j'Utent a peulo modifiché le pàgine ò pura fene 'd neuve, che a peulo cambiesse ij \"sò gust\", che a peulo modifichesse soe liste dla ròba da tnì sot euj, e an general gnun a podrà pì fé dj'operassion che a ciamo dë modifiché la base dat.<br /><br />
Për piasì, che an conferma che sossì a l'é pròpe lòn che a veul fé, e dzortut che a sblocherà la base dat pì ampressa che a peul, an manera che tut a funsion-a torna coma che as dev, pen-a che a l'avrà finisse soa manutension.",
'unlockdbtext'        => "Ën dësblocand la base dat as darà andaré a tuti j'Utent la possibilità dë fé 'd modìfiche a le pàgine ò dë fene ëd neuve, ëd cangé ij \"sò gust\", ëd modifiché soe liste 'd ròba da tnì sot euj, e pì an general dë fé tute cole operassion che a l'han da manca dë fé 'd modìfiche a la base dat. 
Për piasì, che an conferma che sòn a l'é da bon lòn che chiel (chila) a veul fé.",
'lockconfirm'         => 'É, i veuj da bon, e sota mia responsabilità, bloché la base dat.',
'unlockconfirm'       => ' É, da bon i veuj dësbloché la base dat, sota mia responsabilità personal.',
'lockbtn'             => 'Blòca la base dat',
'unlockbtn'           => 'Dësblòca la base dat',
'locknoconfirm'       => "Che a varda che a l'é dësmentiasse dë spunté ël quadrèt ëd conferma.",
'lockdbsuccesssub'    => 'Blocagi dla base dat fait',
'unlockdbsuccesssub'  => "Dësblocagi dla base dat fait, ël blòch a l'é stait gavà",
'lockdbsuccesstext'   => "La base dat ëd {{SITENAME}} a l'è staita blocà.
<br />Che as visa mach dë gavé ël blocagi pen-a che a l'ha finì soa manutension.",
'unlockdbsuccesstext' => " La base dat ëd {{SITENAME}} a l'è staita dësblocà.",

# Move page
'movepage'                => 'Tramudé na pàgina',
'movepagetext'            => "Con ël mòdulo ëd domanda ambelessì sota a peul cangeje nòm a na pàgina, tramudand-je dapress ëdcò tuta soa cronologìa anvers al nòm neuv.
Ël vej tìtol a resterà trasformà ant na ridiression che a men-a al tìtol neuv.
J'anliure a la veja pàgina a saran NEN agiornà (e donca a men-eran la gent a la ridiression); che a fasa atension dë
[[Special:Manutenzioni|controlé con cura]] che as creo pa dle ridiression dobie ò dle ridiression che men-o da gnun-a part.
A resta soa responsabilità cola dë esse sigur che j'anliure a men-o la gent andoa che a devo mnela.

Noté bin: la pàgina a sarà '''nen''' tramudà se a-i fussa già mai n'articol che a l'ha ël nòm neuv, gavà col cas che a sia na pàgina veujda ò pura na ridiression, sempre che bele che essend mach parej a l'abia già nen na soa cronologìa.
Sòn a veul dì che, se a l'avèissa mai da fé n'operassion nen giusta, a podrìa sempe torné a rinominé la pàgina col nòm vej, ma ant gnun cas a podrìa coerté na pàgina che a-i é già.

<b>ATENSION!</b>
Un cambiament dràstich parej a podrìa dé dle gran-e che un a së speta pa gnanca. Sòn dzortut se a fussa fait dzora a na pàgina motobin visità. Che a varda mach dë esse pì che sigur d'avej presente le conseguense, prima che fé che fé. Se a l'ha dij dùbit, che a contata pura n'aministrator për ciameje 'd consej.",
'movepagetalktext'        => "La pàgina ëd discussion tacà a costa pàgina d'articol, se a-i é, a sarà tramudà n'automatich ansema a l'artìcol, '''gavà costi cas-sì''':
*quand as tramuda la pàgina tra diferent spassi nominal,
*quand na pàgina ëd discussion nen veujda a-i é già për ël nòm neuv, ò pura
*a l'ha deselessionà ël quadrèt ëd conferma ambelessì sota.
Ant costi cas-sì, se a chërd dë felo, a-j farà da manca dë tramudesse la pàgina ëd discussion daspërchiel, a man.",
'movearticle'             => "Cang-je nòm a l'artìcol",
'movenologin'             => "Che a varda che chiel (chila) a l'è pa rintrà ant ël sistema",
'movenologintext'         => "A venta esse n'Utent registrà e esse [[Special:Userlogin|rintrà ant ël sistema]]
për podej tramudé na pàgina.",
'newtitle'                => 'Neuv tìtol ëd',
'movepagebtn'             => 'Tramuda sta pàgina-sì',
'pagemovedsub'            => 'San Martin bele finì!',
'pagemovedtext'           => 'La pàgina "[[$1]]" a l\'ha cangià nòm an "[[$2]]".',
'articleexists'           => "Na pàgina che as ciama parej a-i é già, ò pura ël nòm che a l'ha sërnù a va nen bin.<br />
Che as sërna, për piasì, un nòm diferent për st'articol.",
'talkexists'              => "La pàgina a l'é staita bin tramudà, ma a l'é pa podusse tramudé soa pàgina ëd discussion, përchè a-i në j'é già n'àutra ant la pàgina con ël tìtol neuv. Për piasì, che a modìfica a man ij contnù dle doe pàgine ëd discussion, an manera che as perdo nen dij pensé anteressant.",
'movedto'                 => 'tramudà a',
'movetalk'                => "Podend, tramuda ëdcò la pàgina ëd discussion che a l'ha tacà.",
'talkpagemoved'           => "Ëdcò la pàgina ëd discussion colegà a l'é staita tramudà",
'talkpagenotmoved'        => "La pàgina ëd discussion colegà <strong>a l'é nen ëstaita tramudà</strong>.",
'1movedto2'               => '[[$1]] Tramudà a [[$2]]',
'1movedto2_redir'         => '[[$1]] tramudà a [[$2]] ën passand për na ridiression',
'movelogpage'             => 'Registr dij San Martin',
'movelogpagetext'         => 'Ambelessì sota a-i é na lista ëd pàgine che a son staite tramudà.',
'movereason'              => 'Motiv',
'revertmove'              => "buta torna coma a l'era",
'delete_and_move'         => 'Scancela e tramuda',
'delete_and_move_text'    => '==A fa da manca dë scancelé==

L\'artìcol ëd destinassion "[[$1]]" a-i é già. Veul-lo scancelelo për avej ëd pòst për tramudé l\'àutr?',
'delete_and_move_confirm' => 'É, scancela la pàgina',
'delete_and_move_reason'  => "Scancelà për liberé ël pòst për tramudene n'àutra",
'selfmove'                => "Tìtol neuv e tìtol vej a resto midem antra lor; as peul pa tramudesse na pàgina butand-la andoa che a l'é già.",
'immobile_namespace'      => "Belavans ël tìtol ëd destinassion a l'é ëd na sòrt riservà; as peulo pa tramudé dle pàgine anvers a col ëspassi nominal-lì.",

# Export
'export'          => 'Esporté dle pàgine',
'exporttext'      => "A peul esporté ël test e modifiché la stòria ëd na pàgina ò pura
ëd n'ansema ëd pàgine gropa ant n'archivi XML. Sòn a peul peuj amportesse 
ant n'àutra wiki ën dovrand la funsion Special:Import.

Për esporté le pàgine, che a së scriva ij tìtoj ant ël quàder ambelessì sota, butand-ji un tìtol për riga,
e che as serna se a veul la version corenta ansema a cole veje, con le righe che conto la stòria dla pàgina,
ò pura mach l'anformassion ant sël quand che a sia staje l'ùltima modìfica.

Se costa ùltima possibilità a fussa lòn che a-j serv, a podrìa ëdcò dovré n'anliura, pr'esempi [[Special:Export/{{Mediawiki:Mainpage}}]] për la pàgina {{Mediawiki:Mainpage}}.",
'exportcuronly'   => 'Ciapa sù mach la version corenta, pa tuta la stòria',
'exportnohistory' => "----
'''Nòta:''' la possibilità d'esporté la stòria completa dle pàgine a l'é staita gavà për dle question corelà a le prestassion dël sistema.",
'export-submit'   => 'Esporté',

# Namespace 8 related
'allmessages'               => 'Messagi ëd sistema',
'allmessagesname'           => 'Nòm',
'allmessagesdefault'        => "Test che a-i sarìa se a-i fusso pa 'd modìfiche",
'allmessagescurrent'        => 'Test corent',
'allmessagestext'           => "Costa-sì a l'é na lista ëd tùit ij messagi ëd sistema ant lë spassi nominal MediaWiki:",
'allmessagesnotsupportedUI' => "Soa antërfacia an lenga <b>$1</b> a l'é nen ativa ansima a Special:Tùit_ij_messagi dzora ës sit-sì.",
'allmessagesnotsupportedDB' => 'Special:Allmessages a travaja nen përchè a-i é ël component wgUseDatabaseMessages frëmm.',
'allmessagesfilter'         => 'Seletor dël nòm dël messagi:',
'allmessagesmodified'       => "Most-me mach lòn che a l'é modificasse",

# Thumbnails
'thumbnail-more'  => 'Slarga',
'missingimage'    => '<b>Figura che a manca</b><br /><i>$1</i>',
'filemissing'     => 'Archivi che a manca',
'thumbnail_error' => 'Eror antramentr che as fasìa la figurin-a: $1',

# Special:Import
'import'                   => 'Amportassion ëd pàgine',
'importinterwiki'          => 'Amportassion da wiki diferente',
'import-interwiki-text'    => "Che a selession-a na wiki e ël tìtol dla pàgina da amporté.
Date dle revision e stranòm dj'editor a resteran piajit sù 'cò lor.
Tute le amportassion antra wiki diferente a resto marcà ant ël [[Special:Log/import|Registr dj'amportassion]].",
'import-interwiki-history' => 'Còpia tute le version stòriche dë sta pàgina-sì',
'import-interwiki-submit'  => 'Amporté',
'importtext'               => "Për piasì, che as espòrta l'archivi da 'nt la sorgiss wiki esterna ën dovrand l'utiss  Special:Esportassion, che as lo salva ansima a sò disch e peui che a lo caria ambelessì.",
'importstart'              => 'I soma antramentr che amportoma le pàgine...',
'import-revision-count'    => '$1 revision',
'importnopages'            => 'Pa gnun-a pàgina da amporté',
'importfailed'             => 'Amportassion falìa: $1',
'importunknownsource'      => "Sorgiss d'amportassion ëd na sòrt nen conossùa",
'importcantopen'           => "L'archivi da amporté a l'é pa podusse deurbe",
'importbadinterwiki'       => 'Anliura antra wiki diferente malfaita',
'importnotext'             => 'Veujd ò sensa pa gnun test',
'importsuccess'            => 'Amportassion andaita a bon fin!',
'importhistoryconflict'    => "A-i son dle stòrie dë sta pàgina-sì che as contradisso un-a con l'àutra (a peul esse che sta pàgina-sì a l'avèissa già amportala)",
'importnosources'          => "A l'é pa staita definìa gnun-a sorgiss d'amportassion da na wiki diferenta, e carié mach le stòrie as peul nen.",
'importnofile'             => "Pa gnun archivi d'amportassion carià.",
'importuploaderror'        => "L'archivi da amporté a l'é pa podusse carié; miraco a fussa mai pì gròss che ël màssim consentì?",

# Import log
'importlogpage'                    => "Registr dj'amportassion",
'importlogpagetext'                => "Amportassion aministrative ëd pàgine e ëd soa stòria da dj'àutre wiki.",
'import-logentry-upload'           => "amportà [[$1]] con un càrich d'archivi",
'import-logentry-upload-detail'    => '$1 revision',
'import-logentry-interwiki'        => "Amportà da n'àutra wiki $1",
'import-logentry-interwiki-detail' => '$1 revision da $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Mia pàgina Utent.',
'tooltip-pt-anonuserpage'         => 'Pàgina Utent për l',
'tooltip-pt-mytalk'               => 'Mia pàgina ëd discussion e ciaciarade.',
'tooltip-pt-anontalk'             => 'Pàgina ëd ciaciarade për l',
'tooltip-pt-preferences'          => 'Coma che i veuj mia {{SITENAME}}.',
'tooltip-pt-watchlist'            => 'Lista dle pàgine che chiel as ten sot euj.',
'tooltip-pt-mycontris'            => 'Sòn i l',
'tooltip-pt-login'                => "Un a l'é nen obligà a rintré ant al sistema, ma se a lo fa a l",
'tooltip-pt-anonlogin'            => "Un a l'é nen obligà a rintré ant al sistema, ma se a lo fa a l",
'tooltip-pt-logout'               => 'Seurte da',
'tooltip-ca-talk'                 => 'Discussion ansima a sta pàgina ëd contnù.',
'tooltip-ca-edit'                 => 'Modifiché sta pàgina-sì. Për piasì, che as fasa na preuva anans che salvé .',
'tooltip-ca-addsection'           => 'Gionteje un coment a sta discussion-sì.',
'tooltip-ca-viewsource'           => 'Sta pàgina-sì a l',
'tooltip-ca-history'              => 'Veje version dla pàgina.',
'tooltip-ca-protect'              => 'Për protege sta pàgina-sì.',
'tooltip-ca-delete'               => 'Scancelé sta pàgina-sì',
'tooltip-ca-undelete'             => 'Pijé andré le modìfiche faite a sta pàgina-sì, anans che a fussa scancelà.',
'tooltip-ca-move'                 => 'Tramudé sta pàgina, visadì cangeje tìtol.',
'tooltip-ca-watch'                => 'Gionté sta pàgina-sì a la lista dle ròbe che as ten-o sot euj.',
'tooltip-ca-unwatch'              => 'Gavé via sta pàgina da',
'tooltip-search'                  => 'Sërché',
'tooltip-p-logo'                  => 'Pàgina prinsipal.',
'tooltip-n-mainpage'              => 'Visité la pàgina prinsipal.',
'tooltip-n-portal'                => 'Rësguard al proget, lòn che a peul fé, andoa trové còsa.',
'tooltip-n-currentevents'         => 'Informassion ansima a lòn che a-i riva.',
'tooltip-n-recentchanges'         => 'Lista dj',
'tooltip-n-randompage'            => 'Carié na pàgina basta che a sia.',
'tooltip-n-help'                  => 'Ël pòst për capì.',
'tooltip-n-sitesupport'           => 'Dene na man.',
'tooltip-t-whatlinkshere'         => 'Lista ëd tute le pàgine dla wiki che a men-o ambelessì.',
'tooltip-t-recentchangeslinked'   => 'Ùltime modìfiche dle pàgine andoa as peul andesse da costa.',
'tooltip-feed-rss'                => 'RSS feed për sta pàgina-sì.',
'tooltip-feed-atom'               => 'Atom feed për sta pàgina-sì.',
'tooltip-t-contributions'         => 'Vardé la lista dle contribussion dë st',
'tooltip-t-emailuser'             => 'Mandeje un messagi ëd pòsta a st',
'tooltip-t-upload'                => 'Carié archivi ëd figure ò son.',
'tooltip-t-specialpages'          => 'Lista ëd tute le pàgine speciaj.',
'tooltip-ca-nstab-main'           => 'Vardé la pàgina ëd contnù.',
'tooltip-ca-nstab-user'           => 'Vardé la pàgina Utent.',
'tooltip-ca-nstab-media'          => 'Vardé la pàgina dl',
'tooltip-ca-nstab-special'        => 'Costa a l',
'tooltip-ca-nstab-project'        => 'Vardé la pàgina proteta.',
'tooltip-ca-nstab-image'          => 'Vardé la pàgina dl',
'tooltip-ca-nstab-mediawiki'      => 'Vardé ël messagi ëd sistema.',
'tooltip-ca-nstab-template'       => 'Vardé lë stamp.',
'tooltip-ca-nstab-help'           => 'Vardé la pàgina d',
'tooltip-ca-nstab-category'       => 'Vardé la pàgina dla categorìa.',
'tooltip-minoredit'               => 'Marca sossì coma modìfica cita',
'tooltip-save'                    => 'Salva le modìfiche',
'tooltip-preview'                 => 'Preuva dle modìfiche (mej sempe fela, prima che fé che salvé!)',
'tooltip-diff'                    => "Fame vëdde che modìfiche che i l'hai faje al test.",
'tooltip-compareselectedversions' => 'Fame ël paragon dle diferense antra le version selessionà.',
'tooltip-watch'                   => 'Gionta sta pàgina-sì a la lista dle ròbe che im ten-o sot euj',
'tooltip-recreate'                => 'Creé torna la pàgina contut che a la sia staita scancelà',

# Stylesheets
'common.css'   => '/** Ël còdes CSS che as buta ambelessì a resta dovrà ant tute le "facie" */',
'monobook.css' => "/* cangé st'archivi-sì për modifiché la formatassion dël sit antregh */",

# Metadata
'nodublincore'      => "Ij metadat dla sòrt '''Dublin Core RDF''' a son disabilità ansima a sta màchina-sì.",
'nocreativecommons' => "Ij metadat dla sòrt '''Creative Commons RDF''' a son disabilità ansima a sta màchina-sì.",
'notacceptable'     => 'Ël server dla wiki a-i la fa pa a provëdde dij dat ant na forma che sò programa local a peula lese.',

# Attribution
'anonymous'        => 'Utent anònim ëd la {{SITENAME}}',
'siteuser'         => '$1, utent ëd {{SITENAME}}',
'lastmodifiedatby' => "Sta pàgina-sì a l'é staita modificà l'ùltima vira al $2, $1 da $3.", # $1 date, $2 time, $3 user
'and'              => 'e',
'othercontribs'    => 'Basà ant sëj travaj ëd $1.',
'others'           => 'àutri',
'siteusers'        => '$1, utent ëd {{SITENAME}}',
'creditspage'      => 'Credit dla pàgina',
'nocredits'        => 'A-i é pa gnun crédit për sta pagina-sì.',

# Spam protection
'spamprotectiontitle'    => 'Filtror dla rumenta',
'spamprotectiontext'     => "La pàgina che a vorìa salvé a l'é staita blocà dal filtror dla rumenta. Sòn a l'é motobin belfé che a sia rivà përchè a-i era n'anliura a un sit estern ëd coj blocà.",
'spamprotectionmatch'    => "Cost-sì a l'é ël test che a l'é restà ciapà andrinta al filtror dla rumenta: $1",
'subcategorycount'       => 'An sta categorìa-sì a-i {{PLURAL:$1|é mach na sotacategorìa|son $1 sotacategorìe}}.',
'categoryarticlecount'   => 'A-i {{PLURAL:$1|é|son}} $1 {{PLURAL:$1|artìcol|artìcoj}} andrinta a la categorìa.',
'listingcontinuesabbrev' => ' anans',
'spambot_username'       => 'MediaWiki - trigomiro che a-j dà deuit a la rumenta',
'spam_reverting'         => "Buta andaré a l'ùltima version che a l'avèissa pa andrinta dj'anliure a $1",
'spam_blanking'          => "Pàgina dësveujdà, che tute le version a l'avìo andrinta dj'anliure a $1",

# Info page
'infosubtitle'   => 'Anformassion për la pàgina',
'numedits'       => 'Nùmer ëd modìfiche (artìcol): $1',
'numtalkedits'   => 'Nùmer ëd modìfiche (pàgina ëd discussion): $1',
'numwatchers'    => "Nùmer d'utent che as ten-o sossì sot euj: $1",
'numauthors'     => "Nùmer d'autor diferent (artìcol): $1",
'numtalkauthors' => "Nùmer d'autor distint (pàgina ëd discussion): $1",

# Math options
'mw_math_png'    => 'Most-lo sempe coma PNG',
'mw_math_simple' => "But-lo an HTML se a l'é motobin belfé a fesse, dësnò but-lo an PNG",
'mw_math_html'   => 'But-lo an HTML se as peul, dësnò an PNG',
'mw_math_source' => 'Lass-lo coma TeX (për ij programa ëd navigassion testual)',
'mw_math_modern' => 'As racomanda për ij programa ëd navigassion pì modern',
'mw_math_mathml' => 'But-lo an MathML se as peul (sperimental)',

# Patrolling
'markaspatrolleddiff'        => 'Marca coma verificà',
'markaspatrolledtext'        => "Marca st'artìcol-sì coma verificà",
'markedaspatrolled'          => 'Marca dla verìfica butà',
'markedaspatrolledtext'      => "La version selessionà a l'é staita marcà coma verificà.",
'rcpatroldisabled'           => "Verìfica dj'ùltime modìfiche disabilità",
'rcpatroldisabledtext'       => "La possibilità ëd verifichè j'ùltime modìfiche a l'é disabilità.",
'markedaspatrollederror'     => 'As peul pa marchè verificà',
'markedaspatrollederrortext' => 'A venta che a specìfica che version che a veul marchè verificà.',

# Image deletion
'deletedrevision' => 'Veja version scancelà $1.',

# Browsing diffs
'previousdiff' => '← Diferensa prima',
'nextdiff'     => 'Diferensa che a-i ven →',

# Media information
'mediawarning' => "'''Atension!''': st'archivi-sì a podrìa avej andrinta dël còdes butà-lì da cheidun për fé ëd darmagi, e se parej a fussa, ën fasend-lo travajé ansima a sò calcolador chiel a podrìa porteje ëd dann a sò sistema. 
<hr />",
'imagemaxsize' => 'Ten le figure andrinta a le pàgine ëd descrission dle figure ant ël lìmit ëd:',
'thumbsize'    => 'Amzura dle figurin-e:',

'newimages'    => 'Galerìa ëd figure e son neuv',
'showhidebots' => '($1 trigomiro)',
'noimages'     => 'Pa gnente da vëdde.',

'passwordtooshort' => "Soa ciav a l'é pa assé longa. A la dev avej almanch $1 caràter.",

# Metadata
'metadata'          => 'Dat adissionaj',
'metadata-help'     => "Costi-sì a son dij dat adissionaj, che a l'é belfé che a sio stait giontà da la màchina fotogràfica digital ò pura da lë scanner che a l'é stiat dovrà për creé la figura digital. Se la figura a fussa mai staita modificà da 'nt soa forma original, a podrìa ëdcò riveje che chèich detaj a fussa ancò butà coma ant l'original, donca sensa pa ten-e cont ëd le modìfiche.",
'metadata-expand'   => 'Most-me tùit ij dat',
'metadata-collapse' => 'Stërma ij dat adissionaj',

# EXIF tags
'exif-imagewidth'                  => 'Larghëssa',
'exif-imagelength'                 => 'Autëssa',
'exif-bitspersample'               => 'Bit për campion',
'exif-compression'                 => 'Schema ëd compression',
'exif-photometricinterpretation'   => 'Composission dij pixel',
'exif-orientation'                 => 'Orientament',
'exif-samplesperpixel'             => 'Nùmer ëd component',
'exif-planarconfiguration'         => 'Sistemassion dij dat',
'exif-ycbcrsubsampling'            => 'Rapòrt ëd campionament antra Y e C',
'exif-ycbcrpositioning'            => 'Posissionament Y e C',
'exif-xresolution'                 => 'Risolussion orizontal',
'exif-yresolution'                 => 'Risolussion vertical',
'exif-resolutionunit'              => "Unità d'amzura për le coordinà X e Y",
'exif-stripoffsets'                => 'Posission dij dat dla figura',
'exif-rowsperstrip'                => 'Nùmer ëd righe për banda',
'exif-stripbytecounts'             => 'Bytes për banda compressa',
'exif-jpeginterchangeformat'       => 'Diferensa posissional anvers al SOI dël JPEG',
'exif-jpeginterchangeformatlength' => 'Byte ëd dat an formà JPEG',
'exif-transferfunction'            => 'Funsion ëd trasferiment',
'exif-whitepoint'                  => 'Pont cromàtich dël bianch',
'exif-primarychromaticities'       => 'Coordinà cromàtiche dij color primari',
'exif-ycbcrcoefficients'           => 'Coeficent dla matriss ëd trasformassion dlë spassi color',
'exif-referenceblackwhite'         => "Pàira ëd valor d'arferiment për bianch e nèir",
'exif-datetime'                    => 'Data e ora dle modìfiche',
'exif-imagedescription'            => 'Tìtol dla figura',
'exif-make'                        => 'Fabricant dla màchina fotogràfica ò videocàmera',
'exif-model'                       => 'Model dla màchina',
'exif-software'                    => 'Programa dovrà',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => "Titolar dël drit d'autor",
'exif-exifversion'                 => 'Version dël formà Exif',
'exif-flashpixversion'             => 'A riva a la version Flashpix',
'exif-colorspace'                  => 'Spassi color',
'exif-componentsconfiguration'     => 'Sust ëd vira component',
'exif-compressedbitsperpixel'      => 'Sistema ëd compression dle figure',
'exif-pixelydimension'             => 'Larghëssa vàlida dla figura',
'exif-pixelxdimension'             => 'Autëssa vàlida dla figura',
'exif-makernote'                   => 'Nòte dël fabricant',
'exif-usercomment'                 => 'Nòte lìbere',
'exif-relatedsoundfile'            => 'Archivi audio colegà',
'exif-datetimeoriginal'            => 'Data e ora dla generassion dij dat',
'exif-datetimedigitized'           => 'Data e ora dla digitalisassion',
'exif-subsectime'                  => 'Data, ora e frassion ëd second',
'exif-subsectimeoriginal'          => 'Data e ora ëd creassion, con frassion ëd second',
'exif-subsectimedigitized'         => 'Data e ora ëd digitalisassion, con frassion ëd second',
'exif-exposuretime'                => "Temp d'esposission",
'exif-exposuretime-format'         => '$1 sec ($2)',
'exif-fnumber'                     => "Nùmer d'F",
'exif-exposureprogram'             => "Programa d'esposission",
'exif-spectralsensitivity'         => 'Sensibilità dë spetro',
'exif-isospeedratings'             => 'Sensibilità ISO',
'exif-oecf'                        => 'Fator ëd conversion optoeletrònica',
'exif-shutterspeedvalue'           => 'Temp dë scat',
'exif-aperturevalue'               => 'Diaframa',
'exif-brightnessvalue'             => 'Luminosità',
'exif-exposurebiasvalue'           => "Coression dl'esposission",
'exif-maxaperturevalue'            => 'Apertura màssima',
'exif-subjectdistance'             => 'Distansa dël soget',
'exif-meteringmode'                => "Càlcol dl'espossision",
'exif-lightsource'                 => "Sorgiss d'anluminassion",
'exif-flash'                       => 'Flash',
'exif-focallength'                 => 'Lunghëssa focal dle lent',
'exif-subjectarea'                 => "Spassi d'anquadratura dël soget",
'exif-flashenergy'                 => 'Potensa dël flash',
'exif-spatialfrequencyresponse'    => 'Arspòsta an frequensa spassial',
'exif-focalplanexresolution'       => 'Resolussion dla coordinà X ant sël pian dla focal',
'exif-focalplaneyresolution'       => 'Resolussion dla coordinà Y ant sël pian dla focal',
'exif-focalplaneresolutionunit'    => "Unità d'amzura për ël pian dla focal",
'exif-subjectlocation'             => 'Posission dël soget',
'exif-exposureindex'               => "Ìndes dl'esposission",
'exif-sensingmethod'               => 'Metod ëd campionament',
'exif-filesource'                  => "Sorgiss dl'archivi",
'exif-scenetype'                   => "Sòrt d'anquadratura",
'exif-cfapattern'                  => 'Schema CFA',
'exif-customrendered'              => 'Process dla figura particolar',
'exif-exposuremode'                => "Modalità dl'esposission",
'exif-whitebalance'                => 'Balansa dël bianch',
'exif-digitalzoomratio'            => 'Rapòrt ëd lë zoom digital',
'exif-focallengthin35mmfilm'       => 'Lunghëssa focal an film da 35 mm',
'exif-scenecapturetype'            => 'Sistema ëd campionament',
'exif-gaincontrol'                 => 'Contròl ëd sienari',
'exif-contrast'                    => 'Contrast',
'exif-saturation'                  => 'Saturassion',
'exif-sharpness'                   => 'Definission dij bòrd',
'exif-devicesettingdescription'    => "Nòm dla configurassion dl'aparechiatura",
'exif-subjectdistancerange'        => 'Ragg ëd distansa dël soget',
'exif-imageuniqueid'               => 'Identificator ùnich dla figura',
'exif-gpsversionid'                => 'Version dël GPS',
'exif-gpslatituderef'              => 'Latitùdin setentrional ò meridional',
'exif-gpslatitude'                 => 'Latitùdin',
'exif-gpslongituderef'             => 'Longitùdin oriental ò ossidental',
'exif-gpslongitude'                => 'Longitùdin',
'exif-gpsaltituderef'              => "Arferiment d'autëssa",
'exif-gpsaltitude'                 => 'Autëssa',
'exif-gpstimestamp'                => 'Ora dël GPS (mostra atòmica)',
'exif-gpssatellites'               => "Satélit dovrà për l'amzura",
'exif-gpsstatus'                   => 'Condission dël ricevitor',
'exif-gpsmeasuremode'              => "Sistema d'amzura",
'exif-gpsdop'                      => "Precision dl'amzura",
'exif-gpsspeedref'                 => "Unità d'amzura për la velocità",
'exif-gpsspeed'                    => 'Velocità dël ricevitor GPS',
'exif-gpstrackref'                 => 'Arferiment për la diression dël moviment',
'exif-gpstrack'                    => 'Diression dël moviment',
'exif-gpsimgdirectionref'          => 'Arferiment për la diression dla figura',
'exif-gpsimgdirection'             => 'Diression dla figura',
'exif-gpsmapdatum'                 => "Dat dl'amzura geodética che a son dovrà",
'exif-gpsdestlatituderef'          => 'Arferiment për la latitùdin dla destinassion',
'exif-gpsdestlatitude'             => 'Latitùdin dla destinassion',
'exif-gpsdestlongituderef'         => 'Arferiment për la longitùdin dla destinassion',
'exif-gpsdestlongitude'            => 'Longitùdin dla destinassion',
'exif-gpsdestbearingref'           => "Arferiment për l'orientament a destinassion",
'exif-gpsdestbearing'              => 'Orientament anvers a la destinassion',
'exif-gpsdestdistanceref'          => "Arferiment për la lontanansa da 'nt la destinassion",
'exif-gpsdestdistance'             => "Lontanansa da 'nt la destinassion",
'exif-gpsprocessingmethod'         => 'Nòm dël sistema ëd process an GPS',
'exif-gpsareainformation'          => 'Nòm dlë spassi GPS',
'exif-gpsdatestamp'                => 'Data dël GPS',
'exif-gpsdifferential'             => 'Coression diferensial dël GPS',

# EXIF attributes
'exif-compression-1' => 'Pa compress',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Specolar', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Arvirà ëd 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Arvirà dzorsuta', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Arvirà dzorsota e ëd 90° contramostra', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Arvirà ëd 90° ant ël sens dla mostra', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Arvirà dzorsota e ëd 90° ant ël sens dla mostra', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Arvirà ëd 90° contramostra', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'për blòch (chunky)',
'exif-planarconfiguration-2' => 'an planar',

'exif-xyresolution-i' => '$1 pont për pòles (dpi)',
'exif-xyresolution-c' => '$1 pont për centim (dpc)',

'exif-colorspace-ffff.h' => 'Nen calibrà',

'exif-componentsconfiguration-0' => 'a esist pa',

'exif-exposureprogram-0' => 'Nen definì',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Priorità ëd temp',
'exif-exposureprogram-4' => 'Priorità ëd diaframa',
'exif-exposureprogram-5' => "Programa creativ (coregiù për avej pì ëd profondità 'd camp)",
'exif-exposureprogram-6' => "Programa d'assion (coregiù për avej ël temp pì curt che as peul)",
'exif-exposureprogram-7' => 'Programa ritrat (për fotografìe pijaite da davsin, con lë sfond fòra feu)',
'exif-exposureprogram-8' => 'Panorama (sogèt lontan e con lë sfond a feu)',

'exif-subjectdistance-value' => '$1 méter',

'exif-meteringmode-0'   => 'as sa nen coma',
'exif-meteringmode-1'   => 'Media',
'exif-meteringmode-2'   => 'Media centrà',
'exif-meteringmode-3'   => 'Quadrèt (Spot)',
'exif-meteringmode-4'   => 'Vàire quadrèt (MultiSpot)',
'exif-meteringmode-5'   => 'Schema (Pattern)',
'exif-meteringmode-6'   => 'Parsial',
'exif-meteringmode-255' => "n'àutr",

'exif-lightsource-0'   => 'Nen marcà',
'exif-lightsource-1'   => 'Lus dël dì',
'exif-lightsource-2'   => 'Fluoressenta',
'exif-lightsource-3'   => 'Lus al tungsten (a incandessensa)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Temp bel',
'exif-lightsource-10'  => 'Temp an-nivolà',
'exif-lightsource-11'  => 'Ombra',
'exif-lightsource-12'  => 'Fluoressensa tipo lus dël dì (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluoressensa bianca për ël dì (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluoressensa bianca frèida (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluoressensa bianca (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Lus stàndard sòrt A',
'exif-lightsource-18'  => 'Lus stàndard sòrt B',
'exif-lightsource-19'  => 'Lus stàndard sòrt C',
'exif-lightsource-20'  => 'Anluminant D55',
'exif-lightsource-21'  => 'Anluminant D65',
'exif-lightsource-22'  => 'Anluminant D75',
'exif-lightsource-23'  => 'Anluminant D50',
'exif-lightsource-24'  => 'Làmpada da studio ISO al tungsten',
'exif-lightsource-255' => "Aùtra sorgiss d'anluminassion",

'exif-focalplaneresolutionunit-2' => 'pòles anglèis (inches)',

'exif-sensingmethod-1' => 'Nen definì',
'exif-sensingmethod-2' => 'Sensor dlë spassi color a 1 processor',
'exif-sensingmethod-3' => 'Sensor dlë spassi color a 2 processor',
'exif-sensingmethod-4' => 'Sensor dlë spassi color a 3 processor',
'exif-sensingmethod-5' => 'Sensor sequensial dlë spassi color',
'exif-sensingmethod-7' => 'Sensor trilinear',
'exif-sensingmethod-8' => 'Sensor linear ëd color sequensiaj',

'exif-scenetype-1' => 'Fotografìa an diret',

'exif-customrendered-0' => 'Process normal',
'exif-customrendered-1' => 'Process particular',

'exif-exposuremode-0' => 'Esposission automàtica',
'exif-exposuremode-1' => 'Esposission manual',
'exif-exposuremode-2' => 'Esposission automàtica (auto bracket)',

'exif-whitebalance-0' => "Balansa dël bianch n'automàtich",
'exif-whitebalance-1' => 'Balansa dël bianch an manual',

'exif-scenecapturetype-0' => 'Stàndard',
'exif-scenecapturetype-1' => 'Paisagi',
'exif-scenecapturetype-2' => 'Ritrat',
'exif-scenecapturetype-3' => 'La neuit',

'exif-gaincontrol-0' => 'Gnun',
'exif-gaincontrol-1' => 'Sparé ij contrast bass',
'exif-gaincontrol-2' => 'Sparé ij contrast fòrt',
'exif-gaincontrol-3' => 'Bassé ij contrast bass',
'exif-gaincontrol-4' => 'Bassé ij contrast fòrt',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'dosman',
'exif-contrast-2' => 'contrastà fòrt',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Saturassion bassa',
'exif-saturation-2' => 'Saturassion àuta',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'dossa',
'exif-sharpness-2' => 'contrastà',

'exif-subjectdistancerange-0' => 'Nen specificà',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Prim pian',
'exif-subjectdistancerange-3' => 'Anquadratura a soget lontan',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitùdin setentrional',
'exif-gpslatitude-s' => 'Latitùdin meridional',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitùdin oriental',
'exif-gpslongitude-w' => 'Longitùdin ossidental',

'exif-gpsstatus-a' => 'Amzura antramentr che as fa',
'exif-gpsstatus-v' => "Interoperabilità dl'amzura",

'exif-gpsmeasuremode-2' => 'amzura bidimensional',
'exif-gpsmeasuremode-3' => 'amzura tridimensional',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Km/h',
'exif-gpsspeed-m' => 'mija/h',
'exif-gpsspeed-n' => 'Grop (marin)',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Diression vèira',
'exif-gpsdirection-m' => 'Diression magnética',

# External editor support
'edit-externally'      => "Modifiché st'archivi con un programa estern",
'edit-externally-help' => "Che a varda [http://meta.wikimedia.org/wiki/Help:External_editors setup instructions] për avej pì d'anformassion.",

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'tute',
'imagelistall'     => 'tùit/tute',
'watchlistall1'    => 'tute',
'watchlistall2'    => 'tute',
'namespacesall'    => 'tùit',

# E-mail address confirmation
'confirmemail'            => "Confermé l'adrëssa postal",
'confirmemail_text'       => "Costa wiki a ciama che chiel a convalida n'adrëssa postal anans che
dovré lòn che toca la pòsta. Che a sgnaca ël boton ambelessì sota 
për fesse mandé un messa ëd conferma a soa adrëssa eletrònica.
Andrinta al messagi a-i sara n'anliura (URL) con andrinta un còdes.
Che a deurba st'anliura andrinta a sò programa ëd navigassion (browser)
për confermé che soa adrëssa a l'é pròpe cola.",
'confirmemail_send'       => 'Manda un còdes ëd conferma për pòsta eletrònica',
'confirmemail_sent'       => "Ël messagi ëd conferma a l'é stait mandà.",
'confirmemail_sendfailed' => "A l'é pa podusse mandé ël còdes ëd conferma. Che a controla l'adrëssa che a l'ha dane, mai che a-i fusso dij caràter nen vàlid.",
'confirmemail_invalid'    => 'Còdes ëd conferma nen vàlid. A podrìa ëdcò mach esse scadù.',
'confirmemail_needlogin'  => 'A venta che a fasa $1 për confermé soa addrëssa postal eletrònica.',
'confirmemail_success'    => "Soa adrëssa postal a l'é staita confermà, adess a peul rintré ant ël sistema e i-j auguroma da fessla bin ant la wiki!",
'confirmemail_loggedin'   => "Motobin mersì. Soa adrëssa ëd pòsta eletrònica adess a l'é confermà.",
'confirmemail_error'      => "Cheich-còs a l'é andà mal ën salvand soa conferma.",
'confirmemail_subject'    => "Conferma dl'adrëssa postal da 'nt la {{SITENAME}}",
'confirmemail_body'       => "Cheidun, a l'é belfé che a sia stait pròpe chiel (ò chila)
da 'nt l'adrëssa IP \$1, a l'ha doertà un cont utent \"\$2\" 
ansima a {{SITENAME}}, lassand-ne st'adrëssa ëd pòsta eletrònica-sì.

Për confermé che ës cont a l'é da bon sò e për ativé le possibilità
corelà a la pòsta eletrònica ansima a {{SITENAME}}, che a deurba 
st'adrëssa-sì andrinta a sò programa ëd navigassion (browser)

\$3

Se a fussa *nen* stait chiel a deurbe ël cont, anlora che a fasa gnente.
Cost còdes ëd conferma a l'é bon fin-a al \$4.",

# Inputbox extension, may be useful in other contexts as well
'tryexact'       => 'Sërca che a sia pròpe parej',
'searchfulltext' => 'Sërca an tut ël test',
'createarticle'  => "Crea n'artìcol",

# Scary transclusion
'scarytranscludedisabled' => "[L'inclusion ëd pàgine antra wiki diferente a l'é nen abilità]",
'scarytranscludefailed'   => "[Darmagi, ma lë stamp $1 a l'é pa podusse carié]",
'scarytranscludetoolong'  => '[Eror: anliura tròp longa]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks">
Anformassion për feje ël traciament a sta vos-sì:<br />
$1
</div>',
'trackbackremove'   => ' ([$1 Gava via])',
'trackbacklink'     => 'Traciament',
'trackbackdeleteok' => "J'anformassion për fé traciament a son staite gavà via.",

# Delete conflict
'deletedwhileediting' => "Avertensa: sta pàgina-sì a l'é staita scancelà quand che chiel (chila) a l'avìa già anandiasse a modifichela!",
'confirmrecreate'     => "L'utent [[User:$1|$1]] ([[User talk:$1|talk]]) a l'ha scancelà st'articol-sì quand che chiel (chila) a l'avia già anandiasse a modifichelo, dand coma motiv ëd la scancelament:
''$2''
Për piasì, che an conferma che da bon a veul torna creélo.",
'recreate'            => "Créa n'àutra vira",

# HTML dump
'redirectingto' => 'I soma antramentr che i foma na ridiression a [[$1]]...',

# action=purge
'confirm_purge'        => 'Veujdé la memorisassion dë sta pàgina-sì?

$1',
'confirm_purge_button' => 'Va bin',

'youhavenewmessagesmulti' => "A l'ha dij neuv messagi an $1",

'searchcontaining' => "Sërca le vos che a l'han andrinta ''$1''.",
'searchnamed'      => "Sërca le vos che a l'han për tìtol ''$1''.",
'articletitles'    => "Artìcoj che as anandio për ''$1''",
'hideresults'      => "Stërma j'arsultà",

# DISPLAYTITLE
'displaytitle' => "(J'anliure a sta pàgina-sì a van faite coma [[$1]])",

'loginlanguagelabel' => 'Lenga: $1',

# Auto-summaries
'autoredircomment' => 'Ridiression anvers a [[$1]]', # This should be changed to the new naming convention, but existed beforehand

);

?>
