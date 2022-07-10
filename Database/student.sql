-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 10:20 PM
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
-- Database: `final_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `_status` varchar(255) NOT NULL,
  `reg_year` year(4) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `index_number`, `full_name`, `i_name`, `gender`, `address`, `phone`, `email`, `image_name`, `b_date`, `_status`, `reg_year`, `reg_month`, `reg_date`) VALUES
(11, 11, 'Student 1', 'Student 1jbjb', 'Female', 'USA', '111-111-1112', 'std1@gmail.com', 'uploads/20220414125856.png', '2010-01-01', '', 2017, 'November', '2017-11-24'),
(12, 12, 'Student 2', 'Student 20', 'Male', 'USA', '(222) 222-2222', 'std2@gmail.com', 'uploads/20220414125856.png', '2010-01-02', '', 2017, 'November', '2017-11-24'),
(13, 13, 'Student 3', 'Student 3', 'Female', 'USA', '(333) 333-3333', 'std3@gmail.com', 'uploads/20220414125856.png', '2010-01-03', '', 2017, 'November', '2017-11-24'),
(19, 14, 'Student 4', 'Student 4', 'Female', 'USA', '(444) 444-4444', 'std4@gmail.com', 'uploads/20220414125856.png', '2010-01-04', '', 2017, 'November', '2017-11-24'),
(67, 15, 'Charlie', 's', 'Female', 'Bangalore', '9620148853', 'charlie@gmail.com', '', '2022-06-28', '', 2020, 'August', '2022-07-27'),
(68, 16, 'minu', 's', 'Female', 'Bangalore', '9620148853', 'minu@gmail.com', '', '0000-00-00', '', 2020, 'August', '0000-00-00'),
(69, 17, 'vinay', 'm', 'Male', 'Kengeri', '9620148852', 'vinay@gmail.com', '', '0000-00-00', '', 2020, 'Sep', '0000-00-00'),
(70, 18, 'maitra', 'n', 'Female', 'RR Nagar', '9620148853', 'maitra@gmail.com', '', '0000-00-00', '', 2020, 'Oct', '0000-00-00'),
(71, 19, 'ashwini', 'v', 'Female', 'PP layout', '9620148854', 'ashwini@gmail.com', '', '0000-00-00', '', 2020, 'Nov', '0000-00-00'),
(72, 20, 'tejas', 'k', 'Male', 'RR Nagar', '9620148855', 'tejas@gmail.com', '', '0000-00-00', '', 2020, 'Dec', '0000-00-00'),
(73, 21, 'aadya', 's', 'Female', 'Bangalore', '9620148853', 'aadya@gmail.com', '', '0000-00-00', '', 2020, 'August', '0000-00-00'),
(74, 22, 'achintya', 'm', 'Male', 'Kengeri', '9620148852', 'achi@gmail.com', '', '0000-00-00', '', 2020, 'Sep', '0000-00-00'),
(75, 23, 'maanvi', 'n', 'Female', 'RR Nagar', '9620148853', 'maanvi@gmail.com', '', '0000-00-00', '', 2020, 'Oct', '0000-00-00'),
(76, 24, 'maanvith', 'v', 'Female', 'PP layout', '9620148854', 'maanvith@gmail.com', '', '0000-00-00', '', 2020, 'Nov', '0000-00-00'),
(77, 25, 'viju', 'k', 'Male', 'RR Nagar', '9620148855', 'viju@gmail.com', '', '0000-00-00', '', 2020, 'Dec', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
