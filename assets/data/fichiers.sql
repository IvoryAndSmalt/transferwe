-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : lucasvanvtias.mysql.db
-- Généré le :  ven. 11 jan. 2019 à 11:25
-- Version du serveur :  5.6.40-log
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lucasvanvtias`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichiers`
--

CREATE TABLE `fichiers` (
  `id_fichier` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `codeg` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lien` varchar(255) CHARACTER SET utf32 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichiers`
--

INSERT INTO `fichiers` (`id_fichier`, `nom`, `codeg`, `lien`, `date`) VALUES
(58, 'cv-lucas-vandenberg-automne2018(3).pdf', '7EFvdpJz', 'https://www.lucasvandenberg.fr/transferwe/files/7EFvdpJz', '2019-01-08'),
(59, 'Impact Bold.ttf', 'dCLMMnOx', 'https://www.lucasvandenberg.fr/transferwe/files/dCLMMnOx', '2019-01-08'),
(60, 'original_msg.txt', 'xnfxVB3S', 'https://www.lucasvandenberg.fr/transferwe/files/xnfxVB3S', '2019-01-08'),
(61, 'original_msg.txt', 'RybUKNww', 'https://www.lucasvandenberg.fr/transferwe/files/RybUKNww', '2019-01-08'),
(62, 'original_msg.txt', 'VQObyxK6', 'https://www.lucasvandenberg.fr/transferwe/files/VQObyxK6', '2019-01-08'),
(63, 'original_msg.txt', 'iPpVw8lA', 'https://www.lucasvandenberg.fr/transferwe/files/iPpVw8lA', '2019-01-08'),
(64, 'original_msg.txt', 'ircjaRWv', 'https://www.lucasvandenberg.fr/transferwe/files/ircjaRWv', '2019-01-08'),
(65, 'original_msg.txt', 'Qp0hkGx0', 'https://www.lucasvandenberg.fr/transferwe/files/Qp0hkGx0', '2019-01-08'),
(66, 'Lion-de-Bartholdi_format_924x367.jpg', 'H5yGS4yN', 'https://www.lucasvandenberg.fr/transferwe/files/H5yGS4yN', '2019-01-08'),
(67, '304745.svg', 'duDb8vNm', 'https://www.lucasvandenberg.fr/transferwe/files/duDb8vNm', '2019-01-08'),
(68, 'worldwide.svg', 'ggmqzvbT', 'https://www.lucasvandenberg.fr/transferwe/files/ggmqzvbT', '2019-01-08'),
(69, 'worldwide.svg', 'qDeTJIu2', 'https://www.lucasvandenberg.fr/transferwe/files/qDeTJIu2', '2019-01-08'),
(70, 'original_msg.txt', 'ccCP7E5K', 'https://www.lucasvandenberg.fr/transferwe/files/ccCP7E5K', '2019-01-08'),
(71, '304745.svg', 'J5B8iOEi', 'https://www.lucasvandenberg.fr/transferwe/files/J5B8iOEi', '2019-01-08'),
(72, 'Logo ACS.png', 'pXv3kVGz', 'https://www.lucasvandenberg.fr/transferwe/files/pXv3kVGz', '2019-01-08'),
(73, 'worldwide.svg', 'TRQhZZbP', 'https://www.lucasvandenberg.fr/transferwe/files/TRQhZZbP', '2019-01-08'),
(74, 'Lion-de-Bartholdi_format_924x367.jpg', 'gmLY131o', 'https://www.lucasvandenberg.fr/transferwe/files/gmLY131o', '2019-01-08'),
(75, 'cv-lucas-vandenberg-automne2018(3).pdf', '454KJcCL', 'https://www.lucasvandenberg.fr/transferwe/files/454KJcCL', '2019-01-08'),
(76, 'worldwide.svg', '92WpRRsO', 'https://www.lucasvandenberg.fr/transferwe/files/92WpRRsO', '2019-01-08'),
(77, 'impact.ttf', 'fFmiuswn', 'https://www.lucasvandenberg.fr/transferwe/files/fFmiuswn', '2019-01-08'),
(78, 'original_msg.txt', '59Jj7KQL', 'https://www.lucasvandenberg.fr/transferwe/files/59Jj7KQL', '2019-01-08'),
(79, 'Impact Bold.ttf', '7KQIsnSH', 'https://www.lucasvandenberg.fr/transferwe/files/7KQIsnSH', '2019-01-08'),
(80, '304745.svg', 'tMJCYoVe', 'https://www.lucasvandenberg.fr/transferwe/files/tMJCYoVe', '2019-01-08'),
(81, '304745.svg', 'b31NoJYJ', 'https://www.lucasvandenberg.fr/transferwe/files/b31NoJYJ', '2019-01-08'),
(82, 'original_msg.txt', 'zNrMAKxZ', 'https://www.lucasvandenberg.fr/transferwe/files/zNrMAKxZ', '2019-01-08'),
(83, 'impact.ttf', 'WEwGqsVM', 'https://www.lucasvandenberg.fr/transferwe/files/WEwGqsVM', '2019-01-08'),
(84, 'impact.ttf', 'N32nbATJ', 'https://www.lucasvandenberg.fr/transferwe/files/N32nbATJ', '2019-01-08'),
(85, 'worldwide.svg', 'Ke3EifCX', 'https://www.lucasvandenberg.fr/transferwe/files/Ke3EifCX', '2019-01-08'),
(86, '304745.svg', '6OvKNuRp', 'https://www.lucasvandenberg.fr/transferwe/files/6OvKNuRp', '2019-01-08'),
(87, 'worldwide.svg', '2C94GTmZ', 'https://www.lucasvandenberg.fr/transferwe/files/2C94GTmZ', '2019-01-08'),
(88, 'worldwide.svg', '6kWraIxz', 'https://www.lucasvandenberg.fr/transferwe/files/6kWraIxz', '2019-01-08'),
(89, '304745.svg', 'yYT2AwzA', 'https://www.lucasvandenberg.fr/transferwe/files/yYT2AwzA', '2019-01-09'),
(90, '304745.svg', 'toC4nm13', 'https://www.lucasvandenberg.fr/transferwe/files/toC4nm13', '2019-01-09'),
(91, '304745.svg', 'ME9bSSkK', 'https://www.lucasvandenberg.fr/transferwe/files/ME9bSSkK', '2019-01-09'),
(92, '304745.svg', 'RVJxMdtd', 'https://www.lucasvandenberg.fr/transferwe/files/RVJxMdtd', '2019-01-09'),
(93, '304745.svg', 'cr77vS2V', 'https://www.lucasvandenberg.fr/transferwe/files/cr77vS2V', '2019-01-09'),
(94, '304745.svg', 'jDszN02G', 'https://www.lucasvandenberg.fr/transferwe/files/jDszN02G', '2019-01-09'),
(95, '304745.svg', 'i3NjIB1u', 'https://www.lucasvandenberg.fr/transferwe/files/i3NjIB1u', '2019-01-09'),
(96, '304745.svg', 'BI9I3RJL', 'https://www.lucasvandenberg.fr/transferwe/files/BI9I3RJL', '2019-01-09'),
(97, '304745.svg', 'qIliNtKW', 'https://www.lucasvandenberg.fr/transferwe/files/qIliNtKW', '2019-01-09'),
(98, '304745.svg', 'p7OrK6nQ', 'https://www.lucasvandenberg.fr/transferwe/files/p7OrK6nQ', '2019-01-09'),
(99, '304745.svg', 'Prm8Zlqn', 'https://www.lucasvandenberg.fr/transferwe/files/Prm8Zlqn', '2019-01-09'),
(100, '304745.svg', 'uWdckhME', 'https://www.lucasvandenberg.fr/transferwe/files/uWdckhME', '2019-01-09'),
(101, '304745.svg', 'm1cMYLDt', 'https://www.lucasvandenberg.fr/transferwe/files/m1cMYLDt', '2019-01-09'),
(102, '304745.svg', 'A1yjzU23', 'https://www.lucasvandenberg.fr/transferwe/files/A1yjzU23', '2019-01-09'),
(103, '304745.svg', '765fjgsG', 'https://www.lucasvandenberg.fr/transferwe/files/765fjgsG', '2019-01-09'),
(104, '304745.svg', 'LUcJhsIN', 'https://www.lucasvandenberg.fr/transferwe/files/LUcJhsIN', '2019-01-09'),
(105, '304745.svg', 'A9Zfxj2a', 'https://www.lucasvandenberg.fr/transferwe/files/A9Zfxj2a', '2019-01-09'),
(106, 'impact.ttf', 'Gsvto1US', 'https://www.lucasvandenberg.fr/transferwe/files/Gsvto1US', '2019-01-09'),
(107, 'impact.ttf', 'TVhvW5si', 'https://www.lucasvandenberg.fr/transferwe/files/TVhvW5si', '2019-01-09'),
(108, 'impact.ttf', 'BgcAtE2e', 'https://www.lucasvandenberg.fr/transferwe/files/BgcAtE2e', '2019-01-09'),
(109, 'impact.ttf', 'qlC6dATf', 'https://www.lucasvandenberg.fr/transferwe/files/qlC6dATf', '2019-01-09'),
(110, 'impact.ttf', 'Q0oXiatW', 'https://www.lucasvandenberg.fr/transferwe/files/Q0oXiatW', '2019-01-09'),
(111, 'impact.ttf', 'fsNFMR2F', 'https://www.lucasvandenberg.fr/transferwe/files/fsNFMR2F', '2019-01-09'),
(112, 'impact.ttf', 'dOvFPZ3m', 'https://www.lucasvandenberg.fr/transferwe/files/dOvFPZ3m', '2019-01-09'),
(113, 'impact.ttf', 'gsLmwoAX', 'https://www.lucasvandenberg.fr/transferwe/files/gsLmwoAX', '2019-01-09'),
(114, 'impact.ttf', 'TC83Hrha', 'https://www.lucasvandenberg.fr/transferwe/files/TC83Hrha', '2019-01-09'),
(115, 'impact.ttf', '17pNAvH8', 'https://www.lucasvandenberg.fr/transferwe/files/17pNAvH8', '2019-01-09'),
(116, 'impact.ttf', '72YCDiT0', 'https://www.lucasvandenberg.fr/transferwe/files/72YCDiT0', '2019-01-09'),
(117, 'impact.ttf', 'wJpK1AhZ', 'https://www.lucasvandenberg.fr/transferwe/files/wJpK1AhZ', '2019-01-09'),
(118, 'impact.ttf', 'dagzF7fW', 'https://www.lucasvandenberg.fr/transferwe/files/dagzF7fW', '2019-01-09'),
(119, 'impact.ttf', 'MDYL6EWZ', 'https://www.lucasvandenberg.fr/transferwe/files/MDYL6EWZ', '2019-01-09'),
(120, 'impact.ttf', 'aPhSXqjv', 'https://www.lucasvandenberg.fr/transferwe/files/aPhSXqjv', '2019-01-09'),
(121, 'impact.ttf', 'MfphrrF9', 'https://www.lucasvandenberg.fr/transferwe/files/MfphrrF9', '2019-01-09'),
(122, 'impact.ttf', '3zzzEkgv', 'https://www.lucasvandenberg.fr/transferwe/files/3zzzEkgv', '2019-01-09'),
(123, 'impact.ttf', '0NFH2jPd', 'https://www.lucasvandenberg.fr/transferwe/files/0NFH2jPd', '2019-01-09'),
(124, 'impact.ttf', 'asBEUh3i', 'https://www.lucasvandenberg.fr/transferwe/files/asBEUh3i', '2019-01-09'),
(125, 'impact.ttf', 'iXvkxyyY', 'https://www.lucasvandenberg.fr/transferwe/files/iXvkxyyY', '2019-01-09'),
(126, 'impact.ttf', 'c3MUWUsd', 'https://www.lucasvandenberg.fr/transferwe/files/c3MUWUsd', '2019-01-09'),
(127, 'impact.ttf', 'xxOtoHUP', 'https://www.lucasvandenberg.fr/transferwe/files/xxOtoHUP', '2019-01-09'),
(128, 'impact.ttf', 'i5rJrdwT', 'https://www.lucasvandenberg.fr/transferwe/files/i5rJrdwT', '2019-01-09'),
(129, 'Logo ACS.png', 'AVztFKXh', 'https://www.lucasvandenberg.fr/transferwe/files/AVztFKXh', '2019-01-09'),
(130, 'Logo ACS.png', 'Fab6KaDA', 'https://www.lucasvandenberg.fr/transferwe/files/Fab6KaDA', '2019-01-09'),
(131, 'Logo ACS.png', '1oT2koIT', 'https://www.lucasvandenberg.fr/transferwe/files/1oT2koIT', '2019-01-09'),
(132, 'Logo ACS.png', 'ZMEKiPif', 'https://www.lucasvandenberg.fr/transferwe/files/ZMEKiPif', '2019-01-09'),
(133, 'Logo ACS.png', 'p5RLfZC5', 'https://www.lucasvandenberg.fr/transferwe/files/p5RLfZC5', '2019-01-09'),
(134, 'Logo ACS.png', 'colfgjs1', 'https://www.lucasvandenberg.fr/transferwe/files/colfgjs1', '2019-01-09'),
(135, 'Logo ACS.png', '9N4exTNd', 'https://www.lucasvandenberg.fr/transferwe/files/9N4exTNd', '2019-01-09'),
(136, 'Logo ACS.png', 'nWIAwmOv', 'https://www.lucasvandenberg.fr/transferwe/files/nWIAwmOv', '2019-01-09'),
(137, 'Lion-de-Bartholdi_format_924x367.jpg', 'fByEYcH3', 'https://www.lucasvandenberg.fr/transferwe/files/files/fByEYcH3.zip', '2019-01-09'),
(138, 'Lion-de-Bartholdi_format_924x367.jpg', 'yAu4yvgB', 'https://www.lucasvandenberg.fr/transferwe/files/yAu4yvgB.zip', '2019-01-09'),
(139, 'original_msg.txt', 'oqk1bhcS', 'https://www.lucasvandenberg.fr/transferwe/files/oqk1bhcS.zip', '2019-01-09'),
(140, 'original_msg.txt', 'TCpiyH6Q', 'https://www.lucasvandenberg.fr/transferwe/files/TCpiyH6Q.zip', '2019-01-09'),
(141, 'Lion-de-Bartholdi_format_924x367.jpg', 'FbjkBVFh', 'https://www.lucasvandenberg.fr/transferwe/files/FbjkBVFh.zip', '2019-01-09'),
(142, '304745.svg', 's6FX5CMu', 'https://www.lucasvandenberg.fr/ff/files/s6FX5CMu.zip', '2019-01-09'),
(143, '304745.svg', 'fxGFiJz2', 'https://www.lucasvandenberg.fr/ff/files/fxGFiJz2.zip', '2019-01-09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fichiers`
--
ALTER TABLE `fichiers`
  ADD PRIMARY KEY (`id_fichier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichiers`
--
ALTER TABLE `fichiers`
  MODIFY `id_fichier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
