-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 05:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simanse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gurupns`
--

CREATE TABLE `tbl_gurupns` (
  `id_gurupns` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `pangkat` mediumint(9) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `masa_gol` int(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `th_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gurupns`
--

INSERT INTO `tbl_gurupns` (`id_gurupns`, `nama`, `nip`, `pangkat`, `jabatan`, `masa_gol`, `jenis_kelamin`, `pendidikan`, `ttl`, `jurusan`, `th_lulus`) VALUES
(1, 'Dellania', 2147483647, 0, 'Guru Kelas', 2, 'perempuan', 'S1', '1992-02-05', 'Penjaskes', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL,
  `jumlah_ruangan` int(20) NOT NULL,
  `kondisi_ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `nama_ruangan`, `jumlah_ruangan`, `kondisi_ruangan`) VALUES
(1, 'Ruang PMR', 1, 'Rusak ringan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nis` int(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_tlp`, `alamat`) VALUES
(1, 'MUHAMMAD IMAM MUIZ', 2345, 'jakarta', '2012-06-06', 'laki-laki', 2147483647, 'LR. BANTEN II NO 107');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gurupns`
--
ALTER TABLE `tbl_gurupns`
  ADD PRIMARY KEY (`id_gurupns`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gurupns`
--
ALTER TABLE `tbl_gurupns`
  MODIFY `id_gurupns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
