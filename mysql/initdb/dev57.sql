-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:38 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev57`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertb`
--

CREATE TABLE `registertb` (
  `idregis` int(3) NOT NULL COMMENT 'ลำดับ',
  `gname` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `passwd` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `fname` varchar(20) NOT NULL COMMENT 'ชื่อสกุล',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่ลงทะเบียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registertb`
--

INSERT INTO `registertb` (`idregis`, `gname`, `passwd`, `fname`, `date`) VALUES
(1, 'admin', '1234', 'administrator', '2019-03-10 07:25:46'),
(2, 'thanin', '1234', 'ธานินทร์ กองลุน', '2019-03-10 07:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `studentb`
--

CREATE TABLE `studentb` (
  `idstd` int(3) NOT NULL COMMENT 'ลำดับ',
  `name` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(20) NOT NULL COMMENT 'นามสกุล',
  `email` varchar(30) NOT NULL COMMENT 'จดหมายอิเล็กทรอนิกส์',
  `number` int(20) UNSIGNED NOT NULL COMMENT 'โทรศัพท์',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่ลงทะเบียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentb`
--

INSERT INTO `studentb` (`idstd`, `name`, `lastname`, `email`, `number`, `date`) VALUES
(1, 'สรพงษ์', 'ชาตรี', 'user1@hotmail.com', 26286601, '2019-03-10 07:31:19'),
(2, 'จารุณี', 'สุขสวัสดิ์', 'user2@hotmail.com', 26286602, '2019-03-10 07:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertb`
--
ALTER TABLE `registertb`
  ADD PRIMARY KEY (`idregis`);

--
-- Indexes for table `studentb`
--
ALTER TABLE `studentb`
  ADD PRIMARY KEY (`idstd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registertb`
--
ALTER TABLE `registertb`
  MODIFY `idregis` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับ', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentb`
--
ALTER TABLE `studentb`
  MODIFY `idstd` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับ', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
