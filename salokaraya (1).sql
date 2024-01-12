-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 08:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salokaraya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `idKat` int(5) NOT NULL,
  `namaKat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`idKat`, `namaKat`) VALUES
(1, 'Pakan'),
(2, 'Kandang'),
(3, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ongkir`
--

CREATE TABLE `tb_ongkir` (
  `idOngkir` int(5) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `kurir` varchar(25) NOT NULL,
  `ongkos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ongkir`
--

INSERT INTO `tb_ongkir` (`idOngkir`, `tujuan`, `kurir`, `ongkos`) VALUES
(2, 'Caturtunggal', 'SHOPPEEFOOD', 6500),
(3, 'Jogja', 'GOFOOD', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `idPelanggan` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlpn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`idPelanggan`, `username`, `password`, `namaPelanggan`, `email`, `alamat`, `tlpn`) VALUES
(8, 'Rafa', '12345', 'Rafa Hadiya P', 'rafahadiya@students.amikom.ac.id', 'sleman', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `idProduk` int(5) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `idKat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`idProduk`, `namaProduk`, `gambar`, `harga`, `stok`, `deskripsi`, `idKat`) VALUES
(1, 'Canida', 'dogfood.png', 25000, 30, 'Makanan Lezat dan Bergizi untuk kesehatan hewan peliharaan anda.', 1),
(2, 'Kalung Kucing', 'kalungcat.png', 15000, 20, 'Perhiasaan untuk mempercantik anabul anda.', 3),
(3, 'Keranjang Medium', 'KERANJANG.png', 100000, 10, 'Keranjang ukuran medium dapat untuk 2 Kucing dan Anjing', 3),
(4, 'Kalung Anjing', 'kalungDog.png', 20000, 20, 'Perhiasan Untuk Mempercantik Anjing Anda', 3),
(5, 'Keranjang Large', 'keranjang1.png', 175000, 5, 'Keranjang Yang Berkapasitas untuk 4-5 hewan peliharaan anda.', 2),
(6, 'Tender & True', 'mio.png', 20000, 25, 'Makanan Bergizi untuk Anjing anda', 1),
(7, 'Edgard Cooper', 'pakansalmon.png', 35000, 27, 'Makanan Yang Sehat dari salmon untuk kucing dan anjing anda', 1),
(8, 'Royal Cannin - Care Urinary', 'RCPersia.png', 18000, 18, 'Makanan Suplemen untuk menambah kesehatan kucing anda', 1),
(9, 'Royal Canin - Kitten Chatton', 'royalcanin.png', 25000, 13, 'Makanan Suplemen Untuk pertumbuhan kucing menjadi lebih baik', 1),
(10, 'Royal Canin - Bulldog Bouledogue', 'royalcanindog.png', 21000, 10, 'Makanan Suplemen Untuk Kesehetan Anjing Anda', 1),
(11, 'Sofa Premium', 'sofacat.png', 55000, 4, 'Sofa Premium untuk hewan peliharaan anda', 1),
(12, 'Suplier Makanan Kucing & Anjing', 'suplier.png', 15000, 20, 'Suplier Makanan Untuk Pertumbuhan Bulu Hewan Peliharaan anda', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`idKat`);

--
-- Indexes for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`idOngkir`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idKat` (`idKat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `idKat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `idOngkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `idPelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tb_kategori` (`idKat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
