-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2016 a las 06:40:07
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `seesn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimento`
--

CREATE TABLE IF NOT EXISTS `alimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `dieta_idx` (`codtipali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE IF NOT EXISTS `control` (
  `idcon` int(11) NOT NULL AUTO_INCREMENT,
  `fecCon` date NOT NULL,
  `pesActCon` float NOT NULL,
  `fecConR` date NOT NULL,
  `CodDia` int(11) NOT NULL,
  `CodPas` int(11) NOT NULL,
  `codEst` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcon`),
  KEY `pacientecontrol_idx` (`CodPas`),
  KEY `estaturacontrol_idx` (`codEst`),
  KEY `diagnostico_idx` (`CodDia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desnutricion`
--

CREATE TABLE IF NOT EXISTS `desnutricion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Coddes` int(11) NOT NULL,
  `tipDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desDes` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE IF NOT EXISTS `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CodDia` char(10) COLLATE latin1_spanish_ci NOT NULL,
  `fecDia` date NOT NULL,
  `pesAct` float NOT NULL,
  `pesIde` float DEFAULT NULL,
  `masGra` float DEFAULT NULL,
  `estatura` float NOT NULL,
  `conHue` float DEFAULT NULL,
  `imc` float NOT NULL,
  `porgra` float DEFAULT NULL,
  `CodPas` int(11) NOT NULL,
  `CodMed` int(11) NOT NULL,
  `CodEst` int(11) DEFAULT NULL,
  `codEstNut` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `medico_idx` (`CodMed`),
  KEY `CodPaciente_idx` (`CodPas`),
  KEY `Estatura_idx` (`CodEst`),
  KEY `codEstNut_idx` (`codEstNut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=68 ;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`id`, `CodDia`, `fecDia`, `pesAct`, `pesIde`, `masGra`, `estatura`, `conHue`, `imc`, `porgra`, `CodPas`, `CodMed`, `CodEst`, `codEstNut`, `created_at`, `updated_at`) VALUES
