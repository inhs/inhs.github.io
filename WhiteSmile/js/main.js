$(document).ready(function () {
	$(".slider1").owlCarousel({
		nav: true,
		navText: ["<img src='img/owl-carousel-prev.svg'>", "<img src='img/owl-carousel-next.svg'>"],
		dots: true,
		dotsEach: 2,
		margin: 30,
		loop: false,
		responsive: {
			1024: {
				items: 2
			},
			500: {
				items: 1
			},
			0: {
				items: 1,
				nav: false,
				dotsEach: 1,
			}
		}
	});
	$('.slider2').owlCarousel({
		nav: true,
		navText: ["<img src='img/owl-carousel-prev.svg'>", "<img src='img/owl-carousel-next.svg'>"],
		dots: true,
		dotsEach: 1,
		loop: false,
		responsive: {
			0: {
				items: 1,
				dotsEach: 1,
			}
		}
	});
	$('.formConsult').submit(function () {
		$.ajax({
			method: "POST",
			url: "mail.php",
			data: $(this).serialize(),
			success: function(response) {
				console.log(response);
				$('.formResult__icon._success').addClass('_visible');
				$('.formResult').addClass('_visible');
				setTimeout(() => {
					$('.formResult').removeClass('_visible');
					$('.formResult__icon._success').removeClass('_visible');
				}, 1300);
				setTimeout(() => {
					$('.requestConsult').removeClass('_active');
					$('.formConsult').trigger('reset');
				},1600)
			}
		})
		return false;
	});
});
	// scroll
$(window).on('scroll', function(e){
	var scroll = $(window).scrollTop();
	if (scroll > 10) {
		$('.menuBtn').addClass('_active')
	} else {
		$('.menuBtn').removeClass('_active')
	}
})

// menuBtn click
$('.menuBtn').on('click', function(){
	$('.mobileMenu').addClass('_active');
	
});
// closeBtn click
$('.closeBtn').on('click', function(){
	$('.mobileMenu').removeClass('_active');
});
// inputPlaceholder
$('.JSinput').on('keyup input', function(){
	var val = $(this).val();
	if (val == false) {
		$(this).siblings('.input__label').removeClass('_active');
	} else {
		$(this).siblings('.input__label').addClass('_active');
	}
});
// open form
$('.JSopenConsult').click(function(e){
	e.preventDefault();
	$('.requestConsult').addClass('_active');
})
$('.JScloseConsult').click(function(){
	$('.requestConsult').removeClass('_active');
	$('.formConsult').trigger('reset');
});
// open cart dropBox
$('.schedule__cart').click(function(){
	$('.schedule__drop').slideToggle(300);
});
// variable initialize
var objCart = [];
var obj = {};
var counter = 0;
var flag = true;
// add to cart
$('.JSaddToCart').click(function(e){
	e.preventDefault();
	if (flag) {
		$('.dropBox__items').remove();
		flag = false;	
	}
	$(this).addClass('_disable').text("Добавлено");
	var $this = $(this).closest('.productBox');	// Создаем переменную, чтобы получать от нее дата-аттрибуты
	obj["name"] = $this.attr("data-name");		// Создаем
	obj["price"] = $this.attr("data-price");	// простые объекты
	obj["id"] = $this.attr("data-id");			// по дата-аттрибутам
	objCart.push(obj) ;						// Создаем Объект объектов
	$('.dropBox').prepend('<div class="dropBox__items" data-id="'+objCart[counter]["id"]+'"><p class="dropBox__content _name">'+objCart[counter]["name"]+'</p><p class="dropBox__content _price">'+objCart[counter]["price"]+'</p><img class="dropBox__delete JSdeleteItem" src="img/delete.svg"></div>');
	counter++;
	$('.schedule__cartNum').text(counter);

	objCart = JSON.stringify(objCart);
	localStorage.setItem("cart", objCart);
	objCart = JSON.parse(objCart);
});

var objStorage, objLength;
var counterCart = 0;
if(localStorage.getItem("cart") != null){
 objStorage = JSON.parse(localStorage.getItem("cart"));
 objLength = objStorage.length;
}



// delete from cart
$('.dropBox').on('click', '.JSdeleteItem', function(){
	var $this = $(this).closest('.dropBox__items');
	var $id = $this.attr("data-id");
	counterCart--;
	$('.schedule__cartNum').text(counterCart);
	$('.dropBox__items[data-id="'+$id+'"]').remove();
	var $obj = JSON.parse(localStorage.getItem("cart"));
	console.log($obj);
	for (var i = 0; i < $obj.length; i++) {
		if($obj[i] != null && $obj[i]["id"] == $id){
			delete $obj[i];
		
		}
	}
	$objMain = JSON.stringify($obj);
	localStorage.setItem("cart", $objMain);
	// objCart = JSON.parse(objCart);
});



console.log(objStorage)

for ( var i = 0 ; i < objLength ; i++ ) {
	if(objStorage[i] != null){
$('.dropBox').prepend('<div class="dropBox__items" data-id="'+objStorage[i]["id"]+'"><p class="dropBox__content _name">'+objStorage[i]["name"]+'</p><p class="dropBox__content _price">'+objStorage[i]["price"]+'</p><img class="dropBox__delete JSdeleteItem" src="img/delete.svg"></div>')
	counterCart++;
	}
	
};
$('.schedule__cartNum').text(counterCart);
// console.log(localStorage.getItem("cart"))
$('.JSbuyBtn').click(function(){
	$('.requestBuy').addClass("_active");
});
$('.JScloseBuy').click(function(e){
	$('.requestBuy').removeClass("_active");
	$('.formBuy').trigger('reset');
});
$('.JSsend').click(function(){
	var $arr = [];
	var $obj = JSON.parse(localStorage.getItem("cart"));
	for(var i = 0; i < $obj.length; i++){
		if($obj[i] != null){
			$arr.push($obj[i]);
		}
	}
	$('.requestBuy').removeClass('_active');
	$.ajax({
		method: "POST",
		url: "cart.php",
		data: {
			name:$('input[name=name]').val(),
			phone:$('input[name=phone]').val(),
			address:$('input[name=address]').val(),
			obj: JSON.stringify($arr)
		},
		success: () => {
			console.log("good")
			$('.thanks').addClass('_active');
			setTimeout(function(){
				$('.thanks').removeClass('_active');
			},2000)
		}
	})
})