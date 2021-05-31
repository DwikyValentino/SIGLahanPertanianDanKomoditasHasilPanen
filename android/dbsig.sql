-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2021 pada 13.36
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `fullname`, `phone`, `last_login`, `created_at`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin123@gmail.com', 'Admin 1', '08991333437', '2021-03-01 16:15:47', '2021-03-01 16:15:47'),
(2, 'dwikyv', '7a25ca47c6778ddf2784d9c7ffc8d255375dc362', 'DwikyValentino147@gmail.com', 'Dwiky Valentino', '082329327355', '2021-03-13 17:40:16', '2021-03-13 17:40:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_luaspanen`
--

CREATE TABLE `ds_luaspanen` (
  `id_komoditas` int(11) NOT NULL,
  `namakomoditas` varchar(55) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` char(4) NOT NULL,
  `kecamatan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ds_luaspanen`
--

INSERT INTO `ds_luaspanen` (`id_komoditas`, `namakomoditas`, `jumlah`, `bulan`, `tahun`, `kecamatan`) VALUES
(1, 'Bawang Merah', 200, 'Maret', '2020', 'Wanasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_produksi`
--

CREATE TABLE `ds_produksi` (
  `id_komoditas` int(11) NOT NULL,
  `namakomoditas` varchar(55) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` char(4) NOT NULL,
  `kecamatan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ds_produksi`
--

INSERT INTO `ds_produksi` (`id_komoditas`, `namakomoditas`, `jumlah`, `bulan`, `tahun`, `kecamatan`) VALUES
(1, 'Bawang Merah', 200, 'Maret', '2020', 'Wanasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_provitas`
--

CREATE TABLE `ds_provitas` (
  `id_komoditas` int(11) NOT NULL,
  `namakomoditas` varchar(55) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` char(4) NOT NULL,
  `kecamatan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ds_provitas`
--

INSERT INTO `ds_provitas` (`id_komoditas`, `namakomoditas`, `jumlah`, `bulan`, `tahun`, `kecamatan`) VALUES
(1, 'Bawang Merah', 200, 'Maret', '2020', 'Wanasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `fullname`, `username`, `password`, `email`, `last_login`, `create_at`) VALUES
(1, 'DwikyValentino', 'dwiky', '$2y$10$g8OIPaNM4Z4wSNFdgBMKh.zl8VPtVqVoeNa0wou2NqIsQLv9odhVi', 'tes14feb@gmail.com', '2021-03-25 12:01:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komoditas`
--

CREATE TABLE `tb_komoditas` (
  `id_komoditas` int(11) NOT NULL,
  `namakomoditas` varchar(55) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `bulan` varchar(12) NOT NULL,
  `tahun` char(4) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komoditas`
--

INSERT INTO `tb_komoditas` (`id_komoditas`, `namakomoditas`, `jumlah`, `bulan`, `tahun`, `desa`, `kecamatan`) VALUES
(1, 'Bawang Merah', '200', 'Maret', '2019', 'Sisalam', 'Wanasari'),
(2, 'Jagung', '180', 'Februari', '2019', 'Siasem', 'Wanasari'),
(3, 'Jahe', '190', 'April', '2020', 'Saditan', 'Brebes'),
(5, 'BerasPutih', '170', 'Agustus', '2018', 'Klampok', 'Wanasari'),
(7, 'Kentangg', '185', 'Januari', '2020', 'Klampokk', 'Wanasarii');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lahanpertanian`
--

CREATE TABLE `tb_lahanpertanian` (
  `id_lahan` int(11) NOT NULL,
  `namapemilik` varchar(55) NOT NULL,
  `luas` char(5) NOT NULL,
  `meter` varchar(15) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longtitude` varchar(55) NOT NULL,
  `foto` varchar(64) NOT NULL DEFAULT 'lahan_no_image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `ds_luaspanen`
--
ALTER TABLE `ds_luaspanen`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `ds_produksi`
--
ALTER TABLE `ds_produksi`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `ds_provitas`
--
ALTER TABLE `ds_provitas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tb_komoditas`
--
ALTER TABLE `tb_komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `tb_lahanpertanian`
--
ALTER TABLE `tb_lahanpertanian`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ds_luaspanen`
--
ALTER TABLE `ds_luaspanen`
  MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ds_produksi`
--
ALTER TABLE `ds_produksi`
  MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ds_provitas`
--
ALTER TABLE `ds_provitas`
  MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_komoditas`
--
ALTER TABLE `tb_komoditas`
  MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_lahanpertanian`
--
ALTER TABLE `tb_lahanpertanian`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
