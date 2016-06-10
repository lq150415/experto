-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2016 a las 03:55:40
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seesn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimento`
--

CREATE TABLE `alimento` (
  `id` int(11) NOT NULL,
  `codAli` int(11) NOT NULL,
  `canene` float NOT NULL,
  `canpro` float NOT NULL,
  `cangra` float NOT NULL,
  `cancar` float NOT NULL,
  `canfib` float NOT NULL,
  `canfibcrud` float NOT NULL,
  `cancal` float NOT NULL,
  `canfos` float NOT NULL,
  `canvitA` float NOT NULL,
  `canvitB` float NOT NULL,
  `canvidB2` float NOT NULL,
  `canvitC` float NOT NULL,
  `desali` float NOT NULL,
  `codtipali` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `idcon` int(11) NOT NULL,
  `fecCon` date NOT NULL,
  `pesActCon` float NOT NULL,
  `fecConR` date NOT NULL,
  `CodDia` int(11) NOT NULL,
  `CodPas` int(11) NOT NULL,
  `codEst` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desnutricion`
--

CREATE TABLE `desnutricion` (
  `id` int(11) NOT NULL,
  `Coddes` int(11) NOT NULL,
  `tipDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id` int(11) NOT NULL,
  `CodDia` int(11) NOT NULL,
  `fecDia` date NOT NULL,
  `pesAct` float NOT NULL,
  `pesIde` float DEFAULT NULL,
  `masGra` float DEFAULT NULL,
  `peso de mas` float NOT NULL,
  `conHue` float DEFAULT NULL,
  `imc` float NOT NULL,
  `porgra` float DEFAULT NULL,
  `CodPas` int(11) NOT NULL,
  `CodMed` int(11) NOT NULL,
  `CodEst` int(11) DEFAULT NULL,
  `codEstNut` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dieta`
--

CREATE TABLE `dieta` (
  `id` int(11) NOT NULL,
  `codDie` int(11) NOT NULL,
  `porDie` float NOT NULL,
  `tipdie` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `canpro` int(11) NOT NULL,
  `cancal` int(11) NOT NULL,
  `cangra` int(11) NOT NULL,
  `CodDia` int(11) NOT NULL,
  `codAli` int(11) NOT NULL,
  `dietacol` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadonutricional`
--

CREATE TABLE `estadonutricional` (
  `id` int(11) NOT NULL,
  `codEstNut` int(11) NOT NULL,
  `estNut` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `tipEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Coddes` int(11) NOT NULL,
  `codSob` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatura`
--

CREATE TABLE `estatura` (
  `id` int(11) NOT NULL,
  `CodEst` int(11) NOT NULL,
  `EstEst` float NOT NULL,
  `PesEst` float NOT NULL,
  `CodPas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `CodMed` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `NomMed` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `PatMed` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `MadMed` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `FecNacMed` date NOT NULL,
  `CIMed` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `UsuMed` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `CodMed`, `NomMed`, `PatMed`, `MadMed`, `FecNacMed`, `CIMed`, `UsuMed`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(11, '0', 'Luis', 'Quisbert', 'Quispe', '0000-00-00', '7074342', 'usuario123', '$2y$10$Gr9N0fMghrOuub39JzCxJeDN6XnQeZy8MV2zFtrn9KCKZOAP2kUrS', '2016-06-07 06:31:46', '2016-06-07 06:31:46', 'mEBAszuIo3TK9CJjNf004rQYzgixhzwfsIroEa2sBun9NCYWRbWnXDu0eZEY'),
(12, 'MED-00', 'Jose Carlos', 'Quisbert', 'Tintaya', '1992-08-12', '12345689', 'jcarlos', '$2y$10$9KdicRDhsM5J0YWYPZlpDeHHNUf3mj7N4LbOK7lhc7R3BXjQmLi5i', '2016-06-07 08:44:58', '2016-06-07 08:44:58', 'UXsiIVv3nyEecIKDmRdvFdE6Xqhby4g1g00IFcJknzoKA3Ni1EiaQljZWs0V'),
(13, 'MED-00', 'Jhoselin', 'Huanca', 'Torrez', '1993-12-12', '2423554', 'jhuanca', '$2y$10$ZuTxcnOQuFWa/6TfWC.lnec.JJrRnilEzz3Q3G10gW6I5xlfPkwL6', '2016-06-09 00:28:29', '2016-06-09 00:28:29', 'bopMWxwT0cPuqnuvRDFCh88D3vZAK0zFpM6FJzMmVQa3RAvKPBpkwmInd1FI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `CodPas` int(11) NOT NULL,
  `NomPas` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `PatMat` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `MatPas` char(15) COLLATE latin1_spanish_ci NOT NULL,
  `FecNacPas` date NOT NULL,
  `CiPas` int(11) NOT NULL,
  `LugPas` char(5) COLLATE latin1_spanish_ci NOT NULL,
  `SexPas` char(15) CHARACTER SET latin1 NOT NULL,
  `DirPas` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `TelPas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `CodPas`, `NomPas`, `PatMat`, `MatPas`, `FecNacPas`, `CiPas`, `LugPas`, `SexPas`, `DirPas`, `TelPas`, `created_at`, `updated_at`) VALUES
(11, 1, 'jose', 'quisbert', 'sdfsd', '1992-08-01', 87678, 'Lpz', 'Masculino', 'hgjh', 78687, NULL, NULL),
(12, 2, 'jhoss', 'sada', 'asda', '1991-09-10', 0, 'dpto', 'Femenino', '', 0, NULL, NULL),
(13, 5, 'juan', 'calle', 'mita', '1990-09-01', 244566778, 'Lpz', 'Masculino', 'calle1', 467889890, NULL, NULL),
(14, 6, 'marta', 'martines', 'paredes', '1977-09-18', 8876778, 'Cbba', 'Femenino', 'calle3', 5678899, NULL, NULL),
(15, 7, 'brenda', 'huanca', 'torrez', '1994-01-01', 2147483647, 'Lpz', 'Femenino', 'calle  "v" nuevos horizontes', 76477789, NULL, NULL),
(16, 8, 'A', 'b', 'c', '1988-10-01', 3556677, 'Lpz', 'Femenino', 'sffdggfh', 2345456, NULL, NULL),
(17, 9, 'yo', 'y', 'y', '1992-09-01', 75675, 'Lpz', 'Masculino', 'ghf6', 6576, NULL, NULL),
(18, 10, 'a', 'd', 'e', '0000-00-00', 0, 'dpto', 'Femenino', '', 0, NULL, NULL),
(19, 0, 'Luis', 'Quisbert', 'Quispe', '1993-09-16', 7074342, 'La Pa', 'Masculino', 'fdsaheshjtewshrewgre', 4325254, '2016-06-10 04:23:54', '2016-06-10 04:23:55'),
(20, 0, 'Luis', 'Quisbert', 'Quispe', '1993-09-16', 7074342, 'La Pa', 'Masculino', 'fdsaheshjtewshrewgre', 4325254, '2016-06-10 04:25:15', '2016-06-10 04:25:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobrepeso`
--

CREATE TABLE `sobrepeso` (
  `id` int(11) NOT NULL,
  `codSob` int(11) NOT NULL,
  `tipsob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieSob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desSob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoalimento`
--

CREATE TABLE `tipoalimento` (
  `id` int(11) NOT NULL,
  `codtipali` int(11) NOT NULL,
  `tipo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimento`
--
ALTER TABLE `alimento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `dieta_idx` (`codtipali`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`idcon`),
  ADD KEY `pacientecontrol_idx` (`CodPas`),
  ADD KEY `estaturacontrol_idx` (`codEst`),
  ADD KEY `diagnostico_idx` (`CodDia`);

--
-- Indices de la tabla `desnutricion`
--
ALTER TABLE `desnutricion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `medico_idx` (`CodMed`),
  ADD KEY `CodPaciente_idx` (`CodPas`),
  ADD KEY `Estatura_idx` (`CodEst`),
  ADD KEY `codEstNut_idx` (`codEstNut`);

--
-- Indices de la tabla `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `alimento_idx` (`codAli`),
  ADD KEY `diagnosticoDieta_idx` (`CodDia`);

--
-- Indices de la tabla `estadonutricional`
--
ALTER TABLE `estadonutricional`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `desnutricion_idx` (`Coddes`),
  ADD KEY `sobrepeso_idx` (`codSob`);

--
-- Indices de la tabla `estatura`
--
ALTER TABLE `estatura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `CodPas_idx` (`CodPas`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `sobrepeso`
--
ALTER TABLE `sobrepeso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `tipoalimento`
--
ALTER TABLE `tipoalimento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimento`
--
ALTER TABLE `alimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `idcon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `desnutricion`
--
ALTER TABLE `desnutricion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dieta`
--
ALTER TABLE `dieta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadonutricional`
--
ALTER TABLE `estadonutricional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estatura`
--
ALTER TABLE `estatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `sobrepeso`
--
ALTER TABLE `sobrepeso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoalimento`
--
ALTER TABLE `tipoalimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimento`
--
ALTER TABLE `alimento`
  ADD CONSTRAINT `dieta` FOREIGN KEY (`codtipali`) REFERENCES `tipoalimento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `diagnostico` FOREIGN KEY (`CodDia`) REFERENCES `diagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `estaturacontrol` FOREIGN KEY (`codEst`) REFERENCES `estatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pacientecontrol` FOREIGN KEY (`CodPas`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `CodPaciente` FOREIGN KEY (`CodPas`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Estatura` FOREIGN KEY (`CodEst`) REFERENCES `estatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codEstNut` FOREIGN KEY (`codEstNut`) REFERENCES `estadonutricional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `medico` FOREIGN KEY (`CodMed`) REFERENCES `medico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dieta`
--
ALTER TABLE `dieta`
  ADD CONSTRAINT `alimento` FOREIGN KEY (`codAli`) REFERENCES `alimento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `diagnosticoDieta` FOREIGN KEY (`CodDia`) REFERENCES `diagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estadonutricional`
--
ALTER TABLE `estadonutricional`
  ADD CONSTRAINT `desnutricion` FOREIGN KEY (`Coddes`) REFERENCES `desnutricion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sobrepeso` FOREIGN KEY (`codSob`) REFERENCES `sobrepeso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estatura`
--
ALTER TABLE `estatura`
  ADD CONSTRAINT `CodPas` FOREIGN KEY (`CodPas`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
