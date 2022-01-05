-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 05. 19:44
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

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
  `id` int(8) NOT NULL,
  `szo` varchar(256) NOT NULL,
  `nyelv` varchar(256) NOT NULL,
  `nehezseg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `szavak`
--

INSERT INTO `szavak` (`id`, `szo`, `nyelv`, `nehezseg`) VALUES
(1, 'ablak', 'magyar', 'konnyu'),
(2, 'ajtó', 'magyar', 'kozepes'),
(3, 'alma', 'magyar', 'konnyu'),
(4, 'ananász', 'magyar', 'kozepes'),
(5, 'ajándék', 'magyar', 'nehez'),
(6, 'asztal', 'magyar', 'kozepes'),
(7, 'arrogáns', 'magyar', 'nehez'),
(8, 'akció', 'magyar', 'kozepes'),
(9, 'egér', 'magyar', 'konnyu'),
(10, 'pulcsi', 'magyar', 'nehez'),
(11, 'póló', 'magyar', 'kozepes'),
(12, 'ing', 'magyar', 'konnyu'),
(13, 'zakó', 'magyar', 'kozepes'),
(14, 'öltöny', 'magyar', 'kozepes'),
(15, 'számítógép', 'magyar', 'nehez'),
(16, 'laptop', 'magyar', 'kozepes'),
(17, 'tábla', 'magyar', 'kozepes'),
(18, 'szék', 'magyar', 'kozepes'),
(19, 'mennyezet', 'magyar', 'kozepes'),
(20, 'monitor', 'magyar', 'kozepes'),
(21, 'filctoll', 'magyar', 'nehez'),
(22, 'fogas', 'magyar', 'kozepes'),
(23, 'szekrény', 'magyar', 'nehez'),
(24, 'hangerő', 'magyar', 'nehez'),
(25, 'fényerő', 'magyar', 'nehez'),
(26, 'robbanás', 'magyar', 'nehez'),
(27, 'szappan', 'magyar', 'kozepes'),
(28, 'csap', 'magyar', 'kozepes'),
(29, 'képkeret', 'magyar', 'kozepes'),
(30, 'billentyűzet', 'magyar', 'nehez'),
(31, 'időjárás', 'magyar', 'nehez'),
(32, 'parketta', 'magyar', 'kozepes'),
(33, 'iskolatáska', 'magyar', 'nehez'),
(34, 'karóra', 'magyar', 'kozepes'),
(35, 'radiátor', 'magyar', 'nehez'),
(36, 'elem', 'magyar', 'konnyu'),
(37, 'fenyőfa', 'magyar', 'kozepes'),
(38, 'tölgyfa', 'magyar', 'nehez'),
(39, 'nyírfa', 'magyar', 'nehez'),
(40, 'festmény', 'magyar', 'nehez'),
(41, 'király', 'magyar', 'nehez'),
(42, 'kilincs', 'magyar', 'kozepes'),
(43, 'háztető', 'magyar', 'kozepes'),
(44, 'kémény', 'magyar', 'kozepes'),
(45, 'nyílászáró', 'magyar', 'nehez'),
(46, 'lámpa', 'magyar', 'kozepes'),
(47, 'zseblámpa', 'magyar', 'nehez'),
(48, 'antenna', 'magyar', 'konnyu'),
(49, 'fenyőtüske', 'magyar', 'nehez'),
(50, 'tankönyv', 'magyar', 'nehez'),
(51, 'nagyító', 'magyar', 'nehez'),
(52, 'újságpapír', 'magyar', 'nehez'),
(53, 'óramutató', 'magyar', 'nehez'),
(54, 'akkumlátor', 'magyar', 'nehez'),
(55, 'töltőkábel', 'magyar', 'nehez'),
(56, 'órarend', 'magyar', 'kozepes'),
(57, 'banánfa', 'magyar', 'kozepes'),
(58, 'projektor', 'magyar', 'nehez'),
(59, 'window', 'angol', 'kozepes'),
(60, 'door', 'angol', 'konnyu'),
(61, 'apple', 'angol', 'konnyu'),
(62, 'pineapple', 'angol', 'kozepes'),
(63, 'gift', 'angol', 'kozepes'),
(64, 'table', 'angol', 'konnyu'),
(65, 'arrogant', 'angol', 'kozepes'),
(66, 'action', 'angol', 'kozepes'),
(67, 'mouse', 'angol', 'konnyu'),
(68, 'jumper', 'angol', 'kozepes'),
(69, 'polo', 'angol', 'konnyu'),
(70, 'shirt', 'angol', 'konnyu'),
(71, 'jacket', 'angol', 'kozepes'),
(72, 'suit', 'angol', 'konnyu'),
(73, 'computer', 'angol', 'nehez'),
(74, 'laptop', 'angol', 'kozepes'),
(75, 'blackboard', 'angol', 'nehez'),
(76, 'chair', 'angol', 'kozepes'),
(77, 'ceiling', 'angol', 'kozepes'),
(78, 'monitor', 'angol', 'kozepes'),
(79, 'felt-tip pen', 'angol', 'kozepes'),
(80, 'catch', 'angol', 'konnyu'),
(81, 'cabinet', 'angol', 'kozepes'),
(82, 'volume', 'angol', 'kozepes'),
(83, 'brightness', 'angol', 'nehez'),
(84, 'explosion', 'angol', 'nehez'),
(85, 'soap', 'angol', 'konnyu'),
(86, 'tap', 'angol', 'konnyu'),
(87, 'picture frame', 'angol', 'nehez'),
(88, 'keyboard', 'angol', 'nehez'),
(89, 'weather', 'angol', 'kozepes'),
(90, 'floor', 'angol', 'kozepes'),
(91, 'school bag', 'angol', 'nehez'),
(92, 'watch', 'angol', 'kozepes'),
(93, 'radiator', 'angol', 'kozepes'),
(94, 'element', 'angol', 'konnyu'),
(95, 'pine tree', 'angol', 'kozepes'),
(96, 'oak tree', 'angol', 'kozepes'),
(97, 'birch', 'angol', 'kozepes'),
(98, 'painting', 'angol', 'kozepes'),
(99, 'king', 'angol', 'kozepes'),
(100, 'door handle', 'angol', 'kozepes'),
(101, 'roof', 'angol', 'konnyu'),
(102, 'hard', 'angol', 'konnyu'),
(103, 'doors and windows', 'angol', 'nehez'),
(104, 'lamp', 'angol', 'kozepes'),
(105, 'flashlight', 'angol', 'nehez'),
(106, 'antenna', 'angol', 'konnyu'),
(107, 'pine thorns', 'angol', 'kozepes'),
(108, 'school book', 'angol', 'nehez'),
(109, 'magnifying glass', 'angol', 'nehez'),
(110, 'newsprint', 'angol', 'kozepes'),
(111, 'clockwise', 'angol', 'nehez'),
(112, 'battery', 'angol', 'kozepes'),
(113, 'charging cable', 'angol', 'nehez'),
(114, 'timetable', 'angol', 'kozepes'),
(115, 'banana tree', 'angol', 'kozepes'),
(116, 'projector', 'angol', 'kozepes');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
