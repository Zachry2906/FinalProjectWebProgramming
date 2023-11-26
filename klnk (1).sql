-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 12.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klnk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(5) NOT NULL,
  `pengalaman` varchar(1) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `spesialis` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(8000) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `pengalaman`, `nama`, `spesialis`, `deskripsi`, `ruangan`, `harga`, `gambar`) VALUES
(1777, '5', 'Alipia Afifah Nur Fatimah', 'Informatika', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, delectus! Asperiores quis, accusantium labore, quos ipsum nobis molestiae modi, maxime sapiente voluptates voluptatum minima. Molestias cum pariatur necessitatibus aut, ipsum ab magnam quis officia fuga reiciendis rem veniam maxime quidem adipisci consequatur alias sit non illum esse! Maxime id eligendi, fugit, eveniet sed ullam ad voluptas impedit, reprehenderit qui et. Similique neque sequi laboriosam sapiente? Dolore quisquam, ducimus tempore non excepturi fuga ipsum corrupti provident et quas. Quae nisi consequatur velit, recusandae distinctio quo ab, quidem laborum ullam dolores quaerat. Omnis, et sunt officia, enim vel porro repellendus aut sit assumenda delectus saepe sint corrupti dolore itaque velit. Inventore recusandae, ea soluta et quas iste vero in explicabo ab adipisci debitis doloremque, magni perferendis labore ratione. Id omnis necessitatibus quos qui dolore quidem voluptatibus sequi sapiente placeat laborum corporis quis error, doloremque praesentium! Autem nam, sequi laudantium voluptates voluptatem doloribus!', 'Patt 4-3A', 1500, 'dok1.'),
(1778, '1', 'Fikri', 'Statistika', '', 'Patt-1A', 109090, 'dok1.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(5) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jam` varchar(5) NOT NULL,
  `id_dokter` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `jadwal`, `jam`, `id_dokter`) VALUES
(7, '2023-11-01', '09.00', 1777);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `rek_medis` int(5) DEFAULT NULL,
  `id_jadwal` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `rek_medis`, `id_jadwal`) VALUES
(7, 123220077, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `rek_medis` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`rek_medis`, `password`, `nama`, `email`, `tanggal_lahir`) VALUES
(123220077, 'user', 'Ahmad Zakaria', 'aryazakaria67@gmail.com', '2003-09-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `fkid_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fkrek_medis` (`rek_medis`),
  ADD KEY `fkid_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`rek_medis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1779;

--
-- AUTO_INCREMENT untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `rek_medis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232200778;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `fkid_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fkid_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_dokter` (`id_jadwal`),
  ADD CONSTRAINT `fkrek_medis` FOREIGN KEY (`rek_medis`) REFERENCES `user` (`rek_medis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
