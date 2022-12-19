-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 06:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `mua_hang`
--

CREATE TABLE `mua_hang` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` tinyint(4) NOT NULL,
  `hash` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prevhash` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mua_hang`
--

INSERT INTO `mua_hang` (`username`, `id`, `hash`, `prevhash`, `time`) VALUES
('admin', 1, '9cbfb9310c6b37612d3f7403067a8ad1', '0', '2022-12-16 04:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `price`, `img`) VALUES
(1, 'Cún con', '200.000 VND', 'upload/img/dog1.jpg'),
(2, 'Husky', '3.000.000 VND', 'upload/img/dog/husky.png'),
(3, 'Shiba', '2.000.000 VND', 'upload/img/dog/shiba.png'),
(4, 'Alaska', '10.000.000 VND', 'upload/img/dog/alaska.png'),
(5, 'Pug', '5.000.000 VND', 'upload/img/dog/pug.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `img`) VALUES
('admin', 'admin', 1, NULL),
('user', 'user', 0, 'upload/avata/JPEG_example_flower.jpg'),
('user1', 'user1', 0, 'upload/avata/202112160135569558-a81459b5-7b64-48e1-92fb-db63b44f98af-5170.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mua_hang`
--
ALTER TABLE `mua_hang`
  ADD PRIMARY KEY (`username`,`id`),
  ADD KEY `FK_muahang_sanpham` (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mua_hang`
--
ALTER TABLE `mua_hang`
  ADD CONSTRAINT `FK_muahang_sanpham` FOREIGN KEY (`id`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `FK_muahang_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
