<?php
session_start();
$is_admin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;
?>

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
                            echo '<span style="color: white;">' . $_SESSION['username'] . '</span> | <a href="logout.php" style="color: white; text-decoration: underline;">Выйти</a>';
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
                            <li class="active"><a href="index.php">Главная</a></li>
                            <li><a href="pricing.php">Каталог</a></li>
                            <li><a href="about.php">О нас</a></li>
                            <li><a href="contact.php">Контакты</a></li>

                        </ul>

                        <div class="nav-and-card">
                            <div class="nav-item-user">
                                <img class="lupa" src="img/lupa.png" alt="" onclick="toggleSearch()">
                                <input type="text" class="search-input" placeholder="Найти:" value="" id="searchInput">
                            </div>

                            <div class="cart-container">
                                <img class="garbage" src="img/garbage.png" alt="" onclick="toggleCart()">
                                <div class="cart-items"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </header>

    <section id="featured">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/slides/cross.jpg" alt="" width="100%" height="687px" />
                    <div class="flex-caption">
                        <h3>Только ведущие бренды</h3>
                        <p>Большое разнообразие обуви на каждый случай</p>
                    </div>
                </li>
                <li>
                    <img src="img/slides/Ecology.jpg" width="100%" height="687px" alt="" />
                    <div class="flex-caption">
                        <h3>Только качественные материалы</h3>
                        <p>Сохраняйте природу вместе с нами!</p>
                    </div>
                </li>
                <li>
                    <img src="img/slides/Fly.jpg" alt="" height="687px" />
                    <div class="flex-caption">
                        <h3>Лёгкость и скорость - ключ к победе!</h3>
                        <p>Уверенность в каждом шаге.</p>
                    </div>
                </li>
            </ul>
        </div>


    </section>
    <section>
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

            <!-- Модальное окно для входа -->
            <div id="login-register-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <!-- Форма для входа -->
                    <form id="login-form" class="modal-form" action="login.php" method="post">
                        <a>АВТОРИЗАЦИЯ</a>
                        <input type="text" placeholder="Логин" name="username" required>
                        <input type="password" placeholder="Пароль" name="password" required>
                        <input type="submit" value="Войти">
                        <h5><a href="#" id="show-register">Ещё не зарегистрированы?</a></h5>
                    </form>
                </div>
            </div>

            <!-- Модальное окно для регистрации -->
            <div id="register-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <!-- Форма для регистрации -->
                    <form id="register-form" class="modal-form" action="register.php" method="post">
                        <a>РЕГИСТРАЦИЯ</a>
                        <input type="text" placeholder="Логин" name="username" required>
                        <input type="password" placeholder="Пароль" name="password" required>
                        <input type="submit" value="Зарегистрироваться">
                        <h5><a href="#" id="show-register2">Авторизоваться</a></h5>
                    </form>
                </div>

            </div>


            <!-- Модальное окно для добавления новости -->
            <div id="add-news-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <!-- Форма для добавления новости -->
                    <form id="add-news-form" class="modal-form" action="add_news.php" method="post">
                        <a>Добавление новости</a>
                        <input type="text" placeholder="Заголовок" name="title" required>
                        <textarea placeholder="Содержание" name="content" required></textarea>
                        <input type="date" name="date" required>
                        <input type="submit" value="Добавить">
                    </form>
                </div>
            </div>







            <!-- Модальное окно с сообщением об ошибке -->
            <div id="error-modal" class="modal" style="display: none;">
                <div class="modal-content">
                    <span id="close-modal" class="close">&times;</span>
                    <p>(⊙ _ ⊙ )</p>
                    <p> УПС...
                    <p>Что-то пошло не так.</p>
                    </p>
                </div>
            </div>







            <?php
            // Проверяем наличие параметра login_error в URL
            if (isset($_GET['login_error'])) {
                echo '<script>';
                echo 'document.getElementById("error-modal").style.display = "block";';
                echo '</script>';
            }
            ?>






            <div class="row service-v1 margin-bottom-40">
                <h1 class="alarm">ПОЧЕМУ СТОИТ ВЫБРАТЬ ИМЕННО НАС:</h1><br>
                <div class="col-md-4 md-margin-bottom-40">

                    <img class="img-responsive" src="img/service1.jpg" alt="">

                    <span>
                        <h2>Ответственный подход</h2>
                        <p>Следим за качеством обслуживания клиентов и всегда открыты к вашим предложениям или
                            сотрудничеству. </p>
                        <a href="#" class="btn more">Подробнее</a>
                    </span>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="img/service2.jpg" alt="">
                    <span>
                        <h2>Быстрая доставка</h2>
                        <p>Заказы никогда не задерживаются и приходят точно в срок. Вы можете быть уверены о его
                            созранности и целостности.</p>
                        <a href="#" class="btn more">Подробнее</a>
                    </span>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <img class="img-responsive" src="img/service3.jpg" alt="">
                    <span>
                        <h2>Оригинальные товары</h2>
                        <p>Сотрудничаем с представителями только официальных брендов. Каждая партия проходит процедуру
                            проверки качества.</p>
                        <a href="#" class="btn more">Подробнее</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/people.jpg" alt="" width="100%" />
                </div>
                <div class="col-md-8">
                    <div>
                        <h2><span>Добро пожаловать<span class="blue_text">в магазин по продаже обуви
                                    CROSSɅОГИЯ!</span></span></h2><span class="clear spacer_responsive_hide_mobile "
                            style="height:13px;display:block;"></span>
                        <p></p>
                        <p>У нас вы найдёте широкий выбор качественной и стильной обуви. В нашем ассортименте
                            представлены кроссовки для бега, фитнеса, повседневной носки и многие другие модели от
                            ведущих мировых брендов. Мы уверены, что среди нашего разнообразия каждый покупатель найдёт
                            пару кроссовок, которая будет идеально соответствовать его потребностям и предпочтениям.
                            Ждём вас в магазине!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="content">


        <div class="container">

            <div class="row">
                <div class="col-md-7">

                    <div class="block-heading-two">
                        <h3><span>CROSSɅОГИЯ</span></h3>
                    </div>
                    <p>Мы считаем, что наша история только началась, и мы стремимся к постоянному развитию и улучшению.
                        В будущем мы планируем расширить наш ассортимент, добавив новые бренды и модели, чтобы
                        удовлетворить все потребности наших клиентов. Мы также работаем над улучшением нашего сервиса,
                        чтобы сделать покупки у нас еще более удобными и приятными.
                        <br><br>Мы гордимся своими достижениями, но мы не собираемся останавливаться на достигнутом.
                    </p>
                    <p>Наша цель - стать не просто магазином, а настоящим мировым лидером в индустрии кроссовок и
                        уличной моды. Мы стремимся предложить своим клиентам не только лучшие товары, но и вдохновение и
                        культурный опыт. Мы будем продолжать искать новые способы улучшить нашу работу и удовлетворить
                        наших клиентов.</p>





                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">

                    <div class="latest-post-wrap pull-left">
                        <h3><span>Новости и обновления</span></h3>

                        <?php

                        include 'config.php'; // Подключение к базе данных
                        
                        // Запрос к таблице с новостями
                        $sql_news = "SELECT * FROM news";
                        $result_news = mysqli_query($conn, $sql_news);

                        // Проверка наличия новостей
                        if (mysqli_num_rows($result_news) > 0) {
                            // Вывод новостей
                            while ($row_news = mysqli_fetch_assoc($result_news)) {
                                echo "<div class='latest-post-wrap pull-left'>";
                                echo "<div class='post-item-wrap pull-left col-sm-6 col-md-12 col-xs-12'>";
                                echo "<img src='img/news-1.jpg' class='img-responsive post-author-img' alt=''>";
                                echo "<div class='post-content1 pull-left col-md-9 col-sm-9 col-xs-8'>";
                                echo "<div class='post-title pull-left'><a href='#'>" . $row_news['title'] . "</a></div>";
                                echo "<div class='post-meta-top pull-left'>";
                                echo "<ul>";
                                echo "<li><i class='fa fa-calendar'></i>" . $row_news['date'] . "</li>";
                                echo "</ul>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='post-content2 pull-left'>";
                                echo "<p>" . $row_news['content'] . "<br>";
                                echo "<span class='post-meta-bottom'><a href='#'></a></span>";
                                echo "</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "Новости отсутствуют.";
                        }

                        // Закрываем соединение с базой данных
                        mysqli_close($conn);
                        ?>



                        <!-- // !!!!!!!!!!!!!!!!!!!!!!!!!! -->
                        <?php if ($is_admin): ?>
                            <a href="#" id="open-add-news-modal">Добавить новость</a>
                        <?php endif; ?>

                        <!-- // !!!!!!!!!!!!!!!!!!!!!!!!!! -->

                    </div>
                </div>

            </div>

            <div class="row">
            </div>
        </div>

    </section>
    <div class="testimonial-area">
        <div class="testimonial-solid">
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                            <a href="#"></a>
                        </li>

                        <li data-target="#carousel-example-generic" data-slide-to="4" class="">
                            <a href="#"></a>
                        </li>

                        <li data-target="#carousel-example-generic" data-slide-to="5" class="">
                            <a href="#"></a>
                        </li>

                        <li data-target="#carousel-example-generic" data-slide-to="6" class="">
                            <a href="#"></a>
                        </li>



                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <p>Отличный выбор и быстрая доставка! Приобрел здесь свои любимые кроссовки уже не первый
                                раз.</p>
                            <p>
                                <b>- Алексей -</b>
                            </p>
                        </div>
                        <div class="item">
                            <p>Прекрасное обслуживание и качественная обувь. Очень рада своей покупке!</p>
                            <p>
                                <b>- Екатерина -</b>
                            </p>
                        </div>
                        <div class="item active">
                            <p>Мне очень понравилось обслуживание в этом магазине. Помогли подобрать идеальную модель,
                                которая подходит моим потребностям.</p>
                            <p>
                                <b>- Сергей -</b>
                            </p>
                        </div>
                        <div class="item">
                            <p>Магазин порадовал широким ассортиментом и доступными ценами. Спасибо за отличный сервис!
                            </p>
                            <p>
                                <b>- Михаил -</b>
                            </p>
                        </div>

                        <div class="item">
                            <p>Быстрая доставка и качественный товар. Отличный опыт покупки."</p>
                            <p>
                                <b>- Денис -</b>
                            </p>
                        </div>


                        <div class="item">
                            <p>Удобно заказать и получить кроссовки. Все быстро и четко!</p>
                            <p>
                                <b>- Артем -</b>
                            </p>
                        </div>


                        <div class="item">
                            <p>Отличный магазин! Купила кроссовки для бега - они идеально подошли.</p>
                            <p>
                                <b>- Анна -</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>