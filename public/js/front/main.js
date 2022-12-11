$(document).ready(function() {
	$('.c-box2__item').matchHeight();

	$('.c-slider__list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
	});
});
	