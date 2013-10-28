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
-- Table structure for table `tblEmpleados`
--

DROP TABLE IF EXISTS `tblEmpleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblEmpleados` (
  `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Nacimiento` datetime NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblEmpleados`
--

LOCK TABLES `tblEmpleados` WRITE;
/*!40000 ALTER TABLE `tblEmpleados` DISABLE KEYS */;
INSERT INTO `tblEmpleados` VALUES (1,'David','Monterrubio Hdez','7711998283','dave@david.com','1992-12-05 00:00:00','david','david'),(2,'Alex','Gonzalez','7712123123','alex@alex.com','1992-12-12 00:00:00','alex','alex'),(3,'Efren','Juarez','7712312412','efren@efren.com','1992-12-12 00:00:00','efren','efren'),(4,'juan','romero','717181190','juan@hotmail.com','1992-12-12 00:00:00','juan','juan'),(5,'marcos','romero','791287392','marcos@live.com','1882-12-12 00:00:00','marcos','marcos'),(6,'aaaaaaaaa','aaaaa','1234567','asdfg@hotmail.com','1992-12-12 00:00:00','david','david'),(7,'Reynaldo','Contreras Sierra','777123123','rey@hotmail.com','1992-12-12 00:00:00','reynaldo','david'),(8,'Cesar','Navarro Ramirez','7771199818','cesar@hotmail.com','1992-12-12 00:00:00','cesar','cesar'),(9,'Paolo','Bautizta Cruz','34567890','paolo@hotmail.com','1991-12-12 00:00:00','paolo','paolo'),(10,'qwert','wert','wertyu','wertyui@ggg.com','0000-00-00 00:00:00','tyuio','ertyuio'),(11,'David','asdas','12312','david@david.david','2013-12-12 00:00:00','david','david'),(12,'moises','camargo','23456','aaa@cccc.ccc','1212-12-12 00:00:00','1212','11221');
/*!40000 ALTER TABLE `tblEmpleados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-24 22:39:22
