-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2024 at 05:37 AM
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
-- Database: `project5`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `username`) VALUES
('ddent8986@tuskegee.edu', '$2y$10$agX7BL88lQp6mBK6FlCqjOC5c1flcrRQnHxinfhuSEBv3siIKLNJK', 'ddent8986'),
('ddent8986@tuskegee.edu', '$2y$10$uuuCCZKCdZgk42b3ow239ufYCaXt5MTFqGmS/OOv8O9Ehw9IhBE3q', 'ddent8986'),
('dkiad@yahoo.com', '$2y$10$5ENUEIVkzaMUbIg896HTz.irsFqXZ.b/Au64b53qLOvQJqEsQVHF.', 'dkiad'),
('jjmornoe@gmail.com', '$2y$10$Ip7DRnZ8u2MOZtjQFCLPo.1JN7dNj3FgmcVbakX/yAu7wOUFeUnla', 'jmonroe99'),
('dkiadenttt@yahoo.com', '$2y$10$.rUxpcSzJq.yE2vpUQf2cO8AAKyBJPa9ysBgqLSPg7hAaimh5LCbW', 'dkiad'),
('ddent8986@tuskegee.edu', '$2y$10$8jAescAtW7SeLOK0HbIxFOwFRFZkiUvI1NSwPMSDzt3g7bKJTVk3.', 'dkiad'),
('Test@gmail.com', 'password', 'Test'),
('Test@gmail.com', 'password', 'Test'),
('Demo@gmail.com', 'password', 'Demo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
