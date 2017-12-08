-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 04:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vkool`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_bangunan`
--

CREATE TABLE `m_bangunan` (
  `id` int(11) NOT NULL,
  `link_code` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bangunan`
--

INSERT INTO `m_bangunan` (`id`, `link_code`, `nama`, `harga`) VALUES
(10, 'ique-73', 'IQUE 73', 3513400),
(11, 'ique-53', 'IQUE 53', 3785100);

-- --------------------------------------------------------

--
-- Table structure for table `m_bangunan_detail`
--

CREATE TABLE `m_bangunan_detail` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `bangunan_link` varchar(150) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `text_color_konten` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL,
  `is_akhir` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bangunan_detail`
--

INSERT INTO `m_bangunan_detail` (`id`, `no`, `bangunan_link`, `ind_judul`, `en_judul`, `ind_konten`, `en_konten`, `v_align`, `h_align`, `gambar`, `text_color_konten`, `text_color_judul`, `is_akhir`) VALUES
(16, 1, 'ique-73', '', '', '', '', 'description-bottom', 'konten-kiri', 'IQ_73FG_1.jpg', '', '', 0),
(17, 2, 'ique-73', '', '', 'Produk terlaris yang menawarkan kombinasi terbaik transmisi cahaya tampak tinggi dengan kinerja penolakan panas yang sangat baik.', 'The best selling product that offers our best combination of high visible light transmission with excellent heat rejection performance.', 'description-middle', 'konten-kiri', 'IQ_73FG_2_1.jpg', '', '', 0),
(18, 3, 'ique-73', '', '', 'Inti dari performa penolakan panas inframerah iQUE  adalah teknologi XIR, proses sputtering eksklusif yang dikembangkan di Silicon Valley, Amerika Serikat. 73FG memungkinkan Anda menikmati indahanya hari di rumah atau kantor dengan pengurangan panas dan sinar UV yang superior.', 'The core of iQUE’s spectrally-selective infrared heat rejection performance is its XIR technology, a proprietary sputtering process developed in Silicon Valley, USA. 73FG allows one to enjoy the beauty of daylight at home or work with a superior reduction in heat and UV rays.', 'description-middle', 'konten-kanan', 'IQ_73FG_3.jpg', '', '', 0),
(20, 4, 'ique-73', '', '', '', '', 'description-top', 'konten-kanan', 'IQ_73FG_4.jpg', '', '', 1),
(21, 1, 'ique-53', '', '', '', '', 'description-bottom', 'konten-kiri', 'IQ_53GII_1.jpg', '', '', 0),
(22, 2, 'ique-53', 'Glare Reduction in Style', 'Glare Reduction in Style', 'iQUE 53GII adalah kaca jendela Spectrover Selective kami yang menawarkan viskositas berkinerja tinggi dengan reflektansi cahaya visibilitas rendah, memberikan keseimbangan ideal dari warna gelap yang moderat dengan kontrol silau tanpa mengorbankan kenyamanan penolakan panas.', 'iQUE 53GII is our Spectrally Selective window film that offers high solar control performance with low visible light reflectance, providing an ideal balance of a moderate dark tint with glare control without compromising on heat rejection comfort.', 'description-middle', 'konten-kiri', 'IQ_53GII_2.jpg', 'text-black', 'text-black', 0),
(23, 3, 'ique-53', '', '', 'Inti dari performa penolakan panas inframerah iQUE  adalah teknologi XIR, proses sputtering eksklusif yang dikembangkan di Silicon Valley, Amerika Serikat. 53GII didisain untuk melindungi rumah dari panas sinar UV yang merusak.', 'The core of iQUE’s spectrally-selective infrared heat rejection performance is its XIR technology, a proprietary sputtering process developed in Silicon Valley, USA. 53GII is designed to shield the house from heat and harmful effects of ultra-violet rays.', 'description-bottom', 'konten-kanan', 'IQ_53GII_3_1.jpg', 'text-black', 'text-black', 0),
(24, 4, 'ique-53', '', '', '', '', 'description-bottom', 'konten-kanan', 'IQ_53GII_4.jpg', 'text-black', 'text-black', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_bangunan_performa`
--

CREATE TABLE `m_bangunan_performa` (
  `id` int(11) NOT NULL,
  `bangunan_link_code` varchar(150) NOT NULL,
  `data` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bangunan_performa`
--

INSERT INTO `m_bangunan_performa` (`id`, `bangunan_link_code`, `data`, `value`) VALUES
(141, 'ique-73', 'Ultra-violet Rejection', '99%\r\n'),
(142, 'ique-73', 'Emissivity', '0.54'),
(143, 'ique-73', 'Ultra-violet Rejection', '99%'),
(144, 'ique-73', 'Visible Light Transmission', '69%'),
(145, 'ique-73', 'Visible Light Reflectance (Glass)', '9%'),
(146, 'ique-73', 'Visible Light Reflectance (Film)', '10%\r\n'),
(147, 'ique-73', 'Total Solar Energy Rejection', '57%'),
(148, 'ique-73', 'Luminous Efficacy', '1.39'),
(149, 'ique-73', 'Solar Heat Gain Coefficient', '0.43'),
(150, 'ique-73', 'Shading Coefficient', '0.50'),
(151, 'ique-73', 'U-Value (btu/hr.ft2.0F)', '0.88\r\n'),
(152, 'ique-53', 'Colour', 'Neutral'),
(153, 'ique-53', 'Visible Light Transmission', '53%\r\n'),
(154, 'ique-53', 'Visible Light Reflectance (Glass)', '10%\r\n'),
(155, 'ique-53', 'Visible Light Reflectance (Film)', '9%\r\n'),
(156, 'ique-53', 'Ultra-violet Rejection', '99%\r\n'),
(157, 'ique-53', 'Total Solar Energy Rejection', '61%\r\n'),
(158, 'ique-53', 'Luminous Efficacy', '1.19\r\n'),
(160, 'ique-53', 'Solar Heat Gain Coefficient', '0.39\r\n'),
(161, 'ique-53', 'Shading Coefficient', '0.45\r\n'),
(162, 'ique-53', 'Emissivity', '0.78\r\n'),
(163, 'ique-53', 'U-Value (btu/hr.ft2.0F)', '1.01\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `m_bangunan_portfolio`
--

CREATE TABLE `m_bangunan_portfolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bangunan_portfolio`
--

INSERT INTO `m_bangunan_portfolio` (`id`, `nama`, `gambar`) VALUES
(7, 'Chep Lap Kok International Airport', 'Airport2_1.jpg'),
(8, 'Japan Embassy', 'Japan Embassy.jpg'),
(9, 'Auto 2000 Kapuk', 'Auto 2000 Kapuk.jpg'),
(10, 'Pacific Place Apartment', 'Apartment Pacific Place.jpg'),
(11, 'O-CE-N Bali', 'Bali Ocen VIP.jpg'),
(12, 'British International School', 'British International School.jpg'),
(13, 'Gedung Gramedia', 'Gramedia.jpg'),
(14, 'Hot Planet', 'Hot Planet.jpg'),
(15, 'La Piazza', 'La Piazza.jpg'),
(16, 'Marina Mandarin', 'Marina Mandarin Singapore.jpg'),
(17, 'Petronas', 'Petronas.jpg'),
(18, 'Plaza Indonesia', 'Plaza Indonesia_0.jpg'),
(19, 'Rasuna Club', 'Rasuna club.jpg'),
(20, 'Ripcurl Bali', 'Ripcurl Bali.jpg'),
(21, 'RS Omni International', 'RS Omni International.jpg'),
(22, 'Shang Palace', 'Shang Palace.jpg'),
(23, 'Grand Copthorne', 'Grand Copthorne Singapore.jpg'),
(24, 'MD Entertainment', 'MD Entertainment.jpg'),
(25, 'Tan Tock Seng Hospital', 'Tan Tock Seng Hospital Singapore.jpg'),
(26, 'Raffles Hotel Singapore', 'Raffless Hotel Singapore.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `m_dealer`
--

CREATE TABLE `m_dealer` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_dealer`
--

INSERT INTO `m_dealer` (`id`, `nama`, `alamat`, `phone`, `fax`, `gambar`, `lat`, `lang`, `kota_id`, `provinsi_id`) VALUES
(1, 'PT.V-Kool Indo Lestari', 'Gunung Sahari Raya No. 20 Jak-Pus ', '021-6261333 / 021-6595454 ', '6267088', 'vkool-indo-lestari.jpg', '-6.1619979', '106.8297383', 162, 12),
(2, 'Merapin Megah Abadi', 'Krekot Jaya BI . H No 12 Jak - Pus ', '021-3858795 ', '021-3440876', 'merapin-megah-raya.jpg', '-6.1611182', '106.8291343', 162, 12),
(3, 'Indo Motor Lestari', 'Pecenongan Raya No . 88 Jak - Pus ', '021-3440229 / 0213440239 ', '021-3440589 ', 'indo-motor-lestari.jpg', '-6.1621052', '106.8245319', 162, 12),
(4, 'Wijaya Motor', 'Sukarjo Wiryopranoto No. 4D Jak - Pus', '021-3453467', '021-3849484', 'wijaya-motor.jpg', '-6.159789', '106.818334', 162, 12),
(5, 'Maju Mandiri', 'Jln. Sukarjo Wiryopranoto no 47 B, Sawah Besar Jakarta Pusat', '021 - 62203710, 62203711', '021 - 6283480', 'maju-mandiri.jpg', '-6.161226', '106.822913', 162, 12);

-- --------------------------------------------------------

--
-- Table structure for table `m_harga`
--

CREATE TABLE `m_harga` (
  `id` int(11) NOT NULL,
  `id_mobil_tipe` int(11) NOT NULL,
  `tipe_vkool` int(11) NOT NULL,
  `bagian` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_harga`
--

INSERT INTO `m_harga` (`id`, `id_mobil_tipe`, `tipe_vkool`, `bagian`, `harga`) VALUES
(1, 1, 1, 1, 3840000),
(2, 1, 1, 2, 4260000),
(3, 1, 1, 3, 3100000),
(4, 1, 2, 1, 4110000),
(5, 1, 2, 2, 4590000),
(6, 1, 2, 3, 3320000),
(7, 1, 4, 2, 2870000),
(8, 1, 4, 3, 2870000),
(9, 1, 6, 2, 2670000),
(10, 1, 6, 3, 2000000),
(11, 1, 5, 2, 2540000),
(12, 1, 5, 3, 1910000);

-- --------------------------------------------------------

--
-- Table structure for table `m_home_section`
--

CREATE TABLE `m_home_section` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_tombol` varchar(150) NOT NULL,
  `en_tombol` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL,
  `text_color_tombol` varchar(150) NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_home_section`
--

INSERT INTO `m_home_section` (`id`, `no`, `ind_judul`, `en_judul`, `ind_tombol`, `en_tombol`, `text_color_judul`, `text_color_tombol`, `v_align`, `h_align`, `gambar`, `status`) VALUES
(1, 1, 'Teknologi Gold Class', 'Gold Class Technology', 'Pelajari teknologinya', 'Learn About The tech', 'text-white', 'text-white', 'container-middle', 'text-left', 'home2.jpg', 1),
(2, 2, 'Pelayanan Gold Class', 'Gold Class Service', 'Mengagumkan', 'Be Amazed', 'text-black', 'text-black', 'container-bottom', 'text-right', 'home3.jpg', 1),
(3, 3, 'Pengalaman Gold Class', 'Gold Class Experience', 'Rasakan Sensasinya', 'Feel The Sensation', 'text-white', 'text-white', 'container-top', 'text-right', 'home4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_home_section_detail`
--

CREATE TABLE `m_home_section_detail` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `text_color_konten` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_home_section_detail`
--

INSERT INTO `m_home_section_detail` (`id`, `no`, `section_id`, `ind_judul`, `en_judul`, `ind_konten`, `en_konten`, `v_align`, `h_align`, `gambar`, `text_color_konten`, `text_color_judul`) VALUES
(1, 1, 1, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-bottom', 'konten-kanan', 'Home3.1.jpg', 'text-white', 'text-gold'),
(2, 2, 1, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-middle', 'konten-kiri', 'Home3.2.jpg', 'text-white', 'text-gold'),
(3, 3, 1, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-middle', 'konten-kanan', 'Home3.3.jpg', 'text-white', 'text-gold'),
(4, 1, 2, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-bottom', 'konten-kanan', 'Home4.1.jpg', 'text-black', 'text-gold'),
(5, 2, 2, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-top', 'konten-kiri', 'Home4.2.jpg', 'text-white', 'text-gold'),
(6, 3, 2, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-middle', 'konten-kanan', 'Home4.3.jpg', 'text-black', 'text-gold'),
(7, 4, 2, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-bottom', 'konten-kanan', 'Home4.4.jpg', 'text-white', 'text-gold'),
(8, 3, 3, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-top', 'konten-kiri', 'Home5.1.jpg', 'text-black', 'text-gold'),
(9, 4, 3, 'Penguasaan atas sinar matahari', 'Mastery over sunlight', 'Gunakan indera Anda dengan nyaman, yang mengubah pengalaman\r\nberkendara dengan kemewahan melalui kaca film pengendali sinar matahari berteknologi mutakhir.\r\n<br/>\r\n<br/>\r\nTidak ada lagi kaca film gelap yang mengorbankan visibilitas dan gairah untuk perlindungan. V-KOOL spectrally selective secara pintar akan meneruskan cahaya tampak, sementara menolak panjang gelombang tertentu seperti infra merah serta lebih dari 99% sinar UV.', 'You deserve the best in life. Engage your senses with V-KOOOL, wich redefines the experiencing of driving with the luxury of advanced high end solar control films.\r\n<br/>\r\n<br/>\r\nNo more dark tints that sacrifice visibility and vibrancy for protection. V-KOOL films are spectrally selective that transmit visible light, while reflecting selected infra-red wavelenghts with more than 99% UV protection.', 'description-bottom', 'konten-kanan', 'Home5.2.jpg', 'text-white', 'text-gold');

-- --------------------------------------------------------

--
-- Table structure for table `m_home_slider`
--

CREATE TABLE `m_home_slider` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `ind_tombol` varchar(150) NOT NULL,
  `en_tombol` varchar(150) NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `text_color_konten` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL,
  `text_color_tombol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_home_slider`
--

INSERT INTO `m_home_slider` (`id`, `no`, `ind_judul`, `en_judul`, `ind_konten`, `en_konten`, `ind_tombol`, `en_tombol`, `v_align`, `h_align`, `gambar`, `text_color_konten`, `text_color_judul`, `text_color_tombol`) VALUES
(1, 1, 'Dapatkan Yang Terbaik', 'You Deserved the Best', '', '', 'Selengkapnya', 'Make An Enquiry', 'container-top', 'konten-kanan', 'home1.jpg', 'text-black', 'text-black', 'text-black'),
(2, 2, 'Keahlian Yang Menginspirasi', 'Inspiring Expertise', '', '', 'Detil', 'Details', 'container-middle', 'konten-kiri', 'banner2.jpg', 'text-white', 'text-white', 'text-white'),
(3, 3, 'Keahlian Yang Menginspirasi', 'Inspired craftmanship', 'Kekayaan artistik dan pencapaian arsitektural dari kota Dresden, Jerman menjadikannya tempat yang sempurna untuk mendorong terciptanya produk industri terkemuka. Dresden adalah rumah bagi produksi kaca film V-KOOL dengan sertifikat ISO 9001, satu dari sedikit pilihan di dunia. Di sana kami memproses kaca film dengan kombinasi terbaik dari kualitas, keahlian dan rekayasa teknologi tinggi. ', 'The artistic treasures and architectural achievement of Dresden, Germany make it the perfect place to drive the creation of industry-leading products. It is the home of our ISO 9001 certified V-KOOL solar control film manufacturing plant, one oof selected few in the world. There, our processes deliver window films with a refined combination of quality, craftmanship and hightech engineering.', '', '', 'container-middle', 'konten-kiri', 'banner2.jpg', 'text-white', 'text-gold', 'text-white');

-- --------------------------------------------------------

--
-- Table structure for table `m_home_video`
--

CREATE TABLE `m_home_video` (
  `id` int(11) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_subjudul` varchar(150) NOT NULL,
  `en_subjudul` varchar(150) NOT NULL,
  `video` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_home_video`
--

INSERT INTO `m_home_video` (`id`, `ind_judul`, `en_judul`, `ind_subjudul`, `en_subjudul`, `video`, `gambar`) VALUES
(1, 'Dapatkan Yang Terbaik', 'You Deserved the Best', 'Tonton Yang Lainnya', 'Watch More', 'vkool.mp4', 'watch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `m_kota`
--

CREATE TABLE `m_kota` (
  `kota_id` int(10) NOT NULL,
  `kokab_nama` varchar(30) DEFAULT NULL,
  `provinsi_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kota`
--

INSERT INTO `m_kota` (`kota_id`, `kokab_nama`, `provinsi_id`) VALUES
(1, 'Kabupaten Aceh Barat', 1),
(2, 'Kabupaten Aceh Barat Daya', 1),
(3, 'Kabupaten Aceh Besar', 1),
(4, 'Kabupaten Aceh Jaya', 1),
(5, 'Kabupaten Aceh Selatan', 1),
(6, 'Kabupaten Aceh Singkil', 1),
(7, 'Kabupaten Aceh Tamiang', 1),
(8, 'Kabupaten Aceh Tengah', 1),
(9, 'Kabupaten Aceh Tenggara', 1),
(10, 'Kabupaten Aceh Timur', 1),
(11, 'Kabupaten Aceh Utara', 1),
(12, 'Kabupaten Bener Meriah', 1),
(13, 'Kabupaten Bireuen', 1),
(14, 'Kabupaten Gayo Luwes', 1),
(15, 'Kabupaten Nagan Raya', 1),
(16, 'Kabupaten Pidie', 1),
(17, 'Kabupaten Pidie Jaya', 1),
(18, 'Kabupaten Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Langsa', 1),
(21, 'Kota Lhokseumawe', 1),
(22, 'Kota Sabang', 1),
(23, 'Kota Subulussalam', 1),
(24, 'Kabupaten Asahan', 2),
(25, 'Kabupaten Batubara', 2),
(26, 'Kabupaten Dairi', 2),
(27, 'Kabupaten Deli Serdang', 2),
(28, 'Kabupaten Humbang Hasundutan', 2),
(29, 'Kabupaten Karo', 2),
(30, 'Kabupaten Labuhan Batu', 2),
(31, 'Kabupaten Labuhanbatu Selatan', 2),
(32, 'Kabupaten Labuhanbatu Utara', 2),
(33, 'Kabupaten Langkat', 2),
(34, 'Kabupaten Mandailing Natal', 2),
(35, 'Kabupaten Nias', 2),
(36, 'Kabupaten Nias Barat', 2),
(37, 'Kabupaten Nias Selatan', 2),
(38, 'Kabupaten Nias Utara', 2),
(39, 'Kabupaten Padang Lawas', 2),
(40, 'Kabupaten Padang Lawas Utara', 2),
(41, 'Kabupaten Pakpak Barat', 2),
(42, 'Kabupaten Samosir', 2),
(43, 'Kabupaten Serdang Bedagai', 2),
(44, 'Kabupaten Simalungun', 2),
(45, 'Kabupaten Tapanuli Selatan', 2),
(46, 'Kabupaten Tapanuli Tengah', 2),
(47, 'Kabupaten Tapanuli Utara', 2),
(48, 'Kabupaten Toba Samosir', 2),
(49, 'Kota Binjai', 2),
(50, 'Kota Gunung Sitoli', 2),
(51, 'Kota Medan', 2),
(52, 'Kota Padangsidempuan', 2),
(53, 'Kota Pematang Siantar', 2),
(54, 'Kota Sibolga', 2),
(55, 'Kota Tanjung Balai', 2),
(56, 'Kota Tebing Tinggi', 2),
(57, 'Kabupaten Agam', 3),
(58, 'Kabupaten Dharmas Raya', 3),
(59, 'Kabupaten Kepulauan Mentawai', 3),
(60, 'Kabupaten Lima Puluh Kota', 3),
(61, 'Kabupaten Padang Pariaman', 3),
(62, 'Kabupaten Pasaman', 3),
(63, 'Kabupaten Pasaman Barat', 3),
(64, 'Kabupaten Pesisir Selatan', 3),
(65, 'Kabupaten Sijunjung', 3),
(66, 'Kabupaten Solok', 3),
(67, 'Kabupaten Solok Selatan', 3),
(68, 'Kabupaten Tanah Datar', 3),
(69, 'Kota Bukittinggi', 3),
(70, 'Kota Padang', 3),
(71, 'Kota Padang Panjang', 3),
(72, 'Kota Pariaman', 3),
(73, 'Kota Payakumbuh', 3),
(74, 'Kota Sawah Lunto', 3),
(75, 'Kota Solok', 3),
(76, 'Kabupaten Bengkalis', 4),
(77, 'Kabupaten Indragiri Hilir', 4),
(78, 'Kabupaten Indragiri Hulu', 4),
(79, 'Kabupaten Kampar', 4),
(80, 'Kabupaten Kuantan Singingi', 4),
(81, 'Kabupaten Meranti', 4),
(82, 'Kabupaten Pelalawan', 4),
(83, 'Kabupaten Rokan Hilir', 4),
(84, 'Kabupaten Rokan Hulu', 4),
(85, 'Kabupaten Siak', 4),
(86, 'Kota Dumai', 4),
(87, 'Kota Pekanbaru', 4),
(88, 'Kabupaten Bintan', 5),
(89, 'Kabupaten Karimun', 5),
(90, 'Kabupaten Kepulauan Anambas', 5),
(91, 'Kabupaten Lingga', 5),
(92, 'Kabupaten Natuna', 5),
(93, 'Kota Batam', 5),
(94, 'Kota Tanjung Pinang', 5),
(95, 'Kabupaten Bangka', 6),
(96, 'Kabupaten Bangka Barat', 6),
(97, 'Kabupaten Bangka Selatan', 6),
(98, 'Kabupaten Bangka Tengah', 6),
(99, 'Kabupaten Belitung', 6),
(100, 'Kabupaten Belitung Timur', 6),
(101, 'Kota Pangkal Pinang', 6),
(102, 'Kabupaten Kerinci', 7),
(103, 'Kabupaten Merangin', 7),
(104, 'Kabupaten Sarolangun', 7),
(105, 'Kabupaten Batang Hari', 7),
(106, 'Kabupaten Muaro Jambi', 7),
(107, 'Kabupaten Tanjung Jabung Timur', 7),
(108, 'Kabupaten Tanjung Jabung Barat', 7),
(109, 'Kabupaten Tebo', 7),
(110, 'Kabupaten Bungo', 7),
(111, 'Kota Jambi', 7),
(112, 'Kota Sungai Penuh', 7),
(113, 'Kabupaten Bengkulu Selatan', 8),
(114, 'Kabupaten Bengkulu Tengah', 8),
(115, 'Kabupaten Bengkulu Utara', 8),
(116, 'Kabupaten Kaur', 8),
(117, 'Kabupaten Kepahiang', 8),
(118, 'Kabupaten Lebong', 8),
(119, 'Kabupaten Mukomuko', 8),
(120, 'Kabupaten Rejang Lebong', 8),
(121, 'Kabupaten Seluma', 8),
(122, 'Kota Bengkulu', 8),
(123, 'Kabupaten Banyuasin', 9),
(124, 'Kabupaten Empat Lawang', 9),
(125, 'Kabupaten Lahat', 9),
(126, 'Kabupaten Muara Enim', 9),
(127, 'Kabupaten Musi Banyu Asin', 9),
(128, 'Kabupaten Musi Rawas', 9),
(129, 'Kabupaten Ogan Ilir', 9),
(130, 'Kabupaten Ogan Komering Ilir', 9),
(131, 'Kabupaten Ogan Komering Ulu', 9),
(132, 'Kabupaten Ogan Komering Ulu Se', 9),
(133, 'Kabupaten Ogan Komering Ulu Ti', 9),
(134, 'Kota Lubuklinggau', 9),
(135, 'Kota Pagar Alam', 9),
(136, 'Kota Palembang', 9),
(137, 'Kota Prabumulih', 9),
(138, 'Kabupaten Lampung Barat', 10),
(139, 'Kabupaten Lampung Selatan', 10),
(140, 'Kabupaten Lampung Tengah', 10),
(141, 'Kabupaten Lampung Timur', 10),
(142, 'Kabupaten Lampung Utara', 10),
(143, 'Kabupaten Mesuji', 10),
(144, 'Kabupaten Pesawaran', 10),
(145, 'Kabupaten Pringsewu', 10),
(146, 'Kabupaten Tanggamus', 10),
(147, 'Kabupaten Tulang Bawang', 10),
(148, 'Kabupaten Tulang Bawang Barat', 10),
(149, 'Kabupaten Way Kanan', 10),
(150, 'Kota Bandar Lampung', 10),
(151, 'Kota Metro', 10),
(152, 'Kabupaten Lebak', 11),
(153, 'Kabupaten Pandeglang', 11),
(154, 'Kabupaten Serang', 11),
(155, 'Kabupaten Tangerang', 11),
(156, 'Kota Cilegon', 11),
(157, 'Kota Serang', 11),
(158, 'Kota Tangerang', 11),
(159, 'Kota Tangerang Selatan', 11),
(160, 'Kabupaten Adm. Kepulauan Serib', 12),
(161, 'Kota Jakarta Barat', 12),
(162, 'Kota Jakarta Pusat', 12),
(163, 'Kota Jakarta Selatan', 12),
(164, 'Kota Jakarta Timur', 12),
(165, 'Kota Jakarta Utara', 12),
(166, 'Kabupaten Bandung', 13),
(167, 'Kabupaten Bandung Barat', 13),
(168, 'Kabupaten Bekasi', 13),
(169, 'Kabupaten Bogor', 13),
(170, 'Kabupaten Ciamis', 13),
(171, 'Kabupaten Cianjur', 13),
(172, 'Kabupaten Cirebon', 13),
(173, 'Kabupaten Garut', 13),
(174, 'Kabupaten Indramayu', 13),
(175, 'Kabupaten Karawang', 13),
(176, 'Kabupaten Kuningan', 13),
(177, 'Kabupaten Majalengka', 13),
(178, 'Kabupaten Purwakarta', 13),
(179, 'Kabupaten Subang', 13),
(180, 'Kabupaten Sukabumi', 13),
(181, 'Kabupaten Sumedang', 13),
(182, 'Kabupaten Tasikmalaya', 13),
(183, 'Kota Bandung', 13),
(184, 'Kota Banjar', 13),
(185, 'Kota Bekasi', 13),
(186, 'Kota Bogor', 13),
(187, 'Kota Cimahi', 13),
(188, 'Kota Cirebon', 13),
(189, 'Kota Depok', 13),
(190, 'Kota Sukabumi', 13),
(191, 'Kota Tasikmalaya', 13),
(192, 'Kabupaten Banjarnegara', 14),
(193, 'Kabupaten Banyumas', 14),
(194, 'Kabupaten Batang', 14),
(195, 'Kabupaten Blora', 14),
(196, 'Kabupaten Boyolali', 14),
(197, 'Kabupaten Brebes', 14),
(198, 'Kabupaten Cilacap', 14),
(199, 'Kabupaten Demak', 14),
(200, 'Kabupaten Grobogan', 14),
(201, 'Kabupaten Jepara', 14),
(202, 'Kabupaten Karanganyar', 14),
(203, 'Kabupaten Kebumen', 14),
(204, 'Kabupaten Kendal', 14),
(205, 'Kabupaten Klaten', 14),
(206, 'Kabupaten Tegal', 14),
(207, 'Kabupaten Kudus', 14),
(208, 'Kabupaten Magelang', 14),
(209, 'Kabupaten Pati', 14),
(210, 'Kabupaten Pekalongan', 14),
(211, 'Kabupaten Pemalang', 14),
(212, 'Kabupaten Purbalingga', 14),
(213, 'Kabupaten Purworejo', 14),
(214, 'Kabupaten Rembang', 14),
(215, 'Kabupaten Semarang', 14),
(216, 'Kabupaten Sragen', 14),
(217, 'Kabupaten Sukoharjo', 14),
(218, 'Kabupaten Temanggung', 14),
(219, 'Kabupaten Wonogiri', 14),
(220, 'Kabupaten Wonosobo', 14),
(221, 'Kota Magelang', 14),
(222, 'Kota Pekalongan', 14),
(223, 'Kota Salatiga', 14),
(224, 'Kota Semarang', 14),
(225, 'Kota Surakarta', 14),
(226, 'Kota Tegal', 14),
(227, 'Kabupaten Bantul', 15),
(228, 'Kabupaten Gunung Kidul', 15),
(229, 'Kabupaten Kulon Progo', 15),
(230, 'Kabupaten Sleman', 15),
(231, 'Kota Yogyakarta', 15),
(232, 'Kabupaten Bangkalan', 16),
(233, 'Kabupaten Banyuwangi', 16),
(234, 'Kabupaten Blitar', 16),
(235, 'Kabupaten Bojonegoro', 16),
(236, 'Kabupaten Bondowoso', 16),
(237, 'Kabupaten Gresik', 16),
(238, 'Kabupaten Jember', 16),
(239, 'Kabupaten Jombang', 16),
(240, 'Kabupaten Kediri', 16),
(241, 'Kabupaten Lamongan', 16),
(242, 'Kabupaten Lumajang', 16),
(243, 'Kabupaten Madiun', 16),
(244, 'Kabupaten Magetan', 16),
(245, 'Kabupaten Malang', 16),
(246, 'Kabupaten Mojokerto', 16),
(247, 'Kabupaten Nganjuk', 16),
(248, 'Kabupaten Ngawi', 16),
(249, 'Kabupaten Pacitan', 16),
(250, 'Kabupaten Pamekasan', 16),
(251, 'Kabupaten Pasuruan', 16),
(252, 'Kabupaten Ponorogo', 16),
(253, 'Kabupaten Probolinggo', 16),
(254, 'Kabupaten Sampang', 16),
(255, 'Kabupaten Sidoarjo', 16),
(256, 'Kabupaten Situbondo', 16),
(257, 'Kabupaten Sumenep', 16),
(258, 'Kabupaten Trenggalek', 16),
(259, 'Kabupaten Tuban', 16),
(260, 'Kabupaten Tulungagung', 16),
(261, 'Kota Batu', 16),
(262, 'Kota Blitar', 16),
(263, 'Kota Kediri', 16),
(264, 'Kota Madiun', 16),
(265, 'Kota Malang', 16),
(266, 'Kota Mojokerto', 16),
(267, 'Kota Pasuruan', 16),
(268, 'Kota Probolinggo', 16),
(269, 'Kota Surabaya', 16),
(270, 'Kabupaten Badung', 17),
(271, 'Kabupaten Bangli', 17),
(272, 'Kabupaten Buleleng', 17),
(273, 'Kabupaten Gianyar', 17),
(274, 'Kabupaten Jembrana', 17),
(275, 'Kabupaten Karang Asem', 17),
(276, 'Kabupaten Klungkung', 17),
(277, 'Kabupaten Tabanan', 17),
(278, 'Kota Denpasar', 17),
(279, 'Kabupaten Bima', 18),
(280, 'Kabupaten Dompu', 18),
(281, 'Kabupaten Lombok Barat', 18),
(282, 'Kabupaten Lombok Tengah', 18),
(283, 'Kabupaten Lombok Timur', 18),
(284, 'Kabupaten Lombok Utara', 18),
(285, 'Kabupaten Sumbawa', 18),
(286, 'Kabupaten Sumbawa Barat', 18),
(287, 'Kota Bima', 18),
(288, 'Kota Mataram', 18),
(289, 'Kabupaten Alor', 19),
(290, 'Kabupaten Belu', 19),
(291, 'Kabupaten Ende', 19),
(292, 'Kabupaten Flores Timur', 19),
(293, 'Kabupaten Kupang', 19),
(294, 'Kabupaten Lembata', 19),
(295, 'Kabupaten Manggarai', 19),
(296, 'Kabupaten Manggarai Barat', 19),
(297, 'Kabupaten Manggarai Timur', 19),
(298, 'Kabupaten Nagekeo', 19),
(299, 'Kabupaten Ngada', 19),
(300, 'Kabupaten Rote Ndao', 19),
(301, 'Kabupaten Sabu Raijua', 19),
(302, 'Kabupaten Sikka', 19),
(303, 'Kabupaten Sumba Barat', 19),
(304, 'Kabupaten Sumba Barat Daya', 19),
(305, 'Kabupaten Sumba Tengah', 19),
(306, 'Kabupaten Sumba Timur', 19),
(307, 'Kabupaten Timor Tengah Selatan', 19),
(308, 'Kabupaten Timor Tengah Utara', 19),
(309, 'Kota Kupang', 19),
(310, 'Kabupaten Bengkayang', 20),
(311, 'Kabupaten Kapuas Hulu', 20),
(312, 'Kabupaten Kayong Utara', 20),
(313, 'Kabupaten Ketapang', 20),
(314, 'Kabupaten Kubu Raya', 20),
(315, 'Kabupaten Landak', 20),
(316, 'Kabupaten Melawi', 20),
(317, 'Kabupaten Pontianak', 20),
(318, 'Kabupaten Sambas', 20),
(319, 'Kabupaten Sanggau', 20),
(320, 'Kabupaten Sekadau', 20),
(321, 'Kabupaten Sintang', 20),
(322, 'Kota Pontianak', 20),
(323, 'Kota Singkawang', 20),
(324, 'Kabupaten Barito Selatan', 21),
(325, 'Kabupaten Barito Timur', 21),
(326, 'Kabupaten Barito Utara', 21),
(327, 'Kabupaten Gunung Mas', 21),
(328, 'Kabupaten Kapuas', 21),
(329, 'Kabupaten Katingan', 21),
(330, 'Kabupaten Kotawaringin Barat', 21),
(331, 'Kabupaten Kotawaringin Timur', 21),
(332, 'Kabupaten Lamandau', 21),
(333, 'Kabupaten Murung Raya', 21),
(334, 'Kabupaten Pulang Pisau', 21),
(335, 'Kabupaten Seruyan', 21),
(336, 'Kabupaten Sukamara', 21),
(337, 'Kota Palangkaraya', 21),
(338, 'Kabupaten Balangan', 22),
(339, 'Kabupaten Banjar', 22),
(340, 'Kabupaten Barito Kuala', 22),
(341, 'Kabupaten Hulu Sungai Selatan', 22),
(342, 'Kabupaten Hulu Sungai Tengah', 22),
(343, 'Kabupaten Hulu Sungai Utara', 22),
(344, 'Kabupaten Kota Baru', 22),
(345, 'Kabupaten Tabalong', 22),
(346, 'Kabupaten Tanah Bumbu', 22),
(347, 'Kabupaten Tanah Laut', 22),
(348, 'Kabupaten Tapin', 22),
(349, 'Kota Banjar Baru', 22),
(350, 'Kota Banjarmasin', 22),
(351, 'Kabupaten Berau', 23),
(352, 'Kabupaten Bulongan', 23),
(353, 'Kabupaten Kutai Barat', 23),
(354, 'Kabupaten Kutai Kartanegara', 23),
(355, 'Kabupaten Kutai Timur', 23),
(356, 'Kabupaten Malinau', 23),
(357, 'Kabupaten Nunukan', 23),
(358, 'Kabupaten Paser', 23),
(359, 'Kabupaten Penajam Paser Utara', 23),
(360, 'Kabupaten Tana Tidung', 23),
(361, 'Kota Balikpapan', 23),
(362, 'Kota Bontang', 23),
(363, 'Kota Samarinda', 23),
(364, 'Kota Tarakan', 23),
(365, 'Kabupaten Boalemo', 24),
(366, 'Kabupaten Bone Bolango', 24),
(367, 'Kabupaten Gorontalo', 24),
(368, 'Kabupaten Gorontalo Utara', 24),
(369, 'Kabupaten Pohuwato', 24),
(370, 'Kota Gorontalo', 24),
(371, 'Kabupaten Bantaeng', 25),
(372, 'Kabupaten Barru', 25),
(373, 'Kabupaten Bone', 25),
(374, 'Kabupaten Bulukumba', 25),
(375, 'Kabupaten Enrekang', 25),
(376, 'Kabupaten Gowa', 25),
(377, 'Kabupaten Jeneponto', 25),
(378, 'Kabupaten Luwu', 25),
(379, 'Kabupaten Luwu Timur', 25),
(380, 'Kabupaten Luwu Utara', 25),
(381, 'Kabupaten Maros', 25),
(382, 'Kabupaten Pangkajene Kepulauan', 25),
(383, 'Kabupaten Pinrang', 25),
(384, 'Kabupaten Selayar', 25),
(385, 'Kabupaten Sidenreng Rappang', 25),
(386, 'Kabupaten Sinjai', 25),
(387, 'Kabupaten Soppeng', 25),
(388, 'Kabupaten Takalar', 25),
(389, 'Kabupaten Tana Toraja', 25),
(390, 'Kabupaten Toraja Utara', 25),
(391, 'Kabupaten Wajo', 25),
(392, 'Kota Makassar', 25),
(393, 'Kota Palopo', 25),
(394, 'Kota Pare-pare', 25),
(395, 'Kabupaten Bombana', 26),
(396, 'Kabupaten Buton', 26),
(397, 'Kabupaten Buton Utara', 26),
(398, 'Kabupaten Kolaka', 26),
(399, 'Kabupaten Kolaka Utara', 26),
(400, 'Kabupaten Konawe', 26),
(401, 'Kabupaten Konawe Selatan', 26),
(402, 'Kabupaten Konawe Utara', 26),
(403, 'Kabupaten Muna', 26),
(404, 'Kabupaten Wakatobi', 26),
(405, 'Kota Bau-bau', 26),
(406, 'Kota Kendari', 26),
(407, 'Kabupaten Banggai', 27),
(408, 'Kabupaten Banggai Kepulauan', 27),
(409, 'Kabupaten Buol', 27),
(410, 'Kabupaten Donggala', 27),
(411, 'Kabupaten Morowali', 27),
(412, 'Kabupaten Parigi Moutong', 27),
(413, 'Kabupaten Poso', 27),
(414, 'Kabupaten Sigi', 27),
(415, 'Kabupaten Tojo Una-Una', 27),
(416, 'Kabupaten Toli Toli', 27),
(417, 'Kota Palu', 27),
(418, 'Kabupaten Bolaang Mangondow', 28),
(419, 'Kabupaten Bolaang Mangondow Se', 28),
(420, 'Kabupaten Bolaang Mangondow Ti', 28),
(421, 'Kabupaten Bolaang Mangondow Ut', 28),
(422, 'Kabupaten Kepulauan Sangihe', 28),
(423, 'Kabupaten Kepulauan Siau Tagul', 28),
(424, 'Kabupaten Kepulauan Talaud', 28),
(425, 'Kabupaten Minahasa', 28),
(426, 'Kabupaten Minahasa Selatan', 28),
(427, 'Kabupaten Minahasa Tenggara', 28),
(428, 'Kabupaten Minahasa Utara', 28),
(429, 'Kota Bitung', 28),
(430, 'Kota Kotamobagu', 28),
(431, 'Kota Manado', 28),
(432, 'Kota Tomohon', 28),
(433, 'Kabupaten Majene', 29),
(434, 'Kabupaten Mamasa', 29),
(435, 'Kabupaten Mamuju', 29),
(436, 'Kabupaten Mamuju Utara', 29),
(437, 'Kabupaten Polewali Mandar', 29),
(438, 'Kabupaten Buru', 30),
(439, 'Kabupaten Buru Selatan', 30),
(440, 'Kabupaten Kepulauan Aru', 30),
(441, 'Kabupaten Maluku Barat Daya', 30),
(442, 'Kabupaten Maluku Tengah', 30),
(443, 'Kabupaten Maluku Tenggara', 30),
(444, 'Kabupaten Maluku Tenggara Bara', 30),
(445, 'Kabupaten Seram Bagian Barat', 30),
(446, 'Kabupaten Seram Bagian Timur', 30),
(447, 'Kota Ambon', 30),
(448, 'Kota Tual', 30),
(449, 'Kabupaten Halmahera Barat', 31),
(450, 'Kabupaten Halmahera Selatan', 31),
(451, 'Kabupaten Halmahera Tengah', 31),
(452, 'Kabupaten Halmahera Timur', 31),
(453, 'Kabupaten Halmahera Utara', 31),
(454, 'Kabupaten Kepulauan Sula', 31),
(455, 'Kabupaten Pulau Morotai', 31),
(456, 'Kota Ternate', 31),
(457, 'Kota Tidore Kepulauan', 31),
(458, 'Kabupaten Fakfak', 32),
(459, 'Kabupaten Kaimana', 32),
(460, 'Kabupaten Manokwari', 32),
(461, 'Kabupaten Maybrat', 32),
(462, 'Kabupaten Raja Ampat', 32),
(463, 'Kabupaten Sorong', 32),
(464, 'Kabupaten Sorong Selatan', 32),
(465, 'Kabupaten Tambrauw', 32),
(466, 'Kabupaten Teluk Bintuni', 32),
(467, 'Kabupaten Teluk Wondama', 32),
(468, 'Kota Sorong', 32),
(469, 'Kabupaten Merauke', 33),
(470, 'Kabupaten Jayawijaya', 33),
(471, 'Kabupaten Nabire', 33),
(472, 'Kabupaten Kepulauan Yapen', 33),
(473, 'Kabupaten Biak Numfor', 33),
(474, 'Kabupaten Paniai', 33),
(475, 'Kabupaten Puncak Jaya', 33),
(476, 'Kabupaten Mimika', 33),
(477, 'Kabupaten Boven Digoel', 33),
(478, 'Kabupaten Mappi', 33),
(479, 'Kabupaten Asmat', 33),
(480, 'Kabupaten Yahukimo', 33),
(481, 'Kabupaten Pegunungan Bintang', 33),
(482, 'Kabupaten Tolikara', 33),
(483, 'Kabupaten Sarmi', 33),
(484, 'Kabupaten Keerom', 33),
(485, 'Kabupaten Waropen', 33),
(486, 'Kabupaten Jayapura', 33),
(487, 'Kabupaten Deiyai', 33),
(488, 'Kabupaten Dogiyai', 33),
(489, 'Kabupaten Intan Jaya', 33),
(490, 'Kabupaten Lanny Jaya', 33),
(491, 'Kabupaten Mamberamo Raya', 33),
(492, 'Kabupaten Mamberamo Tengah', 33),
(493, 'Kabupaten Nduga', 33),
(494, 'Kabupaten Puncak', 33),
(495, 'Kabupaten Supiori', 33),
(496, 'Kabupaten Yalimo', 33),
(497, 'Kota Jayapura', 33),
(498, 'Kabupaten Bulungan', 34),
(499, 'Kabupaten Malinau', 34),
(500, 'Kabupaten Nunukan', 34),
(501, 'Kabupaten Tana Tidung', 34),
(502, 'Kota Tarakan', 34),
(508, 'Kota Ungaran', 14),
(509, 'Kota Purwodadi', 14),
(510, 'Kota Singaraja', 17),
(511, 'Kota Karangasem', 17),
(512, 'Kota Negara', 17),
(513, 'Kabupaten Kuantan Singigi', 4),
(519, 'Lhokseumawe', 1),
(515, 'Kabupaten Luwuk', 27),
(516, 'Kota Timika', 33),
(517, 'Solo', 14),
(518, 'Madura', 16),
(520, 'Purwokerto', 14),
(521, 'Waru', 16),
(522, 'Tenggarong', 23),
(523, 'Tanah Grogot', 23),
(524, 'Sangata', 23),
(525, 'Malili', 25),
(526, 'Meulaboh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_mobil_merk`
--

CREATE TABLE `m_mobil_merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mobil_merk`
--

INSERT INTO `m_mobil_merk` (`id`, `nama`) VALUES
(1, 'Aston Martin');

-- --------------------------------------------------------

--
-- Table structure for table `m_mobil_tipe`
--

CREATE TABLE `m_mobil_tipe` (
  `id` int(11) NOT NULL,
  `id_mobil_merk` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mobil_tipe`
--

INSERT INTO `m_mobil_tipe` (`id`, `id_mobil_merk`, `nama`) VALUES
(1, 1, 'Rapide'),
(2, 1, 'Vanquish');

-- --------------------------------------------------------

--
-- Table structure for table `m_otomotif`
--

CREATE TABLE `m_otomotif` (
  `id` int(11) NOT NULL,
  `link_code` varchar(50) NOT NULL,
  `ind_nama` varchar(250) NOT NULL,
  `en_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_otomotif`
--

INSERT INTO `m_otomotif` (`id`, `link_code`, `ind_nama`, `en_nama`) VALUES
(1, 'v-kool-70', 'V-KOOL 70', 'V-KOOL 70'),
(2, 'v-kool-40', 'V-KOOL 40', 'V-KOOL 40'),
(4, 'v-kool-vip', 'V-KOOL VIP', 'V-KOOL VIP'),
(5, 'v-kool-x15', 'V-KOOL X15', 'V-KOOL X15'),
(6, 'v-kool-x05', 'V-KOOL X05', 'V-KOOL X05'),
(7, 'oem-series-vrx-15', 'OEM Series VRX 15', 'OEM Series VRX 15'),
(8, 'oem-series-bx-15', 'OEM Series BX 15', 'OEM Series BX 15'),
(9, 'oem-series-bx05', 'OEM Series BX05', 'OEM Series BX05');

-- --------------------------------------------------------

--
-- Table structure for table `m_otomotif_detail`
--

CREATE TABLE `m_otomotif_detail` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `otomotif_link` varchar(150) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `text_color_konten` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL,
  `is_akhir` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_otomotif_detail`
--

INSERT INTO `m_otomotif_detail` (`id`, `no`, `otomotif_link`, `ind_judul`, `en_judul`, `ind_konten`, `en_konten`, `v_align`, `h_align`, `gambar`, `text_color_konten`, `text_color_judul`, `is_akhir`) VALUES
(1, 1, 'v-kool-70', '', '', '', '', 'description-bottom', 'konten-kiri', 'VK70_1.jpg', '', '', 0),
(2, 2, 'v-kool-70', '', '', 'Selama lebih dari 20 tahun, V-KOOL 70 adalah produk V-KOOL paling banyak digunakan, berkat penerusan cahaya tampak yang tinggi serta performa maksimal penolakan panas. Pengendara sangat menyukai perlindungan kaca film bening yang disediakan oleh V-KOOL 70.', 'For more than 20 years, V-KOOL 70 is the best-selling Solitaire Series product, acclaimed for its high visible light transmission and high heat rejection performance. Discerning drivers appreciate the near-invisible shield provided by V-KOOL 70.', 'description-bottom', 'col-md-6 col-md-offset-3', 'VK70_2.jpg', 'text-black', '', 0),
(3, 3, 'v-kool-70', '', '', '', '', 'description-bottom', 'konten-kiri', 'VK70_3.jpg', '', '', 0),
(4, 4, 'v-kool-70', '', '', '', '', 'description-middle', 'konten-kanan', 'VK70_4.jpg', 'text-black', '', 1),
(5, 1, 'v-kool-40', 'Stylishly Dark', 'Stylishly Dark', '', '', 'description-middle', 'konten-kanan', 'v-kool-40_img_1.jpg', 'text-white', 'text-white', 0),
(6, 2, 'v-kool-40', '', '', 'Lihatlah keluar dan nikmati pemandangan dunia dalam pandangan berbeda dengan sedikit panas dan silau dari sinar matahari. V-KOOL 40 membantu memberikan privasi kemewahan sekaligus menjaga interior kendaraan lebih sejuk dengan menolak gelombang infra merah penyebab panas.', 'Look out your window and see the world in a different light, with less heat and glare from the sun. V-KOOL 40 helps provide the luxury of privacy while keeping the interior of your car cooler by reflecting heat bearing infra-red waves.', 'description-top', 'col-md-8 col-md-offset-2 text-center', 'v-kool-40_img_2.jpg', 'text-white', 'text-white', 0),
(7, 3, 'v-kool-40', '', '', '', '', 'description-top', 'col-md-8 col-md-offset-2 text-center', 'v-kool-40_img_3.jpg', 'text-white', 'text-white', 0),
(8, 4, 'v-kool-40', '', '', '', '', 'description-middle', 'konten-kanan', 'v-kool-40_img_4.jpg', 'text-white', 'text-white', 1),
(10, 2, 'v-kool-vip', '', '', 'V-KOOL VIP ideal bagi individu yang membutuhkan privasi pada kendaraannya sekaligus penolakan panas yang baik. V-KOOL VIP adalah pilihan yang menawarkan 96% penolakan terhadap radiasi infra merah (panas) matahari.', 'V-KOOL VIP is suitable for individuals who are looking for privacy protection in their cars while reducing or minimizing the heat of the vehicle. It is the industry\'s leading film technology that provides 94% rejection of infra-red radiation from the sun. ', 'description-bottom', 'col-md-6 col-md-offset-3', 'VK70_2.jpg', 'text-black', '', 0),
(13, 1, 'v-kool-x15', '', '', 'V-KOOL X15 adalah solusi ideal bagi Anda yang menginginkan kemampuan penolak panas yang tinggi serta tampilan kaca film dengan refleksi cahaya tampak yang rendah.', 'V-KOOL X15 is the ideal solution for customers who want to control visible light reflections while reducing or minimizing the heat of the vehicle.', 'description-top', 'konten-kiri', 'VK55_2.jpg', 'text-white', '', 0),
(14, 2, 'v-kool-x15', '', '', 'V-KOOL X15 adalah kaca film terbaik yang menyediakan visibilitas sempurna dibandingkan kaca film gelap lainnya yang reflektif, dengan hanya 12% reflektifitas cahaya tampak.', 'It is the industry\'s leading film technology that provides excellent visibility compared to films with typical dark visible light transmittance while achieving only 12% visible light reflectance.', 'description-bottom', 'konten-kanan', 'VK55_3.jpg', 'text-white', '', 0),
(15, 1, 'v-kool-x05', '', '', 'V-KOOL X05 adalah kaca film dengan teknologi metal matrix composite (MMC) yang terdiri atas materi titanium composite serta metallic alloy, keduanya ditembakkan pada permukaan substrate PET terbaik. Dengan komposisi tersebut menjadikan kaca film otomotif ini memiliki daya tahan yang kuat terhadap keausan, konduktivitas panas hingga efisiensi energi.', 'The V-KOOL X05 series is a multi-layered MMC stack, which consists of a titanium composite material coupled with a metallic alloy, both sputtered onto top grade PET substrate. The MMC material improve properties in automotive application in terms of fatigue or wear resistance, thermal conductivity and engine efficiency.', 'description-middle', 'konten-kiri', 'D_x40_02_0.jpg', 'text-white', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_otomotif_detail_list`
--

CREATE TABLE `m_otomotif_detail_list` (
  `id` int(11) NOT NULL,
  `otomotif_link` varchar(150) NOT NULL,
  `no` int(11) NOT NULL,
  `ind_detil` varchar(150) NOT NULL,
  `en_detil` varchar(150) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_otomotif_detail_list`
--

INSERT INTO `m_otomotif_detail_list` (`id`, `otomotif_link`, `no`, `ind_detil`, `en_detil`, `ind_judul`, `en_judul`, `gambar`) VALUES
(1, 'v-kool-70', 1, 'Nikmati kejernihan optik yang sangat baik melalui kinerja transmisi cahaya tampak.', 'Enjoy excellent optical clarity via the film’s visible light transmission performance.', 'Kejernihan Optik unggul', 'Excellent Optical Clarity', 'clarity_black.svg'),
(2, 'v-kool-70', 2, 'Melindungi kulit dengan menolak 99% sinar UV.', 'Protect skin by blocking out 99% of UV rays.', 'Perlindungan UV yang unggul', 'Excellent Shielding against UV', 'uv_black.svg'),
(3, 'v-kool-70', 3, 'Nikmati panas yang berkurang karena kemampuan penolakan sinar infra merah.', 'Enjoy reduced heat transmission because of the infra-red reflection capabilities.', 'Penolakan Panas yang Unggul', 'Excellent Heat Rejection', 'heat_black.svg'),
(4, 'v-kool-70', 4, 'Rasakan teknologi produk berkualitas tinggi yang dikembangkan di Silicon Valley, AS.', 'Experience superior quality product technology that was developed in Silicon Valley, USA.', 'Dikembangkan di Amerika Serikat', 'Developed in USA', 'us_black.svg'),
(5, 'v-kool-40', 1, 'Membantu mengurangi silau sambil memberikan manfaat perlindungan privasi.', 'Help to reduce glare while delivering the benefit of privacy protection.', 'Pengurangan Silau yang Superior', 'Superior Glare Reduction', 'clarity_white.svg'),
(6, 'v-kool-40', 2, 'Melindungi kulit dengan menolak 99% sinar UV.', 'Protect skin by blocking out more than 99% of UV rays.', 'Perlindungan UV yang unggul', 'Excellent Shielding against UV', 'uv_white.svg'),
(7, 'v-kool-40', 3, 'Nikmati panas yang berkurang karena kemampuan penolakan sinar infra merah.', 'Enjoy reduced heat transmission because of the infra-red reflection capabilities.', 'Penolakan Panas Luar Biasa', 'Extra-ordinary Heat Rejection', 'heat_white.svg'),
(8, 'v-kool-40', 4, 'Rasakan teknologi produk berkualitas tinggi yang dikembangkan di Silicon Valley, AS.', 'Experience superior quality product technology that was developed in Silicon Valley, USA.', 'Dikembangkan di Amerika Serikat', 'Developed in USA', 'us_white.svg');

-- --------------------------------------------------------

--
-- Table structure for table `m_otomotif_portfolio`
--

CREATE TABLE `m_otomotif_portfolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_otomotif_portfolio`
--

INSERT INTO `m_otomotif_portfolio` (`id`, `nama`, `gambar`) VALUES
(1, 'Avanza / Xenia', 'avanza 300x300.jpg'),
(2, 'Mitsubishi Expander', 'mitsubishi Expander.jpg'),
(3, 'Rush / Terios', 'Rush terios.jpg'),
(4, 'Toyota Inova', 'Toyota Inova.jpg'),
(5, 'Toyota Sienta', 'Toyota Sienta.jpg'),
(6, 'Toyota Yaris', 'Toyota yaris.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `m_penghargaan`
--

CREATE TABLE `m_penghargaan` (
  `id` int(11) NOT NULL,
  `ind_nama` varchar(150) NOT NULL,
  `en_nama` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_penghargaan`
--

INSERT INTO `m_penghargaan` (`id`, `ind_nama`, `en_nama`, `ind_konten`, `en_konten`, `gambar`) VALUES
(1, 'ISO 9001:2000', 'ISO 9001:2000', 'Registrar of Standards(Holdings) Limited', 'Registrar of Standards(Holdings) Limited', 'iso9001.png'),
(2, 'MAJALAH POPULAR SCIENCE, USA', 'SCIENCE POPULAR MAGAZINE, USA', 'Seratus Penemuan Terbaik di Era Milenium', 'One Hundred Best Inventions in the Millennium Era', 'popsci.png'),
(3, 'SUPERBRAND SINGAPORE', 'SUPERBRAND SINGAPORE', '2002/2003', '2002/2003', 'superbrand.png'),
(4, 'AUTOBILD AWARD 2008/2009', 'AUTOBILD AWARD 2008/2009', 'Pilihan Pemirsa', 'Reader’s choice', 'autobild3.png'),
(5, 'ENERGY STAR ALLY, 2000', 'ENERGY STAR ALLY, 2000', 'Agen Perlindungan Lingkungan Amerika Serikat (EPA) menganugerahi V-KOOL penghargaan ekslusif Energy Star Ally.', 'The United States Environmental Protection Agency (EPA) awarded V-KOOL the Energy Star Ally exclusive award.', 'energy.png'),
(6, 'TODAY’S FACILITY MANAGER (TFM), 2003 READERS’ CHOICE AWARDS', 'TODAY’S FACILITY MANAGER (TFM), 2003 READERS’ CHOICE AWARDS', 'Kategori kaca Film, USA', 'Film glass category, USA', 'tfm.png'),
(7, 'TOP BRAND AWARD INDONESIA 2008/2009', 'TOP BRAND AWARD INDONESIA 2008/2009', 'V-KOOL dianugerahi penghargaan Top Brand selama 2 tahun berturut-turut. Survei yang dilakukan oleh Frontier Consulting Group ini mewawancarai 1800 responden dari 6 kota besar di Indonesia.', 'V-KOOL was awarded Top Brand Award for 2 years in a row. The survey conducted by Frontier Consulting Group interviewed 1800 respondents from 6 major cities in Indonesia.', 'topbrand.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_provinsi`
--

CREATE TABLE `m_provinsi` (
  `provinsi_id` int(10) NOT NULL,
  `provinsi_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_provinsi`
--

INSERT INTO `m_provinsi` (`provinsi_id`, `provinsi_nama`) VALUES
(1, 'Nanggroe Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Kepulauan Bangka-Belitung'),
(7, 'Jambi'),
(8, 'Bengkulu'),
(9, 'Sumatera Selatan'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'DKI Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta  '),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua Barat'),
(33, 'Papua'),
(34, 'Kalimantan Utara');

-- --------------------------------------------------------

--
-- Table structure for table `m_tentang`
--

CREATE TABLE `m_tentang` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `ind_judul` varchar(150) NOT NULL,
  `en_judul` varchar(150) NOT NULL,
  `ind_konten` longtext NOT NULL,
  `en_konten` longtext NOT NULL,
  `v_align` varchar(150) NOT NULL,
  `h_align` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `text_color_konten` varchar(150) NOT NULL,
  `text_color_judul` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_tentang`
--

INSERT INTO `m_tentang` (`id`, `no`, `ind_judul`, `en_judul`, `ind_konten`, `en_konten`, `v_align`, `h_align`, `gambar`, `text_color_konten`, `text_color_judul`) VALUES
(1, 1, 'Tentang V-KOOL', 'About V-KOOL', '', '', 'description-middle', 'konten-kanan', 'about VK_01_2.jpg', 'text-white', 'text-white'),
(10, 2, '', '', 'V-KOOL, sebuah merek dari Eastman Chemical Company, diakui secara global sebagai pemimpin dalam industri kaca film sputtered spectrally-selective untuk kaca otomotif dan arsitektural.<br/><br/>Inti dari performa superior kaca film penolak panas V-KOOL adalah Teknologi XIR, suatu proses sputtering eksklusif yang dikembangkan di Silicon Valley, Amerika Serikat dan diimplementasikan di Dresden, Jerman.', 'V-KOOL, a brand of Eastman Chemical Company, is recognized globally as an industry leader in advanced window films for automotive and architectural glass.<br/><br/>The core of V-KOOL’s spectrally-selective infra red heat rejection superior performance is it’s XIR Technology, a proprietary sputtering processed developed in Silicon Valley, USA and implemented in Dresden, Germany.', 'description-bottom', 'konten-kiri', 'about VK_02_2.jpg', 'text-white', 'text-white'),
(11, 3, 'Tentang PT. V-KOOL Indo Lestari', 'About PT. V-KOOL Indo Lestari', 'PT V-KOOL Indo Lestari didirikan tahun 1995 dan mendapat kepercayaan sebagai distributor eksklusif dari merek kaca film ternama di Indonesia. Kantor pertama V-KOOL Indonesia berlokasi di Karang Anyar, Jakarta Pusat dengan 10 orang staf.<br/><br/>V-KOOL Indonesia kemudian giat  membuka jaringan dealer, pelatihan teknisi dan perekrutan, dan pendidikan pasar. Kemudian V-KOOL terus berkembang dengan menjadi pionir melalui terobosan signifikan sampai menjadiSejak 1995, V-KOOL Indonesia telah berpartisipasi dalam pameran otomotif dan lainnya, beriklan di media dan radio, mempersiapkan tim yang berdedikasi untuk memperkenalkan V-KOOL ke ATPM-ATPM, menyelenggarakan Kontes Teknisi Terbaik. Kegiatan tersebut hanya beberapa dari program terobosan yang kami lakukan untuk membangun kesadaran konsumen akan merek dan produk V-KOOL serta membangun tim yang kuat. pemimpin pasar.<br/><br/>', 'PT V-KOOL Indo Lestari was founded in 1995 as the exclusive master franchisee of the world’s leading window films in Indonesia. V-KOOL Indonesia first office was located at Karang Anyar, Central of Jakarta with staffs of 10 people. <br/><br/>V-KOOL got their hands full with tasks such as dealership opening, distribution network, technician training and recruitment, and market education. Then they continue growing with significant breakthroughs that have never been accomplished by others who have been in the window film since the 70’s until then V-KOOL become the market leader. <br/><br/>Since 1995, V-KOOL has joined GAIKINDO exhibitions and others, advertised through media and radio, set our dedicated team to push sales through the ATPMs, conducted Best Technician Contests. Those were some of V-KOOL’s unique programs that were done to increase consumers\' awareness of V-KOOL brand, products, and strong team. ', 'description-top', 'konten-kiri', 'about VK_03_2.jpg', 'text-black', 'text-black'),
(12, 3, '', '', 'Visi<br/><br/>Untuk selalu menjadi penyedia solusi terbaik dan perusahaan kaca film paling terpercaya.<br/><br/><br/>Misi<br/><br/>Mengedukasi masyarakan dengan pengetahuan dan manfaat kaca film bagi kendaraan rumah dan tempat usaha mereka.<br/><br/>\r\nMenyediakan solusi kaca film berdasarkan kebutuhan customer dan partner yang berbeda-beda, dengan menawarkan produk, merek, kualitas dan pelayanan yang terbaik.', 'Vision<br/><br/>To always be the best solutions provider and most trusted window film company.<br/><br/><br/>Mission<br/><br/>To educate our community on window film product knowledge and benefits for their car, home, and business.<br/><br/>To provide the best window film solutions based on different customer and partner’s needs by offering them the very best-in-class product, brand, quality, and service.', 'description-middle', 'col-md-8 col-md-offset-2 text-center', 'about VK_04_2.jpg', 'text-black', 'text-black');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_bangunan`
--
ALTER TABLE `m_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_bangunan_detail`
--
ALTER TABLE `m_bangunan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_bangunan_performa`
--
ALTER TABLE `m_bangunan_performa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_bangunan_portfolio`
--
ALTER TABLE `m_bangunan_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_dealer`
--
ALTER TABLE `m_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_harga`
--
ALTER TABLE `m_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_home_section`
--
ALTER TABLE `m_home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_home_section_detail`
--
ALTER TABLE `m_home_section_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_home_slider`
--
ALTER TABLE `m_home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_home_video`
--
ALTER TABLE `m_home_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_kota`
--
ALTER TABLE `m_kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indexes for table `m_mobil_merk`
--
ALTER TABLE `m_mobil_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_mobil_tipe`
--
ALTER TABLE `m_mobil_tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_otomotif`
--
ALTER TABLE `m_otomotif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_otomotif_detail`
--
ALTER TABLE `m_otomotif_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_otomotif_detail_list`
--
ALTER TABLE `m_otomotif_detail_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_otomotif_portfolio`
--
ALTER TABLE `m_otomotif_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_penghargaan`
--
ALTER TABLE `m_penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `m_tentang`
--
ALTER TABLE `m_tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_bangunan`
--
ALTER TABLE `m_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_bangunan_detail`
--
ALTER TABLE `m_bangunan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `m_bangunan_performa`
--
ALTER TABLE `m_bangunan_performa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `m_bangunan_portfolio`
--
ALTER TABLE `m_bangunan_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `m_dealer`
--
ALTER TABLE `m_dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_harga`
--
ALTER TABLE `m_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_home_section`
--
ALTER TABLE `m_home_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_home_section_detail`
--
ALTER TABLE `m_home_section_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_home_slider`
--
ALTER TABLE `m_home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_home_video`
--
ALTER TABLE `m_home_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_kota`
--
ALTER TABLE `m_kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT for table `m_mobil_merk`
--
ALTER TABLE `m_mobil_merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_mobil_tipe`
--
ALTER TABLE `m_mobil_tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_otomotif`
--
ALTER TABLE `m_otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_otomotif_detail`
--
ALTER TABLE `m_otomotif_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_otomotif_detail_list`
--
ALTER TABLE `m_otomotif_detail_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_otomotif_portfolio`
--
ALTER TABLE `m_otomotif_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_penghargaan`
--
ALTER TABLE `m_penghargaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  MODIFY `provinsi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `m_tentang`
--
ALTER TABLE `m_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
