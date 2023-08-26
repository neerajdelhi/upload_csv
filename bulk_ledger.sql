-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 02:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icloudems`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulk_ledger`
--

CREATE TABLE `bulk_ledger` (
  `Sr` varchar(10) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Academic Year` varchar(15) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Alloted Category` varchar(10) NOT NULL,
  `Voucher Type` varchar(20) NOT NULL,
  `Voucher No.` varchar(20) NOT NULL,
  `Roll No.` varchar(15) NOT NULL,
  `Admno/UniqueId` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Fee Category` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Program` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Batch` varchar(100) NOT NULL,
  `Receipt No.` varchar(20) NOT NULL,
  `Fee Head` varchar(50) NOT NULL,
  `Due Amount` varchar(100) NOT NULL,
  `Paid Amount` varchar(100) NOT NULL,
  `Concession Amount` varchar(100) NOT NULL,
  `Scholarship Amount` varchar(100) NOT NULL,
  `Reverse Concession Amount` varchar(100) NOT NULL,
  `Write Off Amount` varchar(100) NOT NULL,
  `Adjusted Amount` varchar(100) NOT NULL,
  `Refund Amount` varchar(100) NOT NULL,
  `Fund TranCfer Amount` varchar(100) NOT NULL,
  `Remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
