-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 02:02 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach_candidate`
--

CREATE TABLE `coach_candidate` (
  `candidate_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nation` varchar(35) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_candidate`
--

INSERT INTO `coach_candidate` (`candidate_id`, `fullname`, `nation`, `photo`, `votes`) VALUES
(1, 'Gareth Southgate', 'Inggris', 'gareth.png', 2),
(2, 'Zlato Dalic', 'Kroasia', 'dalic.jpg', 1),
(3, 'Didier Deschamp', 'Perancis', 'didier.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gk_candidate`
--

CREATE TABLE `gk_candidate` (
  `candidate_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `nation` varchar(35) NOT NULL,
  `number` varchar(10) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_candidate`
--

INSERT INTO `gk_candidate` (`candidate_id`, `fullname`, `birth`, `nation`, `number`, `photo`, `votes`) VALUES
(1, 'Eiji Kawashima', '20 Maret 1983', 'Jepang', '1', 'eiji.jpg', 3),
(2, 'Hugo Lloris', '26 Desember 1986', 'Perancis', '1', 'hugo.jpg', 1),
(3, 'David de Gea', '7 November 1990', 'Spanyol', '1', 'degea.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mfp_candidate`
--

CREATE TABLE `mfp_candidate` (
  `candidate_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `negara` varchar(25) NOT NULL,
  `no_punggung` int(10) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mfp_candidate`
--

INSERT INTO `mfp_candidate` (`candidate_id`, `fullname`, `lahir`, `negara`, `no_punggung`, `posisi`, `photo`, `votes`) VALUES
(1, 'Kylian Mbappe', '20 Desember 1998', 'Prancis', 10, 'Penyerang', 'mbappe.jpg', 1),
(2, 'Harry Kane', '28 Juli 1993', 'Inggris', 9, 'Penyerang', 'kane.jpg', 2),
(3, 'Luka Modric', '9 September 1985', 'Kroasia', 10, 'Gelandang', 'modric.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id` int(15) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nickname` text NOT NULL,
  `rank` varchar(255) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `tanggalGabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama`, `nickname`, `rank`, `photo`, `tanggalGabung`) VALUES
(8, 'Bagus Denissiasis', 'Bagus Denis111', 'Diamond', 'Dani1.JPG', '2018-07-05'),
(10, 'Dani', 'cicakkurangmakan', 'Gold', 'gold1.png', '2018-01-17'),
(11, 'Ericko Lim', 'JessNoLimit', 'Silver', 'silver.png', '2018-05-02'),
(13, 'adamantium', 'adamb', 'cupu banget', 'conq3.png', '2018-07-19'),
(14, 'Yazid putra', 'yaziddd', 'conqueror', 'bronze1.png', '2018-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach_candidate`
--
ALTER TABLE `coach_candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `gk_candidate`
--
ALTER TABLE `gk_candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `mfp_candidate`
--
ALTER TABLE `mfp_candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach_candidate`
--
ALTER TABLE `coach_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gk_candidate`
--
ALTER TABLE `gk_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mfp_candidate`
--
ALTER TABLE `mfp_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
