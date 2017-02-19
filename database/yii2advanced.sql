-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 06:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1471674132),
('m130524_201442_init', 1471674137);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('1','2') CHARACTER SET utf8 NOT NULL DEFAULT '2' COMMENT '1=>admin, 2=>user',
  `first_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `full_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>not verified, 1=>verified',
  `mobile` bigint(12) DEFAULT NULL,
  `mob_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>not_verified, 1=>verified',
  `dob` date DEFAULT NULL,
  `proImg` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `username`, `role`, `first_name`, `last_name`, `full_name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `email_verified`, `mobile`, `mob_verified`, `dob`, `proImg`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shyam', '1', 'Shyamojjwal', 'Shit', 'Shyamojjwal Shit', 'kg_TVS6RvUaqbP55Op4KEZ5HjSutjH2z', '$2y$13$W9bRn1.KCeF7OyM.j34Bw.6BfEMXp91xYDr24.9kVaEER3JgMRS.y', NULL, 'shyam.shit@gmail.com', 1, 1234567896, 1, '1990-05-23', NULL, 1, 1471788553, 1486876041);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
