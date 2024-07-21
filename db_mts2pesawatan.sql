-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2024 pada 17.39
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mts2pesawatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama`, `pekerjaan`, `keterangan`, `gambar`) VALUES
(1, 'Mahmudin Wibowo', 'Mahasiswa', 'Saya Alumni Pondok Pesantren Al-Hidayah Keputran Tahun 2010', '25052024095822.jpg'),
(2, 'KH. Munawir', 'Pengasuh Pondok Pesantren', 'Saya Alumni Tahun 2005 sekarang saya sudah mempunyai pesantren, berkat beliau KH. Imam Asrori saya bisa menjadi pengasuh pesantren', '25052024100255.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL DEFAULT '0',
  `gambar` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`, `jenis`) VALUES
(7, 'Festival Jamiyyah Nahdlatut Thulab Pondok Pesantern AL-Hidayah Keputran', '24/05/2024', '2024-05-24 03:59:39', '<p>Festival Jamiyyah Nahdlatul Thulab Merupakan Kegiatan Akhir Tahun Madrasah Diniyah Pondok Pesantren Al-Hidayah Keputran</p>\r\n', 0, '24052024105939.jpg', 'informasi'),
(8, 'Song Song Bulan Ramadhan', '24/05/2024', '2024-05-24 04:05:03', '<p>&nbsp;</p>\r\n\r\n<p>Di Pondok Pesantren Al-Hidayah Keputran, bulan Ramadhan tiba dengan penuh keceriaan dan semangat. Di bawah teriknya sinar mentari, para santri mulai bersiap-siap menyambut bulan penuh berkah ini. Suasana pesantren dipenuhi dengan kegiatan ibadah dan pembelajaran agama yang intensif, menciptakan atmosfer spiritual yang menggugah hati.</p>\r\n', 0, '24052024110503.jpg', 'informasi'),
(11, 'PPDB MTs dan SMK Maarif Keputran', '25/05/2024', '2024-05-25 02:11:14', '<p>Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2024/2025 Sudah dibuka ayoo buruan daftar</p>\r\n', 0, '25052024091114.jpg', 'informasi'),
(10, 'Penerimaan Santri Baru Tahun Pelajaran 2024/2025', '25/05/2024', '2024-05-25 02:08:14', '<p>Penerimaan Santri Baru (PSB) Tahun Pelajaran 2024/2025 Sudah dibuka segera daftarkan diri anda ayoo buruan daftar</p>\r\n', 0, '25052024090814.jpg', 'informasi'),
(12, 'Jalur Tahfizh Al-Qurâ€™an', '21/07/2024', '2024-07-21 06:48:38', '<p>Nilai rata-rata rapor akademik minimal 80 (kelas 4 semester 1 s/d kelas 6 semester 1)</p>\r\n\r\n<p>Menguasai hafalan Al-Quran 2 Juz</p>\r\n\r\n<p>Sertifikat Tahfizh (tingkat antar sekolah SD/Sederajat)</p>\r\n', 0, '25052024094044.jpg', 'halaman'),
(13, 'Jalur Prestasi Non Akademik', '21/07/2024', '2024-07-21 06:48:06', '<p>Nilai rata-rata raport 80 (kelas 4 semester 1 s/d kelas 6 semester 1)</p>\r\n\r\n<p>Sertifikat prestasi Non Akademik (tingkat antar sekolah SD/Sederajat)</p>\r\n', 0, '25052024094251.jpg', 'halaman'),
(16, 'Jalur Prestasi Akademik', '21/07/2024', '2024-07-21 06:47:18', '<p>Nilai Rata-rata raport 87 (kelas 4 semester 1 s/d kelas 6 semester 1)</p>\r\n\r\n<p>Sertifikat prestasi akademik (tingkat antar sekolah SD/Sederajat)</p>\r\n', 0, '21072024014718.jpg', 'halaman'),
(17, 'Jalur Reguler', '21/07/2024', '2024-07-21 06:50:04', '<p>lulus sd - mi</p>\r\n\r\n<p>mempunyai akte kelahiran</p>\r\n\r\n<p>mempunyai raport&nbsp;(Kelas 4 &ndash; 6)</p>\r\n', 0, '25052024094911.jpg', 'halaman'),
(5, 'Tentang Kami', '19/04/2024', '2024-04-30 06:09:41', '<p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) adalah sebuah lembaga pemerintah di Indonesia yang bertanggung jawab dalam pembangunan dan pengelolaan infrastruktur publik serta perumahan bagi masyarakat. Tugas utama dari Dinas PUPR adalah merencanakan, melaksanakan, dan mengawasi pembangunan serta pemeliharaan infrastruktur yang meliputi jalan, jembatan, irigasi, bendungan, gedung, fasilitas air minum, sanitasi, serta pembangunan perumahan untuk rakyat.</p>\r\n\r\n<p>Beberapa fungsi penting dari Dinas PUPR antara lain:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Perencanaan Infrastruktur</strong>: Merencanakan pembangunan infrastruktur dan perumahan sesuai dengan kebutuhan masyarakat dan arah pembangunan nasional.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pelaksanaan Proyek</strong>: Melaksanakan pembangunan infrastruktur dan perumahan baik secara langsung maupun melalui kontraktor yang diamanahkan oleh pemerintah.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengawasan dan Pengendalian</strong>: Mengawasi dan mengendalikan pelaksanaan proyek pembangunan agar sesuai dengan standar teknis, waktu, dan anggaran yang telah ditetapkan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pemeliharaan Infrastruktur</strong>: Bertanggung jawab atas pemeliharaan dan perawatan infrastruktur yang telah dibangun agar tetap berfungsi dengan baik dan aman digunakan oleh masyarakat.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Perumahan</strong>: Mengelola program perumahan bagi masyarakat, termasuk dalam hal pembangunan rumah subsidi, perumahan bagi masyarakat berpenghasilan rendah (MBR), dan peningkatan akses terhadap perumahan layak huni.</p>\r\n	</li>\r\n</ol>\r\n', 0, '19042024091810.jpg', 'profil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nisn` varchar(100) DEFAULT NULL,
  `nama` varchar(128) NOT NULL,
  `warga_siswa` varchar(100) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `alamat` text,
  `password` varchar(100) DEFAULT NULL,
  `show_pass` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `aktif` int(1) DEFAULT '0',
  `status` int(1) DEFAULT '0',
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT '0',
  `status_data` varchar(100) DEFAULT NULL,
  `id_sesi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `no_daftar`, `program`, `nik`, `nisn`, `nama`, `warga_siswa`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `asal_sekolah`, `alamat`, `password`, `show_pass`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `no_hp`, `email`, `waktu`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `aktif`, `status`, `tgl_daftar`, `tgl_konfirmasi`, `konfirmasi`, `status_data`, `id_sesi`) VALUES
(1, 'MTSN2/20240721/001/17:15:55', 'Prestasi Akademik', '17787078606', '342342', 'mardi', 'WNA', '669d0a55d04ba.jpg', 'perempuan', '343434', '2024-07-21', 'sd balai', 'pringsewu34', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '34', '34', '34', '34', '34', '34', '34', '098787', 'mardi@gm.com', '17:16:10', '34', '34', '34', '34', '34', '34', '34', '34', '34', '34', 0, 1, '2024-07-21', NULL, 0, 'update', '103718933299');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(100) NOT NULL,
  `id_daftar` int(100) NOT NULL,
  `ket_dokumen` varchar(100) DEFAULT NULL,
  `file_dokumen` varchar(100) DEFAULT NULL,
  `jenis_dokumen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'MTs N 2 Pesawaran', ' +6281366547191', 'MTs Negeri 2 Pesawaran', 'mtsn2pesawaran@gmail.com', 'Jl. H. Subeki, Gunungrejo, Way Lima, Kabupaten Pesawaran, Lampung 3536', '<p>Puji syukur kami panjatkan ke hadirat Allah SWT, karena atas segala limpahan rahmat dan hidayah-Nya, kami dapat menyambut kehadiran sebuah inovasi baru di MTS Negeri 2 Pesawaran, yaitu berdirinya website resmi sekolah kami kami.</p>\r\n\r\n<p>Sebagai pengurus, kami sangat bangga dan berterima kasih atas dukungan serta partisipasi semua pihak yang telah turut berkontribusi dalam proses pembangunan dan peluncuran website ini. Website ini bukan hanya sekadar wadah informasi, tetapi juga merupakan langkah maju kami dalam memanfaatkan teknologi informasi untuk meningkatkan kualitas layanan pendidikan dan dakwah di lingkungan sekolah kami.</p>\r\n\r\n<p>Melalui website ini, kami berharap dapat memberikan akses yang lebih luas bagi masyarakat, termasuk calon santri dan orang tua, untuk mendapatkan informasi tentang program-program pendidikan, kegiatan-kegiatan keagamaan, serta berbagai prestasi dan pencapaian yang telah diraih oleh sekolah kami kami.</p>\r\n\r\n<p>Kami juga berkomitmen untuk terus mengembangkan dan memperbarui konten-konten yang ada dalam website ini, sehingga dapat selalu memberikan informasi yang akurat, relevan, dan bermanfaat bagi semua pihak yang mengunjungi website kami.</p>\r\n\r\n<p>Terima kasih kepada seluruh tim yang telah bekerja keras dalam pembangunan website ini, serta kepada semua pihak yang telah memberikan dukungan dan doa restu. Semoga website MTS Negeri 2 Pesawaran ini dapat menjadi sarana yang bermanfaat dan memberikan manfaat yang besar bagi kita semua.</p>\r\n', '28042024084839.jpg', 'mamang@gmail.com'),
