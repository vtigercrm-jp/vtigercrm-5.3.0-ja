<?php
/*+*******************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ******************************************************************************/
require_once("include/utils/CommonUtils.php");
require_once 'include/Webservices/Utils.php';
require_once 'include/Webservices/DescribeObject.php';
require_once("include/Zend/Json.php");

require_once 'modules/com_vtiger_workflow/expression_engine/VTExpressionsManager.inc';

function vtJsonFields($adb, $request) {
	$moduleName = $request['modulename'];
	$mem = new VTExpressionsManager($adb);
	$fields = $mem->fields($moduleName);
	echo Zend_Json::encode(array('moduleFields' => $fields));
}

function vtJsonFunctions($adb) {
	$mem = new VTExpressionsManager($adb);
	$functions = $mem->expressionFunctions();
	echo Zend_Json::encode($functions);
}

function vtJsonOwnersList($adb) {
	$ownersList = array();
	$activeUsersList = get_user_array(false);
	$allGroupsList = get_group_array(false);
	foreach ($activeUsersList as $userId => $userName) {
		$ownersList[] = array('label' => $userName, 'value' => getUserName($userId));
	}
	foreach ($allGroupsList as $groupId => $groupName) {
		$ownersList[] = array('label' => $groupName, 'value' => $groupName);
	}

	echo Zend_Json::encode($ownersList);
}

global $adb;
$mode = vtlib_purify($_REQUEST['mode']);

if ($mode == 'getfieldsjson') {
	vtJsonFields($adb, $_REQUEST);
} elseif ($mode == 'getfunctionsjson') {
	vtJsonFunctions($adb);
} elseif ($mode == 'getownerslist') {
	vtJsonOwnersList($adb);
}
?>