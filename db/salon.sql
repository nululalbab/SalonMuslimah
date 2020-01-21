-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2020 pada 06.41
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `id_cabang` char(3) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(122) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id_admin`, `id_cabang`, `nama`, `email`, `hp`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '001', 'admin', 'admin@admin.com', NULL, NULL, '$2y$10$R7MA8kzZrmZTVnR63BOOQ.UODO7BtFIx8J6W8oylg28D6Gsxl7s9m', NULL, '2017-07-06 00:34:39', '2017-07-06 00:34:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` char(3) NOT NULL,
  `nama` varchar(55) DEFAULT NULL,
  `alamat` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama`, `alamat`) VALUES
('001', 'Marvel City', 'Surabaya'),
('002', 'Grand City', 'Surabaya'),
('003', 'Royal Plaza', 'Surabaya'),
('004', 'Citi Of Tommorow', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_paket` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_paket`
--

INSERT INTO `detail_paket` (`id_paket`, `id_service`) VALUES
(1, 3),
(1, 4),
(1, 5),
(2, 1),
(2, 2),
(2, 4),
(3, 7),
(3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` char(10) NOT NULL,
  `nama` varchar(122) DEFAULT NULL,
  `besar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamreservasi`
--

CREATE TABLE `jamreservasi` (
  `id_jam` int(11) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jamreservasi`
--

INSERT INTO `jamreservasi` (`id_jam`, `mulai`, `selesai`) VALUES
(1, '09:00:00', '10:00:00'),
(2, '10:00:00', '11:00:00'),
(3, '11:00:00', '12:00:00'),
(4, '12:00:00', '13:00:00'),
(5, '13:00:00', '14:00:00'),
(6, '14:00:00', '15:00:00'),
(7, '15:00:00', '16:00:00'),
(9, '16:00:00', '17:00:00'),
(10, '17:00:00', '18:00:00'),
(11, '18:00:00', '19:00:00'),
(12, '19:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Body Care', 'Dapatkan pengalaman layanan body care yang melemaskan seluruh badan', 'spa.jpg'),
(2, 'Face Care', 'Dapatkan perawatan wajah yang halus dan nyaman', 'servis_6.jpg'),
(3, 'Hair Care', 'Dapatkan pelayanan rambut untuk menjadikan mahkotamu menawan', 'servis_4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama` varchar(122) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` varchar(122) DEFAULT NULL,
  `gambar` varchar(122) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Paket Face Care', 200000, 'Paket dengan layanan Peeling, Scrubbing, dan Facial', 'page2_img2.jpg'),
(2, 'Paket Body Care', 180000, 'Paket dengan layanan Spa dan Pijat Urut Kaki', 'page2_img1.jpg'),
(3, 'Paket Hair Care', 150000, 'Dapatkan pelayanan Smoothing dan Warna Rambut', 'page2_img3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_cabang` char(3) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(8) DEFAULT NULL,
  `hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(122) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_cabang`, `nama`, `nip`, `hp`, `alamat`, `tempatlahir`, `tgllahir`, `created_at`, `updated_at`) VALUES
