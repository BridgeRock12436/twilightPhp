-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 09:46 AM
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
-- Table structure for table `twilight_member`
--

DROP TABLE IF EXISTS `twilight_member`;
CREATE TABLE `twilight_member` (
  `family_number` varchar(5) NOT NULL DEFAULT '',
  `family_generation` varchar(10) NOT NULL,
  `family_type` char(3) NOT NULL DEFAULT '',
  `root` char(1) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `suffix` varchar(3) DEFAULT NULL,
  `main_house_number` int(11) NOT NULL DEFAULT '0',
  `cottage_number` int(11) NOT NULL DEFAULT '0',
  `email_address` varchar(40) DEFAULT NULL,
  `subscribe` varchar(1) NOT NULL DEFAULT 'Y',
  `birthdate` date DEFAULT NULL,
  `work_phone` varchar(10) DEFAULT NULL,
  `cell_phone` varchar(10) DEFAULT NULL,
  `blood_relative` char(1) DEFAULT NULL,
  `park_relation` varchar(2) NOT NULL,
  `park_relation_2` varchar(2) DEFAULT NULL,
  `wj_rpt` varchar(2) DEFAULT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twilight_member`
--
ALTER TABLE `twilight_member`
  ADD PRIMARY KEY (`family_number`,`family_generation`,`family_type`,`root`),
  ADD UNIQUE KEY `family_number` (`family_number`,`family_generation`,`family_type`),
  ADD KEY `root` (`root`),
  ADD KEY `fk_main_house_number` (`main_house_number`),
  ADD KEY `fk_cottage_number` (`cottage_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `twilight_member`
--
ALTER TABLE `twilight_member`
  ADD CONSTRAINT `twilight_member_ibfk_1` FOREIGN KEY (`main_house_number`) REFERENCES `main_house` (`main_house_number`),
  ADD CONSTRAINT `twilight_member_ibfk_2` FOREIGN KEY (`cottage_number`) REFERENCES `cottage` (`cottage_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
