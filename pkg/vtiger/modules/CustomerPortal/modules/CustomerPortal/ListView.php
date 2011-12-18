<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
 
global $app_strings, $mod_strings, $current_language, $currentModule, $theme,$current_user;
require_once('Smarty_setup.php');
require_once('include/ListView/ListView.php');
require_once('modules/CustomView/CustomView.php');
require_once('include/DatabaseUtil.php');
require_once('modules/CustomerPortal/PortalUtils.php');
require('user_privileges/user_privileges_'.$current_user->id.'.php');

if(!$is_admin) {
	echo "<table border='0' cellpadding='5' cellspacing='0' width='100%' height='450px'><tr><td align='center'>";
	echo "<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 55%; position: relative; z-index: 10000000;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tbody><tr>
		<td rowspan='2' width='11%'><img src= " . vtiger_imageurl('denied.gif', $theme) . " ></td>
		<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
			<span class='genHeaderSmall'>$app_strings[LBL_PERMISSION]</span></td>
		</tr>
		<tr>
		<td class='small' align='right' nowrap='nowrap'>
		<a href='javascript:window.history.back();'>$app_strings[LBL_GO_BACK]</a><br>
		</td>
		</tr>
		</tbody></table>
		</div>";
	echo "</td></tr></table>";
	exit;
}

if($_REQUEST['sub_mode'] != '' && isset($_REQUEST['sub_mode'])){
	$sub_mode =$_REQUEST['sub_mode']; 
}
if($sub_mode == 'movemodules'){
	$tabid = $_REQUEST['tabid'];
	$move = $_REQUEST['move'];
	if($tabid != ''){
		cp_changeTabOrder($tabid,$move);
	}
}elseif($sub_mode == 'enable_disable') {
	$tabid = $_REQUEST['tabid'];
	$status =$_REQUEST['status'];
	if($status != '' && $tabid != ''){
		cp_changeModuleVisibility($tabid,$status);
	} 
}
$category = getParentTab();
$smarty = new vtigerCRM_Smarty();
$portalmodules = cp_getPortalModuleinfo();

$smarty->assign('PORTALMODULES',$portalmodules); 
$smarty->assign("THEME", $theme);
$smarty->assign('MOD', $mod_strings);
$smarty->assign('APP', $app_strings);
$smarty->assign('MODULE', $currentModule);
$smarty->assign('CATEGORY', $category);
$smarty->assign('BUTTONS', $list_buttons);
$smarty->assign('CHECK', $tool_buttons);
$smarty->assign('IMAGE_PATH', "themes/$theme/images/");
$smarty->assign('MODE',$mode);
if($_REQUEST['ajax'] != true) {
	$smarty->display(vtlib_getModuleTemplate($currentModule,'BasicSetttings.tpl'));
}
else {
	$smarty->display(vtlib_getModuleTemplate($currentModule,'BasicSetttingsContents.tpl'));
}
?>