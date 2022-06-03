-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jun 2022 pada 12.48
-- Versi server: 5.7.38
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egakuspa_egaku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_history`
--

CREATE TABLE `download_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `download_history`
--

INSERT INTO `download_history` (`id`, `id_image`, `id_user`, `created_at`, `updated_at`) VALUES
(15, 11, 3, '2022-05-15 06:42:30', '2022-05-15 06:42:30'),
(16, 11, 3, '2022-05-15 06:42:47', '2022-05-15 06:42:47'),
(17, 20, 2, '2022-05-16 00:10:06', '2022-05-16 00:10:06'),
(18, 20, 2, '2022-05-16 00:10:08', '2022-05-16 00:10:08'),
(19, 19, 2, '2022-05-16 00:10:12', '2022-05-16 00:10:12'),
(20, 19, 2, '2022-05-16 00:10:13', '2022-05-16 00:10:13'),
(21, 18, 2, '2022-05-16 00:10:17', '2022-05-16 00:10:17'),
(22, 18, 2, '2022-05-16 00:10:18', '2022-05-16 00:10:18'),
(23, 17, 2, '2022-05-16 00:10:23', '2022-05-16 00:10:23'),
(24, 17, 2, '2022-05-16 00:10:24', '2022-05-16 00:10:24'),
(25, 19, 3, '2022-05-16 00:12:19', '2022-05-16 00:12:19'),
(26, 19, 3, '2022-05-16 00:12:20', '2022-05-16 00:12:20'),
(27, 20, 3, '2022-05-16 00:12:25', '2022-05-16 00:12:25'),
(28, 20, 3, '2022-05-16 00:12:26', '2022-05-16 00:12:26'),
(29, 17, 3, '2022-05-16 00:12:34', '2022-05-16 00:12:34'),
(30, 17, 3, '2022-05-16 00:12:34', '2022-05-16 00:12:34'),
(31, 18, 3, '2022-05-16 00:12:51', '2022-05-16 00:12:51'),
(32, 18, 3, '2022-05-16 00:12:51', '2022-05-16 00:12:51'),
(33, 16, 3, '2022-05-16 00:13:20', '2022-05-16 00:13:20'),
(34, 16, 3, '2022-05-16 00:13:21', '2022-05-16 00:13:21'),
(35, 16, 3, '2022-05-16 00:13:21', '2022-05-16 00:13:21'),
(36, 16, 3, '2022-05-16 00:15:25', '2022-05-16 00:15:25'),
(37, 21, 3, '2022-05-16 00:15:30', '2022-05-16 00:15:30'),
(38, 21, 3, '2022-05-16 00:15:30', '2022-05-16 00:15:30'),
(39, 21, 3, '2022-05-16 00:15:30', '2022-05-16 00:15:30'),
(40, 21, 3, '2022-05-16 00:15:31', '2022-05-16 00:15:31'),
(41, 21, 3, '2022-05-16 00:15:31', '2022-05-16 00:15:31'),
(42, 21, 3, '2022-05-16 00:15:31', '2022-05-16 00:15:31'),
(43, 21, 3, '2022-05-16 00:15:32', '2022-05-16 00:15:32'),
(44, 21, 3, '2022-05-16 00:15:33', '2022-05-16 00:15:33'),
(45, 17, 7, '2022-05-31 04:42:42', '2022-05-31 04:42:42'),
(46, 27, 8, '2022-05-31 16:37:04', '2022-05-31 16:37:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_15_083901_create_shares_table', 2),
(6, '2022_05_11_140708_create_download_history_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_of_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_of_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shares`
--

INSERT INTO `shares` (`id`, `file`, `Name`, `Description`, `Category`, `Name_of_user`, `Email_of_user`, `created_at`, `updated_at`) VALUES
(11, '1652366736776-05052022_3.jpg', 'wireframe #002', 'WIP from 3d character', 'Design', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-12 07:45:36', '2022-05-12 07:45:36'),
(16, '1652618981781-logo_white.png', 'Egaku', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Design', 'Egaku', 'admin@egaku.space', '2022-05-15 05:49:41', '2022-05-16 00:13:16'),
(17, '1652684050500-post.png', 'Bima', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Art', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-15 23:54:10', '2022-05-15 23:54:10'),
(18, '1652684308783-post.png', 'Captain America', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Art', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-15 23:58:28', '2022-05-15 23:58:28'),
(19, '1652684555712-post2.png', 'Television Classic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Art', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-16 00:02:35', '2022-05-16 00:02:35'),
(20, '1652684989643-post3.png', 'City', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Art', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-16 00:09:49', '2022-05-16 00:09:49'),
(21, '1652685316172-logo.png', 'egaku logo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Design', 'Egaku', 'admin@egaku.space', '2022-05-16 00:15:16', '2022-05-16 00:15:16'),
(22, '1652687504293-radio.png', 'Radio Classic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Art', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-16 00:51:44', '2022-05-16 00:51:44'),
(23, '1652687749186-post5.png', 'Minimalist House', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue a turpis pulvinar porttitor vitae a massa. Ut interdum ullamcorper nibh, elementum efficitur eros egestas eget. Curabitur sit amet tortor ligula. Aliquam interdum posuere ex, non eleifend nisi tincidunt a. Pellentesque dictum velit eu massa lacinia mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Integer molestie nulla dui, ac congue eros elementum eu. Pellentesque accumsan laoreet feugiat. Duis porta, erat at sagittis cursus, purus ex faucibus justo, sit amet lobortis elit purus nec mi.', 'Design', 'Galih Trisna', 'galihtrisna666@gmail.com', '2022-05-16 00:55:49', '2022-05-16 00:55:49'),
(27, '1654014988467-WhatsApp-Image-2022-05-30-at-15.06.20.jpeg', 'Homosapien', 'MANUSIA INI SANGAT LANGKA', 'Animals', 'Muhamad Rafli', 'alfa11riski@gmail.com', '2022-05-31 16:36:28', '2022-05-31 16:36:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Galih Trisna', 'galihtrisna666@gmail.com', NULL, '$2y$10$98TRurYQ1mzsqJYJ3EOfn.13ZhzYAt.ZdZqrxeySqcvYvo8jOgJQ6', NULL, '2022-04-04 22:31:57', '2022-04-04 22:31:57'),
(3, 'Egaku', 'admin@egaku.space', NULL, '$2y$10$OV2irEZF3xXzJPH5kXenFe.cv1nbLIrpv0qkpeLTKdHlOI4qcdkXy', NULL, '2022-04-17 00:40:10', '2022-04-17 00:40:10'),
(4, 'Anjime', 'a@gmail.com', NULL, '$2y$10$NjstFz7QUmZZe6nQ/uq5A.EpP1PKq8m1LNAU/3FpS1J6hgktISnqq', NULL, '2022-04-19 21:16:30', '2022-04-19 21:16:30'),
(5, 'abi', 'manyu5560@gmail.com', NULL, '$2y$10$OKqHNp72ehh4sdk9KByj2ebtUZSKO5a3w6C0RRJPqBiXCPFYEDsoO', NULL, '2022-05-16 13:06:44', '2022-05-16 13:06:44'),
(6, 'Bagas', 'bagasx160@gmail.com', NULL, '$2y$10$0Viqal1Zseomkmakq21q.Oh5ECTQ8mi.wYZcoJ/Teb0Pe04MCgodK', NULL, '2022-05-17 05:36:39', '2022-05-17 05:36:39'),
(7, 'upin', 'upin@gmail.com', NULL, '$2y$10$3w386Lj5H4C8K/0a9t2H8Oq5jZxXlAwOu1BhV.wLwjjRHoHhPdkD2', NULL, '2022-05-31 04:34:47', '2022-05-31 04:34:47'),
(8, 'Muhamad Rafli', 'alfa11riski@gmail.com', NULL, '$2y$10$mEY9t531yWEZ26Tol6tAauMrqOPSXFRRGs8P.YjIynwojp6Y.x7fG', NULL, '2022-05-31 16:30:38', '2022-05-31 16:30:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `download_history`
--
ALTER TABLE `download_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `download_history`
--
ALTER TABLE `download_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
