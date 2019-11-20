-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Base_Proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Base_Proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Base_Proyecto` DEFAULT CHARACTER SET utf8 ;
USE `Base_Proyecto` ;

-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Marca` (
  `idMarca` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idMarca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Modelo` (
  `idModelo` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NOT NULL,
  `Precio` VARCHAR(25) NOT NULL,
  `Color` VARCHAR(10) NULL,
  `Descripcion` VARCHAR(45) NOT NULL,
  `Marca_idMarca` INT NOT NULL,
  PRIMARY KEY (`idModelo`, `Marca_idMarca`),
  INDEX `fk_Modelo_Marca_idx` (`Marca_idMarca` ASC) VISIBLE,
  CONSTRAINT `fk_Modelo_Marca`
    FOREIGN KEY (`Marca_idMarca`)
    REFERENCES `Base_Proyecto`.`Marca` (`idMarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Vendedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Vendedor` (
  `idVendedor` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  `apPat` VARCHAR(15) NOT NULL,
  `apMat` VARCHAR(15) NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `colonia` VARCHAR(20) NOT NULL,
  `calle` VARCHAR(20) NOT NULL,
  `numero` INT NOT NULL,
  `alc_mun` VARCHAR(30) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  'password' VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idVendedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NOT NULL,
  `Modelo_idModelo` INT NOT NULL,
  `Modelo_Marca_idMarca` INT NOT NULL,
  `Vendedor_idVendedor` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_Producto_Modelo1_idx` (`Modelo_idModelo` ASC, `Modelo_Marca_idMarca` ASC) VISIBLE,
  INDEX `fk_Producto_Vendedor1_idx` (`Vendedor_idVendedor` ASC) VISIBLE,
  CONSTRAINT `fk_Producto_Modelo1`
    FOREIGN KEY (`Modelo_idModelo` , `Modelo_Marca_idMarca`)
    REFERENCES `Base_Proyecto`.`Modelo` (`idModelo` , `Marca_idMarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `Base_Proyecto`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  `apPat` VARCHAR(15) NOT NULL,
  `apMat` VARCHAR(15) NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `colonia` VARCHAR(20) NOT NULL,
  `calle` VARCHAR(20) NOT NULL,
  `numero` INT NOT NULL,
  `alc_mun` VARCHAR(30) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `forma_pago` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Admin` (
  `idAdmin` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  `apPat` VARCHAR(15) NOT NULL,
  `apMat` VARCHAR(15) NULL,
  `Producto_idProducto` INT NOT NULL,
  PRIMARY KEY (`idAdmin`),
  INDEX `fk_Admin_Producto1_idx` (`Producto_idProducto` ASC) VISIBLE,
  CONSTRAINT `fk_Admin_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `Base_Proyecto`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Venta` (
  `idVenta` INT NOT NULL AUTO_INCREMENT,
  `costo_total` DOUBLE NOT NULL,
  `fecha_entrega` DATE NOT NULL,
  `pago` INT NOT NULL,
  `Vendedor_idVendedor` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  `Admin_idAdmin` INT NOT NULL,
  PRIMARY KEY (`idVenta`),
  INDEX `fk_Venta_Vendedor1_idx` (`Vendedor_idVendedor` ASC) VISIBLE,
  INDEX `fk_Venta_Cliente1_idx` (`Cliente_idCliente` ASC) VISIBLE,
  INDEX `fk_Venta_Producto1_idx` (`Producto_idProducto` ASC) VISIBLE,
  INDEX `fk_Venta_Admin1_idx` (`Admin_idAdmin` ASC) VISIBLE,
  CONSTRAINT `fk_Venta_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `Base_Proyecto`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venta_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Base_Proyecto`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venta_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `Base_Proyecto`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venta_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `Base_Proyecto`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Admin_Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Admin_Cliente` (
  `Admin_idAdmin` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`Admin_idAdmin`, `Cliente_idCliente`),
  INDEX `fk_Admin_has_Cliente_Cliente1_idx` (`Cliente_idCliente` ASC) VISIBLE,
  INDEX `fk_Admin_has_Cliente_Admin1_idx` (`Admin_idAdmin` ASC) VISIBLE,
  CONSTRAINT `fk_Admin_has_Cliente_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `Base_Proyecto`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Admin_has_Cliente_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Base_Proyecto`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Base_Proyecto`.`Vendedor_Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Base_Proyecto`.`Vendedor_Admin` (
  `Vendedor_idVendedor` INT NOT NULL,
  `Admin_idAdmin` INT NOT NULL,
  PRIMARY KEY (`Vendedor_idVendedor`, `Admin_idAdmin`),
  INDEX `fk_Vendedor_has_Admin_Admin1_idx` (`Admin_idAdmin` ASC) VISIBLE,
  INDEX `fk_Vendedor_has_Admin_Vendedor1_idx` (`Vendedor_idVendedor` ASC) VISIBLE,
  CONSTRAINT `fk_Vendedor_has_Admin_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `Base_Proyecto`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vendedor_has_Admin_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `Base_Proyecto`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
