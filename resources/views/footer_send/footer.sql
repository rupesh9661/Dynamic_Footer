-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 09:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footer`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer_menu`
--

CREATE TABLE `footer_menu` (
  `id` int(11) NOT NULL,
  `company_id` varchar(10) NOT NULL,
  `text` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_menu`
--

INSERT INTO `footer_menu` (`id`, `company_id`, `text`, `link`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, '2', 'Important links', 'implink', '2021-10-16 07:09:23', 'rupesh', '2021-10-16 07:09:23', 'rupesh'),
(2, '2', 'Social Media Links', 'smplink', '2021-10-16 07:15:49', 'rupesh', '2021-10-16 07:15:49', 'rupesh'),
(3, '2', 'Other Links', 'olink', '2021-10-16 07:17:47', 'rupesh', '2021-10-16 07:17:47', 'rupesh'),
(4, '2', 'aboutlink', 'alink', '2021-10-16 07:17:47', 'rupesh', '2021-10-16 07:17:47', 'rupesh');

-- --------------------------------------------------------

--
-- Table structure for table `footer_sub_menu`
--

CREATE TABLE `footer_sub_menu` (
  `id` int(11) NOT NULL,
  `company_id` varchar(10) NOT NULL,
  `footer_menu` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_sub_menu`
--

INSERT INTO `footer_sub_menu` (`id`, `company_id`, `footer_menu`, `text`, `link`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, '2', 'Important links', 'rupeshabout', 'rupesha', '2021-10-16 07:19:05', 'rupesh', '2021-10-16 07:19:05', 'rupesh'),
(2, '2', 'Important links', 'rupeshdetails', 'rupeshd', '2021-10-16 07:19:05', 'rupesh', '2021-10-16 07:19:05', 'rupesh'),
(3, '2', 'Important links', 'rupeshname', 'rupeshname', '2021-10-16 07:19:05', 'rupesh', '2021-10-16 07:19:05', 'rupesh'),
(4, '2', 'Social Media Links', 'instagram', 'instagram.com', '2021-10-16 07:21:22', 'rupesh', '2021-10-16 07:21:22', 'rupesh'),
(5, '2', 'Social Media Links', 'facebook', 'facebook.com', '2021-10-16 07:21:22', 'rupesh', '2021-10-16 07:21:22', 'rupesh'),
(6, '2', 'Social Media Links', 'twitter', 'twitter.com', '2021-10-16 07:21:22', 'rupesh', '2021-10-16 07:21:22', 'rupesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footer_menu`
--
ALTER TABLE `footer_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_sub_menu`
--
ALTER TABLE `footer_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footer_menu`
--
ALTER TABLE `footer_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_sub_menu`
--
ALTER TABLE `footer_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
