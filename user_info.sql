-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 12:27 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `DOB` datetime(5) NOT NULL,
  `Designation` varchar(36) NOT NULL,
  `Gender` varchar(250) DEFAULT NULL,
  `phone` int(20) NOT NULL,
  `Hobbies` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`firstname`, `lastname`, `Email`, `DOB`, `Designation`, `Gender`, `phone`, `Hobbies`) VALUES
('gourav', 'Limited', 'akjja28@gmail.com', '2021-09-10 00:00:00.00000', 'webdeveloper', 'male', 2147483647, 'Singing'),
('ankit', 'Limited', 'akjja28@gmail.com', '2021-09-10 00:00:00.00000', 'webdeveloper', 'male', 99477204, 'Singing'),
('gourav', 'Limited', 'dfvg@gmail.com', '2021-09-10 00:00:00.00000', 'webdeveloper', 'female', 99477205, 'Dancing'),
('ankit', 'dhiman', 'akjja28@gmail.com', '2021-09-10 00:01:27.00000', 'webdeveloper', 'male', 99477205, 'Reading ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
