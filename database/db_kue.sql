-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 01:30 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kue`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(12) NOT NULL,
  `nm_produk` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nm_produk`, `harga`, `image`) VALUES
(1, 'cromboloni', 250000, 'cromboloni.jpg'),
(2, 'Black forest cerry', 160000, 'blackForest.jpg'),
(3, 'brownies', 15000, 'brownies.jpg'),
(4, 'Slice Cake Rainbow', 15000, 'sliceCakeRainbow.jpg'),
(5, 'mile crepes', 25000, 'mileCrepes.jpg'),
(6, 'Donat', 9000, 'donat.jpg'),
(7, 'Donat Tower', 245000, 'donatower.jpeg'),
(8, 'Strawberry Cheese cake', 25000, 'strawberryCheeseCake.jpg'),
(9, 'Birthday cake', 280000, 'birthdayCake.jpg'),
(10, 'Tiramisu Cake', 850000, 'tiramisu.jpg'),
(11, 'Cup Cake', 130000, 'cupcake.jpg'),
(12, 'Macaroon', 130000, 'macaroon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `ulasan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `nama`, `tanggal`, `ulasan`) VALUES
(1, 'Seiska', '2024-05-24', 'Saya sangat suka donat dan cup cake nya di toko ini rasanya sangat enak sekali, meskipun dengan harga yang agak lebih mahal daripada di toko lain atau di pasar tapi selalu ada kepuasan dan sebanding lah harga dan kualitas. Ukurannya juga cukup besar jadi nikmat sekali untuk dijadikan camilan.'),
(2, 'Putri', '2024-06-27', 'Enak Banget Sampai Mau Meninggal..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
