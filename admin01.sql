-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 15:30:04
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
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `lugar` int(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `año` int(11) NOT NULL,
  `patente` varchar(100) NOT NULL,
  `tiempo` time NOT NULL,
  `precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estacionamiento`
--

INSERT INTO `estacionamiento` (`id`, `fecha`, `hora`, `lugar`, `modelo`, `año`, `patente`, `tiempo`, `precio`) VALUES
(123, '2022-09-11', '15:30:00', 3, 'Ford Falcon', 1974, 'B1787565', '05:00:00', 1250),
(124, '2022-10-11', '16:30:00', 1, 'Renault Clio', 2006, 'FVP-169', '01:00:00', 250),
(125, '2022-09-11', '15:30:00', 1, 'Renault Clio', 2006, 'OP-290-AB', '02:00:00', 500),
(126, '2022-09-11', '15:30:00', 1, 'Renault Clio', 2006, 'OP-290-AB', '02:00:00', 500),
(127, '2022-09-10', '17:30:00', 1, 'Ford Focus ', 2013, 'AB-123-CD', '03:00:00', 750),
(128, '2022-09-10', '17:30:00', 2, 'Ford Focus ', 2013, 'AB-123-CD', '03:00:00', 750),
(129, '2022-09-10', '17:30:00', 2, 'Ford Focus ', 2013, 'AB-123-CD', '03:00:00', 750),
(130, '2022-11-11', '18:30:00', 4, 'Ford Focus ', 2009, 'FK-360-AD', '04:00:00', 1000),
(131, '2022-09-11', '15:30:00', 3, 'Honda Tornado', 2018, 'AB-592-FK', '02:00:00', 500),
(132, '2022-09-16', '22:00:00', 4, 'Chevrolet Aveo', 2013, 'KGO-128', '00:00:00', 0),
(133, '2022-09-16', '22:00:00', 4, 'Chevrolet Aveo', 2013, 'KGO-128', '00:00:00', 0),
(134, '2022-09-16', '22:00:00', 3, 'Chevrolet Aveo', 2013, 'KGO-128', '02:00:00', 500),
(135, '2022-09-16', '22:30:00', 4, 'Chevrolet Aveo', 2013, 'KGO-128', '02:00:00', 500),
(136, '2022-09-16', '22:00:00', 3, 'Chevrolet Aveo', 2013, 'KGO-128', '02:00:00', 500),
(137, '2022-09-16', '22:30:00', 3, 'Chevrolet Aveo', 2013, 'KGO-128', '02:00:00', 500),
(138, '2022-09-16', '12:00:00', 4, 'Ford Focus ', 2020, 'OP-290-AB', '02:00:00', 500),
(139, '0000-00-00', '00:00:00', 1, '', 0, '', '00:00:00', 0),
(140, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(141, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(142, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(143, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(144, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(145, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(146, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(147, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(148, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0),
(149, '0000-00-00', '00:00:00', 0, '', 0, '', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT 'nombre',
  `apellido` varchar(255) NOT NULL DEFAULT 'apellido',
  `email` varchar(255) NOT NULL DEFAULT 'email',
  `password` varchar(255) NOT NULL DEFAULT 'password',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cars` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `created_at`, `updated_at`, `cars`) VALUES
(26, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:18:22', '2022-09-12 21:18:22', '2'),
(27, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:19:06', '2022-09-12 21:19:06', '1'),
(28, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:19:47', '2022-09-12 21:19:47', '1'),
(29, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:22:11', '2022-09-12 21:22:11', '1'),
(30, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:30:54', '2022-09-12 21:30:54', '1'),
(31, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:32:05', '2022-09-12 21:32:05', '3'),
(32, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:33:31', '2022-09-12 21:33:31', '1'),
(33, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:34:38', '2022-09-12 21:34:38', '3'),
(34, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:36:06', '2022-09-12 21:36:06', '1'),
(35, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:37:10', '2022-09-12 21:37:10', '1'),
(36, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:38:18', '2022-09-12 21:38:18', '1'),
(37, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:41:09', '2022-09-12 21:41:09', '1'),
(38, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:43:45', '2022-09-12 21:43:45', '1'),
(39, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:44:14', '2022-09-12 21:44:14', '1'),
(40, 'nombre', 'apellido', 'email', 'password', '2022-09-12 21:45:19', '2022-09-12 21:45:19', '1'),
(41, 'nombre', 'apellido', 'email', 'password', '2022-09-13 08:51:36', '2022-09-13 08:51:36', '1'),
(42, 'nombre', 'apellido', 'email', 'password', '2022-09-13 08:51:56', '2022-09-13 08:51:56', '1'),
(43, 'nombre', 'apellido', 'email', 'password', '2022-09-13 09:05:10', '2022-09-13 09:05:10', ''),
(44, 'nombre', 'apellido', 'email', 'password', '2022-09-13 09:14:03', '2022-09-13 09:14:03', ''),
(45, 'nombre', 'apellido', 'email', 'password', '2022-09-13 12:47:42', '2022-09-13 12:47:42', '1'),
(46, 'nombre', 'apellido', 'email', 'password', '2022-09-13 12:49:51', '2022-09-13 12:49:51', '2'),
(47, 'nombre', 'apellido', 'email', 'password', '2022-09-13 12:51:28', '2022-09-13 12:51:28', '1'),
(48, 'nombre', 'apellido', 'email', 'password', '2022-09-13 18:29:52', '2022-09-13 18:29:52', '3'),
(49, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:43:04', '2022-09-14 01:43:04', '1'),
(50, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:43:50', '2022-09-14 01:43:50', '1'),
(51, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:45:10', '2022-09-14 01:45:10', '1'),
(52, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:46:44', '2022-09-14 01:46:44', '1'),
(53, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:46:48', '2022-09-14 01:46:48', '1'),
(54, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:49:42', '2022-09-14 01:49:42', '1'),
(55, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:51:09', '2022-09-14 01:51:09', '1'),
(56, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:53:48', '2022-09-14 01:53:48', '1'),
(57, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:54:04', '2022-09-14 01:54:04', '1'),
(58, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:54:53', '2022-09-14 01:54:53', '1'),
(59, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:55:03', '2022-09-14 01:55:03', '1'),
(60, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:56:09', '2022-09-14 01:56:09', '1'),
(61, 'nombre', 'apellido', 'email', 'password', '2022-09-14 01:56:33', '2022-09-14 01:56:33', '1'),
(62, 'nombre', 'apellido', 'email', 'password', '2022-09-14 18:18:15', '2022-09-14 18:18:15', '2'),
(63, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:27:06', '2022-09-16 20:27:06', '1'),
(64, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:27:44', '2022-09-16 20:27:44', '1'),
(65, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:35:34', '2022-09-16 20:35:34', '1'),
(66, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:40:21', '2022-09-16 20:40:21', '1'),
(67, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:42:06', '2022-09-16 20:42:06', '1'),
(68, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:44:19', '2022-09-16 20:44:19', '1'),
(69, 'Román', 'Martín', 'rm1624675@gmail.com', '$2y$04$B0y372q7fE3I7cGoDaJf2uTWrpPtSknTFfVm3JiSQlGzGhHzWayOC', '2022-09-17 01:50:03', '2022-09-17 01:50:03', ''),
(70, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:53:00', '2022-09-16 20:53:00', '1'),
(71, 'nombre', 'apellido', 'email', 'password', '2022-09-16 20:55:41', '2022-09-16 20:55:41', '1'),
(72, 'nombre', 'apellido', 'email', 'password', '2022-09-16 21:16:18', '2022-09-16 21:16:18', ''),
(73, 'nombre', 'apellido', 'email', 'password', '2022-09-16 21:16:46', '2022-09-16 21:16:46', ''),
(74, 'nombre', 'apellido', 'email', 'password', '2022-09-16 21:17:15', '2022-09-16 21:17:15', ''),
(75, 'nombre', 'apellido', 'email', 'password', '2022-09-16 21:20:36', '2022-09-16 21:20:36', ''),
(76, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:19:25', '2022-09-17 10:19:25', ''),
(77, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:19:25', '2022-09-17 10:19:25', ''),
(78, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:20:21', '2022-09-17 10:20:21', ''),
(79, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:20:21', '2022-09-17 10:20:21', ''),
(80, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:20:33', '2022-09-17 10:20:33', ''),
(81, 'nombre', 'apellido', 'email', 'password', '2022-09-17 10:20:33', '2022-09-17 10:20:33', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
