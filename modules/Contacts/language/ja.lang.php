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
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Contacts/language/en_us.lang.php,v 1.14 2005/03/24 17:47:43 rank Exp $
 * Description:  Defines the Japanese language pack
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>..
 ********************************************************************************/

$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------Added for general search
'LBL_MODULE_NAME'=>'顧客担当者',
'LBL_INVITEE'=>'直接レポート',
'LBL_MODULE_TITLE'=>'顧客担当者： ホーム',
'LBL_SEARCH_FORM_TITLE'=>'顧客担当者の検索',
'LBL_LIST_FORM_TITLE'=>'顧客担当者の一覧',
'LBL_NEW_FORM_TITLE'=>'新規顧客担当者',
'LBL_CONTACT_OPP_FORM_TITLE'=>'顧客担当者-商談：',
'LBL_CONTACT'=>'顧客担当者：',

'LBL_LIST_NAME'=>'名前',
'LBL_LIST_LAST_NAME'=>'姓',
'LBL_LIST_FIRST_NAME'=>'名',
'LBL_LIST_CONTACT_NAME'=>'顧客担当者名',
'LBL_LIST_TITLE'=>'タイトル',
'LBL_LIST_ACCOUNT_NAME'=>'顧客企業名',
'LBL_LIST_EMAIL_ADDRESS'=>'電子メール',
'LBL_LIST_PHONE'=>'電話',
'LBL_LIST_CONTACT_ROLE'=>'役割',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_last_name' => 'LBL_LIST_LAST_NAME',
'db_first_name' => 'LBL_LIST_FIRST_NAME',
'db_title' => 'LBL_LIST_TITLE',
'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
//END DON'T CONVERT
 
'LBL_EXISTING_CONTACT' => '既存の顧客担当者を使用',
'LBL_CREATED_CONTACT' => '新規顧客担当者を作成',
'LBL_EXISTING_ACCOUNT' => '既存の vtiger_account を使用',
'LBL_CREATED_ACCOUNT' => '新規 vtiger_account を作成',
'LBL_CREATED_CALL' => '新規連絡を作成',
'LBL_CREATED_MEETING' => '新規会議を作成',
'LBL_ADDMORE_BUSINESSCARD' =>'他の名刺を追加',

'LBL_BUSINESSCARD' => '名刺',

'LBL_NAME'=>'名前：',
'LBL_CONTACT_NAME'=>'顧客担当者名：',
'LBL_CONTACT_INFORMATION'=>'顧客担当者情報',
'LBL_CUSTOM_INFORMATION'=>'カスタム情報',
'LBL_FIRST_NAME'=>'名：',
'LBL_OFFICE_PHONE'=>'勤務先電話：',
'LBL_ACCOUNT_NAME'=>'顧客企業名：',
'LBL_ANY_PHONE'=>'電話：',
'LBL_PHONE'=>'電話：',
'LBL_LAST_NAME'=>'姓：',
'LBL_MOBILE_PHONE'=>'携帯電話：',
'LBL_HOME_PHONE'=>'ホーム：',
'LBL_LEAD_SOURCE'=>'紹介元：',
'LBL_OTHER_PHONE'=>'その他電話：',
'LBL_FAX_PHONE'=>'FAX：',
'LBL_TITLE'=>'タイトル：',
'LBL_DEPARTMENT'=>'部門：',
'LBL_BIRTHDATE'=>'生年月日：',
'LBL_EMAIL_ADDRESS'=>'電子メール：',
'LBL_OTHER_EMAIL_ADDRESS'=>'その他電子メール：',
'LBL_ANY_EMAIL'=>'電子メール：',
'LBL_REPORTS_TO'=>'上司：',
'LBL_ASSISTANT'=>'アシスタント：',
'LBL_YAHOO_ID'=>'Yahoo! ID：',
'LBL_ASSISTANT_PHONE'=>'アシスタント電話：',
'LBL_DO_NOT_CALL'=>'連絡除外：',
'LBL_EMAIL_OPT_OUT'=>'電子メール送信から除外：',
'LBL_PRIMARY_ADDRESS'=>'主要住所：',
'LBL_ALTERNATE_ADDRESS'=>'その他住所：',
'LBL_ANY_ADDRESS'=>'住所：',
'LBL_CITY'=>'市町村区：',
'LBL_STATE'=>'都道府県：',
'LBL_POSTAL_CODE'=>'郵便番号：',
'LBL_COUNTRY'=>'国：',
'LBL_DESCRIPTION_INFORMATION'=>'詳細情報',
'LBL_IMAGE_INFORMATION'=>'顧客担当者の画像情報：',
'LBL_ADDRESS_INFORMATION'=>'住所情報',
'LBL_DESCRIPTION'=>'説明：',
'LBL_CONTACT_ROLE'=>'役割：',
'LBL_OPP_NAME'=>'商談名：',
'LBL_DUPLICATE'=>'顧客担当者が重複している可能性があります',
'MSG_DUPLICATE' => 'この顧客担当者を作成すると、重複した顧客担当者が作られる可能性 (vtiger_potentialy) があります。 以下リストから顧客担当者を選択するか、[新規顧客担当者] をクリックして既に入力したデータで新しい顧客担当者の作成を続行することができます。',

