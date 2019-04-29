-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `STOCK`;
CREATE DATABASE `STOCK` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `STOCK`;

DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `nom` varchar(30) NOT NULL,
  `allée` varchar(1) NOT NULL,
  `colonne` int(2) NOT NULL,
  `quantité` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `produit` (`nom`, `allée`, `colonne`, `quantité`) VALUES
('perceuse',	'A',	1,	13);

-- 2019-04-29 09:44:08
