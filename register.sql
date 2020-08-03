-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 août 2020 à 11:39
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `register`
--

-- --------------------------------------------------------

--
-- Structure de la table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `datesign` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `student_table`
--

INSERT INTO `student_table` (`id`, `name`, `email`, `password`) VALUES
(1, 'denise', '', ''),
(2, 'denise', '', ''),
(3, 'denise', '', ''),
(4, '', '', ''),
(5, 'denise', '', ''),
(6, 'denise', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(14, 'denise', 'denise@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'denise', 'dig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'denise', 'jjjj@f', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'denise', 'denise@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(22, 'DIG', 'dig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'DIG', 'dig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'DIG', 'dig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'tra', 'tra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 'DD', 'dd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'DD', 'dd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'DIG', 'soeur@s', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'DIG', 'soeur@s', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'DIG', 'soeur@s', '81dc9bdb52d04dc20036dbd8313ed055'),
(31, 'DIG', 'dig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(32, 'denise', 'denise@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(33, 'denise', 'denise@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
