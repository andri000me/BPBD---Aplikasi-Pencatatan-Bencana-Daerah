-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2020 pada 10.22
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpbd`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `rl_des_kec`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `rl_des_kec` (
`id_desa` int(11)
,`nama_desa` varchar(50)
,`id_kecamatan` int(11)
,`nama_kecamatan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `rl_kec_kot`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `rl_kec_kot` (
`id_kecamatan` int(11)
,`nama_kecamatan` varchar(50)
,`id_kota` int(11)
,`nama_kota` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `rl_kejadian`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `rl_kejadian` (
`id` int(11)
,`kode` varchar(1)
,`kejadian` varchar(50)
,`waktu` datetime
,`id_kota` int(11)
,`id_kecamatan` int(11)
,`id_desa` int(11)
,`rt` int(3)
,`rw` int(3)
,`lokasi` varchar(50)
,`status` int(4)
,`sebab` text
,`akibat` text
,`upaya` text
,`keterangan` text
,`selesai` time
,`foto` varchar(100)
,`nama_kota` varchar(50)
,`nama_kecamatan` varchar(50)
,`nama_desa` varchar(50)
,`nama_kejadian` varchar(30)
,`kategori_kejadian` varchar(30)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`, `id_kecamatan`) VALUES
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
(79, 'wonoketingal', 16),
(80, 'Mboh OPO', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_insiden`
--

CREATE TABLE `tb_insiden` (
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
  `status` int(4) NOT NULL,
  `sebab` text NOT NULL,
  `akibat` text NOT NULL,
  `upaya` text NOT NULL,
  `keterangan` text NOT NULL,
  `selesai` time NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_insiden`
--

INSERT INTO `tb_insiden` (`id`, `kode`, `kejadian`, `waktu`, `id_kota`, `id_kecamatan`, `id_desa`, `rt`, `rw`, `lokasi`, `status`, `sebab`, `akibat`, `upaya`, `keterangan`, `selesai`, `foto`) VALUES
(1, 'F', 'Kebakaran', '2020-01-15 07:18:00', 1, 1, 1, 2, 1, 'Sungai', 0, '', '', '', '', '00:00:00', ''),
(2, 'B', 'Kecelakaan', '2020-01-07 03:45:00', 2, 1, 1, 1, 2, '', 0, '', '', '', '', '00:00:00', ''),
(3, 'E', 'Tenggelam', '2020-01-01 15:30:00', 1, 2, 1, 4, 3, '', 0, '', '', '', '', '00:00:00', ''),
(4, 'C', 'Binatang Buas', '2020-01-25 01:01:00', 1, 1, 2, 1, 5, '', 0, '', '', '', '', '00:00:00', ''),
(5, 'D', 'Pohon Tumbang', '2020-01-24 14:02:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(6, 'D', 'Pohon Tumbang', '2020-01-22 05:05:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(7, 'I', 'Angin Kencang', '2019-02-02 14:15:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(8, 'B', 'Kecelakaan', '2020-01-17 13:01:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(9, 'A', 'Warga Sakit', '2020-01-01 01:01:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(10, 'C', 'Binatang Buas', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(11, 'E', 'Tenggelam', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', ''),
(12, 'E', 'Tenggelam', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kode` char(1) NOT NULL,
  `kejadian` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kode`, `kejadian`, `kategori`) VALUES
('A', 'Warga Sakit', 'Ambulance'),
('B', 'Kecelakaan', 'Ambulance'),
('C', 'Binatang Buas', 'Binatang Buas'),
('D', 'Pohon Tumbang', 'Kedaruratan'),
('E', 'Tenggelam', 'Kedaruratan'),
('F', 'Kebakaran', 'Kebakaran'),
('G', 'Banjir', 'Banjir'),
('H', 'Tanah Longsor', 'Tanah Longsor'),
('I', 'Angin Kencang', 'Angin Kencang'),
('J', 'Kekeringan', 'Kekeringan'),
('K', 'Tawon NDAS', 'Pertolongan'),
('L', 'Ulo Dowu', 'Binatang Laknat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kota`) VALUES
(1, 'gebog', 1),
(2, 'Bae', 1),
(3, 'Dawe', 1),
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
(14, 'Demak', 3),
(15, 'Dempet', 3),
(16, 'karanganyar', 3),
(17, 'mijen', 3),
(18, 'Gunung Pati', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Kudus'),
(2, 'Jepara'),
(3, 'Demak'),
(4, 'Pati'),
(6, 'Semarang');

-- --------------------------------------------------------

--
-- Struktur untuk view `rl_des_kec`
--
DROP TABLE IF EXISTS `rl_des_kec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_des_kec`  AS  select `tb_desa`.`id_desa` AS `id_desa`,`tb_desa`.`nama_desa` AS `nama_desa`,`tb_kecamatan`.`id_kecamatan` AS `id_kecamatan`,`tb_kecamatan`.`nama_kecamatan` AS `nama_kecamatan` from (`tb_desa` join `tb_kecamatan` on((`tb_desa`.`id_kecamatan` = `tb_kecamatan`.`id_kecamatan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `rl_kec_kot`
--
DROP TABLE IF EXISTS `rl_kec_kot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_kec_kot`  AS  select `tb_kecamatan`.`id_kecamatan` AS `id_kecamatan`,`tb_kecamatan`.`nama_kecamatan` AS `nama_kecamatan`,`tb_kecamatan`.`id_kota` AS `id_kota`,`tb_kota`.`nama_kota` AS `nama_kota` from (`tb_kecamatan` join `tb_kota` on((`tb_kecamatan`.`id_kota` = `tb_kota`.`id_kota`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `rl_kejadian`
--
DROP TABLE IF EXISTS `rl_kejadian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_kejadian`  AS  select `tb_insiden`.`id` AS `id`,`tb_insiden`.`kode` AS `kode`,`tb_insiden`.`kejadian` AS `kejadian`,`tb_insiden`.`waktu` AS `waktu`,`tb_insiden`.`id_kota` AS `id_kota`,`tb_insiden`.`id_kecamatan` AS `id_kecamatan`,`tb_insiden`.`id_desa` AS `id_desa`,`tb_insiden`.`rt` AS `rt`,`tb_insiden`.`rw` AS `rw`,`tb_insiden`.`lokasi` AS `lokasi`,`tb_insiden`.`status` AS `status`,`tb_insiden`.`sebab` AS `sebab`,`tb_insiden`.`akibat` AS `akibat`,`tb_insiden`.`upaya` AS `upaya`,`tb_insiden`.`keterangan` AS `keterangan`,`tb_insiden`.`selesai` AS `selesai`,`tb_insiden`.`foto` AS `foto`,`tb_kota`.`nama_kota` AS `nama_kota`,`tb_kecamatan`.`nama_kecamatan` AS `nama_kecamatan`,`tb_desa`.`nama_desa` AS `nama_desa`,`tb_kategori`.`kejadian` AS `nama_kejadian`,`tb_kategori`.`kategori` AS `kategori_kejadian` from ((((`tb_insiden` join `tb_kota` on((`tb_kota`.`id_kota` = `tb_insiden`.`id_kota`))) join `tb_kecamatan` on((`tb_kecamatan`.`id_kecamatan` = `tb_insiden`.`id_kecamatan`))) join `tb_desa` on((`tb_desa`.`id_desa` = `tb_insiden`.`id_desa`))) join `tb_kategori` on((`tb_kategori`.`kode` = `tb_insiden`.`kode`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `tb_insiden`
--
ALTER TABLE `tb_insiden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_kota_2` (`id_kota`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `tb_insiden`
--
ALTER TABLE `tb_insiden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD CONSTRAINT `tb_kecamatan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
