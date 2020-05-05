-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 11:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13275481_corono_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coronocase`
--

CREATE TABLE `coronocase` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coronocase`
--

INSERT INTO `coronocase` (`id`, `username`, `email`, `mobile`, `symp`, `message`) VALUES
(1, 'asdf', 'asdfas@gmail.com', '6263200671', 'cold,fever,', 'fdasfassadfasdfasdfasdfasdfasdfasfasdfasdf'),
(2, 'asdfasd', 'asdfasd@gmail.com', '6263200671', 'cold,fever,breath,', 'hybb this i sthe testing'),
(3, 'shaikh', 'shaikh@gmail.com', '9770269599', 'cold,fever,breath,', 'i am felling unwell today'),
(4, 'sallem', 'sallem@gmail.com', '7869007484', 'fever,', 'today tsefasdfnlka;sdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coronocase`
--
ALTER TABLE `coronocase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coronocase`
--
ALTER TABLE `coronocase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
