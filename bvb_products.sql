-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Okt 2023 um 15:04
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
-- Datenbank: `bvb_products`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `image_url`) VALUES
(1, 'BVB Torwarthandschuhe', 'Hochwertige Torwarthandschuhe mit BVB-Logo und optimaler Passform für besten Grip.', 25.00, '/bvb-website/img/Torwarthandschuhe.jpg'),
(2, 'BVB Badetuch Emblem', 'Großes, weiches Badetuch mit BVB-Emblem. Ideal für den Strand, das Schwimmbad oder zu Hause.', 35.00, '/bvb-website/img/Badetuch.jpg'),
(3, 'BVB Bierkühler', 'Praktischer Bierkühler im BVB-Design. Hält Ihr Getränk kühl und zeigt gleichzeitig Ihre Vereinszugehörigkeit.', 14.00, '/bvb-website/img/Bierkuehler.jpg'),
(4, 'BVB Trikot 23/24', 'Offizielles BVB-Trikot für die Saison 23/24. Atmungsaktiv und komfortabel.', 90.00, '/bvb-website/img/Trikot.jpg'),
(5, 'BVB Soundtoaster', 'Einzigartiger Toaster, der beim Toasten den BVB-Fangesang spielt. Ein Muss für jeden Fan!', 50.00, '/bvb-website/img/Toaster.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
