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
								<li class="active"><a href="about.php">О нас</a></li>
								<li><a href="contact.php">Контакты</a></li>

							</ul>

							<div class="nav-and-card">
								<div class="nav-item-user">
									<img class="lupa" src="img/lupa.png" alt="" onclick="toggleSearch()">
									<input type="text" class="search-input" placeholder="Найти:" value=""
										id="searchInput">
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

				<!-- Модальное окно для виджета Яндекс карт -->
				<div id="mapModal" class="modal">
					<div class="modal-content">
						<span class="close">&times;</span>
						<!-- Виджет с картой -->
						<div style="position:relative; overflow:hidden;">
							<a href="https://yandex.ru/maps/org/yunona/1136416486/?utm_medium=mapframe&utm_source=maps"
								style="color:#eee; font-size:12px; position:absolute; top:0px;">Юнона</a>
							<a href="https://yandex.ru/maps/12/smolensk/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps"
								style="color:#eee; font-size:12px; position:absolute; top:14px;">Торговый центр в
								Смоленске</a>
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
					<div class="col-lg-12">
						<h2 class="pageTitle">О нас</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">

				<div class="about">

					<div class="row">
						<div class="col-md-12">
							<div class="about-logo">
								<h3>Мы потрясающая <span class="color">КОМАНДА</span></h3>
								<p>CROSSɅОГИЯ — это не просто магазин кроссовок. Мы — сообщество, созданное для
									любителей уличной моды и культуры. Наша история началась в 2024 году в России, когда
									трое друзей — Алексей, Иван и Михаил — решили объединить свою страсть к кроссовкам и
									моде, чтобы создать нечто уникальное.</p>
								<p>Мы гордимся тем, что наш магазин стал не просто торговым объектом, а настоящим
									центром для всех ценителей кроссовок, как из России, так и из других стран.
									Присоединяйтесь к нашему сообществу и давайте вместе вдохновляться миром кроссовок и
									уличной культуры!</p>
							</div>
						</div>
					</div>

					<hr>
					<br>

					<div class="row">
						<div class="col-md-4">

							<div class="block-heading-two">
								<h3><span>Why Choose Us?</span></h3>
							</div>
							<p>В 2024 году в России трое друзей - Алексей, Иван и Мария - объединили свои усилия и
								страсть к кроссовкам, чтобы создать нечто уникальное.<br /><br />Мы гордимся тем, что
								наша история привлекла к нам людей со всего мира, объединенных общей страстью к
								кроссовкам и уличной культуре. Присоединяйтесь к нашему сообществу и давайте вместе
								вдохновляться миром кроссовок и уличной культуры!</p>
						</div>
						<div class="col-md-4">
							<div class="block-heading-two">
								<h3><span>Часто задаваемые вопросы</span></h3>
							</div>

							<div class="panel-group" id="accordion-alt3">

								<div class="panel">

									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3"
												href="#collapseOne-alt3">
												<i class="fa fa-angle-right"></i> Какие способы оплаты вы принимаете?
											</a>
										</h4>
									</div>
									<div id="collapseOne-alt3" class="panel-collapse collapse">

										<div class="panel-body">

											Мы принимаем различные способы оплаты, включая банковские карты (Visa,
											Mastercard, American Express), электронные кошельки (Apple Pay, Google Pay),
											а также наличные при самовывозе из наших магазинов.
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3"
												href="#collapseTwo-alt3">
												<i class="fa fa-angle-right"></i> Могу ли я вернуть или обменять товар,
												если он мне не подошел?
											</a>
										</h4>
									</div>
									<div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Да, мы предоставляем возможность вернуть или обменять товар в течение
											определенного периода после покупки.
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3"
												href="#collapseThree-alt3">
												<i class="fa fa-angle-right"></i> Как быстро вы обрабатываете заказы?
											</a>
										</h4>
									</div>
									<div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Мы стремимся обрабатывать заказы как можно быстрее. Обычно заказы
											обрабатываются в течение 1-2 рабочих дней после получения оплаты. Время
											доставки зависит от выбранного вами способа доставки и вашего
											местоположения.
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-alt3"
												href="#collapseFour-alt3">
												<i class="fa fa-angle-right"></i> Есть ли у вас размеры для детей и
												подростков?
											</a>
										</h4>
									</div>
									<div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Да, мы имеем в наличии кроссовки для детей, подростков и взрослых.
											Независимо от вашего возраста или размера ноги, мы уверены, что найдем для
											вас подходящую пару.
										</div>
									</div>
								</div>
							</div>
							<!-- Accordion ends -->

						</div>

						<div class="col-md-4">
							<div class="block-heading-two">
								<h3><span>Наша статистика</span></h3>
							</div>
							<h6>Доставка товаров вовремя</h6>
							<div class="progress pb-sm">
								<!-- White color (progress-bar-white) -->
								<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40"
									aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
							<h6>Более 5000 довольных клиентов!</h6>
							<div class="progress pb-sm">
								<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
							<h6>100% гарантия на любую продукцию магазина</h6>
							<div class="progress pb-sm">
								<div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80"
									aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
							<h6>Количествор возвратов</h6>
							<div class="progress pb-sm">
								<div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30"
									aria-valuemin="0" aria-valuemax="100" style="width: 30%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
						</div>

					</div>



					<br>
					<!-- Our Team starts -->

					<!-- Heading -->
					<div class="block-heading-six">
						<h4 class="bg-color">Наши сотрудники</h4>
					</div>
					<br>

					<!-- Our team starts -->

					<div class="team-six">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- Team Member -->
								<div class="team-member">
									<!-- Image -->
									<img class="img-responsive" src="img/team1.jpg" alt="">
									<!-- Name -->
									<h4>Иван Иванов</h4>
									<span class="deg">Директор</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Team Member -->
								<div class="team-member">
									<!-- Image -->
									<img class="img-responsive" src="img/team2.jpg" alt="">
									<!-- Name -->
									<h4>Алексей Алексеев</h4>
									<span class="deg">Бухгалтер</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Team Member -->
								<div class="team-member">
									<!-- Image -->
									<img class="img-responsive" src="img/team3.jpg" alt="">
									<!-- Name -->
									<h4>Михаил Михайлович</h4>
									<span class="deg">Руководитель отдела продаж</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Team Member -->
								<div class="team-member">
									<!-- Image -->
									<img class="img-responsive" src="img/team4.jpg" alt="">
									<!-- Name -->
									<h4>Анатолий Анатольевич</h4>
									<span class="deg">Оператор техподдержки</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Our team ends -->


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
								<li><a href="#" data-placement="top" title="Instagram"><i
											class="fa fa-instagram"></i></a>
								</li>
								<li><a href="#" data-placement="top" title="Google"><i
											class="fa fa-google-plus"></i></a>
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
</body>

</html>