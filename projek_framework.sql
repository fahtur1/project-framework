-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2020 at 10:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(32) NOT NULL,
  `nama_barang` varchar(32) NOT NULL,
  `deskripsi_barang` varchar(64) NOT NULL,
  `gambar_barang` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `id_kepunyaan` varchar(32) NOT NULL,
  `id_pembeli` varchar(32) NOT NULL,
  `status` int(16) NOT NULL,
  `tanggal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(32) NOT NULL,
  `nama_pembeli` varchar(64) NOT NULL,
  `tanggal_lahir_pembeli` varchar(16) NOT NULL,
  `jenis_kelamin_pembeli` varchar(16) NOT NULL,
  `alamat_pembeli` varchar(64) NOT NULL,
  `email_pembeli` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `tanggal_lahir_pembeli`, `jenis_kelamin_pembeli`, `alamat_pembeli`, `email_pembeli`, `password`) VALUES
('usr5efa6d1e0b3f1', 'FahturRahman Fauzi', '2020-06-30', 'laki-laki', 'Jalan Kakap Nomor 36A', 'fahturrahman18ti@mahasiswa.pcr.ac.id', '$2y$10$gKuMVZarBR0QYiqad/dycu7Cvd/BImrB4qiB7rLvz8PMJCvrJu5QC'),
('usr5efaa24a7b8ee', 'Jody Prismart', '2020-06-30', 'laki-laki', 'Jalan Kakap Nomor 36A', 'jody18ti@Mahasiswa.pcr.ac.id', '$2y$10$dncHxIQYwjsFuvs7wyYK2.VbEozfgKqYWHWt5EyH6wVlvyY0TiMme');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` varchar(32) NOT NULL,
  `nama_penjual` varchar(64) NOT NULL,
  `jenis_kelamin_penjual` varchar(16) NOT NULL,
  `tanggal_lahir_penjual` varchar(16) NOT NULL,
  `alamat_penjual` varchar(64) NOT NULL,
  `email_penjual` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(32) NOT NULL,
  `id_barang` varchar(32) NOT NULL,
  `id_pembeli` varchar(32) NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(16) NOT NULL,
  `catatan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD PRIMARY KEY (`id_kepunyaan`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
