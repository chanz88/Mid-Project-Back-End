-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 08:57 AM
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
-- Database: `perpustakaan`
--
CREATE DATABASE IF NOT EXISTS `perpustakaan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `perpustakaan`;

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`id`, `title`, `author`, `publisher`, `page`, `user_id`) VALUES
(5, 'Buku 1', 'Author', 'Publisher', 238, 1),
(6, 'Buku 2', 'Author 2', 'Publisher', 931, 5),
(9, 'Buku 4', 'budi', 'book corp', 434, 1),
(13, 'Normal Life', 'Toni', 'book corp', 222, 1),
(14, 'Buku 17', 'Wo', 'Publisher 2', 3, 1),
(15, 'Blu', 'Sun', 'Publisher', 555, 1),
(22, 'good day', 'doni', 'book corp', 222, 2),
(25, 'Buku 72', 'Tono Tono', 'book corp', 983, 2),
(26, 'Atomic Habits', 'James Clear', 'Random House Books', 320, 2);

-- --------------------------------------------------------

--
-- Table structure for table `datapengguna`
--

CREATE TABLE `datapengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapengguna`
--

INSERT INTO `datapengguna` (`id`, `username`, `password`) VALUES
(1, 'chandras', '0192023a7bbd73250516f069df18b500'),
(2, 'ca', '5435c69ed3bcc5b2e4d580e393e373d3'),
(4, 'chandra', '876f4590b3bafc8d8eca39beb3072d9d'),
(5, 'test', '00b6f59ef75cdce5f904de6d9bf1765c'),
(6, 'bot', 'fabcaa97871555b68aa095335975e613'),
(7, 'account', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'test3', '4bfe1b8f3dd03882fc394b93df365a7d'),
(9, 'chandra2', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `datapengguna`
--
ALTER TABLE `datapengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
