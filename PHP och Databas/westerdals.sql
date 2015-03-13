-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2015 at 09:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `westerdals`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
`ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `User_RIghts` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `Room_ID` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `Size` int(11) DEFAULT NULL,
  `Equipment` varchar(255) DEFAULT NULL,
  `Date` date NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Info` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_ID`, `Student_ID`, `Size`, `Equipment`, `Date`, `Time`, `Info`) VALUES
(81, NULL, 2, NULL, '2015-03-22', '12-15', NULL),
(81, NULL, 2, NULL, '2015-03-22', '15-18', NULL),
(81, NULL, 2, NULL, '2015-03-22', '18-21', NULL),
(81, NULL, 2, NULL, '2015-03-22', '9-12', NULL),
(82, NULL, 3, NULL, '2015-03-22', '12-15', NULL),
(82, NULL, 3, NULL, '2015-03-22', '15-18', NULL),
(82, NULL, 3, NULL, '2015-03-22', '18-21', NULL),
(82, NULL, 3, NULL, '2015-03-22', '9-12', NULL),
(83, NULL, 3, 'Projector', '2015-03-22', '12-15', NULL),
(83, NULL, 3, 'Projector', '2015-03-22', '15-18', NULL),
(83, NULL, 3, 'Projector', '2015-03-22', '18-21', NULL),
(83, NULL, 3, 'Projector', '2015-03-22', '9-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Student_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `User_Rights` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Student_ID`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Password`, `User_Rights`) VALUES
(123456, 'GOD', 'ALMIGHTY', 'god.almighty@heaven.com', 0, 'GOD', '5'),
(701933, 'Eirik Kristoffer', 'Sunde', 'suneir14@student.westerals.no', 95272454, 'Eirikur', '1'),
(701957, 'Stian', 'Grimsrud Naug', 'nausti14@student.westerdals.no', 47892895, 'Stian', '2'),
(702160, 'Iben Oliver', 'Vågen Nilsen', 'oliibe14@student.westerdals.no', 40608099, 'Iben', '3'),
(702248, 'Tobias', 'Goulden Schultz', 'schtob14@student.westerdals.no', 94484500, 'Tobias', '3'),
(702274, 'Eirikur', 'Lundin', 'luneir142@student.westerdal.no', 97773503, 'Eirikur', '5'),
(702399, 'Tanja', 'Rio', 'riotan14@student.westerdals.no', 94422054, 'Tanja', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`Room_ID`,`Date`,`Time`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
