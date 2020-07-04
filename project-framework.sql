-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 08:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(64) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('adm5eff8c8b85803', 'Riwalsyam Ritonga', 'riwal', '$2y$10$WmkBye.yIn00WkPKzUzg4uRUG/QMr2giMW3XwDAO97ejjT6PxnklC');

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

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi_barang`, `gambar_barang`) VALUES
('brg5f001b5e9f5bc', 'Pisang ku belum masak', 'sang pisang enak rasanya', 'barang-1593843733.jpg');

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
('usr5eff9b3fcc4e2', 'Fahturrahman Fauziiiiii', '04-07-2020', 'Laki-Laki', 'Jalan Kakap Nomor 36A', 'fahturrahman18ti@mahasiswa.pcr.ac.id', '$2y$10$50G9VMZZbrO9pgGuqmV4heRU.T48pFxlbo/0h3.u7A8OSRhV6sHv6'),
('usr5effa4ab95470', 'Riwalsyam Ritonga', '16-02-2000', 'Laki-Laki', 'Jalan Terubuk dekat jalan cucut', 'riwalsyam.r18ti@mahasiswa.pcr.ac.id', '$2y$10$IBDiQtT/98X/DdUPkn1fGOrr82mSCaF317sCC5Gu36ghjs.BnBiHq');

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
  `email_penjual` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `jenis_kelamin_penjual`, `tanggal_lahir_penjual`, `alamat_penjual`, `email_penjual`, `password`) VALUES
('sellr5effad02edbd3', 'Fahturrahman Fauzi', 'Laki-Laki', '04-07-2020', 'Jalan Kakap Nomor 36AB', 'fahturrahman18ti@mahasiswa.pcr.ac.id', '$2y$10$9Py2E0BLQ0BWhbq9icy81OEagcmo7hNNx07yGcmpv1rmRVdQjm24e');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
