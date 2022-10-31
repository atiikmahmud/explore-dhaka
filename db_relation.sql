-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2022 at 03:59 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_relation`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitycards`
--

CREATE TABLE `identitycards` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `identity_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identitycards`
--

INSERT INTO `identitycards` (`id`, `user_id`, `identity_number`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, '7654704263', '351.345.5747', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(2, 2, '4584423693', '804-465-2408', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(3, 3, '2819727328', '+1.352.900.0684', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(4, 4, '4324777657', '+1-402-570-1289', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(5, 5, '7826611216', '323-969-6558', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(6, 6, '3938769756', '+1-463-748-1098', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(7, 7, '6099832561', '+1-661-837-4883', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(8, 8, '4244487344', '+1-904-882-6136', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(9, 9, '3741582290', '1-302-942-0065', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(10, 10, '4904720720', '1-937-383-7286', '2022-07-20 01:17:16', '2022-07-20 01:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_20_070510_create_identitycards_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Dr. Arthur Bogan PhD', 'vkulas@example.net', '2022-07-20 01:17:15', '$2y$10$2hNNJGgeBvOyIH.NcVM7mOgFAf8H.n9kW42PkaAx9MAolkn8Bq4P2', '3fklv76FLM', '2022-07-20 01:17:15', '2022-07-20 01:17:15'),
(2, 'Mr. Luther Greenfelder', 'pmertz@example.com', '2022-07-20 01:17:15', '$2y$10$63s2dzCTSQjhXT2eyDv/.eAOeNxX8AJX6xThVXLRi2hR6HZuNvu6W', '4tTLDS4ZJf', '2022-07-20 01:17:15', '2022-07-20 01:17:15'),
(3, 'Verlie Wintheiser I', 'morar.carmella@example.com', '2022-07-20 01:17:15', '$2y$10$1z5jHNJ67khUD/icLtW9IOLUYxBCRHBEWGU9NtMyQBbq1ZuOWv6.S', 'DVANp0HbVE', '2022-07-20 01:17:15', '2022-07-20 01:17:15'),
(4, 'Eveline Mueller', 'alia02@example.org', '2022-07-20 01:17:15', '$2y$10$YcX1JtmfKZBqVbhn8HMH2.TOEogWcWVAg9GaI5VPCVfDe66bjXuPG', 'i8eC3GXxXH', '2022-07-20 01:17:15', '2022-07-20 01:17:15'),
(5, 'Dr. Nasir Stoltenberg', 'rosenbaum.gerhard@example.com', '2022-07-20 01:17:15', '$2y$10$z4EVK9H6QtFk3D5vVdJ4SuxGpTxrnKKmX24lBld4HvHkJlGfO7kNG', 'Qx7Q1djCl2', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(6, 'Maryse Koss', 'xosinski@example.net', '2022-07-20 01:17:16', '$2y$10$PPepk6yPzpYKGOrgKag0mu5Z0UNqVn5N/YI7oF5JlRgcVFtBs5C9O', 'EOENELuNR4', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(7, 'Dr. Barry Huel III', 'brakus.tamia@example.com', '2022-07-20 01:17:16', '$2y$10$qizYO2suvmF7CggDBHdIEOppnBFIA1VvnReI/AjPWbrAi4wnLYryi', '1XC1PJf1Z0', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(8, 'Jamey Pacocha', 'carroll.myrtice@example.net', '2022-07-20 01:17:16', '$2y$10$ae9FrZHRTuCnh0CSZbBO4OJ.Ffm1E9/IgOuT85ERtOhyZ8rqcGMAC', 'Ku92kXBUvo', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(9, 'Maddison Pfeffer', 'janice.hill@example.org', '2022-07-20 01:17:16', '$2y$10$0jZXmxH/dHNJqj4TAFECjOVYIJSBhbP/lnAzR.5bqV5niQKghZF7.', 'bMYgvhD2mu', '2022-07-20 01:17:16', '2022-07-20 01:17:16'),
(10, 'Dr. Stanford Quitzon IV', 'ernestina03@example.org', '2022-07-20 01:17:16', '$2y$10$AgTV6egbtDnx6LvleAIJQe4KryRwpiyBvdBXxh3786ulbu3GywXzO', 'KSYDijoZWZ', '2022-07-20 01:17:16', '2022-07-20 01:17:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `identitycards`
--
ALTER TABLE `identitycards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identitycards_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitycards`
--
ALTER TABLE `identitycards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identitycards`
--
ALTER TABLE `identitycards`
  ADD CONSTRAINT `identitycards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
