-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2019 a las 04:02:45
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

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
-- Estructura de tabla para la tabla `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `text` varchar(191) NOT NULL,
  `rightAnswer` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `answer`
--

INSERT INTO `answer` (`id`, `questionID`, `text`, `rightAnswer`) VALUES
(1, 1, 'True', 1),
(2, 1, 'False', 0),
(3, 2, 'True', 1),
(4, 2, 'False', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `name` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `player`
--

INSERT INTO `player` (`id`, `roomID`, `name`) VALUES
(17, 1, 'A'),
(18, 1, 'qqqqqqqq'),
(19, 1, 'HOLA'),
(20, 29, 'Almudena'),
(21, 29, 'Alexis'),
(22, 29, '555'),
(23, 29, 'HOLA'),
(24, 29, 'holayyy'),
(25, 1, 'qqqqqqqq'),
(26, 1, 'HOLA'),
(27, 29, 'Almudena'),
(28, 29, 'Almudena'),
(29, 29, 'Alexis'),
(30, 29, '555'),
(31, 29, 'HOLA'),
(32, 29, 'holayyy'),
(33, 1, 'A'),
(34, 1, 'qqqqqqqq'),
(35, 1, 'HOLA'),
(36, 29, 'Almudena'),
(37, 29, 'Alexis'),
(38, 29, '555'),
(39, 29, 'HOLA'),
(40, 29, 'holayyy'),
(41, 1, 'qqqqqqqq'),
(42, 1, 'HOLA'),
(43, 29, 'Almudena'),
(44, 29, 'Almudena'),
(45, 29, 'Alexis'),
(46, 29, '555'),
(47, 29, 'HOLA'),
(48, 29, 'holayyy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `surveyID` int(11) NOT NULL,
  `text` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `question`
--

INSERT INTO `question` (`id`, `surveyID`, `text`) VALUES
(1, 1, '2 + 2 = 4?'),
(2, 1, 'Are we all going to die because climate change?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `surveyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pin` varchar(11) DEFAULT NULL,
  `status` varchar(191) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`id`, `surveyID`, `userID`, `pin`, `status`, `date`) VALUES
(1, 1, 1, '111', 'playing', '2019-12-02 19:30:20'),
(2, 1, 1, '211', 'finished', '2019-12-02 19:30:20'),
(3, 1, 1, '311', 'playing', '2019-12-09 01:41:00'),
(18, 2, 1, '1821', 'playing', '2019-12-09 02:22:59'),
(19, 1, 1, '1911', 'playing', '2019-12-09 02:23:55'),
(20, 1, 1, '2011', 'playing', '2019-12-09 02:26:14'),
(21, 1, 1, '2111', 'playing', '2019-12-09 02:27:15'),
(22, 1, 1, '2211', 'playing', '2019-12-09 02:27:30'),
(23, 1, 1, '2311', 'playing', '2019-12-09 02:29:42'),
(24, 1, 1, '2411', 'playing', '2019-12-09 02:30:10'),
(25, 1, 1, '2511', 'playing', '2019-12-09 02:30:31'),
(26, 1, 1, '2611', 'playing', '2019-12-09 02:42:08'),
(27, 1, 1, '2711', 'playing', '2019-12-09 02:42:47'),
(28, 1, 1, '2811', 'playing', '2019-12-09 02:50:20'),
(29, 1, 1, '2911', 'playing', '2019-12-09 02:55:29'),
(30, 1, 1, '3011', 'playing', '2019-12-09 03:59:08'),
(31, 1, 1, '3111', 'playing', '2019-12-09 03:59:18'),
(32, 1, 1, '3211', 'playing', '2019-12-09 03:59:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `survey`
--

INSERT INTO `survey` (`id`, `userID`, `name`) VALUES
(1, 1, 'Not important stuff'),
(2, 1, 'Do you know enough?'),
(3, 2, 'What do you know about maths?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `lastName` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `email`, `password`) VALUES
(1, 'Almudena', 'Raya', 'r.almudena@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(2, 'Alexis', 'WTF', 'alexisWTF@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vote`
--

CREATE TABLE `vote` (
  `answerID` int(11) NOT NULL,
  `playerID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkanswer` (`questionID`);

--
-- Indices de la tabla `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player` (`roomID`);

--
-- Indices de la tabla `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkquestion` (`surveyID`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKroom1` (`surveyID`),
  ADD KEY `FKroom2` (`userID`);

--
-- Indices de la tabla `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKuserID` (`userID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vote`
--
ALTER TABLE `vote`
  ADD KEY `fkvote1` (`answerID`),
  ADD KEY `fkvote2` (`playerID`),
  ADD KEY `fkvote3` (`roomID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fkanswer` FOREIGN KEY (`questionID`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fkquestion` FOREIGN KEY (`surveyID`) REFERENCES `survey` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `FKroom1` FOREIGN KEY (`surveyID`) REFERENCES `survey` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKroom2` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FKuserID` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `fkvote1` FOREIGN KEY (`answerID`) REFERENCES `answer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkvote2` FOREIGN KEY (`playerID`) REFERENCES `player` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkvote3` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
