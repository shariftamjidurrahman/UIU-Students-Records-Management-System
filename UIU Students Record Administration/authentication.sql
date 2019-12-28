-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 08:40 AM
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
('011131140', 'tttttttt', 'demo', '1234', '1234', '123654', '236552', '1992-12-08', 'g@g', '131', 3.32),
('011133054', 'Sharif Tamjidur Rahman', 'sharif', '1234', '1234', '123654', '123654', '0000-00-00', 'a@q', '133', 5.00);

-- --------------------------------------------------------

--
-- Table structure for table `programming_contest_field`
--

CREATE TABLE `programming_contest_field` (
  `ID` varchar(9) NOT NULL,
  `ICPC` float(10,2) DEFAULT NULL,
  `ICT` float(10,2) DEFAULT NULL,
  `NCPC` float(10,2) DEFAULT NULL,
  `NJPC` float(10,2) DEFAULT NULL,
  `programming_contest_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_contest_field`
--

INSERT INTO `programming_contest_field` (`ID`, `ICPC`, `ICT`, `NCPC`, `NJPC`, `programming_contest_name`) VALUES
('011131140', NULL, NULL, NULL, NULL, NULL),
('011133054', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programming_contest_virtual`
--

CREATE TABLE `programming_contest_virtual` (
  `ID` varchar(9) NOT NULL,
  `Codeforce` float(10,2) DEFAULT NULL,
  `Codechef` float(10,2) DEFAULT NULL,
  `UVA` float(10,2) DEFAULT NULL,
  `Hacker_Rank` float(10,2) DEFAULT NULL,
  `URI_Online_Judge` float(10,2) DEFAULT NULL,
  `A2_Online_Judge` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_contest_virtual`
--

INSERT INTO `programming_contest_virtual` (`ID`, `Codeforce`, `Codechef`, `UVA`, `Hacker_Rank`, `URI_Online_Judge`, `A2_Online_Judge`) VALUES
('011131140', NULL, NULL, NULL, NULL, NULL, NULL),
('011133054', 1000.00, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` varchar(9) NOT NULL,
  `project type` varchar(50) DEFAULT NULL,
  `project` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `project type`, `project`) VALUES
('011131140', NULL, NULL),
('011133054', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectcontest`
--

CREATE TABLE `projectcontest` (
  `ID` varchar(9) NOT NULL,
  `project type` varchar(50) DEFAULT NULL,
  `project_contest` varchar(50) DEFAULT NULL,
  `project_contest_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectcontest`
--

INSERT INTO `projectcontest` (`ID`, `project type`, `project_contest`, `project_contest_name`) VALUES
('011131140', NULL, NULL, NULL),
('011133054', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `researchwork`
--

CREATE TABLE `researchwork` (
  `ID` varchar(9) NOT NULL,
  `research_type` varchar(50) DEFAULT NULL,
  `research_topic_name` varchar(100) DEFAULT NULL,
  `research_work_description` varchar(100) DEFAULT NULL,
  `Journal` varchar(100) DEFAULT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `Megazine` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researchwork`
--

INSERT INTO `researchwork` (`ID`, `research_type`, `research_topic_name`, `research_work_description`, `Journal`, `Publication`, `Megazine`) VALUES
('011131140', NULL, NULL, NULL, NULL, NULL, NULL),
('011133054', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `ID` varchar(9) NOT NULL,
  `Thesis_type` varchar(50) DEFAULT NULL,
  `Thesis_name` varchar(100) DEFAULT NULL,
  `Thesis_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`ID`, `Thesis_type`, `Thesis_name`, `Thesis_description`) VALUES
('011131140', NULL, NULL, NULL),
('011133054', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `ID` varchar(9) NOT NULL,
  `work_type` varchar(50) DEFAULT NULL,
  `compnay_name` varchar(50) DEFAULT NULL,
  `possition` varchar(50) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`ID`, `work_type`, `compnay_name`, `possition`, `experience`) VALUES
('011131140', NULL, NULL, NULL, NULL),
('011133054', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programming_contest_field`
--
ALTER TABLE `programming_contest_field`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programming_contest_virtual`
--
ALTER TABLE `programming_contest_virtual`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projectcontest`
--
ALTER TABLE `projectcontest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `researchwork`
--
ALTER TABLE `researchwork`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `programming_contest_field`
--
ALTER TABLE `programming_contest_field`
  ADD CONSTRAINT `programming_contest_field_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `programming_contest_virtual`
--
ALTER TABLE `programming_contest_virtual`
  ADD CONSTRAINT `programming_contest_virtual_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `projectcontest`
--
ALTER TABLE `projectcontest`
  ADD CONSTRAINT `projectcontest_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `researchwork`
--
ALTER TABLE `researchwork`
  ADD CONSTRAINT `researchwork_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `thesis`
--
ALTER TABLE `thesis`
  ADD CONSTRAINT `thesis_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD CONSTRAINT `workexperience_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
