-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2019 om 15:11
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `naam` varchar(50) NOT NULL,
  `Prijs` double(5,2) NOT NULL,
  `voorraad` int(11) NOT NULL,
  `Categorie` varchar(30) NOT NULL,
  `url_Afbeelding` varchar(100) NOT NULL,
  `weblink` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`naam`, `Prijs`, `voorraad`, `Categorie`, `url_Afbeelding`, `weblink`) VALUES
('Accelerator 2.0', 449.99, 10, 'siervuurwerk', '../images/accelerator.jpg', 'accelerator.html'),
('Asian Budget', 87.99, 10, 'knalvuurwerk', '../images/asianbudget.jpg', 'asianbudget.html'),
('Desperado', 99.99, 10, 'knalvuurwerk', '../images/desperado.jpg', 'desperado.html'),
('Hermanos', 139.99, 10, 'siervuurwerk', '../images/hermanos.jpg', 'hermanos.html'),
('Ratelband', 4.99, 10, 'knalvuurwerk', '../images/ratelband.jpg', 'ratelband.html'),
('St8ment', 119.99, 10, 'siervuurwerk', '../images/st8ment.jpg', 'st8ment.html'),
('Starlight', 59.99, 10, 'siervuurwerk', '../images/starlight.jpg', 'starlight.html'),
('Zgrav', 34.99, 10, 'knalvuurwerk', '../images/zgrav.jpg', 'zgrav.html');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
