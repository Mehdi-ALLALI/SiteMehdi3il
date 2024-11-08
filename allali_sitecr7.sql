-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-allali.alwaysdata.net
-- Generation Time: Nov 09, 2024 at 12:34 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allali_sitecr7`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_accueil`
--

CREATE TABLE `page_accueil` (
  `id` int(11) NOT NULL,
  `stats` varchar(2000) NOT NULL,
  `citations` varchar(2000) NOT NULL,
  `nouvelles` varchar(2000) NOT NULL,
  `saviez_vous` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_accueil`
--

INSERT INTO `page_accueil` (`id`, `stats`, `citations`, `nouvelles`, `saviez_vous`) VALUES
(1, 'c\'est le meilleur du monde de tout de les temps.', '\"Mehdi est ma source de motivation\" - Cristiano Ronaldo', 'Restez à jour avec les dernières actualités de Cristiano Ronaldo sur et en dehors du terrain.', 'Cristiano Ronaldo a marqué plus de 800 buts au cours de sa carrière .\r\nIl détient le record du plus grand nombre de buts en Ligue des Champions.');

-- --------------------------------------------------------

--
-- Table structure for table `page_description`
--

CREATE TABLE `page_description` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_description`
--

INSERT INTO `page_description` (`id`, `url`, `description`) VALUES
(1, 'assets/images/historique2.jpg', 'historique1'),
(2, 'assets/images/historique2.jpg', 'historique2'),
(3, 'assets/images/palmares.jpg', 'palmares_ronaldo'),
(4, 'assets/images/cristiano3.jpg', 'moment1'),
(5, 'assets/images/moment2.jpg', 'moment2'),
(6, 'assets/images/moment3.jpg', 'moment3'),
(7, 'assets/images/Famille.jpg', 'famille');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`id`, `nom`, `email`, `date`, `details`) VALUES
(1, 'hehe', 'hehe@gmail.com', '2002-07-22', 'Réservation test '),
(2, 'qalouch', 'qalouch@gmail.com', '2002-07-22', 'test'),
(3, 'bouzebal', 'qalouch@gmail.com', '2002-07-22', 'test'),
(4, 'bouzebal2', 'qalouch@gmail.com', '2002-07-22', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `admin`, `password`) VALUES
(1, 'login', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_accueil`
--
ALTER TABLE `page_accueil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_description`
--
ALTER TABLE `page_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_accueil`
--
ALTER TABLE `page_accueil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_description`
--
ALTER TABLE `page_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
