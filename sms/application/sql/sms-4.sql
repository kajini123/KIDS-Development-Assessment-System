-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 10:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `agegroups`
--

CREATE TABLE `agegroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `max_year` int(2) DEFAULT NULL,
  `min_year` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(11) NOT NULL,
  `student_form_id` varchar(255) DEFAULT NULL,
  `student_id` int(15) DEFAULT NULL,
  `term_id` int(15) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `student_form_id`, `student_id`, `term_id`, `student_name`, `term_name`, `age`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(29, '12', 12, 2, 'dssfsf  ', 'Term summer', 0, '2021-10-28 20:37:06', 'admin@admin.com', '2021-10-28 20:37:06', NULL, '0000-00-00 00:00:00', NULL, '0'),
(30, '12', 12, 3, 'dssfsf  ', 'bjj', 0, '2021-10-28 20:37:30', 'admin@admin.com', '2021-10-28 20:37:30', NULL, '0000-00-00 00:00:00', NULL, '0'),
(31, '12', 12, 4, 'dssfsf  ', 'hhh', 0, '2021-10-28 20:37:39', 'admin@admin.com', '2021-10-28 20:37:39', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'Parent', 'Reviewer Group');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `ref_number` varchar(255) DEFAULT '0',
  `student_name` varchar(255) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `ref_number`, `student_name`, `paid`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(23, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:42:25', 'admin@admin.com', '2021-10-28 19:42:25', NULL, '0000-00-00 00:00:00', NULL, '0'),
(24, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:42:56', 'admin@admin.com', '2021-10-28 19:42:56', NULL, '0000-00-00 00:00:00', NULL, '0'),
(25, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:43:28', 'admin@admin.com', '2021-10-28 19:43:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(26, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:43:46', 'admin@admin.com', '2021-10-28 19:43:46', NULL, '0000-00-00 00:00:00', NULL, '0'),
(27, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:44:09', 'admin@admin.com', '2021-10-28 19:44:09', NULL, '0000-00-00 00:00:00', NULL, '0'),
(28, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:44:24', 'admin@admin.com', '2021-10-28 19:44:24', NULL, '0000-00-00 00:00:00', NULL, '0'),
(29, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:44:52', 'admin@admin.com', '2021-10-28 19:44:52', NULL, '0000-00-00 00:00:00', NULL, '0'),
(30, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:46:17', 'admin@admin.com', '2021-10-28 19:46:17', NULL, '0000-00-00 00:00:00', NULL, '0'),
(31, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:47:05', 'admin@admin.com', '2021-10-28 19:47:05', NULL, '0000-00-00 00:00:00', NULL, '0'),
(32, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:48:06', 'admin@admin.com', '2021-10-28 19:48:06', NULL, '0000-00-00 00:00:00', NULL, '0'),
(33, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:48:29', 'admin@admin.com', '2021-10-28 19:48:29', NULL, '0000-00-00 00:00:00', NULL, '0'),
(34, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:49:40', 'admin@admin.com', '2021-10-28 19:49:40', NULL, '0000-00-00 00:00:00', NULL, '0'),
(35, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:50:14', 'admin@admin.com', '2021-10-28 19:50:14', NULL, '0000-00-00 00:00:00', NULL, '0'),
(36, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:50:35', 'admin@admin.com', '2021-10-28 19:50:35', NULL, '0000-00-00 00:00:00', NULL, '0'),
(37, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:51:36', 'admin@admin.com', '2021-10-28 19:51:36', NULL, '0000-00-00 00:00:00', NULL, '0'),
(38, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:51:49', 'admin@admin.com', '2021-10-28 19:51:49', NULL, '0000-00-00 00:00:00', NULL, '0'),
(39, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:52:12', 'admin@admin.com', '2021-10-28 19:52:12', NULL, '0000-00-00 00:00:00', NULL, '0'),
(40, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:53:18', 'admin@admin.com', '2021-10-28 19:53:18', NULL, '0000-00-00 00:00:00', NULL, '0'),
(41, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:54:38', 'admin@admin.com', '2021-10-28 19:54:38', NULL, '0000-00-00 00:00:00', NULL, '0'),
(42, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:55:01', 'admin@admin.com', '2021-10-28 19:55:01', NULL, '0000-00-00 00:00:00', NULL, '0'),
(43, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:55:16', 'admin@admin.com', '2021-10-28 19:55:16', NULL, '0000-00-00 00:00:00', NULL, '0'),
(44, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:55:40', 'admin@admin.com', '2021-10-28 19:55:40', NULL, '0000-00-00 00:00:00', NULL, '0'),
(45, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:55:55', 'admin@admin.com', '2021-10-28 19:55:55', NULL, '0000-00-00 00:00:00', NULL, '0'),
(46, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:56:09', 'admin@admin.com', '2021-10-28 19:56:09', NULL, '0000-00-00 00:00:00', NULL, '0'),
(47, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:56:27', 'admin@admin.com', '2021-10-28 19:56:27', NULL, '0000-00-00 00:00:00', NULL, '0'),
(48, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:57:07', 'admin@admin.com', '2021-10-28 19:57:07', NULL, '0000-00-00 00:00:00', NULL, '0'),
(49, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:58:10', 'admin@admin.com', '2021-10-28 19:58:10', NULL, '0000-00-00 00:00:00', NULL, '0'),
(50, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:59:33', 'admin@admin.com', '2021-10-28 19:59:33', NULL, '0000-00-00 00:00:00', NULL, '0'),
(51, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:59:47', 'admin@admin.com', '2021-10-28 19:59:47', NULL, '0000-00-00 00:00:00', NULL, '0'),
(52, 'G8Oa1rvYCdEFktxyv74N', 'Asanka Chamila Kumara', '27000.00', '2021-10-28 20:04:34', 'admin@admin.com', '2021-10-28 20:04:34', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `student_form_id` varchar(255) DEFAULT NULL,
  `student_id` int(15) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `student_form_id`, `student_id`, `student_name`, `paid`, `due`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(1, '1223', 3, 'Asanka Chamila Kumara', '12345.00', '54311.00', '2021-06-12 17:07:14', 'admin@admin.com', '2021-06-12 17:07:14', NULL, '0000-00-00 00:00:00', NULL, '0'),
(2, '3', 3, 'Asanka Chamila Kumara', '4444.00', '555.00', '2021-06-26 10:46:24', 'admin@admin.com', '2021-06-26 10:46:24', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_uploader_gallery`
--

