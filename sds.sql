-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 12:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sds`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `academic_id` int(11) NOT NULL AUTO_INCREMENT,
  `matric_no` varchar(255) NOT NULL,
  `spm_no` varchar(255) NOT NULL,
  `year_of_exam` varchar(255) NOT NULL,
  `stream_type` varchar(255) NOT NULL,
  `name_of_school` varchar(255) NOT NULL,
  PRIMARY KEY (`academic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`academic_id`, `matric_no`, `spm_no`, `year_of_exam`, `stream_type`, `name_of_school`) VALUES
(1, '', 'HJ006A005', '2009', 'Science', 'SMK Taman Tuanku Jaafar'),
(2, 'CI140082', 'NG005K100', '2008', 'Science', 'SMK Taman Tuanku Jaafar');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `userName`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'PPA'),
(3, 'student'),
(4, 'PKU'),
(5, 'bursary');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `race` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `state_of_birth` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `state_of_residence` varchar(255) NOT NULL,
  `oku` varchar(3) NOT NULL,
  `type_of_dissability` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `martial_status` varchar(8) NOT NULL,
  `color_blindness` varchar(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `poscode` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `tel_no` varchar(255) NOT NULL,
  `hp_no` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `matric_no` varchar(255) NOT NULL,
  `nric` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `gender`, `date_of_birth`, `race`, `religion`, `state_of_birth`, `citizenship`, `state_of_residence`, `oku`, `type_of_dissability`, `height`, `martial_status`, `color_blindness`, `address`, `poscode`, `state`, `tel_no`, `hp_no`, `role_id`, `matric_no`, `nric`, `fullname`, `program`, `faculty`) VALUES
(1, 'Male', '2017-03-01', 'Malay', 'Islam', 'Negeri Sembilan', '- Select -', 'Negeri Sembilan', 'No', 'None', 161, 'Single', 'No', '60, Jalan TTJS 3/6. Taman Tuanku Jaafar', 71450, 'Negeri Sembilan', '066779855', '066779855', 3, 'CI140082', '900103055383', 'Sharin Yap Bin Sufian Yap', 'BIP', 'FSKTM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'CI140082', '900103055383', 3),
(2, 'joyce', 'liew', 5),
(3, 'lisa00', 'lisa00', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
