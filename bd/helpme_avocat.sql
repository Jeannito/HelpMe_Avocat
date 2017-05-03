-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Mai 2017 à 14:48
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `helpme_avocat`
--

-- --------------------------------------------------------

--
-- Structure de la table `criterion_form`
--

CREATE TABLE `criterion_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `coefficient` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `criterion_form`
--

INSERT INTO `criterion_form` (`id`, `name`, `coefficient`) VALUES
(1, 'gender', 0.25),
(2, 'personality', 0.25),
(3, 'position', 0.25),
(4, 'experience', 0.25);

-- --------------------------------------------------------

--
-- Structure de la table `criterion_helpme`
--

CREATE TABLE `criterion_helpme` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `coefficient` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `domain`
--

CREATE TABLE `domain` (
  `idDomain` int(11) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `domain`
--

INSERT INTO `domain` (`idDomain`, `label`) VALUES
(3, 'Social'),
(4, 'Affaire'),
(5, 'Famille');

-- --------------------------------------------------------

--
-- Structure de la table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `proximity` varchar(50) NOT NULL,
  `personality` varchar(50) NOT NULL,
  `idSubDomain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `lawyers`
--

INSERT INTO `lawyers` (`id`, `firstname`, `lastname`, `genre`, `experience`, `proximity`, `personality`, `idSubDomain`) VALUES
(1, 'JEAN', 'B2R', 'HOMME', 'Moins de 3 ans', 'Moins de 10 km', 'Pitbull', 1),
(2, 'ERICK', 'TARU', 'HOMME', 'Entre 3 et 8 ans', 'Moins de 30 km', 'Diplomate', 1),
(3, 'JULIEN', 'GALLEGO', 'HOMME', 'Plus de 8 ans', 'Moins de 10 km', 'Pitbull', 1),
(4, 'JULIA', 'FAVREL', 'FEMME', 'Entre 3 et 8 ans', 'Moins de 30 km', 'Pitbull', 1),
(5, 'BAPTISTE', 'VAUTRIN', 'HOMME', 'Plus de 8 ans', 'Moins de 10 km', 'Diplomate', 1),
(6, 'LOUISE', 'LEMOIGNE', 'FEMME', 'Moins de 3 ans', 'Moins de 30 km', 'Diplomate', 1),
(7, 'LEO', 'PERNELLE', 'HOMME', 'Moins de 3 ans', 'Moins de 10 km', 'Badass', 1);

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `personality` varchar(50) NOT NULL,
  `subDomain` varchar(50) NOT NULL,
  `idUser` int(11) NOT NULL,
  `isTreated` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `request`
--

INSERT INTO `request` (`id`, `gender`, `experience`, `position`, `personality`, `subDomain`, `idUser`, `isTreated`) VALUES
(1, 'Women', 'Less than 3 years', '30 km', 'Pitbull', 'I don\'t care', 1, 0),
(2, 'Women', 'Between 3 and 5 years', '10 km', 'Diplomate', 'Between 3 and 5 years', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `subdomain`
--

CREATE TABLE `subdomain` (
  `idSubDomain` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `idDomain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subdomain`
--

INSERT INTO `subdomain` (`idSubDomain`, `label`, `idDomain`) VALUES
(1, 'Societe', 4),
(2, 'Fiscal', 4),
(3, 'Divorce', 5),
(4, 'Changement de nom', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`) VALUES
(1, 'Jean', 'Bruté de Rémur'),
(2, 'Erick', 'Taru');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `criterion_form`
--
ALTER TABLE `criterion_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `criterion_helpme`
--
ALTER TABLE `criterion_helpme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`idDomain`);

--
-- Index pour la table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subdomain`
--
ALTER TABLE `subdomain`
  ADD PRIMARY KEY (`idSubDomain`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `criterion_form`
--
ALTER TABLE `criterion_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `criterion_helpme`
--
ALTER TABLE `criterion_helpme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `domain`
--
ALTER TABLE `domain`
  MODIFY `idDomain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `subdomain`
--
ALTER TABLE `subdomain`
  MODIFY `idSubDomain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
