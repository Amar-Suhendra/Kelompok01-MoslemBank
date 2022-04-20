-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 07:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moslembank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DonationID` varchar(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `MasjidID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonationID`, `Amount`, `Date`, `MasjidID`) VALUES
('DON001', 100000, '2022-04-01', 'MAS001'),
('DON002', 200000, '2022-04-02', 'MAS001'),
('DON003', 300000, '2022-04-03', 'MAS001'),
('DON004', 400000, '2022-04-04', 'MAS002'),
('DON005', 500000, '2022-04-05', 'MAS002'),
('DON006', 600000, '2022-04-06', 'MAS003'),
('DON007', 700000, '2022-04-07', 'MAS003'),
('DON008', 800000, '2022-04-08', 'MAS003'),
('DON009', 900000, '2022-04-09', 'MAS004'),
('DON010', 1000000, '2022-04-10', 'MAS004'),
('DON011', 1100000, '2022-04-11', 'MAS004'),
('DON012', 1200000, '2022-04-12', 'MAS005'),
('DON013', 1300000, '2022-04-13', 'MAS005'),
('DON014', 1400000, '2022-04-14', 'MAS005'),
('DON015', 1500000, '2022-04-15', 'MAS005'),
('DON016', 1600000, '2022-04-16', 'MAS006'),
('DON017', 1700000, '2022-04-17', 'MAS007'),
('DON018', 1800000, '2022-04-18', 'MAS007'),
('DON019', 1900000, '2022-04-19', 'MAS007'),
('DON020', 2000000, '2022-04-20', 'MAS008'),
('DON021', 2100000, '2022-04-21', 'MAS008'),
('DON022', 2200000, '2022-04-22', 'MAS009'),
('DON023', 2300000, '2022-04-23', 'MAS009'),
('DON024', 2400000, '2022-04-24', 'MAS009'),
('DON025', 2500000, '2022-04-25', 'MAS010');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ExpenseID` varchar(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `MasjidID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ExpenseID`, `Amount`, `Date`, `MasjidID`) VALUES
('EXP001', 10000, '2022-04-01', 'MAS001'),
('EXP002', 20000, '2022-04-02', 'MAS001'),
('EXP003', 30000, '2022-04-03', 'MAS001'),
('EXP004', 40000, '2022-04-04', 'MAS001'),
('EXP005', 50000, '2022-04-05', 'MAS001'),
('EXP006', 60000, '2022-04-06', 'MAS001'),
('EXP007', 70000, '2022-04-07', 'MAS002'),
('EXP008', 80000, '2022-04-08', 'MAS002'),
('EXP009', 90000, '2022-04-09', 'MAS002'),
('EXP010', 100000, '2022-04-10', 'MAS002'),
('EXP011', 110000, '2022-04-11', 'MAS003'),
('EXP012', 120000, '2022-04-12', 'MAS003'),
('EXP013', 130000, '2022-04-13', 'MAS003'),
('EXP014', 140000, '2022-04-14', 'MAS003'),
('EXP015', 150000, '2022-04-15', 'MAS004'),
('EXP016', 160000, '2022-04-16', 'MAS004'),
('EXP017', 170000, '2022-04-17', 'MAS004'),
('EXP018', 180000, '2022-04-18', 'MAS004'),
('EXP019', 190000, '2022-04-19', 'MAS005'),
('EXP020', 200000, '2022-04-20', 'MAS006'),
('EXP021', 210000, '2022-04-21', 'MAS006'),
('EXP022', 220000, '2022-04-22', 'MAS006'),
('EXP023', 230000, '2022-04-23', 'MAS006'),
('EXP024', 240000, '2022-04-24', 'MAS006'),
('EXP025', 250000, '2022-04-25', 'MAS006');

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `MasjidID` varchar(10) NOT NULL,
  `MasjidName` varchar(100) NOT NULL,
  `MasjidAddress` varchar(255) NOT NULL,
  `MasjidPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`MasjidID`, `MasjidName`, `MasjidAddress`, `MasjidPassword`) VALUES
('MAS001', 'Masjid Ar-Rahman', 'Jl. Rahman', 'Rahman123'),
('MAS002', 'Masjid Ar-Rahim', 'Jl. Rahim', 'Rahim123'),
('MAS003', 'Masjid Al-Malik', 'Jl. Malik', 'Malik123'),
('MAS004', 'Masjid Al-Quddus', 'Jl. Quddus', 'Quddus123'),
('MAS005', 'Masjid Al-Mukmin', 'Jl. Mukmin', 'Mukmin123'),
('MAS006', 'Masjid Al-Muhaimin', 'Jl. Muhaimin', 'Muhaimin123'),
('MAS007', 'Masjid Al-Aziz', 'Jl. Aziz', 'Aziz123'),
('MAS008', 'Masjid Al-Jabbar', 'Jl. Jabbar', 'Jabbar123'),
('MAS009', 'Masjid Al-Mutakabbir', 'Jl. Mutakabbir', 'Mutakabbir123'),
('MAS010', 'Masjid Al-Bari', 'Jl. Bari', 'Bari123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DonationID`),
  ADD KEY `MasjidID` (`MasjidID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`ExpenseID`),
  ADD KEY `MasjidID` (`MasjidID`);

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`MasjidID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`MasjidID`) REFERENCES `masjid` (`MasjidID`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`MasjidID`) REFERENCES `masjid` (`MasjidID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
