-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 05.00
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil`
--

CREATE TABLE `ambil` (
  `NIM` int(11) NOT NULL,
  `ID_KULIAH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bioskop`
--

CREATE TABLE `bioskop` (
  `ID_BIOSKOP` int(11) NOT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL,
  `NAMA_BIOSKOP` varchar(15) DEFAULT NULL,
  `KOTA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `NAMA_FILM` int(11) NOT NULL,
  `ID_PEMESANAN` varchar(10) DEFAULT NULL,
  `ID_BIOSKOP` int(11) DEFAULT NULL,
  `ID_FILM` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliah`
--

CREATE TABLE `kuliah` (
  `ID_KULIAH` int(11) NOT NULL,
  `NAMA_MATKUL` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `NAMA_MAHASISWA` char(25) DEFAULT NULL,
  `ALAMAT` char(50) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA_MAHASISWA`, `ALAMAT`, `EMAIL`) VALUES
(122, 'Bagus', 'Surabaya', 'Bagus@gmail.com'),
(123, 'dedi', 'bekasi', 'asaas@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `ID_MEMBER` int(11) NOT NULL,
  `NAMA_MEMBER` varchar(30) DEFAULT NULL,
  `KODE_MEMBER` varchar(7) DEFAULT NULL,
  `KETERANGAN_MEMBER` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nik` int(4) NOT NULL,
  `nama` char(40) NOT NULL,
  `alamat` char(100) NOT NULL,
  `fakultas` char(20) NOT NULL,
  `usia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nik`, `nama`, `alamat`, `fakultas`, `usia`) VALUES
(1, 'Andi', 'Jl.Kertajaya', 'Teknik', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `ID_PEMESANAN` varchar(10) NOT NULL,
  `NAMA_FILM` int(11) DEFAULT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL,
  `JADWAL_TAYANG` datetime DEFAULT NULL,
  `HARGA_TIKET` varchar(10) DEFAULT NULL,
  `JUMLAH_TIKET` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ambil`
--
ALTER TABLE `ambil`
  ADD PRIMARY KEY (`NIM`,`ID_KULIAH`),
  ADD KEY `FK_AMBIL_AMBIL2_KULIAH` (`ID_KULIAH`);

--
-- Indeks untuk tabel `bioskop`
--
ALTER TABLE `bioskop`
  ADD PRIMARY KEY (`ID_BIOSKOP`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`NAMA_FILM`);

--
-- Indeks untuk tabel `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`ID_KULIAH`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_MEMBER`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`ID_PEMESANAN`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ambil`
--
ALTER TABLE `ambil`
  ADD CONSTRAINT `FK_AMBIL_AMBIL2_KULIAH` FOREIGN KEY (`ID_KULIAH`) REFERENCES `kuliah` (`ID_KULIAH`),
  ADD CONSTRAINT `FK_AMBIL_AMBIL_MAHASISW` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
