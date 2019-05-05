<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SampleCard</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>

<body>
	<div class="background"></div>
	<header class="header">
		<div class="header__container">
			<div class="header__box">
				<div class="header__topLine JSheaderTopLine JSelemStart" data-startSpeed="0">
					<div class="bigTitle">
						<p class="bigTitle__text">Welcome!</p>
					</div>
				</div>
				<div class="header__midLine JSheaderMidLine JSelemStart" data-startSpeed="300">
					<div class="title">
						<p class="title__text">
							Меня зовут Артём
						</p>
					</div>
				</div>
				<div class="header__bottomLine JSheaderBottomLine JSelemStart" data-startSpeed="600">
					<div class="mainText">
						<p class="mainText__text">
							и я web-разработчик
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->
	<section class="portfolio">
		<p class="portfolio__title">
			Мои работы
		</p>
		<div class="portfolio__container container">
			<div class="project first-project JSanimate" data-animateSpeed="300">
				<div class="description">
					<p class="description__title">
						New Providence
					</p>
					<p class="description__text">
						Адаптивная и кроссбраузерная <br> верстка Landing Page
					</p>
					<a href="NewProvidence/index.html" class="description__link">
						Перейти на сайт
					</a>
				</div>

			</div>
			<div class="project second-project JSanimate" data-animateSpeed="600">
				<div class="description">
					<p class="description__title">
						Iteks Company
					</p>
					<p class="description__text">
						Адаптивная и кроссбраузерная <br> верстка многостраничного сайта
					</p>
					<a href="iteks/index.html" class="description__link">
						Перейти на сайт
					</a>
				</div>
			</div>
			<div class="project third-project JSanimate" data-animateSpeed="600">
				<div class="description">
					<p class="description__title">
						Neutron
					</p>
					<p class="description__text">
						Адаптивная и кроссбраузерная <br> верстка лендинга
					</p>
					<a href="inhs.github.io/Neutron" class="description__link">
						Перейти на сайт
					</a>
				</div>
			</div>
		</div>
	</section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>

</html>