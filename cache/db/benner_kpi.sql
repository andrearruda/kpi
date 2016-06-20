-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2016 às 10:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benner_kpi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_id` int(11) DEFAULT NULL,
  `contributors_1_year_number_of_employees` int(11) DEFAULT NULL,
  `contributors_2_year_number_of_employees` int(11) DEFAULT NULL,
  `contributors_1_year_icons` int(11) DEFAULT NULL,
  `contributors_2_year_icons` int(11) DEFAULT NULL,
  `contributors_1_year_billing_by_employees` double DEFAULT NULL,
  `contributors_2_year_billing_by_employees` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employees_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `kpi_id`, `contributors_1_year_number_of_employees`, `contributors_2_year_number_of_employees`, `contributors_1_year_icons`, `contributors_2_year_icons`, `contributors_1_year_billing_by_employees`, `contributors_2_year_billing_by_employees`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, 840, 853, 12, 16, 55, 63, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(2, 14, 760, 777, 6, 7, 107.3, 117.5, '2016-03-07 18:58:48', '2016-04-15 17:31:01', NULL),
(3, 15, 828, 774, 8, 7, 12.01, 11.21, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `group_benner`
--

CREATE TABLE IF NOT EXISTS `group_benner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double NOT NULL,
  `revenues_end` double NOT NULL,
  `revenues_target` double NOT NULL,
  `revenues_percentage` double NOT NULL,
  `ebtida_initial` double NOT NULL,
  `ebtida_end` double NOT NULL,
  `ebtida_target` double NOT NULL,
  `ebtida_percentage` double NOT NULL,
  `net_profit_initial` double NOT NULL,
  `net_profit_end` double NOT NULL,
  `net_profit_target` double NOT NULL,
  `net_profit_percentage` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_benner_kpi_type_idx` (`kpi_type_id`),
  KEY `fk_group_benner_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `group_benner`
--

