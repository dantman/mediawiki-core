<?php
/** Javanese (Basa Jawa)
 *
 * @addtogroup Language
 *
 * @author Niklas Laxström
 * @author Helix84
 * @author Siebrand
 * @author לערי ריינהארט
 * @author Meursault2004
 * @copyright Copyright © 2006, Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$fallback = 'id';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Astamiwa',
	NS_MAIN             => '',
	NS_TALK             => 'Dhiskusi',
	NS_USER             => 'Panganggo',
	NS_USER_TALK        => 'Dhiskusi_Panganggo',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => 'Dhiskusi_$1',
	NS_IMAGE            => 'Gambar',
	NS_IMAGE_TALK       => 'Dhiskusi_Gambar',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Dhiskusi_MediaWiki',
	NS_TEMPLATE         => 'Cithakan',
	NS_TEMPLATE_TALK    => 'Dhiskusi_Cithakan',
	NS_HELP             => 'Pitulung',
	NS_HELP_TALK        => 'Dhiskusi_Pitulung',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Dhiskusi_Kategori'
);

$namespaceAliases = array(
	'Gambar_Dhiskusi' => NS_IMAGE_TALK,
	'MediaWiki_Dhiskusi' => NS_MEDIAWIKI_TALK,
	'Cithakan_Dhiskusi' => NS_TEMPLATE_TALK,
	'Pitulung_Dhiskusi' => NS_HELP_TALK,
	'Kategori_Dhiskusi' => NS_CATEGORY_TALK,
);

$messages = array(
# User preference toggles
'tog-rememberpassword' => 'Éling tembung sandhi ing saben sèsi',

'underline-always' => 'Tansah',

# Dates
'sunday'        => 'Minggu',
'monday'        => 'Senèn',
'tuesday'       => 'Slasa',
'wednesday'     => 'Rebo',
'thursday'      => 'Kemis',
'friday'        => 'Jemuwah',
'saturday'      => 'Setu',
'sun'           => 'Min',
'mon'           => 'Sen',
'tue'           => 'Sel',
'wed'           => 'Rab',
'thu'           => 'Kam',
'fri'           => 'Jum',
'sat'           => 'Sab',
'january'       => 'Januari',
'february'      => 'Februari',
'march'         => 'Maret',
'april'         => 'April',
'may_long'      => 'Mei',
'june'          => 'Juni',
'july'          => 'Juli',
'august'        => 'Agustus',
'september'     => 'September',
'october'       => 'Oktober',
'november'      => 'November',
'december'      => 'Desember',
'january-gen'   => 'Januari',
'february-gen'  => 'Februari',
'march-gen'     => 'Maret',
'april-gen'     => 'April',
'may-gen'       => 'Mei',
'june-gen'      => 'Juni',
'july-gen'      => 'Juli',
'august-gen'    => 'Agustus',
'september-gen' => 'September',
'october-gen'   => 'Oktober',
'november-gen'  => 'November',
'december-gen'  => 'Desember',
'jan'           => 'Jan',
'feb'           => 'Feb',
'mar'           => 'Mar',
'apr'           => 'Apr',
'may'           => 'Mei',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Agu',
'sep'           => 'Sep',
'oct'           => 'Okt',
'nov'           => 'Nov',
'dec'           => 'Des',

# Bits of text used by many pages
'categories'      => 'Kategori Kaca',
'category_header' => 'Artikel-artikel wonten ing kategori "$1"',
'category-empty'  => "''Kategori iki saiki ora ngandhut artikel utawa média.''",

'about'          => 'Prakawis',
'cancel'         => 'Batal',
'qbfind'         => 'Golèk',
'qbspecialpages' => 'Kaca-kaca Astamiwa',
'mypage'         => 'Panggonanku',
'mytalk'         => 'Gunemanku',
'anontalk'       => 'Dhiskusi IP puniki',
'navigation'     => 'Pandhu Arah',
'and'            => 'lan',

# Metadata in edit box
'metadata_help' => 'Metadata:',

'returnto'         => 'Wangsul dumugi $1.',
'tagline'          => 'Saka {{SITENAME}}',
'help'             => 'Pitulung',
'search'           => 'Golek',
'searchbutton'     => 'Golèk',
'go'               => 'Nuju menyang',
'searcharticle'    => 'Nuju menyang',
'history'          => 'Sejarah Kaca',
'history_short'    => 'Vèrsi lawas',
'printableversion' => 'Versi Cithak',
'print'            => 'Cithak',
'edit'             => 'Sunting',
'editthispage'     => 'Sunting kaca iki',
'delete'           => 'Busak',
'deletethispage'   => 'Busak kaca iki',
'undelete_short'   => 'Batal busak $1 {{PLURAL:$1|suntingan|suntingan}}',
'protect'          => 'Reksanen',
'unprotect'        => 'Apus reksa',
'newpage'          => 'Kaca Anyar',
'talkpage'         => 'Diskuseke kaca iki',
'specialpage'      => 'Kaca Astamiwa',
'articlepage'      => 'Mirsani isinipun kaca',
'talk'             => 'Dhiskusi',
'toolbox'          => 'kothak piranti',
'categorypage'     => 'Cobi pirsani kaca kategori',
'otherlanguages'   => 'Basa liya',
'redirectedfrom'   => '(Dipindhah saka $1)',
'lastmodifiedat'   => 'Kaca iki pungkasan diowahi nalika $2, $1.', # $1 date, $2 time
'viewcount'        => 'Kaca iki wis tau diaksès cacahé ping {{PLURAL:$1|siji|$1}}.',
'jumptonavigation' => 'pandhu arah',
'jumptosearch'     => 'golèk',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Prakawis {{SITENAME}}',
'aboutpage'         => 'Project:Prakawis',
'bugreports'        => 'Laporan kasalahan',
'copyright'         => 'Kabèh teks kasedyaaké ing ngisoré $1.',
'currentevents'     => 'Prastawa saiki',
'currentevents-url' => 'Project:Warta Wigati',
'disclaimers'       => 'Pamaidonan',
'edithelp'          => 'Pitulung panyuntingan',
'faq'               => 'FAQ (Pitakonan sing kerep diajokaké)',
'faqpage'           => 'Project:FAQ',
'mainpage'          => 'Kaca Utama',
'portal'            => 'Gapura komunitas',
'sitesupport'       => 'Nyumbang dana',

'badaccess'        => 'mBoten angsal',
'badaccess-group0' => 'Panjenengan mboten pareng nglakoaken tindhakan ingkang panjenengan gayuh.',
'badaccess-group1' => 'Pratingkah ingkang panjenengan suwun namung saged kangge pangguna kelompok $1.',
'badaccess-group2' => 'Pratingkah ingkang panjenengan suwun dipun-watesi kanggé pangguna ing kelompok $1.',
'badaccess-groups' => 'Pratingkah panjenengan dipun-watesi tumrap panganggé ing kelompokipun $1.',

'ok'                      => 'OK',
'retrievedfrom'           => 'Sumber artikel iki saka kaca situs web: "$1"',
'youhavenewmessages'      => 'Panjenengan gadhah $1 ($2).',
'newmessageslink'         => 'warta enggal',
'newmessagesdifflink'     => 'mirsani bédanipun saking revisi sadèrèngipun',
'youhavenewmessagesmulti' => 'Panjenengan angsal pesen-pesen ènggal $1',
'toc'                     => 'Bab lan Paragraf',
'hidetoc'                 => 'delikna',
'restorelink'             => '$1 {{PLURAL:$1|suntingan|suntingan}} sing wis kabusak',
'feed-unavailable'        => "Umpan sindikasi (''syndication feeds'') ora ana ing {{SITENAME}}",
'site-rss-feed'           => "$1 ''RSS Feed''",
'site-atom-feed'          => "$1 ''Atom Feed''",
'page-rss-feed'           => "\"\$1\" ''RSS Feed''",
'page-atom-feed'          => "\"\$1\" ''Atom Feed''",
'red-link-title'          => '$1 (durung digawé)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-user'      => 'Kaca panganggo',
'nstab-mediawiki' => 'Pariwara',

# General errors
'internalerror_info'   => 'Kaluputan internal: $1',
'filerenameerror'      => 'Mboten saged ngowahi saking "$1" dados "$2".',
'directorycreateerror' => 'Ora bisa nggawé dirèktori "$1".',
'fileexistserror'      => 'Ora bisa nulis berkas "$1": berkas wis ana',
'badarticleerror'      => 'Aksi punika mboten saged katindhaaken ing kaca punika.',
'cannotdelete'         => 'mBoten saged mbusak kaca utawi berkas ingkang dipunsuwun.',
'badtitle'             => 'Judhulipun mboten sah',
'badtitletext'         => 'Judhul kaca ingkang panjenengan suwun mboten saged kacakaken, kosong, utawi dados judhul antar-basa utawi judhul antar-wiki. Punika saged ugi wonten satunggal utawi luwih aksara ingkang mboten saged kadadosaken judhul.',
'viewsource'           => 'Tuduhna Sumber',
'actionthrottled'      => 'Tindakan diwatesi',
'actionthrottledtext'  => 'Minangka sawijining pepesthèn anti-spam, panjenengan diwatesi nglakoni tindhakan iki sing cacahé kakèhan ing wektu cendhak. 
Mangga dicoba manèh ing sawetara menit.',
'cascadeprotected'     => 'Kaca iki wis direksa saka panyuntingan amerga disertakaké ing {{PLURAL:$1|kaca|kaca-kaca}} ngisor iki sing wis direksa mawa opsi "runtun" diaktifaké:
$2',
'namespaceprotected'   => "Panjenengan ora kagungan idin kanggo nyunting kaca ing bilik nama '''$1'''.",
'customcssjsprotected' => 'Panjenengan ora kagungan idin kanggo nyunting kaca iki amerga ngandhut pangaturan pribadi panganggo liya.',
'ns-specialprotected'  => 'Kaca ing bilik nama astaméwa utawa kusus, ora bisa disunting.',
'titleprotected'       => "Irah-irahan iki direksa ora olèh digawé déning [[User:$1|$1]].
Alesané yaiku ''$2''.",

# Login and logout pages
'logouttitle'                => 'Metu log panganggo',
'logouttext'                 => "Panjenengan sampun medal (oncat) saking cathetan sistem. Panjenengan saged migunaaken {{SITENAME}} kanthi anonim, utawi panjenengan saged mlebet malih . Supados dipun mangertosi bilih wonten kaca ingkang taksih nganggpe panjenengan kacathet ing sistem amargi panjenengan dèrèng mbusak <em>cache</em> ''browser'' panjenengan.",
'loginpagetitle'             => 'Mlebu log panganggo',
'yourname'                   => 'Asma pangageman',
'yourpassword'               => 'tembung sandhi',
'remembermypassword'         => 'Éling tembung sandhi',
'loginproblem'               => '<strong>Ana masalah ing proses mlebu log panjenengan.</strong><br />Sumangga nyoba manèh!',
'login'                      => 'Mlebu',
'loginprompt'                => "Panjenengan kudu ngaktifaké ''cookies'' supaya bisa mlebu (log in) ing {{SITENAME}}.",
'userlogin'                  => 'Mlebu log / gawé rékening (akun)',
'logout'                     => 'Oncat',
'userlogout'                 => 'Metu log',
'nologin'                    => 'Durung kagungan asma panganggo? $1.',
'createaccount'              => 'Damel akun énggal',
'gotaccount'                 => 'Sampun gadhah akun? $1.',
'gotaccountlink'             => 'Mlebet',
'createaccountmail'          => 'liwat layang e-mail',
'badretype'                  => 'Sandhi panjenengan mboten gathuk',
'yourrealname'               => 'Asma sejatosipun *',
'yourlanguage'               => 'Basa ingkang kaginaaken:',
'yournick'                   => 'Asma sesinglon/samaran (kagem tapak asma):',
'badsig'                     => 'Tapak asmanipun klentu; cek tag HTML.',
'badsiglength'               => 'Jeneng sesingloné kedawan; kudu sangisoré $1 karakter.',
'loginerror'                 => 'Kesalahan mlebu log',
'prefs-help-email-required'  => 'Alamat e-mail dibutuhaké.',
'nocookiesnew'               => "Rékening utawa akun panganggo panjenengan wis digawé, nanging panjenengan durung mlebu log. {{SITENAME}} nggunakaké ''cookies'' kanggo  log panganggo. ''Cookies'' ing panjelajah web panjengengan dipatèni. Mangga diaktifaké lan mlebu log manèh mawa jeneng panganggo lan tembung sandhi panjenengan.",
'loginsuccesstitle'          => 'Bisa suksès mlebu log',
'loginsuccess'               => "'''Panjenengan sapunika mlebet ing {{SITENAME}} kanthi asma \"\$1\".'''",
'nosuchuser'                 => 'Mboten wonten panganggé mawi nami "$1". Cobi dipunpriksa malih éjaanipun, utawi mangga ngagem formulir ing andhap punika kanggé mbikak akun/rékening énggal.',
'passwordtooshort'           => 'Tembung sandi panjenengan ora sah utawa kecendhaken. Tembung sandi kudu katulis saka paling ora $1 aksara lan kudu béda saka jeneng panganggo panjenengan.',
'passwordsent'               => 'Tembung sandhi anyar wis dikirim menyang alamat e-mail panjenengan sing wis didaftar kanggo "$1". Mangga mlebu log manèh sawisé nampa e-mail iku.',
'acct_creation_throttle_hit' => 'Nuwun sèwu, panjenengan sampun damel akun $1. Panjenengan mboten saged damel malih.',
'accountcreated'             => 'Akun sampun kacipta.',
'accountcreatedtext'         => 'Akun kanggé $1 sampun kacipta.',
'createaccount-title'        => 'Gawé rékening kanggo {{SITENAME}}',
'createaccount-text'         => 'Ana wong sing nggawé sawijining akun utawa rékening kanggo alamat e-mail panjenengan ing {{SITENAME}} ($4) mawa jeneng "$2" lan tembung sandi "$3". Panjenengan disaranaké kanggo mlebu log lan ngganti tembung sandi panjenengan saiki.

Panjenengan bisa nglirwakaké pesen iki yèn akun utawa rékening iki digawé déné sawijining kaluputan.',
'loginlanguagelabel'         => 'Basa: $1',

# Edit page toolbar
'bold_sample' => 'Seratan puniki bakal dipun-cithak kandel',
'bold_tip'    => 'Cithak kandel',

# Edit pages
'summary'                   => 'Ringkesan',
'minoredit'                 => 'Suntingan sithik',
'watchthis'                 => 'Tonton artikel iki',
'savearticle'               => 'Simpen kaca',
'preview'                   => 'Pratilik',
'showpreview'               => 'Tuduhna dhisik',
'anoneditwarning'           => "'''Kedah dipun-gatèaken:''' Panjenengan mboten mlebet dados panganggé. Alamat internet (IP) panjenengan kacathet wonten ing sajarah kaca punika.",
'blockedtitle'              => 'Panganggem (anggota) punika dipun-blok.',
'blockedtext'               => "<big>'''Asma panganggo utawa alamat IP panjenengan diblokir.'''</big>

Blokir iki sing nglakoni $1. Alesané ''$2''.

* Diblokir wiwit: $8
* Kadaluwarsa pemblokiran ing: $6
* Sing arep diblokir: $7

Panjenengan bisa ngubungi $1 utawa [[{{MediaWiki:grouppage-sysop}}|pangurus liyané]] kanggo ngomongaké prakara iki.

Panjenengan ora bisa nggunakaké fitur 'Kirim layang e-mail panganggo iki' kejaba panjenengan wis nglebokaké alamat e-mail sing sah ing [[Special:Preferences|préferènsi]] panjenengan.

Alamat IP panjenengan iku $3, lan ID pamblokiran iku $5. Tulung salah siji saka rong informasi iki disertakaké ing saben pitakon panjenengan",
'autoblockedtext'           => 'Alamat IP panjenangan wis diblokir minangka otomatis amerga dienggo déning panganggo liyané. Pamblokiran dilakoni déning $1 mawa alesan:

:\'\'$2\'\'

* Diblokir wiwit: $8
* Blokir kadaluwarsa ing: $6

Panjenengan bisa ngubungi $1 utawa [[{{MediaWiki:Grouppage-sysop}}|pangurus liyané]] kanggo ngomongaké perkara iki.

Panjenengan ora bisa nganggo fitur "kirim e-mail panganggo iki" kejaba panjenengan wis nglebokaké alamat e-mail sing sah ing [[Special:Preferences|préferènsi]] panjenengan lan panjenengan wis diblokir kanggo nggunakaké.

ID pamblokiran panjenengan iku $5. Tulung sertakna ID iki saben ngajokaké pitakonan panjenengan. Matur nuwun.',
'blockednoreason'           => 'ora ana alesan sing diwènèhaké',
'blockedoriginalsource'     => "Isi sumber saking '''$1''' kapacak kados ing ngandhap punika:",
'blockededitsource'         => "Teks '''suntingan panjenengan''' ing '''$1''' kapacak kados ing ngandhap punika:",
'whitelistedittitle'        => 'Perlu mlebu log kanggo nyunting',
'whitelistreadtitle'        => 'Perlu mlebu log kanggo maca',
'loginreqlink'              => 'mlebu log',
'loginreqpagetext'          => 'Panjenengan kudu $1 bèn bisa ndeleng kaca liyané.',
'accmailtitle'              => 'Sandhinipun sampun kakirim',
'accmailtext'               => 'Sandhi kanggé "$1" sampun kakirim dugi $2.',
'newarticle'                => '(Anyar)',
'newarticletext'            => "Katonané panjenengan ngetutaké pranala artikel sing durung ana.
Manawa kersa manulis artikel iki, manggaa. (Mangga mirsani [[{{MediaWiki:Helppage}}|Pitulung]] kanggo informasi sabanjuré).
Yèn ora sengaja tekan kéné, bisa ngeklik pencètan '''back''' waé ing panjlajah wèb panjenengan.",
'userpage-userdoesnotexist' => 'Akun utawa rékening panganggo "$1" ora kadaftar.',
'previewnote'               => 'Mugi dipun gatekaken menawi punika namung pratilik kemawon, dereng dipun simpen!',
'session_fail_preview'      => '<strong>Nuwun sèwu, suntingan panjenengan ora bisa diolah amarga dhata sèsi kabusak. Coba kirim dhata manèh. Yèn tetep ora bisa, coba log metua lan mlebu log manèh.</strong>',
'session_fail_preview_html' => "<strong>Nuwun sèwu! Kita ora bisa prosès suntingan panjenengan amerga data sési ilang.</strong>

''Amerga wiki iki ngidinaké panrapan HTML mentah, pratayang didelikaké minangka penggakan marang serangan Javascript.''

<strong>Yèn iki sawijining upaya suntingan sing absah, mangga dicoba manèh. Yèn isih tetep ora kasil, cobanen metu log utawa oncat lan mlebua manèh.</strong>",
'token_suffix_mismatch'     => '<strong>Suntingan panjenengan ditulak amerga aplikasi klièn panjenengan ngowahi karakter tandha wewacan ing suntingan. Suntingan iku ditulak kanggo untuk menggak kaluputan ing tèks artikel. Prekara iki kadhangkala dumadi yèn panjenengan ngangem dines layanan proxy anonim adhedhasar situs wèb sing duwé masalah.</strong>',
'editing'                   => 'Nyunting $1',
'editconflict'              => 'Konflik sunting: $1',
'yourtext'                  => 'Seratan Panjenengan',
'yourdiff'                  => 'Bentenipun',
'copyrightwarning'          => 'Tulung dipun-gatosaken menawi sedaya kontribusi kanggé {{SITENAME}} punika dipunanggep dipunluncuraken miturut $2 GNU (mangga priksanen $1 kangge detailipun).
Menawi panjenengan mboten kersa menawi seratan panjenengan bakal dipunsunting kaliyan dipunsebar, sampun dipundèkèk ing ngriki.<br>
Panjenengan ugi janji menawi punapa-punapa ingkang kaserat ing ngriki, karyanipun panjenengan piyambak, utawi dipunsalin saking sumber bébas. <strong>SAMPUN NDEKEK KARYA INGKANG DIPUNREKSA DENING UNDANG-UNDANG HAK CIPTA TANPA IDIN!</strong>',
'longpagewarning'           => "'''PÈNGET: Kaca iki dawané $1 kilobita; sawetara panjlajah wèb mbokmenawa ngalami masalah kanggo nyunting kaca sing dawané 32 kb utawa luwih. Muga digalih dhisik mbokmenawa kaca iki bisa dipérang dadi pirang-pirang kaca sing luwih cilik.'''",
'protectedpagewarning'      => '<strong>PÈNGET:  Kaca puniki dipunkunci dados namung para pangurus kémawon ingkang saged nyunting puniki.</strong>',
'cascadeprotectedwarning'   => "<strong>PÈNGET: Kaca iki wis dikunci dadi namung panganggo mawa hak aksès pangurus waé sing bisa nyunting, amerga kalebu {{PLURAL:$1|kaca|kaca-kaca}} ing ngisor iki sing wis direksa mawa opsi 'pangreksan runtun' diaktifaké.</strong>",
'titleprotectedwarning'     => '<strong>PÈNGET: Kaca iki wis dikunci dadi namung sawetara panganggo waé sing bisa nggawé.</strong>',
'nocreatetext'              => 'Situs iki ngwatesi panjengan ndamel kaca anyar. Panjenengan bisa bali lan nyunting kaca sing wis ana, utawa mangga [[{{ns:special}}:Userlogin|mlebu log utawa ndaftar]]',
'nocreate-loggedin'         => 'Panjenengan ora kagungan idin kanggo nggawé kaca anyar ing wiki iki.',
'permissionserrors'         => 'Kaluputan Idin Aksès',
'permissionserrorstext'     => 'Panjengan ora kagungan idin kanggo nglakoni sing panjenengan gayuh amerga {{PLURAL:$1|alesan|alesan-alesan}} iki:',
'recreate-deleted-warn'     => "'''Pènget: Panjenengan nggawé manèh sawijining kaca sing wis tau dibusak.''',

Mangga digagas manèh apa suntingan panjenengan iki layak ora.
Ing ngisor iki kapacak log pambusakan saka kaca iki:",

# Account creation failure
'cantcreateaccount-text' => "Saka alamat IP iki ('''$1''') ora diparengaké nggawé akun utawa rékening. Sing mblokir utawa ora marengaké iku [[User:$3|$3]].

Alesané miturut $3 yaiku ''$2''",

# History pages
'deletedrev'  => '[kabusak]',
'histfirst'   => 'Paling lawas',
'historysize' => '($1 {{PLURAL:$1|bita|bita}})',

# History merging
'mergehistory'                     => 'Gabung sejarah kaca',
'mergehistory-box'                 => 'Gabungna revisi-revisi saka rong kaca:',
'mergehistory-from'                => 'Kaca sumber:',
'mergehistory-into'                => 'Kaca tujuan:',
'mergehistory-list'                => 'Sejarah suntingan bisa digabung',
'mergehistory-merge'               => 'Révisi-révisi sing kapacak ing ngisor iki saka [[:$1]] bisa digabungaké menyang [[:$2]].
Gunakna tombol radio kanggo nggabungaké révisi-révisi sing digawé sadurungé wektu tartamtu. Gatèkna, menawa nganggo pranala navigasi bakal ngesèt ulang kolom iki.',
'mergehistory-go'                  => 'Tuduhna suntingan-suntingan sing bisa digabung',
'mergehistory-submit'              => 'Gabung revisi',
'mergehistory-empty'               => 'Ora ana revisi sing bisa digabung.',
'mergehistory-success'             => '$3 {{PLURAL:$1|révisi|révisi}} saka [[:$1]] bisa suksès digabung menyang [[:$2]].',
'mergehistory-fail'                => 'Ora bisa nggabung sajarah, coba dipriksa manèh kacané lan paramèter wektuné.',
'mergehistory-no-source'           => 'Kaca sumber $1 ora ana.',
'mergehistory-no-destination'      => 'Kaca tujuan $1 ora ana.',
'mergehistory-invalid-source'      => 'Irah-irahan kaca sumber kudu irah-irahan utawa judhul sing bener.',
'mergehistory-invalid-destination' => 'Irah-irahan kaca tujuan kudu irah-irahan utawa judhul sing bener.',

# Merge log
'mergelog'           => 'Gabung log',
'pagemerge-logentry' => 'nggabungaké [[$1]] menyang [[$2]] (révisi nganti tekan $3)',
'revertmerge'        => 'Batalna panggabungan',
'mergelogpagetext'   => 'Ing ngisor iki kapacak daftar panggabungan sajarah kaca ing kaca liyané.',

# Diffs
'history-title'           => 'Sajarah revisi saka "$1"',
'difference'              => '(Bedané antarrevisi)',
'compareselectedversions' => 'Mbandhingaken versi ingkang kapilih',
'diff-multi'              => '({{PLURAL:$1|Sawiji|$1}} revisi antara sing ora dituduhaké.)',

# Search results
'searchresults'         => 'Pituwas pamadosan',
'searchresulttext'      => 'Kanggo informasi sabanjuré ngenani nggolèki apa-apa ing {{SITENAME}}, mangga mirsani [[{{MediaWiki:Helppage}}|kaca pitulung]].',
'searchsubtitle'        => "Panjengan madosi '''[[:$1]]'''",
'noexactmatch'          => "'''Ora ana kaca mawa irah-irahan utawa judhul \"\$1\".''' Panjenengan bisa [[:\$1|nggawé kaca iki]].",
'noexactmatch-nocreate' => "'''Ora ana kaca mawa irah-irahan utawa judhul \"\$1\".'''",
'toomanymatches'        => "Olèhé panjenengan golèk ngasilaké kakèhan pituwas, mangga nglebokaké ''query'' liyané",
'titlematches'          => 'Irah-irahan artikel sing cocog',
'notitlematches'        => 'Ora ana irah-irahan artikel sing cocog',
'textmatches'           => 'Tèks artikel sing cocog',
'notextmatches'         => 'Ora ana tèks kaca sing cocog',
'prevn'                 => '$1 sadurungé',
'nextn'                 => '$1 sabanjuré',
'viewprevnext'          => 'Deleng ($1) ($2) ($3)',
'showingresults'        => "Ing ngisor iki dituduhaké {{PLURAL:$1|'''1''' kasil|'''$1''' kasil}}, wiwitané saking #<strong>$2</strong>.",
'showingresultsnum'     => "Ing ngisor iki dituduhaké {{PLURAL:$3|'''1''' kasil|'''$3''' kasil}}, wiwitané saka #<strong>$2</strong>.",
'nonefound'             => "'''Cathetan''': Menawa olèhé nggolèk léma utawa èntri iku gagal, biasané prekara iki disebabaké amerga olèhé nggolèk tetembungan kerep nganggo tembung-tembung sing umum. Kayata ing basa Inggris tembung-tembung ''\"have\"'' lan ''\"from\"'' ora dilebokaké indèks, utawa nentokaké luwih saka kriterium panggolèkan. Namung kaca-kaca sing ngandhut kabèh kriteria panggolèkan bakal muncul ing pituwasé panggolèkan.",
'powersearch'           => 'Golek',
'powersearchtext'       => "Golèk ing bilik jeneng (''namespace''):<br />$1<br />$2 Uga tuduhna kaca pangalihan<br />Golèk $3 $9",
'searchdisabled'        => 'Sawetara wektu iki panjenengan ora bisa nggolèk mawa fungsi golèk {{SITENAME}}. Kanggo saiki mangga panjenengan bisa golèk nganggo Google. Nanging isi indèks Google kanggo {{SITENAME}} bisa waé lawas lan durung dianyari.',

# Preferences page
'preferences'             => 'Konfigurasi',
'mypreferences'           => 'Preferensiku',
'prefs-edits'             => 'Gunggungé suntingan:',
'prefsnologin'            => 'Durung mlebu log',
'prefsnologintext'        => 'Panjenengan kudu [[{{ns:special}}:Userlogin|mlebu log]] kanggo nyimpen préférèsi njenengan.',
'prefsreset'              => 'Préferènsi wis dibalèkaké menyang konfigurasi baku.',
'qbsettings-none'         => 'Ora ana',
'qbsettings-fixedleft'    => 'Tetep sisih kiwa',
'qbsettings-fixedright'   => 'Tetep sisih tengen',
'qbsettings-floatingleft' => 'Ngambang sisih kiwa',
'changepassword'          => 'Ganti tembung sandhi',
'math'                    => 'Matématika',
'math_unknown_error'      => 'Kaluputan sing ora dimangertèni',
'math_unknown_function'   => 'fungsi sing ora dimangertèni',
'math_lexing_error'       => "kaluputan ''lexing''",
'math_syntax_error'       => "''syntax error'' (kaluputan sintaksis)",
'math_image_error'        => 'Konversi PNG gagal; priksa apa latex, dvips, gs, lan convert wis diinstalasi sing bener',
'math_bad_tmpdir'         => 'Ora bisa nulis utawa nggawé dirèktori sauntara math',
'math_bad_output'         => 'Ora bisa nulis utawa nggawé dirèktori paweton math',
'math_notexvc'            => 'Executable texvc ilang;
mangga delengen math/README kanggo cara konfigurasi.',
'prefs-watchlist-days'    => 'Cacahé dina sing dituduhaké ing daftar pangawasan:',
'prefs-watchlist-edits'   => 'Cacahé suntingan maksimum sing dituduhaké ing daftar pangawasan sing luwih jangkep:',
'resetprefs'              => 'Resikana owah-owahan sing ora disimpen',
'searchresultshead'       => 'Pamadosan',
'stub-threshold'          => 'Ambang wates kanggo format <a href="#" class="stub">pranala rintisan</a>:',
'recentchangesdays'       => 'Cacahé dina sing dituduhaké ing owah-owahan pungkasan:',
'recentchangescount'      => 'Cacahé suntingan sing dituduhaké ing kaca owah-owahan pungkasan:',
'servertime'              => 'Wektu server saiki iku',
'guesstimezone'           => 'Isinen saka panjlajah wèb',
'allowemail'              => 'Marengaken panganggé sanèsipun ngirim layang èlèktronik (email).',
'defaultns'               => "Golèk ing bilik jeneng (''namespace'') iki mawa baku:",

# User rights
'userrights-lookup-user'           => 'Ngatur kelompok panganggo',
'userrights-user-editname'         => 'Lebokna jeneng panganggo:',
'editusergroup'                    => 'Sunting kelompok panganggo',
'userrights-editusergroup'         => 'Sunting kelompok panganggo',
'saveusergroups'                   => 'Simpen kelompok panganggo',
'userrights-groupsmember'          => 'Anggota saka:',
'userrights-groupsremovable'       => 'Grup sing bisa dijabel:',
'userrights-groupsavailable'       => 'Grup sing bisa diwènèhaké:',
'userrights-reason'                => 'Alesané ngowahi:',
'userrights-available-none'        => 'Panjenengan ora pareng ngowahi kaanggotan kelompok.',
'userrights-available-add-self'    => 'Panjenengan bisa nambah panjenengan dhéwé menyang {{PLURAL:$2|grup|grup-grup}}: $1.',
'userrights-available-remove-self' => 'Panjenengan bisa ngwetokaké panjenengan dhéwé saka {{PLURAL:$2|grup|grup-grup}}: $1.',
'userrights-no-interwiki'          => 'Panjenengan ora ana hak kanggo ngowahi hak panganggo ing wiki liyané.',
'userrights-nodatabase'            => 'Basis data $1 ora ana utawa ora lokal.',
'userrights-nologin'               => 'Panjenengan kudu [[Special:Userlogin|mlebu log]] mawa nganggo akun utawa rékening pangurus supaya bisa ngowahi hak panganggo.',
'userrights-notallowed'            => 'Panjenengan ora ndarbèni hak kanggo ngowahi hak panganggo.',

# Groups
'group-autoconfirmed' => 'Panganggo sing otomatis didhedhes (dikonfirmasi)',

'group-autoconfirmed-member' => 'Panganggo sing otomatis didhedhes (dikonfirmasi)',
'group-bot-member'           => 'Bot',

'grouppage-autoconfirmed' => '{{ns:project}}:Panganggo sing otomatis didhedhes (dikonfirmasi)',

# User rights log
'rightsnone' => '(mboten wonten)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|pangowahan|owah-owahan}}',
'recentchanges'                     => 'Owah-owahan',
'recentchangestext'                 => 'Runutna owah-owahan pungkasan ing wiki iki ing kaca iki.',
'recentchanges-feed-description'    => "Urutna owah-owahan anyar ing wiki ing ''feed'' iki.",
'rcnote'                            => 'Ing ngisor iki kapacak {{PLURAL:$1|pangowahan|owah-owahan}} pungkasan ing  <strong>$2</strong> dina pungkasan nganti $3.',
'rcnotefrom'                        => 'Ing ngisor iki owah-owahan wiwit <strong>$2</strong> (kapacak nganti <strong>$1</strong> owah-owahan).',
'rclistfrom'                        => 'Saiki nuduhaké owah-owahan wiwit tanggal $1',
'rcshowhideminor'                   => '$1 suntingan sithik',
'rcshowhidebots'                    => '$1 bot',
'rcshowhideliu'                     => '$1 panganggo mlebu log',
'rcshowhideanons'                   => '$1 panganggo anonim',
'rcshowhidepatr'                    => '$1 suntingan sing dipatroli',
'rcshowhidemine'                    => '$1 suntinganku',
'rclinks'                           => 'Tuduhna owah-owahan pungkasan $1 ing $2 dina pungkasan iki.<br />$3',
'diff'                              => 'béda',
'hist'                              => 'sajarah',
'hide'                              => 'Delikna',
'show'                              => 'Tuduhna',
'minoreditletter'                   => 's',
'newpageletter'                     => 'A',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|cacahé sing ngawasi|cacahé sing ngawasi}}]',
'rc_categories'                     => 'Watesana nganti kategori (dipisah karo "|")',
'newsectionsummary'                 => '/* $1 */ bagéyan anyar',

