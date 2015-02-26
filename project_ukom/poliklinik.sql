-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Feb 2015 pada 11.04
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokters`
--

CREATE TABLE IF NOT EXISTS `dokters` (
  `kd_dokter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_poli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `kd_user` int(11) NOT NULL,
  `nm_dokter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tmpt_lhr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungans`
--

CREATE TABLE IF NOT EXISTS `kunjungans` (
  `tgl_kunjungan` varchar(50) NOT NULL,
  `no_pasien` int(50) NOT NULL,
  `kd_poli` varchar(50) NOT NULL,
  `jam_kunjungan` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratoriums`
--

CREATE TABLE IF NOT EXISTS `laboratoriums` (
  `kd_lab` varchar(50) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `hasil_lab` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
(10, 'fadhil', 'ading');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_13_085032_create_table_pasien', 1),
('2015_02_13_085136_create_table_dokter', 1),
('2015_02_13_085152_create_table_rekam_medis', 1),
('2015_02_13_085208_create_table_tindakan', 1),
('2015_02_13_085222_create_table_obat', 1),
('2015_02_13_085237_create_table_laboratorium', 1),
('2015_02_13_085254_create_table_kunjungan', 1),
('2015_02_13_085314_create_table_poliklinik', 1),
('2015_02_14_091424_create_pasien_table', 1),
('2015_02_14_091809_create_rekammedis_table', 2),
('2015_02_14_091845_create_laboratorium_table', 2),
('2015_02_14_092026_create_tindakan_table', 2),
('2015_02_14_092049_create_obat_table', 2),
('2015_02_14_092116_create_dokter_table', 2),
('2015_02_14_092142_create_kunjungan_table', 2),
('2015_02_14_092216_create_poliklinik_table', 2),
('2015_02_10_192704_create_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obats`
--

CREATE TABLE IF NOT EXISTS `obats` (
  `kd_obat` varchar(50) NOT NULL,
  `nm_obat` varchar(50) NOT NULL,
  `jml_obat` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE IF NOT EXISTS `pasiens` (
`id` int(10) unsigned NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `nm_pasien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `j_kel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nm_kk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hub_kel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`id`, `no_pasien`, `nm_pasien`, `j_kel`, `agama`, `tgl_lahir`, `no_tlp`, `nm_kk`, `hub_kel`, `created_at`, `updated_at`) VALUES
(27, 111, 'fadhil', 'Laki - Laki', 'Islam', '0000-00-00', '', '', '', '2015-02-21 11:12:27', '2015-02-21 18:10:12'),
(31, 26, 'topan', 'Laki - Laki', 'Islam', '0000-00-00', '0888888', '', 'pooo', '2015-02-21 13:32:07', '2015-02-24 19:08:13'),
(32, 30, 'riski', 'Laki - Laki', 'Islam', '0000-00-00', '12133131313', '', 'o', '2015-02-21 14:07:26', '2015-02-21 17:37:53'),
(33, 40, '', 'Laki - Laki', 'Islam', '0000-00-00', '', '', '', '2015-02-21 14:27:34', '2015-02-21 18:01:41'),
(34, 124, '', 'Laki - Laki', 'Islam', '0000-00-00', '', '', '', '2015-02-24 18:23:25', '2015-02-24 18:23:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polikliniks`
--

CREATE TABLE IF NOT EXISTS `polikliniks` (
  `kd_poli` varchar(50) NOT NULL,
  `nm_poli` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammediss`
--

CREATE TABLE IF NOT EXISTS `rekammediss` (
  `no_rm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`id` int(10) unsigned NOT NULL,
  `kd_tindakan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_obat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_pasien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keluhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakans`
--

CREATE TABLE IF NOT EXISTS `tindakans` (
  `kd_tindkan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nm_tindakan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungans`
--
ALTER TABLE `kunjungans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratoriums`
--
ALTER TABLE `laboratoriums`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polikliniks`
--
ALTER TABLE `polikliniks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekammediss`
--
ALTER TABLE `rekammediss`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tindakans`
--
ALTER TABLE `tindakans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `rekammediss`
--
ALTER TABLE `rekammediss`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tindakans`
--
ALTER TABLE `tindakans`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
