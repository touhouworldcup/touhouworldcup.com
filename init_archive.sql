-- MySQL dump 10.19  Distrib 10.3.39-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: twc_archive
-- ------------------------------------------------------
-- Server version	10.3.39-MariaDB-0ubuntu0.20.04.2

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
-- Table structure for table `Results 2020`
--

DROP TABLE IF EXISTS `Results 2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Results 2020` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `P1_Shottype` varchar(45) DEFAULT NULL,
  `P1_Result` varchar(45) DEFAULT NULL,
  `P1_TWCScore` decimal(10,4) DEFAULT 0.0000,
  `P2_TWCScore` decimal(10,4) DEFAULT 0.0000,
  `P3_TWCScore` decimal(10,4) DEFAULT 0.0000,
  `P3_Shottype` varchar(45) DEFAULT NULL,
  `P2_Shottype` varchar(45) DEFAULT NULL,
  `P2_Result` varchar(45) DEFAULT NULL,
  `P3_Result` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Results 2020`
--

LOCK TABLES `Results 2020` WRITE;
/*!40000 ALTER TABLE `Results 2020` DISABLE KEYS */;
INSERT INTO `Results 2020` VALUES (1,'2020-02-01 09:30:00','2024-02-21 19:07:17','2024-02-21 19:08:13','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.0000,0.0000,3.7500,'Reimu',NULL,'DNF','1M'),(2,'2020-02-01 12:00:00','2024-02-21 19:07:18','2024-02-21 19:07:25','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','1M',4.5000,1.1250,1.1250,'ReimuB','ReimuB','3M','3M'),(3,'2020-02-02 05:00:00','2024-02-21 19:07:18','2024-02-21 19:08:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.0000,0.0000,0.0000,'ReimuB','ReimuB','2178580410','DNF'),(4,'2020-02-02 13:30:00','2024-02-21 19:07:18','2024-02-21 19:07:25','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaB','LNNN',17.0000,7.0000,2.0000,'SakuyaB','MarisaA','2M','2M'),(5,'2020-02-08 05:00:00','2024-02-21 19:07:19','2024-02-21 19:08:01','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','5M',0.0000,1.3750,5.5000,'MarisaC','MarisaB','3M','2M'),(6,'2020-02-08 14:00:00','2024-02-21 19:07:19','2024-02-21 19:07:25','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Marisa','3212839820',5.3960,3.5510,20.6100,'Reimu','Marisa','3067739450','3110930800'),(7,'2020-02-09 12:00:00','2024-02-21 19:07:19','2024-02-21 19:08:02','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.0000,8.0000,3.7500,'MarisaSummer','ReimuSpring','2M','3M'),(8,'2020-02-15 12:00:00','2024-02-21 19:07:19','2024-02-21 19:07:26','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','3M',2.5000,1.8750,3.7500,'MarisaB','MarisaB','4M','3M'),(9,'2020-02-15 14:00:00','2024-02-21 19:07:19','2024-02-21 19:08:10','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','542026840',6.3920,0.0000,46.0920,'ReimuB',NULL,NULL,'662371090'),(10,'2020-02-16 06:00:00','2024-02-21 19:07:19','2024-02-21 19:07:26','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','5M',2.6563,2.0000,0.1250,'ReimuA','SakuyaA','1M','5M'),(11,'2020-02-16 08:00:00','2024-02-21 19:07:19','2024-02-21 19:08:04','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.0000,5.9270,20.4640,'ReimuA','ReimuA','4148165390','4589284310'),(12,'2020-02-16 11:30:00','2024-02-21 19:07:19','2024-02-21 19:08:03','usxycrwh4v0r0t28','usxycrwh4v0r0t28','AyaSpring','3204797590',0.0000,16.5700,21.5690,'AyaAutumn','ReimuSummer','3459297690','8244370010'),(13,'2020-02-22 06:30:00','2024-02-21 19:07:20','2024-02-21 19:08:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','4M',1.2500,0.0000,2.5000,'ReimuA',NULL,'DNF','3M'),(14,'2020-02-22 12:00:00','2024-02-21 19:07:20','2024-02-21 19:08:04','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'DNF',0.0000,2.2500,12.5000,'Sanae','Reimu','2M','1M'),(15,'2020-02-22 14:00:00','2024-02-21 19:07:20','2024-02-21 19:08:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','A1','100210660',10.1480,0.0000,5.5700,'A1',NULL,NULL,'91159900'),(16,'2020-02-23 10:00:00','2024-02-21 19:07:20','2024-02-21 19:08:05','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.0000,5.9940,4.5150,'MarisaB','MarisaB','1685995620','1623599560'),(17,'2020-02-23 06:30:00','2024-02-21 19:07:20','2024-02-21 19:07:27','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SanaeB','2609100010',9.2360,4.7230,28.4340,'SanaeB','MarisaA','2230548410','3173361380'),(18,'2020-02-23 12:00:00','2024-02-21 19:07:20','2024-02-21 19:08:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuOtter','6253568980',0.0000,5.5800,0.0000,NULL,'ReimuOtter','7770047510',NULL),(19,'2020-02-29 04:00:00','2024-02-21 19:07:21','2024-02-21 19:08:08','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SakuyaB','2855251970',12.2770,0.0000,46.5170,'SakuyaB',NULL,NULL,'3360383840'),(20,'2020-03-05 07:00:00','2024-02-21 19:07:21','2024-02-21 19:08:08','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SakuyaRemilia','5421994200',5.0520,0.0000,21.5420,'YoumuYuyuko','YoumuYuyuko','4390440540','6125161870'),(21,'2020-03-07 11:00:00','2024-02-21 19:07:21','2024-02-21 19:07:27','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuYukari','3M',0.6250,1.2500,1.6250,'Marisa','Youmu','2M','3M'),(22,'2020-03-07 13:00:00','2024-02-21 19:07:21','2024-02-21 19:07:27','usxycrwh4v0r0t28','usxycrwh4v0r0t28','YoumuWolf','1M',4.0000,13.0000,0.5000,'YoumuWolf','ReimuWolf','LNNNN','4M'),(23,'2020-03-15 12:00:00','2024-02-21 19:07:22','2024-02-21 19:08:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Sanae','Normal Stage 6',0.0000,0.0000,0.0000,'Sanae','Reisen','Easy 1cc','Normal Stage 6');
/*!40000 ALTER TABLE `Results 2020` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Results 2021`
--

DROP TABLE IF EXISTS `Results 2021`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Results 2021` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `P1_Result` varchar(45) DEFAULT NULL,
  `P2_Result` varchar(45) DEFAULT NULL,
  `P1_Shottype` varchar(45) DEFAULT NULL,
  `P2_Shottype` varchar(45) DEFAULT NULL,
  `P3_Shottype` varchar(45) DEFAULT NULL,
  `P3_Result` varchar(45) DEFAULT NULL,
  `P1_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P2_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P3_TWCScore` decimal(10,3) DEFAULT 0.000,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Results 2021`
