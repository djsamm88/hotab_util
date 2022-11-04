-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 02:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotab_util`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alias`
--

CREATE TABLE `tbl_alias` (
  `Device_ID` varchar(222) NOT NULL,
  `alias` varchar(222) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alias`
--

INSERT INTO `tbl_alias` (`Device_ID`, `alias`, `id`) VALUES
('Agitator_Tank', '', 1),
('Chiller_A', 'CHILLER A', 2),
('Chiller_B', 'CHILLER B', 3),
('CPO_WASHING', 'CPO WASHING', 4),
('C_AMO_R1', 'COMP. AMONIA R1', 5),
('FR_A', 'FRACTIONATION A', 6),
('FR_B', 'FRACTIONATION B', 7),
('ICE_C', 'ICE CONDENCING', 8),
('IN_PLN', 'INCOMING PLN', 9),
('KCP_A', 'KCP A', 10),
('KCP_B', 'KCP B', 11),
('KCP_C', 'KCP C', 12),
('KCP_D', 'KCP D', 13),
('LPB_A', 'LPB A (boiler)', 14),
('LPB_B', 'LPB B (boiler)', 15),
('PDU01A', 'PDU 1A', 16),
('PDU01B', 'PDU 1B', 17),
('PDU02A', 'PDU 2A', 18),
('PDU02B', 'PDU 2B', 19),
('PDU03A', 'PDU 3A', 20),
('PDU03B', 'PDU 3B', 21),
('PDU4A', 'PDU 4A', 22),
('PDU4B', 'PDU 4B', 23),
('PDU5A', 'PDU 5A', 24),
('PDU5B', 'PDU 5B', 25),
('PDU6', 'PDU 6', 26),
('Polishing', 'POLISHING', 27),
('REFI_A', 'REFINERY A', 28),
('REFI_B', 'REFINERY B', 29),
('WTP', 'WTP', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alias`
--
ALTER TABLE `tbl_alias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alias`
--
ALTER TABLE `tbl_alias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
