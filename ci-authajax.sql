-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2019 pada 05.29
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-authajax`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `contact`) VALUES
(2, 'mukhoiran', '0a8d151f3e8f5a5cb05365413e986a1ba6766e7397aa5359d8276b1d280fe780', '$2y$10$qsPsnjmNC0YGkAPZnaIFGuH/bUcfGlNpoEe6z3dCdmDWJ0z6U7J3e', 'Muhammad Khoirul Anam', '123123123'),
(3, 'mukhoan123', 'ead2a1a6354e831742b1c3e31c5f13037747496a80b7bfd921fd21681bc005d3', '$2y$10$fjvU.Zl8VE.IPgi/dYCUTOlWSNiFo8pRwI7Fw5P4Qs40ZjtpqQ4JK', 'Muhammad Khoirul Anam', '123456789'),
(4, 'testingaja', '26f86324276f2fe42cef0f90c33fe38a93993312ba4b30b7e1a11a7ab02d755b', '$2y$10$MqAOM1Yb4C10NLMEV68W..Gy98BJfeJPoh6EF4ouLoAHtK53AQ6R2', 'Johni', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
