-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 05:13 PM
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
-- Database: `demo01`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

DROP TABLE IF EXISTS `admin_reg`;
CREATE TABLE IF NOT EXISTS `admin_reg` (
  `a_name` varchar(60) NOT NULL,
  `a_pwd` text NOT NULL,
  `anum` int(20) NOT NULL,
  `aemail` text NOT NULL,
  `add` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`a_name`, `a_pwd`, `anum`, `aemail`, `add`, `gender`) VALUES
('admin', '123', 1234567890, 'admin@gmail.com', 'surat', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `aname` text NOT NULL,
  `ststus` text NOT NULL,
  `country` text NOT NULL,
  `src` text NOT NULL,
  `email` text NOT NULL,
  `num` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Id`, `uname`, `fname`, `dob`, `gender`, `aname`, `ststus`, `country`, `src`, `email`, `num`) VALUES
(1, 'Hiten', 'hiten   patel', '2002-04-21', 'male', '', 'single', 'India(IND)', 'navsari   ', 'hiten1@gmail.com', '112233445566'),
(8, 'VIPAL001', 'Vipal Patel', '2023-04-18', 'male', '', 'single', 'Unite State(US)', 'nvss', 'Vipalpatel111@gmail.com', '64635341'),
(5, 'vipall', 'Vipal Patel', '2000-03-11', 'male', '', 'single', 'India(IND)', 'Navsari', 'Vipalpatel111@gmail.com', '9099586727'),
(6, 'hi10', 'hi10', '2023-04-08', 'male', '', 'single', 'India(IND)', 'ww', 'hi10@hi10.com', '123333323'),
(9, 'abhipal', 'abhi dhimer', '2023-04-12', 'male', '', 'single', 'India(IND)', ' nvs', 'hiten1@gmail.com', '1122334455'),
(10, 'hitenkumar', 'hiten kumar ', '2023-04-19', 'male', '', 'single', 'India(IND)', 'nvs  ', 'hiten1@gmail.com', '12323213'),
(11, 'Vipal11', 'Patel Vipal', '2000-03-11', 'male', '', 'single', 'India(IND)', 'Navsari', 'Vipalpatel111@gmail.com', '9099586727');

-- --------------------------------------------------------

--
-- Table structure for table `reg01`
--

DROP TABLE IF EXISTS `reg01`;
CREATE TABLE IF NOT EXISTS `reg01` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(60) NOT NULL,
  `pwd` text NOT NULL,
  `email` text NOT NULL,
  `add` text NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg01`
--

INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES
(23, 'vipal', '123', 'vipal@123.com', 'nvs'),
(3, 'Hiten', '123', 'Hiten@gmail.com', 'nvs'),
(25, 'abhi', '123', 'abhidhimer@gamil.com', 'nvs'),
(26, 'Hiten123', '123', 'hiten1332@gmail.com', 'nvs'),
(27, 'dhimmar abhi', '1230', 'dhimmar@gmail.com', 'navsari'),
(28, 'dhimmar abhikumar', '1230', 'dhimar@gmail.com', 'navsari'),
(29, 'dhimmarjeet', '3232', 'jeet@gmail.com', 'nasavfu'),
(30, 'VIPAL001', '01', 'vipal@gmail.com', 'nvs'),
(31, 'abhipal', '123', 'abhi01@123.com', 'nvs'),
(32, 'hitenkumar', '123', 'Hitt@hitt.com', 'nvs'),
(33, 'Vipal11', '123', 'vipal@gmail.com', 'nvs');

-- --------------------------------------------------------

--
-- Table structure for table `scheduletb`
--

DROP TABLE IF EXISTS `scheduletb`;
CREATE TABLE IF NOT EXISTS `scheduletb` (
  `Id` int(20) NOT NULL,
  `Train_Number` int(20) NOT NULL,
  `Station` varchar(100) NOT NULL,
  `Time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduletb`
--

INSERT INTO `scheduletb` (`Id`, `Train_Number`, `Station`, `Time`) VALUES
(1, 27658, 'ABC', '09:00am'),
(2, 27658, 'CDE', '10:00am'),
(3, 27658, 'XYZ', '11:00am'),
(4, 27659, 'XYZ', '12:00pm'),
(5, 27659, 'CDE', '01:00pm'),
(6, 27659, 'ABC', '02:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `statin_sidyual`
--

DROP TABLE IF EXISTS `statin_sidyual`;
CREATE TABLE IF NOT EXISTS `statin_sidyual` (
  `trainid` int(40) NOT NULL,
  `trainname` varchar(100) NOT NULL,
  `start_stution` varchar(100) NOT NULL,
  `end_station` varchar(100) NOT NULL,
  `stop_time` time(6) NOT NULL,
  `start_time` time(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statin_sidyual`
--

INSERT INTO `statin_sidyual` (`trainid`, `trainname`, `start_stution`, `end_station`, `stop_time`, `start_time`) VALUES
(1, 'vande Bhart', 'amdavad', 'amdavad', '01:00:00.000000', '01:20:00.000000'),
(1, 'vande Bhart', 'surat', 'surat', '02:00:00.000000', '02:20:00.000000'),
(2, 'Valsad Express', 'valsad', 'valsad', '01:00:00.000000', '01:20:00.000000'),
(2, 'Valsad Express', 'navsari', 'navsari', '02:00:00.000000', '02:20:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `stetion`
--

DROP TABLE IF EXISTS `stetion`;
CREATE TABLE IF NOT EXISTS `stetion` (
  `sid` text NOT NULL,
  `stetion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stetion`
--

INSERT INTO `stetion` (`sid`, `stetion`) VALUES
('nvs', 'navsari'),
('su', 'surat'),
('vl', 'valsad'),
('abc', 'ABC'),
('xyz', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `set` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`set`, `from`, `to`) VALUES
('nvs,nvs', '', ''),
('abs', '', ''),
('abs', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `traindaystb`
--

DROP TABLE IF EXISTS `traindaystb`;
CREATE TABLE IF NOT EXISTS `traindaystb` (
  `Id` int(50) NOT NULL,
  `Train_Number` int(50) NOT NULL,
  `Days` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traindaystb`
--

INSERT INTO `traindaystb` (`Id`, `Train_Number`, `Days`) VALUES
(1, 27658, 'Sunday'),
(2, 27658, 'Wednesday'),
(3, 27659, 'Saturday'),
(4, 27659, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `traindetailtb`
--

DROP TABLE IF EXISTS `traindetailtb`;
CREATE TABLE IF NOT EXISTS `traindetailtb` (
  `Id` int(100) NOT NULL,
  `Train_Number` int(100) NOT NULL,
  `Train_Name` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traindetailtb`
--

INSERT INTO `traindetailtb` (`Id`, `Train_Number`, `Train_Name`, `start`, `end`) VALUES
(1, 27658, 'Venad Express', 'ABC', 'XYZ'),
(2, 27659, 'Venad Express', 'XYZ', 'ABC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
