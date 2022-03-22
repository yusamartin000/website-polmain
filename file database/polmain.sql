-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2022 pada 15.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polmain`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bem`
--

CREATE TABLE `bem` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tugas` varchar(1000) NOT NULL,
  `link_foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bem`
--

INSERT INTO `bem` (`id`, `nama`, `jabatan`, `tugas`, `link_foto`) VALUES
(1, 'Rifki Zainur Rahman,S.Pd.,M.Pd', 'pembina BEM', '', '1Cp2WvRmnVrrPvGsP38veJyYf1xmYv9j1'),
(2, 'M. Fernanda', 'ketua BEM', '<ul>       <li>Mengawasi, Mengkoordinir dan mengendalikan kinerja setiap pengurus.</li>       <li>Membuat dan menetapkan kebijakan secara umum yang ditujukan kepada pengurus dan anggota.</li>       <li>Meningkatkan kerjasama pihak eksternal dan internal bersama pengurus BEM.</li>       <li>Bertanggung jawab atas penyelenggaraan seluruh anggota pengurus organisasi.</li>     </ul>', '1MCkZGYoKRQztfzfyxuK6gjRSLIWcEijj'),
(3, 'Akbar Abdullah', 'wakil BEM', '<ul>       <li>Menginstruksikan tugas dan fungsi pengurus BEM.</li>       <li>Membantu ketua umum menjalankan organisasi.</li>     </ul>', '1e3rDJbqCfw9YORIaBXBdKeOAaM3ilxnK'),
(4, 'Naura', 'sekertaris BEM', '<ul>       <li>Mengagendakan kegiatan yang berhubungan di dalam BEM dalam bentuk tulisan.</li>       <li>Memberikan saran dan usulan kepada ketua umum yang bersifat kontruktif.</li>       <li>Bertanggung jawab melaporkan agenda kegiatan kepada wakil ketua untuk dievaluasi</li>       <li>Bertanggung jawab dalam administrasi baik operasional maupun teknis.</li>     </ul>', '1fj20cBKEcdzykKr5qEnvjQFhGYh_wvDa'),
(5, 'Aldania', 'bendahara BEM', '<ul>       <li>Bertanggung jawab atas penyelenggaraan dan pelaksanaan administrasi BEM</li>       <li>Melaporkan administrasi keuangan BEM kepada seluruh anggota secara lisan maupun tulis setiap satu bulan sekali</li>       <li>Membukukan semua administrasi yang berkaitan dengan keuangan BEM</li>       <li>Memberikan arahan yang berkenaan dengan pendanaan kepada bendahara pelaksana kegiatan</li>     </ul>', '1wz7dxvz-k1O2eOCMzYurHLgdVXZlMylQ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `label` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `label`, `file`) VALUES
(1, 'Buku Panduan Praktik Kerja Lapangan', 'Panduan-Praktik-Kerja-Lapangan-Edisi-2022.pdf'),
(2, 'Buku Panduan Tugas Akhir', ''),
(3, 'Kebijakan Mutu SPMI', '[KM_POLMAIN_PMI_01]-Kebijakan Mutu-SPMI POLMAIN.pdf'),
(4, 'Rencana Strategis POLMAIN', 'RENSTRA-POLMAIN.pdf'),
(5, 'Pedoman Akademik POLMAIN', 'BUKU-PEDOMAN-AKADEMIK-POLITEKNIK-MASAMY-INTERNASIONAL.pdf'),
(6, 'Brosur PMB POLMAIN', 'BROSUR-PMB-POLMAIN-2022.pdf'),
(7, 'Kalender Akademik POLMAIN', 'Kalender-Akademik-GANJIL-TA-2021-2022.pdf'),
(8, 'Manual Mutu SPMI', '[MM_POLMAIN_PMI_01]-Manual-Mutu-Terbaru-POLMAIN.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `keys` varchar(11) NOT NULL,
  `label` text NOT NULL,
  `link_pdf` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pdf`
--

