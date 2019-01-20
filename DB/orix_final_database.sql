-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for orix
DROP DATABASE IF EXISTS `orix`;
CREATE DATABASE IF NOT EXISTS `orix` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `orix`;

-- Dumping structure for table orix.cc_transactions
DROP TABLE IF EXISTS `cc_transactions`;
CREATE TABLE IF NOT EXISTS `cc_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `transdate` datetime DEFAULT NULL,
  `processor` varchar(255) NOT NULL,
  `processor_trans_id` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `cc_num` varchar(255) DEFAULT NULL,
  `cc_type` varchar(255) DEFAULT NULL,
  `response` text,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.cc_transactions: ~0 rows (approximately)
/*!40000 ALTER TABLE `cc_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cc_transactions` ENABLE KEYS */;

-- Dumping structure for table orix.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(555) NOT NULL,
  `name` varchar(255) NOT NULL,
  `isMain` tinyint(1) DEFAULT '0',
  `prodId` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_products` (`prodId`),
  CONSTRAINT `fk_products` FOREIGN KEY (`prodId`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.images: ~0 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table orix.maincategory
DROP TABLE IF EXISTS `maincategory`;
CREATE TABLE IF NOT EXISTS `maincategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.maincategory: ~9 rows (approximately)
/*!40000 ALTER TABLE `maincategory` DISABLE KEYS */;
INSERT INTO `maincategory` (`id`, `name`) VALUES
	(1, 'Precious Gems'),
	(2, 'Semi Precious Gems'),
	(3, 'Necklaces / Chains'),
	(4, 'Bracelets'),
	(5, 'Rings'),
	(6, 'EarRings'),
	(7, 'Pendants'),
	(8, 'Sets'),
	(11, 'Birth Stones');
/*!40000 ALTER TABLE `maincategory` ENABLE KEYS */;

-- Dumping structure for table orix.order_products
DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.order_products: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;

-- Dumping structure for table orix.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gem_category` int(20) NOT NULL,
  `gem_of_the_day` varchar(50) NOT NULL,
  `recent_product` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `small_description` varchar(200) NOT NULL,
  `long_description` varchar(5000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `pieces` varchar(100) NOT NULL,
  `image1` blob NOT NULL,
  `image2` blob NOT NULL,
  `image3` blob NOT NULL,
  `image4` blob NOT NULL,
  `image5` blob NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table orix.product: 2 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table orix.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `product_status_id` int(11) NOT NULL,
  `regular_price` decimal(10,0) DEFAULT '0',
  `discount_price` decimal(10,0) DEFAULT '0',
  `quantity` int(11) DEFAULT '0',
  `taxable` tinyint(1) DEFAULT '0',
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `categoryType` bigint(20) NOT NULL,
  `shortDescription` varchar(1000) DEFAULT NULL,
  `isPopular` tinyint(1) NOT NULL,
  `isGemOfTheDay` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_subCategory` (`categoryType`),
  CONSTRAINT `fk_subCategory` FOREIGN KEY (`categoryType`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table orix.product_statuses
DROP TABLE IF EXISTS `product_statuses`;
CREATE TABLE IF NOT EXISTS `product_statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.product_statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_statuses` ENABLE KEYS */;

-- Dumping structure for table orix.sales_orders
DROP TABLE IF EXISTS `sales_orders`;
CREATE TABLE IF NOT EXISTS `sales_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_session_sales_order` (`session_id`),
  CONSTRAINT `fk_session_sales_order` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.sales_orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `sales_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales_orders` ENABLE KEYS */;

-- Dumping structure for table orix.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `data` text,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table orix.sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table orix.subcategory
DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `month` varchar(200) DEFAULT NULL,
  `mainCategory` bigint(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `small_description` varchar(500) NOT NULL,
  `image` blob NOT NULL,
  `popular_gem` varchar(50) NOT NULL,
  `exclusive_jewellery` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mainCategory` (`mainCategory`),
  CONSTRAINT `fk_mainCategory` FOREIGN KEY (`mainCategory`) REFERENCES `maincategory` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.subcategory: ~13 rows (approximately)
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` (`id`, `name`, `month`, `mainCategory`, `description`, `small_description`, `image`, `popular_gem`, `exclusive_jewellery`, `created_date`, `updated_date`) VALUES
	(34, 'Garnet', 'January', 11, '', 'boosts confidence, revitalize your body', _binary 0x6173736574732F696D672F74797065732F4761726E6574313534363236343137366761726E65742E706E67, '1', '', '2018-12-31 13:49:36', '2018-12-31 13:49:36'),
	(35, 'Amethyst', 'February', 11, '', 'bring strength, courage, and peace', _binary 0x6173736574732F696D672F74797065732F416D65746879737431353436323634353039616D6574687973742E706E67, '', '', '2018-12-31 13:55:09', '2018-12-31 13:55:09'),
	(36, 'Aquamarine', 'March', 11, '', 'healing energy, reduces the fear of water, and bring a wayward lover back', _binary 0x6173736574732F696D672F74797065732F417175616D6172696E6531353436323634363038417175616D6172696E652E706E67, '', '', '2018-12-31 13:56:48', '2018-12-31 13:56:48'),
	(37, 'White sapphire', 'April', 11, '', 'enhances mental peace with harmony and joy', _binary 0x6173736574732F696D672F74797065732F57686974655F73617070686972653135343632363439323977686974652D73617070686972652D73746F6E652D323530783235302E706E67, '', '', '2018-12-31 14:02:09', '2018-12-31 14:02:09'),
	(38, 'Tourmaline', 'May', 11, '', 'increase in physical vitality, emotional stability, and intellectual acuity', _binary 0x6173736574732F696D672F74797065732F546F75726D616C696E65313534363236353332306E61747572616C2D677265656E2D746F75726D616C696E652D67656D73746F6E652D353030783530302E676966, '', '', '2018-12-31 14:08:40', '2018-12-31 14:08:40'),
	(39, 'Cat’s eye', 'June', 11, '', 'relieves you from anxiety and stress', _binary 0x6173736574732F696D672F74797065732F436174E28099735F6579653135343632363538303063617473206579652E706E67, '', '', '2018-12-31 14:16:40', '2018-12-31 14:16:40'),
	(40, 'Ruby', 'July', 11, '', 'strengthening courage, joy, leadership qualities', _binary 0x6173736574732F696D672F74797065732F52756279313534363236363430336A756C792D626972746873746F6E655F727562792D38347838342E6A7067, '', '', '2018-12-31 14:26:43', '2018-12-31 14:26:43'),
	(41, 'Zircon', 'August', 11, '', 'bring sleep and give wisdom in stressful times, may also attract love', _binary 0x6173736574732F696D672F74797065732F5A6972636F6E313534363236373639317A6972636F6E2E6A7067, '', '', '2018-12-31 14:48:11', '2018-12-31 14:48:11'),
	(42, 'Blue sapphire', 'September', 11, '', 'wisdom stone, can give peace and tranquility', _binary 0x6173736574732F696D672F74797065732F426C75655F736170706869726531353436323636353235426C75655F536170706869726531353337373639343637626C75652D7361707068697265312E706E67, '', '', '2018-12-31 14:28:45', '2018-12-31 14:28:45'),
	(43, 'Topaz', 'OCTOBER ', 11, '', 'promotes openness and honesty, self-realization and self-control', _binary 0x6173736574732F696D672F74797065732F546F70617A31353436323637393835626C7565746F70617A5F726F756E645F736D616C6C2E6A7067, '', '', '2018-12-31 14:53:05', '2018-12-31 14:53:05'),
	(44, 'Moonstone', 'NOVEMBER ', 11, '', 'alleviate anxiety, depression, insomnia, and to promote creativity', _binary 0x6173736574732F696D672F74797065732F4D6F6F6E73746F6E6531353436323638313133646F776E6C6F61642E6A7067, '', '', '2018-12-31 14:55:13', '2018-12-31 14:55:13'),
	(45, 'Star sapphire', 'DECEMBER ', 11, '', 'helps to open the mind to beauty and intuition', _binary 0x6173736574732F696D672F74797065732F537461725F736170706869726531353436323730373235535350313930352D352E32302D63617261742D737461722D73617070686972655F315F4C52472E6A7067, '', '', '2018-12-31 15:38:45', '2018-12-31 15:38:45');
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;

-- Dumping structure for table orix.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `isAdmin` tinyint(1) DEFAULT '0',
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `active`, `isAdmin`, `inserted_at`, `updated_at`, `password`, `mobile`) VALUES
	(1, 'pgrasanka@gmail.com', 'Rajith', 'Asanka', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@orix', '0717772306'),
	(2, 'ranaweera.minoli@gmail.com', 'Minoli', 'Ranaweera', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@orix', '0717772306'),
	(3, 'divranweera2@gmail.com', 'Divyana', 'Ranaweera', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@orix', '0717772306'),
	(4, 'nimalranaweera15@gmail.com', 'Nimal', 'Ranaweera', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@orix', '0717772306');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
