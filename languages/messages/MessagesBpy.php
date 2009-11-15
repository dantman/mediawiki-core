<?php
/** Bishnupria Manipuri (ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Usingha
 * @author Uttam Singha, Dec 2006
 */

$fallback='bn';

$digitTransformTable = array(
	'0' => '০',
	'1' => '১',
	'2' => '২',
	'3' => '৩',
	'4' => '৪',
	'5' => '৫',
	'6' => '৬',
	'7' => '৭',
	'8' => '৮',
	'9' => '৯'
);

$namespaceNames = array(
	NS_MEDIA            => 'মিডিয়া',
	NS_SPECIAL          => 'বিশেষ',
	NS_TALK             => 'য়্যারী',
	NS_USER             => 'আতাকুরা',
	NS_USER_TALK        => 'আতাকুরার_য়্যারী',
	NS_PROJECT_TALK     => '$1_য়্যারী',
	NS_FILE             => 'ছবি',
	NS_FILE_TALK        => 'ছবি_য়্যারী',
	NS_MEDIAWIKI        => 'মিডিয়াউইকি',
	NS_MEDIAWIKI_TALK   => 'মিডিয়াউইকির_য়্যারী',
	NS_TEMPLATE         => 'মডেল',
	NS_TEMPLATE_TALK    => 'মডেলর_য়্যারী',
	NS_HELP             => 'পাংলাক',
	NS_HELP_TALK        => 'পাংলাকর_য়্যারী',
	NS_CATEGORY         => 'থাক',
	NS_CATEGORY_TALK    => 'থাকর_য়্যারী',
);

$messages = array(
# User preference toggles
'tog-underline'               => 'লিঙ্কর তলে দুরগ দিক:',
'tog-highlightbroken'         => 'বাগা লিঙ্ক অতারে<a href="" class="new">এসারে</a> দেখাদে (নাইলে: এসারে<a href="" class="internal">?</a>).',
'tog-justify'                 => 'অনুচ্ছেদহানির দুরগি দ্বিয়পারাদেত্ত মান্নাকরিক',
'tog-hideminor'               => 'হুরু পতানি গুর',
'tog-hidepatrolled'           => 'পরীক্ষাইসে পতা অতা হাদিএহানর পতানিত আরুম কর',
'tog-newpageshidepatrolled'   => 'পরীক্ষাইসে পতা অতা নুৱা পাতার লাতঙে আরুম কর',
'tog-extendwatchlist'         => 'হুদ্দা হাদি এহান পতাসি অতা নাবে, হাব্বি পতানি দেহাদেনার কা আহিরফঙে থসি তালিকাহান সালকরানি অক।',
'tog-usenewrc'                => 'হাব্বিত্ত ঙালসে পতানিহানি ব্যবহার কর (জাভাস্ক্রিপ্ট)',
'tog-numberheadings'          => 'নিজেলত্ত পাজালার চিঙনাঙ',
'tog-showtoolbar'             => 'পতানির আতিয়ার দেহাদে (জাভাস্ক্রিপ্ট)',
'tog-editondblclick'          => 'দ্বিমাউ যাতিয়া পতাহান পতিক (জাভাস্ক্রিপ্ট)',
'tog-editsection'             => '[পতিক] লিঙ্ক এহান্ন পরিচ্ছদ পতানি অক',
'tog-editsectiononrightclick' => 'পরিচ্ছদ পতানির য়্যাথাঙহান বাতেদের গোথামগ <br /> পরিচ্ছদর চিঙনাঙর গজে যাতিলে দে (জাভাস্ক্রিপ্ট)',
'tog-showtoc'                 => 'বিষয়র মাঠেলহানি দেহাদে (যে পাতারতা ৩হানর গজে চিঙনাঙ আসে)',
'tog-rememberpassword'        => 'কম্পিউটার এহাত মর লগইন নিঙশিঙে থ',
'tog-editwidth'               => 'আস্তা পর্দাহান বুজানিরকা পতানির বাক্সগ সালকর',
'tog-watchcreations'          => 'যে পতাহানি মি ইকরিসু অতা মর তালাবির তালিকাত থ',
'tog-watchdefault'            => 'যে পতাহানি মি পতাসু অতা মর তালাবির তালিকাত থ',
'tog-watchmoves'              => 'যে পতাহানি মি থেইকরিসু অতা মর তালাবির তালিকাত থ',
'tog-watchdeletion'           => 'যে পতাহানি মি পুসিসু অতা মর তালাবির তালিকাত থ',
'tog-minordefault'            => 'অকরাতই হাব্বি পতা ফাঙনেই বুলিয়া দেহাদে',
'tog-previewontop'            => 'পতা উপুগর গজে লেহার মিল্লেখ দেহাদে',
'tog-previewonfirst'          => 'পয়লা পতানিহাত মিল্লেখ দেহাদে',
'tog-nocache'                 => 'পাতা য়মকরানি থা নাদি',
'tog-enotifwatchlistpages'    => 'মরে ইমেইল কর যদি মর মিল্লেঙে থসু অতা পতিলে',
'tog-enotifusertalkpages'     => 'মরে ইমেইল কর যদি মর য়্যারির পাতা পতিলে',
'tog-enotifminoredits'        => 'মরে ইমেইল কর পাতা আহানর পতানিহান হুরু ইলেউ',
'tog-enotifrevealaddr'        => 'জানানি মেইল অতাত মর ইমেইলর ঠিকানাহান ফঙকর',
'tog-shownumberswatching'     => 'চাকুরার সংখ্যাহান দেহাদে',
'tog-oldsig'                  => 'স্বাক্ষরর আগচা:',
'tog-fancysig'                => 'স্বাক্ষরহানরে উইকিটেক্সট বুলিয়া নিংকর (নিজেত্ত লিঙ্ক নেইকরিয়া)',
'tog-externaleditor'          => 'পয়লাকাত্তই বারেদের পতানির আতিয়ার আতা',
'tog-externaldiff'            => 'পয়লাকাত্ত বারেদের ফারাকহান আতা',
'tog-showjumplinks'           => '"চঙদে" বুলতারা মিলাপর য়্যাথাঙদে',
'tog-uselivepreview'          => 'লগে লগে মিল্লেঙ আহান দেহাদে (জাভাস্ক্রিপ্ট) (লইনাসে)',
'tog-forceeditsummary'        => 'খালি পতা সারমর্ম হমিলে মরে হারপুৱাদে',
'tog-watchlisthideown'        => 'মি পতাসু অতা গুর মর তালাবিত্ত',
'tog-watchlisthidebots'       => 'বটল পতাসি অতা গুর মর তালাবিত্ত',
'tog-watchlisthideminor'      => 'হুরু করে পতাসি অতা গুর মর তালাবিত্ত',
'tog-watchlisthideliu'        => 'তালাবিত থুৱাসি পাতার মা হমাসি আতাকুরার পতানি গুর',
'tog-watchlisthideanons'      => 'তালাবিত থুৱাসি পাতার মা বেনাঙর আতাকুরার পতানি গুর',
'tog-watchlisthidepatrolled'  => 'পরীক্ষিত অসে পতা অতা তালাবিত থুৱাসি পাতার মা গুর',
'tog-nolangconversion'        => 'সারুকর সিলপা থেপকর',
'tog-ccmeonemails'            => 'আরতারে দিয়াপেঠাউরি ইমেইল মরাঙউ কপি আহান যাকগা',
'tog-diffonly'                => 'ফারাকর তলে পাতাহানর বিষয়বস্তু নাদেখাদি',
'tog-showhiddencats'          => 'আরুমে আসে থাকহানি ফংকর',
'tog-norollbackdiff'          => 'রোলব্যাকর পিসে ফারাক না দেখাদি',

'underline-always'  => 'হারি সময়',
'underline-never'   => 'সুপৌনা',
'underline-default' => 'বাউজারগত যেসারে আসিল',

# Font style option in Special:Preferences
'editfont-style'     => 'পতানি লয়ার ফন্ট স্টাইল:',
'editfont-default'   => 'ব্রাউজার ডিফল্ট',
'editfont-monospace' => 'মনোস্পেস ফন্ট',
'editfont-sansserif' => 'সেন্স-সেরিফ ফন্ট',
'editfont-serif'     => 'সেরিফ ফন্ট',

# Dates
'sunday'        => 'লামুইসিং',
'monday'        => 'নিংথৌকাপা',
'tuesday'       => 'লেইপাকপা',
'wednesday'     => 'ইনসাইনসা',
'thursday'      => 'সাকলসেন',
'friday'        => 'ইরেই',
'saturday'      => 'থাংচা',
'sun'           => 'লামু',
'mon'           => 'নিং',
'tue'           => 'লেই',
'wed'           => 'ইন',
'thu'           => 'সাকল',
'fri'           => 'ইরে',
'sat'           => 'থাং',
'january'       => 'জানুয়ারী',
'february'      => 'ফেব্রুয়ারী',
'march'         => 'মার্চ',
'april'         => 'এপ্রিল',
'may_long'      => 'মে',
'june'          => 'জুন',
'july'          => 'জুলাই',
'august'        => 'আগস্ট',
'september'     => 'সেপ্টেম্বর',
'october'       => 'অক্টোবর',
'november'      => 'নভেম্বর',
'december'      => 'ডিসেম্বর',
'january-gen'   => 'জানুয়ারী',
'february-gen'  => 'ফেব্রুয়ারী',
'march-gen'     => 'মার্চ',
'april-gen'     => 'এপ্রিল',
'may-gen'       => 'মে',
'june-gen'      => 'জুন',
'july-gen'      => 'জুলাই',
'august-gen'    => 'আগষ্ট',
'september-gen' => 'সেপ্টেম্বর',
'october-gen'   => 'অক্টোবর',
'november-gen'  => 'নভেম্বর',
'december-gen'  => 'ডিসেম্বর',
'jan'           => 'জানু',
'feb'           => 'ফেব্রু',
'mar'           => 'মার্চ',
'apr'           => 'এপ্রিল',
'may'           => 'মে',
'jun'           => 'জুন',
'jul'           => 'জুলাই',
'aug'           => 'আগস্ট',
'sep'           => 'সেপ্টে',
'oct'           => 'অক্টো',
'nov'           => 'নভে',
'dec'           => 'ডিসে',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|থাক|থাকহানি}}',
'category_header'                => '"$1" বিষয়রথাকে আসে নিবন্ধহানি',
'subcategories'                  => 'উপথাক',
'category-media-header'          => '"$1" থাকর মিডিয়া',
'category-empty'                 => "''এরে থাক এহাত এবাকা কোন পাতা বা মিডিয়া নেই''",
'hidden-categories'              => '{{PLURAL:$1|গুরিসি থাকহান|গুরিসি থাকহানি}}',
'hidden-category-category'       => 'আরুম করিসি থাকহানি',
'category-subcat-count'          => '{{PLURAL:$2|এরে বিষয়থাকে হুদ্দা তলর উপবিষয়থাকহানি আসে।|এরে বিষয় থাকে তিলসে মোট $2হান উপবিষয়থাকর মা  {{PLURAL:$1|হান উপবিষয়থাক|$1হান উপবিষয়থাক}} তলে দেহানি ইল।}}',
'category-subcat-count-limited'  => 'এরে বিষয়থাকে তলর {{PLURAL:$1|হান উপবিষয়থাক|$1হান উপবিষয়থাক আসে}}',
'category-article-count'         => '{{PLURAL:$2|এরে বিষয়থাকে হুদ্দা তলর পাতাহান আসে।|এরে বিষয়থাকে তিলসে মোট $2হান পাতার মা {{PLURAL:$1|হান পাতা|$1হান পাতা}} তলে দেখাদেনা ইল।}}',
'category-article-count-limited' => 'এরে {{PLURAL:$1|পাতাহান|$1 পাতাহানি}} এরে বিষয়থাকে আসে।',
'category-file-count'            => '{{PLURAL:$2|এরে বিষয়থাকে হুদ্দা তলর ফাইলগ আসে।|এরে বিষয়থাকে তলে {{PLURAL:$1|গ ফাইল|$1 গি ফাইল}} আসে, হাবিয়ে $2 গর মা।}}',
'category-file-count-limited'    => 'তলে {{PLURAL:$1|গ ফাইল|$1 গি ফাইল}} এরে বিষয়থাকে আসে।',
'listingcontinuesabbrev'         => 'চলতই',
'index-category'                 => 'ইনডেক্স করিসি পাতাহানি',
'noindex-category'               => 'ইনডেক্স নাকরিসি পাতাহানি',

