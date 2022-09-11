-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2022 at 11:00 AM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspek`
--

CREATE TABLE `aspek` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_aspek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aspek`
--

INSERT INTO `aspek` (`id`, `nama_aspek`, `kode`, `created_at`, `updated_at`) VALUES
(7, 'Moral dan Nilai-nilai Agama', 'AP1', '2022-09-08 23:37:42', '2022-09-08 23:37:42'),
(8, 'Fisik', 'AP2', '2022-09-08 23:38:03', '2022-09-08 23:38:03'),
(9, 'Bahasa', 'AP3', '2022-09-08 23:38:12', '2022-09-08 23:38:12'),
(10, 'Kognitif', 'AP4', '2022-09-08 23:38:25', '2022-09-08 23:38:25'),
(11, 'Sosial/Emosional', 'AP5', '2022-09-08 23:38:44', '2022-09-08 23:38:44'),
(12, 'Seni', 'AP6', '2022-09-08 23:38:53', '2022-09-08 23:38:53'),
(13, 'Muatan Lokal', 'AP7', '2022-09-08 23:39:08', '2022-09-08 23:39:08'),
(15, 'Motorik', 'AP8', '2022-09-09 20:36:58', '2022-09-09 20:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nip` bigint DEFAULT NULL,
  `nisn` bigint DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('p','l') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `user_id`, `nip`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `poto`, `agama`, `kelas`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Majalengka', '2001-07-12', 'l', 'hmNCryrnd5nW-03:33:09.jpg', 'islam', NULL, 'Kebonjayanti, Kiaracondong, Kota Bandung', '2022-09-06 14:28:24', '2022-09-09 20:33:21'),
(2, 2, 2000121271, NULL, 'Bandung', '1998-03-23', 'p', 'Izhd4ueuImgp-03:45:09.jpg', 'islam', 'A', 'Antapani', '2022-09-06 15:04:44', '2022-09-09 20:45:36'),
(3, 3, NULL, 12054912, 'Bandung', '2018-12-12', 'l', 'wPecquD9bLLV-03:48:09.jpg', 'islam', 'A', 'Antapani', '2022-09-06 15:18:52', '2022-09-09 20:48:20'),
(4, 4, NULL, 12054913, 'Bandung', '2018-02-20', 'p', 'GF3co0OHdLcb-05:21:09.png', 'islam', 'A', 'Antapani', '2022-09-06 15:21:09', '2022-09-06 15:21:09'),
(5, 5, NULL, 12054999, 'Jakarta', '2018-12-01', 'l', 'e0uE6qOZmu8o-05:24:09.jpg', 'islam', 'B', 'Antapani', '2022-09-06 15:24:33', '2022-09-06 15:24:33'),
(6, 6, 20128121, NULL, 'Majalengka', '2018-01-12', 'p', 'PwbLVolx2rfq-05:25:09.png', 'islam', 'B', 'Buahbatu', '2022-09-06 15:25:59', '2022-09-06 15:25:59'),
(7, 7, 20012121839, NULL, 'Banten', '1965-08-01', 'p', 'Z0EU7x43fRuA-06:34:09.png', 'islam', 'B', 'Antapani', '2022-09-08 23:34:43', '2022-09-08 23:35:01'),
(8, 8, 1942544, NULL, 'Ciamis', '2001-12-02', 'p', '8LqDbYALW1Kv-03:32:09.jpg', 'islam', 'A', 'Jl. Jakarta', '2022-09-09 20:32:04', '2022-09-09 20:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_05_024146_create_users_table', 1),
(3, '2022_09_05_024325_create_biodata_table', 1),
(4, '2022_09_06_024341_create_aspek_table', 1),
(5, '2022_09_06_024440_create_poin_aspek_table', 1),
(6, '2022_09_07_014837_create_nilai_siswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `poin_id` bigint UNSIGNED NOT NULL,
  `semester` int NOT NULL,
  `awal_ajaran` int NOT NULL,
  `akhir_ajaran` int NOT NULL,
  `nilai` enum('selalu','kadang','jarang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `user_id`, `poin_id`, `semester`, `awal_ajaran`, `akhir_ajaran`, `nilai`, `created_at`, `updated_at`) VALUES
(10, 3, 4, 1, 2022, 2023, 'selalu', '2022-09-09 20:54:34', '2022-09-09 20:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poin_aspek`
--

CREATE TABLE `poin_aspek` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_poin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poin_aspek`
--

INSERT INTO `poin_aspek` (`id`, `nama_poin`, `aspek_id`, `created_at`, `updated_at`) VALUES
(4, 'Mengikuti nyanyian lagu keagamaan', 7, '2022-09-08 23:40:23', '2022-09-08 23:40:23'),
(5, 'Mengikuti bacaan do\'a sebelum melakukan kegiatan', 7, '2022-09-08 23:40:55', '2022-09-08 23:40:55'),
(6, 'Menirukan sikap berdo\'a', 7, '2022-09-08 23:41:10', '2022-09-08 23:41:10'),
(7, 'Menirukan gerakan ibadah dengan tertib', 7, '2022-09-08 23:41:36', '2022-09-08 23:41:36'),
(8, 'Menyebutkan contoh ciptaan tuhan secara sederhana', 7, '2022-09-08 23:43:28', '2022-09-08 23:43:28'),
(9, 'Menyanyi di depan orang, teman, dan guru', 7, '2022-09-08 23:43:58', '2022-09-08 23:43:58'),
(10, 'Menyebut nama tuhan/Allah', 7, '2022-09-08 23:44:16', '2022-09-08 23:44:16'),
(11, 'Menunjukan rasa kasih sayang kepada teman', 7, '2022-09-08 23:44:37', '2022-09-08 23:44:37'),
(12, 'Mengucapkan terimakasih setelah menerima sesuatu', 7, '2022-09-08 23:44:54', '2022-09-08 23:44:54'),
(13, 'Mengucapkan salam', 7, '2022-09-08 23:45:58', '2022-09-08 23:45:58'),
(14, 'Mengucapkan kata-kata maaf /santun', 7, '2022-09-08 23:46:18', '2022-09-08 23:46:18'),
(15, 'Menghargai teman, tidak memaksakan kehendak', 7, '2022-09-08 23:46:52', '2022-09-08 23:46:52'),
(16, 'Menirukan kegiatan orang dewasa', 7, '2022-09-08 23:47:16', '2022-09-08 23:47:16'),
(17, 'Berjalan dengan stabil(seimbang)', 8, '2022-09-08 23:47:43', '2022-09-08 23:47:43'),
(18, 'Naik turun tangga tanpa berpegangan', 8, '2022-09-08 23:48:07', '2022-09-08 23:48:07'),
(19, 'Memanjat dan bergelantungan/berayun', 8, '2022-09-08 23:48:32', '2022-09-08 23:48:32'),
(20, 'Berjalan di titian dengan jarak 20 cm', 8, '2022-09-08 23:48:55', '2022-09-08 23:48:55'),
(21, 'Berlari dengan stabil atau berlari di tempat', 8, '2022-09-08 23:49:34', '2022-09-08 23:49:34'),
(22, 'Senam menirukan gerakan binatang', 8, '2022-09-08 23:49:52', '2022-09-08 23:49:52'),
(23, 'Menendang, menangkao, dan melempar bola', 8, '2022-09-08 23:50:10', '2022-09-08 23:50:10'),
(24, 'Melompat dengan satu kaki bergantian', 8, '2022-09-08 23:50:21', '2022-09-08 23:50:21'),
(25, 'Merayap dan merangkak lurus kedepan', 8, '2022-09-08 23:50:33', '2022-09-08 23:50:33'),
(26, 'Berjingkat', 8, '2022-09-08 23:50:50', '2022-09-08 23:50:50'),
(27, 'Membedakan 5 jenis permukaan benda melalui rabaan', 8, '2022-09-08 23:51:15', '2022-09-08 23:51:15'),
(28, 'Menuang(air, biji bijian) tanpa tumpah', 8, '2022-09-08 23:51:33', '2022-09-08 23:51:33'),
(29, 'Memegang benda kecil dengan telunjuk dan ibu jari', 8, '2022-09-08 23:51:56', '2022-09-08 23:51:56'),
(30, 'Menggunting sembarangan(3-4) th', 8, '2022-09-08 23:52:28', '2022-09-08 23:52:28'),
(31, 'Menggunting zig-zag (4-5)th', 8, '2022-09-08 23:52:54', '2022-09-08 23:53:13'),
(32, 'Membuat gari lurus, vertikal, dan melengkung', 8, '2022-09-08 23:53:39', '2022-09-08 23:53:39'),
(33, 'Melipat kertas', 8, '2022-09-08 23:54:10', '2022-09-08 23:54:10'),
(34, 'Menirukan suara binatang', 9, '2022-09-08 23:54:25', '2022-09-08 23:54:25'),
(35, 'Menyatakan 4-5 kata (3-4 th)/6-10 kata(4-5 th)', 9, '2022-09-08 23:54:43', '2022-09-08 23:55:14'),
(36, 'Mengerti dan melaksakan 2-3 perintah', 9, '2022-09-08 23:55:30', '2022-09-08 23:55:38'),
(37, 'Mengajukan pertanyaan', 9, '2022-09-08 23:55:50', '2022-09-08 23:55:50'),
(38, 'Menyebutkan nama benda dan fungsinya', 9, '2022-09-08 23:56:02', '2022-09-08 23:56:02'),
(39, 'Minta dibacakan buku', 9, '2022-09-08 23:56:18', '2022-09-08 23:56:18'),
(40, 'Bercerita pengalaman pada guru/teman', 9, '2022-09-08 23:56:33', '2022-09-08 23:56:33'),
(41, 'Mengelompokan benda', 10, '2022-09-08 23:56:44', '2022-09-08 23:56:44'),
(42, 'Meneyebutkan 4 bentuk (3-4 th) / 7 bentuk(4-5 th) geometri', 10, '2022-09-08 23:57:25', '2022-09-08 23:57:25'),
(43, 'Membedakan besar-kecil, panjang-pendek, berat-ringan', 10, '2022-09-08 23:58:11', '2022-09-08 23:58:11'),
(44, 'Membedakan rasa', 10, '2022-09-08 23:58:25', '2022-09-08 23:58:25'),
(45, 'Membedakan bau', 10, '2022-09-08 23:58:35', '2022-09-08 23:58:35'),
(46, 'Menyebutkan bilangan 1-10 tanpa konsep', 10, '2022-09-08 23:58:50', '2022-09-08 23:58:50'),
(47, 'Mengelompokan dan menyebutkan 5 warna', 10, '2022-09-08 23:59:03', '2022-09-08 23:59:03'),
(48, 'Mengenal etiket makan dan jadwal makan teratur', 11, '2022-09-08 23:59:36', '2022-09-08 23:59:36'),
(49, 'Dalam kegiatan KBM dalam sehari-hari dikelas', 11, '2022-09-09 00:00:01', '2022-09-09 00:00:01'),
(50, 'Dalam menggunakan toilet(WC)', 11, '2022-09-09 00:00:16', '2022-09-09 00:00:16'),
(51, 'Berankat ke tempat belajar', 11, '2022-09-09 00:00:30', '2022-09-09 00:00:30'),
(52, 'Memilih kegiatan sendiri', 11, '2022-09-09 00:00:40', '2022-09-09 00:00:40'),
(53, 'Mengemabalikan benda pada tempat semula', 11, '2022-09-09 00:00:51', '2022-09-09 00:00:51'),
(54, 'Menjadi pendemgar/pembicara yang baik', 11, '2022-09-09 00:01:05', '2022-09-09 00:01:05'),
(55, 'Sabar menunggu giliran/terbiasa antre', 11, '2022-09-09 00:01:25', '2022-09-09 00:01:25'),
(56, 'Jika melakukan kesalahan(menyakiti teman, dll)', 11, '2022-09-09 00:02:14', '2022-09-09 00:02:14'),
(57, 'Jika teman terjatuh, kehilangan barang, dll', 11, '2022-09-09 00:02:34', '2022-09-09 00:02:34'),
(58, 'Jika dalam pengerjaan tugas mendapat kesulitan', 11, '2022-09-09 00:03:06', '2022-09-09 00:03:06'),
(59, 'Menggerkan tangan ketika mendengar musik', 12, '2022-09-09 00:03:28', '2022-09-09 00:03:28'),
(60, 'Menyanyikan bagian lagu sesuai irama', 12, '2022-09-09 00:03:46', '2022-09-09 00:03:46'),
(61, 'Bertepuk tangan membentuk irama', 12, '2022-09-09 00:03:58', '2022-09-09 00:03:58'),
(62, 'Melukis dengan jari', 12, '2022-09-09 00:04:10', '2022-09-09 00:04:10'),
(63, 'Membuat bunyi-bunyian dengan berbagai alat', 12, '2022-09-09 00:04:30', '2022-09-09 00:04:30'),
(64, 'IQRO', 13, '2022-09-09 00:05:06', '2022-09-09 00:05:06'),
(65, 'Seni tari/lukis/suara *)', 13, '2022-09-09 00:05:49', '2022-09-09 00:05:49'),
(66, 'Bahasa inggris/sunda/indonesia*)', 13, '2022-09-09 00:06:15', '2022-09-09 00:06:15'),
(68, 'Anak bisa loncat dengan 1 kaki', 15, '2022-09-09 20:38:38', '2022-09-09 20:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','guru','siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rahman Nurhidayat', 'admin', '$2y$10$Rn9HAqG0hY.1wPgZYJhzDeqA.9bKlci0wTDdA4kRrBSzhKKjhJPye', 'admin', '2022-09-06 14:28:24', '2022-09-08 23:36:01'),
(2, 'Indriani', 'guru01', '$2y$10$azAAWSYNaYuIvNDVdrha5umpo3gzP7Qb2PpZyjBHncW29KFtC3MCO', 'guru', '2022-09-06 15:04:44', '2022-09-06 15:22:42'),
(3, 'Malik Udin', 'user01', '$2y$10$WQgLOJUiKe/9oPx.Z1ogf.mjZ5Unp2cyDI2Wm.3V3HRVOgwm4dxHm', 'siswa', '2022-09-06 15:18:52', '2022-09-06 15:18:52'),
(4, 'Santi Siswanti', 'user02', '$2y$10$P6xhb0zEy2SsiUk09HrC5ulxCCLQ28cg8rpMpHI2hxPuaauEKOpmK', 'siswa', '2022-09-06 15:21:09', '2022-09-06 15:21:09'),
(5, 'Robi Rahmat', 'user03', '$2y$10$sn9rLtyTFdjEhObA48v70e7ITV2rEYU6MaIp5u1n.ZXWD5su4Am6u', 'siswa', '2022-09-06 15:24:33', '2022-09-06 15:24:33'),
(6, 'Melati Sari', 'guru02', '$2y$10$YtfZLz.hif9.8TDi5.myAOJAhge14GWMpsBB6x9CepjzLm2kuaJ2e', 'guru', '2022-09-06 15:25:59', '2022-09-06 15:25:59'),
(7, 'Hevni', 'guru03', '$2y$10$ze.BQzUmN2s0Bup2iucgZOJwQ6mHSR4J.tIm7PDcKl4ePDZ4WPe2O', 'guru', '2022-09-08 23:34:43', '2022-09-08 23:34:43'),
(8, 'Sela Julianti', 'guru04', '$2y$10$hnwEsmqzzDg2ory.4iZUVuueAxF0ICgs1FikmPE7L/4bgoXzEG3Nq', 'guru', '2022-09-09 20:32:04', '2022-09-09 20:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aspek_kode_unique` (`kode`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biodata_nip_unique` (`nip`),
  ADD UNIQUE KEY `biodata_nisn_unique` (`nisn`),
  ADD KEY `biodata_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_siswa_user_id_index` (`user_id`),
  ADD KEY `nilai_siswa_poin_id_index` (`poin_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poin_aspek`
--
ALTER TABLE `poin_aspek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poin_aspek_aspek_id_index` (`aspek_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poin_aspek`
--
ALTER TABLE `poin_aspek`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_poin_id_foreign` FOREIGN KEY (`poin_id`) REFERENCES `poin_aspek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_siswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poin_aspek`
--
ALTER TABLE `poin_aspek`
  ADD CONSTRAINT `poin_aspek_aspek_id_foreign` FOREIGN KEY (`aspek_id`) REFERENCES `aspek` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
