-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 07:04 AM
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
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `contact` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'Roman', 'roman@gmail.com', 'b179a9ec0777eae19382c14319872e1b', 96895645),
(2, 'kiri', 'kiri12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 7894578);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `Name` varchar(180) NOT NULL,
  `Email` varchar(180) NOT NULL,
  `Comment` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `Name`, `Email`, `Comment`) VALUES
(18, 'Deepak', 'deepak@gmail.com', 'hello world2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile_No` bigint(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Status` enum('unblock','block','','') NOT NULL DEFAULT 'unblock',
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Name`, `Email`, `Password`, `Mobile_No`, `Photo`, `Address`, `Status`, `Gender`) VALUES
(1, 'Harsh kiri', 'kiriharsh5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 960111222, 'pexels-anush-1229356.jpg', 'Gujarat', 'unblock', 'Male'),
(2, 'Roman', 'roman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 960111222, 'ORIGnal trible chief.jpg', 'Australia', 'unblock', 'Male'),
(7, 'Jey', 'jey@gmail.com', '41525af98cffe913d396c83bdd493181', 0, '', 'india', 'unblock', 'Male '),
(14, 'Jey', 'jey123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 9784121365, '', 'India', 'unblock', 'Male '),
(17, 'Jey', 'jey78@gmail.com', '41971986261ece86fcba35a07206fc25', 9784121365, '', 'India', 'unblock', 'male'),
(18, 'Raja', 'raj@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1234567890, '', 'Lambha ', 'unblock', 'Male'),
(22, 'Prakash', 'prakash@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1234567890, '', 'lambha', 'unblock', 'Male'),
(26, 'Akash', 'akash@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1234567890, 'pexels-victorfreitas-791763.jpg', 'Narol', 'unblock', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `d_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `preworkout` varchar(225) NOT NULL,
  `postworkout` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`d_id`, `name`, `preworkout`, `postworkout`, `Gender`) VALUES
(1, 'Harsh', 'Banana', 'Meal', 'Male'),
(5, 'Mahesh ', 'Apple ', 'Protin shake ', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `v_id` int(11) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `coment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`v_id`, `cust_id`, `name`, `coment`) VALUES
(17, 1, 'Harsh kiri', 'coment');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `m_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `days` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`m_id`, `name`, `days`, `time`) VALUES
(9, 'jey', 'Monday', '5:00 to 6:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `t_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`t_id`, `name`, `email`, `password`, `gender`, `language`, `file`) VALUES
(1, 'jimmy', 'j@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'English', ''),
(2, 'Rajnikant', 'ra@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'English', ''),
(6, 'Roman', 'ram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'English', 'team-2.jpg'),
(7, 'Roman', 'ram12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'English', 'team-3.jpg'),
(8, 'Roman', 'r123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 'Hindi,English,Gujarati', 'team-1.jpg'),
(9, 'Jonny', 'jo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', 'English', 'team-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`Cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
