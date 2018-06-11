-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 08:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `adminID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `adminID`, `Password`) VALUES
(001, 'admin123', 'admin456');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `checkIn` varchar(10) NOT NULL,
  `endOfContract` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `idCard` varchar(13) NOT NULL,
  `adults` varchar(5) NOT NULL,
  `children` varchar(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`checkIn`, `endOfContract`, `name`, `idCard`, `adults`, `children`, `email`, `phone`) VALUES
('12-06-61', '2 yea', 'eqweqweqw', '02', '2', '1', 'test001@gmail.com', '888888888'),
('13-07-61', '2 yea', 'Toon', '110012124578', '2', '4', 'dddddddd@ff', '0916358795'),
('12-06-61', '3 yea', 'Patrapee Seebutta', '1234567899874', '3', '2', 'toonklub32@hotmail.com', '916985394'),
('15*16*54', '1 yea', 'dd', '13', '1', '1', 'test001@gmail.com', '133'),
('15*16*54', '3 yea', 'Patrapee Seebutta', '25', '2', '2', 'gas@da', '916985394'),
('12-06-61', '2 yea', 'eqweqweqw', '5555', '3', '2', 'toonklub32@hotmail.com', '888888888'),
('12-06-61', '2 yea', 'e2', 'fewfw', '2', '1', 'dddddddd@ff', '28148');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` varchar(6) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `type`) VALUES
('01', 'Single Room'),
('02', 'Double Room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `adminID` (`adminID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idCard`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
