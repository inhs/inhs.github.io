// Header animation
setTimeout(function () {
	$('.JSheaderTopLine').addClass('JStrans');
	$('.JSheaderTopLine').addClass('fadeUp');
	setTimeout(function () {
		$('.JSheaderTopLine').removeClass('JStrans');
	}, 1000)
})
setTimeout(function () {
	$('.JSheaderMidLine').addClass('JStrans');
	$('.JSheaderMidLine').addClass('fadeUp');
	setTimeout(function () {
		$('.JSheaderMidLine').removeClass('JStrans');
	}, 1000)
}, 300)
setTimeout(function () {
	$('.JSheaderBottomLine').addClass('JStrans');
	$('.JSheaderBottomLine').addClass('fadeUp');
	setTimeout(function () {
		$('.JSheaderBottomLine').removeClass('JStrans');
	}, 1000)
}, 600)
setTimeout(function () {
	$('.header__button').addClass('JStrans');
	$('.header__button').addClass('fadeUp');
	$('.header__button').css({
		'opacity': '.5'
	});
	setTimeout(function () {
		$('.header__button').removeClass('JStrans');
	}, 1000)
}, 600)
// Scroll parallax
$(window).on('scroll', function () {
	var scroll = $(this).scrollTop();
	var offset = 700;
	console.log(scroll)
	$('.portfolio').each(function () {
		if (scroll >= $(this).offset().top - offset) {
			$('.portfolio__title').addClass('fadeUp');
			setTimeout(function(){
				$('.first-project').addClass('fadeUp');
			},300);
			setTimeout(function(){
				$('.second-project').addClass('fadeUp');
			},600);
			setTimeout(function(){
				$('.third-project').addClass('fadeUp');
			},900)
		}
	});
	$('.JSheaderTopLine').css({
		'transform': 'translate(0,+' + scroll / 20 + '%)'
	});
	$('.JSheaderMidLine').css({
		'transform': 'translate(0,+' + scroll / 5 + '%)'
	});
	$('.JSheaderBottomLine').css({
		'transform': 'translate(0,+' + scroll * 1.2 + '%)'
	});
});
$(".project").on('mousemove', function (e) {
	var offset = $(this).offset();
	var X = (e.pageX - offset.left);
	var Y = (e.pageY - offset.top);
	var centerY = ($('.project').height() / 2);
	var centerX = ($('.project').width() / 2);
	var relativeY = Y - centerY;
	var relativeX = -(X - centerX);
	$(this).css({
		'transition': '0s',
		'transform': 'rotateX(' + relativeY / 50 + 'deg) rotateY(' + relativeX / 150 + 'deg)'
	});
});
$(".project").on('mouseleave', function (e) {
	$(this).css({
		'transform': 'rotate(0)'
	});
})