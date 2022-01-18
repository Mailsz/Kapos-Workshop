-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 05. 19:31
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `akasztofa`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok`
(
    `id`     int(11) NOT NULL,
    `nev`    varchar(255) NOT NULL,
    `email`  varchar(255) NOT NULL,
    `jelszo` char(128)    NOT NULL,
    `salt`   varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `nev`, `email`, `jelszo`, `salt`)
VALUES (1, 'admin', 'admin@admin.admin', '394ca4974539cec914e9c5e86b131ff094874b6eeaa2f7c6f6a020dca2f64c5c',
        'e0db587688738c6a3df5deb97d89ebf6cb9499bccab710720390292899e640e90f057f3a3131854cd1366151e6619a9dbeca7a0d821cd79e1f3adffbd80faee1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szavak`
--

CREATE TABLE `szavak`
(
    `id`       int(11) NOT NULL,
    `szo`      varchar(255) NOT NULL,
    `nyelv`    varchar(255) NOT NULL,
    `nehezseg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `szavak`
--

INSERT INTO `szavak` (`id`, `szo`, `nyelv`, `nehezseg`)
VALUES (1, 'window', 'angol', 'kozepes'),
       (2, 'door', 'angol', 'konnyu'),
       (3, 'apple', 'angol', 'konnyu'),
       (4, 'pineapple', 'angol', 'kozepes'),
       (5, 'gift', 'angol', 'kozepes'),
       (6, 'table', 'angol', 'konnyu'),
       (7, 'arrogant', 'angol', 'kozepes'),
       (8, 'action', 'angol', 'kozepes'),
       (9, 'mouse', 'angol', 'konnyu'),
       (10, 'jumper', 'angol', 'kozepes'),
       (11, 'polo', 'angol', 'konnyu'),
       (12, 'shirt', 'angol', 'konnyu'),
       (13, 'jacket', 'angol', 'kozepes'),
       (14, 'suit', 'angol', 'konnyu'),
       (15, 'computer', 'angol', 'nehez'),
       (16, 'laptop', 'angol', 'kozepes'),
       (17, 'blackboard', 'angol', 'nehez'),
       (18, 'chair', 'angol', 'kozepes'),
       (19, 'ceiling', 'angol', 'kozepes'),
       (20, 'monitor', 'angol', 'kozepes'),
       (21, 'felt-tip pen', 'angol', 'kozepes'),
       (22, 'catch', 'angol', 'konnyu'),
       (23, 'cabinet', 'angol', 'kozepes'),
       (24, 'volume', 'angol', 'kozepes'),
       (25, 'brightness', 'angol', 'nehez'),
       (26, 'explosion', 'angol', 'nehez'),
       (27, 'soap', 'angol', 'konnyu'),
       (28, 'tap', 'angol', 'konnyu'),
       (29, 'picture frame', 'angol', 'nehez'),
       (30, 'keyboard', 'angol', 'nehez'),
       (31, 'weather', 'angol', 'kozepes'),
       (32, 'floor', 'angol', 'kozepes'),
       (33, 'school bag', 'angol', 'nehez'),
       (34, 'watch', 'angol', 'kozepes'),
       (35, 'radiator', 'angol', 'kozepes'),
       (36, 'element', 'angol', 'konnyu'),
       (37, 'pine tree', 'angol', 'kozepes'),
       (38, 'oak tree', 'angol', 'kozepes'),
       (39, 'birch', 'angol', 'kozepes'),
       (40, 'painting', 'angol', 'kozepes'),
       (41, 'king', 'angol', 'kozepes'),
       (42, 'door handle', 'angol', 'kozepes'),
       (43, 'roof', 'angol', 'konnyu'),
       (44, 'hard', 'angol', 'konnyu'),
       (45, 'doors and windows', 'angol', 'nehez'),
       (46, 'lamp', 'angol', 'kozepes'),
       (47, 'flashlight', 'angol', 'nehez'),
       (48, 'antenna', 'angol', 'konnyu'),
       (49, 'pine thorns', 'angol', 'kozepes'),
       (50, 'school book', 'angol', 'nehez'),
       (51, 'magnifying glass', 'angol', 'nehez'),
       (52, 'newsprint', 'angol', 'kozepes'),
       (53, 'clockwise', 'angol', 'nehez'),
       (54, 'battery', 'angol', 'kozepes'),
       (55, 'charging cable', 'angol', 'nehez'),
       (56, 'timetable', 'angol', 'kozepes'),
       (57, 'banana tree', 'angol', 'kozepes'),
       (58, 'projector', 'angol', 'kozepes');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
    ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `szavak`
--
ALTER TABLE `szavak`
    ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `szavak`
--
ALTER TABLE `szavak`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
