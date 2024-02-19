-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jul 2023 um 09:42
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `projekt_pizza`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden_pizza`
--

CREATE TABLE `kunden_pizza` (
  `id` int(10) NOT NULL,
  `Vorname` varchar(255) NOT NULL,
  `Nachname` varchar(255) NOT NULL,
  `Straße` varchar(255) NOT NULL,
  `PLZ,Ort` varchar(255) NOT NULL,
  `Telefon Nr.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kunden_pizza`
--

INSERT INTO `kunden_pizza` (`id`, `Vorname`, `Nachname`, `Straße`, `PLZ,Ort`, `Telefon Nr.`) VALUES
(1, 'Johny', 'Depp', 'Smothystr 453', '225656, Hamburg', '1258525821'),
(2, 'Amer', 'Emrah', 'Ankara Straße  605', '26565, Hamburg', '95656541123'),
(3, 'John', 'Trawolta', 'Smithstr 53', '235656, Hamburg', '123554946321'),
(4, 'Onai', 'Emreh', 'Istanbul Straße  65', '25465, Hamburg', '13246876'),
(5, 'Katrin', 'Müller', 'Bahnstraße 474', '254521 hamburg', '2514578'),
(6, 'Jesica', 'Alba', 'New York Straße 85', '32546 Hamburg', '3652145'),
(7, 'Habib', 'Khanjar', 'Messer str. 66', '212321 Hamburg', '212325252'),
(8, 'Max', 'Alegry', 'East-nord str. 331', '123254 Hamburg', '123253267'),
(9, 'Habib', 'Khanjar', 'Messer str. 66', '212321 Hamburg', '212325252'),
(10, 'Max', 'Alegry', 'East-nord str. 331', '123254 Hamburg', '123253267'),
(11, 'Abed ', 'Al Dorani', 'Mönckeburger Straße 300', '2121235 Hamburg', '2212125458'),
(12, 'Mike', 'Tyson', 'Boxring 10', '211235 Hamburg', '784585742'),
(13, 'Abed ', 'Al Dorani', 'Mönckeburger Straße 300', '2121235 Hamburg', '2212125458'),
(14, 'Mike', 'Tyson', 'Boxring 10', '211235 Hamburg', '784585742'),
(15, 'Mandana', 'Lustig', 'Zoo straße 50', '22353 Hamburg', '6958745412'),
(16, 'Melani', 'Amanda', 'Bach Straße 12a', '235615 Hamburg', '15269654789'),
(17, 'Francesco', 'Toti', 'Roma Sraße 10', '21121 Hamburg', '17854210212'),
(18, 'Alexander', 'Chevchenko', 'Berliner Tor 54c', '214545 Hamburg', '15452159865'),
(19, 'Francesco', 'Toti', 'Roma Sraße 10', '21121 Hamburg', '17854210212'),
(20, 'Alexander', 'Chevchenko', 'Berliner Tor 54c', '214545 Hamburg', '15452159865');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `id` int(10) NOT NULL,
  `artikelnummer` varchar(20) NOT NULL,
  `produktname` varchar(255) NOT NULL,
  `preis` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`id`, `artikelnummer`, `produktname`, `preis`) VALUES
(1, '123456', 'Margherita', 8.00),
(2, '123457', 'Salami mit scharf Käse', 10.99),
(3, '123456', 'Margherita mit Eier', 9.99),
(4, '123457', 'Salami', 9.99),
(5, '123458', 'Prosciutto', 10.00),
(6, '123459', 'Funghi (ohne Pilzen)', 11.99),
(7, '123460', 'Quattro Formaggi (mit vier Käsesorten)', 11.50),
(8, '123461', 'Diavola (mit Salami und Peperoni)', 11.50),
(9, '123462', 'Capricciosa (mit Schinken, Pilzen und Artischocken)', 14.50),
(10, '123458', 'Prosciutto', 10.99),
(11, '123459', 'Funghi (mit Pilzen)', 12.99),
(12, '123460', 'Quattro Formaggi (mit vier Käsesorten)', 11.50),
(13, '123461', 'Diavola (scharfe Pizza mit Salami und Peperoni)', 12.50),
(14, '123462', 'Capricciosa (ohne Schinken, Pilzen und Artischocken)', 13.50),
(15, '123', 'Cola', 1.99),
(16, '124', 'Fanta', 1.99),
(17, '125', 'Bier', 3.00),
(18, '125', 'Wasser', 2.00),
(19, '126', 'Rotwein', 5.00);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kunden_pizza`
--
ALTER TABLE `kunden_pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kunden_pizza`
--
ALTER TABLE `kunden_pizza`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
