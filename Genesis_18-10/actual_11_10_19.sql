-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2019 a las 05:14:00
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actual`
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
(2, 'Cuyotenango'),
(3, 'Mazatenango'),
(4, 'Chicacao'),
(5, 'Patulul'),
(6, 'San Antonio'),
(7, 'Pueblo Nuevo'),
(8, 'San Francisco'),
(9, 'Rio Bravo'),
(10, 'Samayac'),
(11, 'San Bernardino'),
(12, 'San Gabriel'),
(13, 'San Jose El Idolo'),
(14, 'San Jose La Maquina'),
(15, 'San Juan Bautista'),
(16, 'San Lorenzo'),
(17, 'San Miguel Panan'),
(18, 'San Pablo Jocopilas'),
(19, 'Santa Barbara'),
(20, 'Santo Tomas La Union'),
(21, 'Zunilito');

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
(2, 'Basico'),
(3, 'Diversificado'),
(4, 'Educacion Superior');

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

--
-- Volcado de datos para la tabla `fro`
--

INSERT INTO `fro` (`ID`, `ID_EMB`, `AO1`, `AO2`, `AO3`, `AO4`, `AO5`, `AO6`, `AO7`, `HCG1`, `HCG2`, `HCG3`, `HCG4`, `HCG5`, `HCG6`, `HCG7`, `FECHA`, `AGOFUR`, `AGOFPP`, `AGO3`, `AGO4`, `AGO5`, `AGO6`, `AGO7`, `AGO8`, `EA1`, `EA2`, `EA3`, `EA4`, `EA5`, `EA6`, `EA7`, `EA8`, `EA9`, `EA10`, `EA11`, `EA12`, `RESP`, `REFERIDO`, `PRIORIDAD`) VALUES
(1, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'Prueba', '2019-09-08', '2019-09-08', '2019-09-08', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ' Wilian Hernandez', 1, 0),
(2, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2019-10-05', '2019-10-05', '2019-10-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Daniel Tun', 0, 1),
(3, 3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'AKJFHAF', '2019-10-05', '2019-10-05', '2019-10-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Daniel Tun', 1, 1);

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
(1, 'Luisa', '2454616881002', 25, 2, 1, 'Julio', '2454714661001', 27, 2, 2, 11, '00:30:00', 'Los Llanos', 43256198, 1, 1),
(2, 'Vivian', '2454678991002', 25, 2, 2, 'Wilis', '34527891002', 34, 2, 1, 4, '01:00:00', 'Piedritas', 56568227, 1, 0),
(3, 'Mariela de LeÃ³n', '546579881001', 25, 2, 2, 'Luis Emilio Gramajo', '345467881002', 34, 2, 2, 6, '00:20:00', 'Amparo', 56564338, 1, 1);

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
(1, 'Administrador', 'Full', 1, 1, 2, 1),
(2, 'Daniel', 'Tun', 1, 2, 2, 1),
(3, 'Wilian', 'Hernandez', 1, 1, 3, 1),
(6, 'elias', 'solval', 1, 3, 1, 1);

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
(1, 'Administrador'),
(2, 'Doctor'),
(3, 'Enfermera');

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

--
-- Volcado de datos para la tabla `referencia`
--

INSERT INTO `referencia` (`ID`, `ID_FRO`, `SERE`, `SERF`, `FECHA`, `HORA`, `CE`, `HISTORIAE`, `AM_MEDI`, `AM_MENT`, `AM_QUI`, `AM_TRAU`, `AM_ALERG`, `EF_PESO`, `EF_TALLA`, `EF_PULSO`, `EF_PA`, `EF_FR`, `EF_T`, `EF_FCF`, `INGC`, `MOTREFE`, `TRATAMIENTO`, `EXAMENES`, `CONTRAR`) VALUES
(1, 1, 6, 2, '2019-10-05', '12:00:00', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '2019-10-05', 'Embarazo riesgoso', '', '', 0),
(2, 3, 2, 6, '2019-10-05', '04:00:00', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '2019-10-05', 'EMBARAZO RISEGOSO', '', '', 0);

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
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `ID` int(11) NOT NULL,
  `LUGAR` varchar(100) NOT NULL,
  `LATITUD` varchar(20) NOT NULL,
  `LONGITUD` varchar(20) NOT NULL,
  `DISTRITO` int(11) NOT NULL,
  `ACTIVO` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`ID`, `LUGAR`, `LATITUD`, `LONGITUD`, `DISTRITO`, `ACTIVO`) VALUES
(1, 'Centro Mazatenango', '14.5341702', '-91.5033264', 3, 1),
(2, 'Centro de Salud Mazatenango', '14.538333', '-91.505278', 3, 1),
(3, 'Hospital Nacional Mazatenango', '14.536667', '-91.506389', 3, 1),
(4, 'Centro Cuyotenango', '14.5376381', '-91.5731799', 2, 1),
(5, 'Centro Santo Domingo', '14.48000', '-91.4847300', 1, 1),
(6, 'CAP de Cuyotenango', '14.543606', '-91.568084', 2, 1),
(7, 'CAP de Chicacao', '14.542934', '-91.328100', 4, 1),
(9, 'CAP de San Antonio', '14.538684', '-91.415542', 6, 1),
(10, 'Centro de Salud Pueblo Nuevo', '14.645697', '-91.541603', 7, 1),
(11, 'Centro de Salud Santo Tomas La Union', '14.633458', '-91.410080', 20, 1),
(12, 'Puesto de Salud de San Bernardino', '14.542167', '-91.458253', 11, 1),
(13, 'Puesto de Salud de San Miguel Panan', '14.527932', '-91.367750', 17, 1),
(14, 'Puesto de Salud de Aldea Chocolá', '14.619537', '-91.424428', 20, 1),
(15, 'Puesto de Salud de Samayac', '14.578078', '-91.461335', 10, 1),
(16, 'Puesto de Salud de San Pablo Jocopilas', '14.588302', '-91.452849', 18, 1),
(17, 'Centro de Salud de San Jose El Idolo', '14.449099', '-91.423967', 13, 1),
(18, 'Puesto de salud de Comunidad La Campesina', '14.465472', '-91.329293', 9, 1),
(19, 'Puesto de salud de Aldea El Guayabal', '14.471752', '-91.254039 ', 19, 1),
(20, 'Centro de Salud y CAP de Patulul', '14.423143', '-91.160094', 5, 1),
(21, 'Puesto de Salud de San Juan Bautista', '14.422296', '-91.177474', 15, 1),
(22, 'Puesto de Salud de Aldea San Pedro Cutzan', '14.509345', '-91.332125', 4, 1),
(23, 'Centro de Salud de Pueblo Nuevo', '14.645704', '-91.541601', 7, 1),
(24, 'CAP de Zunilito', '14.608567', '-91.510875', 21, 1),
(25, 'Centro de Salud y CENAPA Santo Domingo', '14.477885', '-91.483349', 1, 1),
(26, 'Puesto de Salud de Parcelamiento Monterrey', '14.371208', '-91.459089', 1, 1),
(27, 'Puesto de Salud de La Vega', '14.191597', '-91.586263', 3, 1),
(28, 'Puesto de Salud Bracitos', '14.251993', '-91.550494', 3, 1),
(29, 'Puesto de Salud de San Gabriel', '14.510598', '-91.508238', 12, 1),
(30, 'Puesto de Salud de San Lorenzo', '14.485957', '-91.512647', 16, 1),
(31, 'Puesto de Salud de Churirin', '14.117830', '-91.653665', 3, 1),
(32, 'Puesto de Salud de Tahuesco', '14.095535', '-91.620462', 3, 1),
(33, 'Puesto de salud Parcelamiento Monterrey, Sector Las Cruces', '14.335737', '-91.482373', 1, 1),
(34, 'Puesto de Salud de Aldea Bolivia', '14.172428', '-91.470856', 1, 1),
(35, 'Puesto de Salud Aldea Japon Nacional', '14.145235', '-91.585038', 1, 1),
(36, 'Puesto de Salud Parcelamiento Manelis', '14.336509', '-91.478443', 1, 1),
(37, 'Puesto de Salud Parcelamiento Lupita ', '14.201589', '-91.526061', 1, 1),
(38, 'Puesto de Salud Comunidad La Esperanza', '14.194759', '-91.517788', 1, 1),
(39, 'Puesto de Salud de Aldea San Jose Los Tiestos', '14.079876', '-91.534324', 1, 1),
(40, 'Puesto de Salud Aldea Nueva Venecia', '14.052391', '-91.540798', 1, 1),
(41, 'Centro Samayac', '14.582081', '-91.461899', 10, 1),
(42, 'Centro Zunilito', '14.611723', '-91.511076', 21, 1),
(43, 'Centro San Gabriel', '14.512675', '-91.508273', 12, 1),
(44, 'Centro San Lorenzo', '14.485914', '-91.512760', 16, 1),
(45, 'Centro Chicacao', '14.542945', '-91.326819', 4, 1),
(46, 'Centro San Bernardino', '14.542207', '-91.458988', 11, 1),
(47, 'Centro Santo Tomas La Union', '14.632024', '-91.411602', 20, 1),
(48, 'Centro San Miguel Panan', '14.527931', '-91.367794', 17, 1),
(49, 'Centro San Jose El Idolo', '14.447884', '-91.422805', 13, 1),
(50, 'Centro Pueblo Nuevo', '14.647514', '-91.541420', 7, 1),
(51, 'Centro San Francisco Zapotitlan', '14.589654', '-91.521243', 8, 1),
(52, 'Centro Patulul', '14.422492', '-91.160422', 5, 1),
(53, 'Centro Rio Bravo', '14.398839', '-91.320707', 9, 1),
(54, 'Centro Santa Barbara', '14.433868', '-91.225287', 19, 1),
(55, 'Centro San Antonio', '14.539600', '-91.416444', 6, 1),
(56, 'Centro San Juan Bautista', '14.422248', '-91.177523', 15, 1),
(57, 'Centro San Pablo Jocopilas', '14.595666', '-91.437664', 18, 1),
(58, 'Centro San Jose La Maquina', '14.303084', '-91.564506', 14, 1);

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
(1, 'hola', 'hola', 2, 2, 1),
(2, 'admin', 'admin', 1, 1, 1),
(3, 'Chitun', '4321', 2, 2, 1),
(4, 'wilian', 'wilian', 1, 3, 1),
(6, 'elias', 'elias', 1, 6, 1);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_EMB` (`ID_EMB`);

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
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DISTRITO` (`DISTRITO`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `fro`
--
ALTER TABLE `fro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fro`
--
ALTER TABLE `fro`
  ADD CONSTRAINT `fro_ibfk_1` FOREIGN KEY (`ID_EMB`) REFERENCES `mujeres` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`DISTRITO`) REFERENCES `distrito` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ROL`) REFERENCES `rol` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
