<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is FOSS Labs.
 * Portions created by FOSS Labs are Copyright (C) FOSS Labs.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

global $current_user;
require_once('include/utils/utils.php');
require_once('include/utils/UserInfoUtil.php');
require_once('modules/Webmails/Webmails.php');
require_once('modules/Webmails/MailBox.php');
global $mod_strings;

if(!isset($_SESSION["authenticated_user_id"]) || $_SESSION["authenticated_user_id"] != $current_user->id) {echo "ajax failed";flush();exit();}
$mailid=vtlib_purify($_REQUEST["mailid"]);
if(isset($_REQUEST["mailbox"]) && $_REQUEST["mailbox"] != "")
{
	$mailbox=vtlib_purify($_REQUEST["mailbox"]);
//JFV - convert back html special char
	$mailbox=htmlspecialchars_decode($mailbox);
//JFV END
}
else
{
	$mailbox="INBOX";
}
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
// JFV - use full from addr format, like  john lennon <john.lennon@example.com>
//$from = decode_header($email->from);
$from = '';
$from .= decode_header($email->fromname);
if(decode_header($email->fromname)!=''){
	$from .= ' &lt;' . decode_header($email->from) . '&gt;';
}else{
	$from .= decode_header($email->from);
}
//$to = decode_header($email->to_header);
$to = '';
for($p=0;$p<count($email->to);$p++) {
	if($to != ''){$to .= ', ';}
	$to .= $email->to_name[$p];
	if($email->to_name[$p]!=''){
		$to .= '&lt;' . $email->to[$p] . '&gt;';
	}else{
		$to .= $email->to[$p];
	}
}
// JFV END
$cc = decode_header($email->cc_header);
$date = decode_header($email->date);
for($i=0;$i<count($email->attname);$i++){
//JFV adjust attachment link for full view mail
//	$attachment_links .= $email->anchor_arr[$i].decode_header($email->attname[$i])."</a></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	$attachment_links .= "</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email->anchor_arr[$i].decode_header($email->attname[$i])."</a>&nbsp;&nbsp;".$email->att_details[$i]['size']."K";
	if($attachment_links_short != ''){$attachment_links_short .= ",";} 
	$attachment_links_short .= "&nbsp;&nbsp;".$email->anchor_arr[$i].decode_header($email->attname[$i])."</a>";	
}
$content['body'] = $email->body;
$content['attachtab'] = $email->attachtab;
if(!$_REQUEST['fullview'])
	$class_str = 'class="tableHeadBg"';
else
	$class_str = 'style="font-size:15px"';
	
?>
<script src="modules/Webmails/Webmails.js" type="text/javascript"></script>
<script src="include/js/general.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="themes/<?php echo vtlib_purify($_REQUEST['theme']);?>/webmail.css">
<!-- Table to display the Header details (From, To, Subject and date) - Starts -->
					
                                        <table <?php echo $class_str;?> width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tr align="left"><td width="100%" align="left">&nbsp;<b><?php echo $mod_strings['LBL_FROM'];?></b><?php echo $from;?></td></tr>
                                                <tr><td  width="100%" align="left">&nbsp;<b><?php echo $mod_strings['LBL_TO'];?></b><?php echo $to;?></td></tr>
<tr><td width="100%" align="left">&nbsp;<b><?php echo $mod_strings['LBL_CC'];?></b><?php echo $cc;?></td></tr>

                                                <tr><td align="left" width="100%">&nbsp;<b><?php echo $mod_strings['LBL_SUBJECT'];?></b><?php echo $subject;?></td></tr>
	<tr><td align="left" width="100%">&nbsp;<b><?php echo $mod_strings['LBL_DATE'];?></b><?php echo substr($date,0,25);?>
        <?php if(!$_REQUEST['fullview']) {?>
        <span style="float:right"  colspan="2"><a href="javascript:;" onclick="OpenComposer('<?php echo $mailid;?>','full_view')"><?php echo $mod_strings['LBL_FULL_EMAIL_VIEW'] ?></a></span>
        <?php } ?>
	</td>
	</tr>
<?php //JFV - add att link to email
if(!$_REQUEST['fullview'] && $attachment_links_short != '') {?>
	<tr>
		<td align="left">&nbsp;<b><?php echo $mod_strings['LBL_ATTACHMENT'];?>:</b><?php echo $attachment_links_short;?></td>
	</tr>
<?php } // JFV END?>		
	<?php if(isset($_REQUEST['fullview']) && $attachment_links != '') {?>
	<tr>
		<td align="left">&nbsp;<b><?php echo $mod_strings['LBL_ATTACHMENT'];?>:</b><?php echo $attachment_links;?></td>
	</tr>
	<?php } ?>
	
                                                <tr><td align="left" style="border-bottom:1px solid #666666;" colspan="3">&nbsp;</td></tr>
                                        </table>
                                        <!-- Table to display the Header details (From, To, Subject and date) - Ends -->
					
