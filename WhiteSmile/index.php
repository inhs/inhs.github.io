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
						<button class="button JSsend">Отправить</button>
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
					<a href="product.php" class="navigation__link">Продукция</a>
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
					<menu class="navigation">
						<li class="navigation__items">
							<a href="#sectionAbout" class="navigation__link">О компании</a>
						</li>
						<li class="navigation__items">
							<a href="#sectionFeatures" class="navigation__link">Преимущества</a>
						</li>
						<li class="navigation__items">
							<a href="#sectionTech" class="navigation__link">Технология</a>
						</li>
						<li class="navigation__items">
							<a href="#" class="navigation__link">Акции</a>
						</li>
						<li class="navigation__items">
							<a href="#sectionSertificate" class="navigation__link">Сертификаты</a>
						</li>
						<li class="navigation__items">
							<a href="product.php" class="navigation__link">Продукция</a>
						</li>
						<li class="navigation__items">
							<a href="#sectionReview" class="navigation__link">Отзывы</a>
						</li>
						<li class="navigation__items">
							<a href="#sectionQuestion" class="navigation__link">Контакты</a>
						</li>
						<li class="navigation__items _call">
							<a href="#" class="navigation__link _call JSopenConsult">Заказать звонок</a>
						</li>
					</menu>
					<!-- /.navigation -->
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
	<section class="sectionFeatures">
		<div class="sectionFeatures__container container">
			<div class="sectionFeatures__items">
				<div class="feature">
					<img src="img/tick.svg" alt="" class="feature__icon">
					<p class="feature__text">мы сделали красивыми 100500 улыбок</p>
				</div>
			</div>
			<div class="sectionFeatures__items">
				<div class="feature">
					<img src="img/tick.svg" alt="" class="feature__icon">
					<p class="feature__text">более 300 довольных клиентов</p>
				</div>
			</div>
			<div class="sectionFeatures__items">
				<div class="feature">
					<img src="img/tick.svg" alt="" class="feature__icon">
					<p class="feature__text">мы получили более 200 благодарностей</p>
				</div>
			</div>
			<div class="sectionFeatures__items">
				<div class="feature">
					<img src="img/tick.svg" alt="" class="feature__icon">
					<p class="feature__text">большое количество отзывов</p>
				</div>
			</div>
			<div class="sectionFeatures__items">
				<div class="feature">
					<img src="img/tick.svg" alt="" class="feature__icon">
					<p class="feature__text">бесплатная консультация</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /.sectionFeatures -->
	<section class="sectionSmile">
		<div class="sectionSmile__container container">
			<div class="sectionSmile__title">
				<h2 class="title">
					Зачем мне 
					<span class="title__accent">
						красивая улыбка?
					</span> 
				</h2>
			</div>
			<div class="sectionSmile__box">
				<div class="sectionSmile__items">
					<div class="whyAnswer">
						<div class="whyAnswer__icon">
							<p class="whyAnswer__counter">
								1
							</p>
						</div>
						<div class="whyAnswer__info">
							<h3 class="whyAnswer__title">
								Улыбка улучшает отношения
							</h3>
							<p class="whyAnswer__text">
								Искренняя улыбка говорит людям о том, что нам можно верить, 
								и мы открыты к общению. Люди, которые нам улыбаются, 
								считываются нами как более щедрые и общительные. 
							</p>
						</div>
					</div>
				</div>
				<div class="sectionSmile__items">
					<div class="whyAnswer">
						<div class="whyAnswer__icon">
							<p class="whyAnswer__counter">
								2
							</p>
						</div>
						<div class="whyAnswer__info">
							<h3 class="whyAnswer__title">
								Улыбка помогает зарабатывать
							</h3>
							<p class="whyAnswer__text">
								Люди, которые работают в сфере услуг, получают большую 
								часть денег за свою улыбку. В ходе исследований ученые 
								установили, что на одинаковых должностях чаще 
								улыбающиеся люди зарабатывают на 40% больше своих 
								менее улыбчивых коллег. 
							</p>
						</div>
					</div>
				</div>
				<div class="sectionSmile__items">
					<div class="whyAnswer">
						<div class="whyAnswer__icon">
							<p class="whyAnswer__counter">
								3
							</p>
						</div>
						<div class="whyAnswer__info">
							<h3 class="whyAnswer__title">
								Улыбка продлевает жизнь!
							</h3>
							<p class="whyAnswer__text">
								Люди, которые улыбаются, живут дольше. Исследование 
								компании Abel&Kruger выявило, что из схожих по возрасту и 
								образу жизни людей те, кто чаще улыбаются, живут на 7 лет 
								дольше менее улыбчивых.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.sectionSmile -->
	<section class="sectionBrend">
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
				<div class="sectionBrend__blocks _video">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/aJAoz2QeXwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- /.sectionBrend -->
	<section class="sectionWhy" id="sectionFeatures">
		<div class="sectionWhy__container container">
			<div class="sectionWhy__title">
				<p class="title _white">
					Почему white&smile ?
				</p>
			</div>
			<div class="sectionWhy__items ">
				<img src="img/arrow-to-right.svg" alt="" class="sectionWhy__icon">
				<div class="sectionWhy__info">
					<p class="sectionWhy__smallTitle">
						Безопасно для зубов
					</p>
					<p class="sectionWhy__text">
						В состав нашей продукции не входят вещества, 
						разрушающие эмаль, такие как перекись 
						водорода. Отбеливание происходит с помощью 
						активного кислорода. Ваши зубы останутся 
						крепкими и здоровыми. 
					</p>
				</div>
			</div>
			<div class="sectionWhy__items _reverse">
				<img src="img/arrow-to-left.svg" alt="" class="sectionWhy__icon _reverse">
				<div class="sectionWhy__info">
					<p class="sectionWhy__smallTitle">
						Без боли
					</p>
					<p class="sectionWhy__text">
						Клиническое отбеливание в стоматологиях
						бывает весьма болезненным. Мы гарантируем 
						Вам полностью безопасное отбеливание зубов, 
						которое не причинит Вам никакого дискомфорта.
					</p>
				</div>
			</div>
			<div class="sectionWhy__items">
				<img src="img/arrow-to-right.svg" alt="" class="sectionWhy__icon">
				<div class="sectionWhy__info">
					<p class="sectionWhy__smallTitle">
						ДОСТУПНО!
					</p>
					<p class="sectionWhy__text">
						Инновационные разработки конгломерата
						французской White&Smile и итальянской InSmile, 
						а также популярность разработанных 
						материалов позволяют обеспечивать 
						доступность цен на процедуру отбеливания.
					</p>
				</div>
			</div>
			<div class="sectionWhy__btn">
				<a href="#" class="button JSopenConsult">Задать вопрос</a>
			</div>
		</div>
	</section>
	<!-- /.sectionWhy -->
	<section class="sectionEffect" id="sectionTech">
		<div class="sectionEffect__title">
			<h2 class="title">
				Эффект отбеливания по технологии White&Smile
			</h2>
		</div>
		<div class="sectionEffect__container container">
			<div class="sectionEffect__line">
				<div class="sectionEffect__effectBox">
					<div class="effectBox _first">
						<div class="effectBox__before">До</div>
						<div class="effectBox__after">После</div>
					</div>
				</div>
				<div class="sectionEffect__effectBox">
					<div class="effectBox _second">
						<div class="effectBox__before">До</div>
						<div class="effectBox__after">После</div>
					</div>
				</div>
			</div>
			<div class="sectionEffect_btn">
				<a href="#" class="button JSopenConsult _alt">Заказать консультацию</a>
			</div>
		</div>
	</section>
	<!-- /.sectionEffetc -->
	<section class="sectionReview" id="sectionReview">
		<div class="sectionReview__container container">
			<div class="sectionReview__title">
				<h2 class="title">
					<span class="title__accent">
						отзывы
					</span>
					наших клиентов
				</h2>
			</div>
			<div class="sectionReview__slider">
				<div class="owl-carousel slider1">
					<div class="sectionReview__reviewBox">
						<div class="reviewBox">
							<div class="reviewBox__photoWrap">
								<img src="img/review1.png" alt="" class="reviewBox__photo">
							</div>
							<div class="reviewBox__info">
								<p class="reviewBox__name">
									михаил дмитрович
								</p>
								<p class="reviewBox__date">
									Отзыв оставлен: 27.04.2019
								</p>
								<p class="reviewBox__text">
									После процедуры отбеливания Вы получите полезные рекомендации 
									по уходу за полостью рта, следуя которым сможете сохранить 
									рекомендации по уходу за полостью рта, следуя 
									своей белоснежной улыбкой. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores asperiores doloribus laudantium reiciendis, blanditiis odio animi veniam, provident perspiciatis eos, enim ut consequuntur laboriosam sint. Neque excepturi, dolorem ad. Tenetur?
								</p>
							</div>
						</div>
					</div>
					<div class="sectionReview__reviewBox">
						<div class="reviewBox">
							<div class="reviewBox__photoWrap">
								<img src="img/review1.png" alt="" class="reviewBox__photo">
							</div>
							<div class="reviewBox__info">
								<p class="reviewBox__name">
									михаил дмитрович
								</p>
								<p class="reviewBox__date">
									Отзыв оставлен: 27.04.2019
								</p>
								<p class="reviewBox__text">
									После процедуры отбеливания Вы получите полезные рекомендации 
									по уходу за полостью рта, следуя которым сможете сохранить 
									рекомендации по уходу за полостью рта, следуя 
									своей белоснежной улыбкой.
								</p>
							</div>
						</div>
					</div>
					<div class="sectionReview__reviewBox">
						<div class="reviewBox">
							<div class="reviewBox__photoWrap">
								<img src="img/review1.png" alt="" class="reviewBox__photo">
							</div>
							<div class="reviewBox__info">
								<p class="reviewBox__name">
									михаил дмитрович
								</p>
								<p class="reviewBox__date">
									Отзыв оставлен: 27.04.2019
								</p>
								<p class="reviewBox__text">
									После процедуры отбеливания Вы получите полезные рекомендации 
									по уходу за полостью рта, следуя которым сможете сохранить 
									рекомендации по уходу за полостью рта, следуя 
									своей белоснежной улыбкой. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores asperiores doloribus laudantium reiciendis, blanditiis odio animi veniam, provident perspiciatis eos, enim ut consequuntur laboriosam sint. Neque excepturi, dolorem ad. Tenetur?
								</p>
							</div>
						</div>
					</div>
					<div class="sectionReview__reviewBox">
						<div class="reviewBox">
							<div class="reviewBox__photoWrap">
								<img src="img/review1.png" alt="" class="reviewBox__photo">
							</div>
							<div class="reviewBox__info">
								<p class="reviewBox__name">
									михаил дмитрович
								</p>
								<p class="reviewBox__date">
									Отзыв оставлен: 27.04.2019
								</p>
								<p class="reviewBox__text">
									После процедуры отбеливания Вы получите полезные рекомендации 
									по уходу за полостью рта, следуя которым сможете сохранить 
									рекомендации по уходу за полостью рта, следуя 
									своей белоснежной улыбкой.
								</p>
							</div>
						</div>
					</div>
					<div class="sectionReview__reviewBox">
						<div class="reviewBox">
							<div class="reviewBox__photoWrap">
								<img src="img/review1.png" alt="" class="reviewBox__photo">
							</div>
							<div class="reviewBox__info">
								<p class="reviewBox__name">
									михаил дмитрович
								</p>
								<p class="reviewBox__date">
									Отзыв оставлен: 27.04.2019
								</p>
								<p class="reviewBox__text">
									После процедуры отбеливания Вы получите полезные рекомендации 
									по уходу за полостью рта, следуя которым сможете сохранить 
									рекомендации по уходу за полостью рта, следуя 
									своей белоснежной улыбкой.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.sectionReview -->
	<section class="sectionPrice">
		<div class="sectionPrice__container container">
			<div class="sectionPrice__title">
				<h2 class="title">
					СКОЛЬКО ЭТО <span class="title__accent">СТОИТ?</span>
				</h2>
			</div>
			<p class="sectionPrice__text">
				В зависимости от индивидуальных особенностей Ваших зубов и желаемого результата мы можем предложить Вам процедуры трех степеней интенсивности и ожидаемого результата
			</p>
			<div class="sectionPrice__line">
				<div class="sectionPrice__priceBox">
					<div class="priceBox">
						<p class="priceBox__title">
							Отбеливание
							«Экспресс»
						</p>
						<img src="img/priceBox1.png" alt="" class="priceBox__image">
						<p class="priceBox__text">
							1 процедура 15 минут
							Эффект отбеливания 2-4 тона 
						</p>
						<div class="priceBox__btn">
							<div class="button">
								Цена 2.500 руб
							</div>
						</div>
					</div>
				</div>
				<div class="sectionPrice__priceBox">
					<div class="priceBox">
						<p class="priceBox__title">
							Отбеливание
							«Экспресс»
						</p>
						<img src="img/priceBox1.png" alt="" class="priceBox__image">
						<p class="priceBox__text">
							1 процедура 15 минут
							Эффект отбеливания 2-4 тона 
						</p>
						<div class="priceBox__btn">
							<div class="button">
								Цена 2.500 руб
							</div>
						</div>
					</div>
				</div>
				<div class="sectionPrice__priceBox">
					<div class="priceBox">
						<p class="priceBox__title">
							Отбеливание
							«Экспресс»
						</p>
						<img src="img/priceBox1.png" alt="" class="priceBox__image">
						<p class="priceBox__text">
							1 процедура 15 минут
							Эффект отбеливания 2-4 тона 
						</p>
						<div class="priceBox__btn">
							<div class="button">
								Цена 2.500 руб
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sectionPrice__btn">
				<a href="#" class="button JSopenConsult _alt">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
			</div>
		</div>
	</section>
	<!-- /.sectionPrice -->
	<section class="sectionImportance" id="sectionAbout">
		<div class="sectionImportance__container container">
			<div class="sectionImportance__title">
				<h2 class="title _white">Lorem ipsum dolor sit amet</h2>
			</div>
			<p class="sectionImportance__text">
				Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Товарищи! консультация с широким активом влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Равным образом дальнейшее развитие различных форм деятельности требуют от нас анализа направлений прогрессивного развития.
			</p>
			<p class="sectionImportance__text">
				Повседневная практика показывает, что укрепление и развитие структуры позволяет оценить значение дальнейших направлений развития. Задача организации, в особенности же начало повседневной работы по формированию позиции способствует подготовки и реализации форм развития. Разнообразный и богатый опыт рамки и место обучения кадров влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Товарищи! постоянный количественный рост и сфера нашей активности играет важную роль в формировании форм развития.
			</p>
			<p class="sectionImportance__text">
				Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Товарищи! новая модель организационной деятельности требуют определения и уточнения модели развития. Идейные соображения высшего порядка, а также реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации систем массового участия. Равным образом новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития. Задача организации, в особенности же новая модель организационной деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. 
			</p>
		</div>
	</section>
	<!-- /.sectionImportance -->
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