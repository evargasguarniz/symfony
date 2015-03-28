-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-03-2015 a las 19:35:56
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `caseriosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Autoridades`
--

CREATE TABLE IF NOT EXISTS `Autoridades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_caserio` int(11) NOT NULL,
  `NombreAutoridad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dni` int(11) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `GradoEstudio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Blog`
--

CREATE TABLE IF NOT EXISTS `Blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreBlog` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `HoraPublicacion` time NOT NULL,
  `AutorPublicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Caserios`
--

CREATE TABLE IF NOT EXISTS `Caserios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comentarios`
--

CREATE TABLE IF NOT EXISTS `Comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idBlog` int(11) NOT NULL,
  `Comentario` longtext COLLATE utf8_unicode_ci NOT NULL,
  `FechaComentario` date NOT NULL,
  `horaComentario` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comidas`
--

CREATE TABLE IF NOT EXISTS `Comidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreComida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ingredientes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Preparacion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Cocinero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VitaminasComida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idCaserio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Deportes`
--

CREATE TABLE IF NOT EXISTS `Deportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDeporte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Galeria`
--

CREATE TABLE IF NOT EXISTS `Galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgGaleria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GaleriaDeportes`
--

CREATE TABLE IF NOT EXISTS `GaleriaDeportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idDeporte` int(11) NOT NULL,
  `imgDeporte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Perfiles`
--

CREATE TABLE IF NOT EXISTS `Perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePerfil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyectos`
--

CREATE TABLE IF NOT EXISTS `Proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCaserio` int(11) NOT NULL,
  `NombreProyecto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Costructora` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Ubicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NobreUsuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_Perfil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
