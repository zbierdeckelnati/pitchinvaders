-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Sep 2017 um 16:12
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `pitchinvaders`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `1bundesliga`
--

CREATE TABLE `1bundesliga` (
  `teamid` int(11) NOT NULL,
  `teamname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `1bundesliga`
--

INSERT INTO `1bundesliga` (`teamid`, `teamname`) VALUES
(1, 'BVB'),
(2, 'FC Bayern München'),
(3, 'Werder Bremen'),
(4, 'Eintracht Frankfurt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `securitytokens`
--

CREATE TABLE `securitytokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `securitytoken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `securitytokens`
--

INSERT INTO `securitytokens` (`id`, `user_id`, `identifier`, `securitytoken`, `created_at`) VALUES
(1, 1, '342debd07fe50e59c37588872e5a7c9e', '10038d300c436b801e2842848a8253c7207651cc', '2017-09-22 13:43:40'),
(2, 1, 'b7a61092afbce4cb231536fb3985af76', '752bcd63c2a47fcb03de64cf36d0a958aeec6639', '2017-09-22 13:44:50'),
(3, 1, '7779373101aae4662e106ef3c99fc1d8', '172ea90e7e7ec6bb740d907ada564443e07587f2', '2017-09-22 13:47:28'),
(4, 1, '08c404b2c99635bfb8a46c7b63ad9964', '69cd17bcb8a3cd1da2b34d6d0134fc30177704ca', '2017-09-22 13:55:23');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(1, 'og@og.com', '$2y$10$.vLIalX82mKutomfMr5t1e8Wo9NF9IivZ9GCMUcbh/T5Q2xQx054K', '', '', '2017-09-22 12:47:07', NULL),
(2, 'og@og.og', '$2y$10$6V.Tmb9BzkYq.1pyv5uh8.ixrQPaIkCAeP3iWHGN5uA2E95HAqP9G', '', '', '2017-09-22 13:09:30', NULL),
(3, 'og@og.ch', '$2y$10$rh2HyG9vYuYqL8J1eYbEeOiS9uEVdVMQYx/JyLoLC7hPwP.it2IFm', '', '', '2017-09-22 13:10:26', NULL),
(4, 'nb@nb.nb', '$2y$10$ok4gNYuCERWXs6uSIxtDduDTN/5rHpqoSX2oTgKq0TkeIRj6DQjpe', '', '', '2017-09-22 13:11:03', NULL),
(5, 'nb@nb.com', '$2y$10$sWOSpWiIPclSdwUanDoS8eTGKxjWLG9mqSEbozVSvBMVGXhgWMPbm', '', '', '2017-09-22 13:12:29', NULL),
(6, 'ss@ss.ss', '$2y$10$oSNpNWlcCFknpY0cFrl5xeIHQM.gYvk5gEdB4CH0qElrHe457GrLe', '', '', '2017-09-22 13:13:02', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werderbremen`
--

CREATE TABLE `werderbremen` (
  `spielid` int(11) NOT NULL,
  `Datum` varchar(10) DEFAULT NULL,
  `Ort` varchar(4) DEFAULT NULL,
  `Gegner` varchar(15) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL,
  `teamid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `werderbremen`
--

INSERT INTO `werderbremen` (`spielid`, `Datum`, `Ort`, `Gegner`, `teamid`) VALUES
(1, '03.11.2017', 'Gast', 'E. Frankfurt', 3),
(2, '19.11.2017', 'Heim', 'Hannover 96', 3),
(3, '25.11.2017', 'Gast', 'RB Leipzig', 3),
(4, '02.12.2017', 'Heim', 'VfB Stuttgart', 3),
(5, '09.12.2017', 'Gast', 'Bor. Dortmund', 3),
(6, '12.12.2017', 'Gast', 'Bay. Leverkusen', 3),
(7, '16.12.2017', 'Heim', '1.FSV Mainz 05', 3),
(8, '13.01.2018', 'Heim', 'TSG Hoffenheim', 3),
(9, '20.01.2018', 'Gast', 'Bayern M?nchen', 3),
(10, '27.01.2018', 'Heim', 'Hertha BSC', 3),
(11, '03.02.2018', 'Gast', 'FC Schalke 04', 3),
(12, '10.02.2018', 'Heim', 'VfL Wolfsburg', 3),
(13, '17.02.2018', 'Gast', 'SC Freiburg', 3),
(14, '24.02.2018', 'Heim', 'Hamburger SV', 3),
(15, '03.03.2018', 'Gast', 'Bor. M\'gladbach', 3),
(16, '10.03.2018', 'Heim', '1.FC K?ln', 3),
(17, '17.03.2018', 'Gast', 'FC Augsburg', 3),
(18, '31.03.2018', 'Heim', 'E. Frankfurt', 3),
(19, '07.04.2018', 'Gast', 'Hannover 96', 3),
(20, '14.04.2018', 'Heim', 'RB Leipzig', 3),
(21, '21.04.2018', 'Gast', 'VfB Stuttgart', 3),
(22, '28.04.2018', 'Heim', 'Bor. Dortmund', 3),
(23, '05.05.2018', 'Heim', 'Bay. Leverkusen', 3),
(24, '12.05.2018', 'Gast', '1.FSV Mainz 05', 3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `1bundesliga`
--
ALTER TABLE `1bundesliga`
  ADD PRIMARY KEY (`teamid`);

--
-- Indizes für die Tabelle `securitytokens`
--
ALTER TABLE `securitytokens`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `werderbremen`
--
ALTER TABLE `werderbremen`
  ADD PRIMARY KEY (`spielid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `1bundesliga`
--
ALTER TABLE `1bundesliga`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `securitytokens`
--
ALTER TABLE `securitytokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `werderbremen`
--
ALTER TABLE `werderbremen`
  MODIFY `spielid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
