-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 11:54 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `kdapexport`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved4b`
--

CREATE TABLE `approved4b` (
  `email` varchar(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `location` varchar(255) NOT NULL,
  `farm` int(255) NOT NULL,
  `password` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved4b`
--

INSERT INTO `approved4b` (`email`, `name`, `location`, `farm`, `password`) VALUES
('aartidhikale75@gmail.com', 'dhikale aarti sanjay', 'vani', 3, 'pooja@789'),
('prasaddhikale75@gmail.com', 'dhikale prasad sanjay', 'vani', 3, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `approvedexport`
--

CREATE TABLE `approvedexport` (
  `firstName` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `farm` varchar(90) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(67) NOT NULL,
  `Detection` int(3) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `radiob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedexport`
--

INSERT INTO `approvedexport` (`firstName`, `lastname`, `farm`, `email`, `password`, `Detection`, `phonenumber`, `radiob`) VALUES
('aarti', 'dhikale', '3', 'aartidhikale75@gmail.com', '', 3, 2147483647, 'Female'),
('prasad', 'dhikale', '3', 'prasaddhikale75@gmail.com', '', 2, 2147483647, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `create4b`
--

CREATE TABLE `create4b` (
  `Name` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `farm` int(100) NOT NULL,
  `ferfarautara` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(1222) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exportunit`
--

CREATE TABLE `exportunit` (
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `dateofestblishment` date NOT NULL,
  `owner` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exportunit`
--

INSERT INTO `exportunit` (`name`, `location`, `dateofestblishment`, `owner`, `password`, `email`, `phonenumber`) VALUES
('sahyadri farm', 'mohadi', '0000-00-00', 'vilas shinde', '12345', 'sayadri@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `firstName` varchar(90) NOT NULL,
  `lastName` varchar(90) NOT NULL,
  `farm` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(67) NOT NULL,
  `cpassword` varchar(67) NOT NULL,
  `birthdate` date NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `radiob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`firstName`, `lastName`, `farm`, `email`, `password`, `cpassword`, `birthdate`, `phonenumber`, `radiob`) VALUES
('aarti', 'dhikale', 5, 'aartidhikale75@gmail.com', '12345', '12345', '2001-03-12', 9823319807, 'Female'),
('pooja', 'pooja', 4, 'poojadhi56@gamil.com', '123456', '123456', '2016-02-25', 9823319807, 'Female'),
('prasad', 'Dhikale', 2, 'prasaddhikale75@gmail.com', '12345', '12345', '2000-01-31', 9921580459, 'Female'),
('sunita', 'dhikale', 5, 'sunitadhikale@gmail.com', '12345', '12345', '1995-01-30', 9823319807, '');

-- --------------------------------------------------------

--
-- Table structure for table `krushiadhikari`
--

CREATE TABLE `krushiadhikari` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `dateofjoining` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krushiadhikari`
--

INSERT INTO `krushiadhikari` (`firstName`, `lastName`, `birthdate`, `dateofjoining`, `password`, `phonenumber`, `email`) VALUES
('sanjay', 'dhikale', '0000-00-00', '0000-00-00', '12345', 2147483647, 'sanju@gmai');

-- --------------------------------------------------------

--
-- Table structure for table `registerexport`
--

CREATE TABLE `registerexport` (
  `firstName` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `farm` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(67) NOT NULL,
  `Detection` int(3) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `radiob` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvedexport`
--
ALTER TABLE `approvedexport`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `create4b`
--
ALTER TABLE `create4b`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registerexport`
--
ALTER TABLE `registerexport`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
