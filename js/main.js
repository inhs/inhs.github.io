// // Header animation
// setTimeout(function () {
// 	$('.JSheaderTopLine').addClass('JStrans');
// 	$('.JSheaderTopLine').addClass('fadeUp');
// 	setTimeout(function () {
// 		$('.JSheaderTopLine').removeClass('JStrans');
// 	}, 1000)
// }, 0)
// setTimeout(function () {
// 	$('.JSheaderMidLine').addClass('JStrans');
// 	$('.JSheaderMidLine').addClass('fadeUp');
// 	setTimeout(function () {
// 		$('.JSheaderMidLine').removeClass('JStrans');
// 	}, 1000)
// }, 300)
// setTimeout(function () {
// 	$('.JSheaderBottomLine').addClass('JStrans');
// 	$('.JSheaderBottomLine').addClass('fadeUp');
// 	setTimeout(function () {
// 		$('.JSheaderBottomLine').removeClass('JStrans');
// 	}, 1000)
// }, 600)

window.onload = function () {
	$('.JSelemStart').each(function () {

		var $this = $(this);
		setTimeout(function () {
			$this.addClass('JStrans');
			$this.addClass('fadeUp');
			setTimeout(function () {
				$this.removeClass('JStrans');
			}, 1000)
		}, $this.attr('data-startSpeed'))
	})
}
// Scroll parallax
$(window).on('scroll', function () {
	var scroll = $(this).scrollTop();
	var offset = 700;
	console.log(scroll)
	$('.portfolio').each(function () {
		if (scroll >= $(this).offset().top - offset) {
			$('.portfolio__title').addClass('fadeUp');
			// setTimeout(function(){
			// 	$('.first-project').addClass('fadeUp');
			// },300);
			// setTimeout(function(){
			// 	$('.second-project').addClass('fadeUp');
			// },600);
			$(".JSanimate").each(function () {
				var $this = $(this);
				setTimeout(function () {
					$this.addClass('fadeUp')
				}, $this.attr('data-animateSpeed'))
			})
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
$(".project").on('mouseleave', function () {
	$(this).css({
		'transform': 'rotate(0)'
	});
})


$('.button').click(function(){
	$.ajax({
		method: "POST",
		url: "mail.php",
		data: {
			val : $('.input').val()
		},
		success: function(response){
			console.log(response)
		}
	})
})