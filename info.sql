-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 08:17 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `DOB` date NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` enum('Mumbai','Thane','Navi-mumbai') NOT NULL,
  `pin_code` int(6) NOT NULL,
  `state` text NOT NULL,
  `country` enum('India','Ireland','USA') NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `class_X_percent` float NOT NULL,
  `class_XII_percent` float NOT NULL,
  `graduation_percent` float NOT NULL,
  `masters_percent` float NOT NULL,
  `courses_applied` enum('BCA','B.Com','B.A') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `DOB`, `e_mail`, `mobile_no`, `gender`, `address`, `city`, `pin_code`, `state`, `country`, `hobbies`, `class_X_percent`, `class_XII_percent`, `graduation_percent`, `masters_percent`, `courses_applied`) VALUES
(1, 'kareena  kapoor', '1990-08-12', 'kk@gmail.com', '8765432109', 'Female', 'fghj', 'Thane', 765432, 'maharashtra', 'India', '', 66, 66, 66, 66, 'B.A'),
(2, 'Shahrukh  Khan', '1990-02-11', 'srk@gmail.com', '9918547698', 'Male', 'lkjhgfd', 'Mumbai', 345678, 'maharashtra', 'India', 'Drawing,Sketching', 88, 88, 88, 88, 'BCA'),
(3, 'Yuvraj  Haryan', '1999-08-12', 'yuvi@gmail.com', '1234567890', 'Male', 'Dombivli', 'Mumbai', 654321, 'maharashtra', 'India', 'Drawing,Singing,Sketching', 99, 99, 99, 99, 'B.Com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
