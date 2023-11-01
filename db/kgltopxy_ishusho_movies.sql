-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2023 at 07:05 PM
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
('1064024', 'Locked In', 'Unhappy newlywed Lina is pitted against her brittle, damaged mother-in-law, Katherine. An affair sets Lina onto a journey of secrecy, betrayal and murder — and a plot to seemingly destroy her. But who is the real victim, and who can she truly trust?', 'Thriller', 'https://image.tmdb.org/t/p/w500/blQaj6biyBMLo34cuFKKwbgjIBz.jpg', 'https://www.youtube.com/watch?v=y6a3yXfMEJg', '', '', '2023-11-01', '2023-11-01 07:02:36', 1);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `dsciojweoicjeiojo` FOREIGN KEY (`added_by`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
