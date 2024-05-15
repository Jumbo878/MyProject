-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2024 г., 00:52
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cross`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`) VALUES
(1, 'Пополнение коллекции!', 'Новое поступление обуви от ведущих брендов Nike и Adidas.', '2024-05-01'),
(2, 'Скидка 25% на любой товар!', 'Не упустите этот шанс обновить свою обувную коллекцию по выгодной цене!', '2024-04-30'),
(3, 'Новое и только новое!', 'Только новое и новое! Лучшие спортивные товары! ', '2024-05-01'),
(4, 'У нас новое поступление ТЕСТ', 'УРАААААА', '2024-05-02');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `size`) VALUES
(5, 'New Balance C-ms574', 'Идеально подойдут для активного образа жизни.', '9999.99', './img/card5.png', '40'),
(6, 'Nike Dunk Low SP', 'Их яркий дизайн подчеркнет ваш индивидуальный стиль.', '11999.00', './img/7.png', '36'),
(7, 'Converse Chuck 70 High', 'Converse Chuck 70 High -Никогда не выходят из моды.', '8999.00', './img/sneaker1.png', '38'),
(8, 'adidas Yeezy Foam RNNR', 'Кроссовки adidas Yeezy Foam RNNR - легкие и удобные.', '21900.00', './img/9.png', '41'),
(9, 'Nike Air Max Plus', 'Nike Air Max Plus - культовые кроссовки с уникальным воздушным амортизатором.', '13999.00', './img/1.png', '42'),
(10, 'New Balance 574 YURT', 'Кроссовки New Balance 574 YURT - отличный выбор для повседневной носки.', '10900.00', './img/2.png', '43'),
(11, 'adidas Campus 00s', 'Кроссовки adidas Campus 00s - стильные и удобные. Лучшие из лучших.', '7900.00', './img/3.png', '37'),
(12, 'Jordan 1 Retro Low Golf', 'Jordan 1 Retro Low Golf - кроссовки, созданные для активного образа жизни. ', '19900.00', './img/5.png', '45'),
(13, 'adidas Yeezy Foam RNNR', 'Кроссовки adidas Yeezy Foam RNNR - уникальный дизайн.', '21900.00', './img/8.png', '46'),
(14, 'Converse Chuck Taylor All-Star 70 Hi', 'Кроссовки Converse Chuck Taylor All-Star 70 Hi лучший выбор для уличных модников.', '25000.00', './img/4.png', '40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `username`, `password`) VALUES
(8, 'Admin', '$2y$10$5/kzJsg5LCqVomb5n6tAYObZKYyy7SidvKBZDFuqRnlC0r7YU/lAS'),
(9, 'SANAN', '$2y$10$7LVjF0twoT8NNC2EX3pB/edBgpSV1APo7rEZ..Y9H7Z1T3kTp82yy'),
(12, '1', '$2y$10$7EAn2cd265Hdnd0MD7EiOucDjMqlsYBM/iCFsfmCpPmVUtqQSEmmu'),
(13, 'BANAN', '$2y$10$M7T.s.utuUJ81LJASi4CBeO.whU/W8HZth73Phjfd6QHsSMJhfLX.'),
(14, '2', '$2y$10$IUkIocBOAstCKEhCAHCDLecyF1xsyDSuJ7JD3G0WwC1WjiKI.EyTS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
