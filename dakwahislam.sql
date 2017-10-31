-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 04:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dakwahislam`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Publish','Draft') NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `status`, `datetime`) VALUES
(2, 'Film', 'Publish', '2017-10-31 10:07:02'),
(3, 'Ustadz Dr Khalid Basalama MA', 'Publish', '2017-10-31 10:08:04'),
(4, 'Ustadz Adi Hidayat Lc MA', 'Publish', '2017-10-31 10:08:37'),
(5, 'Ustadz Abdul Somad Lc MA', 'Publish', '2017-10-31 10:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_user` varchar(255) DEFAULT NULL,
  `log_tipe` int(11) DEFAULT NULL,
  `log_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, '2017-09-25 08:16:31', NULL, 2, 'Menambahkan data user'),
(2, '2017-09-26 03:50:46', 'Alvian', 4, 'Menghapus data user'),
(3, '2017-09-26 03:54:33', 'Alvian', 4, 'Menghapus data user'),
(4, '2017-09-26 06:39:54', 'Alvian', 2, 'Menambahkan data user'),
(5, '2017-09-26 06:40:18', 'Alvian', 3, 'Mengedit data user'),
(6, '2017-09-26 06:41:28', 'Alvian', 3, 'Mengedit data user'),
(7, '2017-09-26 06:41:33', 'Alvian', 4, 'Menghapus data user'),
(8, '2017-09-26 06:47:59', 'Alvian', 3, 'Mengedit data produk'),
(9, '2017-09-26 06:48:57', 'Alvian', 3, 'Mengedit data produk'),
(10, '2017-09-26 06:49:54', 'Alvian', 3, 'Mengedit data produk'),
(11, '2017-09-26 06:50:05', 'Alvian', 3, 'Mengedit data produk'),
(12, '2017-09-26 06:50:11', 'Alvian', 4, 'Menghapus data produk'),
(13, '2017-09-26 06:52:04', 'Alvian', 3, 'Mengedit data kontak'),
(14, '2017-09-26 06:52:58', 'Alvian', 2, 'Menambahkan data alamat'),
(15, '2017-09-26 06:53:07', 'Alvian', 3, 'Mengedit data alamat'),
(16, '2017-09-26 06:53:11', 'Alvian', 4, 'Menghapus data alamat'),
(17, '2017-09-26 06:53:38', 'Alvian', 3, 'Mengedit data pages tentang'),
(18, '2017-09-26 06:55:48', 'Alvian', 3, 'Mengedit data pages tentang'),
(19, '2017-09-26 07:07:41', 'Alvian', 2, 'Menambahkan data pengaturan'),
(20, '2017-10-07 02:46:08', 'Alvian', 3, 'Mengedit data user'),
(21, '2017-10-28 14:32:59', 'Sheptian Bagja Utama', 3, 'Mengedit data pengaturan'),
(22, '2017-10-28 14:39:49', 'Sheptian Bagja Utama', 3, 'Mengedit data pengaturan'),
(23, '2017-10-28 15:14:23', 'Sheptian Bagja Utama', 2, 'Menambahkan data video'),
(24, '2017-10-28 15:32:03', 'Sheptian Bagja Utama', 3, 'Mengedit data video'),
(25, '2017-10-28 15:32:23', 'Sheptian Bagja Utama', 3, 'Mengedit data video'),
(26, '2017-10-28 15:32:44', 'Sheptian Bagja Utama', 3, 'Mengedit data video'),
(27, '2017-10-28 15:37:16', 'Sheptian Bagja Utama', 4, 'Menghapus data video'),
(28, '2017-10-28 15:37:27', 'Sheptian Bagja Utama', 3, 'Mengedit data video'),
(29, '2017-10-28 15:38:40', 'Sheptian Bagja Utama', 3, 'Mengedit data video'),
(30, '2017-10-28 15:38:58', 'Sheptian Bagja Utama', 4, 'Menghapus data video'),
(31, '2017-10-28 17:06:38', 'Sheptian Bagja Utama', 2, 'Menambahkan data video'),
(32, '2017-10-28 17:31:59', 'Sheptian Bagja Utama', 2, 'Menambahkan data kategori'),
(33, '2017-10-28 17:32:08', 'Sheptian Bagja Utama', 2, 'Menambahkan data kategori'),
(34, '2017-10-28 17:36:41', 'Sheptian Bagja Utama', 4, 'Menghapus data kategori'),
(35, '2017-10-28 17:43:18', 'Sheptian Bagja Utama', 3, 'Mengedit data kategori'),
(36, '2017-10-28 17:43:27', 'Sheptian Bagja Utama', 3, 'Mengedit data kategori'),
(37, '2017-10-28 17:43:31', 'Sheptian Bagja Utama', 4, 'Menghapus data kategori'),
(38, '2017-10-28 17:52:51', 'Sheptian Bagja Utama', 2, 'Menambahkan data user');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `picture` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('Publish','Draft') NOT NULL,
  `datetime` datetime NOT NULL,
  `kategori` enum('Bahan Kain Kaos','Bahan Kain Sprei') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `picture`, `deskripsi`, `status`, `datetime`, `kategori`) VALUES
(24, 'Andrea', 'file_1505893118.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:56:51', 'Bahan Kain Sprei'),
(26, 'Chelis Ungu', 'file_1505893161.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:39:21', 'Bahan Kain Sprei'),
(27, 'Diandra Biru', 'file_1505893175.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:39:35', 'Bahan Kain Sprei'),
(28, 'Diandra Merah', 'file_1505893187.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:39:47', 'Bahan Kain Sprei'),
(29, 'Diva Rose', 'file_1505893241.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:40:41', 'Bahan Kain Sprei'),
(30, 'Green Orchid Pink', 'file_1505893263.JPG', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:41:03', 'Bahan Kain Sprei'),
(31, 'Green Orchid Tosca', 'file_1505893277.JPG', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:41:17', 'Bahan Kain Sprei'),
(32, 'Helena Pink', 'file_1505893292.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:41:32', 'Bahan Kain Sprei'),
(33, 'Ikebana Merah', 'file_1505893313.JPG', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:41:53', 'Bahan Kain Sprei'),
(34, 'Meyko Biru', 'file_1505893327.JPG', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:42:07', 'Bahan Kain Sprei'),
(35, 'Naomi Naomi Matching', 'file_1505893344.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:42:24', 'Bahan Kain Sprei'),
(36, 'New Pop Biru', 'file_1505893361.JPG', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:42:41', 'Bahan Kain Sprei'),
(37, 'Rose Georgina', 'file_1505893371.jpg', 'Bahan Kain Sprei Dewasa', 'Publish', '2017-09-20 14:42:51', 'Bahan Kain Sprei'),
(42, 'Haneda 155165', 'file_1506063273.jpg', 'Bahan Kain Kaos ', 'Publish', '2017-09-22 13:54:33', 'Bahan Kain Kaos'),
(43, 'Haneda 159517', 'file_1506063301.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:55:01', 'Bahan Kain Kaos'),
(44, 'Haneda 159399', 'file_1506063326.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:55:26', 'Bahan Kain Kaos'),
(45, 'Haneda 160759', 'file_1506063367.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:56:07', 'Bahan Kain Kaos'),
(46, 'Haneda 139404', 'file_1506063498.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:58:18', 'Bahan Kain Kaos'),
(47, 'Haneda 151877', 'file_1506063523.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:58:43', 'Bahan Kain Kaos'),
(48, 'Haneda 155779', 'file_1506063543.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:59:03', 'Bahan Kain Kaos'),
(49, 'Haneda 157795', 'file_1506063588.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 13:59:48', 'Bahan Kain Kaos'),
(50, 'Haneda 158787', 'file_1506063734.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 14:02:14', 'Bahan Kain Kaos'),
(51, 'Haneda 159399', 'file_1506063753.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 14:02:33', 'Bahan Kain Kaos'),
(52, 'Manchester 159399', 'file_1506063772.jpg', '                          Bahan Kain Kaos                        ', 'Publish', '2017-09-22 14:04:32', 'Bahan Kain Kaos'),
(53, 'Manchester 160020', 'file_1506063897.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 14:04:57', 'Bahan Kain Kaos'),
(54, 'Manchester 160771', 'file_1506063944.jpg', 'Bahan Kain Kaos', 'Publish', '2017-09-22 14:05:44', 'Bahan Kain Kaos'),
(56, 'Tokai 6172', 'file_1506139184.jpg', 'Tokai 6172', 'Publish', '2017-09-23 10:59:44', 'Bahan Kain Kaos'),
(57, 'Tsukiji 151877', 'file_1506139394.jpg', 'Tsukiji 151877', 'Publish', '2017-09-23 11:03:14', 'Bahan Kain Kaos'),
(58, 'Tsukiji 157993', 'file_1506139411.jpg', 'Tsukiji 157993', 'Publish', '2017-09-23 11:03:31', 'Bahan Kain Kaos'),
(59, 'Tsukiji 158805', 'file_1506139449.jpg', 'Tsukiji 158805', 'Publish', '2017-09-23 11:04:09', 'Bahan Kain Kaos'),
(60, 'Tsukiji 159884', 'file_1506139466.JPG', 'Tsukiji 159884', 'Publish', '2017-09-23 11:04:26', 'Bahan Kain Kaos'),
(61, 'Tsukijji 160426', 'file_1506139481.jpg', 'Tsukijji 160426', 'Publish', '2017-09-23 11:04:41', 'Bahan Kain Kaos'),
(62, 'Tsukiji 160742', 'file_1506139498.jpg', 'Tsukiji 160742', 'Publish', '2017-09-23 11:04:58', 'Bahan Kain Kaos'),
(63, 'Tsukiji 161127', 'file_1506139518.jpg', 'Tsukiji 161127', 'Publish', '2017-09-23 11:05:18', 'Bahan Kain Kaos'),
(64, 'Tsukiji 163739', 'file_1506139539.jpg', 'Tsukiji 163739', 'Publish', '2017-09-23 11:05:39', 'Bahan Kain Kaos'),
(65, 'Tsukiji 164158', 'file_1506139555.jpg', 'Tsukiji 164158', 'Publish', '2017-09-23 11:05:55', 'Bahan Kain Kaos'),
(66, 'Tsukiji 164762', 'file_1506139578.jpg', 'Tsukiji 164762', 'Publish', '2017-09-23 11:06:18', 'Bahan Kain Kaos'),
(67, 'Tsukiji 166230', 'file_1506139598.jpg', 'Tsukiji 166230', 'Publish', '2017-09-23 11:06:38', 'Bahan Kain Kaos'),
(68, 'Tsunami 155921', 'file_1506139616.jpg', 'Tsunami 155921', 'Publish', '2017-09-23 11:06:56', 'Bahan Kain Kaos'),
(69, 'Tsunami 156961', 'file_1506139630.jpg', 'Tsunami 156961', 'Publish', '2017-09-23 11:07:10', 'Bahan Kain Kaos'),
(70, 'Tsukiji 157945', 'file_1506139645.jpg', 'Tsukiji 157945', 'Publish', '2017-09-23 11:07:25', 'Bahan Kain Kaos'),
(71, 'Tsunami 158424', 'file_1506139659.jpg', 'Tsunami 158424', 'Publish', '2017-09-23 11:07:39', 'Bahan Kain Kaos'),
(72, 'Tsunami 163151', 'file_1506139675.jpg', 'Tsunami 163151', 'Publish', '2017-09-23 11:07:55', 'Bahan Kain Kaos'),
(73, 'Tsunami 163730', 'file_1506139752.jpg', 'Tsunami 163730', 'Publish', '2017-09-23 11:09:12', 'Bahan Kain Kaos'),
(74, 'Tsunami 163956', 'file_1506139773.jpg', 'Tsunami 163956', 'Publish', '2017-09-23 11:09:33', 'Bahan Kain Kaos'),
(75, 'Tsunami 164956', 'file_1506139789.jpg', 'Tsunami 164956', 'Publish', '2017-09-23 11:09:49', 'Bahan Kain Kaos'),
(76, 'Tsunami 164956', 'file_1506139808.jpg', 'Tsunami 164956', 'Publish', '2017-09-23 11:10:08', 'Bahan Kain Kaos'),
(77, 'Tsunami 165762', 'file_1506139827.jpg', 'Tsunami 165762', 'Publish', '2017-09-23 11:10:27', 'Bahan Kain Kaos'),
(78, 'Tsunami 166297', 'file_1506139840.jpg', 'Tsunami 166297', 'Publish', '2017-09-23 11:10:40', 'Bahan Kain Kaos'),
(79, 'Tsunami 166442', 'file_1506139858.jpg', 'Tsunami 166442', 'Publish', '2017-09-23 11:10:58', 'Bahan Kain Kaos'),
(80, 'Tsunami 166893', 'file_1506139874.jpg', 'Tsunami 166893', 'Publish', '2017-09-23 11:11:14', 'Bahan Kain Kaos'),
(81, 'Tsunami 167510', 'file_1506139894.jpg', 'Tsunami 167510', 'Publish', '2017-09-23 11:11:34', 'Bahan Kain Kaos'),
(82, 'Tsunami 135552', 'file_1506139931.jpg', 'Tsunami 135552', 'Publish', '2017-09-23 11:12:11', 'Bahan Kain Kaos');

-- --------------------------------------------------------

--
-- Table structure for table `setting_web`
--

CREATE TABLE `setting_web` (
  `id_setting` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_web`
