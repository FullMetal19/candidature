-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 sep. 2021 à 10:12
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ussein_candidature`
--

-- --------------------------------------------------------

--
-- Structure de la table `ec_admin`
--

DROP TABLE IF EXISTS `ec_admin`;
CREATE TABLE IF NOT EXISTS `ec_admin` (
  `mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ec_candidat`
--

DROP TABLE IF EXISTS `ec_candidat`;
CREATE TABLE IF NOT EXISTS `ec_candidat` (
  `mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ec_commentmeta`
--

DROP TABLE IF EXISTS `ec_commentmeta`;
CREATE TABLE IF NOT EXISTS `ec_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_comments`
--

DROP TABLE IF EXISTS `ec_comments`;
CREATE TABLE IF NOT EXISTS `ec_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_comments`
--

INSERT INTO `ec_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_connexion`
--

DROP TABLE IF EXISTS `ec_connexion`;
CREATE TABLE IF NOT EXISTS `ec_connexion` (
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `date_de_naissance` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ec_connexion`
--

INSERT INTO `ec_connexion` (`prenom`, `nom`, `mail`, `mot_de_passe`, `telephone`, `date_de_naissance`, `status`, `genre`, `adresse`, `image`) VALUES
('Mouhamadou', 'DIALLO', 'mouhamadou.diallo@etu.ussein.edu.sn', '1234', '', '', 0, '', '', 'image_candidat.jpg'),
('al housseynou', 'niang', 'alouzz123@gmail.com', '1234', '', '', 5, '', '', ''),
('Mouhamadou', 'DIALLO', 'diallomouha007@gmail.com', '1234', '', '', 0, '', '', ''),
('Daba', 'dieng', 'manemamadouyaya@gmail.com', 'root', '770000123', '1999-12-25', 0, 'Feminin', 'kaolack', 'candidat.png');

-- --------------------------------------------------------

--
-- Structure de la table `ec_dossier`
--

