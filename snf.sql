-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2014 at 08:59 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snf`
--

-- --------------------------------------------------------

--
-- Table structure for table `adupload`
--

CREATE TABLE IF NOT EXISTS `adupload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adupload`
--

INSERT INTO `adupload` (`id`, `image`, `details`, `model`, `price`, `country`, `city`, `phone`, `username`) VALUES
(1, 'photos/mansion1.jpg', '6 bedrooms, 3 washrooms, 2 kitchens, 100 acres green land. 2 storied house.', 'Mansion', '15,000 - 20,000', 'Kenya', 'Nairobi', '0710145559', 'Centy'),
(2, 'photos/bangalow.jpg', 'Self-contained house,1 living room, 3 bedrooms, 1 kitchen, 2 bathrooms, a swiming pool and a garage. For more details contact us.', 'Bangalow', '20,000-25,000', 'Kenya', 'Mombasa', '0720100100', 'Simon');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `sex`, `email`, `phone`, `username`, `password`, `salt`, `country`, `city`) VALUES
(5, 'Vincent', 'Omondi', 'Male', 'centy@gmail.com', 2147483647, 'Doe', '32b95dde1b1d6e1451a521d51be26bf8a57a1453f44ac34b30b786be33eee1c9', 'f00f', 'Uganda', 'Kampala'),
(6, 'Simon', 'Mwangi', 'Male', 'saimon@mail.com', 2147483647, 'Smwangi', '3347f39d13d1e29b4c0b8954698b649c384d1389b863f68a5079126978c402da', '4a22', 'Kenya', 'Mombasa'),
(7, 'Mercy', 'Tom', 'Female', 'mercyt@gmail.com', 2147483647, 'Mercy', '0ebf733c6e05c92fd8ad1c10a87120fffce326f087b798864c1056962c0a3a60', 'eefe', 'Kenya', 'Eldoret'),
(8, 'Ruth', 'Mwangi', 'Female', 'ruthm@mail.com', 2147483647, 'Ruth', '71f8d6779d5b1db0da321fc5f0d96cb3b09990b5ba2a899edb2d9627ea57c7de', '62d6', 'Kenya', 'Thika');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
