-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 mai 2021 à 01:40
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdplantes`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE DATABASE IF NOT EXISTS `bdplantes`;
USE `bdplantes`;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `IdUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ajoutplante`
--

DROP TABLE IF EXISTS `ajoutplante`;
CREATE TABLE IF NOT EXISTS `ajoutplante` (
  `IdUtilisateur` int(11) NOT NULL,
  `idPlante` int(11) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`,`idPlante`),
  KEY `idPlante` (`idPlante`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoirma`
--

DROP TABLE IF EXISTS `avoirma`;
CREATE TABLE IF NOT EXISTS `avoirma` (
  `idPlante` int(11) NOT NULL,
  `idMA` int(11) NOT NULL,
  PRIMARY KEY (`idPlante`,`idMA`),
  KEY `idMA` (`idMA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultexo`
--

DROP TABLE IF EXISTS `consultexo`;
CREATE TABLE IF NOT EXISTS `consultexo` (
  `IdUtilisateur` int(11) NOT NULL,
  `idExo` int(11) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`,`idExo`),
  KEY `idExo` (`idExo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultplante`
--

DROP TABLE IF EXISTS `consultplante`;
CREATE TABLE IF NOT EXISTS `consultplante` (
  `IdUtilisateur` int(11) NOT NULL,
  `idPlante` int(11) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`,`idPlante`),
  KEY `idPlante` (`idPlante`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

DROP TABLE IF EXISTS `exercice`;
CREATE TABLE IF NOT EXISTS `exercice` (
  `idExo` int(11) NOT NULL AUTO_INCREMENT,
  `titreExo` varchar(50) DEFAULT NULL,
  `lienExo` varchar(50) DEFAULT NULL,
  `enonceExo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idExo`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exercice`
--

INSERT INTO `exercice` (`idExo`, `titreExo`, `lienExo`, `enonceExo`) VALUES
(1, 'Addition', 'Addition.html', ' Dans cet exercice on vous demande de calculer la somme de 2 nombres grace à des champs de saisie'),
(2, 'Soustraction', 'Soustraction.html', 'Dans cet exercice on vous demande de calculer la différence de 2 nombres grace à des champs de saisie.'),
(3, 'Multiplication', 'Multiplication.html', 'Dans cet exercice on vous demande de calculer le produit de 2 nombres grace à des champs de saisie.'),
(4, 'Division', 'Division.html', 'Dans cet exercice on vous demande de calculer le quotient de 2 nombres grace à des champs de saisie.'),
(5, 'Deal', 'Deal.html', ' Dans cet exercice on vous demande de saisir des produits, leurs régions ainsi que leurs prix pour calculer leur montant.'),
(6, 'Epsilone', 'Epsilone.html', ' Dans cet exercice on vous demande de réaliser la fonction Epsilone tttttttttttttttttttttttttttttttt rrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrr.'),
(7, 'Equation du 2nd degré', 'Equation2nd.html', 'Dans cet exercice on vous demande de résoudre une équation du 2nd degré dans R.'),
(8, 'Factorielle', 'Factorielle.html', 'Dans cet exercice on vous demande de calculer la factorielle d\'un nombre saisit par l\'utilisateur.'),
(9, 'Fibo1', '', 'Dans cet exercice on vous demande de calculer la somme de Fibonacci d\'un nombre saisi par l\'utilisateur.'),
(10, 'Fibonacci', 'Fibonacci.html', ' Dans cet exercice on vous demande de calculer la somme de Fibonacci d\'un nombre saisi par l\'utilisateur.'),
(11, 'Fibonacci2', 'Fibonacci2.html', ' Dans cet exercice on vous demande de calculer la somme de Fibonacci d\'un nombre saisi par l\'utilisateur.'),
(12, 'Cercle', 'Cercle.html', ' Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(13, 'Tableau', 'Tableau.html', ' Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(14, 'Inversion', 'Inversion.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(15, 'Age', 'Age.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(16, 'Majuscule', 'Maj.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(17, 'Minuscule', 'Min.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(18, 'Moyenne', 'Moyenne.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.'),
(19, 'Date', 'Date.html', 'Dans cet exercice on vous demande de calculer le périmètre et l\'aire d\'un cercle dont on a saisi les données.');

-- --------------------------------------------------------

--
-- Structure de la table `modeadministration`
--

DROP TABLE IF EXISTS `modeadministration`;
CREATE TABLE IF NOT EXISTS `modeadministration` (
  `idMA` int(11) NOT NULL AUTO_INCREMENT,
  `libMA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMA`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modeadministration`
--

INSERT INTO `modeadministration` (`idMA`, `libMA`) VALUES
(1, 'Par Boisson'),
(2, 'Par Creme'),
(3, 'Par Decoction'),
(4, 'Par Feuille'),
(5, ' Par Racine'),
(6, 'Par Seve'),
(7, 'Par Tige'),
(8, 'Par Vapeur');

-- --------------------------------------------------------

--
-- Structure de la table `modifieexo`
--

DROP TABLE IF EXISTS `modifieexo`;
CREATE TABLE IF NOT EXISTS `modifieexo` (
  `idExo` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idExo`,`IdUtilisateur`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `modifieplante`
--

DROP TABLE IF EXISTS `modifieplante`;
CREATE TABLE IF NOT EXISTS `modifieplante` (
  `idPlante` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idPlante`,`IdUtilisateur`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

DROP TABLE IF EXISTS `plante`;
CREATE TABLE IF NOT EXISTS `plante` (
  `idPlante` int(11) NOT NULL AUTO_INCREMENT,
  `nomPlante` varchar(50) DEFAULT NULL,
  `lienPlante` varchar(50) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `Stade` varchar(30) NOT NULL,
  PRIMARY KEY (`idPlante`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`idPlante`, `nomPlante`, `lienPlante`, `image`, `description`, `Stade`) VALUES
(1, 'Adenia Lobata', 'adenia-lobata-description.html', '../img/plantes/adenia_lobota.png', 'Adenia lobata est une liane robuste, dont la tige peut avoir jusqu’à 12 cm de diamètre, et s’élever jusqu’à 45 m de hauteur. La plante est présente en Afrique subsaharienne : vers le nord, du Sénégal jusqu’en Éthiopie, et...', 'Peu Avancé'),
(2, 'agave', 'agave-description.html', '../img/plantes/agave.png', 'L\'agave decipiens est une plante succulente à feuilles persistantes en forme d\'arbre avec une tige de 1 à 3 mètres de haut surmontée d\'une dense rosette de feuilles en forme d\'épée, généralement de...', 'Peu Avancé'),
(3, 'Ageratum', 'ageratum-description.html', '../img/plantes/ageratum.png', 'Plante dressée, peu ramifiée, mesurant jusqu\'à 1,20 m de haut. Tiges et branches couvertes de longs poils blancs. Feuilles simples, entières, opposées, pétiolées, ovales, parfois...', 'Peu Avancé'),
(4, 'alchornea', 'alchornea2-description.html', '../img/plantes/alchornea2.png', 'C\'est un arbuste pouvant atteindre quelques mètres de haut avec de nombreuses branches depuis la base, dressée, évasées, parfois retombantes selon l\'endroit où la plante pousse...', 'Avancé'),
(5, 'Artemisia annua', 'Artemisia annua-description.html', '../img/plantes/Artemisia annua.png', 'Artemisia annua est une plante herbacée annuelle, très ramifiée, fortement aromatique, pouvant atteindre 1,6 m de haut (voire 3 m). La plante est d\'abord faiblement pubérulente et raidement glabre...', 'Avancé'),
(6, 'Azadirachta indica', 'azadirachta-description.html', '../img/plantes/azadirachta.png', 'Le neem est un arbre monoïque à croissance rapide, qui peut atteindre une hauteur de 20 mètres, et plus rarement 35 à 40 mètres. Des preuves de son utilisation ont été trouvées lors de fouilles à Harappa...', 'Avancé'),
(7, 'Biden pilosa', 'biden_pilosa-description.html', '../img/plantes/biden_pilosa.png', 'Plante herbacée annuelle érigée, jusqu’à 100 cm de haut, à tiges fines, raides et quadrangulaires et rameaux étalés. Feuilles opposées décussées, pennées à 3–5 folioles, jusqu’à 15(–20) cm de long, les feuilles inférieures parfois...', 'Avancé'),
(8, 'Boerhavia diffusa', 'Boerhavia diffusa-description.html', '../img/plantes/Boerhavia diffusa.png', 'Boerhavia diffusa est une plante herbacée prostrée ou érigée, très ramifiée, atteignant 1 m de haut. Les tiges et les feuilles plus ou moins couvertes de cils blancs épars. Les feuilles opposées, de tailles inégales, à face...', 'Peu Avancé'),
(9, 'Carica papaya', 'carica-papaya-description.html', '../img/plantes/carica-papaya.png', 'Arbre ou arbuste persistant (hauteur : 3-8 m), submonocaule. Feuilles suborbiculaires (longueur : 70 cm), palmatilobées à palmatifides, composées de 7-11 lobes, aux marges dentées à subpinnatifides...', 'Peu Avancé'),
(10, 'Chromolaena', 'chromolaena_odorata-description.html', '../img/plantes/chromolaena_odorata.png', 'Chromolaena odorata est une plante buissonnante à tige lignifiée, étalée et très ramifiée, qui constitue des massifs denses. Elle peut atteindre jusqu\'à 7m de hauteur. Elle est entièrement couverte d\'une...', 'Avancé'),
(11, 'Cymbopogon', 'Cymbopogon citratus-description.html', '../img/plantes/Cymbopogon citratus.png', 'Plante herbacée à longues feuilles linéaires, dressées, de 90 cm à 2 m de long, à bords rugueux et coupants, de couleur vert bleuté assez pâle.Tiges creuses, bulbeuses à la base, enveloppées dans la gaine des feuilles...', 'Peu Avancé'),
(12, 'Enantia polycarpa', 'enantia-description.html', '../img/plantes/enantia.png', 'elles sont représentées dans tous les groupements végétaux des tropiques. C\'est aussi une famille qui a pour certains une valeur d\'ordre. Les Annonaceae réalisent des progrès remarquables dans...', 'Avancé'),
(13, 'Harungana', 'Harungana-description.html', '../img/plantes/Harungana_madagascariensis_Bioko.png', 'Harungana, aussi appelé bois harongue ou haronga, est une espèce d\'arbuste de la famille des Hypericaceae. Cet arbre fruitier, est une plante originaire de Madagascar et pousse dans les forêts d\'Afrique tropicale...', 'Peu Avancé'),
(14, 'jatropha gossypiifolia', 'jatropha gossypiifolia-description.html', '../img/plantes/jatropha gossypiifolia.png', 'Petit buisson atteignant 3 m de hauteur, contenant un latex blanc, et présentant des poils glanduleux sur les tiges, les pétioles et le bord des feuilles. Feuilles simples, de couleur verte ou pourpre, luisant...', 'Peu Avancé'),
(15, 'Jatropha curcas', 'Jatropha_curcas-description.html', '../img/plantes/Jatropha_curcas_henning.png', 'Jatropha curcas (ou Curcas curcas) est une espèce d\'arbuste de la famille des Euphorbiaceae originaire du Brésil. Bien qu\'étant toxique, cette plante est cultivée notamment pour la production d\'huile à usage...', 'Peu Avancé'),
(16, 'Senna siamea', 'Kassod-description.html', '../img/plantes/Senna siamea.png', 'Senna siamea, appelé aussi Cassia du Siam ou casse du Siam, est une espèce d\'arbre de la famille des Fabaceae originaire d\'Asie du Sud-Est (Thaïlande, Siam), mais qui a été récemment largement diffusée et...', 'Peu Avancé'),
(17, 'Theobroma cacao', 'Merremia tuberos-description.html', '../img/plantes/Theobroma cacao.png', 'Aussi appelé cacao ou cacaotier, le cacaoyer (Theobroma cacao) est un petit arbre à feuilles persistantes du genre Theobroma de la famille des Sterculiacées, selon la classification classique, ou des Malvacées, selon...', 'Avancé'),
(18, 'Momordica Charantia', 'Momordica charantia-description.html', '../img/plantes/Momordica charantia.png', 'Plante annuelle grimpante et tapissante dont la hauteur peut atteindre 5 m. Les tiges sont délicates et munies de vrilles simples. Les feuilles alternes sont de forme comparable aux feuilles de vigne, les limbes ont...', 'Avancé'),
(19, 'Morinda jasminoides', 'Morinda jasminoides-description.html', '../img/plantes/Morinda jasminoides.png', 'Morinda est un genre de plantes à fleurs de la famille des Rubiaceae. Il en existe environ 80 espèces réparties dans toutes les régions tropicales du monde. Elles se présentent sous forme d\'arbres, de lianes et d\'arbustes...', 'Avancé'),
(20, 'Newbouldia laevis', 'Newbouldia laevis-description.html', '../img/plantes/Newbouldia laevis.png', 'Newbouldia laevis se présente sous la forme d\'un arbre pouvant atteindre 20 m de haut et qui se recèpe lorsqu\'on les coupe. Il est composé de feuilles imparipennées (donc la nervure axiale est terminée par...', 'Avancé'),
(21, 'Ocimum gratissimum', 'Ocimum_gratissimum-description.html', '../img/plantes/Ocimum_gratissimum.png', 'Ocimum gratissimum ou Ocimum suave est un basilic pérenne qui pousse sous forme d’arbrisseau ou de buissons qui peuvent atteindre jusqu’à deux mètres de hauteur. Ses feuilles aromatiques ovées ou elliptiques, ont des bords...', 'Avancé'),
(22, 'Picralima Nitida', 'Picralima Nitida-description.html', '../img/plantes/Picralima Nitida.png', 'Picralima nitida est une espèce de plantes d\'Afrique de l\'Ouest du genre Picralima dans la famille des Apocynaceae. Le nom commun est Akuamma,Obéra, demouain a gros fruits et ebam L’espèce contient l’alcaloïde et...', 'Peu Avancé'),
(23, 'Rauvolfia vomitoria', 'Rauvolfia vomitoria-description.html', '../img/plantes/Rauvolfia vomitoria.png', 'Arbre de taille petite à moyenne atteignant 20(–40) m de haut ; fût atteignant 80 cm de diamètre ; écorce pâle à gris-brun foncé ou brun foncé, lisse ou fissurée. Feuilles en verticilles de 3–5, groupées à l’extrémité des...', 'Avancé'),
(24, 'Terminalia mantaly', 'Tectona grandis-description.html', '../img/plantes/Tectona grandis.png', 'Arbre caducifolié de taille moyenne atteignant 40(–50) m de haut ; fût généralement droit et sans branches jusqu’à 20 m, atteignant 150(–200) cm de diamètre, cannelé à la base ou à contreforts bas ; écorce...', 'Avancé'),
(25, 'Terminalia mantaly', 'Terminalia mantaly-description.html', '../img/plantes/Terminalia mantaly.png', 'Liane mince atteignant 12 m de long, écorce brun foncé, toutes les parties contenant du latex. Feuilles opposées, simples et entières ; pétiole atteignant 4 mm de long ; limbe oblong ou ovale à oblong-elliptique, de...', 'Avancé'),
(26, 'Theobroma cacao', 'Theobroma cacao-description.html', '../img/plantes/Theobroma cacao.png', 'Aussi appelé cacao ou cacaotier, le cacaoyer (Theobroma cacao) est un petit arbre à feuilles persistantes du genre Theobroma de la famille des Sterculiacées, selon la classification classique, ou des Malvacées, selon...', 'Peu Avancé');

-- --------------------------------------------------------

--
-- Structure de la table `supplante`
--

DROP TABLE IF EXISTS `supplante`;
CREATE TABLE IF NOT EXISTS `supplante` (
  `idPlante` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idPlante`,`IdUtilisateur`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prenomUtilisateur` varchar(50) DEFAULT NULL,
  `mdpUtilisateur` varchar(100) DEFAULT NULL,
  `mailUtilisateur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
