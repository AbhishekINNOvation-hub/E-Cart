-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2020 at 02:01 PM
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
-- Database: `e-cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`) VALUES
(1, 'Thomson UD9 124cm (50 inch) Ultra HD (4K) LED Smart TV  (50TH1000)', 30000, 'img/1.jpeg'),
(2, 'TCL 215.9 cms (85 Inch) Ultra HD (4K) Android TV Smart LED TV 85P8M', 199999, 'img/2.jpg'),
(3, 'Sansui Pro View 80cm (32 inch) HD Ready LED TV with WCG  (32VNSHDS)', 8499, 'img/3.jpeg'),
(4, 'Samsung Series 7 138cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (55MU7500)', 206999, 'img/4.jpeg'),
(5, 'Samsung 163cm (65 inch) Ultra HD (4K) LED Smart TV  (UA65NU7090KXXL)', 89999, 'img/5.jpeg'),
(6, 'Samsung 123cm (49 inch) Ultra HD (4K) Curved LED Smart TV  (49KU6570)', 89999, 'img/6.jpeg'),
(7, 'Samsung 80cm (32 inch) HD Ready LED TV (32J4003)', 14999, 'img/7.jpeg'),
(8, 'Philips 164cm (65 inch) Ultra HD (4K) LED Smart TV (65PUT6703S94)', 79999, 'img/8.jpeg'),
(9, 'Panasonic 109cm (43 inch) Full HD LED Smart TV (TH-43CS400DX)', 50666, 'img/9.jpeg'),
(10, 'One Plus 138.8 cm (55 inch) Ultra HD (4K) QLED Smart TV, Q1 55Q1', 69899, 'img/10.jpg'),
(11, 'Motorola 109cm (43 inch) Ultra HD (4K) LED Smart Android TV with Wireless Gamepad (43SAUHDM)', 21999, 'img/11.jpeg'),
(12, 'Mi 4A Pro 108 cm (43) Full HD LED Smart Android TV With Google Data Saver', 21999, 'img/12.jpeg'),
(13, 'LLOYD 163 cm (65 inch) Ultra HD 4K LED Smart TV, L65U1Y0IV', 69990, 'img/13.jpg'),
(14, 'LLOYD 163 cm (65 inch) Ultra HD 4K LED Smart TV, L65U1Y0IV', 158999, 'img/14.jpg'),
(15, 'Kodak X900 80cm (32 inch) HD Ready LED TV  (32HDX900s)', 7999, 'img/15.jpeg'),
(16, 'CloudWalker 139cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (CLOUD TV 55SU-C)', 84500, 'img/16.jpeg'),
(17, 'CloudWalker 139cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (CLOUD TV 55SU-C)', 80990, 'img/17.jpg'),
(18, 'BPL Stellar Series 80cm (32 inch) HD Ready LED Smart TV  (T32SH30A)', 9999, 'img/18.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`, `contact`, `address`) VALUES
(1, 'Abhishek', 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'faridabad', '1234567890', 'hn4512'),
(2, 'abhishek', 'am@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'chandausi', '1234567890', 'gandhi road, chandausi');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(9, 1, 1, 'confirmed'),
(10, 1, 2, 'confirmed'),
(11, 1, 3, 'confirmed'),
(12, 1, 1, 'Added to cart'),
(13, 1, 2, 'Added to cart'),
(14, 1, 3, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
