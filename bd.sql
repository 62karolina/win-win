-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cases2
-- ------------------------------------------------------
-- Server version	5.5.23

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
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `procent` int(11) NOT NULL,
  `color` varchar(45) NOT NULL DEFAULT '#FFFFFF',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
INSERT INTO `cases` VALUES (1,'case',100,'money','https://lh3.googleusercontent.com/bYVafDlBEUJf-_agMoV97k336w4VSGMyIVNq5aJWMYlpyDq9y6hmTuso5cynuBDP8cI=s180',0,'#rwwerw'),(2,'def',500,'def','https://214010.selcdn.ru/ranbox/box/box2.png',0,'#FFFFFF'),(3,'def',1000,'def','https://214010.selcdn.ru/ranbox/box/box3.png',0,'#FFFFFF'),(4,'Бюджетный',5,'money','\\build\\img\\cases\\case5.png',0,'#b942f4');
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contest`
--

DROP TABLE IF EXISTS `contest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `item_id` int(11) NOT NULL,
  `user_win_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-Прием ставок\n2-Ожидание розыгрыша\n3-Розыгрыш окончен',
  `ticket_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Розыгрыши';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest`
--

LOCK TABLES `contest` WRITE;
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
INSERT INTO `contest` VALUES (1,'2018-10-22 17:57:34','2018-10-27 15:00:00',1,NULL,1,5),(2,'2018-10-22 19:10:02','2019-10-15 16:00:00',1,1694,3,16),(3,'2018-10-22 19:12:32','2019-10-15 16:00:00',23,1700,3,14);
/*!40000 ALTER TABLE `contest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contest_ticket`
--

DROP TABLE IF EXISTS `contest_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contest_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1 COMMENT='Ставки для розыгрышей';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest_ticket`
--

LOCK TABLES `contest_ticket` WRITE;
/*!40000 ALTER TABLE `contest_ticket` DISABLE KEYS */;
INSERT INTO `contest_ticket` VALUES (1,'2018-10-23 18:32:28',1700,1,15),(12,'2018-11-04 19:03:04',1705,1,1),(13,'2018-11-04 19:03:19',1705,1,2),(14,'2018-11-04 19:03:23',1705,1,3),(15,'2018-11-05 16:04:35',1705,1,4),(16,'2018-11-05 16:05:29',1705,1,5),(17,'2018-11-05 16:05:51',1705,1,6),(18,'2018-11-05 16:06:54',1705,1,7),(19,'2018-11-05 16:08:00',1705,1,8),(20,'2018-11-05 16:09:49',1705,1,9),(21,'2018-11-05 16:12:17',1705,1,10),(22,'2018-11-05 16:25:43',1705,1,11),(23,'2018-11-05 16:26:05',1705,1,12),(24,'2018-11-05 16:26:10',1705,1,13),(25,'2018-11-05 16:27:13',1705,1,14),(26,'2018-11-05 16:27:15',1705,1,15),(27,'2018-11-05 16:27:17',1705,1,16),(28,'2018-11-05 16:27:20',1705,1,17),(29,'2018-11-05 16:27:23',1705,1,18),(30,'2018-11-05 16:30:36',1705,1,19),(31,'2018-11-05 16:30:40',1705,1,20),(32,'2018-11-05 16:31:32',1705,1,21),(33,'2018-11-05 16:37:13',1705,1,22),(34,'2018-11-05 16:40:46',1705,1,23),(35,'2018-11-05 16:41:28',1705,1,24),(36,'2018-11-05 16:42:14',1705,1,25),(37,'2018-11-05 16:45:31',1705,1,26),(38,'2018-11-05 16:45:45',1705,1,27),(39,'2018-11-05 16:47:34',1705,1,28),(40,'2018-11-05 16:49:43',1705,1,29),(41,'2018-11-05 16:50:05',1705,1,30),(42,'2018-11-05 16:50:53',1705,1,31),(43,'2018-11-05 16:51:14',1705,1,32),(44,'2018-11-05 16:52:34',1705,1,33),(45,'2018-11-05 16:55:11',1705,1,34),(46,'2018-11-05 16:55:59',1705,1,35),(47,'2018-11-05 16:56:24',1705,1,36),(48,'2018-11-05 16:57:33',1705,1,37),(49,'2018-11-05 17:02:15',1705,1,38),(50,'2018-11-05 17:05:51',1705,1,39),(51,'2018-11-05 17:06:09',1705,1,40),(52,'2018-11-05 17:06:12',1705,1,41),(53,'2018-11-05 17:06:14',1705,1,42),(54,'2018-11-05 17:07:17',1705,1,43),(55,'2018-11-05 17:09:18',1705,1,44),(56,'2018-11-05 17:09:42',1705,1,45),(57,'2018-11-05 17:09:48',1705,1,46),(58,'2018-11-05 17:10:22',1705,1,47),(59,'2018-11-05 17:10:50',1705,1,48),(60,'2018-11-05 17:11:08',1705,1,49),(61,'2018-11-05 17:12:27',1705,1,50),(62,'2018-11-05 17:12:38',1705,1,51),(63,'2018-11-05 19:05:35',1700,1,52),(64,'2018-11-05 19:05:46',1700,1,53),(65,'2018-11-05 19:07:09',1700,1,54),(66,'2018-11-05 19:07:27',1700,1,55),(67,'2018-11-05 19:07:32',1700,1,56),(68,'2018-11-06 19:06:05',1700,1,57),(69,'2018-11-06 19:06:20',1700,1,58),(70,'2018-11-06 19:07:06',1700,1,59),(71,'2018-11-06 19:07:09',1700,1,60),(72,'2018-11-06 19:07:12',1700,1,61),(73,'2018-11-06 19:07:15',1700,1,62),(74,'2018-11-06 19:07:20',1700,1,63),(75,'2018-11-06 19:07:22',1700,1,64),(76,'2018-11-06 19:09:15',1700,1,65),(77,'2018-11-06 19:09:18',1700,1,66),(78,'2018-11-06 22:09:26',1700,1,67),(79,'2018-11-26 17:26:21',1700,1,68);
/*!40000 ALTER TABLE `contest_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliver`
--

DROP TABLE IF EXISTS `deliver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `item1` int(11) NOT NULL,
  `item2` int(11) NOT NULL,
  `item3` int(11) NOT NULL,
  `item4` int(11) NOT NULL,
  `item5` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tracking` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliver`
--

LOCK TABLES `deliver` WRITE;
/*!40000 ALTER TABLE `deliver` DISABLE KEYS */;
INSERT INTO `deliver` VALUES (1,1695,8,21,0,0,0,0,'RF0000CN','2017-04-18 17:37:56','2017-04-18 21:37:56'),(2,1700,27,0,0,0,0,0,'','2018-10-16 16:38:37','2018-10-16 13:38:37');
/*!40000 ALTER TABLE `deliver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postalcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kvartira` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` VALUES (1,1695,'eyJpdiI6Ilpxbms4ZXhNQ1NPUTErUU9pNG9USHc9PSIsInZhbHVlIjoieUw4NG13R29wVTcySE1nOEU0TlNrdz09IiwibWFjIjoiYmE3OTQxMTQ2ZTY0MGJlOTExNGNiYzZlMDc2ODQ3YjgwOGQ2Zjg2OWVmZTRiMzZhM2FmMmYxNjVhZTk5NjllYiJ9','eyJpdiI6IjcxV0ZlcWg0Q1wvK3hUVjRJYlIxeHlRPT0iLCJ2YWx1ZSI6Imh4QXhnR015ZmR6V2NNd1wvZ2Vqak1nPT0iLCJtYWMiOiJhZDAwNzdhNGMzZmQxNmEwNmM1MTI0NzgwOTA3NjM0ODg2ZmY5ZTdjZThmMDFhOTJiNTZiMjRmZDdjODYwZGFjIn0=','eyJpdiI6IlZFY0VEb2gwcGw4TVN3Rkh3UGh0QVE9PSIsInZhbHVlIjoiRG15aFRPRkpZbVFFT3JqckhUVFRPdz09IiwibWFjIjoiNTMzMmU4MzRmNzYzNDlhOTI3YjRiZWQ1NjkzYzBiZTU3YWMzNWIzNjMxOWFkODdiOWJlZGVhNzAyNTI4MjVkNyJ9','eyJpdiI6Ik45aXVQSW5UdEpqVjJCNkNKMVRXMlE9PSIsInZhbHVlIjoiWVR1RHRSU3gxWlQ1VVVKTlFuYitWUT09IiwibWFjIjoiMjZiNDA0MzJjYTVlZWY2MjZiOTdhMDcyYjc3Nzc4MzY3ZGZlYmVmYzMxZWUxMDNhYzFiNGMwOTg0NGE5ZjQwNCJ9','eyJpdiI6ImpLcVF0cjArYWMzMlMzTzM4dTFSOWc9PSIsInZhbHVlIjoiSGJEZFJXNVVXUkI5WWR1NU5tdFZndz09IiwibWFjIjoiNGFjZDkyODgwNTljMmZlNzU4ZGM0NThiZGRlYjg3NGQ4MzVmMjIwOTczYmIzMmVhNzRmOWM4ZTY3ZWE4YTE1MiJ9','eyJpdiI6Ikc4V0VXWVZzQ0loNkdKRnFyQTlDUVE9PSIsInZhbHVlIjoiUHVFWlFoTmhFRDdJVEZtbHFlSVVMZz09IiwibWFjIjoiNGFhYmMxZDYzY2ZlMmZkNjFjOGU2MmE5MWQwMjZiM2U4N2NmYjUxMDhiYThiZWQxNmU2OGU1NWRjMDBiZTdmOSJ9','eyJpdiI6ImFoQWVXcFpcL2lCZ2tTUFVrQXJUUDdRPT0iLCJ2YWx1ZSI6IlJ3aW93VVA3Q25UeE1Mc3RpRnVDajNCMVZSN3pDdHNZQ2JUXC9PYlwvOVhhbz0iLCJtYWMiOiI5NjNmNjYwZGQ1ODhmOGM3Y2ExYjM3NGY0YTkwMWUwMWU0ZjM4YzRiYjI3MGVjNDJlMzc1OTAxMmI4MWU4ZTY2In0=','2017-04-18 21:09:13','2017-04-18 21:09:13'),(2,1700,'eyJpdiI6IkRjb3Y2T1NNZUNmdnpRWktpeU8wbnc9PSIsInZhbHVlIjoiWjVXOTFRQmJ1MHZ3ZGh1TUMwUWI1TmVaWE1XNGt4WGJmSWkyN1pqVWJXMD0iLCJtYWMiOiJhMjQ3ODI3NzZiYzA3MjAzMjUwOTg4OWVkNzE2Mzg5NDlmZGM1ZmY5YzM3NThjOWJmNzNiZTMyYTg3ZmM3YzMwIn0=','eyJpdiI6ImxNeGp4Y1BiN3J0UTdpUUJFd05PV1E9PSIsInZhbHVlIjoiMkhZc0xVZlFNTHdEXC9JVTFZbExUVkE9PSIsIm1hYyI6ImEzOWUzNTEwY2E4NGM3ZDAyOTk3YjYzYjEzYWI3YzRhOTY5MDJmODE3NGU2NjMyYzAwMmE1YWY0M2M3M2U5MzYifQ==','eyJpdiI6IldNRUVrM0tseEttcWt2U0RTQzQ1K0E9PSIsInZhbHVlIjoiYXNLcEJQdkx2a3I5MHZDWE1KRjh3UT09IiwibWFjIjoiYzgyZDlmOTg3ZjEwOTJlM2Y0ODI4ZTM1Nzk0MTI1NTM4YThjY2U3ZmRkYmE3Nzg4MTJlNzRmNmExNGJiNDVmNyJ9','eyJpdiI6ImJzS1BqTnRNTTlRdzlpMHM1bE1XYUE9PSIsInZhbHVlIjoieGM2QzI1dE1oV0pWTElKZDJoM1Fadz09IiwibWFjIjoiMGJhZTZhOGU4NDM4NDU1MTkzNDEyNjkzYTAxYzBjNDgzOTc0ZjcyMWIyOGMwMTc3MTlhMzVkMjNjMjYyZWJjNiJ9','eyJpdiI6IjcxSjlZeWt0WTkza1dKbzdMam1VSVE9PSIsInZhbHVlIjoiK1NxTENubDZiYm5OZFwvdnBQa1wvMWpBPT0iLCJtYWMiOiI4YjA4Y2Y0MWQ0NzAyNjA4OTNiMGI2OGQ4ZGI1YjEzMzhkYTk5MThlNzZhMWQzMDI3Mzk1NzdhMzFjMDkxNDJkIn0=','eyJpdiI6IjJ6N1R3a3p4QnNKekEraEpmeXp3K3c9PSIsInZhbHVlIjoiamF4bHdtZDBZY1h0XC9zRjYzSGxrdUE9PSIsIm1hYyI6IjdkMGQwNGQ1ZThiZjE3NmJjMTQwODA4MThlZjYzZWQ2MjhkMWJiYTk0ZTljYWY5NTkyMGQ5NWE1YjRhMWJkMDEifQ==','eyJpdiI6IlRkdGFQZTRKUzhsTkhPcXRkaTFYN0E9PSIsInZhbHVlIjoiMHR3YndNR3hTTDByYzN6WVRnalZZdz09IiwibWFjIjoiMTRlYWEwNjU1MzljMzdmNmE3Y2Q1Y2M2NGViNDM1MzAwMGRiODM5YTM1OTM4NmUwMDRiMzUwYjFiOTUyODE5OSJ9','2018-10-08 15:04:17','2018-10-08 15:04:17'),(3,1705,'eyJpdiI6InBNNjcyeHNPUEpjS0YrK20wR1NtU2c9PSIsInZhbHVlIjoiNEtHdFZNQW5jb1FWdjhEeHJsMFMyUT09IiwibWFjIjoiNDBkYTFhODcxMTBlZTZiMWQ0NzQ1OGVjMmQ3ZmU1ZWRmNjdhYWE1NGViYmNkMGMxNGIzMDAwNzAzOTcwZDFkZSJ9','eyJpdiI6Ik5KU0Q4RFwvQzN4NExlOENZRTc0RmdnPT0iLCJ2YWx1ZSI6InJHWUVYZzhzeEIzT3Mza2JpMlIwMFE9PSIsIm1hYyI6IjlkYjBhMjg5NDczZTU5ZDU0OTMzYmIwNWRiOGNlMzgwYzE1MTlmZGQwODkxMzdiZjZlM2NlMzdkMmMyZjZjYzkifQ==','eyJpdiI6Ilwvdk5FUDhwdGhTckFJZXduenFid0RnPT0iLCJ2YWx1ZSI6IkcxeW5xUjkreVBJd3hKVlZrRWVWMUE9PSIsIm1hYyI6ImZmYTI5MzY0ZDA5Y2QzMDU5OTVmM2E1Mzc4MTRhOTE5Yzc5OTY1NzU5YjgyNmE0NDBmY2RjYTUzNGJjYzlkMWEifQ==','eyJpdiI6ImFacW1hMzh0WGZoUUtjTXhsTndZemc9PSIsInZhbHVlIjoiT0F2OHd6ZUR3V0tOUnFJUzV0TEpcL1E9PSIsIm1hYyI6ImU1OTZlNzJkY2I1ODliYzVlYjM0Yzc2NTMxMGQxOGFhYmZhNTM1YTQzYTUwNDI1MmNhZGI5Y2FlY2M0ODdlY2MifQ==','eyJpdiI6IndCUFFhRUc1R0hvaXAyY1ZcL2x4RHNBPT0iLCJ2YWx1ZSI6InJDbzNLbE16Um03V3RSd3NLaU53alE9PSIsIm1hYyI6IjJjNGEzNWFkNmEzNjgyYTgxMjgyZmU1OWQyZTA4YTNhNDBmZGU0N2VjYjMwNjg3YzVhN2I0N2M3N2QzZWJjNjIifQ==','eyJpdiI6IkdzdFJ2blNMbUtkeStDUmtBU1QzQWc9PSIsInZhbHVlIjoiV0hSXC9ST1BoWjJxUUYrSStlS3d1Q3c9PSIsIm1hYyI6ImJiYjBiZTMxYzkzNGZhNmQ3NmU2ODFkNDZkZjIwNzNiNjdlMGJhOTgyZWZkNTQ1M2EzMGYxNjU4ZGRlNzgyMDYifQ==','eyJpdiI6Ikx4eVF4RURNNlQ4d05VTjFVXC9aRzJBPT0iLCJ2YWx1ZSI6IjVBbHZNR25DNmRjdHNtbnZXSXpJd2c9PSIsIm1hYyI6ImI0M2EwYmEwMjRkN2FkNDg0YWMwNDJlZDNmYTVlNTQ4MTA5MGVhNDU0MDUwNjNkMDBkODI0NDk2NWY1ZmZjZGQifQ==','2018-10-16 13:38:04','2018-10-16 13:38:04');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `case` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `win_item` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `case` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,8,1695,1,2),(2,21,1695,1,2),(3,6,1695,1,1),(4,14,1667,1,1),(5,6,1667,1,1),(6,17,1667,1,1),(7,7,1667,1,1),(8,18,1667,1,1),(9,36,1667,2,1),(10,41,1667,3,1),(11,27,1667,2,1),(12,18,1695,1,1),(13,24,1667,2,1),(14,16,1695,1,1),(15,13,1695,1,1),(16,13,1695,1,1),(17,9,1695,1,1),(18,16,1695,1,1),(19,6,1695,1,1),(20,12,1695,1,1),(21,4,1695,1,1),(22,9,1695,1,1),(23,14,1695,1,1),(24,17,1695,1,1),(25,16,1695,1,1),(26,3,1695,1,1),(27,14,1695,1,1),(28,3,1695,1,1),(29,1,1695,1,1),(30,12,1695,1,1),(31,10,1695,1,1),(32,8,1695,1,1),(33,16,1695,1,1),(34,11,1695,1,1),(35,16,1695,1,1),(36,18,1695,1,1),(37,10,1695,1,1),(38,14,1695,1,1),(39,14,1695,1,1),(40,4,1695,1,1),(41,15,1695,1,1),(42,18,1695,1,1),(43,17,1695,1,1),(44,41,1695,3,1),(45,41,1695,3,1),(46,42,1695,3,1),(47,42,1695,3,1),(48,4,1667,1,1),(49,10,1667,1,0),(50,19,1667,1,0),(51,11,1667,1,0),(52,43,1695,3,1),(53,41,1695,3,1),(54,27,1700,2,2),(55,43,1700,3,1),(56,12,1700,1,1),(57,11,1700,1,1),(58,6,1700,1,1),(59,7,1700,1,1),(60,7,1700,1,1),(61,8,1700,1,1),(62,4,1700,1,1),(63,6,1700,1,1),(64,6,1700,1,1),(65,18,1700,1,1),(66,35,1700,2,1),(67,23,1700,2,1),(68,25,1700,2,1),(69,25,1700,2,1),(70,24,1700,2,1),(71,24,1700,2,1),(72,27,1700,2,1),(73,38,1700,2,1),(74,24,1705,2,0),(75,7,1700,1,1),(76,61,1700,4,1),(77,57,1700,4,1),(78,55,1700,4,1),(79,55,1700,4,1),(80,57,1700,4,1),(81,58,1700,4,1),(82,55,1700,4,1),(83,59,1700,4,1),(84,65,1700,4,1),(85,56,1700,4,1),(86,58,1700,4,1),(87,55,1700,4,0),(88,56,1700,4,0),(89,60,1700,4,1),(90,57,1705,4,0),(91,58,1705,4,0),(92,57,1705,4,0),(93,55,1705,4,0),(94,61,1705,4,0),(95,56,1705,4,1),(96,55,1705,4,0),(97,58,1700,4,1),(98,59,1700,4,1),(99,59,1700,4,1),(100,55,1700,4,1),(101,58,1700,4,1),(102,63,1700,4,1),(103,57,1700,4,1),(104,61,1700,4,1),(105,61,1700,4,1),(106,58,1700,4,1),(107,57,1700,4,1),(108,57,1700,4,1),(109,55,1700,4,1),(110,61,1700,4,1),(111,65,1700,4,1),(112,57,1700,4,1),(113,57,1700,4,0),(114,55,1700,4,0),(115,55,1700,4,1),(116,55,1700,4,0),(117,57,1700,4,0),(118,64,1700,4,0),(119,63,1700,4,0),(120,58,1700,4,0),(121,57,1700,4,0);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'def',
  `image` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case` int(11) DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Нож кредитка',60.00,'def','\\build\\img\\items\\3289981906.png',1,'супер пупер нож'),(2,'USB гибкая лампа',80.00,'def','https://214010.selcdn.ru/ranbox/items/usb_led_medium.png',1,NULL),(3,'Наушники JBL2',150.00,'def','https://214010.selcdn.ru/ranbox/items/jbl_headphone_medium.png',1,NULL),(4,'USB-кабель Android',95.00,'def','https://214010.selcdn.ru/ranbox/items/android_cable_medium.png',1,NULL),(5,'Наушники Beats Tour',110.00,'def','https://214010.selcdn.ru/ranbox/items/beats_tour_almaz_medium.png',1,NULL),(6,'Светящийся браслет',90.00,'def','https://214010.selcdn.ru/ranbox/items/led_braslet_medium.png',1,NULL),(7,'Чехол со львом',80.00,'def','https://214010.selcdn.ru/ranbox/items/17_medium.png',1,NULL),(8,'MP3 плеер',90.00,'def','https://214010.selcdn.ru/ranbox/items/18_medium.png',1,NULL),(9,'Fish Eye',90.00,'def','https://214010.selcdn.ru/ranbox/items/7_medium.png',1,NULL),(10,'Силиконовый чехол',60.00,'def','https://214010.selcdn.ru/ranbox/items/19_medium.png',1,NULL),(11,'Селфи палка (Монопод)',90.00,'def','https://214010.selcdn.ru/ranbox/items/21_medium.png',1,NULL),(12,'Брелок PowerBank 2600 mAh',110.00,'def','https://214010.selcdn.ru/ranbox/items/powerbank_medium.png',1,NULL),(13,'Шагометр',250.00,'def','https://214010.selcdn.ru/ranbox/items/shagometr_medium.png',1,NULL),(14,'USB зажигалка',280.00,'def','https://214010.selcdn.ru/ranbox/items/usb_lighter_medium.png',1,NULL),(15,'Электронная сигарета',250.00,'def','https://214010.selcdn.ru/ranbox/items/cigarette_medium.png',1,NULL),(16,'Спиннер',250.00,'def','https://214010.selcdn.ru/ranbox/items/spinner_medium.png',1,NULL),(17,'Наушники JBL',350.00,'def','https://214010.selcdn.ru/ranbox/items/jbl_medium.png',1,NULL),(18,'Флешка SmartBuy 4GB',400.00,'def','https://214010.selcdn.ru/ranbox/items/usb_smartbuy_4gb_medium.png',1,NULL),(19,'Bluetooth Колонка',700.00,'def','https://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png',1,NULL),(20,'Смарт Часы (Android)',2200.00,'def','https://214010.selcdn.ru/ranbox/items/11_medium.png',1,NULL),(21,'Экшн Камера',2400.00,'def','https://214010.selcdn.ru/ranbox/items/10_medium.png',1,NULL),(22,'USB зажигалка',280.00,'def','https://214010.selcdn.ru/ranbox/items/usb_lighter_medium.png',2,NULL),(23,'Флешка SmartBuy 4GB',400.00,'def','https://214010.selcdn.ru/ranbox/items/usb_smartbuy_4gb_medium.png',2,NULL),(24,'Спиннер',250.00,'def','https://214010.selcdn.ru/ranbox/items/spinner_medium.png',2,NULL),(25,'Электронная сигарета',250.00,'def','https://214010.selcdn.ru/ranbox/items/cigarette_medium.png',2,NULL),(26,'Флешка SmartBuy 8GB',500.00,'def','https://214010.selcdn.ru/ranbox/items/usb_smartbuy_8gb_medium.png',2,NULL),(27,'Фонарь-светильник Бочка',400.00,'def','https://214010.selcdn.ru/ranbox/items/bochka_medium.png',2,NULL),(28,'3D очки VR Box II',600.00,'def','https://214010.selcdn.ru/ranbox/items/vr_box_medium.png',2,NULL),(29,'Флешка SmartBuy 16GB',600.00,'def','https://214010.selcdn.ru/ranbox/items/usb_smartbuy_16gb_medium.png',2,NULL),(30,'Casio G-Shock',700.00,'def','https://214010.selcdn.ru/ranbox/items/g_shock_medium.png',2,NULL),(31,'Bluetooth Колонка MINI-X6',800.00,'def','https://214010.selcdn.ru/ranbox/items/bt_speaker_medium.png',2,NULL),(32,'Селфи-кольцо',500.00,'def','https://214010.selcdn.ru/ranbox/items/selfie_ring_medium.png',2,NULL),(33,'Беспроводные наушники Beats',1400.00,'def','https://214010.selcdn.ru/ranbox/items/beats_solo_medium.png',2,NULL),(34,'Экшн Камера',2400.00,'def','https://214010.selcdn.ru/ranbox/items/10_medium.png',2,NULL),(35,'Bluetooth Колонка',700.00,'def','https://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png',2,NULL),(36,'Смарт Часы (Android)',2200.00,'def','https://214010.selcdn.ru/ranbox/items/11_medium.png',2,NULL),(37,'JBL Charge2+',2500.00,'def','https://214010.selcdn.ru/ranbox/items/charge2_medium.png',2,NULL),(38,'3D ручка',3000.00,'def','https://214010.selcdn.ru/ranbox/items/3dpen_medium.png',2,NULL),(39,'Sony Playstation 4 500Gb',30000.00,'def','https://214010.selcdn.ru/ranbox/items/34_medium.png',2,NULL),(40,'Bluetooth Колонка',700.00,'def','https://214010.selcdn.ru/ranbox/items/pokemon_bt_medium.png',3,NULL),(41,'Casio G-Shock',700.00,'def','https://214010.selcdn.ru/ranbox/items/g_shock_medium.png',3,NULL),(42,'Bluetooth Колонка MINI-X6',800.00,'def','https://214010.selcdn.ru/ranbox/items/bt_speaker_medium.png',3,NULL),(43,'PowerBank 8800 mAh',900.00,'def','https://214010.selcdn.ru/ranbox/items/20_medium.png',3,NULL),(44,'Беспроводные наушники Beats',1400.00,'def','https://214010.selcdn.ru/ranbox/items/beats_solo_medium.png',3,NULL),(45,'JBL Charge2+',2500.00,'def','https://214010.selcdn.ru/ranbox/items/charge2_medium.png',3,NULL),(46,'Смарт Часы (Android)',2200.00,'def','https://214010.selcdn.ru/ranbox/items/11_medium.png',3,NULL),(47,'Apple TV 32Gb',30000.00,'def','https://214010.selcdn.ru/ranbox/items/29_medium.png',3,NULL),(48,'Canon EOS 1100D Kit',30000.00,'def','https://214010.selcdn.ru/ranbox/items/45_medium.png',3,NULL),(49,'XBox One 500Gb',30000.00,'def','https://214010.selcdn.ru/ranbox/items/33_medium.png',3,NULL),(50,'iPad Mini 4',40000.00,'def','https://214010.selcdn.ru/ranbox/items/24_medium.png',3,NULL),(51,'iPhone 7 32Gb',57000.00,'def','https://214010.selcdn.ru/ranbox/items/27_medium.png',3,NULL),(53,'gthddsasdf',2344.00,'def','',3,NULL),(54,'фвафвафа',113.00,'def','',3,'фывпфывпфыпв'),(55,'Брелок \"Обезьяна\"',0.30,'def','\\build\\img\\items\\1600.png',4,'Брелок \"Обезьяна\"'),(56,' HTOMPT Power Bank P-041',20.00,'def','\\build\\img\\items\\1700.png',4,' HTOMPT Power Bank P-041'),(57,'Брелок металлический',2.00,'def','\\build\\img\\items\\1800.png',4,'Брелок металлический'),(58,'Мышь Ritmix ROM-111',2.00,'def','\\build\\img\\items\\1900.png',4,'Мышь Ritmix ROM-111'),(59,'Наушники Ritmix RH-004',3.00,'def','\\build\\img\\items\\2000.png',4,'Наушники Ritmix RH-004'),(60,'Наушники Defender Pulse 428',6.50,'def','\\build\\img\\items\\2100.png',4,'Наушники Defender Pulse 428'),(61,'Кружка LUMINARC Nordic',4.00,'def','\\build\\img\\items\\2200.png',4,'Кружка LUMINARC Nordic'),(62,'Очки солнцезащитные Modis',10.00,'def','\\build\\img\\items\\2300.png',4,'Очки солнцезащитные Modis'),(63,'Карты для покера Royal',12.00,'def','\\build\\img\\items\\2400.png',4,'Карты для покера пластиковые Royal'),(64,'USB Flash Kingston 16GB',12.00,'def','\\build\\img\\items\\2500.png',4,'USB Flash Kingston DataTraveler 100 G3 16GB (DT100G3/16GB)'),(65,'Фонарь ЭРА SDB1',8.00,'def','\\build\\img\\items\\2600.png',4,'Фонарь ЭРА SDB1');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,100,1700,'1539029496',0,'2018-10-08 20:11:36','0000-00-00 00:00:00'),(2,100,1700,'1539029531',0,'2018-10-08 20:12:11','0000-00-00 00:00:00'),(3,100,1700,'1541542971',0,'2018-11-06 22:22:51','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL DEFAULT '0',
  `games` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `vivod` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (1,2984,187,0,0,600);
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `game` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL,
  `login` varchar(256) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `ref_code` varchar(256) NOT NULL,
  `ref_use` varchar(256) DEFAULT NULL,
  `open_box` int(255) NOT NULL,
  `win` int(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '2016-11-08 21:32:40',
  `is_yt` int(11) NOT NULL,
  `login2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bonus_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '2016-11-08 19:43:23',
  `bonus_time_drop` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '2016-11-11 18:13:23',
  `free_cases_left` int(11) DEFAULT '0',
  `refferal_money` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deposit` int(11) NOT NULL DEFAULT '0',
  `mini_wins` int(11) NOT NULL DEFAULT '0',
  `ban_mini` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) NOT NULL,
  `ban_ticket` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `profit2` int(11) NOT NULL,
  `timer` int(14) NOT NULL,
  `nick` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contests_ticket` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1709 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Anatol','https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg','1',0.00,1,'1','21',0,0,'bJ7s45y8sUHpLX2U9NZ3Yy7zRke8Xs2ZXaCsjtrRtTyYPfGuWmlazS9LFt6s','2017-04-09 09:58:40','2017-04-09 13:58:40',1,'123','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,219120,0,0,0,0,'nKByi2Y9','',NULL,0),(1667,'Прядиев Андрей','https://pp.userapi.com/c619321/v619321749/dde0/S-2S3KKrprU.jpg','id44810749',192444.00,1,'YkeBn6bRSDZtr',NULL,13,0,'UeL3b0SXRLySjzmY0rIK4KhoV3pixMg6CPjPKNJwfAGydWy3tGGZBZJMZAjo','2017-04-18 19:19:12','2017-04-18 23:19:12',0,'44810749','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'526zNZrT','',NULL,0),(1668,'Недров Кузьма','https://pp.userapi.com/c626616/v626616162/62842/xsu7er-H6fk.jpg','id196658162',5417.00,0,'88tFEh5H89GRB',NULL,0,0,'OovRhUP49DLS42Sxt9369X5bTIx0ZhnjUpZyBIUdDIIqBWchuj6PIZaD3zIU','2017-04-18 18:01:47','2017-04-18 22:01:47',1,'196658162','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'s9s3zBEy','',NULL,0),(1669,'Муфтахин Руслан','https://pp.userapi.com/c627429/v627429458/7971/D7ZXvh0E1ZE.jpg','id2348458',700.00,0,'T24ztiisADNeA',NULL,0,0,'mgvLj8vSWc4Vt7nOOKbj2dWtYqrrVLNSVD3rgdzBqOkNYKI4A3B7Rw9Nabvk','2017-04-18 18:01:53','2017-04-18 22:01:53',0,'2348458','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,214,0,0,0,0,'nkhzQhY7','',NULL,0),(1670,'Тудвасев Антон','https://pp.vk.me/c638819/v638819016/126f8/vzgqbRAc5GU.jpg','id157618016',0.00,0,'K8hshar8YZTE4',NULL,0,0,'Qoa482GzlNdVokYLLssPaDoe7gkR0Ebk9yocEAhqiJBjIGVSxW9yKPKDvrse','2017-02-26 14:58:54','2017-02-26 11:58:54',0,'157618016','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'dBh7GfFY','',NULL,0),(1671,'Романов Алексей','https://pp.userapi.com/c626631/v626631900/574ca/r2mhYAGCxeU.jpg','id167166900',6831.00,0,'kr8NAQ79ebf3t',NULL,0,0,'Ly69dFXnY0IyevsWhKfVwKueEKRS3ARMw6gqdBCvwRaaUqAiE9qwg8JhidwB','2017-04-18 09:30:19','2017-04-18 13:30:19',0,'167166900','2017-03-06 09:43:45','2016-11-11 18:13:23',0,0,'',0,0,0,2660,0,0,0,0,'BQ9BKHAs','',NULL,0),(1672,'Моисеев Егор','https://pp.userapi.com/c837427/v837427498/45e5b/d3TiXXRsKMU.jpg','id354288498',0.00,0,'sbFKr229n57k9','YDhHkbsfeQQrZ',0,0,'X6eIfBERL0koJVEE08nt93XFWd39PD6fI0nPyA1nDRa9sZ1qmNyFt7c1oHx7','2017-04-09 15:08:59','2017-04-09 22:08:59',0,'354288498','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,1653427,0,0,0,0,'A5FstDBa','',NULL,0),(1673,'Лавров Николай','https://pp.userapi.com/c636716/v636716841/4cb7c/NgsKxpY5Cjg.jpg','id91785841',0.00,0,'RHBBN2ZyRGFTF',NULL,0,0,'dJjZDysLBVvvYNf7o1dFrb38e8H2uOnjyoMox2da7PGvG0AhVWI0GcCOjdm2','2017-02-28 20:43:57','2017-02-28 17:43:57',0,'91785841','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,3189260,0,0,0,0,'tAGYbQFd','',NULL,0),(1674,'Полинский Артём','https://pp.userapi.com/c622126/v622126182/543e9/pFt4zYBQr1I.jpg','id62796182',0.00,0,'baGE58t35D86G',NULL,0,0,'tCVFfjGUghrDTXMCIyCHnBXQjqdOKYdrXvqj4jvzHZWcJGy4jp3iajh41egZ','2017-03-01 08:54:34','2017-03-01 05:54:34',0,'62796182','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'KZ2SsEEG','',NULL,0),(1675,'Белов Сергей','https://pp.userapi.com/c604422/v604422153/1a92c/VUbiAzkSDFU.jpg','id343153',0.00,0,'H9bZAB4BHQdSh',NULL,0,0,'wMKrhh296gV82dWdaGQJOnhMQp31HapgMYImme16SWyCUEU1bovRSVxcHnVS','2017-04-06 14:02:54','2017-03-01 10:32:03',0,'343153','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,272773,0,0,0,0,'yBRAhsbN','',NULL,0),(1677,'Кодеров Владимир','https://pp.userapi.com/c638627/v638627566/2b013/Dz04Je82TFA.jpg','id371446566',0.00,0,'tEGFdZ3F9YkSN',NULL,0,0,'tYCLJ570OjVIeFw5RQpy3A7E5XGEb4MKjSB5rhJEQuXc0TJdUXtGlGhbAiIK','2017-03-02 07:18:43','2017-03-02 04:18:43',0,'371446566','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'beDZHkiE','',NULL,0),(1678,'Тригуба Евгений','https://cs7051.userapi.com/c604619/v604619846/273b1/oCOzHxk21AQ.jpg','id116445846',0.00,0,'YQGzanzTsHG3D',NULL,0,0,'Qw1BRfSqarnJETbQV82wq6LeyZ1I6D38qNz8kpS08fBPJGzmoVcQxa088L6t','2017-03-03 20:28:07','2017-03-03 17:28:07',0,'116445846','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'Gs2tk65z','',NULL,0),(1679,'Документов Александр','https://pp.userapi.com/c636922/v636922560/4e0f2/_E-ME4luzIY.jpg','id315996560',37700.00,0,'Sri2rStQRrn2Y',NULL,0,0,'bq901eks3Tfmy3l1wwfo0qI1YUAjWqlCa5BjKNFEHuCDeMZ26Nqvn9WutHkj','2017-04-17 19:51:36','2017-04-17 23:51:36',0,'315996560','2017-03-06 18:03:08','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'yF2tDBT9','',NULL,0),(1680,'Строгий Саша','https://pp.userapi.com/c638325/v638325135/10f44/3kh0dyd8CJM.jpg','id88189135',1.00,0,'zbbHK53EGbzZe',NULL,0,0,'i6Wh5BRtyrdIB3tptd9hU6d15e0B5xJ7EKUSqQhzprSG8eJckytJpRHW7rw1','2017-03-05 23:02:25','2017-03-05 20:02:25',0,'88189135','2017-03-05 23:02:25','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'fKBkyG5n','',NULL,0),(1681,'Хилин Максим','https://pp.userapi.com/c633716/v633716455/35d6f/-pZpTAt2OAU.jpg','id158864455',1.00,0,'8KZk2H7fdTDFh',NULL,0,0,'zO9LwSQiyz1YrMP9axrkov8QFGpN7LaeqAvA13VxIPXiI5B9eWJwLAXplvS1','2017-03-04 17:13:02','2017-03-04 14:13:02',0,'158864455','2017-03-04 17:13:02','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'hE69zGEG','',NULL,0),(1682,'Чиповский Дмитрий','https://pp.userapi.com/c637228/v637228619/53fdd/w4iTs-cXGao.jpg','id79736619',0.00,0,'sKSyS8ANzBTf3',NULL,0,0,'VqDb8nMWZvDkK4qdbAW9Q3YZinL76pPev2RHQmu84aNFHMOv1UtDvd3iOB0J','2017-03-04 23:51:00','2017-03-04 20:51:00',0,'79736619','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'iSHer3bN','',NULL,0),(1683,'\'о\' Влад','https://pp.userapi.com/c637225/v637225345/23c47/6PCDvBAnVoQ.jpg','id248420345',0.00,0,'s5FhFsH6NYT8Y',NULL,0,0,'CHA4iwsyTJwa0lBh4ttuMn2POyC8g6LJ0mUJNR02yiB0dcwqaJt3Q6LywPbE','2017-03-05 11:01:05','2017-03-05 08:01:05',0,'248420345','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'niENe8QG','',NULL,0),(1684,'Михайлишин Роман','https://pp.userapi.com/c837336/v837336672/1628b/xTjpxoNsKLI.jpg','id120072672',0.00,0,'YEtHFBQRQkEih',NULL,0,0,'oPHavx3kNJLycDzdywoF5mV7wslmzWyjgSIfDpdGmiz4F8UHaPkWrHZ4zLTc','2017-03-24 23:27:17','2017-03-25 03:27:17',0,'120072672','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'inN3aDYf','',NULL,0),(1692,'adad','https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg','adad',0.00,0,'adda',NULL,0,0,'adad','2017-04-11 17:55:18','2017-04-12 00:53:44',1,'adad','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'adad','',NULL,0),(1693,'Ярмаков Кирилл','https://pp.userapi.com/c604525/v604525662/303fb/mX-E0mJCY64.jpg','id214391662',0.00,1,'nBT6edRQYn9EG',NULL,0,0,'U8SRnFwQ5HBcARPYCXILkHiDmpYBn9ujztZ0sWDAfI02l47AUpomYZLgddLf','2017-04-16 17:18:04','2017-04-09 22:52:03',0,'214391662','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'8THa7bnt','',NULL,0),(1694,'Габдуллин Тимур','https://pp.userapi.com/c622116/v622116605/5079a/oVwE4rXnvIA.jpg','id170718605',0.00,0,'iyhfasG5NT2ks',NULL,0,0,'e9uvsZVsaAVwk19yzBPPy95gUrA9t2JGbvwRaT38rOxt6a6WuvOUpqBL0B7S','2017-04-16 17:18:06','2017-04-09 22:49:56',0,'170718605','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'eYrd5Ere','',NULL,0),(1695,'Krists Krists','https://pp.userapi.com/c630916/v630916998/4bed/ArHAnvv6x3Y.jpg','id337048378',96037.00,1,'46Nk3aABbr2DE',NULL,37,0,'mWLhWuLAdvt5n5pxDJ1INsnUqNVnXj28GhKkhrUgSMg8NwiVCGi85yW02MrB','2017-04-18 19:21:30','2017-04-18 23:21:30',1,'337048378','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'hRSs5rHy','',NULL,0),(1696,'Исаев Иван','https://pp.userapi.com/c622629/v622629867/439ea/lSZVcKzC2Nk.jpg','id293841867',9931.00,1,'iYYABezKz9ZtA',NULL,0,0,'92fMwEdenJY5bOy8oKNSI7VBwUJFBXEYwymY0rJbbXUX2y1T2ygISDOCYn6m','2017-04-12 15:02:26','2017-04-12 22:02:26',0,'293841867','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'hhGGy6Kb','',NULL,0),(1698,'Алексеев Никита','https://pp.userapi.com/c639817/v639817974/126a2/SwNLB3Lc-Bo.jpg','id12903974',3650.00,0,'26YfhrzQA9RhT',NULL,0,0,'GyAsfmPo9RgHtyTBcddDTeTw7fu0CSKvbiS6hfjbmXT35aURxbEjYCzt4kb0','2017-04-17 20:11:07','2017-04-18 00:11:07',0,'12903974','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'EaRZtHYA','',NULL,0),(1699,'Алексеев Данил','https://vk.com/images/camera_200.png','id371760471',0.00,0,'z66KfaYDEnSfA',NULL,0,0,'JSsul0WIVQs0cdmKR1fBUGvzTx6GMmVnD3YplLjQeQq7PUa26G5ECWIz4cew','2017-04-17 18:49:53','2017-04-17 22:49:53',0,'371760471','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'yyGNytyE','',NULL,0),(1700,'Курлович Алексей','https://pp.userapi.com/c836124/v836124469/51b4b/ke8Bip6NxPQ.jpg?ava=1','id137458469',999713.89,1,'88Sr3TdnDhhhh',NULL,60,0,'rSpsN19EMiJs09e7FoACSSaEwokycqC2PmhwGDph04mmnG2nQ54cR0k1XPyH','2018-11-26 17:26:21','2018-11-26 14:26:21',0,'137458469','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'Zds2EzyS','',NULL,0),(1701,'тестик','https://vk.com/images/camera_200.png','testlogin',0.00,0,'2Dhrfrys9iAY5',NULL,0,0,'u1KmYwJFeaJsFxEJN6BTUE0DNXNB1z3ncGAjrQ2ZfOQzHKd2yyjbq1YFM1zK','2018-10-15 18:33:53','2018-10-15 15:33:53',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'tGG2kD8h','',NULL,0),(1703,'1112','https://vk.com/images/camera_200.png','1112',0.00,0,'92eSiFTNi8Y5a',NULL,0,0,'1Yt6vdMpeYD3kiA3JrYwfTcGwLcMXDXOvA3QhzIEw7jL68PHe8wJZx0SyPT1','2018-10-15 19:02:20','2018-10-15 16:02:20',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'Z55fbtBE','',NULL,0),(1705,'111','https://vk.com/images/camera_200.png','111',80.00,0,'hHdfaNst77FsS',NULL,8,0,'VEAZxqIzEUUOECX8gVDtj3HG3Ko2JzXbFarHJZSP3fhfwjtvXzmbBYsRYeNm','2018-11-05 17:49:46','2018-11-05 14:49:46',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'7ifBBsD6','$2y$10$AzKRFEbolofzftIZ0hHQ1Oi3sA0wQe5TcERl.Txg1dmBDm/jgrNPa',NULL,0),(1706,'wda','https://vk.com/images/camera_200.png','12345',0.00,0,'rHsYrFyN8yKhQ',NULL,0,0,'eUdDpfJorWfsFVzSpw1wy74tjZZZnCZKuZwOAbmtjhU8m6f4XlU0Hch1f1vl','2018-10-30 16:43:46','2018-10-30 13:43:46',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'FeKk9DN9','$2y$10$FuR/S/6G5dYRnK1K8ZN84ePCMGNcbhr7xs2S4bgwHhcR4mgghxvk2','adsfadasdf23333sdf@mail.ru',0),(1707,'was','https://vk.com/images/camera_200.png','123456',0.00,0,'rTE3rH5bFabF6',NULL,0,0,'pEAQpGtqfaEhzDcyjKoStaFXYzNTSglXLkNhL1xVGJemhOQGxuTSedN7PeXq','2018-10-30 16:45:33','2018-10-30 13:45:33',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'SSH9SbbR','$2y$10$0fZBYkRoa7YfpoOZCgjjwurqKH2Oznd.Pxtx5wRjmseLwOUx0FsDG','12345fdsffsd267@gmail.com',0),(1708,'das','https://vk.com/images/camera_200.png','das2',0.00,0,'bHQt9EtGf54FQ',NULL,0,0,'JWjuc1VQwoOJ3Ib7pj0ilyN8LhmJLcnhPGaeKsCU68IY18IYNC3I7h1VR1zs','2018-11-01 18:39:09','2018-11-01 15:39:09',0,'','2016-11-08 19:43:23','2016-11-11 18:13:23',0,0,'',0,0,0,0,0,0,0,0,'Ri2shZHn','$2y$10$UKo7MidGpwT26.EzFuhoO.xjIeMH8MvbYiUGksYV2VZrzRZTq3/J2','kurlovich1998@gmail.com',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vivod`
--

DROP TABLE IF EXISTS `vivod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vivod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `nomer` varchar(244) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vivod`
--

LOCK TABLES `vivod` WRITE;
/*!40000 ALTER TABLE `vivod` DISABLE KEYS */;
/*!40000 ALTER TABLE `vivod` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-26 20:28:07
