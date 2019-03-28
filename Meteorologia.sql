-- MySQL Script generated by MySQL Workbench
-- Wed Mar 27 12:27:45 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE= 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' ;

-- -----------------------------------------------------
-- Schema ESTACION
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS ESTACION /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE ESTACION;

-- -----------------------------------------------------
-- Table  ESTACION . Estaciones 
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Estaciones`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE Estaciones (
  Codigo VARCHAR(45) NOT NULL,
  Marca VARCHAR(45) NOT NULL,
  Modelo VARCHAR(45) NOT NULL,
  IP VARCHAR(45) NOT NULL,
  Modo_de_conexión VARCHAR(45) NOT NULL,
  Ubicación VARCHAR(45) NOT NULL,
  PRIMARY KEY (Codigo),
  UNIQUE INDEX Codigo_UNIQUE (Codigo ASC))
ENGINE=INNODB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
-- -----------------------------------------------------
-- Table  ESTACION . Sensores 
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Sensores`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `Sensores` (
  Codigo VARCHAR(45) NOT NULL,
  Modelo VARCHAR(45) NOT NULL,
  PRIMARY KEY (Codigo))
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
-- -----------------------------------------------------
-- Table  ESTACION . Variable_meteorológica 
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Variable_meteorológica`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `Variable_meteorológica` (
  Codigo VARCHAR(45) NOT NULL,
  Descripción VARCHAR(45) NOT NULL,
  Tipo VARCHAR(45) NOT NULL,
  PRIMARY KEY (Codigo))
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
-- -----------------------------------------------------
-- Table  ESTACION .  Recoge_Sensor 
-- -----------------------------------------------------
DROP TABLE IF EXISTS ` Recoge_Sensor`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE ` Recoge_Sensor` (
  Sensores_Codigo VARCHAR(45) NOT NULL,
  Variable_meteorológica_Codigo VARCHAR(45) NOT NULL,
  PRIMARY KEY (Sensores_Codigo, Variable_meteorológica_Codigo),
  INDEX fk_Recoge_Sensor_Sensores1_idx (Sensores_Codigo ASC),
  INDEX fk_Recoge_Sensor_Variable_meteorológica1_idx (Variable_meteorológica_Codigo ASC),
  CONSTRAINT fk_Recoge_Sensor_Sensores1
    FOREIGN KEY (Sensores_Codigo)
    REFERENCES ESTACION.Sensores (Codigo)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_Recoge_Sensor_Variable_meteorológica1
    FOREIGN KEY (Variable_meteorológica_Codigo)
    REFERENCES ESTACION.Variable_meteorológica (Codigo)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
-- -----------------------------------------------------
-- Table  ESTACION . Tiene_Sensor 
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tiene_Sensor`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `Tiene_Sensor` (
  Estaciones_Codigo VARCHAR(45) NOT NULL,
  Sensores_Codigo VARCHAR(45) NOT NULL,
  Fecha VARCHAR(45) NOT NULL,
  PRIMARY KEY (Estaciones_Codigo,  Sensores_Codigo ),
  INDEX  fk_Estaciones_has_Sensores_Sensores1_idx  ( Sensores_Codigo  ASC),
  INDEX  fk_Estaciones_has_Sensores_Estaciones_idx  ( Estaciones_Codigo  ASC),
  CONSTRAINT  fk_Estaciones_has_Sensores_Estaciones 
    FOREIGN KEY ( Estaciones_Codigo )
    REFERENCES  Estaciones  ( Codigo )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT  fk_Estaciones_has_Sensores_Sensores1 
    FOREIGN KEY ( Sensores_Codigo )
    REFERENCES  Sensores  ( Codigo )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
-- -----------------------------------------------------
-- Table  ESTACION . Mide_Sensor 
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Mide_Sensor`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `Mide_Sensor`(
   Sensores_Codigo  VARCHAR(45) NOT NULL,
   Variable_meteorológica_Codigo  VARCHAR(45) NOT NULL,
   Fecha  VARCHAR(45) NOT NULL,
   Hora  VARCHAR(45) NOT NULL,
   Valor  VARCHAR(45) NOT NULL,
  PRIMARY KEY ( Sensores_Codigo ,  Variable_meteorológica_Codigo ),
  INDEX  fk_Sensores_has_Variable_meteorológica_Variable_meteoroló_idx  ( Variable_meteorológica_Codigo  ASC),
  INDEX  fk_Sensores_has_Variable_meteorológica_Sensores1_idx  ( Sensores_Codigo  ASC),
  CONSTRAINT  fk_Sensores_has_Variable_meteorológica_Sensores1 
    FOREIGN KEY ( Sensores_Codigo )
    REFERENCES  Sensores  ( Codigo )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT  fk_Sensores_has_Variable_meteorológica_Variable_meteorológi1 
    FOREIGN KEY ( Variable_meteorológica_Codigo )
    REFERENCES  Variable_meteorológica  ( Codigo )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;