-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Dec 17. 10:03
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szavak`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szavak`
--

CREATE TABLE `szavak` (
  `id` int(11) NOT NULL,
  `magyar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finn` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `szavak`
--

INSERT INTO `szavak` (`id`, `magyar`, `angol`, `finn`) VALUES
(1, 'Ablak', 'Window', 'Ikkuna'),
(2, 'Ajtó', 'Door', 'Ovi'),
(3, 'Alma', 'Apple', 'Omena'),
(4, 'Ananász', 'Pineapple', 'Ananas'),
(5, 'Ajándék', 'Gift', 'Lahja'),
(6, 'Asztal', 'Table', 'Pöytä'),
(7, 'Arrogáns', 'Arrogant', 'Ylimielinen'),
(8, 'Akció', 'Action', 'Toiminta'),
(9, 'Egér', 'Mouse', 'Hiiri'),
(10, 'Pulcsi', 'Jumper', 'Jumpperi'),
(11, 'Póló', 'Polo', 'Polo'),
(12, 'Ing', 'Shirt', 'Paita'),
(13, 'Zakó', 'Jacket', 'Takki'),
(14, 'Öltöny', 'Suit', 'Puku'),
(15, 'Számítógép', 'Computer', 'Tietokone'),
(16, 'Laptop', 'Laptop', 'Kannettava tietokone'),
(17, 'Tábla', 'Blackboard', 'Liitutaulu'),
(18, 'Szék', 'Chair', 'Tuoli'),
(19, 'Mennyezet', 'Ceiling', 'Katto'),
(20, 'Monitor', 'Monitor', 'Monitori'),
(21, 'Filctoll', 'Felt-tip pen', 'Huopakynä'),
(22, 'Fogas', 'Catch', 'Saada kiinni'),
(23, 'Szekrény', 'Cabinet', 'Kaappi'),
(24, 'Hangerő', 'Volume', 'Äänenvoimakkuus'),
(25, 'Fényerő', 'Brightness', 'Kirkkaus'),
(26, 'Robbanás', 'Explosion', 'Räjähdys'),
(27, 'Szappan', 'Soap', 'Saippua'),
(28, 'Csap', 'Tap', 'Napauta'),
(29, 'Képkeret', 'Picture frame', 'Kuvakehys'),
(30, 'Billentyűzet', 'Keyboard', 'Näppäimistö'),
(31, 'Időjárás', 'Weather', 'Sää'),
(32, 'Parketta', 'Floor', 'Lattia'),
(33, 'Iskolatáska', 'School bag', 'Koululaukku'),
(34, 'Karóra', 'Watch', 'Katsella'),
(35, 'Radiátor', 'Radiator', 'Jäähdytin'),
(36, 'Elem', 'Element', 'Elementti'),
(37, 'Fenyőfa', 'Pine tree', 'mänty'),
(38, 'Tölgyfa', 'Oak tree', 'tammi'),
(39, 'Nyírfa', 'Birch', 'Koivu'),
(40, 'Festmény', 'Painting', 'Maalaus'),
(41, 'Király', 'King', 'kuningas'),
(42, 'Kilincs', 'Door handle', 'Ovenkahva'),
(43, 'Háztető', 'Roof', 'Katto'),
(44, 'Kémény', 'Hard', 'Kovaa'),
(45, 'Nyílászáró', 'Doors and windows', 'Ovet ja ikkunat'),
(46, 'Lámpa', 'Lamp', 'Lamppu'),
(47, 'Zseblámpa', 'Flashlight', 'Taskulamppu'),
(48, 'Antenna', 'Antenna', 'Antenni'),
(49, 'Fenyőtüske', 'Pine thorns', 'Männyn piikkejä'),
(50, 'Tankönyv', 'School book', 'Koulukirja'),
(51, 'Nagyító', 'Magnifying glass', 'Suurennuslasi'),
(52, 'Újságpapír', 'Newsprint', 'Sanomalehtipaperi'),
(53, 'Óramutató', 'Clockwise', 'Myötäpäivään'),
(54, 'Akkumlátor', 'Battery', 'Akku'),
(55, 'Töltőkábel', 'Charging cable', 'Latauskaapeli'),
(56, 'Órarend', 'Timetable', 'Aikataulu'),
(57, 'Banánfa', 'Banana tree', 'Banaanipuu'),
(58, 'Projektor', 'Projector', 'Projektori');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `szavak`
--
ALTER TABLE `szavak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `szavak`
--
ALTER TABLE `szavak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
