-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2021 at 06:22 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16599587_mentcare_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_staff`
--

CREATE TABLE `clinical_staff` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_staff`
--

INSERT INTO `clinical_staff` (`id`, `email`, `password`) VALUES
(1, 'clinical@gmail.com', 'clinical@123');

-- --------------------------------------------------------

--
-- Table structure for table `concultation`
--

CREATE TABLE `concultation` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(225) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_gender` varchar(225) NOT NULL,
  `p_problem` text NOT NULL,
  `d_id` int(11) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concultation`
--

INSERT INTO `concultation` (`c_id`, `p_id`, `p_name`, `p_age`, `p_gender`, `p_problem`, `d_id`, `date`) VALUES
(3, 1, 'test', 40, 'male', 'backbone', 1, '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(225) NOT NULL,
  `d_email` varchar(225) NOT NULL,
  `d-phno` int(11) NOT NULL,
  `d_address` text NOT NULL,
  `specialist` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d-phno`, `d_address`, `specialist`) VALUES
(1, 'testdoctor', 'test@gmail.com', 456987, 'champapet,durga bhavani nagar road no.5,plot no.146', 'backbone'),
(2, 'test1', 'test@gmail.com', 478965, 'test1hs skljlks klsk;', 'heart specialist'),
(3, 'doc1', 'doc@gmail.com', 45698741, 'dgkjskla', 'Cardiologists');

-- --------------------------------------------------------

--
-- Table structure for table `health_services_tbl`
--

CREATE TABLE `health_services_tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_services_tbl`
--

INSERT INTO `health_services_tbl` (`id`, `email`, `password`) VALUES
(1, 'health@gmail.com', 'health@123');

-- --------------------------------------------------------

--
-- Table structure for table `record_manager_tbl`
--

CREATE TABLE `record_manager_tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_manager_tbl`
--

INSERT INTO `record_manager_tbl` (`id`, `email`, `password`) VALUES
(1, 'records@gmail.com', 'records@123');

-- --------------------------------------------------------

--
-- Table structure for table `register_patients`
--

CREATE TABLE `register_patients` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(225) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_gender` varchar(225) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_phone` int(11) NOT NULL,
  `p_address` text NOT NULL,
  `p_problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_patients`
--

INSERT INTO `register_patients` (`pid`, `p_name`, `p_age`, `p_gender`, `p_email`, `p_phone`, `p_address`, `p_problem`) VALUES
(1, 'test', 40, 'male', 'test@gmail.com', 456326, 'test addresss', 'backbone'),
(2, 'test1', 23, 'female', 'test@gmail.com', 456982, 'testqd jksks hjhsk ', 'heart problem'),
(3, 'test2', 25, 'male', 'teset3@gmail.com', 2147483647, 'dgkjkjdjh', 'djd');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_tbl`
--

CREATE TABLE `treatment_tbl` (
  `t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `d_email` varchar(225) NOT NULL,
  `p_email` varchar(225) NOT NULL,
  `treatment_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_staff`
--
ALTER TABLE `clinical_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concultation`
--
ALTER TABLE `concultation`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `health_services_tbl`
--
ALTER TABLE `health_services_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record_manager_tbl`
--
ALTER TABLE `record_manager_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_patients`
--
ALTER TABLE `register_patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `treatment_tbl`
--
ALTER TABLE `treatment_tbl`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinical_staff`
--
ALTER TABLE `clinical_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `concultation`
--
ALTER TABLE `concultation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `health_services_tbl`
--
ALTER TABLE `health_services_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `record_manager_tbl`
--
ALTER TABLE `record_manager_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_patients`
--
ALTER TABLE `register_patients`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment_tbl`
--
ALTER TABLE `treatment_tbl`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
