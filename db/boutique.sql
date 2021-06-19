CREATE DATABASE boutique;

CREATE TABLE `users`
(
 `idUser`   int NOT NULL AUTO_INCREMENT ,
 `fullname` varchar(100) NOT NULL ,
 `phone`    varchar(20) NOT NULL ,
 `address`  varchar(200) NOT NULL ,
 `city`     varchar(50) NOT NULL ,
 `country`  varchar(50) NOT NULL ,

PRIMARY KEY (`idUser`),
UNIQUE KEY `AK1_Customer_CustomerName` (`fullname`)
) AUTO_INCREMENT=1;

/*------------------------------*/

CREATE TABLE `products`
(
 `sku`          int NOT NULL AUTO_INCREMENT ,
 `name`         varchar(256) NOT NULL ,
 `type`         varchar(256) NOT NULL ,
 `price`        float NOT NULL ,
 `upc`          int NOT NULL ,
 `shipping`     float NOT NULL ,
 `description`  text NOT NULL ,
 `manufacturer` varchar(100) NOT NULL ,
 `model`        varchar(100) NOT NULL ,
 `url`          text NOT NULL ,
 `image`        text NOT NULL ,

PRIMARY KEY (`sku`),
UNIQUE KEY `AK1_Product_SupplierId_ProductName` (`name`)
) AUTO_INCREMENT=1;

/*------------------------------*/

CREATE TABLE `categories`
(
 `id`   varchar(50) NOT NULL ,
 `name` varchar(256) NOT NULL ,

PRIMARY KEY (`id`)
);

/*------------------------------*/

CREATE TABLE `prodCategs`
(
 `id`  varchar(50) NOT NULL ,
 `sku` int NOT NULL ,

PRIMARY KEY (`id`, `sku`),
KEY `fkIdx_159` (`id`),
CONSTRAINT `FK_158` FOREIGN KEY `fkIdx_159` (`id`) REFERENCES `categories` (`id`),
KEY `fkIdx_162` (`sku`),
CONSTRAINT `FK_161` FOREIGN KEY `fkIdx_162` (`sku`) REFERENCES `products` (`sku`)
);

/*------------------------------*/

CREATE TABLE `orders`
(
 `idOrder`   int NOT NULL AUTO_INCREMENT ,
 `idUser`    int NOT NULL ,
 `total`     float NOT NULL ,
 `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ,

PRIMARY KEY (`idOrder`, `idUser`),
UNIQUE KEY `AK1_Order_OrderNumber` (`total`),
KEY `fkIdx_129` (`idUser`),
CONSTRAINT `FK_128` FOREIGN KEY `fkIdx_129` (`idUser`) REFERENCES `users` (`idUser`)
) AUTO_INCREMENT=1;

/*------------------------------*/

CREATE TABLE `orderItems`
(
 `idOrder`      int NOT NULL ,
 `sku`          int NOT NULL ,
 `idUser`       int NOT NULL ,
 `productPrice` float NOT NULL ,
 `Quantity`     int NOT NULL ,

PRIMARY KEY (`idOrder`, `sku`, `idUser`),
KEY `FK_OrderItem_OrderId_Order` (`idOrder`, `idUser`),
CONSTRAINT `FK_OrderItem_OrderId_Order` FOREIGN KEY `FK_OrderItem_OrderId_Order` (`idOrder`, `idUser`) REFERENCES `orders` (`idOrder`, `idUser`),
KEY `FK_OrderItem_ProductId_Product` (`sku`),
CONSTRAINT `FK_OrderItem_ProductId_Product` FOREIGN KEY `FK_OrderItem_ProductId_Product` (`sku`) REFERENCES `products` (`sku`)
);