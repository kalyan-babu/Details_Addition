-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 09:09 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sno`, `email`, `name`, `salary`) VALUES
(17, 'india1354@gmail.com', 'Harsha vardan', 57000),
(24, 'india1354@gmail.com', 'sandeep', 55000),
(25, 'india1354@gmail.com', 'Justin Beiber', 15000),
(26, 'india1354@gmail.com', 'Sundar pichai', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('india1354@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
