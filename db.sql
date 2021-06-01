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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela financial.category: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT IGNORE INTO `category` (`id`, `id_cat`, `name`, `date`) VALUES
	(1, 1, 'salario', '2021-05-21'),
	(2, 2, 'Diversos', '2021-05-21'),
	(3, 3, 'Cartões', '2021-05-22'),
	(4, 4, 'Despesas', '2021-05-21'),
	(5, 5, 'Carne', '2021-05-21'),
	(6, 6, 'Casa', '2021-05-31'),
	(7, 7, 'Carro', '2021-05-31');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Copiando estrutura para tabela financial.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `centcusto` varchar(50) DEFAULT NULL,
  `placed` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL,
  `due_at` date DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL,
  `rep` varchar(50) DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COMMENT='tabela de pagamentos ';

-- Copiando dados para a tabela financial.payments: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT IGNORE INTO `payments` (`id`, `id_user`, `title`, `centcusto`, `placed`, `value`, `due_at`, `obs`, `rep`, `responsible`, `status`, `date`) VALUES
	(1, NULL, 'Casa', 'Casa', '450', 900, '2021-01-25', 'Financiamento casa', 'income', 'Fernando Higino', 'pending', '2021-06-01'),
	(2, NULL, 'Carro', 'Carro', '6', 350, '2021-06-20', 'Financiamento Carro', 'single', 'Fernando Higino', 'pending', '2021-06-01'),
	(3, NULL, 'NetFlix', 'Diversos', '1', 25, '2021-05-15', 'NetFlix mensal', 'income', 'Fernando Higino', 'pending', '2021-06-01'),
	(4, NULL, 'Despesa', 'Despesas', '1', 450, '2021-06-09', 'Despesa Mensal', 'single', 'Fernando Higino', 'pending', '2021-06-01'),
	(5, NULL, 'Salario', 'salario', '1', 800, '2020-01-05', 'Salario do 5° dia útil ', 'income', 'Fernando Higino', 'pending', '2021-06-01'),
	(6, NULL, 'Salario', 'salario', '1', 750, '2021-01-20', 'Salario do dia 20', 'income', 'Fernando Higino', 'pending', '2021-06-01'),
	(7, NULL, 'Salario', 'salario', '1', 1.5, '2021-01-13', 'Premiação Mensal ', 'income', 'Fernando Higino', 'pending', '2021-06-01'),
	(8, NULL, 'Catão Caixa', 'Cartões', '1', 1, '2021-05-01', 'Cartão da caixa', 'single', 'Renata Furtado', 'pending', '2021-06-01'),
	(9, NULL, 'Carne', 'Carne', '1', 350, '2021-05-01', 'Carne', 'single', 'Fernando Higino', 'pending', '2021-06-01'),
	(10, NULL, 'Lampada', 'Casa', '1', 15, '2021-05-13', 'lâmpada da cozinha', 'single', 'Fernando Higino', 'pending', '2021-06-01'),
	(11, NULL, 'Copo Avon', 'Casa', '1', 150, '2021-05-14', 'copo da avon', 'single', 'Fernando Higino', 'pending', '2021-06-01');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

-- Copiando estrutura para tabela financial.responsible
CREATE TABLE IF NOT EXISTS `responsible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resp` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela financial.responsible: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `responsible` DISABLE KEYS */;
INSERT IGNORE INTO `responsible` (`id`, `id_resp`, `nome`) VALUES
	(1, 1, 'Fernando Higino'),
	(2, 2, 'Renata Furtado');
/*!40000 ALTER TABLE `responsible` ENABLE KEYS */;

-- Copiando estrutura para tabela financial.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela financial.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `id_user`, `name`, `email`, `password`, `active`, `date`) VALUES
	(17, NULL, 'Fernando', 'fernandohigino.fsh@gmail.com', '123456', '1', '2021-04-30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
