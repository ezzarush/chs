-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 08:34 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_chs`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_complaint_source`
--

CREATE TABLE IF NOT EXISTS `ref_complaint_source` (
`id_complaint_source` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ref_complaint_source`
--

INSERT INTO `ref_complaint_source` (`id_complaint_source`, `value`, `description`) VALUES
(1, 'customer', 'Customer'),
(2, 'ylki', 'YLKI'),
(3, 'regulator', 'Regulator'),
(4, 'government', 'Government'),
(5, 'other', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ref_hpc_type`
--

CREATE TABLE IF NOT EXISTS `ref_hpc_type` (
`id_hpc_type` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ref_hpc_type`
--

INSERT INTO `ref_hpc_type` (`id_hpc_type`, `value`) VALUES
(1, 'Ancam MEDIA'),
(2, 'Ancam Management PermataBank'),
(3, 'Ancam Regulator/BI/YLKI'),
(4, 'Ancam Polisi'),
(5, 'Nasabah berkeluh berulang dalam 3 bulan terakhir');

-- --------------------------------------------------------

--
-- Table structure for table `ref_incident_type`
--

CREATE TABLE IF NOT EXISTS `ref_incident_type` (
`id_incident_type` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_incident_type`
--

INSERT INTO `ref_incident_type` (`id_incident_type`, `value`) VALUES
(1, 'COMP - Complaint'),
(2, 'FEED - Feedback'),
(3, 'INQ - Inquiry'),
(4, 'REQ - Request/Maintain');

-- --------------------------------------------------------

--
-- Table structure for table `ref_product`
--

CREATE TABLE IF NOT EXISTS `ref_product` (
`id_product` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `ref_product`
--

INSERT INTO `ref_product` (`id_product`, `value`) VALUES
(1, 'BB - BANKING BRANCH'),
(2, 'BCC - BANKING CALL CENTER'),
(3, 'CCB - CREDIT CARD BRANCH'),
(4, 'CCCC - CREDIT CARD CALL CENTER'),
(5, 'CCI - CREDIT CARD INTERNAL UNIT'),
(6, 'CLC - COLLECTION'),
(7, 'DCI - DEBIT CARD INTERNAL'),
(8, 'KSP - KOSPIN'),
(9, 'KTA - KREDIT TANPA AGUNAN'),
(10, 'MCO - MERCHAN OWNER'),
(11, 'MRG - MORTGAGE'),
(12, 'PBK - PRIORITY BANKING'),
(13, 'PEB - PERMATA e-Business'),
(14, 'PEBI - PERMATA e-Business Internal'),
(15, 'PFB - PREFERRED BANKING'),
(16, 'PSL - PERSONAL LOAN'),
(17, 'RBO - RETAIL BANKING OPERATIONS'),
(18, 'SME - SMALL MEDIUM ENTERPRISE'),
(19, 'SYH - SYARIAH'),
(20, 'TEST - TESTING untuk Production'),
(21, 'TOP - TECHNOLOGY & OPERATION'),
(22, 'TPTB - Testing Production & Training Banking'),
(23, 'TPTC - Testing Production & Training CC'),
(24, 'WHS - WHOLESALE');

-- --------------------------------------------------------

--
-- Table structure for table `ref_receiving_method`
--

CREATE TABLE IF NOT EXISTS `ref_receiving_method` (
`id_receiving_method` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ref_receiving_method`
--

INSERT INTO `ref_receiving_method` (`id_receiving_method`, `value`, `description`) VALUES
(1, 'phone', 'Phone'),
(2, 'email', 'Email'),
(3, 'fax', 'Fax'),
(4, 'mail', 'Mail'),
(5, 'walk_in', 'Walk In'),
(6, 'help_desk', 'Help Desk'),
(7, 'branches', 'Branches'),
(8, 'media', 'Media');

-- --------------------------------------------------------

--
-- Table structure for table `ref_severity`
--

CREATE TABLE IF NOT EXISTS `ref_severity` (
`id_severity` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ref_severity`
--

INSERT INTO `ref_severity` (`id_severity`, `value`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `ref_user`
--

CREATE TABLE IF NOT EXISTS `ref_user` (
`id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ref_user`
--

INSERT INTO `ref_user` (`id_user`, `username`, `password`, `email`, `level`, `status`) VALUES
(2, 'admin', 'admin', 'shezars@gmail.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_complaint_source`
--
ALTER TABLE `ref_complaint_source`
 ADD PRIMARY KEY (`id_complaint_source`);

--
-- Indexes for table `ref_hpc_type`
--
ALTER TABLE `ref_hpc_type`
 ADD PRIMARY KEY (`id_hpc_type`);

--
-- Indexes for table `ref_incident_type`
--
ALTER TABLE `ref_incident_type`
 ADD PRIMARY KEY (`id_incident_type`);

--
-- Indexes for table `ref_product`
--
ALTER TABLE `ref_product`
 ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `ref_receiving_method`
--
ALTER TABLE `ref_receiving_method`
 ADD PRIMARY KEY (`id_receiving_method`);

--
-- Indexes for table `ref_severity`
--
ALTER TABLE `ref_severity`
 ADD PRIMARY KEY (`id_severity`);

--
-- Indexes for table `ref_user`
--
ALTER TABLE `ref_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_complaint_source`
--
ALTER TABLE `ref_complaint_source`
MODIFY `id_complaint_source` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_hpc_type`
--
ALTER TABLE `ref_hpc_type`
MODIFY `id_hpc_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_incident_type`
--
ALTER TABLE `ref_incident_type`
MODIFY `id_incident_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ref_product`
--
ALTER TABLE `ref_product`
MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ref_receiving_method`
--
ALTER TABLE `ref_receiving_method`
MODIFY `id_receiving_method` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ref_severity`
--
ALTER TABLE `ref_severity`
MODIFY `id_severity` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ref_user`
--
ALTER TABLE `ref_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
