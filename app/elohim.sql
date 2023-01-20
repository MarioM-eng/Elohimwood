-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.18 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla elohimwood.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(10) NOT NULL,
  `clave` varchar(20) NOT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla elohimwood.administrador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT IGNORE INTO `administrador` (`idadministrador`, `nick`, `clave`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla elohimwood.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `celular` varchar(14) DEFAULT NULL,
  `whatsapp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_pqr` varchar(50) DEFAULT NULL,
  `facebook` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idcontacto`,`administrador_idadministrador`),
  KEY `fk_contacto_administrador1_idx` (`administrador_idadministrador`),
  CONSTRAINT `fk_contacto_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla elohimwood.contacto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Volcando estructura para tabla elohimwood.datos_empresa
CREATE TABLE IF NOT EXISTS `datos_empresa` (
  `iddatos_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `mision` varchar(200) NOT NULL,
  `vision` varchar(200) NOT NULL,
  `nosotros` varchar(200) NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`iddatos_empresa`,`administrador_idadministrador`),
  KEY `fk_datos_empresa_administrador_idx` (`administrador_idadministrador`),
  CONSTRAINT `fk_datos_empresa_administrador` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla elohimwood.datos_empresa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `datos_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `datos_empresa` ENABLE KEYS */;

-- Volcando estructura para tabla elohimwood.img
CREATE TABLE IF NOT EXISTS `img` (
  `idimg_madera` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `tipo_img_idtipo_img` int(11) NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idimg_madera`,`tipo_img_idtipo_img`,`administrador_idadministrador`),
  KEY `fk_img_tipo_img1_idx` (`tipo_img_idtipo_img`),
  KEY `fk_img_administrador1_idx` (`administrador_idadministrador`),
  CONSTRAINT `fk_img_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`),
  CONSTRAINT `fk_img_tipo_img1` FOREIGN KEY (`tipo_img_idtipo_img`) REFERENCES `tipo_img` (`idtipo_img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla elohimwood.img: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
/*!40000 ALTER TABLE `img` ENABLE KEYS */;

-- Volcando estructura para tabla elohimwood.tipo_img
CREATE TABLE IF NOT EXISTS `tipo_img` (
  `idtipo_img` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_img`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla elohimwood.tipo_img: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_img` DISABLE KEYS */;
INSERT IGNORE INTO `tipo_img` (`idtipo_img`, `nombre`) VALUES
	(1, 'Madera'),
	(2, 'Producto');
/*!40000 ALTER TABLE `tipo_img` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
