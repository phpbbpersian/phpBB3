<?php

//
// This MOD is Created by Mehrdad Khoddami 
// http://www.ePark.ir
// khoddami.me@gmail.com
//

function div($a, $b) {
	return (int) ($a / $b);
}

function gregorian_to_jalali($g_y, $g_m, $g_d)
{
	$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
	$gy = $g_y - 1600;
	$gm = $g_m - 1;
	$gd = $g_d - 1;
	$g_day_no = 365 * $gy + div($gy + 3,4) - div($gy + 99, 100) + div($gy + 399, 400);

	for ($i=0 ; $i < $gm ; ++$i)
	{
		$g_day_no += $g_days_in_month[$i];
	}

	if ($gm>1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
	{
		$g_day_no++; // leap and after Feb
	}

	$g_day_no += $gd;
	$j_day_no = $g_day_no - 79;
	$j_np = div($j_day_no, 12053); // 12053 = 365*33 + 32/4
	$j_day_no = $j_day_no % 12053;
	$jy = 979 + 33 * $j_np + 4 * div($j_day_no, 1461); // 1461 = 365*4 + 4/4
	$j_day_no %= 1461;

	if ($j_day_no >= 366)
	{
		$jy += div($j_day_no - 1, 365);
		$j_day_no = ($j_day_no - 1) % 365;
	}

	for ($i = 0 ; $i < 11 && $j_day_no >= $j_days_in_month[$i] ; ++$i)
	{
		$j_day_no -= $j_days_in_month[$i];
	}

	$jm = $i + 1;
	$jd = $j_day_no + 1;
	return array($jy, $jm, $jd);
}

function tranasmonth($number) {
	$month = array(
		1	=> 'فروردین',
		2	=> 'اردیبهشت',
		3	=> 'خرداد',
		4	=> 'تیر',
		5	=> 'مرداد',
		6	=> 'شهریور',
		7	=> 'مهر',
		8	=> 'آبان',
		9	=> 'آذر',
		10	=> 'دی',
		11	=> 'بهمن',
		12	=> 'اسفند',
	);
	return strtr($number, $month);
}

function jalali_true_format($format, $date_trans, $zone_offset, $gmepoch)
{
	$part = explode(" ", @gmdate('Y m d', $gmepoch));
	list( $jy, $jm, $jd ) = gregorian_to_jalali($part[0], $part[1], $part[2]);

	$format = str_replace('Y', substr($jy, 2, 2), $format);// year as 2 digits
	$format = str_replace('y', $jy, $format);// year as 4 digits
	$format = str_replace('M', tranasmonth($jm), $format);// month as 3 lettersto letters in Persian
	$format = str_replace('m', tranasmonth($jm), $format);// month as 2 digits to letters in Persian
	$format = str_replace('F', tranasmonth($jm), $format);// month ,long form to letters in Persian
	$format = str_replace('n', tranasmonth($jm), $format);// month as digits without leading zero to letters in Persian 
	$format = str_replace('d', $jd, $format);// day of the month with leading zero to digits without zero : 03 to 3
	$format = str_replace('j', $jd, $format);// day of the month as digits without leading zero
	$format = str_replace('S', ' ام', $format);// for translating English ordinal suffix as 2 character to Persian: "st, nd, rd, th" to " ام"

	return strtr(@gmdate($format, $gmepoch + $zone_offset), $date_trans);
}

?>