# Recent changes linked
'recentchangeslinked'          => 'Pranala Pilihan',
'recentchangeslinked-title'    => 'Owah-owahan sing ana gandhèngané karo "$1"',
'recentchangeslinked-noresult' => 'Ora ana owah-owahan ing kaca-kaca kagandhèng iki salawasé periode sing wis ditemtokaké.',

# Upload
'upload'                      => 'Unggah',
'reuploaddesc'                => 'Wangsul ing formulir pamotan',
'uploadnologin'               => 'Durung mlebu log',
'uploadnologintext'           => 'Panjenengan kudu [[{{ns:special}}:Userlogin|mlebu log]] supaya olèh ngunggahaké gambar utawa berkas liyané.',
'upload_directory_read_only'  => 'Dirèktori pangunggahan ($1) ora bisa ditulis déning server wèb.',
'uploaderror'                 => 'Kaluputan pangunggahan berkas',
'uploadtext'                  => "Enggonen formulir ing ngisor iki kanggo ngunggahaké berkas. Gunakna [[{{ns:special}}:Imagelist|daftar berkas]] utawa [[{{ns:special}}:Log/upload|log pangunggahan]] kanggo nuduhaké utawa nggolèk berkas utawa gambar sing wis diunggahaké sadurungé.

Kanggo nuduhaké utawa nyertakaké berkas utawa gambar ing sawijining kaca, gunakna pranala mawa format
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Berkas.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Berkas.png|tèks alternatif]]</nowiki>''' utawa
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Berkas.ogg]]</nowiki>''' kanggo langsung tumuju berkas sing dikarepaké.",
'upload-permitted'            => 'Jenis berkas sing diidinaké: $1.',
'upload-preferred'            => 'Jenis berkas sing disaranaké: $1.',
'upload-prohibited'           => 'Jenis berkas sing dilarang: $1.',
'uploadlog'                   => 'log pangunggahan',
'uploadlogpage'               => 'Log pangunggahan',
'uploadlogpagetext'           => 'Ing ngisor iki kapacak log pangunggahan berkas sing anyar dhéwé.',
'filedesc'                    => 'Ringkesan',
'uploadedfiles'               => 'Berkas sing wis diamot',
'ignorewarning'               => 'Lirwakna pèngetan lan langsung simpen berkas.',
'ignorewarnings'              => 'Lirwakna pèngetan apa waé',
'minlength1'                  => 'Jeneng berkas paling ora minimal kudu awujud saaksara.',
'illegalfilename'             => 'Jeneng berkas "$1" ngandhut aksara sing ora diparengaké ana sajroning irah-irahan kaca. Mangga owahana jeneng berkas iku lan cobanen  diunggahaké manèh.',
'badfilename'                 => 'Berkas sampun dipunowahi dados "$1".',
'filetype-badmime'            => 'Berkas mawa tipe MIME "$1" ora pareng diunggahaké.',
'filetype-unwanted-type'      => "'''\".\$1\"''' kalebu jenis berkas sing ora diidinaké. Jenis berkas sing disaranaké iku \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' kalebu jenis berkas sing ora diidinaké. Jenis berkas sing diidinaké yaiku \$2.",
'filetype-missing'            => 'Berkas ini ora duwé ekstènsi (contoné ".jpg").',
'large-file'                  => 'Ukuran berkas disaranaké supaya ora ngluwihi $1 bita; berkas iki ukurané $2 bita.',
'largefileserver'             => 'Berkas puniki langkung ageng tinimbang ingkang saged kaparengaken server.',
'emptyfile'                   => 'Berkas sing panjenengan unggahaké katoné kosong. Mbokmenawa iki amerga anané salah ketik ing jeneng berkas. Mangga dipastèkaké apa panjenengan pancèn kersa ngunggahaké berkas iki.',
'fileexists'                  => 'Sawijining berkas mawa jeneng iku wis ana, mangga dipriksa <strong><tt>$1</tt></strong> yèn panjenengan ora yakin sumedya ngowahiné.',
'fileexists-extension'        => 'Berkas mawa jeneng sing padha wis ana:<br />
Jeneng berkas sing bakal diunggahaké: <strong><tt>$1</tt></strong><br />
Jeneng berkas sing wis ana: <strong><tt>$2</tt></strong><br />
Mangga milih jeneng liya.',
'fileexists-thumb'            => "<center>'''Berkas sing wis ana'''</center>",
'fileexists-thumbnail-yes'    => 'Berkas iki katoné gambar mawa ukuran sing luwih cilik <em>(thumbnail)</em>. 
Tulung dipriksa berkas <strong><tt>$1</tt></strong>.<br />
Yèn berkas sing wis dipriksa iku padha, ora perlu panjenengan ngunggahaké vèrsi cilik liyané manèh.',
'file-thumbnail-no'           => 'Jeneng berkas diwiwiti mawa <strong><tt>$1</tt></strong>. Katoné berkas iki sawijining gambar mawa ukuran sing luwih cilik <em>(thumbnail)</em>.
Yèn panjenengan kagungan vèrsi mawa résolusi kebak saka gambar iki, mangga vèrsi iku diunggahaké. Yèn ora, tulung jeneng berkas iki diganti.',
'fileexists-forbidden'        => 'Berkas mawa jeneng sing padha wis ana; 
tulung berkasé diunggahaké manèh mawa jeneng liya. [[{{ns:image}}:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Wis ana berkas liyané mawa jeneng sing padha ing papan gudhang berkas bebarengan; mangga berkas diunggahaké ulang mawa jeneng liya. [[{{ns:image}}:$1|thumb|center|$1]]',
'successfulupload'            => 'Kasil diamot',
'uploadwarning'               => 'Pèngetan pangunggahan berkas',
'savefile'                    => 'Simpen berkas',
'uploadedimage'               => 'gambar "[[$1]]" kaminggahaken',
'overwroteimage'              => 'ngunggahaké vèrsi anyar saka "[[$1]]"',
'uploaddisabled'              => 'Nuwun sèwu, fasilitas pangunggahan dipatèni.',
'uploaddisabledtext'          => 'Pangunggahan berkas ora diidinaké ing {{SITENAME}}.',
'uploadscripted'              => 'Berkas iki ngandhut HTML utawa kode sing bisa diinterpretasi salah déning panjlajah wèb.',
'uploadcorrupt'               => 'Berkasé rusak utawa èkstènsiné salah. Mangga dipriksa dhisik berkas iki lan diunggahaké manèh.',
'destfilename'                => 'Asma berkas ingkang dipun tuju',
'filewasdeleted'              => 'Sawijining berkas mawa jeneng iki wis tau diunggahaké lan sawisé dibusak. 
Mangga priksanen $1 sadurungé ngunggahaké berkas iku manèh.',
'upload-wasdeleted'           => "'''PÈNGET: Panjenengan ngunggahaké sawijining berkas sing wis tau dibusak.'''

Panjenengan kudu nggalih perlu utawa ora mbanjuraké pangunggahan berkas ini.
Log pambusakan berkas iki kaya mangkéné:",
'filename-bad-prefix'         => 'Jeneng berkas sing panjenengan unggahaké, diawali mawa <strong>"$1"</strong>, sing sawijining jeneng non-dèskriptif sing biasané diwènèhaké sacara otomatis déning kamera digital. Mangga milih jeneng liyané sing luwih dèskriptif kanggo berkas panjenengan.',

'upload-proto-error'      => 'Protokol ora bener',
'upload-proto-error-text' => 'Pangunggahan jarah adoh mbutuhaké URL sing diawali karo <code>http://</code> utawa <code>ftp://</code>.',
'upload-file-error'       => 'Kaluputan internal',
'upload-file-error-text'  => "Ana sawijining kaluputan internal nalika nyoba ngunggahaké berkas sauntara (''temporary file'') ing server. Mangga kontak pangurus sistém iki.",
'upload-misc-error'       => 'Kaluputan pamunggahan sing ora dimangertèni',
'upload-misc-error-text'  => 'Ana sawijining kaluputan sing ora ditepungi dumadi nalika pangunggahan. Mangga dipastèkaké yèn URL kasebut iku absah lan bisa diaksès. Sawisé iku cobanen manèh. Yèn masalah iki isih ana, mangga kontak pangurus sistém.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL-é ora bisa dihubungi',
'upload-curl-error6-text'  => 'URL sing diwènèhaké ora bisa dihubungi. 
Mangga dipriksa manèh yèn URL iku pancèn bener lan situs iki lagi aktif.',
'upload-curl-error28'      => 'Pangunggahan ngliwati wektu',
'upload-curl-error28-text' => 'Situsé kesuwèn sadurungé réaksi.
Mangga dipriksa menawa situsé aktif, nunggu sedélok lan coba manèh.
Mbok-menawa panjenengan bisa nyoba manèh ing wektu sing luwih longgar.',

'license'            => 'Jenis lisènsi:',
'nolicense'          => 'Durung ana sing dipilih',
'license-nopreview'  => '(Pratayang ora sumedya)',
'upload_source_url'  => ' (sawijining URL absah sing bisa diaksès publik)',
'upload_source_file' => ' (sawijining berkas ing komputeré panjenengan)',

# Image list
'imagelist-summary'         => 'Kaca astaméwa utawa kusus iki nuduhaké kabèh berkas sing wis diunggahaké.
Sacara baku, berkas pungkasan sing diunggahaké dituduhaké ing urutan dhuwur dhéwé.
Klik sirahé kolom kanggo ngowahi urutan.',
'imagelisttext'             => "Ing ngisor iki kapacak daftar '''$1''' {{PLURAL:$1|berkas|berkas}} sing diurutaké $2.",
'ilsubmit'                  => 'Golek',
'byname'                    => 'miturut jeneng',
'bydate'                    => 'miturut tanggal',
'bysize'                    => 'miturut ukuran',
'filehist'                  => 'Sajarah berkas',
'filehist-help'             => 'Klik ing tanggal/wektu kanggo deleng berkas iki ing wektu iku.',
'filehist-deleteall'        => 'busaken kabèh',
'filehist-deleteone'        => 'busaken iki',
'filehist-revert'           => 'balèkna',
'filehist-current'          => 'saiki iki',
'filehist-datetime'         => 'Tanggal/Wektu',
'filehist-user'             => 'Panganggo',
'filehist-dimensions'       => 'Ukuran',
'filehist-filesize'         => 'Gedhené berkas',
'filehist-comment'          => 'Komentar',
'imagelinks'                => 'Pranala',
'linkstoimage'              => 'Kaca-kaca sing kapacak iki duwé pranala menyang berkas iki:',
'nolinkstoimage'            => 'Ora ana kaca sing nyambung menyang berkas iki.',
'sharedupload'              => 'Berkas iki sawijining pangunggahan bebarengan sing uga bisa dienggo déning proyèk-proyèk liyané.',
'shareduploadwiki'          => 'Mangga mirsani $1 kanggo informasi sabanjuré.',
'shareduploadwiki-desc'     => 'Dèskripsi ing $1 dituduhaké ing ngisor iki.',
'shareduploadwiki-linktext' => 'kaca dèskripsi berkas',
'noimage'                   => 'Ora ana berkas mawa jeneng iku, panjenengan bisa $1.',
'noimage-linktext'          => 'ngunggah gambar',
'uploadnewversion-linktext' => 'Unggahna vèrsi sing luwih anyar tinimbang gambar iki',
'imagelist_search_for'      => 'Golèk jeneng berkas:',

# File reversion
'filerevert'                => 'Balèkna $1',
'filerevert-legend'         => 'Balèkna berkas',
'filerevert-intro'          => '<span class="plainlinks">Panjenengan mbalèkaké \'\'\'[[Media:$1|$1]]\'\'\' menyang [vèrsi $4 ing $3, $2].</span>',
'filerevert-comment'        => 'Komentar:',
'filerevert-defaultcomment' => 'Dibalèkaké menyang vèrsi ing $2, $1',
'filerevert-submit'         => 'Balèkna',
'filerevert-success'        => '<span class="plainlinks">\'\'\'[[Media:$1|$1]]\'\'\' wis dibalèkaké menyang [vèrsi $4 ing $3, $2].</span>',
'filerevert-badversion'     => 'Ora ana vèrsi lokal sadurungé saka berkas iki mawa stèmpel wektu sing dikarepaké.',

# File deletion
'filedelete'                  => 'Mbusak $1',
'filedelete-legend'           => 'Mbusak berkas',
'filedelete-intro'            => "Panjenengan mbusak '''[[Media:$1|$1]]'''.",
'filedelete-intro-old'        => '<span class="plainlinks">Panjenengan mbusak vèrsi \'\'\'[[Media:$1|$1]]\'\'\' per [$4 $3, $2].</span>',
'filedelete-comment'          => 'Komentar:',
'filedelete-submit'           => 'Busak',
'filedelete-success'          => "'''$1''' wis dibusak.",
'filedelete-success-old'      => '<span class="plainlinks">Vèrsi \'\'\'[[Media:$1|$1]]\'\'\' ing $3, $2 wis dibusak.</span>',
'filedelete-nofile'           => "'''$1''' ora ana ing {{SITENAME}}.",
'filedelete-nofile-old'       => "Ora ditemokaké arsip vèrsi saka '''$1''' mawa atribut sing diwènèhaké.",
'filedelete-iscurrent'        => 'Panjenengan nyoba mbusak vèrsi pungkasan berkas iki.
Mangga bali ing vèrsi sing luwih lawas dhisik.',
'filedelete-otherreason'      => 'Alesan tambahan/liya:',
'filedelete-reason-otherlist' => 'Alesan liya',
'filedelete-reason-dropdown'  => '*Alesan pambusakan
** Nglanggar hak cipta
** Berkas duplikat',

# MIME search
'mimesearch'         => 'Panggolèkan MIME',
'mimesearch-summary' => 'Kaca iki nyedyaké fasilitas nyaring berkas miturut tipe MIME-né. Lebokna: contenttype/subtype, contoné <tt>image/jpeg</tt>.',
'mimetype'           => 'Tipe MIME:',
'download'           => 'undhuh',

# Unwatched pages
'unwatchedpages' => 'Kaca-kaca sing ora diawasi',

# Unused templates
'unusedtemplates'     => 'Cithakan sing ora dienggo',
'unusedtemplatestext' => 'Daftar iki ngandhut kaca-kaca ing bilik nama cithakan sing ora dienggo ing kaca ngendi waé. Priksanen dhisik pranala-pranala menyang cithakan iki sadurungé mbusak.',
'unusedtemplateswlh'  => 'pranala liya-liyané',

# Random page
'randompage'         => 'Sembarang kaca',
'randompage-nopages' => 'Ora ana kaca ing bilik jeneng iki.',

# Random redirect
'randomredirect'         => 'Pangalihan sembarang',
'randomredirect-nopages' => 'Ing bilik nama iki ora ana pangalihan.',

# Statistics
'userstats'              => 'Statistik panganggé',
'sitestatstext'          => "{{SITENAME}} saiki iki duwèni '''\$2''' {{PLURAL:\$1|kaca|kaca}} artikel sing absah. 

Saliyané iku saiki gunggungé ana {{PLURAL:\$1|kaca|kaca}} ''database''. Ing iku kalebu kaca-kaca dhiskusi, prakara {{SITENAME}}, artikel \"stub\" (rintisan), kaca pangalihan (''redirect''), karo kaca-kaca sing dudu kaca isi.

Banjur wis ana '''\$8''' berkas sing diunggahaké.

Wis tau ana '''\$3''' kaca dituduhaké karo '''\$4''' kaca tau disunting sawisé wiki iki diadegaké.

Dadi tegesé rata-rata ana '''\$5''' suntingan per kaca karo '''\$6''' tayangan per suntingan.

Dawané [http://meta.wikimedia.org/wiki/Help:Job_queue antrian tugas] ana '''\$7'''.",
'userstatstext'          => "Ana '''$1''' [[Special:Listusers|{{PLURAL:$1|panganggo|panganggo}}]] sing wis ndaftar. '''$2''' (utawa '''$4%''') antarané iku {{PLURAL:$2|duwé|duwé}} hak aksès $5.",
'statistics-mostpopular' => 'Kaca sing paling akèh dituduhaké',

'disambiguations'      => 'Kaca disambiguasi',
'disambiguationspage'  => 'Template:Disambig',
'disambiguations-text' => "Kaca-kaca iki ndarbèni pranala menyang sawijining ''kaca disambiguasi''. Kaca-kaca iku sajatiné kuduné nyambung menyang topik-topik sing bener.<br />Sawijining kaca dianggep minangka kaca disambiguasi yèn kaca iku nganggo cithakan sing nyambung menyang [[MediaWiki:disambiguationspage]].",

'doubleredirects'     => 'Pangalihan dobel',
'doubleredirectstext' => 'Kaca iki ngandhut daftar kaca sing ngalih ing kaca pangalihan liyané. Saben baris ngandhut pranala menyang pangalihan kapisan lan pangalihan kapindho serta tujuan saka pangalihan kapindho sing biasané kaca tujuan sing "sajatiné". Kaca pangalihan kapisan samesthiné kudu dialihaké menyang kaca tujuan iku.',

'brokenredirects'     => 'Pengalihanipun risak',
'brokenredirectstext' => 'Pengalihanipun kaca punika mboten kepanggih sambunganipun.',

'withoutinterwiki-submit' => 'Tuduhna',

'fewestrevisions' => 'Artikel mawa owah-owahan sithik dhéwé',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|bita|bita}}',
'ncategories'             => '$1 {{PLURAL:$1|kategori|kategori}}',
'nlinks'                  => '$1 {{PLURAL:$1|pranala|pranala}}',
'nmembers'                => '$1 {{PLURAL:$1|anggota|anggota}}',
'nrevisions'              => '$1 {{PLURAL:$1|revisi|revisi}}',
'nviews'                  => 'Wis kaping $1 {{PLURAL:$1|dituduhaké|dituduhaké}}',
'specialpage-empty'       => 'Ora ana sing perlu dilaporaké.',
'lonelypages'             => 'Kaca tanpa dijagani',
'lonelypagestext'         => 'Kaca-kaca sing kapacak ing ngisor iki ora ana sing nyambung saka kaca liyané siji-sijia ing {{SITENAME}}.',
'uncategorizedpages'      => 'Kaca sing ora dikategorisasi',
'uncategorizedcategories' => 'Kategori sing ora dikategorisasi',
'uncategorizedimages'     => 'Berkas sing ora dikategorisasi',
'uncategorizedtemplates'  => 'Cithakan sing ora dikategorisasi',
'unusedcategories'        => 'Kategori sing ora dienggo',
'unusedimages'            => 'Berkas sing ora dienggo',
'popularpages'            => 'Kaca populèr',
'wantedcategories'        => 'Kategori sing diperlokaké',
'wantedpages'             => 'Kaca sing dipèngini',
'mostlinked'              => 'Kaca sing kerep dhéwé dituju',
'mostlinkedcategories'    => 'Kategori sing kerep dhéwé dienggo',
'mostlinkedtemplates'     => 'Cithakan sing kerep dhéwé dienggo',
'mostcategories'          => 'Kaca sing kategoriné akèh dhéwé',
'mostimages'              => 'Berkas sing kerep dhéwé dienggo',
'mostrevisions'           => 'Kaca mawa pangowahan sing akèh dhéwé',
'allpages'                => 'Kabèh kaca',
'prefixindex'             => 'Indeks awalan',
'shortpages'              => 'Kaca cendhak',
'longpages'               => 'Kaca dawa',
'deadendpages'            => 'Kaca-kaca buntu (tanpa pranala)',
'deadendpagestext'        => 'kaca-kaca punika mboten gadhah pranala dumugi pundi mawon wonten ing wiki puniki..',
'protectedpages'          => 'Kaca sing direksa',
'protectedpagestext'      => 'Kaca-kaca sing kapacak iki direksa déning pangalihan utawa panyuntingan.',
'protectedpagesempty'     => 'Saat ini tidak ada halaman yang sedang dilindungi.',
'protectedtitles'         => 'Irah-irahan sing direksa',
'protectedtitlestext'     => 'Irah-irahan sing kapacak ing ngisor iki direksa lan ora bisa digawé',
'protectedtitlesempty'    => 'Ora ana irah-irahan utawa judhul sing direksa karo paramèter-paramèter iki.',
'listusers'               => 'Daftar panganggo',
'specialpages'            => 'Kaca-kaca astamiwa',
'newpages'                => 'Kaca énggal',
'newpages-username'       => 'Asma panganggo:',
'ancientpages'            => 'Kaca-kaca langkung sepuh',
'move'                    => 'Pindhahen',
'movethispage'            => 'Pindhahna kaca iki',
'unusedimagestext'        => '<p>Gatèkna yèn situs wèb liyané mbok-menawa bisa nyambung ing sawijining berkas sacara langsung, lan berkas-berkas kaya mengkéné iku mbok-menawa ana ing daftar iki senadyan isih dienggo déning situs wèb liya.',
'unusedcategoriestext'    => 'Kategori iki ana senadyan ora ana artikel utawa kategori liyané sing nganggo.',
'pager-newer-n'           => '{{PLURAL:$1|1 luwih anyar|$1 luwih anyar}}',
'pager-older-n'           => '{{PLURAL:$1|1 luwih lawas|$1 luwih lawas}}',

# Book sources
'booksources'               => 'Sumber buku',
'booksources-search-legend' => 'Golèk ing sumber buku',
'booksources-go'            => 'Golèk',
'booksources-text'          => 'Ing ngisor iki kapacak daftar pranala menyang situs liyané sing ngadol buku anyar lan bekas, lan mbok-menawa uga ndarbèni informasi sabanjuré ngenani buku-buku sing lagi panjenengan golèki:',

'categoriespagetext' => 'Kategori-kategori punika wonten ing wiki.',
'userrights'         => 'Manajemen hak panganggo',
'alphaindexline'     => '$1 tumuju $2',
'version'            => 'Versi',

# Special:Log
'specialloguserlabel'  => 'Panganggo:',
'speciallogtitlelabel' => 'Irah-irahan (judhul):',
'log'                  => 'Log',
'all-logs-page'        => 'Kabèh log',
'log-search-legend'    => 'Golèk log',
'log-search-submit'    => 'Golèk',
'alllogstext'          => 'Ing ngisor iki kapacak gabungan log impor, pamblokiran, pamindhahan, pangunggahan, pambusakan, pangreksan, pangowahan hak aksès, lan liya-liyané ing {{SITENAME}}. 
Panjenengan bisa ngwatesi panuduhan mawa milih jenis log, jeneng panganggo, utawa irah-irahan kaca sing dipengaruhi.',
'logempty'             => 'Ora ditemokaké èntri log sing pas.',
'log-title-wildcard'   => 'Golèk irah-irahan utawa judhul sing diawali mawa tèks kasebut',

# Special:Allpages
'nextpage'          => 'Kaca sabanjuré ($1)',
'prevpage'          => 'Kaca sadurungé ($1)',
'allpagesfrom'      => 'Kaca-kaca kawiwitan kanthi:',
'allarticles'       => 'Kabèh artikel',
'allinnamespace'    => 'Kabeh kaca ($1 namespace)',
'allnotinnamespace' => 'Sedaya kaca (mboten panggènan asma $1)',
'allpagesprev'      => 'Sadèrèngipun',
'allpagesnext'      => 'Salajengipun',
'allpagessubmit'    => 'Madosi',
'allpagesprefix'    => 'Kapacak kaca-kaca ingkang mawi ater-ater:',
'allpagesbadtitle'  => 'Irah-irahan (judhul) ingkang dipun-gunaaken boten sah utawi nganggé ater-ater (awalan) antar-basa utawi antar-wiki. Irah-irahan punika saged ugi nganggé setunggal aksara utawi luwih ingkang boten saged kagunaaken dados irah-irahan.',
'allpages-bad-ns'   => '{{SITENAME}} ora duwé bilik nama "$1".',

# Special:Listusers
'listusersfrom'      => 'Tuduhna panganggo sing diawali karo:',
'listusers-submit'   => 'Tuduhna',
'listusers-noresult' => 'Panganggo ora ditemokaké.',

# E-mail user
'mailnologin'     => 'Ora ana alamat layang e-mail',
'mailnologintext' => 'Panjenengan kudu [[{{ns:special}}:Userlogin|mlebu log]] lan kagungan alamat e-mail sing sah ing [[{{ns:special}}:Preferences|preféèrensi]] yèn kersa ngirim layang e-mail kanggo panganggo liya.',
'emailuser'       => 'Kirim e-mail panganggo iki',
'emailpage'       => 'Kirimi panganggo iki layang e-mail',
'emailpagetext'   => 'Yèn panganggo iki nglebokaké alamat layang e-mailé sing absah sajroning préferènsiné, formulir ing ngisor iki bakal ngirimaké sawijining layang e-mail. Alamat e-mail sing ana ing préferènsi panjenengan bakal metu minangka alamat "Saka" ing layang e-mail iku, dadi sing nampa bisa mbales layang e-mail panjenengan.',
'usermailererror' => 'Kaluputan obyèk layang:',
'defemailsubject' => 'Layang e-mail {{SITENAME}}',
'noemailtitle'    => 'Ora ana alamat layang e-mail',
'noemailtext'     => 'Panganggo iki ora nglebokaké alamat layang e-mail sing absah, utawa milih ora gelem nampa layang e-mail saka panganggo liyané.',
'emailfrom'       => 'Saka',
'emailto'         => 'Kanggo',
'emailsubject'    => 'Prekara',
'emailmessage'    => 'Pesen',
'emailsend'       => 'Kirim',
'emailccme'       => 'Kirimana aku salinan pesenku.',
'emailccsubject'  => 'Salinan pesen panjenengan kanggo $1: $2',
'emailsent'       => 'Layang e-mail wis dikirim',
'emailsenttext'   => 'Layang e-mail panjenengan wis dikirim.',

# Watchlist
'watchlist'            => 'Daftar artikel pilihan',
'mywatchlist'          => 'Daftar pangawasanku',
'watchlistfor'         => "(kanggo '''$1''')",
'nowatchlist'          => 'Daftar pangawasan panjenengan kosong.',
'watchlistanontext'    => 'Mangga $1 kanggo mirsani utawa nyunting daftar pangawasan panjenengan.',
'watchnologin'         => 'Durung mlebu log',
'watchnologintext'     => 'Panjenengan kudu [[{{ns:special}}:Userlogin|mlebu log]] kanggo ngowahi daftar artikel pilihan.',
'addedwatch'           => 'Sampun katambahaken wonten ing daftar artikel pilihan.',
'addedwatchtext'       => "Kaca \"[[:\$1]]\" wis ditambahaké menyang [[{{ns:special}}:Watchlist|daftar pangawasan]]. Owah-owahan sing dumadi ing tembé ing kaca iku lan kaca dhiskusi sing kagandhèng, bakal dipacak ing kéné, lan kaca iku bakal dituduhaké '''kandel''' ing [[{{ns:special}}:Recentchanges|daftar owah-owahan iku]] supados luwih gampang katon.<br /><br />Yèn panjenengan kersa mbusak kaca iki saka daftar pangawasan, mangga klik \"Mandeg ngawasi\" ing ménu.",
'removedwatch'         => 'Wis dibusak saka daftar pangawasan',
'removedwatchtext'     => 'Kaca "<nowiki>$1</nowiki>" wis dibusak saka daftar pangawasan.',
'watch'                => 'tutana',
'watchthispage'        => 'Periksa kaca iki',
'unwatch'              => 'Ora usah ngawasaké manèh',
'unwatchthispage'      => 'Batalna olèhé ngawasi kaca iki',
'notanarticle'         => 'Dudu kaca artikel',
'watchnochange'        => 'Ora ana kaca ing daftar pangawasan panjenengan sing diowahi ing mangsa wektu sing dipilih.',
'watchlist-details'    => 'Ngawasaké {{PLURAL:$1|$1 kaca|$1 kaca}}, ora kalebu kaca-kaca dhiskusi.',
'wlheader-enotif'      => '* Notifikasi e-mail diaktifaké.',
'wlheader-showupdated' => "* Kaca-kaca sing wis owah wiwit ditiliki panjenengan kaping pungkasan, dituduhaké mawa '''aksara kandel'''",
'watchmethod-recent'   => 'priksa daftar owah-owahan anyar kanggo kaca sing diawasi',
'watchmethod-list'     => 'priksa kaca sing diawasi kanggo owah-owahan anyar',
'watchlistcontains'    => 'Daftar pangawasan panjenengan isiné ana $1 {{PLURAL:$1|kaca|kaca}}.',
'iteminvalidname'      => "Ana masalah karo '$1', jenengé ora absah...",
'wlnote'               => "Ing ngisor iki kapacak $1 {{PLURAL:$1|owah-owahan|owah-owahan}} pungkasan ing '''$2''' jam kapungkur.",
'wlshowlast'           => 'Tuduhna $1 jam $2 dina $3 pungkasan',
'watchlist-show-bots'  => 'Tuduhna suntingan bot',
'watchlist-hide-bots'  => 'Delikna suntingan bot',
'watchlist-show-own'   => 'Tuduhna suntinganku',
'watchlist-hide-own'   => 'Delikna suntinganku',
'watchlist-show-minor' => 'Tuduhna suntingan cilik',
'watchlist-hide-minor' => 'Delikna suntingan cilik',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Ngawasi...',
'unwatching' => 'Ngilangi pangawasan...',

'enotif_mailer'                => 'Pangirim Notifikasi {{SITENAME}}',
'enotif_reset'                 => 'Tandhanana kabèh kaca sing wis ditiliki',
'enotif_newpagetext'           => 'Iki sawijining kaca anyar.',
'enotif_impersonal_salutation' => 'Panganggo {{SITENAME}}',
'changed'                      => 'kaubah',
'created'                      => 'kadamel',
'enotif_subject'               => 'Kaca $PAGETITLE ing {{SITENAME}} wis $CHANGEDORCREATED déning $PAGEEDITOR',
'enotif_lastvisited'           => 'Deleng $1 kanggo kabèh owah-owahan wiwit pungkasan panjenengan niliki.',
'enotif_lastdiff'              => 'Tilikana $1 kanggo mirsani owah-owahan iki.',
'enotif_anon_editor'           => 'panganggo anonim $1',
'enotif_body'                  => 'Sing minulya $WATCHINGUSERNAME,

Kaca $PAGETITLE ing {{SITENAME}} wis $CHANGEDORCREATED ing $PAGEEDITDATE déning $PAGEEDITOR, mangga mirsani $PAGETITLE_URL kanggo vèrsi pungkasan.

$NEWPAGE

Sajarah suntingan: $PAGESUMMARY $PAGEMINOREDIT

Hubungana panyunting:
mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Kita ora bakal ngandhani manèh yèn diowahi manèh, kejaba panjenengan wis mirsani kaca iku. Panjenengan uga bisa mbusak tandha notifikasi kanggo kabèh kaca pangawasan ing daftar pangawasan panjenengan.

             Sistém notifikasi {{SITENAME}}

--
Kanggo ngowahi préferènsi ing daftar pangawasan panjenengan, mangga mirsani
{{fullurl:{{ns:special}}:Watchlist/edit}}

Umpan balik lan pitulung sabanjuré:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Busak kaca',
'confirm'                     => 'Dhedhes (konfirmasi)',
'excontent'                   => "isi sadurungé: '$1'",
'excontentauthor'             => "isiné mung arupa: '$1' (lan siji-sijiné sing nyumbang yaiku '$2')",
'exbeforeblank'               => "isi sadurungé dikosongaké: '$1'",
'exblank'                     => 'kaca kosong',
'delete-confirm'              => 'Busak "$1"',
'delete-legend'               => 'Busak',
'historywarning'              => 'Pènget: Kaca sing bakal panjenengan busak ana sajarahé:',
'confirmdeletetext'           => 'Panjenengan bakal mbusak kaca utawa berkas iki minangka permanèn karo kabèh sajarahé saka basis data. Pastèkna dhisik menawa panjenengan pancèn nggayuh iki, ngerti kabèh akibat lan konsekwènsiné, lan apa sing bakal panjenengan tumindak iku cocog karo [[{{MediaWiki:Policy-url}}|kawicaksanan {{SITENAME}}]].',
'actioncomplete'              => 'Proses tuntas',
'deletedtext'                 => '"<nowiki>$1</nowiki>" sampun kabusak. Coba pirsani $2 kanggé log paling énggal kaca ingkang kabusak.',
'deletedarticle'              => 'mbusak "[[$1]]"',
'dellogpage'                  => 'Cathetan pambusakan',
'dellogpagetext'              => 'Ing ngisor iki kapacak log pambusakan kaca sing anyar dhéwé.',
'deletionlog'                 => 'Cathetan sing dibusak',
'reverted'                    => 'Dibalèkaké ing revisi sadurungé',
'deletecomment'               => 'Alesan dipun-busak',
'deleteotherreason'           => 'Alesan liya utawa tambahan:',
'deletereasonotherlist'       => 'Alesan liya',
'deletereason-dropdown'       => '*Alesan pambusakan
** Disuwun sing nulis
** Nglanggar hak cipta
** Vandalisme',
'delete-toobig'               => 'Kaca iki ndarbèni sajarah panyuntingan sing dawa, yaiku ngluwihi $1 révisi. Pambusakan kaca mawa sajarah panyuntingan sing dawa ora diparengaké kanggo menggak anané karusakan ing {{SITENAME}}.',
'delete-warning-toobig'       => 'Kaca iki duwé sajarang panyuntingan sing dawa, luwih saka $1 révisi.
Mbusak kaca iki bisa nyebabaké masalah operasional basis data {{SITENAME}};
mangga digalih manèh kersa nerusaké ora.',
'rollback'                    => 'Mangsulaken suntingan',
'rollback_short'              => 'Balèkna',
'rollbacklink'                => 'balèaké',
'rollbackfailed'              => 'Pambalèkan gagal dilakoni',
'cantrollback'                => 'Ora bisa mbalèkaké suntingan; panganggo pungkasan iku siji-sijiné penulis artikel iki.',
'alreadyrolled'               => 'Ora bisa mbalèkaké menyang suntingan pungkasan [[:$1]] déning [[User:$2|$2]] ([[User_talk:$2|Wicara]]); 
wong liya wis nyunting utawa mbalèkaké kaca artikel iku. 

Suntingan pungkasan dilakoni déning [[User:$3|$3]] ([[User_talk:$3|Wicara]]).',
'editcomment'                 => 'Komentar panyuntingané yaiku: "<em>$1</em>".', # only shown if there is an edit comment
'revertpage'                  => 'Suntingan [[{{ns:special}}:Contributions/$2|$2]] ([[User_talk:$2|dhiskusi]]) dipunwangsulaken dhateng ing vèrsi pungkasan déning [[User:$1|$1]]', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => 'Suntingan dibalèkaké déning $1;
diowahi bali menyang vèrsi pungkasan déning $2.',
'sessionfailure'              => 'Katoné ana masalah karo sèsi log panjenengan; log panjenengan wis dibatalaké kanggo nyegah pambajakan. Mangga mencèt tombol "back" lan unggahaké manèh kaca sadurungé mlebu log, lan coba manèh.',
'protectlogpage'              => 'Log pangreksan',
'protectlogtext'              => 'Ing ngisor iki kapacak log pangreksan lan panjabelan reksa kaca.
Mangga mirsani [[Special:Protectedpages|daftar kaca sing direksa]] kanggo daftar pangreksan kaca pungkasan.',
'protectedarticle'            => 'ngreksa "[[$1]]"',
'modifiedarticleprotection'   => 'ngowahi tingkat pangreksan "[[$1]]"',
'unprotectedarticle'          => 'ngilangi pangreksan "[[$1]]"',
'protectcomment'              => 'Komentar:',
'protectexpiry'               => 'Kadaluwarsa:',
'protect_expiry_invalid'      => 'Wektu kadaluwarsané ora sah.',
'protect_expiry_old'          => 'Wektu kadaluwarsané kuwi ana ing jaman biyèn.',
'protect-unchain'             => 'Bukak pangreksan pamindhahan',
'protect-text'                => 'Panjenengan bisa mirsani utawa ngganti tingkatan pangreksan kanggo kaca <strong><nowiki>$1</nowiki></strong> ing kéné.',
'protect-locked-blocked'      => 'Panjenengan ora bisa ngganti tingkat pangreksan yèn lagi diblokir.
Ing ngisor iki kapacak konfigurasi saiki iki kanggo kaca <strong>$1</strong>:',
'protect-locked-dblock'       => 'Tingkat pangreksan ora bisa diganti amerga anané panguncèn aktif basis data.
Ing ngisor iki kapacak konfigurasi kanggo kaca <strong>$1</strong>:',
'protect-locked-access'       => 'Akun utawa rékening panjenengan ora awèh idin kanggo ngganti tingkat pangreksan kaca. Ing ngisor iki kapacak konfigurasi saiki iki kanggo kaca <strong>$1</strong>:',
'protect-cascadeon'           => 'Kaca iki lagi direksa amerga disertakaké ing {{PLURAL:$1|kaca|kaca-kaca}} sing wis direksa mawa pilihan pangreksan runtun diaktifaké. Panjenengan bisa ngganti tingkat pangreksan kanggo kaca iki, nanging perkara iku ora awèh pengaruh pangreksan runtun.',
'protect-default'             => '(baku)',
'protect-fallback'            => 'Perlu idin hak aksès "$1"',
'protect-level-autoconfirmed' => 'Blokir panganggo sing ora kadaftar',
'protect-level-sysop'         => 'Namung opsis (operator sistem)',
'protect-summary-cascade'     => 'runtun',
'protect-expiring'            => 'kadaluwarsa $1 (UTC)',
'protect-cascade'             => 'Reksanen kabèh kaca sing kalebu ing kaca iki (pangreksan runtun).',
'protect-cantedit'            => 'Panjenengan ora pareng ngowahi tingkatan pangreksan kaca iki amerga panjenengan ora kagungan idin nyunting kaca iki.',
'restriction-type'            => 'Pangreksan:',
'restriction-level'           => 'Tingkatan pambatesan:',
'minimum-size'                => 'Ukuran minimum',
'maximum-size'                => 'Ukuran maksimum:',
'pagesize'                    => '(bita)',

# Restrictions (nouns)
'restriction-edit'   => 'Panyuntingan',
'restriction-move'   => 'Pamindhahan',
'restriction-create' => 'Gawé',

# Restriction levels
'restriction-level-sysop'         => 'pangreksan kebak',
'restriction-level-autoconfirmed' => 'pangreksan sémi',
'restriction-level-all'           => 'kabèh tingkatan',

# Undelete
'undelete'                     => 'Kembalikan halaman yang telah dihapus',
'undeletepage'                 => 'Lihat dan kembalikan halaman yang telah dihapus',
'viewdeletedpage'              => 'Deleng kaca sing wis dibusak',
'undeletepagetext'             => 'Kaca-kaca sing kapacak ing ngisor iki wis dibusak, nanging isih ana sajroning arsip lan bisa dibalèkaké.
Nanging arsipé bisa diresiki sakala-kala.',
'undeleteextrahelp'            => "Kanggo mbalèkaké kaca sacara kabèh, lirwakna kabèh kothak cèk ora dipilih siji-sijia lan kliken '''''Balèkna'''''. Kanggo nglakoni pambalèkan sèlèktif, cèk kothak révisi sing dipéngini lan kliken '''''Balèkna'''''. Yèn mencèt tombol '''''Reset''''' bakal ngosongaké isi komentar lan kabèh kothak cèk.",
'undeleterevisions'            => '$1 {{PLURAL:$1|révisi|révisi}} diarsipaké',
'undeletehistory'              => 'Jika Anda mengembalikan halaman tersebut, semua revisi akan dikembalikan ke dalam sejarah. Jika sebuah halaman baru dengan nama yang sama telah dibuat sejak penghapusan, revisi yang telah dikembalikan akan kelihatan dalam sejarah dahulu, dan revisi terkini halaman tersebut tidak akan ditimpa secara otomatis.',
'undeletehistorynoadmin'       => 'Kaca iki wis dibusak.
Alesané dituduhaké ing ringkesan ing ngisor iki, karo détail para panganggo sing wis nyunting kaca iki sadurungé dibusak.
Isi pungkasan tèks iki wis dibusak lan namung bisa dideleng para pangurus.',
'undelete-revision'            => 'Révisi sing wis dibusak saka $1 (nganti $2) déning $3:',
'undeleterevision-missing'     => 'Revisi salah utawa ora ditemokaké. 
Panjenengan mbokmenawa ngetutaké pranala sing salah, utawa revisi iku wis dipulihaké utawa diguwang saka arsip.',
'undelete-nodiff'              => 'Ora ditemokaké révisi sing luwih lawas.',
'undeletebtn'                  => 'Balèkna!',
'undeletelink'                 => 'balèkna',
'undeletereset'                => "''Reset''",
'undeletecomment'              => 'Komentar:',
'undeletedarticle'             => '"$1" wis dibalèkaké',
'undeletedrevisions'           => '$1 {{PLURAL:$1|révisi|révisi}} wis dibalèkaké',
'undeletedrevisions-files'     => '$1 {{PLURAL:$1|révisi|révisi}} lan $2 berkas dibalèkaké',
'undeletedfiles'               => '$1 {{PLURAL:$1|berkas|berkas}} dibalèkaké',
'cannotundelete'               => 'Olèhé mbatalaké pambusakan gagal; 
mbokmenawa wis ana wong liya sing luwih dhisik nglakoni pambatalan.',
'undeletedpage'                => "<big>'''$1 bisa dibalèkaké'''</big>

Delengen [[{{ns:special}}:Log/delete|log pambusakan]] kanggo data pambusakan lan pambalèkan.",
'undelete-header'              => 'Mangga mirsani [[Special:Log/delete|log pambusakan]] kanggo daftar kaca sing lagi waé dibusak.',
'undelete-search-box'          => 'Golèk kaca-kaca sing wis dibusak',
'undelete-search-prefix'       => 'Tuduhna kaca sing diwiwiti karo:',
'undelete-search-submit'       => 'Golèk',
'undelete-no-results'          => 'Ora ditemokaké kaca sing cocog ing arsip pambusakan.',
'undelete-filename-mismatch'   => 'Ora bisa mbatalaké pambusakan révisi berkas mawa tandha wektu $1: jeneng berkas ora padha',
'undelete-bad-store-key'       => 'Ora bisa mbatalaké pambusakan révisi berkas mawa tandha wektu $1: berkas ilang sadurungé dibusak.',
'undelete-cleanup-error'       => 'Ana kaluputan nalika mbusak arsip berkas "$1" sing ora dienggo.',
'undelete-missing-filearchive' => 'Ora bisa mbalèkaké arsip bekas mawa ID $1 amerga ora ana ing basis data.
Berkas iku mbok-menawa wis dibusak.',
'undelete-error-short'         => 'Kaluputan olèhé mbatalaké pambusakan: $1',
'undelete-error-long'          => 'Ana kaluputan nalika mbatalaké pambusakan berkas:

$1',

# Namespace form on various pages
'namespace' => 'Bilik nama (bilik jeneng):',
'invert'    => 'Balèkna pilihan',

# Contributions
'contributions' => 'Sumbangan panganggo',
'mycontris'     => 'Kontribusiku',
'contribsub2'   => 'Kagem $1 ($2)',
'nocontribs'    => 'Ora ditemokaké owah-owahan sing cocog karo kritéria kasebut iku.',
'uctop'         => ' (dhuwur)',
'month'         => 'Wiwit sasi (lan sadurungé):',
'year'          => 'Wiwit taun (lan sadurungé):',

'sp-newimages-showfrom' => 'Tuduhna gambar anyar wiwit saka $2, $1',

# What links here
'whatlinkshere'       => 'Pranala balik',
'whatlinkshere-title' => 'Kaca-kaca sing duwé pranala menyang $1',
'whatlinkshere-page'  => 'Kaca:',
'whatlinkshere-prev'  => '{{PLURAL:$1|sadurungé|$1 sadurungé}}',
'whatlinkshere-next'  => '{{PLURAL:$1|sabanjuré|$1 sabanjuré}}',
'whatlinkshere-links' => '← pranala',

# Block/unblock
'blockiptext'                 => 'Enggonen formulir ing ngisor iki kanggo mblokir sawijining alamat IP utawa panganggo supaya ora bisa nyunting kaca. Prekara iki perlu dilakoni kanggo menggak vandalisme, lan miturut [[{{MediaWiki:Policy-url}}|kawicaksanan {{SITENAME}}]]. Lebokna alesan panjenengan ing ngisor iki (contoné njupuk conto kaca sing wis tau dirusak). Kanggo daftar panganggo lan alamat sing diblokir, delengen [[{{ns:special}}:Ipblocklist|kaca iki]].',
'ipbreason-dropdown'          => '*Alesan umum mblokir panganggo
** Mènèhi informasi palsu
** Ngilangi isi kaca
** Spam pranala menyang situs njaba
** Nglebokaké tulisan ngawur ing kaca
** Tumindak intimidasi/nglècèhaké
** Nyalahgunakaké sawetara akun utawa rékening
** Jeneng panganggo ora layak',
'ipbanononly'                 => 'Blokir panganggo anonim waé',
'ipbcreateaccount'            => 'Penggak nggawé akun utawa rékening',
'ipbemailban'                 => 'Penggak panganggo ngirim layang e-mail',
'ipbenableautoblock'          => 'Blokir alamat IP pungkasan sing dienggo déning pengguna iki sacara otomatis, lan kabèh alamat sabanjuré sing dicoba arep dienggo nyunting.',
'ipbhidename'                 => 'Delikna jeneng panganggo utawa alamat IP saka log pamblokiran, daftar blokir aktif, sarta daftar panganggo',
'badipaddress'                => 'Alamat IP klèntu',
'ipb-edit-dropdown'           => 'Sunting alesan pamblokiran',
'ipb-unblock'                 => 'Ilangna blokir sawijining panganggo utawa alamat IP',
'ipb-blocklist-addr'          => 'Ndeleng blokir sing ditrapaké kanggo $1',
'ipb-blocklist'               => 'Ndeleng blokir sing lagi ditrapaké',
'unblockip'                   => 'Jabel blokir marang alamat IP utawa panganggo',
'unblockiptext'               => 'Nggonen formulir ing ngisor iki kanggo mbalèkaké aksès nulis sawijining alamt IP utawa panganggo sing sadurungé diblokir.',
'ipusubmit'                   => 'Ilangna blokir ing alamat iki',
'unblocked'                   => 'Blokir marang [[User:$1|$1]] wis dijabel',
'unblocked-id'                => 'Blokir $1 wis dijabel',
'ipblocklist-legend'          => 'Golèk panganggo sing diblokir',
'ipblocklist-username'        => 'Jeneng panganggo utawa alamat IP:',
'ipblocklist-submit'          => 'Golèk',
'blocklistline'               => '$1, $2 mblokir $3 ($4)',
'infiniteblock'               => 'salawasé',
'anononlyblock'               => 'namung anon',
'noautoblockblock'            => 'pamblokiran otomatis dipatèni',
'createaccountblock'          => 'ndamelipun akun dipunblokir',
'emailblock'                  => 'layang e-mail diblokir',
'ipblocklist-empty'           => 'Daftar pamblokiran kosong.',
'ipblocklist-no-results'      => 'alamat IP utawa panganggo sing disuwun ora diblokir.',
'blocklink'                   => 'blokir',
'unblocklink'                 => 'jabel blokir',
'contribslink'                => 'sumbangan',
'autoblocker'                 => 'Panjenengan otomatis dipun-blok amargi nganggé alamat protokol internet (IP) ingkang sami kaliyan "[[User:$1|$1]]". Alesanipun $1 dipun blok inggih punika "\'\'\'$2\'\'\'"',
'blocklogpage'                => 'Log pamblokiran',
'blocklogentry'               => 'mblokir "[[$1]]" dipun watesi wedalipun $2 $3',
'blocklogtext'                => 'Ing ngisor iki kapacak log pamblokiran lan panjabelan blokir panganggo. 
Alamat IP sing diblokir sacara otomatis ora ana ing daftar iki. 
Mangga mirsani [[{{ns:special}}:Ipblocklist|daftar alamat IP sing diblokir]] kanggo daftar blokir pungkasan.',
'unblocklogentry'             => 'njabel blokir "$1"',
'block-log-flags-anononly'    => 'namung panganggo anonim waé',
'block-log-flags-nocreate'    => 'opsi nggawé akun utawa rékening dipatèni',
'block-log-flags-noautoblock' => 'blokir otomatis dipatèni',
'block-log-flags-noemail'     => 'e-mail diblokir',
'range_block_disabled'        => 'Fungsi pamblokir blok IP kanggo para opsis dipatèni.',
'ipb_expiry_invalid'          => 'Wektu kadaluwarsa ora absah.',
'ipb_already_blocked'         => '"$1" wis diblokir',
'ipb_cant_unblock'            => 'Kaluputan: Blokir mawa ID $1 ora ditemokaké. Blokir iku mbok-menawa wis dibuka.',
'ipb_blocked_as_range'        => 'Kaluputan: IP $1 ora diblokir sacara langsung lan ora bisa dijabel blokiré. IP $1 diblokir mawa bagéyan saka pamblokiran kelompok IP $2, sing bisa dijabel pamblokirané.',
'ip_range_invalid'            => 'Blok IP ora absah.',
'blockme'                     => 'Blokiren aku',
'proxyblocker'                => 'Pamblokir proxy',
'proxyblocker-disabled'       => 'Fungsi iki saiki lagi dipatèni.',
'proxyblockreason'            => "Alamat IP panjenengan wis diblokir amerga alamat IP panjenengan iku ''open proxy''. 
Mangga ngubungi sing nyedyakaké dines internèt panjenengan utawa pitulungan tèknis lan aturana masalah kaamanan sérius iki.",
'sorbsreason'                 => "Alamat IP panjenengan didaftar minangka ''open proxy'' ing DNSBL.",
'sorbs_create_account_reason' => "Alamat IP panjenengan didaftar minangka ''open proxy'' ing DNSBL. Panjenengan ora bisa nggawé akun utawa rékening.",

# Developer tools
'lockdb'              => 'Kunci basis data',
'unlockdb'            => 'Buka kunci basis data',
'lockdbtext'          => 'Ngunci basis data bakal menggak kabèh panganggo kanggo nyunting kaca, ngowahi préferènsi panganggo, nyunting daftar pangawasan, lan prekara-prekara liyané sing merlokaké owah-owahan basis data. Pastèkna yèn iki pancèn panjenengan gayuh, lan yèn panjenengan ora lali mbuka kunci basis data sawisé pangopènan rampung.',
'unlockdbtext'        => 'Mbuka kunci basis data bakal mbalèkaké kabèh panganggo bisa nyunting kaca manèh, ngowahi préferènsi panganggo, nyunting daftar pangawasan, lan prekara-prekara liyané sing merlokaké pangowahan marang basis data. 
Tulung pastèkna yèn iki pancèn sing panjenengan gayuh.',
'lockconfirm'         => 'Iya, aku pancèn péngin ngunci basis data.',
'unlockconfirm'       => 'Iya, aku pancèn péngin tmbuka kunci basis data.',
'lockbtn'             => 'Kunci basis data',
'unlockbtn'           => 'Buka kunci basis data',
'locknoconfirm'       => 'Panjenengan ora mènèhi tandha cèk ing kothak konfirmasi.',
'lockdbsuccesssub'    => 'Bisa kasil ngunci basis data',
'unlockdbsuccesssub'  => 'Bisa kasil buka kunci basis data',
'lockdbsuccesstext'   => 'Basis data wis dikunci.
<br />Pastèkna panjenengan [[Special:Unlockdb|mbuka kunciné]] sawisé pangopènan bubar.',
'unlockdbsuccesstext' => 'Kunci basis data wis dibuka.',
'lockfilenotwritable' => 'Berkas kunci basis data ora bisa ditulis. Kanggo ngunci utawa mbuka basis data, berkas iki kudu ditulis déning server wèb.',
'databasenotlocked'   => 'Basis data ora dikunci.',

# Move page
'movepage'                => 'Mindhah kaca',
'movepagetext'            => "Formulir ing ngisor iki bakal ngowahi jeneng sawijining kaca, mindhah kabèh sajarahé menyang kaca sing anyar. Irah-irahan utawa judhul sing lawas bakal dadi kaca pangalihan menyang irah-irahan sing anyar. Pranala menyang kaca sing lawas ora bakal diowahi; dadi pastèkna dhisik mriksa pangalihan dobel utawa pangalihan sing rusak sawisé pamindhahan. Panjenengan sing tanggung jawab mastèkaké menawa kabèh pranala-pranala tetep nyambung ing kaca panujon kaya samesthiné.

Gatèkna yèn kaca iki '''ora''' bakal dipindhah yèn wis ana kaca liyané sing nganggo irah-irahan sing anyar, kejaba kaca iku kosong utawa ora nduwé sajarah panyuntingan. Dadi tegesé panjenengan bisa ngowahi jeneng kaca iku manèh kaya sedyakala menawa panjenengan luput, lan panjenengan ora bisa nimpani kaca sing wis ana.

'''PÈNGET:''' Perkara iki bisa ngakibataké owah-owahan sing drastis lan ora kaduga kanggo kaca-kaca sing populèr. Pastekaké dhisik panjenengan ngerti konsekwènsi saka panggayuh panjenengan sadurungé dibanjuraké.",
'movepagetalktext'        => "Kaca dhiskusi sing kagandhèng uga bakal dipindhahaké sacara otomatis '''kejaba yèn:'''

*Sawijining kaca dhiskusi sing ora kosong wis ana sangisoring irah-irahan (judhul) anyar, utawa
*Panjenengan ora maringi tandha cèk ing kothak ing ngisor iki.

Ing kasus-kasus iku, yèn panjenengan gayuh, panjenengan bisa mindhahaké utawa nggabung kaca iku sacara manual.",
'movearticle'             => 'Pindhah kaca',
'movenologin'             => 'Durung mlebu log',
'movenologintext'         => 'Panjenengan kudu dadi panganggo sing wis ndaftar lan wis [[{{ns:special}}:Userlogin|mlebu log]] kanggo mindhah kaca.',
'movenotallowed'          => 'Panjenengan ora pareng ngalihaké kaca ing {{SITENAME}}.',
'newtitle'                => 'Menyang irah-irahan utawa judhul anyar:',
'move-watch'              => 'Awasna kaca iki',
'movepagebtn'             => 'Pindhahna kaca',
'pagemovedsub'            => 'Bisa kasil dipindhahaké',
'movepage-moved'          => '<big>\'\'\'"$1" dipindhahaké menyang "$2".\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Satunggalipun kaca kanthi asma punika sampun wonten, utawi asma ingkang panjenengan pendhet mboten leres. Sumangga nyobi asma sanèsipun.',
'cantmove-titleprotected' => 'Panjenengan ora bisa mindhahaké kaca iki menyang lokasi iki, amerga irah-irahan tujuan lagi direksa; ora olèh digawé',
'talkexists'              => 'Kaca iku kasil dipindhahaké, nanging kaca dhiskusi saka kaca iku ora bisa dipindhahaké amerga wis ana kaca dhiskusi ing irah-irahan (judhul) sing anyar. Mangga kaca-kaca dhiskusi wau digabung sacara manual.',
'movedto'                 => 'dipindhah menyang',
'movetalk'                => 'Pindahna kaca dhiskusi sing ana gandhèngané.',
'talkpagemoved'           => 'Kaca dhiskusi sing ana gandhèngané uga mèú dipindhahaké.',
'talkpagenotmoved'        => 'Kaca dhiskusi sing kagandhèng <strong>ora</strong> mèlu dipindhahaké.',
'1movedto2'               => '$1 dialihaké menyang $2',
'1movedto2_redir'         => '[[$1]] dipunalihaken menyang [[$2]] via pangalihan',
'movelogpage'             => 'Log pamindhahan',
'movelogpagetext'         => 'Ing ngisor iki kapacak log pangalihan kaca.',
'movereason'              => 'Alesan:',
'revertmove'              => 'balèkaké',
'delete_and_move'         => 'busak lan kapindahaken',
'delete_and_move_text'    => '== Perlu mbusak ==

Artikel sing dituju, "[[$1]]", wis ana isiné. 
Apa panjenengan kersa mbusak iku supaya kacané bisa dialihaké?',
'delete_and_move_confirm' => 'Ya, busak kaca iku.',
'delete_and_move_reason'  => 'Dibusak kanggo antisipasi pangalihan kaca',
'selfmove'                => 'Pangalihan kaca ora bisa dilakoni amerga irah-irahan utawa judhul sumber lan tujuané padha.',
'immobile_namespace'      => 'Irah-irahan sumber utawa tujuan kalebu tipe kusus; 
ora bisa mindhahaké kaca saka lan menyang bilik nama iku.',

# Export
'export'            => 'Ekspor kaca',
'exporttext'        => 'Panjenengan bisa ngèkspor tèks lan sajarah panyuntingan sawijining kaca tartamtu utawa sawijining sèt kaca awujud XML tartamtu. Banjur iki bisa diimpor ing wiki liyané nganggo MediaWiki nganggo fasilitas [[Special:Import|impor kaca]].

Kanggo ngèkspor kaca-kaca artikel, lebokna irah-irahan utawa judhul sajroning kothak tèks ing ngisor iki, irah-irahan utawa judhul siji per baris, lan pilihen apa panjenengan péngin ngèkspor jangkep karo vèrsi sadurungé, utawa namung vèrsi saiki mawa cathetan panyuntingan pungkasan.

Yèn panjenengan namun péngin ngimpor vèrsi pungkasan, panjenengan uga bisa nganggo pranala kusus, contoné [[{{ns:special}}:Export/{{int:mainpage}}]] kanggo ngèkspor artikel "[[{{MediaWiki:Mainpage}}]]".',
'exportcuronly'     => 'Namung èkspor révisi saiki, dudu kabèh vèrsi lawas',
'exportnohistory'   => "----
'''Cathetan:''' Ngèkspor kabèh sajarah suntingan kaca ngliwati formulir iki wis dinon-aktifaké déning alesan kinerja.",
'export-submit'     => 'Èkspor',
'export-addcattext' => 'Tambahna kaca saka kategori:',
'export-addcat'     => 'Tambahna',
'export-download'   => 'Simpen minangka berkas',
'export-templates'  => 'Kalebu cithakan-cithakan',

# Namespace 8 related
'allmessages'               => 'Kabèh laporan sistém',
'allmessagesname'           => 'Asma (jeneng)',
'allmessagesdefault'        => 'Tèks baku',
'allmessagescurrent'        => 'Tèks saiki',
'allmessagestext'           => 'Punika pesen-pesen saking sistem ingkang kacawisaken wonten ing  MediaWiki namespace.',
'allmessagesnotsupportedDB' => "Kaca iki ora bisa dienggo amerga '''\$wgUseDatabaseMessages''' dipatèni.",
'allmessagesfilter'         => 'Saringan jeneng pesen:',
'allmessagesmodified'       => 'Namung tampilanipun ingkang owah',

# Thumbnails
'thumbnail-more'           => 'Gedhèkna',
'filemissing'              => 'Berkas ora ditemokaké',
'thumbnail_error'          => "Kaluputan nalika nggawé gambar cilik (''thumbnail''): $1",
'djvu_page_error'          => "Kaca DjVu ana ing sajabaning ranggèhan (''range'')",
'djvu_no_xml'              => 'Ora bisa njupuk XML kanggo berkas DjVu',
'thumbnail_invalid_params' => "Paramèter gambar cilik (''thumbnail'') ora absah",
'thumbnail_dest_directory' => 'Ora bisa nggawé dirèktori tujuan',

# Special:Import
'import'                     => 'Impor kaca',
'importinterwiki'            => 'Impor transwiki',
'import-interwiki-text'      => 'Pilih sawijining wiki lan irah-irahan kaca sing arep diimpor. 
Tanggal révisi lan jeneng panyunting bakal dilestarèkaké. 
Kabèh aktivitas impor transwiki bakal dilog ing [[{{ns:special}}:Log/import|log impor]].',
'import-interwiki-history'   => 'Tuladen kabèh vèrsi lawas saka kaca iki',
'import-interwiki-submit'    => 'Impor',
'import-interwiki-namespace' => 'Pindhahna kaca ing bilik nama:',
'importtext'                 => "Mangga ngèkspor berkasa saka wiki sumber nganggo piranti [[{{ns:special}}:Export]], simpenen ing cakram padhet (''harddisk'') lan unggahna ing kéné.",
'importstart'                => 'Ngimpor kaca...',
'import-revision-count'      => '$1 {{PLURAL:$1|révisi|révisi-révisi}}',
'importnopages'              => 'Ora ana kaca kanggo diimpor.',
'importfailed'               => 'Impor gagal: $1',
'importunknownsource'        => 'Sumber impor ora ditepungi',
'importcantopen'             => 'Berkas impor ora bisa dibukak',
'importbadinterwiki'         => 'Pranala interwiki rusak',
'importnotext'               => 'Kosong utawa ora ana tèks',
'importsuccess'              => 'Impor suksès!',
'importhistoryconflict'      => 'Ana konflik révisi sajarah (mbok-menawa tau ngimpor kaca iki sadurungé)',
'importnosources'            => 'Ora ana sumber impor transwiki sing wis digawé lan pangunggahan sajarah sacara langsung wis dinon-aktifaké.',
'importnofile'               => 'Ora ana berkas sumber impor sing wis diunggahaké.',
'importuploaderrorsize'      => 'Pangunggahan berkas impor gagal. Ukuran berkas ngluwihi ukuran sing diidinaké.',
'importuploaderrorpartial'   => 'Pangunggahan berkas impor gagal. Namung sabagéyan berkas sing kasil bisa diunggahaké.',
'importuploaderrortemp'      => 'Pangunggahan berkas gagal. Sawijining dirèktori sauntara sing dibutuhaké ora ana.',
'import-parse-failure'       => 'Prosès impor XML gagal',
'import-noarticle'           => 'Ora ana kaca sing bisa diimpor!',
'import-nonewrevisions'      => 'Kabèh révisi sadurungé wis tau diimpor.',
'xml-error-string'           => '$1 ing baris $2, kolom $3 (bita $4): $5',

# Import log
'importlogpage'                    => 'Log impor',
'importlogpagetext'                => 'Impor administratif kaca-kaca mawa sajarah panyuntingan saka wiki liya.',
'import-logentry-upload'           => 'ngimpor [[$1]] mawa pangunggahan berkas',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|révisi|révisi}}',
'import-logentry-interwiki'        => 'wis nge-transwiki $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|révisi}} saka $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Kaca panganggoku',
'tooltip-pt-anonuserpage'         => 'Kaca panganggo IP panjenengan',
'tooltip-pt-mytalk'               => 'Kaca gunemanku',
'tooltip-pt-anontalk'             => 'Dhiskusi perkara suntingan saka alamat IP iki',
'tooltip-pt-preferences'          => 'Préferènsiku',
'tooltip-pt-watchlist'            => 'Daftar kaca sing tak-awasi.',
'tooltip-pt-mycontris'            => 'Daftar kontribusiku',
'tooltip-pt-login'                => 'Panjenengan diaturi mlebu log, nanging ora dikudokaké.',
'tooltip-pt-anonlogin'            => 'Panjenengan disaranaké mlebu log, nanging ora diwajibaké.',
'tooltip-pt-logout'               => 'Log metu (oncat)',
'tooltip-ca-talk'                 => 'Dhiskusi perkara isi',
'tooltip-ca-edit'                 => 'Sunting kaca iki. Nganggoa tombol pratayang sadurungé nyimpen.',
'tooltip-ca-addsection'           => 'Tambah komentar ing kaca dhiskusi iki.',
'tooltip-ca-viewsource'           => 'Kaca iki direksa. Panjenengan namung bisa mirsani sumberé.',
'tooltip-ca-history'              => 'Vèrsi-vèrsi sadurungé saka kaca iki.',
'tooltip-ca-protect'              => 'Reksa kaca iki',
'tooltip-ca-delete'               => 'Busak kaca iki',
'tooltip-ca-undelete'             => 'Balèkna suntingan ing kaca iki sadurungé kaca iki dibusak',
'tooltip-ca-move'                 => 'Pindhahen kaca iki',
'tooltip-ca-watch'                => 'Tambahna kaca iki ing daftar pangawasan panjenengan',
'tooltip-ca-unwatch'              => 'Busak kaca iki saka daftar pangawasan panjenengan',
'tooltip-search'                  => 'Golek ing situs {{SITENAME}} iki',
'tooltip-search-go'               => 'Lungaa ing kaca mawa jeneng persis iki, yèn anaa',
'tooltip-search-fulltext'         => 'Golèk kaca sing duwé tèks kaya mangkéné',
'tooltip-p-logo'                  => 'Kaca Utama',
'tooltip-n-mainpage'              => 'Nuwèni Kaca Utama',
'tooltip-n-portal'                => 'Perkara proyèk, apa sing bisa panjenengan gayuh, lan ing ngendi golèk apa-apa',
'tooltip-n-currentevents'         => 'Temokna informasi perkara prastawa anyar',
'tooltip-n-recentchanges'         => 'Daftar owah-owahan anyar ing wiki.',
'tooltip-n-randompage'            => 'Tuduhna sembarang kaca',
'tooltip-n-help'                  => 'Papan kanggo golèk pitulung.',
'tooltip-n-sitesupport'           => 'Sokongen kita',
'tooltip-t-whatlinkshere'         => 'Daftar kabèh kaca wiki sing nyambung menyang kaca iki',
'tooltip-t-recentchangeslinked'   => 'Owah-owahan pungkasan kaca-kaca sing duwé pranala menyang kaca iki',
'tooltip-feed-rss'                => "''RSS feed'' kanggo kaca iki",
'tooltip-feed-atom'               => "''Atom feed'' kanggo kaca iki",
'tooltip-t-contributions'         => 'Deleng daftar kontribusi panganggo iki',
'tooltip-t-emailuser'             => 'Kirimna e-mail menyang panganggo iki',
'tooltip-t-upload'                => 'Ngunggah gambar utawa berkas média',
'tooltip-t-specialpages'          => 'Daftar kabèh kaca astaméwa (kaca kusus)',
'tooltip-t-print'                 => 'Vèrsi cithak kaca iki',
'tooltip-t-permalink'             => 'Pranala permanèn kanggo révisi kaca iki',
'tooltip-ca-nstab-main'           => 'Ndeleng kaca artikel',
'tooltip-ca-nstab-user'           => 'Deleng kaca panganggo',
'tooltip-ca-nstab-media'          => 'Ndeleng kaca média',
'tooltip-ca-nstab-special'        => 'Iki kaca astaméwa utawa kaca kusus sing ora bisa disunting',
'tooltip-ca-nstab-project'        => 'Deleng kaca proyèk',
'tooltip-ca-nstab-image'          => 'Deleng kaca berkas',
'tooltip-ca-nstab-mediawiki'      => 'Ndeleng pesenan sistém',
'tooltip-ca-nstab-template'       => 'Deleng cithakan',
'tooltip-ca-nstab-help'           => 'Mirsani kaca pitulung',
'tooltip-ca-nstab-category'       => 'Deleng kaca kategori',
'tooltip-minoredit'               => 'Tandhanana minangka suntingan cilik',
'tooltip-save'                    => 'Simpen owah-owahan panjenengan',
'tooltip-preview'                 => 'Pratayang owah-owahan panjenengan, tulung nganggo fungsi iki sadurungé nyimpen!',
'tooltip-diff'                    => 'Tuduhna owah-owahan panjenengan ing tèks iki.',
'tooltip-compareselectedversions' => 'Delengen prabédan antara rong vèrsi kaca iki sing dipilih.',
'tooltip-watch'                   => 'Tambahna kaca iki ing daftar pangawasan panjenengan',
'tooltip-recreate'                => 'Gawéa kaca iki manèh senadyan tau dibusak',
'tooltip-upload'                  => 'Miwiti pangunggahan',

