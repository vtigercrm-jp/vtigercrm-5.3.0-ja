<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * string encoding conversion plugin
 *
 * Type:     modifier<br>
 * Name:     jfv_convert_mail_header_date<br>
 * Purpose:  Convert mail header date format
 * @link http://www.vtigercrm.jp
 * @author   vtigercrm.jp
 * @param string
 * @param 
 * @return string
 */
function smarty_modifier_jfv_convert_mail_header_date($date,  $format = 'Y/m/d  G:i')
{
	$jfv_dtstr = $date;
	$jfv_timestamp =  strtotime($date);
	if ($jfv_timestamp != -1 && $jfv_timestamp != FALSE){
		$jfv_dtstr = date($format,$jfv_timestamp);
	}
	return  $jfv_dtstr;
}

/* vim: set expandtab: */

?>
