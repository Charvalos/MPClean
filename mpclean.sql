-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Février 2017 à 17:13
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mpclean`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int(11) NOT NULL,
  `art_libelle` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `libelle_cat` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `libelle_classe` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_cli` int(11) NOT NULL,
  `fk_loc` int(11) NOT NULL,
  `nom_cli` tinytext NOT NULL,
  `prenom_cli` tinytext NOT NULL,
  `tel_portable_cli` tinytext NOT NULL,
  `email_cli` tinytext NOT NULL,
  `adresse` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_comm` int(11) NOT NULL,
  `fk_marc` int(11) NOT NULL,
  `fk_cli` int(11) NOT NULL,
  `date_comm` date NOT NULL,
  `en_cours_comm` tinyint(1) DEFAULT NULL,
  `qte_comm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `fk_marc` int(11) NOT NULL,
  `fk_opt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fabricant`
--

CREATE TABLE `fabricant` (
  `id_fab` int(11) NOT NULL,
  `fk_art` int(11) NOT NULL,
  `nom_fab` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `format`
--

CREATE TABLE `format` (
  `id_form` int(11) NOT NULL,
  `libelle_for` tinytext NOT NULL,
  `extension_for` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

CREATE TABLE `lier` (
  `id_lier` int(11) NOT NULL,
  `fk_prestation` int(11) NOT NULL,
  `fk_med` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `id_loc` int(11) NOT NULL,
  `nom_loc` tinytext NOT NULL,
  `npa_loc` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marchandises`
--

CREATE TABLE `marchandises` (
  `id_marc` int(11) NOT NULL,
  `prix_marc` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id_marq` int(11) NOT NULL,
  `libelle_marq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_med` int(11) NOT NULL,
  `fk_form` int(11) NOT NULL,
  `url_med` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `option_prestation`
--

CREATE TABLE `option_prestation` (
  `id_opt` int(11) NOT NULL,
  `libelle_opt` tinytext NOT NULL,
  `description_opt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `payer`
--

CREATE TABLE `payer` (
  `fk_typepai` int(11) NOT NULL,
  `fk_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

CREATE TABLE `posseder` (
  `fk_vhc` int(11) NOT NULL,
  `fk_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id_prestation` int(11) NOT NULL,
  `fk_art` int(11) NOT NULL,
  `libelle_serv` text NOT NULL,
  `description_serv` text NOT NULL,
  `fk_marc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_marc` int(11) NOT NULL,
  `fk_cat` int(11) NOT NULL,
  `fk_type` int(11) NOT NULL,
  `fk_marq` int(11) NOT NULL,
  `libelle_prod` tinytext NOT NULL,
  `description_prod` tinytext NOT NULL,
  `qte_prod` int(11) NOT NULL,
  `fk_med` int(11) NOT NULL,
  `fk_marc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_paiement`
--

CREATE TABLE `type_paiement` (
  `id_typepai` int(11) NOT NULL,
  `libelle_paie` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE `type_produit` (
  `id_type_produit` int(11) NOT NULL,
  `libelle_typ` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vhc` int(11) NOT NULL,
  `fk_classe` int(11) NOT NULL,
  `libelle_vhc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD UNIQUE KEY `ind_id_article` (`id_art`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `ind_id_categorie` (`id_cat`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`),
  ADD UNIQUE KEY `in_id_classe` (`id_classe`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cli`),
  ADD UNIQUE KEY `ind_id_cli` (`id_cli`),
  ADD KEY `ind_fk_localite` (`fk_loc`) USING BTREE;

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_comm`),
  ADD UNIQUE KEY `ind_pk_commande` (`id_comm`),
  ADD KEY `ind_comm_etat` (`en_cours_comm`),
  ADD KEY `marchandises_faire_partie_de_commande` (`fk_marc`),
  ADD KEY `commande_passe_par_client` (`fk_cli`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`fk_marc`,`fk_opt`),
  ADD KEY `option_est_contenue` (`fk_opt`),
  ADD KEY `ind_fk_marc_contenir` (`fk_marc`) USING BTREE;

--
-- Index pour la table `fabricant`
--
ALTER TABLE `fabricant`
  ADD PRIMARY KEY (`id_fab`),
  ADD UNIQUE KEY `ind_id_fabricant` (`id_fab`),
  ADD KEY `est_produit` (`fk_art`);

--
-- Index pour la table `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`id_form`),
  ADD UNIQUE KEY `ind_id_format` (`id_form`);

--
-- Index pour la table `lier`
--
ALTER TABLE `lier`
  ADD PRIMARY KEY (`id_lier`),
  ADD UNIQUE KEY `media_prestation` (`fk_prestation`,`fk_med`),
  ADD UNIQUE KEY `ind_fk_media_prestation` (`fk_med`) USING BTREE;

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id_loc`),
  ADD UNIQUE KEY `ind_id_loc` (`id_loc`);

--
-- Index pour la table `marchandises`
--
ALTER TABLE `marchandises`
  ADD PRIMARY KEY (`id_marc`),
  ADD UNIQUE KEY `ind_id_marc` (`id_marc`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id_marq`),
  ADD UNIQUE KEY `ind_id_marque` (`id_marq`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_med`),
  ADD UNIQUE KEY `ind_id_media` (`id_med`);

--
-- Index pour la table `option_prestation`
--
ALTER TABLE `option_prestation`
  ADD PRIMARY KEY (`id_opt`),
  ADD UNIQUE KEY `ind_id_option` (`id_opt`);

--
-- Index pour la table `payer`
--
ALTER TABLE `payer`
  ADD PRIMARY KEY (`fk_typepai`,`fk_cli`),
  ADD UNIQUE KEY `ind_id_cli_typepaie` (`fk_typepai`,`fk_cli`);

--
-- Index pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`fk_vhc`,`fk_cli`),
  ADD UNIQUE KEY `ind_id_posseder` (`fk_vhc`,`fk_cli`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id_prestation`),
  ADD KEY `marchandise_prestation` (`fk_marc`),
  ADD KEY `marchandise_article` (`fk_art`) USING BTREE;

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_marc`),
  ADD UNIQUE KEY `ind_id_produit` (`id_marc`),
  ADD KEY `produit_marchandise` (`fk_marc`),
  ADD KEY `ind_fk_media` (`fk_med`),
  ADD KEY `ind_fk_cat` (`fk_cat`) USING BTREE,
  ADD KEY `ind_fk_type` (`fk_type`) USING BTREE,
  ADD KEY `ind_fk_marq` (`fk_marq`) USING BTREE;

--
-- Index pour la table `type_paiement`
--
ALTER TABLE `type_paiement`
  ADD PRIMARY KEY (`id_typepai`),
  ADD UNIQUE KEY `pk_ind_typepaie` (`id_typepai`);

--
-- Index pour la table `type_produit`
--
ALTER TABLE `type_produit`
  ADD PRIMARY KEY (`id_type_produit`),
  ADD UNIQUE KEY `pk_type` (`id_type_produit`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vhc`),
  ADD UNIQUE KEY `ind_id_vehicule` (`id_vhc`),
  ADD KEY `fk_classe` (`fk_classe`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lier`
--
ALTER TABLE `lier`
  MODIFY `id_lier` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `habiter` FOREIGN KEY (`fk_loc`) REFERENCES `localite` (`id_loc`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_passe_par_client` FOREIGN KEY (`fk_cli`) REFERENCES `client` (`id_cli`),
  ADD CONSTRAINT `marchandises_faire_partie_de_commande` FOREIGN KEY (`fk_marc`) REFERENCES `marchandises` (`id_marc`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `option_est_contenue` FOREIGN KEY (`fk_opt`) REFERENCES `option_prestation` (`id_opt`),
  ADD CONSTRAINT `prestation_contient_option` FOREIGN KEY (`fk_marc`) REFERENCES `prestation` (`id_prestation`);

--
-- Contraintes pour la table `fabricant`
--
ALTER TABLE `fabricant`
  ADD CONSTRAINT `est_produit` FOREIGN KEY (`fk_art`) REFERENCES `article` (`id_art`);

--
-- Contraintes pour la table `lier`
--
ALTER TABLE `lier`
  ADD CONSTRAINT `media_lier_marchandises` FOREIGN KEY (`fk_med`) REFERENCES `media` (`id_med`),
  ADD CONSTRAINT `prestation_lier_media` FOREIGN KEY (`fk_prestation`) REFERENCES `prestation` (`id_prestation`);

--
-- Contraintes pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD CONSTRAINT `prestation_refmarchandise` FOREIGN KEY (`fk_marc`) REFERENCES `marchandises` (`id_marc`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_media` FOREIGN KEY (`fk_med`) REFERENCES `media` (`id_med`),
  ADD CONSTRAINT `produit_refmarchandise` FOREIGN KEY (`fk_marc`) REFERENCES `produit` (`id_marc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
