-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2024 at 12:38 PM
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
-- Database: `fmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_category`
--

CREATE TABLE `child_category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_category`
--

INSERT INTO `child_category` (`id`, `name`, `parent_id`, `post`, `time`) VALUES
(18, 'Cricket', '17', '4', '2024-02-19 17:21:34'),
(19, 'Football', '17', '1', '2024-02-19 17:21:46'),
(20, 'Ultra Recovery', '18', '2', '2024-02-19 17:25:46'),
(21, 'Fish Oil', '18', '1', '2024-02-19 17:26:07'),
(23, 'Red', '19', '1', '2024-02-19 17:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `name`, `time`) VALUES
(4, 'Featured', '2024-02-20 13:12:35'),
(5, 'Hot Deals', '2024-02-20 13:12:49'),
(6, 'Best Seller', '2024-02-20 13:12:56'),
(7, 'New Arrivals', '2024-02-20 13:24:40'),
(8, 'Most View', '2024-02-20 13:25:24'),
(9, 'Latest Products', '2024-02-20 13:25:38'),
(10, 'Regular Products', '2024-02-20 13:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `name`, `post`, `time`) VALUES
(17, 'Sports', '4', '2024-02-19 17:17:45'),
(18, 'Markovit', '2', '2024-02-19 17:21:11'),
(19, 'Colors', '1', '2024-02-19 17:21:25'),
(20, 'Clothing', '1', '2024-02-19 17:30:26'),
(21, 'Shoes', '1', '2024-02-19 17:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `main_cat` varchar(255) NOT NULL,
  `child_cat` varchar(255) NOT NULL,
  `deals` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `price`, `main_cat`, `child_cat`, `deals`, `image`, `date`, `author`, `time`) VALUES
(1, 'sdfasdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '5', '1708434057-1.png', '20 Feb 2024', 'A-M-M', '2024-02-20 19:00:57'),
(2, 'Ultra Recovery', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '3000', '18', '20', '10', '1708528316-masud.jpg', '21 Feb 2024', 'A-M-M', '2024-02-21 21:11:56'),
(3, 'SG Bat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '9', '1708580009-bat.png', '22 Feb 2024', 'A-M-M', '2024-02-22 11:33:29'),
(4, 'sdfasdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '5', '1708434057-1.png', '20 Feb 2024', 'A-M-M', '2024-02-20 19:00:57'),
(5, 'Ultra Recovery', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '3000', '18', '20', '10', '1708528316-masud.jpg', '21 Feb 2024', 'A-M-M', '2024-02-21 21:11:56'),
(6, 'SG Bat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '9', '1708580009-bat.png', '22 Feb 2024', 'A-M-M', '2024-02-22 11:33:29'),
(7, 'sdfasdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '5', '1708434057-1.png', '20 Feb 2024', 'A-M-M', '2024-02-20 19:00:57'),
(8, 'SG Bat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '9', '1708580009-bat.png', '22 Feb 2024', 'A-M-M', '2024-02-22 11:33:29'),
(9, 'sdfasdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '5', '1708434057-1.png', '20 Feb 2024', 'A-M-M', '2024-02-20 19:00:57'),
(10, 'SG Bat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '18000', '17', '18', '9', '1708580009-bat.png', '22 Feb 2024', 'A-M-M', '2024-02-22 11:33:29'),
(11, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(12, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(13, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(14, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(15, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(16, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(17, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(18, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26'),
(19, 'Yellow Ball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '700', '17', '18', '4', '1708596686-ball yellow.png', '22 Feb 2024', 'A-M-M', '2024-02-22 16:11:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_category`
--
ALTER TABLE `child_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_category`
--
ALTER TABLE `child_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
