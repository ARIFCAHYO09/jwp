-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 11:22 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_24_191914_add_picture_column_to_user_table', 2),
(4, '2019_05_25_063117_create_users_pengaduan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arif.0009@students.amikom.ac.id', '$2y$10$LLyRNmRDN3.NmAqt7sbElO1FkS9GCzTFrT2gO9LbnztxFJlZXe/PG', '2019-05-24 12:24:33'),
('mascahyo15@gmail.com', '$2y$10$EW.ZxEVKQwxbQX8yEyzANOwLce.buIBgR2lQExdU7CjlO.CxIPf2q', '2019-05-24 22:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`) VALUES
(1, 'arif cahyo prasetyoo', '16.11.0009', '2019-05-24 13:59:58', '$2y$10$k/LJRCR0DSdhsKR3szZPdeDYB7mhf06pX0v3heklHBXL6WFHdS8IS', 'iSwBpIGtNokmxOP7fNOLlVrhmIqmVIYyX2NUGGelAVom370aGi0sMjv8Jl3z', '2019-05-24 10:07:52', '2019-05-24 18:45:24', '/uploads/images/arif-cahyo-prasetyoo_1558748724.jpg'),
(2, 'arif cahyo prasetyo', 'mascahyo15@gmail.com', '2019-05-24 13:59:58', '$2y$10$VfEehJW0m/p6edNaJT3YyeIzebjcE4pk1RvCniUF7jT7A4JMoQBBy', NULL, '2019-05-24 10:35:23', '2019-05-24 10:35:23', NULL),
(3, 'arif cahyo prasetyo', 'mascahyo291@yahoo.co.id', NULL, '$2y$10$k42jv36H64.szJD7uTt6bu3a4WfglO9TP0M28v1IAkEAHzG7QiqCq', NULL, '2019-05-24 14:04:09', '2019-05-24 14:04:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_pengaduan`
--

CREATE TABLE `users_pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_kerusakan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_pengaduan`
--

INSERT INTO `users_pengaduan` (`id`, `email`, `keterangan`, `ruang`, `gambar`, `created_at`, `updated_at`, `jenis_kerusakan`) VALUES
(4, '16.11.0009', 'ac rusak parah', '5.2.1', '/uploads/images/16110009-1558860809.png', '2019-05-26 01:53:29', NULL, '5.2.2'),
(8, '16.11.0009', 'jendela pecah', '4.4.3', '/uploads/images/16110009-1558852582.jpg', '2019-05-25 23:36:22', NULL, 'sedang'),
(9, '16.11.0009', 'ac rusak kipas tidak menyala', '5.2.2', '/uploads/images/16110009-1558853164.jpg', '2019-05-25 23:46:04', NULL, 'parah'),
(10, '16.11.0009', 'ac 2 rusak parah tidak bisa menyala hingga konslet menyebabkan mati lampu', '5.2.2', '/uploads/images/16110009-1558860847.jpg', '2019-05-26 01:54:07', NULL, '5.2.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_pengaduan`
--
ALTER TABLE `users_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_pengaduan`
--
ALTER TABLE `users_pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
