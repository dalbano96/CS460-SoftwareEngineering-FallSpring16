-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: student
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `Checker`
--

DROP TABLE IF EXISTS `Checker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Checker` (
  `C_ID` int(50) NOT NULL,
  `C_check_value` tinyint(1) NOT NULL,
  `C_Date` date NOT NULL,
  `C_comment` text NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Checker`
--

LOCK TABLES `Checker` WRITE;
/*!40000 ALTER TABLE `Checker` DISABLE KEYS */;
/*!40000 ALTER TABLE `Checker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Years`
--

DROP TABLE IF EXISTS `Years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Years` (
  `Y_ID` int(50) NOT NULL,
  `Y_year` int(25) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  PRIMARY KEY (`Y_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Years`
--

LOCK TABLES `Years` WRITE;
/*!40000 ALTER TABLE `Years` DISABLE KEYS */;
INSERT INTO `Years` VALUES (1,2016,'SPRING'),(2,2016,'SUMMER'),(3,2016,'FALL'),(4,2017,'SPRING'),(5,2017,'SUMMER'),(6,2017,'FALL');
/*!40000 ALTER TABLE `Years` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_program_bridge`
--

DROP TABLE IF EXISTS `department_program_bridge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_program_bridge` (
  `D_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_program_bridge`
--

LOCK TABLES `department_program_bridge` WRITE;
/*!40000 ALTER TABLE `department_program_bridge` DISABLE KEYS */;
INSERT INTO `department_program_bridge` VALUES (1,1),(2,2),(3,3),(3,4),(4,5),(5,6),(6,7),(6,8),(6,9),(6,10);
/*!40000 ALTER TABLE `department_program_bridge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `D_ID` int(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_chair` varchar(100) NOT NULL,
  PRIMARY KEY (`D_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Psychology','Dr. Psychology_1'),(2,'Nursing','Dr. Nursing_1'),(3,'Education','Dr. Education_1'),(4,'Anthropology','Dr. Anthropology_1'),(5,'Environmental Science','Dr. Enviroment_1'),(6,'Hawaiian Study','Dr. Hawaiian Study');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program` (
  `P_ID` int(100) NOT NULL,
  `P_name` varchar(250) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program`
--

LOCK TABLES `program` WRITE;
/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` VALUES (0,'Null Program'),(1,'Master of Arts in Counseling Psychology'),(2,'Doctor of Nursing Practice'),(3,'Teaching MAT'),(4,'Master of education'),(5,'MA Heritage management '),(6,'MS eviormental science'),(7,'Master of hawaiian language '),(8,'MA Indigenous language and culture'),(9,'PhD Hawaiian and Indigenous language'),(10,'Kahuawaiola Indigenous teacher education');
/*!40000 ALTER TABLE `program` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_requirement_bridge`
--

DROP TABLE IF EXISTS `program_requirement_bridge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_requirement_bridge` (
  `P_ID` int(250) NOT NULL,
  `req_ID` int(250) NOT NULL,
  PRIMARY KEY (`P_ID`,`req_ID`),
  KEY `P_ID` (`P_ID`,`req_ID`),
  KEY `req_ID` (`req_ID`),
  CONSTRAINT `program_requirement_bridge_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `program` (`P_ID`),
  CONSTRAINT `program_requirement_bridge_ibfk_2` FOREIGN KEY (`req_ID`) REFERENCES `requirements` (`req_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_requirement_bridge`
--

LOCK TABLES `program_requirement_bridge` WRITE;
/*!40000 ALTER TABLE `program_requirement_bridge` DISABLE KEYS */;
INSERT INTO `program_requirement_bridge` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(1,4),(2,4),(3,4),(4,4),(5,4),(6,4),(7,4),(8,4),(9,4),(10,4),(1,5),(2,5),(3,5),(4,5),(5,5),(6,5),(7,5),(8,5),(9,5),(10,5),(1,6),(2,6),(3,6),(4,6),(5,6),(6,6),(7,6),(8,6),(9,6),(10,6),(1,7),(2,7),(3,7),(4,7),(5,7),(6,7),(7,7),(8,7),(9,7),(10,7),(1,8),(2,8),(3,8),(4,8),(5,8),(6,8),(7,8),(8,8),(9,8),(10,8),(1,9),(2,9),(3,9),(4,9),(5,9),(6,9),(7,9),(8,9),(9,9),(10,9);
/*!40000 ALTER TABLE `program_requirement_bridge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirement_checker_bridge`
--

DROP TABLE IF EXISTS `requirement_checker_bridge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirement_checker_bridge` (
  `req_ID` int(100) NOT NULL,
  `C_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement_checker_bridge`
--

LOCK TABLES `requirement_checker_bridge` WRITE;
/*!40000 ALTER TABLE `requirement_checker_bridge` DISABLE KEYS */;
/*!40000 ALTER TABLE `requirement_checker_bridge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `req_ID` int(11) NOT NULL,
  `req_name` varchar(100) NOT NULL,
  PRIMARY KEY (`req_ID`),
  UNIQUE KEY `req_ID` (`req_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements`
--

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
INSERT INTO `requirements` VALUES (1,'UHH application form'),(2,'UHH application fee'),(3,'Transcript'),(4,'Personal Statement'),(5,'Resume'),(6,'Letter of recommendation 1'),(7,'Letter of recommendation 2'),(8,'Letter of recommendation 3'),(9,'GRE(Graduate Record Examinations)');
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '3',
  `P_ID` int(100) NOT NULL,
  `Y_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `email_2` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (12,'typical student','student@gmail.com','$2y$10$ZE9yRxP98BNNyY6iOvLMUe4u9P1QU8LoMQOy9rUneIw.26sW1lKki',3,0,0),(10,'department','someDepartmentEmail@gmail.com','$2y$10$sUy1yfCmTR74cYDRrLWtDerb.zFmVydJk5vxeMlMoSwxGkxkt3NXe',2,0,0),(11,'admin','someAdminEmail@gmail.com','$2y$10$eLMwsTgbJ2OvcHmNrdZUh.c8wDccrqTF/FDGlzcZ0/waTRa1QVImG',1,0,0),(13,'student student','student1@gmail.com','$2y$10$RNHHd3VscRVxPOiLOaoheOy1LfO3Mh6zXDS0Sf7EITyweffrLkoKu',3,0,0),(15,'me me','me@gmail.com','$2y$10$tW7qFabqiWBzTtKR0E.67Oci1H2TssQzLpVOgT0n2bY0xqkuOs1CC',3,0,0),(16,'Daryl Albano','dalbano96@gmail.com','$2y$10$BoyqkPZC5o15IujRsDWnhOEe3dpCXIfohWdx6f40uja8OdW0qk9GG',3,0,0),(17,'blue','blue@gmail.com','$2y$10$xOdtPADPykxyvEzZdfMwweUVd3mhSW6JPjOv3dOOITeM0MT5v2Lly',3,0,0),(18,'123','123@gmail.com','$2y$10$UDGJ7Xlk0euohc2pkYr9Pe2mJQonKd16kcH6srGarwcH3jdH3TnXe',3,0,0),(19,'password is admin','testadmin@gmail.com','$2y$10$oaragsJ1Uw2ao7gTb208LO7dEDCXROuJm6KEauj029ab8lJaOq5I6',3,0,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-20 13:42:41
