-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 07:45 PM
-- Server version: 5.5.49-MariaDB-1ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emaildb`
--

-- --------------------------------------------------------

--
-- Table structure for table `csv`
--

CREATE TABLE IF NOT EXISTS `csv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `market` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `csv`
--

INSERT INTO `csv` (`id`, `name`, `path`, `market`, `created_by`) VALUES
(3, 'FakeNameGenerator_com_7480ac68_2b8d1b7.csv', '/var/www/html/emaildb/uploads/', 'amazon.co.uk', 'ahmed'),
(4, 'FakeNameGenerator_com_9edcba8.csv', '/var/www/html/emaildb/uploads/', 'amazon.com', 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `destination_country` varchar(255) NOT NULL,
  `used` varchar(25) NOT NULL DEFAULT 'no',
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `full_name`, `email`, `email_password`, `mobile`, `destination_country`, `used`, `created_by`) VALUES
(1, 'ahmed emad', 'ahmed.emad2051@gmail.com', '123456', '1024564656', 'Egypt', 'no', '1'),
(3, 'one piece', 'ahmed.emad2051@gmail.com', '16516', '1024564656', 'Egypt', 'no', 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'ahmed', 'ahmed.emad2051@gmail.com', '$2y$10$B5lFJ2/0uhNhQcd8nBcTR.JjhbuubuKY5IHAnNhNzvX1TYrgrepda', 1),
(14, 'test', 'ahmed.emad2051@gmail.com', '$2y$10$5QwiSnmxhPXoEeqjfhzSuuJKmR8URJglWDO0mkZC4wyM.YZVYeiYe', 0),
(16, 'reda', 'ahmed.emad2051@gmail.com', '$2y$10$DeYK/RmtGDBzaQMgD4ycU.uR8YrA6puIIzEa1DBeNQPVKAnc2VxYC', 1),
(17, 'terte', 'ahmed.emad2051@gmail.com', '$2y$10$BztMkiTX3kRSBM8plNi98OdJw2yZYXniY9TnoQp.Wb0cz2H3Z9kO6', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
