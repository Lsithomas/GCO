-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 31 Mai 2014 à 17:24
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(13) NOT NULL AUTO_INCREMENT,
  `idfamillearticle` int(13) NOT NULL,
  `idsousfamillearticle` int(13) NOT NULL,
  `idfournisseur` int(13) NOT NULL,
  `ref_fournisseur` varchar(255) NOT NULL,
  `ref_interne` varchar(255) NOT NULL,
  `desc_court` varchar(255) NOT NULL,
  `desc_long` longtext NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `duree_garantie` varchar(255) NOT NULL,
  `stock_minima` varchar(255) NOT NULL,
  `stock_reel` varchar(255) NOT NULL,
  `code_barre` varchar(255) NOT NULL,
  `prix_achat_ht` varchar(255) NOT NULL,
  `prix_vente_ht` varchar(255) NOT NULL,
  `prix_vente_ttc` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `images2` varchar(255) NOT NULL,
  `images3` varchar(255) NOT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idarticle`, `idfamillearticle`, `idsousfamillearticle`, `idfournisseur`, `ref_fournisseur`, `ref_interne`, `desc_court`, `desc_long`, `date_debut`, `date_fin`, `num_serie`, `poids`, `duree_garantie`, `stock_minima`, `stock_reel`, `code_barre`, `prix_achat_ht`, `prix_vente_ht`, `prix_vente_ttc`, `images`, `images2`, `images3`) VALUES
(2, 6, 6, 3, 'GT-P5210ZWAXEF', 'GT-P5210ZWAXEF', 'Tablette Samsung Galaxy Tab 3 10,1" 16Go (Wi-Fi) Blanc', '\nUn design tout en finesse et en élégance\nLe design élancé de la nouvelle GALAXY Tab 3 (10.1) s’appuie sur sa forme plus légère et fine pour laisser place à son incroyable écran large 10.1”. De prise en main confortable, elle offre une expérience visuelle d’exception.\nUn affichage 10.1" WXGA saisissant de netteté\nL’écran 10.1” de résolution WXGA (1280 x 800, 149 PPI) garantit un rendu clair, net et incroyablement précis de toutes vos photos et vidéos en haute résolution.\nUn son de haute qualité\nSi vous êtes passionné de musique, le système d’optimisation audio Sound Alive saura apporter à vos oreilles expertes le régal sonore qu’elles attendent. Écoutez vos musiques préférées avec des basses boostées et une définition sonore accrue.\nGrâce au système Dolby Surround, vous pourrez bénéficier d’une immersion totale dans vos vidéos préférées.\nTélécommande universelle\nTrouvez facilement votre contenu télévisé préféré en consultant les listes des meilleures sériés télé recommandées par le guide. Contrôlez votre télévision en toute simplicité en utilisant la fonction télécommande.\n\n* Ce service peut varier selon les pays et les opérateurs\n \nPartagez en Wi-Fi\nLa GALAXY Tab 3 (10.1”) intègre un canal 2,4 GHz et 5 GHz qui permet d’atteindre une vitesse de transfert de données deux fois supérieure (143 Mb/s) pour partager vos contenus en toute rapidité.\nSamsung Hub Services\nQue vous soyez allongé sur votre canapé, en train de jouer dans le salon ou bien de lire une histoire à vos enfants le soir, profitez d’un contenu numérique étendu à partager en toute convivialité. Achetez ou louez des films grâce à au Video Hub. Avec la fonction téléchargement progressif, n’attendez plus : regardez immédiatement, pendant qu’il se télécharge. Cherchez, testez, achetez des morceaux dans Music Hub. Des millions de chansons vous attendent. Game Hub vous fournit tout un ensemble de jeux premium et multi-joueurs... Plongez dans l’action, où que vous soyez, dès que vous le souhaitez.\n\n* Ce service peut varier selon les pays et les opérateurs\nStory Album\n\nLaissez la GALAXY Tab 3 (10.1) organiser vos photos et créer des albums par événement, ou bien personnalisez-les à votre guise. Vous pouvez aussi appliquer le thème qui vous plaît et choisir divers types d’affichage. Faites-en un album papier en toute simplicité.\n', '26-05-2014', '', '', '0.510', '1', '0', '0', '8806085583894', '189.89', '274.17', '329.00', 'http://www.1foteam.com/img/produit/400/Tablette-Samsung-Galaxy-Tab-3-10,1-16-Go-Wi-Fi-Blanc-30531.jpg', 'http://www.1foteam.com/img/produit/200/Tablette-Samsung-Galaxy-Tab-3-10,1-16-Go-Wi-Fi-Blanc-30533.jpg', 'http://www.1foteam.com/img/produit/200/Tablette-Samsung-Galaxy-Tab-3-10,1-16-Go-Wi-Fi-Blanc-30532.jpg'),
(3, 7, 61, 3, 'WD5000AAKX', 'WD5000AAKX', 'Disque Dur Western Digital 500 Go S-ATA 3 - (6 Gb/s) - Caviar Blue', '', '26-05-2014', '', '', '', '3', '2', '2', '0718037773421', '34.28', '49.17', '59.00', 'http://www.1foteam.com/img/produit/400/Disque-Dur-Western-Digital-500-Go-S-ATA-3---6-Gbs---Caviar-Blue-WD5000AAKX-22170.jpg', '', ''),
(4, 8, 88, 3, 'ATX-5100S', 'ATX-5100S', 'Alimentation ATX Advance ATX-5100S 480W ECO', '', '26-05-2014', '', '', '', '1', '0', '0', '3700104416451', '12.96', '20.75', '24.90', 'http://www.1foteam.com/img/produit/400/Alimentation-ATX-Advance-ATX-5100S-480W-ECO-25917.jpg', '', ''),
(5, 9, 99, 3, 'TL-PA4015PKIT', 'TL-PA4015PKIT', 'Adaptateur CPL TP-Link TL-PA4015PKIT HomePlug AV 500 Mbits (pack de 2) + prise intÃ©grÃ©e', '', '26-05-2014', '', '', '', '1', '0', '0', '6935364032067', '36.94', '54.08', '64.90', 'http://www.1foteam.com/img/produit/400/Adaptateur-CPL-TP-Link-TL-PA4015PKIT-HomePlug-AV-500-Mbits-pack-de-2--prise-integree-28622.jpg', '', ''),
(6, 6, 1, 3, 'T100TA-DK002H', 'T100TA-DK002H', 'Ordinateur portable / tablette ASUS T100TA-DK002H Tactile (10,1")', '', '26-05-2014', '', '', '1.2', '1', '0', '0', '4716659585053', '399.00', '574.17', '689.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable--tablette-ASUS-T100TA-DK002H-Tactile-10,1-30486.png', '', ''),
(7, 6, 1, 3, 'T100TA-DK005H', 'T100TA-DK005H', 'Ordinateur portable / tablette ASUS T100TA-DK005H Tactile (10,1")', '', '26-05-2014', '', '', '1.2', '1', '0', '0', '4716659616078', '459.00', '657.50', '789.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable--tablette-ASUS-T100TA-DK005H-Tactile-10,1-32118.png', '', ''),
(8, 6, 1, 3, 'DK003P', 'DK003P', 'Ordinateur portable / tablette ASUS T100TA-DK003P Tactile (10,1")', '', '26-05-2014', '', '', '1.2', '1', '0', '0', '4716659667261', '519.00', '740.83', '889.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable--tablette-ASUS-T100TA-DK003P-Tactile-10,1-32119.png', '', ''),
(9, 6, 2, 3, 'NX.MFREF.012', 'NX.MFREF.012', 'Ordinateur portable ACER V5-123-12104G50nss (11,6")', '', '26-05-2014', '', '', '1.2', '1', '0', '0', '4713147213924', '239.49', '332.50', '399.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ACER-V5-123-12104G50nss-11,6-32271.jpg', '', ''),
(10, 6, 2, 3, 'NX.M8WEF.007', 'NX.M8WEF.007', 'Ordinateur portable ACER V5-122P-42154G50Nss Tactile (11,6")', '', '26-05-2014', '', '', '1.3', '1', '0', '0', '4713147213795', '263.26', '374.17', '449.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ACER-V5-122P-42154G50Nss-Tactile-11,6-31420.jpg', '', ''),
(11, 6, 2, 3, 'F200CA-KX020H', 'F200CA-KX020H', 'Ordinateur portable ASUS F200CA-KX020H Blanc (11,6")', '', '26-05-2014', '', '', '1.24', '2', '0', '0', '4716659537762', '250.00', '357.50', '429.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ASUS-F200CA-KX020H-Blanc-11,6-30889.jpg', '', ''),
(12, 6, 2, 3, 'X200CA-CT048H', 'X200CA-CT048H', 'Ordinateur portable ASUS X200CA-CT048H Tactile Blanc (11,6")', '', '26-05-2014', '', '', '1.2', '2', '0', '0', 'X200CA-CT048H', '310.92', '440.83', '529', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ASUS-X200CA-CT048H-Tactile-Blanc-11,6-31383.jpg', '', ''),
(13, 6, 2, 3, 'X200MA-CT016H', 'X200MA-CT016H', 'Ordinateur portable ASUS X200MA-CT016H Tactile Noir (11,6")', '', '26-05-2014', '', '', '1.2', '2', '0', '0', '4716659702139', '307.77', '440.83', '529.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ASUS-X200MA-CT016H-Tactile-Noir-11,6-32543.jpg', '', ''),
(14, 6, 2, 3, 'NX.C3BMF.002', 'NX.C3BMF.002', 'Ordinateur portable Packard Bell ME69BMP-28052G50Nii Tactile (11,6")', '', '26-05-2014', '', '', '1.22', '1', '0', '0', '4713147031412', '242.08', '332.50', '399.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-Packard-Bell-ME69BMP-28052G50Nii-Tactile-11,6-31422.jpg', '', ''),
(15, 6, 3, 3, 'NX.MGREF.007', 'NX.MGREF.007', 'Ordinateur portable ACER Aspire E1-510-29204G50Mnkk (15,6")', '', '26-05-2014', '', '', '2.35', '1', '0', '0', '4713147278138', '249.59', '357.50', '429.00', 'http://www.1foteam.com/img/produit/400/Ordinateur-portable-ACER-Aspire-E1-510-29204G50Mnkk-15,6-32786.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(13) NOT NULL AUTO_INCREMENT,
  `iduser` int(13) NOT NULL,
  `raison_social` varchar(255) NOT NULL,
  `num_siret` varchar(255) NOT NULL,
  `num_tva` varchar(255) NOT NULL,
  `civilite` int(2) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mode_paiement_default` int(1) NOT NULL,
  `code_banque` varchar(5) NOT NULL,
  `code_guichet` varchar(5) NOT NULL,
  `code_cpt` varchar(20) NOT NULL,
  `cle_rib` varchar(2) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL,
  `encour` varchar(255) NOT NULL,
  `mail_paypal` varchar(255) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `iduser`, `raison_social`, `num_siret`, `num_tva`, `civilite`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `mail`, `mode_paiement_default`, `code_banque`, `code_guichet`, `code_cpt`, `cle_rib`, `iban`, `bic`, `encour`, `mail_paypal`) VALUES
