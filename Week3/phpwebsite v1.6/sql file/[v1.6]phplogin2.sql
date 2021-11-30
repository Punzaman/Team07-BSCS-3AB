-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 05:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE `addvehicle` (
  `vehicleType` varchar(255) NOT NULL,
  `vehiclePlateno` varchar(255) NOT NULL,
  `vehicleUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`vehicleType`, `vehiclePlateno`, `vehicleUser`) VALUES
('Ten Wheeler', 'ABC-123', '2'),
('Four Wheeler', 'QWE-123', '3'),
('Two Wheeler', 'AAA-111', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserveId` int(11) NOT NULL,
  `reserveDate` date NOT NULL,
  `reservePark` varchar(255) NOT NULL,
  `reserveUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserveId`, `reserveDate`, `reservePark`, `reserveUser`) VALUES
(28, '2021-11-26', '11:52:00', '2'),
(29, '2021-11-26', '12:18:00', '1'),
(30, '2021-11-26', '12:18:00', '3'),
(31, '2021-11-26', '16:32:00', '2'),
(32, '2021-11-26', '3PM', '2'),
(33, '2021-11-26', '5PM', '2'),
(34, '2021-11-26', '3PM', '2'),
(35, '2021-11-27', '12PM', '2'),
(36, '2021-11-26', '11AM', '2'),
(37, '2021-11-28', '3PM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'ken', 'ken@gmail.com', 'kenlord', '$2y$10$m4ISqd58WxifflbYMLGlZONLGV/vVkeNTbbw8oarHLy2C1ewlNKzq'),
(2, 'Foehn Raja', 'foehn@gmail.com', 'foehn21', '$2y$10$StJjj5Zmcxm.L.5mHzTaj.bM1vPwicVX3wsNGnfTO6ndRCll6i47u'),
(3, 'Patrick Jade', 'pj@gmail.com', 'cluers12', '$2y$10$T8s9WcDxAn4JcmK1VBum2Ohx5M8R8UALihxfe9WcCGxYkcQA.X1sm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveId`),
  ADD KEY `reserveUser` (`reserveUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