(1, '001', 'Titin', '01010101', '081272322131', 'gubeng', 'Nganjuk', '1997-07-27', '2017-07-06 02:47:34', '0000-00-00 00:00:00'),
(2, '001', 'Marfuah', '01020102', '08123120302', 'Kapasan', 'Surabaya', '1997-07-12', '2017-07-06 02:49:24', '0000-00-00 00:00:00'),
(3, '001', 'Darsik', '01030103', '085722223333', 'Surabaya', 'Tegal ', '1997-02-12', '2017-07-06 02:50:51', '0000-00-00 00:00:00'),
(4, '002', 'Rachel', '02020201', '081224997123', 'Surabaya', 'Tegal', '1997-07-11', '2017-07-06 02:51:34', '0000-00-00 00:00:00'),
(9, '002', 'Tiara', '08080808', '081224997124', 'Surabaya', 'Jakarta', '2017-07-14', '2017-07-07 02:23:50', '2017-07-07 02:23:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_reservasi` int(11) DEFAULT NULL,
  `id_diskon` char(10) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_reservasi`, `id_diskon`, `tgl`, `jumlah`) VALUES
(2, 3, NULL, '2017-07-11 02:13:51', 100000),
(3, 1, NULL, '2017-07-11 06:21:43', 200000),
(5, 4, NULL, '2017-07-12 08:47:11', 100000),
(6, 5, NULL, '2017-07-12 08:47:17', 100000),
(7, 7, NULL, '2017-07-12 10:17:18', 250000),
(8, 6, NULL, '2017-07-12 14:06:42', 250000),
(9, 8, NULL, '2019-05-30 06:58:04', 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_cabang` char(3) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_paket`, `id_pegawai`, `id_jam`, `id_service`, `id_cabang`, `id_user`, `tanggal`, `status`) VALUES
(1, NULL, 1, 1, 1, '001', 2, '2017-07-01', 1),
(2, NULL, 1, 1, 2, '001', 2, '2017-07-02', 1),
(3, NULL, 1, 2, 1, '001', 6, '2017-07-01', 1),
(4, NULL, 1, 2, 1, '001', 6, '2017-07-01', 1),
(5, NULL, 4, 2, 8, '002', 7, '2017-07-13', 1),
(6, NULL, 1, 2, 1, '001', 7, '2017-07-13', 1),
(7, NULL, 3, 2, 1, '001', 7, '2017-07-15', 1),
(8, NULL, 2, 2, 1, '001', 6, '2017-07-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `id_kategori`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 1, 'Spa', 'Dapatkan spa dengan rasa menenangkan dan menyehatkan', 100000, 'spa.jpg'),
(2, 1, 'Pijat Urut', 'Lemaskan kakimu dengan tekanan yang pas dan menghilangkan rasa pegal', 100000, 'page2_img7.jpg'),
(3, 2, 'Facial', 'Dapatkan perawatan muka untuk menghaluskan dan mengencangkan muka', 80000, 'servis_5.jpg'),
(4, 2, 'Peeling', 'Bersihkan wajahmu dari minyak dan kotoran hitam ', 70000, 'servis_6.jpg'),
(5, 2, 'Scrubing', 'Bersihkan wajahmu dengan scrub sehingga minyak tak lagi muncul.', 70000, 'servis_7.jpg'),
(6, 3, 'Potong Rambut', 'Potong rambutmu sesuai dengan gaya dan karaktermu', 80000, 'servis_1.jpg'),
(7, 3, 'Warna Rambut', 'Warnai rambutmu dengan berbagai warna pilihan yang dapat mewarnai dirimu', 100000, 'servis_2.jpg'),
(8, 3, 'Smoothing Rambut', 'Luruskan rambutmu yang mulai tidak dapat diatur', 120000, 'servis_3.jpg'),
(9, 3, 'Rebonding Rambut', 'Jadikan rambutmu menjadi kuat dan terlihat berkilau', 150000, 'servis_4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `hp`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ulul', 'ulul@example.com', '081224997124', 'Surabaya Jagir', '$2y$10$XTCGtKg2Nc8Fbdvtss7vge2Cy6IPSy4QgprnLly8xRpCB0p3Bn9y6', 'YTzvz8K4sNtc3qz1aP6XhpoNJdXLimYzQdyMzwuZ9YkimU9oUEqDqEbKAgyd', '2017-07-12 14:09:21', '2017-07-05 11:36:21'),
(5, 'lengkap', 'lengkap@example.com', '081224997124', 'Surabaya', '$2y$10$pZBDGDVUVGckCcuNdtLNyOfWGdiqZ1uwPQHWvvyc52uF7ww83Z9Tu', 'wUgfBwCtk1IWvdX07OhfVgo1vGtLvLHLq5NNIcyad2RWS3w3k1qxp3DFYydi', '2017-07-09 08:57:55', '2017-07-09 01:56:12'),
(6, 'guest', 'guest@guest.com', '081224997124', 'Guest', '$2y$10$WAieSfB/ynZLaYJNSceXfewtrR/4uDCIybv0Q5M.f4uk.VblxLJ6q', 'DF4vF4HctUgQlcK3aUvUp0Z97KG7w9xYnRvdZBru5vFuxtDAtVkmHSS5fLa8', '2017-07-09 15:34:02', '2017-07-09 08:33:20'),
(7, 'rahman', 'rahman@yahoo.com', '081224997124', 'Surabaya', '$2y$10$r6bCktX3CHhoXIY3zWNrDe2zLEm5Z1YXEpmzQkNdhobscsOmTjxhC', 'IQUV0SLsZFr4mJCN25z4cUgRGLpkPr5dwKju1PcvoO2NmTAeo6LDRlu1sAwd', '2017-07-12 09:51:10', '2017-07-12 01:38:44'),
(8, 'test', 'test@tes.com', '081224997124', 'Surabaya', '$2y$10$W9G/iTunLTZCBLAIsmhzse/lOzcXCVfIbme9DBMzHVxlHX19BY7aK', 'vpcwls04rPwFItTUMuswJckbb8DyrmOfgYNW9fkBALr8W1QlUZMViQHt0gzT', '2017-11-19 15:27:04', '2017-11-19 08:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `FK_adminbekerja` (`id_cabang`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`id_paket`,`id_service`),
  ADD KEY `FK_dipaketkan` (`id_service`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `jamreservasi`
--
ALTER TABLE `jamreservasi`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `FK_bekerja` (`id_cabang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `FK_dibayarkan` (`id_reservasi`),
  ADD KEY `FK_didiskon` (`id_diskon`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `FK_melayani` (`id_pegawai`),
  ADD KEY `FK_mereservasi` (`id_user`),
  ADD KEY `FK_reservasi_layanan` (`id_service`),
  ADD KEY `FK_reservasi_paket` (`id_paket`),
  ADD KEY `FK_tempat` (`id_cabang`),
  ADD KEY `FK_waktu` (`id_jam`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `FK_kategori_layanan` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jamreservasi`
--
ALTER TABLE `jamreservasi`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `FK_adminbekerja` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD CONSTRAINT `FK_dipaketkan` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `FK_isipaket` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_bekerja` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_dibayarkan` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id_reservasi`),
  ADD CONSTRAINT `FK_didiskon` FOREIGN KEY (`id_diskon`) REFERENCES `diskon` (`id_diskon`);

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `FK_melayani` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `FK_mereservasi` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `FK_reservasi_layanan` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `FK_reservasi_paket` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `FK_tempat` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`),
  ADD CONSTRAINT `FK_waktu` FOREIGN KEY (`id_jam`) REFERENCES `jamreservasi` (`id_jam`);

--
-- Ketidakleluasaan untuk tabel `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_kategori_layanan` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
