-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 10:45 AM
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
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`idbank` int(10) NOT NULL,
  `nmbank` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL,
  `an` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`idbank`, `nmbank`, `norek`, `an`) VALUES
(2, 'Mandiri', '1030001233232', 'PT. Rejeki Mall'),
(3, 'BCA', '8502223012', 'PT. Rejeki Mall');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`idbrand` int(9) NOT NULL,
  `idseller` int(9) NOT NULL,
  `nmbrand` varchar(50) NOT NULL,
  `gb_brand` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idbrand`, `idseller`, `nmbrand`, `gb_brand`) VALUES
(1, 1, 'Cubitus', '1_cubitus.jpg'),
(2, 1, 'Sinar Dunia', '1_sidu1.jpg'),
(3, 1, 'Kiky', '1_kikky1.png'),
(4, 2, 'Apple', '2_apple_01.jpg'),
(5, 2, 'Lenovo', '2_rating_lenovo_sh.jpg'),
(6, 3, 'elzatta', '3_Cover1.jpg'),
(7, 3, 'Arina', '3_Arinakecil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE IF NOT EXISTS `detail_kategori` (
  `cid` int(11) DEFAULT NULL,
`gid` int(11) NOT NULL,
  `idbrand` int(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `satuan` varchar(25) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `ukuran` varchar(15) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `diskon` float NOT NULL DEFAULT '0',
  `bes_seller` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kategori`
--

INSERT INTO `detail_kategori` (`cid`, `gid`, `idbrand`, `nama`, `satuan`, `harga`, `ukuran`, `warna`, `stok`, `gambar`, `keterangan`, `diskon`, `bes_seller`) VALUES
(1, 1, 1, 'Kaos Cubitus 1', 'Pcs', 105000, 'S,M,L', 'Oranye, Abu-abu, Biru, Kuning', 60, '1_cubitus-1.jpg', 'Baju nyaman dipakai dan berbahan halus, sehingga tidak menimbulkan iritasi kulit.', 2, '0'),
(2, 2, 2, 'Buku Tulis Sinar Dunia', 'Lusin', 35000, '-', '-', 60, '1_bukusidu1.jpg', 'Buku Tulis Isi 36 Lembar', 0, '0'),
(2, 3, 3, 'Buku Tulis Kiky', 'Lusin', 38000, '-', '-', 60, '1_kiky1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et augue sapien, ac consequat enim. Maecenas tincidunt ultrices enim, et euismod orci sollicitudin nec. Ut consequat leo sit amet massa luctus ac varius sapien lacinia. Nullam lorem tortor', 5, '0'),
(2, 4, 2, 'Buku Tulis Sinar Dunia 2', 'Lusin', 35000, '-', '-', 59, '1_sidu2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et augue sapien, ac consequat enim. Maecenas tincidunt ultrices enim, et euismod orci sollicitudin nec.', 0, '0'),
(2, 5, 2, 'Buku Tulis Sinar Dunia 3', 'Lusin', 35000, '-', '-', 59, '1_sidu3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et augue sapien, ac consequat enim. Maecenas tincidunt ultrices enim, et euismod orci sollicitudin nec. Ut consequat leo sit amet massa luctus ac varius sapien lacinia. Nullam lorem tortor, vehicula fermentum consequat sed, auctor et quam. Donec nec ipsum dolor, in semper felis. Curabitur arcu ligula, aliquam in accumsan sit amet, accumsan quis mi. Vestibulum cursus ipsum eu lorem malesuada suscipit.', 2.5, '0'),
(3, 6, 4, 'Macbook 001', 'Unit', 14000000, '-', 'Silver', 35, '2_macbook1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla posuere sem nec blandit. Nulla molestie varius ligula, vitae pellentesque dolor. Ut mollis id magna nec luctus. Nam efficitur tortor at mattis pharetra. Nam sagittis egestas fermentum. Integer ac orci in nisl porta aliquet. Nam laoreet egestas fermentum. Phasellus ac risus nibh.', 10, '0'),
(3, 7, 5, 'Lenovo Thinkpad 001', 'Unit', 7800000, '-', 'Black', 29, '2_Lenovo_thinkpad.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla posuere sem nec blandit. Nulla molestie varius ligula, vitae pellentesque dolor. Ut mollis id magna nec luctus. Nam efficitur tortor at mattis pharetra. Nam sagittis egestas fermentum. Integer ac orci in nisl porta aliquet. Nam laoreet egestas fermentum. Phasellus ac risus nibh.', 5, '0'),
(4, 8, 6, 'Kerudung 1', 'pcs', 125000, 'L,M,S', 'Merah, Hijau, Pink', 48, '3_Cover1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla posuere sem nec blandit. Nulla molestie varius ligula, vitae pellentesque dolor. Ut mollis id magna nec luctus. Nam efficitur tortor at mattis pharetra. Nam sagittis egestas fermentum. Integer ac orci in nisl porta aliquet. Nam laoreet egestas fermentum. Phasellus ac risus nibh', 0, '0'),
(4, 9, 7, 'Kerudung 2', 'pcs', 135000, 'L,M,S', 'Merah, Biru, Kuning', 45, '3_Arinakecil.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla posuere sem nec blandit. Nulla molestie varius ligula, vitae pellentesque dolor. Ut mollis id magna nec luctus. Nam efficitur tortor at mattis pharetra. Nam sagittis egestas fermentum.', 0, '0');

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
-- Table structure for table `iklan_banner`
--

