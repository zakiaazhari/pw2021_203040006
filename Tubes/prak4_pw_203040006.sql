-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak4_pw_203040006`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_hoddie`
--

CREATE TABLE `t_hoddie` (
  `no` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `foto` varchar(220) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_hoddie`
--

INSERT INTO `t_hoddie` (`no`, `nama_barang`, `foto`, `deskripsi`, `warna`, `harga`, `stok_barang`) VALUES
(1, 'Hoddie Champions', '5.jpeg', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter', 'Dark Blue', '175.000', '100'),
(2, 'Hoddie Champion', '6.jpeg', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter', 'White', '250.000', '250'),
(3, 'Hoddie Champions', '7.jpeg', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Original Pull Tag Dan Lebel sweter', 'Black', '150.000', '150');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'zaki', '$2y$10$YqWj5hMJgfPttkW8iZ2bjubCWGUbwlQiCxRVaCGJg6wnsiJEJJXYW'),
(6, 'admin', '$2y$10$P2M.nnO7194S5Yz2/qSuSufkqPpLjNpDZ0pXJQRfoQ52ZSqSIl5xa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_hoddie`
--
ALTER TABLE `t_hoddie`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_hoddie`
--
ALTER TABLE `t_hoddie`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
