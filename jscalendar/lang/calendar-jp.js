// ** I18N

// Calendar JP language
// Author: Hideyuki Hokawa <hhokawa@gmail.com>
// Encoding: utf-8
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("日曜日",
 "月曜日",
 "火曜日",
 "水曜日",
 "木曜日",
 "金曜日",
 "土曜日",
 "日曜日");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("日",
 "月",
 "火",
 "水",
 "木",
 "金",
 "土",
 "日");

// full month names
Calendar._MN = new Array
("1月",
 "2月",
 "3月",
 "4月",
 "5月",
 "6月",
 "7月",
 "8月",
 "9月",
 "10月",
 "11月",
 "12月");

// short month names
Calendar._SMN = new Array
("1 月",
 "2 月",
 "3 月",
 "4 月",
 "5 月",
 "6 月",
 "7 月",
 "8 月",
 "9 月",
 "10 月",
 "11 月",
 "12 月");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "ヘルプ";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2003\n" + // don't translate this this ;-)
"For latest version visit: http://dynarch.com/mishoo/calendar.epl\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"日付の選択方法：\n" +
"- 年を選択するには \xab または \xbb ボタンを使用します\n" +
"- 月を選択するには " + String.fromCharCode(0x2039) + " または " + String.fromCharCode(0x203a) + " ボタンを使用します\n" +
"- 上記ボタン上でマウス ボタンを長押しすると選択メニューが表示されます";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"時刻の選択方法：\n" +
"- 進めるには時刻部分をクリックします\n" +
"- 戻すにはシフト キーを押しながらクリックします\n" +
"- 早く選択するにはクリックしてドラッグします";

Calendar._TT["PREV_YEAR"] = "前の年に移動します (メニュー)";
Calendar._TT["PREV_MONTH"] = "前の月に移動します (メニュー)";
Calendar._TT["GO_TODAY"] = "今日に移動します";
Calendar._TT["NEXT_MONTH"] = "次の月に移動します (メニュー)";
Calendar._TT["NEXT_YEAR"] = "次の年に移動します (メニュー)";
Calendar._TT["SEL_DATE"] = "日付を選択してください";
Calendar._TT["DRAG_TO_MOVE"] = "ここをドラッグして移動します";
Calendar._TT["PART_TODAY"] = "  - 今日";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "%s を週の初めに設定します";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "閉じる";
Calendar._TT["TODAY"] = "今日";
Calendar._TT["TIME_PART"] = "(Shift+) クリックまたはドラッグして値を変更します";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%b %e 日 (%a)";

Calendar._TT["WK"] = "週";
Calendar._TT["TIME"] = "時刻:";
