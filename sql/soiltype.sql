-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 10:12 AM
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
-- Table structure for table `soiltype`
--

CREATE TABLE `soiltype` (
  `id` int(11) NOT NULL,
  `soil_name` varchar(100) NOT NULL,
  `soil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soiltype`
--

INSERT INTO `soiltype` (`id`, `soil_name`, `soil_id`) VALUES
(1, 'TERAI SOIL', 1),
(2, 'GANGETIC ALLUVIUM', 2),
(3, 'BALTHAR', 3),
(9, 'TAL', 4),
(10, 'KARAIL-KOWAL SOIL', 5),
(11, 'RED AND YELLOW ', 6),
(12, 'RED SANDY', 7),
(13, 'PIEDMONT SWAMP', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soiltype`
--
ALTER TABLE `soiltype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soiltype`
--
ALTER TABLE `soiltype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
