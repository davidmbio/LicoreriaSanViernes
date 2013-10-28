CREATE DATABASE  IF NOT EXISTS `bdLicoreria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bdLicoreria`;
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bdLicoreria
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.13.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblPromocion`
--

DROP TABLE IF EXISTS `tblPromocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblPromocion` (
  `IdPromocion` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(70) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Ruta` varchar(50) NOT NULL,
  `Imagen` varchar(30) NOT NULL,
  PRIMARY KEY (`IdPromocion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblPromocion`
--

LOCK TABLES `tblPromocion` WRITE;
/*!40000 ALTER TABLE `tblPromocion` DISABLE KEYS */;
INSERT INTO `tblPromocion` VALUES (1,'Vinos al 2x1','En la compra de cualquier vino con precio mayor de 100 pesos se lleva otro de regalo','web/img/promocion/img1.jpg','img1.jpg'),(2,'Remate','En la compra de cualquier cino con un descuento de 20% de descuento','web/img/promocion/img2.jpg','img2.jpg'),(3,'Vino 3x1','En la compra de cualquier producto en vino y licores ','web/img/promocion/img3.jpg','img3.jpg');
/*!40000 ALTER TABLE `tblPromocion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-24 22:39:23
