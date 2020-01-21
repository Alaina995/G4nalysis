-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 05:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g4nalysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `médecin`
--

CREATE TABLE `médecin` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Type de médecin` varchar(255) NOT NULL,
  `Code postal` int(11) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Rue` varchar(255) NOT NULL,
  `numéro de rue` int(11) NOT NULL,
  `Téléphone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `médecin`
--

INSERT INTO `médecin` (`id`, `Nom`, `Prénom`, `Type de médecin`, `Code postal`, `Ville`, `Rue`, `numéro de rue`, `Téléphone`) VALUES
(1, 'Guignot', 'Maxime', 'Médecin généraliste', 75002, 'Paris', 'Rue Saint-Denis', 261, '0142615576'),
(2, 'Baranowiczschouker', 'Danuta', 'Chirurgien-dentiste', 75002, 'Paris', 'Rue Poissonnière', 33, 'Pas de téléphone');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Code postal` int(255) NOT NULL,
  `Rue` varchar(255) NOT NULL,
  `Numero de rue` int(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Pseudo` varchar(255) NOT NULL,
  `CGU` tinyint(4) NOT NULL DEFAULT 0,
  `Admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `password`, `Ville`, `Code postal`, `Rue`, `Numero de rue`, `Date`, `Pseudo`, `CGU`, `Admin`) VALUES
(1, 'Alaina', 'Guiraud', 'guiraud.alaina@gmail.com', '123456789', 'Paris', 75002, 'Rue Saint Sauveur', 51, '2020-01-12 12:02:38', 'Alaina', 0, 0),
(2, 'Alaina', 'Guiraud', 'guiraud.alaina@outlook.fr', '123456789', 'Paris', 75002, 'Rue Saint Sauveur', 51, '2020-01-14 12:06:13', 'Alaina2.0', 0, 0),
(3, 'Henrry', 'Carrasquero', 'henrry_carrasquero@gmail.com', '123456789', 'Paris', 75002, 'Rue Saint Sauveur', 51, '2020-01-14 12:08:08', 'Henrry', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `Ville` varchar(255) NOT NULL,
  `Code Postal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`Ville`, `Code Postal`) VALUES
('Paris', 75000),
('Marseille', 13000),
('Lyon', 69000),
('Toulouse', 31000),
('Nice', 6000),
('Nantes', 44000),
('Montpellier', 34000),
('Strasbourg', 67000),
('Bordeaux', 30072),
('Lille', 59000),
('Rennes', 35000),
('Reims', 51100),
('Saint-Etienne', 42000),
('Le Havre', 76600),
('Toulon', 83000),
('Grenoble', 38000),
('Dijon', 21000),
('Angers', 49000),
('Nîmes', 30000),
('Villeurbanne', 69100),
('Paris', 75002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `médecin`
--
ALTER TABLE `médecin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Pseudo` (`Pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `médecin`
--
ALTER TABLE `médecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
