-- MySQL dump 10.13  Distrib 8.0.19, for osx10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: development_shop
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'iPhone X 64GB','iphone_x_64','Отличный продвинутый телефон с памятью на 64 gb',NULL,71990,NULL,NULL),(2,1,'iPhone X 256GB','iphone_x_256','Отличный продвинутый телефон с памятью на 256 gb',NULL,89990,NULL,NULL),(3,1,'HTC One S','htc_one_s','Зачем платить за лишнее? Легендарный HTC One S',NULL,12490,NULL,NULL),(4,1,'iPhone 5SE','iphone_5se','Отличный классический iPhone',NULL,17221,NULL,NULL),(5,2,'Наушники Beats Audio','beats_audio','Отличный звук от Dr. Dre',NULL,20221,NULL,NULL),(6,2,'Камера GoPro','gopro','Снимай самые яркие моменты с помощью этой камеры',NULL,12000,NULL,NULL),(7,2,'Камера Panasonic HC-V770','panasonic_hc-v770','Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',NULL,27900,NULL,NULL),(8,3,'Кофемашина DeLongi','delongi','Хорошее утро начинается с хорошего кофе!',NULL,25200,NULL,NULL),(9,3,'Холодильник Haier','haier','Для большой семьи большой холодильник!',NULL,40200,NULL,NULL),(10,3,'Блендер Moulinex','moulinex','Для самых смелых идей',NULL,4200,NULL,NULL),(11,3,'Мясорубка Bosch','bosch','Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',NULL,9200,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-13 19:14:36
