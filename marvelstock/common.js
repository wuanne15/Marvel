(function() {
	module.exports = {
			makereq : function(uri , handler) {
				var ajax = new XMLHttpRequest();
				ajax.open("GET", uri, true);
				ajax.onload = handler;
				ajax.send();
			}
	}
})();
