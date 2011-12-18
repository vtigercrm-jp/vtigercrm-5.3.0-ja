<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

global $app_strings, $mod_strings, $current_language, $currentModule, $theme;
global $list_max_entries_per_page;

require_once('Smarty_setup.php');
require_once('include/ListView/ListView.php');
require_once('modules/CustomView/CustomView.php');
require_once('include/DatabaseUtil.php');
require_once("modules/$currentModule/$currentModule.php");

$category = getParentTab();
$url_string = '';

$tool_buttons = array("index"=>"yes",);
$tool_buttons["moduleSettings"] = isModuleSettingPermitted($currentModule);
$list_buttons = Array();
if(isPermitted($currentModule,'Delete','') == 'yes') $list_buttons['del'] = $app_strings[LBL_MASS_DELETE];

$focus = new $currentModule();

if(ListViewSession::hasViewChanged($currentModule,$viewid)) {
	$_SESSION[$currentModule."_Order_By"] = '';
}
$sorder = $focus->getSortOrder();
$order_by = $focus->getOrderBy();

$_SESSION[$currentModule."_Order_By"] = $order_by;
$_SESSION[$currentModule."_Sort_Order"]=$sorder;

$smarty = new vtigerCRM_Smarty();

// Identify this module as custom module.
$smarty->assign('CUSTOM_MODULE', true);

$smarty->assign('MOD', $mod_strings);
$smarty->assign('APP', $app_strings);
$smarty->assign("THEME", $theme);
$smarty->assign('MODULE', $currentModule);
$smarty->assign('SINGLE_MOD', "CallHistory");
$smarty->assign('CATEGORY', $category);
$smarty->assign('BUTTONS', $list_buttons);
$smarty->assign('CHECK', $tool_buttons);
$smarty->assign('IMAGE_PATH', "themes/$theme/images/");

$smarty->assign('CHANGE_OWNER', getUserslist());
$smarty->assign('CHANGE_GROUP_OWNER', getGroupslist());

// Custom View
$customView = new CustomView($currentModule);
$viewid = $customView->getViewId($currentModule);
$customview_html = $customView->getCustomViewCombo($viewid);
$viewinfo = $customView->getCustomViewByCvid($viewid);

// Feature available from 5.1
if(method_exists($customView, 'isPermittedChangeStatus')) {
	// Approving or Denying status-public by the admin in CustomView
	$statusdetails = $customView->isPermittedChangeStatus($viewinfo['status']);
	
	// To check if a user is able to edit/delete a CustomView
	$edit_permit = $customView->isPermittedCustomView($viewid,'EditView',$currentModule);
	$delete_permit = $customView->isPermittedCustomView($viewid,'Delete',$currentModule);

	$smarty->assign("CUSTOMVIEW_PERMISSION",$statusdetails);
	$smarty->assign("CV_EDIT_PERMIT",$edit_permit);
	$smarty->assign("CV_DELETE_PERMIT",$delete_permit);
}
// END

$smarty->assign("VIEWID", $viewid);

if($viewinfo['viewname'] == 'All') $smarty->assign('ALL', 'All');

global $current_user;
$queryGenerator = new QueryGenerator($currentModule, $current_user);
if ($viewid != "0") {
	$queryGenerator->initForCustomViewById($viewid);
} else {
	$queryGenerator->initForDefaultCustomView();
}

// Enabling Module Search
$url_string = '';
if($_REQUEST['query'] == 'true') {
	$queryGenerator->addUserSearchConditions($_REQUEST);
	$ustring = getSearchURL($_REQUEST);
	$url_string .= "&query=true$ustring";
	$smarty->assign('SEARCH_URL', $url_string);
}

$list_query = $queryGenerator->getQuery();
// Sorting
if(!empty($order_by)) {
	if($order_by == 'smownerid') $list_query .= ' ORDER BY user_name '.$sorder;
	else {
		$tablename = getTableNameForField($currentModule, $order_by);
		$tablename = ($tablename != '')? ($tablename . '.') : '';
		$list_query .= ' ORDER BY ' . $tablename . $order_by . ' ' . $sorder;
	}
}

