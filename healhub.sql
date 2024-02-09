-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 12:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `category`, `doctor_name`, `date`, `time`, `reason`) VALUES
(1, 'General Practitioner', 'Dr. 1', '2023-06-13', '21:17:00', 'hjgjgjgjh'),
(2, 'General Practitioner', 'Dr. 1', '2023-06-13', '12:21:00', 'fkghgykg'),
(3, 'Cardiologist', 'Dr 5', '2023-06-13', '21:21:00', 'rtyuiio'),
(4, 'Cardiologist', 'Dr 5', '2023-06-13', '21:21:00', 'jhgjgjhg'),
(5, 'Gynecologist', 'Dr 4', '2023-06-12', '09:23:00', 'jhjkjhkh'),
(6, 'Gynecologist', 'Dr 4', '2023-06-12', '00:26:00', 'lkjlkljuuy'),
(7, 'Gynecologist', 'Dr 4', '2023-06-12', '00:26:00', 'lkjlkljuuy'),
(8, 'Gynecologist', 'Dr 4', '2023-06-12', '00:26:00', 'lkjlkljuuy'),
(9, 'Gynecologist', 'Dr 4', '2023-06-12', '00:26:00', 'lkjlkljuuy'),
(10, 'General Practitioner', 'Dr 2', '2023-06-14', '22:12:00', 'beemar'),
(11, 'Cardiologist', 'Dr 2', '2023-06-23', '22:16:00', 'dsda'),
(12, 'Cardiologist', 'Dr. John Doe', '2023-06-14', '15:02:00', 'ill'),
(13, '', '', '0000-00-00', '00:00:00', ''),
(16, 'Cardiologist', 'Dr. John Doe', '2023-06-23', '05:24:00', 'beemaar'),
(17, 'Psychologist', '', '2023-06-23', '05:24:00', 'beemaar'),
(18, 'Cardiologist', 'Dr. John Doe', '2023-06-22', '15:48:00', 'ill'),
(19, 'Cardiologist', 'Dr. John Doe', '2023-07-19', '12:12:00', 'sdasdasda'),
(20, 'Gynecologist', 'Dr. Sarah Wilson', '2023-07-10', '16:18:00', 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `b_id` int(11) NOT NULL,
  `btitle` text NOT NULL,
  `bcontent` text NOT NULL,
  `b_user` varchar(255) NOT NULL COMMENT 'blog uploaded by user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`b_id`, `btitle`, `bcontent`, `b_user`) VALUES
(1, 'ZxZx', 'ZxZx', 'Abdullah'),
(2, 'Test title', 'gfdgdgdgd', 'Ali'),
(3, 'Test title', 'jhikjkjhkjhu', 'Alu'),
(4, 'Test title', 'gfhfh', 'ghfghfgh'),
(5, 'asdadasd', 'dfsfdsfaewW', 'Jack'),
(64, 'Abc', 'lkjlkjlkdjfslkfjsasa', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specialty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`) VALUES
(1, 'Dr. John Doe', 'Cardiologist'),
(2, 'Dr. Jane Smith', 'Dermatologist'),
(3, 'Dr. Michael Johnson', 'Orthopedist'),
(4, 'Dr. Sarah Wilson', 'Gynecologist'),
(5, 'Dr. Robert Brown', 'Neurologist');

-- --------------------------------------------------------

--
-- Table structure for table `helpsupport`
--

CREATE TABLE `helpsupport` (
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helpsupport`
--

INSERT INTO `helpsupport` (`question`) VALUES
('Pet name?'),
('how to schedule an appointment?'),
('abc abc bac?'),
(''),
('how to schedule an appointment?asas'),
('help help help?');

-- --------------------------------------------------------

--
-- Table structure for table `lab_bookings`
--

CREATE TABLE `lab_bookings` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_number` varchar(20) NOT NULL,
  `lab_city` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `preference` varchar(20) NOT NULL,
  `prescription` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_bookings`
--

INSERT INTO `lab_bookings` (`id`, `patient_name`, `patient_number`, `lab_city`, `lab`, `branch`, `preference`, `prescription`, `age`) VALUES
(1, 'amna', '03017113070', 'lahore', 'humdard', '1', 'lab-visit', 'C:/xampp/htdocs/healhub/uploads/354180233_669914421844189_2751408279453526009_n.jpg', 18),
(2, 'fatima', '09007860103', 'karachi', 'chughtai', 'Branch 4', 'home-sample', 'C:/xampp/htdocs/healhub/uploads/photo-1491616569293-e27f7f4cd41a.jpeg', 20),
(3, 'fatima', '09007860103', 'karachi', 'chughtai', '1', 'home-sample', 'C:/xampp/htdocs/healhub/uploads/photo-1491616569293-e27f7f4cd41a.jpeg', 20),
(4, 'amna', '03017113070', 'lahore', 'chughtai', 'Branch 2', 'lab-visit', 'C:/xampp/htdocs/healhub/uploads/1687156117292.jpeg', 19),
(5, 'amna', '03017113070', 'lahore', 'chughtai', '1', 'home-sample', 'C:/xampp/htdocs/healhub/uploads/1687156117292.jpeg', 19),
(6, 'Abdullah Rana', '03154999386', 'lahore', 'chughtai', 'Branch 2', 'lab-visit', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `register_udb`
--

CREATE TABLE `register_udb` (
  `user_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `user_type` text NOT NULL COMMENT 'doctor, patient or lab'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_udb`
--

INSERT INTO `register_udb` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `user_type`) VALUES
(1, 'Abdullah', 'Rana', 'abc@gmail.com', '12345678', 'Airline Society, Johar Town', 'Lahore', 'Patient'),
(2, 'Ali', 'Hussain', 'ali@gmail.com', '12345678', 'Layyah', 'Lahore', 'Doctor'),
(3, 'Waqas', 'Ahmed', 'waqas@yahoo.com', '12345678', 'Johar Town', 'Lahore', 'Patient'),
(4, 'Amna', 'Khan', 'ek.amnakhan@gmail.com', 'hello1234', 'faisal town', 'Lahore', 'Lab attendant'),
(5, 'Zair', 'Abbas', 'zairpdffile69@gmail.com', '12345678', 'Ucp A building', 'Peshawar', 'Doctor'),
(6, 'Umer', 'Akram', 'umer@gmail.com', '12345678', 'Eden', 'Islamabad', 'Doctor'),
(7, 'abdullah', 'shahid', 'abdullahshahid69@gmail.com', '12345678', 'Bahria town', 'Islamabad', 'Lab attendant'),
(8, 'Ghulam', 'Mohyuddin', 'sirgm@yahoo.com', '12345678', 'Airline Society, Johar Town', 'Lahore', 'Doctor'),
(9, 'Taha', 'Rana', 'taha69@gmail.com', '12345678', 'New Satellite Towm', 'Karachi', 'Doctor'),
(10, 'Ahmed', 'Jason', 'ahmedj@gmail.com', '87654321', 'Samnabad', 'Lahore', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_bookings`
--
ALTER TABLE `lab_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_udb`
--
ALTER TABLE `register_udb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab_bookings`
--
ALTER TABLE `lab_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_udb`
--
ALTER TABLE `register_udb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
