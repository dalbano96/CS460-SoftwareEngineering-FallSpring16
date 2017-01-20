-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 01:39 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_program_bridge`
--

CREATE TABLE IF NOT EXISTS `student_count` (
  `D_ID` int(100) NOT NULL,
  `P_ID` int(100) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- place holders for 2 students index 16 and 18 from user table

INSERT INTO `student_count` (`D_ID`, `P_ID`, `id`) VALUES
(1, 1, 16),
(2, 2, 18)



