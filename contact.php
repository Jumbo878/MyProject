<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CROSSɅОГИЯ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<link rel="icon" href="img/danya_3.ico" />
	<script src="js/headfocus.js" defer></script>

</head>

<body>
<div id="wrapper">

<header>
	<div class="sale" onclick="redirectToPage()"><a>ЛЕТНЯЯ РАСПРОДАЖА ☀️ СКИДКА -25% ☀️ </a></div>
	<div class="main-header">
		<ul>
			<li class="main-item">
				<a href="tel:+88887777777">+8(888) 777-77-77 звонок бесплатный</a>
			</li>
			<li class="main-item">
				<a href="#" id="showMap">Работаем с 10:00 до 21:00 по МСК</a>
			</li>
			<li class="main-item" id="user-info" style="display: none;">
				<!--информация о пользователе -->
			</li>
			<li class="main-item-right" id="login-register-li">
				
				<?php
				session_start();
				if (isset($_SESSION['username'])) {
					// Если пользователь авторизован, отображаем имя пользователя и кнопку "Выйти"
					echo '<span style="color: white;">' . $_SESSION['username'] . '</span> | <a href="logout.php" style="color: white;">Выйти</a>';
				} else {
					// Если пользователь не авторизован, отображаем форму для входа
					echo '<a href="#" id="login-register-link">Войти/Зарегистрироваться</a>';
				}
				?>
			</li>
		</ul>
	</div>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="img/Logotype.png" alt="logo" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="pricing.php">Каталог</a></li>
							<li><a href="about.php">О нас</a></li>
							<li class="active"><a href="contact.php">Контакты</a></li>

						</ul>

						<div class="nav-and-card">
							<div class="nav-item-user">
								<img class="lupa" src="img/lupa.png" alt="" onclick="toggleSearch()">
								<input type="text" class="search-input" placeholder="Найти:" value="" id="searchInput">
							</div>

							<div class="cart-container">
								<img class="garbage" src="img/garbage.png" alt="">
								<div class="cart-items"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
	</div>
	</header>
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">Наши контакты</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="content">

		<div class="container">

			<!-- Модальное окно для виджета Яндекс карт -->
			<div id="mapModal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<!-- Виджет с картой -->
					<div style="position:relative; overflow:hidden;">
						<a href="https://yandex.ru/maps/org/yunona/1136416486/?utm_medium=mapframe&utm_source=maps"
							style="color:#eee; font-size:12px; position:absolute; top:0px;"></a>
						<a href="https://yandex.ru/maps/12/smolensk/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps"
							style="color:#eee; font-size:12px; position:absolute; top:14px;"></a>
						<iframe
							src="https://yandex.ru/map-widget/v1/org/yunona/1136416486/?ll=32.050195%2C54.777191&z=18.2"
							width="100%" height="400" frameborder="0" allowfullscreen="true"
							style="position:relative; margin-left: 0px;"></iframe>
					</div>
				</div>
			</div>

			<div id="login-register-modal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<!-- Форма для ввода логина и пароля -->
					<form id="login-register-form" class="modal-form">
						<a>АВТОРИЗАЦИЯ</a>
						<input type="text" placeholder="Логин" name="username" id="login-username" required>
						<input type="password" placeholder="Пароль" name="password" id="login-password" required>
						<input type="submit" value="Войти">
						<h5><a href="#">Ещё не зарегистрированы?</a></h5>
					</form>
				</div>
			</div>


			<div id="register-modal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<!-- Форма для регистрации -->
					<form id="register-form" class="modal-form">
						<a>РЕГИСТРАЦИЯ</a>
						<input type="text" placeholder="Логин" name="username" id="login-username" required>
						<input type="password" placeholder="Пароль" name="password" id="login-password" required>

						<input type="submit" value="Зарегистрироваться">
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<p>Напишите нам:</p>
					<div class="alert alert-success hidden" id="contactSuccess">
						<strong>Success!</strong> Your message has been sent to us.
					</div>
					<div class="alert alert-error hidden" id="contactError">
						<strong>Error!</strong> There was an error sending your message.
					</div>
					<div class="contact-form">
						<form id="contact-form" role="form" novalidate="novalidate">
							<div class="form-group has-feedback">
								<label for="name">Имя*</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="">
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="email">Email*</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="">
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="subject">Тема*</label>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="">
								<i class="fa fa-navicon form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="message">Сообщение*</label>
								<textarea class="form-control" rows="6" id="message" name="message"
									placeholder=""></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<input type="submit" value="Отправить" class="btn btn-default">
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div style="position:relative; overflow:hidden;">
						<a href="https://yandex.ru/maps/org/yunona/1136416486/?utm_medium=mapframe&utm_source=maps"
							style="color:#eee; font-size:12px; position:absolute; top:0px;"></a>
						<a href="https://yandex.ru/maps/12/smolensk/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps"
							style="color:#eee; font-size:12px; position:absolute; top:14px;"></a>
						<iframe
							src="https://yandex.ru/map-widget/v1/org/yunona/1136416486/?ll=32.050195%2C54.777191&z=18.2"
							width="100%" height="500" frameborder="0" allowfullscreen="true"
							style="position:relative; margin-left: 0px;"></iframe>
					</div>
				</div>
			</div>
		</div>

	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Контакты</h5>
						<address>
							<strong>Магазин кроссовок</strong><br>
							Расположен в Смоленске<br>
						</address>
						<p>
							<i class="icon-phone"></i> +7 (900)-999-99-99 <br>
							<i class="icon-envelope-alt"></i> email@domainname.com
						</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Навигация по сайту</h5>
						<ul class="link-list">
							<li><a href="#">Главная</a></li>
							<li><a href="#">Каталог</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Контакты</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Информация</h5>
						<ul class="link-list">
							<li><a href="#">Инфо1</a></li>
							<li><a href="#">Инфо1</a></li>
							<li><a href="#">Инфо1</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Информация</h5>
						<ul class="link-list">
							<li><a href="#">Инфо1</a></li>
							<li><a href="#">Инфо1</a></li>
							<li><a href="#">Инфо1</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							<p>
								<span>&copy; CROSSɅОГИЯ</span><a href="#" target="_blank"> - магазин кроссовок</a>
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="ВКонтакте"><i class="fa fa-vk"></i></a></li>
							<li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li><a href="#" data-placement="top" title="Google"><i class="fa fa-google-plus"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/validate.js"></script>
</body>

</html>