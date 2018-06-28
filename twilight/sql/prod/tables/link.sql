-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:51 AM
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
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `date_added` datetime NOT NULL,
  `description` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL DEFAULT 'link',
  `charset` varchar(30) DEFAULT NULL,
  `href` varchar(500) NOT NULL,
  `hreflang` varchar(20) DEFAULT NULL,
  `media` varchar(20) DEFAULT NULL,
  `rel` varchar(20) DEFAULT NULL,
  `rev` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `display` varchar(60) NOT NULL,
  `javascript` varchar(200) DEFAULT NULL,
  `record_key` int(11) DEFAULT NULL,
  `rowid` int(11) NOT NULL,
  `logname` varchar(20) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `description` (`description`),
  ADD UNIQUE KEY `record_key` (`record_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
