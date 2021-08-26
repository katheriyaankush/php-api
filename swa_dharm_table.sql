-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 06:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swa_dharm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `swa_dharm_table`
--

CREATE TABLE `swa_dharm_table` (
  `id` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `is_attend` varchar(255) DEFAULT NULL,
  `time_duration` varchar(255) DEFAULT NULL,
  `is_volunteer` varchar(255) DEFAULT NULL,
  `is_help` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `swa_dharm_table`
--

INSERT INTO `swa_dharm_table` (`id`, `phone`, `name`, `city`, `state`, `country`, `is_attend`, `time_duration`, `is_volunteer`, `is_help`, `dob`, `date_added`) VALUES
('2021082416113458531', 8130935022, 'Ankush Katharia', 'Bengaluru', 'Karnataka', 'India', '0', '4-6 hours', '0', '0', '0000-00-00', '2021-08-24 19:43:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `swa_dharm_table`
--
ALTER TABLE `swa_dharm_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
