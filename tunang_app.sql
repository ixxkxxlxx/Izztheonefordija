-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.15.0.7171
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tunang_app
CREATE DATABASE IF NOT EXISTS `tunang_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tunang_app`;

-- Dumping structure for table tunang_app.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.cache: ~1 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel-cache-boost.roster.scan', 'a:2:{s:6:"roster";O:21:"Laravel\\Roster\\Roster":3:{s:13:"\0*\0approaches";O:29:"Illuminate\\Support\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}s:11:"\0*\0packages";O:32:"Laravel\\Roster\\PackageCollection":2:{s:8:"\0*\0items";a:11:{i:0;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:5:"^12.0";s:9:"\0*\0source";E:43:"Laravel\\Roster\\Enums\\PackageSource:COMPOSER";s:10:"\0*\0package";E:37:"Laravel\\Roster\\Enums\\Packages:LARAVEL";s:14:"\0*\0packageName";s:17:"laravel/framework";s:10:"\0*\0version";s:7:"12.54.1";s:6:"\0*\0dev";b:0;s:7:"\0*\0path";s:50:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\framework";}i:1;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:0;s:13:"\0*\0constraint";s:7:"v0.3.14";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:37:"Laravel\\Roster\\Enums\\Packages:PROMPTS";s:14:"\0*\0packageName";s:15:"laravel/prompts";s:10:"\0*\0version";s:6:"0.3.14";s:6:"\0*\0dev";b:0;s:7:"\0*\0path";s:48:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\prompts";}i:2;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:4:"^2.3";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:35:"Laravel\\Roster\\Enums\\Packages:BOOST";s:14:"\0*\0packageName";s:13:"laravel/boost";s:10:"\0*\0version";s:5:"2.3.1";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:46:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\boost";}i:3;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:4:"^2.4";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:36:"Laravel\\Roster\\Enums\\Packages:BREEZE";s:14:"\0*\0packageName";s:14:"laravel/breeze";s:10:"\0*\0version";s:5:"2.4.1";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:47:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\breeze";}i:4;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:0;s:13:"\0*\0constraint";s:6:"v0.6.2";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:33:"Laravel\\Roster\\Enums\\Packages:MCP";s:14:"\0*\0packageName";s:11:"laravel/mcp";s:10:"\0*\0version";s:5:"0.6.2";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:44:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\mcp";}i:5;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:6:"^1.2.2";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:34:"Laravel\\Roster\\Enums\\Packages:PAIL";s:14:"\0*\0packageName";s:12:"laravel/pail";s:10:"\0*\0version";s:5:"1.2.6";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:45:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\pail";}i:6;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:5:"^1.24";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:34:"Laravel\\Roster\\Enums\\Packages:PINT";s:14:"\0*\0packageName";s:12:"laravel/pint";s:10:"\0*\0version";s:6:"1.29.0";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:45:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\pint";}i:7;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:5:"^1.41";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:34:"Laravel\\Roster\\Enums\\Packages:SAIL";s:14:"\0*\0packageName";s:12:"laravel/sail";s:10:"\0*\0version";s:6:"1.53.0";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:45:"C:\\laragon\\www\\tunang-app\\vendor\\laravel\\sail";}i:8;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:4:"^4.4";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:34:"Laravel\\Roster\\Enums\\Packages:PEST";s:14:"\0*\0packageName";s:12:"pestphp/pest";s:10:"\0*\0version";s:5:"4.4.2";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:45:"C:\\laragon\\www\\tunang-app\\vendor\\pestphp\\pest";}i:9;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:0;s:13:"\0*\0constraint";s:7:"12.5.12";s:9:"\0*\0source";r:11;s:10:"\0*\0package";E:37:"Laravel\\Roster\\Enums\\Packages:PHPUNIT";s:14:"\0*\0packageName";s:15:"phpunit/phpunit";s:10:"\0*\0version";s:7:"12.5.12";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:48:"C:\\laragon\\www\\tunang-app\\vendor\\phpunit\\phpunit";}i:10;O:22:"Laravel\\Roster\\Package":8:{s:9:"\0*\0direct";b:1;s:13:"\0*\0constraint";s:6:"^4.0.0";s:9:"\0*\0source";E:38:"Laravel\\Roster\\Enums\\PackageSource:NPM";s:10:"\0*\0package";E:41:"Laravel\\Roster\\Enums\\Packages:TAILWINDCSS";s:14:"\0*\0packageName";s:11:"tailwindcss";s:10:"\0*\0version";s:5:"4.2.1";s:6:"\0*\0dev";b:1;s:7:"\0*\0path";s:50:"C:\\laragon\\www\\tunang-app\\node_modules\\tailwindcss";}}s:28:"\0*\0escapeWhenCastingToString";b:0;}s:21:"\0*\0nodePackageManager";E:43:"Laravel\\Roster\\Enums\\NodePackageManager:NPM";}s:9:"timestamp";i:1773414533;}', 1773500933);

-- Dumping structure for table tunang_app.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.cache_locks: ~0 rows (approximately)

-- Dumping structure for table tunang_app.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tunang_app.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.job_batches: ~0 rows (approximately)

-- Dumping structure for table tunang_app.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_available_at_index` (`queue`,`reserved_at`,`available_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.jobs: ~0 rows (approximately)

-- Dumping structure for table tunang_app.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.messages: ~0 rows (approximately)

-- Dumping structure for table tunang_app.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.migrations: ~4 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_03_13_150937_create_messages_table', 2);

-- Dumping structure for table tunang_app.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tunang_app.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.sessions: ~2 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('iTTaDkrSBYUVR0AgxOrxGBXCCBuSrYkToo0VeIQU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1NqS3dBU2tmNHlnSkZYank3cjJBWjd4STVIeEtxQk9XZzFpeUNHTiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvdHVuYW5nLWFwcC9wdWJsaWMiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1773415227),
	('wIcLpEOTrhcdoGbMbaR7k1k4E8kfLUycvzaBT4XD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnhEeEx6MzI3c01JVVpUREV1eFVCdVNrZHV6bkpiYndMeXF3Q3FpYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1773415243);

-- Dumping structure for table tunang_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tunang_app.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Test User', 'test@example.com', '2026-03-13 07:15:55', '$2y$12$Rxt0vnHhM7RYyLCoc1N3IeQDpJN6g6K8SGVW1X0zmlHygLtQfZLGi', '9a3dHTpIgM', '2026-03-13 07:15:55', '2026-03-13 07:15:55');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
