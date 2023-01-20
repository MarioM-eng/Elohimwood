$(document).ready(function(){
	function dtrigger(){
		$("#contra").attr("data-trigger", "focus");
	}
	function foc(){
		$("#contra").focus();
	}
	dtrigger();
	setTimeout(foc,1000);
})