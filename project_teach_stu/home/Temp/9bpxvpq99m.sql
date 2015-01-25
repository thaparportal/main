-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2015 at 06:24 PM
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
  `Last_date` timestamp NOT NULL,
  PRIMARY KEY (`assignment_number`,`teacher_code`,`group`,`subject-code`,`assignment_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

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
(61, 'pbh', 'COE6', 'ucs621', 'dt', 'P', '2015-01-21 04:50:51', '2015-01-21 18:30:00');

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
  `time_given` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slide_no`,`slide_name`,`subject_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_no`, `slide_name`, `subject_code`, `teacher_code`, `tlp`, `time_given`) VALUES
(2, 'CHECK', 'UCS621', 'pbh', 'L', '2015-01-18 21:43:23'),
(3, 'chekk', 'UCS621', 'pbh', 'P', '2015-01-18 05:09:33'),
(4, 'Tut 1', 'UCS404', 'pbh', 'L', '2015-01-19 06:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `S_Number` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Roll_Number` int(9) NOT NULL,
  `Year` int(1) NOT NULL,
  `Group` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL,
  `verify` int(5) NOT NULL DEFAULT '0',
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`Roll_Number`),
  UNIQUE KEY `S_Number` (`S_Number`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`S_Number`, `Name`, `Roll_Number`, `Year`, `Group`, `email`, `Password`, `Time`, `code`, `verify`, `branch`) VALUES
