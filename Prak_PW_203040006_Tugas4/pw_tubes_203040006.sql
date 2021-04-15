-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 11:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `No` int(11) NOT NULL,
  `Nama Barang` varchar(200) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Stok barang` char(9) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'data'
--

INSERT INTO 'data' (`No`, 'Nama Barang', 'Deskripsi', 'Warna', 'Harga', 'Stok Barang', 'Foto') VALUES
(1, 'Hoddie Champions', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Dark Blue Original Pull Tag Dan Lebel sweter Hoodie Kekinian Terlaris Dan Termurah Bahan Tebal', 'Dark Blue', '200.000', '100', '5.jpeg'), 
(2, 'Hoddie Champions', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Putih Original Pull Tag Dan Lebel sweter Hoodie Kekinian Terlaris Dan Termurah Bahan Tebal', 'Putih', '250.000', '50', '6.jpeg'), 
(3, 'Hoddie Champions', 'Jaket Sweater Pria-Jaket Original Distro-Hoodie Crewenk Champion Hitam Original Pull Tag Dan Lebel sweter Hoodie Kekinian Terlaris Dan Termurah Bahan Tebal', 'Hitam', '175.000', '150', '7.jpeg');
--
-- Indexes for dumped tables
--

--
-- Indexes for table 'data'
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE 'data'
  MODIFY 'No' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;