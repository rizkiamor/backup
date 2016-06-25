-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2016 pada 10.25
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartu_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `npsn` varchar(10) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`npsn`, `instansi`, `nama_sekolah`, `alamat`) VALUES
('1000', 'UPT DINAS PENDIDIKAN KEC JENU', 'SD NEGERI TEMAJI I', 'Desa Temaji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `npsn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tempat`, `tgl`, `agama`, `kelamin`, `alamat`, `foto`, `npsn`) VALUES
('002', 'Tanya Anak', 'Tuban', '2016-05-03', 'ISLAM', 'perempuan', 'Jl Gelondong', 'upload_images/89619-Kasir-Indomaret-Cantik-Gemparkan-Media-Sosial-2.jpg', '1000'),
('003', 'Hendri', 'Tuban', '2013-11-30', 'islam', 'laki-laki', 'Gang II Jenu', 'upload_images/21925-didi-kempot-012.jpg', '1000'),
('004', 'She Yho Hon', 'Korea', '2011-12-31', 'islam', 'perempuan', 'Seul', 'upload_images/14332-30-cutes-seiyuu-marry-me-2.jpg', '1000'),
('005', 'Kim Cil Hwo', 'Seol', '2016-05-08', 'islam', 'perempuan', 'Korsel', 'upload_images/72175-12439415_1276290472386723_7706736848833227532_n.jpg', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
('ADMIN01', 'admin', 'admin', 'admin'),
('ADMIN02', 'bagus', 'bagus', 'amor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD KEY `npsn` (`npsn`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `profil` (`npsn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
