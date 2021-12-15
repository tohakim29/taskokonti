-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Dez 2021 um 17:32
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `okonti`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `table_promo`
--

CREATE TABLE `table_promo` (
  `id` int(11) NOT NULL,
  `promo_num` varchar(255) NOT NULL,
  `expired` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_used` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `table_promo`
--

INSERT INTO `table_promo` (`id`, `promo_num`, `expired`, `order_id`, `date_created`, `date_used`) VALUES
(1, '2538568995614553', 1, 123456, '2021-12-15 19:31:16', '2021-12-15 19:31:40'),
(2, '9442161577810420', 0, 0, '2021-12-15 19:31:32', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `table_promo`
--
ALTER TABLE `table_promo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `table_promo`
--
ALTER TABLE `table_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
