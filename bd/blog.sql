-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2016 a las 20:59:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_blog` int(11) NOT NULL,
  `id_texto` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_blog`, `id_texto`, `id_persona`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 6),
(4, 4, 2),
(5, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `userName` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `userName`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'secta20', 'nelson', 'torres', 'nelsondaniel@gmail.com', '22058538'),
(2, 'softnet', 'miguel', 'rincon', 'miguel@gmail.com', '12345'),
(4, 'orono', 'eleazar', 'orono', 'orono@hotmail.com', '123'),
(5, 'jessi', 'jessica', 'ale', 'nelsodaniel@gmail.com', '123'),
(6, 'gerard', 'gerardo', 'rojas', 'rojas@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `id_texto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`id_texto`, `fecha`, `texto`) VALUES
(1, '2016-07-13', 'asd'),
(2, '2016-07-27', 'otra prueba'),
(3, '2016-07-20', 'Atlas acaudilló a los Titanes en la Titanomaquia o guerra contra los olímpicos. Cuando los Titanes fueron derrotados , Zeus condenó a Atlas a cargar con los pilares que separan la tierra de los cielos, muy cerca del jardín de las Hespérides.'),
(4, '2016-07-27', 'En un principio solo las ninfas Hespérides eran las encargadas de cuidar las manzanas de oro, pero Hera no confiaba en ellas así que envió a Ladón, juntos eran los encargados de vigilar las preciadas manzanas de oro; Atlas recordó la profecía de Temis,1 amenazó a Perseo y le aconsejó que se fuera. Entonces Perseo sostuvo la cabeza de Medusa ante los ojos del Titán, y así lo convirtió en una enorme piedra a la que se llamaría cordillera del Atlas. Se decía de estas montañas que eran tan altas que tocaban el cielo, aunque sus árboles eran tan densos que impedían subirlas.'),
(5, '2016-07-27', 'Sin embargo, otras versiones cuentan que Heracles, descendiente de Perseo, engañó a Atlas para que recuperase algunas manzanas de oro del jardín de las Hespérides como parte de sus doce trabajos. Prometeo le había aconsejado que no fuese él mismo a buscarlas, sino que enviase a Atlas. Para lograrlo, Heracles se ofreció a sujetar el cielo mientras Atlas iba a buscarlas. Pero al volver, Atlas no quiso aceptar la devolución de los cielos, y dijo que él mismo llevaría las manzanas a Euristeo, el hombre que las había pedido. Heracles lo engañó de nuevo, pidiéndole que sujetase el cielo un momento para acomodarse su capa.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id_texto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `texto`
--
ALTER TABLE `texto`
  MODIFY `id_texto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
