-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2025 a las 23:41:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12
SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS,
  UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
  FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE,
  SQL_MODE = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- -----------------------------------------------------
-- Schema convocatoriasBD
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema convocatoriasBD
-- -----------------------------------------------------
-- ----------------------------------a-------------------
-- Table `convocatoriasBD`.`entidad-institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `convocatoriasBD`.`entidad-institucion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(70) NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `ciudades`
--
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `IdDepartamento` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `convocatorias_publicoobjetivo`
--
CREATE TABLE `convocatorias_publicoobjetivo` (
  `convocatorias_id` int(11) NOT NULL,
  `publicoObjetivo_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `departamento`
--
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `entidad_institucion`
--
CREATE TABLE `entidad_institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `entidad_institucion`
--
INSERT INTO `entidad_institucion` (`id`, `nombre`)
VALUES (1, 'ramon');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `linea`
--
CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `linea`
--
INSERT INTO `linea` (`id`, `nombre`, `descripcion`)
VALUES (2, 'Alicate', '21\r\n');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `lineas_convocatorias`
--
CREATE TABLE `lineas_convocatorias` (
  `linea_id` int(11) NOT NULL,
  `convocatorias_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `publicoobjetivo`
--
CREATE TABLE `publicoobjetivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `requisito-seleccion`
--
CREATE TABLE `requisito-seleccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `rol`
--
CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `roles`
--
INSERT INTO `roles` (`id`, `tipoRol`)
VALUES (1, 'Administrador'),
  (2, 'Usuario'),
  (3, 'Empresa');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tipo`
--
CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuario`
--
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `usuarios`
--
INSERT INTO `usuarios` (
    `id`,
    `nombre`,
    `apellido`,
    `correo`,
    `fechaCreacion`,
    `fechaActualizacion`,
    `contrasenia`,
    `idRol`
  )
VALUES (
    1,
    'Juan',
    'Pérez',
    'juan.perez@example.com',
    '2025-03-22 17:24:49',
    '2025-03-22 17:24:49',
    '$2y$10$E2Z6z8Q7r8Q7r8Q7r8Q7rO',
    1
  ),
  (
    2,
    'María',
    'Gómez',
    'maria.gomez@example.com',
    '2025-03-22 17:24:49',
    '2025-03-22 17:24:49',
    '$2y$10$E2Z6z8Q7r8Q7r8Q7r8Q7rO',
    2
  ),
  (
    3,
    'Carlos',
    'López',
    'carlos.lopez@example.com',
    '2025-03-22 17:24:49',
    '2025-03-22 17:24:49',
    '$2y$10$E2Z6z8Q7r8Q7r8Q7r8Q7rO',
    1
  ),
  (
    4,
    'Ana',
    'Martínez',
    'ana.martinez@example.com',
    '2025-03-22 17:24:49',
    '2025-03-22 17:24:49',
    '$2y$10$E2Z6z8Q7r8Q7r8Q7r8Q7rO',
    3
  ),
  (
    5,
    'Luis',
    'Rodríguez',
    'luis.rodriguez@example.com',
    '2025-03-22 17:24:49',
    '2025-03-22 17:24:49',
    '$2y$10$E2Z6z8Q7r8Q7r8Q7r8Q7rO',
    2
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `chequeo`
--
ALTER TABLE `chequeo`
ADD PRIMARY KEY (`id`, `IdEmpresa`, `IdRequisito`),
  ADD KEY `fk_cheks_empresa1_idx` (`IdEmpresa`),
  ADD KEY `fk_chequeo_requisito-seleccion1_idx` (`IdRequisito`);
--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
ADD PRIMARY KEY (`id`, `IdDepartamento`),
  ADD KEY `fk_ciudades_departamento1_idx` (`IdDepartamento`);
--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
ADD PRIMARY KEY (`id`, `fkIdEntidad`, `idUsuario`),
  ADD KEY `fk_convocatorias_entidad-institucion1_idx` (`fkIdEntidad`),
  ADD KEY `fk_convocatorias_usuario1_idx` (`idUsuario`);
--
-- Indices de la tabla `convocatorias_publicoobjetivo`
--
ALTER TABLE `convocatorias_publicoobjetivo`
ADD PRIMARY KEY (`convocatorias_id`, `publicoObjetivo_id`),
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
ADD PRIMARY KEY (`id`, `idUsuario`, `fkIdCiudad`),
  ADD KEY `fk_empresa_ciudades1_idx` (`fkIdCiudad`),
  ADD KEY `fk_empresa_usuario1_idx` (`idUsuario`);
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
ADD PRIMARY KEY (`linea_id`, `convocatorias_id`),
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
ADD PRIMARY KEY (`id`, `idTipo`),
  ADD KEY `fk_requisito-seleccion_tipo1_idx` (`idTipo`);
--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
ADD PRIMARY KEY (`id`, `idEntidad`, `idRequisitoSeleccion`),
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `entidad_institucion`
--
ALTER TABLE `entidad_institucion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT de la tabla `publicoobjetivo`
--
ALTER TABLE `publicoobjetivo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `requisito-seleccion`
--
ALTER TABLE `requisito-seleccion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `chequeo`
--
ALTER TABLE `chequeo`
ADD CONSTRAINT `fk_cheks_empresa1` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chequeo_requisito-seleccion1` FOREIGN KEY (`IdRequisito`) REFERENCES `requisito-seleccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
ADD CONSTRAINT `fk_ciudades_departamento1` FOREIGN KEY (`IdDepartamento`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
ADD CONSTRAINT `fk_convocatorias_entidad-institucion1` FOREIGN KEY (`fkIdEntidad`) REFERENCES `entidad_institucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_convocatorias_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `convocatorias_publicoobjetivo`
--
ALTER TABLE `convocatorias_publicoobjetivo`
ADD CONSTRAINT `fk_convocatorias_has_publicoObjetivo_convocatorias1` FOREIGN KEY (`convocatorias_id`) REFERENCES `convocatorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_convocatorias_has_publicoObjetivo_publicoObjetivo1` FOREIGN KEY (`publicoObjetivo_id`) REFERENCES `publicoobjetivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
ADD CONSTRAINT `fk_empresa_ciudades1` FOREIGN KEY (`fkIdCiudad`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresa_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `lineas_convocatorias`
--
ALTER TABLE `lineas_convocatorias`
ADD CONSTRAINT `fk_linea_has_convocatorias_convocatorias1` FOREIGN KEY (`convocatorias_id`) REFERENCES `convocatorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_linea_has_convocatorias_linea1` FOREIGN KEY (`linea_id`) REFERENCES `linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `requisito-seleccion`
--
ALTER TABLE `requisito-seleccion`
ADD CONSTRAINT `fk_requisito-seleccion_tipo1` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `requisitos`
--
ALTER TABLE `requisitos`
ADD CONSTRAINT `fk_Requisitos_entidad-institucion1` FOREIGN KEY (`idEntidad`) REFERENCES `entidad_institucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Requisitos_requisito-seleccion1` FOREIGN KEY (`idRequisitoSeleccion`) REFERENCES `requisito-seleccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;