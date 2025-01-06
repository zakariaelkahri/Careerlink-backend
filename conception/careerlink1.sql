-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 06, 2025 at 08:49 AM
-- Server version: 8.0.40
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careerlink1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `name` char(20) NOT NULL,
  `offer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `offer_id`) VALUES
(1, 'Software Development', 1),
(2, 'Engineering', 2),
(3, 'Design', 3);

-- --------------------------------------------------------

--
-- Table structure for table `condidat`
--

CREATE TABLE `condidat` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `condidat`
--

INSERT INTO `condidat` (`id`, `user_id`) VALUES
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `offer_candidat`
--

CREATE TABLE `offer_candidat` (
  `candidat_id` int NOT NULL,
  `offer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offer_candidat`
--

INSERT INTO `offer_candidat` (`candidat_id`, `offer_id`) VALUES
(1, 1),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `offer_tag`
--

CREATE TABLE `offer_tag` (
  `offer_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offer_tag`
--

INSERT INTO `offer_tag` (`offer_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 4),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `offredemploi`
--

CREATE TABLE `offredemploi` (
  `id` int NOT NULL,
  `name` char(100) DEFAULT NULL,
  `recruteur_id` int NOT NULL,
  `admin_id` int NOT NULL,
  `description` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offredemploi`
--

INSERT INTO `offredemploi` (`id`, `name`, `recruteur_id`, `admin_id`, `description`, `is_deleted`) VALUES
(1, 'Frontend Developer', 1, 1, 'Looking for a skilled frontend developer.', 0),
(2, 'Backend Engineer', 2, 1, 'Seeking an experienced backend engineer.', 0),
(3, 'UI/UX Designer', 1, 1, 'Hiring a creative UI/UX designer.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recruteur`
--

CREATE TABLE `recruteur` (
  `id` int NOT NULL,
  `nomentreprise` char(200) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recruteur`
--

INSERT INTO `recruteur` (`id`, `nomentreprise`, `user_id`) VALUES
(1, 'Tech Solutions', 2),
(2, 'Innovatech Inc', 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` enum('admin','recruteur','candidat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'recruteur'),
(3, 'candidat');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'Remote'),
(2, 'Full-time'),
(3, 'Junior'),
(4, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` char(100) NOT NULL,
  `password` char(100) DEFAULT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role_id`) VALUES
(1, 'admin@careerlink.com', 'password123', 1),
(2, 'recruiter@careerlink.com', 'password123', 2),
(3, 'candidate1@careerlink.com', 'password123', 3),
(4, 'candidate2@careerlink.com', 'password123', 3),
(5, 'recruiter2@careerlink.com', 'password123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_id_fk` (`offer_id`);

--
-- Indexes for table `condidat`
--
ALTER TABLE `condidat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `offer_candidat`
--
ALTER TABLE `offer_candidat`
  ADD KEY `candidat_offer_fk` (`candidat_id`),
  ADD KEY `offer_candidat_fk` (`offer_id`);

--
-- Indexes for table `offer_tag`
--
ALTER TABLE `offer_tag`
  ADD KEY `offer_id` (`offer_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `offredemploi`
--
ALTER TABLE `offredemploi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recruteur_id` (`recruteur_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `condidat`
--
ALTER TABLE `condidat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offredemploi`
--
ALTER TABLE `offredemploi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `offer_id_fk` FOREIGN KEY (`offer_id`) REFERENCES `offredemploi` (`id`);

--
-- Constraints for table `condidat`
--
ALTER TABLE `condidat`
  ADD CONSTRAINT `condidat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer_candidat`
--
ALTER TABLE `offer_candidat`
  ADD CONSTRAINT `candidat_offer_fk` FOREIGN KEY (`candidat_id`) REFERENCES `condidat` (`id`),
  ADD CONSTRAINT `offer_candidat_fk` FOREIGN KEY (`offer_id`) REFERENCES `offredemploi` (`id`);

--
-- Constraints for table `offer_tag`
--
ALTER TABLE `offer_tag`
  ADD CONSTRAINT `offer_tag_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offredemploi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `offredemploi`
--
ALTER TABLE `offredemploi`
  ADD CONSTRAINT `offredemploi_ibfk_1` FOREIGN KEY (`recruteur_id`) REFERENCES `recruteur` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `offredemploi_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `recruteur`
--
ALTER TABLE `recruteur`
  ADD CONSTRAINT `recruteur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
