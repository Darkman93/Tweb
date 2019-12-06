-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Lug 13, 2017 alle 15:46
-- Versione del server: 10.1.9-MariaDB
-- Versione PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `info`
--

CREATE TABLE `info` (
  `email` varchar(255) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `age` int(11) NOT NULL,
  `bike` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `info`
--

INSERT INTO `info` (`email`, `gender`, `age`, `bike`) VALUES
('ste@gmail.com', 'm', 25, 'dh'),
('tancredi@gmail.com', 'm', 24, 'xc');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`name`, `surname`, `email`, `password`) VALUES
('Stefano', 'Vincenzi', 'ste@gmail.com', '0fe4f43e1dd173abc07ce508a74800e2'),
('Jacopo', 'Tancredi', 'tancredi@gmail.com', '0fe4f43e1dd173abc07ce508a74800e2');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