if(PerformancePrefs::getBoolean('LISTVIEW_COMPUTE_PAGE_COUNT', false) === true){
	$count_result = $adb->query( mkCountQuery( $list_query));
	$noofrows = $adb->query_result($count_result,0,"count");
}else{
	$noofrows = null;
}

$queryMode = (isset($_REQUEST['query']) && $_REQUEST['query'] == 'true');
$start = ListViewSession::getRequestCurrentPage($currentModule, $list_query, $viewid, $queryMode);

$navigation_array = VT_getSimpleNavigationValues($start,$list_max_entries_per_page,$noofrows);

$limit_start_rec = ($start-1) * $list_max_entries_per_page;

if( $adb->dbType == "pgsql")
	$list_result = $adb->pquery($list_query. " OFFSET $limit_start_rec LIMIT $list_max_entries_per_page", array());
else
	$list_result = $adb->pquery($list_query. " LIMIT $limit_start_rec, $list_max_entries_per_page", array());

$recordListRangeMsg = getRecordRangeMessage($list_result, $limit_start_rec,$noofrows);
$smarty->assign('recordListRange',$recordListRangeMsg);

$smarty->assign("CUSTOMVIEW_OPTION",$customview_html);

// Navigation
$start = $_SESSION['lvs'][$currentModule]['start'];
$navigationOutput = getTableHeaderSimpleNavigation($navigation_array, $url_string, $currentModule, 'index', $viewid);
$smarty->assign("NAVIGATION", $navigationOutput);

$controller = new ListViewController($adb, $current_user, $queryGenerator);
$listview_header = $controller->getListViewHeader($focus,$currentModule,$url_string,$sorder,
		$order_by);
$listview_entries = $controller->getListViewEntries($focus,$currentModule,$list_result,
		$navigation_array);
$listview_header_search = $controller->getBasicSearchFieldInfoList();

// Convert field value to DetailView Link
if(isset($focus->detailview_links) && count($focus->detailview_links)) {
	foreach($listview_entries as $listview_recid=>$listview_row) {
		foreach($listview_row as $listview_key=>$listview_val) {
			$listview_key_header = $listview_header[$listview_key];
			preg_match('/(<[^>]+>)([^<]+)(<[^>]+>)/', $listview_key_header, $matches);
			$linktext = array_search(trim($matches[2], ' &nbsp;\t\r\n'), $mod_strings);
			if(in_array($linktext, $focus->detailview_links)) {
				$listview_row[$listview_key] = 
					"<a href='index.php?action=DetailView&module=$currentModule&record=$listview_recid&parenttab=$category'>".$listview_val."</a>";
			}
		}
		$listview_entries[$listview_recid] = $listview_row;
	}
}
$smarty->assign('LISTHEADER', $listview_header);
$smarty->assign('LISTENTITY', $listview_entries);
$smarty->assign('SEARCHLISTHEADER',$listview_header_search);

// Module Search
$alphabetical = AlphabeticalSearch($currentModule,'index',$focus->def_basicsearch_col,'true','basic','','','','',$viewid);
$fieldnames = $controller->getAdvancedSearchOptionString();
$criteria = getcriteria_options();
$smarty->assign("ALPHABETICAL", $alphabetical);
$smarty->assign("FIELDNAMES", $fieldnames);
$smarty->assign("CRITERIA", $criteria);

// Gather the custom link information to display
include_once('vtlib/Vtiger/Link.php');
$customlink_params = Array('MODULE'=>$currentModule, 'ACTION'=>vtlib_purify($_REQUEST['action']), 'CATEGORY'=> $category);
$smarty->assign('CUSTOM_LINKS', Vtiger_Link::getAllByType(getTabid($currentModule), Array('LISTVIEWBASIC','LISTVIEW'), $customlink_params));
// END

if(isset($_REQUEST['ajax']) && $_REQUEST['ajax'] != '')
	$smarty->display("ListViewEntries.tpl");
else 
	$smarty->display('ListView.tpl');

?>