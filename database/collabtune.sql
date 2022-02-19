-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2022 at 09:55 PM
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
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `email_id` varchar(100) NOT NULL,
  `topic_id` varchar(50) NOT NULL,
  `topic_name` varchar(1000) NOT NULL,
  `topic_message` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `message_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `topic_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
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
('Nkshtramusic', 'User@123', 'Nkshtramusic@gmail.com', 'Nkshtra Music', 'https://www.instagram.com/nkshtramusic/', 'https://open.spotify.com/artist/7sL7meElI3uhXMtiBXlRWH?si=APtx2NjmRqq8mjb4DWqCRg&nd=1', 'Trap', '1.jpg', '     '),
('B3ats Infinity ', 'User@123', 'B3atsInfinity@gmail.com', 'B3ats Infinity', 'https://open.spotify.com/artist/3o1eDaIwLDt6NmeRnpMDtY?si=gFu024qTQimyqpXsCxbuJQ&nd=1', 'https://www.instagram.com/b3atsinfinity/', 'Chill', '2.jpg', ''),
('B Cube', 'User@123', 'Bcube@gmail.com', 'B Cube', 'https://www.instagram.com/b.cube/ ', 'https://www.youtube.com/watch?v=XrIZ1zc9kW4 ', 'Beatboxer', '8.jpg', ''),
('Wroc', 'User@123', 'Wroc@gmail.com', 'Wroc', 'https://www.instagram.com/_wroc_/', 'https://open.spotify.com/artist/5QMdDJY9UFJR2bQDEWFGT4', 'Hip-hop', '3.jpg', ''),
('Priya Nair', 'User@123', 'priyanair@gmail.com', 'Priya Nair', 'https://www.instagram.com/priyanair96/', 'https://open.spotify.com/artist/2NlGcK8jGtV1bOShfBtq3J ', 'Vocalist', '7.jpg', ''),
('Redlion', 'User@123', 'Redlion@gmail.com', 'Redlion', 'https://www.instagram.com/red25lion/', 'https://www.youtube.com/channel/UCM1-kt1Zcg1wsMAHjJcMM8A', 'Rapper', '4.jpg', ''),
('Sagar Palkar', 'User@123', 'sagarpalkar@gmail.com', 'Sagar', 'https://www.instagram.com/priyanair96/', 'https://open.spotify.com/artist/2NlGcK8jGtV1bOShfBtq3J ', 'Guitarist', '6.jpg', ''),
('Noiz X', 'User@123', 'noizx@gmail.com', 'Noiz X', 'https://www.instagram.com/noiz_x/', 'https://www.youtube.com/watch?v=0KOhHHUVre8', 'Electronic', '5.jpg', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