# Metadata
'nodublincore'      => 'Metadata Dublin Core RDF dipatèni ing server iki.',
'nocreativecommons' => 'Metadata Creative Commons RDF dipatèni ing server iki.',
'notacceptable'     => 'Server wiki ora bisa nyedyakaké data sajroning format sing bisa diwaca déning klièn panjenengan.',

# Attribution
'anonymous'        => 'Panganggé {{SITENAME}} ingkang mboten kinawruhan.',
'siteuser'         => 'Panganggo {{SITENAME}} $1',
'lastmodifiedatby' => 'Kaca iki pungkasan diowahi  $2, $1 déning $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Adhedhasar karyané $1.',
'others'           => 'liya-liyané',
'siteusers'        => 'Panganggo(-panganggo) {{SITENAME}} $1',
'creditspage'      => 'Informasi para panulis kaca',
'nocredits'        => 'Ora ana informasi ngenani para panulis ing kaca iki.',

# Spam protection
'spamprotectiontitle'    => 'Filter anti-spam',
'spamprotectiontext'     => 'Kaca sing arep disimpen panjenengan diblokir déning filter spam. 
Mbok-menawa iki disebabaké anané pranala jaba tartamtu.',
'spamprotectionmatch'    => 'Tèks sing kapacak iki mancing filter spam kita: $1',
'categoryarticlecount'   => 'Wonten $1 artikel ing kategori punika.',
'listingcontinuesabbrev' => 'samb.',
'spambot_username'       => 'Resik-resik spam MediaWiki',
'spam_reverting'         => 'Mbalèkaké menyang vèrsi pungkasan sing ora ana pranalané menyang $1',
'spam_blanking'          => 'Kabèh révisi sing duwé pranala menyang $1, pangosongan',

