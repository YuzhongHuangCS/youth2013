$(function() {
	if (window.PIE) {
		$('#banner, .intro, #gallery, #winnerList, #detailBody').each(function() {
			PIE.attach(this);
		});
	}
});

function winnerListControl(){
		var sideHeight = $('#winnerList #title').outerHeight();
		var sideTop = $('#winnerList #title').offset().top;

		$('#side').css({
			"height": sideHeight,
			"top": sideTop
		});
		$('#side').show();

		$('#winnerList li').mouseenter(function() {
			sideHeight = $(this).outerHeight();
			sideTop = $(this).position().top;
			$('#side').css({
				"height": sideHeight,
				"top": sideTop
			});
		});
		$('#winnerList li').mouseleave(function() {
			sideHeight = $('#winnerList #title').outerHeight();
			sideTop = $('#winnerList #title').offset().top;
			$('#side').css({
				"height": sideHeight,
				"top": sideTop
			});
		});
}