INSERT INTO `group_benner` (`id`, `kpi_type_id`, `kpi_id`, `revenues_initial`, `revenues_end`, `revenues_target`, `revenues_percentage`, `ebtida_initial`, `ebtida_end`, `ebtida_target`, `ebtida_percentage`, `net_profit_initial`, `net_profit_end`, `net_profit_target`, `net_profit_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(3, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:05', '2016-01-28 17:13:05', NULL),
(4, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:06', '2016-01-28 17:13:06', NULL),
(5, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(6, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(7, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:47', '2016-01-28 17:18:47', NULL),
(8, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(9, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:17', '2016-01-28 17:19:17', NULL),
(10, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(11, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(12, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(13, 1, 7, 52, 60.4, 65, 16, 8.1, 12.8, 15, 58, 5.9, 11.2, 15, 88, '2016-01-29 10:13:39', '2016-01-29 10:13:39', NULL),
(14, 2, 7, 65.8, 60.4, 70, -8.3, 12.5, 12.8, 20, 2, 7.6, 11.2, 20, 46, '2016-01-29 10:13:41', '2016-01-29 10:13:41', NULL),
(15, 1, 8, 52, 60.4, 62, 16, 8.1, 12.8, 14, 58, 5.9, 11.2, 12, 88, '2016-01-29 14:28:29', '2016-02-17 15:58:50', NULL),
(16, 2, 8, 65.8, 60.4, 75, -8.3, 12.5, 12.8, 15, 2, 7.6, 11.2, 13, 46, '2016-01-29 14:28:30', '2016-02-17 15:58:51', NULL),
(17, 1, 9, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, '2016-01-29 14:30:16', '2016-02-03 16:01:12', NULL),
(18, 2, 9, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, 0.06, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(19, 1, 10, 52, 60.4, 70, 16, 8.1, 12.8, 15, 58, 5.9, 11.2, 15, 88, '2016-02-01 15:38:20', '2016-02-12 10:30:24', NULL),
(20, 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-01 15:38:20', '2016-02-12 10:30:25', NULL),
(21, 1, 11, 14.9, 18.6, 20, 23, 3.7, 5.4, 20, 46, 2.9, 4.9, 20, 67, '2016-02-04 14:48:08', '2016-02-11 11:26:21', NULL),
(22, 2, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(23, 1, 12, 14.9, 16.9, 20, 23, 3.7, 5.4, 20, 46, 2.9, 4.9, 20, 67, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(24, 2, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(25, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(26, 2, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(27, 1, 14, 81.55, 91.3, 100, 12, 14.06, 19.03, 100, 35.3, 10.03, 16.8, 100, 67.4, '2016-03-07 18:58:47', '2016-04-15 17:30:57', NULL),
(28, 2, 14, 106.63, 91.3, 110, -14.4, 24.07, 19.03, 110, -20.9, 14.96, 16.8, 110, 12.3, '2016-03-07 18:58:48', '2016-04-15 17:31:00', NULL),
(29, 1, 15, 29.84, 26.03, 30, -12.8, 7.89, 4.13, 30, -47.6, 6.24, 3.44, 30, -44.9, '2016-05-16 15:37:00', '2016-05-17 12:56:14', NULL),
(30, 2, 15, 33.4, 26.03, 34, -22.1, 7.49, 4.13, 34, -44.8, 3.31, 3.44, 34, 4, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `health_operators`
--

CREATE TABLE IF NOT EXISTS `health_operators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double NOT NULL,
  `revenues_end` double NOT NULL,
  `revenues_target` double NOT NULL,
  `revenues_percentage` double NOT NULL,
  `ebtida_initial` double NOT NULL,
  `ebtida_end` double NOT NULL,
  `ebtida_target` double NOT NULL,
  `ebtida_percentage` double NOT NULL,
  `net_profit_initial` double NOT NULL,
  `net_profit_end` double NOT NULL,
  `net_profit_target` double NOT NULL,
  `net_profit_percentage` double NOT NULL,
  `lu_value` double NOT NULL,
  `lu_percentage` double NOT NULL,
  `lum_value` double NOT NULL,
  `lum_percentage` double NOT NULL,
  `implantation_value` double NOT NULL,
  `implantation_percentage` double NOT NULL,
  `sms_value` double NOT NULL,
  `sms_percentage` double NOT NULL,
  `medical_services_value` double NOT NULL,
  `medical_services_percentage` double NOT NULL,
  `workout_value` double NOT NULL,
  `workout_percentage` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_health_operators_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_health_operators_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `health_operators`
--

INSERT INTO `health_operators` (`id`, `kpi_type_id`, `kpi_id`, `revenues_initial`, `revenues_end`, `revenues_target`, `revenues_percentage`, `ebtida_initial`, `ebtida_end`, `ebtida_target`, `ebtida_percentage`, `net_profit_initial`, `net_profit_end`, `net_profit_target`, `net_profit_percentage`, `lu_value`, `lu_percentage`, `lum_value`, `lum_percentage`, `implantation_value`, `implantation_percentage`, `sms_value`, `sms_percentage`, `medical_services_value`, `medical_services_percentage`, `workout_value`, `workout_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:05', '2016-01-28 17:13:05', NULL),
(3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(4, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:47', '2016-01-28 17:18:47', NULL),
(5, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(6, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:17', '2016-01-28 17:19:17', NULL),
(7, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(8, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(9, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:31', '2016-01-28 17:19:31', NULL),
(10, 1, 7, 14.9, 18.6, 20, 24.5, 3.7, 5.5, 8, 46, 2.9, 4.9, 8, 66.2, 0.1, 1, 8.5, 46, 2.5, 14, 5.6, 30, 1.4, 8, 0.4, 2, '2016-01-29 10:13:40', '2016-01-29 10:13:40', NULL),
(11, 2, 7, 20.8, 18.6, 25, -10.5, 6.4, 5.5, 10, -15, 4.2, 4.9, 10, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 10:13:41', '2016-01-29 10:13:41', NULL),
(12, 1, 8, 14.9, 18.6, 20, 24.5, 3.7, 5.5, 6, 46, 2.9, 4.9, 6, 66.2, 0.1, 1, 8.5, 46, 2.5, 14, 5.6, 30, 1.4, 8, 0.4, 2, '2016-01-29 14:28:29', '2016-02-17 15:58:51', NULL),
(13, 2, 8, 20.8, 18.6, 25, -10.5, 6.4, 5.5, 8, -15, 4.2, 4.9, 6, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 14:28:30', '2016-02-17 15:58:51', NULL),
(14, 1, 9, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, 0.02, '2016-01-29 14:30:16', '2016-02-03 16:01:12', NULL),
(15, 2, 9, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0.07, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(16, 1, 10, 14.9, 18.6, 20, 24.5, 3.7, 5.5, 8, 46, 2.9, 4.9, 8, 66.2, 0.1, 1, 8.5, 46, 2.5, 14, 5.6, 30, 1.4, 8, 0.4, 2, '2016-02-01 15:38:20', '2016-02-12 10:30:24', NULL),
(17, 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-01 15:38:20', '2016-02-12 10:30:25', NULL),
(18, 1, 11, 2, 3, 5, 60, 6, 6, 8, 50, 3, 2, 4, 70, 2, 100, 6, 100, 9, 100, 4, 100, 3, 100, 3.33, 100, '2016-02-04 14:48:08', '2016-02-11 11:26:21', NULL),
(19, 2, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(20, 1, 12, 11.9, 13.5, 15, 18, 1.1, 2.1, 15, 85, 0.6, 1.3, 15, 107, 0.01, 1, 7.7, 46, 2.3, 14, 5.1, 30, 1.2, 8, 0.3, 2, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(21, 2, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(22, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(23, 2, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(24, 1, 14, 23.89, 28.16, 30, 17.8, 6.61, 8.24, 30, 24.7, 4.94, 8.46, 30, 71.1, 0.13, 0.5, 12.82, 45.5, 4.42, 15.7, 8.26, 29.4, 1.86, 6.6, 0.65, 2.3, '2016-03-07 18:58:47', '2016-04-15 17:30:57', NULL),
(25, 2, 14, 33.51, 28.16, 35, -16, 11.06, 8.24, 35, -25.5, 7.28, 8.46, 35, 16.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-07 18:58:48', '2016-04-15 17:31:00', NULL),
(26, 1, 15, 10.27, 8.16, 11, -20.6, 4.19, 2.2, 11, -47.5, 3, 1.82, 11, -39.4, 0.07, 0.9, 4.73, 58, 1.19, 14.7, 1.28, 15.7, 0.74, 9.2, 0.12, 1.6, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL),
(27, 2, 15, 9.02, 8.16, 10, -9.6, 1.96, 2.2, 10, 11.9, 0.73, 1.82, 10, 146.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double NOT NULL,
  `revenues_end` double NOT NULL,
  `revenues_target` double NOT NULL,
  `revenues_percentage` double NOT NULL,
  `ebtida_initial` double NOT NULL,
  `ebtida_end` double NOT NULL,
  `ebtida_target` double NOT NULL,
  `ebtida_percentage` double NOT NULL,
  `net_profit_initial` double NOT NULL,
  `net_profit_end` double NOT NULL,
  `net_profit_target` double NOT NULL,
  `net_profit_percentage` double NOT NULL,
  `lu_value` double NOT NULL,
  `lu_percentage` double NOT NULL,
  `lum_value` double NOT NULL,
  `lum_percentage` double NOT NULL,
  `implantation_value` double NOT NULL,
  `implantation_percentage` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_hospital_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_hospital_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `hospital`
--

INSERT INTO `hospital` (`id`, `kpi_type_id`, `kpi_id`, `revenues_initial`, `revenues_end`, `revenues_target`, `revenues_percentage`, `ebtida_initial`, `ebtida_end`, `ebtida_target`, `ebtida_percentage`, `net_profit_initial`, `net_profit_end`, `net_profit_target`, `net_profit_percentage`, `lu_value`, `lu_percentage`, `lum_value`, `lum_percentage`, `implantation_value`, `implantation_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:05', '2016-01-28 17:13:05', NULL),
(3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(4, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:47', '2016-01-28 17:18:47', NULL),
(5, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(6, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:17', '2016-01-28 17:19:17', NULL),
(7, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(8, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(9, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:31', '2016-01-28 17:19:31', NULL),
(10, 1, 7, 1, 2.3, 3, 130, 0, 0, 0, 0, 0, 0, 0, 0, 0.1, 8, 1.8, 79, 0.2, 13, '2016-01-29 10:13:40', '2016-01-29 10:13:40', NULL),
(11, 2, 7, 3.5, 2.3, 5, -35.9, 0.4, 0.7, 2, 53, 0.1, 0.2, 1, 62, 0, 0, 0, 0, 0, 0, '2016-01-29 10:13:41', '2016-01-29 10:13:41', NULL),
(12, 1, 8, 1, 2.3, 3, 130, -0.1, 0.7, 1, 481, -0.2, 0.2, 0.3, 177, 0.1, 8, 1.8, 79, 0.2, 13, '2016-01-29 14:28:29', '2016-02-17 15:58:51', NULL),
(13, 2, 8, 3.5, 2.3, 5, -35.9, 0.4, 0.7, 1, 53, 0.1, 0.2, 1, 62, 0, 0, 0, 0, 0, 0, '2016-01-29 14:28:30', '2016-02-17 15:58:51', NULL),
(14, 1, 9, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, 0.03, '2016-01-29 14:30:16', '2016-02-03 16:01:12', NULL),
(15, 2, 9, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0.08, 0, 0, 0, 0, 0, 0, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(16, 1, 10, 2.3, 1, 5, -130, 0.7, -0.1, 1, -481, 0.2, -0.2, 1, -177, 0.1, 8, 1.8, 79, 0.2, 13, '2016-02-01 15:38:20', '2016-02-12 10:30:24', NULL),
(17, 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-01 15:38:20', '2016-02-12 10:30:25', NULL),
(18, 1, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:21', NULL),
(19, 2, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(20, 1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(21, 2, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:27', '2016-03-02 14:28:07', NULL),
(22, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(23, 2, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(24, 1, 14, 1.63, 4.27, 5, 161.5, -0.25, 1.31, 5, -610, -0.31, 0.43, 5, -238.9, 0.55, 13, 3.19, 74.7, 0.52, 12.3, '2016-03-07 18:58:47', '2016-04-15 17:30:57', NULL),
(25, 2, 14, 6.98, 4.27, 7, -38.8, 1.48, 1.31, 7, -11.9, 0.73, 0.43, 7, -40.2, 0, 0, 0, 0, 0, 0, '2016-03-07 18:58:48', '2016-04-15 17:31:01', NULL),
(26, 1, 15, 0.74, 1.28, 1, 73.2, 0.11, 0, 1, -91.5, -0.06, -0.07, 1, 19.1, 1.2, 93.2, 0.08, 6.8, 0, 0, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL),
(27, 2, 15, 1.83, 1.28, 2, -29.6, 0.29, 0, 2, -96.8, 0.13, -0.07, 2, -152, 0, 0, 0, 0, 0, 0, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `kpi`
--

CREATE TABLE IF NOT EXISTS `kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsible` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `period_first_initial` date NOT NULL,
  `period_first_end` date NOT NULL,
  `period_second_initial` date NOT NULL,
  `period_second_end` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `kpi`
--

INSERT INTO `kpi` (`id`, `responsible`, `period_first_initial`, `period_first_end`, `period_second_initial`, `period_second_end`, `created_at`, `updated_at`, `deleted_at`, `active`) VALUES
(1, 'André Luis Arruda', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL, 0),
(2, 'André Luis Arruda', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:13:05', '2016-01-28 17:13:05', NULL, 0),
(3, 'André Luis Arruda', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL, 0),
(4, 'André Luis Arruda', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:18:47', '2016-01-28 20:34:41', NULL, 0),
(5, 'Fulano de Tal', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:19:17', '2016-01-28 20:34:40', NULL, 0),
(6, 'Beltrano de Tal', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-28 17:19:30', '2016-01-28 20:24:50', NULL, 0),
(7, 'Norberto Romualdo Junior', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-29 10:13:39', '2016-01-29 10:13:39', NULL, 0),
(8, 'André Luis Arruda', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-01-29 14:28:29', '2016-02-29 11:48:32', NULL, 0),
(9, 'Norberto Romualdo Junior', '2013-04-01', '2013-09-01', '2014-04-01', '2014-09-01', '2016-01-29 14:30:16', '2016-02-11 12:12:20', NULL, 0),
(10, 'Teste Template', '2014-04-01', '2014-07-01', '2015-04-01', '2015-07-01', '2016-02-01 15:38:20', '2016-02-12 10:31:21', NULL, 0),
(11, 'Andre Lopes', '2015-01-01', '2015-03-01', '2016-01-01', '2016-03-01', '2016-02-04 14:48:08', '2016-02-29 11:48:43', NULL, 0),
(12, 'Rodrigo Xisto', '2015-04-01', '2016-03-01', '2016-04-01', '2017-03-01', '2016-02-29 11:48:26', '2016-03-02 14:29:16', NULL, 0),
(13, 'Teste', '2014-04-01', '2014-09-01', '2015-04-01', '2015-09-01', '2016-03-02 14:29:07', '2016-03-11 17:53:32', NULL, 0),
(14, 'Adriana Andrade', '2014-04-01', '2014-12-01', '2015-04-01', '2015-12-01', '2016-03-07 18:58:47', '2016-05-16 15:37:05', NULL, 0),
(15, 'Adriana Andrade', '2015-01-01', '2015-03-01', '2016-01-01', '2016-03-01', '2016-05-16 15:37:00', '2016-06-17 11:13:29', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `kpi_type`
--

CREATE TABLE IF NOT EXISTS `kpi_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `kpi_type`
--

INSERT INTO `kpi_type` (`id`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Comparativo', '2016-01-20 00:00:00', '2016-01-20 00:00:00', NULL),
(2, 'Orçado X Realizado', '2016-01-20 00:00:00', '2016-01-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ominous_management`
--

CREATE TABLE IF NOT EXISTS `ominous_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double NOT NULL,
  `revenues_end` double NOT NULL,
  `revenues_target` double NOT NULL,
  `revenues_percentage` double NOT NULL,
  `ebtida_initial` double NOT NULL,
  `ebtida_end` double NOT NULL,
  `ebtida_target` double NOT NULL,
  `ebtida_percentage` double NOT NULL,
  `net_profit_initial` double NOT NULL,
  `net_profit_end` double NOT NULL,
  `net_profit_target` double NOT NULL,
  `net_profit_percentage` double NOT NULL,
  `services_value` double NOT NULL,
  `services_percentage` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ominous_management_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_ominous_management_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `ominous_management`
--

INSERT INTO `ominous_management` (`id`, `kpi_type_id`, `kpi_id`, `revenues_initial`, `revenues_end`, `revenues_target`, `revenues_percentage`, `ebtida_initial`, `ebtida_end`, `ebtida_target`, `ebtida_percentage`, `net_profit_initial`, `net_profit_end`, `net_profit_target`, `net_profit_percentage`, `services_value`, `services_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:05', '2016-01-28 17:13:05', NULL),
(3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(4, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:47', '2016-01-28 17:18:47', NULL),
(5, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(6, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:17', '2016-01-28 17:19:17', NULL),
(7, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(8, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(9, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:31', '2016-01-28 17:19:31', NULL),
(10, 1, 7, 11.9, 13.5, 15, 13, 1.1, 2.1, 3, 85, 0.6, 1.3, 2, 107, 13.5, 100, '2016-01-29 10:13:40', '2016-01-29 10:13:40', NULL),
(11, 2, 7, 14.4, 13.5, 15, -6, 2.2, 2.1, 3, -3, 1.5, 1.3, 2, -8, 0, 0, '2016-01-29 10:13:41', '2016-01-29 10:13:41', NULL),
(12, 1, 8, 11.9, 13.5, 14, 13, 1.1, 2.1, 2.5, 85, 0.6, 1.3, 1.5, 107, 13.5, 100, '2016-01-29 14:28:29', '2016-02-17 15:58:51', NULL),
(13, 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 14:28:30', '2016-02-17 15:58:51', NULL),
(14, 1, 9, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, 0.04, '2016-01-29 14:30:16', '2016-02-03 16:01:12', NULL),
(15, 2, 9, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0.09, 0, 0, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(16, 1, 10, 11.9, 13.5, 15, 13, 1.1, 2.1, 5, 85, 0.6, 1.3, 2, 107, 13.5, 100, '2016-02-01 15:38:20', '2016-02-12 10:30:24', NULL),
(17, 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-01 15:38:20', '2016-02-12 10:30:25', NULL),
(18, 1, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(19, 2, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(20, 1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(21, 2, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:27', '2016-03-02 14:28:07', NULL),
(22, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(23, 2, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(24, 1, 14, 17.88, 20.24, 21, 13.2, 1.44, 3.28, 21, 127.7, 0.81, 1.95, 21, 139.4, 20.24, 100, '2016-03-07 18:58:48', '2016-04-15 17:30:58', NULL),
(25, 2, 14, 22.4, 20.24, 23, -9.6, 3.62, 3.28, 23, -9.5, 2.4, 1.95, 23, -18.7, 0, 0, '2016-03-07 18:58:48', '2016-04-15 17:31:01', NULL),
(26, 1, 15, 6.55, 5.46, 7, -16.7, 1.55, 0.66, 7, -57.2, 0.87, 0.39, 7, -54.6, 5.46, 100, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL),
(27, 2, 15, 6.89, 5.46, 7, -20.8, 1.32, 0.66, 7, -49.8, 0.68, 0.39, 7, -41.9, 0, 0, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `systems`
--

CREATE TABLE IF NOT EXISTS `systems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_id` int(11) DEFAULT NULL,
  `kpi_type_id` int(11) DEFAULT NULL,
  `revenues_initial` double NOT NULL,
  `revenues_end` double NOT NULL,
  `revenues_target` double NOT NULL,
  `revenues_percentage` double NOT NULL,
  `ebtida_initial` double NOT NULL,
  `ebtida_end` double NOT NULL,
  `ebtida_target` double NOT NULL,
  `ebtida_percentage` double NOT NULL,
  `net_profit_initial` double NOT NULL,
  `net_profit_end` double NOT NULL,
  `net_profit_target` double NOT NULL,
  `net_profit_percentage` double NOT NULL,
  `lu_value` double NOT NULL,
  `lu_percentage` double NOT NULL,
  `lum_value` double NOT NULL,
  `lum_percentage` double NOT NULL,
  `implantation_value` double NOT NULL,
  `implantation_percentage` double NOT NULL,
  `sms_value` double NOT NULL,
  `sms_percentage` double NOT NULL,
  `royaltes_value` double NOT NULL,
  `royaltes_percentage` double NOT NULL,
  `maintenance_pc_value` double NOT NULL,
  `maintenance_pc_percentage` double NOT NULL,
  `outsourcing_value` double NOT NULL,
  `outsourcing_percentage` double NOT NULL,
  `bpo_value` double NOT NULL,
  `bpo_percentage` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_systems_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_systems_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `systems`
--

INSERT INTO `systems` (`id`, `kpi_id`, `kpi_type_id`, `revenues_initial`, `revenues_end`, `revenues_target`, `revenues_percentage`, `ebtida_initial`, `ebtida_end`, `ebtida_target`, `ebtida_percentage`, `net_profit_initial`, `net_profit_end`, `net_profit_target`, `net_profit_percentage`, `lu_value`, `lu_percentage`, `lum_value`, `lum_percentage`, `implantation_value`, `implantation_percentage`, `sms_value`, `sms_percentage`, `royaltes_value`, `royaltes_percentage`, `maintenance_pc_value`, `maintenance_pc_percentage`, `outsourcing_value`, `outsourcing_percentage`, `bpo_value`, `bpo_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:11:50', '2016-01-28 17:11:50', NULL),
(2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:06', '2016-01-28 17:13:06', NULL),
(3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:13:50', '2016-01-28 17:13:50', NULL),
(4, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(5, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:18:48', '2016-01-28 17:18:48', NULL),
(6, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(7, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:18', '2016-01-28 17:19:18', NULL),
(8, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:30', '2016-01-28 17:19:30', NULL),
(9, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-28 17:19:31', '2016-01-28 17:19:31', NULL),
(10, 1, 7, 24.1, 25.9, 30, 7.7, 3.3, 4.4, 5, 32, 2.5, 4.7, 6, 83, 1, 5, 13.7, 53, 4.3, 17, 3.4, 13, 0.04, 0.2, 0.07, 0.3, 1.5, 6, 1.5, 6, '2016-01-29 10:13:40', '2016-01-29 10:13:40', NULL),
(11, 2, 7, 27, 25.9, 30, -4, 3.4, 4.4, 5, 30, 1.8, 4.7, 5, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 10:13:41', '2016-01-29 10:13:41', NULL),
(12, 1, 8, 24.1, 25.9, 27, 7.7, 3.3, 4.4, 5.5, 32, 2.5, 4.7, 5.5, 83, 1, 5, 13.7, 53, 4.3, 17, 3.4, 13, 0.04, 0.2, 0.07, 3, 1.5, 6, 1.5, 6, '2016-01-29 14:28:29', '2016-02-17 15:58:51', NULL),
(13, 2, 8, 27, 25.9, 30, -4, 3.4, 4.4, 6, 30, 1.8, 4.7, 6, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 14:28:30', '2016-02-17 15:58:51', NULL),
(14, 1, 9, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, 0.05, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(15, 2, 9, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-01-29 14:30:17', '2016-02-03 16:01:13', NULL),
(16, 1, 10, 24.1, 25.9, 30, 7.7, 3.3, 4.4, 5, 32, 2.5, 4.7, 5, 83, 1, 5, 13.7, 53, 4.3, 17, 3.4, 13, 0.04, 0.2, 0.07, 0.3, 1.5, 6, 1.5, 6, '2016-02-01 15:38:20', '2016-02-12 10:30:24', NULL),
(17, 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-01 15:38:20', '2016-02-12 10:30:25', NULL),
(18, 1, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(19, 2, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-04 14:48:09', '2016-02-11 11:26:22', NULL),
(20, 1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:26', '2016-03-02 14:28:07', NULL),
(21, 2, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-02-29 11:48:27', '2016-03-02 14:28:07', NULL),
(22, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(23, 2, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-02 14:29:07', '2016-03-03 12:21:41', NULL),
(24, 1, 14, 38.13, 38.61, 40, 1.3, 6.27, 6.19, 40, -1.2, 4.58, 5.94, 40, 29.6, 1.55, 4, 20.83, 54, 6.75, 17.5, 4.79, 12.4, 0.04, 0.1, 0.11, 0.3, 2.38, 6.2, 2.13, 5.5, '2016-03-07 18:58:48', '2016-04-15 17:30:59', NULL),
(25, 2, 14, 43.72, 38.61, 45, -11.7, 7.88, 6.19, 45, -21.5, 4.53, 5.94, 45, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-03-07 18:58:48', '2016-04-15 17:31:01', NULL),
(26, 1, 15, 12.26, 11.12, 13, -9.3, 2.02, 1.25, 13, -37.8, 2.42, 1.29, 13, -46.5, 0.62, 6, 6.22, 59.6, 2.05, 19.7, 1.28, 12.3, 0.07, 0.7, 0.03, 0.3, 0.08, 0.8, 0.05, 0.6, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL),
(27, 2, 15, 15.64, 11.12, 16, -28.9, 3.9, 1.25, 16, -67.7, 1.74, 1.29, 16, -25.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-05-16 15:37:01', '2016-05-17 12:56:14', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `FK_BA82C300F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

--
-- Limitadores para a tabela `group_benner`
--
ALTER TABLE `group_benner`
  ADD CONSTRAINT `FK_499BC6F7CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_499BC6F7F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

--
-- Limitadores para a tabela `health_operators`
--
ALTER TABLE `health_operators`
  ADD CONSTRAINT `FK_B0E07188CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_B0E07188F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

--
-- Limitadores para a tabela `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `FK_4282C85BCADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_4282C85BF50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

--
-- Limitadores para a tabela `ominous_management`
--
ALTER TABLE `ominous_management`
  ADD CONSTRAINT `FK_7147FA31CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_7147FA31F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

--
-- Limitadores para a tabela `systems`
--
ALTER TABLE `systems`
  ADD CONSTRAINT `FK_61ADD8B2CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_61ADD8B2F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