# Info page
'infosubtitle'   => 'Informasi kanggo kaca',
'numedits'       => 'Cacahé panyuntingan (artikel): $1',
'numtalkedits'   => 'Cacahé panyuntingan (kaca dhiskusi): $1',
'numwatchers'    => 'Cacahé sing ngawasi: $1',
'numauthors'     => 'Cacahé pangarang sing béda-béda (artikel): $1',
'numtalkauthors' => 'Cacahé pangarang sing béda-béda (kaca dhiskusi): $1',

# Math options
'mw_math_png'    => 'Mesthi nggawé PNG',
'mw_math_simple' => 'HTML yèn prasaja banget utawa yèn ora PNG',
'mw_math_html'   => 'HTML yèn bisa utawa PNG',
'mw_math_source' => 'Dijarna waé minangka TeX (kanggo panjlajah wèb tèks)',
'mw_math_modern' => 'Disaranaké kanggo panjlajah wèb modèrn',
'mw_math_mathml' => 'MathML yèn bisa (pracoban)',

# Patrolling
'markaspatrolleddiff'                 => 'Tandhanana wis dipatroli',
'markaspatrolledtext'                 => 'Tandhanana artikel iki wis dipatroli',
'markedaspatrolled'                   => 'Ditandhani wis dipatroli',
'markedaspatrolledtext'               => 'Révisi sing dipilih wis ditandhani minangka dipatroli.',
'rcpatroldisabled'                    => 'Patroli owah-owahan pungkasan dipatèni',
'rcpatroldisabledtext'                => 'Fitur patroli owah-owahan pungkasan lagi dipatèni.',
'markedaspatrollederror'              => 'Ora bisa awèh tandha wis dipatroli',
'markedaspatrollederrortext'          => 'Panjenengan kudu nentokaké sawijining révisi kanggo ditandhani minangka sing dipatroli.',
'markedaspatrollederror-noautopatrol' => 'Panjenengan ora pareng nandhani suntingan panjenengan dhéwé minangka dipatroli.',

