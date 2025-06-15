-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 08:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lock`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` varchar(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`, `gambar`) VALUES
(28, 'H01', 'Honda Vario 125 FI', 'HondaVario125-0.png'),
(29, 'Y01', 'Yamaha NMAX FI', 'yamahanmax-0.png'),
(30, 'Z01', 'Suzuki Address FI', 'addressfi-0.webp'),
(31, 'T01', 'TVS Dazz', 'tvsdazz-0.webp'),
(32, 'K01', 'Kawasaki D-Tracker X', 'Kawasaki D-Tracker.png'),
(33, 'H02', 'Honda Scoopy FI', 'Honda-Scoopy-0.png'),
(34, 'H03', 'Honda PCX 160 FI', 'HondaPCX-0.png'),
(35, 'H04', 'Honda Revo X', 'HondaRevoX-0.png'),
(36, 'H05', 'Honda Supra GTR 150 FI', 'HondaSupraGTR150-0.png'),
(37, 'Y02', 'Yamaha AEROX Std FI', 'aerox-0.png'),
(38, 'Y03', 'Yamaha Fino FI', 'fino-0.png'),
(39, 'Y04', 'Yamaha MX King FI', 'mxking-0.png'),
(40, 'Y05', 'Yamaha Jupiter Z1 FI', 'jupiterz1-0.png'),
(41, 'Z02', 'Suzuki NEX II FI', 'nexII-0.webp'),
(42, 'Z03', 'Suzuki NEX Crossover FI', 'nexcrossover-0.webp'),
(43, 'Z04', 'Suzuki Satria F150 FI', 'satriaf150-0-Photoroom.png'),
(44, 'Z05', 'Suzuki GSX S150 FI', 'gsxs150-0.webp'),
(45, 'T02', 'TVS Rockz', 'rockz-0.webp'),
(46, 'T03', 'TVS Callisto EFI', 'callisto-0.webp'),
(47, 'T04', 'TVS Neo XR', 'neoxr-0.webp'),
(48, 'T05', 'TVS Max 125 Semi Trail', 'tvsmaxtrail-0.webp'),
(49, 'K02', 'Kawasaki KX 65', 'Kawazaki Kx65.png'),
(50, 'K03', 'Kawasaki W175', 'Kawasaki W175.png'),
(51, 'K04', 'Kawasaki Ninja ZX-25R', 'Kawazaki Ninja ZX-25R-.png'),
(52, 'K05', 'Kawasaki KLX 150 SM', 'Kawasaki KLX 150 SM-.png'),
(53, 'H06', 'Honda Beat FI', 'Beat-0.png'),
(54, 'H07', 'Honda CBR 150R FI', 'HondaCBR150R-0.png'),
(55, 'H08', 'Honda Vario 160 FI', 'Vario160-0.png'),
(56, 'H09', 'Honda Beat Street FI', 'BeatStreet-0.png'),
(57, 'H10', 'Honda Stylo 160 FI', 'Stylo160-0.png'),
(58, 'Y06', 'Yamaha Vixion FI', 'vixion-0.png'),
(59, 'Y07', 'Yamaha Fazzio FI', 'fazzio-0.png'),
(60, 'Y08', 'Yamaha Grand Filano FI', 'grandfilano-0.png'),
(61, 'Y10', 'Yamaha Mio M3 FI', 'miom3-0.png'),
(62, 'Z06', 'Suzuki GSX R150 FI', 'gsxr150-0.webp'),
(63, 'Z07', 'Suzuki Burgman Street 125 EX FI', 'burgman125-0.webp'),
(64, 'Z08', 'Suzuki V-Strom 250 SX FI', 'vstorm250sx-0.webp'),
(65, 'Z09', 'Suzuki Avenis FI', 'avenis-0-Photoroom.png'),
(66, 'Z10', 'Suzuki Gixxer SF FI 250', 'gixxer250sf-0.webp'),
(67, 'Y09', 'Yamaha WR155 R FI', 'wr155r-0.png'),
(68, 'T06', 'TVS Ronin SS', 'roninss-0.webp'),
(69, 'T07', 'TVS XL 100 FI', 'XL 100-0.webp'),
(70, 'T08', 'TVS MAX 125 Sport', 'maxsport-0.webp'),
(71, 'K06', 'Kawasaki Ninja 250 FI', 'Kawasaki Ninja 250.png'),
(72, 'K07', 'Kawasaki KLX 140R FI', 'Kawasaki KLX 140R.png'),
(73, 'K08', 'Kawasaki KLX 150', 'Kawasaki KLX 150-.png'),
(74, 'K09', 'Kawasaki W175TR', 'Kawasaki W175TR-.png'),
(75, 'K10', 'Kawasaki Ninja ZX-25RR', 'Kawasaki Ninja ZX-25RR-.png'),
(76, 'H11', 'Honda CRF 150L FI', 'CRF150L-0.png'),
(77, 'H12', 'Honda ADV 160 FI', 'HondaADV-0.png'),
(78, 'H13', 'Honda Genio FI', 'Genio-0.png'),
(79, 'H14', 'Honda Sonic 150R FI', 'Sonic150R-0.png'),
(80, 'H15', 'Honda Supra X125 FI', 'SupraX125-0.png'),
(81, 'Y11', 'Yamaha Freego Connected FI', 'freego-0.png'),
(82, 'Y12', 'Yamaha XSR 155 FI', 'xsr155-0.png'),
(83, 'Y13', 'Yamaha Lexi LX 155 FI', 'lexils155-0.png'),
(84, 'Y14', 'Yamaha Gear 125 FI', 'gear-0.png'),
(85, 'Y15', 'Yamaha MT-25 FI', 'mt25-0.png'),
(86, 'K11', 'Kawasaki KLX 150 SM SE', 'Kawasaki KLX 150 SM SE.png'),
(87, 'K12', 'Kawasaki Ninja H2 FI', 'Kawazaki Ninja H2.png'),
(88, 'K13', 'Kawasaki Z125 PRO FI', 'Kawasaki Z125 PRO.png'),
(89, 'K14', 'Kawasaki KLX 250 FI', 'Kawasaki KLX 250-.png'),
(90, 'K15', 'Kawasaki Versys X 250 FI', 'Kawasaki Versys X 250.png'),
(98, 'H16', 'Honda CBR250RR FI', 'cbr250rr-0.png'),
(99, 'H17', 'Honda CB150 Verza FI', 'cb150verza-0.png'),
(100, 'H18', 'Honda CB150R Streetfire FI', 'cb150sfire-0.png'),
(101, 'H19', 'Honda CB150X FI', 'hondacb150x-0.png'),
(102, 'H20', 'Honda Forza 250 FI', 'hondaforza-0.png'),
(103, 'H21', 'Honda CRF250 Rally FI', 'honda-crf-250-rally.png'),
(104, 'H22', 'Honda CB650R FI', 'cb650r-0.png'),
(105, 'H23', 'Honda CRF250L FI', 'crf250l-0.png'),
(106, 'H24', 'Honda EM1 E', 'EM1 E-0.png'),
(107, 'H25', 'Honda Rebel 500 FI', 'Rebel500-0.png'),
(108, 'H26', 'Honda CB500X FI', 'HondaCB500X-0.png'),
(109, 'H27', 'Honda Monkey FI', 'HondaMonkey-0.png'),
(110, 'H28', 'Honda Super Cub C125 FI', 'HondaSuperCub-0.png'),
(111, 'H29', 'Honda Rebel 1100 FI', 'HondaRebel1100-0.png'),
(112, 'H30', 'Honda CT125 FI', 'HondaCT125-0.png'),
(113, 'H31', 'Honda CBR1000RR-R', 'Honda CBR1000RR-R-0.png'),
(114, 'H32', 'Honda ST125 Dax FI', 'Honda ST125 Dax-0.png'),
(115, 'H33', 'Honda Goldwing FI', 'HondaGoldwing-0.png'),
(116, 'H34', 'Honda CRF1100L Africa Twin FI', 'Honda CRF1100L Affrica Twin-0.png'),
(117, 'H35', 'Honda XL750 Transalp FI', 'XL750 Transalp-0.png'),
(118, 'Y16', 'Yamaha R15 Connected FI', 'r15c-0.png'),
(119, 'Y17', 'Yamaha Vega Force FI', 'vegaforce-0.png'),
(120, 'Y18', 'Yamaha Xmax FI', 'xmax-0.png'),
(121, 'Y19', 'Yamaha X-Ride 125 FI', 'xride-0.png'),
(122, 'Y20', 'Yamaha YZ125X', 'yz125x-0.png'),
(123, 'Y21', 'Yamaha Vixion R FI', 'vixionr-0.png'),
(124, 'Y22', 'Yamaha YZF R25 FI', 'YZFR25-0.png'),
(125, 'Y23', 'Yamaha MT-15 FI', 'MT-15-0.png'),
(126, 'Y24', 'Yamaha YZ250F FI', 'yz250f-0.png'),
(127, 'Y25', 'Yamaha NMAX Turbo FI', 'nmaxturbo-0.png'),
(128, 'T09', 'TVS Ntorq 125', 'TVS Ntorq 125-0.webp');

-- --------------------------------------------------------

--
-- Table structure for table `checked`
--

CREATE TABLE `checked` (
  `id_checked` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id_checked`, `id_alternatif`) VALUES
