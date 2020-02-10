$(document).ready(function ()
{

	/**
	 * Scroll show or hide
	 */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('#scroll').fadeIn();
		} else {
			$('#scroll').fadeOut();
		}
	});

	/**
	 * Scroll UP
	 */
	$('#scroll').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
		return !1;
	});

	/**
	 * Posta o token do form toda fez que for ativado um post por ajax
	 */
	$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
		return jqXHR.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
	});

	/**
	 * Mostra a mensagem de retorno por 4 segundos
	 */
	$('.feedback').animate({
		opacity: 1.0
	}, 5000).fadeOut('slow');

	/**
	 * Fecha a mensagem caso seja clicada
	 */
	$('.feedback .close').click(function (e) {
		e.preventDefault();
		$(this).parent().parent().fadeOut('slow');
		return false;
	});


});
