/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

var modifiedMappingValues = new Array();

function changeDependencyPicklistModule(){
	$("status").style.display="inline";
	var oModulePick = $('pickmodule')
	var module=oModulePick.options[oModulePick.selectedIndex].value;
	
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&moduleName='+encodeURIComponent(module),
			onComplete: function(response) {
				$("status").style.display="none";
				$("picklist_datas").update(response.responseText);
			}
		}
	);
}

function addNewDependencyPicklist() {
	var selectedModule = $('pickmodule').value;
	if(selectedModule == '') {
		alert(alert_arr.ERR_SELECT_MODULE_FOR_DEPENDENCY);
		return false;
	}

	$("status").style.display="inline";
	
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&submode=editdependency&moduleName='+encodeURIComponent(selectedModule),
			onComplete: function(response) {
				$("status").style.display="none";
				modifiedMappingValues = new Array();
				$("picklist_datas").update(response.responseText);
			}
		}
	);
}

function editNewDependencyPicklist(module) {
	$("status").style.display="inline";

	var sourcePick = $('sourcefield');
	var sourceField = sourcePick.options[sourcePick.selectedIndex].value;

	var targetPick = $('targetfield');
	var targetField = targetPick.options[targetPick.selectedIndex].value;

	if(sourceField == targetField) {
		$("status").style.display="none";
		alert(alert_arr.ERR_SAME_SOURCE_AND_TARGET);
		return false;
	}

	var urlstring = 'moduleName='+encodeURIComponent(module)+'&sourcefield='+sourceField+'&targetfield='+targetField;

	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&submode=editdependency&'+urlstring,
			onComplete: function(response) {
				$("status").style.display="none";
				$("picklist_datas").update(response.responseText);
			}
		}
	);
}

function editDependencyPicklist(module, sourceField, targetField) {
	$("status").style.display="inline";
	
	var urlstring = 'moduleName='+encodeURIComponent(module)+'&sourcefield='+sourceField+'&targetfield='+targetField;
	
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&submode=editdependency&'+urlstring,
			onComplete: function(response) {
				$("status").style.display="none";
				modifiedMappingValues = new Array();
				$("picklist_datas").update(response.responseText);
			}
		}
	);	
}

function deleteDependencyPicklist(module, sourceField, targetField) {
	$("status").style.display="inline";

	var urlstring = 'moduleName='+encodeURIComponent(module)+'&sourcefield='+sourceField+'&targetfield='+targetField;

	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&submode=deletedependency&'+urlstring,
			onComplete: function(response) {
				$("status").style.display="none";
				$("picklist_datas").update(response.responseText);
			}
		}
	);
}

function saveDependency(module) {
	$("status").style.display="inline";
	
	var dependencyMapping = serializeData();
	if(dependencyMapping == false) {
		$("status").style.display="none";
		return false;
	}
	
	var urlstring = 'moduleName='+encodeURIComponent(module)+'&dependencymapping='+encodeURIComponent(dependencyMapping);
	
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'action=PickListAjax&module=PickList&directmode=ajax&file=PickListDependencySetup&submode=savedependency&'+urlstring,
			onComplete: function(response) {
				$("status").style.display="none";
				$("picklist_datas").update(response.responseText);
			}
		}
	);	
}

function serializeData() {	
	var sourceField = $('sourcefield').options[$('sourcefield').selectedIndex].value;
	var targetField = $('targetfield').options[$('targetfield').selectedIndex].value;
	
	var maxMappingCount = modifiedMappingValues.length;
	var valueMapping = [];

	for(var i=0; i<maxMappingCount; ++i) {		
		var sourceValueId = modifiedMappingValues[i];
		var sourceValue = $(sourceValueId).value;
		var mappingIndex = sourceValueId.replace(sourceField,'');
		var node = $('valueMapping'+mappingIndex);
		if (node != null && typeof(node) != 'undefined') {
			var targetValueNodes = document.getElementsByName('valueMapping'+mappingIndex);
			var targetValues = [];
			for (var j=0;j<targetValueNodes.length;++j) {
	            var targetValueNode = targetValueNodes[j];
				if(targetValueNode != null && targetValueNode.parentNode != null
					&& targetValueNode.parentNode.hasClassName('selectedCell')) {
						targetValues.push(targetValueNode.value);
				}
	        }

			if(targetValues.length == 0) {
				alert(alert_arr.ERR_ATLEAST_ONE_VALUE_FOR + " " + sourceValue);
				return false;
			}

			valueMapping[i] = {"sourcevalue":sourceValue,
								"targetvalues":targetValues
							};
		}
	}
	
	var formData = {"sourcefield": sourceField, "targetfield": targetField, "valuemapping": valueMapping};
	return JSON.stringify(formData);
}

function selectSourceValue(sourceValueIndex) {
	if(sourceValueIndex < 0) return;
	if($('sourceValue'+sourceValueIndex) == null) return;
	$('sourceValue'+sourceValueIndex).checked = true;
}

function selectTargetValue(sourceIndex, targetValue) {
	var targetElements = document.getElementsByName('valueMapping'+sourceIndex);
	for(var i=0; i<targetElements.length; ++i) {
		var targetElement = targetElements[i];
		if(targetElement.value == targetValue) {
			selectCell(targetElement.parentNode);
		}
	}
}

function unselectTargetValue(sourceIndex, targetValue) {
	var targetElements = document.getElementsByName('valueMapping'+sourceIndex);
	for(var i=0; i<targetElements.length; ++i) {
		var targetElement = targetElements[i];
		if(targetElement.value == targetValue) {
			unselectCell(targetElement.parentNode);
		}
	}
}

function selectCell(element) {
	if(element != null) {
		element.removeClassName('unselectedCell');
		element.addClassName('selectedCell');
	}
}

function unselectCell(element) {
	if(element != null) {
		element.removeClassName('selectedCell');
		element.addClassName('unselectedCell');
	}
}

function loadMappingForSelectedValues() {
	var sourceElements = document.getElementsByName('selectedSourceValues');

	var classElements = $$('.picklistValueMapping');
	for(var i=0; i<classElements.length; ++i) {
		classElements[i].style.display = 'none';
	}

	for(var i=0; i<sourceElements.length; ++i) {
		var sourceElement = sourceElements[i];
		if(sourceElement.checked == true) {
			var selectedElementId = sourceElement.value;
			var selectedElementCells = $$('.'+selectedElementId);
			for(var j=0; j<selectedElementCells.length; ++j) {
				selectedElementCells[j].style.display = 'table-cell';
			}
		}
	}
}

function handleCellClick(event, element, selectedSourceId) {
	
	if(element.tagName == 'TD') {
		if(element.hasClassName('selectedCell')) {
			unselectCell(element);
		} else {
			selectCell(element);
		}

		if(typeof selectedSourceId != 'undefined' && modifiedMappingValues.indexOf(selectedSourceId) == -1) {
			modifiedMappingValues.push(selectedSourceId);
		}
	}
}

var isMouseDown = false;

function handleCellMouseDown(event, element, selectedSourceId) {
	isMouseDown = true;
	handleCellClick(event, element, selectedSourceId);
	return false;
}

function handleCellMouseOver(event, element, selectedSourceId) {
	if(isMouseDown) {
		handleCellClick(event, element, selectedSourceId);
	}
}

function handleCellMouseUp(event, element) {
	isMouseDown = false;
}