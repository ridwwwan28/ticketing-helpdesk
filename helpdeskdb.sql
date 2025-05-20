-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 12:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdeskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complain_types`
--

CREATE TABLE `complain_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_komplain` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain_types`
--

INSERT INTO `complain_types` (`id`, `tipe_komplain`, `created_at`, `updated_at`) VALUES
(1, 'Perangkat Keras (Hardware)', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(2, 'Jaringan & Internet', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(3, 'Aplikasi / Software', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(4, 'Akun & Akses', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(5, 'Email & Komunikasi', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(6, 'Permintaan Umum', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(7, 'HRIS / Talenta', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(8, 'Printer Label / Barcode', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(9, 'Keamanan & Akses', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(10, 'Lain-lain', '2025-05-20 10:21:03', '2025-05-20 10:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_16_061944_create_tickets_table', 1),
(5, '2025_01_22_034628_create_complain_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gdzCvg7sPiazOfqHUCmoB9q1oErGssmLqp9tVyU5', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRFpOUVV1aWFJZVI2TmJjUkpKSG9RVzFidVR0RHYwRmQxRzBlYnhYMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2hlbHBkZXNrLnRlc3Q6ODA4MC90aWNrZXQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovL2hlbHBkZXNrLnRlc3Q6ODA4MC90aWNrZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1747737663),
('IatommuzKQIRt7wFsvYyFWQXqHvpvRJhdj2Gj0wD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3VqTm1zclNEZ1EzejdteVIyVFRMRWhaYkRaM25lQ01oZzI2T1RhbiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2hlbHBkZXNrLnRlc3Q6ODA4MC90aWNrZXQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNToiaHR0cDovL2hlbHBkZXNrLnRlc3Q6ODA4MCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747736804);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_tiket` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tipe_komplain` varchar(100) DEFAULT NULL,
  `kendala` text NOT NULL,
  `prioritas` int(11) DEFAULT NULL,
  `detail_penyelesaian` text DEFAULT NULL,
  `tgl_buat` datetime DEFAULT NULL,
  `tgl_estimasi` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `ticket_status` varchar(10) NOT NULL DEFAULT 'OPEN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `no_tiket`, `username`, `tipe_komplain`, `kendala`, `prioritas`, `detail_penyelesaian`, `tgl_buat`, `tgl_estimasi`, `tgl_selesai`, `ticket_status`, `created_at`, `updated_at`) VALUES
(1, 'DP-2025050001', 'usertest@danpacpharma.com', '2', 'Internet ga bisa', 1, NULL, '2025-05-20 17:33:12', NULL, NULL, 'IN PROCESS', '2025-05-20 10:33:12', '2025-05-20 10:40:17'),
(2, 'DP-2025050002', 'prabu@danpacpharma.com', '1', 'printer rusak', 1, NULL, '2025-05-20 17:33:50', NULL, NULL, 'IN PROCESS', '2025-05-20 10:33:50', '2025-05-20 10:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `group` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `role` enum('superadmin','admin','user') NOT NULL,
  `status` int(11) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `divisi`, `group`, `level`, `role`, `status`, `profile_pic`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ridwan', 'ridwan@danpacpharma.com', '$2y$12$VptwW9ankVnsjq6fsIt/U.KAhCKz1pYxSZd09G3LMGl0tkuyg9n5W', 'IT', 'DP', 99, 'superadmin', 1, 'x5owg7GGP5', '2025-05-20 10:25:53', 'dzA5IUs5O1', '2025-05-20 10:25:53', '2025-05-20 10:25:53'),
(2, 'Firmansyah', 'firmanyah@danpacpharma.com', '$2y$12$H8759Wpq7CtiO/G0L3X95uiwUW4TlKYr.yE/zr.RYHlIf9SsSGOpi', 'IT', 'DP', 99, 'superadmin', 1, '5YyJsYMuqf', '2025-05-20 10:25:53', 'fyVAmFTl8G', '2025-05-20 10:25:53', '2025-05-20 10:25:53'),
(3, 'Yoevan Wiraatmaja', 'yoevan@danpacpharma.com', '$2y$12$C5fYYrBdyT/ljMgZALu8H.5r1yhtqEJ8tJjd4lfSs5ygIRi1nLqgq', 'Direksi', 'DP', 1, 'user', 1, 'SLNMFfJKbG', '2025-05-20 10:25:54', 'mzRLVdPNID', '2025-05-20 10:25:54', '2025-05-20 10:25:54'),
(4, 'IT Support', 'itsupport@danpacpharma.com', '$2y$12$czjXuQeVdTFhb9BgwT/gQexqgr9qC1f6vN5ImwJQegcudIaSNQCZa', 'IT', 'DP', 2, 'admin', 1, 'vbghFn9cI1', '2025-05-20 10:25:54', 'MBW65xejkK', '2025-05-20 10:25:54', '2025-05-20 10:25:54'),
(5, 'Agiatri Farizki', 'aat@danpacpharma.com', '$2y$12$IKGP/wwUiUAYpvmV00Hbd.4/uFEM8O4HuYX6c8nUEeiBxYjHlSyoe', 'Desain Grafis', 'DP', 3, 'user', 1, 'TgbE1oLnUO', '2025-05-20 10:25:54', '4jZQl2nJHn', '2025-05-20 10:25:54', '2025-05-20 10:25:54'),
(6, 'M. Prabu Reza', 'prabu@danpacpharma.com', '$2y$12$vx7OKkBiqtPljT4c9hQjpekDTc1zCyuhIWhjfcqiCzySevG37LOdm', 'Desain Grafis', 'RTP', 3, 'user', 1, 'ScSUJnyD8a', '2025-05-20 10:25:54', '8Z4hCMhJ4b4StouYMhUmi7aPdLWmEBEeVXPKAj3ezM9FydESZ9p3pqeKLTQK', '2025-05-20 10:25:54', '2025-05-20 10:25:54'),
(7, 'Jamallulail', 'jamal@danpacpharma.com', '$2y$12$KG24qUQxFjYDZcHpzHsX/ezR0wT1TswCtKR1hn.r5v0FJp2B5Ou1C', 'Export Import', 'DP', 3, 'user', 1, '6nl2f4xG6X', '2025-05-20 10:25:55', 'q9iatsDQ6S', '2025-05-20 10:25:55', '2025-05-20 10:25:55'),
(8, 'User Test', 'usertest@danpacpharma.com', '$2y$12$36XdkSg/qyT/9PAprxKdO.LiFIuSgBOqN0RDacz6Eq3OW92hJ8xFC', 'IT', 'DP', 3, 'user', 1, 'uLrawLJapp', '2025-05-20 10:25:55', 'mrFFehBgzVmXkjgMcW2UyGRVWFYJ6EfcJCXPBYWXNqBBtAbUpckPQIliCeNd', '2025-05-20 10:25:55', '2025-05-20 10:25:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complain_types`
--
ALTER TABLE `complain_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_no_tiket_unique` (`no_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain_types`
--
ALTER TABLE `complain_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
