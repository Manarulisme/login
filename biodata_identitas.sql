-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 02:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_identitas`
--

CREATE TABLE `biodata_identitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` char(30) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `lulusan` char(6) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kontak_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_identitas`
--

INSERT INTO `biodata_identitas` (`id`, `nama_lengkap`, `jk`, `alamat`, `lulusan`, `pekerjaan`, `kontak_hp`, `email`, `foto`, `flag`) VALUES
(1, 'Abdul Halim', 'Laki-laki', '<p>\r\n	Jalan Veteran RT 01 02</p>\r\n', '2015', 'Mahasiswa', '083817353484', 'abdulhalim@gmail.com', '', NULL),
(2, 'Fiki Firmansyah', 'Laki-laki', 'Jalan Manisi Kecamatan Cibiru Kota Bandung', '2013', 'Ngoding', '89896868', 'fikifirmassyah@gmail.com', '', 1),
(3, 'Lulu Almaknun', 'Perempuan', 'Brebes', '2014', 'Guru SD', '978675757', 'lulualmaknun@gmail.com', '', 1),
(4, 'Manarul', 'Laki-laki', 'Jalan Veteran RT 01 RW 02 Kelurahan Ciseureuh Kecamatan Purwakarta Kab Purwakarta 41118', '2015', 'Mahasiswa', 'manarulhuda5', 'manarulhuda57@gmail.com', '', 1),
(5, 'Novi Patihatun', 'Perempuan', 'Bekasi', '2015', 'Mahasiswa', '8997765567', 'novi@gmail.com', '', 1),
(6, 'Ucup', 'Laki-laki', 'wkwkw', '2014', 'kuli', 'admin@gmail.', 'admin@gmail.com', '', 1),
(2147483648, 'Manarul', 'Laki-laki', 'Jalan Vlashkh', '2013', 'Mahasiswa', '7675756463', 'manarulhuda57@gmail.com', 'abfc.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_identitas`
--
ALTER TABLE `biodata_identitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_identitas`
--
ALTER TABLE `biodata_identitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