CREATE TABLE `multi_uploader_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `my_pictures` text DEFAULT NULL,
  `my_files` text DEFAULT NULL,
  `my_mail_attachments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `student_first_name` varchar(255) DEFAULT NULL,
  `student_middle_name` varchar(255) DEFAULT NULL,
  `student_last_name` varchar(255) DEFAULT NULL,
  `student_gender` enum('Male','Female') DEFAULT NULL,
  `student_dob` date DEFAULT NULL,
  `student_age` mediumint(8) DEFAULT 0,
  `student_home_address` varchar(255) DEFAULT NULL,
  `student_doe` date DEFAULT NULL,
  `student_father_name` varchar(255) DEFAULT NULL,
  `student_father_job` varchar(255) DEFAULT NULL,
  `student_father_mobile` varchar(255) DEFAULT NULL,
  `student_father_office_number` varchar(255) DEFAULT NULL,
  `student_father_email` varchar(255) DEFAULT NULL,
  `student_mother_name` varchar(255) DEFAULT NULL,
  `student_mother_job` varchar(255) DEFAULT NULL,
  `student_mother_mobile` varchar(255) DEFAULT NULL,
  `student_mother_office_number` varchar(255) DEFAULT NULL,
  `student_mother_email` varchar(255) DEFAULT NULL,
  `Emergency_No` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_gender`, `student_dob`, `student_age`, `student_home_address`, `student_doe`, `student_father_name`, `student_father_job`, `student_father_mobile`, `student_father_office_number`, `student_father_email`, `student_mother_name`, `student_mother_job`, `student_mother_mobile`, `student_mother_office_number`, `student_mother_email`, `Emergency_No`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(12, 'dssfsf', NULL, NULL, 'Male', '2021-10-25', 0, 'dfgd', '2021-10-25', 'dgfdg', 'fed', '1234567890', '1234567890', 'a@g.comdf', 'gfdfgd', 'gdfgdg', '1234567890', '1234567890', 'b@g.com', '1234567890', '2021-10-25 19:21:56', 'admin@admin.com', '2021-10-25 19:21:56', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `termgoals`
--

CREATE TABLE `termgoals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `term_fee` decimal(10,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termgoals`
--

INSERT INTO `termgoals` (`id`, `name`, `term_fee`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(2, 'Term summer', '20000.00', '2021-06-12 13:11:54', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(3, 'bjj', '20000.00', '2021-06-25 09:39:08', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(4, 'hhh', '20000.00', '2021-06-25 09:39:31', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(5, 'wewe', '20000.00', '2021-06-25 10:00:30', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(6, 'nbnbmn', '20000.00', '2021-06-25 10:45:17', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(7, 'jkhkj', '20000.00', '2021-06-26 11:08:49', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$8n8qgLr0y0PHk88FUR9t6eZDS8EYVzXFZ0fN7TmcrFLxyOGgPFZuq', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1635442127, 1, 'Admin', 'istrator', 'ADMIN', '10'),
(2, '::1', '', '$2y$10$TJ7DnL1kGs46aZ9OoTa92.sYNj8sQSqsGoP5ae2DCrevvFOneTy2y', 'a@a.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1613844885, NULL, 1, 'Asanka', 'Kumara', 'SSB', '8'),
(3, '::1', '', '$2y$10$V6JPlj6ljzFhXEhFw48IyeoepdkAoKM0elOdn.gyjYxQoCtCoI/SW', 'ab@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1613844937, NULL, 1, 'Asanka', 'Kumara', 'SSB', '15'),
(4, '::1', '', '$2y$10$QJyE.cOXQ.nBOzx.DmOomOYvikDwFM9tAB9R6ZrBoAPGn6aZcnZfW', 'a@gmail.com', '930691a55b59c120436a', '$2y$10$31hVOPJe/GgPVOJDqnqf2.AHsoDrFUW5RcOkESN2aQqrVnu2SBQse', NULL, NULL, NULL, NULL, NULL, 1616617395, NULL, 0, 'Assss', 'AAA', 'ass', '12'),
(5, '::1', '', '$2y$10$.5dkln/AwDdSbE9zFNyWyuvRNYTyHupVhJPQG.TyKgtoL.6k7koEa', 'ggg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1624561200, NULL, 1, 'mnmndsff55557777', 'bb', 'nbnmbm', '222222222222222222'),
(6, '::1', '', '$2y$10$3iZPlwkI34G3AtJMn7UMvuAgdK73WoCzoFLie3DFcX0mC2qMv/rxa', 'nbn@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1624619816, NULL, 1, 'mnmndfddsgdsgsgs', 'nmn', 'm', '22222222222222222'),
(7, '::1', '', '$2y$10$JSMtp5d00dsYTWL4X8gAkedUqaZYWUqZRw/.MvLz0vVWDNoIdY2Yy', 'ttt@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1624628602, NULL, 1, 'sasfgdgdgd', 'zx', 'zx', '0776834377'),
(8, '::1', '', '$2y$10$z8UGZkTezyh50DkFOqqaFOnO33XMSwToNeDK15xMzrTOy6.c0PG.a', 'hhh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1624635495, 1624679758, 1, 'nmb', 'nbnmb', 'nbmn', 'hhhhhh'),
(9, '::1', '', '$2y$10$P51B4uL8EUzd1CHCgVhxnu3UUtHFarj8FVol9OTbq7WLP2JOB1aMS', 'a@g.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632466184, NULL, 1, 'sfdadfa', 'sfsd', 'dfs', ''),
(11, '::1', '', '$2y$10$T0EyDLgkW163l9f4zEt9EOSXeAWl1NKuLF3L5Uz8NCC8Sh8bttOgu', 'ackasanka@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635183427, NULL, 1, 'dfgefgd', 'dfgdfg', 'dfgd', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(17, 8, 2),
(18, 9, 2),
(19, 2, 2),
(20, 2, 3),
(21, 3, 2),
(22, 3, 3),
(23, 4, 2),
(24, 4, 3),
(27, 6, 2),
(28, 1, 1),
(29, 1, 2),
(30, 7, 2),
(33, 5, 2),
(34, 5, 3),
(36, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `weightdata`
--

CREATE TABLE `weightdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weightdata`
--

INSERT INTO `weightdata` (`id`, `name`, `term_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(12, '3444', 'Term summer', '2021-09-18 13:11:15', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(13, '23344', 'Term summer', '2021-09-18 13:11:28', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(14, 'qqq', 'bjj', '2021-10-28 21:47:02', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(15, 'qqqq', 'bjj', '2021-10-28 21:47:08', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` int(11) NOT NULL,
  `student_form_id` varchar(255) DEFAULT NULL,
  `student_id` int(15) DEFAULT NULL,
  `term_id` int(15) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `weight_name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `student_form_id`, `student_id`, `term_id`, `student_name`, `term_name`, `weight`, `weight_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES
(60, '12', 12, 2, 'dssfsf  ', 'Term summer', 10, '3444', '2021-10-28 22:09:15', 'admin@admin.com', '2021-10-28 22:09:15', NULL, '0000-00-00 00:00:00', NULL, '0'),
(61, '12', 12, 2, 'dssfsf  ', 'Term summer', 34, '23344', '2021-10-28 22:09:15', 'admin@admin.com', '2021-10-28 22:09:15', NULL, '0000-00-00 00:00:00', NULL, '0'),
(62, '12', 12, 3, 'dssfsf  ', 'bjj', 34, 'qqq', '2021-10-28 22:09:39', 'admin@admin.com', '2021-10-28 22:09:39', NULL, '0000-00-00 00:00:00', NULL, '0'),
(63, '12', 12, 3, 'dssfsf  ', 'bjj', 56, 'qqqq', '2021-10-28 22:09:39', 'admin@admin.com', '2021-10-28 22:09:39', NULL, '0000-00-00 00:00:00', NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agegroups`
--
ALTER TABLE `agegroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrolment` (`student_id`,`term_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_uploader_gallery`
--
ALTER TABLE `multi_uploader_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termgoals`
--
ALTER TABLE `termgoals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weightdata`
--
ALTER TABLE `weightdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agegroups`
--
ALTER TABLE `agegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multi_uploader_gallery`
--
ALTER TABLE `multi_uploader_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `termgoals`
--
ALTER TABLE `termgoals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `weightdata`
--
ALTER TABLE `weightdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
