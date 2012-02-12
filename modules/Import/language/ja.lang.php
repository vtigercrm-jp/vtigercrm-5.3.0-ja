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
 * Description:  Defines the Japanese language pack for the Account module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>..
 ********************************************************************************/


$mod_strings = Array(
'LBL_IMPORT_MODULE_NO_DIRECTORY'=>'ディレクトリ (  ',
'LBL_IMPORT_MODULE_NO_DIRECTORY_END'=>'  ) は存在しないか書き込みができません',
'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD'=>'ファイルは正しくアップロードされませんでした。再度実行してください',
'LBL_IMPORT_MODULE_ERROR_LARGE_FILE'=>'ファイルが大きすぎます。 最大：',
'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END'=>'バイト。 config.php の $upload_maxsize を変更してください',
'LBL_MODULE_NAME'=>'( インポート )',
'LBL_TRY_AGAIN'=>'再試行',
'LBL_ERROR'=>'エラー：',
'ERR_MULTIPLE'=>'複数のカラムに同じフィールド名が定義されました。',
'ERR_MISSING_REQUIRED_FIELDS'=>'必須フィールドが見つかりません：',
'ERR_SELECT_FULL_NAME'=>'[姓] と [名] を選択すると、[姓名] を選択することはできません。',
'ERR_SELECT_FILE'=>'アップロードするファイルを選択します。',
'LBL_SELECT_FILE'=>'ファイルの選択：',
'LBL_CUSTOM'=>'カスタム',
'LBL_DONT_MAP'=>'-- このフィールドをマップしない --',
'LBL_STEP_1_TITLE'=>'ステップ 1 / 4 ： データ ソースの選択',
'LBL_WHAT_IS'=>'以下からデータ ソースを選択してください：',
'LBL_MICROSOFT_OUTLOOK'=>'Microsoft Outlook',
'LBL_ACT'=>'Act!',
'LBL_SALESFORCE'=>'Salesforce.com',
'LBL_MY_SAVED'=>'私の保存ソース：',
'LBL_PUBLISH'=>'公開',
'LBL_DELETE'=>'削除',
'LBL_PUBLISHED_SOURCES'=>'公開済みのソース：',
'LBL_UNPUBLISH'=>'非公開',
'LBL_NEXT'=>'次へ',
'LBL_BACK'=>'戻る',
'LBL_STEP_2_TITLE'=>'ステップ 2 / 4 ： エクスポート ファイルのアップロード',
'LBL_HAS_HEADER'=>'タイトル行あり',

'LBL_NUM_1'=>'1.',
'LBL_NUM_2'=>'2.',
'LBL_NUM_3'=>'3.',
'LBL_NUM_4'=>'4.',
'LBL_NUM_5'=>'5.',
'LBL_NUM_6'=>'6.',
'LBL_NUM_7'=>'7.',
'LBL_NUM_8'=>'8.',
'LBL_NUM_9'=>'9.',
'LBL_NUM_10'=>'10.',
'LBL_NUM_11'=>'11.',
'LBL_NUM_12'=>'12.',
'LBL_NOW_CHOOSE'=>'インポートするファイルを選択します：',
'LBL_IMPORT_OUTLOOK_TITLE'=>'Microsoft Outlook 98 および 2000 はデータのシステムへのインポートに使用できる <b>CSV (カンマ区切り)</b> フォーマットでデータをエクスポートできます。 Outlook からデータをエクスポートするには、次の手順に従ってください：',
'LBL_OUTLOOK_NUM_1'=>'<b>Outlook</b> を起動する',
'LBL_OUTLOOK_NUM_2'=>'[<b>ファイル</b>] メニューから、[<b>インポートとエクスポート ...</b>] を選択します',
'LBL_OUTLOOK_NUM_3'=>'[<b>ファイルへエクスポート</b>] を選択し、[次へ] をクリックします',
'LBL_OUTLOOK_NUM_4'=>'[<b>カンマ区切り (Windows)</b>] を選択し、[<b>次へ</b>] をクリックします。<br>  注： エクスポート コンポーネントのインストールについての提示が表示されることがあります。',
'LBL_OUTLOOK_NUM_5'=>'<b>連絡先 (Contacts)</b> フォルダを選択し、[<b>次へ</b>] をクリックします。 連絡先が複数のフォルダに保存されている場合、異なる連絡先フォルダを選択することができます',
'LBL_OUTLOOK_NUM_6'=>'ファイル名を選択し、[<b>次へ</b>] をクリックします',
'LBL_OUTLOOK_NUM_7'=>'[<b>完了</b>] をクリックします',
'LBL_IMPORT_ACT_TITLE'=>'Act! はデータのシステムへのインポートに使用できる <b>CSV (カンマ区切り)</b> フォーマットでデータをエクスポートできます。 Act! からデータをエクスポートするには、次の手順に従ってください：',
'LBL_ACT_NUM_1'=>'<b>ACT!</b> を起動します',
'LBL_ACT_NUM_2'=>'[<b>File</b>] メニューから、[<b>Data Exchange</b>] > [<b>Export...</b>] を選択します',
'LBL_ACT_NUM_3'=>'<b>Text-Delimited</b> のファイル タイプを選択します',
'LBL_ACT_NUM_4'=>'データをエクスポートするファイル名と場所を選び、[<b>Next</b>] をクリックします',
'LBL_ACT_NUM_5'=>'[<b>Contacts records only</b>] を選択します',
'LBL_ACT_NUM_6'=>'[<b>Options...</b>] ボタンをクリックします',
'LBL_ACT_NUM_7'=>'フィールド区切り文字として <b>Comma</b> を選択します',
'LBL_ACT_NUM_8'=>'[<b>Yes, export field names</b>] チェックボックスをチェックし、[<b>OK</b>] をクリックします',
'LBL_ACT_NUM_9'=>'[<b>Next</b>] をクリックします',
'LBL_ACT_NUM_10'=>'[<b>All Records</b>] を選択し、<b>Finish</b> をクリックします',

'LBL_IMPORT_SF_TITLE'=>'Salesforce.com はデータのシステムへのインポートに使用できる <b>CSV (カンマ区切り)</b> フォーマットでデータをエクスポートできます。 Salesforce.com からデータをエクスポートするには、次の手順に従ってください：',
'LBL_SF_NUM_1'=>'ブラウザを開き、http://www.salesforce.com にアクセスし、電子メール アドレスとパスワードでログインします。',
'LBL_SF_NUM_2'=>'トップ メニューから [<b>レポート (Reports)</b>] タブをクリックします。',
'LBL_SF_NUM_3'=>'取引先のエクスポート：</b>[<b>有効 取引先 (Active Accounts)</b>] リンクをクリックします。<br><b>取引先責任者のエクスポート：</b>[<b>取引先名簿 (Mailing List)</b>] リンクをクリックします',
'LBL_SF_NUM_4'=>'<b>ステップ1： レポート タイプの選択 ( Select you report type)</b> にて、<b>表形式レポート (Tabular Report)</b> を選択して、[<b>次へ (Next)</b>] をクリックします',
'LBL_SF_NUM_5'=>'<b>ステップ2： 項目の設定 (Select the report columns)</b> にて、エクスポートしたいカラムを選び、[<b>次へ (Next)</b>] をクリックします',
'LBL_SF_NUM_6'=>'<b>ステップ3： 統計項目の選択 (Select the information to summarize)</b> では、そのまま [<b>次へ (Next)</b>] をクリックします',
'LBL_SF_NUM_7'=>'<b>ステップ4： 項目の並び替え (Order the report columns)</b> では、そのまま [<b>次へ (Next)</b>] をクリックします',
'LBL_SF_NUM_8'=>'<b>ステップ5： 条件の選択 (Select your report criteria)</b> では、[<b>作成日 (Start Date)</b>] の下で、あなたの全ての取引先を含む十分な期間を選びます。 詳細な条件を要して、エクスポートする取引先を更に絞り込むことができます。 完了したら、[<b>レポート実行 (Run Report)</b>] をクリックします',
'LBL_SF_NUM_9'=>'レポートが生成され、ページには <b>レポート生成状況 (Report Generation Status)： 完了 (Complete)</b> が表示されます。<b>Export to Excel</b> をクリックします',
'LBL_SF_NUM_10'=>'<b>レポートのエクスポート (Export Report)：</b> にて、<b>エクスポート ファイルの形式 (Export File Format)：</b> で <b>カンマ区切り形式 (Comma Delimited .csv)</b> を選びます。 [<b>エクスポート (Export)</b>] をクリックします。',
'LBL_SF_NUM_11'=>'エクスポート ファイルのコンピュータへの保存を促すダイアログが表示されます。',
'LBL_IMPORT_CUSTOM_TITLE'=>'多くのアプリケーションがデータを <b>カンマ区切り形式のテキスト ファイル (.csv)</b> にエクスポートすることができます。 通常は多くのアプリケーションが次の手順に従います：',
'LBL_CUSTOM_NUM_1'=>'アプリケーションを起動して、データ ファイルを開きます',
'LBL_CUSTOM_NUM_2'=>'[<b>名前をつけて保存 (Save As)...</b>] または [<b>エクスポート (Export)...</b>] メニューを選択します',
'LBL_CUSTOM_NUM_3'=>'ファイルを <b>CSV</b> または <b>カンマ区切り (Comma Separated Values)</b> 形式で保存します',

'LBL_STEP_3_TITLE'=>'ステップ 3 / 4 ： フィールドの確認とインポート',
'LBL_STEP_1'=>'ステップ 1 / 3 ： ',
'LBL_STEP_1_TITLE'=>'.CSV ファイルの選択',
'LBL_STEP_1_TEXT'=> ' vtiger CRM は <b>.csv (カンマ区切り</b>) ファイルからのインポートをサポートします。  インポートを開始するには、.CSV ファイルの場所を参照し、[次へ] ボタンをクリックします。',

'LBL_SELECT_FIELDS_TO_MAP'=>'以下の一覧にて、システムの各フィールドにインポートするインポート ファイルのフィールドを選択します。 完了したら、[<b>インポートの実行)</b>] をクリックします',

'LBL_DATABASE_FIELD'=>'データベース フィールド',
'LBL_HEADER_ROW'=>'タイトル行',
'LBL_ROW'=>'行',
'LBL_SAVE_AS_CUSTOM'=>'マッピングを保存 →',
'LBL_CONTACTS_NOTE_1'=>'[姓] または [姓名] をマップする必要があります。',
'LBL_CONTACTS_NOTE_2'=>'[姓名] をマップすると、[姓] と [名] は無視されます。',
'LBL_CONTACTS_NOTE_3'=>'[名] をマップすると、[姓名] のデータはデータベースへの挿入時に [姓] と [名] に分割されます。',
'LBL_CONTACTS_NOTE_4'=>'[番地 2] と [番地 3] はデータベース挿入時に [番地 (主要)] フィールドに結合されます。',
'LBL_ACCOUNTS_NOTE_1'=>'顧客企業名をマップする必要があります。',
'LBL_ACCOUNTS_NOTE_2'=>'[番地 2] と [番地 3] はデータベース挿入時に [番地 (主要)] フィールドに結合されます。',
'LBL_POTENTIALS_NOTE_1'=>'案件名、顧客企業名、完了日および営業ステージは必須フィールドです。',
'LBL_OPPORTUNITIES_NOTE_1'=>'商談名、顧客企業名、完了日および営業ステージは必須フィールドです。',
'LBL_LEADS_NOTE_1'=>'姓をマップする必要があります。',
'LBL_LEADS_NOTE_2'=>'会社名をマップする必要があります。',
'LBL_IMPORT_NOW'=>'インポートの実行',
'LBL_'=>'',
'LBL_CANNOT_OPEN'=>'インポート ファイルを読み込みように開くことができません',
'LBL_NOT_SAME_NUMBER'=>'指定ファイルには行ごとに異なる数のフィールドがあります',
'LBL_NO_LINES'=>'指定インポート ファイルには行がありません',
'LBL_FILE_ALREADY_BEEN_OR'=>'インポート ファイルは既に処理されたか、存在しません。',
'LBL_SUCCESS'=>'成功しました ',
'LBL_SUCCESSFULLY'=>'インポートが成功しました',
'LBL_LAST_IMPORT_UNDONE'=>'最新のインポートは取り消されました',
'LBL_NO_IMPORT_TO_UNDO'=>'取り消すインポートがありません。',
'LBL_FAIL'=>'失敗：',
'LBL_RECORDS_SKIPPED'=>'件のレコードがスキップされました。一つ以上の必須フィールドがありません',
'LBL_IDS_EXISTED_OR_LONGER'=>'件のレコードがスキップされました。ID が存在するか、36 文字を超えています。',
'LBL_RESULTS'=>'結果',
'LBL_IMPORT_MORE'=>'更にインポートする',
'LBL_FINISHED'=>'完了',
'LBL_UNDO_LAST_IMPORT'=>'最新のインポートを取り消す',

'LBL_SUCCESS_1' => 'インポート/更新されたレコード数： ',
'LBL_SKIPPED_1' => '必須フィールドがないためスキップされたレコード数： ',

//Added for patch2 - Products Import Notes
'LBL_PRODUCTS_NOTE_1'=>'製品名をマップする必要があります',
'LBL_PRODUCTS_NOTE_2'=>'インポート前に、一つのカラムが 2 回マップされてないか確かめてください',

//Added for version 5
'LBL_FILE_LOCATION'=>'ファイルの位置：',
'LBL_STEP_2_3'=>'ステップ 2 / 3 ：',
'LBL_LIST_MAPPING'=>'の一覧 & マッピング',
'LBL_STEP_2_MSG'=>'以下の一覧にはインポートする',
'LBL_STEP_2_MSG1'=>'と他の詳細が表示されています。',
'LBL_STEP_2_TXT'=>'フィールドをマップするには、ドロップダウン ボックスから対応する項目を選んでください。対象：',
'LBL_USE_SAVED_MAPPING'=>'保存マッピングを使用 ←',
'LBL_MAPPING'=>'マッピング',
'LBL_HEADERS'=>'タイトル行',
'LBL_ERROR_MULTIPLE'=>'同一フィールドが 2 回マップされた可能性があります。 マップ フィールドを確認してください。',
'LBL_STEP_3_3'=>'ステップ 3 / 3 ： ',
'LBL_MAPPING_RESULTS'=>'マッピング処理の結果 ',
'LBL_LAST_IMPORTED'=>'最新のインポート：',
//Added for sript alerts
'PLEASE_CHECK_MAPPING' => "' は複数回マップされています。 マッピングを確認してください。",
'MAP_MANDATORY_FIELD' => '次の必須フィールドをマップしてください："',
'ENTER_SAVEMAP_NAME' => '保存マップ名を入力してください',

//Added for 5.0.3
'to'=>' ～ ',
'of'=>'件  (総数：',
'are_imported_succesfully'=>'件) がインポートされました',

// Added after 5.0.4 GA

//added for duplicate handling 
'LBL_LAST_IMPORT'=>'最新のインポート：',
'Select_Criteria_For_Duplicate' => '重複レコードの処理条件を選択します',
'Manual_Merging' => '手動マージ',
'Auto_Merging' => '自動マージ',
'Ignore_Duplicate' => '重複したインポート レコードを無視する',
'Overwrite_Duplicate' => '重複したレコードを上書きする',
'Duplicate_Records_Skipped_Info' => '重複によりスキップされたレコード数 ： ',
'Duplicate_Records_Overwrite_Info' => '重複により上書きされたレコード数 ： ',
'LBL_STEP_4_4' => 'ステップ 4 / 4 ： ',
'LBL_STEP_3_4'=>'ステップ 3 / 4 ：',
'LBL_STEP_2_4'=>'ステップ 2 / 4 ：',
'LBL_STEP_1_4'=>'ステップ 1 / 4 ： ',

'LBL_DELIMITER' => '区切り文字：',
'LBL_FORMAT' => 'フォーマット：',
'LBL_MAX_FILE_SIZE' => ' が最大のファイル サイズです',

'LBL_MERGE_FIELDS_DUPLICATE' => '重複インポート レコードのためのマージ フィールド',
'Customer Portal Login Details' => '顧客ポータルのログイン詳細',
);

