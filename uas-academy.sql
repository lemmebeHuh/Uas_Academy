-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2024 pada 07.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-academy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bols`
--

CREATE TABLE `bols` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `kodeDsn` bigint(20) UNSIGNED NOT NULL,
  `namaDsn` varchar(255) NOT NULL,
  `NIDN` varchar(255) NOT NULL,
  `emailDsn` varchar(255) NOT NULL,
  `teleponDsn` varchar(255) NOT NULL,
  `fotoDsn` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kodeDsn`, `namaDsn`, `NIDN`, `emailDsn`, `teleponDsn`, `fotoDsn`, `created_at`, `updated_at`) VALUES
(891, 'Jia Edman', '100112', 'maned@gmail.com', '08898776536', 'C:\\xampp\\tmp\\php388D.tmp', '2024-03-30 23:52:27', '2024-03-30 23:52:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nimMhs` varchar(255) DEFAULT NULL,
  `namaMhs` varchar(255) NOT NULL,
  `kotaLahirMhs` varchar(255) NOT NULL,
  `tanggalLahirMhs` date NOT NULL,
  `genderMhs` varchar(255) NOT NULL,
  `emailMhs` varchar(255) NOT NULL,
  `teleponMhs` varchar(255) NOT NULL,
  `fakultasMhs` varchar(255) NOT NULL,
  `jurusanMhs` varchar(255) NOT NULL,
  `semesterMhs` varchar(255) NOT NULL,
  `alamatMhs` text NOT NULL,
  `kelasMhs` varchar(255) NOT NULL,
  `fotoMhs` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nimMhs`, `namaMhs`, `kotaLahirMhs`, `tanggalLahirMhs`, `genderMhs`, `emailMhs`, `teleponMhs`, `fakultasMhs`, `jurusanMhs`, `semesterMhs`, `alamatMhs`, `kelasMhs`, `fotoMhs`, `created_at`, `updated_at`) VALUES
(322201, '', 'Sanya Kala Arsi', 'Bandung', '2003-12-19', 'Pria', 'Ziji@gmail.com', '08989898776', 'Seni Rupa dan Desain', 'Seni Murni', '1', 'Jl. Inaja No.1', 'Reguler', 'Sanya Kala Arsi.png', NULL, '2024-03-30 21:52:30'),
(322202, NULL, 'Karin Funnesya', 'Bandung', '2001-01-01', 'Wanita', 'fnsya@gmail.com', '0897659000', 'Seni Rupa dan Design', 'Seni Murni', '2', 'Jl. Sana No.3', 'VIP', 'Karin Funnesya.png', '2024-03-30 21:56:19', '2024-03-30 21:56:19'),
(322203, NULL, 'Sang Kala Aji', 'Bandung', '2002-02-02', 'Pria', 'sang@gmail.com', '0989876542', 'Ilmu Komputer', 'Sistem Informasi', '2', 'Jl. Haheho No.2', 'VIP', 'Sang Kala Aji.png', '2024-03-30 22:00:13', '2024-03-30 22:00:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaMk` varchar(255) NOT NULL,
  `namaDsn` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `namaMk`, `namaDsn`, `created_at`, `updated_at`) VALUES
(456, 'Algorithm', 'Yunan', '2024-04-29 22:45:05', '2024-04-29 22:46:43'),
(981, 'Matematika', 'Jia Edman', '2024-03-31 03:51:28', '2024-04-29 22:46:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, 'create_mahasiswa_table', 1),
(3, '2024_03_31_063047_create_dosen_table', 2),
(4, '2024_03_31_063628_create_matakuliah_table', 3),
(5, '2024_03_31_063827_create_nilai_table', 4),
(6, '2024_04_03_024244_create_bols_table', 5),
(7, '2024_04_28_233603_create_users_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nimMhs` int(11) NOT NULL,
  `nilaiMhs` int(11) NOT NULL,
  `kodeMk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('operator','dosen','mahasiswa') NOT NULL DEFAULT 'operator',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Smuth Operator', 'operator@gmail.com', NULL, '$2y$12$QQ0rtfkaEWpknhigH8YOJOWbfbmD3ElvvFd/E3vOtRFRDSQZ8CthO', 'operator', NULL, '2024-04-28 16:49:08', '2024-04-28 16:49:08'),
(2, 'Sang Kala Aji', 'aji@gmail.com', NULL, '$2y$12$N75bif1RhCe92t/aNR03qOWIN77zKsN1KhSM5ThxlCz9nB8wXJF5i', 'mahasiswa', NULL, '2024-04-28 16:49:08', '2024-04-28 16:49:08'),
(3, 'Jayani jaya', 'jayani@gmail.com', NULL, '$2y$12$4sN7KQ2mmnHrW68ccjw5JuDXh8Gc/rsgkUy1KvAdTLELiZ8sSjR4C', 'mahasiswa', NULL, '2024-04-28 16:49:08', '2024-04-28 16:49:08'),
(4, 'Dayat Santana', 'dayat@gmail.com', NULL, '$2y$12$7sC9MJGoZwmJd8R12xENM.imTi2BvdkGAUubXKFh/Wl9L7zH6utza', 'dosen', NULL, '2024-04-28 19:24:25', '2024-04-28 19:24:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kodeDsn`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `kodeDsn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=892;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322205;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
