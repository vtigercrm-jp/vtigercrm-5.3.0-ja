/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *********************************************************************************/

document.write("<script type='text/javascript' src='include/js/Merge.js'></"+"script>");
document.write("<script type='text/javascript' src='modules/RecycleBin/language/en_us.lang.js'></"+"script>");

function callRBSearch(searchtype)
{
	for(i=1;i<=26;i++)
    {
		var data_td_id = 'alpha_'+ eval(i);
        getObj(data_td_id).className = 'searchAlph';
    }
    gPopupAlphaSearchUrl = '';
	search_fld_val= $('bas_searchfield').options[$('bas_searchfield').selectedIndex].value;
	search_txt_val=document.basicSearch.search_text.value;
	var urlstring = '';
	if(searchtype == 'Basic')
	{
		urlstring = 'search_field='+search_fld_val+'&searchtype=BasicSearch&search_text='+search_txt_val+'&';
	}
	var selectedmodule = $('select_module').options[$('select_module').selectedIndex].value 
	urlstring += 'selected_module='+selectedmodule;
        	new Ajax.Request(
		'index.php',
		{
			queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody:urlstring +'&query=true&module=RecycleBin&action=RecycleBinAjax&file=index&ajax=true&mode=ajax',
			onComplete: function(response) 
			{
				$("status").style.display="none";
                $("modules_datas").innerHTML=response.responseText;
				$("search_ajax").innerHTML = '';
			}
	      }
        );

}
function changeModule(pickmodule)
{
	$("status").style.display="inline";
	var module=pickmodule.options[pickmodule.options.selectedIndex].value;
	new Ajax.Request(
                'index.php',
                {
			queue: {position: 'end', scope: 'command'},
                        method: 'post',
                        postBody: 'action=RecycleBinAjax&module=RecycleBin&mode=ajax&file=ListView&selected_module='+module,
	                onComplete: function(response) 
					{
						$("status").style.display="none";
						$("modules_datas").innerHTML=response.responseText;
						$("searchAcc").innerHTML = $("search_ajax").innerHTML; 
						$("search_ajax").innerHTML = '';
					}
                }
        );
}

function massRestore()
{
	var select_options = document.getElementsByName('selected_id');
	var x = select_options.length;		
	idstring = "";
	xx = 0;
	for(i = 0; i < x ; i++)
	{
		if(select_options[i].checked)
		{
			idstring = select_options[i].value +","+idstring
				xx++
		}
	}

	if (xx != 0)
	{
		document.getElementById('idlist').value=idstring;
	}
	else
	{
		alert(mod_alert_arr.SELECT_ATLEAST_ONE_ENTITY);
		return false;
	}

	var selectmodule = $('selected_module').value;
	if(confirm(mod_alert_arr.MSG_RESTORE_CONFIRMATION + " " + xx + " " + selectmodule + "?"))
	{
		$("status").style.display="inline";
		new Ajax.Request(
       	        'index.php',
               	{queue: {position: 'end', scope: 'command'},
                       	method: 'post',
                        postBody: 'action=RecycleBinAjax&module=RecycleBin&mode=ajax&file=Restoration&idlist='+idstring+'&selectmodule='+selectmodule,
       	                onComplete: function(response) 
						{
							$("status").style.display="none";
							$("modules_datas").innerHTML=response.responseText;
							$("search_ajax").innerHTML = '';
                        }
       	        }
	        );
	}
}

function restore(entityid,select_module)
{
	if(confirm(mod_alert_arr.MSG_RESTORE_CONFIRMATION + " " + select_module + "?"))
	{
		$("status").style.display="inline";
		new Ajax.Request(
			'index.php',
	        {
				queue: {position: 'end', scope: 'command'},
	            method: 'post',
	            postBody: 'action=RecycleBinAjax&module=RecycleBin&mode=ajax&file=Restoration&entityid='+entityid+'&selectmodule='+select_module,
		        onComplete: function(response) {
		            $("status").style.display="none";
		            $("modules_datas").innerHTML=response.responseText;
					$("search_ajax").innerHTML = '';
	            }
			}
		);
	}
}

function getListViewEntries_js(module,url)
{
	$("status").show();
	var selected_module = $("select_module").value;
	var urlstring = "&selected_module=" + selected_module;
	<!-- Ticket 6330 -->
	if($('search_url').value!='')
        	urlstring = $('search_url').value+"&selected_module="+selected_module;
	
	
	new Ajax.Request(
		'index.php',
		{ queue: { position: 'end', scope: 'command' },
			method: 'post',
			postBody : "module=RecycleBin&action=RecycleBinAjax&file=ListView&mode=ajax&ajax=true&"+url+urlstring,
			onComplete: function(response) {
				$("status").hide();
            	if($("modules_datas")) {
            		$("modules_datas").innerHTML = response.responseText;
            	}
            }
        }
	);
}

function alphabetic(module,url,dataid)
{
        for(i=1;i<=26;i++)
        {
                var data_td_id = 'alpha_'+ eval(i);
                getObj(data_td_id).className = 'searchAlph';

        }
	var selectedmodule = $('select_module').options[$('select_module').selectedIndex].value 
	url += '&selected_module='+selectedmodule;
        getObj(dataid).className = 'searchAlphselected';
	$("status").style.display="inline";
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
                        postBody:"module="+module+"&action="+module+"Ajax&file=index&mode=ajax&ajax=true&"+url,
			onComplete: function(response) {
				$("status").style.display="none";
                                $("modules_datas").innerHTML=response.responseText;
				$("search_ajax").innerHTML = '';
			}
		}
	);
}

function callEmptyRecyclebin() {
	document.getElementById('rb_empty_conf_id').style.display = 'block';
}

function emptyRecyclebin(id) {
	if($(id)) $(id).hide();
	VtigerJS_DialogBox.progress();
	var pickmodule = $('select_module');
	var module=pickmodule.options[pickmodule.options.selectedIndex].value;
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
            postBody:"module=RecycleBin&action=RecycleBinAjax&file=EmptyRecyclebin&mode=ajax&ajax=true&selected_module="+module,
			onComplete: function(response) {
                $("status").style.display="none";
               	$("modules_datas").innerHTML= response.responseText;
				$("searchAcc").innerHTML = $("search_ajax").innerHTML; 
				$("search_ajax").innerHTML = '';
				VtigerJS_DialogBox.hideprogress();
			}
		}
	);	
}
