CREATE DATABASE anuncios;
use anuncios;

CREATE TABLE IF NOT EXISTS `anuncios` (
  `idAnuncio` INT auto_increment,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `metros` int(5) NOT NULL,
  `habitaciones` int(2) NOT NULL,
  `banyos` int(2) NOT NULL,
  `renta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `fechaConstruccion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPublicacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `informacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,

  PRIMARY KEY (`idAnuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
INSERT INTO `anuncios` (`titulo`, `provincia`, `ciudad`, `direccion`, `metros`, `habitaciones`, `banyos`, `renta`, `tipo`, `precio`,`fechaConstruccion`,`fechaPublicacion`,`informacion`) VALUES
('Se Vende Piso', 'Valencia', 'Ontinyent', 'Calle 123', 345, 4, 2, 'alquiler', 'piso', 785,'01/05/1995',now(),'reforma');