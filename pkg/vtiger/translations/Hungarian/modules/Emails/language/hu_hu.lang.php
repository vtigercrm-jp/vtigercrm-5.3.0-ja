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
 * $Header:  E:\D_root\Dokumentumok\vtiger520\hungarian52\trunk\modules\Emails\language\hu_hu.lang.php - 19:30 2010.05.21. $
 * Description:  Defines the Hungarian language pack for the Emails module vtiger 5.2.0
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/
 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'Általános Információ',

'LBL_MODULE_NAME'=>'Email',
'LBL_MODULE_TITLE'=>'Email: Kezdőlap',
'LBL_SEARCH_FORM_TITLE'=>'Email Keresés',
'LBL_LIST_FORM_TITLE'=>'Email Lista',
'LBL_NEW_FORM_TITLE'=>'Email Nyomkövetés',

'LBL_LIST_SUBJECT'=>'Tárgy',
'LBL_LIST_CONTACT'=>'Kapcsolat',
'LBL_LIST_RELATED_TO'=>'Kapcsolódik',
'LBL_LIST_DATE'=>'Küldés Dátuma',
'LBL_LIST_TIME'=>'Küldés Ideje',

'ERR_DELETE_RECORD'=>"Adj meg egy rekord azonosítót a VTiger-fiók törléséhez",
'LBL_DATE_SENT'=>'Küldés Dátuma:',
'LBL_DATE_AND_TIME'=>'Küldés Dátuma és Ideje:',
'LBL_DATE'=>'Küldés Dátuma:',
'LBL_TIME'=>'Küldés Ideje:',
'LBL_SUBJECT'=>'Tárgy:',
'LBL_BODY'=>'Levéltörzs:',
'LBL_CONTACT_NAME'=>' Kapcsolat neve: ',
'LBL_EMAIL'=>'Email:', 
'LBL_DETAILVIEW_EMAIL'=>'E-Mail', 
'LBL_COLON'=>':',
'LBL_CHK_MAIL'=>'Email lekérdezés',
'LBL_COMPOSE'=>'Email szerkesztése',
//Single change for 5.0.3
'LBL_SETTINGS'=>'Bejövő Mail Szerver Beállítások',
'LBL_EMAIL_FOLDERS'=>'Email Mappák',
'LBL_INBOX'=>'Beérkezett levelek',
'LBL_SENT_MAILS'=>'Elküldött levelek',
'LBL_TRASH'=>'Szemetes',
'LBL_JUNK_MAILS'=>'Kéretlen levelek',
'LBL_TO_LEADS'=>'Jelölteknek',
'LBL_TO_CONTACTS'=>'Kapcsolatoknak',
'LBL_TO_ACCOUNTS'=>'Cégeknek',
'LBL_MY_MAILS'=>'A leveleim',
'LBL_QUAL_CONTACT'=>'Iktatott emailek (Kapcsolatként)',
'LBL_MAILS'=>'Levelek',
'LBL_QUALIFY_BUTTON'=>'Iktat',
'LBL_REPLY_BUTTON'=>'Válasz',
'LBL_FORWARD_BUTTON'=>'Továbbítás',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'Mellékletek letöltése',
'LBL_FROM'=>'Küldő :',
'LBL_CC'=>'Másolat :',
'LBL_BCC'=>'Rejtett másolat :',

'NTC_REMOVE_INVITEE'=>'Biztos vagy abban, hogy ezt a Címzettet el akarod távolítani az emailből?',
'LBL_INVITEE'=>'Címzettek',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'Tömeges levelek',
'LBL_ATTACHMENT'=>'Melléklet',
'LBL_UPLOAD'=>'Feltöltés',
'LBL_FILE_NAME'=>'Fájlnév',
'LBL_SEND'=>'Küldés',

'LBL_EMAIL_TEMPLATES'=>'Email Sablonok',
'LBL_TEMPLATE_NAME'=>'Sablon neve',
'LBL_DESCRIPTION'=>'Megjegyzés',
'LBL_EMAIL_TEMPLATES_LIST'=>'Email Sablonok  Listája',
'LBL_EMAIL_INFORMATION'=>'Email Információ',




//for v4 release added
'LBL_NEW_LEAD'=>'Új Jelölt',
'LBL_LEAD_TITLE'=>'Jelöltek',

