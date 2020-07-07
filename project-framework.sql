-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 03:46 PM
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
  `id_admin` varchar(32) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `tanggal_lahir_admin` varchar(16) NOT NULL,
  `jenis_kelamin_admin` varchar(16) NOT NULL,
  `alamat_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `tanggal_lahir_admin`, `jenis_kelamin_admin`, `alamat_admin`, `email_admin`, `password`) VALUES
('adm5f00259a5d0d5', 'Riwalsyam Ritonga', '16-02-2000', 'Laki-Laki', 'Jalan Terubuk dekat jalan cucut', 'riwalsyam.r18ti@mahasiswa.pcr.ac.id', '$2y$10$Ye/C8aVADE.z.doxWwWgtucP8cQQpFrLjUpqyOEsyJ/duIbraGdE6'),
('admform5f0031f0c029d', 'Fahturrahman Fauzi', '04-07-2020', 'Laki-Laki', 'Jalan Kakap Nomor 36A', 'fahturrahman18ti@mahasiswa.pcr.ac.id', '$2y$10$JhsfkwdHcmr4.aeeHJ.xBe6gHRerwAvGQX1258BLtvAGqJzH4Qpp2');

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
('brg5f001b5e9f5bc', 'Pisang ku belum masak', 'sang pisang enak rasanya', 'barang-1593843733.jpg'),
('brg5f0033fc8cab5', 'Keyboard', 'ini adalah keyboard baru riwal', 'barang-1593848828.jpg');

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
('usr5effa4ab95470', 'Riwalsyam Ritonga', '16-02-2000', 'Laki-Laki', 'Jalan Terubuk dekat jalan cucut', 'riwalsyam.r18ti@mahasiswa.pcr.ac.id', '$2y$10$IBDiQtT/98X/DdUPkn1fGOrr82mSCaF317sCC5Gu36ghjs.BnBiHq'),
('usr5f00c69171412', 'Ardy Junata', '05-07-2020', 'Laki-Laki', 'Tembilahan', 'ardy18ti@mahasiswa.pcr.ac.id', '$2y$10$8cznwN4jvVBfm8NcwopZIeUhdDOX7rdxJFaib3.TAo8ck3/6ceUiy'),
('usr5f00c6bbd3aaf', 'Jody Alief', '05-07-2020', 'Laki-Laki', 'Jalan Sekolah', 'jody18ti@Mahasiswa.pcr.ac.id', '$2y$10$3ofHr4GrCCiQeOfrog/uVuMLYJLwrUrjXkKhtpL5vYUKaEYTQ25g.'),
('usr5f00c6f901a27', 'Widya', '05-07-2020', 'Laki-Laki', 'Jalan Parit Indah', 'widya18ti@mahasiswa.pcr.ac.id', '$2y$10$VCBRu6QNm4/S7eN821.ZfeyvNNnNKTzGV4BqK93U9DS3./Jy692Ey'),
('usr5f00c71a3d026', 'Wina', '05-07-2020', 'Laki-Laki', 'Kulim', 'wina18ti@mahasiswa.pcr.ac.id', '$2y$10$/R/B18HA2V/fjq8dRk3aVeRsw.9ohYMYXJQKGgrJ1R53ODuOihwLW'),
('usr5f00c748e1156', 'Haqi', '05-07-2020', 'Laki-Laki', 'Panam', 'ahmad18ti@mahasiswa.pcr.ac.id', '$2y$10$8Jh7gySsiHSEm6haEVJcKeNmQx3XQP.BKiQWMlgAd0/lvH.o6pFde'),
('usr5f00c76b5324a', 'Bobby', '05-07-2020', 'Laki-Laki', 'Rumbai', 'boby18ti@mahasiswa.pcr.ac.id', '$2y$10$Jvr.NAwnk3/L1RodgyNBNe8qP2E4BUxZCt19vaMap2WfwExJ9SHx6'),
('usr5f00c78bb08a8', 'Windi', '05-07-2020', 'Perempuan', 'Jalan Rumbai Selatan', 'windi18ti@mahasiswa.pcr.ac.id', '$2y$10$KuP0d/S4v8zdvl5KwkkeTuBcngyvog.mZTp6YMOjLs4IozF3cL9am'),
('usr5f00c7ae0bf12', 'Irwan', '05-07-2020', 'Laki-Laki', 'Taluk Kuantan', 'irwan18ti@mahasiswa.pcr.ac.id', '$2y$10$kcXLpL6WxGFSr2pNtsHcQeLVBlBA.4dGE9g46VsnyIW4BtiAEoQ0q');

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
