<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Whie Smile</title>
	<link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css') ?>">
	<link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">
</head>

<body>
	<div class="thanks">
		<p class="thanks__text">
			Ваша заявка принята
		</p>
	</div>
	<div class="requestBuy">
		<img src="img/close-dark.svg" alt="" class="requestBuy__closeBtn JScloseBuy">
		<div class="requestBuy__wrap">
			<p class="requestBuy__text">
				Корзина
			</p>
			<div class="requestBuy__form">
				<form class="formBuy">
					<div class="formBuy__input">
						<div class="input">
							<img src="img/man-user.svg" alt="" class="input__icon">
							<input type="text" name="name" id="name" required class="input__input JSinput">
							<label for="name" class="input__label">Имя</label>
						</div>
					</div>
					<div class="formBuy__input">
						<div class="input">
							<img src="img/phone.svg" alt="" class="input__icon">
							<input type="text" name="phone" id="phone" required class="input__input JSinput">
							<label for="phone" class="input__label">Номер телефона</label>
						</div>
					</div>
					<div class="formBuy__input">
						<div class="input">
							<img src="img/placeholder.svg" alt="" class="input__icon">
							<input type="text" name="address" id="address" required class="input__input JSinput">
							<label for="address" class="input__label">Адрес доставки</label>
						</div>
					</div>
					<div class="formConsult__input _btn">
						<div class="button JSsend">Оформить заказ</div>
					</div>
				</form>
				<div class="formResult">
					<img src="img/success.svg" alt="" class="formResult__icon _success">
				</div>
			</div>
		</div>
	</div>
	<div class="requestConsult">
		<img src="img/close-dark.svg" alt="" class="requestConsult__closeBtn JScloseConsult">
		<div class="requestConsult__wrap">
			<p class="requestConsult__text">
				Заполните форму и мы с вами свяжемся!
			</p>
			<div class="requestConsult__form">
				<form class="formConsult">
					<div class="formConsult__input">
						<div class="input">
							<img src="img/man-user.svg" alt="" class="input__icon">
							<input type="text" name="name" id="name" required class="input__input JSinput">
							<label for="name" class="input__label">Имя</label>
						</div>
					</div>
					<div class="formConsult__input">
						<div class="input">
							<img src="img/email.svg" alt="" class="input__icon">
							<input type="email" name="email" id="email" class="input__input JSinput">
							<label for="email" class="input__label">Почта</label>
						</div>
					</div>
					<div class="formConsult__input">
						<div class="input">
							<img src="img/phone.svg" alt="" class="input__icon">
							<input type="text" name="phone" id="phone" class="input__input JSinput">
							<label for="phone" class="input__label">Номер телефона</label>
						</div>
					</div>
					<div class="formConsult__input _btn">
						<div class="button JSsend">Отправить</div>
					</div>
				</form>
				<div class="formResult">
					<img src="img/success.svg" alt="" class="formResult__icon _success">
				</div>
			</div>
		</div>
	</div>
	<!-- /.requestConsult -->
	<div class="mobileMenu">
		<div class="mobileMenu__wrap">
			<img class="closeBtn" src="img/close.svg" alt="">
			<div class="navigation">
				<div class="navigation__items">
					<a href="#sectionAbout" class="navigation__link">О компании</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionFeatures" class="navigation__link">Преимущества</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionTech" class="navigation__link">Технология</a>
				</div>
				<div class="navigation__items">
					<a href="#" class="navigation__link">Акции</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionSertificate" class="navigation__link">Сертификаты</a>
				</div>
				<div class="navigation__items">
					<a href="#" class="navigation__link">Продукция</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionReview" class="navigation__link">Отзывы</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionQuestion" class="navigation__link">Контакты</a>
				</div>
				<div class="navigation__items _call">
					<a href="#" class="navigation__link _call">Заказать звонок</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.mobileMenu -->
	<div class="menuBtn">
		<img src="img/menu.svg" alt="" class="menuBtn__icon">
	</div>
	<!-- /.menuBtn -->
	<header class="header">
		<div class="header__topLine">
			<div class="header__schedule container">
				<div class="schedule">
					<p class="schedule__text">
						ГРАФИК РАБОТЫ СТУДИИ: С 
						<span class="schedule__accent">
							10:00
						</span>
						ДО 
						<span class="schedule__accent">
							17:00
						</span>
						( БЕЗ ВЫХОДНЫХ )
					</p>
					<div class="schedule__cart">
						<div class="schedule__cartNum">0</div>
						<img src="img/cart.svg" alt="" class="schedule__cartIcon">
					</div>
					<div class="schedule__drop">
						<div class="dropBox">
							<div class="dropBox__line">
								<div class="button JSbuyBtn">Купить</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__midLine">
			<div class="header__container container">
				<div class="header__line">
					<div class="header__logo">
						<div class="logo">
							<img src="img/Logo.png" alt="" class="logo__icon">
							<p class="logo__text">
								студия отбеливания зубов
							</p>
						</div>
					</div>
					<div class="header__address">
						<div class="address">
							<div class="address__line">
								<img src="img/fa-info-circle.png" alt="" class="address__icon">
								<p class="address__title">
									МЫ НАХОДИМСЯ ПО АДРЕСУ:
								</p>
							</div>
							<p class="address__text">
								г. Мытищи Шараповский пр., вл.2, с.3. <br>
								Аппартаменты «Красный Кит», 5 этаж, 10 каб.
							</p>
						</div>
					</div>
					<div class="header__contact">
						<a href="tel:+79032969582" class="contact__phone">
							+7 (903) 296-95-82
						</a>
						<div class="contact__line">
							<p class="contact__text">
								Так же доступны в: 
							</p>
							<div class="contact__links">
								<a href="#" class="contact__link">
									<img src="img/viber.svg" alt="" class="contact__linkIcon">
								</a>
								<a href="#" class="contact__link">
									<img src="img/whatsapp.svg" alt="" class="contact__linkIcon">
								</a>
								<a href="#" class="contact__link">
									<img src="img/telegram.svg" alt="" class="contact__linkIcon">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header__navigation">
					<div class="navigation">
						<div class="navigation__items">
							<a href="index.php" class="navigation__link">О компании</a>
						</div>
						<div class="navigation__items">
							<a href="#sectionBrend" class="navigation__link">Технология</a>
						</div>
						<div class="navigation__items">
							<a href="#" class="navigation__link">Акции</a>
						</div>
						<div class="navigation__items">
							<a href="#sectionSertificate" class="navigation__link">Сертификаты</a>
						</div>
						<div class="navigation__items">
							<a href="#sectionProduct" class="navigation__link">Продукция</a>
						</div>
						<div class="navigation__items">
							<a href="#sectionQuestion" class="navigation__link">Контакты</a>
						</div>
						<div class="navigation__items _call">
							<a href="#" class="navigation__link _call JSopenConsult">Заказать звонок</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottomLine">
			<div class="header__container container">
				<div class="header__title">
					<h1 class="bigTitle">
						СДЕЛАЙТЕ СВОЮ УЛЫБКУ
					</h1>
				</div>
				<div class="header__subTitle">
					<h2 class="subTitle">
						БЛИСТАТЕЛЬНЕЙ ВСЕГО ЗА 20 МИНУТ!
					</h2>
				</div>
				<div class="header__boxLine">
					<p class="header__offerText">
						с помощью косметического отбеливания зубов
					</p>
					<div class="header__btn">
						<a href="#" class="button _small JSopenConsult">
							записаться онлайн
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /.header -->
	<section class="sectionProduct" id="sectionProduct">
		<div class="sectionProduct__container container">
			<div class="sectionProduct__title">
				<h2 class="title">
					<span class="title__accent">Продукция</span>
				</h2>
			</div>
			<div class="sectionProduct__line">
				<div class="sectionProduct__productBox">
					<div class="productBox" data-name="TEETH WHITENING POWDER" data-price="1 200" data-id="1">
						<div class="productBox__slider">
							<div class="owl-carousel slider2" id="owl-carousel-product">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
							</div>
						</div>
						<p class="productBox__title">
							TEETH WHITENING POWDER™
						</p>
						<p class="productBox__info">
							Мягкий абразив удаляет зубной налёт, предотвращает развитие зубного камня
							Доминиканское масло какао защищает эмаль
							Активный кислород в форме перкарбоната натрия осветляет пигменты
							Аллантоин благотворно влияет на дёсны
							Подходит для ежедневного использования
						</p>
						<p class="productBox__price">
							1 200 руб
						</p>
						<div class="productBox__line">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
						</div>
						<div class="productBox__btn">
							<a href="#" class="button JSaddToCart">Добавить в корзину</a>
						</div>
					</div>
				</div>
				<!-- /.sectionProduct__productBox -->
				<div class="sectionProduct__productBox">
					<div class="productBox"  data-name="ОТБЕЛИВАЮЩИЕ ПОЛОСКИ WHITE&SMILE DELICATE" data-price="2 500" data-id="2">
						<div class="productBox__slider">
							<div class="owl-carousel slider2" id="owl-carousel-product">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
							</div>
						</div>
						<p class="productBox__title">
							ОТБЕЛИВАЮЩИЕ ПОЛОСКИ WHITE&SMILE DELICATE™
						</p>
						<p class="productBox__info">
							Формула деликатного отбеливания
							Результат отбеливания 2-4 тона за курс
							Безболезненно и комфортно
							Видимый результат уже после 3-х применений
							Стойкий эффект до 2-х месяцев
						</p>
						<p class="productBox__price">
							2 500 руб
						</p>
						<div class="productBox__line">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
						</div>
						<div class="productBox__btn">
							<a href="#" class="button JSaddToCart">Добавить в корзину</a>
						</div>
					</div>
				</div>
				<!-- /.sectionProduct__productBox -->
				<div class="sectionProduct__productBox">
					<div class="productBox" data-name="ОТБЕЛИВАЮЩИЕ ПОЛОСКИ WHITE&SMILE INTENSIVE" data-price="3 000" data-id="3">
						<div class="productBox__slider">
							<div class="owl-carousel slider2" id="owl-carousel-product">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
							</div>
						</div>
						<p class="productBox__title">
							ОТБЕЛИВАЮЩИЕ ПОЛОСКИ WHITE&SMILE INTENSIVE™
						</p>
						<p class="productBox__info">
							Формула глубокого отбеливания
							Результат отбеливания 3-5 тона за курс отбеливания
							Безболезненно и комфортно
							Видимый результат уже после 2-х применений
							Стойкий эффект до 3-х месяцев
						</p>
						<p class="productBox__price">
							3 000 руб
						</p>
						<div class="productBox__line">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
						</div>
						<div class="productBox__btn">
							<a href="#" class="button JSaddToCart">Добавить в корзину</a>
						</div>
					</div>
				</div>
				<!-- /.sectionProduct__productBox -->
				<div class="sectionProduct__productBox">
					<div class="productBox" data-name="БАМБУКОВЫЕ ЗУБНЫЕ ЩЕТКИ" data-price="350" data-id="4">
						<div class="productBox__slider">
							<div class="owl-carousel slider2" id="owl-carousel-product">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
							</div>
						</div>
						<p class="productBox__title">
							БАМБУКОВЫЕ ЗУБНЫЕ ЩЕТКИ
						</p>
						<p class="productBox__info">
							Антибактериальная бамбуковая ручка создает благоприятную микрофлору, которая препятствует размножению патогенных бактерий.
							Сочетание двух видов щетены: угольное волокно и нейлон - деликатно и эфективно удаляют зубной налет.
							Эко продукт - биоразлогаемый материал способствует защите экологии.
						</p>
						<p class="productBox__price">
							350 руб
						</p>
						<div class="productBox__line">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
						</div>
						<div class="productBox__btn">
							<a href="#" class="button JSaddToCart">Добавить в корзину</a>
						</div>
					</div>
				</div>
				<!-- /.sectionProduct__productBox -->
				<div class="sectionProduct__productBox">
					<div class="productBox" data-name="WHITE&SMILE SENSITIVE TEETH MOUSSE" data-price="1 000" data-id="5">
						<div class="productBox__slider">
							<div class="owl-carousel slider2" id="owl-carousel-product">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
								<img src="img/priceBox1.png" alt="" class="productBox__slide">
							</div>
						</div>
						<p class="productBox__title">
							WHITE&SMILE SENSITIVE TEETH MOUSSE™
						</p>
						<p class="productBox__info">
							Нитрат калия снижает чувствительность зубов 
							Фторид натрия укрепляет зубную эмаль
							Детергенты эффективно удаляют бактериальный налёт 
							Нормализуется кислотно-щелочной баланс полости рта
							Биоактивный комплекс борется с воспалением десен 
							Подходит для ежедневного использования
						</p>
						<p class="productBox__price">
							1 000 руб
						</p>
						<div class="productBox__line">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
							<img src="img/star.svg" alt="" class="productBox__star">
						</div>
						<div class="productBox__btn">
							<a href="#" class="button JSaddToCart">Добавить в корзину</a>
						</div>
					</div>
				</div>
				<!-- /.sectionProduct__productBox -->
			</div>
		</div>
	</section>
	<!-- /.sectionProduct -->
	<section class="sectionBrend" id="sectionBrend">
		<div class="sectionBrend__container container">
			<div class="sectionBrend__title">
				<h2 class="title">
					бренд 
					<span class="title__accent">
						White&SmIle
					</span>
				</h2>
			</div>
			<div class="sectionBrend__line">
				<div class="sectionBrend__blocks">
					<div class="techFeature">
						<p class="techFeature__title">
							Преимущества технологии осветления:
						</p>
						<div class="techFeature__list">
							<p class="techFeature__items">
								Эффект отбеливания от 2 до 10 тонов
							</p>
							<p class="techFeature__items">
								Экспресс сеанс от 15 минут
							</p>
							<p class="techFeature__items">
								Доступная цена от 1700 руб.
							</p>
							<p class="techFeature__items">
								Безопасно, безболезненно и комфортно
							</p>
							<p class="techFeature__items">
								Одобрено ФГБУ  Министерства здравоохранения РФ
							</p>
						</div>
						<div class="techFeature__btn">
							<a href="#" class="button JSopenConsult">
								получить консультацию
							</a>
						</div>
					</div>
				</div>
