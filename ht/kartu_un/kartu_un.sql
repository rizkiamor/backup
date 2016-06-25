-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Apr 2015 pada 01.10
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kartu_un`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id` varchar(50) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `user`, `pass`, `sekolah`, `hak_akses`) VALUES
('2', 'admin', 'admin', 'admin', 'admin'),
('1', 'sdn3plawangan', '91dd55d3d02a8413c6bd53d0abc245fc', 'SDN3PLAWANGAN', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`no` bigint(20) NOT NULL,
  `id` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `rayon` varchar(255) NOT NULL,
  `kepsek` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`no`, `id`, `nama`, `ttl`, `sekolah`, `rayon`, `kepsek`) VALUES
(1, '01', 'NAMA SISWA', 'REMBANG, 17 AGUSTUS 1999', 'SDN SEKOLAH DASAR', '12345678', 'KEPALA SEKOLAH,S.Pd'),
(2, '02', 'SISWA NAMA', 'REMBANG, 17 AGUSTUS 1999', 'SEKOLAH DASAR', '123456789', 'KEPALA SEKOLAH,S.Pd'),
(3, '03', 'BAGOES', 'REMBANG, 10 JANUARI 2000', 'SEKOLAH DASAR', '3456789', 'KEPALA SEKOLAH'),
(4, '04', 'HAJAHANA', 'REMBANG, 10 JANUARI 2000', 'SEKOLAH DASAR', '3456789', 'KEPALA SEKOLAH'),
(5, '05', 'BAGOES', 'REMBANG, 10 JANUARI 2000', 'SEKOLAH DASAR', '3456789', 'KEPALA SEKOLAH'),
(6, '06', 'HAJAHANA', 'REMBANG, 10 JANUARI 2000', 'SEKOLAH DASAR', '3456789', 'KEPALA SEKOLAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` varchar(50) NOT NULL,
  `user` varchar(255) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `user`, `lokasi`, `sekolah`, `hak_akses`) VALUES
('2', 'admin', 'admin', 'admin', 'admin'),
('1', 'sdn3plawangan', '91dd55d3d02a8413c6bd53d0abc245fc', 'SDN#PLAWANGAN', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`user`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
