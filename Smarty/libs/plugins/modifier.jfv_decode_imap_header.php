<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * decode imap header plugin
 *
 * Type:     modifier<br>
 * Name:     jfv_decode_imap_header<br>
 * Purpose:  decode imap header and extract array
 * @link http://www.vtigercrm.jp
 * @author   vtigercrm.jp
 * @param string
 * @param 
 * @return string
 */
function smarty_modifier_jfv_decode_imap_header($string)
{
        $elements = mime_header_decode($string);
        for ($i=0; $i<count($elements); $i++) {
                $result .= $elements[$i]->text;
        }
        return $result;
}

class result
{
	var $text = "";
	var $charset = "";
}
function detect_charset($Data,$dbg_fl = 0) {
	/* for many small pices of text -  list of sender/subject*/
	$rc=preg_match("/(.*)([\x7F-\xFF]+)/xU",$Data,$tst_ar);
	if($rc == 0) {
		return 'US-ASCII';
	} else {
		$beg_charset=strpos($Data,$tst_ar[2]);
	}
	list($KoiMark,$WinMark) = GetCodeScoreAll($Data,$beg_charset);
	$Ratio['koi8-r'] =  $KoiMark/($WinMark + 1);
	$Ratio['windows-1251'] =  $WinMark/($KoiMark + 1);

	list($MaxRation,$MaxRatioKey)=max_from_ratio($Ratio);
	return $MaxRatioKey;
}
function mime_header_decode(&$header)
{
	$output_charset = "UTF-8";
	$source = imap_mime_header_decode($header);
	$result[] = new result;
	$result[0]->text='';
	$result[0]->charset='UTF-8';
	for ($j = 0; $j < count($source); $j++ )
	{
		$element_charset =  ($source[$j]->charset == "default") ? detect_charset($source[$j]->text) : $source[$j]->charset;
		if ($element_charset == 'x-unknown')
			$element_charset = 'UTF-8';

		if(empty($output_charset)) $output_charset = $default_charset;
		// JFV - fix mail body garbled for special jis char
		if (function_exists("mb_convert_encoding")) {
			if(strtolower($element_charset) == 'iso-2022-jp' && @mb_convert_encoding(1, 'iso-2022-jp-ms')){
				$element_converted = mb_convert_encoding( $source[$j]->text, $output_charset, 'iso-2022-jp-ms' );
			}elseif(strtolower($element_charset) == 'shift_jis' && @mb_convert_encoding(1, 'SJIS-win')){
				$element_converted = mb_convert_encoding( $source[$j]->text, $output_charset, 'SJIS-win' );
			}elseif(strtolower($element_charset) == 'euc-jp' && @mb_convert_encoding(1, 'eucJP-win')){
				$element_converted = mb_convert_encoding( $source[$j]->text, $output_charset, 'eucJP-win' );
			}elseif(@mb_convert_encoding(1, $element_charset)){
				$element_converted = mb_convert_encoding( $source[$j]->text, $output_charset, $element_charset);
			}else{
				$element_converted = function_exists(iconv) ? @iconv( $element_charset, $output_charset, $source[$j]->text): $source[$j]->text ;
			}
		}else{
			// JEV END
			$element_converted = function_exists(iconv) ? @iconv( $element_charset, $output_charset, $source[$j]->text): $source[$j]->text ;
			// JFV
		}
		// JFV END
		$result[$j]->text = $element_converted;
		$result[$j]->charset = $output_charset;
	}
	return $result;
}

/* vim: set expandtab: */

?>
