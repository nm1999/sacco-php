-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2021 at 11:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nephewname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mothername` varchar(225) NOT NULL,
  PRIMARY KEY (`Title`),
  UNIQUE KEY `password` (`password`),
  KEY `Title` (`Title`),
  KEY `id` (`id`),
  KEY `password_2` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `Title`, `password`, `nephewname`, `nickname`, `mothername`) VALUES
(13, 'Lukenge benard', 'ben@gmail.com', 'Chairman', 'luks', 'Sowedi', 'Computer wizard', 'Harriet'),
(12, 'Abarikurungi Budget', 'budget@gmail.com', 'Treasurer', 'budget', 'Diana', 'maama corona', 'Claire');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(225) NOT NULL,
  `dob` varchar(225) NOT NULL,
  `email` varchar(525) NOT NULL,
  `phone` int(225) NOT NULL,
  `password1` varchar(225) NOT NULL,
  `deposite` varchar(255) NOT NULL,
  `latepay` varchar(255) NOT NULL,
  `withdrawtime` varchar(255) NOT NULL,
  `accountNo` varchar(255) NOT NULL,
  `realdate` varchar(225) NOT NULL,
  `loan` varchar(255) NOT NULL,
  `dateofreturn` int(255) NOT NULL,
  PRIMARY KEY (`phone`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `photo`, `firstname`, `surname`, `dob`, `email`, `phone`, `password1`, `deposite`, `latepay`, `withdrawtime`, `accountNo`, `realdate`, `loan`, `dateofreturn`) VALUES
(95, 'profile/IMG_20200220_105853_5.jpg', 'Naula ', 'Zaina Edris', '2000-03-23', 'edris@gmail.com', 78436256, 'Allah', '32000', '2000', '0', '320078436256', '18/01/2021', '0', 0),
(96, 'profile/IMG_20200219_135822_4.jpg', 'Nazziwa', 'Sharon', '1998-03-12', 'sharon@gmail.com', 786543728, 'sharon1234', '22000', '2000', '0', '3200786543728', '18/01/2021', '0', 0),
(97, 'profile/IMG_20200210_111321_2.jpg', 'Sserwadda', 'Mukasa Joseph', '2000-04-03', 'mukasajoseph@gmail.com', 757163823, 'josh1234', '10000', '2000', '0', '3200757163823', '18/01/2021', '0', 0),
(98, 'profile/IMG_20200228_095236_6.jpg', 'Laya', 'Godfrey Clement', '1998-03-02', 'layagodfreyclement@gmail.com', 712748234, 'layagodfrey', '50000', '2000', '0', '3200712748234', '18/01/2021', '0', 0),
(99, 'profile/IMG_20200213_183602_2.jpg', 'Muzamuzi', 'Lenox', '1998-02-02', 'lenox@gmail.com', 786354235, 'lenox', '33000', '2000', '0', '3200786354235', '18/01/2021', '0', 0),
(94, 'profile/IMG_20200208_164541_4.jpg', 'Nyanzi', 'Matia', '1998-03-12', 'matia@gmail.com', 706806111, 'matia', '243000', '2000', '0', '3200706806111', '18/01/2021', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin` ADD FULLTEXT KEY `password_3` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
