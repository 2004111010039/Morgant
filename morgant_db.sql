-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 12:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morgant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_user`
--

CREATE TABLE `akun_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_user`
--

INSERT INTO `akun_user` (`id`, `username`, `password`, `ttl`, `alamat`, `jenis_kelamin`, `kewarganegaraan`, `no_tlpn`, `email`) VALUES
(1, 'Admin', 'admin', '', '', '', '0', '', ''),
(3, 'User', 'user', '', '', '', '', '', ''),
(5, 'Haiqal', '123', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama-rs` varchar(52) NOT NULL,
  `profil-rs` text NOT NULL,
  `no-tlpn-rs` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `link-gmaps` text NOT NULL,
  `jumlah-ambulan` int(11) NOT NULL,
  `namaimg` varchar(100) NOT NULL,
  `ukuranimg` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama-rs`, `profil-rs`, `no-tlpn-rs`, `alamat`, `link-gmaps`, `jumlah-ambulan`, `namaimg`, `ukuranimg`, `tipe`) VALUES
(1, 'RS Pendidikan USK', 'Rumah Sakit Pendidikan Universitas Syiah Kuala (RSP USK) adalah salah satu Rumah Sakit di wilayah Kota Banda Aceh milik Universitas Syiah Kuala yang tepatnya berada di wilayah Kopelma Darussalam Banda Aceh, RSP adalah bantuan (hibah) dari Saudi Charity dan Islamic Development Bank (IDB) pasca musibah tsunami melanda Banda Aceh tahun 2004. Pendirian Rumah Sakit ini adalah untuk menjawab kebutuhan universitas dan kawasan pelajar-mahasiuswa di Banda Aceh yang belum memiliki Rumah Sakit. Maksud dan tujuannya adalah dalam rangka mempermudah pemberian pelayanan serta fasilitas kesehatan pada civitas akademika Universitas Syiah Kuala khususnya dan seluruh masyarakat Banda Aceh pada umumnya.', '0811 6819755', 'Jln. Lingkar Kampus USK, Kopelma Darussalam, Banda Aceh, Aceh, 23111 INDONESIA', 'https://www.google.com/maps/place/RS+Prince+Nayef+Unsyiah/@5.5657135,95.3714053,16.75z/data=!4m5!3m4!1s0x304037b92dc4e255:0xff0a9e64b488bc48!8m2!3d5.5638954!4d95.3698586', 3, 'rs-usk.jpg', 0, ''),
(2, 'RSUD Meuraxa', 'RSUD Meuraxa sejak menjadi Rumah Sakit Umum milik Pemerintah Kota Banda Aceh pada tahun 1997 hingga tahun 2013 ini telah melalui berbagai peristiwa bersejarah turut juga disertai dengan perpindahan lokasi rumah sakit. ada awalnya RSUD Meuraxa merupakan rumah sakit milik Yayasan Meuraxa yang didirikan oleh tokoh-tokoh masyarakat dari kecamatan Meuraxa Kota Banda Aceh. Secara resmi rumah sakit ini kemudian diserahkan kepada Pemerintah Provinsi Daerah Istimewa Aceh melalui Gubernur Daerah Istimewa Aceh pada tanggal 26 April 1997, dengan surat penyerahan Nomor: 15/PKS/1997. Selanjutnya secara resmi pada tanggal 20 September 1997 oleh Pemerintah Provinsi Daerah Istimewa Aceh, yang tercantum dalam surat Nomor: 445/653/1997, pengelolaan rumah sakit yang kemudian diberi nama Rumah Sakit Umum Meuraxa ini diserahkan kepada Pemerintah Kota Banda Aceh untuk dijadikan Rumah Sakit Umum Daerah (RSUD) di Kota Banda Aceh. Tujuan penyerahan pengelolaan ini guna menunjang proses peningkatan dan pengembangan fungsi dan peran RSUD Meuraxa agar lebih efisien dan efektif sebagai instansi pemberi pelayanan kesehatan kepada masyarakat.', '(0651) 43097', 'Jl. Soekarno - Hatta No.1, Mibo, Kec. Banda Raya, Kota Banda Aceh, Aceh 23231', 'https://maps.app.goo.gl/B3naisUFc7prQBTc6', 4, 'RSUD Meuraxa.jpg', 0, ''),
(3, 'RSUD Harapan Bunda', 'Rumah Sakit Harapan Bunda beranjak dari praktek pribadi, Pendiri Yayasan Harapan Bunda, dr. Zainal Bakri TA,Sp.OG, ketika itu beliau pada tahun 1991 adalah seorang Pegawai Negeri Sipil mendirikan Rumah Bersalin pada tahun 1991-1993, pada awalnya dari Rumah Bersalin kecil yang sekarang akhinya menjadi cikal bakal Rumah Sakit Harapan Bunda dengan komplek yang terlihat sekarang. Rumah Sakit Harapan Bunda hari kelahirannya dianggap tanggal 25 Desember 1991 yang dikaitkan dengan kelahiran bayi pertama di Rumah Bersalin, ketika itu persalinan ditolong oleh pendiri Rumah Sakit Harapan Bunda.', '(0651) 48114 ', 'Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243.', 'https://maps.app.goo.gl/5ZFxfT6yaFELURVaA', 0, 'harapan bunda.jpg', 0, ''),
(4, 'RSU Malahayati', 'Rumah Sakit Malahayati Banda Aceh adalah salah satu rumah sakit swasta yang ada di Kota Banda Aceh.', '(0651) 41517', 'Jl. Cut Nyak Dhien No.498, Lamtemen Tim., Kec. Jaya Baru, Kota Banda ', 'https://maps.app.goo.gl/w72acgQoDK2WPJGv7', 2, 'Malahayati.JPG', 0, ''),
(5, 'RS Teungku Fakinah', 'RS Teungku Fakinah merupakan Rumah Sakit yang berada di kawasan Banda Aceh. Layanan dan fasilitas yang disediakan diantaranya UGD, Ruang Operasi, Ruang Isolasi,Laktasi, Rawat Jalan, Rawat Inap dan Perawatan Intensif dengan visi menjadi rumah sakit yang bermutu, nyaman dan aman dalam memberikan pelayanan kesehatan.', '(0651) 41454', 'Jl. Jenderal Sudirman No. 27, Geuceu Iniem, Kec. Banda Raya, Kota Banda Aceh, Aceh', 'https://maps.app.goo.gl/MKS6H5JSTyXomkY99', 0, 'teungku fakinah.jpg', 0, ''),
(6, 'RS Kesdam Iskandar Muda', 'Rumah Sakit Tk II Iskandar Muda (RSIM) merupakan rumah sakit yang melayani para Prajurit TNI-AD, PNS TNI dan keluarganya serta masyarakat umum yang membutuhkannya. Seluruh jajaran personil RSIM mempunyai komitmen untuk memberikan pelayanan kesehatan yang bermutu dan berorientasi kepada kepuasan dan keselamatan pasien (patient safety) sesuai tuntutan akreditasi rumah sakit saat ini. Oleh karena itu untuk mewujudkan komitmen tersebut, kami terus berusaha memberikan informasi kepada seluruh pengguna jasa layanan kesehatan di RSIM melalui berbagai media informasi yang ada. Salah upaya yang telah di tempuh adalah keberadaan media informasi website RS Iskandar Muda.', '065124712', 'H83F+VRV, Jl. T. Angkasa Bendahara, Kuta Alam, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', 'https://maps.app.goo.gl/KvfYfDzWxnrfd77c8', 5, 'rsiskandar muda.jpg', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
