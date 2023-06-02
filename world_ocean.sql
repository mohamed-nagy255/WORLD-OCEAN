-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 04:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `world_ocean`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'one', 'one-1685238043.webp.webp', '2023-05-27 22:40:43', '2023-05-27 22:40:43'),
(3, 'two', 'two-1685661731.jpg.webp', '2023-06-01 20:22:12', '2023-06-01 20:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'one', 'one-1685235855.webp.webp', '2023-05-27 13:02:51', '2023-05-27 22:21:42'),
(3, 'two', 'two-1685238459.jpg.webp', '2023-05-27 22:47:39', '2023-05-27 22:47:39'),
(4, 'three', 'three-1685238659.webp.webp', '2023-05-27 22:50:35', '2023-05-27 22:51:01'),
(5, 'four', 'four-1685238688.jpg.webp', '2023-05-27 22:51:28', '2023-05-27 22:51:28'),
(6, 'five', 'five-1685238756.webp.webp', '2023-05-27 22:52:37', '2023-05-27 22:52:37'),
(7, 'six', 'six-1685238814.webp.webp', '2023-05-27 22:53:41', '2023-05-27 22:53:41'),
(8, 'seven', 'seven-1685238850.jpg.webp', '2023-05-27 22:54:10', '2023-05-27 22:54:10'),
(9, 'eight', 'eight-1685238950.webp.webp', '2023-05-27 22:55:53', '2023-05-27 22:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name_day`, `description`, `offer_id`) VALUES
(96, 'one', 'one', 8),
(97, 'one', 'one', 8),
(98, 'onw', 'one', 8),
(99, 'two', 'two', 9),
(100, 'two', 'two', 9),
(104, 'four', 'four', 11),
(105, 'four', 'four', 11),
(106, 'three', 'three', 10),
(107, 'three', 'three', 10),
(108, 'three', 'three', 10),
(111, 'sda', 'das', 13),
(113, 'sad', 'dsa', 12);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_133942_create_slides_table', 1),
(6, '2023_05_11_161330_create_seo_metas_table', 1),
(7, '2023_05_22_235934_create_countries_table', 2),
(8, '2023_05_28_013037_create_categories_table', 3),
(9, '2023_05_30_171930_create_offers_table', 4),
(10, '2023_05_30_174124_create_days_table', 5),
(11, '2023_05_30_174234_create_propreties_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `day_cont` int(11) NOT NULL,
  `spcial` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=normal, 1=spcial',
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `image`, `price`, `day_cont`, `spcial`, `country_id`, `category_id`, `created_at`, `updated_at`) VALUES
(8, 'one', 'one-1685641456.webp', 32, 4, 1, 1, 1, '2023-06-01 14:44:17', '2023-06-01 14:44:17'),
(9, 'two', 'two-1685641497.webp', 33, 3, 1, 3, 1, '2023-06-01 14:44:58', '2023-06-01 14:44:58'),
(10, 'three', 'three-1685654216.webp', 1234, 12, 0, 4, 1, '2023-06-01 18:16:57', '2023-06-01 19:42:58'),
(11, 'four', 'four-1685654253.webp', 3453, 12, 1, 3, 1, '2023-06-01 18:17:34', '2023-06-01 18:17:34'),
(12, 'five', 'five-1685661851.webp', 234423, 42, 0, 1, 3, '2023-06-01 20:24:12', '2023-06-01 20:52:30'),
(13, 'six', 'six-1685661896.webp', 321, 21, 0, 1, 1, '2023-06-01 20:24:57', '2023-06-01 20:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propreties`
--

CREATE TABLE `propreties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_proprety` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propreties`
--

INSERT INTO `propreties` (`id`, `name_proprety`, `offer_id`) VALUES
(54, 'one', 8),
(55, 'one', 8),
(56, 'one', 8),
(57, 'two', 9),
(58, 'two', 9),
(63, 'four', 11),
(64, 'three', 10),
(65, 'three', 10),
(66, 'three', 10),
(67, 'three', 10),
(70, 'dsa', 13),
(72, 'sda', 12);

-- --------------------------------------------------------

--
-- Table structure for table `seo_metas`
--

CREATE TABLE `seo_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_metas`
--

INSERT INTO `seo_metas` (`id`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'World Ocean', 'World Ocean,World Ocean,World Ocean,World Ocean', 'World Ocean');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`) VALUES
(47, 'slider-1685317820.jpg.webp'),
(48, 'slider-1685317925.jpg.webp'),
(49, 'slider-1685318520.webp.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'World Ocean', 'world@ocean.com', NULL, '$2y$10$1tJwzNM7uhY49sIif5yJAekeg5Q6yG5qEfFFPeQfp1LhONUF1dUAW', NULL, '2023-05-22 20:44:45', '2023-05-22 20:44:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `days_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_country_id_foreign` (`country_id`),
  ADD KEY `offers_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `propreties`
--
ALTER TABLE `propreties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propreties_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `seo_metas`
--
ALTER TABLE `seo_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propreties`
--
ALTER TABLE `propreties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `seo_metas`
--
ALTER TABLE `seo_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `days_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `propreties`
--
ALTER TABLE `propreties`
  ADD CONSTRAINT `propreties_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
