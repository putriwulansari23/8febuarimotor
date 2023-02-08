-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 09.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db8feb_putri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` int(10) NOT NULL,
  `nomor_motor` int(10) NOT NULL,
  `merek` varchar(10) NOT NULL,
  `jenis_motor` varchar(20) NOT NULL,
  `tahun_motor` int(4) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `nomor_motor`, `merek`, `jenis_motor`, `tahun_motor`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(11, 11, 'honda', 'supra', 2022, '2023-02-01', '2023-02-02'),
(21, 24, 'HONDA', 'supra', 1990, '2023-02-02', '2023-02-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `id_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`id_peminjam`, `nama_peminjam`, `alamat`, `umur`, `keperluan`, `jaminan`, `id_motor`) VALUES
(11, 'jon', 'demak', 17, 'ganti kenalpot', 'ginjal', 11),
(21, 'diana', 'semarang', 19, 'ganti oli', 'uang', 21);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_motor` (`id_motor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_motor`
--
ALTER TABLE `tb_motor`
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD CONSTRAINT `tb_peminjam_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `tb_motor` (`id_motor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
