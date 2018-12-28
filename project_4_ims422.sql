/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - loginstuff
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE `project_4_ims422`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `songs`;

CREATE TABLE `songs` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) not NULL,
  `artist` varchar(40)not NULL,
  `album` varchar(40) NULL,
  `genre` varchar(40)  NULL,
  `comments` varchar(300) not NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `songs`(`id`,`name`,`artist`,`album`,`genre`,`comments`) values 
(1,'FEFE feat. Nicki Minaj','69','album','Rap','Pretty dope song');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
