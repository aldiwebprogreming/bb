-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 05:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rule` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `rule`, `pass`, `date`) VALUES
(7, 'admin', 'Admin', '$2y$10$yEE8uKlX4XGxhfnGA5I5qeCLuYjmAbJI36T00t1agJv2XVfUinCiS', '2022-06-03 01:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_sub_kategori`
--

CREATE TABLE `tbl_jenis_sub_kategori` (
  `id` int(11) NOT NULL,
  `kode_jenis_sub_kategori` varchar(50) NOT NULL,
  `name_jenis_sub_kategori` varchar(100) NOT NULL,
  `kode_sub_kategori` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_sub_kategori`
--

INSERT INTO `tbl_jenis_sub_kategori` (`id`, `kode_jenis_sub_kategori`, `name_jenis_sub_kategori`, `kode_sub_kategori`, `date`) VALUES
(1, 'jenis-subkategori-82570', 'Kran Wastafel', 'Kran', '2022-05-25 08:54:22'),
(2, 'jenis-subkategori-7793', 'Kran Bathtub', 'Kran', '2022-05-25 08:04:56'),
(3, 'jenis-subkategori-14345', 'Kran Shower', 'Kran', '2022-05-25 08:05:10'),
(4, 'jenis-subkategori-13046', 'Kran Dapur', 'Kran', '2022-05-25 08:05:20'),
(5, 'jenis-subkategori-91536', 'Undercounter', 'Wastafel', '2022-05-25 08:05:42'),
(6, 'jenis-subkategori-79374', 'Counter Top', 'Wastafel', '2022-05-25 08:05:55'),
(7, 'jenis-subkategori-66124', 'Vessel', 'Wastafel', '2022-05-25 08:06:10'),
(8, 'jenis-subkategori-46696', 'Pedestal', 'Wastafel', '2022-05-25 08:06:22'),
(9, 'jenis-subkategori-51531', 'Wall Hung', 'Wastafel', '2022-05-25 08:06:34'),
(10, 'jenis-subkategori-49119', 'Shower System', 'Shower', '2022-05-25 08:06:58'),
(11, 'jenis-subkategori-16380', 'Shower Set', 'Shower', '2022-05-25 08:07:10'),
(12, 'jenis-subkategori-88882', 'Head Shower', 'Shower', '2022-05-25 08:07:29'),
(13, 'jenis-subkategori-24366', 'Hand Shower', 'Shower', '2022-05-25 08:09:56'),
(14, 'jenis-subkategori-39634', 'Bidet', 'Shower', '2022-05-25 08:07:58'),
(15, 'jenis-subkategori-35601', 'Freestanding', 'Bathtub', '2022-05-25 08:08:29'),
(16, 'jenis-subkategori-72513', 'Tanam', 'Bathtub', '2022-05-25 08:08:38'),
(17, 'jenis-subkategori-31066', 'Elektirk', 'Closet', '2022-05-25 08:08:53'),
(18, 'jenis-subkategori-96382', 'One Piece', 'Closet', '2022-05-25 08:09:49'),
(20, 'jenis-subkategori-79049', 'Two Piece', 'Closet', '2022-05-25 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(50) NOT NULL,
  `name_kategori` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `kode_kategori`, `name_kategori`, `date`) VALUES
(3, 'kategori-30289', 'Bathroom', '2022-05-23 08:53:43'),
(4, 'kategori-30473', 'Kitchen', '2022-05-23 08:53:54'),
(5, 'kategori-97048', 'Lain-lain', '2022-05-23 08:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merek`
--

CREATE TABLE `tbl_merek` (
  `id` int(11) NOT NULL,
  `kode_merek` varchar(50) NOT NULL,
  `name_merek` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_merek`
--

INSERT INTO `tbl_merek` (`id`, `kode_merek`, `name_merek`, `date`) VALUES
(3, 'merek-42295', 'Kohler', '2022-05-23 08:43:40'),
(4, 'merek-34407', 'Grohe', '2022-05-23 08:43:47'),
(5, 'merek-5876', 'Duravit', '2022-05-23 08:44:07'),
(6, 'merek-90308', 'Kolpa', '2022-05-23 08:45:12'),
(8, 'merek-12969', 'Knief', '2022-05-23 08:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(23) NOT NULL,
  `name_produk` varchar(100) NOT NULL,
  `ket_produk` text NOT NULL,
  `name_kategori` varchar(35) NOT NULL,
  `name_sub_kategori` varchar(50) NOT NULL,
  `name_jenis_sub_kategori` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `kode_produk`, `name_produk`, `ket_produk`, `name_kategori`, `name_sub_kategori`, `name_jenis_sub_kategori`, `image`, `date`) VALUES
(19, 'produk-17830', 'Kran 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Kran', 'Kran Wastafel', '7.jpg', '2022-06-10 01:23:20'),
(20, 'produk-11621', 'Kran 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Kran', 'Kran Bathtub', '8.jpg', '2022-06-10 01:23:38'),
(21, 'produk-98606', 'Kran 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Kran', 'Kran Shower', '11.jpg', '2022-06-10 01:24:03'),
(22, 'produk-6683', 'Shower', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Shower', 'Shower System', '1.jpg', '2022-06-10 01:25:14'),
(23, 'produk-37646', 'Shower 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Shower', 'Shower Set', '3.jpg', '2022-06-10 01:25:44'),
(24, 'produk-65646', 'Shower 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Shower', 'Hand Shower', '10.jpg', '2022-06-10 01:26:41'),
(25, 'produk-59491', 'Wastafel 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Wastafel', 'Undercounter', '2.jpg', '2022-06-10 01:27:21'),
(28, 'produk-35440', 'Wastafel 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of', 'Bathroom', 'Wastafel', 'Counter Top', 'rere.jpg', '2022-06-10 01:32:06'),
(29, 'produk-26129', 'Wastafel 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Wastafel', 'Vessel', '0016.jpg', '2022-06-10 01:39:30'),
(30, 'produk-86924', 'Bathtub', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Bathtub', 'Freestanding', 'b4.jpg', '2022-06-10 01:40:38'),
(31, 'produk-72770', 'Bathtub 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Bathtub', 'Tanam', 'b3.jpg', '2022-06-10 01:41:07'),
(32, 'produk-26657', 'Bathtub 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Bathtub', 'Freestanding', 'b2.jpg', '2022-06-10 01:44:12'),
(33, 'produk-19141', 'Closet 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Closet', 'Elektirk', '1.jpeg', '2022-06-10 01:48:34'),
(34, 'produk-67755', 'Closet 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Closet', 'One Piece', '12.jpeg', '2022-06-10 01:56:11'),
(35, 'produk-66611', 'Closet 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Bathroom', 'Closet', 'Two Piece', 'Closet Electric Eir.jpg', '2022-06-10 01:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_kategori`
--

CREATE TABLE `tbl_sub_kategori` (
  `id` int(11) NOT NULL,
  `kode_sub_kategori` varchar(35) NOT NULL,
  `name_sub_kategori` varchar(50) NOT NULL,
  `kode_kategori` varchar(35) NOT NULL,
  `kode_merek` varchar(35) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub_kategori`
--

INSERT INTO `tbl_sub_kategori` (`id`, `kode_sub_kategori`, `name_sub_kategori`, `kode_kategori`, `kode_merek`, `date`) VALUES
(2, 'subkategori-61517', 'Kran', 'Bathroom', 'Kohler, Grohe', '2022-05-25 06:52:37'),
(3, 'subkategori-52353', 'Wastafel', 'Bathroom', 'Kohler, Grohe, Duravit', '2022-05-25 03:17:45'),
(4, 'subkategori-89653', 'Shower', 'Bathroom', 'Kohler, Grohe', '2022-05-25 03:19:09'),
(5, 'subkategori-55626', 'Bathtub', 'Bathroom', 'Kohler, Kolpa, Knief', '2022-05-25 03:20:09'),
(7, 'subkategori-81222', 'Closet', 'Bathroom', 'Kohler, Grohe', '2022-05-25 06:55:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_sub_kategori`
--
ALTER TABLE `tbl_jenis_sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_merek`
--
ALTER TABLE `tbl_merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_kategori`
--
ALTER TABLE `tbl_sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_jenis_sub_kategori`
--
ALTER TABLE `tbl_jenis_sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_merek`
--
ALTER TABLE `tbl_merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_sub_kategori`
--
ALTER TABLE `tbl_sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
