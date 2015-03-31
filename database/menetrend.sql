-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2015. Már 31. 13:49
-- Szerver verzió: 5.5.27
-- PHP verzió: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `menetrend`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `idopontok`
--

CREATE TABLE IF NOT EXISTS `idopontok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utvonalid` smallint(6) NOT NULL,
  `jaratid` smallint(6) NOT NULL,
  `telepulesid` smallint(6) NOT NULL,
  `idopont` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- A tábla adatainak kiíratása `idopontok`
--

INSERT INTO `idopontok` (`id`, `utvonalid`, `jaratid`, `telepulesid`, `idopont`) VALUES
(1, 1, 1, 1, '09:00:00'),
(2, 1, 1, 2, '09:10:00'),
(3, 1, 1, 7, '11:00:00'),
(4, 1, 2, 1, '14:00:00'),
(5, 1, 2, 2, '14:10:00'),
(6, 1, 2, 7, '16:00:00'),
(7, 1, 3, 1, '16:10:00'),
(8, 1, 3, 2, '16:20:00'),
(9, 1, 3, 7, '17:00:00'),
(10, 1, 4, 1, '17:30:00'),
(11, 1, 4, 2, '17:40:00'),
(12, 1, 4, 7, '18:30:00'),
(13, 1, 5, 1, '19:30:00'),
(14, 1, 5, 2, '19:40:00'),
(15, 1, 5, 7, '20:40:00'),
(16, 2, 1, 2, '08:00:00'),
(17, 2, 1, 5, '08:25:00'),
(18, 2, 1, 8, '08:45:00'),
(19, 2, 2, 2, '11:00:00'),
(20, 2, 2, 5, '11:30:00'),
(21, 2, 2, 8, '12:10:00'),
(22, 2, 3, 2, '14:20:00'),
(23, 2, 3, 5, '14:40:00'),
(24, 2, 3, 8, '15:20:00'),
(25, 2, 3, 2, '16:25:00'),
(26, 2, 4, 5, '16:49:00'),
(27, 2, 4, 8, '17:24:00'),
(28, 2, 4, 5, '16:55:00'),
(30, 2, 5, 2, '19:55:00'),
(31, 2, 5, 5, '20:15:00'),
(32, 2, 5, 8, '20:55:00'),
(33, 3, 1, 1, '09:00:00'),
(35, 3, 1, 9, '10:00:00'),
(36, 3, 1, 10, '10:25:00'),
(37, 3, 2, 1, '12:00:00'),
(38, 3, 2, 9, '13:10:00'),
(39, 3, 2, 10, '13:35:00'),
(40, 3, 3, 1, '14:00:00'),
(41, 3, 3, 9, '15:10:00'),
(42, 3, 3, 10, '15:30:00'),
(43, 3, 4, 1, '17:00:00'),
(44, 3, 4, 9, '17:35:00'),
(45, 3, 4, 10, '18:30:00'),
(46, 4, 6, 1, '09:00:00'),
(47, 4, 6, 14, '09:25:00'),
(48, 4, 6, 13, '10:00:00'),
(49, 4, 6, 16, '10:25:00'),
(50, 4, 6, 15, '10:49:00'),
(51, 4, 6, 12, '11:30:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `lead` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- A tábla adatainak kiíratása `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `lead`) VALUES
(1, 'Beszélő buszok a Kapos Volán járatain', 'Csaknem 750 millió forintból épít ki utastájékoztató rendszert és teszi korszerűbbé járatait a Dél-Dunántúli Közlekedési Központ leánytársasága, a Kapos Volán Zrt. A fejlesztések az év végéig megvalósulnak – hangzott el a keddi sajtótájékoztatón. Bebics János vezérigazgató elmondta: Még 2010 májusában írták alá a 744,6 millió forint értékű szerződést a regionális fejlesztési ügynökséggel, a vissza nem térítendő támogatás összege 633 millió forint. A projekt megvalósítását jogszabályi változások és eredménytelen közbeszerzési eljárások is nehezítették, ezért a több mint négy éves csúszás.\r\n\r\nA fejlesztés keretében a társaság valamennyi, 230 autóbuszára korszerű első-és oldal kijelző táblákat, valamint beltéri hangos utastájékoztatási rendszert telepítenek, a pályaudvarokon, köztük a kaposvárin is elektronikus információs táblákat helyeznek el, ezek közül néhány napelemes energiaforrásról működik majd. A járműveken fedélzeti számítógép vezérli a kijelzőket, az adatokat pedig továbbítja a központnak, így minden esemény nyomonkövethető lesz.\r\n\r\nA fejlesztések az év végéig megvalósulnak.', '2014-11-11', ''),
(2, 'Használt buszokkal erősít a Kapos Volán ', 'A modernizált járgányok nincsenek öt évesek és korábban Németországban közlekedtek.\r\n\r\nÖsszesen húsz használt, de nagyon jó állapotú buszt állítanak szolgálatba Baranya, Somogy és Tolna megyei közlekedési táraságok ez év végéig - közölte a Dél-dunántúli Közlekedési Központ (DDKK) szerdán az MTI-vel.\r\n\r\nA központ közleménye szerint a megyéken belüli regionális közlekedést szolgáló Irisbus Crossway típusú járművek beszerzését a DDKK leánytársaságai nyílt közbeszerzési eljárás keretében bonyolították le, a beruházás értéke 810 millió forint.\r\n\r\nAz öt évnél fiatalabb, egyidejűleg 75 utast szállító, klimatizált és a kor követelményeinek megfelelő biztonságtechnikai felszereltséggel ellátott járművek korábban Németországban közlekedtek. A buszok közül tíz a Pannon Volán Zrt., öt-öt a Gemenc Volán Zrt. és a Kapos Volán Zrt. járműflottáját erősíti.', '2014-11-25', ''),
(3, 'Fejlesztett a Kapos Volán ', 'Próbaüzem után jobb lesz az utastájékoztató- és a forgalomirányítási rendszer is.\r\n\r\nA társaság utasainak pontosabb, részletesebb tájékoztatásáért és a személyszállítás szolgáltatási színvonalának javítása érdekében ilyen fejlesztéseket eszközölt a Kapos Volán Zrt.:\r\n\r\n- az utasforgalom dinamikus kiszolgálásának és tájékoztatásának fejlesztése, nyilvános informatikai eszközök beszerzése, kiépítése\r\n\r\n- autóbusz-közlekedéshez kapcsolódó forgalomirányítási rendszer fejlesztése, új forgalomirányítási rendszer kiépítése\r\n\r\n- az autóbuszokon digitális homloktáblák és oldalkijelzők kerültek elhelyezésre, melyek az utazási viszonylatról adnak tájékoztatást\r\n\r\n- hangos utastájékoztatási rendszer került kiépítésre a járatokon, mely a járat aktuális helyzete alapján tájékoztatja az utasokat a megállóhelyekről és egyéb információkról\r\n\r\n- az autóbusz-állomásokon a várótermekben és az autóbuszok induló kocsiállásain digitális kijelzőket helyezett el, amelyeken információk olvashatóak az induló és - a forgalmi körülményekre figyelemmel – a járatok valós érkezési adatairól. A Dél-dunántúli Közlekedési Központ Zrt. leánytársasága a KAPOS VOLÁN Zrt. 2009-ben benyújtott és 2010-ben elnyert DDOP-5.1.2/B-09-2009-0001 azonosító számú részben Európai Unió által biztosított fejlesztési forrásokból megvalósuló pályázatában foglalt feladatokat megvalósította. A fejlesztés pályázat keretében elszámolható összes költsége 744.610.000 Ft, melyből a vissza nem térítendő támogatás összege 632.918.500 Ft, az összes költség 85%-a.', '2015-02-12', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` varchar(25) NOT NULL,
  `title` varchar(60) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`) VALUES
('bemutatkozas', 'Bemutatkozás', ' <p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n  </p>\r\n  <p>\r\n    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.\r\n  </p>\r\n  <p>\r\n    Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.\r\n  </p>\r\n  <p>\r\n    Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.\r\n  </p>'),
('kapcsolat', 'Kapcsolat', '7400 Kaposvár, Füredi u. 180.<br>\r\n\r\nTelefon: +36 82/506-111<br>\r\n\r\nFax: +36 82/419-832<br>\r\n\r\nE-mail: kaposvolan@kaposvolan.hu\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `telepulesek`
--

CREATE TABLE IF NOT EXISTS `telepulesek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- A tábla adatainak kiíratása `telepulesek`
--

INSERT INTO `telepulesek` (`id`, `nev`) VALUES
(1, 'Kaposvár'),
(2, 'Kaposfüred'),
(3, 'Somogyaszaló '),
(4, 'Mernye'),
(5, 'Mernyeszentmiklós'),
(6, 'Polány'),
(7, 'Felsőmocsolád'),
(8, 'Ecseny'),
(9, 'Gamás'),
(10, 'Somogybabod'),
(11, 'Pécs'),
(12, 'Dombóvár'),
(13, 'Baté'),
(14, 'Taszár'),
(15, 'Attala'),
(16, 'Mosdós');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `upass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `uname`, `upass`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'tegzesdavid', 'tegzesdavid01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `utvonalak`
--

CREATE TABLE IF NOT EXISTS `utvonalak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utvonalid` smallint(6) NOT NULL,
  `sorszam` smallint(6) NOT NULL,
  `telepulesid` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- A tábla adatainak kiíratása `utvonalak`
--

INSERT INTO `utvonalak` (`id`, `utvonalid`, `sorszam`, `telepulesid`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 7),
(4, 2, 1, 2),
(5, 2, 2, 5),
(6, 2, 3, 8),
(7, 3, 1, 1),
(8, 3, 2, 9),
(9, 3, 3, 10),
(10, 4, 1, 1),
(11, 4, 2, 14),
(12, 4, 3, 13),
(13, 4, 4, 16),
(14, 4, 5, 15),
(15, 4, 6, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