--

INSERT INTO `setting_web` (`id_setting`, `nama`, `gambar`) VALUES
(1, 'Slide 1 Home Page', 'file_1506180286.jpg'),
(2, 'Slide 2 Home Page', 'file_1506180336.jpg'),
(3, 'Slide 3 Home Page', 'file_1506180350.jpg'),
(4, 'Banner Kaos', 'file_1506183168.jpg'),
(5, 'Banner Sprei', 'file_1506183339.jpg'),
(6, 'Banner Page Tentang', 'file_1506181486.jpg'),
(7, 'Kategori Banner Kaos', 'file_1506184458.jpg'),
(8, 'Kategori Banner Spre', 'file_1506184464.jpg'),
(9, 'Logo Admin', 'file_1509201589.png'),
(10, 'Logo Favicon', 'file_1506409661.png');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `deskripsi`, `datetime`) VALUES
(1, '                         aaa', '2017-09-26 13:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` enum('Aktif','Non Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `email`, `password`, `jk`, `alamat`, `no_hp`, `status`) VALUES
(1, 'Sheptian Bagja Utama', 'sheptian96@gmail.com', '202cb962ac59075b964b07152d234b70', 'Pria', 'Jl.Pagarsih Gg.Holili No.14B RT02 RW09', '087824392239', 'Aktif'),
(10, 'Nawan Tutu Syahlampah', 'nawantsl@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Publish', 'Jl.Raya Cimahi No.123', '08723647812123', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL,
  `kategori` int(5) NOT NULL,
  `status` enum('Publish','Draft') NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `image`, `link_video`, `kategori`, `status`, `datetime`) VALUES
