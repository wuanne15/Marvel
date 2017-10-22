(function(){
	var common = require('common.js');
	
	window.onload = function() {
		getChart();
		getName();
		getValue();
	}
	
	function getChart(){
		common.makereq("", loadchart);
	}
	
	function loadchart() {
		var res = this.responseXML;
	}
	
	function GetName() {
		common.makereq("", loadName);
	}
	
	function loadName() {
		var res = this.responseXML;
	}
	
	function getValue() {
		 common.makereq("" , loadValue);
	}
	
	function loadValue() {
		var res = this.responseXML;
		document.getElementbyID
	}
})