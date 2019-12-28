-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 09:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(9) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `passcode` varchar(15) DEFAULT NULL,
  `Rpasscode` varchar(15) DEFAULT NULL,
  `mobile_number` varchar(11) DEFAULT NULL,
  `Bmobile_number` varchar(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `uiu_batch` varchar(11) DEFAULT NULL,
  `cgpa` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `full_name`, `username`, `passcode`, `Rpasscode`, `mobile_number`, `Bmobile_number`, `date_of_birth`, `email`, `uiu_batch`, `cgpa`) VALUES
('011133054', 'Sharif Tamjidur Rahman', 'Sharif', '12345', '12345', '01919593099', '01777754060', '1995-10-17', 'sharifrahman2522@gmail.com', '2013 - 2019', 2.50);

-- --------------------------------------------------------

--
-- Table structure for table `programming_contest`
--

CREATE TABLE `programming_contest` (
  `ID` varchar(9) NOT NULL,
  `Codeforce` float(10,2) DEFAULT NULL,
  `Codechef` float(10,2) DEFAULT NULL,
  `UVA` float(10,2) DEFAULT NULL,
  `Hacker_Rank` float(10,2) DEFAULT NULL,
  `URI_Online_Judge` float(10,2) DEFAULT NULL,
  `A2_Online_Judge` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_contest`
--

INSERT INTO `programming_contest` (`ID`, `Codeforce`, `Codechef`, `UVA`, `Hacker_Rank`, `URI_Online_Judge`, `A2_Online_Judge`) VALUES
('011133054', 1000.00, 300.00, 500.00, 1500.00, 2000.00, 1800.00);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` varchar(9) NOT NULL,
  `project` varchar(50) DEFAULT NULL,
  `project_contest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `project`, `project_contest`) VALUES
('011133054', 'Graph Simulator', 'Hospital Menegement System');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `ID` varchar(9) NOT NULL,
  `Thesis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`ID`, `Thesis`) VALUES
('011133054', 'Large Data Traffic Flow Control');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programming_contest`
--
ALTER TABLE `programming_contest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `project` (`ID`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `programming_contest` (`ID`),
  ADD CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `thesis` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
