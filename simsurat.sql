-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 08:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id_surat` bigint(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `sifat` enum('BIASA','RAHASIA','SANGAT RAHASIA','SEGERA') NOT NULL,
  `date_entry` datetime NOT NULL,
  `id_surat_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id_surat`, `tgl_surat`, `perihal`, `sifat`, `date_entry`, `id_surat_id`) VALUES
(1, '2020-12-25', 'Surat Pemberatahuan Penolakan Permohonan Data a.n Indah P', 'RAHASIA', '2020-12-25 11:12:03', 1),
(2, '2020-12-10', 'Surat Keterangan Kerja (Ana Yana)', 'RAHASIA', '2020-12-25 11:12:23', 0),
(3, '2020-12-25', 'Surat Permohonan Pinjam Tempat Pelaksanaan kegiatan pemeriksaan rapid test bersama Dishub Kab. Batang', 'SEGERA', '2020-12-25 11:12:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_surat` bigint(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `perihal` text NOT NULL,
  `sifat` enum('BIASA','RAHASIA','SANGAT RAHASIA','SEGERA') NOT NULL,
  `date_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_surat`, `tgl_surat`, `tgl_diterima`, `perihal`, `sifat`, `date_entry`) VALUES
(2, '2020-12-12', '2020-12-23', 'Permohonan Data 1', 'RAHASIA', '2020-12-23 19:12:46'),
(3, '2020-12-10', '2020-12-26', 'Surat Lamaran Pekerjaan', 'BIASA', '2020-12-26 11:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_pendek` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `nama_pendek`, `username`, `password`) VALUES
(1, 'Hani Mauliza', 'Hani', 'hani', '76e105c3a61db1b3f13207774aeccc3c');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_suratkeluar`
-- (See below for the actual view)
--
CREATE TABLE `view_suratkeluar` (
`id_surat` bigint(20)
,`tgl_surat` date
,`perihal` text
,`sifat` enum('BIASA','RAHASIA','SANGAT RAHASIA','SEGERA')
,`date_entry` datetime
,`id_surat_id` bigint(20)
,`tgl_surat_sm` date
,`perihal_sm` text
);

-- --------------------------------------------------------

--
-- Structure for view `view_suratkeluar`
--
DROP TABLE IF EXISTS `view_suratkeluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_suratkeluar`  AS  select `a`.`id_surat` AS `id_surat`,`a`.`tgl_surat` AS `tgl_surat`,`a`.`perihal` AS `perihal`,`a`.`sifat` AS `sifat`,`a`.`date_entry` AS `date_entry`,`a`.`id_surat_id` AS `id_surat_id`,(select `b`.`tgl_surat` from `tb_suratmasuk` `b` where (`a`.`id_surat_id` = `b`.`id_surat`)) AS `tgl_surat_sm`,(select `b`.`perihal` from `tb_suratmasuk` `b` where (`a`.`id_surat_id` = `b`.`id_surat`)) AS `perihal_sm` from `tb_suratkeluar` `a` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
