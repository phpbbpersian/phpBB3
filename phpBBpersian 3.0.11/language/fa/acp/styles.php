<?php
/**
*
* acp_styles [persian]
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'مجموعه تصاویر همه ی دکمه های تالار،انجمن ها و پست ها را تشکیل می دهند،در این بخش می توانید مجموعه تصاویر جدیدی اضافه کنید و یا مجموعه تصاویر موجود را ویرایش کنید.',
	'ACP_STYLES_EXPLAIN'	=> 'در این بخش می توانید قالب های موجود را مدیریت کنید، هر قالب شامل قالب اصلی،تم و مجموعه تصاویر می باشد. می توانید این قالب ها را در این بخش نصب و یا ویرایش کنید،قالب پیشفرض با علانت (*) مشخص شده است.همچنین می توانید قبل از انتشار قالبی،آن را مورد آزمایش قرار دهید.تعداد کاربرانی که از قالب ها استفاده می کنند،جلوی هر قالب درج شده اند.لطفا توجه داشته باشید که کاربران منع شده در این لیست موجود نیستند.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'قالب های اصلی همه بخش های اصلی و طرح تالار را تشکیل می دهند در این بخش می توانید این قالب های اصلی را ویرایش،حذف،اضافه،آزمایش و نصب کنید.',
	'ACP_THEMES_EXPLAIN'	=> 'در این بخش می توانید تم ها را اضافه،ویرایش،حذف،آزمایش و یا نصب کنید،تم ها ترکیب رنگ و تصاویر تالار را تعیین می کنند.بسته به امکانات سرورتان می تواننید جزئیات تم ها را تعیین کنید.',
	'ADD_IMAGESET'			=> 'ایجاد مجموعه تصاویر',
	'ADD_IMAGESET_EXPLAIN'	=> 'در این بخش میتوانید مجموعه تصاویر جدیدی ایجاد کنید، بسته به سرور و سطوح دسترسی فایل ها ممکن است گزینه های بیشتری در اختیار شما قرار بگیرد مثلا قرار دادن تصاویر جدید در مجموعه موجود و یا آپلود و بارگیری مجموعه تصاویری،نام این مجموعه تصاویر آپلود شده همان نام پوشه آرشیو خواهد بود (برای استفاده از این نام،فیلد نام را خالی بگذارید).',
	'ADD_STYLE'				=> 'ایجاد قالب',
	'ADD_STYLE_EXPLAIN'		=> 'در این بخش میتوانید قالب جدیدی ایجاد کنید، بسته به سرور و سطوح دسترسی فایل ها ممکن است گزینه های بیشتری در اختیار شما قرار بگیرد مثلا قرار دادن کد در قالب موجود و یا آپلود و بارگیری قالب،نام این قالب آپلود شده همان نام پوشه آرشیو خواهد بود (برای استفاده از این نام،فیلد نام را خالی بگذارید).',
	'ADD_TEMPLATE'			=> 'ایجاد قالب اصلی',
	'ADD_TEMPLATE_EXPLAIN'	=> 'در این بخش میتوانید مجموعه قالب اصلی ایجاد کنید، بسته به سرور و سطوح دسترسی فایل ها ممکن است گزینه های بیشتری در اختیار شما قرار بگیرد مثلا قرار دادن کد در قالب اصلی موجود و یا آپلود و بارگیری مجموعه تصاویری،نام این قالب اصلی آپلود شده همان نام پوشه آرشیو خواهد بود (برای استفاده از این نام،فیلد نام را خالی بگذارید)..',
	'ADD_THEME'				=> 'ایجاد تم',
	'ADD_THEME_EXPLAIN'		=> 'در این بخش میتوانید تم جدیدی ایجاد کنید، بسته به سرور و سطوح دسترسی فایل ها ممکن است گزینه های بیشتری در اختیار شما قرار بگیرد مثلا قرار دادن کد های جدید در تم موجود و یا آپلود و بارگیری مجموعه تصاویری،نام این تم آپلود شده همان نام پوشه آرشیو خواهد بود (برای استفاده از این نام،فیلد نام را خالی بگذارید)..',
	'ARCHIVE_FORMAT'		=> 'نوع فایل آرشیو',
	'AUTOMATIC_EXPLAIN'		=> 'برای انتخاب خودکار خالی بگذارید',

	'BACKGROUND'			=> 'پس زمینه',
	'BACKGROUND_COLOUR'		=> 'رنگ پس زمینه',
	'BACKGROUND_IMAGE'		=> 'تصویر پس زمینه',
	'BACKGROUND_REPEAT'		=> 'تکرار پس زمینه',
	'BOLD'					=> 'بولد',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'cache شده',
	'CACHE_FILENAME'				=> 'فایل قالب اصلی',
	'CACHE_FILESIZE'				=> 'حجم فایل',
	'CACHE_MODIFIED'				=> 'تغییر یافته',
	'CONFIRM_IMAGESET_REFRESH'		=> 'آیا از بارگذاری مجدد مجموعه تصاویر مطمئن هستید ؟تمامی تنظیمات مجموعه توصت مرورگر تصاویر بازنویسی خواهد شد.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'آیا از حذف نسخه های cache قالب اصلی مطمئن هستید ؟',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'آیا از بارگذاری مجدد اطلاعات ذخیره شده در پایگاه داده مطمئن هستید ؟این کار موجب بازنویسی تنظیمات خواهد شد.',
	'CONFIRM_THEME_REFRESH'			=> 'آیا از بارگذاری مجدد اطلاعات تم همراه با فایل های آن مطمئن هستید ؟ این کار همه تغییراتی را که به وصیله ویرایشگر تم اعمال شده بود را بی اثر خواهد کرد.',
	'COPYRIGHT'						=> 'کپی رایت',
	'CREATE_IMAGESET'				=> 'ایجاد مجموعه تصاویر جدید',
	'CREATE_STYLE'					=> 'ایجاد قالب جدید',
	'CREATE_TEMPLATE'				=> 'ایجاد قالب اصلی جدید',
	'CREATE_THEME'					=> 'ایجاد تم جدید',
	'CURRENT_IMAGE'					=> 'تصویر کنونی',

	'DEACTIVATE_DEFAULT'		=> 'نمی توانید قالب پیشفرض را غیرفعال کنید.',
	'DELETE_FROM_FS'			=> 'حذف از سیستم فایل',
	'DELETE_IMAGESET'			=> 'حذف مجموعه تصاویر',
	'DELETE_IMAGESET_EXPLAIN'	=> 'در این بخش می توانید مجموعه تصاویر را حذف کنید توجه داشته باشید که این عمل غیر قابل برگشت می باشد،توصیه می کنم ابتدا مجموعه تصاویر را برای استفاده احتمالی در آینده بارگیری کنید.',
	'DELETE_STYLE'				=> 'حذف قالب',
	'DELETE_STYLE_EXPLAIN'		=> 'در این بخش می توانید قالب ها را حذف کنید،با حذف قالب ها سایر عناصر آن (تم،مجموعه تصاویر ...) حذف نمی شوند و باید آنها را جداگانه حذف کنید.توجه داشته باشید که این عمل غیر قابل بازگشت می باشد.',
	'DELETE_TEMPLATE'			=> 'حذف قالب اصلی',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'در این بخش می توانید قالب اصلی را حذف کنید توجه داشته باشید که این عمل غیر قابل برگشت می باشد،توصیه می کنم ابتدا قالب اصلی را برای استفاده احتمالی در آینده بارگیری کنید.',
	'DELETE_THEME'				=> 'حذف تم',
	'DELETE_THEME_EXPLAIN'		=> 'در این بخش می توانید تم ها را حذف کنید توجه داشته باشید که این عمل غیر قابل برگشت می باشد،توصیه می کنم ابتدا تم ها را برای استفاده احتمالی در آینده بارگیری کنید.',
	'DETAILS'					=> 'جزئیات',
	'DIMENSIONS_EXPLAIN'		=> 'اگر بله را انتخاب کنید عناصر عرض/طول محسوب خواهند شد.',


	'EDIT_DETAILS_IMAGESET'				=> 'ویرایش جزئیات مجموعه تصاویر',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'در این بخش می توانید جزئیات مجموعه تصاویر مانند نام آن را تغییر بدهید.',
	'EDIT_DETAILS_STYLE'				=> 'ویرایش قالب',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'با استفاده از فرم زیر می توانید قالب را ویرایش کنید،می توانید عناصر وابسته به قالب (تم،قالب اصلی،مجموعه تصاویر) که ویژگی های آن را تعیین میکنند نیز ویرایش کنید.',
	'EDIT_DETAILS_TEMPLATE'				=> 'ویرایش جزئیان قالب اصلی',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'در این بخش می توانید جزئیات قالب اصلی مانند نام آن را تغییر بدهید،همچنین می توانید مشخص کنید که اطلاعات آن در سیستم فایل و یا پایگاه داده ذخیره شود،استفاده از این دو گزینه به تنظیمات پیکربندی PHP بستگی دارد.',
	'EDIT_DETAILS_THEME'				=> 'ویرایش جزئیات تم',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'در این بخش می توانید جزئیات تم مانند نام آن را تغییر بدهید،همچنین می توانید مشخص کنید که اطلاعات آن در سیستم فایل و یا پایگاه داده ذخیره شود،استفاده از این دو گزینه به تنظیمات پیکربندی PHP بستگی دارد.',
	'EDIT_IMAGESET'						=> 'ویرایش مجموعه تصاویر',
	'EDIT_IMAGESET_EXPLAIN'				=> 'در این بخش می توانید تصاویر مجموعه تصاویر را ویرایش کنید،می توانید اندازه آنها را مشخص کنید،در غیر این صورت از اطلاعات پایگاه داده استفاده خواهد شد.',
	'EDIT_TEMPLATE'						=> 'ویرایش قالب اصلی',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'در این بخش می توانید به طور مستقیم قالب اصلی را ویرایش کنید،اگر PHP قابل نوشتن باشد هرگونه تغییر در فایل ها اعمال خواهد شد و در غیر این صورت اطلاعات در پایگاه داده ذخیره می شوند،توجه داشته باشید که این عمل غیرقابل بازگشت می باشد.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'فایل قالب اصلی قابل نوشتن نیست،فایل تغییر یافته در پایگاه داده ذخیره شد.',
	'EDIT_THEME'						=> 'ویرایش تم',
	'EDIT_THEME_EXPLAIN'				=> 'در این بخش می توانید تم انتخاب شده را ویرایش کنید (رنگ،تصاویر،ویژگی ها)',
	'EDIT_THEME_STORED_DB'				=> 'فایل قالب قابل نوشتن نیستفتغییرات اعمال شده در قالب در پایگاه داده ذخیره شدند.',
	'EDIT_THEME_STORE_PARSED'			=> 'باید قالب تم تجزیه شده باشد و این عمل فقط هنگامی مقدور است که قالب در پایگاه داده ذخیره شده باشد.',
	'EDITOR_DISABLED'					=> 'ویرایشگر قالب اصلی غیرفعال می باشد.',
	'EXPORT'							=> 'بارگیری',

	'FOREGROUND'			=> 'پیش زمینه',
	'FONT_COLOUR'			=> 'رنگ فونت',
	'FONT_FACE'				=> 'چهره فونت',
	'FONT_FACE_EXPLAIN'		=> 'می توانید چندین فونت را انتخاب کنید،اگر فونت اولی در کامپیوتر کاربر وجود نداشته باشد، از سایر فونت ها استفاده خواهد شد.',
	'FONT_SIZE'				=> 'حجم فونت',

	'GLOBAL_IMAGES'			=> 'سراسری',

	'HIDE_CSS'				=> 'مخفی کردن CSS خام',

	'IMAGE_WIDTH'				=> 'عرض تصویر',
	'IMAGE_HEIGHT'				=> 'ارتفاع تصویر',
	'IMAGE'						=> 'تصویر',
	'IMAGE_NAME'				=> 'نام تصویر',
	'IMAGE_PARAMETER'			=> 'پارامتر',
	'IMAGE_VALUE'				=> 'داده',
	'IMAGESET_ADDED'			=> 'مجموعه تصویر جدید به سیستم فایل اضافه شد.',
	'IMAGESET_ADDED_DB'			=> 'مجموعه تصویر جدید به پایگاه داده اضافه شد.',
	'IMAGESET_DELETED'			=> 'مجموعه تصاویر با موفقیت حذف شد.',
	'IMAGESET_DELETED_FS'		=> 'مجموعه تصاویر از پایگاه داده حذف شد ولی ممکن است فایل های آن در سیستم فایل باقی مانده باشد.',
	'IMAGESET_DETAILS_UPDATED'	=> 'جزئیات مجموعه تصاویر با موفقیت تغییر یافت.',
	'IMAGESET_ERR_ARCHIVE'		=> 'لطفا نوع آرشیو را انتخاب کنید.',
	'IMAGESET_ERR_COPY_LONG'	=> 'کپی رایت نمی تواند بیشتر از 60 کاراکتر باشد.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'نام مجموعه تصاویر فقط می تواند حاوی اعداد،حروف الفبا،+، -، و خط فاصله باشد.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'مجموعه تصاویری با این نام موجود است.',
	'IMAGESET_ERR_NAME_LONG'	=> 'نام مجموعه تصاویر نباید بیشتر از 30 کاراکتر باشد.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'در آرشیو مشخص شده مجموعه تصاویر معتبری وجود ندارد.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'باید نامی را برای این مجموعه تصاویر انتخاب کنید.',
	'IMAGESET_EXPORT'			=> 'بارگیری مجموعه تصاویر',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'در این بخش می توانید مجموعه تصاویر را به صورت آرشیو بارگیری کنید. با استفاده از این آرشیو می توانید مجموعه تصاویر را در تالاری دیگر نصب نمایید.برای بارگیری دو روش موجود است،اولی بارگیری مستقیم و دیگری ذخیره آرشیو در پوشه ای روی سرور. ',
	'IMAGESET_EXPORTED'			=> 'مجموعه تصاویر با موفقیت در %s ذخیره شد.',
	'IMAGESET_NAME'				=> 'نام مجموعه تصویر',
	'IMAGESET_REFRESHED'		=> 'مجموعه تصاویر با موفقیت مجددا باگذاری شد.',
	'IMAGESET_UPDATED'			=> 'مجموعه تصویر با موفقیت بروزرسانی شد.',
	'ITALIC'					=> 'حروف کج (italic)',

	'IMG_CAT_BUTTONS'		=> 'دکمه های محلی',
	'IMG_CAT_CUSTOM'		=> 'عکس سفارشی',
	'IMG_CAT_FOLDERS'		=> 'آیکون های موضوع',
	'IMG_CAT_FORUMS'		=> 'آیکون های انجمن',
	'IMG_CAT_ICONS'			=> 'آیکون های عمومی',
	'IMG_CAT_LOGOS'			=> 'لوگو ها',
	'IMG_CAT_POLLS'			=> 'تصاویر نظرسنجی',
	'IMG_CAT_UI'			=> 'عناصر رابط کاربر عومی',
	'IMG_CAT_USER'			=> 'تصاویر فرعی',

	'IMG_SITE_LOGO'			=> 'لوگوی اصلی',
	'IMG_UPLOAD_BAR'		=> 'نوار وضعیت آپلود',
	'IMG_POLL_LEFT'			=> 'سمت چپ نظرسنجی',
	'IMG_POLL_CENTER'		=> 'وسط نظرسنجی',
	'IMG_POLL_RIGHT'		=> 'سمت راست نظرسنجی',
	'IMG_ICON_FRIEND'		=> 'اضافه کردن به عنوان دوست',
	'IMG_ICON_FOE'			=> 'اضافه کردن به عنوان دشمن',

	'IMG_FORUM_LINK'			=> 'لینک انجمن',
	'IMG_FORUM_READ'			=> 'انجمن',
	'IMG_FORUM_READ_LOCKED'		=> 'انجمن قفل شده است',
	'IMG_FORUM_READ_SUBFORUM'	=> 'زیرانجمن',
	'IMG_FORUM_UNREAD'			=> 'پست های خوانده نشده انجمن',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'پست های خوانده نشده انجمن قفل شده است',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'پست های خوانده نشده زیرانجمن',
	'IMG_SUBFORUM_READ'			=> 'توضیحات زیرانجمن',
	'IMG_SUBFORUM_UNREAD'		=> 'توضیحات پست های خوانده نشده انجمن',

	'IMG_TOPIC_MOVED'			=> 'موضوع منتقل شده است',

	'IMG_TOPIC_READ'				=> 'موضوع',
	'IMG_TOPIC_READ_MINE'			=> 'موضوع با پست جدید',
	'IMG_TOPIC_READ_HOT'			=> 'موضوع محبوب',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'موضوع محبوب با پست جدید',
	'IMG_TOPIC_READ_LOCKED'			=> 'موضوع قفل شده',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'موضوع قفل شده با پست جدید',

	'IMG_TOPIC_UNREAD'				=> 'موضوع با پست های خوانده نشده',
	'IMG_TOPIC_UNREAD_MINE'			=> 'موضوع با پست های جدید خوانده نشده',
	'IMG_TOPIC_UNREAD_HOT'			=> 'موضوع محبوب با پست های خوانده نشده',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'موضوع محبوب با پست های جدید خوانده نشده',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'موضوع قفل شده خوانده نشده',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'موضوع قفل شده با پست خوانده نشده جدید',

	'IMG_STICKY_READ'				=> 'موضوع مهم',
	'IMG_STICKY_READ_MINE'			=> 'موضوع مهم با پست ارسال شده جدید',
	'IMG_STICKY_READ_LOCKED'		=> 'موضوع مهم قفل شده',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'موضوع مهم قفل شده با پست های ارسال شده جدید',
	'IMG_STICKY_UNREAD'				=> 'موضوع مهم با پست های خوانده نشده',
	'IMG_STICKY_UNREAD_MINE'		=> 'موضوع مهم همراه با پست خوانده نشده جدید',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'موضوع مهم قفل شده با پست های خوانده نشده',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'موضوع مهم قفل شده با پست های جدید',

	'IMG_ANNOUNCE_READ'					=> 'اطلاعیه ها',
	'IMG_ANNOUNCE_READ_MINE'			=> 'اطلاعیه با پست های ارسال شده جدید',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'اطلاعیه قفل شده',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'اطلاعیه قفل شده همراه با پست ارسال شده جدید',
	'IMG_ANNOUNCE_UNREAD'				=> 'اطلاعیه با پست های خوانده نشده',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'اطلاعیه با پست های خوانده نشده جدید',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'اطلاعیه قفل شده با پست خوانده نشده',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'اطلاعیه قفل شده با پست خوانده نشده جدید',

	'IMG_GLOBAL_READ'					=> 'اطلاعیه سراسری',
	'IMG_GLOBAL_READ_MINE'				=> 'اطلاعیه سراسری همره با پست ارسال شده',
	'IMG_GLOBAL_READ_LOCKED'			=> 'اطلاعیه سراسری قفل شده',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'اطلاعیه سراسری قفل شده با  پست ارسال شده جدید',
	'IMG_GLOBAL_UNREAD'					=> 'اطلاعیه سراسری با پست های خوانده نشده',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'اطلاعیه سراسری با پست های خوانده نشده جدید',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'اطلاعیه سراسری قفل شده با پست های خوانده نشده',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'اطلاعیه سراسری با پست های جدید خوانده نشده',

	'IMG_PM_READ'		=> 'پیغام خصوصی خوانده شده',
	'IMG_PM_UNREAD'		=> 'پیغام خصوصی خوانده نشده',

	'IMG_ICON_BACK_TOP'		=> 'بالا',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'ارسال ایمیل',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'ارسال پیغام خصوصی',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'وبسایت',

	'IMG_ICON_POST_DELETE'			=> 'حذف پست',
	'IMG_ICON_POST_EDIT'			=> 'ویرایش پست',
	'IMG_ICON_POST_INFO'			=> 'نمایش جزئیات پست',
	'IMG_ICON_POST_QUOTE'			=> 'نقل قول پست',
	'IMG_ICON_POST_REPORT'			=> 'گزارش پست',
	'IMG_ICON_POST_TARGET'			=> 'پست کوچک',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'پست کوچک جدید',


	'IMG_ICON_TOPIC_ATTACH'			=> 'پیوست',
	'IMG_ICON_TOPIC_LATEST'			=> 'آخرین پست',
	'IMG_ICON_TOPIC_NEWEST'			=> 'آخرین پست خوانده نشده',
	'IMG_ICON_TOPIC_REPORTED'		=> 'پست گزارش شده',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'پست تأیید نشده',

	'IMG_ICON_USER_ONLINE'		=> 'کاربر آنلاین',
	'IMG_ICON_USER_OFFLINE'		=> 'کاربر آفلاین',
	'IMG_ICON_USER_PROFILE'		=> 'نمایش پروفایل',
	'IMG_ICON_USER_SEARCH'		=> 'جستجو پست ها',
	'IMG_ICON_USER_WARN'		=> 'هشدار به کاربر',

	'IMG_BUTTON_PM_FORWARD'		=> 'ارسال پیغام خصوصی به دیگران',
	'IMG_BUTTON_PM_NEW'			=> 'پیغام خصوصی جدید',
	'IMG_BUTTON_PM_REPLY'		=> 'پاسخ به پیغام خصوصی',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'موضوع قفل شده',
	'IMG_BUTTON_TOPIC_NEW'		=> 'موضوع جدید',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'پاسخ به موضوع',

	'IMG_USER_ICON1'		=> 'تصویر مشخص شده توسط کاربر 1',
	'IMG_USER_ICON2'		=> 'تصویر مشخص شده توسط کاربر 2',
	'IMG_USER_ICON3'		=> 'تصویر مشخص شده توسط کاربر 3',
	'IMG_USER_ICON4'		=> 'تصویر مشخص شده توسط کاربر 4',
	'IMG_USER_ICON5'		=> 'تصویر مشخص شده توسط کاربر 5',
	'IMG_USER_ICON6'		=> 'تصویر مشخص شده توسط کاربر 6',
	'IMG_USER_ICON7'		=> 'تصویر مشخص شده توسط کاربر 7',
	'IMG_USER_ICON8'		=> 'تصویر مشخص شده توسط کاربر 8',
	'IMG_USER_ICON9'		=> 'تصویر مشخص شده توسط کاربر 9',
	'IMG_USER_ICON10'		=> 'تصویر مشخص شده توسط کاربر 10',
    'INACTIVE_STYLES'			=> 'قالب های غیرفعال',
	'INCLUDE_DIMENSIONS'		=> 'شامل ابعاد',
	'INCLUDE_IMAGESET'			=> 'شامل مجموعه تصاویر',
	'INCLUDE_TEMPLATE'			=> 'شامل قالب اصلی',
	'INCLUDE_THEME'				=> 'شامل تم',
	'INHERITING_FROM'			=> 'به ارث برده از',
	'INSTALL_IMAGESET'			=> 'نصب مجموعه تصاویر',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'در این بخش می توانید مجموعه تصاویر را نصب کرده و جزئیات آن را تعذیف کنید و یا از تنظیمات پیشفرض استفاده کنید',
	'INSTALL_STYLE'				=> 'نصب استایل',
	'INSTALL_STYLE_EXPLAIN'		=> 'در این بخش می توانید قالبی را همراه با عناصر ان نصب کنید،عناصر اضافه شده موجب حذف شدن عناصر قبلی نخواهند شد،بعضی از قالب ها نیازمند عناصر پیشفرض هستند،اگر قالبی این چنین بود، به شما اطلاع داده خواهد شد.',
	'INSTALL_TEMPLATE'			=> 'نصب قالب اصلی',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'در این بخش می توانید قالب اصلی جدیدی را نصب کنید،بسته به تنظیمات سرورتان ممکن است چند گزینه در اختیار شما قرار گیرد.',
	'INSTALL_THEME'				=> 'نصب تم',
	'INSTALL_THEME_EXPLAIN'		=> 'در این بخش می توانید تمی را نصب کرده و جزئیات آن را تایین کنید و یا از تنظیمات پیشفرض برای نصب آن استفاده کنید.',
	'INSTALLED_IMAGESET'		=> 'مجموعه تصاویر نصب شده',
	'INSTALLED_STYLE'			=> 'استایل های نصب شده',
	'INSTALLED_TEMPLATE'		=> 'قالب های اصلی نصب شده',
	'INSTALLED_THEME'			=> 'تم های نصب شده',
	
	'KEEP_IMAGESET'				=> 'مجموعه تصویر “%s” را نگهدار',
	'KEEP_TEMPLATE'				=> 'قالب اصلی “%s” را نگهدار',
	'KEEP_THEME'				=> 'تم “%s” نگهدار',
	
	'LINE_SPACING'				=> 'فاصله سطرها',
	'LOCALISED_IMAGES'			=> 'محلی',
	'LOCATION_DISABLED_EXPLAIN'	=> 'این تنظیمات قابل تغییر نیستند',

	'NO_CLASS'					=> 'در فایل قالب class یافت نشد.',
	'NO_IMAGESET'				=> 'مجموعه تصاویر از سیستم فایل یافت نشد.',
	'NO_IMAGE'					=> 'بدون تصویر',
	'NO_IMAGE_ERROR'			=> 'تصویر در سیستم فایل یافت نشد.',
	'NO_STYLE'					=> 'قالب در سیستم فایل یافت نشد.',
	'NO_TEMPLATE'				=> 'قالب اصلی در سیستم فایل یافت نشد.',
	'NO_THEME'					=> 'تم در سیستم فایل یافت نشد.',
	'NO_UNINSTALLED_IMAGESET'	=> 'مجموعه تصویر یافت نشده ای یافت نشد.',
	'NO_UNINSTALLED_STYLE'		=> 'قالب نصب نشده ای یافت نشد.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'قالب اصلی نصب نشده ای یافت نشد.',
	'NO_UNINSTALLED_THEME'		=> 'تم نصب نشده ای یافت نشد.',
	'NO_UNIT'					=> 'هیچکدام',

	'ONLY_IMAGESET'			=> 'این تنها مجموعه تصویر موجود می باشد،نمی توانید آن را حذف کنید.',
	'ONLY_STYLE'			=> 'این تنها قالب موجود می باشد،نمی توانید آن را حذف کنید.',
	'ONLY_TEMPLATE'			=> 'این تنها قالب اصلی موجود می باشد،نمی توانید آن را حذف کنید.',
	'ONLY_THEME'			=> 'این تنها تم موجود می باشد،نمی توانید آن را حذف کنید.',
	'OPTIONAL_BASIS'		=> 'گزینه های اختیاری',

	'REFRESH'					=> 'بارگذاری مجدد',
	'REPEAT_NO'					=> 'هیچکدام',
	'REPEAT_X'					=> 'فقط افقی',
	'REPEAT_Y'					=> 'فقط عمودی',
	'REPEAT_ALL'				=> 'هر دو جهت',
	'REPLACE_IMAGESET'			=> 'جایگزینی مجموعه تصاویر با',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'این مجموعه تصاویر جایگزین مجموعه تصاویری خواهد شد که می خواهید آن را حذف کنید.',
	'REPLACE_STYLE'				=> 'جایگزینی قالب با',
	'REPLACE_STYLE_EXPLAIN'		=> 'این قالب جایگزین قالب محذوفی خواهد شد که در حال حاضر کاربرانی از آن استفاده می کنند',
	'REPLACE_TEMPLATE'			=> 'جایگزینی قالب اصلی با',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'این قالب اصلی جایگزین قالب اصلی محذوفی خواهد شد که در حال حاضر قالبی از آن استفاده می کند.',
	'REPLACE_THEME'				=> 'جلیگزینی قالب با',
	'REPLACE_THEME_EXPLAIN'		=> 'این تم جایگزین تم محذوفی خواهد شد که در حال حاضر قالبی از آن استفاده می کند.',
	'REQUIRES_IMAGESET'			=> 'برای نصب قالب باید مجموعه تصاویر %s نصب شده باشد.',
	'REQUIRES_TEMPLATE'			=> 'برای نصب قالب باید قالب اصلی %s نصب شده باشد.',
	'REQUIRES_THEME'			=> 'برای نصب قالب باید تم %s نصب شده باشد.',

	'SELECT_IMAGE'				=> 'تصویر را انتخاب کنید',
	'SELECT_TEMPLATE'			=> 'فایل قالب اصلی را انتخاب کنید',
	'SELECT_THEME'				=> 'فایل تم را انتخاب کنید',
	'SELECTED_IMAGE'			=> 'تصویر انتخاب شده',
	'SELECTED_IMAGESET'			=> 'مجموعه تصویر انتخاب شده',
	'SELECTED_TEMPLATE'			=> 'قالب اصلی انتخاب شده',
	'SELECTED_TEMPLATE_FILE'	=> 'فایل قالب اصلی انتخاب شده',
	'SELECTED_THEME'			=> 'تم انتخاب شده',
	'SELECTED_THEME_FILE'		=> 'فایل تم انتخاب شده',
	'STORE_DATABASE'			=> 'پایگاه داده',
	'STORE_FILESYSTEM'			=> 'سیستم فایل',
	'STYLE_ACTIVATE'			=> 'فعال سازی',
	'STYLE_ACTIVE'				=> 'فعال',
	'STYLE_ADDED'				=> 'قالب با موفقیت اضافه شد.',
	'STYLE_DEACTIVATE'			=> 'غیرفعال سازی',
	'STYLE_DEFAULT'				=> 'پیشفرض کردن قالب',
	'STYLE_DELETED'				=> 'قالب با موفقیت حذف شد.',
	'STYLE_DETAILS_UPDATED'		=> 'قالب با موفقیت ویرایش شد.',
	'STYLE_ERR_ARCHIVE'			=> 'لطفا نوع آرشیو را انتخاب کنید',
	'STYLE_ERR_COPY_LONG'		=> 'کپی رایت نمی تواند بیشتر از 60 کاراکتر باشد.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'حداقل باید یک عنصر قالب را انتخاب کنید.',
	'STYLE_ERR_NAME_CHARS'		=> 'نام قالب فقط می تواند اعداد،حروف،+،- و خط فاصله باشد.',
	'STYLE_ERR_NAME_EXIST'		=> 'در حال حاضر قالبی با این نام وجود دارد.',
	'STYLE_ERR_NAME_LONG'		=> 'نام قالب نمی تواند بیش از 30 کاراکتر باشد.',
	'STYLE_ERR_NO_IDS'			=> 'باید تم،مجموعه تصاویر و قالب اصلی را برای این قالب انتخاب کنید.',
	'STYLE_ERR_NOT_STYLE'		=> 'فایل آپلود شده،فایل معتبری برای قالب ها نیست.',
	'STYLE_ERR_STYLE_NAME'		=> 'باید نامی را برای این قالب انتخاب کنید.',
	'STYLE_EXPORT'				=> 'بارگیری قالب',
	'STYLE_EXPORT_EXPLAIN'		=> 'در این بخش می توانید قالب ها را با فرمت آرشیو بارگیری کنید،لازم نیست که همه ی عناصر قالب همراه آن بارگیری شود ولی باید یکی از عناصر همراه آن باشد،می توانید به دو روش بارگیری کنید، اول بارگیری مستقیم و دوم انتقال آرشیو به پوشه ای در FTP.',
	'STYLE_EXPORTED'			=> 'قالب بارگیری و در %s ذخیره شد.',
	'STYLE_IMAGESET'			=> 'مجموعه تصاویر',
	'STYLE_NAME'				=> 'نام قالب',
	'STYLE_TEMPLATE'			=> 'قالب اصلی',
	'STYLE_THEME'				=> 'تم',
	'STYLE_USED_BY'				=> 'استفاده شده توسط (شامل روبات ها)',

	'TEMPLATE_ADDED'			=> 'قالب اصلی اضافه و در سیستم فایل نصب شد..',
	'TEMPLATE_ADDED_DB'			=> 'قالب اصلی اضافه و در پایگاه داده ذخیره شد.',
	'TEMPLATE_CACHE'			=> 'cache قالب اصلی',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'به طور پیشفرض در phpBB cache قالب های اصلی ذخیره می شود،این کار استفاده از منابع و سرعت بارگذاری صفحه را کاهش می دهد،در این بخش میتوانید cache صفحات قالب و یا کل cache را حذف کنید.',
	'TEMPLATE_CACHE_CLEARED'	=> 'cache قالب اصلی با موفقیت پاکسازی شد.',
	'TEMPLATE_CACHE_EMPTY'		=> 'cache از قالب های اصلی وجود ندارد.',
	'TEMPLATE_DELETED'			=> 'قالب اصلی با موفقیت حذف شد.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'نمی توانید قالب اصلی را حذف کنید چون یک یا چند قالب اصلی دیگر به این قالب وابسته اند.',
	'TEMPLATE_DELETED_FS'		=> 'قالب اصلی از پایگاه داده حذف شد ولی ممکن فایل های آن در سیستم فایل باقی بماند.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'جزئیات قالب اصلی با موفقیت بروزرسانی شد.',
	'TEMPLATE_EDITOR'			=> 'ویرایشگر قالب اصلی HTML خام',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'ارتفاع ویرایشگر قالب اصلی',
	'TEMPLATE_ERR_ARCHIVE'		=> 'لطفا نوع آرشیو را انتخاب کنید.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'دایرکتوری cache که برای ذخیره فایل های cache قالب اصلی استفاده می شود، یافت نشد.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'کپی رایت نباید بیشتر از 60 کاراکتر باشد.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'نام قالب اصلی فقط می تواند شامل اعداد،حروف،+،- و خط فاصله باشد.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'قالب اصلی با این نام وجود دارد.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'نام قالب اصلی نباید بیشتر از 30 کاراکتر باشد.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'آرشیو انتخاب شده حاوی قالب اصلی معتبری نیست.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'ست قالب اصلی جدید نیازمند قالب اصلی %s می باشد تا از ویژگی های آن استفاده کند.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'باید نامی را برای این قالب اصلی انتخاب کنید.',
	'TEMPLATE_EXPORT'			=> 'بارگیری قالب اصلی',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'در این بخش می توانید قالب اصلی را به صورت آرشیو بارگیری کنید،می توانید به طور مستقیم این فایل را بارگیری کنید و یا آن را به پوشه ای در FTP انتقال دهید.',
	'TEMPLATE_EXPORTED'			=> 'قالب اصلی با موفقیت بارگیری و در %s ذخیره شد.',
	'TEMPLATE_FILE'				=> 'فایل قالب اصلی',
	'TEMPLATE_FILE_UPDATED'		=> 'فایل قالب اصلی با موفقیت بروزرسانی شد.',
	'TEMPLATE_INHERITS'			=> 'این قالب های اصلی ویژگی های خود را از %s دریافت می کنند،بدین دلیل تنظیمات آنها نمی تواند قالب اصلی مرجع فرقی داشته باشد.',
	'TEMPLATE_LOCATION'			=> 'ذخیره قالب هاب اصلی در',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'تصاویر همیشه در سیستم فایل ذخیره می شوند.',
	'TEMPLATE_NAME'				=> 'نام قالب',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'فایل %s قابل نوشتن نیست،لطفا سطح دسترسی پوشه و فایل را کنتل کنید.',
	'TEMPLATE_REFRESHED'		=> 'قالب اصلی با موفقیت مجددا بارگذاری شد.',

	'THEME_ADDED'				=> 'تم جدید به سیتم فایل اضافه شد.',
	'THEME_ADDED_DB'			=> 'تم جدید به پایگاه داده اضافه شد.',
	'THEME_CLASS_ADDED'			=> 'class سفارشی با موفقیت اضافه شد.',
	'THEME_DELETED'				=> 'تم با موفقیت حذف شد.',
	'THEME_DELETED_FS'			=> 'تم از پایگاه داده حذف شد ولی فایل های آن در سیستم فایل باقی مانده اند.',
	'THEME_DETAILS_UPDATED'		=> 'جزئیات قالب با موفقیت بروزرسانی شدند.',
	'THEME_EDITOR'				=> 'ویرایشگر تم',
	'THEME_EDITOR_HEIGHT'		=> 'ارتفاع ویرایشگر تم',
	'THEME_ERR_ARCHIVE'			=> 'لطفا نوع آرشیو را انتخاب کنید.',
	'THEME_ERR_CLASS_CHARS'		=> 'در نام های class فقط حروف اعداد به اضافه ., :, -, _ و # معتبر هستند.',
	'THEME_ERR_COPY_LONG'		=> 'کپی رایت نمی تواند بیشتر از 60 کاراکتر باشد.',
	'THEME_ERR_NAME_CHARS'		=> 'نام تم فقط می تواند شامل اعداد،حروف،+،- و خط فاصله باشد',
	'THEME_ERR_NAME_EXIST'		=> 'تمی با این نام موجود است.',
	'THEME_ERR_NAME_LONG'		=> 'نام تم نمی تواند بیشتر از 30 کاراکتر باشد.',
	'THEME_ERR_NOT_THEME'		=> 'آرشیو انتخاب شده حاوی تم معتبری نمی باشد.',
	'THEME_ERR_REFRESH_FS'		=> 'این تم در سیستم فایل ذخیره شده است و نیازی به بارگذاری مجدد آن نیست.',
	'THEME_ERR_STYLE_NAME'		=> 'باید نامی را برای این تم انتخاب کنید.',
	'THEME_FILE'				=> 'فایل تم',
	'THEME_EXPORT'				=> 'بارگیری تم',
	'THEME_EXPORT_EXPLAIN'		=> 'در این بخش می توانید تم را به صورت آرشیو بارگیری کنید،می توانید به طور مستقیم این فایل را بارگیری کنید و یا آن را به پوشه ای در FTP انتقال دهید.',
	'THEME_EXPORTED'			=> 'تم با موفقیت بارگیری و در %s ذخیره شد.',
	'THEME_LOCATION'			=> 'ذخیره قالب در',
	'THEME_LOCATION_EXPLAIN'	=> 'تضاویر همیشه در سیستم فایل ذخیره می شوند.',
	'THEME_NAME'				=> 'نام تم',
	'THEME_REFRESHED'			=> 'تم با موفقیت بارگذاری شد.',
	'THEME_UPDATED'				=> 'تم با موفقیت بروزرسانی شد.',

	'UNDERLINE'				=> 'خط زیرین',
	'UNINSTALLED_IMAGESET'	=> 'مجموعه تصاویر نصب نشده',
	'UNINSTALLED_STYLE'		=> 'قالب های نصب نشده',
	'UNINSTALLED_TEMPLATE'	=> 'قالب های اصلی نصب نشده',
	'UNINSTALLED_THEME'		=> 'تم های نصب نشده',
	'UNSET'					=> 'تعریف نشده',

));

?>