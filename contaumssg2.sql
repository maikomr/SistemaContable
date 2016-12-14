SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema contaumssg2
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `contaumssg2` ;
CREATE SCHEMA IF NOT EXISTS `contaumssg2` DEFAULT CHARACTER SET latin1 ;
USE `contaumssg2` ;

-- -----------------------------------------------------
-- Table `contaumssg2`.`accounts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `contaumssg2`.`accounts` ;
CREATE TABLE IF NOT EXISTS `contaumssg2`.`accounts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `contaumssg2`.`transaction`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `contaumssg2`.`transaction` ;
CREATE TABLE IF NOT EXISTS `contaumssg2`.`transaction` (
  `idTransaction` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `type` TEXT NOT NULL,
  `payrate` INT(11) NOT NULL,
  `accountId` INT(11) NOT NULL,
  PRIMARY KEY (`idTransaction`),
  INDEX `fk_transaction_accounts_idx` (`accountId` ASC),
  CONSTRAINT `fk_transaction_accounts`
    FOREIGN KEY (`accountId`)
    REFERENCES `contaumssg2`.`accounts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Caja M/N');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Muebles y Enceres');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Documentos por pagar');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Capital');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Compras');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Cuentas por pagar');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Sueldos y Salarios');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Consumo de luz');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Consumo de agua');
INSERT INTO `contaumssg2`.`accounts` (`name`) VALUES ('Consumo de telefono');

INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-01', 'DEBE', '4000', '1');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-01', 'DEBE', '2000', '2');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-01', 'HABER', '1000', '3');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-01', 'HABER', '5000', '4');

INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-03', 'DEBE', '800', '5');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-03', 'HABER', '400', '1');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-01-03', 'HABER', '400', '3');

INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-02-07', 'DEBE', '300', '2');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-02-07', 'HABER', '200', '1');
INSERT INTO `contaumssg2`.`transaction` (`date`, `type`, `payrate`, `accountId`) VALUES ('2016-02-07', 'HABER', '100', '3');

