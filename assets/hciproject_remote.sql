-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2015 at 03:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


use `csashesi_prophet-agyeman-prempeh`;

-- --------------------------------------------------------

--
-- Table structure for table `c_credentials`
--

CREATE TABLE IF NOT EXISTS `c_credentials` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pword` varchar(36) NOT NULL,
  `vendor` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_credentials`
--

INSERT INTO `c_credentials` (`user_id`, `username`, `pword`, `vendor`) VALUES
(1, 'nana_ama', '24c9e15e52afc47c225b757e7bee1f9d', 'Akornor'),
(2, 'agatha', '4108b8e30469c9302a5ae1bdb3cd5af4', 'Mannies'),
(3, 'prophet', '4f5fdb3de5aa701eae2961743a00c01c', 'Services'),
(5, 'nana_baah', '702818a8294e9d554acaf62faf0a4563', 'Services'),
(6, 'user', 'user', 'Mannies'),
(7, 'nana_baah', '702818a8294e9d554acaf62faf0a4563', 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `c_meals`
--

CREATE TABLE IF NOT EXISTS `c_meals` (
`meal_id` int(11) NOT NULL,
  `meal_name` varchar(50) NOT NULL,
  `meal_desc` varchar(200) NOT NULL,
  `meal_price` double NOT NULL,
  `rating_for` int(11) NOT NULL,
  `rating_against` int(11) NOT NULL,
  `meal_type` varchar(20) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_credentials`
--
ALTER TABLE `c_credentials`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `c_meals`
--
ALTER TABLE `c_meals`
 ADD PRIMARY KEY (`meal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_credentials`
--
ALTER TABLE `c_credentials`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `c_meals`
--
ALTER TABLE `c_meals`
MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
