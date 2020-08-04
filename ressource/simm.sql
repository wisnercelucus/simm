-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 07:43 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `category`) VALUES
(2, 'boisson'),
(3, 'céréales'),
(9, 'dessert'),
(1, 'laitier'),
(6, 'ovoproduit'),
(10, 'pain'),
(4, 'poisson'),
(5, 'produit carné'),
(7, 'produit gras'),
(11, 'spagetti'),
(8, 'sucre');

-- --------------------------------------------------------

--
-- Table structure for table `commune`
--

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `nomCo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commune`
--

INSERT INTO `commune` (`id`, `nomCo`) VALUES
(8, 'Anse-à-Galets'),
(21, 'Aquin'),
(1, 'Arcahaie'),
(24, 'Belle-Anse'),
(2, 'Cabaret'),
(22, 'Cap'),
(14, 'Carrefour'),
(23, 'Cayes'),
(18, 'Cité Soleil'),
(6, 'Cornillon'),
(3, 'Croix-des-Bouquets'),
(15, 'Delmas'),
(7, 'Fonds-Verrettes'),
(4, 'Ganthier'),
(12, 'Grand-Goâve'),
(19, 'Gressier'),
(25, 'Hinche'),
(17, 'Kenscoff'),
(10, 'Léogâne'),
(16, 'Pétionville'),
(11, 'Petit-Goâve'),
(9, 'Pointe-à-Raquette'),
(26, 'Port Salut'),
(13, 'Port-au-Prince'),
(20, 'Tabarre'),
(5, 'Thomazeau');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `nameM` varchar(150) NOT NULL,
  `commune` varchar(155) DEFAULT NULL,
  `registered_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `nameM`, `commune`, `registered_at`) VALUES
(1, 'Sigo Market', 'Port-au-Prince', '2016-10-14 18:17:24'),
(2, 'Linda Market', 'Port-au-Prince', '2016-10-19 16:13:18'),
(3, 'Good News', 'Port-au-Prince', '2016-10-19 16:13:19'),
(4, 'Piyay Market', 'Port-au-Prince', '2016-10-19 16:13:19'),
(5, 'Roi des Rois', 'Port-au-Prince', '2016-10-19 16:13:19'),
(6, 'Tag Market', 'Port-au-Prince', '2016-10-19 16:13:19'),
(7, 'Delimart Clercine', 'Tabarre', '2016-10-19 20:16:05'),
(8, 'Marassa Market', 'Tabarre', '2016-10-19 20:16:05'),
(9, 'Universel Super', 'Tabarre', '2016-10-19 20:16:05'),
(10, 'Stop and Go', 'Tabarre', '2016-10-19 20:16:06'),
(11, 'Delimart Delams', 'Delmas', '2016-10-19 20:22:59'),
(12, 'Star 2000', 'Delmas', '2016-10-19 20:22:59'),
(13, 'Delmas 2000', 'Delmas', '2016-10-19 20:22:59'),
(14, 'Eagle Market', 'Delmas', '2016-10-19 20:22:59'),
(15, 'Compas Market', 'Pétionville', '2016-10-19 20:27:51'),
(16, 'Zouk Market', 'Pétionville', '2016-10-19 20:27:51'),
(17, 'Foodmax', 'Pétionville', '2016-10-19 20:27:51'),
(18, 'One stop Market', 'Pétionville', '2016-10-19 20:27:51'),
(19, 'Quality Foods', 'Pétionville', '2016-10-19 20:27:51'),
(20, 'Giant Market', 'Pétionville', '2016-10-19 20:27:51'),
(21, 'Big star Market', 'Pétionville', '2016-10-19 20:27:51'),
(22, 'Caribbean', 'Pétionville', '2016-10-19 20:27:51'),
(23, '8 à 8 Super Market', 'Pétionville', '2016-10-19 20:27:51'),
(24, 'Olympia Market', 'Pétionville', '2016-10-19 20:27:51'),
(25, 'Universel Super Market Clercine', 'Tabarre', '2017-01-21 23:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `prix`
--

CREATE TABLE `prix` (
  `id` int(11) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `nomM` varchar(255) NOT NULL,
  `nomCo` varchar(255) NOT NULL,
  `montant` float DEFAULT NULL,
  `collected_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prix`
--

INSERT INTO `prix` (`id`, `nomP`, `nomM`, `nomCo`, `montant`, `collected_at`) VALUES
(1, 'Saumon Rika', 'Sigo Market', 'Port-au-Prince', 80, '2014-09-12'),
(2, 'Sardine Brunswick', 'Sigo Market', 'Port-au-Prince', 75, '2014-09-12'),
(3, 'Confiture Pidy', 'Delimart Clercine', 'Tabarre', 187, '2014-09-12'),
(5, 'Confiture Pidy', 'Universel Super Market Clercine', 'Tabarre', 200, '2014-09-01'),
(6, 'Confiture Pidy', 'Marassa Market', 'Tabarre', 190, '2014-09-01'),
(13, 'Lait condensé sucré', 'Delimart Clercine', 'Tabarre', 22, '2014-09-12'),
(14, 'Lait condensé sucré', 'Marassa Market', 'Tabarre', 22, '2014-09-12'),
(15, 'Lait condensé sucré', 'Universel Super Market Clercine', 'Tabarre', 25, '2014-09-12'),
(16, 'Lait entier liquide Elle et Vire', 'Delimart Clercine', 'Tabarre', 112, '2014-09-12'),
(17, 'Lait entier liquide Elle et Vire', 'Marassa Market', 'Tabarre', 120, '2014-09-12'),
(18, 'Lait entier liquide Elle et Vire', 'Universel Super Market Clercine', 'Tabarre', 125, '2014-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `quantity` float DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `provenance` varchar(50) DEFAULT NULL,
  `enregistered_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nomP`, `quantity`, `unit`, `category`, `provenance`, `enregistered_at`) VALUES
(1, 'Lait condensé sucré bongù', 170, 'gramme', 'laitier', 'étrangère', '2016-10-14 14:00:16'),
(2, 'Saumon Rika', 425, 'gramme', 'poisson', 'étrangère', '2016-10-17 14:02:12'),
(3, 'Sardine Brunswick', 106, 'gramme', 'poisson', 'étrangère', '2016-10-18 09:03:48'),
(4, 'Lait entier liquide Elle et Vire', 1, 'litre', 'laitier', 'étrangère', '2016-10-19 16:36:06'),
(5, 'Sucre raffiné (Rébo)', 5, 'livre', 'sucre', 'locale', '2016-10-19 16:42:57'),
(6, 'Sucre roux (Rébo)', 5, 'livre', 'sucre', 'locale', '2016-10-19 16:42:58'),
(7, 'Hot Dog (chicken franks)', 12, 'once', 'produit carné', 'étrangère', '2016-10-19 16:42:58'),
(8, 'Fromage la vache qui rit', 8, 'portion', 'laitier', 'étrangère', '2016-10-19 16:42:58'),
(9, 'Confiture Pidy', 1, 'bocal', 'dessert', 'locale', '2016-10-19 17:16:41'),
(10, 'Yogurt', 1, 'bocal', 'laitier', 'locale', '2016-10-19 17:16:41'),
(11, 'Yogurt Elle et Vire', 1, 'bocal', 'laitier', 'étrangère', '2016-10-19 17:16:41'),
(12, 'Pain tranché Karyna', 1, 'sachet', 'pain', 'locale', '2016-10-19 17:41:09'),
(13, 'Pain Epi d\'Or', 1, 'sachet', 'pain', 'locale', '2016-10-19 18:11:29'),
(14, 'Sauce de Tomate Famosa', 1, 'bocal', 'dessert', 'locale', '2016-10-19 18:11:29'),
(15, 'Viande moulue', 1, 'portion', 'produit carné', 'locale', '2016-10-19 18:11:29'),
(16, 'Morue', 1, 'portion', 'poisson', 'locale', '2016-10-19 18:11:29'),
(17, 'Fromage bongù', 8, 'portion', 'laitier', 'étrangère', '2016-10-19 18:11:29'),
(18, 'Jambon Smith field', 1, 'portion', 'produit carné', 'étrangère', '2016-10-19 18:11:29'),
(19, 'Fromage Kraft', 8, 'portion', 'laitier', 'étrangère', '2016-10-19 18:11:30'),
(20, 'Margarine Marianne', 1, 'portion', 'produit gras', 'étrangère', '2016-10-19 18:11:30'),
(21, 'Beurre d\'arachide (dory)', 36, 'once', 'dessert', 'locale', '2016-10-19 18:16:37'),
(22, 'Spagetti Itala', 2, 'once', 'spagetti', 'locale', '2016-10-19 18:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `unite`
--

CREATE TABLE `unite` (
  `id` int(11) NOT NULL,
  `unit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unite`
--

INSERT INTO `unite` (`id`, `unit`) VALUES
(7, 'bocal'),
(10, 'canet'),
(2, 'gramme'),
(8, 'il'),
(12, 'kg'),
(4, 'large'),
(1, 'litre'),
(3, 'livre'),
(6, 'once'),
(5, 'portion'),
(11, 'sac'),
(9, 'sachet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomCo` (`nomCo`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameM` (`nameM`);

--
-- Indexes for table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomP` (`nomP`);

--
-- Indexes for table `unite`
--
ALTER TABLE `unite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `unite`
--
ALTER TABLE `unite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
