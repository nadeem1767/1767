-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Hp'),
(2, 'Dell'),
(3, 'Apple'),
(4, 'Nokia'),
(5, 'Sony'),
(6, 'Levise'),
(7, 'Channel'),
(8, 'LV'),
(9, 'Hushouppies'),
(10, 'Adidas'),
(11, 'Apeks'),
(12, 'ASICS');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_title`) VALUES
(1, 'computers'),
(2, 'Mobiles'),
(3, 'laptops'),
(4, 'tablets'),
(5, 'Garments'),
(6, 'Sports'),
(7, 'Shoes And Bags');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_cat` int(10) NOT NULL,
  `product_brand` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_status` varchar(10) NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_status`, `product_keyword`) VALUES
(40, 1, 3, '2019-04-20 16:06:14', 'latest', 'apple1.jpg', 'apple3.jpg', 20000, 'on', 'hp laptops'),
(41, 1, 1, '2019-04-20 16:07:00', 'new arrial 2', 'hp2.jpg', 'hp1.jpg', 200000, 'on', 'hp computers'),
(43, 3, 3, '2019-04-20 16:08:31', 'latest', 'images (3).jpg', 'laptop2.jpg', 16000, 'on', 'laptop'),
(44, 2, 5, '2019-04-20 16:09:17', 'Love Mobiles', 'sony1.jpg', 'sony3.jpg', 16000, 'on', 'sony mobiles'),
(45, 2, 4, '2019-04-20 16:09:37', 'Love Mobiles', 'nokia 5.jpg', 'nokia 2.jpg', 25000, 'on', 'nokia'),
(46, 5, 6, '2019-04-23 12:06:11', 'Garments', 'Tshirt.jpg', 'tshirt3.jpg', 1500, 'on', 'garments'),
(47, 5, 6, '2019-04-23 12:06:40', 'Garments', 'tshirt4.jpg', 'tshrt2.jpg', 15000, 'on', 'men garments'),
(48, 5, 8, '2019-04-23 12:09:17', 'Ladies', 'dress2.jpg', 'dress3.jpg', 2000, 'on', 'ladies garments'),
(49, 5, 6, '2019-04-23 12:09:48', 'Ladies', 'dress4.jpg', 'dress.jpg', 20000, 'on', 'women'),
(50, 5, 6, '2019-04-23 12:12:12', 'Childern', 'chld2.jpg', 'chld3.jpg', 2500, 'on', 'childern'),
(51, 5, 6, '2019-04-23 12:12:35', 'Sale', 'chld4.jpg', 'chlid.jpg', 3000, 'on', 'childern garments'),
(52, 7, 6, '2019-04-23 12:15:28', 'Shoes and Bags', 'download.jpg', 'shoes2.jpg', 4000, 'on', 'shoes and bags'),
(53, 7, 8, '2019-04-23 12:16:12', 'Shoes And Bags', 'shoes3.jpg', 'shoes4.jpg', 5000, 'on', 'shoes and bags'),
(54, 7, 8, '2019-04-23 12:27:17', 'Shoes And Bags', 'shoes3.jpg', 'shoes4.jpg', 5000, 'on', 'shoes'),
(55, 6, 11, '2019-04-23 12:27:58', 'Basket Ball', 'basket2.jpg', 'bsket4.jpg', 8000, 'on', 'basket ball'),
(56, 6, 12, '2019-04-23 12:28:23', 'Football', 'foot2.jpg', 'foot.jpg', 8000, 'on', 'football'),
(57, 6, 12, '2019-04-23 12:28:50', 'Sports', 'box2.jpg', 'box.jpg', 9000, 'on', 'boxing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