(299, 36),
(300, 37);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `tenaga` int(11) NOT NULL,
  `fitur` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `starter` varchar(255) NOT NULL,
  `torsi` int(11) NOT NULL,
  `kecepatan` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `tangki` int(11) NOT NULL,
  `konsumsi` int(11) NOT NULL,
  `torsirpm` int(11) NOT NULL,
  `tenagarpm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `id_alternatif`, `harga`, `kapasitas`, `tenaga`, `fitur`, `kategori`, `transmisi`, `starter`, `torsi`, `kecepatan`, `berat`, `tangki`, `konsumsi`, `torsirpm`, `tenagarpm`) VALUES
(1, 0, '35', 434, 12, '12', 'Sport', 'Automatic', 'Electric Starter', 12, 12, 12, 12, 12, 12, 12),
(2, 0, '35', 434, 12, '12', 'Sport', 'Automatic', 'Electric Starter', 12, 12, 12, 12, 12, 12, 12),
(3, 0, '35', 434, 12, '12', 'Sport', 'Automatic', 'Electric Starter', 12, 12, 12, 12, 12, 12, 12),
(4, 14, '2', 2, 2, 'baik1', 'Scooter', 'Automatic', 'Kick Starter', 1, 1, 1, 1, 1, 1, 1),
(5, 19, '25,000,000', 160, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(6, 20, '30,000,000', 125, 10, '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(7, 21, '25', 25, 25, 'baik', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(8, 22, '25,000', 160, 10, 'baik', 'Trail-OffRoad', '', '', 0, 0, 0, 0, 0, 0, 0),
(9, 23, '30,000', 150, 10, 'baik', 'Sport', 'Automatic', '', 0, 0, 0, 0, 0, 0, 0),
(10, 24, '25,000', 150, 10, 'baik', 'Sport', 'Automatic', 'Electric Starter', 0, 0, 0, 0, 0, 0, 0),
(11, 25, '30,000', 150, 10, 'baik', 'Sport', 'Manual', 'Electric Starter', 1000, 0, 0, 0, 0, 0, 0),
(12, 26, '35,000', 150, 150, 'baik', 'Sport', 'Automatic', 'Electric Starter', 150, 150, 150, 150, 150, 0, 0),
(13, 27, '150', 150, 150, 'baik', 'Sport', 'Automatic', 'Electric Starter', 150, 150, 150, 150, 150, 150, 150),
(14, 28, '23,310,000', 125, 11, '4-Step, SOHC, eSP, Liquid Cooling Engine, Kompresi-11,0 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 11, 105, 110, 6, 50, 5000, 8500),
(15, 29, '32,175,000', 155, 15, 'Single Cylinder, 4-Stroke, Liquid Cooled SOHC VVA Engine, K-11.6 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 14, 120, 127, 7, 40, 6500, 8000),
(16, 30, '20,365,000', 113, 9, '4-Stroke, 1-Cylinder, Air Cooled, SOHC, K-9.4:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 9, 100, 97, 5, 45, 6500, 8000),
(17, 31, '14,990,000', 110, 9, 'DIGITECH-R ENGINE , 4-Stroke, SOHC, Carburator, K-9.5:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 8, 105, 90, 5, 40, 7500, 5500),
(18, 32, '78,100,000', 250, 24, 'Single-cylinder, 4-stroke, DOHC, liquid-cooled', 'Trail-OffRoad', 'Manual', 'Electric Starter', 21, 140, 139, 8, 30, 7000, 9000),
(19, 33, '22,525,000', 110, 9, 'Single Cylinder, 4-Stroke, Air-Cooled, SOHC, kompresi-10,0 : 1 (2025)', 'Scooter', 'Automatic', 'Combined Starter', 9, 115, 110, 4, 55, 5500, 7500),
(20, 34, '33,400,000', 160, 16, 'Single Cylinder, 4 Valves, 4-Stroke, Liquid Cooled Engine, kompresi- 12:1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 15, 117, 130, 8, 40, 6500, 8500),
(21, 35, '17,730,000', 110, 9, '4-Steps, SOHC, Single Cylinder, kompresi-9,3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 9, 110, 99, 4, 60, 6000, 7500),
(22, 36, '25,915,000', 150, 16, 'Single Cylinder, 4-Stroke, 4-Valves, DOHC, Liquid Cooled Engine, kompresi-11,3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 14, 128, 119, 5, 40, 6500, 9000),
(23, 37, '28,330,000', 155, 15, 'Single Cylinder, Liquid cooled 4-stroke, SOHC, K-11.6 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 14, 120, 122, 6, 45, 6500, 8000),
(24, 38, '20,400,000', 125, 9, 'single Cylinder, Air cooled, 4-stroke, SOHC, K-9,5:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 110, 98, 4, 45, 5500, 8000),
(25, 39, '26,780,000', 150, 15, 'Single Cylinder, Liquid-cooled, 4 stroke, SOHC, 4 valves, K-10,4 : 1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 14, 128, 118, 4, 48, 7000, 8500),
(26, 40, '20,645,000', 113, 10, 'Single Cylinder, Air cooled 4-stroke, SOHC, K-9,3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 10, 115, 101, 4, 50, 6750, 7750),
(27, 41, '19,940,000', 113, 9, 'Single Cylinder, 4-Stroke, 2 Valves, SOHC, Air Cooled Engine, K-9.4:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 9, 110, 93, 4, 40, 9000, 10500),
(28, 42, '21,025,000', 113, 9, 'Single Cylinder, 4-Stroke, 2-Valve, Air-Cooled, SOHC, K-9.4:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 9, 103, 94, 4, 45, 6000, 8000),
(29, 43, '28,910,000', 147, 18, 'Single Cylinder, 4-Stroke, Liquid Cooled, DOHC, 4-valve, K-11,5:1 (2024)', 'Sport', 'Manual', 'Electric Starter', 14, 145, 109, 4, 40, 8500, 10000),
(30, 44, '31,990,000', 147, 19, '1-cylinder, Water-cooled, 4-stroke, DOHC 4-valve, K-11.5 : 1 (2024) ', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 14, 130, 130, 11, 40, 9000, 10500),
(31, 45, '16,990,000', 125, 10, '4 Stroke, SOHC, Air Cooled, K-9,3 : 1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 9, 120, 106, 4, 40, 6000, 8000),
(32, 46, '19,500,000', 110, 8, 'Single Cylinder, 4 Stroke, Air Conditioned, Injection, K-10,5:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 8, 87, 109, 5, 50, 5500, 7000),
(33, 47, '15,800,000', 110, 8, 'Single Cylinder, 4 Stroke, SOHC, Air Conditioning, K-9,35 : 1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 8, 110, 102, 4, 50, 4500, 8000),
(34, 48, '16,300,000', 125, 11, '4-Stroke, SOHC Engine, K-9.3:1 (2024)', 'Trail-OffRoad', 'Manual', 'Combined Starter', 11, 97, 115, 15, 45, 5500, 8000),
(35, 49, '39,500,000', 64, 0, '2-stroke, liquid-cooled, single-cylinder', 'Trail-OffRoad', 'Manual', 'Electric Starter', 0, 80, 60, 4, 50, 0, 0),
(36, 50, '36,000,000', 177, 13, '2-stroke, liquid-cooled, single-cylinder', 'Trail-OffRoad', 'Manual', 'Electric Starter', 13, 125, 126, 12, 35, 6000, 7500),
(37, 51, '110,900,000', 250, 51, 'Inline 4 Cylinder, 4-Stroke, 16 Valves, Liquid Cooled DOHC Engine', 'Sport', 'Manual', 'Electric Starter', 23, 187, 180, 15, 25, 14500, 15500),
(38, 52, '37,900,000', 144, 12, 'Single Cylinder, 4-Stroke, Air Cooled', 'Sport', 'Manual', 'Electric Starter', 11, 130, 119, 7, 30, 6500, 8500),
(39, 53, '18,430,000', 110, 9, 'Single Cylinder, 4-Stroke, Air Cooled SOHC Engine, K-10,0 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 9, 105, 90, 4, 60, 6000, 7500),
(40, 54, '38,570,000', 150, 17, 'Single Cylinder, 4-Stroke, 4 Valve, DOHC, Liquid Cooled Engine, K-11,3 : 1 (2024)', 'Sport', 'Manual', 'Electric Starter', 14, 140, 137, 12, 41, 7000, 9000),
(41, 55, '28,000,000', 160, 15, 'Single Cylinder, 4-Stroke, 4 Valves, Liquid Cooled, Engine, FI, K-12 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 14, 128, 115, 6, 45, 7000, 8500),
(42, 56, '19,300,000', 110, 9, 'Single Cylinder, 4-Stroke, Air Cooled SOHC Engine, FI, K-10,0 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 9, 110, 89, 4, 60, 6000, 7500),
(43, 57, '28,045,000', 160, 15, 'Single Cylinder, 4-Stroke, Liquid Cooled, SOHC Engine, K-12:1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 14, 120, 118, 5, 45, 7000, 8500),
(44, 58, '29.680.000', 150, 16, 'Single Cylinder ,Liquid Cooled 4-stroke, SOHC, K-10.4 : 1 (2024)', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 15, 130, 132, 12, 40, 7500, 8500),
(45, 59, '21,500,000', 125, 8, 'Single Cylinder, Air Cooled, 4-stroke, SOHC Engine, K-11.0: 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 11, 95, 95, 5, 69, 4500, 6500),
(46, 60, '27,455,000', 125, 8, 'Single Cylinder, 4-Stroke, Air Cooled, SOHC, K-11,0 : 1 (2025)', 'Scooter', 'Automatic', 'Combined Starter', 10, 90, 100, 4, 60, 5000, 6500),
(47, 61, '17,905,000', 125, 9, 'Single Cylinder, Air cooled, 4-stroke, SOHC, K-9,5 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 100, 92, 4, 50, 5500, 8000),
(48, 62, '35,340,000', 147, 19, '1-cylinder, Water-cooled, 4-stroke, DOHC 4-valve, K-11.5 : 1 (2024) ', 'Sport', 'Manual', 'Electric Starter', 14, 137, 131, 11, 38, 9000, 10500),
(49, 63, '26,200,000', 125, 8, 'Single Cylinder, 4-Stroke, Air-Cooled, SOHC Engine, K-10.3 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 105, 111, 6, 50, 5000, 6500),
(50, 64, '59,500,000', 250, 26, 'Single Cylinder, 4 Valves, 4-Stroke, Liquid Cooled, SOHC Engine, K-10,6:1 (2024)', 'Touring', 'Manual', 'Electric Starter', 23, 150, 167, 12, 30, 7300, 9300),
(51, 65, '30,180,000', 124, 8, 'Single Cylinder, 4-Stroke, 2-Valve, Air-Cooled, SOHC Engine, K-10.3 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 105, 110, 5, 47, 5500, 6750),
(52, 66, '56,200,000', 250, 25, 'Single Cylinder, 4-Stroke, 4-Valve, Oil-Cooled, SOHC Engine, K-10,7:1 (2024)', 'Sport', 'Manual', 'Electric Starter', 23, 154, 161, 12, 30, 7500, 9000),
(53, 67, '39,055,000', 155, 16, 'Single Cylinder, 4-Stroke, 4-Valves, Liquid Cooled SOHC VVA Engine, K-11,6 : 1 (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 14, 133, 134, 8, 40, 6500, 10000),
(54, 68, '35,500,000', 225, 20, 'Single Cylinder, 4 Stroke, 4 Valve, SOHC, K-10,1:4 (2024)', 'Cruiser', 'Manual', 'Electric Starter', 20, 120, 160, 14, 35, 3750, 7750),
(55, 69, '14,720,000', 100, 4, 'Single Cylinder, 4 Stroke, Air Conditioned, Injection, K-10,3:1 (2024)', 'Moped-Cub', 'Automatic', 'Combined Starter', 6, 70, 89, 4, 55, 3500, 6000),
(56, 70, '15,900,000', 125, 11, 'Single Cylinder, 4-Stroke Engine, k-9.3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 11, 110, 117, 14, 55, 5500, 8000),
(57, 71, '68,400,000', 250, 38, 'Parallel Twin Cylinder, 8 Valves, 4-Stroke, Liquid Cooled Engine, FI', 'Sport', 'Manual', 'Electric Starter', 23, 175, 163, 14, 25, 10000, 11000),
(58, 72, '41,400,000', 144, 11, 'Single Cylinder, 4-Stroke, 2-Valve, Air-Cooled, SOHC Engine, FI', 'Trail-OffRoad', 'Manual', 'Electric Starter', 12, 90, 93, 6, 30, 6500, 8000),
(59, 73, '37,400,000', 144, 12, 'Single Cylinder, 4-Stroke, Air Cooled', 'Trail-OffRoad', 'Manual', 'Electric Starter', 11, 110, 118, 7, 30, 6500, 8000),
(60, 74, '34,300,000', 177, 13, 'Single Cylinder, 4-Stroke, 2 Valves, SOHC Engine', 'Touring', 'Manual', 'Electric Starter', 14, 120, 121, 14, 35, 6000, 7500),
(61, 75, '133,500,000', 250, 51, 'Inline 4 Cylinder, 4-Stroke, 16 Valves, Liquid Cooled DOHC Engine', 'Sport', 'Manual', 'Electric Starter', 23, 190, 183, 15, 20, 14500, 15500),
(62, 76, '37,205,000', 150, 13, '4-Step, SOHC, 1-Cylinder, K-9.5:1 (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 12, 110, 122, 7, 40, 6500, 8000),
(63, 77, '36,565,000', 160, 16, 'Single Cylinder, 4-Stroke, Liquid Cooled, SOHC Engine, K-12:1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 15, 110, 133, 8, 45, 6500, 8500),
(64, 78, '19,575,000', 110, 9, 'Single Cylinder, 4-Stroke, SOHC Engine', 'Scooter', 'Automatic', 'Combined Starter', 9, 103, 92, 4, 59, 5500, 7500),
(65, 79, '27,040,000', 150, 16, '4-Steps, DOHC, 4-Valves, K-11.3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 13, 135, 115, 4, 40, 6500, 9000),
(66, 80, '19,900,000', 125, 10, '4-Step, SOHC, Single Cylinder, K-9,3:1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 9, 118, 103, 4, 57, 4000, 8000),
(67, 81, '21,855,000', 125, 9, 'Single Cylinder, 4-Stroke, 2-Valve, Air-Cooled, SOHC, K-9,5 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 93, 101, 4, 42, 5500, 8000),
(68, 82, '38,380,000', 155, 19, 'Single Cylinder, 4-Stroke, 4-Valves, Liquid Cooled SOHC Engine, K-11,6 : 1 (2024)', 'Retro-Streetbike', 'Manual', 'Electric Starter', 15, 134, 134, 10, 35, 8500, 10000),
(69, 83, '25.805.000', 155, 15, 'Single Cylinder, 4-Stroke, SOHC Engine, K-11,6 : 1 (2025)', 'Scooter', 'Automatic', 'Electric Starter', 14, 110, 226, 4, 42, 6500, 8000),
(70, 84, '18,660,000', 125, 9, 'Single Cylinder, 4-Stroke, Air-Cooled, SOHC, K-9,5 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 10, 105, 96, 4, 55, 5500, 8000),
(71, 85, '57.730.000', 250, 36, '2 Cylinder, 4-Stroke, 4-Valves DOHC, Liquid Cooled Engine, K-11,6 : 1 (2024)', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 24, 177, 165, 14, 22, 10000, 12000),
(72, 86, '40,400,000', 144, 12, 'Single Cylinder, 4-Stroke, Air Cooled', 'Trail-OffRoad', 'Manual', 'Combined Starter', 11, 110, 119, 7, 32, 6500, 8000),
(73, 87, '873,000,000', 998, 207, 'Liquid-cooled, 4-stroke In-Line Four, DOHC, 16 valves', 'Sport', 'Manual', 'Electric Starter', 140, 323, 238, 17, 15, 11000, 11500),
(74, 88, '49,300,000', 125, 9, 'Air-cooled, 4-stroke Single, SOHC, 2 valves', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 10, 110, 101, 7, 40, 6000, 7500),
(75, 89, '76,200,000', 249, 24, 'Liquid-cooled, 4-stroke Single, DOHC, 4 valves', 'Trail-OffRoad', 'Manual', 'Electric Starter', 21, 121, 138, 8, 30, 7000, 7500),
(76, 90, '72,100,000', 249, 33, 'Liquid-cooled, 4-stroke Parallel Twin, DOHC, 8 valves', 'Touring', 'Manual', 'Electric Starter', 22, 161, 181, 17, 26, 10000, 11500),
(77, 91, '1212', 123123, 12313, '12313', 'Sport', 'Automatic', 'Electric Starter', 13132, 1313, 1313, 133, 1231, 131, 123123),
(78, 92, '121', 121, 1212121, '121', 'Scooter', 'Automatic', 'Electric Starter', 1212, 1212, 12, 1212, 121, 121, 1212),
(79, 93, '21', 12, 121, '121', 'Sport', 'Automatic', 'Electric Starter', 12, 21, 12, 12, 12, 121, 12),
(80, 94, '21', 12, 121, '121', 'Sport', 'Automatic', 'Electric Starter', 12, 21, 12, 12, 12, 121, 12),
(81, 95, '1121', 121, 12, '1212', 'Sport', 'Automatic', 'Electric Starter', 121, 1212, 121, 1212, 121, 121, 1212),
(82, 96, '1221', 1212, 121, '121', 'Sport', 'Automatic', 'Electric Starter', 122, 122, 122, 121, 212, 121, 122),
(83, 97, '1221', 1212, 121, '121', 'Scooter', 'Automatic', 'Electric Starter', 122, 122, 122, 121, 212, 121, 122),
(84, 98, '64,835,000', 250, 38, 'Parallel Twin Cylinder, 4-Stroke, 8-Valve, Liquid Cooled, DOHC Engine, K-11,5 : 1 (STD), 12,5 : 1 (SP|SPQS)(2024)', 'Sport', 'Manual', 'Electric Starter', 23, 185, 166, 15, 20, 11000, 12500),
(85, 99, '22,160,000', 150, 13, '4-Steps, SOHC, 1-Cylinder, K-9,5:1 (2024)', 'Naked-Streetfighter', 'Manual', 'Combined Starter', 13, 122, 129, 12, 45, 6000, 8500),
(86, 100, '31,780,000', 150, 16, 'Single Cylinder, 4-Steps, 4-Valves, DOHC Engine, K-11,3 : 1 (2024)', 'Naked-Streetfighter', 'Manual', 'Combined Starter', 14, 125, 134, 12, 40, 7000, 9000),
(87, 101, '34,520,000', 150, 15, 'Single Cylinder, 4-Stroke, 4 Valves Liquid Cooled, DOHC Engine, K-11,3 : 1 (2024)', 'Touring', 'Manual', 'Electric Starter', 14, 125, 134, 12, 38, 7000, 9000),
(88, 102, '90,515,000', 250, 23, 'Single Cylinder, 4-Stroke, 4-Valve SOHC Engine, K-10,2 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 24, 135, 186, 12, 30, 6250, 7750),
(89, 103, '93,345,000', 250, 24, 'Liquid-Cooled, 4-Stroke, Single Cylinder, DOHC, K-10,7 : 1 (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 23, 144, 152, 13, 30, 6500, 8500),
(90, 104, '291.020.000', 648, 89, '4 Cylinder, 4-Stroke, Liquid Cooled, DOHC Engine, K-11,6 : 1 (2024)', 'Sport', 'Manual', 'Electric Starter', 61, 240, 203, 15, 20, 8000, 11000),
(91, 105, '79,925,000', 250, 25, 'Single Cylinder, 4-Stroke, 4-Valve, Liquid-Cooled, DOHC, K-10,7:1 (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 23, 150, 140, 8, 25, 6500, 8500),
(92, 106, '40,000,000', 0, 2, 'In-Wheel Brushless Motor, Lithium-ion (29,4 Ah), (2024)', 'Scooter', 'Automatic', 'Electric Starter', 90, 45, 94, 0, 0, 25, 540),
(93, 107, '202,545,000', 471, 45, 'Parallel Twin, 4-Stroke, 8-Valve, Liquid Cooled, DOHC Engine, K-10.7 : 1 (2024)', 'Cruiser', 'Manual', 'Electric Starter', 43, 170, 191, 11, 25, 5500, 8500),
(94, 108, '204,530,000', 471, 49, 'Parallel Twin Cylinder, 4-Stroke, Liquid Cooled, DOHC Engine, K-10,7 : 1 (2024)', 'Touring', 'Manual', 'Electric Starter', 44, 181, 199, 18, 26, 6500, 8500),
(95, 109, '83,435,000', 125, 9, 'Single Cylinder, Air Cooled, 4-Stroke, 2 Valve, SOHC, K-10 : 1 (2024)', 'Retro-Streetbike', 'Manual', 'Electric Starter', 11, 95, 104, 5, 66, 5250, 7000),
(96, 110, '77,665,000', 125, 9, 'Single Cylinder, 4-Stroke, Air-Cooled, SOHC', 'Moped-Cub', 'Manual', 'Electric Starter', 10, 100, 107, 4, 65, 5000, 7500),
(97, 111, '375,000,000', 1084, 85, 'SOHC 8-valve parallel twin with 270 crank and uni-cam, Liquid Cooled, K-10.1 : 1 (2024)', 'Cruiser', 'Manual', 'Electric Starter', 98, 210, 233, 13, 20, 4750, 7000),
(98, 112, '81,850,000', 124, 9, 'Single Cylinder, 4-Stroke, Air-Cooled SOHC Engine, K-10 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 11, 85, 116, 5, 45, 4500, 7000),
(99, 113, '1,076,711,000', 999, 214, 'Liquid Cooled, 4-stroke, 16-valve, DOHC, Inline-4, K-13.6:1 (2024)', 'Sport', 'Manual', 'Electric Starter', 113, 345, 200, 16, 14, 12500, 14500),
(100, 114, '82,480,000', 124, 9, 'Single Cylinder, 4-Stroke, Air-Cooled, SOHC Engine, 10 : 1 (2024)', 'Retro-Streetbike', 'Manual', 'Electric Starter', 10, 105, 107, 4, 45, 5000, 7000),
(101, 115, '1,056,285,000', 1833, 124, 'Liquid Cooled horizontally opposed, Six Cylinder, K-10,5 : 1 (2024)', 'Touring', 'Automatic', 'Electric Starter', 170, 200, 390, 21, 16, 4500, 5500),
(102, 116, '633,000,000', 1084, 101, 'SOHC, 8-valve, parallel twin with 270 degree crank and uni-cam, 10,5 : 1 (2024)', 'Touring', 'Automatic', 'Electric Starter', 112, 210, 242, 18, 20, 5500, 7500),
(103, 117, '330,515,000', 755, 90, 'Parallel Twin Cylinder, 4-Stroke, 8 Valves, Liquid-Cooled, SOHC Engine, K-11 : 1 (2024)', 'Touring', 'Manual', 'Electric Starter', 75, 210, 208, 17, 25, 7250, 9500),
(104, 118, '40,330,000', 155, 19, 'Liquid Cooled, 4-Stroke, SOHC, 4 Valve, VVA, Single Cylinder, K-12 : 1 (2025)&quot;', 'Sport', 'Manual', 'Electric Starter', 14, 155, 137, 11, 41, 8500, 10000),
(105, 119, '18,430,000', 115, 8, 'Single/Horizontal Cylinder, 4 Stroke, SOHC, Air-Cooled, K-9,3 : 1 (2024)', 'Moped-Cub', 'Manual', 'Combined Starter', 9, 105, 96, 4, 55, 5500, 7000),
(106, 120, '66,855,000', 249, 22, 'Single Cylinder, Liquid Cooled, 4-Stroke, SOHC, 4 Valves, K-10.5 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 24, 120, 181, 13, 31, 5500, 7000),
(107, 121, '20,355,000', 125, 9, 'Single Cylinder, 4 Stroke, 2 Valve SOHC, Air-Cooled, BlueCore, K-9,5 : 1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 9, 100, 98, 4, 49, 5500, 8000),
(108, 122, '97,000,000', 125, 35, 'Single Cylinder, 2-Stroke, Liquid Cooled Engine, K-8.8:1, (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 22, 126, 95, 8, 10, 10000, 11500),
(109, 123, '33,405,000', 155, 19, 'Single Cylinder, Liquid Cooled 4-Stroke, SOHC, 4 Valve, VVA, K-11.6±0.4 : 1(2024)', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 14, 139, 131, 11, 40, 8500, 10000),
(110, 124, '63,900,000', 250, 35, 'Inline 2-cylinder, Liquid cooled 4-stroke, DOHC, K-11,6 : 1 (2024)', 'Sport', 'Manual', 'Electric Starter', 23, 197, 166, 14, 23, 10000, 12000),
(111, 125, '38,980,000', 155, 19, 'Silinder Tunggal, Liquid cooled, 4-Stroke, SOHC, 4 Valves, VVA, K-11,6 : 1 (2024)', 'Naked-Streetfighter', 'Manual', 'Electric Starter', 14, 124, 133, 10, 40, 8500, 10000),
(112, 126, '129,000,000', 250, 39, 'liquid-cooled, DOHC, 4-stroke, 4 valves, K-13.8:1 (2024)', 'Trail-OffRoad', 'Manual', 'Electric Starter', 24, 144, 106, 6, 15, 10200, 13000),
(113, 127, '37,905,000', 155, 15, 'Single Cylinder, Blue Core, VVA, 4 Valve SOHC + YECVT, k-11.6 : 1 (2024)', 'Scooter', 'Automatic', 'Electric Starter', 14, 140, 135, 7, 40, 6500, 8000),
(114, 128, '22,400,000', 125, 9, 'Single Cylinder, 4 Stroke, Air Conditioned, Injection, k-9.8:1 (2024)', 'Scooter', 'Automatic', 'Combined Starter', 10, 95, 118, 6, 40, 5500, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `gambaralt`
--

CREATE TABLE `gambaralt` (
  `id_gambar` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambaralt`
