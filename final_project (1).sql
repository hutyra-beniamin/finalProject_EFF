-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Aug 2020 um 11:04
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `final_project`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `entrepreneurs`
--

INSERT INTO `entrepreneurs` (`id`, `name`, `company`, `url`, `city`, `country`) VALUES
(3, 'Abdelati Krimi', 'Albayt Sori Handels GmbH', 'http://www.arbeitsintegration.net', 'Wien', 'Österreich'),
(4, 'Sarah Richter', 'Bau EPD GmbH', 'http://www.bau-epd.at', 'Wien', 'Österreich'),
(5, 'Hubert Putz', 'Hubert Putz', 'http://www.hubertputz.at', 'Salzburg', 'Österreich'),
(6, 'Sepp Eisenriegler', 'R.U.S.Z. GmbH', 'https://rusz.at', 'Vienna', 'Österreich'),
(7, 'Georg Habinger', 'Einzelhandel mit Textilien', 'https://www.basix.at', ' Wien', 'Österreich'),
(8, 'Gregor Wimmer', 'HERZBLUAT Marketing- & Werbeagentur', 'https://www.herzbluat.at', 'Salzburg', 'Österreich'),
(9, 'Anna Breitenberger', 'Motmot Design', 'https://www.motmotdesign.com', 'Wien', 'Österreich'),
(10, 'Ute Gigler', 'Coaching Moves e.U.', 'https://www.coachingmoves.at', 'Wien', 'Österreich'),
(11, 'michael poell', 'coworking rochuspark', 'https://www.rochuspark.at', 'wien', 'österreich'),
(17, 'Elke Mitterdorfer', 'surprise, surprise!', 'http://www.surprisesurprise.at/', 'Wien', 'Österreich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(2, 'futurelove', '0b24cf376d7fbf58adc7f65105e50424a55c4d9409d7da89071cf7cf64c95e17', 'office@e4f.at');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
