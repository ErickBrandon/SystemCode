-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 23:22:11
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subasta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us`
--

CREATE TABLE `us` (
  `id_usuario` int(250) NOT NULL,
  `nombre_u` varchar(50) NOT NULL,
  `apellido_u` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `fecha_n` date NOT NULL,
  `calle` varchar(60) NOT NULL,
  `colonia` varchar(60) NOT NULL,
  `codigoPos` varchar(8) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `monedas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `us` (`id_usuario`, `nombre_u`, `apellido_u`, `correo`, `contraseña`, `fecha_n`, `calle`, `colonia`, `codigoPos`, `ciudad`, `estado`, `telefono`, `monedas`) VALUES
(1, 'Erick ', 'flore', 'erick.brandon.flores@gmail.com', '123', '0000-00-00', '', '', '', '', '', '', 0),
(2, 'Erick ', 'flores', 'erick.brandon.flores@gmail.com', '741', '0000-00-00', '', '', '', '', '', '', 0),
(3, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(4, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(5, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(6, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(7, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(8, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(9, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(10, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(11, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(12, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(13, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(14, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(15, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0),
(16, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(17, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'a', '0000-00-00', '', '', '', '', '', '', 0),
(18, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(19, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(20, 'wewewe', 'ewewew', 'wewewew', '7', '0000-00-00', '', '', '', '', '', '', 0),
(21, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(22, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00', '', '', '', '', '', '', 0),
(23, 'Erick Brandon', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00', '', '', '', '', '', '', 0),
(24, 'Cristhian', '', 'cristhiancarretoc@gmail.com', '123456789', '1999-05-27', '2 Sur #126', 'San Miguel Hi', '75205', 'Pue', 'Pue', '2231253148', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `us`
--
ALTER TABLE `us`
  MODIFY `id_usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
