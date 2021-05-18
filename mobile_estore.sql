-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2020 at 03:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`) VALUES
(1, 'iPhone'),
(2, 'SAMSUNG'),
(3, 'One Plus'),
(4, 'Oppo'),
(5, 'VIVO');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`name`, `email`, `message`) VALUES
('Pratham', 'shelkepratham.12421@gmail.com', 'Please contact me as soon as possible.'),
('Pratham', 'shelkepratham.12421@gmail.com', 'sfdssasdsdsd'),
('Pratham', 'shelkepratham.12421@gmail.com', 'Call me.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `dsc` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `dsc`, `price`, `brand_id`, `img_loc`) VALUES
(1, 'iPhone 11 Pro Max', '128 GB', 'Rs 1,09,099', 1, './img/iphone-11-pro-max.jpg'),
(2, 'iPhone 11', '256 GB', 'Rs 67,900', 1, './img/iphone11.png'),
(3, 'iPhone SE 2020', '64 GB', 'Rs 39,999', 1, './img/iphone-se.jpg'),
(4, 'Samsung M31s', 'Mirage Blue, 8GB RAM, 128GB Storage', 'Rs 21,499', 2, './img/samsung-m31s.jpg'),
(5, 'Samsung Galaxy M21', 'Raven Black, 4GB RAM, 64GB Storage', 'Rs 13,499', 2, './img/samsung-m21.jpg'),
(6, 'Samsung Galaxy A51', 'Black, 6GB RAM, 128GB Storage', 'Rs 23,990', 2, './img/samsung-a51.jpg'),
(7, 'OnePlus 8', 'Glacial Green 6GB RAM+128GB Storage, Fluid AMOLED Display\r\n', 'Rs 41,990', 3, './img/oneplus-8.jpg'),
(8, 'OnePlus 7T', 'Glacier Blue, 8GB RAM, Fluid AMOLED Display, 256GB Storage', 'Rs 37,999', 3, './img/oneplus-7t.jpg'),
(9, 'OnePlus 7T Pro', 'Haze Blue, 8GB RAM, Fluid AMOLED Display, 256GB Storage', 'Rs 47,999', 3, './img/oneplus-7tpro.jpg'),
(10, 'OPPO F11', 'Marble Green, 6GB RAM, 128GB Storage', 'Rs 27,899', 4, './img/oppo-f11.jpg'),
(11, 'OPPO Reno2 F', 'Lake Green, 8GB RAM, 128GB Storage', 'Rs 21,990', 4, './img/oppo-reno2f.jpg'),
(12, 'OPPO Reno4 Pro', 'Starry Night, 8GB RAM, 128GB Storage', 'Rs 34,990', 4, './img/oppo-reno4pro.jpg'),
(13, 'Vivo V19', 'Mystic Silver, 8GB RAM, 128GB Storage', 'Rs 24,990', 5, './img/vivo-v19.jpg'),
(14, 'Vivo X50 Pro', 'Alpha Grey, 8GB RAM, 256GB Storage', 'Rs 49,990', 5, './img/vivo-x50.jpg'),
(15, 'Vivo U10', 'Electric Blue, 3GB RAM, 32GB Storage', 'Rs 10,990', 5, './img/vivo-u10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Pratham Shelke', 'pratham@gmail.com', '22975d8a5ed1b91445f6c55ac121505b', '7350956775', 'Pune', 'Flat no- C-8, Wagheshwar nagar Society, Near Wagheshwar temple, Wagholi, Pune - 412207.'),
(2, 'Pratham', 'p@gmail.com', '22975d8a5ed1b91445f6c55ac121505b', '7350956775', 'Pune', 'Flat no- C-8, Wagheshwar nagar Society, Near Wagheshwar temple, Wagholi, Pune - 412207.'),
(3, 'Somaji', 'shelke.3333@gmail.com', '22975d8a5ed1b91445f6c55ac121505b', '9372442773', 'Pune', 'Flat no- C-8, Wagheshwar nagar Society, Near Wagheshwar temple, Wagholi, Pune - 412207.'),
(4, 'Aniket Akhade', 'aniket@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543210', 'Yavat', 'Yavat');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Purchased','Added to cart') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 2, 2, 'Purchased'),
(6, 1, 1, 'Purchased'),
(5, 1, 2, 'Purchased'),
(9, 3, 1, 'Purchased');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
