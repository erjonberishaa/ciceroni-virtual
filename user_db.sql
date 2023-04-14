-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 04:34 PM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Agon Meziu', 'an@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, 'Bimi Sylejmani', 'bsyl@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', 'user'),
(4, 'Erjon Demaku', 'edemaku@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'user'),
(10, 'Agim Krasniqi', 'ag@hotmail.com', '5531a5834816222280f20d1ef9e95f69', 'user'),
(11, 'Altin Gashi', 'am@hotmail.com', 'bcbdd9611d9287e0a1b5c256905bb8f0', 'user'),
(12, 'Anita Hoti', 'ah@gmail.com', '7cec85c75537840dad40251576e5b757', 'user'),
(13, 'Gentonita Fetahu', 'gento@hotmail.com', 'a2f064bb9f3961645673fbc15c8a6739', 'user'),
(15, 'Altin Morina', 'am@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(16, 'Endrit Gjokaj', 'egj@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(21, 'Erjon Berisha', 'erjon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(22, 'Bim Sylejmani', 'bim@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `user_id` int(11) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(1024) NOT NULL,
  `price` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`user_id`, `destination_name`, `description`, `image`, `price`) VALUES
(5, 'Prizren', 'Eshte qytet i bukur!', '', '50'),
(9, 'Sharr', 'Natyre e bukur!', '', '140'),
(10, 'Mirusha', 'Beatifukl', '', '123'),
(11, 'Vlore', 'Plazhe fantastike', '', '120'),
(12, 'Gjirokaster', 'Qytet antik!', '', '200'),
(13, 'Korce', 'Nje nder qytetet me te bukura te Shqiperise.', '', '250'),
(14, 'Kruja', 'Vende mahnitese!', '', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
