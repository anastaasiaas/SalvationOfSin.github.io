-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 30 2020 г., 12:45
-- Версия сервера: 10.1.40-MariaDB
-- Версия PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `qwer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`name`, `comment`, `data`) VALUES
('Nastya', 'jifnhv dihcuw;jd', 'Saturday 30th of May 2020 12:40:21 PM');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_status`, `password`) VALUES
(1, 'Nastya', 'Solyanik', 'solyanik@gmail.com', 0, '6518840be21e94f8b85af12bb802670b'),
(2, 'jrefrtg', 'wjrofiuj', 'solyanik111@gmail.com', 0, '6518840be21e94f8b85af12bb802670b'),
(3, 'Nastya', 'Solyanik', 'solyanik22@gmail.com', 0, '6bc28227045001127b88b4577cfdc902'),
(4, 'klmjoik', 'kipo,mp,', 'solyanik111111@gmail.com', 0, '4828140403f6eaee3b5af62a0b09ae61'),
(5, 'ke,giop', 'orelkok', 'solyanikkk@gmail.com', 0, '4828140403f6eaee3b5af62a0b09ae61'),
(6, 'hju9j', ';&#039;l.p[;lp', 'solyanik2@gmail.com', 0, '08328fb45f8471397ca6142961fa4c13'),
(7, 'huiuihuj', 'joijuuoij', 'solianik@gmail.com', 0, '12e5f54acd687ab6dbc57831fdc4c0ff'),
(8, 'дблд', 'жїхж', 'solyaniik@gmail.com', 0, 'bf9aad88102327883955a37fddb5fbd9'),
(9, 'Nastya', 'Solyanik', 'anastasia2@gmail.com', 0, '4828140403f6eaee3b5af62a0b09ae61'),
(10, 'Admin', 'Admin', 'admin@gmail.com', 0, '113301bf7e9a7fe333e553602c206f82');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
