-- MySQL Script generated by MySQL Workbench
-- 11/13/17 10:56:45
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema citationdb
-- -----------------------------------------------------
 DROP SCHEMA IF EXISTS `educati3_citationdb` ;

-- -----------------------------------------------------
-- Schema citationdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `educati3_citationdb` DEFAULT CHARACTER SET utf8 ;
USE `educati3_citationdb` ;

-- -----------------------------------------------------
-- Table `citationdb`.`citation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educati3_citationdb`.`citation` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `quote` VARCHAR(255) NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `topic` VARCHAR(50) NOT NULL,
  `updated` DATETIME NULL,
  `created` DATETIME NULL,
  `birthdate` DATE NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `quote_UNIQUE` (`quote` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `citationdb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educati3_citationdb`.`user` (
  `iduser` INT NOT NULL,
  `name` VARCHAR(50) NULL,
  `surname` VARCHAR(50) NULL,
  `username` VARCHAR(50) NULL,
  `email` VARCHAR(50) NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `citationdb`.`background`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educati3_citationdb`.`background` (
  `idbackground` INT NOT NULL AUTO_INCREMENT,
  `backgroundblob` BLOB NOT NULL,
  PRIMARY KEY (`idbackground`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `citationdb`.`citation`
-- -----------------------------------------------------
START TRANSACTION;
USE `educati3_citationdb`;
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (1, 'So etwas wie moralische oder unmoralische Bücher gibt es nicht. Bücher sind gut oder schlecht geschrieben. Weiter nichts.', 'Oscar Wilde', 'Bücher', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (2, 'Ein Haus ohne Bücher ist arm, auch wenn schöne Teppiche seinen Böden und kostbare Tapeten und Bilder die Wände bedecken.', 'Hermann Hesse', 'Bücher', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (3, 'Über das Kommen mancher Leute tröstet uns nichts als die Hoffnung auf ihr Gehen.', 'Marie von Ebner-Eschenbach', 'Hoffnung', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (4, 'Zeit ist das, was man an der Uhr abliest.', 'Albert Einstein', 'Zeit', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (5, 'Freundschaft, das ist eine Seele in zwei Körpern.', 'Aristoteles', 'Freundschaft', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (6, 'Man weiss selten, was Glück ist, aber man weiss meistens was Glück war.', 'Françoise Sagan', 'Glück', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (7, 'Derjenige, der etwas zerbricht, um herauszufinden, was es ist, hat den Pfad der Weisheit verlassen.', 'J.R.R. Tolkien', 'Weisheiten', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (8, 'Weisheit stellt sich nicht immer mit dem Alter ein. Manchmal kommt auch das Alter ganz allein.', 'Jeanne Moreau', 'Weisheiten', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (9, 'Der Humor nimmt die Welt hin, wie sie ist, sucht sie nicht zu verbessern und zu belehren, sondern mit Weisheit zu ertragen.', 'Charles Dickens', 'Weisheiten', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (10, 'Sex ist nur schmutzig, wenn er richtig gemacht wird.', 'Woody Allen', 'Sex', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (11, 'Aller Humor fängt damit an, dass man die eigene Person nicht mehr ernst nimmt.', 'Hermann Hesse', 'Humor', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (12, 'Deutscher Humor ist, wenn man trotzdem nicht lacht', 'Sigismund von Radecki', 'Humor', NULL, NULL, NULL);
INSERT INTO `educati3_citationdb`.`citation` (`ID`, `quote`, `author`, `topic`, `updated`, `created`, `birthdate`) VALUES (13, 'Als ich klein war, glaubte ich, Geld sei das wichtigste im Leben. Heute, da ich alt bin, weiß ich: Es stimmt.', 'Oscar Wilde', 'Geld', NULL, NULL, NULL);

COMMIT;

