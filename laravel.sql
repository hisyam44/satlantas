-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 05:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidents`
--

CREATE TABLE IF NOT EXISTS `accidents` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('kecelakaan','bencana alam','kemacetan') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'kecelakaan',
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accidents`
--

INSERT INTO `accidents` (`id`, `user_id`, `title`, `excerpt`, `description`, `photo`, `type`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(2, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(3, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(4, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(5, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(6, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(7, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(8, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(9, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06'),
(10, 1, 'Kecelakaan di Jalan Veteran', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.', 'img/example.jpg', 'kecelakaan', '-6.9143425', '109.6670824', '2016-11-21 19:50:06', '2016-11-21 19:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_19_024607_create_accidents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$rvDJTush8eV9GysR5Ptk2OFYF8bB4PHN97FIpVhMUiEicqw9zl1qW', 'Jl Pelita no.1 Kelurahan Jenggot Kota Pekalongan', '079876543445', NULL, '2016-11-21 19:50:06', '2016-11-21 19:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accidents`
--
ALTER TABLE `accidents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidents`
--
ALTER TABLE `accidents`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
