-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2024 at 04:48 PM
-- Server version: 5.7.33
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `id_wedding` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `isi_komentar` text NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `qty` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_wedding`, `nama`, `no_wa`, `isi_komentar`, `kehadiran`, `qty`) VALUES
(1, 1, 'test', '089845645641', 'lalal', 'hadir', 2),
(2, 1, 'test', 'aa', 'ts', 'hadir', 1),
(3, 1, 'test', 'aa', 'ts', 'hadir', 1),
(4, 1, 'asdasd', '8784534', 'asda', 'hadir', 1),
(5, 1, 'rohman', '088456456', 'test', 'hadir', 1),
(6, 1, 'lili', '088234234', 'testaaa', 'hadir', 2),
(7, 1, 'hahaha', '55555', 'tetototot', 'hadir', 2),
(8, 1, 'babab', '09456456', 'testaaaaabbb', 'hadir', 2),
(9, 1, 'bnakasd', '089697735852', 'gdfgdg', 'hadir', 1),
(10, 1, 'jashjda', '089845645641', 'asdasd', 'jasd', NULL),
(11, 1, '', '', '', 'tidak hadir', NULL),
(12, 1, '', '', '', 'tidak hadir', NULL),
(13, 1, '', '', '', 'hadir', 1),
(14, 1, '', '089697735852', 'askjdaksd', 'tidak hadir', NULL),
(15, 1, '', '089697735852', 'lalalal', 'hadir', 2),
(16, 1, 'jhgjhg78987987', 'kjhkhkj', 'asdasd', 'hadir', 1),
(17, 1, 'ucup', '0893778453745', 'asda\n', 'hadir', 2),
(18, 1, 'mang dadang', '1111', 'maaf yaa', 'tidak hadir', NULL),
(19, 1, 'sari roti', '089697735852', 'di endorss bang\n', 'hadir', 3),
(20, 1, 'aaa', '238742', 'test', 'hadir', 2),
(21, 1, 'lorem ', '0832423', 'asdasd', 'hadir', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
