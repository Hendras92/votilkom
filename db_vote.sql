-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mei 2016 pada 08.33
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `id_events` int(5) NOT NULL,
  `name_events` varchar(50) NOT NULL,
  `type_events` varchar(10) NOT NULL,
  `link_events` varchar(100) NOT NULL,
  `about_events` text NOT NULL,
  `date_events` date NOT NULL,
  `closed_events` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_events`
--

INSERT INTO `tbl_events` (`id_events`, `name_events`, `type_events`, `link_events`, `about_events`, `date_events`, `closed_events`) VALUES
(1, 'EVN003', 'sasa', 'asas', 'sasass', '2016-05-16', '2016-05-20'),
(2, 'events_01', 'bebas', '', 'bebas', '2016-05-07', '2016-05-14'),
(3, 'events3wwwwww', 'asadwww', 'sdsds', 'dsdsd', '2016-05-24', '2016-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_options_event`
--

CREATE TABLE IF NOT EXISTS `tbl_options_event` (
  `id_options` int(5) NOT NULL,
  `id_events` int(5) NOT NULL,
  `name_options` varchar(50) NOT NULL,
  `img_options` text NOT NULL,
  `count_options` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_options_event`
--

INSERT INTO `tbl_options_event` (`id_options`, `id_events`, `name_options`, `img_options`, `count_options`) VALUES
(1, 1, 'aaa', 'aaaa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id_events`);

--
-- Indexes for table `tbl_options_event`
--
ALTER TABLE `tbl_options_event`
  ADD PRIMARY KEY (`id_options`),
  ADD KEY `id` (`id_events`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id_events` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_options_event`
--
ALTER TABLE `tbl_options_event`
  MODIFY `id_options` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_options_event`
--
ALTER TABLE `tbl_options_event`
  ADD CONSTRAINT `tbl_options_event_ibfk_1` FOREIGN KEY (`id_events`) REFERENCES `tbl_events` (`id_events`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
