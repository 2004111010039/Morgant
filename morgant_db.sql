-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 05:31 AM
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
(5, 'Haiqal', '123', 's', 's', 's', '', '', ''),
(12, 'yusuf', '12345', '131', '2e231', '1232', '132', '1231', '1321'),
(13, 'Ihsan', 'Ihsan', 'dasd', 'dasd', 'dasa', 'd12', 'ddsa', 'd12'),
(14, 'adam', 'akbar', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lobyrsuza`
--

CREATE TABLE `lobyrsuza` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lobyrsuza`
--

INSERT INTO `lobyrsuza` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(1, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5753675,95.3477725');

-- --------------------------------------------------------

--
-- Table structure for table `rsiacempakaazzahra`
--

CREATE TABLE `rsiacempakaazzahra` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rskesdamiskandarmuda`
--

CREATE TABLE `rskesdamiskandarmuda` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rskesdamiskandarmuda`
--

INSERT INTO `rskesdamiskandarmuda` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(2, 'Ihsan', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5640546,95.368733'),
(4, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5621569,95.3733805');

-- --------------------------------------------------------

--
-- Table structure for table `rspendidikanusk`
--

CREATE TABLE `rspendidikanusk` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rspendidikanusk`
--

INSERT INTO `rspendidikanusk` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(10, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.56403,95.3687261'),
(12, 'adam', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5653589,95.3728757'),
(16, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5654041,95.3610565');

-- --------------------------------------------------------

--
-- Table structure for table `rsteungkufakinah`
--

CREATE TABLE `rsteungkufakinah` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsteungkufakinah`
--

INSERT INTO `rsteungkufakinah` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(1, 'Ihsan', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5653749,95.3729381');

-- --------------------------------------------------------

--
-- Table structure for table `rsudharapanbunda`
--

CREATE TABLE `rsudharapanbunda` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rsudmeuraxa`
--

CREATE TABLE `rsudmeuraxa` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsudmeuraxa`
--

INSERT INTO `rsudmeuraxa` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(4, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5640381,95.3687221');

-- --------------------------------------------------------

--
-- Table structure for table `rsumalahayati`
--

CREATE TABLE `rsumalahayati` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rsumeutia`
--

CREATE TABLE `rsumeutia` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsumeutia`
--

INSERT INTO `rsumeutia` (`id`, `nama_pelapor`, `laporan`, `link`) VALUES
(1, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5621569,95.3733805'),
(2, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5653709,95.3728399'),
(3, 'Haiqal', 'Telah terjadi kecelakaan di lokasi', 'http://www.google.com/maps/place/5.5653709,95.3728399');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakitibudananak`
--

CREATE TABLE `rumahsakitibudananak` (
  `id` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `laporan` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama_rs` varchar(52) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil_rs` text NOT NULL,
  `no_tlpn_rs` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `link_gmaps` text NOT NULL,
  `jumlah_ambulan` int(11) NOT NULL,
  `namaimg` varchar(100) NOT NULL,
  `ukuranimg` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `jarak` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama_rs`, `password`, `profil_rs`, `no_tlpn_rs`, `alamat`, `link_gmaps`, `jumlah_ambulan`, `namaimg`, `ukuranimg`, `tipe`, `lat`, `lon`, `jarak`) VALUES
(1, 'RS Pendidikan USK', 'rspendidikanusk', 'Rumah Sakit Pendidikan Universitas Syiah Kuala (RSP USK) adalah salah satu Rumah Sakit di wilayah Kota Banda Aceh milik Universitas Syiah Kuala yang tepatnya berada di wilayah Kopelma Darussalam Banda Aceh, RSP adalah bantuan (hibah) dari Saudi Charity dan Islamic Development Bank (IDB) pasca musibah tsunami melanda Banda Aceh tahun 2004. Pendirian Rumah Sakit ini adalah untuk menjawab kebutuhan universitas dan kawasan pelajar-mahasiuswa di Banda Aceh yang belum memiliki Rumah Sakit. Maksud dan tujuannya adalah dalam rangka mempermudah pemberian pelayanan serta fasilitas kesehatan pada civitas akademika Universitas Syiah Kuala khususnya dan seluruh masyarakat Banda Aceh pada umumnya.', '0811 6819755', 'Jln. Lingkar Kampus USK, Kopelma Darussalam, Banda Aceh, Aceh, 23111 INDONESIA', 'https://www.google.com/maps/place/RS+Prince+Nayef+Unsyiah/@5.5657135,95.3714053,16.75z/data=!4m5!3m4!1s0x304037b92dc4e255:0xff0a9e64b488bc48!8m2!3d5.5638954!4d95.3698586', 2, 'rs-usk.jpg', 0, '', '5.563988151295694', '95.36985369078214', 2.76),
(2, 'RSUD Meuraxa', 'rsudmeuraxa', 'RSUD Meuraxa sejak menjadi Rumah Sakit Umum milik Pemerintah Kota Banda Aceh pada tahun 1997 hingga tahun 2013 ini telah melalui berbagai peristiwa bersejarah turut juga disertai dengan perpindahan lokasi rumah sakit. ada awalnya RSUD Meuraxa merupakan rumah sakit milik Yayasan Meuraxa yang didirikan oleh tokoh-tokoh masyarakat dari kecamatan Meuraxa Kota Banda Aceh. Secara resmi rumah sakit ini kemudian diserahkan kepada Pemerintah Provinsi Daerah Istimewa Aceh melalui Gubernur Daerah Istimewa Aceh pada tanggal 26 April 1997, dengan surat penyerahan Nomor: 15/PKS/1997. Selanjutnya secara resmi pada tanggal 20 September 1997 oleh Pemerintah Provinsi Daerah Istimewa Aceh, yang tercantum dalam surat Nomor: 445/653/1997, pengelolaan rumah sakit yang kemudian diberi nama Rumah Sakit Umum Meuraxa ini diserahkan kepada Pemerintah Kota Banda Aceh untuk dijadikan Rumah Sakit Umum Daerah (RSUD) di Kota Banda Aceh. Tujuan penyerahan pengelolaan ini guna menunjang proses peningkatan dan pengembangan fungsi dan peran RSUD Meuraxa agar lebih efisien dan efektif sebagai instansi pemberi pelayanan kesehatan kepada masyarakat.', '(0651) 43097', 'Jl. Soekarno - Hatta No.1, Mibo, Kec. Banda Raya, Kota Banda Aceh, Aceh 23231', 'https://maps.app.goo.gl/B3naisUFc7prQBTc6', 2, 'RSUD Meuraxa.jpg', 0, '', '5.518321720072557', '95.31782972551287', 7.16),
(3, 'RSUD Harapan Bunda', 'rsudharapan', 'Rumah Sakit Harapan Bunda beranjak dari praktek pribadi, Pendiri Yayasan Harapan Bunda, dr. Zainal Bakri TA,Sp.OG, ketika itu beliau pada tahun 1991 adalah seorang Pegawai Negeri Sipil mendirikan Rumah Bersalin pada tahun 1991-1993, pada awalnya dari Rumah Bersalin kecil yang sekarang akhinya menjadi cikal bakal Rumah Sakit Harapan Bunda dengan komplek yang terlihat sekarang. Rumah Sakit Harapan Bunda hari kelahirannya dianggap tanggal 25 Desember 1991 yang dikaitkan dengan kelahiran bayi pertama di Rumah Bersalin, ketika itu persalinan ditolong oleh pendiri Rumah Sakit Harapan Bunda.', '(0651) 48114 ', 'Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243.', 'https://maps.app.goo.gl/5ZFxfT6yaFELURVaA', 2, 'harapan bunda.jpg', 0, '', '5.540088', '95.310001', 5.74),
(4, 'RSU Malahayati', 'rsumalahayati', 'Rumah Sakit Malahayati Banda Aceh adalah salah satu rumah sakit swasta yang ada di Kota Banda Aceh.', '(0651) 41517', 'Jl. Cut Nyak Dhien No.498, Lamtemen Tim., Kec. Jaya Baru, Kota Banda ', 'https://maps.app.goo.gl/w72acgQoDK2WPJGv7', 0, 'Malahayati.JPG', 0, '', '5.5343415090018135', '95.30311346968968', 6.73),
(5, 'RS Teungku Fakinah', 'rsteungku', 'RS Teungku Fakinah merupakan Rumah Sakit yang berada di kawasan Banda Aceh. Layanan dan fasilitas yang disediakan diantaranya UGD, Ruang Operasi, Ruang Isolasi,Laktasi, Rawat Jalan, Rawat Inap dan Perawatan Intensif dengan visi menjadi rumah sakit yang bermutu, nyaman dan aman dalam memberikan pelayanan kesehatan.', '(0651) 41454', 'Jl. Jenderal Sudirman No. 27, Geuceu Iniem, Kec. Banda Raya, Kota Banda Aceh, Aceh', 'https://maps.app.goo.gl/MKS6H5JSTyXomkY99', 2, 'fakinah rs.jpg', 0, '', '5.5297703163320335', '95.30406529226288', 7.01),
(6, 'RS Kesdam Iskandar Muda', 'rskesdam', 'Rumah Sakit Tk II Iskandar Muda (RSIM) merupakan rumah sakit yang melayani para Prajurit TNI-AD, PNS TNI dan keluarganya serta masyarakat umum yang membutuhkannya. Seluruh jajaran personil RSIM mempunyai komitmen untuk memberikan pelayanan kesehatan yang bermutu dan berorientasi kepada kepuasan dan keselamatan pasien (patient safety) sesuai tuntutan akreditasi rumah sakit saat ini. Oleh karena itu untuk mewujudkan komitmen tersebut, kami terus berusaha memberikan informasi kepada seluruh pengguna jasa layanan kesehatan di RSIM melalui berbagai media informasi yang ada. Salah upaya yang telah di tempuh adalah keberadaan media informasi website RS Iskandar Muda.', '065124712', 'H83F+VRV, Jl. T. Angkasa Bendahara, Kuta Alam, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', 'https://maps.app.goo.gl/KvfYfDzWxnrfd77c8', 3, 'rsiskandar muda.jpg', 0, '', '5.5554069052985176', '95.32476150062723', 3.38),
(25, 'RSIA Cempaka Az Zahra', 'cempaka', 'Rumah Sakit Umum Cempaka Az-Zahra merupakan Rumah Sakit yang berlokasi di Banda Aceh, Nanggroe Aceh Darussalam. Rumah Sakit bermula diresmikan di tahun 2008 sebagai Rumah Sakit Bersalin, dan di tahun 2009 sebagai Rumah Sakit umum Tipe C. Pada awal tahun 2015 Rumah Sakit berubah status menjadi Rumah Sakit Ibu dan Anak kelas C.\r\nRS Cempaka Az-Zahra memberikan pelayanan unggulan Ibu dan Anak dengan layanan penunjang kamar NICU/PICU, kamar bersalin, Kamar perawatan bayi yang dilengkapi dengan Bathub. Rumah Sakit juga dilengkapi dengan layanan security 24 jam dengan CCTV untuk menjaga keamanan dan kenyamanan, lahan parkir, dan ambulance\r\n', '065131066', 'H88H+RPV, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123', 'https://maps.app.goo.gl/aEfJu2V29atMdZTc6', 3, 'cempaka.jpg', 0, '', '5.567353216995367', '95.32928546784221', 2.23),
(26, 'Rumah Sakit Ibu dan Anak', '12345', 'Dalam kunjungannya ke Banda Aceh pada tanggal 19 Desember 2002 Menteri Kesehatan Republik Indonesia beserta Tim Advance Departemen Kesehatan Republik Indonesia, yang didampingi Kepala Dinas Kesehatan Aceh(dr. Cut Idawani, M.Sc) dan para pejabat eselon III di lingkungan Dinas Kesehatan Aceh, secara langsung melihat kegiatan pelayanan kesehatan dasar di UPTD BLPKM Dinas Kesehatan Aceh. Pada kesempatan tersebut dalam pengarahannya, Menteri Kesehatan Republik Indonesiamenyarankan supaya UPTD BLPKM Dinas Kesehatan Aceh dapat ditingkatkan menjadi Rumah Sakit Khusus Ibu dan Anak, dengan pertimbangan sebagai berikut : Untuk tingkat Provinsi Aceh belum terdapat rumah sakit khusus yang memberikan pelayanan kesehatan ibu dan anak.  Lokasi UPTD BLPKM sangat strategis karena terletak di Kota Banda Aceh sebagai ibukota provinsi, sehingga dapat menjadi contoh bagi kabupaten/kota di Pemerintah Aceh.  Kunjungan pasien ibu dan anak sudah memadai untuk sebuah rumah sakit dan cenderung akan terus meningkat sejalan dengan semakin kompleksitasnya permasalahan kesehatan ibu dan anak, yang memerlukan penanganan secara khusus dan dini.  Menindaklanjuti arahan Menteri Kesehatan Republik Indonesia selanjutnya kepala UPTD BLPKM Dinas Kesehatan Aceh dengan suratnya nomor: 445/145 tanggal 27 Mei2003 menyampaikan proposal tentang pengembangan UPTD BLPKM Dinas Kesehatan Aceh menjadi Rumah Sakit Ibu dan Anak  kepada Gubernur Aceh. Usul pengembangan UPTD BLPKM menjadi Rumah Sakit Ibu dan Anak mendapat tanggapan secara serius dari Gubernur Aceh, dengan suratnya Nomor: 445/15103 tanggal 5 Juli 2003 memerintahkan Dinas Kesehatan Aceh untuk segera mempersiapkan segala sesuatu untuk pembentukan Rumah Sakit Ibu dan Anak.', '0651637796', 'Alamat : Jalan Prof. A. Majid Ibrahim I No. 3, Meuraxa, Punge Jurong, Kec. Meuraxa, Kota Banda Aceh,', 'https://maps.app.goo.gl/PEEKN9tmQvuntWXT8', 2, 'rsia image.jpg', 0, '', '5.551840710120379', '95.31211389626309', 4.74),
(27, 'RSU Meutia', 'rsumeutia', 'Rumah sakit Daerah Rsu Meutia. Rumah Sakit adalah institusi pelayanan kesehatan yang menyelenggarakan pelayanan kesehatan perorangan secara paripurna yang menyediakan pelayanan 24 jam rawat inap, rawat jalan, dan gawat darurat   Rumah sakit umumnya Melayani hampir seluruh penyakit umum, dan biasanya memiliki institusi perawatan darurat yang siaga 24 jam (ruang gawat darurat) untuk mengatasi bahaya dalam waktu secepatnya dan memberikan pertolongan pertama.   berikut rincian mengenai profil Daerah Rsu Meutia, akreditas serta alamat jelasnya simak.   Lokasi Rumah sakit cut meutia sangat strategis dan membantu masyarakat di sekitar kota banda aceh kususnya   Selain tempatnya yang berada di tengah kota, Rsu Cut Meutia Kota Banda Aceh ini juga dekat dengan terminal dan penginapan.', '081370489708', 'Jl. Cut Mutia No.55, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116 ', 'https://maps.app.goo.gl/6GdC26RrYYNVsEDa6', 0, 'meutia.jpg', 0, '', '5.5588143691146445', '95.31754546968973', 3.82),
(32, 'Loby RSUZA', 'lobyrsuza', 'Dengan memanjatkan puji dan syukur kehadirat Allah S.W.T kami telah dapat menyelesaikan website Rumah Sakit Umum Daerah dr. Zainoel Abidin sebagai sumber Informasi yang dapat dimanfaatkan untuk gambaran Rumah Sakit Umum Daerah dr. Zainoel Abidin. Website ini merupakan informasi tentang Rumah Sakit Umum Daerah dr. Zainoel Abidin yang diproses dari berbagai sumber data resmi. Selain itu informasi ini juga meliputi kegiatan administrasi, kegiatan pelayanan, keadaan prasarana dan sarana fisik, ketenagaan, jenis pelayanan, dan lain - lain. Untuk itu kami sangat mengharapkan dukungan semua pihak terkait (stake holders) khususnya dilingkungan Rumah Sakit Umum Daerah dr. Zainoel Abidin untuk memberikan kritik dan saran terhadap website Rumah Sakit Umum Daerah dr. Zainoel Abidin yang disampaikan untuk membangun kerja sama yang baik. Kritik dan saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan Website ini dimasa datang. Semoga Website ini memberikan manfaat bagi kita semua.', '(0651) 34565', 'Lampriet, Jeulingke, Kec. Syiah Kuala, Kota Banda Aceh, Aceh', 'https://www.google.com/maps/place/LOBBY+RSUZA/@5.5782188,95.3316885,15z/data=!4m9!1m2!2m1!1srs+terdekat!3m5!1s0x3040374bcd0dca4b:0x60c03c72e208eec4!8m2!3d5.5782216!4d95.3455484!15sCgtycyB0ZXJkZWthdCIDkAEBkgEIaG9zcGl0YWw', 0, 'rsuza.jpg', 0, '', '5.579051735237717', '95.34550720119269', 0.47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lobyrsuza`
--
ALTER TABLE `lobyrsuza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsiacempakaazzahra`
--
ALTER TABLE `rsiacempakaazzahra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rskesdamiskandarmuda`
--
ALTER TABLE `rskesdamiskandarmuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rspendidikanusk`
--
ALTER TABLE `rspendidikanusk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsteungkufakinah`
--
ALTER TABLE `rsteungkufakinah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsudharapanbunda`
--
ALTER TABLE `rsudharapanbunda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsudmeuraxa`
--
ALTER TABLE `rsudmeuraxa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsumalahayati`
--
ALTER TABLE `rsumalahayati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsumeutia`
--
ALTER TABLE `rsumeutia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumahsakitibudananak`
--
ALTER TABLE `rumahsakitibudananak`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lobyrsuza`
--
ALTER TABLE `lobyrsuza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsiacempakaazzahra`
--
ALTER TABLE `rsiacempakaazzahra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rskesdamiskandarmuda`
--
ALTER TABLE `rskesdamiskandarmuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rspendidikanusk`
--
ALTER TABLE `rspendidikanusk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rsteungkufakinah`
--
ALTER TABLE `rsteungkufakinah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsudharapanbunda`
--
ALTER TABLE `rsudharapanbunda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsudmeuraxa`
--
ALTER TABLE `rsudmeuraxa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rsumalahayati`
--
ALTER TABLE `rsumalahayati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsumeutia`
--
ALTER TABLE `rsumeutia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rumahsakitibudananak`
--
ALTER TABLE `rumahsakitibudananak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
