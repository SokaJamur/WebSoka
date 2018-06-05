-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 04:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soka`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ISI` text,
  `GAMBAR` varchar(20) DEFAULT NULL,
  `JUDUL` varchar(30) DEFAULT NULL,
  `TGL_ARTIKEL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `ISI`, `GAMBAR`, `JUDUL`, `TGL_ARTIKEL`) VALUES
(2, 'Bahan-bahan	\r\nBahan Sate :\r\n1/4 Kg Jamur Tiram Putih\r\nBumbu Sate :\r\n1/4 Sdt ketumbar bubuk\r\n2 Siung bawang putih (dihaluskan)\r\n4 Sdm kecap manis\r\n2 Sdm Minyak Sayur\r\nSecukupnya Garam&Penyedap Rasa\r\nLangkah	\r\nRebus Jamur Tiram Sebentar,, tiriskan lalu di suwir-suwir&tusuk menggunakan tusuk sate\r\n\r\nCampurkan Semua Bumbu Sate,, Lalu Rendam Jamur (yg sudah ditusuk) kurang lebih 10menit agar meresap \r\nSiapkan Panggangan / bisa juga menggunakan teflon bakar sampai matang,, setelah Matang Bisa Di Celupkan Ke dalam sambal kecap Atau Di Cocol Saus Saat Di Santap', 'sate.jpg', 'Sate Jamur Tiram', '2018-05-21 12:40:41'),
(3, 'Bahan dan bumbu bakwan jamur tiram : \r\n250 gram jamur tiram, suwir-suwir lalu rajang kasar potong-potong kecil\r\n2 batang daun bawang, iris-iris tipis\r\n1 buah cabe merah juga diiris tipis\r\n200 gram tepung terigu segitiga\r\n1 butir telur\r\n2 siung bawang putih, haluskan\r\n1 sdt garam\r\n½ sdt lada bubuk\r\n½ sdt kaldu bubuk\r\n300 ml air\r\nsecukupnya minyak untuk menggoreng\r\nCARA MEMBUAT BAKWAN JAMUR :\r\nCuci bersih jamur tiram lalu peras agar kering, selanjutnya suwir-suwir atau sobek-sobek kemudian rajang kasar (potong kecil-kecil).\r\nSiapkan sebuah wadah, campurkan semua bahan kecuali minyak goreng lalu aduk saja dengan sendok makan hingga adonan rata.\r\nPanaskan minyak goreng yang banyak atau secukupnya dalam wajan, ambil adonan menggunakan sendok sayur lalu tuang ke bagian pinggir wajan sambil diratakan (dilebarkan) agar tipis dan berbentuk sebelum adonan turun perlahan dan masuk ke dalam minyak. Adonan ditipiskan supaya hasilnya benar-benar renyah (kalau menggunakan wajan biasa dan adonan menempel, dapat dibantu dengan susuk/sutil atau sendok penggorengan).\r\nGoreng hingga matang kuning keemasan, angkat dan tiriskan dari minyak, kemudian bakwan jamur tiram yang enak dan renyah sudah siap disajikan.', 'bakwan.jpg', 'Bakwan Jamur Tiram', '2018-05-21 12:35:45'),
(4, 'Resep Membuat Pepes Jamur Tiram Enak Pedas\r\n\r\nBahan-bahan yang harus disiapkan :\r\n200 gram jamur tiram, suwir-suwir, cuci bersih, peras, tiriskan\r\n3 siung bawang putih, iris tipis\r\n5 butir bawang merah, iris tipis\r\n10 buah cabe rawit,  potong-potong (Bisa ditambahkan /dikurangi sesuai selera)\r\n2 buah cabe merah besar, potong serong tipis\r\n2 buah tomat merah, cincang kasar\r\n2 butir telur, kocok\r\n2 batang bawang daun polong, iris halus\r\n4 lembar daun salam\r\nGaram, secukupnya\r\nGula secukupnya\r\nDaun pisang dan tusuk gigi, secukupnya\r\n\r\nCara Memasak Pepes Jamur Tiram Enak :\r\nSiapkan wadah, masukkan semua bahan, kecuali daun salam, dan telur kemudian aduk sampai tercampur rata .\r\nTambahkan telur ayam yang sudah dikocok, aduk lagi hingga rata sempurna.\r\nAmbil selembar daun pisang, letakkan selembar daun salam, lalu jamur yang sudah dibumbui diatasnya, setelah itu gulung daun pisang beberapa kali hingga bahan pepes jamur terbungkus rapat, kemudian semat kedua ujungnya dengan tusuk gigi, lakukan sampai habis.\r\nSelanjutnya kukus selama 30 menit hingga matang, angkat, dinginkan, kemudian bakar hingga harum.\r\nPepes jamur tiram siap disajikan dan dinikmati.', 'pepes.jpg', 'Pepes Jamur Tiram', '2018-05-21 12:39:19'),
(5, 'BAHAN\r\n150 gr jamur tiram putih\r\n\r\n3 siung bawang putih\r\n\r\n1 lembar daun salam\r\n\r\n1 ruas lengkuas\r\n\r\n1 ruas jahe\r\n\r\n1 batang sereh\r\n\r\nAir secukupnya\r\n\r\ngaram\r\n\r\ngula\r\n\r\nlada putih\r\n\r\nINSTRUKSI\r\nSobek – sobek jamur sesuai keinginan\r\n\r\nSlice bawang putih\r\n\r\nGeprek lengkuas, jahe dan sereh lalu saute hingga harum dan tambahkan bawang putih dan daun salam\r\n\r\nMasukan jamur aduk – aduk sebentar dan tambahkan air\r\n\r\nMasak hingga matang dan tambahkan garam , gula dan lada secukupnya\r\n\r\nSiap disajikan', 'tumis.png', 'Tumis Jamur Tiram', '2018-05-21 12:43:51'),
(6, 'Bahan-Bahan :\r\nJamur tiram segar 2.5 kg\r\nTepung beras 1/2 kg\r\nTeung terigu 1 kg\r\nTeung maizena 200 g\r\nMinyak goreng 2 liter\r\nBumbu yang dihaluskan (bawang putih goreng, garam, dana lada)\r\n\r\nCara Membuat :\r\n1. Jamur tiram segar dicuci bersih, dipotong-potong kemudian dikukus selama 10 menit dan peras airnya\r\n2. Jamur dicampur dengan bumbu yang sudah dihaluskan\r\n3. Tepung beras, tepung teigu dan tepung maizena dicampur hingga rata\r\n4. Jamur dimasukkan dalam adonan tepung, kemudian diayak agar terpisah dengan tepungnya\r\n5. Jamur yang terpisah dari tepungnya kemudian digoreng hingga kering\r\n6. Tiriskan dan siap dinikmati', 'krispi2.jpg', 'Jamur Tiram Krispi', '2018-05-21 12:56:18'),
(7, 'snbkjsdlnflk', 'nugget.jpg', 'Nugget Jamur Tiram', '2018-05-21 12:57:11'),
(8, 'dsffklewklfeklwnfiwe', 'bakso.jpg', 'Bakso Jamur Tiram', '2018-05-21 14:09:10'),
(60, 'nkjfnwns', 'assets/img/', 'nvnslk', '2018-06-04 14:58:38'),
(61, 'yayay', 'assets/img/', 'yayay', '2018-06-04 16:01:37'),
(62, 'oioio', '.assets/img/Array', 'oioi', '2018-06-04 16:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_BARANG` varchar(8) NOT NULL,
  `NAMA_BARANG` varchar(30) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `NAMA_BARANG`, `STOK`, `HARGA`) VALUES
