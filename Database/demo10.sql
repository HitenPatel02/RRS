-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 05:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo10`
--

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `train_no` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `train_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `runsfrom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `SUN` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `MON` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `TUE` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `WED` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `THU` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `FRI` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `SAT` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `DOE` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1912 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `train_no`, `train_name`, `runsfrom`, `SUN`, `MON`, `TUE`, `WED`, `THU`, `FRI`, `SAT`, `DOE`) VALUES
(269, '12307', 'HWH JU  EXPRESS', 'HOWRAH JN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN', '2013-03-24'),
(270, '12308', 'JU HWH SUPFAST', 'JODHPUR JN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN', '2013-03-24'),
(381, '12461', 'MANDOR EXPRESS', 'DELHI', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN', '2013-03-24'),
(382, '12462', 'MANDOR EXPRESS', 'JODHPUR JN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN', '2013-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `train_number`
--

DROP TABLE IF EXISTS `train_number`;
CREATE TABLE IF NOT EXISTS `train_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_no` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1912 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_number`
--

INSERT INTO `train_number` (`id`, `train_no`) VALUES
(269, '12307'),
(270, '12308'),
(381, '12461');

-- --------------------------------------------------------

--
-- Table structure for table `train_schedule`
--

DROP TABLE IF EXISTS `train_schedule`;
CREATE TABLE IF NOT EXISTS `train_schedule` (
  `train_no` varchar(5) NOT NULL,
  `stn_code` varchar(20) NOT NULL,
  `stn_name` varchar(50) NOT NULL,
  `route_no` varchar(2) NOT NULL,
  `arr_time` varchar(5) NOT NULL,
  `dep_time` varchar(5) NOT NULL,
  `halt_time` varchar(5) NOT NULL,
  `distance` varchar(4) NOT NULL,
  `day` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_schedule`
--

INSERT INTO `train_schedule` (`train_no`, `stn_code`, `stn_name`, `route_no`, `arr_time`, `dep_time`, `halt_time`, `distance`, `day`) VALUES
('12307', 'HWH ', 'HOWRAH JN      ', '1', 'Sourc', '23:30', '', '0', '1'),
('12307', 'BWN ', 'BARDDHAMAN JN  ', '1', '00:35', '00:37', '2:00', '95', '2'),
('12307', 'ASN ', 'ASANSOL JN     ', '1', '01:52', '01:56', '4:00', '200', '2'),
('12307', 'DHN ', 'DHANBAD JN     ', '1', '03:05', '03:15', '10:00', '259', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
