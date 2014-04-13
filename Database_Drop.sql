-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2014 at 11:36 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(24) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(129) NOT NULL,
  `salt` varchar(30) NOT NULL,
  `health` float NOT NULL,
  `X` float NOT NULL,
  `Y` float NOT NULL,
  `Z` float NOT NULL,
  `A` float NOT NULL,
  `interior` int(2) NOT NULL,
  `hours` int(24) NOT NULL,
  `mins` int(100) NOT NULL,
  `seconds` int(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bankmoney` int(100) NOT NULL,
  `pot` int(100) NOT NULL,
  `vw` int(11) NOT NULL,
  `weaponslot1` int(2) NOT NULL,
  `weaponslot2` int(2) NOT NULL,
  `weaponslot3` int(2) NOT NULL,
  `weaponslot4` int(2) NOT NULL,
  `weaponslot5` int(2) NOT NULL,
  `skin` int(3) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `age` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `money` varchar(10) NOT NULL,
  `dead` varchar(2) NOT NULL,
  `gunlic` varchar(2) NOT NULL,
  `helper` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3435 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `pass`, `salt`, `health`, `X`, `Y`, `Z`, `A`, `interior`, `hours`, `mins`, `seconds`, `email`, `pot`, `vw`, `weaponslot1`, `weaponslot2`, `weaponslot3`, `weaponslot4`, `weaponslot5`,  `skin`, `admin`, `age`, `gender`, `money`, `dead`, `gunlic`, `helper`) VALUES
('Flake', 3434, 'fe14857ec5d07bc3afccda5a5a0823e56110d18a22f7d8992c00d44c251d793e8f576e81fda8270b30ed2dff63161b152b37597e0ac1d130741ae25bc312167b', '8g13UAlp52P4245k20GQR0o3Hs4Pzm', 100, 1631.09, 1828.98, 11.68, 116.55, 0, 0, 0, 'dd', 0, 0, 0, 0, 0, 0, 0, 0, 270, '5', '32', 'Male', '49896', '0', '1', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
