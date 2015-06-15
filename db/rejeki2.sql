-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 12:04 PM
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
  `stok` int(3) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `diskon` float NOT NULL DEFAULT '0',
  `bes_seller` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kategori`
--

INSERT INTO `detail_kategori` (`cid`, `gid`, `nama`, `satuan`, `harga`, `stok`, `ukuran`, `gambar`, `keterangan`, `diskon`, `bes_seller`) VALUES
(28, 124, 'cubitus', 'pcs', 35000, 15, 'L,S,M', '5_cubitus1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et augue sapien, ac consequat enim. Maecenas tincidunt ultrices enim, et euismod orci sollicitudin nec. Ut consequat leo sit amet massa luctus ac varius sapien lacinia. Nullam lorem tortor, vehicula fermentum consequat sed, auctor et quam. Donec nec ipsum dolor, in semper felis. Curabitur arcu ligula, aliquam in accumsan sit amet,', 0, '0'),
(28, 125, 'tidak diketahui', 'pcs', 25000, 20, 'L,S,M,XL', '5_baju-anak-hub_ibu-Retno_-0815-7873-9133.jpg', 'Baju anak dengan bahan katun tidak panas ketika di pakai', 10, '1'),
(30, 126, 'PHP Mysql Programming', 'pcs', 50000, 35, '-', '1_phpmysqlprogrammingfortheabsolutebeginner.jpg', 'Pemrograman PHP dan Mysql', 0, '0'),
(31, 127, 'Mysql 5 For Dummy', 'pcs', 85000, 40, '-', '1_23846400.png', 'Belajar Mysql 5 untuk pemula', 2.3, '1'),
(30, 128, 'Mastering PHP tips dan trik', 'pcs', 125000, 12, '-', '1_cepat-mudah-small.png', 'Cara mudah dan cepat mastering pemrograman PHP', 0, '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kab_kota`
--

INSERT INTO `kab_kota` (`id_kab`, `id_prop`, `nmkab`, `id_neg`) VALUES
(29, 1, 'Loksumawe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`cid` int(11) NOT NULL,
  `id_seller` int(5) DEFAULT NULL,
  `nama` char(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`cid`, `id_seller`, `nama`) VALUES
(28, 5, 'Pakaian Anak'),
(29, 5, 'Baju Gamis'),
(30, 1, 'Buku PHP'),
(31, 1, 'Buku MySql'),
(32, 2, 'Lampu Bohlam'),
(33, 2, 'Laptop');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `user_id`, `password`, `nama`, `jk`, `email`, `alamat`, `no_hp`, `no_tlprmh`, `kota`, `kdpos`, `propinsi`, `negara`, `gbr_ktp`, `foto`, `status`, `golongan`) VALUES
(1, 'arifsavutage', 'bc000ea9d77b4c04b972bda114fd3a9f', 'Juniar Arif Wicaksono', 'Laki-laki', 'arifsautage@gmail.com', 'Boja', '081390559997', '0294573265', 'Kendal', '51381', 'Jawa Tengah', 'Indonesia', 'ktp_arifsavutage.jpg', 'arifsavutage.jpg', 1, 3),
(2, 'miracleass', '25d55ad283aa400af464c76d713c07ad', 'Deny Nur Arifin', '', 'myrachel@ovi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3),
(3, 'yunias', '5e8667a439c68f5145dd2fcbecf02209', 'Yuni Astuti ', 'perempuan', 'yunias@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3),
(4, 'budbud', 'f638f4354ff089323d1a5f78fd8f63ca', 'Budi Raharjo', 'Laki-laki', 'cakbud@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3),
(5, 'indahaja', '25d55ad283aa400af464c76d713c07ad', 'Indah Nurwati', 'perempuan', 'iendah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nopic.png', 0, 3);

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
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_system` enum('0','1') NOT NULL DEFAULT '0',
  `nohp` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `negara` int(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `namabank` varchar(50) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `pemilikrek` varchar(50) NOT NULL,
  `kat` varchar(100) NOT NULL,
  `newsletter` varchar(50) NOT NULL,
  `SMS` varchar(50) NOT NULL,
  `website` varchar(500) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `passtrx` varchar(32) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `gbr_ktp` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `golongan` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `nama_toko`, `username`, `password`, `tgl_registrasi`, `nama`, `alamat`, `status_system`, `nohp`, `pin`, `token`, `negara`, `provinsi`, `namabank`, `cabang`, `pemilikrek`, `kat`, `newsletter`, `SMS`, `website`, `norek`, `email`, `ket`, `passtrx`, `kota`, `kecamatan`, `kodepos`, `gbr_ktp`, `foto`, `npwp`, `golongan`) VALUES
(1, 'Jendela Ilmu', 'seller1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2015-04-13', 'Seller ke-1', '', '1', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 'seller1@gmail.com', '', '', '', '', 0, NULL, 'nopic.png', NULL, 2),
(2, 'Sinar Barokah Elektronik', 'seller2@yahoo.co.id', '25d55ad283aa400af464c76d713c07ad', '2015-05-11', 'Seller ke-2', '', '1', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 'seller2@yahoo.co.id', '', '', '', '', 0, NULL, 'nopic.png', NULL, 2),
(3, 'Bangun Jaya Abadi', 'seller3@ovi.com', '25d55ad283aa400af464c76d713c07ad', '2015-06-12', 'seller ke-3', '', '0', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 'seller3@ovi.com', '', '', '', '', 0, NULL, 'nopic.png', NULL, 2),
(4, 'Toko Batu Mulia', 'wahid@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '2015-06-12', 'Wahidin', '', '0', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 'wahid@yahoo.com', '', '', '', '', 0, NULL, 'nopic.png', NULL, 2),
(5, 'baju distro', 'dimasaulia@yahoo.co.id', '25d55ad283aa400af464c76d713c07ad', '2015-06-12', 'dimas aulia', 'Jl. Kelud Raya 76 D', '1', '0853250000', 7451254, 0, 8, '1', 'Mandiri', 'loksumawe', 'dimas aulia', '', '', '', '', '13500212354', 'dimasaulia@yahoo.co.id', '', '', '29', 'aceh tengah', 12345, NULL, 'nopic.png', NULL, 2);

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
MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
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
MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `id_seller` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
