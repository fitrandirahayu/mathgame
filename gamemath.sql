-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2020 at 02:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamemath`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nama`, `email`, `skor`) VALUES
('1', '2@1', -10),
('1', '2@1', -10),
('1', '2@1', -10),
('a', '2@1', 0),
('1', '2@1', 0),
('a', 'a', 0),
('a', 'a', 0),
('fitrandi', 'fitrandirahayu1@gmail.com', 0),
('1', 'a', 0),
('fitrandirahayu', 'fitrandirahayu2@gmail.com', -10),
('fitrandirahayu', 'fitrandirahayu1@gmail.com', -10),
('fitrandirahayu', 'fitrandirahayu1@gmail.com', -10),
('fitrandirahayu', 'fitrandirahayu1@gmail.com', -10),
('fitrandirahayu', 'fitrandirahayu1@gmail.com', -10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
