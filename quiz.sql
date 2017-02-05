-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 11:13 AM
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

--
-- Dumping data for table `answered_questions`
--

INSERT INTO `answered_questions` (`id`, `user_id`, `question_id`) VALUES
(5, 1, 5),
(6, 1, 7),
(7, 1, 15);

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
(4, 1, 'Falk Maria Schlegel', 0),
(5, 3, '2000', 0),
(6, 3, '1999', 0),
(7, 3, '1996', 1),
(8, 3, '1997', 0),
(9, 4, '13 october 1997', 0),
(10, 4, '13 september 1996', 1),
(11, 4, '13 september 1997', 0),
(12, 4, '13 october 1996', 0),
(13, 5, 'Eminem - Without Me', 1),
(14, 5, 'Eminem - Slim Shady', 0),
(15, 5, 'Eminem - Rap God', 0),
(16, 5, 'Eminem - When I''m Gone', 0),
(17, 6, 'Mexico', 0),
(18, 6, 'Brasil', 0),
(19, 6, 'Columbia', 1),
(20, 6, 'China', 0),
(21, 7, 'Something From Nothing', 0),
(22, 7, 'Don''t Wanna Fight', 1),
(23, 7, 'Moaning Lisa Smile', 0),
(24, 7, 'What Kind of Man', 0),
(25, 8, 'What Do You Mean?', 1),
(26, 8, 'I''ll show you', 0),
(27, 8, 'Purpose', 0),
(28, 8, 'The Feeling', 0),
(29, 9, 'Whiskey', 0),
(30, 9, 'Marijuana', 0),
(31, 9, 'Pill', 1),
(32, 9, 'Beer', 0),
(33, 10, 'Lady Gaga', 0),
(34, 10, 'Adele', 1),
(35, 10, 'Ariana Grande', 0),
(36, 10, 'Beyonce', 0),
(37, 11, 'Wiz Khalifa', 0),
(38, 11, 'Future', 0),
(39, 11, 'Drake', 0),
(40, 11, 'The Weeknd', 1),
(41, 12, 'Relaxing', 0),
(42, 12, 'Everything', 1),
(43, 12, 'Me', 0),
(44, 12, 'Love', 0),
(45, 13, 'Bridge Over Troubled Water', 0),
(46, 13, 'The Sound of Silence', 1),
(47, 13, 'I Am A Rock', 0),
(48, 13, 'Mrs. Robinson', 0),
(49, 14, 'Thinking Out Loud', 1),
(50, 14, 'Girl Crush', 0),
(51, 14, 'Blank Space', 0),
(52, 14, 'Alright', 0),
(53, 15, 'Hidden City', 1),
(54, 15, 'Born Into This', 0),
(55, 15, 'Choice of Weapon', 0),
(56, 15, 'Beyond Good and Evil', 0),
(61, 16, 'Iggy Pop', 0),
(62, 16, 'Billy Idol', 0),
(63, 16, 'David Bowie', 1),
(64, 16, 'Lou Reed', 0),
(65, 17, 'Slayer ', 0),
(66, 17, 'Megadeth', 1),
(67, 17, 'Korn', 0),
(68, 17, 'Anthrax', 0);

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
(1, 'Heavy Metal'),
(2, 'Pop'),
(3, 'Classic Rock'),
(4, 'Hip Hop'),
(5, 'Rap'),
(6, 'House'),
(7, 'Country'),
(8, 'Dubstep'),
(9, 'Trap'),
(10, 'Reggae'),
(11, 'Rock'),
(12, 'Blues'),
(13, 'Jazz'),
(14, 'Classical Music');

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
(2, 1, 'What is the name of the former lead singer of Nightwish?', ''),
(3, 5, 'When did Eminem launch his debut album? (Infinite)', 'http://www.rapbasement.com/wp-content/uploads/2016/03/Eminem-Fack-live.jpg'),
(4, 5, 'When has Tupac died?', 'http://cbsnews1.cbsistatic.com/hub/i/2011/06/15/3eb74f30-a643-11e2-a3f0-029118418759/tupac_shakur.jpg'),
(5, 5, 'The following lyrics: "Hey\nGuess who''s back, back again\nShady''s back, tell a friend" are from the song:', 'http://www.hotel-r.net/im/hotel/be/troll-8.jpg'),
(6, 5, 'Instead of checking in at Bogata, Mures, Snoop Dogg should have checked in at:', 'http://i.imgur.com/lXn2vcS.png'),
(7, 11, 'Which of the following rock songs won the Best Rock Performance at the 2016 Grammy Awards?', 'http://akns-images.eonline.com/eol_images/Entire_Site/20151116/rs_1024x759-151216073328-1024-grammy-58th.jpg'),
(8, 2, 'Justin Bieber had three of the top five songs on the Billboard Hot 100 chart for January 2nd, 2016: Sorry, Love Yourself and...?', 'http://www.vitamin-ha.com/wp-content/uploads/2015/03/Justin-Bieber-Memes-55.jpg'),
(9, 6, 'What did Mike Posner take in Ibiza to show Avicii he was cool?', 'https://festivalsherpa-wpengine.netdna-ssl.com/wp-content/uploads/2013/12/36f5cbf66ce698d1d029f6cb277b15d1c4170d125448c74d541dd4ffa70c177f.jpg'),
(10, 2, 'Which artist had hits with the song "When We Were Young" in 2016?', 'http://i2.kym-cdn.com/photos/images/newsfeed/000/674/934/422.jpg'),
(11, 2, 'Canadian Singer and songrwiter Abel Makkonen Tesfaye is better known as?', 'http://s2.quickmeme.com/img/f3/f3b4ac09bd77b69d147abdfd66337d6192d74e309ea3c31882a491fa44062e36.jpg'),
(12, 2, 'Finish the title to this song recorded by Shakira for the 2016 film Zootopia - "Try..."', 'http://www.billboard.com/files/styles/article_main_image/public/media/shakira-barcelona-portrait-billboard-650.jpg'),
(13, 1, 'Disturbed had a hit in March 2016 with a cover of a Simon and Garfunkel song from 1964. Name it. (Iulia pls)', 'http://www.relatably.com/m/img/disturbed-memes/e60c5b362acc4354b7576ff269ce6366900e425747035fc6a0408c0ea1ac0010.jpg'),
(14, 2, 'Which of the following songs won the Song of the Year at the 2016 Grammy Awards?', 'http://www.mtv.com/crop-images/2013/09/27/Ed%20Sheeran%20-%20Dan%20Curwin.jpg'),
(15, 11, 'Which of the following albums, recorded by the rock band "The Cult", was released in 2016 ?', 'https://headbangerwomandotcom.files.wordpress.com/2012/04/thecultnocirco2008.jpg'),
(16, 11, 'Which English rock star released 25th studio album "Blackstar" on January 8, 2016, just two days before he died of cancer?', 'http://img.wennermedia.com/social/rs-217155-bowie-blackstar.jpg'),
(17, 1, 'Released on January 2016, the album "Dystopia" was recorded by which thrash metal band?', 'http://1.bp.blogspot.com/-Cs8u6zA_bBY/VhM2aC0L2RI/AAAAAAAAB9E/ALvqcsuvICw/s1600/Concert%2Bcrowd.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
