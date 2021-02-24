-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 04:33 AM
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
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kompetensi_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
('K0001', 'XII RPL', 'Rekayasa Perangkat Lunak'),
('K0002', 'XII KIMIA INDUSTRI', 'KIMIA INDUSTRI'),
('K0003', 'XII FARMASI ', 'Farmasi Klinis dan Komunitas'),
('K0004', 'XI RPL', 'Rekayasa Perangkat Lunak'),
('K0005', 'XI Kimia Industri', 'Kimia Industri'),
('K0006', 'XI Farmasi', 'Farmasi Klinis dan Komunitas'),
('K0007', 'X RPL', 'Rekayasa Perangkat Lunak'),
('K0008', 'XI Kimia Industri', 'Kimia Industri'),
('K0009', 'X Farmasi', 'Farmasi Klinis dan Komunitas');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `kode_pembayaran` varchar(50) NOT NULL,
  `id_petugas` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(50) NOT NULL,
  `tahun_bayar` varchar(58) NOT NULL,
  `id_spp` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_pembayaran`, `id_petugas`, `nisn`, `jatuh_tempo`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`, `status`) VALUES
(85, 'B202004160001', '', '980', '2020-04-21', '2020-04-16', 'April 2020', '2020', 'S0001', '200000', 'Lunas'),
(86, '', '', '980', '2020-05-21', '0000-00-00', 'Mei 2020', '', 'S0001', '200000', 'Belum Bayar'),
(87, '', '', '980', '2020-06-21', '0000-00-00', 'Juni 2020', '', 'S0001', '200000', 'Belum Bayar'),
(88, '', '', '980', '2020-07-21', '0000-00-00', 'Juli 2020', '', 'S0001', '200000', 'Belum Bayar'),
(89, '', '', '980', '2020-08-21', '0000-00-00', 'Agustus 2020', '', 'S0001', '200000', 'Belum Bayar'),
(90, '', '', '980', '2020-09-21', '0000-00-00', 'September 2020', '', 'S0001', '200000', 'Belum Bayar'),
(91, '', '', '980', '2020-10-21', '0000-00-00', 'Oktober 2020', '', 'S0001', '200000', 'Belum Bayar'),
(92, '', '', '980', '2020-11-21', '0000-00-00', 'November 2020', '', 'S0001', '200000', 'Belum Bayar'),
(93, '', '', '980', '2020-12-21', '0000-00-00', 'Desember 2020', '', 'S0001', '200000', 'Belum Bayar'),
(94, '', '', '980', '2021-01-21', '0000-00-00', 'Januari 2021', '', 'S0001', '200000', 'Belum Bayar'),
(95, '', '', '980', '2021-02-21', '0000-00-00', 'Februari 2021', '', 'S0001', '200000', 'Belum Bayar'),
(96, '', '', '980', '2021-03-21', '0000-00-00', 'Maret 2021', '', 'S0001', '200000', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
('', 'tes', 'tes', 'tes', 'admin'),
('P0002', 'petugas', 'petugas', 'Mizuki', 'petugas'),
('P0003', 'admin', 'admin', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nis` char(13) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kompetensi_keahlian` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` varchar(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `nominal_bayar` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama`, `id_kelas`, `nama_kelas`, `kompetensi_keahlian`, `alamat`, `no_telp`, `id_spp`, `tahun_ajaran`, `nominal_bayar`) VALUES
(8, '980', '999', 'Susiws', 'K0001', 'XII RPL A', 'Rekayasa Perangkat Lunak', 'yhjkl', '7890', 'S0001', '2020/2021', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` varchar(50) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `nominal` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
('S0001', '2020/2021', 200000),
('S0002', '2019/2020', 200000),
('S0003', '2018/2019', 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `id_spp` (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
