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
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Accounts/language/en_us.lang.php,v 1.18 2005/03/19 08:59:20 rank Exp $
 * Description:  Defines the Japanese language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'顧客企業',
'LBL_MODULE_TITLE'=>'顧客企業： ホーム',
'LBL_SEARCH_FORM_TITLE'=>'顧客企業の検索',
'LBL_LIST_FORM_TITLE'=>'顧客企業の一覧',
'LBL_NEW_FORM_TITLE'=>'新規顧客企業',
'LBL_MEMBER_ORG_FORM_TITLE'=>'$$$Member Organizations',
// Label for Top Accounts in Home Page, added for 4.2 GA
'LBL_TOP_ACCOUNTS'=>'私のトップ顧客企業', 
'LBL_TOP_AMOUNT'=>'金額',
'LBL_LIST_ACCOUNT_NAME'=>'顧客企業名',
'LBL_LIST_CITY'=>'市町村区',
'LBL_LIST_WEBSITE'=>'Web サイト',
'LBL_LIST_STATE'=>'都道府県',
'LBL_LIST_PHONE'=>'電話',
'LBL_LIST_EMAIL_ADDRESS'=>'電子メール アドレス',
'LBL_LIST_CONTACT_NAME'=>'顧客担当者名',
'LBL_LIST_AMOUNT' => '総額',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'顧客企業：',
'LBL_ACCOUNT_NAME'=>'顧客企業名：',
'LBL_PHONE'=>'電話：',
'LBL_WEBSITE'=>'Web サイト：',
'LBL_FAX'=>'FAX：',
'LBL_TICKER_SYMBOL'=>'証券コード：',
'LBL_OTHER_PHONE'=>'その他電話：',
'LBL_ANY_PHONE'=>'電話：',
'LBL_MEMBER_OF'=>'親会社：',
'LBL_EMAIL'=>'電子メール：',
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
'LBL_ACCOUNT_INFORMATION'=>'企業情報',
'LBL_CUSTOM_INFORMATION'=>'カスタム情報',
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
'LBL_DUPLICATE'=>'顧客企業が重複している可能性があります',
'MSG_DUPLICATE' => 'この vtiger_account を作成すると、重複した vtiger_account が作られる可能性 (vtiger_potentialy) があります。 以下リストから vtiger_account を選択するか、[新規顧客企業] をクリックして既に入力したデータで新しい vtiger_account の作成を続行することができます。',

'LBL_INVITEE'=>'顧客担当者',
'ERR_DELETE_RECORD'=>"vtiger_account を削除するには、レコード番号を指定する必要があります。",

'LBL_SELECT_ACCOUNT'=>'顧客企業の選択',
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

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'すべて',
'LBL_PROSPECT'=>'潜在顧客',
'LBL_INVESTOR'=>'投資家',
'LBL_RESELLER'=>'代理店',
'LBL_PARTNER'=>'提携先',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'顧客企業ツール',
//Added for 4GA
'Account Name'=>'顧客企業名',
'Phone'=>'電話',
'Website'=>'Web サイト',
'Fax'=>'FAX',
'Ticker Symbol'=>'証券コード',
'Other Phone'=>'その他電話',
'Member Of'=>'親会社',
'Email'=>'電子メール',
'Employees'=>'従業員数',
'Other Email'=>'その他電子メール',
'Ownership'=>'企業形態',
'Rating'=>'格付け',
'industry'=>'業界',
'SIC Code'=>'業種識別 (SIC) コード',
'Type'=>'タイプ',
'Annual Revenue'=>'年間売上高',
'Assigned To'=>'担当',
'Billing Address'=>'番地 (請求先)',
'Shipping Address'=>'番地 (発送先)',
'Billing City'=>'市町村区 (請求先)',
'Shipping City'=>'市町村区 (発送先)',
'Billing State'=>'都道府県 (請求先)',
'Shipping State'=>'都道府県 (発送先)',
'Billing Code'=>'郵便番号 (請求先)',
'Shipping Code'=>'郵便番号 (発送先)',
'Billing Country'=>'国 (請求先)',
'Shipping Country'=>'国 (発送先)',
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',
'Description'=>'説明',
'Shipping Po Box'=>'私書箱 (発送先)',
'Billing Po Box'=>'私書箱 (請求先)',

