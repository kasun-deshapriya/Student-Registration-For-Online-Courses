-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 05:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Kasun Deshappriya', 'abc123@gmail.com', 'To inform ', 'To inform my problem'),
(7, 'Dilan Kanishka', 'dilan134@gmail.com', 'infornations', 'I need more Information');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `duration` varchar(15) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `duration`, `fee`) VALUES
(3050, 'Certificate in English', '06 months', 'R.s 20000.00'),
(4050, 'Diploma  in English', '12 months', 'R.s 50000.00'),
(5020, 'Certificate in ICT', '06 months', 'R.s 20000.00'),
(5060, 'Diploma  in ICT', '12 months', 'R.s 50000.00'),
(8040, 'Certificate in Management', '06 months', 'R.s 20000.00'),
(8060, 'Diploma  in Management', '12 months', 'R.s 50000.00');

-- --------------------------------------------------------

--
-- Table structure for table `english_applicant`
--

CREATE TABLE `english_applicant` (
  `id` int(10) NOT NULL,
  `programme` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nic` int(15) NOT NULL,
  `DoB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `promo_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `english_applicant`
--

INSERT INTO `english_applicant` (`id`, `programme`, `branch`, `fullname`, `nic`, `DoB`, `gender`, `address`, `mobile_number`, `email`, `promo_code`) VALUES
(1, 'Certificate in English', 'Colombo', 'Kasun Deshappriya', 2147483647, '2001-05-02', 'Male', 'Kurunagala', 775518779, 'abc123@gmail.com', '58445');

-- --------------------------------------------------------

--
-- Table structure for table `ict_applicant`
--

CREATE TABLE `ict_applicant` (
  `id` int(10) NOT NULL,
  `programme` varchar(40) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `nic` int(15) NOT NULL,
  `DoB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `promo_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ict_applicant`
--

INSERT INTO `ict_applicant` (`id`, `programme`, `branch`, `fullname`, `nic`, `DoB`, `gender`, `address`, `mobile_number`, `email`, `promo_code`) VALUES
(7, 'Diploma in Information Technology', 'Kandy', 'Kasun Deshappriya', 2147483647, '2001-05-02', 'Male', 'Kuda kathnoaruwa, Meegalewa.', 775518779, 'abc123@gmail.com', 4582);

-- --------------------------------------------------------

--
-- Table structure for table `management_applicant`
--

CREATE TABLE `management_applicant` (
  `id` int(10) NOT NULL,
  `programme` varchar(40) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `nic` int(15) NOT NULL,
  `DoB` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `promo_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `management_applicant`
--

INSERT INTO `management_applicant` (`id`, `programme`, `branch`, `full_name`, `nic`, `DoB`, `gender`, `address`, `mobile_number`, `email`, `promo_code`) VALUES
(1, 'Certificate in Management', 'Kurunagala', 'Kasun Deshappriya', 2147483647, '2001-05-02', 'Male', 'Kurunagala', 775518779, 'abc123@gmail.com', 7894);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_applicant`
--
ALTER TABLE `english_applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict_applicant`
--
ALTER TABLE `ict_applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_applicant`
--
ALTER TABLE `management_applicant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `english_applicant`
--
ALTER TABLE `english_applicant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ict_applicant`
--
ALTER TABLE `ict_applicant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `management_applicant`
--
ALTER TABLE `management_applicant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
