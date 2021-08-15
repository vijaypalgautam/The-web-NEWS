-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2021 at 03:05 PM
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
-- Database: `newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

DROP TABLE IF EXISTS `crime`;
CREATE TABLE IF NOT EXISTS `crime` (
  `newsId` int(10) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(255) NOT NULL,
  `NewsImage` varchar(255) NOT NULL,
  `NewsContent` varchar(1000) NOT NULL,
  `NewsReporter` varchar(35) NOT NULL,
  `Newsdate` varchar(15) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`newsId`, `NewsTitle`, `NewsImage`, `NewsContent`, `NewsReporter`, `Newsdate`) VALUES
(10, 'Ashish ka dokha', 'uploads/onlinelogomaker-050421-1344-9668.png', 'time pass........', 'zaheen', '30/07/2021');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

DROP TABLE IF EXISTS `entertainment`;
CREATE TABLE IF NOT EXISTS `entertainment` (
  `newsId` int(10) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(255) NOT NULL,
  `NewsImage` varchar(255) NOT NULL,
  `NewsContent` varchar(1000) NOT NULL,
  `NewsReporter` varchar(35) NOT NULL,
  `Newsdate` varchar(15) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`newsId`, `NewsTitle`, `NewsImage`, `NewsContent`, `NewsReporter`, `Newsdate`) VALUES
(1, 'asdf', 'uploads/chat.png', 'sfsdfslkfsk;', 'zaheen', '02/08/2021'),
(2, 'asdf', 'uploads/chat.png', 'sfsdfslkfsk;', 'zaheen', '02/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `international`
--

DROP TABLE IF EXISTS `international`;
CREATE TABLE IF NOT EXISTS `international` (
  `newsId` int(10) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(255) NOT NULL,
  `NewsImage` varchar(255) NOT NULL,
  `NewsContent` varchar(1000) NOT NULL,
  `NewsReporter` varchar(35) NOT NULL,
  `Newsdate` varchar(15) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polytics`
--

DROP TABLE IF EXISTS `polytics`;
CREATE TABLE IF NOT EXISTS `polytics` (
  `newsId` int(10) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(255) NOT NULL,
  `NewsImage` varchar(255) NOT NULL,
  `NewsContent` varchar(1000) NOT NULL,
  `NewsReporter` varchar(35) NOT NULL,
  `Newsdate` varchar(15) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `newsId` int(10) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(255) NOT NULL,
  `NewsImage` varchar(255) NOT NULL,
  `NewsContent` varchar(1000) NOT NULL,
  `NewsReporter` varchar(35) NOT NULL,
  `Newsdate` varchar(15) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

DROP TABLE IF EXISTS `userregistration`;
CREATE TABLE IF NOT EXISTS `userregistration` (
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `usertype` varchar(35) NOT NULL,
  `reportertype` varchar(35) NOT NULL,
  `mobno` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`username`, `password`, `name`, `usertype`, `reportertype`, `mobno`, `email`, `dob`, `gender`) VALUES
('vijay', '12345', 'vijay pal', 'Admin', 'sports', '7018396648', 'vijay@pal.com', '17-05-1997', 'male'),
('ashish', '12345', 'ashish kumar', 'Admin', 'NA', '1234567890', 'a@a.com', '12-12-12', 'female'),
('zaheen', '12345', 'Zaheen Alam', 'Reporter', 'Crime', '9876543210', 'zaheen@sl.ls', '12-12-12', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
