-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 12:31 PM
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
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_tiket` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tipe_komplain` varchar(100) DEFAULT NULL,
  `kendala` text NOT NULL,
  `detail_penyelesaian` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ticket_status` varchar(10) NOT NULL DEFAULT 'RECEIVED',
  `tgl_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `no_tiket`, `username`, `tipe_komplain`, `kendala`, `detail_penyelesaian`, `created_at`, `updated_at`, `ticket_status`, `tgl_selesai`) VALUES
(1, 'HD12229511', 'laksita.cayadi@yahoo.com', '7', 'Temporibus qui est aliquam maiores blanditiis dolores.', 'Et aliquam architecto est.', '2025-04-22 09:58:00', '2025-04-22 09:58:00', 'IN PROCESS', NULL),
(2, 'HD29640802', 'vprakasa@yahoo.com', '7', 'Quisquam voluptas quo qui necessitatibus.', 'Quisquam repellat et est.', '2025-04-22 09:58:00', '2025-04-23 03:50:32', 'OPEN', NULL),
(3, 'HD00301867', 'nababan.viman@gmail.co.id', '1', 'Minima totam quia repudiandae id quisquam atque dolorem sed.', 'Impedit nihil magni aliquid dolorem.', '2025-04-22 09:58:00', '2025-04-22 09:58:00', 'IN PROCESS', NULL),
(5, 'HD84802251', 'zamira94@gmail.com', '7', 'Esse beatae corrupti voluptate nesciunt et omnis.', 'Odit placeat ut harum excepturi sequi.', '2025-04-22 09:58:00', '2025-04-22 09:58:00', 'IN PROCESS', NULL),
(6, 'HD36403368', 'purnawati.alika@yahoo.co.id', '7', 'Voluptas alias corporis et in itaque aperiam sed.', 'Doloribus totam consectetur eius ducimus dicta.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(7, 'HD01672299', 'claksita@yahoo.co.id', '8', 'Corrupti voluptatem voluptatem magni neque nam sint id.', 'Velit sunt molestias et pariatur sequi explicabo quia.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(8, 'HD91145051', 'dkurniawan@yahoo.com', '2', 'Et repellendus inventore et necessitatibus modi velit.', 'Odit maxime beatae voluptatem quod dicta.', '2025-04-22 09:58:01', '2025-04-23 04:00:16', 'OPEN', NULL),
(9, 'HD79423478', 'usada.laila@gmail.co.id', '5', 'Quia inventore amet harum officia.', 'Quas iste molestiae expedita similique.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'IN PROCESS', NULL),
(10, 'HD90864256', 'namaga.maras@yahoo.com', '8', 'Aut quo omnis qui ratione ab.', 'Nihil quasi molestiae ex distinctio vitae sunt nobis.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'RECEIVED', NULL),
(11, 'HD53839582', 'legawa.mardhiyah@yahoo.com', '3', 'Recusandae quod sapiente repudiandae odit accusamus enim.', 'Magnam sint officia molestias quidem repudiandae quidem voluptatem.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(12, 'HD82326371', 'melinda70@gmail.co.id', '4', 'Optio et numquam eligendi sed nostrum voluptatem.', 'Et sint dolorum rerum voluptatibus illum.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(13, 'HD17948729', 'warji.hassanah@gmail.com', '1', 'Recusandae iste magni eos est voluptas maxime.', 'Non quia possimus quam praesentium tenetur accusantium quidem commodi.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(14, 'HD22343110', 'rlazuardi@gmail.com', '3', 'Et quod harum dolor enim.', 'Quidem et sit consequuntur veniam.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'RECEIVED', NULL),
(15, 'HD04256520', 'xpuspasari@gmail.co.id', '5', 'Quisquam perspiciatis totam voluptatibus.', 'Repudiandae voluptatem sed similique nemo aliquid rerum.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'IN PROCESS', NULL),
(16, 'HD42676520', 'capa25@yahoo.co.id', '8', 'Ipsam quaerat quia qui aut sunt labore.', 'Velit amet officiis vitae quasi.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(17, 'HD94759258', 'uwais.bella@yahoo.co.id', '6', 'Quibusdam possimus velit magni architecto.', 'Commodi praesentium quis provident amet voluptates.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(18, 'HD13448669', 'lestari.kamidin@yahoo.com', '2', 'Dolorem ut commodi culpa vel autem corporis.', 'Saepe sunt hic repellendus doloremque.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(19, 'HD53871103', 'thastuti@gmail.co.id', '4', 'Et eaque sed dolor.', 'Est doloribus itaque et ut.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'IN PROCESS', NULL),
(20, 'HD61654879', 'puti40@yahoo.com', '7', 'Molestiae ut enim dolores repudiandae qui quis vel labore.', 'Pariatur et sint est saepe.', '2025-04-22 09:58:01', '2025-04-22 09:58:01', 'DONE', NULL),
(21, 'HD2025040069', 'tes@gmail.com', '1', 'Printer tidak berfungsi', NULL, '2025-04-22 10:11:44', '2025-04-23 10:30:49', 'OPEN', NULL),
(22, 'HD2025040070', 'prabu@danpacpharma.com', '3', 'Koneksi internet tidak bisa', NULL, '2025-04-23 03:12:08', '2025-04-23 03:39:46', 'OPEN', NULL),
(23, 'HD2025040071', 'prabu@danpacpharma.com', '4', 'Tidak bisa kirim email', NULL, '2025-04-23 03:16:10', '2025-04-23 03:40:15', 'OPEN', NULL),
(24, 'HD2025040072', 'prabu@danpacpharma.com', '1', 'Kertas nyangkut di printer', NULL, '2025-04-23 03:16:42', '2025-04-23 03:41:26', 'OPEN', NULL),
(25, 'HD2025040073', 'prabu@danpacpharma.com', '1', 'Mouse rusak', NULL, '2025-04-23 03:17:14', '2025-04-23 03:17:14', 'OPEN', NULL),
(26, 'HD2025040074', 'prabu@danpacpharma.com', '4', 'Email tidka bisa kirim', NULL, '2025-04-23 04:02:10', '2025-04-23 04:02:10', 'OPEN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_no_tiket_unique` (`no_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
