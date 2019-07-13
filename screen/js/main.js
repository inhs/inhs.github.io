function switcher() {
	let val = $(this).attr('data-switch');
	$('.JSswitcher').removeClass('_active');
	$('.JSswitcher[data-switch="' + val + '"]').addClass('_active');
	$('.JSportfolioList').removeClass('_active');
	$('.JSportfolioList[data-switch="' + val + '"]').addClass('_active');
	$('.JSportfolioMoreBtn').attr('data-switch', val)
	switch (val) {
		case 'photo':
			$('.JSportfolioList._active').find('.JSportfolioItems').slice(0, 6).fadeIn(0);
			break;
		case 'video':
			$('.JSportfolioList._active').find('.JSportfolioItems').slice(0, 4).fadeIn(0);
			break;
	}

};
function openModal() {
	let dataVal = $(this).attr('data-modal');
	let $modal = $('.JSmodal[data-modal="' + dataVal + '"]');
	$modal.toggleClass('_active');
	let $iframe = $modal.find('iframe');
	let videoSrc = $iframe.attr('src');
	$iframe.attr('data-src', videoSrc);
	let tempSrc = $iframe.attr('data-src');
	if ($modal.hasClass('_active')) {
		$iframe.attr('src', tempSrc);
	}
	else {
		$modal.find('iframe').removeAttr('src')
	}
};
function closeOnEmpty(e) {
	// let flag = $('.mobileMenu');
	// if (flag.has(e.target).length === 0) {
	// 	openModal();
	// }
	console.log(e.target);
	
};
function slideDown() {
	let val = $(this).attr('data-switch');
	switch (val) {
		case 'photo':
			$('.JSportfolioList._active').find('.JSportfolioItems:hidden').slice(0, 3).slideDown(500);
			break;
		case 'video':
			$('.JSportfolioList._active').find('.JSportfolioItems:hidden').slice(0, 2).slideDown(500);
			break;
	}
};
function videoInsert() {
	let videoSrc = $(this).attr('data-src');
	$(this).html('<iframe width="100%" height="100%" src="' + videoSrc + '" frameborder="0" allowfullscreen></iframe>')
};

$(document).ready(function () {
	$('.phoneMask').mask('+7 (000) 000 00 00')
	$('.JSswitcher').on('click', switcher);
	$('.JSslickSlider1').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: false,
		prevArrow: $('.prevSlide1'),
		nextArrow: $('.nextSlide1'),
		responsive: [
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
				}
			}
		]
	});
	$('.JSslickSlider2').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		prevArrow: $('.prevSlide2'),
		nextArrow: $('.nextSlide2'),
		responsive: [
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				}
			}
		]
	});
	$('.JSslickSlider3').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		prevArrow: $('.prevSlide3'),
		nextArrow: $('.nextSlide3'),
		asNavFor: '.JSslickSlider3__for',
		focusOnSelect: true,
		centerMode: true,
		centerPadding: '0px'
	});
	$('.JSslickSlider3__for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		prevArrow: $('.prevSlide3'),
		nextArrow: $('.nextSlide3'),
		asNavFor: '.JSslickSlider3',
		fade: true,
		draggable: false
	});

	var $page = $('html, body');
	$('a[href*="#"]').click(function () {
		$page.animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 400);
		return false;
	});
	$('.JSmodalToggle').on('click', openModal);

	$('.JSportfolioItems').slice(0, 4).fadeIn(0);

	$('.JSportfolioMoreBtn').on('click', slideDown);

	$('.JSinsertVideo').on('click', videoInsert);

	$('.JSserviceModalOpen').on('click', serviceModalOpen);

	$('.JSmodal').on('click', closeOnEmpty);
});