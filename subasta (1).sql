-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 23:49:54
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
-- Estructura de tabla para la tabla `belleza`
--

CREATE TABLE `belleza` (
  `Id` int(11) NOT NULL,
  `Genero` varchar(7) NOT NULL,
  `ClaveP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `belleza`
--

INSERT INTO `belleza` (`Id`, `Genero`, `ClaveP`) VALUES
(1, 'null', 21);

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
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11),
(13, 12),
(14, 13),
(15, 14),
(16, 15),
(17, 16),
(18, 17),
(19, 18),
(20, 19),
(21, 20),
(22, 21),
(23, 22),
(24, 23),
(25, 24),
(26, 25),
(27, 26),
(28, 27),
(29, 28),
(30, 29),
(31, 30),
(32, 31),
(33, 32),
(34, 33),
(35, 34),
(36, 35);

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
(1, 'productos/1601512180_meme.jpg', 0),
(2, 'productos/1601512450_Galaxy-J4-830x728.jpg', 0),
(3, 'productos/1601512520_Galaxy-J4-830x728.jpg', 0),
(4, 'productos/1601512752_Galaxy-J4-830x728.jpg', 0),
(5, 'productos/1601512831_meme.jpg', 0),
(6, 'productos/1601512988_Galaxy-J4-830x728.jpg', 0),
(7, 'productos/1601513045_Galaxy-J4-830x728.jpg', 0),
(8, 'productos/1601513176_meme.jpg', 0),
(9, 'productos/1601513713_Galaxy-J4-830x728.jpg', 0),
(10, 'productos/1601513785_Galaxy-J4-830x728.jpg', 0),
(11, 'productos/1601514056_Galaxy-J4-830x728.jpg', 0),
(12, 'productos/1601514326_Galaxy-J4-830x728.jpg', 0),
(13, 'productos/1601514581_Galaxy-J4-830x728.jpg', 0),
(14, 'productos/1601514695_Galaxy-J4-830x728.jpg', 0),
(15, 'productos/1601514824_Galaxy-J4-830x728.jpg', 0),
(16, 'productos/1601515114_Galaxy-J4-830x728.jpg', 0),
(17, 'productos/1601515448_Galaxy-J4-830x728.jpg', 0),
(18, 'productos/1601515520_Galaxy-J4-830x728.jpg', 0),
(19, 'productos/1601515619_Galaxy-J4-830x728.jpg', 0),
(20, 'productos/1601515721_Galaxy-J4-830x728.jpg', 0),
(21, 'productos/1601515860_Galaxy-J4-830x728.jpg', 0),
(22, 'productos/1601516001_Galaxy-J4-830x728.jpg', 0),
(23, 'productos/1601516109_Galaxy-J4-830x728.jpg', 0),
(24, 'productos/1601516555_meme.jpg', 21),
(25, 'productos/1601517330_Galaxy-J4-830x728.jpg', 27),
(26, 'productos/1601517436_Galaxy-J4-830x728.jpg', 28),
(27, 'productos/1601517726_Galaxy-J4-830x728.jpg', 29),
(28, 'productos/1601517838_Galaxy-J4-830x728.jpg', 30),
(29, 'productos/1601518035_Cthulhu-hplvcrtf.jpg', 31),
(30, 'productos/1602027974_combi.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro`
--

CREATE TABLE `otro` (
  `Id` int(11) NOT NULL,
  `Modelo` varchar(75) NOT NULL,
  `Categoria` varchar(25) NOT NULL,
  `Tamaño` varchar(35) NOT NULL,
  `ClaveP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otro`
--

INSERT INTO `otro` (`Id`, `Modelo`, `Categoria`, `Tamaño`, `ClaveP`) VALUES
(1, 'afasfaf', 'perreo', '20 cm', 32),
(2, '1111', 'sdafsa', '20 cm', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `nombreP` varchar(50) NOT NULL,
  `condicion` varchar(25) NOT NULL,
  `venta` varchar(25) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `clave` int(11) NOT NULL,
  `comentario` varchar(280) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `nuePrecio` int(11) DEFAULT NULL,
  `UsuarioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `nombreP`, `condicion`, `venta`, `cantidad`, `marca`, `clave`, `comentario`, `categoria`, `precio`, `nuePrecio`, `UsuarioId`) VALUES
(1, 'Celular Galxy', 'Nuevo', 'inversa', 1, 'Samsung', 34, 'Es muy rapido', 'Tecnología', 100, NULL, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropa`
--

CREATE TABLE `ropa` (
  `Id` int(11) NOT NULL,
  `Genero` varchar(7) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Talla` varchar(15) NOT NULL,
  `ClaveP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ropa`
--

INSERT INTO `ropa` (`Id`, `Genero`, `Tipo`, `Talla`, `ClaveP`) VALUES
(1, '', '', '2.5,0.55', 24),
(2, '', '', '2.5,0.55', 25),
(3, '', '', '2.5,0.55', 26),
(4, '', '', '2.5,0.55', 27),
(5, '', '', '25', 28),
(6, 'Mujer', 'Formal', '35', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologia`
--

CREATE TABLE `tecnologia` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Tamaño` varchar(20) NOT NULL,
  `ClaveP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tecnologia`
--

INSERT INTO `tecnologia` (`Id`, `Tipo`, `Modelo`, `Tamaño`, `ClaveP`) VALUES
(11, 'Tablet', 'ñdfkdfmñak', '', 22),
(12, 'null', 'omega plus ssjgod', '15cm', 23),
(13, 'Móvil', 'Galaxy S5', '15cm', 34),
(14, 'Móvil', 'Galaxy S5', '15cm', 35);

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
  `fecha_n` date DEFAULT NULL,
  `calle` varchar(60) DEFAULT NULL,
  `colonia` varchar(60) DEFAULT NULL,
  `codigoPos` varchar(8) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `monedas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `us` (`id_usuario`, `nombre_u`, `apellido_u`, `correo`, `contraseña`, `fecha_n`, `calle`, `colonia`, `codigoPos`, `ciudad`, `estado`, `telefono`, `monedas`) VALUES
(1, 'Erick ', 'flore', 'erick.brandon.flores@gmail.com', '123', '0000-00-00', '', '', '', '', '', '', 0),
(2, 'Erick ', 'flores', 'erick.brandon.flores@gmail.com', '741', '0000-00-00', '', '', '', '', '', '', 0),
(16, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(17, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'a', '0000-00-00', '', '', '', '', '', '', 0),
(18, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(19, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(20, 'wewewe', 'ewewew', 'wewewew', '7', '0000-00-00', '', '', '', '', '', '', 0),
(21, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', 'q', '0000-00-00', '', '', '', '', '', '', 0),
(22, 'erick', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00', '', '', '', '', '', '', 0),
(23, 'Erick Brandon', 'Flores', 'erick.brandon.flores@gmail.com', '7', '0000-00-00', '', '', '', '', '', '', 0),
(24, 'Cristhian', 'Carreto', 'cristhiancarretoc@gmail.com', '123456789', '1999-05-27', '2 Sur #126', 'San Miguel Hi', '75205', 'Pue', 'Pue', '2231253148', 0),
(26, 'Leonardo', 'Meneses', 'leo.moe@hotmail.com', 'opera201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `belleza`
--
ALTER TABLE `belleza`
  ADD PRIMARY KEY (`Id`);

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
-- Indices de la tabla `otro`
--
ALTER TABLE `otro`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UsuarioId` (`UsuarioId`) USING BTREE;

--
-- Indices de la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `belleza`
--
ALTER TABLE `belleza`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `claves`
--
ALTER TABLE `claves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `otro`
--
ALTER TABLE `otro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ropa`
--
ALTER TABLE `ropa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `us`
--
ALTER TABLE `us`
  MODIFY `id_usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `us` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
