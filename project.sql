-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 06:36 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `colname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `colname`, `email`, `password`, `created_at`) VALUES
(1, 'P R Pote College Of Engineering', 'prpotecollege@gmail.com', '565656', '2023-08-31 14:25:28'),
(2, 'Shri Shivaji Science College', 'sssc@gmail.com', '4545', '2023-08-31 14:30:59'),
(3, 'P R Pote College Of Pharmacy', 'prpcem@gmail.com', '5656', '2023-09-01 02:09:49'),
(4, 'user1', 'user1@gmail.com', '45', '2023-09-01 02:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `proname` text NOT NULL,
  `collagename` text NOT NULL,
  `domain` text NOT NULL,
  `languages` text NOT NULL,
  `description` varchar(2000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `proname`, `collagename`, `domain`, `languages`, `description`, `created_at`) VALUES
(1, 'E-commerce Website ', 'P R Pote College of Engineering', 'Web Development', 'HTML, CSS,  Javascript , Php, SQL', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:39:50'),
(2, 'Group chat application in JAVA.', 'P R Pote College of Pharmacy', 'App Development', 'Java , XML', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:40:24'),
(3, 'Movie Recommendation System', 'P R Pote College of Agriculture', 'Data Science', 'Python : Numpy , Pandas,\r\nMatplotlib , ScikitLearn.', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:40:41'),
(4, 'Face Detection and Recognition', 'P R Pote College of Architecture', 'Machine Learning', 'Python : Opencv', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:41:02'),
(5, 'Stock Prediction Analysis', 'P R Pote college of Ayurveda', 'Data Science', 'Python : Numpy,Pandas,Matplotlib, Scikitlearn', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:41:40'),
(6, 'Quiz App', '', 'Android Development', 'Java , XML', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:30:34'),
(7, 'Social Media Site', '', 'Web Development', 'HTML, CSS,  Javascript , Php, SQL', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:30:45'),
(8, 'Studybuddy', 'P R Pote College Of Engineering ', 'Website Development', 'HTML, CSS,  Javascript , Php, SQL', 'This project is ajjjshhhhhhhhhhhjx nssssssssss ammmmmmmmmmmmm snnnnnnnnnnnnnnn zbbxxxxxxxxxxxxxxxx dvvvvvvvvvvvvvvvvvvvvvv sbbbbbb', '2023-09-01 02:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `image`, `created_at`) VALUES
(1, 'Mahesh Arunrao Ghongade', 'maheshghongade644@gmail.com', 'mg@565656', '', '2023-08-31 09:07:04'),
(2, 'Mahesh Arunrao Ghongade', 'maheshghongade644@gmail.com', 'mg@565656', '', '2023-08-31 09:07:51'),
(3, 'Mahesh Arunrao Ghongade', 'maheshghongade644@gmail.com', 'mg@565656', '', '2023-08-31 09:08:07'),
(4, 'Roshan Ghongade', 'roshanghongade@gmail.com', 'mg@565656', '', '2023-08-31 11:07:47'),
(5, 'Roshan Ghongade', 'roshanghongade@gmail.com', 'mg@565656', 'studentprofile/', '2023-08-31 11:11:15'),
(6, 'Roshan Ghongade', 'roshanghongade@gmail.com', 'mg@565656', 'studentprofile/', '2023-08-31 11:11:49'),
(7, 'Mahesh Ghongade', 'maheshghongade644@gmail.com', 'mg@5656', 'studentprofile/1634576325152.jpg', '2023-08-31 11:12:08'),
(8, 'Mahesh Ghongade', 'maheshghongade644@gmail.com', 'mg@5656', 'studentprofile/1634576325152.jpg', '2023-08-31 11:16:46'),
(9, 'Mahesh Ghongade', 'maheshghongade644@gmail.com', 'mg@5656', 'studentprofile/1634576325152.jpg', '2023-08-31 11:17:24'),
(10, 'Study Buddy', 'studybuddy@gmail.com', '34', 'studentprofile/1620302353358.jpg', '2023-08-31 11:17:42'),
(11, 'Mahesh Ghongade', 'maheshghongade644@gmail.com', 'e56', 'studentprofile/', '2023-08-31 11:39:16'),
(12, 'user1', 'user1@gmail.com', '45', 'studentprofile/menu.png', '2023-08-31 13:48:53'),
(13, '', '', '', 'studentprofile/', '2023-08-31 16:13:49'),
(14, '', '', '', 'studentprofile/', '2023-09-01 02:13:50'),
(15, 'mahesh', 'user1@gmail.com', '4', 'studentprofile/', '2023-09-01 02:15:16'),
(16, 'mahesh', 'user1@gmail.com', '', 'studentprofile/', '2023-09-01 02:15:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
