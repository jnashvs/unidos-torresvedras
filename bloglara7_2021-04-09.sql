# ************************************************************
# Sequel Pro SQL dump
# Vers�o 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Base de Dados: bloglara7
# Tempo de Gera��o: 2021-04-09 09:17:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump da tabela file_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `file_types`;

CREATE TABLE `file_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `directory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extensions` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `max_file_size` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `file_types` WRITE;
/*!40000 ALTER TABLE `file_types` DISABLE KEYS */;

INSERT INTO `file_types` (`id`, `directory`, `title`, `extensions`, `max_file_size`, `created_at`, `updated_at`)
VALUES
	(2,'sever','title','[{\"name\":\"image\\/png\",\"code\":\"png\"},{\"name\":\"application\\/xlsx\",\"code\":\"xlsx\"},{\"name\":\"application\\/pdf\",\"code\":\"pdf\"}]',2000,'2021-02-20 20:13:16','2021-02-20 20:13:16'),
	(3,'dir test','test title','[{\"name\":\"image\\/*\",\"code\":\"img\"}]',3333,'2021-02-21 00:03:42','2021-02-21 00:03:42');

/*!40000 ALTER TABLE `file_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `file_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_path_index` (`path`),
  KEY `files_file_type_id_index` (`file_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `path`, `width`, `height`, `size`, `file_type_id`, `created_at`, `updated_at`)
VALUES
	(17,'files/dir test/bVkfHTzjcN9DaVSV-Captura de ecrã 2021-04-07, às 11.05.36.png',NULL,NULL,0,3,'2021-04-07 10:36:53','2021-04-07 10:36:53'),
	(18,'files/dir test/BuCcUD6A6bprzE15-Captura de ecrã 2021-04-07, às 09.59.46.png',NULL,NULL,0,3,'2021-04-07 10:36:53','2021-04-07 10:36:53');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump da tabela users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Jjorge','jorge.silva@slingshot.pt',NULL,'$2y$10$uwZxTe/9wvLbSl19P8ZMeO7vfJInHlAnCxtnKFpa4NSeSh9dF1yeS',NULL,'2021-02-17 14:11:59','2021-02-17 14:11:59');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela wishes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wishes`;

CREATE TABLE `wishes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(350) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `freguesia` varchar(350) DEFAULT NULL,
  `email` varchar(350) DEFAULT NULL,
  `msg` text,
  `tipo` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wishes` WRITE;
/*!40000 ALTER TABLE `wishes` DISABLE KEYS */;

INSERT INTO `wishes` (`id`, `nome`, `data_nascimento`, `freguesia`, `email`, `msg`, `tipo`, `created_at`, `updated_at`)
VALUES
	(5,'Jorge Silva ttt','2021-04-16','União das Freguesias de Carvoeira e Carmões','jorge.silva@slingshot.pt','text by me',1,'2021-04-08 17:02:25','2021-04-08 17:02:25'),
	(6,'Jorge Maradona Varela Silva','2021-04-08','União das Freguesias de Carvoeira e Carmões','jnashvs@gmail.com','Teshssh fewre\newrewrewr\newrewrew',1,'2021-04-08 17:06:06','2021-04-08 17:06:06');

/*!40000 ALTER TABLE `wishes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
