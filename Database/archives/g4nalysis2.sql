-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 18 jan. 2020 à 19:55
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
(15, '0000-00-00 00:00:00', 2, 3.465, 2);

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
  `codepost` int(10) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `rue` varchar(60) NOT NULL,
  `numerorue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `password`, `codepost`, `ville`, `rue`, `numerorue`) VALUES
(0, 'Bonnand', 'Jacques', 'jacquesbonnand92@gmail.com', '123456', 92190, 'Meudon', 'Maisant', 56),
(1, 'bahri', 'nadir', 'nad70@icloud.com', 'ganalysis', 92220, 'Bagneux', 'rue du général Sarrail', 13),
(2, 'izard', 'léonore', 'leonore.izard@isep.fr', 'weshalors', 92130, 'Issy Les Moulineaux', 'Rue de Vanves', 10);

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `idTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
