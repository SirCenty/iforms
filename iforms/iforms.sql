-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2017 at 04:53 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(10) NOT NULL,
  `entity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `entity`) VALUES
(1, 'Contact Centre & Platform Integrity'),
(2, 'Core Systems & Switching'),
(3, 'Development '),
(4, 'External/Internal Delivery & Support'),
(5, 'Finance & Admin'),
(6, 'Financial Services'),
(7, 'Human Resource'),
(8, 'ISW Digital & VC'),
(9, 'Infrastructure & Enterprise Architecture'),
(10, 'Insurance & Health'),
(11, 'PMO'),
(12, 'Product & Innovation'),
(13, 'Quality, Security & Compliance'),
(14, 'Risk & Legal'),
(15, 'Service Management'),
(16, 'Third Party Processing - TPP'),
(17, 'Verve (Consumer Market)');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `deid` int(10) NOT NULL,
  `entity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`deid`, `entity`) VALUES
(1, 'CEO'),
(2, 'Head Financial Technology and Innovation'),
(3, 'Head Operations'),
(4, 'Head Product & Service Delivery'),
(5, 'Head Technology'),
(6, 'Human Resource'),
(7, 'Risk & Legal');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `id` int(100) NOT NULL,
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
  `tranwall_tcDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `reqtype`, `names`, `emails`, `phone_number`, `designation`, `department`, `user_id`, `work_location`, `request_date`, `employee_no`, `paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realtimedb`, `cencon`, `entsqlsrv`, `partner_router`, `internet_router`, `meraki_fw`, `juniper_fw`, `office_access`, `cde_access`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `purpose`, `authorizers`, `auth1name`, `auth2name`, `auth3name`, `auth4name`, `authlevel`, `authlm`, `auth1`, `auth2`, `auth3`, `auth4`, `a0`, `a1`, `a2`, `a3`, `a4`, `decline_reason`, `last_authdate`, `access_granted`, `implement_date`, `paynetDATE`, `interswitchDATE`, `paynetslanDATE`, `interswitchgroupDATE`, `primeDATE`, `onlineDATE`, `fraudguardDATE`, `istDATE`, `intsqlsrvDATE`, `intsqlsrv1DATE`, `officedbDATE`, `realtimedbDATE`, `cenconDATE`, `entsqlsrvDATE`, `routerDATE`, `firewallDATE`, `access_controlDATE`, `pastelDATE`, `terminal_serverDATE`, `intranetDATE`, `tranwall_tcDATE`) VALUES
(1, 'New User', 'Vincent Omondi', 'vincent.omondi@interswitchgroup.com', '254710145559', 'Switch Technician', 'Core Systems and Switching', 'omondiv', '', '2017-05-26 17:20:55', '', '', '', '', '', '', '', '', '', '', 'User', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Cardwatch and Cardview support.', 'Paul Mathenge Maina, Linda Warui, Joseph Nguu, Maseline Keya, Linda Warui', NULL, NULL, NULL, NULL, '5', 'PMM', 'LW', 'JN', 'MK', 'LW', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, '2017-05-26 17:49:17', NULL, '2017-05-28 23:47:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `pid` int(10) NOT NULL,
  `permissions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`pid`, `permissions`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Support'),
