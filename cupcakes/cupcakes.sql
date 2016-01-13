-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 05:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cupcakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('alekhya', 'alekhya');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `pd_id` int(11) NOT NULL AUTO_INCREMENT,
  `pd_name` varchar(30) NOT NULL,
  `pd_price` int(8) NOT NULL,
  `pd_type` varchar(30) NOT NULL,
  `pd_desc` text NOT NULL,
  `pd_imge_path` varchar(60) NOT NULL,
  PRIMARY KEY (`pd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`pd_id`, `pd_name`, `pd_price`, `pd_type`, `pd_desc`, `pd_imge_path`) VALUES
(77, 'VanillaBean', 17, 'cupcakes', 'Vanilla bean', 'uploads/vanilla bean.jpg'),
(92, 'strawberry', 23, 'cupcakes', 'cupcake', 'uploads/cupcake1.jpg'),
(30, 'Banana', 20, 'cupcakes', 'SuperMoist', 'uploads/banana.jpg'),
(28, 'Blueberry', 10, 'cupcakes', 'Hint of Lime', 'uploads/blueberry.jpg'),
(29, 'Carrot', 15, 'cupcakes', 'Try one', 'uploads/carrot.jpg'),
(76, 'Redvelvet', 15, 'cupcakes', 'Redvelvet', 'uploads/red velvet.jpg'),
(75, 'Cookies&cream', 42, 'cupcakes', 'Cookies&cream', 'uploads/cookies and cream.jpg'),
(79, 'BirthdayGirl', 14, 'cupcakes', 'BirthdayTime', 'uploads/Birthday girl.jpg'),
(73, 'MiniLinzi', 35, 'cookies', 'Maximum flavor', 'uploads/Mini linzi.jpg'),
(40, 'Pista', 35, 'cupcakes', 'Roasted Pistachio', 'uploads/Pista.jpg'),
(44, 'Christmas', 22, 'cookies', 'Festive special', 'uploads/christmas.jpg'),
(43, 'Smileys', 22, 'cookies', 'Smileys', 'uploads/smileys.jpg'),
(71, 'SnickerDoodle', 18, 'cookies', 'Add cream of tartar', 'uploads/snickerdoodle.jpg'),
(70, 'Rainbowheart', 19, 'cupcakes', 'tie dye hearts', 'uploads/rainbow-heart.jpg'),
(47, 'Shoe', 15, 'cookies', 'Shoe', 'uploads/shoe.jpg'),
(68, 'Easylego', 21, 'cookies', 'Memorable parties', 'uploads/easy logo.jpg'),
(69, 'Carrotcp', 20, 'cookies', 'Carrot cookies', 'uploads/cpcookie.jpg'),
(50, 'Moon', 20, 'cookies', 'Moon', 'uploads/moon cookies.jpg'),
(72, 'CuteChristmas', 30, 'cookies', 'Christmas cookies', 'uploads/cute christmas.jpg'),
(67, 'StrawberryLove', 30, 'cakes', 'Italian love', 'uploads/strawberry love.jpg'),
(59, 'Birthday', 40, 'cakes', 'Birthday', 'uploads/birthday.jpg'),
(60, 'Pound', 25, 'cakes', 'Rich and delicious', 'uploads/pound.jpg'),
(61, 'Sponge', 30, 'cakes', 'Sponge', 'uploads/sponge.jpg'),
(62, 'Wedding', 50, 'cakes', 'Wedding', 'uploads/wedding.jpg'),
(66, 'AngelFoodCake', 30, 'cakes', 'Perfect homemade', 'uploads/angel food cake.jpg'),
(65, 'Fruit', 30, 'cakes', 'Fruit', 'uploads/fruit.jpg'),
(80, 'VanillaBliss', 15, 'cupcakes', 'SoftBliss', 'uploads/vanilla bliss.jpg'),
(81, 'ChocolatePassion', 28, 'cupcakes', 'Strawberry filling', 'uploads/chocolatepassion.jpg'),
(82, 'CinacakeClassic', 32, 'cupcakes', 'Moist,apple cider', 'uploads/cinacake.jpg'),
(83, 'PeanutButter', 15, 'cookies', 'Peanut Crush', 'uploads/peanutbu.jpg'),
(84, 'BasketBall', 22, 'cookies', 'GameLay', 'uploads/Basketball.jpg'),
(85, 'Corn', 23, 'cookies', 'made with 100%corn', 'uploads/Corn.jpg'),
(86, 'CakePops', 10, 'cookies', 'Limited time', 'uploads/cakepops.jpg'),
(87, 'BlackForest', 25, 'cakes', 'Cherry Filled cake', 'uploads/black-forest-cake.jpg'),
(88, 'Stunningwedding', 50, 'cakes', 'weddingtime', 'uploads/Stunning-Wedding-Dress-Cake.jpg'),
(89, 'Tiramasulayer', 40, 'cakes', 'Tiramasulayer', 'uploads/tiramisu-layer-cake.png'),
(90, 'MixedFruit', 33, 'cakes', 'Fruit love', 'uploads/aboutus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(3000) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `mno` bigint(11) DEFAULT NULL,
  `aaddress` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `emailid`, `mno`, `aaddress`) VALUES
(14, 'pravallika', 'kondeti', 'pravallika', '81dc9bdb52d04dc20036dbd8313ed055', 'pravallika@gmail.com', 7344892383, '1309North Huron'),
(7, 'Alekhya', 'kota', 'Alekhya', '83275', 'vkota1@emich.edu', 7344892383, '1309n huron river'),
(8, 'mohana', 'puvvada', 'mohana', '123456', 'mohanapuvvada@gmail.com', 7344892383, '1309 N huron'),
(10, 's', 'l', 'shyam', '9407c826d8e3c07ad37cb2d13d1cb641', 'saasu32256@gmail.com', 7656788765, 'dfghjkl'),
(11, 'r', 'm', 'ram', '827ccb0eea8a706c4c34a16891f84e7b', 'saasu3227756@gmail.com', 4566543456, 'sdfghjk'),
(12, 'karthik', 'reddy', 'karthik', 'f1c1592588411002af340cbaedd6fc33', 'trehj@emial.com', 8799877898, 'fdghjk'),
(13, 'lakshmi', 'kota', 'lakshmi', '1eaf7c068a250a38e3bab770053c14c3', 'lakshmi@gmail.com', 7344892383, '1309 north huron river drive'),
(15, 'sahith', 'reddy', 'pan', '202cb962ac59075b964b07152d234b70', 'saasu32253@gmail.com', 4567893456, 'fghjk'),
(16, 'john', 'wright', 'john', '202cb962ac59075b964b07152d234b70', 'sahith78@gmail.com', 1234565432, 'adresss');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
  `username` varchar(50) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE IF NOT EXISTS `user_orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_name` varchar(50) NOT NULL,
  `pd_type` varchar(50) NOT NULL,
  `pd_qnt` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pd_price` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `pr_name`, `pd_type`, `pd_qnt`, `total_amount`, `imagepath`, `username`, `pd_price`) VALUES
(10, 'Banana', 'cupcakes', 0, 0, 'uploads/banana.jpg', 'pravallika', 13),
(11, 'chocolate', 'cupcakes', 0, 0, 'uploads/chocolate.jpg', 'pravallika', 9),
(12, 'Blueberry', 'cupcakes', 0, 0, 'uploads/chocolate.jpg', 'pravallika', 15),
(13, 'chocolate', 'cupcakes', 2, 18, 'uploads/chocolate.jpg', 'pravallika', 9),
(14, 'Carrot', 'cupcakes', 0, 0, 'uploads/carrot.jpg', 'pravallika', 10),
(15, 'Blueberry', 'cupcakes', 0, 0, 'uploads/blueberry.jpg', 'pravallika', 15),
(16, 'vegan', 'cupcakes', 0, 0, 'uploads/vegan.jpg', 'pravallika', 10),
(17, 'Carrot', 'cupcakes', 0, 0, 'uploads/carrot.jpg', 'pravallika', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
