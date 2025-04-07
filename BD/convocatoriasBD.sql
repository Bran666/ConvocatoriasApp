-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2025 a las 00:17:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `convocatoriasbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeo`
--

CREATE TABLE `chequeo` (
  `id` int(11) NOT NULL,
  `chequeo` tinyint(4) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `IdDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fechaRevision` datetime NOT NULL,
  `fechaCierre` date DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `objetivo` varchar(200) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `fkIdEntidad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fkIdInvestigador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id`, `nombre`, `fechaRevision`, `fechaCierre`, `descripcion`, `objetivo`, `observaciones`, `fkIdEntidad`, `idUsuario`, `fkIdInvestigador`) VALUES
(1, 'desarollo web', '0000-00-00 00:00:00', '2025-04-09', '2025-04-23', 'hrth', 'jhrt', 1, 1, 1),
(2, 'zorra', '0000-00-00 00:00:00', '2025-04-08', '2025-04-10', 'hbrth', 'yjen', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_publicoobjetivo`
--

CREATE TABLE `convocatorias_publicoobjetivo` (
  `convocatorias_id` int(11) NOT NULL,
  `publicoObjetivo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nit` varchar(30) DEFAULT NULL,
  `razonSocial` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `paginaWeb` varchar(100) DEFAULT NULL,
  `numEmpleados` int(11) DEFAULT NULL,
  `sectorEconomico` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `tiempoExistencia` int(11) DEFAULT NULL,
  `documentoLegal` varchar(45) DEFAULT NULL,
  `nombreLegal` varchar(45) DEFAULT NULL,
  `apelidoLegal` varchar(45) DEFAULT NULL,
  `telefonoFijo` varchar(45) DEFAULT NULL,
  `celularLegal` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cargoLegal` varchar(45) DEFAULT NULL,
  `fkIdCiudad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad-institucion`
--

CREATE TABLE `entidad-institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_institucion`
--

CREATE TABLE `entidad_institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entidad_institucion`
--

INSERT INTO `entidad_institucion` (`id`, `nombre`) VALUES
(1, 'ramon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id`, `nombre`, `descripcion`) VALUES
(2, 'Alicate', '21\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_convocatorias`
--

CREATE TABLE `lineas_convocatorias` (
  `linea_id` int(11) NOT NULL,
  `convocatorias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicoobjetivo`
--

CREATE TABLE `publicoobjetivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicoobjetivo`
--

INSERT INTO `publicoobjetivo` (`id`, `nombre`) VALUES
(1, 'tiendas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito-seleccion`
--

CREATE TABLE `requisito-seleccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `requisito-seleccion`
--

INSERT INTO `requisito-seleccion` (`id`, `nombre`, `idTipo`) VALUES
(1, 'dwfd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

CREATE TABLE `requisitos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `obervaciones` varchar(45) DEFAULT NULL,
  `idEntidad` int(11) NOT NULL,
  `idRequisitoSeleccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `requisitos`
--

INSERT INTO `requisitos` (`id`, `nombre`, `obervaciones`, `idEntidad`, `idRequisitoSeleccion`) VALUES
(0, 'webwrt', 'nytnte', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(0, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(0, 'tiendas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `contrasenia`, `telefono`, `estado`, `idRol`) VALUES
(0, 'mario', 'mario@gmail.com', '$2y$10$KW/vlfd1TnqppI.cKJm3PeWl3bZqt8L9CjDz5kPRa0js8VsubfHpu', NULL, 'Activo', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  ADD PRIMARY KEY (`id`,`IdEmpresa`,`IdRequisito`),
  ADD KEY `fk_cheks_empresa1_idx` (`IdEmpresa`),
  ADD KEY `fk_chequeo_requisito-seleccion1_idx` (`IdRequisito`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`,`IdDepartamento`),
  ADD KEY `fk_ciudades_departamento1_idx` (`IdDepartamento`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id`,`fkIdEntidad`,`idUsuario`),
  ADD KEY `fk_convocatorias_entidad-institucion1_idx` (`fkIdEntidad`),
  ADD KEY `fk_convocatorias_usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `convocatorias_publicoobjetivo`
--
ALTER TABLE `convocatorias_publicoobjetivo`
  ADD PRIMARY KEY (`convocatorias_id`,`publicoObjetivo_id`),
  ADD KEY `fk_convocatorias_has_publicoObjetivo_publicoObjetivo1_idx` (`publicoObjetivo_id`),
  ADD KEY `fk_convocatorias_has_publicoObjetivo_convocatorias1_idx` (`convocatorias_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`,`idUsuario`,`fkIdCiudad`),
  ADD KEY `fk_empresa_ciudades1_idx` (`fkIdCiudad`),
  ADD KEY `fk_empresa_usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `entidad-institucion`
--
ALTER TABLE `entidad-institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidad_institucion`
--
ALTER TABLE `entidad_institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_convocatorias`
--
ALTER TABLE `lineas_convocatorias`
  ADD PRIMARY KEY (`linea_id`,`convocatorias_id`),
  ADD KEY `fk_linea_has_convocatorias_convocatorias1_idx` (`convocatorias_id`),
  ADD KEY `fk_linea_has_convocatorias_linea1_idx` (`linea_id`);

--
-- Indices de la tabla `publicoobjetivo`
--
ALTER TABLE `publicoobjetivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requisito-seleccion`
--
ALTER TABLE `requisito-seleccion`
  ADD PRIMARY KEY (`id`,`idTipo`),
  ADD KEY `fk_requisito-seleccion_tipo1_idx` (`idTipo`);

--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id`,`idEntidad`,`idRequisitoSeleccion`) USING BTREE,
  ADD KEY `fk_Requisitos_entidad-institucion1_idx` (`idEntidad`),
  ADD KEY `fk_Requisitos_requisito-seleccion1_idx` (`idRequisitoSeleccion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_rol1_idx` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entidad-institucion`
--
ALTER TABLE `entidad-institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entidad_institucion`
--
ALTER TABLE `entidad_institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicoobjetivo`
--
ALTER TABLE `publicoobjetivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `requisito-seleccion`
--
ALTER TABLE `requisito-seleccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
