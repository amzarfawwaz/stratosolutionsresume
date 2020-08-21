-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2020 at 05:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stratodatabaseresume`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_record`
--

CREATE TABLE `general_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categorygeneral` varchar(30) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptiongeneral` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_record`
--

INSERT INTO `general_record` (`id`, `trn_date`, `categorygeneral`, `section`, `personincharge`, `yearsofexperiences`, `descriptiongeneral`, `file_path`, `submittedby`) VALUES
(36, '2020-08-13 10:00:18', 'GENERAL', 'Project Manager (Non-SAP)', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfilegeneral/.', 'amzar'),
(37, '2020-08-13 10:01:46', 'GENERAL', 'SOA Consultant', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfilegeneral/.', 'amzar'),
(38, '2020-08-13 10:29:28', 'GENERAL', 'Contact Center Quality Assurance', 'Wan Siti Norainul Busyra', '5-7years', 'huhu', '../uploadfilegeneral/.', 'amzar'),
(39, '2020-08-13 10:32:44', 'GENERAL', 'Contact Center Quality Assurance', 'Wan Siti Norainul Busyra', '5-7years', 'huhu', '../uploadfilegeneral/.', 'amzar'),
(40, '2020-08-13 10:38:39', 'GENERAL', 'SOA Consultant', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegeneral/.', 'amzar'),
(44, '2020-08-13 10:42:43', 'GENERAL', 'SOA Consultant', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegeneral/.', 'amzar'),
(45, '2020-08-13 10:44:49', 'GENERAL', 'Project Manager (Non-SAP)', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegeneral/2- resume LP2020.pdf', 'amzar'),
(46, '2020-08-13 10:46:30', 'GENERAL', 'Project Manager (Non-SAP)', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegeneral/2- resume LP2020.pdf', 'amzar'),
(47, '2020-08-13 10:46:47', 'GENERAL', 'Project Manager (Non-SAP)', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegeneral/2- resume LP2020.pdf', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `gis_record`
--

CREATE TABLE `gis_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categorygis` varchar(30) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptiongis` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gis_record`
--

INSERT INTO `gis_record` (`id`, `trn_date`, `categorygis`, `section`, `personincharge`, `yearsofexperiences`, `descriptiongis`, `file_path`, `submittedby`) VALUES
(196, '2020-08-13 09:26:53', 'GIS', 'GIS Map Management', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegis/2- resume LP2020.pdf', 'amzar'),
(197, '2020-08-13 09:27:51', 'GIS', 'GIS Map Management', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegis/2- resume LP2020.pdf', 'amzar'),
(198, '2020-08-13 09:28:04', 'GIS', 'GIS Map Management', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegis/2- resume LP2020.pdf', 'amzar'),
(199, '2020-08-13 10:08:02', 'GIS', 'GIS Map Management', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfilegis/26_199x0_1504x790_1200x630_used-car-guide.jpg', 'amzar'),
(200, '2020-08-13 11:30:39', 'GIS', 'GIS Map Management', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfilegis/2-Contoh resume LP2020.doc', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `it_record`
--

CREATE TABLE `it_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categoryit` varchar(10) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptionit` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_record`
--

INSERT INTO `it_record` (`id`, `trn_date`, `categoryit`, `section`, `personincharge`, `yearsofexperiences`, `descriptionit`, `file_path`, `submittedby`) VALUES
(1, '2020-08-04 04:51:42', 'IT', 'Data Analyst', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(2, '2020-08-04 09:40:21', 'IT', 'Data Analyst', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(3, '2020-08-04 11:24:02', 'IT', 'Network Engineer', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(4, '2020-08-04 11:24:08', 'IT', 'Network Engineer', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(5, '2020-08-04 11:24:18', 'IT', 'Data Analyst', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(6, '2020-08-13 09:36:01', 'IT', 'Creative Designer', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfileit/.', 'amzar'),
(7, '2020-08-13 09:36:41', 'IT', 'Creative Designer', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfileit/.', 'amzar'),
(8, '2020-08-13 09:37:32', 'IT', 'Creative Designer', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfileit/.', 'amzar'),
(9, '2020-08-21 05:12:41', 'IT', 'Creative Designer', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfileit/26_199x0_1504x790_1200x630_used-car-guide.jpg', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `mm_record`
--

CREATE TABLE `mm_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categorymm` varchar(30) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptionmm` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mm_record`
--

INSERT INTO `mm_record` (`id`, `trn_date`, `categorymm`, `section`, `personincharge`, `yearsofexperiences`, `descriptionmm`, `file_path`, `submittedby`) VALUES
(1, '2020-08-04 04:50:01', 'MM', 'IBM Maximo and Anywhere SME', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '', 'amzar'),
(2, '2020-08-13 09:48:38', 'MM', 'IBM Maximo and Anywhere SME', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfile/.', 'amzar'),
(3, '2020-08-21 05:13:03', 'MM', 'IBM Maximo and Anywhere SME', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfilemm/26_199x0_1504x790_1200x630_used-car-guide.jpg', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `programmer_record`
--

CREATE TABLE `programmer_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categoryprogrammer` varchar(30) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptionprogrammer` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programmer_record`
--

INSERT INTO `programmer_record` (`id`, `trn_date`, `categoryprogrammer`, `section`, `personincharge`, `yearsofexperiences`, `descriptionprogrammer`, `file_path`, `submittedby`) VALUES
(2, '2020-08-04 09:40:07', 'PROGRAMMER', 'Android Developer (Mobile) Analyst', 'Wan Siti Norainul Busyra', '5-7years', 'aa', '', 'amzar'),
(3, '2020-08-13 09:53:08', 'PROGRAMMER', 'JAVA Developer', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfile/.', 'amzar'),
(4, '2020-08-13 09:56:32', 'PROGRAMMER', 'JAVA Developer', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfileprogrammer/.', 'amzar'),
(5, '2020-08-21 05:13:23', 'PROGRAMMER', 'Android Developer (Mobile) Analyst', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfileprogrammer/26_199x0_1504x790_1200x630_used-car-guide.jpg', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `sap_record`
--

CREATE TABLE `sap_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `categorysap` varchar(10) NOT NULL,
  `section` varchar(40) NOT NULL,
  `personincharge` varchar(30) NOT NULL,
  `yearsofexperiences` varchar(20) NOT NULL,
  `descriptionsap` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `submittedby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sap_record`
--

INSERT INTO `sap_record` (`id`, `trn_date`, `categorysap`, `section`, `personincharge`, `yearsofexperiences`, `descriptionsap`, `file_path`, `submittedby`) VALUES
(18, '2020-08-13 06:28:16', 'SAP', 'Project Manager (SAP)', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '', 'amzar'),
(20, '2020-08-13 06:37:41', 'SAP', 'SAP FICO Consultant', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfile/2- resume LP2020.pdf', 'amzar'),
(21, '2020-08-13 06:38:15', 'SAP', 'SAP FICO Consultant', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfile/2- resume LP2020.pdf', 'amzar'),
(23, '2020-08-13 06:39:33', 'SAP', 'Project Manager (SAP)', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfile/2- resume LP2020.pdf', 'amzar'),
(24, '2020-08-13 06:53:05', 'SAP', 'Project Manager (SAP)', 'Wan Siti Norainul Busyra', '3-5years', 'aa', '../uploadfile/2-Contoh resume LP2020.doc', 'amzar'),
(25, '2020-08-13 11:30:20', 'SAP', 'Project Manager (SAP)', 'Wan Siti Norainul Busyra', '0-3years', 'aa', '../uploadfile/2- resume LP2020.pdf', 'amzar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(6, 'amzar', 'ahmadmasdo55@gmail.com', '67efad61993a464bca908e011f812c15', '2020-08-12 03:56:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_record`
--
ALTER TABLE `general_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gis_record`
--
ALTER TABLE `gis_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_record`
--
ALTER TABLE `it_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_record`
--
ALTER TABLE `mm_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmer_record`
--
ALTER TABLE `programmer_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sap_record`
--
ALTER TABLE `sap_record`
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
-- AUTO_INCREMENT for table `general_record`
--
ALTER TABLE `general_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `gis_record`
--
ALTER TABLE `gis_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `it_record`
--
ALTER TABLE `it_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mm_record`
--
ALTER TABLE `mm_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programmer_record`
--
ALTER TABLE `programmer_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sap_record`
--
ALTER TABLE `sap_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
