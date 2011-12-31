/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *
 ********************************************************************************/


document.write("<script type='text/javascript' src='include/js/Mail.js'></"+"script>");
document.write("<script type='text/javascript' src='include/js/Merge.js'></"+"script>");
function verifyConvertLeadData(form) {
	if(! form.createpotential.checked == true){
        if (trim(form.potential_name.value) == ""){
            alert(alert_arr.OPPORTUNITYNAME_CANNOT_BE_EMPTY);
			return false;	
		}
		
		if(form.closingdate_mandatory != null && form.closingdate_mandatory.value == '*'){
			if (form.closedate.value == ""){
	        	alert(alert_arr.CLOSEDATE_CANNOT_BE_EMPTY);
				return false;	
			}
		}
		if (form.closedate.value != "" ){
			var x = dateValidate('closedate','Potential Close Date','DATE');
			if(!x){
				return false;
			}
		}
			
				
		
		if(form.amount_mandatory.value == '*'){
			if (form.potential_amount.value == ""){
	            alert(alert_arr.AMOUNT_CANNOT_BE_EMPTY);
				return false;					
			}
		}	
		intval= intValidate('potential_amount','Potential Amount');
		if(!intval){
			return false;
		}
	}
	else{	
		return true;
	}
	
}

function togglePotFields(form)
{
	if (form.createpotential.checked == true)
	{
		form.potential_name.disabled = true;
		form.closedate.disabled = true;
		form.potential_amount.disabled = true;
		form.potential_sales_stage.disabled = true;
		
	}
	else
	{
		form.potential_name.disabled = false;
		form.closedate.disabled = false;
		form.potential_amount.disabled = false;
		form.potential_sales_stage.disabled = false;
		form.potential_sales_stage.value="";
	}	

}


function set_return(product_id, product_name) {
	if(document.getElementById('from_link').value != '') {
        window.opener.document.QcEditView.parent_name.value = product_name;
        window.opener.document.QcEditView.parent_id.value = product_id;
	} else {
        window.opener.document.EditView.parent_name.value = product_name;
        window.opener.document.EditView.parent_id.value = product_id;
}
}

function set_return_todo(product_id, product_name) {
	if(document.getElementById('from_link').value != '') {
        window.opener.document.QcEditView.task_parent_name.value = product_name;
        window.opener.document.QcEditView.task_parent_id.value = product_id;
	} else {
        window.opener.document.createTodo.task_parent_name.value = product_name;
        window.opener.document.createTodo.task_parent_id.value = product_id;
	}
}

function set_return_specific(product_id, product_name) {
        //Used for DetailView, Removed 'EditView' formname hardcoding
        var fldName = getOpenerObj("lead_name");
        var fldId = getOpenerObj("lead_id");
        fldName.value = product_name;
        fldId.value = product_id;
}
function add_data_to_relatedlist(entity_id,recordid) {
	
	opener.document.location.href="index.php?module=Emails&action=updateRelations&destination_module=leads&entityid="+entity_id+"&parentid="+recordid;
}
//added by rdhital/Raju for emails
function submitform(id){
		document.massdelete.entityid.value=id;
		document.massdelete.submit();
}	

