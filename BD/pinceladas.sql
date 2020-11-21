-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 00:39:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pinceladas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `ventas` int(11) NOT NULL,
  `categoria` enum('Alcancías','Floreros','Maceteros','Alhajeros','Cocina','Hogar','Recuerdos','Tlaxcala','Fechas especiales') NOT NULL,
  `subcategoria` enum('Dia de muertos','Fiestas Patrias','Navidad','San Valentin') DEFAULT NULL,
  `ruta` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `ventas`, `categoria`, `subcategoria`, `ruta`) VALUES
(1, 'Corazón', 'Alhajero con forma de corazón.', '75.00', 0, 'Alhajeros', NULL, 'assets/img/Corazón.jpg'),
(2, 'Alhajero Circular', 'Alhajero con forma circular', '25.00', 0, 'Alhajeros', NULL, 'assets/img/Alhajero Circular.jpg'),
(3, 'Dona', 'Alhajero con forma de Dona.', '35.00', 0, 'Alhajeros', NULL, 'assets/img/Dona.jpg'),
(4, 'Taza', 'Taza blanca con flores.', '25.00', 0, 'Cocina', NULL, 'assets/img/Taza.jpg'),
(5, 'Azucareras Mickey Mouse', 'Par de azucareras Mickey Mouse.', '120.00', 0, 'Cocina', NULL, 'assets/img/Azucareras Mickey Mouse.jpg'),
(6, 'Florero', 'Florero amarillo.', '75.00', 0, 'Floreros', NULL, 'assets/img/Florero.jpg'),
(7, 'Florero en tonos pastel.', 'Florero con tonos pastel y difuminado en wash.', '135.00', 0, 'Floreros', NULL, 'assets/img/Florero en tonos pastel..jpg'),
(8, 'Florero tubular', 'Florero tubular ', '75.00', 0, 'Floreros', NULL, 'assets/img/Florero tubular.jpg'),
(9, 'Calabaza Frida Kahlo', 'Promoción: Calabazas Frida Kahlo, Calabaza Maléfica, Calabaza Catrina y Catrín por $240.00 MXN', '85.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/Calabaza Frida Kahlo.jpg'),
(10, 'Calabaza Maléfica.', 'Promoción: Calabazas Frida Kahlo, Calabaza Maléfica, Calabaza Catrina y Catrín por $240.00 MXN.', '85.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/CAlabaza Maléfica..jpg'),
(11, 'Calabaza Catrina y Catrín', 'Promoción: Calabazas Frida Kahlo, Calabaza Maléfica, Calabaza Catrina y Catrín por $240.00 MXN.', '85.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/Calabaza Catrina y Catrín.jpg'),
(12, 'Bruja', 'Adorno de pared (Bruja).', '250.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/Bruja.jpg'),
(13, 'Alcancía de Gato', 'Alcancía de gato (día de muertos).', '65.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/Alcancía de Gato.jpg'),
(14, 'Jack Skellington', 'Lampara de Jack Skellington', '180.00', 0, 'Fechas especiales', 'Dia de muertos', 'assets/img/Jack Skellington.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'prueba', 'prueba'),
(2, 'prueba', 'prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
