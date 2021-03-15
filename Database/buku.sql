-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 07:31 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `cover` mediumblob NOT NULL,
  `buku` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `judul`, `penulis`, `kategori`, `cover`, `buku`) VALUES
(1, 'Do The Work', 'Admin', 'Education', 0x2075706c6f61642f312e6a7067, 0x75706c6f61642f446f2074686520576f726b2e706466),
(2, 'Accident Love', 'Admin', 'Romance', 0x2075706c6f61642f656639326431373733383362636332353231393766656464393566663130626431353836616333313830326136393361643364393638356331333536333133612e6a7067, 0x75706c6f61642f546865204769667473206f6620496d70657266656374696f6e5f20456d62726163652057686f20596f752041726520282050444644726976652e636f6d20292831292e706466),
(3, 'Make a Descicion', 'Admin', 'Motivation', 0x2075706c6f61642f6d6f7469766174696f6e2e6a7067, 0x75706c6f61642f546865204769667473206f6620496d70657266656374696f6e5f20456d62726163652057686f20596f752041726520282050444644726976652e636f6d20292e706466),
(4, 'Thrill in Life', 'Admin', 'Thriller', 0x2075706c6f61642f6d69636861656c2d6a61636b736f6e2d7468652d6d616b696e672d6f662d746872696c6c65722d6476642d353736322e6a7067, 0x75706c6f61642f4265617a6c65795f4d415f53323031342e706466),
(5, 'Not Give Up', 'Admin', 'SoL', 0x2075706c6f61642f736c6963652e6a7067, 0x75706c6f61642f52485f537475647947756964655f56322e706466),
(6, 'Life Like a Nature', 'Admin', 'Fantasy', 0x2075706c6f61642f617070732e34333939332e31333735383532323633343838393137302e62306139326133362d353236312d346562352d386362662d6636346461373337633063382e39313033653166392d303338372d346338662d393339652d3161663736356464613164352e6a7067, 0x75706c6f61642f53696c656e7420537072696e672062792052616368656c20436172736f6e20282050444644726976652e636f6d20292e706466),
(7, 'Grown Up', 'Admin', 'etc', 0x2075706c6f61642f6f75742e6a7067, 0x75706c6f61642f4d696e647365745f20546865204e65772050737963686f6c6f6779206f66205375636365737320282050444644726976652e636f6d20292e706466);

-- --------------------------------------------------------

--
-- Table structure for table `detail_event`
--

CREATE TABLE `detail_event` (
  `id` int(30) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_event`
--

INSERT INTO `detail_event` (`id`, `judul`) VALUES
(10, 'Dreaming About Book'),
(11, 'Dreaming About Book');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userID` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Pasword` varchar(900) DEFAULT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Gender` char(10) DEFAULT NULL,
  `Profile_Pic` mediumblob NOT NULL,
  `tipe` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userID`, `Username`, `Pasword`, `FirstName`, `LastName`, `Email`, `Gender`, `Profile_Pic`, `tipe`) VALUES
(7, 'levi23', 'e10adc3949ba59abbe56e057f20f883e', 'Levinovska', 'Reamo', 'Levino@gmail.com', 'male', 0x75706c6f61642f617364772e706e67, ''),
(9, 'Admin', '0192023a7bbd73250516f069df18b500', NULL, NULL, NULL, NULL, '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_event`
--
ALTER TABLE `detail_event`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
