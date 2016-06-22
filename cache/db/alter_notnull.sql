-- MySQL Workbench Synchronization
-- Generated: 2016-06-22 10:45
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: farolsign

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `benner_kpi`.`group_benner` 
DROP FOREIGN KEY `FK_499BC6F7F50D1A5E`,
DROP FOREIGN KEY `FK_499BC6F7CADDA070`;

ALTER TABLE `benner_kpi`.`health_operators` 
DROP FOREIGN KEY `FK_B0E07188F50D1A5E`,
DROP FOREIGN KEY `FK_B0E07188CADDA070`;

ALTER TABLE `benner_kpi`.`hospital` 
DROP FOREIGN KEY `FK_4282C85BF50D1A5E`,
DROP FOREIGN KEY `FK_4282C85BCADDA070`;

ALTER TABLE `benner_kpi`.`ominous_management` 
DROP FOREIGN KEY `FK_7147FA31F50D1A5E`,
DROP FOREIGN KEY `FK_7147FA31CADDA070`;

ALTER TABLE `benner_kpi`.`systems` 
DROP FOREIGN KEY `FK_61ADD8B2F50D1A5E`,
DROP FOREIGN KEY `FK_61ADD8B2CADDA070`;

ALTER TABLE `benner_kpi`.`kpi` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `responsible` `responsible` VARCHAR(45) NOT NULL ,
CHANGE COLUMN `active` `active` TINYINT(1) NOT NULL DEFAULT 0 ;

ALTER TABLE `benner_kpi`.`group_benner` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `kpi_type_id` `kpi_type_id` INT(11) NOT NULL ,
CHANGE COLUMN `kpi_id` `kpi_id` INT(11) NOT NULL ,
CHANGE COLUMN `revenues_initial` `revenues_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_end` `revenues_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_target` `revenues_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_percentage` `revenues_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_initial` `ebtida_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_end` `ebtida_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_target` `ebtida_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_percentage` `ebtida_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_initial` `net_profit_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_end` `net_profit_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_target` `net_profit_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_percentage` `net_profit_percentage` FLOAT(11) NULL DEFAULT NULL ;

ALTER TABLE `benner_kpi`.`kpi_type` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `type` `type` VARCHAR(45) NOT NULL ;

ALTER TABLE `benner_kpi`.`health_operators` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `kpi_type_id` `kpi_type_id` INT(11) NOT NULL ,
CHANGE COLUMN `kpi_id` `kpi_id` INT(11) NOT NULL ,
CHANGE COLUMN `revenues_initial` `revenues_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_end` `revenues_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_target` `revenues_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_percentage` `revenues_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_initial` `ebtida_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_end` `ebtida_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_target` `ebtida_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_percentage` `ebtida_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_initial` `net_profit_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_end` `net_profit_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_target` `net_profit_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_percentage` `net_profit_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_value` `lu_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_percentage` `lu_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_value` `lum_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_percentage` `lum_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_value` `implantation_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_percentage` `implantation_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `sms_value` `sms_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `sms_percentage` `sms_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `medical_services_value` `medical_services_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `medical_services_percentage` `medical_services_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `workout_value` `workout_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `workout_percentage` `workout_percentage` FLOAT(11) NULL DEFAULT NULL ;

ALTER TABLE `benner_kpi`.`hospital` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `kpi_type_id` `kpi_type_id` INT(11) NOT NULL ,
CHANGE COLUMN `kpi_id` `kpi_id` INT(11) NOT NULL ,
CHANGE COLUMN `revenues_initial` `revenues_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_end` `revenues_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_target` `revenues_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_percentage` `revenues_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_initial` `ebtida_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_end` `ebtida_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_target` `ebtida_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_percentage` `ebtida_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_initial` `net_profit_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_end` `net_profit_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_target` `net_profit_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_percentage` `net_profit_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_value` `lu_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_percentage` `lu_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_value` `lum_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_percentage` `lum_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_value` `implantation_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_percentage` `implantation_percentage` FLOAT(11) NULL DEFAULT NULL ;

