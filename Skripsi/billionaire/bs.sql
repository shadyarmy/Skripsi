/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.1.31-MariaDB : Database - bs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bs`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `id_pegawai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `total` float NOT NULL,
  `id_invoice` varchar(10) DEFAULT NULL,
  `id_buku` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_detail_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_transaksi` */

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id_invoice` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pelanggan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `invoice` */

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`nama`,`alamat`,`no_telp`,`email`,`jabatan`,`username`,`password`) values ('HR0001','Candra','Jalan Sarijadi','082129082238','candra.satiya@gmail.com','HRD','candra','e999cd3950bd8db879e2fd401e95ed9d'),('HR0002','Nunu','Jalan Cigondewah','087421411891','nunu.nunu@gmail.com','HRD','nunu','c8448be50b73f4aef91a851566763d2e'),('HR0003','Anto','Jalan Banjaran','087321136263','anto.anto@gmail.com','HRD','anto','01839822bfade9dd76dfeb165cd53e34'),('HR0004','Ikbal','Jalan Banten','081742141189','ikbal.ikbal@gmail.com','Admin','ikbal','419f629b347d17cce8b7e98ed593df4c');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `id_pegawai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

/*Table structure for table `rekomendasi_paket` */

DROP TABLE IF EXISTS `rekomendasi_paket`;

CREATE TABLE `rekomendasi_paket` (
  `id_rekomendasi` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_detail_transaksi` varchar(10) DEFAULT NULL,
  `id_pelanggan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_rekomendasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rekomendasi_paket` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
