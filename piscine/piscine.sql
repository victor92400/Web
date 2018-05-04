-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 mai 2018 à 08:21
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `no_utilisateur1` int(11) NOT NULL,
  `no_utilisateur2` int(11) NOT NULL,
  `no_publication` int(11) DEFAULT NULL,
  `Commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `no_utilisateur1` int(11) NOT NULL,
  `no_utilisateur2` int(11) NOT NULL,
  `no_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `no_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

DROP TABLE IF EXISTS `publier`;
CREATE TABLE IF NOT EXISTS `publier` (
  `Type` text,
  `no_utilisateur` int(11) DEFAULT NULL,
  `Zone_De_Texte` text,
  `Visibilite` tinyint(1) DEFAULT NULL,
  `no_publication` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Fichier` mediumblob,
  `Texte_Nom_Entreprise` text,
  `Texte_Nom_Poste` text,
  `Salaire` int(11) DEFAULT NULL,
  `Duree` text,
  PRIMARY KEY (`no_publication`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`Type`, `no_utilisateur`, `Zone_De_Texte`, `Visibilite`, `no_publication`, `Date`, `Fichier`, `Texte_Nom_Entreprise`, `Texte_Nom_Poste`, `Salaire`, `Duree`) VALUES
('Texte', 2, 'Salut', 0, 2, '2018-05-02 09:50:28', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'Message visible par tout le monde', 1, 3, '2018-05-02 09:50:28', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'bonjour', 0, 7, '2018-05-02 09:50:28', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'Jespere que ca marche', 1, 9, '2018-05-02 09:56:54', NULL, NULL, NULL, NULL, NULL),
('Emploi', 2, 'Pas trop chiant est un plus', 0, 39, '2018-05-03 14:07:27', NULL, 'BNP', 'calculateu', 10, NULL),
('Texte', 2, ' wn wsry, ', 0, 29, '2018-05-02 18:20:17', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'qsdfg', 0, 28, '2018-05-02 18:15:02', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `relations`
--

DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `no_utilisateur1` int(11) NOT NULL,
  `no_utilisateur2` int(11) NOT NULL,
  PRIMARY KEY (`no_utilisateur1`,`no_utilisateur2`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `relations`
--

INSERT INTO `relations` (`no_utilisateur1`, `no_utilisateur2`) VALUES
(2, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Nom` text,
  `Prenom` text,
  `Email` text,
  `Login` text,
  `no_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Mdp` text,
  `Sexe` text,
  `Naissance` date DEFAULT NULL,
  `Statut` text,
  `CV` text,
  `Adresse` text,
  `Photo` text,
  `FondEcran` text,
  `Couleur` text,
  `Admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`no_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Prenom`, `Email`, `Login`, `no_utilisateur`, `Mdp`, `Sexe`, `Naissance`, `Statut`, `CV`, `Adresse`, `Photo`, `FondEcran`, `Couleur`, `Admin`) VALUES
('Bensimon', 'Victor', 'vb@edu.ece.fr', 'vb', 1, 'vb', '', '2018-05-03', 'Etudiant', '', 'Courbevoie', 'ntm', 'ntm2', 'rouge', 1),
('Duthu', 'Bastien', 'bd@edu.ece.fr', 'bd', 2, 'bd', '', '2018-05-02', 'Etudiant', '', 'Paris', 'mdr', 'mdr2', 'vert', 1),
('Dupont', 'Jean', 'jd@edu.ece.fr', 'jd', 3, 'jd', 'Homme', '2018-05-10', 'Prof', '', 'Lyon', '', '', 'Bleu', 0),
('Amrhein', 'Sebastien', 'sa@edu.ece.fr', 'sa', 4, 'sa', 'Homme', '2018-05-15', 'Prof', '', 'Strasbourg', '', '', 'Jaune', 1),
(NULL, NULL, NULL, '123', 5, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
