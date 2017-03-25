$(document).ready(function(){
	$("#photos").mouseenter(function(){
		$(this).text("View gallery!");
	});
	$("#photos").mouseleave(function(){
		$(this).text("Photos");
	});
});