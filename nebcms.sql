-- phpMyAdmin SQL Dump
-- version 4.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2013 at 05:02 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nebcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentTypeId` int(11) NOT NULL,
  `content` text NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `permalink` varchar(2000) NOT NULL,
  `publishDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `contentTypeId`, `content`, `userId`, `title`, `permalink`, `publishDate`, `updateDate`) VALUES
(1, 2, '<p>\r\n1Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut venenatis tellus. Mauris eu velit non erat sodales dapibus ac non libero. Proin nec arcu rutrum lectus commodo ultricies quis at diam. In eget euismod nisl. Quisque ac est augue, at dictum enim. Pellentesque sit amet elit felis. Maecenas suscipit, velit tincidunt interdum porta, eros est tempus dolor, consequat lobortis nisl justo at nunc.\r\n</p>\r\n<p>\r\nCras tristique aliquet elementum. Ut tellus ligula, consequat nec porttitor a, suscipit vel augue. Proin placerat ante leo, in tristique nisi. Mauris adipiscing rutrum sodales. Duis quis orci ac lectus dapibus sodales. Aenean molestie elit eget erat porta iaculis posuere enim posuere. Vivamus feugiat ultricies interdum. Duis vitae tristique leo. Donec pretium pharetra enim ac accumsan.\r\n</p>', 1, 'Lorem ipsum dolor sit amet', 'first-blog-post', '2013-05-15 04:20:00', '2013-05-15 04:20:00'),
(2, 2, '<p>\r\n2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut venenatis tellus. Mauris eu velit non erat sodales dapibus ac non libero. Proin nec arcu rutrum lectus commodo ultricies quis at diam. In eget euismod nisl. Quisque ac est augue, at dictum enim. Pellentesque sit amet elit felis. Maecenas suscipit, velit tincidunt interdum porta, eros est tempus dolor, consequat lobortis nisl justo at nunc.\r\n</p>\r\n<p>\r\nCras tristique aliquet elementum. Ut tellus ligula, consequat nec porttitor a, suscipit vel augue. Proin placerat ante leo, in tristique nisi. Mauris adipiscing rutrum sodales. Duis quis orci ac lectus dapibus sodales. Aenean molestie elit eget erat porta iaculis posuere enim posuere. Vivamus feugiat ultricies interdum. Duis vitae tristique leo. Donec pretium pharetra enim ac accumsan.\r\n</p>', 1, 'Cras tristique aliquet elementum', 'second-blog-post', '2013-05-16 15:23:00', '2013-05-16 15:23:00'),
(3, 1, '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut venenatis tellus. Mauris eu velit non erat sodales dapibus ac non libero. Proin nec arcu rutrum lectus commodo ultricies quis at diam. In eget euismod nisl. Quisque ac est augue, at dictum enim. Pellentesque sit amet elit felis. Maecenas suscipit, velit tincidunt interdum porta, eros est tempus dolor, consequat lobortis nisl justo at nunc.\r\n</p>\r\n<p>\r\nCras tristique aliquet elementum. Ut tellus ligula, consequat nec porttitor a, suscipit vel augue. Proin placerat ante leo, in tristique nisi. Mauris adipiscing rutrum sodales. Duis quis orci ac lectus dapibus sodales. Aenean molestie elit eget erat porta iaculis posuere enim posuere. Vivamus feugiat ultricies interdum. Duis vitae tristique leo. Donec pretium pharetra enim ac accumsan.\r\n</p><p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut venenatis tellus. Mauris eu velit non erat sodales dapibus ac non libero. Proin nec arcu rutrum lectus commodo ultricies quis at diam. In eget euismod nisl. Quisque ac est augue, at dictum enim. Pellentesque sit amet elit felis. Maecenas suscipit, velit tincidunt interdum porta, eros est tempus dolor, consequat lobortis nisl justo at nunc.\r\n</p>\r\n<p>\r\nCras tristique aliquet elementum. Ut tellus ligula, consequat nec porttitor a, suscipit vel augue. Proin placerat ante leo, in tristique nisi. Mauris adipiscing rutrum sodales. Duis quis orci ac lectus dapibus sodales. Aenean molestie elit eget erat porta iaculis posuere enim posuere. Vivamus feugiat ultricies interdum. Duis vitae tristique leo. Donec pretium pharetra enim ac accumsan.\r\n</p>', 1, 'Duis quis orci ac lectus dapibus sodales', 'home', '2013-05-18 00:00:00', '2013-05-18 10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `contentTypes`
--

CREATE TABLE IF NOT EXISTS `contentTypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contentTypes`
--

INSERT INTO `contentTypes` (`id`, `name`) VALUES
(1, 'Page'),
(2, 'Blog Post');

-- --------------------------------------------------------

--
-- Table structure for table `sitePreferences`
--

CREATE TABLE IF NOT EXISTS `sitePreferences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sitePreferences`
--

INSERT INTO `sitePreferences` (`id`, `name`, `value`) VALUES
(1, 'websiteName', 'Neal''s Own Parking Spot'),
(2, 'copyrightInfo', 'AmsCMS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `displayName` varchar(50) NOT NULL,
  `hash` int(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `displayName`, `hash`) VALUES
(1, 'neblackburn@gmail.com', 'Neal', 1234567890);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
