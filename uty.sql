/*
SQLyog Ultimate v11.42 (32 bit)
MySQL - 5.6.31 : Database - uty
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `kampus` */

DROP TABLE IF EXISTS `kampus`;

CREATE TABLE `kampus` (
  `kampus_id` int(11) NOT NULL AUTO_INCREMENT,
  `kampus_nama` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`kampus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kampus` */

insert  into `kampus`(`kampus_id`,`kampus_nama`) values (1,'UTY');
insert  into `kampus`(`kampus_id`,`kampus_nama`) values (2,'UNY');
insert  into `kampus`(`kampus_id`,`kampus_nama`) values (3,'UGM');
insert  into `kampus`(`kampus_id`,`kampus_nama`) values (4,'AKAKOM');
insert  into `kampus`(`kampus_id`,`kampus_nama`) values (5,'AMIKOM');
insert  into `kampus`(`kampus_id`,`kampus_nama`) values (6,'tst');

/*Table structure for table `session` */

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `session` */

insert  into `session`(`session_id`,`session_name`) values (2,'1');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_name`,`password`) values (1,'uty','f36645ded531138a921213f9e01164b2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
