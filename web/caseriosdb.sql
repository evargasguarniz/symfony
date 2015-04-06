-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2015 a las 20:21:55
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
  `NombreAutoridad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dni` int(11) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `GradoEstudio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Caserios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EDD91B32E4C99CDF` (`Caserios_id`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Caserios`
--

INSERT INTO `Caserios` (`id`, `Nombre`, `Descripcion`, `Fecha`) VALUES
(5, 'Sanjorge', 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32 Vargas Guarniz Elmer Baleri Vargas', '2015-04-01'),
(6, 'Espinal', 'Lorem ipsum dolor sit amet, sit urna, euismod mauris nunc magna dictum. Sodales ac amet, odio non wisi ante. Ornare vestibulum a, at vitae, magna gravida. Cursus quam in magna, amet eget bibendum viverra adipiscing torquent lacus, faucibus euismod nec mattis cubilia. Vel nisl fusce, sollicitudin natoque sociis ridiculus scelerisque, leo posuere consectetuer, a vel nibh morbi fusce, diam inventore nulla per montes suspendisse arcu. Amet sed sit etiam at dignissim ultricies, turpis maecenas ultricies ut dapibus nibh, tortor ut tincidunt deserunt enim. Libero aenean, ut pharetra ipsum in pharetra odio ut. Urna arcu sed urna nonummy elit tellus, quisque a quisque enim suspendisse, in nullam tincidunt tincidunt lorem vivamus. Erat mauris suspendisse arcu mauris duis ligula, sagittis odio, tristique wisi consectetuer nulla massa sodales, faucibus sollicitudin mauris, vulputate elit amet sit. Mattis lectus mi est, curabitur dolor scelerisque, in enim velit ullamcorper risus, arcu sodales donec pellentesque et vel vitae. Rutrum nunc aenean ultrices molestie neque ultricies, pellentesque vel elementum hymenaeos rhoncus nunc augue, in tempor officia et non nunc, eget lacinia, augue ac in suspendisse ullamcorper.', '2015-04-02'),
(7, 'Brasil', 'Integer eu quam ornare imperdiet. Non ac congue augue erat donec id, ut tempor elementum sed. Velit placerat suspendisse in adipiscing lorem luctus. Consequat ea habitant sit, eu ut mauris erat torquent. Integer suspendisse sed purus fringilla, felis in non vel dui cras sit. Non magna, molestie pellentesque, suspendisse urna mauris mus taciti sed. Ipsum nec blandit mollis, sed etiam mi mauris sodales. Vestibulum phasellus scelerisque, rutrum faucibus egestas, nunc ut ex lorem tempus, id nunc. Convallis vitae parturient elit adipiscing consectetuer. Ac consequat hac luctus rutrum, aenean elementum vitae nec vestibulum libero amet, ut lorem porta ipsum. Volutpat turpis vulputate in nec ut lacus, phasellus dignissim porttitor tellus mauris elit, consectetuer tellus scelerisque vestibulum proin, eget ipsum pede aenean tincidunt, pede arcu velit urna neque consequat.', '2014-01-01'),
(8, 'Farrat', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '2010-01-01'),
(9, 'Simbrom', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '2015-05-07');

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
  `Caserio` int(11) NOT NULL,
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
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Caserios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_56ADE815E4C99CDF` (`Caserios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `Galeria`
--

INSERT INTO `Galeria` (`id`, `imgGaleria`, `descripcion`, `Caserios_id`) VALUES
(1, 'negocio1.jpg', 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo,', 5),
(2, 'negocio2.jpeg', 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo,', 6),
(3, 'negocio3.jpeg', 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo,', 7),
(4, 'negocio3.jpeg', 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo,', 8),
(5, 'negocio3.jpeg', 'Lorem ipsum dolor sit amet, sit urna, euismod mauris nunc magna dictum. Sodales ac amet, odio non wisi ante. Ornare vestibulum a, at vitae, magna gravida. Cursus quam in magna, amet eget bibendum vive', 9);

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

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Autoridades`
--
ALTER TABLE `Autoridades`
  ADD CONSTRAINT `FK_EDD91B32E4C99CDF` FOREIGN KEY (`Caserios_id`) REFERENCES `Caserios` (`id`);

--
-- Filtros para la tabla `Galeria`
--
ALTER TABLE `Galeria`
  ADD CONSTRAINT `FK_56ADE815E4C99CDF` FOREIGN KEY (`Caserios_id`) REFERENCES `Caserios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
