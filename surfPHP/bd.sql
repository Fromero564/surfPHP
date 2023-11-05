DROP DATABASE IF EXISTS nukumoi_db;
CREATE DATABASE nukumoi_db;
USE nukumoi_db;

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`(
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `price` INT(11) NOT NULL,
    `colour` VARCHAR(255) NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO productos VALUES ("","Pantalon Hombre",200,"Green","hombre");
INSERT INTO productos VALUES ("","Remera Hombre",100,"Violet","hombre");
INSERT INTO productos VALUES ("","Gorra Hombre",200,"Black","hombre");
INSERT INTO productos VALUES ("","Musculosa Hombre",200,"Yellow","hombre");
INSERT INTO productos VALUES ("","Pantalon Mujer",300,"Green","mujer");
INSERT INTO productos VALUES ("","Remera Mujer",200,"Violet","mujer");
INSERT INTO productos VALUES ("","Gorra Mujer",200,"Black","mujer");
INSERT INTO productos VALUES ("","Musculosa Mujer",200,"Yellow","mujer");
INSERT INTO productos VALUES ("","Pantalon Infante",300,"Green","infante");
INSERT INTO productos VALUES ("","Remera Infante",200,"Violet","infante");
INSERT INTO productos VALUES ("","Gorra Infante",200,"Black","infante");
INSERT INTO productos VALUES ("","Musculosa Infante",200,"Yellow","infante");