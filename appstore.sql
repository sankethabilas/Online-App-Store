-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 07, 2024 at 05:58 AM
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
-- Database: `appstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(5) NOT NULL,
  `app_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image_url` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `app_name`, `category`, `image_url`, `description`) VALUES
(15, 'Discord', 'chat', 'images/discord.jpg', 'Discord is a popular communication platform designed for creating communities and fostering interaction through text, voice, and video chat.'),
(16, 'Facebook', 'Social media', 'images/facebook.jpg', 'Facebook is a social networking platform designed to connect people, share content, and build communities.'),
(17, 'Spotify', 'Entertaintment', 'images/spotify.jpg', 'Spotify is a digital music streaming service that offers access to millions of songs, podcasts, and other audio content from artists worldwide.'),
(18, 'Youtube', 'Entertainment', 'images/youtube.jpg', 'YouTube is a global online platform that allows users to upload, share, view, and engage with video content.');

-- --------------------------------------------------------

--
-- Table structure for table `help_desk`
--

CREATE TABLE `help_desk` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help_desk`
--

INSERT INTO `help_desk` (`id`, `type`, `name`, `mobile`, `email`, `problem`) VALUES
(8, 'billing', 'kasun nirmal', 719604194, 'kasun@gmail.com', 'payment process unsuccess'),
(9, 'general', 'kasun nirmal', 719604194, 'kasun@gmail.com', 'log out button is not working');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `cardnumber` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `expiredate` varchar(11) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `bank`, `cardnumber`, `name`, `address`, `zipcode`, `expiredate`, `cvv`) VALUES
(5, 'bank-of-ceylon', '6734237890345678', 'kasun nirmal', '12/5 1st Lane,peradeniya,kandy', '12678', '06/26', 344),
(6, 'sampath-bank', '4356902376892345', 'kasun nirmal', '12/5 1st Lane,peradeniya,kandy', '12678', '11/27', 456);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_respond`
--

CREATE TABLE `ticket_respond` (
  `id` int(5) NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_respond`
--

INSERT INTO `ticket_respond` (`id`, `response`) VALUES
(1, 'test'),
(4, 'now its fixed by the developers'),
(5, 'check your payment details again');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `mobile`, `gender`) VALUES
('kasun', 'nirmal', 'kasun@gmail.com', 'kasun123', '0723234678', 'Male'),
('lahiru', 'perera', 'lahiru@gmail.com', 'lahiru123', '0775634823', 'Male'),
('nipun', 'perera', 'nipun@gmail.com', 'nipun123', '0764544636', 'Male'),
('saduni', 'rasangika', 'saduni@gmail.com', 'saduni123', '0713476890', 'Female'),
('supun ', 'malaka', 'supun@gmail.com', 'supun123', '0716655808', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_other_details`
--

CREATE TABLE `user_other_details` (
  `id` int(5) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `address_01` varchar(50) NOT NULL,
  `address_02` varchar(50) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `image_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_other_details`
--

INSERT INTO `user_other_details` (`id`, `s_email`, `address_01`, `address_02`, `province`, `district`, `city`, `postal_code`, `image_path`) VALUES
(8, 'kasun@gmail.com', '12/5 1st Lane,peradeniya,kandy', '', 'Central Province', 'kandy', 'kandy', 12678, 'profile_images/kasun_670359f3c1222.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_desk`
--
ALTER TABLE `help_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_respond`
--
ALTER TABLE `ticket_respond`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_other_details`
--
ALTER TABLE `user_other_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`s_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `help_desk`
--
ALTER TABLE `help_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_respond`
--
ALTER TABLE `ticket_respond`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_other_details`
--
ALTER TABLE `user_other_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_other_details`
--
ALTER TABLE `user_other_details`
  ADD CONSTRAINT `test` FOREIGN KEY (`s_email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
