<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
require_once('Smarty_setup.php');
require_once('data/Tracker.php');
require_once('modules/Emails/Emails.php');
require_once('include/utils/utils.php');
require_once('include/utils/UserInfoUtil.php');
require_once('modules/Webmails/MailBox.php');
require_once('modules/Webmails/Webmails.php');
require_once("include/Zend/Json.php");

global $mod_strings;
global $app_strings, $theme;

$focus = new Emails();
$smarty = new vtigerCRM_Smarty();
$json = new Zend_Json();
$smarty->assign('MOD',$mod_strings);
$smarty->assign('THEME',$theme);

if(isset($_REQUEST['record']) && $_REQUEST['record'] !='' && $_REQUEST['mailbox'] == '') 
{
	$focus->id = $_REQUEST['record'];
	$focus->mode = 'edit';
	$focus->retrieve_entity_info($_REQUEST['record'],"Emails");

	$focus->name=$focus->column_fields['name'];	
	if(isset($_REQUEST['print']) && $_REQUEST['print'] !='')
	{ 
		$query = 'select idlists,from_email,to_email,cc_email,bcc_email from vtiger_emaildetails where emailid =?';
		$result = $adb->pquery($query, array($focus->id));
		$smarty->assign('FROM_MAIL',$adb->query_result($result,0,'from_email'));	
		$to_email = vt_suppressHTMLTags(implode(',',$json->decode($adb->query_result($result,0,'to_email'))));
		$smarty->assign('TO_MAIL',$to_email);
		$cc_add = vt_suppressHTMLTags(implode(',',$json->decode($adb->query_result($result,0,'cc_email'))));
		$smarty->assign('CC_MAIL',$cc_add);
		$bcc_add = vt_suppressHTMLTags(implode(',',$json->decode($adb->query_result($result,0,'bcc_email'))));
		$smarty->assign('BCC_MAIL',$bcc_add);	
		$smarty->assign('SUBJECT',$focus->column_fields['subject']);	
		$smarty->assign('DESCRIPTION',$focus->column_fields['description']);
	}
	$smarty->display('PrintEmail.tpl');
}

if(isset($_REQUEST['record']) && isset($_REQUEST['mailbox'])  && $_REQUEST['print'])
{
	if(isset($_REQUEST["mailbox"]) && $_REQUEST["mailbox"] != "")
{
	$mailbox=$_REQUEST["mailbox"];
}
else
{
	$mailbox="INBOX";
}
$mailid = $_REQUEST['record'];
$MailBox = new MailBox($mailbox);
$mail = $MailBox->mbox;
$email = new Webmails($MailBox->mbox,$mailid);
$status=imap_setflag_full($MailBox->mbox,$mailid,"\\Seen");
$attach_tab=array();
$email->loadMail($attach_tab);
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$email->charsets."\">\n";
//JFV - for subject garbled issue reported by ayano, 
		if ( function_exists("mb_decode_mimeheader") && function_exists("mb_internal_encoding") && function_exists("mb_convert_encoding")) {
			if ( strtoupper(substr( $email->subject, 0, 13 )) == "=?ISO-2022-JP"  && @mb_convert_encoding(1, 'iso-2022-jp-ms')){
				$jfv_subject = str_ireplace('?iso-2022-jp?', '?iso-2022-jp-ms?', $email->subject);
			}elseif ( strtoupper(substr( $email->subject, 0, 11 )) == "=?SHIFT_JIS"  && @mb_convert_encoding(1, 'SJIS-win')){
				$jfv_subject = str_ireplace('?shift_jis?', '?SJIS-win?', $email->subject);
			}elseif ( strtoupper(substr( $email->subject, 0, 8 )) == "=?EUC-JP"  && @mb_convert_encoding(1, 'eucJP-win')){
				$jfv_subject = str_ireplace('?euc-jp?', '?eucJP-win?', $email->subject);
			}else{
				$jfv_subject = $email->subject;
			}
	$jfv_default_internal_enc = mb_internal_encoding();
	mb_internal_encoding("UTF-8");
	$subject = mb_decode_mimeheader($jfv_subject);
	mb_internal_encoding($jfv_default_internal_enc);
}else{
//JFV END
$subject = utf8_decode(utf8_encode(imap_utf8($email->subject)));
// JFV
}
//JFV END
$from = decode_header($email->from);
$to = decode_header($email->to[0]);
$cc = decode_header($email->cc_header);
$date = decode_header($email->date);
for($i=0;$i<count($email->attname);$i++){
	$attachment_links .= $email->anchor_arr[$i].decode_header($email->attname[$i])."</a></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
$content['body'] = $email->body;
$content['attachtab'] = $email->attachtab;

$smarty->assign('FROM_MAIL',$from);
$smarty->assign('TO_MAIL',trim($to,",").",");
$smarty->assign('SUBJECT',$subject);
$smarty->assign('DESCRIPTION',$content['body']);
$smarty->display('PrintEmail.tpl');
}

?>
