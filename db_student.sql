-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2025 at 07:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `name`, `email`, `phone`, `created_at`) VALUES
(1, 'Bill Gates', 'bill.gates@microsoft.com', '+123456789', '2025-12-21 18:13:06'),
(2, 'Elon Musk', 'elon.musk@spacex.com', '+111222333', '2025-12-21 18:13:06'),
(3, 'Will Smith', 'will.smith@gmail.com', '+111333555', '2025-12-21 18:13:06'),
(4, 'Bob Marley', 'bob@gmail.com', '+111555999', '2025-12-21 18:13:06'),
(5, 'Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', '+32447788993', '2025-12-21 18:13:06'),
(6, 'Boris Johnson', 'boris.johnson@gmail.com', '+4499778855', '2025-12-21 18:13:06'),
(7, 'stu1', 'stu1@com', '+324477889940', '2025-12-21 22:18:05'),
(8, 'Mark Zuckerberg', 'mark@meta.com', '+120255501', '2025-12-22 10:00:00'),
(9, 'Jeff Bezos', 'jeff@amazon.com', '+120255502', '2025-12-22 10:00:00'),
(10, 'Steve Jobs', 'steve@apple.com', '+120255503', '2025-12-22 10:00:00'),
(11, 'Sundar Pichai', 'sundar@google.com', '+120255504', '2025-12-22 10:00:00'),
(12, 'Satya Nadella', 'satya@microsoft.com', '+120255505', '2025-12-22 10:00:00'),
(13, 'Larry Page', 'larry@google.com', '+120255506', '2025-12-22 10:00:00'),
(14, 'Sergey Brin', 'sergey@google.com', '+120255507', '2025-12-22 10:00:00'),
(15, 'Jack Ma', 'jack@alibaba.com', '+8613800138000', '2025-12-22 10:00:00'),
(16, 'Mukesh Ambani', 'mukesh@reliance.com', '+919876543210', '2025-12-22 10:00:00'),
(17, 'Ratan Tata', 'ratan@tata.com', '+919123456789', '2025-12-22 10:00:00'),
(18, 'Shah Rukh Khan', 'srk@gmail.com', '+919999888777', '2025-12-22 10:00:00'),
(19, 'Aamir Khan', 'aamir@gmail.com', '+919888777666', '2025-12-22 10:00:00'),
(20, 'Salman Khan', 'salman@gmail.com', '+919777666555', '2025-12-22 10:00:00'),
(21, 'Virat Kohli', 'virat@gmail.com', '+919666555444', '2025-12-22 10:00:00'),
(22, 'MS Dhoni', 'dhoni@gmail.com', '+919555444333', '2025-12-22 10:00:00'),
(23, 'Sachin Tendulkar', 'sachin@gmail.com', '+919444333222', '2025-12-22 10:00:00'),
(24, 'Lionel Messi', 'messi@gmail.com', '+54911223344', '2025-12-22 10:00:00'),
(25, 'Neymar Jr', 'neymar@gmail.com', '+551199887766', '2025-12-22 10:00:00'),
(26, 'Kylian Mbappe', 'mbappe@gmail.com', '+33699887766', '2025-12-22 10:00:00'),
(27, 'Zinedine Zidane', 'zidane@gmail.com', '+33688776655', '2025-12-22 10:00:00'),
(28, 'David Beckham', 'beckham@gmail.com', '+447911123456', '2025-12-22 10:00:00'),
(29, 'Rohit Sharma', 'rohit@gmail.com', '+919333222111', '2025-12-22 10:00:00'),
(30, 'KL Rahul', 'rahul@gmail.com', '+919222111000', '2025-12-22 10:00:00'),
(31, 'Hardik Pandya', 'hardik@gmail.com', '+919111000999', '2025-12-22 10:00:00'),
(32, 'Shakib Al Hasan', 'shakib@gmail.com', '+8801712345678', '2025-12-22 10:00:00'),
(33, 'Tamim Iqbal', 'tamim@gmail.com', '+8801812345678', '2025-12-22 10:00:00'),
(34, 'Mashrafe Mortaza', 'mashrafe@gmail.com', '+8801912345678', '2025-12-22 10:00:00'),
(35, 'Mahmudullah Riyad', 'riyad@gmail.com', '+8801612345678', '2025-12-22 10:00:00'),
(36, 'Mushfiqur Rahim', 'mushfiq@gmail.com', '+8801512345678', '2025-12-22 10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
