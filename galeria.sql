-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para galeria_practica
CREATE DATABASE IF NOT EXISTS `galeria_practica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `galeria_practica`;

-- Volcando estructura para tabla galeria_practica.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla galeria_practica.fotos: ~16 rows (aproximadamente)
DELETE FROM `fotos`;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
	(1, 'prueba 1', '2.jpg', 'prueba 1'),
	(2, 'prueba ', '1.jpg', 'prueba '),
	(3, 'prueba ', '3.jpg', 'prueba '),
	(4, 'prueba ', '4.jpg', 'prueba '),
	(5, 'prueba ', '5.jpg', 'prueba '),
	(6, 'prueba ', '6.jpg', 'prueba '),
	(7, 'prueba ', '7.jpg', 'prueba '),
	(8, 'prueba 8', '8.jpg', 'prueba '),
	(9, 'prueba ', '9.jpg', 'prueba '),
	(10, 'prueba ', '10.jpg', 'prueba '),
	(11, 'prueba ', '11.jpg', 'prueba '),
	(12, 'prueba ', '12.jpg', 'prueba '),
	(13, 'prueba ', '13.jpg', 'prueba '),
	(14, 'prueba ', '14.jpg', 'prueba '),
	(15, 'prueba ', '15.jpg', 'prueba '),
	(16, 'prueba ', '16.jpg', 'prueba ');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
