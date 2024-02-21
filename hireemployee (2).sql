-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 01:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireemployee`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `epm_sl_no` varchar(10) NOT NULL,
  `emp_name` varchar(60) NOT NULL,
  `emp_unique_name` varchar(80) NOT NULL,
  `emp_email` varchar(80) NOT NULL,
  `emp_phone` varchar(13) NOT NULL,
  `create_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `epm_sl_no`, `emp_name`, `emp_unique_name`, `emp_email`, `emp_phone`, `create_date`) VALUES
(1, '7832723632', 'Shashi Bhusan', '0091sashibhusan', 'praveen@gmail.com', '+918512839872', 'Tuesday 20th of February 2024 09:33:40 AM'),
(2, '9293635624', 'Praveen Kumar Singh', '000911praveen', 'praveen@gmail.com', '917065317064', 'Wednesday 21st of February 2024 08:32:53 AM'),
(3, '116256', 'Narender', 'narender116256', 'nareder@gmail.com', '+919050601510', 'Wednesday 21st of February 2024 09:27:53 AM');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shift_id` int(11) NOT NULL,
  `shift_name` varchar(100) NOT NULL,
  `hours` int(2) NOT NULL,
  `station_id` varchar(8) NOT NULL,
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shift_id`, `shift_name`, `hours`, `station_id`, `create_date`) VALUES
(1, '6:30 TO 15:30 TVM', 9, '', 'Monday 19th of February 2024 02:00:52 PM'),
(4, '8:00 TO 17:00 TVM', 9, '', 'Wednesday 21st of February 2024 06:58:23 AM'),
(5, '6:00 TO 15:00 TVM', 10, '', 'Wednesday 21st of February 2024 08:34:29 AM'),
(6, '6:00 TO 15:00 CC', 9, '', 'Wednesday 21st of February 2024 09:28:36 AM');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `statin_name` varchar(100) NOT NULL,
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `statin_name`, `create_date`) VALUES
(2, 'dawrka', 'Monday 19th of February 2024 01:19:19 PM'),
(3, 'dawrka sec-1', 'Monday 19th of February 2024 01:19:46 PM'),
(4, 'uttam nagar', 'Wednesday 21st of February 2024 09:28:07 AM');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `whats_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_station` varchar(50) NOT NULL,
  `emp_shift` varchar(50) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `whats_date` varchar(13) NOT NULL,
  `shift_hours` int(2) NOT NULL,
  `emp_sl_no` varchar(20) NOT NULL,
  `shif_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whatsapp`
--

INSERT INTO `whatsapp` (`whats_id`, `emp_name`, `emp_station`, `emp_shift`, `emp_phone`, `whats_date`, `shift_hours`, `emp_sl_no`, `shif_id`) VALUES
(2, 'Shashi Bhusan', 'dawrka sec-1', '6:30 TO 15:30 TVM ', '+918512839872', '20-02-2024', 0, '', 0),
(3, 'Shashi Bhusan', 'dawrka', '6:30 TO 15:30 TVM ', '+918512839872', '20-02-2024', 0, '', 0),
(4, 'Shashi Bhusan', 'dawrka', '6:30 TO 15:30 TVM ', '+918512839872', '2024-02-20', 0, '', 0),
(5, 'Shashi Bhusan', '', '', '2024-02-20', '2024-02-20', 0, '', 0),
(6, 'Shashi Bhusan', '', '', '2024-02-20', '2024-02-20', 0, '', 0),
(7, 'Shashi Bhusan', '', '', '2024-02-20', '2024-02-20', 0, '', 0),
(44, 'Praveen Kumar Singh', 'dawrka', '6:00 TO 15:00 TVM', '917065317064', '2024-02-21', 10, '9293635624', 5),
(45, 'Shashi Bhusan', 'dawrka sec-1', '8:00 TO 17:00 TVM', '+918512839872', '2024-02-21', 9, '7832723632', 4),
(46, 'Narender', 'uttam nagar', '6:00 TO 15:00 CC', '+919050601510', '2024-02-21', 9, '116256', 6),
(47, 'Narender', 'dawrka', '6:30 TO 15:30 TVM', '+919050601510', '2024-02-21', 0, '116256', 1),
(48, 'Narender', 'dawrka', '6:30 TO 15:30 TVM', '+919050601510', '2024-02-21', 0, '116256', 1),
(49, '0091sashibhusan', 'dawrka', '6:30 TO 15:30 TVM', '+918512839872', '2024-02-21', 0, '', 1),
(50, '000911praveen', 'dawrka', '6:30 TO 15:30 TVM', '917065317064', '2024-02-21', 0, '', 1),
(51, '0091sashibhusan', 'dawrka', '6:30 TO 15:30 TVM', '+918512839872', '2024-02-21', 0, '', 1),
(52, '000911praveen', 'dawrka', '6:30 TO 15:30 TVM', '917065317064', '2024-02-21', 0, '', 1),
(53, 'narender116256', 'dawrka', '6:30 TO 15:30 TVM', '+919050601510', '2024-02-21', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`whats_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `whats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
