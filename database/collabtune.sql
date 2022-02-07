-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 06:37 PM
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
('ukirdeomkar4@gmail.com', '62014fb581d47', '', 'hello\r\n', '2022-02-07 18:28:04', '620156a479bb8'),
('ukirdeomkar4@gmail.com', '62014fb581d47', '', 'hye\r\n', '2022-02-07 18:28:31', '620156bf1c63f'),
('ukirdeomkar4@gmail.com', '62014fb581d47', '', 'helelos', '2022-02-07 18:28:38', '620156c6b3664'),
('king@gmail.com', '62014fb581d47', '', 'this is great', '2022-02-07 18:31:06', '6201575a8e393');

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
('62014fb581d47', 'ukirdeomkar4@gmail.com', 'topic 1');

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
('Kshitija2001', 'Kshitija', 'bharambekshitija2@gmail.com', 'Kshitija123', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Hip-hop', '0 (1).jpg', 'Hi My name is kshitija'),
('Kshitija20', 'Kshitija1', 'ksh.bha.rt19@rait.ac.in', 'Kshitija1', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Electronic', '', ''),
('10005025', '1234567', 'sarojborole2@gmail.com', 'kshitija', 'https://www.instagram.com/_kshitijaaa_/', 'https://open.spotify.com/user/owb2y8mbdidlzu8v9kqwqzm50', 'Country', 'avatars-000227160415-hq9z8z-t500x500.jpg', 'Hi My name is kshitija'),
('ou', 'ou123', 'ukirdeomkar4@gmail.com', 'CHibisou', 'https://www.youtube.com/watch?v=dB6oQ-OeJ5A&ab_channel=CakeCrab', 'https://www.youtube.com/watch?v=dB6oQ-OeJ5A&ab_channel=CakeCrab', 'Rock', 'ou.jpeg', ''),
('ukirdeomkar4@gmail.com', 'king', 'king@gmail.com', 'king', 'king', 'https://www.youtube.com/watch?v=rsQrVwNUnPc', 'Country', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
