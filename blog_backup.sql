/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.0.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: blog_db
-- ------------------------------------------------------
-- Server version	12.0.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `analytics`
--

DROP TABLE IF EXISTS `analytics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `analytics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `visit_timestamp` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analytics`
--

LOCK TABLES `analytics` WRITE;
/*!40000 ALTER TABLE `analytics` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `analytics` VALUES
(1,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:39'),
(2,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:41'),
(3,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:41'),
(4,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:42'),
(5,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:42'),
(6,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:45'),
(7,'/blog/public/index.php?action=show_post&id=3','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:46'),
(8,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:47'),
(9,'/blog/public/index.php?action=show_post&id=6','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:48'),
(10,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:49'),
(11,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:49'),
(12,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:55'),
(13,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(14,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(15,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(16,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(17,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(18,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(19,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:02:56'),
(20,'/blog/public/index.php?action=analytics','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:10:27'),
(21,'/blog/public/index.php?action=contact','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:10:29'),
(22,'/blog/public/index.php?action=logout','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:10:31'),
(23,'/blog/public/index.php?action=login_form','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:10:31'),
(24,'/blog/public/index.php?action=list_posts','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:10:40'),
(25,'/blog/public/index.php?action=list_posts','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:16:53'),
(26,'/blog/public/index.php?page=architecture','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:16:54'),
(27,'/blog/public/index.php?page=database','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:17:10'),
(28,'/blog/public/index.php?page=database','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:19:21'),
(29,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:19:22'),
(30,'/blog/public/index.php?action=show_post&id=7','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:19:23'),
(31,'/blog/public/index.php?action=show_post&id=7','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:19:27'),
(32,'/blog/public/index.php?action=login_form','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:19:27'),
(33,'/blog/public/index.php?action=logout','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:12'),
(34,'/blog/public/index.php?action=login_form','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:12'),
(35,'/blog/public/index.php?action=register_form','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:13'),
(36,'/blog/public/index.php?action=login_form','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:25'),
(37,'/blog/public/index.php?action=list_posts','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:34'),
(38,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:37'),
(39,'/blog/public/index.php?action=new_post','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:21:39'),
(40,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:23:21'),
(41,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:24:46'),
(42,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:24:54'),
(43,'/blog/public/index.php?action=new_post','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:25:00'),
(44,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:25:29'),
(45,'/blog/public/index.php?action=show_post&id=2','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:25:38'),
(46,'/blog/public/index.php?page=database','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:25:46'),
(47,'/blog/public/index.php?action=admin','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','2025-09-01 19:28:23');
/*!40000 ALTER TABLE `analytics` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `posts` VALUES
(1,'My First Post','This is the content of my very first blog post. Welcome! a','2025-09-01 10:32:05',1),
(2,'Learning PHP','I am learning how to build a web application with PHP and a database. It is a great experience.','2025-09-01 10:32:05',1),
(3,'El Generico','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et ex mattis augue accumsan sollicitudin. Duis congue lectus ut nunc eleifend rutrum. Nam id fermentum mi. Duis aliquam magna in aliquet pulvinar. Donec vel dictum lacus. Fusce consequat orci accumsan pretium placerat. Sed mollis lobortis dui, sed vehicula purus facilisis sed. Mauris convallis tristique tortor, vitae faucibus tortor laoreet sit amet. Curabitur et finibus arcu. Praesent mollis commodo tellus eget faucibus.\r\n\r\nDuis rutrum massa nec lacus fermentum consequat. Curabitur ut enim sit amet lorem dignissim euismod et ac massa. Mauris lorem nulla, malesuada sit amet mi imperdiet, semper dignissim orci. Donec placerat metus quis interdum posuere. Proin congue diam justo, at dignissim eros dictum a. Nunc in dictum metus, vel blandit sem. Vivamus posuere est vel tortor fermentum rutrum. Sed elementum pulvinar ante, eget faucibus quam fringilla non. Etiam quis finibus massa.\r\n\r\nInteger laoreet leo quis lacus fermentum, in dapibus eros placerat. Sed mollis, neque quis consectetur ornare, sem urna vestibulum elit, a auctor nisi elit in dolor. Sed a felis at quam auctor feugiat. Aliquam condimentum erat sit amet tortor luctus sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a sapien dui. Nam in imperdiet tortor. Praesent fermentum efficitur rutrum. Nam velit justo, commodo et enim sit amet, auctor imperdiet quam. Mauris pulvinar lectus ut turpis consequat tempor. Mauris porta ac odio sed lacinia. Nunc lobortis, lacus sit amet viverra ultricies, ipsum tortor luctus magna, eu maximus augue orci id metus. Ut vehicula sit amet magna id pellentesque.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque imperdiet auctor congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut vulputate nulla. Sed finibus dictum quam nec efficitur. Phasellus consequat augue in nisi iaculis volutpat. Nulla ac nunc dictum, commodo velit sed, elementum nunc. Quisque fringilla vulputate feugiat. In rutrum sollicitudin erat eu facilisis. Vivamus laoreet lorem magna, in malesuada quam posuere id. Mauris pellentesque mauris at metus cursus vulputate. Quisque hendrerit, mauris ac maximus elementum, arcu ante rutrum massa, et sollicitudin metus massa non felis.\r\n\r\nDonec congue aliquam turpis. Cras elementum sem id mauris consequat, quis porta leo tincidunt. Suspendisse efficitur rutrum commodo. Morbi vel dolor venenatis, volutpat tortor eu, convallis leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla rhoncus, ante at interdum varius, mi est finibus enim, a dictum dolor orci sed felis. Suspendisse porta eleifend magna. Donec sed volutpat dolor. Integer vitae ex at turpis vestibulum suscipit vitae sit amet risus. Etiam erat lectus, rhoncus eu augue in, vehicula consectetur odio. Sed bibendum commodo tortor, id tempor ante convallis quis. Phasellus malesuada diam nec neque pulvinar, vel dictum ex molestie. Phasellus et augue et felis cursus efficitur. Nullam ac dui efficitur, blandit mi sit amet, luctus arcu. Praesent congue arcu id tellus suscipit feugiat. Nulla rhoncus facilisis lectus sed lacinia.','2025-09-01 12:48:59',1),
(6,'a','a','2025-09-01 15:00:39',4),
(7,'b','b','2025-09-01 15:01:30',2),
(8,'MANIFESTO','THIS NGO IS VERY COOL AND HELPS BILLIONS OF PEOPLE EVERY YEAR. JOIN THE CAUSE TODAY. SEND A CONTACT MESSAGE ON THE BUTTON ON THE TOP OF THE PAGE.','2025-09-01 19:25:29',7);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','writer','reader') NOT NULL DEFAULT 'reader',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `users` VALUES
(1,'admin','$2y$12$MGAMulKiEtTo4V/Y2BNtjuk7TdCqC7aUgLTAFpQOaL50gCSJNn8qS','admin'),
(2,'[deleted]','N/A','reader'),
(3,'alex_reader','$2y$12$d1BavJUq0tZOCi0KdVSyiulAUOLkbFeM.4uPHep4I2GY51XMAuxS.','reader'),
(4,'alex_writer','$2y$12$OSNGPRt6NWJCjz.TI8uWL.ZTZdaQNRbq/vjcACAuqr3KhLKWGIEf6','writer'),
(7,'writer','$2y$12$9J7jIk7mLcUW/.lLUaONY.YCgTPLRwwCvSZidjQ2JZBnYfcuPkUZe','writer');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
commit;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-09-01 22:31:07