<script type="text/javascript">
mailbox = "<?php echo $mailbox;?>";
function show_inline(num) {
	var el = document.getElementById("block_"+num);
	if(el.style.display == 'block')
		el.style.display='none';
	else
		el.style.display='block';
}
</script>
<?php
function view_part_detail($mail,$mailid,$part_no, &$transfer, &$msg_charset, &$charset)
{
	$text = imap_fetchbody($mail,$mailid,$part_no);
	if ($transfer == 'BASE64')
		$str = nl2br(imap_base64($text));
	elseif($transfer == 'QUOTED-PRINTABLE')
		$str = nl2br(quoted_printable_decode($text));
	else
		$str = nl2br($text);
	return ($str);
}
//Need to put this along with the subject block*/
//JFV - not put attachment list on mail body, because it's looks like debug messsage?
//echo $email->att;
//JFV END
if(!$_REQUEST['fullview'])
	echo '<div style="overflow:auto;height:386px;width:737px;padding:5;">';
else
	echo '<div style="padding:5;">';
echo $content['body'];

//test added by Richie
if (!isset($_REQUEST['display_images']) || $_REQUEST['display_images'] != 1)
{
	$content['body'] = preg_replace('/src="[[:alpha:]]+:\/\/[^<>[:space:]]+[[:alnum:]\/]"/i', 'src="none"', $content['body']);
	$content['body'] = preg_replace('/src=[[:alpha:]]+:\/\/[^<>[:space:]]+[[:alnum:]\/]/i', 'src="none"', $content['body']);
}

//Display embedded HTML images
$tmp_attach_tab=$content['attachtab'];
$i = 0;
$conf->display_img_attach = true;
$conf->display_text_attach = true;

while ($tmp = array_pop($tmp_attach_tab)) 
{
	if ($conf->display_img_attach && (preg_match("/image/i", $tmp['mime']) && ($tmp['number'] != '')))
	{
		$exploded = explode('/', $tmp['mime']);
		$img_type = array_pop($exploded);
		if (preg_match("/JPEG/i", $img_type) || preg_match("/JPG/i", $img_type) || preg_match("/GIF/i", $img_type) || preg_match ('/PNG/i', $img_type))
		{
			$new_img_src = 'src="get_img.php?mail=' . $mailid.'&num=' . $tmp['number'] . '&mime=' . $img_type . '&transfer=' . $tmp['transfer'] . '"';
			$img_id = str_replace('<', '', $tmp['id']);
			$img_id = str_replace('>', '', $img_id);
			$content['body'] = str_replace('src="cid:'.$img_id.'"', $new_img_src, $content['body']);
			$content['body'] = str_replace('src=cid:'.$img_id, $new_img_src, $content['body']);
		}
		}
}
while ($tmp = array_pop($content['attachtab']))
{
	if ((!preg_match("/ATTACHMENT/i", $tmp['disposition'])) && $conf->display_text_attach && (preg_match("/text\/plain/i", $tmp['mime'])))
		echo '<hr />'.view_part_detail($mail, $mailid, $tmp['number'], $tmp['transfer'], $tmp['charset'], $charset);
	if ($conf->display_img_attach && (preg_match("/image/i", $tmp['mime']) && ($tmp['number'] != '')))
	{
		$exploded = explode('/', $tmp['mime']);
		$img_type = array_pop($exploded);
		if (preg_match("/JPEG/i", $img_type) || preg_match("/JPG/i", $img_type) || preg_match("/GIF/i", $img_type) || preg_match ('/PNG/g', $img_type))
                        {
			echo '<hr />';
			echo '<center>';
//JFV - urlencode mailbox name for mail image display
//			echo '<img src="index.php?module=Webmails&action=get_img&mail=' . $mailid.'&mailbox='.$mailbox.'&num=' . $tmp['number'] . '&mime=' . $img_type . '&transfer=' . $tmp['transfer'] . '" />';
			echo '<img src="index.php?module=Webmails&action=get_img&mail=' . $mailid.'&mailbox='.urlencode($mailbox).'&num=' . $tmp['number'] . '&mime=' . $img_type . '&transfer=' . $tmp['transfer'] . '" />';
//JFV END
			echo '</center>';
	}                
}                    
}


echo '</div>';
//test ended by Richie

imap_close($MailBox->mbox);

?>