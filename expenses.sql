-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 11:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expenses`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `BusinessId` int(11) NOT NULL AUTO_INCREMENT,
  `BusinessName` varchar(255) NOT NULL,
  `AddressLineOne` varchar(255) NOT NULL,
  `AddressLineTwo` varchar(255) DEFAULT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` varchar(15) NOT NULL,
  PRIMARY KEY (`BusinessId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`BusinessId`, `BusinessName`, `AddressLineOne`, `AddressLineTwo`, `City`, `State`, `Zip`) VALUES
(1, 'Test Business', '1234 Main', NULL, 'Auburn Hills', 'Mi', '48326');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(50) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`) VALUES
(1, 'Admin'),
(2, 'Reports');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` text NOT NULL,
  `middleName` text,
  `lastName` text NOT NULL,
  `businessId` int(11) NOT NULL,
  `userIsAdmin` bit(1) NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `userId` (`userId`),
  KEY `businessId` (`businessId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`, `firstName`, `middleName`, `lastName`, `businessId`, `userIsAdmin`) VALUES
(1, 'email@test.com', '12345', '', NULL, '', 1, b'0'),
(2, 'alex@test.com', '123456', '', NULL, '', 1, b'0'),
(3, 'alex1@test.com', '123456', '', NULL, '', 1, b'0'),
(4, 'alex@alex.com', '123456', '', NULL, '', 1, b'0'),
(5, 'alex@alex.com', '123456', '', NULL, '', 1, b'0'),
(6, '1@1.com', '123456', '', NULL, '', 1, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `userId` int(50) NOT NULL,
  `roleId` int(50) NOT NULL,
  KEY `userId` (`userId`),
  KEY `roleId` (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`userId`, `roleId`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`businessId`) REFERENCES `business` (`BusinessId`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
