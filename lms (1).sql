-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 04:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_info`
--

CREATE TABLE `leave_info` (
  `leave_id` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `leave_dur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_info`
--

INSERT INTO `leave_info` (`leave_id`, `userid`, `start_date`, `end_date`, `status`, `leave_type`, `leave_dur`) VALUES
('5640', '1450', '2019-12-17', '2019-12-18', 'Approved', 'Annual Leave', 2),
('7494', '1450', '2019-12-18', '2019-12-18', 'Pending', 'Annual Leave', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userid` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_dept` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pos` varchar(255) NOT NULL,
  `user_joined` date NOT NULL,
  `sick_taken` int(11) NOT NULL,
  `sick_bal` int(11) NOT NULL,
  `annual_bal` int(11) NOT NULL,
  `annual_taken` int(11) NOT NULL,
  `unpaid_bal` int(11) NOT NULL,
  `unpaid_taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userid`, `user_name`, `user_dept`, `user_email`, `user_pos`, `user_joined`, `sick_taken`, `sick_bal`, `annual_bal`, `annual_taken`, `unpaid_bal`, `unpaid_taken`) VALUES
('1', 'Ahmad', 'IT', 'test@gmail.com', 'Admin', '2019-11-21', 0, 0, 0, 0, 0, 0),
('1450', 'Zuraiha', 'IT', 'zuraiha@email.com', 'Staff', '2019-11-30', 2, 9, 3, 11, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` varchar(255) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_login`, `user_pass`) VALUES
('1', 'admin', 'admin'),
('1450', 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_info`
--
ALTER TABLE `leave_info`
  ADD UNIQUE KEY `leave_id` (`leave_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD UNIQUE KEY `user_id` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
