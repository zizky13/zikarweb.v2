-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2024 at 09:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zikarweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `framework` varchar(100) NOT NULL
);

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `framework`) VALUES
(1, 'Deno.js'),
(2, 'Node.js'),
(3, 'Bootstrap'),
(4, 'Firebase'),
(5, 'PostGre'),
(6, 'Postman'),
(7, 'Java'),
(8, 'Sci-kit Learn');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `periode` varchar(250) DEFAULT NULL
);

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `title`, `company`, `periode`) VALUES
(1, 'Assitant Lecturer - Web Programming', 'Universitas Pembangunan Jaya', 'Sep 2024 - Present'),
(2, 'Java Instructor', 'PKBM Pemimpin Anak Bangsa', 'Aug 2023 - Aug 2024'),
(3, 'Student Ambassador', 'Universitas Pembangunan Jaya', 'Oct 2022 - Aug 2023'),
(4, 'Indonesian Delegates', 'ASEAN Seeds for the Future 2023', 'Aug 2023 - Sep 2023'),
(5, 'Runner Up', 'ASEAN-ROK Youth Metaverse Contest 2023', 'Sep 2023 - Oct 2023');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `descript` varchar(500) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
);

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `project_name`, `descript`, `img`) VALUES
(1, 'Regrant', 'Regrant is a secondhand resource sharing app that let people hand over their secondhand goods to their neighbor', 'https://github.com/zizky13/zikarweb.v2/blob/2adcb5f9b4bbdae9945b4a89fabdb3780f70754b/images/regrant.png?raw=true'),
(2, 'Waterwise', 'WaterWise is a to-do app that integrated with machine learning model. In this app, all task that uses water will be detected and estimated the amount used for that task.', 'https://github.com/zizky13/zikarweb.v2/blob/2adcb5f9b4bbdae9945b4a89fabdb3780f70754b/images/waterwise.png?raw=true');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int NOT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `links` varchar(500) DEFAULT NULL
);

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `platform`, `links`) VALUES
(1, 'GitHub', 'https://github.com/zizky13'),
(2, 'LinkedIn', 'https://www.linkedin.com/in/zikar-nurizky/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
