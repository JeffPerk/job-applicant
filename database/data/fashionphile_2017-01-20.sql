# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.34)
# Database: fashionphile
# Generation Time: 2017-01-20 20:46:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table applicants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `applicants`;

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_letter` text COLLATE utf8_unicode_ci,
  `job_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_applicants_on_job_id` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;

INSERT INTO `applicants` (`id`, `name`, `email`, `website`, `cover_letter`, `job_id`, `created_at`, `updated_at`)
VALUES
	(1,'Russ Waters','torrance@brekke.co.uk','http://kihn.info','Vel magnam ut reprehenderit molestiae maiores tempore enim ea. Ad est ut amet explicabo debitis consectetur sapiente. Aut quis enim magni eum ab quaerat.',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(2,'Dakota Kautzer','stella.cartwright@quitzonmarquardt.info','http://oconnellboyer.ca','Fuga fugit quasi ut error culpa dolor id necessitatibus. Aperiam expedita ab adipisci. Laborum labore tenetur et autem in praesentium officia. Occaecati rerum autem recusandae eaque nam. Eaque corporis quis praesentium.',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(3,'Miss Cortez Hilpert','adan@dooleykshlerin.co.uk','http://wisozk.us','Pariatur molestias harum molestiae nihil voluptatibus totam. Repudiandae ut explicabo enim. Quae illo voluptatem eum. Dolor hic explicabo rem. Dolores sequi et id nesciunt tempora quae.',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(4,'Katarina Mills','cathrine@leschhettinger.ca','http://feestrempel.ca','Sed ea aut pariatur ad assumenda. Est libero quo veritatis cupiditate. Voluptatem non qui sed velit ipsum delectus aut eligendi. Dolorem eos et et ipsum sit facilis.',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(5,'Jordane Hilll IV','meredith@morarprice.uk','http://kriskuhlman.us','Ab porro nemo quam nesciunt. Necessitatibus asperiores labore quos. Veritatis recusandae omnis asperiores velit et consectetur est. Eligendi reprehenderit eius earum sed ratione asperiores quis. Accusamus rem asperiores aut autem.',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(6,'Kraig Oga','maribel@kochstrosin.name','http://kassulke.ca','Aliquid aspernatur dolores sequi eum dignissimos sit ea. Et incidunt eveniet consequatur eligendi et aut. Nihil voluptas iusto enim recusandae. Suscipit iste facere placeat et ducimus. Distinctio ut adipisci rerum optio officia.',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(7,'Hilbert Price','yasmine.hoppe@mclaughlin.biz','http://beahan.info','Omnis ut assumenda voluptates quisquam. Sed eum quia non culpa rem accusantium. Reiciendis sunt aut magnam. Adipisci repellat dicta consequatur sapiente non iste qui dolor.',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(8,'Mikel Murazik','aletha@schowalter.info','http://nitzsche.uk','Quidem saepe consequatur qui ex vero officia unde rem. Aut quas veniam dolorem. Eligendi fugit harum aut delectus ad dolorem maiores. Qui labore praesentium consequuntur eum ut modi. Et animi asperiores quo reprehenderit sint excepturi.',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(10,'Jeff Perkins','jeff.perk87@gmail.com','https://jeffreyperkins.me','This is a cover letter',1,'2017-01-20 19:02:34','2017-01-20 19:03:09');

/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Web Developer','2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(2,'Designer','2014-01-08 17:13:29','2014-01-08 17:13:29');

/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_01_17_235700_create_roles_table',1),
	(4,'2017_01_20_002038_create_applicants_table',1),
	(5,'2017_01_20_002614_create_jobs_table',1),
	(6,'2017_01_20_002722_create_skills_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_role_unique` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','2017-01-20 18:17:00','2017-01-20 18:17:00'),
	(2,'Applicant','2017-01-20 18:17:13','2017-01-20 18:17:13');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_skills_on_applicant_id` (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `name`, `applicant_id`, `created_at`, `updated_at`)
VALUES
	(1,'Java',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(2,'C',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(3,'C++',1,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(4,'Javascript',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(5,'C',2,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(6,'PHP',3,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(7,'C',4,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(8,'Python',4,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(9,'HTML',4,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(10,'Fireworks',5,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(11,'Fireworks',6,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(12,'Illustrator',7,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(13,'Fireworks',8,'2014-01-08 17:13:29','2014-01-08 17:13:29'),
	(17,'Javascript',10,'2017-01-20 19:03:09','2017-01-20 19:03:09'),
	(18,' Php',10,'2017-01-20 19:03:09','2017-01-20 19:03:09'),
	(19,' Java',10,'2017-01-20 19:03:09','2017-01-20 19:03:09'),
	(20,' C++',10,'2017-01-20 19:03:09','2017-01-20 19:03:09');

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '2',
  `applicant_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role_id`, `applicant_id`, `created_at`, `updated_at`)
VALUES
	(1,'Russ Waters','torrance@brekke.co.uk','$2y$10$7pUJHzIVFYbh8SIfA5EESezUCQYu2Ovj9.xLc/PxnrYFvF1bF8iQG','DGBUTlOF7H3B0kDNSbUoqrOOpiKFocHTeoUqXfu9NYMOMHGH9pVdTGMm6yfw',2,1,'2017-01-20 18:19:45','2017-01-20 20:17:42'),
	(2,'Dakota Kautzer','stella.cartwright@quitzonmarquardt.info','$2y$10$S8fEaraYqAYSGhfcZ5UCHOr3Vdunb1YEn.cbsdDaqfxh/DltimbeW',NULL,2,2,'2017-01-20 18:20:42','2017-01-20 18:20:42'),
	(3,'Miss Cortez Hilpert','adan@dooleykshlerin.co.uk','$2y$10$NpHP445w18S.VyA1Epqgu.I9H6ownZTnTEwI0U3fD6WA8WFQ0Naam',NULL,2,3,'2017-01-20 18:21:30','2017-01-20 18:21:30'),
	(4,'Katarina Mills','cathrine@leschhettinger.ca','$2y$10$8nUXYsjnWQWCkjtqn7mEteWHi0AG2Szsf9SD8jTM.PcP403YRB25m',NULL,2,4,'2017-01-20 18:22:13','2017-01-20 18:22:13'),
	(5,'Jordane Hilll IV','meredith@morarprice.uk','$2y$10$BmiHCKck51lxmRHdJ8PtVuw51sIiI.CbcVX3evQmG7Kigonh4Rpjm',NULL,2,5,'2017-01-20 18:23:02','2017-01-20 18:23:02'),
	(6,'Kraig Oga','maribel@kochstrosin.name','$2y$10$DLrnGZnlN53oiHQQJ3gmTenWi7qvzbsnkt0.Bbi0c9Ild3dYU/kBm',NULL,2,6,'2017-01-20 18:23:45','2017-01-20 18:23:45'),
	(7,'Hilbert Price','yasmine.hoppe@mclaughlin.biz','$2y$10$oEUt3trSc.jZ9GEpxnmIQOrV1prlqD2JPFcboA3nicFZhxl7Fb9Ne',NULL,2,7,'2017-01-20 18:24:36','2017-01-20 18:24:36'),
	(8,'Mikel Murazik','aletha@schowalter.info','$2y$10$pyRweuDFEiLr/Dz3AMuHD.cKG4hC.vfhxkdp/AsVXfCz.XlFP9xFC',NULL,2,8,'2017-01-20 18:25:19','2017-01-20 18:25:19'),
	(10,'Jeff Perkins','jeff.perk87@gmail.com','$2y$10$TkYq/0HgOOK98bV3yAzMM.tlb09pGb0eOmwlIElQ3QXwltJjsT0xu','c5vTuJ4rfcY1wG2tnotSk8hqRHvZAWiC9ZVGhEZCcCM9kx3uaqPYnMvnWQ6j',2,10,'2017-01-20 19:02:34','2017-01-20 19:07:10'),
	(12,'John Cena','cantseeme@cena.com','$2y$10$RbGJxWVyNRgGmoPNuuicQefDKBXy90Hi2V4zhZATz3hU/YC4wLWjC','NcTahwytlNSiRVduV6pvvrCPrx41tfiKo6YBQwJiVXnE8FIRuC3NP2jjEzGt',1,NULL,'2017-01-20 19:06:54','2017-01-20 20:42:46'),
	(13,'Jason Cole','jasoncole@sup.com','$2y$10$Eqav3oGnKCx8G4Ccfx47q.gObcJUfZBC8bquWJ9j1o/dTNfMG1EVi','1koDFMWA9qP6vf1SUZR6L1psn5sV25WpXEHDukaiy0cVAwSWzdTCMz1MYNRn',1,NULL,'2017-01-20 20:42:24','2017-01-20 20:43:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
