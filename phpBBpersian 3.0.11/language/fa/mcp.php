<?php
/**
*
* mcp [persian]
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
	'ACTION'				=> 'عمل',
	'ACTION_NOTE'			=> 'عمل/یادداشت',
	'ADD_FEEDBACK'			=> 'افزودن بازخورد',
	'ADD_FEEDBACK_EXPLAIN'	=> 'اگر میخواهید برای این گزارشی را بنویسید،لطفا فرم زیر را تکمیل فرمایید. کد های HTML،BBCodeو .. مورد قبول نیستند.',
	'ADD_WARNING'			=> 'افزودن هشدار',
	'ADD_WARNING_EXPLAIN'	=> 'برای ارسال هشدار به این کاربر از فرم زیر استفاده کنید،فقط از متن ساده استفاده کنید و استفاده از HTML،BBCode و ... مورد قبول نیست.',
	'ALL_ENTRIES'			=> 'همه نوشته ها',
	'ALL_NOTES_DELETED'		=> 'با موفقیت همه یادداشت های کاربران حذف شد.',
	'ALL_REPORTS'			=> 'همه گزارش ها',
	'ALREADY_REPORTED'		=> 'این پست در حال حاضر گزارش داده شده است.',
	'ALREADY_REPORTED_PM'	=> 'این پیغام خصوصی در حال حاضر گزارش داده شده است.',
	'ALREADY_WARNED'		=> 'هشداری در ارتباط با این پست ارسال شده است.',
	'APPROVE'				=> 'تایید',
	'APPROVE_POST'			=> 'تایید پست',
	'APPROVE_POST_CONFIRM'	=> 'آیا از تایید این پست مطمئن هستید ؟',
	'APPROVE_POSTS'			=> 'تایید پست ها',
	'APPROVE_POSTS_CONFIRM'	=> 'آیا از تایید پست های انتخاب شده مطمئن هستید ؟',

	'CANNOT_MOVE_SAME_FORUM'=> 'نمیتوانید موضوع را به این انجمن انتقال دهید،جون در حال حاضر در این انجمن است.',
	'CANNOT_WARN_ANONYMOUS'	=> 'نمیتوانید به کاربران مهمان که در تالار ثبت نام نکرده اند هشدار بفرستید.',
	'CANNOT_WARN_SELF'		=> 'نمیتوانید به خودتان هشدار بفرستید.',
	'CAN_LEAVE_BLANK'		=> 'میتوانید داده ای را در این فیلد وارد نکنید.',
	'CHANGE_POSTER'			=> 'تغییر ارسال کننده',
	'CLOSE_PM_REPORT'		=> 'بستن گزارش پیغام خصوصی',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'آیا از بستن گزارش پیغام خصوصی انتخاب شده مطمئن هستید ؟',
	'CLOSE_PM_REPORTS'		=> 'بستن گزارش های پیغام خصوصی',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'آیا از بستن گزارش های پیغام خصوصی انتخاب شده مطمئن هستید ؟',
	'CLOSE_REPORT'			=> 'بستن گزارش',
	'CLOSE_REPORT_CONFIRM'	=> 'آیا از بستن گزارش انتخاب شده مطمئن هستید ؟',
	'CLOSE_REPORTS'			=> 'بستن گزارش ها',
	'CLOSE_REPORTS_CONFIRM'	=> 'آیا از بستن گزارش های انتخاب شده مطمئن هستید ؟',

	'DELETE_PM_REPORT'			=> 'حذف گزارش پیغام خصوصی',
	'DELETE_PM_REPORT_CONFIRM'	=> 'آیا از حذف گزارش پیغام خصوصی انتخاب شده مطمئن هستید ؟',
	'DELETE_PM_REPORTS'			=> 'حذف گزارش های پیغام خصوصی',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'آیا از حذف گزارش های پیغام خصوصی مطمئن هستید ؟',	
	'DELETE_POSTS'				=> 'حذف پست ها',
	'DELETE_POSTS_CONFIRM'		=> 'آیا از حذف این پست ها مطمئن هستید ؟',
	'DELETE_POST_CONFIRM'		=> 'آیا از حذف این پست مطمئن هستید ؟',
	'DELETE_REPORT'				=> 'حذف گزارش',
	'DELETE_REPORT_CONFIRM'		=> 'آیا از حذف گزارش انتخاب شده مطمئن هستید ؟',
	'DELETE_REPORTS'			=> 'حذف ',
	'DELETE_REPORTS_CONFIRM'	=> 'آیا از حذف گزارش های انتخاب شده مطمئن هستید ؟',
	'DELETE_SHADOW_TOPIC'		=> 'حذف سایه موضوع',
	'DELETE_TOPICS'				=> 'حذف موضوع های انتخاب شده',
	'DELETE_TOPICS_CONFIRM'		=> 'از حذف این موضوعات مطمئن هستید ؟',
	'DELETE_TOPIC_CONFIRM'		=> 'آیا از حذف این موضوع مطمئن هستید ؟',
	'DISAPPROVE'				=> 'عدم تایید',
	'DISAPPROVE_REASON'			=> 'دلیل عدم تایید',
	'DISAPPROVE_POST'			=> 'عدم تایید پست',
	'DISAPPROVE_POST_CONFIRM'	=> 'آیا از تایید نکردن پست مطمئن هستید ؟',
	'DISAPPROVE_POSTS'			=> 'عدم تایید پست ها',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'آیا از تایید نکردن پست های انتخاب شده مطمئن هستید ؟',
	'DISPLAY_LOG'				=> 'نمایش نوشته ها از آخر',
	'DISPLAY_OPTIONS'			=> 'نمایش گزینه ها',

	'EMPTY_REPORT'					=> 'وقتی که این دلیل را انتخاب کنید،باید توضیحاتی را برای آن ارائه دهید.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'توجه داشته باشید که چند موضوع به دلیل خالی بودن از پایگاه داده حذف شدند',

	'FEEDBACK'				=> 'بازخورد',
	'FORK'					=> 'کپی',
	'FORK_TOPIC'			=> 'کپی کردن موضوع',
	'FORK_TOPIC_CONFIRM'	=> 'آیا از کپی کردن این موضوع مطمئن هستید ؟',
	'FORK_TOPICS'			=> 'کپی کردن موضوعات انتخاب شده',
	'FORK_TOPICS_CONFIRM'	=> 'آیا از کپی کردن تاپیک های انتخاب شده مطمئن هستید ؟',
	'FORUM_DESC'			=> 'توضیحات',
	'FORUM_NAME'			=> 'نام انجمن',
	'FORUM_NOT_EXIST'		=> 'انجمن انتخاب شده موجود نیست',
	'FORUM_NOT_POSTABLE'	=> 'به انجمن انتخاب شده پستی ارسال نمیشود',
	'FORUM_STATUS'			=> 'وضعیت انجمن',
	'FORUM_STYLE'			=> 'استایل انجمن',

	'GLOBAL_ANNOUNCEMENT'	=> 'اطلاعیه سراسری',

	'IP_INFO'				=> 'اطلاعات آدرس IP',
	'IPS_POSTED_FROM'		=> 'آدرس های IP که این کاربر با آنها پستی فرستاده است',

	'LATEST_LOGS'				=> '5 رویداد اخیر',
	'LATEST_REPORTED'			=> '5 گزارش اخیر',
	'LATEST_REPORTED_PMS'		=> '5 گزارش پیغام خصوصی اخیر',
	'LATEST_UNAPPROVED'			=> '5 پست اخیری که منتظر تایید هستند',
	'LATEST_WARNING_TIME'		=> '5 هشداری که اخیرا دریافت شده اند',
	'LATEST_WARNINGS'			=> '5 هشدار اخیر',
	'LEAVE_SHADOW'				=> 'ایجاد سایه موضوع در اینجا',
	'LIST_REPORT'				=> '1 گزارش',
	'LIST_REPORTS'				=> '%d گزارش',
	'LOCK'						=> 'قفل',
	'LOCK_POST_POST'			=> 'قفل کردن پست',
	'LOCK_POST_POST_CONFIRM'	=> 'آیا از جلوگیری کردن ویرایش این پست مطمئن هستید ؟',
	'LOCK_POST_POSTS'			=> 'قفل کردن پست های انتخاب شده',
	'LOCK_POST_POSTS_CONFIRM'	=> 'آیا از جلوگیری ویرایش تمامی پست های انتخاب شده مطمئن هستید ؟',
	'LOCK_TOPIC_CONFIRM'		=> 'آیا از قفل کردن این موضوع مطمئن هستید ؟',
	'LOCK_TOPICS'				=> 'قفل کردن موضوعات انتخاب شده',
	'LOCK_TOPICS_CONFIRM'		=> 'آیا از قفل کردن تمامی موضوعات انتخاب شده مطمئن هستید ؟',
	'LOGS_CURRENT_TOPIC'		=> 'رویداد هایی که هم اکنون نمایش داده میشوند :',
	'LOGIN_EXPLAIN_MCP'			=> 'برای مدیریت این انجمن،باید وارد شوید',
	'LOGVIEW_VIEWTOPIC'			=> 'مشاهده موضوع',
	'LOGVIEW_VIEWLOGS'			=> 'مشاهده رویداد های موضوع',
	'LOGVIEW_VIEWFORUM'			=> 'مشاهده انجمن',
	'LOOKUP_ALL'				=> 'بررسی تمامی IP ها',
	'LOOKUP_IP'					=> 'بررسی IP',

	'MARKED_NOTES_DELETED'		=> 'با موفقیت یادداشت های کاربران اتخاب شده حذف شد.',

	'MCP_ADD'						=> 'اضافه کردن هشدار',

	'MCP_BAN'					=> 'تحریم',
	'MCP_BAN_EMAILS'			=> 'تحریم ایمیل ها',
	'MCP_BAN_IPS'				=> 'تحریم IP',
	'MCP_BAN_USERNAMES'			=> 'تحریم نام های کاربری',

	'MCP_LOGS'						=> 'رویداد های مدیر انجمن',
	'MCP_LOGS_FRONT'				=> 'صفحه اصلی',
	'MCP_LOGS_FORUM_VIEW'			=> 'رویداد های انجمن',
	'MCP_LOGS_TOPIC_VIEW'			=> 'رویدادهای موضوع',

	'MCP_MAIN'						=> 'اصلی',
	'MCP_MAIN_FORUM_VIEW'			=> 'مشاهده انجمن',
	'MCP_MAIN_FRONT'				=> 'صفحه اصلی',
	'MCP_MAIN_POST_DETAILS'			=> 'ارسال جزئیات',
	'MCP_MAIN_TOPIC_VIEW'			=> 'مشاهده موضوع',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'تغییر دادن به "اطلاعیه"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'آیا از تبدیل این موضوع به "اطلاعیه" مطمئن هستید ؟',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'تغییر دادن به "اطلاعیه ها"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'آیا از تبدیل موضوعات به "اطلاعیه ها"مطمئن هستید ؟',
	'MCP_MAKE_GLOBAL'				=> 'تبدیل به "اطلاعیه سراسری"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'آیا از تبدیل این موضوع به "اطلاعیه سراسری" مطمئن هستید ؟',
	'MCP_MAKE_GLOBALS'				=> 'تبدیل به "اطلاعیه های سراسری"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'آیا از تبدیل موضوعات انتخاب شده به "اطلاعیه های سراسری" مطمئن هستید ؟',
	'MCP_MAKE_STICKY'				=> '"مهم" کردن',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'آیا از "مهم" کردن موضوع مطمئن هستید ؟',
	'MCP_MAKE_STICKIES'				=> '"مهم" کردن',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'آیا از "مهم" کردن موضوعات مطمئن هستید ؟',
	'MCP_MAKE_NORMAL'				=> 'تبدیل به "موضوع استاندارد"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'آیا از تغییر این موضوع به "موضوع استاندارد" مطمئن هستید ؟',
	'MCP_MAKE_NORMALS'				=> 'تبدیل به "موضوعات استاندارد"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'آیا از تغییر دادن موضوعات انتخاب شده به "موضوعات استاندارد" مطمئن هستید ؟',

	'MCP_NOTES'						=> 'یادداشت های کاربر',
	'MCP_NOTES_FRONT'				=> 'صفحه اصلی',
	'MCP_NOTES_USER'				=> 'جزئیات کاربر',

	'MCP_POST_REPORTS'				=> 'گزارش های منتشر شده در این پست',

	'MCP_PM_REPORTS'				=> 'پیغام های خصوصی گزارش شده',
	'MCP_PM_REPORT_DETAILS'			=> 'جزئیات پیغام های خصوصی گزارش شده',
	'MCP_PM_REPORTS_CLOSED'			=> 'گزارش پیغام های بسته',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'این لیستی از تمامی پیغام های خصوصی گزارش شده میباشد که مسائل مربوط به آنها حل شده است.',
	'MCP_PM_REPORTS_OPEN'			=> 'گزارش پیغام های خصوصی باز',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'این لیستی از تمامی پیغام های خصوصی گزارش شده میباشد که مسائل مربوط به آنها حل نشده است.',

	'MCP_REPORTS'					=> 'پیغام های گزارش شده',
	'MCP_REPORT_DETAILS'			=> 'جزئیات گزارش',
	'MCP_REPORTS_CLOSED'			=> 'گزارش های بسته شده',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'این لیستی از تمامی گزارش هایی است که اخیرا حل شده اند.',
	'MCP_REPORTS_OPEN'				=> 'گزارش های باز',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'این لیستی از تمامی گزارش هایی میباشد که هنوز حل نشده اند.',

	'MCP_QUEUE'								=> 'لیست انتظار',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'تایید جزئیات',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'پست هایی که منتظر تایید هستند',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'این لیستی از پست هایی میباشد که منتظر تایید شدن هستند تا به کاربران نمایش داده شوند.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> ' موضوعاتی که منتظر تایید هستند',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'این لیستی از موضوعات میباشد که منتظر تایید شدن هستند تا به کاربران نمایش داده شوند',

	'MCP_VIEW_USER'			=> 'مشاهده هشدار ها برای کاربر مشخص',

	'MCP_WARN'				=> 'هشدار ها',
	'MCP_WARN_FRONT'		=> 'صفحه اصلی',
	'MCP_WARN_LIST'			=> 'لیست هشدار ها',
	'MCP_WARN_POST'			=> 'ارسال هشدار برای پستی مشخص',
	'MCP_WARN_USER'			=> 'ارسال هشدار به کاربر',

	'MERGE_POSTS_CONFIRM'	=> 'آیا از ادغام پست های انتخاب شده مطمئن هستید ؟',
	'MERGE_TOPIC_EXPLAIN'	=> 'با استفاده از فرم زیر میتوانید پست های انتخاب شده را در موضوعی دیگر ادغام کنید. توجه داشته باشید که این پست ها بازسازی نخواهند شد و کاربران پست های خودشان را در موضوعی جدید خواهند دید.<br />لطفا ID موضوع مقصد را وارد کنید و یا با کلیک بر روی "انتخاب موضوع" موضوعی را جستجو کنید.',
	'MERGE_TOPIC_ID'		=> 'ID موضوع مقصد',
	'MERGE_TOPICS'			=> 'ادغام موضوعات',
	'MERGE_TOPICS_CONFIRM'	=> 'آیا از ادغام موضوعات انتخاب شده مطمئن هستید ؟',
	'MODERATE_FORUM'		=> 'مدیریت انجمن',
	'MODERATE_TOPIC'		=> 'مدیریت موضوع',
	'MODERATE_POST'			=> 'مدیریت پست',
	'MOD_OPTIONS'			=> 'مدیریت گزینه ها',
	'MORE_INFO'				=> 'اطلاعات بیشتر',
	'MOST_WARNINGS'			=> 'کاربران دریافت کننده بیشترین هشدار',
	'MOVE_TOPIC_CONFIRM'	=> 'آیا از انتفال موضوع به انجمنی جدید مطمئن هستید ؟',
	'MOVE_TOPICS'			=> 'انتقال موضوعات انتخاب شده',
	'MOVE_TOPICS_CONFIRM'	=> 'آیا از انتقال موضوعات انتخاب شده به انجمن های جدید مطمئن هستید ؟',

	'NOTIFY_POSTER_APPROVAL'		=> 'آیا ارسال کننده درباره تایید خبردار بشود ؟',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'آیا ارسال کننده از عدم تایید خبردار بشود ؟',
	'NOTIFY_USER_WARN'				=> 'آیا کاربر از ارسال هشدار به او خبردار بشود ؟',
	'NOT_MODERATOR'					=> 'مدیر این انجمن نیستید',
	'NO_DESTINATION_FORUM'			=> 'لطفا انجمن مقصد را انتخاب کنید.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'هیچ انجمن مقصدی در دسترس نیست.',
	'NO_ENTRIES'					=> 'هیچ رویدادی در این بازه زمانی رخ نداده است.',
	'NO_FEEDBACK'					=> 'بازخوردی برای این کاربر وجود ندارد.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'باید انجمن مقصدی را برای ادغام پست ها وارد کنید.',
	'NO_MATCHES_FOUND'				=> 'جستجو حاصلی دربر نداشت',
	'NO_POST'						=> 'ارسال هشدار برای پست کاربری با انتخاب آن پست ممکن میباشد.',
	'NO_POST_REPORT'				=> 'این پست گزارش نشده است.',
	'NO_POST_SELECTED'				=> 'برای انجام فرآیند باید حداقل یک پست را انتخاب کنید.',
	'NO_REASON_DISAPPROVAL'			=> 'لطفا دلیل مناسبی را برای عدم تایید وارد کنید.',
	'NO_REPORT'						=> 'گزارشی یافت نشد',
	'NO_REPORTS'					=> 'گزارشی یافت نشد',
	'NO_REPORT_SELECTED'			=> 'برای انجام ای فرآیند باید حداقل یک گزارشی را انتخاب کنید..',
	'NO_TOPIC_ICON'					=> 'هیچ کدام',
	'NO_TOPIC_SELECTED'				=> 'برای انجام این فرآیند باید حداقل یک موضوعی را انتخاب کنید.',
	'NO_TOPICS_QUEUE'				=> 'موضوعی منتظر تایید نیست.',

	'ONLY_TOPIC'			=> 'فقط موضوع “%s”',
	'OTHER_USERS'			=> 'سایر کاربرانی که از این IP استفاده میکنند.',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'گزارش پیغام خصوصی انتخاب شده با موفقیت بسته شد.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'گزارش پیغام خصوصی انتخاب شده با موفقیت حذف نشد.',
	'PM_REPORTED_SUCCESS'		=> 'این پیغام خصوصی با موفقیت گزارش داده شد.',
	'PM_REPORT_TOTAL'			=> 'درکل <strong>1</strong> گزارش پیغام خصوصی وجود دارد.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'گزارش های پیغام های خصوصی انتخاب شده با موفقیت بسته شدند.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'گزارش های پیغام های خصوصی با موفقیت حذف شدند.',
	'PM_REPORTS_TOTAL'			=> 'درکل <strong>%d</strong> گزارش پیغام خصوصی وجود دارد.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'هیچ گزارش پیغام خصوصی وجود ندارد.',
	'PM_REPORT_DETAILS'			=> 'جزئیات گزارش پیغام خصوصی',
	'POSTER'					=> 'ارسال کننده',
	'POSTS_APPROVED_SUCCESS'	=> 'پست های انتخاب شده تایید شدند.',
	'POSTS_DELETED_SUCCESS'		=> 'پست های انتخاب شده با موفقیت از پایگاه داده حذف شدند.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'پست های انتخاب شده با موفقیت تایید نشدند.',
	'POSTS_LOCKED_SUCCESS'		=> 'پست های انتخاب شده با موفقیت قفل شدند.',
	'POSTS_MERGED_SUCCESS'		=> 'پست های انتخاب شده ادغام شدند.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'قفل پست های انتخاب شده با موفقیت باز شدند.',
	'POSTS_PER_PAGE'			=> 'پست ها در هر صفحه',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(برای دیدن همه پست ها 0 را وارد کنید)',
	'POST_APPROVED_SUCCESS'		=> 'پست انتخاب شده تایید شد.',
	'POST_DELETED_SUCCESS'		=> 'پست انتخاب شده با موفقیت از پایگاه داده حذف شد.',
	'POST_DISAPPROVED_SUCCESS'	=> 'پست انتخاب شده با موفقیت تایید نشد.',
	'POST_LOCKED_SUCCESS'		=> 'پست با موفقیت قفل شد.',
	'POST_NOT_EXIST'			=> 'پست درخواست شده موجود نیست.',
	'POST_REPORTED_SUCCESS'		=> 'این پست با موفقیت گزارش داده شد.',
	'POST_UNLOCKED_SUCCESS'		=> 'قفل پست با موفقیت باز شد.',

	'READ_USERNOTES'			=> 'یادداشت های کاربر',
	'READ_WARNINGS'				=> 'هشدار های کاربر',
	'REPORTER'					=> 'گزارش دهنده',
	'REPORTED'					=> 'گزارش شده',
	'REPORTED_BY'				=> 'گزارش شده توسط',
	'REPORTED_ON_DATE'			=> 'در',
	'REPORTS_CLOSED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت بسته شدند.',
	'REPORTS_DELETED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت حذف شده اند.',
	'REPORTS_TOTAL'				=> 'درکل <strong>%d</strong> گزارش برای بررسی موجود است',
	'REPORTS_ZERO_TOTAL'		=> 'هیچ گزارشی برای بررسی موجود نیست.',
	'REPORT_CLOSED'				=> 'این گزارش در حال حاضر بسته است.',
	'REPORT_CLOSED_SUCCESS'		=> 'گزارش انتخاب شده با موفقیت بسته شد.',
	'REPORT_DELETED_SUCCESS'	=> 'گزارش انتخاب شده با موفقیت حذف شد.',
	'REPORT_DETAILS'			=> 'جزئیات گزارش',
	'REPORT_MESSAGE'			=> 'گزارش این پیغام',
	'REPORT_MESSAGE_EXPLAIN'	=> 'برای گزارش پیغام خصوصی انتخاب شده از این فرم استفاده کنید. پیغامی خصوصی را هنگامی که حاوی مطالب مغایر با قوانین تالار بود،گزارش دهید. <strong>زیرا محتوای آن برای تمامی مدیران قابل نمایش خواهد بود.</strong>',
	'REPORT_NOTIFY'				=> 'به من خبر بده',
	'REPORT_NOTIFY_EXPLAIN'		=> 'هنگامی که گزارش شما بررسی شد،به شما خبر داده خواهد شد.',
	'REPORT_POST_EXPLAIN'		=> 'از این فرم برای گزارش پست ها به مدیران تالار و مدیران انجمن استفاده کنید. پست ها را هنگامی که حاوی مطالب مغایر با قونین تالار بود،گزارش دهید.',
	'REPORT_REASON'				=> 'دلایل گزارش',
	'REPORT_TIME'				=> 'تاریخ گزارش',
	'REPORT_TOTAL'				=> 'درکل <strong>1</strong> گزارش برای بررسی موجود است',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%بازگشت به پیغام%s',
	'RETURN_NEW_FORUM'			=> '%sبه انجمن جدید برو%s',
	'RETURN_NEW_TOPIC'			=> '%sبه موضوع جدید برو%s',
	'RETURN_PM'					=> '%sبازگشت به پیغام خصوصی%s',
	'RETURN_POST'				=> '%sبازگشت به پست%s',
	'RETURN_QUEUE'				=> '%sبازگشت به صف%s',
	'RETURN_REPORTS'			=> '%sبازگشت به گزارش ها%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sبازگشت به موضوع%s',

	'SEARCH_POSTS_BY_USER'				=> 'جستجوی پست ها بر اساس',
	'SELECT_ACTION'						=> 'انتخاب عملیات مورد نظر',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'لطفا انجمنی را که میخواهید این پیام سراسری در آن نمایش داده شود را انتخاب کنید.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'یک یا چند موضوع انتخاب شده،اطلاعیه سراسری هستند.لطفا انجمنی را که میخواهید این اطلاعیه سراسری نمایش داده شود،انتخاب کنید.',
	'SELECT_MERGE'						=> 'انتخاب برای ادغام',
	'SELECT_TOPICS_FROM'				=> 'انتخاب موضوعات از',
	'SELECT_TOPIC'						=> 'انتخاب موضوع',
	'SELECT_USER'						=> 'انتخاب کاربر',
	'SORT_ACTION'						=> 'رویداد عملیات ها',
	'SORT_DATE'							=> 'تاریخ',
	'SORT_IP'							=> 'آدرس IP',
	'SORT_WARNINGS'						=> 'هشدار ها',
	'SPLIT_AFTER'						=> 'تقسیم موضوع از پست انتخاب شده به بعد.',
	'SPLIT_FORUM'						=> 'انجمن برای موضوع جدید',
	'SPLIT_POSTS'						=> 'تقسیم پست های انتخاب شده',
	'SPLIT_SUBJECT'						=> 'عنوان موضوع جدید',
	'SPLIT_TOPIC_ALL'					=> 'تقسیم موضوع از پسن انتخاب شده',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'آیا از تقسیم این موضوع مطمئن هستید ؟',
	'SPLIT_TOPIC_BEYOND'				=> 'تقسیم موضوع در پست انتخاب شده',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'آیا از تقسیم این تاپیک با پست های انتخاب شده مطمئن هستید ؟',
	'SPLIT_TOPIC_EXPLAIN'				=> 'با استفاده از فرم ریر میتوانید موضوع را تقسیم کنید.',

	'THIS_PM_IP'				=> 'IP این پیغام خصوصی',
	'THIS_POST_IP'				=> 'IP این پست',
	'TOPICS_APPROVED_SUCCESS'	=> 'موضوعات انتخاب شده تایید شدند.',
	'TOPICS_DELETED_SUCCESS'	=> 'موضوعات انتخاب شده با موفقیت از پایگاه داده حذف شدند.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'موضوعات انتخاب شده با موفقیت تایید نشدند.',
	'TOPICS_FORKED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت کپی شدند.',
	'TOPICS_LOCKED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت قفل شدند.',
	'TOPICS_MOVED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت منتقل شدند.',
	'TOPICS_RESYNC_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت resync شدند.',
	'TOPICS_TYPE_CHANGED'		=> 'نوع موضوعات با موفقیت تغییر یافتند.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'قفل موضوعات انتخاب شده با موفقیت باز شدند.',
	'TOPIC_APPROVED_SUCCESS'	=> 'موضوع انتخاب شده تایید شد.',
	'TOPIC_DELETED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت از پایگاه داده حذف شد.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'موضوع انتخاب شده با موفقیت تایید نشد.',
	'TOPIC_FORKED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت کپی شد.',
	'TOPIC_LOCKED_SUCCESS'		=> 'موضوع انتخاب شده قفل شد.',
	'TOPIC_MOVED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت انتقال داده شد.',
	'TOPIC_NOT_EXIST'			=> 'موضوع انتخاب شده موجود نیست.',
	'TOPIC_RESYNC_SUCCESS'		=> 'موضوع انتخاب شده resync شد.',
	'TOPIC_SPLIT_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت تقسیم شد.',
	'TOPIC_TIME'				=> 'تاریخ موضوع',
	'TOPIC_TYPE_CHANGED'		=> 'نوع موضوع با موفقیت تغییر یافت.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'قفل موضوع انتخاب شده با موفقیت باز شد.',
	'TOTAL_WARNINGS'			=> 'مجموع هشدار ها',

	'UNAPPROVED_POSTS_TOTAL'		=> 'درمجموع <strong>%d</strong> پست منتظر تایید شدن هستند.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'هیچ پستی برای تایید شدن وجود ندارد.',
	'UNAPPROVED_POST_TOTAL'			=> 'در مجموع <strong>1</strong> پست منتظر تایید شدن هست',
	'UNLOCK'						=> 'باز کردن قفل',
	'UNLOCK_POST'					=> 'باز کردن قفل پست',
	'UNLOCK_POST_EXPLAIN'			=> 'اجازه ویرایش',
	'UNLOCK_POST_POST'				=> 'باز کردن قفل پست',
	'UNLOCK_POST_POST_CONFIRM'		=> 'آیا از اعطای اجازه ی ویرایش این پست مطمئن هستید ؟',
	'UNLOCK_POST_POSTS'				=> 'باز کردن قفل پست های انتخاب شده',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'آیا از اعطا اجازه ویرایش پست های انتخاب شده مطمئن هستید ؟',
	'UNLOCK_TOPIC'					=> 'باز کردن قفل موضوع',
	'UNLOCK_TOPIC_CONFIRM'			=> 'آیا از باز کردن قفل این موضوع مطمئن هستید ؟',
	'UNLOCK_TOPICS'					=> 'باز کردن قفل موضوعات انتخاب شده.',
	'UNLOCK_TOPICS_CONFIRM'			=> 'آیا از باز کردن قفل موضوعات انتخاب شده مطمئن هستید ؟',
	'USER_CANNOT_POST'				=> 'در این انجمن نمیتوانید پستی را ارسال کنید.',
	'USER_CANNOT_REPORT'			=> 'در این انجمن نمیتوانید پستی را گزارش دهید.',
	'USER_FEEDBACK_ADDED'			=> 'بازخورد کاربر با موفقیت اضافه شد.',
	'USER_WARNING_ADDED'			=> 'با موفقیت به کاربر هشدار داده شد.',

	'VIEW_DETAILS'			=> 'مشاهده جزئیات',
	'VIEW_PM'				=> 'مشاهده پیغام خصوصی',
	'VIEW_POST'				=> 'مشاهده پست',

	'WARNED_USERS'			=> 'کاربران هشدار داده شده',
	'WARNED_USERS_EXPLAIN'	=> 'لیست کاربرانی که هشداری بدون تاریخ انقضا دریافت کرده اند',
	'WARNING_PM_BODY'		=> 'این هشداری است که از جانب مدیران انجمن و یا مدیر تالار برای شما ارسال شده است.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'هشدار از جانب تالار',
	'WARNING_POST_DEFAULT'	=> 'این هشدار به خاطر  این پست شما ارسال شده است : %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'هشداری موجود نیست.',

	'YOU_SELECTED_TOPIC'	=> 'موضع شماره %d را انتخاب کرده اید : %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'وارز',
			'SPAM'		=> 'اسپم',
			'OFF_TOPIC'	=> 'خارج از موضوع',
			'OTHER'		=> 'دیگر',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'نوشته هایی که به برنامه های غیرقانونی و یا کرک شده لینک دارند.',
			'SPAM'		=> 'نوشته هایی که فقط هدف تبلیغ وبسایت و یا سایر محصولات را دارند',
			'OFF_TOPIC'	=> 'نوشته هایی که خارج از موضوع باشند.',
			'OTHER'		=> 'نوشته هایی که به هیچ یک از موارد بالا مربوط نمیشوند (جزئیات را در فیلد مربوطه وارد کنید).',
		)
	),
));

?>