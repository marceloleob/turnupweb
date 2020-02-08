$(document).ready(function ()
{

	//Scroll top by clicking arrow up
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('#scroll').fadeIn();
		} else {
			$('#scroll').fadeOut();
		}
	});

	$('#scroll').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
		return !1;
	});

});
