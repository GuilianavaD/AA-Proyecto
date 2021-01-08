-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3310
-- Tiempo de generación: 08-01-2021 a las 19:16:17
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `name` varchar(128) DEFAULT NULL,
  `isbn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`name`, `isbn`) VALUES
('Joe Bloggs', '9780099533474'),
('Jack Wilson', '9780517123201'),
('Mary Smith', '9780582506206');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `fecha`, `contenido`) VALUES
('dia 1', '2020-11-09', 'holaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `username`, `password`) VALUES
('', '', '', '$2y$10$l1XWojOW5/.8SNMu2tGIA.TvaxXQlhy2TIQGtA1B6LJOjEOsGc8SG'),
('Bill', 'Smith', 'bsmith', '$2y$10$OMC4wnHSVXuwYZ1pxDxw2unXO..myaa4WU50r/1MOpBh1RZI9htw2'),
('felicia', 'Condori', 'feli', '$2y$10$iui7xACZTvwxB0VX7yHND.Wy/oO2/vlYLZsJTSIB.XauFbtoCSUMy'),
('Guiliana', 'Valer Davila', 'guiliana', '$2y$10$ZmsJjvSDqgpk1zldkGYoEuxt1zDclTzmE2dJkH7QdgfFoHt5M2KQS'),
('Paulina', 'Jones', 'pjones', '$2y$10$JDimri5XXoCNJgGsYO7WZ.I2dCkp5b5UF9hm6nJEh/6IG1cpjI8Ze');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`isbn`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