# Image deletion
'deletedrevision'                 => 'Revisi dangu ingkang dipunbusak $1',
'filedeleteerror-short'           => 'Kaluputan nalika mbusak berkas: $1',
'filedeleteerror-long'            => 'Ana kaluputan nalika mbusak berkas:\\n\\n$1\\n',
'filedelete-missing'              => 'Berkas "$1" ora bisa dibusak amerga ora ditemokaké.',
'filedelete-old-unregistered'     => 'Révisi berkas "$1" sing diwènèhaké ora ana sajroning basis data.',
'filedelete-current-unregistered' => 'Berkas sing dispésifikasi "$1" ora ana sajroning basis data.',
'filedelete-archive-read-only'    => 'Dirèktori arsip "$1" ora bisa ditulis déning server wèb.',

# Media information
'mediawarning'         => "'''Pènget:''' Berkas iki mbokmenawa ngandhut kode sing bebayani, yèn dilakokaké sistém panjenengan bisa kena pangaruh ala.<hr />",
'imagemaxsize'         => 'Watesana ukuran gambar ing kaca dèskripsi berkas dadi:',
'thumbsize'            => 'Ukuran gambar cilik (thumbnail):',
'widthheightpage'      => '$1×$2, $3 kaca',
'file-info'            => '(ukuran berkas: $1, tipe MIME: $2)',
'file-info-size'       => '($1 × $2 piksel, ukuran berkas: $3, tipe MIME: $4)',
'file-nohires'         => '<small>Ora ana résolusi sing luwih dhuwur.</small>',
'svg-long-desc'        => '(Berkas SVG, nominal $1 × $2 piksel, gedhené berkas: $3)',
'show-big-image'       => 'Résolusi kebak',
'show-big-image-thumb' => '<small>Ukuran pratayang iki: $1 × $2 piksel</small>',

