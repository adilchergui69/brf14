-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 08:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `adresseLivraison` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `categorie` varchar(70) NOT NULL,
  `libelle` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` decimal(8,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `categorie`, `libelle`, `description`, `prix`, `stock`, `image`) VALUES
(1, 'BEARD OIL', 'CLASSIC BEARD ', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 80, 'oil.jpg'),
(2, 'BEARD OIL', 'SMOOTH DELUXE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 70, 'oil.jpg'),
(3, 'BEARD OIL', 'NATURAL ARGAN', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 20, 'oil.jpg'),
(4, 'BEARD OIL', 'JOJOBA OIL', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 70, 'oil.jpg'),
(5, 'BEARD OIL', 'ALMOND', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 45, 'oil.jpg'),
(6, 'BEARD OIL', 'VANILLA MUSK', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '219', 70, 'oil.jpg'),
(7, 'BALM', 'MONEY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 44, 'balm.jpg'),
(8, 'BALM', 'SPICY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 34, 'balm.jpg'),
(9, 'BALM', 'TREE SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 33, 'balm.jpg'),
(10, 'BALM', 'VICY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 45, 'balm.jpg'),
(11, 'BALM', 'CITRUS DNA', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 57, 'balm.jpg'),
(12, 'BALM', 'BEARDY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '370', 3, 'balm.jpg'),
(13, 'MUSTACHE WAX', 'STYLING WAX', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '120', 80, 'wax.jpg'),
(15, 'MUSTACHE WAX', 'MAXIMUM HOLD', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '120', 45, 'wax.jpg'),
(16, 'MUSTACHE WAX', 'MEDIUM HOLD', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '120', 70, 'wax.jpg'),
(17, 'MUSTACHE WAX', 'NATURAL HOLD', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '120', 44, 'wax.jpg'),
(18, 'MUSTACHE WAX', 'SHINY WAX', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '120', 34, 'wax.jpg'),
(19, 'fragrance', 'TREE SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '330', 34, 'fragrance.jpg'),
(20, 'fragrance', 'VICY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '330', 55, 'fragrance.jpg'),
(21, 'fragrance', 'CITRUS DNA', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '330', 0, 'fragrance.jpg'),
(22, 'fragrance', 'BEARDY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '330', 66, 'fragrance.jpg'),
(23, 'BEARD WASH', 'COCOA', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '310', 80, 'beardWash.jpg'),
(24, 'BEARD WASH', 'ALOE VERA', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '310', 70, 'beardWash.jpg'),
(25, 'BEARD WASH', 'PEPPERMINT', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '310', 45, 'beardWash.jpg'),
(26, 'BEARD WASH', 'AVOCADO', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '310', 70, 'beardWash.jpg'),
(27, 'FRAGRANCE SAMPLE', 'MONEY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 44, 'beardWash.jpg'),
(28, 'FRAGRANCE SAMPLE', 'SPICY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 34, 'beardWash.jpg'),
(29, 'FRAGRANCE SAMPLE', 'TREE SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 0, 'beardWash.jpg'),
(30, 'FRAGRANCE SAMPLE', 'VICY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 0, 'beardWash.jpg'),
(31, 'FRAGRANCE SAMPLE', 'CITRUS DNA', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 57, 'beardWash.jpg'),
(32, 'FRAGRANCE SAMPLE', 'BEARDY SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '99', 3, 'beardWash.jpg'),
(33, 'BEARD SOAP', 'CITRUS', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '180', 80, 'beardWash.jpg'),
(34, 'BEARD SOAP', 'SMOKE', 'Keep it clean,for all our sakes Let’s face it—beards get a bad rep for being dirty and full of bacteria. So if you’re going to grow a beard, you owe it to beardsmen everywhere to keep yours clean. VKB Wash was formulated by beardsmen for the perfect beard', '180', 70, 'beardWash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `FK_association1` (`idClient`);

--
-- Indexes for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `FK_association3` (`idProduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `FK_association2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_association3` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
