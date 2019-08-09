-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 05:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` varchar(6) NOT NULL,
  `namaBarang` varchar(50) DEFAULT NULL,
  `deskripsiBarang` text,
  `idKategori` varchar(3) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `namaBarang`, `deskripsiBarang`, `idKategori`, `foto`) VALUES
('ELK001', 'Keyboard', 'Elegant keyboard with multicolored led lamp, best used for gaming\r\n', 'ELK', 'aa.jpg\r\n'),
('ELK002', 'refrigerator', 'Sturdy one door Refrigerator with lots of empty space which make it easier to menage stuff in there\r\n', 'ELK', 'ab.jpg\r\n'),
('ELK003', 'TV', 'LED display television with large inch which make the user''s eyes more comfortable\r\n', 'ELK', 'ad.jpg\r\n'),
('ELK004', 'DVD player', 'High end quality dvd player, can play almost every single dvd \r\n\r\n', 'ELK', 'ae.jpg\r\n'),
('ELK005', 'WIFI router', 'WIFI router used for release network from the cable so the user can use the network\r\n', 'ELK', 'af.jpg\r\n'),
('ELK006', 'Iron', 'Stanless steel iron that have heat control so it can''t be overheat\r\n', 'ELK', 'ag.jpeg\r\n'),
('ELK007', 'wash machine', 'One door for all work washing machine \r\n', 'ELK', 'ah.jpg\r\n'),
('FUR001', 'Bed', 'Comfy double bed with an excelent material choice\r\n', 'FUR', 'ac.jpg\r\n'),
('FUR002', 'Stove', 'Stanless steel gas stove with low gas consumtion\r\n', 'FUR', 'ai.jpg\r\n'),
('FUR003', 'Toilet', 'Toilet with elegant white color\r\n', 'FUR', 'aj.jpg\r\n'),
('FUR004', 'Mirror', 'simple looking mirror with an exclusive motive\r\n', 'FUR', 'ak.jpeg\r\n'),
('FUR005', 'Sofa', 'Classic and confortable sofa with 3 spaced people\r\n', 'FUR', 'al.jpeg\r\n'),
('MKN001', 'Roti', ' ', 'MKN', ''),
('MNM001', 'Aqua', 'Aqua Air Minum Kita', 'MNM', '');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `kodeArea` varchar(5) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`kodeArea`, `deskripsi`) VALUES
('SEC-A', 'Sektor A'),
('SEC-B', 'Sektor B'),
('SEC-C', 'Sektor C');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` varchar(3) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `kategori`) VALUES
('ELK', 'electronics'),
('FUR', 'furniture'),
('MKN', 'Makanan'),
('MNM', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `notaKeluar` varchar(8) NOT NULL,
  `tanggalKelaur` date DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `notaMasuk` varchar(10) NOT NULL,
  `tanggalMasuk` date DEFAULT NULL,
  `idBarang` varchar(6) DEFAULT NULL,
  `kodeArea` varchar(5) DEFAULT NULL,
  `jumlah` varchar(3) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`notaMasuk`, `tanggalMasuk`, `idBarang`, `kodeArea`, `jumlah`, `satuan`) VALUES
('M-10071901', '2019-07-10', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `idBarang` varchar(6) DEFAULT NULL,
  `notaMasuk` varchar(12) DEFAULT NULL,
  `kodeArea` varchar(5) DEFAULT NULL,
  `hargaModal` int(12) DEFAULT NULL,
  `hargaJual` int(12) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`idBarang`, `notaMasuk`, `kodeArea`, `hargaModal`, `hargaJual`, `stok`, `satuan`) VALUES
('MKN001', 'M-10071901', 'SEC-A', NULL, NULL, 12, 'bungkus'),
('MNM001', 'M-10071901', 'SEC-B', NULL, NULL, 12, 'kardus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `password` text,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `foto`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'text.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`kodeArea`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`notaKeluar`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`notaMasuk`),
  ADD KEY `masuk_ibfk_1` (`idBarang`),
  ADD KEY `masuk_ibfk_3` (`kodeArea`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD KEY `idBarang` (`idBarang`),
  ADD KEY `notaMasuk` (`notaMasuk`),
  ADD KEY `kodeArea` (`kodeArea`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`);

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`),
  ADD CONSTRAINT `masuk_ibfk_3` FOREIGN KEY (`kodeArea`) REFERENCES `gudang` (`kodeArea`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`),
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`notaMasuk`) REFERENCES `masuk` (`notaMasuk`),
  ADD CONSTRAINT `stok_ibfk_3` FOREIGN KEY (`kodeArea`) REFERENCES `gudang` (`kodeArea`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
