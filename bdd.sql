-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ape
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actualites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actualites`
--

LOCK TABLES `actualites` WRITE;
/*!40000 ALTER TABLE `actualites` DISABLE KEYS */;
INSERT INTO `actualites` VALUES (1,'Réalisation de boîte métal et sac marin','2021-10-13 00:00:00','Les enfants vont participer à la réalisation d\'une boîte en métal et d\'un sac marin sur lesquels seront imprimés le dessin et le prénom de votre enfant ainsi que ceux de ses camarades.',NULL,'3b13946063ff8bef83d2cd2ce6ba2e6dccef62f7.jpg');
/*!40000 ALTER TABLE `actualites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'PS'),(2,'PS / MS'),(3,'MS'),(4,'MS / CP'),(5,'CP'),(6,'CP / CE1'),(7,'CE1'),(8,'CE1 / CE2'),(9,'CE2'),(10,'CE2 / CM1'),(11,'CM1'),(12,'CM1 / CM2'),(13,'CM2'),(15,'GS / CP'),(16,'GS');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conseils_ecole`
--

DROP TABLE IF EXISTS `conseils_ecole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conseils_ecole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conseils_ecole`
--

LOCK TABLES `conseils_ecole` WRITE;
/*!40000 ALTER TABLE `conseils_ecole` DISABLE KEYS */;
/*!40000 ALTER TABLE `conseils_ecole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20211025122847','2021-10-25 14:29:47',94),('DoctrineMigrations\\Version20211025123324','2021-10-25 14:33:44',44),('DoctrineMigrations\\Version20211025123505','2021-10-25 14:35:25',43),('DoctrineMigrations\\Version20211025123611','2021-10-25 14:36:28',42),('DoctrineMigrations\\Version20211025124000','2021-10-25 14:40:11',117),('DoctrineMigrations\\Version20211025124124','2021-10-25 14:41:34',40),('DoctrineMigrations\\Version20211025124240','2021-10-25 14:42:51',44),('DoctrineMigrations\\Version20211025124332','2021-10-25 14:43:45',42),('DoctrineMigrations\\Version20211025124438','2021-10-25 14:44:50',42);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonctions_parents`
--

DROP TABLE IF EXISTS `fonctions_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fonctions_parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonctions_parents`
--

LOCK TABLES `fonctions_parents` WRITE;
/*!40000 ALTER TABLE `fonctions_parents` DISABLE KEYS */;
INSERT INTO `fonctions_parents` VALUES (1,'Titulaire'),(2,'Suppléant');
/*!40000 ALTER TABLE `fonctions_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_diapo`
--

DROP TABLE IF EXISTS `images_diapo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_diapo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_diapo`
--

LOCK TABLES `images_diapo` WRITE;
/*!40000 ALTER TABLE `images_diapo` DISABLE KEYS */;
INSERT INTO `images_diapo` VALUES (1,'image1','b74756721635e66283364eef851a466eaa8c5c6e.jpg'),(2,'image2','7de0e67a604a7de18ed15640da54cec6635fbd38.jpg');
/*!40000 ALTER TABLE `images_diapo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organigramme`
--

DROP TABLE IF EXISTS `organigramme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organigramme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organigramme`
--

LOCK TABLES `organigramme` WRITE;
/*!40000 ALTER TABLE `organigramme` DISABLE KEYS */;
/*!40000 ALTER TABLE `organigramme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parentsdelegues`
--

DROP TABLE IF EXISTS `parentsdelegues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parentsdelegues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fonction_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_18AC227557889920` (`fonction_id`),
  KEY `IDX_18AC22758F5EA509` (`classe_id`),
  CONSTRAINT `FK_18AC227557889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonctions_parents` (`id`),
  CONSTRAINT `FK_18AC22758F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parentsdelegues`
--

LOCK TABLES `parentsdelegues` WRITE;
/*!40000 ALTER TABLE `parentsdelegues` DISABLE KEYS */;
INSERT INTO `parentsdelegues` VALUES (1,1,2,'JIMENEZ','Cathy','d6656c2ef16410276af07522d9f045424327cb57.jpg'),(2,2,2,'PERES','Emily','89d531c05637e7991195502c1f8a220b5af2d855.jpg'),(3,1,15,'SIEGEL POURCET','Karine','0a1ddd1fc874ac8538abf3bafa5c4ca91079a304.jpg'),(4,2,15,'PEROCHEAU','Caroline','4f84fb985cad457c0689e13ebef8c7a009c35cf9.jpg'),(5,1,6,'YAMADA','Anne','fd1f7ea10925175384fef05e62de5f6747ca5115.jpg'),(6,2,6,'FAURE','Emilie','125de9617f4b6514092ba065251d8d9d7f0aab1b.jpg'),(7,1,10,'SCAILLIER','Laure','1956ba3301315ee1e2f2547056885570fcbb9c2d.jpg'),(8,2,10,'ROUFFIAC','Carine','8d5cc1e65a3779d3ca648f5a54489379d1f50a5f.jpg'),(9,1,12,'SAINT OMER','Emilie','957f3eb02134a843fd02622613d4b049a7a0e75f.jpg'),(10,2,12,'RAMIREZ','Cendra','d1b924d456449229bbcc97d665264f5511b39220.jpg');
/*!40000 ALTER TABLE `parentsdelegues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test@test.fr','[]','$2y$13$D/hmWMXfBZ8lyg7BWlgA2OqUeSrMgJ0Dn9mR5EwlpNliaulCPEzzy'),(2,'admin@admin.fr','[\"ROLE_ADMIN\"]','$2y$13$saz8sbg74TSJbD1PcjyWXOxZs/chBVjFGhsHRjOl0.yqlCn1Flu2e'),(3,'superadmin@superadmin.fr','[\"ROLE_SUPERADMIN\"]','$2y$13$tZH5N.wsM2RdY5tJ8fj4Vea4hPiiaeXlLu2j566mEcEE37y9lZp8G');
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

-- Dump completed on 2021-10-29 15:59:09
