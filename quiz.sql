-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 06:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answered_questions`
--

CREATE TABLE `answered_questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `is_true` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `text`, `is_true`) VALUES
(1, 1, 'Attila Dorn', 1),
(2, 1, 'Matthew Greywolf', 0),
(3, 1, 'Roel van Helden', 0),
(4, 1, 'Falk Maria Schlegel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Metal'),
(2, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1484641119),
('m130524_201442_init', 1484641121);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `genre_id`, `text`, `photo`) VALUES
(1, 1, 'What is the name of the Powerwolf band frontman?', 'http://www.pandora.com/art/public/int/9/1/7/1/840588101719_500W_500H.jpg'),
(2, 1, 'What is the name of the former lead singer of Nightwish?', '');

-- --------------------------------------------------------

--
-- Table structure for table `special_questions`
--

CREATE TABLE `special_questions` (
  `id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `add_on_type` varchar(10) NOT NULL,
  `add_on` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_questions`
--

INSERT INTO `special_questions` (`id`, `text`, `add_on_type`, `add_on`) VALUES
(2, 'Who is this ?', 'photo', 'http://www.powerwolf.net/images/wolves/attila.jpg'),
(3, 'Who are these ?', 'video', '<iframe width="560" height="315" src="https://www.youtube.com/embed/BSxoNrjt7Us?showinfo=0" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `special_questions_answers`
--

CREATE TABLE `special_questions_answers` (
  `id` int(11) NOT NULL,
  `text` varchar(32) NOT NULL,
  `special_question_id` int(11) NOT NULL,
  `is_true` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_questions_answers`
--

INSERT INTO `special_questions_answers` (`id`, `text`, `special_question_id`, `is_true`) VALUES
(1, 'Attila Dorn', 2, 1),
(2, 'Ulrich', 2, 0),
(3, 'Michael Jackson', 2, 0),
(4, 'Jesus Christ', 2, 0),
(5, 'Serenity', 3, 1),
(6, 'Oasis', 3, 0),
(7, 'Nightwish', 3, 0),
(8, 'Dimmu Borgir', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'UJNqFCPYg8_qV6Gaoq6yK86L2VkFNy7x', '$2y$13$M1mk2gsI3Myxpyh94tbiSe.BRH2JjmEv6ciLPEeF4rXibQKujcgUy', NULL, 'admin@admin.com', 10, 1484641131, 1484641131);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answered_questions`
--
ALTER TABLE `answered_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_questions`
--
ALTER TABLE `special_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_questions_answers`
--
ALTER TABLE `special_questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answered_questions`
--
ALTER TABLE `answered_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `special_questions`
--
ALTER TABLE `special_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `special_questions_answers`
--
ALTER TABLE `special_questions_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
