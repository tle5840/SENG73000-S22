-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 04:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizelevator`
--

-- --------------------------------------------------------

--
-- Table structure for table `carnode`
--

CREATE TABLE `carnode` (
  `nodeID` tinyint(3) UNSIGNED NOT NULL,
  `floorNumber` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carnode`
--

INSERT INTO `carnode` (`nodeID`, `floorNumber`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `elevatornodes`
--

CREATE TABLE `elevatornodes` (
  `nodeID` tinyint(3) UNSIGNED NOT NULL,
  `info` text NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elevatornodes`
--

INSERT INTO `elevatornodes` (`nodeID`, `info`, `status`) VALUES
(1, 'elevator car', 1),
(2, 'floor 1 node', 1),
(3, 'floor 2 node', 1),
(4, 'floor 3 node', 1),
(5, 'controller', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carnode`
--
ALTER TABLE `carnode`
  ADD KEY `nodeID` (`nodeID`);

--
-- Indexes for table `elevatornodes`
--
ALTER TABLE `elevatornodes`
  ADD PRIMARY KEY (`nodeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carnode`
--
ALTER TABLE `carnode`
  ADD CONSTRAINT `carnode_ibfk_1` FOREIGN KEY (`nodeID`) REFERENCES `elevatornodes` (`nodeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
