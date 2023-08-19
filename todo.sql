-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 05:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(5, 'MST SHALPY BAGUM12', 'iubat21103033@gmail.com', '2023-08-19 10:06:57', '2023-08-19 06:06:22'),
(6, 'MST SHALPY BAGUM', 'iubat21103033@gmail.com', '2023-08-19 10:07:03', '2023-08-19 10:07:03'),
(7, 'khairul', 'arifajahansrabony@gmail.com', '2023-08-19 10:42:11', '2023-08-19 10:42:11'),
(8, 'khairul', 'arifajahansrabony@gmail.com', '2023-08-19 10:43:51', '2023-08-19 10:43:51'),
(9, 'khairul', 'arifajahansrabony@gmail.com', '2023-08-19 10:44:00', '2023-08-19 10:44:00'),
(10, 'rifat', 'rifat@gmail.com', '2023-08-19 10:45:25', '2023-08-19 10:45:25'),
(11, 'rifat', 'rifat@gmail.com', '2023-08-19 10:51:15', '2023-08-19 10:51:15'),
(17, 'rahul', 'rahul@gmail.com', '2023-08-19 11:17:45', '2023-08-19 11:17:45'),
(18, 'kjgvk', 'khairuloga24@gmail.com', '2023-08-19 11:33:42', '2023-08-19 11:33:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