# Special:Newimages
'newimages'    => 'Galeri berkas anyar',
'showhidebots' => '($1 bot)',
'noimages'     => 'Ora ana sing dideleng.',

# Bad image list
'bad_image_list' => "Formaté kaya mengkéné:

Namung butir daftar (baris sing diawali mawa tandha *) sing mèlu diitung. Pranala kapisan ing sawijining baris kudu pranala ing berkas sing ala. 
Pranala-pranala sabanjuré ing baris sing padha dianggep minangka ''pengecualian'', yaiku artikel sing bisa nuduhaké berkas iku.",

# Metadata
'metadata'          => 'Metadata',
'metadata-help'     => "Berkas iki ngandhut informasi tambahan sing mbokmenawa ditambahaké déning kamera digital utawa ''scanner'' sing dipigunakaké kanggo nggawé utawa olèhé digitalisasi berkas. Yèn berkas iki wis dimodifikasi, detail sing ana mbokmenawa ora sacara kebak nuduhaké informasi saka gambar sing wis dimodifikasi iki.",
'metadata-expand'   => 'Tuduhna detail tambahan',
'metadata-collapse' => 'Delikna detail tambahan',
'metadata-fields'   => 'Entri metadata EXIF sing kapacak iki bakal dituduhaké ing kaca informasi gambar yèn tabèl metadata didelikaké. Entri liyané minangka baku bakal didelikaké.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber', # Do not translate list items

