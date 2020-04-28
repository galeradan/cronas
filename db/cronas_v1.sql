-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 08:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cronas_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `session_id`, `question_id`, `choice_id`, `timestamp`) VALUES
(1, 'd7ks8mqn0vqasvd55ho7dvnf47', 1, 1, '2020-04-27 14:26:47'),
(2, 'd7ks8mqn0vqasvd55ho7dvnf47', 2, 3, '2020-04-27 14:27:27'),
(3, 'vaf52138le1hgqq6tqs0oj3tgt', 1, 2, '2020-04-27 15:08:05'),
(4, 'vaf52138le1hgqq6tqs0oj3tgt', 3, 5, '2020-04-27 15:08:06'),
(5, 'qjnlvd3eappt0bptssa57ni7f7', 1, 1, '2020-04-27 15:13:33'),
(6, 'qjnlvd3eappt0bptssa57ni7f7', 2, 3, '2020-04-27 15:13:35'),
(7, 'japgid6337417t7h3li5ulr390', 1, 1, '2020-04-27 15:41:22'),
(8, 'japgid6337417t7h3li5ulr390', 2, 3, '2020-04-27 15:41:24'),
(9, 'u8v5ou3fvs0j3k2fivde4vqldv', 1, 2, '2020-04-27 15:49:48'),
(10, 'u8v5ou3fvs0j3k2fivde4vqldv', 3, 6, '2020-04-27 15:49:51'),
(11, 'u8v5ou3fvs0j3k2fivde4vqldv', 2, 3, '2020-04-27 15:49:57'),
(12, '53ilpn2obic551rrte0utc4c19', 1, 1, '2020-04-27 15:51:31'),
(13, '53ilpn2obic551rrte0utc4c19', 2, 3, '2020-04-27 15:51:32'),
(14, '2ubvf0qbdjpr2e105mn2hp7r7t', 1, 1, '2020-04-27 16:16:54'),
(15, '2ubvf0qbdjpr2e105mn2hp7r7t', 2, 4, '2020-04-27 16:16:56'),
(16, '7h0unmshktnbp8jhood8menqlr', 1, 2, '2020-04-27 17:12:20'),
(17, '7h0unmshktnbp8jhood8menqlr', 3, 5, '2020-04-27 17:12:23'),
(18, 'ut150kn27b0d46gbrj13mcec0o', 1, 1, '2020-04-27 17:56:59'),
(19, 'ut150kn27b0d46gbrj13mcec0o', 2, 4, '2020-04-27 17:57:08'),
(20, 'qopt4ojd1lnhvn498ohvpfojj2', 1, 2, '2020-04-27 18:42:39'),
(21, 'qopt4ojd1lnhvn498ohvpfojj2', 3, 5, '2020-04-27 18:42:43'),
(22, 'hf4uuebutq30nemsbrq3s905jq', 1, 2, '2020-04-27 19:20:24'),
(23, 'hf4uuebutq30nemsbrq3s905jq', 3, 5, '2020-04-27 19:20:28'),
(24, '42271n4jpsmopp34c1u4jfoqcp', 1, 1, '2020-04-27 19:46:08'),
(25, '42271n4jpsmopp34c1u4jfoqcp', 2, 3, '2020-04-27 19:46:10'),
(26, 'e50m07egetuilabgcm7erdp0e1', 1, 1, '2020-04-28 08:20:09'),
(27, 'e50m07egetuilabgcm7erdp0e1', 2, 3, '2020-04-28 08:20:11'),
(28, 'c96gcdr0ace12670hv8lug14jh', 1, 2, '2020-04-28 08:29:04'),
(29, 'c96gcdr0ace12670hv8lug14jh', 3, 5, '2020-04-28 08:29:09'),
(30, '1qer8dn1kbg4dqoa6pf3c50f91', 1, 2, '2020-04-28 09:32:20'),
(31, '1qer8dn1kbg4dqoa6pf3c50f91', 3, 5, '2020-04-28 09:32:25'),
(32, 'i0vjkudk38igr5iqhj9p3rtsjb', 1, 2, '2020-04-28 10:24:27'),
(33, 'i0vjkudk38igr5iqhj9p3rtsjb', 3, 5, '2020-04-28 10:24:30'),
(34, 'af4pef42fckes480v9k05pdlds', 1, 2, '2020-04-28 10:25:36'),
(35, 'af4pef42fckes480v9k05pdlds', 3, 5, '2020-04-28 10:25:38'),
(38, 'pod7708he1l8oo4rr90rbfrfkm', 1, 2, '2020-04-28 12:48:51'),
(39, 'pod7708he1l8oo4rr90rbfrfkm', 3, 5, '2020-04-28 12:48:54'),
(40, 'rjsmftjofc3jeg33jrt53ni760', 1, 2, '2020-04-28 12:49:33'),
(41, 'rjsmftjofc3jeg33jrt53ni760', 3, 5, '2020-04-28 12:49:34'),
(42, 'prvntrrhaoldtt5loojumhtrr0', 1, 2, '2020-04-28 13:12:05'),
(43, 'prvntrrhaoldtt5loojumhtrr0', 3, 6, '2020-04-28 13:12:15'),
(44, 'prvntrrhaoldtt5loojumhtrr0', 2, 3, '2020-04-28 13:12:20'),
(45, 'mmnokvdhlo6rnnq6s4cnj30cbg', 1, 1, '2020-04-28 13:53:30'),
(46, 'mmnokvdhlo6rnnq6s4cnj30cbg', 2, 4, '2020-04-28 13:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `next_sequence` int(11) NOT NULL,
  `last_question` tinyint(1) NOT NULL,
  `status_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `choice`, `next_sequence`, `last_question`, `status_id`, `question_id`) VALUES
(1, 'Yes', 2, 0, 2, 1),
(2, 'No', 3, 0, 3, 1),
(3, 'Yes', 3, 1, 1, 2),
(4, 'No', 3, 1, 2, 2),
(5, 'I dont have any exposure to someone with COVID-19', 3, 1, 3, 3),
(6, 'Providing direct care for COVID-19 patient', 2, 0, 2, 3),
(7, 'Working together or staying in the same close environmnent of a COVID-19', 2, 0, 2, 3),
(8, 'Traveling together with COVID-19 patient in any kind of conveyance', 2, 0, 2, 3),
(9, 'Living in the same household as a COVID-19 patient', 2, 0, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `question` text NOT NULL,
  `set_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `sequence`, `question`, `set_id`) VALUES
