-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 05:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `nama_barang`, `harga`, `stok`) VALUES
('1234', 'batman lego', 75000, 7),
('12345', 'welsi', 58, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `kd_pemesanan` int(11) NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_pembeli` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`kd_pemesanan`, `kode_barang`, `jumlah`, `nama_pembeli`, `total_harga`) VALUES
(1, '1234', 0, 'sukiman', 225000),
(2, '1234', 0, 'sukiman', 225000),
(3, '1234', 0, 'sukiman', 225000),
(4, '1234', 1, 'budi', 75000),
(5, '1234', 5, 'gg', 375000),
(6, '1234', 1, 'siwel', 75000);

--
-- Triggers `tb_pemesanan`
--
DELIMITER $$
CREATE TRIGGER `TRG` AFTER INSERT ON `tb_pemesanan` FOR EACH ROW BEGIN UPDATE tb_barang
SET stok=stok-1
WHERE tb_barang.kode_barang=new.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(14, 'welsi', '1e7a0b3d8e623dd03fd52a289f71759c', 'admin'),
(15, 'kucinglo', '079ff6d45b816ee5b6b738396a98425e', 'admin'),
(16, 'aye', '15be96c681f86d5e22721a05dda30a5f', 'user'),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(18, 'asem', '839c46a5d1272dd54e20a4d06acac519', 'admin'),
(19, 'aq', 'b2b04af9f8f3ab06229e03ac8d3c24ca', 'admin'),
(20, 'jan', 'fa27ef3ef6570e32a79e74deca7c1bc3', 'admin'),
(21, 'jan', 'fa27ef3ef6570e32a79e74deca7c1bc3', 'user'),
(22, 'cuk', '0a8ada1f5d2ea05fc3af10cd808bfa9a', 'user'),
(23, 'welsi', '1e7a0b3d8e623dd03fd52a289f71759c', 'user'),
(24, 'dono', 'e3b810115555736a216f137df55789f6', 'admin'),
(25, 'doni', '2da9cd653f63c010b6d6c5a5ad73fe32', 'user'),
(26, 'rikirhoma', '62dd7e80fdfcb966cac9c849268c61d9', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`kd_pemesanan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `kd_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tb_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