(1, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:32:06', '2016-06-10 22:32:06'),
(2, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:32:34', '2016-06-10 22:32:34'),
(3, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:32:51', '2016-06-10 22:32:51'),
(4, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:33:44', '2016-06-10 22:33:44'),
(5, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:37:26', '2016-06-10 22:37:27'),
(6, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:43:43', '2016-06-10 22:43:43'),
(7, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:44:07', '2016-06-10 22:44:07'),
(8, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:45:09', '2016-06-10 22:45:09'),
(9, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:45:23', '2016-06-10 22:45:24'),
(10, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:45:40', '2016-06-10 22:45:40'),
(11, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 20, 11, NULL, NULL, '2016-06-10 22:46:03', '2016-06-10 22:46:03'),
(12, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 19, 11, NULL, NULL, '2016-06-10 23:12:14', '2016-06-10 23:12:14'),
(13, '0', '2016-06-10', 65, NULL, NULL, 1.72, NULL, 21.9713, NULL, 19, 11, NULL, NULL, '2016-06-10 23:12:36', '2016-06-10 23:12:36'),
(14, '0', '2016-06-10', 30, NULL, NULL, 1.72, NULL, 10.1406, NULL, 19, 11, NULL, NULL, '2016-06-10 23:13:08', '2016-06-10 23:13:08'),
(15, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:08:26', '2016-06-11 04:08:26'),
(16, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:47:46', '2016-06-11 04:47:46'),
(17, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:49:16', '2016-06-11 04:49:16'),
(18, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:51:00', '2016-06-11 04:51:00'),
(19, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:51:05', '2016-06-11 04:51:05'),
(20, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:51:17', '2016-06-11 04:51:17'),
(21, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:51:44', '2016-06-11 04:51:44'),
(22, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:52:58', '2016-06-11 04:52:58'),
(23, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:53:26', '2016-06-11 04:53:26'),
(24, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:53:34', '2016-06-11 04:53:34'),
(25, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:53:44', '2016-06-11 04:53:44'),
(26, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:53:56', '2016-06-11 04:53:56'),
(27, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:54:04', '2016-06-11 04:54:04'),
(28, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:54:11', '2016-06-11 04:54:11'),
(29, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:54:41', '2016-06-11 04:54:41'),
(30, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:55:12', '2016-06-11 04:55:13'),
(31, '0', '2016-06-11', 55, NULL, NULL, 1.66, NULL, 19.9594, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:00', '2016-06-11 04:58:00'),
(32, '0', '2016-06-11', 59, NULL, NULL, 1.66, NULL, 21.4109, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:10', '2016-06-11 04:58:10'),
(33, '0', '2016-06-11', 65, NULL, NULL, 1.66, NULL, 23.5883, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:20', '2016-06-11 04:58:20'),
(34, '0', '2016-06-11', 65, NULL, NULL, 1.66, NULL, 23.5883, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:32', '2016-06-11 04:58:32'),
(35, '0', '2016-06-11', 65, NULL, NULL, 1.66, NULL, 23.5883, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:48', '2016-06-11 04:58:48'),
(36, '0', '2016-06-11', 65, NULL, NULL, 1.66, NULL, 23.5883, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:54', '2016-06-11 04:58:54'),
(37, '0', '2016-06-11', 65, NULL, NULL, 1.66, NULL, 23.5883, NULL, 19, 11, NULL, NULL, '2016-06-11 04:58:57', '2016-06-11 04:58:57'),
(38, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 04:59:22', '2016-06-11 04:59:22'),
(39, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:00:00', '2016-06-11 05:00:01'),
(40, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:00:36', '2016-06-11 05:00:36'),
(41, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:00:45', '2016-06-11 05:00:45'),
(42, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:00:49', '2016-06-11 05:00:49'),
(43, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:00:55', '2016-06-11 05:00:56'),
(44, '0', '2016-06-11', 90, NULL, NULL, 1.66, NULL, 32.6608, NULL, 19, 11, NULL, NULL, '2016-06-11 05:01:02', '2016-06-11 05:01:02'),
(45, '0', '2016-06-11', 74, NULL, NULL, 1.66, NULL, 26.8544, NULL, 19, 11, NULL, NULL, '2016-06-11 05:01:35', '2016-06-11 05:01:35'),
(46, '0', '2016-06-11', 77, NULL, NULL, 1.66, NULL, 27.9431, NULL, 19, 11, NULL, NULL, '2016-06-11 05:01:43', '2016-06-11 05:01:43'),
(47, '0', '2016-06-11', 77, NULL, NULL, 1.66, NULL, 27.9431, NULL, 19, 11, NULL, NULL, '2016-06-11 05:04:07', '2016-06-11 05:04:07'),
(48, '0', '2016-06-11', 77, NULL, NULL, 1.66, NULL, 27.9431, NULL, 19, 11, NULL, NULL, '2016-06-11 05:04:34', '2016-06-11 05:04:34'),
(49, '0', '2016-06-11', 77, NULL, NULL, 1.66, NULL, 27.9431, NULL, 19, 11, NULL, NULL, '2016-06-11 05:04:40', '2016-06-11 05:04:40'),
(50, '0', '2016-06-11', 77, NULL, NULL, 1.66, NULL, 27.9431, NULL, 19, 11, NULL, NULL, '2016-06-11 05:05:29', '2016-06-11 05:05:29'),
(51, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:09:45', '2016-06-11 05:09:45'),
(52, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:10:11', '2016-06-11 05:10:11'),
(53, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:11:25', '2016-06-11 05:11:25'),
(54, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:12:41', '2016-06-11 05:12:41'),
(55, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:13:05', '2016-06-11 05:13:05'),
(56, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:13:17', '2016-06-11 05:13:17'),
(57, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:13:42', '2016-06-11 05:13:42'),
(58, '0', '2016-06-11', 66, NULL, NULL, 1.72, NULL, 22.3094, NULL, 20, 11, NULL, NULL, '2016-06-11 05:14:17', '2016-06-11 05:14:17'),
(59, '0', '2016-06-11', 34, NULL, NULL, 1.5, NULL, 15.1111, NULL, 20, 11, NULL, NULL, '2016-06-11 05:14:57', '2016-06-11 05:14:57'),
(60, '0', '2016-06-11', 33, NULL, NULL, 1.54, NULL, 13.9147, NULL, 20, 11, NULL, NULL, '2016-06-11 05:15:33', '2016-06-11 05:15:33'),
(61, '0', '2016-06-11', 56, NULL, NULL, 1.73, NULL, 18.7109, NULL, 20, 11, NULL, NULL, '2016-06-11 06:43:14', '2016-06-11 06:43:14'),
(62, '0', '2016-06-11', 56, NULL, NULL, 1.73, NULL, 18.7109, NULL, 20, 11, NULL, NULL, '2016-06-11 06:43:41', '2016-06-11 06:43:41'),
(63, '0', '2016-06-11', 56, NULL, NULL, 1.73, NULL, 18.7109, NULL, 20, 11, NULL, NULL, '2016-06-11 06:43:52', '2016-06-11 06:43:52'),
(64, '0', '2016-06-11', 56, NULL, NULL, 1.73, NULL, 18.7109, NULL, 20, 11, NULL, NULL, '2016-06-11 06:43:57', '2016-06-11 06:43:57'),
(65, '0', '2016-06-11', 66, NULL, NULL, 1.73, NULL, 22.0522, NULL, 19, 11, NULL, NULL, '2016-06-11 06:45:08', '2016-06-11 06:45:08'),
(66, '0', '2016-06-11', 65, NULL, NULL, 1.7, NULL, 22.4914, NULL, 19, 11, NULL, NULL, '2016-06-11 07:29:46', '2016-06-11 07:29:46'),
(67, 'DIA-067', '2016-06-11', 61, NULL, NULL, 1.66, NULL, 22.1367, NULL, 12, 11, NULL, NULL, '2016-06-11 08:24:24', '2016-06-11 08:24:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dieta`
--

CREATE TABLE IF NOT EXISTS `dieta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `alimento_idx` (`codAli`),
  KEY `diagnosticoDieta_idx` (`CodDia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadonutricional`
--

CREATE TABLE IF NOT EXISTS `estadonutricional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codEstNut` int(11) NOT NULL,
  `estNut` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `tipEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desEstNut` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Coddes` int(11) NOT NULL,
  `codSob` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `desnutricion_idx` (`Coddes`),
  KEY `sobrepeso_idx` (`codSob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatura`
--

CREATE TABLE IF NOT EXISTS `estatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CodEst` int(11) NOT NULL,
  `EstEst` float NOT NULL,
  `PesEst` float NOT NULL,
  `CodPas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `CodPas_idx` (`CodPas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `remember_token` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=14 ;

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

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=21 ;

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

CREATE TABLE IF NOT EXISTS `sobrepeso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codSob` int(11) NOT NULL,
  `tipsob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `rieSob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `desSob` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoalimento`
--

CREATE TABLE IF NOT EXISTS `tipoalimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codtipali` int(11) NOT NULL,
  `tipo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `codEstNut` FOREIGN KEY (`codEstNut`) REFERENCES `estadonutricional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CodPaciente` FOREIGN KEY (`CodPas`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Estatura` FOREIGN KEY (`CodEst`) REFERENCES `estatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
