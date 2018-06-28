-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:55 AM
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
-- Table structure for table `myCal_events`
--

DROP TABLE IF EXISTS `myCal_events`;
CREATE TABLE `myCal_events` (
  `eventId` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `eventDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `eventShortDesc` varchar(50) NOT NULL,
  `eventDesc` longtext NOT NULL,
  `fileName` varchar(80) DEFAULT NULL,
  `fileType` varchar(80) DEFAULT NULL,
  `rowid` int(11) NOT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myCal_events`
--
ALTER TABLE `myCal_events`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `eventId` (`eventId`,`user`),
  ADD KEY `catagory` (`catagory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myCal_events`
--
ALTER TABLE `myCal_events`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `myCal_events`
--
ALTER TABLE `myCal_events`
  ADD CONSTRAINT `myCal_events_ibfk_1` FOREIGN KEY (`catagory`) REFERENCES `myCal_catagory` (`catagory`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
