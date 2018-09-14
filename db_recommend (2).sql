-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 09:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_recommend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bought`
--

CREATE TABLE `tbl_bought` (
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bought`
--

INSERT INTO `tbl_bought` (`bid`, `uid`, `pid`, `rating`) VALUES
(1, 2, 1, 3.5),
(2, 1, 2, 4.5),
(3, 3, 3, 2.5),
(4, 2, 4, 4),
(5, 1, 6, 3.5),
(6, 3, 5, 4.5),
(8, 1, 4, 3.5),
(9, 4, 1, 2.5),
(10, 2, 8, 3.5),
(11, 4, 10, 4),
(12, 1, 7, 2.5),
(13, 3, 9, 5),
(14, 1, 5, 4),
(15, 4, 11, 5),
(18, 1, 14, 4.5),
(19, 3, 14, 4),
(21, 2, 7, 3),
(22, 3, 7, 4),
(29, 1, 13, 3),
(30, 1, 14, 3),
(31, 1, 15, 3),
(41, 1, 17, 1),
(42, 1, 16, 4),
(47, 2, 14, 0),
(53, 2, 15, 4.53333),
(56, 2, 15, 5),
(57, 2, 15, 1.1),
(58, 1, 1, 2.5),
(59, 1, 5, 3),
(60, 1, 5, 4.3),
(61, 3, 18, 3),
(62, 3, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cid`, `cname`) VALUES
(1, 'Instrument Calibration & Adjustment'),
(2, 'Computer PCI Cards, Cables & Modules'),
(3, 'Light Bulb, Lamp & Lighting Fixtures\r\n'),
(4, 'Electric Motors and Components\r\n'),
(5, 'Headphones and Microphones\r\n'),
(6, 'Electrical and Electronic Gadgets\r\n'),
(7, 'Instrumentation & Control Equipments\r\n'),
(8, 'Optical, Laser Instruments & Devices\r\n'),
(9, 'Heater, Thermostat & Heating Devices\r\n'),
(10, 'Fuses, Circuit Breakers & Components\r\n'),
(11, 'Instrument Calibration & Adjustment'),
(12, 'Computer PCI Cards, Cables & Modules'),
(13, 'Light Bulb, Lamp & Lighting Fixtures\r\n'),
(14, 'Electric Motors and Components\r\n'),
(17, 'Instrumentation & Control Equipments\r\n'),
(18, 'Optical, Laser Instruments & Devices\r\n'),
(19, 'Heater, Thermostat & Heating Devices\r\n'),
(20, 'Fuses, Circuit Breakers & Components\r\n'),
(24, 'Laptops, PC, Mainframes & Computers\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `cid` int(11) NOT NULL,
  `product_img` varchar(250) NOT NULL,
  `created_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pid`, `pname`, `price`, `cid`, `product_img`, `created_date`, `expiry_date`, `status`) VALUES
(1, 'dell inspiron 57 i3 2gb', 60000, 24, '1.jpg', '2018-08-29', '2018-09-21', 1),
(2, 'bluetooth speaker lenovo', 3000, 5, '2.jpg', '2018-02-05', '2018-08-23', 1),
(3, 'bluetooth headphones hp', 2000, 5, '3.jpg', '2018-08-15', '2018-08-21', 1),
(4, 'Electrical Suzuki Motor', 300, 4, '4.jpg', '2018-08-04', '2018-08-30', 1),
(5, 'Gaming Mouse', 800, 6, '5.jpg', '2018-08-08', '2018-09-11', 1),
(6, 'Gaming Keyboard', 900, 6, '6.jpg', '2018-08-15', '2019-01-18', 1),
(7, 'Moto M', 20000, 6, '7.jpg', '2018-08-25', '2018-08-31', 1),
(8, 'Samsung J2', 10000, 6, '8.jpg', '2018-08-31', '2018-11-17', 1),
(9, 'MI note 5 pro', 35000, 6, '9.jpg', '2018-08-18', '2018-09-14', 1),
(10, 'Samsung s7', 40000, 6, '10.jpg', '2018-08-23', '2018-10-12', 1),
(11, 'bluetooth mouse', 800, 6, '11.jpg', '2018-08-24', '2018-08-29', 1),
(12, 'nokia e3', 2000, 6, '12.jpg', '2018-08-16', '2018-08-31', 1),
(13, 'zornwee gaming mouse', 900, 6, '13.jpg', '2018-08-23', '2018-08-06', 1),
(14, 'transcend hdd 1tb', 8000, 6, '14.jpg', '2018-08-16', '2018-09-14', 1),
(15, 'electron fan', 6500, 6, '15.jpg', '2018-08-24', '2018-10-19', 1),
(16, 'asus rice cooker', 3000, 19, '16.jpg', '2018-08-15', '2018-09-05', 1),
(17, 'samsung refrigerator ', 20000, 9, '17.jpg', '2018-08-08', '2018-09-13', 1),
(18, 'hp pavillion notebook', 35000, 6, '18.jpg', '2018-08-24', '2018-09-12', 1),
(19, 'lenovo ideapad 310', 85000, 6, '19.jpg', '2017-12-04', '2019-12-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_query`
--

CREATE TABLE `tbl_query` (
  `qid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` varchar(256) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_query`
--

INSERT INTO `tbl_query` (`qid`, `uid`, `sid`, `pid`) VALUES
(3, 2, 'fffff', 1),
(4, 1, '11111', 2),
(5, 3, 'aaaaa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `reg_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `sex` enum('male','female','others') NOT NULL,
  `profie_picture` varchar(200) DEFAULT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `question` enum('gharbeti','bhadedar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`reg_id`, `username`, `password`, `email`, `phone`, `location`, `sex`, `profie_picture`, `first_name`, `middle_name`, `last_name`, `question`) VALUES
(1, 'ramesrest', 'ramesh', 'ramesrest@gmail.com', '9860298534', 'Lalitpur, Patan', 'male', 'profie_ramesh.jpg', 'Ramesh', NULL, 'Pradhan', 'gharbeti'),
(2, 'bpandeya', 'bhuwan', 'bpandeya70@gmai.com', '9848769516', 'nakkhu,lalitpur', 'male', 'b.jpg', 'bhuwan', 'raj', 'pandeya', 'gharbeti'),
(3, 'bijesh', 'bijesh', 'bijesh@gmail.com', '9858736748', 'hattiban', 'male', 'bj.jpg', 'bijesh', 'jung', 'basnet', 'gharbeti');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `sid` varchar(300) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `middlename` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `status`) VALUES
(16, 'Bhuwan', 'raj', 'Pandeya', 'bpandeya70@gmail.com', 'bhuwan', 'bhuwan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_register`
--

CREATE TABLE `tbl_user_register` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `middle_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_register`
--

INSERT INTO `tbl_user_register` (`uid`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `email`) VALUES
(1, 'Ramesh', NULL, 'Pradhan', 'ramesrest', 'ramesh', 'ramesrest@gmail.com'),
(2, 'Bhuwan', 'Raj', 'Pandeya', 'bpandeya', 'bhuwan', 'bpandeya@gmail.com'),
(3, 'Bijesh', 'Jung', 'Basnet', 'bijeshjungbasne', 'bijesh', 'bijeshjungbasnet@gmail.com'),
(4, 'Subodh', NULL, 'Thakur', 'subodhthakur', 'subodh', 'subodhthakur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `middlename` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`uid`, `firstname`, `middlename`, `lastname`, `username`, `password`, `email`) VALUES
(8, 'ramesh', NULL, 'pradhan', 'ramesh', 'ramesh', 'ramesh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bought`
--
ALTER TABLE `tbl_bought`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `uid` (`uid`,`pid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `tbl_query`
--
ALTER TABLE `tbl_query`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_user_register`
--
ALTER TABLE `tbl_user_register`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bought`
--
ALTER TABLE `tbl_bought`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_query`
--
ALTER TABLE `tbl_query`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bought`
--
ALTER TABLE `tbl_bought`
  ADD CONSTRAINT `tbl_bought_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `tbl_product` (`pid`),
  ADD CONSTRAINT `tbl_bought_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `tbl_user_register` (`uid`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `tbl_category` (`cid`);

--
-- Constraints for table `tbl_query`
--
ALTER TABLE `tbl_query`
  ADD CONSTRAINT `tbl_query_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `tbl_product` (`pid`),
  ADD CONSTRAINT `tbl_query_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `tbl_user_register` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
