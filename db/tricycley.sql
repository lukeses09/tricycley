-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2017 at 11:31 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tricycley`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` varchar(30) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `start`, `end`, `status`, `date_created`, `date_updated`) VALUES
('B17-0000001', 1, 502, 1, '2017-06-13 23:16:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `address`, `contact`, `birthdate`, `gender`, `status`, `date_created`, `date_updated`) VALUES
('M17-0000001', 'Eduardo Kannoy', '127 F. Manao St. San Juan City', '09063402308', '1978-06-09', 'm', 1, '2017-06-13 23:11:22', NULL),
('M17-0000002', 'Boytom Annie Sancha', '88 Sta Lucia, San Juan Metro Manila', '09063402308', '1979-02-16', 'f', 1, '2017-06-13 23:11:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `toda`
--

CREATE TABLE `toda` (
  `id` varchar(30) NOT NULL,
  `toda_no` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toda`
--

INSERT INTO `toda` (`id`, `toda_no`, `name`, `color`, `description`, `status`, `date_created`, `date_updated`) VALUES
('TODA17-0000001', '1', 'F ROXAS', 'PURPLE', NULL, 1, '2017-06-13 23:28:03', NULL),
('TODA17-0000002', '2', 'F ROXAS', 'PURPLE', NULL, 1, '2017-06-13 23:29:18', NULL),
('TODA17-0000003', '1', 'STA LUCIA', 'YELLOW', NULL, 1, '2017-06-13 23:29:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tricycles`
--

CREATE TABLE `tricycles` (
  `id` varchar(30) NOT NULL,
  `plate_no` varchar(30) NOT NULL,
  `make_no` varchar(100) NOT NULL,
  `motor_no` varchar(100) NOT NULL,
  `chassis_no` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycles`
--

INSERT INTO `tricycles` (`id`, `plate_no`, `make_no`, `motor_no`, `chassis_no`, `description`, `status`, `date_created`, `date_updated`) VALUES
('TR17-0000001', 'NOP-899', 'MKESMPLE-899', 'MTRSMPLE-899', 'CHSSSMPLE-899', 'First Sample Data', 1, '2017-06-13 23:31:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `user_type`, `status`, `date_created`, `date_updated`) VALUES
('UA17-0000001', 'moses', '594aa0a9de0c75cd4d4037b6b65c683e', 'admin', 1, '2017-06-13 23:07:11', NULL),
('UA17-0000002', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 1, '2017-06-13 23:07:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `toda`
--
ALTER TABLE `toda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toda_no` (`toda_no`);

--
-- Indexes for table `tricycles`
--
ALTER TABLE `tricycles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plate_no` (`plate_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `password` (`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
