-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 02.15
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `tanggal`, `isi`, `foto`) VALUES
(8, 'Jaga Kesehatan Jantung anda', '2022-12-10', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', 'clickwallpapers-manchesterunited-fullhd-img34.jpg'),
(9, 'Informasi mengenai Covid-19 di Kabupaten Majene Su', '2022-12-11', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', '6-resep-minuman-dari-lidah-buaya-sehat-dan-menyegarkan1.jpg'),
(10, 'Tanggap Sigap Covid-19', '2022-12-16', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', '664xauto-es-aloe-vera-yang-menyegarkan-untuk-buka-puasa-180518p1.jpg'),
(11, 'Diet Sehat', '2022-12-10', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', 'Cooking.jpg'),
(12, 'istirahat yang cukup untuk menambah darah', '2022-12-12', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', '811cYF4jgNL__AC_SL1500_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donor`
--

CREATE TABLE `tb_donor` (
  `id_donor` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tanggal_donor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_donor`
--

INSERT INTO `tb_donor` (`id_donor`, `nama`, `golongan_darah`, `tanggal_donor`, `id_jadwal`) VALUES
(1, 'Andi Rommy Rizky Risyandi', 'AB', '2022-12-15 08:10:48', 1),
(3, 'Klasen', 'B', '2022-12-15 08:29:35', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `hari`, `tanggal`, `jam`, `lokasi`) VALUES
(1, 'Rabu', '2022-12-17', '08:30:00', 'Jl. A.Yani No.75 Singkawang Barat'),
(2, 'Selasa', '2022-12-07', '09:00:00', 'Jl. A.Yani No.75 Singkawang'),
(3, 'Senin', '2022-12-13', '10:00:00', 'Jl. A.Yani No.75 Singkawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kebutuhan`
--

CREATE TABLE `tb_kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_rm` varchar(20) NOT NULL,
  `nama_os` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `permintaan` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kebutuhan`
--

INSERT INTO `tb_kebutuhan` (`id_kebutuhan`, `tanggal`, `no_rm`, `nama_os`, `alamat`, `permintaan`, `golongan_darah`, `dokter`) VALUES
(2, '2022-12-10 12:04:31', '1565423', 'Andi', 'Jl.Rawasari', '6', 'O', 'Zainudin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_stok` int(11) NOT NULL,
  `kode_darah` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id_stok`, `kode_darah`, `golongan_darah`, `keterangan`) VALUES
(1, 'xc990s', 'O', 'xc990s');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `nik`, `email`, `password`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telpon`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `level`) VALUES
(1, 'Andi Rommy Rizky Risyandi', '123123123123', 'andirommy5@gmail.com', '32f965dfb6fb1165fa28f5c9a182c9bbae45cb7f', 'Laki-laki', 'Pontianak', '1997-11-26', 'Jl.Rawasari', '089516842246', '75', '162', 'O', 'user'),
(2, 'Admin', '156464654646', 'risyandirommy@gmail.com', 'd09c1889c7ffaed39a054ba8f448ae9519f53562', '', '', '0000-00-00', '', '', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_donor`
--
ALTER TABLE `tb_donor`
  ADD PRIMARY KEY (`id_donor`),
  ADD KEY `tanggal_donor` (`tanggal_donor`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`),
  ADD UNIQUE KEY `no_rm` (`no_rm`);

--
-- Indeks untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD UNIQUE KEY `kode_darah` (`kode_darah`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_donor`
--
ALTER TABLE `tb_donor`
  MODIFY `id_donor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  MODIFY `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_donor`
--
ALTER TABLE `tb_donor`
  ADD CONSTRAINT `tb_donor_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
