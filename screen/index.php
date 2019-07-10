<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css') ?>" />
</head>

<body class="body">
	<header class="header" data-vide-bg='img/video.mp4' data-vide-options="loop: true, muted: true, position: 50% 50%">
		<div class="header__wrapper">
			<div class="header__topLine">
				<img src="img/logo.png" alt="" class="header__logo">
				<div class="header__navigation">
					<?php include "core/navigation.php" ?>
				</div>
				<div class="header__socialLinks">
					<ul class="socialLinks">
						<li class="socialLinks__items">
							<a href="#" class="socialLinks__link">
								<img src="img/facebook.png" alt="" class="socialLinks__icon">
							</a>
						</li>
						<li class="socialLinks__items">
							<a href="#" class="socialLinks__link">
								<img src="img/whatsapp.png" alt="" class="socialLinks__icon">
							</a>
						</li>
						<li class="socialLinks__items">
							<a href="#" class="socialLinks__link">
								<img src="img/youtube.png" alt="" class="socialLinks__icon">
							</a>
						</li>
					</ul>
				</div>
				<div class="header__contacts">
					<a href="tel:+79651121447" class="header__phoneLink">+7 (965) 112-14-47</a>
					<a href="mailto:info@andreysnopkov.com" class="header__emailLink">info@andreysnopkov.com</a>
					<p class="header__requestCall">Заказать звонок</p>
				</div>
			</div>
			<div class="header__bottomLine">
				<div class="header__info">
					<div class="header__title">
						<h1 class="mainTitle">
							Студия <span class="mainTitle__accent">ФОТО и ВИДЕО</span> решений Андрея Снопкова
						</h1>
					</div>
					<p class="header__subTitle">
						С 2007 года проводим съемки любой сложности в Москве, России и зарубежом
					</p>
					<div class="header__line">
						<div class="header__button">
							<div class="button">
								Обсудить проект
							</div>
						</div>
						<p class="header__smallInfo">
							*Анимация вашего логотипа <br>
							в подарок с первым заказом
						</p>
					</div>
				</div>
				<div class="header__video">
					<div class="header__playBtn">
						<img src="img/play.svg" alt="" class="header__playIcon">
					</div>
					<p class="header__smallInfo _tac">
						Посмотрите видео о нашей студии <br>
						<span class="accent">
							1 мин. 23 сек.
						</span>
					</p>
				</div>
			</div>
		</div>
	</header>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/main.js?<?= filemtime('js/main.js') ?>"></script>

</html>
