-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 07:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berinti`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `jumlah_view` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `slug`, `judul`, `isi`, `gambar`, `caption`, `jumlah_view`, `tgl_upload`, `id_subkategori`, `id_pegawai`) VALUES
(11, '8-nama-titik-bor-di-tambang-emas-ilegal-suwawa-gorontalo', '8 Nama Titik Bor di Tambang Emas Ilegal Suwawa Gorontalo', '<p><strong><em>Jadi Intinya: Ada 8 titik bor aktif di tambang emasilegal Suwawa, Gorontalo. Beroperasi sejak tahun 90-an. Aktivitas tambang emas ilegal di Desa Tulabolo Timur, Kecamatan Suwawa Timur, Kabupaten Bone Bolango, Provinsi Gorontalo, terungkap memiliki delapan titik bor aktif.</em></strong></p>\r\n<p><em><strong>BERINTI.ID, </strong>Gorontalo - Delapan titik bor aktif itu memiliki nama sesuai dengan jarak tempuh kejauhan lokasi tambang. Namanya adalah Titik Bor 1, 3, 9, 15, 17, 18, 19, dan Gergaji.</em></p>\r\n<p>Lokasi tambang ini diidentifikasi berdasarkan penamaan titik bor dengan angka, yang menunjukkan lokasi penggalian. Menurut pengakuan seorang penambang, Leon Nasir, bahwa gunung emas di desa tersebut sejatinya memiliki 9 titik bor. Namun, 1 titik bor itu sudah tak digunakan lagi. Sebab, tak ada emas didalamnya. \"Kalau dihitung sebenarnya ada 9 titik bor, tapi yang satu itu sudah tak berfungsi lagi, karena tidak ada emas di dalamnya,\" ungkap Leon, Kamis (11/7/2024) pagi hari di lokasi.</p>\r\n<h4>Udah tahu tambang emas ada sejak kapan?</h4>\r\n<p>Aktivitas pertambangan di wilayah Suwawa ini mulai beroperasi sejak tahun 90-an. Lokasi yang pertama kali dilakukan penggalian yaitu titik bor 17 pada tahun 1992. Kemudian dua tahun berikutnya para penambang melakukan penggalian kembali dan menemukan lubang yang begitu banyak emas, tepatnya berada di titik bor 1. \"Dulu itu yang pertama kali dilakukan penggalian di titik bor 17 tahun 1992, nanti di tahun 1994 titik bor 1 ini baru ada aktivitas tambang,\" jelas Leon yang mulai menambang sejak 1996 silam. Cerita Leon, pada tahun 90-an, terdapat sebuah perusahaan yang bernama Tropik. Perusahaan ini yang pertama kali menambang di tambang emas Suwawa.</p>\r\n<p>Adapun penggunaan nama titik bor di tambang ilegal Suwawa ini menggunakan angka, sesuai lokasi yang digali oleh para penambang. Di tiap titik bor, penambang akan membangun semacam rumah yang terbuat dari papan dan kayu dengan beralaskan terpal. Rumah-rumah itu akan dijadikan tempat untuk peristirahatan para penambang dan untuk pengolahan hasil tambang. \"Jadi di sini sudah semacam perkampungan, kalau sudah melihat ada rumah-rumah yang terbangun berarti itu ada aktivitas tambangnya atau titik bor,\" tuturnya.</p>\r\n<p>Kemudian, untuk menuju ke titik bor 1 sampai ke titik bor lainnya membutuhkan yang cukup lama, bahkan bisa berjam-jam untuk mencapainya. Seperti halnya dari titik bor 17 menuju ke titik bor 1, perlu memakan waktu sejam menggunakan ojek trail. Sementara, untuk menempuh perjalanan dengan berjalan kaki mencapai 2 - 3 jam. Untuk penghitungan jarak titik bor, dimulai dari angka besar sampai ke angka paling kecil. \"Jadi yang paling jauh itu titik bor 1 dan 3 kalau dihitung dari bawah atau Desa Tulabolo,\" timpalnya</p>\r\n<p><strong><em>Jadi, intinya.. Tambang yang ada di Suwawa itu uda ada sejak tahun 90an. Dan Tropik adalah perusahaan pertama yang menambang di wilayah ini.</em></strong></p>\r\n<p>&nbsp;</p>', '66b0df4a1c552.jpg', '8 Nama Titik Bor di Tambang Emas Ilegal Suwawa Gor', 0, '2024-08-20', 31, 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita_label`
--

CREATE TABLE `berita_label` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_label` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita_label`
--

INSERT INTO `berita_label` (`id`, `id_berita`, `id_label`) VALUES
(19, 11, 5),
(20, 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Hulonthalo'),
(8, 'Olahraga'),
(9, 'Human Interest Story'),
(10, 'Nusantara'),
(11, 'Politik'),
(12, 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id_label` int(11) NOT NULL,
  `nama_label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id_label`, `nama_label`) VALUES
(5, 'Politik'),
(8, 'Budaya'),
(9, 'E-sport');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `nohp`, `foto`, `username`, `pass`) VALUES
(1, 'Ramadhan Podungge', 'Wartawan', '09090909', 'avatar-4.png', 'rama', '$2y$10$Tp8SRhF8C397ltZjQuLQuuLYPBiKj6qLaQQo.ynfhu6aiZL9pyPXi'),
(2, 'Tomi', 'Editor', '08967778889', 'avatar-4.png', 'tomi', '$2y$10$a0SggpbWMBtUsj964T5pbehfbXl2hes3beIUzhRPb05cjTS3sjxHC'),
(3, 'Azwar Ramadhan Botutihe', 'Super Admin', '6578567', 'avatar-4.png', 'azbot', '$2y$10$EBka7OdXC2TORDWrnoPVp.pLQCrtFvDQ1mgEq1mRfXE9E6tVzhm.6');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_subkategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`id_subkategori`, `id_kategori`, `nama_subkategori`) VALUES
(15, 1, 'Provinsi Gorontalo'),
(27, 8, 'Esport'),
(28, 8, 'Sepak Bola'),
(29, 1, 'Kota Gorontalo'),
(30, 10, 'Nusantara'),
(31, 1, 'Kabupaten Bone Bolango'),
(32, 1, 'Kabupaten Gorontalo'),
(33, 1, 'Kabupaten Boalemo'),
(34, 1, 'Kabupaten Gorontalo Utara'),
(35, 1, 'Kabupaten Pohuato'),
(41, 8, 'Takraw'),
(42, 8, 'Silat'),
(43, 9, 'Kisah Pedagang'),
(44, 9, 'Kisah Inspiratif'),
(45, 9, 'Kisah Sukses'),
(46, 11, 'Pilkada'),
(47, 11, 'KPU'),
(48, 11, 'Bawaslu'),
(49, 11, 'Caleg'),
(50, 12, 'Spesifikasi Handphone, Pc, Dan Lapotop'),
(51, 12, 'Perbedaan Produk Produk Teknologi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita_label`
--
ALTER TABLE `berita_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id_subkategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita_label`
--
ALTER TABLE `berita_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id_subkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