(5, 2, 'LSI INFORMATIQUE', '753 865 229 00011', 'FR56 753 865 229', 1, 'MOCKELYN', 'Maxime', '35 Avenue de Bretagne', 'Batiment A<br>\r\nRésidence du Port', 85100, 'LES SABLES D OLONNE', '02 51 23 24 24', '', '06 33 13 43 30', 'contact@lsiinformatique.fr', 0, '12345', '1234', '000000000', '00', 'FR75 1234 5123 0000000000', 'CMCIXXX', '2500', 'contact@lsiinformatique.fr');

-- --------------------------------------------------------

--
-- Structure de la table `cmd_cli`
--

CREATE TABLE IF NOT EXISTS `cmd_cli` (
  `idcmdcli` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `date` varchar(255) NOT NULL,
  `etat_cmd_cli` int(1) NOT NULL,
  `date_liv_cmd_cli` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `ptht_cmd_cli` varchar(255) NOT NULL,
  `taxe_cmd_cli` int(1) NOT NULL,
  `ptttc_cmd_cli` varchar(255) NOT NULL,
  PRIMARY KEY (`idcmdcli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `cmd_cli`
--

INSERT INTO `cmd_cli` (`idcmdcli`, `idclient`, `date`, `etat_cmd_cli`, `date_liv_cmd_cli`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `ptht_cmd_cli`, `taxe_cmd_cli`, `ptttc_cmd_cli`) VALUES
(1, 5, '04-04-2014', 1, '04-04-2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', 1, '12');

-- --------------------------------------------------------

--
-- Structure de la table `cmd_four`
--

CREATE TABLE IF NOT EXISTS `cmd_four` (
  `idcmdfour` int(13) NOT NULL AUTO_INCREMENT,
  `idfournisseur` int(13) NOT NULL,
  `date_cmd_four` varchar(255) NOT NULL,
  `etat_cmd_four` int(1) NOT NULL,
  `date_livraison_cmd_four` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `pvht1` decimal(8,2) NOT NULL,
  `pvht2` decimal(8,2) NOT NULL,
  `pvht3` decimal(8,2) NOT NULL,
  `pvht4` decimal(8,2) NOT NULL,
  `pvht5` decimal(8,2) NOT NULL,
  `pvht6` decimal(8,2) NOT NULL,
  `pvht7` decimal(8,2) NOT NULL,
  `pvht8` decimal(8,2) NOT NULL,
  `pvht9` decimal(8,2) NOT NULL,
  `pvht10` decimal(8,2) NOT NULL,
  `pvht11` decimal(8,2) NOT NULL,
  `pvht12` decimal(8,2) NOT NULL,
  `port` decimal(8,2) NOT NULL,
  `remise` decimal(8,2) NOT NULL,
  `eco-part` decimal(8,2) NOT NULL,
  `ptht_cmd_four` decimal(8,2) NOT NULL,
  `taxe_cmd_four` decimal(8,2) NOT NULL,
  `ptttc_cmd_four` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idcmdfour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `cmd_four`
--

INSERT INTO `cmd_four` (`idcmdfour`, `idfournisseur`, `date_cmd_four`, `etat_cmd_four`, `date_livraison_cmd_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_cmd_four`, `taxe_cmd_four`, `ptttc_cmd_four`) VALUES
(1, 1, '09-04-2014', 1, '', 'ASRock 970 Extreme4 - Carte mï¿½re ATX Socket AM3+ AMD 970 - SATA 6 Gbps - USB 3.0 - 3x PCI Express 2.0 16x', '2', 'ASRock 2Core1333-2.66G (Intel 945GC Express) - Micro ATX + Processeur Intel Pentium Dual-Core E2140', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '104.00', '74.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15.00', '0.00', '0.00', '445.00', '89.00', '535.00'),
(2, 0, '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, 0, '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, 2, '', 1, '23-04-2014', 'PORTABLE PB TV44HC-10054G50Mnws - INTEL CELERON 1005M/4G/500G LED BLANC 15.6', '1', 'WE - BOITIER EXTERNE DISQUE DUR 2.5', '3', 'WE TAB700DG - TABLETTE NOIR 7', '1', 'WE TAB1000 - Tablette 10', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '279.00', '7.90', '45.00', '79.90', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25.00', '0.00', '3.55', '456.15', '91.23', '547.38');

-- --------------------------------------------------------

--
-- Structure de la table `com_support`
--

CREATE TABLE IF NOT EXISTS `com_support` (
  `idcomticket` int(13) NOT NULL AUTO_INCREMENT,
  `idticket` int(13) NOT NULL,
  `iduser` int(13) NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `desc_soluce` longtext NOT NULL,
  PRIMARY KEY (`idcomticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `devis_cli`
--

CREATE TABLE IF NOT EXISTS `devis_cli` (
  `iddeviscli` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `date_devis_cli` varchar(255) NOT NULL,
  `etat_devis_cli` int(1) NOT NULL,
  `date_liv_client` varchar(255) NOT NULL,
  `date_echeance_cli` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `iduser` int(13) NOT NULL,
  `ptht_devis_cli` varchar(255) NOT NULL,
  `taxe_devis_cli` int(1) NOT NULL,
  `ptttc_devis_cli` varchar(255) NOT NULL,
  PRIMARY KEY (`iddeviscli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `devis_cli`
--

INSERT INTO `devis_cli` (`iddeviscli`, `idclient`, `date_devis_cli`, `etat_devis_cli`, `date_liv_client`, `date_echeance_cli`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `iduser`, `ptht_devis_cli`, `taxe_devis_cli`, `ptttc_devis_cli`) VALUES
(1, 5, '04-04-2014', 1, '04-04-2014', '04-05-2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '10', 1, '12');

-- --------------------------------------------------------

--
-- Structure de la table `devis_four`
--

CREATE TABLE IF NOT EXISTS `devis_four` (
  `iddevisfour` int(13) NOT NULL AUTO_INCREMENT,
  `idfournisseur` int(13) NOT NULL,
  `date_devis_four` varchar(255) NOT NULL,
  `etat_devis_four` int(1) NOT NULL,
  `date_echeance_devis_four` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `pvht1` decimal(8,2) NOT NULL,
  `pvht2` decimal(8,2) NOT NULL,
  `pvht3` decimal(8,2) NOT NULL,
  `pvht4` decimal(8,2) NOT NULL,
  `pvht5` decimal(8,2) NOT NULL,
  `pvht6` decimal(8,2) NOT NULL,
  `pvht7` decimal(8,2) NOT NULL,
  `pvht8` decimal(8,2) NOT NULL,
  `pvht9` decimal(8,2) NOT NULL,
  `pvht10` decimal(8,2) NOT NULL,
  `pvht11` decimal(8,2) NOT NULL,
  `pvht12` decimal(8,2) NOT NULL,
  `port` decimal(8,2) NOT NULL,
  `remise` decimal(8,2) NOT NULL,
  `eco-part` decimal(8,2) NOT NULL,
  `ptht_devis_four` decimal(8,2) NOT NULL,
  `taxedevisfour` decimal(8,2) NOT NULL,
  `ptttc_devis_four` decimal(8,2) NOT NULL,
  PRIMARY KEY (`iddevisfour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `devis_four`
--

INSERT INTO `devis_four` (`iddevisfour`, `idfournisseur`, `date_devis_four`, `etat_devis_four`, `date_echeance_devis_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_devis_four`, `taxedevisfour`, `ptttc_devis_four`) VALUES
(20, 1, '09-04-2014', 1, '09-05-2014', 'ASRock 970 Extreme4 - Carte mï¿½re ATX Socket AM3+ AMD 970 - SATA 6 Gbps - USB 3.0 - 3x PCI Express 2.0 16x', '2', 'ASRock 2Core1333-2.66G (Intel 945GC Express) - Micro ATX + Processeur Intel Pentium Dual-Core E2140', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '104.00', '74.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15.00', '0.00', '0.00', '445.00', '89.00', '535.00');

-- --------------------------------------------------------

--
-- Structure de la table `fact_cli`
--

CREATE TABLE IF NOT EXISTS `fact_cli` (
  `idfactcli` int(13) NOT NULL AUTO_INCREMENT,
  `idcmdcli` int(13) NOT NULL,
  `idclient` int(13) NOT NULL,
  `date_facture` varchar(255) NOT NULL,
  `etat_fact_cli` int(1) NOT NULL,
  `date_echeance_fact_cli` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `ptht_fact_cli` varchar(255) NOT NULL,
  `taxe_fact_cli` int(1) NOT NULL,
  `ptttc_fact_cli` varchar(255) NOT NULL,
  `iduser` int(13) NOT NULL,
  `mois_facture` varchar(255) NOT NULL,
  PRIMARY KEY (`idfactcli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fact_cli`
--

INSERT INTO `fact_cli` (`idfactcli`, `idcmdcli`, `idclient`, `date_facture`, `etat_fact_cli`, `date_echeance_fact_cli`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `ptht_fact_cli`, `taxe_fact_cli`, `ptttc_fact_cli`, `iduser`, `mois_facture`) VALUES
(2, 0, 5, '01-04-2014', 1, '01/04/2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', 1, '12', 2, '04');

-- --------------------------------------------------------

--
-- Structure de la table `fact_four`
--

CREATE TABLE IF NOT EXISTS `fact_four` (
  `idfactfour` int(13) NOT NULL AUTO_INCREMENT,
  `idcmdfour` int(13) NOT NULL,
  `idreceptionfour` int(13) NOT NULL,
  `idfournisseur` int(13) NOT NULL,
  `date_fact_four` varchar(255) NOT NULL,
  `etat_fact_four` int(1) NOT NULL,
  `date_echeance_fact_four` varchar(255) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  `pvht1` varchar(255) NOT NULL,
  `pvht2` varchar(255) NOT NULL,
  `pvht3` varchar(255) NOT NULL,
  `pvht4` varchar(255) NOT NULL,
  `pvht5` varchar(255) NOT NULL,
  `pvht6` varchar(255) NOT NULL,
  `pvht7` varchar(255) NOT NULL,
  `pvht8` varchar(255) NOT NULL,
  `pvht9` varchar(255) NOT NULL,
  `pvht10` varchar(255) NOT NULL,
  `pvht11` varchar(255) NOT NULL,
  `pvht12` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `remise` varchar(255) NOT NULL,
  `eco-part` varchar(255) NOT NULL,
  `ptht_fact_four` varchar(255) NOT NULL,
  `taxe_fact_four` int(1) NOT NULL,
  `ptttc_fact_four` varchar(255) NOT NULL,
  PRIMARY KEY (`idfactfour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fact_four`
--

INSERT INTO `fact_four` (`idfactfour`, `idcmdfour`, `idreceptionfour`, `idfournisseur`, `date_fact_four`, `etat_fact_four`, `date_echeance_fact_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_fact_four`, `taxe_fact_four`, `ptttc_fact_four`) VALUES
(3, 1, 1, 1, '16-04-2014', 4, '16-05-2014', 'ASRock 970 Extreme4 - Carte mï¿½re ATX Socket AM3+ AMD 970 - SATA 6 Gbps - USB 3.0 - 3x PCI Express 2.0 16x', '2', 'ASRock 2Core1333-2.66G (Intel 945GC Express) - Micro ATX + Processeur Intel Pentium Dual-Core E2140', '3', '', 'qte3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '103.83', '74.17', '', '', '', '', '', '', '', '', '', '', '15', '', '', '445.17', 89, '534.204');

-- --------------------------------------------------------

--
-- Structure de la table `famille_article`
--

CREATE TABLE IF NOT EXISTS `famille_article` (
  `idfamillearticle` int(13) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`idfamillearticle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `famille_article`
--

INSERT INTO `famille_article` (`idfamillearticle`, `designation`) VALUES
(6, 'ORDINATEUR'),
(7, 'COMPOSANTS'),
(8, 'BOITIERS'),
(9, 'RESEAU'),
(10, 'PERIPHERIQUES'),
(11, 'AUDIO'),
(12, 'LOGICIEL'),
(13, 'ACCESSOIRES'),
(14, 'CONNECTIQUE'),
(15, 'CONSOMMABLE');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `idfournisseur` int(13) NOT NULL AUTO_INCREMENT,
  `raison_social` varchar(255) NOT NULL,
  `num_siret` varchar(255) NOT NULL,
  `num_tva` varchar(255) NOT NULL,
  `civilite` int(2) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mode_paiement_default` int(1) NOT NULL,
  `code_banque` varchar(5) NOT NULL,
  `code_guichet` varchar(5) NOT NULL,
  `code_cpt` varchar(20) NOT NULL,
  `cle_rib` varchar(2) NOT NULL,
  `iban` varchar(75) NOT NULL,
  `bic` varchar(10) NOT NULL,
  `encour` varchar(255) NOT NULL,
  PRIMARY KEY (`idfournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idfournisseur`, `raison_social`, `num_siret`, `num_tva`, `civilite`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `mail`, `mode_paiement_default`, `code_banque`, `code_guichet`, `code_cpt`, `cle_rib`, `iban`, `bic`, `encour`) VALUES
(1, 'LDLC COM', '', '', 0, '18, Chemin de Cuers', '', 69574, 'DARDILLY CEDEX', '', '', '', '', 0, '', '', '', '', '', '', ''),
(2, 'MGF', '449 658 210 00041', 'FR07449658210', 0, '6 Rue Léon Jouhaux', 'ZI PARIEST', 77183, 'CROISSY BEAUBOURG', '01 60 95 05 10', '01 60 95 05 11', '', '', 2, '', '', '', '', '', '', ''),
(3, '1FoTeam', '449 955 723 00019', 'FR49449955723', 1, '71 Cours de la République', '', 76600, 'Le Havre', '02.35.53.34.13', '02.35.53.28.37', '', '', 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur_copy1`
--

CREATE TABLE IF NOT EXISTS `fournisseur_copy1` (
  `idfournisseur` int(13) NOT NULL AUTO_INCREMENT,
  `raison_social` varchar(255) NOT NULL,
  `num_siret` varchar(255) NOT NULL,
  `num_tva` varchar(255) NOT NULL,
  `civilite` int(2) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mode_paiement_default` int(1) NOT NULL,
  `code_banque` varchar(5) NOT NULL,
  `code_guichet` varchar(5) NOT NULL,
  `code_cpt` varchar(20) NOT NULL,
  `cle_rib` varchar(2) NOT NULL,
  `iban` varchar(75) NOT NULL,
  `bic` varchar(10) NOT NULL,
  `encour` varchar(255) NOT NULL,
  PRIMARY KEY (`idfournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `iduser` int(13) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pass_md5` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `images` varchar(255) CHARACTER SET latin1 NOT NULL,
  `place` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`iduser`, `login`, `pass_md5`, `nom`, `prenom`, `images`, `place`) VALUES
(2, 'mockelyn', '201c238c414b3f9d7bec9bb76567f65a', 'MOCKELYN', 'MAXIME', '', 'G&eacute;rant - Programmeur'),
(3, 'ludivine', '8e5f907901e3f48313027218d2c33453', 'CLAUTOUR', 'LUDIVINE', '', 'Commercial'),
(4, 'Alexis', '059bf68f71c80fce55214b411dd2280c', 'CARPENTIER', 'ALEXIS', '', 'Technicien'),
(5, 'Eric', '29988429c481f219b8c5ba8c071440e1', 'SETBON', 'Eric', '', 'Gestion - Comptable - Juridique'),
(6, 'corentin', '16324c67e9c49ebbcaadb45c9db2fa22', 'LE BIVIC', 'Corentin', '', 'Technicien'),
(7, 'Syltheron', '201c238c414b3f9d7bec9bb76567f65a', '', '', '', ''),
(8, 'thomas', 'fb2fcd534b0ff3bbed73cc51df620323', 'PRAUD', 'Thomas', '','Stagiaire'),
(9, 'julien', '81dc9bdb52d04dc20036dbd8313ed055', 'BABINOT', 'Julien', '', 'Stagiaire');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alpha2` (`alpha2`),
  UNIQUE KEY `alpha3` (`alpha3`),
  UNIQUE KEY `code_unique` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=242 ;

-- --------------------------------------------------------

--
-- Structure de la table `reception_four`
--

CREATE TABLE IF NOT EXISTS `reception_four` (
  `idreceptionfour` int(13) NOT NULL AUTO_INCREMENT,
  `idcmdfour` int(13) NOT NULL,
  `idfournisseur` int(13) NOT NULL,
  `date_reception_four` varchar(255) NOT NULL,
  `etat_reception_four` int(1) NOT NULL,
  `art1` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `art2` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `art3` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `art4` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `art5` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `art6` varchar(255) NOT NULL,
  `qte6` varchar(255) NOT NULL,
  `art7` varchar(255) NOT NULL,
  `qte7` varchar(255) NOT NULL,
  `art8` varchar(255) NOT NULL,
  `qte8` varchar(255) NOT NULL,
  `art9` varchar(255) NOT NULL,
  `qte9` varchar(255) NOT NULL,
  `art10` varchar(255) NOT NULL,
  `qte10` varchar(255) NOT NULL,
  `art11` varchar(255) NOT NULL,
  `qte11` varchar(255) NOT NULL,
  `art12` varchar(255) NOT NULL,
  `qte12` varchar(255) NOT NULL,
  PRIMARY KEY (`idreceptionfour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reception_four`
--

INSERT INTO `reception_four` (`idreceptionfour`, `idcmdfour`, `idfournisseur`, `date_reception_four`, `etat_reception_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`) VALUES
(1, 1, 1, '14-04-2014', 1, 'ASRock 970 Extreme4 - Carte mï¿½re ATX Socket AM3+ AMD 970 - SATA 6 Gbps - USB 3.0 - 3x PCI Express 2.0 16x', '2', 'ASRock 2Core1333-2.66G (Intel 945GC Express) - Micro ATX + Processeur Intel Pentium Dual-Core E2140', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 4, 2, '29-04-2014', 1, 'PORTABLE PB TV44HC-10054G50Mnws - INTEL CELERON 1005M/4G/500G LED BLANC 15.6', '1', 'WE - BOITIER EXTERNE DISQUE DUR 2.5', '3', 'WE TAB700DG - TABLETTE NOIR 7', '1', 'WE TAB1000 - Tablette 10', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reg_fact_cli`
--

CREATE TABLE IF NOT EXISTS `reg_fact_cli` (
  `idregfactcli` int(13) NOT NULL AUTO_INCREMENT,
  `idfactcli` int(13) NOT NULL,
  `mode_reglement` int(1) NOT NULL,
  `montant_reg1` varchar(255) NOT NULL,
  `montant_reg2` varchar(255) NOT NULL,
  `montant_reg3` varchar(255) NOT NULL,
  `date_reg1` varchar(255) NOT NULL,
  `date_reg2` varchar(255) NOT NULL,
  `date_reg3` varchar(255) NOT NULL,
  PRIMARY KEY (`idregfactcli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `reg_fact_cli`
--

INSERT INTO `reg_fact_cli` (`idregfactcli`, `idfactcli`, `mode_reglement`, `montant_reg1`, `montant_reg2`, `montant_reg3`, `date_reg1`, `date_reg2`, `date_reg3`) VALUES
(1, 1, 1, '10', '', '', '04-04-2014', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reg_fact_four`
--

CREATE TABLE IF NOT EXISTS `reg_fact_four` (
  `idregfactfour` int(13) NOT NULL AUTO_INCREMENT,
  `idfactfour` int(13) NOT NULL,
  `mode_reglement` int(1) NOT NULL,
  `montant_reg1` varchar(255) NOT NULL,
  `montant_reg2` varchar(255) NOT NULL,
  `montant_reg3` varchar(255) NOT NULL,
  PRIMARY KEY (`idregfactfour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `idserver` int(1) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idserver`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE IF NOT EXISTS `societe` (
  `idsociete` int(11) NOT NULL AUTO_INCREMENT,
  `raison_social` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num_siret` varchar(255) NOT NULL,
  `num_tva` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `ape` varchar(255) NOT NULL,
  PRIMARY KEY (`idsociete`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`idsociete`, `raison_social`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `mail`, `num_siret`, `num_tva`, `capital`, `ape`) VALUES
(1, 'LSI INFORMATIQUE', '35 Avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '02 51 23 24 24', '', 'contact@lsiinformatique.fr', '753 865 229 00011', 'FR56 753 865 229', '1000€', '4741Z');

-- --------------------------------------------------------

--
-- Structure de la table `sous_famille_article`
--

CREATE TABLE IF NOT EXISTS `sous_famille_article` (
  `idsousfamillearticle` int(13) NOT NULL AUTO_INCREMENT,
  `idfamillearticle` int(13) NOT NULL,
  `designation_famille` varchar(255) NOT NULL,
  PRIMARY KEY (`idsousfamillearticle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=213 ;

--
-- Contenu de la table `sous_famille_article`
--

INSERT INTO `sous_famille_article` (`idsousfamillearticle`, `idfamillearticle`, `designation_famille`) VALUES
(1, 6, 'Pc Portable 7" a 10"'),
(2, 6, 'Pc Portable 11" a 14"'),
(3, 6, 'Pc Portable 15,6"'),
(4, 6, 'Pc Portable 17,3"'),
(5, 6, 'Tablette 7"'),
(6, 6, 'Tablette 10,1"'),
(7, 6, 'Station d''Accueil'),
(8, 6, 'Alimentation/Chargeur'),
(9, 6, 'Antivol'),
(10, 6, 'Extension de garantie'),
(11, 6, 'Sacoche pour Ordinateur Portable'),
(12, 6, 'Support Ventilé'),
(13, 6, 'Housse/Protection pour Tablette'),
(14, 6, 'Support pour Tablette'),
(15, 6, 'Stylet pour Tablette PC'),
(16, 6, 'Clavier pour Tablette'),
(17, 6, 'Unite Centrale Gamer (UCG)'),
(18, 6, 'Unite Centrale Multimedia'),
(19, 6, 'Unite Centrale Home Cinema (UChc)'),
(20, 6, 'Kit Intel'),
(21, 7, 'Processeur AMD Athlon - Socket AM1'),
(22, 7, 'Processeur Intel Pentium Dual Core - Socket 1150'),
(23, 7, 'Processeur Intel Celeron Dual Core - Socket 1155'),
(24, 7, 'Processeur Intel pentium Dual Core - Socket 1155'),
(25, 7, ''),
(26, 7, 'Processeur Intel Core I3 - Socket 1150'),
(27, 7, 'Processeur Intel Core I3 - Socket 1155'),
(28, 7, 'Processeur Intel Core I5 - Socket 1150'),
(29, 7, 'Processeur Intel Core I5 - Socket 1155'),
(30, 7, 'Processeur Intel Core I7 - Socket 1150'),
(31, 7, 'Processeur AMD Sempron - Socket AM1'),
(32, 7, 'Processeur AMD Sempron - Socket AM3'),
(33, 7, 'Processeur AMD Serie FX - AM3+'),
(34, 7, 'Processeur AMD Serie A4 - Socket FM1'),
(35, 7, 'Processeur AMD Serie A4 - Socket FM2'),
(36, 7, 'Processeur AMD Serie A6 - Socket FM2'),
(37, 7, 'Processeur AMD Serie A8 - Socket FM2'),
(38, 7, 'Processeur AMD Serie A10 - Socket FM2'),
(39, 7, 'Carte Mere AMD Socket FM1'),
(40, 7, 'Carte Mere Intel Socket 1150'),
(41, 7, 'Carte Mere Intel Socket 1155'),
(42, 7, 'Carte Mere Intel Socket 775'),
(43, 7, 'Carte Mere AMD Socket FM2'),
(44, 7, 'Carte Mere AMD Socket AM2/AM2+/AM3'),
(45, 7, 'RAM DDR3-1600Mhz '),
(46, 7, 'RAM DDR3-1333MhZ'),
(47, 7, 'RAM DDR2-800MhZ'),
(48, 7, 'RAM DDR2-667MzH'),
(49, 7, 'RAM DDR1-400MzH'),
(50, 7, 'RAM DDR1-266MhZ'),
(51, 7, 'RAM SODIMM DDR3-1600MhZ'),
(52, 7, 'RAM SODIMM DDR3-1333MhZ'),
(53, 7, 'RAM SODIMM DDR2-800MzH'),
(54, 7, 'RAM SODIMM DDR2-667MhZ'),
(55, 7, 'RAM SODIMM DDR1-400MhZ'),
(56, 7, 'RAM SDRAM 133MhZ'),
(57, 7, 'Disque Dur SSD'),
(58, 7, 'Disque Dur 3.5" SATA III'),
(59, 7, 'Disque Dur Portable SATA II - 7200'),
(60, 7, 'Disque Dur Portable SATA II - 5400'),
(61, 7, 'Disque Dur Portable SATA III - 5400'),
(62, 7, 'Disque Dur Portable SATA III - 7200'),
(63, 7, 'Disque Dur Externe Auto-alimente (2.5")'),
(64, 7, 'Disque Dur Externe Auto-Alimente (3.5")'),
(65, 7, 'Disque Dur IDE 3.5"'),
(66, 7, 'Carte Graphique NVIDIA'),
(67, 7, 'Carte Graphique AMD'),
(68, 7, 'Carte Graphique AGP Nvidia'),
(69, 7, 'Carte Graphique Externe USB'),
(70, 7, 'Graveur DVD Interne'),
(71, 7, 'Graveur DVD Externe'),
(72, 7, 'Graveur Blu-Ray Interne'),
(73, 7, 'Lecteur Blu-Ray Interne'),
(74, 7, 'Lecteur Blu-Ray Externe'),
(75, 7, 'Carte TV TNT'),
(76, 7, 'Carte acquisition Video Externe'),
(77, 7, 'Carte Controleur Firewire'),
(78, 7, 'Carte Controleur USB'),
(79, 7, 'Carte Controleur S-ATA / IDE / RAID'),
(80, 7, ''),
(81, 8, 'Boitier Micro ATX USB3'),
(82, 8, 'Boitier ATX USB3'),
(83, 8, 'Boitier ATX USB2'),
(84, 8, 'Boitier Micro ATX USB2'),
(85, 8, 'Boitier Mini ITX USB2'),
(86, 8, 'Accessoire'),
(87, 8, 'Alimentation Modulaire'),
(88, 8, 'Alimentation Non Modulaire'),
(89, 8, 'Boitier HDD externe USB3 - SATA'),
(90, 8, 'Boitier HDD externe SATA'),
(91, 8, 'Boitier HDD externe USB2 SATA'),
(92, 8, 'Boitier HDD externe Multimedia'),
(93, 8, 'Boitier HDD externe - Alimentation Secteur'),
(94, 8, 'Rack Serial ATA'),
(95, 8, 'Rail de Fixation'),
(96, 8, ''),
(97, 9, 'Switch Gigabit Ethernet'),
(98, 9, 'Switch Fast Ethernet'),
(99, 9, 'Convertisseur Reseau'),
(100, 9, 'Cable RJ45 cat 5e - Droit'),
(101, 9, 'Cable RJ45 Cat 5e - Croisé'),
(102, 9, 'Cable RJ45 Cat 6 - Droit'),
(103, 9, 'Cable de Transfere USB'),
(104, 9, 'Connectique et Accessoire'),
(105, 9, 'Serveur NAS 1 Baie'),
(106, 9, 'Serveur NAS 2 Baie'),
(107, 9, 'Serveur NAS 4 Baie'),
(108, 9, 'Serveur NAS 5 Baie'),
(109, 9, 'Serveur NAS 8 Baie'),
(110, 9, 'Accessoire NAS'),
(111, 9, 'Carte Reseau USB'),
(112, 9, 'Carte Reseau PCI-E'),
(113, 9, 'Carte Reseau PCI '),
(114, 9, 'Routeur Wifi'),
(115, 9, 'Routeur Filaire'),
(116, 9, 'Point Acces Wifi'),
(117, 9, 'Modem Routeur ADSL'),
(118, 9, 'Modem Routeur ADSL WIFI'),
(119, 9, 'Camera ip interieur'),
(120, 9, 'Camera Ip Exterieur'),
(121, 9, 'Cable ou accessoire Wifi'),
(122, 9, 'Antenne Wifi Omnidirectionnel'),
(123, 9, 'Antenne Wifi Directionnel'),
(124, 9, 'Serveur d''impression'),
(125, 10, 'Clavier Filaire'),
(126, 10, 'Clavier Filaire Gamer'),
(127, 10, 'Clavier Sans Fil'),
(128, 10, 'Souris Filaire'),
(129, 10, 'Souris Filaire Gamer'),
(130, 10, 'Souris Sans Fil'),
(131, 10, 'Souris Sans Fil Gamer'),
(132, 10, 'Pack Clavier souris Filaire'),
(133, 10, 'Pack Clavier Souris Sans Fil'),
(134, 10, 'Manette de Jeu PC Filaire'),
(135, 10, 'Manette de Jeu PC Sans Fil'),
(136, 10, 'Joystick'),
(137, 10, 'Tablette Graphique'),
(138, 10, 'Webcam'),
(139, 10, 'Moniteur LED 18" a 20"'),
(140, 10, 'Moniteur LED 21" a 22"'),
(141, 10, 'Moniteur LED 23" a 24"'),
(142, 10, 'Moniteur LED 26" et +'),
(143, 10, 'Accessoire pour ecran'),
(144, 10, 'Imprimante Jet d''encre'),
(145, 10, 'Imprimante Laser'),
(146, 10, 'Accessoire Imprimante'),
(147, 10, 'Scanner'),
(148, 10, 'Videoprojecteur'),
(149, 10, 'Pave Numerique'),
(150, 10, 'Lecteur de Code Barre'),
(151, 11, 'Carte son Interne PCI-e'),
(152, 11, 'Carte Son Interne PCI'),
(153, 11, 'Carte Son Externe USB'),
(154, 11, 'Enceinte 5.1'),
(155, 11, 'Enceinte 2.1'),
(156, 11, 'Enceinte 2.0'),
(157, 11, 'Barre de Son'),
(158, 11, 'Casque sans Micro - Filaire'),
(159, 11, 'Casque Micro - Filaire'),
(160, 11, 'Casque Micro Gamer - Filaire'),
(161, 11, 'Casque Micro - Sans Fil'),
(162, 11, 'Casque Micro Gamer - Sans Fil'),
(163, 11, 'Microphone sur Pied'),
(164, 11, 'Microphone de Chant'),
(165, 12, 'Windows 8 - OEM'),
(166, 12, 'Windows 7 - OEM'),
(167, 12, 'Windows 8 - Boite'),
(168, 12, 'Windows 8 - Boite MAJ'),
(169, 12, 'Windows Server - OEM'),
(170, 12, 'Office 2013 - PKC'),
(171, 12, 'Office 2010 - PKC'),
(172, 12, 'Antivirus'),
(173, 12, 'Pack Internet Security'),
(174, 12, 'Pact Total Security'),
(175, 12, 'Logiciel de Montage Video'),
(176, 13, 'Ventilateur Processeur'),
(177, 13, 'Ventilateur Boitier'),
(178, 13, 'Ventilateur Carte Graphique'),
(179, 13, 'Ventilateur Chipset'),
(180, 13, 'Ventilateur Disque Dur'),
(181, 13, 'Ventilateur Memoire RAM'),
(182, 13, 'Etui CD'),
(183, 13, 'Onduleur'),
(184, 13, 'Multiprise'),
(185, 13, 'Accessoire Onduleur'),
(186, 13, 'Tapis de souris Gamer Rigide'),
(187, 13, 'Tapis de Souris Gamer Souple'),
(188, 13, 'Tapis de Souris basique'),
(189, 13, 'Goodies / Gadget'),
(190, 13, 'Accessoire Smartphone'),
(191, 13, 'Pate Thermique'),
(192, 13, 'Testeur'),
(193, 13, 'Pince'),
(194, 13, 'Nettoyant'),
(195, 13, 'Divers'),
(196, 13, 'Adapteur Secteur Universel'),
(197, 13, 'Tuning PC'),
(198, 13, 'Pile'),
(199, 14, 'Hub USB'),
(200, 14, 'Lecteur de Carte '),
(201, 14, 'Adaptateur & Convertisseur'),
(202, 14, 'Commutateur'),
(203, 14, 'Splitters'),
(204, 14, 'KVM'),
(205, 14, 'Switch Video '),
(206, 14, 'Cable'),
(207, 15, 'CD Vierges'),
(208, 15, 'DVD Vierges'),
(209, 15, 'Cartouche d''encre'),
(210, 15, 'Toner Laser '),
(211, 15, 'Ruban Encreur'),
(212, 15, 'Support Imprimable');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `idticket` int(13) NOT NULL AUTO_INCREMENT,
  `etat_ticket` int(1) NOT NULL,
  `title_ticket` varchar(255) NOT NULL,
  `iduser` int(13) NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `desc_probleme` longtext NOT NULL,
  PRIMARY KEY (`idticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `villes_france`
--

CREATE TABLE IF NOT EXISTS `villes_france` (
  `ville_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ville_departement` varchar(3) DEFAULT NULL,
  `ville_slug` varchar(255) DEFAULT NULL,
  `ville_nom` varchar(45) DEFAULT NULL,
  `ville_nom_reel` varchar(45) DEFAULT NULL,
  `ville_nom_soundex` varchar(20) DEFAULT NULL,
  `ville_nom_metaphone` varchar(22) DEFAULT NULL,
  `ville_code_postal` varchar(255) DEFAULT NULL,
  `ville_commune` varchar(3) DEFAULT NULL,
  `ville_code_commune` varchar(5) NOT NULL,
  `ville_arrondissement` smallint(3) unsigned DEFAULT NULL,
  `ville_canton` varchar(4) DEFAULT NULL,
  `ville_amdi` smallint(5) unsigned DEFAULT NULL,
  `ville_population_2010` mediumint(11) unsigned DEFAULT NULL,
  `ville_population_1999` mediumint(11) unsigned DEFAULT NULL,
  `ville_population_2012` mediumint(10) unsigned DEFAULT NULL COMMENT 'approximatif',
  `ville_densite_2010` int(11) DEFAULT NULL,
  `ville_surface` mediumint(7) unsigned DEFAULT NULL,
  `ville_longitude_deg` float DEFAULT NULL,
  `ville_latitude_deg` float DEFAULT NULL,
  `ville_longitude_grd` varchar(9) DEFAULT NULL,
  `ville_latitude_grd` varchar(8) DEFAULT NULL,
  `ville_longitude_dms` varchar(9) DEFAULT NULL,
  `ville_latitude_dms` varchar(8) DEFAULT NULL,
  `ville_zmin` mediumint(4) DEFAULT NULL,
  `ville_zmax` mediumint(4) DEFAULT NULL,
  `ville_population_2010_order_france` int(10) unsigned DEFAULT NULL,
  `ville_densite_2010_order_france` int(10) unsigned DEFAULT NULL,
  `ville_surface_order_france` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ville_id`),
  UNIQUE KEY `ville_slug` (`ville_slug`),
  KEY `ville_departement` (`ville_departement`),
  KEY `ville_nom` (`ville_nom`),
  KEY `ville_nom_reel` (`ville_nom_reel`),
  KEY `ville_code_commune` (`ville_code_commune`),
  KEY `ville_code_postal` (`ville_code_postal`),
  KEY `ville_longitude_latitude_deg` (`ville_longitude_deg`,`ville_latitude_deg`),
  KEY `ville_nom_soundex` (`ville_nom_soundex`),
  KEY `ville_nom_metaphone` (`ville_nom_metaphone`),
  KEY `ville_population_2010` (`ville_population_2010`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36569 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