CREATE TABLE IF NOT EXISTS `iklan_banner` (
`id_banner` int(10) NOT NULL,
  `idpkt_baner` int(10) NOT NULL,
  `nmiklan` varchar(50) NOT NULL,
  `pemesan` varchar(50) NOT NULL,
  `gbiklan` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_banner`
--

INSERT INTO `iklan_banner` (`id_banner`, `idpkt_baner`, `nmiklan`, `pemesan`, `gbiklan`, `status`) VALUES
(3, 2, 'Susu Bendera', 'Arif', 'bendera_coklat.jpg', 1),
(5, 2, 'Lampu Osram', 'PT. Lampu Terang', 'osram.jpg', 1),
(6, 1, 'Iklan Mbuh', 'Mbuh', 'BANNER-IKLAN-ORANGE-TV-SKR.jpg', 1),
(7, 6, 'hahaha', 'iaiaiai', 'BannerMain.jpg', 1),
(8, 3, 'Mac Snack Wrapp', 'Mc Donals', 'main_banner_en.jpg', 1),
(9, 4, 'Chop Chicken', 'KFC', '02-colonel-latest.jpg', 1),
(10, 6, 'Wow Telkomsel', 'PT. Telkomsel', 'web_banner_935x240.jpg', 1),
(11, 5, 'fitbar', 'Fitbar', 'fitbar.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `iklan_banner_paket`
--

CREATE TABLE IF NOT EXISTS `iklan_banner_paket` (
`idpkt_baner` int(10) NOT NULL,
  `nmbanner` varchar(50) NOT NULL,
  `posisi` int(2) NOT NULL,
  `hrgiklan` int(10) NOT NULL,
  `durasi` int(3) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_banner_paket`
--

INSERT INTO `iklan_banner_paket` (`idpkt_baner`, `nmbanner`, `posisi`, `hrgiklan`, `durasi`, `ket`) VALUES
(1, 'Banner 1', 1, 150000, 15, 'Atas Kanan 1'),
(2, 'Banner 2', 2, 100000, 10, 'Atas Kanan 2 (Slider)'),
(3, 'Banner 3', 3, 250000, 12, 'Tengah 1'),
(4, 'Banner 4', 4, 250000, 10, 'Tengah 2'),
(5, 'Banner 5', 5, 100000, 10, 'Tengah 3'),
(6, 'Banner 6', 6, 250000, 10, 'Bawah');

-- --------------------------------------------------------

--
-- Table structure for table `iklan_slider`
--

CREATE TABLE IF NOT EXISTS `iklan_slider` (
`idslide` int(10) NOT NULL,
  `nmiklan` varchar(30) NOT NULL,
  `gbslider` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_slider`
--

INSERT INTO `iklan_slider` (`idslide`, `nmiklan`, `gbslider`) VALUES
(3, 'Iklan 1', 'slide.jpg'),
(4, 'Iklan 2', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_kirim`
--

CREATE TABLE IF NOT EXISTS `jasa_kirim` (
`id_jasa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_kirim`
--

INSERT INTO `jasa_kirim` (`id_jasa`, `nama`) VALUES
(1, 'Reguler');

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
  `nama` char(30) DEFAULT NULL,
  `slugkat` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`cid`, `id_seller`, `nama`, `slugkat`) VALUES
(1, 1, 'Baju Anak - anak', 'baju-anak-anak'),
(2, 1, 'Buku Tulis', 'buku-tulis'),
(3, 2, 'Laptop', 'laptop'),
(4, 3, 'Pakaian Muslim Wanita', 'pakaian-muslim-wanita');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `id_pkt` int(3) NOT NULL,
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
  `golongan` int(1) NOT NULL,
  `memberpoin` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `id_pkt`, `user_id`, `password`, `nama`, `jk`, `email`, `alamat`, `no_hp`, `no_tlprmh`, `kota`, `kdpos`, `propinsi`, `negara`, `gbr_ktp`, `foto`, `status`, `golongan`, `memberpoin`) VALUES
(2, 1, 'arifsavutage', '07905a38596dff6ad49ded1028f9d7bf', 'Narto Soejono', 'Laki-laki', 'narto@gmail.com', 'Jl. Jenang Timur No. 1', '0852333322', '0294572125', '29', '513814', '1', '8', 'ktp_arifsavutage.jpg', 'arifsavutage.jpeg', 1, 3, 25),
(3, 3, 'john', '25d55ad283aa400af464c76d713c07ad', 'john mc fee', 'Laki-laki', 'john@example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blank-id-card.jpg', 'nopic.png', 0, 3, 20),
(4, 2, 'ani', '25d55ad283aa400af464c76d713c07ad', 'Ani Yulia', 'Laki-laki', 'ani@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blank-id-card.jpg', 'ani.jpg', 1, 3, 10),
(5, 1, 'dwi', '25d55ad283aa400af464c76d713c07ad', 'Dwi yahya', 'Laki-laki', 'dwiyahya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blank-id-card.jpg', 'nopic.png', 0, 3, 5),
(6, 1, 'gogon', '25d55ad283aa400af464c76d713c07ad', 'Gogon', 'Laki-laki', 'gogon@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blank-id-card.jpg', 'nopic.png', 1, 3, 5),
(7, 2, 'anindoet', '25d55ad283aa400af464c76d713c07ad', 'Ani Rhoma', 'perempuan', 'anindoet@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blank-id-card.jpg', 'nopic.png', 1, 3, 10),
(8, 2, 'batman', '25d55ad283aa400af464c76d713c07ad', 'Batman Bin Suparman', 'Laki-laki', 'batman@rocketmail.com', 'Jl. Dibangun Dulu No 09', '', '', '29', '3210', '1', '9', 'blank-id-card.jpg', 'nopic.png', 1, 3, 10);

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkos_kirim`
--

INSERT INTO `ongkos_kirim` (`id_ongkir`, `id_kab`, `id_jasa`, `harga`, `id_prop`, `id_neg`) VALUES
(10, 29, 1, 250000, 1, 8),
(11, 29, 1, 300000, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idpesan` varchar(7) NOT NULL,
  `id_member` int(11) NOT NULL,
  `waktu` timestamp NULL DEFAULT NULL,
  `totalbayar` int(10) NOT NULL,
  `ongkoskirim` int(10) NOT NULL,
  `to` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kdpos` varchar(10) NOT NULL,
  `kontak` varchar(25) NOT NULL,
  `tglkonfirm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bank` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idpesan`, `id_member`, `waktu`, `totalbayar`, `ongkoskirim`, `to`, `alamat`, `kdpos`, `kontak`, `tglkonfirm`, `bank`, `bukti`) VALUES
