-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 01:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stylescape`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_histroy`
--

CREATE TABLE `sub_histroy` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `shipping_address`, `phone_no`, `pass`) VALUES
(1, 'Tushar Bhanushali', 'tusharbhanushali065@gmail.com', 'B-301 Dama Residency Gandhiwadi Umbergaon - 396170', '9377712927', '$2y$10$KzjTbN1Y6UjdA7DpOSnjgOgtLo3rhJQkDGR.cG08iY8jPaHZ1NNH2');

-- --------------------------------------------------------

--
-- Table structure for table `user_prefs`
--

CREATE TABLE `user_prefs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `What is your Age ?` varchar(255) NOT NULL,
  `Select your Gender` varchar(255) NOT NULL,
  `How do you dress for work ?` varchar(255) NOT NULL,
  `How about on the weekend ?` varchar(255) NOT NULL,
  `Would you like to receive more work or weekend attire ?` varchar(255) NOT NULL,
  `What size of tops do you wear ?` varchar(255) NOT NULL,
  `How do you like your shirts to fit ?` varchar(255) NOT NULL,
  `What is your pants size ?` varchar(255) NOT NULL,
  `How do you like your pants to fit ?` varchar(255) NOT NULL,
  `What is your shoe size ?` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_prefs`
--

INSERT INTO `user_prefs` (`id`, `email`, `What is your Age ?`, `Select your Gender`, `How do you dress for work ?`, `How about on the weekend ?`, `Would you like to receive more work or weekend attire ?`, `What size of tops do you wear ?`, `How do you like your shirts to fit ?`, `What is your pants size ?`, `How do you like your pants to fit ?`, `What is your shoe size ?`) VALUES
(1, 'tusharbhanushali065@gmail.com', '22', 'female', 'Business and Casual', 'Stylish Casual', 'Mostly Weekend Attire', 'LARGE', 'MODERN FIT', '31', 'SLIM FIT', '310');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_histroy`
--
ALTER TABLE `sub_histroy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_prefs`
--
ALTER TABLE `user_prefs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_histroy`
--
ALTER TABLE `sub_histroy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_prefs`
--
ALTER TABLE `user_prefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
