-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `student`
--
CREATE DATABASE student; 
USE student; 
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  -- roles will suit the different levels of user accounts based on 1,2,3. 
  -- where 1 will be the admin, 2 a department, 3 will be set as the default
  -- for new students registering 
  `role` tinyint(4) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `email_2` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(12, 'typical student', 'student@gmail.com', '$2y$10$ZE9yRxP98BNNyY6iOvLMUe4u9P1QU8LoMQOy9rUneIw.26sW1lKki', 3),
(10, 'department', 'someDepartmentEmail@gmail.com', '$2y$10$sUy1yfCmTR74cYDRrLWtDerb.zFmVydJk5vxeMlMoSwxGkxkt3NXe', 2),
(11, 'admin', 'someAdminEmail@gmail.com', '$2y$10$eLMwsTgbJ2OvcHmNrdZUh.c8wDccrqTF/FDGlzcZ0/waTRa1QVImG', 1);