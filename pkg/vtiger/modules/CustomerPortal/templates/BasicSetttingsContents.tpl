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
<script language="JavaScript" type="text/javascript" src="modules/{$MODULE}/{$MODULE}.js"></script>

<table border=0 cellspacing=0 cellpadding=5 width="350px" align="" class="dvtContentSpace">
<tr>
	<td class="colHeader small">{$MOD.Module}</td>
	<td class="colHeader small">{$MOD.Sequence}</td>
	<td class="colHeader small">{$MOD.Visible}</td>
</tr>					
{foreach item=module from=$PORTALMODULES name=pname}
<tr onmouseover="this.className='prvPrfHoverOn'" onmouseout="this.className='prvPrfHoverOff'">
	<td class="listTableRow small" width="50%">{$module.name|@getTranslatedString}</td>
	
	{if $smarty.foreach.pname.first neq true}
		<td  align="center" class="listTableRow"><a href="javascript:move_module('{$module.tabid}','Up');" ><img src="{'arrow_up.png'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" /></a>
	{/if}
	{if $smarty.foreach.pname.last eq true}
		<img src="{'blank.gif'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" />
	{/if}	
	{if $smarty.foreach.pname.first eq true}
		<td align="center" class="listTableRow"><img src="{'blank.gif'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" />
			<a href="javascript:move_module('{$module.tabid}','Down');" ><img src="{'arrow_down.png'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" /></a></td>
	{/if}
	
	{if $smarty.foreach.pname.last neq true && $smarty.foreach.pname.first neq true}
		<a href="javascript:move_module('{$module.tabid}','Down');" ><img src="{'arrow_down.png'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" /></a></td>
	{/if}
	
	<td class="listTableRow cellText small"  align="center">
		{if $module.visible eq 1}
			<a href="javascript:void(0);" onclick="toggleModule('{$module.tabid}', 'module_disable');"><img src="{'enabled.gif'|@vtiger_imageurl:$THEME}" border="0" align="absmiddle" alt="{$MOD.LBL_DISABLE} {$module.name}" title="{$MOD.LBL_DISABLE} {$module.name|@getTranslatedString}"></a>
		{else}
			<a href="javascript:void(0);" onclick="toggleModule('{$module.tabid}', 'module_enable');"><img src="{'disabled.gif'|@vtiger_imageurl:$THEME}" border="0" align="absmiddle" alt="{$MOD.LBL_ENABLE} {$module.name}" title="{$MOD.LBL_ENABLE} {$module.name|@getTranslatedString}"></a>
		{/if}
	</td>
</tr>								
{/foreach}
</table>	
