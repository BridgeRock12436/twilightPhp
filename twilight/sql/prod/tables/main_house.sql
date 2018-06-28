-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:53 AM
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
-- Table structure for table `main_house`
--

DROP TABLE IF EXISTS `main_house`;
CREATE TABLE `main_house` (
  `main_house_number` int(11) NOT NULL DEFAULT '0',
  `addr1` varchar(35) NOT NULL,
  `addr2` varchar(35) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state` char(2) NOT NULL DEFAULT '',
  `country` varchar(30) DEFAULT NULL,
  `zip` varchar(9) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `alt_phone_number` varchar(20) DEFAULT NULL,
  `international` char(1) NOT NULL DEFAULT 'N',
  `ilabel1` varchar(20) DEFAULT NULL,
  `ilabel2` varchar(20) DEFAULT NULL,
  `ilabel3` varchar(20) DEFAULT NULL,
  `ilabel4` varchar(20) DEFAULT NULL,
  `ilabel5` varchar(20) DEFAULT NULL,
  `idata1` varchar(50) DEFAULT NULL,
  `idata2` varchar(50) DEFAULT NULL,
  `idata3` varchar(50) DEFAULT NULL,
  `idata4` varchar(50) DEFAULT NULL,
  `idata5` varchar(50) DEFAULT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_house`
--
ALTER TABLE `main_house`
  ADD PRIMARY KEY (`main_house_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