//JFV 
// google map location by japanese and chinese address order
function mapLocation2(){
	this.areaType=null;
	this.separator=" ";
    var countryName = "";
    this.setAreaTypeByCountry = function(countryStr){
	    if(fieldname.indexOf(countryStr) > -1)    {
	    	if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf(countryStr)])){
	        	countryName = document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf(countryStr)]).innerHTML;
	        }
		    if(countryName.indexOf("日") > -1 ){this.areaType="jp"; this.separator=""}
		    else if(countryName.indexOf("中華民國") > -1 ){this.areaType="roc"; this.separator=""}
		    else if(countryName.indexOf("中") > -1 ){this.areaType="cn"; this.separator=""}
		    else if(countryName.indexOf("香") > -1 ){this.areaType="hk"; this.separator=""}
		    else if(countryName.indexOf("台") > -1 ){this.areaType="tw"; this.separator=""}
	    }
	    return this.areaType;
	}
	this.getMapParameter = function(itemArray){
		mapParameter="";
		var ii=0
		if(this.areaType=="roc"){ ii = 1}  // google can't accept 中華民國 currently.
		for(; ii<itemArray.length; ii++){
			var item = itemArray[ii];
			if(fieldname.indexOf(item) > -1){
				if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf(item)]))
					mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf(item)]).innerHTML+this.separator;
			}
		}
		return mapParameter;
	}
	this.openMapWindow = function(mapParameter){
		mapParameter = removeHTMLFormatting(mapParameter);
		if(this.areaType=="jp"){
			window.open('http://maps.google.co.jp/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8&oe=UTF8&hl=ja','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}else if(this.areaType=="roc"){
			window.open('http://maps.google.com.tw/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8&oe=UTF8&hl=zh-TW','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}else if(this.areaType=="tw"){
			window.open('http://maps.google.com.tw/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8&oe=UTF8&hl=zh-TW','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}else if(this.areaType=="hk"){ // map haven't been supported by hk google
			window.open('http://maps.google.com.tw/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8&oe=UTF8&hl=zh-HK','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}else if(this.areaType=="cn"){
	         window.open('http://ditu.google.com/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8&oe=UTF8','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}else{
			window.open('http://maps.google.com/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8','goolemap','height=450,width=700,resizable=yes,titlebar,location,top=200,left=250');
		}
	}
}
//JFV END

function searchMapLocation(addressType)
{
        var mapParameter = '';
        if (addressType == 'Main')
        {
		if(fieldname.indexOf('lane') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('lane')]))
	                        mapParameter = document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('lane')]).innerHTML+' ';
		}
		if(fieldname.indexOf('pobox') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('pobox')]))
				mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('pobox')]).innerHTML+' ';
		}
		if(fieldname.indexOf('city') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('city')]))
				mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('city')]).innerHTML+' ';
		}
		if(fieldname.indexOf('state') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('state')]))
				mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('state')]).innerHTML+' ';
		}
		if(fieldname.indexOf('country') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('country')]))
				mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('country')]).innerHTML+' ';
		}
		if(fieldname.indexOf('code') > -1)
		{
			if(document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('code')]))
	                        mapParameter = mapParameter + document.getElementById("dtlview_"+fieldlabel[fieldname.indexOf('code')]).innerHTML+' ';
		}
        }

//JFV
		var otherLoc = new mapLocation2()
//		if (addressType == 'Main'){
			otherLoc.setAreaTypeByCountry('country')
//		}else{
//			otherLoc.setAreaTypeByCountry('othercountry')
//		}
		if(null != otherLoc.areaType){ 	// address area isn't normal type, eg. japan or china
//			if (addressType == 'Main'){
				var addressOrderAry = [/*code,*/'country','state','city'/*,'pobox'*/,'lane']
//			}else{
//				var addressOrderAry = [/*otherzip,*/'othercountry','otherstate','othercity'/*,'otherpobox'*/,'otherstreet']
//			}
			var mapParameter = otherLoc.getMapParameter(addressOrderAry)
			otherLoc.openMapWindow(mapParameter);
		}else{							// address area is normal type
			mapParameter = removeHTMLFormatting(mapParameter);
			window.open('http://maps.google.com/maps?q='+encodeURIComponent(mapParameter)+'&ie=UTF8','goolemap','height=450,width=700,resizable=no,titlebar,location,top=200,left=250');
		}
//	mapParameter = removeHTMLFormatting(mapParameter);
//        window.open('http://maps.google.com/maps?q='+mapParameter,'goolemap','height=450,width=700,resizable=no,titlebar,location,top=200,left=250');
//JFV END
}