'mainpagetext'      => "<big>'''মিডিয়াউইকি হবাবালা ইয়া ইন্সটল ইল.'''</big>",
'mainpagedocfooter' => 'উইকি সফটৱ্যার এহান আতানির বারে দরকার ইলে [http://meta.wikimedia.org/wiki/Help:Contents আতাকুরার গাইড]হানর পাঙলাক নেগা।

== অকরানিহান ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings কনফিগারেশন সেটিংর তালিকাহান]
* [http://www.mediawiki.org/wiki/Manual:FAQ মিডিয়া উইকি আঙলাক]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce মিডিয়া উইকির ফঙপার বারে মেইলর তালিকাহান]',

'about'         => 'বারে',
'article'       => 'মেথেলর পাতা',
'newwindow'     => '(নুৱা উইন্ডত নিকুলতই)',
'cancel'        => 'বাতিল করেদে',
'moredotdotdot' => 'আরাকউ...',
'mypage'        => 'মর পাতাহান',
'mytalk'        => 'মর য়্যারি-পরি',
'anontalk'      => 'অচিনা এগর য়্যারির পাতা',
'navigation'    => 'দিশা-ধরুনী',
'and'           => '&#32;বারো',

# Cologne Blue skin
'qbfind'         => 'বিসারিয়া চা',
'qbbrowse'       => 'বুলিয়া চা',
'qbedit'         => 'পতানি',
'qbpageoptions'  => 'পাতা এহানর সারুক',
'qbpageinfo'     => 'পাতা এহানর পৌ',
'qbmyoptions'    => 'মর পছন',
'qbspecialpages' => 'বিশেষ পাতাহানি',
'faq'            => 'আঙলাক',
'faqpage'        => 'Project:আঙলাক',

# Vector skin
'vector-action-addsection'   => 'বিষয় তিলকর',
'vector-action-delete'       => 'পুসে বেলা',
'vector-action-move'         => 'থেইকর',
'vector-action-protect'      => 'লুকর',
'vector-action-undelete'     => 'নাপুসি',
'vector-action-unprotect'    => 'নালুকরি',
'vector-namespace-category'  => 'বিষয়র থাক',
'vector-namespace-help'      => 'পাঙলাক পাতা',
'vector-namespace-image'     => 'ফাইল',
'vector-namespace-main'      => 'পাতা',
'vector-namespace-media'     => 'মিডিয়া পাতা',
'vector-namespace-mediawiki' => 'পৌ',
'vector-namespace-project'   => 'প্রকল্প পাতা',
'vector-namespace-special'   => 'বিশেষ পাতা',
'vector-namespace-talk'      => 'য়্যারি',
'vector-namespace-template'  => 'মডেল',
'vector-namespace-user'      => 'আতাকুরার পাতা',
'vector-view-create'         => 'হঙকরিক',
'vector-view-edit'           => 'পতানি',
'vector-view-history'        => 'ইতিহাস চেইক',
'vector-view-view'           => 'পাকরিক',
'vector-view-viewsource'     => 'সোর্স চেইক',
'actions'                    => 'কার্যক্রম',
'namespaces'                 => 'নাঙরলাম',
'variants'                   => 'ভেরিয়েন্টহানি',

# Metadata in edit box
'metadata_help' => 'মেটাডাটা:',

'errorpagetitle'    => 'লাল',
'returnto'          => '$1-ত আলথকে যাগা।',
'tagline'           => 'মুক্ত বিশ্বকোষ উইকিপিডিয়াত্ত',
'help'              => 'পাংলাক',
'search'            => 'বিসারিয়া চা',
'searchbutton'      => 'বিসারানি',
'go'                => 'হাত',
'searcharticle'     => 'হাত',
'history'           => 'পতাহানর ইতিহাসহান',
'history_short'     => 'ইতিহাসহান',
'updatedmarker'     => 'লমিলগা চানাহাত্ত বদলিসেতা',
'info_short'        => 'পৌ',
'printableversion'  => 'ছাপানি একরব সংস্করণ',
'permalink'         => 'আকুবালা মিলাপ',
'print'             => 'ছাপা',
'edit'              => 'পতানি',
'create'            => 'হঙকর',
'editthispage'      => 'পাতা এহান পতিক',
'create-this-page'  => 'পাতা এহান হঙকর',
'delete'            => 'পুসানি',
'deletethispage'    => 'পাতা এহান পুসে বেলিক',
'undelete_short'    => 'পুসানিহান আলকর {{PLURAL:$1|পতাহান|$1 পতাহানি}}',
'protect'           => 'লুকর',
'protect_change'    => 'সিলকর',
'protectthispage'   => 'পাতা এহান লু কর',
'unprotect'         => 'লু নাকরি',
'unprotectthispage' => 'পাতা এহানর লুপাহান এরাদিক',
'newpage'           => 'নুৱা পাতা',
'talkpage'          => 'পাতা এহান্ন য়্যারি দিক',
'talkpagelinktext'  => 'য়্যারি',
'specialpage'       => 'বিশেষ পাতাহান',
'personaltools'     => 'নিজস্ব আতিয়ার',
'postcomment'       => 'নুৱা অনুচ্ছেদহান',
'articlepage'       => 'নিবন্ধ চেইক',
'talk'              => 'য়্যারী',
'views'             => 'চা',
'toolbox'           => 'আতিয়ার',
'userpage'          => 'আতাকুরার পাতাহান চেইক',
'projectpage'       => 'প্রকল্পর পাতাহান',
'imagepage'         => 'ফাইলর পাতাহান চেইক',
'mediawikipage'     => 'পৌর পাতাহান চা',
'templatepage'      => 'মডেলর পাতাহান চা',
'viewhelppage'      => 'পাঙলাকর পাতাহান চা',
'categorypage'      => 'বিষয়থাকর পাতাহানি চা',
'viewtalkpage'      => 'য়্যারীর পাতাহান চেইক',
'otherlanguages'    => 'আরআর ঠারে',
'redirectedfrom'    => '($1 -ত্ত পাকদিয়া আহিল)',
'redirectpagesub'   => 'কুইপা পাতা',
'lastmodifiedat'    => 'পাতা এহানর লমিলগা পতানিহান $2, $1.',
'viewcount'         => 'পাতা এহান {{PLURAL:$1|মাউ|$1 মাউ}} চানা ইল।',
'protectedpage'     => 'লুকরা পাতা',
'jumpto'            => 'চঙদে:',
'jumptonavigation'  => 'দিশা ধরানি',
'jumptosearch'      => 'বিসারা',
'view-pool-error'   => 'ঙাক্করবাং, সার্ভারগ এপাগা ওভারলোড অসে।
আবকচা চাকুরাই আকপাকে চেইতারা।
ডান্ড আহান বাসা পাতা এহান মেলানির কা।

$1',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}}র বারে',
'aboutpage'            => 'Project:বারে',
'copyright'            => '$1-র মাতুঙে এহানর মেথেলহানি পানা একরের।',
'copyrightpage'        => '{{ns:project}}:স্বত্তাধিকারহানি',
'currentevents'        => 'হাদি এহানর ঘটনা',
'currentevents-url'    => 'Project:হাদি এহানর ঘটনাহানি',
'disclaimers'          => 'দাবি বেলানি',
'disclaimerpage'       => 'Project:ইজ্জু দাবি বেলানি',
'edithelp'             => 'পতানি পাংলাক',
'edithelppage'         => 'Help:কিসাদে_পাতা_আহান_পতানি',
'helppage'             => 'Help:পাংলাক',
'mainpage'             => 'পয়লা পাতা',
'mainpage-description' => 'পয়লা পাতা',
'policy-url'           => 'Project:নীতিহান',
'portal'               => 'শিংলুপ',
'portal-url'           => 'Project:শিংলুপ',
'privacy'              => 'লুকরানির নীতিহান',
'privacypage'          => 'Project:লুকরানির নীতিহান',

'badaccess'        => 'য়্যাথাঙে লালসে',
'badaccess-group0' => 'তি যে কামহানর হেইচা করিসত, তরতা অহান করানির য়্যাথাং নেই।',
'badaccess-groups' => 'তি যে কামহানর হেইচা করিসত, অহান হুদ্দা {{PLURAL:$2|দল এহানর|দলহানির যেকোন আহারতা}} করানির য়্যাথাং গ্রুপরতা আসে: $1।',

'versionrequired'     => 'মিডিয়াউইকির $1 সংস্করণহান দরকার',
'versionrequiredtext' => 'এরে পাতা এহান ব্যবহারর কা মিডিয়াউইকির $1 নং সংস্করণহান দরকার। [[Special:Version|সংস্করণ পাতা]] চা।',

'ok'                      => 'চুমিসে',
'retrievedfrom'           => "'$1' -ত্ত আনানি অসে",
'youhavenewmessages'      => 'তরতা $1 ($2) আসে।',
'newmessageslink'         => 'নুৱা পৌ',
'newmessagesdifflink'     => 'গেলগা সিলপা',
'youhavenewmessagesmulti' => 'তরতা নুৱা পৌ $1হান আহিসে',
'editsection'             => 'পতিক',
'editold'                 => 'পতিক',
'viewsourceold'           => 'উৎস চা',
'editlink'                => 'পতানি',
'viewsourcelink'          => 'উৎস চা',
'editsectionhint'         => 'সেকসনহান পতা: $1',
'toc'                     => 'মেথেল',
'showtoc'                 => 'ফংকর',
'hidetoc'                 => 'মেথেল আরুম কর',
'thisisdeleted'           => '$1 দেহাদে নাইলে বারো হঙকর?',
'viewdeleted'             => '$1 দেহাদে?',
'restorelink'             => '{{PLURAL:$1|পতা আহান পুসিসি|$1হান পতা পুসিসি}}',
'feedlinks'               => 'ফিড:',
'feed-invalid'            => 'গ্রাহক ফিডর অংতাহান চুম নাইসে।',
'feed-unavailable'        => 'সিন্ডিকেশন ফিড পানা নাইব',
'site-rss-feed'           => '$1 আরএসএস ফিড',
'site-atom-feed'          => '$1 এটম ফিড',
'page-rss-feed'           => '"$1" আরএসএস ফিড',
'page-atom-feed'          => '"$1" অ্যাটম ফিড',
'red-link-title'          => '$1 (পাতা নেই)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'নিবন্ধ',
'nstab-user'      => 'আতাকুরার পাতা',
'nstab-media'     => 'মিডিয়া পাতা',
'nstab-special'   => 'বিশেষ পাতাহান',
'nstab-project'   => 'প্রকল্প পাতা',
'nstab-image'     => 'ফাইল',
'nstab-mediawiki' => 'পৌ',
'nstab-template'  => 'মডেল',
'nstab-help'      => 'পাঙলাকর পাতা',
'nstab-category'  => 'থাক',

# Main script and global functions
'nosuchaction'      => 'এসাদে কোন কাম নেই',
'nosuchactiontext'  => 'এরে ইউআরএল-র লেপকরা কামহান লালুইসে।
তি হয়ত চুমনাইসে লিঙ্ক দিয়াসত নাইলে ইউআরএল লিখানিত লাল করিসত।
এহান এসাদেউ মাতের যে {{SITENAME}}-ত ব্যবহার অসে সফটওয়্যারহানাত লালুইসে।',
'nosuchspecialpage' => 'এসাদে কোন বিশেষ পাতা নেই',
'nospecialpagetext' => '<strong>তি অবৈধ পাতা আহানর কা হেইচা করিসত।</strong>

[[Special:SpecialPages|{{int:specialpages}}]]-এহানাত বৈধ পাতার লাতঙগ পেইতেই।',

# General errors
'error'                => 'লালুইসে',
'databaseerror'        => 'ডাটাবেসর লাল',
'laggedslavemode'      => "'''সিঙুইস:''' পাতা এহানাত হাদি এহানার পতানি নেই।",
'readonly'             => 'ডাটাবেস গাথি লাগিসে',
'missing-article'      => '"$1" $2 লেখাহান ডাটাবেজর কোন পাতাত বিসারিয়া নাপেইলাঙ।

পুসে বেলাসি পাতাত মিলাপ থাইলেই এসারে অরতা।

যদি এসারে নায়া থার, তি সফটওয়্যারর কোন লাল বিসারিয়া পা থাইবে।
দয়াকরিয়া এ ব্যাপার এহান ইউআরএল সহ কোন [[Special:ListUsers/sysop|প্রশাসকরে]] হারপুৱাদে।',
'missingarticle-rev'   => '(সংস্করণ#: $1)',
'missingarticle-diff'  => '(পার্থক্য: $1, $2)',
'internalerror'        => 'বিতরর লাল',
'internalerror_info'   => 'ভিতরর লাল: $1',
'fileappenderror'      => '"$1" লগে "$2" মিল করানি নাইল।',
'filecopyerror'        => '"$1" ত্ত "$2" ফাইল কপি করানি নুৱারলাং',
'filerenameerror'      => '"$1" ফাইলগর নাঙহান সিলকরিয়া "$2" থনা নাইল।',
'filedeleteerror'      => '"$1" ফাইলগ পুসানি সম্ভব নাইল।',
'directorycreateerror' => '"$1" ডাইরেক্টরিহান হঙকরানি নাইল।',
'filenotfound'         => '"$1" ফাইলগ বিসারিয়া নাপেইলাং।',
'fileexistserror'      => '"$1" ফাইলগত লেহানি নুৱারলু: ফাইলগ আগেত্তই আসে',
'unexpected'           => 'মানহান লালুইসে: "$1"="$2"।',
'formerror'            => 'লাল: ফরমহান জমা দেনা নাইল',
'badarticleerror'      => 'এরে পাতা এহান কাম এহান করানি সম্ভব নেই।',
'cannotdelete'         => '"$1" নাঙর ফাইলগ/পাতাহান পুসানি নাইল।
এহান হয়ত আরাক আগই পুসে বেলাসি সাত।',
'badtitle'             => 'চিঙনাঙহান চুমনাইসে নাইসে।',
'badtitletext'         => 'হেইচা করিসত পাতাহানর চিঙনাঙহান চুম নাইসে, খালি বা আর ঠার বা আন্তঃউইকি চিঙনাঙ মিলাপ অসিল। হয়ত এহানত আক বারো গজে কোন আখর মিহিসে, যেতা চিঙনাঙে বরানি লালুইসে।',
'viewsource'           => 'উৎসহান চা',
'viewsourcefor'        => '$1-র কা',
'actionthrottled'      => 'কামর গতিহান তাপকরানি',
'viewsourcetext'       => 'পাতা এহানর উত্স চা বারো কপি করে পারর:',
'protectedinterface'   => 'পাতা এহানর মেথেল উইকি সফটওয়্যারর ইন্টারফেসর পৌহান দের, অহানে এহানরে ইতু করিয়া থনা অসে এবিউসেত্ত ঙাক্করানির কাজে।',
'namespaceprotected'   => "'''$1''' নাঙর থাকে কোন পাতা পতানিরকা তরতা য়্যাথাং নেই।",
'customcssjsprotected' => 'এর পাতা এহান পতানিরকা তরতা য়্যাথাং নেই, কিদিয়া বুল্লে আরাক আতাকুরা আগর ব্যক্তিগত বিষয়ররবস্তু আসে।',
'ns-specialprotected'  => '{{ns:special}} নাঙর থাকে কোন পাতা পতানি নাইব।',

# Login and logout pages
'welcomecreation'            => '==সম্ভাষা, $1! ==
তর একাউন্টহান হঙিল। তর [[Special:Preferences|{{SITENAME}} পছনহান]] সিলানি না পাহুরিস।',
'yourname'                   => 'আতাকুরার নাংহান (Username)',
'yourpassword'               => 'খন্তাচাবিগ (password)',
'yourpasswordagain'          => 'খন্তাচাবিগ (password) আরাকমু ইকর',
'remembermypassword'         => 'এরে কম্পিউটার এহাত্ত সাইট এহাত মর হমানিহান মনে থ',
'yourdomainname'             => 'তর ডোমেইনগ',
'login'                      => 'হমানি',
'nav-login-createaccount'    => 'লগইন / একাউন্ট খুল',
'loginprompt'                => 'তি যেসাদেউ হমাসি {{SITENAME}} পাতা এহানর কুকিসর য়্যাথাঙ দে।',
'userlogin'                  => 'হমানি / নৱা একাউন্ট খুলানি',
'logout'                     => 'নিকুলানি',
'userlogout'                 => 'নিকুলানি',
'notloggedin'                => 'তি লগ-ইন নাকরিসত',
'nologin'                    => 'তরতা একাউন্টহান নেই থাং? $1',
'nologinlink'                => 'একাউন্ট আহান খুল',
'createaccount'              => 'একাউন্ট খুল',
'gotaccount'                 => "মান্নাপা একাউন্ট আহান আগেত্তর আসে? '''$1'''।",
'gotaccountlink'             => 'লগইন',
'createaccountmail'          => 'ই-মেইলন',
'badretype'                  => 'খন্তাচাবি (password) দ্বিয়গি না মিলের।',
'loginerror'                 => 'লগইনে লালুইসে',
'loginsuccesstitle'          => 'লগইনহান চুমিল',
'loginsuccess'               => "'''এরে {{SITENAME}}ত তি \"\$1\" হিসাবে না হমাসত।'''",
'nosuchuser'                 => 'এরে "$1" নাঙর কোন আতাকুরা নেই।
তর বানানহান খিয়াল কর, নাইলে আরাক আহান হঙকর।',
'nosuchusershort'            => 'এরে "<nowiki>$1</nowiki>" নাঙর কোন আতাকুরা নেই।
তর বানানহান খিয়াল কর।',
'nouserspecified'            => 'তি আতাকুরার নাঙ আহান থনা লাগতই।',
'wrongpassword'              => 'খন্তাচাবি চুম নাইসে।
আলথকে হতনা কর।',
'wrongpasswordempty'         => 'খন্তা চাবি খালি ইসে।
বারো হতনা কর।',
'passwordtooshort'           => 'খন্তাচাবি লালুইসে নাইলে বাট্টি ইসে।
খন্তাচাবি যেসারেউ {{PLURAL:$1|মেয়েক আকগর|$1 মেয়েকগির}} বারো আতাকুরার নাঙেত্ত তঙাল অনা লাগতই।',
'mailmypassword'             => 'নুৱা খন্তাচাবি ইমেইল করেদে',
'passwordremindertitle'      => 'নুয়া খন্তাচাবি {{SITENAME}}র কাজে',
'passwordremindertext'       => 'কুঙগ আগই (মনে অর তি, $1 আইপি ঠিকানা এহাত্ত) হেইচা করিসত যে আমি তরে {{SITENAME}}-র কা আরাক নুৱা খন্তাচাবি দিয়া পেঠাদেনা ($4)।
"$2" নাঙর আতাকুরার এপাগার খন্তাচাবি "$3"।
তি একাউন্টহান হমিয়াই খন্তাচাবি বদালানি থকিতই।

তি নায়া আরাক আগই হেইচা করিয়া থাইতারা, নাইলে তরতা পুরানা খন্তাচাবিগ নিঙশিঙ ইয়া থার অতাইলে বারো অগ সিলকরানির খৌরাঙ না থার অতা ইলে এরে পৌ এহান বেলিয়া পুরানা খন্তাচাবিগই আতা পারতেই।',
'noemail'                    => 'এহানাত আতাকুরা "$1"র কুন ইমেল ঠিকানা নেয়সে।',
'passwordsent'               => 'নুৱা খন্তাচাবি দিয়াপেঠানি ইল আতাকুরা "$1"র ইমেইল ঠিকানাত।
কৃপা করিয়া লগইন কর পানার লগে লগে।',
'eauthentsent'               => 'লেপ্পা ইমেইল আহান তি দিয়াসিলে ইমেইল ঠিকানাহাত দিয়া পেঠানি ইল।
আর কোন ইমেইল দিয়া এপঠানির আগেই তি পাসত ইমেইল অহানর নিদর্শনা ইলয়া যাগা, এহান করানি অরতা তর ইমেইল ঠিকানাহান চুমিসেতানা কিতা লেপকরানির কা।',
'acct_creation_throttle_hit' => 'ঙাক্করেদিবাং, তি এবাকাপেয়া $1হান অ্যাকাউন্ট হংকরেবেলাসত৷ অতাত্ত বপ হঙকরানির য়্যাথাং নেই।৷',
'accountcreated'             => 'একাউন্টহান হঙকরানি ইল',
'accountcreatedtext'         => 'আতাকুরা $1 -র কা একাউন্টহান হঙকরানি ইল।',
'createaccount-title'        => '{{SITENAME}}-র কা অ্যাকাউন্ট হঙকরানি',
'loginlanguagelabel'         => 'ঠার: $1',

# Password reset dialog
'resetpass'        => 'খন্তাচাবি সিলকরানি',
'resetpass_header' => 'খন্তাচাবি সিলকর',
'oldpassword'      => 'পুরানা খন্তাচাবি:',
'newpassword'      => 'নুৱা খন্তাচাবি:',
'retypenew'        => 'নুৱা খন্তাচাবি বারো টাইপ কর:',

# Edit page toolbar
'bold_sample'     => 'গাঢ়পা ৱাহি',
'bold_tip'        => 'গাঢ়পা ৱাহি',
'italic_sample'   => 'ইটালিক মেয়েক',
'italic_tip'      => 'ইটালিক মেয়েক',
'link_sample'     => 'চিঙনাঙ মিলাপ',
'link_tip'        => 'ভিতরর মিলাপ',
'extlink_sample'  => 'http://www.example.com চিঙনাঙ মিলাপ',
'extlink_tip'     => 'বারেদের মিলাপ (মুঙে http:// বারনি না পাহুরিস)',
'headline_sample' => 'চিঙনাঙর খন্তাহানি',
'headline_tip'    => 'থাক ২র চিঙনাঙ',
'math_sample'     => 'এহাত সুত্র বরা',
'math_tip'        => 'অংকর সুত্র (LaTeX)',
'nowiki_sample'   => 'ফরমেট নাকরিসি মেয়েক বরা',
'nowiki_tip'      => 'উইকির পাজালানিহান লালুয়া যাগা',
'image_tip'       => 'তিলকরিসি ফাইলগ',
'media_tip'       => 'ফাইল মিলাপ',
'sig_tip'         => 'তর স্বাক্ষরহান লগে খেন্তাম বরিয়া',
'hr_tip'          => 'পাথারি খাস (খানি করা ইয়া আতা)',

# Edit pages
'summary'                          => 'সারমর্ম:',
'subject'                          => 'বিষয়/চিঙনাঙ:',
'minoredit'                        => 'এহান হুরু-মুরু সম্পাদনাহানহে।',
'watchthis'                        => 'পাতাএহান খিয়ালে থ',
'savearticle'                      => 'পাতাহান ইতুকর',
'preview'                          => 'আগচা',
'showpreview'                      => 'আগচা',
'showdiff'                         => 'পতাসিতা দেহাদে',
'anoneditwarning'                  => "'''সিঙুইসঃ''' তি লগইন নাকরিসত। পতানির ইতিহাসহাত তর IP addressহান সিজিল ইতই।",
'summary-preview'                  => 'সারমর্মর আগচা:',
'blockedtitle'                     => 'আতাকুরাগরে থেপ করানি অসে',
'blockedtext'                      => "<big>'''তর আতাকুরা নাঙহান নাইলেউ আইপি ঠিকানাহানরে থেপকরানি অসে।'''</big>

থেপকরিসেতাই: $1
এহানর কারণহান অসেতাইঃ: ''$2''

* থেপকরানি অকরিসিতা: $8
* থেপকরানিহান লমিতইতা: $6
* থেপকরানি মনাসিলাতা: $7

তি $1 নাইলেউ [[{{MediaWiki:Grouppage-sysop}}|প্রশাসকর]] মা যে কোন আগর লগে বিষয় এহান্ন য়্যারি পরি দে পারর। বিশেষ মাতিলতাঃ তর ই-মেইল ঠিকানাহান যদি [[Special:Preferences|তর পছন তালিকাত]] বরিয়া নাথার, অতা ইলে তি উইকিপিডিয়াত হের আতাকুরারে ই-মেইল করানি নুৱারবে। তর আইপি ঠিকানাহান ইলতাই $3 বারো থেপকরিসি আইপিগ ইলতাই #$5। 
কৃপা করিয়া যে কোন যোগাযোগর সময়ত এরে আইপি ঠিকানাহানি যেসাদেউ বরিস।",
'blockednoreason'                  => 'কোন কারণ দেনা নাইসে',
'confirmedittext'                  => 'যেহানউ সম্পাদনা করানির আগে তর ই-মেইল ঠিকানাহন যেসাদেউ লেপকরানি লাগতই। কৃপাকরিয়া তর ই-মেইল ঠিকানাহান [[Special:Preferences|আতাকুরার পছনতালিকা]]ত চুমকরে বরা।',
'loginreqtitle'                    => 'লগইন দরকার ইসে',
'loginreqlink'                     => 'লগ-ইন',
'accmailtitle'                     => 'খন্তাচাবি(password) দিয়াপেঠৱা দিলাং।',
'accmailtext'                      => '"$1"-র খন্তাচাবি(password) $2-রাঙ দিয়াপেঠৱাদেনা ইল।',
'newarticle'                       => '(নুৱা)',
'newarticletext'                   => 'তি বিসারার মিলাপ অহান নেয়সে।
তি চেইলে তলর বক্সগত বিষয়হানর বারে খানি ইকরিয়া ইতুকরে পারর বারো নিবন্ধহান অকরে পারর (আরাকউ হারপানিরকা [[{{MediaWiki:Helppage}}|পাঙলাক পাতা]] চা) পারর। 
যদি হারনাপেয়া এহাত আহিয়া থার অতা ইলে ব্রাউজারর ব্যাক গুতমগত ক্লিক করিয়া আগর পাতাত আল পারর।',
'anontalkpagetext'                 => "''এহান অচিনা অতার য়্যারির পাতাহান। এরে আইপি ঠিকানা (IP Address) এহানাত্ত লগ-ইন নাকরিয়া পতানিত মেইক্ষু অসিল। আক্কুস ক্ষেন্তামে আইপি ঠিকানা হামেসা বদল অর, বিশেষ করিয়া ডায়াল-আপ ইন্টারনেট, প্রক্সি সার্ভার মাহি ক্ষেত্র এতা সিলরতা, বারো আগত্ত বপ ব্যবহারকারেকুরার ক্ষেত্রত প্রযোজ্য ইতে পারে। অহানে তি নিশ্চকে এরে আইপি এহাত্ত উইকিপিডিয়াত হমিয়া কোন য়্যারী দেখর, অহান তরে নিঙকরিয়া নাউ ইতে পারে। অহানে হাবিত্ত হবা অর, তি যদি [[Special:UserLogin|লগ-ইন করর, বা নৱা একাউন্ট খুলর]] অহানবুলতেউ লগ-ইন করলে কুঙগউ তর আইপি ঠিকানাহান, বারো অহানর মাতুঙে তর অবস্থানহান সুপকরেউ হার না পেইবা।''",
'noarticletext'                    => 'এপাগা এরে পাতাত কোন লেখা নেই। তি মনেইলে হের পাতাহান [[Special:Search/{{PAGENAME}}|এরে চিঙনাঙল বিসারা পারর]], <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{urlencode:{{FULLPAGENAME}}}}}} এহানর বারে লগ বিসারা পারর], নাইলে [{{fullurl:{{FULLPAGENAME}}|action=edit}} এরে পাতা এহান পতা পারর।]',
'clearyourcache'                   => "'''খিয়াল থ:''' তর পছনহানি রক্ষা করানির থাঙনাত পতাহানি চানার কা তর ব্রাউজারর ক্যাশ লালুয়া যানা লাগতে পারে। '''মোজিলা/ফায়ারফক্স/সাফারি:''' শিফট কী চিপিয়া থয়া রিলোড-এ ক্লিক কর, নাইলে ''কন্ট্রোল-শিফট-R''(এপল ম্যাক-এ ''কমান্ড-শিফট-R'') আকপাকে চিপা; '''ইন্টারনেট এক্সপ্লোরার:''' ''কন্ট্রোল'' চিপিয়া থয়া রিফ্রেশ-এ ক্লিক কর, নাইলে ''কন্ট্রোল-F5'' চিপা; '''কংকারার:''' হুদ্দা রিলোড ক্লিক করলে বা F5 চিপিলে চলতই; '''অপেরা''' আতাকুরাই ''Tools→Preferences''-এ গিয়া কাশ সম্পূর্ণ ঙক্ষি করানি লাগতে পারে।",
'previewnote'                      => "'''এহান হুদ্দা আগচাহান;
ফারাকহান এপাগাউ ইতু করানি নাইসে!'''",
'editing'                          => 'পতানি চলের $1',
'editingsection'                   => '$1র পতানি চলের (ডেংগ)',
'yourtext'                         => 'তর ইকরা বিষয়হানি',
'yourdiff'                         => 'ফারাকহানি',
'copyrightwarning'                 => "দয়া করিয়া খিয়াল কর {{SITENAME}}-ত হারি অবদান $2-র মাতুঙে পাসিতা (আরাকউ হবাকরে $1-ত চা)। তর জমা দিয়াসত লেখা যেগউ বে-রিদয় ইয়া পতিতে পারে বারো যেসারে খুশি অসারে বিলিতে পারে। তি যদি এহানর বারে একমত নার, অতা ইলে তর লেখা এহাত জমা নাদি।<br />
তি আরাকউ ৱাশাক করর যে, এরে লেখা এহান তি নিজে ইকিসতহান, নাইলে  হাব্বির কা উন্মুক্ত কোন উৎস আহাত্ত পাসতহান।
'''স্বত্ব সংরক্ষিত অসে অসাদে কোন লেখা স্বত্বাধিকারীর য়্যাথাঙ না লুইয়া এহাত জমা না দিস!'''",
'longpagewarning'                  => "'''সিঙুইস: এরে পাতা এহান $1 কিলোবাইট ডাঙর; ব্রাউজার আকেইগত ৩২ কিলোবাইটর গজে ডাঙর পাতানিত বেরা ইতে পারে।
দয়া করিয়া পাতা এহানরে হুরকা হুরকা কত অংশত খেইকরানির হতনা কর।'''",
'templatesused'                    => 'পাতাহাত বরাসি {{PLURAL:$1|মডেল|মডেলহানি}}:',
'templatesusedpreview'             => 'আগচা এহানাত মিহিসে {{PLURAL:$1|মডেল|মডেলহানি}}:',
'template-protected'               => '(লুকরিসি)',
'template-semiprotected'           => '(আধা-কাচা লুকরিসি)',
'hiddencategories'                 => 'এ পাতা এহান যে {{PLURAL:$1|১ নাফঙিসে বিষয়থাকর|$1 নাফঙিসে বিষয়থাকহানির}} সদস্য:',
'nocreatetext'                     => '{{SITENAME}}-এরে নুৱা পাতা এহানর পতানিহানাত থিতপা আসে।
তি আলথকে গিয়া আসে হের পাতা সিলকরানি পারর, নাইলে [[Special:UserLogin|অ্যাকাউন্টহানাত হমানি বারো অ্যাকাউন্ট খুলে পারর]]।',
'permissionserrorstext-withaction' => 'তরতা $2 -ত য়্যাথাং নেই, অহানর {{PLURAL:$1|কারণ|কারণহানি}}:',
'recreate-moveddeleted-warn'       => "'''সিঙুইস: তি যে পাতাহান হঙকরলে অহান আগে পুসানি অসিল।

পাতা এহান তি আরাতা হঙকরতেইতানা কিতা খালকরিয়া চা।
তর সুবিধারকা পাতা এহানর পুসিসি লগ এহানাত দেনা ইল:",

# History pages
'viewpagelogs'           => 'পাতাহানর লগ চা',
'currentrev'             => 'হাদিএহানর পতানি',
'currentrev-asof'        => '$1র মাতুঙে এবাকার সংস্করণহান',
'revisionasof'           => 'রিভিসনহান $1 পেয়া',
'revision-info'          => '$1 পেয়া  $2-এ পতাসেতা',
'previousrevision'       => '←পুরানা পতানিহান',
'nextrevision'           => 'নুৱা ভার্সনহান→',
'currentrevisionlink'    => 'হাদি এহানর পতানি',
'cur'                    => 'এপাগা',
'last'                   => 'লাতঙ',
'page_first'             => 'পয়লাকা',
'page_last'              => 'লমনিত',
'histlegend'             => 'ফারাক (Diff) বাছানি: যে সংস্করণহানি তুলনা করানি চার, অহান লেপকরিয়া এন্টার বা তলর খুথামগত যাতা।<br />
নির্দেশিকা: (এব) = এবাকার সংস্করণহানর লগে ফারাক,(আ) =  জানে আগে-আগে গেলগা সংস্করণহানর লগে ফারাক, হ = হুরু-মুরু (নামাতলেউ একরব অসারে) সম্পাদনাহান।',
'history-fieldset-title' => 'ইতিহাসহান ব্রাউজ কর',
'histfirst'              => 'হাব্বিত্ত পুরানা',
'histlast'               => 'হাব্বিত্ত নুৱা',

# Revision feed
'history-feed-item-nocomment' => '$1 খেন্তাম $2 ত',

# Revision deletion
'rev-delundel'               => 'ফঙ/আরুম কর',
'rev-showdeleted'            => 'দেহাদে',
'revdelete-show-file-submit' => 'হায়',
'revdel-restore'             => 'দৃষ্টিপাত সিলকর',
'pagehist'                   => 'পাতার ইতিহাসহান',
'deletedhist'                => 'ইতিহাসহান পুস',
'revdelete-content'          => 'বিষয়বস্তু',
'revdelete-summary'          => 'সারাংশ পতানি',
'revdelete-uname'            => 'আতাকুরা',
'revdelete-reasonotherlist'  => 'আরাক কারণ',

# History merging
'mergehistory-reason' => 'কারণ:',

# Merge log
'mergelog'    => 'সুপকরানির লগ',
'revertmerge' => 'মিলাপ নাকরি',

# Diffs
'history-title'           => '"$1"-র রিভিসন ইতিহাসহান',
'difference'              => '(রিভিসনহানির ফারাকহান)',
'lineno'                  => 'লাইন $1:',
'compareselectedversions' => 'বাসাইল সংস্করণহানি তুলনা কর',
'editundo'                => 'আলকর',
'diff-multi'              => '({{PLURAL:$1|হমবুকর রিভিসন আহান|$1 হমবুকর রিভিসন হানি}} দেহাদেনা এহাত না মিহিসে।)',

# Search results
'searchresults'                  => 'বিসারলে অতার ফলাফল',
'searchresults-title'            => '"$1" বিসারলে অতার ফলাফল',
'searchresulttext'               => '{{SITENAME}} এ বিসারানিরকা আরাকউ পৌরকা [[{{MediaWiki:Helppage}}|{{int:help}}]] চা।',
'searchsubtitle'                 => 'তি বিসারলে \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|"$1" হান্ন অকরা হাব্বি পাতাহানি]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|"$1" র লগে তিলসে পাতাহানি]])',
'searchsubtitleinvalid'          => "তি বিসারলেতা '''$1'''",
'notitlematches'                 => 'কোন পাতার চিঙনাঙর মিল নাপেইলাঙ',
'notextmatches'                  => 'পাতাহার লেখার লগে মিল নেই',
'prevn'                          => 'পিসেদে {{PLURAL:$1|$1}}',
'nextn'                          => 'থাংনাত {{PLURAL:$1|$1}}',
'viewprevnext'                   => 'চা ($1 {{int:pipe-separator}} $2) ($3)',
'searchhelp-url'                 => 'Help:পাংলাক',
'searchprofile-images'           => 'মাল্টিমিডিয়া',
'searchprofile-everything'       => 'হাব্বি',
'searchprofile-advanced'         => 'উচ্চতর',
'searchprofile-articles-tooltip' => '$1 এহাত বিসারা',
'searchprofile-project-tooltip'  => '$1 এহাত বিসারা',
'searchprofile-images-tooltip'   => 'ফাইল বিসারা',
'search-result-size'             => '$1 ({{PLURAL:$2|1 ৱাহি|$2 ৱাহিহানি}})',
'search-redirect'                => '(বারোআলথক $1)',
'search-section'                 => '(অনুচ্ছেদ $1)',
'search-suggest'                 => 'তি হয়ত মাতানি চারতা: $1',
'search-interwiki-caption'       => 'বনক প্রকল্পহানি',
'search-interwiki-default'       => '$1 ফলাফলহানি:',
'search-interwiki-more'          => '(আরাকউ)',
'search-mwsuggest-enabled'       => 'পরামর্শল',
'search-mwsuggest-disabled'      => 'পরামর্শ নেই',
'searchall'                      => 'হাব্বি',
'nonefound'                      => "'''নোট''': অকরাতই হুদ্দা কতহান নাঙরফাম বিসারানি অসিল।
তর বিসারানিহান ''all:'' ব্যবহার করিয়া হারি কন্টেন্টর মা বিসারানিরকা লেপকর (য়্যারির পাতা, মডেল আদি), নাইলে প্রিফিক্স হিসেবে তর হাদাপাসত নাঙলাম ব্যবহার কর।",
'powersearch'                    => 'এডভান্স বিসারানি',
'powersearch-legend'             => 'উন্নত বিসারানি',
'powersearch-ns'                 => 'নেমস্পেসর মা বিসারা:',
'powersearch-redir'              => 'বারোআলথকর লাতঙগ',
'powersearch-field'              => 'কা বিসারা',
'powersearch-togglenone'         => 'কিত্তাউ নেই',

# Quickbar
'qbsettings-none' => 'কিত্তাউ নেই',

# Preferences page
'preferences'             => 'পছনহানি',
'mypreferences'           => 'মর পছন',
'changepassword'          => 'খন্তাচাবি(password) পতা',
'skin-preview'            => 'আগচা',
'saveprefs'               => 'ইতু',
'columns'                 => 'দুরগিঃ',
'timezoneregion-america'  => 'আমেরিকা',
'timezoneregion-asia'     => 'এশিয়া',
'timezoneregion-atlantic' => 'আটলান্টিক মহাসাগর',
'allowemail'              => 'আরতা(ব্যবহার করেকুরা)ই ইমেইল করানির য়্যাথাং দে।',
'prefs-files'             => 'ফাইল',
'youremail'               => 'ই-মেইল *:',
'yourrealname'            => 'আৱৈপা নাংহান *:',
'yourlanguage'            => 'ঠারহান:',
'yournick'                => 'দাহানির নাংহান:',
'gender-male'             => 'মুনি',
'gender-female'           => 'জেলা',
'email'                   => 'ইমেইল',
'prefs-help-realname'     => 'আয়ৌপা নাংহান নাদলেউ চলের।
যদি তি দের অতাইলে তর কামর থাকাত দেনাত সুবিধা অইতই।',
'prefs-advancedediting'   => 'উচ্চতর অপশন',
'prefs-advancedrc'        => 'উচ্চতর অপশন',
'prefs-advancedrendering' => 'উচ্চতর অপশন',
'prefs-advancedwatchlist' => 'উচ্চতর অপশন',
'prefs-display'           => 'দেহাদেনার অপশন',
'prefs-diffs'             => 'ফারাক',

# Groups
'group-sysop' => 'ডান্ডিকরেকুরাগি',

'grouppage-sysop' => '{{ns:project}}:প্রশাসকগি',

# User rights log
'rightslog'  => 'আতাকুরার অধিকারর লগ',
'rightsnone' => '(নেই)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'               => 'পাতা এহান পাকর',
'action-edit'               => 'পাতা এহান পতা',
'action-createpage'         => 'পাতা হঙকর',
'action-createtalk'         => 'য়্যারীর পাতা হঙকর',
'action-createaccount'      => 'আতাকুরার একাউন্টহান হঙকর',
'action-minoredit'          => 'হুরকা পতানিহান বুলিয়া লেপকর',
'action-move'               => 'পাতাহান থেইকর',
'action-move-subpages'      => 'পাতাহান বারো অহানর তলর পাতাহানি হাবি থেইকর',
'action-move-rootuserpages' => 'গুরিগর পাতাহানির আতাকুরার পাতাহানি থেইকর',
'action-delete'             => 'পাতা এহান পুস',
'action-browsearchive'      => 'পুসিসি পাতা বিসারা',
'action-block'              => 'পতাকুরা এগরে পতানি নাদি',
'action-trackback'          => 'আলথক ট্রাক সাবমিট কর',
'action-mergehistory'       => 'পাতা এহানর ইতাহাসহান সুপকরিক',

# Recent changes
'nchanges'                       => '$1 {{PLURAL:$1|সিলপা|সিলপাহানি}}',
'recentchanges'                  => 'হাদিএহান পতাসিতা',
'recentchanges-legend'           => 'হাদি এহানর পতানির পছনহানি',
'recentchanges-feed-description' => 'ফিড এহানর মা পাতা এহার পতানিহানর গজে মিল্লেং দে।',
'rcnote'                         => "গেলগা {{PLURAL:$2|দিনে|'''$2''' দিনে}} অসে {{PLURAL:$1|'''১'''|'''$1'''}}হান সিলপা তলে দেহানি ইল (যেহানর এপাগার খেন্তাম বারো তারিখ $5, $4)।",
'rcnotefrom'                     => "তলে গেলগা '''$2''' ত্ত পতাসিতা দেনা অইল ('''$1''' পেয়া)।",
'rclistfrom'                     => 'নুৱাতা পতাসিতা $1 পাতাহানাত্ত চিঙকরিয়া',
'rcshowhideminor'                => '$1 হুরু পতানিহান',
'rcshowhidebots'                 => '$1 বটগি',
'rcshowhideliu'                  => '$1 হমাসি আতাকুরা',
'rcshowhideanons'                => '$1 হারানাপাসি আতাকুরা',
'rcshowhidepatr'                 => '$1 পাহারাত আসে পতানি',
'rcshowhidemine'                 => '$1 মর পাতানিহানি',
'rclinks'                        => 'গেলগা $1 হান পতানি দেখাদে $2 দিনরতা <br />$3',
'diff'                           => 'ফারাক',
'hist'                           => 'ইতিহাসহান',
'hide'                           => 'আরুম',
'show'                           => 'দেখাদে',
'minoreditletter'                => 'হ',
'newpageletter'                  => 'নু',
'boteditletter'                  => 'ব',
'rc-enhanced-expand'             => 'পুল্লাপ দেহাদে (জাভাস্ক্রিপ্ট দরকার)',
'rc-enhanced-hide'               => 'পুল্লাপ গুর',

# Recent changes linked
'recentchangeslinked'          => 'সাকেই আসে পতা',
'recentchangeslinked-feed'     => 'সাকেই আসে পতা',
'recentchangeslinked-toolbox'  => 'সাকেই আসে পতা',
'recentchangeslinked-title'    => 'পতানিহান "$1"র লগে সর্ম্পক আসে',
'recentchangeslinked-noresult' => 'দেনা অসে খেন্তামর ভিতরে পতাসিতা নেই।',
'recentchangeslinked-summary'  => "লেপকরা পাতা আহান (অথবা লেপকরা বিষয়শ্রেণী)ত্ত তিলসে এরে পাতা এহানর হাদি এহান পতাসি অহানর লাতঙ দেনা অইল। তর [[Special:Watchlist|তর চালাতঙ]]এ থসি পাতাহানি '''গাঢ়''' করিয়া দেহাদেনা অসে।",
'recentchangeslinked-page'     => 'পাতার নাঙ:',
'recentchangeslinked-to'       => 'দিয়াসি পাতাহানর বদালা মিলাপ আসে পাতাহানির পতানিহানি দেহাদে',

# Upload
'upload'              => 'আপলোড ফাইল',
'uploadbtn'           => 'আপলোড',
'uploadnologin'       => 'লগইন নাকরিসত',
'uploaderror'         => 'আপলোড করানিত লালুইসে',
'uploadlog'           => 'আপলোডর লগ',
'uploadlogpage'       => 'আপলোড করিসি লগ',
'filename'            => 'ফাইলর নাঙ',
'filedesc'            => 'সারাংশ',
'fileuploadsummary'   => 'সারাংশ:',
'filereuploadsummary' => 'ফাইল সিলপাহানি:',
'filesource'          => 'উৎস:',
'badfilename'         => 'ফাইলগর নাঙহান পতিয়া $1" করানি ইল।',
'savefile'            => 'ফাইল ইতু',
'uploadedimage'       => 'আপলোডকরানি অইল "[[$1]]"',
'upload-source'       => 'ফাইলর উৎস',
'upload-options'      => 'আপলোডর পছনহানি',
'watchthisupload'     => 'ফাইলগ খিয়ালে থ',

'upload-misc-error'   => 'আপলোডর লালহান হারনাপাসি',
'upload-unknown-size' => 'সাইজহান হারনাপাসি',

# img_auth script messages
'img-auth-accessdenied' => 'হমানির য়্যাথাং নেই',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error28' => 'আপলোড সময়হান লিতুইল',

'license'        => 'লাইসেন্সহান:',
'license-header' => 'লাইসেন্সহান',

# Special:ListFiles
'imgfile'        => 'ফাইল',
'listfiles'      => 'ছবির তালিকা',
'listfiles_date' => 'তারিখ',
'listfiles_name' => 'নাঙ',
'listfiles_user' => 'আতাকুরা',
'listfiles_size' => 'সাইজ',

# File description page
'file-anchor-link'          => 'ফাইল',
'filehist'                  => 'ফাইলর ইতিহাস',
'filehist-help'             => 'দিন/সময়-র গজে যাতিলে ঔ খেন্তাম পেয়া হঙিসে ফাইলগ চ পারতেই।',
'filehist-deleteall'        => 'হাব্বি পুস',
'filehist-current'          => 'এপাগা',
'filehist-datetime'         => 'দিন/সময়',
'filehist-thumb'            => 'হুরকাকরে ফটকগি',
'filehist-thumbtext'        => '$1 অনু্যায়ী সংস্করণর হুরকাকরে ফটকগি',
'filehist-user'             => 'আতাকুরা',
'filehist-dimensions'       => 'চাঙহান',
'filehist-filesize'         => 'ফাইলর সাইজহান',
'filehist-comment'          => 'মতহান',
'filehist-missing'          => 'ফাইলগ মাঙুইসে',
'imagelinks'                => 'ফাইলর জুরনহানি',
'linkstoimage'              => 'এরে ফাইলর লগে {{PLURAL:$1|পাতার মিলাপ|$1 পাতাহানির মিলাপ}} আসে:',
'nolinkstoimage'            => 'ফাইল এগর লগে মিলাপ অসে অসাদে কোন পাতা নেই।',
'sharedupload'              => 'ফাইল এগ $1ত্ত আহিসেগ বারো অন্যান্য প্রকল্পতউ ব্যবহৃত ইতে পারে।',
'uploadnewversion-linktext' => 'এরে ফাইল এগর নুৱা সংস্করনহান আপলোড কর',
'shared-repo-from'          => '$1 রাঙতো',

# File reversion
'filerevert-comment' => 'মতামত:',

# File deletion
'filedelete-submit'           => 'পুস',
'filedelete-reason-otherlist' => 'আরাক কারণ',

# MIME search
'mimesearch' => 'MIME বিসারানি',
'download'   => 'ডাউনলোড',

# List redirects
'listredirects' => 'আলথক করেদের পাতার লাতঙগি',

# Unused templates
'unusedtemplates' => 'বপ নাচলের মডেলহানি',

# Random page
'randompage' => 'খাংদা পাতা',

# Random redirect
'randomredirect' => 'চৌরাপ আলথকপা',

# Statistics
'statistics'              => 'হিসাবহান',
'statistics-header-pages' => 'পাতার পরিসংখ্যান',
'statistics-header-edits' => 'পতানির পরিসংখ্যান',
'statistics-header-views' => 'চাসিতার পরিসংখ্যান',
'statistics-header-users' => 'আতাকুরার পরিসংখ্যান',
'statistics-header-hooks' => 'আরআর পরিসংখ্যান',
'statistics-articles'     => 'পাতার কন্টেনহানি',
'statistics-pages'        => 'পাতাহানি',

'disambiguations' => 'সন্দই চুমকরের পাতাহানি',

'doubleredirects' => 'আলথকে যানা দ্বিমাউ মাতের',

'brokenredirects'        => 'বারো-নির্দেশ কামনাকরের',
'brokenredirects-edit'   => 'পতানি',
'brokenredirects-delete' => 'পুস',

'withoutinterwiki'        => 'ঠারর মিলাপ নেয়সে পাতাহানি',
'withoutinterwiki-submit' => 'দেহাদে',

'fewestrevisions' => 'যে পাতাহানির কম রিভিসন অসে',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|বাইট|বাইট}}',
'ncategories'             => '$1 {{PLURAL:$1|থাক|থাকহানি}}',
'nlinks'                  => '$1 {{PLURAL:$1|মিলাপ|মিলাপহানি}}',
'nmembers'                => '$1 {{PLURAL:$1|আতাকুরা|আতাকুরাগি}}',
'lonelypages'             => 'এতিম পাতাহানি',
'uncategorizedpages'      => 'বিষয়রথাকে নাবেলাসি পাতাহানি',
'uncategorizedcategories' => 'বিষয়থাকে নাবেলাসি থাকহানি',
'uncategorizedimages'     => 'বিষয়থাকে নাবেলাসি ফাইলগি',
'uncategorizedtemplates'  => 'বিষয়থাকে নাবেলাসি থাকহানি',
'unusedcategories'        => 'বিষয়থাক বপ নাচলের',
'unusedimages'            => 'নাচলের ফাইলগি',
'wantedcategories'        => 'চারাঙ বিষয়র থাকহানি',
'wantedpages'             => 'খৌরাঙর পাতাহানি',
'wantedfiles'             => 'মনারাঙ ফাইলগি',
'mostlinked'              => 'হাবিত্ত মিলাপ বপিসে পাতাহানি',
'mostlinkedcategories'    => 'বিষয়থাকে য়্যামসে মিলাপ',
'mostlinkedtemplates'     => 'মডেলহানিত য়্যামসে মিলাপ',
'mostcategories'          => 'বপতা বিষয়থাকর পাতাহানি',
'mostimages'              => 'ফাইলগিত য়্যামসে মিলাপ',
'mostrevisions'           => 'রিভিসন বপসে পাতাহানি',
'prefixindex'             => 'উপসর্গল হাব্বি পাতাহানি',
'shortpages'              => 'হুরু পাতাহানি',
'longpages'               => 'ডাঙর পাতাহানি',
'deadendpages'            => 'যে পাতাহানিত্ত কোন মিলাপ নেই',
'protectedpages'          => 'লুকরিসি পাতাহানি',
'listusers'               => 'আতাকুরার লাতংগ',
'newpages'                => 'নুৱা পাতাহানি',
'newpages-username'       => 'আতাকুরা:',
'ancientpages'            => 'পুরানা পাতাহানি',
'move'                    => 'থেইকরানি',
'movethispage'            => 'পাতা এহান থেইকর',
'pager-newer-n'           => '{{PLURAL:$1|নুৱা ১হান|নুৱা $1হান}}',
'pager-older-n'           => '{{PLURAL:$1|আরাকউ পুরানা ১হান|আরাকউ পুরানা $1হান}}',

