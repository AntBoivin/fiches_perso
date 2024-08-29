-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 août 2024 à 23:14
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
  `Sens` text NOT NULL,
  `Aura` text NOT NULL,
  `RD_valeur` int(11) NOT NULL,
  `RD` text NOT NULL,
  `Immunite` text NOT NULL,
  `Resistance` text NOT NULL,
  `RM` int(11) NOT NULL,
  `VD` int(11) NOT NULL,
  `distance_vol` int(11) NOT NULL,
  `qualite_vol` text NOT NULL,
  `cac` text NOT NULL,
  `Espace` int(11) NOT NULL,
  `Allonge` int(11) NOT NULL,
  `Attaques_spe` text NOT NULL,
  `Force` int(11) NOT NULL,
  `Dexterite` int(11) NOT NULL,
  `Constitution` int(11) NOT NULL,
  `Intelligence` int(11) NOT NULL,
  `Sagesse` int(11) NOT NULL,
  `Charisme` int(11) NOT NULL,
  `BBA` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Structure de la table `pouvoirs magiques`
--

CREATE TABLE `pouvoirs magiques` (
  `id` int(11) NOT NULL,
  `Concentration_pv` int(11) NOT NULL,
  `NLS` int(11) NOT NULL,
  `Constant` text NOT NULL,
  `A_volonte` text NOT NULL,
  `3_jour` text NOT NULL,
  `1_jour` text NOT NULL,
  `1_mois` text NOT NULL,
  `1_an` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sorts`
--

CREATE TABLE `sorts` (
  `id` int(11) NOT NULL,
  `Classe` text NOT NULL,
  `NLS_sorts` int(11) NOT NULL,
  `Concentration` int(11) NOT NULL,
  `Niveau_0` text NOT NULL,
  `Niveau_1` text NOT NULL,
  `Niveau_2` text NOT NULL,
  `Niveau_3` text NOT NULL,
  `Niveau_4` text NOT NULL,
  `Niveau_5` text NOT NULL,
  `Niveau_6` text NOT NULL,
  `Niveau_7` text NOT NULL,
  `Niveau_8` text NOT NULL,
  `Niveau_9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Index pour la table `pouvoirs magiques`
--
ALTER TABLE `pouvoirs magiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sorts`
--
ALTER TABLE `sorts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carac`
--
ALTER TABLE `carac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT pour la table `pouvoirs magiques`
--
ALTER TABLE `pouvoirs magiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT pour la table `sorts`
--
ALTER TABLE `sorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
