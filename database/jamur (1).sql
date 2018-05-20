-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mei 2018 pada 05.02
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ISI` text,
  `GAMBAR` varchar(20) DEFAULT NULL,
  `JUDUL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `ISI`, `GAMBAR`, `JUDUL`) VALUES
(1, 'Cara Budidaya Jamur', 'B1.jpg', 'Cara Budidaya Jamur'),
(2, 'Memasak Jamur', 'M2.jpg', 'Cara Memasak Jamur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `ID_BARANG` varchar(8) NOT NULL,
  `NAMA_BARANG` varchar(30) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `NAMA_BARANG`, `STOK`, `HARGA`) VALUES
('B001', 'Baglog', 7000, 13000),
('J001', 'Jamur', 200, 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `JUMLAH_PESANAN` int(11) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `TGL_KIRIM` date DEFAULT NULL,
  `TGL_PESAN` date DEFAULT NULL,
  `ID_BARANG` varchar(8) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`ID_PESAN`, `JUMLAH_PESANAN`, `TOTAL`, `TGL_KIRIM`, `TGL_PESAN`, `ID_BARANG`, `ID_USER`) VALUES
(1, 20, 50000, '2018-04-28', '2018-04-20', 'B001', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER_`, `NAMA`, `ALAMAT`, `NO_HP`, `EMAIL`, `PASSWORD`, `LEVEL`) VALUES
(1, 'Admin', 'Jember', '089909808707', 'admin@soka.com', '12345', 'admin'),
(2, 'Deta', 'Jember', '085505606707', 'deta@gmail.com', '12345678', 'user');

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ID_BARANG`) REFERENCES `barang` (`ID_BARANG`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER_`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
