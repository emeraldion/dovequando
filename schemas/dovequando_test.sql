-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2016 at 02:32 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dovequando_test`
--
CREATE DATABASE IF NOT EXISTS `dovequando_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dovequando_test`;


-- --------------------------------------------------------

--
-- Table structure for table `dovequando_raccomandate`
--

CREATE TABLE `dovequando_raccomandate` (
  `id` int(11) NOT NULL,
  `utente` varchar(64) NOT NULL,
  `codice` varchar(64) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dovequando_raccomandate`
--
ALTER TABLE `dovequando_raccomandate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utente` (`utente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dovequando_raccomandate`
--
ALTER TABLE `dovequando_raccomandate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
