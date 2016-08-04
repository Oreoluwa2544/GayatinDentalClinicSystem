-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 10:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
`id` int(11) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `allergyname` varchar(50) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`id`, `patient_id`, `allergyname`, `dateadded`) VALUES
(1, '2', 'Seafood', '2015-09-17'),
(2, '3', 'asmathic', '2015-09-17'),
(3, '5', 'Asmathic', '2015-09-17'),
(4, '9', 'Asmathic', '2015-09-17'),
(5, '11', 'Asmathic', '2015-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `appointmentno` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `patienttype` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `date`, `time`, `reason`, `appointmentno`, `status`, `patienttype`) VALUES
(1, 'Alpha', '2015-09-19', '3:00 PM - 4:00 PM', '', 'o42ESLWp', 'Cancelled', ''),
(2, 'Bravo', '2015-09-17', '9:00 AM - 10:00 AM', '', 'onBOLBWq', 'Served', ''),
(3, 'Zebra', '2015-09-18', '9:30 AM - 10:30 AM', '', 'YJXfP73q', 'Cancelled', ''),
(4, 'Heaven', '2015-02-09', '8:30 AM - 9:30 AM', '', 'X7mFmhzm', 'Cancelled', ''),
(5, 'Zorro', '2014-09-23', '7:30 AM - 8:30 AM', '', 'zMFzTeYH', 'Cancelled', ''),
(6, 'Charlie', '2014-09-18', '10:30 AM - 11:30 AM', '', 'wdkucPmF', 'Confirmed', ''),
(7, 'Captain', '2015-04-15', '9:30 AM - 10:30 AM', '', 'EQ8a35nv', 'Cancelled', ''),
(8, 'Delta', '2014-05-20', '8:30 AM - 9:30 AM', '', 'I0SdMj5O', 'Cancelled', ''),
(9, 'Echo', '2015-09-18', '10:30 AM - 11:30 AM', '', 'v4ssTUUc', 'Cancelled', ''),
(10, 'Jill', '2015-09-21', '9:30 AM - 10:30 AM', '', 'yj2YQU9O', 'Confirmed', ''),
(11, 'Goat', '2015-10-10', '1:00 PM - 2:00 PM', '', 'anfD1Wxh', 'Confirmed', ''),
(12, 'Kind', '2015-11-13', '10:30 AM - 11:30 AM', '', 'kId5zjq5', 'Confirmed', ''),
(13, 'Month', '2015-09-24', '10:30 AM - 11:30 AM', '', 'rYmGFePJ', 'Confirmed', ''),
(14, 'or', '2015-09-24', '2:00 PM - 3:00 PM', '', 'PEqD6bvH', 'Confirmed', ''),
(15, 'Raven', '2016-01-15', '7:30 AM - 8:30 AM', '', 'esKVUMqW', 'Confirmed', ''),
(16, 'November', '2015-09-28', '7:30 AM - 8:30 AM', '', 'X38jeGf1', 'Confirmed', ''),
(17, 'Foxtrot', '2015-09-30', '3:00 PM - 4:00 PM', '', '3C91uOKu', 'Confirmed', ''),
(18, 'Captain', '2015-10-01', '10:30 AM - 11:30 AM', '', 'MIMnwh3v', 'Confirmed', '');

-- --------------------------------------------------------

--
-- Table structure for table `chronicailments`
--

CREATE TABLE IF NOT EXISTS `chronicailments` (
`id` int(11) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `chronicailmentname` varchar(50) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chronicailments`
--

INSERT INTO `chronicailments` (`id`, `patient_id`, `chronicailmentname`, `dateadded`) VALUES
(1, '3', 'Stroke\r\n', '2015-09-17'),
(2, '7', 'Stroke', '2015-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `closeddates`
--

CREATE TABLE IF NOT EXISTS `closeddates` (
`id` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `closeddates`
--

INSERT INTO `closeddates` (`id`, `time`, `date`, `reason`) VALUES
(9, '7:30 AM - 8:30 AM', '2015-09-23', 'aadsd'),
(10, '8:30 AM - 9:30 AM', '2015-09-23', 'aadsd'),
(11, '9:30 AM - 10:30 AM', '2015-09-23', 'aadsd'),
(12, '10:30 AM - 11:30 AM', '2015-09-23', 'aadsd'),
(13, '1:00 PM - 2:00 PM', '2015-09-23', 'aadsd'),
(14, '2:00 PM - 3:00 PM', '2015-09-23', 'aadsd'),
(15, '3:00 PM - 4:00 PM', '2015-09-23', 'aadsd');

-- --------------------------------------------------------

--
-- Table structure for table `drugstaken`
--

CREATE TABLE IF NOT EXISTS `drugstaken` (
`id` int(11) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `drugname` varchar(50) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drugstaken`
--

INSERT INTO `drugstaken` (`id`, `patient_id`, `drugname`, `dateadded`) VALUES
(1, '3', 'insulin', '2015-09-17'),
(2, '6', 'Shabo', '2015-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`patient_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `telno` varchar(50) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `officeaddress` varchar(100) NOT NULL,
  `officetelno` varchar(20) NOT NULL,
  `occlusion` varchar(50) NOT NULL,
  `periodontalcondition` varchar(50) NOT NULL,
  `oralhygiene` varchar(50) NOT NULL,
  `prevhistoryofbleeding` varchar(50) NOT NULL,
  `bloodpressure` varchar(20) NOT NULL,
  `upper_denture` varchar(5) NOT NULL,
  `lower_denture` varchar(5) NOT NULL,
  `upper_since` varchar(50) NOT NULL,
  `lower_since` varchar(50) NOT NULL,
  `total_balance` int(11) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `lastmodifiedby` varchar(50) NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `username`, `firstname`, `lastname`, `middlename`, `birthdate`, `age`, `email`, `gender`, `address`, `mobileno`, `telno`, `maritalstatus`, `officeaddress`, `officetelno`, `occlusion`, `periodontalcondition`, `oralhygiene`, `prevhistoryofbleeding`, `bloodpressure`, `upper_denture`, `lower_denture`, `upper_since`, `lower_since`, `total_balance`, `createdby`, `lastmodifiedby`, `datecreated`, `datemodified`) VALUES
(1, 'Alpha', 'John', 'Dorubo', 'Rob', '1993-07-04', 22, 'Sexyjohn@yahoo.com', 'Male', 'St. Martin Cebu City', '09123457281', '345-4478', 'Single', '', '', 'Class I', 'Normal', 'Good', 'No', '', '', '', '', '', 29300, 'John', 'John', '2015-09-17 12:13:46', '2015-09-17 00:00:00'),
(2, 'Bravo', 'Peter', 'Zeran', 'Green', '2000-01-25', 15, 'AwesomePGZ@gmail.com', 'Male', 'Ayala Heights', '09357926758', '233-6576', 'Single', '', '', 'Class II (Div.2)', 'Normal', 'Good', 'No', '', '', '', '', '', 3500, 'John', 'John', '2015-09-17 12:16:24', '2015-09-17 00:00:00'),
(3, 'Charlie', 'Amber', 'Goodman', 'Gozo', '1937-05-16', 78, 'TheGozoGoodman@gmail.com', 'Female', 'Maria Luisa, Banilad', '09238752356', '368-7659', 'Married', '', '', 'Class III', 'With Periodontal Problem', 'Poor', 'Yes', '', 'Yes', '', '1965', '', 8500, 'John', 'John', '2015-09-17 12:20:52', '2015-09-17 00:00:00'),
(4, 'Delta', 'Johan', 'Quemar', 'Fox', '1879-07-30', 136, 'ilovefox@yahoo.com', 'Female', 'Mandaue ', '09389628952', '324-6578', 'Single', 'It Park', '234-9876', 'Class II (Div.1)', 'Normal', 'Good', 'Yes', '', '', '', '', '', 2300, 'John', 'John', '2015-09-17 12:23:42', '2015-09-17 00:00:00'),
(5, 'Echo', 'Zerduo', 'Herrel', 'Martin', '2009-11-12', 5, 'mynameisgwapo@gmail.com', 'Male', 'Talamban', '09237562396', '546-9786', 'Single', '', '', 'Class I', 'Normal', 'Poor', 'No', '', '', '', '', '', 9000, 'John', 'John', '2015-09-17 12:25:46', '2015-09-17 00:00:00'),
(6, 'Foxtrot', 'Ariel', 'Abellanosa', 'Maye', '1996-03-05', 19, 'Iamamermaid@yahoo.com', 'Female', 'Banawa', '09729836523', '234-3829', 'Single', '', '', 'Class II (Div.2)', 'With Periodontal Problem', 'Good', 'Yes', '', '', '', '', '', 2795, 'John', 'John', '2015-09-17 12:27:30', '2015-09-17 00:00:00'),
(7, 'Goat', 'Arman', 'Oroy', 'Kadol', '1968-06-06', 47, 'myarmisgood@yahoo.com', 'Male', 'Liloan', '09437824620', '561-9089', 'Married', 'Ayala', '', 'Class II (Div.2)', 'With Periodontal Problem', 'Poor', 'Yes', '', '', 'Yes', '', '1997', 1800, 'John', 'John', '2015-09-17 12:30:52', '2015-09-17 00:00:00'),
(8, 'Heaven', 'Hesus', 'Hangvil', 'Justin', '1989-09-23', 25, 'Heavenisreal@gmail.com', 'Male', 'Mandaue', '09237129561', '523-8643', 'Married', 'SM', '', 'Class III', 'Normal', 'Good', 'No', '', '', '', '', '', 7400, 'John', 'John', '2015-09-17 12:33:10', '2015-09-17 00:00:00'),
(9, 'India', 'Nazareen', 'Razel', 'Bobby', '1957-04-25', 58, 'Ugoindia@yahoo.com', 'Male', 'Guadalupe', '09113985613', '349-0987', 'Married', 'Gaisano', '', 'Class III', 'Normal', 'Good', 'Yes', '', 'Yes', 'Yes', '1989', '1987', 2000, 'John', 'John', '2015-09-17 12:36:29', '2015-09-17 00:00:00'),
(10, 'January', 'Jan', 'Kidman', 'Gozi', '1995-12-24', 19, 'JanGodKid@yahoo.com', 'Male', 'Carcar', '09198365813', '213-5678', 'Single', '', '', 'Class I', 'Normal', 'Good', 'No', '', '', '', '', '', 18500, 'John', 'John', '2015-09-17 12:38:05', '2015-09-17 00:00:00'),
(11, 'Kind', 'Hans', 'Fradley', 'Dred', '1976-06-07', 39, 'Iamdredfulbutfradley@gmail.com', 'Male', 'Carcar', '09798320823', '423-0968', 'Married', '', '', 'Class I', 'Normal', 'Poor', 'No', '', '', '', '', '', 2450, 'John', 'John', '2015-09-17 12:40:07', '2015-09-17 00:00:00'),
(12, 'Love', 'Michelle', 'Belazon', 'Reffy', '2007-03-04', 8, 'Cellphoneisreal@yahoo.com', 'Female', 'Talamban', '09283963289', '', 'Single', '', '', 'Class I', 'Normal', 'Good', 'No', '', '', '', '', '', 3500, 'John', 'John', '2015-09-17 12:47:40', '2015-09-17 00:00:00'),
(13, 'Month', 'Marites', 'Gaisano', 'Jujun', '2003-05-31', 12, 'gogopowerrangers@gmail.com', 'Female', 'Banawa', '09127851260', '234-8329', 'Single', '', '', 'Class I', 'Normal', 'Poor', 'No', '', '', '', '', '', 2300, 'John', 'John', '2015-09-17 12:49:18', '2015-09-17 00:00:00'),
(14, 'November', 'Hiro', 'Kalasan', 'Jhapin', '2010-10-10', 4, 'Iamhiroinjapankalasanlng@yahoo.com', 'Male', 'Banilad', '09235093273', '367-6458', 'Single', '', '', 'Class II (Div.1)', 'Normal', 'Good', 'No', '', '', '', '', '', 6050, 'John', 'John', '2015-09-17 12:52:39', '2015-09-17 20:29:46'),
(15, 'Or', 'Yeman', 'Arteezy', 'Arouzy', '1956-02-13', 59, 'Iamarteezycantbeatme@gmail.com', 'Male', 'Bantayan', '09823598232', '254-9284', 'Married', 'It Park', '', 'Class II (Div.2)', 'Normal', 'Poor', 'Yes', '', 'Yes', '', '1999', '', 6500, 'John', 'John', '2015-09-17 12:54:17', '2015-09-17 00:00:00'),
(16, 'Zebra', 'Hasola', 'This Guy', 'Ayaw', '1908-02-22', 107, 'hasolathisguy@yahoo.com', 'Male', '', '09835728933', '', '', '', '', '', '', '', '', '', '', '', '', '', 3000, '', 'John', '2015-09-17 15:28:49', '2015-09-17 00:00:00'),
(17, 'Zorro', 'Captain', 'America', 'Shield', '1919-11-11', 95, 'Akosicaptainamerica@yahoo.com', 'Male', '', '09129856127', '', '', '', '', '', '', '', '', '', '', '', '', '', 2100, '', 'John', '2015-09-17 15:31:02', '2015-09-17 00:00:00'),
(18, 'Captain', 'Nemo', 'Sharine', 'Hebba', '2006-11-10', 8, 'findingnemoaw@gmail.com', 'Female', '', '09217659182', '', '', '', '', '', '', '', '', '', '', '', '', '', 5400, '', 'John', '2015-09-17 15:55:50', '2015-09-17 00:00:00'),
(19, 'jIll', 'Zeredra', 'Damat', 'Aries', '1978-03-28', 37, 'Iamthealmitghtyaries@gmail.com', 'Female', 'Talamban', '09831591295', '345-8675', 'Married', 'It Park', '214-3277', 'Class III', 'Normal', 'Good', 'No', '', '', '', '', '', 4000, 'John', 'John', '2015-09-17 20:10:14', '2015-09-17 00:00:00'),
(20, 'Raven', 'Jazim', 'Guzarad', 'Arab', '1958-12-30', 56, 'Iamarabonofyt@yahoo.com', 'Male', 'Flyover', '09731795911', '346-7698', 'Married', '', '', 'Class II (Div.2)', 'Normal', 'Poor', 'No', '', 'Yes', '', '1988', '', 2500, 'John', 'John', '2015-09-17 20:11:48', '2015-09-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
`id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `treatment_fee` int(11) NOT NULL,
  `old_balance` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `new_balance` int(11) NOT NULL,
  `date` date NOT NULL,
  `paid_to` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `patient_id`, `type`, `treatment_fee`, `old_balance`, `payment`, `new_balance`, `date`, `paid_to`) VALUES
(1, 6, 'Treatment Payment', 400, 0, 0, 400, '2015-09-17', 'John'),
(2, 6, 'Balance Payment', 0, 400, 100, 300, '2015-09-17', 'John'),
(3, 15, 'Treatment Payment', 5000, 0, 0, 5000, '2015-09-17', 'John'),
(4, 15, 'Balance Payment', 0, 5000, 500, 4500, '2015-09-17', 'John'),
(5, 12, 'Treatment Payment', 3000, 0, 1000, 2000, '2015-09-17', 'John'),
(6, 1, 'Treatment Payment', 3500, 0, 0, 3500, '2015-09-17', 'John'),
(7, 1, 'Balance Payment', 0, 3500, 200, 3300, '2015-09-17', 'John'),
(8, 11, 'Treatment Payment', 700, 0, 50, 650, '2015-09-17', 'John'),
(9, 11, 'Balance Payment', 0, 650, 200, 450, '2015-09-17', 'John'),
(10, 13, 'Treatment Payment', 1500, 0, 0, 1500, '2015-09-17', 'John'),
(11, 13, 'Balance Payment', 0, 1500, 900, 600, '2015-09-17', 'John'),
(12, 3, 'Treatment Payment', 5500, 0, 0, 5500, '2015-09-17', 'John'),
(13, 3, 'Balance Payment', 0, 5500, 3000, 2500, '2015-09-17', 'John'),
(14, 8, 'Treatment Payment', 1000, 0, 0, 1000, '2015-09-17', 'John'),
(15, 8, 'Balance Payment', 0, 1000, 100, 900, '2015-09-17', 'John'),
(16, 5, 'Treatment Payment', 4500, 0, 0, 4500, '2015-09-17', 'John'),
(17, 5, 'Balance Payment', 0, 4500, 2000, 2500, '2015-09-17', 'John'),
(18, 14, 'Treatment Payment', 1200, 0, 0, 1200, '2015-09-17', 'John'),
(19, 14, 'Balance Payment', 0, 1200, 150, 1050, '2015-09-17', 'John'),
(20, 10, 'Treatment Payment', 11000, 0, 0, 11000, '2015-09-17', 'John'),
(21, 10, 'Balance Payment', 0, 11000, 5000, 6000, '2015-09-17', 'John'),
(22, 7, 'Treatment Payment', 1500, 0, 800, 700, '2015-09-17', 'John'),
(23, 7, 'Balance Payment', 0, 700, 300, 400, '2015-09-17', 'John'),
(24, 4, 'Treatment Payment', 1500, 0, 0, 1500, '2015-09-17', 'John'),
(25, 4, 'Balance Payment', 0, 1500, 300, 1200, '2015-09-17', 'John'),
(26, 9, 'Treatment Payment', 900, 0, 0, 900, '2015-09-17', 'John'),
(27, 9, 'Balance Payment', 0, 900, 800, 100, '2015-09-17', 'John'),
(28, 2, 'Treatment Payment', 3500, 0, 800, 2700, '2015-09-17', 'John'),
(29, 2, 'Balance Payment', 0, 2700, 700, 2000, '2015-09-17', 'John'),
(30, 6, 'Treatment Payment', 1000, 300, 0, 1300, '2015-09-17', 'John'),
(31, 15, 'Treatment Payment', 5000, 4500, 3000, 6500, '2015-09-17', 'John'),
(32, 12, 'Treatment Payment', 1500, 2000, 500, 3000, '2015-09-17', 'John'),
(33, 11, 'Treatment Payment', 2000, 450, 0, 2450, '2015-09-17', 'John'),
(34, 13, 'Treatment Payment', 1500, 600, 0, 2100, '2015-09-17', 'John'),
(35, 3, 'Treatment Payment', 5000, 2500, 0, 7500, '2015-09-17', 'John'),
(36, 8, 'Treatment Payment', 1500, 900, 0, 2400, '2015-09-17', 'John'),
(37, 5, 'Treatment Payment', 5000, 2500, 0, 7500, '2015-09-17', 'John'),
(38, 14, 'Treatment Payment', 2500, 1050, 0, 3550, '2015-09-17', 'John'),
(39, 6, 'Balance Payment', 0, 1300, 5, 1295, '2015-09-17', 'John'),
(40, 6, 'Treatment Payment', 1500, 1295, 0, 2795, '2015-09-17', 'John'),
(41, 17, 'Treatment Payment', 200, 0, 0, 200, '2015-09-17', 'John'),
(42, 17, 'Treatment Payment', 900, 200, 0, 1100, '2015-09-17', 'John'),
(43, 17, 'Treatment Payment', 1000, 1100, 0, 2100, '2015-09-17', 'John'),
(44, 15, 'Treatment Payment', 0, 6500, 0, 6500, '2015-09-17', 'John'),
(45, 12, 'Treatment Payment', 500, 3000, 0, 3500, '2015-09-17', 'John'),
(46, 19, 'Treatment Payment', 1500, 0, 0, 1500, '2015-09-17', 'John'),
(47, 19, 'Treatment Payment', 500, 1500, 0, 2000, '2015-09-17', 'John'),
(48, 19, 'Treatment Payment', 2000, 2000, 0, 4000, '2015-09-17', 'John'),
(49, 1, 'Treatment Payment', 1000, 3300, 0, 4300, '2015-09-17', 'John'),
(50, 1, 'Treatment Payment', 25000, 4300, 0, 29300, '2015-09-17', 'John'),
(51, 13, 'Treatment Payment', 200, 2100, 0, 2300, '2015-09-17', 'John'),
(52, 3, 'Treatment Payment', 1000, 7500, 0, 8500, '2015-09-17', 'John'),
(53, 20, 'Treatment Payment', 500, 0, 0, 500, '2015-09-17', 'John'),
(54, 20, 'Treatment Payment', 500, 500, 0, 1000, '2015-09-17', 'John'),
(55, 20, 'Treatment Payment', 1500, 1000, 0, 2500, '2015-09-17', 'John'),
(56, 8, 'Treatment Payment', 5000, 2400, 0, 7400, '2015-09-17', 'John'),
(57, 5, 'Treatment Payment', 1500, 7500, 0, 9000, '2015-09-17', 'John'),
(58, 14, 'Treatment Payment', 2500, 3550, 0, 6050, '2015-09-17', 'John'),
(59, 10, 'Treatment Payment', 2500, 6000, 0, 8500, '2015-09-17', 'John'),
(60, 10, 'Treatment Payment', 10000, 8500, 0, 18500, '2015-09-17', 'John'),
(61, 7, 'Treatment Payment', 1000, 400, 0, 1400, '2015-09-17', 'John'),
(62, 7, 'Treatment Payment', 400, 1400, 0, 1800, '2015-09-17', 'John'),
(63, 4, 'Treatment Payment', 700, 1200, 0, 1900, '2015-09-17', 'John'),
(64, 4, 'Treatment Payment', 400, 1900, 0, 2300, '2015-09-17', 'John'),
(65, 9, 'Treatment Payment', 400, 100, 0, 500, '2015-09-17', 'John'),
(66, 9, 'Treatment Payment', 1500, 500, 0, 2000, '2015-09-17', 'John'),
(67, 18, 'Treatment Payment', 1500, 0, 0, 1500, '2015-09-17', 'John'),
(68, 18, 'Treatment Payment', 3500, 1500, 0, 5000, '2015-09-17', 'John'),
(69, 18, 'Treatment Payment', 400, 5000, 0, 5400, '2015-09-17', 'John'),
(70, 16, 'Treatment Payment', 1500, 0, 0, 1500, '2015-09-17', 'John'),
(71, 16, 'Treatment Payment', 1000, 1500, 0, 2500, '2015-09-17', 'John'),
(72, 16, 'Treatment Payment', 500, 2500, 0, 3000, '2015-09-17', 'John'),
(73, 2, 'Treatment Payment', 500, 2000, 0, 2500, '2015-09-17', 'John'),
(74, 2, 'Treatment Payment', 1000, 2500, 0, 3500, '2015-09-17', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(11) NOT NULL,
  `procedure_type` varchar(50) NOT NULL,
  `dental_procedure` varchar(50) NOT NULL,
  `service_fee` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `datecreated` datetime NOT NULL,
  `lastmodifiedby` varchar(50) NOT NULL,
  `datemodified` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `procedure_type`, `dental_procedure`, `service_fee`, `type`, `createdby`, `datecreated`, `lastmodifiedby`, `datemodified`, `status`) VALUES
(1, 'unit', 'Recementation of Jacket Crowns,Inlays/Onlays', 200, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(2, 'unit', 'Plastic / Acrylic Jacket Crown', 2500, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(3, 'unit', 'Plastic Jacket Crown w/ Metal Backing', 3000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(4, 'unit', 'Full Metal Crown- posterior', 2500, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(5, 'unit', 'Porcelain Fused to Metal Crown', 5000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(6, 'unit', 'Porcelain Fused to Gold Crown', 25000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(7, 'unit', 'Pure Ceramic/ Inceram Crown', 10000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(8, 'arch', 'Complete/Full Denture -plastic pontic', 3500, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(9, 'arch', 'Complete/Full Denture -porcelain pontic', 7000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(10, 'arch', 'SuperSoft Complete Denture', 10000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(11, 'arch', 'Removable Partial Denture -One Piece Metal Casting', 5000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(12, 'arch', 'Removable Partial Denture -Assemble Type', 2500, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(13, 'arch', 'Valplast / Bioplast Flexite', 12000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(14, 'unit', 'Metal Inlay', 2000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(15, 'unit', 'Ceramic Inlay', 5000, 'Prostodontic Dentistry', 'admin', '0000-00-00 00:00:00', 'admin', '2015-09-11 00:00:00', 1),
(16, 'post', 'Screw Dowel Post', 1000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(17, 'post', 'Casted Dowel Post', 1000, 'Prostodontic Dentistry', 'admin', '0000-00-00 00:00:00', 'admin', '2015-09-11 00:00:00', 1),
(18, 'unclassified', 'Simple Repair of Dentures', 500, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(19, 'unclassified', 'Denture Relining', 1000, 'Prostodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(20, 'unclassified', 'Consultation/Dental Examination', 0, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(21, 'unclassified', 'Dental Examination with Medical Certificate ', 100, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(22, 'quadrant', 'Oral Prophylaxis - light to moderate', 400, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(23, 'quadrant', 'Oral Prophylaxis - light to heavy', 500, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(24, 'quadrant', 'Flouride Treatment', 400, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(25, 'tooth', 'Simple Tooth Extraction –anterior/posterior', 500, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(26, 'tooth', 'Surgical Removal of Impacted Teeth', 3500, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(27, 'unclassified', 'Removal of Sutures', 0, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(28, 'unclassified', 'Open /Incision & Drainage', 200, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(29, 'unclassified', 'Treatment of Oral Lessions, Sores', 200, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(30, 'tooth', 'Desensitization of Hypersensitive Teeth', 200, 'General', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(31, 'tooth', 'Temporary Fillings', 200, 'Restorative Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(32, 'tooth', 'Light Cure Composite Fillings', 400, 'Restorative Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(33, 'tooth', 'Pits and Fissure Sealant', 400, 'Restorative Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(34, 'tooth', 'Tooth Lamination', 500, 'Restorative Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(35, 'canal', 'Root Canal Treatment', 1500, 'Endodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(36, 'tooth', 'Pulpotomy/ Pulpectomy', 1000, 'Endodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(37, 'unclassified', 'Change Dressing', 0, 'Endodontic Dentistry', '', '0000-00-00 00:00:00', 'admin', '2015-09-16 00:00:00', 1),
(38, 'unclassified', 'Treatment of Oral Lessions, Sores', 200, 'Endodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(39, 'tentative', 'Ortho/ Braces Package', 0, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(40, 'appliance', 'Myobrace / EF Braces', 5000, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(41, 'appliance', 'Retainer Functional', 2500, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(42, 'appliance', 'Retainer Non-Functional', 2000, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(43, 'appliance', 'TMJ Appliance', 5000, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(44, 'arch', 'Mouth Guard –rubberized / acrylic', 2500, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(45, 'tentative', 'Tooth Bleaching', 0, 'Orthodontic Dentistry', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(46, 'unclassified', 'Luboton', 10, 'Prostodontic Dentistry', 'admin', '2015-09-17 00:00:00', 'admin', '2015-09-17 19:56:28', 1),
(47, 'unclassified', 'Chula', 2, 'Orthodontic Dentistry', 'admin', '2015-09-17 19:55:53', 'admin', '2015-09-17 19:55:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teethprofile`
--

CREATE TABLE IF NOT EXISTS `teethprofile` (
`id` int(11) NOT NULL,
  `dateupdated` datetime NOT NULL,
  `dentistincharge` varchar(50) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `toothno` int(11) NOT NULL,
  `toothsurface` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teethprofile`
--

INSERT INTO `teethprofile` (`id`, `dateupdated`, `dentistincharge`, `patient_id`, `toothno`, `toothsurface`, `note`) VALUES
(1, '2015-09-17 19:38:41', 'John', 6, 14, 'd', 'putol'),
(2, '2015-09-17 19:39:02', 'John', 6, 14, 'd', 'pasta');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE IF NOT EXISTS `timeslot` (
`id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` char(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`id`, `time`, `type`) VALUES
(1, '7:30 AM - 8:30 AM', 'd'),
(2, '8:30 AM - 9:30 AM', 'd'),
(3, '9:30 AM - 10:30 AM', 'd'),
(4, '10:30 AM - 11:30 AM', 'd'),
(5, '1:00 PM - 2:00 PM', 'd'),
(6, '2:00 PM - 3:00 PM', 'd'),
(7, '3:00 PM - 4:00 PM', 'd'),
(8, '9:00 AM - 10:00 AM', 'e'),
(9, '10:00 AM - 11:00 AM', 'e'),
(10, '11:00 AM - 12:00 PM', 'e'),
(11, '1:00 PM - 2:00 PM', 'e'),
(12, '2:00 PM - 3:00 PM', 'e'),
(13, '3:00 PM - 4:00 PM', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `totalamount` float NOT NULL,
  `amountpaid` float NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `treatment_id`, `totalamount`, `amountpaid`, `balance`) VALUES
(1, 1, 400, 0, 400),
(2, 2, 5000, 0, 5000),
(3, 3, 3000, 1000, 2000),
(4, 4, 3500, 0, 3500),
(5, 5, 700, 50, 650),
(6, 6, 1500, 0, 1500),
(7, 7, 5500, 0, 5500),
(8, 8, 1000, 0, 1000),
(9, 9, 4500, 0, 4500),
(10, 10, 1200, 0, 1200),
(11, 11, 11000, 0, 11000),
(12, 12, 1500, 800, 700),
(13, 13, 1500, 0, 1500),
(14, 14, 900, 0, 900),
(15, 15, 3500, 800, 2700),
(16, 16, 1000, 0, 1000),
(17, 17, 5000, 3000, 2000),
(18, 18, 1500, 500, 1000),
(19, 19, 2000, 0, 2000),
(20, 20, 1500, 0, 1500),
(21, 21, 5000, 0, 5000),
(22, 22, 1500, 0, 1500),
(23, 23, 5000, 0, 5000),
(24, 24, 2500, 0, 2500),
(25, 25, 1500, 0, 1500),
(26, 26, 200, 0, 200),
(27, 27, 900, 0, 900),
(28, 28, 1000, 0, 1000),
(29, 29, 0, 0, 0),
(30, 30, 500, 0, 500),
(31, 31, 1500, 0, 1500),
(32, 32, 500, 0, 500),
(33, 33, 2000, 0, 2000),
(34, 34, 1000, 0, 1000),
(35, 35, 25000, 0, 25000),
(36, 40, 200, 0, 200),
(37, 41, 1000, 0, 1000),
(38, 42, 500, 0, 500),
(39, 43, 500, 0, 500),
(40, 44, 1500, 0, 1500),
(41, 45, 5000, 0, 5000),
(42, 46, 1500, 0, 1500),
(43, 47, 2500, 0, 2500),
(44, 48, 2500, 0, 2500),
(45, 49, 10000, 0, 10000),
(46, 50, 1000, 0, 1000),
(47, 51, 400, 0, 400),
(48, 52, 700, 0, 700),
(49, 53, 400, 0, 400),
(50, 54, 400, 0, 400),
(51, 55, 1500, 0, 1500),
(52, 56, 1500, 0, 1500),
(53, 57, 3500, 0, 3500),
(54, 58, 400, 0, 400),
(55, 59, 1500, 0, 1500),
(56, 60, 1000, 0, 1000),
(57, 61, 500, 0, 500),
(58, 62, 500, 0, 500),
(59, 63, 1000, 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
`id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `dentistincharge` varchar(30) NOT NULL,
  `chiefcomplaint` varchar(50) NOT NULL,
  `otherfindings` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `patient_id`, `date`, `dentistincharge`, `chiefcomplaint`, `otherfindings`) VALUES
(1, 6, '2015-06-22', 'John B. Gayatin', 'Toohtache', ''),
(2, 15, '2014-08-18', 'Cynthia B. Gayatin', 'Sensitive Gums', ''),
(3, 12, '2014-11-05', 'John B. Gayatin', '', ''),
(4, 1, '2015-05-18', 'Cynthia B. Gayatin', '', ''),
(5, 11, '2014-12-22', 'John B. Gayatin', '', ''),
(6, 13, '2015-06-17', 'Cynthia B. Gayatin', '', ''),
(7, 3, '2015-04-16', 'John B. Gayatin', '', ''),
(8, 8, '2015-01-14', 'John B. Gayatin', '', ''),
(9, 5, '2015-01-20', 'Cynthia B. Gayatin', '', ''),
(10, 14, '2014-07-22', 'John B. Gayatin', '', ''),
(11, 10, '2014-12-17', 'John B. Gayatin', '', ''),
(12, 7, '2015-09-17', 'John B. Gayatin', '', ''),
(13, 4, '2015-04-14', 'Cynthia B. Gayatin', '', ''),
(14, 9, '2015-07-14', 'Cynthia B. Gayatin', '', ''),
(15, 2, '2014-11-11', 'Cynthia B. Gayatin', '', ''),
(16, 6, '2014-08-12', 'Cynthia B. Gayatin', '', ''),
(17, 15, '2014-08-14', 'John B. Gayatin', '', ''),
(18, 12, '2015-04-22', 'John B. Gayatin', '', ''),
(19, 11, '2015-03-26', 'John B. Gayatin', '', ''),
(20, 13, '2015-03-24', 'Cynthia B. Gayatin', '', ''),
(21, 3, '2014-10-14', 'John B. Gayatin', '', ''),
(22, 8, '2014-10-13', 'John B. Gayatin', '', ''),
(23, 5, '2014-01-06', 'Cynthia B. Gayatin', '', ''),
(24, 14, '2014-03-11', 'Cynthia B. Gayatin', '', ''),
(25, 6, '2015-09-17', 'John B. Gayatin', '', ''),
(26, 17, '2015-09-17', 'John B. Gayatin', '', ''),
(27, 17, '2015-09-17', 'John B. Gayatin', '', ''),
(28, 17, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(29, 15, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(30, 12, '2015-09-17', 'John B. Gayatin', '', ''),
(31, 19, '2015-09-17', 'John B. Gayatin', '', ''),
(32, 19, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(33, 19, '2015-09-17', 'John B. Gayatin', '', ''),
(34, 1, '2015-09-17', 'John B. Gayatin', '', ''),
(35, 1, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(36, 11, '2015-09-17', 'John B. Gayatin', '', ''),
(37, 11, '2015-09-17', 'John B. Gayatin', '', ''),
(38, 11, '2015-09-17', 'John B. Gayatin', '', ''),
(39, 11, '2015-09-17', 'John B. Gayatin', '', ''),
(40, 13, '2015-09-17', 'John B. Gayatin', '', ''),
(41, 3, '2015-09-17', 'John B. Gayatin', '', ''),
(42, 20, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(43, 20, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(44, 20, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(45, 8, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(46, 5, '2015-09-17', 'John B. Gayatin', '', ''),
(47, 14, '2015-09-17', 'John B. Gayatin', '', ''),
(48, 10, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(49, 10, '2015-09-17', 'John B. Gayatin', '', ''),
(50, 7, '2015-09-17', 'John B. Gayatin', '', ''),
(51, 7, '2015-09-17', 'John B. Gayatin', '', ''),
(52, 4, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(53, 4, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(54, 9, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(55, 9, '2015-09-17', 'John B. Gayatin', '', ''),
(56, 18, '2015-09-17', 'John B. Gayatin', '', ''),
(57, 18, '2015-09-17', 'John B. Gayatin', '', ''),
(58, 18, '2015-09-17', 'Cynthia B. Gayatin', '', ''),
(59, 16, '2015-09-17', 'John B. Gayatin', '', ''),
(60, 16, '2015-09-17', 'John B. Gayatin', '', ''),
(61, 16, '2015-09-17', 'John B. Gayatin', '', ''),
(62, 2, '2015-09-17', 'John B. Gayatin', '', ''),
(63, 2, '2015-09-17', 'Cynthia B. Gayatin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE IF NOT EXISTS `treatment_record` (
`id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `toothno` int(11) NOT NULL,
  `toothsurface` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`id`, `treatment_id`, `type`, `treatment`, `toothno`, `toothsurface`, `price`) VALUES
(1, 1, 'Tooth', 'Temporary Fillings', 13, 'Mesial', 200),
(2, 1, 'Unit', 'Recementation of Jacket Crowns,Inlays/Onlays', 47, '', 200),
(3, 2, 'Arch', 'Mouth Guard –rubberized / acrylic', 11, '', 2500),
(4, 3, 'Appliance', 'Retainer Functional', 0, 'Upper', 2500),
(5, 3, 'Tooth', 'Tooth Lamination', 45, 'Mesial', 500),
(6, 4, 'Post', 'Screw Dowel Post', 32, '', 1000),
(7, 4, 'Unit', 'Plastic / Acrylic Jacket Crown', 32, '', 2500),
(8, 5, 'Tooth', 'Temporary Fillings', 37, 'Mesial', 200),
(9, 5, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'All', 500),
(10, 6, 'Canal', 'Root Canal Treatment', 27, '', 1500),
(11, 7, 'Appliance', 'Myobrace / EF Braces', 0, 'Upper', 5000),
(12, 7, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'Upper right', 500),
(13, 8, 'Post', 'Screw Dowel Post', 18, '', 1000),
(14, 9, 'Appliance', 'Retainer Non-Functional', 0, 'Lower', 2000),
(15, 9, 'Appliance', 'Retainer Functional', 0, 'Upper', 2500),
(16, 10, 'Unclassified', 'Treatment of Oral Lessions, Sores', 0, '', 200),
(17, 10, 'Unclassified', 'Denture Relining', 0, '', 1000),
(18, 11, 'Unit', 'Pure Ceramic/ Inceram Crown', 35, '', 10000),
(19, 11, 'Post', 'Casted Dowel Post', 35, '', 1000),
(20, 12, 'Unclassified', 'Consultation/Dental Examination', 0, '', 0),
(21, 12, 'Unclassified', 'Simple Repair of Dentures', 0, '', 500),
(22, 12, 'Unclassified', 'Denture Relining', 0, '', 1000),
(23, 13, 'Canal', 'Root Canal Treatment', 18, '', 1500),
(24, 14, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'Upper right', 500),
(25, 14, 'Quadrant', 'Flouride Treatment', 0, 'Upper right', 400),
(26, 15, 'Appliance', 'Retainer Functional', 0, 'Upper', 2500),
(27, 15, 'Post', 'Casted Dowel Post', 18, '', 1000),
(28, 16, 'Post', 'Screw Dowel Post', 47, '', 1000),
(29, 17, 'Appliance', 'TMJ Appliance', 0, 'Upper', 5000),
(30, 18, 'Canal', 'Root Canal Treatment', 47, '', 1500),
(31, 19, 'Appliance', 'Retainer Non-Functional', 0, 'Upper', 2000),
(32, 20, 'Canal', 'Root Canal Treatment', 44, '', 1500),
(33, 21, 'Appliance', 'Myobrace / EF Braces', 0, 'Upper', 5000),
(34, 22, 'Unclassified', 'Consultation/Dental Examination', 0, '', 0),
(35, 22, 'Unclassified', 'Denture Relining', 0, '', 1000),
(36, 22, 'Unclassified', 'Simple Repair of Dentures', 0, '', 500),
(37, 23, 'Unit', 'Ceramic Inlay', 48, '', 5000),
(38, 24, 'Arch', 'Mouth Guard –rubberized / acrylic', 18, '', 2500),
(39, 25, 'Canal', 'Root Canal Treatment', 31, '', 1500),
(40, 26, 'Tooth', 'Temporary Fillings', 31, 'Mesial', 200),
(41, 27, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'Upper right', 500),
(42, 27, 'Quadrant', 'Flouride Treatment', 0, 'Upper right', 400),
(43, 28, 'Post', 'Screw Dowel Post', 48, '', 1000),
(44, 29, 'Unclassified', 'Change Dressing', 0, '', 0),
(45, 30, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'Upper left', 500),
(46, 31, 'Unclassified', 'Simple Repair of Dentures', 0, '', 500),
(47, 31, 'Unclassified', 'Denture Relining', 0, '', 1000),
(48, 32, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'All', 500),
(49, 33, 'Post', 'Casted Dowel Post', 41, '', 1000),
(50, 33, 'Post', 'Casted Dowel Post', 13, '', 1000),
(51, 34, 'Post', 'Screw Dowel Post', 14, '', 1000),
(52, 35, 'Unit', 'Porcelain Fused to Gold Crown', 26, '', 25000),
(53, 36, 'Appliance', 'TMJ Appliance', 0, 'Upper', 5000),
(54, 37, 'Appliance', 'TMJ Appliance', 0, 'Upper', 5000),
(55, 38, 'Appliance', 'TMJ Appliance', 0, 'Upper', 5000),
(56, 39, 'Appliance', 'TMJ Appliance', 0, 'Upper', 5000),
(57, 40, 'Unclassified', 'Treatment of Oral Lessions, Sores', 0, '', 200),
(58, 40, 'Unclassified', 'Removal of Sutures', 0, '', 0),
(59, 41, 'Post', 'Screw Dowel Post', 13, '', 1000),
(60, 42, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'Lower left', 500),
(61, 43, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'All', 500),
(62, 44, 'Unclassified', 'Denture Relining', 0, '', 1000),
(63, 44, 'Unclassified', 'Simple Repair of Dentures', 0, '', 500),
(64, 45, 'Unit', 'Porcelain Fused to Metal Crown', 14, '', 5000),
(65, 46, 'Canal', 'Root Canal Treatment', 16, '', 1500),
(66, 47, 'Appliance', 'Retainer Functional', 0, 'Whole', 2500),
(67, 48, 'Appliance', 'Retainer Functional', 0, 'Whole', 2500),
(68, 49, 'Arch', 'SuperSoft Complete Denture', 18, '', 10000),
(69, 50, 'Post', 'Casted Dowel Post', 17, '', 1000),
(70, 51, 'Tooth', 'Pits and Fissure Sealant', 24, 'Labial', 400),
(71, 52, 'Tooth', 'Simple Tooth Extraction –anterior/posterior', 25, 'Mesial', 500),
(72, 52, 'Tooth', 'Temporary Fillings', 15, 'Mesial', 200),
(73, 53, 'Tooth', 'Light Cure Composite Fillings', 16, 'Mesial', 400),
(74, 54, 'Tooth', 'Pits and Fissure Sealant', 15, 'Mesial', 400),
(75, 55, 'Unclassified', 'Simple Repair of Dentures', 0, '', 500),
(76, 55, 'Unclassified', 'Denture Relining', 0, '', 1000),
(77, 56, 'Canal', 'Root Canal Treatment', 16, '', 1500),
(78, 57, 'Arch', 'Complete/Full Denture -plastic pontic', 28, '', 3500),
(79, 58, 'Quadrant', 'Flouride Treatment', 0, 'All', 400),
(80, 59, 'Canal', 'Root Canal Treatment', 26, '', 1500),
(81, 60, 'Post', 'Screw Dowel Post', 16, '', 1000),
(82, 61, 'Tooth', 'Tooth Lamination', 31, 'Mesial', 500),
(83, 62, 'Quadrant', 'Oral Prophylaxis - light to heavy', 0, 'All', 500),
(84, 63, 'Post', 'Casted Dowel Post', 47, '', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John', 'The', 'Doe', 2),
(10, 'johng', '5f4dcc3b5aa765d61d8327deb882cf99', 'John', 'B', 'Gayatin', 0),
(11, 'cynhtiag', '5f4dcc3b5aa765d61d8327deb882cf99', 'Cynthia', 'B', 'Gayatin', 0),
(12, 'liza', '5f4dcc3b5aa765d61d8327deb882cf99', 'Liza', 'Sobs', 'Gungpilartian', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chronicailments`
--
ALTER TABLE `chronicailments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `closeddates`
--
ALTER TABLE `closeddates`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugstaken`
--
ALTER TABLE `drugstaken`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teethprofile`
--
ALTER TABLE `teethprofile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `chronicailments`
--
ALTER TABLE `chronicailments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `closeddates`
--
ALTER TABLE `closeddates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `drugstaken`
--
ALTER TABLE `drugstaken`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `teethprofile`
--
ALTER TABLE `teethprofile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `treatment_record`
--
ALTER TABLE `treatment_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
