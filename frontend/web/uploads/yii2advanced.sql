-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2014 at 06:15 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idMovil` int(12) NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `edad` int(3) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `urlFoto1` varchar(150) DEFAULT NULL,
  `lonCapturaFoto1Movil` text,
  `latCapturaFoto1Movil` text NOT NULL,
  `timeStampCapturaFoto1Movil` int(50) NOT NULL,
  `urlFoto2` text NOT NULL,
  `lonCapturaFoto2Movil` text NOT NULL,
  `latCapturaFoto2Movil` text NOT NULL,
  `timeStampCapturaFoto2Movil` text NOT NULL,
  `latCapturaFoto3Movil` text NOT NULL,
  `urlFoto3` text NOT NULL,
  `timeStampCapturaFoto3Movil` text NOT NULL,
  `urlFoto4` text NOT NULL,
  `lonCapturaFoto4Movil` text NOT NULL,
  `latCapturaFoto4Movil` text NOT NULL,
  `timeStampCapturaFoto4Movil` text NOT NULL,
  `urlVideo` text NOT NULL,
  `lonCapturaVideoMovil` text NOT NULL,
  `latCapturaVideoMovil` text NOT NULL,
  `timeStampCapturaVideoMovil` text NOT NULL,
  `observaciones` text,
  `username` text NOT NULL,
  `servAuth` text NOT NULL,
  `celular` text NOT NULL,
  `lugarCaptura` text NOT NULL,
  `lonCapturaFoto3Movil` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`idMovil`, `id`, `nombre`, `edad`, `email`, `urlFoto1`, `lonCapturaFoto1Movil`, `latCapturaFoto1Movil`, `timeStampCapturaFoto1Movil`, `urlFoto2`, `lonCapturaFoto2Movil`, `latCapturaFoto2Movil`, `timeStampCapturaFoto2Movil`, `latCapturaFoto3Movil`, `urlFoto3`, `timeStampCapturaFoto3Movil`, `urlFoto4`, `lonCapturaFoto4Movil`, `latCapturaFoto4Movil`, `timeStampCapturaFoto4Movil`, `urlVideo`, `lonCapturaVideoMovil`, `latCapturaVideoMovil`, `timeStampCapturaVideoMovil`, `observaciones`, `username`, `servAuth`, `celular`, `lugarCaptura`, `lonCapturaFoto3Movil`) VALUES
(0, 1, 'Juan', 27, 'juanman.gd@gmail.com', 'http://www.link.com', '0', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Me roban la corriente!!!!!!!!', '', '', '', '', ''),
(0, 2, 'Maná - Bendita tu luz (Karaoteca.com)', NULL, '', 'uploads/Maná - Bendita tu luz (Karaoteca.com).mid', '0', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 3, 'Maná - Bendita tu luz (Karaoteca.com)', NULL, '', 'uploads/Maná - Bendita tu luz (Karaoteca.com).mid', '0', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 4, 'Maná - Bendita tu luz (Karaoteca.com)', NULL, '', 'uploads/Maná - Bendita tu luz (Karaoteca.com).mid', '0', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 5, 'YiiMan', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 6, 'examples', NULL, '', 'uploads/examples.desktop', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 7, 'examples', NULL, '', 'uploads/examples.desktop', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 8, 'RFID for baggage business case 2 1', NULL, '', 'uploads/RFID for baggage business case 2 1.pdf', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 9, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 10, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 11, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 12, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 13, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 14, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 15, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 16, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 17, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 18, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 19, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 20, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 21, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 22, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 23, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 24, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 25, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 26, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 27, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 28, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 29, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 30, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 31, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 32, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 33, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 34, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 35, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 36, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 37, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 38, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 39, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 40, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 41, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 42, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 43, '', NULL, '', NULL, NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 44, 'RFID for baggage business case 2 1', NULL, '', 'uploads/RFID for baggage business case 2 1.pdf', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 45, 'RFID for baggage business case 2 1', NULL, '', 'uploads/RFID for baggage business case 2 1.pdf', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ''),
(0, 46, 'yii', NULL, '', 'uploads/yii.bat', NULL, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1416176071),
('m130524_201442_init', 1416176080);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'juanman', 'gSv2ycqrHm-LBO1nf9-lOsVL0EL-EqsG', '$2y$13$kjeJtPk48pABB0X49Uzs0Of1Y8huv53H4tFlAL60hMvFebXfpWrdu', 'g-QsJnjW05jTNXJcy8Ecy3LkRbtO8pJR_1416177061', 'juanman.gd@gmail.com', 10, 10, 1416177048, 1416177061),
(2, 'Admin2', '--uG7aiHwTxxTu7jcq1lo22Gjs5J5QHA', '$2y$13$kMGd47jdyov8eceqZBkbyuMcFCyU5Q1AR5SlgmkNCUOFNGiEZscSy', NULL, 'juanman2.gd@gmail.com', 10, 10, 1416180264, 1416180264),
(3, 'Admin', '0kdm7zYlFn8hkZoVVYSCZLqLUxo5qhat', '$2y$13$yRmJhsUkieGqk6BImfyD6OplN6pBNc44Nm3fT75Ij5q.AF9pbnl5a', NULL, 'juanman@gmail.com', 10, 10, 1416180449, 1416180449),
(4, 'jmaya', 'JYrKbZKuPZUOqKUZNOJU3t1UwPZFvwg0', '$2y$13$L993OOV6DfRI201wdv/RE.Rw2eXP1yoY91KdXcx1ortrXNtxJWDJy', NULL, 'jmaya@fiboconsulting.com', 10, 10, 1416264231, 1416264231),
(5, 'juan', '3sc4Sv-XJHpaT_tQXesJUOoCZ3U_GqUZ', '$2y$13$ZsNP4ij3Q3XHYjdX/d2Kk.Ef05SOTNe9L8hAE4iEHIwYt9jpTu4lm', NULL, 'juan@gmail.com', 10, 10, 1416672333, 1416672333),
(6, 'kjjikj', 'aXQARH1ZE9uH-JlAx9BS7GmcQm0QUlcC', '$2y$13$nZ95mKw8L48XsnGxli.UbO5g1ZahnAENG/8pe6YeH4bVvZF9kWOyK', NULL, 'Admin@kak.com', 10, 10, 1417051875, 1417051875);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
