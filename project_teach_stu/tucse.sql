-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 11:58 PM
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
-- Table structure for table `assignment_questions`
--

CREATE TABLE IF NOT EXISTS `assignment_questions` (
  `assignment_number` int(4) NOT NULL AUTO_INCREMENT,
  `teacher_code` varchar(5) NOT NULL,
  `group` varchar(5) NOT NULL,
  `subject-code` varchar(7) NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `tlp` varchar(3) NOT NULL,
  `time_given` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Last_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`assignment_number`,`teacher_code`,`group`,`subject-code`,`assignment_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `assignment_questions`
--

INSERT INTO `assignment_questions` (`assignment_number`, `teacher_code`, `group`, `subject-code`, `assignment_name`, `tlp`, `time_given`, `Last_date`) VALUES
(1, 'PBA', 'coe6', 'ucs502', 'wa-startup', 'P', '2015-01-20 15:52:24', '2015-01-16 19:32:49'),
(3, 'PBA', 'coe3', 'ucs621', 'wa-regression', 'p', '2015-01-20 15:52:24', '2015-01-17 13:39:16'),
(4, 'PBA', 'coe6', 'ucs621', 'wa-regression', 'p', '2015-01-20 15:52:24', '2015-01-17 13:39:34'),
(6, 'PBA', 'coe6', 'ucs621', 'wa-clustering', 'p', '2015-01-20 15:52:24', '2015-01-17 13:41:27'),
(7, 'tbh', 'coe5', 'ucs404', 'php', 'T', '2015-01-17 13:41:39', '2015-01-17 13:41:39'),
(29, 'tbh', 'COE6', 'UCS404', 'ea', 'P', '2015-01-16 23:24:46', '2015-01-17 13:41:39'),
(31, 'tbh', 'COE6', 'UCS404', 'sussessful', 'P', '2015-01-16 23:30:08', '2015-01-17 13:41:39'),
(32, 'tbh', 'COE6', 'UCS404', 'fa', 'P', '2015-01-16 23:30:26', '2015-01-17 13:41:39'),
(41, 'PBA', 'COE6', 'UCS502', 'WAclustring', 'P', '2015-01-20 15:52:24', '2015-01-17 13:41:39'),
(42, 'PBA', 'COE6', 'UCS502', 'waconcepts', 'P', '2015-01-20 15:52:24', '2015-01-17 13:41:39'),
(43, 'PBA', 'COE6', 'UCS502', 'wadecisiontree', 'P', '2015-01-20 15:52:24', '2015-01-17 13:41:39'),
(44, 'PBA', 'COE6', 'UCS502', 'wad', 'P', '2015-01-20 15:52:24', '2015-01-17 13:41:39'),
(45, 'PBA', 'COE6', 'UCS502', 'de', 'P', '2015-01-20 15:52:24', '2015-01-17 13:41:39'),
(48, 'PBA', 'COE7', 'UCS621', 's', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(49, 'PBA', 'COE7', 'UCS621', 'da', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(50, 'tbh', 'COE6', 'UCS404', 'project', 'P', '2015-01-18 04:53:22', '2015-01-18 18:30:00'),
(51, 'PBA', 'COE5', 'UCS621', 'wastartup', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(52, 'PBA', 'COE5', 'UCS621', 'c', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(53, 'PBA', 'COE5', 'UCS621', 'wa', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(54, 'PBA', 'COE5', 'UCS621', 'bigg', 'P', '2015-01-20 15:52:24', '2015-01-18 18:30:00'),
(57, 'krk', 'COE6', 'UTA003', 'hj', 'P', '2015-01-20 04:42:05', '2015-01-20 18:30:00'),
(58, 'PBA', 'COE3', 'UCS404', 'HO', 'T', '2015-01-20 15:52:24', '2015-01-20 18:30:00'),
(59, 'PBA', 'COE6', 'UCS621', 'fadsgag', 'P', '2015-01-20 15:52:24', '2015-01-20 18:30:00'),
(60, 'pba', 'COE3', 'UCS404', 'da', 'T', '2015-01-19 23:30:17', '2015-01-20 18:30:00'),
(61, 'pbh', 'COE6', 'ucs621', 'dt', 'P', '2015-01-21 04:50:51', '2015-01-21 18:30:00'),
(62, 'pbh', 'COE6', 'UCS621', 'vsd', 'T', '2015-01-23 03:32:47', '2015-01-23 18:30:00'),
(63, 'pbh', 'COE6', 'UCS502', 'lol', 'T', '2015-01-25 21:11:56', '2015-01-28 21:03:00'),
(64, 'pbh', 'COE6', 'UCS502', 'jbjk', 'T', '2015-01-25 03:29:00', '2015-01-25 18:30:00'),
(65, 'pbh', 'COE6', 'UCS502', 'hjbk', 'T', '2015-01-25 03:35:34', '2015-01-25 18:30:00'),
(66, 'pbh', 'COE6', 'testtin', 'Saloni Dua', 'T', '2015-01-25 04:50:50', '2015-01-26 18:30:00'),
(67, 'aa', 'ECE6', 'uec612', 'KRO', 'T', '2015-01-25 06:14:27', '2015-01-25 22:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_solutions`
--

CREATE TABLE IF NOT EXISTS `assignment_solutions` (
  `solution_number` int(10) NOT NULL AUTO_INCREMENT,
  `assignment_number` int(10) NOT NULL,
  `roll_number` int(10) NOT NULL,
  `time_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`solution_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `assignment_solutions`
--

INSERT INTO `assignment_solutions` (`solution_number`, `assignment_number`, `roll_number`, `time_uploaded`) VALUES
(1, 63, 101203067, '2015-01-25 18:58:40'),
(2, 63, 101203067, '2015-01-25 19:07:26'),
(3, 63, 101203067, '2015-01-25 19:36:57'),
(4, 63, 101203067, '2015-01-25 19:43:49'),
(5, 63, 101203067, '2015-01-25 19:46:21'),
(6, 65, 101203067, '2015-01-25 20:35:06'),
(7, 63, 101203067, '2015-01-25 20:37:01'),
(8, 63, 101203067, '2015-01-25 20:39:57'),
(9, 64, 101203067, '2015-01-25 20:40:44'),
(10, 63, 101203067, '2015-01-25 20:41:33'),
(11, 63, 101203067, '2015-01-25 20:42:02'),
(12, 64, 101203067, '2015-01-25 20:42:20'),
(13, 64, 101203067, '2015-01-25 20:43:03'),
(14, 63, 101203067, '2015-01-25 21:03:52'),
(15, 63, 101203067, '2015-01-25 21:04:13'),
(16, 63, 101203067, '2015-01-25 21:04:35'),
(17, 63, 101203067, '2015-01-25 21:04:52'),
(18, 63, 101203067, '2015-01-25 21:05:23'),
(19, 63, 101203067, '2015-01-25 21:06:02'),
(20, 63, 101203067, '2015-01-25 21:06:45'),
(21, 63, 101203067, '2015-01-25 21:07:03'),
(22, 63, 101203067, '2015-01-25 21:12:12'),
(23, 63, 101203067, '2015-01-25 21:12:35'),
(24, 63, 101203067, '2015-01-25 21:43:40'),
(25, 67, 101206120, '2015-01-25 22:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groups` text,
  `tlp` varchar(1) DEFAULT NULL,
  `message` longtext,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `groups`, `tlp`, `message`, `time`) VALUES
(1, 'COE6', 'T', 'hjbhjnjnd', '2015-01-23 18:41:27'),
(2, 'bjkn', 'j', 'njknkn', '2015-01-23 19:00:16'),
(3, 'hbh', 'i', 'hjbkn', '2015-01-23 19:03:56'),
(4, 'COE6,COE7,COE4', 'L', 'jhikj', '2015-01-23 19:11:22'),
(5, 'COE6,COE7,COE4', 'L', '		iknk', '2015-01-23 19:14:06'),
(6, 'COE6,COE7,COE4', 'L', 'jk', '2015-01-23 19:17:33'),
(8, 'COE3,COE4,COE7,COE6,COE5,COE6', 'L', '		jhbj', '2015-01-23 19:36:19'),
(9, 'COE3,COE5,COE6,COE7,COE4', 'L', 'Hi', '2015-01-23 19:37:57'),
(10, 'COE3,COE5,COE6,COE7,COE4', 'L', 'ijk', '2015-01-23 19:41:10'),
(11, 'COE3,COE5,COE6,COE7,COE4', 'L', 'nknlk', '2015-01-23 19:43:57'),
(12, 'COE3,COE5,COE6,COE7,COE4', 'L', '		', '2015-01-23 19:44:14'),
(13, 'COE3,COE5,COE6,COE7,COE4', 'L', 'kjk', '2015-01-23 19:45:25'),
(14, 'COE5', 'T', 'vdf', '2015-01-23 19:52:34'),
(15, 'COE5', 'T', '		sdv', '2015-01-23 19:53:14'),
(16, 'COE3,COE5,COE6,COE7,COE4', 'L', 'kml', '2015-01-23 19:53:56'),
(17, 'COE3,COE5,COE6,COE7,COE4', 'L', 'canceled', '2015-01-23 21:03:47'),
(18, 'COE3', 'T', 'class canceld', '2015-01-24 10:43:46'),
(19, 'COE3,COE5,COE6,COE7,COE4', 'L', 'kjsndfjnsdkjfnsdnf', '2015-01-24 12:58:20'),
(20, 'COE8,COE5', 'L', '		', '2015-01-25 22:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `slide_no` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `subject_code` varchar(7) NOT NULL,
  `teacher_code` varchar(5) NOT NULL,
  `tlp` varchar(3) NOT NULL,
  `time_given` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slide_no`,`slide_name`,`subject_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_no`, `slide_name`, `subject_code`, `teacher_code`, `tlp`, `time_given`) VALUES
(2, 'CHECK', 'UCS621', 'pbh', 'L', '2015-01-18 21:43:23'),
(3, 'chekk', 'UCS621', 'pbh', 'P', '2015-01-18 05:09:33'),
(4, 'Tut 1', 'UCS404', 'pbh', 'L', '2015-01-19 06:41:08'),
(5, 'jkknsdf', 'UCS502', 'pbh', 'L', '2015-01-25 05:23:40'),
(6, 'test', 'UCS502', 'pbh', 'L', '2015-01-25 05:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `s_number` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roll_number` int(10) NOT NULL,
  `year` int(2) NOT NULL,
  `group` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL,
  `verify` int(5) NOT NULL DEFAULT '0',
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`roll_number`),
  UNIQUE KEY `S_Number` (`s_number`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=215 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s_number`, `name`, `roll_number`, `year`, `group`, `email`, `password`, `time`, `code`, `verify`, `branch`) VALUES
(188, 'Aakarshan', 101203001, 3, 'coe1', 'akusingla@gmail.com', '001AAKA', '2015-01-21 16:25:07', '', 0, ''),
(205, 'Abhishek garg', 101203005, 3, 'coe1', 'avi.garg44@gmail.com', 'abhishekgarg1234', '2015-01-22 05:04:03', '', 0, ''),
(197, 'Akanksha Gupta', 101203009, 3, 'coe1', 'akankshagupta2110@gmail.com', 'rajatgupta', '2015-01-21 18:53:25', '', 0, ''),
(111, 'ANCHAL GARG', 101203013, 3, 'coe2', 'anchalgarg16@gmail.com', '200295', '2015-01-21 13:17:15', '', 0, ''),
(112, 'Anika Setia', 101203014, 3, 'coe1', 'anika.setia18@gmail.com', 'anika18', '2015-01-21 12:56:54', '', 0, ''),
(195, 'Ankita', 101203015, 3, 'coe2', 'ankitagulati30@gmail.com', 'ankita30@', '2015-01-21 17:56:47', '', 0, ''),
(115, 'Ashima Choudhary', 101203017, 3, 'coe2', 'ashimac2025@gmail.com', '3017ASHI', '2015-01-21 10:22:53', '', 0, ''),
(117, 'Devpriya', 101203024, 3, 'coe3', 'dpchalhotra@gmail.com', 'menmine', '2015-01-21 10:20:50', '', 0, ''),
(207, 'Digvijay', 101203028, 3, 'coe3', 'digvijay.01.dc@gmail.com', 'datamining', '2015-01-22 07:20:54', '', 0, ''),
(118, 'Divanshi Gupta', 101203029, 3, 'coe3', 'divanshi6@gmail.com', 'YfyChc%7', '2015-01-21 13:53:32', '', 0, ''),
(203, 'Gaurav Taneja', 101203033, 3, 'coe5', 'gauravme94@gmail.com', 'gauravgt123', '2015-01-22 00:40:15', '', 0, ''),
(121, 'gurnoor chauhan', 101203035, 3, 'coe4', 'gurnoorchauhan17 @gmail.com', '98141" 69088', '2015-01-21 14:47:24', '', 0, ''),
(183, 'Gyanesh', 101203036, 3, 'coe4', 'gyanesh.cse@gmail.com', 'dmlab768', '2015-01-21 15:58:10', '', 0, ''),
(184, 'harsh raj', 101203039, 3, 'coe4', 'pristine.harshraj07@gmail.com', 'mining123', '2015-01-21 16:06:32', '', 0, ''),
(122, 'Heena Dharia', 101203041, 3, 'coe3', 'heenadharia99@gmail.com', 'onsmmd09', '2015-01-21 10:30:50', '', 0, ''),
(124, 'Iman singh virk', 101203043, 3, 'coe4', 'virk.iman@gmail.com', '141969', '2015-01-21 12:47:52', '', 0, ''),
(192, 'Karan Bansal', 101203047, 3, 'coe4', 'karanb18@gmail.com', 'dataminingsuccess', '2015-01-21 17:09:48', '', 0, ''),
(128, 'Karan Pruthi', 101203049, 3, 'coe5', 'karanpruthi28@gmail.com', 'kanu@thapar', '2015-01-21 12:43:13', '', 0, ''),
(199, 'Karandeep Singh', 101203050, 3, 'coe5', 'karandeepmadaan@gmail.com', 'hello', '2015-01-21 19:32:07', '', 1, ''),
(130, 'Khusheena', 101203051, 3, 'coe6', 'khusheena_16@yahoo.com', 'khusheena51', '2015-01-21 12:45:25', '', 0, ''),
(131, 'Kirti Singh', 101203052, 3, 'coe5', 'decent1kirti@gmail.com', '3052KIRT', '2015-01-21 11:12:51', '', 0, ''),
(212, 'MANSI TESHWAR', 101203055, 3, 'coe5', 'mansiteshwar.56@gmail.com', '45016', '2015-01-22 18:32:40', '', 0, ''),
(134, 'Mayank Khemka', 101203056, 3, 'coe5', 'mkhemka2312@gmail.com', 'micky2312', '2015-01-21 15:11:39', 'check', 1, ''),
(136, 'Mrunal Kale', 101203058, 3, 'coe5', 'mrunalkips@gmail.com', 'julianschnabel', '2015-01-21 11:05:11', '', 0, ''),
(139, 'Naman Ahuja', 101203059, 3, 'coe6', 'naman@live.in', '3059NAMA', '2015-01-21 10:14:16', '', 0, ''),
(140, 'Namish Maheshwari', 101203061, 0, 'coe5', 'cool.namish@gmail.com', 'namish@11', '2015-01-21 14:47:51', '', 1, ''),
(208, 'Nidhi Azad', 101203063, 3, 'coe4', 'nidhiazad56789@gmail.com', 'N1345', '2015-01-22 07:49:37', '', 0, ''),
(141, 'Nikhil Garg', 101203064, 3, 'coe6', 'gargnikhilgarg@gmail.com', '3064NIKH', '2015-01-21 10:20:39', '', 0, ''),
(189, 'Nikhil Goyal', 101203065, 3, 'coe6', 'nkhl.goyal@gmail.com', 'hisar', '2015-01-21 16:55:56', '', 0, ''),
(142, 'Nishant Gupta', 101203066, 3, 'coe8', 'nishu94@outlook.com', 'tryit', '2015-01-21 13:52:15', '', 0, ''),
(143, 'Nitesh Singh', 101203067, 3, 'coe6', 'nitesh.ns19@gmail.com', '3067NITE', '2015-01-21 10:15:05', '', 1, ''),
(144, 'Pallavi Puri', 101203069, 3, 'coe6', 'pallavipuri2@gmail.com', 'pallavi', '2015-01-21 13:21:02', '', 0, ''),
(145, 'parul shalini', 101203070, 3, 'coe6', 'parulshalini17@gmail.com', '3070PARU', '2015-01-21 10:14:34', '', 0, ''),
(198, 'pranav', 101203074, 3, 'coe6', 'vij.pranav2@gmail.com', 'Iamwatiam@5191', '2015-01-21 19:10:27', '', 0, ''),
(149, 'Prisha Gupta', 101203075, 3, 'coe6', 'prishagupta21@gmail.com', 'tanushree2005', '2015-01-21 11:03:30', '', 0, ''),
(150, 'Priyanka', 101203076, 3, 'coe6', 'heavens.pride.priyanka@gmail.c', '4get_It', '2015-01-21 12:38:26', '', 0, ''),
(152, 'Rahul choudhary', 101203077, 3, 'coe7', 'rcjan231994@gmail.com', '3077RAHU', '2015-01-21 10:20:16', '', 0, ''),
(154, 'Rajdeep Singh', 101203079, 3, 'coe7', 'rajdeep1995singh@gmail.com', '3079RAJD', '2015-01-21 10:24:03', '', 0, ''),
(156, 'Ravneet Kaur', 101203080, 3, 'coe7', 'ravu2094@gmail.com', '3080RAVN', '2015-01-21 12:39:31', '', 0, ''),
(204, 'Rohit Saluja', 101203081, 3, 'coe7', 'ruhi.saluja@gmail.com', 'rfctyhgbrtdfgcv', '2015-01-22 03:46:42', '', 0, ''),
(158, 'Roshan Bagla', 101203082, 3, 'coe7', 'roshan.wagle789@gmail.com', 'charuwagle84', '2015-01-21 15:09:03', '', 0, ''),
(159, 'Ruminder Singh', 101203083, 3, 'coe7', 'rumi226320@gmail.com', 'rumin@te', '2015-01-21 14:46:28', '', 0, ''),
(160, 'Sagar', 101203084, 3, 'coe7', 'sagardutt60@gmail.com', 'addactormesifus', '2015-01-21 12:41:58', '', 0, ''),
(211, 'sanchit luthra', 101203086, 3, 'coe7', 'sanchit.0000013@gmail.com', 'ok24#', '2015-01-22 14:06:18', '', 0, ''),
(163, 'saurabh ', 101203088, 3, 'coe8', 'saurabhgarg510@gmail.com ', 'sg1234', '2015-01-21 13:29:28', '', 0, ''),
(164, 'Shikhar Malhotra ', 101203090, 3, 'coe8', 'shikharmalhotra1@gmail.com', 'apple', '2015-01-21 11:10:47', '', 1, ''),
(165, 'Shivanshu Gupta', 101203091, 3, 'coe8', 'shivanshu_gupta@outlook.com', 'shivi946', '2015-01-21 14:53:47', '', 0, ''),
(166, 'shonali', 101203092, 3, 'coe8', 'shonalitangar17@gmail.com', '3092SHON', '2015-01-21 15:18:28', '', 0, ''),
(169, 'Shubham Singla', 101203095, 3, 'coe8', 'shubham101203095@gmail.com', 's@9876901919', '2015-01-21 12:38:18', '', 0, ''),
(170, 'Shubhanshu Aggarwal', 101203096, 3, 'coe8', 'sbs.aggarwal1994@live.com', '3096SHUB', '2015-01-21 10:18:43', '', 0, ''),
(171, 'Shukrati Singh', 101203097, 3, 'coe8', 'shukrati08@gmail.com', 'omsairam', '2015-01-21 12:46:29', '', 0, ''),
(172, 'Simarnoor Kaur Bains', 101203101, 3, 'coe8', 'simarnoor08@gmail.com', '3101SIMA', '2015-01-21 10:22:31', '', 0, ''),
(187, 'Sinni singla', 101203102, 3, 'coe9', 'sinnisingla@gmail.com', 'allhail8', '2015-01-21 16:18:24', '', 0, ''),
(174, 'SUDIVYA THAKKAR', 101203103, 3, 'coe8', 'thakkarsudivya@gmail.com', '1012su', '2015-01-21 14:31:28', '', 0, ''),
(175, 'Sumeet Lalla', 101203104, 3, 'coe9', 'prasum2005@gmail.com', '3104SUME', '2015-01-21 13:01:44', '', 0, ''),
(176, 'Surabhi Sonker ', 101203106, 3, 'coe6', 'sonkersurabhi@yahoo.com ', 'SURabhi**91', '2015-01-21 11:04:35', '', 0, ''),
(177, 'Swati Sharma', 101203107, 3, 'coe5', 'sswati6994@gmail.com', 'SStvxqshinee2', '2015-01-21 13:28:48', '', 0, ''),
(178, 'Tejinder Singh', 101203108, 3, 'coe9', 'teji.tsk@gmail.com', 'teji@thapar', '2015-01-21 12:53:52', '', 0, ''),
(179, 'udit', 101203109, 3, 'coe9', 'agrawal', '3109UDIT', '2015-01-21 15:38:15', '', 0, ''),
(193, 'VAISHNAVI MALHOTRA', 101203110, 3, 'coe8', 'malhotravaishnavi9@gmail.com', 'simrat2112', '2015-01-21 17:54:02', '', 0, ''),
(194, 'SIMRAT BRAR', 101203113, 3, 'coe8', 'simrat_brar@hotmail.com', 'vaishu2112', '2015-01-21 17:55:54', '', 0, ''),
(214, 'Ramakrishna', 101206120, 3, 'ECE6', 'ramakrishna201093@gmail.com', '1', '2015-01-25 22:29:56', 'rwolyrtb1k9f8ifvhb894dutkkznxi', 1, 'ECE'),
(109, 'aastha narula', 101213002, 3, 'coe1', 'aastha.narula20@gmail.com', '!@aastha12', '2015-01-21 14:29:22', '', 0, ''),
(200, 'Abhijit Singh', 101213003, 3, 'coe1', 'abhijitsingh0702@gmail.com', '123456', '2015-01-21 20:41:02', '', 0, ''),
(191, 'Anantraj Singh Sodhi', 101213010, 3, 'coe2', 'anantrajs07@gmail.com', '3010ANAN', '2015-01-21 17:08:51', '', 0, ''),
(113, 'Ankita singh', 101213012, 3, 'coe2', 'ankitasingh4893@gmail.com', '3012anki', '2015-01-21 10:51:32', '', 0, ''),
(114, 'Apurve Yajnik', 101213015, 3, 'coe2', 'yapurve@gmail.com', 'apurve88', '2015-01-21 12:57:45', '', 0, ''),
(116, 'chhavi', 101213021, 3, 'coe3', 'chhavi.tu@gmail.com', 'sid376..', '2015-01-21 10:33:10', '', 0, ''),
(120, 'Gurneet Singh Hans', 101213025, 3, 'coe4', 'gurneet_singh94@ymail.com', '3025GURN', '2015-01-21 10:19:42', '', 0, ''),
(126, 'Ishaan Mittal', 101213028, 3, 'coe5', 'ishaanmittal94@gmail.com', 'mascot', '2015-01-21 15:06:09', '', 0, ''),
(129, 'Kashish Mehrotra', 101213030, 3, 'coe5', 'kashmehrotra@gmail.com', 'kashish', '2015-01-21 11:12:18', '', 0, ''),
(133, 'Madhur Gupta', 101213031, 3, 'coe5', 'madhurkj1512@yahoo.com', 'mahur_tifr', '2015-01-21 11:06:43', '', 0, ''),
(148, 'prateek sharma', 101213039, 3, 'coe6', 'pratikdofficial@gmail.com', '62488426', '2015-01-21 13:08:34', '', 0, ''),
(151, 'Rahul Ajmani', 101213041, 3, 'coe7', 'rahulajmani910@gmail.com', '3041RAHU', '2015-01-21 10:20:32', '', 0, ''),
(153, 'Rahul Johari', 101213042, 3, 'coe7', 'rahul230893@gmail.com', 'qwerty!2#4%6', '2015-01-21 10:47:58', '', 0, ''),
(155, 'Ramandeep Singh', 101213043, 3, 'coe7', 'ramanmalhotra94@yahoo.co.in', 'raman2019', '2015-01-21 11:06:41', '', 0, ''),
(213, 'Sarah Afrin', 101213048, 3, 'coe6', 'afrinsarah10@gmail.com', '3048SARA', '2015-01-24 10:41:20', 'rs1ldkd2d7fecfq3ve1v6j8boyi034', 1, 'coe'),
(201, 'shubham gupta', 101213049, 3, 'coe8', 'shubh.gupta0793@gmail.com', 'shubh123', '2015-01-21 21:16:35', '', 0, ''),
(168, 'SHUBHAM MITTAL', 101213050, 3, 'coe8', 'smittal.1994@gmail.com', '3050SHUB', '2015-01-21 11:01:36', '', 0, ''),
(173, 'Simranjot Singh Wali', 101213051, 3, 'coe8', 'simranjotwalia@gmail.com', 'mozilla93', '2015-01-21 11:10:29', '', 0, ''),
(202, 'TUSHAR KALRA', 101213053, 3, 'coe9', 'tushar.kalra37@gmail.com', '3053TUSH', '2015-01-21 21:39:10', '', 0, ''),
(181, 'vartul mittal', 101213055, 3, 'coe9', 'vartul.mittal@gmail.com', '3055VART', '2015-01-21 12:49:45', '', 0, ''),
(185, 'Vidur Sachdeva', 101213057, 3, 'coe9', 'vidursachdeva94@gmail.com', 'vidur1994', '2015-01-21 16:14:49', '', 0, ''),
(186, 'Vipul', 101213058, 3, 'coe9', 'vipul14dec@gmail.com', 'wfpul37010', '2015-01-21 16:15:12', '', 0, ''),
(190, 'vishal singla ', 101213060, 3, 'coe9', 'vsingla160@gmail.com', 'jimmy', '2015-01-21 17:07:51', '', 0, ''),
(209, 'Yagyank Chadha', 101213061, 3, 'coe9', 'yagyank@gmail.com', 'suvrit', '2015-01-22 08:45:44', '', 0, ''),
(127, 'Ishita', 101253001, 3, 'coe4', 'ishitasirohi@gmail.com', 'ishita2390', '2015-01-21 14:30:43', '', 0, ''),
(119, 'Gaurav Madaan', 101253004, 3, 'coe4', 'mdngaurav@gmail.com', 'gaurav11_password', '2015-01-21 13:16:53', '', 0, ''),
(182, 'Viswanath Aditya Gam', 101253008, 3, 'coe4', 'gvaditya.1995@gmail.com', 'nanna', '2015-01-21 10:44:17', '', 0, ''),
(180, 'UTKARSH TIWARI ', 101253009, 3, 'coe9', 'utiwari14@gmail.com', 'utkarshtiwari', '2015-01-21 14:51:56', '', 0, ''),
(138, 'NAMAN ', 101253010, 3, 'coe6', 'nmngarg174@gmail.com ', 'godforce', '2015-01-21 14:33:18', '', 0, ''),
(137, 'mukesh', 101263001, 3, 'coe5', 'kumar', 'jinette', '2015-01-21 14:05:17', '', 0, ''),
(167, 'Shubham Lamba', 101263003, 3, 'coe9', 'shubham.lba@gmail.com', '3003SHUB', '2015-01-21 10:16:34', '', 0, ''),
(210, 'Sahil manchanda', 101263005, 3, 'coe7', 'sahilmanchanda288@gmail.com', 'sahilmanchanda', '2015-01-22 14:05:55', '', 0, ''),
(110, 'abhinav miglani ', 101263006, 3, 'coe2', 'abhinav.miglani01@gmail.com ', 'castlemiglani', '2015-01-21 10:39:50', '', 0, ''),
(196, 'KARTIK ARORA', 101263007, 3, 'coe5', 'kartikeya5991@gmail.com', 'kreator', '2015-01-21 18:39:35', '', 0, ''),
(123, 'Ila Verma', 101383002, 3, 'coe6', 'ilaverma1819@gmail.com', '3002ILAV', '2015-01-21 10:23:20', '', 0, ''),
(125, 'isha', 101383003, 3, 'coe4', 'ishagupta501@gmail.com', '3003isha', '2015-01-21 10:28:57', '', 0, ''),
(132, 'komaldeep kaur', 101383006, 3, 'coe4', 'komaldeep321@gmail.com', '3006koma', '2015-01-21 10:41:29', '', 0, ''),
(135, 'Monika Pahuja', 101383009, 3, 'coe5', 'monikapahuja6@gmail.com', 'varun-mona', '2015-01-21 12:41:28', '', 0, ''),
(147, 'Prachi Sawan', 101383011, 3, 'coe7', 'prachianand7@gmail.com', '1013pra', '2015-01-21 12:37:53', '', 0, ''),
(162, 'Saloni', 101383014, 3, 'coe8', 'saloni.saikia@gmail.com', '3014SALO', '2015-01-21 10:14:51', '', 0, ''),
(146, 'piyush gupta', 101383018, 3, 'coe9', 'dpiyush.gupta@gmail.com', '3018PIYU', '2015-01-21 10:16:38', '', 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

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
(24, 101203067, 'ucs502', 'coe6', 0),
(25, 101213048, 'ucs601', 'coe6', 0),
(26, 101213048, 'ucs602', 'coe6', 0),
(27, 101213048, 'ucs636', 'coe6', 0),
(28, 101213048, 'ucs703', 'coe6', 0),
(29, 101213048, 'ucs404', 'coe6', 0),
(30, 101213048, 'uta003', 'coe6', 0),
(31, 101213048, 'UCS502', 'coe5', 0),
(32, 101203056, 'UCS502', 'coe3', 0),
(33, 101203056, 'UCS636', '', 0),
(34, 101203056, 'UCS601', '', 0),
(35, 101203056, 'UCS601', '', 0),
(36, 101203056, 'UCS402', '', 0),
(37, 101203090, 'UCS502', 'coe8', 0),
(38, 101203090, 'UCS503', '', 0),
(39, 101203090, 'UCS703', '', 0),
(40, 101203090, 'UCS101', '', 0),
(41, 101203090, 'UTA003', '', 0),
(42, 101203090, 'UCS703', '', 0),
(43, 101203090, 'UCS602', '', 0),
(45, 101203050, 'UCS702', 'coe5', 0),
(46, 101203050, 'UCS621', 'coe5', 0),
(47, 101203050, 'UCS601', 'coe5', 0),
(48, 101203050, 'UCS403', 'coe5', 0),
(49, 101203050, 'testtin', 'coe5', 0),
(50, 101203050, 'UCS504', 'coe5', 0),
(51, 101203061, 'UCS601', 'coe5', 3),
(52, 101203061, 'UCS503', 'coe5', 3),
(53, 101203061, 'UCS502', 'coe5', 3),
(54, 101206120, 'UEC606', 'ECE6', 3),
(55, 101206120, 'uec612', 'ECE6', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_number` int(10) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(7) NOT NULL,
  `subject_name` longtext NOT NULL,
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`subject_code`),
  UNIQUE KEY `s_number` (`s_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_number`, `subject_code`, `subject_name`, `branch`) VALUES
(35, 'testtin', 'kr raha hoon', ''),
(17, 'UCS101', 'Discrete Mathematical Structures', 'COE'),
(19, 'UCS301', 'Data Structures', 'COE'),
(20, 'UCS302', 'Object Oriented Programming', 'COE'),
(30, 'UCS303', 'Operating Systems', 'COE'),
(16, 'UCS401', 'Computer System Architecture', 'COE'),
(7, 'UCS402', 'Computer Networks', 'COE'),
(5, 'UCS403', 'Analysis and Design of Information System', 'COE'),
(3, 'UCS404', 'Principles of Programming Languages', 'COE'),
(23, 'UCS501', 'Algorithm Analysis and Design', 'COE'),
(1, 'UCS502', 'Database Management System', 'COE'),
(6, 'UCS503', 'Computer Graphics', 'COE'),
(25, 'UCS504', 'Web Technologies', 'COE'),
(26, 'UCS601', 'Theory of Computation', 'COE'),
(27, 'UCS602', 'Software Engineering', 'COE'),
(2, 'UCS621', 'Data Mining and warehouse', 'COE'),
(8, 'UCS636', 'Cloud Computing', 'COE'),
(28, 'UCS702', 'Compiler Construction', 'COE'),
(29, 'UCS703', 'Artificial Intelligence', 'COE'),
(36, 'UEC606', 'MICROC', ''),
(37, 'uec612', 'dsd', ''),
(11, 'UTA003', 'Computer Programming', 'COE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `Teacher_Number` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Mobile_No` bigint(12) DEFAULT NULL,
  `Teacher_Code` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(40) NOT NULL,
  `Verify` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Teacher_Code`),
  UNIQUE KEY `Teacher_Number` (`Teacher_Number`,`Mobile_No`,`Teacher_Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`Teacher_Number`, `Name`, `department`, `Email`, `Mobile_No`, `Teacher_Code`, `password`, `Time`, `code`, `Verify`) VALUES
(16, 'Alpana', 'ECE', 'alpana.tiet@gmail.com', 0, 'AA', '1', '2015-01-25 22:32:41', 'n0d5grwk04v8hyxutdh9n4027r2uhw', 0),
(15, 'Karamjit Kaur', '', 'karamjit.kaur@thapar.edu', 0, 'krk', 'test123', '2015-01-25 17:26:57', '493i908jxl21bn7v8nz8auhi4zhnq', 0),
(1, 'nitesh', '', 'nitesh.ns19@gmail.com', 8288838038, 'nit', '123456789', '2015-01-25 17:27:01', '123456789', 1),
(4, 'Nitesh Singh', '', 'abc@thapar.edu', 8288838038, 'nitr', 'password', '2015-01-25 17:27:04', '8bwnsqgrwvsuej2503b5d1ubck7qt', 0),
(10, 'Nitesh', '', 'abc@gmail.com', 8288838035, 'nitre', 'password', '2015-01-25 17:27:08', 'p73i8fxn3hw6zq7pdnai2uf7cps74', 0),
(12, 'Dr. Parteek Bhatia', 'COE', 'parteek.bhatia@thapar.edu', 8288838038, 'pbh', 'test123', '2015-01-25 17:59:24', '087ps1l5s3bu8t24csg2nczy2q1r8h', 0),
(14, 'nitesh', '', 'koole@gma.co', 0, 'rea', '123', '2015-01-25 17:27:10', '64okm759dp9uq4v0l34b8dpwhbykp', 0),
(13, 'Tarunpreet Bhatia', 'COE', 'tarunpreet@thapar.com', 9999, 'tbh', 'test123', '2015-01-25 22:03:46', 'cdkdduparu44o8xs9s3iiuq6bjevj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `teacher_code` varchar(7) NOT NULL,
  `subject_code` varchar(7) NOT NULL,
  `group` varchar(6) NOT NULL,
  `tlp` varchar(3) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`sno`, `teacher_code`, `subject_code`, `group`, `tlp`) VALUES
(135, 'pbh', 'UCS502', 'coe6', 't'),
(136, 'pbh', 'UCS621', 'coe6', 't'),
(137, 'tbh', 'UCS502', 'coe8', 'p'),
(138, 'pbh', 'UCS502', 'coe8', 'l'),
(139, 'pbh', 'UCS502', 'coe5', 'l'),
(140, 'pbh', 'UTA003', 'coe8', 't'),
(141, 'aa', 'UEC606', 'ece6', 't'),
(142, 'aa', 'uec612', 'ece6', 't'),
(143, 'aa', 'uec612', 'ece6', 'l'),
(144, 'aa', 'uec612', 'ece4', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `total_departments`
--

CREATE TABLE IF NOT EXISTS `total_departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `total_departments`
--

INSERT INTO `total_departments` (`id`, `code`, `name`) VALUES
(1, 'COE', 'Computer Engineering'),
(2, 'ECE', 'Electronics and Communications');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
