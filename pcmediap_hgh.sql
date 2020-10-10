-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2020 at 05:30 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcmediap_hgh`
--

-- --------------------------------------------------------

--
-- Table structure for table `builder_tbl`
--

CREATE TABLE `builder_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `builder_tbl`
--

INSERT INTO `builder_tbl` (`id`, `name`, `mobile`, `email`, `address`, `created`, `modified`) VALUES
(1, 'Rakesh dasari', '9701586761', 'rakesh.dasari6761@gmail.com', '8765 Stockard Dr, #501 Frisco, TX 75034', '2020-10-10', '2020-10-10 07:08:28'),
(2, 'praveen', '9490082242', 'praveen@gmail.com', 'Somaji guda circle', '2020-10-10', '2020-10-10 06:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `investor_req_tbl`
--

CREATE TABLE `investor_req_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `team_size` int(11) NOT NULL DEFAULT '0',
  `contact_persion` varchar(80) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `location_pref` varchar(50) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `land_size` varchar(10) NOT NULL,
  `budget_type` varchar(30) NOT NULL,
  `land_mark` varchar(50) NOT NULL,
  `alert_frequently` varchar(50) NOT NULL,
  `u_alert` varchar(80) NOT NULL,
  `type` varchar(20) NOT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor_req_tbl`
--

INSERT INTO `investor_req_tbl` (`id`, `name`, `team_size`, `contact_persion`, `mobile`, `email`, `property_type`, `location_pref`, `pin_code`, `land_size`, `budget_type`, `land_mark`, `alert_frequently`, `u_alert`, `type`, `latitude`, `longitude`, `created`, `modified`) VALUES
(1, 'rakesh', 0, 'mohith', '9701586761', 'rakesh.dasari6761@gmail.com', 'Residential,Commercial', 'Hyderabad', '505325', '451', 'Status 3', 'Banjarahills', 'Daily,Monthly', 'name u alert', 'individual', NULL, NULL, '2020-10-07', '2020-10-09 08:14:46'),
(2, 'Group name', 54, 'rakesh. dasari', '9701586761', 'rakehs.dasari6761@gmail.com', 'Residential,Commercial', 'hyderabad', '505325', '471', 'Status4', 'Ameerpet', 'Daily,Weekly,Monthly', 'name alert', 'group', NULL, NULL, '2020-10-07', '2020-10-07 15:30:04'),
(3, 'group2', 47, 'rakesh.dasari', '9701586761', 'rakesh.dasari6761@gmail.com', 'Residential,Commercial', '254', '505325', '56', 'Status2', 'sr naagar', 'Daily,Weekly,Monthly', 'alertt', 'group', NULL, NULL, '2020-10-07', '2020-10-07 15:32:44'),
(4, 'Ganesh Dasari', 0, NULL, '9490082242', 'ganesh.dasari6761@gmail.com', 'Residential,Commercial', 'Hyderabad', '505325', '320', 'Status 2', 'Banjarahills', 'Daily,Weekly,Monthly', 'alert', 'individual', NULL, NULL, '2020-10-09', '2020-10-09 14:21:42'),
(5, 'Ganesh Group', 45, 'Ganesh', '9912586951', 'ganesh.dasasri@gmail.com', 'Residential,Commercial', 'Hyderabad', '505325', 'India', 'Status2', 'Banjarahills', 'Daily,Weekly,Monthly', 'Alert', 'group', NULL, NULL, '2020-10-09', '2020-10-09 14:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `investor_tbl`
--

CREATE TABLE `investor_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor_tbl`
--

INSERT INTO `investor_tbl` (`id`, `name`, `mobile`, `email`, `address`, `created`, `modified`) VALUES
(1, 'rakesh dasari', '9701586761', 'rakesh.dasari6761@gmail.com', 'Athmanagar', '2020-10-10', '2020-10-10 07:31:01'),
(2, 'pavan', '9701586761', 'pavandasari@gmail.com', '8765 Stockard Dr, #501 Frisco, TX 75034', '2020-10-10', '2020-10-10 06:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `nri_tbl`
--

CREATE TABLE `nri_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nri_tbl`
--

INSERT INTO `nri_tbl` (`id`, `name`, `mobile`, `email`, `address`, `created`, `modified`) VALUES
(1, 'rakesh dasari', '9701586761', 'rakesh.dasari6761@gmail.com', 'Somaji guda circle', '2020-10-10', '2020-10-10 07:43:30'),
(2, 'laxmi.dasaris', '9701586761', 'laxmi.dasari@gmail.com', 'Athmanagars', '2020-10-10', '2020-10-10 06:33:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `builder_tbl`
--
ALTER TABLE `builder_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_req_tbl`
--
ALTER TABLE `investor_req_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_tbl`
--
ALTER TABLE `investor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nri_tbl`
--
ALTER TABLE `nri_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `builder_tbl`
--
ALTER TABLE `builder_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investor_req_tbl`
--
ALTER TABLE `investor_req_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investor_tbl`
--
ALTER TABLE `investor_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nri_tbl`
--
ALTER TABLE `nri_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
