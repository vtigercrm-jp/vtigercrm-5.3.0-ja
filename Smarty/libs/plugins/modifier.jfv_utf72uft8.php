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
 * Name:     jfv_utf7imap2uft8<br>
 * Purpose:  Convert utf7-imap string to utf8
 * @link http://www.vtigercrm.jp
 * @author   vtigercrm.jp
 * @param string
 * @param 
 * @return string
 */
function smarty_modifier_jfv_utf72uft8($string,  $from = 'UTF-8', $to = 'UTF7-IMAP')
{
	if (function_exists("mb_convert_encoding")) {
		$string = mb_convert_encoding($string, $from, $to );
	}
	return $string;
}

/* vim: set expandtab: */

?>
