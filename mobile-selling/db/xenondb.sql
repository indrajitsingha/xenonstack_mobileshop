-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 07:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xenondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `Mas_ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`Mas_ID`, `name`, `email`, `massage`) VALUES
(1, 'Arnab singha', 'arnabsingha9004@gmail.com', 'hello how are you'),
(2, 'Indrajit singha', 'indrajit@123', 'fewfwrr2rr3w'),
(3, 'Indrajit singha', 'indrajit@123', 'fewfwrr2rr3w'),
(4, 'Indrajit singha', 'indrajit@123', 'fewfwrr2rr3w');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenumber` int(10) NOT NULL,
  `password` varchar(18) NOT NULL,
  `repeatpassword` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `name`, `email`, `mobilenumber`, `password`, `repeatpassword`) VALUES
(3, 'Arnab Singha', 'arnabsingha9004@gmail.com', 2147483647, '827ccb0eea8a706c4c', '827ccb0eea8a706c4c'),
(4, 'Arnab Singha', 'Arnab@gmail.com', 2147483647, '123456', '123456'),
(5, 'Arnab Singha', 'rohit@gmail', 2147483647, '9087', '9087'),
(6, 'Indrajit singha', 'indrajitsingha.18@nshm.edu.in', 2147483647, '123', '123'),
(7, 'Indrajit singha', 'indrajitdgp19@gmail.com', 2147483647, '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`Mas_ID`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `Mas_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
