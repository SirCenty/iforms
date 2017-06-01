-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2017 at 06:38 AM
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
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `id` int(100) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `reqtype` varchar(20) DEFAULT NULL,
  `names` varchar(255) DEFAULT NULL,
  `emails` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `current_user_id` varchar(50) DEFAULT NULL,
  `work_location` varchar(50) DEFAULT NULL,
  `request_date` datetime DEFAULT NULL,
  `employee_no` varchar(50) DEFAULT NULL,
  `paynet` varchar(50) DEFAULT NULL,
  `paynetslan` varchar(50) DEFAULT NULL,
  `interswitch` varchar(50) DEFAULT NULL,
  `interswitchgroup` varchar(50) DEFAULT NULL,
  `prime` varchar(50) DEFAULT NULL,
  `online` varchar(50) DEFAULT NULL,
  `fraudguard` varchar(50) DEFAULT NULL,
  `ist` varchar(50) DEFAULT NULL,
  `intsqlsrv` varchar(50) DEFAULT NULL,
  `intsqlsrv1` varchar(50) DEFAULT NULL,
  `officedb` varchar(50) DEFAULT NULL,
  `realimedb` varchar(50) DEFAULT NULL,
  `cencon` varchar(50) DEFAULT NULL,
  `extsqlsrv` varchar(50) DEFAULT NULL,
  `router` varchar(50) DEFAULT NULL,
  `network_switch` varchar(50) DEFAULT NULL,
  `firewall` varchar(50) DEFAULT NULL,
  `access_control` varchar(50) DEFAULT NULL,
  `pastel` varchar(50) DEFAULT NULL,
  `terminal_server` varchar(50) DEFAULT NULL,
  `intranet` varchar(50) DEFAULT NULL,
  `tranwall_tc` varchar(50) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `purpose` text,
  `authorizers` text,
  `auth1` varchar(10) DEFAULT NULL,
  `auth2` varchar(10) DEFAULT NULL,
  `auth3` varchar(10) DEFAULT NULL,
  `auth4` varchar(10) DEFAULT NULL,
  `a1` varchar(3) DEFAULT NULL,
  `a2` varchar(3) DEFAULT NULL,
  `a3` varchar(3) DEFAULT NULL,
  `a4` varchar(3) DEFAULT NULL,
  `last_authdate` datetime DEFAULT NULL,
  `access_granted` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `user`, `reqtype`, `names`, `emails`, `phone_number`, `job_title`, `department`, `current_user_id`, `work_location`, `request_date`, `employee_no`, `paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realimedb`, `cencon`, `extsqlsrv`, `router`, `network_switch`, `firewall`, `access_control`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `other`, `purpose`, `authorizers`, `auth1`, `auth2`, `auth3`, `auth4`, `a1`, `a2`, `a3`, `a4`, `last_authdate`, `access_granted`) VALUES
(78, 'centy', 'New User', 'John Doe', '', '', '', '', '', '', '2017-05-04 04:42:16', '', '', '', '', '', '', '[Online admin]', '', '', '', '[Intsqlsrv1 admin]', '', '', '', '', '', '', '', '', '', '[Terminal Server admin]', '', '', '', 'asadsdaadfdaf', 'Vincent Omondi, Vincent Omondi, Vincent Omondi, Vincent Omondi', 'VO', 'VO', 'VO', 'VO', 'yes', 'yes', 'yes', 'yes', '2017-05-04 05:38:05', 'yes'),
(79, 'centy', 'Temporary Access', 'Vincent Doe', '', '', '', '', '', '', '2017-05-04 05:40:04', '', '[Paynet admin]', '', '', '', '', '[Online user]', '', '', '', '[Intsqlsrv1 user]', '[Office-DB admin]', '', '', '', '', '', '', '', '', '[Terminal Server admin]', '', '', '', 'Tested and tested', 'Vincent Omondi, Vincent Omondi, Vincent Omondi, Vincent Omondi', 'VO', 'VO', 'VO', 'VO', 'yes', 'yes', 'no', NULL, NULL, NULL),
(80, 'centy', 'Update User', 'Jane Doe', '', '', '', '', '', '', '2017-05-04 05:40:38', '', '[Paynet admin]', '', '', '', '', '[Online user]', '', '', '', '[Intsqlsrv1 user]', '[Office-DB admin]', '', '', '', '', '', '', '', '', '[Terminal Server admin]', '', '', '', 'Tested and tested', 'Vincent Omondi, Vincent Omondi, Vincent Omondi, Vincent Omondi', 'VO', 'VO', 'VO', 'VO', 'yes', 'yes', 'yes', 'yes', '2017-05-04 05:41:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `initials` varchar(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `authorizer` varchar(5) DEFAULT NULL,
  `implementer` varchar(5) DEFAULT NULL,
  `paynet` varchar(20) DEFAULT NULL,
  `prime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `initials`, `email`, `phone`, `userid`, `department`, `job_title`, `password`, `authorizer`, `implementer`, `paynet`, `prime`) VALUES
(6, 'Vincent Omondi', 'VO', 'sircenty@gmail.com', '0710145559', 'admin', 'Core Systems and Switching', 'Switch Technician', 'sadfdgbbn', 'yes', 'yes', '[Paynet]', '[Prime]'),
(7, 'John Doe', 'JD', 'sircenty@gmail.com', '0710145559', 'admin', 'Core Systems and Switching', 'Switch Technician', 'asdfghnm', 'yes', 'yes', '[Paynet]', '[Prime]'),
(8, 'Chief Omosh', 'CO', 'sircenty@gmail.com', '0710145559', 'admin', 'Core Systems and Switching', 'Switch Technician', 'asdfgbh', 'yes', 'yes', '[Paynet]', '[Prime]'),
(9, 'Sela Mmoja', 'SM', 'sircenty@gmail.com', '0710145559', 'admin', 'Core Systems and Switching', 'Switch Technician', 'asdfgb', 'yes', 'yes', '[Paynet]', '[Prime]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
