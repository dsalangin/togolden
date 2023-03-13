DROP DATABASE IF EXISTS `togolden`;

CREATE DATABASE `togolden`
  DEFAULT CHARACTER SET UTF8
  DEFAULT COLLATE UTF8_GENERAL_CI;

USE `togolden`;

CREATE TABLE users (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `create_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(64),
  `email` VARCHAR(64) UNIQUE,
  `password` VARCHAR(255)
);


CREATE TABLE companies (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `create_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(128),
  `inn` VARCHAR(64),
  `info` TEXT,
  `ceo` VARCHAR(128),
  `address` TEXT,
  `phone_number` VARCHAR(64)
);


CREATE TABLE fields (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(128) UNIQUE
);


CREATE TABLE comments (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `create_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `text` TEXT,
  `user_id` INT,
  `company_id` INT,
  `field_id` INT
);

INSERT INTO `fields` (`id`, `name`) VALUES(1, 'name');
INSERT INTO `fields` (`id`, `name`) VALUES(2, 'inn');
INSERT INTO `fields` (`id`, `name`) VALUES(3, 'info');
INSERT INTO `fields` (`id`, `name`) VALUES(4, 'ceo');
INSERT INTO `fields` (`id`, `name`) VALUES(5, 'address');
INSERT INTO `fields` (`id`, `name`) VALUES(6, 'phone_number');
INSERT INTO `fields` (`id`, `name`) VALUES(7, 'company');