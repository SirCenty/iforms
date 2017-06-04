-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `iforms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `iforms`;

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `entity` varchar(255) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `designation`;
CREATE TABLE `designation` (
  `deid` int(10) NOT NULL AUTO_INCREMENT,
  `entity` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `network`;
CREATE TABLE `network` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reqtype` varchar(20) DEFAULT NULL,
  `names` varchar(255) DEFAULT NULL,
  `emails` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
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
  `realtimedb` varchar(50) DEFAULT NULL,
  `cencon` varchar(50) DEFAULT NULL,
  `entsqlsrv` varchar(50) DEFAULT NULL,
  `partner_router` varchar(50) DEFAULT NULL,
  `internet_router` varchar(20) DEFAULT NULL,
  `meraki_fw` varchar(20) DEFAULT NULL,
  `juniper_fw` varchar(20) DEFAULT NULL,
  `office_access` varchar(20) DEFAULT NULL,
  `cde_access` varchar(50) DEFAULT NULL,
  `pastel` varchar(50) DEFAULT NULL,
  `terminal_server` varchar(50) DEFAULT NULL,
  `intranet` varchar(50) DEFAULT NULL,
  `tranwall_tc` varchar(50) DEFAULT NULL,
  `purpose` text,
  `authorizers` text,
  `auth1name` varchar(50) DEFAULT NULL,
  `auth2name` varchar(50) DEFAULT NULL,
  `auth3name` varchar(50) DEFAULT NULL,
  `auth4name` varchar(50) DEFAULT NULL,
  `authlevel` varchar(5) DEFAULT NULL,
  `authlm` varchar(50) DEFAULT NULL,
  `auth1` varchar(10) DEFAULT NULL,
  `auth2` varchar(10) DEFAULT NULL,
  `auth3` varchar(10) DEFAULT NULL,
  `auth4` varchar(10) DEFAULT NULL,
  `a0` varchar(5) DEFAULT NULL,
  `a1` varchar(3) DEFAULT NULL,
  `a2` varchar(3) DEFAULT NULL,
  `a3` varchar(3) DEFAULT NULL,
  `a4` varchar(3) DEFAULT NULL,
  `decline_reason` varchar(255) DEFAULT NULL,
  `last_authdate` datetime DEFAULT NULL,
  `access_granted` datetime DEFAULT NULL,
  `implement_date` datetime DEFAULT NULL,
  `paynetDATE` datetime DEFAULT NULL,
  `interswitchDATE` datetime DEFAULT NULL,
  `paynetslanDATE` datetime DEFAULT NULL,
  `interswitchgroupDATE` datetime DEFAULT NULL,
  `primeDATE` datetime DEFAULT NULL,
  `onlineDATE` datetime DEFAULT NULL,
  `fraudguardDATE` datetime DEFAULT NULL,
  `istDATE` datetime DEFAULT NULL,
  `intsqlsrvDATE` datetime DEFAULT NULL,
  `intsqlsrv1DATE` datetime DEFAULT NULL,
  `officedbDATE` datetime DEFAULT NULL,
  `realtimedbDATE` datetime DEFAULT NULL,
  `cenconDATE` datetime DEFAULT NULL,
  `entsqlsrvDATE` datetime DEFAULT NULL,
  `routerDATE` datetime DEFAULT NULL,
  `firewallDATE` datetime DEFAULT NULL,
  `access_controlDATE` datetime DEFAULT NULL,
  `pastelDATE` datetime DEFAULT NULL,
  `terminal_serverDATE` datetime DEFAULT NULL,
  `intranetDATE` datetime DEFAULT NULL,
  `tranwall_tcDATE` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `permissions` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `stid` int(10) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems` (
  `sid` int(20) NOT NULL AUTO_INCREMENT,
  `entity` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) DEFAULT NULL,
  `initials` varchar(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `authorizer` varchar(5) DEFAULT NULL,
  `implementer` varchar(5) DEFAULT NULL,
  `line_manager` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `names`, `initials`, `email`, `phone`, `userid`, `department`, `designation`, `password`, `salt`, `authorizer`, `implementer`, `line_manager`) VALUES
(1,	'Vincent Omondi',	'VO',	'vincent.omondi@interswitchgroup.com',	'254710145559',	'omondiv',	'Core Systems & Switching',	'Technician',	'5dd7fcf7da636652e3f036af3ce26a8d8ceff4f6d5ba73da8ffd3eb6b79a03324866ce811fa8fc251fd50211a7a509a03533c01512a1ca858aedc7a8a5b0271e',	'dag&cM#VRz&oZqaRYP1kwtWks1F3U#UHC#8HgzN8H%0*VXzkiNvGRibq#UdK1EAx',	'yes',	'yes',	'yes'),
(2,	'Hannah Njeri',	'HN',	'hannah.njeri@interswitchgroup.com',	'254720500699',	'',	'External/Internal Delivery & Support',	'Technical',	'3b564cb62346ae21221d3117eccee52f280a4ab3419dc84790ede36d635b9537d94398c3a8cf4f1b9da10028ba7583583068e96b080cf84958acbc7dafbbe9ac',	'nu8*8#4Qytz!$lhbnpPZJMmboF3iw38CfLrffbvEECft@*4Y8q6sy5AUps8CjLCw',	'no',	'yes',	'no'),
(3,	'Hannah Njeri',	'HN',	'hannah.njeri@interswitchgroup.com',	'254720500699',	'njerih',	'External/Internal Delivery & Support',	'Technical Support',	'8a4696eb9135db7901a6ae8801b67a35e41f0036b35aa9ffc5ceed0be7116c9df2131c8d5d645464a5f46763271e7b6bfc25d0785e65e45721e2a46be403d3b3',	'o2yKajBMVsppNheX7DPYQB#r?5kh*#CgR9GcIz2*9#2H3xH5vR1Mk&Gr$BEtTE$0',	'no',	'yes',	'yes'),
(4,	'Vincent Omondi',	'VO',	'vincent.omondi@interswitchgroup.com',	'254710145559',	'',	'',	'',	'274c66d2ebd0d0970ff742d6b13c126efbcf660f8322470d621c4c2a14ef7da467f526315048b7acedb16ec373a02880b1a21d9152baa08ae8ad0bae5c3f2f80',	'wY1@oH&olvr#gWoI&ck#zE?@Bun!QLs*N9Qaz#KVnH%i0ibrIx8$kuqz&H2X6cy@',	'',	'',	'yes'),
(5,	'Cathrine Aloo',	'CA',	'cathrine.mukami@interswitchgroup.com',	'254713112292',	'Mukamic',	'Contact Centre & Platform Integrity',	'Head, Atm Outsourced Management',	'047f97bf62efd8c631569690169b7afb06e8caf7d43c1b367008ef07c8465bb4ccdb7d36410eeac00453604fd012cc9eee7c363dc1e3e814502158d63b2f79b4',	'hYPhiLgx5ojQC?uf?hLNs&i$1G1KJF#cPduVU%M&jP6tLsAqxfWkaZOxn77Axzq7',	'yes',	'yes',	'yes');

-- 2017-06-04 19:06:16
