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
-- Database: `demo11`
--

-- --------------------------------------------------------

--
-- Table structure for table `avlabalset`
--

DROP TABLE IF EXISTS `avlabalset`;
CREATE TABLE IF NOT EXISTS `avlabalset` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `Train_Number` int(50) NOT NULL,
  `Train_Name` varchar(50) NOT NULL,
  `available_set` int(20) NOT NULL,
  `Frist_Class` int(20) NOT NULL,
  `Second_Class` int(20) NOT NULL,
  `Third_Class` int(20) NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avlabalset`
--

INSERT INTO `avlabalset` (`Id`, `Train_Number`, `Train_Name`, `available_set`, `Frist_Class`, `Second_Class`, `Third_Class`, `date`) VALUES
(7, 22953, 'Gujarat SF Express', 499, 195, 100, 50, '2023-04-26'),
(8, 90023, 'Valsad Express', 455, 199, 100, 60, '2023-04-26'),
(9, 19033, 'Gujrat Queen', 455, 198, 100, 60, '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `pnrnum`
--

DROP TABLE IF EXISTS `pnrnum`;
CREATE TABLE IF NOT EXISTS `pnrnum` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pnrnum` varchar(20) NOT NULL,
  `f_name` varchar(22) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `pname` (`pnrnum`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnrnum`
--

INSERT INTO `pnrnum` (`Id`, `uname`, `pnrnum`, `f_name`) VALUES
(3, 'Hiten', '1234', 'Hiten R Patel'),
(2, '', '212121', 'hiten patel');

-- --------------------------------------------------------

--
-- Table structure for table `resavetion`
--

DROP TABLE IF EXISTS `resavetion`;
CREATE TABLE IF NOT EXISTS `resavetion` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pnrnum` text NOT NULL,
  `BTrain_Number` int(50) NOT NULL,
  `BTrain_Name` varchar(50) NOT NULL,
  `Bdate` text NOT NULL,
  `Bclass` text NOT NULL,
  `Bfroms` varchar(20) NOT NULL,
  `Bends` varchar(20) NOT NULL,
  `Btotal_prise` text NOT NULL,
  `pnremail` text NOT NULL,
  `pnarphone` text NOT NULL,
  `pasenger_name` varchar(50) NOT NULL,
  `pasenger_age` text NOT NULL,
  `pgender` varchar(50) NOT NULL,
  `pasenger_set` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resavetion`
--

INSERT INTO `resavetion` (`Id`, `uname`, `pnrnum`, `BTrain_Number`, `BTrain_Name`, `Bdate`, `Bclass`, `Bfroms`, `Bends`, `Btotal_prise`, `pnremail`, `pnarphone`, `pasenger_name`, `pasenger_age`, `pgender`, `pasenger_set`) VALUES
(113, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(114, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(115, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(116, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(117, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(118, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(119, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(120, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(121, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(122, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(123, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(124, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(125, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(126, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(127, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(128, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(129, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(130, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(131, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(132, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(133, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'vipal patel', '12', 'male', 'lower'),
(134, 'Hiten', '123344455', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '8383838', 'abhi dhimer', '22', 'male', 'upper'),
(135, 'Hiten', '123132', 90023, 'Valsad Express', '2023-04-18', 'available_set', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '6355434', 'vipal patel', '12', 'male', 'lower'),
(136, 'Hiten', '123132', 90023, 'Valsad Express', '2023-04-18', 'available_set', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '6355434', 'abhi dhimer', '22', 'male', 'upper'),
(137, 'Hiten', '1323123', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hiten@123.com', '4545646', 'vipal patel', '12', 'male', 'lower'),
(138, 'Hiten', '1323123', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hiten@123.com', '4545646', 'abhi dhimer', '22', 'male', 'upper'),
(139, 'Hiten', '132456789', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '800', 'kjgj@gfhghjk.com', '12345', 'vipal patel', '12', 'male', 'lower'),
(140, 'Hiten', '1212', 90023, 'Valsad Express', '2023-04-18', 'Third_Class', 'Ahemdabad', 'Vadodara', '800', 'abhidhimmar@gmail.com', '1535153', 'vipal patel', '12', 'male', 'lower'),
(141, 'Hiten', '1212', 90023, 'Valsad Express', '2023-04-18', 'Third_Class', 'Ahemdabad', 'Vadodara', '800', 'abhidhimmar@gmail.com', '1535153', 'abhi dhimer', '22', 'male', 'upper'),
(142, 'Hiten', '665', 90023, 'Valsad Express', '2023-04-18', 'Second_Class', 'Ahemdabad', 'Vadodara', '1200', 'Hi10@123.com', '12345', 'vipal patel', '12', 'male', 'lower'),
(143, 'Hiten', '665', 90023, 'Valsad Express', '2023-04-18', 'Second_Class', 'Ahemdabad', 'Vadodara', '1200', 'Hi10@123.com', '12345', 'abhi dhimer', '22', 'male', 'upper'),
(144, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'Third_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '121212', 'xyz', '123', 'Male', 'nopreference'),
(145, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'Third_Class', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '121212', 'xyz', '22', 'Male', 'nopreference'),
(146, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(147, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(148, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(149, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(150, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(151, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(152, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(153, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(154, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(155, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(156, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(157, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(158, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(159, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(160, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'vipal patel', '12', 'male', 'lower'),
(161, 'Hiten', '1232345654', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '1600', 'Hi10@123.com', '9966554433', 'abhi dhimer', '22', 'male', 'upper'),
(162, 'abhipal', '123456', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Surat', '1800', 'Hiten@123.com', '85555445', 'abhi dhimer', '21', 'Male', 'lower'),
(163, 'abhipal', '123456', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Surat', '1800', 'Hiten@123.com', '85555445', 'hiten patel', '21', 'Male', 'nopreference'),
(164, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'general', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '12333', 'vipal patel', '12', 'male', 'lower'),
(165, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'general', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '12333', 'abhi dhimer', '22', 'male', 'upper'),
(166, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'general', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '12333', 'vipal patel', '12', 'male', 'lower'),
(167, 'Hiten', '1234', 90023, 'Valsad Express', '2023-04-18', 'general', 'Ahemdabad', 'Vadodara', '400', 'Hiten@123.com', '12333', 'abhi dhimer', '22', 'male', 'upper'),
(168, 'hitenkumar', '5654546', 90023, 'Valsad Express', '2023-04-18', 'Frist_Class', 'Ahemdabad', 'Vadodara', '800', 'Hiten@123.com', '889898989', 'hiten patel', '21', 'Male', 'lower'),
(169, 'Hiten', '12345678', 22953, 'Gujarat SF Express', '2023-04-26', 'available_set', 'Ahemdabad', 'Surat', '300', 'Hiten@123.com', '83206278', 'vipal patel', '12', 'male', 'lower'),
(170, 'Hiten', '8888888', 19033, 'Gujrat Queen', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Vadodara', '800', 'Hiten@123.com', '832062788', 'hiten patel', '21', 'Male', 'nopreference'),
(171, 'Hiten', '222', 90023, 'Valsad Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Vadodara', '800', 'vpatel@gmail.com', '6565', 'hiten patel', '21', 'Male', 'nopreference'),
(172, 'Hiten', '8585', 22953, 'Gujarat SF Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Navsari', '386', 'Hiten@123.com', '8320627885', 'hiten patel', '21', 'Male', 'nopreference'),
(173, 'Hiten', 'vipal123', 19033, 'Gujrat Queen', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Vadodara', '800', 'Hiten@123.com', '8320627885', 'hiten patel', '21', 'Male', 'nopreference'),
(174, 'Vipal11', 'hiten@123', 22953, 'Gujarat SF Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Navsari', '386', 'Hiten@123.com', '98788989895', 'Patel Vipal', '21', 'Male', 'nopreference'),
(175, 'Vipal11', 'hiten@123', 22953, 'Gujarat SF Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Navsari', '386', 'Hiten@123.com', '98788989895', 'Patel Vipal', '21', 'Male', 'nopreference'),
(176, 'Vipal11', 'abhiidhimmar', 22953, 'Gujarat SF Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Navsari', '772', 'patelhiten@gmail.com', '124254578', 'PAtel HITEN', '21', 'Male', 'nopreference'),
(177, 'Vipal11', 'abhiidhimmar', 22953, 'Gujarat SF Express', '2023-04-26', 'Frist_Class', 'Ahemdabad', 'Navsari', '772', 'patelhiten@gmail.com', '124254578', 'Patel Vipal', '21', 'Male', 'nopreference'),
(178, 'Vipal11', 'hiten@12', 19033, 'Gujrat Queen', '2023-04-26', 'general', 'Ahemdabad', 'Vadodara', '400', 'hiten123@gmail.com', '8320627885', 'PAtel HITEN', '21', 'Male', 'nopreference'),
(179, 'Vipal11', 'hiten@12', 19033, 'Gujrat Queen', '2023-04-26', 'general', 'Ahemdabad', 'Vadodara', '400', 'hiten123@gmail.com', '8320627885', 'Patel Vipal', '21', 'Male', 'nopreference');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `Train_Number` int(50) NOT NULL,
  `Train_Name` varchar(40) NOT NULL,
  `Fomestart` varchar(50) NOT NULL,
  `Toend` varchar(50) NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Id`, `Train_Number`, `Train_Name`, `Fomestart`, `Toend`, `date`) VALUES
