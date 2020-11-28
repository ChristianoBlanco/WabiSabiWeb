-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para wsabi
CREATE DATABASE IF NOT EXISTS `wsabi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wsabi`;

-- Copiando estrutura para tabela wsabi.conteudos
CREATE TABLE IF NOT EXISTS `conteudos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela wsabi.conteudos: 5 rows
DELETE FROM `conteudos`;
/*!40000 ALTER TABLE `conteudos` DISABLE KEYS */;
INSERT INTO `conteudos` (`id`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
	(1, 'Origem Wabisabi', 'Como surgiu , a trajetória, componentes', NULL, '2020-11-14 13:57:22'),
	(2, 'EMA nossa Escola', 'O que é , o que faz , que é o lider', NULL, '2020-11-14 13:57:51'),
	(3, 'O Aikido', 'Onde surgiu, o que é , como é usado no dia a dia , filosofias', NULL, '2020-11-14 13:57:52'),
	(4, 'Samurais e o Aikido', 'Pesquisar sobre ', NULL, '2020-11-14 13:57:53'),
	(5, 'O que é arte marcial', 'Para que serve , o que faz ', NULL, '2020-11-14 13:57:54'),
	(7, 'teste titulo  2', 'teste de conteudox 2', '2020-11-27 02:29:00', '2020-11-27 02:29:00'),
	(8, 'teste titulo  3', 'teste de conteudox 3', '2020-11-27 02:29:42', '2020-11-27 02:29:42');
/*!40000 ALTER TABLE `conteudos` ENABLE KEYS */;

-- Copiando estrutura para tabela wsabi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela wsabi.migrations: 1 rows
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_10_28_010256_create_conteudo_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
