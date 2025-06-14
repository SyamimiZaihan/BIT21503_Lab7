-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 12:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `matric` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `matric`, `name`, `password`, `role`) VALUES
(1, '02000', 'Nur Ariffin Mohd Zin', '$2y$10$teLvSZ55qGCaW4M8icEWFuAmBkSetfvUZYMvN60nmWDSg5PHJ15T2', 'lecturer'),
(3, 'A100', 'Ahmad', '$2y$10$xiOxfL/MP1wF.jbqdjojFuXEgFWVdNw2hY8M9bPq2PjyatMwr6TwS', 'student'),
(4, 'A101', 'Abu', '$2y$10$qY7h3Udn6Bw2WvZaYjGONOMqrEAWT7EflNNW68bhFHbmRCJn/jaBa', 'student'),
(5, 'A103', 'Ahmad Bin Abu', '$2y$10$4uadHVMoSK2NO4LXyR3OJOn2V3aPYtxD.W6TBVlOJshbVZ8zDTMiO', 'student'),
(8, 'CI230054', 'Nurizzati Syamimi Binti Zaihan', '$2y$10$t1enyzAnZQsJ5xvbOcQtQOSn0x.YQHhAyCb7R19FW0i4Rm4Kf3XK2', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matric` (`matric`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
