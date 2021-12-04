-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

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
(31, '12', 12, 4, 'dssfsf  ', 'hhh', 0, '2021-10-28 20:37:39', 'admin@admin.com', '2021-10-28 20:37:39', NULL, '0000-00-00 00:00:00', NULL, '0'),
(32, '13', 13, 2, 'Nadumali malaarachchi  ', 'Term summer', 4, '2021-10-29 14:35:21', 'admin@admin.com', '2021-10-29 14:35:21', NULL, '0000-00-00 00:00:00', NULL, '0'),
(35, '15', 15, 2, 'Wenisha Gunawardana  ', 'Term summer', 4, '2021-10-29 15:13:28', 'admin@admin.com', '2021-10-29 15:13:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(36, '15', 15, 8, 'Wenisha Gunawardana  ', 'Term playground', 4, '2021-10-29 15:13:44', 'admin@admin.com', '2021-10-29 15:13:44', NULL, '0000-00-00 00:00:00', NULL, '0'),
(39, '17', 17, 2, 'aaa  ', 'Term summer', 3, '2021-10-29 21:16:48', 'admin@admin.com', '2021-10-29 21:16:48', NULL, '0000-00-00 00:00:00', NULL, '0'),
(40, '17', 17, 8, 'aaa  ', 'Term playground', 3, '2021-10-29 21:17:00', 'admin@admin.com', '2021-10-29 21:17:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(41, '18', 18, 2, 'Dinelka Jayakody  ', 'Term summer', 4, '2021-10-30 08:55:40', 'admin@admin.com', '2021-10-30 08:55:40', NULL, '0000-00-00 00:00:00', NULL, '0'),
(42, '18', 18, 8, 'Dinelka Jayakody  ', 'Term playground', 4, '2021-10-30 08:55:53', 'admin@admin.com', '2021-10-30 08:55:53', NULL, '0000-00-00 00:00:00', NULL, '0'),
(44, '21', 21, 2, 'Sunimal Perera  ', 'Term summer', 10, '2021-10-31 09:49:44', 'admin@admin.com', '2021-10-31 09:49:44', NULL, '0000-00-00 00:00:00', NULL, '0'),
(45, '21', 21, 8, 'Sunimal Perera  ', 'Term playground', 10, '2021-10-31 09:50:56', 'admin@admin.com', '2021-10-31 09:50:56', NULL, '0000-00-00 00:00:00', NULL, '0'),
(47, '13', 13, 8, 'Nadumali malaarachchi  ', 'Term playground', 4, '2021-11-01 12:28:29', 'admin@admin.com', '2021-11-01 12:28:29', NULL, '0000-00-00 00:00:00', NULL, '0'),
(48, '24', 24, 12, 'Primali  ', 'Semester 20', 4, '2021-11-04 16:59:10', 'admin@admin.com', '2021-11-04 16:59:10', NULL, '0000-00-00 00:00:00', NULL, '0'),
(49, '24', 24, 8, 'Primali  ', 'Term playground', 4, '2021-11-04 17:15:00', 'admin@admin.com', '2021-11-04 17:15:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(58, '24', 24, 2, 'Primali  ', 'Term summer', 4, '2021-11-06 06:00:17', 'admin@admin.com', '2021-11-06 06:00:17', NULL, '0000-00-00 00:00:00', NULL, '0'),
(61, '30', 30, 21, 'Harshani Ranathunga  ', 'Semester 1', 3, '2021-11-06 07:50:38', 'admin@admin.com', '2021-11-06 07:50:38', NULL, '0000-00-00 00:00:00', NULL, '0'),
(62, '30', 30, 22, 'Harshani Ranathunga  ', 'Semester 2', 3, '2021-11-06 07:50:57', 'admin@admin.com', '2021-11-06 07:50:57', NULL, '0000-00-00 00:00:00', NULL, '0'),
(63, '30', 30, 8, 'Harshani Ranathunga  ', 'Term playground', 3, '2021-11-06 08:09:23', 'admin@admin.com', '2021-11-06 08:09:23', NULL, '0000-00-00 00:00:00', NULL, '0');

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
  `is_deleted` enum('0','1') NOT NULL,
  `Remarks` varchar(200) DEFAULT NULL,
  `year` date DEFAULT NULL,
  `semestername` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `ref_number`, `student_name`, `paid`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `Remarks`, `year`, `semestername`) VALUES
(23, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:42:25', 'admin@admin.com', '2021-10-28 19:42:25', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(24, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:42:56', 'admin@admin.com', '2021-10-28 19:42:56', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(25, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:43:28', 'admin@admin.com', '2021-10-28 19:43:28', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(26, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:43:46', 'admin@admin.com', '2021-10-28 19:43:46', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(27, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:44:09', 'admin@admin.com', '2021-10-28 19:44:09', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(29, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:44:52', 'admin@admin.com', '2021-10-28 19:44:52', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(32, '6gJk55Hmhok7Jpak39Xx', 'suff', '1213444.00', '2021-10-28 19:48:06', 'admin@admin.com', '2021-10-28 19:48:06', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(56, 'MB0GtdtG3ffgKF29cEbS', 'Wenisha Gunawardana', '500.00', '2021-10-29 15:10:38', 'admin@admin.com', '2021-10-29 15:10:38', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(57, 'H7GJXdVFqrczlF48t9Z7', 'Kanchana Galappaththi', '500.00', '2021-10-29 15:18:10', 'admin@admin.com', '2021-10-29 15:18:10', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(58, 'GMEBUGvxkB78XOt8zFgf', 'Kajini silva', '500.00', '2021-10-29 16:37:07', 'admin@admin.com', '2021-10-29 16:37:07', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(59, 'cxwZpSQFE7fu7yxOkO0L', 'aaa', '500.00', '2021-10-29 21:14:57', 'admin@admin.com', '2021-10-29 21:14:57', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(60, 'F8gUiEPPJCflrUBnX3KE', 'Hasarel Malaarachchijj', '100.00', '2021-10-29 21:28:57', 'admin@admin.com', '2021-10-29 21:28:57', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(61, 'yhInOuFMx1O8770tacJw', 'Achini Mahawaththa', '800.00', '2021-10-30 03:53:33', 'admin@admin.com', '2021-10-30 03:53:33', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(62, 'O3CIYRPH1SmlRENtPbOw', 'Harshani Ranathunga', '500.00', '2021-10-30 04:32:29', 'admin@admin.com', '2021-10-30 04:32:29', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(63, 't9uYwFkmIjs4lFcWumV6', 'kajini perera', '800.00', '2021-10-30 04:48:36', 'admin@admin.com', '2021-10-30 04:48:36', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(64, 'FkPFjl6KylDd8qNU5038', 'Supun gallage', '900.00', '2021-10-30 04:55:43', 'admin@admin.com', '2021-10-30 04:55:43', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(65, 'FkPFjl6KylDd8qNU5038', 'Supun gallage', '900.00', '2021-10-30 04:55:43', 'admin@admin.com', '2021-10-30 04:55:43', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(66, 'smuMHTyfqaasENeSe2P0', 'Dinelka Jayakody', '700.00', '2021-10-30 06:35:44', 'admin@admin.com', '2021-10-30 06:35:44', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(67, 'gvqvDj7n9EXWM37dO9JQ', 'Seetha', '8000.00', '2021-10-30 07:39:18', 'admin@admin.com', '2021-10-30 07:39:18', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(68, 'gvqvDj7n9EXWM37dO9JQ', 'Seetha', '8000.00', '2021-10-30 08:48:33', 'admin@admin.com', '2021-10-30 08:48:33', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(69, 'gvqvDj7n9EXWM37dO9JQ', 'Seetha', '8000.00', '2021-10-30 08:48:47', 'admin@admin.com', '2021-10-30 08:48:47', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(70, 'X6XXhMaZgMKzLZDEWsdH', 'Hasarel Malaarachchi', '400.00', '2021-10-30 09:19:58', 'admin@admin.com', '2021-10-30 09:19:58', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(71, 'eUwkhyV1mR0JzbwEDV4P', 'Test student', '7000.00', '2021-10-31 02:47:12', 'admin@admin.com', '2021-10-31 02:47:12', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(72, 'JMQ7podfhNrVx77W5Hsd', 'aaa', '3333.00', '2021-10-31 03:12:24', 'admin@admin.com', '2021-10-31 03:12:24', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(73, 'JMQ7podfhNrVx77W5Hsd', 'aaa', '3333.00', '2021-10-31 03:19:58', 'admin@admin.com', '2021-10-31 03:19:58', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(74, 'gq0hqGzjJzQFWASSUbDp', 'hhhh', '800.00', '2021-10-31 03:27:26', 'admin@admin.com', '2021-10-31 03:27:26', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(75, 'dM8Ic3AckFKmBcRpF2XA', 'kkk', '50.00', '2021-10-31 03:43:55', 'admin@admin.com', '2021-10-31 03:43:55', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(76, 'dM8Ic3AckFKmBcRpF2XA', 'kkk', '50.00', '2021-10-31 03:46:31', 'admin@admin.com', '2021-10-31 03:46:31', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(77, '1q7FB98QMksquMgldf3Q', 'aaa', '80.00', '2021-10-31 03:59:42', 'admin@admin.com', '2021-10-31 03:59:42', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(78, 'LVgP5TZEb5iByRy88D4d', 'aaaa', '2222.00', '2021-10-31 07:32:26', 'admin@admin.com', '2021-10-31 07:32:26', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(79, 'jz4ryAuv1SKMImKxILjl', 'Sunimal Perera', '9000.00', '2021-10-31 09:46:05', 'admin@admin.com', '2021-10-31 09:46:05', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(80, 'Z2iZ666bXoL3dNp8bfDX', 'Remark', '0.00', '2021-10-31 10:12:17', 'admin@admin.com', '2021-10-31 10:12:17', NULL, '0000-00-00 00:00:00', NULL, '0', NULL, NULL, NULL),
(81, 'rdifj1znM7t3Z2BgqJe7', 'Remark', '800.00', '2021-10-31 10:13:09', 'admin@admin.com', '2021-10-31 10:13:09', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(82, 'QCawpRJG9xXGSFXVm9dL', 'nbnb', '500.00', '2021-10-31 10:13:28', 'admin@admin.com', '2021-10-31 10:13:28', NULL, '0000-00-00 00:00:00', NULL, '0', 'jjbj', NULL, NULL),
(83, 'fpO78Blx2LbhiHzvqAjb', 'bhvh', '888.00', '2021-10-31 10:14:20', 'admin@admin.com', '2021-10-31 10:14:20', NULL, '0000-00-00 00:00:00', NULL, '0', 'nnj', NULL, NULL),
(84, 'frbqx7oX493X2KqFx53K', 'nknk', '555.00', '2021-10-31 10:18:23', 'admin@admin.com', '2021-10-31 10:18:23', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(85, 'l04VVaKK8kw3LUY7Jq4X', 'nm', '55.00', '2021-10-31 10:18:41', 'admin@admin.com', '2021-10-31 10:18:41', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(86, 'QijpNSstnnLqD4WMSVG1', 'nnn', '8888.00', '2021-10-31 10:57:49', 'admin@admin.com', '2021-10-31 10:57:49', NULL, '0000-00-00 00:00:00', NULL, '0', 'PPP', NULL, NULL),
(87, 'aqabN5AXNaQndkt45O4V', 'hhhh', '8888.00', '2021-10-31 10:58:07', 'admin@admin.com', '2021-10-31 10:58:07', NULL, '0000-00-00 00:00:00', NULL, '0', 'PPP', NULL, NULL),
(88, '7HZwRLqttwhQ3GyfI6C6', 'aaa', '25.00', '2021-10-31 12:10:34', 'admin@admin.com', '2021-10-31 12:10:34', NULL, '0000-00-00 00:00:00', NULL, '0', 'yy', NULL, NULL),
(89, '7HZwRLqttwhQ3GyfI6C6', 'aaa', '25.00', '2021-10-31 12:41:19', 'admin@admin.com', '2021-10-31 12:41:19', NULL, '0000-00-00 00:00:00', NULL, '0', 'yy', NULL, NULL),
(90, 'C2SnRE6oEO44mdVHXl4B', 'bbbbb', '50.00', '2021-10-31 12:41:37', 'admin@admin.com', '2021-10-31 12:41:37', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(91, '152oCr7zFwqGsql61qvJ', 'aaa', '800.00', '2021-10-31 12:45:23', 'admin@admin.com', '2021-10-31 12:45:23', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(92, 'fa2L9ME0Kod7Juho0gI2', 'pppp', '8000.00', '2021-10-31 12:46:41', 'admin@admin.com', '2021-10-31 12:46:41', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(93, '7eShyhI9uqmY4aUSsUNf', 'pp', '7000.00', '2021-10-31 12:48:53', 'admin@admin.com', '2021-10-31 12:48:53', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(94, '7eShyhI9uqmY4aUSsUNf', 'pp', '7000.00', '2021-10-31 13:23:06', 'admin@admin.com', '2021-10-31 13:23:06', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(95, 'rQ5dIqULzacsiSRwu3A8', 'mmm', '50.00', '2021-10-31 13:23:35', 'admin@admin.com', '2021-10-31 13:23:35', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(96, 'rQ5dIqULzacsiSRwu3A8', 'mmm', '50.00', '2021-10-31 13:30:41', 'admin@admin.com', '2021-10-31 13:30:41', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(97, 'avHHBdrnfGergV1Qq6od', 'kalani', '800.00', '2021-10-31 13:44:33', 'admin@admin.com', '2021-10-31 13:44:33', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kalani first installment', NULL, NULL),
(98, 'avHHBdrnfGergV1Qq6od', 'kalani', '800.00', '2021-10-31 13:46:21', 'admin@admin.com', '2021-10-31 13:46:21', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kalani first installment', NULL, NULL),
(99, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:47:51', 'admin@admin.com', '2021-10-31 13:47:51', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(100, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:50:14', 'admin@admin.com', '2021-10-31 13:50:14', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(101, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:50:55', 'admin@admin.com', '2021-10-31 13:50:55', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(102, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:53:12', 'admin@admin.com', '2021-10-31 13:53:12', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(103, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:53:41', 'admin@admin.com', '2021-10-31 13:53:41', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(104, '82AA2', 'Kamla Perera', '8000.00', '2021-10-31 13:55:29', 'admin@admin.com', '2021-10-31 13:55:29', NULL, '0000-00-00 00:00:00', NULL, '0', 'Kamal first payment', NULL, NULL),
(105, 'B7277A88BA22CCA58A93', 'mmmm', '7000.00', '2021-10-31 14:29:36', 'admin@admin.com', '2021-10-31 14:29:36', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(106, 'C1DCC', 'mmmm', '800.00', '2021-10-31 14:31:56', 'admin@admin.com', '2021-10-31 14:31:56', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(107, 'BA1DB', 'kumara', '8000.00', '2021-11-02 21:15:42', 'admin@admin.com', '2021-11-02 21:15:42', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(108, 'AC1DD', 'kalani', '7000.00', '2021-11-03 04:21:08', 'admin@admin.com', '2021-11-03 04:21:08', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(109, 'ACBCC', 'Kusum', '8000.00', '2021-11-03 04:35:06', 'admin@admin.com', '2021-11-03 04:35:06', NULL, '0000-00-00 00:00:00', NULL, '0', 'Test', NULL, NULL),
(110, '1B1CD', 'kunchana', '70000.00', '2021-11-03 04:38:57', 'admin@admin.com', '2021-11-03 04:38:57', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(111, 'B1ABD', 'Primali', '7000.00', '2021-11-04 16:55:28', 'admin@admin.com', '2021-11-04 16:55:28', NULL, '0000-00-00 00:00:00', NULL, '0', 'Test', NULL, NULL),
(112, 'A1DCD', 'Kasuni', '90000.00', '2021-11-04 18:44:20', 'admin@admin.com', '2021-11-04 18:44:20', NULL, '0000-00-00 00:00:00', NULL, '0', 'Test kasuni', NULL, NULL),
(113, '1BDDC', 'njnjnn', '55555.00', '2021-11-04 18:53:47', 'admin@admin.com', '2021-11-04 18:53:47', NULL, '0000-00-00 00:00:00', NULL, '0', 'jjn', NULL, NULL),
(118, 'C11CA', 'Prasadi Gunasekara', '2500.00', '2021-11-06 04:03:50', 'admin@admin.com', '2021-11-06 04:03:50', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(119, 'DDAAC', 'Student', '2500.00', '2021-11-06 06:25:36', 'admin@admin.com', '2021-11-06 06:25:36', NULL, '0000-00-00 00:00:00', NULL, '0', 'test', NULL, NULL),
(120, 'BD1BA', 'Harshani Ranathunga', '2500.00', '2021-11-06 07:46:50', 'admin@admin.com', '2021-11-06 07:46:50', NULL, '0000-00-00 00:00:00', NULL, '0', '1st installment', NULL, NULL),
(121, 'BBC1D', 'Hasarel', '800.00', '2021-11-06 08:31:29', 'admin@admin.com', '2021-11-06 08:31:29', NULL, '0000-00-00 00:00:00', NULL, '0', 'test ', NULL, NULL),
(122, 'DBDBB', 'jnjnj', '80.00', '2021-11-06 09:38:34', 'admin@admin.com', '2021-11-06 09:38:34', NULL, '0000-00-00 00:00:00', NULL, '0', 'bjbjh', '2021-11-06', 'semeste1'),
(123, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:42:40', 'admin@admin.com', '2021-11-06 09:42:40', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(124, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:43:41', 'admin@admin.com', '2021-11-06 09:43:41', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(125, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:44:14', 'admin@admin.com', '2021-11-06 09:44:14', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(126, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:44:34', 'admin@admin.com', '2021-11-06 09:44:34', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(127, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:45:03', 'admin@admin.com', '2021-11-06 09:45:03', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(128, 'DDDCB', 'bhvhv', '800.00', '2021-11-06 09:46:09', 'admin@admin.com', '2021-11-06 09:46:09', NULL, '0000-00-00 00:00:00', NULL, '0', 'bhvh', '2021-11-06', 'semeste1'),
(129, 'CDABB', 'Kavinda', '10000.00', '2021-11-06 09:47:05', 'admin@admin.com', '2021-11-06 09:47:05', NULL, '0000-00-00 00:00:00', NULL, '0', 'test123', '2020-05-06', 'semeste2');

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
  `is_deleted` enum('0','1') NOT NULL,
  `Nationality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_gender`, `student_dob`, `student_age`, `student_home_address`, `student_doe`, `student_father_name`, `student_father_job`, `student_father_mobile`, `student_father_office_number`, `student_father_email`, `student_mother_name`, `student_mother_job`, `student_mother_mobile`, `student_mother_office_number`, `student_mother_email`, `Emergency_No`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`, `Nationality`) VALUES
(12, 'dssfsf', NULL, NULL, 'Male', '2021-10-25', 0, 'dfgd', '2021-10-25', 'dgfdg', 'fed', '1234567890', '1234567890', 'a@g.comdf', 'gfdfgd', 'gdfgdg', '1234567890', '1234567890', 'b@g.com', '1234567890', '2021-10-25 19:21:56', 'admin@admin.com', '2021-10-25 19:21:56', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(13, 'Nadumali malaarachchi', NULL, NULL, 'Male', '2017-01-29', 0, 'galle', '2021-10-29', 'bnb', 'n bb', '01125147855', '0112514522', 'malsha@gmail.com', 'hbh', 'hvhgvhg', '0112587455', '0112524255', 'mmmmm@gmail.com', '0112547883', '2021-10-29 14:35:02', 'admin@admin.com', '2021-10-29 14:35:02', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(15, 'Wenisha Gunawardana', NULL, NULL, 'Male', '2017-05-29', 0, 'galle', '2021-10-29', 'mmm perera', 'hbh', '0776837344', '0112589632', 'silva@gmail.com', 'kanchana', 'Test mother', '0776543244', '0112587444', 'mmmmm@gmail.com', '0112589655', '2021-10-29 15:13:15', 'admin@admin.com', '2021-10-29 15:13:15', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(16, 'Kanchana Galappaththi', NULL, NULL, 'Male', '2017-05-29', 0, 'colombo', '2021-10-29', 'Kumara', 'bb b', '0776837344', '0112547896', 'silva@gmail.com', 'Kumari Gamage', 'Teacher', '0776543244', '0112587444', 'mmmmm@gmail.com', '0112589655', '2021-10-29 15:19:41', 'admin@admin.com', '2021-10-29 15:19:41', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(17, 'aaa', NULL, NULL, 'Male', '2018-05-14', 0, 'jjjj', '2021-10-30', 'kkk', 'bb', '0776837344', '0112547896', 'silva@gmail.com', 'Kumari Gamage', 'Teacher', '0776543244', '0112587444', 'mother@gmail.com', '0112589655', '2021-10-29 21:16:34', 'admin@admin.com', '2021-10-29 21:16:34', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(18, 'Dinelka Jayakody', NULL, NULL, 'Male', '2017-05-30', 0, 'Galle', '2021-10-30', 'hhh', 'mkytr', '0776837344', '0912245678', 'hasarel@gmail.com', 'mmm', 'hhh', '0774583698', '0112587455', 'test3@gmail.com', '0112589655', '2021-10-30 06:37:39', 'admin@admin.com', '2021-10-30 06:37:39', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(21, 'Sunimal Perera', NULL, NULL, 'Male', '2011-05-09', 0, 'Colombo', '2021-10-31', 'Karunasenaa', 'Clerk ', '0776837344', '0112547896', 'perera@gmail.com', 'Kalpyani', 'Teacher', '0772512365', '01125478965', 'kkk@gmail.com', '0112589655', '2021-10-31 09:49:24', 'admin@admin.com', '2021-10-31 09:49:24', NULL, '0000-00-00 00:00:00', NULL, '0', NULL),
(24, 'Primali', NULL, NULL, 'Male', '2017-05-10', 0, 'Karapitiya Galle', '2021-11-04', 'Piyasena', 'Clerk', '0773536355', '0112536254', 'tes@gmail.com', 'Mallika', 'Teacher', '0773635388', '0112587444', 'hhhhh@gmail.com', '0112589655', '2021-11-04 16:58:35', 'admin@admin.com', '2021-11-04 16:58:35', NULL, '0000-00-00 00:00:00', NULL, '0', 'Tamil'),
(28, 'Prasadi Gunasekara', NULL, NULL, 'Female', '2017-05-06', 0, 'Labuduwa Road , Galle', '2021-11-06', 'Gunasekara', 'Clerk', '0776837344', '0112589632', 'guna@gmail.com', 'kasuni', 'Teacher', '0776543244', '0112587444', 'kasuni@gmal.com', '0112589655', '2021-11-06 04:05:43', 'admin@admin.com', '2021-11-06 04:05:43', NULL, '0000-00-00 00:00:00', NULL, '0', 'Sinhala'),
(29, 'Student', NULL, NULL, 'Male', '2016-05-06', 0, 'Labuduwa Road , Galle', '2021-11-06', 'P G Perera', 'Clerk', '0776837344', '0112547896', 'gunase@gmail.com', 'Kusum', 'Teacher', '0776543244', '0112587455', 'kusumi@gmail.com', '0112547888', '2021-11-06 06:27:25', 'admin@admin.com', '2021-11-06 06:27:25', NULL, '0000-00-00 00:00:00', NULL, '0', 'Sinhala'),
(30, 'Harshani Ranathunga', NULL, NULL, 'Female', '2018-05-06', 0, 'Lanuduwa Road Galle', '2021-11-06', 'K G Ranathunga', 'Clerk', '0773435388', '0112547896', 'ranathunga@gmail.com', 'M G Perera', 'Teacher', '0776835344', '0112514789', 'perera@gmail.com', '0112528244', '2021-11-06 07:50:05', 'admin@admin.com', '2021-11-06 07:50:05', NULL, '0000-00-00 00:00:00', NULL, '0', 'Sinhala');

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
(8, 'Term playground', '80000.00', '2021-10-29 18:10:08', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(21, 'Semester 1', '80000.00', '2021-11-06 12:13:15', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(22, 'Semester 2', '90000.00', '2021-11-06 12:13:39', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(23, 'Semester 1', '70000.00', '2021-11-06 12:30:55', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0');

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
(1, '127.0.0.1', 'administrator', '$2y$12$ULMW0Gqw9N1/9q0mc1yRjut/NScLbq0d5kf9OYx.l8i.RG5hTFR/e', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1638105901, 1, 'Admin', 'istrator', 'ADMIN', '10'),
(22, '::1', '', '$2y$10$6goVIatYpBqNxPRMJ4P0HeBXoD66FG.nGOYzq8qk7mx47ZsBIIDtq', 'member@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635771177, 1636179143, 1, 'Member', 'School', 'TGS', '0776837344'),
(23, '::1', '', '$2y$10$kVKzK6xPFG8luModpZI3XOVtqyl8NkD8mX/LUewIsJf5fNJeiJg3i', 'parent@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635772953, 1636179158, 1, 'Parent', 'School', 'TGS', '0776837377'),
(30, '::1', '', '$2y$10$zhl8VVVsTz1qo.JavfPO6OnRx/NjEbX0aBBmW/18fOUzdsotzSyuW', 'kajini68@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636180848, 1636180930, 1, 'Kajini', 'Malaarachchi', 'TGS', '0776837344');

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
(36, 11, 2),
(37, 12, 2),
(38, 13, 2),
(39, 14, 2),
(40, 15, 2),
(41, 16, 2),
(42, 17, 2),
(43, 18, 2),
(44, 19, 2),
(45, 20, 2),
(46, 21, 2),
(47, 22, 2),
(49, 23, 3),
(50, 24, 2),
(51, 25, 2),
(52, 26, 2),
(53, 27, 2),
(54, 28, 2),
(55, 29, 2),
(56, 30, 2);

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
(16, 'Singing', 'Term playground', '2021-10-29 18:10:27', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(17, 'dancing', 'Term playground', '2021-10-29 18:10:37', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(22, 'Swimming', 'Semester 20', '2021-11-04 21:24:33', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(23, 'Langauge', 'Semester 20', '2021-11-04 21:24:51', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(44, 'Communication and Language', 'Semester 1', '2021-11-06 12:14:41', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(45, 'Sports', 'Semester 1', '2021-11-06 12:14:53', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(46, 'Science', 'Semester 2', '2021-11-06 12:15:10', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(47, 'Maths', 'Semester 2', '2021-11-06 12:15:17', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0');

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
(63, '12', 12, 3, 'dssfsf  ', 'bjj', 56, 'qqqq', '2021-10-28 22:09:39', 'admin@admin.com', '2021-10-28 22:09:39', NULL, '0000-00-00 00:00:00', NULL, '0'),
(64, '13', 13, 2, 'Nadumali malaarachchi  ', 'Term summer', 25, '3444', '2021-10-29 14:35:55', 'admin@admin.com', '2021-10-29 14:35:55', NULL, '0000-00-00 00:00:00', NULL, '0'),
(65, '13', 13, 2, 'Nadumali malaarachchi  ', 'Term summer', 65, '23344', '2021-10-29 14:35:55', 'admin@admin.com', '2021-10-29 14:35:55', NULL, '0000-00-00 00:00:00', NULL, '0'),
(70, '15', 15, 2, 'Wenisha Gunawardana  ', 'Term summer', 20, '3444', '2021-10-29 15:14:26', 'admin@admin.com', '2021-10-29 15:14:26', NULL, '0000-00-00 00:00:00', NULL, '0'),
(71, '15', 15, 2, 'Wenisha Gunawardana  ', 'Term summer', 50, '23344', '2021-10-29 15:14:26', 'admin@admin.com', '2021-10-29 15:14:26', NULL, '0000-00-00 00:00:00', NULL, '0'),
(72, '16', 16, 9, 'Kanchana Galappaththi  ', 'Semester 1', 7, 'Sports', '2021-10-29 15:20:37', 'admin@admin.com', '2021-10-29 15:20:37', NULL, '0000-00-00 00:00:00', NULL, '0'),
(73, '16', 16, 9, 'Kanchana Galappaththi  ', 'Semester 1', 2, 'Swimiing', '2021-10-29 15:20:37', 'admin@admin.com', '2021-10-29 15:20:37', NULL, '0000-00-00 00:00:00', NULL, '0'),
(74, '16', 16, 10, 'Kanchana Galappaththi  ', 'Semester 2', NULL, 'Maths begineers', '2021-10-29 15:22:01', 'admin@admin.com', '2021-10-29 15:22:01', NULL, '0000-00-00 00:00:00', NULL, '0'),
(75, '16', 16, 10, 'Kanchana Galappaththi  ', 'Semester 2', NULL, 'Science beginner', '2021-10-29 15:22:01', 'admin@admin.com', '2021-10-29 15:22:01', NULL, '0000-00-00 00:00:00', NULL, '0'),
(76, '17', 17, 2, 'aaa  ', 'Term summer', 5, '3444', '2021-10-29 21:17:32', 'admin@admin.com', '2021-10-29 21:17:32', NULL, '0000-00-00 00:00:00', NULL, '0'),
(77, '17', 17, 2, 'aaa  ', 'Term summer', 8, '23344', '2021-10-29 21:17:32', 'admin@admin.com', '2021-10-29 21:17:32', NULL, '0000-00-00 00:00:00', NULL, '0'),
(78, '17', 17, 8, 'aaa  ', 'Term playground', 10, 'Singing', '2021-10-29 21:17:56', 'admin@admin.com', '2021-10-29 21:17:56', NULL, '0000-00-00 00:00:00', NULL, '0'),
(79, '17', 17, 8, 'aaa  ', 'Term playground', 40, 'dancing', '2021-10-29 21:17:57', 'admin@admin.com', '2021-10-29 21:17:57', NULL, '0000-00-00 00:00:00', NULL, '0'),
(80, '18', 18, 2, 'Dinelka Jayakody  ', 'Term summer', 5, '3444', '2021-10-30 08:56:26', 'admin@admin.com', '2021-10-30 08:56:26', NULL, '0000-00-00 00:00:00', NULL, '0'),
(81, '18', 18, 2, 'Dinelka Jayakody  ', 'Term summer', 6, '23344', '2021-10-30 08:56:26', 'admin@admin.com', '2021-10-30 08:56:26', NULL, '0000-00-00 00:00:00', NULL, '0'),
(82, '18', 18, 8, 'Dinelka Jayakody  ', 'Term playground', 20, 'Singing', '2021-10-30 08:56:47', 'admin@admin.com', '2021-10-30 08:56:47', NULL, '0000-00-00 00:00:00', NULL, '0'),
(83, '18', 18, 8, 'Dinelka Jayakody  ', 'Term playground', 10, 'dancing', '2021-10-30 08:56:47', 'admin@admin.com', '2021-10-30 08:56:47', NULL, '0000-00-00 00:00:00', NULL, '0'),
(84, '21', 21, 2, 'Sunimal Perera  ', 'Term summer', 20, '3444', '2021-10-31 09:52:28', 'admin@admin.com', '2021-10-31 09:52:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(85, '21', 21, 2, 'Sunimal Perera  ', 'Term summer', 10, '23344', '2021-10-31 09:52:28', 'admin@admin.com', '2021-10-31 09:52:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(86, '21', 21, 8, 'Sunimal Perera  ', 'Term playground', 5, 'Singing', '2021-10-31 09:53:19', 'admin@admin.com', '2021-10-31 09:53:19', NULL, '0000-00-00 00:00:00', NULL, '0'),
(87, '21', 21, 8, 'Sunimal Perera  ', 'Term playground', 10, 'dancing', '2021-10-31 09:53:19', 'admin@admin.com', '2021-10-31 09:53:19', NULL, '0000-00-00 00:00:00', NULL, '0'),
(88, '13', 13, 10, 'Nadumali malaarachchi  ', 'Semester 2', NULL, 'Maths begineers', '2021-11-01 12:24:20', 'admin@admin.com', '2021-11-01 12:24:20', NULL, '0000-00-00 00:00:00', NULL, '0'),
(89, '13', 13, 10, 'Nadumali malaarachchi  ', 'Semester 2', NULL, 'Science beginner', '2021-11-01 12:24:20', 'admin@admin.com', '2021-11-01 12:24:20', NULL, '0000-00-00 00:00:00', NULL, '0'),
(90, '13', 13, 8, 'Nadumali malaarachchi  ', 'Term playground', 2, 'Singing', '2021-11-01 12:28:51', 'admin@admin.com', '2021-11-01 12:28:51', NULL, '0000-00-00 00:00:00', NULL, '0'),
(91, '13', 13, 8, 'Nadumali malaarachchi  ', 'Term playground', 2, 'dancing', '2021-11-01 12:28:51', 'admin@admin.com', '2021-11-01 12:28:51', NULL, '0000-00-00 00:00:00', NULL, '0'),
(92, '24', 24, 12, 'Primali  ', 'Semester 20', 5, 'Swimming', '2021-11-04 17:00:00', 'admin@admin.com', '2021-11-04 17:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(93, '24', 24, 12, 'Primali  ', 'Semester 20', 7, 'Langauge', '2021-11-04 17:00:00', 'admin@admin.com', '2021-11-04 17:00:00', NULL, '0000-00-00 00:00:00', NULL, '0'),
(94, '24', 24, 8, 'Primali  ', 'Term playground', 20, 'Singing', '2021-11-04 17:15:28', 'admin@admin.com', '2021-11-04 17:15:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(95, '24', 24, 8, 'Primali  ', 'Term playground', 10, 'dancing', '2021-11-04 17:15:28', 'admin@admin.com', '2021-11-04 17:15:28', NULL, '0000-00-00 00:00:00', NULL, '0'),
(104, '24', 24, 2, 'Primali  ', 'Term summer', 8, '3444', '2021-11-06 06:00:43', 'admin@admin.com', '2021-11-06 06:00:43', NULL, '0000-00-00 00:00:00', NULL, '0'),
(105, '24', 24, 2, 'Primali  ', 'Term summer', 7, '23344', '2021-11-06 06:00:43', 'admin@admin.com', '2021-11-06 06:00:43', NULL, '0000-00-00 00:00:00', NULL, '0'),
(114, '30', 30, 21, 'Harshani Ranathunga  ', 'Semester 1', NULL, 'Communication and Language', '2021-11-06 07:51:38', 'admin@admin.com', '2021-11-06 07:51:38', NULL, '0000-00-00 00:00:00', NULL, '0'),
(115, '30', 30, 21, 'Harshani Ranathunga  ', 'Semester 1', 7, 'Sports', '2021-11-06 07:51:38', 'admin@admin.com', '2021-11-06 07:51:38', NULL, '0000-00-00 00:00:00', NULL, '0'),
(116, '30', 30, 22, 'Harshani Ranathunga  ', 'Semester 2', 15, 'Science', '2021-11-06 07:52:05', 'admin@admin.com', '2021-11-06 07:52:05', NULL, '0000-00-00 00:00:00', NULL, '0'),
(117, '30', 30, 22, 'Harshani Ranathunga  ', 'Semester 2', 10, 'Maths', '2021-11-06 07:52:05', 'admin@admin.com', '2021-11-06 07:52:05', NULL, '0000-00-00 00:00:00', NULL, '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `multi_uploader_gallery`
--
ALTER TABLE `multi_uploader_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `termgoals`
--
ALTER TABLE `termgoals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `weightdata`
--
ALTER TABLE `weightdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
