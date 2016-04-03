-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 08:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `aadhar_no` varchar(14) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`aadhar_no`, `name`, `dob`) VALUES
('1', 'pranay', '0000-00-00'),
('2', 'ram', '0000-00-00'),
('4', 'vidwan', '0000-00-00'),
('6834 9429 8050', 'Kilaparthi Rohith Ravi Teja\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bank_history`
--

CREATE TABLE `bank_history` (
  `loan_id` int(11) NOT NULL,
  `paid_emi` int(11) NOT NULL,
  `missed_emi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_history`
--

INSERT INTO `bank_history` (`loan_id`, `paid_emi`, `missed_emi`) VALUES
(1, 10, 2),
(2, 10, 2),
(3, 12, 0),
(4, 9, 3),
(5, 11, 1),
(6, 12, 4),
(7, 7, 5),
(8, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `collateral`
--

CREATE TABLE `collateral` (
  `col_id` varchar(10) NOT NULL,
  `area` int(11) NOT NULL,
  `locality` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `asset_value` int(11) NOT NULL,
  `req_amount` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(254) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `credit` decimal(11,3) NOT NULL,
  `bank_cust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `first_name`, `last_name`, `mob`, `pass`, `credit`, `bank_cust`) VALUES
('kkh@gmail.com', 'krishnakanth', 'heda', '9440955000', 'vidwan', '3.000', 1),
('pranay@gmail.com', 'pranay', 'baheti', '9550005488', 'pass', '4.167', 1),
('ram@gmail.com', 'ram', 'chetan', '9550005499', 'pass', '4.000', 8),
('rohith@gmail.com', 'rohith', 'microsoft', '7550005488', 'ilovemicrosoft', '4.028', 3),
('veer.anush@gmail.com', 'anusha', 'veer', '9573411152', '789', '0.000', 1),
('vidwan@gmail.com', 'vidwan', 'raj', '9550005488', 'pass', '5.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `email` varchar(254) NOT NULL,
  `aadhar` varchar(100) DEFAULT NULL,
  `voter` varchar(100) DEFAULT NULL,
  `income` varchar(100) DEFAULT NULL,
  `aadhar_no` varchar(14) DEFAULT NULL,
  `voter_no` varchar(10) DEFAULT NULL,
  `income_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`email`, `aadhar`, `voter`, `income`, `aadhar_no`, `voter_no`, `income_no`) VALUES
('pranay@gmail.com', 'uploads/pranay@gmail.com/aadhar.png', NULL, NULL, '6834 9429 8050', NULL, NULL),
('ram@gmail.com', NULL, NULL, NULL, '2', NULL, '2'),
('rohith@gmail.com', NULL, NULL, NULL, '6834 9429 8050', NULL, NULL),
('vidwan@gmail.com', 'uploads/vidwan@gmail.com/aadhar.png', NULL, 'uploads/vidwan@gmail.com/income.png', '6834 9429 8050', NULL, '4');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_no` int(11) NOT NULL,
  `income_value` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `aadhar_id` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `email` varchar(254) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `collat_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`email`, `loan_id`, `loan_amount`, `bank_id`, `collat_id`) VALUES
('pranay@gmail.com', 1, 1000000, 1, '111'),
('pranay@gmail.com', 2, 100000, 1, '112'),
('vidwan@gmail.com', 3, 400000, 2, '113'),
('rohith@gmail.com', 4, 700000, 3, '7'),
('rohith@gmail.com', 5, 700000, 3, '707'),
('rohith@gmail.com', 6, 70000, 4, '120'),
('ram@gmail.com', 7, 300000, 1, '11'),
('ram@gmail.com', 8, 100000, 1, '12');

-- --------------------------------------------------------

--
-- Table structure for table `market_value`
--

CREATE TABLE `market_value` (
  `city` varchar(15) NOT NULL,
  `area` varchar(15) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar`
--
ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`aadhar_no`);

--
-- Indexes for table `bank_history`
--
ALTER TABLE `bank_history`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `collateral`
--
ALTER TABLE `collateral`
  ADD PRIMARY KEY (`col_id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_no`),
  ADD KEY `aadhar_id` (`aadhar_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_history`
--
ALTER TABLE `bank_history`
  ADD CONSTRAINT `bank_history_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loan` (`loan_id`);

--
-- Constraints for table `collateral`
--
ALTER TABLE `collateral`
  ADD CONSTRAINT `collateral_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loan` (`loan_id`);

--
-- Constraints for table `docs`
--
ALTER TABLE `docs`
  ADD CONSTRAINT `docs_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`aadhar_id`) REFERENCES `aadhar` (`aadhar_no`);

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