('B001', 'Baglog', 5000, 2500),
('J001', 'Jamur', 3, 13000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `JUMLAH_PESANAN` int(11) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `TGL_KIRIM` date DEFAULT NULL,
  `TGL_PESAN` date DEFAULT NULL,
  `ID_BARANG` varchar(8) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`ID_PESAN`, `JUMLAH_PESANAN`, `TOTAL`, `TGL_KIRIM`, `TGL_PESAN`, `ID_BARANG`, `ID_USER`, `STATUS`) VALUES
(1, 20, 50000, '2018-04-28', '2018-04-20', 'B001', 2, 'Terkirim'),
(2, 10, 25000, '2018-05-31', '2018-05-29', 'B001', 2, 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER_` int(11) NOT NULL,
  `NAMA` varchar(40) DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `NO_HP` varchar(12) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(8) DEFAULT NULL,
  `LEVEL` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER_`, `NAMA`, `ALAMAT`, `NO_HP`, `EMAIL`, `PASSWORD`, `LEVEL`) VALUES
(1, 'Admin', 'Jember', '089909808707', 'admin@soka.com', '12345', 'admin'),
(2, 'Deta', 'JEMBER', '085505606707', 'deta@gmail.com', '12345678', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID_ARTIKEL`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_PESAN`),
  ADD KEY `ID_BARANG` (`ID_BARANG`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ID_BARANG`) REFERENCES `barang` (`ID_BARANG`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER_`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
