-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 07:47 AM
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
-- Table structure for table `htmlcolgroup`
--

DROP TABLE IF EXISTS `htmlcolgroup`;
CREATE TABLE `htmlcolgroup` (
  `table_name` varchar(30) NOT NULL,
  `colgroup` varchar(30) NOT NULL,
  `classname` varchar(30) DEFAULT NULL,
  `pos` int(11) NOT NULL,
  `align` varchar(30) DEFAULT NULL,
  `c_char` varchar(30) DEFAULT NULL,
  `charoff` varchar(30) DEFAULT NULL,
  `valign` varchar(30) DEFAULT NULL,
  `span` int(30) DEFAULT NULL,
  `width` varchar(30) DEFAULT NULL,
  `logname` varchar(30) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
