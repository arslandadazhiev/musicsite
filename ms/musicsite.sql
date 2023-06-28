-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2023 at 06:52 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(3) NOT NULL,
  `cover` varchar(32) NOT NULL,
  `track_file` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `artist` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `cover`, `track_file`, `title`, `artist`) VALUES
(1, 'image 5.png', 'Oxxxymiron - Грязь', 'Грязь', 'Oxxxymiron'),
(2, 'image 6.jpg', 'Мэйби Бэйби - Дакимакура', 'Дакимакура', 'Мэйби Бэйби'),
(3, 'a1378537962_10.jpg', 'Otoboke Beaver - Love Is Short', 'Love Is Short', 'Otoboke Beaver'),
(4, 'image 8.png', 'Tyler, The Creator - Her', 'Her', 'Tyler, The Creator'),
(5, 'image 11.png', '1.Kla$ - Сукины дети', 'Сукины дети', '1.Kla$'),
(6, 'image 7.png', 'Black Sabbath - Paranoid', 'Paranoid', 'Black Sabbath');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