INSERT INTO `pdf` (`id`, `keys`, `label`, `link_pdf`) VALUES
(1, 'BP-PKL', 'Buku Panduan Praktik Kerja Lapangan', '1cOFq7Djv4DxE-NRZaAjE8aOZCNAe5Z0j'),
(2, 'BP-TA', 'Buku Panduan Tugas Akhir', ''),
(3, 'BROSUR', 'Brosur PMB POLMAIN', '1pzuxrQMgqzqkm3TWvPX-GL7sk1qh9-FR'),
(4, 'KAL-AKA', 'Kalender Akademik POLMAIN', '1l5B9vXZfj0beWzabmIIdgxIWNyduSy1l'),
(5, 'KM-SPMI', 'Kebijakan Mutu SPMI', '1AAroZ7TurhTCrW33AmMCvtNINsEtija9'),
(6, 'MM-SPMI', 'Manual Mutu SPMI', '1yG7VxRtUTUB08lIuaITKbIvdDHHfN7sA'),
(7, 'PED-AKA', 'Pedoman Akademik POLMAIN', ''),
(8, 'RESTRA', 'Rencana Strategis POLMAIN', '12sGqM3nssDpBH4Eqwxh5F27pXqS_8MSM'),
(9, 'PDF-AKA', 'Program Studi D3 Akuntansi', '1ZvJmwNxI3_kBDL5If9Znbncyc_SpVk7s'),
(10, 'PDF-KOM', 'Program Studi D3 Teknologi Komputer', '1meiVZs5Zt6ysUKzlB4S02jwe9DTDBXyK'),
(11, 'PDF-MSN', 'Program Studi D3 Teknologi Mesin', '1-qjc0U7vFK0QB47iQtZWclWBfUg2BodN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `tahun_gambar` varchar(200) NOT NULL,
  `deskripsi_gambar` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama_gambar`, `tahun_gambar`, `deskripsi_gambar`) VALUES
(1, 'Juara-lomba-3-agribisnis.jpg', '2021', 'Juara 3 Agribisnis '),
(2, 'prestasi_futsal.jpeg', '2019', 'Juara 1 Trofeo Futsal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sdm`
--

CREATE TABLE `sdm` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `foto` varchar(400) NOT NULL,
  `minat_bidang` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sdm`
--

INSERT INTO `sdm` (`id`, `nama`, `nidn`, `foto`, `minat_bidang`, `jabatan`) VALUES
(1, 'Prof.Dr.Ir.H.Djoko Hartanto,M.Sc.', '', '', '', 'Penasehat Direktur'),
(2, 'Prof.Dr.H.Rio Sofwanhadi,PAK(K)', '', '', '', 'Direktur'),
(3, 'Arif Fahmi, S.T., M.T.', '0703039501', '', 'Teknologi Komputer', 'Wadir 1 bidang Akademik'),
(4, 'Nanang Choirul', '', '', 'Akuntansi', 'Wadir 2 bidang Administrasi Keuangan & Sumber Daya Alam'),
(5, 'Ike Melanie', '', '', 'Akuntansi', 'Kaprodi Akuntansi'),
(6, 'Widita', '', '', 'Teknologi Mesin', 'Kaprodi Teknologi Mesin'),
(7, 'Heru Tri Ahmanto, S.Si.,M.Kom.', '0718128805', '', 'Teknologi Komputer', 'Kaprodi Teknologi Komputer'),
(8, 'Inggrid Yanuar Riska Ppratiwi, S.S.T.,M.Tr.T', '0712019401', '', 'Teknologi Komputer', 'Dosen'),
(13, 'Dr.Atan Pramana', '', '', 'Teknologi Komputer', 'Dosen'),
(14, 'Mainike Silvi Rety Badian', '', '', 'Teknologi Komputer', 'Dosen'),
(15, 'Andi Karya Catur', '', '', 'Akuntansi', 'Dosen'),
(16, 'Ayu Desita', '', '', 'Akuntansi', 'Dosen'),
(17, 'Wona', '', '', 'Akuntansi', 'Dosen'),
(18, 'Rifki Zainur Rahman,  S.Pd.,M.Pd.', '', '', 'Teknologi Mesin', 'Dosen'),
(19, 'Rima', '', '', 'Teknologi Mesin', 'Dosen'),
(20, 'Sunar', '', '', 'Teknologi Mesin', 'Dosen'),
(21, 'Wahyu', '', '', 'Teknologi Mesin', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bem`
--
ALTER TABLE `bem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bem`
--
ALTER TABLE `bem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sdm`
--
ALTER TABLE `sdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
