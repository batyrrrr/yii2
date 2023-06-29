-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2023 г., 15:06
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `it-park`
--

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `bgimg` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_kk` varchar(255) NOT NULL,
  `subtitle_ru` varchar(255) DEFAULT NULL,
  `subtitle_kk` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `bgimg`, `category_id`, `title_ru`, `title_kk`, `subtitle_ru`, `subtitle_kk`, `status`) VALUES
(4, 'construction-1.jpg', 5, 'Наши проекты', 'Біздің проекттер', 'Следует предположить, что следствием свободного является его удовольствие и обязанности врага, который либо избегает обвинения архитектора, либо является отличием.', 'Еркіннің әсері оның ләззаты мен сәулетшінің айыптауынан құтылатын немесе ерекшеленетін жаудың міндеттері деп болжауға болады.', 1),
(5, 'construction-2.jpg', 6, '', '', '', '', 1),
(6, 'remodeling-1.jpg', 6, '', '', '', '', 1),
(7, 'remodeling-3.jpg', 8, '', '', '', '', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
