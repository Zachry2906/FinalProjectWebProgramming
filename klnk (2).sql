-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 02.11
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
(1778, '6', 'Dr. dr. M. Yamin, Sp.JP (K), Sp.PD, FACC, FSCAI, F', 'Kesehatan Mental', 'Dr. dr. M. Yamin, Sp.JP (K), Sp.PD, FACC, FSCAI, FAPHRS merupakan alumni Fakultas Kedokteran Universitas Syah Kuala, Aceh, Indonesia. Kemudian beliau melanjutkan pendidikannya sebagai dokter spesialis di Universitas Indonesia. Lanjut lagi pendidikan untuk gelar Ph.D in Cardiac Pacing and Resynchroniza on Therapy di Universitas Indonesia.  Dr. dr. M. Yamin, Sp.JP (K), Sp.PD, FACC, FSCAI, FAPHRS kemudian melanjutkan pendidikan Ph.D in Cardiac Pacing and Resynchroniza on Therapy di Universitas Indonesia. Beliau terlibat dalam berbagai keanggotaan atau fellowship antara lain Fellow of Society of Cardiovascular Angiography and Intervention; Fellow of American College Cardiology; Fellowship in Interventional Cardiology, Toranomon Hospital, di Tokyo, Jepang; Fellowship in Transesophageal Echocardiography, Instruct University, di Australia; Fellowship in Electrophysiology and Pacing, National Heart Institute, di Kuala Lumpur, Malaysia; dan Fellowship in Interventional Cardiology, Rumah Sakit Jantung Harapan Kita, di Jakarta, Indonesia. Dr. dr. M. Yamin, Sp.JP (K), Sp.PD, FACC, FSCAI, FAPHRS memiliki ketertarikan khusus pada bidang Interventional Cardiology dan Electrophysiology & Pacing', 'Sekre Himatif', 600000, 'dok4.'),
(1779, '3', 'Dr. Srdjito', 'Kesehatan Mental', 'Seorang dokter psikolog yang berdedikasi memiliki pengetahuan mendalam dan keterampilan dalam bidang psikologi klinis. Dengan latar belakang pendidikan yang solid dan pengalaman klinis yang luas, dia memiliki kemampuan untuk memahami, menganalisis, dan mengatasi berbagai tantangan kesehatan mental. Dokter psikolog ini memiliki pendekatan yang empatik dan terapeutik dalam membantu pasiennya. Dengan keahlian dalam penilaian psikologis, diagnosis, dan perawatan, dia mampu menciptakan lingkungan yang aman dan mendukung bagi individu yang mencari bantuan. Selain itu, komitmen dokter psikolog terhadap pengembangan terus-menerus dan penelitian menghasilkan pendekatan terapi yang inovatif dan efektif. Kesungguhan dan dedikasinya membuatnya menjadi mitra tepercaya bagi mereka yang mencari pemahaman lebih dalam, dukungan, dan perubahan positif dalam perjalanan kesehatan mental mereka.', 'Patt-1A', 40, 'dok2.'),
(1781, '7', 'Dr. Drahma Kusmarwaty, Sp. KFR', 'Psikiatri', 'Dr. Drahma Kusmarwaty, Sp. KFR adalah dokter spesialis kedokteran fisik dan rehabilitasi yang berpraktek di Eka Hospital Cibubur. Beliau menempuh pendidikan kedokteran umum di Fakultas Kedokteran Universitas Tarumanegara. Dr. Drahma Kusmarwaty, Sp. KFR kemudian melanjutkan program pendidikan dokter spesialisnya di Universitas Sam Ratulangi, Manado, Indonesia. Salah satu program yang pernah beliau ikuti adalah Comprehensive Cardiopulmonary Rehabilitation.', 'Sekretariat Himasisfo', 1500000, 'dok5.'),
(1782, '1', 'Dr. Donny Aldian, Sp.M, MARS ', 'Prikologi', 'Dr. Donny Aldian, Sp.M, MARS adalah dokter spesialis mata yang berpraktek di Eka Hospital BSD. Beliau menempuh pendidikan kedokteran di Universitas Andalas, Padang, Indonesia dan melanjutkan pendidikan dokter spesialisnya di Universitas Indonesia. Dr. Donny Aldian, Sp.M, MARS juga pernah tergabung dalam Fellowship in SICS & Phacoemulsification, Bangalore, India; serta Fellowship in Vitreo-Retinal, Universitas Indonesia. Beliau memiliki ketertarikan khusus dalam bidang Retina, Vitreo-Retinal, dan General Ophthalmology. ', 'Distrik IF', 80000, 'dok7.'),
(1783, '6', 'Dr. Rully Budi Siti Nur, Sp.OK', 'Kesehatan Jiwa', 'Dr. Rully Budi Siti Nur, Sp.OK adalah dokter spesialis kedokteran okupasi yang berpraktek di Eka Hospital Bekasi. Beliau menempuh pendidikan kedokteran umum di Universitas Jember, Indonesia. lalu melanjutkan pendidikan dokter spesialis kedokteran okupasi di Universitas Indonesia. Dr. Rully Budi Siti Nur, Sp.OK saat ini juga merupakan Part Time Student of Master International Health (MIH), Koninklijk Instituut voor de Tropen. Beberapa program training yang telah beliau ikuti diantaranya adalah Hiperkes (Occupational Health and Safety Training), dan Leadership Training  di Jakarta, Indonesia.', 'Selasar Minyak', 50000, 'dok6.'),
(1784, '5', 'Ahmad Zakaria', 'Informatika', 'Seorang dokter psikolog yang berdedikasi memiliki pengetahuan mendalam dan keterampilan dalam bidang psikologi klinis. Dengan latar belakang pendidikan yang solid dan pengalaman klinis yang luas, dia memiliki kemampuan untuk memahami, menganalisis, dan mengatasi berbagai tantangan kesehatan mental. Dokter psikolog ini memiliki pendekatan yang empatik dan terapeutik dalam membantu pasiennya. Dengan keahlian dalam penilaian psikologis, diagnosis, dan perawatan, dia mampu menciptakan lingkungan yang aman dan mendukung bagi individu yang mencari bantuan. Selain itu, komitmen dokter psikolog terhadap pengembangan terus-menerus dan penelitian menghasilkan pendekatan terapi yang inovatif dan efektif. Kesungguhan dan dedikasinya membuatnya menjadi mitra tepercaya bagi mereka yang mencari pemahaman lebih dalam, dukungan, dan perubahan positif dalam perjalanan kesehatan mental mereka.', 'Patt-1A', 1500000, 'dok3.');

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
(9, '2023-11-01', '12.00', 1778),
(10, '2023-11-01', '12.00', 1783),
(11, '2023-11-02', '15.00', 1779),
(12, '2023-11-01', '15.00', 1779);

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
(9, 123220077, 9),
(10, 123220077, 10),
(12, 123220016, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `rek_medis` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`rek_medis`, `password`, `nama_user`, `email`, `tanggal_lahir`) VALUES
(123220016, 'user', 'Andrea Alfian', 'bcs@gmail.com', '2004-08-18'),
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
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1785;

--
-- AUTO_INCREMENT untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