(4, 'Nites', 1012, 3, 'coe5', 'nitesh@gmail.com', '123', '2015-01-18 22:15:14', '19vovbtha0vbdaldti2mb71sr9vbl', 0, 'coe'),
(2, 'Nitesh Singh', 101203067, 3, 'coe3', 'abc@thapar.edu', '1', '2015-01-15 13:51:50', 'm54mwo895m5auhl3qchz2jw7qfa6q', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info1`
--

CREATE TABLE IF NOT EXISTS `student_info1` (
  `S_Number` int(10) NOT NULL DEFAULT '0',
  `Name` varchar(20) NOT NULL,
  `Roll_Number` int(9) NOT NULL,
  `Year` int(1) NOT NULL,
  `Group` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL,
  `verify` int(5) NOT NULL DEFAULT '0',
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`Roll_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info1`
--

INSERT INTO `student_info1` (`S_Number`, `Name`, `Roll_Number`, `Year`, `Group`, `email`, `Password`, `Time`, `code`, `verify`, `branch`) VALUES
(0, 'Aakarshan', 101203001, 0, 'COE1', 'akusingla@gmail.com', '001AAKA', '2015-01-21 16:25:07', '', 0, ''),
(0, 'Abhishek garg', 101203005, 0, 'COE1', 'avi.garg44@gmail.com', 'abhishekgarg1234', '2015-01-22 05:04:03', '', 0, ''),
(0, 'Akanksha Gupta', 101203009, 0, 'COE1', 'akankshagupta2110@gmail.com', 'rajatgupta', '2015-01-21 18:53:25', '', 0, ''),
(0, 'ANCHAL GARG', 101203013, 0, 'COE2', 'anchalgarg16@gmail.com', '200295', '2015-01-21 13:17:15', '', 0, ''),
(0, 'Anika Setia', 101203014, 0, 'COE1', 'anika.setia18@gmail.com', 'anika18', '2015-01-21 12:56:54', '', 0, ''),
(0, 'Ankita', 101203015, 0, 'COE2', 'ankitagulati30@gmail.com', 'ankita30@', '2015-01-21 17:56:47', '', 0, ''),
(0, 'Ashima Choudhary', 101203017, 0, 'COE2', 'ashimac2025@gmail.com', '', '2015-01-21 10:22:53', '', 0, ''),
(0, 'Devpriya', 101203024, 0, 'COE3', 'dpchalhotra@gmail.com', 'menmine', '2015-01-21 10:20:50', '', 0, ''),
(0, 'Digvijay', 101203028, 0, 'COE3', 'digvijay.01.dc@gmail.com', 'datamining', '2015-01-22 07:20:54', '', 0, ''),
(0, 'Divanshi Gupta', 101203029, 0, 'COE3', 'divanshi6@gmail.com', 'YfyChc%7', '2015-01-21 13:53:32', '', 0, ''),
(0, 'Gaurav Taneja', 101203033, 0, 'COE5', 'gauravme94@gmail.com', 'gauravgt123', '2015-01-22 00:40:15', '', 0, ''),
(0, 'gurnoor chauhan', 101203035, 0, 'COE4', 'gurnoorchauhan17 @gmail.com', '98141" 69088', '2015-01-21 14:47:24', '', 0, ''),
(0, 'Gyanesh', 101203036, 0, 'COE4', 'gyanesh.cse@gmail.com', 'dmlab768', '2015-01-21 15:58:10', '', 0, ''),
(0, 'harsh raj', 101203039, 0, 'COE4', 'pristine.harshraj07@gmail.com', 'mining123', '2015-01-21 16:06:32', '', 0, ''),
(0, 'Heena Dharia', 101203041, 0, 'COE3', 'heenadharia99@gmail.com', 'onsmmd09', '2015-01-21 10:30:50', '', 0, ''),
(0, 'Iman singh virk', 101203043, 0, 'COE4', 'virk.iman@gmail.com', '141969', '2015-01-21 12:47:52', '', 0, ''),
(0, 'Karan Bansal', 101203047, 0, 'COE4', 'karanb18@gmail.com', 'dataminingsuccess', '2015-01-21 17:09:48', '', 0, ''),
(0, 'Karan Pruthi', 101203049, 0, 'COE5', 'karanpruthi28@gmail.com', 'kanu@thapar', '2015-01-21 12:43:13', '', 0, ''),
(0, 'Karandeep Singh', 101203050, 0, 'COE5', 'karandeepmadaan@gmail.com', 'hello', '2015-01-21 19:32:07', '', 0, ''),
(0, 'Khusheena', 101203051, 0, 'COE6', 'khusheena_16@yahoo.com', 'khusheena51', '2015-01-21 12:45:25', '', 0, ''),
(0, 'Kirti Singh', 101203052, 0, 'COE5', 'decent1kirti@gmail.com', '3052KIRT', '2015-01-21 11:12:51', '', 0, ''),
(0, 'MANSI TESHWAR', 101203055, 0, 'COE5', 'mansiteshwar.56@gmail.com', '45016', '2015-01-22 18:32:40', '', 0, ''),
(0, 'Mayank Khemka', 101203056, 0, 'COE5', 'mkhemka2312@gmail.com', 'micky2312', '2015-01-21 15:11:39', '', 0, ''),
(0, 'Mrunal Kale', 101203058, 0, 'COE5', 'mrunalkips@gmail.com', 'julianschnabel', '2015-01-21 11:05:11', '', 0, ''),
(0, 'Naman Ahuja', 101203059, 0, 'COE6', 'naman@live.in', '3059NAMA', '2015-01-21 10:14:16', '', 0, ''),
(0, 'Namish Maheshwari', 101203061, 0, 'COE5', 'cool.namish@gmail.com', 'namish@11', '2015-01-21 14:47:51', '', 0, ''),
(0, 'Nidhi Azad', 101203063, 0, 'COE4', 'nidhiazad56789@gmail.com', 'N1345', '2015-01-22 07:49:37', '', 0, ''),
(0, 'Nikhil Garg', 101203064, 0, 'COE6', 'gargnikhilgarg@gmail.com', '3064NIKH', '2015-01-21 10:20:39', '', 0, ''),
(0, 'Nikhil Goyal', 101203065, 0, 'COE6', 'nkhl.goyal@gmail.com', 'hisar', '2015-01-21 16:55:56', '', 0, ''),
(0, 'Nishant Gupta', 101203066, 0, 'COE8', 'nishu94@outlook.com', 'tryit', '2015-01-21 13:52:15', '', 0, ''),
(0, 'Nitesh Singh', 101203067, 0, 'COE6', 'nitesh.ns19@gmail.com', '3067NITE', '2015-01-21 10:15:05', '', 0, ''),
(0, 'Pallavi Puri', 101203069, 0, 'COE6', 'pallavipuri2@gmail.com', 'pallavi', '2015-01-21 13:21:02', '', 0, ''),
(0, 'parul shalini', 101203070, 0, 'COE6', 'parulshalini17@gmail.com', '3070PARU', '2015-01-21 10:14:34', '', 0, ''),
(0, 'pranav', 101203074, 0, 'COE6', 'vij.pranav2@gmail.com', 'Iamwatiam@5191', '2015-01-21 19:10:27', '', 0, ''),
(0, 'Prisha Gupta', 101203075, 0, 'COE6', 'prishagupta21@gmail.com', 'tanushree2005', '2015-01-21 11:03:30', '', 0, ''),
(0, 'Priyanka', 101203076, 0, 'COE6', 'heavens.pride.priyanka@gmail.c', '4get_It', '2015-01-21 12:38:26', '', 0, ''),
(0, 'Rahul choudhary', 101203077, 0, 'COE7', 'rcjan231994@gmail.com', '3077RAHU', '2015-01-21 10:20:16', '', 0, ''),
(0, 'Rajdeep Singh', 101203079, 0, 'COE7', 'rajdeep1995singh@gmail.com', '3079RAJD', '2015-01-21 10:24:03', '', 0, ''),
(0, 'Ravneet Kaur', 101203080, 0, 'COE7', 'ravu2094@gmail.com', '3080RAVN', '2015-01-21 12:39:31', '', 0, ''),
(0, 'Rohit Saluja', 101203081, 0, 'COE7', 'ruhi.saluja@gmail.com', 'rfctyhgbrtdfgcv', '2015-01-22 03:46:42', '', 0, ''),
(0, 'Roshan Bagla', 101203082, 0, 'COE7', 'roshan.wagle789@gmail.com', 'charuwagle84', '2015-01-21 15:09:03', '', 0, ''),
(0, 'Ruminder Singh', 101203083, 0, 'COE7', 'rumi226320@gmail.com', 'rumin@te', '2015-01-21 14:46:28', '', 0, ''),
(0, 'Sagar', 101203084, 0, 'COE7', 'sagardutt60@gmail.com', 'addactormesifus', '2015-01-21 12:41:58', '', 0, ''),
(0, 'sanchit luthra', 101203086, 0, 'COE7', 'sanchit.0000013@gmail.com', 'ok24#', '2015-01-22 14:06:18', '', 0, ''),
(0, 'saurabh ', 101203088, 0, 'COE8', 'saurabhgarg510@gmail.com ', 'sg1234', '2015-01-21 13:29:28', '', 0, ''),
(0, 'Shikhar Malhotra ', 101203090, 0, 'COE8', 'shikharmalhotra1@gmail.com', 'apple', '2015-01-21 11:10:47', '', 0, ''),
(0, 'Shivanshu Gupta', 101203091, 0, 'COE8', 'shivanshu_gupta@outlook.com', 'shivi946', '2015-01-21 14:53:47', '', 0, ''),
(0, 'shonali', 101203092, 0, 'COE8', 'shonalitangar17@gmail.com', '3092SHON', '2015-01-21 15:18:28', '', 0, ''),
(0, 'Shubham Singla', 101203095, 0, 'COE8', 'shubham101203095@gmail.com', 's@9876901919', '2015-01-21 12:38:18', '', 0, ''),
(0, 'Shubhanshu Aggarwal', 101203096, 0, 'COE8', 'sbs.aggarwal1994@live.com', '3096SHUB', '2015-01-21 10:18:43', '', 0, ''),
(0, 'Shukrati Singh', 101203097, 0, 'COE8', 'Shukrati08@gmail.com', 'omsairam', '2015-01-21 12:46:29', '', 0, ''),
(0, 'Simarnoor Kaur Bains', 101203101, 0, 'COE8', 'simarnoor08@gmail.com', '3101SIMA', '2015-01-21 10:22:31', '', 0, ''),
(0, 'Sinni singla', 101203102, 0, 'COE9', 'sinnisingla@gmail.com', 'allhail8', '2015-01-21 16:18:24', '', 0, ''),
(0, 'SUDIVYA THAKKAR', 101203103, 0, 'COE8', 'thakkarsudivya gmail.com', '1012su', '2015-01-21 14:31:28', '', 0, ''),
(0, 'Sumeet Lalla', 101203104, 0, 'COE9', 'prasum2005@gmail.com', '3104SUME', '2015-01-21 13:01:44', '', 0, ''),
(0, 'Surabhi Sonker ', 101203106, 0, 'COE6', 'sonkersurabhi@yahoo.com ', 'SURabhi**91', '2015-01-21 11:04:35', '', 0, ''),
(0, 'Swati Sharma', 101203107, 0, 'COE5', 'sswati6994@gmail.com', 'SStvxqshinee2', '2015-01-21 13:28:48', '', 0, ''),
(0, 'Tejinder Singh', 101203108, 0, 'COE9', 'teji.tsk@gmail.com', 'teji@thapar', '2015-01-21 12:53:52', '', 0, ''),
(0, 'udit', 101203109, 0, 'COE9', 'agrawal', '3109UDIT', '2015-01-21 15:38:15', '', 0, ''),
(0, 'VAISHNAVI MALHOTRA', 101203110, 0, 'COE8', 'malhotravaishnavi9@gmail.com', 'simrat2112', '2015-01-21 17:54:02', '', 0, ''),
(0, 'SIMRAT BRAR', 101203113, 0, 'COE8', 'simrat_brar@hotmail.com', 'vaishu2112', '2015-01-21 17:55:54', '', 0, ''),
(0, 'aastha narula', 101213002, 0, 'COE1', 'aastha.narula20@gmail.com', '!@aastha12', '2015-01-21 14:29:22', '', 0, ''),
(0, 'Abhijit Singh', 101213003, 0, 'COE1', 'abhijitsingh0702@gmail.com', '123456', '2015-01-21 20:41:02', '', 0, ''),
(0, 'Anantraj Singh Sodhi', 101213010, 0, 'COE2', 'anantrajs07@gmail.com', '3010ANAN', '2015-01-21 17:08:51', '', 0, ''),
(0, 'Ankita singh', 101213012, 0, 'COE2', 'ankitasingh4893@gmail.com', '3012anki', '2015-01-21 10:51:32', '', 0, ''),
(0, 'Apurve Yajnik', 101213015, 0, 'COE2', 'yapurve@gmail.com', 'apurve88', '2015-01-21 12:57:45', '', 0, ''),
(0, 'chhavi', 101213021, 0, 'COE3', 'Chhavi.tu@gmail.com', 'sid376..', '2015-01-21 10:33:10', '', 0, ''),
(0, 'Gurneet Singh Hans', 101213025, 0, 'COE4', 'gurneet_singh94@ymail.com', '3025GURN', '2015-01-21 10:19:42', '', 0, ''),
(0, 'Ishaan Mittal', 101213028, 0, 'COE5', 'ishaanmittal94@gmail.com', 'mascot', '2015-01-21 15:06:09', '', 0, ''),
(0, 'Kashish Mehrotra', 101213030, 0, 'COE5', 'kashmehrotra@gmail.com', 'kashish', '2015-01-21 11:12:18', '', 0, ''),
(0, 'Madhur Gupta', 101213031, 0, 'COE5', 'madhurkj1512@yahoo.com', 'mahur_tifr', '2015-01-21 11:06:43', '', 0, ''),
(0, 'prateek sharma', 101213039, 0, 'COE6', 'pratikdofficial@gmail.com', '62488426', '2015-01-21 13:08:34', '', 0, ''),
(0, 'Rahul Ajmani', 101213041, 0, 'COE7', 'rahulajmani910@gmail.com', '3041RAHU', '2015-01-21 10:20:32', '', 0, ''),
(0, 'Rahul Johari', 101213042, 0, 'COE7', 'rahul230893@gmail.com', 'qwerty!2#4%6', '2015-01-21 10:47:58', '', 0, ''),
(0, 'Ramandeep Singh', 101213043, 0, 'COE7', 'ramanmalhotra94@yahoo.co.in', 'raman2019', '2015-01-21 11:06:41', '', 0, ''),
(0, 'shubham gupta', 101213049, 0, 'COE8', 'shubh.gupta0793@gmail.com', 'shubh123', '2015-01-21 21:16:35', '', 0, ''),
(0, 'SHUBHAM MITTAL', 101213050, 0, 'COE8', 'smittal.1994@gmail.com', '3050SHUB', '2015-01-21 11:01:36', '', 0, ''),
(0, 'Simranjot Singh Wali', 101213051, 0, 'COE8', 'simranjotwalia@gmail.com', 'mozilla93', '2015-01-21 11:10:29', '', 0, ''),
(0, 'TUSHAR KALRA', 101213053, 0, 'COE9', 'tushar.kalra37@gmail.com', '3053TUSH', '2015-01-21 21:39:10', '', 0, ''),
(0, 'vartul mittal', 101213055, 0, 'COE9', 'vartul.mittal@gmail.com', '3055VART', '2015-01-21 12:49:45', '', 0, ''),
(0, 'Vidur Sachdeva', 101213057, 0, 'COE9', 'vidursachdeva94@gmail.com', 'vidur1994', '2015-01-21 16:14:49', '', 0, ''),
(0, 'Vipul', 101213058, 0, 'COE9', 'vipul14dec@gmail.com', 'wfpul37010', '2015-01-21 16:15:12', '', 0, ''),
(0, 'vishal singla ', 101213060, 0, 'COE9', 'vsingla160@gmail.com', 'jimmy', '2015-01-21 17:07:51', '', 0, ''),
(0, 'Yagyank Chadha', 101213061, 0, 'COE9', 'yagyank@gmail.com', 'suvrit', '2015-01-22 08:45:44', '', 0, ''),
(0, 'Ishita', 101253001, 0, 'COE4', 'ishitasirohi@gmail.com', 'ishita2390', '2015-01-21 14:30:43', '', 0, ''),
(0, 'Gaurav Madaan', 101253004, 0, 'COE4', 'mdngaurav@gmail.com', 'gaurav11_password', '2015-01-21 13:16:53', '', 0, ''),
(0, 'Viswanath Aditya Gam', 101253008, 0, 'COE4', 'gvaditya.1995@gmail.com', 'nanna', '2015-01-21 10:44:17', '', 0, ''),
(0, 'UTKARSH TIWARI ', 101253009, 0, 'COE9', 'utiwari14@gmail.com', 'utkarshtiwari', '2015-01-21 14:51:56', '', 0, ''),
(0, 'NAMAN ', 101253010, 0, 'COE6', 'nmngarg174@gmail.com ', 'godforce', '2015-01-21 14:33:18', '', 0, ''),
(0, 'mukesh', 101263001, 0, 'COE5', 'kumar', 'jinette', '2015-01-21 14:05:17', '', 0, ''),
(0, 'Shubham Lamba', 101263003, 0, 'COE9', 'shubham.lba@gmail.com', '3003SHUB', '2015-01-21 10:16:34', '', 0, ''),
(0, '101263005', 101263005, 0, 'COE7', 'sahilmanchanda288@gmail.com', 'sahilmanchanda', '2015-01-22 14:05:55', '', 0, ''),
(0, 'abhinav miglani ', 101263006, 0, 'COE2', 'abhinav.miglani01@gmail.com ', 'castlemiglani', '2015-01-21 10:39:50', '', 0, ''),
(0, 'KARTIK ARORA', 101263007, 0, 'COE5', 'kartikeya5991@gmail.com', 'kreator', '2015-01-21 18:39:35', '', 0, ''),
(0, 'Ila Verma', 101383002, 0, 'COE6', 'ilaverma1819@gmail.com', '3002ILAV', '2015-01-21 10:23:20', '', 0, ''),
(0, 'isha', 101383003, 0, 'COE4', 'ishagupta501@gmail.com', '3003isha', '2015-01-21 10:28:57', '', 0, ''),
(0, 'komaldeep kaur', 101383006, 0, 'COE4', 'komaldeep321@gmail.com', '3006koma', '2015-01-21 10:41:29', '', 0, ''),
(0, 'Monika Pahuja', 101383009, 0, 'COE5', 'monikapahuja6@gmail.com', 'varun-mona', '2015-01-21 12:41:28', '', 0, ''),
(0, 'Prachi Sawan', 101383011, 0, 'COE7', 'prachianand7@gmail.com', '1013pra', '2015-01-21 12:37:53', '', 0, ''),
(0, 'Saloni', 101383014, 0, 'COE8', 'saloni.saikia@gmail.com', '3014SALO', '2015-01-21 10:14:51', '', 0, ''),
(0, 'piyush gupta', 101383018, 0, 'COE9', 'dpiyush.gupta@gmail.com', '3018PIYU', '2015-01-21 10:16:38', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_number` int(10) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(7) NOT NULL,
  `subject_name` varchar(40) NOT NULL,
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`subject_code`),
  UNIQUE KEY `s_number` (`s_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_number`, `subject_code`, `subject_name`, `branch`) VALUES
