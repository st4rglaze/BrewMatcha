-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `product_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `product_id` int(5) NOT NULL,
  `price` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`product_id`, `price`, `date`, `product_name`) VALUES
(3, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(4, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(5, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(6, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(7, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(8, '45.99', '2023-11-26', 'Al-Yamamah Coffee 500'),
(9, '79.99', '2023-11-26', 'Al-Yamamah Coffee 1000'),
(10, '25.99', '2023-11-26', 'Core Beans Mug'),
(11, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(12, '25.99', '2023-11-26', 'Core Beans Mug'),
(13, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(14, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(15, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(16, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(17, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(18, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(19, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(20, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(21, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250'),
(22, '24.99', '2023-11-26', 'Al-Yamamah Coffee 250');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'asdcxbbmm', '$2y$10$7dBrOI0Kb/ybN6C', 'primeet1@gmail.com'),
(2, 'nvbm', '$2y$10$PRA3EcV9uGE6juO', 'sdf'),
(3, 'osama', '$2y$10$nl3p4lqsH5Fy9Zp', 'os'),
(5, '2221', '$2y$10$BNQPJwI4E5m5oNi', '2342'),
(6, 'ooo', '$2y$10$hl27o/Ku8UlQX0R', 'ooo'),
(7, 'mmm', 'mmm', 'mmm'),
(8, 'osm', 'osm', 'osm@osm.com'),
(9, 'pup', 'pup', 'pup@pup'),
(10, 'nigger', 'nigger', 'nigger@gmail.com'),
(11, 'ahmad', 'ahmad', 'ahmad@ahmad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product_order` (`product_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
