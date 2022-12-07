-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2022 at 12:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Category_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mail_list`
--

DROP TABLE IF EXISTS `mail_list`;
CREATE TABLE IF NOT EXISTS `mail_list` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `Category_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 0, 'Samsung', 'Brown Top', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 0, 'Redmi', 'Grey Overcoat', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 0, 'Redmi', 'Leather Pants', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 0, 'Redmi', 'Brown Kurta', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 0, 'Redmi', 'Grey Top', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 0, 'Redmi', 'White pants', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 0, 'Redmi', 'Black Beanie', 122.00, './assets/products/7.png', '2020-03-28 11:08:57'),
(8, 0, 'Redmi', 'Jean-Overalls', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 0, 'Samsung', 'Kids Jacket', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 0, 'Samsung', 'Black Jacket', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 0, 'Apple', 'White dress', 152.00, './assets/products/9.png', '2020-03-28 11:08:57'),
(12, 0, 'Apple', 'Kids shirt', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 0, 'Apple', 'Black Overcoat', 200.00, './assets/products/15.png', '2022-12-05 13:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`, `email`, `Address`, `phone`, `password`) VALUES
(1, 'muneeb', 'khan', '2022-12-07 09:21:10', 'muneebsamikhan@gmail.com', 'h 5 lahore', '3025658944', 'asdasdsad'),
(2, 'muneeb', 'khan', '2022-12-07 09:35:31', 'bsce20016@itu.edu.pk', 'h 5 lahore', '3025658944', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
