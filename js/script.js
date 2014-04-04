$(document).ready(function(){
	var sideHeight = $("#winnerList #title").outerHeight();
	var sideTop = $("#winnerList #title").offset().top;

	$("#side").css({
		"height": sideHeight,
		"top": sideTop
	});
	$("#side").show();

	$("#winnerList li").mouseenter(function() {
		sideHeight = $(this).outerHeight();
		sideTop = $(this).position().top;
		$("#side").css({
			"height": sideHeight,
			"top": sideTop
		});
	});
	$("#winnerList li").mouseleave(function() {
		sideHeight = $("#winnerList #title").outerHeight();
		sideTop = $("#winnerList #title").offset().top;
		$("#side").css({
			"height": sideHeight,
			"top": sideTop
		});
	});
});