(2, 'SET', '', 'Alur Pendaftaran', 'https://maps.app.goo.gl/rjx1w8DS9jq8AtFr5', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d63549.98300411826!2d105.00823!3d-5.43611!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjYnMTAuMCJTIDEwNcKwMDAnMjkuNiJF!5e0!3m2!1sid!2sus!4v1721575999169!5m2!1sid!2sus', '<p>Berkas Persyaratan Umum<br />\r\nCalon peserta didik baru MTs Negeri 2 Pesawaran&nbsp;diwajibkan untuk menyiapkan beberapa berkas persyaratan umum sebagai berikut:<br />\r\nScan Upload:</p>\r\n\r\n<ol>\r\n	<li><strong>Pas foto terbaru</strong></li>\r\n	<li><strong>Surat Keterangan Lulus</strong></li>\r\n	<li><strong>Ijazah SD/MI</strong></li>\r\n	<li><strong>Kartu Keluarga</strong></li>\r\n	<li><strong>Akta Kelahiran</strong></li>\r\n	<li><strong>Scan Rapor (Kelas 4 &ndash; 6)</strong></li>\r\n</ol>\r\n\r\n<p><strong>Jalur Pendaftaran</strong></p>\r\n\r\n<p>MTs Negeri 2 Pesawaran menyediakan 4 jalur pendaftaran dengan kuota sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li><strong>Jalur Prestasi Akademik:</strong>&nbsp;22 siswa</li>\r\n	<li><strong>Jalur Prestasi Non Akademik:</strong>&nbsp;22 Siswa</li>\r\n	<li><strong>Jalur Prestasi Tahfizh Al-Qur&rsquo;an:</strong>&nbsp;20 siswa</li>\r\n	<li><strong>Jalur Reguler:</strong>&nbsp;160 siswa</li>\r\n</ul>\r\n\r\n<p><strong>Persyaratan Khusus Jalur Prestasi</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Jalur Prestasi Akademik:</strong>\r\n\r\n	<ul>\r\n		<li>Nilai Rata-rata raport 87 (kelas 4 semester 1 s/d kelas 6 semester 1)</li>\r\n		<li>Sertifikat prestasi akademik (tingkat antar sekolah SD/Sederajat)</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Jalur Prestasi Non Akademik:</strong>\r\n	<ul>\r\n		<li>Nilai rata-rata raport 80 (kelas 4 semester 1 s/d kelas 6 semester 1)</li>\r\n		<li>Sertifikat prestasi Non Akademik (tingkat antar sekolah SD/Sederajat)</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Jalur Tahfizh Al-Qur&rsquo;an:</strong>\r\n	<ul>\r\n		<li>Nilai rata-rata rapor akademik minimal 80 (kelas 4 semester 1 s/d kelas 6 semester 1)</li>\r\n		<li>Menguasai hafalan Al-Quran 2 Juz</li>\r\n		<li>Sertifikat Tahfizh (tingkat antar sekolah SD/Sederajat)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Alur Pendaftaran</strong></p>\r\n\r\n<p>Berikut adalah alur pendaftaran PPDB MTs Negeri 2 Pesawaran Tahun Ajaran 2024/2025:</p>\r\n\r\n<ol>\r\n	<li><strong>Pendaftaran Online:</strong>\r\n\r\n	<ul>\r\n		<li>Buka website&nbsp;<strong><a href=\"https://ppdb.mtsn1lebak.sch.id/\" target=\"_blank\">https://ppdb.mtsn1lebak.sch.id/</a></strong>&nbsp;dan buat akun.</li>\r\n		<li>Pastikan untuk mengingat NISN dan password akun Anda.</li>\r\n		<li>Lakukan pendaftaran online di periode&nbsp;<strong>22 April &ndash; 3 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Pengisian Data dan Upload Berkas:</strong>\r\n	<ul>\r\n		<li>Lengkapi data diri dan upload berkas yang diperlukan pada akun PPDB Anda di periode&nbsp;<strong>22 April &ndash; 3 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Penyerahan Bukti Pendaftaran:</strong>\r\n	<ul>\r\n		<li>Cetak bukti pendaftaran online secara mandiri.</li>\r\n		<li>Serahkan bukti pendaftaran online ke panitia PPDB MTs Negeri 2 Pesawaran di periode&nbsp;<strong>22 April &ndash; 3 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Tes Jalur Prestasi:</strong>\r\n	<ul>\r\n		<li>Tes untuk Jalur Prestasi (Wawancara + BTQ) akan dilaksanakan pada&nbsp;<strong>Senin, 6 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Tes Akademik + BTQ (Jalur Reguler):</strong>\r\n	<ul>\r\n		<li>Tes Akademik dan BTQ untuk Jalur Reguler akan dilaksanakan pada&nbsp;<strong>Selasa-Rabu, 7-8 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Pengumuman Hasil Seleksi:</strong>\r\n	<ul>\r\n		<li>Pengumuman hasil seleksi akan dilakukan pada&nbsp;<strong>Rabu, 15 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li><strong>Daftar Ulang:</strong>\r\n\r\n	<ul>\r\n		<li>Bagi peserta didik yang dinyatakan diterima diwajibkan untuk melakukan daftar ulang pada&nbsp;<strong>Senin-Rabu, 20-22 Mei 2024</strong>.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
