-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 07:38 PM
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
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `user_id` int(100) NOT NULL,
  `username` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`user_id`, `username`, `email`, `password`, `date`) VALUES
(1, 'asd', 'smithchao0513@gmail.com', '4297f44b13955235245b2497399d7a93', '2023-10-07'),
(2, 'qwe', 'adsd@gmail.com', '4297f44b13955235245b2497399d7a93', '2023-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(100) NOT NULL,
  `voting_amount` int(100) NOT NULL,
  `description` text NOT NULL,
  `candidate_name` char(255) NOT NULL,
  `voting_count` int(100) NOT NULL,
  `photo` char(255) NOT NULL,
  `product_id` char(255) NOT NULL,
  `price_id` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `voting_amount`, `description`, `candidate_name`, `voting_count`, `photo`, `product_id`, `price_id`) VALUES
(1, 2400, 'Description', 'Ralph EI halaby', 1, '1696492961_2.jpeg', 'prod_OlFIJRm0Ypd8Yj', 'price_1NxinzKFUyNj0BfH0uqUOR2F'),
(2, 2500, 'Description', 'Ali Ahmad', 1, '1696492991_1.jpeg', 'prod_OlFJ0cA5jcQnpg', 'price_1NxioTKFUyNj0BfHe49ek8ZC'),
(3, 4600, 'Description', 'Ali Mcheik', 1, '1696493018_12.jpeg', 'prod_OlFJj9IsFNv5Yu', 'price_1NxiovKFUyNj0BfHEgKeAB3E'),
(4, 3600, 'Description', 'Monssef Haidar', 1, '1696493055_9.jpeg', 'prod_OlFKEnVZhQ7vol', 'price_1NxipVKFUyNj0BfHqJaR5R06'),
(5, 5600, 'Description', 'Mario EI Hajj', 1, '1696493079_7.jpeg', 'prod_OlFKezKY0R0YX4', 'price_1NxiptKFUyNj0BfHzoKQy8Q1'),
(6, 2400, 'Description', 'Peter Boueiry', 1, '1696493101_6.jpeg', 'prod_OlFKPZMx727otF', 'price_1NxiqFKFUyNj0BfHXN9rB7uU'),
(7, 2500, 'Description', 'Fouad AI Zein', 1, '1696493122_3.jpeg', 'prod_OlFLRLPCzuDMiO', 'price_1NxiqaKFUyNj0BfH5G4NCJEI'),
(8, 4500, 'Description', 'Joseph Bou Rached', 1, '1696493139_5.jpeg', 'prod_OlFLup7k6Tubst', 'price_1NxiqrKFUyNj0BfH7VAiIWSD'),
(9, 3400, 'Description', 'Abd EI Wahab Semaan', 1, '1696493162_14.jpeg', 'prod_OlFLSsqzyYMCKH', 'price_1NxirEKFUyNj0BfHwhLIVKW2'),
(10, 2400, 'Description', 'Maroun Matar', 1, '1696493184_11.jpeg', 'prod_OlFMiJzPnKwYnh', 'price_1NxiraKFUyNj0BfHwUUFIBvR'),
(11, 3500, 'Description', 'Khaled Kreidieh', 1, '1696493203_10.jpeg', 'prod_OlFMaNMl8Db5pM', 'price_1NxirtKFUyNj0BfH4Mr8XYTj'),
(12, 4600, 'Description', 'Alaa saadief', 1, '1696493226_13.jpeg', 'prod_OlFMcnUCQCZBn5', 'price_1NxisGKFUyNj0BfH0jOpHmBy'),
(13, 3200, 'Description', 'Michael FajIoun', 1, '1696493246_8.jpeg', 'prod_OlFNQtSQEXgw2e', 'price_1NxisaKFUyNj0BfHwIPd6buF'),
(14, 2500, 'Description', 'Mohamad Awada', 1, '1696493268_4.jpeg', 'prod_OlFNNPQMjJFlZf', 'price_1NxisxKFUyNj0BfHGgYWlqQH'),
(15, 3200, 'Description', 'Wissam Slim', 1, '1696493285_17.jpeg', 'prod_OlFNz8fWVSyVWH', 'price_1NxitDKFUyNj0BfHYJOvXS01'),
(16, 2100, 'Description', 'Talaat Daher', 1, '1696493301_16.jpeg', 'prod_OlFOZwHWLeOI9C', 'price_1NxitTKFUyNj0BfHMFFcEt5A'),
(17, 2500, 'Description', 'adfad', 0, '1696573065_image.jpeg', 'prod_OlapaWGyD0TKxk', 'price_1Ny3e1KFUyNj0BfH3YMO5SFx'),
(18, 2500, 'Description', 'adfad', 0, '1696573066_image.jpeg', 'prod_OlapVorig5bLjH', 'price_1Ny3e2KFUyNj0BfHUd4iyn6J'),
(19, 4500, 'description', 'Ralph EI halaby', 0, '1696573144_1696493079_7.jpeg', 'prod_OlaqAq15XQAqVp', 'price_1Ny3fIKFUyNj0BfHuymOXzFv'),
(20, 3200, 'des', 'Ali Ahmad', 0, '1696573186_1696493226_13.jpeg', 'prod_OlarxdE4tFVApp', 'price_1Ny3fxKFUyNj0BfHtUe3ty3K'),
(21, 4600, 'des', 'Ali Mcheik', 0, '1696573608_1696493203_10.jpeg', 'prod_OlayymlZx0PkFz', 'price_1Ny3mmKFUyNj0BfH28DetpWd'),
(22, 2300, 'des', 'Joseph Bou Rached', 0, '1696573625_1696493162_14.jpeg', 'prod_OlazLFjTD1ODfT', 'price_1Ny3n3KFUyNj0BfHUozz5QiB'),
(23, 4600, 'des', 'Ralph EI halaby', 0, '1696573644_1696573144_1696493079_7.jpeg', 'prod_OlazwWk3Gz39ye', 'price_1Ny3nMKFUyNj0BfH7B5ITd6g');

