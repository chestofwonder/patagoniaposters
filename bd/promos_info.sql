-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-12-2015 a las 18:15:20
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tagoni81_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos_info`
--

CREATE TABLE IF NOT EXISTS `promos_info` (
  `id_promo_info` int(11) NOT NULL,
  `lang` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `message` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `promos_info`
--

INSERT INTO `promos_info` (`id_promo_info`, `lang`, `message`) VALUES
(1, 'es', 'Siempre 3 ofertas especiales para ti.'),
(2, 'en', 'Always 3 special sales for you!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `promos_info`
--
ALTER TABLE `promos_info`
  ADD PRIMARY KEY (`id_promo_info`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `promos_info`
--
ALTER TABLE `promos_info`
  MODIFY `id_promo_info` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
