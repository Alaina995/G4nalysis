-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 21 jan. 2020 à 15:17
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `g4nalysis2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `mail`, `password`, `nom`, `prenom`) VALUES
(1, 'jaco@gmail.com', '123456', 'Bonnand', 'Jacques'),
(2, 'paulo@gmail.com', '0000', 'Bernard', 'Paul');

-- --------------------------------------------------------

--
-- Structure de la table `médecin`
--

CREATE TABLE `médecin` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
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
-- Déchargement des données de la table `médecin`
--

INSERT INTO `médecin` (`id`, `mail`, `Nom`, `Prénom`, `Type de médecin`, `Code postal`, `Ville`, `Rue`, `numéro de rue`, `Téléphone`) VALUES
(1, 'jacquesbonnand92@gmail.com', 'Guignot', 'Maxime', 'Médecin généraliste', 75002, 'Paris', 'Rue Saint-Denis', 261, '0142615576'),
(2, '', 'Baranowiczschouker', 'Danuta', 'Chirurgien-dentiste', 75002, 'Paris', 'Rue Poissonnière', 33, 'Pas de téléphone');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `idTest` int(11) NOT NULL,
  `dateTime` datetime DEFAULT NULL,
  `idCapteur` int(11) DEFAULT NULL,
  `valeur` double DEFAULT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`idTest`, `dateTime`, `idCapteur`, `valeur`, `idUser`) VALUES
(1, '2020-01-07 12:33:00', 2, 3.565, 1),
(2, '2020-01-06 00:00:00', 2, 5.2, 0),
(4, '0000-00-00 00:00:00', 2, 3.465, 2),
(5, '0000-00-00 00:00:00', 5, 3.465, 0),
(6, '0000-00-00 00:00:00', 4, 3.45, 0),
(7, '0000-00-00 00:00:00', 2, 3.465, 1),
(8, '0000-00-00 00:00:00', 5, 53.465, 1),
(9, '0000-00-00 00:00:00', 1, 3.465, 2),
(13, '0000-00-00 00:00:00', 2, 8.465, 0),
(14, '0000-00-00 00:00:00', 3, 3.465, 2),
(15, '0000-00-00 00:00:00', 2, 3.465, 2),
(16, '2020-01-15 10:27:24', 1, 36.4, 0),
(17, '2020-01-01 00:00:00', 1, 56, 0),
(18, '2020-01-23 13:27:23', 1, 15, 0),
(19, '2020-01-23 13:27:23', 1, 135, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `codepostal` int(10) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `rue` varchar(60) NOT NULL,
  `numerorue` int(10) NOT NULL,
  `dateCreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `password`, `codepostal`, `ville`, `rue`, `numerorue`, `dateCreation`) VALUES
(0, 'Bonnand', 'Jacques', 'jacquesbonnand92@gmail.com', '123456', 92190, 'Meudon', 'Maisant', 56, '0000-00-00'),
(1, 'bahri', 'nadir', 'nad70@icloud.com', 'ganalysis', 92220, 'Bagneux', 'rue du général Sarrail', 13, '0000-00-00'),
(2, 'izard', 'léonore', 'leonore.izard@isep.fr', 'weshalors', 92130, 'Issy Les Moulineaux', 'Rue de Vanves', 10, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `Ville` varchar(255) NOT NULL,
  `Code Postal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `médecin`
--
ALTER TABLE `médecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`idTest`),
  ADD KEY `idUser_tests` (`idUser`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `médecin`
--
ALTER TABLE `médecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `idTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `idUser_tests` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
