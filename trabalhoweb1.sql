-- MySQL Script generated by MySQL Workbench
-- Sun Dec  3 19:01:44 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema trabalhoweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema trabalhoweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `trabalhoweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
USE `trabalhoweb` ;

-- -----------------------------------------------------
-- Table `trabalhoweb`.`projetos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trabalhoweb`.`projetos` (
  `idprojetos` INT NOT NULL AUTO_INCREMENT,
  `nomeprojeto` VARCHAR(20) NOT NULL,
  `dataprojeto` DATE NULL,
  `descricaoprojeto` TEXT NOT NULL,
  PRIMARY KEY (`idprojetos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trabalhoweb`.`tarefas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trabalhoweb`.`tarefas` (
  `idtarefas` INT NOT NULL AUTO_INCREMENT,
  `nometarefa` VARCHAR(20) NOT NULL,
  `descricaotarefa` TEXT NOT NULL,
  `projetosfk` INT NOT NULL,
  PRIMARY KEY (`idtarefas`),
  CONSTRAINT `fk_tarefas_projetos`
    FOREIGN KEY (`projetosfk`)
    REFERENCES `trabalhoweb`.`projetos` (`idprojetos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
