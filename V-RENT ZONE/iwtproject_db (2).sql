-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 10:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `User_Email` varchar(30) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`First_Name`, `Last_Name`, `User_Email`, `Message`) VALUES
('Sulaksha', 'Wanshathilake', 'tharaka.tmw7@gmail.com', 'shdfhdf');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `User_ID` int(11) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`User_ID`, `Message`) VALUES
(2, 'No pending orders.\r\nAll clear.'),
(3, 'Reminder:\r\nHi, check out our latest offers and rent your dream vehicle for the best price available!'),
(1, 'Welcome Hashan,\r\nCheck OFFERS page to find latest best deals with huge discounts! (Limited Time Promo)\r\nDiscover all new luxury vehicles there and you can simply place your order.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `CardHolder_Name` varchar(30) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Expire_Date` date NOT NULL,
  `CVV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`CardHolder_Name`, `Card_Number`, `Expire_Date`, `CVV`) VALUES
('Tharaka', 123456789, '2022-06-11', 789),
('Sulaksha', 2147483647, '2022-05-06', 123);

-- --------------------------------------------------------

--
-- Table structure for table `quickjourney`
--

CREATE TABLE `quickjourney` (
  `journeyType` varchar(25) NOT NULL,
  `selected_vehicle` varchar(30) NOT NULL,
  `pickup_location` varchar(30) NOT NULL,
  `pickup_date` date NOT NULL,
  `drop_location` varchar(30) NOT NULL,
  `pickup_time` time NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quickjourney`
--

INSERT INTO `quickjourney` (`journeyType`, `selected_vehicle`, `pickup_location`, `pickup_date`, `drop_location`, `pickup_time`, `payment`) VALUES
('One Way Trip', 'Car', 'Colombo', '2022-05-11', 'Ratnapura', '21:14:00', 0),
('One Way Trip', 'Car', 'Colombo', '2022-05-11', 'Ratnapura', '21:14:00', 0),
('One Way Trip', 'Car', 'Colombo', '2022-05-11', 'Ratnapura', '21:14:00', 0),
('One Way Trip', 'Car', 'Kandy', '2022-05-11', 'Colombo', '21:37:00', 0),
('One Way Trip', 'Van', 'Kandy', '2022-06-11', 'Malabe', '19:22:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `User_Telephone` int(10) NOT NULL,
  `User_Address` varchar(100) NOT NULL,
  `User_Email` varchar(30) NOT NULL,
  `User_Password` varchar(15) NOT NULL,
  `User_Type` varchar(10) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`User_ID`, `First_Name`, `Last_Name`, `Birthday`, `User_Telephone`, `User_Address`, `User_Email`, `User_Password`, `User_Type`) VALUES
(1, 'Hashan', 'Madhuwantha', '2000-07-07', 791234567, '1st Street, Walasmulla, Hambantota', 'hashan@email.com', '#HshnM@01', 'Customer'),
(2, 'Tharaka', 'Madushan', '2000-01-01', 711234567, '504 B/3, School Lane, New Town, Ratnapura', 'tharaka.tmw7@gmail.com', '12345678', 'ADMIN'),
(3, 'Vishak', 'Nayanajith', '2000-09-08', 751234567, 'No.13, Colombo Road, Yakkala', 'vishak2000@outlook.com', 'v=u+at@@', 'Customer'),
(4, 'Chamindu', 'Jayanath', '2000-03-03', 741234560, 'No.12., Kaduwela Road, Pittugala', 'ranganacolombo@outlook.com', '7Tm9n)lk/?', 'Customer'),
(5, 'Sulaksha', 'Wanshathilake', '2000-11-11', 721234567, 'No.25, Dambulla Road, Habarana', 'sulakperera003@gmail.com', 'mg1$toyou', 'Customer'),
(6, 'Test1', 'Person1', '2000-06-06', 2147483647, 'Nithara Yana Paara', 'email@email.com', '12345', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `Vehicle_Number` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`Vehicle_Number`, `Name`, `Type`, `Category`, `Status`, `Rate`) VALUES
('12-1252', 'Vox Wagon Van', 'Van', 'Classical', 'Available', 3000),
('300-5558', 'Mitsubishi Lancer', 'Car', 'Classical', 'Available', 33000),
('54-1425', 'Toyota Crown', 'Car', 'Classical', 'Available', 22000),
('BAT-7895', 'KIA Soronto', 'Car', 'General', 'Reserved', 2000),
('CAB-5478', 'Toyota Land Cruiser', 'Cab', 'Luxury', 'Reserved', 2500),
('CAD-6771', 'Toyota Aqua', 'Car', 'General', 'Available', 4000),
('CAG-3421', 'Suzuki Vagon R', 'Cab', 'General', 'Available', 8500),
('CAG-5498', 'Toyota Lexus', 'Car', 'Luxury', 'Reserved', 2000),
('CAL-1818', 'Mercedes Benz E306', 'Car', 'Luxury', 'Available', 3000),
('CBD-0707', 'Nissan Petrol', 'Cab', 'Luxury', 'Available', 2000),
('CEA-4521', 'Nissan Leaf', 'Van', 'General', 'Available', 17000),
('EL-0003', 'Moris Miner', 'Car', 'Classical', 'Available', 2000),
('KA-1966', 'Honda Fit', 'Car', 'General', 'Available', 4500),
('LK-1258', 'Honda Fir Shuttle', 'Car', 'Industrial', 'Available', 29000),
('LL-2882', 'TATA Xeon', 'Tipper', 'Industrial', 'Available', 17000),
('LZ-1031', 'Mixcro M7', 'Car', 'Industrial', 'Available', 35000),
('LZ–0001', 'Benz Hearse', 'Funereal Car', 'Other', 'Available', 25000),
('Na-1253', 'Ashok Leyland', 'Bus', 'Industrial', 'Available', 4500),
('NG-0045', 'BMW 740E', 'Buses', 'Luxury', 'Available', 5000),
('PB-1031', 'Suzuki Fuso', 'Lorry', 'Industrial', 'Available', 2000),
('PP-2569', 'Toyota Hiace', 'Ambulance', 'Other', 'Available', 19000),
('PS-3456', 'Range Rover', 'Cab', 'Luxury', 'Reserved', 7000),
('ZA-3525 ', 'Mahindra Bolero', 'Dubble Cab', 'Industrial', 'Available', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Card_Number`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_Email` (`User_Email`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`Vehicle_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
