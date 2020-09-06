-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2020 at 03:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccpicker`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` varchar(20) NOT NULL,
  `timeline` datetime NOT NULL,
  `access_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `administrator_id` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `NID` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_admin`
--

CREATE TABLE `hospital_admin` (
  `name` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `employee_type` varchar(20) NOT NULL,
  `supervisor_id` varchar(20) NOT NULL,
  `timeline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `name` varchar(100) NOT NULL,
  `hospital_id` varchar(20) NOT NULL,
  `hospital_type` varchar(10) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `TLAID` varchar(20) NOT NULL,
  `MLAID` varchar(20) NOT NULL,
  `LLEID` varchar(20) NOT NULL,
  `vacc_id` varchar(20) NOT NULL,
  `timeline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `administrator_id` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `name` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `vaccine_id` varchar(20) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `schedule_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_age_boundary`
--

CREATE TABLE `vaccine_age_boundary` (
  `vaccine_id` varchar(20) NOT NULL,
  `age_boundary_start` int(11) NOT NULL,
  `age_boundary_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_category`
--

CREATE TABLE `vaccine_category` (
  `vaccine_id` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_dose`
--

CREATE TABLE `vaccine_dose` (
  `vaccine_id` varchar(20) NOT NULL,
  `dose` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_requirements`
--

CREATE TABLE `vaccine_requirements` (
  `vaccine_id` varchar(20) NOT NULL,
  `requirements` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_type`
--

CREATE TABLE `vaccine_type` (
  `vaccine_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vacc_requests`
--

CREATE TABLE `vacc_requests` (
  `serial_key` varchar(20) NOT NULL,
  `secret_key` varchar(20) NOT NULL,
  `vacc_id` varchar(20) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `LLEID` varchar(20) NOT NULL,
  `consumer_name` varchar(30) NOT NULL,
  `consumer_age` int(11) NOT NULL,
  `consumer_relation` varchar(20) NOT NULL,
  `validity` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `hospital_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `hospital_admin`
--
ALTER TABLE `hospital_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`hospital_id`),
  ADD KEY `MLAID` (`MLAID`),
  ADD KEY `LLEID` (`LLEID`),
  ADD KEY `vacc_id` (`vacc_id`),
  ADD KEY `TLAID` (`TLAID`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccine_id`),
  ADD UNIQUE KEY `name` (`name`,`sub_name`);

--
-- Indexes for table `vaccine_age_boundary`
--
ALTER TABLE `vaccine_age_boundary`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `vaccine_category`
--
ALTER TABLE `vaccine_category`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `vaccine_dose`
--
ALTER TABLE `vaccine_dose`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `vaccine_requirements`
--
ALTER TABLE `vaccine_requirements`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `vaccine_type`
--
ALTER TABLE `vaccine_type`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `vacc_requests`
--
ALTER TABLE `vacc_requests`
  ADD PRIMARY KEY (`serial_key`),
  ADD UNIQUE KEY `secret_key` (`secret_key`),
  ADD KEY `NID` (`NID`),
  ADD KEY `vacc_id` (`vacc_id`,`hospital_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital_admin`
--
ALTER TABLE `hospital_admin`
  ADD CONSTRAINT `hospital_admin_ibfk_1` FOREIGN KEY (`supervisor_id`) REFERENCES `administrator` (`id`);

--
-- Constraints for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD CONSTRAINT `hospital_info_ibfk_1` FOREIGN KEY (`vacc_id`) REFERENCES `vaccine` (`vaccine_id`),
  ADD CONSTRAINT `hospital_info_ibfk_2` FOREIGN KEY (`LLEID`) REFERENCES `administrator` (`id`),
  ADD CONSTRAINT `hospital_info_ibfk_3` FOREIGN KEY (`MLAID`) REFERENCES `administrator` (`id`),
  ADD CONSTRAINT `hospital_info_ibfk_4` FOREIGN KEY (`TLAID`) REFERENCES `administrator` (`id`);

--
-- Constraints for table `vaccine_age_boundary`
--
ALTER TABLE `vaccine_age_boundary`
  ADD CONSTRAINT `vaccine_age_boundary_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
-- Constraints for table `vaccine_category`
--
ALTER TABLE `vaccine_category`
  ADD CONSTRAINT `vaccine_category_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
-- Constraints for table `vaccine_dose`
--
ALTER TABLE `vaccine_dose`
  ADD CONSTRAINT `vaccine_dose_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
-- Constraints for table `vaccine_requirements`
--
ALTER TABLE `vaccine_requirements`
  ADD CONSTRAINT `vaccine_requirements_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
-- Constraints for table `vaccine_type`
--
ALTER TABLE `vaccine_type`
  ADD CONSTRAINT `vaccine_type_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
-- Constraints for table `vacc_requests`
--
ALTER TABLE `vacc_requests`
  ADD CONSTRAINT `vacc_requests_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `consumer` (`NID`),
  ADD CONSTRAINT `vacc_requests_ibfk_2` FOREIGN KEY (`vacc_id`) REFERENCES `vaccine` (`vaccine_id`),
  ADD CONSTRAINT `vacc_requests_ibfk_3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_info` (`hospital_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
