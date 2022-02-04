-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2022 at 01:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collabtune`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_name` varchar(50) NOT NULL,
  `artist’s_genre` varchar(50) NOT NULL,
  `artist_links` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `artist_name` varchar(15) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_username`, `user_password`, `email_id`, `artist_name`, `contact`, `link`) VALUES
('dwsdws', 'qsxws', 'dsc@ds.com', '', 9999, 'sxaas'),
('husws', 'dxwsx', 'dc@dc.com', 'dndj', 9999, 'dxwsx'),
('ou', 'ou123', 'ukirdeomkar4@gmail.com', 'CHibisou', 8355871633, 'https://www.youtube.com/watch?v=0wZjMZTVxzI&ab_channel=LyurGG'),
('jnsqjs', 'dededed', 'gsws@gmail.com', 'sqas', 83773, 'cedced'),
('Kshitija2001', 'Kshitija', 'bharambekshitija2@gmail.com', 'Kshitija123', 1234567809, 'hjvkjb '),
('aa', 'aa', 'a@a.com', 'aaaa', 8118181, 'dxesde');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
