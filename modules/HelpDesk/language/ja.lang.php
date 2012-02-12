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
 * $Header$
 * Description:  Defines the Japanese language pack
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>..
 ********************************************************************************/

$mod_strings = Array(
// Added in release 4.0
'LBL_MODULE_NAME'=>'サポート依頼',
'LBL_GROUP'=>'グループ',
'LBL_ACCOUNT_NAME'=>'顧客企業名',
'LBL_CONTACT_NAME'=>'顧客担当者名',
'LBL_SUBJECT'=>'表題',
'LBL_NEW_FORM_TITLE' => '新規サポート依頼',
'LBL_DESCRIPTION'=>'説明',
'NTC_DELETE_CONFIRMATION'=>'このレコードを削除しますか？',
'LBL_CUSTOM_FIELD_SETTINGS'=>'カスタム フィールド設定：',
'LBL_PICKLIST_FIELD_SETTINGS'=>'定義リスト フィールド設定：',
'Leads'=>'見込み客',
'Accounts'=>'顧客企業',
'Contacts'=>'顧客担当者',
'Opportunities'=>'商談',
'LBL_CUSTOM_INFORMATION'=>'カスタム情報',
'LBL_DESCRIPTION_INFORMATION'=>'詳細情報',

'LBL_ACCOUNT'=>'顧客企業',
'LBL_OPPURTUNITY'=>'商談',
'LBL_PRODUCT'=>'製品',

'LBL_COLON'=>':',
'LBL_TICKET'=>'サポート依頼',
'LBL_CONTACT'=>'顧客担当者',
'LBL_STATUS'=>'ステータス',
'LBL_ASSIGNED_TO'=>'担当',
'LBL_FAQ'=>'回答事例',
'LBL_VIEW_FAQS'=>'回答事例の表示',
'LBL_ADD_FAQS'=>'回答事例の追加',
'LBL_FAQ_CATEGORIES'=>'回答事例の分類',

'LBL_PRIORITY'=>'優先度',
'LBL_CATEGORY'=>'分類',

'LBL_ANSWER'=>'回答',
'LBL_COMMENTS'=>'コメント',

'LBL_AUTHOR'=>'作者',
'LBL_QUESTION'=>'質問',

//Added vtiger_fields for File Attachment and Mail send in Tickets
'LBL_ATTACHMENTS'=>'添付ファイル',
'LBL_NEW_ATTACHMENT'=>'新規添付ファイル',
'LBL_SEND_MAIL'=>'メールの送信',

//Added vtiger_fields for search option  in TicketsList -- 4Beta
'LBL_CREATED_DATE'=>'作成日時',
'LBL_IS'=>'等しい',
'LBL_IS_NOT'=>'等しくない',
'LBL_IS_BEFORE'=>'以前',
'LBL_IS_AFTER'=>'以後',
'LBL_STATISTICS'=>'統計',
'LBL_TICKET_ID'=>'サポート依頼 ID',
'LBL_MY_TICKETS'=>'私のサポート依頼',
"LBL_MY_FAQ"=>"私の回答事例",
'LBL_ESTIMATED_FINISHING_TIME'=>'推定完了時間',
'LBL_SELECT_TICKET'=>'サポート依頼の選択',
'LBL_CHANGE_OWNER'=>'担当の変更',
'LBL_CHANGE_STATUS'=>'ステータスの変更',
'LBL_TICKET_TITLE'=>'タイトル',
'LBL_TICKET_DESCRIPTION'=>'説明',
'LBL_TICKET_CATEGORY'=>'分類',
'LBL_TICKET_PRIORITY'=>'優先度',

//Added vtiger_fields after 4 -- Beta
'LBL_NEW_TICKET'=>'新規サポート依頼',
'LBL_TICKET_INFORMATION'=>'サポート依頼情報',

'LBL_LIST_FORM_TITLE'=>'サポート依頼の一覧',
'LBL_SEARCH_FORM_TITLE'=>'サポート依頼の検索',

//Added vtiger_fields after RC1 - Release
'LBL_CHOOSE_A_VIEW'=>'表示を選択...',
'LBL_ALL'=>'すべて',
'LBL_LOW'=>'低',
'LBL_MEDIUM'=>'中',
'LBL_HIGH'=>'高',
'LBL_CRITICAL'=>'$$$Critical',
//Added vtiger_fields for 4GA
'Assigned To'=>'担当',
'Contact Name'=>'顧客担当者名',
'Priority'=>'優先度',
'Status'=>'ステータス',
'Category'=>'分類',
'Update History'=>'履歴の更新',
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',
'Title'=>'タイトル',
'Description'=>'説明',

'LBL_TICKET_CUMULATIVE_STATISTICS'=>'サポート依頼の累積統計：',
'LBL_CASE_TOPIC'=>'$$$Case Topic',
'LBL_OPEN'=>'未解決',
'LBL_CLOSED'=>'完了',
'LBL_TOTAL'=>'合計',
'LBL_TICKET_HISTORY'=>'サポート依頼の履歴',
'LBL_CATEGORIES'=>'分類',
'LBL_PRIORITIES'=>'優先度',
'LBL_SUPPORTERS'=>'$$$サポーター',

//Added vtiger_fields after 4_0_1
'LBL_TICKET_RESOLUTION'=>'解決方法情報',
'Solution'=>'解決方法',
'Add Comment'=>'追加するコメント',
'LBL_ADD_COMMENT'=>'追加するコメント',//give the same value given to the above string 'Add Comment'

//Added for 4.2 Release -- CustomView
'Ticket ID'=>'サポート依頼 ID',
'Subject'=>'表題',

//Added after 4.2 alpha
'Severity'=>'重要度',
'Product Name'=>'製品名',
'Related To'=>'関連',
'LBL_MORE'=>'追加',

'LBL_TICKETS'=>'サポート依頼',

//Added on 09-12-2005
'LBL_CUMULATIVE_STATISTICS'=>'累積統計',

//Added on 12-12-2005
'LBL_CONVERT_AS_FAQ_BUTTON_TITLE'=>'回答事例に変換',
'LBL_CONVERT_AS_FAQ_BUTTON_KEY'=>'C',
'LBL_CONVERT_AS_FAQ_BUTTON_LABEL'=>'回答事例に変換',
'Attachment'=>'添付ファイル',
'LBL_COMMENT_INFORMATION'=>'コメント情報',

//Added for existing picklist entries

'Big Problem'=>'大きな問題',
'Small Problem'=>'小さな問題',
'Other Problem'=>'その他問題',

'Low'=>'低',
'Normal'=>'通常',
'High'=>'高',
'Urgent'=>'緊急',

'Minor'=>'軽微',
'Major'=>'重大',
'Feature'=>'要望',
'Critical'=>'極めて重大',

'Open'=>'未解決',
'In Progress'=>'進行中',
'Wait For Response'=>'回答待ち',
'Closed'=>'完了',

//added to support i18n in ticket mails
'Hi' => 'お客様のお名前：',
'Dear'=> 'あて先：',
'LBL_PORTAL_BODY_MAILINFO'=> 'サポートのご依頼',
'LBL_DETAIL' => '詳細は次のとおりです：',
'LBL_REGARDS'=> '宜しくお願いいたします',
'LBL_TEAM'=> 'ヘルプデスク部門',
'LBL_TICKET_DETAILS' => 'サポート依頼詳細',
'LBL_SUBJECT' => '表題： ',
'created' => 'を登録いたしました。',
'replied' => 'への返答がございます。',
'reply'=>'返答がございます ⇒',
'customer_portal' => ' ( vTiger “顧客ポータル” 内 )。',
'link' => '以下のリンクから返答をご覧いただけます：',
'Thanks' => '宜しくお願いいたします',
'Support_team' => 'Vtiger サポート部門',
'The comments are' => 'コメント内容：',
'Ticket Title' => 'サポート依頼のタイトル',
'Re' => 'Re :',
// Added/Updated for vtiger CRM 5.0.4

//this label for customerportal.
'LBL_STATUS_CLOSED' =>'Closed',//Do not convert this label. This is used to check the status. If the status 'Closed' is changed in vtigerCRM server side then you have to change in customerportal language file also.
'LBL_STATUS_UPDATE' => 'サポート依頼のステータスが更新されました：',
'LBL_COULDNOT_CLOSED' => 'サポート依頼の操作にエラーがありました：',
'LBL_CUSTOMER_COMMENTS' => '顧客はあなたの返答に次の追加の情報を提供しました：',
'LBL_RESPOND'=> '上記サポート依頼に速やかに対処していただくようお願いします。',
'LBL_REGARDS' =>'宜しくお願いいたします',
'LBL_SUPPORT_ADMIN' => 'サポート管理者',
'LBL_RESPONDTO_TICKETID' =>'次のサポート依頼 ID に対処してください：',
'LBL_CUSTOMER_PORTAL' => ' ( 顧客ポータル内 ) - 緊急',
'LBL_LOGIN_DETAILS' => '以下はあなたの顧客ポータル ログインの詳細です：',
'LBL_MAIL_COULDNOT_SENT' =>'メールを送信できません',
'LBL_USERNAME' => 'ユーザー名：',
'LBL_PASSWORD' => 'パスワード：',
'LBL_SUBJECT_PORTAL_LOGIN_DETAILS' => 'あなたの顧客ポータル ログインの詳細について',
'LBL_GIVE_MAILID' => '電子メール ID を提供してください',
'LBL_CHECK_MAILID' => '顧客ポータル用の電子メール ID を確認してください',
'LBL_LOGIN_REVOKED' => 'ログインは取り消されました。 管理者にお問い合わせください。',
'LBL_MAIL_SENT' => '顧客ポータル ログインの詳細を記したメールがあなたのメール ID に送信されました',
'LBL_ALTBODY' => 'これは HTML 非対応メール クライアント向けのプレーン テキスト内容です',

// Added after 5.0.4 GA

// Module Sequence Numbering
'Ticket No' => 'サポート依頼 No',
// END

'Hours' => '時間数',
'Days' => '日数',
);

?>
