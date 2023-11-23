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
    `photo_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO productos VALUES (NULL, "Pantalon Hombre", 200, "Green", "man", "men1.jpg");
INSERT INTO productos VALUES (NULL, "Remera Hombre", 100, "Violet", "man", "men1.jpg");
INSERT INTO productos VALUES (NULL, "Gorra Hombre", 200, "Black", "hat", "Aloha Patch Hat - Floral Print.jpg");
INSERT INTO productos VALUES (NULL, "Musculosa Hombre", 200, "Yellow", "man", "men1.jpg");
INSERT INTO productos VALUES (NULL, "Pantalon Mujer", 300, "Green", "woman", "Kauai is my Happy Place Cropped Tee - Butter.jpg");
INSERT INTO productos VALUES (NULL, "Remera Mujer", 200, "Violet", "woman", "Kauai is my Happy Place Cropped Tee - Butter.jpg");
INSERT INTO productos VALUES (NULL, "Gorra Mujer", 200, "Black", "hat", "Aloha Patch Hat - Floral Print.jpg");
INSERT INTO productos VALUES (NULL, "Musculosa Mujer", 200, "Yellow", "woman", "Kauai is my Happy Place Cropped Tee - Butter.jpg");
INSERT INTO productos VALUES (NULL, "Pantalon Infante", 300, "Green", "child", "kids1.jpg");
INSERT INTO productos VALUES (NULL, "Remera Infante", 200, "Violet", "child", "kids1.jpg");
INSERT INTO productos VALUES (NULL, "Gorra Infante", 200, "Black", "hat", "Aloha Patch Hat - Floral Print.jpg");
INSERT INTO productos VALUES (NULL, "Musculosa Infante", 200, "Yellow", "child", "kids1.jpg");
