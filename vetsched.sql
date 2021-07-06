-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 11:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetsched`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `uname`, `email`, `password`) VALUES
(1, 'Kane', 'alroyalfonso@gmail.com', 'tercero'),
(4, 'test', 'test@sjdhsdj.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `doc_login`
--

CREATE TABLE `doc_login` (
  `id` int(11) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_login`
--

INSERT INTO `doc_login` (`id`, `uname`, `email`, `password`) VALUES
(1, 'Kane', 'kanetercero@gmail.com', 'pugnonymous'),
(2, 'Fallon', 'falloncarrington@gmail.com', 'dynasty');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(50) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Mname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `Pname` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Purpose` varchar(45) NOT NULL,
  `Predate` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `Fname`, `Mname`, `Lname`, `Email`, `ContactNo`, `Pname`, `Type`, `Age`, `Gender`, `Purpose`, `Predate`, `Status`) VALUES
(1, 'Alroy', 'Tuquib', 'Alfonso', 'alroyalfonso@gmail.com', '09669636190', 'Hermione', 'Dog', 2, 'Female', 'Check Up', '2020-05-31', 'Approved'),
(2, 'Fallon', 'Colby', 'Carrington', 'falloncarrington@gmail.com', '09354419991', 'Bo', 'Dog', 3, 'Male', 'Check Up', '2020-05-31', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_login`
--
ALTER TABLE `doc_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doc_login`
--
ALTER TABLE `doc_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