# EXIF tags
'exif-gpsdestbearing' => 'Arah tujuan',

# EXIF attributes
'exif-compression-1' => 'Ora dikomprèsi',

'exif-unknowndate' => 'Tanggal ora dingertèni',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Baliken sacara horisontal', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Diputer 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Baliken sacara vèrtikal', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Diputer 90° nglawan arah dom jam dan dibalik sacara vèrtikal', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Diputer 90° miturut arah dom jam', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Diputer 90° miturut arah dom jam lan diwalik sacara vèrtikal', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Diputer 90° miturut lawan arah dom jam', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => "format ''chunky'' (kumothak)",
'exif-planarconfiguration-2' => 'format planar',

'exif-componentsconfiguration-0' => 'ora ana',

'exif-exposureprogram-0' => 'Ora didéfinisi',
'exif-exposureprogram-1' => 'Mawa tangan (manual)',
'exif-exposureprogram-2' => 'Program normal',
'exif-exposureprogram-3' => 'Prioritas diafragma',
'exif-exposureprogram-4' => 'Prioritas panutup',
'exif-exposureprogram-5' => "Program kréatif (condong menyang jroning bilik (''depth of field''))",
'exif-exposureprogram-6' => 'Program aksi (condhong marang kacepetan rana)',
'exif-exposureprogram-7' => "Modus potret (kanggo foto ''closeup'' mawa latar wuri ora fokus)",
'exif-exposureprogram-8' => "Modus pamandhangan (''landscape'') (kanggo foto pamandhangan mawa latar wuri fokus)",