(4, 'Limited');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `stid` int(10) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stid`, `names`, `email`, `phone`) VALUES
(1, 'Alice Murefu', 'alice.murefu@interswitchgroup.com', '254724799594'),
(2, 'Anastacia Nzioka', 'anastacia.nzioka@interswitchgroup.com', '254725249498'),
(3, 'Andrew Kabeke', 'andrew.kabeke@interswitchgroup.com', '254725568995'),
(4, 'Anne Kihara', 'anne.kihara@interswitchgroup.com', '254726470246'),
(5, 'Anne Wangondu', 'anne.wangondu@interswitchgroup.com', '254723117781'),
(6, 'Anthony Miano', 'anthony.miano@interswitchgroup.com', '254720043827'),
(7, 'Anthony Ndungu', 'anthony.ndungu@interswitchgroup.com', '254720663880'),
(8, 'Atanas Mwangi', 'atanas.mwangi@interswitchgroup.com', '254734525425'),
(9, 'Augustine Lukorito', 'augustine.lukorito@interswitchgroup.com', '254716383043'),
(10, 'Barack Mondia', 'barack.mondia@interswitchgroup.com', '254711820677'),
(11, 'Beatrice Karimi', 'beatrice.karimi@interswitchgroup.com', '254726352094'),
(12, 'Bernard Matthewman', 'bernard.mathewman@interswitchgroup.com', '254733634675'),
(13, 'Bethuel Njenga', 'bethuel.njenga@interswitchgroup.com', '254725173969'),
(14, 'Brandan Waweru', 'brandan.waweru@interswitchgroup.com', '254723525757'),
(15, 'Brian Onyango', 'brian.onyango@interswitchgroup.com', '254717378954'),
(16, 'Caroline Bosuben', 'bosubenc@pesatransact.co.ke', '254722911990'),
(17, 'Cathrine Aloo', 'cathrine.mukami@interswitchgroup.com', '254713112292'),
(18, 'Charles Mbuguah', 'charles.mbugua@interswitchgroup.com', '254722723224'),
(19, 'Chris Kaburu', 'chris.kaburu@interswitchgroup.com', '254710757175'),
(20, 'Chris Mbai', 'mbaic@pesatransact.co.ke', '254721892466'),
(21, 'Claire Shiramba', 'claire.shiramba@interswitchgroup.com', '254723681603'),
(22, 'Cliff Bulogosi', 'cliff.bulogosi@interswitchgroup.com', '254723729546'),
(23, 'Collins Mburu', 'collins.mburu@interswitchgroup.com', '254720372420'),
(24, 'Cynthia Kantai', 'cynthia.kantai@interswitchgroup.com', '254721739014'),
(25, 'Damaris Musimbi', 'damaris.musimbi@interswitchgroup.com', '254729644103'),
(26, 'Danson Kinyua', 'danson.kinyu@interswitchgroup.com', '254727812330'),
(27, 'Desmond Zau', 'desmond.zau@interswitchgroup.com', '254725745305'),
(28, 'Doris Njeru', 'doris.njeru@interswitchgroup.com', '254712275445'),
(29, 'Doughty Wanyama', 'doughty.wanyama@interswitchgroup.com', '254723701553'),
(30, 'Duncan Mulama', 'duncan.mulama@interswitchgroup.com', '254725796156'),
(31, 'Duncan Ngari', 'duncan.ngari@interswitchgroup.com', '254721174361'),
(32, 'Elizabeth Ouda', 'elizabeth.ouda@interswitchgroup.com', '254722848553'),
(33, 'Ellam Kivisi', 'ellam.kivisi@interswitchgroup.com', '254723986972'),
(34, 'Epiphanius Koech', 'epiphanius.koech@interswitchgroup.com', '254714800628'),
(35, 'Eric Mutea', 'eric.mutea@interswitchgroup.com', '254723547679'),
(36, 'Ezra Gumbe', 'ezra.ngumbe@interswitchgroup.com', '254721921353'),
(37, 'Francis Sechere', 'francis.sechere@interswitchgroup.com', '254726902447'),
(38, 'Frederik Eijkman', 'eijkmanf@pesatransact.co.ke', '254724710361'),
(39, 'Fredrick Nzimbi', 'fredrick.nzimbi@interswitchgroup.com', '254728220220'),
(40, 'Fredrick Otieno', 'fredrick.otieno@interswitchgroup.com', '254726911857'),
(41, 'Godfrey Ndegwa', 'godfrey.ndegwa@interswitchgroup.com', '254713281299'),
(42, 'Grace Namu', 'grace.namu@interswitchgroup.com', '254722888619'),
(43, 'Hamilton Mayabi', 'hamilton.mayabi@interswitchgroup.com', '254723729546'),
(44, 'Hannah Njeri', 'hannah.njeri@interswitchgroup.com', '254720500699'),
(45, 'Harleys Ingosi', 'harleys.ingosi@interswitchgroup.com', '254724982566'),
(46, 'Hellen Gakuo', 'hellen.gakuo@interswitchgroup.com', '254723542048'),
(47, 'Hellen Karu', 'hellen.karu@interswitchgroup.com', '254721260752'),
(48, 'Hilary Ngeno', 'hilary.ngeno@interswitchgroup.com', '254722377814'),
(49, 'Isaac Mwaura', 'isaac.mwaura@interswitchgroup.com', '254722287476'),
(50, 'Jackline Aluda', 'jackline.aluda@interswitchgroup.com', '254727707963'),
(51, 'Jackline Mwose', 'jackline.mwose@interswitchgroup.com', '254720891489'),
(52, 'Jacob Buliba', 'jacob.buliba@interswitchgroup.com', '254727080823'),
(53, 'Janette Mbugua', 'janette.mbugua@interswitchgroup.com', '254720250434'),
(54, 'Joan Kiarie', 'joan.kiarie@interswitchgroup.com', '254723899283'),
(55, 'John Muia', 'john.muia@interswitchgroup.com', '254737211585'),
(56, 'John Ombati', 'ombatij@pesatransact.co.ke', '254728355224'),
(57, 'Johnston Mulindi', 'mulindij@pesatransact.co.ke', '254787866874'),
(58, 'Joseph Kamau', 'joseph.kamau@interswitchgroup.com', '254729415376'),
(59, 'Joseph Nguu', 'joseph.nguu@interswitchgroup.com', '254722882098'),
(60, 'Joseph Watende', 'joseph.wetende@interswitchgroup.com', '254722724403'),
(61, 'Josphat Kioko', 'kiokoj@pesatransact.co.ke', '254714064427'),
(62, 'Joy Riungu', 'joy.riungu@interswitchgroup.com', '254723339346'),
(63, 'Joyce Maingi', 'joyce.maingi@interswitchgroup.com', '254720615280'),
(64, 'Judith Onyach', 'judith.onyach@interswitchgroup.com', '254721750462'),
(65, 'Julia Matthewman', 'julia.mathewman@interswitchgroup.com', '254733613447'),
(66, 'Juliana Nduku', 'juliana.nduku@interswitchgroup.com', '254724336685'),
(67, 'Julie Ojwaya', 'julie.ojwaya@interswitchgroup.com', '254712694054'),
(68, 'Justin Larby', 'justin.larby@interswitchgroup.com', '254722512531'),
(69, 'Karimi Ithau', 'karimi.ithau@interswitchgroup.com', '254722747507'),
(70, 'Kelvin Mwangi', 'kelvin.mwangi@interswitchgroup.com', '254721356851'),
(71, 'Kennedy Ayiga', 'kennedy.amahaya@interswitchgroup.com', '254721761692'),
(72, 'Kennedy Matumbai', 'kennedy.matumbai@interswitchgroup.com', '254720400471'),
(73, 'Kennedy Oluoch', 'kennedy.oluoch@interswitchgroup.com', '254712013813'),
(74, 'Kevin Apiyo', 'kevin.apiyo@interswitchgroup.com', '254720871016'),
(75, 'Kevin Kandie', 'kevin.kandie@interswitchgroup.com', '254720363067'),
(76, 'Lee Maina', 'lee.maina@interswitchgroup.com', '254711417706'),
(77, 'Leonard Baraza', 'leonard.baraza@interswitchgroup.com', '254722976223'),
(78, 'Lilian Ojiambo', 'lilian.ojiambo@interswitchgroup.com', '254721708576'),
(79, 'Lilian Wambui', 'lilian.wambui@interswitchgroup.com', '254726792735'),
(80, 'Linda Ayuma', 'linda.ayuma@interswitchgroup.com', '254713897255'),
(81, 'Linda Warui', 'linda.warui@interswitchgroup.com', '254726983805'),
(82, 'Linus Ndege', 'linus.ndege@interswitchgroup.com', '254723362418'),
(83, 'Lucy Ndungu', 'lucy.ndungu@interswitchgroup.com', '254722493449'),
(84, 'Lynet Kiioh', 'lynet.kiioh@interswitchgroup.com', '254718534010'),
(85, 'Mark Odino', 'mark.odino@interswitchgroup.com', '254728164235'),
(86, 'Marolyne Adalla', 'marolyne.adallah@interswitchgroup.com', '254728778314'),
(87, 'Mary Okango', 'mary.okango@interswitchgroup.com', '254724074167'),
(88, 'Maseline Keya', 'maseline.keya@interswitchgroup.com', '254733739226'),
(89, 'Mercy Kingori', 'mercy.kingori@interswitchgroup.com', '254725412038'),
(90, 'Michael Indire', 'michael.indire@interswitchgroup.com', '254701247580'),
(91, 'Michael Kuiyaki', 'michael.kuiyaki@interswitchgroup.com', '254722655970'),
(92, 'Michael Macharia', 'michael.macharia@interswitchgroup.com', '254721607454'),
(93, 'Michael Njuguna', 'michael.njuguna@interswitchgroup.com', '254722178526'),
(94, 'Mikhail Mugotitsa', 'mikhail.mugotitsa@interswitchgroup.com', '254714312860'),
(95, 'Miriam Wanyoike', 'miriam.wanyoike@interswitchgroup.com', '254722560662'),
(96, 'Maurice Odoyo', 'odoyom@pesatransact.co.ke', '254727653870'),
(97, 'Muchiri Wambugu', 'muchiri.wambugu@interswitchgroup.com', '254722243718'),
(98, 'Muthoni Karimi', 'muthini.karimi@interswitchgroup.com', '254722540453'),
(99, 'Naomi Wachira', 'naomi.wachira@interswitchgroup.com', '254723416117'),
(100, 'Neema Nekoye', 'neema.nekoye@interswitchgroup.com', '254725039971'),
(101, 'Nevile Nasimiyu', 'nevile.nasimiyu@interswitchgroup.com', '254733243014'),
(102, 'Margaret Mwathi', 'njambi.mwathi@interswitchgroup.com', '254729324316'),
(103, 'Nnanna Enyi', 'nnanna.enyi@interswitchgroup.com', '254790851660'),
(104, 'Paul Maina', 'paul.maina@interswitchgroup.com', '254714946494'),
(105, 'Paul Ndichu', 'paul.ndichu@interswitchgroup.com', '254712962049'),
(106, 'Peter Kabutu', 'peter.kabutu@interswitchgroup.com', '254722341409'),
(107, 'Peter Kihara', 'peter.kihara@interswitchgroup.com', '254738348099'),
(108, 'Peter Mwema', 'peter.muema@interswitchgroup.com', '254720651726'),
(109, 'Philister Ombalo', 'philister.ombalo@interswitchgroup.com', '254721930924'),
(110, 'Raphael Muteti', 'raphael.muteti@interswitchgroup.com', '254722710431'),
(111, 'Ray Kittur', 'ray.kittur@interswitchgroup.com', '254723234480'),
(112, 'Robert Kamau', 'robert.kamau@interswitchgroup.com', '254737485200'),
(113, 'Romana Rajput', 'romana.rajput@interswitchgroup.com', '254722322761'),
(114, 'Sam Sabwa', 'sam.sabwa@interswitchgroup.com', '254729402001'),
(115, 'Samuel Menu', 'samuel.menu@interswitchgroup.com', '254721580040'),
(116, 'Samuel Mugo', 'samuel.mugo@interswitchgroup.com', '254724282023'),
(117, 'Shaun Mumford', 'shaun.mumford@interswitchgroup.com', '254735617057'),
(118, 'Stephen Barasa', 'stephen.baraza@interswitchgroup.com', '254722883310'),
(119, 'Stella Odembo', 'stella.odembo@interswitchgroup.com', '254705985119'),
(120, 'Steve Maina', 'steve.maina@interswitchgroup.com', '254727974060'),
(121, 'Sylvia Karanja', 'sylviah.karanja@interswitchgroup.com', '254720265186'),
(122, 'Synthia Kiruthi', 'synthia.kiruthi@interswitchgroup.com', '254721327869'),
(123, 'Terry Kidula', 'terry.kidula@interswitchgroup.com', '254722822207'),
(124, 'Thomas Lemayian', 'thomas.lemayian@interswitchgroup.com', '254721841288'),
(125, 'Vikaran Ubhi', 'vikaran.ubhi@interswitchgroup.com', '254715783663'),
(126, 'Vincent Omondi', 'vincent.omondi@interswitchgroup.com', '254710145559'),
(127, 'Violet Mwaura', 'violet.mwaura@interswitchgroup.com', '254707210218'),
(128, 'Weldon Ruttoh', 'weldon.ruttoh@interswitchgroup.com', '254729909958');

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
(1, 'Paynet', 'paynet', '[Paynet]'),
(2, 'Interswitch', 'interswitch', '[Interswitch]'),
(3, 'Paynetslan', 'paynetslan', '[Paynetslan]'),
(4, 'Interswitchgroup', 'interswitchgroup', '[Interswitchgroup]'),
(5, 'Prime', 'prime', '[Prime]'),
(6, 'Online', 'online', '[Online]'),
(7, 'Fraudguard', 'fraudguard', '[Fraudguard]'),
(8, 'Ist', 'ist', '[IST]'),
(9, 'Intsqlsrv', 'intsqlsrv', '[Intsqlsrv]'),
(10, 'Intsqlsrv1', 'intsqlsrv1', '[Intsqlsrv1]'),
(11, 'Officedb', 'officedb', '[Office-DB]'),
(12, 'Realtimedb', 'realtimedb', '[Realtime-DB]'),
(13, 'Cencon', 'cencon', '[Cencon]'),
(14, 'Entsqlsrv', 'entsqlsrv', '[Entsqlsrv]'),
(15, 'Partner Router', 'partner_router', '[Partner router]'),
(16, 'Internet Router', 'internet_router', '[Internet router]'),
(17, 'Meraki', 'meraki_fw', '[Meraki]'),
(18, 'Juniper', 'juniper_fw', '[Juniper]'),
(19, 'Pastel', 'pastel', '[Pastel]'),
(20, 'Terminal Server', 'terminal_server', '[Terminal Server]'),
(21, 'Tranwall TC', 'tranwall_tc', '[Tranwall TC]');

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
  `designation` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `authorizer` varchar(5) DEFAULT NULL,
  `implementer` varchar(5) DEFAULT NULL,
  `line_manager` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `initials`, `email`, `phone`, `userid`, `department`, `designation`, `password`, `salt`, `authorizer`, `implementer`, `line_manager`) VALUES
(1, 'Vincent Omondi', 'VO', 'vincent.omondi@interswitchgroup.com', '254710145559', 'omondiv', 'Core Systems & Switching', 'Technician', '5dd7fcf7da636652e3f036af3ce26a8d8ceff4f6d5ba73da8ffd3eb6b79a03324866ce811fa8fc251fd50211a7a509a03533c01512a1ca858aedc7a8a5b0271e', 'dag&cM#VRz&oZqaRYP1kwtWks1F3U#UHC#8HgzN8H%0*VXzkiNvGRibq#UdK1EAx', 'yes', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`deid`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `deid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `stid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
