$(document).ready(function() {
	$('.c-box2__item').matchHeight();
	$('.c-list2__wrap').matchHeight();

	$('.c-box3__wrap').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
	});

	$('.c-slider__list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
	});

	$('.is-list1').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
	});

	$('.is-list2').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
	});

	$('.c-box3__question').click(function() {
		$(this).next().slideToggle();
		if ($(this).hasClass('is-active')) {
			$(this).removeClass('is-active')
		} else {
			$(this).addClass('is-active')
		}
	});
});
	