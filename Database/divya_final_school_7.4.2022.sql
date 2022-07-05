-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: final_school
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,100,'Get Projects','Get Projects','Male','Chandigarh INDIA','111-111-1114','admin@getprojects.org','uploads/20220414010104.png','2018-01-10');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timetable_id` int(11) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignment`
--

LOCK TABLES `assignment` WRITE;
/*!40000 ALTER TABLE `assignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversation_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `sender_index` bigint(11) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `receiver_index` bigint(11) NOT NULL,
  `receiver_type` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `_isread` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_room`
--

DROP TABLE IF EXISTS `class_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `student_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_room`
--

LOCK TABLES `class_room` WRITE;
/*!40000 ALTER TABLE `class_room` DISABLE KEYS */;
INSERT INTO `class_room` VALUES (18,'Class A',750),(19,'Class B',500),(20,'Class C',850),(21,'Class D',1000),(22,'Class E',1200);
/*!40000 ALTER TABLE `class_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_category`
--

DROP TABLE IF EXISTS `event_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_category`
--

LOCK TABLES `event_category` WRITE;
/*!40000 ALTER TABLE `event_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_category_type`
--

DROP TABLE IF EXISTS `event_category_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_category_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_category_type`
--

LOCK TABLES `event_category_type` WRITE;
/*!40000 ALTER TABLE `event_category_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_category_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `grade_id` varchar(255) NOT NULL,
  `create_by` bigint(11) NOT NULL,
  `creator_type` varchar(255) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (4,'Term 1'),(5,'Term 2'),(6,'Term 3'),(8,'Annual Exam');
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_range_grade`
--

DROP TABLE IF EXISTS `exam_range_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_range_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_id` int(11) NOT NULL,
  `mark_range` varchar(255) NOT NULL,
  `_from` int(11) NOT NULL,
  `_to` int(11) NOT NULL,
  `mark_grade` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_range_grade`
--

LOCK TABLES `exam_range_grade` WRITE;
/*!40000 ALTER TABLE `exam_range_grade` DISABLE KEYS */;
INSERT INTO `exam_range_grade` VALUES (51,11,'0-35',0,35,'F'),(52,11,'35-45',35,45,'S'),(53,11,'45-55',45,55,'C'),(54,11,'55-75',55,75,'B'),(55,11,'75-85',75,85,'A'),(56,11,'85-100',85,100,'A+'),(57,12,'0-35',0,35,'F'),(58,12,'35-45',35,45,'S'),(59,12,'45-55',45,55,'C'),(60,12,'55-75',55,75,'B'),(61,12,'75-85',75,85,'A'),(62,12,'85-100',85,100,'A+'),(63,13,'0-35',0,35,'F'),(64,13,'35-45',35,45,'S'),(65,13,'45-55',45,55,'C'),(66,13,'55-75',55,75,'B'),(67,13,'75-85',75,85,'A'),(68,13,'85-100',85,100,'A+');
/*!40000 ALTER TABLE `exam_range_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_timetable`
--

DROP TABLE IF EXISTS `exam_timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_date` date NOT NULL,
  `grade_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `start_time` double(11,2) NOT NULL,
  `end_time` double(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_timetable`
--

LOCK TABLES `exam_timetable` WRITE;
/*!40000 ALTER TABLE `exam_timetable` DISABLE KEYS */;
INSERT INTO `exam_timetable` VALUES (23,'2022-06-24',11,4,'Sunday',15,18,2.00,5.00),(25,'2022-06-14',13,5,'Sunday',17,18,2.00,5.00),(26,'2022-06-16',11,4,'Sunday',16,18,2.00,3.00);
/*!40000 ALTER TABLE `exam_timetable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `admission_fee` double(11,2) NOT NULL,
  `hall_charge` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` VALUES (11,'class1 ',1000.00,25),(12,'Grade 2',1000.00,25),(13,'Grade 3',1000.00,25);
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_message`
--

DROP TABLE IF EXISTS `group_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversation_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender_index` bigint(11) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_message`
--

LOCK TABLES `group_message` WRITE;
/*!40000 ALTER TABLE `group_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_notifications`
--

DROP TABLE IF EXISTS `main_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `_isread` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_notifications`
--

LOCK TABLES `main_notifications` WRITE;
/*!40000 ALTER TABLE `main_notifications` DISABLE KEYS */;
INSERT INTO `main_notifications` VALUES (1,1,'Payments',2017,'November','2017-11-25',1);
/*!40000 ALTER TABLE `main_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_friends`
--

DROP TABLE IF EXISTS `my_friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_index` bigint(11) NOT NULL,
  `friend_index` bigint(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `my_type` varchar(255) NOT NULL,
  `friend_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_friends`
--

LOCK TABLES `my_friends` WRITE;
/*!40000 ALTER TABLE `my_friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_history`
--

DROP TABLE IF EXISTS `notification_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_history`
--

LOCK TABLES `notification_history` WRITE;
/*!40000 ALTER TABLE `notification_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online_chat`
--

DROP TABLE IF EXISTS `online_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversation_id` int(11) NOT NULL,
  `user_index` bigint(11) NOT NULL,
  `msg` longtext NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online_chat`
--

LOCK TABLES `online_chat` WRITE;
/*!40000 ALTER TABLE `online_chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `online_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` varchar(255) NOT NULL,
  `my_son_index` bigint(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `reg_date` date NOT NULL,
  `reg_year` year(4) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parents`
--

LOCK TABLES `parents` WRITE;
/*!40000 ALTER TABLE `parents` DISABLE KEYS */;
INSERT INTO `parents` VALUES (7,'G-11',11,'Dad 1','Dad 1','Male','USA','(111) 111-1112','dad1@gmail.com','uploads/20220414010229.jpg','1965-08-25','2017-11-24',2017,'November',''),(8,'G-12',12,'Dad 2','Dad 2','Male','USA','(222) 222-2222','dad2@gmail.com','uploads/20220414010229.jpg','1968-05-10','2017-11-24',2017,'November',''),(9,'G-13',13,'Dad 3','Dad 3','Male','USA','(333) 333-3333','dad3@gmail.com','uploads/20220414010229.jpg','1965-05-28','2017-11-24',2017,'November',''),(12,'G-14',14,'Dad 4','Dad 4','Male','USA','(444) 444-4444','dad4@gmail.com','uploads/20220414010229.jpg','1964-08-25','2017-11-24',2017,'November',''),(13,'G-25252525',25252525,'Dad 1','Dad 154444444','Male','Sri Lankaklkklklkk','555-555-5555','dad1hgjhjhjhj23@gmail.com','uploads/20220414010229.jpg','0000-00-00','2018-02-04',2018,'February','');
/*!40000 ALTER TABLE `parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_notifications`
--

DROP TABLE IF EXISTS `payment_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `_status` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_notifications`
--

LOCK TABLES `payment_notifications` WRITE;
/*!40000 ALTER TABLE `payment_notifications` DISABLE KEYS */;
INSERT INTO `payment_notifications` VALUES (1,11,2017,'November','2017-11-25',1);
/*!40000 ALTER TABLE `payment_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petty_cash`
--

DROP TABLE IF EXISTS `petty_cash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petty_cash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `received_by` bigint(11) NOT NULL,
  `approved_by` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `paid` double(11,2) NOT NULL,
  `received_type` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petty_cash`
--

LOCK TABLES `petty_cash` WRITE;
/*!40000 ALTER TABLE `petty_cash` DISABLE KEYS */;
/*!40000 ALTER TABLE `petty_cash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petty_cash_history`
--

DROP TABLE IF EXISTS `petty_cash_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petty_cash_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_desc` varchar(255) NOT NULL,
  `received_by` bigint(11) NOT NULL,
  `approved_by` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `amount` double(11,2) NOT NULL,
  `total_paid` double(11,2) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `received_type` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petty_cash_history`
--

LOCK TABLES `petty_cash_history` WRITE;
/*!40000 ALTER TABLE `petty_cash_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `petty_cash_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `_status` varchar(255) NOT NULL,
  `reg_year` year(4) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (11,11,'Student 1','Student 1jbjb','Female','USA','111-111-1112','std1@gmail.com','uploads/20220414125856.png','2010-01-01','',2017,'November','2017-11-24'),(12,12,'Student 2','Student 20','Male','USA','(222) 222-2222','std2@gmail.com','uploads/20220414125856.png','2010-01-02','',2017,'November','2017-11-24'),(13,13,'Student 3','Student 3','Female','USA','(333) 333-3333','std3@gmail.com','uploads/20220414125856.png','2010-01-03','',2017,'November','2017-11-24'),(19,14,'Student 4','Student 4','Female','USA','(444) 444-4444','std4@gmail.com','uploads/20220414125856.png','2010-01-04','',2017,'November','2017-11-24'),(67,15,'Charlie','s','Female','Bangalore','9620148853','charlie@gmail.com','','2022-06-28','',2020,'August','2022-07-27'),(68,16,'minu','s','Female','Bangalore','9620148853','minu@gmail.com','','0000-00-00','',2020,'August','0000-00-00'),(69,17,'vinay','m','Male','Kengeri','9620148852','vinay@gmail.com','','0000-00-00','',2020,'Sep','0000-00-00'),(70,18,'maitra','n','Female','RR Nagar','9620148853','maitra@gmail.com','','0000-00-00','',2020,'Oct','0000-00-00'),(71,19,'ashwini','v','Female','PP layout','9620148854','ashwini@gmail.com','','0000-00-00','',2020,'Nov','0000-00-00'),(72,20,'tejas','k','Male','RR Nagar','9620148855','tejas@gmail.com','','0000-00-00','',2020,'Dec','0000-00-00');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_attendance`
--

DROP TABLE IF EXISTS `student_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `time` time NOT NULL,
  `_status1` varchar(255) NOT NULL,
  `_status2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_attendance`
--

LOCK TABLES `student_attendance` WRITE;
/*!40000 ALTER TABLE `student_attendance` DISABLE KEYS */;
INSERT INTO `student_attendance` VALUES (1,11,'2017-11-25','November',2017,'11:30:59','intime','Present');
/*!40000 ALTER TABLE `student_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_exam`
--

DROP TABLE IF EXISTS `student_exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_exam`
--

LOCK TABLES `student_exam` WRITE;
/*!40000 ALTER TABLE `student_exam` DISABLE KEYS */;
INSERT INTO `student_exam` VALUES (57,11,11,4,15,'40',2022,'2022-06-27'),(59,12,11,4,15,'100',2022,'2022-06-28'),(60,13,11,4,15,'45',2022,'2022-06-28'),(61,14,11,4,15,'45',2022,'2022-06-28'),(62,15,11,4,15,'60',2022,'0000-00-00'),(63,16,11,4,15,'70',2022,'0000-00-00'),(64,17,11,4,15,'80',2022,'0000-00-00'),(65,18,11,4,15,'90',2022,'0000-00-00'),(66,19,11,4,15,'95',2022,'0000-00-00'),(67,20,11,4,15,'98',2022,'0000-00-00');
/*!40000 ALTER TABLE `student_exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_grade`
--

DROP TABLE IF EXISTS `student_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_grade`
--

LOCK TABLES `student_grade` WRITE;
/*!40000 ALTER TABLE `student_grade` DISABLE KEYS */;
INSERT INTO `student_grade` VALUES (81,11,11,2022),(82,12,11,2017),(83,13,11,2017),(86,14,11,2017),(111,15,11,2020),(112,16,11,2020),(113,17,11,2020),(114,18,11,2020),(115,19,11,2020),(116,20,11,2020);
/*!40000 ALTER TABLE `student_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_payment`
--

DROP TABLE IF EXISTS `student_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `student_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_payment`
--

LOCK TABLES `student_payment` WRITE;
/*!40000 ALTER TABLE `student_payment` DISABLE KEYS */;
INSERT INTO `student_payment` VALUES (225,11,2017,'November','2017-11-24',1000.00,'Admission Fee',''),(226,11,2017,'November','2017-11-24',1500.00,'Monthly Fee1',''),(227,12,2017,'November','2017-11-24',1000.00,'Admission Fee',''),(228,12,2017,'November','2017-11-24',1500.00,'Monthly Fee1',''),(229,13,2017,'November','2017-11-24',1000.00,'Admission Fee',''),(230,13,2017,'November','2017-11-24',1500.00,'Monthly Fee1',''),(234,14,2017,'November','2017-11-24',1500.00,'Monthly Fee1',''),(235,25252525,2018,'February','2018-02-04',1000.00,'Admission Fee',''),(236,25252525,2018,'February','2018-02-04',1500.00,'Monthly Fee1','');
/*!40000 ALTER TABLE `student_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_payment_history`
--

DROP TABLE IF EXISTS `student_payment_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_payment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_fee` double(11,2) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=624 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_payment_history`
--

LOCK TABLES `student_payment_history` WRITE;
/*!40000 ALTER TABLE `student_payment_history` DISABLE KEYS */;
INSERT INTO `student_payment_history` VALUES (582,11,11,15,10,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(583,11,11,16,11,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(584,11,11,17,12,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(585,11,11,18,13,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(586,11,11,19,14,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(587,11,11,20,15,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',1),(588,12,11,15,10,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(589,12,11,16,11,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(590,12,11,17,12,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(591,12,11,18,13,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(592,12,11,19,14,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(593,12,11,20,15,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',227),(594,13,11,15,10,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(595,13,11,16,11,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(596,13,11,17,12,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(597,13,11,18,13,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(598,13,11,19,14,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(599,13,11,20,15,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',229),(612,14,11,15,10,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(613,14,11,16,11,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(614,14,11,17,12,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(615,14,11,18,13,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(616,14,11,19,14,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(617,14,11,20,15,250.00,250.00,'Monthly Fee','November',2017,'2017-11-24',231),(618,25252525,11,15,10,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235),(619,25252525,11,16,11,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235),(620,25252525,11,17,12,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235),(621,25252525,11,18,13,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235),(622,25252525,11,19,14,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235),(623,25252525,11,20,15,250.00,250.00,'Monthly Fee','February',2018,'2018-02-04',235);
/*!40000 ALTER TABLE `student_payment_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_subject`
--

DROP TABLE IF EXISTS `student_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `sr_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_subject`
--

LOCK TABLES `student_subject` WRITE;
/*!40000 ALTER TABLE `student_subject` DISABLE KEYS */;
INSERT INTO `student_subject` VALUES (201,11,'',17,2022,''),(202,11,'',18,2022,''),(203,11,'',19,2022,''),(204,11,'',20,2022,''),(205,11,'',21,2022,''),(206,11,'',22,2022,''),(207,12,'',17,2022,''),(208,12,'',18,2022,''),(209,12,'',19,2022,''),(210,12,'',20,2022,''),(211,12,'',21,2022,''),(212,12,'',22,2022,''),(213,13,'',17,2022,''),(214,13,'',18,2022,''),(215,13,'',19,2022,''),(216,13,'',20,2022,''),(217,13,'',21,2022,''),(218,13,'',22,2022,''),(231,14,'',17,2022,''),(232,14,'',18,2022,''),(233,14,'',19,2022,''),(234,14,'',20,2022,''),(235,14,'',21,2022,''),(236,14,'',22,2022,''),(237,25252525,'',17,2022,''),(238,25252525,'',18,2022,''),(239,25252525,'',19,2022,''),(240,25252525,'',20,2022,''),(241,25252525,'',21,2022,''),(242,25252525,'',22,2022,''),(244,15,'',17,2022,''),(247,16,'',17,2022,''),(251,20,'',17,2022,''),(254,18,'',17,2022,''),(255,17,'',17,2022,''),(256,19,'',17,2022,'');
/*!40000 ALTER TABLE `student_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (15,'Subject 1'),(16,'Subject 2'),(17,'Subject 3'),(18,'Subject 4'),(19,'Subject 5'),(20,'Subject 6');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_routing`
--

DROP TABLE IF EXISTS `subject_routing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_routing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `fee` double(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_routing`
--

LOCK TABLES `subject_routing` WRITE;
/*!40000 ALTER TABLE `subject_routing` DISABLE KEYS */;
INSERT INTO `subject_routing` VALUES (17,11,15,10,250.00),(18,11,16,11,250.00),(19,11,17,12,250.00),(20,11,18,13,250.00),(21,11,19,14,250.00),(22,11,20,15,250.00),(23,12,15,10,350.00),(24,12,16,11,350.00),(25,12,17,12,350.00),(26,12,18,13,350.00),(27,12,19,14,350.00),(28,12,20,15,350.00),(29,13,15,10,400.00),(30,13,16,11,400.00),(31,13,17,12,400.00),(32,13,18,13,400.00),(33,13,19,14,400.00),(34,13,20,15,400.00);
/*!40000 ALTER TABLE `subject_routing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (10,'Teacher 1','Teacher 1fdsfhdfgdh','Male','Schoolfdgsfg','111-111-1111','t1@gmail.com','uploads/20220414125105.png',1,'2017-11-24'),(11,'Teacher 2','Teacher 2','Female','School','222-222-2222','t2@gmail.com','uploads/20220414125105.png',2,'2017-11-24'),(12,'Teacher 3','Teacher 3','Female','School','333-333-3333','t3@gmail.com','uploads/20220414125105.png',3,'2017-11-24'),(13,'Teacher 4','Teacher 4','Male','School','444-444-4444','t4@gmail.com','uploads/20220414125105.png',4,'2017-11-24'),(14,'Teacher 5','Teacher 5','Male','School','555-555-5555','t5@gmail.com','uploads/20220414125105.png',5,'2017-11-24'),(15,'Teacher 6','Teacher 6','Male','School','666-666-6666','t6@gmail.com','uploads/20220414125105.png',6,'2017-11-24'),(16,'Madhu','K','Male','Bangalore','123-456-7890','123@gmail.com','uploads/20220617052213.jpg',123,'2022-06-17');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_attendance`
--

DROP TABLE IF EXISTS `teacher_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `time` time NOT NULL,
  `_status1` varchar(255) NOT NULL,
  `_status2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_attendance`
--

LOCK TABLES `teacher_attendance` WRITE;
/*!40000 ALTER TABLE `teacher_attendance` DISABLE KEYS */;
INSERT INTO `teacher_attendance` VALUES (1,123,'2022-06-17','June',2022,'05:25:31','intime','Present');
/*!40000 ALTER TABLE `teacher_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_salary`
--

DROP TABLE IF EXISTS `teacher_salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_salary`
--

LOCK TABLES `teacher_salary` WRITE;
/*!40000 ALTER TABLE `teacher_salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_salary_history`
--

DROP TABLE IF EXISTS `teacher_salary_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_salary_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` bigint(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_fee` double(11,2) NOT NULL,
  `student_count` int(11) NOT NULL,
  `hall_charge` int(11) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_salary_history`
--

LOCK TABLES `teacher_salary_history` WRITE;
/*!40000 ALTER TABLE `teacher_salary_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_salary_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `time_date` date NOT NULL,
  `start_time` double(11,2) NOT NULL,
  `end_time` double(11,2) NOT NULL,
  `meeting_link` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timetable`
--

LOCK TABLES `timetable` WRITE;
/*!40000 ALTER TABLE `timetable` DISABLE KEYS */;
INSERT INTO `timetable` VALUES (101,11,'Monday',15,10,18,'2022-07-04',9.00,10.00,'','../uploads/test.docx',''),(102,11,'Friday',15,10,20,'2022-06-30',1.00,2.00,'','','');
/*!40000 ALTER TABLE `timetable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (29,'admin@getprojects.org','12345','Admin'),(47,'t1@gmail.com','12345','Teacher'),(48,'t2@gmail.com','12345','Teacher'),(49,'t3@gmail.com','12345','Teacher'),(50,'t4@gmail.com','12345','Teacher'),(51,'t5@gmail.com','12345','Teacher'),(52,'t6@gmail.com','12345','Teacher'),(53,'std1@gmail.com','12345','Student'),(54,'dad1@gmail.com','12345','Parents'),(55,'std2@gmail.com','12345','Student'),(56,'dad2@gmail.com','12345','Parents'),(57,'std3@gmail.com','12345','Student'),(58,'dad3@gmail.com','12345','Parents'),(59,'std4@gmail.com','12345','Student'),(61,'std4@gmail.com','12345','Student'),(63,'std4@gmail.com','12345','Student'),(64,'std4@gmail.com','12345','Student'),(66,'std4@gmail.com','12345','Student'),(67,'dad4@gmail.com','12345','Parents'),(69,'dad123@gmail.com','12345','Parents'),(70,'lkforex2015111@gmail.com','12345','Student'),(71,'123@gmail.com','12345','Teacher');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-04 22:10:19
