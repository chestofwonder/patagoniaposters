-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-11-2015 a las 05:22:24
-- Versión del servidor: 5.5.46-cll
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

DROP TABLE IF EXISTS `ingles`;
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

DROP TABLE IF EXISTS `panel`;
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
(1, 'TORRES DEL PAINE, INVIERNO', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate. <br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '$ch3.000', '$ ch 7,800'),
(2, 'PUERTO NATALES', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(3, 'CUERNOS DEL PAINE', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(4, 'THE BLUEST GREY EVER', 'EN stock. Revisa las Promociones!', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '75 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(5, 'GLACIAR PERITO MORENO', 'EN stock. Revisa las Promociones', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate. <br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(6, 'TORRES DEL PAINE, AMANECER', 'EN stock. SÓLO VERSIÓN ESPECIAL', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate.<br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". <br>', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(7, 'EL CHALTÉN-MOUNT FITZ ROY', 'EN STOCK!!! Versión ESPECIAL', 'Este <i>poster</i> está impreso en cuatricromía offset sobre papel <i>couché</i> opaco de 300g. Con polipropileno mate. <br> Se envía en tubo de cartón protector, con tapas. <br>El envío es a través de “Correos de Chile”.<br>\r\n\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado". ', '83 cm. alto x 48 cm. ancho', '$ch 15.000', '$ch 3.500', '13', 25, '', '$ch 7,800'),
(8, 'COLECCIÓN PEQUEÑO FORMATO', 'De nuevo EN STOCK!!!', 'La colección completa ( 7 modelos ) \r\ndentro de una carpeta que mide 40 cm. x 25 cm. x 5 mm. Los <i>posters</i> están impresos en cuatricromía offset sobre papel <i>couché</i> opaco de 350g. Tienen polipropileno mate. El envío es a través de “Correos de Chile”.<br>\r\nModos: "pequeño paquete certificado" y "pequeño paquete internacional certificado".<br> Para consultar por <i>poster</i> Pequeño Formato <strong>"suelto"</strong> pinchar en el botón OTRO MEDIO DE PAGO.\r\n', 'Serie 2011: 40 cm. alto x 23 cm. ancho<br>Trío Patagónico: 37 cm. alto x 24,4 cm. ancho', '$ch 27.000', '$ch 4.500', '15', 45, '', '$ch 9.800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panell`
--

DROP TABLE IF EXISTS `panell`;
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

DROP TABLE IF EXISTS `paneng`;
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

DROP TABLE IF EXISTS `promen`;
CREATE TABLE IF NOT EXISTS `promen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacional` text COLLATE utf8_spanish_ci NOT NULL,
  `internacional` text COLLATE utf8_spanish_ci NOT NULL,
  `aclaracion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `promen`
--

INSERT INTO `promen` (`id`, `nombre`, `descripcion`, `nacional`, `internacional`, `aclaracion`) VALUES
(1, 'Previous edition ON SALE!', 'Grey, Puerto Natales, Torres en Invierno, Los Cuernos & Perito Moreno at only 20 u$dollars each + shipping. \r\nGET 4 FOR THE PRICE OF 3!', '$12,000 + shipping', 'USD 20 + shipping', 'Always 3 special sales for you!'),
(2, 'Small format collection, per unit', 'Buying a minimum of 3, choose from "El Chaltén", "Torres al Amanecer", "Los Cuernos", "Glaciar Perito Moreno" or "Glaciar Grey". From the previous edition, only until they are sold out!!!\r\n', '$3,000 + shipping', 'USD 5 + shipping', ''),
(3, 'Several posters in ONE TUBE', 'Chose up to 3 posters and pay ONE SHIPPING COST ONLY! <br>\r\nClick on "BUY" and e-mail us indicating the posters you want.', 'poster x 2/3 + shipping', 'poster x 2/3 + shipping', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

DROP TABLE IF EXISTS `promociones`;
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

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacional` text COLLATE utf8_spanish_ci NOT NULL,
  `internacional` text COLLATE utf8_spanish_ci NOT NULL,
  `aclaracion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id`, `nombre`, `descripcion`, `nacional`, `internacional`, `aclaracion`) VALUES
(1, 'EDICIÓN ANTERIOR EN OFERTA', 'Lleva Grey, Puerto Natales, Torres en Invierno, Los Cuernos o Perito Moreno por sólo 12.000 $ cada uno más costo de envío!!!! Hasta agotar edición anterior \r\nY SI LLEVAS 4 PAGAS 3!!!', '$12.000 + envío', 'USD 20 + envío', 'Siempre 3 ofertas especiales para ti.'),
(2, 'COLECCIÓN Peq. Formato, "sueltos"', 'Sueltos, comprando como mínimo 3: "El Chaltén", "Los Cuernos", "Perito Moreno", "Glaciar Grey" o "Torres al Amanecer" de la edición anterior. Hasta agotar stock !!!', '$3.000 + envío', 'USD 5 + envío', ''),
(3, 'hasta 3 EN UN TUBO', 'Lleva 2 o 3 <i>posters</i> a elección y paga UN SOLO COSTO DE ENVÍO. Ahorra dinero!<br>\r\nHaz clic en comprar e indica los  <i>posters</i> de tu preferencia.', '2/3 posters + 1 envío', '2/3 posters + 1 envío', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
