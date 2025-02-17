-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2024 at 04:21 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Admin@123#');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `class_x` varchar(255) NOT NULL,
  `class_x_poy` date NOT NULL,
  `class_x_marks` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `class_12_poy` date NOT NULL,
  `class_12_marks` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `sgpa` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `college_yop` date NOT NULL,
  `course_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `total_exp` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `first_name`, `last_name`, `email`, `mobile`, `dob`, `city`, `state`, `gender`, `address`, `class_x`, `class_x_poy`, `class_x_marks`, `stream`, `class_12_poy`, `class_12_marks`, `college_name`, `university_name`, `branch`, `usn`, `sgpa`, `cgpa`, `college_yop`, `course_type`, `company_name`, `designation`, `total_exp`, `salary`, `location`, `date`) VALUES
(7, 'Chetan', 'Tankasali', 'chetantankasali@gmail.com', '9742602248', '1992-01-24', 'Bagalkot', 'Karnataka', 'Male', 'Killa Near Chawadi bagalkot', 'class_x', '2008-02-01', '6', 'PUC', '2010-02-01', '39', 'Gogte Institute of Technology', 'VTU', 'Computer Science', 'MCA1232014', '', '8.07', '2018-02-01', 'full_time', 'astTECS Communication Pvt Ltd', 'Software Developer', '6', '50000', 'Bengaluru', '2024-07-08 16:15:20'),
(8, 'prabhu', 'hiremath', 'Prabhudevah003@gmail.com', '7676569234', '2003-11-28', 'bagalkot', 'karnataka', 'Male', 'S Nijalinaggapa Medical Collage #D56    ', 'class_x', '2018-12-20', '464', 'PUC', '2019-04-18', '439', 'BGMIT', 'VTU', 'Computer Science', '2LB21CS029', '', '8.23', '2025-10-12', 'part_time', 'TCS', 'developer', '3 years', '35000', 'Banglore', '2024-07-09 16:02:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
