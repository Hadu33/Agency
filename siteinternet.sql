-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juil. 2021 à 14:52
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteinternet`
--

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `idlocation` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lieu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `budget` int NOT NULL,
  `photoprofil` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descript` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lien` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idlocation`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`idlocation`, `type`, `lieu`, `budget`, `photoprofil`, `titre`, `descript`, `lien`) VALUES
(1, 'Appartement', 'Bordeaux', 2000000, 'imgSlide3/appartements3.jpg', 'Appartement au coeur de Bordeaux', 'Magnifique immeuble au centre de Bordeaux juste à coté du quartier d\'affaire.', 'louerappartement.php'),
(2, 'Voiture', 'Bordeaux', 2000, 'imgSlide3/lambor.jpg', 'LAMBORGHINI AVENTADOR', 'Marque : LAMBORGHINI AVENTADOR\r\nPuissance : 700 ch à 8250 tr/min\r\nCarburant : Essence\r\nBoîte de vitesse :Robotisée a 7 rapports\r\nCylindré : 6498 cm3\r\nCouleur :Orange Or\r\nNbre de Places : 2\r\nIntérieur :Alcantara\r\n', 'louervoiture1.php'),
(3, 'Voiture', 'Bordeaux', 2000, 'imgSlide3/ferrari.jpg', ' Ferrari F40', 'Marque :  Ferrari F40\r\nPuissance : 478 chevaux à 7000 tr/min\r\nCarburant : Essence\r\nBoîte de vitesse : 5 rapports\r\nCylindré : 2936 cc\r\nCouleur :Rouge\r\nNbre de Places : 2\r\nIntérieur :Cuir Noir\r\n\r\n', 'louervoiture2.php'),
(4, 'Maison', 'Bordeaux', 5000000, 'imgMini/SAM_0215.jpg', 'Magnifique Maison en plein coeur de Bordeaux ', 'cette magnifique maison de 200 m2 transformée en loft, au centre de BORDEAUX. Dès l\'entrée, vous serez séduits \r\n			par une majestueuse pièce de vie d\'environ 120m2, baignée de lumière et bénéficiant d\'une belle hauteur sous plafond. \r\n			Le séjour avec cheminée, la salle à manger et la cuisine ouverte, équipée et aménagée ouvrent sur deux patios dans lesquels,\r\n			 vous pourrez vous prélasser au soleil, à l\'abri des regards. A ce niveau, vous découvrirez également un bel espace parental,\r\n			  s\'articulant autour du patio comprenant : un bureau avec rangements, une chambre avec rangements, un dressing,\r\n				 une salle de bains et un WC. Une buanderie et un WC complètent le rez-de-chaussée. L\'étage, accessible par deux escaliers, \r\n				 dessert d\'une part une chambre avec salle de bains, de nombreux rangements et un WC et d\'autre part deux chambres avec chacune,\r\n				  leur salle d\'eau et leur WC. Un grand garage 2 places et une cave complètent ce loft aux dimensions exceptionnelles. \r', 'louermaison.php');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `privilege` int DEFAULT NULL,
  `civilite` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nom` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `codepostal` int NOT NULL,
  `ville` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pays` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone` int NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dateinscript` date NOT NULL,
  `lastconnex` date NOT NULL,
  `panier` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `poste` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motdepasse` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photoprofil` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `privilege`, `civilite`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `pays`, `telephone`, `email`, `dateinscript`, `lastconnex`, `panier`, `poste`, `motdepasse`, `photoprofil`) VALUES
