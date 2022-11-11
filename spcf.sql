-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 03:44 AM
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
-- Database: `spcf`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user_id`, `user_name`, `email`, `password`, `date`) VALUES
(11, 29043164052163, 'Sypth', 'alex.camaddo04@gmail.com', 'Kirigaya033x', '2022-11-10 11:24:37'),
(12, 40844659844, 'alex', 'alex@gmail.com', '123123', '2022-11-10 18:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `student_app`
--

CREATE TABLE `student_app` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_add` varchar(255) NOT NULL,
  `street_add_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postal_zip` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_app`
--

INSERT INTO `student_app` (`id`, `fname`, `lname`, `dob`, `gender`, `apply`, `year_level`, `contact_num`, `email`, `street_add`, `street_add_2`, `city`, `region`, `postal_zip`, `status`) VALUES
(30, 'Cecilia', 'Villajos', '2001-09-09', 'female', 'College', 'Grade 9', '', '', 'asdasgasgas', 'gasgasgasg', 'asgasgas', 'gasgasgas', 'gasgasg', 'Single'),
(31, '124124', '4124124', '1242-04-12', 'male', 'College', '2nd year', '09981845750', 'kled@gmail.com', '124124', '124124214', '12421214', '12421', '4214124', 'Single'),
(34, 'shinru', 'mitsu', '1242-03-12', 'male', 'College', '3rd Year', '09981845750', 'shinru@gmail.com', 'asdasf', 'asfgasgas', 'gasgasg', 'asgasga', 'sgasgas', 'Married'),
(36, 'Alex', 'Matsumoto', '1312-02-12', 'male', 'Grade School', '2nd years', '09981845750', 'junecamaddo@yahoo.com', 'asdasg', 'asgsagas', 'gasgasg', 'asg123', 'asfasg213', 'Single'),
(37, 'asd', 'asd', '0124-03-21', 'male', 'College', 'Grade 9', '09981845750', 'junecamaddo@yahoo.com', 'asdasdas', 'dasdasd', 'asdasdas', 'dasdasd', 'asdasdas', 'Single');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_app`
--
ALTER TABLE `student_app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_app`
--
ALTER TABLE `student_app`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
