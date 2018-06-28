-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:46 AM
-- Server version: 10.0.32-MariaDB-wsrep
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jgalatti_twilight`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailProcess`
--

DROP TABLE IF EXISTS `emailProcess`;
CREATE TABLE `emailProcess` (
  `name` varchar(30) NOT NULL,
  `board` int(11) NOT NULL,
  `HTTP_HOST` varchar(250) NOT NULL,
  `subjectFile` varchar(800) NOT NULL,
  `respFile` varchar(800) NOT NULL,
  `mailFile` varchar(800) NOT NULL,
  `attFile` varchar(800) DEFAULT NULL,
  `processed` varchar(3) NOT NULL,
  `processID` int(11) NOT NULL,
  `rowid` int(11) NOT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailProcess`
--
ALTER TABLE `emailProcess`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `name` (`name`,`processID`),
  ADD KEY `HTTP_HOST` (`HTTP_HOST`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailProcess`
--
ALTER TABLE `emailProcess`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
