-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2020 г., 23:56
-- Версия сервера: 5.7.25
-- Версия PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lessonsphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Notebooks', 'public/images/1141197_1.jpg'),
(2, 'Tablets', 'public/images/samsung.png'),
(3, 'Phones', 'public/images/smartfon_xiaomi_redmi_go_8gb_blue_1019832_1.jpg'),
(4, 'Watches', 'public/images/1027510071.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `category`, `name`, `image`, `description`, `price`) VALUES
(1, '1', 'Ноутбук HP 15-rb026ur (4US47EA)', 'public/images/957639_1.jpg', 'Ноутбук HP 15-rb026ur A4 9120/4Gb/500Gb/Rad R3/15.6\" SVA HD/W10/black', 18590),
(2, '1', 'Ноутбук Acer Aspire A315-21-41P8 (NX.GNVER.096)', 'public/images/1141197_1.jpg', 'Ноутбук Acer Aspire A315-21-41P8 A4 9120e/4Gb/128Gb SSD/Rad R3/15.6\" HD/Linux/black', 16790),
(3, '3', 'Xiaomi Redmi Go 8GB Blue', 'public/images/smartfon_honor_7a_black_863405_1.jpg', ' Смартфон Xiaomi Redmi Go 8GB Blue в интернет-магазине, а также уточнить наличие в ближайшем пункте выдачи ОНЛАЙН ТРЕЙД.РУ, где купить товар будет удобнее всего.', 4990),
(4, '3', 'Honor 7A Black', 'public/images/smartfon_xiaomi_redmi_go_8gb_blue_1019832_1.jpg', 'Модель:Xiaomi Redmi Go Платформа:Android Операционная система:Android 8.0 Кол-во SIM-карт:2 шт. ', 5990);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`) VALUES
(1, 'Index', '?page=index'),
(2, 'Contacts', '?page=contacts'),
(3, 'About', '?page=about'),
(26, 'news', '?page=news'),
(27, 'faq', '?page=faq'),
(28, 'faq', '?page=faq'),
(29, 'faq', '?page=faq'),
(30, 'footsy', '?page=footsy');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'u1', '123'),
(2, 'u2', '321');

-- --------------------------------------------------------

--
-- Структура таблицы `users_carts`
--

CREATE TABLE `users_carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_carts`
--

INSERT INTO `users_carts` (`id`, `user_id`, `cart`) VALUES
(1, 1, '[\"1\", \"2\", \"2\", \"1\", \"2\", \"1\", \"1\", \"2\", \"2\", \"1\", \"1\", \"2\", \"2\", \"1\", \"1\", \"2\", \"1\", \"2\", \"1\", \"1\", \"2\", \"1\", \"2\", \"2\", \"1\", \"2\", \"1\", \"1\", \"2\", \"1\", \"1\", \"2\", \"1\", \"2\", \"1\", \"2\", \"2\", \"2\", \"1\", \"2\", \"2\", \"1\", \"1\", \"2\", \"1\", \"2\", \"1\", \"2\", \"1\", \"2\", \"2\", \"1\", \"2\", \"1\", \"2\", \"1\"]'),
(2, 2, 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `age`, `salary`) VALUES
(4, 'Коля', 30, 1000),
(89, 'апв', 44, 44),
(90, 'апв', 44, 44),
(91, 'апв', 44, 44),
(92, 'апв', 44, 44),
(93, 'апв', 44, 44),
(94, 'апв', 44, 44),
(95, 'апв', 44, 44);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_carts`
--
ALTER TABLE `users_carts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_carts`
--
ALTER TABLE `users_carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
