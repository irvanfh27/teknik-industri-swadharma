-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2018 at 01:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `thumb` varchar(50) NOT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `title`, `deskripsi`, `url`, `thumb`, `priority`) VALUES
(245, 'Presntasi', 'lagi presentasi alat', '1.jpeg', '', NULL),
(246, 'Judul', 'Deskripsi', '2.jpeg', '', NULL),
(247, 'Judul', 'Deskripsi', '3.jpeg', '', NULL),
(248, 'Judul', 'Deskripsi', '4.jpeg', '', NULL),
(249, 'Judul', 'Deskripsi', '5.jpeg', '', NULL),
(250, 'Judul', 'Deskripsi', '6.jpeg', '', NULL),
(251, 'Judul', 'Deskripsi', '7.jpeg', '', NULL),
(252, 'Judul', 'Deskripsi', '8.jpeg', '', NULL),
(253, 'Judul', 'Deskripsi', '9.jpeg', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
