-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2012 at 06:50 PM
-- Server version: 5.1.63
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sbobonet_kracktube`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'PK ',
  `c_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` timestamp NULL DEFAULT NULL,
  `c_user` varchar(20) DEFAULT NULL,
  `m_type` varchar(20) DEFAULT NULL COMMENT 'type of media, essentially, what media table it refers to',
  `x_media_id` varchar(20) NOT NULL,
  PRIMARY KEY (`media_id`),
  UNIQUE KEY `x_media_id` (`x_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `c_date`, `u_date`, `c_user`, `m_type`, `x_media_id`) VALUES
(129, '2012-08-12 18:49:09', NULL, NULL, 'utube', 'yBlvNSfqAj0'),
(130, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'vdrqA93sW-8'),
(131, '2012-08-12 18:49:10', NULL, NULL, 'utube', '-rAkOMWBZyA'),
(132, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'vgr2syY_OU4'),
(133, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'PtCu34Tq94I'),
(134, '2012-08-12 18:49:10', NULL, NULL, 'utube', '9YD6OxR3w04'),
(135, '2012-08-12 18:49:10', NULL, NULL, 'utube', '-k69jaqNCF0'),
(136, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'FCfoj2VDqZ4'),
(137, '2012-08-12 18:49:10', NULL, NULL, 'utube', '2LV-GG6EytU'),
(138, '2012-08-12 18:49:10', NULL, NULL, 'utube', '5xm4uXo5894'),
(139, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'rTecPsfEA_M'),
(140, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'BAi6uYgcl7E'),
(141, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'CkxflSIbWE4'),
(142, '2012-08-12 18:49:10', NULL, NULL, 'utube', '9Wiypresvrs'),
(143, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'RHPMocTmC08'),
(144, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'MTqyV5Kw9Ss'),
(145, '2012-08-12 18:49:10', NULL, NULL, 'utube', 'zIrhcTkHX_A'),
(146, '2012-08-12 18:49:11', NULL, NULL, 'utube', '3zuNlYbLck0'),
(147, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'jEb9Z9CWaOI'),
(148, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'XGACG0mLwvU'),
(149, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'UWExFQoT2B8'),
(150, '2012-08-12 18:49:11', NULL, NULL, 'utube', '6haxlVfVB4s'),
(151, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'YPIA7mpm1wU'),
(152, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'dWnP4li8pZI'),
(153, '2012-08-12 18:49:11', NULL, NULL, 'utube', 'EXADwrMEMao');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `title_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `c_user` varchar(20) NOT NULL,
  `media_id` int(10) unsigned NOT NULL,
  `curr_votes` int(10) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `c_date`, `c_user`, `media_id`, `curr_votes`, `title`) VALUES
(1, '2012-08-13 00:34:43', 'origtitleuser', 129, 13, 'CATT LAUER'),
(2, '2012-08-12 18:49:10', 'origtitleuser', 130, 0, 'Nicki Minaj - Pound The Alarm (Explicit)'),
(3, '2012-08-12 18:49:10', 'origtitleuser', 131, 0, 'Tekkit Part 17 - New Beginnings'),
(4, '2012-08-12 18:49:10', 'origtitleuser', 132, 0, 'NEW SKYFALL INTERNATIONAL TRAILER'),
(5, '2012-08-12 18:49:10', 'origtitleuser', 133, 0, 'Driver Takes Revenge on Second Driver'),
(6, '2012-08-12 18:49:10', 'origtitleuser', 134, 0, 'First Person World War II'),
(7, '2012-08-12 18:49:10', 'origtitleuser', 135, 0, 'HOPE SOLO, D-BAGS, and PHELPS VS LOCHTE'),
(8, '2012-08-12 18:49:10', 'origtitleuser', 136, 0, 'Rick Ross feat. Dr. Dre and JAY Z - 3 Kings (MMG Visual Piece)'),
(9, '2012-08-12 18:49:10', 'origtitleuser', 137, 0, 'Pig Face Stew - Epic Meal Time'),
(10, '2012-08-12 18:49:10', 'origtitleuser', 138, 0, 'ROOM TOUR!!! (Macbarbie07)'),
(11, '2012-08-12 18:49:10', 'origtitleuser', 139, 0, 'Minecraft: Enderman"s Game'),
(12, '2012-08-12 18:49:10', 'origtitleuser', 140, 0, 'Happy Wheels - GRANDPA RAP - Part 49'),
(13, '2012-08-12 18:49:10', 'origtitleuser', 141, 0, 'Drunk Driver Car Crash and Aftermath'),
(14, '2012-08-12 18:49:10', 'origtitleuser', 142, 0, 'Paranormal Activity 4 Official Trailer Teaser'),
(15, '2012-08-12 18:49:10', 'origtitleuser', 143, 0, 'Zombie Experiment NYC'),
(16, '2012-08-12 18:49:10', 'origtitleuser', 144, 0, 'REINCARNATED (ft. Snoop Dogg): Official Documentary Trailer'),
(17, '2012-08-12 23:32:55', 'origtitleuser', 145, 2, 'Future - Turn On The Lights'),
(18, '2012-08-12 18:49:11', 'origtitleuser', 146, 0, 'Happy Wheels w/Nova Ep.181 FACECAM - SPLAT ON THE CEILING'),
(19, '2012-08-12 18:49:11', 'origtitleuser', 147, 0, 'Leaked iPhone 5 Pics?!'),
(20, '2012-08-12 18:49:11', 'origtitleuser', 148, 0, 'AWESOME NEW ROBOT!'),
(21, '2012-08-12 18:49:11', 'origtitleuser', 149, 0, 'Trials Evolution - Trials Files #15'),
(22, '2012-08-12 18:49:11', 'origtitleuser', 150, 0, 'The Change Is Coming! | The Minecraft Project | #256'),
(23, '2012-08-12 18:49:11', 'origtitleuser', 151, 0, 'Call Me Maybe - 2012 USA Olympic Swimming Team'),
(24, '2012-08-12 18:49:11', 'origtitleuser', 152, 0, 'Harper Gruzins "worst National Anthem ever" at MLS game'),
(25, '2012-08-12 18:49:11', 'origtitleuser', 153, 0, '20 Stereotypes'),
(26, '2012-08-12 23:44:44', 'origtitleuser', 129, 9, 'Cat Lower is a lame name'),
(30, '2012-08-12 23:33:06', 'Steve', 129, 6, 'ttttttt'),
(31, '2012-08-12 23:32:03', 'Steve', 129, 5, 'This is some really, really, really funny poop!'),
(32, '2012-08-12 23:41:05', 'Steve', 131, 2, 'This one, is not quite as funny'),
(33, '2012-08-12 22:23:36', 'Steve', 132, 1, 'Blond, James Blond'),
(34, '2012-08-12 22:25:01', 'Steve', 144, 1, 'Snoop Lion'),
(35, '2012-08-12 23:32:46', 'Steve', 143, 2, ''),
(36, '2012-08-12 23:40:39', 'Steve', 145, 4, 'Here''s another title'),
(37, '2012-08-12 23:41:31', 'Steve', 135, 2, 'Hope, a whole new title'),
(38, '2012-08-12 23:44:16', 'Steve', 138, 2, 'The most interesting thing that you will see today.'),
(39, '2012-08-12 23:53:40', 'Steve', 142, 0, 'this is a test'),
(40, '2012-08-12 23:53:53', 'Steve', 142, 1, 'this is a test'),
(41, '2012-08-13 00:37:16', 'Steve', 130, 2, 'Niki Minajs titties'),
(42, '2012-08-13 00:38:50', 'Steve', 130, 4, 'Big booties');

-- --------------------------------------------------------

--
-- Table structure for table `utube_media`
--

DROP TABLE IF EXISTS `utube_media`;
CREATE TABLE IF NOT EXISTS `utube_media` (
  `utube_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `utube_id` varchar(20) NOT NULL,
  PRIMARY KEY (`utube_media_id`),
  UNIQUE KEY `utube_id` (`utube_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `vote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_user` varchar(20) NOT NULL,
  `title_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `c_user`, `title_id`) VALUES
