-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 10:13 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
