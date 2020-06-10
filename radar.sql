-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 10 juin 2020 à 09:37
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `radar`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_tr` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_ar` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_path` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name_en`, `name_tr`, `name_ar`, `image_path`) VALUES
(1, 'Real estate', 'Emlak', 'العقارات', 'assets/svg/home-small-black.svg'),
(2, 'Tourism', 'turizm', 'سياحة', 'assets/categories/plane.svg'),
(3, 'Education', 'Eğitim', 'تعليم', 'assets/categories/university.svg');

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `category` int(255) NOT NULL,
  `account_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `account_password` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceo_firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceo_lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceo_job_description` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceo_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceo_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `company_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `company_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `company_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `company_facebook` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `company_instagram` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `company_twitter` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `company_linkedin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `company_whatsapp` varchar(255) COLLATE utf8_bin NOT NULL,
  `company_logo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ceo_avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `work_description` text COLLATE utf8_bin NOT NULL,
  `map_code` text COLLATE utf8_bin,
  `added_date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `name`, `category`, `account_email`, `account_password`, `ceo_firstname`, `ceo_lastname`, `ceo_job_description`, `ceo_email`, `ceo_phone`, `company_email`, `company_phone`, `company_address`, `company_facebook`, `company_instagram`, `company_twitter`, `company_linkedin`, `company_whatsapp`, `company_logo`, `ceo_avatar`, `work_description`, `map_code`, `added_date`) VALUES
(3, 'Microsoft', 2, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', '    Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905');

-- --------------------------------------------------------

--
-- Structure de la table `company_images`
--

CREATE TABLE `company_images` (
  `id` int(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `image_path` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `company_images`
--

INSERT INTO `company_images` (`id`, `company_id`, `image_path`) VALUES
(1, 2, 'assets/company/2/955829bg-test.jpg'),
(2, 2, 'assets/company/2/677594bg-test2.jpg'),
(3, 2, 'assets/company/2/605127bg-test3.jpg'),
(4, 3, 'assets/company/3/204221bg-test.jpg'),
(5, 3, 'assets/company/3/464438bg-test2.jpg'),
(6, 3, 'assets/company/3/514094bg-test3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `exchange_rates`
--

CREATE TABLE `exchange_rates` (
  `last_update` varchar(255) COLLATE utf8_bin NOT NULL,
  `gbp` float(23,19) NOT NULL,
  `eur` float(23,19) NOT NULL,
  `try` float(23,19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `exchange_rates`
--

INSERT INTO `exchange_rates` (`last_update`, `gbp`, `eur`, `try`) VALUES
('1591089504', 0.8000000119209290000, 0.8999999761581421000, 6.8099999427795410000);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `token` varchar(255) COLLATE utf8_bin NOT NULL,
  `time` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`email`, `token`, `time`, `id`) VALUES
('microsoft@email.com', '$2y$10$k7EgtDXaaqwp/5.3uNhbb.QiU1Y8hDmaKs5KT.A5/yB68UVGiGfxm5edf88a5a496b1591707813127001', '1591707813', '3a0cd383a7b2f81d9be21cfb62b74916');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `company_images`
--
ALTER TABLE `company_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `company_images`
--
ALTER TABLE `company_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
