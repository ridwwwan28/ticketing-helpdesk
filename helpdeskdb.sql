-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 02:25 PM
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
(1, 'Hardware', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(2, 'Software', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(3, 'Jaringan (Network)', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(4, 'Email', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(5, 'Akun & Akses', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(6, 'Printer & Peripherals', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(7, 'Maintenance & Perbaikan', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(8, 'Permintaan Baru (Request)', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(9, 'Sistem E-ticketing', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(10, 'HRIS/Talenta', '2025-05-20 10:21:03', '2025-05-20 10:21:03'),
(11, 'Jurnal', '2025-05-28 06:57:20', '2025-05-28 06:57:20'),
(12, 'GL/Invoicing', '2025-05-28 06:57:34', '2025-05-28 06:57:34'),
(13, 'Odoo', '2025-05-28 06:57:44', '2025-05-28 06:57:44'),
(14, 'Accurate', '2025-05-28 06:57:53', '2025-05-28 06:57:53'),
(15, 'E-Faktur', '2025-05-28 06:58:01', '2025-05-28 06:58:01');

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
(5, '2025_01_22_034628_create_complain_types_table', 1),
(6, '2025_05_22_152037_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('oymmZQ15mE0M97IDbUNjFJXD3Gi1BdQWyR4ANYny', 394, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicDlpVEc5Qzl5anhyNEZzVWlUeHZsQmtFeTVaNjlnVXFZeEJ4SHhKNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9oZWxwZGVzay50ZXN0OjgwODAvaG9tZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM5NDt9', 1748434270),
('pf1RiV7jWNoJ5enfLNeu2C4ijKP3gAZpBYGJTj5g', 275, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQjJWS3lDM2VMQXZsOHk5UTY2QkFVZFU2YmJyemFyeVBJcmJ4Ym5IaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9oZWxwZGVzay50ZXN0OjgwODAvdGlja2V0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMDoiaHR0cDovL2hlbHBkZXNrLnRlc3Q6ODA4MC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjc1O30=', 1748433554),
('zWBlZVZyR80BLWDDUNzRIwqBCGVPfiBpQjTNSfN5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWlCTW9raEoxNVpOS0ZLOWZpSzhoUzRkWnRTMjdnMjk1QnRYaXJCQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9oZWxwZGVzay50ZXN0OjgwODAvZm9yZ290LXBhc3N3b3JkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748397506);

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
(15, 'DP-2025050015', 'prabu@danpacmart.co.id', '1', 'asdasdasdad', 3, 'selesai', '2025-05-27 17:36:49', '2025-05-30 17:36:49', '2025-05-27 17:58:21', 'CLOSED', '2025-05-27 10:36:49', '2025-05-27 10:58:21'),
(16, 'DP-2025050016', 'agiat@danpacpharma.com', '3', 'Ilustrator tidak bisa dibuka', 2, NULL, '2025-05-28 10:20:09', '2025-05-30 10:20:09', NULL, 'IN PROCESS', '2025-05-28 03:20:09', '2025-05-28 04:56:47'),
(17, 'DP-2025050017', 'agiat@danpacpharma.com', '1', 'mouse rusak', NULL, NULL, '2025-05-28 13:32:18', NULL, NULL, 'OPEN', '2025-05-28 06:32:18', '2025-05-28 06:32:18'),
(18, 'DP-2025050018', 'agiat@danpacpharma.com', '2', 'asdasdasd', NULL, NULL, '2025-05-28 14:20:12', NULL, NULL, 'OPEN', '2025-05-28 07:20:12', '2025-05-28 07:20:12'),
(19, 'DP-2025050019', 'import@danpacpharma.com', '4', 'tidak bisa kirim email', NULL, NULL, '2025-05-28 14:59:02', NULL, NULL, 'OPEN', '2025-05-28 07:59:02', '2025-05-28 07:59:02'),
(20, 'DP-2025050020', 'prabu@danpacmart.co.id', '1', 'tes', NULL, NULL, '2025-05-28 18:11:08', NULL, NULL, 'OPEN', '2025-05-28 11:11:08', '2025-05-28 11:11:08');

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
(239, 'Dhimas Aditya Pratama', 'dhimas@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'BusDev', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(240, 'Rifka Rizkiyah', 'rifka@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'BusDev', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(241, 'Santi', 'santi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'BusDev', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(242, 'Agiyattri Farizki', 'agiat@danpacpharma.com', '$2y$12$laZ2rtQBITBwKQbYXIEhEO0.ch7BBN51mN/x0jjkyKpy1UBGghi/C', 'Desain Grafis', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-28 03:19:33'),
(243, 'Sylviana', 'sylviana@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Desain Grafis', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(244, 'Viony Ramadinda Herman', 'viony@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Desain Grafis', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(245, 'Lieana Marwati', 'lieana@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Ecommerce', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(246, 'Ani Kurniati', 'ani@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(247, 'Cholid Ridwan', 'cholid@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(248, 'Christine', 'christine@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(249, 'Dewi', 'accounting01@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(250, 'Eliza Handayani', 'eliza@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(251, 'Himiyah Farhati', 'admin.online@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(252, 'Jamalullail', 'import@danpacpharma.com', '$2y$12$uUoEJ9BpGwTDUNTHEZeyN.WDbY1tVOZCxq77ND.67Qb.q.wtl.XFC', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-28 07:58:44'),
(253, 'Monica Alicia', 'monica@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(254, 'Pramudyana Siregar', 'pram@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(255, 'Reka Aulia', 'reka@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(256, 'Robiatul Adawiyah', 'alda@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(257, 'Vera Lisiani Bong', 'lisi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(258, 'Abdul Latif', 'latif@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(259, 'Abdul Rojak', 'rojak@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(260, 'Asep Zaenal Mutaqin', 'asep@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(261, 'Delfrid Kapitan', 'delfrid@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(262, 'Diana', 'mutiara@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(263, 'Ferdy Firdaus', 'ferdy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(264, 'Muhamad Ramdani', 'ramdani@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(265, 'Muhammad Rahmatullah', 'rahmatullah@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(266, 'Ratih Prabawanti', 'ratih@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(267, 'Riyandi', 'riyandi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(268, 'Dea Duva', 'deaduva@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(269, 'Dwi Jayanti', 'dwi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(270, 'Giri Trisaputro', 'giri@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(271, 'Marzsa Hastuti Andriani', 'marzsa@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(272, 'Melvin Wijaya', 'melvin@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(273, 'Suminta Irwan', 'hrd@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'HR', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(274, 'Firmansyah', 'firmansyah@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'IT', 'DANPAC', 99, 'superadmin', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(275, 'Muhammad Ridwan', 'ridwan@danpacpharma.com', '$2y$12$EAttXxvhEJlQmE/vrg35EO416gJZ8qlhWJ43MwMYDX4h9ijR/v.pm', 'IT', 'DANPAC', 99, 'superadmin', 1, '', '0000-00-00 00:00:00', 'szj6L6twf9GRbG617ecvkJc9GJEC07Taw0C0eVLFc4KwMVy77fuHDfffpsRU', '2025-05-22 17:00:00', '2025-05-27 08:20:13'),
(276, 'Wahyu Dwi Prasetyo', 'wahyu@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'IT', 'DANPAC', 99, 'superadmin', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(277, 'Berianto Laia', 'berianto@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(278, 'Irwanto Fina', 'irwanto@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(279, 'Ismael Ringulangu', 'ismael@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(280, 'Lidia Yuni Sihombing', 'lidia@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(281, 'Muhammad Nur Hidayatullah', 'hidayat@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(282, 'Nadiya Azizah Mutmainnah', 'nadiya@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(283, 'Nita Fauzi Arti Rachman', 'nita@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(284, 'Novan Kurniawan', 'novan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(285, 'Ranifasa Tafonao', 'ranifasa@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(286, 'Surianto', 'riyanto@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(287, 'Dewi Mulyani', 'dewi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(288, 'Dini Septiani', 'lilisadmpm@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(289, 'Irnawati', 'irnawati@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(290, 'Marthia Hotma Simanjuntak', 'maya@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(291, 'Maya Ansari', 'claim@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(292, 'Murni', 'admpm@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(293, 'Risna Utari', 'helsy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(294, 'Safira Alifah Fhutri', 'safira@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(295, 'Sherlia Rachma', 'lia@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(296, 'Yulia Dwi Astuty', 'yulia@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'MSP', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(297, 'Nooradya Diponegoro', 'diponegoro@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'NSM', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(298, 'Shally Prithaliani', 'payroll@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Payroll', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(299, 'Alvin', 'alvin@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(300, 'Annisa Hayatunnufus', 'annisa@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(301, 'Cherly Lim', 'cherly_lim@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(302, 'Daisy Ellena Saufika', 'daisy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(303, 'Niko Sepria Faiz', 'niko@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(304, 'Cherry Renee Pranoto', 'renee@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Product', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(305, 'Vince Andriani', 'vince@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Produksi', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(306, 'Abdi Manap (MD)', 'abdi.manap@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(307, 'Abdul Rokhim', 'abdul@danpacpharma.com  ', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(308, 'Adityo Sumantri', 'adityo@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(309, 'Agus Mulyadi', 'agus.mulyadi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(310, 'Ahmad Akim Fannani', 'ahmad.fannani@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(311, 'Ahmad Fauzan', 'fauzan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(312, 'Ali Suhendi', 'ali@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(313, 'Andri Pratama', 'andri.p@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(314, 'Anwar Hidayat', 'anwar@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(315, 'Ardinal', 'ardinal@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(316, 'Aries (MD)', 'aries@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(317, 'Bambang Aswik Purnomo', 'spo.pal@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(318, 'Belita', 'belita@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(319, 'Budi Sujono', 'budi.sujono@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(320, 'Dewi Artika', 'dewi.artika@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(321, 'Diki Hendrawan', 'diki@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(322, 'Emma Setiati (SPO)', 'ema@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(323, 'Erfiq fauzan Zalaza', 'erfiq@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(324, 'Erwindra', 'erwindra@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(325, 'Ferry Kurnianto', 'ferry@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(326, 'Firman Jamil Maricar', 'vijay@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(327, 'Firmansyah', 'firman@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(328, 'Hendy Gusmara', 'hendy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(329, 'Hernawan', 'hernawan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(330, 'I Putu Juli Anggarayana', 'juli@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(331, 'Ida Soleha', 'ida.soleha@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(332, 'Irfan Ariyandi', 'irfan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(333, 'Iskandar Sinuhaji', 'adjie@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(334, 'Istiana (SPO)', 'istiana@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(335, 'K. Mohd. Taufik Hidayat', 'taufik@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(336, 'Koresy', 'koresy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(337, 'Mohamad Fahmi Mubarok', 'fahmi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(338, 'Muchammad Syaifudin', 'afi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(339, 'Muh Ridwan', 'muhridwan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(340, 'Eko Sebastian Alexander', 'eko@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(341, 'Mursad', 'mursad@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(342, 'Niki Lisah', 'niki@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(343, 'Noor Laili', 'spo.sda@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(344, 'Novirman Tianus Hia', 'novirman@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(345, 'Pipit Indrasari Puspito Wati', 'pipit@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(346, 'Riana Surya', 'rian@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(347, 'Rizal Triwahono', 'rizal@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(348, 'Rizky Gunarto', 'rizky@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(349, 'Ropikah (SPO)', 'ropikah@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(350, 'Satriyo Nugroho (SPO)', 'satriyo@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(351, 'Khasan Nurrudin', 'khasan@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(352, 'Siska Indah Sari', 'siska@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(353, 'Siswanto', 'siswanto@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(354, 'Sodikin (SPV)', 'sodikin@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(355, 'Sri Ervina (SPV)', 'vina@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(356, 'Supardi', 'spv.mks@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(357, 'Nur Ainun Fitri Islami', 'nurainun@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(358, 'Syahrul Maulana', 'syahrul@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(359, 'Syamsul Muis', 'syammy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(360, 'Tamsih', 'spo1.jkt1@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(361, 'Titi Yulianti', 'titi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(362, 'Willy', 'willy@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(363, 'Winni Puspita Rahayu', 'winni@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(364, 'Yeheskial Molana', 'yeheskial@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(365, 'Yudi Wahyudi (SPO)', 'spo1.cirebon@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(366, 'Yuni Rahayu (SPO)', 'ayu@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(367, 'Ahmad Toha', 'toha@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(368, 'Zulfaka', 'zulfaka@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Sales', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(369, 'Novi Chandra', 'novi@danpacpharma.com', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Secretary', 'DANPAC', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(370, 'Ade Novrizal', 'ade@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(371, 'Agus Nurrahmat', 'agus@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(372, 'Alvita', 'vita@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(373, 'Andra Supriatna', 'andra@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(374, 'Arie Susanto', 'arie@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(375, 'Arya Nur Indra Prasyah', 'arya@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(376, 'Bonafantura Dout', 'bona@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(377, 'Budi Sujono', 'budi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(378, 'Desiderius Tupen Liat', 'desiderius@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(379, 'Dimas Setyonugroho', 'dimas@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(380, 'Dwi Agus Susanto', 'dwi.agus@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(381, 'Dwi Kurniawan', 'dwi.kurniawan@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(382, 'Esa Firizki Abdillah', 'esa@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(383, 'Fahmi Agustin', 'fahmi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(384, 'Fanditya Arief Rachman', 'fanditya@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(385, 'Firman', 'firman@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(386, 'Gilang Ramadhan', 'gilang@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(387, 'Irfan Doni Saputra', 'irfan@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(388, 'Ivan Mulya Fajar', 'ivan@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(389, 'Jimmy Ibrahim', 'jimmy@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(390, 'Juliana Parwanto', 'anto@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(391, 'Khalida Zia', 'zia@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(392, 'Kiki', 'kiki@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(393, 'Krisman Situmeang', 'krisman@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(394, 'M Prabu Reza Pratama', 'prabu@danpacmart.co.id', '$2y$12$83lVYKf74S4qFVyuT3MCIuZCxi3weTzeIg8Hi3lVVuIsMAw.Lrf.6', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-26 07:55:29'),
(395, 'Marlon Michael Calvin Loppies', 'marlon@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(396, 'Merlian Nisa', 'merlian@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(397, 'Merrina', 'merrina@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(398, 'Monika Marcella', 'monika@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(399, 'Nadya Nathasia', 'nadya@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(400, 'Novi Pikanti', 'novi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(401, 'Nur Rizki Amelia', 'lia@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(402, 'Patma Dwi Setiani', 'patma@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(403, 'Rahmad Suhardi', 'rahmad@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(404, 'Rangga Himawan', 'rangga@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(405, 'Rendi Setiawan', 'rendi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(406, 'Reza Saputra', 'reza@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(407, 'Rifan', 'rifan@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(408, 'Rizqi Hidayatullah', 'rizqi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(409, 'Romi', 'romi@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(410, 'Sarah Auliandini', 'sarah@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(411, 'Semri Taneo', 'semri@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(412, 'Singgih Azwar Anas', 'singgih@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(413, 'Steven', 'steven@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(414, 'Sri Murni Rumahorbo', 'murni@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(415, 'Tia Lestari Sinaga', 'tia@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(416, 'Valentine Pebriyanti', 'valen@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(417, 'Willy Saputra', 'willy.saputra@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(418, 'Winna Mulyani', 'winna@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(419, 'Yani', 'yani@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(420, 'Yonas Sanita Padeng', 'yonas@danpacmart.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'RTP', 'RTP', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(421, 'Asti Mina Kurnia', 'marketing.support@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Admin', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(422, 'Ita Susanti', 'sales.admin@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Admin', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(423, 'Milawati', 'customer.support@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Admin', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(424, 'Sri Muliani', 'product.support@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Admin', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(425, 'Madroji', 'madroji@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Driver', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(426, 'Tri Wahyudi', 'tri@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Driver', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(427, 'Al Vira Nabila', 'alvira@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(428, 'Antonnius', 'accounting@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(429, 'Arum Susanti', 'arum.s@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(430, 'Eva Monica', 'accounting2@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(431, 'Hermi Shahrin Bin Jaiz', 'hermi@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GM', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(432, 'Tarkiman', 'tarkiman@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Kurir', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(433, 'Abdul Rozak', 'rozak@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(434, 'Mega Kusuma Dewi', 'admin2.logistik@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(435, 'Mohamad Sofyan Rifani', 'sofyan@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(436, 'Niddo Tri Awan', 'niddo@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(437, 'Alqadafie (RM)', 'alqadafie@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Manager', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(438, 'Andri (PJS SM)', 'andri@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Manager', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(439, 'Soleh', 'soleh@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Manager', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(440, 'Adi Mulyo', 'adi.mulyo@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(441, 'Adrian Benovil', 'adrian.benovil@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(442, 'Ahmad Idris Dwi Lastanto', 'ahmad@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(443, 'Aka Sanjaya', 'aka@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(444, 'Amazzwell Amir', 'wellamir@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(445, 'Andohar Saur Matua Damanik', 'andohar.damanik@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(446, 'Budi Heriyanto', 'budi.heriyanto@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(447, 'Budi Kurniawan', 'budi@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(448, 'Dadan Taruna', 'dadan@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(449, 'Daniel Susanto', 'daniel@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(450, 'Dicky Irawan', 'dicky.irawan@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(451, 'Dwi Yudhi Janto', 'dwi@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(452, 'Heppy Fertsa Yanuari Setyamur', 'heppy@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(453, 'Ichsan Ardiansyah', 'ichsan@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(454, 'Lihua Agta Mimosa', 'lihua.mimosa@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(455, 'Mohamad Ardianto', 'ardianto@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(456, 'Rahmad', 'rahmad@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(457, 'Sigit Sentot Hakoso', 'sigit.s@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(458, 'Sri Mulyani ST', 'sri.m@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(459, 'Syachrial', 'syachrial@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'ME', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(460, 'Ariyanto Alfarahi', 'ariyanto@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'NSM', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(461, 'Eko Mardiansyah', 'eko@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'OB', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `divisi`, `group`, `level`, `role`, `status`, `profile_pic`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(462, 'Hendra Saputra', 'hendra.saputra@sterilmedical.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'PE', 'SMI', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(463, 'Evi Setya Ningrum', 'evi@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'FA', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(464, 'Firdaus', 'firdaus@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GA', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(465, 'Lim Hee Keat', 'limheekeat@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GM', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(466, 'Melia Puspita Sari', 'melia@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Admin', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(467, 'Niasih', 'niasih@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Produksi', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(468, 'Puji Lestari', 'puji@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Produksi', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(469, 'Soyono', 'soyono@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'GM', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(470, 'Susilasari', 'susilasari@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Produksi', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(471, 'Ucu Sumasan', 'ucu@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(472, 'Wahyu Rahma Sari', 'ayu@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Produksi', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00'),
(473, 'Jusuf Lukman', 'yusuf@sterilindustry.co.id', '$2y$10$4RxmfIDVods6xKi7/nB2Se0GJO49HTsKNYJ8ADEAEjW720suX5jPq', 'Logistik', 'SMID', 3, 'user', 1, '', '0000-00-00 00:00:00', '', '2025-05-22 17:00:00', '2025-05-22 17:00:00');

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
