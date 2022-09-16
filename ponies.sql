CREATE DATABASE  IF NOT EXISTS `ponies` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ponies`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: ponies
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `horses`
--

DROP TABLE IF EXISTS `horses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `HorseName` text,
  `HorseAge` int(11) DEFAULT NULL,
  `HorseAbililty` text,
  `HorseBirthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horses`
--

LOCK TABLES `horses` WRITE;
/*!40000 ALTER TABLE `horses` DISABLE KEYS */;
/*!40000 ALTER TABLE `horses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponies`
--

DROP TABLE IF EXISTS `ponies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PonyName` text,
  `Age` int(11) DEFAULT NULL,
  `Ability` text,
  `Health` int(11) DEFAULT NULL,
  `BirthDay` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponies`
--

LOCK TABLES `ponies` WRITE;
/*!40000 ALTER TABLE `ponies` DISABLE KEYS */;
INSERT INTO `ponies` VALUES (6,'Rainbow Dash',10,'Weather Control and SonicRainboom',500,'2004-08-07'),(7,'Rarity',9,'Telekinesis',100,'2002-05-05'),(8,'Fluttershy',8,'Animal Friendship and The Stare',75,'2005-07-07'),(9,'Applejack',10,'Cowgirl Skillz',450,'2002-12-12'),(10,'PinkyPie',7,'Death by Laughter',50,'2005-05-19'),(14,'Dr. Whooves',10,'Time Control, Dimensonal Manipulation',1000,'2004-08-07'),(15,'Twilight Sparkle',9,'Epic Magic',2000,'2004-10-10'),(22,'Princess Twilight',9,'Epic Magic',5000,'2004-10-04'),(37,'Carly Anna',7,'Fairy magic, Winged flight, Wind control',250,'2004-11-10'),(38,'Derpy Whooves',5,'SEP Fields, Invisibility',115,'2009-04-15');
/*!40000 ALTER TABLE `ponies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vocaloids`
--

DROP TABLE IF EXISTS `vocaloids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vocaloids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VocaloidName` text,
  `Age` int(11) DEFAULT NULL,
  `Ability` text,
  `BirthDay` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vocaloids`
--

LOCK TABLES `vocaloids` WRITE;
/*!40000 ALTER TABLE `vocaloids` DISABLE KEYS */;
INSERT INTO `vocaloids` VALUES (1,'Hatsune Miku',16,'Gravity Manipulation and Vocal Suggestion','1977-05-05'),(2,'Luka Meguine',17,'Interphasing Matter and Energy Manipulation','1975-11-13');
/*!40000 ALTER TABLE `vocaloids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warriors`
--

DROP TABLE IF EXISTS `warriors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warriors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Warrior_Name` text,
  `Primary_Weapon` text,
  `Secondary_Weapon` text,
  `Special_Ability` text,
  `Vulnerability` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warriors`
--

LOCK TABLES `warriors` WRITE;
/*!40000 ALTER TABLE `warriors` DISABLE KEYS */;
/*!40000 ALTER TABLE `warriors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-15 16:09:22
