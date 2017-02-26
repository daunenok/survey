-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2017 г., 11:22
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `survey`
--

-- --------------------------------------------------------

--
-- Структура таблицы `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `voted_a` int(11) NOT NULL,
  `voted_b` int(11) NOT NULL,
  `voted_c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `survey`
--

INSERT INTO `survey` (`id`, `question`, `option_a`, `option_b`, `option_c`, `voted_a`, `voted_b`, `voted_c`) VALUES
(1, 'Do you believe in UFOs?', 'Yes', 'No', 'Maybe', 1, 5, 3),
(2, 'Are you healthy?', 'Yes, fairly', 'So so', 'I\'m a tub of lard', 2, 1, 1),
(3, 'Do you like Facebook?', 'Yes, it\'s brilliant!', 'It\'s OK', 'In no case', 1, 1, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