(17, 'UCS101', 'Discrete Mathematical Structures', 'COE'),
(19, 'UCS301', 'Data Structures', 'COE'),
(20, 'UCS302', 'Object Oriented Programming', 'COE'),
(30, 'UCS303', 'Operating Systems', 'COE'),
(16, 'UCS401', 'Computer System Architecture', 'COE'),
(7, 'UCS402', 'Computer Networks', 'COE'),
(5, 'UCS403', 'Analysis and Design of Information Syste', 'COE'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`Teacher_Number`, `Name`, `department`, `Email`, `Mobile_No`, `Teacher_Code`, `password`, `Time`, `code`, `Verify`) VALUES
(15, 'Karamjit Kaur', '', 'karamjit.kaur@thapar.edu', 0, 'krk', 'test123', '2015-01-23 17:10:30', '493i908jxl21bn7v8nz8auhi4zhnq', 0),
(1, 'nitesh', '', 'nitesh.ns19@gmail.com', 8288838038, 'nit', '123456789', '2015-01-23 17:11:19', '123456789', 1),
(4, 'Nitesh Singh', '', 'abc@thapar.edu', 8288838038, 'nitr', 'password', '2015-01-23 17:11:19', '8bwnsqgrwvsuej2503b5d1ubck7qt', 0),
(10, 'Nitesh', '', 'abc@gmail.com', 8288838035, 'nitre', 'password', '2015-01-23 17:11:19', 'p73i8fxn3hw6zq7pdnai2uf7cps74', 0),
(12, 'Dr. Parteek Bhatia', '', 'parteek.bhatia@thapar.edu', 8288838038, 'pbh', 'test123', '2015-01-23 17:10:22', '087ps1l5s3bu8t24csg2nczy2q1r8h', 0),
(14, 'nitesh', '', 'koole@gma.co', 0, 'rea', '123', '2015-01-16 20:39:23', '64okm759dp9uq4v0l34b8dpwhbykp', 0),
(13, 'Tarunpreet Bhatia', '', 'tarunpreet@thapar.com', 9999, 'tbh', 'test123', '2015-01-23 17:11:19', 'cdkdduparu44o8xs9s3iiuq6bjevj', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`sno`, `teacher_code`, `subject_code`, `group`, `tlp`) VALUES
(5, 'pbh', 'UCS502', 'coe5', 'L'),
(12, 'pbh', 'UCS502', 'coe3', 'T'),
(47, 'pbh', 'UCS404', 'coe6', 'l'),
(49, 'pbh', 'UCS404', 'coe5', 'l'),
(50, 'pbh', 'UCS404', 'coe3', 't'),
(52, 'pbh', 'UCS621', 'coe3', 'L'),
(53, 'pbh', 'UCS621', 'coe6', 'l'),
(54, 'pbh', 'UCS621', 'coe6', 'p'),
(55, 'pbh', 'UCS621', 'coe5', 'l'),
(56, 'pbh', 'UCS621', 'coe5', 'p'),
(63, 'krk', 'UCS636', 'coe6', 'p'),
(64, 'krk', 'UCS404', 'coe6', 'p'),
(65, 'krk', 'UTA003', 'coe6', 'p'),
(66, 'krk', 'UTA003', 'coe6', 'l'),
(67, 'krk', 'UTA003', 'coe4', 'l'),
(68, 'tbh', 'UCS404', 'coe6', 'l'),
(71, 'pbh', 'ucs621', 'coe6', 'l'),
(72, 'pbh', 'ucs621', 'coe7', 'l'),
(73, 'pbh', 'ucs503', 'None', 'NA'),
(74, 'pbh', 'ucs621', 'coe4', 'l'),
(76, 'tbh', 'UCS101', 'None', 'NA'),
(79, 'tbh', 'UCS302', 'None', 'NA'),
(81, 'tbh', 'UCS402', 'None', 'NA'),
(82, 'tbh', 'UCS501', 'None', 'NA'),
(83, 'tbh', 'UCS501', 'None', 'NA'),
(87, 'tbh', 'UCS702', 'None', 'NA'),
(92, 'pbh', 'ucs621', 'coe6', 't'),
(93, 'pbh', 'ucs621', 'coe5', 't');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
