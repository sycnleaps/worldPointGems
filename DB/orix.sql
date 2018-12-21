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
CREATE DATABASE IF NOT EXISTS `orix` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `orix`;

-- Dumping structure for table orix.cc_transactions
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
CREATE TABLE IF NOT EXISTS `maincategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.maincategory: ~3 rows (approximately)
/*!40000 ALTER TABLE `maincategory` DISABLE KEYS */;
INSERT INTO `maincategory` (`id`, `name`) VALUES
	(1, 'Precious Gems'),
	(2, 'Semi-Precious'),
	(3, 'Jewellery');
/*!40000 ALTER TABLE `maincategory` ENABLE KEYS */;

-- Dumping structure for table orix.order_products
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
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gem_category` int(20) NOT NULL,
  `gem_type` bigint(20) NOT NULL,
  `gem_of_the_day` varchar(50) NOT NULL,
  `recent_product` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `small_description` varchar(200) NOT NULL,
  `long_description` varchar(5000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `dimensions` varchar(100) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `cut` varchar(100) NOT NULL,
  `video` blob NOT NULL,
  `image1` blob NOT NULL,
  `image2` blob NOT NULL,
  `image3` blob NOT NULL,
  `image4` blob NOT NULL,
  `image5` blob NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table orix.product: 1 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `gem_category`, `gem_type`, `gem_of_the_day`, `recent_product`, `name`, `small_description`, `long_description`, `price`, `offer_price`, `availability`, `sku`, `origin`, `dimensions`, `treatment`, `color`, `weight`, `certification`, `shape`, `cut`, `video`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_date`, `updated_date`) VALUES
	(1, 1, 1, '1', '1', 'blue saaa', '', '', '1000', '', 'In Stock', '', '', '', '', '', '', '', '', '', _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334, _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334626C75652D73617070686972652E706E67, _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334, _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334, _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334, _binary 0x6173736574732F696D672F312F626C75655F7361616131353337363335393334, '2018-09-22 17:05:34', '2018-09-22 17:05:34');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table orix.products
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
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.subcategory: ~24 rows (approximately)
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` (`id`, `name`, `mainCategory`, `description`, `small_description`, `image`, `popular_gem`, `exclusive_jewellery`, `created_date`, `updated_date`) VALUES
	(1, 'Blue Sapphire', 1, '', 'Powerful vedic gemstone, prized since centuries', _binary 0x6173736574732F696D672F74797065732F426C75655F536170706869726531353337373639343637626C75652D73617070686972652E706E67, '1', '', '2018-09-24 06:11:07', '2018-09-24 06:11:07'),
	(2, 'Pink Sapphire', 1, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Yellow Sapphire', 1, '', 'Brings Fortune and Fame', _binary 0x6173736574732F696D672F74797065732F59656C6C6F775F53617070686972653135333737363935303179656C6C6F772073617070686972652E6A7067, '1', '', '2018-09-24 06:11:41', '2018-09-24 06:11:41'),
	(4, 'White Sapphire', 1, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 'Ruby', 1, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'Padparadscha', 1, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 'Emerald', 1, '', 'Play of Colour thats unmatched - uniquely its own', _binary 0x6173736574732F696D672F74797065732F456D6572616C6431353337373639353330656D65726C612D642E706E67, '1', '', '2018-09-24 06:12:10', '2018-09-24 06:12:10'),
	(8, 'Cats Eye', 1, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(9, 'Alexandrite', 1, '', '', _binary 0x6173736574732F696D672F74797065732F416C6578616E647269746531353337363132353135727562792E706E67, '', '', '2018-09-24 06:19:41', '2018-09-24 06:19:41'),
	(10, 'Garnet', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(12, 'Tourmaline', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(13, 'Spinel', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(14, 'Blue Topaz', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(16, 'Moonstone', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(17, 'Citrine', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(18, 'Zircon', 2, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(19, 'Ring', 3, '', '', _binary 0x6173736574732F696D672F74797065732F52696E673135333737373033363272696E672E6A7067, '', '1', '2018-09-24 06:26:02', '2018-09-24 06:26:02'),
	(20, 'Pendent', 3, '', '', _binary 0x6173736574732F696D672F74797065732F50656E64656E743135333737373034313670656E64616E74732E6A7067, '', '1', '2018-09-24 06:26:56', '2018-09-24 06:26:56'),
	(21, 'Earrings', 3, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(22, 'Bracelets', 3, '', '', _binary 0x6173736574732F696D672F74797065732F42726163656C6574733135333737373033393562726163656C6574732E6A7067, '', '1', '2018-09-24 06:26:35', '2018-09-24 06:26:35'),
	(23, 'Bangel', 3, '', '', _binary '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(25, 'Test 123456', 2, 'Testing Testing', '', _binary 0x6173736574732F696D672F74797065732F54657374203132333435366F70616C2E6A7067, '', '', '2018-09-22 09:53:51', '2018-09-22 09:53:51'),
	(26, 'fdsfdsf', 1, '', '', _binary 0x6173736574732F696D672F74797065732F666473666473663135333736333736303579656C6C6F772073617070686972652E6A7067, '', '', '2018-09-24 06:13:46', '2018-09-24 06:13:46'),
	(27, 'Opal', 1, '', 'Gemstone of the rich and powerful. Beauty at its best', _binary 0x6173736574732F696D672F74797065732F4F70616C313533373736393539316F70616C2E6A7067, '1', '', '2018-09-24 06:13:11', '2018-09-24 06:13:11');
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;

-- Dumping structure for table orix.users
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table orix.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `active`, `isAdmin`, `inserted_at`, `updated_at`, `password`, `mobile`) VALUES
	(1, 'sampath.lasantha07@gmail.com', 'Sampath', 'Lasantha', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@wpgems', '077825');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
