-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 07:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `full_identity_database_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `FULLNAME` varchar(70) NOT NULL,
  `area` varchar(250) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`FULLNAME`, `area`, `contact_no`, `email`, `password`, `Gender`) VALUES
('srabon', 'kjkjn', '61616550556', 'abg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male'),
('Adminx', 'dhaka', '01515516627', 'adminx@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male'),
('Sazzad', 'mirpur', '01755555555', 'sazzad@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `driving_lisence`
--

CREATE TABLE `driving_lisence` (
  `Lisence_No` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Present_Address` varchar(50) DEFAULT NULL,
  `Permanent_Address` varchar(50) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Blood_group` varchar(5) DEFAULT NULL,
  `Validity` date DEFAULT NULL,
  `NID_No` int(11) DEFAULT NULL,
  `Passport_No` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driving_lisence`
--

INSERT INTO `driving_lisence` (`Lisence_No`, `Name`, `Present_Address`, `Permanent_Address`, `Date_of_birth`, `Blood_group`, `Validity`, `NID_No`, `Passport_No`) VALUES
(5, 'change', 'any', 'any', '2022-05-10', 'o+', '0000-00-00', NULL, NULL),
(222, 'cvbc', 'vbcvb', 'cvbcvb', '2022-05-06', 'ghchc', '2022-05-31', 1, 65260),
(789, 'adminx', 'mirpur 1', 'dhaka', '2022-05-01', 'o+', '2022-05-31', 123, 456);

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `Traffic_fine_no` int(11) NOT NULL,
  `Issue_date` date DEFAULT NULL,
  `Issued_by` varchar(30) DEFAULT NULL,
  `Due_date` date DEFAULT NULL,
  `Reason` varchar(50) DEFAULT NULL,
  `Amount_in_BDT` int(11) DEFAULT NULL,
  `Lisence_No` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`Traffic_fine_no`, `Issue_date`, `Issued_by`, `Due_date`, `Reason`, `Amount_in_BDT`, `Lisence_No`) VALUES
(1, '2022-05-20', 'sergent', '2022-05-30', 'Speeding', 1000, 789),
(2, '2022-05-19', 'sergent', '2022-05-29', 'Insurance Expired', 1500, 789);

-- --------------------------------------------------------

--
-- Table structure for table `nid`
--

CREATE TABLE `nid` (
  `NID_No` int(20) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Present_Address` varchar(50) DEFAULT NULL,
  `Permanent_Address` varchar(50) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nid`
--

INSERT INTO `nid` (`NID_No`, `Name`, `Present_Address`, `Permanent_Address`, `Date_of_birth`) VALUES
(1, 'sdfsdf', 'sdfsdf', 'adfsf', '2022-05-09'),
(123, 'adminx', 'mirpur 1', 'any', '2022-05-01'),
(6516541, 'tested', '12mifgy', '61ftfv', '2022-05-14'),
(6516547, 'dtrdg', '12mifgy', '61ftfv', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `Passport_No` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Present_Address` varchar(50) DEFAULT NULL,
  `Permanent_Address` varchar(50) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Phone_No` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`Passport_No`, `Name`, `Present_Address`, `Permanent_Address`, `Date_of_birth`, `Phone_No`) VALUES
(456, 'adminx', 'mirpur 1', 'any', '2022-05-01', '01746711411'),
(65260, 'abcd', 'hhhhh', 'jjjjjjjjjj', '2022-05-14', '5156262616'),
(665165165, 'nkjnjk', 'knkjnk', 'knmkjn', '0000-00-00', '5156262616'),
(2147483647, 'nkjnjk', 'knkjnk', 'knmkjn', '0000-00-00', '5156262616');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `User_ID` int(11) NOT NULL,
  `User_name` varchar(30) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Posting` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`User_ID`, `User_name`, `Password`, `Designation`, `Posting`, `Email`, `Contact_No`) VALUES
(12, 'sergent', '5553cfaf751a4b14960b7581a20bc142', 'senior off', 'dhaka', 'sergent@gmail.com', '0155855546'),
(18, 'jknkjn', '5553cfaf751a4b14960b7581a20bc142', 'senior off', 'banani', 'ab@gmail.com', '015585'),
(19, 'srabon1', 'd9b1d7db4cd6e70935368a1efb10e377', 'senior off', 'Mohammodpu', 's@gmail.com', '6151515115'),
(20, 'adminx', '202cb962ac59075b964b07152d234b70', 'any', 'any', 'adminx@gmail.com', '4444444444444');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `Number_plate` varchar(15) NOT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Registration_no` int(11) DEFAULT NULL,
  `Chassis_no` int(11) DEFAULT NULL,
  `Engine_no` int(11) DEFAULT NULL,
  `Date_bought` date DEFAULT NULL,
  `Registration_validity` date DEFAULT NULL,
  `PUC_status` varchar(10) DEFAULT NULL,
  `Insurance_validity` date DEFAULT NULL,
  `Lisence_No` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`Number_plate`, `Type`, `Registration_no`, `Chassis_no`, `Engine_no`, `Date_bought`, `Registration_validity`, `PUC_status`, `Insurance_validity`, `Lisence_No`) VALUES
('1', 'Car', 2147483647, 2147483647, 2147483647, '2022-05-20', '2022-05-20', 'pass', '2022-05-20', 789),
('6165165', 'Car', 651651, 61651651, 651651651, '2022-05-14', '2022-05-14', 'dasf', '2022-05-14', 789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `driving_lisence`
--
ALTER TABLE `driving_lisence`
  ADD PRIMARY KEY (`Lisence_No`),
  ADD KEY `NID_No` (`NID_No`),
  ADD KEY `Passport_No` (`Passport_No`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD PRIMARY KEY (`Traffic_fine_no`),
  ADD KEY `Lisence_No` (`Lisence_No`);

--
-- Indexes for table `nid`
--
ALTER TABLE `nid`
  ADD PRIMARY KEY (`NID_No`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`Passport_No`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`Number_plate`),
  ADD KEY `Lisence_No` (`Lisence_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fine`
--
ALTER TABLE `fine`
  MODIFY `Traffic_fine_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driving_lisence`
--
ALTER TABLE `driving_lisence`
  ADD CONSTRAINT `driving_lisence_ibfk_1` FOREIGN KEY (`NID_No`) REFERENCES `nid` (`NID_No`),
  ADD CONSTRAINT `driving_lisence_ibfk_2` FOREIGN KEY (`Passport_No`) REFERENCES `passport` (`Passport_No`);

--
-- Constraints for table `fine`
--
ALTER TABLE `fine`
  ADD CONSTRAINT `fine_ibfk_1` FOREIGN KEY (`Lisence_No`) REFERENCES `driving_lisence` (`Lisence_No`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`Lisence_No`) REFERENCES `driving_lisence` (`Lisence_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
