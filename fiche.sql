-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 24 août 2024 à 15:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fiche`
--

-- --------------------------------------------------------

--
-- Structure de la table `carac`
--

CREATE TABLE `carac` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `FP` int(11) NOT NULL,
  `Rang_Mythique` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Taille` varchar(255) NOT NULL,
  `DV` int(11) NOT NULL,
  `Force` int(11) NOT NULL,
  `Dexterite` int(11) NOT NULL,
  `Constitution` int(11) NOT NULL,
  `Intelligence` int(11) NOT NULL,
  `Sagesse` int(11) NOT NULL,
  `Charisme` int(11) NOT NULL,
  `Bonus_Initiative` int(11) NOT NULL,
  `Bonus_Reflexe` int(11) NOT NULL,
  `Bonus_Vigueur` int(11) NOT NULL,
  `Bonus_Volonte` int(11) NOT NULL,
  `Armure` int(11) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Esquive` int(11) NOT NULL,
  `Description_bonus_armure` varchar(255) NOT NULL,
  `Alignement` int(11) NOT NULL,
  `Dons` text NOT NULL,
  `Langues` text NOT NULL,
  `Particularites` text NOT NULL,
  `Environnement` text NOT NULL,
  `Organisation_sociale` text NOT NULL,
  `Tresor` text NOT NULL,
  `Pouvoirs_speciaux` text NOT NULL,
  `Resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `carac`
--

