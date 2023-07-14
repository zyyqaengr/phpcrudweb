-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 03:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(254) NOT NULL,
  `firstname` varchar(254) NOT NULL,
  `lastname` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date_created`) VALUES
(2, 'Klaus', 'Mikaelson', 'klausmikaelson@mail', '0000-00-00'),
(5, 'helloluv', 'sfs', 'sdjf@sdgsg', '0000-00-00'),
(22, 'Nina', 'Dobrev', 'nina@mail', '0000-00-00'),
(24, 'Miming', 'Smith', 'ming@smithcute', '0000-00-00'),
(25, 'Elijah', 'Mikaelson', 'kasjdak@sdfsd', '0000-00-00'),
(26, 'Lucas', 'Grabiel', 'lucas@gmail.com', '0000-00-00'),
(27, 'Ashley', 'Tisdale', 'ashley@pink', '0000-00-00'),
(28, 'Troy', 'Lee', 'troy@lee', '0000-00-00'),
(29, 'ad', 'sdfkj', 'sdfkjs@dsfg', '0000-00-00'),
(30, '', 'hehehe', 'asda@sdfsf', '0000-00-00'),
(31, '', 'asdad', 'asd@sf', '0000-00-00'),
(32, 'asd', 'ads', 'asd@asd', '0000-00-00'),
(33, 'asda', 'asdad', 'asd@af', '0000-00-00'),
(34, 'Hailey', 'Lee', 'hailey@truemail', '2018-03-29'),
(35, 'Hailey', 'Lee', 'hailey@truemail', '2018-03-29'),
(36, 'asd', 'asd', 'ad@asd', '2018-03-29'),
(37, 'asd', 'asd', 'ad@asd', '2018-03-29'),
(38, 'asd', 'asd', 'ad@asd', '2018-03-29'),
(39, 'asdasd', 'adasd', 'ad@asd', '2018-03-29'),
(40, 'asdasd', 'adasd', 'ad@asd', '2018-03-29'),
(41, 'asdasd', 'adasd', 'ad@asd', '2018-03-29'),
(42, 'asdasd', 'adasd', 'ad@asd', '2018-03-29'),
(43, 'asdasd', 'adasd', 'ad@asd', '2018-03-29'),
(44, '', '', '', '2018-03-29'),
(45, '', '', '', '2018-03-29'),
(46, '', 'asd', 'asda@asds', '2018-03-29'),
(47, '', 'sdf,n,m', 'sdmf@sdf', '2018-03-29'),
(48, '', 'sdf,n,m', 'sdmf@sdf', '2018-03-29'),
(49, '', 'sdf,n,m', 'sdmf@sdf', '2018-03-29'),
(50, '', 'ad', 'asd@sf', '2018-03-29'),
(51, '', 'test', 'test@fsf', '2018-03-29'),
(52, 'meg', 'meg', 'meg@mail', '2018-03-29'),
(53, 'meg', 'meg', 'meg@mail', '2018-03-29'),
(54, 'Lovelyn', 'Lebrado', 'lovelyn@mail', '2018-03-29'),
(55, 'Lovelyn', 'Lebrado', 'lovelyn@mail', '2018-03-29'),
(56, 'Lovelyn', 'Lebrado', 'lovelyn@mail', '2018-03-29'),
(57, 'John', 'Doe', 'johndoe@mail.com', '2018-04-02'),
(58, 'para', 'more', 'paramore@paramore', '2018-04-02'),
(59, 'Celine', 'Dion', 'celine@mail', '2018-04-02'),
(60, 'ftgyhh', 'gsgdgdg', 'wgwgw@gsgs', '2018-04-02'),
(61, 'jhjhbjvhgvhg', 'gvhgvh', 'werse@jjsjs', '2018-04-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
