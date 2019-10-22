-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 10:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Md. monir', 'monir@gmail.com', 'Hasan', 'qwertyyu');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `username`, `date`, `category`, `amount`) VALUES
(1, '', '2019-08-02', 'c2', '1007'),
(2, 'root', '2019-08-01', 'c1', '1234'),
(4, 'root', '2019-08-21', 'c4', '12'),
(5, 'root', '2019-08-12', 'c3', '555'),
(6, 'a@gmail.com', '2019-08-13', 'c4', '22'),
(12, 'a@gmail.com', '2019-08-20', 'c1', '2345'),
(13, 'mon@gmail.com', '2019-08-20', 'c1', '890');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `username`, `date`, `category`, `amount`) VALUES
(1, '0', '2019-08-21', 'c2', '1000'),
(2, '0', '0000-00-00', '', ''),
(3, '0', '0000-00-00', 'c1', ''),
(4, '0', '2019-08-07', 'c1', '1000'),
(5, '0', '2019-08-07', 'c1', '789'),
(6, '0', '2019-08-03', 'c4', '1007'),
(7, '0', '2019-08-02', 'c2', '1007'),
(8, 'a@gmail.com', '2019-07-31', 'c3', '555'),
(9, '', '2019-08-20', 'c4', '1000'),
(10, 'a@gmail.com', '2019-08-20', 'c3', '2134'),
(11, 'mon@gmail.com', '2019-08-20', 'c4', '456');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `pass`, `phone`, `address`, `gender`) VALUES
(1, '', 'abc@gmail.com', '12345678', 1744898822, 'Bangladesh', 'male'),
(2, '', 'ab@gmail.com', '12345678', 1744898822, 'Dhaka', 'male'),
(3, '', 'erikabdullah29@gmail', '12345678', 1744898822, 'Null', 'male'),
(4, '', 'erikabdullah29@gmail', 'qwertyui', 17448, 'Null', 'male'),
(5, '', 'admin@admin.com', '12345678', 2147483647, 'assfsf', 'male'),
(6, '', 'zc@gmail.com', '12345678', 1744898822, 'London', 'male'),
(8, 'Monir Wahid', 'monir@gmail.com', '568c2d08b96e482d3ca1', 1676327058, 'Dhaka, Bangladesh', 'male'),
(9, 'Monir Wahid', 'moni@gmail.com', '568c2d08b96e482d3ca1', 1676327058, 'Dhaka, Bangladesh', 'male'),
(10, 'Monir Hossain', 'mon@gmail.com', '123', 1676327058, 'Dhaka, Bangladesh', 'male'),
(11, 'Abid Tawsif', 'a@gmail.com', '123123', 2147483647, '789', 'male'),
(12, 'Khan Adka', 'qabaq@gmail.com', '827ccb0eea8a706c4c34', 2147483647, 'Ashakdqw', 'female'),
(13, 'Monir Wahid', 'monew@gmail.com', '568c2d08b96e482d3ca11cbebac9b161', 1897237633, 'Dhaka', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
