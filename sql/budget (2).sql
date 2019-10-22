-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 05:24 AM
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
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `isdel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `username`, `date`, `category`, `amount`, `isdel`) VALUES
(1, '', '2019-08-02', 'c2', 1007, 0),
(2, 'root', '2019-08-01', 'c1', 1234, 0),
(4, 'root', '2019-08-21', 'c4', 12, 0),
(5, 'root', '2019-08-12', 'c3', 555, 0),
(6, 'a@gmail.com', '2019-08-13', 'c4', 22, 0),
(12, 'a@gmail.com', '2019-08-20', 'c1', 2345, 0),
(13, 'mon@gmail.com', '2019-08-20', 'c1', 890, 0),
(14, 'zubayer@gmail.c', '2019-08-21', 'Education', 7890, 0),
(15, 'Monew123@gmail.com', '2019-08-26', 'Shares', 1234, 1),
(16, 'Monew123@gmail.com', '2019-08-27', 'Salary', 1234, 0),
(17, 'Monew123@gmail.com', '2019-08-23', 'Pension', 12, 0),
(18, 'Monew123@gmail.com', '2019-08-19', 'Pension', 2345, 1),
(19, 'Monew123@gmail.com', '2019-08-19', 'Business', 200, 0),
(20, 'Monew123@gmail.com', '2019-08-26', 'Salary', 200, 0),
(21, 'Monir@gmail.com', '2019-08-12', 'Shares', 4500, 1),
(22, 'Monir@gmail.com', '2019-08-11', 'Business', 1000, 0),
(23, 'Monir@gmail.com', '2019-08-26', 'Salary', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `isdel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `username`, `date`, `category`, `amount`, `isdel`) VALUES
(24, 'Monew123@gmail.com', '2019-08-05', 'Shares', 1234, 1),
(25, 'Monew123@gmail.com', '2019-08-25', 'Pension', 12345, 0),
(26, 'Monew123@gmail.com', '2019-08-19', 'Salary', 1234, 0),
(27, 'Monew123@gmail.com', '2019-08-27', 'Housing Property', 12345, 0),
(28, 'Monew123@gmail.com', '2019-08-06', 'Salary', 1234, 1),
(29, 'Monew123@gmail.com', '2019-08-26', 'Salary', 1234, 1),
(30, 'Monew123@gmail.com', '2019-08-25', 'Salary', 1234, 0),
(31, 'Monew123@gmail.com', '2019-08-05', 'Salary', 1234, 1),
(32, 'Monew123@gmail.com', '2019-08-26', 'Salary', 1234, 0),
(33, 'Monew123@gmail.com', '2019-08-26', 'Salary', 123, 1),
(34, 'Monew123@gmail.com', '2019-08-19', 'Pension', 1234, 0),
(35, 'Monir@gmail.com', '2019-08-25', 'Salary', 20000, 0),
(36, 'Monir@gmail.com', '2019-08-19', 'Housing Property', 1000, 0),
(37, 'Monir@gmail.com', '2019-08-22', 'Pension', 3000, 0),
(38, 'Monir@gmail.com', '2019-08-26', 'Salary', 1204, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `pass`, `phone`, `address`, `gender`) VALUES
(1, '', 'abc@gmail.com', '12345678', '1744898822', 'Bangladesh', 'male'),
(2, '', 'ab@gmail.com', '12345678', '1744898822', 'Dhaka', 'male'),
(3, '', 'erikabdullah29@gmail', '12345678', '1744898822', 'Null', 'male'),
(4, '', 'erikabdullah29@gmail', 'qwertyui', '17448', 'Null', 'male'),
(5, '', 'admin@admin.com', '12345678', '2147483647', 'assfsf', 'male'),
(6, '', 'zc@gmail.com', '12345678', '1744898822', 'London', 'male'),
(9, 'Monir Wahid', 'moni@gmail.com', '568c2d08b96e482d3ca1', '1676327058', 'Dhaka, Bangladesh', 'male'),
(10, 'Monir Hossain', 'mon@gmail.com', '123', '1676327058', 'Dhaka, Bangladesh', 'male'),
(11, 'Abid Tawsif', 'a@gmail.com', '123123', '2147483647', '789', 'male'),
(12, 'Khan Adka', 'qabaq@gmail.com', '827ccb0eea8a706c4c34', '2147483647', 'Ashakdqw', 'female'),
(13, 'Monir Wahid', 'monew@gmail.com', '568c2d08b96e482d3ca11cbebac9b161', '1897237633', 'Dhaka', 'male'),
(14, 'Irik Abdullah', 'irik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2147483647', 'Dhaka', 'male'),
(15, 'Zubayer Ahmed', 'zubayer@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01744898822', 'Dhaka,Bangladesh', 'male'),
(16, 'Asad Sad', 'sad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01789654321', 'Dhaka', 'female'),
(17, ' ', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(18, ' ', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(19, ' ', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(20, ' ', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(21, 'Monir Wahid', 'Monir12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0167635251', 'Dhaka', 'male'),
(22, 'Monir Wahid', 'Monir12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0167635251', 'Dhaka', 'male'),
(23, 'Monir Wahid', 'Monir12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0167635251', 'Dhaka', 'male'),
(24, 'Monir Wahid', 'Monir12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0167635251', 'Dhaka', 'male'),
(25, 'Rahim Kamal', 'Kamal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0156732134566', 'Dhaka', 'male'),
(26, 'Qasgd Qoeepr', 'Monew@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'sdhaja', 'female'),
(27, 'Qasgd Qoeepr', 'Monew@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'sdhaja', 'female'),
(28, 'Qasgd Qoeepr', 'Monew@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'sdhaja', 'female'),
(29, 'Monir Wahid', 'Monew123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456', 'dakakaka', ''),
(30, 'Monir Hossain', 'Monir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01676327058', 'Dhaka, Bangladesh', '');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
