-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2023 at 08:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgltopxy_ishusho_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_un` varchar(255) NOT NULL,
  `admin_pw` text NOT NULL,
  `admin_profile_pic` text NOT NULL,
  `admin_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_un`, `admin_pw`, `admin_profile_pic`, `admin_status`) VALUES
(1, 'admin', 'admin', 'No profile', 'Administrator'),
(3, 'shema', '1234', 'No profile', 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(255) NOT NULL,
  `movie_name` text NOT NULL,
  `movie_description` text NOT NULL,
  `movie_categories` text NOT NULL,
  `movie_poster` text NOT NULL,
  `movie_url` text NOT NULL,
  `url720` text NOT NULL,
  `url480` text NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `addition_date` text NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_description`, `movie_categories`, `movie_poster`, `movie_url`, `url720`, `url480`, `release_date`, `addition_date`, `added_by`) VALUES
('1064024', 'Locked In', 'Unhappy newlywed Lina is pitted against her brittle, damaged mother-in-law, Katherine. An affair sets Lina onto a journey of secrecy, betrayal and murder — and a plot to seemingly destroy her. But who is the real victim, and who can she truly trust?', 'Thriller', 'https://image.tmdb.org/t/p/w500/blQaj6biyBMLo34cuFKKwbgjIBz.jpg', 'https://www.youtube.com/watch?v=y6a3yXfMEJg', '', '', '2023-11-01', '2023-11-01 07:02:36', 1),
('118', 'Charlie and the Chocolate Factory', 'A young boy wins a tour through the most magnificent chocolate factory in the world, led by the world\'s most unusual candy maker.', 'Adventure, Comedy, Family, Fantasy', 'https://image.tmdb.org/t/p/w500/wfGfxtBkhBzQfOZw4S8IQZgrH0a.jpg', 'https://www.youtube.com/watch?v=wcdBCanllNA', '', '', '2005-07-13', '2023-11-07 08:05:01', 1),
('143', 'All Quiet on the Western Front', 'A young soldier faces profound disillusionment in the soul-destroying horror of World War I. Together with several other young German soldiers, he experiences the horrors of war, such evil of which he had not conceived of when signing up to fight. They eventually become sad, tormented, and confused of their purpose.', 'Drama, War', 'https://image.tmdb.org/t/p/w500/1wZUB08igw8iLUgF1r4T6aJD65b.jpg', 'https://www.youtube.com/watch?v=Qeh3DlBEjAc', '', '', '1930-04-29', '2023-11-01 07:07:47', 1),
('32222', 'American Desi', 'College freshman Krishna Reddy, who has never cared for his Indian-American cultural heritage, looks forward to a new life on campus but is surprised to find that he has been assigned Indian roommates.', 'Comedy, Romance, Drama', 'https://image.tmdb.org/t/p/w500/hklG9Ehe1Rt2dlgBplTIyov62qi.jpg', '', '', '', '2001-01-01', '2023-11-02 11:12:23', 1),
('5657', 'The Worm Eaters', 'Herman Umgar, a German hermit, has an ability to communicate with worms. One day the mayor of the town runs him off his property, so in revenge he plants worms in everybody\'s food. However, these worms are a special breed of mutant worms from the Red Tide, and when the people eat them they are transformed into giant worms themselves. These worm-people also become Herman\'s slaves. What will the remaining do?', 'Comedy, Horror', 'https://image.tmdb.org/t/p/w500/aeu5VtuXk3PUjHBAoA0q10eckcp.jpg', 'https://www.youtube.com/watch?v=Xxt4bcZQKl8', '', '', '1977-04-12', '2023-11-01 07:11:48', 1),
('567', 'Rear Window ', 'A wheelchair-bound photographer spies on his neighbors from his apartment window and becomes convinced one of them has committed murder.', 'Thriller, Mystery', 'https://image.tmdb.org/t/p/w500/ILVF0eJxHMddjxeQhswFtpMtqx.jpg', 'https://www.youtube.com/watch?v=n0RLdU5bDF4', '', '', '1954-08-01', '2023-11-02 11:11:39', 1),
('6554', 'The Architects', 'The architect Daniel Brenner is in his late thirties when he receives his first challenging and lucrative commission: to design a cultural center for a satellite town in East-Berlin. He accepts the offer under the condition that he gets to choose who he works with. This way, he reunites with former colleagues and friends - most of them architects or students of architecture who have since chosen a different profession due to personal restraint or economic confinement. Together, they develop a concept which they hope will be more appealing to the public than the conventional and dull constructions common to the German Democratic Republic. However, their ambitious plans are once and again foiled by their conservative supervisors. As frustration grows, Daniel has trouble keeping his career in balance with his family-life: his wife Wanda wants to leave for West-Germany.', 'Drama', 'https://image.tmdb.org/t/p/w500/sLEv1bGBBM2r8JoW5174nuuGmnB.jpg', '', '', '', '1990-06-21', '2023-11-02 11:11:53', 1),
('768', 'From Hell', 'Frederick Abberline is an opium-huffing inspector from Scotland Yard who falls for one of Jack the Ripper\'s prostitute targets in this Hughes brothers adaption of a graphic novel that posits the Ripper\'s true identity.', 'Horror, Mystery, Thriller', 'https://image.tmdb.org/t/p/w500/t2WpWM8nBO4sULXr2bDfNEt4qgr.jpg', 'https://www.youtube.com/watch?v=7gJQRKQjvrU', 'https://www.gasape.com/upload/videos/2023/09/IWHWX2Qxoo2TWYoVwHWX_26_cfdb8bd0d42dd2f9824dacc71e7e9ba0_video_720p_converted.mp4', 'https://www.gasape.com/upload/videos/2023/09/IWHWX2Qxoo2TWYoVwHWX_26_cfdb8bd0d42dd2f9824dacc71e7e9ba0_video_480p_converted.mp4', '2001-02-08', '2023-11-02 11:12:34', 1),
('9900', 'Grandma\'s Boy', 'Even though he\'s 35, Alex acts more like he\'s 13, spending his days as the world\'s oldest video game tester and his evenings developing the next big Xbox game. But when he gets kicked out of his apartment, he\'s forced to move in with his grandmother.', 'Comedy', 'https://image.tmdb.org/t/p/w500/zaGIcb0hXxUbuyIZ0j7uCmbO1li.jpg', 'https://www.youtube.com/watch?v=FxyBUJ-hfRg', '', '', '2006-01-06', '2023-11-02 11:23:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies_crud_log`
--

CREATE TABLE `movies_crud_log` (
  `#` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `action_time` varchar(255) NOT NULL,
  `action_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies_crud_log`
--

INSERT INTO `movies_crud_log` (`#`, `movie`, `action`, `action_time`, `action_by`) VALUES
(1, '567', 'UPDATING', '2023-11-02 12:52:56', 1),
(2, '567', 'UPDATING', '2023-11-02 12:52:58', 1),
(3, '768', 'UPDATING', '2023-11-03 09:18:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_likes`
--

CREATE TABLE `movie_likes` (
  `#` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `date&tim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_likes`
--

INSERT INTO `movie_likes` (`#`, `movie`, `date&tim`) VALUES
(1, '567', '2023-11-07 07:50:31'),
(2, '567', '2023-11-07 07:52:18'),
(3, '143', '2023-11-07 07:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `movie_views`
--

CREATE TABLE `movie_views` (
  `#` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT 1,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_views`
--

INSERT INTO `movie_views` (`#`, `movie`, `counter`, `datetime`) VALUES
(1, '143', 1, '2023-11-02 11:36:12'),
(2, '143', 1, '2023-11-02 11:36:44'),
(3, '143', 1, '2023-11-02 11:38:27'),
(4, '1064024', 1, '2023-11-02 11:38:30'),
(5, '5657', 1, '2023-11-02 11:38:46'),
(6, '1064024', 1, '2023-11-02 11:38:50'),
(7, '143', 1, '2023-11-02 11:38:56'),
(8, '143', 1, '2023-11-02 11:59:17'),
(9, '143', 1, '2023-11-03 08:49:34'),
(10, '768', 1, '2023-11-03 09:09:01'),
(11, '768', 1, '2023-11-03 09:24:58'),
(12, '768', 1, '2023-11-03 09:26:46'),
(13, '768', 1, '2023-11-03 09:36:38'),
(14, '768', 1, '2023-11-03 09:42:35'),
(15, '768', 1, '2023-11-03 09:44:12'),
(16, '768', 1, '2023-11-03 09:44:41'),
(17, '768', 1, '2023-11-03 09:48:23'),
(18, '768', 1, '2023-11-03 09:58:10'),
(19, '768', 1, '2023-11-03 09:58:40'),
(20, '768', 1, '2023-11-03 09:59:05'),
(21, '768', 1, '2023-11-03 10:00:25'),
(22, '768', 1, '2023-11-03 10:01:17'),
(23, '768', 1, '2023-11-03 10:01:20'),
(24, '5657', 1, '2023-11-03 10:01:53'),
(25, '9900', 1, '2023-11-03 10:03:28'),
(26, '9900', 1, '2023-11-03 10:07:47'),
(27, '9900', 1, '2023-11-03 10:42:13'),
(28, '9900', 1, '2023-11-03 10:42:49'),
(29, '9900', 1, '2023-11-03 10:47:43'),
(30, '9900', 1, '2023-11-03 10:53:42'),
(31, '9900', 1, '2023-11-03 10:57:19'),
(32, '9900', 1, '2023-11-03 10:59:01'),
(33, '567', 1, '2023-11-03 10:59:13'),
(34, '567', 1, '2023-11-03 10:59:23'),
(35, '768', 1, '2023-11-03 16:26:20'),
(36, '768', 1, '2023-11-03 16:27:00'),
(37, '32222', 1, '2023-11-03 16:29:48'),
(38, '143', 1, '2023-11-03 16:46:14'),
(39, '9900', 1, '2023-11-03 17:36:09'),
(40, '9900', 1, '2023-11-03 18:02:35'),
(41, '9900', 1, '2023-11-03 22:17:43'),
(42, '1064024', 1, '2023-11-04 19:49:27'),
(43, '768', 1, '2023-11-06 06:36:15'),
(44, '768', 1, '2023-11-06 06:37:28'),
(45, '768', 1, '2023-11-06 06:37:29'),
(46, '768', 1, '2023-11-06 06:37:57'),
(47, '768', 1, '2023-11-06 06:38:07'),
(48, '768', 1, '2023-11-06 06:38:07'),
(49, '768', 1, '2023-11-06 06:38:42'),
(50, '768', 1, '2023-11-06 06:39:21'),
(51, '768', 1, '2023-11-06 06:39:45'),
(52, '768', 1, '2023-11-06 06:39:46'),
(53, '768', 1, '2023-11-06 06:40:19'),
(54, '768', 1, '2023-11-06 06:41:23'),
(55, '768', 1, '2023-11-06 06:42:32'),
(56, '768', 1, '2023-11-06 06:42:34'),
(57, '768', 1, '2023-11-06 06:42:42'),
(58, '768', 1, '2023-11-06 06:42:44'),
(59, '768', 1, '2023-11-06 06:42:54'),
(60, '768', 1, '2023-11-06 06:42:55'),
(61, '768', 1, '2023-11-06 06:42:56'),
(62, '768', 1, '2023-11-06 06:44:47'),
(63, '768', 1, '2023-11-06 06:44:49'),
(64, '768', 1, '2023-11-06 06:44:49'),
(65, '768', 1, '2023-11-06 06:44:56'),
(66, '768', 1, '2023-11-06 06:44:57'),
(67, '768', 1, '2023-11-06 06:44:58'),
(68, '768', 1, '2023-11-06 06:45:50'),
(69, '768', 1, '2023-11-06 06:45:58'),
(70, '768', 1, '2023-11-06 06:46:40'),
(71, '768', 1, '2023-11-06 06:46:41'),
(72, '768', 1, '2023-11-06 06:47:22'),
(73, '768', 1, '2023-11-06 06:47:23'),
(74, '768', 1, '2023-11-06 06:47:41'),
(75, '768', 1, '2023-11-06 06:47:42'),
(76, '768', 1, '2023-11-06 06:47:43'),
(77, '768', 1, '2023-11-06 06:48:00'),
(78, '768', 1, '2023-11-06 06:48:01'),
(79, '768', 1, '2023-11-06 06:48:27'),
(80, '768', 1, '2023-11-06 06:48:34'),
(81, '768', 1, '2023-11-06 06:50:53'),
(82, '768', 1, '2023-11-06 06:50:55'),
(83, '6554', 1, '2023-11-06 06:51:06'),
(84, '6554', 1, '2023-11-06 06:52:51'),
(85, '6554', 1, '2023-11-06 06:53:11'),
(86, '6554', 1, '2023-11-06 06:53:16'),
(87, '6554', 1, '2023-11-06 06:56:05'),
(88, '6554', 1, '2023-11-06 06:56:06'),
(89, '6554', 1, '2023-11-06 06:56:08'),
(90, '6554', 1, '2023-11-06 06:56:30'),
(91, '6554', 1, '2023-11-06 06:56:31'),
(92, '6554', 1, '2023-11-06 06:56:47'),
(93, '6554', 1, '2023-11-06 06:57:03'),
(94, '9900', 1, '2023-11-06 07:01:40'),
(95, '9900', 1, '2023-11-06 07:02:11'),
(96, '9900', 1, '2023-11-06 07:02:12'),
(97, '9900', 1, '2023-11-06 07:02:13'),
(98, '9900', 1, '2023-11-06 07:02:39'),
(99, '9900', 1, '2023-11-06 07:02:40'),
(100, '9900', 1, '2023-11-06 07:02:41'),
(101, '9900', 1, '2023-11-06 07:02:41'),
(102, '9900', 1, '2023-11-06 07:02:42'),
(103, '9900', 1, '2023-11-06 07:03:07'),
(104, '9900', 1, '2023-11-06 07:03:08'),
(105, '9900', 1, '2023-11-06 07:03:09'),
(106, '9900', 1, '2023-11-06 07:03:19'),
(107, '768', 1, '2023-11-06 07:03:41'),
(108, '768', 1, '2023-11-06 07:04:04'),
(109, '768', 1, '2023-11-06 07:06:07'),
(110, '9900', 1, '2023-11-06 07:06:18'),
(111, '768', 1, '2023-11-06 07:06:44'),
(112, '143', 1, '2023-11-06 07:07:00'),
(113, '9900', 1, '2023-11-06 07:08:40'),
(114, '9900', 1, '2023-11-06 07:10:14'),
(115, '9900', 1, '2023-11-06 07:11:41'),
(116, '9900', 1, '2023-11-06 07:12:18'),
(117, '9900', 1, '2023-11-06 07:12:20'),
(118, '9900', 1, '2023-11-06 07:12:25'),
(119, '9900', 1, '2023-11-06 07:12:25'),
(120, '6554', 1, '2023-11-06 07:15:37'),
(121, '6554', 1, '2023-11-06 07:21:45'),
(122, '6554', 1, '2023-11-06 07:22:35'),
(123, '6554', 1, '2023-11-06 07:23:00'),
(124, '6554', 1, '2023-11-06 07:23:01'),
(125, '6554', 1, '2023-11-06 07:23:18'),
(126, '6554', 1, '2023-11-06 07:23:45'),
(127, '6554', 1, '2023-11-06 07:23:51'),
(128, '9900', 1, '2023-11-06 07:27:37'),
(129, '567', 1, '2023-11-07 07:32:30'),
(130, '567', 1, '2023-11-07 07:33:41'),
(131, '567', 1, '2023-11-07 07:34:24'),
(132, '567', 1, '2023-11-07 07:34:28'),
(133, '567', 1, '2023-11-07 07:37:17'),
(134, '567', 1, '2023-11-07 07:41:33'),
(135, '567', 1, '2023-11-07 07:41:38'),
(136, '567', 1, '2023-11-07 07:41:45'),
(137, '567', 1, '2023-11-07 07:50:07'),
(138, '567', 1, '2023-11-07 07:50:31'),
(139, '567', 1, '2023-11-07 07:52:18'),
(140, '143', 1, '2023-11-07 07:52:26'),
(141, '143', 1, '2023-11-07 07:52:32'),
(142, '5657', 1, '2023-11-07 07:52:34'),
(143, '5657', 1, '2023-11-07 07:54:20'),
(144, '5657', 1, '2023-11-07 07:56:03'),
(145, '5657', 1, '2023-11-07 07:58:51'),
(146, '5657', 1, '2023-11-07 07:59:21'),
(147, '5657', 1, '2023-11-07 07:59:21'),
(148, '5657', 1, '2023-11-07 07:59:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `dsciojweoicjeiojo` (`added_by`);

--
-- Indexes for table `movies_crud_log`
--
ALTER TABLE `movies_crud_log`
  ADD PRIMARY KEY (`#`),
  ADD KEY `dsfgiojrgiovjeioj` (`movie`),
  ADD KEY `defrjrioj` (`action_by`);

--
-- Indexes for table `movie_likes`
--
ALTER TABLE `movie_likes`
  ADD PRIMARY KEY (`#`),
  ADD KEY `dsiovkmjsdioj` (`movie`);

--
-- Indexes for table `movie_views`
--
ALTER TABLE `movie_views`
  ADD PRIMARY KEY (`#`),
  ADD KEY `disofjeriofjfiojioqj` (`movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies_crud_log`
--
ALTER TABLE `movies_crud_log`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie_likes`
--
ALTER TABLE `movie_likes`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie_views`
--
ALTER TABLE `movie_views`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `dsciojweoicjeiojo` FOREIGN KEY (`added_by`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies_crud_log`
--
ALTER TABLE `movies_crud_log`
  ADD CONSTRAINT `defrjrioj` FOREIGN KEY (`action_by`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dsfgiojrgiovjeioj` FOREIGN KEY (`movie`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_likes`
--
ALTER TABLE `movie_likes`
  ADD CONSTRAINT `dsiovkmjsdioj` FOREIGN KEY (`movie`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_views`
--
ALTER TABLE `movie_views`
  ADD CONSTRAINT `disofjeriofjfiojioqj` FOREIGN KEY (`movie`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
