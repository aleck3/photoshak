-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2016 г., 01:00
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `photoshak`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(255) NOT NULL AUTO_INCREMENT,
  `img_category` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`img_id`, `img_category`, `img_desc`, `img_name`) VALUES
(7, 'Category One', 'Sample Title One', 'sample1.jpg'),
(8, 'Category One', 'Sample Title Two', 'sample2.jpg'),
(9, 'Category One', 'Sample Title Three', 'sample3.jpg'),
(10, 'Category Two', 'Sample Title Four', 'sample4.jpg'),
(11, 'Category Two', 'Sample Title Five', 'sample5.jpg'),
(12, 'Category Two', 'Sample Title Six', 'sample6.jpg'),
(13, 'Category One', 'Sample Image Seven', 'main_9001.jpg'),
(14, 'Category Two', 'Sample Title Eight', 'sample8.jpg'),
(15, 'Category One', '', 'sample9.jpeg'),
(16, 'Category Two', 'Sample Title Ten', 'sample10.jpeg'),
(17, 'Category One', 'Sample Image Next', 'sample11.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
