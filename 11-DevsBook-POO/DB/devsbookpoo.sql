-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para devsbook
CREATE DATABASE IF NOT EXISTS `devsbook` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `devsbook`;

-- Copiando estrutura para tabela devsbook.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `type` varchar(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `body` text NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela devsbook.posts: ~5 rows (aproximadamente)
INSERT INTO `posts` (`id`, `id_user`, `type`, `created_at`, `body`) VALUES
	(1, 1, 'text', '2022-06-08 14:20:45', 'oi bom dia '),
	(2, 1, 'text', '2022-06-09 19:57:43', 'esta ficando complicado\r\n\r\n\r\nnão acha ?'),
	(3, 1, 'text', '2022-06-13 19:50:34', 'mais um dia testanto'),
	(4, 4, 'text', '2022-08-04 22:33:55', 'oi pessoal'),
	(5, 1, 'text', '2022-08-18 23:26:56', 'tt');

-- Copiando estrutura para tabela devsbook.post_comments
CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `body` text NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela devsbook.post_comments: ~3 rows (aproximadamente)
INSERT INTO `post_comments` (`id`, `id_post`, `id_user`, `created_at`, `body`) VALUES
	(1, 1, 1, '0000-00-00 00:00:00', 'teste'),
	(2, 4, 1, '2023-04-24 12:32:54', 'bom dia');

-- Copiando estrutura para tabela devsbook.post_likes
CREATE TABLE IF NOT EXISTS `post_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela devsbook.post_likes: ~2 rows (aproximadamente)
INSERT INTO `post_likes` (`id`, `id_post`, `id_user`, `created_at`) VALUES
	(2, 3, 1, '2023-02-10 17:58:47'),
	(8, 5, 1, '2023-04-24 10:49:18');

-- Copiando estrutura para tabela devsbook.userrelations
CREATE TABLE IF NOT EXISTS `userrelations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` int(11) NOT NULL DEFAULT 0,
  `user_to` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela devsbook.userrelations: ~1 rows (aproximadamente)
INSERT INTO `userrelations` (`id`, `user_from`, `user_to`) VALUES
	(3, 4, 1),
	(12, 1, 4);

-- Copiando estrutura para tabela devsbook.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `work` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT 'avatar.jpg',
  `cover` varchar(100) DEFAULT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela devsbook.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `email`, `password`, `nome`, `birth_date`, `city`, `work`, `avatar`, `cover`, `token`) VALUES
	(1, 'jsn@gmail.com', '$2y$10$OGIq3GK2KLINLRuVEPIGEuCzB0YHvohV0vxjbho0PdG0oXaDvyYzy', 'Jose Neto', '1990-11-20', 'Goiania', 'Evtek', '0cec4d910048e8b6f0f41aa23976cbd7.jpg', '1ad74bc97739a69988ffcba651512dd6.jpg', 'eaf3f05df0ddb8dc9256085803fb8a18'),
	(3, 'g@gmail.com', '$2y$10$.QdYKpAArnl7FbJIqMq8cuhM9/VSkcg0OEfNEYI9HlhvJDsfZW3ka', 'Neto', '1989-11-20', NULL, NULL, 'avatar.jpg', 'cover.jpg', 'fb55abc72b5fd7b74fc5c083b64d63b3'),
	(4, 'cris@gmail.com', '$2y$10$RAg6b1tFV4XXhv2AoeQDaOCPuA6Bj56DmjiNGJETXeReImyFOWq5e', 'Cristina Monik', '1987-12-11', NULL, NULL, 'avatar.jpg', 'cover.jpg', 'c93d66e26f5299e773d783d69fbafb06');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