# Book sources
'booksources'               => 'লেরিকর উৎসহান',
'booksources-search-legend' => 'লেরিকরর উৎসহান বিসারা',
'booksources-go'            => 'হাত',

# Special:Log
'specialloguserlabel'  => 'আতাকুরাগ:',
'speciallogtitlelabel' => 'চিঙনাঙ:',
'log'                  => 'লগ',
'all-logs-page'        => 'হাব্বি পাবলিক লগ',

# Special:AllPages
'allpages'       => 'হাবি পাতাহানি',
'alphaindexline' => '$1 ত $2',
'nextpage'       => 'থাঙনার পাতা ($1)',
'prevpage'       => 'আগেকার পাতা ($1)',
'allpagesfrom'   => 'যেহাত্ত অকরিসি অহাত্ত পাতাহানি দেহাদেঃ',
'allpagesto'     => 'এসাদে পাতা দেহাদে যেহানর লমানিহান:',
'allarticles'    => 'নিবন্ধহাবি',
'allinnamespace' => 'পাতাহানি হাবি ($1 নাঙরজাগা)',
'allpagesprev'   => 'আলথকে',
'allpagesnext'   => 'থাঙনাত',
'allpagessubmit' => 'হাত',
'allpagesprefix' => 'মেয়েক এগন অকরিসি ৱাহির পাতাহানি দেহাদেঃ',

