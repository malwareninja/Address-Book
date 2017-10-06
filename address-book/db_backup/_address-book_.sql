-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 11:48 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `address-book`
--
CREATE DATABASE `address-book` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `address-book`;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Permanant_Address` varchar(250) NOT NULL,
  `Temporary_Address` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Persons' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`ID`, `Name`, `Mobile`, `Email`, `Permanant_Address`, `Temporary_Address`) VALUES
(3, 'Mohan Shinde', 8308381814, 'mohanshinde@gmail.com', 'Nashik Road', 'Nashik Road'),
(5, 'Tushar Jachak', 978564203, 'tusharjachak@rediffmail.com', 'Goa', 'Goa'),
(6, 'Prisha Jadhav', 7854693210, 'prisha@ymail.com', 'Pune', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Last_Login` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Last_Login`) VALUES
(1, 'Suraj', 'Mundalik', 'suraj2334', '827ccb0eea8a706c4c34a16891f84e7b', '18 Sep 2016 10:29 AM'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