('4-XUD9D', 4, '2015-07-10 03:43:08', 800000, 250000, 'Ani Setya', 'Jl. Baru No. 08', '52310', '085352003221', '0000-00-00 00:00:00', '', ''),
('4-ZV4J9', 4, '2015-07-10 03:43:30', 800000, 250000, 'Ani Setya', 'Jl. Baru No. 08', '52310', '085352003221', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
`oid` int(11) NOT NULL,
  `idpesan` varchar(7) NOT NULL,
  `gid` int(1) NOT NULL,
  `jml` int(3) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`oid`, `idpesan`, `gid`, `jml`, `ukuran`, `warna`, `subtotal`, `status`) VALUES
(13, '4-ZV4J9', 8, 1, 'M', 'Merah', 125000, 0),
(14, '4-ZV4J9', 9, 5, 'M', ' Kuning', 675000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paketan`
--

CREATE TABLE IF NOT EXISTS `paketan` (
`ids` int(10) NOT NULL,
  `nmpaket` varchar(30) NOT NULL,
  `poinspon` int(10) NOT NULL,
  `hrgpkt` int(10) NOT NULL,
  `untuk` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paketan`
--

INSERT INTO `paketan` (`ids`, `nmpaket`, `poinspon`, `hrgpkt`, `untuk`) VALUES
(1, 'Perorangan', 5, 25000, 'seller'),
(3, 'Badan Usaha', 5, 35000, 'seller'),
(4, 'Member Daftar', 5, 0, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `paket_member`
--

CREATE TABLE IF NOT EXISTS `paket_member` (
`id_pkt` int(10) NOT NULL,
  `nmpaket` varchar(30) NOT NULL,
  `poin` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_member`
--

INSERT INTO `paket_member` (`id_pkt`, `nmpaket`, `poin`, `harga`) VALUES
(1, 'Silver', 5, 0),
(2, 'Gold', 10, 25000),
(3, 'Platinum', 20, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `paket_seller`
--

CREATE TABLE IF NOT EXISTS `paket_seller` (
`idpkt` int(10) NOT NULL,
  `nmpaket` varchar(30) NOT NULL,
  `poin` int(3) NOT NULL,
  `iklanbaner` int(3) NOT NULL,
  `iklanbaris` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_seller`
--

INSERT INTO `paket_seller` (`idpkt`, `nmpaket`, `poin`, `iklanbaner`, `iklanbaris`, `harga`) VALUES
(1, 'silvers', 5, 0, 5, 0),
(2, 'Gold', 10, 1, 5, 100000),
(3, 'Platinum', 20, 2, 10, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(1) NOT NULL,
  `hp` varchar(300) NOT NULL,
  `pin` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `gplus` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `hp`, `pin`, `email`, `fb`, `twitter`, `gplus`, `insta`, `youtube`) VALUES
(1, '0813250000,088235111111', '547A7H9,9KL76JH', 'admin@rejekimall.com', 'rejekimall', 'rejeki_mall', 'rejekimall', 'rjkmall', 'rejekimall');

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
  `idpkt` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
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
  `siup` varchar(100) NOT NULL,
  `golongan` int(1) NOT NULL,
  `poinseller` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `idpkt`, `jenis`, `nama_toko`, `username`, `password`, `tgl_registrasi`, `nama`, `alamat`, `status_system`, `nohp`, `pin`, `token`, `negara`, `provinsi`, `namabank`, `cabang`, `pemilikrek`, `kat`, `newsletter`, `SMS`, `website`, `norek`, `email`, `ket`, `passtrx`, `kota`, `kecamatan`, `kodepos`, `gbr_ktp`, `foto`, `npwp`, `siup`, `golongan`, `poinseller`) VALUES
(1, 1, 1, 'Toko Kita', 'penjual@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2015-07-03', 'penjual satu', 'Loksumawe', '1', '085232000121', 0, 0, 8, '1', 'Mandiri', 'loksumawe', 'Penjual Satu', '', '', '', '', '1030002501236', 'penjual@gmail.com', '', '', '29', 'aceh besar', 12345, NULL, 'penjual_satu.jpeg', NULL, '', 2, 55),
(2, 2, 3, 'Binner Code Comp', 'budi@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '2015-07-07', 'Budi Sasongko', 'Jl. Kelud Raya', '1', '085251300125', 0, 0, 8, '1', 'Mandiri', 'Loksumawe', 'Budi Sasongko', '', '', '', '', '1360001236200', 'budi@yahoo.com', '', '', '29', '-', 23666, NULL, 'nopic.png', NULL, '', 2, 10),
(3, 2, 1, 'Toko Muslimah', 'elsya@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '2015-07-10', 'elsya winata', 'Jl. Baru No. 34', '1', '085352021321', 7, 0, 8, '1', 'BCA', 'Aceh tengah', 'elsya winata', '', '', '', '', '681330002156', 'elsya@yahoo.com', '', '', '29', 'Aceh Tengah', 52123, NULL, 'nopic.png', NULL, '', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `superadm`
--

CREATE TABLE IF NOT EXISTS `superadm` (
  `id` int(1) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadm`
--

INSERT INTO `superadm` (`id`, `user`, `pass`) VALUES
(1, 'superadmin', 'f9dda0c1ea49d7caf6eb55e5903fc490');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`idbank`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`idbrand`);

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
-- Indexes for table `iklan_banner`
--
ALTER TABLE `iklan_banner`
 ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `iklan_banner_paket`
--
ALTER TABLE `iklan_banner_paket`
 ADD PRIMARY KEY (`idpkt_baner`);

--
-- Indexes for table `iklan_slider`
--
ALTER TABLE `iklan_slider`
 ADD PRIMARY KEY (`idslide`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
 ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `paketan`
--
ALTER TABLE `paketan`
 ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `paket_member`
--
ALTER TABLE `paket_member`
 ADD PRIMARY KEY (`id_pkt`);

--
-- Indexes for table `paket_seller`
--
ALTER TABLE `paket_seller`
 ADD PRIMARY KEY (`idpkt`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `superadm`
--
ALTER TABLE `superadm`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `idbank` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
MODIFY `idbrand` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
-- AUTO_INCREMENT for table `iklan_banner`
--
ALTER TABLE `iklan_banner`
MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `iklan_banner_paket`
--
ALTER TABLE `iklan_banner_paket`
MODIFY `idpkt_baner` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `iklan_slider`
--
ALTER TABLE `iklan_slider`
MODIFY `idslide` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jasa_kirim`
--
ALTER TABLE `jasa_kirim`
MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kab_kota`
--
ALTER TABLE `kab_kota`
MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
MODIFY `id_neg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ongkos_kirim`
--
ALTER TABLE `ongkos_kirim`
MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `paketan`
--
ALTER TABLE `paketan`
MODIFY `ids` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket_member`
--
ALTER TABLE `paket_member`
MODIFY `id_pkt` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paket_seller`
--
ALTER TABLE `paket_seller`
MODIFY `idpkt` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `propinsi`
--
ALTER TABLE `propinsi`
MODIFY `id_prop` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
MODIFY `id_seller` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
