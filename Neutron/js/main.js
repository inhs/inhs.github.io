$('.menu-btn').on('click', function () {
	$('.mobileMenu').addClass('_opened');
	$('.globalWrap').addClass('_active');
});
$('.jsCloseMenu').on('click', function () {
	$('.mobileMenu').removeClass('_opened');
	$('.globalWrap').removeClass('_active');
});
$(document).ready(function () {
	$('.formRegist').submit(function () {
		$.ajax({
			method: "POST",
			url: "mail.php",
			data: $('.formRegist').serialize(),
		}).done(function () {
			$('.formResult__icon._success').addClass('_visible');
			$('.formResult').addClass('_visible');
			setTimeout(() => {
				$('.formResult').removeClass('_visible');
				$('.formResult__icon._success').removeClass('_visible');
			}, 1300);
			setTimeout(() => {
				$('.globalWrap').removeClass('_active');
				$('.createAccount').removeClass('_active');
				$('.formRegist').trigger('reset');
			},1600)
		});
		return false
	});
});

$('.input__input').on('keyup input', function(){
	var val = $(this).val();
	if (val == false) {
			$(this).siblings('.input__label').removeClass('_active');
	} else {
		$(this).siblings('.input__label').addClass('_active');
	}
});
$('.jsCreateAccount').click( function(){
	$('.globalWrap').addClass('_active');
	$('.createAccount').addClass('_active');
});
$('.jsCloseCA').click(function(){
	$('.globalWrap').removeClass('_active');
	$('.createAccount').removeClass('_active');
	$('.formRegist').trigger('reset');
})