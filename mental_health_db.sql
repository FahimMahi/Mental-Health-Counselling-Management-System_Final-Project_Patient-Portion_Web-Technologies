-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 08:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Mahi', 'mahi@yahoo.com', '01755555554'),
(2, 'h', 'h', '01711112222'),
(3, 'h', 'h', '01711112222'),
(4, 'h', 'h', '01711112222'),
(5, 'h', 'h', '01711112222'),
(6, 'h', 'h', '01711112222'),
(7, 'h', 'h', '01711112222'),
(8, 'h', 'h', '01711112222'),
(9, 'h', 'h', '01711112222'),
(10, 'h', 'h', '01711112222'),
(11, 'h', 'h', '01711112222'),
(12, 'h', 'h', '01711112222'),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`id`, `name`, `email`, `phone`, `note`) VALUES
(1, 'Dr. Hasan Mahmud', 'hasan@gmail.com', '01711112222', 'Daily 6-9 PM'),
(2, 'Dr. Tamim Iqbal', 'tamim@gmail.com', '01711142242', 'Sat-Tues 6-9 PM'),
(3, 'Dr. Naeem Islam', 'naimur@gmail.com', '01711242242', 'Sat 6-9 PM'),
(4, 'Dr. Shakib Al Hasan', 'shakibalhasan@gmail.com', '01711342244', 'Tues-Fri 6-9 PM'),
(5, 'Dr. Neymar', 'ney@gmail.com', '01711562244', 'Fri 6-9 PM');

-- --------------------------------------------------------

--
-- Table structure for table `counselor_ratings`
--

