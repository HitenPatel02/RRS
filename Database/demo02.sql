-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 05:14 PM
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
-- Database: `demo02`
--

-- --------------------------------------------------------

--
-- Table structure for table `avlset`
--

DROP TABLE IF EXISTS `avlset`;
CREATE TABLE IF NOT EXISTS `avlset` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `Train_Number` int(50) NOT NULL,
  `Train_Name` varchar(50) NOT NULL,
  `available_set` int(20) NOT NULL,
  `pris` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avlset`
--

INSERT INTO `avlset` (`no`, `Train_Number`, `Train_Name`, `available_set`, `pris`) VALUES
(1, 1, 'Vande Bhart', 95, '200'),
(2, 2, 'Valsad Exp', 200, '300'),
(3, 3, 'Gujrat Qen', 400, '400');

-- --------------------------------------------------------

--
-- Table structure for table `pasanger`
--

DROP TABLE IF EXISTS `pasanger`;
CREATE TABLE IF NOT EXISTS `pasanger` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `seet` varchar(50) NOT NULL,
  `cun` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasanger`
--

INSERT INTO `pasanger` (`Id`, `uname`, `pname`, `age`, `gender`, `seet`, `cun`) VALUES
(85, 'abhipal', 'abhi dhimer', '21', 'Male', 'lower', 'india'),
(6, 'vipall', 'Vipal Patel', '21', 'male', 'lower', 'india'),
(9, 'abhi01', 'hiten patel', '12', 'male', 'lower', 'india'),
(11, 'abhi01', 'vipal patel', '22', 'male', 'lower', 'india'),
(92, 'Vipal11', 'PAtel HITEN', '21', 'Male', 'nopreference', 'india'),
(24, 'hiten011', 'hiten patel', '21', 'Male', 'lower', 'india'),
(80, 'VIPAL001', 'abcdd', '12', 'Male', 'nopreference', 'india'),
(91, 'Vipal11', 'Patel Vipal', '21', 'Male', 'nopreference', 'india'),
(76, 'vipal', 'vipal patel', '21', 'Male', 'nopreference', 'india'),
(90, 'Hiten', 'Abhi Dhimmar', '21', 'Male', 'nopreference', 'india'),
(79, 'dhimmarjeet', 'mlkjkfgh', '62', 'Male', 'lower', 'easrile'),
(89, 'Hiten', 'Vipal Patel', '21', 'Male', 'nopreference', 'india'),
(77, 'dhimmar abhikumar', 'dhimmar abhi', '19', 'Male', 'upper', 'india'),
(88, 'Hiten', 'hiten patel', '21', 'Male', 'nopreference', 'india'),
(86, 'abhipal', 'hiten patel', '21', 'Male', 'nopreference', 'india'),
(87, 'hitenkumar', 'hiten patel', '21', 'Male', 'lower', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `scheduletb`
--

DROP TABLE IF EXISTS `scheduletb`;
CREATE TABLE IF NOT EXISTS `scheduletb` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Train_Number` varchar(50) NOT NULL,
  `Station` varchar(50) NOT NULL,
  `Time` time(6) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduletb`
--

INSERT INTO `scheduletb` (`Id`, `Train_Number`, `Station`, `Time`, `date`) VALUES
(1, '0001', 'amdavad', '01:00:00.000000', '2023-04-01'),
(2, '0001', 'boroda', '03:00:00.000000', '2023-04-01'),
(3, '0001', 'surat', '04:00:00.000000', '2023-04-02'),
(4, '0001', 'mumbai', '04:00:00.000000', '2023-04-02'),
(5, '0002', 'surat', '01:00:00.000000', '0000-00-00'),
(6, '0002', 'nvsari', '03:00:00.000000', '0000-00-00'),
(7, '0002', 'surat', '04:00:00.000000', '0000-00-00'),
(8, '0002', 'boroda', '05:00:00.000000', '0000-00-00'),
(9, '0003', 'boroda', '01:00:00.000000', '2023-04-03'),
(10, '0003', 'surat', '02:00:00.000000', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `traindaystb`
--

DROP TABLE IF EXISTS `traindaystb`;
CREATE TABLE IF NOT EXISTS `traindaystb` (
  `Id` int(50) NOT NULL,
  `Train_Number` varchar(50) NOT NULL,
  `Days` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traindaystb`
--

INSERT INTO `traindaystb` (`Id`, `Train_Number`, `Days`) VALUES
(1, '0001', 'sunday'),
(2, '0001', 'munday'),
(3, '0001', 'tusday'),
(4, '0001', 'wnsday'),
(4, '0002', 'sunday'),
(5, '0002', 'munday');

-- --------------------------------------------------------

--
-- Table structure for table `traindetailtb`
--

DROP TABLE IF EXISTS `traindetailtb`;
CREATE TABLE IF NOT EXISTS `traindetailtb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Train_Number` int(50) NOT NULL,
  `Train_Name` varchar(50) NOT NULL,
  `From` varchar(20) NOT NULL,
  `To` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traindetailtb`
--

INSERT INTO `traindetailtb` (`Id`, `Train_Number`, `Train_Name`, `From`, `To`) VALUES
(1, 1, 'Vande Bhart', 'amdavad', 'mumbai'),
(2, 2, 'Valsad Exp', 'valsad', 'boroda'),
(3, 3, 'Gujrat Qen', 'amdavad', 'mubai');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Train_Number` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime NOT NULL,
  `available_seats` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_tickets`
--

DROP TABLE IF EXISTS `train_tickets`;
CREATE TABLE IF NOT EXISTS `train_tickets` (
  `ticket_id` text NOT NULL,
  `Train_Number` int(10) NOT NULL,
  `ticket_type` text NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
