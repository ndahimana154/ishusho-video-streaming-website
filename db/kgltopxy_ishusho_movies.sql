-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2023 at 11:49 AM
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
(3, '231454', 'The Justice Episode 1', 'ewe', 'efwf', '2023-11-18 04:37:51', 1),
(4, '231454', 'The Justice Episode 2', '', '', '2023-11-21 11:25:11', 1),
(5, '231454', 'The Justice episode 3', '', '', '2023-11-21 11:26:36', 1),
(6, '231454', 'The Justice Episode 4', '', '', '2023-11-21 11:49:06', 1);

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
-- AUTO_INCREMENT for table `series_episodes`
--
ALTER TABLE `series_episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
