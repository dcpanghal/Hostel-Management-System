-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsnitkkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('Vijay@123', 'Vijay@123');

-- --------------------------------------------------------

--
-- Table structure for table `fhostels`
--

CREATE TABLE `fhostels` (
  `hostel_id` int(11) NOT NULL,
  `hostel_no` varchar(255) NOT NULL,
  `hostel_image` varchar(255) NOT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `hostel_cap` int(11) NOT NULL,
  `hostel_trooms` int(11) NOT NULL,
  `hostel_contact` varchar(255) NOT NULL,
  `hostel_email` varchar(255) NOT NULL,
  `mess_menu` varchar(255) NOT NULL,
  `mess_bill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fhostels`
--

INSERT INTO `fhostels` (`hostel_id`, `hostel_no`, `hostel_image`, `hostel_name`, `hostel_cap`, `hostel_trooms`, `hostel_contact`, `hostel_email`, `mess_menu`, `mess_bill`) VALUES
(1, 'H1', 'FH1.png', 'Bhagirathi Bhawan', 198, 198, '01744-258', 'bhagrathibhawan@nitkkr.ac.in', 'menu-H1.jpg', 'bill_H1.xlsx'),
(2, 'H2', 'FH2.png', 'Kavery Bhawan', 285, 292, '01744-256', 'cauveryhostel19@nitkkr.ac.in', 'menu-H2.jpg', 'bill_H2.xlsx'),
(3, 'H3', 'FH3.jfif', 'Kalpana Chawla Bhawan', 600, 600, '01744-233254', 'kch@nitkkr.ac.in', 'menu-H3.jpg', 'bill_H3.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `leaverequest`
--

CREATE TABLE `leaverequest` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `hostel_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `reason` text NOT NULL,
  `student_gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaverequest`
--

INSERT INTO `leaverequest` (`student_id`, `student_name`, `student_roll`, `hostel_no`, `room_no`, `from_date`, `to_date`, `reason`, `student_gender`) VALUES
(10, 'Mandeep', 12016027, 'H1', 'A236', '2023-04-21', '2023-05-18', 'Home', 'Male'),
(11, 'Sikha', 12016029, 'H3', 'A239', '2023-04-25', '2023-05-13', 'Fever', 'Female'),
(13, 'Atul', 12016026, 'H10', 'A235', '2023-04-26', '2023-05-06', 'Mid Sem Break', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `mhostels`
--

CREATE TABLE `mhostels` (
  `hostel_id` int(11) NOT NULL,
  `hostel_no` text NOT NULL,
  `hostel_image` varchar(255) NOT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `hostel_cap` int(11) NOT NULL,
  `hostel_trooms` int(11) NOT NULL,
  `hostel_contact` varchar(255) NOT NULL,
  `hostel_email` varchar(255) NOT NULL,
  `mess_menu` text NOT NULL,
  `mess_bill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhostels`
--

INSERT INTO `mhostels` (`hostel_id`, `hostel_no`, `hostel_image`, `hostel_name`, `hostel_cap`, `hostel_trooms`, `hostel_contact`, `hostel_email`, `mess_menu`, `mess_bill`) VALUES
(1, 'H1', 'H1.jfif', 'Abhimanyu Bhawan', 228, 76, '74043-92231', 'abhimanyubhawan@gmail.com', 'menu-H1.jpg', 'bill_H1.xlsx'),
(2, 'H2', 'H2.jfif', 'Bhishma Bhawan', 246, 82, '98961-71966', 'hostel2nit@gmail.com', 'menu-H2.jpg', 'bill_H2.xlsx'),
(3, 'H3', 'H3.jpg', 'Chakradhar Bhawan', 248, 84, '99919-15145', 'nithostel3@gmail.com', 'menu-H3.jpg', 'bill_H3.xlsx'),
(4, 'H4', 'H4.jpg', 'Dronacharya Bhawan ', 240, 240, '99919-15145', 'dronacharyabhawan4nit@gmail.com', 'menu-H4.jpg', 'bill_H4.xlsx'),
(5, 'H5', 'H5.jpg', 'Eklavya Bhawan', 240, 240, '99919-15145', 'hostelno.05@gmail.com', 'menu-H5.jpg', 'bill_H5.xlsx'),
(6, 'H6', 'H6.jpg', 'Fanibhushan Bhawan', 162, 162, '7404719500', 'fanibhushanbhawanh6@gmail.com', 'menu-H6.jpg', 'bill_H6.xlsx'),
(7, 'H7', 'H7.jpeg', 'Girivar Bhawan', 351, 351, '7404719500', 'girivarbhawanh7@gmail.com', 'menu-H7.jpg', 'bill_H7.xlsx'),
(8, 'H8', 'H8.jpeg', 'Harihar Bhawan', 350, 350, '7404719500', 'h8hariharnitk@gmail.com', 'menu-H8.jpg', 'bill_H8.xlsx'),
(9, 'H9', 'H9.jpeg', 'Indivar Bhawan', 350, 350, '7404719500', 'h9indivarnitk@gmail.com', 'menu-H9.jpg', 'bill_H9.xlsx'),
(10, 'H10', 'H10.jpeg', 'Visvesvaraya Bhawan ', 1226, 1067, '8570905800', 'visvesvarayabhawan@gmail.com', 'menu-H10.jpg', 'bill_H10.xlsx'),
(11, 'H11', 'H11.jpg', 'Vivekananda Bhawan', 347, 204, '01744-233191', 'h11@nitkkr.ac.in', 'menu-H11.jpg', 'bill_H11.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `not_date` date NOT NULL DEFAULT current_timestamp(),
  `not_desc` text NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `not_date`, `not_desc`, `file_name`) VALUES
(11, '2023-04-26', 'Pharmacist engaged to provide medical facilities during night hours.', 'Pharmacist-engaged-for-night-hours-in-Hostels.pdf'),
(12, '2023-04-26', 'Advisory to Students Regarding Public Display of Affection.', 'letter-no.-70-Advisory-to-Students-Regarding-Public-Display-of-Affection.pdf'),
(13, '2023-04-26', 'Notification regarding applicability of hostel seat rent to students.', 'notification-regarding-applicability-of-hostel-seat-rent-to-students.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` bigint(20) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `hostel_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `room_seater` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_phoneno` bigint(20) NOT NULL,
  `your_photo` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `allot_date` date NOT NULL DEFAULT current_timestamp(),
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_roll`, `student_name`, `student_email`, `student_phone`, `student_pass`, `hostel_no`, `room_no`, `course`, `room_seater`, `father_name`, `father_phoneno`, `your_photo`, `gender`, `allot_date`, `fees`) VALUES
(35, 12016029, 'Sikha', 'bansalatul813@gmail.com', 9306501854, '$2y$10$YvSYRjRM/ENTToT7TtQ2QOYv5nnL7LiWLhvoY9.T/QJ9cOGTP01eW', 'H3', 'A239', 'B.tech', 1, 'Rajesh', 9306501854, 'download.png', 'Female', '2023-04-26', 7400),
(36, 12016028, 'Mandeep', 'mandeepkumar@gmail.com', 8806501854, '$2y$10$2maFXrvuOBy4ZfDElrEbRu.1dE7732zP1CmYIQEdbVyCXcBeA7hHG', 'H1', 'A236', 'M.Tech', 2, 'Srikant', 9306501854, 'Atul.png', 'Male', '2023-04-26', 5800),
(37, 12016001, 'Ashish', 'bansalatul813@gmail.com', 9306501854, '$2y$10$1sv2gsvO986FjYCTanXVAehQzr6XKBEx8J3U76ZRmAUx8Hpuj5dfS', 'H8', 'A236', 'B.tech', 2, 'Rajesh kumar', 9306501854, 'Atul.png', 'Male', '2023-04-27', 7400),
(38, 12016077, 'sahil', 'bansalatul813@gmail.com', 9306501854, '$2y$10$xLTKI33.rZ5HVis8dmBkl.GSDLgVKreTbpK8.gf4k6WUUulBIL.AO', 'H8', 'A236', 'B.tech', 1, 'Rajesh kumar', 9306501854, 'Atul.png', 'Male', '2023-05-01', 7400),
(41, 12016026, 'Atul', 'bansalatul813@gmail.com', 9306501854, '$2y$10$F40QGC5RSdyX6K3Wvoza9uqzXpe0Y9RDRiyg4oNrP6D5UI899D7CW', 'H10', 'A235', 'B.tech', 1, 'Rajesh kumar', 9306501854, 'Atul.png', 'Male', '2023-05-01', 7400),
(42, 12016022, 'Sikha', 'bansalatul813@gmail.com', 9306501854, '$2y$10$CO.yf5ry7dN4FFtSfQ3OjO20NNXjHgHNJhpnuCwXN0SUoXqJb9ZdC', 'H1', 'A239', 'B.tech', 1, 'Rajesh kumar', 9306501854, '136704600_1848178675319890_1840851303808417725_n.png', 'Female', '2023-05-01', 7400);

-- --------------------------------------------------------

--
-- Table structure for table `student_complains`
--

CREATE TABLE `student_complains` (
  `com_id` int(11) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `com_subject` text NOT NULL,
  `com_desc` text NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_complains`
--

INSERT INTO `student_complains` (`com_id`, `student_roll`, `com_subject`, `com_desc`, `response`) VALUES
(8, 12016027, 'Want to change in Mess menu', 'We all student want to make some changes in mess menu.', ''),
(9, 12016026, 'About Hostel Common Room', 'Want to improve facilities provided in common room of our hostel', ''),
(10, 12016026, 'Electricity problem', 'Electricity problem in my room.', 'Resolved.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `admin_id` (`admin_id`) USING HASH;

--
-- Indexes for table `fhostels`
--
ALTER TABLE `fhostels`
  ADD PRIMARY KEY (`hostel_id`),
  ADD UNIQUE KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `leaverequest`
--
ALTER TABLE `leaverequest`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `mhostels`
--
ALTER TABLE `mhostels`
  ADD PRIMARY KEY (`hostel_id`),
  ADD UNIQUE KEY `hostel_id` (`hostel_id`),
  ADD UNIQUE KEY `hostel_no` (`hostel_no`) USING HASH;

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD UNIQUE KEY `notification_id` (`notification_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_roll` (`student_roll`,`student_email`,`student_phone`);

--
-- Indexes for table `student_complains`
--
ALTER TABLE `student_complains`
  ADD PRIMARY KEY (`com_id`),
  ADD UNIQUE KEY `com_id` (`com_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fhostels`
--
ALTER TABLE `fhostels`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leaverequest`
--
ALTER TABLE `leaverequest`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mhostels`
--
ALTER TABLE `mhostels`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student_complains`
--
ALTER TABLE `student_complains`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
