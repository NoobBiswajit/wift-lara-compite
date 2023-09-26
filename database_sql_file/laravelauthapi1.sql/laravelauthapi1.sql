-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2023 at 10:16 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelauthapi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employees`
--

DROP TABLE IF EXISTS `add_employees`;
CREATE TABLE IF NOT EXISTS `add_employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fbLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_employees`
--

INSERT INTO `add_employees` (`id`, `name`, `designation`, `fbLink`, `emailLink`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'kamal hossain', 'manager', 'https://www.facebook.com', 'https://www.facebook.com', 'upload/profile_images/667659740.jeet - Copy.jpg', NULL, NULL),
(2, 'Munna khan', 'manager', 'https://www.facebook.com', 'https://www.facebook.com', 'upload/profile_images/1904880762.g4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Imran Khan', 'Our blog.', 'upload/blog_images/389894070.blog1 - Copy.jpg', 'using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-09-25 03:35:15', '2023-09-25 03:35:15'),
(2, 'Jahid hasan', 'Welcome to our blog.', 'upload/blog_images/1626388261.moto1.jpeg', 'using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-09-25 03:36:12', '2023-09-25 03:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectedTopic` enum('Option1','Option2','Option3','Option4') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meetingSessionLink` enum('Google Meet','Zoom') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selectedTopic` enum('Option1','Option2','Option3','Option4') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meetingSessionLink` enum('Google Meet','Zoom') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectedTopic` enum('Option1','Option2','Option3','Option4') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meetingSessionLink` enum('Google Meet','Zoom') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `selectedTopic`, `meetingSessionLink`, `created_at`, `updated_at`) VALUES
(1, 'amit', 'amit@gmail.com', 'Option1', 'Zoom', '2023-09-15 05:13:44', '2023-09-15 05:13:44'),
(2, 'tomal', 'tomal@gmail.com', 'Option2', 'Zoom', '2023-09-17 22:03:22', '2023-09-17 22:03:22'),
(3, 'tomal', 'tomal@gmail.com', 'Option2', 'Zoom', '2023-09-19 01:07:33', '2023-09-19 01:07:33'),
(4, 'kuti', 'kuti@gmail.com', 'Option2', 'Zoom', '2023-09-19 01:07:46', '2023-09-19 01:07:46'),
(5, 'puti', 'puti@gmail.com', 'Option2', 'Zoom', '2023-09-19 03:15:00', '2023-09-19 03:15:00'),
(6, 'guli', 'guli@gmail.com', 'Option3', 'Google Meet', '2023-09-19 03:16:56', '2023-09-19 03:16:56'),
(7, 'aklfaklf', 'kajkf@gmail.com', 'Option2', 'Google Meet', '2023-09-19 03:17:58', '2023-09-19 03:17:58'),
(8, 'raja', 'raja@gmail.com', 'Option3', 'Google Meet', '2023-09-19 03:23:55', '2023-09-19 03:23:55'),
(9, 'joya', 'joya@gmail.com', 'Option2', 'Zoom', '2023-09-19 03:28:13', '2023-09-19 03:28:13'),
(10, 'shamim', 'shamim@gmail.com', 'Option2', 'Google Meet', '2023-09-19 03:41:52', '2023-09-19 03:41:52'),
(11, 'shuvo', 'shuvo@gmail.com', 'Option2', 'Zoom', '2023-09-19 03:44:59', '2023-09-19 03:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_13_031539_create_contacts_table', 1),
(6, '2023_09_13_193519_contact_table', 1),
(7, '2023_09_14_045150_create_roles_table', 1),
(8, '2023_09_14_050058_create_role_user_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2023_09_15_102744_create_contact_us_table', 3),
(11, '2023_09_23_035004_create_blogs_table', 4),
(12, '2023_09_23_113423_create_add_employees_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'shamim@gmail.com', 'b9513f13c332c5697ec50df9dbb7e5507a2baada480f7a48d953aa1a44349265', '[\"*\"]', NULL, NULL, '2023-09-14 00:53:30', '2023-09-14 00:53:30'),
(2, 'App\\Models\\User', 7, 'admin@gmail.com', 'c7c8b4990bff59d9d4e42728ea50bb7c23ce38eb89394f920ef0d1f592607ce4', '[\"*\"]', NULL, NULL, '2023-09-15 00:07:14', '2023-09-15 00:07:14'),
(3, 'App\\Models\\User', 8, 'tutul@gmail.com', '41f635f70f3c81d0a9275480b7e502c15c23802e8db39bf411799b767c58bc00', '[\"*\"]', NULL, NULL, '2023-09-15 03:37:03', '2023-09-15 03:37:03'),
(4, 'App\\Models\\User', 9, 'kutul@gmail.com', '42ed0c150bc5bf56ce45c763bf2ef77a34d771885b97dba9d01c883c778459ac', '[\"*\"]', NULL, NULL, '2023-09-15 03:43:40', '2023-09-15 03:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-09-13 23:13:25', '2023-09-13 23:13:25'),
(2, 'employees', '2023-09-13 23:13:25', '2023-09-13 23:13:25'),
(3, 'user', '2023-09-13 23:13:25', '2023-09-13 23:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(3, 1),
(7, 1),
(3, 2),
(6, 2),
(8, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tc` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `tc`, `created_at`, `updated_at`) VALUES
(3, 'shamim Hasan', 'shamim@gmail.com', NULL, '$2y$10$0BwX9iBqL8YqQY2jogHqne3idIxJjkrdfg2qcYDkYdiIOuJrV5Ujy', NULL, 1, '2023-09-14 03:05:07', '2023-09-14 03:58:00'),
(6, 'arnab', 'arnab@gmail.com', NULL, '$2y$10$OUCDUBjNmYWO6VMpbC0UNeXEn5F6ongbNVdWL..kvCgpEqJAUNCNO', NULL, 1, '2023-09-14 22:02:51', '2023-09-14 22:02:51'),
(7, 'admin', 'admin@gmail.com', NULL, '$2y$10$0zpMF5i.IsFDsT9dtMLpnucGl0tjKrDHEbcvP2kt.y5gHNjdm2/Yi', NULL, 1, '2023-09-15 00:07:14', '2023-09-15 00:07:14'),
(8, 'tutul roy', 'tutul@gmail.com', NULL, '$2y$10$tEmuGIQQ6ep1pKYH2YxyjOKBkMUj8uc/M0z/JENjCkHa4r35NCICC', NULL, 1, '2023-09-15 03:37:03', '2023-09-15 03:37:25'),
(10, 'kutul', 'kutul@gmail.com', NULL, '$2y$10$0ijyJU7eU5TH.pVvKq1/VuNUDpcbeTTL6ZYIqXYkpTFV1VXauaqam', NULL, NULL, '2023-09-15 03:45:44', '2023-09-15 03:45:44'),
(11, 'shuvo', 'shuvo@gmail.com', NULL, '$2y$10$n7xQUWx4Hf0OHoS9eIY6U.DHh5GyDTYnoGB6WLCyrHv0ySLw47FXW', NULL, NULL, '2023-09-19 04:09:28', '2023-09-19 04:09:28');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
