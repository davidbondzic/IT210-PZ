-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oglasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamere`
--

CREATE TABLE `kamere` (
  `kamera_id` int(11) NOT NULL,
  `proizvodjac` text NOT NULL,
  `opis` text NOT NULL,
  `cena` int(11) NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamere`
--

INSERT INTO `kamere` (`kamera_id`, `proizvodjac`, `opis`, `cena`, `slika`) VALUES
(2, 'Canon', 'EOS R5 C', 200, 'http://i1.adis.ws/i/canon/eos-r5-c-fsl_range-page_06_306bc724fef64cc5a06bc8e97299cd91');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `ime`, `prezime`, `email`, `username`, `password`, `admin`) VALUES
(1, 'David', 'Bondzic', 'davidbondza@gmail.com', 'bondza', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Marko', 'Jovanovic', 'marko@gmail.com', 'blaza', '202cb962ac59075b964b07152d234b70', 0),
(3, 'Korisnik', 'Korisnik', 'korisnik@gmail.com', 'korisnik', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `racunari`
--

CREATE TABLE `racunari` (
  `racunar_id` int(11) NOT NULL,
  `proizvodjac` text NOT NULL,
  `opis` text NOT NULL,
  `cena` int(11) NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `racunari`
--

INSERT INTO `racunari` (`racunar_id`, `proizvodjac`, `opis`, `cena`, `slika`) VALUES
(1, 'Lenovo', 'IdeaPad', 100, 'https://www.lenovo.com/medias/lenovo-laptop-ideapad-3-15-intel-hero.png?context=bWFzdGVyfHJvb3R8MjczNzUyfGltYWdlL3BuZ3xoMGQvaDYxLzE0MTkwNTI5Njc1Mjk0LnBuZ3xmYTMyYzBlZmE5NTcyNzAyMTZhZmJlMmFmOTVjMmZmYTM4ZTdjNWFiZWM0YzE5YWQ2YzcxNmM3OTE2MThjZmE4'),
(2, 'Aorus', 'Procesor: AMD Ryzen 7\r\nRAM: 16 GB DDR4\r\n480GB SSD', 500, 'https://www.tehnomanija.rs/UserFiles/products/2020/005/large/156870.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tehnika`
--

CREATE TABLE `tehnika` (
  `tehnika_id` int(11) NOT NULL,
  `proizvodjac` text NOT NULL,
  `opis` text NOT NULL,
  `cena` int(11) NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tehnika`
--

INSERT INTO `tehnika` (`tehnika_id`, `proizvodjac`, `opis`, `cena`, `slika`) VALUES
(1, 'Gorenje', 'RK6191AX', 300, 'https://s.cdnshm.com/products/l/9788284/gorenje-rk6191ax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `telefoni`
--

CREATE TABLE `telefoni` (
  `telefon_id` int(11) NOT NULL,
  `proizvodjac` text NOT NULL,
  `opis` text NOT NULL,
  `cena` int(11) NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefoni`
--

INSERT INTO `telefoni` (`telefon_id`, `proizvodjac`, `opis`, `cena`, `slika`) VALUES
(4, 'Xiaomi', 'Poco F2 PRO', 300, 'https://i01.appmifile.com/webfile/globalimg/zhouyuxin/J11-grey-800.png'),
(5, 'Huawei', 'P40 8GB', 400, 'https://viktormob.rs/wp-content/uploads/2022/02/huawei-p40-01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamere`
--
ALTER TABLE `kamere`
  ADD PRIMARY KEY (`kamera_id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `racunari`
--
ALTER TABLE `racunari`
  ADD PRIMARY KEY (`racunar_id`);

--
-- Indexes for table `tehnika`
--
ALTER TABLE `tehnika`
  ADD PRIMARY KEY (`tehnika_id`);

--
-- Indexes for table `telefoni`
--
ALTER TABLE `telefoni`
  ADD PRIMARY KEY (`telefon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamere`
--
ALTER TABLE `kamere`
  MODIFY `kamera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `racunari`
--
ALTER TABLE `racunari`
  MODIFY `racunar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tehnika`
--
ALTER TABLE `tehnika`
  MODIFY `tehnika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telefoni`
--
ALTER TABLE `telefoni`
  MODIFY `telefon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
