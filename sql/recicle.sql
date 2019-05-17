-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema recicle
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema recicle
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `recicle` DEFAULT CHARACTER SET utf8 ;
USE `recicle` ;

-- -----------------------------------------------------
-- Table `recicle`.`cidadao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recicle`.`cidadao` (
  `cpf` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recicle`.`cooperativa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recicle`.`cooperativa` (
  `cnpj` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`cnpj`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recicle`.`lixo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recicle`.`lixo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recicle`.`desafio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recicle`.`desafio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cooperativa_cnpj` VARCHAR(45) NOT NULL,
  `cidadao_cpf` VARCHAR(45) NOT NULL,
  `lixo_id` INT NOT NULL,
  `tipo_lixo` VARCHAR(45) NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `tipo_bonificacao` VARCHAR(45) NOT NULL,
  `img` BLOB NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
