-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2022 at 12:16 ÖÖ
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socialDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `discord` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `discord`, `message`) VALUES
(1, 'asdasd', 'asdsadsa', 'asdsad', 'asdasd'),
(2, 'asdasd', 'asdsadsa', 'asdsad', 'asdasd'),
(4, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(6, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(7, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(8, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(9, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(10, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(11, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(12, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(13, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads '),
(14, 'sasa', 'sadasd', 'sadasd', 'sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads sadads ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `image`, `createdAt`) VALUES
(2, 1, 'Baran Manyakkkk', '<p>can manyakk can manyakk can manyakk can manyakk can manyakk can manyakk can manyakk</p>', 'https://cdn.webrazzi.com/uploads/2015/09/kodlama.jpg', '2022-04-19 20:53:53'),
(3, 0, 'asdsadasd', '<p>asdsadasdsad</p>', 'asdsadasd', '2022-04-21 16:03:03'),
(4, 0, 'asdasdasd', '<p>asdasdsad</p>', 'asdasdasd', '2022-04-21 16:04:30'),
(5, 0, 'asdasd', '', 'asdasd', '2022-04-21 16:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `image_url` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`, `image_url`, `createdAt`) VALUES
(1, 'ketvolkan1@gmail.com', '1504', 'volkan', 'ket', 'https://media-exp1.licdn.com/dms/image/D4E03AQGFz48PI7rOkw/profile-displayphoto-shrink_200_200/0/1643057302906?e=1651104000&v=beta&t=eW58w09bs9TtAly1kBXcC25ec40LetcSA7h4VRrVrmc', '2022-04-21 17:26:20'),
(2, 'hanifi.anelka@hotmail.com', '3131', 'Hanifi Can', 'Seven', 'https://st.myideasoft.com/idea/gj/37/myassets/products/193/sade-maras-dondurmasi.jpg?revision=1597073965', '2022-04-21 17:26:20'),
(3, 'bbaranozel0@gmail.com', '2626', 'Baran', 'Özel', 'https://pbs.twimg.com/profile_images/847201438711320576/JZHnopkx_400x400.jpg', '2022-04-22 22:14:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
