-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radar`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_tr` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_ar` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_path` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
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

-- --------------------------------------------------------

--
-- Table structure for table `company`
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
  `map_code` text COLLATE utf8_bin DEFAULT NULL,
  `added_date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `category`, `account_email`, `account_password`, `ceo_firstname`, `ceo_lastname`, `ceo_job_description`, `ceo_email`, `ceo_phone`, `company_email`, `company_phone`, `company_address`, `company_facebook`, `company_instagram`, `company_twitter`, `company_linkedin`, `company_whatsapp`, `company_logo`, `ceo_avatar`, `work_description`, `map_code`, `added_date`) VALUES
(3, 'Microsoft', 6, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', '    Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(4, 'Microsoft', 7, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(5, 'Microsoft', 8, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(6, 'Microsoft', 9, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(7, 'Microsoft', 10, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(8, 'Microsoft', 11, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(9, 'Microsoft', 12, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(10, 'Microsoft', 13, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(11, 'Microsoft', 14, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(12, 'Microsoft', 15, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(13, 'Microsoft', 16, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(14, 'Microsoft', 17, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905'),
(15, 'Microsoft', 18, 'microsoft@email.com', '$2y$10$1cPIYUz5C/2dzCM6b2TNWevUQG86xSuls1pvBkQcBhdaw9LqaJuJ2', 'Farouk', 'Dourmane', 'Ceo & Web Developer', 'dourmanefarouk@gmail.com', '', 'support@microsoft.com', '+905524551793', 'Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul', 'https://facebook.com/faroukdourmane', 'https://instagram.com/faroukdourmane', 'https://twitter.com/faroukdourmane', '', '+905524551793', 'assets/company/3/793195microsoft-logo.png', 'assets/company/3/67191profile_pic.jpg', ' Microsoft Corporation (/maɪkroʊ.sɒft/) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world\\\\\\\'s largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word \\\\\\\"Microsoft\\\\\\\" is a portmanteau of \\\\\\\"microcomputer\\\\\\\" and \\\\\\\"software\\\\\\\".[4] Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5] It is considered one of the Big Five technology companies alongside Amazon, Apple, Google, and Facebook.', '<iframe src=\\\\\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001347.1405943674!2d25.301370232910816!3d42.724825815141756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20Turkey!5e0!3m2!1sfr!2str!4v1591611414632!5m2!1sfr!2str\\\\\\\" width=\\\\\\\"600\\\\\\\" height=\\\\\\\"450\\\\\\\" frameborder=\\\\\\\"0\\\\\\\" style=\\\\\\\"border:0;\\\\\\\" allowfullscreen=\\\\\\\"\\\\\\\" aria-hidden=\\\\\\\"false\\\\\\\" tabindex=\\\\\\\"0\\\\\\\"></iframe>', '1591614905');

-- --------------------------------------------------------

--
-- Table structure for table `company_images`
--

CREATE TABLE `company_images` (
  `id` int(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `image_path` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `company_images`
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
-- Table structure for table `exchange_rates`
--

CREATE TABLE `exchange_rates` (
  `last_update` varchar(255) COLLATE utf8_bin NOT NULL,
  `gbp` float(23,19) NOT NULL,
  `eur` float(23,19) NOT NULL,
  `try` float(23,19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `exchange_rates`
--

INSERT INTO `exchange_rates` (`last_update`, `gbp`, `eur`, `try`) VALUES
('1591089504', 0.8000000119209290000, 0.8999999761581421000, 6.8099999427795410000);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `token` varchar(255) COLLATE utf8_bin NOT NULL,
  `time` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`email`, `token`, `time`, `id`) VALUES
('microsoft@email.com', '$2y$10$Qi7p0CBmgAAg8FiVpFMpdeSMgsq9..WTYpZN/upnnTF40KjFz16FS5ee7200d6c8d41592205325::1', '1592205325', 'n9bgiq5hgc20rj07p6hdieegi6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_images`
--
ALTER TABLE `company_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_images`
--
ALTER TABLE `company_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
