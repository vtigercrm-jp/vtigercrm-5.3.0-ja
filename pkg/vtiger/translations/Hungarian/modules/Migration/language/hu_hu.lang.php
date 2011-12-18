<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header:  E:\D_root\Dokumentumok\vtiger520\hungarian52\trunk\modules\Migration\language\hu_hu.lang.php - 23:23 2010.05.31. $
 * Description:  Defines the Hungarian language pack for the Migration module vtiger 5.2.0
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/

$mod_strings = Array(
'LBL_MIGRATE_INFO'=>'Költözési adatok megadása a <b><i> Forrás </i></b>-ból az <b><i> Aktuális (Legutóbbi) vtigerCRM </i></b>-be',
'LBL_CURRENT_VT_MYSQL_EXIST'=>'Aktuális vtiger MySQL itt van ',
'LBL_THIS_MACHINE'=>'Ezen a gépen',
'LBL_DIFFERENT_MACHINE'=>'Másik gépen',
'LBL_CURRENT_VT_MYSQL_PATH'=>'Aktuális vtiger MySQL elérési útvonal',
'LBL_SOURCE_VT_MYSQL_DUMPFILE'=>'vtiger <b>Forrás</b> Dump (Mentés) fájlnév',
'LBL_NOTE_TITLE'=>'Megjegyzés:',
'LBL_NOTES_LIST1'=>'Ha az aktuális MySQL ugyanazon a gépen van, akkor add meg a MySQL elérési útvonalat (vagy) megadhatod a Mentés (Dump) fájlt, ha van ilyened.',
'LBL_NOTES_LIST2'=>'Ha az aktuális MySQL egy másik gépen van, akkor add meg a (Forrás) Mentés (Dump) fájl nevét a teljes elérési útvonallal.',
'LBL_NOTES_DUMP_PROCESS'=>'To take Database dump please execute the following command from inside the <b>mysql/bin</b> directory
			   <br><b>mysqldump --user="mysql_username"  --password="mysql-password" -h "hostname"  --port="mysql_port" "database_name" > dump_filename</b>
			   <br>add <b>SET FOREIGN_KEY_CHECKS = 0;</b> -- at the start of the dump file
			   <br>add <b>SET FOREIGN_KEY_CHECKS = 1;</b> -- at the end of the dump file',
'LBL_NOTES_LIST3'=>'Give the MySQL path like <b>/home/crm/vtigerCRM4_5/mysql</b>',
'LBL_NOTES_LIST4'=>'Give the Dump filename with full Path like <b>/home/fullpath/4_2_dump.txt</b>',

'LBL_CURRENT_MYSQL_PATH_FOUND'=>'Current installation\'s MySQL path has been found.',
'LBL_SOURCE_HOST_NAME'=>'Forrás Host Név :',
'LBL_SOURCE_MYSQL_PORT_NO'=>'Forrás MySql Port sorszám :',
'LBL_SOURCE_MYSQL_USER_NAME'=>'Forrás MySql Felhasználónév :',
'LBL_SOURCE_MYSQL_PASSWORD'=>'Forrás MySql Jelszó :',
'LBL_SOURCE_DB_NAME'=>'Forrás Adatbázis Név :',
'LBL_MIGRATE'=>'Költöztetés az aktuális verzióba',
//Added after 5 Beta 
'LBL_UPGRADE_VTIGER'=>'Vtiger CRM adatbázis naprakész állapotba hozása',
'LBL_UPGRADE_FROM_VTIGER_423'=>'Adatbázis naprakész állapotba hozása a vtiger CRM 4.2.3-ból 5.0.0-ba',
'LBL_SETTINGS'=>'Beállítások',
'LBL_STEP'=>'Lépés',
'LBL_SELECT_SOURCE'=>'Forrás kiválasztása',
'LBL_STEP1_DESC'=>'To Start database migration, you must specify the format in which the old data is available',
'LBL_RADIO_BUTTON1_TEXT'=>'I have access to vtiger CRM live database system',
'LBL_RADIO_BUTTON1_DESC'=>'This option requires you to have the host machine\'s ( where the DB is stored ) address and DB access  details. Both local and remote systems are supported in this method. Refer documentation for Help.',
'LBL_RADIO_BUTTON2_TEXT'=>'I have access to vtiger CRM archived database dump',
'LBL_RADIO_BUTTON2_DESC'=>'This option requires database dump available locally in the same machine in which you are upgrading. You cannot access data dump from a different machine (remote database server). Refer documentation for Help.',
'LBL_RADIO_BUTTON3_TEXT'=>'I have a new database with 4.2.3 Data',
'LBL_RADIO_BUTTON3_DESC'=>'This option requires vtiger CRM 4.2.3 database system details, including database server ID, user name, and password. You cannot access data dump from a different machine (remote database server).',

'LBL_HOST_DB_ACCESS_DETAILS'=>'Host Database Access Details',
'LBL_MYSQL_HOST_NAME_IP'=>'MySQL Host Name or IP Address : ',
'LBL_MYSQL_PORT'=>'MySQL Port Number : ',
'LBL_MYSQL_USER_NAME'=>'MySql User Name : ',
'LBL_MYSQL_PASSWORD'=>'MySql Password : ',
'LBL_DB_NAME'=>'Database Name : ',

'LBL_LOCATE_DB_DUMP_FILE'=>'Locate Database Dump File',
'LBL_DUMP_FILE_LOCATION'=>'Dump File Location : ',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">Please do not specify the 4.2.3 database details. This option will alter the given database directly.</font>
<br>It is strongly recommended that to do the following.
<br>1. Take a dump of your 4.2.3 database
<br>2. Create new database (Better is to create a database in the server where your vtiger 5.0 Database is running.)
<br>3. Apply this 4.2.3 dump to this new database.
<br>Now give this new database access details. This migration will modify this Database to fit with the 5.0 Schema.
Then you can give this Database name in config.inc.php file to use this Database ie., $dbconfig[\'db_name\'] = \'new db name\';',

'LBL_ENTER_MYSQL_SERVER_PATH'=>'Enter MySQL Server Path',
'LBL_SERVER_PATH_DESC'=>'MySQL path in the server like <b>/home/5beta/vtigerCRM5_beta/mysql/bin</b> or <b>c:\Program Files\mysql\bin</b>',
'LBL_MYSQL_SERVER_PATH'=>'MySQL Server Path : ',
'LBL_MIGRATE_BUTTON'=>'Migrate',
'LBL_CANCEL_BUTTON'=>'Visszavon',
'LBL_UPGRADE_FROM_VTIGER_5X'=>'Upgrade database from vtiger CRM 5.x to next version',
'LBL_PATCH_OR_MIGRATION'=>'you must specify the source database version (Patch update or Migration)',
//Added for java script alerts
'ENTER_SOURCE_HOST' => 'Please enter the Source Host Name',
'ENTER_SOURCE_MYSQL_PORT' => 'Please enter the Source MySql Port Number',
'ENTER_SOURCE_MYSQL_USER' => 'Please enter the Source MySql User Name',
'ENTER_SOURCE_DATABASE' => 'Please enter the Source Database Name',
'ENTER_SOURCE_MYSQL_DUMP' => 'Please enter the Valid MySQL Dump File',
'ENTER_HOST' => 'Please enter the Host Name',
'ENTER_MYSQL_PORT' => 'Please enter the MySql Port Number',
'ENTER_MYSQL_USER' => 'Please enter the MySql User Name',
'ENTER_DATABASE' => 'Please enter the Database Name',
'SELECT_ANYONE_OPTION' => 'Please select any one option',
'ENTER_CORRECT_MYSQL_PATH' => 'Please enter the Correct MySQL Path',

);






?>
