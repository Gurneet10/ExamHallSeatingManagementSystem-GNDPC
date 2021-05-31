-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 05:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`) VALUES
(1, 'gurneetchawla10@gmail.com', '1234567890', 0),
(2, 'gurneet@gmail.com', '1234567890', 100);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Roll_No` int(50) NOT NULL,
  `Trade` varchar(50) NOT NULL,
  `Subject` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Roll_No`, `Trade`, `Subject`) VALUES
(11, 'Gurneet', 1216, 'AUTOMOBILE', 'jsdhckuhsohiochsiouysuicsh');

-- --------------------------------------------------------

--
-- Table structure for table `datesheet`
--

CREATE TABLE `datesheet` (
  `id` int(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Trade` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Timings` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`id`, `Subject`, `Semester`, `Trade`, `Date`, `Timings`) VALUES
(57, 'Applied Mathematics', '2nd', 'CIVIL', '2021-01-06', 'morning'),
(61, 'Communication English-II', '2nd', 'MECHANICAL', '2021-01-08', 'Evening'),
(62, 'C Programming', '3rd', 'CSE', '2021-01-08', 'Morning'),
(63, 'Communication English-II', '2nd', 'MECHANICAL', '2021-01-09', 'Evening'),
(64, 'Surveying-II', '4th', 'CIVIL', '2021-01-11', 'Evening'),
(65, 'Electrical Machines-II', '4th', 'ELECTRICAL', '2021-01-13', 'Morning'),
(66, 'IWT', '3rd', 'CSE', '2021-01-12', 'Morning');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(50) NOT NULL,
  `Semester` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Student_name` varchar(200) NOT NULL,
  `Trade` varchar(200) NOT NULL,
  `Semester` varchar(200) NOT NULL,
  `Roll_No` varchar(200) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Student_name`, `Trade`, `Semester`, `Roll_No`, `section`) VALUES
(1, 'Adarsh', 'CS', '5', '1201', 'L'),
(2, 'Akash', 'CS', '5', '1202', 'L'),
(3, 'Alamjot', 'CS', '5', '1203', 'L'),
(4, 'Amanjot', 'CS', '5', '1204', 'L'),
(5, 'Amritpal', 'CS', '5', '1205', 'L'),
(6, 'Arshpreet', 'CS', '5', '1206', 'L'),
(7, 'Ashita', 'CS', '5', '1207', 'L'),
(8, 'Baljeet', 'CS', '5', '1208', 'L'),
(9, 'Chirag', 'CS', '5', '1209', 'L'),
(10, 'Eknoor', 'CS', '5', '1210', 'L'),
(11, 'Gurneet', 'CS', '5', '1211', 'L'),
(12, 'Gurnishan', 'CS', '5', '1212', 'L'),
(13, 'Gurpreet', 'CS', '5', '1213', 'L'),
(14, 'Harjinder', 'CS', '5', '1214', 'L'),
(15, 'Harjoban', 'CS', '5', '1215', 'L'),
(16, 'Harman', 'CS', '5', '1216', 'L'),
(17, 'Harmanpreet', 'CS', '5', '1217', 'L'),
(18, 'Harpreet', 'CS', '5', '1218', 'L'),
(19, 'Himanshu', 'CS', '5', '1219', 'L'),
(20, 'Inder', 'CS', '5', '1220', 'L'),
(21, 'Jaspreet', 'CS', '5', '1221', 'L'),
(22, 'Jeevan', 'ME', '5', '1401', 'M'),
(23, 'Karan', 'ME', '5', '1402', 'M'),
(24, 'Amandeep', 'ME', '5', '1403', 'M'),
(25, 'Kirandeep', 'ME', '5', '1404', 'M'),
(26, 'Kiran', 'ME', '5', '1405', 'M'),
(27, 'Manjot', 'ME', '5', '1406', 'M'),
(28, 'Manmeet', 'ME', '5', '1407', 'M'),
(29, 'Manmohan', 'ME', '5', '1408', 'M'),
(30, 'Hina', 'ME', '5', '1409', 'M'),
(31, 'Shweta', 'ME', '5', '1410', 'M'),
(32, 'Gopi', 'ME', '5', '1411', 'M'),
(33, 'Rashi', 'ME', '5', '1412', 'M'),
(34, 'Mohan', 'ME', '5', '1413', 'M'),
(35, 'Mohit', 'ME', '5', '1414', 'M'),
(36, 'Kirti', 'ME', '5', '1415', 'M'),
(37, 'Khushi', 'ME', '5', '1416', 'M'),
(38, 'Gurman', 'ME', '5', '1417', 'M'),
(39, 'Jaskirat', 'ME', '5', '1418', 'M'),
(40, 'Dimple', 'ME', '5', '1419', 'M'),
(41, 'Preet', 'ME', '5', '1420', 'M'),
(42, 'Arsh', 'ME', '5', '1421', 'M'),
(43, 'Rahul', 'CS', '5', '1222', 'L'),
(44, 'Rahul', 'CS', '5', '1222', 'L'),
(45, 'Raju', 'CS', '5', '1223', 'L'),
(46, 'Sunny', 'CS', '5', '1224', 'L'),
(47, 'Kulwinder', 'CS', '5', '1225', 'L'),
(48, 'Nimrat', 'CS', '5', '1226', 'L'),
(49, 'Deepika', 'CS', '5', '1227', 'L'),
(50, 'Salman', 'CS', '5', '1228', 'L'),
(51, 'Jasmine', 'CS', '5', '1229', 'L'),
(52, 'Amit', 'CS', '5', '1230', 'L'),
(53, 'Mehar', 'CS', '5', '1231', 'L'),
(54, 'Sarab', 'CS', '5', '1232', 'L'),
(55, 'Sid', 'CS', '5', '1233', 'L'),
(56, 'Param', 'CS', '5', '1234', 'L'),
(57, 'Niara', 'CS', '5', '1235', 'L'),
(58, 'Ginni', 'CS', '5', '1236', 'L'),
(59, 'Srishti', 'CS', '5', '1237', 'L'),
(60, 'Ammy', 'CS', '5', '1238', 'L'),
(61, 'Maninder', 'CS', '5', '1239', 'L'),
(62, 'Kareena', 'CS', '5', '1240', 'L'),
(63, 'Rishi', 'CS', '5', '1241', 'L'),
(64, 'Ashwerya', 'CS', '5', '1242', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `Roll_No` int(20) NOT NULL,
  `Student_name` varchar(20) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Trade` varchar(30) NOT NULL,
  `section` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_form`
--

INSERT INTO `student_form` (`Roll_No`, `Student_name`, `Semester`, `Trade`, `section`) VALUES
(1216, 'Gurneet', '5th', 'cse', 'L'),
(1231, 'jaspreet kaur', '5', 'CSE', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Trade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `Subject`, `Semester`, `Trade`) VALUES
(1, 'Applied Physics-I', '1st', 'CSE'),
(2, 'Engineering Chemistry-I', '1st ', 'ECE'),
(3, 'Applied Physics-II', '2nd', 'CSE'),
(4, 'Applied Chemistry-II', '2nd', 'Mechanical'),
(5, 'IWT', '3rd', 'CSE'),
(6, 'RDBMS', '4th', 'CSE'),
(7, 'Applied Mathematics-I', '1st', 'CSE'),
(8, 'Engineering Mathematics-I', '1st', 'ECE'),
(9, 'Engineering Physics-II', '2nd', 'ECE'),
(10, 'Engineering Chemistry-II', '2nd', 'ECE'),
(11, 'Electronic devices and circuits', '3rd', 'ECE'),
(12, 'Electrical circuits and Instrumentations', '3rd', 'ECE'),
(13, 'Industrial Electronics', '4th', 'ECE'),
(14, 'Communication Engineering', '4th', 'ECE'),
(15, 'Microcontroller', '5th', 'ECE'),
(16, 'Advanced Communication Systems', '5th', 'ECE'),
(17, 'Computer Hardware Servicing and Networking', '6th', 'ECE'),
(18, 'Embedded Systems Practical', '6th', 'ECE'),
(19, 'Engineering Mathematics-I', '1st', 'Automobile'),
(20, 'Engineering Chemistry-I', '1st', 'Automobile'),
(21, 'Engineering Graphics-II', '2nd', 'Automobile'),
(22, 'Engineering Chemistry-II', '2nd', 'Automobile'),
(23, 'Machine Drawing', '3rd', 'Automobile'),
(24, 'Strength of Materials', '3rd', 'Automobile'),
(25, 'Thermal Engineering', '4th', 'Automobile'),
(26, 'Automobile Engines', '4th', 'Automobile'),
(27, 'Industrial Automation', '5th', 'Automobile'),
(28, 'Process Automation Practical', '5th', 'Automobile'),
(29, 'Automobile Body Building Engineering', '6th', 'Automobile'),
(30, 'Computer Aided Design and Manufacturing', '6th', 'Automobile'),
(31, 'Engineering Mathematics-I', '1st', 'Mechanical'),
(32, 'Engineering Chemistry-I', '1st', 'Mechanical'),
(33, 'Communication English-II', '2nd', 'Mechanical'),
(34, 'Engineering Chemistry-II', '2nd', 'Mechanical'),
(35, 'Manufacturing Processes', '3rd', 'Mechanical'),
(36, 'Strength of Materials', '3rd', 'Mechanical'),
(37, 'Heat Power Engineering', '4th', 'Mechanical'),
(38, 'Special machines', '4th', 'Mechanical'),
(39, 'Design of Machine Elements', '5th', 'Mechanical'),
(40, 'Thermal And Automobile', '5th', 'Mechanical'),
(41, 'Industrial Engineering And Management', '6th', 'Mechanical'),
(42, 'Computer Aided Design and Manufacturing', '6th', 'Mechanical'),
(43, 'Communication English-I', '1st', 'Civil'),
(44, 'Engineering Mathematics-I', '1st', 'Civil'),
(45, 'Communication English-II', '2nd', 'Civil'),
(46, 'Applied Mathematics', '2nd', 'Civil'),
(47, 'Engineering Mechanics', '3rd', 'Civil'),
(48, 'Surveying-I', '3rd', 'Civil'),
(49, 'Theory of Structures', '4th', 'Civil'),
(50, 'Surveying-II', '4th', 'Civil'),
(51, 'Structural Engineering', '5th', 'Civil'),
(52, 'Environmental Engineering and Pollution Control', '5th', 'Civil'),
(53, 'Construction Management', '6th', 'Civil'),
(54, 'Steel Structures', '6th', 'Civil'),
(55, 'Communication English-I', '1st', 'Electrical'),
(56, 'Engineering Chemistry-I', '1st', 'Electrical'),
(57, 'Communication English-II', '2nd', 'Electrical'),
(58, 'Engineering Chemistry-II', '2nd', 'Electrical'),
(59, 'Electrical Circuit Theory', '3rd', 'Electrical'),
(60, 'Electrical Machines-I', '3rd', 'Electrical'),
(61, 'Measurements and Instruments', '4th', 'Electrical'),
(62, 'Electrical Machines-II', '4th', 'Electrical'),
(63, 'Micro Controller', '5th', 'Electrical'),
(64, 'Generation Transmission and Switchgear', '5th', 'Electrical'),
(65, 'Applied Mathematics-I', '1st', 'CSE'),
(66, 'Applied Mathematics-II', '2nd', 'CSE'),
(67, 'C Programming', '3rd', 'CSE'),
(68, 'Operating Systems', '3rd', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(50) NOT NULL,
  `Trade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rand_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `user_id`, `rand_no`) VALUES
(64, 1, 5841279);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datesheet`
--
ALTER TABLE `datesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `datesheet`
--
ALTER TABLE `datesheet`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
