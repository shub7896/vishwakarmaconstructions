-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 08:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `phone`, `password`, `created_at`) VALUES
(2, 'saurav', 'saurav@gmail.com', '9854758220', '$2y$10$MWOf6yi14xGwSYtNbkW3..OK5013aG9DXd8wxKvSicaTYpgO2Ev32', '2025-04-13 14:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`) VALUES
(1, 'testing', 'just trying to build suitable site', 'hd1.png'),
(2, 'testing 2', 'kfgfdgfdg gkdfbgfijdbgfd gfdgbfd gfnd dfgdfhbjijds fdsdsbfdsnfskf fdsbjfdsfksnfbsfsfksbfds fbsdf sfsdfdsfdjdsobfds dsfbdhvfdjsdbfdfbefs jhfnds ff sfbfns fsfisfbsnfs fsknfsknf  fksdbfsbf hv dsjf dsfbsd fdsk fsdf sdfsdjbfljd f dslj dsfnds f sf;snf;sn fdslkfs;nf', 'sadGuy.jpg'),
(3, 'testing 3', 'hbghfbg g dghfdbgdbf gjdfg sdbf sfjsd gsg jsbgjbs fs jg s gs ', 'moon_crypto_icon.png'),
(4, 'testing 4', 'jfgdg gdfbgfdg  fdugbfd gdfubgdsnfds fsdfbs fdsufudsufds  dsgds fdsg dshufvsbibaf as a ', 'sadHug.gif'),
(5, 'testing 5', 'nothing just checking ', 'pngwing.com.png'),
(6, 'testing 6', 'hfbfkjdn djbgbhbss nou jrbjgijr rj', 'hd2.png'),
(7, 'testing again', 'gfdngdgnfdnhfndhndfhn', 'rm1.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 1, 'testing blog', 'hiii its me monu', '2025-04-12 17:29:41'),
(2, 1, 'testing 2', 'hhhid sndkjnfnsdf fsdfbsbfshfohnk fibifbnds fsdkfjsnfsofhew rwendobf f sbfs oohrohewr ewiewb iwbwhrweon wefiwehrhoewrower ewiwerbeworijewr fewibrew riwerbweijrwe rweknriwbe oierhwr ewriwebirewhr ewrewurbiuew rwerewiurb ewrojrewubreqwejqwn honw bf fwf hrwenfkoewhrowbrw fopoinew robrbwe weoibewrjwoe rwo fkew iewbr ewbe', '2025-04-12 17:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'shub', 's@gmail.com', '5844758460', '$2y$10$8Ln3.uIXxER99x.8w0JYteg2amQTUpSBfThaGPBGg7OQGqw/j6g5q', '2025-04-13 14:57:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
