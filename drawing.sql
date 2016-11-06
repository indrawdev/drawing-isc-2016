-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 11:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drawing2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `group`, `item_id`, `sort`) VALUES
(1, 3, 1, 2),
(2, 1, 2, 4),
(3, 4, 3, 2),
(4, 3, 4, 4),
(5, 6, 5, 3),
(6, 7, 6, 3),
(7, 5, 7, 2),
(8, 1, 8, 3),
(9, 5, 9, 4),
(10, 7, 10, 2),
(11, 4, 11, 3),
(12, 0, 12, 0),
(13, 2, 13, 2),
(14, 8, 14, 1),
(15, 5, 15, 3),
(16, 1, 16, 1),
(17, 7, 17, 1),
(18, 4, 18, 1),
(19, 4, 19, 4),
(20, 8, 20, 2),
(21, 2, 21, 3),
(22, 6, 22, 2),
(23, 8, 23, 4),
(24, 5, 24, 1),
(25, 2, 25, 1),
(26, 6, 26, 1),
(27, 1, 27, 2),
(28, 3, 28, 3),
(29, 8, 29, 3),
(30, 7, 30, 4),
(31, 3, 31, 1),
(32, 3, 32, 2),
(33, 1, 33, 4),
(34, 4, 34, 2),
(35, 3, 35, 4),
(36, 6, 36, 2),
(37, 7, 37, 3),
(38, 5, 38, 4),
(39, 1, 39, 3),
(40, 5, 40, 3),
(41, 7, 41, 2),
(42, 4, 42, 3),
(43, 2, 43, 3),
(44, 2, 44, 2),
(45, 5, 45, 2),
(46, 8, 46, 3),
(47, 1, 47, 1),
(48, 6, 48, 4),
(49, 7, 49, 1),
(50, 4, 50, 1),
(51, 4, 51, 4),
(52, 8, 52, 2),
(53, 2, 53, 4),
(54, 6, 54, 1),
(55, 8, 55, 1),
(56, 5, 56, 1),
(57, 2, 57, 1),
(58, 6, 58, 3),
(59, 1, 59, 2),
(60, 3, 60, 3),
(61, 8, 61, 4),
(62, 7, 62, 4),
(63, 3, 63, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`) VALUES
(0, 'No Group'),
(1, 'Group A'),
(2, 'Group B'),
(3, 'Group C'),
(4, 'Group D'),
(5, 'Group E'),
(6, 'Group F'),
(7, 'Group G'),
(8, 'Group H');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `asprov` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `kompetisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `asprov`, `name`, `kompetisi`) VALUES
(1, 'ACEH', 'PSAP JUNIOR', 1),
(2, 'SUMUT', 'PSDS DELI SERDANG', 1),
(3, 'SUMBAR', 'PERSIJU SIJUNJUNG', 1),
(4, 'RIAU', 'PS. DURI', 1),
(5, 'KEP. RIAU', 'PS. BATAM', 1),
(6, 'JAMBI', 'PERSIBRI BATANGHARI', 1),
(7, 'BABEL', 'PS. BANGKA SELATAN', 1),
(8, 'SUMSEL', 'PS. OKU TIMUR', 1),
(9, 'BENGKULU', 'PS. BENGKULU U-17', 1),
(10, 'LAMPUNG', 'PS. TANGGAMUS', 1),
(11, 'BANTEN', 'CILEGON UNITED FC', 1),
(12, 'DKI', 'DKI (TBC)', 1),
(13, 'JABAR', 'JABAR (TBC)', 1),
(14, 'JATENG', 'PERSAB BREBES', 1),
(15, 'DIY', 'PSIM', 1),
(16, 'JATIM', 'PERSIDA SIDOARJO', 1),
(17, 'KALTENG', 'GREEN RANGER KATINGAN', 1),
(18, 'KALSEL', 'PESEBAN BANJARMASIN', 1),
(19, 'KALTIM', '(ASKOT) BALIKPAPAN', 1),
(20, 'KALTARA', 'PSN NUNUKAN', 1),
(21, 'SULUT', 'PERSBIT BITUNG', 1),
(22, 'GORONTALO', 'GORONTALO (TBC)', 1),
(23, 'SULTENG', 'BANDAR SULTENG FC', 1),
(24, 'SULBAR', 'PS. POLMAS', 1),
(25, 'SULTRA', 'KOTA KENDARI', 1),
(26, 'SULSEL', 'ASKAB GOWA', 1),
(27, 'BALI', 'PUTRA TRESNA DENPASAR', 1),
(28, 'NTB', 'PERSISUM SUMBAWA', 1),
(29, 'NTT', 'PERSESBA SUMBA BARAT', 1),
(30, 'MALUKU', 'PERSITA LAHA', 1),
(31, 'MALUKU UTARA', 'PERSIHALTIM HALMAHERA TIMUR', 1),
(32, 'ACEH', 'PS. PIDIE JAYA', 2),
(33, 'SUMUT', 'PS. POP ASAHAN', 2),
(34, 'SUMBAR', 'PS. GAS SAWAHLUNTO', 2),
(35, 'RIAU', 'RIAU FC', 2),
(36, 'KEP. RIAU', 'YSK 757 KARIMUN', 2),
(37, 'JAMBI', 'MERANGIN FC', 2),
(38, 'BABEL', 'PS. BELITUNG TIMUR', 2),
(39, 'SUMSEL', 'PS. KODAM II/SRIWIJAYA', 2),
(40, 'BENGKULU', 'PS. BENTENG', 2),
(41, 'LAMPUNG', 'PERSILAT LAMPUNG TENGAH', 2),
(42, 'BANTEN', 'PERSIKOTA TANGERANG', 2),
(43, 'DKI', 'URAKAN FC', 2),
(44, 'JABAR', 'PERSIKOTAS TASIKMALAYA', 2),
(45, 'JATENG', 'PERSIKU KUDUS', 2),
(46, 'DIY', 'GAMA FC', 2),
(47, 'JATIM', 'BLITAR UNITED FC', 2),
(48, 'KALBAR', 'DELTA KHATULISTIWA FC', 2),
(49, 'KALTENG', 'PS. PU PUTRA PALANGKARAYA', 2),
(50, 'KALSEL', 'PESEBAN BANJARMASIN', 2),
(51, 'KALTIM', 'PERSIKUTIM KUTAI TIMUR', 2),
(52, 'KALTARA', 'PS. PELANGI UTARA', 2),
(53, 'SULUT', 'PERSMA 1960 MANADO', 2),
(54, 'GORONTALO', 'PS. BOALEMO', 2),
(55, 'SULTENG', 'PERSIPAL PALU', 2),
(56, 'SULBAR', 'MAMUJU UTAMA FC', 2),
(57, 'SULTRA', 'UNHALU FC', 2),
(58, 'SULSEL', 'PERSEKA BOSOWA', 2),
(59, 'BALI', 'PERSEDEN DENPASAR', 2),
(60, 'NTB', 'PSKT SUMBAWA BARAT', 2),
(61, 'NTT', 'PSN NGADA', 2),
(62, 'MALUKU', 'NUSA INA FC', 2),
(63, 'MALUKU UTARA', 'PERSITER TERNATE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `sort_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sort`
--

INSERT INTO `sort` (`sort_id`, `value`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`sort_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
