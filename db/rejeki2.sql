-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 11:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rejeki2`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE IF NOT EXISTS `detail_kategori` (
  `cid` int(11) DEFAULT NULL,
`gid` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `satuan` varchar(25) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `diskon` float NOT NULL DEFAULT '0',
  `bes_seller` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `histori_member`
--

CREATE TABLE IF NOT EXISTS `histori_member` (
`id_hist` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `histori_seller`
--

CREATE TABLE IF NOT EXISTS `histori_seller` (
`id_hist` int(11) NOT NULL,
  `id_seller` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasa_kirim`
--

CREATE TABLE IF NOT EXISTS `jasa_kirim` (
`id_jasa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kab_kota`
--

CREATE TABLE IF NOT EXISTS `kab_kota` (
`id_kab` int(11) NOT NULL,
  `id_prop` int(11) DEFAULT NULL,
  `nmkab` varchar(50) DEFAULT NULL,
  `id_neg` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`cid` int(11) NOT NULL,
  `id_seller` int(5) DEFAULT NULL,
  `nama` char(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `no_tlprmh` varchar(20) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kdpos` varchar(10) DEFAULT NULL,
  `propinsi` varchar(30) DEFAULT NULL,
  `negara` varchar(30) DEFAULT NULL,
  `gbr_ktp` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `golongan` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `user_id`, `password`, `nama`, `jk`, `email`, `alamat`, `no_hp`, `no_tlprmh`, `kota`, `kdpos`, `propinsi`, `negara`, `gbr_ktp`, `foto`, `status`, `golongan`) VALUES
(1, 'arifsavutage', '25d55ad283aa400af464c76d713c07ad', 'Juniar Arif Wicaksono', 'Laki-laki', 'arifsavutage@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3),
(2, 'miracleass', '25d55ad283aa400af464c76d713c07ad', 'Deny Nur Arifin', '', 'myrachel@ovi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3),
(3, 'yunias', '5e8667a439c68f5145dd2fcbecf02209', 'Yuni Astuti ', 'perempuan', 'yunias@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3),
(4, 'budbud', 'f638f4354ff089323d1a5f78fd8f63ca', 'Budi Raharjo', 'Laki-laki', 'cakbud@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE IF NOT EXISTS `negara` (
`id_neg` int(11) NOT NULL,
  `nama_neg` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_neg`, `nama_neg`) VALUES
(8, 'Indonesia'),
(9, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `ongkos_kirim`
--

CREATE TABLE IF NOT EXISTS `ongkos_kirim` (
`id_ongkir` int(11) NOT NULL,
  `id_kab` int(11) DEFAULT NULL,
  `id_jasa` int(11) DEFAULT NULL,
  `harga` double NOT NULL DEFAULT '0',
  `id_prop` int(11) DEFAULT NULL,
  `id_neg` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `gid` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  `jumlah` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_pembeli`
--

CREATE TABLE IF NOT EXISTS `order_pembeli` (
`oid` int(11) NOT NULL,
  `id_seller` int(5) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `tot_kirim` double NOT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `jam_pesan` varchar(20) DEFAULT NULL,
  `id_ongkir` int(11) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kd_pos` varchar(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE IF NOT EXISTS `propinsi` (
`id_prop` int(11) NOT NULL,
  `propinsi` varchar(50) DEFAULT NULL,
  `id_neg` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`id_prop`, `propinsi`, `id_neg`) VALUES
(1, 'Aceh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
`id_seller` int(5) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_system` enum('0','1') NOT NULL DEFAULT '0',
  `nohp` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `namabank` varchar(50) NOT NULL,
  `PemilikRek` varchar(50) NOT NULL,
  `kat` varchar(100) NOT NULL,
  `newsletter` varchar(50) NOT NULL,
  `SMS` varchar(50) NOT NULL,
  `website` varchar(500) NOT NULL,
  `Norek` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `passtrx` varchar(32) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepost` int(11) NOT NULL,
  `gbr_ktp` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
 ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `histori_member`
--
ALTER TABLE `histori_member`
 ADD PRIMARY KEY (`id_hist`);

--
-- Indexes for table `histori_seller`
--
ALTER TABLE `histori_seller`
 ADD PRIMARY KEY (`id_hist`);

--
-- Indexes for table `jasa_kirim`
--
ALTER TABLE `jasa_kirim`
 ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `kab_kota`
--
ALTER TABLE `kab_kota`
 ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
 ADD PRIMARY KEY (`id_neg`);

--
-- Indexes for table `ongkos_kirim`
--
ALTER TABLE `ongkos_kirim`
 ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `order_pembeli`
--
ALTER TABLE `order_pembeli`
 ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `propinsi`
--
ALTER TABLE `propinsi`
 ADD PRIMARY KEY (`id_prop`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
 ADD PRIMARY KEY (`id_seller`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `histori_member`
--
ALTER TABLE `histori_member`
MODIFY `id_hist` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `histori_seller`
--
ALTER TABLE `histori_seller`
MODIFY `id_hist` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasa_kirim`
--
ALTER TABLE `jasa_kirim`
MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kab_kota`
--
ALTER TABLE `kab_kota`
MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
MODIFY `id_neg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ongkos_kirim`
--
ALTER TABLE `ongkos_kirim`
MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_pembeli`
--
ALTER TABLE `order_pembeli`
MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `propinsi`
--
ALTER TABLE `propinsi`
MODIFY `id_prop` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
MODIFY `id_seller` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
