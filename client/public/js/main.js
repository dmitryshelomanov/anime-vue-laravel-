$('document').ready(function () {
	
	$(window).on('scroll', function () {

		var pos = $('body').scrollTop();
		if (pos > 400) {
			$('.menu').addClass('menu-fix');
			$('#up1').show();
		} else {
			$('.menu').removeClass('menu-fix');
			$('#up1').hide();
		}

	});

	$('#up1').on('click', function () {
		var scrol_el =  $(this).attr('href');
		$('html, body').animate({scrollTop: $(scrol_el).offset().top}, 1000)
	});

	$('.panel i').on('click', function () {
		$('.menu').animate({width: 'toggle'}, 10);
	});

	$('#playerOpen').on('click', function () {
		$('.player-wrap').toggle();
	});

	$('.open-list').on('click', function () {
		$('.list').toggle();
	});

})