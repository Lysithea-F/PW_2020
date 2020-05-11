-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 15.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040138`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukubuku`
--

CREATE TABLE `bukubuku` (
  `no` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `halaman` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukubuku`
--

INSERT INTO `bukubuku` (`no`, `img`, `nama`, `penulis`, `halaman`, `penerbit`) VALUES
(1, '1.jpg', 'Malik & Elsa', 'Boy Candra', '185', 'Mediakita'),
(2, '2.jpg', 'Malik & Elsa 2', 'Boy Candra', '192', 'Mediakita'),
(3, '3.jpg', 'Titik Lemah', 'Zarry Hendrik', '212', 'Mediakita'),
(4, '4.jpg', 'Seperti Hujan Yang Jatuh ke Bumi', 'Boy Candra', '284', 'Mediakita'),
(5, '5.jpg', 'Sebuah Usaha Melupakan', 'Boy Candra', '305', 'Mediakita'),
(6, '6.png', 'Cinta Paling Rumit', 'Boy Candra', '331', 'KataDepan'),
(7, '7.jpg', 'Kami Bukan Sarjana Kertas', 'J.S. Khairen', '353', 'PT. Bukune Kreatif Cipta'),
(8, '8.jpg', 'Arah Langkah', 'Fiersa Besari', '300', 'Mediakita'),
(9, '9.jpg', 'Terangkai Saat Dia Sedang Tidur', 'Zarry Hendrik', '198', 'Mediakita'),
(10, '10.jpg', 'About Love', 'Tere Liye', '128', 'PT. Gramedia Pustaka Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukubuku`
--
ALTER TABLE `bukubuku`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukubuku`
--
ALTER TABLE `bukubuku`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
