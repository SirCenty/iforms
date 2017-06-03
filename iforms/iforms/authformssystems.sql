-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2017 at 11:40 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `sid` int(20) NOT NULL,
  `entity` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`sid`, `entity`, `name`, `value`) VALUES
(23, 'Paynet', 'paynet', '[Paynet]'),
(24, 'Interswitch', 'interswitch', '[Interswitch]'),
(25, 'Paynetslan', 'paynetslan', '[Paynetslan]'),
(26, 'Interswitchgroup', 'interswitchgroup', '[Interswitchgroup]'),
(27, 'Prime', 'prime', '[Prime]'),
(28, 'Online', 'online', '[Online]'),
(29, 'Fraudguard', 'fraudguard', '[Fraudguard]'),
(30, 'Ist', 'ist', '[IST]'),
(31, 'Intsqlsrv', 'intsqlsrv', '[Intsqlsrv]'),
(32, 'Intsqlsrv1', 'intsqlsrv1', '[Intsqlsrv1]'),
(33, 'Officedb', 'officedb', '[Office-DB]'),
(34, 'Realtimedb', 'realtimedb', '[Realtime-DB]'),
(35, 'Cencon', 'cencon', '[Cencon]'),
(36, 'Entsqlsrv', 'entsqlsrv', '[Entsqlsrv]'),
(37, 'Partner Router', 'partnerrouter', '[Partner router]'),
(38, 'Internet Router', 'internetrouter', '[Internet router]'),
(39, 'Meraki', 'meraki', '[Meraki]'),
(40, 'Juniper', 'juniper', '[Juniper]'),
(41, 'Pastel', 'pastel', '[Pastel]'),
(42, 'Terminal Server', 'terminal_server', '[Terminal Server]'),
(43, 'Tranwall TC', 'tranwall_tc', '[Tranwall TC]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
