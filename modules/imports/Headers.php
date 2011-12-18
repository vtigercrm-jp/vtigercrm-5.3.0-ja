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

require_once('data/SugarBean.php');

class Headers extends SugarBean
{
var $log;
var $table_name = "headers";
var $object_name = "Headers";
	function Headers() {
		$this->log = LoggerManager::getLogger('headers');
	}


function create_tables () 
{
		global $app_strings;
		/*$query = 'CREATE TABLE '.$this->table_name.' ( ';
		$query .='fileid tinyint(3) unsigned NOT NULL auto_increment';
		$query .=', headernames varchar(30) NOT NULL';
	        $query .=', PRIMARY KEY ( fileid ) )';
		$this->log->info($query);

		mysql_query($query);*/
	// exception handling logic here if the table can't be created.

	}

	function drop_tables () {
		/*
		$query = 'DROP TABLE IF EXISTS '.$this->table_name;

		$this->log->info($query);

		mysql_query($query);*/

	// - add exception handling logic here if the table can't be dropped.

	}
}
?>
