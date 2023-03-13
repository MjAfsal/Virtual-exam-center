-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2023 at 04:06 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL,
  `UserRole` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=123457 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `PhoneNumber`, `UserRole`) VALUES
(122, 'afsal', 'jeelan', 'jeelan@123.com', '12345jj', '0776761123', 'Student'),
(1111, 'mohamed', 'jeelan', 'jeelan12@gmail.com', '123jeelan', '0776761123', 'Lecture'),
(10111, 'mohamed', 'Afsal', 'mjafsal22@gmail.com', 'Afsal2002', '0766949372', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

DROP TABLE IF EXISTS `lecture`;
CREATE TABLE IF NOT EXISTS `lecture` (
  `ExamTitle` varchar(45) NOT NULL,
  `StartDate` date NOT NULL,
  `StartTime` time(6) NOT NULL,
  `EndTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`ExamTitle`, `StartDate`, `StartTime`, `EndTime`) VALUES
('wdd', '2023-01-10', '19:09:00.000000', '18:05:00.000000'),
('MATHS', '2023-01-17', '21:08:00.000000', '22:08:00.000000'),
('WDD', '2023-01-10', '08:30:00.000000', '12:30:00.000000'),
('Security', '2023-01-10', '05:06:00.000000', '06:08:00.000000'),
('MSCP', '2023-01-20', '11:00:00.000000', '23:59:00.000000'),
('SDLC', '2023-01-05', '08:30:00.000000', '12:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `email`, `usertype`, `password`) VALUES
(1, 'afsal', 'afsal@gmail.com', 'admin', '1234'),
(2, 'afrid', 'afrid@gmail.com', 'student', '23456'),
(3, 'jeelan', 'jeelan@gmail.com', 'lecture', '1212'),
(6, 'admin', 'admin@gmail.com', 'admin', '1234'),
(7, 'lecture', 'lecture@gmail.com', 'lecture', '1234'),
(8, 'student', 'student@gmail.com', 'student', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
