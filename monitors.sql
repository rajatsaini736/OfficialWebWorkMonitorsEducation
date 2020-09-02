-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 08:28 PM
-- Server version: 5.7.21-log
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'kapil', 'kapil@gmail.com', 'kapil');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `title`, `name`, `date`) VALUES
(1, 'post1', '20200618065823-1-14-6-20.jpeg', '2020-06-18'),
(2, 'post2', '20200618065904-2-14-6-20.jpeg', '2020-06-18'),
(3, 'post3', '20200618065913-3-15-6-20.jpeg', '2020-06-18'),
(4, 'post4', '20200618065924-4-15-6-20.jpeg', '2020-06-18'),
(5, 'post5', '20200618065933-5-16-6-20.jpeg', '2020-06-18'),
(6, 'post6', '20200618065941-6-16-6-20.jpeg', '2020-06-18'),
(7, 'post7', '20200618065950-7-17-6-20.jpeg', '2020-06-18'),
(8, 'post8', '20200618070000-8-17-6-20.jpeg', '2020-06-18'),
(9, 'post9', '20200618070020-9-18-6-20.jpeg', '2020-06-18'),
(10, 'post10', '20200618070031-10-18-6-20.jpeg', '2020-06-18'),
(11, 'rajatsaini', '20200618082524-post392020-06-18.jpeg', '2020-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`mid`, `title`, `name`, `date`) VALUES
(1, 'pdf', '20200618060822-scan0686.pdf', '2020-06-18'),
(2, 'physics', '20200618060842-scan0686.pdf', '2020-06-18'),
(3, 'hindi', '20200618060853-scan0686.pdf', '2020-06-18'),
(4, 'english', '20200618060904-scan0686.pdf', '2020-06-18'),
(5, 'chemistry', '20200618060917-scan0686.pdf', '2020-06-18'),
(6, 'math', '20200618060931-scan0686.pdf', '2020-06-18'),
(7, 'ssc', '20200618064421-scan0686.pdf', '2020-06-18'),
(8, 'mt', '20200618064538-scan0686.pdf', '2020-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'ruddy', 'ruddy@gmail.com', '7073491568', 'ruddy'),
(2, 'ef', 'ef', 'ef', 'ef'),
(3, 'kapil', 'kapil@gmail.com', '7073491568', 'kapil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
