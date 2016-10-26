-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2016 a las 22:48:56
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
(1, 'pruebaa', '2016-10-05', '', 200),
(2, 'prueba 2', '2016-10-08', '', 12134),
(3, 'prueba 3', '2016-10-08', '', 12345),
(4, 'asdasd', '2016-10-12', '', 45678),
(5, 'dfgdfhgh', '2016-10-15', '', 98746513),
(6, 'mhgfj', '2016-10-08', '', 1580),
(7, 'documentos por pagar', '2016-10-26', '', 51654),
(8, 'jgfdgfh', '2016-10-26', '', 54675),
(9, 'otra', '2016-10-26', '', 54675),
(10, 'otra mas', '2016-10-26', '', 54675),
(11, 'otrita mas', '2016-10-26', '', 54675),
(12, 'jhlkjhk', '2016-10-08', '', 520),
(13, 'jhlkjhk', '2016-10-08', '', 520),
(14, 'jhlkjhk', '2016-10-08', '', 520),
(15, 'kjgkjhgh', '2016-10-15', '', 764376),
(16, 'mvnvn', '2016-10-08', '', 5555555),
(17, 'mvnvn', '2016-10-08', '', 5555555),
(18, 'mvnvn', '2016-10-08', '', 5555555),
(19, 'asdasd', '2016-10-26', 'DEBE', 7894);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idTransaction`),
  ADD UNIQUE KEY `idTransaction` (`idTransaction`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTransaction` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
