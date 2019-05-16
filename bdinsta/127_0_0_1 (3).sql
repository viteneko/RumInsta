-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2019 г., 03:38
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `instagram`
--
CREATE DATABASE IF NOT EXISTS `instagram` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `instagram`;

-- --------------------------------------------------------

--
-- Структура таблицы `insta`
--

CREATE TABLE `insta` (
  `email` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `login` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `insta`
--

INSERT INTO `insta` (`email`, `name`, `login`, `password`, `id`) VALUES
('kke@gmail.com', 'Artem', 'The_Best', 'yaluchsii1', 16),
('setter@gmail.com', 'Kageyama Tobio', 'No_1', 'hinataboke123', 17),
('moloko@gmail.com', 'Rumyantseva Daiaana', 'RumVrum', 'craig1222', 18),
('vitenka222l@gmail.com', 'Victor Chelkash', 'helpmeplz', 'pain1011', 19),
('burnashiev17@mail.ru', 'angelina', 'victor', '1006', 21),
('', '', '', '', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `text_post` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`text_post`, `img`, `id`) VALUES
('sxc ', '1.jpg', 23),
('lol', '1.jpg', 24),
('mda', '1.jpg', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `text_post` varchar(355) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `text_post`, `user_id`, `post_img`) VALUES
(1, 'today i will die', 1, 'images/tobio.jpg'),
(4, 'tomorrow i will fly', 2, 'images/back.jpg'),
(5, 'scdf vb', 3, 'images/img1.jpg'),
(7, 'yo', 4, 'images/lola.png'),
(8, 'lol', 2, 'images/kek.jpg'),
(22, 'lololol', 3, 'images/img4.jpg'),
(23, 'how r u', 1, 'images/img2.jpg'),
(25, 'hi', 3, 'images/img3.jpg'),
(27, 'querk', 2, 'images/hm.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `username` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `avatar` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `password`, `avatar`) VALUES
(1, 'setter@gmail.com', 'Tobio', 'Milky', 'hinataboke', 'images/tobio.jpg'),
(2, 'vitenka222l@gmail.com', 'Victor', 'Chelkash', 'gdemoismislshisni', 'images/victor.png'),
(3, 'progr@gmail.com', 'Ilya', 'klava', 'boredbyjs', 'images/ilya.jpg'),
(4, 'thanks@gmail.com', 'Lola', 'Rainbow', 'ilovepony', 'images/lola.png'),
(5, 'setter@gmail.com', 'daiaana', 'moloko', '123', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `insta`
--
ALTER TABLE `insta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `insta`
--
ALTER TABLE `insta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
