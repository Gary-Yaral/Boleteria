/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.20-MariaDB : Database - boletos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`boletos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;

USE `boletos`;

/*Table structure for table `boleto` */

DROP TABLE IF EXISTS `boleto`;

CREATE TABLE `boleto` (
  `id_boleto` int(11) NOT NULL AUTO_INCREMENT,
  `id_horario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `num_boleto` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `n_asiento` int(11) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_boleto`),
  KEY `boleto_vendedor` (`id_vendedor`),
  KEY `id_horario` (`id_horario`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `boleto_ibfk_1` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`),
  CONSTRAINT `boleto_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `boleto_vendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

/*Data for the table `boleto` */

insert  into `boleto`(`id_boleto`,`id_horario`,`id_cliente`,`id_vendedor`,`num_boleto`,`fecha`,`valor`,`n_asiento`,`hora`) values (78,30,45,1,1,'2022-04-03',78,1,'19:21:00'),(79,30,1,1,2,'2022-04-03',78,2,'19:27:00'),(82,30,45,1,3,'2022-04-03',78,3,'19:37:00'),(84,30,1,1,1,'2022-04-04',78,1,'16:26:00'),(85,30,50,1,2,'2022-04-04',78,2,'16:28:00');

/*Table structure for table `bus` */

DROP TABLE IF EXISTS `bus`;

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL AUTO_INCREMENT,
  `chofer` varchar(30) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `capacidad` varchar(10) DEFAULT NULL,
  `modelo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_bus`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `bus` */

insert  into `bus`(`id_bus`,`chofer`,`placa`,`matricula`,`capacidad`,`modelo`) values (27,'Freddy Mora ','VFGT34','2020','45','SDHY'),(28,'Carlos Andrade','VFGT67h','2020','5','CG456'),(29,'Genaro Flores','RBX0334','2008','50','ESD6H'),(35,'Luis Gabriel','GDRF','2018','36','DFDV56'),(44,'buuhh','jhi','bjb','68','bub');

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(11) DEFAULT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`id_cliente`,`cedula`,`nombres`,`apellidos`,`telefono`,`direccion`,`correo`) values (1,'9999999999','Consumidor','Final','no','no','consumidorfinal@mail'),(45,'0983412290','Pedro','Flores','0986675566','27 de Mayo','pedro8721@mail.com'),(49,'1203248750','Gloria','Moran','0986765756','Laureles','fredy@gmail.com'),(50,'0975756456','Andres','Perez','0977667575','27 de mayo','micorre@mail.com');

/*Table structure for table `horario` */

DROP TABLE IF EXISTS `horario`;

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruta` int(11) NOT NULL,
  `hora_salida` varchar(20) DEFAULT NULL,
  `id_bus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_horario`),
  KEY `ruta_horario` (`id_ruta`),
  KEY `id_bus` (`id_bus`),
  CONSTRAINT `id_bus` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`),
  CONSTRAINT `ruta_horario` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id_ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `horario` */

insert  into `horario`(`id_horario`,`id_ruta`,`hora_salida`,`id_bus`) values (30,22,'21:00',28),(36,22,'18:00',29);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) DEFAULT NULL,
  `clave` varchar(60) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id_usuario`,`usuario`,`clave`,`nombre`) values (1,'admin','2022','ariel'),(2,'admin','123','contreras');

/*Table structure for table `oficina` */

DROP TABLE IF EXISTS `oficina`;

CREATE TABLE `oficina` (
  `id_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_oficina`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `oficina` */

insert  into `oficina`(`id_oficina`,`nombre`,`direccion`,`telefono`,`correo`) values (1,'Babahoyo','Terminal Terrestre1','0982342432','caluma@calumabus.com'),(10,'Cristal Palter','Laureles','095453432','carlta@mail.com');

/*Table structure for table `ruta` */

DROP TABLE IF EXISTS `ruta`;

CREATE TABLE `ruta` (
  `id_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `n_ruta` varchar(20) DEFAULT NULL,
  `origen` varchar(50) DEFAULT NULL,
  `destino` varchar(50) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `tiempo_espera` time DEFAULT NULL,
  PRIMARY KEY (`id_ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `ruta` */

insert  into `ruta`(`id_ruta`,`n_ruta`,`origen`,`destino`,`valor`,`tiempo_espera`) values (21,'3','Quevedo','Guayas',12,'02:00:00'),(22,'56','Babahoyo','Vinces',78,'01:30:00'),(23,'8','Jujan','Durán',1.75,'01:45:00'),(25,'7','Babahoyo','Caluma',1.25,'01:20:00'),(26,'12','Babahoyo','Durán',1.75,'01:10:00');

/*Table structure for table `ruta_bus` */

DROP TABLE IF EXISTS `ruta_bus`;

CREATE TABLE `ruta_bus` (
  `id_ruta` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  KEY `ruta_bus` (`id_ruta`),
  KEY `r_bus` (`id_bus`),
  CONSTRAINT `FK_ruta_bus` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id_ruta`),
  CONSTRAINT `r_bus` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ruta_bus` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`usuario`,`clave`,`nombre`) values (1,'Caluma','caluma2022','Freddy Mora'),(2,'admin','2022','Pedro');

/*Table structure for table `vendedor` */

DROP TABLE IF EXISTS `vendedor`;

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_oficina` int(11) NOT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `cedula` varchar(11) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_vendedor`),
  KEY `oficina_vendedor` (`id_oficina`),
  CONSTRAINT `oficina_vendedor` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `vendedor` */

insert  into `vendedor`(`id_vendedor`,`id_oficina`,`nombres`,`apellidos`,`cedula`,`direccion`,`telefono`,`correo`) values (1,1,'Carlitos','Perez','1203553354','Los Perales','0995757575','carloselbacangmail.c');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