CREATE TABLE `counselor_ratings` (
  `id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselor_ratings`
--

INSERT INTO `counselor_ratings` (`id`, `counselor_id`, `client_id`, `rating`, `feedback`, `timestamp`) VALUES
(1, 1, 2, 5, 'Good', '2023-11-19 03:10:51'),
(2, 3, 2, 5, 'Good', '2023-11-19 03:11:58'),
(3, 1, 2, 4, 'Good', '2023-11-19 03:13:16'),
(4, 2, 1, 4, 'Good', '2023-11-19 03:18:14'),
(5, 1, 4, 5, 'Perfect', '2023-11-19 03:18:37'),
(6, 4, 4, 5, 'Good', '2023-11-19 03:18:50'),
(7, 3, 1, 5, 'Bhalo', '2023-11-19 07:19:58'),
(8, 1, 9, 5, 'Bestttt', '2023-11-21 05:42:21'),
(9, 1, 1, 5, 'Good', '2023-12-26 02:24:08'),
(10, 1, 1, 5, 'Good', '2023-12-26 02:25:45'),
(12, 4, 1, 5, 'Allrounder', '2023-12-26 02:30:49'),
(13, 2, 1, 5, 'Good', '2023-12-26 03:40:55'),
(14, 4, 1, 3, 'GOOD', '2024-01-02 03:24:31'),
(19, 1, 1, 5, 'Best', '2024-01-06 06:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `patient_id`, `counselor_id`, `message`, `timestamp`) VALUES
(1, 1, 1, 'My Medicine is not working', '2024-01-02 02:05:01'),
(2, 1, 1, 'Emergency', '2024-01-02 02:09:23'),
(3, 1, 2, 'Emergency', '2024-01-02 02:15:45'),
(4, 1, 4, 'Allrounder help me!', '2024-01-02 02:29:18'),
(5, 1, 1, 'Need Help', '2024-01-02 02:39:39'),
(6, 1, 1, 'eMERGENCY', '2024-01-02 03:24:16'),
(7, 1, 1, 'Needed Badly', '2024-01-02 05:36:44'),
(8, 1, 2, 'Hello!', '2024-01-02 05:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `password`, `name`, `email`, `phone`) VALUES
(1, 'mahi', '$2y$10$z4ODqyY4TxBq9BGV/n1h.O3f5YZCMUHctWIftY4QAHTHk8irTa5Um', 'Mahi', 'mahi@yahoo.com', '01755555554'),
(2, 'fahim', '$2y$10$KYx0oGUG1crM40VdZjnqYO7mIvNlrIpdsYy4ywa62B5JXzeaCvW9a', 'Fahim Mahmud Bhuiyan', 'fahim@gmail.com', '01725555556'),
(4, 'durjoy', '$2y$10$KYx0oGUG1crM40VdZjnqYO7mIvNlrIpdsYy4ywa62B5JXzeaCvW9a', 'durjoy', 'durjoy@gmail.com', '01755555532'),
(8, 'mahi1', '$2y$10$ODCNsBnZKPt/D7wAXXYAyuCepmdXUoNPv.pV.tVYWJV2a5wS.g/9y', 'Fahim Mahmud Bhuiyan', 'fahim.mahiii@yahoo.com', '01755555421'),
(9, 'mahiiiii', '$2y$10$8YO/WMHhnzhV9UUQvW2htuB2FJur1pXrypqZeODX2gCvyRTiXEOJq', 'Fahim Mahmud Mahi', 'mahiiiii@gmail.com', '01712345778'),
(10, 'mahi240', '$2y$10$xL2O3oCxmoZ/7aXJeUZru.Fsl4vyQ6QQ.cp3D/v.oIm1M6bjjTJRS', 'Fahim Mahmud', 'fahim.mahi@yahoo.com', '01850311282'),
(11, 'admin', '$2y$10$TFx7IYL.LocmVVjtYRid5Og4eWTEngKt8ag.UrQWC.n/R4MSj6rFi', 'mamun420', '20-42970-1@student.aiub.edu', '01755555555'),
(12, 'fahim2487', '$2y$10$qLMCQQodj2pADUpMfziWiOnMAc2YY7Ae8BXIM8oJsQKigeQLRL9Yy', 'durjoy', 'durjoygfd@gmail.com', '01712345789'),
(13, 'fahim41', '$2y$10$cFUBRUM4zlRKrARRALNoD./VpTvd/H3uhQ7.eL4Ws9hBsd183zKAa', 'Mahi', 'fffffffffffff@gmail.com', '01852211282'),
(14, 'mahi54', '$2y$10$U/go9sK3SzmrZmFyJRLm0exj/bbuOX08tyZoWI.9uNrcwIo1vjy32', 'mamun4201', 'durjoy44@gmail.com', '01755557132'),
(15, 'mahi44', '$2y$10$g12v0oecwRzkcySgIli8h.eVWg0kWDF5RRv1ktnNYVt/dm6YeNYn2', 'Fahim Mahmud Bhuiyan4', 'farhan4@gmail.com', '01755545324'),
(16, 'mahiaaaaaaaaa', '$2y$10$Yu8CikLvBlVHekW8Y27bcuOJMyzNeKw1LaWW1TPNHE2DPqOvtF5v.', 'Fahim Mahmud', 'fahim.mashi@yahoo.com', '01850311782'),
(18, 'admin4', '$2y$10$sKlZvxN1BpfgzA7AUtf4XOkVgCAMgkmEozU8k.1jVoJSy3aP2jpx2', 'Mahi', 'durjo4444y@gmail.com', '01822211282'),
(19, 'admin4', '$2y$10$HWGQkj/rTAWz4zTLlwGHMeNa7OqCI7LmTaTYrFb./GUrC8tcgmtwi', 'Mahi', 'durjo4444y@gmail.com', '01822211282'),
(20, 'mahi444', '$2y$10$MbDSDyeEX04XlvOoJUUaCOSlt1iYzn3saajepcMHGamStSOuBbn6C', 'Fahim', 'fahim.ma1hi@yahoo.com', '01853333282'),
(21, 'durjoy8841', '$2y$10$mM6QNELntVjq0bbKXFyPPu79nutADzdNIUtVi60jtkys7keCNeGcC', 'durjoy', 'durjoy555@gmail.com', '01811311282');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `counselor_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `session_date` date DEFAULT NULL,
  `session_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `counselor_id`, `client_id`, `session_date`, `session_notes`) VALUES
(1, 1, 1, '2023-11-11', 'Mental Health Issue; Preferable Time: 6:15 PM'),
(11, 3, 1, '2023-11-11', 'Mental Health Issue Preferable Time: 6:30 PM'),
(12, 1, 1, '2023-11-16', 'Mental Health Issue Preferable Time: 6:15 PM'),
(14, 2, 4, '2023-11-13', 'Preferable Time: 6:15 PM'),
(16, 1, 1, '2023-11-24', 'Urgent Preferable Time: 6 PM'),
(18, 1, 1, '2023-12-26', '6:45 PM; I am Mentally Sick. I need Help'),
(31, 1, 1, '2023-12-27', '6:45 PM; I am Mentally Sick. I need Help'),
(32, 1, 1, '2023-12-28', 'Urgent Preferable Time: 6 PM'),
(33, 1, 13, '2023-12-29', 'Urgent Preferable Time: 6 PM'),
(36, 1, 1, '2023-12-30', '7PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselor_ratings`
--
ALTER TABLE `counselor_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counselor_id` (`counselor_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `counselor_id` (`counselor_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counselor_id` (`counselor_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counselor_ratings`
--
ALTER TABLE `counselor_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counselor_ratings`
--
ALTER TABLE `counselor_ratings`
  ADD CONSTRAINT `counselor_ratings_ibfk_1` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`id`),
  ADD CONSTRAINT `counselor_ratings_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`id`),
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