ALTER TABLE `benner_kpi`.`ominous_management` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `kpi_type_id` `kpi_type_id` INT(11) NOT NULL ,
CHANGE COLUMN `kpi_id` `kpi_id` INT(11) NOT NULL ,
CHANGE COLUMN `revenues_initial` `revenues_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_end` `revenues_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_target` `revenues_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_percentage` `revenues_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_initial` `ebtida_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_end` `ebtida_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_target` `ebtida_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_percentage` `ebtida_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_initial` `net_profit_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_end` `net_profit_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_target` `net_profit_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_percentage` `net_profit_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `services_value` `services_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `services_percentage` `services_percentage` FLOAT(11) NULL DEFAULT NULL ;

ALTER TABLE `benner_kpi`.`systems` 
COLLATE = utf8_general_ci ,
CHANGE COLUMN `kpi_type_id` `kpi_type_id` INT(11) NOT NULL AFTER `id`,
CHANGE COLUMN `kpi_id` `kpi_id` INT(11) NOT NULL ,
CHANGE COLUMN `revenues_initial` `revenues_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_end` `revenues_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_target` `revenues_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `revenues_percentage` `revenues_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_initial` `ebtida_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_end` `ebtida_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_target` `ebtida_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `ebtida_percentage` `ebtida_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_initial` `net_profit_initial` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_end` `net_profit_end` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_target` `net_profit_target` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_percentage` `net_profit_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_value` `lu_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lu_percentage` `lu_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_value` `lum_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `lum_percentage` `lum_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_value` `implantation_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `implantation_percentage` `implantation_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `sms_value` `sms_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `sms_percentage` `sms_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `royaltes_value` `royaltes_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `royaltes_percentage` `royaltes_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `maintenance_pc_value` `maintenance_pc_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `maintenance_pc_percentage` `maintenance_pc_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `outsourcing_value` `outsourcing_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `outsourcing_percentage` `outsourcing_percentage` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `bpo_value` `bpo_value` FLOAT(11) NULL DEFAULT NULL ,
CHANGE COLUMN `bpo_percentage` `bpo_percentage` FLOAT(11) NULL DEFAULT NULL ;

DROP TABLE IF EXISTS `benner_kpi`.`employees` ;

ALTER TABLE `benner_kpi`.`group_benner` 
ADD CONSTRAINT `fk_grupo_benner_kpi_type`
  FOREIGN KEY (`kpi_type_id`)
  REFERENCES `benner_kpi`.`kpi_type` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_group_benner_kpi1`
  FOREIGN KEY (`kpi_id`)
  REFERENCES `benner_kpi`.`kpi` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `benner_kpi`.`health_operators` 
ADD CONSTRAINT `fk_health_operators_kpi_type1`
  FOREIGN KEY (`kpi_type_id`)
  REFERENCES `benner_kpi`.`kpi_type` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_health_operators_kpi1`
  FOREIGN KEY (`kpi_id`)
  REFERENCES `benner_kpi`.`kpi` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `benner_kpi`.`hospital` 
ADD CONSTRAINT `fk_hospital_kpi_type`
  FOREIGN KEY (`kpi_type_id`)
  REFERENCES `benner_kpi`.`kpi_type` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_hospital_kpi`
  FOREIGN KEY (`kpi_id`)
  REFERENCES `benner_kpi`.`kpi` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `benner_kpi`.`ominous_management` 
ADD CONSTRAINT `fk_ominous_management_kpi_type`
  FOREIGN KEY (`kpi_type_id`)
  REFERENCES `benner_kpi`.`kpi_type` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ominous_management_kpi`
  FOREIGN KEY (`kpi_id`)
  REFERENCES `benner_kpi`.`kpi` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `benner_kpi`.`systems` 
ADD CONSTRAINT `fk_systems_kpi_type`
  FOREIGN KEY (`kpi_type_id`)
  REFERENCES `benner_kpi`.`kpi_type` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_systems_kpi`
  FOREIGN KEY (`kpi_id`)
  REFERENCES `benner_kpi`.`kpi` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
