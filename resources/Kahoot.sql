-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2019 a las 21:59:32
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kahoot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id_answer` bigint(20) UNSIGNED NOT NULL,
  `id_question` bigint(20) UNSIGNED NOT NULL,
  `name_answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

CREATE TABLE `players` (
  `id_player` bigint(20) UNSIGNED NOT NULL,
  `id_room` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `players`
--

INSERT INTO `players` (`id_player`, `id_room`, `username`) VALUES
(5, 1, 'alesi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polls`
--

CREATE TABLE `polls` (
  `id_poll` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name_poll` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `polls`
--

INSERT INTO `polls` (`id_poll`, `id_user`, `name_poll`) VALUES
(1, 1, 'Geografia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id_question` bigint(20) UNSIGNED NOT NULL,
  `id_poll` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `title_question` varchar(150) NOT NULL,
  `description_question` varchar(250) DEFAULT NULL,
  `type_question` int(11) NOT NULL DEFAULT '0',
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id_question`, `id_poll`, `id_user`, `title_question`, `description_question`, `type_question`, `image`) VALUES
(1, 1, 1, 'Pregutna1', NULL, 1, NULL),
(2, 1, 1, 'Pregutna1', NULL, 1, NULL),
(3, 1, 1, 'Pregutna1', NULL, 1, NULL),
(4, 1, 1, 'Pregutna1', NULL, 1, NULL),
(5, 1, 1, 'Pregutna1', NULL, 1, NULL),
(6, 1, 1, 'Pregutna1', NULL, 1, NULL),
(7, 1, 1, 'pregunta 2', NULL, 1, NULL),
(8, 1, 1, 'pregunta 2', NULL, 1, NULL),
(9, 1, 1, 'asdasdda', NULL, 1, NULL),
(10, 1, 1, 'asdasdda', NULL, 1, NULL),
(11, 1, 1, 'xdxdxd', NULL, 1, NULL),
(12, 1, 1, 'xdxdxd', NULL, 1, NULL),
(13, 1, 1, 'xdxdxdxd', NULL, 1, NULL),
(14, 1, 1, 'xdxdxdxd', NULL, 1, NULL),
(15, 1, 1, 'xdasdsdfasf', NULL, 1, NULL),
(16, 1, 1, 'ADASDFASDASD', NULL, 1, NULL),
(17, 1, 1, 'ADASDFASDASD', NULL, 1, NULL),
(18, 1, 1, 'ADASDFASDASD', NULL, 1, 'BlueStacks_2019.06.16_12.52.49.58.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id_room` bigint(20) UNSIGNED NOT NULL,
  `id_poll` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `pin` int(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id_room`, `id_poll`, `id_user`, `pin`, `status`) VALUES
(1, 1, 1, 1234, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `image`) VALUES
(1, 'roger', 'carballo', 'rogertim3@gmail.com1', '6d16e989de5314f3eff5e0c4a24c2bf0fd7f8fe395e713ac839b325a10c4ed1191d1c972c49471efcaa197275b652464fc19007ea5f3542b798c6295b38a2b31', 'Star Wars Episodio II - El ataque de los clones.mkv_snapshot_00.00.07.587.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_question` (`id_question`);

--
-- Indices de la tabla `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id_player`),
  ADD KEY `id_room` (`id_room`);

--
-- Indices de la tabla `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id_poll`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_poll` (`id_poll`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`),
  ADD UNIQUE KEY `pin` (`pin`),
  ADD KEY `id_poll` (`id_poll`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `players`
--
ALTER TABLE `players`
  MODIFY `id_player` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `polls`
--
ALTER TABLE `polls`
  MODIFY `id_poll` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id_room`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_poll`) REFERENCES `polls` (`id_poll`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_poll`) REFERENCES `polls` (`id_poll`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