# Special:Categories
'categories'         => 'বিষয়রথাকহানি',
'categoriespagetext' => 'ইমারঠারর উইকিপিডিয়াত এবাকার বিষয়রথাক:',

# Special:DeletedContributions
'sp-deletedcontributions-contribs' => 'অবদানহানি',

# Special:LinkSearch
'linksearch' => 'বারেদের লগে মিলাপ',

# Special:ListUsers
'listusers-submit'  => 'দেহাদে',
'listusers-blocked' => '(থেপুইসে)',

# Special:ActiveUsers
'activeusers-noresult' => 'আতাকুরা নাপেইলাং।',

# Special:Log/newusers
'newuserlogpage'          => 'আতাকুরা হঙসে লগহানি',
'newuserlog-byemail'      => 'ই-মেইলর মা পেঠাদিয়াসি পাসৱার্ডগ',
'newuserlog-create-entry' => 'নুৱা আতাকুরার একাউন্টহান',

# Special:ListGroupRights
'listgrouprights-key'     => '* <span class="listgrouprights-granted">য়্যাথাং পাসে অধিকার</span>
* <span class="listgrouprights-revoked">থেপকরানি অসে অধিকার</span>',
'listgrouprights-group'   => 'গ্রুপহান',
'listgrouprights-rights'  => 'অধিকারহানি',
'listgrouprights-members' => '(সদস্যর পারেঙহানি)',

