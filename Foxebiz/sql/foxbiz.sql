-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2019 г., 21:47
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `foxbiz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'All'),
(2, 'It'),
(3, 'Economy'),
(4, 'City'),
(5, 'Adventure');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL,
  `category` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `date`, `category`, `img`, `user`, `description`) VALUES
(1, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'It', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(3, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(4, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(5, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(6, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(7, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(8, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'Maksim', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(9, 'test2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-11-07', 'lorem', 'assets/data/image-demo/270x181.png', 'Mali Sairus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
