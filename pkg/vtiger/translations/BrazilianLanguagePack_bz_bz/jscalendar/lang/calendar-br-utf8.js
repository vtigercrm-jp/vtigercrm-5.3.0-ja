// ** I18N

// Calendar EN language
// Author: Mihai Bazon, <mihai_bazon@yahoo.com>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.
// Translator: Valmir Carlos Trindade, <valmir@ttcasolucoes.com.br> from previous English version - 04/08/2010
// full day names
Calendar._DN = new Array
("Domingo",
 "Segunda",
 "Terça",
 "Quarta",
 "Quinta",
 "Sexta",
 "Sábado",
 "Domingo");

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
("Dom",
 "Seg",
 "Ter",
 "Qua",
 "Qui",
 "Sex",
 "Sab",
 "Dom");

// full month names
Calendar._MN = new Array
("Janeiro",
 "Fevereiro",
 "Março",
 "Abril",
 "Maio",
 "Junho",
 "Julho",
 "Agosto",
 "Setembro",
 "Outubro",
 "Novembro",
 "Dezembro");

// short month names
Calendar._SMN = new Array
("Jan",
 "Fev",
 "Mar",
 "Abr",
 "Mai",
 "Jun",
 "Jul",
 "Ago",
 "Set",
 "Out",
 "Nov",
 "Dez");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Sobre o Calendário";

Calendar._TT["ABOUT"] =
"DHTML Seletor Data/Hora\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"Para a última versão visite : http://www.dynarch.com/projects/calendar/\n" +
"Distribuição através da GNU LGPL.  Visitar http://gnu.org/licenses/lgpl.html para detalhes." +
"\n\n" +
"Selecione a date :\n" +
"- Utilize os botões \xab, \xbb  para selecionar o ano\n" +
"- Utilize os botões " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " para selecionar os meses\n" +
"- Mantenha o mouse sobre qualquer botão para uma seleção mais rápida";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Seleção da hora :\n" +
"- Clique sobre as horas ou minutos para aumentar\n" +
"- ou clique para reduzir\n" +
"- ou clique e deslize para uma seleção mais rápida";

Calendar._TT["PREV_YEAR"] = "Ano Anterior (Pressine para Menu)";
Calendar._TT["PREV_MONTH"] = "Mês Anterior (Pressine para Menu)";
Calendar._TT["GO_TODAY"] = "Ir para hoje";
Calendar._TT["NEXT_MONTH"] = "Próximo Mês (Pressine para Menu)";
Calendar._TT["NEXT_YEAR"] = "Próximo Ano (Pressine para Menu)";
Calendar._TT["SEL_DATE"] = "Escolha Data";
Calendar._TT["DRAG_TO_MOVE"] = "Arraste para mover";
Calendar._TT["PART_TODAY"] = " (Hoje)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Mostrar %s primeiro";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Fechar";
Calendar._TT["TODAY"] = "Hoje";
Calendar._TT["TIME_PART"] = "Clique ou arraste para modificar o valor";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d/%m/%Y";
Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";

Calendar._TT["WK"] = "Sem.";
Calendar._TT["TIME"] = "Hora :";
