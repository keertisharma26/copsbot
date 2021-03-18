-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `idd` int(11) NOT NULL,
  `complaintno` int(11) NOT NULL,
  `fnm` varchar(30) NOT NULL,
  `lnm` text NOT NULL,
  `district` text NOT NULL,
  `station` text NOT NULL,
  `category` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `vnm` text NOT NULL,
  `location` text NOT NULL,
  `incidentdetails` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`idd`, `complaintno`, `fnm`, `lnm`, `district`, `station`, `category`, `gender`, `age`, `vnm`, `location`, `incidentdetails`) VALUES
(1, 1784567418, '0', '0', 'udaipur', 'goverdhanvillas', 'Burglary', 'option2', 55, 'rahul', 'nr Sevaashram', 'crime');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `fname` varchar(33) NOT NULL,
  `lname` varchar(33) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `city` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `fname`, `lname`, `phone`, `gender`, `age`, `dob`, `city`) VALUES
(1, 'admin', '1403', '0', '0', 0, '0', 0, '0', '0'),
(2, 'username', 'pass', 'fname', 'lname', 0, 'gender', 0, 'dob', 'city'),
(3, 'username', 'pass', 'fname', 'lname', 0, 'gender', 0, 'dob', 'city'),
(4, 'username', 'pass', 'fname', 'lname', 0, 'gender', 0, 'dob', 'city');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
