/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/

function move_module(tabid,move){
	
	//$('vtbusy_info').style.display = "block";
		new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'module=CustomerPortal&action=CustomerPortalAjax&file=ListView&sub_mode=movemodules&parenttab=Settings&tabid='+tabid+'&move='+move+'&ajax=true',
			onComplete: function(response) {
			$("portallist").innerHTML=response.responseText;
			//$('vtbusy_info').style.display = "none";
			}
		}
	);	
}

function toggleModule(tabid, action) {
var data = 'module=CustomerPortal&action=CustomerPortalAjax&file=ListView&tabid='+tabid+'&sub_mode=enable_disable&status='+action; 
new Ajax.Request(
		'index.php',
        {queue: {position: 'end', scope: 'command'},
        	method: 'post',
            postBody: data,
            onComplete: function(response) {
				// Reload the page to apply the effect of module setting
				window.location.href = "index.php?module=CustomerPortal&action=index&parenttab=Settings";
			}
		}
	);
}
