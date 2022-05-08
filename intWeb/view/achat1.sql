-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achat1`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(20) NOT NULL,
  `titre` varchar(200) COLLATE armscii8_bin NOT NULL,
  `description` text COLLATE armscii8_bin NOT NULL,
  `auteur` varchar(200) COLLATE armscii8_bin NOT NULL,
  `img` varchar(200) COLLATE armscii8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `auteur`, `img`, `date`) VALUES
(1, 'razi', 'razi', 'qsd', '42', '2022-04-22'),
(2, 'dqs', 'qds', 'qsd', 'PNG\r\n\Z\n\0\0\0\rIHDR\0\0Ժ\0\0\0\0\0Շ \0\0\0sRGB\0…Կռ\0\0\0gAMA\0\0՞Ֆa\0\0\0	pHYs\0\0թ\0\0թիo—d\0\0\0!tEXtCreation Time\02021:10:09 16:01:01Խ-\'\0\0bIDATx^վզ\rx$Wuջ}կ՟4\r=`Ծ<գիqՖ)y\'aղ\nx\'^ ։y&Կ\Z$=ը0Մ$0;4', '2022-04-26'),
(3, 'jdid', 'Nous allons voir comment cr?er un syst?me de pagination en PHP et MySQL. Un syst?me de pagination permet de diviser le contenu ? lister sur un ensemble de pages index?s par des num?ros. Ce syst?me permet de rendre la pr?sentation des donn?es plus claire et, aussi, r?duire le volume des ?l?ments charg?s. Dans cette astuce nous allons d?couvrir le code PHP qui permet de proc?der ? la pagination des enregistrements r?cup?r?s depuis une base de donn?es.', 'razii', 'rr', '2022-05-03'),
(4, 'tt', 'yy', 'youssri', '\'Մ\'Ո\0JFIF\0\0H\0H\0\0\'յ\0C\0		\n\r\Z\Z $.\' \",#(7),01444\'9=82<.342\'յ\0C			\r\r2!!22222222222222222222222222222222222222222222222222\'Ը\0X \"\0\'Ժ\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '2022-04-25'),
(5, 'razi', 'Les foires p?riodiques, telles que la Foire du Tr?ne, qui commen?a en France en 957, sont un parent des parcs d\'attractions modernes. Il en est de m?me pour la foire de Barth?lemy qui d?buta au Royaume-Uni en 1543. Commen?ant pendant l\'?re ?lisab?thaine, les foires ont ?volu? en tant que lieu d\'amusement avec des loisirs, des aliments, des jeux et des attractions mettant notamment en sc?ne des spectacles de monstres (freak-show en anglais)1. La c?r?monie de la saison d\'hiver ?tait un endroit naturel pour le d?veloppement d\'attractions de divertissement. Oktoberfest n\'est pas seulement un festival de la bi?re, mais fournit aussi les caract?ristiques d\'un parc d\'attractions, d?s le premier ?v?nement en 1810, qui a lieu ? Munich, en Allemagne. Aux ?tats-Unis,', 'RAZIII', 'razii', '2022-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(20) NOT NULL,
  `nomcategorie` varchar(2000) COLLATE armscii8_bin NOT NULL,
  `nbrearticle` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `nomcategorie`, `nbrearticle`) VALUES
(0, 'jareb', 7878),
(55, 'fazads', 5489),
(4554, 'jareb', 7878);

-- --------------------------------------------------------

--
-- Table structure for table `cliennt`
--

CREATE TABLE `cliennt` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `Adresse` varchar(55) NOT NULL,
  `Num` int(11) NOT NULL,
  `types` int(11) NOT NULL,
  `RIB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliennt`
--

INSERT INTO `cliennt` (`id`, `nom`, `prenom`, `Adresse`, `Num`, `types`, `RIB`) VALUES
(33, 'y(\'hrh', 'iuk', 'ykg', 572, 2, 785),
(50, 'egf', 'fsdwd', 'dfhnn', 5544, 2, 89778);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `ID_Commande` int(255) NOT NULL,
  `ID_OFFRE` int(255) NOT NULL,
  `ID_CLIENT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`ID_Commande`, `ID_OFFRE`, `ID_CLIENT`) VALUES
(816, 90, 7),
(2039, 60, 7),
(7774, 90, 7),
(8315, 60, 7),
(9833, 40, 7);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `commentaire` text COLLATE armscii8_bin NOT NULL,
  `pseudo` varchar(255) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `commentaire`, `pseudo`) VALUES
(55, 1, 'hamza', 'hamza'),
(88, 4, 'razi', 'razi'),
(99, 1, 'youssri', 'yousri'),
(999, 2, 'You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other components. You can find more info in the FAQs section or check the HOW-TO Guides for getting started with PHP applications.', 'razi');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`id`, `id_article`, `id_membre`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(21, 4, 4),
(22, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `id_article`, `id_membre`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(5, 1, 0),
(17, 2, 4),
(19, 3, 4),
(21, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `nom` varchar(255) NOT NULL,
  `quantite` int(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `id_produit` int(255) NOT NULL,
  `prix` float NOT NULL,
  `id_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`nom`, `quantite`, `description1`, `Image1`, `id_produit`, `prix`, `id_type`) VALUES
('sweat', 300, ' Zara SWEAT OURS', '', 40, 70, 1),
('sweat', 10, '  sweat grande roue ', '', 60, 60, 1),
('sweat', 20, 'sweat femme gris mickey ', '', 70, 50, 1),
('bonbon', 100, 'bonbon Dragibus ', '', 80, 10, 0),
('dinosaures', 9, ' jeux dinosaures ', '', 90, 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `remis`
--

CREATE TABLE `remis` (
  `id_remis` int(255) NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remis`
--

INSERT INTO `remis` (`id_remis`, `coupon`, `value`) VALUES
(1, 'seif', 30);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `rateIndex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `rateIndex`) VALUES
(0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `IDticket` int(11) NOT NULL,
  `types` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`IDticket`, `types`, `prix`) VALUES
(41, 3, 35),
(77, 2, 25),
(6565, 3, 35);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(255) NOT NULL,
  `nom_type` varchar(255) NOT NULL,
  `quantite_T` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`, `quantite_T`) VALUES
(0, 'bonbon', 70),
(1, 't_shirt', 800),
(3, 'jeux', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Indexes for table `cliennt`
--
ALTER TABLE `cliennt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_Commande`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_article`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `cle` (`id_type`);

--
-- Indexes for table `remis`
--
ALTER TABLE `remis`
  ADD PRIMARY KEY (`id_remis`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`IDticket`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7789;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `produit` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
