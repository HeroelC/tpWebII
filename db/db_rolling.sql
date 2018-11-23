-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2018 a las 03:32:32
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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_recital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `mensaje`, `puntaje`, `id_usuario`, `id_recital`) VALUES
(136, 'Recital en Argentina', 5, 1, 50),
(137, 'Rolling Stones', 5, 1, 50),
(138, 'Primer comentario', 1, 1, 48),
(139, 'Segundo comentario', 1, 1, 48);

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
(30, 'Wembley', 80000),
(31, 'Camp Nou', 90000),
(32, 'Old Traford', 50000),
(33, 'La Bombonera', 54000),
(34, 'Monumental', 65000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `id_recital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `url`, `id_recital`) VALUES
(92, 'images/5bf765ad3f028.jpg', 48),
(93, 'images/5bf765ad45510.jpg', 48),
(94, 'images/5bf765d25c8e3.jpg', 49),
(95, 'images/5bf7660627334.jpg', 50),
(96, 'images/5bf76606280b7.jpg', 50),
(97, 'images/5bf76606284a9.jpg', 50);

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
(48, 'Rolling Stones', 4000, 30),
(49, 'Satisfaccion', 2500, 30),
(50, 'Rolling Stones', 200, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `clave`, `email`, `admin`) VALUES
(1, 'usuario', '$2y$10$Jil73fYmXU9pRn7jqCyaiO1SUwwHM.FilH/Ixtv7eVRwJNksXKTKK', 'a@a', 1),
(6, 'Heroel', '$2y$10$iwqNfSmKTlAbv.5OCSzd9e5AHS7RZDk.SvBL30bMAdNUgELIg4xl.', 'a@a', 0),
(7, 'Administrador', '$2y$10$7TQHX4yO9hrSsq2vKCPmO.rit635ZJx6VlDcH.tWUwwYn2H.H04ne', 'a@a', 0),
(8, 'Leandro', '$2y$10$cvoq3qTkb3SrxUQzzIcMc.gNzSy21234HtlGIwkU.hBEj3Y8uFhi.', 'a@a', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_recital` (`id_recital`);

--
-- Indices de la tabla `estadio`
--
ALTER TABLE `estadio`
  ADD PRIMARY KEY (`id_estadio`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_recital` (`id_recital`);

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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT de la tabla `estadio`
--
ALTER TABLE `estadio`
  MODIFY `id_estadio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `recital`
--
ALTER TABLE `recital`
  MODIFY `id_recital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_recital`) REFERENCES `recital` (`id_recital`) ON DELETE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_recital`) REFERENCES `recital` (`id_recital`) ON DELETE CASCADE;

--
-- Filtros para la tabla `recital`
--
ALTER TABLE `recital`
  ADD CONSTRAINT `recital_ibfk_1` FOREIGN KEY (`estadio_id`) REFERENCES `estadio` (`id_estadio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
