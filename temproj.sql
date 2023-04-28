-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 08:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_amt`
--


CREATE TABLE `billing_amt` (
  `bill_date` varchar(50) NOT NULL,
  `bill_id` varchar(50) NOT NULL,
  `total_amount` int(50) NOT NULL,
  `discount` int(50) NOT NULL,
  `bill_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing_amt`
--

INSERT INTO `billing_amt` (`bill_date`, `bill_id`, `total_amount`, `discount`, `bill_status`) VALUES
('05nov', '001', 5000, 200, 1),
('20nov', '011', 2000, 100, 1),
('10dec', '021', 1000, 50, 1),
('11july', '1001', 991, 50, 1),
('22nov', '222', 500, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `vin` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `car_year` int(100) NOT NULL,
  `rental_location_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`vin`, `company`, `car_year`, `rental_location_id`) VALUES
('MIJ926', 'FORD', 2014, '15678'),
('MSUZ221', 'MERCEDES', 2020, '15766'),
('MZU789', 'HYUNDAI', 2018, '15786'),
('ZA114', 'BMW', 2022, '15789'),
('ZMU455', 'HONDA', 2016, '15999');

-- --------------------------------------------------------

--
-- Table structure for table `car_rent`
--

CREATE TABLE `car_rent` (
  `weekly` int(100) NOT NULL,
  `daily` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`weekly`, `daily`) VALUES
(2500, 1000),
(3500, 1500),
(4500, 2000),
(5500, 2500),
(6500, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `address`, `license_no`, `username`, `password`) VALUES
('john', 'dales ave', '000111', 'john.sm', 123456),
('smith', 'logan ave', '111222', 'smith.sm', 456789),
('mama', 'sip ave', '222333', 'mama.ma', 789012),
('leroy', 'broadway', '333444', 'leroy.le', 7890123),
('mark', 'newark', '444555', 'mark.me', 1598753);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_no` varchar(100) NOT NULL,
  `model_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_no`, `model_name`) VALUES
('A2250', 'AWD'),
('C555', 'FWD'),
('H888', 'FWD'),
('U7893', 'AWD'),
('Z555', '4*4');

-- --------------------------------------------------------

--
-- Table structure for table `rental_location`
--

CREATE TABLE `rental_location` (
  `rental_location_id` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `street_name` varchar(256) NOT NULL,
  `zipcode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental_location`
--

INSERT INTO `rental_location` (`rental_location_id`, `phone`, `state`, `street_name`, `zipcode`) VALUES
('15678', 1234567890, 'MJ', 'dales ave', 7306),
('15766', 1234009078, 'california', '10th ave', 7321),
('15786', 1234560090, 'illinios', '5th ave', 7456),
('15789', 1234567090, 'NY', '2nd ave', 7123),
('15999', 1456789023, 'ohio', '99th ave', 7565);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` varchar(100) NOT NULL,
  `from_date_time` varchar(100) NOT NULL,
  `return_time` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `from_date_time`, `return_time`, `license_no`) VALUES
('000000', '12:28 20nov', '20:02 18dec', '000111'),
('123456', '12:00 05nov', '20:48 10nov', '111222'),
('345678', '12:18 15nov', '20:17 28nov', '222333'),
('456789', '12:30 05jan', '20:58 15jan', '333444'),
('789012', '12:15 05dec', '20:22 20dec', '444555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_amt`
--
ALTER TABLE `billing_amt`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`vin`),
  ADD KEY `rental_location_id` (`rental_location_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`license_no`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_no`);

--
-- Indexes for table `rental_location`
--
ALTER TABLE `rental_location`
  ADD PRIMARY KEY (`rental_location_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `license_no` (`license_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`rental_location_id`) REFERENCES `rental_location` (`rental_location_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`license_no`) REFERENCES `customer` (`license_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
