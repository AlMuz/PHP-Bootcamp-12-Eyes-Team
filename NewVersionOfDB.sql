# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.2.7-MariaDB)
# Database: twelveeyes
# Generation Time: 2017-08-02 12:05:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`category_id`, `title`, `description`, `created_at`)
VALUES
  (1,'Sport','You able to find all sport news in this category','2017-07-27 02:07:55'),
  (2,'Politic','You able to find all politic news in this category','2017-07-27 02:08:32'),
  (3,'Web','You able to find all web news in this category','2017-07-27 02:08:49'),
  (4,'PHP','All php news will be here','2017-07-27 02:09:12');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `body` blob DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`comment_id`, `news_id`, `author`, `body`, `created_at`)
VALUES
  (1,1,'Commentator 1',X'57686174206973204C6F72656D20497073756D3F0A4C6F72656D20497073756D2069732073696D706C792064756D6D792074657874206F6620746865207072696E74696E6720616E64207479706573657474696E6720696E6475737472792E204C6F72656D20497073756D20686173206265656E2074686520696E6475737472792773207374616E646172642064756D6D79207465787420657665722073696E6365207468652031353030732C207768656E20616E20756E6B6E6F776E207072696E74657220746F6F6B20612067616C6C6579206F66207479706520616E6420736372616D626C656420697420746F206D616B65206120747970652073706563696D656E20626F6F6B2E20497420686173207375727669766564206E6F74206F6E6C7920666976652063656E7475726965732C2062757420616C736F20746865206C65617020696E746F20656C656374726F6E6963207479706573657474696E672C2072656D61696E696E6720657373656E7469616C6C7920756E6368616E6765642E2049742077617320706F70756C61726973656420696E207468652031393630732077697468207468652072656C65617365206F66204C657472617365742073686565747320636F6E7461696E696E67204C6F72656D20497073756D2070617373616765732C20616E64206D6F726520726563656E746C792077697468206465736B746F70207075626C697368696E6720736F667477617265206C696B6520416C64757320506167654D616B657220696E636C7564696E672076657273696F6E73206F66204C6F72656D20497073756D2E','2017-07-27 00:00:00'),
  (2,2,'Commentator 2',X'57686174206973204C6F72656D20497073756D3F0A4C6F72656D20497073756D2069732073696D706C792064756D6D792074657874206F6620746865207072696E74696E6720616E64207479706573657474696E6720696E6475737472792E204C6F72656D20497073756D20686173206265656E2074686520696E6475737472792773207374616E646172642064756D6D79207465787420657665722073696E6365207468652031353030732C207768656E20616E20756E6B6E6F776E207072696E74657220746F6F6B20612067616C6C6579206F66207479706520616E6420736372616D626C656420697420746F206D616B65206120747970652073706563696D656E20626F6F6B2E20497420686173207375727669766564206E6F74206F6E6C7920666976652063656E7475726965732C2062757420616C736F20746865206C65617020696E746F20656C656374726F6E6963207479706573657474696E672C2072656D61696E696E6720657373656E7469616C6C7920756E6368616E6765642E2049742077617320706F70756C61726973656420696E207468652031393630732077697468207468652072656C65617365206F66204C657472617365742073686565747320636F6E7461696E696E67204C6F72656D20497073756D2070617373616765732C20616E64206D6F726520726563656E746C792077697468206465736B746F70207075626C697368696E6720736F667477617265206C696B6520416C64757320506167654D616B657220696E636C7564696E672076657273696F6E73206F66204C6F72656D20497073756D2E','2017-07-27 00:00:00'),
  (3,3,'Commentator 3',X'57686174206973204C6F72656D20497073756D3F0A4C6F72656D20497073756D2069732073696D706C792064756D6D792074657874206F6620746865207072696E74696E6720616E64207479706573657474696E6720696E6475737472792E204C6F72656D20497073756D20686173206265656E2074686520696E6475737472792773207374616E646172642064756D6D79207465787420657665722073696E6365207468652031353030732C207768656E20616E20756E6B6E6F776E207072696E74657220746F6F6B20612067616C6C6579206F66207479706520616E6420736372616D626C656420697420746F206D616B65206120747970652073706563696D656E20626F6F6B2E20497420686173207375727669766564206E6F74206F6E6C7920666976652063656E7475726965732C2062757420616C736F20746865206C65617020696E746F20656C656374726F6E6963207479706573657474696E672C2072656D61696E696E6720657373656E7469616C6C7920756E6368616E6765642E2049742077617320706F70756C61726973656420696E207468652031393630732077697468207468652072656C65617365206F66204C657472617365742073686565747320636F6E7461696E696E67204C6F72656D20497073756D2070617373616765732C20616E64206D6F726520726563656E746C792077697468206465736B746F70207075626C697368696E6720736F667477617265206C696B6520416C64757320506167654D616B657220696E636C7564696E672076657273696F6E73206F66204C6F72656D20497073756D2E','2017-07-27 00:00:00'),
  (4,4,'Commentator 4',X'57686174206973204C6F72656D20497073756D3F0A4C6F72656D20497073756D2069732073696D706C792064756D6D792074657874206F6620746865207072696E74696E6720616E64207479706573657474696E6720696E6475737472792E204C6F72656D20497073756D20686173206265656E2074686520696E6475737472792773207374616E646172642064756D6D79207465787420657665722073696E6365207468652031353030732C207768656E20616E20756E6B6E6F776E207072696E74657220746F6F6B20612067616C6C6579206F66207479706520616E6420736372616D626C656420697420746F206D616B65206120747970652073706563696D656E20626F6F6B2E20497420686173207375727669766564206E6F74206F6E6C7920666976652063656E7475726965732C2062757420616C736F20746865206C65617020696E746F20656C656374726F6E6963207479706573657474696E672C2072656D61696E696E6720657373656E7469616C6C7920756E6368616E6765642E2049742077617320706F70756C61726973656420696E207468652031393630732077697468207468652072656C65617365206F66204C657472617365742073686565747320636F6E7461696E696E67204C6F72656D20497073756D2070617373616765732C20616E64206D6F726520726563656E746C792077697468206465736B746F70207075626C697368696E6720736F667477617265206C696B6520416C64757320506167654D616B657220696E636C7564696E672076657273696F6E73206F66204C6F72656D20497073756D2E','2017-07-27 00:00:00');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `news_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `body` blob DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `url` char(255) DEFAULT 'https://wallpaperbrowse.com/media/images/ed76b56229e56165cbf239b1f20735ff.jpg',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`news_id`, `category_id`, `title`, `body`, `author`, `created_at`, `url`)
VALUES
  (1,1,'Sport news',X'53706F72742053706F72742053706F72742053706F72742053706F72742053706F7274','Author 1','2017-07-27 00:00:00','https://bluefin-live-assets.s3.amazonaws.com/media/filer_public_thumbnails/filer_public/30/dc/30dcb5b3-815d-4e4c-af3e-d2823050911c/sports_montage_-_chosen_concept_v9_carouselv3_rgb.jpg__1600x580_q85_crop_upscale.jpg'),
  (2,2,'Politic news',X'506F6C697469637320626C6120506F6C697469637320626C6120506F6C697469637320626C6120506F6C697469637320626C6120506F6C697469637320626C6120506F6C697469637320626C61','Author 2','2017-07-27 00:00:00','http://funnypictures3.fjcdn.com/channel_images/f8/7d/f87de1210cfa5bd7ca3b1fd2648f6e73.png'),
  (3,3,'Web news',X'57656220697320617765736F6D65','Author 3','2017-07-27 00:00:00','https://2ch.hk/pr/arch/2016-06-13/src/749707/14638539274740.jpg'),
  (4,4,'Some php news',X'50485020656C657068616E7420646965642C206275742069742077696C6C206C69766520696E206F757220686561727473','Author 3','2017-07-27 00:00:00','https://newrelic.com/assets/pages/apm/php/php-elephant-logo-bd4f9d83be8c8563248fe4793f90bae7.png'),
  (5,1,'Messi died',X'4E4F4F4F4F214F212121','Author 228','2017-08-01 15:47:01','http://www.pets4homes.co.uk/images/articles/88/large/137d7e8d5ab0288255a0438f4d4f95b4.jpg'),
  (10,2,'123',X'313233313233313233','12','2017-08-02 11:47:34','https://wallpaperbrowse.com/media/images/ed76b56229e56165cbf239b1f20735ff.jpg'),
  (11,1,'segweg',X'6566677765','sdgsd','2017-08-02 11:48:42','https://wallpaperbrowse.com/media/images/ed76b56229e56165cbf239b1f20735ff.jpg');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
