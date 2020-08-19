-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Aug 2020 um 15:56
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
-- Tabellenstruktur für Tabelle `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `surname`, `email`, `message`, `timestamp`) VALUES
(1, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'lalala', '2020-08-18 15:05:52'),
(2, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'lalla', '2020-08-18 15:15:10'),
(3, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'ewtwte', '2020-08-18 21:16:06'),
(4, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'eeiuroeiroi', '2020-08-19 11:36:36'),
(5, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'werer', '2020-08-19 11:37:36'),
(6, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'zzzzzzzzzz', '2020-08-19 11:43:18'),
(7, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'erwerw', '2020-08-19 11:46:19'),
(8, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'ttttttt', '2020-08-19 11:52:47');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entrepreneure`
--

CREATE TABLE `entrepreneure` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `status` enum('Inhaberin/Inhaber','Gesellschafterin/Gesellschafter','Geschäftsführerin/Geschäftsführer','Prokuristin/Prokurist') NOT NULL,
  `website` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `entrepreneure`
--

INSERT INTO `entrepreneure` (`id`, `firstname`, `lastname`, `email`, `company`, `status`, `website`, `city`, `country`) VALUES
(19, 'Sandra', 'Peham', 'Email', 'Einfach Essbar- Eine bessere Welt ist pflanzbar', 'Inhaberin/Inhaber', 'https://permakulturwildniskultur.wordpress.com/', 'Übelbach', 'Österreich'),
(20, 'Uwe', 'Matheisen', 'Email', 'Logwelt', 'Inhaberin/Inhaber', 'https://logwelt.com/', 'Großwilfersdorf', 'Österreich'),
(21, 'Helga M.', 'Kainer', 'Email', 'PRO.SUSTAIN Unternehmensberatung', 'Inhaberin/Inhaber', 'http://www.prosustain.at/', 'Graz', 'Österreich'),
(22, 'Stefan', 'Preininger', 'Email', 'Stoffwechsel - Eco&Fair Fashion', 'Inhaberin/Inhaber', 'http://www.stoffwechsel.at/', 'Feldbach', 'Österreich'),
(23, 'Astrid', 'Polz-Watzenig', 'Email', 'Astrid Polz-Watzenig', 'Inhaberin/Inhaber', 'http://www.astridpolzwatzenig.at/', 'Graz', 'Österreich'),
(24, 'Simon', 'Schreyer', 'Email', 'Simonside', 'Inhaberin/Inhaber', 'http://simonside.net/', 'Kitzbühel', 'Österreich'),
(25, 'Rainer', 'Krismer', 'Email', 'Beratung krismer', 'Inhaberin/Inhaber', 'http://www.krismer.cc/', 'Imst', 'Österreich'),
(26, 'Manuel', 'Glojek', 'Email', 'grasgruen.it', 'Inhaberin/Inhaber', 'https://grasgruen.it/', 'Dornbirn', 'Österreich'),
(27, 'Sabine', 'Jochum-Müller', 'Email', 'Jochum-Müller OG', 'Inhaberin/Inhaber', 'https://www.jochum-mueller.at/', 'Dornbirn', 'Österreich'),
(28, 'Gabriela', 'Harmtodt', 'Email', 'coop4 kommunikationsdesign', 'Inhaberin/Inhaber', 'https://www.coop4.com/', 'Lochau', 'Österreich'),
(29, 'Martin', 'Singer', 'Email', 'SINGER EDELSTEINE', 'Inhaberin/Inhaber', 'https://www.singer-edelsteine.at/', 'Wien', 'Österreich'),
(31, 'August', 'Lechner', 'Email', 'Fotostudio August Lechner', 'Inhaberin/Inhaber', 'https://www.hochzeitsfotograf.at/', 'Wien', 'Österreich'),
(32, 'Nadine', 'Schratzberger', 'Email', 'NASCHSPORTSWEAR', 'Inhaberin/Inhaber', 'http://www.nasch-sportswear.com/', 'Wien', 'Österreich'),
(33, 'Harald', 'Frassine', 'Email', 'Marktforschung', 'Inhaberin/Inhaber', 'https://www.xing.com/profile/HaraldSilvio_Frassine/cv', 'Wien', 'Österreich'),
(34, 'Stefan', 'Yazzie Herbert', 'Email', 'House of Bandits', 'Inhaberin/Inhaber', 'http://www.houseofbandits.at/', 'Wien', 'Österreich'),
(35, 'Michael', 'Rausch-Schott', 'Email', 'Fotografie Michael Rausch-Schott', 'Inhaberin/Inhaber', 'http://www.rausch-schott.at/', 'Wien', 'Österreich'),
(36, 'Elke', 'Mitterdorfer', 'elke@surprisesurprise.at', 'surprise, surprise!', 'Inhaberin/Inhaber', 'http://www.surprisesurprise.at/', 'Wien', 'Österreich'),
(42, 'Elke', 'Mitterdorfer', 'elke.mitterdorfer@chello.at', 'surprise, surprise!', 'Inhaberin/Inhaber', '', 'Wien', 'Österreich');

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
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(10000) NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `description`, `place`) VALUES
(1, 'Globaler Klimastreik: Fridays For Future', '2020-09-25', '11:55:00', 'Am 25.09.2020 wird auf Initiative von Fridays For Future wieder global gestreikt. Auch diesmal werden wir Unternehmerinnen und Unternehmer dabei sein.', 'Wien'),
(3, 'Text', '0000-00-00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `user` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `user`, `timestamp`) VALUES
(1, 'Test', 'Test', 'futurelove', '2020-08-18 18:48:41'),
(2, 'test', 'test', 'futurelove', '2020-08-19 08:19:22');

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
-- Indizes für die Tabelle `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `entrepreneure`
--
ALTER TABLE `entrepreneure`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT für Tabelle `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `entrepreneure`
--
ALTER TABLE `entrepreneure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT für Tabelle `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
