-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 02:34 PM
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
-- Database: `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registration`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Number` varchar(15) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Cnic` varchar(18) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Number`, `Password`, `Cnic`, `Address`) VALUES
(14, 'Bilal Ahmed', 'zaheerbilal440@', '2147483647', 'MAV$#@i0', '45204-5285212-1', 'R-380 phase-1, Shahtown , Bin-Qasim, Karachi.'),
(15, 'Ibadullah', 'testing@gmil.co', '2147483647', 'passowrd', '45204-5285212-1', 'phase 1'),
(16, 'testing1', 'testing1@gmil.c', '0', 'password', '45204-5285212-1', 'phase 1'),
(17, 'testing1', 'testing1@gmil.c', '0', 'password', '45204-5285212-1', 'phase 1'),
(18, 'testing1', 'testing1@gmil.c', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(19, 'testing1', 'testing1@gmil.c', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(20, 'testing1', 'testing1@gmil.c', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(21, 'Bilal Ahmed', 'uzairahvvc@gmai', '2147483647', 'password', '45204-5285212-1', 'phse 1'),
(22, 'Bilal Ahmed', 'uzairahvvc@gmai', '2147483647', 'password', '45204-5285212-1', 'phse 1'),
(23, 'Bilal Ahmed', 'zaheerbilal440@', '2147483647', 'password', '42501-7671050-1', 'phase 1'),
(24, 'abcded', 'abcded@gmail.co', '2147483647', 'passwor', '45204-5285212-1', 'phase 1'),
(25, 'testing111', 'testing111@gmai', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(26, 'testing111', 'testing111@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(27, 'testing112', 'testing112@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(28, 'testing112', 'testing112@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1'),
(29, 'testing112', 'testing112@gmail.com', '2147483647', 'pssword', '45204-5285212-1', 'phase 1'),
(30, 'Safiullah', 'Safiullah@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 shahtown'),
(31, 'Safiullah1', 'Safiullah1@gmail.com', '1010101230', 'password', '45204-5285212-1', 'phase 111'),
(32, 'Safiullah1', 'Safiullah1@gmail.com', '1010101230', 'password', '45204-5285212-1', 'phase 111'),
(33, 'user01', 'user1@gmail.com', '0', 'password', '45204-5285212-1', 'phase 1 shahtown karachi'),
(34, 'testing1', 'uzairahvvc@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(35, 'uzair Ahmed', 'uzairahmed@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(36, 'Bilal Ahmed', 'abc@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(37, 'Bilal Ahmed', 'abcdef@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(38, 'uzair ', 'uzairahvvv@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(39, 'uzair ', 'uzairahvvvv@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(40, 'uzair ahmed', 'uzairahmed111@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(41, 'testing1', 'testing00001@gmail.com', '2147483647', 'password', '45204-5285212-1', 'phase 1 karachi'),
(42, 'khalid', 'khalid@gmail.com', '1202038284', 'password', '45204-5285212-1', 'phase 1 karachi'),
(43, 'Bilal Ahmed', 'zaheerbilal440@gmail.com', '2147483647', 'l^h0Ik', '42501-7671050-1', 'dddd'),
(44, 'babar Ali', 'babar@gmail.com', '0333750111', 'password', '45204-5285212-1', 'phase 2 dkfhd'),
(45, 'Bilal Ahmed', 'zaheerbilal444@gmail.com', '03068373530', 'password', '45204-5285212-1', 'phase 1 shahtown karachi'),
(46, 'testing1111', 'testing1111@gmail.com', '03068373530', 'password', '45204-5285212-1', 'phase 1 karachi'),
(47, 'testing222', 'testing222@gmail.com', '03068373530', 'password', '45204-5285212-1', 'phase 1 karachi'),
(48, 'Testingabc', 'Testingabc@gmail.com', '03068373530', 'password', '45204-5285212-1', 'phase one karachi'),
(49, 'Bilal Ahmed', 'bilalahmed@gmail.com', '03117966525', 'password', '45204-5285212-1', 'phase 1 karachi '),
(50, 'Bilal Ahmed', 'bilalAhmed111@gmail.com', '03068373530', 'password', '45204-5285212-1', 'Phase 1 karachi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(99) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Subject` varchar(35) NOT NULL,
  `message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Subject`, `message`) VALUES
(1, 'Bilal Ahmed', 'testin@gmail.com', 'sales query', 'hello'),
(2, 'Bilal Ahmed', 'testing@gmil.com', 'Sales Query', ''),
(3, 'testing1', 'testing@gmil.com', 'Sales Query', ''),
(4, 'testing1', 'testing@gmil.com', 'Sales Query', ''),
(5, 'testing1', 'testing@gmil.com', 'Sales Query', ''),
(6, 'testing1', 'testing@gmil.com', 'Sales Query', ' this is bilal Ahmed .'),
(7, 'testing1', 'testing@gmil.com', 'Sales Query', ' this is bilal Ahmed .'),
(8, 'Safiullah Ahmed', 'Safiullah1@gmail.com', 'Sales Query', ' I have an issuse in my payment .');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
