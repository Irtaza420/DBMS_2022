-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 04:50 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(1, 1, 12),
(2, 1, 10),
(3, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `sales` (
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`, `Address`, `Phone`, `Password`, `Email`, `Type`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17', '', '', '', '', 0),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17', '', '', '', '', 0);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
