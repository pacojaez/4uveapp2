-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para 4uveapp2
DROP DATABASE IF EXISTS `4uveapp2`;
CREATE DATABASE IF NOT EXISTS `4uveapp2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `4uveapp2`;

-- Volcando estructura para tabla 4uveapp2.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.categories: ~8 rows (aproximadamente)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'MATERIAL DE OFICINA', NULL, '2021-06-17 11:02:01', '2021-06-17 11:02:02'),
	(2, 'MANIPULADOS', NULL, '2021-06-17 11:02:26', '2021-06-17 11:02:26'),
	(3, 'OFIMÁTICA', NULL, '2021-06-25 12:55:01', '2021-06-25 12:55:02'),
	(4, 'CONSUMIBLES', NULL, '2021-06-25 12:55:12', '2021-06-25 12:55:12'),
	(5, 'MOBILIARIO', NULL, '2021-06-25 12:55:21', '2021-06-25 12:55:21'),
	(6, 'SERVICIOS GENERALES', NULL, '2021-06-25 12:55:31', '2021-06-25 12:55:32'),
	(7, 'MATERIAL ESCOLAR', NULL, '2021-06-25 12:55:43', '2021-06-25 12:55:43'),
	(8, 'MANUALIDADES', NULL, '2021-06-25 12:55:52', '2021-06-25 12:55:52'),
	(9, 'REGALO', NULL, '2021-06-25 12:56:00', '2021-06-25 12:56:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.contact_leads
DROP TABLE IF EXISTS `contact_leads`;
CREATE TABLE IF NOT EXISTS `contact_leads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.contact_leads: ~0 rows (aproximadamente)
DELETE FROM `contact_leads`;
/*!40000 ALTER TABLE `contact_leads` DISABLE KEYS */;
INSERT INTO `contact_leads` (`id`, `name`, `email`, `phone`, `preferred`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'juan noguera', 'juan@juan.com', '606563646', 1, 'a ver', '2021-06-27 09:38:07', '2021-06-27 09:38:07');
/*!40000 ALTER TABLE `contact_leads` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.migrations: ~16 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_05_21_100000_create_teams_table', 1),
	(7, '2020_05_21_200000_create_team_user_table', 1),
	(8, '2020_05_21_300000_create_team_invitations_table', 1),
	(9, '2021_05_03_145725_create_sessions_table', 1),
	(10, '2021_05_03_171010_create_products_table', 1),
	(11, '2021_05_03_171015_create_categories_table', 1),
	(12, '2021_05_03_171015_create_subcategories_table', 1),
	(13, '2021_05_03_171019_create_orders_table', 1),
	(14, '2021_05_03_171021_create_orderitems_table', 1),
	(15, '2021_05_23_152212_create_contact_leads_table', 1),
	(16, '2021_06_08_092129_create_ofertas_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.ofertas
DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plazo_preparacion_pedido` date DEFAULT NULL,
  `localidad_recogida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia_recogida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_recogida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embalaje_original` tinyint(1) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_cost_price` double(8,2) DEFAULT NULL,
  `buyed_date` date DEFAULT NULL,
  `boxes` double DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_units` int(11) DEFAULT NULL,
  `new` tinyint(1) DEFAULT '1',
  `offer_until` date DEFAULT NULL,
  `offer_prize` decimal(6,2) DEFAULT NULL,
  `definition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_oferta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `porte_id` tinyint(4) DEFAULT '1',
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contraoferta` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.ofertas: ~36 rows (aproximadamente)
DELETE FROM `ofertas`;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;
INSERT INTO `ofertas` (`id`, `name`, `description`, `user_image`, `user_image_2`, `user_image_3`, `plazo_preparacion_pedido`, `localidad_recogida`, `provincia_recogida`, `cp_recogida`, `embalaje_original`, `provider`, `portes`, `invoice_cost_price`, `buyed_date`, `boxes`, `offer`, `offer_units`, `new`, `offer_until`, `offer_prize`, `definition`, `net_price`, `categoria_oferta`, `active`, `porte_id`, `user_id`, `product_id`, `created_at`, `updated_at`, `contraoferta`) VALUES
	(13, NULL, NULL, '060cb66f.jpg', '460cb66f.jpg', '360cb66f.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(14, NULL, NULL, '0cb66f13.jpg', '4760cb66.jpg', '2660cb66.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 8.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(15, NULL, NULL, '5060cb67.jpg', '8760cb67.jpg', '160cb67f.jpg', '2021-06-18', 'Terrassa', 'Barcelona', '08226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 30, 0, NULL, 6.00, NULL, NULL, 'Venta Por Lotes', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:19:19', '2021-06-17 15:19:19', NULL),
	(16, NULL, NULL, '8260cb68.jpg', '760cb687.jpg', '960cb687.jpg', '2021-06-20', 'Toledo', 'Toledo', '35226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-18', 2, NULL, 30, 0, NULL, 7.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:21:26', '2021-06-17 15:21:26', NULL),
	(17, NULL, NULL, '5660cb69.jpg', NULL, NULL, NULL, 'Toledo', 'Toledo', '35226', 0, NULL, NULL, 15.00, NULL, 3, NULL, 5, 1, NULL, 9.00, NULL, NULL, 'Liquidación Lote', 1, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '43', '2021-06-17 15:27:09', '2021-06-17 15:27:09', NULL),
	(18, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(19, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 25.00, '2021-06-03', 1, NULL, 1, 1, NULL, 10.00, NULL, NULL, 'Liquidación Total', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(20, NULL, NULL, '560cc80e.jpg', '4260cc80.jpg', '3160cc80.jpg', '2021-06-19', 'Fuenlabrada', 'Madrid', '28025', 1, 'Cial del Sur', NULL, 7.11, '2021-06-04', 2, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '37', '2021-06-18 11:17:54', '2021-06-18 11:17:54', NULL),
	(21, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Fuengirola', 'Málaga', '29024', 1, 'Fabricante', NULL, 25.00, '2021-06-03', 1, NULL, 2, 1, '2021-06-18', 8.00, NULL, NULL, 'Venta Unitaria', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(22, NULL, NULL, '560d5ab6.jpg', '760d5ab6.jpg', '4160d5ab.jpg', '2021-06-26', 'Torrelodones', 'Madrid', '28024', 0, 'Cial del Sur', NULL, 12.00, '2021-03-11', 2, NULL, 2, 1, NULL, 1.20, NULL, NULL, 'Venta Unitaria', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:09:40', '2021-06-25 10:09:40', NULL),
	(23, NULL, NULL, '560d5ace.jpg', '960d5ace.jpg', '2660d5ac.jpg', '2021-06-29', 'TERRASSA', 'Barcelona', '08226', 0, 'Cial del Sur', NULL, 25.00, '2021-03-04', 6, NULL, 6, 1, NULL, 10.00, NULL, NULL, 'Liquidación Lote', 1, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:16:12', '2021-06-25 10:16:12', NULL),
	(24, NULL, NULL, '5760d5ad.jpg', '4760d5ad.jpg', '2160d5ad.jpg', '2021-06-26', 'Burgos', 'Burgos', '09001', 0, 'Cial del Sur', NULL, 12.00, '2021-06-02', 4, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:19:15', '2021-06-30 15:13:37', NULL),
	(25, NULL, NULL, NULL, NULL, NULL, '2021-06-26', 'Terrassa', 'Barcelona', '08226', 1, 'Fábrica', NULL, 34.00, '2021-04-05', 1, NULL, 1, 1, NULL, 30.60, NULL, NULL, 'Venta Unitaria', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '3f290ce5-c049-4743-b1ec-bdb28cd4627d', '2021-06-25 11:07:52', '2021-06-25 11:07:52', NULL),
	(26, NULL, NULL, '5760d5ad.jpg', '4760d5ad.jpg', '2160d5ad.jpg', '2021-06-26', 'Burgos', 'Burgos', '09001', 0, 'Cial del Sur', NULL, 12.00, '2021-06-02', 4, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 0, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:19:15', '2021-06-25 10:19:15', NULL),
	(27, NULL, NULL, '5760d5ad.jpg', '4760d5ad.jpg', '2160d5ad.jpg', '2021-06-26', 'Burgos', 'Burgos', '09001', 0, 'Cial del Sur', NULL, 12.00, '2021-06-02', 4, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 0, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:19:15', '2021-06-25 10:19:15', NULL),
	(28, NULL, NULL, '5760d5ad.jpg', '4760d5ad.jpg', '2160d5ad.jpg', '2021-06-26', 'Burgos', 'Burgos', '09001', 0, 'Cial del Sur', NULL, 12.00, '2021-06-02', 4, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 0, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:19:15', '2021-06-25 10:19:15', NULL),
	(29, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(30, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(31, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(32, NULL, NULL, '5060cb67.jpg', '8760cb67.jpg', '160cb67f.jpg', '2021-06-18', 'Terrassa', 'Barcelona', '08226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 30, 0, NULL, 6.00, NULL, NULL, 'Venta Por Lotes', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:19:19', '2021-06-17 15:19:19', NULL),
	(33, NULL, NULL, '0cb66f13.jpg', '4760cb66.jpg', '2660cb66.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 8.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(34, NULL, NULL, '060cb66f.jpg', '460cb66f.jpg', '360cb66f.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(35, NULL, NULL, '060cb66f.jpg', '460cb66f.jpg', '360cb66f.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(36, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 25.00, '2021-06-03', 1, NULL, 1, 1, NULL, 10.00, NULL, NULL, 'Liquidación Total', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(37, NULL, NULL, '560d5ace.jpg', '960d5ace.jpg', '2660d5ac.jpg', '2021-06-29', 'TERRASSA', 'Barcelona', '08226', 0, 'Cial del Sur', NULL, 25.00, '2021-03-04', 6, NULL, 6, 1, NULL, 10.00, NULL, NULL, 'Liquidación Lote', 1, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:16:12', '2021-06-25 10:16:12', NULL),
	(38, NULL, NULL, '5760d5ad.jpg', '4760d5ad.jpg', '2160d5ad.jpg', '2021-06-26', 'Burgos', 'Burgos', '09001', 0, 'Cial del Sur', NULL, 12.00, '2021-06-02', 4, NULL, 30, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 0, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:19:15', '2021-06-25 10:19:15', NULL),
	(39, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 25.00, '2021-06-03', 1, NULL, 1, 1, NULL, 10.00, NULL, NULL, 'Liquidación Total', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(40, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 25.00, '2021-06-03', 1, NULL, 1, 1, NULL, 10.00, NULL, NULL, 'Liquidación Total', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(41, NULL, NULL, '8260cb68.jpg', '760cb687.jpg', '960cb687.jpg', '2021-06-20', 'Toledo', 'Toledo', '35226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-18', 2, NULL, 30, 0, NULL, 7.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:21:26', '2021-06-17 15:21:26', NULL),
	(42, NULL, NULL, '560d5ab6.jpg', '760d5ab6.jpg', '4160d5ab.jpg', '2021-06-26', 'Torrelodones', 'Madrid', '28024', 0, 'Cial del Sur', NULL, 12.00, '2021-03-11', 2, NULL, 2, 1, NULL, 1.20, NULL, NULL, 'Venta Unitaria', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:09:40', '2021-06-25 10:09:40', NULL),
	(43, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(44, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(45, NULL, NULL, '8260cb68.jpg', '760cb687.jpg', '960cb687.jpg', '2021-06-20', 'Toledo', 'Toledo', '35226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-18', 2, NULL, 30, 0, NULL, 7.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:21:26', '2021-06-17 15:21:26', NULL),
	(46, NULL, NULL, '5060cb67.jpg', '8760cb67.jpg', '160cb67f.jpg', '2021-06-18', 'Terrassa', 'Barcelona', '08226', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 30, 0, NULL, 6.00, NULL, NULL, 'Venta Por Lotes', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '419da756-7ec0-47eb-bed0-9e5ceee6cff9', '2021-06-17 15:19:19', '2021-06-17 15:19:19', NULL),
	(47, NULL, NULL, '060cb66f.jpg', '460cb66f.jpg', '360cb66f.jpg', '2021-02-18', 'Burgos', 'Burgos', '09001', 1, 'Cial del Sur', NULL, 12.00, '2021-06-03', 2, NULL, 2, 1, NULL, 9.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '23', '2021-06-17 15:14:57', '2021-06-17 15:14:57', NULL),
	(48, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(49, NULL, NULL, '360cb742.jpg', NULL, NULL, '2021-06-18', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 11.00, '2010-01-21', 6, NULL, 30, 1, NULL, 5.00, NULL, NULL, 'Venta Por Lotes', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-17 16:11:24', '2021-06-17 16:11:24', NULL),
	(50, NULL, NULL, '560d5ace.jpg', '960d5ace.jpg', '2660d5ac.jpg', '2021-06-29', 'TERRASSA', 'Barcelona', '08226', 0, 'Cial del Sur', NULL, 25.00, '2021-03-04', 6, NULL, 6, 1, NULL, 10.00, NULL, NULL, 'Liquidación Lote', 1, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:16:12', '2021-06-25 10:16:12', NULL),
	(51, NULL, NULL, '060cc5a0.jpg', '060cc5a0.jpg', '860cc5a0.jpg', '2021-06-19', 'Sabadell', 'Barcelona', '08326', 0, NULL, NULL, 25.00, '2021-06-03', 1, NULL, 1, 1, NULL, 10.00, NULL, NULL, 'Liquidación Total', 1, 2, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-18 08:32:03', '2021-06-18 08:32:03', NULL),
	(52, NULL, NULL, '560d5ab6.jpg', '760d5ab6.jpg', '4160d5ab.jpg', '2021-06-26', 'Torrelodones', 'Madrid', '28024', 1, 'Fábrica', NULL, 10.00, '2021-03-11', 2, NULL, 2, 1, NULL, 8.00, NULL, NULL, 'Liquidación Total', 1, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-25 10:09:40', '2021-06-30 15:14:20', NULL),
	(53, NULL, NULL, '960dc93d.jpg', '560dc93d.jpg', '7760dc93.jpg', '2021-06-30', 'Burgos', 'Burgos', '28024', 1, 'Cial del Sur', NULL, 12.00, '2021-06-26', 15, NULL, 25, 1, NULL, 9.00, NULL, NULL, 'Liquidación Lote', 0, 1, 'ad87088e-89da-470e-a54b-d360cb218651', '3f290ce5-c049-4743-b1ec-bdb28cd4627d', '2021-06-27 10:39:30', '2021-06-30 15:54:57', 1),
	(54, NULL, NULL, '4660dc92.jpg', '6260dc92.jpg', '8760dc92.jpg', '2021-07-02', 'Soria', 'Soria', '38024', NULL, 'Fábrica', NULL, 12.00, '2019-06-30', 5, NULL, 2, 1, NULL, 9.00, NULL, NULL, 'Liquidación Total', 1, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '37', '2021-06-30 15:49:05', '2021-06-30 15:49:05', NULL),
	(55, NULL, NULL, '4560dc93.jpg', '9460dc93.jpg', '960dc934.jpg', '2021-07-01', 'Sant Quirtze del Vallés', 'Barcelona', '08543', NULL, 'Fábrica', NULL, 12.00, '2021-06-24', 5, NULL, 30, 1, NULL, 8.00, NULL, NULL, 'Liquidación Total', 0, 3, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '36', '2021-06-30 15:52:40', '2021-06-30 15:52:40', NULL);
/*!40000 ALTER TABLE `ofertas` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `units` float DEFAULT NULL,
  `total_factura` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.orders: ~55 rows (aproximadamente)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `date`, `status`, `user_id`, `created_at`, `updated_at`, `units`, `total_factura`) VALUES
	(1, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 12:43:47', '2021-06-18 12:43:47', 3, 33),
	(2, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 12:44:20', '2021-06-18 12:44:20', 3, 33),
	(3, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 12:44:44', '2021-06-18 12:44:44', 3, 33),
	(4, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:24:39', '2021-06-18 13:24:39', 19, 166),
	(5, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:24:55', '2021-06-18 13:24:55', 0, 0),
	(6, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:25:38', '2021-06-18 13:25:38', 3, 28),
	(7, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:27:19', '2021-06-18 13:27:19', 0, 0),
	(8, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:27:35', '2021-06-18 13:27:35', 0, 0),
	(9, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:27:42', '2021-06-18 13:27:42', 0, 0),
	(10, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:27:56', '2021-06-18 13:27:56', 4, 32),
	(11, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:30:21', '2021-06-18 13:30:21', 0, 0),
	(12, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:30:39', '2021-06-18 13:30:39', 1, 8),
	(13, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:34:47', '2021-06-18 13:34:47', 5, 44),
	(14, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:36:03', '2021-06-18 13:36:03', 0, 0),
	(15, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:36:33', '2021-06-18 13:36:33', 1, 9),
	(16, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:37:35', '2021-06-18 13:37:35', 0, 0),
	(17, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:37:51', '2021-06-18 13:37:51', 0, 0),
	(18, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:38:04', '2021-06-18 13:38:04', 0, 0),
	(19, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:38:26', '2021-06-18 13:38:26', 1, 9),
	(20, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:38:47', '2021-06-18 13:38:47', 1, 9),
	(21, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:39:54', '2021-06-18 13:39:54', 1, 9),
	(22, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-18 13:40:12', '2021-06-18 13:40:12', 0, 0),
	(23, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:29:37', '2021-06-25 06:29:37', 29, 269),
	(24, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:31:40', '2021-06-25 06:31:40', 0, 0),
	(25, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:35:30', '2021-06-25 06:35:30', 1, 9),
	(26, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:36:39', '2021-06-25 06:36:39', 0, 0),
	(27, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 06:42:43', '2021-06-25 06:42:43', 1, 8),
	(28, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 06:42:48', '2021-06-25 06:42:48', 0, 0),
	(29, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:48:43', '2021-06-25 06:48:43', 1, 9),
	(30, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:48:58', '2021-06-25 06:48:58', 1, 10),
	(31, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:53:22', '2021-06-25 06:53:22', 1, 9),
	(32, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 06:53:32', '2021-06-25 06:53:32', 0, 0),
	(33, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:58:35', '2021-06-25 06:58:35', 4, 36),
	(34, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 06:58:50', '2021-06-25 06:58:50', 4, 36),
	(35, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:01:32', '2021-06-25 07:01:32', 4, 36),
	(36, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 07:02:10', '2021-06-25 07:02:10', 4, 36),
	(37, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:02:24', '2021-06-25 07:02:24', 4, 36),
	(38, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:02:46', '2021-06-25 07:02:46', 0, 0),
	(39, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 07:02:57', '2021-06-25 07:02:57', 1, 9),
	(40, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:05:54', '2021-06-25 07:05:54', 2, 17),
	(41, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:06:23', '2021-06-25 07:06:23', 2, 17),
	(42, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 07:06:33', '2021-06-25 07:06:33', 1, 8),
	(43, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:06:54', '2021-06-25 07:06:54', 1, 8),
	(44, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:07:03', '2021-06-25 07:07:03', 1, 8),
	(45, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 07:10:21', '2021-06-25 07:10:21', 1, 8),
	(46, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:10:31', '2021-06-25 07:10:31', 1, 9),
	(47, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:12:32', '2021-06-25 07:12:32', 1, 9),
	(48, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:14:37', '2021-06-25 07:14:37', 1, 9),
	(49, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:15:09', '2021-06-25 07:15:09', 1, 10),
	(50, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:15:49', '2021-06-25 07:15:49', 6, 48),
	(51, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:17:41', '2021-06-25 07:17:41', 10, 80),
	(52, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 07:18:33', '2021-06-25 07:18:33', 10, 87),
	(53, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 11:12:03', '2021-06-25 11:12:03', 1, 30.6),
	(54, NULL, 'Pendiente de confirmación', 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', '2021-06-25 11:18:41', '2021-06-25 11:18:41', 3, 48.6),
	(55, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 13:00:53', '2021-06-25 13:00:53', 1, 30.6),
	(56, NULL, 'Pendiente de confirmación', 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', '2021-06-25 15:42:06', '2021-06-25 15:42:06', 1, 5),
	(57, NULL, 'Pendiente de confirmación', 'ad87088e-89da-470e-a54b-d360cb218651', '2021-06-27 09:35:42', '2021-06-27 09:35:42', 2, 61.2),
	(58, NULL, 'Pendiente de confirmación', 'ad87088e-89da-470e-a54b-d360cb218651', '2021-06-27 09:47:13', '2021-06-27 09:47:13', 24, 240),
	(59, NULL, 'Pendiente de confirmación', 'ad87088e-89da-470e-a54b-d360cb218651', '2021-06-30 15:54:27', '2021-06-30 15:54:27', 16, 154);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.order_items
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `total_items` decimal(4,2) NOT NULL,
  `units` float NOT NULL DEFAULT '0',
  `unit_price` float NOT NULL DEFAULT '0',
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `subtotal` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `oferta_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_user_type_user_id_index` (`user_type`,`user_id`),
  KEY `order_items_product_type_product_id_index` (`product_type`,`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.order_items: ~38 rows (aproximadamente)
DELETE FROM `order_items`;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` (`id`, `total_items`, `units`, `unit_price`, `user_type`, `user_id`, `order_id`, `subtotal`, `product_type`, `product_id`, `created_at`, `updated_at`, `oferta_id`) VALUES
	(1, 3.00, 3, 11, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 3, 3333.00, NULL, 'b8da3d33-d78c-48a9-adae-1d9b46cc296a', '2021-06-18 12:44:44', '2021-06-18 12:44:44', 16),
	(2, 12.00, 12, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 4, 666.00, NULL, '21', '2021-06-18 13:24:39', '2021-06-18 13:24:39', 16),
	(3, 7.00, 7, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 4, 70.00, NULL, '19', '2021-06-18 13:24:39', '2021-06-18 13:24:39', 14),
	(4, 2.00, 2, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 6, 18.00, NULL, '20', '2021-06-18 13:25:38', '2021-06-18 13:25:38', 13),
	(5, 1.00, 1, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 6, 10.00, NULL, '19', '2021-06-18 13:25:38', '2021-06-18 13:25:38', 14),
	(6, 4.00, 4, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 10, 32.00, NULL, '21', '2021-06-18 13:27:56', '2021-06-18 13:27:56', 15),
	(7, 1.00, 1, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 12, 8.00, NULL, '21', '2021-06-18 13:30:39', '2021-06-18 13:30:39', 16),
	(8, 2.00, 2, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 13, 16.00, NULL, '21', '2021-06-18 13:34:47', '2021-06-18 13:34:47', 17),
	(9, 1.00, 1, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 13, 8.00, NULL, '14', '2021-06-18 13:34:47', '2021-06-18 13:34:47', 18),
	(10, 2.00, 2, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 13, 20.00, NULL, '19', '2021-06-18 13:34:47', '2021-06-18 13:34:47', 19),
	(11, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 15, 9.00, NULL, '20', '2021-06-18 13:36:33', '2021-06-18 13:36:33', 13),
	(12, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 19, 9.00, NULL, '20', '2021-06-18 13:38:26', '2021-06-18 13:38:26', 20),
	(13, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 20, 9.00, NULL, '20', '2021-06-18 13:38:47', '2021-06-18 13:38:47', 21),
	(14, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 21, 9.00, NULL, '20', '2021-06-18 13:39:54', '2021-06-18 13:39:54', 20),
	(15, 4.00, 4, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 23, 36.00, NULL, '20', '2021-06-25 06:29:37', '2021-06-25 06:29:37', 19),
	(16, 9.00, 9, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 23, 81.00, NULL, '13', '2021-06-25 06:29:37', '2021-06-25 06:29:37', 18),
	(17, 4.00, 4, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 23, 32.00, NULL, '21', '2021-06-25 06:29:37', '2021-06-25 06:29:37', 16),
	(18, 12.00, 12, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 23, 120.00, NULL, '19', '2021-06-25 06:29:37', '2021-06-25 06:29:37', 15),
	(19, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 25, 9.00, NULL, '20', '2021-06-25 06:35:30', '2021-06-25 06:35:30', 14),
	(20, 1.00, 1, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 27, 8.00, NULL, '21', '2021-06-25 06:42:43', '2021-06-25 06:42:43', 13),
	(21, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 29, 9.00, NULL, '20', '2021-06-25 06:48:43', '2021-06-25 06:48:43', 14),
	(22, 1.00, 1, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 30, 10.00, NULL, '19', '2021-06-25 06:48:58', '2021-06-25 06:48:58', 20),
	(23, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 31, 9.00, NULL, '20', '2021-06-25 06:53:22', '2021-06-25 06:53:22', 17),
	(24, 4.00, 4, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 37, 36.00, NULL, '20', '2021-06-25 07:02:24', '2021-06-25 07:02:24', 18),
	(25, 1.00, 1, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 45, 8.00, NULL, NULL, '2021-06-25 07:10:21', '2021-06-25 07:10:21', 21),
	(26, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 46, 9.00, NULL, NULL, '2021-06-25 07:10:31', '2021-06-25 07:10:31', 20),
	(27, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 47, 9.00, NULL, NULL, '2021-06-25 07:12:32', '2021-06-25 07:12:32', 20),
	(28, 1.00, 1, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 48, 9.00, NULL, NULL, '2021-06-25 07:14:37', '2021-06-25 07:14:37', 20),
	(29, 1.00, 1, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 49, 10.00, NULL, NULL, '2021-06-25 07:15:09', '2021-06-25 07:15:09', 19),
	(30, 6.00, 6, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 50, 48.00, NULL, NULL, '2021-06-25 07:15:49', '2021-06-25 07:15:49', 21),
	(31, 10.00, 10, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 51, 80.00, NULL, NULL, '2021-06-25 07:17:41', '2021-06-25 07:17:41', 21),
	(32, 5.00, 5, 8, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 52, 40.00, NULL, NULL, '2021-06-25 07:18:33', '2021-06-25 07:18:33', 21),
	(33, 3.00, 3, 9, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 52, 27.00, NULL, NULL, '2021-06-25 07:18:33', '2021-06-25 07:18:33', 20),
	(34, 2.00, 2, 10, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 52, 20.00, NULL, NULL, '2021-06-25 07:18:33', '2021-06-25 07:18:33', 19),
	(35, 1.00, 1, 30.6, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 53, 30.60, NULL, NULL, '2021-06-25 11:12:03', '2021-06-25 11:12:03', 25),
	(36, 2.00, 2, 9, NULL, 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', 54, 18.00, NULL, NULL, '2021-06-25 11:18:41', '2021-06-25 11:18:41', 24),
	(37, 1.00, 1, 30.6, NULL, 'b26a0c67-45ac-4f28-9b10-2401fa1b50b1', 54, 30.60, NULL, NULL, '2021-06-25 11:18:41', '2021-06-25 11:18:41', 25),
	(38, 1.00, 1, 30.6, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 55, 30.60, NULL, NULL, '2021-06-25 13:00:53', '2021-06-25 13:00:53', 25),
	(39, 1.00, 1, 5, NULL, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 56, 5.00, NULL, NULL, '2021-06-25 15:42:06', '2021-06-25 15:42:06', 18),
	(40, 2.00, 2, 30.6, NULL, 'ad87088e-89da-470e-a54b-d360cb218651', 57, 61.20, NULL, NULL, '2021-06-27 09:35:42', '2021-06-27 09:35:42', 25),
	(41, 24.00, 24, 10, NULL, 'ad87088e-89da-470e-a54b-d360cb218651', 58, 240.00, NULL, NULL, '2021-06-27 09:47:13', '2021-06-27 09:47:13', 51),
	(42, 3.00, 3, 9, NULL, 'ad87088e-89da-470e-a54b-d360cb218651', 59, 27.00, NULL, NULL, '2021-06-30 15:54:27', '2021-06-30 15:54:27', 54),
	(43, 3.00, 3, 9, NULL, 'ad87088e-89da-470e-a54b-d360cb218651', 59, 27.00, NULL, NULL, '2021-06-30 15:54:27', '2021-06-30 15:54:27', 53),
	(44, 10.00, 10, 10, NULL, 'ad87088e-89da-470e-a54b-d360cb218651', 59, 100.00, NULL, NULL, '2021-06-30 15:54:27', '2021-06-30 15:54:27', 39);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.portes
DROP TABLE IF EXISTS `portes`;
CREATE TABLE IF NOT EXISTS `portes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla 4uveapp2.portes: ~2 rows (aproximadamente)
DELETE FROM `portes`;
/*!40000 ALTER TABLE `portes` DISABLE KEYS */;
INSERT INTO `portes` (`id`, `name`) VALUES
	(1, 'PORTES PAGADOS'),
	(2, 'PORTES DEBIDOS'),
	(3, 'PORTES COMPARTIDOS');
