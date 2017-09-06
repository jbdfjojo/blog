-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Novembre 2016 à 12:35
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `article` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `titre`, `date`, `auteur`, `article`) VALUES
(1, 'test', '11/12/2016', 'jjo', '<p>update</p>\r\n'),
(4, 'article 2', '11/05/2016', 'jojo', '<p><u><span style="color:#0000cd"><span style="font-size:14px"><span style="font-family:Courier New,Courier,monospace"><strong>test artible:</strong></span></span></span></u></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo<br />\r\nillum laboriosam, obcaecati officia perspiciatis quae rerum sit? Adipisci alias enim<br />\r\nesse illo, maxime mollitia odio, quae reprehenderit suscipit, voluptatibus voluptatum?</p>\r\n\r\n<ul>\r\n	<li>test 1</li>\r\n	<li>test 2</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>vrais test&nbsp;</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
