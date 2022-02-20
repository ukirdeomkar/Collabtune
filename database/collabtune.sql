-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2022 at 12:03 PM
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

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`email_id`, `topic_id`, `topic_name`, `topic_message`, `time`, `message_id`) VALUES
('Nkshtramusic@gmail.com', '6211efca8e62e', 'music', 'description', '2022-02-20 08:37:46', '6211efca8e644'),
('Bcube@gmail.com', '6211efca8e62e', 'music', 'hello bhai', '2022-02-20 08:39:55', '6211f04b73496'),
('Bcube@gmail.com', '6211efca8e62e', 'music', 'hello', '2022-02-20 08:42:34', '6211f0ea4b3cf'),
('noizx@gmail.com', '62121d3876cc2', 'hello', 'hello 1\r\n', '2022-02-20 16:21:36', '62121d3876cc3'),
('noizx@gmail.com', '62121d3876cc2', 'hello', 'hello 2', '2022-02-20 16:22:34', '62121d7269509'),
('Nkshtramusic@gmail.com', '62121fc4bd55e', 'hello 2', 'hey', '2022-02-20 16:32:28', '62121fc4bd560');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `topic_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `email_id`, `topic_name`) VALUES
('6211efca8e62e', 'Nkshtramusic@gmail.com', 'music'),
('62121d3876cc2', 'noizx@gmail.com', 'hello'),
('62121fc4bd55e', 'Nkshtramusic@gmail.com', 'hello 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
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
('B3ats Infinity ', '$2y$10$nwbSjYUZ.Xjy6Nv/Uh71DOEuhV7.JOvlcg.mJKZMP0qx43r7eAZsS', 'B3atsInfinity@gmail.com', 'B3ats Infinity', 'https://open.spotify.com/artist/3o1eDaIwLDt6NmeRnpMDtY?si=gFu024qTQimyqpXsCxbuJQ&nd=1', 'https://www.instagram.com/b3atsinfinity/', 'Chill', '2.jpg', ''),
('B Cube', '$2y$10$wD8fKYg2xHreXlOQIeEGBOjQY62OZh00Iyi/wU2DP54FP/ccXn50O', 'Bcube@gmail.com', 'B Cube', 'https://www.instagram.com/b.cube/ ', 'https://www.youtube.com/watch?v=XrIZ1zc9kW4 ', 'Beatboxer', '8.jpg', ''),
('Wroc', '$2y$10$mHXvaOU6jiyb89xDKMzz6el5iu1fmWK20U/5Hk9YSrAmUNGVFFgZW', 'Wroc@gmail.com', 'Wroc', 'https://www.instagram.com/_wroc_/', 'https://open.spotify.com/artist/5QMdDJY9UFJR2bQDEWFGT4', 'Hip-hop', '3.jpg', ''),
('Priya Nair', '$2y$10$PCMErPXMvYEJJOUNo/iD5.FE0leJUpP6UdinU7DKv8dx1XkmVe4.u', 'priyanair@gmail.com', 'Priya Nair', 'https://www.instagram.com/priyanair96/', 'https://open.spotify.com/artist/2NlGcK8jGtV1bOShfBtq3J ', 'Vocalist', '7.jpg', ''),
('Redlion', '$2y$10$8zBas8Ce1ZR03LoQgLDjz.nv9xyl0y6L1ly9IbbG2D1Ny0Qk7Xo.O', 'Redlion@gmail.com', 'Redlion', 'https://www.instagram.com/red25lion/', 'https://www.youtube.com/channel/UCM1-kt1Zcg1wsMAHjJcMM8A', 'Rapper', '4.jpg', ''),
('Sagar Palkar', '$2y$10$NXJrj56pOxe8EyAn660y0.qC6v4RTFToG2irCbM7jCknaOOJMM0vy', 'sagarpalkar@gmail.com', 'Sagar', 'https://www.instagram.com/priyanair96/', 'https://open.spotify.com/artist/2NlGcK8jGtV1bOShfBtq3J ', 'Guitarist', '6.jpg', ''),
('Noiz X', '$2y$10$3.fbzQgiPEO7jRACHgXdduXMwI5SDtAxTX2fzxVbhHdGrkbW4KF1m', 'noizx@gmail.com', 'Noiz X', 'https://www.instagram.com/noiz_x/', 'https://www.youtube.com/watch?v=0KOhHHUVre8', 'Electronic', '5.jpg', ''),
('Nkshtra Music', '$2y$10$Gh3mCkovxR3CHqQsq6p8CuUnjsZP7e.wK4VLacuCIS2fB1i2nMav6', 'Nkshtramusic@gmail.com', 'Nkshtra Music', 'https://www.instagram.com/nkshtramusic', ' https://open.spotify.com/artist/7sL7meElI3uhXMtiBXlRWH?si=APtx2NjmRqq8mjb4DWqCRg', 'Trap', '1.jpg', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
