-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rezervo`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `more_description` varchar(1500) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `more_description`, `image`) VALUES
(7, 'BEST BURGER', 'Enjoy our best Hamburger BIG M', '', '1610740826143395-pysnzzzleh-1593090551.jpg'),
(8, 'Main', 'fdfdsfsdfdsfsdfdsasdadasdasdas', 'dsasdasdadsadasasddsa', '1611006506eggs.jpg'),
(9, 'BEST BURGER', 'You\'ll Never Put A Better', 'dsasdasdadsadasasddsa', '1611007849pica.jpg'),
(10, 'Best Beef You Ever Tried', 'Mid made beef only for today!', 'Mid made beef only for today! bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla!!!!!!!!!', '1611010864beef.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `quote_id` int(11) NOT NULL,
  `quote` varchar(35) NOT NULL,
  `description` varchar(35) NOT NULL,
  `description2` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote`, `description`, `description2`) VALUES
(3, 'It\'s a Food Adventure!!!', 'You\'ll Never Put A Better!!!', 'Bit Of Food On Your Knife!!!'),
(4, 'It\'s a Finger Licking Adventure.', 'You will never put anything', 'Better in your mouth!'),
(5, 'It\'s a Finger Licking Adventure.', 'You have tasted anything', 'Like this before!!!'),
(6, 'It\'s a Finger Licking Adventure.', 'You have never tasted anything', 'Like this before!!!');

-- --------------------------------------------------------

--
-- Table structure for table `rezervimi`
--

CREATE TABLE `rezervimi` (
  `id` int(11) NOT NULL,
  `emri` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervimi`
--

INSERT INTO `rezervimi` (`id`, `emri`, `email`, `date`, `time`, `persona`) VALUES
(24, '04', '04@gmail.com', '2021-01-31', '13:00:00', 10),
(25, 'Merita', 'ab@email.com', '2022-01-21', '21:05:00', 4),
(26, 'Merita', 'test@test.com', '2021-01-21', '21:05:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `permission` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_id`, `username`, `name`, `surname`, `email`, `password`, `permission`) VALUES
(1, 'agonisbytyqi', 'agonis', 'bytyqi', 'agonisbytyqi@gmail.com', '$2y$10$tfF6ky88cMbSCtGxuMaTRepaWFul.3dobypskBRcMSR0RtkScz4sO', 1),
(186, 'test', 'Test', 'Test', 'test@gmail.com', '$2y$10$mur9B29/Q1qj2u0l0Vo5a.Z/emcoy7WJebTuTiZA4HryyaCXpu4K.', 0),
(187, 'agonisbytyqi', 'ADMIN', 'ADMIN', 'ab50615@ubt-uni.nett', '$2y$10$sZFYdCCYmfwR8X/2/SePZejFJR5MRnoLIy1NaZLLx393ySNLe0RJa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sub_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sub_id`, `email`) VALUES
(6, 'bs47508@ubt-uni.net'),
(7, 'butrint@gmail.comn'),
(8, 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `rezervimi`
--
ALTER TABLE `rezervimi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rezervimi`
--
ALTER TABLE `rezervimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
