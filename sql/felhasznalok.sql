-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Dec 21. 09:32
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
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jelszo` char(128) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `nev`, `email`, `jelszo`, `salt`) VALUES
(1, 'Akos', 'akos@yahoo.com', 'b2e07e7ca77417d08cfb45361438ceba4f6cbc07c52c182ec02e1355a5ceb34c', ''),
(2, 'david', 'hello@david.com', 'f3e2331835fa76b8cd7852d4845596c395dd80e12a179d5aac3a258bc9682d41', ''),
(3, 'Akos', 'akos@yahoo.comc', 'fda3089fd9ec0a8a7c8c0bb6cc70dad092f5f0e17ae647d19dfae1a4997cd2ed', ''),
(4, 'Péter', 'pater@a.com', '31deeefeaede88040e9b2d54ddc0168cb63e01c08dd4abcae7488709269b11f2', ''),
(5, 'Péter', 'akos@yahoo.comcc', '659e53278f18970675f06a7ed3f745dd802a5bf2a6091f6284376008a6a0d7af', 'c4c9d92a609f1e778dc4a0f9bbcc82b3944d9e91d28a5b3b2c5e0ac6a94a4db791563a921b7db087bbea42b1e797e643fcb6887c9474ef02de3e3a215afa4183');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
