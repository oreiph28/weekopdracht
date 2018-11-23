-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 20 nov 2018 om 20:38
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oreiph_blog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `blog` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `blog`
--

INSERT INTO `blog` (`ID`, `name`, `title`, `email`, `blog`) VALUES
(1, '1', '2', '4', '3'),
(2, '1', '2', '4', '3'),
(3, 'ornelio', 'reiph', 'oreiph@hotmail.com', 'gbybeybetybebbhyrehyethtejhtu'),
(4, 'nubiano', 'reiphree', 'oreiph@hotmail.comghghh', 'dit is een bericht'),
(5, 'php', 'mysql', 'php@sql.nl', 'a de opdrachtregel of in '),
(6, 'php', 'mysql', 'php@sql.nl', 'en versie 6 is nooit verschenen. Er is wel een aanze'),
(7, 'php', 'mysql', 'php@sql.nl', 'PHP werd in 1994 ontwikkeld door Rasmus Lerdorf. De eerste publieke versie werd uitgegeven in 1995, alsook versie 2. Zeev Suraski en Andi Gutmans, twee IsraÃ«lische ontwikkelaars aan de Technion IIT, herschreven de parser in 1997 en vormden de basis voor PHP 3 en veranderde hiermee de naam in PHP: Hypertext Preprocessor. Het ontwikkelteam bracht PHP/FI 2 officieel in november 1997 uit, na maanden van beta-tests. Hierna begon de publieke test van PHP 3 en in juni 1998 werd PHP 3 offic'),
(8, 'php', 'mysql', 'php@sql.nl', ' 22 mei 2000 werd PHP 4, aangedreven door Zend Engine 1.0, uitgebracht. Op 13 juli 2004 werd PHP 5 uitgebracht, aangedreven door de nieuwe Zend Engine II.\r\n\r\nOndanks dat PHP 5 al sinds 2004 beschikbaar is, gebruiken veel webservers pas sinds begin 2007 PHP 5, omdat eerdere versies niet stabiel genoeg waren. De meest recente stabiele versie is 5.6.29 (8 december 2016). Dit is tevens de laatste release van PHP 5 onder actieve ondersteuning. Vanaf 2017 tot en met 2018 zullen voor PHP 5.6 alleen nog beveiligingsaanpassingen gedaan worden.\r\n\r\nDe belangrijkste kenmerken van PHP 5 zijn het verbeterde objectgeoriÃ«nteerd programmeren, de hogere snelheid, de mogelijkheid om SQLite aan te spreken en de vernieuwde Extensible Markup language (XML)-bibliotheek. Overigens zit er nog een flinke ontwikkeling tussen de versie 5.0 uit 2004 en de laatste versie 5.6.\r\n\r\nOp 3 december 2015 kwam PHP 7.0.0 beschikbaar, met sterk verbeterde snelheid en nieuwe functionaliteiten waaronder typehinting op scalaire types en returntypes.'),
(9, 'php', 'mysql', 'php@sql.nl', ' 22 mei 2000 werd PHP 4, aangedreven door Zend Engine 1.0, uitgebracht. Op 13 juli 2004 werd PHP 5 uitgebracht, aangedreven door de nieuwe Zend Engine II.\r\n\r\nOndanks dat PHP 5 al sinds 2004 beschikbaar is, gebruiken veel webservers pas sinds begin 2007 PHP 5, omdat eerdere versies niet stabiel genoeg waren. De meest recente stabiele versie is 5.6.29 (8 december 2016). Dit is tevens de laatste release van PHP 5 onder actieve ondersteuning. Vanaf 2017 tot en met 2018 zullen voor PHP 5.6 alleen nog beveiligingsaanpassingen gedaan worden.\r\n\r\nDe belangrijkste kenmerken van PHP 5 zijn het verbeterde objectgeoriÃ«nteerd programmeren, de hogere snelheid, de mogelijkheid om SQLite aan te spreken en de vernieuwde Extensible Markup language (XML)-bibliotheek. Overigens zit er nog een flinke ontwikkeling tussen de versie 5.0 uit 2004 en de laatste versie 5.6.\r\n\r\nOp 3 december 2015 kwam PHP 7.0.0 beschikbaar, met sterk verbeterde snelheid en nieuwe functionaliteiten waaronder typehinting op scalaire types en returntypes.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
