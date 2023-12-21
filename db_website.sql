-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 06:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayam_lastupdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayam`
--

CREATE TABLE `ayam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_ayam_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ayam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ayam`
--

INSERT INTO `ayam` (`id`, `jenis_ayam_id`, `kode_ayam`, `berat`, `status`, `usia`, `kategori_id`, `deskripsi`, `cover`, `created_at`, `updated_at`) VALUES
(5, 'Pakhoy', 'KD20238100001', '2', 'Ready Stok', '3', '1', 'Ayam Import', '1692266229_ayam cimani.jpg', '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(6, 'Mangon', 'KD2023838100002', '2', 'Ready Stok', '3', '1', 'Ayam Import', '1692266268_ayam pelung - Copy.jpg', '2023-08-17 02:57:48', '2023-08-17 02:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `user`, `judul`, `tanggal`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Kolektor Ayam', '2023-06-19', 'Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna', '230619063936.jpg', '2023-06-18 23:39:36', '2023-06-18 23:39:36'),
(5, 'Admin', 'Festival Ayam', '2023-07-04', 'Diam dolor diam ipsum tempor sit. Clita erat ipsum et lorem stet no labore lorem sit clita duo justo magna dolore', '230704032435.jpg', '2023-07-03 20:24:35', '2023-07-03 20:24:35'),
(6, 'Admin', 'Jasa Pengiriman Ayam', '2023-07-07', 'Mengenal Jasa pengiriman ayam untuk ekportir Ayam ke luar negeri mengunakan jasa ekspedisi DHL express, yang biayanya menggunakan permin dan bisa diangsur sesuai kesepakatan', '230707025912.jpg', '2023-07-06 19:59:12', '2023-07-06 19:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama`, `komen`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'KFC', 'Sangat Puas tehadap peternakan ayam ini ,, semoga bisa menjadi partnership yang baik di masa-masa yang akan datang', '230619044400.jpg', '2023-06-18 21:44:00', '2023-06-18 21:44:00'),
(2, 'Farm', 'Sangat Puas tehadap peternakan ayam ini ,, semoga bisa menjadi partnership yang baik di masa-masa yang akan datang', '230622024040.png', '2023-06-21 19:40:41', '2023-06-21 19:40:41'),
(3, 'Chiken Farm', 'Semoga Mejadi Partrner yang Bisa mendukung Supplier', '230622024451.png', '2023-06-21 19:44:51', '2023-06-21 19:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `nama`, `judul`, `isi`, `tagline`, `isi_tag`, `visi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Info', 'Festifal Ayam', 'Festifal', 'Info', 'VISI', '1', NULL, NULL);

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `ayam_id`, `created_at`, `updated_at`) VALUES
(1, '1688891086_1.jpeg', 1, '2023-07-09 01:24:46', '2023-07-09 01:24:46'),
(2, '1688891086_1.jpg', 1, '2023-07-09 01:24:46', '2023-07-09 01:24:46'),
(3, '1688891086_4.jpg', 1, '2023-07-09 01:24:46', '2023-07-09 01:24:46'),
(4, '1688891087_5.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(5, '1688891087_6.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(6, '1688891087_7.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(7, '1688891087_8.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(8, '1688891087_10.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(9, '1688891087_11.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(10, '1688891087_13.jpg', 1, '2023-07-09 01:24:47', '2023-07-09 01:24:47'),
(11, '1688891843_8.jpg', 2, '2023-07-09 01:37:23', '2023-07-09 01:37:23'),
(12, '1688891843_9.jpg', 2, '2023-07-09 01:37:23', '2023-07-09 01:37:23'),
(13, '1688891843_10.jpg', 2, '2023-07-09 01:37:23', '2023-07-09 01:37:23'),
(14, '1688891843_11.jpg', 2, '2023-07-09 01:37:23', '2023-07-09 01:37:23'),
(15, '1689149630_2.jpeg', 5, '2023-07-12 01:13:50', '2023-07-12 01:13:50'),
(16, '1689149630_2.jpg', 5, '2023-07-12 01:13:50', '2023-07-12 01:13:50'),
(17, '1689149630_3.jpeg', 5, '2023-07-12 01:13:50', '2023-07-12 01:13:50'),
(18, '1689150489_16.jpg', 6, '2023-07-12 01:28:09', '2023-07-12 01:28:09'),
(19, '1689150639_15.jpg', 7, '2023-07-12 01:30:39', '2023-07-12 01:30:39'),
(20, '1689150640_16.jpg', 7, '2023-07-12 01:30:40', '2023-07-12 01:30:40'),
(21, '1689150640_17.jpg', 7, '2023-07-12 01:30:40', '2023-07-12 01:30:40'),
(22, '1689150640_18.jpg', 7, '2023-07-12 01:30:40', '2023-07-12 01:30:40'),
(23, '1689150895_5.jpg', 8, '2023-07-12 01:34:55', '2023-07-12 01:34:55'),
(24, '1689150895_9.jpg', 8, '2023-07-12 01:34:55', '2023-07-12 01:34:55'),
(25, '1689151075_1.jpeg', 9, '2023-07-12 01:37:55', '2023-07-12 01:37:55'),
(26, '1689151075_3.jpeg', 9, '2023-07-12 01:37:55', '2023-07-12 01:37:55'),
(27, '1689151130_8.jpg', 10, '2023-07-12 01:38:50', '2023-07-12 01:38:50'),
(28, '1689151190_7.jpg', 11, '2023-07-12 01:39:50', '2023-07-12 01:39:50'),
(29, '1689323480_11.jpg', 12, '2023-07-14 01:31:20', '2023-07-14 01:31:20'),
(30, '1689323569_ayam cimani.jpg', 13, '2023-07-14 01:32:49', '2023-07-14 01:32:49'),
(31, '1689324545_kaki ayam 4.jpg', 14, '2023-07-14 01:49:05', '2023-07-14 01:49:05'),
(32, '1689324639_kepala ayam3.jpg', 15, '2023-07-14 01:50:39', '2023-07-14 01:50:39'),
(33, '1689325585_kepala ayam.jpg', 16, '2023-07-14 02:06:25', '2023-07-14 02:06:25'),
(34, '1689325710_ayam bali.jpg', 17, '2023-07-14 02:08:30', '2023-07-14 02:08:30'),
(35, '1689326194_kepala ayam1.jpg', 18, '2023-07-14 02:16:34', '2023-07-14 02:16:34'),
(36, '1689326543_badan ayam3.jpg', 19, '2023-07-14 02:22:23', '2023-07-14 02:22:23'),
(37, '1689326615_ayam ciparage.jpg', 20, '2023-07-14 02:23:36', '2023-07-14 02:23:36'),
(38, '1691640137_ayam cimani.jpg', 21, '2023-08-09 21:02:17', '2023-08-09 21:02:17'),
(39, '1691640137_ayam ciparage.jpg', 21, '2023-08-09 21:02:17', '2023-08-09 21:02:17'),
(40, '1691640138_ayam pelung.jpg', 21, '2023-08-09 21:02:18', '2023-08-09 21:02:18'),
(41, '1691640138_ayam phoenix.jpg', 21, '2023-08-09 21:02:18', '2023-08-09 21:02:18'),
(42, '1691640138_ayam pulung.jpg', 21, '2023-08-09 21:02:18', '2023-08-09 21:02:18'),
(43, '1691640138_ayam tukung.jpg', 21, '2023-08-09 21:02:18', '2023-08-09 21:02:18'),
(44, '1691816227_ayam cimani.jpg', 1, '2023-08-11 21:57:07', '2023-08-11 21:57:07'),
(45, '1691816311_badan ayam2.jpg', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(46, '1691816312_badan ayam3.jpg', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(47, '1691816312_badan ayam4.jpg', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(48, '1691816312_download.png', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(49, '1691816312_images.png', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(50, '1691816312_kaki ayam 1.jpg', 2, '2023-08-11 21:58:32', '2023-08-11 21:58:32'),
(51, '1691835501_ayam bali.jpg', 1, '2023-08-12 03:18:21', '2023-08-12 03:18:21'),
(52, '1691835550_ayam pelung - Copy.jpg', 2, '2023-08-12 03:19:10', '2023-08-12 03:19:10'),
(53, '1691835551_ayam pulung - Copy.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(54, '1691835551_ayam pulung.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(55, '1691835551_ayam tukung - Copy.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(56, '1691835551_ayam tukung.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(57, '1691835551_badan ayam1.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(58, '1691835551_badan ayam4.jpg', 2, '2023-08-12 03:19:11', '2023-08-12 03:19:11'),
(59, '1691841463_ayam bali.jpg', 4, '2023-08-12 04:57:43', '2023-08-12 04:57:43'),
(60, '1691841463_ayam cimani.jpg', 4, '2023-08-12 04:57:43', '2023-08-12 04:57:43'),
(61, '1691841463_ayam ciparage.jpg', 4, '2023-08-12 04:57:43', '2023-08-12 04:57:43'),
(62, '1691841463_ayam pelung - Copy.jpg', 4, '2023-08-12 04:57:43', '2023-08-12 04:57:43'),
(63, '1691841463_ayam pelung.jpg', 4, '2023-08-12 04:57:43', '2023-08-12 04:57:43'),
(64, '1692266229_ayam bali.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(65, '1692266229_ayam cimani.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(66, '1692266229_ayam ciparage.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(67, '1692266229_ayam pelung - Copy.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(68, '1692266229_ayam pelung.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(69, '1692266229_ayam phoenix.jpg', 5, '2023-08-17 02:57:09', '2023-08-17 02:57:09'),
(70, '1692266268_badan ayam1.jpg', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48'),
(71, '1692266268_badan ayam2.jpg', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48'),
(72, '1692266268_badan ayam3.jpg', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48'),
(73, '1692266268_badan ayam4.jpg', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48'),
(74, '1692266268_download.png', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48'),
(75, '1692266268_images.png', 6, '2023-08-17 02:57:48', '2023-08-17 02:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'OB', NULL, NULL),
(2, 'Direktur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ayam`
--

CREATE TABLE `jenis_ayam` (
  `id` bigint(255) NOT NULL,
  `jenis_ayam` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_ayam`
--

INSERT INTO `jenis_ayam` (`id`, `jenis_ayam`, `created_at`, `updated_at`) VALUES
(1, 'Pakhoy', '2023-07-04 05:44:14', NULL),
(2, 'Mangon', '2023-07-03 09:08:18', NULL),
(3, 'Bangkok', '2023-07-03 02:08:47', '2023-07-03 09:08:47'),
(4, 'Cimani', '2023-07-06 19:59:57', '2023-07-07 02:59:57'),
(5, 'Ayam Bali', '2023-08-17 20:58:01', '2023-08-18 03:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_ayam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `jenis_ayam`, `created_at`, `updated_at`) VALUES
(1, 'Jantan', '2023-06-18 06:17:51', '2023-06-18 06:17:51'),
(2, 'Betina', '2023-06-18 07:21:49', '2023-06-18 07:21:49'),
(3, 'Anakan', '2023-06-18 07:21:57', '2023-06-18 07:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'Bunga', NULL, NULL),
(2, 'Mawar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ayam_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `ayam_id`, `qty`, `users_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '5', 2, 4, 1, NULL, NULL),
(2, '5', 1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `no_telp`, `email`, `facebook`, `twiter`, `instagram`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '08128095212', 'Email@gmail.com', 'facebook.com', 'twiter.com', 'instagram.com', 'Jl Surabaya', NULL, NULL);

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
(8, '2023_05_31_021315_add_foto_to_siswa_table', 1),
(9, '2023_06_03_024215_create_jabatans_table', 1),
(10, '2023_06_18_123628_created_ayam_table', 1),
(16, '2014_10_12_000000_create_users_table', 2),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(18, '2019_08_19_000000_create_failed_jobs_table', 2),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(20, '2021_04_28_060455_create_posts_table', 2),
(21, '2021_04_28_060645_create_images_table', 2),
(22, '2023_05_30_144444_create_siswa_table', 2),
(23, '2023_06_18_124526_create_table_ayam', 2),
(24, '2023_06_18_125010_create_katagori_table', 2),
(25, '2023_06_18_125614_create_client_table', 2),
(26, '2023_06_18_125920_create_berita_table', 2),
(27, '2023_06_18_130238_create_kontak_table', 2),
(28, '2023_06_19_042138_create_dashboard_table', 3),
(29, '2023_06_27_063411_create_jenis_ayam_table', 4),
(30, '2023_07_03_034033_create_nama_ayam_table', 5),
(31, '2023_07_03_064538_create_jenis_ayams_table', 6),
(32, '2023_07_03_045514_create_jabatans_table', 7),
(33, '2023_07_03_045913_create_pegawais_table', 7),
(34, '2023_07_03_052515_create_kelas_table', 7),
(35, '2014_10_12_100000_create_password_resets_table', 8),
(37, '2023_07_17_143932_create_transaksi_table', 9),
(38, '2023_08_10_043520_add_role_to_users_table', 9),
(39, '2023_08_12_062628_create_keranjang_table', 10),
(40, '2023_08_17_075355_create_products_table', 11);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `tgl`, `created_at`, `updated_at`) VALUES
(1, 'Jony', 'Priok', '129012', NULL, NULL),
(2, 'Iskandar', 'Priok', '10291', NULL, NULL);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_ayam_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ayam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `jenis_ayam_id`, `kode_ayam`, `berat`, `status`, `usia`, `kategori_id`, `deskripsi`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Cimani', 'KD20238100001', '2', 'Ready Stok', '3', '1', 'Tes', '1691816226_ayam cimani.jpg', '2023-08-11 21:57:07', '2023-08-11 21:57:07'),
(2, 'Mangon', 'KD2023838100002', '2', 'Ready Stok', '3', '1', 'Ayam Import', '1691816311_ayam pelung.jpg', '2023-08-11 21:58:31', '2023-08-11 21:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(1, 'ayam pelung', 'ayam Import', '1688890656_13.jpg', '1000.00', NULL, NULL),
(2, 'Ayam Mangon', 'Ayam Import', '1688891086_1.jpg', '122.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_jual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ayam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `alamat`, `no_telp`, `status`, `h_jual`, `kode_ayam`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Fariz', 'Priok', '1211221212', 'Ready Stok', '5000000', 'KD20238100001', '1692266229_ayam cimani.jpg', NULL, NULL),
(2, 'SAFIYA RAHMA', 'JL KALIBARU BARAT', '08129856425', 'Ready Stok', '12', 'K2311', '1692333765_ayam tukung.jpg', '2023-08-17 21:42:45', '2023-08-17 21:42:45'),
(3, 'SAFIYA RAHMA', 'JL KALIBARU BARAT', '08129856425', 'Ready Stok', '12', 'K2311', '1692334125_ayam tukung.jpg', '2023-08-17 21:48:45', '2023-08-17 21:48:45');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `keranjang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `keranjang_id`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$rFg4TOZYE/0QOiRa43Tbo.h1sjUe3aR.O48e1dQJBK0KyY7zIp/We', NULL, '2023-07-10 20:30:44', '2023-07-10 20:30:44', 0, 2),
(2, 'fariz', 'fariz@gmail.com', NULL, '$2y$10$Xax2UXA4zrH3hPuv6b5msOEYjqOsz/LrkqlKNGJ2TrWQ2xo0YpRFS', NULL, '2023-07-10 23:01:27', '2023-07-10 23:01:27', 1, 1),
(3, 'user1@gmail.com', 'user1@gmail.com', NULL, '$2y$10$2i9DtXB80qxAivi2sgc0nOVwPgp3jH8Y.d48cTelzE8Ms/Pei/UPm', NULL, '2023-08-09 21:57:31', '2023-08-09 21:57:31', 0, 2),
(4, 'user2@gmail.com', 'user2@gmail.com', NULL, '$2y$10$oNMm48oqW30mhA/U3pawxuexSBADGtsJSkuqkqzReQ.L76itGWaOa', NULL, '2023-08-09 21:59:38', '2023-08-09 21:59:38', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayam`
--
ALTER TABLE `ayam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_ayam`
--
ALTER TABLE `jenis_ayam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `ayam`
--
ALTER TABLE `ayam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_ayam`
--
ALTER TABLE `jenis_ayam`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
