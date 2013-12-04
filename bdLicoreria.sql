-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bdLicoreria
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.10.1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `likes` int(11) NOT NULL,
  `hates` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `resumen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,7,1,'Votacion y/o comentario','hola mundo'),(2,0,0,'Votacion y/o comentario','hola mundo');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblCategorias`
--

DROP TABLE IF EXISTS `tblCategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblCategorias` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(250) NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblCategorias`
--

LOCK TABLES `tblCategorias` WRITE;
/*!40000 ALTER TABLE `tblCategorias` DISABLE KEYS */;
INSERT INTO `tblCategorias` VALUES (1,'Tequilas');
/*!40000 ALTER TABLE `tblCategorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblClientes`
--

DROP TABLE IF EXISTS `tblClientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblClientes` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Ruta` varchar(70) DEFAULT NULL,
  `Foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblClientes`
--

LOCK TABLES `tblClientes` WRITE;
/*!40000 ALTER TABLE `tblClientes` DISABLE KEYS */;
INSERT INTO `tblClientes` VALUES (1,'David','Monterrubio HernÃ¡ndez','7711827846','david_david@gmail.com','1992-12-05','4441654944','4441654944','img/','default.jpg');
/*!40000 ALTER TABLE `tblClientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblComentarios`
--

DROP TABLE IF EXISTS `tblComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblComentarios` (
  `IdComentario` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  `Fecha` date NOT NULL,
  `Aprobado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdComentario`),
  KEY `fk_tblComentarios_1` (`IdCliente`),
  KEY `fk_tblComentarios_2` (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblComentarios`
--

LOCK TABLES `tblComentarios` WRITE;
/*!40000 ALTER TABLE `tblComentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblComentarios` ENABLE KEYS */;
UNLOCK TABLES;

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
  `Nacimiento` date NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblEmpleados`
--

LOCK TABLES `tblEmpleados` WRITE;
/*!40000 ALTER TABLE `tblEmpleados` DISABLE KEYS */;
INSERT INTO `tblEmpleados` VALUES (1,'David','Monterrubio Hdez','7711998283','dave@david.com','1992-12-05','4441654944','4441654944');
/*!40000 ALTER TABLE `tblEmpleados` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tblImagen`
--

DROP TABLE IF EXISTS `tblImagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblImagen` (
  `IdImagen` int(11) NOT NULL AUTO_INCREMENT,
  `IdProducto` int(11) NOT NULL,
  `Ruta` varchar(10) NOT NULL,
  `Imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`IdImagen`),
  KEY `fk_tblImagen_1` (`IdProducto`),
  CONSTRAINT `fk_tblImagen_1` FOREIGN KEY (`IdProducto`) REFERENCES `tblProductos` (`IdProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblImagen`
--

LOCK TABLES `tblImagen` WRITE;
/*!40000 ALTER TABLE `tblImagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblImagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblProductos`
--

DROP TABLE IF EXISTS `tblProductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblProductos` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `IdCategoria` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Precio` float NOT NULL,
  `Caducidad` date NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `fk_tblProductos_1` (`IdCategoria`),
  CONSTRAINT `fk_tblProductos_1` FOREIGN KEY (`IdCategoria`) REFERENCES `tblCategorias` (`IdCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblProductos`
--

LOCK TABLES `tblProductos` WRITE;
/*!40000 ALTER TABLE `tblProductos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblProductos` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!40000 ALTER TABLE `tblProm_Detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblPromocion`
--

DROP TABLE IF EXISTS `tblPromocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblPromocion` (
  `IdPromocion` int(11) NOT NULL,
  `Titulo` varchar(70) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Fin` date NOT NULL,
  `Descuento` float NOT NULL,
  `Ruta` varchar(10) DEFAULT NULL,
  `Imagen` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`IdPromocion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblPromocion`
--

LOCK TABLES `tblPromocion` WRITE;
/*!40000 ALTER TABLE `tblPromocion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblPromocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblVotacion`
--

DROP TABLE IF EXISTS `tblVotacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblVotacion` (
  `IdVotacion` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `Like` int(11) NOT NULL,
  `Dislake` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblVotacion`
--

LOCK TABLES `tblVotacion` WRITE;
/*!40000 ALTER TABLE `tblVotacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblVotacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votings`
--

DROP TABLE IF EXISTS `votings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `votes_up` int(11) NOT NULL,
  `votes_down` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votings`
--

LOCK TABLES `votings` WRITE;
/*!40000 ALTER TABLE `votings` DISABLE KEYS */;
/*!40000 ALTER TABLE `votings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-02 17:40:16
