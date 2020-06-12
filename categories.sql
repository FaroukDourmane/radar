-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 12 juin 2020 à 10:32
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10


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
--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name_en`, `name_tr`, `name_ar`, `image_path`) VALUES
(1, 'Real estate', 'Emlak', 'العقارات', 'assets/svg/home-small-black.svg'),
(2, 'Tourism', 'turizm', 'سياحة', 'assets/categories/plane.svg'),
(3, 'Education', 'Eğitim', 'تعليم', 'assets/categories/university.svg'),
(4, 'lawyer', 'avukat', 'محامي', 'assets/categories/law.svg'),
(5, 'press', 'basın', 'صحافة', 'assets/categories/press.svg'),
(6, 'technology', 'teknoloji', 'تكنولوجيا', 'assets/categories/technology.svg'),
(7, 'consulting', 'Danışmanlık', 'إستشارات', 'assets/categories/consulting.svg'),
(8, 'Marine services', 'deniz hizmetleri', 'خدمات بحرية', 'assets/categories/marine.svg'),
(9, 'entertainment', 'eğlence', 'ترفيه', 'assets/categories/entertainment.svg'),
(10, 'electricity', 'elektrik', 'كهرباء', 'assets/categories/electricity.svg'),
(11, 'Finance', 'finans', 'خدمات مالية', 'assets/categories/finance.svg'),
(12, 'Food', 'Gıda', 'غذاء', 'assets/categories/food.svg'),
(13, 'Security', 'Güvenlik', 'أمن', 'assets/categories/security.svg'),
(14, 'shoes', 'ayakkabı', 'أحذية', 'assets/categories/shoes.svg'),
(15, 'Beauty', 'güzellik', 'جمال', 'assets/categories/beauty.svg'),
(16, 'flight', 'Uçuş', 'طيران', 'assets/categories/fly.svg'),
(17, 'Animals', 'Hayvanlar', 'حيوانات', 'assets/categories/animals.svg'),
(18, 'Services', 'Hizmetler', 'خدمات', 'assets/categories/services.svg'),
(19, 'Communications', 'iletişim', 'إتصالات', 'assets/categories/communications.svg'),
(20, 'Building', 'bina', 'بناء', 'assets/categories/building.svg'),
(21, 'Chemistry', 'Kimya', 'كيمياء', 'assets/categories/chemistry.svg'),
(22, 'Metal', 'Metal', 'معدن', 'assets/categories/metal.svg'),
(23, 'Media', 'Medya', 'وسائل الإعلام', 'assets/categories/media.svg'),
(24, 'marble', 'mermer', 'رخام', 'assets/categories/marble.svg'),
(25, 'Furniture', 'Mobilya', 'مفروشات', 'assets/categories/furniture.svg'),
(26, 'Office', 'Ofis', 'مكاتب', 'assets/categories/office.svg'),
(27, 'Cars', 'Arabalar', 'سيارات', 'assets/categories/car.svg'),
(28, 'sales', 'satış', 'مبيعات', 'assets/categories/sales.svg'),
(29, 'plastic', 'plastik', 'بلاستيك', 'assets/categories/plastic.svg'),
(30, 'advertisement', 'İlan', 'دعاية', 'assets/categories/advertisement.svg'),
(31, 'health', 'sağlık', 'صحة', 'assets/categories/health.svg'),
(32, 'Assurance', 'güvence', 'تأمين', 'assets/categories/assurance.svg'),
(33, 'Agriculture', 'Tarım', 'زراعة', 'assets/categories/agriculture.svg'),
(34, 'Shipping', 'Nakliye', 'شحن', 'assets/categories/shipping.svg'),
(35, 'Sewing', 'Dikiş', 'خياطة', 'assets/categories/sewing.svg'),
(36, 'Trade', 'Ticaret', 'تجارة', 'assets/categories/trade.svg'),
(37, 'Industry', 'sanayi', 'صناعة', 'assets/categories/industry.svg'),
(38, 'Other', 'Diğer', 'أخرى', 'assets/categories/other.svg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
