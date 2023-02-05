-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: scholar
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.22.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin2','admin@mail.com','admin','2022-04-27 21:50:21','2022-04-27 21:50:21',NULL),(2,'admin2','admin@mail.com','admin','2022-07-27 05:38:45','2022-07-27 05:38:45',NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `all_city`
--

DROP TABLE IF EXISTS `all_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_city`
--

LOCK TABLES `all_city` WRITE;
/*!40000 ALTER TABLE `all_city` DISABLE KEYS */;
INSERT INTO `all_city` VALUES (1,'Berlin'),(2,'UK');
/*!40000 ALTER TABLE `all_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `all_fields`
--

DROP TABLE IF EXISTS `all_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_fields` (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_study` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_fields`
--

LOCK TABLES `all_fields` WRITE;
/*!40000 ALTER TABLE `all_fields` DISABLE KEYS */;
INSERT INTO `all_fields` VALUES (1,'IT'),(2,'Art'),(3,'Law'),(4,'Social Science'),(5,'Economics'),(6,'Medicine'),(7,'Sport'),(8,'Engineering'),(9,'Mathematics'),(10,'Natural Science'),(11,'Language'),(12,'Cultural Science'),(13,'Agricultural'),(14,'Nutrition / Forestry'),(15,'MBA / BBA / Management'),(16,'Civil Engineering');
/*!40000 ALTER TABLE `all_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_language`
--

DROP TABLE IF EXISTS `course_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_language` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_language`
--

LOCK TABLES `course_language` WRITE;
/*!40000 ALTER TABLE `course_language` DISABLE KEYS */;
INSERT INTO `course_language` VALUES (1,'German'),(2,'English'),(3,'German and English'),(4,'Other');
/*!40000 ALTER TABLE `course_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_type`
--

DROP TABLE IF EXISTS `course_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_type`
--

LOCK TABLES `course_type` WRITE;
/*!40000 ALTER TABLE `course_type` DISABLE KEYS */;
INSERT INTO `course_type` VALUES (1,'Bachelor Degree'),(2,'Master Degree'),(3,'Ph.D. Degree'),(4,'Short Course'),(5,'Language Course'),(6,'Prep Course'),(7,'Online Course');
/*!40000 ALTER TABLE `course_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institution`
--

DROP TABLE IF EXISTS `institution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institution` (
  `id` int NOT NULL AUTO_INCREMENT,
  `university` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institution`
--

LOCK TABLES `institution` WRITE;
/*!40000 ALTER TABLE `institution` DISABLE KEYS */;
INSERT INTO `institution` VALUES (1,'Technische UniversitÃ¤t Berlin'),(2,'BBSUL'),(3,'Sindh University');
/*!40000 ALTER TABLE `institution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_type` varchar(255) NOT NULL,
  `c_language` varchar(255) NOT NULL,
  `f_study` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `uni_link` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `tu_fee` varchar(255) NOT NULL,
  `c_intake` varchar(255) NOT NULL,
  `application` varchar(255) NOT NULL,
  `lang_req` varchar(255) NOT NULL,
  `ielts_band` varchar(255) DEFAULT NULL,
  `tofel_band` varchar(255) DEFAULT NULL,
  `min_lev` varchar(255) DEFAULT NULL,
  `funding` varchar(255) NOT NULL,
  `app_fees` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `beginning` varchar(255) NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Master Degree','English','Civil Engineering','Berlin','Technische UniversitÃ¤t Berlin','https://www.civilsystems.tu-berlin.de/menue/education/cse_master_program/','4 Semesters','No Tuition Fees','Winter Semester','Uni-Assist','IELTS/TOEFL','7','102-109','Null','20%','No application Fees','','','post_img/th.jpeg','2022-07-03 07:43:17','2022-07-03 07:43:17',NULL,'naya data',1),(2,'Master Degree','German','IT','Berlin','Technische UniversitÃ¤t Berlin','https://www.civilsystems.tu-berlin.de/menue/education/cse_master_program/','4 Semesters','Upto 500 EUR','Summer Semester','University Portal','IELTS/TOEFL','8+','110-114','Null','10%','Upto 25 EUR','','','post_img/th.jpeg','2022-07-03 07:47:40','2022-07-03 07:47:40','2022-07-28 15:33:06','keywords bachelors',0),(4,'Ph.D. Degree','German','Social Science','Berlin','Technische UniversitÃ¤t Berlin','https://www.civilsystems.tu-berlin.de/menue/education/cse_master_program/','4 Semesters','Upto 5000 EUR','Summer Semester','University Portal','IELTS/TOEFL','5','79-93','Null','','No application Fees','','','post_img/th.jpeg','2022-07-03 07:52:34','2022-07-03 07:52:34',NULL,NULL,1),(5,'Bachelor Degree','English','Social Science','Berlin','Technische UniversitÃ¤t Berlin','https://www.civilsystems.tu-berlin.de/menue/education/cse_master_program/','4 Semesters','No Tuition Fees','Summer Semester','University Portal','IELTS/TOEFL','5','35-45','Null','','Upto 25 EUR','07/05/2022','','post_img/th.jpeg','2022-07-05 14:41:49','2022-07-05 14:41:49',NULL,NULL,0),(6,'Master Degree','German and English','Law','Berlin','Technische UniversitÃ¤t Berlin','https://www.civilsystems.tu-berlin.de/menue/education/cse_master_program/','4 Semesters','Upto 500 EUR','Summer Semester','University Portal','IELTS/TOEFL','7.5','110-114','Null','','Upto 25 EUR','2022-07-07','Summer semester','post_img/th.jpeg','2022-07-05 15:48:06','2022-07-05 15:48:06',NULL,NULL,1),(8,'Master Degree','English','Law','UK','Sindh University','bbsul.pk','4 months','Upto 5000 EUR','Summer Semester','Both','English Proficiency Letter','5','Null','B1','10%','Upto 50 EUR','2022-07-30','Summer semester','post_img/Screenshot from 2022-07-27 11-26-54.png','2022-07-27 07:10:05','2022-07-27 07:10:05',NULL,'keywords bachelors bbsul sindh',1),(11,'Prep Course','English','Mathematics','UK','Sindh University','bbsul.pk','4 months','Upto 500 EUR','Trimester & Quartal','Uni-Assist','English Proficiency Letter','Null','Null','Null','10%','Upto 100 EUR','2022-08-06','Summer semester','post_img/Screenshot from 2022-07-26 18-52-19.png','2022-07-27 07:19:15','2022-07-27 07:19:15',NULL,'keywords aaa bbb ccc',1),(13,'Online Course','Other','Cultural Science','UK','BBSUL','bbsul.pk','4 months','Upto 10000 EUR','Trimester & Quartal','Both','German Language','Null','Null','A2','50%','Upto 25 EUR','2022-07-01','Summer semester','post_img/Screenshot from 2022-07-26 14-37-27.png','2022-07-27 07:22:31','2022-07-27 07:22:31',NULL,'keywords ddd eee fff',1),(14,'Online Course','Other','IT','UK','Sindh University','bbsul.pk','4 months','No Tuition Fees','Summer Semester','University Portal','Without IELTS/TOEFL','Null','Null','Null','10%','No application Fees','2022-07-30','Summer semester','post_img/Screenshot from 2022-07-27 10-28-33.png','2022-07-28 10:38:27','2022-07-28 10:38:27',NULL,'summer sindh online uk',1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-28 15:41:45
