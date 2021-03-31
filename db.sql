-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 07:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `section_heading`, `heading`, `description`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'What is AXTRADER?', 'With the help of AX TRADER, you are able to earn money without leaving your home, and whats more, without making any risky decisions. We have developed a system that guarantees constant passive income in 3 investment plans. Our company is located in London, we gather people with great experience and trading skills in all international markets. We use professional, advanced tools that are not available to average users. Our analyzes diversify any risk of loss. The capital owned by our company guarantees the actions of our employees, because the profit is guaranteed for investors. How much can you earn by investing with us? 3% to 5% of total passive income per day. The return of the invested deposit is usually returned after 30, 40 or 50 days. Due to our complete transparency to investors, we offer the possibility to cancel your deposit and withdraw it at any time. We offer an easy-to-use interface, thanks to which you can start your adventure with investing in a few minutes', 'https://www.youtube.com/embed/0s1DBwqGrfg', '2021-03-08 17:53:04', '2021-03-08 18:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `banner_details`
--

CREATE TABLE `banner_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_details`
--

INSERT INTO `banner_details` (`id`, `heading_one`, `heading_two`, `description_one`, `description_two`, `created_at`, `updated_at`) VALUES
(1, 'AX TRADER', 'Advanced Asset Management', 'Use our Investment plan and get up to 350% Return', 'Cancel Your Deposit at any time', '2021-03-08 16:04:43', '2021-03-08 17:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_headings`
--

CREATE TABLE `contact_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_headings`
--

INSERT INTO `contact_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'If you have any questions about our company or need help with our service, please dont hesitate to contact us. We will reply as soon as possible.', '2021-03-12 17:20:51', '2021-03-13 17:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, '2 Crawford Place, London, W1H 5NA United Kingdom', 'info@axtrader.com', '2021-03-12 18:15:15', '2021-03-13 17:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `conters`
--

CREATE TABLE `conters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `count_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conters`
--

INSERT INTO `conters` (`id`, `count`, `count_title`, `created_at`, `updated_at`) VALUES
(1, 67, 'Days Online', '2021-03-09 16:51:08', NULL),
(2, 29358, 'Registered Members', '2021-03-09 16:54:40', NULL),
(3, 29358, 'Current Deposits', '2021-03-09 16:55:24', '2021-03-09 17:16:59'),
(4, 2493113, 'Total Withdrawals', '2021-03-09 16:56:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'what', 'nothing', '2021-03-10 15:58:00', '2021-03-10 16:00:31'),
(2, 'what', 'nothing', '2021-03-12 17:18:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `how_to_uses`
--

CREATE TABLE `how_to_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stap_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_to_uses`
--

INSERT INTO `how_to_uses` (`id`, `stap_title`, `heading`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'STEP 3', 'Enjoy your Profitss', 'You will receive profit accruals every 24 hours after you made your deposit. 7 days in a week.s', '1.png', '2021-03-10 14:35:19', '2021-03-12 17:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2021-03-08 14:54:22', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_08_205315_create_logos_table', 2),
(5, '2021_03_08_215532_create_banner_details_table', 3),
(6, '2021_03_08_235021_create_about_details_table', 4),
(7, '2021_03_09_001422_create_standouts_table', 5),
(8, '2021_03_09_001435_create_standout_headings_table', 5),
(9, '2021_03_09_224851_create_conters_table', 6),
(10, '2021_03_09_232238_create_referral_programs_table', 7),
(11, '2021_03_10_193020_create_use_headings_table', 8),
(12, '2021_03_10_200310_create_how_to_uses_table', 9),
(13, '2021_03_10_213707_create_faqs_table', 10),
(14, '2021_03_10_231800_create_socials_table', 11),
(15, '2021_03_11_003702_create_payments_table', 12),
(16, '2021_03_11_233700_create_plan_headings_table', 13),
(17, '2021_03_12_003524_create_plan_ones_table', 14),
(18, '2021_03_12_003731_create_plan_one_titles_table', 14),
(19, '2021_03_12_012051_create_plan_twos_table', 15),
(20, '2021_03_12_012111_create_plan_two_titles_table', 15),
(21, '2021_03_12_015025_create_plan_threes_table', 16),
(22, '2021_03_12_015039_create_plan_three_titles_table', 16),
(23, '2021_03_12_231903_create_contact_headings_table', 17),
(24, '2021_03_12_233806_create_visitor_messages_table', 18),
(25, '2021_03_13_001357_create_contact_infos_table', 19),
(26, '2021_03_14_222913_create_plan_four_titles_table', 20),
(27, '2021_03_14_222939_create_plan_fours_table', 20),
(28, '2021_03_14_223030_create_plan_five_titles_table', 20),
(29, '2021_03_14_223044_create_plan_fives_table', 20),
(30, '2021_03_14_223101_create_plan_six_titles_table', 20),
(31, '2021_03_14_223232_create_plan_seven_titles_table', 20),
(32, '2021_03_14_223245_create_plan_sevens_table', 20),
(33, '2021_03_14_223512_create_plan_sixes_table', 20);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_title`, `payment_thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'Perfect Money', '2.png', NULL, '2021-03-10 19:17:44'),
(3, 'Bitcoin', '3.png', NULL, '2021-03-14 18:14:01'),
(4, 'Litecoin', '4.png', NULL, '2021-03-14 18:14:14'),
(5, 'Ethereum', '5.png', NULL, '2021-03-14 18:14:24'),
(6, 'DogeCoin', '6.png', NULL, '2021-03-14 18:14:33'),
(7, 'Dash', '7.png', NULL, '2021-03-14 18:14:42'),
(8, 'Bitcoin Cash', '8.png', NULL, '2021-03-14 18:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `plan_fives`
--

CREATE TABLE `plan_fives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_fives`
--

INSERT INTO `plan_fives` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(3, 'Earnings paid every 24h', NULL, NULL),
(4, 'Deposit Return after 60 days', NULL, '2021-03-14 18:10:49'),
(5, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_five_titles`
--

CREATE TABLE `plan_five_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_five_titles`
--

INSERT INTO `plan_five_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '3', '60', '5000', '10000', '2021-03-14 16:39:24', '2021-03-16 18:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `plan_fours`
--

CREATE TABLE `plan_fours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_fours`
--

INSERT INTO `plan_fours` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(4, 'Earnings paid every 24h', NULL, NULL),
(5, 'Deposit Return after 50 days', NULL, '2021-03-14 18:11:06'),
(6, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_four_titles`
--

CREATE TABLE `plan_four_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_four_titles`
--

INSERT INTO `plan_four_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '2', '50', '3000', '4999', '2021-03-14 16:38:48', '2021-03-16 18:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `plan_headings`
--

CREATE TABLE `plan_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_headings`
--

INSERT INTO `plan_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Investment Plans', 'Depending on the amount of your investment, you can use one of the three investment plans. You can have several different plans under one account.', '2021-03-11 18:09:10', '2021-03-11 18:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `plan_ones`
--

CREATE TABLE `plan_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_ones`
--

INSERT INTO `plan_ones` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(5, 'Earnings paid every 24h', NULL, NULL),
(6, 'Deposit Return after 30 days', NULL, NULL),
(7, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_one_titles`
--

CREATE TABLE `plan_one_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_one_titles`
--

INSERT INTO `plan_one_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '0.5', '30', '1', '499', '2021-03-11 18:39:14', '2021-03-16 17:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `plan_sevens`
--

CREATE TABLE `plan_sevens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_sevens`
--

INSERT INTO `plan_sevens` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(3, 'Earnings paid every 24h', NULL, NULL),
(4, 'Deposit Return after 100 days', NULL, NULL),
(5, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_seven_titles`
--

CREATE TABLE `plan_seven_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_seven_titles`
--

INSERT INTO `plan_seven_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '10', '100', '5000', '50000', '2021-03-14 16:43:02', '2021-03-16 18:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `plan_sixes`
--

CREATE TABLE `plan_sixes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_sixes`
--

INSERT INTO `plan_sixes` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(3, 'Earnings paid every 24h', NULL, NULL),
(4, 'Deposit Return after 80 days', NULL, '2021-03-14 18:07:43'),
(6, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_six_titles`
--

CREATE TABLE `plan_six_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_six_titles`
--

INSERT INTO `plan_six_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '4', '80', '3000', '25000', '2021-03-14 16:42:36', '2021-03-16 18:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `plan_threes`
--

CREATE TABLE `plan_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_threes`
--

INSERT INTO `plan_threes` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(3, 'Earnings paid every 24h', NULL, NULL),
(4, 'Deposit Return after 45 days', NULL, '2021-03-14 18:11:20'),
(5, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_three_titles`
--

CREATE TABLE `plan_three_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_three_titles`
--

INSERT INTO `plan_three_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '1.5', '45', '1500', '2999', '2021-03-11 20:06:26', '2021-03-16 18:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `plan_twos`
--

CREATE TABLE `plan_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_twos`
--

INSERT INTO `plan_twos` (`id`, `plan_item`, `created_at`, `updated_at`) VALUES
(5, 'Earnings paid every 24h', NULL, NULL),
(6, 'Deposit Return after 40 days', NULL, '2021-03-14 18:11:30'),
(7, 'Cancel Deposit at any time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_two_titles`
--

CREATE TABLE `plan_two_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_parcent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_minimum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_maximum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_two_titles`
--

INSERT INTO `plan_two_titles` (`id`, `plan_parcent`, `plan_time`, `plan_minimum`, `plan_maximum`, `created_at`, `updated_at`) VALUES
(1, '1', '40', '500', '1499', '2021-03-11 19:37:29', '2021-03-16 17:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `referral_programs`
--

CREATE TABLE `referral_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referral_programs`
--

INSERT INTO `referral_programs` (`id`, `heading`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'REFERRAL PROGRAM', 'With our referral program, you can earn money by advertising our system to others. Build the best team with us. We offer 3-level referral program with 5%-2%-1% commission.Try to convince as many people as possible, each new person is an additional income for you. Send your referral link to companions, family and share them on online media. We will provide you with all the information and necessary advertising materials. Record a video showing how you invest, share proofs of your payouts. We give you full freedom in advertising your reference link. The referral program earnings are unlimited, your structure can have a virtually infinite number of users, and your commissions will be paid immediately upon receipt.', '1.gif', '2021-03-09 17:34:36', '2021-03-09 18:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_icon`, `social_link`, `created_at`, `updated_at`) VALUES
(2, 'fab fa-facebook-f', '#', NULL, '2021-03-14 17:56:14'),
(3, 'fab fa-telegram-plane fa-fw', '#', NULL, NULL),
(4, 'fab fa-twitter fa-fw', '#', NULL, NULL),
(6, 'fab fa-instagram fa-fw', '#', NULL, NULL),
(7, 'fab fa-youtube fa-fw', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `standouts`
--

CREATE TABLE `standouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standouts`
--

INSERT INTO `standouts` (`id`, `icon`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-08 19:23:45', '2021-03-08 19:31:24'),
(3, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-12 16:56:42', NULL),
(4, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-12 16:57:02', NULL),
(5, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-12 16:57:12', NULL),
(6, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-12 16:57:31', NULL),
(7, 'fas fa-hand-holding-usd', 'Daily Income', 'You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.', '2021-03-12 16:57:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `standout_headings`
--

CREATE TABLE `standout_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standout_headings`
--

INSERT INTO `standout_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What Makes Us Stand Out', 'What makes our investment system distinguish us from others and is the best in the market?', '2021-03-08 18:29:27', '2021-03-12 16:54:02');

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
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `role` int(2) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$OB3cjEorh/hxUD8fS5eFrOZFXyM3SVoDcICZTXEFcsICcOGS9YTd.', 'default.jpg', 2, NULL, '2021-03-14 15:58:44', '2021-03-14 15:58:44'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$bSoB0cWTeWPgpwbYGC83J.dWRbTE7zhYhpJluyU.kbrmnEZT217US', 'default.jpg', 1, NULL, '2021-03-14 16:00:37', '2021-03-14 16:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `use_headings`
--

CREATE TABLE `use_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `use_headings`
--

INSERT INTO `use_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'How to Use AXTRADER.com ?', 'Only 3 simple steps will allow you to invest and start earning with our guaranteed daily profit system.', '2021-03-10 13:33:17', '2021-03-10 13:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_messages`
--

CREATE TABLE `visitor_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_messages`
--

INSERT INTO `visitor_messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456789', NULL, NULL),
(2, 'Admin', 'admin@gmail.com', 'dsfdfsfsfdsf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_details`
--
ALTER TABLE `banner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_headings`
--
ALTER TABLE `contact_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conters`
--
ALTER TABLE `conters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_to_uses`
--
ALTER TABLE `how_to_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_fives`
--
ALTER TABLE `plan_fives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_five_titles`
--
ALTER TABLE `plan_five_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_fours`
--
ALTER TABLE `plan_fours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_four_titles`
--
ALTER TABLE `plan_four_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_headings`
--
ALTER TABLE `plan_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_ones`
--
ALTER TABLE `plan_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_one_titles`
--
ALTER TABLE `plan_one_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_sevens`
--
ALTER TABLE `plan_sevens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_seven_titles`
--
ALTER TABLE `plan_seven_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_sixes`
--
ALTER TABLE `plan_sixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_six_titles`
--
ALTER TABLE `plan_six_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_threes`
--
ALTER TABLE `plan_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_three_titles`
--
ALTER TABLE `plan_three_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_twos`
--
ALTER TABLE `plan_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_two_titles`
--
ALTER TABLE `plan_two_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_programs`
--
ALTER TABLE `referral_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standouts`
--
ALTER TABLE `standouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standout_headings`
--
ALTER TABLE `standout_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `use_headings`
--
ALTER TABLE `use_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_messages`
--
ALTER TABLE `visitor_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_details`
--
ALTER TABLE `banner_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_headings`
--
ALTER TABLE `contact_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conters`
--
ALTER TABLE `conters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `how_to_uses`
--
ALTER TABLE `how_to_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plan_fives`
--
ALTER TABLE `plan_fives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plan_five_titles`
--
ALTER TABLE `plan_five_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_fours`
--
ALTER TABLE `plan_fours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plan_four_titles`
--
ALTER TABLE `plan_four_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_headings`
--
ALTER TABLE `plan_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_ones`
--
ALTER TABLE `plan_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan_one_titles`
--
ALTER TABLE `plan_one_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_sevens`
--
ALTER TABLE `plan_sevens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plan_seven_titles`
--
ALTER TABLE `plan_seven_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_sixes`
--
ALTER TABLE `plan_sixes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plan_six_titles`
--
ALTER TABLE `plan_six_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_threes`
--
ALTER TABLE `plan_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plan_three_titles`
--
ALTER TABLE `plan_three_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_twos`
--
ALTER TABLE `plan_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan_two_titles`
--
ALTER TABLE `plan_two_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referral_programs`
--
ALTER TABLE `referral_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `standouts`
--
ALTER TABLE `standouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `standout_headings`
--
ALTER TABLE `standout_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `use_headings`
--
ALTER TABLE `use_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_messages`
--
ALTER TABLE `visitor_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
