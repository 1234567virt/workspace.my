-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 07 2018 г., 11:16
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php1level5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_galerey` int(2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `size` int(4) NOT NULL,
  `count` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `id_galerey`, `img`, `title`, `alt`, `size`, `count`) VALUES
(1, 1, '/public_html/img/j1.jpg', 'Катер современный', 'Катер', 30, 44),
(2, 1, '/public_html/img/j2.jpg', 'Испанский корабль', 'Каравела', 30, 97),
(3, 2, '/public_html/img/j3.jpg', 'Английский корабль', 'Линкор', 100, 7),
(4, 2, '/public_html/img/j4.jpg', 'Русский фрегат', 'Фрегат', 100, 60);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;