//Added after 4.2 patch 2
'Email Opt Out'=>'電子メール送信から除外',
'LBL_EMAIL_OPT_OUT'=>'電子メール送信から除外：',

//Added after 5Alpha5
'Notify Owner'=>'担当に通知',

//Added for existing picklist entries

'--None--'=>'--なし--',

'Acquired'=>'獲得済み',
'Active'=>'有効',
'Market Failed'=>'市場失敗',
'Project Cancelled'=>'プロジェクト撤退',
'Shutdown'=>'操業停止',

'Apparel'=>'アパレル',
'Banking'=>'銀行',
'Biotechnology'=>'バイオ',
'Chemicals'=>'化学',
'Communications'=>'通信',
'Construction'=>'建設',
'Consulting'=>'コンサルティング',
'Education'=>'教育',
'Electronics'=>'電気',
'Energy'=>'エネルギー',
'Engineering'=>'エンジニアリング',
'Entertainment'=>'エンターテイメント',
'Environmental'=>'環境',
'Finance'=>'金融',
'Food & Beverage'=>'飲食',
'Government'=>'政府・自治体',
'Healthcare'=>'ヘルスケア',
'Hospitality'=>'宿泊',
'Insurance'=>'保険',
'Machinery'=>'機械',
'Manufacturing'=>'製造',
'Media'=>'メディア',
'Not For Profit'=>'NPO (非営利団体)',
'Recreation'=>'レクリエーション',
'Retail'=>'小売',
'Shipping'=>'出荷情報',
'Technology'=>'テクノロジー',
'Telecommunications'=>'電気通信',
'Transportation'=>'運輸',
'Utilities'=>'公共施設',
'Other'=>'その他',

'Analyst'=>'アナリスト',
'Competitor'=>'競合他社',
'Customer'=>'顧客',
'Integrator'=>'インテグレータ',
'Investor'=>'投資家',
'Partner'=>'提携先',
'Press'=>'出版社・報道機関',
'Prospect'=>'潜在顧客',
'Reseller'=>'代理店',
'LBL_START_DATE' => '開始日',
'LBL_END_DATE' => '終了日',

// Added/Updated for vtiger CRM 5.0.4

//added to fix the issue #4081
'LBL_ACCOUNT_EXIST' => '顧客企業名は既に存在します。',

// mailer export
'LBL_MAILER_EXPORT' => 'メーラー エクスポート',
'LBL_MAILER_EXPORT_CONTACTS_TYPE'=>'顧客担当者の選択：',
'LBL_MAILER_EXPORT_CONTACTS_DESCR'=>'顧客担当者は「カスタム フィールド」および一部の標準フィールドからも選択できます。',
'LBL_MAILER_EXPORT_RESULTS_TYPE'=>'エクスポート タイプの選択：',
'LBL_MAILER_EXPORT_RESULTS_DESCR'=>'データは、前の検索で返された顧客企業およびそれらの顧客担当者から収集されます。',
'LBL_EXPORT_RESULTS_EMAIL' => '電子メール データのエクスポート',
'LBL_EXPORT_RESULTS_EMAIL_CORP'=>'顧客担当者の「電子メール」が空の場合、顧客企業の「会社電子メール」を使用して、電子メール データをエクスポート',
'LBL_EXPORT_RESULTS_FULL'=>'顧客担当者、電子メール、顧客企業名、住所、電話等とともにデータをエクスポート',
'LBL_EXPORT_RESULTS_GO'=>'エクスポート',
'LBL_MAILER_EXPORT_IGNORE' => '--無視--',
'LBL_MAILER_EXPORT_CHECKED' =>'選択',
'LBL_MAILER_EXPORT_NOTCHECKED' => '未選択',

// Added after 5.0.4 GA

//Module Sequence Numbering
'Account No'=>'顧客企業 No',
// END

// Account Hierarchy
'LBL_SHOW_ACCOUNT_HIERARCHY' => '顧客企業系列の表示', 

);

?>