# E-mail user
'emailuser'        => 'আতাকুরাগরে ইমেইল কর',
'emailpage'        => 'আতাকরেকুরাগরে ই-মেইল কর',
'defemailsubject'  => '{{SITENAME}} ই-মেইল',
'noemailtitle'     => 'ই-মেইলর কা ঠিকানাহান নেই',
'nowikiemailtitle' => 'ই-মেইলর য়্যাথাং নেই',
'emailfrom'        => 'রাঙতো:',
'emailto'          => 'প্রতি:',
'emailsubject'     => 'বিষয়:',
'emailmessage'     => 'পৌ:',
'emailsend'        => 'দিয়াপেঠাদে',
'emailsent'        => 'ই-মেইল দিয়াপেঠাদেনা ইল',
'emailsenttext'    => 'তর ই-মেইলর পৌহান দিয়া পেঠা বেল্লাং।',
'emailuserfooter'  => 'ই-মেইল এহান দিয়া এপঠা দিলতা $1-ই $2-রাঙ  "ই-মেইল" ব্যবহারকারীগই {{SITENAME}}ত্ত।',

# Watchlist
'watchlist'         => 'মর তালাবি',
'mywatchlist'       => 'মর তালাবি',
'watchlistfor'      => "('''$1'''-র কা)",
'addedwatch'        => 'তালাবির তালিকাহাত থনা ইল',
'addedwatchtext'    => "\"<nowiki>\$1</nowiki>\" পাতা এহান তর [[Special:Watchlist|আহির-আরুম তালিকা]]-ত তিলকরানি ইল। পিসেদে এরে পাতা এহান বারো পাতা এহানর লগে সাকেই আসে য়্যারী পাতাত অইতই হারি জাতর পতানি এহানাত তিলকরানি অইতই। অতাবাদেউ [[Special:RecentChanges|হাদি এহানর পতানিহানি]]-ত পাতা এহানরে '''গাঢ়করা''' মেয়েকে দেহা দেনা অইতই যাতে তি নুঙিকরে পাতা এহান চিনে পারবেতা।