--

INSERT INTO `gambaralt` (`id_gambar`, `id_alternatif`, `warna`, `gambar`) VALUES
(44, 28, '', 'HondaVario125-1.png'),
(45, 28, '', 'HondaVario125-2.png'),
(46, 28, '', 'HondaVario125-3.png'),
(47, 28, '', 'HondaVario125-4.png'),
(54, 53, '', 'Beat-1.png'),
(55, 53, '', 'Beat-2.png'),
(56, 53, '', 'Beat-3.png'),
(57, 53, '', 'Beat-4.png'),
(58, 53, '', 'Beat-5.png'),
(59, 53, '', 'Beat-6.png'),
(60, 53, '', 'Beat-7.png'),
(61, 54, '', 'HondaCBR150R-1.png'),
(62, 54, '', 'HondaCBR150R-2.png'),
(68, 56, '', 'BeatStreet-1.png'),
(74, 57, '', 'Stylo160-1.png'),
(75, 57, '', 'Stylo160-2.png'),
(76, 57, '', 'Stylo160-3.png'),
(77, 57, '', 'Stylo160-4.png'),
(78, 57, '', 'Stylo160-5.png'),
(79, 76, '', 'CRF150L-1.png'),
(80, 76, '', 'CRF150L-2.png'),
(81, 76, '', 'CRF150L-3.png'),
(82, 77, '', 'HondaADV-1.png'),
(83, 77, '', 'HondaADV-2.png'),
(84, 77, '', 'HondaADV-3.png'),
(85, 77, '', 'HondaADV-4.png'),
(86, 77, '', 'HondaADV-5.png'),
(87, 77, '', 'HondaADV-6.png'),
(88, 78, '', 'Genio-1.png'),
(89, 78, '', 'Genio-2.png'),
(90, 78, '', 'Genio-3.png'),
(91, 78, '', 'Genio-4.png'),
(92, 78, '', 'Genio-5.png'),
(93, 79, '', 'Sonic150R-1.png'),
(94, 79, '', 'Sonic150R-2.png'),
(95, 79, '', 'Sonic150R-3.png'),
(96, 80, '', 'SupraX125-1.png'),
(97, 80, '', 'SupraX125-2.png'),
(98, 98, ' color2', 'cbr250rr-1.png'),
(99, 98, ' color3', 'cbr250rr-2.png'),
(100, 98, ' color4', 'cbr250rr-3.png'),
(101, 98, ' color5', 'cbr250rr-4.png'),
(102, 98, ' color6', 'cbr250rr-5.png'),
(105, 100, '', 'cb150sfire-1.png'),
(106, 100, '', 'cb150sfire-2.png'),
(107, 100, '', 'cb150sfire-3.png'),
(108, 100, '', 'cb150sfire-4.png'),
(109, 101, '', 'hondacb150x-1.png'),
(110, 101, '', 'hondacb150x-2.png'),
(111, 101, '', 'hondacb150x-3.png'),
(115, 102, '', 'hondaforza-1.png'),
(116, 102, '', 'hondaforza-2.png'),
(117, 102, '', 'hondaforza-3.png'),
(118, 33, '', 'Honda-Scoopy-1.png'),
(119, 33, '', 'Honda-Scoopy-2.png'),
(120, 33, '', 'Honda-Scoopy-3.png'),
(121, 33, '', 'Honda-Scoopy-4.png'),
(122, 33, '', 'Honda-Scoopy-5.png'),
(123, 33, '', 'Honda-Scoopy-6.png'),
(124, 33, '', 'Honda-Scoopy-7.png'),
(125, 34, '', 'HondaPCX-1.png'),
(126, 34, '', 'HondaPCX-2.png'),
(127, 34, '', 'HondaPCX-3.png'),
(128, 34, '', 'HondaPCX-4.png'),
(129, 34, '', 'HondaPCX-5.png'),
(130, 34, '', 'HondaPCX-6.png'),
(131, 34, '', 'HondaPCX-7.png'),
(132, 34, '', 'HondaPCX-8.png'),
(133, 34, '', 'HondaPCX-9.png'),
(134, 35, '', 'HondaRevoX-1.png'),
(135, 35, '', 'HondaRevoX-2.png'),
(136, 35, '', 'HondaRevoX-3.png'),
(137, 36, '', 'HondaSupraGTR150-1.png'),
(138, 36, '', 'HondaSupraGTR150-2.png'),
(139, 36, '', 'HondaSupraGTR150-3.png'),
(140, 55, '', 'Vario160-1.png'),
(141, 55, '', 'Vario160-2.png'),
(142, 55, '', 'Vario160-3.png'),
(143, 55, '', 'Vario160-4.png'),
(144, 55, '', 'Vario160-5.png'),
(145, 99, '', 'cb150verza-1.png'),
(146, 99, '', 'cb150verza-2.png'),
(147, 104, '', 'cb650r-1.png'),
(148, 106, '', 'EM1 E-1.png'),
(149, 106, '', 'EM1 E-2.png'),
(150, 106, '', 'EM1 E-3.png'),
(151, 107, '', 'Rebel500-1.png'),
(152, 107, '', 'Rebel500-2.png'),
(153, 108, '', 'HondaCB500X-1.png'),
(154, 108, '', 'HondaCB500X-2.png'),
(155, 109, '', 'HondaMonkey-1.png'),
(156, 109, '', 'HondaMonkey-2.png'),
(157, 110, '', 'HondaSuperCub-1.png'),
(158, 110, '', 'HondaSuperCub-2.png'),
(159, 114, '', 'Honda ST125 Dax-1.png'),
(160, 29, '', 'yamahanmax-1.png'),
(161, 29, '', 'yamahanmax-2.png'),
(162, 29, '', 'yamahanmax-3.png'),
(163, 29, '', 'yamahanmax-4.png'),
(164, 37, '', 'aerox-1.png'),
(165, 37, '', 'aerox-2.png'),
(166, 37, '', 'aerox-3.png'),
(167, 37, '', 'aerox-4.png'),
(168, 37, '', 'aerox-5.png'),
(169, 37, '', 'aerox-6.png'),
(170, 38, '', 'fino-1.png'),
(171, 38, '', 'fino-2.png'),
(172, 38, '', 'fino-3.png'),
(173, 38, '', 'fino-4.png'),
(174, 38, '', 'fino-5.png'),
(175, 38, '', 'fino-6.png'),
(176, 38, '', 'fino-7.png'),
(177, 39, '', 'mxking-1.png'),
(178, 39, '', 'mxking-2.png'),
(179, 40, '', 'jupiterz1-1.png'),
(180, 40, '', 'jupiterz1-2.png'),
(181, 58, '', 'vixion-1.png'),
(182, 58, '', 'vixion-2.png'),
(183, 59, '', 'fazzio-1.png'),
(184, 59, '', 'fazzio-2.png'),
(185, 59, '', 'fazzio-3.png'),
(186, 59, '', 'fazzio-4.png'),
(187, 59, '', 'fazzio-5.png'),
(188, 59, '', 'fazzio-6.png'),
(189, 59, '', 'fazzio-7.png'),
(190, 59, '', 'fazzio-8.png'),
(191, 60, '', 'grandfilano-1.png'),
(192, 60, '', 'grandfilano-2.png'),
(193, 60, '', 'grandfilano-3.png'),
(194, 60, '', 'grandfilano-4.png'),
(195, 60, '', 'grandfilano-5.png'),
(196, 67, '', 'wr155r-1.png'),
(197, 61, '', 'miom3-1.png'),
(198, 61, '', 'miom3-2.png'),
(199, 61, '', 'miom3-3.png'),
(200, 81, '', 'freego-1.png'),
(201, 81, '', 'freego-2.png'),
(202, 81, '', 'freego-3.png'),
(203, 81, '', 'freego-4.png'),
(204, 81, '', 'freego-5.png'),
(205, 82, '', 'xsr155-1.png'),
(206, 82, '', 'xsr155-2.png'),
(207, 82, '', 'xsr155-3.png'),
(208, 83, '', 'lexils155-1.png'),
(209, 83, '', 'lexils155-2.png'),
(210, 83, '', 'lexils155-3.png'),
(211, 83, '', 'lexils155-4.png'),
(212, 83, '', 'lexils155-5.png'),
(213, 83, '', 'lexils155-6.png'),
(214, 84, '', 'gear-1.png'),
(215, 84, '', 'gear-2.png'),
(216, 84, '', 'gear-3.png'),
(217, 84, '', 'gear-4.png'),
(218, 84, '', 'gear-5.png'),
(219, 84, '', 'gear-6.png'),
(220, 85, '', 'mt25-1.png'),
(221, 118, '', 'r15c-1.png'),
(222, 118, '', 'r15c-2.png'),
(223, 118, '', 'r15c-3.png'),
(224, 119, '', 'vegaforce-1.png'),
(225, 120, '', 'xmax-1.png'),
(226, 120, '', 'xmax-2.png'),
(227, 120, '', 'xmax-3.png'),
(228, 121, '', 'xride-1.png'),
(229, 121, '', 'xride-2.png'),
(230, 123, '', 'vixionr-1.png'),
(231, 124, '', 'YZFR25-1.png'),
(232, 124, '', 'YZFR25-2.png'),
(233, 125, '', 'MT-15-1.png'),
(234, 127, '', 'nmaxturbo-1.png'),
(235, 127, '', 'nmaxturbo-2.png'),
(236, 127, '', 'nmaxturbo-3.png'),
(237, 127, '', 'nmaxturbo-4.png'),
(238, 127, '', 'nmaxturbo-5.png'),
(239, 127, '', 'nmaxturbo-6.png'),
(240, 127, '', 'nmaxturbo-7.png'),
(241, 127, '', 'nmaxturbo-8.png'),
(242, 127, '', 'nmaxturbo-9.png'),
(243, 127, '', 'nmaxturbo-10.png'),
(244, 127, '', 'nmaxturbo-11.png'),
(245, 30, '', 'addressfi-1.webp'),
(246, 30, '', 'addressfi-2.webp'),
(247, 30, '', 'addressfi-3.webp'),
(248, 30, '', 'addressfi-4.webp'),
(249, 41, '', 'nexII-1.webp'),
(250, 41, '', 'nexII-2.webp'),
(251, 41, '', 'nexII-3.webp'),
(252, 41, '', 'nexII-4.webp'),
(253, 41, '', 'nexII-5.webp'),
(254, 42, '', 'nexcrossover-1.webp'),
(255, 42, '', 'nexcrossover-2.webp'),
(256, 43, '', 'satriaf150-1-Photoroom.png'),
(257, 43, '', 'satriaf150-2-Photoroom.png'),
(258, 44, '', 'gsxs150-1.webp'),
(259, 62, '', 'gsxr150-1.webp'),
(260, 62, '', 'gsxr150-2.webp'),
(261, 62, '', 'gsxr150-3.webp'),
(262, 63, '', 'burgman125-1.webp'),
(263, 63, '', 'burgman125-2.webp'),
(264, 64, '', 'vstorm250sx-1.webp'),
(265, 64, '', 'vstorm250sx-2.webp'),
(266, 65, '', 'avenis-1-Photoroom.png'),
(267, 65, '', 'avenis-2-Photoroom.png'),
(268, 66, '', 'gixxer250sf-1.webp'),
(269, 31, '', 'tvsdazz-1.webp'),
(270, 31, '', 'tvsdazz-2.webp'),
(271, 31, '', 'tvsdazz-3.webp'),
(272, 31, '', 'tvsdazz-4.webp'),
(273, 45, '', 'rockz-1.webp'),
(274, 45, '', 'rockz-2.webp'),
(275, 45, '', 'rockz-3.webp'),
(276, 45, '', 'rockz-4.webp'),
(277, 46, '', 'callisto-1.webp'),
(278, 47, '', 'neoxr-1.webp'),
(279, 47, '', 'neoxr-2.webp'),
(280, 47, '', 'neoxr-3.webp'),
(281, 48, '', 'tvsmaxtrail-1.webp'),
(282, 68, '', 'roninss-1.webp'),
(283, 69, '', 'XL 100-1.webp'),
(284, 70, '', 'maxsport-1.webp'),
(285, 128, '', 'TVS Ntorq 125-1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis_kriteria` set('Benefit','Cost') NOT NULL,
  `bobot_kriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot_kriteria`) VALUES
