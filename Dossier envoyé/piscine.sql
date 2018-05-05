-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 05 mai 2018 à 11:32
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
  `no_utilisateur_actuel` int(11) NOT NULL,
  `no_auteur_publication` int(11) NOT NULL,
  `no_publication` int(11) DEFAULT NULL,
  `Commentaire` text,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no_commentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`no_utilisateur_actuel`, `no_auteur_publication`, `no_publication`, `Commentaire`, `Date`, `no_commentaire`) VALUES
(1, 1, 81, 'Incroyable !', '2018-05-04 22:21:45', 1),
(1, 1, 79, 'TrÃ¨s belle photo !', '2018-05-04 22:22:06', 2),
(1, 2, 29, 'Ceci est un commentaire', '2018-05-04 22:22:22', 3),
(1, 2, 28, 'Je commente des trucs', '2018-05-04 22:22:31', 4),
(1, 2, 28, 'Tu dis de la merde je trouve', '2018-05-04 22:22:46', 5),
(4, 3, 40, 'Commentaire de Sebastien', '2018-05-04 22:49:15', 7),
(2, 3, 40, 'Commentaire de Bastien', '2018-05-04 22:59:19', 8),
(2, 3, 40, 'C Bastien qui commente cette fois', '2018-05-04 23:12:57', 9),
(1, 2, 43, 'Je postule svp\r\n', '2018-05-04 23:17:18', 10),
(1, 3, 40, 'Coucou pilu', '2018-05-05 09:04:07', 11),
(2, 1, 83, 'dfghjkl\r\n', '2018-05-05 13:03:55', 12);

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
  `Fichier` text,
  `Texte_Nom_Entreprise` text,
  `Texte_Nom_Poste` text,
  `Salaire` int(11) DEFAULT NULL,
  `Duree` text,
  PRIMARY KEY (`no_publication`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

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
('Texte', 2, 'qsdfg', 0, 28, '2018-05-02 18:15:02', NULL, NULL, NULL, NULL, NULL),
('Texte', 3, 'Blabla', 0, 40, '2018-05-04 11:10:52', NULL, NULL, NULL, NULL, NULL),
('Emploi', 2, 'Serieux', 0, 43, '2018-05-04 15:31:01', NULL, 'Une entreprise bidon', 'Respo com', 100000000, NULL),
('Texte', 2, 'besltniots', 0, 88, '2018-05-05 13:08:08', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'szbviu', 0, 89, '2018-05-05 13:09:03', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'sdfghjk', 0, 87, '2018-05-05 13:07:20', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'fghjkl', 0, 86, '2018-05-05 13:05:48', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'azertyuio', 0, 84, '2018-05-05 13:04:03', NULL, NULL, NULL, NULL, NULL),
('Texte', 2, 'sdfghjkl', 0, 85, '2018-05-05 13:04:28', NULL, NULL, NULL, NULL, NULL),
('Texte', 1, 'TG les amis', 0, 83, '2018-05-05 13:01:48', NULL, NULL, NULL, NULL, NULL),
('Fichier', 1, 'Photo au bord de l\'eau', 0, 81, '2018-05-04 22:21:19', 'images/20150819_171809.jpg', NULL, NULL, NULL, NULL),
('Fichier', 1, 'Coucou pilou', 0, 82, '2018-05-05 09:03:29', 'images/20141010_100434(1).jpg', NULL, NULL, NULL, NULL),
('Fichier', 1, 'Image Ã  la plage', 0, 79, '2018-05-04 22:16:27', 'images/20141010_100434(1).jpg', NULL, NULL, NULL, NULL);

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
(1, 1),
(1, 4),
(2, 3),
(3, 3),
(29, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Prenom`, `Email`, `Login`, `no_utilisateur`, `Mdp`, `Sexe`, `Naissance`, `Statut`, `CV`, `Adresse`, `Photo`, `FondEcran`, `Couleur`, `Admin`) VALUES
('Bensimon', 'Victor', 'vb@edu.ece.fr', 'vb', 1, 'vb', '', '2018-05-03', 'Etudiant', '', 'Courbevoie', 'ntm', 'ntm2', 'rouge', 1),
('Duthu', 'Bastien', 'bd@edu.ece.fr', 'bd', 2, 'bd', '', '2018-05-02', 'Etudiant', '', 'Paris', 'mdr', 'mdr2', 'vert', 1),
('Dupont', 'Jean', 'jd@edu.ece.fr', 'jd', 3, 'jd', 'Homme', '2018-05-10', 'Prof', '', 'Lyon', '', '', 'Bleu', 0),
('Elisabeth', 'Rendler', 'er@edu.ece.fr', 'er', 28, 'er', 'Femme', '2018-05-17', 'Prof', NULL, 'Versailles', NULL, NULL, 'Marron', NULL),
('ntm', 'ntm plus fort', 'dfghjk', 'f', 30, 'f', 'fghjkl', '2018-05-25', 'cqc', NULL, 'vze', NULL, NULL, 'evz', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
