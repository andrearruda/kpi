-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2016 às 10:24
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
  `first_year_number_of_employees` int(11) DEFAULT NULL,
  `first_year_icons` int(11) DEFAULT NULL,
  `second_year_number_of_employees` int(11) DEFAULT NULL,
  `second_year_icons` int(11) DEFAULT NULL,
  `first_year_billing_by_employees` double DEFAULT NULL,
  `second_year_billing_by_employees` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employees_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `group_benner`
--

CREATE TABLE IF NOT EXISTS `group_benner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double DEFAULT NULL,
  `revenues_end` double DEFAULT NULL,
  `revenues_target` double DEFAULT NULL,
  `revenues_percentage` double DEFAULT NULL,
  `ebtida_initial` double DEFAULT NULL,
  `ebtida_end` double DEFAULT NULL,
  `ebtida_target` double DEFAULT NULL,
  `ebtida_percentage` double DEFAULT NULL,
  `net_profit_initial` double DEFAULT NULL,
  `net_profit_end` double DEFAULT NULL,
  `net_profit_target` double DEFAULT NULL,
  `net_profit_percentage` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_benner_kpi_type_idx` (`kpi_type_id`),
  KEY `fk_group_benner_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `health_operators`
--

CREATE TABLE IF NOT EXISTS `health_operators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double DEFAULT NULL,
  `revenues_end` double DEFAULT NULL,
  `revenues_target` double DEFAULT NULL,
  `revenues_percentage` double DEFAULT NULL,
  `ebtida_initial` double DEFAULT NULL,
  `ebtida_end` double DEFAULT NULL,
  `ebtida_target` double DEFAULT NULL,
  `ebtida_percentage` double DEFAULT NULL,
  `net_profit_initial` double DEFAULT NULL,
  `net_profit_end` double DEFAULT NULL,
  `net_profit_target` double DEFAULT NULL,
  `net_profit_percentage` double DEFAULT NULL,
  `lu_value` double DEFAULT NULL,
  `lu_percentage` double DEFAULT NULL,
  `lum_value` double DEFAULT NULL,
  `lum_percentage` double DEFAULT NULL,
  `implantation_value` double DEFAULT NULL,
  `implantation_percentage` double DEFAULT NULL,
  `sms_value` double DEFAULT NULL,
  `sms_percentage` double DEFAULT NULL,
  `medical_services_value` double DEFAULT NULL,
  `medical_services_percentage` double DEFAULT NULL,
  `workout_value` double DEFAULT NULL,
  `workout_percentage` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_health_operators_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_health_operators_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double DEFAULT NULL,
  `revenues_end` double DEFAULT NULL,
  `revenues_target` double DEFAULT NULL,
  `revenues_percentage` double DEFAULT NULL,
  `ebtida_initial` double DEFAULT NULL,
  `ebtida_end` double DEFAULT NULL,
  `ebtida_target` double DEFAULT NULL,
  `ebtida_percentage` double DEFAULT NULL,
  `net_profit_initial` double DEFAULT NULL,
  `net_profit_end` double DEFAULT NULL,
  `net_profit_target` double DEFAULT NULL,
  `net_profit_percentage` double DEFAULT NULL,
  `lu_value` double DEFAULT NULL,
  `lu_percentage` double DEFAULT NULL,
  `lum_value` double DEFAULT NULL,
  `lum_percentage` double DEFAULT NULL,
  `implantation_value` double DEFAULT NULL,
  `implantation_percentage` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_hospital_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_hospital_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ominous_management`
--

CREATE TABLE IF NOT EXISTS `ominous_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_type_id` int(11) DEFAULT NULL,
  `kpi_id` int(11) DEFAULT NULL,
  `revenues_initial` double DEFAULT NULL,
  `revenues_end` double DEFAULT NULL,
  `revenues_target` double DEFAULT NULL,
  `revenues_percentage` double DEFAULT NULL,
  `ebtida_initial` double DEFAULT NULL,
  `ebtida_end` double DEFAULT NULL,
  `ebtida_target` double DEFAULT NULL,
  `ebtida_percentage` double DEFAULT NULL,
  `net_profit_initial` double DEFAULT NULL,
  `net_profit_end` double DEFAULT NULL,
  `net_profit_target` double DEFAULT NULL,
  `net_profit_percentage` double DEFAULT NULL,
  `services_value` double DEFAULT NULL,
  `services_percentage` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ominous_management_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_ominous_management_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `systems`
--

CREATE TABLE IF NOT EXISTS `systems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi_id` int(11) DEFAULT NULL,
  `kpi_type_id` int(11) DEFAULT NULL,
  `revenues_initial` double DEFAULT NULL,
  `revenues_end` double DEFAULT NULL,
  `revenues_target` double DEFAULT NULL,
  `revenues_percentage` double DEFAULT NULL,
  `ebtida_initial` double DEFAULT NULL,
  `ebtida_end` double DEFAULT NULL,
  `ebtida_target` double DEFAULT NULL,
  `ebtida_percentage` double DEFAULT NULL,
  `net_profit_initial` double DEFAULT NULL,
  `net_profit_end` double DEFAULT NULL,
  `net_profit_target` double DEFAULT NULL,
  `net_profit_percentage` double DEFAULT NULL,
  `lu_value` double DEFAULT NULL,
  `lu_percentage` double DEFAULT NULL,
  `lum_value` double DEFAULT NULL,
  `lum_percentage` double DEFAULT NULL,
  `implantation_value` double DEFAULT NULL,
  `implantation_percentage` double DEFAULT NULL,
  `sms_value` double DEFAULT NULL,
  `sms_percentage` double DEFAULT NULL,
  `royaltes_value` double DEFAULT NULL,
  `royaltes_percentage` double DEFAULT NULL,
  `maintenance_pc_value` double DEFAULT NULL,
  `maintenance_pc_percentage` double DEFAULT NULL,
  `outsourcing_value` double DEFAULT NULL,
  `outsourcing_percentage` double DEFAULT NULL,
  `bpo_value` double DEFAULT NULL,
  `bpo_percentage` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_systems_kpi_type1_idx` (`kpi_type_id`),
  KEY `fk_systems_kpi1_idx` (`kpi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `FK_499BC6F7F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`),
  ADD CONSTRAINT `FK_499BC6F7CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`);

--
-- Limitadores para a tabela `health_operators`
--
ALTER TABLE `health_operators`
  ADD CONSTRAINT `FK_B0E07188F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`),
  ADD CONSTRAINT `FK_B0E07188CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`);

--
-- Limitadores para a tabela `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `FK_4282C85BF50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`),
  ADD CONSTRAINT `FK_4282C85BCADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`);

--
-- Limitadores para a tabela `ominous_management`
--
ALTER TABLE `ominous_management`
  ADD CONSTRAINT `FK_7147FA31F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`),
  ADD CONSTRAINT `FK_7147FA31CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`);

--
-- Limitadores para a tabela `systems`
--
ALTER TABLE `systems`
  ADD CONSTRAINT `FK_61ADD8B2CADDA070` FOREIGN KEY (`kpi_type_id`) REFERENCES `kpi_type` (`id`),
  ADD CONSTRAINT `FK_61ADD8B2F50D1A5E` FOREIGN KEY (`kpi_id`) REFERENCES `kpi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
