(function(){
	var common = require('common.js');
	
	window.onload = function() {
		getChart();
		getName();
		getValue();
	}
	
	function getChart(){
		common.makereq();
	}
})