/*!40000 ALTER TABLE `portes` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EAN13_individual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_price` double DEFAULT NULL,
  `dimensions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidades_embalaje_individual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EAN13_box_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidades_embalaje_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions_boxes_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` decimal(8,2) DEFAULT NULL,
  `EAN13_box_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidades_embalaje_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions_boxes_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_3` decimal(8,2) DEFAULT NULL,
  `EAN13_box_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategorie_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.products: ~7 rows (aproximadamente)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `product_code`, `short_description`, `product_image`, `product_image_2`, `product_image_3`, `part_number`, `brand`, `EAN13_individual`, `net_price`, `dimensions`, `unidades_embalaje_individual`, `weight`, `EAN13_box_1`, `unidades_embalaje_2`, `dimensions_boxes_2`, `weight_2`, `EAN13_box_2`, `unidades_embalaje_3`, `dimensions_boxes_3`, `weight_3`, `EAN13_box_3`, `portes`, `active`, `user_id`, `subcategorie_id`, `created_at`, `updated_at`) VALUES
	('23', 'Caja 50 Bolígrafos BIC Cristal Original. Rojo', 'lorem ipsum', '6666666', 'el bolígrafo más vendido del mundo', '360cb534.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 1, '2021-06-17 13:51:10', '2021-06-17 13:51:10'),
	('33', 'Caja 50 Bolígrafos BIC Cristal Original. Verde', 'lorem ipsum', '54544454545454', 'el bolígrafo más vendido del mundo', '360cb534.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 1, '2021-06-17 13:51:10', '2021-06-17 13:51:10'),
	('36', 'Lote 50 Cartulinas de colores', 'lorem ipsum', '66655666666', 'cartulinas de colores', '360cb534.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 2, '2021-06-17 13:51:10', '2021-06-17 13:51:10'),
	('37', 'Lote 50 Cartulinas blanca', 'lorem ipsum', '66655666666', 'cartulinas blanca', '360cb534.jpg', '8660cb53.jpg', '', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 2, '2021-06-17 13:51:10', '2021-06-26 10:28:17'),
	('3f290ce5-c049-4743-b1ec-bdb28cd4627d', 'Caja 1.000 u. FICKOR 235*132 ROJO/NEGRO', 'Bolsas plástico, con tira adhesiva Packing List', '6666666', NULL, '5360d5b8.jpg', '960d5b80.jpg', '160d5b80.jpg', '4522313', 'ARNO', NULL, NULL, '20X25X7,5', '2', '4,3', NULL, NULL, '60X40X28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 5, '2021-06-25 11:03:38', '2021-06-30 15:41:36'),
	('419da756-7ec0-47eb-bed0-9e5ceee6cff9', 'Lote 50 Bolígrafos BIC Cristal Original. Verde', 'lorem ipsum', '8373609', 'el bolígrafo más vendido del mundo', '360cb534.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 0, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 1, '2021-06-17 13:51:10', '2021-06-30 15:41:25'),
	('43', 'Caja 50 Bolígrafos BIC Cristal Original. Negro', 'lorem ipsum', '545454545454', 'el bolígrafo más vendido del mundo', '360cb534.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'BIC', '0070330129627', 5.545, '13x13x13', '1', '0.250', NULL, NULL, '26x20x32', 9.00, NULL, NULL, '200x200x200', 52.50, NULL, NULL, 0, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 1, '2021-06-17 13:51:10', '2021-06-25 13:32:03'),
	('b8da3d33-d78c-48a9-adae-1d9b46cc296a', 'Caja 50 Bolígrafos Staedler. Negro', 'lorem ipsum', '8373609', 'el bolígrafo más vendido del mundo', '560cb73e.jpg', '8660cb53.jpg', '4660cb53.jpg', '8373609', 'Staedler', '2222', 6.55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 1, '2021-06-17 16:10:23', '2021-06-25 13:32:22');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.sessions: ~1 rows (aproximadamente)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('H0SEBOpo38uzYGJhyxftR6rAjtEebaUNNjOT6Vjd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3dmRk1KVVhHR2ZZbkFpaEgzN2pzZVFRdW1zbVJlWERjRHdpcEdTdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly80dXZlYXBwMi50ZXN0L2NhcnQiO31zOjEzOiJzaG9wcGluZy1jYXJ0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6MTp7czo4OiIAKgBpdGVtcyI7YToxOntpOjE3O086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoxOntzOjg6IgAqAGl0ZW1zIjthOjU6e3M6NDoibmFtZSI7czo0NzoiQ2FqYSA1MCBCb2zDrWdyYWZvcyBCSUMgQ3Jpc3RhbCBPcmlnaW5hbC4gTmVncm8iO3M6NToicHJpY2UiO2Q6OTtzOjg6InF1YW50aXR5IjtpOjU7czo3OiJvcHRpb25zIjthOjA6e31zOjI6ImlkIjtzOjI6IjE3Ijt9fX19fQ==', 1625071011);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.subcategories
DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.subcategories: ~25 rows (aproximadamente)
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`id`, `name`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, 'ESCRITURA Y CORRECCIÓN', NULL, 1, '2021-06-17 11:03:03', '2021-06-17 11:03:04'),
	(2, 'ARCHIVO Y CLASIFICACIÓN', NULL, 1, '2021-06-17 11:03:25', '2021-06-17 11:03:26'),
	(3, 'ESCRITORIO Y COMPLEMENTOS', NULL, 1, '2021-06-17 11:03:25', '2021-06-17 11:03:26'),
	(4, 'REPROGRAFIA', NULL, 2, '2021-06-25 12:49:10', '2021-06-25 12:49:11'),
	(5, 'ADHESIVO Y PEGAMENTOS', NULL, 2, '2021-06-25 12:49:28', '2021-06-25 12:49:29'),
	(6, 'CUADERNOS, BLOCS Y LIBRETAS', NULL, 2, '2021-06-25 12:49:56', '2021-06-25 12:49:56'),
	(7, 'MAQUINARIA', NULL, 3, '2021-06-25 12:50:13', '2021-06-25 12:50:14'),
	(8, 'CONSUMIBLES', NULL, 3, '2021-06-25 12:50:27', '2021-06-25 12:50:28'),
	(9, 'ERGONOMÍA', NULL, 3, '2021-06-25 12:50:39', '2021-06-25 12:50:39'),
	(10, 'LÁSER', NULL, 4, '2021-06-25 12:50:49', '2021-06-25 12:50:49'),
	(11, 'INK-JET', NULL, 4, '2021-06-25 12:51:00', '2021-06-25 12:51:00'),
	(12, 'OTROS', NULL, 4, '2021-06-25 12:51:10', '2021-06-25 12:51:10'),
	(13, 'ACCESORIOS', NULL, 5, '2021-06-25 12:51:24', '2021-06-25 12:51:24'),
	(14, 'MOBILIARIO', NULL, 5, '2021-06-25 12:51:35', '2021-06-25 12:51:35'),
	(15, 'COMUNICACIÓN Y REPRESENTACIÓN', NULL, 5, '2021-06-25 12:51:56', '2021-06-25 12:51:56'),
	(16, 'EMBALAJE', NULL, 6, '2021-06-25 12:52:10', '2021-06-25 12:52:10'),
	(17, 'HIGIENE Y PROTECCIÓN', NULL, 6, '2021-06-25 12:52:22', '2021-06-25 12:52:23'),
	(18, 'CATERING', NULL, 6, '2021-06-25 12:52:32', '2021-06-25 12:52:32'),
	(19, 'MATERIAL DIDÁCTICO', NULL, 7, '2021-06-25 12:52:44', '2021-06-25 12:52:45'),
	(20, 'EXPRESIÓN PLÁSTICA', NULL, 7, '2021-06-25 12:52:57', '2021-06-25 12:52:58'),
	(21, 'MANIPULADOS', NULL, 7, '2021-06-25 12:53:09', '2021-06-25 12:53:09'),
	(22, 'INFANTIL', NULL, 8, '2021-06-25 12:53:19', '2021-06-25 12:53:20'),
	(23, 'BELLAS ARTES', NULL, 8, '2021-06-25 12:53:30', '2021-06-25 12:53:31'),
	(24, 'DECORACIÓN', NULL, 8, '2021-06-25 12:53:54', '2021-06-25 12:53:54'),
	(25, 'REGALO', NULL, 9, '2021-06-25 12:54:01', '2021-06-25 12:54:03'),
	(26, 'COMERCIO', NULL, 9, '2021-06-25 12:54:16', '2021-06-25 12:54:16'),
	(27, 'JUEGOS', NULL, 9, '2021-06-25 12:54:25', '2021-06-25 12:54:25');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.teams
DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.teams: ~0 rows (aproximadamente)
DELETE FROM `teams`;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
	(1, 'd8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'paco\'s Team', 1, '2021-06-17 08:32:49', '2021-06-17 08:32:49'),
	(2, 'ad87088e-89da-470e-a54b-d360cb218651', 'juan\'s Team', 1, '2021-06-27 09:35:06', '2021-06-27 09:35:06');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.team_invitations
DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE IF NOT EXISTS `team_invitations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.team_invitations: ~0 rows (aproximadamente)
DELETE FROM `team_invitations`;
/*!40000 ALTER TABLE `team_invitations` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_invitations` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.team_user
DROP TABLE IF EXISTS `team_user`;
CREATE TABLE IF NOT EXISTS `team_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.team_user: ~0 rows (aproximadamente)
DELETE FROM `team_user`;
/*!40000 ALTER TABLE `team_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_user` ENABLE KEYS */;