INSERT INTO `carac` (`id`, `Nom`, `FP`, `Rang_Mythique`, `Type`, `Taille`, `DV`, `Force`, `Dexterite`, `Constitution`, `Intelligence`, `Sagesse`, `Charisme`, `Bonus_Initiative`, `Bonus_Reflexe`, `Bonus_Vigueur`, `Bonus_Volonte`, `Armure`, `Contact`, `Esquive`, `Description_bonus_armure`, `Alignement`, `Dons`, `Langues`, `Particularites`, `Environnement`, `Organisation_sociale`, `Tresor`, `Pouvoirs_speciaux`, `Resume`) VALUES
(0, 'e', 5, 0, 8, 'Moyen', 6, 1, 1, 1, 1, 1, 1, 2, 5, 5, 1, 8, 4, 5, 'ugdbhvfjkffrbvjkzsbvcjkzexb', 4, 'tgfiokbnrlkclzskdsvbhhhhhhhhhhhhhhhhhhhhh', 'français', 'v', 'ccxfg555', 'gnn', 'vvv', 'djdncfr', 'v'),
(1, 'machin', 4, 3, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(2, 'truci', 20, 2, 1, 'Très Petit', 0, 10, 19, 10, 105, 14, 0, 0, 0, 0, 0, 10, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(3, 'truc', 4, 3, 8, 'Infime', 0, 10, 19, 10, 105, 14, 0, 0, 0, 0, 0, 10, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(4, 'truc', 4, 3, 8, 'Infime', 0, 10, 19, 10, 105, 14, 0, 0, 0, 0, 0, 10, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(5, 'truc', 5, 2, 8, 'Minuscule', 0, 7, 19, 999, 105, 10, 3, 0, 0, 0, 0, 7, 0, 0, '', 8, '', '', '', '', '', '0', '', ''),
(6, 'truc', 4, 3, 8, 'Moyen', 0, 10, 19, 10, 105, 14, 0, 0, 0, 0, 0, 10, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(7, 'truc', 20, 3, 8, 'Infime', 0, 10, 19, 1000, 105, 14, 0, 0, 0, 0, 0, 10, 0, 0, '', 4, '', '', '', '', '', '0', '', ''),
(10, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(11, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(12, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(13, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(14, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(15, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(16, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(17, 'A', 1, 2, 8, 'Moyen', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', 'a', '', '', '0', '', 'b'),
(18, 'ev', 3, 3, 1, 'Gigantesque', 0, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 2, '', '', 'Incroyable', '', '', '0', '', '<b> bleu</b>'),
(19, 'truci', 3, 2, 8, 'Moyen', 0, 10, 10, 10, 9, 11, 10, 0, 0, 0, 0, -2, 0, 0, '', 4, '', '', 'h', '', '', '0', '', 'h'),
(20, 'j', 1, 2, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', '7', '', '', '0', '', '7'),
(21, 'F', 20, 4, 4, 'Moyen', 29, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 4, 0, 0, '', 5, '', '', 'h', '', '', '0', '', 'h'),
(22, 'bv', 3, 5, 4, 'Petit', 4, 11, 9, 9, 9, 9, 12, 0, 0, 0, 0, 3, 0, 0, '', 1, '', '', 'bvghjhjhj', '', '', '0', '', 'jhjbhjbvhjvbhjb	'),
(23, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(24, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(25, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(26, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(27, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(28, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(29, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(30, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(31, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(32, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(33, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(34, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(35, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(36, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(37, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(38, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(39, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(40, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(41, 'truci', 3, 3, 3, 'Petit', 4, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 8, 0, 0, '', 2, '', '', '	hhh	', '', '', '0', '', '		hlkkj'),
(42, 'j', 2, 2, 8, 'Moyen', 3, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 1, 0, 0, '', 4, '', '', '	j	', '', '', '0', '', '		j'),
(43, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 2, 0, '0', 1, '', '', '		y', '', '', '0', '', '		y'),
(44, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 0, 0, '', 1, '', '', '		y', '', '', '0', '', '		y'),
(45, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 0, 0, '', 1, '', '', '		y', '', '', '0', '', '		y'),
(46, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 0, 0, '', 1, '', '', '		y', '', '', '0', '', '		y'),
(47, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 0, 0, '', 1, '', '', '		y', '', '', '0', '', '		y'),
(48, 'machin', 3, 4, 4, 'Très Petit', 4, 13, 14, 14, 11, 7, 7, 0, 0, 0, 0, 4, 2, 0, '0', 1, '', '', '		y', '', '', '0', '', '		y'),
(49, 'ty', 1, 1, 1, 'Minuscule', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '0', 1, '', '', '		t', '', '', '0', '', '		t'),
(50, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(51, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(52, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(53, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(54, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(55, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(56, 'g', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		', '', '', '0', '', '		'),
(57, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(58, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(59, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(60, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(61, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(62, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(63, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(64, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(65, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(66, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(67, 'e', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		p', '		p', '		p', '		p', '		p', '		p'),
(68, 'i', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, '', 4, '', '', '		l', '		l', '		j', '		j', '		k', '		h'),
(69, 'u', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 2, 2, 0, 'ghhghghggh', 4, '', '', '		i', '		ui', '		yi', '		ui', '		gh', '		hgpo'),
(70, 'u', 1, 1, 8, 'Moyen', 2, 10, 10, 10, 10, 10, 10, 0, 0, 0, 0, 2, 2, 0, 'ghhghghggh', 4, '', '', '		i', '		ui', '		yi', '		ui', '		gh', '		hgpo');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `acrobaties` int(11) NOT NULL,
  `art_de_la_magie` int(11) NOT NULL,
  `artisanat_type_I` text NOT NULL,
  `artisanat_I` int(11) NOT NULL,
  `artisanat_type_II` text NOT NULL,
  `artisanat_II` int(11) NOT NULL,
  `bluff` int(11) NOT NULL,
  `conn_donj` int(11) NOT NULL,
  `conn_folk` int(11) NOT NULL,
  `conn_geo` int(11) NOT NULL,
  `conn_hist` int(11) NOT NULL,
  `conn_ing` int(11) NOT NULL,
  `conn_myst` int(11) NOT NULL,
  `conn_nat` int(11) NOT NULL,
  `conn_nob` int(11) NOT NULL,
  `conn_plans` int(11) NOT NULL,
  `conn_rel` int(11) NOT NULL,
  `deguisement` int(11) NOT NULL,
  `diplomatie` int(11) NOT NULL,
  `discretion` int(11) NOT NULL,
  `dressage` int(11) NOT NULL,
  `equitation` int(11) NOT NULL,
  `escalade` int(11) NOT NULL,
  `escamotage` int(11) NOT NULL,
  `estimation` int(11) NOT NULL,
  `evasion` int(11) NOT NULL,
  `intimidation` int(11) NOT NULL,
  `linguistique` int(11) NOT NULL,
  `natation` int(11) NOT NULL,
  `perception` int(11) NOT NULL,
  `premiers_secours` int(11) NOT NULL,
  `profession_type_I` text NOT NULL,
  `profession_I` int(11) NOT NULL,
  `profession_type_II` text NOT NULL,
  `profession_II` int(11) NOT NULL,
  `psychologie` int(11) NOT NULL,
  `representation_type_I` text NOT NULL,
  `representation_I` int(11) NOT NULL,
  `representation_type_II` text NOT NULL,
  `representation_II` int(11) NOT NULL,
  `representation_type_III` text NOT NULL,
  `representation_III` int(11) NOT NULL,
  `representation_type_IV` text NOT NULL,
  `representation_IV` int(11) NOT NULL,
  `sabotage` int(11) NOT NULL,
  `survie` int(11) NOT NULL,
  `utilisation_d_objets_magiques` int(11) NOT NULL,
  `vol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `acrobaties`, `art_de_la_magie`, `artisanat_type_I`, `artisanat_I`, `artisanat_type_II`, `artisanat_II`, `bluff`, `conn_donj`, `conn_folk`, `conn_geo`, `conn_hist`, `conn_ing`, `conn_myst`, `conn_nat`, `conn_nob`, `conn_plans`, `conn_rel`, `deguisement`, `diplomatie`, `discretion`, `dressage`, `equitation`, `escalade`, `escamotage`, `estimation`, `evasion`, `intimidation`, `linguistique`, `natation`, `perception`, `premiers_secours`, `profession_type_I`, `profession_I`, `profession_type_II`, `profession_II`, `psychologie`, `representation_type_I`, `representation_I`, `representation_type_II`, `representation_II`, `representation_type_III`, `representation_III`, `representation_type_IV`, `representation_IV`, `sabotage`, `survie`, `utilisation_d_objets_magiques`, `vol`) VALUES
(0, 0, 0, 'Dragon', 1, 'p', 1, 0, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 'oo', 1, 'oo', 1, 0, 'o', 1, 'Tambour', 3, 'o', 1, 'o', 1, 0, 0, 0, 0),
(2, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(3, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(4, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(5, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(6, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(7, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(8, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(9, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(10, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(11, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(12, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(13, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(14, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(15, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(16, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(17, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(18, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(19, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(20, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(21, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(22, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(23, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(24, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(25, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0),
(26, 0, 0, '', 0, '', 0, 0, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, -2, 0, 0, 0, 0, 4, 0, 0, 0, 5, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, 0, 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carac`
--
ALTER TABLE `carac`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carac`
--
ALTER TABLE `carac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
