-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 06:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tucse`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE IF NOT EXISTS `student_subject` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `roll_number` int(12) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `group` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`sno`, `roll_number`, `subject_code`, `group`, `year`) VALUES
(18, 101203067, 'ucs303', 'coe6', 0),
(19, 101203067, 'ucs702', 'coe6', 0),
(20, 101203067, 'ucs636', 'coe6', 0),
(21, 101203067, 'uta003', 'coe6', 0),
(22, 101203067, 'ucs501', 'coe6', 0),
(23, 101203067, 'ucs636', 'coe6', 0),
(24, 101203067, 'ucs402', 'coe6', 0),
(25, 101213048, 'ucs601', 'coe6', 0),
(26, 101213048, 'ucs602', 'coe6', 0),
(27, 101213048, 'ucs636', 'coe6', 0),
(28, 101213048, 'ucs703', 'coe6', 0),
(29, 101213048, 'ucs404', 'coe6', 0),
(30, 101213048, 'uta003', 'coe6', 0),
(31, 101213048, 'UCS504', '', 0),
(32, 101203056, 'UCS303', '', 0),
(33, 101203056, 'UCS636', '', 0),
(34, 101203056, 'UCS601', '', 0),
(35, 101203056, 'UCS601', '', 0),
(36, 101203056, 'UCS402', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
