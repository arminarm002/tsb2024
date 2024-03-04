-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 10:33 AM
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
-- Database: `db_spc2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_approve`
--

CREATE TABLE `tb_approve` (
  `ap_id` int(11) NOT NULL,
  `ap_date` date NOT NULL,
  `ap_by` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_meal`
--

CREATE TABLE `tb_meal` (
  `meal_id` int(11) NOT NULL,
  `meal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_meal`
--

INSERT INTO `tb_meal` (`meal_id`, `meal_name`) VALUES
(1, 'General Food'),
(2, 'Muslim Food'),
(3, 'Vegetarian Food');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pay`
--

CREATE TABLE `tb_pay` (
  `id` int(11) NOT NULL,
  `pay_name` varchar(255) NOT NULL,
  `b_amount` varchar(255) NOT NULL,
  `a_amount` varchar(255) NOT NULL,
  `b_price` int(11) NOT NULL,
  `a_price` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_pay`
--

INSERT INTO `tb_pay` (`id`, `pay_name`, `b_amount`, `a_amount`, `b_price`, `a_price`, `pay_id`) VALUES
(1, 'General audience', '5,000 Bath', '6,000 Bath', 5000, 6000, 1),
(2, 'Permanent Member of Thai Physics Society', '4,000 Bath per Abstract', '5,000 Bath per Abstract', 4000, 5000, 2),
(3, 'Non Member of Thai Physics Society', '4,000 Bath per Abstract', '5,000 Bath per Abstract', 4000, 5000, 3),
(4, 'Student', '3,000 Bath per Abstract', '4,000 Bath per Abstract', 3000, 4000, 4),
(5, 'Accompany person', '3,000 Bath', '4,000 Bath', 3000, 4000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_setdate`
--

CREATE TABLE `tb_setdate` (
  `id` int(11) NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_setdate`
--

INSERT INTO `tb_setdate` (`id`, `date_end`) VALUES
(1, '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slip`
--

CREATE TABLE `tb_slip` (
  `slip_id` int(11) NOT NULL,
  `slip_date` date NOT NULL,
  `slip_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_slip`
--

INSERT INTO `tb_slip` (`slip_id`, `slip_date`, `slip_name`, `email`) VALUES
(1, '2024-01-29', '20240129541849356.jpg', 'a1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`type_id`, `type_name`) VALUES
(1, 'Thai Physics Society Committee'),
(2, 'Invited Speaker'),
(3, 'Oral Presenter'),
(4, 'Poster Presenter'),
(5, 'Participant'),
(6, 'Accompany Person');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `extrameal` varchar(255) NOT NULL,
  `food` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `approve` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `password`, `email`, `title`, `firstname`, `lastname`, `company`, `career`, `address`, `country`, `telephone`, `fax`, `extrameal`, `food`, `type`, `pay_id`, `receipt`, `amount`, `total_price`, `role`, `profile`, `approve`, `message`) VALUES
(1, '$2y$10$K/hFakb9Jyhsu8rgOsiC.OZkCS7ajDX5mSWSX9T1yeHOoXxtNkwsO', 'a1@gmail.com', 'Mr.', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'General Food', '', 'Thai Physics Society Committee', 1, 'a', 1, 5000, 'user', '202401291710439022.jpg', 'wait', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_approve`
--
ALTER TABLE `tb_approve`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `tb_meal`
--
ALTER TABLE `tb_meal`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `tb_pay`
--
ALTER TABLE `tb_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_setdate`
--
ALTER TABLE `tb_setdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slip`
--
ALTER TABLE `tb_slip`
  ADD PRIMARY KEY (`slip_id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_approve`
--
ALTER TABLE `tb_approve`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_meal`
--
ALTER TABLE `tb_meal`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pay`
--
ALTER TABLE `tb_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_setdate`
--
ALTER TABLE `tb_setdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slip`
--
ALTER TABLE `tb_slip`
  MODIFY `slip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
