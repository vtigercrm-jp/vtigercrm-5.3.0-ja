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
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Emails/language/en_us.lang.php,v 1.17 2005/03/28 06:31:38 rank Exp $
 * Description:  Defines the Japanese language pack for the Account module.
 ********************************************************************************/
 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'一般情報',

'LBL_MODULE_NAME'=>'電子メール',
'LBL_MODULE_TITLE'=>'メール： ホーム',
'LBL_SEARCH_FORM_TITLE'=>'電子メールの検索',
'LBL_LIST_FORM_TITLE'=>'電子メールの一覧',
'LBL_NEW_FORM_TITLE'=>'電子メールの追跡',

'LBL_LIST_SUBJECT'=>'表題',
'LBL_LIST_CONTACT'=>'顧客担当者',
'LBL_LIST_RELATED_TO'=>'関連',
'LBL_LIST_DATE'=>'送信日',
'LBL_LIST_TIME'=>'送信時刻',

'ERR_DELETE_RECORD'=>"vtiger_account を削除するには、レコード番号を指定する必要があります。",
'LBL_DATE_SENT'=>'送信日：',
'LBL_DATE_AND_TIME'=>'送信日時：',
'LBL_DATE'=>'送信日：',
'LBL_TIME'=>'送信時刻：',
'LBL_SUBJECT'=>'表題：',
'LBL_BODY'=>'本文：',
'LBL_CONTACT_NAME'=>' 顧客担当者名： ',
'LBL_EMAIL'=>'電子メール：', 
'LBL_DETAILVIEW_EMAIL'=>'電子メール', 
'LBL_COLON'=>':',
'LBL_CHK_MAIL'=>'メールの確認',
'LBL_COMPOSE'=>'メールの作成',
//Single change for 5.0.3
'LBL_SETTINGS'=>'受信メール サーバーの設定',
'LBL_EMAIL_FOLDERS'=>'電子メール フォルダ',
'LBL_INBOX'=>'受信トレイ',
'LBL_SENT_MAILS'=>'送信済みメール',
'LBL_TRASH'=>'ゴミ箱',
'LBL_JUNK_MAILS'=>'迷惑メール',
'LBL_TO_LEADS'=>'見込み客',
'LBL_TO_CONTACTS'=>'顧客担当者',
'LBL_TO_ACCOUNTS'=>'顧客企業',
'LBL_MY_MAILS'=>'私のメール',
'LBL_QUAL_CONTACT'=>'認定メール (顧客担当者)',
'LBL_MAILS'=>'メール',
'LBL_QUALIFY_BUTTON'=>'認定する',
'LBL_REPLY_BUTTON'=>'返信',
'LBL_FORWARD_BUTTON'=>'転送',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'添付ファイルのダウンロード',
'LBL_FROM'=>'送信者：',
'LBL_CC'=>'CC：',
'LBL_BCC'=>'BCC：',

'NTC_REMOVE_INVITEE'=>'このメールからこの宛先を削除しますか？',
'LBL_INVITEE'=>'宛先',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'一括配信メール',
'LBL_ATTACHMENT'=>'添付ファイル',
'LBL_UPLOAD'=>'アップロード',
'LBL_FILE_NAME'=>'ファイル名',
'LBL_SEND'=>'送信',

'LBL_EMAIL_TEMPLATES'=>'メール テンプレート',
'LBL_TEMPLATE_NAME'=>'テンプレート名',
'LBL_DESCRIPTION'=>'説明',
'LBL_EMAIL_TEMPLATES_LIST'=>'メール テンプレートの一覧',
'LBL_EMAIL_INFORMATION'=>'電子メール情報',




//for v4 release added
'LBL_NEW_LEAD'=>'新規見込み客',
'LBL_LEAD_TITLE'=>'見込み客',

