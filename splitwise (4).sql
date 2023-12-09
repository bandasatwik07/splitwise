-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2022 at 11:53 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splitwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `username` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_num` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`username`, `name`, `email`, `mobile_num`, `message`, `time`) VALUES
('abc', 'manish', 'bandasatwik4@gmail.com', '1111111111', 'nothing...just checking', '2022-10-28 20:31:18'),
('1111111111', 'manish', 'bewtbewg@gmail.com', '1111111111', 'nothing', '2022-10-29 12:44:07'),
('abc', 'atif', 'bewtbewg@gmail.com', '1111111111', 'sdvsfbgfbgf', '2022-10-29 16:56:38'),
('abc', '21bcs059@iiitdmj.ac.in', 'keerthanapalepu2002@gmail.com', '1111111111', 'wqdqx', '2022-10-29 16:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `google_oauth`
--

DROP TABLE IF EXISTS `google_oauth`;
CREATE TABLE IF NOT EXISTS `google_oauth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider` varchar(255) NOT NULL,
  `provider_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_pay`
--

DROP TABLE IF EXISTS `group_pay`;
CREATE TABLE IF NOT EXISTS `group_pay` (
  `payer_userid` varchar(15) NOT NULL,
  `amount` bigint(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `borrower_num` varchar(10) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_pay`
--

INSERT INTO `group_pay` (`payer_userid`, `amount`, `description`, `borrower_num`, `date_time`) VALUES
('2222222222', 395, 'test2', '1111111111', '2022-10-30 16:00:17'),
('1111111111', 250, 'rent', '2222222222', '2022-10-30 15:12:12'),
('1111111111', 250, 'rent', '2222222222', '2022-10-29 19:09:07'),
('3333333333', 500, 'test3', '1111111111', '2022-11-05 02:38:33'),
('3333333333', 100, 'test3', '2222222222', '2022-11-05 02:38:33'),
('1111111111', 500, 'tea', '3333333333', '2022-11-16 22:04:49'),
('1111111111', 500, 'dinner', '2222222222', '2022-11-25 17:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `settle_up`
--

DROP TABLE IF EXISTS `settle_up`;
CREATE TABLE IF NOT EXISTS `settle_up` (
  `from_whom` varchar(20) NOT NULL,
  `why` varchar(60) DEFAULT NULL,
  `amount` int(8) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settle_up`
--

INSERT INTO `settle_up` (`from_whom`, `why`, `amount`, `phone`, `time`) VALUES
('abc', 'rent', 500, '2222222222', '2022-10-29 18:31:11'),
('abc', 'lunch', 500, '2222222222', '2022-10-29 18:34:29'),
('1111111111', 'rent', 1000, '2222222222', '2022-10-29 18:35:12'),
('1111111111', 'test', 789, '2222222222', '2022-10-29 18:36:06'),
('abc', 'test2', 50, '2222222222', '2022-10-29 18:39:29'),
('abc', 'fcg', 50, '2222222222', '2022-10-29 18:41:34'),
('qwerty', 'dinner', 500, '1111111111', '2022-11-25 11:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile_num` varchar(10) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`mobile_num`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `dob`, `gender`, `mobile_num`, `email`, `username`, `password`) VALUES
('mainsh', 'babu', '2022-10-12', 'male', '1111111111', 'bewtbewg@gmail.com', 'abc', '122'),
('Banda', 'Koushal', '2022-09-30', 'male', '2222222222', 'bandasatwik4@gmail.com', 'qwerty', '122'),
('Bhukya', 'bonu', '2022-11-05', 'female', '3333333333', 'bewtbewmkg@gmail.com', 'harshan', '122');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