(1, 1, 'Did you travel internationally or areas with enchanced community quarantine last 14 days?', 1),
(2, 2, 'Do you have fever or any respiratory illnesses?', 1),
(3, 3, 'Do you have any exposure to a possible COVID case?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Patient'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sets`
--

INSERT INTO `sets` (`id`, `title`) VALUES
(1, 'For Quarantine Officers');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `definition` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `value` int(11) NOT NULL,
  `set_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `term`, `definition`, `recommendation`, `value`, `set_id`) VALUES
(1, 'PUI', 'Person Under Investigation', 'For hospital admission and management', 3, 1),
(2, 'PUM', 'Person Under Monitoring', 'Home quarantine: monitored self-quarantine for 14 days', 2, 1),
(3, 'NOT PUI nor PUM', 'Not Person Under Investigation nor Monitoring', 'Practice and observe general preventive measures', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `session_id`, `status_id`, `user_id`, `timestamp`) VALUES
(1, 'd7ks8mqn0vqasvd55ho7dvnf47', 1, 1, '2020-04-24 10:22:04'),
(2, 'vaf52138le1hgqq6tqs0oj3tgt', 3, 2, '2020-04-25 07:08:06'),
(3, 'qjnlvd3eappt0bptssa57ni7f7', 1, 2, '2020-04-26 07:13:35'),
(4, 'japgid6337417t7h3li5ulr390', 1, 2, '2020-04-27 07:41:24'),
(5, 'u8v5ou3fvs0j3k2fivde4vqldv', 1, 1, '2020-04-26 07:49:57'),
(6, '53ilpn2obic551rrte0utc4c19', 1, 1, '2020-04-26 10:23:12'),
(7, '2ubvf0qbdjpr2e105mn2hp7r7t', 2, 1, '2020-04-27 08:16:56'),
(8, '7h0unmshktnbp8jhood8menqlr', 3, 3, '2020-04-27 09:12:23'),
(9, 'ut150kn27b0d46gbrj13mcec0o', 2, 1, '2020-04-27 09:57:09'),
(10, 'qopt4ojd1lnhvn498ohvpfojj2', 3, 1, '2020-04-27 10:42:43'),
(11, 'hf4uuebutq30nemsbrq3s905jq', 3, 1, '2020-04-27 11:20:28'),
(12, '42271n4jpsmopp34c1u4jfoqcp', 1, 3, '2020-04-27 11:46:11'),
(13, 'e50m07egetuilabgcm7erdp0e1', 1, 1, '2020-04-28 00:20:11'),
(14, 'c96gcdr0ace12670hv8lug14jh', 3, 3, '2020-04-28 00:29:09'),
(15, '1qer8dn1kbg4dqoa6pf3c50f91', 3, 1, '2020-04-28 01:32:25'),
(16, 'i0vjkudk38igr5iqhj9p3rtsjb', 3, 1, '2020-04-28 02:24:30'),
(17, 'af4pef42fckes480v9k05pdlds', 3, 1, '2020-04-28 02:25:38'),
(21, 'pod7708he1l8oo4rr90rbfrfkm', 3, 5, '2020-04-28 04:48:54'),
(22, 'rjsmftjofc3jeg33jrt53ni760', 3, 5, '2020-04-28 04:49:34'),
(23, 'prvntrrhaoldtt5loojumhtrr0', 1, 1, '2020-04-28 05:12:20'),
(24, 'mmnokvdhlo6rnnq6s4cnj30cbg', 2, 1, '2020-04-28 05:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Dan', 'Galera', 25, 'sample@gmail.com', 'dg07', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 1),
(2, 'Lucas', 'Galera', 23, 'xample@gmail.com', 'lucas08', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 2),
(3, 'Gezza', 'Gundran', 24, 'gizza@gmail.com', 'may05', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 2),
(4, 'Tammy', 'Galera', 20, 'tammy@gmail.com', 'tammy123', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 2),
(5, 'Domingo', 'Demi', 23, 'samp@gmail.com', 'pass08', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id_fk` (`status_id`),
  ADD KEY `question_id_fk` (`question_id`),
  ADD KEY `next_question_id_fk` (`next_sequence`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_id_fk` (`set_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set2_id_fk` (`set_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id_fk` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sets`
--
ALTER TABLE `sets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `next_question_id_fk` FOREIGN KEY (`next_sequence`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `status_id_fk` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `set_id_fk` FOREIGN KEY (`set_id`) REFERENCES `sets` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `set2_id_fk` FOREIGN KEY (`set_id`) REFERENCES `sets` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
