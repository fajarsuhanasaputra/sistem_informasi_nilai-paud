-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2022 at 02:04 PM
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
(1, 1, NULL, NULL, NULL, NULL, NULL, 'rfhQsrxmKVRd-05:19:09.png', NULL, NULL, NULL, '2022-09-06 21:28:24', '2022-09-06 22:19:44'),
(2, 2, 2000121271, NULL, 'Bandung', '1989-03-23', 'p', '7JojEhaM4Nwf-05:19:09.png', 'islam', 'A', 'Antapani', '2022-09-06 22:04:44', '2022-09-06 22:19:21'),
(3, 3, NULL, 12054912, 'Bandung', '2018-12-12', 'l', 'h352nH8zxKaR-05:18:09.jpg', 'islam', 'A', 'Antapani', '2022-09-06 22:18:52', '2022-09-06 22:18:52'),
(4, 4, NULL, 12054913, 'Bandung', '2018-02-20', 'p', 'GF3co0OHdLcb-05:21:09.png', 'islam', 'A', 'Antapani', '2022-09-06 22:21:09', '2022-09-06 22:21:09'),
(5, 5, NULL, 12054999, 'Jakarta', '2018-12-01', 'l', 'e0uE6qOZmu8o-05:24:09.jpg', 'islam', 'B', 'Antapani', '2022-09-06 22:24:33', '2022-09-06 22:24:33'),
(6, 6, 20128121, NULL, 'Majalengka', '2018-01-12', 'p', 'PwbLVolx2rfq-05:25:09.png', 'islam', 'B', 'Buahbatu', '2022-09-06 22:25:59', '2022-09-06 22:25:59');

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
(1, 'Administrator', 'admin', '$2y$10$Rn9HAqG0hY.1wPgZYJhzDeqA.9bKlci0wTDdA4kRrBSzhKKjhJPye', 'admin', '2022-09-06 21:28:24', '2022-09-06 21:28:24'),
(2, 'Indriani', 'guru01', '$2y$10$azAAWSYNaYuIvNDVdrha5umpo3gzP7Qb2PpZyjBHncW29KFtC3MCO', 'guru', '2022-09-06 22:04:44', '2022-09-06 22:22:42'),
(3, 'Malik Udin', 'user01', '$2y$10$WQgLOJUiKe/9oPx.Z1ogf.mjZ5Unp2cyDI2Wm.3V3HRVOgwm4dxHm', 'siswa', '2022-09-06 22:18:52', '2022-09-06 22:18:52'),
(4, 'Santi Siswanti', 'user02', '$2y$10$P6xhb0zEy2SsiUk09HrC5ulxCCLQ28cg8rpMpHI2hxPuaauEKOpmK', 'siswa', '2022-09-06 22:21:09', '2022-09-06 22:21:09'),
(5, 'Robi Rahmat', 'user03', '$2y$10$sn9rLtyTFdjEhObA48v70e7ITV2rEYU6MaIp5u1n.ZXWD5su4Am6u', 'siswa', '2022-09-06 22:24:33', '2022-09-06 22:24:33'),
(6, 'Melati Sari', 'guru02', '$2y$10$YtfZLz.hif9.8TDi5.myAOJAhge14GWMpsBB6x9CepjzLm2kuaJ2e', 'guru', '2022-09-06 22:25:59', '2022-09-06 22:25:59');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poin_aspek`
--
ALTER TABLE `poin_aspek`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
