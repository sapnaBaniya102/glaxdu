-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2021 at 10:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galxdu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', '$2y$10$UmBa8Od149Qi50T3hIYFxO5/AtyXIx6gKxRWPLn4x/yul8cFVukX.', '2021-10-11 10:22:41', '2021-10-11 10:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

DROP TABLE IF EXISTS `admissions`;
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `email`, `phone`, `address`, `skill`, `gender`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', '9827190713', 'nayabazar', 'C++', 'Female', 'sacbjhsd', '2021-10-12 06:36:08', '2021-10-12 06:36:08'),
(2, 'Sapna Bnaiya', 'sapna123@gmail.com', '9827190713', 'nayabazar', 'C++', 'Female', 'jhdfuwrsd', '2021-10-12 06:38:49', '2021-10-12 06:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tittle`, `text`, `img_link`, `details`, `status`, `category`, `created_at`, `updated_at`) VALUES
(1, 'One Year Membership - Graphic Design', 'et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'slider1_1633968748.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', 'BBA', '2021-10-11 23:40:10', '2021-10-11 23:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursecats`
--

DROP TABLE IF EXISTS `coursecats`;
CREATE TABLE IF NOT EXISTS `coursecats` (
  `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecats`
--

INSERT INTO `coursecats` (`c_id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Active', '2021-10-11 21:35:05', '2021-10-11 21:35:05'),
(2, 'BCA', 'Active', '2021-10-11 21:35:12', '2021-10-11 21:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student` int(11) NOT NULL,
  `imglink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `text`, `time`, `duration`, `student`, `imglink`, `c_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Numerical Method', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '10:17:00', '1', 25, 'slider1_1633968748.jpg', 1, 'Active', '2021-10-11 21:48:01', '2021-10-11 21:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `tittle`, `date`, `time`, `address`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'One Year Membership - Graphic Design', '2021-10-13', '13:27', 'nayabazar', 'slider_1633859257.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-11 22:58:09', '2021-10-11 22:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `file_link`, `extension`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'slider1_1633968748.jpg', 'jpg', NULL, 1, '2021-10-11 10:27:29', '2021-10-11 10:27:29'),
(2, 'slider2', 'slider2_1633968789.jpg', 'jpg', NULL, 1, '2021-10-11 10:28:10', '2021-10-11 10:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `img_link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'gallery1', 'slider1_1633968748.jpg', 'Active', '2021-10-11 22:51:45', '2021-10-11 22:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', 'Computer Science', 'sajch8qhosdjbfiheu', '2021-10-12 03:07:42', '2021-10-12 03:07:42'),
(2, 'Rishi Khanal', 'sapna@gmail.com', 'Computer Science', 'wytuerjfvbid', '2021-10-12 03:14:40', '2021-10-12 03:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_10_11_104653_create_siteconfigs_table', 1),
(2, '2021_10_11_104724_create_sliders_table', 2),
(3, '2021_10_11_104743_create_notices_table', 3),
(4, '2021_10_11_104803_create_results_table', 4),
(5, '2021_10_11_104820_create_courses_table', 5),
(6, '2021_10_11_104833_create_coursecats_table', 6),
(7, '2021_10_11_104849_create_teachers_table', 7),
(8, '2021_10_11_104908_create_galleries_table', 8),
(9, '2021_10_11_105000_create_events_table', 9),
(10, '2021_10_11_105021_create_news_table', 10),
(11, '2021_10_11_105042_create_blogs_table', 11),
(12, '2021_10_11_105111_create_admissions_table', 12),
(13, '2021_10_11_105154_create_files_table', 13),
(14, '2021_10_11_105234_create_admin_users_table', 14),
(15, '2021_10_11_151328_create_whychooseuses_table', 15),
(16, '2021_10_12_114241_create_admissions_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `details`, `status`, `imglink`, `created_at`, `updated_at`, `category`) VALUES
(2, 'Global Conference on Business.', 'sports makes you fit and you should be interested in it.', '2021-10-12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', 'Active', 'slider1_1633968748.jpg', '2021-10-12 01:36:38', '2021-10-12 01:36:38', 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `heading`, `date`, `detail`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Testing is a great thing.', '2021-10-13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', 'BBA', 'Active', '2021-10-11 12:32:31', '2021-10-11 12:32:31'),
(2, 'A variation of the ordinary.', '2021-10-12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', 'BCA', 'Active', '2021-10-11 12:33:01', '2021-10-11 12:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Global Conference on Business.', '2021-10-27', 'http://127.0.0.1:8000/siteconfig', 'Active', '2021-10-11 21:07:15', '2021-10-11 21:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

DROP TABLE IF EXISTS `siteconfigs`;
CREATE TABLE IF NOT EXISTS `siteconfigs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `site_key`, `site_value`, `site_name`, `imglink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam, quis nostrud exer citation ullamco laboris nisi ut perspiciatis unde omnis iste natus error sit voluptate.', 'Welcome To Glaxdu', 'slider2_1633968789.jpg', 'Active', '2021-10-11 11:22:23', '2021-10-11 11:22:23'),
(2, 'chooseus', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam, quis nostrud exer citation ullamco laboris nisi ut perspiciatis unde omnis iste natus error sit voluptate.', 'Why Choose Us?', 'slider2_1633968789.jpg', 'Active', '2021-10-11 11:26:19', '2021-10-11 11:26:19'),
(3, 'achievmenmt', '160', 'AWARD WINNING', '-', 'Active', '2021-10-11 11:42:17', '2021-10-11 11:42:17'),
(4, 'achievmenmt', '200', 'GRADUATE', '-', 'Active', '2021-10-11 11:42:40', '2021-10-11 11:42:40'),
(5, 'achievmenmt', '200', 'FACULTIES', '-', 'Active', '2021-10-11 11:43:16', '2021-10-11 11:43:16'),
(6, 'achievmenmt', '300', 'AWARD WINNING', '-', 'Active', '2021-10-11 11:43:57', '2021-10-11 11:43:57'),
(7, 'introduction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Introduction', 'slider1_1633968748.jpg', 'Active', '2021-10-11 11:49:29', '2021-10-11 11:49:29'),
(8, 'objective', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Objectives', 'slider1_1633968748.jpg', 'Active', '2021-10-11 11:56:11', '2021-10-11 11:56:11'),
(9, 'mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Aempor incididunt ut labore ejam.', 'slider1_1633968748.jpg', 'Active', '2021-10-11 12:04:14', '2021-10-11 12:04:14'),
(10, 'mission', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Social Sciences & Education.', 'slider1_1633968748.jpg', 'Select', '2021-10-11 12:04:47', '2021-10-11 12:04:47'),
(11, 'vision', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Hempor incididunt ut labore et dolore mm, <br> itation ullamco laboris nisi ut aliquip.', 'slider1_1633968748.jpg', 'Active', '2021-10-11 12:10:10', '2021-10-11 12:10:10'),
(12, 'vision', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Aempor incididunt ut labore ejam.', 'slider1_1633968748.jpg', 'Active', '2021-10-11 12:11:13', '2021-10-11 12:11:13'),
(13, 'message-from-principal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'MessageFrom Principle', 'slider1_1633968748.jpg', 'Active', '2021-10-11 12:15:08', '2021-10-11 12:15:08'),
(14, 'message-from-dean', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Message from Dean', 'slider1_1633968748.jpg', 'Active', '2021-10-11 12:15:50', '2021-10-11 12:15:50'),
(15, 'location', 'Uttara, Dhaka, Bangladesh', 'location', '-', 'Active', '2021-10-12 03:54:23', '2021-10-12 03:54:23'),
(16, 'phone', '9828222222', 'phone', '-', 'Active', '2021-10-12 03:54:49', '2021-10-12 03:54:49'),
(17, 'email', 'education@email.com', 'email', '-', 'Active', '2021-10-12 03:55:38', '2021-10-12 03:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `header`, `sub_heading`, `text`, `img_link`, `btn`, `btnlink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider', 'MakeYour Own World', '-', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', 'slider1_1633968748.jpg', 'About Us', 'aboutus', 'Active', '2021-10-11 10:30:25', '2021-10-11 10:30:25'),
(2, 'slider', 'Learn Plus template', '-', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur', 'slider2_1633968789.jpg', 'About Us', 'aboutus', 'Active', '2021-10-11 10:31:19', '2021-10-11 10:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `post`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rishi Khanal', 'Supervisor', 'teacher_1633867556.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-11 22:34:06', '2021-10-11 22:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuses`
--

DROP TABLE IF EXISTS `whychooseuses`;
CREATE TABLE IF NOT EXISTS `whychooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
