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
'LBL_MODULE_NAME'=>'回答事例',
'LBL_MODULE_TITLE'=>'回答事例： ホーム',
'LBL_SEARCH_FORM_TITLE'=>'回答事例の検索',
'LBL_LIST_FORM_TITLE'=>'回答事例の一覧',
'LBL_NEW_FORM_TITLE'=>'新規回答事例',
'LBL_MEMBER_ORG_FORM_TITLE'=>'$$$Member Organizations',

'LBL_LIST_ACCOUNT_NAME'=>'回答事例名',
'LBL_LIST_CITY'=>'市町村区',
'LBL_LIST_WEBSITE'=>'Web サイト',
'LBL_LIST_STATE'=>'都道府県',
'LBL_LIST_PHONE'=>'電話',
'LBL_LIST_EMAIL_ADDRESS'=>'電子メール アドレス',
'LBL_LIST_CONTACT_NAME'=>'顧客担当者名',
'LBL_FAQ_INFORMATION'=>'回答事例情報',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'回答事例：',
'LBL_ACCOUNT_NAME'=>'回答事例名：',
'LBL_PHONE'=>'電話：',
'LBL_WEBSITE'=>'Web サイト：',
'LBL_FAX'=>'FAX：',
'LBL_TICKER_SYMBOL'=>'証券コード：',
'LBL_OTHER_PHONE'=>'その他電話：',
'LBL_ANY_PHONE'=>'電話：',
'LBL_MEMBER_OF'=>'親会社：',
'LBL_EMAIL'=>'メール：',
'LBL_EMPLOYEES'=>'従業員数：',
'LBL_OTHER_EMAIL_ADDRESS'=>'その他電子メール：',
'LBL_ANY_EMAIL'=>'電子メール：',
'LBL_OWNERSHIP'=>'企業形態：',
'LBL_RATING'=>'格付け：',
'LBL_INDUSTRY'=>'業界：',
'LBL_SIC_CODE'=>'業種識別 (SIC) コード：',
'LBL_TYPE'=>'タイプ：',
'LBL_ANNUAL_REVENUE'=>'年間売上高：',
'LBL_ADDRESS_INFORMATION'=>'住所情報',
'LBL_ACCOUNT_INFORMATION'=>'回答事例情報',
'LBL_BILLING_ADDRESS'=>'請求先住所：',
'LBL_SHIPPING_ADDRESS'=>'発送先住所：',
'LBL_ANY_ADDRESS'=>'住所：',
'LBL_CITY'=>'市町村区：',
'LBL_STATE'=>'都道府県：',
'LBL_POSTAL_CODE'=>'郵便番号：',
'LBL_COUNTRY'=>'国：',
'LBL_DESCRIPTION_INFORMATION'=>'詳細情報',
'LBL_DESCRIPTION'=>'説明：',
'NTC_COPY_BILLING_ADDRESS'=>'コピー：請求先→発送先',
'NTC_COPY_SHIPPING_ADDRESS'=>'コピー：発送先→請求先',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'$$$Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'回答事例が重複している可能性があります',
'MSG_DUPLICATE' => 'この vtiger_account を作成すると、重複した vtiger_account が作られる可能性 (vtiger_potentialy) があります。 以下リストから vtiger_account を選択するか、[新規回答事例] をクリックして既に入力したデータで新しい vtiger_account の作成を続行することができます。',

'LBL_INVITEE'=>'顧客担当者',
'ERR_DELETE_RECORD'=>"vtiger_account を削除するには、レコード番号を指定する必要があります。",

'LBL_SELECT_ACCOUNT'=>'回答事例の選択',
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
'LBL_NEW_CONTACT'=>'新規顧客担当者',
'LBL_CONTACT_TITLE'=>'顧客担当者',

//Added for 4GA Release
'Category'=>'分類',
'Related To'=>'関連',
'Question'=>'質問',
'Answer'=>'回答',
'Comments'=>'コメント',
'LBL_COMMENTS'=>'コメント',//give the same value given to the above string 'Comments'
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',

//Added vtiger_fields after 4.2 alpha
'LBL_TICKETS'=>'サポート依頼',
'LBL_FAQ'=>'回答事例',
'Product Name'=>'製品名',
'FAQ Id'=>'回答事例 ID',
'Add Comment'=>'追加するコメント',
'LBL_ADD_COMMENT'=>'追加するコメント',//give the same value given to the above string 'Add Comment'
'LBL_COMMENT_INFORMATION'=>'コメント情報',
'Status'=>'ステータス',

//Added on 10-12-2005
'LBL_QUESTION'=>'質問',
'LBL_CATEGORY'=>'分類',
'LBL_MY_FAQ'=>'私の最近の回答事例',

//Added for existing Picklist Entries

'General'=>'一般',

'Draft'=>'草稿',
'Reviewed'=>'レビュー済み',
'Published'=>'公開中',
'Obsolete'=>'破棄',
   
// Module Sequence Numbering
'Faq No' => '回答事例 No',
// END

);

?>
