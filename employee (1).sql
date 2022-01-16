-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2022 at 07:33 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(25) NOT NULL,
  `department` varchar(30) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `joining_date` date NOT NULL,
  `salary` int(7) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`employee_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `department`, `Designation`, `joining_date`, `salary`, `mobile_no`, `email_id`) VALUES
(1, 'Vimal', 'A', 'engineer', '2020-01-15', 20000, '856985472', 'vimal@gmail.com'),
(2, 'raja', 'B', 'engineer ', '2020-01-12', 20000, '895741233', 'ravi@gmail.com'),
(9, 'Zamzam', 'CSE', 'Engineer', '2020-02-20', 454857, '9098143578', 'zamzam@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
