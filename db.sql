-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para financial
CREATE DATABASE IF NOT EXISTS `financial` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `financial`;

-- Copiando estrutura para tabela financial.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcategoria` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela financial.category: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT IGNORE INTO `category` (`id`, `id_cat`, `name`, `date`) VALUES
	(1, 1, 'salario', '2021-05-21'),
	(2, 2, 'Diversos', '2021-05-21'),
	(3, 3, 'Cartões', '2021-05-22'),
	(4, 4, 'Despesas', '2021-05-21'),
	(5, 5, 'Carne', '2021-05-21');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Copiando estrutura para tabela financial.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50),
  `centcusto` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL,
  `portion` int(3) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `duedata` date DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`centcusto`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `category` FOREIGN KEY (`centcusto`) REFERENCES `category` (`id_cat`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COMMENT='tabela de pagamentos ';

-- Copiando dados para a tabela financial.payments: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT IGNORE INTO `payments` (`id`, `id_user`, `centcusto`, `title`, `valor`, `type`, `obs`, `portion`, `status`, `duedata`, `date`) VALUES
	(94, '1', 1, 'Salario', 500.3, 'fixed_debit', 'Salario do dia 5', 0, 'ok', '2021-05-24', '2021-05-24');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

-- Copiando estrutura para tabela financial.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela financial.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `id_user`, `name`, `email`, `password`, `active`, `date`) VALUES
	(17, NULL, 'Fernando', 'fernandohigino.fsh@gmail.com', '123456', '1', '2021-04-30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
