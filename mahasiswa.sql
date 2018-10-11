-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:01 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jenisKel` varchar(15) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `kelas`, `jenisKel`, `hobi`, `fakultas`, `alamat`, `username`, `pass`) VALUES
('Yulia', '6701170006', 'D3 MI 41-03', 'D3 MI 41-03', ', Tidur', 'FIT', 'Telkom', 'yulia', 'yulia'),
('Muhammad Luthfi', '6701174014', 'D3 MI 41-02', 'Pria', ', Tidur, Salto, Nafas', 'FEB', 'Bandung', 'luqman', 'luqman'),
('Luqman', '6701174444', '', '', '', '', 'bandung', 'luthfi', 'luthfi');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `nim` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`nim`, `judul`, `isi`, `gambar`) VALUES
('6701174014', 'AKU TAHU', 'sjdkfahdjkfhasjdhfkl', 'aaaa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `datamahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
