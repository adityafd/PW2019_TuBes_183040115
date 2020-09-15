-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 09:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040115`
--

-- --------------------------------------------------------

--
-- Table structure for table `peralatan_elektronik`
--

CREATE TABLE `peralatan_elektronik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis` int(11) NOT NULL,
  `merek` varchar(64) NOT NULL,
  `harga` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan_elektronik`
--

INSERT INTO `peralatan_elektronik` (`id`, `gambar`, `nama`, `jenis`, `merek`, `harga`) VALUES
(1, 'Lampu.jpg', 'LED Anti Nyamuk - 9 watt', 1, 'Hannochs', 'Rp.63.000'),
(2, 'Kompor.jpg', 'Rinnai Gas Stove RI-522S', 2, 'Rinnai', 'Rp.249.000'),
(3, 'Kulkas.jpg', 'SAMSUNG RT38K5032S8 Twin Cooling 384 LITER', 3, 'Samsung', 'Rp.5.999.000'),
(4, 'Blender.jpg', 'Cosmos Stainless Steel 3in1 2 liter CB-282P CB282P', 4, 'Cosmos', 'Rp.265.000'),
(5, 'Vacuum.jpg', 'VC 2050 Vacuum Cleaner', 5, 'Modena', 'Rp.1.422.000'),
(6, 'Rice Cooker.jpg', 'Rice Cooker Philips HD3127', 6, 'Philips', 'Rp.450.000'),
(7, 'Kipas Angin.jpg', 'KRISBOW Ventilator Fan', 7, 'Krisbow', 'Rp.2.190.000'),
(8, 'Telepon Kabel.jpeg', 'Panasonic Telephone KX-TS505', 8, 'Panasonic', 'Rp.149.000'),
(9, 'Radio.jpg', 'Radio Klasik International F 18 Model Jadul AM FM', 9, 'International', 'Rp.85.000'),
(10, 'Mesin Cuci.jpg', 'Sharp ES-FL862 Front Loading Boomerang Series', 10, 'Sharp', 'Rp.3.082.000');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan_jenis_barang`
--

CREATE TABLE `peralatan_jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan_jenis_barang`
--

INSERT INTO `peralatan_jenis_barang` (`id`, `jenis`) VALUES
(1, 'Lampu'),
(2, 'Kompor'),
(3, 'Kulkas'),
(4, 'Blender'),
(5, 'Vacuum (Pembersih Debu)'),
(6, 'Rice Cooker (Pemasak Nasi)'),
(7, 'Kipas Angin'),
(8, 'Telepon Kabel'),
(9, 'Radio'),
(10, 'Mesin Cuci');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$pCL8xht4z9SLrHnnW5BzzeVrrHn9xpgsoyXW2jENPDbwX1lpotQBC'),
(2, 'test', '$2y$10$9OjgPqIQnl4YPQ0kQTG5HeWgKo9J0cHvOlYTnKTqTvEVM.cxABZve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peralatan_elektronik`
--
ALTER TABLE `peralatan_elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peralatan_jenis_barang`
--
ALTER TABLE `peralatan_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peralatan_elektronik`
--
ALTER TABLE `peralatan_elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peralatan_jenis_barang`
--
ALTER TABLE `peralatan_jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
