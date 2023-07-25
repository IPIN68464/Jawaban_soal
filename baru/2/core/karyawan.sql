-- MySQL dump 10.17  Distrib 10.3.24-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: karyawan
-- ------------------------------------------------------
-- Server version	10.3.24-MariaDB-2

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
-- Table structure for table `I_ERROR_APPLICATION`
--

DROP TABLE IF EXISTS `I_ERROR_APPLICATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `I_ERROR_APPLICATION` (
  `ERROR_ID` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `ERROR_DATE` varchar(3) DEFAULT NULL,
  `MODULES` varchar(100) DEFAULT NULL,
  `CONTROLLER` varchar(200) DEFAULT NULL,
  `FUNCTION` varchar(200) DEFAULT NULL,
  `ERROR_LINE` varchar(30) DEFAULT NULL,
  `ERROR_MESSAGE` varchar(1000) DEFAULT NULL,
  `STATUS` varchar(30) DEFAULT NULL,
  `PARAM` varchar(300) DEFAULT NULL,
  `CREATE_DATE` varchar(30) DEFAULT NULL,
  `CREATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ERROR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `I_ERROR_APPLICATION`
--

LOCK TABLES `I_ERROR_APPLICATION` WRITE;
/*!40000 ALTER TABLE `I_ERROR_APPLICATION` DISABLE KEYS */;
/*!40000 ALTER TABLE `I_ERROR_APPLICATION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MENU`
--

DROP TABLE IF EXISTS `MENU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MENU` (
  `MENU_ID` varchar(3) NOT NULL,
  `ID_LEVEL` varchar(3) DEFAULT NULL,
  `MENU_NAME` varchar(300) DEFAULT NULL,
  `MENU_LINK` varchar(300) DEFAULT NULL,
  `MENU_ICON` varchar(300) DEFAULT NULL,
  `PARENT_ID` varchar(30) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` date DEFAULT NULL,
  PRIMARY KEY (`MENU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MENU`
--

LOCK TABLES `MENU` WRITE;
/*!40000 ALTER TABLE `MENU` DISABLE KEYS */;
/*!40000 ALTER TABLE `MENU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MENU_LEVEL`
--

DROP TABLE IF EXISTS `MENU_LEVEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MENU_LEVEL` (
  `ID_LEVEL` varchar(3) NOT NULL,
  `LEVEL` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID_LEVEL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MENU_LEVEL`
--

LOCK TABLES `MENU_LEVEL` WRITE;
/*!40000 ALTER TABLE `MENU_LEVEL` DISABLE KEYS */;
/*!40000 ALTER TABLE `MENU_LEVEL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MENU_USER`
--

DROP TABLE IF EXISTS `MENU_USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MENU_USER` (
  `NO_SETTING` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `MENU_ID` varchar(3) DEFAULT NULL,
  `CREATE_DATE` varchar(30) DEFAULT NULL,
  `CREATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`NO_SETTING`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MENU_USER`
--

LOCK TABLES `MENU_USER` WRITE;
/*!40000 ALTER TABLE `MENU_USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MENU_USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `ID_USER` varchar(30) NOT NULL,
  `NAMA_USER` varchar(60) DEFAULT NULL,
  `USERNAME` varchar(60) DEFAULT NULL,
  `PASSWORD` varchar(60) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `NO_HP` varchar(30) DEFAULT NULL,
  `WA` varchar(30) DEFAULT NULL,
  `PIN` varchar(30) DEFAULT NULL,
  `ID_JENIS_USER` varchar(3) DEFAULT NULL,
  `STATUS_USER` varchar(30) DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `FOTO` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` VALUES ('12345','root','root','root','root@yahoo.com','34342','5345','3434','1','non-aktif','1','root','2023-07-25 03:49:14','root','2023-07-25 03:49:14','../public/uploads/12345.png'),('34232','hejinma','hejin','hejin','hejinmal@gmail.com','3435','5345','34342','2','user','1','root','2023-07-25 05:40:37','hejin','2023-07-25 05:40:37','../public/uploads/34232.jpg'),('55555','hejinmal','hejinmal','hejinmal','hejinmal@gmail.com','3435','5345','34342','2','aktif','1','root','2023-07-25 05:42:25','hejin','2023-07-25 05:42:25','../public/uploads/55555.jpg');
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER_ACTIVITY`
--

DROP TABLE IF EXISTS `USER_ACTIVITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER_ACTIVITY` (
  `NO_ACTIVITY` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `DESCRIPSI` varchar(300) DEFAULT NULL,
  `STATUS` varchar(30) DEFAULT NULL,
  `MENU_ID` varchar(3) DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`NO_ACTIVITY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER_ACTIVITY`
--

LOCK TABLES `USER_ACTIVITY` WRITE;
/*!40000 ALTER TABLE `USER_ACTIVITY` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER_ACTIVITY` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-25 15:57:00
