-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2020 a las 01:56:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `id` int(11) NOT NULL,
  `Clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`id`, `Clave`) VALUES
(1, 0),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `IdFoto` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`IdFoto`, `Foto`, `IdProducto`) VALUES
(1, 'productos/1598744853_meme (2).jpg', 4),
(2, 'productos/1598744853_meme.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `NombreP` varchar(50) NOT NULL,
  `Categoria` varchar(9) NOT NULL,
  `Condicion` varchar(12) NOT NULL,
  `Marca` varchar(10) NOT NULL,
  `Modelo` varchar(15) NOT NULL,
  `Tamaño` varchar(10) NOT NULL,
  `Comentario` varchar(150) NOT NULL,
  `TipoSubasta` varchar(20) NOT NULL,
  `Precio` double NOT NULL,
  `clave` int(11) NOT NULL,
  `UsuarioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `NombreP`, `Categoria`, `Condicion`, `Marca`, `Modelo`, `Tamaño`, `Comentario`, `TipoSubasta`, `Precio`, `clave`, `UsuarioId`) VALUES
(1, 'Laptop', 'Cómputo', 'Usado', 'HP', 'pavellon-500', 'Grande', 'Esta en buen estado, con algunos detallitos', 'Inversa', 3950.99, 0, 3),
(2, 'Laptop', 'Cómputo', 'Usado', 'HP', 'pavellon-500', 'Grande', 'kaksldhaiwhcmadka', 'Tradicional', 3950.99, 0, 3),
(3, 'Laptop', 'Cómputo', 'Nuevo', 'HP', 'pavellon-500', 'mediano', 'papapapdopuluies', 'Tradicional', 200, 1, 3),
(4, 'Laptop', 'Cómputo', 'Usado', 'HP', 'pavellon-500', 'Grande', 'Buen precio', 'Inversa', 3950.99, 2, 3);

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
-- Indices de la tabla `claves`
--
ALTER TABLE `claves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`IdFoto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `claves`
--
ALTER TABLE `claves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `us`
--
ALTER TABLE `us`
  MODIFY `id_usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
