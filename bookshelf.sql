/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - bookshelf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bookshelf` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `bookshelf`;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `books` */

insert  into `books`(`name`,`author`,`genre`,`rating`,`book_id`) values 
('The Hobbit','J.R.R. Tolkien','Fantasy',9,10),
('Milk and honey','Rupi Kaur','Poetry',8.6,11),
('To Kill a Mockingbird','Harper Lee','Classic',9.6,12),
('Ninth House','Alex Stern','Fantasy',8.9,13),
('The Savior','J.R. Ward','Romance',9.2,14),
('Gone Girl','Gillian Flynn','Thriller',8,15),
('The Guardians','John Grisham','Thriller',9.1,17),
('A Biography of Frida Kahlo','Hayden Herrera','Biography',9.4,18),
('The Sun and Her Flowers','Rupi Kaur','Poetry',9.8,19),
('A Game of Thrones','R.R. Martin George','Fantasy',9.3,20),
('Romeo and Juliet','William Shakespeare','Classic',8.6,21),
('The Notebook','Nicholas Sparks','Romance',9.7,22),
('Steve Jobs','Walter Isaacson','Biography',7.5,23),
('The Republic','Plato','Philosophy',8.3,24),
('Zaoka','Sandra Braun','Thriller',7,25),
('The reunion','Gijom Muso','Thriller',9.7,27),
('Call from an Angel','Gijom Muso','Thriller',0,28);

/*Table structure for table `korisnik` */

DROP TABLE IF EXISTS `korisnik`;

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`korisnik_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `korisnik` */

insert  into `korisnik`(`korisnik_id`,`username`,`password`) values 
(1,'ana','ana'),
(2,'admin','admin'),
(3,'admin1','admin1'),
(4,'admin2','admin2'),
(9,'admin3','admin3');

/*Table structure for table `ocena` */

DROP TABLE IF EXISTS `ocena`;

CREATE TABLE `ocena` (
  `rating` double DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `korisnik_id` int(11) DEFAULT NULL,
  KEY `book_id` (`book_id`),
  KEY `korisnik_id` (`korisnik_id`),
  CONSTRAINT `book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  CONSTRAINT `korisnik_id` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`korisnik_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ocena` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
