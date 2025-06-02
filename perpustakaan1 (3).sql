-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 03:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Jabatan` enum('Admin','Perpustakawan') NOT NULL,
  `Status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `Id_anggota` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Tempat_lahir` varchar(100) NOT NULL,
  `Tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `Id` int(11) NOT NULL,
  `Id_kategori` int(11) NOT NULL,
  `Judul` varchar(200) NOT NULL,
  `Penggarang` varchar(200) NOT NULL,
  `Penerbit` varchar(200) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detailbuku`
--

CREATE TABLE `tabel_detailbuku` (
  `Id` int(10) NOT NULL,
  `Id_buku` int(10) NOT NULL,
  `Status` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detailpeminjaman`
--

CREATE TABLE `tabel_detailpeminjaman` (
  `Id` int(10) NOT NULL,
  `Id_peminjaman` int(10) NOT NULL,
  `Id_detailbuku` int(10) NOT NULL,
  `Tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `Id` int(100) NOT NULL,
  `Kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `Id` int(11) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `Id_anggota` int(11) NOT NULL,
  `Tanggal_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`Id_anggota`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_kategori` (`Id_kategori`);

--
-- Indexes for table `tabel_detailbuku`
--
ALTER TABLE `tabel_detailbuku`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_buku` (`Id_buku`);

--
-- Indexes for table `tabel_detailpeminjaman`
--
ALTER TABLE `tabel_detailpeminjaman`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_peminjaman` (`Id_peminjaman`,`Id_detailbuku`),
  ADD KEY `Id_detailbuku` (`Id_detailbuku`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_buku` (`Id_admin`,`Id_anggota`),
  ADD KEY `Id_anggota` (`Id_anggota`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD CONSTRAINT `tabel_anggota_ibfk_1` FOREIGN KEY (`Id_anggota`) REFERENCES `tabel_peminjaman` (`Id_anggota`);

--
-- Constraints for table `tabel_detailbuku`
--
ALTER TABLE `tabel_detailbuku`
  ADD CONSTRAINT `tabel_detailbuku_ibfk_1` FOREIGN KEY (`Id_buku`) REFERENCES `tabel_buku` (`Id`);

--
-- Constraints for table `tabel_detailpeminjaman`
--
ALTER TABLE `tabel_detailpeminjaman`
  ADD CONSTRAINT `tabel_detailpeminjaman_ibfk_1` FOREIGN KEY (`Id_detailbuku`) REFERENCES `tabel_detailbuku` (`Id`);

--
-- Constraints for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD CONSTRAINT `tabel_kategori_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `tabel_buku` (`Id_kategori`);

--
-- Constraints for table `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD CONSTRAINT `tabel_peminjaman_ibfk_1` FOREIGN KEY (`Id_anggota`) REFERENCES `tabel_anggota` (`id_anggota`),
  ADD CONSTRAINT `tabel_peminjaman_ibfk_2` FOREIGN KEY (`Id_admin`) REFERENCES `tabel_admin` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