--

LOCK TABLES `Results 2021` WRITE;
/*!40000 ALTER TABLE `Results 2021` DISABLE KEYS */;
INSERT INTO `Results 2021` VALUES (1,'2021-03-20 07:00:00','2024-02-21 19:10:25','2024-02-21 19:11:11','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3M','1M','MarisaA','ReimuB','ReimuB','2M',2.750,4.500,2.250),(2,'2021-03-20 11:00:00','2024-02-21 19:10:26','2024-02-21 19:11:32','usxycrwh4v0r0t28','usxycrwh4v0r0t28','11982030340','DNF','MarisaOtter',NULL,'YoumuOtter','10480078670',147.700,0.000,37.040),(3,'2021-03-27 12:30:00','2024-02-21 19:10:26','2024-02-21 19:11:11','usxycrwh4v0r0t28','usxycrwh4v0r0t28','LNNN','1M','Reimu','Reimu','Reimu','2M',9.000,4.500,2.250),(4,'2021-03-27 15:00:00','2024-02-21 19:10:26','2024-02-21 19:11:12','usxycrwh4v0r0t28','usxycrwh4v0r0t28','4M','1M','MarisaB','MarisaB','ReimuB','2M',1.875,15.000,5.000),(5,'2021-03-28 06:00:00','2024-02-21 19:10:26','2024-02-21 19:11:31','usxycrwh4v0r0t28','usxycrwh4v0r0t28','302918150',NULL,'Youmu',NULL,'Reisen','216383650',17.420,0.000,4.110),(6,'2021-03-28 14:00:00','2024-02-21 19:10:26','2024-02-21 19:11:32','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3699820560',NULL,'SakuyaB',NULL,'SakuyaB','3583864750',115.400,0.000,83.200),(7,'2021-04-03 12:00:00','2024-02-21 19:10:26','2024-02-21 19:11:12','usxycrwh4v0r0t28','usxycrwh4v0r0t28','2M','2M','YoumuEagle','ReimuOtter','YoumuEagle','2M',12.500,6.250,12.500),(8,'2021-04-03 14:30:00','2024-02-21 19:10:26','2024-02-21 19:11:36','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3M','DNF','ReimuA',NULL,'ReimuA','4M',2.250,0.000,1.125),(9,'2021-04-04 08:00:00','2024-02-21 19:10:27','2024-02-21 19:11:12','usxycrwh4v0r0t28','usxycrwh4v0r0t28','1M','2M','SakuyaA','MarisaA','MarisaB','2M',5.000,3.500,4.250),(10,'2021-04-04 12:00:00','2024-02-21 19:10:27','2024-02-21 19:11:36','usxycrwh4v0r0t28','usxycrwh4v0r0t28','6131525770',NULL,'YoumuYuyuko',NULL,'YoumuYuyuko','6284786720',38.560,0.000,51.770),(11,'2021-04-10 12:00:00','2024-02-21 19:10:27','2024-02-21 19:11:12','usxycrwh4v0r0t28','usxycrwh4v0r0t28','634602280','610991960','Marisa','Marisa','Marisa','572087210',53.710,13.580,3.330),(12,'2021-04-10 13:30:00','2024-02-21 19:10:27','2024-02-21 19:11:13','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3M','1M','ReimuA','ReimuB','ReimuA','1M',1.125,5.000,4.500),(13,'2021-04-11 05:00:00','2024-02-21 19:10:27','2024-02-21 19:11:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'2139453170',NULL,'ReimuB','ReimuB','2110083290',0.000,7.660,4.490),(14,'2021-04-11 12:00:00','2024-02-21 19:10:27','2024-02-21 19:11:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','614793150',NULL,'ReimuB',NULL,'ReimuB','674556160',24.630,0.000,54.320),(15,'2021-04-17 07:00:00','2024-02-21 19:10:27','2024-02-21 19:11:39','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'116930170',NULL,'A2','A2','113769500',0.000,18.380,13.780),(16,'2021-04-17 14:00:00','2024-02-21 19:10:28','2024-02-21 19:11:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','DNF','3661565100',NULL,'Marisa','Sanae','619222270',0.000,31.430,0.000),(17,'2021-04-18 06:30:00','2024-02-21 19:10:28','2024-02-21 19:11:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','833419540','1128861500','MarisaB','MarisaB','MarisaB','1001187300',0.000,0.000,0.000),(18,'2021-04-18 08:00:00','2024-02-21 19:10:28','2024-02-21 19:11:18','usxycrwh4v0r0t28','usxycrwh4v0r0t28','DNF','3022016630',NULL,'SanaeB','SanaeB','3040386710',0.000,31.670,33.120),(19,'2021-04-24 11:30:00','2024-02-21 19:10:28','2024-02-21 19:11:19','usxycrwh4v0r0t28','usxycrwh4v0r0t28','5039634070','5376376350','AyaSpring','AyaWinter','MarisaAutumn','8641472550',0.000,27.870,52.940),(20,'2021-04-24 14:00:00','2024-02-21 19:10:28','2024-02-21 19:11:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28','2M','LNNFS','Marisa','Yukari','ReimuYukari','2M',3.250,24.000,1.250),(21,'2021-04-25 07:00:00','2024-02-21 19:10:28','2024-02-21 19:11:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3M','2M','ReimuSummer','MarisaSpring','MarisaSummer','1M',4.250,8.500,17.000),(22,'2021-04-25 12:00:00','2024-02-21 19:10:28','2024-02-21 19:11:37','usxycrwh4v0r0t28','usxycrwh4v0r0t28','495470610',NULL,'ReimuB',NULL,'MarisaB','603325000',3.580,0.000,12.490),(23,'2021-05-01 12:00:00','2024-02-21 19:10:29','2024-02-21 19:11:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3M 5G','2M 8G','A1','A1','A1','2M 7G',4.500,10.000,8.500),(24,'2021-05-01 13:30:00','2024-02-21 19:10:29','2024-02-21 19:11:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28','3930781940','4206864990','ReimuA','ReimuA','MarisaB','4134003270',4.840,7.990,16.350),(25,'2021-05-02 07:00:00','2024-02-21 19:10:29','2024-02-21 19:11:20','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'2245150090',NULL,'SakuyaB','SakuyaB','1875974160',0.000,41.380,4.680),(26,'2021-05-02 12:00:00','2024-02-21 19:10:29','2024-02-21 19:10:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','2443233730',NULL,'Youmu',NULL,'Marisa','2639609600',3.740,0.000,35.980),(27,'2021-05-08 07:00:00','2024-02-21 19:10:29','2024-02-21 19:10:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','4M','3M','SakuyaB','ReimuB','ReimuB','3M',6.250,6.250,6.250),(28,'2021-05-08 12:00:00','2024-02-21 19:10:30','2024-02-21 19:10:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','4M','4M','Reimu','Reisen','Reimu','4M',1.875,3.750,1.875),(29,'2021-05-09 11:00:00','2024-02-21 19:10:30','2024-02-21 19:10:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','5M','4M','Reimu','Sanae','Reimu','3M',0.630,1.250,2.500),(30,'2021-05-09 13:30:00','2024-02-21 19:10:31','2024-02-21 19:10:57','usxycrwh4v0r0t28','usxycrwh4v0r0t28','109M','44M',NULL,NULL,NULL,'24M',0.000,0.000,0.000);
/*!40000 ALTER TABLE `Results 2021` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Results 2022`
--

DROP TABLE IF EXISTS `Results 2022`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Results 2022` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `P1_Shottype` varchar(45) DEFAULT NULL,
  `P1_Result` varchar(45) DEFAULT NULL,
  `P1_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P2_Shottype` varchar(45) DEFAULT NULL,
  `P2_Result` varchar(45) DEFAULT NULL,
  `P2_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P3_Shottype` varchar(45) DEFAULT NULL,
  `P3_Result` varchar(45) DEFAULT NULL,
  `P3_TWCScore` decimal(10,3) DEFAULT 0.000,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Results 2022`
--

LOCK TABLES `Results 2022` WRITE;
/*!40000 ALTER TABLE `Results 2022` DISABLE KEYS */;
INSERT INTO `Results 2022` VALUES (1,'2022-05-14 11:00:00','2024-02-21 19:13:04','2024-02-21 19:13:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','1061815670',53.928,'ReimuA','813890120',3.868,'MarisaA','46614480',0.000),(2,'2022-05-15 11:00:00','2024-02-21 19:13:05','2024-02-21 19:13:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reimu','3M',1.125,'Sanae','2M',6.250,'Reimu','LNNN',9.000),(3,'2022-05-19 12:00:00','2024-02-21 19:13:05','2024-02-21 19:13:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Cirno','361489430',14.253,'Eiki','450680720',15.560,'Reisen','530468900',24.513),(4,'2022-05-21 14:00:00','2024-02-21 19:13:06','2024-02-21 19:13:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','3M',1.125,'ReimuB','3M',1.125,'MarisaA','4M',1.375),(5,'2022-05-22 11:30:00','2024-02-21 19:13:06','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','AyaAutumn','2M',4.000,'CirnoAutumn','4M',0.813,'MarisaSummer','1M',17.000),(6,'2022-05-28 09:45:00','2024-02-21 19:13:06','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','1M',13.000,'ReimuA','1M',9.000,NULL,'DQ',-1000.000),(7,'2022-05-28 12:00:00','2024-02-21 19:13:06','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','2M',2.250,'ReimuA','3M',1.125,'MarisaA','2M',2.750),(8,'2022-05-29 11:00:00','2024-02-21 19:13:07','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reimu','3M',3.750,'Marisa','3M',10.000,'Sanae','3M',7.500),(9,'2022-06-04 11:00:00','2024-02-21 19:13:07','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Youmu','4089558860',83.262,'Youmu','3655516850',15.978,'Marisa','3171369010',9.504),(10,'2022-06-04 13:15:00','2024-02-21 19:13:07','2024-02-21 19:13:54','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Marisa','651109940',151.450,'Marisa','646357900',112.047,NULL,NULL,0.000),(11,'2022-06-05 12:00:00','2024-02-21 19:13:07','2024-02-21 19:13:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','626363100',28.608,'ReimuB','716796080',96.782,'ReimuB','610617650',23.346),(12,'2022-06-05 14:30:00','2024-02-21 19:13:07','2024-02-21 19:14:06','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'YoumuWolf','7812678310',75.951,'MarisaOtter','10529605790',26.063),(13,'2022-06-11 14:00:00','2024-02-21 19:13:08','2024-02-21 19:13:54','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','3310185500',61.635,NULL,NULL,0.000,'ReimuB','3497343850',113.558),(14,'2022-06-12 07:00:00','2024-02-21 19:13:09','2024-02-21 19:13:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaB','1189164890',43.823,NULL,'DQ',-1000.000,'MarisaB','1178842600',36.353),(15,'2022-06-12 11:00:00','2024-02-21 19:13:09','2024-02-21 19:14:06','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'ReimuB','1471784220',62.005,'ReimuB','1285978180',4.680),(16,'2022-06-18 02:00:00','2024-02-21 19:13:10','2024-02-21 19:13:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SakuyaRemilia','6523499570',58.475,'YoumuYuyuko','6526854620',82.761,'YoumuYuyuko','6323697440',55.812),(17,'2022-06-19 13:00:00','2024-02-21 19:13:10','2024-02-21 19:13:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','CirnoSummer','4253887640',94.142,'AyaAutumn','7716511190',13.223,'CirnoWinter','6156135980',87.799),(18,'2022-06-25 12:00:00','2024-02-21 19:13:10','2024-02-21 19:14:04','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'SakuyaB','2202504490',30.525,'SakuyaB','2303249290',63.268),(19,'2022-06-26 07:00:00','2024-02-21 19:13:10','2024-02-21 19:13:53','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaC','2204090850',31.164,NULL,'DNF',0.000,'ReimuB','2104296630',4.187),(20,'2022-06-26 12:00:00','2024-02-21 19:13:10','2024-02-21 19:13:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','YoumuYuyuko','3M',2.750,'YoumuYuyuko','3M',2.750,'YoumuYuyuko','1M',11.000),(21,'2022-07-02 12:00:00','2024-02-21 19:13:10','2024-02-21 19:13:50','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','611439430',36.295,'ReimuB','520842380',6.142,'MarisaA','587077600',30.267),(22,'2022-07-02 14:30:00','2024-02-21 19:13:11','2024-02-21 19:13:55','usxycrwh4v0r0t28','usxycrwh4v0r0t28','A1','3M 6G',6.000,'A1','1M 7G',9.500,NULL,NULL,0.000),(23,'2022-07-03 12:00:00','2024-02-21 19:13:11','2024-02-21 19:13:53','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuOtter','0M',25.000,NULL,NULL,0.000,'YoumuEagle','3M',2.250),(24,'2022-07-03 14:00:00','2024-02-21 19:13:11','2024-02-21 19:14:05','usxycrwh4v0r0t28','usxycrwh4v0r0t28','C1','102129190',37.708,NULL,NULL,0.000,'A1','109881940',47.024),(25,'2022-07-09 08:45:00','2024-02-21 19:13:11','2024-02-21 19:14:04','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','2M',12.500,NULL,'DNF',0.000,'MarisaA','5M',4.688),(26,'2022-07-09 11:00:00','2024-02-21 19:13:11','2024-02-21 19:13:28','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','5M',0.625,'ReimuB','1M',10.000,'ReimuB','2M',5.000),(27,'2022-07-09 13:00:00','2024-02-21 19:13:12','2024-02-21 19:13:28','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','2M',2.250,'ReimuB','2M',4.250,'MarisaB','3M',2.125),(28,'2022-07-10 06:00:00','2024-02-21 19:13:15','2024-02-21 19:13:28','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaA','3087296280',48.711,'MarisaA','3184350120',62.812,'SanaeB','2883802480',22.682),(29,'2022-07-10 13:15:00','2024-02-21 19:13:15','2024-02-21 19:13:28','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Sanae','1M',11.000,'Reimu','3M',2.250,'Reimu','2M',5.500),(30,'2022-07-16 10:00:00','2024-02-21 19:13:15','2024-02-21 19:13:29','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reisen','3050762730',28.274,'Reisen','3663058990',194.611,'Reisen','2347549880',4.066),(31,'2022-07-16 14:00:00','2024-02-21 19:13:16','2024-02-21 19:13:38','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'10M',0.000,NULL,'57M',0.000,NULL,'102M',0.000),(32,'2022-07-17 13:00:00','2024-02-21 19:13:16','2024-02-21 19:13:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'17',0.000,NULL,'17',0.000,NULL,NULL,0.000);
/*!40000 ALTER TABLE `Results 2022` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Results 2023`
--

DROP TABLE IF EXISTS `Results 2023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Results 2023` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `P1_Shottype` varchar(45) DEFAULT NULL,
  `P1_Result` varchar(45) DEFAULT NULL,
  `P1_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P2_Shottype` varchar(45) DEFAULT NULL,
  `P2_Result` varchar(45) DEFAULT NULL,
  `P2_TWCScore` decimal(10,3) DEFAULT 0.000,
  `P3_Shottype` varchar(45) DEFAULT NULL,
  `P3_Result` varchar(45) DEFAULT NULL,
  `P3_TWCScore` decimal(10,3) DEFAULT 0.000,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Results 2023`
--

LOCK TABLES `Results 2023` WRITE;
/*!40000 ALTER TABLE `Results 2023` DISABLE KEYS */;
INSERT INTO `Results 2023` VALUES (1,'2023-05-27 12:00:00','2024-02-21 19:15:25','2024-02-21 19:15:54','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reimu','2M',8.000,NULL,NULL,0.000,'Reisen','2M',20.000),(2,'2023-05-27 15:00:00','2024-02-21 19:15:25','2024-02-21 19:15:45','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Sanae','2M',6.250,'Youmu','1M',4.000,'Reimu','LNNNFS',12.000),(3,'2023-05-28 02:00:00','2024-02-21 19:15:26','2024-02-21 19:15:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'MarisaOtter','2M',4.750,'YoumuEagle','LNNNN',18.000),(4,'2023-06-03 11:00:00','2024-02-21 19:15:26','2024-02-21 19:15:45','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Yukari','3M',2.875,'Yukari','1M',11.500,'YoumuYuyuko','1M',10.000),(5,'2023-06-04 12:00:00','2024-02-21 19:15:26','2024-02-21 19:15:56','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuSummer','4205156260',85.557,'AyaAutumn','9390055030',88.073,NULL,NULL,0.000),(6,'2023-06-10 05:00:00','2024-02-21 19:15:26','2024-02-21 19:15:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaA','3232985020',59.117,'MarisaA','1751461750',3.955,'SanaeA','3022105590',58.963),(7,'2023-06-11 11:00:00','2024-02-21 19:15:26','2024-02-21 19:15:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','3M',1.125,'ReimuB','LNN',9.000,'ReimuB','3M',1.125),(8,'2023-06-17 12:00:00','2024-02-21 19:15:27','2024-02-21 19:15:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SakuyaB','2278993730',29.670,'ReimuA','1722978370',91.010,'SakuyaA','1397859870',5.884),(9,'2023-06-18 13:30:00','2024-02-21 19:15:27','2024-02-21 19:15:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','684018390',61.768,'ReimuB','644700670',36.407,'MarisaB','477688980',4.651),(10,'2023-06-24 10:00:00','2024-02-21 19:15:27','2024-02-21 19:15:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'Tewi','112911390',5.199,'Medicine','126032680',3.408),(11,'2023-06-24 11:30:00','2024-02-21 19:15:27','2024-02-21 19:15:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','870794810',2.887,'ReimuA','1108249020',31.554,'MarisaA','1102766980',33.676),(12,'2023-06-25 02:00:00','2024-02-21 19:15:27','2024-02-21 19:15:52','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SakuyaB','3390116230',46.484,NULL,NULL,0.000,'SakuyaB','3590580360',75.996),(13,'2023-06-25 12:00:00','2024-02-21 19:15:27','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaC','2202233910',29.600,'ReimuB','2190683680',35.826,'MarisaC','2180365700',14.446),(14,'2023-07-01 11:30:00','2024-02-21 19:15:27','2024-02-21 19:15:50','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'ReimuB','1153284500',0.668,'ReimuB','1253910350',2.358),(15,'2023-07-01 14:00:00','2024-02-21 19:15:27','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaB','1181935880',4.686,'MarisaB','1172185000',3.512,'MarisaA','748680850',18.892),(16,'2023-07-02 11:00:00','2024-02-21 19:15:28','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','2M',2.000,'SakuyaB','LNNN',8.000,'MarisaB','2M',3.750),(17,'2023-07-02 14:00:00','2024-02-21 19:15:28','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','1M',9.000,'ReimuA','1M',9.000,'ReimuB','2M',3.250),(18,'2023-07-07 17:00:00','2024-02-21 19:15:28','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuB','4M',1.250,'MarisaB','3M',3.750,'ReimuB','5M',0.625),(19,'2023-07-08 14:00:00','2024-02-21 19:15:28','2024-02-21 19:15:56','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaOtter','11275012750',62.901,'YoumuEagle','8773852570',174.265,NULL,NULL,0.000),(20,'2023-07-09 09:30:00','2024-02-21 19:15:28','2024-02-21 19:15:51','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,NULL,'DNF',0.000,'Marisa','3704558650',76.872),(21,'2023-07-09 12:00:00','2024-02-21 19:15:29','2024-02-21 19:15:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaA','1M',6.000,'MarisaC','2M',6.500,'ReimuA','1M',4.500),(22,'2023-07-15 04:00:00','2024-02-21 19:15:29','2024-02-21 19:15:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaWinter','4M',0.750,'MarisaSpring','LNNN',34.000,'ReimuAutumn','5M',0.313),(23,'2023-07-16 07:00:00','2024-02-21 19:15:29','2024-02-21 19:15:52','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reimu','3M',5.000,NULL,NULL,0.000,'Sanae','4M',1.500),(24,'2023-07-16 13:00:00','2024-02-21 19:15:30','2024-02-21 19:15:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ReimuA','4873177990',56.211,'ReimuA','4963049600',78.605,'MarisaB','4316653530',25.668),(25,'2023-07-22 09:00:00','2024-02-21 19:15:31','2024-02-21 19:15:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','B2','1M 6G',15.800,'C1','5M 4G',13.000,'A1','2M 7G',8.500),(26,'2023-07-22 12:00:00','2024-02-21 19:15:31','2024-02-21 19:16:11','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaB','623155640',12.498,'MarisaB','619413060',11.442,'ReimuA','610884120',22.836),(27,'2023-07-23 07:00:00','2024-02-21 19:15:31','2024-02-21 19:16:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,NULL,0.000,'C2','105329960',41.092,'C1','96143240',36.187),(28,'2023-07-29 10:30:00','2024-02-21 19:15:32','2024-02-21 19:16:19','usxycrwh4v0r0t28','usxycrwh4v0r0t28','MarisaA','2M',37.500,NULL,'DNF',0.000,'MarisaA','1M',75.000),(29,'2023-07-29 13:30:00','2024-02-21 19:15:32','2024-02-21 19:16:22','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Youmu','6741555500',99.230,'Youmu','6737118660',98.416,NULL,NULL,0.000),(30,'2023-07-29 17:00:00','2024-02-21 19:15:32','2024-02-21 19:16:18','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Reimu','2482870880',15.818,NULL,NULL,0.000,'YoumuYuyuko','2787876460',14.503),(31,'2023-07-30 05:00:00','2024-02-21 19:15:33','2024-02-21 19:16:21','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Sakuya','6655515100',2.455,'Sanae','10232229400',28.394,NULL,NULL,0.000),(32,'2023-08-06 09:00:00','2024-02-21 19:15:33','2024-02-21 19:16:21','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'1:10:46.96',0.000,NULL,'<b>51:52.82</b>',0.000,NULL,'1:12:04.11',0.000),(33,'2023-08-06 12:00:00','2024-02-21 19:15:33','2024-02-21 19:16:20','usxycrwh4v0r0t28','usxycrwh4v0r0t28',NULL,'<b>16</b>',0.000,NULL,'8',0.000,NULL,'12',0.000);
/*!40000 ALTER TABLE `Results 2023` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule 2020`
--

DROP TABLE IF EXISTS `Schedule 2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule 2020` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Player_1` varchar(45) DEFAULT '-',
  `Player_2` varchar(45) DEFAULT '-',
  `Player_3` varchar(45) DEFAULT '-',
  `ResetTime` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule 2020`
--

LOCK TABLES `Schedule 2020` WRITE;
/*!40000 ALTER TABLE `Schedule 2020` DISABLE KEYS */;
INSERT INTO `Schedule 2020` VALUES (1,'2020-02-01 10:30:00','2024-02-21 18:54:32','2024-02-21 18:54:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH15 Lunatic Survival','-','HNY','SOC',60),(2,'2020-02-01 12:00:00','2024-02-21 18:54:33','2024-02-21 18:54:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Survival','Kayo','LRS','Tylopilus',60),(3,'2020-02-02 05:00:00','2024-02-21 18:54:33','2024-02-21 18:54:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Scoring','-','dxk','AAA',60),(4,'2020-02-02 13:30:00','2024-02-21 18:54:34','2024-02-21 18:54:46','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Survival','Mino','ATM','rori-',60),(5,'2020-02-08 05:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Lunatic Survival','Ness','Cerasis','ムラサイレブン (wadatsumi)',60),(6,'2020-02-08 14:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Scoring','Maribel Hearn','lyrica','Mu',60),(7,'2020-02-09 12:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Survival','-','IAH','SNT',60),(8,'2020-02-15 12:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Survival','pienyan','COMMON','kkgk',60),(9,'2020-02-15 14:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Scoring','kana0603','-','yami',60),(10,'2020-02-16 06:00:00','2024-02-21 18:54:35','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Survival','pyro','ISN','GB',60),(11,'2020-02-16 08:00:00','2024-02-21 18:54:36','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Lunatic Scoring','-','Cero','gob',60),(12,'2020-02-16 11:30:00','2024-02-21 18:54:36','2024-02-21 18:54:47','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Scoring','Ray','BENREN','ひろ♪☆ (Hiro)',60),(13,'2020-02-22 06:30:00','2024-02-21 18:54:36','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Survival','ZPS','Zsy','yuki',60),(14,'2020-02-22 12:00:00','2024-02-21 18:54:36','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Survival','LepLop','epsilon','ns',60),(15,'2020-02-22 14:00:00','2024-02-21 18:54:36','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH128 Lunatic Scoring','Dagoth','-','kaiko',60),(16,'2020-02-23 06:30:00','2024-02-21 18:54:36','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Scoring','ZM','mengo','K・G',60),(17,'2020-02-23 10:00:00','2024-02-21 18:54:36','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Scoring','-','17','ゆーみや (yu-miya)',60),(18,'2020-02-23 12:00:00','2024-02-21 18:54:37','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Scoring','Borealis','sel','-',60),(19,'2020-02-29 04:00:00','2024-02-21 18:54:37','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Scoring','streetmachino','ZKY','ゆーすけ (Yu-suke)',90),(20,'2020-03-05 08:00:00','2024-02-21 18:54:37','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Scoring','Obama','Nayutan','IwanaM',90),(21,'2020-03-07 11:00:00','2024-02-21 18:54:37','2024-02-21 18:54:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Survival','Cao Minh','WXQ','Garm',60),(22,'2020-03-07 13:00:00','2024-02-21 18:54:38','2024-02-21 18:54:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Survival','Yatsuzume','YWH','すばりっく (subarick)',60),(23,'2020-03-15 12:00:00','2024-02-21 18:54:38','2024-02-21 18:54:49','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH15 Pointdevice RNG','Mino','HNY','SOC',60);
/*!40000 ALTER TABLE `Schedule 2020` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule 2021`
--

DROP TABLE IF EXISTS `Schedule 2021`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule 2021` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Player_1` varchar(45) DEFAULT '-',
  `Player_2` varchar(45) DEFAULT '-',
  `Player_3` varchar(45) DEFAULT '-',
  `ResetTime` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule 2021`
--

LOCK TABLES `Schedule 2021` WRITE;
/*!40000 ALTER TABLE `Schedule 2021` DISABLE KEYS */;
INSERT INTO `Schedule 2021` VALUES (1,'2021-03-20 07:00:00','2024-02-21 18:55:07','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Survival','Kayo','Aelita','Rory',60),(2,'2021-03-20 11:00:00','2024-02-21 18:55:08','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Scoring','Borealis','Seiko','Kiti',115),(3,'2021-03-27 12:30:00','2024-02-21 18:55:08','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Survival','Cao Minh','Alex','kkgk',75),(4,'2021-03-27 15:00:00','2024-02-21 18:55:08','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Survival','LorennaRose','ZJM','Alshie',75),(5,'2021-03-28 07:00:00','2024-02-21 18:55:09','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH09 Lunatic Scoring','Dagoth2hu','-','Atsumori',105),(6,'2021-03-28 15:00:00','2024-02-21 18:55:09','2024-02-21 18:55:15','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Scoring','sp0thss','-','ゆーすけ (Yu-suke)',135),(7,'2021-04-03 13:00:00','2024-02-21 18:55:09','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Survival','BeheeyemBREAK','Asahi','Buchiwashi',75),(8,'2021-04-03 15:30:00','2024-02-21 18:55:09','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Survival','Mino','HAN','yuki',85),(9,'2021-04-04 09:00:00','2024-02-21 18:55:09','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Survival','Ghost','ULK','Guroniga',80),(10,'2021-04-04 13:00:00','2024-02-21 18:55:09','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Scoring','Levea','-','Zetsu',115),(11,'2021-04-10 13:00:00','2024-02-21 18:55:09','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Extra Scoring','morth','XBH','idtn',50),(12,'2021-04-10 14:30:00','2024-02-21 18:55:10','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Lunatic Survival','ness','Cero','kamoneko',75),(13,'2021-04-11 06:00:00','2024-02-21 18:55:10','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Scoring','-','zxxsmart','ryusei',75),(14,'2021-04-11 13:00:00','2024-02-21 18:55:10','2024-02-21 18:55:16','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Scoring','kana0603','-','9☆Y',95),(15,'2021-04-17 08:00:00','2024-02-21 18:55:10','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH128 Lunatic Scoring','-','Cerasis','gyouch',70),(16,'2021-04-17 15:00:00','2024-02-21 18:55:10','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Scoring','Maribel Hearn','Lyrica','ns',70),(17,'2021-04-18 07:30:00','2024-02-21 18:55:10','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Scoring','thk573','feng','YDH',55),(18,'2021-04-18 09:00:00','2024-02-21 18:55:10','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Extra Scoring','ZPS','17','K・G',90),(19,'2021-04-24 12:30:00','2024-02-21 18:55:11','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Scoring','Ray','ZKY','Hiro',100),(20,'2021-04-24 15:00:00','2024-02-21 18:55:11','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Survival','Jovial','CWC','ふすま (fusuma)',80),(21,'2021-04-25 08:00:00','2024-02-21 18:55:11','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Survival','Haki','BENREN','SOC',80),(22,'2021-04-25 13:00:00','2024-02-21 18:55:11','2024-02-21 18:55:17','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Extra Scoring','TrickOfHat','-','OOSAKA',50),(23,'2021-05-01 13:00:00','2024-02-21 18:55:11','2024-02-21 18:55:18','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH128 Lunatic Survival','yeashie','ATM','Febryu',45),(24,'2021-05-01 14:30:00','2024-02-21 18:55:12','2024-02-21 18:55:18','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Lunatic Scoring','Scarlet Moose','ling','STI',100),(25,'2021-05-02 08:00:00','2024-02-21 18:55:12','2024-02-21 18:55:18','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Scoring','-','ISN','Dean',100),(26,'2021-05-02 13:00:00','2024-02-21 18:55:17','2024-02-21 18:55:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Extra Scoring','Sakurei','-','pingval',70),(27,'2021-05-08 08:00:00','2024-02-21 18:55:18','2024-02-21 18:55:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Survival','Yatsuzume','SMT','Taruha',85),(28,'2021-05-08 13:00:00','2024-02-21 18:55:18','2024-02-21 18:55:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH15 Lunatic Survival','CreepyNinja','COMMON','SNT',105),(29,'2021-05-09 12:00:00','2024-02-21 18:55:38','2024-02-21 18:55:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH18 Lunatic Survival','Mino','XCF','SOC',95),(30,'2021-05-09 14:30:00','2024-02-21 18:55:38','2024-02-21 18:55:40','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Extra Marathon','Maribel Hearn','ULK','Norbis',NULL);
/*!40000 ALTER TABLE `Schedule 2021` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule 2022`
--

DROP TABLE IF EXISTS `Schedule 2022`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule 2022` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Player_1` varchar(45) DEFAULT '-',
  `Player_2` varchar(45) DEFAULT '-',
  `Player_3` varchar(45) DEFAULT '-',
  `ResetTime` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule 2022`
--

LOCK TABLES `Schedule 2022` WRITE;
/*!40000 ALTER TABLE `Schedule 2022` DISABLE KEYS */;
INSERT INTO `Schedule 2022` VALUES (1,'2022-05-14 12:00:00','2024-02-21 18:55:43','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Extra Scoring','たけのこ (KTT)','KagLun','ムラサイレブン (wadatsumi)',75),(2,'2022-05-15 12:00:00','2024-02-21 18:55:43','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Survival','LYXQ','ULK','幽谷もこ (moko)',75),(3,'2022-05-19 13:00:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH09 Lunatic Scoring','ESC','FSX','Cottingley',110),(4,'2022-05-21 15:00:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Survival','Yamada','inakilbss','zhzhzh',60),(5,'2022-05-22 12:30:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Survival','Belita','Kayo','SNT',80),(6,'2022-05-28 10:45:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Survival','yuki','LXN','hrs2006',85),(7,'2022-05-28 13:00:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH11 Lunatic Survival','てーる (Tale)','Funen1','Teragat',70),(8,'2022-05-29 12:00:00','2024-02-21 18:55:44','2024-02-21 18:55:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH15 Lunatic Survival','KGR (kamoneko)','Yatsuzume','Nagisa',115),(9,'2022-06-04 12:00:00','2024-02-21 18:55:44','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Lunatic Scoring','ハローズ (Halows)','kugei','Maribel Hearn',80),(10,'2022-06-04 14:15:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH13 Extra Scoring','Morth','idtn','-',50),(11,'2022-06-05 13:00:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Scoring','kana','MiLa','noppon',100),(12,'2022-06-05 15:30:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Scoring','-','kitch (みょん吉)','RebotOva',115),(13,'2022-06-11 15:00:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Scoring','sp0','-','ゆーすけ (Yu-suke)',140),(14,'2022-06-12 08:00:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Extra Scoring','Feng','Ray','あせび (Aseb)',55),(15,'2022-06-12 12:00:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Extra Scoring','-','いな (ina)','lua',80),(16,'2022-06-18 03:00:00','2024-02-21 18:55:45','2024-02-21 18:55:59','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Scoring','Rory','Zetsu','Levea',120),(17,'2022-06-19 14:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH16 Lunatic Scoring','oitan','枝豆 (function)','SND',105),(18,'2022-06-25 13:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Scoring','-','Dean','Mino',100),(19,'2022-06-26 08:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH10 Lunatic Scoring','Melita','Delita','ko_ume',90),(20,'2022-06-26 13:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH08 Lunatic Survival','えるもん (erumon)','ふすま (fusuma)','Maki',85),(21,'2022-07-02 13:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Extra Scoring','int','TrickOfHat','OOSAKA',55),(22,'2022-07-02 15:30:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH128 Lunatic Survival','yeashie bedwar','SsjacsS','-',45),(23,'2022-07-03 13:00:00','2024-02-21 18:55:46','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH17 Lunatic Survival','Beheeyem','-','Buchiwashi',75),(24,'2022-07-03 15:00:00','2024-02-21 18:55:47','2024-02-21 18:56:00','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH128 Lunatic Scoring','gyou','-','Dagoth',70),(25,'2022-07-09 09:45:00','2024-02-21 18:55:47','2024-02-21 18:56:01','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH14 Lunatic Survival','XCF','Ameko','TARUHA',85),(26,'2022-07-09 12:00:00','2024-02-21 18:55:47','2024-02-21 18:56:08','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH06 Lunatic Survival','Luna','kkgk','riu',80),(27,'2022-07-09 14:00:00','2024-02-21 18:55:47','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH07 Lunatic Survival','Febryu','glorious_laugh','Shooten',80),(28,'2022-07-10 07:00:00','2024-02-21 18:55:47','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH12 Lunatic Scoring','ニャムニャム (286nyamu)','K・G','HAN',95),(29,'2022-07-10 14:15:00','2024-02-21 18:55:48','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH18 Lunatic Survival','未知 (ns)','JWRmiso','SOC',85),(30,'2022-07-16 11:00:00','2024-02-21 18:55:48','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','TH15 Lunatic Scoring','Kasoti','RB','Maru_9',130),(31,'2022-07-16 15:00:00','2024-02-21 18:55:48','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Extra Marathon','idtn','KagLun','TSG',NULL),(32,'2022-07-17 14:00:00','2024-02-21 18:55:49','2024-02-21 18:56:09','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Bingo Match','未知 (ns)','Lorenzo','-',105);
/*!40000 ALTER TABLE `Schedule 2022` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule 2023`
--

DROP TABLE IF EXISTS `Schedule 2023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule 2023` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date__UTC_` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Player_1` varchar(45) DEFAULT '-',
  `Player_2` varchar(45) DEFAULT '-',
  `Player_3` varchar(45) DEFAULT '-',
  `ResetTime` bigint(20) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule 2023`
--

LOCK TABLES `Schedule 2023` WRITE;
/*!40000 ALTER TABLE `Schedule 2023` DISABLE KEYS */;
INSERT INTO `Schedule 2023` VALUES (1,'2023-05-27 12:00:00','2024-02-21 18:56:19','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ゴールデンストロベリー','-','SNT',115,'TH15 Lunatic Survival'),(2,'2023-05-27 15:00:00','2024-02-21 18:56:19','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','addedoge','chunm','Ohako',75,'TH13 Lunatic Survival'),(3,'2023-05-28 02:00:00','2024-02-21 18:56:19','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','-','KIK','BEN',75,'TH17 Lunatic Survival'),(4,'2023-06-03 11:00:00','2024-02-21 18:56:19','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','tktn','もふ (Mof)','白銀 雪 (Yukidango)',85,'TH08 Lunatic Survival'),(5,'2023-06-04 12:00:00','2024-02-21 18:56:19','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','おいたん (Oitan)','ひろ (Hiro)','-',105,'TH16 Lunatic Scoring'),(6,'2023-06-10 05:00:00','2024-02-21 18:56:20','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','286nyamu','YU-MIYA','K・G',95,'TH12 Lunatic Scoring'),(7,'2023-06-11 11:00:00','2024-02-21 18:56:20','2024-02-21 18:57:33','usxycrwh4v0r0t28','usxycrwh4v0r0t28','てーる (Tale)','inakilbss','Crispy',60,'TH10 Lunatic Survival'),(8,'2023-06-17 12:00:00','2024-02-21 18:56:20','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Mino','Ruby','Borealis',100,'TH14 Lunatic Scoring'),(9,'2023-06-18 13:30:00','2024-02-21 18:56:20','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','kana_th6','nyt','lemona',100,'TH06 Lunatic Scoring'),(10,'2023-06-24 10:00:00','2024-02-21 18:56:20','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','-','ピジョン','まさたか',60,'TH09 Extra Scoring'),(11,'2023-06-24 11:30:00','2024-02-21 18:56:20','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Apo','たけのこ (KTT)','idtn',75,'TH11 Extra Scoring'),(12,'2023-06-25 02:00:00','2024-02-21 18:56:20','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ゆーすけ (Yu-suke)','-','sp0',120,'TH07 Lunatic Scoring'),(13,'2023-06-25 12:00:00','2024-02-21 18:56:21','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Nome','SOC','tramsxxz',90,'TH10 Lunatic Scoring'),(14,'2023-07-01 11:30:00','2024-02-21 18:56:21','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','-','lua','いな (ina)',90,'TH07 Extra Scoring'),(15,'2023-07-01 14:00:00','2024-02-21 18:56:21','2024-02-21 18:57:34','usxycrwh4v0r0t28','usxycrwh4v0r0t28','あせび (Aseb)','Marisa','Morth',60,'TH14 Extra Scoring'),(16,'2023-07-02 11:00:00','2024-02-21 18:56:21','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Coin','kpkp','まこっちゃん (makocchan)',80,'TH07 Lunatic Survival'),(17,'2023-07-02 14:00:00','2024-02-21 18:56:21','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','crazy4pokemon','Norbis','ゆき',85,'TH12 Lunatic Survival'),(18,'2023-07-07 17:00:00','2024-02-21 18:56:21','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Riu','Fruchdamus','Faf',80,'TH06 Lunatic Survival'),(19,'2023-07-08 14:00:00','2024-02-21 18:56:21','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','RebotOva','Good Omen','-',115,'TH17 Lunatic Scoring'),(20,'2023-07-09 09:30:00','2024-02-21 18:56:22','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','-','XCFのファン','lyrica',90,'TH13 Lunatic Scoring'),(21,'2023-07-09 12:00:00','2024-02-21 18:56:22','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Kazimierz','KiriCat','らかさぁ (Rakasah)',70,'TH11 Lunatic Survival'),(22,'2023-07-15 04:00:00','2024-02-21 18:56:22','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Echo Alert','にゃんこ','RESQ',80,'TH16 Lunatic Survival'),(23,'2023-07-16 07:00:00','2024-02-21 18:56:22','2024-02-21 18:57:35','usxycrwh4v0r0t28','usxycrwh4v0r0t28','まだら (madara)','-','yeashie Superdying',85,'TH18 Lunatic Survival'),(24,'2023-07-16 13:00:00','2024-02-21 18:56:22','2024-02-21 18:57:36','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Oringiri','KGR','STI',100,'TH11 Lunatic Scoring'),(25,'2023-07-22 09:00:00','2024-02-21 18:56:22','2024-02-21 18:57:36','usxycrwh4v0r0t28','usxycrwh4v0r0t28','ふぇぶりゅう (febryu)','NaMa','ボニスト (bonisuto)',60,'TH128 Lunatic Survival'),(26,'2023-07-22 12:00:00','2024-02-21 18:56:22','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','SWH','浅黄ムツキ (Asagi)','int',60,'TH06 Extra Scoring'),(27,'2023-07-23 07:00:00','2024-02-21 18:56:23','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','-','Dagoth','ギョウちゃん (gyouchan)',70,'TH128 Lunatic Scoring'),(28,'2023-07-29 10:30:00','2024-02-21 18:56:23','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','XCF','Ameko','たるは (TARUHA)',85,'TH14 Lunatic Survival'),(29,'2023-07-29 13:30:00','2024-02-21 18:56:23','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Rivers','IwanaMinoriko (Zetsu)','-',120,'TH08 Lunatic Scoring'),(30,'2023-07-29 17:00:00','2024-02-21 18:56:23','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','pingval','-','Levea',80,'TH08 Extra Scoring'),(31,'2023-07-30 05:00:00','2024-02-21 18:56:24','2024-02-21 18:57:42','usxycrwh4v0r0t28','usxycrwh4v0r0t28','Guy','未知 (ns)','-',120,'TH18 Lunatic Scoring'),(32,'2023-08-06 09:00:00','2024-02-21 18:56:24','2024-02-21 18:57:43','usxycrwh4v0r0t28','usxycrwh4v0r0t28','KiriCat','JWRmiso','msm_smtn',90,'TH143 All Scenes No-Item'),(33,'2023-08-06 12:00:00','2024-02-21 18:56:24','2024-02-21 18:57:43','usxycrwh4v0r0t28','usxycrwh4v0r0t28','白銀 雪 (Yukidango)','yeashie Skywars','Borealis',105,'Bingo Match');
/*!40000 ALTER TABLE `Schedule 2023` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Teams 2020`
--

DROP TABLE IF EXISTS `Teams 2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Teams 2020` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL,
  `Points` decimal(10,2) DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Teams 2020`
--

LOCK TABLES `Teams 2020` WRITE;
/*!40000 ALTER TABLE `Teams 2020` DISABLE KEYS */;
INSERT INTO `Teams 2020` VALUES (1,'West','2024-02-21 19:19:23','2024-02-21 19:19:48','usxycrwh4v0r0t28','usxycrwh4v0r0t28','https://touhouworldcup.com/assets/icons/earth_16px.png',13.00),(2,'China','2024-02-21 19:19:23','2024-02-21 19:20:11','usxycrwh4v0r0t28','usxycrwh4v0r0t28','https://touhouworldcup.com/assets/icons/china_16px.png',12.50),(3,'Japan','2024-02-21 19:19:24','2024-02-21 19:20:23','usxycrwh4v0r0t28','usxycrwh4v0r0t28','https://touhouworldcup.com/assets/icons/japan_16px.png',22.50);
/*!40000 ALTER TABLE `Teams 2020` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Teams 2021`
--

DROP TABLE IF EXISTS `Teams 2021`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Teams 2021` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Points` decimal(10,2) DEFAULT 0.00,
  `Icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Teams 2021`
--

LOCK TABLES `Teams 2021` WRITE;
/*!40000 ALTER TABLE `Teams 2021` DISABLE KEYS */;
INSERT INTO `Teams 2021` VALUES (1,'West','2024-02-21 18:50:19','2024-02-21 19:21:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28',23.00,'https://touhouworldcup.com/assets/icons/earth_16px.png'),(2,'China','2024-02-21 18:50:19','2024-02-21 19:21:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28',29.00,'https://touhouworldcup.com/assets/icons/china_16px.png'),(3,'Japan','2024-02-21 18:50:20','2024-02-21 19:21:58','usxycrwh4v0r0t28','usxycrwh4v0r0t28',32.00,'https://touhouworldcup.com/assets/icons/japan_16px.png');
/*!40000 ALTER TABLE `Teams 2021` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Teams 2022`
--

DROP TABLE IF EXISTS `Teams 2022`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Teams 2022` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Points` decimal(10,2) DEFAULT 0.00,
  `Icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Teams 2022`
--

LOCK TABLES `Teams 2022` WRITE;
/*!40000 ALTER TABLE `Teams 2022` DISABLE KEYS */;
INSERT INTO `Teams 2022` VALUES (1,'Rose','2024-02-21 18:50:41','2024-02-21 19:24:11','usxycrwh4v0r0t28','usxycrwh4v0r0t28',33.00,'https://touhouworldcup.com/assets/icons/rose.png'),(2,'Heart','2024-02-21 18:50:42','2024-02-21 19:24:25','usxycrwh4v0r0t28','usxycrwh4v0r0t28',29.00,'https://touhouworldcup.com/assets/icons/heart.png'),(3,'Mind','2024-02-21 18:50:43','2024-02-21 19:26:04','usxycrwh4v0r0t28','usxycrwh4v0r0t28',28.00,'https://touhouworldcup.com/assets/icons/mind.png');
/*!40000 ALTER TABLE `Teams 2022` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Teams 2023`
--

DROP TABLE IF EXISTS `Teams 2023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Teams 2023` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `Points` decimal(10,2) DEFAULT 0.00,
  `Icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Teams 2023`
--

LOCK TABLES `Teams 2023` WRITE;
/*!40000 ALTER TABLE `Teams 2023` DISABLE KEYS */;
INSERT INTO `Teams 2023` VALUES (1,'Lotus','2024-02-21 18:50:46','2024-02-21 19:27:06','usxycrwh4v0r0t28','usxycrwh4v0r0t28',36.50,'https://touhouworldcup.com/assets/icons/lotus.png'),(2,'Spirit','2024-02-21 18:50:46','2024-02-21 19:27:14','usxycrwh4v0r0t28','usxycrwh4v0r0t28',29.00,'https://touhouworldcup.com/assets/icons/spirit.png'),(3,'Harmony','2024-02-21 18:50:47','2024-02-21 19:27:22','usxycrwh4v0r0t28','usxycrwh4v0r0t28',27.50,'https://touhouworldcup.com/assets/icons/harmony.png');
/*!40000 ALTER TABLE `Teams 2023` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-16 22:28:43
