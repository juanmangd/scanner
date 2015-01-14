-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: yii2advanced
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `idMovil` int(12) NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `edad` int(3) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `urlFoto1Movil` varchar(150) DEFAULT NULL,
  `lonCapturaFoto1Movil` text NOT NULL,
  `latCapturaFoto1Movil` text NOT NULL,
  `timeStampCapturaFoto1Movil` int(50) NOT NULL,
  `urlFoto2Movil` text NOT NULL,
  `lonCapturaFoto2Movil` text NOT NULL,
  `latCapturaFoto2Movil` text NOT NULL,
  `timeStampCapturaFoto2Movil` text NOT NULL,
  `latCapturaFoto3Movil` text NOT NULL,
  `urlFoto3Movil` text NOT NULL,
  `timeStampCapturaFoto3Movil` text NOT NULL,
  `urlFoto4Movil` text NOT NULL,
  `lonCapturaFoto4Movil` text NOT NULL,
  `latCapturaFoto4Movil` text NOT NULL,
  `timeStampCapturaFoto4Movil` text NOT NULL,
  `urlVideoMovil` text NOT NULL,
  `lonCapturaVideoMovil` text NOT NULL,
  `latCapturaVideoMovil` text NOT NULL,
  `timeStampCapturaVideoMovil` text NOT NULL,
  `observaciones` text,
  `username` text NOT NULL,
  `servAuth` text NOT NULL,
  `celular` text NOT NULL,
  `lugarCaptura` text NOT NULL,
  `lonCapturaFoto3Movil` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (0,1,'Juan',27,'juanman.gd@gmail.com','http://www.link.com','0','',0,'','','','','','','','','','','','','','','','Me roban la corriente!!!!!!!!','','','','',''),(0,2,'Maná - Bendita tu luz (Karaoteca.com)',NULL,'','uploads/Maná - Bendita tu luz (Karaoteca.com).mid','0','',0,'','','','','','','','','','','','','','','',NULL,'','','','',''),(0,3,'Maná - Bendita tu luz (Karaoteca.com)',NULL,'','uploads/Maná - Bendita tu luz (Karaoteca.com).mid','0','',0,'','','','','','','','','','','','','','','',NULL,'','','','',''),(0,4,'Maná - Bendita tu luz (Karaoteca.com)',NULL,'','uploads/Maná - Bendita tu luz (Karaoteca.com).mid','0','',0,'','','','','','','','','','','','','','','',NULL,'','','','','');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1416176071),('m130524_201442_init',1416176080);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'juanman','gSv2ycqrHm-LBO1nf9-lOsVL0EL-EqsG','$2y$13$kjeJtPk48pABB0X49Uzs0Of1Y8huv53H4tFlAL60hMvFebXfpWrdu','g-QsJnjW05jTNXJcy8Ecy3LkRbtO8pJR_1416177061','juanman.gd@gmail.com',10,10,1416177048,1416177061),(2,'Admin2','--uG7aiHwTxxTu7jcq1lo22Gjs5J5QHA','$2y$13$kMGd47jdyov8eceqZBkbyuMcFCyU5Q1AR5SlgmkNCUOFNGiEZscSy',NULL,'juanman2.gd@gmail.com',10,10,1416180264,1416180264),(3,'Admin','0kdm7zYlFn8hkZoVVYSCZLqLUxo5qhat','$2y$13$yRmJhsUkieGqk6BImfyD6OplN6pBNc44Nm3fT75Ij5q.AF9pbnl5a',NULL,'juanman@gmail.com',10,10,1416180449,1416180449),(4,'jmaya','JYrKbZKuPZUOqKUZNOJU3t1UwPZFvwg0','$2y$13$L993OOV6DfRI201wdv/RE.Rw2eXP1yoY91KdXcx1ortrXNtxJWDJy',NULL,'jmaya@fiboconsulting.com',10,10,1416264231,1416264231),(5,'juan','3sc4Sv-XJHpaT_tQXesJUOoCZ3U_GqUZ','$2y$13$ZsNP4ij3Q3XHYjdX/d2Kk.Ef05SOTNe9L8hAE4iEHIwYt9jpTu4lm',NULL,'juan@gmail.com',10,10,1416672333,1416672333),(6,'kjjikj','aXQARH1ZE9uH-JlAx9BS7GmcQm0QUlcC','$2y$13$nZ95mKw8L48XsnGxli.UbO5g1ZahnAENG/8pe6YeH4bVvZF9kWOyK',NULL,'Admin@kak.com',10,10,1417051875,1417051875);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 21:22:03
