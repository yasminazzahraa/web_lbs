-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 02:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date_create` datetime(1) NOT NULL,
  `foto` text NOT NULL,
  `privasi` int(1) NOT NULL,
  `reset_token` text NOT NULL,
  `reset_token_expiration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `email`, `no_hp`, `username`, `password`, `date_create`, `foto`, `privasi`, `reset_token`, `reset_token_expiration`) VALUES
(3, 'AdminKBB', 'fadilahfadil021@gmail.com', '087732771104', 'admin', '$2y$10$U1WJ50JsqvXkB2bSbs0nZ.igX3heeRkDaHIEKRherYMXyu2GMGwn6', '2023-10-23 17:59:12.0', 'http://localhost/WebPuskesmas/asset/img/team-3.jpg', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `corousel`
--

CREATE TABLE `corousel` (
  `id_corousel` int(5) UNSIGNED NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `date_create` datetime NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `corousel`
--

INSERT INTO `corousel` (`id_corousel`, `judul`, `keterangan`, `date_create`, `gambar`) VALUES
(1, 'Isi judul', 'Isi keterangan', '2023-11-03 20:04:05', 'http://localhost/WebPuskesmas/asset/assets_user/img/noimage.png');

-- --------------------------------------------------------

--
-- Table structure for table `datakurir`
--

CREATE TABLE `datakurir` (
  `id_kurir` int(5) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `no_telp_kurir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakurir`
--

INSERT INTO `datakurir` (`id_kurir`, `nama_kurir`, `no_telp_kurir`) VALUES
(1, 'Dani', '082174394383');

-- --------------------------------------------------------

--
-- Table structure for table `datapelanggan`
--

CREATE TABLE `datapelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp_pelanggan` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapengiriman`
--

CREATE TABLE `datapengiriman` (
  `kode_pengiriman` int(5) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `no_telp_pengirim` varchar(13) NOT NULL,
  `no_telp_penerima` varchar(13) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapengiriman`
--

INSERT INTO `datapengiriman` (`kode_pengiriman`, `nama_pengirim`, `nama_penerima`, `alamat_pengirim`, `alamat_penerima`, `no_telp_pengirim`, `no_telp_penerima`, `tanggal`) VALUES
(1, 'Mina', 'Siti', 'Jln.Babakan Situ Tengah no.89', 'Jln.Ibu Ganirah no.77', '085974757899', '083272324422', '2024-03-10 00:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(5) NOT NULL,
  `id_kurir` varchar(10) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `no_telp_pengirim` varchar(13) NOT NULL,
  `no_telp_penerima` varchar(13) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_transaksi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_kurir`, `nama_pengirim`, `nama_penerima`, `no_telp_pengirim`, `no_telp_penerima`, `jenis_barang`, `tanggal`, `status_transaksi`) VALUES
(1, 'P001', 'Mina', 'Siti', '085974757899', '083272324422', 'Pakaian', '2024-03-10 01:31:59', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `layananpublik`
--

CREATE TABLE `layananpublik` (
  `id_layananpublik` int(5) UNSIGNED NOT NULL,
  `produk` varchar(50) NOT NULL,
  `biaya` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `create` datetime NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(5) UNSIGNED NOT NULL,
  `sejarah` text NOT NULL,
  `maklumat` text NOT NULL,
  `alamat` text NOT NULL,
  `alamat_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `sejarah`, `maklumat`, `alamat`, `alamat_map`) VALUES
(1, '', 'http://localhost/WebPuskesmas/asset/img/logodefault.png', 'Jl. Lembang, Lembang, Garut, Kabupaten Garut, Jawa Barat 44152', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.242138674839!2d107.87483677449141!3d-7.097909192905337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b82887670da7%3A0x4675369eb9a905cd!2sPuskesmas%20Lembang!5e0!3m2!1sen!2sid!4v1699016548842!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id_sosialmedia` int(5) UNSIGNED NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `twiter` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kode_pos` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sosialmedia`
--

INSERT INTO `sosialmedia` (`id_sosialmedia`, `instagram`, `facebook`, `twiter`, `email`, `no_hp`, `kode_pos`) VALUES
(1, '', '', '', 'padalarangpuskesmas@gmail.com', '0226866259', '40553');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `corousel`
--
ALTER TABLE `corousel`
  ADD PRIMARY KEY (`id_corousel`);

--
-- Indexes for table `datakurir`
--
ALTER TABLE `datakurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `datapelanggan`
--
ALTER TABLE `datapelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `datapengiriman`
--
ALTER TABLE `datapengiriman`
  ADD PRIMARY KEY (`kode_pengiriman`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `layananpublik`
--
ALTER TABLE `layananpublik`
  ADD PRIMARY KEY (`id_layananpublik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  ADD PRIMARY KEY (`id_sosialmedia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `corousel`
--
ALTER TABLE `corousel`
  MODIFY `id_corousel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datakurir`
--
ALTER TABLE `datakurir`
  MODIFY `id_kurir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapelanggan`
--
ALTER TABLE `datapelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datapengiriman`
--
ALTER TABLE `datapengiriman`
  MODIFY `kode_pengiriman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layananpublik`
--
ALTER TABLE `layananpublik`
  MODIFY `id_layananpublik` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  MODIFY `id_sosialmedia` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
