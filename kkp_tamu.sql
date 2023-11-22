/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - kkp_tamu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kkp_tamu` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kkp_tamu`;

/*Table structure for table `daftar_tamu` */

DROP TABLE IF EXISTS `daftar_tamu`;

CREATE TABLE `daftar_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `keperluan` varchar(500) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `daftar_tamu` */

insert  into `daftar_tamu`(`id`,`nama`,`no_hp`,`jk`,`alamat`,`email`,`keperluan`,`gambar`,`tanggal`) values 
(6,'mark zukerberk silalahi','081387651218','Laki-laki','bekasi','mark@gmail.com','bertemu dengan bapak ihsan','Screenshot (41).png','2022-05-17'),
(10,'agung hapsah','081287651409','Laki-laki','bekasi','agung@gmail.com','kunjungan kerja','Capture.PNG','2022-05-19'),
(11,'zulham','083854389765','Laki-laki','cikarang','zul@gmail.com','mengajukan permohonan magang','admin.png','2022-05-19'),
(12,'fransiska','081825487610','Wanita','malang','nad@gmail.com','mengajukan permohonan magang','Screenshot (90).png','2022-05-19'),
(13,'nadia manurung','081316234217','Wanita','bandung','nad@gmail.com','mengajukan permohonan magang','1200px-Chicago_Bulls_logo.svg.png','2022-05-19'),
(14,'marco reus','081743128972','Laki-laki','jerman','reus@gmail.com','ingin bertemu dengan pak irfan','Screenshot (33).png','2022-05-19'),
(15,'hamdani','081416765413','Laki-laki','jl.cikarang-cibarusah','ham@gmail.com','bertemu dengan pak ahsan','bagan pokok proses kompilasi.png','2022-05-20'),
(17,'Mario Baloteli','081216751342','Laki-laki','Jakarta Utara','balo@gmail.com','Mengajukan Permohonan Magang Untuk 1 Bulan','logo-ppp.jpg','2022-05-24'),
(18,'Zidan Fahrizal','081723417813','Laki-laki','Jawa Tengah','Zii@gmail.com','Kunjungan Kerja ','logo_diskominfo.png','2022-05-24');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`username`,`password`,`nama`,`level`,`foto`) values 
(1,'rahmat','admin','rahmat hasibuan','admin','admin.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
