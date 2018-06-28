-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 09:47 AM
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
-- Table structure for table `user_pref`
--

DROP TABLE IF EXISTS `user_pref`;
CREATE TABLE `user_pref` (
  `family_number` varchar(5) NOT NULL,
  `family_generation` varchar(10) NOT NULL,
  `family_type` char(3) NOT NULL,
  `root` char(1) NOT NULL,
  `pref_type` varchar(100) NOT NULL,
  `pref_value` varchar(250) NOT NULL,
  `active` varchar(10) DEFAULT NULL,
  `rowid` int(11) NOT NULL,
  `logname` varchar(20) NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pref`
--
ALTER TABLE `user_pref`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `family_number` (`family_number`,`family_generation`,`family_type`,`root`,`pref_type`,`pref_value`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_pref`
--
ALTER TABLE `user_pref`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
