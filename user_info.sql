-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 08:01 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `userid` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
