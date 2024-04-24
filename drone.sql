-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 09:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` varchar(230) NOT NULL,
  `status` varchar(230) NOT NULL DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'sagar', 'sagar@gmail.com', '12345678', 'free'),
(2, 'vikas', 'vaikas@gmail.com', '12345678', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(11) NOT NULL,
  `uid` varchar(230) NOT NULL,
  `item` varchar(230) NOT NULL,
  `weight` varchar(230) NOT NULL,
  `price` varchar(234) NOT NULL,
  `uname` varchar(230) NOT NULL,
  `lat` varchar(230) NOT NULL,
  `lon` varchar(230) NOT NULL,
  `mobile` varchar(230) NOT NULL,
  `operator` varchar(230) NOT NULL,
  `address` varchar(999) NOT NULL,
  `status` varchar(230) NOT NULL DEFAULT 'created',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picklat` varchar(230) NOT NULL,
  `picklon` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `uid`, `item`, `weight`, `price`, `uname`, `lat`, `lon`, `mobile`, `operator`, `address`, `status`, `date`, `picklat`, `picklon`) VALUES
(2, 'mohadsushil5@gmail.com', 'pizza', '0.34', '6.8', 'sushil', '123.56', '321.45', '', 'vaikas@gmail.com', 'samta nagar neri , ward no 6 , urjanagar', 'accepted', '2024-04-01 10:21:51', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` varchar(230) NOT NULL,
  `address` varchar(999) NOT NULL,
  `lat` varchar(230) NOT NULL,
  `lon` varchar(230) NOT NULL,
  `status` varchar(230) NOT NULL DEFAULT 'active',
  `wallet` varchar(230) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `lat`, `lon`, `status`, `wallet`) VALUES
(1, 'sushil', 'mohadsushil5@gmail.com', '12345678', 'samta nagar neri , ward no 6 , urjanagar', '123.56', '321.45', 'active', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
