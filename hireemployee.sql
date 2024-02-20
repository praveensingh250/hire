-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 01:47 PM
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
(1, '12', 'pr', 'aa', 'aa', 'aa', 'aa'),
(2, '1211', 'Praveem', '0091praveen', 'praveen@gmail.com', '12121', 'Monday 19th of February 2024 12:26:41 PM'),
(3, '1111', 'Praveem', '0091praveen', 'praveen@gmail.com', '12222', 'Monday 19th of February 2024 12:29:15 PM'),
(4, '111', 'Praveem', '0091praveen', 'praveen@gmail.com', '111', 'Monday 19th of February 2024 12:30:58 PM'),
(5, '1222', 'Praveem', '0091praveen', 'praveen@gmail.com', '121212', 'Monday 19th of February 2024 12:43:24 PM'),
(6, '111', 'Praveem', '00911praveen', 'praveen@gmail.com', '111', 'Monday 19th of February 2024 12:51:50 PM'),
(7, '2121212', 'Praveem', '000911praveen', 'praveen@gmail.com', '12121212', 'Monday 19th of February 2024 12:58:22 PM'),
(8, '1334', 'Praveem', '000122911praveen', 'praveen@gmail.com', '121222', 'Monday 19th of February 2024 01:03:45 PM');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shift_id` int(11) NOT NULL,
  `shift_name` varchar(100) NOT NULL,
  `station_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, 'dawrka sec-1', 'Monday 19th of February 2024 01:19:46 PM');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