(17, 22953, 'Gujarat SF Express', 'Ahemdabad', 'Mumbai Central', '2023-04-26'),
(18, 90023, 'Valsad Express', 'Ahemdabad', 'Navsari', '2023-04-26'),
(19, 19033, 'Gujrat Queen', 'Ahemdabad', 'Valsad', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `scheduletb`
--

DROP TABLE IF EXISTS `scheduletb`;
CREATE TABLE IF NOT EXISTS `scheduletb` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `Train_Number` text NOT NULL,
  `Train_Name` varchar(50) NOT NULL,
  `Froms` text NOT NULL,
  `Tos` text NOT NULL,
  `distion` text NOT NULL,
  `pris` int(40) NOT NULL,
  `fc_pris` int(50) NOT NULL,
  `sc_prise` int(50) NOT NULL,
  `tc_pris` int(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduletb`
--

INSERT INTO `scheduletb` (`Id`, `Train_Number`, `Train_Name`, `Froms`, `Tos`, `distion`, `pris`, `fc_pris`, `sc_prise`, `tc_pris`) VALUES
(1, '20902', 'IRCTC Vande Bharat', 'Ahemdabad', 'Vadodara', '100', 495, 895, 490, 0),
(2, '22953', 'Gujarat SF EXpress', 'Ahemdabad', 'Surat', '298', 300, 386, 125, 0),
(3, '19033', 'Gujrat Queen', 'Ahemdabad', 'Vadodara', '100', 200, 800, 600, 400),
(4, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Surat', '200', 300, 900, 700, 500),
(5, '22953', 'Gujarat SF EXpress', 'Ahemdabad', 'Navsari', '269', 300, 386, 125, 55),
(6, '22953', 'Gujrat SF Express', 'Ahemdabad', 'Surat', '200', 300, 900, 700, 500),
(7, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Bilimora Junction', '280', 320, 400, 140, 60),
(8, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Valsad', '298', 335, 420, 155, 70),
(9, '90023', 'Valsad Express', 'Ahemdabad', 'Vadodara', '100', 200, 800, 600, 400),
(10, '90023', 'Valsad Express', 'Ahemdabad', 'Surat', '200', 300, 900, 700, 500),
(11, '90023', 'Valsad Express', 'Ahemdabad', 'Navsari', '269', 300, 386, 125, 55),
(12, '90023', 'Valsad Express', 'Ahemdabad', 'Surat', '200', 300, 900, 700, 500),
(13, '90023', 'Valsad Express', 'Ahemdabad', 'Bilimora Junction', '280', 320, 400, 140, 60),
(14, '90023', 'Valsad Express', 'Ahemdabad', 'Valsad', '298', 335, 420, 155, 70),
(15, '19033', 'Gujrat Queen', 'Ahemdabad', 'Vadodara', '100', 200, 200, 100, 50),
(16, '19033', 'Gujrat Queen', 'Ahemdabad', 'Surat', '200', 300, 300, 200, 100),
(17, '19033', 'Gujrat Queen', 'Ahemdabad', 'Navsari', '269', 300, 400, 300, 150),
(18, '19033', 'Gujrat Queen', 'Ahemdabad', 'Surat', '200', 300, 500, 400, 250),
(19, '19033', 'Gujrat Queen', 'Ahemdabad', 'Bilimora Junction', '280', 320, 400, 140, 60),
(20, '19033', 'Gujrat Queen', 'Ahemdabad', 'Valsad', '298', 335, 420, 155, 70),
(21, '12921', 'Flying Ranee', '', 'Vadodara', '200', 200, 300, 150, 100),
(22, '12921', 'Flying Ranee', '', 'Navsari', '300', 300, 600, 500, 400),
(23, '20902', 'IRCTC Vande Bharat Express', '', 'Borivali', '500', 600, 700, 600, 300),
(24, '20902', 'IRCTC Vande Bharat Express', 'Ahemdabad', 'Surat', '300', 400, 800, 600, 300),
(25, '20902', 'IRCTC Vande Bharat Express', 'Ahemdabad', 'Vadodara Junction', '200', 200, 200, 200, 35),
(26, '20902', 'Valsad Express', 'Ahemdabad', 'Vapi', '200', 200, 300, 200, 100),
(27, '90023', 'from', 'Ahmedabad Junction', 'Mumbai Central', '492', 500, 495, 390, 275),
(28, 'from', 'from', 'Ahemdabad', 'Dadar', '450', 420, 390, 280, 245),
(29, '20902', 'from', 'Ahemdabad', 'Borivali', '400', 500, 495, 400, 300),
(30, '20902', 'Valsad Express', 'Ahemdabad', 'Dadar', '450', 400, 300, 200, 100),
(31, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Maninagar', '3', 100, 95, 80, 65),
(32, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Mahemdavad Kheda Road', '28', 250, 240, 190, 165),
(33, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Nadiad Junction', '45', 320, 295, 260, 200),
(34, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Anand Junction', '64', 410, 390, 265, 220),
(35, '22953', 'from', 'Ahemdabad', 'Vasad Junction', '75', 500, 495, 400, 365),
(36, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Vadodara Junction', '100', 610, 560, 510, 475),
(37, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Bhruch Junction', '170', 810, 755, 682, 502),
(38, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Ankleshwar junction', '180', 850, 845, 740, 625),
(39, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Surat', '229', 900, 880, 750, 640),
(40, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Navsari', '259', 1020, 910, 800, 695),
(41, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Bilimora Junction', '280', 1120, 960, 855, 710),
(42, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Valsad', '298', 1225, 1145, 1050, 962),
(43, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Vapi', '324', 1400, 1280, 1135, 980),
(44, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Dadar', '486', 1580, 1490, 1250, 1145),
(45, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Borivali', '463', 1420, 1389, 1220, 1145),
(46, '22953', 'Gujarat SF Express', 'Ahemdabad', 'Mumbai Central', '492', 1650, 1580, 1245, 995);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE IF NOT EXISTS `station` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `startstation_id` text NOT NULL,
  `Station` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Id`, `startstation_id`, `Station`) VALUES
(1, 'ADI', 'Ahemdabad'),
(2, 'BRC', 'Vadodara'),
(3, 'ST', 'Surat'),
(4, 'NVS', 'Navsari'),
(5, 'BL', 'Valsad'),
(6, 'VAPI', 'Vapi'),
(7, 'DR', 'Dadar'),
(8, 'BVI', 'Borivali'),
(9, 'MMCT', 'Mumbai Central'),
(10, 'BOR', 'Boisar'),
(11, 'DRD', 'Dahanu Road'),
(12, 'UBR', 'Umargam Road'),
(13, 'BLD', 'Bhilad'),
(15, 'UVD', 'Udavada'),
(17, 'BIM', 'Bilimora Junction'),
(18, 'NVS', 'Navsari'),
(19, 'UDN', 'Udhana'),
(21, 'kim', 'Kim'),
(22, 'ksm', 'Kosamba Junction'),
(23, 'ank', 'Ankleshwar junction'),
(24, 'bhrch', 'Bhruch Junction'),
(25, 'plj', 'Palej'),
(26, 'krjn', 'Miyagam Karjan Junction'),
(27, 'brc', 'Vadodara Junction'),
(28, 'vsd', 'Vasad Junction'),
(29, 'and', 'Anand Junction'),
(30, 'nd', 'Nadiad Junction'),
(31, 'mhem', 'Mahemdavad Kheda Road'),
(32, 'mnngr', 'Maninagar'),
(33, 'ahem', 'Ahmedabad Junction');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Id`, `uname`, `email`) VALUES
(1, '', 'abhi01@123.com'),
(2, '', 'abhi01@123.com'),
(3, '', 'vipal@gmail.com'),
(4, 'Hiten', 'hiten1@gmail.com'),
(5, 'Hiten', 'dhaval@sagmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `Id` int(40) NOT NULL AUTO_INCREMENT,
  `Train_Number` int(50) NOT NULL,
  `Train_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Train_Number` (`Train_Number`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Id`, `Train_Number`, `Train_Name`) VALUES
(1, 20902, 'IRCTC Vande Bharat Express'),
(2, 90023, 'Valsad Express'),
(3, 19033, 'Gujrat Queen'),
(4, 22953, 'Gujarat SF Express'),
(5, 20901, 'Ghandhinagar Capital Vande Bharat Express'),
(6, 12009, 'Ahembdabad Shatabdi Express'),
(7, 12925, 'Paschim SF Express'),
(8, 12933, 'Karnavati Express'),
(9, 82901, 'Ahmedabad IRCTC Tejas Express '),
(10, 12951, 'New Delhi Tejas Rajdhani Express'),
(11, 12921, 'Flying Ranee'),
(12, 12903, 'Golden Temple Mail'),
(13, 12961, 'Avantika SF Express'),
(14, 22945, 'Saurastra Express'),
(15, 11111, 'asdfg'),
(16, 2222, 'adsss'),
(17, 33333, 'abbbbbbb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
