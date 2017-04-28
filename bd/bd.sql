-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 28 Avril 2017 à 10:48
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `helpme_avocats`
--

-- --------------------------------------------------------

--
-- Structure de la table `AVOCATS`
--

CREATE TABLE `AVOCATS` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `proximity` varchar(50) NOT NULL,
  `personality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `AVOCATS`
--

INSERT INTO `AVOCATS` (`id`, `firstname`, `lastname`, `genre`, `experience`, `proximity`, `personality`) VALUES
(1, 'JEAN', 'B2R', 'HOMME', 'Moins de 3 ans', 'Moins de 10 km', 'Pitbull'),
(2, 'ERICK', 'TARU', 'HOMME', 'Entre 3 et 8 ans', 'Moins de 30 km', 'Diplomate'),
(3, 'JULIEN', 'GALLEGO', 'HOMME', 'Plus de 8 ans', 'Moins de 10 km', 'Pitbull'),
(4, 'JULIA', 'FAVREL', 'FEMME', 'Entre 3 et 8 ans', 'Moins de 30 km', 'Pitbull'),
(5, 'BAPTISTE', 'VAUTRIN', 'HOMME', 'Plus de 8 ans', 'Moins de 10 km', 'Diplomate'),
(6, 'LOUISE', 'LEMOIGNE', 'FEMME', 'Moins de 3 ans', 'Moins de 30 km', 'Diplomate'),
(7, 'LEO', 'PERNELLE', 'HOMME', 'Moins de 3 ans', 'Moins de 10 km', 'Badass');

-- --------------------------------------------------------

--
-- Structure de la table `REQUEST`
--

CREATE TABLE `REQUEST` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `personality` varchar(50) NOT NULL,
  `subDomain` varchar(50) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `USERS`
--

CREATE TABLE `USERS` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `AVOCATS`
--
ALTER TABLE `AVOCATS`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `REQUEST`
--
ALTER TABLE `REQUEST`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `AVOCATS`
--
ALTER TABLE `AVOCATS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `REQUEST`
--
ALTER TABLE `REQUEST`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;