'LBL_NEW_PRODUCT'=>'新規製品',
'LBL_PRODUCT_TITLE'=>'製品',
'LBL_NEW_CONTACT'=>'新規顧客担当者',
'LBL_CONTACT_TITLE'=>'顧客担当者',
'LBL_NEW_ACCOUNT'=>'新規顧客企業',
'LBL_ACCOUNT_TITLE'=>'顧客企業',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'ユーザー',
'LBL_NEW_USER'=>'新規ユーザー',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'電子メール ツール',
//Added for 4GA
'Date & Time Sent'=>'送信日時',
'Sales Enity Module'=>'$$$営業エンティティ モジュール',
'Related To'=>'関連',
'Assigned To'=>'担当',
'Subject'=>'表題',
'Attachment'=>'添付ファイル',
'Description'=>'説明',
'Time Start'=>'開始時間',
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'メール サーバー名を確認してください...',
'MESSAGE_CHECK_MAIL_ID'=>'「担当」ユーザーの電子メール ID を確認してください...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'メールは次のユーザーに送信されました：',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'メールは次の顧客担当者に送信されました：',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'メール ID が不正です。 このメール ID を確認してください...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'ユーザーまたは顧客担当者を追加してください...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' メールは正しく送信されました。',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'$$$Fetch Web Mail',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'すべて',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'この顧客担当者はメールの送信を望んでいません。',
'LBL_WEBMAILS_TITLE'=>'メール',
'LBL_EMAILS_TITLE'=>'電子メール',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'$$$Error connecting mail server!<br> Check in My Accounts->List Mail Server -> List Mail Account',
'LBL_ALLMAILS'=>'すべてのメール',
'LBL_TO_USERS'=>'ユーザー',
'LBL_TO'=>'宛先：',
'LBL_IN_SUBJECT'=>'表題',
'LBL_IN_SENDER'=>'送信者',
'LBL_IN_SUBJECT_OR_SENDER'=>'表題または送信者',
'SELECT_EMAIL'=>'電子メール ID の選択',
'Sender'=>'送信者',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'受信メール サーバーが設定されていません',
'LBL_MAILSELECT_INFO1'=>'次の電子メール ID タイプは次の選択に関連付けられています：',
'LBL_MAILSELECT_INFO2'=>'メールを送信する電子メール ID タイプを選択します',
'LBL_MULTIPLE'=>'複数',
'LBL_COMPOSE_EMAIL'=>'メールの作成',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger Webmail Client',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'vtigerCRM Mail',
'TITLE_COMPOSE_MAIL'=>'メールの作成',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'担当ユーザーにメールを送信できません。',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'担当ユーザーの電子メール ID を確認してください...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'送信者の電子メール ID を確認してください',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'メールをこの電子メール ID に送信できません',
'PLEASE_CHECK_THIS_EMAILID'=>'このメール ID を確認してください...',
'LBL_CC_EMAIL_ERROR'=>'CC の電子メール ID が不正です',
'LBL_BCC_EMAIL_ERROR'=>'BCC の電子メール ID が不正です',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'宛先が指定されていません',
'LBL_CONF_MAILSERVER_ERROR'=>'[システム設定] > [送信サーバー] リンクから送信メール サーバーを設定してください',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger Webmail Client',
'LBL_MAILSELECT_INFO3'=>'選択したレコードの電子メール ID を表示する許可がありません。',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => 'この機能は Microsoft Internet Explorer 5.5 以上を使用するユーザーのみ利用できます。\n\nアップデートしてください。',
'DOWNLOAD_CONFIRAMATION' => 'ファイルをダウンロードしますか？',
'LBL_PLEASE_ATTACH' => '正しい添付ファイルを指定して、再び実行してください。',
'LBL_KINDLY_UPLOAD' => 'php.ini ファイルで <font color="red">upload_tmp_dir</font> 変数を設定してください。',
'LBL_EXCEED_MAX' => '申し訳ございません。アップロードしたファイルは最大ファイル サイズを超えました。 次のサイズ以下のファイルを試してください： ',
'LBL_BYTES' => ' バイト',
'LBL_CHECK_USER_MAILID' => '現在のユーザーのメール ID を確認してください。 E メールを送信するには正しいメール ID である必要があります。',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'活動タイプ',
'LBL_MAILSELECT_INFO'=>'には次の電子メール ID が関連付けられています。送信する電子メール ID を選択してください',
'LBL_NO_RECORDS' => 'レコードが見つかりません',
'LBL_PRINT_EMAIL'=> '印刷',

);

?>
