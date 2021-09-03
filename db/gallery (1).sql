-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 03:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frames`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `idGallery` int(11) NOT NULL,
  `titleGallery` longtext NOT NULL,
  `imgFullNameGallery` longtext NOT NULL,
  `orderGallery` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`idGallery`, `titleGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(21, 'Gallery1', 'sushantframes.60c4ad8c3069b5.36886902.jpg', '1'),
(22, 'Gallery2', 'sushantframes.60c4ad9e88e309.31991140.jpg', '2'),
(23, 'Gallery3', 'sushantframes.60c4adaee913e6.38819137.jpg', '3'),
(24, 'Gallery4', 'sushantframes.60c4adeef1bd98.06560795.jpg', '4'),
(25, 'Gallery5', 'sushantframes.60c4ae666b14c3.63526476.jpg', '5'),
(26, 'Gallery5', 'sushantframes.60c4ae754feae7.27439084.jpg', '6'),
(27, 'Gallery6', 'sushantframes.60c4ae81e41013.91900561.jpg', '7'),
(28, 'Gallery7', 'sushantframes.60c4ae9b0ed904.73327096.jpg', '8'),
(33, 'Gallery8', 'sushantframes.60c4b09cc72dd1.61939015.jpg', '9'),
(34, 'Gallery9', 'sushantframes.60c4b0acc1c1a8.69018871.jpg', '10'),
(35, 'Gallery10', 'sushantframes.60c4b0ddd3fb70.79834455.jpg', '11'),
(36, 'Gallery11', 'sushantframes.60c4b0f4277773.32606732.jpg', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idGallery`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
