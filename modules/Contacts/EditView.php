<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

require_once 'modules/Vtiger/EditView.php';

//added for contact image
$encode_val=vtlib_purify($_REQUEST['encode_val']);
$decode_val=base64_decode($encode_val);

$saveimage=isset($_REQUEST['saveimage'])?vtlib_purify($_REQUEST['saveimage']):"false";
$errormessage=isset($_REQUEST['error_msg'])?vtlib_purify($_REQUEST['error_msg']):"false";
$image_error=isset($_REQUEST['image_error'])?vtlib_purify($_REQUEST['image_error']):"false";
//end

if($image_error=="true") {
	$explode_decode_val=explode("&",$decode_val);
	for($i=1;$i<count($explode_decode_val);$i++) {
		$test=$explode_decode_val[$i];
		$values=explode("=",$test);
		$field_name_val=$values[0];
		$field_value=$values[1];
		$focus->column_fields[$field_name_val]=$field_value;
	}
}

if(isset($_REQUEST['account_id']) && $_REQUEST['account_id']!='' && $_REQUEST['record']=='') {
	require_once('modules/Accounts/Accounts.php');
	$focus->column_fields['account_id'] = $_REQUEST['account_id'];
	$acct_focus = new Accounts();
	$acct_focus->retrieve_entity_info($_REQUEST['account_id'],"Accounts");
	$focus->column_fields['fax']=$acct_focus->column_fields['fax'];
	$focus->column_fields['otherphone']=$acct_focus->column_fields['phone'];
	$focus->column_fields['mailingcity']=$acct_focus->column_fields['bill_city'];
	$focus->column_fields['othercity']=$acct_focus->column_fields['ship_city'];
	$focus->column_fields['mailingstreet']=$acct_focus->column_fields['bill_street'];
	$focus->column_fields['otherstreet']=$acct_focus->column_fields['ship_street'];
	$focus->column_fields['mailingstate']=$acct_focus->column_fields['bill_state'];
	$focus->column_fields['otherstate']=$acct_focus->column_fields['ship_state'];
	$focus->column_fields['mailingzip']=$acct_focus->column_fields['bill_code'];
	$focus->column_fields['otherzip']=$acct_focus->column_fields['ship_code'];
	$focus->column_fields['mailingcountry']=$acct_focus->column_fields['bill_country'];
	$focus->column_fields['othercountry']=$acct_focus->column_fields['ship_country'];
	$focus->column_fields['mailingpobox']=$acct_focus->column_fields['bill_pobox'];
	$focus->column_fields['otherpobox']=$acct_focus->column_fields['ship_pobox'];

	$log->debug("Accountid Id from the request is ".$_REQUEST['account_id']);
}

if(isset($_REQUEST['campaignid'])) {
	$smarty->assign("campaignid",vtlib_purify($_REQUEST['campaignid']));
}

if($errormessage==2) {
	$msg =$mod_strings['LBL_MAXIMUM_LIMIT_ERROR'];
	$errormessage ="<B><font color='red'>".$msg."</font></B> <br><br>";
} else if($errormessage==3) {
	$msg = $mod_strings['LBL_UPLOAD_ERROR'];
	$errormessage ="<B><font color='red'>".$msg."</font></B> <br><br>";
} else if($errormessage=="image") {
	$msg = $mod_strings['LBL_IMAGE_ERROR'];
	$errormessage ="<B><font color='red'>".$msg."</font></B> <br><br>";
} else if($errormessage =="invalid") {
	$msg = $mod_strings['LBL_INVALID_IMAGE'];
	$errormessage ="<B><font color='red'>".$msg."</font></B> <br><br>";
} else {
	$errormessage="";
}
if($errormessage!="") {
	$smarty->assign("ERROR_MESSAGE",$errormessage);
}

if($focus->mode == 'edit')
$smarty->display("salesEditView.tpl");
else
$smarty->display('CreateView.tpl');

?>