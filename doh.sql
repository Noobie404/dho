-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 07:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doh`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_000000_create_users_table', 3),
(6, '2019_12_29_132305_create_events_table', 4),
(7, '2020_01_27_132913_create_product_history_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `offer_start` varchar(255) NOT NULL,
  `offer_end` varchar(255) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `offer_cat` varchar(255) NOT NULL,
  `description` longtext,
  `provider` varchar(255) DEFAULT NULL,
  `promo_code` varchar(255) DEFAULT NULL,
  `offer_note` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `product_link` varchar(255) NOT NULL,
  `affiliate_link` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `visible` varchar(255) DEFAULT 'on',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `currency` varchar(255) DEFAULT 'BDT',
  `page_visitor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `sub_title`, `offer_start`, `offer_end`, `product_cat`, `offer_cat`, `description`, `provider`, `promo_code`, `offer_note`, `price`, `product_link`, `affiliate_link`, `status`, `visible`, `user_id`, `product_id`, `currency`, `page_visitor`, `created_at`, `updated_at`) VALUES
(4, 'uncompromising quality2', 'sdsds', '2020-01-27 21:38:30', '2020-02-08 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', 'on', 1, 'DHO-495527', 'USD', NULL, '2020-01-27 03:38:46', '2020-01-31 10:31:06'),
(5, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-29 12:03:28', 'Web-Server', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-626541', 'BDT', NULL, '2020-01-28 06:04:31', '2020-01-31 11:09:18'),
(6, '.net', 'sdsds', '2020-01-28 12:08:36', '2020-01-31 12:08:36', 'Hosting', 'Special', 'dfvgbn', 'asdfgbvfcs', '1515151', NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-220098', 'BDT', NULL, '2020-01-28 06:08:43', '2020-01-28 06:12:30'),
(7, '.xyz', 'sdsds', '2020-01-07 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'http://dianahost.com', 'active', 'on', 1, 'DHO-280859', 'USD', NULL, '2020-01-28 06:12:10', '2020-01-28 07:29:13'),
(8, '.net', 'sdsds', '2020-01-28 12:13:57', '2020-01-31 12:13:57', 'Hosting', 'Regular', 'sdegthjk', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'off', 1, 'DHO-130207', 'BDT', NULL, '2020-01-28 06:14:06', '2020-01-28 06:14:23'),
(9, '.net+1GB SSD', 'sdsds', '2020-01-28 17:03:48', '2020-01-31 17:03:48', 'Combo', 'Exclusive', 'sdfghjkl', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-205621', 'BDT', NULL, '2020-01-27 23:03:54', '2020-01-28 11:04:35'),
(10, '.net+1GB SSD', 'sdsds', '2020-01-28 17:03:48', '2020-01-31 17:03:48', 'Combo', 'Regular', 'sdfghjkl', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-205621', 'BDT', NULL, '2020-01-27 23:03:54', '2020-01-28 11:04:35'),
(11, '.net+1GB SSD', 'sdsds', '2020-01-28 17:03:48', '2020-01-31 17:03:48', 'Combo', 'Special', 'sdfghjkl', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-205621', 'BDT', NULL, '2020-01-27 23:03:54', '2020-01-28 11:04:35'),
(13, '.net', 'sdsds', '2020-01-28 17:10:17', '2020-01-31 17:10:18', 'Web-Server', 'Regular', 'sdfghjk', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-592339', 'BDT', NULL, '2020-01-28 11:10:26', '2020-01-28 11:10:44'),
(14, '.bd', 'sdsds', '2020-01-28 17:10:17', '2020-02-04 17:10:18', 'Web-Server', 'Exclusive', 'sdfghjk', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-592339', 'BDT', NULL, '2020-01-28 11:10:26', '2020-02-02 05:33:49'),
(15, '.net', 'sdsds', '2020-01-28 17:10:17', '2020-01-31 17:10:18', 'Web-Server', 'Exclusive', 'sdfghjk', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'DHO-592339', 'BDT', NULL, '2020-01-28 11:10:26', '2020-01-28 11:10:44'),
(16, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf😁😁😁😁😁', 'Dianahost', 'dfsdf', 'tdyyj', '123', 'afSDFASDF', 'fukgukg', 'pending', 'on', 1, 'DHO-509158', 'USD', NULL, '2020-01-29 14:46:02', '2020-03-03 11:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_history`
--

CREATE TABLE `product_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offer_start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offer_end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offer_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offer_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliate_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'on',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'BDT',
  `page_visitor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_history`
--

INSERT INTO `product_history` (`id`, `title`, `sub_title`, `offer_start`, `offer_end`, `product_cat`, `offer_cat`, `description`, `provider`, `promo_code`, `offer_note`, `price`, `product_link`, `affiliate_link`, `status`, `visible`, `user_id`, `user_type`, `product_id`, `currency`, `page_visitor`, `created_at`, `updated_at`) VALUES
(1, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:01:08', NULL),
(2, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:02:07', NULL),
(3, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:03:44', NULL),
(4, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:04:51', NULL),
(5, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:16:08', NULL),
(6, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:16:32', NULL),
(7, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:18:14', NULL),
(8, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 02:18:55', NULL),
(9, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'asdfghj', 'pending', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 03:12:53', NULL),
(10, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'asdfghj', 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-27 03:36:47', NULL),
(11, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Hosting', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-495527', 'BDT', NULL, '2020-01-28 06:01:38', NULL),
(12, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Regular', 'rf6guhi', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-495527', 'BDT', NULL, '2020-01-28 06:02:30', NULL),
(13, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-31 12:03:28', 'Domain', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 06:04:45', NULL),
(14, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-31 12:03:28', 'Domain', 'Regular', 'rtyughiuytcyvub', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 06:08:12', NULL),
(15, '.xyz', 'sdsds', '2020-01-28 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-280859', 'BDT', NULL, '2020-01-28 06:12:24', NULL),
(16, '.net', 'sdsds', '2020-01-28 12:08:36', '2020-01-31 12:08:36', 'Hosting', 'Special', 'dfvgbn', 'asdfgbvfcs', '1515151', NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-220098', 'BDT', NULL, '2020-01-28 06:12:30', NULL),
(17, '.net', 'sdsds', '2020-01-28 12:13:57', '2020-01-31 12:13:57', 'Hosting', 'Regular', 'sdegthjk', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-130207', 'BDT', NULL, '2020-01-28 06:14:23', NULL),
(18, '.xyz', 'sdsds', '2020-01-28 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-280859', 'BDT', NULL, '2020-01-28 06:34:10', NULL),
(19, '.xyz', 'sdsds', '2020-01-28 12:11:58', '2020-01-27 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-280859', 'BDT', NULL, '2020-01-28 06:34:43', NULL),
(20, '.xyz', 'sdsds', '2020-01-28 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-280859', 'BDT', NULL, '2020-01-27 19:12:43', NULL),
(21, '.xyz', 'sdsds', '2020-01-07 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-280859', 'BDT', NULL, '2020-01-27 19:15:34', NULL),
(22, '.xyz', 'sdsds', '2020-01-07 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-280859', 'USD', NULL, '2020-01-27 19:28:40', NULL),
(23, '.xyz', 'sdsds', '2020-01-07 12:11:58', '2020-01-31 12:11:59', 'Hosting', 'Exclusive', 'dsfghjkl;', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'www.dianahost.com', 'active', '1', 1, 'admin', 'DHO-280859', 'USD', NULL, '2020-01-27 19:29:13', NULL),
(24, '.net+1GB SSD', 'sdsds', '2020-01-28 17:03:48', '2020-01-31 17:03:48', 'Combo', 'Exclusive', 'sdfghjkl', 'asdfgbvfcs', NULL, NULL, '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-205621', 'BDT', NULL, '2020-01-27 23:04:35', NULL),
(25, '.net', 'sdsds', '2020-01-28 17:10:17', '2020-01-31 17:10:18', 'Web-Server', 'Regular', 'sdfghjk', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', '1', 1, 'admin', 'DHO-592339', 'BDT', NULL, '2020-01-27 23:10:44', NULL),
(26, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-29 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'asdfghj', 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-28 01:04:04', NULL),
(27, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '1515151', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'asdfghj', 'active', '1', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-28 02:27:03', NULL),
(28, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-31 12:03:28', 'Domain', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 21:30:26', NULL),
(29, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-31 12:03:28', 'Domain', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 21:31:42', NULL),
(30, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-27 12:03:28', 'Domain', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 22:19:31', NULL),
(31, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-27 12:03:28', 'Hosting', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 22:19:41', NULL),
(32, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-27 12:03:28', 'Combo', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-28 22:19:51', NULL),
(33, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'user', 'DHO-495527', 'BDT', NULL, '2020-01-29 13:23:27', NULL),
(34, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'user', 'DHO-495527', 'BDT', NULL, '2020-01-29 13:24:37', NULL),
(35, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-27 12:03:28', 'Web-Server', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-29 13:47:47', NULL),
(36, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-27 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'https://dianahost.com', 'active', 'on', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-29 13:47:52', NULL),
(37, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Domain', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'https://dianahost.com', 'active', 'on', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-29 13:48:17', NULL),
(38, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Hosting', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', '1', 1, 'user', 'DHO-480589', 'BDT', NULL, '2020-01-29 14:01:21', NULL),
(39, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', 'on', 1, 'user', 'DHO-495527', 'USD', NULL, '2020-01-29 14:03:32', NULL),
(40, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', 'off', 1, 'user', 'DHO-495527', 'USD', NULL, '2020-01-29 14:27:33', NULL),
(41, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Hosting', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', 'off', 1, 'user', 'DHO-480589', 'BDT', NULL, '2020-01-29 14:27:51', NULL),
(42, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Hosting', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'https://dianahost.com', 'pending', 'on', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-29 14:28:31', NULL),
(43, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Hosting', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'user', 'DHO-480589', 'BDT', NULL, '2020-01-29 14:30:09', NULL),
(44, 'Highly maintain the compliance', 'sdsds', '2020-01-27 17:23:42', '2020-01-31 17:23:43', 'Hosting', 'Regular', 'wertyhuj', 'asdfgbvfcs', '15151514141', 'adfvgbfvdc werfds wergfd', '20', 'sdfghngfdsdfghnhbvdsdfghnbvfds', 'https://dianahost.com', 'pending', 'off', 1, 'admin', 'DHO-480589', 'BDT', NULL, '2020-01-29 14:32:33', NULL),
(45, 'uncompromising quality', 'sdsds', '2020-01-27 21:38:30', '2020-01-31 21:38:31', 'Domain', 'Exclusive', 'rf6guhi', 'asdfgbvfcs', '151515100000', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'pending', 'on', 1, 'user', 'DHO-495527', 'USD', NULL, '2020-01-31 10:31:06', NULL),
(46, '.com', 'sdsds', '2020-01-28 12:03:28', '2020-01-31 12:03:28', 'Web-Server', 'Special', 'rtyughiuytcyvub', 'asdfgbvfcs', '151515111111', 'adfvgbfvdc werfds wergfd', '455', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'admin', 'DHO-626541', 'BDT', NULL, '2020-01-31 11:09:18', NULL),
(47, '.bd', 'sdsds', '2020-01-28 17:10:17', '2020-01-31 17:10:18', 'Web-Server', 'Exclusive', 'sdfghjk', 'asdfgbvfcs', '1515151', NULL, '1600', 'sdfghngfdsdfghnhbvdsdfghnbvfds', NULL, 'active', 'on', 1, 'admin', 'DHO-592339', 'BDT', NULL, '2020-02-02 05:33:49', NULL),
(48, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:21:27', NULL),
(49, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:26:27', NULL),
(50, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:27:31', NULL),
(51, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:28:38', NULL),
(52, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:44:09', NULL),
(53, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:57:47', NULL),
(54, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 10:59:36', NULL),
(55, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf', 'Dianahost', 'dfsdf', NULL, '123', 'afSDFASDF', NULL, 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 11:00:14', NULL),
(56, '.COM + 5GB SSD', '.COM is a tld', '2020-01-29 20:45:52', '2020-01-31 20:45:52', 'Combo', 'Regular', 'sdfasdfasdf?', 'Dianahost', 'dfsdf', 'tdyyj', '123', 'afSDFASDF', 'fukgukg', 'pending', 'on', 1, 'admin', 'DHO-509158', 'USD', NULL, '2020-03-03 11:11:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` double(8,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `mobile`, `user_type`, `country`, `organization`, `address`, `city`, `post_code`, `balance`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sifat', 'Sifat Rahman', 'sifat.ezzyr@gmail.com', '$2y$10$sOkCfbhiVpbmOqGV8jzZ8O1wBJFYtwdp1GFEmvaIYd.WhZKPTdA0a', '12121212', 'user', 'asdsadfsd', NULL, 'asasasas1111', 'asdasd', 'asdasd', NULL, '1', NULL, 'lVkeGauiLrkEyV5yRbQTONJROIqOGYJkIhCGQvw9DBM3vhf1debVasSUHQjW', '2020-01-26 05:58:01', NULL),
(4, 'DHO', 'Sifat Rahman', 'sifat1.ezzyr@gmail.com', '$2y$10$V9GPzUfm27SIapicWPStNO583mzfyH1K7haMYvpyJANoi0q1TI9iq', '01010101010111111', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '7XbpHIqWZspakXGR5lIEj8nePMILqK6FCmXbmDC8Q6ksXnA0PkEiTFX5vcEZ', '2020-01-26 05:58:01', '2020-02-01 05:00:03'),
(5, 'DEMO', 'Sifat Rahman', 'syedsifat02@gmail.com', '$2y$10$ahYnC8ALSBDom06pKZjfkOGs2fi6QkHRRmmcsE0MJ4QpxXXIZA0Mu', NULL, 'user', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'zSz69nF5TfaJ6b3Lzh5jWOPcD5XhiWUz87VAuOqDDswKgSTPGw8E2LCIHlxr', '2020-01-27 23:56:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_history`
--
ALTER TABLE `product_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_history`
--
ALTER TABLE `product_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
