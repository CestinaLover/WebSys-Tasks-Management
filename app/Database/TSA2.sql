-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql110.infinityfree.com
-- Generation Time: Oct 06, 2026 at 10:34 AM
-- Server version: 11.4.13-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_42955045_tasksdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`, `is_archived`) VALUES
(1, 'Finish project documentation', 'pending', '2026-09-19', '2026-09-19 08:00:00', 0),
(2, 'Review submitted tasks', 'pending', '2026-09-19', '2026-09-19 09:00:00', 0),
(3, 'Update task dashboard', 'completed', '2026-09-19', '2026-09-19 10:00:00', 0),
(4, 'Check system errors', 'pending', '2026-09-18', '2026-09-18 08:30:00', 0),
(5, 'Prepare weekly report', 'completed', '2026-09-18', '2026-09-18 11:00:00', 0),
(6, 'Backup project files', 'pending', '2026-09-17', '2026-09-17 14:00:00', 0),
(7, 'Review team schedule', 'completed', '2026-09-17', '2026-09-17 15:00:00', 0),
(8, 'Plan next week tasks', 'pending', '2026-09-17', '2026-09-17 16:00:00', 0),
(9, 'testing again', 'completed', '2026-10-07', '2026-10-06 14:30:51', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
