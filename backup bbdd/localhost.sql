-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-06-2016 a las 11:48:45
-- Versión del servidor: 5.5.50-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tagoni81_datos`
--
CREATE DATABASE IF NOT EXISTS `tagoni81_datos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `tagoni81_datos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE IF NOT EXISTS `ingles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `medidas` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `internacional` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `ingles`
--

INSERT INTO `ingles` (`id`, `poster`, `stock`, `descripcion`, `medidas`, `precio`, `costo`, `internacional`) VALUES
(1, 'TORRES DEL PAINE, INVIERNO', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '70 cm. alto x 45 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch3.000', 'Internacional $ch 6.000 (USD 12)'),
(2, 'PUERTO NATALES', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '70 cm. alto x 45 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(3, 'CUERNOS DEL PAINE', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '70 cm. alto x 45 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(4, 'THE BLUEST GREY EVER', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '70 cm. alto x 45 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(5, 'GLACIAR PERITO MORENO', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '73 cm. alto x 42 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(6, 'TORRES DEL PAINE, AMANECER', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '73 cm. alto x 42 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(7, 'EL CHALTÉN-MOUNT FITZ ROY', 'Stock disponible', 'This poster is 4-colour (CMYK) printed, on opaque 225 g. <i>couché</i> paper.<br>\nIt is sent in a protection tube with base and lid. <br>\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\nMode: "Certified International Small Package"', '73 cm. alto x 42 cm. ancho', '$ch 12.000 (USD 24)', 'Nacional $ch 3.000', 'Internacional $ch 6.000 (USD 12)'),
(8, 'COLECCIÓN PEQUEÑO FORMATO', 'Stock disponible', 'The complete collection (7 images) inside a thick protection folder that is 40 cm x 25 cm x 5mm / 15.7 x 9.8 x 0.2 in <br>\nThese posters are 4-colour (CMYK) printed, on opaque 300 g. couché paper.<br>\nShipping is by National Chilean Post-Office, "Correos ', 'Serie 2011: 40 cm. alto x 23 cm. ancho\r\nTrío Patagónico: 37 cm. alto x 24,4 cm. ancho', '$ch 22.000 (USD 44)', 'Nacional $ch 4.000', 'Internacional $ch 6.500 (USD 13)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel`
--

CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` varchar(255) CHARACTER SET latin1 NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `medidas` varchar(255) CHARACTER SET latin1 NOT NULL,
  `precio` varchar(255) CHARACTER SET latin1 NOT NULL,
  `costo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `internacional` varchar(255) CHARACTER SET latin1 NOT NULL,
  `preciod` int(11) NOT NULL,
  `nacionald` varchar(255) CHARACTER SET latin1 NOT NULL,
  `internacionalp` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `panel`
--

INSERT INTO `panel` (`id`, `poster`, `stock`, `descripcion`, `medidas`, `precio`, `costo`, `internacional`, `preciod`, `nacionald`, `internacionalp`) VALUES
(1, 'TORRES DEL PAINE, INVIERNO', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> está impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate. <br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '$ch3.000', '$ ch 7,800'),
(2, 'PUERTO NATALES', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate.<br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(3, 'CUERNOS DEL PAINE', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate.<br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(4, 'THE BLUEST GREY EVER', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate.<br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(5, 'GLACIAR PERITO MORENO', 'EN stock. Revisa las Promociones', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate. <br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(6, 'TORRES DEL PAINE, AMANECER', 'EN stock. Sï¿½LO VERSIï¿½N ESPECIAL', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate.<br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". <br>', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(7, 'EL CHALTï¿½N-MOUNT FITZ ROY', 'EN STOCK!!! Versiï¿½n ESPECIAL', 'Este <i>poster</i> estï¿½ impreso en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 300g. Con polipropileno mate. <br> Se envï¿½a en tubo de cartï¿½n protector, con tapas. <br>El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\n\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado". ', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(8, 'COLECCIï¿½N PEQUEï¿½O FORMATO', 'De nuevo EN STOCK!!!', 'La colecciï¿½n completa ( 7 modelos ) \r\ndentro de una carpeta que mide 40 cm. x 25 cm. x 5 mm. Los <i>posters</i> estï¿½n impresos en cuatricromï¿½a offset sobre papel <i>couchï¿½</i> opaco de 350g. Tienen polipropileno mate. El envï¿½o es a travï¿½s de ï¿½Correos de Chileï¿½.<br>\r\nModos: "pequeï¿½o paquete certificado" y "pequeï¿½o paquete internacional certificado".<br> Para consultar por <i>poster</i> Pequeï¿½o Formato <strong>"suelto"</strong> pinchar en el botï¿½n OTRO MEDIO DE PAGO.\r\n', 'Serie 2011: 40 cm. alto x 23 cm. ancho<br>Trï¿½o Patagï¿½nico: 37 cm. alto x 24,4 cm. ancho', '$ch 27.000', '$ch 4.500', '16', 45, '', '$ch 9.800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panell`
--

CREATE TABLE IF NOT EXISTS `panell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `medidas` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL,
  `costo` text COLLATE utf8_spanish_ci NOT NULL,
  `internacional` text COLLATE utf8_spanish_ci NOT NULL,
  `preciod` text COLLATE utf8_spanish_ci NOT NULL,
  `nacionald` text COLLATE utf8_spanish_ci NOT NULL,
  `internacionalp` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `panell`
--

INSERT INTO `panell` (`id`, `poster`, `stock`, `descripcion`, `medidas`, `precio`, `costo`, `internacional`, `preciod`, `nacionald`, `internacionalp`) VALUES
(1, 'TORRES DEL PAINE, INVIERNO', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '70 cm. alto x 45 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '$ch3.000', '$ch6.000'),
(2, 'PUERTO NATALES', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '70 cm. alto x 45 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(3, 'CUERNOS DEL PAINE', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '70 cm. alto x 45 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(4, 'THE BLUEST GREY EVER', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '70 cm. alto x 45 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(5, 'GLACIAR PERITO MORENO', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '73 cm. alto x 42 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(11, 'GLACIAR 4 MORENO12', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '73 cm. alto x 42 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(9, 'GLACIAR PERITO MORENO1', 'Stock disponible', 'Este <i>poster</i> está impreso en cuatricromía sobre papel <i>couché</i> opaco de 225g.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '73 cm. alto x 42 cm. ancho', '$ch 12.000', '$ch3.000', '12', '24', '', '$ch6.000'),
(10, 'COLECCIÓN PEQUEÑO FORMATO', 'Stock disponible', 'La colección completa ( 7 modelos ) \ndentro de una carpeta que mide 40 cm. x 25 cm. x 5 mm. Los <i>posters</i> están impresos en cuatricromía sobre papel <i>couché</i> opaco de 300g. El envío es a través de “Correos de Chile”.<br>\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado".<br> Para consultar por <i>poster</i> Pequeño Formato <strong>"suelto"</strong> pinchar en el botón OTRO MEDIO DE PAGO.\n', 'Serie 2011: 40 cm. alto x 23 cm. ancho<br>\nTrío Patagónico: 37 cm. alto x 24.4 cm. ancho', '$ch 22.000', '$ch4.000', '13', '44', '', '$ch6.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paneng`
--

CREATE TABLE IF NOT EXISTS `paneng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `medidas` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `internacional` varchar(255) NOT NULL,
  `preciod` int(11) NOT NULL,
  `nacionald` text NOT NULL,
  `internacionalp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `paneng`
--

INSERT INTO `paneng` (`id`, `poster`, `stock`, `descripcion`, `medidas`, `precio`, `costo`, `internacional`, `preciod`, `nacionald`, `internacionalp`) VALUES
(1, 'TORRES DEL PAINE, INVIERNO', 'IN STOCK. Check SPECIAL SALES', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 75 cm / 18.7 x 29.2 in', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(2, 'PUERTO NATALES', 'IN STOCK. Check SPECIAL SALES', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene.<br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 75 cm / 18.7 x 29.2 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(3, 'CUERNOS DEL PAINE', 'IN STOCK. Check SPECIAL SALES', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 75 cm / 18.7 x 29.2 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(4, 'THE BLUEST GREY EVER', 'IN STOCK. Check SPECIAL SALES', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 75 cm / 18.7 x 29.2 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(5, 'GLACIAR PERITO MORENO', 'IN STOCK. Check SPECIAL SALES', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 83 cm / 18.7 x 32 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(6, 'TORRES DEL PAINE, AMANECER', 'IN STOCK. ONLY SPECIAL VERSION', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean  Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"<br>\r\n', '48 x 83 cm / 18.7 x 32 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(7, 'EL CHALTÉN-MOUNT FITZ ROY', 'BACK IN STOCK. ONLY SPECIAL VERSION', 'This poster is 4-colour (CMYK, offset) printed, on opaque, 300 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nIt is sent in a protection tube with base and lid. <br>\r\nShipping is by National Chilean Post-Office, "Correos de Chile"<br>\r\nMode: "Certified International Small Package"', '48 x 83 cm / 18.7 x 32 in.', '$ch 15,000', '$ch3,500', '13', 25, '', '$ch 7,800'),
(8, 'COLECCIÓN PEQUEÑO FORMATO', 'Back IN STOCK!!!, check SPECIAL SALES', 'The complete collection (7 images) inside a thick protection folder that is 40 cm x 25 cm x 5mm / 15.7 x 9.8 x 0.2 in <br>\r\nThese posters are 4-colour (CMYK, offset printed, on opaque, 350 g. <i>couché</i> paper. With matte polipropylene. <br>\r\nShipping is by National Chilean Post-Office,', '2011 Serie: 40 x 23 cm / 15.7 x 9 in.<br>Patagonian Trio: 37 x 24,5 cm / 14.5 x 9.6 in.', '$ch 27,000', '$ch 4,500', '16', 45, '', '$ch 9.800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promen`
--

CREATE TABLE IF NOT EXISTS `promen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacional` text COLLATE utf8_spanish_ci NOT NULL,
  `internacional` text COLLATE utf8_spanish_ci NOT NULL,
  `aclaracion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `promen`
--

INSERT INTO `promen` (`id`, `nombre`, `descripcion`, `nacional`, `internacional`, `aclaracion`) VALUES
(4, 'Posters previous edition', 'Get "Los Cuernos", "Glaciar Perito Moreno", or "Puerto Natales" from the previous edition, only until they are sold out!', '$11.000 + shipping', 'USD 18 + shipping', ''),
(2, 'Small format collection, per unit', 'Buying a minimum of 3, choose from "El Chaltén", "Torres al Amanecer", "Los Cuernos", "Glaciar Perito Moreno" or "Glaciar Grey". From the previous edition, only until they are sold out!!!\r\n', '$3,000 + shipping', 'USD 5 + shipping', ''),
(3, 'Several posters in ONE TUBE', 'Chose up to 3 posters and pay ONE SHIPPING COST ONLY! <br>\r\nClick on "BUY" and e-mail us indicating the posters you want.', 'poster x 2/3 + shipping', 'poster x 2/3 + shipping', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moneda` varchar(22) NOT NULL,
  `2x` varchar(22) NOT NULL,
  `3x` varchar(22) NOT NULL,
  `4x` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `moneda`, `2x`, `3x`, `4x`) VALUES
(1, 'nacional', '', '', ''),
(2, 'internacional', '(USD 47)', '(USD 70)', '(USD 94)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacional` text COLLATE utf8_spanish_ci NOT NULL,
  `internacional` text COLLATE utf8_spanish_ci NOT NULL,
  `aclaracion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id`, `nombre`, `descripcion`, `nacional`, `internacional`, `aclaracion`) VALUES
(4, 'hasta 3 EN UN TUBO', 'Lleva 2 o 3 <i>posters</i> a elección y paga UN SOLO COSTO DE ENVÍO. Ahorra dinero!<br>\r\nHaz clic en comprar e indica los  <i>posters</i> de tu preferencia.', '2/3 posters + 1 envío', '2/3 posters + 1 envío', ''),
(3, 'Pequeño Formato, de a uno', 'Comprando un mínimo de 3, lleva "El Chaltén", "Torres al Amanecer", "Los Cuernos", "Glaciar Perito Moreno" o "Glaciar Grey" pequeños, de la edición anterior. Hasta agotar stock.', '3.000 + envío', '5 USD + envío', ''),
(5, 'POSTERS edición anterior', 'Lleva "Los Cuernos", "Glaciar Perito Moreno", y "Puerto Natales" de la edición anterior, oferta válida hasta agotar stock.', '11.000 + envío', '18 USD + envío', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos_info`
--

CREATE TABLE IF NOT EXISTS `promos_info` (
  `id_promo_info` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `message` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_promo_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `promos_info`
--

INSERT INTO `promos_info` (`id_promo_info`, `lang`, `message`) VALUES
(1, 'es', 'Siempre 3 ofertas especiales para ti.'),
(2, 'en', 'Always 3 special sales for you!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`) VALUES
(1, 'tagoni81', 'lixta5500');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
