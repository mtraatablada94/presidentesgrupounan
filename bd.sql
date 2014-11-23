-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2014 a las 17:08:33
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `grado` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`ID`, `nombre`, `cedula`, `tipo`, `grado`) VALUES
(2, 'MICHEL ROBERTO TRAÃ‘A TABLADA', '121-020994-0004R', 'Horario', 'Especialista'),
(3, 'ELIZABETH DEL SOCORRO SILVA URBINA', '121-020306-0904A', 'Tiempo Completo', 'Master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `p1` decimal(10,0) NOT NULL,
  `p2` decimal(10,0) NOT NULL,
  `promedio` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`ID`, `nombre`, `p1`, `p2`, `promedio`) VALUES
(2, 'MICHEL ROBERTO TRAÃ‘A TABLADA', '85', '84', '85'),
(3, 'ELIZABETH DEL SOCORRO SILVA URBINA', '100', '90', '95');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `correo`) VALUES
(8, 'Eliza Silva2', 'urbnelii94@gmail.com'),
(9, 'Elizabeth Del Socorro Silva Urbina', 'elizab3th94@hotmail.com'),
(10, 'Elii Urbina', 'elii94@yahoo.com'),
(11, 'Luisa Silva', 'lucha50@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
