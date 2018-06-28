-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:57 AM
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
-- Table structure for table `report_table`
--

DROP TABLE IF EXISTS `report_table`;
CREATE TABLE `report_table` (
  `report_name` varchar(32) NOT NULL DEFAULT '',
  `table_name` varchar(32) NOT NULL DEFAULT '',
  `field_name` varchar(32) NOT NULL DEFAULT '',
  `report_label` varchar(100) DEFAULT NULL,
  `xpos` int(3) NOT NULL DEFAULT '0',
  `ypos` int(3) NOT NULL DEFAULT '0',
  `field_pos` int(3) NOT NULL DEFAULT '0',
  `display_length` int(4) NOT NULL DEFAULT '0',
  `field_type` char(1) NOT NULL DEFAULT '',
  `query_display` char(1) NOT NULL DEFAULT 'Y',
  `upper_lower` varchar(4) NOT NULL,
  `LABEL_FOREGROUND_COLOR` varchar(20) NOT NULL DEFAULT 'black',
  `LABEL_BACKGROUND_COLOR` varchar(20) NOT NULL DEFAULT 'grey',
  `TEXT_BACKGROUND_COLOR` varchar(20) NOT NULL DEFAULT 'whilte',
  `TEXT_FOREGROUND_COLOR` varchar(20) NOT NULL DEFAULT 'blue',
  `LABEL_FONT` varchar(20) NOT NULL DEFAULT 'Times',
  `LABEL_FONT_SIZE` int(11) NOT NULL DEFAULT '12',
  `TEXT_FONT` varchar(20) NOT NULL DEFAULT 'Serif',
  `TEXT_FONT_SIZE` int(11) NOT NULL DEFAULT '6',
  `READONLY` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`report_name`,`table_name`,`field_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
