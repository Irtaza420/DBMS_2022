-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 02:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`) VALUES
(1, 'Zain', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `restock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_id`, `stock`, `restock`) VALUES
(1, 11, 0),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail_list`
--

CREATE TABLE `mail_list` (
  `e_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mail_list`
--

INSERT INTO `mail_list` (`e_id`, `email`) VALUES
(1, 'bsce20016@itu.edu.pk'),
(2, 'muneebsamikhan@gmail.com'),
(4, ''),
(5, 'ali@gmail.com'),
(6, 'rana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `total_price`, `user_id`, `status`) VALUES
(1, '2022-12-09', 274, 2, ' Confirmed'),
(6, '2022-12-09', 200, 1, 'Confirmed'),
(7, '2022-12-09', 200, 3, 'Confirmed'),
(8, '2022-12-09', 200, 1, 'Confirmed'),
(9, '2022-12-09', 200, 1, 'Pending'),
(10, '2022-12-09', 200, 4, 'Pending'),
(11, '2022-12-09', 200, 1, 'Pending'),
(18, '2022-12-07', 933, 2, 'Pending'),
(13, '2022-12-09', 200, 6, 'Pending'),
(14, '2022-12-09', 200, 1, 'Pending'),
(15, '2022-12-09', 152, 5, 'Pending'),
(16, '2022-12-09', 152, 1, 'Pending');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `check` BEFORE UPDATE ON `orders` FOR EACH ROW if( new.status != 'Confirmed') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='Not a valid update';
    end if
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sale` AFTER UPDATE ON `orders` FOR EACH ROW INSERT INTO sales (user_id,total_price,order_id) VALUES 
        (new.user_id , new.total_price, new.order_id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `status` BEFORE INSERT ON `orders` FOR EACH ROW if( new.status != 'Pending') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='Not a valid status';
    end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `Category_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(2, 2, 'Zara', 'Grey Overcoat', 250.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 2, 'Zara', 'Leather Pants', 200.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 2, 'Zara', 'Brown Kurta', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 2, 'Gucci', 'Grey Top', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 2, 'Breakout', 'White pants', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 1, 'Breakout', 'Black Beanie', 122.00, './assets/products/m4.png', '2020-03-28 11:08:57'),
(8, 2, 'Gucci', 'Jean-Overalls', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 3, 'Zara', 'Kids Jacket', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 1, 'Breakout', 'Black Jacket', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 2, 'Gucci', 'White dress', 152.00, './assets/products/9.png', '2020-03-28 11:08:57'),
(12, 3, 'Zara', 'Kids shirt', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 2, 'Breakout', 'Black Overcoat', 200.00, './assets/products/15.png', '2022-12-05 13:02:10'),
(14, 1, 'Gucci', 'Leather Jacket', 455.00, './assets\\products\\m1.png', '2022-12-29 00:00:00'),
(15, 1, 'Zara', 'Black Shirt', 300.00, './assets\\products\\m2.png', '2022-12-30 00:00:00'),
(18, 3, 'Breakout', 'Shirt', 300.00, '', '2022-12-09 18:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`user_id`, `payment_id`, `total_price`, `order_id`, `date`) VALUES
(1, 0, 200, 8, '0000-00-00'),
(3, 0, 200, 7, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`, `email`, `Address`, `phone`, `password`) VALUES
(1, 'abc', 'def', '2022-12-09 00:00:00', 'abc@abc.com', 'abc', '35252525', '123');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(6, 1, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `mail_list`
--
ALTER TABLE `mail_list`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mail_list`
--
ALTER TABLE `mail_list`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
