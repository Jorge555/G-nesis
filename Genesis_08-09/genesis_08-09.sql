-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2019 a las 03:20:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `genesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrareferencia`
--

CREATE TABLE `contrareferencia` (
  `ID_REF` int(11) NOT NULL,
  `RESUMEN` text NOT NULL,
  `TRAT` text NOT NULL,
  `DIAG` text NOT NULL,
  `RECOM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `ID` int(11) NOT NULL,
  `DISTRITO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`ID`, `DISTRITO`) VALUES
(1, 'Santo Domingo'),
(2, 'Samayac'),
(3, 'Chicacao'),
(4, 'San Ber'),
(5, 'Cuyotenango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

CREATE TABLE `escolaridad` (
  `ID` int(11) NOT NULL,
  `ESCOLARIDAD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escolaridad`
--

INSERT INTO `escolaridad` (`ID`, `ESCOLARIDAD`) VALUES
(1, 'Primaria'),
(2, 'Medio'),
(3, 'Educacion Superior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fro`
--

CREATE TABLE `fro` (
  `ID` int(11) NOT NULL,
  `ID_EMB` int(11) NOT NULL,
  `AO1` int(11) NOT NULL,
  `AO2` int(11) NOT NULL,
  `AO3` int(11) NOT NULL,
  `AO4` int(11) NOT NULL,
  `AO5` int(11) NOT NULL,
  `AO6` int(11) NOT NULL,
  `AO7` int(11) NOT NULL,
  `HCG1` int(11) NOT NULL,
  `HCG2` int(11) NOT NULL,
  `HCG3` int(11) NOT NULL,
  `HCG4` int(11) NOT NULL,
  `HCG5` int(11) NOT NULL,
  `HCG6` int(11) NOT NULL,
  `HCG7` text NOT NULL,
  `FECHA` date NOT NULL,
  `AGOFUR` date NOT NULL,
  `AGOFPP` date NOT NULL,
  `AGO3` int(11) NOT NULL,
  `AGO4` int(11) NOT NULL,
  `AGO5` int(11) NOT NULL,
  `AGO6` int(11) NOT NULL,
  `AGO7` int(11) NOT NULL,
  `AGO8` int(11) NOT NULL,
  `EA1` int(11) NOT NULL,
  `EA2` int(11) NOT NULL,
  `EA3` int(11) NOT NULL,
  `EA4` int(11) NOT NULL,
  `EA5` int(11) NOT NULL,
  `EA6` int(11) NOT NULL,
  `EA7` int(11) NOT NULL,
  `EA8` int(11) NOT NULL,
  `EA9` int(11) NOT NULL,
  `EA10` int(11) NOT NULL,
  `EA11` int(11) NOT NULL,
  `EA12` int(11) NOT NULL,
  `RESP` text NOT NULL,
  `REFERIDO` int(11) NOT NULL,
  `PRIORIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujeres`
--

CREATE TABLE `mujeres` (
  `ID` int(11) NOT NULL,
  `NOMBRE_M` text NOT NULL,
  `DPI_M` text NOT NULL,
  `EDAD` int(11) NOT NULL,
  `PUE_M` int(11) NOT NULL,
  `ESC_M` int(11) NOT NULL,
  `NOMBRE_H` text NOT NULL,
  `DPI_H` text NOT NULL,
  `EDAD_H` int(11) NOT NULL,
  `PUE_H` int(11) NOT NULL,
  `ESC_H` int(11) NOT NULL,
  `DISTANCIA_SER` int(11) NOT NULL,
  `TIEMPO_SER` time NOT NULL,
  `COMUNIDAD` text NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `POSPARTO` int(11) NOT NULL,
  `PRIORIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mujeres`
--

INSERT INTO `mujeres` (`ID`, `NOMBRE_M`, `DPI_M`, `EDAD`, `PUE_M`, `ESC_M`, `NOMBRE_H`, `DPI_H`, `EDAD_H`, `PUE_H`, `ESC_H`, `DISTANCIA_SER`, `TIEMPO_SER`, `COMUNIDAD`, `TELEFONO`, `POSPARTO`, `PRIORIDAD`) VALUES
(1, 'Luisa', '2454616881002', 25, 2, 1, 'Julio', '2454714661001', 27, 2, 2, 11, '00:30:00', 'Los Llanos', 43256198, 1, 0),
(2, 'Vivian', '2454678991002', 25, 2, 2, 'Wilis', '34527891002', 34, 2, 1, 4, '01:00:00', 'Piedritas', 56568227, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ID` int(11) NOT NULL,
  `NOMBRE` text NOT NULL,
  `APELLIDO` text NOT NULL,
  `SEXO` int(11) NOT NULL,
  `PUESTO` int(11) NOT NULL,
  `DISTRITO` int(11) NOT NULL,
  `ACTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ID`, `NOMBRE`, `APELLIDO`, `SEXO`, `PUESTO`, `DISTRITO`, `ACTIVO`) VALUES
(0, 'Administrador', 'Full', 1, 2, 1, 1),
(1, 'Daniel', 'Tun', 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `ID` int(11) NOT NULL,
  `PUEBLO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT INTO `pueblo` (`ID`, `PUEBLO`) VALUES
(1, 'Canton Chita'),
(2, 'Canton Cocales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `ID` int(11) NOT NULL,
  `PUESTO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`ID`, `PUESTO`) VALUES
(1, 'Doctor'),
(2, 'Enfermera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `ID` int(11) NOT NULL,
  `ID_FRO` int(11) NOT NULL,
  `SERE` int(11) NOT NULL,
  `SERF` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `CE` int(11) NOT NULL,
  `HISTORIAE` text NOT NULL,
  `AM_MEDI` text NOT NULL,
  `AM_MENT` text NOT NULL,
  `AM_QUI` text NOT NULL,
  `AM_TRAU` text NOT NULL,
  `AM_ALERG` text NOT NULL,
  `EF_PESO` int(11) NOT NULL,
  `EF_TALLA` int(11) NOT NULL,
  `EF_PULSO` int(11) NOT NULL,
  `EF_PA` int(11) NOT NULL,
  `EF_FR` int(11) NOT NULL,
  `EF_T` int(11) NOT NULL,
  `EF_FCF` int(11) NOT NULL,
  `INGC` date NOT NULL,
  `MOTREFE` text NOT NULL,
  `TRATAMIENTO` text NOT NULL,
  `EXAMENES` text NOT NULL,
  `CONTRAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID` int(11) NOT NULL,
  `TIPO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID`, `TIPO`) VALUES
(1, 'Administrador'),
(2, 'Digitador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` text NOT NULL,
  `PASS` text NOT NULL,
  `ROL` int(11) NOT NULL,
  `PERSONAL` int(11) NOT NULL,
  `ACTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `PASS`, `ROL`, `PERSONAL`, `ACTIVO`) VALUES
(1, 'hola', 'hola', 2, 1, 1),
(2, 'admin', 'admin', 1, 0, 1),
(3, 'Chitun', '4321', 2, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrareferencia`
--
ALTER TABLE `contrareferencia`
  ADD PRIMARY KEY (`ID_REF`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `fro`
--
ALTER TABLE `fro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PUE_M` (`PUE_M`),
  ADD KEY `ESC_M` (`ESC_M`),
  ADD KEY `PUE_H` (`PUE_H`),
  ADD KEY `ESC_H` (`ESC_H`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PUESTO` (`PUESTO`),
  ADD KEY `DISTRITO` (`DISTRITO`);

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ROL` (`ROL`),
  ADD KEY `PERSONAL` (`PERSONAL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fro`
--
ALTER TABLE `fro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mujeres`
--
ALTER TABLE `mujeres`
  ADD CONSTRAINT `mujeres_ibfk_1` FOREIGN KEY (`ESC_M`) REFERENCES `escolaridad` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mujeres_ibfk_2` FOREIGN KEY (`ESC_H`) REFERENCES `escolaridad` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mujeres_ibfk_3` FOREIGN KEY (`PUE_M`) REFERENCES `pueblo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mujeres_ibfk_4` FOREIGN KEY (`PUE_H`) REFERENCES `pueblo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`DISTRITO`) REFERENCES `distrito` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`PUESTO`) REFERENCES `puesto` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`PERSONAL`) REFERENCES `personal` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ROL`) REFERENCES `rol` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
