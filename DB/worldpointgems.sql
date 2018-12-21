-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 05:01 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldpointgems`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc_transactions`
--

CREATE TABLE `cc_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `path` varchar(555) NOT NULL,
  `name` varchar(255) NOT NULL,
  `isMain` tinyint(1) DEFAULT '0',
  `prodId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`id`, `name`) VALUES
(1, 'Precious Gems'),
(2, 'Semi-Precious'),
(3, 'Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
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
  `updated_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `gem_category`, `gem_type`, `gem_of_the_day`, `recent_product`, `name`, `small_description`, `long_description`, `price`, `offer_price`, `availability`, `sku`, `origin`, `dimensions`, `treatment`, `color`, `weight`, `certification`, `shape`, `cut`, `video`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_date`, `updated_date`) VALUES
(1, 1, 1, '1', '1', 'blue saaa', '', '', '1000', '', 'In Stock', '', '', '', '', '', '', '', '', '', 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334, 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334626c75652d73617070686972652e706e67, 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334, 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334, 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334, 0x6173736574732f696d672f312f626c75655f7361616131353337363335393334, '2018-09-22 17:05:34', '2018-09-22 17:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
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
  `isGemOfTheDay` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_statuses`
--

CREATE TABLE `product_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_orders`
--

CREATE TABLE `sales_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `data` text,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mainCategory` bigint(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `small_description` varchar(500) NOT NULL,
  `image` blob NOT NULL,
  `popular_gem` varchar(50) NOT NULL,
  `exclusive_jewellery` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `mainCategory`, `description`, `small_description`, `image`, `popular_gem`, `exclusive_jewellery`, `created_date`, `updated_date`) VALUES
(1, 'Blue Sapphire', 1, '', 'Powerful vedic gemstone, prized since centuries', 0x6173736574732f696d672f74797065732f426c75655f536170706869726531353337373639343637626c75652d73617070686972652e706e67, '1', '', '2018-09-24 06:11:07', '2018-09-24 06:11:07'),
(2, 'Pink Sapphire', 1, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Yellow Sapphire', 1, '', 'Brings Fortune and Fame', 0x6173736574732f696d672f74797065732f59656c6c6f775f53617070686972653135333737363935303179656c6c6f772073617070686972652e6a7067, '1', '', '2018-09-24 06:11:41', '2018-09-24 06:11:41'),
(4, 'White Sapphire', 1, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ruby', 1, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Padparadscha', 1, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Emerald', 1, '', 'Play of Colour thats unmatched - uniquely its own', 0x6173736574732f696d672f74797065732f456d6572616c6431353337373639353330656d65726c612d642e706e67, '1', '', '2018-09-24 06:12:10', '2018-09-24 06:12:10'),
(8, 'Cats Eye', 1, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Alexandrite', 1, '', '', 0x6173736574732f696d672f74797065732f416c6578616e647269746531353337363132353135727562792e706e67, '', '', '2018-09-24 06:19:41', '2018-09-24 06:19:41'),
(10, 'Garnet', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Tourmaline', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Spinel', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Blue Topaz', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Moonstone', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Citrine', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Zircon', 2, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Ring', 3, '', '', 0x6173736574732f696d672f74797065732f52696e673135333737373033363272696e672e6a7067, '', '1', '2018-09-24 06:26:02', '2018-09-24 06:26:02'),
(20, 'Pendent', 3, '', '', 0x6173736574732f696d672f74797065732f50656e64656e743135333737373034313670656e64616e74732e6a7067, '', '1', '2018-09-24 06:26:56', '2018-09-24 06:26:56'),
(21, 'Earrings', 3, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Bracelets', 3, '', '', 0x6173736574732f696d672f74797065732f42726163656c6574733135333737373033393562726163656c6574732e6a7067, '', '1', '2018-09-24 06:26:35', '2018-09-24 06:26:35'),
(23, 'Bangel', 3, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Test 123456', 2, 'Testing Testing', '', 0x6173736574732f696d672f74797065732f54657374203132333435366f70616c2e6a7067, '', '', '2018-09-22 09:53:51', '2018-09-22 09:53:51'),
(26, 'fdsfdsf', 1, '', '', 0x6173736574732f696d672f74797065732f666473666473663135333736333736303579656c6c6f772073617070686972652e6a7067, '', '', '2018-09-24 06:13:46', '2018-09-24 06:13:46'),
(27, 'Opal', 1, '', 'Gemstone of the rich and powerful. Beauty at its best', 0x6173736574732f696d672f74797065732f4f70616c313533373736393539316f70616c2e6a7067, '1', '', '2018-09-24 06:13:11', '2018-09-24 06:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `isAdmin` tinyint(1) DEFAULT '0',
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `active`, `isAdmin`, `inserted_at`, `updated_at`, `password`, `mobile`) VALUES
(1, 'sampath.lasantha07@gmail.com', 'Sampath', 'Lasantha', 1, 1, '2018-09-10 22:27:05', '2018-09-10 22:27:05', 'admin@wpgems', '077825');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc_transactions`
--
ALTER TABLE `cc_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_products` (`prodId`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_subCategory` (`categoryType`);

--
-- Indexes for table `product_statuses`
--
ALTER TABLE `product_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sales_orders`
--
ALTER TABLE `sales_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_session_sales_order` (`session_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mainCategory` (`mainCategory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc_transactions`
--
ALTER TABLE `cc_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_statuses`
--
ALTER TABLE `product_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_orders`
--
ALTER TABLE `sales_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`prodId`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_subCategory` FOREIGN KEY (`categoryType`) REFERENCES `products` (`id`);

--
-- Constraints for table `sales_orders`
--
ALTER TABLE `sales_orders`
  ADD CONSTRAINT `fk_session_sales_order` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_mainCategory` FOREIGN KEY (`mainCategory`) REFERENCES `maincategory` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
