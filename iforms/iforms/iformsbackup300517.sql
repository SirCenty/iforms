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
  `entity` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `department` (`did`, `entity`) VALUES
(1,	'CEO'),
(2,	'Contact Centre & Platform Integrity'),
(3,	'Core Systems & Switching'),
(4,	'Development '),
(5,	'External/Internal Delivery & Support'),
(6,	'Finance & Admin'),
(7,	'Financial Services'),
(8,	'Head Financial Technology and Innovation'),
(9,	'Head Operations'),
(10,	'Head Product & Service Delivery'),
(11,	'Head Technology'),
(12,	'Human Resource'),
(13,	'ISW Digital & VC'),
(14,	'Infrastructure & Enterprise Architecture'),
(15,	'Insurance & Health'),
(16,	'PMO'),
(17,	'Product & Innovation'),
(18,	'Quality, Security & Compliance'),
(19,	'Risk & Legal'),
(20,	'Service Management'),
(21,	'Third Party Processing - TPP'),
(22,	'Verve (Consumer Market)');

DROP TABLE IF EXISTS `network`;
CREATE TABLE `network` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
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

INSERT INTO `network` (`id`, `reqtype`, `names`, `emails`, `phone_number`, `job_title`, `department`, `current_user_id`, `work_location`, `request_date`, `employee_no`, `paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realtimedb`, `cencon`, `entsqlsrv`, `partner_router`, `internet_router`, `meraki_fw`, `juniper_fw`, `office_access`, `cde_access`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `purpose`, `authorizers`, `auth1name`, `auth2name`, `auth3name`, `auth4name`, `authlevel`, `authlm`, `auth1`, `auth2`, `auth3`, `auth4`, `a0`, `a1`, `a2`, `a3`, `a4`, `decline_reason`, `last_authdate`, `access_granted`, `implement_date`, `paynetDATE`, `interswitchDATE`, `paynetslanDATE`, `interswitchgroupDATE`, `primeDATE`, `onlineDATE`, `fraudguardDATE`, `istDATE`, `intsqlsrvDATE`, `intsqlsrv1DATE`, `officedbDATE`, `realtimedbDATE`, `cenconDATE`, `entsqlsrvDATE`, `routerDATE`, `firewallDATE`, `access_controlDATE`, `pastelDATE`, `terminal_serverDATE`, `intranetDATE`, `tranwall_tcDATE`) VALUES
(1,	'New User',	'Vincent Omondi',	'vincent.omondi@interswitchgroup.com',	'254710145559',	'Switch Technician',	'Core Systems and Switching',	'omondiv',	'',	'2017-05-26 17:20:55',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'User',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'Cardwatch and Cardview support.',	'Paul Mathenge Maina, Linda Warui, Joseph Nguu, Maseline Keya, Linda Warui',	NULL,	NULL,	NULL,	NULL,	'5',	'PMM',	'LW',	'JN',	'MK',	'LW',	'yes',	'yes',	'yes',	'yes',	'yes',	NULL,	'2017-05-26 17:49:17',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `permissions` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `permissions` (`pid`, `permissions`) VALUES
(1,	'Admin'),
(2,	'User'),
(3,	'Support'),
(4,	'Limited');

DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems` (
  `sid` int(20) NOT NULL AUTO_INCREMENT,
  `entity` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `systems` (`sid`, `entity`, `name`, `value`) VALUES
(1,	'Paynet',	'paynet',	'[Paynet]'),
(2,	'Interswitch',	'interswitch',	'[Interswitch]'),
(3,	'Paynetslan',	'paynetslan',	'[Paynetslan]'),
(4,	'Interswitchgroup',	'interswitchgroup',	'[Interswitchgroup]'),
(5,	'Prime',	'prime',	'[Prime]'),
(6,	'Online',	'online',	'[Online]'),
(7,	'Fraudguard',	'fraudguard',	'[Fraudguard]'),
(8,	'Ist',	'ist',	'[IST]'),
(9,	'Intsqlsrv',	'intsqlsrv',	'[Intsqlsrv]'),
(10,	'Intsqlsrv1',	'intsqlsrv1',	'[Intsqlsrv1]'),
(11,	'Officedb',	'officedb',	'[Office-DB]'),
(12,	'Realtimedb',	'realtimedb',	'[Realtime-DB]'),
(13,	'Cencon',	'cencon',	'[Cencon]'),
(14,	'Entsqlsrv',	'entsqlsrv',	'[Entsqlsrv]'),
(15,	'Partner Router',	'partner_router',	'[Partner router]'),
(16,	'Internet Router',	'internet_router',	'[Internet router]'),
(17,	'Meraki',	'meraki_fw',	'[Meraki]'),
(18,	'Juniper',	'juniper_fw',	'[Juniper]'),
(19,	'Pastel',	'pastel',	'[Pastel]'),
(20,	'Terminal Server',	'terminal_server',	'[Terminal Server]'),
(21,	'Tranwall TC',	'tranwall_tc',	'[Tranwall TC]');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) DEFAULT NULL,
  `initials` varchar(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `authorizer` varchar(5) DEFAULT NULL,
  `implementer` varchar(5) DEFAULT NULL,
  `line_manager` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `names`, `initials`, `email`, `phone`, `userid`, `department`, `job_title`, `password`, `salt`, `authorizer`, `implementer`, `line_manager`) VALUES
(1,	'Vincent Omondi',	'VO',	'vincent.omondi@interswitchgroup.com',	'254710145559',	'omondiv',	'Core Systems and Switching',	'Switch Technician',	'62a5b569a15e2aa7a282c729055d871b78bef8b12635f6d6e96332e1a2420be109c6a89439325a5ef10c8f372a81314de53fc66613df80b25e1c578aa44dbeb9',	'&h1y0e4Wy6xuNvIK55706M*MRw57tNZZIEV8hgn$QglYqXat6JBGZW4YH@eb?jcq',	'yes',	'yes',	'no'),
(3,	'Joseph Nguu',	'JN',	'joseph.nguu@interswitchgroup.com',	'254722882098',	'nguuj',	'Quality, Security & Compliance',	'IT SEcurity supervisor',	'cb780a8b34b780411db664aeb716d15ac13d0e4fa1bec87844df90915964824d652b0d5df7518ac58cb03a3fc2549e90dc5e017c55fafc88a5ff58a8d7bd197b',	'uYrAzt9f%eEYo8rQfv!4bVRRyJROw8LBnQ?Ty7$6&Gznql5BNbgG4vEWdd9rukvs',	'yes',	'no',	'yes'),
(4,	'Annastacia Nzioka',	'AN',	'annastacia.nzioka@interswitchgroup.com',	'254725249498',	'nziokaa',	'Core Systems & Switching',	'Switch Engineer',	'6b9a7eb76a8343ba1b3ceec0bf4ba80a895db9e3eca8c57206d8ed7e443e43d6fe55201754e43e139df22f5ebdaa6b5ef512a0ed5689e93d96cd5561c7af13ba',	'wSeqMyHw&h9wcbzuPDm2PIAN8wBZJQ#vwETKYwFJvegzADWe2fft0sxyAJjbWjFH',	'yes',	'no',	'yes'),
(5,	'Paul Mathenge Maina',	'PMM',	'paul.maina@interswitchgroup.com',	'254714946494',	'mainap',	'External/Internal Delivery & Support',	'Switch Technician',	'f6aa9baaf2e14be5bd3035bd93d57c866068f326738b5e5cd1a6d11dd926d2e65a2909886a85f81823ad43861c5c0cde949df1a3106aaacb04263045e4294a4c',	'HC!8OBj21ir&?$oUV3kkj1WW4ZeWL3RX&&d3LffgRLXJ8st9hI*dIub1tU8iD%cq',	'yes',	'yes',	'yes'),
(6,	'Bethuel Njenga',	'BN',	'bethuel.njenga@interswitchgroup.com',	'254725173969',	'bethueln',	'Infrastructure & Enterprise Architecture',	'systems administrator',	'b5c47799326e63020810042c3ebdf5a1297d34bf6a3822dc309da6977e8555130afdba9fe4a6d2cc0bd8452177a7fce594cfaf7d7c2b2db007f84ade1cf23f3d',	'T%67cwuXtxlCg#e1pH5p9L5o62heL6uWNDF$sv!TmFjfn8dMp9G3uKVz%Q7uz@dP',	'yes',	'yes',	'yes'),
(7,	'Anthony Miano',	'AM',	'anthony.miano@interswitchgroup.com',	'0720043827',	'mianoa',	'Quality, Security & Compliance',	'Infosec Technician',	'9a8e4f4bb0b77060954ca53790b494c0fdab235489df702fdea508be596ce12f23b98dba435cda55d42d71b855826cdb8c3a5e2865b6c132649683fcc8b7f712',	'nyCZ$X6gMtl5y3SBWWoK6uR?FY!&%rZ5KWB$I6sCA@oqGVkIt5RaH?RG?pkbdpmz',	'yes',	'no',	'no'),
(8,	'Mikhail Mugotitsa',	'MM',	'mikhail.mugotitsa@interswitchgroup.com',	'0714312860',	'mugotitsam',	'Quality, Security & Compliance',	'IT Security Officer ',	'4bbfce4a6c9b892c6f57664cc4266d81d0fc3c653431e037dc6eef2fa3b7d58103276264c73386112789dc685fe323ad53cf478c6a0453cae79df3a533b5f948',	'jqjePa*YcRQF4proaSQlROxAmyOFXHOBa5$m$WjfO#N@aYJHyn&ra25%fK*p7rV#',	'yes',	'no',	'no'),
(9,	'Maseline Keya',	'MK',	'maseline.keya@interswitchgroup.com',	'254733739226',	'keyam',	'Head Operations',	'Head of Operations',	'2b5438a722dffe7de5b00b8b365cb79a2bc51388a2970a7f880f208ff1562d309d6a38a6c8f1e8aa7a882f6ef51d7fc91cb5d94d360c368130362cdb1856857d',	'&1L6hvGRuWh6gMgnea#GNhGvo8xBu9fkRGUpkAfmsLBi#eldlJi6C9l&q9uHxzmp',	'yes',	'no',	'no'),
(11,	'Linda Warui',	'LW',	'linda.warui@interswitchgroup.com',	'254726983805',	'waruil',	'Head Technology',	'Head Shared Technology',	'2da7e7f6b88a7fa0d599b17bf144b7157c9ab068bd48df21db0bac1cec59ac35c893d13102ccc40e5032425ccade8386b41e786c4ef36c4e414af044577aa7bd',	'oF1JOCR74VslV!$MX3hgijgFWHn0dNxuR8duTiXe9ef78yNJOfk00eCYZ9kJJXYU',	'yes',	'no',	'yes'),
(13,	'Michael Mbugua',	'MM',	'michael.njuguna@interswitchgroup.com',	'0722178526',	'mikeytellem',	'Infrastructure & Enterprise Architecture',	'dba',	'0700cf8dbd02eeb7358b44f9a835961d705ead4d0d46a8f5eda6b1543f609d67b0d090af5e80222ee89a3c38cc5252e3196631e58668d4ff94f98c9bc7abe177',	'Fa60moZcgc9%RQ02zxaJCUC35Y2wZntrukoDMwERwbiuw&IIsZjEz@MA?MkNt#@q',	'no',	'no',	'no');

-- 2017-05-30 01:46:18
