-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 09:19 PM
-- Server version: 5.5.44
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
-- Database: `adonis`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `USER` varchar(16) DEFAULT NULL,
  `friend` varchar(16) DEFAULT NULL,
  KEY `USER` (`USER`(6)),
  KEY `friend` (`friend`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `USER` varchar(16) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL,
  KEY `USER` (`USER`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auth` varchar(16) DEFAULT NULL,
  `recip` varchar(16) DEFAULT NULL,
  `pm` char(1) DEFAULT NULL,
  `TIME` int(10) UNSIGNED DEFAULT NULL,
  `message` varchar(4096) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `auth` (`auth`(6)),
  KEY `recip` (`recip`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `USER` varchar(16) DEFAULT NULL,
  `NAME` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `cardio` varchar(16) DEFAULT NULL,
  `TIME` varchar(16) DEFAULT NULL,
  `weightlift1` varchar(16) DEFAULT NULL,
  `weightlift2` varchar(16) DEFAULT NULL,
  `weightlift3` varchar(16) DEFAULT NULL,
  `sets` varchar(16) DEFAULT NULL,
  `reps` varchar(16) DEFAULT NULL,
  KEY `USER` (`USER`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `USER` varchar(16) DEFAULT NULL,
  `TEXT` varchar(4096) DEFAULT NULL,
  KEY `USER` (`USER`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
