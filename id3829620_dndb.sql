-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2019 at 08:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3829620_dndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `atten`
--

CREATE TABLE `atten` (
  `date` date NOT NULL,
  `morning` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `evening` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atten`
--

INSERT INTO `atten` (`date`, `morning`, `evening`) VALUES
('2018-08-15', 'p', 'p'),

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `Name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `expension` int(100) NOT NULL,
  `debit` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `recive` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`Name`, `expension`, `debit`, `recive`, `date`) VALUES
('Manish', 495, '0', '103 from chiree', '2018-03-31'),

-- --------------------------------------------------------

--
-- Table structure for table `cyberwolf`
--

CREATE TABLE `cyberwolf` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `adm_no` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `no_sub` int(100) NOT NULL,
  `name_sub` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name_exam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(255) NOT NULL,
  `date` date NOT NULL,
  `track` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyberwolf`
--

INSERT INTO `cyberwolf` (`id`, `name`, `student_name`, `adm_no`, `pass`, `no_sub`, `name_sub`, `name_exam`, `money`, `date`, `track`) VALUES
(1, 'Ankit pandey', 'Raushan kr singh', '1234', '87654321', 2, 'Pr,Eng', 'Cat', 10, '2018-09-03', 'DONE'),
-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `yourname` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`yourname`, `items`, `price`, `date`, `id`) VALUES
('Viku ji', 'Matar', '30', '2018-03-08', 2),


-- --------------------------------------------------------

--
-- Table structure for table `mitem`
--

CREATE TABLE `mitem` (
  `uname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mitem`
--

INSERT INTO `mitem` (`uname`, `item`, `sponsor`, `price`, `date`) VALUES
('Ankit', '', '', 1000, '2018-03-16'),

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `class` varchar(100) NOT NULL,
  `dairy` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `Firstname`, `Email`, `Password`, `img`, `class`, `dairy`) VALUES
(1, 'Manish Roy', 'roymanish608@outlook.com', 'hellow', 'manish.jpg', 'ADMIN', ''),
(2, 'viku ji', 'vikashji58958@gmail.com', '8084480191', 'viku.jpg', 'USER', ''),

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(200) NOT NULL,
  `debit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `recive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`Name`, `exp`, `debit`, `recive`, `date`) VALUES
('Ankit', 1540, '5 to viku ji', 'viku=90 , chiree=103  , akhil=87', '2018-04-29'),
('chiree', 575, '103-ankit,103-Manish, 141-Srk,141-viku ji', 'viku=147', '2018-04-29'),
('Akhil', 340, '87 to ankit', '0', '2018-04-29'),
('viku ji', 1130, '147 to chiree + 71 to manish + 90 to ankit', ' ankit=5 , srk=50 , chiree=140', '2018-04-29'),
('SRK', 1295, '108 to manish, 50 to vikuji', 'chiree=141', '2018-04-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cyberwolf`
--
ALTER TABLE `cyberwolf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cyberwolf`
--
ALTER TABLE `cyberwolf`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
