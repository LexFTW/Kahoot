-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Temps de generació: 28-11-2019 a les 19:20:18
-- Versió del servidor: 5.7.28-0ubuntu0.18.04.4
-- Versió de PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `Kahoot`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `text` varchar(191) NOT NULL,
  `rightAnswer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `name` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `surveyID` int(11) NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `surveyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `hour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `lastName` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `vote`
--

CREATE TABLE `vote` (
  `answerID` int(11) NOT NULL,
  `playerID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkanswer` (`questionID`);

--
-- Index de la taula `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player` (`roomID`);

--
-- Index de la taula `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkquestion` (`surveyID`);

--
-- Index de la taula `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKroom1` (`surveyID`),
  ADD KEY `FKroom2` (`userID`);

--
-- Index de la taula `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKuserID` (`userID`);

--
-- Index de la taula `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index de la taula `vote`
--
ALTER TABLE `vote`
  ADD KEY `fkvote1` (`answerID`),
  ADD KEY `fkvote2` (`playerID`),
  ADD KEY `fkvote3` (`roomID`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fkanswer` FOREIGN KEY (`questionID`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restriccions per la taula `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restriccions per la taula `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fkquestion` FOREIGN KEY (`surveyID`) REFERENCES `survey` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restriccions per la taula `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `FKroom1` FOREIGN KEY (`surveyID`) REFERENCES `survey` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKroom2` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restriccions per la taula `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FKuserID` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restriccions per la taula `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `fkvote1` FOREIGN KEY (`answerID`) REFERENCES `answer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkvote2` FOREIGN KEY (`playerID`) REFERENCES `player` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkvote3` FOREIGN KEY (`roomID`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
