-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2018 a las 17:49:10
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_rolling`
--
CREATE DATABASE IF NOT EXISTS `db_rolling` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rolling`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadio`
--

CREATE TABLE `estadio` (
  `id_estadio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadio`
--

INSERT INTO `estadio` (`id_estadio`, `nombre`, `capacidad`) VALUES
(1, 'Camp Nou', 120000),
(5, 'RMonumental', 65000),
(6, 'El Monumental', 65000),
(7, 'Amalfitani', 3000),
(8, 'Union', 2000),
(9, 'Amalfitani', 3000),
(10, 'Aitani', 4000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recital`
--

CREATE TABLE `recital` (
  `id_recital` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `estadio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recital`
--

INSERT INTO `recital` (`id_recital`, `nombre`, `precio`, `estadio_id`) VALUES
(2, '0', 300, 1),
(3, '0', 300, 1),
(13, 'virus', 200, 1),
(18, 'virus', 200, 1),
(20, 'virus', 200, 5),
(21, 'virus', 200, 9),
(22, 'Divididos', 300, 1),
(23, 'Beatles', 2000, 1),
(24, 'asd', 1, 1),
(25, 'a1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadio`
--
ALTER TABLE `estadio`
  ADD PRIMARY KEY (`id_estadio`);

--
-- Indices de la tabla `recital`
--
ALTER TABLE `recital`
  ADD PRIMARY KEY (`id_recital`),
  ADD KEY `estadio_id` (`estadio_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadio`
--
ALTER TABLE `estadio`
  MODIFY `id_estadio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `recital`
--
ALTER TABLE `recital`
  MODIFY `id_recital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recital`
--
ALTER TABLE `recital`
  ADD CONSTRAINT `recital_ibfk_1` FOREIGN KEY (`estadio_id`) REFERENCES `estadio` (`id_estadio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
