-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Aug 2020 um 17:13
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

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entrepreneure`
--
ALTER TABLE `entrepreneure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entrepreneure`
--
ALTER TABLE `entrepreneure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
