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
'LBL_MOVE_TO'=>'移動：',
'LBL_DELETE'=>'削除',

'ERR_DELETE_RECORD'=>"vtiger_account を削除するには、レコード番号を指定する必要があります。",
'LBL_DATE_SENT'=>'送信日：',
'LBL_SUBJECT'=>'表題：',
'LBL_DATE_AND_TIME'=>'送信日時：',
'LBL_DATE'=>'日付：',
'LBL_TIME'=>'送信時刻：',
'LBL_BODY'=>'本文：',
'LBL_CONTACT_NAME'=>' 顧客担当者名： ',
'LBL_EMAIL'=>'メール：',  
'LBL_COLON'=>':',
'LBL_TO'=>'宛先：',
'LBL_CHK_MAIL'=>'メールの確認',
'LBL_COMPOSE'=>'メールの作成',
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
'LBL_REPLY_TO_SENDER'=>'送信者へ返信',
'LBL_REPLY_ALL'=>'全員へ返信',
'LBL_SHOW_HIDDEN'=>'非表示メールの表示',
'LBL_EXPUNGE_MAILBOX'=>'Trim Mailbox',

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
'Activtiy Type'=>'活動タイプ',
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
// Added for 5.0.3 release
'LBL_MAIL_CONNECT_ERROR'=>'メール サーバーに接続できません。 メール サーバーの詳細を確認してください',
'IN_REPLY_TO_THE_MESSAGE' => '$$$In reply to the message sent by ',
'LBL_CLICK_HERE' => 'ここをクリック ',
'LBL_GOTO_EMAILS_MODULE' => ' すると電子メール モジュールに移動します',
'LBL_NO_EMAILS'=>'メールがありません',
'LBL_MOVE_TO'=>'移動...',
'LBL_DEL'=>'削除 ',
'LABEL_FROM'=>'送信者：',
'LBL_INFO'=>'情報',
'LABEL_DATE'=>'日付',
'LBL_NO_IFRAMES_SUPPORTED'=>'Iframes がサポートされていません',
'LBL_EMAIL_ATTACHMENTS'=>'電子メールの添付ファイル：',
'LBL_ALLMAILS'=>'電子メール',
'LBL_TO_USERS'=>'ユーザー',
'LBL_TO_GROUPS'=>'グループ',
'SUBJECT' => '表題',
'BODY' => '本文',
'TO' => '宛先：',
'CC' => 'CC：',
'BCC' => 'BCC：',
'FROM' => '送信者：',
'IN'=>' ',
'ADD_FOLDER' => 'フォルダ [X] の追加',
//Added for 5.0.3
'LBL_LOADING_IMAGE' => '画像の読み込み中',
'LBL_ENABLE_IMAP_SUPPORT' => 'このモジュールを実行するには、PHP で IMAP サポートを有効にしてください',

// Added/Updated for vtiger CRM 5.0.4
'LBL_CONFIGURE_MAIL_SETTINGS'=>'メール設定を行ってください',
'LBL_PLEASE'=>'&nbsp;&nbsp;',
'LBL_HERE'=>' [ リンク ] ',

// Added after 5.0.4 GA
'LBL_FULL_EMAIL_VIEW'=>'全面表示', 
'LBL_MESSAGE'=>'メッセージ', 
'LBL_MESSAGES'=>'メッセージ',

'LBL_NO_ATTACHMENTS'=>'ダウンロードするファイルがありません', 
'LBL_THERE_ARE'=>'&nbsp; ', 
'LBL_ATTACHMENTS_TO_CHOOSE'=>'  個の添付ファイルがあります',
'LBL_ATTACHMENTS'=>'添付ファイル', 

'LBL_LIST_COUNT'=>'表示範囲：',

);
?>
