-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 04:41 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(15) NOT NULL,
  `p_category` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_dis` varchar(500) NOT NULL,
  `p_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_name`, `p_image`, `p_dis`, `p_price`) VALUES
(1, 'Action', 'Valorant', 'uploads/', 'You May Have Small Amount Of Disprestion', 'Free'),
(2, 'Action', 'Valorant', 'uploads/', 'You May Have Small Amount Of Disprestion', 'Free'),
(3, 'Action', 'Valorant', 'uploads/', 'You May Have Small Amount Of Disprestion', 'Free'),
(4, 'Action', 'Valorant', 'uploads/', 'You May Have Small Amount Of Disprestion', 'Free'),
(5, 'Battle Royal', 'Valorant', 'uploads/', 'You May Have Small Amount Of Disprestion', 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
