-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2023 at 04:14 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_portal`
--

DROP TABLE IF EXISTS `employee_portal`;
CREATE TABLE IF NOT EXISTS `employee_portal` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hoursworked` int NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee_portal`
--

INSERT INTO `employee_portal` (`fname`, `lname`, `age`, `department`, `hoursworked`, `email`) VALUES
('Muskan', 'Dhingra', 20, 'Management', 20, 'muskanhub01@gmail.com'),
('Kishore', 'Mahajan', 25, 'Management', 15, 'kishore01@gmail.com'),
('Rajan', 'Malhotra', 20, 'IT', 29, 'rajm546@gmail.com'),
('Prakash', 'Gada', 25, 'HR', 34, 'gada676@gmail.com'),
('Maneesha', 'Sinha', 24, 'HR', 23, 'maneesha@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