পিসেদে তি পাতা এহানরে থেইকরানি মনেইলে \"আহির-আরুমেত্ত থেইকরেদে\" ট্যাবগত ক্লিক করিস৷",
'removedwatch'      => 'তালাবির পাতাত্ত গুসাদে',
'removedwatchtext'  => 'এরে পাতা "[[:$1]]" এহান গুসানি ইলতা [[Special:Watchlist|তর তালাবির]] পাতাত্ত।',
'watch'             => 'তালাবি',
'watchthispage'     => 'পাতাএহান খিয়ালে থ',
'unwatch'           => 'তালাবি নেই',
'unwatchthispage'   => 'তালাবি এরাদেনা',
'watchlist-details' => '{{PLURAL:$1|$1 পাতা|$1 পাতাহানি}} তর তালাবিত আসে, য়্যারির পাতা ধরানি নাসে।',
'wlshowlast'        => 'গেলগা $1 ঘন্টা $2 দিনর $3 দেখাদে',
'watchlist-options' => 'তালাবিত আসে পাতার পছনহানি',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'চা...',
'unwatching' => 'নাউচা...',

'changed' => 'পতেসে',

# Delete
'deletepage'            => 'পাতাহান পুস',
'confirm'               => 'লেপকরানি',
'historywarning'        => 'সিঙুইস: তি যে পাতাহান পুসানিত লেপুইসত এহানর ইতিহাস আহান আসে:',
'confirmdeletetext'     => 'তি যে পাতাহান পুসানি লেপুইসত অহানর লগে ইতিহাসহানউ পুসতই।
তি লেপকর যে তি এহান করতেই বুলিয়া, বারো তি এহানর পিসহান হারপাসত লগে [[{{MediaWiki:Policy-url}}|পলিসিহান]] ইলয়া তি কামএহান করানিত লেপুইসত।',
'actioncomplete'        => 'কামহান লমিল।',
'deletedtext'           => '"<nowiki>$1</nowiki>" পুসানি অইল।
চা $2 এহার বারে আগে আসে পুসানির লাতংগ।',
'deletedarticle'        => 'পুসানিইল "[[$1]]"',
'dellogpage'            => 'পুসিসিতার লাতংগ',
'deletecomment'         => 'পুসানির কারনহান:',
'deleteotherreason'     => 'আরাক/উপরি কারন:',
'deletereasonotherlist' => 'আর আর কারন',

# Rollback
'rollbacklink' => 'রোলবেক',
'cantrollback' => 'আগেকার সঙস্করনহাত আলথকে যানা নুৱারলু, লমিলগা সম্পদনাকরেকুরা অগ পাতা অহানর আকখুলা লেখকগ।',

# Protect
'protectlogpage'              => 'লুকরানির লগ',
'protectedarticle'            => 'লুৱসে "[[$1]]"',
'modifiedarticleprotection'   => '"[[$1]]"-র কা লুকরানির থাকহান বদলানি অসে',
'prot_1movedto2'              => '[[$1]]-রে [[$2]]-ত গুসানি ইল',
'protectcomment'              => 'কারনহান:',
'protectexpiry'               => 'মিয়াদহান লালর:',
'protect_expiry_invalid'      => 'খেন্তাম লিতনাহান লালুইসে।',
'protect_expiry_old'          => 'বাতিলর খেন্তামহান আগেকার তারিখে পরিসে।',
'protect-text'                => "তি চেইলে '''<nowiki>$1</nowiki> পাতাহানর লুকরানির মাত্রাহান চানা বারো সিলকরানি পারর'''।",
'protect-locked-access'       => "তরতা পাতা লুকরে পারানির মত য়্যাথাঙ নেই।
পাতাহান '''$1'''র এপাগার পাজালানিহান:",
'protect-cascadeon'           => 'এরে পাতাহান এপাগা লুকরানি অসে, কারণ পাতাহানর তলে {{PLURAL:$1|পাতা আহানাত|পাতা হানিত}} অন্তর্ভুক্ত ইসে, যেহানাত আগপাতাকরেকুরাতাত লুকরানিহান আসে। তি চেইলে অহান সিলকরে পারর, তবে এরে আগপাতাকরেকুরাতাত কোন বদালা নাইব।',
'protect-default'             => 'হাব্বি ব্যবহারকারীর কা',
'protect-fallback'            => 'য়্যাথাং "$1" দরকার',
'protect-level-autoconfirmed' => 'রেজিষ্টার নাকরিসি বারো নাঙনেই আতাকুরারের থেপকর',
'protect-level-sysop'         => 'হুদ্দা ডান্ডিকরেকুরা',
'protect-summary-cascade'     => 'আগপাতাকরেকুরা',
'protect-expiring'            => '$1 (আমাস) খেন্তামে মিয়াদহান লালুইতই',
'protect-expiry-indefinite'   => 'লমনেই',
'protect-cascade'             => 'এরে পাতাত মিহিসে পাতাহানি তালাবি করানি অক (আগপাতাকরেকুরা তালাবি)',
'protect-cantedit'            => 'লুকরিসি পাতাহানরে তি সিলকরে নারবে, কিদিয়া বুল্লে তরতা পতানির য়্যাথাঙ নেই।',
'protect-othertime'           => 'আরাক খেন্তামে:',
'protect-othertime-op'        => 'আরাক খেন্তামে',
'protect-existing-expiry'     => 'আসে এক্সপায়রর খেন্তামহান: $3, $2',
'protect-expiry-options'      => '১ ঘন্টা:1 hour,১ দিন:1 day,১ হাপ্তা:1 week,২ হাপ্তা:2 weeks,১ মাহা:1 month,৩ মাহা:3 months,৬ মাহা:6 months,১ বসর:1 year,লম নেই সময়:infinite',
'restriction-type'            => 'য়্যাথাঙ:',
'restriction-level'           => 'লুকরানির থাক:',
'minimum-size'                => 'হুরকা আকার',
'maximum-size'                => 'ডাঙর আকার',
'pagesize'                    => '(বাইট)',

# Restrictions (nouns)
'restriction-edit'   => 'পতানিহান_চিয়ৌকর',
'restriction-move'   => 'গুসা',
'restriction-create' => 'হঙকর',
'restriction-upload' => 'আপলোড',

