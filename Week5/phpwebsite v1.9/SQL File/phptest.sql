-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 06:13 AM
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
-- Database: `phptest`
--

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
(1, '0000-00-00', '', '1'),
(2, '0000-00-00', '', '1'),
(3, '0000-00-00', '', '1'),
(4, '0000-00-00', '', '1'),
(5, '0000-00-00', '', '1'),
(6, '0000-00-00', '', '1'),
(7, '0000-00-00', '', '1'),
(8, '2021-12-08', '11AM', '1'),
(9, '0000-00-00', '', '2'),
(10, '2021-12-24', '5PM', '2'),
(11, '0000-00-00', '', '2'),
(12, '0000-00-00', '', '2'),
(13, '2021-12-31', '9PM', '2'),
(14, '0000-00-00', '', '2'),
(15, '2021-12-25', '3PM', '2'),
(16, '2021-12-20', '4PM', '2'),
(17, '2021-12-08', '1PM', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_pwdrepeat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `username`, `user_pwd`, `user_pwdrepeat`) VALUES
(1, 'kenlord', 'pamatian', 'ken@gmail.com', 'kenlord55', '202cb962ac59075b964b07152d234b70', ''),
(2, 'qwe', 'qwe', 'qwe@gmail.com', 'qwe', '76d80224611fc919a5d54f0ff9fba446', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
