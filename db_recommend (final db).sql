-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 09:52 AM
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
(62, 3, 19, 5),
(63, 7, 1, 5),
(64, 8, 4, 3),
(65, 9, 25, 2);

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
(24, 'Laptops, PC, Mainframes & Computers\r\n'),
(25, 'Street, Flood and Commercial Lights Xerox Machines '),
(27, 'Automobile Electrical Components Network Video Recorder '),
(28, 'Diodes & Electronic Active Devices Biometric System '),
(29, 'Cables & Wiring Components Diodes '),
(30, 'Mobile Phone & Accessories Transformer Testing '),
(31, 'PCB Modules and Circuit Boards Wires '),
(32, 'Domestic Water Purifiers & Filters Stainless Steel Wire '),
(33, 'Adhesive & Pressure Sensitive Tapes Headphone '),
(34, 'Security & Inspection Devices Digital Display '),
(35, 'Electrical & Electronic Goods Repair Earthing Cover '),
(36, 'Biometrics & Access Control Devices Smart Phone '),
(37, 'Office Automation Products & Devices Decorative Lamps '),
(38, 'Safety Equipment & Systems Decorative Lantern '),
(39, 'Generators, Turbines & Power Plants Decorative Light '),
(40, 'Calibrators & Monitoring Systems Safety Net '),
(41, 'Electrical & Electronic Goods Rental Firewall Appliances '),
(42, 'Electronic Safes & Security Systems Programmable Logic '),
(43, 'Controllers '),
(44, 'Computer Hard Disk, RAM & Pen Drives LED Display Board '),
(45, 'CD, DVD, MP3 & Audio Video Players Electric Lighting '),
(46, 'Electrical Panels & Distribution Box Self Adhesive Tapes '),
(47, 'Electrical & Signaling Contractors HP Laptop '),
(48, 'Home Appliances & Machines Outdoor Light '),
(49, 'Decorative Light, Lamp & Lamp Shades Modular Switches '),
(50, 'Insulators & Insulation Materials Starter Motors '),
(51, 'Batteries & Charge Storage Devices Electric Bulb '),
(52, 'Measuring Equipments & Instruments Generator '),
(53, 'Freezers, Refrigerators & Chillers Electronic Switch '),
(54, 'Switches & Switch Boxes GPS Tracking Device '),
(55, 'Decorative and Party Lights Speakers '),
(56, 'Process Control Systems & Equipments LED Bulb '),
(57, 'Electrical & Electronic Connectors Chandeliers '),
(58, 'Electric Fittings & Components UPS '),
(59, 'Solar & Renewable Energy Products Air Conditioner '),
(60, 'CCTV, Surveillance Systems and Parts Relays '),
(61, 'Electrical Conduits and Fittings Electrical Work '),
(62, 'Lantern, Chandeliers & Hanging Lamps Portable Speaker '),
(63, 'Metal and Alloy Wires LED Television '),
(64, 'Industrial Coolers, Blowers & Fans CCTV '),
(65, 'Relays and Contactors Vehicle GPS System '),
(66, 'Inverters, UPS and Converters Cable Tray '),
(67, 'GPS and Navigation Devices Connectors '),
(68, 'Interior and Exterior Lighting Electrical Switchgear '),
(69, 'Automobile Electrical Components Network Video Recorder '),
(70, 'Cables & Wiring Components Diodes '),
(71, 'Mobile Phone & Accessories Transformer Testing '),
(72, 'PCB Modules and Circuit Boards Wires '),
(73, 'Domestic Water Purifiers & Filters Stainless Steel Wire '),
(74, 'Adhesive & Pressure Sensitive Tapes Headphone '),
(75, 'Security CCTV '),
(76, 'HDMI Cable '),
(77, 'Electronic Ballasts '),
(78, 'Electrical Equipments '),
(79, 'Air Conditioner Repairing '),
(80, 'Electric Motors '),
(81, 'Cyber Cafe '),
(82, 'Duct Air Conditioner '),
(83, 'Cable Gland '),
(84, 'Commercial Electrical Works '),
(85, 'UV Water Purifiers '),
(86, 'Dish Antenna '),
(87, 'Home Appliances '),
(88, 'LCD Television '),
(89, 'Adapters '),
(90, 'Spike Guard '),
(91, 'Mobile Repair '),
(92, 'AC Motors '),
(93, 'Calibration Services '),
(94, 'Embedded Development Boards '),
(95, 'Canon Digital Camera '),
(96, 'Water Purifiers '),
(97, 'Motor Starters '),
(98, 'Cable Connectors '),
(99, 'Voltage Stabilizers '),
(100, 'Insulation Material '),
(101, 'Thermal Insulation Materials '),
(102, 'Insulation Tape '),
(103, 'Power Cables '),
(104, 'Refrigerator Repairing '),
(105, 'Circuit Breakers '),
(106, 'Electronic Choke '),
(107, 'Safety Belts '),
(108, 'Electronic Scanners '),
(109, 'Computer Speakers '),
(110, 'DC Motors '),
(111, 'Process Indicator '),
(112, 'Flexible Conduits '),
(113, 'Electric Inverters '),
(114, 'Insulators '),
(115, 'Electrical Sockets '),
(116, 'Digital pH Meter '),
(117, 'Cable Accessories '),
(118, 'Hand-held Metal Detector '),
(119, 'Laser Optics '),
(120, 'Electric Cables '),
(121, 'Switchgears '),
(122, 'Safe Deposit Boxes '),
(123, 'Transmission Towers '),
(124, 'Electrical Wires '),
(125, 'USB Pen Drive '),
(126, 'DVD Players '),
(127, 'PH Meter '),
(128, 'Auto Electrical Products '),
(129, 'Power Transformers '),
(130, 'Electrical Panels '),
(131, 'Safety Equipment '),
(132, 'LED Street Light '),
(133, 'Electrical Connectors '),
(134, 'Decorative LED Bulb '),
(135, 'Laser Machine '),
(136, 'Desktop Computer '),
(137, 'Lantern '),
(138, 'Transformers '),
(139, 'Electronic Wire '),
(140, 'Electrical Contractor '),
(141, 'Electric Fans '),
(142, 'Wireless Security System '),
(143, 'Earplug Earphone '),
(144, 'Computer Scanners '),
(145, 'LED Light Strip '),
(146, 'Capacitor '),
(147, 'Automation Systems '),
(148, 'Electronic Circuit Boards '),
(149, 'Fancy Light '),
(150, 'Inverter Batteries '),
(151, 'CCTV Camera '),
(152, 'Multimedia Speaker '),
(153, 'Laser Printer '),
(154, 'Split Air Conditioners '),
(155, 'Surgical Light '),
(156, 'Luminaries '),
(157, 'Water Chillers '),
(158, 'LED Floodlight '),
(159, 'Water Heater & Geyser '),
(160, 'PC Board '),
(161, 'Projector '),
(162, 'Switchboards '),
(163, 'Car Batteries '),
(164, 'Two Door Refrigerator '),
(165, 'Luminaires Lighting '),
(166, 'Time Attendance Systems '),
(167, 'Refrigerator '),
(168, 'LED OT Lights '),
(169, 'Set Top Box '),
(170, 'Duct Air Cooler '),
(171, 'Junction Boxes '),
(172, 'Electrical Wiring Services '),
(173, 'Water Cooler '),
(174, 'Generator Rental Services '),
(175, 'Electrical Transformer '),
(176, 'Burglary Safes '),
(177, 'Aluminum Wires '),
(178, 'Bluetooth Speaker '),
(179, 'Evaporative Air Cooler '),
(180, 'Lamps '),
(181, 'Home Theater System '),
(182, 'Heater & Heating Components '),
(183, 'Computer Printers '),
(184, 'Calibration Equipment '),
(185, 'Antenna '),
(186, 'Measuring Tools '),
(187, 'Electronic Relays & Parts '),
(188, 'Limit Switches '),
(189, 'PVC Conduit Pipes '),
(190, 'Integrated Circuits '),
(191, 'Amplifiers '),
(192, 'LED Track Light '),
(193, 'Measurement Instrument '),
(194, 'Bluetooth Headset '),
(195, 'Electronic Components '),
(196, 'Spark Plug '),
(197, 'GPS Tracking System '),
(198, 'Communication Towers '),
(199, 'UV Lamps '),
(200, 'LED Screen '),
(201, 'Electrical Ceiling Fans '),
(202, 'Fire Proof Safes '),
(203, 'CCTV Dome Camera '),
(204, 'Solar Power Systems '),
(205, 'Camera Lenses '),
(206, 'Power Capacitors '),
(207, 'Deep Freezer '),
(208, 'Mobile Battery '),
(209, 'Biometric Access Control System '),
(210, 'LED Tube Light '),
(211, 'Electrical Fittings '),
(212, 'Cassette Air Conditioner '),
(213, 'Kent RO Water Purifier '),
(214, 'Telecom Tower '),
(215, 'Solar Inverter '),
(216, 'Multimeter '),
(217, 'Security Safes '),
(218, 'Photocopier Machine '),
(219, 'Fiber Laser Marker '),
(220, 'Temperature Indicators '),
(221, 'Digital SLR Camera '),
(222, 'Decorative Light '),
(223, 'Light Bulb '),
(224, 'Air Ventilation System '),
(225, 'Street Lights '),
(226, 'Hard Disk Drive '),
(227, 'Electric Geyser '),
(228, 'Vehicle Tracking Systems '),
(229, 'Mobile Cover '),
(230, 'Ceiling Fans '),
(231, 'Air Conditioning System '),
(232, 'Steel Wire '),
(233, 'Electrical Junction Box '),
(234, 'Power Contactors '),
(235, 'PCB Circuit '),
(236, 'Electronic Repair Service '),
(237, 'Packaging Tapes '),
(238, 'Wired Earphone '),
(239, 'Digital Panel Meter '),
(240, 'Switch Mode Power Supply '),
(241, 'Electrical Plug '),
(242, 'Pressure Switches '),
(243, 'Stabilizers '),
(244, 'EPABX System '),
(245, 'Servo Stabilizer '),
(246, 'Water Level Controller '),
(247, 'Industrial Safety Equipments '),
(248, 'Dell Laptops '),
(249, 'Laser Levels '),
(250, 'Sound Systems Rental '),
(251, 'Air Curtain '),
(252, 'LED Panel Light '),
(253, 'Biometric Attendance System '),
(254, 'Harmonic Filters '),
(255, 'Binding Wire '),
(256, 'Digital Camera '),
(257, 'Video Recorder '),
(258, 'Door Frame Metal Detector '),
(259, 'Mobile Earphone '),
(260, 'Washing Machine '),
(261, 'Light Emitting Diode '),
(262, 'Electric Water Heater '),
(263, 'Electrical Switches '),
(264, 'Metal Core PCB '),
(265, 'LG Refrigerator '),
(266, 'Digital Multi Meter '),
(267, 'Electrical Insulators '),
(268, 'DG Sets '),
(269, 'Digital Meters '),
(270, 'Electronic Gadgets '),
(271, 'Cello Tape '),
(272, 'Samsung Mobile Phones '),
(273, 'Ceiling OT Lights '),
(274, 'Automotive Batteries '),
(275, 'Cable Assemblies '),
(276, 'Car Parking System '),
(277, 'LED Displays '),
(278, 'Inverters '),
(279, 'Current Transformers '),
(280, 'Laptops '),
(281, 'Operation Theatre Lights '),
(282, 'Motherboards '),
(283, 'Tube Light '),
(284, 'Reverse Osmosis Water Purifiers '),
(285, 'BOPP Tapes '),
(286, 'Industrial Air Cooler '),
(287, 'Laser Distance Meters '),
(288, 'Automotive Electrical Parts '),
(289, 'Music Player '),
(290, 'Mixer Grinder '),
(291, 'LED Decorative Light '),
(292, 'Electronic Locker Safe '),
(293, 'Electrical Components '),
(294, 'Public Address Systems '),
(295, 'Video Conferencing System '),
(296, 'Electric Irons '),
(297, 'Computer Processor '),
(298, 'Safety Helmets '),
(299, 'Mobile Charger '),
(300, 'External Hard Drive '),
(301, 'Solar Panels ');

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
(19, 'lenovo ideapad 310', 85000, 6, '19.jpg', '2017-12-04', '2019-12-20', 1),
(20, 'lava iris x1', 5000, 6, '20.jpg', '2018-08-01', '2018-08-09', 1),
(21, 'Digital Timer', 200, 6, '21.jpg', '2018-08-08', '2018-10-18', 1),
(22, 'Computer Motherboard', 20000, 24, '22.jpg', '2018-08-20', '2018-10-20', 1),
(23, 'Advertising Displays', 20000, 78, '23.jpg', '2018-08-20', '2018-10-20', 1),
(24, 'Electrical Switch Board', 300, 54, '24.jpg', '2018-08-20', '2018-10-20', 1),
(25, 'Circuit Board', 5000, 78, '25.jpg', '2018-08-20', '2018-10-20', 1),
(26, 'Copper Wires', 5000, 29, '26.jpg', '2018-08-20', '2018-10-20', 1),
(27, 'Cell Phone Repair Service', 5000, 1, '27.jpg', '2018-08-20', '2018-10-20', 1),
(28, 'LCD Display', 2000, 6, '28.jpg', '2018-08-20', '2018-10-20', 1),
(29, 'Solar Water Heater', 20000, 6, '29.jpg', '2018-08-20', '2018-10-20', 1),
(30, 'Microwave Oven', 5000, 6, '30.jpg', '2018-08-20', '2018-10-20', 1),
(31, 'Process Controllers', 3000, 6, '31.jpg', '2018-08-20', '2018-10-20', 1),
(32, 'Bulb Holder', 150, 78, '32.jpg', '2018-08-20', '2018-10-20', 1),
(33, 'GPS Devices', 10000, 67, '33.jpg', '2018-08-20', '2018-10-20', 1),
(34, 'Hanging Light', 2000, 13, '34.jpg', '2018-08-20', '2018-10-20', 1),
(35, 'LED COB Light', 100, 3, '35.jpg', '2018-08-20', '2018-10-20', 1),
(36, 'Pen Drive', 200, 195, '36.jpg', '2018-08-20', '2018-10-20', 1),
(37, 'Power Generator', 50000, 78, '37.jpg', '2018-08-20', '2018-10-20', 1),
(38, 'Xerox Machines', 30000, 108, '38.jpg', '2018-08-20', '2018-10-20', 1),
(39, 'Network Video Recorder', 5000, 256, '39.jpg', '2018-08-20', '2018-10-20', 1),
(40, 'Biometric System', 5000, 36, '40.jpg', '2018-08-20', '2018-10-20', 1),
(41, 'Smart Phone', 2000, 6, '40.jpg', '2018-08-20', '2018-10-20', 1),
(42, 'Decorative Lamps', 2000, 49, '42.jpg', '2018-08-20', '2018-10-20', 1),
(43, 'Decorative Lantern', 5000, 49, '43.jpg', '2018-08-20', '2018-10-20', 1),
(44, 'Firewall Appliances', 5000, 93, '44.jpg', '2018-08-20', '2018-10-20', 1),
(45, 'Smart Phone', 2000, 272, '45.jpg', '2018-08-20', '2018-10-20', 1),
(46, 'LED Display Board', 5000, 18, '46.jpg', '2018-08-20', '2018-10-20', 1),
(47, 'Electric Lighting', 500, 3, '47.jpg', '2018-08-20', '2018-10-20', 1),
(48, 'HP Laptop', 50000, 24, '48.jpg', '2018-08-20', '2018-10-20', 1),
(49, 'Outdoor Light', 2000, 132, '49.jpg', '2018-08-20', '2018-10-20', 1),
(50, 'Starter Motors', 50000, 4, '50.jpg', '2018-08-20', '2018-10-20', 1),
(51, 'Generator', 5000, 92, '51.jpg', '2018-08-20', '2018-10-20', 1),
(52, 'Electronic Switch', 50, 10, '52.jpg', '2018-08-20', '2018-10-20', 1),
(53, 'Speakers', 2000, 6, '53.jpg', '2018-08-20', '2018-10-20', 1),
(54, 'Chandeliers', 30000, 3, '54.jpg', '2018-08-20', '2018-10-20', 1),
(55, 'UPS', 5000, 58, '55.jpg', '2018-08-20', '2018-10-20', 1),
(56, 'Air Conditioner', 15000, 231, '56.jpg', '2018-08-20', '2018-10-20', 1),
(57, 'LED Television', 33450, 88, '57.jpg', '2018-08-20', '2018-10-20', 1),
(58, 'CCTV', 25000, 60, '58.jpg', '2018-08-20', '2018-10-20', 1),
(59, 'Vehicle GPS System', 23400, 67, '59.jpg', '2018-08-20', '2018-10-20', 1),
(60, 'Cable Tray', 2500, 12, '60.jpg', '2018-08-20', '2018-10-20', 1),
(61, 'Camera', 1500, 221, '61.jpg', '2018-08-20', '2018-10-20', 1),
(62, 'Diesel Generator', 1230000, 14, '62.jpg', '2018-08-20', '2018-10-20', 1),
(63, 'Flash Drive', 200, 51, '63.jpg', '2018-08-20', '2018-10-20', 1),
(64, 'Mobile Phones', 50000, 71, '64.jpg', '2018-08-20', '2018-10-20', 1),
(65, 'Mobile Phones', 50000, 71, '65.jpg', '2018-08-20', '2018-10-20', 1),
(66, 'Instrumentation Field Services', 500, 1, '66.jpg', '2018-08-20', '2018-10-20', 1),
(67, 'Home Automation System', 5000, 37, '67.jpg', '2018-08-20', '2018-10-20', 1),
(68, 'Security CCTV', 2000, 75, '68.jpg', '2018-08-20', '2018-10-20', 1),
(69, 'HDMI Cable', 2000, 76, '69.jpg', '2018-08-20', '2018-10-20', 1),
(70, 'Electronic Ballasts', 2000, 77, '70.jpg', '2018-08-20', '2018-10-20', 1),
(71, 'Air Conditioner Repairing', 2000, 35, '71.jpg', '2018-08-20', '2018-10-20', 1),
(72, 'Electric Motors', 4000, 4, '72.jpg', '2018-08-20', '2018-10-20', 1),
(73, 'Duct Air Conditioner', 5000, 59, '73.jpg', '2018-08-20', '2018-10-20', 1),
(74, 'Cable Gland', 2000, 83, '74.jpg', '2018-08-20', '2018-10-20', 1),
(75, 'Commercial Electrical Works', 2000, 84, '75.jpg', '2018-08-20', '2018-10-20', 1),
(76, 'UV Water Purifiers', 4500, 85, '76.jpg', '2018-08-20', '2018-10-20', 1),
(77, 'Dish Antenna', 2500, 86, '77.jpg', '2018-08-20', '2018-10-20', 1),
(78, 'Home Appliances', 2000, 48, '78.jpg', '2018-08-20', '2018-10-20', 1),
(79, 'Adapters', 300, 89, '79.jpg', '2018-08-20', '2018-10-20', 1),
(80, 'Spike Guard', 3000, 90, '80.jpg', '2018-08-20', '2018-10-20', 1),
(81, 'Mobile Repair', 2000, 91, '81.jpg', '2018-08-20', '2018-10-20', 1),
(82, 'AC Motors', 21000, 92, '82.jpg', '2018-08-20', '2018-10-20', 1),
(83, 'Calibration Services', 1000, 1, '83.jpg', '2018-08-20', '2018-10-20', 1),
(84, 'Embedded Development Boards', 2000, 94, '84.jpg', '2018-08-20', '2018-10-20', 1),
(85, 'Canon Digital Camera', 25000, 95, '85.jpg', '2018-08-20', '2018-10-20', 1),
(86, 'Water Purifiers', 2500, 32, '86.jpg', '2018-08-20', '2018-10-20', 1),
(87, 'Water Purifiers', 2500, 32, '87.jpg', '2018-08-20', '2018-10-20', 1),
(88, 'Motor Starters', 2000, 97, '88.jpg', '2018-08-20', '2018-10-20', 1),
(89, 'Cable Connectors', 5000, 98, '89.jpg', '2018-08-20', '2018-10-20', 1),
(90, 'Voltage Stabilizers', 5000, 99, '90.jpg', '2018-08-20', '2018-10-20', 1),
(91, 'Insulation Material', 2000, 50, '91.jpg', '2018-08-20', '2018-10-20', 1),
(92, 'Digital Temperature Indicators', 500, 220, '92.jpg', '2018-08-20', '2018-10-20', 1),
(93, 'Socket', 2000, 115, '93.jpg', '2018-08-20', '2018-10-20', 1),
(94, 'Solar Panels', 3000, 301, '94.jpg', '2018-08-20', '2018-10-20', 1),
(95, 'MP3 Player', 2000, 45, '95.jpg', '2018-08-20', '2018-10-20', 1),
(96, 'Electric Irons', 500, 296, '96.jpg', '2018-08-20', '2018-10-20', 1),
(97, 'Electric Control Panel', 5000, 46, '97.jpg', '2018-08-20', '2018-10-20', 1),
(98, 'Mixer Grinder', 2000, 290, '98.jpg', '2018-08-20', '2018-10-20', 1),
(99, 'Light Emitting Diode', 2000, 261, '99.jpg', '2018-08-20', '2018-10-20', 1),
(100, 'Electrical Plug', 3000, 241, '100.jpg', '2018-08-20', '2018-10-20', 1),
(101, 'Wired Earphone', 4000, 238, '101.jpg', '2018-08-20', '2018-10-20', 1),
(102, 'PCB Circuit', 7000, 235, '102.jpg', '2018-08-20', '2018-10-20', 1),
(103, 'Mobile Battery', 4000, 208, '103.jpg', '2018-08-20', '2018-10-20', 1);

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
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_register`
--

INSERT INTO `tbl_user_register` (`uid`, `firstname`, `middlename`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'ramesh', NULL, 'pradhan', 'ramesh', 'ramesh', 'ramesrest@gmail.com'),
(2, 'Ramesh', NULL, 'Pradhan', 'ramesrest', 'ramesh', 'ramesrest@gmail.com'),
(3, 'Bhuwan', 'Raj', 'Pandeya', 'bpandeya', 'bhuwan', 'bpandeya@gmail.com'),
(4, 'Bijesh', 'Jung', 'Basnet', 'bijeshjungbasne', 'bijesh', 'bijeshjungbasnet@gmail.com'),
(5, 'Subodh', NULL, 'Thakur', 'subodhthakur', 'subodh', 'subodhthakur@gmail.com'),
(6, 'umesh', NULL, 'pradhan', 'umesh', 'umesh', 'umesh@gmail.com'),
(7, 'Pratik', '', 'Neupane', 'pratik', 'pratik', 'pratik@gmail.com'),
(8, 'tidev', 'khaling', 'rai', 'tridev', 'tridev', 'tridev@gmail.com'),
(9, 'suzan', '', 'dhungana', 'suzan', 'suzan', 'suzan@gmail.com');

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
(8, 'ramesh', NULL, 'pradhan', 'ramesh', 'ramesh', 'ramesh@gmail.com'),
(9, 'bhuwan', 'raj', 'pandeya', 'bhuwan', 'bhuwan', 'bhuwan@gmail.com'),
(10, 'subodh', '', 'thakur', 'subodhthakur', 'subodh', 'subodhthakur@gmail.com'),
(11, 'bijesh', 'jung', 'basnet', 'bijeshjungbasne', 'bijesh', 'bijeshjungbasent@gmail.com');

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
  ADD PRIMARY KEY (`uid`);

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
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
-- AUTO_INCREMENT for table `tbl_user_register`
--
ALTER TABLE `tbl_user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
