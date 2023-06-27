-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `nama_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `nama_city`) VALUES
(1, 'Jember'),
(2, 'Surabaya'),
(3, 'Kediri'),
(4, 'Lumajang'),
(5, 'Sidoarjo'),
(6, 'Banyuwangi'),
(7, 'Mojokerto'),
(8, 'Ngawi'),
(9, 'Madiun'),
(10, 'Pasuruan'),
(11, 'Gresik'),
(12, 'Batu'),
(13, 'Tulungagung\r\n'),
(14, 'Malang'),
(15, 'Nganjuk'),
(16, 'Pasuruan'),
(17, 'Situbondo'),
(18, 'Pamekasan'),
(19, 'Ponorogo'),
(20, 'Bondowoso');

-- --------------------------------------------------------

--
-- Table structure for table `daftars_`
--

CREATE TABLE `daftars_` (
  `daftar_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `rs_id` int(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `vaksin_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`rs_id`, `nama_rs`, `alamat`, `vaksin_id`, `city_id`) VALUES
(1, 'RSUD Dr Soebandi', 'Jl. DR. Soebandi No.124, Krajan, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68111', 2, 1),
(2, 'Rumah Sakit Bina Sehat', 'Jl. Jayanegara No.7, Kaliwates Kidul, Kaliwates, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131', 1, 1),
(3, 'Rumah Sakit Umum Daerah Dr. Soetomo', 'Jl. Mayjen Prof. Dr. Moestopo No.6-8, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286', 2, 2),
(4, 'RSUD Sidoarjo', 'Jl. Mojopahit No.667, Sidowayah, Celep, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215', 1, 5),
(5, 'RSU Pacitan', 'Jl. Jen A Yani No.51 Pacitan', 1, 19),
(6, 'RSU Ponorogo', 'Jl. Ciptomangunkusumo Ponorogo', 3, 19),
(7, 'RS Aisyiah', 'Jl. Dr Sutomo 18 Ponorogo', 2, 19),
(8, 'RSIA Darmayu', 'Jl. Dr. Soetomo 44 Ponorogo', 4, 19),
(9, 'RSU Dr Soetomo Trenggalek', 'Jl. Dr Sutomo No.2 Trenggalek', 2, 9),
(10, 'RSU Tulungagung', 'Jl. Dr WS Husodo Tulungagung', 3, 13),
(11, 'RS Islam Orpeha', 'Jl. KHR Abdul Fatah Tulungagung', 4, 13),
(12, 'RSU Wlingi', 'Jl. Dr Sucipto No.5 Wlingi', 1, 13),
(13, 'RSU Pare', 'Jl. Pahlawan (DS Palem) Pare', 4, 3),
(14, 'RS PTP XXI Toeloengredjo', 'Jl. A Yani 25 Pare Kediri', 2, 3),
(15, 'RSU Bala Keselamatan', 'Jl. A Yani 91 Turen Kab Malang', 2, 14),
(16, 'RS Jiwa Lawang', 'Jl. Jend A Yani Lawang', 1, 12),
(17, 'RS TP Batu', 'Jl. A Yani No.10-13 Batu Malang', 4, 12),
(18, 'RSU Kepanjen', '	Jl. Panggungrejo 1 Kepanjen', 3, 14),
(19, 'RSU Nararyya Kirana', 'Jl. A Yani 281 Lumajang', 1, 4),
(20, 'RS PTP XXIV Jatiroto', 'Jl. Dr Sudirman Jatiroto Lumajang', 2, 4),
(21, 'RS Wijaya Kusuma', 'Jl. A Yani No.149 Lumajang', 2, 4),
(22, 'RSU Dr Soebandi', 'Jl. Dr Soebandi No.1 Jember', 2, 1),
(23, 'RS PTPN X Jember', 'Jl. Bedadung No.2 Jember', 3, 1),
(24, 'RS Rem 083 Jember', 'Jl. PB Sudirman No.49 Jember', 4, 1),
(25, 'RS TP Jember', 'Jl. Nusa Indah No.28 Jember', 1, 1),
(26, 'RS Utama Husada', 'Jl. Nanggar 134 Ambulu Jember', 2, 1),
(27, 'RSU Blambangan', 'Jl. Istiqlah No.49 Banyuwangi', 1, 6),
(28, 'RS PTP XXVI Bakti Husada', 'Krikilan Glenmore Banyuwangi', 4, 6),
(29, 'RSU Genteng', 'Jl. Raya Timur 5 Genteng', 3, 6),
(30, 'RS Islam Fatimah', 'Jl. Jember 25 Banyuwangi', 2, 6),
(31, 'RSU Bondowoso', 'Jl. Piere Tendean Bondowoso', 3, 20),
(32, 'RSU Situbondo', 'Jl. Anggrek No.68 Situbondo', 1, 17),
(33, 'RS PTPN XI Situbondo', 'Jl. WR Supratman 2A Situbondo', 4, 17),
(34, 'RSU Waluyo Jati Kraksaan', 'Jl. Dr Sutomo No.1 Kraksaan', 1, 17),
(35, 'RSAB Masyitoh', 'Jl. A Yani No.6 Bangil Jatim', 2, 10),
(36, 'RSU Bangil', 'Jl. Dr Sutomo 101 Bangil', 1, 10),
(37, 'RSIA Panca Dharma', 'Jl. Raya 14A Pandaan Sukorejo', 3, 16),
(38, 'RSU Sidoarjo', 'Jl. Mojopahit No.667 Sidoarjo', 3, 5),
(39, 'RSU Siti Khodijah', 'Jl. Pahlawan Sepanjang Sidoarjo', 2, 5),
(40, 'RS Pusdik Polri Porong', 'Pusdik Sabhara Porong', 1, 5),
(41, 'RS Delta Surya', 'Jl. Pahlawan Sidoarjo', 4, 5),
(42, 'RS Siti Hajar', 'Jl. Raden Patah No.70 Sidoarjo', 1, 5),
(43, 'RS Kusta Sumberglagah', 'Sumberglagah Pacet Mojokerto', 2, 7),
(44, 'RSU Jombang', 'Jl. KHW Hasyim 57 Jombang', 3, 7),
(45, 'RS Kristen Mojowarno', 'Jl. Merdeka Mojowarno Jombang', 2, 7),
(46, 'RSU Nganjuk', 'Jl. Dr Sutomo 62 Nganjuk', 1, 15),
(47, 'RSU Kertosono', 'Jl. Supriadi No.29 Kertosono', 2, 15),
(48, 'RS Satiti', '	Jl. Lonsep No.3 Kertosono', 4, 15),
(49, 'RS TP Dungus', 'Dungus Kec Wungu Kab Madiun', 3, 9),
(50, 'RSU Panti Waluyo', 'Jl. A Yani Km 2 Curuban Madiun', 1, 9),
(51, 'RSU Magetan', 'Jl. Pahlawan No.2 Magetan', 2, 8),
(52, 'RSU Dr Soeroto Ngawi', '	Jl. Dr Wahidin 27 Ngawi', 3, 8),
(53, 'RSU Dr Djatikoesoemo', 'Jl. Dr Wahidin 36 Madiun', 4, 9),
(54, 'RSAB Aisyiyah Bojonegoro', 'Jl. Masjid No.11 Madiun', 1, 9),
(55, 'RS Muhamadiyah Sumberejo', 'Jl. Raya Sumberejo Madiun', 3, 9),
(56, 'RSU Dr R Koesma Tuban', 'Jl. Dr WS Husodo Tuban', 4, 8),
(57, 'RS Kusta Nganget', 'Pos Jojogan Bojonegoro Tuban', 2, 8),
(58, 'RSU Dr Soegiri Lamongan', 'Jl. Kusuma Bangsa 7 Lamongan', 4, 8),
(59, 'RS Islam Nashrul Ummah', 'Jl. Merpati No.62 Lamongan', 1, 3),
(60, 'RS Muhammadiyah Lamongan', 'Jl. Jks Agung Suprapto Lamongan', 1, 3),
(61, 'RSU Gresik', 'Jl. Dr W Sudiro Husodo Gresik', 2, 11),
(62, 'RS PT Semen Gresik', 'Jl. RA Kartini No.280 Gresik', 3, 11),
(63, 'RSIA Nyai Ageng Pinatih', 'Jl. KH Abd Karim 76-78 Gresik', 4, 11),
(64, 'RS Jiwa Aditama', 'Jl. Raya Bunder Gresik', 4, 11),
(65, 'RS Petrokimia Gresik', 'Jl. Jend Ahmad Yani 69 Gresik', 3, 11),
(66, 'RSU Bangkalan', 'Jl. Pemuda Kaffa No.9 Bangkalan', 2, 18),
(67, 'RS AL Batuporon', 'Jl. Mawar Madura Kab Bangkalan', 1, 18),
(68, 'RSU Sampang', 'Jl. Rajawali No.10 Sampang', 1, 18),
(69, 'RSU Pamekasan', 'Jl. Kesehatan No.3-5 Pamekasan', 1, 18),
(70, 'RSU Sumenep', 'Jl. Dr Cipto No.42 Sumenep', 2, 18),
(71, 'RS Mardi Waluyo', 'Jl. Raya Kalianget Kab Sumenep', 4, 18),
(72, 'RSU Gambiran', 'Jl. KH Wahid Hasyim 64 Kediri', 4, 3),
(73, 'RS Rem 081 Kediri', 'Jl. Mayjen Sungkono 44 Kediri', 2, 3),
(74, 'RS Bhayangkara Kediri', 'Jl. Kombes Pol Daryat 17 Kediri', 1, 3),
(75, 'RS Baptis Kediri', 'Jl. Mauni 1-7 Kediri', 3, 3),
(76, 'RS Kusta Kediri', 'Jl. Veteran No.48 Kediri', 4, 3),
(77, 'RSB Nirmala Kediri', 'Jl. Jagung Suprapto No.5 Kediri', 1, 3),
(78, 'RSU Mardi Waluyo', 'Jl. Dr Sutomo No.29 Sidoarjo', 2, 5),
(79, 'RS Budi Rahayu', 'Jl. Jend A Yani 18 Sidoarjo', 3, 5),
(80, 'RS Syuhada Haji', 'Jl. Mojo No.12 Sidoarjo Jatim', 4, 5),
(81, 'RSU Dr Saiful Anwar', 'Jl. Jagung Suprapto No.2 Malang', 3, 14),
(82, 'RS Soepraoen', 'Jl. Sodanco Supriyadi Malang', 1, 14),
(83, 'RS Panti Nirmala', 'Jl. Kebalen Wetan 8 Malang', 2, 14),
(84, 'RS Panti Waluya Sawahan', 'Jl. Nusakambangan 56 Malang', 1, 14),
(85, 'RS PTPN XI Lavalete', 'Jl. WR Supratman 10 Malang', 2, 14),
(86, 'RSU Marsudi Waluyo', 'Jl. Mondoroko Singosari Malang', 4, 14),
(87, 'RS LPK Malang', 'Jl. Asahan No.7 Malang', 3, 14),
(88, 'RS Lanuma Abdul Saleh', 'Lanud ABD Saleh Malang', 1, 14),
(89, 'RS Islam Gondang Legi', 'Jl. Hayam Wuruk 66 Malang', 2, 14),
(90, 'RS Islam Aisyiyah Malang', 'Jl. Sulawesi No.6 Malang', 4, 14),
(91, 'RS Islam Malang', 'Jl. Mayjen Haryono 139 Malang', 3, 14),
(92, 'RS Sumber Sentosa', 'Jl. Kebonsari No.47 Malang', 1, 14),
(93, 'RSU Probolinggo', 'Jl. Panjaitan No.65 Pasuruan', 2, 16),
(94, 'RS Dharma Husada', 'Jl. Sukarno Hatta Pasuruan', 4, 16),
(95, 'RSU Pasuruan', 'Jl. Dr Wahidin Selatan Pasuruan', 1, 16),
(96, 'RSU Dr Wahidin S Husodo', 'Jl. Gajah Mada 100 Mojokerto', 4, 7),
(97, 'RS Hadiono Singgih', 'Jl. R Wijaya 58 Mojokerto', 1, 7),
(98, 'RS PTP XXI\\_XXII Gatoel', 'Jl. R Wijaya 56 Mojokerto', 3, 7),
(99, 'RS Reksa Waluya', 'Jl. Mojopahit 422 Mojokerto', 4, 7),
(100, 'RS Hasanah', 'Jl. HOS Cokroaminoto Mojokerto', 2, 7),
(101, 'RS Islam Sakinah', 'Jl. RA Basuni No.12 Mojokerto', 1, 7),
(102, 'RSU Dr Soedono Madiun', 'Jl. Sumbawa No.6 Madiun', 3, 9),
(103, 'RS Santa Clara', 'Jl. Biliton No.15 Madiun', 2, 9),
(104, 'RS Rem 081 Madiun', 'Jl. Pahlawan No.79 Madiun', 2, 9),
(105, 'RS Lanuma Iswahyudi', 'Lanud Iswahyudi Magetan', 1, 9),
(106, 'RS Islam Siti Aisyah', 'Jl. Mayjen Sungkono 38 Madiun', 1, 9),
(107, 'RSU Dr Soetomo', 'Jl. Prof Dr Moestopo Surabaya', 3, 2),
(108, 'RS Al Dr Ramelan', 'Jl. Gadung No.1 Surabaya', 4, 2),
(109, 'RS William Booth', 'Jl. Diponegoro 34 Surabaya', 1, 2),
(110, 'RS Katholik Surabaya', 'Jl. Diponegoro 51 Surabaya', 2, 2),
(111, 'RS Darmo', 'Jl. Raya Darmo 90 Surabaya', 1, 2),
(112, 'RS Adi Husada Pusat', 'Jl. Undaan Wetan 40-44 Surabaya', 4, 2),
(113, 'RS Griya Husada Surabaya', 'Jl. Bubutan 93 Surabaya', 2, 2),
(114, 'RS Pelabuhan Tg Perak', 'Jl. Kalianget No.1-2 Surabaya', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profile_`
--

CREATE TABLE `profile_` (
  `profile_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `gender` set('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `vaksin_id` int(11) NOT NULL,
  `nama_vaksin` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`vaksin_id`, `nama_vaksin`, `keterangan`) VALUES
(1, 'Vaksin Sinovac', 'Vaksin Covid 19'),
(2, 'Vaksin Astrazeneca', 'Vaksin Covid 19'),
(3, 'Moderna', 'Vaksin COvid 19'),
(4, 'Pfrizer', 'Vaksin Covid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `daftars_`
--
ALTER TABLE `daftars_`
  ADD PRIMARY KEY (`daftar_id`),
  ADD KEY `daftars__ibfk_1` (`city_id`),
  ADD KEY `daftars__ibfk_2` (`rs_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`rs_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `vaksin_id` (`vaksin_id`);

--
-- Indexes for table `profile_`
--
ALTER TABLE `profile_`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`vaksin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `daftars_`
--
ALTER TABLE `daftars_`
  MODIFY `daftar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `profile_`
--
ALTER TABLE `profile_`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `vaksin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftars_`
--
ALTER TABLE `daftars_`
  ADD CONSTRAINT `daftars__ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftars__ibfk_2` FOREIGN KEY (`rs_id`) REFERENCES `hospital` (`rs_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `hospital_ibfk_2` FOREIGN KEY (`vaksin_id`) REFERENCES `vaksin` (`vaksin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
