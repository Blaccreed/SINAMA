-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Mai 2020 à 14:34
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sinama`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `duree` int(3) NOT NULL,
  `numSalle` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idUser` int(11) NOT NULL,
  `idSeance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `nbplacelibre` int(3) NOT NULL DEFAULT '10',
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idfilm` (`id`),
  ADD KEY `idfilm_2` (`id`),
  ADD KEY `idfilm_3` (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `idSeance` (`idSeance`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSeance_2` (`idSeance`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSeance` (`id`),
  ADD KEY `idSeance_2` (`id`),
  ADD KEY `idFilm` (`idFilm`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`id`),
  ADD KEY `idUser_2` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idSeance`) REFERENCES `seance` (`id`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
