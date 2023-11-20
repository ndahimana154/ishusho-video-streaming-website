-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2023 at 01:57 PM
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
('123', 'The Lord of the Rings', 'The Fellowship of the Ring embark on a journey to destroy the One Ring and end Sauron\'s reign over Middle-earth.', 'Adventure, Animation, Fantasy', 'https://image.tmdb.org/t/p/w500/liW0mjvTyLs7UCumaHhx3PpU4VT.jpg', 'https://www.youtube.com/watch?v=wPe6BNPUmI0', '', '', '1978-11-15', '2023-11-17 11:05:32', 1),
('143', 'All Quiet on the Western Front', 'A young soldier faces profound disillusionment in the soul-destroying horror of World War I. Together with several other young German soldiers, he experiences the horrors of war, such evil of which he had not conceived of when signing up to fight. They eventually become sad, tormented, and confused of their purpose.', 'Drama, War', 'https://image.tmdb.org/t/p/w500/1wZUB08igw8iLUgF1r4T6aJD65b.jpg', 'https://www.youtube.com/watch?v=Qeh3DlBEjAc', '', '', '1930-04-29', '2023-11-01 07:07:47', 1),
('308', 'Broken Flowers', 'As the devoutly single Don Johnston is dumped by his latest girlfriend, he receives an anonymous pink letter informing him that he has a son who may be looking for him.', 'Comedy, Drama, Mystery, Romance', 'https://image.tmdb.org/t/p/w500/gd8JNjwgiM6ZgGm6NFAkovQWoYn.jpg', 'https://www.youtube.com/watch?v=ua2QQHOuzPI', 'https://www.gasape.com/upload/videos/2023/09/lWHWX2Qxoo2TWYoVwHWX_26_cfdb8bd0d42dd2f9824dacc71e7e9ba0_video_480p_converted.mp4', '', '2005-08-05', '2023-11-08 04:50:03', 1),
('32222', 'American Desi', 'College freshman Krishna Reddy, who has never cared for his Indian-American cultural heritage, looks forward to a new life on campus but is surprised to find that he has been assigned Indian roommates.', 'Comedy, Romance, Drama', 'https://image.tmdb.org/t/p/w500/hklG9Ehe1Rt2dlgBplTIyov62qi.jpg', '', '', '', '2001-01-01', '2023-11-02 11:12:23', 1),
('5657', 'The Worm Eaters', 'Herman Umgar, a German hermit, has an ability to communicate with worms. One day the mayor of the town runs him off his property, so in revenge he plants worms in everybody\'s food. However, these worms are a special breed of mutant worms from the Red Tide, and when the people eat them they are transformed into giant worms themselves. These worm-people also become Herman\'s slaves. What will the remaining do?', 'Comedy, Horror', 'https://image.tmdb.org/t/p/w500/aeu5VtuXk3PUjHBAoA0q10eckcp.jpg', 'https://www.youtube.com/watch?v=Xxt4bcZQKl8', '', '', '1977-04-12', '2023-11-01 07:11:48', 1),
('567', 'Rear Window ', 'A wheelchair-bound photographer spies on his neighbors from his apartment window and becomes convinced one of them has committed murder.', 'Thriller, Mystery', 'https://image.tmdb.org/t/p/w500/ILVF0eJxHMddjxeQhswFtpMtqx.jpg', 'https://www.youtube.com/watch?v=n0RLdU5bDF4', '', '', '1954-08-01', '2023-11-02 11:11:39', 1),
('5689', 'The Blue Lagoon', 'Two small children and a ship\'s cook survive a shipwreck and find safety on an idyllic tropical island. Soon, however, the cook dies and the young boy and girl are left on their own. Days become years and Emmeline and Richard make a home for themselves surrounded by exotic creatures and nature\'s beauty. But will they ever see civilization again?', 'Romance, Adventure', 'https://image.tmdb.org/t/p/w500/zaoq2K1oPWpF91XZ0aesfUCasqb.jpg', 'https://www.youtube.com/watch?v=A0UapwJIJn8', '', '', '1980-07-05', '2023-11-17 11:05:43', 1),
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
(3, '143', '2023-11-07 07:52:32'),
(4, '32222', '2023-11-07 14:55:08'),
(5, '308', '2023-11-08 07:52:48'),
(6, '308', '2023-11-08 07:54:07'),
(7, '308', '2023-11-08 07:54:22'),
(8, '308', '2023-11-08 07:54:24'),
(9, '308', '2023-11-08 07:54:31'),
(10, '308', '2023-11-08 07:55:56'),
(11, '308', '2023-11-08 07:57:04'),
(12, '308', '2023-11-08 07:57:39'),
(13, '308', '2023-11-08 07:58:00'),
(14, '308', '2023-11-08 07:58:03'),
(15, '308', '2023-11-08 07:58:31'),
(16, '308', '2023-11-08 07:58:32'),
(17, '308', '2023-11-08 07:58:56'),
(18, '308', '2023-11-08 07:58:57'),
(19, '308', '2023-11-08 07:59:24'),
(20, '308', '2023-11-08 08:01:26'),
(21, '308', '2023-11-08 08:01:27'),
(22, '308', '2023-11-08 08:10:04'),
(23, '308', '2023-11-08 08:10:45'),
(24, '308', '2023-11-08 08:11:13'),
(25, '308', '2023-11-08 08:12:04'),
(26, '308', '2023-11-08 08:13:36'),
(27, '308', '2023-11-08 08:13:52'),
(28, '308', '2023-11-08 08:15:00'),
(29, '308', '2023-11-08 08:15:04'),
(30, '308', '2023-11-08 08:19:08'),
(31, '308', '2023-11-08 08:19:37'),
(32, '308', '2023-11-08 08:19:59'),
(33, '308', '2023-11-08 08:20:01'),
(34, '308', '2023-11-08 08:22:09'),
(35, '308', '2023-11-08 08:22:26');

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
(148, '5657', 1, '2023-11-07 07:59:53'),
(149, '32222', 1, '2023-11-07 14:54:45'),
(150, '32222', 1, '2023-11-07 14:55:08'),
(151, '1064024', 1, '2023-11-07 14:55:30'),
(152, '1064024', 1, '2023-11-07 14:57:24'),
(153, '308', 1, '2023-11-08 05:50:36'),
(154, '308', 1, '2023-11-08 05:51:36'),
(155, '308', 1, '2023-11-08 05:52:41'),
(156, '308', 1, '2023-11-08 05:52:55'),
(157, '308', 1, '2023-11-08 05:53:27'),
(158, '118', 1, '2023-11-08 07:01:42'),
(159, '308', 1, '2023-11-08 07:34:44'),
(160, '308', 1, '2023-11-08 07:37:01'),
(161, '308', 1, '2023-11-08 07:37:03'),
(162, '308', 1, '2023-11-08 07:37:05'),
(163, '308', 1, '2023-11-08 07:37:28'),
(164, '308', 1, '2023-11-08 07:38:04'),
(165, '308', 1, '2023-11-08 07:38:57'),
(166, '308', 1, '2023-11-08 07:40:15'),
(167, '308', 1, '2023-11-08 07:40:35'),
(168, '308', 1, '2023-11-08 07:42:08'),
(169, '308', 1, '2023-11-08 07:44:00'),
(170, '308', 1, '2023-11-08 07:45:12'),
(171, '308', 1, '2023-11-08 07:45:52'),
(172, '308', 1, '2023-11-08 07:49:06'),
(173, '308', 1, '2023-11-08 07:49:45'),
(174, '308', 1, '2023-11-08 07:51:20'),
(175, '308', 1, '2023-11-08 07:52:31'),
(176, '308', 1, '2023-11-08 07:52:48'),
(177, '308', 1, '2023-11-08 07:54:07'),
(178, '308', 1, '2023-11-08 07:54:22'),
(179, '308', 1, '2023-11-08 07:54:24'),
(180, '308', 1, '2023-11-08 07:54:31'),
(181, '308', 1, '2023-11-08 07:55:55'),
(182, '308', 1, '2023-11-08 07:57:04'),
(183, '308', 1, '2023-11-08 07:57:39'),
(184, '308', 1, '2023-11-08 07:58:00'),
(185, '308', 1, '2023-11-08 07:58:03'),
(186, '308', 1, '2023-11-08 07:58:31'),
(187, '308', 1, '2023-11-08 07:58:32'),
(188, '308', 1, '2023-11-08 07:58:56'),
(189, '308', 1, '2023-11-08 07:58:57'),
(190, '308', 1, '2023-11-08 07:59:24'),
(191, '308', 1, '2023-11-08 08:01:25'),
(192, '308', 1, '2023-11-08 08:01:27'),
(193, '308', 1, '2023-11-08 08:10:04'),
(194, '308', 1, '2023-11-08 08:10:45'),
(195, '308', 1, '2023-11-08 08:11:13'),
(196, '308', 1, '2023-11-08 08:12:03'),
(197, '308', 1, '2023-11-08 08:13:36'),
(198, '308', 1, '2023-11-08 08:13:52'),
(199, '308', 1, '2023-11-08 08:15:00'),
(200, '308', 1, '2023-11-08 08:15:04'),
(201, '308', 1, '2023-11-08 08:19:08'),
(202, '308', 1, '2023-11-08 08:19:37'),
(203, '308', 1, '2023-11-08 08:19:59'),
(204, '308', 1, '2023-11-08 08:20:01'),
(205, '308', 1, '2023-11-08 08:22:09'),
(206, '308', 1, '2023-11-08 08:22:26'),
(207, '118', 1, '2023-11-08 08:23:51'),
(208, '118', 1, '2023-11-08 08:29:44'),
(209, '118', 1, '2023-11-08 08:30:13'),
(210, '118', 1, '2023-11-08 08:30:59'),
(211, '118', 1, '2023-11-08 08:34:40'),
(212, '118', 1, '2023-11-08 08:41:42'),
(213, '118', 1, '2023-11-08 08:44:51'),
(214, '118', 1, '2023-11-08 09:04:15'),
(215, '118', 1, '2023-11-08 09:05:08'),
(216, '118', 1, '2023-11-08 09:05:37'),
(217, '118', 1, '2023-11-08 09:06:24'),
(218, '118', 1, '2023-11-08 09:06:54'),
(219, '118', 1, '2023-11-08 09:09:52'),
(220, '118', 1, '2023-11-08 09:11:03'),
(221, '118', 1, '2023-11-08 09:11:04'),
(222, '118', 1, '2023-11-08 09:11:05'),
(223, '118', 1, '2023-11-08 09:11:05'),
(224, '118', 1, '2023-11-08 09:11:09'),
(225, '118', 1, '2023-11-08 09:11:15'),
(226, '118', 1, '2023-11-08 09:11:17'),
(227, '9900', 1, '2023-11-08 09:12:15'),
(228, '9900', 1, '2023-11-08 09:12:34'),
(229, '9900', 1, '2023-11-08 09:12:39'),
(230, '9900', 1, '2023-11-08 09:12:40'),
(231, '9900', 1, '2023-11-08 09:12:46'),
(232, '9900', 1, '2023-11-08 09:12:48'),
(233, '9900', 1, '2023-11-08 09:13:07'),
(234, '9900', 1, '2023-11-08 09:13:51'),
(235, '9900', 1, '2023-11-08 09:14:00'),
(236, '9900', 1, '2023-11-08 09:14:01'),
(237, '9900', 1, '2023-11-08 09:14:03'),
(238, '9900', 1, '2023-11-08 09:17:49'),
(239, '9900', 1, '2023-11-08 09:18:13'),
(240, '9900', 1, '2023-11-08 09:18:52'),
(241, '9900', 1, '2023-11-08 09:20:30'),
(242, '9900', 1, '2023-11-08 09:20:57'),
(243, '9900', 1, '2023-11-08 09:21:09'),
(244, '9900', 1, '2023-11-08 09:21:19'),
(245, '9900', 1, '2023-11-08 09:21:20'),
(246, '9900', 1, '2023-11-08 09:22:04'),
(247, '9900', 1, '2023-11-08 09:22:37'),
(248, '9900', 1, '2023-11-08 09:22:57'),
(249, '9900', 1, '2023-11-08 09:23:21'),
(250, '9900', 1, '2023-11-08 09:23:29'),
(251, '9900', 1, '2023-11-08 09:25:52'),
(252, '9900', 1, '2023-11-08 09:25:53'),
(253, '9900', 1, '2023-11-08 09:26:37'),
(254, '9900', 1, '2023-11-08 09:26:38'),
(255, '9900', 1, '2023-11-08 09:27:26'),
(256, '9900', 1, '2023-11-08 09:27:36'),
(257, '9900', 1, '2023-11-08 09:29:39'),
(258, '9900', 1, '2023-11-08 09:30:01'),
(259, '9900', 1, '2023-11-08 09:30:37'),
(260, '9900', 1, '2023-11-08 09:30:47'),
(261, '9900', 1, '2023-11-08 09:30:47'),
(262, '9900', 1, '2023-11-08 09:30:48'),
(263, '9900', 1, '2023-11-08 09:30:51'),
(264, '9900', 1, '2023-11-08 09:31:19'),
(265, '9900', 1, '2023-11-08 09:31:20'),
(266, '9900', 1, '2023-11-08 09:31:25'),
(267, '9900', 1, '2023-11-08 09:32:17'),
(268, '9900', 1, '2023-11-08 09:32:30'),
(269, '9900', 1, '2023-11-08 09:33:47'),
(270, '9900', 1, '2023-11-08 09:33:48'),
(271, '9900', 1, '2023-11-08 09:34:10'),
(272, '9900', 1, '2023-11-08 09:34:11'),
(273, '9900', 1, '2023-11-08 09:34:20'),
(274, '9900', 1, '2023-11-08 09:34:32'),
(275, '9900', 1, '2023-11-08 09:37:25'),
(276, '9900', 1, '2023-11-08 09:37:39'),
(277, '9900', 1, '2023-11-08 09:37:40'),
(278, '9900', 1, '2023-11-08 09:38:12'),
(279, '9900', 1, '2023-11-08 09:39:06'),
(280, '9900', 1, '2023-11-08 09:39:46'),
(281, '9900', 1, '2023-11-08 09:40:00'),
(282, '9900', 1, '2023-11-08 09:40:01'),
(283, '9900', 1, '2023-11-08 09:40:39'),
(284, '9900', 1, '2023-11-08 09:42:08'),
(285, '9900', 1, '2023-11-08 09:42:10'),
(286, '9900', 1, '2023-11-08 09:42:55'),
(287, '9900', 1, '2023-11-08 09:42:56'),
(288, '9900', 1, '2023-11-08 09:43:03'),
(289, '9900', 1, '2023-11-08 09:43:04'),
(290, '9900', 1, '2023-11-08 09:43:13'),
(291, '9900', 1, '2023-11-08 09:43:14'),
(292, '9900', 1, '2023-11-08 09:43:21'),
(293, '9900', 1, '2023-11-08 09:43:26'),
(294, '9900', 1, '2023-11-08 09:43:28'),
(295, '9900', 1, '2023-11-08 09:43:39'),
(296, '9900', 1, '2023-11-08 09:43:59'),
(297, '9900', 1, '2023-11-08 09:44:07'),
(298, '9900', 1, '2023-11-08 09:44:08'),
(299, '9900', 1, '2023-11-08 09:44:18'),
(300, '9900', 1, '2023-11-08 09:44:28'),
(301, '9900', 1, '2023-11-08 09:44:30'),
(302, '9900', 1, '2023-11-08 09:46:11'),
(303, '9900', 1, '2023-11-08 09:46:39'),
(304, '9900', 1, '2023-11-08 09:46:40'),
(305, '9900', 1, '2023-11-08 09:47:01'),
(306, '9900', 1, '2023-11-08 09:47:09'),
(307, '9900', 1, '2023-11-08 09:47:15'),
(308, '9900', 1, '2023-11-08 09:48:06'),
(309, '9900', 1, '2023-11-08 09:49:29'),
(310, '9900', 1, '2023-11-08 09:49:51'),
(311, '9900', 1, '2023-11-08 09:51:29'),
(312, '9900', 1, '2023-11-08 09:51:32'),
(313, '9900', 1, '2023-11-08 09:53:14'),
(314, '9900', 1, '2023-11-08 09:53:22'),
(315, '9900', 1, '2023-11-08 09:53:43'),
(316, '9900', 1, '2023-11-08 09:53:45'),
(317, '9900', 1, '2023-11-08 09:55:53'),
(318, '9900', 1, '2023-11-08 09:56:08'),
(319, '9900', 1, '2023-11-08 09:56:09'),
(320, '9900', 1, '2023-11-08 09:56:23'),
(321, '9900', 1, '2023-11-08 09:56:25'),
(322, '9900', 1, '2023-11-08 09:56:33'),
(323, '9900', 1, '2023-11-08 09:56:34'),
(324, '9900', 1, '2023-11-08 09:56:54'),
(325, '9900', 1, '2023-11-08 09:57:19'),
(326, '9900', 1, '2023-11-08 09:57:20'),
(327, '9900', 1, '2023-11-08 09:57:30'),
(328, '9900', 1, '2023-11-08 09:57:32'),
(329, '9900', 1, '2023-11-08 09:57:36'),
(330, '9900', 1, '2023-11-08 09:57:47'),
(331, '9900', 1, '2023-11-08 09:57:48'),
(332, '9900', 1, '2023-11-08 09:57:56'),
(333, '9900', 1, '2023-11-08 09:57:57'),
(334, '9900', 1, '2023-11-08 10:00:21'),
(335, '9900', 1, '2023-11-08 10:00:40'),
(336, '9900', 1, '2023-11-08 10:00:42'),
(337, '9900', 1, '2023-11-08 10:00:45'),
(338, '9900', 1, '2023-11-08 10:00:46'),
(339, '9900', 1, '2023-11-08 10:00:59'),
(340, '9900', 1, '2023-11-08 10:01:01'),
(341, '9900', 1, '2023-11-08 10:01:13'),
(342, '9900', 1, '2023-11-08 10:01:14'),
(343, '9900', 1, '2023-11-08 10:01:22'),
(344, '9900', 1, '2023-11-08 10:01:23'),
(345, '9900', 1, '2023-11-08 10:01:38'),
(346, '9900', 1, '2023-11-08 10:01:41'),
(347, '9900', 1, '2023-11-08 10:01:49'),
(348, '9900', 1, '2023-11-08 10:01:50'),
(349, '9900', 1, '2023-11-08 10:01:50'),
(350, '9900', 1, '2023-11-08 10:01:50'),
(351, '9900', 1, '2023-11-08 10:01:51'),
(352, '9900', 1, '2023-11-08 10:01:52'),
(353, '9900', 1, '2023-11-08 10:02:00'),
(354, '9900', 1, '2023-11-08 10:03:08'),
(355, '9900', 1, '2023-11-08 10:03:15'),
(356, '9900', 1, '2023-11-08 10:03:16'),
(357, '9900', 1, '2023-11-08 10:03:22'),
(358, '9900', 1, '2023-11-08 10:03:23'),
(359, '9900', 1, '2023-11-08 10:03:29'),
(360, '9900', 1, '2023-11-08 10:03:30'),
(361, '9900', 1, '2023-11-08 10:04:21'),
(362, '9900', 1, '2023-11-08 10:04:30'),
(363, '9900', 1, '2023-11-08 10:04:31'),
(364, '9900', 1, '2023-11-08 10:05:13'),
(365, '9900', 1, '2023-11-08 10:05:45'),
(366, '9900', 1, '2023-11-08 10:05:46'),
(367, '9900', 1, '2023-11-08 10:05:51'),
(368, '9900', 1, '2023-11-08 10:05:54'),
(369, '9900', 1, '2023-11-08 10:05:55'),
(370, '9900', 1, '2023-11-08 10:05:55'),
(371, '9900', 1, '2023-11-08 10:06:09'),
(372, '9900', 1, '2023-11-08 10:06:10'),
(373, '9900', 1, '2023-11-08 10:06:21'),
(374, '9900', 1, '2023-11-08 10:06:22'),
(375, '9900', 1, '2023-11-08 10:06:24'),
(376, '9900', 1, '2023-11-08 10:06:27'),
(377, '9900', 1, '2023-11-08 10:06:28'),
(378, '9900', 1, '2023-11-08 10:06:38'),
(379, '9900', 1, '2023-11-08 10:06:39'),
(380, '9900', 1, '2023-11-08 10:06:39'),
(381, '9900', 1, '2023-11-08 10:06:46'),
(382, '9900', 1, '2023-11-08 10:06:48'),
(383, '9900', 1, '2023-11-08 10:07:03'),
(384, '9900', 1, '2023-11-08 10:07:04'),
(385, '9900', 1, '2023-11-08 10:07:07'),
(386, '9900', 1, '2023-11-08 10:07:08'),
(387, '9900', 1, '2023-11-08 10:07:14'),
(388, '9900', 1, '2023-11-08 10:07:16'),
(389, '9900', 1, '2023-11-08 10:07:22'),
(390, '9900', 1, '2023-11-08 10:07:28'),
(391, '9900', 1, '2023-11-08 10:07:28'),
(392, '9900', 1, '2023-11-08 10:07:29'),
(393, '9900', 1, '2023-11-08 10:07:29'),
(394, '9900', 1, '2023-11-08 10:09:49'),
(395, '9900', 1, '2023-11-08 10:10:46'),
(396, '9900', 1, '2023-11-08 10:11:08'),
(397, '9900', 1, '2023-11-08 10:11:28'),
(398, '9900', 1, '2023-11-08 10:11:29'),
(399, '9900', 1, '2023-11-08 10:11:43'),
(400, '9900', 1, '2023-11-08 10:13:10'),
(401, '9900', 1, '2023-11-08 10:13:23'),
(402, '9900', 1, '2023-11-08 10:13:32'),
(403, '9900', 1, '2023-11-08 10:13:33'),
(404, '9900', 1, '2023-11-08 10:13:34'),
(405, '9900', 1, '2023-11-08 10:13:39'),
(406, '9900', 1, '2023-11-08 10:14:04'),
(407, '9900', 1, '2023-11-08 10:14:07'),
(408, '9900', 1, '2023-11-08 10:14:26'),
(409, '9900', 1, '2023-11-08 10:14:29'),
(410, '9900', 1, '2023-11-08 10:14:29'),
(411, '9900', 1, '2023-11-08 10:14:29'),
(412, '9900', 1, '2023-11-08 10:14:29'),
(413, '9900', 1, '2023-11-08 10:14:29'),
(414, '9900', 1, '2023-11-08 10:16:20'),
(415, '9900', 1, '2023-11-08 10:16:27'),
(416, '9900', 1, '2023-11-08 10:16:32'),
(417, '9900', 1, '2023-11-08 10:16:32'),
(418, '9900', 1, '2023-11-08 10:17:31'),
(419, '9900', 1, '2023-11-08 10:17:55'),
(420, '9900', 1, '2023-11-08 10:18:27'),
(421, '9900', 1, '2023-11-08 10:18:37'),
(422, '9900', 1, '2023-11-08 10:18:48'),
(423, '9900', 1, '2023-11-08 10:18:49'),
(424, '9900', 1, '2023-11-08 10:19:14'),
(425, '9900', 1, '2023-11-08 10:19:15'),
(426, '9900', 1, '2023-11-08 10:19:23'),
(427, '9900', 1, '2023-11-08 10:19:42'),
(428, '9900', 1, '2023-11-08 10:20:02'),
(429, '9900', 1, '2023-11-08 10:20:09'),
(430, '9900', 1, '2023-11-08 10:20:19'),
(431, '9900', 1, '2023-11-08 10:20:20'),
(432, '9900', 1, '2023-11-08 10:20:54'),
(433, '9900', 1, '2023-11-08 10:20:55'),
(434, '9900', 1, '2023-11-08 10:21:05'),
(435, '9900', 1, '2023-11-08 10:21:06'),
(436, '9900', 1, '2023-11-08 10:21:07'),
(437, '9900', 1, '2023-11-08 10:21:26'),
(438, '9900', 1, '2023-11-08 10:21:34'),
(439, '9900', 1, '2023-11-08 10:21:35'),
(440, '9900', 1, '2023-11-08 10:22:34'),
(441, '9900', 1, '2023-11-08 10:22:51'),
(442, '9900', 1, '2023-11-08 10:22:52'),
(443, '9900', 1, '2023-11-08 10:22:59'),
(444, '9900', 1, '2023-11-08 10:23:01'),
(445, '9900', 1, '2023-11-08 10:23:11'),
(446, '9900', 1, '2023-11-08 10:23:12'),
(447, '9900', 1, '2023-11-08 10:23:24'),
(448, '9900', 1, '2023-11-08 10:23:38'),
(449, '9900', 1, '2023-11-08 10:24:03'),
(450, '9900', 1, '2023-11-08 10:24:13'),
(451, '9900', 1, '2023-11-08 10:28:08'),
(452, '9900', 1, '2023-11-08 10:28:32'),
(453, '9900', 1, '2023-11-08 10:28:33'),
(454, '9900', 1, '2023-11-08 10:28:51'),
(455, '9900', 1, '2023-11-08 10:29:28'),
(456, '9900', 1, '2023-11-08 10:29:30'),
(457, '9900', 1, '2023-11-08 10:29:30'),
(458, '9900', 1, '2023-11-08 10:29:39'),
(459, '9900', 1, '2023-11-08 10:29:47'),
(460, '9900', 1, '2023-11-08 10:30:07'),
(461, '9900', 1, '2023-11-08 10:30:08'),
(462, '9900', 1, '2023-11-08 10:30:21'),
(463, '9900', 1, '2023-11-08 10:30:21'),
(464, '9900', 1, '2023-11-08 10:30:22'),
(465, '9900', 1, '2023-11-08 10:31:18'),
(466, '9900', 1, '2023-11-08 10:31:33'),
(467, '9900', 1, '2023-11-08 10:32:26'),
(468, '9900', 1, '2023-11-08 10:34:54'),
(469, '9900', 1, '2023-11-08 10:34:59'),
(470, '9900', 1, '2023-11-08 10:35:15'),
(471, '9900', 1, '2023-11-08 10:38:27'),
(472, '9900', 1, '2023-11-08 10:38:29'),
(473, '9900', 1, '2023-11-08 10:39:13'),
(474, '9900', 1, '2023-11-08 10:39:13'),
(475, '9900', 1, '2023-11-08 10:41:43'),
(476, '308', 1, '2023-11-08 10:42:02'),
(477, '308', 1, '2023-11-08 10:42:46'),
(478, '1064024', 1, '2023-11-14 14:49:49'),
(479, '768', 1, '2023-11-15 16:14:44'),
(480, '5689', 1, '2023-11-17 12:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `serie_id` varchar(255) NOT NULL,
  `serie_name` text NOT NULL,
  `serie_overview` text NOT NULL,
  `serie_categories` text NOT NULL,
  `serie_poster` text NOT NULL,
  `serie_url` text NOT NULL,
  `serie_releasedate` varchar(255) NOT NULL,
  `serie_addition_time` varchar(255) NOT NULL,
  `serie_added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`serie_id`, `serie_name`, `serie_overview`, `serie_categories`, `serie_poster`, `serie_url`, `serie_releasedate`, `serie_addition_time`, `serie_added_by`) VALUES
('226773', 'Senior High', 'A student’s death causes a scandal at the prestigious Northford High. Investigations conclude it was a suicide. The victim’s twin sister thinks otherwise. As she searches for truth, she will unravel secrets that are far more shocking and dangerous.', 'Drama, Mystery', 'https://image.tmdb.org/t/p/w500/k285iD6gZIoLsVSczSjc4WIXkdc.jpg', 'https://www.youtube.com/watch?v=9tCJ14_wv8s', '2023-08-28', '2023-11-17 06:07:30', 1),
('231454', 'The Justice', 'Qi Heng, vice president of the Qizhou Intermediate People\'s Court, took over the complicated \"fishing boat murder case\" as soon as he took office and peeled back the survivors\' testimony to find loopholes in them. At the same time, Luo Huai Gong\'s \"Jiang Yun Chemical Group\',\" causes the villagers living near the factory to suffer from terminal illness. Soon, both cases will connect together in an unexpected way.', 'Crime, Mystery', 'https://image.tmdb.org/t/p/w500/1k2Xaetf31vXEg4oAEKJzzK5aBa.jpg', '', '2023-10-30', '2023-11-20 01:10:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `series_episodes`
--

CREATE TABLE `series_episodes` (
  `id` int(11) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `episode_name` text NOT NULL,
  `episode_720` text NOT NULL,
  `episode_480` text NOT NULL,
  `addition_date` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `series_episodes`
--

INSERT INTO `series_episodes` (`id`, `serie`, `episode_name`, `episode_720`, `episode_480`, `addition_date`, `added_by`) VALUES
(3, '231454', 'rged', 'ewe', 'efwf', '2023-11-18 04:37:51', 1);

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
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`serie_id`),
  ADD KEY `dgfhjghgfbf` (`serie_added_by`);

--
-- Indexes for table `series_episodes`
--
ALTER TABLE `series_episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seregferfv` (`serie`),
  ADD KEY `egvrftvvvrevf` (`added_by`);

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
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `movie_views`
--
ALTER TABLE `movie_views`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT for table `series_episodes`
--
ALTER TABLE `series_episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `dgfhjghgfbf` FOREIGN KEY (`serie_added_by`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series_episodes`
--
ALTER TABLE `series_episodes`
  ADD CONSTRAINT `egvrftvvvrevf` FOREIGN KEY (`added_by`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seregferfv` FOREIGN KEY (`serie`) REFERENCES `series` (`serie_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
