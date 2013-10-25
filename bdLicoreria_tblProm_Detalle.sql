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
-- Table structure for table `tblProm_Detalle`
--

DROP TABLE IF EXISTS `tblProm_Detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblProm_Detalle` (
  `IdPromocion` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `FInicio` datetime NOT NULL,
  `FFin` datetime NOT NULL,
  `Descuento` int(11) NOT NULL,
  KEY `fk_tblProm_Detalle_1` (`IdPromocion`),
  KEY `fk_tblProm_Detalle_2` (`IdProducto`),
  KEY `fk_tblProm_Detalle_3` (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblProm_Detalle`
--

LOCK TABLES `tblProm_Detalle` WRITE;
/*!40000 ALTER TABLE `tblProm_Detalle` DISABLE KEYS */;
INSERT INTO `tblProm_Detalle` VALUES (1,0,1,'2013-12-12 00:00:00','2013-12-15 00:00:00',10),(2,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',10),(3,1,0,'2013-10-12 00:00:00','2013-10-15 00:00:00',10),(4,0,2,'0000-00-00 00:00:00','0000-00-00 00:00:00',123);
/*!40000 ALTER TABLE `tblProm_Detalle` ENABLE KEYS */;
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
