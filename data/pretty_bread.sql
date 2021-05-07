-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pretty_bread
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pretty_bread
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pretty_bread` DEFAULT CHARACTER SET utf8 ;
USE `pretty_bread` ;

-- -----------------------------------------------------
-- Table `pretty_bread`.`tipos_de_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`tipos_de_usuarios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idtipos_de_usuarios_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`usuarios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_tipo` INT UNSIGNED NOT NULL,
  `correo` VARCHAR(150) NOT NULL,
  `pass` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(150) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idusuarios_UNIQUE` (`id` ASC),
  UNIQUE INDEX `correo_UNIQUE` (`correo` ASC),
  INDEX `fk_usuarios_tipos_de_usuarios1_idx` (`id_tipo` ASC),
  CONSTRAINT `fk_usuarios_tipos_de_usuarios1`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `pretty_bread`.`tipos_de_usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`estados` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idestados_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`direcciones` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT UNSIGNED NOT NULL,
  `id_estado` INT UNSIGNED NOT NULL,
  `municipio` VARCHAR(150) NOT NULL,
  `codigo_postal` INT(5) NOT NULL,
  `colonia` VARCHAR(150) NOT NULL,
  `calle` VARCHAR(100) NOT NULL,
  `num_ext` VARCHAR(45) NOT NULL,
  `num_int` VARCHAR(45) NOT NULL,
  `calle_1` VARCHAR(150) NULL,
  `calle_2` VARCHAR(150) NULL,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `iddirecciones_UNIQUE` (`id` ASC),
  INDEX `fk_direcciones_estados_idx` (`id_estado` ASC),
  INDEX `fk_direcciones_usuarios1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_direcciones_estados`
    FOREIGN KEY (`id_estado`)
    REFERENCES `pretty_bread`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_direcciones_usuarios1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `pretty_bread`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`categorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `portada` VARCHAR(255) NOT NULL,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`productos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `precio` FLOAT(8,2) UNSIGNED NOT NULL,
  `portada` VARCHAR(255) NOT NULL,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`categorias_de_productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`categorias_de_productos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_producto` INT UNSIGNED NOT NULL,
  `id_categoria` INT UNSIGNED NOT NULL,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idcategorias_de_productos_UNIQUE` (`id` ASC),
  INDEX `fk_categorias_de_productos_categorias1_idx` (`id_categoria` ASC),
  INDEX `fk_categorias_de_productos_productos1_idx` (`id_producto` ASC),
  CONSTRAINT `fk_categorias_de_productos_categorias1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `pretty_bread`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categorias_de_productos_productos1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `pretty_bread`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`carritos_de_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`carritos_de_usuarios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_usuario` INT UNSIGNED NOT NULL,
  `id_producto` INT UNSIGNED NOT NULL,
  `cantidad` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_carritos_de_productos_productos1_idx` (`id_producto` ASC),
  INDEX `fk_carritos_de_productos_usuarios1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_carritos_de_productos_productos1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `pretty_bread`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carritos_de_productos_usuarios1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `pretty_bread`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`buzon_consultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`buzon_consultas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(150) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT now(),
  `correo` VARCHAR(150) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `asunto` VARCHAR(50) NOT NULL,
  `mensaje` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`pedidos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_usuario` INT UNSIGNED NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT now(),
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_pedidos_usuarios1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_pedidos_usuarios1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `pretty_bread`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`productos_de_pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`productos_de_pedidos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_pedido` INT UNSIGNED NOT NULL,
  `id_producto` INT UNSIGNED NOT NULL,
  `precio` FLOAT(8,2) UNSIGNED NOT NULL,
  `cantidad` INT UNSIGNED NOT NULL DEFAULT 1,
  `activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  INDEX `fk_table1_pedidos1_idx` (`id_pedido` ASC),
  INDEX `fk_table1_productos1_idx` (`id_producto` ASC),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  CONSTRAINT `fk_table1_pedidos1`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `pretty_bread`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_productos1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `pretty_bread`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`movimientos_de_inventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`movimientos_de_inventario` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT now(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idmovimientos_de_inventario_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretty_bread`.`productos_de_movimientos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretty_bread`.`productos_de_movimientos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_movimiento` INT UNSIGNED NOT NULL,
  `id_producto` INT UNSIGNED NOT NULL,
  `cantidad` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idproductos_de_movimientos_UNIQUE` (`id` ASC),
  INDEX `fk_productos_de_movimientos_movimientos_de_inventario1_idx` (`id_movimiento` ASC),
  INDEX `fk_productos_de_movimientos_productos1_idx` (`id_producto` ASC),
  CONSTRAINT `fk_productos_de_movimientos_movimientos_de_inventario1`
    FOREIGN KEY (`id_movimiento`)
    REFERENCES `pretty_bread`.`movimientos_de_inventario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_de_movimientos_productos1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `pretty_bread`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
