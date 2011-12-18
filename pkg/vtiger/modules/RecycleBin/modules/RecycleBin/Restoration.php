<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

if(isset($_REQUEST['idlist']) && $_REQUEST['idlist'] != '')
{
	$idlists = explode(',',$_REQUEST[idlist]);
}elseif(isset($_REQUEST['entityid']) && $_REQUEST['entityid'] != '')
{
	$idlists = Array($_REQUEST['entityid']);
}

$selected_module = vtlib_purify($_REQUEST['selectmodule']);
require_once('data/CRMEntity.php');
$focus = CRMEntity::getInstance($selected_module);

for($i=0;$i<count($idlists);$i++) {
	if(!empty($idlists[$i])) {
		$focus->restore($mod_name, $idlists[$i]);
	}
}

$parenttab = getParentTab();

header("Location: index.php?module=RecycleBin&action=RecycleBinAjax&file=index&parenttab=$parenttab&mode=ajax&selected_module=$selected_module");
?>
