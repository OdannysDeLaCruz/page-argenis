-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-09-2017 a las 16:04:44
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `argenisc_pagargenis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuarios` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuarios`, `clave`) VALUES
(1, 'argenis', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `tel` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomb_usu` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_logo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `tel`, `nomb_usu`, `nombre_logo`) VALUES
(1, '300 616 55 61', NULL, NULL),
(2, '320 230 26 50', NULL, NULL),
(3, NULL, '@ArgenisContreraz', 'logo-face.png'),
(4, NULL, 'Argenis Contreras', 'logo-instagram.png'),
(5, NULL, '@ArgenisContrer6', 'logo-twitt.png'),
(6, NULL, 'Argenis Contreras', 'logo-YouTube.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id_c` int(11) NOT NULL,
  `seccion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtitulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id_c`, `seccion`, `titulo`, `subtitulo`, `mensaje`) VALUES
(1, 'header', 'Argenis Contreras Vallenato', 'Cantante, guitarrista y compositor', 'Cordial saludo. Soy Argenis Contreras de San juan del cesar (Guajira); cantante guitarrista y compositor con mas de 15 años de experiencia musical, dispuesto a brindarle a todos mis clientes un show vallenato, con calidad. Todas mis presentaciones van acompañadas con mi guitarra la cual se encarga de ponerle un sello único y original a mi organización. Permítenos mostrarte un vallenato en su esencia, con un acordeón bien tocado con una interpretación propia de nuestra costa Caribe dándole a cada canción su sentido y su cadencia. Con una caja, una guacharaca y un bajo bien tocados. Con mucho cariño les comparto dos canciones de mi autoría, con su video oficial espero les guste y las disfruten, muchas gracias. \r\nCostumbre sanjuanera es entregar el corazón.																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																'),
(2, 'tipo evento', '¿Que tipo de evento deseas?', NULL, 'Nuestra agrupación cuenta con varios formatos musicales para brindarle a nuestros clientes la mejor opción para su evento.'),
(3, '5 musicos', '5 Músicos', 'Para eventos pequeños, en apartamentos o reuniones familiares', '5 integrantes:Disponible para lugares pequeños'),
(4, 'grupo Completo', 'Grupo Completo', 'Para eventos grandes empresariales ó privados', '10 ó mas integrantes:Salidas nacionales é internacionales:Directamente en tú empresa.'),
(5, 'vallenato con guitarra', 'Vallenato con guitarra', 'Para tu comodidad', '2 ó mas integrantes:Vallenato clasico romantico:Vallenato parrandero:Acompañado de caja, bajo y guacharaca:Lo mas importante, a tu gusto.'),
(6, 'temas', 'Mis otras presentaciones', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`) VALUES
(36, 'foto1.jpg'),
(37, 'foto7.jpg'),
(38, 'foto9.jpg'),
(39, 'foto14.jpg'),
(40, 'foto17.jpg'),
(42, 'foto20.jpg'),
(43, 'foto27.jpg'),
(44, 'foto29.jpg'),
(45, 'foto34.jpg'),
(46, 'foto38.jpg'),
(56, 'foto19.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_cargadas`
--

CREATE TABLE `imagenes_cargadas` (
  `id` int(11) NOT NULL,
  `nombre_imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes_cargadas`
--

INSERT INTO `imagenes_cargadas` (`id`, `nombre_imagen`) VALUES
(1, 'foto7.jpg'),
(2, 'foto15.jpg'),
(3, 'foto6.jpg'),
(4, 'foto29.jpg'),
(5, 'fondo-instrumentos.jpg'),
(6, 'logo-instagram.png'),
(7, 'logo-YouTube.png'),
(8, 'logo-twitt.png'),
(9, 'logo-face.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `id_o` int(11) NOT NULL,
  `opinion` text COLLATE utf8_spanish_ci,
  `opinador` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id_o`, `opinion`, `opinador`) VALUES
(1, 'Es un gran cantante, responsable y muy comprometido con sus toques. ', 'Julian Camargo'),
(2, 'Sus parrandas son llenas de energía y sabor, sabe como hacer gozar las fiestas a las personas.\r\n', 'Carmen Mejía'),
(3, ' Su equipo es muy entregado y hacen que uno sienta la fiesta en donde quiera que van.\r\n', 'Jose Carranza'),
(4, 'Una gran voz y una excelente agrupación, responsable y lleno de energía siempre.', 'María Del Carmen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_v` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_c1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_v`, `titulo`, `url`, `id_c1`) VALUES
(1, 'Ya no lloraras - Argenis Contreras (Video oficial)', '<iframe src=\"https://www.youtube.com/embed/qnNwtliDaTA\" frameborder=\"0\" allowfullscreen></iframe>', 1),
(2, 'Historia Sin final - Argenis Contreras (Video oficial)', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/KDH4_LXl_iY\"></iframe>', 1),
(3, 'Cantor de fonseca- Argenis Contreras & Raul Ochoa - Jorge Oñate - autor: Carlos Huerta', '<iframe src=\"https://www.youtube.com/embed/BdbcNguqamk\" frameborder=\"0\" allowfullscreen></iframe>\r\n', 3),
(4, 'Luna Sanjuanera - Los hermanos Zuleta - Argenis Contreras & Raul ochoa - autor: Roberto Calderon', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/1sHJVMJoNlc\"></iframe>', 3),
(5, 'Medejo Solito - jorgito celedon - Argenis contreras & Raul Ochoa - Autor Jorgito Celedon', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/hOSmAeiSPZI\"></iframe>', 3),
(6, 'El nino bonito - Argenis Contreras - Cantante Vallenato', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/wyJ0UpwLRjI\"></iframe>', 4),
(7, 'Busca un Confidente - Los Diablitos - Alex Manga - Argenis Contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/ykwsCGYyP30\"></iframe>', 4),
(8, 'Tu vas a volar - Argenis contreras - cantante vallenato', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/xrUAmkynN3M\"></iframe>', 4),
(9, 'Mi Ultima Voluntad Fabian Corrales - Argenis Contreras - oscar Cantillo - Arelio (yeyo) nuñez', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/8deXKtHwPHY\"></iframe>', 5),
(10, 'Te Dedicos Mis Triunfos (Jorge Oñate ) - Argenis Contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/zdbSPtR1rnk\"></iframe>', 5),
(11, 'Aqui estan tus canciones- Argenis Contreras- Geño Gamez guitarrista de Silvestre Dangond', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/j5yB2KbqlrM\"></iframe>', 5),
(12, 'El invierno pasado Argenis contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/RUVEz0OYIqk\"></iframe>', 6),
(13, 'Mi Guitarra Vieja Kaleth Morales', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/vTUHP2_7ZVg\"></iframe>', 6),
(14, 'No pude quitarte las espinas Argenis Contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/pK4HnQ9XEoY\"></iframe>', 6),
(15, 'El pasado es pasado - Argenis contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/8sDtChqGePE\"></iframe>', 6),
(16, 'Que me puedas amar Argenis contreras', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/gOaYPgZmThA\"></iframe>', 6),
(17, 'La Suerte Esta Hechada Argenis Contreras Y Damir Gomez', '<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/iosLp1XWFfg\"></iframe>', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_cargadas`
--
ALTER TABLE `imagenes_cargadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id_o`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_v`),
  ADD KEY `id_c1` (`id_c1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `imagenes_cargadas`
--
ALTER TABLE `imagenes_cargadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_c1`) REFERENCES `contenido` (`id_c`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