'LNK_NEW_APPOINTMENT' => '新規約束',
'LBL_ADD_BUSINESSCARD' => '名刺の追加',
'NTC_DELETE_CONFIRMATION'=>'このレコードを削除しますか？',
'NTC_REMOVE_CONFIRMATION'=>'このケースからこの顧客担当者を削除しますか？',
'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION'=>'$$$Are you sure you want to remove this record as a member organization?',
'ERR_DELETE_RECORD'=>"顧客担当者を削除するには、レコード番号を指定する必要があります。",
'NTC_COPY_PRIMARY_ADDRESS'=>'主要住所を代替住所へコピー',
'NTC_COPY_ALTERNATE_ADDRESS'=>'代替住所を主要住所へコピー',

'LBL_SELECT_CONTACT'=>'顧客担当者の選択',
//Added for search heading
'LBL_GENERAL_INFORMATION'=>'一般情報',



//for v4 release added
'LBL_NEW_POTENTIAL'=>'新規案件',
'LBL_POTENTIAL_TITLE'=>'案件',

'LBL_NEW_TASK'=>'新規作業',
'LBL_TASK_TITLE'=>'作業',
'LBL_NEW_CALL'=>'新規連絡',
'LBL_CALL_TITLE'=>'連絡',
'LBL_NEW_MEETING'=>'新規会議',
'LBL_MEETING_TITLE'=>'会議',
'LBL_NEW_EMAIL'=>'新規電子メール',
'LBL_EMAIL_TITLE'=>'電子メール',
'LBL_NEW_NOTE'=>'新規ドキュメント',
'LBL_NOTE_TITLE'=>'ドキュメント',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'顧客担当者ツール',

'Salutation'=>'敬称',
'First Name'=>'名',
'Office Phone'=>'勤務先電話',
'Last Name'=>'姓',
'Mobile'=>'携帯電話',
'Account Name'=>'顧客企業名',
'Home Phone'=>'自宅電話',
'Lead Source'=>'紹介元',
'Other Phone'=>'その他電話',
'Title'=>'タイトル',
'Fax'=>'FAX',
'Department'=>'部門',
'Birthdate'=>'生年月日',
'Email'=>'電子メール',
'Reports To'=>'上司',
'Assistant'=>'アシスタント',
'Yahoo Id'=>'Yahoo ID',
'Assistant Phone'=>'アシスタント電話',
'Do Not Call'=>'連絡除外',
'Email Opt Out'=>'電子メール送信から除外',
'Assigned To'=>'担当',
'Campaign Source'=>'提供元の販売活動',
'Reference' =>'参照',
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',
'Mailing Street'=>'番地 (郵送先)',
'Other Street'=>'番地 (その他)',
'Mailing City'=>'市町村区 (郵送先)',
'Mailing State'=>'都道府県 (郵送先)',
'Mailing Zip'=>'郵便番号 (郵送先)',
'Mailing Country'=>'国 (郵送先)',
'Mailing Po Box'=>'私書箱 (郵送先)',
'Other Po Box'=>'私書箱 (その他)',
'Other City'=>'市町村区 (その他)',
'Other State'=>'都道府県 (その他)',
'Other Zip'=>'郵便番号 (その他)',
'Other Country'=>'国 (その他)',
'Contact Image'=>'顧客担当者の画像',
'Description'=>'説明',

