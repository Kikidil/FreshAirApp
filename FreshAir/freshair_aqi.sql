-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: freshair
-- ------------------------------------------------------
-- Server version	5.7.12-log

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
-- Table structure for table `aqi`
--

DROP TABLE IF EXISTS `aqi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aqi` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `PM2.5` varchar(10) NOT NULL,
  `PM10` varchar(10) NOT NULL,
  `O3` varchar(10) NOT NULL,
  `S02` varchar(10) NOT NULL,
  `NO2` varchar(10) NOT NULL,
  `CO` varchar(10) NOT NULL,
  `Dew` varchar(10) NOT NULL,
  `Humidity` varchar(10) NOT NULL,
  `Wind` varchar(10) NOT NULL,
  `AQIval` varchar(255) NOT NULL,
  `AQIcat` varchar(255) NOT NULL,
  `Suburb` varchar(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aqi`
--

LOCK TABLES `aqi` WRITE;
/*!40000 ALTER TABLE `aqi` DISABLE KEYS */;
INSERT INTO `aqi` VALUES (1,'10','40','0.01','20','0.04','3.5','14.5','57','9','36','Good','Kelvin Grove','-27.44377663','153.0060133','2016-04-22'),(2,'10','40','0.01','20','0.04','3.5','14.5','57','9','36','Good','Kelvin Grove','-27.44377663','153.0060133','2016-04-23'),(3,'10','40','0.01','20','0.04','3.5','14.5','57','9','36','Good','Kelvin Grove','-27.44377663','153.0060133','2016-04-24'),(4,'30','149','0.06','40','0.059','5','14.5','57','9','97','Moderate','South Brisbane','-27.47278807','153.0171912','2016-04-25'),(5,'30','149','0.06','50','0.059','5.5','14.5','57','9','97','Moderate','South Brisbane','-27.47278807','153.0171912','2016-04-26'),(6,'45','249','0.08','77','0.105','9.9','14.5','57','9','147','Unhealthy for Sensitive Groups','Newmarket','-27.44014795','153.0024866','2016-04-27'),(7,'45','249','0.08','79','0.102','11','14.5','57','9','147','Unhealthy for Sensitive Groups','Newmarket','-27.44014795','153.0024866','2016-04-28'),(8,'45','249','0.08','79','0.103','12','14.5','57','9','147','Unhealthy for Sensitive Groups','Newmarket','-27.44014795','153.0024866','2016-04-29'),(9,'70','349','0.1','180','0.371','13','14.5','57','9','197','Unhealthy','Chermside West','-27.37957388','153.0195534','2016-04-30'),(10,'75','349','0.1','186','0.371','13.5','14.5','57','9','197','Unhealthy','Chermside West','-27.37957388','153.0195534','2016-05-01'),(11,'70','349','0.1','189','0.371','13.6','14.5','57','9','197','Unhealthy','Chermside West','-27.37957388','153.0195534','2016-05-02'),(12,'156','420','0.2','200','0.66','16','14.5','57','9','293','Very Unhealthy','West End','-27.48866421','152.9984336','2016-05-03'),(13,'155','420','0.2','200','0.66','16.5','14.5','57','9','293','Very Unhealthy','West End','-27.48866421','152.9984336','2016-05-04'),(14,'175','420','0.2','200','0.66','16','14.5','57','9','293','Very Unhealthy','West End','-27.48866421','152.9984336','2016-05-05'),(15,'170','420','0.2','200','0.66','16.5','14.5','57','9','293','Very Unhealthy','West End','-27.48866421','152.9984336','2016-05-06'),(16,'11','30','0.03','30','0.03','3.9','14.5','57','9','27','Good','Spring Hill','-27.46386586','153.0229528','2016-05-07'),(17,'11','30','0.03','30','0.03','3.9','14.5','57','9','27','Good','Spring Hill','-27.46386586','153.0229528','2016-05-08'),(18,'11','30','0.03','30','0.03','3.9','14.5','57','9','27','Good','Spring Hill','-27.46386586','153.0229528','2016-05-09'),(19,'14','30','0.03','30','0.03','3.9','14.5','57','9','27','Good','Spring Hill','-27.46386586','153.0229528','2016-05-10'),(20,'251','440','0.39','250','1.25','30.5','14.5','57','9','319','Hazardous','Kangaroo Point','-27.47637406','153.0415032','2016-05-11'),(21,'251','440','0.39','250','1.25','30.5','14.5','57','9','319','Hazardous','Kangaroo Point','-27.47637406','153.0415032','2016-05-12');
/*!40000 ALTER TABLE `aqi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `suburb` varchar(45) DEFAULT NULL,
  `sound_levels` varchar(45) DEFAULT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `humidity` varchar(45) DEFAULT NULL,
  `co` varchar(45) DEFAULT NULL,
  `no2` float DEFAULT NULL,
  `heartrate` float DEFAULT NULL,
  `latitude` decimal(11,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'CHERMSIDE','80','20','30','125',4,60,-27.38006149,153.03870050),(2,'GREENSLOPES','99','25','45','100',5,60,-27.50346312,153.04356360),(3,'VIRGINIA','70','27','44','80',4,80,-27.38441077,153.05584590),(4,'UPR MT GRAVATT','60','21','47','90',5,88,-27.54451364,153.08899220),(5,'CAMP HILL','60','20','50','95',6,90,-27.49972065,153.08583550),(6,'CARINDALE','60','24','44','110',6,85,-27.52201163,153.12048480),(7,'KARAWATHA','71','27','30','115',6,87,-27.62418129,153.09606880),(8,'ST LUCIA','50','28','33','125',6,60,-27.49916590,153.00795710),(9,'INALA','55','21','35','125',7,66,-27.60856987,152.96652320),(10,'TOOWONG','90','20','38','87',7.5,65,-27.47374527,152.97671570);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name_UNIQUE` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (2,'admin','admin','e10adc3949ba59abbe56e057f20f883e','admin'),(5,'Gustavo','Tatis','e10adc3949ba59abbe56e057f20f883e','gustavo_t28@hotmail.com');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mytable`
--

DROP TABLE IF EXISTS `mytable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mytable` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `AQI_Category_Range` varchar(255) DEFAULT NULL,
  `PM10_24hr` varchar(255) DEFAULT NULL,
  `PM25_24hr` varchar(255) DEFAULT NULL,
  `NO2_24hr` varchar(255) DEFAULT NULL,
  `O3_8hr` varchar(255) DEFAULT NULL,
  `CO_8hr` varchar(255) DEFAULT NULL,
  `SO2_24hr_NH3_24hr` varchar(255) DEFAULT NULL,
  `NH3_24hr` varchar(255) DEFAULT NULL,
  `Pb_24hr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mytable`
--

LOCK TABLES `mytable` WRITE;
/*!40000 ALTER TABLE `mytable` DISABLE KEYS */;
INSERT INTO `mytable` VALUES (1,'Good (0-50)','0-50','0-30','0-40','0-50','0-1.0','0-40','0-200','0-0.5'),(2,'Satisfactory (51-100)','51-100','31-60','41-80','51-100','1.1-2.0','41-80','201-400','0.5-1.0'),(3,'Moderately Polluted (101-200)','101-250','61-90','81-180','101-168','2.1-10','81-380','401-800','1.1-2.0'),(4,'Poor (201-300)','251-350','91-120','181-280','169-208','10-17','381-800','801-1200','2.1-3.0'),(5,'Very Poor (301-400)','351-430','121-250','281-400','209-748','17-34','801-1600','1200-1800','3.1-3.5'),(6,'Severe (401-500)','430+','250+','400+','748+','34+','1600+','1800+','3.5+');
/*!40000 ALTER TABLE `mytable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recievedsms`
--

DROP TABLE IF EXISTS `recievedsms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recievedsms` (
  `SMSTitle` char(255) DEFAULT NULL,
  `SMSMessage` char(255) DEFAULT NULL,
  `RecievedFrom` char(255) DEFAULT NULL,
  `RecievedIp` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recievedsms`
--

LOCK TABLES `recievedsms` WRITE;
/*!40000 ALTER TABLE `recievedsms` DISABLE KEYS */;
/*!40000 ALTER TABLE `recievedsms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tempmembers`
--

DROP TABLE IF EXISTS `tempmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tempmembers` (
  `first_name` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  PRIMARY KEY (`email_address`),
  UNIQUE KEY `user_name_UNIQUE` (`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tempmembers`
--

LOCK TABLES `tempmembers` WRITE;
/*!40000 ALTER TABLE `tempmembers` DISABLE KEYS */;
INSERT INTO `tempmembers` VALUES ('Gustavo','e10adc3949ba59abbe56e057f20f883e','gustavo_t28@hotmail.com');
/*!40000 ALTER TABLE `tempmembers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-11  9:18:26
