-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 03:25 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `ta_dosen`
--

CREATE TABLE `ta_dosen` (
  `id` int(11) NOT NULL,
  `kode_dosen` varchar(10) NOT NULL,
  `kode_prodi` varchar(3) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL,
  `gelar_depan_1` varchar(4) DEFAULT NULL,
  `gelar_depan_2` varchar(4) DEFAULT NULL,
  `gelar_belakang_1` varchar(6) DEFAULT NULL,
  `gelar_belakang_2` varchar(6) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_dosen`
--

INSERT INTO `ta_dosen` (`id`, `kode_dosen`, `kode_prodi`, `nama_dosen`, `gelar_depan_1`, `gelar_depan_2`, `gelar_belakang_1`, `gelar_belakang_2`, `email`, `no_telp`) VALUES
(1, 'IF-01', 'IF', 'Dody Haryadi', NULL, NULL, 'ST', 'MTI', 'dody@uai.ac.id', '082111292827'),
(2, 'IF-02', 'IF', 'Ade Jamal', 'Dr', 'Ir', NULL, NULL, 'adja@uai.ac.id', '082217263726'),
(3, 'IF-03', 'IF', 'Riri Safitri', NULL, NULL, 'S.Si', 'MT', 'riri@uai.ac.id', '087877265262'),
(4, 'IF-04', 'IF', 'Winangsari Pradani', 'Ir', NULL, 'MT', NULL, 'winangsari@uai.ac.id', '087889897676');

-- --------------------------------------------------------

--
-- Table structure for table `ta_mahasiswa`
--

CREATE TABLE `ta_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_prodi` varchar(3) NOT NULL,
  `alamat` text,
  `email` varchar(40) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ta_prodi`
--

CREATE TABLE `ta_prodi` (
  `id` int(11) NOT NULL,
  `kode_prodi` varchar(3) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `kode_fakultas` varchar(6) NOT NULL,
  `nama_fakultas` varchar(40) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_prodi`
--

INSERT INTO `ta_prodi` (`id`, `kode_prodi`, `nama_prodi`, `kode_fakultas`, `nama_fakultas`, `deskripsi`) VALUES
(1, 'IF', 'Teknik Informatika', 'FST', 'Fakultas Sains dan Teknologi', 'Program Studi Teknik Informatika'),
(2, 'TI', 'Teknik Industri', 'FST', 'Fakultas Sains dan Teknologi', 'Program Studi Teknik Industri'),
(3, 'EL', 'Teknik Elektro', 'FST', 'Fakultas Sains dan Teknologi', 'Program Studi Teknik Elektro'),
(4, 'BI', 'Biologi', 'FST', 'Fakultas Sains dan Teknologi', 'Program Studi Biologi'),
(5, 'AK', 'Akuntansi', 'FEB', 'Fakultas Ekonomi dan Bisnis', 'Program Studi Akuntansi'),
(6, 'MJ', 'Manajemen', 'FEB', 'Fakultas Ekonomi dan Bisnis', 'Program Studi Manajemen'),
(7, 'IG', 'Sastra Inggris', 'FIB', 'Fakultas Ilmu Pengetahuan dan Budaya', 'Program Studi Sastra Inggris'),
(8, 'AR', 'Sastra Arab', 'FIB', 'Fakultas Ilmu Pengetahuan dan Budaya', 'Program Studi Sastra Arab'),
(9, 'CN', 'Sastra China', 'FIB', 'Fakultas Ilmu Pengetahuan dan Budaya', 'Program Studi Sastra China'),
(10, 'JP', 'Sastra Jepang', 'FIB', 'Fakultas Ilmu Pengetahuan dan Budaya', 'Program Studi Sastra Jepang'),
(11, 'PG', 'Pendidikan Anak Usia Dini (PG-PAUD)', 'FPP', 'Fakultas Psikologi dan Pendidikan', 'Program Studi Pendidikan Anak Usia Dini (PG-PAUD)'),
(12, 'PI', 'Psikologi', 'FPP', 'Fakultas Psikologi dan Pendidikan', 'Program Studi Psikologi'),
(13, 'HK', 'Ilmu Hukum', 'FH', 'Fakultas Hukum', 'Program Studi Ilmu Hukum'),
(14, 'IK', 'Ilmu Komunikasi', 'FISIP', 'Fakultas Ilmu Sosial dan Ilmu Politik', 'Program Studi Ilmu Komunikasi'),
(15, 'HI', 'Hubungan Internasional', 'FISIP', 'Fakultas Ilmu Sosial dan Ilmu Politik', 'Program Studi Hubungan Internasional'),
(16, 'BPI', 'Bimbingan Penyuluhan Islam (Konseling)', 'FPP', 'Fakultas Psikologi dan Pendidikan', 'Program Studi Bimbingan Penyuluhan Islam (Konseling)');

-- --------------------------------------------------------

--
-- Table structure for table `ta_user_login`
--

CREATE TABLE `ta_user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `kode_prodi` varchar(3) NOT NULL,
  `keterangan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `akses` int(11) NOT NULL,
  `assign_to` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_user_login`
--

INSERT INTO `ta_user_login` (`id`, `username`, `password`, `kode_prodi`, `keterangan`, `created_at`, `akses`, `assign_to`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'UAI', 'Super admin', '2018-03-04 13:22:50', 1, 'IF-01'),
(2, 'adminJP', '0192023a7bbd73250516f069df18b500', 'IF', NULL, '2018-03-04 14:20:31', 0, ''),
(3, 'adminTI', 'c93ccd78b2076528346216b3b2f701e6', 'TI', NULL, '2018-03-04 10:47:47', 0, ''),
(4, 'adminEL', '7488e331b8b64e5794da3fa4eb10ad5d', 'EL', NULL, '2018-03-04 10:50:29', 0, ''),
(5, 'adminIF', 'cb11e09f55f5386be3354c33b84e1ab4', 'IF', NULL, '2018-03-04 14:24:42', 1, 'IF-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ta_dosen`
--
ALTER TABLE `ta_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_mahasiswa`
--
ALTER TABLE `ta_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `ta_prodi`
--
ALTER TABLE `ta_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_user_login`
--
ALTER TABLE `ta_user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ta_dosen`
--
ALTER TABLE `ta_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ta_prodi`
--
ALTER TABLE `ta_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ta_user_login`
--
ALTER TABLE `ta_user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
