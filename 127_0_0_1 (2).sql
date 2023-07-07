-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 04:42:35
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebausuarios`
--
DROP DATABASE IF EXISTS `pruebausuarios`;
CREATE DATABASE IF NOT EXISTS `pruebausuarios` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pruebausuarios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compras` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `deportes_id_producto` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `precio_final` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compras`, `usuario_id_usuario`, `deportes_id_producto`, `fecha_compra`, `precio_final`) VALUES
(57, 4, 28, '2021-09-19 04:14:56', 80),
(58, 4, 33, '2021-09-19 04:14:56', 50),
(59, 4, 29, '2021-09-19 04:15:11', 55),
(60, 3, 34, '2021-09-19 04:16:32', 35),
(61, 8, 28, '2021-09-19 04:41:26', 80),
(62, 8, 29, '2021-09-19 04:41:26', 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`id_producto`, `nombre_producto`, `precio`, `imagen`, `genero`, `stock`) VALUES
(26, 'Camiseta Cute', 70, 'assets/images/imad/cute.jpg', 'femenino', 70),
(27, 'Abrigo', 35, 'assets/images/imad/H6.jpg', 'masculino', 70),
(28, 'Camiseta Adidas', 80, 'assets/images/imad/H5.jpg', 'masculino', 8),
(29, 'Chompa', 55, 'assets/images/imad/H7.jpg', 'masculino', 8),
(30, 'Camiseta Azul', 80, 'assets/images/imad/H2.jpg', 'masculino', 0),
(31, 'Abrigo Adidas', 40, 'assets/images/imad/Adidas.jpeg', 'masculino', 10),
(32, 'Blusa Rosa', 30, 'assets/images/imad/M1.jpg', 'femenino', 0),
(33, 'Camisa Nike', 50, 'assets/images/imad/nike.jpg', 'femenino', 9),
(34, 'Top Crop', 35, 'assets/images/imad/topcrop.jpg', 'femenino', 9),
(35, 'Pantalones', 25, 'assets/images/imad/M4.jpg', 'femenino', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipo_id_user` int(11) NOT NULL,
  `tipo_rol_user` varchar(50) DEFAULT NULL,
  `tipo_estado_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tipo_id_user`, `tipo_rol_user`, `tipo_estado_user`) VALUES
(1, 'admin', 1),
(2, 'vendedor', 1),
(3, 'cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tipo_usuario_tipo_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `apellidos`, `email`, `tipo_usuario_tipo_id_user`) VALUES
(1, 'eduardo', '123', 'edison', 'basurto', 'edubasu99@gmail.com', 1),
(2, 'eddy', '456', 'eddy', 'ramirez', '', 2),
(3, 'karla', '234', 'karla', 'Abad', 'karlaabad@gmail.com', 3),
(4, 'edwin123', '123', 'Ed', 'Chilan', 'edwi@hotmail.com', 3),
(8, 'car123', '123', 'carlos', 'realpe', 'carlos@hotmail.com', 3),
(9, 'edd', '123', 'eddy', 'ramirez', 'eddy@hotmail.com', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `deportes_id_producto` (`deportes_id_producto`),
  ADD KEY `usuario_id_usuario` (`usuario_id_usuario`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipo_id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_tipo_usuario_fk` (`tipo_usuario_tipo_id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `tipo_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`deportes_id_producto`) REFERENCES `deportes` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_tipo_usuario_fk` FOREIGN KEY (`tipo_usuario_tipo_id_user`) REFERENCES `tipo_usuario` (`tipo_id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