(2, 'Steve', 1),
(3, 'Steve', 26),
(4, 'Steve', 26),
(5, 'Steve', 31),
(6, 'Steve', 31),
(7, 'Steve', 33),
(8, 'Steve', 34),
(9, 'Steve', 26),
(10, 'Steve', 26),
(11, 'Steve', 26),
(12, 'Steve', 1),
(13, 'Steve', 1),
(14, 'Steve', 1),
(15, 'Steve', 1),
(16, 'Steve', 31),
(17, 'Steve', 31),
(18, 'Steve', 31),
(19, 'Steve', 26),
(20, 'Steve', 26),
(21, 'Steve', 1),
(22, 'Steve', 1),
(23, 'Steve', 1),
(24, 'Steve', 35),
(25, 'Steve', 35),
(26, 'Steve', 17),
(27, 'Steve', 17),
(28, 'Steve', 30),
(29, 'Steve', 30),
(30, 'Steve', 30),
(31, 'Steve', 30),
(32, 'Steve', 30),
(33, 'Steve', 30),
(34, 'Steve', 36),
(35, 'Steve', 36),
(36, 'Steve', 36),
(37, 'Steve', 36),
(38, 'Steve', 32),
(39, 'Steve', 32),
(40, 'Steve', 37),
(41, 'Steve', 37),
(42, 'Steve', 38),
(43, 'Steve', 38),
(44, 'Steve', 26),
(45, 'Steve', 26),
(46, 'Steve', 26),
(47, 'Steve', 40),
(48, 'Steve', 1),
(49, 'Steve', 1),
(50, 'Steve', 1),
(51, 'Steve', 1),
(52, 'Steve', 1),
(53, 'Steve', 1),
(54, 'Steve', 41),
(55, 'Steve', 41),
(56, 'Steve', 42),
(57, 'Steve', 42),
(58, 'Steve', 42),
(59, 'Steve', 42);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
