-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 12.03
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
-- Database: `pw_193040138`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `No` int(5) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `halaman` varchar(5) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`No`, `img`, `nama_buku`, `penulis`, `halaman`, `penerbit`) VALUES
(1, '1.jpg', 'Malik & Elsa', 'Boy Candra', '185', 'Mediakita'),
(2, '2.jpg', 'Malik & Elsa 2', 'Boy Candra', '192', 'Mediakita'),
(3, '3.jpg', 'Titik Lemah', 'Zarry Hendrik', '212', 'Mediakita'),
(4, '4.jpg', 'Seperti Hujan yang Jatuh ke Bumi', 'Boy Candra', '284', 'Mediakita'),
(5, '5.jpg', 'Sebuah Usaha Melupakan', 'Boy Candra', '305', 'Mediakita'),
(6, '6.png', 'Cinta Paling Rumit', 'Boy Candra', '331', 'KataDepan'),
(7, '7.jpg', 'Kami Bukan Sarjana Kertas', 'J.S. Khairen', '353', 'PT. Bukune Kreatif Cipta'),
(8, '8.jpg', 'Arah Langkah ', 'Fiersa Besari', '300', 'Mediakita'),
(9, '9.jpg', 'Terangkai Saat Dia Sedang Tidur', 'Zarry Hendrik', '198', 'Mediakita'),
(10, '10.jpg', '#AboutLove', 'Tere Liye', '128', 'PT. Gramedia Pustaka Utama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