DROP TABLE IF EXISTS `ec_dossier`;
CREATE TABLE IF NOT EXISTS `ec_dossier` (
  `nom_fichier` text NOT NULL,
  `auteur` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ec_dossier`
--

INSERT INTO `ec_dossier` (`nom_fichier`, `auteur`) VALUES
('licence.pdf', 'mouhamadou.diallo@etu.ussein.edu.sn'),
('licence.pdf', 'manemamadouyaya@gmail.com'),
('communication.pdf', 'manemamadouyaya@gmail.com'),
('article_hors_domaine.pdf', 'manemamadouyaya@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `ec_links`
--

DROP TABLE IF EXISTS `ec_links`;
CREATE TABLE IF NOT EXISTS `ec_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_offre`
--

DROP TABLE IF EXISTS `ec_offre`;
CREATE TABLE IF NOT EXISTS `ec_offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ufr` varchar(200) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `nom_fichier` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ec_offre`
--

INSERT INTO `ec_offre` (`id`, `nom_ufr`, `titre`, `description`, `nom_fichier`) VALUES
(1, 'UFR SFI', 'Appel a candidatures pour le recrutement d\'un attache temporaire d\'enseignement et de recherche (ATER) en informatique a l\'UFR science fondamentale de l\'ingénierie', 'néant', 'https://www.ussein.sn/wp-content/uploads/2021/09/0002-scaled.jpg'),
(3, 'UFR SAEPAN', 'Appel a candidatures pour le recrutement d\'un attache temporaire d\'enseignement et de recherche (ATER) en informatique a l\'UFR science fondamentale de l\'ingénierie', '', 'https://www.ussein.sn/wp-content/uploads/2021/05/0001-2-scaled.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `ec_options`
--

DROP TABLE IF EXISTS `ec_options`;
CREATE TABLE IF NOT EXISTS `ec_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=MyISAM AUTO_INCREMENT=323 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_options`
--

INSERT INTO `ec_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/candidature', 'yes'),
(2, 'home', 'http://localhost/candidature', 'yes'),
(3, 'blogname', 'USSEIN CANDIDATURE', 'yes'),
(4, 'blogdescription', 'Un site utilisant WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'candidature@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G\\hi', 'yes'),
(25, 'links_updated_date_format', 'd F Y G\\hi', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:95:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:39:\"index.php?&page_id=53&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:62:\"C:\\wamp64\\www\\candidature/wp-content/themes/emphires/style.css\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'emphires', 'yes'),
(41, 'stylesheet', 'emphires', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'page', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', 'Europe/Paris', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '53', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1647088617', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '49752', 'yes'),
(100, 'ec_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'fr_FR', 'yes'),
(103, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:159:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Articles récents</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:233:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Commentaires récents</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:151:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Catégories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'sidebars_widgets', 'a:9:{s:19:\"wp_inactive_widgets\";a:0:{}s:17:\"cspt-sidebar-post\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:17:\"cspt-sidebar-page\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}s:19:\"cspt-sidebar-search\";a:0:{}s:13:\"cspt-footer-1\";a:0:{}s:13:\"cspt-footer-2\";a:0:{}s:13:\"cspt-footer-3\";a:0:{}s:13:\"cspt-footer-4\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(105, 'cron', 'a:7:{i:1632436618;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1632443818;a:4:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1632487018;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1632489097;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1632489100;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1632832618;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(106, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'recovery_keys', 'a:0:{}', 'yes'),
(121, 'https_detection_errors', 'a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:28:\"La demande HTTPS a échoué.\";}}', 'yes'),
(120, 'theme_mods_twentytwentyone', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1631625136;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'yes'),
(312, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.8.1.zip\";s:6:\"locale\";s:5:\"fr_FR\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.8.1.zip\";s:10:\"no_content\";s:0:\"\";s:11:\"new_bundled\";s:0:\"\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.8.1\";s:7:\"version\";s:5:\"5.8.1\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1632400647;s:15:\"version_checked\";s:5:\"5.8.1\";s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:4:\"core\";s:4:\"slug\";s:7:\"default\";s:8:\"language\";s:5:\"fr_FR\";s:7:\"version\";s:5:\"5.8.1\";s:7:\"updated\";s:19:\"2021-09-16 12:33:36\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/5.8.1/fr_FR.zip\";s:10:\"autoupdate\";b:1;}}}', 'no'),
(313, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1632400647;s:7:\"checked\";a:4:{s:8:\"emphires\";s:3:\"2.1\";s:14:\"twentynineteen\";s:3:\"2.1\";s:12:\"twentytwenty\";s:3:\"1.8\";s:15:\"twentytwentyone\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:3:{s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"2.1\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.2.1.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.8\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.8.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.4.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}}s:12:\"translations\";a:0:{}}', 'no'),
(314, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1632400648;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:6:\"4.1.12\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:57:\"https://downloads.wordpress.org/plugin/akismet.4.1.12.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";s:6:\"tested\";s:5:\"5.8.1\";s:12:\"requires_php\";b:0;}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";}}s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:6:\"4.1.10\";s:9:\"hello.php\";s:5:\"1.7.2\";}}', 'no'),
(134, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:21:\"candidature@gmail.com\";s:7:\"version\";s:5:\"5.8.1\";s:9:\"timestamp\";i:1631536646;}', 'no'),
(142, '_transient_health-check-site-status-result', '{\"good\":13,\"recommended\":6,\"critical\":0}', 'yes'),
(160, 'finished_updating_comment_type', '1', 'yes'),
(198, '_site_transient_timeout_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', '1632420252', 'no'),
(199, '_site_transient_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:0;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(148, 'can_compress_scripts', '1', 'no'),
(149, 'cspt-ratingsbox-show-date', '1632229917', 'yes'),
(150, 'widget_recent-posts', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(151, 'widget_recent-comments', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(152, 'theme_mods_emphires', 'a:2:{s:18:\"custom_css_post_id\";i:47;s:18:\"nav_menu_locations\";a:1:{s:19:\"creativesplanet-top\";i:2;}}', 'yes'),
(155, 'current_theme', 'Emphires', 'yes'),
(156, 'theme_switched', '', 'yes'),
(157, '_transient_emphires_merlin_redirect', '1', 'yes'),
(196, '_site_transient_timeout_browser_1853ad8a7dda7a4c57fa7db69e000b5c', '1632420251', 'no'),
(197, '_site_transient_browser_1853ad8a7dda7a4c57fa7db69e000b5c', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"93.0.4577.63\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(233, '_site_transient_browser_03e911a5967ec7b63385b961401fc927', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"93.0.4577.82\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(214, 'merlin_emphires_completed', '1631815897', 'yes'),
(215, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(232, '_site_transient_timeout_browser_03e911a5967ec7b63385b961401fc927', '1632834315', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `ec_postmeta`
--

DROP TABLE IF EXISTS `ec_postmeta`;
CREATE TABLE IF NOT EXISTS `ec_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_postmeta`
--

INSERT INTO `ec_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'insertion_candidature.php'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1631625331:1'),
(4, 5, '_wp_page_template', 'sc_connexion.php'),
(5, 7, '_edit_lock', '1631625480:1'),
(6, 7, '_wp_page_template', 'sc_inscription.php'),
(7, 9, '_edit_lock', '1631625692:1'),
(8, 9, '_wp_page_template', 'sc_changer_mot_de_pass.php'),
(9, 11, '_edit_lock', '1631625596:1'),
(10, 11, '_wp_page_template', 'sc_mot_de_pass_oublier.php'),
(11, 13, '_wp_attached_file', '2021/09/USSEIN-LOGO.png'),
(12, 13, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2561;s:6:\"height\";i:2207;s:4:\"file\";s:23:\"2021/09/USSEIN-LOGO.png\";s:5:\"sizes\";a:16:{s:6:\"medium\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-300x259.png\";s:5:\"width\";i:300;s:6:\"height\";i:259;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:24:\"USSEIN-LOGO-1024x882.png\";s:5:\"width\";i:1024;s:6:\"height\";i:882;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-768x662.png\";s:5:\"width\";i:768;s:6:\"height\";i:662;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1536x1324.png\";s:5:\"width\";i:1536;s:6:\"height\";i:1324;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"2048x2048\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-2048x1765.png\";s:5:\"width\";i:2048;s:6:\"height\";i:1765;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x780\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-600x780.png\";s:5:\"width\";i:600;s:6:\"height\";i:780;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x800\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-600x800.png\";s:5:\"width\";i:600;s:6:\"height\";i:800;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x350\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-770x350.png\";s:5:\"width\";i:770;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x635\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-770x635.png\";s:5:\"width\";i:770;s:6:\"height\";i:635;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x500\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-770x500.png\";s:5:\"width\";i:770;s:6:\"height\";i:500;s:9:\"mime-type\";s:9:\"image/png\";}s:17:\"cspt-img-770x9999\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-770x664.png\";s:5:\"width\";i:770;s:6:\"height\";i:664;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x770\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-770x770.png\";s:5:\"width\";i:770;s:6:\"height\";i:770;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-300x300\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-500x560\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-500x560.png\";s:5:\"width\";i:500;s:6:\"height\";i:560;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-800x256\";a:4:{s:4:\"file\";s:23:\"USSEIN-LOGO-800x256.png\";s:5:\"width\";i:800;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(14, 15, '_edit_lock', '1631628271:1'),
(15, 15, '_wp_page_template', 'sc_reinitialisation_par_mail.php'),
(81, 51, '_wp_attached_file', '2021/09/recteur.png'),
(17, 18, '_edit_lock', '1632299519:1'),
(18, 18, '_wp_page_template', 'sc_accueil.php'),
(19, 22, '_menu_item_type', 'post_type'),
(20, 22, '_menu_item_menu_item_parent', '0'),
(21, 22, '_menu_item_object_id', '18'),
(22, 22, '_menu_item_object', 'page'),
(23, 22, '_menu_item_target', ''),
(24, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(25, 22, '_menu_item_xfn', ''),
(26, 22, '_menu_item_url', ''),
(28, 23, '_wp_attached_file', '2021/09/ufr-saepan.png'),
(29, 23, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2200;s:6:\"height\";i:550;s:4:\"file\";s:22:\"2021/09/ufr-saepan.png\";s:5:\"sizes\";a:16:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"ufr-saepan-300x75.png\";s:5:\"width\";i:300;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:23:\"ufr-saepan-1024x256.png\";s:5:\"width\";i:1024;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-768x192.png\";s:5:\"width\";i:768;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:23:\"ufr-saepan-1536x384.png\";s:5:\"width\";i:1536;s:6:\"height\";i:384;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"2048x2048\";a:4:{s:4:\"file\";s:23:\"ufr-saepan-2048x512.png\";s:5:\"width\";i:2048;s:6:\"height\";i:512;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x780\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-600x550.png\";s:5:\"width\";i:600;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x800\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-600x550.png\";s:5:\"width\";i:600;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x350\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-770x350.png\";s:5:\"width\";i:770;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x635\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-770x550.png\";s:5:\"width\";i:770;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x500\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-770x500.png\";s:5:\"width\";i:770;s:6:\"height\";i:500;s:9:\"mime-type\";s:9:\"image/png\";}s:17:\"cspt-img-770x9999\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-770x193.png\";s:5:\"width\";i:770;s:6:\"height\";i:193;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x770\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-770x550.png\";s:5:\"width\";i:770;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-300x300\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-500x560\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-500x550.png\";s:5:\"width\";i:500;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-800x256\";a:4:{s:4:\"file\";s:22:\"ufr-saepan-800x256.png\";s:5:\"width\";i:800;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(30, 24, '_wp_attached_file', '2021/09/ufr-sfi.png'),
(31, 24, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2200;s:6:\"height\";i:550;s:4:\"file\";s:19:\"2021/09/ufr-sfi.png\";s:5:\"sizes\";a:16:{s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"ufr-sfi-300x75.png\";s:5:\"width\";i:300;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:20:\"ufr-sfi-1024x256.png\";s:5:\"width\";i:1024;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-768x192.png\";s:5:\"width\";i:768;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:20:\"ufr-sfi-1536x384.png\";s:5:\"width\";i:1536;s:6:\"height\";i:384;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"2048x2048\";a:4:{s:4:\"file\";s:20:\"ufr-sfi-2048x512.png\";s:5:\"width\";i:2048;s:6:\"height\";i:512;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x780\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-600x550.png\";s:5:\"width\";i:600;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x800\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-600x550.png\";s:5:\"width\";i:600;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x350\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-770x350.png\";s:5:\"width\";i:770;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x635\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-770x550.png\";s:5:\"width\";i:770;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x500\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-770x500.png\";s:5:\"width\";i:770;s:6:\"height\";i:500;s:9:\"mime-type\";s:9:\"image/png\";}s:17:\"cspt-img-770x9999\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-770x193.png\";s:5:\"width\";i:770;s:6:\"height\";i:193;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x770\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-770x550.png\";s:5:\"width\";i:770;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-300x300\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-500x560\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-500x550.png\";s:5:\"width\";i:500;s:6:\"height\";i:550;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-800x256\";a:4:{s:4:\"file\";s:19:\"ufr-sfi-800x256.png\";s:5:\"width\";i:800;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(32, 25, '_edit_lock', '1631817557:1'),
(33, 26, '_edit_lock', '1631817744:1'),
(34, 26, '_wp_page_template', 'sc_offre.php'),
(35, 26, '_wp_trash_meta_status', 'publish'),
(36, 26, '_wp_trash_meta_time', '1631817806'),
(37, 26, '_wp_desired_post_slug', 'plus-dinformation'),
(38, 29, '_edit_lock', '1632310767:1'),
(39, 29, '_wp_page_template', 'sc_offre.php'),
(40, 2, '_edit_lock', '1632302852:1'),
(41, 35, '_edit_lock', '1632299694:1'),
(42, 35, '_wp_page_template', 'sc_fiche_a_postuler.php'),
(43, 37, '_menu_item_type', 'post_type'),
(44, 37, '_menu_item_menu_item_parent', '0'),
(45, 37, '_menu_item_object_id', '18'),
(46, 37, '_menu_item_object', 'page'),
(47, 37, '_menu_item_target', ''),
(48, 37, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(49, 37, '_menu_item_xfn', ''),
(50, 37, '_menu_item_url', ''),
(51, 37, '_menu_item_orphaned', '1632310982'),
(52, 38, '_edit_lock', '1632311066:1'),
(53, 38, '_wp_page_template', 'sc_compte_candidat.php'),
(54, 41, '_edit_lock', '1632311735:1'),
(55, 41, '_wp_page_template', 'sc_recapitulatif.php'),
(56, 44, '_menu_item_type', 'post_type'),
(57, 44, '_menu_item_menu_item_parent', '0'),
(58, 44, '_menu_item_object_id', '41'),
(59, 44, '_menu_item_object', 'page'),
(60, 44, '_menu_item_target', ''),
(61, 44, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(62, 44, '_menu_item_xfn', ''),
(63, 44, '_menu_item_url', ''),
(76, 46, '_wp_trash_meta_status', 'publish'),
(65, 45, '_menu_item_type', 'post_type'),
(66, 45, '_menu_item_menu_item_parent', '0'),
(67, 45, '_menu_item_object_id', '38'),
(68, 45, '_menu_item_object', 'page'),
(69, 45, '_menu_item_target', ''),
(70, 45, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(71, 45, '_menu_item_xfn', ''),
(72, 45, '_menu_item_url', ''),
(75, 46, '_edit_lock', '1632315326:1'),
(74, 22, '_wp_old_date', '2021-09-16'),
(77, 46, '_wp_trash_meta_time', '1632315328'),
(78, 49, '_edit_lock', '1632315567:1'),
(79, 49, '_wp_trash_meta_status', 'publish'),
(80, 49, '_wp_trash_meta_time', '1632315615'),
(82, 51, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1042;s:6:\"height\";i:264;s:4:\"file\";s:19:\"2021/09/recteur.png\";s:5:\"sizes\";a:14:{s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"recteur-300x76.png\";s:5:\"width\";i:300;s:6:\"height\";i:76;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:20:\"recteur-1024x259.png\";s:5:\"width\";i:1024;s:6:\"height\";i:259;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:19:\"recteur-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:19:\"recteur-768x195.png\";s:5:\"width\";i:768;s:6:\"height\";i:195;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x780\";a:4:{s:4:\"file\";s:19:\"recteur-600x264.png\";s:5:\"width\";i:600;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x800\";a:4:{s:4:\"file\";s:19:\"recteur-600x264.png\";s:5:\"width\";i:600;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x350\";a:4:{s:4:\"file\";s:19:\"recteur-770x264.png\";s:5:\"width\";i:770;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x635\";a:4:{s:4:\"file\";s:19:\"recteur-770x264.png\";s:5:\"width\";i:770;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x500\";a:4:{s:4:\"file\";s:19:\"recteur-770x264.png\";s:5:\"width\";i:770;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:17:\"cspt-img-770x9999\";a:4:{s:4:\"file\";s:19:\"recteur-770x195.png\";s:5:\"width\";i:770;s:6:\"height\";i:195;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x770\";a:4:{s:4:\"file\";s:19:\"recteur-770x264.png\";s:5:\"width\";i:770;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-300x300\";a:4:{s:4:\"file\";s:19:\"recteur-300x264.png\";s:5:\"width\";i:300;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-500x560\";a:4:{s:4:\"file\";s:19:\"recteur-500x264.png\";s:5:\"width\";i:500;s:6:\"height\";i:264;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-800x256\";a:4:{s:4:\"file\";s:19:\"recteur-800x256.png\";s:5:\"width\";i:800;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(83, 52, '_wp_attached_file', '2021/09/USSEIN-LOGO-1.png'),
(84, 52, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2337;s:6:\"height\";i:1634;s:4:\"file\";s:25:\"2021/09/USSEIN-LOGO-1.png\";s:5:\"sizes\";a:16:{s:6:\"medium\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-300x210.png\";s:5:\"width\";i:300;s:6:\"height\";i:210;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:26:\"USSEIN-LOGO-1-1024x716.png\";s:5:\"width\";i:1024;s:6:\"height\";i:716;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-768x537.png\";s:5:\"width\";i:768;s:6:\"height\";i:537;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:27:\"USSEIN-LOGO-1-1536x1074.png\";s:5:\"width\";i:1536;s:6:\"height\";i:1074;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"2048x2048\";a:4:{s:4:\"file\";s:27:\"USSEIN-LOGO-1-2048x1432.png\";s:5:\"width\";i:2048;s:6:\"height\";i:1432;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x780\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-600x780.png\";s:5:\"width\";i:600;s:6:\"height\";i:780;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-600x800\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-600x800.png\";s:5:\"width\";i:600;s:6:\"height\";i:800;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x350\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-770x350.png\";s:5:\"width\";i:770;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x635\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-770x635.png\";s:5:\"width\";i:770;s:6:\"height\";i:635;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x500\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-770x500.png\";s:5:\"width\";i:770;s:6:\"height\";i:500;s:9:\"mime-type\";s:9:\"image/png\";}s:17:\"cspt-img-770x9999\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-770x538.png\";s:5:\"width\";i:770;s:6:\"height\";i:538;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-770x770\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-770x770.png\";s:5:\"width\";i:770;s:6:\"height\";i:770;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-300x300\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-500x560\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-500x560.png\";s:5:\"width\";i:500;s:6:\"height\";i:560;s:9:\"mime-type\";s:9:\"image/png\";}s:16:\"cspt-img-800x256\";a:4:{s:4:\"file\";s:25:\"USSEIN-LOGO-1-800x256.png\";s:5:\"width\";i:800;s:6:\"height\";i:256;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(85, 53, '_edit_lock', '1632317110:1'),
(86, 53, '_wp_page_template', 'sc_presentation.php');

-- --------------------------------------------------------

--
-- Structure de la table `ec_posts`
--

DROP TABLE IF EXISTS `ec_posts`;
CREATE TABLE IF NOT EXISTS `ec_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_posts`
--

INSERT INTO `ec_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:paragraph -->\n<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis commencez à écrire !</p>\n<!-- /wp:paragraph -->', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', '', 0, 'http://localhost/candidature/?p=1', 0, 'post', '', 1),
(2, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page «&nbsp;À propos&nbsp;» qui les présente aux personnes visitant du site. Cela pourrait ressembler à quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Bonjour&nbsp;! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…ou quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules supers pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href=\"http://localhost/candidature/wp-admin/\">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien&nbsp;!</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'publish', 'closed', 'open', '', 'page-d-exemple', '', '', '2021-09-22 11:26:45', '2021-09-22 09:26:45', '', 0, 'http://localhost/candidature/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:heading --><h2>Qui sommes-nous ?</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>L’adresse de notre site est : http://localhost/candidature.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Commentaires</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Quand vous laissez un commentaire sur notre site, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Une chaîne anonymisée créée à partir de votre adresse e-mail (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Médias</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Si vous téléversez des images sur le site, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les personnes visitant votre site peuvent télécharger et extraire des données de localisation depuis ces images.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse e-mail et site dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Contenu embarqué depuis d’autres sites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Utilisation et transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Si vous demandez une réinitialisation de votre mot de passe, votre adresse IP sera incluse dans l’e-mail de réinitialisation.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Durées de stockage de vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Pour les comptes qui s’inscrivent sur notre site (le cas échéant), nous stockons également les données personnelles indiquées dans leur profil. Tous les comptes peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur identifiant). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Les droits que vous avez sur vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texte suggéré : </strong>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p><!-- /wp:paragraph -->', 'Politique de confidentialité', '', 'draft', 'closed', 'open', '', 'politique-de-confidentialite', '', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', '', 0, 'http://localhost/candidature/?page_id=3', 0, 'page', '', 0),
(31, 1, '2021-09-21 16:27:50', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-09-21 16:27:50', '0000-00-00 00:00:00', '', 0, 'http://localhost/candidature/?p=31', 0, 'post', '', 0),
(5, 1, '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 'Connexion', '', 'publish', 'closed', 'closed', '', 'connexion', '', '', '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 0, 'http://localhost/candidature/?page_id=5', 0, 'page', '', 0),
(6, 1, '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 'Connexion', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 5, 'http://localhost/candidature/?p=6', 0, 'revision', '', 0),
(7, 1, '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 'inscription', '', 'publish', 'closed', 'closed', '', 'inscription', '', '', '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 0, 'http://localhost/candidature/?page_id=7', 0, 'page', '', 0),
(8, 1, '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 'inscription', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 7, 'http://localhost/candidature/?p=8', 0, 'revision', '', 0),
(9, 1, '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 'changer mot de passe', '', 'publish', 'closed', 'closed', '', 'changer-mot-de-passe', '', '', '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 0, 'http://localhost/candidature/?page_id=9', 0, 'page', '', 0),
(10, 1, '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 'changer mot de passe', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 9, 'http://localhost/candidature/?p=10', 0, 'revision', '', 0),
(11, 1, '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 'Mot de passe oublie', '', 'publish', 'closed', 'closed', '', 'mot-de-passe-oublie', '', '', '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 0, 'http://localhost/candidature/?page_id=11', 0, 'page', '', 0),
(12, 1, '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 'Mot de passe oublie', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 11, 'http://localhost/candidature/?p=12', 0, 'revision', '', 0),
(13, 1, '2021-09-14 15:25:02', '2021-09-14 13:25:02', '', 'USSEIN-LOGO', '', 'inherit', 'open', 'closed', '', 'ussein-logo', '', '', '2021-09-14 15:25:02', '2021-09-14 13:25:02', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO.png', 0, 'attachment', 'image/png', 0),
(52, 1, '2021-09-22 15:22:44', '2021-09-22 13:22:44', '', 'USSEIN-LOGO', '', 'inherit', 'open', 'closed', '', 'ussein-logo-2', '', '', '2021-09-22 15:22:44', '2021-09-22 13:22:44', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO-1.png', 0, 'attachment', 'image/png', 0),
(15, 1, '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 'Réinitialisation mot de passe', '', 'publish', 'closed', 'closed', '', 'reinitialisation-mot-de-passe', '', '', '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 0, 'http://localhost/candidature/?page_id=15', 0, 'page', '', 0),
(16, 1, '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 'Réinitialisation mot de passe', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 15, 'http://localhost/candidature/?p=16', 0, 'revision', '', 0),
(51, 1, '2021-09-22 15:22:07', '2021-09-22 13:22:07', '', 'recteur', '', 'inherit', 'open', 'closed', '', 'recteur', '', '', '2021-09-22 15:22:07', '2021-09-22 13:22:07', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/recteur.png', 0, 'attachment', 'image/png', 0),
(18, 1, '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 'Accueil offre', '', 'publish', 'closed', 'closed', '', 'accueil-offre', '', '', '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 0, 'http://localhost/candidature/?page_id=18', 0, 'page', '', 0),
(19, 1, '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 'accueil', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 18, 'http://localhost/candidature/?p=19', 0, 'revision', '', 0),
(21, 1, '2021-09-16 20:08:35', '2021-09-16 18:08:35', '', 'Accueil', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-16 20:08:35', '2021-09-16 18:08:35', '', 18, 'http://localhost/candidature/?p=21', 0, 'revision', '', 0),
(22, 1, '2021-09-22 13:57:58', '2021-09-16 18:23:10', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=22', 1, 'nav_menu_item', '', 0),
(23, 1, '2021-09-16 20:24:51', '2021-09-16 18:24:51', '', 'ufr saepan', '', 'inherit', 'open', 'closed', '', 'ufr-saepan', '', '', '2021-09-16 20:24:51', '2021-09-16 18:24:51', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/ufr-saepan.png', 0, 'attachment', 'image/png', 0),
(24, 1, '2021-09-16 20:25:01', '2021-09-16 18:25:01', '', 'ufr sfi', '', 'inherit', 'open', 'closed', '', 'ufr-sfi', '', '', '2021-09-16 20:25:01', '2021-09-16 18:25:01', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/ufr-sfi.png', 0, 'attachment', 'image/png', 0),
(25, 1, '2021-09-16 20:39:17', '0000-00-00 00:00:00', '', 'Offres', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-09-16 20:39:17', '2021-09-16 18:39:17', '', 0, 'http://localhost/candidature/?page_id=25', 0, 'page', '', 0),
(26, 1, '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 'Plus d\'information', '', 'trash', 'closed', 'closed', '', 'plus-dinformation__trashed', '', '', '2021-09-16 20:43:26', '2021-09-16 18:43:26', '', 0, 'http://localhost/candidature/?page_id=26', 0, 'page', '', 0),
(27, 1, '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 'Plus d\'information', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 26, 'http://localhost/candidature/?p=27', 0, 'revision', '', 0),
(28, 1, '2021-09-16 20:42:45', '2021-09-16 18:42:45', '', 'Plus d\'informations', '', 'inherit', 'closed', 'closed', '', '26-autosave-v1', '', '', '2021-09-16 20:42:45', '2021-09-16 18:42:45', '', 26, 'http://localhost/candidature/?p=28', 0, 'revision', '', 0),
(29, 1, '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 'Plus d\'informations', '', 'publish', 'closed', 'closed', '', 'plus-dinformations', '', '', '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 0, 'http://localhost/candidature/?page_id=29', 0, 'page', '', 0),
(30, 1, '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 'Plus d\'informations', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 29, 'http://localhost/candidature/?p=30', 0, 'revision', '', 0),
(32, 1, '2021-09-21 23:43:30', '2021-09-21 21:43:30', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page «&nbsp;À propos&nbsp;» qui les présente aux personnes visitant du site. Cela pourrait ressembler à quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Bonjour&nbsp;! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…ou quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules supers pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href=\"http://localhost/candidature/wp-admin/\">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien&nbsp;!</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2021-09-21 23:43:30', '2021-09-21 21:43:30', '', 2, 'http://localhost/candidature/?p=32', 0, 'revision', '', 0),
(37, 1, '2021-09-22 13:43:02', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-09-22 13:43:02', '0000-00-00 00:00:00', '', 0, 'http://localhost/candidature/?p=37', 1, 'nav_menu_item', '', 0),
(38, 1, '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 'Mon compte', '', 'publish', 'closed', 'closed', '', 'mon-compte', '', '', '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 0, 'http://localhost/candidature/?page_id=38', 0, 'page', '', 0),
(39, 1, '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 'Mon compte', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 38, 'http://localhost/candidature/?p=39', 0, 'revision', '', 0),
(40, 1, '2021-09-22 13:46:31', '2021-09-22 11:46:31', '', 'Mon compte', '', 'inherit', 'closed', 'closed', '', '38-autosave-v1', '', '', '2021-09-22 13:46:31', '2021-09-22 11:46:31', '', 38, 'http://localhost/candidature/?p=40', 0, 'revision', '', 0),
(41, 1, '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 'Mon dossier', '', 'publish', 'closed', 'closed', '', 'mon-dossier', '', '', '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 0, 'http://localhost/candidature/?page_id=41', 0, 'page', '', 0),
(42, 1, '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 'Mon dossier', '', 'inherit', 'closed', 'closed', '', '41-revision-v1', '', '', '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 41, 'http://localhost/candidature/?p=42', 0, 'revision', '', 0),
(43, 1, '2021-09-22 13:50:07', '2021-09-22 11:50:07', '', 'Mon dossier', '', 'inherit', 'closed', 'closed', '', '41-autosave-v1', '', '', '2021-09-22 13:50:07', '2021-09-22 11:50:07', '', 41, 'http://localhost/candidature/?p=43', 0, 'revision', '', 0),
(44, 1, '2021-09-22 13:57:58', '2021-09-22 11:57:58', ' ', '', '', 'publish', 'closed', 'closed', '', '44', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=44', 2, 'nav_menu_item', '', 0),
(45, 1, '2021-09-22 13:57:58', '2021-09-22 11:57:58', ' ', '', '', 'publish', 'closed', 'closed', '', '45', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=45', 3, 'nav_menu_item', '', 0),
(46, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', '{\n    \"custom_css[emphires]\": {\n        \"value\": \"div.cspt-title-bar-wrapper.cspt-bg-color-customt:before{\\n\\tbackground-color:white;\\n\\tdisplay:none;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-09-22 12:55:23\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '4108ea06-6acc-4b55-b7b1-a1f67f5a633e', '', '', '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 0, 'http://localhost/candidature/?p=46', 0, 'customize_changeset', '', 0),
(35, 1, '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 'Fiche a postuler', '', 'publish', 'closed', 'closed', '', 'fiche-a-postuler', '', '', '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 0, 'http://localhost/candidature/?page_id=35', 0, 'page', '', 0),
(34, 1, '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 'Accueil offre', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 18, 'http://localhost/candidature/?p=34', 0, 'revision', '', 0),
(36, 1, '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 'Fiche a postuler', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 35, 'http://localhost/candidature/?p=36', 0, 'revision', '', 0),
(47, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 'emphires', '', 'publish', 'closed', 'closed', '', 'emphires', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 0, 'http://localhost/candidature/2021/09/22/emphires/', 0, 'custom_css', '', 0),
(50, 1, '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 'emphires', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 47, 'http://localhost/candidature/?p=50', 0, 'revision', '', 0),
(48, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', 'div.cspt-title-bar-wrapper.cspt-bg-color-customt:before{\n	background-color:white;\n	display:none;\n}', 'emphires', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 47, 'http://localhost/candidature/?p=48', 0, 'revision', '', 0),
(49, 1, '2021-09-22 15:00:15', '2021-09-22 13:00:15', '{\n    \"custom_css[emphires]\": {\n        \"value\": \"\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-09-22 13:00:15\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '911e9f49-8539-4180-baf8-56e524643602', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 0, 'http://localhost/candidature/?p=49', 0, 'customize_changeset', '', 0),
(53, 1, '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 'accueil', '', 'publish', 'closed', 'closed', '', 'accueil', '', '', '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 0, 'http://localhost/candidature/?page_id=53', 0, 'page', '', 0),
(54, 1, '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 'accueil', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 53, 'http://localhost/candidature/?p=54', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_postuler`
--

DROP TABLE IF EXISTS `ec_postuler`;
CREATE TABLE IF NOT EXISTS `ec_postuler` (
  `id_offre` int(11) NOT NULL,
  `id_candidat` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ec_postuler`
--

INSERT INTO `ec_postuler` (`id_offre`, `id_candidat`) VALUES
(3, 'mouhamadou.diallo@etu.ussein.edu.sn'),
(3, 'mouhamadou.diallo@etu.ussein.edu.sn'),
(1, 'manemamadouyaya@gmail.com'),
(1, 'manemamadouyaya@gmail.com'),
(1, 'manemamadouyaya@gmail.com'),
(1, 'manemamadouyaya@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `ec_termmeta`
--

DROP TABLE IF EXISTS `ec_termmeta`;
CREATE TABLE IF NOT EXISTS `ec_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_terms`
--

DROP TABLE IF EXISTS `ec_terms`;
CREATE TABLE IF NOT EXISTS `ec_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_terms`
--

INSERT INTO `ec_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'Menu Général', 'menu-general', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_term_relationships`
--

DROP TABLE IF EXISTS `ec_term_relationships`;
CREATE TABLE IF NOT EXISTS `ec_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_term_relationships`
--

INSERT INTO `ec_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(22, 2, 0),
(44, 2, 0),
(45, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_term_taxonomy`
--

DROP TABLE IF EXISTS `ec_term_taxonomy`;
CREATE TABLE IF NOT EXISTS `ec_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_term_taxonomy`
--

INSERT INTO `ec_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ec_usermeta`
--

DROP TABLE IF EXISTS `ec_usermeta`;
CREATE TABLE IF NOT EXISTS `ec_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_usermeta`
--

INSERT INTO `ec_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'stagedisi'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'ec_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'ec_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"b30af25f145c41c74802334f60131ef525f3bcf18e4f083bc2446ec3065eca0c\";a:4:{s:10:\"expiration\";i:1633439114;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36\";s:5:\"login\";i:1632229514;}}'),
(17, 1, 'ec_dashboard_quick_press_last_post_id', '31'),
(18, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(19, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(20, 1, 'nav_menu_recently_edited', '2');

-- --------------------------------------------------------

--
-- Structure de la table `ec_users`
--

DROP TABLE IF EXISTS `ec_users`;
CREATE TABLE IF NOT EXISTS `ec_users` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `ec_users`
--

INSERT INTO `ec_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'stagedisi', '$P$BxTDexcWCTrT05FePxb5cdDfZEScPW1', 'stagedisi', 'candidature@gmail.com', 'http://localhost/candidature', '2021-09-13 12:36:57', '', 0, 'stagedisi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
