-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 06:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyikaclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--
CREATE DATABASE nyikaclinic;
USE nyikaclinic;

CREATE TABLE `drugs` (
  `DrugID` int(80) NOT NULL,
  `drug_name` varchar(80) NOT NULL,
  `manufacturer` varchar(80) DEFAULT NULL,
  `number_available` int(80) NOT NULL,
  `payment_status` enum('free','payable','','') NOT NULL,
  `drug_type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`DrugID`, `drug_name`, `manufacturer`, `number_available`, `payment_status`, `drug_type`) VALUES
(11, 'cotrimoxazol', 'P and J Phamaceuticals', 5000, 'free', 'depressant'),
(12, 'neosporin', 'Khadesh medicines', 1000, 'payable', 'hallucinogen'),
(13, 'polyxoride', 'Axe Phamaceuticals', 7000, 'payable', 'opium-related'),
(14, 'tylenol', 'Maidgut and daughters', 6000, 'free', 'depressant'),
(15, 'motrin', 'P and J Phamaceuticals', 3000, 'free', 'opium-related'),
(16, 'antistamines', 'Lykah Phamaceuticals', 2000, 'payable', 'opium-related');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `Gender` enum('Female','Male','','') NOT NULL,
  `DOB` date NOT NULL,
  `Positions` varchar(20) NOT NULL,
  `empaddress` varchar(100) NOT NULL,
  `phone_number` varchar(80) NOT NULL,
  `marital_status` enum('Single','Married','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `first_name`, `last_name`, `email`, `Gender`, `DOB`, `Positions`, `empaddress`, `phone_number`, `marital_status`) VALUES
(6, 'Mitchelle', 'Vongai', 'mitch@gmail.com', 'Female', '1960-04-08', 'nurse', '56 manyame drive, chitungwiza', '+2657845', 'Married'),
(7, 'Mary', 'Chmwaya', 'mary@gmail.com', 'Female', '2002-09-16', 'doctor', '18 siwasa street, harare', '+2658903', 'Single'),
(8, 'lykah', 'Mutumbe', 'lykah@gmail.com', 'Female', '1999-11-17', 'nurse', '89 bwanya, nyika', '+2650926', 'Single'),
(9, 'Kirsty', 'Erija', 'kirsty@gmail.com', 'Male', '1980-04-19', 'doctor', '126 nyika street drive, kariba', '+2658975', 'Married'),
(10, 'Kyle', 'Moses', 'kyla@gmail.com', 'Male', '1996-01-14', 'Accountant', '23 kariba drive, gokwe	', '+2652607', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `PatientID` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `Gender` enum('Female','Male','','') NOT NULL,
  `DOB` date NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `phone_number` varchar(80) NOT NULL,
  `marital_status` enum('Single','Married','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`PatientID`, `first_name`, `last_name`, `Gender`, `DOB`, `p_address`, `phone_number`, `marital_status`) VALUES
(1, 'lindiwe', 'Mutungamiri', 'Female', '1999-04-28', '10 nyatsime drive', '+2654566', 'Single'),
(2, 'tariro', 'Moyo', 'Female', '2000-05-20', '12, kachingwa, harare', '+2654785', 'Married'),
(3, 'tiarah', 'mwedzi', 'Male', '2001-03-21', '15 chigudo drive, kwekwe', '+2656789', 'Single'),
(4, 'Titi', 'zuva', 'Male', '2002-12-28', '22 kuwadzana, harare', '+2657456', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `user_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `user_password`) VALUES
('lindiwemutungamiri', 'lindiwe.mutungamiri@ashesi.edu.gh', 'c9464ab56af00b7e8092e334aea6765c'),
('maideigutu', 'maideigutu23@gmail.com', 'c9464ab56af00b7e8092e334aea6765c'),
('tendai', 'tendai@gmail.com', 'c9464ab56af00b7e8092e334aea6765c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`DrugID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`PatientID`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `PatientID` (`PatientID`),
  ADD UNIQUE KEY `phone_number_2` (`phone_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
