-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `Comments`
--

DROP TABLE IF EXISTS `Comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comments` (
  `name` text,
  `comment` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comments`
--

LOCK TABLES `Comments` WRITE;
/*!40000 ALTER TABLE `Comments` DISABLE KEYS */;
INSERT INTO `Comments` VALUES ('John key','	The All Blacks kick it off for the first time at Trafalgar Park! Mo\'unga kicks off and sends it just outside the Pumas 22m, before they send it straight back into the All Blacks half.','John@key.com'),('Carl','Chur what a start to the game ✌😎🏈','carl@surf.com'),('Dave Morre','TRY! The Pumas are over for the first score. Ramiro Moyano had plenty of work to do on the left wing, but he was able to run around three defenders to go over untouched! Sanchez has converted and the Pumas are up 3-7!','All.b@co.nz'),('Ann Bell','😎🎉TRY! And the All Blacks hit back straight away. Nehe Milner-Skudder was left all by himself after the All Blacks forwrds drew in all the defence. Milner-Skudder simply had to catch the ball and run into the corner to dot it down. Mo\'unga has slotted a fine kick to put the All Blacks back in front 10-7.🏈','Anna.bell@gami.com'),('Bob','WHat a gone and what a try🏈👍🙌','bob@gmail.com'),('Official News','	No TRY! Moyano did so much work to try stay in touch, but TJ Perenara looks to have succeeded and put Moyano into touch. Just the smallest bit of his boot seems to have flicked just the slightest piece of grass and the try is denied!','Official@news.com'),('Mike','⏩4️⃣The Pumas are really giving it everything now. They\'re really testing the All Blacks but they\'re starting to look fatigued. They\'re back in the All Blacks half and they\'ll to get something here to stay in this match.🤷','mike@hotmail.com');
/*!40000 ALTER TABLE `Comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `fname` text,
  `emailU` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('bob','bob@gmail.nz','1234'),('Smeet','smeetprpatel@gmail.com','2468'),('John Cena','iAMXXX@wwe.com','wwe'),('Messi','realMessi@bfc.com','football'),('Ali','AliExpress@fast.com','1234567890'),('John Key','Forgot@yourKeys2high.com','national'),('Reebok','Reebok@Reebokint.com','cricket'),('Jean Lean','Jeanlean@mean.com','abcd'),('NASA','NASA@usa.com','space');
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

-- Dump completed on 2018-10-07 19:55:24
