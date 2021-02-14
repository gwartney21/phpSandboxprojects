-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2021 at 11:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `category`) VALUES
(1, 'Project 1 Test', 'Billable'),
(2, 'Project 2 Test', 'Personal'),
(3, 'Project 3 Test', 'Charity'),
(4, 'Test Project', 'Personal'),
(5, 'Test Project', 'Personal'),
(6, 'Test Project', 'Personal'),
(7, 'GAMING', 'Charity'),
(8, 'Test Project2', 'Personal'),
(9, 'redirect', 'Billable'),
(10, 'Test Project', 'Personal'),
(11, 'Test Project2', 'Charity'),
(12, 'Test Project', 'Personal'),
(13, 'Screw this project', 'Charity'),
(14, 'Test Project2', 'Charity'),
(15, 'Test Project2', 'Charity'),
(16, 'Test Project2', 'Charity'),
(17, 'Test Project', 'Charity'),
(18, 'Test Project', 'Charity'),
(19, 'Test Project', 'Charity'),
(20, 'Test Project', 'Charity'),
(21, 'GAMING', 'Billable'),
(22, 'GAMING', 'Billable'),
(23, 'Test Project', 'Billable'),
(24, 'redirect', 'Charity'),
(25, 'Test Project', 'Charity'),
(26, 'GAMING', 'Personal'),
(27, 'gameproject goblin king', 'Charity'),
(28, 'goblin king', 'Billable'),
(29, 'redirect', 'Charity'),
(30, 'redirect', 'Charity'),
(31, 'GAMING2222222222222', 'Charity'),
(32, 'GAMING2222222222222', 'Charity'),
(33, 'goblin king22222', 'Charity'),
(34, 'goblin king22222', 'Charity'),
(35, 'HEKLO', 'Billable'),
(36, 'redirect', 'Personal'),
(37, 'testAgain', 'Personal'),
(38, 'teateasdfasdfasdfasd', 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `project_id`, `title`, `date`, `time`) VALUES
(1, 1, 'Task 1 Test', '7', 90),
(2, 1, 'Task 2 Test', '7', 60),
(3, 2, 'Task 3 Test', '8', 120),
(4, 2, 'Task 4 Test', '8', 30),
(5, 7, 'Test Project', '06/30/221', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