<!-- <div class="sectionBrend__blocks _video">
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/aJAoz2QeXwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->
</div>
</div>
</section>
<!-- /.sectionBrend -->
<section class="sectionSertificate" id="sectionSertificate">
	<div class="sectionSertificate__container container">
		<div class="sectionSertificate__title">
			<h2 class="title _small">
				Сертифицированный продукт
			</h2>
		</div>
		<p class="sectionSertificate__text">
			Продукция White&Smile™ <br>
			сертифицирована и легализована на территории РФ и СНГ
		</p>
		<div class="sectionSertificate__line">
			<div class="sectionSertificate__sertificateBox">
				<div class="sertificateBox">
					<img src="img/ser1.png" alt="" class="sertificateBox__image">
					<p class="sertificateBox__text">
						Сертификат соответствия геля, используемого в студии отбеливания
					</p>
				</div>
			</div>
			<div class="sectionSertificate__sertificateBox">
				<div class="sertificateBox">
					<img src="img/ser2.png" alt="" class="sertificateBox__image">
					<p class="sertificateBox__text">
						Сертификат соответствия Дента-косметики
					</p>
				</div>
			</div>
			<div class="sectionSertificate__sertificateBox">
				<div class="sertificateBox">
					<img src="img/ser3.png" alt="" class="sertificateBox__image">
					<p class="sertificateBox__text">
						Декларация Гель W&S
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.sectionSertificate -->
<section class="sectionQuestion" id="sectionQuestion">
	<div class="sectionQuestion__container container">
		<p class="sectionQuestion__title">
			У вас остались вопросы?
		</p>
		<a href="tel:+79032969582" class="sectionQuestion__phone">
			8 (903) 296 95 82
		</a>
		<p class="sectionQuestion__text">
			Мы с радостью на них ответим!
		</p>
	</div>
</section>
<!-- /.sectionQuestion -->
<footer class="footer">
	<div class="footer__container container">
		<div class="footer__line _withLine">
			<div class="navigation _black">
				<div class="navigation__items">
					<a href="#sectionAbout" class="navigation__link">О компании</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionFeatures" class="navigation__link">Преимущества</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionTech" class="navigation__link">Технология</a>
				</div>
				<div class="navigation__items">
					<a href="#" class="navigation__link">Акции</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionSertificate" class="navigation__link">Сертификаты</a>
				</div>
				<div class="navigation__items">
					<a href="#" class="navigation__link">Продукция</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionReview" class="navigation__link">Отзывы</a>
				</div>
				<div class="navigation__items">
					<a href="#sectionQuestion" class="navigation__link">Контакты</a>
				</div>
			</div>
		</div>
		<div class="footer__line">
			<p class="footer__policy">
				ВСЕ ПРАВА ЗАЩИЩЕНЫ
				КОПИРОВАНИЕ МАТЕРИАЛА
				ЗАПРЕЩЕНО
			</p>
			<div class="footer__elem">
				ELEMENt
			</div>
		</div>
	</div>
</footer>
<!-- /.footer -->
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/owlcarousel/owl.carousel.min.js"></script>

</html>