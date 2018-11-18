-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Nov 2018 pada 06.20
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_chart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_data`
--

CREATE TABLE `c_data` (
  `MTR_HNDING_CODE` varchar(40) NOT NULL,
  `TROLLY_CODE_START` varchar(40) NOT NULL,
  `TROLLY_CODE_END` varchar(40) NOT NULL,
  `CYCLE_NUMBER` int(11) NOT NULL,
  `TRESHOLD` double NOT NULL,
  `TIME_TO_GO` time NOT NULL,
  `TIME_TO_BACK` time NOT NULL,
  `DURATION` double NOT NULL,
  `ACPTNCE_STAT` tinyint(1) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `c_data`
--

INSERT INTO `c_data` (`MTR_HNDING_CODE`, `TROLLY_CODE_START`, `TROLLY_CODE_END`, `CYCLE_NUMBER`, `TRESHOLD`, `TIME_TO_GO`, `TIME_TO_BACK`, `DURATION`, `ACPTNCE_STAT`, `ID`) VALUES
('Towing Z', 'A-B-C', 'A-B-C', 1, 12, '10:00:00', '10:06:00', 6, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_data`
--
ALTER TABLE `c_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_data`
--
ALTER TABLE `c_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
