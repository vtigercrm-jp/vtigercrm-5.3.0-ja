{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}


<br>
<table style="border: 1px solid rgb(0, 0, 0);" align="center" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
	<td style="background-repeat: repeat-y;" background="{'report_btn.gif'|@vtiger_imageurl:$THEME}" width="16"></td>

	<td style="padding: 5px;" valign="top">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr>
		<td align="left" width="75%">
		<span class="genHeaderGray">
		{if $MOD.$REPORTNAME neq ''}
			{$MOD.$REPORTNAME}
		{else}
			{$REPORTNAME}
		{/if}
		</span><br>
		</td>
		<td align="right" width="25%">
		<span class="genHeaderGray">{$APP.LBL_TOTAL} : <span id='_reportrun_total'>{$REPORTHTML.1}</span>  {$APP.LBL_RECORDS}</span>
		</td>
		</tr>
		<tr><td id="report_info" align="left" colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr>
		<td colspan="2">
		{* Performance Optimization: Direct result output *}
		{if $DIRECT_OUTPUT eq true}		
			{if isset($__REPORT_RUN_INSTANCE)}
				{php}
					$__oReportRun = $this->_tpl_vars['__REPORT_RUN_INSTANCE'];
					$__filterSql = $this->_tpl_vars['__REPORT_RUN_FILTER_SQL'];
					$__oReportRunReturnValue = $__oReportRun->GenerateReport("HTML", $__filterSql, true);
				{/php}
			{/if}		
		{elseif $ERROR_MSG eq ''}
			{$REPORTHTML.0}
		{else}
			{$ERROR_MSG}
		{/if}
		{* END *}
		</td>
		</tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2">
		{* Performance Optimization: Direct result output *}
		{if $DIRECT_OUTPUT eq true}
			{php}
				if(is_array($__oReportRunReturnValue)) { $__oReportRun->GenerateReport("TOTALHTML", $__filterSql, true); }
			{/php}
		{else}			
			{$REPORTTOTHTML}
		{/if}
		{* END *}
		</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		</tbody>
	</table>
	</td>
	<td style="background-repeat: repeat-y;" background="{'report_btn.gif'|@vtiger_imageurl:$THEME}" width="16"></td>
	</tr>

	</tbody>
</table>

