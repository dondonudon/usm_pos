-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 03:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_barang`
--

CREATE TABLE `table_barang` (
  `kode_barang` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga1` int(15) NOT NULL,
  `harga2` int(15) NOT NULL,
  `harga3` int(15) NOT NULL,
  `harga4` int(15) NOT NULL,
  `harga5` int(15) NOT NULL,
  `stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_barang`
--

INSERT INTO `table_barang` (`kode_barang`, `nama`, `harga1`, `harga2`, `harga3`, `harga4`, `harga5`, `stok`) VALUES
(0, 'HVS 80 gsm', 6000, 5100, 4100, 3150, 2600, '90'),
(6, 'HVS 100gr', 6000, 5100, 4150, 3200, 2650, '0'),
(7, 'Matte Paper', 6000, 5100, 4200, 3300, 2800, '0'),
(8, 'CTS 150 gr', 6000, 5100, 4200, 3300, 2800, '0'),
(9, 'IVORY 230 gr', 6000, 5200, 4300, 3500, 3000, '0'),
(10, 'IVORY 260gr', 6000, 5200, 4400, 3500, 3100, '0'),
(11, 'BC TIK 200 gr', 6000, 5200, 4400, 3600, 3150, '0'),
(12, 'Splendorgel 230 gr', 9600, 8500, 7200, 6000, 5500, '0'),
(13, 'Raster', 10700, 9700, 8200, 6900, 6100, '0'),
(14, 'Sticker Vinyl Matte', 8000, 8000, 8000, 8000, 8000, '0'),
(15, 'Sticker Vinyl Glossy', 8000, 8000, 8000, 8000, 8000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_customer`
--

CREATE TABLE `table_customer` (
  `id_customer` int(15) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat_cust` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email_cust` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_customer`
--

INSERT INTO `table_customer` (`id_customer`, `nama_cust`, `alamat_cust`, `telepon`, `email_cust`) VALUES
(3, 'Rifqon Muzakki', 'Mugas', '085765678908', 'rimuzakki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_laporan`
--

CREATE TABLE `table_laporan` (
  `tgl_laporan` date NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `jumlah_transaksi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_transaksi_penjualan`
--

CREATE TABLE `table_transaksi_penjualan` (
  `Id_transaksi` int(25) NOT NULL,
  `kode_customer` int(15) NOT NULL,
  `kode_barang` int(15) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(5) NOT NULL,
  `harga_barang` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `telepon`, `jabatan`, `username`, `password`) VALUES
(3, 'Rahmat Nur Ikhsan', 'rnikhsan68@gmail.com', '0895360267539', 'Designer', 'ikhsan', '6bf16634b25b5e735588ec2ca93d79be');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_barang`
--
ALTER TABLE `table_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `table_customer`
--
ALTER TABLE `table_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `table_laporan`
--
ALTER TABLE `table_laporan`
  ADD PRIMARY KEY (`tgl_laporan`);

--
-- Indexes for table `table_transaksi_penjualan`
--
ALTER TABLE `table_transaksi_penjualan`
  ADD PRIMARY KEY (`Id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_barang`
--
ALTER TABLE `table_barang`
  MODIFY `kode_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_customer`
--
ALTER TABLE `table_customer`
  MODIFY `id_customer` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_transaksi_penjualan`
--
ALTER TABLE `table_transaksi_penjualan`
  MODIFY `Id_transaksi` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
