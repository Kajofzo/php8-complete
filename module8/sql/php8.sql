-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 apr 2023 om 11:26
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php8`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `Merk` text NOT NULL,
  `Type` text NOT NULL,
  `Bouwjaar` year(4) NOT NULL,
  `Prijs` float NOT NULL,
  `Kleur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `Merk`, `Type`, `Bouwjaar`, `Prijs`, `Kleur`) VALUES
(1, 'Fiat\r\n', 'Multipla', 1998, 18752, 'red'),
(2, 'BMW', 'Isetta', 1955, 30000, 'blue'),
(3, 'Aston Martin ', 'V12 VANTAGE', 2005, 173086, 'british racing green'),
(4, 'Lexus', 'LFA', 2011, 500000, 'white'),
(5, 'Nissan', 'GT-R', 2009, 100000, 'orange'),
(6, 'Tesla', 'Model X', 2023, 123000, 'white'),
(7, 'Ford', 'Mustang', 1969, 90000, 'black'),
(8, 'Jaguar', 'E Type', 1963, 200000, 'green'),
(9, 'Ferrari', 'F40', 1990, 1500000, 'Red'),
(10, 'Lamborghini', 'Miura', 1966, 1698810, 'yellow');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
