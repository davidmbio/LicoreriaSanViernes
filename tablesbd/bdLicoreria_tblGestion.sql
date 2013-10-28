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
-- Table structure for table `tblGestion`
--

DROP TABLE IF EXISTS `tblGestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblGestion` (
  `IdGestion` int(11) NOT NULL AUTO_INCREMENT,
  `Mision` varchar(700) NOT NULL,
  `Vision` varchar(700) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Direccion` varchar(350) NOT NULL,
  `Valores` varchar(445) NOT NULL,
  PRIMARY KEY (`IdGestion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblGestion`
--

LOCK TABLES `tblGestion` WRITE;
/*!40000 ALTER TABLE `tblGestion` DISABLE KEYS */;
INSERT INTO `tblGestion` VALUES (1,'Anticipar, conocer y satisfacer las necesidades de nuestros clientes ofreciendo una gran variedad de vinos, licores, alimentos y accesorios nacionales e importados de la mÃ¡s alta calidad a un precio competitivo en una atmÃ³sfera de atenciÃ³n personalizada.\nEstamos comprometidos con la innovaciÃ³n y la diferenciaciÃ³n de nuestros competidores incorporando marcas tanto exclusivas como propias, y conceptos de comercializaciÃ³n modernos.\nTrabajamos dÃ­a a dÃ­a para cumplir con oportunidad y precisiÃ³n los compromisos con nuestros clientes, proveedores, colaboradores y accionistas; asegurando una rentabilidad que nos permita ser una fuente de trabajo estable y con futuro para nuestros colaborado','Ser una referencia institucional, lÃ­der en el mercado nacional de vinos, licores, Bacalao y alimentos gourmet.\n\nSer reconocidos por nuestra competitividad, innovaciÃ³n, crecimiento, desarrollo y calidad de nuestro capital humano.\n\nPromovemos activamente la cultura del consumo del vino y del buen vivir.','                sanviernes@hotmail.com        <br>\n    asdasd','Tel 1: 77118917372 <br>\nTel 2: 77118917372 <br>       \n Tel 3: 7711998283 <br>','Col. Centro Huejutla de Reyes Hgo.','                <i class=\"icon-check\"></i> Responsabilidad <br>\n<i class=\"icon-check\"></i> Honestidad <br>\n<i class=\"icon-check\"></i> Disciplina<br>\n<i class=\"icon-check\"></i> Amabilidad                              ');
/*!40000 ALTER TABLE `tblGestion` ENABLE KEYS */;
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
