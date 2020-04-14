-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pazaakcapstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerdecks`
--

CREATE TABLE `playerdecks` (
  `deckID` int(11) NOT NULL,
  `mainDeck` tinyint(1) NOT NULL,
  `cards` varchar(60) NOT NULL,
  `playerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playerdecks`
--

INSERT INTO `playerdecks` (`deckID`, `mainDeck`, `cards`, `playerID`) VALUES
(1, 1, '1,2,3,4,5,6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerID` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `imagePath` int(11) DEFAULT NULL,
  `imageExtension` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `userName`, `firstName`, `lastName`, `email`, `password`, `imagePath`, `imageExtension`) VALUES
(1, 'testUser', 'Bob', 'Bobert', 'Test@gmail.com', 'Password1!', NULL, NULL),
(2, 'Djinn', 'Connor', 'Bohlin', 'Djinn@gmail.com', 'Password1!', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playerdecks`
--
ALTER TABLE `playerdecks`
  ADD PRIMARY KEY (`deckID`),
  ADD KEY `playerID` (`playerID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playerdecks`
--
ALTER TABLE `playerdecks`
  MODIFY `deckID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
