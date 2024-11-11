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
-- Database: `demo07`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `train_number` int(11) NOT NULL,
  `passenger_name` varchar(50) NOT NULL,
  `passenger_age` int(11) NOT NULL,
  `passenger_gender` varchar(10) NOT NULL,
  `date_of_journey` date NOT NULL,
  `seat_number` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `train_number` (`train_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `route_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_station_id` int(11) NOT NULL,
  `end_station_id` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  PRIMARY KEY (`route_id`),
  KEY `start_station_id` (`start_station_id`),
  KEY `end_station_id` (`end_station_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`route_id`, `start_station_id`, `end_station_id`, `distance`) VALUES
(1001, 1, 10, 1000),
(1002, 1, 6, 500),
(1003, 10, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `train_number` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `train_number` (`train_number`),
  KEY `station_id` (`station_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `train_number`, `station_id`, `arrival_time`, `departure_time`) VALUES
(11, 1111, 1, '01:00:00', '01:15:00'),
(12, 1111, 2, '02:00:00', '02:15:00'),
(13, 1111, 3, '03:00:00', '03:15:00'),
(14, 1111, 4, '04:00:00', '04:15:00'),
(15, 1111, 5, '05:15:00', '05:35:00'),
(16, 1112, 1, '01:00:00', '01:15:00'),
(17, 1112, 2, '02:00:00', '02:15:00'),
(18, 1112, 4, '04:00:00', '04:11:00'),
(19, 1112, 6, '05:00:00', '05:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `station_id` int(11) NOT NULL AUTO_INCREMENT,
  `station_name` varchar(50) NOT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`station_id`, `station_name`) VALUES
(1, 'Amdavad'),
(2, 'Surat'),
(3, 'kim'),
(4, 'Navsari'),
(5, 'bilimora'),
(6, 'valsad'),
(7, 'vapi'),
(8, 'borivali'),
(9, 'andheri'),
(10, 'mubai');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `train_number` int(11) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  PRIMARY KEY (`train_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`train_number`, `train_name`) VALUES
(1111, 'vande Bharat'),
(1112, 'Valsad Express');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