'LBL_NEW_PRODUCT'=>'Új Termék',
'LBL_PRODUCT_TITLE'=>'Termékek',
'LBL_NEW_CONTACT'=>'Új Kapcsolat',
'LBL_CONTACT_TITLE'=>'Kapcsolatok',
'LBL_NEW_ACCOUNT'=>'Új Cég',
'LBL_ACCOUNT_TITLE'=>'Cégek',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'Felhasználók',
'LBL_NEW_USER'=>'Új Felhasználó',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'Email Eszközök',
//Added for 4GA
'Date & Time Sent'=>'Küldés Dátuma és Ideje',
'Sales Enity Module'=>'Értékesítési Entitás Modul',
'Related To'=>'Kapcsolódik',
'Assigned To'=>'Felelős',
'Subject'=>'Tárgy',
'Attachment'=>'Melléklet',
'Description'=>'Megjegyzés',
'Time Start'=>'Kezdés idő',
'Created Time'=>'Létrehozva',
'Modified Time'=>'Módosítva',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'Kérjük, hogy ellenőrizd a Mail Szerver nevét...',
'MESSAGE_CHECK_MAIL_ID'=>'Kérjük, hogy ellenőrizd az Email azonosítót a "Felelős" felhasználónál...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'Az emailt elküldtük a következő Felhasználó(k)nak :',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Az emailt elküldtük a következő Kapcsolat(ok)nak :',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'A Mail azonosító hibás. Kérjük, hogy ellenőrizd ezt a Mail ID-t...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Kérjük, hogy egy (vagy több) tetszőleges Felhasználót vagy Kapcsolatot adj hozzá...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' Az email(eke)t sikeresen elküldtük!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Web Mail indítása',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Mind',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Ez a Kapcsolat nem óhajt emailt kapni.',
'LBL_WEBMAILS_TITLE'=>'WebMails',
'LBL_EMAILS_TITLE'=>'Email',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Hiba a mail szerverhez kapcsolódás közben!<br> Ellenőrizd a Fiókom -> Mail Szerverek listája -> Email fiókok listája',
'LBL_ALLMAILS'=>'Minden levél',
'LBL_TO_USERS'=>'Felhasználóknak',
'LBL_TO'=>'Neki:',
'LBL_IN_SUBJECT'=>'a Tárgyban',
'LBL_IN_SENDER'=>'a Küldőben',
'LBL_IN_SUBJECT_OR_SENDER'=>'a Tárgyban vagy a Küldőben',
'SELECT_EMAIL'=>'Válassz Email azonosítókat',
'Sender'=>'Küldő',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'A Bejövő Mail Szerver nincs beállítva',
	'LBL_MAILSELECT_INFO1'=>'The following Email ID types are associated to the selected',
	'LBL_MAILSELECT_INFO2'=>'Select the Email ID types to which,the email should be sent',
'LBL_MULTIPLE'=>'Sokszoros',
'LBL_COMPOSE_EMAIL'=>'Email szerkesztése',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger Webmail Kliens',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'vtigerCRM Mail',
'TITLE_COMPOSE_MAIL'=>'Email szerkesztése',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'A levelet nem sikerült elküldeni a Felelős Felhasználónak.',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'Kérjük, hogy ellenőrizd a Felelős Felhasználó email azonosítóját...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'Kérjük, hogy ellenőrizd a Küldő email azonosítóját...',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'A levelet nem sikerült elküldeni ehhez az email ID-hez',
'PLEASE_CHECK_THIS_EMAILID'=>'Kérjük, hogy ellenőrizd ezt az email azonosítót...',
'LBL_CC_EMAIL_ERROR'=>'A megadott Másolat email azonosító nem megfelelő',
'LBL_BCC_EMAIL_ERROR'=>'A megadott Rejtett másolat email azonosító nem megfelelő',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'Nincs Címzett megadva',
'LBL_CONF_MAILSERVER_ERROR'=>'Kérjük, hogy állítsd be a Kimenő levelek mailszerverét a Beállítások -> Kimenő levelek MailSzerver linken',

'LBL_MAILSELECT_INFO3'=>'Neked nincs jogosultságod arra, hogy a kiválasztott rekord(ok) email azonosítóit megtekintsd.',
//Added  for script alerts
	'FEATURE_AVAILABLE_INFO' => 'This feature is currently only available for Microsoft Internet Explorer 5.5+ users\n\nWait f
or an update!',
'DOWNLOAD_CONFIRAMATION' => 'Le szeretnéd tölteni a fájlt?',
'LBL_PLEASE_ATTACH' => 'Kérjük, hogy adj meg egy létező fájlt a csatoláshoz és próbáld meg újra!',
'LBL_KINDLY_UPLOAD' => 'Kérjük, hogy álltsd be az <font color="red">upload_tmp_dir</font> változót a php.ini fájlban.',
'LBL_EXCEED_MAX' => 'Sajnos a feltöltendő fájl elérte a maximális méretet. Kérjük, hogy próbáld meg egy másik fájllal, amely kisebb mint ',
'LBL_BYTES' => ' byte',
'LBL_CHECK_USER_MAILID' => 'Kérjük, hogy ellenőrid az aktuális felhasználó email azonosítóját. Ennek egy létező email azonosítónak kell lennie, hogy küldhess Emaileket',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'Aktivitás típus',
'LBL_MAILSELECT_INFO'=>'a következő Email azonosítókat összekapcsoltuk. Kérjük, hogy válaszd ki azokat az email azonosítókat, amelyeknek az emailt el kell küldeni',
'LBL_NO_RECORDS' => 'A rekord nem található',
'LBL_PRINT_EMAIL'=> 'Nyomtatás',

);

?>
