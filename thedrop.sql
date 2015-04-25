-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2015 at 10:40 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thedrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Zishan Ahmad', 'zishanrbp@gmail.com', 'ed8416c897e12492509e54849fb35cfe42cefbdd22659dd2d46a34adcb901b47b7a6617503622af772bbc5e66b687edf03f21890e86108bb1fc134a6e1f78806');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `cid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `area` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `authority` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `level` int(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`cid`, `cname`, `mobile`, `address`, `area`, `description`, `authority`, `status`, `level`, `timestamp`) VALUES
(1, 'Zishan Ahmad', NULL, NULL, 'Zakir Nagar', 'Leaking Pipes', 'Someone', 'Pending', 3, '2015-04-18 11:20:30'),
(2, 'Shivam Rana', NULL, NULL, 'Andrews Ganj', 'Broken pipes', 'Someone', 'Pending', 0, '2015-04-18 11:21:47'),
(3, 'Sarah Masud', NULL, NULL, 'Okhla', 'Infrequent tankers', 'Someone', 'Pending', 0, '2015-04-18 13:27:43'),
(4, 'Chaitanya Gupta', NULL, NULL, 'Kalkaji', 'Polluted Water', 'Someone', 'Pending', 0, '2015-04-18 18:57:48'),
(5, 'Ameen Khan', NULL, NULL, 'Jamia Nagar', 'Low water supply', 'Shivam', 'Pending', 0, '2015-04-18 18:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `escalate`
--

CREATE TABLE IF NOT EXISTS `escalate` (
  `cid` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  PRIMARY KEY (`cid`,`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escalate`
--

INSERT INTO `escalate` (`cid`, `mobile`) VALUES
(1, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `fund` varchar(25) NOT NULL,
  `authority` varchar(40) NOT NULL,
  `start_date` year(4) NOT NULL,
  `end_date` year(4) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Initiation',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `title`, `description`, `fund`, `authority`, `start_date`, `end_date`, `status`) VALUES
(1, 'Externally Aided Project- Improvement of Water Supply system in\r\nChandrawal and Wazirabad Water Treatment Plant Command Area\r\n(through JICA/ADB loan funding)', 'To achieve equitable and continuous supply of Water, Chadrawal and Wazirabad\r\nWTP command Area serving a population of about 48 Lakh persons, projects are\r\nbeing taken up with estimated cost of ?4000 crore through Loan from JICA and\r\nADB supplemented by budgetary resources by GNCTD of Delhi. This will involve\r\ncomprehensive rehabilitation and improvement of water production and supply\r\nnetwork with focus on creation of DMAs and automation through distribution\r\nSCADA.', '4000 crore', 'Chadrawal and Wazirabad WTP command Area', 2015, 2017, 'Initiation'),
(2, 'Expansion of piped water to unauthorized colonies', 'This year 50 more unauthorized colonies will be covered with filtered water\r\npipeline thus benefitting about 2 lakh people.', '10 crore', 'DJB', 2012, 2016, 'Initiation'),
(3, 'Augmentation of Water Resources by recycling, rehabilitation and\r\nautomation', 'Based on a study carried out through WAPCO, a project will be taken up in Palla\r\nregion of Delhi to augment the supply from existing tubewells and Ranney wells\r\nby 15 MGD by automating and rehabilitating the whole system.\r\nDJB is also working on another project for construction of 40 MGD tertiary\r\ntreatment plant with the help of Singapore Government to produce treated\r\neffluent which will be as good as raw water.', '50 crore', 'DJB', 2015, 2018, 'Initiation'),
(4, 'Replacement of old distribution and trunk transmission system', 'DJB has undertaken major works for replacement of critical stretches of water\r\nmain in leakage prone portions especially of pre-stressed concrete (PSC) in a length of\r\napprox. 20 Km of various sizes. It is proposed to lay 220 km of new water lines and\r\nreplace 170 km of old water lines in 2014-15. An amount of ? 70.00 crore is kept under\r\nRevenue head & ? 140 crore under Loan head.', '210 crore', 'DJB', 2013, 2016, 'Initiation'),
(5, 'Improvements of existing water works', 'The renovation of coagulation and filtration system at Chandrawal Water Works\r\nno.1 and renovation of Bhagirathi Water Works are in progress. Three pilot projects i.e.\r\nMehrauli & Vasant Vihar, Malviya Nagar and Nangloi are in progress for improvement of\r\nwater service delivery based on PPP Model. A proposal for rehabilitation and\r\naugmentation of Raw Water Main of P&V series ranney wells is undertaken. An amount\r\nof ? 205 crore is kept under Revenue head & ? 150 crore under Loan head.', '355 crore', 'DJB', 2013, 2017, 'Initiation'),
(6, 'Rural Water Supply', 'A provision of 10.00 crore has been kept for supply of water through\r\ntankers/pipe line in rural areas.', '10 crore', 'DJB', 2014, 2015, 'Initiation');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `name`) VALUES
(1, 'Sarita Vihar'),
(2, 'Ashok Vihar'),
(3, 'Karawal Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `tanker`
--

CREATE TABLE IF NOT EXISTS `tanker` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(25) NOT NULL,
  `vid` varchar(20) NOT NULL,
  `filling` varchar(25) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tanker`
--

INSERT INTO `tanker` (`tid`, `route`, `vid`, `filling`) VALUES
(1, 'Sarita Vihar', 'DL1LT0495', 'OIA, PH-II'),
(2, 'Sarita Vihar', 'DL1LS9789', 'OIA, PH-II'),
(3, 'Ashok Vihar', 'DL1LS4886', 'OHT Ashok Vihar'),
(4, 'Karawal Nagar', 'DL1LS9790', 'OIA, PH-II');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE IF NOT EXISTS `travels` (
  `tid` int(11) NOT NULL,
  `place` varchar(40) NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL,
  PRIMARY KEY (`tid`,`place`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`tid`, `place`, `arrival`, `departure`) VALUES
(0, '', '00:00:00', '00:00:00'),
(1, 'Gali No 2, 40th Road MB Extn', '10:00:00', '11:00:00'),
(1, 'Gali No 2, Mohan Baba Nagar', '15:30:00', '16:15:00'),
(1, 'Gali No. 4 MB Nagar', '18:00:00', '18:45:00'),
(1, 'Hanuman Mandir', '13:00:00', '13:45:00'),
(1, 'Taj Pur Village', '07:15:00', '08:00:00'),
(2, 'MB Extension', '07:15:00', '08:00:00'),
(2, 'Molarband Extension Gali No 13 and 14', '15:30:00', '16:15:00'),
(2, 'Tajpur Village', '10:00:00', '11:00:00'),
(3, 'A Block, Cement Shed Shakurbasti', '08:50:00', '09:15:00'),
(3, 'B Block, Diesel Shed Shakurbasti', '07:20:00', '07:45:00'),
(3, 'C Block, Diesel Shed Shakurbasti', '10:25:00', '10:55:00'),
(3, 'JJC, U&V Block Shalimar Bagh', '12:00:00', '12:25:00'),
(3, 'K Block, Wazirpur JJR (Morning)', '13:20:00', '13:45:00'),
(4, 'E Block, Cement Shed Shakurbasti', '08:50:00', '09:15:00'),
(4, 'J Block, Diesel Shed Shakurbasti', '10:25:00', '10:55:00'),
(4, 'KKC, U&V Block Shalimar Bagh', '12:00:00', '12:25:00'),
(4, 'Some Extension Gali No 11 and 13', '13:00:00', '13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `urgent`
--

CREATE TABLE IF NOT EXISTS `urgent` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `mobile` int(10) NOT NULL,
  `location` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `authority` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `urgent`
--

INSERT INTO `urgent` (`uid`, `cname`, `mobile`, `location`, `status`, `authority`, `timestamp`) VALUES
(5, 'Zishan Ahmad', 2147483647, 'Zakir Nagar', 'Pending', 'Someone', '2015-04-18 22:50:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
