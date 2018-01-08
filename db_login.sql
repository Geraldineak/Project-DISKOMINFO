-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 10:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama_departemen`, `created_at`, `updated_at`) VALUES
(1, 'Departemen KOMINFO', NULL, '2017-12-30 08:10:32'),
(3, 'Mrs. Rosella Ziemann', NULL, NULL),
(4, 'Dr. Eric Hand DDS', NULL, NULL),
(5, 'Adonis Reinger', NULL, NULL),
(9, 'Rohimam', '2017-12-29 00:19:46', '2017-12-29 00:19:46'),
(10, 'Cedrick Dare', NULL, NULL),
(11, 'Josue Schmeler', NULL, NULL),
(12, 'Jedediah Crona', NULL, NULL),
(13, 'Keely Emmerich', NULL, NULL),
(14, 'Prof. Dane Weber V', NULL, NULL),
(15, 'Carmen Runolfsson', NULL, NULL),
(16, 'Prof. Sierra Maggio', NULL, NULL),
(17, 'Prof. Kaelyn Mueller', NULL, NULL),
(18, 'Eli Fadel III', NULL, NULL),
(19, 'Bryce Vandervort', NULL, NULL),
(20, 'Leonora Christiansen', NULL, NULL),
(21, 'Sunny Jones Jr.', NULL, NULL),
(22, 'Vincenza Emard', NULL, NULL),
(23, 'Dr. Gavin West MD', NULL, NULL),
(24, 'Clinton Swift III', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama_lengkap`, `alamat`, `no_telp`, `jabatan`, `departemen`, `username`, `password`, `created_at`, `updated_at`) VALUES
(19, 'Timbo', 'Kukusan', '020202020', 'Outsourcing', 'Keuangan', 'timbotim', '$2y$10$xnQpyP.EyBl/y0B1VskuGOK3oRLSL2T1DDe/PSIDo7.Vpm/WfMHfa', '2018-01-08 00:45:46', '2018-01-08 00:45:46'),
(25, 'Laney Carroll', '5346 Schoen Roads Suite 664\nLake Myrtietown, WI 19065', '(474) 695-3460 x3135', 'Admin', 'IT', 'gege', '$2y$10$VTRCPpGYEbum1DVCii2rkeMEPkTX7AB8Qco8W2Fjp8rrK5sfES1DK', NULL, NULL),
(26, 'Iqra Idzharul Haq', 'Jalan Kamar', '089277882783', 'KABID', 'Sekretariat', 'iqraAJA', '$2y$10$KFfx3bBe8EMbFbZXZZibqOJiqx5XPntvfxmxJxJ.lczmT738ctuzu', '2018-01-08 01:50:39', '2018-01-08 01:50:39'),
(27, 'Prianda', 'Sawangan, Depok', '020202020', 'KASI', 'Keuangan', 'priGanteng', '$2y$10$/d5iEyHFAunOmDXI1ah6UezfQBYHXPkU9GuMlWP8Kh1oRTrro8eUe', '2018-01-08 01:52:38', '2018-01-08 01:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'Progress kerja Prianda Magang', 'Prianda telah berhasil diterima magang di perusahan ternama di PT Intelsysdata dengan jabatan tertinggi dan gaji yang fantastis', NULL, '2017-12-30 07:21:59'),
(6, 'Kegiatan Kerja Bakti Keuangan', 'kksdjakjskajsklksklas', '2017-12-30 06:58:25', '2017-12-30 07:24:53'),
(7, 'Apa aja boleh deh', 'yang penting isi aja dulu yang sekiranya ada di otak. mau itu nyambung ataupun tidak, seenggaknya itu semua diketahui semua orang', '2017-12-30 07:28:54', '2017-12-30 07:28:54'),
(8, 'Pengurangan tenaga kerja', 'Telah dilakukan dengan sebagaimana  mestinya. walapun kita harus kehilangan salah satu karyawan teladan kita untuk di deportasi ke PT Intelsysdata yang bernama Prianda Dipati Dolken', '2018-01-02 18:38:26', '2018-01-02 18:38:26'),
(9, 'Nisi eos sit qui.', 'Est ab aut eos ut. Illo soluta veritatis deleniti minus et fuga alias perspiciatis.', NULL, NULL),
(10, 'Et aut adipisci.', 'Sit sunt iusto sed modi officia architecto asperiores eligendi. Omnis reiciendis perspiciatis ut est. Et quia impedit ut maxime illo architecto. Ad doloremque nostrum quae harum.', NULL, NULL),
(11, 'In blanditiis earum.', 'Commodi inventore aliquid dolorem rerum alias ea voluptatum. Placeat qui eum libero iste molestiae. Ut accusamus numquam reprehenderit odio dolorem animi est.', NULL, NULL),
(12, 'Commodi doloribus delectus facilis.', 'Cum et ullam sit itaque ratione placeat dolorem debitis. Velit fuga velit quod optio occaecati dolore. Numquam molestiae vitae voluptatem porro. Quod et deserunt voluptatem culpa quod.', NULL, NULL),
(13, 'Fugiat quia molestiae ex.', 'Ab voluptatem minima qui impedit ut quo ratione. Error recusandae repellendus quaerat eum quos. Id et odit autem qui iusto.', NULL, NULL),
(14, 'Et expedita itaque.', 'Molestiae et ipsa ab ipsa. Alias est sed inventore quia et quae. Rerum inventore nulla rem facere inventore eaque.', NULL, NULL),
(15, 'Laborum aliquid cupiditate.', 'Omnis dolorem minus hic dolor quo iusto vel quod. Laborum quod et aliquam a. Et illum aliquam sint quibusdam. Qui quia quae dicta harum aut saepe eligendi.', NULL, NULL),
(16, 'Ipsum delectus qui sint.', 'Quos quae deserunt nisi libero sed. Esse ipsam quia et quo reiciendis. Odit saepe suscipit et dolorum mollitia ut.', NULL, NULL),
(17, 'Delectus omnis et.', 'Tempora cum aliquid sed eos. Incidunt sit et vitae aut deleniti et.', NULL, NULL),
(18, 'Ea accusamus veritatis.', 'Deserunt qui velit sunt sequi id voluptate. Tenetur et eum architecto dignissimos. Voluptatem illo dolore excepturi id alias et. Alias facere maxime ea sapiente atque repudiandae.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Coba nambah Testing di Log.', 'http://127.0.0.1:8000/add-to-log', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0', 1, '2018-01-03 01:15:54', '2018-01-03 01:15:54'),
(2, 'Coba nambah Testing di Log.', 'http://127.0.0.1:8000/add-to-log', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0', 1, '2018-01-03 01:18:38', '2018-01-03 01:18:38');

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
(1, '2017_12_28_023659_create_model_kontaks_table', 1),
(2, '2017_12_29_042908_create_model_departemens_table', 2),
(3, '2017_12_30_124034_create_model_laporans_table', 3),
(4, '2018_01_03_070805_create_log_activity_table', 4),
(5, '2018_01_05_103754_create_model_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
