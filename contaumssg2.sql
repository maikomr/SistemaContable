-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2016 a las 01:57:26
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contaumssg2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` bigint(20) UNSIGNED NOT NULL,
  `ventana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `ventana`) VALUES
(1, 'principal'),
(2, 'libro diario'),
(3, 'libro mayor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaction`
--

CREATE TABLE `transaction` (
  `idTransaction` bigint(20) UNSIGNED NOT NULL,
  `account` text NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  `payrate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaction`
--

INSERT INTO `transaction` (`idTransaction`, `account`, `date`, `type`, `payrate`) VALUES
(1, 'pruebaa', '2016-10-05', 'HABER', 200),
(2, 'prueba 2', '2016-10-08', 'DEBE', 12134),
(4, 'asdasd', '2016-10-12', 'DEBE', 45678),
(5, 'prueba 2', '2016-10-15', 'DEBE', 98746513),
(6, 'mhgfj', '2016-10-08', 'HABER', 1580),
(7, 'documentos por pagar', '2016-10-26', 'HABER', 51654),
(8, 'jgfdgfh', '2016-10-26', 'DEBE', 54675),
(9, 'otra', '2016-10-26', 'HABER', 54675),
(10, 'otra mas', '2016-10-26', 'DEBE', 54675),
(11, 'otrita mas', '2016-10-26', 'DEBE', 54675),
(12, 'jhlkjhk', '2016-10-08', 'DEBE', 520),
(13, 'jhlkjhk', '2016-10-08', 'HABER', 520),
(14, 'jhlkjhk', '2016-10-08', 'HABER', 520),
(15, 'kjgkjhgh', '2016-10-15', 'HABER', 764376),
(16, 'mvnvn', '2016-10-08', 'HABER', 5555555),
(17, 'mvnvn', '2016-10-08', 'DEBE', 5555555),
(18, 'mvnvn', '2016-10-08', 'HABER', 5555555),
(19, 'asdasd', '2016-10-26', 'DEBE', 7894),
(20, 'cuenta2', '2016-10-12', 'DEBE', 3000),
(21, 'Regalo navidad', '2016-12-25', 'HABER', 4000),
(22, 'Cuenta 2', '2016-12-25', 'HABER', 200),
(23, 'qwertyuiop', '2016-12-31', 'DEBE', 4589),
(24, 'libroMayor', '2016-12-25', 'DEBE', 200),
(25, 'libroMayor', '2016-10-12', 'HABER', 300),
(26, 'libroMayor', '2016-12-31', 'DEBE', 400),
(27, 'libroMayor', '2016-12-31', 'DEBE', 400),
(28, 'Cuenta 2', '2016-12-25', 'HABER', 6000),
(29, 'libroMayor', '2016-12-31', 'DEBE', 7000),
(30, 'libroMayor', '2016-12-31', 'HABER', 30000),
(31, 'NUEVA PRUEBA', '2016-12-25', 'HABER', 12345),
(32, 'NUEVA NUEVA NUEVA', '2016-12-31', 'HABER', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `password`, `tipo`) VALUES
(1, 'brandon', 'vallejos', 'contador'),
(2, 'ruddy', 'galindo', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `id_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`id_usuario`, `id_permiso`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`),
  ADD UNIQUE KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idTransaction`),
  ADD UNIQUE KEY `idTransaction` (`idTransaction`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTransaction` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