(4, 'Anda Pasti Menangis Jika Menyimak Kisah Ini | Ustadz Khalid Basalamah', 'file_1509341321.jpg', 'https://www.youtube.com/watch?v=aC0I-1ysJqo', 2, 'Publish', '2017-10-30 12:28:41'),
(5, 'Sesat di Dunia, di Siksa Alam Kubur ~ di Siksa Lagi di Akhirat, Naudzubillah | Ustadz Dr Khalid', 'file_1509340730.jpg', 'https://www.youtube.com/watch?v=4VNfZqlQ4NU', 3, 'Publish', '2017-10-30 12:18:50'),
(6, 'Penyesalan yang Tiada Berguna - Ustadz Adi Hidayat, Lc, MA', 'file_1509340894.jpg', 'https://www.youtube.com/watch?v=9oSS1HnA1kY', 4, 'Publish', '2017-10-30 12:21:34'),
(7, 'Menyiapkan Diri Menghadapi Ajal - Ustadz Adi Hidayat, Lc, MA', 'file_1509341003.jpg', 'https://www.youtube.com/watch?v=s0nLKibxujA', 4, 'Publish', '2017-10-30 12:23:23'),
(8, 'Kisah nyata hidayah dari rusaknya rumah tangga, Ustadz DR Khalid Basalamah, MA', 'file_1509341475.jpg', 'https://www.youtube.com/watch?v=Kfnlbyo81JI', 3, 'Publish', '2017-10-30 12:31:15'),
(9, 'Adakah Dimensi Waktu di Alam Barzah? | Ustadz Dr Khalid Basalamah MA', 'file_1509341685.jpg', 'https://www.youtube.com/watch?v=CcUrc-qDw8o', 3, 'Publish', '2017-10-30 12:34:45'),
(10, 'Tujuan Allah Ciptakan Manusia | Ustadz Dr Khalid Basalamah MA', 'file_1509341853.jpg', 'https://www.youtube.com/watch?v=0t6nKPNN6W8', 3, 'Publish', '2017-10-30 12:37:33'),
(11, 'Hadist ini Telah Terjadi Di Zaman Kita | Ustadz Dr Khalid Basalamah MA', 'file_1509342076.jpg', 'https://www.youtube.com/watch?v=no7QgfojYks', 3, 'Publish', '2017-10-30 12:41:16'),
(12, 'Jangan pernah berdusta atas nama Nabi Muhammad SAW – Ustadz Khalid Basalamah', 'file_1509342205.jpg', 'https://www.youtube.com/watch?v=AO2YvzIjxrU', 3, 'Publish', '2017-10-30 12:44:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `setting_web`
--
ALTER TABLE `setting_web`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `setting_web`
--
ALTER TABLE `setting_web`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