-- Volcando estructura para tabla 4uveapp2.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comercial_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CIF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `role` enum('Admin','Manager','User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla 4uveapp2.users: ~1 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `phone`, `remember_token`, `surname`, `company`, `comercial_name`, `CIF`, `adress`, `city`, `cp`, `province`, `tipo_usuario`, `current_team_id`, `profile_photo_path`, `role`, `created_at`, `updated_at`, `isAdmin`, `is_admin`) VALUES
	('ad87088e-89da-470e-a54b-d360cb218651', 'juan', 'juan@juan.com', NULL, '$2y$10$kbUGOsG/cMFDEIUHl1p2tu/R7NBVmh8oi7vOMXtJXQYngbhQh3Upu', NULL, NULL, '606563646', NULL, 'noguera', 'Juan Papelería', 'Juan Paplería S.L.', 'g-54545445', 'C/ Manresa', 'Terrassa', 8235, 'Barcelona', 'Suministrador a Colegios con Almacén', NULL, NULL, 'User', '2021-06-27 09:35:06', '2021-06-27 09:35:06', 0, 0),
	('b26a0c67-45ac-4f28-9b10-2401fa1b50b1', 'Francisco Elías', 'paco@pacojr.com', NULL, '$2y$10$eSfx612pjaqagZC88o159O7QSCB6xGBgAaCynU8KO/yKopYNOzhm.', NULL, NULL, '656556565', NULL, 'Jaez', 'una', 'otr', 'g-54545445', 'c/ una', 'terrassa', 8226, 'Barcelona', 'Papelería', NULL, NULL, 'Admin', '2021-06-17 11:45:04', '2021-06-25 11:19:54', 0, 0),
	('d8b6a6f3-e5df-4194-b730-ed4ceec0fede', 'paco', 'PACO@PACO.COM', NULL, '$2y$10$4Rw5rmP2JBCoxumPV7kMwOjJsJpilBfzAYH2NakvPdNwA8dIVwAHe', NULL, NULL, '606563646', NULL, 'jáñez', 'CIAL DEL SUR', 'Cial del Norte', 'g-54545445', 'C/ TARRAGONA', 'TERRASSA', 8226, 'BARCELONA', 'Suministrador a Oficinas con Almacén', 1, NULL, 'User', '2021-06-17 08:32:49', '2021-06-17 08:32:49', 1, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
