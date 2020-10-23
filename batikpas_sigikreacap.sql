-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2020 at 09:57 PM
-- Server version: 5.7.32-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batikpas_sigikreacap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(10) NOT NULL,
  `id_ikm` int(20) DEFAULT NULL,
  `judul_dokumentasi` varchar(30) DEFAULT NULL,
  `gambar_dokumentasi` varchar(1000) DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL,
  `kategori_dokumentasi` enum('pameran','produksi','seminar','lainnya') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `id_ikm`, `judul_dokumentasi`, `gambar_dokumentasi`, `keterangan`, `kategori_dokumentasi`) VALUES
(2, 3, 'Seminar A', '2.jpg', 'tes a;soidhfuahsd fuashdf aisudhf asidufh aksdfh asldiufh asdlif juduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljuduljudul', 'seminar'),
(3, 17, 'Produksi IKM A', '3.jpg', 'tes', 'produksi'),
(5, 3, 'Produksi IKM B    ', 'Lighthouse.jpg', 'tes    ', 'produksi'),
(6, 17, 'Produksi IKM C  23  ', 'Penguins.jpg', 'tes  23  ', 'seminar');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(10) NOT NULL,
  `nama_donatur` varchar(100) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `jumlah`) VALUES
(3, 'hajjah rhoma irama', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `ikm`
--

CREATE TABLE `ikm` (
  `id_ikm` int(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `produk` varchar(1000) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `ijin_usaha` varchar(100) DEFAULT NULL,
  `jumlah_tk` varchar(10) DEFAULT NULL,
  `bahan_baku` varchar(100) DEFAULT NULL,
  `kebutuhan_bahan_baku` varchar(100) DEFAULT NULL,
  `kapasitas_produksi` varchar(100) DEFAULT NULL,
  `nilai_investasi` varchar(100) DEFAULT NULL,
  `limbah` varchar(1000) DEFAULT NULL,
  `penjualan` varchar(100) DEFAULT NULL,
  `verifikasi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikm`
--

INSERT INTO `ikm` (`id_ikm`, `judul`, `alamat`, `gambar`, `tanggal`, `latitude`, `longitude`, `produk`, `kategori`, `kontak`, `ijin_usaha`, `jumlah_tk`, `bahan_baku`, `kebutuhan_bahan_baku`, `kapasitas_produksi`, `nilai_investasi`, `limbah`, `penjualan`, `verifikasi`) VALUES
(23, 'CV Uji coba', 'Jalan diponegoro 34', 'amikom.JPG', NULL, '-7.72057625466862', '108.85831411037447', 'Batik dan kerajinan tangan', '3', '088078967896789', '43.54355.546.67', '13', '11', '50', '50', '30000000', 'tes', 'tes', NULL),
(24, 'CV Ujicoba 2', 'Jalan nangka no 34 cilacap', 'anstar2.jpg', NULL, '-7.628907946891445', '108.80658138118537', 'Ikan tuna kemasan', '2', '086768675785', '43.54355.546.67', '22', '11', '22', '22', '30000000', 'tes', 'tes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(2, 'Kuliner'),
(3, 'Kerajinan');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriproduk`
--

CREATE TABLE `kategoriproduk` (
  `id_kategoriproduk` int(10) NOT NULL,
  `nama_kategoriproduk` varchar(1000) DEFAULT NULL,
  `kode_industrikreatif` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoriproduk`
--

INSERT INTO `kategoriproduk` (`id_kategoriproduk`, `nama_kategoriproduk`, `kode_industrikreatif`) VALUES
(1, 'Kategori Satu ', NULL),
(3, 'Kategori Dua ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `kode_ikm` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kategori_produk` varchar(20) DEFAULT NULL,
  `gambar_produk` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode_ikm`, `nama`, `kategori_produk`, `gambar_produk`) VALUES
(4, 19, 'Produk 1', '3', '458-4583419_heart-love-red-shape-valentine-png-image-love3.jpg'),
(5, 18, 'Produk 2', '3', '15833910529101.gif'),
(6, 19, 'Produk  3   ', '3', 'klipingya.jpg'),
(7, 19, 'Produk 4', '3', 'codingexpression.PNG'),
(8, 19, 'Tes produk    ', '3', '15833910529103.gif');

-- --------------------------------------------------------

--
-- Table structure for table `profil_petugas`
--

CREATE TABLE `profil_petugas` (
  `idpetugas` int(10) NOT NULL,
  `namapetugas` varchar(50) DEFAULT NULL,
  `jabatanpetugas` varchar(1000) DEFAULT NULL,
  `gambarpetugas` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_petugas`
--

INSERT INTO `profil_petugas` (`idpetugas`, `namapetugas`, `jabatanpetugas`, `gambarpetugas`) VALUES
(1, 'Bapak Jokowi', 'Pengawas produksi', 'kurban-sapi-domba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kerajinan` varchar(1000) DEFAULT NULL,
  `kuliner` varchar(100) DEFAULT NULL,
  `fashion` varchar(100) DEFAULT NULL,
  `lainnya` varchar(100) DEFAULT NULL,
  `aksesoris` varchar(100) DEFAULT NULL,
  `kebudayaan` varchar(100) DEFAULT NULL,
  `nama_bahanbaku` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `tanggal`, `kerajinan`, `kuliner`, `fashion`, `lainnya`, `aksesoris`, `kebudayaan`, `nama_bahanbaku`) VALUES
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kayu jati'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kertas'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ikan laut');

-- --------------------------------------------------------

--
-- Table structure for table `users_ikm_cilacap`
--

CREATE TABLE `users_ikm_cilacap` (
  `user_id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jabatan` varchar(1000) DEFAULT NULL,
  `kode_ikm` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_ikm_cilacap`
--

INSERT INTO `users_ikm_cilacap` (`user_id`, `level`, `username`, `password`, `nama_user`, `email`, `jabatan`, `kode_ikm`) VALUES
(1, '1', 'admin', 'admin', 'Super Admin Aplikasi', 'cilacap@gmail.com', 'tes', NULL),
(2, '2', 'donal', 'trump', 'donal trump  ', 'donaltrump@gmail.com', 'Presiden  AS', 23),
(3, '2', 'prabowo', 'prabowo', 'prabowo', 'prabowo@gmail.com', 'tes', 24),
(6, '3', 'ikm', 'ikm', 'ikm  ', 'ikm@gmail.com', 'ikm', 23),
(7, '3', 'ahay', 'ahay', 'ahay', 'ahay@gmail.com', 'ahay', 23),
(8, '3', 'daun', 'daun', 'daun', 'daun@gmail.com', 'daun', 24),
(10, '3', 'sultan', 'sultan', 'sultan', 'bundasorayaku@gmail.com', NULL, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  ADD PRIMARY KEY (`id_kategoriproduk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_petugas`
--
ALTER TABLE `profil_petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `users_ikm_cilacap`
--
ALTER TABLE `users_ikm_cilacap`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `dokumentasi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ikm`
--
ALTER TABLE `ikm`
  MODIFY `id_ikm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  MODIFY `id_kategoriproduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_ikm_cilacap`
--
ALTER TABLE `users_ikm_cilacap`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
