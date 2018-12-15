 Хост: localhost
-- Время создания: Дек 15 2018 г., 13:07
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
-- Структура таблицы `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id_product`, `id_user`, `product_name`, `count`) VALUES
(,, , )


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
(, ,, , , , )

-- --------------------------------------------------------

-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `count` int(4) NOT NULL,
  `number` int(8) DEFAULT NULL,
  `price` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `src`, `name`, `text`, `count`, `number`, `price`) VALUES
(, ,, , , , )


-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_login` varchar(50) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `u_call` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user_login` (`user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `user_login`, `user_password`, `u_call`) VALUES
(, , ,, )
