-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:59 AM
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
-- Table structure for table `sourceHold`
--

DROP TABLE IF EXISTS `sourceHold`;
CREATE TABLE `sourceHold` (
  `PageType` varchar(10) NOT NULL DEFAULT 'MAIN',
  `className` varchar(30) DEFAULT NULL,
  `ACTIVE` varchar(1) NOT NULL DEFAULT 'Y',
  `dateAddFlag` varchar(4) NOT NULL DEFAULT 'YES',
  `rowPos` int(11) DEFAULT NULL,
  `colPos` int(11) DEFAULT '1',
  `recordKey` int(11) NOT NULL,
  `rowid` int(11) NOT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sourceHold`
--
ALTER TABLE `sourceHold`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `PageType` (`PageType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sourceHold`
--
ALTER TABLE `sourceHold`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