'exif-subjectdistance-value' => '$1 mèter',

'exif-meteringmode-0'   => 'Ora dingertèni',
'exif-meteringmode-1'   => 'Rata-rata',
'exif-meteringmode-2'   => 'Rata-rataAbobot',
'exif-meteringmode-3'   => 'Spot',
'exif-meteringmode-4'   => 'MultiSpot',
'exif-meteringmode-5'   => 'Pola utawa patron multi-sègmèn',
'exif-meteringmode-6'   => 'Parsial (sabagéyan)',
'exif-meteringmode-255' => 'Liya-liyané',

'exif-lightsource-0'   => 'Ora dingertèni',
'exif-lightsource-1'   => 'Cahya srengéngé',
'exif-lightsource-2'   => 'Cahya néon',
'exif-lightsource-3'   => 'Wolfram (cahya pijer)',
'exif-lightsource-4'   => 'Blitz',
'exif-lightsource-9'   => 'Hawa apik',
'exif-lightsource-10'  => 'Hawa apedhut',
'exif-lightsource-11'  => 'Bayangan',
'exif-lightsource-12'  => 'Fluorescent cahya pepadhang awan (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluorescent putih pepadhang awan (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluorescent putih éyup (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluorescent putih (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Cahya standar A',
'exif-lightsource-18'  => 'Cahya standar B',
'exif-lightsource-19'  => 'Cahya standar C',
'exif-lightsource-24'  => 'ISO studio tungsten',
'exif-lightsource-255' => 'Sumber cahya liya',

'exif-focalplaneresolutionunit-2' => 'inci',

'exif-sensingmethod-1' => 'Ora didéfinisi',
'exif-sensingmethod-2' => 'Sènsor aréa werna sa-tugelan',
'exif-sensingmethod-3' => 'Sènsor aréa werna rong tugelan',
'exif-sensingmethod-4' => 'Sènsor aréa werna telung tugelan',
'exif-sensingmethod-5' => 'Sènsor aréa werna urut-urutan',
'exif-sensingmethod-7' => 'Sènsor trilinéar',
'exif-sensingmethod-8' => 'Sènsor linéar werna urut-urutan',

'exif-scenetype-1' => 'Gambar foto langsung',

'exif-customrendered-0' => 'Prosès normal',
'exif-customrendered-1' => 'Prosès kustom',

'exif-exposuremode-0' => 'Pajanan (èkspos) otomatis',
'exif-exposuremode-1' => 'Pajanan (èkspos) manual',
'exif-exposuremode-2' => 'Brakèt otomatis',

'exif-whitebalance-0' => "Kababagan (''kasaimbangan'') putih otomatis",
'exif-whitebalance-1' => 'Kababagan (kasaimbangan) putih manual',

'exif-scenecapturetype-0' => 'Standar',
'exif-scenecapturetype-1' => "Dawa (''landscape'')",
'exif-scenecapturetype-2' => 'Potrèt',
'exif-scenecapturetype-3' => 'Pamandhangan wengi',

'exif-gaincontrol-0' => 'Ora ana',
'exif-gaincontrol-1' => 'Puncak-puncak ngisor munggah',
'exif-gaincontrol-2' => 'Puncak-puncak dhuwur munggah',
'exif-gaincontrol-3' => 'Puncak-puncak ngisor medhun',
'exif-gaincontrol-4' => 'Puncak-puncak dhuwur medhun',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Lembut',
'exif-contrast-2' => 'Atos',

'exif-saturation-0' => 'Normal',

'exif-sharpness-0' => 'Normal',

'exif-gpsstatus-a' => 'Pangukuran lagi dilakoni',
'exif-gpsstatus-v' => 'Interoperabilitas pangukuran',

'exif-gpsmeasuremode-2' => 'Pangukuran 2-dimènsi',
'exif-gpsmeasuremode-3' => 'Pangukuran 3-dimènsi',

# External editor support
'edit-externally'      => 'Sunting berkas iki mawa aplikasi jaba',
'edit-externally-help' => 'Deleng [http://meta.wikimedia.org/wiki/Help:External_editors instruksi pangaturan] kanggo informasi sabanjuré.',

# 'all' in various places, this might be different for inflected languages
'monthsall' => 'kabèh',

# E-mail address confirmation
'confirmemail'            => 'Konfirmasi alamat e-mail',
'confirmemail_noemail'    => 'Panjenengan ora maringi alamat e-mail sing absah ing [[Special:Preferences|préferènsi]] panjenengan.',
'confirmemail_text'       => '{{SITENAME}} ngwajibaké panjenengan ndhedhes utawa konfirmasi alamat e-mail panjenengan sadurungé bisa nganggo fitur-fitur e-mail.
Pencèten tombol ing ngisor iki kanggo ngirim sawijining kode konfirmasi arupa sawijining pranala;
Tuladen pranala iki ing panjlajah wèb panjenengan kanggo ndhedhes yèn alamat e-mail panjenengan pancèn bener.',
'confirmemail_pending'    => '<div class="error">Sawijining kode konfirmasi wis dikirim menyang alamat e-mail panjenengan;
yèn panjenengan lagi waé nggawé akun utawa rékening panjenengan, mangga nunggu sawetara menit nganti layang iku tekan sadurungé nyuwun kode anyar manèh.</div>',
'confirmemail_send'       => 'Kirim kode konfirmasi',
'confirmemail_sent'       => 'E-mail mawa kode konfirmasi wis dikirim.',
'confirmemail_oncreate'   => 'Sawijining kode pandhedhesan (konfirmasi) wis dikirim menyang alamat e-mail panjenengan.
Kode iki ora dibutuhaké kanggo log mlebu, nanging dibutuhaké sadurungé nganggo kabèh fitur sing nganggo e-mail ing wiki iki.',
'confirmemail_sendfailed' => 'Layang e-mail konfirmasi ora kasil dikirim. 
Mangga dipriksa mbok-menawa ana aksara ilegal ing alamat e-mail panjenengan. 

Pangirim mènèhi informasi: $1',
'confirmemail_invalid'    => 'Kode konfirmasi salah. Kode iku mbok-menawa wis kadaluwarsa.',
'confirmemail_needlogin'  => 'Panjenengan kudu ndhedhes (konfirmasi) $1 alamat layang e-mail panjenengan.',
'confirmemail_success'    => 'Alamat e-mail panjenengan wis dikonfirmasi. Saiki panjenengan bisa log mlebu lan wiwit nganggo wiki.',

# Scary transclusion
'scarytranscludedisabled' => '[Transklusi cithakan interwiki dipatèni]',
'scarytranscludefailed'   => '[Olèhé njupuk cithakan $1 gagal; nuwun sèwu]',
'scarytranscludetoolong'  => '[URL-é kedawan; nuwun sèwu]',

# Trackbacks
'trackbackbox' => '<div id="mw_trackbacks">
Ngrunut bali kanggo artikel iki:<br />
$1
</div>',

# Delete conflict
'deletedwhileediting' => 'Wara-wara: Kaca punika sampun kabusak sasampunipun panjenengan miwiti nyunting!',
'confirmrecreate'     => "Panganggo [[User:$1|$1]] ([[User_talk:$1|Wicara]]) wis mbusak kaca iki nalika panjenengan miwiti panyuntingan mawa alesan:
: ''$2''
Mangga didhedhes (dikonfirmasi) menawa panjenengan kersa nggawé ulang kaca iki.",
'recreate'            => 'Gawé ulang',

# HTML dump
'redirectingto' => 'Dipun-alihaken tumuju [[$1]]...',

# action=purge
'confirm_purge'        => "Ngilangaken ''cache'' kaca punika?

$1",
'confirm_purge_button' => 'OK',

# AJAX search
'articletitles' => "Artikel ingkang dipun-wiwiti nganggé ''$1''",
'useajaxsearch' => 'Nganggoa panggolèkan AJAX',

# Multipage image navigation
'imgmultipageprev' => '&larr; kaca sadurungé',
'imgmultipagenext' => 'kaca sabanjuré →',
'imgmultigo'       => 'Golèk!',
'imgmultigotopre'  => 'Menyang kaca',

# Table pager
'ascending_abbrev'         => 'minggah',
'table_pager_limit_submit' => 'Golèk',

# Auto-summaries
'autoredircomment' => 'Kaalihaken tumuju [[$1]]',
'autosumm-new'     => 'Kaca énggal: $1',

# Live preview
'livepreview-loading' => 'Ngunggahaké…',
'livepreview-ready'   => 'Ngunggahaké… Rampung!',
'livepreview-error'   => 'Gagal nyambung: $1 "$2"
Cobanen mawa pratayang normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Owah-owahan pungkasan sing luwih anyar tinimbang $1 detik mbokmenawa ora muncul ing daftar iki.',
'lag-warn-high'   => "Amerga gedhéné ''lag'' basis data server, owah-owahan pungkasan sing luwih anyar saka $1 detik mbokmenawa ora muncul ing daftar iki.",

# Watchlist editor
'watchlistedit-numitems'       => 'Daftar pangawasan panjenengan ngandhut {{PLURAL:$1|1 irah-irahan|$1 irah-irahan}}, ora kalebu kaca-kaca dhiskusi.',
'watchlistedit-noitems'        => 'Daftar pangawasan panjenengan kosong.',
'watchlistedit-normal-title'   => 'Sunting daftar pangawasan',
'watchlistedit-normal-legend'  => 'Busak irah-irahan saka daftar pangawasan',
'watchlistedit-normal-explain' => 'Irah-irahan utawa judhul ing daftar pangawasan panjenengan kapacak ing ngisor iki. 
Kanggo mbusak sawijining irah-irahan, kliken kothak ing pinggiré, lan banjur kliken "Busak judhul". 
Panjenengan uga bisa [[Special:Watchlist/raw|nyunting daftar mentah]].',
'watchlistedit-normal-submit'  => 'Busak irah-irahan',
'watchlistedit-normal-done'    => 'Irah-irahan {{PLURAL:$1|siji|$1}} wis dibusak saka daftar pangawasan panjenengan:',
'watchlistedit-raw-title'      => 'Sunting daftar mentah',
'watchlistedit-raw-legend'     => 'Sunting daftar mentah',
'watchlistedit-raw-explain'    => 'Irah-irahan ing daftar pangawasan panjenengan kapacak ing ngisor iki, lan bisa diowahi mawa nambahaké utawa mbusak daftar; sairah-irahan saban barisé. 
Yèn wis rampung, anyarana kaca daftar pangawasan iki. 
Panjenengan uga bisa [[Special:Watchlist/edit|nganggo éditor standar panjenengan]].',
'watchlistedit-raw-titles'     => 'Irah-irahan:',
'watchlistedit-raw-submit'     => 'Anyarana daftar pangawasan',
'watchlistedit-raw-done'       => 'Daftar pangawasan panjenengan wis dianyari.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1 irah-irahan wis|$1 irah-irahan wis}} ditambahaké:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1 irah-irahan wis|$1 irah-irahan wis}} diwetokaké:',

# Watchlist editing tools
'watchlisttools-view' => 'Tuduhna owah-owahan sing ana gandhèngané',
'watchlisttools-edit' => 'Tuduhna lan sunting daftar pangawasan',
'watchlisttools-raw'  => 'Sunting daftar pangawasan mentah',

# Core parser functions
'unknown_extension_tag' => 'Tag èkstènsi ora ditepungi "$1"',

# Special:Version
'version-extensions'               => 'Èkstènsi sing wis diinstalasi',
'version-specialpages'             => 'Kaca astaméwa (kaca kusus)',
'version-parserhooks'              => 'Canthèlan parser',
'version-variables'                => 'Variabel',
'version-other'                    => 'Liyané',
'version-mediahandlers'            => 'Pananganan média',
'version-hooks'                    => 'Canthèlan-canthèlan',
'version-extension-functions'      => 'Fungsi-fungsi èkstènsi',
'version-parser-extensiontags'     => 'Rambu èkstènsi parser',
'version-parser-function-hooks'    => 'Canthèlan fungsi parser',
'version-skin-extension-functions' => 'Fungsi èkstènsi kulit',
'version-hook-name'                => 'Jeneng canthèlan',
'version-hook-subscribedby'        => 'Dilanggani déning',
'version-version'                  => 'Vèrsi',
'version-license'                  => 'Lisènsi',
'version-software'                 => "''Software'' wis diinstalasi",
'version-software-product'         => 'Prodhuk',
'version-software-version'         => 'Vèrsi',

# Special:Filepath
'filepath'         => 'Lokasi berkas',
'filepath-page'    => 'Berkas:',
'filepath-submit'  => 'Lokasi',
'filepath-summary' => 'Kaca astaméwa utawa kusus iki nuduhaké jalur pepak sawijining berkas.
Gambar dituduhaké mawa résolusi kebak lan tipe liyané berkas bakal dibuka langsung mawa program kagandhèng.

Lebokna jeneng berkas tanpa imbuhan awalan "{{ns:image}}:".',

);
