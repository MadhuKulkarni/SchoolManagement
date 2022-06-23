-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_attendance`
--

CREATE TABLE `my_attendance` (
  `studId` int(8) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(14) NOT NULL,
  `attendance` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_attendance`
--

INSERT INTO `my_attendance` (`studId`, `subject`, `date`, `time`, `attendance`) VALUES
(11, 'Math', '24-06-2022', '12:00-13:00', 'Present'),
(11, 'Math', '27-06-2022', '14:00-15:00', 'Present'),
(11, 'Physics', '27-06-2022', '12:00-13:00', 'Present'),
(12, 'Math', '24-06-2022', '12:00-13:00', 'Present'),
(12, 'Math', '27-06-2022', '14:00-15:00', 'Present'),
(12, 'Physics', '27-06-2022', '12:00-13:00', 'Present'),
(13, 'Math', '24-06-2022', '12:00-13:00', 'Present'),
(13, 'Math', '27-06-2022', '14:00-15:00', 'Present'),
(13, 'Physics', '27-06-2022', '12:00-13:00', 'Present'),
(19, 'Math', '24-06-2022', '12:00-13:00', 'Absent'),
(19, 'Math', '27-06-2022', '14:00-15:00', 'Present'),
(19, 'Physics', '27-06-2022', '12:00-13:00', 'Absent'),
(20, 'Math', '24-06-2022', '12:00-13:00', 'Absent'),
(20, 'Math', '27-06-2022', '14:00-15:00', 'Present'),
(20, 'Physics', '27-06-2022', '12:00-13:00', 'Absent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_attendance`
--
ALTER TABLE `my_attendance`
  ADD PRIMARY KEY (`studId`,`subject`,`date`,`time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
