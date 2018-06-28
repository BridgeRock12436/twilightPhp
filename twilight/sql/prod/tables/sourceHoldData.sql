-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 08:00 AM
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
-- Table structure for table `sourceHoldData`
--

DROP TABLE IF EXISTS `sourceHoldData`;
CREATE TABLE `sourceHoldData` (
  `DATEADDED` datetime NOT NULL,
  `DESCRIPTION` varchar(30) NOT NULL,
  `TYPE` varchar(5) NOT NULL DEFAULT 'LINK',
  `FILENAME` varchar(50) DEFAULT NULL,
  `TEXT` varchar(100) DEFAULT NULL,
  `ACTIVE` varchar(1) NOT NULL DEFAULT 'Y',
  `rowid` int(11) NOT NULL,
  `LOGNAME` varchar(30) NOT NULL,
  `LOGDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sourceHoldData`
--
ALTER TABLE `sourceHoldData`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `DESCRIPTION` (`DESCRIPTION`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sourceHoldData`
--
ALTER TABLE `sourceHoldData`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
