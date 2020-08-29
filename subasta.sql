-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2020 a las 04:09:08
-- Versión del servidor: 10.1.30-MariaDB
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
  `fecha_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `us` (`id_usuario`, `nombre_u`, `apellido_u`, `correo`, `contraseña`, `fecha_n`) VALUES
(1, 'Erick ', 'flore', 'erick.brandon.flores@gmail.com', '123', '0000-00-00'),
(2, 'Erick ', 'flores', 'erick.brandon.flores@gmail.com', '741', '0000-00-00'),
(3, '', '', '', '', '0000-00-00'),
(4, '', '', '', '', '0000-00-00'),
(5, '', '', '', '', '0000-00-00'),
(6, '', '', '', '', '0000-00-00'),
(7, '', '', '', '', '0000-00-00'),
(8, '', '', '', '', '0000-00-00'),
(9, '', '', '', '', '0000-00-00'),
(10, '', '', '', '', '0000-00-00'),
(11, '', '', '', '', '0000-00-00'),
(12, '', '', '', '', '0000-00-00'),
(13, '', '', '', '', '0000-00-00'),
(14, '', '', '', '', '0000-00-00'),
(15, '', '', '', '', '0000-00-00'),
(16, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00'),
(17, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'a', '0000-00-00'),
(18, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00'),
(19, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00'),
(20, 'wewewe', 'ewewew', 'wewewew', '7', '0000-00-00'),
(21, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00'),
(22, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00'),
(23, 'Erick Brandon', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00');

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
  MODIFY `id_usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
