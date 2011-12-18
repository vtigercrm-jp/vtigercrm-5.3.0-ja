<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

global $current_user, $currentModule, $theme, $app_strings;
$category = getParentTab();

require_once 'include/Webservices/ConvertLead.php';

//Getting the Parameters from the ConvertLead Form
$recordId = vtlib_purify($_REQUEST["record"]);
$leadId = vtws_getWebserviceEntityId('Leads',$recordId);

$assigned_to = $_REQUEST["assigntype"];
if($assigned_to == "U") {
	$assigned_user_id = $_REQUEST["assigned_user_id"];
	$assignedTo = vtws_getWebserviceEntityId('Users',$assigned_user_id);
} else {
	$assigned_user_id = $_REQUEST["assigned_group_id"];
	$assignedTo = vtws_getWebserviceEntityId('Groups',$assigned_user_id);
}

$accountName = $_REQUEST['account_name'];

$createPotential = $_REQUEST["createpotential"];
$avoidPotential = (isset($createPotential) && $createPotential == "on")? true : false;

$potential = array();
$potential['potentialname'] = vtlib_purify($_REQUEST["potential_name"]);
$potential['closingdate'] = getValidDBInsertDateValue($_REQUEST["closedate"]);
$potential['amount'] = vtlib_purify($_REQUEST['potential_amount']);
$potential['sales_stage'] = vtlib_purify($_REQUEST['potential_sales_stage']);

$transferRelatedRecordsTo = $_REQUEST['transfer_related_records_to'];
if(empty($transferRelatedRecordsTo)) $transferRelatedRecordsTo = 'Contacts';

$result = vtws_convertlead($leadId,$assignedTo,$accountName,$avoidPotential,$potential,$transferRelatedRecordsTo,$current_user);

$accountIdComponents = vtws_getIdComponents($result['accountId']);
$accountId = $accountIdComponents[1];
$contactIdComponents = vtws_getIdComponents($result['contactId']);
$contactId = $contactIdComponents[1];
$potentialIdComponents = vtws_getIdComponents($result['potentialId']);
$potentialId = $potentialIdComponents[1];

if(!empty($accountId)) {
	header("Location: index.php?action=DetailView&module=Accounts&record=$accountId&parenttab=$category");
} elseif(!empty($contactId)) {
	header("Location: index.php?action=DetailView&module=Contacts&record=$contactId&parenttab=$category");
} else {
	echo "<link rel='stylesheet' type='text/css' href='themes/$theme/style.css'>";	
	echo "<table border='0' cellpadding='5' cellspacing='0' width='100%' height='450px'><tr><td align='center'>";
	echo "<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 55%; position: relative; z-index: 10000000;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tbody><tr>
		<td rowspan='2' width='11%'><img src='". vtiger_imageurl('denied.gif', $theme) . "' ></td>
		<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'><span class='genHeaderSmall'>$currentModule $app_strings[CANNOT_CONVERT]</span></td>
		</tr>
		<tr>
		<td class='small' align='right' nowrap='nowrap'>			   	
		<a href='javascript:window.history.back();'>$app_strings[LBL_GO_BACK]</a><br>								   						     </td>
		</tr>
		</tbody></table> 
		</div>";
	echo "</td></tr></table>";
}

?>