(14, NULL, 'M', 'lapin', 'coco', '14 rue des 3 etoiles', 75000, 'paris', 'France', 607080910, 'akimdjibri@gmail.com', '2021-07-18', '0000-00-00', '', '', '607080910', 'PP_du_20210718210531.jpg'),
(15, NULL, 'M', 'coco', 'lapin', '12 rue de la chance', 33000, 'bordeaux', 'France', 607080910, 'arezkidjibri@gmail.com', '2021-07-23', '0000-00-00', '', '', '607080910', 'PP_du_20210723153644.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nouscontacter`
--

DROP TABLE IF EXISTS `nouscontacter`;
CREATE TABLE IF NOT EXISTS `nouscontacter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomc` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `emailc` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telephonec` int NOT NULL,
  `objet` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nouscontacter`
--

INSERT INTO `nouscontacter` (`id`, `nomc`, `emailc`, `telephonec`, `objet`, `message`) VALUES
(5, 'coco lapin', 'arezkidjibri@gmail.com', 607080910, 'bravo', 'merci votre site est super'),
(6, 'coco lapin', 'arezkidjibri@gmail.com', 607080910, 'bravo', 'merci votre site est super'),
(7, 'coco', 'coco@gmail.com', 607080310, 'bravo', 'bravo');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idpersonne` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `titre`, `idpersonne`) VALUES
(8, 'Maison située à Bordeaux', 15),
(9, 'Maison située à Bordeaux', 15);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `idVente` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lieu` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `budget` double DEFAULT NULL,
  `photoprofil` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descript` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idVente`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`idVente`, `type`, `lieu`, `budget`, `photoprofil`, `titre`, `descript`, `lien`) VALUES
(1, 'Maison', 'Bordeaux', 4000000, 'imgSlide3/maisons11.jpg', 'Maison située en plein centre ville de Bordeaux au coeur du quartier d\'affaire et à coté des commerc', 'Magnifique propriété (475 m²) du 19ème siècle à moins de 15 minutes de Bordeaux et de la gare Saint-Jean.\r\n			 Implantée dans un parc arboré d\'environ 1.5 hectares avec une deuxième maison (200 m²), de nombreuses dépendances (400 m²)\r\n			  et une piscine. L\'accès à la propriété se fait par une longue allée privée qui traverse le parc. Le château se distingue par une très belle symétrie architecturale \r\n				et se développe sur 3 niveaux. Dont 3.50 % honoraires TTC à la charge de l\'acquéreur', 'achetermaison1.php'),
(2, 'Maison', 'Bordeaux', 1000000, 'imgMini/SAM_0215.jpg', 'En Plein centre ville de Bordeaux', 'Magnifique rénovation par un architecte de renom pour cette maison traitée de façon contemporaine avec de très jolies matériaux. La maison qui se compose de plain-pieds d\'une entrée donnant sur une grande pièce de réception avec cheminée à l\'éthanol ouvrant sur le jardin avec piscine chauffée de 10 m de long, d\'une cuisine et d\'une chambre parentale avec ses dressings, salle de douche et sauna. Au premier étage, 4 chambres avec une salle de bain et une salle de douche. Au deuxième étage, un grand espace salon télé. Une place de parking complète ce bien rare [...]', 'achetermaison2.php'),
(3, 'Immeuble', 'Bordeaux', 25000000, 'imgMini/DSC_0541.jpg', 'Immeuble situé à Bordeaux', 'Le territoire de Bordeaux Euratlantique sort de l’ombre pour séduire de nouveaux investisseurs français ou étrangers. La capitale de la Nouvelle Aquitaine et sa région sont devenues modernes et attractives, et leur élégance et leur plaisir de vivre devraient vous convaincre de venir y acheter un bien immobilier de luxe.', 'acheterimmeuble1.php'),
(4, 'Immeuble', 'Bordeaux', 15000000, 'imgSlide3\\immeubletwenty.jpg', 'Immeuble situé à Bordeaux', 'L\'immeuble de la place Gambetta est un immeuble de 4 niveaux de 3 appartements\r\n		Chaque appartement comprend 3 chambres, 1 salle d’eau, un séjour, une salle à manger et une cuisine. L’immeuble a un grand garage en sous-sol capable de contenir 15 voitures. Par contre il ne propose pas de groupe électrogène mais un surpresseur en cap de coupure d’eau. Situé en plein cœur de Bordeaux, proche des commerces et diverses attractions pour les enfants, ainsi que les écoles.\r\n		un appartement Umlyobe constitue un cadre agréable pour vous et votre famille', 'acheterimmeuble2.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
