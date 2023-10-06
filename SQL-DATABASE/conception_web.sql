-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 14 août 2022 à 09:12
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `conception_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `n_Rue` int(11) NOT NULL AUTO_INCREMENT,
  `n_Log` int(11) NOT NULL,
  `n_Garage` int(11) NOT NULL,
  `rue` varchar(30) DEFAULT NULL,
  `quartier` varchar(30) NOT NULL,
  `ville` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`n_Rue`),
  KEY `FK_association4` (`n_Log`),
  KEY `FK_association5` (`n_Garage`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`n_Rue`, `n_Log`, `n_Garage`, `rue`, `quartier`, `ville`) VALUES
(1, 3, 4, 'Modibo keita', 'Dar Salam', 'Bamako'),
(3, 1, 3, 'Saint Louis', 'ATT Bouguou', 'Kati'),
(12, 12, 12, 'Folle', 'Tiebani', 'Bamako'),
(11, 11, 11, 'gakou', 'Moribabougou', 'Koulikoro'),
(7, 7, 3, 'Chato', 'Dioulabougou', 'Kati'),
(8, 8, 4, 'pavé', 'Prince', 'Bamako'),
(9, 9, 2, 'Poulet', 'Medine', 'Bamako'),
(10, 10, 3, 'Mouton', 'Niamakoro', 'Bamako');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `nomPersonne` varchar(30) DEFAULT NULL,
  `prenomPersonne` varchar(30) DEFAULT NULL,
  `n_personne` int(11) NOT NULL AUTO_INCREMENT,
  `dateTrans` date DEFAULT NULL,
  `email_cl` text NOT NULL,
  `phone_cl` int(11) NOT NULL,
  `demande_cl` text NOT NULL,
  PRIMARY KEY (`n_personne`),
  KEY `AK_Identifier_1` (`n_personne`),
  KEY `FK_association7` (`dateTrans`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`nomPersonne`, `prenomPersonne`, `n_personne`, `dateTrans`, `email_cl`, `phone_cl`, `demande_cl`) VALUES
('KOUYATE', 'Salif', 7, '2022-02-14', 'saf258@gmail.com', 66451236, 'Je suis intÃ©ressÃ© par votre annonce [Appartement numÃ©ro 3 en Location Ã  25000 FCFA Ã  ATT Bouguou Kati de 10mÂ² et 2 piÃ¨ces].'),
('Koulibaly', 'Aboubacar', 6, '2021-05-14', 'koul@gmail.com', 79461250, 'Je suis intÃ©ressÃ© par votre annonce [Maison numÃ©ro 2 en Vente Ã  2500000 FCFA Ã  Kalaban Coura ACI Bamako de 25mÂ² et 3 piÃ¨ces].'),
('SANGARE', 'Mamadou', 8, '2022-03-10', 'madous431@gmail.com', 78451210, 'Je suis intÃ©ressÃ© par votre annonce [Maison en Vente Ã  3000000 FCFA Ã  Dar Salam Bamako de 80mÂ² et 4 piÃ¨ces].'),
('CISSE', 'Jean', 9, '2022-05-12', 'ciss456@gmail.com', 66455878, 'Je suis intÃ©ressÃ© par votre annonce [Immeuble en Location Ã  600000 FCFA Ã  Dioulabougou Kati de 80mÂ² et 20 piÃ¨ces].');

-- --------------------------------------------------------

--
-- Structure de la table `client_dem`
--

DROP TABLE IF EXISTS `client_dem`;
CREATE TABLE IF NOT EXISTS `client_dem` (
  `nomPersonne` varchar(30) DEFAULT NULL,
  `prenomPersonne` varchar(30) DEFAULT NULL,
  `n_personne` int(11) NOT NULL AUTO_INCREMENT,
  `dateDemande` date DEFAULT NULL,
  `phone_p` int(11) NOT NULL,
  `email_p` text NOT NULL,
  `demande_p` text NOT NULL,
  PRIMARY KEY (`n_personne`),
  KEY `AK_Identifier_1` (`n_personne`),
  KEY `dateTrans` (`dateDemande`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client_dem`
--

INSERT INTO `client_dem` (`nomPersonne`, `prenomPersonne`, `n_personne`, `dateDemande`, `phone_p`, `email_p`, `demande_p`) VALUES
('SANGARE', 'Mamadou', 5, '2022-08-11', 78451210, 'madous431@gmail.com', 'jxbqkcccccccccccccccccccccccc!!!!!');

-- --------------------------------------------------------

--
-- Structure de la table `ent_cl_vd`
--

