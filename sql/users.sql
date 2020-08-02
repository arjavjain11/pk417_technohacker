-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 05:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmersite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_farmarea` varchar(255) DEFAULT NULL,
  `user_district` varchar(255) DEFAULT NULL,
  `from_ip` varchar(250) NOT NULL,
  `from_browser` varchar(250) NOT NULL,
  `date` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_address`, `user_farmarea`, `user_district`, `from_ip`, `from_browser`, `date`, `token`, `status`) VALUES
(1, '', 'nj@gmail.com', 'nancy89@', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(2, 'admin', 'abc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, 'Thu, 30 Jul 2020 13:22:21 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.10', '', ''),
(3, 'nancy jain', 'abc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 13:26:22 +0530', '', ''),
(4, 'nancy jain', 'ac@gmail.com', 'nancy89@', '12345678', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 13:26:56 +0530', '', ''),
(5, 'MOhit jain', 'bc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 14:06:16 +0530', '', ''),
(6, 'admin12', 'njain2859@gmail.com', '12345678', '8938816596', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Fri, 31 Jul 2020 01:40:00 +0530', '5842d49a5caecde0342343e27375c1', 'active'),
(7, 'nancy jain', 'jainchandni8938@gmail.com', '123456', '8963331568', 'Screenshot (10).png', '', '', '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Fri, 31 Jul 2020 21:53:28 +0530', 'b3b1a3e546e10e9ac5b71bf6bc0d87', 'active'),
(8, 'admin', 'n@gmail.com', '1234567891', '8963331568', NULL, '', '', '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Sat, 01 Aug 2020 00:37:38 +0530', 'a1d0398f8fa74edef6a47a8f93a213', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
