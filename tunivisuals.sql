-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 09:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunivisuals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_code` int(11) NOT NULL,
  `admin_name` varchar(32) NOT NULL,
  `admin_email` varchar(32) NOT NULL,
  `admin_pw` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_code`, `admin_name`, `admin_email`, `admin_pw`) VALUES
(1, 'nidhal', 'nidhal@gmail.com', 'fbca02ade083da41c40a2b6600c51457'),
(2, 'hamdi', 'hamdi@yahoo.com', '2adcb5923c2a96d57070444d5a970777'),
(4, 'khaled', 'khaled@gmail.com', '25114403f1c7c591ee6774fb128684cd'),
(8, 'oussama', 'oussama@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'mohsen', 'mohsen@gmail.com', '80393af8b3d99736c8b0d49d9a9da4ff'),
(22, 'nader', 'nader@gmail.com', '422dee01fcbe1268cad32a639a2d9c93');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cin` varchar(8) NOT NULL,
  `clientname` varchar(32) NOT NULL,
  `clientemail` varchar(32) NOT NULL,
  `clientpw` longtext NOT NULL,
  `tel` varchar(8) NOT NULL,
  `adress` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `clientname`, `clientemail`, `clientpw`, `tel`, `adress`) VALUES
('01201253', 'houssem', 'kouki@gmail.com', 'e10adc3949ba59ab', '50327122', 'bizerte'),
('01254867', 'ahmed', 'ahmed20@gmail.com', 'e10adc3949ba59ab', '12345678', 'nabeul'),
('12345678', 'mohamed', 'moahamed@gmail.com', 'a8854a2c3b969bf9', '25666877', 'tunis ,tunis'),
('14320000', 'ouss', 'ouss@esen.tn', 'e10adc3949ba59ab', '50327123', 'manouba'),
('14520000', 'yesin', 'yesin@gmail.com', 'ab4f63f9ac651525', '71547889', 'tunis'),
('20121212', 'hamza', 'hamza@gmail.com', 'e10adc3949ba59ab', '23960170', 'ariana'),
('65654321', 'mo7sen', 'mo7sen@gmail.com', 'c245d70144584448dfcd5e1013e3be8c', '55880067', 'fath'),
('75845623', 'marwen', 'marwen@gmail.com', '54a88dfe917755b0', '5515583', 'tunis,tunis'),
('78456321', 'nader', 'nader@gmail.com', '422dee01fcbe1268cad32a639a2d9c93', '77888999', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_client` varchar(8) NOT NULL,
  `subject` varchar(16) NOT NULL,
  `content` text NOT NULL,
  `code_photographe` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_client`, `subject`, `content`, `code_photographe`) VALUES
(761, '12345678', 'prix', 'not what i expected,not that good, some delay ', '11'),
(5990, '14520000', 'photographer', 'best prices ever                    ', '16'),
(9872, '14520000', 'photographer', 'feel free to write anything..\r\n                    ', '11');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `code` varchar(8) NOT NULL,
  `photographername` varchar(32) NOT NULL,
  `photographerlastname` varchar(32) NOT NULL,
  `salary` double NOT NULL,
  `expyear` int(11) NOT NULL,
  `code_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`code`, `photographername`, `photographerlastname`, `salary`, `expyear`, `code_admin`) VALUES
('11', 'tarek', 'yousef', 800, 4, 1),
('16', 'seif', 'amor', 1500, 4, 4),
('45', 'daniel', 'daniel', 450, 1, 4),
('55', 'salma', 'slama', 870, 3, 15),
('99', 'mahdi', 'ben', 998, 9, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tasks_id` int(11) NOT NULL,
  `tasks_client_cin` varchar(32) NOT NULL,
  `tasks_type` varchar(32) NOT NULL,
  `tasks_number` int(11) NOT NULL,
  `tasks_date` date NOT NULL,
  `tasks_adress` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tasks_id`, `tasks_client_cin`, `tasks_type`, `tasks_number`, `tasks_date`, `tasks_adress`) VALUES
(0, '12345678', 'All types', 1, '2020-05-15', 'manouba'),
(453, '14320000', 'Landscape', 3, '2019-05-16', 'bizerte,tunis'),
(886, '14520000', 'Portraits', 3, '2020-05-15', 'manouba'),
(1519, '14320000', 'Portraits', 3, '2020-05-30', 'etadhamen'),
(1706, '20121212', 'Landscape', 2, '2019-05-09', 'tunis ,tunis'),
(8333, '14320000', 'Portraits', 1, '2020-05-01', 'douar hicher'),
(9108, '14320000', 'All types', 2, '2020-05-29', 'manouba'),
(9232, '14320000', 'Marriage', 2, '2019-05-16', 'tunis'),
(9279, '01201253', 'Portraits', 2, '2020-05-13', 'bizerte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`),
  ADD KEY `code_photographe` (`code_photographe`),
  ADD KEY `cin_client` (`fb_client`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`code`),
  ADD KEY `code_admin` (`code_admin`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tasks_id`),
  ADD KEY `tasks_client` (`tasks_client_cin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`fb_client`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`code_photographe`) REFERENCES `photographer` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photographer`
--
ALTER TABLE `photographer`
  ADD CONSTRAINT `photographer_ibfk_1` FOREIGN KEY (`code_admin`) REFERENCES `admin` (`admin_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`tasks_client_cin`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