DROP TABLE IF EXISTS `ent_cl_vd`;
CREATE TABLE IF NOT EXISTS `ent_cl_vd` (
  `id_cl_vd` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cl_vd` varchar(30) NOT NULL,
  `prenom_cl_vd` varchar(30) NOT NULL,
  `email_cl_vd` varchar(60) NOT NULL,
  `date_trans` date NOT NULL,
  `phone_cl_vd` int(11) NOT NULL,
  `demande_cl_vd` text NOT NULL,
  PRIMARY KEY (`id_cl_vd`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ent_cl_vd`
--

INSERT INTO `ent_cl_vd` (`id_cl_vd`, `nom_cl_vd`, `prenom_cl_vd`, `email_cl_vd`, `date_trans`, `phone_cl_vd`, `demande_cl_vd`) VALUES
(3, 'KOUYATE', 'Salif', 'saf258@gmail.com', '2022-02-14', 66451236, 'Je suis intÃ©ressÃ© par votre annonce [Appartement numÃ©ro 3 en Location Ã  25000 FCFA Ã  ATT Bouguou Kati de 10mÂ² et 2 piÃ¨ces].\r\n             '),
(2, 'Koulibaly', 'Aboubacar', 'koul@gmail.com', '2021-05-14', 79461250, 'Je suis intÃ©ressÃ© par votre annonce [Maison numÃ©ro 2 en Vente Ã  2500000 FCFA Ã  Kalaban Coura ACI Bamako de 25mÂ² et 3 piÃ¨ces].\r\n             '),
(7, 'CISSE', 'Jean', 'ciss456@gmail.com', '2022-05-12', 66455878, 'Je suis intÃ©ressÃ© par votre annonce [Immeuble en Location Ã  600000 FCFA Ã  Dioulabougou Kati de 80mÂ² et 20 piÃ¨ces].\r\n             ');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `n_Gallery` int(11) NOT NULL AUTO_INCREMENT,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  PRIMARY KEY (`n_Gallery`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`n_Gallery`, `img1`, `img2`, `img3`, `img4`) VALUES
(12, 'https://q-xx.bstatic.com/xdata/images/hotel/max500/184847074.jpg?k=462efd6c69c8742e448923b8f954539ff7b0e74800af33a405b7148b04c70af4&o=', 'https://q-xx.bstatic.com/xdata/images/hotel/840x460/284768651.jpg?k=1449f3c2db58a82f7a98bccf34fb94d9478814e767ee3046d6e722894e7dc5c4&o=', 'https://aff.bstatic.com/images/hotel/840x460/367/367267413.jpg', 'https://media.jumiadeals.com/ml_live/2bcfdb45b260bf3a8191736.mobile-gallery-large.jpg'),
(9, 'https://media-cdn.tripadvisor.com/media/photo-s/16/82/f7/f5/diawara-immobilier-business.jpg', 'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/275929688.jpg?k=f285dc1d55f92a3e2e221d78154ef9c06d7397dfda5e2420a23ced2b55a9368f&o=', 'http://www.lecoxer.com/wp-content/uploads/2019/04/1555000666-9987-full_size.jpg', 'https://selogeraumali.com/wp-content/uploads/2018/08/EC6FF297-5575-4121-A860-4B5442E633FD-e1535191575599.jpeg'),
(11, 'https://cf.bstatic.com/xdata/images/hotel/max1280x900/250299369.jpg?k=d4a5ef6829c4e48b8b3bec6fe71ef15d23b5c981c9f7e200b6f54781d976b95e&o=&hp=1', 'https://static.readytotrip.com/upload/information_system_24/2/2/0/item_2206451/photo_59088892.jpg', 'https://q-xx.bstatic.com/xdata/images/hotel/max500/284768661.jpg?k=437fdb15f85186a1cbdf05001d5ed7370ada065245aee2b2d778b4964f7a3f5c&o=', 'https://media.jumiadeals.com/ml_live/5254024f0b6204402b1a15e.mobile-gallery-large.jpg'),
(7, 'https://i.travelapi.com/hotels/26000000/25120000/25111100/25111033/95554431_z.jpg', 'http://www.lecoxer.com/wp-content/uploads/2019/04/56848076_855917478076685_2704703457918451712_n.jpg', 'http://www.lecoxer.com/wp-content/uploads/2019/04/56985530_855917574743342_1568228035923017728_n.jpg', 'https://nobili-design.com/fr/storage/local-posts/14/900_luxury_bedroom_interior_design_ideas.jpg'),
(8, 'https://www.mali-location.com/images/listing_photos/302-1.jpg', 'https://www.mali-location.com/images/listing_photos/thumb_95-14.jpg', 'https://www.bamako-immobilier.com/images/listing_photos/thumb_2777_img20180609wa0025.jpg', 'https://www.bamako-immobilier.com/images/listing_photos/thumb_1137_viberimage.jpg'),
(10, 'https://www.bamako-immobilier.com/images/listing_photos/577_14368785_194290094327226_7239866144548660705_n.jpg', 'https://selogeraumali.com/wp-content/uploads/2019/10/0AC5105B-8110-4408-8DB1-8D16C6F8CB8C.jpeg', 'http://www.lecoxer.com/wp-content/uploads/2021/06/IMG-20210519-WA0074.jpg', 'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/216242495.jpg?k=05d7bd5b5d20d7d528c8933fd22a9f9128a6e0dc9df9e42a7e562a2d8f8b066f&o=');

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE IF NOT EXISTS `garage` (
  `n_Garage` int(11) NOT NULL AUTO_INCREMENT,
  `typeGarage` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`n_Garage`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `garage`
--

INSERT INTO `garage` (`n_Garage`, `typeGarage`) VALUES
(12, 'enterre'),
(11, 'prefabrique'),
(7, 'accole'),
(8, 'separe'),
(9, 'accole'),
(10, 'separe');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `n_Log` int(11) NOT NULL AUTO_INCREMENT,
  `n_Rue` int(11) NOT NULL,
  `n_Garage` int(11) NOT NULL,
  `Num_transact` int(11) NOT NULL,
  `typeLog` enum('Maison','Appartement','Immeuble') NOT NULL,
  `nbrePieces` int(11) DEFAULT NULL,
  `surface` int(11) DEFAULT NULL,
  `etatLog` enum('Neuf','Tres bon','Bon','A renover') NOT NULL,
  `objetifGestion` enum('Location','Vente') DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `dispo` enum('Oui','Non') NOT NULL,
  `dateDispo` date DEFAULT NULL,
  `imgLog` text NOT NULL,
  `n_Gallery` int(11) NOT NULL,
  PRIMARY KEY (`n_Log`),
  KEY `FK_association6` (`n_Garage`),
  KEY `FK_association9` (`Num_transact`),
  KEY `n_Gallery` (`n_Gallery`),
  KEY `n_Rue` (`n_Rue`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`n_Log`, `n_Rue`, `n_Garage`, `Num_transact`, `typeLog`, `nbrePieces`, `surface`, `etatLog`, `objetifGestion`, `prix`, `dispo`, `dateDispo`, `imgLog`, `n_Gallery`) VALUES
(11, 11, 2, 11, 'Maison', 3, 30, 'Tres bon', 'Vente', 20000000, 'Oui', '2022-07-05', 'https://selogeraumali.com/wp-content/uploads/2018/10/8406CCB4-7E55-4999-89C3-B2103B032331.jpeg', 11),
(12, 12, 1, 12, 'Appartement', 3, 25, 'Bon', 'Location', 200000, 'Oui', '2022-07-12', 'https://a0.muscache.com/im/pictures/miso/Hosting-604249003064417589/original/146cc5b9-6096-438f-a71c-75f0c4c69856.jpeg?im_w=720', 12),
(7, 7, 3, 7, 'Immeuble', 20, 80, 'Neuf', 'Location', 600000, 'Oui', '2022-06-07', 'https://www.mali-location.com/images/listing_photos/thumb_2537_whatsappimage20210106at13.07.06.jpeg', 7),
(8, 8, 4, 8, 'Maison', 2, 50, 'Neuf', 'Vente', 30000000, 'Oui', '2022-06-14', 'https://www.archionline.com/public/uploads/2017/06/Maison-Bamako-vue-ext%C3%A9rieur-775x450.png', 8),
(9, 9, 2, 9, 'Appartement', 3, 30, 'Bon', 'Location', 50000, 'Oui', '2022-06-29', 'https://media-cdn.tripadvisor.com/media/photo-s/16/82/f7/dc/diawara-immobilier-business.jpg', 9),
(10, 10, 3, 10, 'Appartement', 2, 20, 'Tres bon', 'Location', 30000, 'Oui', '2022-06-29', 'https://selogeraumali.com/wp-content/uploads/2016/06/Location-maison-Bamako-Magnambougou-Photo-03.jpg', 10);

-- --------------------------------------------------------

--
-- Structure de la table `proposer`
--

DROP TABLE IF EXISTS `proposer`;
CREATE TABLE IF NOT EXISTS `proposer` (
  `n_personne` int(11) NOT NULL,
  `n_Log` int(11) NOT NULL,
  PRIMARY KEY (`n_personne`,`n_Log`),
  KEY `FK_association1` (`n_Log`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proposer`
--

INSERT INTO `proposer` (`n_personne`, `n_Log`) VALUES
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `Num_transact` int(11) NOT NULL AUTO_INCREMENT,
  `dateTrans` date NOT NULL,
  `commision` double DEFAULT '0.1',
  PRIMARY KEY (`Num_transact`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`Num_transact`, `dateTrans`, `commision`) VALUES
(1, '2022-03-10', 0.1),
(7, '2022-05-12', 0.1),
(3, '2022-02-14', 0.1);

-- --------------------------------------------------------

--
-- Structure de la table `visiter`
--

DROP TABLE IF EXISTS `visiter`;
CREATE TABLE IF NOT EXISTS `visiter` (
  `n_personne` int(11) NOT NULL,
  `n_Log` int(11) NOT NULL,
  PRIMARY KEY (`n_personne`,`n_Log`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visiter`
--

INSERT INTO `visiter` (`n_personne`, `n_Log`) VALUES
(3, 1),
(4, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
