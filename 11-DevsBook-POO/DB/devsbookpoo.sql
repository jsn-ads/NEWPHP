-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para devsbookpoo
CREATE DATABASE IF NOT EXISTS `devsbookpoo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `devsbookpoo`;

-- Copiando estrutura para tabela devsbookpoo.postcomments
CREATE TABLE IF NOT EXISTS `postcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela devsbookpoo.postcomments: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela devsbookpoo.postlikes
CREATE TABLE IF NOT EXISTS `postlikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) DEFAULT 0,
  `id_user` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela devsbookpoo.postlikes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela devsbookpoo.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_posts_users` (`id_user`),
  CONSTRAINT `FK_posts_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela devsbookpoo.posts: ~1 rows (aproximadamente)
INSERT INTO `posts` (`id`, `id_user`, `type`, `created_at`, `body`) VALUES
	(2, 2, 'text', '2023-10-30 19:13:32', 'boa tarde a todos');

-- Copiando estrutura para tabela devsbookpoo.userrelations
CREATE TABLE IF NOT EXISTS `userrelations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` int(11) NOT NULL DEFAULT 0,
  `user_to` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela devsbookpoo.userrelations: ~2 rows (aproximadamente)
INSERT INTO `userrelations` (`id`, `user_from`, `user_to`) VALUES
	(1, 2, 3),
	(2, 2, 4);

-- Copiando estrutura para tabela devsbookpoo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.jpg',
  `cover` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela devsbookpoo.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `email`, `password`, `name`, `birthdate`, `city`, `work`, `avatar`, `cover`, `token`) VALUES
	(2, 'jsn@gmail.com', '$2y$10$EinacpjNG1GQIl6n6Alt0OlCaB7fyTmAiCJ5CcF1DhC7K0zyo43mm', 'Neto', '1989-11-20', '', '', 'avatar.jpg', '', 'cd6f51bc1e2d9373239d807ed5ce1309'),
	(3, 'cris@gmail.com', '$2y$10$R.tkUFuCyhN8TCiAB4ccmO6BPKwsG830MAzZEomtfcjJxaKrT4z3a', 'Cristina Monik', '1987-12-11', NULL, NULL, 'avatar.jpg', NULL, 'fa126955cc836116ba2f99b993dea2fe'),
	(4, 'mariah@gmail.com', '$2y$10$uLlbPKqY/Q92VF50SZd96O21QSAvz.GUAbAZQWPXwJYdIcACEpvRK', 'mariah', '1989-11-20', NULL, NULL, 'avatar.jpg', NULL, '453253911d8733570b93d172acc2793c');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
