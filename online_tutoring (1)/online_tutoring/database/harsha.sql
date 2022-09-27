-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 03:03 PM
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
-- Database: `harsha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `phone`, `email`, `password`) VALUES
(1, 'madhu', '7975751851', 'madhu861586@gmail.com', 'sweetu');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `class` int(11) NOT NULL,
  `cost` smallint(6) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `name`, `class`, `cost`, `tutor_id`) VALUES
(1, 'PHYSICS', 12, 1200, 6),
(4, 'CHEMISTRY', 11, 1300, 10),
(20, 'CHEMISTRY', 12, 1600, 6),
(22, 'BIOLOGY', 12, 1600, 1),
(23, 'CHEMISTRY', 11, 1600, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_contentes`
--

CREATE TABLE `course_contentes` (
  `course_id` int(11) NOT NULL,
  `resources` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_contentes`
--

INSERT INTO `course_contentes` (`course_id`, `resources`) VALUES
(4, 'https://byjus.com/ncert-solutions-class-11-biology/'),
(22, 'https://byjus.com/ncert-solutions-class-12-biology/');

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `studentid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_students`
--

INSERT INTO `registered_students` (`studentid`, `courseid`, `date`) VALUES
(4, 1, '2022-09-25'),
(4, 4, '2022-09-25'),
(4, 20, '2022-09-25'),
(4, 22, '2022-09-25'),
(4, 23, '2022-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `class` smallint(6) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `email`, `phone`, `class`, `password`, `name`) VALUES
(4, 'madhu861586@gmail.com', '+917975751', 11, 'mk', 'Madhu');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutorid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorid`, `name`, `phone`, `password`, `email`) VALUES
(1, 'harsha', '9591544154', 'gummi', 'harsha17@gmail.com'),
(6, 'Madhu', '7975751851', 'Mk', 'madhu861586@gmail.com'),
(10, 'Madhu', '1234567890', 'goobe', 'madhu.1si19cs070@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`,`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`,`name`,`class`,`cost`,`tutor_id`),
  ADD UNIQUE KEY `name` (`name`,`class`,`cost`,`tutor_id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `course_contentes`
--
ALTER TABLE `course_contentes`
  ADD UNIQUE KEY `course_id` (`course_id`,`resources`) USING HASH,
  ADD UNIQUE KEY `resources` (`resources`) USING HASH;

--
-- Indexes for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD PRIMARY KEY (`studentid`,`courseid`),
  ADD KEY `courseid` (`courseid`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`,`email`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutorid`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `tutorid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutorid`);

--
-- Constraints for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD CONSTRAINT `registered_students_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`),
  ADD CONSTRAINT `registered_students_ibfk_3` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`),
  ADD CONSTRAINT `registered_students_ibfk_4` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
