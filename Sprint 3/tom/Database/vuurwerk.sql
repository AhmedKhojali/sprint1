-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2019 om 15:05
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

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
  `prijs` double(5,2) NOT NULL,
  `aantal` int(11) NOT NULL,
  `website` varchar(30) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`naam`, `prijs`, `aantal`, `website`, `url_img`, `categorie`) VALUES
('ACCELERATOR', 239.00, 8, 'accelerator.html', 'accelerator.jpg', 'knalvuurwerk'),
('ASIAN BUDGET', 149.00, 12, 'asianbudget.html', 'asianbudget.jpg', 'knalvuurwerk'),
('DESPERADO', 99.00, 20, 'desperado.html', 'desperado.jpg', 'siervuurwerk'),
('HERMANOS', 139.00, 15, 'hermanos.html', 'hermanos.jpg', 'siervuurwerk'),
('PIJLEN', 99.00, 15, 'pijlen.html', 'pijlen.jpg', 'siervuurwerk'),
('RATELBAND', 5.00, 100, 'ratelband.html', 'ratelband.jpg', 'knalvuurwerk'),
('ST8MENT', 299.00, 20, 'st8ment.html', 'st8ment.jpg', 'siervuurwerk'),
('STARLIGHT', 169.00, 23, 'starlight.html', 'starlight.jpg', 'siervuurwerk'),
('ZGRAV PIJLEN', 44.00, 25, 'zgrav.html', 'zgrav.jpg', 'knalvuurwerk');

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
