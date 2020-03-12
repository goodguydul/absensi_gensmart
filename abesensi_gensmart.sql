-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2020 pada 09.08
-- Versi server: 10.1.21-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abesensi_gensmart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nip`, `nama`, `jabatan`, `ttl`, `notelp`, `email`, `password`) VALUES
('09021', 'Amrina Ilma Rosyada', 'Dosen', 'Palembang, -', '-', 'amrina@gmail.com', 'amrina'),
('123131', 'laksdlajsdkl', 'laskdjalksdj', 'dlkasjdalkd', '0', '', 'adada'),
('1671080901900006', 'Kanda Januar, MT', 'Dosen', '-', '-', 'kanda@gmail.com', 'kandajanuar'),
('1671140201820005', 'Rusdi Efendi, M.Kom', 'Dosen', '-', '-', 'rusdi@gmail.com', 'rusdi'),
('196602202006041001', 'Drs. Megah Mulya, MT', 'Dosen', '-', '-', 'megahmulya@gmail.com', 'megahmulya'),
('197207102010121001', 'Julian Supardi,  MT', 'Dosen', '-', '-', 'juliansupardi@gmail.com', 'juliansupardi'),
('197706012009121004', 'Rifkie Primartha, MT', 'Dosen', '-', '', 'rifkie@gmail.com', 'rifkie'),
('198505102015041002', 'Danny Matthew Saputra,S.T., M.Sc.', 'Dosen', '-', '-', 'danny@gmail.com', 'danny');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `nama`, `jabatan`, `ttl`, `notelp`, `email`, `password`) VALUES
('198505102015041', 'Danny Matthew Saputra,S.T., M.Sc.', 'Tenaga Pengajar', '', '', '', 'dosen'),
('admin', 'amrina ilma', '', '', '', '', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(1) NOT NULL,
  `prodi` varchar(4) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode`, `nama_matakuliah`, `sks`, `prodi`, `dosen`, `nip`, `hari`, `tanggal`, `jam`, `ruangan`, `status`) VALUES
(3, 'FTI3411', 'Analisis dan Perancangan Perangkat lunak', 3, 'Bil', 'Drs. Megah Mulya, MT', '196602202006041001', 'senin', '2017-07-10', '08.00 / 09.30', 'KPA-1', 0),
(4, 'FTI3491', 'Sistem Pakar', 3, 'bil', 'Rusdi Efendi, M.Kom', '1671140201820005', 'senin', '2017-07-08', '01.30 / 02.00', 'KPA-3', 1),
(5, 'FTI3441', 'Jaringan Komputer ', 3, 'bil', 'Rifkie Primartha, MT', '197706012009121004', 'selasa', '2017-07-04', '10.30 / 13.00', 'KPA-3', 0),
(6, 'FTI3451', 'Jaringan Syaraf Tiruan', 3, 'bil', 'Julian Supardi,  MT', '197207102010121001', 'rabu', '2017-07-11', '11.00 / 12.30', 'KPA 1', 0),
(7, 'FTI3481', 'Basis Data Lanjut', 3, 'bil', 'Kanda Januar, MT', '1671080901900006', 'rabu', '2017-07-02', '12.30 / 13.30', 'KPA-5', 1),
(9, 'FTI3411', 'Jaminan Kualitas Perangkat Lunak', 3, 'bil', 'Danny Matthew Saputra,S.T., M.Sc.', '198505102015041002', 'rabu', '2017-07-05', '13.00 / 15.30', 'KPA-1', 0),
(10, 'IFT308', 'Pemrograman Web', 3, 'Bil', 'Amrina Ilma Rosyada', '09021', 'Senin', '2017-07-03', '01.00 / 02.00', 'KPA-5', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `dosen` (`dosen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
