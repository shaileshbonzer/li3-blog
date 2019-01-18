/*
SQLyog Ultimate - MySQL GUI v8.22 
MySQL - 5.7.19 : Database - li3_kitten_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`li3_kitten_blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `my_posts` */

DROP TABLE IF EXISTS `my_posts`;

CREATE TABLE `my_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `my_posts` */

insert  into `my_posts`(`id`,`title`,`body`) values (1,'1 :: Setup!','1a :: Requirements\r\n\r\nFor this tutorial, you\'ll need your own local PHP 5.3+ development environment. For Windows, XAMPP is the way to go. For Mac users, get your wallets out and buy a copy of MAMP Pro (XAMPP for Mac utterly blows). You\'ll also need a MySQL server instance installed (included with XAMPP and MAMP), and a copy of MySQL Workbench (a free utility by the MySQL folks).\r\n\r\nYou\'ll also need something to edit with. I\'m a Netbeans fanatic, but you could also use Eclipse, Notepad++, BBEdit, or whatever you like.'),(2,'2 :: Glossary',':: MVC\r\nMVC is a organizational structure (the letters stand for Model-View-Controller). The idea is that the task of programming can be made a lot more simple and speedy by following a few basic rules and ensuring that everything you do (as a programmer), conforms to this specific type of organization.\r\n\r\nMVC can best be likened to legos. You create a bunch of small, tidy \"blocks\" of code, and then fit those blocks together to make cool stuff. Because everything is packed in nice little organized chunks, you can fit them back together easily. It also helps keep you organized and dramatically improves the speed of your application development.');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`) values (1,'shailesh','d06b6ec3635b5b05ec5f6a70c4f0eb79c87759f65cdebdb6c5008741ce63dc79750ab5a02cf515fdb1a80922e6bf73e46a5bfdc875af5f46bc274c896e789384'),(2,'pratyush','d06b6ec3635b5b05ec5f6a70c4f0eb79c87759f65cdebdb6c5008741ce63dc79750ab5a02cf515fdb1a80922e6bf73e46a5bfdc875af5f46bc274c896e789384');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
