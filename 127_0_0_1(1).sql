-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 09:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program3-bohlin`
--
CREATE DATABASE IF NOT EXISTS `program3-bohlin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `program3-bohlin`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `commentTime` datetime NOT NULL,
  `posterID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `comment`, `commentTime`, `posterID`, `receiverID`) VALUES
(1, 'asdf', '2019-12-08 22:19:40', 22, 22),
(2, 'test', '2019-12-08 22:19:46', 22, 23),
(3, 'asdfasdfasdf', '2019-12-08 22:29:12', 23, 23),
(4, '    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol', '2019-12-08 23:04:55', 23, 23),
(5, '    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol', '2019-12-08 23:05:15', 23, 23),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate dignissim suspendisse in est ante in nibh mauris. Id eu nisl nunc mi ipsum faucibus vitae. Ultrices gravida dictum fusce ', '2019-12-08 23:05:38', 23, 23),
(7, 'test', '2019-12-09 00:57:47', 23, 23),
(8, 'Leave comments', '2019-12-09 01:00:17', 25, 23),
(9, 'asdfdsf', '2019-12-09 01:00:56', 25, 24),
(10, 'Hey \r\nHobbos\r\n', '2019-12-09 01:44:10', 22, 25),
(11, 'asdf', '2019-12-09 01:47:04', 22, 25),
(12, 'asdf', '2019-12-09 01:47:40', 22, 25),
(13, 'Sup dude', '2019-12-09 13:30:37', 30, 29),
(14, 'test', '2019-12-09 15:05:16', 32, 32),
(15, 'tasdf', '2019-12-09 15:05:19', 32, 32),
(16, 'You dumb', '2019-12-09 23:02:20', 33, 32);

-- --------------------------------------------------------

--
-- Table structure for table `playerdecks`
--

CREATE TABLE `playerdecks` (
  `deckID` int(11) NOT NULL,
  `mainDeck` tinyint(1) NOT NULL,
  `cards` varchar(60) NOT NULL,
  `playerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerdecks`
--

INSERT INTO `playerdecks` (`deckID`, `mainDeck`, `cards`, `playerID`) VALUES
(62, 0, '2,-5,4,-2,2,3', 36),
(63, 0, '-4,-6,-2,-3,5,-3', 38);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `userName`, `firstName`, `lastName`, `email`, `password`, `imagePath`, `imageExtension`) VALUES
(36, 'AAAA', 'AFirstName', 'ALastName', 'A@gmail.com', '$2y$10$lXfBV2W36ycs4QH7PDElYeljUuZs/2ubSMauyrmGZ7suuRHMDKlwW', 5051, '.jpg'),
(37, 'BBBB', 'BFirstName', 'BLastName', 'B@gmail.com', '$2y$10$Act6pHfxRKHiDXXJdMpHnuClGb5Qj0nTYwlsUy3TM2EQ.2kd3B3uK', NULL, NULL),
(38, 'CCCC', 'CIsFirstName', 'CIsLastName', 'C@gmail.com', '$2y$10$zVh3.W/ib6DNNk3dWMOYK.y2uN012rB.uSSeQoULbgMOQS6j63jH2', NULL, NULL),
(39, 'DDDD', 'DIsFirstName', 'DIsLastName', 'D@gmail.com', '$2y$10$RFQyDO8xS8yVOch./.0llegh2TjianeU8C6zRoRKvInH0VxR2JSNO', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `playerdecks`
--
ALTER TABLE `playerdecks`
  MODIFY `deckID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playerdecks`
--
ALTER TABLE `playerdecks`
  ADD CONSTRAINT `playerdecks_ibfk_1` FOREIGN KEY (`playerID`) REFERENCES `players` (`playerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