(1, 'C01', 'Harga', 'Cost', 0.7),
(2, 'C02', 'Konsumsi BBM', 'Benefit', 0.3),
(7, 'C03', 'Tenaga HP', 'Benefit', 0),
(8, 'C04', 'Kecepatan KMH', 'Benefit', 0),
(9, 'C05', 'Kapasitas CC', 'Benefit', 0),
(10, 'C06', 'Kapasitas Tangki', 'Benefit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `matriks`
--

CREATE TABLE `matriks` (
  `id_matriks` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks`
--

INSERT INTO `matriks` (`id_matriks`, `id_alternatif`, `id_kriteria`, `id_subkriteria`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 2, 1, 4),
(4, 2, 2, 5),
(5, 3, 1, 2),
(6, 3, 2, 5),
(7, 4, 1, 4),
(8, 4, 2, 1),
(9, 5, 1, 2),
(10, 5, 2, 5),
(11, 6, 1, 2),
(12, 6, 2, 1),
(13, 7, 1, 2),
(14, 7, 2, 1),
(15, 8, 1, 2),
(16, 8, 2, 1),
(17, 9, 1, 2),
(18, 9, 2, 1),
(41, 22, 1, 2),
(42, 22, 2, 1),
(43, 23, 1, 2),
(44, 23, 2, 1),
(45, 24, 1, 2),
(46, 24, 2, 1),
(47, 25, 1, 2),
(48, 25, 2, 1),
(49, 26, 1, 2),
(50, 26, 2, 1),
(51, 27, 1, 2),
(52, 27, 2, 1),
(55, 0, 1, 4),
(56, 0, 2, 1),
(425, 51, 1, 39),
(426, 51, 2, 46),
(427, 51, 7, 63),
(428, 51, 8, 76),
(429, 51, 9, 84),
(430, 51, 10, 97),
(431, 52, 1, 10),
(432, 52, 2, 47),
(433, 52, 7, 57),
(434, 52, 8, 74),
(435, 52, 9, 82),
(436, 52, 10, 93),
(437, 32, 1, 37),
(438, 32, 2, 47),
(439, 32, 7, 60),
(440, 32, 8, 75),
(441, 32, 9, 84),
(442, 32, 10, 94),
(443, 49, 1, 10),
(444, 49, 2, 50),
(445, 49, 7, 55),
(446, 49, 8, 70),
(447, 49, 9, 80),
(448, 49, 10, 90),
(449, 50, 1, 10),
(450, 50, 2, 48),
(451, 50, 7, 58),
(452, 50, 8, 74),
(453, 50, 9, 83),
(454, 50, 10, 96),
(563, 71, 1, 11),
(564, 71, 2, 46),
(565, 71, 7, 61),
(566, 71, 8, 76),
(567, 71, 9, 84),
(568, 71, 10, 97),
(569, 72, 1, 10),
(570, 72, 2, 47),
(571, 72, 7, 57),
(572, 72, 8, 70),
(573, 72, 9, 82),
(574, 72, 10, 92),
(575, 73, 1, 10),
(576, 73, 2, 47),
(577, 73, 7, 57),
(578, 73, 8, 73),
(579, 73, 9, 82),
(580, 73, 10, 93),
(581, 74, 1, 10),
(582, 74, 2, 48),
(583, 74, 7, 58),
(584, 74, 8, 73),
(585, 74, 9, 83),
(586, 74, 10, 97),
(587, 75, 1, 39),
(588, 75, 2, 46),
(589, 75, 7, 63),
(590, 75, 8, 77),
(591, 75, 9, 84),
(592, 75, 10, 97),
(653, 86, 1, 10),
(654, 86, 2, 47),
(655, 86, 7, 57),
(656, 86, 8, 72),
(657, 86, 9, 82),
(658, 86, 10, 93),
(659, 87, 1, 44),
(660, 87, 2, 12),
(661, 87, 7, 68),
(662, 87, 8, 79),
(663, 87, 9, 88),
(664, 87, 10, 98),
(665, 88, 1, 10),
(666, 88, 2, 48),
(667, 88, 7, 56),
(668, 88, 8, 72),
(669, 88, 9, 81),
(670, 88, 10, 93),
(671, 89, 1, 37),
(672, 89, 2, 47),
(673, 89, 7, 60),
(674, 89, 8, 73),
(675, 89, 9, 84),
(676, 89, 10, 94),
(677, 90, 1, 37),
(678, 90, 2, 46),
(679, 90, 7, 61),
(680, 90, 8, 75),
(681, 90, 9, 84),
(682, 90, 10, 98),
(785, 28, 1, 8),
(786, 28, 2, 50),
(787, 28, 7, 57),
(788, 28, 8, 72),
(789, 28, 9, 81),
(790, 28, 10, 92),
(809, 53, 1, 7),
(810, 53, 2, 52),
(811, 53, 7, 56),
(812, 53, 8, 71),
(813, 53, 9, 80),
(814, 53, 10, 90),
(815, 54, 1, 10),
(816, 54, 2, 48),
(817, 54, 7, 58),
(818, 54, 8, 74),
(819, 54, 9, 84),
(820, 54, 10, 96),
(827, 56, 1, 7),
(828, 56, 2, 52),
(829, 56, 7, 56),
(830, 56, 8, 72),
(831, 56, 9, 80),
(832, 56, 10, 90),
(839, 57, 1, 9),
(840, 57, 2, 49),
(841, 57, 7, 58),
(842, 57, 8, 73),
(843, 57, 9, 83),
(844, 57, 10, 91),
(845, 76, 1, 10),
(846, 76, 2, 48),
(847, 76, 7, 58),
(848, 76, 8, 72),
(849, 76, 9, 82),
(850, 76, 10, 93),
(851, 77, 1, 10),
(852, 77, 2, 49),
(853, 77, 7, 58),
(854, 77, 8, 72),
(855, 77, 9, 83),
(856, 77, 10, 94),
(857, 78, 1, 7),
(858, 78, 2, 51),
(859, 78, 7, 56),
(860, 78, 8, 71),
(861, 78, 9, 80),
(862, 78, 10, 90),
(863, 79, 1, 9),
(864, 79, 2, 48),
(865, 79, 7, 58),
(866, 79, 8, 74),
(867, 79, 9, 82),
(868, 79, 10, 90),
(869, 80, 1, 7),
(870, 80, 2, 51),
(871, 80, 7, 57),
(872, 80, 8, 73),
(873, 80, 9, 81),
(874, 80, 10, 90),
(875, 98, 1, 11),
(876, 98, 2, 46),
(877, 98, 7, 61),
(878, 98, 8, 76),
(879, 98, 9, 84),
(880, 98, 10, 97),
(887, 100, 1, 9),
(888, 100, 2, 48),
(889, 100, 7, 58),
(890, 100, 8, 74),
(891, 100, 9, 82),
(892, 100, 10, 96),
(893, 101, 1, 10),
(894, 101, 2, 48),
(895, 101, 7, 58),
(896, 101, 8, 74),
(897, 101, 9, 82),
(898, 101, 10, 96),
(905, 102, 1, 38),
(906, 102, 2, 47),
(907, 102, 7, 60),
(908, 102, 8, 74),
(909, 102, 9, 84),
(910, 102, 10, 96),
(911, 33, 1, 8),
(912, 33, 2, 51),
(913, 33, 7, 56),
(914, 33, 8, 73),
(915, 33, 9, 80),
(916, 33, 10, 90),
(917, 34, 1, 10),
(918, 34, 2, 48),
(919, 34, 7, 58),
(920, 34, 8, 73),
(921, 34, 9, 83),
(922, 34, 10, 94),
(923, 35, 1, 7),
(924, 35, 2, 52),
(925, 35, 7, 56),
(926, 35, 8, 72),
(927, 35, 9, 80),
(928, 35, 10, 90),
(929, 36, 1, 8),
(930, 36, 2, 48),
(931, 36, 7, 58),
(932, 36, 8, 74),
(933, 36, 9, 82),
(934, 36, 10, 91),
(935, 55, 1, 9),
(936, 55, 2, 49),
(937, 55, 7, 58),
(938, 55, 8, 74),
(939, 55, 9, 83),
(940, 55, 10, 92),
(941, 99, 1, 8),
(942, 99, 2, 49),
(943, 99, 7, 58),
(944, 99, 8, 73),
(945, 99, 9, 82),
(946, 99, 10, 96),
(947, 103, 1, 38),
(948, 103, 2, 47),
(949, 103, 7, 60),
(950, 103, 8, 74),
(951, 103, 9, 84),
(952, 103, 10, 96),
(953, 104, 1, 41),
(954, 104, 2, 46),
(955, 104, 7, 64),
(956, 104, 8, 78),
(957, 104, 9, 86),
(958, 104, 10, 97),
(959, 105, 1, 37),
(960, 105, 2, 47),
(961, 105, 7, 60),
(962, 105, 8, 74),
(963, 105, 9, 84),
(964, 105, 10, 94),
(965, 106, 1, 10),
(966, 106, 2, 12),
(967, 106, 7, 55),
(968, 106, 8, 70),
(969, 106, 9, 80),
(970, 106, 10, 90),
(971, 107, 1, 40),
(972, 107, 2, 46),
(973, 107, 7, 62),
(974, 107, 8, 76),
(975, 107, 9, 85),
(976, 107, 10, 95),
(977, 108, 1, 40),
(978, 108, 2, 46),
(979, 108, 7, 63),
(980, 108, 8, 76),
(981, 108, 9, 85),
(982, 108, 10, 98),
(983, 109, 1, 37),
(984, 109, 2, 53),
(985, 109, 7, 56),
(986, 109, 8, 70),
(987, 109, 9, 81),
(988, 109, 10, 91),
(989, 110, 1, 37),
(990, 110, 2, 53),
(991, 110, 7, 56),
(992, 110, 8, 71),
(993, 110, 9, 81),
(994, 110, 10, 90),
(995, 111, 1, 41),
(996, 111, 2, 46),
(997, 111, 7, 64),
(998, 111, 8, 77),
(999, 111, 9, 88),
(1000, 111, 10, 96),
(1001, 112, 1, 37),
(1002, 112, 2, 49),
(1003, 112, 7, 56),
(1004, 112, 8, 70),
(1005, 112, 9, 81),
(1006, 112, 10, 91),
(1007, 113, 1, 45),
(1008, 113, 2, 12),
(1009, 113, 7, 68),
(1010, 113, 8, 103),
(1011, 113, 9, 88),
(1012, 113, 10, 97),
(1013, 114, 1, 37),
(1014, 114, 2, 49),
(1015, 114, 7, 56),
(1016, 114, 8, 71),
(1017, 114, 9, 81),
(1018, 114, 10, 90),
(1019, 115, 1, 45),
(1020, 115, 2, 12),
(1021, 115, 7, 67),
(1022, 115, 8, 77),
(1023, 115, 9, 89),
(1024, 115, 10, 98),
(1025, 116, 1, 43),
(1026, 116, 2, 46),
(1027, 116, 7, 65),
(1028, 116, 8, 77),
(1029, 116, 9, 88),
(1030, 116, 10, 98),
(1031, 117, 1, 41),
(1032, 117, 2, 46),
(1033, 117, 7, 64),
(1034, 117, 8, 77),
(1035, 117, 9, 87),
(1036, 117, 10, 97),
(1037, 29, 1, 9),
(1038, 29, 2, 48),
(1039, 29, 7, 58),
(1040, 29, 8, 73),
(1041, 29, 9, 82),
(1042, 29, 10, 93),
(1043, 37, 1, 9),
(1044, 37, 2, 49),
(1045, 37, 7, 58),
(1046, 37, 8, 73),
(1047, 37, 9, 82),
(1048, 37, 10, 92),
(1049, 38, 1, 7),
(1050, 38, 2, 49),
(1051, 38, 7, 56),
(1052, 38, 8, 72),
(1053, 38, 9, 81),
(1054, 38, 10, 90),
(1055, 39, 1, 8),
(1056, 39, 2, 49),
(1057, 39, 7, 58),
(1058, 39, 8, 74),
(1059, 39, 9, 82),
(1060, 39, 10, 90),
(1061, 40, 1, 7),
(1062, 40, 2, 50),
(1063, 40, 7, 57),
(1064, 40, 8, 73),
(1065, 40, 9, 80),
(1066, 40, 10, 90),
(1067, 58, 1, 9),
(1068, 58, 2, 48),
(1069, 58, 7, 58),
(1070, 58, 8, 74),
(1071, 58, 9, 82),
(1072, 58, 10, 96),
(1073, 59, 1, 8),
(1074, 59, 2, 54),
(1075, 59, 7, 55),
(1076, 59, 8, 70),
(1077, 59, 9, 81),
(1078, 59, 10, 91),
(1079, 60, 1, 9),
(1080, 60, 2, 52),
(1081, 60, 7, 55),
(1082, 60, 8, 70),
(1083, 60, 9, 81),
(1084, 60, 10, 90),
(1085, 67, 1, 10),
(1086, 67, 2, 48),
(1087, 67, 7, 58),
(1088, 67, 8, 74),
(1089, 67, 9, 82),
(1090, 67, 10, 94),
(1091, 61, 1, 7),
(1092, 61, 2, 50),
(1093, 61, 7, 56),
(1094, 61, 8, 71),
(1095, 61, 9, 81),
(1096, 61, 10, 90),
(1097, 81, 1, 7),
(1098, 81, 2, 48),
(1099, 81, 7, 56),
(1100, 81, 8, 70),
(1101, 81, 9, 81),
(1102, 81, 10, 90),
(1103, 82, 1, 10),
(1104, 82, 2, 47),
(1105, 82, 7, 59),
(1106, 82, 8, 74),
(1107, 82, 9, 82),
(1108, 82, 10, 95),
(1109, 83, 1, 8),
(1110, 83, 2, 48),
(1111, 83, 7, 58),
(1112, 83, 8, 72),
(1113, 83, 9, 82),
(1114, 83, 10, 90),
(1115, 84, 1, 7),
(1116, 84, 2, 51),
(1117, 84, 7, 56),
(1118, 84, 8, 72),
(1119, 84, 9, 81),
(1120, 84, 10, 90),
(1121, 85, 1, 11),
(1122, 85, 2, 46),
(1123, 85, 7, 61),
(1124, 85, 8, 76),
(1125, 85, 9, 84),
(1126, 85, 10, 97),
(1127, 118, 1, 10),
(1128, 118, 2, 48),
(1129, 118, 7, 59),
(1130, 118, 8, 75),
(1131, 118, 9, 83),
(1132, 118, 10, 95),
(1133, 119, 1, 7),
(1134, 119, 2, 51),
(1135, 119, 7, 55),
(1136, 119, 8, 71),
(1137, 119, 9, 80),
(1138, 119, 10, 90),
(1139, 120, 1, 11),
(1140, 120, 2, 47),
(1141, 120, 7, 59),
(1142, 120, 8, 73),
(1143, 120, 9, 84),
(1144, 120, 10, 96),
(1145, 121, 1, 7),
(1146, 121, 2, 49),
(1147, 121, 7, 56),
(1148, 121, 8, 71),
(1149, 121, 9, 81),
(1150, 121, 10, 90),
(1151, 122, 1, 38),
(1152, 122, 2, 12),
(1153, 122, 7, 61),
(1154, 122, 8, 74),
(1155, 122, 9, 81),
(1156, 122, 10, 94),
(1157, 123, 1, 10),
(1158, 123, 2, 48),
(1159, 123, 7, 59),
(1160, 123, 8, 74),
(1161, 123, 9, 83),
(1162, 123, 10, 95),
(1163, 124, 1, 11),
(1164, 124, 2, 46),
(1165, 124, 7, 61),
(1166, 124, 8, 77),
(1167, 124, 9, 84),
(1168, 124, 10, 97),
(1169, 125, 1, 10),
(1170, 125, 2, 48),
(1171, 125, 7, 59),
(1172, 125, 8, 74),
(1173, 125, 9, 82),
(1174, 125, 10, 95),
(1175, 126, 1, 39),
(1176, 126, 2, 12),
(1177, 126, 7, 61),
(1178, 126, 8, 74),
(1179, 126, 9, 84),
(1180, 126, 10, 92),
(1181, 127, 1, 10),
(1182, 127, 2, 48),
(1183, 127, 7, 58),
(1184, 127, 8, 74),
(1185, 127, 9, 83),
(1186, 127, 10, 93),
(1187, 30, 1, 7),
(1188, 30, 2, 49),
(1189, 30, 7, 56),
(1190, 30, 8, 71),
(1191, 30, 9, 80),
(1192, 30, 10, 91),
(1193, 41, 1, 7),
(1194, 41, 2, 48),
(1195, 41, 7, 56),
(1196, 41, 8, 72),
(1197, 41, 9, 80),
(1198, 41, 10, 90),
(1199, 42, 1, 7),
(1200, 42, 2, 49),
(1201, 42, 7, 56),
(1202, 42, 8, 71),
(1203, 42, 9, 80),
(1204, 42, 10, 90),
(1205, 43, 1, 9),
(1206, 43, 2, 48),
(1207, 43, 7, 59),
(1208, 43, 8, 75),
(1209, 43, 9, 82),
(1210, 43, 10, 90),
(1211, 44, 1, 9),
(1212, 44, 2, 48),
(1213, 44, 7, 59),
(1214, 44, 8, 74),
(1215, 44, 9, 82),
(1216, 44, 10, 95),
(1217, 62, 1, 10),
(1218, 62, 2, 48),
(1219, 62, 7, 59),
(1220, 62, 8, 74),
(1221, 62, 9, 82),
(1222, 62, 10, 95),
(1223, 63, 1, 8),
(1224, 63, 2, 50),
(1225, 63, 7, 55),
(1226, 63, 8, 72),
(1227, 63, 9, 81),
(1228, 63, 10, 92),
(1229, 64, 1, 11),
(1230, 64, 2, 47),
(1231, 64, 7, 60),
(1232, 64, 8, 75),
(1233, 64, 9, 84),
(1234, 64, 10, 96),
(1235, 65, 1, 9),
(1236, 65, 2, 49),
(1237, 65, 7, 55),
(1238, 65, 8, 72),
(1239, 65, 9, 81),
(1240, 65, 10, 91),
(1241, 66, 1, 11),
(1242, 66, 2, 47),
(1243, 66, 7, 60),
(1244, 66, 8, 75),
(1245, 66, 9, 84),
(1246, 66, 10, 96),
(1247, 31, 1, 6),
(1248, 31, 2, 48),
(1249, 31, 7, 56),
(1250, 31, 8, 71),
(1251, 31, 9, 80),
(1252, 31, 10, 91),
(1253, 45, 1, 6),
(1254, 45, 2, 48),
(1255, 45, 7, 57),
(1256, 45, 8, 73),
(1257, 45, 9, 81),
(1258, 45, 10, 90),
(1259, 46, 1, 7),
(1260, 46, 2, 50),
(1261, 46, 7, 55),
(1262, 46, 8, 70),
(1263, 46, 9, 80),
(1264, 46, 10, 91),
(1265, 47, 1, 6),
(1266, 47, 2, 50),
(1267, 47, 7, 55),
(1268, 47, 8, 72),
(1269, 47, 9, 80),
(1270, 47, 10, 90),
(1271, 48, 1, 6),
(1272, 48, 2, 49),
(1273, 48, 7, 57),
(1274, 48, 8, 70),
(1275, 48, 9, 81),
(1276, 48, 10, 97),
(1277, 68, 1, 10),
(1278, 68, 2, 47),
(1279, 68, 7, 59),
(1280, 68, 8, 73),
(1281, 68, 9, 84),
(1282, 68, 10, 97),
(1283, 69, 1, 6),
(1284, 69, 2, 51),
(1285, 69, 7, 55),
(1286, 69, 8, 70),
(1287, 69, 9, 80),
(1288, 69, 10, 90),
(1289, 70, 1, 6),
(1290, 70, 2, 51),
(1291, 70, 7, 57),
(1292, 70, 8, 72),
(1293, 70, 9, 81),
(1294, 70, 10, 96),
(1295, 128, 1, 8),
(1296, 128, 2, 48),
(1297, 128, 7, 56),
(1298, 128, 8, 71),
(1299, 128, 9, 81),
(1300, 128, 10, 92);

-- --------------------------------------------------------

--
-- Table structure for table `peringkat`
--

CREATE TABLE `peringkat` (
  `id_peringkat` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai_peringkat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peringkat`
--

INSERT INTO `peringkat` (`id_peringkat`, `id_alternatif`, `nilai_peringkat`) VALUES
(295, 36, 0.7),
(296, 37, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(30) NOT NULL,
  `nilai_subkriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(6, 1, '&lt;= Rp. 15,000,000', 1),
(7, 1, '&lt;= Rp. 20,000,000', 2),
(8, 1, '&lt;= Rp. 25,000,000', 3),
(9, 1, '&lt;= Rp. 30,000,000', 4),
(10, 1, '&lt;= Rp. 40,000,000', 5),
(11, 1, '&lt;= Rp. 70,000,000', 6),
(12, 2, '15 km/liter', 1),
(37, 1, '&lt;= Rp. 80,000,000', 7),
(38, 1, '&lt;= Rp. 100,000,000', 8),
(39, 1, '&lt;= Rp. 150,000,000', 9),
(40, 1, '&lt;= Rp. 200,000,000', 10),
(41, 1, '&lt;= Rp. 300,000,000', 11),
(42, 1, '&lt;= Rp. 500,000,000', 12),
(43, 1, '&lt;= Rp. 700,000,000', 13),
(44, 1, '&lt;= Rp. 900,000,000', 14),
(45, 1, '-+ Rp. 1,000,000,000', 15),
(46, 2, '20 km/liter', 2),
(47, 2, '30 km/liter', 3),
(48, 2, '40 km/liter', 4),
(49, 2, '45 km/liter', 5),
(50, 2, '50 km/liter', 6),
(51, 2, '55 km/liter', 7),
(52, 2, '60 km/liter', 8),
(53, 2, '65 km/liter', 9),
(54, 2, '&gt;= 70 km/liter', 10),
(55, 7, '&lt;=8 hp', 1),
(56, 7, '9 hp', 2),
(57, 7, '10 hp', 3),
(58, 7, '15 hp', 4),
(59, 7, '20 hp', 5),
(60, 7, '25 hp', 6),
(61, 7, '40 hp', 7),
(62, 7, '45 hp', 8),
(63, 7, '50 hp', 9),
(64, 7, '90 hp', 10),
(65, 7, '100 hp', 11),
(66, 7, '120 hp', 12),
(67, 7, '125 hp', 13),
(68, 7, '215 hp', 14),
(69, 7, '&lt;= 225 hp', 15),
(70, 8, '&lt;=90 kmph', 1),
(71, 8, '100 kmph', 2),
(72, 8, '110 kmph', 3),
(73, 8, '115 kmph', 4),
(74, 8, '130 kmph', 5),
(75, 8, '160 kmph', 6),
(76, 8, '180 kmph', 7),
(77, 8, '200 kmph', 8),
(78, 8, '230 kmph', 9),
(79, 8, '250 kmph', 10),
(80, 9, '&lt;= 110 cc', 1),
(81, 9, '125 cc', 2),
(82, 9, '150 cc', 3),
(83, 9, '160 cc', 4),
(84, 9, '250 cc', 5),
(85, 9, '500 cc', 6),
(86, 9, '650 cc', 7),
(87, 9, '750 cc', 8),
(88, 9, '1000 cc', 9),
(89, 9, '&gt;= 1800 cc', 10),
(90, 10, '4 liter', 1),
(91, 10, '5 liter', 2),
(92, 10, '6 Liter', 3),
(93, 10, '7 liter', 4),
(94, 10, '8 Liter', 5),
(95, 10, '10 liter', 6),
(96, 10, '13 Liter', 7),
(97, 10, '15 liter', 8),
(98, 10, '20 liter', 9),
(99, 10, '&gt;= 25 liter', 10),
(100, 8, '280 kmph', 11),
(101, 8, '300 kmph', 12),
(102, 8, '320 kmph', 13),
(103, 8, '345 kmph', 14),
(104, 8, '=&gt;380 kmph', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `level` set('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `nama`, `username`, `password`, `gambar`, `level`) VALUES
(3, 'Gusmon A. Jama', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '8.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id_checked`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `gambaralt`
--
ALTER TABLE `gambaralt`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`id_matriks`);

--
-- Indexes for table `peringkat`
--
ALTER TABLE `peringkat`
  ADD PRIMARY KEY (`id_peringkat`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `checked`
--
ALTER TABLE `checked`
  MODIFY `id_checked` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `gambaralt`
--
ALTER TABLE `gambaralt`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matriks`
--
ALTER TABLE `matriks`
  MODIFY `id_matriks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301;

--
-- AUTO_INCREMENT for table `peringkat`
--
ALTER TABLE `peringkat`
  MODIFY `id_peringkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambaralt`
--
ALTER TABLE `gambaralt`
  ADD CONSTRAINT `gambaralt_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
