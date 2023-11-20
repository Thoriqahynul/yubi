-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2023 pada 10.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramadhanberkah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `no` int(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`no`, `username`, `email`, `password`) VALUES
(1, 'koko', 'koko@gmail.com', 'koko'),
(2, 'torik', 'tma@gmail.com', 'tomrik'),
(3, 'kentang', 'ssaa@gmail.com', 'apa'),
(4, 'konci', 'hanan@gmail.com', 'aa'),
(5, 'zip', 'zip@gmail.com', 'zip'),
(6, 'kentang', 'atapmurah@gmail.com', 'p'),
(7, 'kentang', 'atapmurah@gmail.com', 'aa'),
(8, 'ihsan ramadhan', 'ihsan@gmail.com', 'ihsan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nominal`
--

CREATE TABLE `nominal` (
  `no` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nominal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nominal`
--

INSERT INTO `nominal` (`no`, `username`, `email`, `no_wa`, `jenis`, `nominal`) VALUES
(1, 'hanan', 'hanan@gmail.com', '019292', 'bca', 10000000),
(2, 'naa', 'sss@gmail.com', '-02292', 'ndnd', 10),
(3, 'ihsan ramadhan', 'ihsan@gmail.com', '0812833', 'bca', 109923);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran_kritik`
--

CREATE TABLE `saran_kritik` (
  `no` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `saran_kritik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `saran_kritik`
--

INSERT INTO `saran_kritik` (`no`, `username`, `email`, `saran_kritik`) VALUES
(7, '', 'hanan@gmail.com', ''),
(8, '', 'hanan@gmail.com', ''),
(9, 'hanan', 'hanan@gmail.com', ''),
(10, 'yazif', 'hanan@gmail.com', 'mann'),
(11, 'ihsan ramadhan', 'ihsan@gmail.com', 'websitenya bagus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `nominal`
--
ALTER TABLE `nominal`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `saran_kritik`
--
ALTER TABLE `saran_kritik`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `nominal`
--
ALTER TABLE `nominal`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `saran_kritik`
--
ALTER TABLE `saran_kritik`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
