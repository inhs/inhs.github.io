<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		Neutron
	</title>
	<link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css') ?>">
</head>

<body>
	<div class="mobileMenu">
		<div class="mobileMenu__wrap">
			<div class="mobileMenu__closeBtn">
				<img src="img/close.svg" alt="" class="closeBtn jsCloseMenu">
			</div>
			<?php include "navigation.php";?>
		</div>
	</div>
	<div class="createAccount">
		<div class="createAccount__closeBtn">
				<img src="img/close-dark.svg" alt="" class="closeBtn jsCloseCA">
		</div>
		<div class="createAccount__wrap">
			<p class="createAccount__text">
				Creating New Account
			</p>
			<div class="createAccount__form">
				<form class="formRegist">
					<div class="formRegist__input">
						<div class="input">
							<img src="img/man-user.svg" alt="" class="input__icon">
							<input type="text" name="username" id="username" required class="input__input">
							<label for="username" class="input__label">Username</label>
						</div>
					</div>
					<div class="formRegist__input">
						<div class="input">
							<img src="img/email.svg" alt="" class="input__icon">
							<input type="email" name="email" id="email" class="input__input">
							<label for="email" class="input__label">Email</label>
						</div>
					</div>
					<div class="formRegist__input">
						<div class="input">
							<img src="img/lock.svg" alt="" class="input__icon">
							<input type="password" name="password" id="password" required class="input__input">
							<label for="password" class="input__label">Password</label>
						</div>
					</div>
					<div class="formRegist__input">
						<button class="button _formRegistBtn">Create accout</button>
					</div>
				</form>
				<div class="formResult">
					<img src="img/success.svg" alt="" class="formResult__icon _success">
				</div>
			</div>
		</div>
	</div>
	<div class="globalWrap">
		<header class="header">
			<div class="header__container">
				<div class="header__topLine">
					<div class="header__logo">
						<p class="logo">
							neutron<span class="logo__modify">Mail</span>
						</p>
					</div>
					<div class="header__items _desktopNav">
						<?php include 'navigation.php';?>
					</div>
					<div class="header__items">
						<div class="authorization">
							<div class="authorization__items">
								<img src="img/in.svg" alt="Log in image" class="authorization__icon">
								<p class="authorization__text">Log in</p>
							</div>
							<div class="authorization__items">
								<div class="button _smallBtn">Sign up</div>
							</div>
						</div>
					</div>
					<div class="header__items _menu-btn">
						<img src="img/menu.svg" alt="burger menu" class="menu-btn">
					</div>
				</div>
				<div class="header__language">
					<ul class="language">
						<li class="language__items">
							<a href="#" class="language__link _current-language">
								English
							</a>
						</li>
						<li class="language__items">
							<a href="#" class="language__link">
								French
							</a>
						</li>
						<li class="language__items">
							<a href="#" class="language__link">
								Italian
							</a>
						</li>
						<li class="language__items">
							<a href="#" class="language__link">
								Polish
							</a>
						</li>
					</ul>
				</div>
				<div class="header__midLine">
					<div class="header__mainTitle">
						<h1 class="mainTitle _big-title">
							Secure Email Communication
						</h1>
					</div>
					<p class="mainSubTitle">
						Based in <span class="mainSubTitle__modify">Somewhere</span>
					</p>
				</div>
				<div class="header__bottomLine">
					<div class="header__bottomLine-items">
						<div class="button jsCreateAccount">Create account</div>
					</div>
					<div class="header__bottomLine-items">
						<div class="button _icon-btn"><img src="img/apple.svg" alt="apple" class="button__icon"></div>
					</div>
					<div class="header__bottomLine-items">
						<div class="button _icon-btn"><img src="img/google-play.svg" alt="google play" class="button__icon">
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- /.header -->
		<section class="features">
			<div class="features__container">
				<div class="features__topLine">
					<div class="features__items">
						<div class="feature">
							<div class="feature__topLine">
								<img src="img/security.svg" alt="security" class="feature__icon">
								<div class="feature__name">
									<p class="feature__title">
										Swiss Privacy
									</p>
									<p class="feature__subtitle">
										Data Security and Neutrality
									</p>
								</div>
							</div>
							<p class="feature__desc">
								NeutronMail is incorporated in Somewhere and all our servers are located in Switzerland. This
								means
								all user data is
								protected by strict Swiss privacy laws.
							</p>
						</div>
					</div>
					<div class="features__items">
						<div class="feature">
							<div class="feature__topLine">
								<img src="img/locked.svg" alt="locked" class="feature__icon">
								<div class="feature__name">
									<p class="feature__title">
										Double Encryption
									</p>
									<p class="feature__subtitle">
										Automatic Email Security
									</p>
								</div>
							</div>
							<p class="feature__desc">
								All emails are secured automatically with end-to-end encryption. This means even we cannot
								decrypt
								and
								read your emails. As a result, your encrypted emails cannot
								be shared with third parties.
							</p>
						</div>
					</div>
					<div class="features__items">
						<div class="feature">
							<div class="feature__topLine">
								<img src="img/key.svg" alt="key" class="feature__icon">
								<div class="feature__name">
									<p class="feature__title">
										Anonymous Email
									</p>
									<p class="feature__subtitle">
										Protect Your Privacy
									</p>
								</div>
							</div>
							<p class="feature__desc">
								No personal information is required to create your secure email account. By default, we do not
								keep
								any IP logs which can be linked to your anonymous email account. Your privacy comes first.
							</p>
						</div>
					</div>
				</div>
				<div class="features__bottomLine">
					<h2 class="mainTitle _mgb">
						Physical Security
					</h2>
					<p class="features__text">
						NeutronMail's infrastructure resides in Europe's <span class="features__text _modify">most secure
						</span>
						datacenter,
						underneath 1000 meters of solid rock.
					</p>
				</div>
				<div class="features__button">
					Learn more about our security features
				</div>
			</div>
		</section>
		<!-- /.features -->
		<section class="device">
			<div class="device__container">
				<img src="img/clients.png" alt="clients" class="device__topLine">
				<div class="device__midLine">
					<div class="dots">
						<img src="img/dot.png" alt="dot" class="dots__items _current-dot-item">
						<img src="img/dot.png" alt="dot" class="dots__items">
						<img src="img/dot.png" alt="dot" class="dots__items">
					</div>
					<div class="quote">
						<p class="quote__text">
							A new email service being developed by a group from MIT and CERN promises to bring secure,
							encrypted email to the masses and keep sensitive information away from prying eyes.
						</p>
						<p class="quote__author">
							— Boston Herald
						</p>
					</div>
				</div>
				<img src="img/devices.png" alt="gadgets" class="bg-elem">
				<div class="device__bottomLine">
					<div class="device__title _mgb">
						<h3 class="smallTitle">
							Any device, anywhere
						</h3>
					</div>
					<p class="smallText _mgb">
						The NeutronMail inbox is optimized for productivity. Each detail within our secure email service is
						optimized to help you better read, organize, and send email.
					</p>
					<div class="download-btns">
						<img src="img/appstore.png" alt="app store" class="download-btns__items">
						<img src="img/google-play.png" alt="google play" class="download-btns__items">
					</div>
				</div>
			</div>
		</section>
		<!-- /.device -->
		<section class="privacy">
			<div class="privacy__container">
				<h3 class="smallTitle _mgb">
					Privacy is a fundamental human right.
				</h3>
				<p class="smallSubTitle _mgb">
					Your support helps us to protect privacy world-wide.
				</p>
				<div class="privacy__line">
					<div class="privacy__line-items">
						<div class="button"><img src="img/upload-to-cloud.svg" alt="cloud" class="button__icon _mgr">Upgraid
							to
							Paid
							Plan</div>
					</div>
					<div class="privacy__line-items">
						<div class="button _modifyBlueBtn"><img src="img/dollar-symbol.svg" alt="dollar"
								class="button__icon">Donate
						</div>
					</div>
				</div>
				<p class="privacy__smallinfo">
					Those, who help us secure your privacy
				</p>
				<img src="img/partners.png" alt="partners" class="partners">
			</div>
		</section>
		<!-- /.privacy -->
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__topLine">
					<div class="footer__contacts">
						<div class="contacts">
							<div class="contacts__items">
								<p class="contacts__name">
									General:
								</p>
								<p class="contacts__mail">
									contact@neutronmail.ch
								</p>
							</div>
							<div class="contacts__items">
								<p class="contacts__name">
									Media:
								</p>
								<p class="contacts__mail">
									media@neutronmail.ch
								</p>
							</div>
							<div class="contacts__items">
								<p class="contacts__name">
									Security:
								</p>
								<p class="contacts__mail">
									security@neutronmail.ch
								</p>
							</div>
							<p class="contacts__name">
								For support inquiries, please visit
							</p>
							<p class="contacts__mail _undr">
								neutronmail.com/support
							</p>
						</div>
					</div>
					<div class="footer__items _line">
						<div class="footerNav">
							<p class="footerNav__name">
								Company
							</p>
							<ul class="footerNav__list">
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Blog •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Team •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Careers •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Support •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Donate •
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__items">
						<div class="footerNav">
							<p class="footerNav__name">
								Legal
							</p>
							<ul class="footerNav__list">
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Imprint •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Privacy Policy •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Terms & Conditions •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Transparency Report •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Report Abuse •
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__items">
						<div class="footerNav">
							<p class="footerNav__name">
								NeutronMail
							</p>
							<ul class="footerNav__list">
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Pricing •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Security •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Shop •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Press/Media Kit •
									</a>
								</li>
								<li class="footerNav__items">
									<a href="#" class="footerNav__link">
										Onion Site •
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__socials">
					<ul class="socials">
						<li class="socials__items">
							<a href="#" class="socials__link">
								Facebook
							</a>
						</li>
						<li class="socials__items">
							<a href="#" class="socials__link">
								Twitter
							</a>
						</li>
						<li class="socials__items">
							<a href="#" class="socials__link">
								Google+
							</a>
						</li>
						<li class="socials__items">
							<a href="#" class="socials__link">
								Feedback Forum
							</a>
						</li>
						<li class="socials__items">
							<a href="#" class="socials__link">
								Reddit
							</a>
						</li>
					</ul>
				</div>
				<p class="footer__policy">
					© 2017 Neutron Technologies AG. All Rights Reserved.
				</p>
			</div>
		</footer>
		<!-- /.footer -->
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>