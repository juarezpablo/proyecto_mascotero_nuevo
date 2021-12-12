-- MySQL Script generated by MySQL Workbench
-- Sat Dec 11 17:29:48 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema proyecto_huellitas
-- -----------------------------------------------------
-- 
-- 
DROP SCHEMA IF EXISTS `proyecto_huellitas` ;

-- -----------------------------------------------------
-- Schema proyecto_huellitas
--
-- 
-- 
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyecto_huellitas` DEFAULT CHARACTER SET utf8 ;
USE `proyecto_huellitas` ;

-- -----------------------------------------------------
-- Table `proyecto_huellitas`.`moderador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_huellitas`.`moderador` ;

CREATE TABLE IF NOT EXISTS `proyecto_huellitas`.`moderador` (
  `id_moderador` INT NOT NULL AUTO_INCREMENT,
  `alias` VARCHAR(100) NOT NULL COMMENT 'Acceso de login sera con alias_agrupacion y contrasena',
  `nombre` VARCHAR(100) NOT NULL COMMENT 'Nombre de la agrupacion, cada agrupacion puede tener varios moderadores que seran identificados cada uno por un alias, que debe ser unico.',
  `email` VARCHAR(100) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL COMMENT 'Acceso de login sera con alias_agrupacion y contrasena',
  `instagram` VARCHAR(100) NULL,
  `facebook` VARCHAR(100) NULL,
  PRIMARY KEY (`id_moderador`),
  UNIQUE INDEX `alias_UNIQUE` (`alias` ASC) ,
  UNIQUE INDEX `email_agrupacion_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_huellitas`.`mascota`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_huellitas`.`mascota` ;

CREATE TABLE IF NOT EXISTS `proyecto_huellitas`.`mascota` (
  `id_mascota` INT NOT NULL AUTO_INCREMENT,
  `tipo_mascota` VARCHAR(100) NOT NULL COMMENT 'Validos:\nperro\ngato',
  `nombre` VARCHAR(100) NOT NULL,
  `sexo` VARCHAR(100) NOT NULL COMMENT 'Validos:\nmacho\nhembra',
  `edad` INT NOT NULL,
  `desparasitado` VARCHAR(100) NOT NULL COMMENT 'Validos:\nsi\nno',
  `castrado` VARCHAR(100) NOT NULL COMMENT 'Validos:\nsi\nno',
  `vacunado` VARCHAR(45) NULL,
  `imagen_1` VARCHAR(100) NOT NULL,
  `imagen_2` VARCHAR(100) NULL,
  `imagen_3` VARCHAR(100) NULL,
  `imagen_4` VARCHAR(100) NULL,
  `imagen_5` VARCHAR(100) NULL,
  `observaciones` VARCHAR(1000) NULL,
  `adoptado` VARCHAR(100) NULL COMMENT 'si\nno',
  `fecha_adoptado` DATE NULL,
  `fecha_publicacion` DATE NULL,
  `id_moderador` INT NOT NULL,
  PRIMARY KEY (`id_mascota`, `id_moderador`),
  INDEX `fk_mascota_moderador_idx` (`id_moderador` ASC) ,
  CONSTRAINT `fk_mascota_moderador`
    FOREIGN KEY (`id_moderador`)
    REFERENCES `proyecto_huellitas`.`moderador` (`id_moderador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_huellitas`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_huellitas`.`usuario` ;

CREATE TABLE IF NOT EXISTS `proyecto_huellitas`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `alias` VARCHAR(100) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `barrio` VARCHAR(100) NOT NULL,
  `localidad` VARCHAR(100) NOT NULL,
  `telefono` BIGINT NOT NULL,
  `tipo_vivienda` VARCHAR(100) NOT NULL COMMENT 'validos:\ncasa\nph\nvivienda',
  `propietario_vivienda` VARCHAR(100) NOT NULL COMMENT 'validos:\nsi\nno',
  `mascotas_actuales` VARCHAR(100) NULL,
  `cantidad_personas_convivencia` VARCHAR(45) NOT NULL COMMENT 'Cantidad de personas con la que convive el candidato adoptante',
  `instagram` VARCHAR(100) NULL,
  `facebook` VARCHAR(100) NULL,
  `edades_mascotas` VARCHAR(100) NULL,
  `alimento_mascotas_actuales` VARCHAR(100) NULL,
  `castrados_vacunados` VARCHAR(100) NULL,
  `ambientes` VARCHAR(100) NOT NULL,
  `vacaciones` VARCHAR(500) NOT NULL,
  `opinion_castracion` VARCHAR(100) NOT NULL,
  `problemas_conducta` VARCHAR(100) NOT NULL,
  `compromiso_castracion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_huellitas`.`formulario_gato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_huellitas`.`formulario_gato` ;

CREATE TABLE IF NOT EXISTS `proyecto_huellitas`.`formulario_gato` (
  `id_formulario_gato` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `alergia_familia` VARCHAR(100) NOT NULL,
  `proteccion_red_ventanas` VARCHAR(100) NOT NULL,
  `proteccion_red_balcon` VARCHAR(100) NOT NULL,
  `patio_paredes_altas` VARCHAR(100) NOT NULL,
  `convivencia_embarazadas_bebe` VARCHAR(100) NOT NULL,
  `opinion_gatos_paseen_en_calle_techo` VARCHAR(100) NOT NULL,
  `pelos_rasguños` VARCHAR(100) NOT NULL,
  `proceso_adopcion` VARCHAR(45) NOT NULL,
  `id_usuario` INT NOT NULL,
  `id_mascota` INT NOT NULL,
  PRIMARY KEY (`id_formulario_gato`, `id_usuario`, `id_mascota`),
  INDEX `fk_formulario_gato_usuario1_idx` (`id_usuario` ASC) ,
  INDEX `fk_formulario_gato_mascota1_idx` (`id_mascota` ASC) ,
  CONSTRAINT `fk_formulario_gato_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `proyecto_huellitas`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_formulario_gato_mascota1`
    FOREIGN KEY (`id_mascota`)
    REFERENCES `proyecto_huellitas`.`mascota` (`id_mascota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_huellitas`.`formulario_perro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_huellitas`.`formulario_perro` ;

CREATE TABLE IF NOT EXISTS `proyecto_huellitas`.`formulario_perro` (
  `id_formulario_perro` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `proteccion_balcon` VARCHAR(100) NULL,
  `pileta_cercada` VARCHAR(100) NULL,
  `donde_dormira` VARCHAR(100) NOT NULL,
  `opinion_perros_paseo_sin_correa` VARCHAR(100) NOT NULL,
  `opinion_cachorros_energia_romper` VARCHAR(100) NOT NULL,
  `proceso_adopcion` VARCHAR(45) NOT NULL,
  `id_usuario` INT NOT NULL,
  `id_mascota` INT NOT NULL,
  PRIMARY KEY (`id_formulario_perro`, `id_usuario`, `id_mascota`),
  INDEX `fk_formulario_perro_usuario1_idx` (`id_usuario` ASC) ,
  INDEX `fk_formulario_perro_mascota1_idx` (`id_mascota` ASC) ,
  CONSTRAINT `fk_formulario_perro_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `proyecto_huellitas`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_formulario_perro_mascota1`
    FOREIGN KEY (`id_mascota`)
    REFERENCES `proyecto_huellitas`.`mascota` (`id_mascota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
