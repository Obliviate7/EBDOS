DROP DATABASE IF EXISTS el_baul_dorado;

CREATE DATABASE el_baul_dorado;

USE el_baul_dorado;

CREATE TABLE `users`(
    `id`                int NOT NULL AUTO_INCREMENT,
    `usrName`			VARCHAR(100) NOT NULL,
    `usrSurname`		VARCHAR(100) NOT NULL,
	`email`				VARCHAR(100) NOT NULL,
	`pass`				VARCHAR(100) NOT NULL,
    `birthDate`    	 VARCHAR(100),
    `radioGenre`    VARCHAR(100),
    `country`     VARCHAR(100),
    `province`    VARCHAR(100),
    `city`    VARCHAR(100),
    `zipCode`     VARCHAR(100),
    `mobile`    VARCHAR(100),
    `address`     VARCHAR(100),
    `webPage`     VARCHAR(100),
    `bio`     VARCHAR(100),
    
    
     PRIMARY KEY (`id`)
);