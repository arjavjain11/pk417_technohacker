-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 12:12 PM
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
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `crop` varchar(255) NOT NULL,
  `fertilizer` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `soil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `crop`, `fertilizer`, `season`, `soil_id`) VALUES
(1, 'Rice', 'POTASSIUM, PHOSPHORUS', 'JUNE-OCTOBER', 1),
(2, 'WHEAT ', 'NITROGEN, PHOSPHORUS,POTASH', 'DECEMBER-MARCH/APRIL', 1),
(3, 'POTATO', 'AMMONIUM NITRATE,MAGNESIUM SULPHATE,POTASSIUM,DOLOMITE', 'NOVEMBER-FEB/MARCH', 1),
(4, 'MUSTARD', 'POTASH, NITROGEN,UREA , PHOSPHATE', 'OCTOBER-FEBRUARY', 2),
(5, 'SUGARCANE', 'NITROGEN, PHOSPHATE, POTASS', 'JANUARY-DECEMBER', 1),
(6, 'TOBACCO', 'PHOSHORUS,NITROGEN', 'SEPT-DEC', 3);

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `expert_id` int(11) NOT NULL,
  `expert_name` varchar(255) NOT NULL,
  `expert_email` varchar(255) NOT NULL,
  `expert_password` varchar(255) NOT NULL,
  `expert_phone` varchar(10) NOT NULL,
  `expert_address` varchar(200) DEFAULT NULL,
  `expert_image` varchar(255) DEFAULT NULL,
  `expert_qualification` varchar(100) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `from_ip` int(100) NOT NULL,
  `from_browser` varchar(255) NOT NULL,
  `f_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`expert_id`, `expert_name`, `expert_email`, `expert_password`, `expert_phone`, `expert_address`, `expert_image`, `expert_qualification`, `date`, `from_ip`, `from_browser`, `f_id`, `token`, `status`) VALUES
(1, 'Nancy jain', 'njain@gmail.com', '12345612', '8963331561', 'Moradabad', 'Screenshot (10).png', 'Phd (agri)', 'Mon, 03 Aug 2020 10:48:05 +0530', 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 1, '3154340f19a6602471e3f27d74f066', 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_query`
--

CREATE TABLE `farmer_query` (
  `query_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_query`
--

INSERT INTO `farmer_query` (`query_id`, `farmer_id`, `farmer_query`) VALUES
(7, 0, 'how to grow crops');

-- --------------------------------------------------------

--
-- Table structure for table `soiltype`
--

CREATE TABLE `soiltype` (
  `id` int(11) NOT NULL,
  `soil_name` varchar(100) NOT NULL,
  `soil_id` int(11) NOT NULL,
  `Areas and regions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soiltype`
--

INSERT INTO `soiltype` (`id`, `soil_name`, `soil_id`, `Areas and regions`) VALUES
(1, 'TERAI SOIL', 1, 'CHAMPARAN AND KISHANGUNG'),
(2, 'GANGETIC ALLUVIUM', 2, 'CHAMPARAN DISTRICT AND THE BORDER OF BIHAR'),
(3, 'BALTHAR', 3, 'BALTHAR'),
(9, 'TAL', 4, 'SOUTH EAST BIHAR'),
(10, 'KARAIL-KOWAL SOIL', 5, 'PATNA AREA REGION'),
(11, 'RED AND YELLOW ', 6, 'BANKA , GAYA , AURANGABAD , JAMUI AND MUNGER'),
(12, 'RED SANDY', 7, 'BANKA , GAYA , AURANGABAD , JAMUI AND MUNGER'),
(13, 'PIEDMONT SWAMP', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `f_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_address`, `user_farmarea`, `user_district`, `from_ip`, `from_browser`, `date`, `token`, `status`) VALUES
(1, 1, '', 'nj@gmail.com', 'nancy89@', '', NULL, NULL, NULL, NULL, '', '', '', '', '1'),
(2, 2, 'admin', 'abc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, 'Thu, 30 Jul 2020 13:22:21 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.10', '', '1'),
(3, 3, 'nancy jain', 'abc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 13:26:22 +0530', '', '1'),
(4, 4, 'nancy jain', 'ac@gmail.com', 'nancy89@', '12345678', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 13:26:56 +0530', '', '1'),
(5, 5, 'MOhit jain', 'bc@gmail.com', 'nancy89@', '123456789', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Thu, 30 Jul 2020 14:06:16 +0530', '', '1'),
(6, 6, 'admin12', 'njain2859@gmail.com', '12345678', '8938816596', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Fri, 31 Jul 2020 01:40:00 +0530', '5842d49a5caecde0342343e27375c1', '1'),
(7, 7, 'nancy jain', 'jainchandni8938@gmail.com', '123456', '8963331568', 'Screenshot (7).png', 'hello hi', '', '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Fri, 31 Jul 2020 21:53:28 +0530', 'b3b1a3e546e10e9ac5b71bf6bc0d87', '1'),
(8, 8, 'admin', 'n@gmail.com', '1234567891', '8963331568', NULL, '', '', '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Sat, 01 Aug 2020 00:37:38 +0530', 'a1d0398f8fa74edef6a47a8f93a213', '1'),
(9, 9, 'njcoder', 'njain9@gmail.com', '123456789', '8963321561', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Sun, 02 Aug 2020 22:16:19 +0530', 'c4bc4bb566f2fdef49ead73e94c22e', '1'),
(10, 10, 'mohit jain', 'j8@gmail.com', '123456789', '8963321568', NULL, NULL, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36', 'Mon, 03 Aug 2020 10:04:34 +0530', '86103ea5bedb9c81be4d4feb71ef07', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`expert_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `farmer_query`
--
ALTER TABLE `farmer_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `soiltype`
--
ALTER TABLE `soiltype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmer_query`
--
ALTER TABLE `farmer_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soiltype`
--
ALTER TABLE `soiltype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
