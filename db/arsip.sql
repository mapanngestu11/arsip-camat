-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 05:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id_kategori` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_surat`
--

INSERT INTO `kategori_surat` (`id_kategori`, `nama`) VALUES
(1, 'Surat Undangan'),
(2, 'Surat Izin');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` varchar(13) NOT NULL,
  `tanggal` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id_pesan`, `nama`, `no_hp`, `perihal`, `pesan`, `waktu`, `tanggal`) VALUES
(2, 'maulana', '081234', 'nanya', 'halo', '29-Sep-20', '03:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `pengirim` varchar(20) DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `waktu_terima` varchar(13) DEFAULT NULL,
  `perihal` text,
  `nomor` varchar(10) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `tgl_post` varchar(15) DEFAULT NULL,
  `waktu_post` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis`, `kode`, `pengirim`, `penerima`, `asal`, `keterangan`, `kategori`, `tgl_terima`, `waktu_terima`, `perihal`, `nomor`, `tgl_kirim`, `tgl_post`, `waktu_post`, `foto`) VALUES
(1, 'surat-masuk', NULL, 'jajan', '$penerima', '$asal', '$keterangan', '$kategori', '2020-09-28', '02:37:52', 'halo', '012', NULL, '29-Sep-20', NULL, NULL),
(26, 'surat-keluar', NULL, 'kirito', 'kamu', NULL, 'baru', 'Surat Unda', NULL, NULL, 'nanya', '012313', '2020-09-29', '29-Sep-20', '10:10:23', NULL),
(27, 'disposisi', NULL, 'kirito', 'kita', '', 'yeyeye', '', '2020-09-29', NULL, 'nanya', '88', NULL, '29-Sep-20', '10:43:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tampilan`
--

CREATE TABLE `tampilan` (
  `id_tampilan` int(5) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `wallpaper` varchar(100) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `kode` int(2) DEFAULT NULL,
  `tulisan` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tampilan`
--

INSERT INTO `tampilan` (`id_tampilan`, `jenis`, `nama`, `wallpaper`, `judul`, `kode`, `tulisan`, `gambar`) VALUES
(4, 'wallpaper', 'gambar1', '233-bahan.jpeg', '', NULL, NULL, NULL),
(5, 'wallpaper', 'gambar2', '167-bahan10.jpg', '', NULL, NULL, NULL),
(6, 'wallpaper', 'gambar3 ', '40-Desert.jpg', '', NULL, NULL, NULL),
(7, 'wallpaper', 'gambar4', '815-Penguins.jpg', '', NULL, NULL, NULL),
(8, 'tulisan', NULL, NULL, 'JUDUL 1', 1, 'satu dua tiga empat', '515-Jellyfish.jpg'),
(9, 'tulisan', NULL, NULL, 'JUDUL 2', 2, 'satu dua tiga empat', '191-Chrysanthemum.jpg'),
(10, 'tulisan', NULL, NULL, 'JUDUL3', 3, 'Satu dua tiga empat', '993-Koala.jpg'),
(11, 'tulisan', NULL, NULL, 'JUDUL4', 4, 'Satu dua tiga empat', '993-Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `hak_akses`, `tanggal`, `waktu`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '29-Sep-20', '04:27:18'),
(3, 'Staff', 'sekcam', '6f12b1f68ff03384638a3577d201bac8', 'sekcam', '29-Sep-20', '04:27:29'),
(4, 'sekcam', 'sekcam', '3de0c935622cc80ed0f5998c327036e5', 'sekcam', '29-Sep-20', '04:38:01'),
(5, 'camat', 'camat', 'e0dc1c969db5fa159c0e3ccc290e2314', 'camat', '29-Sep-20', '05:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tampilan`
--
ALTER TABLE `tampilan`
  ADD PRIMARY KEY (`id_tampilan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tampilan`
--
ALTER TABLE `tampilan`
  MODIFY `id_tampilan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
