-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 07:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `contact`, `email`, `gender`, `password`) VALUES
(2, 'Het', '12363645', 'ht@gmail.com', 'Male ', 'H123444'),
(3, 'Roman', '787895478', 'Rom@gmail.com', 'male', '202cb962ac59075b964b07152d234b70'),
(4, 'jey', '7894578', 'jey@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'jimmy', '7894578', 'j@gmail.com', 'Male', 'cb1e0718dccb5ae115a1079855954f89'),
(15, 'Harsh kiri', '9645789', 'h22@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'roman', '1234564789', 'roman@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'kiri', '7894561', 'kiri@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'deepak', '1234567890', 'deepak@gmail.com', 'Male', '202cb962ac59075b964b07152d234b70'),
(28, 'kiri', '987548945', 'kiri22@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'kiri', '987548945', 'kiri78@gmail.com', 'Male', '81dc9bdb52d04dc20036dbd8313ed055'),
(33, 'Harsh kiri', '987548945', 'h@gmail.com', 'Male', '81dc9bdb52d04dc20036dbd8313ed055'),
(35, 'HARSH', '987548945', 'h234@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `Name`, `Email`, `Password`, `gender`) VALUES
(1, 'Harsh kiri', 'harsh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `p_order`
--

CREATE TABLE `p_order` (
  `o_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `o_date` date DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_order`
--

INSERT INTO `p_order` (`o_id`, `cust_id`, `o_date`, `qty`, `address`, `s_id`) VALUES
(2, 3, '2024-12-17', 3, 'Narol', 20),
(12, 27, '2024-12-21', 2, 'narol', 21),
(13, 27, '2024-12-21', 2, 'Lambha Ahmedabad ', 17);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `s_id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Types` varchar(150) NOT NULL,
  `Price` int(11) NOT NULL,
  `s_qty` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`s_id`, `Name`, `Types`, `Price`, `s_qty`, `image`) VALUES
(17, 'T shirt', 'nike', 14000, 100, 't-shirt.png'),
(20, 'Shoes', 'Speed', 1500, 50, 'shoes.jpg'),
(21, 'Bacca Bucci Hike 5-Eye Moto Inspired Light Weighted Mountaineering Backpacking Trekking/Hiking Boots for Men', 'Sport Shoes', 1424, 1000, '71irSZWDKJL._SY695_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `p_order`
--
ALTER TABLE `p_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_order`
--
ALTER TABLE `p_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_order`
--
ALTER TABLE `p_order`
  ADD CONSTRAINT `p_order_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `p_order_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `stock` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