// Added vtiger_fields for Add Business Card
'LBL_NEW_CONTACT'=>'新規顧客担当者',
'LBL_NEW_ACCOUNT'=>'新規顧客企業',
'LBL_NOTE_SUBJECT'=>'ドキュメントの表題：',
'LBL_NOTE'=>'メモ：',
'LBL_WEBSITE'=>'Web サイト：',
'LBL_NEW_APPOINTMENT'=>'新規約束',
'LBL_SUBJECT'=>'表題：',
'LBL_START_DATE'=>'開始日：',
'LBL_START_TIME'=>'開始時間：',

//Added vtiger_field after 4_0_1
'Portal User'=>'ポータル ユーザー',
'LBL_CUSTOMER_PORTAL_INFORMATION'=>'顧客ポータル情報',
'Support Start Date'=>'サポート開始日',
'Support End Date'=>'サポート終了日',
//Added for 4.2 Release -- CustomView
'Name'=>'名前',
'LBL_ALL'=>'すべて',
'LBL_MAXIMUM_LIMIT_ERROR'=>'申し訳ございません。アップロードしたファイルは最大限度 vtiger_filesize を超えました。 800000 バイト以下のファイルで試してください。',
'LBL_UPLOAD_ERROR'=>'ファイルのアップロードで問題が発生しました。 再試行してください。',
'LBL_IMAGE_ERROR'=>'指定されたファイルは画像タイプ (.gif/.jpg/.png) ではありません',
'LBL_INVALID_IMAGE'=>'不正なファイルまたはファイルにデータがありません',

//Added after 5Alpha5
'Notify Owner'=>'担当に通知',

//Added for Picklist Values
'--None--'=>'--なし--',

'Mr.'=>'Mr. (男性)',
'Ms.'=>'Ms. (女性)',
'Mrs.'=>'Mrs.',
'Dr.'=>'Dr.',
'Prof.'=>'Prof.',

'Cold Call'=>'飛び込み',
'Existing Customer'=>'既存顧客',
'Self Generated'=>'自己開拓',
'Employee'=>'従業員',
'Partner'=>'提携先',
'Public Relations'=>'広報活動',
'Direct Mail'=>'ダイレクト メール',
'Conference'=>'会議 (カンファレンス)',
'Trade Show'=>'展示会',
'Web Site'=>'Web サイト',
'Word of mouth'=>'口コミ',
'Other'=>'その他',
'User List'=>'ユーザーの一覧',

//Added for 5.0.3
'Customer Portal Login Details'=>'顧客ポータルのログイン詳細',
'Dear'=>'あて先：',
'Your Customer Portal Login details are given below:'=>'お客様の顧客ポータルのログイン詳細は以下の通りです：',
'User Id :'=>'ユーザー ID：',
'Password :'=>'パスワード：',
'Please Login Here'=>'ここからログインしてください',
'Note :'=>'メモ：',
'We suggest you to change your password after logging in first time'=>'初回ログイン時にパスワードを変更することをお勧めします。',
'Support Team'=>'サポート部門',

'TITLE_AJAX_CSS_POPUP_CHAT'=>'Ajax Css-Popup チャット',

// Added after 5.0.4 GA

// Module Sequence Numbering
'Contact Id' => '顧客担当者 ID',
// END

);

?>