# Restriction levels
'restriction-level-sysop'         => 'পুরাপুরি লুৱসে',
'restriction-level-autoconfirmed' => 'খেইপক লুৱসে',
'restriction-level-all'           => 'যেকোন থাক',

# Undelete
'undeletebtn'      => 'বারোইতুকর',
'undeletelink'     => 'চা/আলথক কর',
'undeletedarticle' => '"[[$1]]"-রে আগর অঙতাত নেনা ইল',

# Namespace form on various pages
'namespace'      => 'নাঙরথাক:',
'invert'         => 'বাসিসি এহান আলকর',
'blanknamespace' => '(গুরি)',

# Contributions
'contributions'       => 'আতাকুরার অবদান',
'contributions-title' => '$1 আতাকুরার অবদানহানি',
'mycontris'           => 'মর অবদান',
'contribsub2'         => '$1 ($2)-র কা',
'uctop'               => '(গজ)',
'month'               => 'মাহাহানাত্ত (বারো অতার আগেত্ত):',
'year'                => 'বসরেত্ত (বারো অতার আগেত্ত):',

'sp-contributions-newbies'     => 'হুদ্দা নুৱা একাউন্টর অবদানহানি দেহাদে',
'sp-contributions-newbies-sub' => 'নুৱা একাউন্টর কা',
'sp-contributions-blocklog'    => 'থেপকরিসি লগ',
'sp-contributions-talk'        => 'অতারা',
'sp-contributions-search'      => 'অবদানহানি বিসারা',
'sp-contributions-username'    => 'আইপি (IP) ঠিকানা নাইলে আতাকুরার নাঙহান:',
'sp-contributions-submit'      => 'বিসারা',

# What links here
'whatlinkshere'            => 'যে পাতাহানিত্ত এহানাত মিলাপ আসে',
'whatlinkshere-title'      => 'পাতাহানি $1 -ত মিলাপ আসে',
'whatlinkshere-page'       => 'পাতা:',
'linkshere'                => "থাঙনার পাতাহানি '''[[:$1]]'''র লগে মিলাপ আসে:",
'nolinkshere'              => "পাতা '''[[:$1]]'''হানাত কোন মিলাপ নেই।",
'isredirect'               => 'বুলনদের পাতা',
'istemplate'               => 'বরানি',
'isimage'                  => 'ছবি মিলাপ',
'whatlinkshere-prev'       => '{{PLURAL:$1|পিসেদে|পিসেদে $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|থাংনা|থাংনা $1}}',
'whatlinkshere-links'      => '← মিলাপহানি',
'whatlinkshere-hideredirs' => '$1 হানি আলথকর দিশা দেহার',
'whatlinkshere-hidetrans'  => '$1 ট্রান্সক্লুশন',
'whatlinkshere-hidelinks'  => '$1 মিলাপহানি',
'whatlinkshere-filters'    => 'চালুনী',

# Block/unblock
'blockip'                  => 'আতাকুরাগরে থেপকর',
'ipboptions'               => '২ ঘন্টা:2 hours,১ দিন:1 day,৩ দিন:3 days,হাপ্তা আহান:1 week,হাপ্তা দুহান:2 weeks,মাহা আহান:1 month,৩ মাহা:3 months,৬ মাহা:6 months,বসর আহান:1 year,লম নেই সময়:infinite',
'badipaddress'             => 'আইপি ঠিকানাহান গ্রহনযোগ্যনাইসে',
'blockipsuccesssub'        => 'থেপকরানিহান চুমিল',
'blockipsuccesstext'       => '[[Special:Contributions/$1|$1]] রে থেপকরিয়া থসি <br />থেপকরানিহান খাল করানি থকিলে,[[Special:IPBlockList| থেপকরিয়া থসি আইপি ঠিকানার তালিকাহান]] চা।',
'ipblocklist'              => 'থেপকরিয়া থসি আইপি ঠিকানা বারো আতাকুরার লাতঙগি',
'blocklistline'            => '$1 তারিখে $2, $3 ($4) রে থেপকরানি অসে।',
'blocklink'                => 'থেপ কর',
'unblocklink'              => 'ব্লকনাকরি',
'change-blocklink'         => 'ব্লক সিলকর',
'contribslink'             => 'অবদান',
'blocklogpage'             => 'থেপকরানির log',
'blocklogentry'            => '"[[$1]]"-রে $2 মেয়াদর কা থেপকরানি অসে। $3',
'unblocklogentry'          => '$1-র গজেত্ত বাধা তুলানি ইল',
'block-log-flags-nocreate' => 'অ্যাকাউন্ট হঙকরানিহান থেপকরিয়া থনা অসে',

# Move page
'movepagetext'            => "তলর ফর্মহান ব্যবহার করিয়া পাতা আহানর চিঙনাঙ সিলকরানি একরতই, বারো লগে অহানর নুৱি চিঙনাঙ বারো ইতিহাসহান থেইকরানি একরতই।
পুরনা চিঙনাঙ অহান নুৱা চিঙনাঙে যানার পথগ বাগেইতই।
পুরনা চিঙনাঙর প্রতি মিলাপ অতাত কোন পতানি নাইব; অহান থকিয়া দ্বিমাউকার আলথকে যানার পাতা নাচলের আলথকে দিয়াপেঠার মিলাপ পরীক্ষা করানিত নাপাহুরিস।
মিলাপ অহানি আয়ৌপা যাগাত থুঙকগা, অহান লেপকরানির দায়িত্বহান তরহান।

খিয়াল কর যে যদি নুৱা চিঙনাঙ অহান্ন আগেত্তর পাতা আসেতানা কিতা, থা থাইলে  নুৱা পাতা এহান অহানাত '''না'''যিবগা, যদি না পাতা অহান খালি থার বা আলথকর নিদের্শনা আসে বারো আগেকার পতাসি ইতিহাস না থার। অর্থাৎ তি হারনাপেয়া নাঙ সিলকরিয়া থার সহজেই পুরানা নাঙহাত আলুইয়া যানা পারতেই, কিন্তু আগেত্তর আসে পাতার গজে ইকরানি নুৱারতেই।

'''সিঙুইস!'''
মানুর প্রিয় পাতার বারে এসাদে সিলনা খাঙদা ইতে পারে; মুঙেদে আগ বারানির আগে কামহার ফলহান কিহান ইতই, অহান লেপুইয়া করানি থক।",
'movepagetalktext'        => "পাতাহান গুসানির লগে লগে অহানর য়্যারির পাতাহানউ আপ্পানে যিতইগা '''যদি না:'''
*খালি নাইসে এসাদে য়্যারির পাতা নুৱা চিঙনাঙর তলে আগত্তর থা থাইলে, নাইলে
*তি তলর বাক্সগত্ত টিক চিনৎহান থেইকরে পারর।

