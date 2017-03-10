-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: eupheus
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Psychology',''),(2,'Nursing',''),(3,'Education',''),(4,'Anthropology',''),(5,'Environmental Science',''),(6,'Hawaiian Study','');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_08_04_131614_create_settings_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_requirement`
--

DROP TABLE IF EXISTS `program_requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_requirement` (
  `program_id` int(100) NOT NULL,
  `requirement_id` int(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_requirement`
--

LOCK TABLES `program_requirement` WRITE;
/*!40000 ALTER TABLE `program_requirement` DISABLE KEYS */;
INSERT INTO `program_requirement` VALUES (3,1,1),(3,2,2),(3,3,3),(3,4,4),(3,6,5),(3,7,6),(3,8,7),(3,9,8),(3,10,9),(3,11,10),(4,1,11),(4,2,12),(4,12,13),(4,3,14),(4,5,15),(4,4,16),(4,6,17),(4,7,18),(4,8,19),(4,13,20),(4,14,21),(5,1,26),(5,2,27),(5,15,28),(5,4,29),(5,16,30),(5,20,31),(5,21,32),(5,6,33),(5,7,34),(5,8,35),(5,3,36),(5,22,37),(5,17,38),(5,11,39),(5,19,40),(5,18,41),(3,5,42);
/*!40000 ALTER TABLE `program_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (3,'Master of Arts in Counseling Psychology',1),(4,'Doctor of Nursing Practice',2),(5,'Teaching MAT',3),(6,'Master of Education',3),(7,'MA Heritage management',4),(8,'MS Environmental Science',5),(9,'Master of Hawaiian Language',6),(10,'MA Indigenous Language and Culture',6),(11,'PhD Hawaiian and Indigenous Language',6),(12,'Kahuawaiola Indigenous Teacher Education',6);
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements`
--

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
INSERT INTO `requirements` VALUES (1,'UHH Application Form'),(2,'UHH Application Fee'),(3,'Official Transcripts'),(4,'Personal Statement'),(5,'Resume'),(6,'Letter of recommendation 1'),(7,'Letter of recommendation 2'),(8,'Letter of recommendation 3'),(9,'GRE (Graduate Record Examinations)'),(10,'International Graduate Student Supplemental Information Form'),(11,'TOEFL or IELTS scores'),(12,'School of Nursing Supplemental Application'),(13,'RN license for Hawaii'),(14,'Health clearance'),(15,'MAT supplemental application form'),(16,'Statement: Beliefs about Student Learning'),(17,'Mandatory advising'),(18,'Copy of passport'),(19,'International Graduate Student Supplemental Form'),(20,'Completed Chart'),(21,'40 hours work experience with school-aged children'),(22,'PRAXIS II scores'),(23,'TCBES Sponsorship'),(24,'Undergraduate academic paper '),(25,'Hawaiian language oral/written exam'),(26,'Teaching experience form'),(27,'Sample of previous written work '),(28,'6 credits from linguistic courses');
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'student'),(3,'department');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'contact_email','Contact form email address','The email address that all emails from the contact form will go to.','admin@updivision.com','{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}',1,NULL,NULL),(2,'contact_cc','Contact form CC field','Email adresses separated by comma, to be included as CC in the email sent by the contact form.','','{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}',1,NULL,NULL),(3,'contact_bcc','Contact form BCC field','Email adresses separated by comma, to be included as BCC in the email sent by the contact form.','','{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}',1,NULL,NULL),(4,'motto','Motto','Website motto','this is the value','{\"name\":\"value\",\"label\":\"Value\", \"title\":\"Motto value\" ,\"type\":\"textarea\"}',1,NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_requirement`
--

DROP TABLE IF EXISTS `user_requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_requirement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_requirement`
--

LOCK TABLES `user_requirement` WRITE;
/*!40000 ALTER TABLE `user_requirement` DISABLE KEYS */;
INSERT INTO `user_requirement` VALUES (1,1,1,0),(2,1,2,0),(3,1,3,0),(4,1,4,0),(5,1,6,0),(6,1,7,0),(7,1,8,0),(8,1,9,0),(9,1,10,0),(10,1,11,0),(11,1,5,0),(12,5,1,0),(13,5,2,0),(14,5,3,0),(15,5,4,0),(16,5,5,0),(17,5,6,0),(18,5,7,0),(19,5,8,0),(20,5,9,0),(21,5,10,0),(22,3,1,0),(23,3,2,0),(24,3,3,0),(25,3,4,0),(26,3,5,0),(27,3,6,0),(28,3,7,0),(29,3,8,0),(30,3,9,0),(31,3,10,0),(32,6,1,0),(33,6,2,0),(34,6,3,0),(35,6,4,0),(36,6,5,0),(37,6,6,0),(38,6,7,0),(39,6,8,0),(40,6,9,0),(41,6,10,0),(42,4,1,0),(43,4,2,0),(44,4,3,0),(45,4,4,0),(46,4,5,0),(47,4,6,0),(48,4,7,0),(49,4,8,0),(50,4,9,0),(51,4,10,0),(52,18,1,0),(53,18,2,0),(54,18,3,0),(55,18,4,0),(56,18,5,0),(57,18,6,0),(58,18,7,0),(59,18,8,0),(60,18,9,0),(61,18,10,0);
/*!40000 ALTER TABLE `user_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,1,2),(2,2,2),(3,3,2),(4,4,2),(5,5,2),(6,6,2),(7,16,1),(8,18,2);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Daryl Albano','dalbano96@gmail.com','$2y$10$TV3BrPDOgXwQmwny27G1KOquOyuCkjkYud/k5fD5O/Bbp9mQJpMwW','9I9ylCe1nkE2FjmGtrFYEmbwyvmsMsKioS07GCYtu27Y8xjTyM4kr9SaxyMN','2017-01-29 04:56:02','2017-01-29 04:56:02','3'),(2,'George R.R. Martin','winterishere@gmail.com','$2y$10$StJVW7CJmfh/KWIxsGr0.OKD87VhCntatBteYOJ2zK1VcaNBfo0wW','X38qbkEHuiYx43SufvzqPPPmrjlQG9FOYr5LpIDhSmBzSQ7Y3MEmt5yQLFqF','2017-01-29 11:54:24','2017-01-29 11:54:24','5'),(3,'Jason Todd','robin@gmail.com','$2y$10$W6fTSoSDUqDODgSWnRlDDuLJjiq9mbe4f9fEe/F/K.4J/00ms75de','cIQ3tF8ioIU9otq9eyWDb2tdMEMVTPPuq9QhXIEhqQVTeYMVI26S77vVuPql','2017-01-30 01:51:35','2017-01-30 01:51:35','7'),(4,'The Donald','Trump2017@gmail.com','$2y$10$4lP.oGAWzKEPg6sageDPwu84SdNIoExsfzMwVZXK5XeZoAIkjkxU2',NULL,'2017-02-03 11:34:55','2017-02-03 11:34:55','8'),(5,'Jane Douglas','janed@gmail.com','$2y$10$1CUaoAjYTo7qUFlMzf7Z8.MSJn4P7cM0IvimuIAR1jAi.b3U43IyG','GwNv2jaRcF2GkAFDWlY2thej9RDcuE3YNQ2P5rT2u700MoxG47BOW5PHgZLW','2017-02-02 01:29:11','2017-02-02 01:29:11','11'),(6,'Charleston Victorino','cv9828@hawaii.edu','$2y$10$hSUSrX5LgmkF86PrSDGatORhHMX/eUXw01zqmPBM3qiZ0LkAqKJNy','kHQnyYSHQPHY4MgHO3P4N2esDKjmVtr2MGXJ01xILhZhO3j9bVRwkxtyiRAX','2017-02-01 21:16:25','2017-02-01 21:16:25','8'),(16,'admin','siteAdmin@hawaii.edu','$2y$10$OzuefswDIzbdZhmW6OrJhOkPCXVylnkbxXBk7bTD1aKjQI7VwSgNu','cRNbKTc8CbRkMSIPpDV2GKIJLHOU74A1FrFQmPZM8sJmdf2sOwedDctQsHLu','2017-02-03 06:26:01','2017-02-03 06:26:01',''),(18,'User','user@gmail.com','$2y$10$laikIDMBXesomaWrELadmeLHgSqLaFepk361wchUKc5YFjMqXydW2','I6recSr06L9TuUu7alIc0XSOdON9FON1OPdFd1iDVp0TOmVe3FZbCGGzYkpF','2017-02-03 09:24:36','2017-02-03 09:24:36','3'),(20,'Jacob Allen','jacob@gmail.com','$2y$10$BBVZut./mSdohLPRdvs5X./PDVh//kLU5wxrAUHikWr.I66VwGB0u','gFKcjNgeuRvSdYWF4zjNiojmiWDd0QJG3JstRVEvrSUYf22LQdiyuGh6dY65','2017-02-03 21:35:22','2017-02-03 21:35:22','6'),(21,'Sebastian','seb@gmail.com','$2y$10$/lhktEn9mP6FmRkW8cHucO9DUlM/HkcNRWBskWptV6wWGpAimuTEK','zih2TPUfqnN4Zhvp4XilQB31YgUNPBZjPqqsrK87tZwPjFWkgp0AwJGbfagl','2017-02-03 22:03:36','2017-02-03 22:03:36','4'),(22,'Mia','mia@gmail.com','$2y$10$js5song7qfV6RaZFmqEj5Obgj2MoPcr0BCtuipHaaA0JBPBTP89pa','sAPqiow2Qh6QXfZEKNZtdFiq7hJhf3N1tHZmaP1KGLmZ0djXE6pwzrCpnWMn','2017-02-03 22:21:02','2017-02-03 22:21:02','5'),(23,'Mahealani Jones','amyj@hawaii.edu','$2y$10$hO21BSSUX63uDqEKpG3vU.2nfgLMj5gwB8d1ViZY9mWtEWfhONBWW','F6ZwyJBEQa1p45OGIoxx1ZXmu4By8TV7YoSmktha4OqpeCb5sYQA5NJejvLN','2017-02-03 23:09:28','2017-02-03 23:09:28','12'),(24,'Harry Edwards','hedwardz@hawaii.edu','$2y$10$Gi5T4AWOKfd3uCsBUXoqaei6hvrg7pJVLf/4sKKeMcR/Ec4prL/NC','36cja4vbCFZMAV3uEgfUmkI4lL9cAyWrwu4fac7859JiqdFNH0oVy2XX5JJU','2017-02-03 23:15:30','2017-02-03 23:15:30','3'),(25,'TestUser','someAddr@gmail.com','$2y$10$u8brxkeFzrNoDx1N3iKpkec5E0hNrJ4zBEjvhCnJkA8ioP8WgQ.OS','fko0a9WausGwkUS8yGy7yiuVcjsA0rm0xnRXCTepJSjSE5e4vlMQtd9rmbtZ','2017-02-10 23:24:45','2017-02-10 23:24:45',NULL),(26,'new user','new@gmail.com','$2y$10$DPoGFuua6v9CpPrZP8qNN.176V07DoFUf5vhAPFf7ubn7hfOSlHCC','x8E8uravt8NB3cgPHE3TkCSm4uqHBeS98rFOCX5HEYh1XgJeQlIf5dIXNhEl','2017-02-15 23:36:24','2017-02-15 23:36:24',NULL);
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

-- Dump completed on 2017-02-22 20:50:59
