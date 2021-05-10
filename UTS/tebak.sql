-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2021 pada 18.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tebakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tebak`
--

CREATE TABLE `tebak` (
  `Nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `Score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tebak`
--

INSERT INTO `tebak` (`Nama`, `Email`, `Score`) VALUES
('Ibrahim', 'ibrahim@gmail.com', 80),
('Ibrahim', 'ibrahim@gmail.com', 250),
('Abdul', 'abdul@gmail.com', 30),
('Zaka', 'zaka@gmail.com', 40),
('Abdul', 'abdul@gmail.com', 60),
('Nika', 'nika@gmail.com', 30),
('Nanda', 'nanda@gmail.com', 20),
('Nida', 'nida@gmail.com', 90),
('Zaka', 'zaka@gmail.com', 130),
('Nika', 'nika@gmail.com', 80),
('Nika', 'nika@gmail.com', 30),
('Nika', 'nika@gmail.com', 30),
('Nika', 'nika@gmail.com', 30),
('Nika', 'nika@gmail.com', 30),
('Nika', 'nika@gmail.com', 30),
('Nika', 'nika@gmail.com', 30),
('Fatih', 'fatih@gmail.com', 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
