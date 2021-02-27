-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 10:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cop`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cnm` varchar(35) NOT NULL,
  `vnm` varchar(35) NOT NULL,
  `vage` int(11) NOT NULL,
  `doi` date NOT NULL,
  `poi` varchar(200) NOT NULL,
  `landmark` varchar(35) NOT NULL,
  `ccity` varchar(25) NOT NULL,
  `cstate` varchar(18) NOT NULL,
  `cat` varchar(35) NOT NULL,
  `des` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`uid`, `cid`, `cnm`, `vnm`, `vage`, `doi`, `poi`, `landmark`, `ccity`, `cstate`, `cat`, `des`) VALUES
(0, 9, 'Sunil Gautam', 'Ramesh Ahuja', 18, '2021-02-01', 'sector4', 'hiranmagri', 'udaipur', 'rajasthan', 'Burglary', 'theft at house');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `fnm` varchar(15) NOT NULL,
  `lnm` varchar(15) NOT NULL,
  `fathersnm` int(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `cpass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
