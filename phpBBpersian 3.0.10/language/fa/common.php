<?php
/**
*
* common [persian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'فارسی سازی و پشتیبانی phpBB توسط <a href="http://www.phpbbpersian.com/">phpBBpersian.com</a>  ',
	'DIRECTION'			=> 'rtl',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'fa-ir',

	'1_DAY'			=> '1 روز',
	'1_MONTH'		=> '1 ماه',
	'1_YEAR'		=> '1 سال',
	'2_WEEKS'		=> '2 هفته',
	'3_MONTHS'		=> '3 ماه',
	'6_MONTHS'		=> '6 ماه',
	'7_DAYS'		=> '7 روز',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'اکانت شما در حال حاضر فعال میباشد',
	'ACCOUNT_DEACTIVATED'			=> 'اکانت شما به طور دستی غیرفعال شده است و فقط جانب مدیر قابل غعال سازی است',
	'ACCOUNT_NOT_ACTIVATED'			=> 'در حال حاضر اکانت شما فعال نمی باشد',
	'ACP'							=> 'کنترل پنل مدیریت',
	'ACTIVE'						=> 'فعال',
	'ACTIVE_ERROR'					=> 'اکانت کاربر مشخص شده غیرفعال میباشد،اگر در فعال سازی اکانتتان مشکلی دارید، لطفا با مدیریت تماس بگیرید',
	'ADMINISTRATOR'					=> 'مدیر',
	'ADMINISTRATORS'				=> 'مدیران',
	'AGE'							=> 'سن',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'مجاز',
	'ALL_FILES'						=> 'همه فایل ها',
	'ALL_FORUMS'					=> 'همه انجمن ها',
	'ALL_MESSAGES'					=> 'همه پیغام ها ',
	'ALL_POSTS'						=> 'همه پست ها',
	'ALL_TIMES'						=> 'همه زمان ها بر اساس %1$s %2$s تنظیم شده اند',
	'ALL_TOPICS'					=> 'همه موضوعات',
	'AND'							=> 'و',
	'ARE_WATCHING_FORUM'			=> 'برای باخبر شدن از پست های جدید، در این انجمن عضو شدید',
	'ARE_WATCHING_TOPIC'			=> 'برای باخبر شدن از پست های جدید، در این موضوع عضو شدید',
	'ASCENDING'						=> 'صعودی',
	'ATTACHMENTS'					=> 'پیوست ها',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'تصویر پیوست شده اعتبار ندارد',
	'AUTHOR'						=> 'نویسنده',
	'AUTH_NO_PROFILE_CREATED'		=> 'ایجاد مشخصات کاربر ناموفق بود',
	'AVATAR_DISALLOWED_CONTENT'		=> 'آپلود فایل رد شد،زیرا فایل آپلود شده به عنوان حمله ای که حاوی اطلاعات مخرب است، شناسایی شد  ',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'این فایل قابل مشاهده نیست زیرا افزونه <strong>%s</strong> اجازخ مشاهده نمی دهد ..',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'آواتار مشخص شده قابل آپلود شدن نیست زیرا داده از راه دور غیر معتبر و یا خراب است',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'فایل آپلود خالی است',
	'AVATAR_INVALID_FILENAME'		=> 'نام فایل %s غیر معتبر است',
	'AVATAR_NOT_UPLOADED'			=> 'آواتار آپلود نشد',
	'AVATAR_NO_SIZE'				=> 'عرض و پهنای آواتار لینک داده شده مشخص نیست،لطفا این اطلاعات را دستی وارد کنید',
	'AVATAR_PARTIAL_UPLOAD'			=> 'فقط قسمتی از آواتار مشخص شده آپلود شد.',
	'AVATAR_PHP_SIZE_NA'			=> 'حجم فایل آواتار بسیار زیاد است<br />حداکثر حجم فایل مورد قبول در php.ini قابل تشخیص نیست',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'حجم فایل آواتار بسیار زیاد است . حداکثر حجم مورد قبول %1$d %2$s است.<br />توجه داشته باشید مه این اطلاعات از php.ini اقتباس شده است و قابل بازنویسی است',
	'AVATAR_URL_INVALID'			=> 'لینک مشخص شده نامعتبر است',
	'AVATAR_URL_NOT_FOUND'			=> 'فایل مشخص شده یافت نشد',
	'AVATAR_WRONG_FILESIZE'			=> 'حجم فایل آواتا باید بین 0 و %1d %2s باشد.',
	'AVATAR_WRONG_SIZE'				=> 'پهنای آواتار مشخص شده %5$d پیکسل است و طول آن %6$d پیکسل است . پهنای آواتار باید حداقل %1$d پیکسل باشد . و طول آن حداقل %2$d پیکسل باشد, ولی بیشتر از %3$d پیکسل پهنا و %4$d پیکسل طول نداشته باشد',

	'BACK_TO_TOP'			=> 'بالا',
	'BACK_TO_PREV'			=> 'بازگشت به صفحه قبل',
	'BAN_TRIGGERED_BY_EMAIL'=> 'آدرس ایملتان تحریم شده است',
	'BAN_TRIGGERED_BY_IP'	=> 'IP شما تحریم شده است',
	'BAN_TRIGGERED_BY_USER'	=> 'نام کاربری شما تحریم شده است',
	'BBCODE_GUIDE'			=> 'راهنمای BBCode',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'تاریخ تولد ها',
	'BOARD_BAN_PERM'		=> 'برای <strong>همیشه</strong>از این تالار تحریم شده اید.<br /><br /> لطفا با مدیر تالار %2$s، %3$s برای اطلاعات بیشتر تماس بگیرید',
	'BOARD_BAN_REASON'		=> 'علت تحریم : <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'از این تالا تا <strong>%1$s</strong> تحریم شده اید. <br /><br /> لطفا با مدیر تالار %2$s، %3$s برای اطلاعات بیشتر تماس بگیرید',
	'BOARD_DISABLE'			=> 'با عرض پوزش در حال حاضر این تالار در دسترس نیست',
	'BOARD_DISABLED'		=> 'با عرض پوزش در حال حاضر این تالار بسته میباشد',
	'BOARD_UNAVAILABLE'		=> 'با عرض پوزش،تالار تا مدتی در دسترس نیست،لطفا چند دقیقه بعد دوباره امتحان کنید',
	'BROWSING_FORUM'		=> 'کاربران حاضر در این انجمن : %1$s',
	'BROWSING_FORUM_GUEST'	=> 'کاربران حاضر در این انجمن : %1$s و %2$d مهمان',
	'BROWSING_FORUM_GUESTS'	=> 'کاربران حاضر در این انجمن : %1$s و %2$d مهمان',
	'BYTES'					=> 'بایت',

	'CANCEL'				=> 'لغو',
	'CHANGE'				=> 'تغییر',
	'CHANGE_FONT_SIZE'		=> 'تغییر اندازه فونت',
	'CHANGING_PREFERENCES'	=> 'تغییر ترجیحات  تالار',
	'CHANGING_PROFILE'		=> 'تغییر تنظیمات پروفایل',
	'CLICK_VIEW_PRIVMSG'	=> '%sبه صندوق ورودی مراجعه کنید%s',
	'COLLAPSE_VIEW'			=> 'حالت کشویی',
	'CLOSE_WINDOW'			=> 'بستن پنجره',
	'COLOUR_SWATCH'			=> 'تغییر رنگ',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'تایید',
	'CONFIRM_CODE'			=> 'کد تایید',
	'CONFIRM_CODE_EXPLAIN'	=> 'کد مشاهده شده را به صورت دقیق وارد کنید. نسبت به حروف کوچک و بزرگ حساس است',
	'CONFIRM_CODE_WRONG'	=> 'کد تایید وارد شده نادرست میباشد',
	'CONFIRM_OPERATION'		=> 'آیا از انجام این کار مطمئن هستید ؟',
	'CONGRATULATIONS'		=> 'تبریک',
	'CONNECTION_FAILED'		=> 'اتصال صورت نگرفت.',
	'CONNECTION_SUCCESS'	=> 'اتصال با موفقیت صورت گرفت!',
	'COOKIES_DELETED'		=> 'همه کوکی های تالار با موفقیت حذف شدند',
	'CURRENT_TIME'			=> 'تاریخ : %s',

	'DAY'					=> 'روز',
	'DAYS'					=> 'روز',
	'DELETE'				=> 'حذف',
	'DELETE_ALL'			=> 'حذف همه',
	'DELETE_COOKIES'		=> 'حذف کوکی های تالار',
	'DELETE_MARKED'			=> 'حذف موارد انتخاب شده',
	'DELETE_POST'			=> 'حذف پست',
	'DELIMITER'				=> 'محدود کننده',
	'DESCENDING'			=> 'نزولی',
	'DISABLED'				=> 'غیرفعال',
	'DISPLAY'				=> 'نمایش',
	'DISPLAY_GUESTS'		=> 'نمایش مهمان ها',
	'DISPLAY_MESSAGES'		=> 'نمایش پیغام ها از آخر به اول',
	'DISPLAY_POSTS'			=> 'نمایش پست ها از آخر به اول',
	'DISPLAY_TOPICS'		=> 'نمایش موضوعات از آخر به اول',
	'DOWNLOADED'			=> 'دانلود شده',
	'DOWNLOADING_FILE'		=> 'دانلود فایل',
	'DOWNLOAD_COUNT'		=> '%d بار دانلود شده است',
	'DOWNLOAD_COUNTS'		=> '%d با دانلود شده است',
	'DOWNLOAD_COUNT_NONE'	=> 'هنوز دانلود نشده است',
	'VIEWED_COUNT'			=> '%d بار مشاهده شده است',
	'VIEWED_COUNTS'			=> '%d بار مشاهده شده است',
	'VIEWED_COUNT_NONE'		=> 'هنوز مشاهده نشده است',

	'EDIT_POST'							=> 'ویرایش پست',
	'EMAIL'								=> 'ایمیل', // Short form for EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'آدرس ایمیل',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'در ارسال ایمیل مشکلی در <strong>سطر %1$s</strong>به وجود آمده است. پاسخ : %2$s.',
	'EMPTY_SUBJECT'						=> 'هنگام ارسال موضوعی باید عنوانی را برای آن مشخص کنید',
	'EMPTY_MESSAGE_SUBJECT'				=> 'هنگام ارسال پیغام جدید باید عنوانی را برای آن مشخص کنید',
	'ENABLED'							=> 'فعال',
	'ENCLOSURE'							=> 'حصار',		'ENTER_USERNAME'					=> 'نام کاربری وارد کنید',
	'ERR_CHANGING_DIRECTORY'			=> 'فعال سازی تغییر دایرکتوری',
	'ERR_CONNECTING_SERVER'				=> 'در اتصال به سرور مشکلی پیش آمد.',
	'ERR_JAB_AUTH'						=> 'سرور Jabber اجازه اتصال را نمیدهد',
	'ERR_JAB_CONNECT'					=> 'اتصال به سرور Jabber صورت نگرفت',
	'ERR_UNABLE_TO_LOGIN'				=> 'کلمه عبور و یا نام کاربری مشخص شده نادرست میباشد.',
	'ERR_UNWATCHING'					=> 'در لغو عضویت مشکلی پیش آمد.',
	'ERR_WATCHING'						=> 'در عضویت مشکلی پیش آمد.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'مسیر phpbb مشخص شده نامعتبر میباشد',
	'EXPAND_VIEW'						=> 'دید وسیع',
	'EXTENSION'							=> 'افزونه',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'افزونه <strong>%s</strong> غیرفعال شده است و قابل مشاهده نیست.',

	'FAQ'					=> 'راهنما',
	'FAQ_EXPLAIN'			=> 'سوالات متداول',
	'FILENAME'				=> 'نام فایل',
	'FILESIZE'				=> 'حجم فایل',
	'FILEDATE'				=> 'تاریخ فایل',
	'FILE_COMMENT'			=> 'دیدگاه فایل',
	'FILE_NOT_FOUND'		=> 'فایل درخواست شده یافت نشد.',
	'FIND_USERNAME'			=> 'جستجوی کاربران',
	'FOLDER'				=> 'پوشه',
	'FORGOT_PASS'			=> 'کلمه عبورم را فراموش کرده ام',
	'FORM_INVALID'			=> 'فرم ثبت شده نامعتبر میباشد،لطفا دوباره امتحان کنید',
	'FORUM'					=> 'انجمن',
	'FORUMS'				=> 'انجمن ها',
	'FORUMS_MARKED'			=> 'همه انجمن ها به عنوان خوانده شده علامت گذاری شدند',
	'FORUM_CAT'				=> 'شاخه انجمن',
	'FORUM_INDEX'			=> 'صفحه اول تالار',
	'FORUM_LINK'			=> 'لینک انجمن',
	'FORUM_LOCATION'		=> 'محل انجمن',
	'FORUM_LOCKED'			=> 'انجمن بسته است',
	'FORUM_RULES'			=> 'قوانین انجمن',
	'FORUM_RULES_LINK'		=> 'برای مشاهده قوانین انجمن لطفا اینجا کلیک کنید',
	'FROM'					=> 'از',
	'FSOCK_DISABLED'		=> 'عملیات پایان نیافت. تابع <var>fsockopen</var> غیرفعال شده است و یا در سرور یافت نشد.',
	'FSOCK_TIMEOUT'			=> 'درحین خواندن از شبکه،نشست قطع شد.',
	'FTP_FSOCK_HOST'				=> 'هاست FTP',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'سرور FTP (سروری که برای اتصال به سایتتان استفاده میکنید)',
	'FTP_FSOCK_PASSWORD'			=> 'کلمه عبور FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'کلمه عبور برای نام کاربری FTP شما',
	'FTP_FSOCK_PORT'				=> 'پرت (port) FTP',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'پرتی (port) برای اتصال به سایتتان از آن استفاده میکنید',
	'FTP_FSOCK_ROOT_PATH'			=> 'مسیر (path) phpbb',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'مسیر phpbb از روت (root) تا پوشه حاوی phpbb',
	'FTP_FSOCK_TIMEOUT'				=> 'زمان خروج (timeout) FTP',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'مدت زمانی که سیستم(به ثانیه) صبر خواهد کرد تا پاسخی از جانب سرور دریافت کند',
	'FTP_FSOCK_USERNAME'			=> 'نام کاربری FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'نام کاربری که برای اتصال به FTP سایتتان از آن استفاده میکنید',

	'FTP_HOST'					=> 'هاست FTP',
	'FTP_HOST_EXPLAIN'			=> 'هاستی که برای اتصال به FTP یاستتان از آن استفاده میکنید',
	'FTP_PASSWORD'				=> 'کلمه عبور FTP',
	'FTP_PASSWORD_EXPLAIN'		=> 'کلمه عبور برای نام کاربری FTP',
	'FTP_PORT'					=> 'پرت (port) FTP',
	'FTP_PORT_EXPLAIN'			=> 'پرتی (port) برای اتصال به سایتتان از آن استفاده میکنید',
	'FTP_ROOT_PATH'				=> 'مسیر (path) phpbb',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'مسیر phpbb از روت (root) تا پوشه حاوی phpbb',
	'FTP_TIMEOUT'				=> 'زمان خروج (timeout) FTP',
	'FTP_TIMEOUT_EXPLAIN'		=> 'مدت زمانی که سیستم(به ثانیه) صبر خواهد کرد تا پاسخی از جانب سرور دریافت کند',
	'FTP_USERNAME'				=> 'نام کاربری FTP',
	'FTP_USERNAME_EXPLAIN'		=> 'نام کاربری که برای اتصال به FTP سایتتان از آن استفاده میکنید',

	'GENERAL_ERROR'				=> 'خطای عمومی',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'برو',
	'GOTO_PAGE'					=> 'به صفحه برو',
	'GROUP'						=> 'گروه',
	'GROUPS'					=> 'گروه ها',
	'GROUP_ERR_TYPE'			=> 'نوع گروه نامناسب تایید شد',
	'GROUP_ERR_USERNAME'		=> 'نام گروهی مشخص نشده است',
	'GROUP_ERR_USER_LONG'		=> 'نام گروه باید حداکثر 60 کاراکتر باشد.نام گروه وارد شده بسیار طولانی است',
	'GUEST'						=> 'مهمان',
	'GUEST_USERS_ONLINE'		=> '%d مهمان آنلاین هستند',
	'GUEST_USERS_TOTAL'			=> '%d مهمان',
	'GUEST_USERS_ZERO_ONLINE'	=> '0 مهمان آنلاین است',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 مهمان',
	'GUEST_USER_ONLINE'			=> '%d مهمان آنلاین هستند',
	'GUEST_USER_TOTAL'			=> '%d مهمان',
	'G_ADMINISTRATORS'			=> 'مدیران',
	'G_BOTS'					=> 'ربات ها',
	'G_GUESTS'					=> 'مهمان',
	'G_REGISTERED'				=> 'کاربران عضو شده',
	'G_REGISTERED_COPPA'		=> 'کاربران عضو شده coppa',
	'G_GLOBAL_MODERATORS'		=> 'مدیران انجمن ها',
	'G_NEWLY_REGISTERED'		=> 'کاربران تازه عضو شده',

	'HIDDEN_USERS_ONLINE'			=> '%d کاربر مخفی آنلاین است',
	'HIDDEN_USERS_TOTAL'			=> '%d مخفی',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d مخفی و ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 کاربر مخفی آنلاین است',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 مخفی',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 مخفی و ',
	'HIDDEN_USER_ONLINE'			=> '%d کاربر مخفی آنلاین است',
	'HIDDEN_USER_TOTAL'				=> '%d مخفی',
	'HIDDEN_USER_TOTAL_AND'			=> '%d مخفی و ',
	'HIDE_GUESTS'					=> 'مهمان های مخفی',
	'HIDE_ME'						=> 'آنلاین بودن من را نشان نده',
	'HOURS'							=> 'ساعت',
	'HOME'							=> 'خانه',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ حالت',
	'IF'						=> 'اگر',
	'IMAGE'						=> 'تصویر',
	'IMAGE_FILETYPE_INVALID'	=> 'نوع فایل تصویر %d برای mimetype %s پشتیبانی نمیشود.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'عدم تطبیق نوع فایل تصویر : افزونه مورد انتظار %1$s است ولی افزونه %2$s نمایش داده میشود.',
	'IN'						=> 'در',
	'INDEX'						=> 'صفحه اول',
	'INFORMATION'				=> 'اطلاعات',
	'INTERESTS'					=> 'علایق',
	'INVALID_DIGEST_CHALLENGE'	=> 'پرس و جوی نا معتبر',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> احتمالا ایمیل نامعتبری است ؟',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'IP شما %1$s مسدود شده است زیرا در لیست مسدود ها قرار دارد. برای جزئیات به <a href="%2$s">%2$s</a> مراجعه کنید',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'تاریخ عضویت',
	'JUMP_PAGE'				=> 'شماره صفحه ای را که میخواهید بروید،وارد کنید',
	'JUMP_TO'				=> 'پرش به',
	'JUMP_TO_PAGE'			=> 'برای پرش به صفحه ای کلیک کنید ...',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'آخرین پست',
	'LAST_UPDATED'						=> 'آخرین بروزرسانی',
	'LAST_VISIT'						=> 'آخرین بازدید',
	'LDAP_NO_LDAP_EXTENSION'			=> 'افزونه LDAP موجود نیست',
	'LDAP_NO_SERVER_CONNECTION'			=> 'اتصال به سرور LDAP صورت نگرفت',
	'LDAP_SEARCH_FAILED'				=> 'در حین جستجوی دایرکتوری LDAP مشکلی پیش آمد',
	'LEGEND'							=> 'صلاحیت ها',
	'LOCATION'							=> 'محل اقامت',
	'LOCK_POST'							=> 'قفل کردن پست',
	'LOCK_POST_EXPLAIN'					=> 'جلوگیری از ویرایش',
	'LOCK_TOPIC'						=> 'بستن موضوع',
	'LOGIN'								=> 'ورود',
	'LOGIN_CHECK_PM'					=> 'برای مشاهده پیغام خصوصی،وارد شوید',
	'LOGIN_CONFIRMATION'				=> 'تایید ورود',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'در این بخش، برای جلوگیری از ورودی های مخرب به اکانتتان، اگر بیش از مقدار تایین شده به صورت نادرست کلمه عبور و نام کاربریتان را وارد کنید،از شما خواهد خواست که که کد تایید را وارد کنید.اگر نمیتوانید کد را ببینید و یا بخوانید لطفا با مدیر انجمن %s،%s تماس خاصل فرمایید', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'بیش از حد مجاز اقدام به ورود به اکانتتان کرده اید، حال باید علاوه بر وارد کردن نام کاربری و کلمه عبور، کد تایید را نیز وارد کنید.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'هویت شما از طرف آپاچی تایید نشد.',
	'LOGIN_ERROR_PASSWORD'				=> 'کلمه عبور وارد شده اشتباه میباشد،لطفا دوباره امتحان کنید و اگر نتوانستید با %s مدیر کل تالار تماس بگیرید%s',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'در حین بروزرسانی این نرم افزار، امکان بازگردانی کلمه عبور شما وجود ندارد. لطفا %s کلمه عبور جدیدی را %s.اگر باز هم مشکلی داشتید،لطفا با مدیر %s ،%s تماس بگیرید ',
	'LOGIN_ERROR_USERNAME'				=> 'کلمه عبور نادرستی را وارد کرده اید،لطفا دوباره امتحان کنید. اگر بازهم مشکلی داشتید با مدیر %s ،%s تماس بگیرید. ',
	'LOGIN_FORUM'						=> 'برای مشاهده پست های این انجمن باید کلمه عبور را وارد کنید',
	'LOGIN_INFO'						=> 'برای ورود باید ثبت نام کنید،ثبت نام در تالار فقط چند ثانیه میخواهد ولی سطح دسترسیتان را بالا میبرد. مدیر تالار میتواند به کاربران اختیارات دیگری نیز دهد و سطح دسترسی آنها را بالا ببرد،قبل از ثبت نام لطفا قوانین تالار را بخوانید و از آشنایی با آنها مطمئن شوید تا در آینده مشکلی پیش نیاید.',
	'LOGIN_VIEWFORUM'					=> 'برای مشاهده انجمن این تالارلطفا ثبت نام کنید و وارد شوید.',
	'LOGIN_EXPLAIN_EDIT'				=> 'برای ویرایش پست های این انجمن باید ثبت نام کنید و وارد شوید.',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'برای مشاهده لیست افراد آنلاین باید ثبت نام کرده و وارد شوید',
	'LOGOUT'							=> 'خروج',
	'LOGOUT_USER'						=> 'خروج [ %s ]',
	'LOG_ME_IN'							=> 'در هر بازدید به طور خودکار من را وارد کن',

	'MARK'					=> 'علامت',
	'MARK_ALL'				=> 'علامت گذاری همه',
	'MARK_FORUMS_READ'		=> 'علامت گذاری انجمن ها به عنوان خوانده شده',
    'MARK_SUBFORUMS_READ'	=> 'علامت گذاری زیرانجمن ها به عنوان خوانده شده',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'کنترل پنل مدیر انجمن',
	'MEMBERLIST'			=> 'اعضا',
	'MEMBERLIST_EXPLAIN'	=> 'لیست کامل اعضا',
	'MERGE'					=> 'ادغام',
	'MERGE_POSTS'			=> 'ادغام پست ها',
	'MERGE_TOPIC'			=> 'ادغام موضوعات',
	'MESSAGE'				=> 'پیغام',
	'MESSAGES'				=> 'پیغام ها',
	'MESSAGE_BODY'			=> 'بدنه پیغام',
	'MINUTES'				=> 'دقیقه',
	'MODERATE'				=> 'نظارت',
	'MODERATOR'				=> 'مدیر انجمن',
	'MODERATORS'			=> 'مدیران انجمن',
	'MONTH'					=> 'ماه',
	'MOVE'					=> 'انتقال',
	'MSNM'					=> 'MSNM/WLM',

	'NA'						=> 'N/A',
	'NEWEST_USER'				=> 'جدیدترین عضو : <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'پیغام جدید',
	'NEW_MESSAGES'				=> 'پیغام های جدید',
	'NEW_PM'					=> '<strong>%d</strong> پیغام جدید',
	'NEW_PMS'					=> '<strong>%d</strong> پیغام جدید',
	'NEW_POST'					=> 'پست جدید',	// Not used anymore
	'NEW_POSTS'					=> 'پست های جدید',	// Not used anymore
	'NEXT'						=> 'بعدی',		// Used in pagination
	'NEXT_STEP'					=> 'بعدی',
	'NEVER'						=> 'هرگز',
	'NO'						=> 'نه',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'اجازه مدیریت این گروه را ندارید',
	'NOT_AUTHORISED'			=> 'اجازه دسترسی به این محیط را ندارید',
	'NOT_WATCHING_FORUM'		=> 'به بروزرسانی های این انجمن عضو نیستید',
	'NOT_WATCHING_TOPIC'		=> 'به بروزرسانی های این موضوع عضو نیستید',
	'NOTIFY_ADMIN'				=> 'لطفا به مدیر تالار اطلاع دهید.',
	'NOTIFY_ADMIN_EMAIL'		=> 'لطفا به مدیر تالار اطلاع دهید : <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'اجازه دسترسی به این فایل را ندارید',
	'NO_ACTION'					=> 'عملی مشخص نشده است.',
	'NO_ADMINISTRATORS'			=> 'مدیری موجود نیست.',
	'NO_AUTH_ADMIN'				=> 'دسترسی به کنترل پنل مدیر برای شما که سطح دسترسی مدیریت را ندارید مقدور نمی باشد',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'اجازه تایید کاربر دیگری را ندارید.',
	'NO_AUTH_OPERATION'			=> 'سطح دسترسی لازم برای انجام این عملیات را ندارید.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'اتصال به سرور smtp موجود نیست. %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'امروز تاریخ تولدی موجود نیست.',
	'NO_EMAIL_MESSAGE'			=> 'پیغام ایمیل خالی است',
	'NO_EMAIL_RESPONSE_CODE'	=> 'از سرور ایمیل پاسخی دریافت نشد',
	'NO_EMAIL_SUBJECT'			=> 'عنوانی برای ایمیل مشخص نشده است',
	'NO_FORUM'					=> 'انجمن انتخاب شده موجود نیست.',
	'NO_FORUMS'					=> 'این تالار انجمنی ندارد.',
	'NO_GROUP'					=> 'گروه کاربری درخواست شده موجود نمی باشد.',
	'NO_GROUP_MEMBERS'			=> 'این گروه عضوی ندارد.',
	'NO_IPS_DEFINED'			=> 'IP adress یا hostname مشخص نشده است',
	'NO_MEMBERS'				=> 'مطابق با این معیار های جستجو کاربری یافت نشد.',
	'NO_MESSAGES'				=> 'پیغامی وجود ندارد.',
	'NO_MODE'					=> 'مدی (mode) مشخص نشده است',
	'NO_MODERATORS'				=> 'مدیر انجمنی وجود ندارد.',
	'NO_NEW_MESSAGES'			=> 'پیغام جدیدی وجود ندارد',
	'NO_NEW_PM'					=> '<strong>0</strong> پیغام جدید',
	'NO_NEW_POSTS'				=> 'پست جدیدی موجود نیست',	// Not used anymore
	'NO_ONLINE_USERS'			=> 'کاربر عضو شده ای موجود نیست',
	'NO_POSTS'					=> 'پستی موجود نیست',
	'NO_POSTS_TIME_FRAME'		=> 'در بازه زمانی انتخاب شده،پستی درون انجمن موجود نیست.',
	'NO_FEED_ENABLED'			=> 'در این تالار خوراک (feeds) در دسترس نیستند',
	'NO_FEED'					=> 'خوراک (feed) درخواست شده،در دسترس نیست',
	'NO_SUBJECT'				=> 'عنوانی تایین نشده است.',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'جستجوی مورد نظر نتیجه ای دربر نداشت',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'متد های تایید پشتیبانی نشد.',
	'NO_TOPIC'					=> 'موضوع درخواست شده موجود نیست',
	'NO_TOPIC_FORUM'			=> 'موضوع و یا انجمن موجود نیست.',
	'NO_TOPICS'					=> 'هیچ موضوع و یا پستی در این انجمن موجود نیست.',
	'NO_TOPICS_TIME_FRAME'		=> 'در بازه زمانی تایین شده،موضوعی در این انجمن وجود ندارد',
	'NO_UNREAD_PM'				=> '<strong>0</strong> پیغام خوانده نشده',
	'NO_UNREAD_POSTS'			=> 'پست خوانده نشده ای وجود ندارد',			'UNWATCH_FORUM_CONFIRM'		=> 'آیا از لغو عضویت در این انجمن مطمئن هستید ؟',	'UNWATCH_FORUM_DETAILED'	=> 'آیا از لغو عضویت در لنجمن “%s” مطمئن هستید ؟',	'UNWATCH_TOPIC_CONFIRM'		=> 'آیا از لغو عضویت در این موضوع مطمئن هستید ؟',	'UNWATCH_TOPIC_DETAILED'	=> 'آیا از لغو عضویت در موضوع “%s” مطمئن هستید ؟',
	'NO_UPLOAD_FORM_FOUND'		=> 'بارگیری آغاز شد ولی فرم معتبری برای بارگیری یافت نشد.',
	'NO_USER'					=> 'کاربر درخواست شده موجود نیست.',
	'NO_USERS'					=> 'کاربران درخواست شده موجود نیستند',
	'NO_USER_SPECIFIED'			=> 'نام کاربری مشخص نشده است',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'پستی در صف وجود ندارد',		// 0
		1			=> '1 پست در صف است',		// 1
		2			=> '%d پست در صف است',		// 2+
	),

	'OCCUPATION'				=> 'شغل',
	'OFFLINE'					=> 'آفلاین',
	'ONLINE'					=> 'آنلاین',
	'ONLINE_BUDDIES'			=> 'دوستان آنلاین',
	'ONLINE_USERS_TOTAL'		=> 'در مجموع <strong>%d</strong> کاربر آنلاین هستند :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'در مجموع <strong>0</strong> کاربر آنلاین است :: ',
	'ONLINE_USER_TOTAL'			=> 'در مجموع <strong>%d</strong> کاربر آنلاین است ',
	'OPTIONS'					=> 'گزینه ها',

	'PAGE_OF'				=> 'صفحه <strong>%1$d</strong> از <strong>%2$d</strong>',
	'PASSWORD'				=> 'کلمه عبور',
	'PIXEL'					=> 'px',
	'PLAY_QUICKTIME_FILE'	=> 'فایل QuickTime را پخش کن',
	'PM'					=> 'PM',
	'PM_REPORTED'			=> 'برای مشاهده گزارش کلیک کنید.',
	'POSTING_MESSAGE'		=> 'ارسال پیغام خصوصی به %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'در حال ساختن پیغام خصوصی',
	'POST'					=> 'پست',
	'POST_ANNOUNCEMENT'		=> 'اطلاعیه',
	'POST_STICKY'			=> 'مهم',
	'POSTED'				=> 'ارسال شده',
	'POSTED_IN_FORUM'		=> 'در',
	'POSTED_ON_DATE'		=> 'تاریخ',
	'POSTS'					=> 'پست',
	'POSTS_UNAPPROVED'		=> 'حداقل یک پست در این موضوع تایید نشده است',
	'POST_BY_AUTHOR'		=> 'توسط',
	'POST_BY_FOE'			=> 'این پست توسط <strong>%1$s</strong> که در لیست تحریم شما قرار دارد، ارسال شده است. برای مشاهده پست %2$sدر اینجا%3$sکلیک کنید',
	'POST_DAY'				=> '%.2f پست در روز',
	'POST_DETAILS'			=> 'جزئیات پست',
	'POST_NEW_TOPIC'		=> 'ارسال موضوع جدید',
	'POST_PCT'				=> '%.2f%% از همه پست ها',
	'POST_PCT_ACTIVE'		=> '%.2f%% از پست های کاربران',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% از پست های شما',
	'POST_REPLY'			=> 'ارسال پاسخ',
	'POST_REPORTED'			=> 'برای مشاهده گزارش کلیک کنید',
	'POST_SUBJECT'			=> 'عنوان پست',
	'POST_TIME'				=> 'تاریخ پست',
	'POST_TOPIC'			=> 'ارسال موضوع جدید',
	'POST_UNAPPROVED'		=> 'این پست منتظر تایید است',
	'PREVIEW'				=> 'پیشنمایش',
	'PREVIOUS'				=> 'قبلی',		// Used in pagination
	'PREVIOUS_STEP'			=> 'قبلی',
	'PRIVACY'				=> 'سیاست حفظ اسرار',
	'PRIVATE_MESSAGE'		=> 'پیغام خصوصی',
	'PRIVATE_MESSAGES'		=> 'پیغام های خصوصی',
	'PRIVATE_MESSAGING'		=> 'پیغام خصوصی',
	'PROFILE'				=> 'کنترل پنل کاربر',

	'READING_FORUM'				=> 'مشاهده موضوعات در %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'خواندن اطلاعیه سراسری',
	'READING_LINK'				=> 'لینک انجمن %s',
	'READING_TOPIC'				=> 'خواندن موضوع در %s',
	'READ_PROFILE'				=> 'پروفایل',
	'REASON'					=> 'دلیل',
	'RECORD_ONLINE_USERS'		=> 'بیشترین تعداد کاربر آنلاین <strong>%1$s</strong> نفر در تاریخ %2$s است',
	'REDIRECT'					=> 'انتقال',
	'REDIRECTS'					=> 'کل انتقال ها',
	'REGISTER'					=> 'ثبت نام',
	'REGISTERED_USERS'			=> 'کاربران عضو شده :',
	'REG_USERS_ONLINE'			=> '%d کاربر عضو شده و ',
	'REG_USERS_TOTAL'			=> '%d عضو شده، ',
	'REG_USERS_TOTAL_AND'		=> '%d عضو شده و ',
	'REG_USERS_ZERO_ONLINE'		=> '0 کاربر عضو شده و ',
	'REG_USERS_ZERO_TOTAL'		=> '0 عضو شده، ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 عضو شده و ',
	'REG_USER_ONLINE'			=> '%d کاربر عضئ شده و ',
	'REG_USER_TOTAL'			=> '%d عضو شده، ',
	'REG_USER_TOTAL_AND'		=> '%d عضو شده و ',
	'REMOVE'					=> 'حذف',
	'REMOVE_INSTALL'			=> 'لطفا پوشه install را حذف ،انتفال و یا تغییر نام دهید در غیر این صورت فقط کنترل پنل مدیریت  در دسترس خواهد بود.',
	'REPLIES'					=> 'پاسخ ها',
	'REPLY_WITH_QUOTE'			=> 'پاسخ با نقل قول',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'پاسخ به اطلاعیه ی سرارسری',
	'REPLYING_MESSAGE'			=> 'پاسخ به پیغام در %s',
	'REPORT_BY'					=> 'گزارش شده توسط',
	'REPORT_POST'				=> 'گزارش این پست',
	'REPORTING_POST'			=> 'گزارش پست',
	'RESEND_ACTIVATION'			=> 'ارسال دوباره ی لینک فعال سازی به ایمیل',
	'RESET'						=> 'بازیابی',
	'RESTORE_PERMISSIONS'		=> 'سطوح دسترسی بازیابی',
	'RETURN_INDEX'				=> '%sبازگشت به صفحه نخست%s',
	'RETURN_FORUM'				=> '%sبازگشت به آخرین انجمن بازدید شده%s',
	'RETURN_PAGE'				=> '%sبازگشت به صفحه قبل%s',
	'RETURN_TOPIC'				=> '%sبازگشت به آخرین موضوع مشاهده شدهs',
	'RETURN_TO'					=> 'بازگشت به',
	'FEED'						=> 'خوراک',
	'FEED_NEWS'					=> 'اخبار',
	'FEED_TOPICS_ACTIVE'		=> 'موضوعات فعال',
	'FEED_TOPICS_NEW'			=> 'موضوعات جدید',
	'RULES_ATTACH_CAN'			=> 'در این انجمن <strong>میتوانید</strong> پیوست ارسال کنید',
	'RULES_ATTACH_CANNOT'		=> 'در این انجمن <strong>نمیتوانید</strong> پیوست ارسال کنید',
	'RULES_DELETE_CAN'			=> 'در این انجمن <strong>میتوانید</strong> پست های خود را حذف کنید',
	'RULES_DELETE_CANNOT'		=> 'در این انجمن <strong>نمیتوانید</strong> پست های خود را حذف کنید',
	'RULES_DOWNLOAD_CAN'		=> 'در این انجمن <strong>میتوانید</strong> پیوست ها را دانلود کنید',
	'RULES_DOWNLOAD_CANNOT'		=> 'در این انجمن <strong>نمیتوانید</strong> پیوست ها را دانلود کنید',
	'RULES_EDIT_CAN'			=> 'در این انجمن <strong>میتوانید</strong> پست خود را ویرایش کنید',
	'RULES_EDIT_CANNOT'			=> 'در این انجمن <strong>نمیتوانید</strong> پست خود را ویرایش کنید',
	'RULES_LOCK_CAN'			=> 'در این انجمن <strong>میتوانید</strong> موضوعات خود را قفل کنید',
	'RULES_LOCK_CANNOT'			=> 'در این انجمن <strong>نمیتوانید</strong> موضوعات خود را قفل کنید',
	'RULES_POST_CAN'			=> 'در این انجمن <strong>میتوانید </strong> موضوعات جدیدی ارسال کنید',
	'RULES_POST_CANNOT'			=> 'در این انجمن <strong>نمیتوانید </strong> موضوعات جدیدی ارسال کنید',
	'RULES_REPLY_CAN'			=> 'در این انجمن <strong>میتوانید</strong> به موضوعات پاسخ دهید',
	'RULES_REPLY_CANNOT'		=> 'در این انجمن <strong>نمیتوانید</strong> به موضوعات پاسخ دهید',
	'RULES_VOTE_CAN'			=> 'در این انجمن <strong>میتوانید</strong> به نظرسنجی ها رای بدهید',
	'RULES_VOTE_CANNOT'			=> 'در این انجمن <strong>نمیتوانید</strong> به نظر سنجی ها رای بدهید',

	'SEARCH'					=> 'جستجو',
	'SEARCH_MINI'				=> 'جستجو …',
	'SEARCH_ADV'				=> 'جستجوی پیشرفته',
	'SEARCH_ADV_EXPLAIN'		=> 'مشاهده گزینه های جستجوی پیشرفته',
	'SEARCH_KEYWORDS'			=> 'جستجوی کلمات کلیدی',
	'SEARCHING_FORUMS'			=> 'انجمن جستجو میشود',
	'SEARCH_ACTIVE_TOPICS'		=> 'مشاهده موضوعات فعال',
	'SEARCH_FOR'				=> 'جستجو برای',
	'SEARCH_FORUM'				=> 'جستجوی این انجمن …',
	'SEARCH_NEW'				=> 'مشاهده پست های جدید',
	'SEARCH_POSTS_BY'			=> 'جستجوی پست ها بر اساس',
	'SEARCH_SELF'				=> 'مشاهده پست های شما',
	'SEARCH_TOPIC'				=> 'جستجوی این موضوع …',
	'SEARCH_UNANSWERED'			=> 'مشاهده پست های پاسخ داده نشده',
	'SEARCH_UNREAD'				=> 'مشاهده پست های خوانده نشده',
	'SEARCH_USER_POSTS'			=> 'جستجوی پست های کاربر',
	'SECONDS'					=> 'ثانیه',
	'SELECT'					=> 'انتخاب',
	'SELECT_ALL_CODE'			=> 'انتخاب همه',
	'SELECT_DESTINATION_FORUM'	=> 'لطفا انجمن مقصد را انتخاب کنید',
	'SELECT_FORUM'				=> 'انجمنی را انتخاب کنید',
	'SEND_EMAIL'				=> 'ایمیل',				// Used for submit buttons
	'SEND_EMAIL_USER'			=> 'ایمیل',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'ارسال پیغام خصوصی',
	'SETTINGS'					=> 'تنظیمات',
	'SIGNATURE'					=> 'امضا',
	'SKIP'						=> 'پرش به محتوا',
	'SMTP_NO_AUTH_SUPPORT'		=> 'سرور SMTP تصدیق نمیشود',
	'SORRY_AUTH_READ'			=> 'اجازه خواندن این انجمن را ندارید',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'اجازه دانلود این پیوست را ندارید',
	'SORT_BY'					=> 'مرتب سازی بر اساس',
	'SORT_JOINED'				=> 'تاریخ عضویت',
	'SORT_LOCATION'				=> 'محل اقامت',
	'SORT_RANK'					=> 'رتبه',
	'SORT_POSTS'				=> 'پست ها',
	'SORT_TOPIC_TITLE'			=> 'عنوان موضوع',
	'SORT_USERNAME'				=> 'نام کاربری',
	'SPLIT_TOPIC'				=> 'تقسیم موضوع',
	'SQL_ERROR_OCCURRED'		=> 'در حین بارگزاری این صفحه مشکلی در SQL پیش آمد، اگر مشکل ادامه داشت،لطفا با مدیریت تماس بگیرید.',
	'STATISTICS'				=> 'آمار',
	'START_WATCHING_FORUM'		=> 'عضویت در انجمن',
	'START_WATCHING_TOPIC'		=> 'عضویت در موضوع',
	'STOP_WATCHING_FORUM'		=> 'لغو عضویت در انجمن',
	'STOP_WATCHING_TOPIC'		=> 'لغو عضویت در موضوع',
	'SUBFORUM'					=> 'زیرانجمن',
	'SUBFORUMS'					=> 'زیرانجمن ها',
	'SUBJECT'					=> 'عنوان',
	'SUBMIT'					=> 'ارسال',

	'TERMS_USE'			=> 'قوانین استفاده',
	'TEST_CONNECTION'	=> 'کنترل کانکشن',
	'THE_TEAM'			=> 'تیم پشتیبانی',
	'TIME'				=> 'زمان',
	
	'TOO_LARGE'						=> 'مقدار وارد شده بسیار زیاد میباشد.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> ' مقدار گزینه <strong>بیشترین تعداد گیرنده در هر پیغام خصوصی</strong> بسیار زیاد است',

	'TOO_LONG'						=> 'مقدار وارد شده بسیار طولانی است',

	'TOO_LONG_AIM'					=> 'نام نمایشی وارد شده بسیار طولانی است.',
	'TOO_LONG_CONFIRM_CODE'			=> 'کد تایید وارد شده بسیار طویل است.',
	'TOO_LONG_DATEFORMAT'			=> 'فرمت تاریخ وارد شده بسیار طولانی است.',
	'TOO_LONG_ICQ'					=> 'شماره ICQ وارد شده بسیار طولانی است.',
	'TOO_LONG_INTERESTS'			=> 'علایق وارد شده بسیار طولانی است',
	'TOO_LONG_JABBER'				=> 'اکانت jabber وارد شده بسیار طولانی است.',
	'TOO_LONG_LOCATION'				=> 'محل اقامت وارد شده بسیار طولانی است.',
	'TOO_LONG_MSN'					=> 'نام MNS/WLM وارد شده بسیار طولانی است.',
	'TOO_LONG_NEW_PASSWORD'			=> 'کلمه عبور وارد شده بسیار طولانی است.',
	'TOO_LONG_OCCUPATION'			=> 'شغل وارد شده بسیار طولانی است.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'تایید کلمه عبور وارد شده بسیار طولانی است.',
	'TOO_LONG_USER_PASSWORD'		=> 'کلمه عبور وارد شده بسیار طولانی است.',
	'TOO_LONG_USERNAME'				=> 'نام کاربری وارد شده بسیار طولانی است.',
	'TOO_LONG_EMAIL'				=> 'آدرس ایمیل وارد شده بسیار طولانی است.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'تایید ایمیل آدرس بسیا طولانی است.',
	'TOO_LONG_WEBSITE'				=> 'آدرس وبسایت وارد شده بسیار طولانی است.',
	'TOO_LONG_YIM'					=> 'نام یاهو! مسنجر وارد شده بسیار طولانی است',

	'TOO_MANY_VOTE_OPTIONS'			=> 'به گزینه های زیادی رای داده اید',

	'TOO_SHORT'						=> 'مقدار وارد شده بسیار کوتاه میباشد.',

	'TOO_SHORT_AIM'					=> 'نام نمایشی وارد شده بسیار کوتاه است.',
	'TOO_SHORT_CONFIRM_CODE'			=> 'کد تایید وارد شده بسیار کوتاه است.',
	'TOO_SHORT_DATEFORMAT'			=> 'فرمت تاریخ وارد شده بسیار کوتاه است.',
	'TOO_SHORT_ICQ'					=> 'شماره ICQ وارد شده بسیار کوتاه است.',
	'TOO_SHORT_INTERESTS'			=> 'علایق وارد شده بسیار کوتاه است',
	'TOO_SHORT_JABBER'				=> 'اکانت jabber وارد شده بسیار کوتاه است.',
	'TOO_SHORT_LOCATION'				=> 'محل اقامت وارد شده بسیار کوتاه است.',
	'TOO_SHORT_MSN'					=> 'نام MNS/WLM وارد شده بسیار کوتاه است.',
	'TOO_SHORT_NEW_PASSWORD'			=> 'کلمه عبور وارد شده بسیار کوتاه است.',
	'TOO_SHORT_OCCUPATION'			=> 'شغل وارد شده بسیار کوتاه است.',
	'TOO_SHORT_PASSWORD_CONFIRM'		=> 'تایید کلمه عبور وارد شده بسیار کوتاه است.',
	'TOO_SHORT_USER_PASSWORD'		=> 'کلمه عبور وارد شده بسیار کوتاه است.',
	'TOO_SHORT_USERNAME'				=> 'نام کاربری وارد شده بسیار کوتاه است.',
	'TOO_SHORT_EMAIL'				=> 'آدرس ایمیل وارد شده بسیار کوتاه است.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'تایید ایمیل آدرس بسیا کوتاه است.',
	'TOO_SHORT_WEBSITE'				=> 'آدرس وبسایت وارد شده بسیار کوتاه است.',
	'TOO_SHORT_YIM'					=> 'نام یاهو! مسنجر وارد شده بسیار کوتاه است',
	
	'TOO_SMALL'						=> 'مقدار وارد شده بسیار کم است.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'مقدار گزینه <strong>بیشترین تعداد گیرنده در هر پیغام خصوصی</strong> بسیار کم است',

	'TOPIC'				=> 'موضوع',
	'TOPICS'			=> 'موضوع ها',
	'TOPICS_UNAPPROVED'	=> 'حداقل یک موضوع در این انجمن تایید نشده است',
	'TOPIC_ICON'		=> 'آیکون موضوع',
	'TOPIC_LOCKED'		=> 'این موضوع قفل شده است،نمیتوانید پستی را ویرایش کنید و یا پاسخی را ارسال کنید.',
	'TOPIC_LOCKED_SHORT'=> 'موضوع قفل شده است',
	'TOPIC_MOVED'		=> 'موضوع انتقال داده شده',
	'TOPIC_REVIEW'		=> 'پیشنمایش موضوع',
	'TOPIC_TITLE'		=> 'عنوان موضوع',
	'TOPIC_UNAPPROVED'	=> 'این موضوع تایید نشده است.',
	'TOTAL_ATTACHMENTS'	=> 'پیوست (ها)',
	'TOTAL_LOG'			=> '1 رویداد',
	'TOTAL_LOGS'		=> '%d رویداد',
	'TOTAL_NO_PM'		=> 'درمجموع 0 پیغام خصوصی',
	'TOTAL_PM'			=> 'در مجموع 1 پیغام خصوصی',
	'TOTAL_PMS'			=> 'در مجموع %d پیغام خصوصی',
	'TOTAL_POSTS'		=> 'مجموع پست ها',
	'TOTAL_POSTS_OTHER'	=> 'مجموع پست ها <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'مجموع پست ها <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'این موضوع گزارش داده شده است.',
	'TOTAL_TOPICS_OTHER'=> 'مجموع موضوعات <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'مجموع موضوعات <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'مجموع کاربران <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'مجموع اعضا <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'زنجیره خطا های php : %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'تایین ابعاد تصویر ممکن نیست',
	'UNABLE_TO_DELIVER_FILE'=> 'ارسال فایل ممکن نیست',
	'UNKNOWN_BROWSER'		=> 'مرورگر ناشناس',
	'UNMARK_ALL'			=> 'لغو انتخاب همه',
	'UNREAD_MESSAGES'		=> 'پیغام های خوانده نشده',
	'UNREAD_PM'				=> '<strong>%d</strong> پیغام خوانده نشده',
	'UNREAD_PMS'			=> '<strong>%d</strong> پیغام خوانده نشده',
	'UNREAD_POST'			=> 'پست خوانده نشده',
	'UNREAD_POSTS'			=> 'پست های خوانده نشده',
	'UNWATCHED_FORUMS'			=> 'در انجمن انتخاب شده عضو نیستید.',
	'UNWATCHED_TOPICS'			=> 'در موضوع انتخاب شده عضو نیستید.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'در نوشته انتخاب شده عضو نیستید.',
	'UPDATE'				=> 'بروزرسانی',
	'UPLOAD_IN_PROGRESS'	=> 'بارگیری صورت میگیرد',
	'URL_REDIRECT'			=> 'اگر مرورگرتان از meta redirection پشتیبانی نمیکند، %sبرای انتقال اینجا کلیک کنید%s.',
	'USERGROUPS'			=> 'گروه ها',
	'USERNAME'				=> 'نام کاربری',
	'USERNAMES'				=> 'نام های کاربری',
	'USER_AVATAR'			=> 'آواتار کاربر',
	'USER_CANNOT_READ'		=> 'نمیتوانید پست های این انجمن را بخوانید',
	'USER_POST'				=> '%d پست',
	'USER_POSTS'			=> '%d پست',
	'USERS'					=> 'کاربران',
	'USE_PERMISSIONS'		=> 'سطوح دسترسی کاربران را کنترل کن',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'با عرض پوزش اجازه دسترسی به این ویژگی را ندارید،برای بالا بردن سطح دسترسیتان لطفا بیشتر در تالار فعالیت کنید تا بتوانید از این ویژگی استفاده کنید.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'در حال مشاهده شده',
	'VIEWING_FAQ'				=> 'در حال مشاهده راهنما',
	'VIEWING_MEMBERS'			=> 'در حال مشاهده جزئیات اعضا',
	'VIEWING_ONLINE'			=> 'در حال مشاهده افراد آنلاین',
	'VIEWING_MCP'				=> 'در حال مشاهده کنترل پنل مدیر انجمن',
	'VIEWING_MEMBER_PROFILE'	=> 'در حال مشاهده پروفایل کاربر',
	'VIEWING_PRIVATE_MESSAGES'	=> 'در حال مشاهده پیغام خصوصی',
	'VIEWING_REGISTER'			=> 'در حال ثبت اکانت',
	'VIEWING_UCP'				=> 'در حال مشاهده کنترل پنل کاربر',
	'VIEWS'						=> 'مشاهده شده',
	'VIEW_BOOKMARKS'			=> 'مشاهده بوکمارک ها',
	'VIEW_FORUM_LOGS'			=> 'مشاهده رویداد های انجمن',
	'VIEW_LATEST_POST'			=> 'مشاهده آخرین پست',
	'VIEW_NEWEST_POST'			=> 'مشاهده اولین پست خوانده نشده',
	'VIEW_NOTES'				=> 'مشاهده یادداشت های کاربران',
	'VIEW_ONLINE_TIME'			=> 'بر اساس کاربران فعال در %d دقیقه گذشته',
	'VIEW_ONLINE_TIMES'			=> 'بر اساس کاربران فعال در %d دقیقه گذشته',
	'VIEW_TOPIC'				=> 'مشاهده موضوع',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'اطلاعیه : ',
	'VIEW_TOPIC_GLOBAL'			=> 'اطلاعیه ی سراسری : ',
	'VIEW_TOPIC_LOCKED'			=> 'قفل شده : ',
	'VIEW_TOPIC_LOGS'			=> 'مشاهده رویداد ها',
	'VIEW_TOPIC_MOVED'			=> 'انتقال داده شده : ',
	'VIEW_TOPIC_POLL'			=> 'نظرسنجی : ',
	'VIEW_TOPIC_STICKY'			=> 'مهم : ',
	'VISIT_WEBSITE'				=> 'بازدید از وبسایت',

	'WARNINGS'			=> 'هشدار ها',
	'WARN_USER'			=> 'هشدار به کاربر',		'WATCH_FORUM_CONFIRM'	=> 'آیا از عضویت در انجمن مطمئن هستید ؟',	'WATCH_FORUM_DETAILED'	=> 'آیا از عضویت در انجمن “%s” مطمئن هستید ؟',	'WATCH_TOPIC_CONFIRM'	=> 'آیا از عضویت در این موضوع مطمئن هستید ؟',	'WATCH_TOPIC_DETAILED'	=> 'آیا از عضویت در موضوع “%s” مطمئن هستید ؟',
	'WELCOME_SUBJECT'	=> 'به انجمن های %s خوش آمدید',
	'WEBSITE'			=> 'وبسایت',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'چه کسی آنلاین است',
	'WRONG_PASSWORD'	=> 'کلمه عبور نادرستی را وارد کرده اید',

	'WRONG_DATA_ICQ'			=> 'شماره ICQ معتبری را وارد نکرده اید.',
	'WRONG_DATA_JABBER'			=> 'نام معتبری را برای اکانت jabber وارد نکرده اید',
	'WRONG_DATA_LANG'			=> 'زبان مشخص شده معتبر نیست',
	'WRONG_DATA_WEBSITE'		=> 'لینک آدرس وارد شده باید معتبر باشد. برای مثال : http://example.com',
	'WROTE'						=> 'نوشته است',

	'YEAR'				=> 'سال',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'				=> 'بله',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> 'آخرین بازدید : %s',
	'YOU_NEW_PM'		=> 'پیغام خصوصی جدیدی در صندوق ورودی شما قرار دارد.',
	'YOU_NEW_PMS'		=> 'پیغام های خصوصی جدیدی در صندوق ورودی شما قرار دارد',
	'YOU_NO_NEW_PM'		=> 'پیغام خصوصی جدیدی وجود ندارد',

	'datetime'			=> array(
		'TODAY'		=> 'امروز',
		'TOMORROW'	=> 'فردا',
		'YESTERDAY'	=> 'دیروز',
		'AGO'		=> array(
			0		=> 'کمتر از 1 دقیقه پیش',
			1		=> '%d دقیقه پیش',
			2		=> '%d دقیقه پیش',
			60		=> '1 ساعت پیش',
		),

		'Sunday'	=> 'یکشنبه',
		'Monday'	=> 'دوشنبه',
		'Tuesday'	=> 'سه شنبه',
		'Wednesday'	=> 'چهارشنبه',
		'Thursday'	=> 'پنج شنبه',
		'Friday'	=> 'جمعه',
		'Saturday'	=> 'شنبه',

		'Sun'		=> 'یکشنبه',
		'Mon'		=> 'دوشنبه',
		'Tue'		=> 'سه شنبه',
		'Wed'		=> 'چهارشنبه',
		'Thu'		=> 'پنج شنبه',
		'Fri'		=> 'جمعه',
		'Sat'		=> 'شنبه',

		'January'	=> 'ژانویه',
		'February'	=> 'فوریه',
		'March'		=> 'مارس',
		'April'		=> 'آوریل',
		'May'		=> 'مه',
		'June'		=> 'ژوئن',
		'July'		=> 'ژوئیه',
		'August'	=> 'اوت',
		'September' => 'سپتامبر',
		'October'	=> 'اکتبر',
		'November'	=> 'نوامبر',
		'December'	=> 'دسامبر',

		'Jan'		=> 'ژانویه',
		'Feb'		=> 'فوریه',
		'Mar'		=> 'مارس',
		'Apr'		=> 'آوریل',
		'May_short'	=> 'مه',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'ژوئن',
		'Jul'		=> 'ژوئیه',
		'Aug'		=> 'اوت',
		'Sep'		=> 'سپتامبر',
		'Oct'		=> 'اکتبر',
		'Nov'		=> 'نوامبر',
		'Dec'		=> 'دسامبر',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 ساعت',
		'-11'	=> 'UTC - 11 ساعت',
		'-10'	=> 'UTC - 10 ساعت',
		'-9.5'	=> 'UTC - 9:30 ساعت',
		'-9'	=> 'UTC - 9 ساعت',
		'-8'	=> 'UTC - 8 ساعت',
		'-7'	=> 'UTC - 7 ساعت',
		'-6'	=> 'UTC - 6 ساعت',
		'-5'	=> 'UTC - 5 ساعت',
		'-4.5'	=> 'UTC - 4:30 ساعت',
		'-4'	=> 'UTC - 4 ساعت',
		'-3.5'	=> 'UTC - 3:30 ساعت',
		'-3'	=> 'UTC - 3 ساعت',
		'-2'	=> 'UTC - 2 ساعت',
		'-1'	=> 'UTC - 1 ساعت',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 ساعت',
		'2'		=> 'UTC + 2 ساعت',
		'3'		=> 'UTC + 3 ساعت',
		'3.5'	=> 'UTC + 3:30 ساعت',
		'4'		=> 'UTC + 4 ساعت',
		'4.5'	=> 'UTC + 4:30 ساعت',
		'5'		=> 'UTC + 5 ساعت',
		'5.5'	=> 'UTC + 5:30 ساعت',
		'5.75'	=> 'UTC + 5:45 ساعت',
		'6'		=> 'UTC + 6 ساعت',
		'6.5'	=> 'UTC + 6:30 ساعت',
		'7'		=> 'UTC + 7 ساعت',
		'8'		=> 'UTC + 8 ساعت',
		'8.75'	=> 'UTC + 8:45 ساعت',
		'9'		=> 'UTC + 9 ساعت',
		'9.5'	=> 'UTC + 9:30 ساعت',
		'10'	=> 'UTC + 10 ساعت',
		'10.5'	=> 'UTC + 10:30 ساعت',
		'11'	=> 'UTC + 11 ساعت',
		'11.5'	=> 'UTC + 11:30 ساعت',
		'12'	=> 'UTC + 12 ساعت',
		'12.75'	=> 'UTC + 12:45 ساعت',
		'13'	=> 'UTC + 13 ساعت',
		'14'	=> 'UTC + 14 ساعت',
		'dst'	=> '[ <abbr title="ساعت تابستانی (daylight saving time)">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] Baker Island زمان',
		'-11'	=> '[UTC - 11] Niue Time, Samoa زمان استاندارد',
		'-10'	=> '[UTC - 10] Hawaii-Aleutian زمان استاندارد, Cook Island زمان',
		'-9.5'	=> '[UTC - 9:30] Marquesas Islands زمان',
		'-9'	=> '[UTC - 9] Alaska زمان استاندارد, Gambier Island زمان',
		'-8'	=> '[UTC - 8] Pacific زمان استاندارد',
		'-7'	=> '[UTC - 7] Mountain زمان استاندارد',
		'-6'	=> '[UTC - 6] Central زمان استاندارد',
		'-5'	=> '[UTC - 5] Eastern زمان استاندارد',
		'-4.5'	=> '[UTC - 4:30] Venezuelan زمان استاندارد',
		'-4'	=> '[UTC - 4] Atlantic زمان استاندارد',
		'-3.5'	=> '[UTC - 3:30] Newfoundland زمان استاندارد',
		'-3'	=> '[UTC - 3] Amazon زمان استاندارد, Central Greenland زمان',
		'-2'	=> '[UTC - 2] Fernando de Noronha زمان, South Georgia &amp; the South Sandwich Islands زمان',
		'-1'	=> '[UTC - 1] Azores زمان استاندارد, Cape Verde زمان, Eastern Greenland زمان',
		'0'		=> '[UTC] Western European زمان, Greenwich Mean زمان',
		'1'		=> '[UTC + 1] Central European زمان, West African زمان',
		'2'		=> '[UTC + 2] Eastern European زمان, Central African زمان',
		'3'		=> '[UTC + 3] Moscow زمان استاندارد, Eastern African زمان',
		'3.5'	=> '[UTC + 3:30] زمان استاندارد ایران',
		'4'		=> '[UTC + 4] Gulf Standard Time, Samara زمان استاندارد',
		'4.5'	=> '[UTC + 4:30] Afghanistan زمان',
		'5'		=> '[UTC + 5] Pakistan زمان استاندارد, Yekaterinburg زمان استاندارد',
		'5.5'	=> '[UTC + 5:30] Indian زمان استاندارد, Sri Lanka زمان',
		'5.75'	=> '[UTC + 5:45] Nepal زمان',
		'6'		=> '[UTC + 6] Bangladesh زمان, Bhutan زمان, Novosibirsk زمان استاندارد',
		'6.5'	=> '[UTC + 6:30] Cocos Islands زمان, Myanmar زمان',
		'7'		=> '[UTC + 7] Indochina زمان, Krasnoyarsk زمان استاندارد',
		'8'		=> '[UTC + 8] Chinese زمان استاندارد, Australian Western زمان استاندارد, Irkutsk زمان استاندارد',
		'8.75'	=> '[UTC + 8:45] Southeastern Western Australia زمان استاندارد',
		'9'		=> '[UTC + 9] Japan زمان استاندارد, Korea زمان استاندارد, Chita زمان استاندارد',
		'9.5'	=> '[UTC + 9:30] Australian Central زمان استاندارد',
		'10'	=> '[UTC + 10] Australian Eastern زمان استاندارد, Vladivostok زمان استاندارد',
		'10.5'	=> '[UTC + 10:30] Lord Howe زمان استاندارد',
		'11'	=> '[UTC + 11] Solomon Island زمان, Magadan زمان استاندارد',
		'11.5'	=> '[UTC + 11:30] Norfolk Island زمان',
		'12'	=> '[UTC + 12] New Zealand زمان, Fiji زمان, Kamchatka زمان استاندارد',
		'12.75'	=> '[UTC + 12:45] Chatham Islands زمان',
		'13'	=> '[UTC + 13] Tonga Time, Phoenix Islands زمان',
		'14'	=> '[UTC + 14] Line Island زمان',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'd M Y, H:i'			=> '01 بهمن 1390, 13:37',
		'd M Y H:i'				=> '01 بهمن 1390 13:37',
		'M jS, \'y, H:i'		=> 'اول بهمن, \'07, 13:37',
		'D M d, Y g:i a'		=> 'دوشنبه بهمن 01, 1390 1:37 pm',
		'F jS, Y, g:i a'		=> 'اول بهمن, 1390, 1:37 pm',
		'|d M Y|, H:i'			=> 'امروز, 13:37 / 01 بهمن 1390, 13:37',
		'|F jS, Y|, g:i a'		=> 'امروز, 1:37 pm / اول بهمن, 1390, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D M d, Y g:i a', // دوشنبه بهمن 01, 1390 1:37 pm

));

?>