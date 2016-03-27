-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 06:39 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `yellow` int(9) NOT NULL,
  `red` int(9) NOT NULL,
  `remove` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `value`, `yellow`, `red`, `remove`) VALUES
(1, '@Rayhan', 'Rayhan', 0, 0, ''),
(2, '@Adnan', 'Adnan', 0, 0, ''),
(3, '@Sayed', 'Sayed', 0, 0, ''),
(4, '@Atique', 'Atique', 0, 0, ''),
(5, '@Santush', 'Santush', 0, 0, ''),
(6, '@Rajon', 'Rajon', 0, 0, ''),
(7, '@Tanvir', 'tanvir', 0, 0, ''),
(8, '@Siful', 'siful', 0, 0, ''),
(9, '@Shifat', 'Shifat', 0, 0, ''),
(10, '@Partho', 'Partho', 0, 0, ''),
(11, '@Rafsan', 'Rafsan', 0, 0, ''),
(12, '@Pranto ', 'Pranto ', 0, 0, ''),
(13, '@Junaed', 'Junaed', 0, 0, ''),
(14, '@Kawsar', 'Kawsar', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
