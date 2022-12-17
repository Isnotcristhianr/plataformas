-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2022 a las 16:13:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestudiantes`
--

CREATE TABLE `tblestudiantes` (
  `isEstudiante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `edad` int(3) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblestudiantes`
--

INSERT INTO `tblestudiantes` (`isEstudiante`, `nombre`, `cedula`, `genero`, `edad`, `img`) VALUES
(12, 'Jim Herd', '12', 'M', 12, 'IMG-638b87f9b5d9a6.93923457.jpeg'),
(17, 'test', '1', 'M', 1, 'IMG-638b8c3a4f97f8.87411841.jpeg'),
(18, 'Cristhian David Recalde Arévalo', '1005067580', 'M', 1, 'IMG-638b8c95d7ccf3.08140072.png'),
(19, 'juan penelope', '1005067580', 'M', 12, 'IMG-638b8cecb802b6.62227818.png'),
(20, 'Lucas A', '100501212', 'M', 32, 'IMG-6391366e2a0976.94645701.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblestudiantes`
--
ALTER TABLE `tblestudiantes`
  ADD PRIMARY KEY (`isEstudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblestudiantes`
--
ALTER TABLE `tblestudiantes`
  MODIFY `isEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
