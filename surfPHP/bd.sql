DROP DATABASE IF EXISTS nukumoi_db;
CREATE DATABASE nukumoi_db_db;
USE nukumoi_db;


DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`(
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR (255) NOT NULL,
    `price` int() NOT NULL,
    `colour` VARCHAR(255) NOT NULL,
     PRIMARY KEY(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