এতার বারে তি চেইলে নিজর আতহানল পাতা অহান গুসানি বা পুলকরানি পারর।",
'movearticle'             => 'পাতাহান থেইকর:',
'newtitle'                => 'নুৱা চিঙনার কা:',
'move-watch'              => 'পাতা এহান খিয়াল কর',
'movepagebtn'             => 'পাতা থেইকর',
'pagemovedsub'            => 'গুসানিহান হবা বালাই লমিল',
'movepage-moved'          => '<big>\'\'\'"$1" থেইককরানি ইল "$2"\'\'\'</big>',
'articleexists'           => 'ইতে পারে এরে শিরোনাঙর নিবন্ধহান হঙপরসেগা, নাইলে তি দিয়াসত শিরোনাং এহান দেনার য়্যাথাং নেই। কৃপা করিয়া আরাক শিরোনাং আহান দেনার হৎনা কর।',
'talkexists'              => "'''পাতাহান হবা বালাই গুসিল কিন্তু অরে নাঙর য়্যারির পাতা আহান আগেত্তর থানাই না গুসিল।
দয়া করিয়া তি নিজর আতহান্ন তিলকরগা।'''",
'movedto'                 => 'থেইকর',
'movetalk'                => 'লগর য়্যারির পাতাহান গুসা',
'1movedto2'               => '[[$1]]-রে [[$2]]-ত গুসানি ইল',
'1movedto2_redir'         => '[[$1]]-রে [[$2]]-ত বারো-র্নির্দেশনার মা থেইকরানি ইল',
'movelogpage'             => 'লগ গুসা',
'movereason'              => 'কারন:',
'revertmove'              => 'রিভার্ট',
'delete_and_move'         => 'পুসানি বারো থেইকরানি',
'delete_and_move_confirm' => 'হায়, পাতা এহান পুস',

# Export
'export' => 'পাতাহান দিয়াপেঠা',

# Namespace 8 related
'allmessages'               => 'সিস্টেমর পৌহানি',
'allmessagesname'           => 'নাং',
'allmessagescurrent'        => 'হাদি এহানর ৱাহি',
'allmessagestext'           => 'তলে মিডিয়াউইকি: নাঙরজাগাত পানা একরের সিস্টেম পৌহানির তালিকাহান দেনা ইল।',
'allmessages-filter-submit' => 'হাত',

# Thumbnails
'thumbnail-more'  => 'ডাঙরকর',
'thumbnail_error' => 'থাম্বনেইল হংকরানিত লেইলেক অসে: $1',

# Import log
'importlogpage' => 'লগ আন',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'তর আতাকুরার পাতাহান',
'tooltip-pt-mytalk'               => 'তর য়্যারির পাতাহান',
'tooltip-pt-preferences'          => 'মর পছন',
'tooltip-pt-watchlist'            => 'পতাসি পাতার হিসাব আসে লাতংগ',
'tooltip-pt-mycontris'            => 'তর তালাবির লাতংগ',
'tooltip-pt-login'                => 'লগ করানির হেইচা কররাঙ, যদিউ অহান বাধ্যতামুলকহান নাবে।',
'tooltip-pt-logout'               => 'নিকুলানি',
'tooltip-ca-talk'                 => 'পাতাহানর বারে য়্যারি দে',
'tooltip-ca-edit'                 => 'তি পাতা এহান পতা পারতেই।
পাতাহান ইতুকরানির আগে আলথকে মিল্লেং আহান দে।',
'tooltip-ca-addsection'           => 'নুৱা অনুচ্ছেদহান তিলকর।',
'tooltip-ca-viewsource'           => 'পাতা এহান লুকরানি অসে।
তি হুদ্দা উত্স চা পারতেই।',
'tooltip-ca-history'              => 'পাতা এহানর পুরানা সংস্করণহানি',
'tooltip-ca-protect'              => 'পাতাএহান লুকর',
'tooltip-ca-delete'               => 'পাতা এহান পুস',
'tooltip-ca-move'                 => 'পাতা এহান থেইকর',
'tooltip-ca-watch'                => 'পাতা এহান চাফামে থ',
'tooltip-ca-unwatch'              => 'তর মিল্লেঙর লাতঙেত্ত পাতা এহান গুসা',
'tooltip-search'                  => 'বিসারা {{SITENAME}}',
'tooltip-search-go'               => 'থা থাইলে এরে নাঙর পাতাত সালো',
'tooltip-search-fulltext'         => 'এরে টেক্সটর কা পাতাহানিত বিসারা',
'tooltip-p-logo'                  => 'পয়লা পাতা',
'tooltip-n-mainpage'              => 'মুল পাতাহান চেইক',
'tooltip-n-mainpage-description'  => 'মুল পাতাহান চা',
'tooltip-n-portal'                => 'প্রকল্প এহানর বারে, তি কিহান পাংকরে পারতেই, বস্তু কুরাঙত বিসারিয়া পানা',
'tooltip-n-currentevents'         => 'এপাগার ইভেন্টহানরকা পিসেদের ইতাহানহান বিসারা',
'tooltip-n-recentchanges'         => 'উইকি এহাত হাদি এহান পতাসি পাতার লাতংগ।',
'tooltip-n-randompage'            => 'খাঙদা পাতা আহান লোড কর',
'tooltip-n-help'                  => 'বিসরিয়া পানার ফামহান।',
'tooltip-t-whatlinkshere'         => 'উইকির যে পাতাহানি এহানাত মিলাপ অসে অতার লাতংগ',
'tooltip-t-recentchangeslinked'   => 'এরে পাতাহাত্ত মিলাপ অসে অসাদে পাতাহানিত হাদি এহানর সিলপাহানি',
'tooltip-feed-rss'                => 'এরে পাতাহানরকা আরএসএস ফিড',
'tooltip-feed-atom'               => 'এরে পাতাহানর কা অ্যাটম ফিড',
'tooltip-t-contributions'         => 'পাতাএহান অবদান থসি অতার লাতংগ চা',
'tooltip-t-emailuser'             => 'আতাকুরা এগরে ইমেল আহান কর',
'tooltip-t-upload'                => 'ফাইল আপলোড কর',
'tooltip-t-specialpages'          => 'বিশেষ পাতাহানির লাতংগ',
'tooltip-t-print'                 => 'এ পাতাহানর ছাপানি একরব সংস্করণহান',
'tooltip-t-permalink'             => 'পাতাহানর এরে সংস্করণর স্থায়ী মিলাপহান',
'tooltip-ca-nstab-main'           => 'বিষয়বস্তুর পাতাহান চা',
'tooltip-ca-nstab-user'           => 'আতাকুরার পাতাহান চা',
'tooltip-ca-nstab-special'        => 'এহান বিশেষ পাতাহান, তি পতানি নুৱারবে',
'tooltip-ca-nstab-project'        => 'প্রকল্প পাতাহান চা',
'tooltip-ca-nstab-image'          => 'ফাইলর পাতাহান চা',
'tooltip-ca-nstab-template'       => 'মডেলহান চা',
'tooltip-ca-nstab-help'           => 'পাঙলাকর পাতা চা',
'tooltip-ca-nstab-category'       => 'থাকর পাতাহানি চা',
'tooltip-minoredit'               => 'এহান হুরু পতানিহান বুলিয়া চিনতদে',
'tooltip-save'                    => 'তর পতানিহান ইতু কর',
'tooltip-preview'                 => 'তি ইতু করানির আগে যেসাদেউ আগচা (প্রিভিউ) দে!',
'tooltip-diff'                    => 'তি কিসারেতা কিসারেতা পতাসত অতা চা।',
'tooltip-compareselectedversions' => 'এরে পাতা এহানর দুহান ভার্সনর তুলনা কর।',
'tooltip-watch'                   => 'পাতা এহান তর মিল্লেঙে থ',
'tooltip-rollback'                => '"রোলব্যাক" এরে পাতার লমিল পতাকুরার পতানিত ক্লিক আহাত আলথক নেনারকা',
'tooltip-undo'                    => '"আলথক" এর পতানিহানরে আগর জাগাত নিতইগা বারো আগচা সহকারে পতানির ফরমহান নিকুলতই।
এহান পতানির সারাংশত কারণহান তিলকরানির সুযোগ দিতই।',

# Attribution
'anonymous' => '{{SITENAME}}র বেনাঙর {{PLURAL:$1|আতাকুরা|আতাকুরাগি}}',
'siteusers' => '{{SITENAME}}র {{PLURAL:$2|আতাকুরা|আতাকুরাগি}} $1',
'anonusers' => '{{SITENAME}}র বেনাঙর {{PLURAL:$2|আতাকুরা|আতাকুরাগি}} $1',

# Browsing diffs
'previousdiff' => '← পুরানা পতা',
'nextdiff'     => 'নুৱা পতা →',

# Media information
'file-info-size'       => '($1 × $2 পিক্সেল, ফাইলর সাইজহান: $3, এমআইএমই-র অংতা: $4)',
'file-nohires'         => '<small>এহাত্ত গজর রিজরিউশন নেই।</small>',
'svg-long-desc'        => '(SVG ফাইল, সাধারনত $1 × $2 পিক্সেল, ফাইলর সাইজহান: $3)',
'show-big-image'       => 'পুল্লাপ রিজলিউশন',
'show-big-image-thumb' => '<small>আগচা হানর সাইজহান: $1 × $2 পিক্সেলস</small>',

# Special:NewFiles
'newimages' => 'নুৱা ফাইলর গ্যালারিগ',
'ilsubmit'  => 'বিসারা',
'bydate'    => 'তারিখর সিজিলন',

# Bad image list
'bad_image_list' => 'ফরমেটহান তলর সাদে:

লিস্টর বস্তু হুদ্দা (লাইনহান অকরতইতাই *) বিবেচিত অইতই।
পইলাকার লাইনহান যেসাদেই হবানেই ফাইলর মিলাপ করতই।
লাইন অহানর ভিতরে আর আর মিলাপ অতা ব্যতিক্রম বুলিয়া ধরানি অইতই, যেসাদে: যেহাত পাতাহানির ফইলগ লাইনহানর মা মাতানি অইতই।',

# Metadata
'metadata'          => 'মেটারপৌ',
'metadata-help'     => 'ফাইল এগত আরাকউ হেলপা পৌ খানি তিলুইসে, মনে অরতা ডিজিটাল ক্যামেরাগত্ত নাইলে স্ক্যানারহাত্ত হমাসে। যদি ফাইল এগ মুল অংতাত্ত পতিয়া থার অতা ইলে খানি মানি পৌ না তিলুতে পারে।',
'metadata-expand'   => 'আরাকউ সালকরিসি পৌ চা',
'metadata-collapse' => 'সালকরিসি পৌ ঝিপা',
'metadata-fields'   => 'এরে পৌ এহান তিলসে EXIF মেটাপৌ অতা ছবির পাতাত দেখাদেনা ইতই, যেপাগা হেলপা উপাত্ত সারণি অতা জিপানি ইতই। হের ক্ষেত্রহানি স্বাভাবিক অবস্থাত জিপিয়া থাইতই।
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-n' => 'গাথিগি',

# External editor support
'edit-externally'      => 'এর ফাইল এগ পতানির কা বারেদের এপ্লিকেশন আতা',
'edit-externally-help' => 'আরাকউ হারপানির কা [http://www.mediawiki.org/wiki/Manual:External_editors সেটাপর নির্দেশহানি] চা।',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'হাব্বি',
'imagelistall'     => 'হাব্বি',
'watchlistall2'    => 'হাব্বি',
'namespacesall'    => 'হাব্বি',
'monthsall'        => 'হাব্বি',
'limitall'         => 'হাব্বি',

# E-mail address confirmation
'confirmemail'            => 'ই-মেইল ঠিকানাহান লেপকর',
'confirmemail_send'       => 'লেপকরেকুরা কোডগ দিয়াপেঠাদে',
'confirmemail_sent'       => 'লেপকরেকুরা ই-মেইলহান দিয়াপেঠা দিলাং।',
'confirmemail_sendfailed' => 'লেপকরেকুরা ই-মেইলহান দিয়াপেঠাদে নুৱাররাং। ইমেইল ঠিকানাহান চুমকরে ইকরিসত্তানাকিতা আরাক আকমু খিয়াল করিয়া চা। আলথকে আহিলঃ $1',
'confirmemail_invalid'    => 'লেপকরেকুরা কোডগ চুম নাইসে। সম্ভবতঃ এগ পুরানা ইয়া পরসেগা।',
'confirmemail_success'    => 'তর ই-মেইল ঠিকানাহার লেপ্পাহান চুমিল। তি এবাকা হমানি(log in) পারর।',
'confirmemail_loggedin'   => 'তর ই-মেইল ঠিকানাহার লেপকরানিহান চুমিল।',

# action=purge
'confirm_purge_button' => 'চুমিসে',
'confirm-purge-top'    => 'পাতা এহানর ক্যাশহান ঙক্ষি করানি মনারতা?',

# Multipage image navigation
'imgmultipageprev' => '← আগেকার পাতাহান',
'imgmultipagenext' => 'থাঙনার পাতাহান →',
'imgmultigo'       => 'হাত!',
'imgmultigoto'     => '$1 পাতাহাত যাগা',

# Table pager
'ascending_abbrev'         => 'কাহানি',
'descending_abbrev'        => 'লামানি',
'table_pager_next'         => 'থাঙনার পাতাহান',
'table_pager_prev'         => 'আগাকার পাতাহান',
'table_pager_first'        => 'পয়লাকর পাতাহান',
'table_pager_last'         => 'খামতলর পাতাহান',
'table_pager_limit_submit' => 'হাত',

# Auto-summaries
'autoredircomment' => '[[$1]]-ত যানার বারো-র্নিদেশ করানি ইল',

# Watchlist editing tools
'watchlisttools-view' => 'মিল আসে পতা চা',
'watchlisttools-edit' => 'তর তালাবির পাতা চা বারো পতা',
'watchlisttools-raw'  => 'পেরকা তালাবির পাতা পতা',

# Special:Version
'version'                  => 'সংস্করন',
'version-specialpages'     => 'বিশেষ পাতাহানি',
'version-other'            => 'হের',
'version-hooks'            => 'কসিগি',
'version-version'          => '(সংস্করণ $1)',
'version-license'          => 'লাইসেন্স',
'version-software'         => 'ইনস্টলঅসে সফটওয়্যার',
'version-software-product' => 'পণ্য',
'version-software-version' => 'সংস্করণ',

# Special:FilePath
'filepath'        => 'ফাইলর পথহান:',
'filepath-page'   => 'ফাইল:',
'filepath-submit' => 'পথ',

# Special:SpecialPages
'specialpages'             => 'বিশেষ পাতাহানি',
'specialpages-group-users' => 'আতাকুরাগি বারো অধিকারহানি',

# Special:BlankPage
'blankpage' => 'খালি পাতাহান',

# Special:Tags
'tag-filter'              => '[[Special:Tags|ট্যাগ]] সাকানি:',
'tag-filter-submit'       => 'সাকানি',
'tags-title'              => 'ট্যাগগি',
'tags-intro'              => 'পাতা এহানাত পতানির টেগর পারেংহানি বারো অহার অর্থ দেনা অইল।',
'tags-tag'                => 'ট্যাগর নাঙ',
'tags-display-header'     => 'সিলকারির লাতঙে যেসারে আসে',
'tags-description-header' => 'পুরা বর্ননা বারো অর্থ',
'tags-hitcount-header'    => 'ট্যাগর সিলকরানি',
'tags-edit'               => 'পতা',
'tags-hitcount'           => '$1 {{PLURAL:$1|ফারাক|ফারাকহানি}}',

# Database error messages
'dberr-header'      => 'উইকি এহানাত সমস্যা ইসে',
'dberr-problems'    => 'ঙাক্করে দিবাঙ! সাইট এহানাত টেকনিক্যাল সমস্যা ইসে।',
'dberr-again'       => 'রিলোড আনার কা ডান্ড আহান বাসা।',
'dberr-info'        => '(ডাটা সার্ভারর লগে যোগাযোগ নেয়সে: $1)',
'dberr-usegoogle'   => 'হের অহাত তি গুগুলসে বিসারা পারর।',
'dberr-outofdate'   => 'সুচীক্রম অহান আপটুডেট নাইসে।',
'dberr-cachederror' => 'এহান ক্যাস পাতাহানে, অহানে আপটুডেট না থাইব।',

# HTML forms
'htmlform-invalid-input'       => 'তি বরিলে লেখা অতার মা লালুইসে',
'htmlform-select-badoption'    => 'তি দিলে সংখ্যা অহান লেপকরিসি অপসনহান নাবে।',
'htmlform-int-invalid'         => 'তি দিলে সংখ্যা অহান নম্বরগ নাবে।',
'htmlform-float-invalid'       => 'তি দিলে সংখ্যা অহান সংখ্যাহান নাবে।',
'htmlform-int-toolow'          => 'তি দিলে সংখ্যা অহান লেপকরিসি সংখ্যা $1ত্ত হুরকা ইসে',
'htmlform-int-toohigh'         => 'তি দিলে সংখ্যা অহান লেপকরিসি সংখ্যা $1ত্ত ডাঙর ইসে',
'htmlform-submit'              => 'জমাদে',
'htmlform-reset'               => 'পতানিহান আলকর',
'htmlform-selectorother-other' => 'আরাক',

# Add categories per AJAX
'ajax-add-category'            => 'বিষয়রথাক তিলকর',
'ajax-add-category-submit'     => 'তিলকর',
'ajax-confirm-title'           => 'কামহান লেপকর',
'ajax-confirm-prompt'          => 'তি পতাসি অতার সারসংক্ষেপ তলে দেনা পারর।
"ইতু" খুথামগত যাতা ইতু করানির কা।',
'ajax-confirm-save'            => 'ইতুকর',
'ajax-add-category-summary'    => 'বিষয়থাক  "$1" থাক',
'ajax-remove-category-summary' => 'বিষয়থাক "$1" পুস',
'ajax-confirm-actionsummary'   => 'থকিসে কাম:',
'ajax-error-title'             => 'লালুইসে',
'ajax-error-dismiss'           => 'চুমিল',
'ajax-remove-category-error'   => 'বিষয়রথাক এহান পুসানি নাইব।
এহান অরতা সাধারণত বিষয়রথাকহান পাতাহানর মডেলর মা মিহিলে।',

);
