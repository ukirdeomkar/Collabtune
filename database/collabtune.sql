-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 09:30 AM
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
  `user_password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `artist_name` varchar(15) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `bio` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_username`, `user_password`, `email_id`, `artist_name`, `contact`, `link`, `genre`, `profile_pic`, `bio`) VALUES
('Kshitija2001', 'Kshitija', 'bharambekshitija2@gmail.com', 'Kshitija123', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Hip-hop', '0 (1).jpg', 'Hi My name is kshitija'),
('Kshitija20', 'Kshitija1', 'ksh.bha.rt19@rait.ac.in', 'Kshitija1', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Electronic', '', ''),
('10005025', '1234567', 'sarojborole2@gmail.com', 'kshitija', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Country', 'avatars-000227160415-hq9z8z-t500x500.jpg', 'Hi My name is kshitija'),
('ou', 'ou123', 'ukirdeomkar4@gmail.com', 'CHibisou', 'https://www.youtube.com/watch?v=dB6oQ-OeJ5A&ab_channel=CakeCrab', 'https://www.youtube.com/watch?v=dB6oQ-OeJ5A&ab_channel=CakeCrab', 'Rock', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
