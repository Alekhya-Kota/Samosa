-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2015 at 08:13 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

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
('ajay', 'ajay');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`pd_id`, `pd_name`, `pd_price`, `pd_type`, `pd_desc`, `pd_imge_path`) VALUES
(8, 'ajay', 100, 'cookies', 'hello', 'uploads/Tulips.jpg'),
(13, 'abcd', 234, 'cupcakes', 'h', 'uploads/Hydrangeas.jpg'),
(6, 'cupcake', 100, 'cupcakes', 'hello', 'uploads/Chrysanthemum.jpg'),
(12, 'viks', 128, 'cupcakes', 'g', 'uploads/Desert.jpg'),
(11, 'cupcake', 100, 'cakes', 'fvc', 'uploads/Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `mno` bigint(11) DEFAULT NULL,
  `aaddress` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `emailid`, `mno`, `aaddress`) VALUES
(1, 'ajay', 'ajay', 'admin', '71208', 'ajay@gmail.com', 2147483647, 'jk'),
(2, 'ajay', 'ajay', 'ajay', '68969', 'ajay1@gmail.com', 8977236100, 'hyd'),
(3, 'vikas', 'vikas', 'vikas', '32729', 'vikas@gm.com', 8977236100, 'hyeraba'),
(4, 'vijay', 'vijay', 'vijay', '73773', 'vijay@gmail.com', 8977236100, 'hyd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
