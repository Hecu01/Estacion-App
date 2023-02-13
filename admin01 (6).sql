-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2022 a las 18:44:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `autos_id` int(100) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `patente` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`autos_id`, `tipo`, `modelo`, `patente`, `is_deleted`, `deleted_at`) VALUES
(3, 'Auto', 'Renault Clio ', 'FVP-169', 0, NULL),
(4, 'Auto', 'Ford Focus', 'OP-290-AB', 0, NULL),
(5, 'Auto', 'Ford Focus', 'OP-290-AB', 0, NULL),
(6, 'Auto', 'Ford Focus', 'OP-290-AB', 0, NULL),
(7, 'Auto', 'Ford Focus', 'OP-290-AB', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamientos`
--

CREATE TABLE `estacionamientos` (
  `estacionamiento_id` int(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciudad` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `cant_estacionados` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `autos_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estacionamientos`
--

INSERT INTO `estacionamientos` (`estacionamiento_id`, `fecha`, `ciudad`, `direccion`, `cant_estacionados`, `usuario_id`, `autos_id`, `is_deleted`, `deleted_at`) VALUES
(3, '2022-11-02 17:17:36', 'San Nicolás', 'Mitre 185', 5, 0, 0, 0, NULL),
(4, '2022-11-02 17:17:36', 'San Nicolás', 'Mitre 185', 4, 0, 0, 0, NULL),
(5, '2022-11-02 17:17:36', 'San Nicolás', 'Mitre 185', 3, 0, 0, 0, NULL),
(6, '2022-11-02 17:17:36', 'San Nicolás', 'Mitre 185', 2, 0, 0, 0, NULL),
(7, '2022-11-02 17:17:36', 'San Nicolás', 'Mitre 185', 1, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(100) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellido`, `email`, `telefono`, `password`, `created_at`, `updated_at`, `is_deleted`, `deleted_at`) VALUES
(2, 'Román', 'Martín', 'rm1624675@gmail.com', '3407437391', '$2y$04$nUywBOV7d/xIkf2EWrC2Z.exYSEiL.ZnWyMw1VpLyIDWJP8geZtUO', '2022-11-01 22:46:51', '2022-11-01 23:44:58', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`autos_id`);

--
-- Indices de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  ADD PRIMARY KEY (`estacionamiento_id`),
  ADD KEY `usuario_id` (`usuario_id`,`autos_id`),
  ADD KEY `autos_id` (`autos_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `autos_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  MODIFY `estacionamiento_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
