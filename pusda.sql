-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 04:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusda`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `nama`, `jabatan`, `alamat`) VALUES
(1, '', 'admin', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `id_kecamatan`) VALUES
(1, 'besito', 1),
(2, 'getasrabi', 1),
(3, 'gondosari', 1),
(4, 'gribig', 1),
(5, 'jurang', 1),
(6, 'karangmalang', 1),
(7, 'kedungsari', 1),
(8, 'klumpit', 1),
(9, 'menawan', 1),
(10, 'padurenan', 1),
(11, 'rahtawu', 1),
(12, 'bae', 2),
(13, 'bacin', 2),
(14, 'dersalam', 2),
(15, 'gondangmanis', 2),
(16, 'karangbener', 2),
(17, 'ngembalrejo', 2),
(18, 'panjang', 2),
(19, 'pedawang', 2),
(20, 'peganjaran', 2),
(21, 'purworejo', 2),
(22, 'kesambi', 8),
(23, 'golantepus', 8),
(24, 'gulang', 8),
(25, 'hadiwarno', 8),
(26, 'jepang', 8),
(27, 'jojo', 8),
(28, 'kirig', 8),
(29, 'mejobo', 8),
(30, 'payaman', 8),
(31, 'temulus', 8),
(32, 'tenggeles', 8),
(33, 'colo', 3),
(34, 'cranggang', 3),
(35, 'dukuhwaringin', 3),
(36, 'glagah kulon', 3),
(37, 'japan', 3),
(38, 'kajar', 3),
(39, 'kandangmas', 3),
(40, 'kuwukan', 3),
(41, 'lau', 3),
(42, 'margorejo', 3),
(43, 'piji', 3),
(44, 'puyoh', 3),
(45, 'rejosari', 3),
(46, 'samirejo', 3),
(47, 'soco', 3),
(48, 'tergo', 3),
(49, 'ternadi', 3),
(50, 'bulung kulon', 4),
(51, 'bulungcangkring', 4),
(52, 'gondoharum', 4),
(53, 'hadipolo', 4),
(54, 'honggosoco', 4),
(55, 'jekulo', 4),
(56, 'klaling', 4),
(57, 'pladen', 4),
(58, 'sadang', 4),
(59, 'sidomulyo', 4),
(60, 'tanjungrejo', 4),
(61, 'terban', 4),
(62, 'bate gede', 11),
(63, 'daren', 11),
(64, 'gemiring lor', 11),
(65, 'gemiring kidul', 11),
(66, 'jatisari', 11),
(67, 'karangnongko', 11),
(68, 'muryolobo', 11),
(69, 'nalumsari', 11),
(70, 'ngetuk', 2),
(71, 'tritis', 11),
(72, 'jatirejo', 16),
(73, 'karangmanyar', 16),
(74, 'kedungwaru kidul', 16),
(75, 'kedungwaru lor', 16),
(76, 'ngemplik wetan', 16),
(77, 'undaan kidul', 16),
(78, 'undaan lor', 16),
(79, 'wonoketingal', 16);

-- --------------------------------------------------------

--
-- Table structure for table `insiden`
--

CREATE TABLE `insiden` (
  `id` int(11) NOT NULL,
  `kode` varchar(1) NOT NULL,
  `kejadian` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `luka_ringan` int(4) NOT NULL,
  `luka_berat` int(4) NOT NULL,
  `meninggal` int(4) NOT NULL,
  `sebab` text NOT NULL,
  `akibat` text NOT NULL,
  `upaya` text NOT NULL,
  `keterangan` text NOT NULL,
  `selesai` time NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insiden`
--

INSERT INTO `insiden` (`id`, `kode`, `kejadian`, `waktu`, `id_kota`, `id_kecamatan`, `id_desa`, `rt`, `rw`, `lokasi`, `luka_ringan`, `luka_berat`, `meninggal`, `sebab`, `akibat`, `upaya`, `keterangan`, `selesai`, `foto`) VALUES
(1, 'F', 'Kebakaran', '2020-01-15 07:18:00', 1, 1, 1, 2, 1, 'Sungai', 2, 0, 0, '', '', '', '', '00:00:00', ''),
(2, 'B', 'Kecelakaan', '2020-01-07 03:45:00', 2, 1, 1, 1, 2, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(3, 'E', 'Tenggelam', '2020-01-01 15:30:00', 1, 2, 1, 4, 3, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(4, 'C', 'Binatang Buas', '2020-01-25 01:01:00', 1, 1, 2, 1, 5, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(5, 'D', 'Pohon Tumbang', '2020-01-24 14:02:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(6, 'D', 'Pohon Tumbang', '2020-01-22 05:05:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(7, 'I', 'Angin Kencang', '2019-02-02 14:15:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(8, 'B', 'Kecelakaan', '2020-01-17 13:01:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(9, 'A', 'Warga Sakit', '2020-01-01 01:01:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(10, 'C', 'Binatang Buas', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(11, 'E', 'Tenggelam', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', ''),
(12, 'E', 'Tenggelam', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kateg`
--

CREATE TABLE `kateg` (
  `kode` char(1) NOT NULL,
  `kejadian` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kateg`
--

INSERT INTO `kateg` (`kode`, `kejadian`, `kategori`) VALUES
('A', 'Warga Sakit', 'Ambulance'),
('B', 'Kecelakaan', 'Ambulance'),
('C', 'Binatang Buas', 'Binatang Buas'),
('D', 'Pohon Tumbang', 'Kedaruratan'),
('E', 'Tenggelam', 'Kedaruratan'),
('F', 'Kebakaran', 'Kebakaran'),
('G', 'Banjir', 'Banjir'),
('H', 'Tanah Longsor', 'Tanah Longsor'),
('I', 'Angin Kencang', 'Angin Kencang'),
('J', 'Kekeringan', 'Kekeringan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kota`) VALUES
(1, 'gebog', 1),
(2, 'bae', 1),
(3, 'dawe', 1),
(4, 'jekulo', 1),
(5, 'kaliwungu', 1),
(6, 'kota', 1),
(7, 'jati', 1),
(8, 'mejobo', 1),
(9, 'undaan', 1),
(10, 'tahunan', 2),
(11, 'nalumsari', 2),
(12, 'gajah', 3),
(13, 'karangtengah', 3),
(14, 'demak', 3),
(15, 'dempet', 3),
(16, 'karanganyar', 3),
(17, 'mijen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'kudus'),
(2, 'jepara'),
(3, 'demak'),
(4, 'pati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `insiden`
--
ALTER TABLE `insiden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `kateg`
--
ALTER TABLE `kateg`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `insiden`
--
ALTER TABLE `insiden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