$mod_list_strings = Array(
'contacts_import_fields' => Array(
	"firstname"=>"名"
	,"lastname"=>"姓"
	,"salutationtype"=>"敬称"
	,"leadsource"=>"紹介元"
	,"birthday"=>"生年月日"
	,"donotcall"=>"連絡除外"
	,"emailoptout"=>"電子メール送信から除外"
	,"account_id"=>"顧客企業名"
	,"title"=>"タイトル"
	,"department"=>"部門"
	,"homephone"=>"電話 (自宅)"
	,"mobile"=>"電話 (携帯)"
	,"phone"=>"電話 (勤務先)"
	,"otherphone"=>"電話 (その他)"
	,"fax"=>"FAX"
	,"email"=>"電子メール"
	,"otheremail"=>"電子メール (その他)"
	,"secondaryemail"=>"予備電子メール"
	,"assistant"=>"アシスタント"
	,"assistantphone"=>"アシスタント電話"
	,"mailingstreet"=>"番地 (郵送先)"
	,"mailingpobox"=>"私書箱 (郵送先)"
	,"mailingcity"=>"市町村区 (郵送先)"
	,"mailingstate"=>"都道府県 (郵送先)"
	,"mailingzip"=>"郵便番号 (郵送先)"
	,"mailingcountry"=>"国 (郵送先)"
	,"otherstreet"=>"番地 (その他)"
	,"otherpobox"=>"私書箱 (その他)"
	,"othercity"=>"市町村区 (その他)"
	,"otherstate"=>"都道府県 (その他)"
	,"otherzip"=>"郵便番号 (その他)"
	,"othercountry"=>"国 (その他)"
	,"description"=>"説明"
	,"assigned_user_id"=>"担当"
 ),

'accounts_import_fields' => Array(
 //"id"=>"Account ID",
	"accountname"=>"顧客企業名",
	"website"=>"Web サイト",
	"industry"=>"業界",
	"accounttype"=>"タイプ",
	"tickersymbol"=>"証券コード",
	"parent_name"=>"親会社",
	"employees"=>"従業員数",
	"ownership"=>"企業形態",
	"phone"=>"電話",
	"fax"=>"FAX",
	"otherphone"=>"その他電話",
	"email1"=>"電子メール",
	"email2"=>"その他電子メール",
	"rating"=>"格付け",
	"siccode"=>"業種識別 (SIC) コード",
	"annual_revenue"=>"年間売上高",
	"bill_street"=>"番地 (請求先)",
	"bill_pobox"=>"私書箱 (請求先)",
	"bill_city"=>"市町村区 (請求先)",
	"bill_state"=>"都道府県 (請求先)",
	"bill_code"=>"郵便番号 (請求先)",
	"bill_country"=>"国 (請求先)",
	"ship_street"=>"番地 (発送先)",
	"ship_pobox"=>"私書箱 (発送先)",
	"ship_city"=>"市町村区 (発送先)",
	"ship_state"=>"都道府県 (発送先)",
	"ship_code"=>"郵便番号 (発送先)",
	"ship_country"=>"国 (発送先)",
	"description"=>"説明",
	"assigned_user_id"=>"担当"
 ),

'potentials_import_fields' => Array(
  //"id"=>"Account ID"
                 "potentialname"=>"案件名"
                , "account_id"=>"顧客企業名"
                , "opportunity_type"=>"案件タイプ"
                , "leadsource"=>"紹介元"
                , "amount"=>"金額"
                , "closingdate"=>"完了日"
                , "nextstep"=>"次の段取り"
                , "sales_stage"=>"営業ステージ"
                , "probability"=>"可能性"
                , "description"=>"説明"
		,"assigned_user_id"=>"担当"
 ),


'leads_import_fields' => Array(
		"salutationtype"=>"敬称",
		"firstname"=>"名",
		"phone"=>"電話",
		"lastname"=>"姓",
		"mobile"=>"携帯電話",
		"company"=>"会社名",
		"fax"=>"FAX",
		"designation"=>"肩書",
		"email"=>"電子メール",
		"leadsource"=>"紹介元",
		"website"=>"Web サイト",
		"industry"=>"業界",
		"leadstatus"=>"見込み客ステータス",
		"annualrevenue"=>"年間売上高",
		"rating"=>"格付け",
		"noofemployees"=>"従業員数",
		"assigned_user_id"=>"担当",
		"secondaryemail"=>"予備電子メール",
		"lane"=>"番地",
		"pobox"=>"私書箱",
		"code"=>"郵便番号",
		"city"=>"市町村区",
		"country"=>"国",
		"state"=>"都道府県",
		"description"=>"説明"
		,"assigned_user_id"=>"担当"
    ),
 
 'products_import_fields' => Array(
 	'productname'=>'製品名',
 	'productcode'=>'製品コード',
 	'productcategory'=>'製品分類',
 	'manufacturer'=>'製造業者',
 	'product_description'=>'製品説明',
 	'qty_per_unit'=>'数量/ユニット',
 	'unit_price'=>'単価',
 	'weight'=>'重量',
 	'pack_size'=>'パック サイズ',
 	'start_date'=>'開始日',
 	'expiry_date'=>'期限日',
 	'cost_factor'=>'コスト要因',
 	'commissionmethod'=>'手数料方式',
 	'discontinued'=>'Discontinued',
 	'commissionrate'=>'Commission Rate',
	'sales_start_date'=>'Sales Start Date',
	'sales_end_date'=>'Sales End Date',
	'usageunit'=>'Usage Unit',
	'serialno'=>'Serial No',
	'currency'=>'currency',
	'reorderlevel'=>'Reorder Level',
	'website'=>'Web Site',
	'taxclass'=>'Tax Class',
	'mfr_part_no'=>'Manufacture Part No',
	'vendor_part_no'=>'Vendor Part No',
	'qtyinstock'=>'Quantity in Stock',
	'productsheet'=>'Product Sheet',
	'qtyindemand'=>'Quantity in Demand',
	'glacct'=>'GL Account',
	'assigned_user_id'=>'Assigned To'
  ),
//Pavani...adding list of import fields for helpdesk and vendors
'helpdesk_import_fields' => Array(
        "ticketid"=>"サポート依頼 ID",
        "priority"=>"優先度",
        "severity"=>"重要度",
        "status"=>"ステータス",
        "category"=>"分類",
        "title"=>"タイトル",
        "description"=>"説明",
        "solution"=>"解決方法"
        ),

'vendors_import_fields' => Array(
        "vendorid"=>"納入業者 ID",
        "vendorname"=>"納入業者名",
        "phone"=>"電話",
        "email"=>"電子メール",
        "website"=>"Web サイト",
        "category"=>"分類",
        "street"=>"番地",
        "city"=>"市町村区",
        "state"=>"都道府県",
        "pobox"=>"私書箱",
        "postalcode"=>"郵便番号",
        "country"=>"国",
        "description"=>"説明"
        )
//Pavani...end list
);

?>
