mysqldump: [Warning] Using a password on the command line interface can be insecure.
-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: tltleavedb
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `actions_history`
--

DROP TABLE IF EXISTS `actions_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actions_history` (
  `id_action` int NOT NULL AUTO_INCREMENT,
  `action_type` varchar(30) NOT NULL,
  `action_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actions_history`
--

LOCK TABLES `actions_history` WRITE;
/*!40000 ALTER TABLE `actions_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `actions_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `id_employee` int NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `FK_admins_id_employee` (`id_employee`),
  CONSTRAINT `FK_admins_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_statistics`
--

DROP TABLE IF EXISTS `leave_statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leave_statistics` (
  `id_statistic` int NOT NULL AUTO_INCREMENT,
  `total_number_leave` float NOT NULL,
  `number_leave_taken` float NOT NULL,
  `number_leave_remaining` float NOT NULL,
  `total_number_rtt` float NOT NULL,
  `number_rtt_remaining` float NOT NULL,
  `number_rtt_taken` float NOT NULL,
  `id_employee` int NOT NULL,
  PRIMARY KEY (`id_statistic`),
  KEY `FK_leave_statistics_id_employee` (`id_employee`),
  CONSTRAINT `FK_leave_statistics_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_statistics`
--

LOCK TABLES `leave_statistics` WRITE;
/*!40000 ALTER TABLE `leave_statistics` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave_statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_types`
--

DROP TABLE IF EXISTS `leave_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leave_types` (
  `id_leave_type` int NOT NULL AUTO_INCREMENT,
  `leave_type_name` varchar(30) NOT NULL,
  `number_per_year` float DEFAULT NULL,
  PRIMARY KEY (`id_leave_type`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_types`
--

LOCK TABLES `leave_types` WRITE;
/*!40000 ALTER TABLE `leave_types` DISABLE KEYS */;
INSERT INTO `leave_types` VALUES (27,'Cong├®s pay├®s',25),(28,'Cong├® maladie',NULL),(29,'RTT',12),(30,'Cong├® sans solde',NULL),(31,'Cong├® maternit├®',112),(32,'Cong├® paternit├®',28),(33,'Cong├® parentale',365),(34,'Cong├® enfant malade',3),(35,'Mariage ou Pacs',5),(36,'Cong├® individuel de formation',365),(37,'Cong├® D├¿c├®s',7),(38,'Cong├® de fractionnement',2),(39,'Cong├® sabbatique',365);
/*!40000 ALTER TABLE `leave_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaves` (
  `id_leave` int NOT NULL AUTO_INCREMENT,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_status` varchar(20) NOT NULL,
  `id_employee` int NOT NULL,
  `id_leave_type` int NOT NULL,
  `commentary` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_leave`),
  KEY `FK_leaves_id_employee` (`id_employee`),
  KEY `FK_leaves_id_leave_type` (`id_leave_type`),
  CONSTRAINT `FK_leaves_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`),
  CONSTRAINT `FK_leaves_id_leave_type` FOREIGN KEY (`id_leave_type`) REFERENCES `leave_types` (`id_leave_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaves`
--

LOCK TABLES `leaves` WRITE;
/*!40000 ALTER TABLE `leaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owns`
--

DROP TABLE IF EXISTS `owns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `owns` (
  `id_employee` int NOT NULL,
  `id_right` int NOT NULL,
  PRIMARY KEY (`id_employee`,`id_right`),
  KEY `FK_owns_id_right` (`id_right`),
  CONSTRAINT `FK_owns_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`),
  CONSTRAINT `FK_owns_id_right` FOREIGN KEY (`id_right`) REFERENCES `rights` (`id_right`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owns`
--

LOCK TABLES `owns` WRITE;
/*!40000 ALTER TABLE `owns` DISABLE KEYS */;
/*!40000 ALTER TABLE `owns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realize`
--

DROP TABLE IF EXISTS `realize`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `realize` (
  `id_employee` int NOT NULL,
  `id_action` int NOT NULL,
  PRIMARY KEY (`id_employee`,`id_action`),
  KEY `FK_realize_id_action` (`id_action`),
  CONSTRAINT `FK_realize_id_action` FOREIGN KEY (`id_action`) REFERENCES `actions_history` (`id_action`),
  CONSTRAINT `FK_realize_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realize`
--

LOCK TABLES `realize` WRITE;
/*!40000 ALTER TABLE `realize` DISABLE KEYS */;
/*!40000 ALTER TABLE `realize` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rights` (
  `id_right` int NOT NULL AUTO_INCREMENT,
  `right_type` varchar(40) NOT NULL,
  PRIMARY KEY (`id_right`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rights`
--

LOCK TABLES `rights` WRITE;
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id_team` int NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) NOT NULL,
  `team_responsible` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_employee` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `firstname` varchar(40) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `situation` varchar(30) DEFAULT NULL,
  `child` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_address` varchar(60) DEFAULT NULL,
  `zip_code` varchar(15) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `user_mail` varchar(60) DEFAULT NULL,
  `user_profile` varchar(30) NOT NULL,
  `user_role` varchar(80) DEFAULT NULL,
  `employement_status` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_admin` int DEFAULT NULL,
  `id_team` int DEFAULT NULL,
  PRIMARY KEY (`id_employee`),
  KEY `FK_users_id_admin` (`id_admin`),
  KEY `FK_users_id_team` (`id_team`),
  CONSTRAINT `FK_users_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  CONSTRAINT `FK_users_id_team` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (20,'Oliveira','Fredson','2024-06-02','','','','','95210','SAINT-GRATIEN','france','0662526435','o.fredson@yahoo.fr','Administrateur','D├®veloppeur Web Junior','','2024-06-02','$2y$10$3o86ysrRGtuyLDXnNwI6/uF6Bj/LTi19B3NrnKva/qaicYYgUKEma',NULL,NULL);
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

-- Dump completed on 2024-06-05 10:36:07
