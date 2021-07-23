-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2021 at 01:25 AM
-- Server version: 5.7.35
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucky7be_rajeevjadhav`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `password`, `qualification`, `expertise`, `email`, `email_verified_at`, `phone`, `role`, `about`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(59, 'RAM', '$2y$10$Oj2TPzDQPJdaqDCzExUfveHeogL6uXkP43QkoTPxxGQuM8Svnx3By', 'M. Sc.', '5 year', 'ram@gmail.com', NULL, '9854213064', '1', 'testing coach', '1625656085100_6.jpg', '0,1,2', NULL, '2021-07-01 01:40:42', '2021-07-13 18:54:06'),
(62, 'Scarlett', '$2y$10$mlhLjs0paOeOIMZS625tCuBk/SDVMkdCljsVOqaNvQC/ZWKPxtcQu', 'P.HD', '20', 'sj@gmail.com', NULL, '1234567890', '1', 'ABCD...', '1625683220t1.jpg', '0,1,2', NULL, '2021-07-07 22:40:20', '2021-07-09 14:42:49'),
(63, 'Test Coach', '$2y$10$6YxH7c299K.gLp6dJ3zT1uueDimg1LvfQn1O3znusdgTl2fX2Uraa', 'MBA', '10', 'testcoach@gmail.com', NULL, '9854713236', '2', 'I am Business Coach', '1626857125Picture14.jpg', '0', NULL, '2021-07-21 12:45:25', '2021-07-21 12:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `coach_details`
--

CREATE TABLE `coach_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `about` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `firstname`, `lastname`, `email`, `company_name`, `about`, `status`, `created_at`) VALUES
(1, 'userfirstname', 'userlastname', 'user@gmail.com', 'Alina', 'Divine Healing', 1, '2021-07-19 14:48:32'),
(2, 'Johny', 'ben', 'johny@gmail.com', 'alina', 'Helping me', 1, '2021-07-19 16:52:01'),
(3, 'test', 'contact', 'contact@gmail.com', 'contact', 'Manifestation Coaching', 1, '2021-07-19 07:46:46'),
(4, 'anoop', 'kumar', 'anoop@gmail.com', 'alinasoftwares', 'Divine Healing', 1, '2021-07-20 01:05:50'),
(5, 'Sricharan', 'G', 'sricharan.gadde24@gmail.com', 'EV', 'Booking a Speaker', 1, '2021-07-20 03:08:21'),
(6, 'applicant', 'test', 'applicant@gmail.com', 'Rent', 'Finding My Soulmate', 1, '2021-07-20 12:59:44'),
(7, 'applicant', 'test', 'applicant@gmail.com', 'Rent', 'Manifestation Coaching', 1, '2021-07-20 13:13:41'),
(8, 'applicant', 'test', 'applicant@gmail.com', 'Rent', 'Divine Healing', 1, '2021-07-20 13:16:41'),
(9, 'applicant', 'test', 'applicant@gmail.com', 'Rent', 'Divine Healing', 1, '2021-07-20 13:17:10'),
(10, 'applicant', 'test', 'applicant@gmail.com', 'Rent', 'Finding My Soulmate', 1, '2021-07-20 13:32:22'),
(11, 'anoop', 'gurjar', 'anoop@gmail.com', 'alina', 'Booking a Speaker', 1, '2021-07-20 13:32:53'),
(12, 'Test', 'Test', 'test@gmail.com', 'EV', 'Manifestation Coaching', 1, '2021-07-20 13:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `password`, `email_verified_at`, `status`, `created_at`, `updated_at`) VALUES
(94, 'anoop', 'anoop@gmail.com', '1234567895', '$2y$10$I91pmtxRM.BiW/uqgU0wZe2CcAF2yN9WxdHSgmFMV8p1xnfCHMCB6', NULL, '0', '2021-07-02 22:53:40', '2021-07-19 17:07:22'),
(117, 'ram', 'ram@gmail.com', '1234567895', '$2y$10$QoSUTPhT9AUTEHylFFwhteMeLv1t3I701Hsw6LhuQ.gW4pYXRI8qG', NULL, '0', '2021-07-09 09:20:06', '2021-07-09 09:20:06'),
(141, 'ramkumar', 'ramkumar@gmail.com', '1234569875', '$2y$10$JLaHUfOdnE2vumnJDNTk.uFYdE7VATqln9Zbxmwj8rTfx2bikanV.', NULL, '0', '2021-07-22 16:13:17', '2021-07-22 16:13:17'),
(142, 'applicant test', 'admin1234@gmail.com', '7724926143', '$2y$10$KBmfgGIN4VvXKU1A7myCJe2NECgMrrqHSDOMYChfei3D3pwhwvFwO', NULL, '0', '2021-07-22 16:18:31', '2021-07-22 16:18:31'),
(143, 'fhgfh', 'admin@gmail.com12', '7724926143', '$2y$10$Yt6MMnBGY.vew8Wy79xJ8uq4X9v1fGH8Ej/dXJG2r8fape69oiBrq', NULL, '0', '2021-07-22 16:31:23', '2021-07-22 16:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `customer_creadit`
--

CREATE TABLE `customer_creadit` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `creadit_amount` varchar(255) NOT NULL,
  `used_amount` varchar(255) DEFAULT NULL,
  `PayerID` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_creadit`
--

INSERT INTO `customer_creadit` (`id`, `customer_id`, `creadit_amount`, `used_amount`, `PayerID`, `created_at`, `updated_at`) VALUES
(1, 94, '1000', NULL, 'NYKU6TNMZYWEN', '2021-07-22 11:30:10', '2021-07-22 11:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(100) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `first_name` varchar(11) NOT NULL,
  `last_name` varchar(11) NOT NULL,
  `contact` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `emailId`, `password`, `first_name`, `last_name`, `contact`, `created_at`, `status`) VALUES
(1, 'merry@gmail.com', '123456', 'Merry', 'Ben', 874512036, '2021-06-22 12:45:44', 1),
(2, 'John@gmail.com', '123456', 'John', 'cris', 1452369871, '2021-06-22 13:04:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_questions`
--

CREATE TABLE `customer_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packg_for` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `user_package_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_questions`
--

INSERT INTO `customer_questions` (`id`, `service_type`, `fname`, `lname`, `partner_fname`, `partner_lname`, `question_check`, `notification_status`, `check_price`, `customer_id`, `customer_type`, `packg_for`, `package_id`, `user_package_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0,1,2', '0', 94, 'customer', 0, 0, 1, '1', NULL, '2021-07-22 15:29:40', '2021-07-22 15:35:11'),
(2, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,1,2,2', '0', 94, 'customer', 0, 0, 1, '0', NULL, '2021-07-22 15:29:40', '2021-07-22 15:35:10'),
(3, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0,1,2', '0', 94, 'customer', 0, 0, 1, '1', NULL, '2021-07-22 15:29:40', '2021-07-22 15:35:07'),
(4, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0,2,2', '0', 94, 'customer', 1, 3, 2, '0', NULL, '2021-07-22 15:48:42', '2021-07-22 15:56:19'),
(5, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,2', '0', 94, 'customer', 1, 3, 2, '0', NULL, '2021-07-22 15:48:42', '2021-07-22 15:56:17'),
(6, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 141, 'customer', 0, 0, 3, '0', NULL, '2021-07-22 16:13:18', '2021-07-22 16:13:18'),
(7, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 141, 'customer', 0, 0, 3, '0', NULL, '2021-07-22 16:13:18', '2021-07-22 16:13:18'),
(8, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 141, 'customer', 0, 0, 3, '0', NULL, '2021-07-22 16:13:18', '2021-07-22 16:13:18'),
(9, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 142, 'customer', 1, 3, 4, '0', NULL, '2021-07-22 16:18:31', '2021-07-22 16:18:31'),
(10, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 142, 'customer', 1, 3, 4, '0', NULL, '2021-07-22 16:18:31', '2021-07-22 16:18:31'),
(11, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 142, 'customer', 1, 3, 4, '0', NULL, '2021-07-22 16:18:31', '2021-07-22 16:18:31'),
(12, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 77, 'guest', 1, 7, 5, '0', NULL, '2021-07-22 16:21:25', '2021-07-22 16:21:25'),
(13, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 77, 'guest', 1, 7, 5, '0', NULL, '2021-07-22 16:21:25', '2021-07-22 16:21:25'),
(14, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 77, 'guest', 1, 7, 5, '0', NULL, '2021-07-22 16:21:25', '2021-07-22 16:21:25'),
(15, '1', 'anoop', 'gurjar', 'rajesh', 'gurjar', 'Did I know them in an earlier life?', '0', '0', 78, 'guest', 1, 7, 6, '0', NULL, '2021-07-22 16:23:00', '2021-07-22 16:23:00'),
(16, '1', 'anoop', 'gurjar', 'rajesh', 'gurjar', 'Were we friends, lovers, business partners or something else?', '0', '0', 78, 'guest', 1, 7, 6, '0', NULL, '2021-07-22 16:23:00', '2021-07-22 16:23:00'),
(17, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 82, 'guest', 1, 7, 7, '0', NULL, '2021-07-22 16:27:04', '2021-07-22 16:27:04'),
(18, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 82, 'guest', 1, 7, 7, '0', NULL, '2021-07-22 16:27:04', '2021-07-22 16:27:04'),
(19, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 82, 'guest', 1, 7, 7, '0', NULL, '2021-07-22 16:27:04', '2021-07-22 16:27:04'),
(20, '1', 'ram', 'kumar', 'kuamr', 'raj', 'Did I know them in an earlier life?', '0', '0', 83, 'guest', 1, 7, 8, '0', NULL, '2021-07-22 16:27:58', '2021-07-22 16:27:58'),
(21, '1', 'ram', 'kumar', 'kuamr', 'raj', 'Were we friends, lovers, business partners or something else?', '0', '0', 83, 'guest', 1, 7, 8, '0', NULL, '2021-07-22 16:27:58', '2021-07-22 16:27:58'),
(22, '1', 'applicant', 'test', 'applicant', 'test', 'Did I know them in an earlier life?', '0', '0', 84, 'guest', 1, 7, 9, '0', NULL, '2021-07-22 16:28:50', '2021-07-22 16:28:50'),
(23, '1', 'applicant', 'test', 'applicant', 'test', 'Were we friends, lovers, business partners or something else?', '0', '0', 84, 'guest', 1, 7, 9, '0', NULL, '2021-07-22 16:28:50', '2021-07-22 16:28:50'),
(24, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 143, 'customer', 0, 0, 10, '1', NULL, '2021-07-22 16:31:23', '2021-07-22 16:31:23'),
(25, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 143, 'customer', 0, 0, 10, '1', NULL, '2021-07-22 16:31:23', '2021-07-22 16:31:23'),
(26, '1', 'applicant', 'test', 'applicant', 'test', 'Were we friends, lovers, business partners or something else?', '0', '0', 85, 'guest', 1, 7, 11, '0', NULL, '2021-07-22 16:32:34', '2021-07-22 16:32:34'),
(27, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 0, 0, 12, '0', NULL, '2021-07-22 16:33:45', '2021-07-22 16:33:45'),
(28, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 0, 0, 12, '0', NULL, '2021-07-22 16:33:45', '2021-07-22 16:33:45'),
(29, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 94, 'customer', 0, 0, 12, '0', NULL, '2021-07-22 16:33:45', '2021-07-22 16:33:45'),
(30, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 0, 0, 13, '0', NULL, '2021-07-22 16:35:11', '2021-07-22 16:35:11'),
(31, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 0, 0, 13, '0', NULL, '2021-07-22 16:35:11', '2021-07-22 16:35:11'),
(32, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 94, 'customer', 0, 0, 13, '0', NULL, '2021-07-22 16:35:11', '2021-07-22 16:35:11'),
(33, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 1, 3, 14, '0', NULL, '2021-07-22 16:35:49', '2021-07-22 16:35:49'),
(34, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 1, 3, 14, '0', NULL, '2021-07-22 16:35:49', '2021-07-22 16:35:49'),
(35, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 0, 0, 15, '0', NULL, '2021-07-22 17:42:05', '2021-07-22 17:42:05'),
(36, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 0, 0, 15, '1', NULL, '2021-07-22 17:42:05', '2021-07-22 17:42:05'),
(37, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 1, 7, 16, '0', NULL, '2021-07-22 17:42:44', '2021-07-22 17:42:44'),
(38, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 1, 7, 16, '0', NULL, '2021-07-22 17:42:44', '2021-07-22 17:42:44'),
(39, '1', 'applicant', 'test', 'applicant', 'test', 'Did I know them in an earlier life?', '0', '0', 94, 'customer', 1, 7, 17, '0', NULL, '2021-07-22 17:46:35', '2021-07-22 17:46:35'),
(40, '1', 'applicant', 'test', 'applicant', 'test', 'Were we friends, lovers, business partners or something else?', '0', '0', 94, 'customer', 1, 7, 17, '0', NULL, '2021-07-22 17:46:35', '2021-07-22 17:46:35'),
(41, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 86, 'guest', 0, 0, 18, '0', NULL, '2021-07-22 17:49:17', '2021-07-22 17:49:17'),
(42, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 86, 'guest', 0, 0, 18, '0', NULL, '2021-07-22 17:49:17', '2021-07-22 17:49:17'),
(43, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 86, 'guest', 0, 0, 18, '0', NULL, '2021-07-22 17:49:17', '2021-07-22 17:49:17'),
(44, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 1, 7, 19, '0', NULL, '2021-07-22 19:26:00', '2021-07-22 19:26:00'),
(45, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 1, 7, 19, '0', NULL, '2021-07-22 19:26:00', '2021-07-22 19:26:00'),
(46, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 94, 'customer', 1, 7, 19, '0', NULL, '2021-07-22 19:26:00', '2021-07-22 19:26:00'),
(47, '2', NULL, NULL, NULL, NULL, 'How do I build my team?', '0', '0', 94, 'customer', 1, 7, 19, '0', NULL, '2021-07-22 19:26:00', '2021-07-22 19:26:00'),
(48, '2', NULL, NULL, NULL, NULL, 'How do I win big contracts by working for the City or State government?', '0', '0', 94, 'customer', 1, 7, 19, '0', NULL, '2021-07-22 19:26:00', '2021-07-22 19:26:00'),
(49, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 1, 9, 20, '0', NULL, '2021-07-22 19:27:02', '2021-07-22 19:27:02'),
(50, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0', '0', 94, 'customer', 1, 9, 20, '0', NULL, '2021-07-22 19:27:02', '2021-07-22 19:27:02'),
(51, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0', '0', 94, 'customer', 1, 9, 20, '0', NULL, '2021-07-22 19:27:02', '2021-07-22 19:27:02'),
(52, '2', NULL, NULL, NULL, NULL, 'How do I build my team?', '0', '0', 94, 'customer', 1, 9, 20, '0', NULL, '2021-07-22 19:27:02', '2021-07-22 19:27:02'),
(53, '2', NULL, NULL, NULL, NULL, 'How do I win big contracts by working for the City or State government?', '0', '0', 94, 'customer', 1, 9, 20, '0', NULL, '2021-07-22 19:27:02', '2021-07-22 19:27:02'),
(54, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0', '0', 94, 'customer', 1, 9, 21, '0', NULL, '2021-07-22 19:38:54', '2021-07-22 19:38:54'),
(55, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,2', '0', 94, 'customer', 1, 9, 21, '0', NULL, '2021-07-22 19:38:54', '2021-07-22 21:35:57'),
(56, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0,2,2', '0', 94, 'customer', 1, 9, 21, '0', NULL, '2021-07-22 19:38:54', '2021-07-22 21:35:26'),
(57, '2', NULL, NULL, NULL, NULL, 'How do I build my team?', '0,2,2,2,2,2,2', '0', 94, 'customer', 1, 9, 21, '0', NULL, '2021-07-22 19:38:54', '2021-07-22 21:35:25'),
(58, '2', NULL, NULL, NULL, NULL, 'How do I win big contracts by working for the City or State government?', '0,2', '0', 94, 'customer', 1, 9, 21, '0', NULL, '2021-07-22 19:38:54', '2021-07-22 21:35:21'),
(59, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0,2,2', '0', 94, 'customer', 1, 9, 22, '0', NULL, '2021-07-22 19:39:15', '2021-07-22 21:28:33'),
(60, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,2', '0', 94, 'customer', 1, 9, 22, '0', NULL, '2021-07-22 19:39:15', '2021-07-22 21:28:31'),
(61, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0,2', '0', 94, 'customer', 1, 9, 22, '0', NULL, '2021-07-22 19:39:15', '2021-07-22 21:28:29'),
(62, '2', NULL, NULL, NULL, NULL, 'How do I build my team?', '0,2', '0', 94, 'customer', 1, 9, 22, '0', NULL, '2021-07-22 19:39:15', '2021-07-22 21:28:27'),
(63, '2', NULL, NULL, NULL, NULL, 'How do I win big contracts by working for the City or State government?', '0,2,2,2,2,2', '0', 94, 'customer', 1, 9, 22, '0', NULL, '2021-07-22 19:39:15', '2021-07-22 20:51:09'),
(64, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0,2,2,2,2', '0', 94, 'customer', 1, 9, 23, '0', NULL, '2021-07-22 19:40:22', '2021-07-22 20:51:07'),
(65, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,2,2,2', '0', 94, 'customer', 1, 9, 23, '0', NULL, '2021-07-22 19:40:22', '2021-07-22 20:51:06'),
(66, '2', NULL, NULL, NULL, NULL, 'How do I get more customers?', '0,2,2,2,2', '0', 94, 'customer', 1, 9, 24, '0', NULL, '2021-07-22 19:47:45', '2021-07-22 20:51:05'),
(67, '2', NULL, NULL, NULL, NULL, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', '0,2,2,2', '0', 94, 'customer', 1, 9, 24, '0', NULL, '2021-07-22 19:47:45', '2021-07-22 20:51:03'),
(68, '2', NULL, NULL, NULL, NULL, 'How do I get funding?', '0,2,2', '0', 94, 'customer', 1, 9, 24, '0', NULL, '2021-07-22 19:47:45', '2021-07-22 20:51:00'),
(69, '2', NULL, NULL, NULL, NULL, 'How do I build my team?', '0,2', '0', 94, 'customer', 1, 9, 24, '0', NULL, '2021-07-22 19:47:45', '2021-07-22 20:50:56'),
(70, '2', NULL, NULL, NULL, NULL, 'How do I win big contracts by working for the City or State government?', '0,2', '0', 94, 'customer', 1, 9, 24, '0', NULL, '2021-07-22 19:47:45', '2021-07-22 20:50:54');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(37, 'GUEST TEST', '', '78542361260', '0', '2021-07-09 17:49:23', '2021-07-09 17:49:23'),
(43, 'sricharan', '', '8861154600', '0', '2021-07-12 18:10:38', '2021-07-12 18:10:38'),
(73, 'fhgfh', '', '7724926143', '0', '2021-07-19 21:34:08', '2021-07-19 21:34:08'),
(74, 'applicant test', '', NULL, '0', '2021-07-20 09:50:43', '2021-07-20 09:50:43'),
(75, 'applicant test', '', NULL, '0', '2021-07-20 10:30:16', '2021-07-20 10:30:16'),
(76, 'Guest1', '', NULL, '0', '2021-07-20 22:47:59', '2021-07-20 22:47:59'),
(77, 'applicant test', '', NULL, '0', '2021-07-22 16:21:25', '2021-07-22 16:21:25'),
(78, 'fhgfh', '', NULL, '0', '2021-07-22 16:23:00', '2021-07-22 16:23:00'),
(82, 'Test', 'admin@gmail.com', NULL, '0', '2021-07-22 16:27:03', '2021-07-22 16:27:03'),
(83, 'Test', 'admin@gmail.com', NULL, '0', '2021-07-22 16:27:57', '2021-07-22 16:27:57'),
(84, 'testbar', 'admin@gmail.com', NULL, '0', '2021-07-22 16:28:50', '2021-07-22 16:28:50'),
(85, 'Test', 'admin@gmail.com', NULL, '0', '2021-07-22 16:32:34', '2021-07-22 16:32:34'),
(86, 'applicant test', 'admin@gmail.com', NULL, '0', '2021-07-22 17:49:16', '2021-07-22 17:49:16'),
(87, 'Test', 'admin@gmail.com', NULL, '0', '2021-07-22 19:38:53', '2021-07-22 19:38:53');

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
(4, '2021_06_16_153911_create_coaches_table', 1),
(5, '2021_06_19_054052_create_coach_details_table', 1),
(6, '2021_06_19_125637_create_modules_table', 1),
(7, '2021_06_19_130407_create_packages_table', 1),
(8, '2021_06_19_130533_create_permissions_table', 1),
(9, '2021_06_19_130750_create_questions_table', 1),
(10, '2021_06_19_130941_create_roles_table', 1),
(11, '2021_06_19_131105_create_user_packages_table', 1),
(12, '2021_06_19_131513_create_user_ques_table', 1),
(13, '2021_07_01_105900_create_customers_table', 2),
(14, '2021_07_02_095627_create_guests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuorder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(22) NOT NULL,
  `name` varchar(23) NOT NULL,
  `description` text,
  `packg_for` int(1) NOT NULL COMMENT '1:call,2:message',
  `price` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:active,2:deactive',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `description`, `packg_for`, `price`, `status`, `added_at`) VALUES
(3, '60Min Consultation', 'Customer can talk for 60 minute.', 1, 397, 1, '2021-07-22 08:44:22'),
(7, '90Min Consultation', 'Customer can talk for 90 min.', 1, 447, 1, '2021-07-22 08:45:32'),
(8, '120 Min Consultation', 'you can ask unlimited questions', 1, 900, 1, '2021-07-21 16:42:34'),
(9, '180 Min Consultation', 'You can ask unlimited number of questions', 1, 1200, 1, '2021-07-22 08:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `enddate` varchar(100) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`id`, `name`, `amount`, `type`, `startdate`, `enddate`, `added_at`, `status`) VALUES
(5, 'R15', '15', '$', '02/07/2021', '30/07/2021', '2021-07-13 11:39:12', 1),
(7, 'R5', '5', '$', '2021-07-17', '2021-07-17', '2021-07-17 12:49:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coach_id` bigint(20) UNSIGNED NOT NULL,
  `ques` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `coach_id`, `ques`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Did I know them in an earlier life?', 1, '2021-06-26 02:40:27', NULL),
(2, 1, 'Were we friends, lovers, business partners or something else?', 1, '2021-06-26 02:40:27', NULL),
(3, 1, 'Where in the world was I when I knew them?', 1, '2021-06-26 02:40:27', NULL),
(4, 1, 'What year did I know them?', 1, '2021-06-26 02:40:27', NULL),
(5, 2, 'How do I get more customers?', 1, '2021-06-26 02:40:27', NULL),
(6, 2, 'How do I become #1 on Google, YouTube, Facebook, Bing, etc.?', 1, '2021-06-25 17:25:26', NULL),
(8, 7, 'I want some advice sports related.', 1, '2021-06-26 12:34:12', NULL),
(9, 2, 'How do I get funding?', 1, '2021-07-14 15:35:01', NULL),
(10, 2, 'How do I build my team?', 1, '2021-07-14 15:35:20', NULL),
(11, 2, 'How do I win big contracts by working for the City or State government?', 1, '2021-07-17 12:32:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `coach_id` int(50) NOT NULL,
  `uesr_type` varchar(200) NOT NULL,
  `ques_id` int(50) NOT NULL,
  `answer` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `ans_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `user_id`, `coach_id`, `uesr_type`, `ques_id`, `answer`, `status`, `ans_at`) VALUES
(1, 94, 59, 'customer', 1, '<p>this is first response for test</p>', 2, '2021-07-22 07:50:00'),
(2, 94, 59, 'customer', 35, '<p>anoop test</p>', 2, '2021-07-22 12:26:23'),
(3, 94, 59, 'customer', 35, '<p>second response</p>', 2, '2021-07-22 12:26:47'),
(4, 94, 59, 'customer', 35, '<p>third response test data</p>', 2, '2021-07-22 12:32:51'),
(5, 143, 59, 'customer', 24, '<p>anoop gurjar test response</p>', 1, '2021-07-22 12:34:38'),
(6, 143, 59, 'customer', 24, '<p>rajesh response</p>', 1, '2021-07-22 12:35:03'),
(7, 143, 59, 'customer', 24, '<p>fadfsdafsadf sadfsdafsda</p>', 1, '2021-07-22 12:38:28'),
(8, 143, 59, 'customer', 24, '<p>reare fdaf afdsa fsadfsdf</p>', 1, '2021-07-22 12:38:47'),
(9, 94, 59, 'customer', 2, '<p>test response</p>', 2, '2021-07-22 13:13:43'),
(10, 143, 59, 'customer', 24, '<p>test response</p>', 1, '2021-07-22 13:43:04'),
(11, 94, 59, 'customer', 3, '<p>how to get funding response 1111</p>', 2, '2021-07-22 13:49:05'),
(12, 143, 59, 'customer', 25, '<p>response 22222222</p>', 1, '2021-07-22 13:52:43'),
(13, 94, 59, 'customer', 36, '<p>test response</p>', 2, '2021-07-22 14:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Spiritual Coach', 0, NULL, NULL),
(2, 'Business Coach', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_question`
--

CREATE TABLE `service_question` (
  `id` int(50) NOT NULL,
  `coach_id` int(50) NOT NULL,
  `ques` text NOT NULL,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_question`
--

INSERT INTO `service_question` (`id`, `coach_id`, `ques`, `added_at`, `status`) VALUES
(4, 2, 'Help me Grow my Business.', '2021-06-26 03:10:03', 1),
(5, 1, 'Help me Find my Soulmate.', '2021-06-26 08:00:56', 1),
(10, 2, 'Help me build my Business Empire.', '2021-07-16 06:06:19', 1),
(11, 2, 'Help me become an influencer online.', '2021-07-16 06:08:03', 1),
(12, 1, 'Help me change…', '2021-07-16 06:08:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `design` varchar(50) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `descrp` text,
  `photo` varchar(200) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:active,2:deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `design`, `place`, `type`, `descrp`, `photo`, `video`, `link`, `status`) VALUES
(8, 'Sarah Montanaro1', 'Sports Info. Director', 'Boston University', 'Business', 'Rajiv is an outgoing and charismatic career and business coach who helped me transform the way I show up online and in-person.', '/testimonial/image/1625566988Picture22.jpg', '0', '0', 2),
(9, 'Brian perry1', 'Enterprise Sales', 'HPRG', '', 'Rajiv is an effective business coach who helped my business with original content, online visibility and social media.', '/testimonial/image/1625566934Picture14.jpg', '0', '0', 1),
(12, 'Joe Dec1', 'Managing Partner, All Print Resources Group', NULL, '', 'Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...', '/testimonial/image/1625566642Picture11.jpg', '0', '0', 1),
(14, 'Sarah Montanaro1', 'Sports Info. Director', 'Boston University', '', 'Rajiv is an outgoing and charismatic career and business coach who helped me transform the way I show up online and in-person.', '/testimonial/image/1625566988Picture22.jpg', '0', '0', 2),
(15, 'Joe Dec1', 'Managing Partner, All Print Resources Group', NULL, '', 'Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...', '/testimonial/image/1625566642Picture11.jpg', '0', '0', 2),
(16, 'Joe Dec1', 'Managing Partner, All Print Resources Group', NULL, '', 'Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...', '/testimonial/image/1625566642Picture11.jpg', '0', '0', 1),
(17, 'Joe Dec1', 'Managing Partner,All Print Resources Group', NULL, '', 'Best business coachRajiv provided incredible insight and valuable suggestions on how to increase market share...', '/testimonial/image/1625744865100_9.jpg', '0', '0', 1),
(18, 'Merry', NULL, NULL, '', NULL, '/testimonial/image/1625566642Picture11.jpg', '0', 'https://www.youtube.com/embed/cIRxRM5M8Ds', 1),
(20, 'mahesh', 'developer1', 'bhopal', '', NULL, '/testimonial/image/1625744753300_13.jpg', '0', 'https://www.youtube.com/embed/cIRxRM5M8Ds', 1),
(23, 'Johny', 'business', NULL, 'Business', 'business', '/testimonial/image/1626529845Picture3.jpg', '0', '0', 1);

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `photo`, `phone`) VALUES
(3, 'ADMIN', 'admin@gmail.com', NULL, '$2y$10$SXQWONCDmyX07dbBv5uPf.IES564srr5T83xhnatHqAAjzsu7j5A2', '0', 'ad69dnPeMvDmO7CCsGuDxKBtZuwHEdTPvl3HGsX76lG13MsYgggDK2DGAZvl', '2021-06-22 04:12:33', '2021-07-09 17:39:10', '1625829150100_6.jpg', '785423612601');

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pack_id` bigint(20) UNSIGNED NOT NULL,
  `total_question` bigint(20) DEFAULT NULL,
  `remaining_ques` bigint(20) DEFAULT NULL,
  `total_amount` bigint(20) NOT NULL,
  `user_type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_package`
--

INSERT INTO `user_package` (`id`, `user_id`, `pack_id`, `total_question`, `remaining_ques`, `total_amount`, `user_type`, `status`, `added_at`) VALUES
(1, 94, 0, 3, 0, 180, 'customer', 1, '2021-07-22 11:29:40'),
(2, 94, 3, 2, NULL, 397, 'customer', 1, '2021-07-22 11:48:42'),
(3, 141, 0, 3, 0, 180, 'customer', 1, '2021-07-22 12:13:18'),
(4, 142, 3, 3, NULL, 397, 'customer', 0, '2021-07-22 12:18:31'),
(5, 77, 7, 3, NULL, 447, 'guest', 1, '2021-07-22 12:21:25'),
(6, 78, 7, 2, NULL, 447, 'guest', 0, '2021-07-22 12:23:00'),
(7, 82, 7, 3, NULL, 447, 'guest', 1, '2021-07-22 12:27:04'),
(8, 83, 7, 2, NULL, 447, 'guest', 0, '2021-07-22 12:27:58'),
(9, 84, 7, 2, NULL, 447, 'guest', 0, '2021-07-22 12:28:50'),
(10, 143, 0, 2, 0, 120, 'customer', 0, '2021-07-22 12:31:23'),
(11, 85, 7, 1, NULL, 447, 'guest', 1, '2021-07-22 12:32:34'),
(12, 94, 0, 3, 0, 180, 'customer', 1, '2021-07-22 12:33:45'),
(13, 94, 0, 3, 0, 180, 'customer', 1, '2021-07-22 12:35:11'),
(14, 94, 3, 2, NULL, 397, 'customer', 1, '2021-07-22 12:35:49'),
(15, 94, 0, 2, 0, 120, 'customer', 1, '2021-07-22 13:42:05'),
(16, 94, 7, 2, NULL, 447, 'customer', 1, '2021-07-22 13:42:44'),
(17, 94, 7, 2, NULL, 447, 'customer', 1, '2021-07-22 13:46:35'),
(18, 86, 0, 3, 0, 180, 'guest', 1, '2021-07-22 13:49:17'),
(19, 94, 7, 5, NULL, 447, 'customer', 1, '2021-07-22 15:26:00'),
(20, 94, 9, 5, NULL, 1200, 'customer', 1, '2021-07-22 15:27:02'),
(21, 94, 9, 5, NULL, 1200, 'customer', 0, '2021-07-22 15:38:54'),
(22, 94, 9, 5, NULL, 1200, 'customer', 1, '2021-07-22 15:39:15'),
(23, 94, 9, 2, NULL, 1200, 'customer', 1, '2021-07-22 15:40:22'),
(24, 94, 9, 5, NULL, 1200, 'customer', 1, '2021-07-22 15:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_ques`
--

CREATE TABLE `user_ques` (
  `id` int(22) NOT NULL,
  `user_id` int(22) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `otherpname` varchar(20) DEFAULT NULL,
  `ques` varchar(50) NOT NULL,
  `answer` text,
  `status` int(2) NOT NULL COMMENT '1:pending,2:responsed',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ans_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ques`
--

INSERT INTO `user_ques` (`id`, `user_id`, `coach_id`, `name`, `otherpname`, `ques`, `answer`, `status`, `added_at`, `ans_at`) VALUES
(1, 2, 1, 'john', NULL, 'How to get success in my business.', '<h2>Quick and simple CKEditor 5 Integration</h2><p>Here goes the <a href=\"#\">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the <i>printing and typesetting</i> industry.</p><blockquote><p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></blockquote>', 2, '2021-06-22 13:06:13', NULL),
(2, 2, 1, 'john', NULL, 'How to  run  a business.', NULL, 1, '2021-06-22 13:11:02', '2021-06-22 13:11:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coaches_email_unique` (`email`);

--
-- Indexes for table `coach_details`
--
ALTER TABLE `coach_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `customer_creadit`
--
ALTER TABLE `customer_creadit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_questions`
--
ALTER TABLE `customer_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_question`
--
ALTER TABLE `service_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ques`
--
ALTER TABLE `user_ques`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `coach_details`
--
ALTER TABLE `coach_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `customer_creadit`
--
ALTER TABLE `customer_creadit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_questions`
--
ALTER TABLE `customer_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promocode`
--
ALTER TABLE `promocode`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_question`
--
ALTER TABLE `service_question`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_ques`
--
ALTER TABLE `user_ques`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
