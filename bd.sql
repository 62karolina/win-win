-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2017 at 03:25 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tower`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `procent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `price`, `type`, `image`, `procent`) VALUES
(1, 'case', 100, 'def', 'http://214010.selcdn.ru/ranbox/box/box1.png', 0),
(2, 'def', 500, 'def', 'http://214010.selcdn.ru/ranbox/box/box2.png', 0),
(3, 'def', 1000, 'def', 'http://214010.selcdn.ru/ranbox/box/box3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE IF NOT EXISTS `deliver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `item1` int(11) NOT NULL,
  `item2` int(11) NOT NULL,
  `item3` int(11) NOT NULL,
  `item4` int(11) NOT NULL,
  `item5` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tracking` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`id`, `user`, `item1`, `item2`, `item3`, `item4`, `item5`, `status`, `tracking`, `created_at`, `updated_at`) VALUES
(1, 1695, 8, 21, 0, 0, 0, 0, 'RF0000CN', '2017-04-18 17:37:56', '2017-04-18 21:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postalcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kvartira` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `user`, `name`, `country`, `city`, `postalcode`, `dom`, `kvartira`, `street`, `updated_at`, `created_at`) VALUES
(1, 1695, 'eyJpdiI6Ilpxbms4ZXhNQ1NPUTErUU9pNG9USHc9PSIsInZhbHVlIjoieUw4NG13R29wVTcySE1nOEU0TlNrdz09IiwibWFjIjoiYmE3OTQxMTQ2ZTY0MGJlOTExNGNiYzZlMDc2ODQ3YjgwOGQ2Zjg2OWVmZTRiMzZhM2FmMmYxNjVhZTk5NjllYiJ9', 'eyJpdiI6IjcxV0ZlcWg0Q1wvK3hUVjRJYlIxeHlRPT0iLCJ2YWx1ZSI6Imh4QXhnR015ZmR6V2NNd1wvZ2Vqak1nPT0iLCJtYWMiOiJhZDAwNzdhNGMzZmQxNmEwNmM1MTI0NzgwOTA3NjM0ODg2ZmY5ZTdjZThmMDFhOTJiNTZiMjRmZDdjODYwZGFjIn0=', 'eyJpdiI6IlZFY0VEb2gwcGw4TVN3Rkh3UGh0QVE9PSIsInZhbHVlIjoiRG15aFRPRkpZbVFFT3JqckhUVFRPdz09IiwibWFjIjoiNTMzMmU4MzRmNzYzNDlhOTI3YjRiZWQ1NjkzYzBiZTU3YWMzNWIzNjMxOWFkODdiOWJlZGVhNzAyNTI4MjVkNyJ9', 'eyJpdiI6Ik45aXVQSW5UdEpqVjJCNkNKMVRXMlE9PSIsInZhbHVlIjoiWVR1RHRSU3gxWlQ1VVVKTlFuYitWUT09IiwibWFjIjoiMjZiNDA0MzJjYTVlZWY2MjZiOTdhMDcyYjc3Nzc4MzY3ZGZlYmVmYzMxZWUxMDNhYzFiNGMwOTg0NGE5ZjQwNCJ9', 'eyJpdiI6ImpLcVF0cjArYWMzMlMzTzM4dTFSOWc9PSIsInZhbHVlIjoiSGJEZFJXNVVXUkI5WWR1NU5tdFZndz09IiwibWFjIjoiNGFjZDkyODgwNTljMmZlNzU4ZGM0NThiZGRlYjg3NGQ4MzVmMjIwOTczYmIzMmVhNzRmOWM4ZTY3ZWE4YTE1MiJ9', 'eyJpdiI6Ikc4V0VXWVZzQ0loNkdKRnFyQTlDUVE9PSIsInZhbHVlIjoiUHVFWlFoTmhFRDdJVEZtbHFlSVVMZz09IiwibWFjIjoiNGFhYmMxZDYzY2ZlMmZkNjFjOGU2MmE5MWQwMjZiM2U4N2NmYjUxMDhiYThiZWQxNmU2OGU1NWRjMDBiZTdmOSJ9', 'eyJpdiI6ImFoQWVXcFpcL2lCZ2tTUFVrQXJUUDdRPT0iLCJ2YWx1ZSI6IlJ3aW93VVA3Q25UeE1Mc3RpRnVDajNCMVZSN3pDdHNZQ2JUXC9PYlwvOVhhbz0iLCJtYWMiOiI5NjNmNjYwZGQ1ODhmOGM3Y2ExYjM3NGY0YTkwMWUwMWU0ZjM4YzRiYjI3MGVjNDJlMzc1OTAxMmI4MWU4ZTY2In0=', '2017-04-18 21:09:13', '2017-04-18 21:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `case` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `win_item` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `case` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `item`, `user`, `case`, `status`) VALUES
(1, 8, 1695, 1, 2),
(2, 21, 1695, 1, 2),
(3, 6, 1695, 1, 1),
(4, 14, 1667, 1, 1),
(5, 6, 1667, 1, 1),
(6, 17, 1667, 1, 1),
(7, 7, 1667, 1, 1),
(8, 18, 1667, 1, 1),
(9, 36, 1667, 2, 1),
(10, 41, 1667, 3, 1),
(11, 27, 1667, 2, 1),
(12, 18, 1695, 1, 1),
(13, 24, 1667, 2, 1),
(14, 16, 1695, 1, 1),
(15, 13, 1695, 1, 1),
(16, 13, 1695, 1, 1),
(17, 9, 1695, 1, 1),
(18, 16, 1695, 1, 1),
(19, 6, 1695, 1, 1),
(20, 12, 1695, 1, 1),
(21, 4, 1695, 1, 1),
(22, 9, 1695, 1, 1),
(23, 14, 1695, 1, 1),
(24, 17, 1695, 1, 1),
(25, 16, 1695, 1, 1),
(26, 3, 1695, 1, 1),
(27, 14, 1695, 1, 1),
(28, 3, 1695, 1, 1),
(29, 1, 1695, 1, 1),
(30, 12, 1695, 1, 1),
(31, 10, 1695, 1, 1),
(32, 8, 1695, 1, 1),
(33, 16, 1695, 1, 1),
(34, 11, 1695, 1, 1),
(35, 16, 1695, 1, 1),
(36, 18, 1695, 1, 1),
(37, 10, 1695, 1, 1),
(38, 14, 1695, 1, 1),
(39, 14, 1695, 1, 1),
(40, 4, 1695, 1, 1),
(41, 15, 1695, 1, 1),
(42, 18, 1695, 1, 1),
(43, 17, 1695, 1, 1),
(44, 41, 1695, 3, 1),
(45, 41, 1695, 3, 1),
(46, 42, 1695, 3, 1),
(47, 42, 1695, 3, 1),
(48, 4, 1667, 1, 1),
(49, 10, 1667, 1, 0),
(50, 19, 1667, 1, 0),
(51, 11, 1667, 1, 0),
(52, 43, 1695, 3, 1),
(53, 41, 1695, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'def',
  `image` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `type`, `image`, `case`) VALUES
(1, 'Нож кредитка', 60, 'def', 'http://214010.selcdn.ru/ranbox/items/9_medium.png', 1),
(2, 'USB гибкая лампа', 80, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_led_medium.png', 1),
(3, 'Наушники JBL2', 150, 'def', 'http://214010.selcdn.ru/ranbox/items/jbl_headphone_medium.png', 1),
(4, 'USB-кабель Android', 95, 'def', 'http://214010.selcdn.ru/ranbox/items/android_cable_medium.png', 1),
(5, 'Наушники Beats Tour', 110, 'def', 'http://214010.selcdn.ru/ranbox/items/beats_tour_almaz_medium.png', 1),
(6, 'Светящийся браслет', 90, 'def', 'http://214010.selcdn.ru/ranbox/items/led_braslet_medium.png', 1),
(7, 'Чехол со львом', 80, 'def', 'http://214010.selcdn.ru/ranbox/items/17_medium.png', 1),
(8, 'MP3 плеер', 90, 'def', 'http://214010.selcdn.ru/ranbox/items/18_medium.png', 1),
(9, 'Fish Eye', 90, 'def', 'http://214010.selcdn.ru/ranbox/items/7_medium.png', 1),
(10, 'Силиконовый чехол', 60, 'def', 'http://214010.selcdn.ru/ranbox/items/19_medium.png', 1),
(11, 'Селфи палка (Монопод)', 90, 'def', 'http://214010.selcdn.ru/ranbox/items/21_medium.png', 1),
(12, 'Брелок PowerBank 2600 mAh', 110, 'def', 'http://214010.selcdn.ru/ranbox/items/powerbank_medium.png', 1),
(13, 'Шагометр', 250, 'def', 'http://214010.selcdn.ru/ranbox/items/shagometr_medium.png', 1),
(14, 'USB зажигалка', 280, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_lighter_medium.png', 1),
(15, 'Электронная сигарета', 250, 'def', 'http://214010.selcdn.ru/ranbox/items/cigarette_medium.png', 1),
(16, 'Спиннер', 250, 'def', 'http://214010.selcdn.ru/ranbox/items/spinner_medium.png', 1),
(17, 'Наушники JBL', 350, 'def', 'http://214010.selcdn.ru/ranbox/items/jbl_medium.png', 1),
(18, 'Флешка SmartBuy 4GB', 400, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_smartbuy_4gb_medium.png', 1),
(19, 'Bluetooth Колонка', 700, 'def', 'http://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png', 1),
(20, 'Смарт Часы (Android)', 2200, 'def', 'http://214010.selcdn.ru/ranbox/items/11_medium.png', 1),
(21, 'Экшн Камера', 2400, 'def', 'http://214010.selcdn.ru/ranbox/items/10_medium.png', 1),
(22, 'USB зажигалка', 280, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_lighter_medium.png', 2),
(23, 'Флешка SmartBuy 4GB', 400, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_smartbuy_4gb_medium.png', 2),
(24, 'Спиннер', 250, 'def', 'http://214010.selcdn.ru/ranbox/items/spinner_medium.png', 2),
(25, 'Электронная сигарета', 250, 'def', 'http://214010.selcdn.ru/ranbox/items/cigarette_medium.png', 2),
(26, 'Флешка SmartBuy 8GB', 500, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_smartbuy_8gb_medium.png', 2),
(27, 'Фонарь-светильник Бочка', 400, 'def', 'http://214010.selcdn.ru/ranbox/items/bochka_medium.png', 2),
(28, '3D очки VR Box II', 600, 'def', 'http://214010.selcdn.ru/ranbox/items/vr_box_medium.png', 2),
(29, 'Флешка SmartBuy 16GB', 600, 'def', 'http://214010.selcdn.ru/ranbox/items/usb_smartbuy_16gb_medium.png', 2),
(30, 'Casio G-Shock', 700, 'def', 'http://214010.selcdn.ru/ranbox/items/g_shock_medium.png', 2),
(31, 'Bluetooth Колонка MINI-X6', 800, 'def', 'http://214010.selcdn.ru/ranbox/items/bt_speaker_medium.png', 2),
(32, 'Селфи-кольцо', 500, 'def', 'http://214010.selcdn.ru/ranbox/items/selfie_ring_medium.png', 2),
(33, 'Беспроводные наушники Beats', 1400, 'def', 'http://214010.selcdn.ru/ranbox/items/beats_solo_medium.png', 2),
(34, 'Экшн Камера', 2400, 'def', 'http://214010.selcdn.ru/ranbox/items/10_medium.png', 2),
(35, 'Bluetooth Колонка', 700, 'def', 'http://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png', 2),
(36, 'Смарт Часы (Android)', 2200, 'def', 'http://214010.selcdn.ru/ranbox/items/11_medium.png', 2),
(37, 'JBL Charge2+', 2500, 'def', 'http://214010.selcdn.ru/ranbox/items/charge2_medium.png', 2),
(38, '3D ручка', 3000, 'def', 'http://214010.selcdn.ru/ranbox/items/3dpen_medium.png', 2),
(39, 'Sony Playstation 4 500Gb', 30000, 'def', 'http://214010.selcdn.ru/ranbox/items/34_medium.png', 2),
(40, 'Bluetooth Колонка', 700, 'def', 'http://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png', 3),
(41, 'Casio G-Shock', 700, 'def', 'http://214010.selcdn.ru/ranbox/items/g_shock_medium.png', 3),
(42, 'Bluetooth Колонка MINI-X6', 800, 'def', 'http://214010.selcdn.ru/ranbox/items/bt_speaker_medium.png', 3),
(43, 'PowerBank 8800 mAh', 900, 'def', 'http://214010.selcdn.ru/ranbox/items/20_medium.png', 3),
(44, 'Беспроводные наушники Beats', 1400, 'def', 'http://214010.selcdn.ru/ranbox/items/beats_solo_medium.png', 3),
(45, 'JBL Charge2+', 2500, 'def', 'http://214010.selcdn.ru/ranbox/items/charge2_medium.png', 3),
(46, 'Смарт Часы (Android)', 2200, 'def', 'http://214010.selcdn.ru/ranbox/items/11_medium.png', 3),
(47, 'Apple TV 32Gb', 30000, 'def', 'http://214010.selcdn.ru/ranbox/items/29_medium.png', 3),
(48, 'Canon EOS 1100D Kit', 30000, 'def', 'http://214010.selcdn.ru/ranbox/items/45_medium.png', 3),
(49, 'XBox One 500Gb', 30000, 'def', 'http://214010.selcdn.ru/ranbox/items/33_medium.png', 3),
(50, 'iPad Mini 4', 40000, 'def', 'http://214010.selcdn.ru/ranbox/items/24_medium.png', 3),
(51, 'iPhone 7 32Gb', 57000, 'def', 'http://214010.selcdn.ru/ranbox/items/27_medium.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL DEFAULT '0',
  `games` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `vivod` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `total`, `games`, `profit`, `deposit`, `vivod`) VALUES
(1, 2984, 187, 0, 0, 600);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `game` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL,
  `login` varchar(256) NOT NULL,
  `money` int(255) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `ref_code` varchar(256) NOT NULL,
  `ref_use` varchar(256) DEFAULT NULL,
  `open_box` int(255) NOT NULL,
  `win` int(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '2016-11-08 21:32:40',
  `is_yt` int(11) NOT NULL,
  `login2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bonus_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '2016-11-08 19:43:23',
  `bonus_time_drop` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '2016-11-11 18:13:23',
  `free_cases_left` int(11) DEFAULT '0',
  `refferal_money` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deposit` int(11) NOT NULL DEFAULT '0',
  `mini_wins` int(11) NOT NULL DEFAULT '0',
  `ban_mini` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) NOT NULL,
  `ban_ticket` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `profit2` int(11) NOT NULL,
  `timer` int(14) NOT NULL,
  `nick` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1700 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `avatar`, `login`, `money`, `is_admin`, `ref_code`, `ref_use`, `open_box`, `win`, `remember_token`, `created_at`, `updated_at`, `is_yt`, `login2`, `bonus_time`, `bonus_time_drop`, `free_cases_left`, `refferal_money`, `ip`, `deposit`, `mini_wins`, `ban_mini`, `profit`, `ban_ticket`, `request`, `profit2`, `timer`, `nick`) VALUES
(1, 'Anatol', 'https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg', '1', 0, 1, '1', '21', 0, 0, 'bJ7s45y8sUHpLX2U9NZ3Yy7zRke8Xs2ZXaCsjtrRtTyYPfGuWmlazS9LFt6s', '2017-04-09 09:58:40', '2017-04-09 13:58:40', 1, '123', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 219120, 0, 0, 0, 0, 'nKByi2Y9'),
(1667, 'Прядиев Андрей', 'https://pp.userapi.com/c619321/v619321749/dde0/S-2S3KKrprU.jpg', 'id44810749', 192444, 1, 'YkeBn6bRSDZtr', NULL, 13, 0, 'UeL3b0SXRLySjzmY0rIK4KhoV3pixMg6CPjPKNJwfAGydWy3tGGZBZJMZAjo', '2017-04-18 19:19:12', '2017-04-18 23:19:12', 0, '44810749', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '526zNZrT'),
(1668, 'Недров Кузьма', 'https://pp.userapi.com/c626616/v626616162/62842/xsu7er-H6fk.jpg', 'id196658162', 5417, 0, '88tFEh5H89GRB', NULL, 0, 0, 'OovRhUP49DLS42Sxt9369X5bTIx0ZhnjUpZyBIUdDIIqBWchuj6PIZaD3zIU', '2017-04-18 18:01:47', '2017-04-18 22:01:47', 1, '196658162', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 's9s3zBEy'),
(1669, 'Муфтахин Руслан', 'https://pp.userapi.com/c627429/v627429458/7971/D7ZXvh0E1ZE.jpg', 'id2348458', 700, 0, 'T24ztiisADNeA', NULL, 0, 0, 'mgvLj8vSWc4Vt7nOOKbj2dWtYqrrVLNSVD3rgdzBqOkNYKI4A3B7Rw9Nabvk', '2017-04-18 18:01:53', '2017-04-18 22:01:53', 0, '2348458', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 214, 0, 0, 0, 0, 'nkhzQhY7'),
(1670, 'Тудвасев Антон', 'https://pp.vk.me/c638819/v638819016/126f8/vzgqbRAc5GU.jpg', 'id157618016', 0, 0, 'K8hshar8YZTE4', NULL, 0, 0, 'Qoa482GzlNdVokYLLssPaDoe7gkR0Ebk9yocEAhqiJBjIGVSxW9yKPKDvrse', '2017-02-26 14:58:54', '2017-02-26 11:58:54', 0, '157618016', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'dBh7GfFY'),
(1671, 'Романов Алексей', 'https://pp.userapi.com/c626631/v626631900/574ca/r2mhYAGCxeU.jpg', 'id167166900', 6831, 0, 'kr8NAQ79ebf3t', NULL, 0, 0, 'Ly69dFXnY0IyevsWhKfVwKueEKRS3ARMw6gqdBCvwRaaUqAiE9qwg8JhidwB', '2017-04-18 09:30:19', '2017-04-18 13:30:19', 0, '167166900', '2017-03-06 09:43:45', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 2660, 0, 0, 0, 0, 'BQ9BKHAs'),
(1672, 'Моисеев Егор', 'https://pp.userapi.com/c837427/v837427498/45e5b/d3TiXXRsKMU.jpg', 'id354288498', 0, 0, 'sbFKr229n57k9', 'YDhHkbsfeQQrZ', 0, 0, 'X6eIfBERL0koJVEE08nt93XFWd39PD6fI0nPyA1nDRa9sZ1qmNyFt7c1oHx7', '2017-04-09 15:08:59', '2017-04-09 22:08:59', 0, '354288498', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 1653427, 0, 0, 0, 0, 'A5FstDBa'),
(1673, 'Лавров Николай', 'https://pp.userapi.com/c636716/v636716841/4cb7c/NgsKxpY5Cjg.jpg', 'id91785841', 0, 0, 'RHBBN2ZyRGFTF', NULL, 0, 0, 'dJjZDysLBVvvYNf7o1dFrb38e8H2uOnjyoMox2da7PGvG0AhVWI0GcCOjdm2', '2017-02-28 20:43:57', '2017-02-28 17:43:57', 0, '91785841', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 3189260, 0, 0, 0, 0, 'tAGYbQFd'),
(1674, 'Полинский Артём', 'https://pp.userapi.com/c622126/v622126182/543e9/pFt4zYBQr1I.jpg', 'id62796182', 0, 0, 'baGE58t35D86G', NULL, 0, 0, 'tCVFfjGUghrDTXMCIyCHnBXQjqdOKYdrXvqj4jvzHZWcJGy4jp3iajh41egZ', '2017-03-01 08:54:34', '2017-03-01 05:54:34', 0, '62796182', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'KZ2SsEEG'),
(1675, 'Белов Сергей', 'https://pp.userapi.com/c604422/v604422153/1a92c/VUbiAzkSDFU.jpg', 'id343153', 0, 0, 'H9bZAB4BHQdSh', NULL, 0, 0, 'wMKrhh296gV82dWdaGQJOnhMQp31HapgMYImme16SWyCUEU1bovRSVxcHnVS', '2017-04-06 14:02:54', '2017-03-01 10:32:03', 0, '343153', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 272773, 0, 0, 0, 0, 'yBRAhsbN'),
(1677, 'Кодеров Владимир', 'https://pp.userapi.com/c638627/v638627566/2b013/Dz04Je82TFA.jpg', 'id371446566', 0, 0, 'tEGFdZ3F9YkSN', NULL, 0, 0, 'tYCLJ570OjVIeFw5RQpy3A7E5XGEb4MKjSB5rhJEQuXc0TJdUXtGlGhbAiIK', '2017-03-02 07:18:43', '2017-03-02 04:18:43', 0, '371446566', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'beDZHkiE'),
(1678, 'Тригуба Евгений', 'https://cs7051.userapi.com/c604619/v604619846/273b1/oCOzHxk21AQ.jpg', 'id116445846', 0, 0, 'YQGzanzTsHG3D', NULL, 0, 0, 'Qw1BRfSqarnJETbQV82wq6LeyZ1I6D38qNz8kpS08fBPJGzmoVcQxa088L6t', '2017-03-03 20:28:07', '2017-03-03 17:28:07', 0, '116445846', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'Gs2tk65z'),
(1679, 'Документов Александр', 'https://pp.userapi.com/c636922/v636922560/4e0f2/_E-ME4luzIY.jpg', 'id315996560', 37700, 0, 'Sri2rStQRrn2Y', NULL, 0, 0, 'bq901eks3Tfmy3l1wwfo0qI1YUAjWqlCa5BjKNFEHuCDeMZ26Nqvn9WutHkj', '2017-04-17 19:51:36', '2017-04-17 23:51:36', 0, '315996560', '2017-03-06 18:03:08', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'yF2tDBT9'),
(1680, 'Строгий Саша', 'https://pp.userapi.com/c638325/v638325135/10f44/3kh0dyd8CJM.jpg', 'id88189135', 1, 0, 'zbbHK53EGbzZe', NULL, 0, 0, 'i6Wh5BRtyrdIB3tptd9hU6d15e0B5xJ7EKUSqQhzprSG8eJckytJpRHW7rw1', '2017-03-05 23:02:25', '2017-03-05 20:02:25', 0, '88189135', '2017-03-05 23:02:25', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'fKBkyG5n'),
(1681, 'Хилин Максим', 'https://pp.userapi.com/c633716/v633716455/35d6f/-pZpTAt2OAU.jpg', 'id158864455', 1, 0, '8KZk2H7fdTDFh', NULL, 0, 0, 'zO9LwSQiyz1YrMP9axrkov8QFGpN7LaeqAvA13VxIPXiI5B9eWJwLAXplvS1', '2017-03-04 17:13:02', '2017-03-04 14:13:02', 0, '158864455', '2017-03-04 17:13:02', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'hE69zGEG'),
(1682, 'Чиповский Дмитрий', 'https://pp.userapi.com/c637228/v637228619/53fdd/w4iTs-cXGao.jpg', 'id79736619', 0, 0, 'sKSyS8ANzBTf3', NULL, 0, 0, 'VqDb8nMWZvDkK4qdbAW9Q3YZinL76pPev2RHQmu84aNFHMOv1UtDvd3iOB0J', '2017-03-04 23:51:00', '2017-03-04 20:51:00', 0, '79736619', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'iSHer3bN'),
(1683, '''о'' Влад', 'https://pp.userapi.com/c637225/v637225345/23c47/6PCDvBAnVoQ.jpg', 'id248420345', 0, 0, 's5FhFsH6NYT8Y', NULL, 0, 0, 'CHA4iwsyTJwa0lBh4ttuMn2POyC8g6LJ0mUJNR02yiB0dcwqaJt3Q6LywPbE', '2017-03-05 11:01:05', '2017-03-05 08:01:05', 0, '248420345', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'niENe8QG'),
(1684, 'Михайлишин Роман', 'https://pp.userapi.com/c837336/v837336672/1628b/xTjpxoNsKLI.jpg', 'id120072672', 0, 0, 'YEtHFBQRQkEih', NULL, 0, 0, 'oPHavx3kNJLycDzdywoF5mV7wslmzWyjgSIfDpdGmiz4F8UHaPkWrHZ4zLTc', '2017-03-24 23:27:17', '2017-03-25 03:27:17', 0, '120072672', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'inN3aDYf'),
(1692, 'adad', 'https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg', 'adad', 0, 0, 'adda', NULL, 0, 0, 'adad', '2017-04-11 17:55:18', '2017-04-12 00:53:44', 1, 'adad', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'adad'),
(1693, 'Ярмаков Кирилл', 'https://pp.userapi.com/c604525/v604525662/303fb/mX-E0mJCY64.jpg', 'id214391662', 0, 1, 'nBT6edRQYn9EG', NULL, 0, 0, 'U8SRnFwQ5HBcARPYCXILkHiDmpYBn9ujztZ0sWDAfI02l47AUpomYZLgddLf', '2017-04-16 17:18:04', '2017-04-09 22:52:03', 0, '214391662', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '8THa7bnt'),
(1694, 'Габдуллин Тимур', 'https://pp.userapi.com/c622116/v622116605/5079a/oVwE4rXnvIA.jpg', 'id170718605', 0, 0, 'iyhfasG5NT2ks', NULL, 0, 0, 'e9uvsZVsaAVwk19yzBPPy95gUrA9t2JGbvwRaT38rOxt6a6WuvOUpqBL0B7S', '2017-04-16 17:18:06', '2017-04-09 22:49:56', 0, '170718605', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'eYrd5Ere'),
(1695, 'Krists Krists', 'https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg', 'id337048378', 96037, 1, '46Nk3aABbr2DE', NULL, 37, 0, 'mWLhWuLAdvt5n5pxDJ1INsnUqNVnXj28GhKkhrUgSMg8NwiVCGi85yW02MrB', '2017-04-18 19:21:30', '2017-04-18 23:21:30', 1, '337048378', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'hRSs5rHy'),
(1696, 'Исаев Иван', 'https://pp.userapi.com/c622629/v622629867/439ea/lSZVcKzC2Nk.jpg', 'id293841867', 9931, 1, 'iYYABezKz9ZtA', NULL, 0, 0, '92fMwEdenJY5bOy8oKNSI7VBwUJFBXEYwymY0rJbbXUX2y1T2ygISDOCYn6m', '2017-04-12 15:02:26', '2017-04-12 22:02:26', 0, '293841867', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'hhGGy6Kb'),
(1698, 'Алексеев Никита', 'https://pp.userapi.com/c639817/v639817974/126a2/SwNLB3Lc-Bo.jpg', 'id12903974', 3650, 0, '26YfhrzQA9RhT', NULL, 0, 0, 'GyAsfmPo9RgHtyTBcddDTeTw7fu0CSKvbiS6hfjbmXT35aURxbEjYCzt4kb0', '2017-04-17 20:11:07', '2017-04-18 00:11:07', 0, '12903974', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'EaRZtHYA'),
(1699, 'Алексеев Данил', 'http://vk.com/images/camera_200.png', 'id371760471', 0, 0, 'z66KfaYDEnSfA', NULL, 0, 0, 'JSsul0WIVQs0cdmKR1fBUGvzTx6GMmVnD3YplLjQeQq7PUa26G5ECWIz4cew', '2017-04-17 18:49:53', '2017-04-17 22:49:53', 0, '371760471', '2016-11-08 19:43:23', '2016-11-11 18:13:23', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 'yyGNytyE');

-- --------------------------------------------------------

--
-- Table structure for table `vivod`
--

CREATE TABLE IF NOT EXISTS `vivod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `nomer` varchar(244) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
