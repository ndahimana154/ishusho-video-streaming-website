-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2023 at 11:53 AM
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
(1, 'admin', 'admin1234', 'No profile', '');

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
('143', 'All Quiet on the Western Front', 'A young soldier faces profound disillusionment in the soul-destroying horror of World War I. Together with several other young German soldiers, he experiences the horrors of war, such evil of which he had not conceived of when signing up to fight. They eventually become sad, tormented, and confused of their purpose.', 'Drama, War', 'https://image.tmdb.org/t/p/w500/1wZUB08igw8iLUgF1r4T6aJD65b.jpg', 'https://www.youtube.com/watch?v=Qeh3DlBEjAc', '', '', '1930-04-29', '2023-11-01 07:07:47', 1),
('32222', 'American Desi', 'College freshman Krishna Reddy, who has never cared for his Indian-American cultural heritage, looks forward to a new life on campus but is surprised to find that he has been assigned Indian roommates.', 'Comedy, Romance, Drama', 'https://image.tmdb.org/t/p/w500/hklG9Ehe1Rt2dlgBplTIyov62qi.jpg', '', '', '', '2001-01-01', '2023-11-02 11:12:23', 1),
('5657', 'The Worm Eaters', 'Herman Umgar, a German hermit, has an ability to communicate with worms. One day the mayor of the town runs him off his property, so in revenge he plants worms in everybody\'s food. However, these worms are a special breed of mutant worms from the Red Tide, and when the people eat them they are transformed into giant worms themselves. These worm-people also become Herman\'s slaves. What will the remaining do?', 'Comedy, Horror', 'https://image.tmdb.org/t/p/w500/aeu5VtuXk3PUjHBAoA0q10eckcp.jpg', 'https://www.youtube.com/watch?v=Xxt4bcZQKl8', '', '', '1977-04-12', '2023-11-01 07:11:48', 1),
('567', 'Rear Window ', 'A wheelchair-bound photographer spies on his neighbors from his apartment window and becomes convinced one of them has committed murder.', 'Thriller, Mystery', 'https://image.tmdb.org/t/p/w500/ILVF0eJxHMddjxeQhswFtpMtqx.jpg', 'https://www.youtube.com/watch?v=n0RLdU5bDF4', '', '', '1954-08-01', '2023-11-02 11:11:39', 1),
('6554', 'The Architects', 'The architect Daniel Brenner is in his late thirties when he receives his first challenging and lucrative commission: to design a cultural center for a satellite town in East-Berlin. He accepts the offer under the condition that he gets to choose who he works with. This way, he reunites with former colleagues and friends - most of them architects or students of architecture who have since chosen a different profession due to personal restraint or economic confinement. Together, they develop a concept which they hope will be more appealing to the public than the conventional and dull constructions common to the German Democratic Republic. However, their ambitious plans are once and again foiled by their conservative supervisors. As frustration grows, Daniel has trouble keeping his career in balance with his family-life: his wife Wanda wants to leave for West-Germany.', 'Drama', 'https://image.tmdb.org/t/p/w500/sLEv1bGBBM2r8JoW5174nuuGmnB.jpg', '', '', '', '1990-06-21', '2023-11-02 11:11:53', 1),
('768', 'From Hell', 'Frederick Abberline is an opium-huffing inspector from Scotland Yard who falls for one of Jack the Ripper\'s prostitute targets in this Hughes brothers adaption of a graphic novel that posits the Ripper\'s true identity.', 'Horror, Mystery, Thriller', 'https://image.tmdb.org/t/p/w500/t2WpWM8nBO4sULXr2bDfNEt4qgr.jpg', 'https://www.youtube.com/watch?v=7gJQRKQjvrU', '', '', '2001-02-08', '2023-11-02 11:12:34', 1),
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
(2, '567', 'UPDATING', '2023-11-02 12:52:58', 1);

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
(8, '143', 1, '2023-11-02 11:59:17');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies_crud_log`
--
ALTER TABLE `movies_crud_log`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_views`
--
ALTER TABLE `movie_views`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Constraints for table `movie_views`
--
ALTER TABLE `movie_views`
  ADD CONSTRAINT `disofjeriofjfiojioqj` FOREIGN KEY (`movie`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