-- --------------------------------------------------------

--
-- Table structure for table `total_vote`
--

CREATE TABLE `total_vote` (
  `candidate_id` int(255) NOT NULL,
  `candidate_name` char(255) NOT NULL,
  `total_vote` int(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_vote`
--

INSERT INTO `total_vote` (`candidate_id`, `candidate_name`, `total_vote`, `date`) VALUES
(1, 'Ralph EI halaby', 5, '2023-10-05 13:03:38.362318'),
(4, 'Ali Ahmad', 6, '2023-10-05 13:03:38.362318'),
(5, 'Ali Mcheik', 5, '2023-10-05 13:03:38.362318'),
(6, 'Mossef Haidar', 4, '2023-10-05 13:03:38.362318'),
(7, 'Mario EI Hajj', 5, '2023-10-05 13:03:38.362318'),
(8, 'adfad', 0, '2023-10-05 23:17:45.238043'),
(9, 'adfad', 4, '2023-10-05 23:17:46.822848'),
(10, 'Ralph EI halaby', 0, '2023-10-05 23:19:04.791341'),
(11, 'Ali Ahmad', 0, '2023-10-05 23:19:46.277143'),
(12, 'Ali Mcheik', 0, '2023-10-05 23:26:48.734628'),
(13, 'Joseph Bou Rached', 4, '2023-10-05 23:27:05.809427'),
(14, 'Ralph EI halaby', 0, '2023-10-05 23:27:24.263280');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `voter_id` int(100) NOT NULL,
  `candidate_name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `price_id` char(100) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voter_id`, `candidate_name`, `email`, `price_id`, `date`) VALUES
(1, 'Ralph EI halaby', 'isaqukon@linux0.net', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 12:09:16.080389'),
(2, 'Ralph EI halaby', 'vic452700@gmail.com', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 12:09:16.080389'),
(3, 'Ralph EI halaby', 'vic452700@gmail.com', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 12:09:16.080389'),
(4, 'Ralph EI halaby', 'isaqukon@linux0.net', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 12:10:59.932284'),
(5, 'Ali Mcheik', 'smithchao0513@gmail.com', 'price_1NxiovKFUyNj0BfHEgKeAB3E', '2023-10-05 12:50:18.937941'),
(6, 'Peter Boueiry', 'vic452700@gmail.com', 'price_1NxiqFKFUyNj0BfHXN9rB7uU', '2023-10-05 13:38:54.272995'),
(7, 'Monssef Haidar', 'vic452700@gmail.com', 'price_1NxipVKFUyNj0BfHqJaR5R06', '2023-10-05 14:40:56.324477'),
(8, 'Ali Mcheik', 'vic452700@gmail.com', 'price_1NxiovKFUyNj0BfHEgKeAB3E', '2023-10-05 14:42:33.634523'),
(9, 'Ali Ahmad', 'vic452700@gmail.com', 'price_1NxioTKFUyNj0BfHe49ek8ZC', '2023-10-05 14:45:55.859038'),
(10, 'Ralph EI halaby', 'captivity_coping790@simplelogin.com', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 14:47:08.252660'),
(11, 'Ralph EI halaby', 'smithchao0513@gmail.com', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-05 14:51:01.540838'),
(12, 'Mario EI Hajj', 'isaqukon@linux0.net', 'price_1NxiptKFUyNj0BfHzoKQy8Q1', '2023-10-05 15:38:37.630540'),
(13, 'Joseph Bou Rached', 'isaqukon@linux0.net', 'price_1NxiqrKFUyNj0BfH7VAiIWSD', '2023-10-05 15:50:34.419936'),
(14, 'Ali Ahmad', 'isaqukon@linux0.net', 'price_1NxioTKFUyNj0BfHe49ek8ZC', '2023-10-07 06:05:49.374286'),
(15, 'Ralph EI halaby', 'isaqukon@linux0.net', 'price_1NxinzKFUyNj0BfH0uqUOR2F', '2023-10-07 08:41:45.653992'),
(16, 'Ali Ahmad', 'smithchao0513@gmail.com', 'price_1NxioTKFUyNj0BfHe49ek8ZC', '2023-10-07 08:53:38.888652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `total_vote`
--
ALTER TABLE `total_vote`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `total_vote`
--
ALTER TABLE `total_vote`
  MODIFY `candidate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `voter_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
