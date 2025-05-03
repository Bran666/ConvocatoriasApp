-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2025 a las 23:10:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

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
(3, 'Convocatoria de Investigación Científica 2025', '0000-00-00 00:00:00', '2025-04-16', '2025-04-22', 'Fomentar la investigación interdisciplinaria y soluciones innovadoras para problemas nacionales', 'Los proyectos deben incluir un plan de sostenibilidad. No se aceptarán postulaciones después de la fecha de cierre.', 1, 1, 1),
(4, 'Becas de Posgrado 2025', '2025-06-10 00:00:00', '2025-06-30', 'Programa de becas para estudios de maestría y doctorado', 'Fortalecer la formación de capital humano avanzado', 'Se requiere carta de aceptación de la universidad', 1, 1, 1),
(5, 'Financiamiento para Proyectos Culturales', '2025-07-05 00:00:00', '2025-07-20', 'Apoyo a iniciativas artísticas y culturales comunitarias', 'Promover la diversidad cultural y participación ciudadana', 'Deben incluir plan de difusión y evaluación', 1, 1, 1),
(10, 'Convocatoria de Investigación Científica 2025', '2025-05-01 00:00:00', '2025-06-01', 'Fomentar la investigación interdisciplinaria', 'Impulsar proyectos de investigación', 'Se requiere propuesta previa', 1, 1, 1),
(11, 'Becas de Posgrado 2025', '2025-06-01 00:00:00', '2025-07-01', 'Becas para estudios de maestría', 'Fortalecer la formación de capital humano avanzado', 'Carta de aceptación obligatoria', 2, 1, 2),
(12, 'Convocatoria de Innovación Tecnológica 2025', '2025-07-01 00:00:00', '2025-08-01', 'Promover la innovación tecnológica en diversos sectores', 'Fomentar la colaboración entre empresas tecnológicas', 'Se requiere plan de implementación tecnológica', 1, 1, 1),
(13, 'Becas de Investigación Internacional 2025', '2025-08-01 00:00:00', '2025-08-31', 'Becas para investigación en el extranjero en diversas áreas científicas', 'Fortalecer el intercambio académico y científico internacional', 'Se requiere fluidez en el idioma inglés', 1, 1, 2),
(14, 'Financiamiento para Proyectos Ambientales 202', '2025-09-01 00:00:00', '2025-09-30', 'Apoyo a proyectos que promuevan la sostenibilidad ambiental', 'Incentivar la creación de soluciones verdes para el futuro', 'Debe incluir evaluación de impacto ambiental', 1, 2, 1),
(15, 'Convocatoria de Innovación Social 2025', '2025-10-01 00:00:00', '2025-10-31', 'Apoyo a proyectos sociales innovadores para comunidades vulnerables', 'Fomentar la inclusión social y económica', 'Se debe presentar un estudio de viabilidad social', 2, 3, 1),
(16, 'Becas de Formación Profesional 2025', '2025-11-01 00:00:00', '2025-11-30', 'Becas para formación técnica y profesional en diversas disciplinas', 'Fortalecer las habilidades profesionales de los participantes', 'Carta de motivación y plan de estudios requerido', 2, 2, 2),
(17, 'ferney', '2025-05-06 00:00:00', '2025-05-24', 'inteligente', 'e11', 'cec', 2, 1, 1),
(18, 'desarrollador sinior', '2025-04-30 00:00:00', '2025-05-08', 'buscamos un desarrollador que tenga 5 años de experinecia para desarrollo backent', 'buscar un desarrolador', 'ninguna', 4, 1, 1),
(19, 'Convocatoria de Innovación Educativa 2025', '2025-06-01 00:00:00', '2025-06-30', 'Fomentar la implementación de nuevas tecnologías en la educación', 'Mejorar la calidad educativa a través de la tecnología', 'Se requiere experiencia en proyectos educativos', 1, 1, 1),
(20, 'Becas de Investigación Científica 2025', '2025-06-01 00:00:00', '2025-06-15', 'Apoyo para investigaciones científicas interdisciplinarias', 'Promover la investigación científica aplicada', 'Carta de motivación requerida', 1, 2, 1),
(21, 'Financiamiento para Proyectos de Energía Reno', '2025-07-01 00:00:00', '2025-07-31', 'Apoyo para iniciativas en energía renovable', 'Desarrollar proyectos sostenibles en el sector energético', 'Incluir un plan de sostenibilidad', 2, 3, 2),
(22, 'Convocatoria de Innovación Tecnológica 2025', '2025-07-01 00:00:00', '2025-08-01', 'Apoyo a la creación de nuevos productos tecnológicos', 'Fomentar la creación de soluciones innovadoras', 'Se requiere prototipo funcional', 1, 1, 1),
(23, 'Becas para Maestrías en Tecnología 2025', '2025-08-01 00:00:00', '2025-08-31', 'Programa de becas para estudios de maestría en tecnología', 'Fortalecer la formación académica en el área tecnológica', 'Se requiere carta de aceptación universitaria', 2, 2, 1),
(24, 'Convocatoria de Proyectos Culturales 2025', '2025-08-10 00:00:00', '2025-09-10', 'Apoyo a proyectos culturales y artísticos', 'Fomentar la diversidad cultural y el acceso a la cultura', 'Deben presentar un plan de difusión cultural', 1, 1, 1),
(25, 'Becas para Investigación en Ciencias Sociales', '2025-09-01 00:00:00', '2025-09-30', 'Convocatoria para investigación en ciencias sociales', 'Fortalecer la comprensión de temas sociales actuales', 'Se requiere propuesta de investigación detallada', 1, 1, 2),
(26, 'Convocatoria de Investigación en Salud Públic', '2025-10-01 00:00:00', '2025-10-31', 'Apoyo a investigaciones en salud pública', 'Mejorar las políticas públicas de salud', 'Carta de motivación requerida', 2, 3, 1),
(27, 'Becas para Estudios en Ciencias Ambientales 2', '2025-11-01 00:00:00', '2025-11-30', 'Becas para estudios en ciencias ambientales', 'Fortalecer la formación en el área ambiental', 'Incluir un proyecto de investigación', 1, 2, 1),
(28, 'Convocatoria para Innovación en el Sector Agr', '2025-12-01 00:00:00', '2025-12-31', 'Fomentar la innovación en el sector agropecuario', 'Mejorar la productividad agrícola mediante nuevas tecnologías', 'Deben presentar un plan de implementación', 1, 1, 2);

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
(2, 'univercidad Caldas'),
(4, 'Sena'),
(6, 'univercidad de huiston');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_convocatoria` int(11) NOT NULL,
  `fecha_favorito` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `id_usuario`, `id_convocatoria`, `fecha_favorito`) VALUES
(153, 8, 23, '2025-05-03 15:57:19'),
(154, 8, 5, '2025-05-03 16:08:40'),
(155, 8, 10, '2025-05-03 16:08:43'),
(156, 8, 11, '2025-05-03 16:08:47'),
(157, 8, 17, '2025-05-03 16:09:27'),
(158, 8, 14, '2025-05-03 16:09:41');

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
(3, 'Convocatoria de Investigación Científica 2022', 'Convocatoria dirigida a investigadores de todas las disciplinas para financiar proyectos de impacto social '),
(4, 'investigador', 'investigador persona de hacer todas las investigaciones'),
(5, 'investigador', 'no se');

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
(2, 'matematicos'),
(3, 'investigado'),
(4, 'univercidad'),
(5, 'procesos industriales');

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
(1, 'saber de pyton', 1),
(2, 'saber programar mínimo 2 lenguajes de programación', 1),
(3, 'saber de Java', 2),
(4, 'saber css', 1);

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
(1, 'saber programar mínimo 2 lenguajes de program', 'ser un desarrollador full stack', 4, 3),
(2, 'saber  html css y javascript para crear sitio', 'ninguna', 2, 2),
(3, 'desarrollador sinior', 'ser un desarrollador que se adapte a cualquie', 4, 3),
(4, 'saber de todo', 'cualquiera', 2, 2);

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
(1, 'usuario'),
(2, 'adminstrador'),
(4, 'investigador');

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
(1, 'investigador'),
(2, 'usuario');

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
(1, 'mario', 'mario@gmail.com', '$2y$10$KW/vlfd1TnqppI.cKJm3PeWl3bZqt8L9CjDz5kPRa0js8VsubfHpu', NULL, 'Activo', 3),
(2, 'brandon', 'brandon@gmail.com', '$2y$10$7WPwWhqPu4LI2s8WHOuXQO.4Z.lHZ0n6keA0UIS4AY3TQlbaaGcyq', NULL, 'Activo', 3),
(3, 'leider ', 'leider@gmail.com', '$2y$10$wZTOXixC93sCW2KfdC.CoeZR67xKetvFuvRGECTdx/FD.Avic70XS', NULL, 'Activo', 3),
(4, 'dayana', 'dayana@gmail.com', '$2y$10$HGlMZddInwq1xMDpHneK3.ZjWbgkyI6kH66Wfgmk1FTsyy2rzV6Oe', NULL, 'Activo', 3),
(5, 'dana', 'dana@gmail.com', '$2y$10$fHKAWdypvbxcGrszaxtOreWNsMfDBbjo/XbzCOQ2jZFHlAJ2xBemO', NULL, 'Activo', 3),
(6, 'leider arias', 'leider@gmail.com', '$2y$10$6d31vNppdXPZp7rfc2jGjuDby5AbJrBK8MXfNaeEJIS/f08WitTMy', NULL, 'Activo', 3),
(7, 'yury', 'yury@gmail.com', '$2y$10$KsXj8LM2/Ox9vbfV/MqvFuPAlwiH6o3shhrqzP4dubZy5UwV7mJWi', NULL, 'Activo', 3),
(8, 'jose', 'jose@gmail.com', '$2y$10$eOX5M/EiQEnkniYb4GdI9uBLzvNEl4Yi1Pz2qwPHdcqytH5z9qRky', NULL, 'Activo', 3);

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
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_convocatoria`),
  ADD KEY `id_convocatoria` (`id_convocatoria`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicoobjetivo`
--
ALTER TABLE `publicoobjetivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `requisito-seleccion`
--
ALTER TABLE `requisito-seleccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_convocatoria`) REFERENCES `convocatorias` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
