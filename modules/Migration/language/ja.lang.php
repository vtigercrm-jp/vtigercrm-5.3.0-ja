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


$mod_strings = Array(
'LBL_MIGRATE_INFO'=>'<b><i> ソース </i></b> から b><i> 現行 (最新) vtigerCRM </i></b>へデータを毎グレートするための値を入力します',
'LBL_CURRENT_VT_MYSQL_EXIST'=>'現行のvtigerの MySQL の場所：',
'LBL_THIS_MACHINE'=>'このコンピュータ',
'LBL_DIFFERENT_MACHINE'=>'異なるコンピュータ',
'LBL_CURRENT_VT_MYSQL_PATH'=>'現行のvtigerの MySQL のパス：',
'LBL_SOURCE_VT_MYSQL_DUMPFILE'=>'tiger <b>ソース</b> ダンプ ファイル名',
'LBL_NOTE_TITLE'=>'メモ：',
'LBL_NOTES_LIST1'=>'現行の MySQL が同じコンピュータに存在する場合、MySQL パスを入力するか、手持ちのダンプ ファイルを入力できます。',
'LBL_NOTES_LIST2'=>'現行の MySQL が異なるコンピュータに存在する場合、完全なパス付きで (ソース) ダンプ ファイル名を入力します。',
'LBL_NOTES_DUMP_PROCESS'=>'データベース ダンプを取得するには、<b>mysql/bin</b> ディレクトリから次のコマンドを実行してください			   <br><b>mysqldump --user="mysql_username"  --password="mysql-password" -h "hostname"  --port="mysql_port" "database_name" > dump_filename</b>			   <br><b>SET FOREIGN_KEY_CHECKS = 0;</b> -- ダンプ ファイルの開始部分に追加します			   <br><b>SET FOREIGN_KEY_CHECKS = 1;</b> -- ダンプファイルの末尾部分に追加します',
'LBL_NOTES_LIST3'=>'MySQL パスを <b>/home/crm/vtigerCRM4_5/mysql</b> のように指定します',
'LBL_NOTES_LIST4'=>'ダンプ ファイル名を <b>/home/fullpath/4_2_dump.txt</b> のように完全なパスで指定します',

'LBL_CURRENT_MYSQL_PATH_FOUND'=>'現行インストールの MySQL パスが見つかりました。',
'LBL_SOURCE_HOST_NAME'=>'ソース ホスト名：',
'LBL_SOURCE_MYSQL_PORT_NO'=>'ソース MySQL ポート番号：',
'LBL_SOURCE_MYSQL_USER_NAME'=>'ソース MySQL ユーザー名：',
'LBL_SOURCE_MYSQL_PASSWORD'=>'ソース MySQL パスワード：',
'LBL_SOURCE_DB_NAME'=>'ソース データベース名：',
'LBL_MIGRATE'=>'現行バージョンにマイグレート',
//Added after 5 Beta 
'LBL_UPGRADE_VTIGER'=>'vtiger CRM データベースのアップグレード',
'LBL_UPGRADE_FROM_VTIGER_423'=>'データベースを vtiger CRM 4.2.3 から 5.0.0 へアップグレード',
'LBL_SETTINGS'=>'システム設定',
'LBL_STEP'=>'ステップ',
'LBL_SELECT_SOURCE'=>'ソースの選択',
'LBL_STEP1_DESC'=>'データベースのマイグレーションを開始するには、旧データが利用可能なフォーマットを指定する必要があります',
'LBL_RADIO_BUTTON1_TEXT'=>'vtiger CRM ライブ データベース システムへのアクセス権があります',
'LBL_RADIO_BUTTON1_DESC'=>'このオプションでは、ホスト機器 (DB 格納場所) と DB アクセスの詳細が必要です。 この方法ではローカルおよびリモート システムの双方がサポートされます。 詳細はドキュメントを参照してください。',
'LBL_RADIO_BUTTON2_TEXT'=>'vtiger CRM 保存データベース ダンプへのアクセス権があります',
'LBL_RADIO_BUTTON2_DESC'=>'このオプションでは、アップグレードするのと同一の機器にデータベース ダンプがローカルに利用できる必要があります。 異なる機器 (リモート データベース サーバー) からデータ ダンプにアクセスすることはできません。 詳細はドキュメントを参照してください。',
'LBL_RADIO_BUTTON3_TEXT'=>'4.2.3 データを持つ新しいデータベースがあります',
'LBL_RADIO_BUTTON3_DESC'=>'このオプションではデータベース サーバー ID、ユーザー名およびパスワードを含む vtiger CRM 4.2.3 データベース システムの詳細が必要です。 異なる機器 (リモート データベース サーバー) からデータ ダンプにアクセスすることはできません。',

'LBL_HOST_DB_ACCESS_DETAILS'=>'ホスト データベース アクセスの詳細',
'LBL_MYSQL_HOST_NAME_IP'=>'MySQL ホスト名または IP アドレス： ',
'LBL_MYSQL_PORT'=>'MySQL ポート番号： ',
'LBL_MYSQL_USER_NAME'=>'MySQL ユーザー名： ',
'LBL_MYSQL_PASSWORD'=>'MySQL パスワード： ',
'LBL_DB_NAME'=>'データベース名： ',

'LBL_LOCATE_DB_DUMP_FILE'=>'データベース ダンプ ファイルの位置',
'LBL_DUMP_FILE_LOCATION'=>'ダンプ ファイルの位置： ',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">4.2.3 データベースの詳細を指定しないでください。 このオプションではデータベースを直接変更します。</font><br>次の手順を実行することを強くお勧めします。<br>1. 4.2.3 データベースのダンプを取得する<br>2. 新規データベースを作成する (vtiger 5.0 データベースが稼働中のサーバーで作成することが望ましい。)<br>3. この 4.2.3 ダンプをこの新規データベースに適用する。<br>この時点で新規データベースへのアクセス詳細を指定する。 このマイグレーションでは、データベースを 5.0 スキーマに適合するように変更します。次にこのデータベースを使用するように、このデータベース名を config.inc.php ファイルに指定します。例、$dbconfig[\'db_name\'] = \'new db name\';',

'LBL_ENTER_MYSQL_SERVER_PATH'=>'MySQL サーバーのパスを入力',
'LBL_SERVER_PATH_DESC'=>'サーバーのMySQLパスは <b>/home/5beta/vtigerCRM5_beta/mysql/bin</b> または <b>c:\Program Files\mysql\bin</b> のように指定します',
'LBL_MYSQL_SERVER_PATH'=>'MySQL サーバー パス： ',
'LBL_MIGRATE_BUTTON'=>'マイグレート',
'LBL_CANCEL_BUTTON'=>'取消',
'LBL_UPGRADE_FROM_VTIGER_5X'=>'データベースを vtiger CRM 5.x から次期バージョンにアップグレード',
'LBL_PATCH_OR_MIGRATION'=>'ソース データベースのバージョン (パッチ アップデート または マイグレーション) を指定する必要があります',
//Added for java script alerts
'ENTER_SOURCE_HOST' => 'ソース ホスト名を入力してください',
'ENTER_SOURCE_MYSQL_PORT' => 'ソース MySQL ポート番号を入力してください',
'ENTER_SOURCE_MYSQL_USER' => 'ソース MySQL ユーザー名を入力してください',
'ENTER_SOURCE_DATABASE' => 'ソース データベース名を入力してください',
'ENTER_SOURCE_MYSQL_DUMP' => '正しい MySQL ダンプ ファイルを入力してください',
'ENTER_HOST' => 'ホスト名を入力してください',
'ENTER_MYSQL_PORT' => 'MySQL ポート番号を入力してください',
'ENTER_MYSQL_USER' => 'MySQL ユーザー名を入力してください',
'ENTER_DATABASE' => 'データベース名を入力してください',
'SELECT_ANYONE_OPTION' => 'オプションを一つ選択してください',
'ENTER_CORRECT_MYSQL_PATH' => '正しい MySQL パスを入力してください',

);






?>
