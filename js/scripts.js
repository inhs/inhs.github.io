$('#main-form-phone-id').on('keyup',function(){
  var $this = $(this),
      val = $this.val();
  
  if(val.length >= 8){
   $('#mainformid').removeAttr('disabled');
  }else {
    $('#mainformid').attr('disabled', 'disabled'); 
  }
	});
$('#main-form-phone-id-2').on('keyup',function(){
  var $this = $(this),
      val = $this.val();
  
  if(val.length >= 8){
   $('#mainformid-2').removeAttr('disabled');
  }else {
    $('#mainformid-2').attr('disabled', 'disabled'); 
  }
	});
function popUpForm() {
	document.getElementById('form-pop-up').classList.add("form__newclass");
	document.getElementById('pop-ip-form-close').style.display = 'block';
}
function popUpFormClose() {
	document.getElementById('form-pop-up').classList.remove("form__newclass");
	document.getElementById('pop-ip-form-close').style.display = 'none';
}

// function mainFormSuccess () {
// 	document.getElementById('form__slide__first').style.display = 'none';
// 	document.getElementById('form__slide__second').style.opacity = '1';
// 	document.getElementById('form__slide__second').style.left = '0';
// 	document.getElementById('form__slide__first-2').style.display = 'none';
// 	document.getElementById('form__slide__second-2').style.opacity = '1';
// 	document.getElementById('form__slide__second-2').style.left = '0';
// }
function mainFormSuccess(e) {
	e.preventDefault();
	let counter = 0;
	let $form = $(this).closest('.header-form');
	let length = $form.find('.form__input').length;
	// let length = $(".header-form input").length;
	console.log(length);
	
	$form.find('.form__input').each(function () {
		if ($(this).val() !== "") {
			$(this).removeClass("_warning");
			counter++;
		} else {
			$(this).addClass("_warning");
		}
	});
	if (counter == length) {
		let name = $form.find('.main-form-name').val();
		let phone = $form.find('.main-form-phone').val();
		$.post(
			"mail.php",
			{
				"name": name,
				"phone": phone,
			},
			function (data) {
				if (data == 1) {
					$form.closest('.form__wrap').find('.form__slide__first').css('opacity', '0');
					$form.closest('.form__wrap').find('.form__slide__second').css('opacity', '1');
					// $('#form__slide__first').css('opacity', '0');
					// $('#form__slide__second').css('opacity', '1');
				}
				else {
					alert('Ошибка! Повторите заказ')
				}
			}
		)
	}
}