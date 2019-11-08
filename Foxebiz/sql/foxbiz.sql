-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 07 2019 г., 12:42
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

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
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL,
  `post_id` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`, `date`, `post_id`) VALUES
(6, 'Я', 'Я робот', '2019-11-07', '10'),
(7, 'ввв', 'ввв', '2019-11-07', '12');

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
(1, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'Economy', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'It', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(3, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(4, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(5, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(6, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(7, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(8, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2019-11-07', 'test', 'assets/data/image-demo/270x181.png', 'Maksim', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(9, 'test2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-11-07', 'lorem', 'assets/data/image-demo/270x181.png', 'Mali Sairus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(10, 'Развитие ИИ в наше время ', 'По мнению скептически настроенных граждан, уже в 2025-2030 годах многие люди потеряют работу из-за семимильного развития искусственного интеллекта. Эксперты в сфере разработок ИИ не спешат бить тревогу и считают, что уже в 2030 году мировой ВВП увеличится примерно на 15% за счет внедрения новых технологий. Увеличение эффективности производственных процессов даст прирост в районе 50%. Вторая половина дополнительной прибыли получается за счет внедрения технологий в современные продукты.', '2019-11-07', 'It', 'assets/post_img/ii.jfif', 'Aleksei Kromski', 'ИИ не спешат бить тревогу и считают, что уже в 2030 году мировой ВВП'),
(12, 'Листериоз унес жизнь еще одного', 'Все началось в ночь на 11 августа. Около 22 часов семья отправилась спать. Мужчина спал плохо, а около 3 часов ночи потрогал живот супруги и он оказался горячим. Женщина приняла жаропонижающее, сделала холодный компресс и выпила чай с медом. Температура спала и около 4.30 супруги заснули. Муж проснулся около 10 часов утра. У жены сильно болел живот и было небольшое кровотечение. Мужчина вызвал скорую и женщину увезли в Клинику Тартуского университета.\r\n\r\nДнем врачи сообщили, что сердечные ритмы у ребенка не прослеживаются. ”Для нас это была трагедия и мы не знали, почему это случилось”, — рассказывает мужчина.', '2019-11-07', 'City', 'assets/post_img/716c35dc3cb1f30a03-87997105.jpg', 'Aleksei Kromski', 'Все началось в ночь на 11 августа. Около 22 часов семья отправилась спать.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
