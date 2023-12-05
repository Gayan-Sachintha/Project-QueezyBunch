-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2023 at 07:42 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queezybunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `playerID` varchar(100) NOT NULL,
  `score` int NOT NULL,
  `datentime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `playerID`, `score`, `datentime`) VALUES
(7, 's@gmail.com', 0, '2023-12-04 07:35:29'),
(6, 's@gmail.com', 3, '2023-12-04 07:34:58'),
(5, 's@gmail.com', 3, '2023-12-04 07:32:18'),
(8, 's@gmail.com', 0, '2023-12-04 07:36:00'),
(9, 's@gmail.com', 4, '2023-12-04 07:36:32'),
(10, 's@gmail.com', 5, '2023-12-04 07:37:05'),
(11, 's@gmail.com', 0, '2023-12-04 07:37:36'),
(12, 's@gmail.com', 0, '2023-12-04 07:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullName`, `email`, `age`, `password`) VALUES
('Gayan Sachintha', 's@gmail.com', 23, '$2y$10$.Yq4CPkIcEGQT09.fQFt5eHDUnjhHBRiJ3OcUA6in53QiTRNYH3Z.'),
('Marapana', 'thushani@gmail.com', 78, '$2y$10$JUksl/onEyUwdKLuKqP8BOk6PhTjOIMzwXMolrGomYqIbDJSXb/bi'),
('fanta', 'fanta.hustler@gmail.com', 23, '$2y$10$rhjQ/bhm.tLSg72MK1aGj.nhy4Ftp05uN7x5Uuu/rG7CQOjkt37h2'),
('Kottawa Gamage Gayan Sachintha', 'gayan@gmail.com', 24, '$2y$10$Nd4XFeM3XdubgjmYREmIEOdU5BSg8nurXzH90CdTp06Fwbd6eXr/6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
