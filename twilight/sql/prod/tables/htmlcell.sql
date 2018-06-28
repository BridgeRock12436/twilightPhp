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
-- Table structure for table `htmlcell`
--

DROP TABLE IF EXISTS `htmlcell`;
CREATE TABLE `htmlcell` (
  `table_name` varchar(30) NOT NULL,
  `field_name` varchar(30) NOT NULL,
  `field_value` varchar(100) DEFAULT NULL,
  `where_condition` varchar(100) DEFAULT NULL,
  `field_display` varchar(100) NOT NULL,
  `field_type` varchar(40) NOT NULL,
  `row_pos` int(3) NOT NULL,
  `col_pos` int(3) NOT NULL,
  `display_length` int(3) NOT NULL,
  `field_length` int(3) NOT NULL,
  `required` char(1) DEFAULT NULL,
  `classname` varchar(30) DEFAULT NULL,
  `align` varchar(30) DEFAULT NULL,
  `valign` varchar(30) DEFAULT NULL,
  `c_char` varchar(30) DEFAULT NULL,
  `charoff` varchar(30) DEFAULT NULL,
  `colspan` int(30) DEFAULT NULL,
  `rowspan` int(30) DEFAULT NULL,
  `on_change` varchar(32) DEFAULT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `htmlcell`
--
ALTER TABLE `htmlcell`
  ADD PRIMARY KEY (`table_name`,`field_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
