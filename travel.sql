-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 01:09 PM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `jml_org` int(11) NOT NULL,
  `budget` bigint(20) NOT NULL,
  `destinasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `jml_org`, `budget`, `destinasi`, `deskripsi`, `photo`) VALUES
(27, 10, 18000000, 'Open Trip Nusa Penida', 'Nusa Penida adalah sebuah pulau kecil yang terletak di sebelah tenggara Bali, Indonesia. Meskipun ukurannya kecil, pulau ini menyimpan keindahan alam yang menakjubkan dan menjadi destinasi populer bagi para wisatawan yang mencari petualangan dan kehidupan bawah laut yang luar biasa. Ini yang jadi keistimewaan Nusa Penida.', 'caption.jpg'),
(28, 6, 5000000, 'Sunrise Trip Gunung  Bromo', 'Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. ', 'bromo.jpg'),
(29, 10, 12000000, 'Snorkeling Trip Pulau Seribu', 'Bagi pecinta snorkling maka wajib untuk berkunjung ke spot snorkling di Pulau Seribu yang satu ini, berbeda dengan pulau lainnya yang berpenghuni maka pulau ini tidak berpenghuni alias kosong. Namun walaupun kosong bukan berarti tidak ada potensi wisata di tempat ini, dimana ada banyak sekali tempat yang bisa Anda kunjungi.', 'tours-snorkeling-di-Kepulauan-Seribu.jpg'),
(30, 10, 25000000, 'Open Trip Raja Ampat', 'Bagi Sobat Pesona yang gemar diving dan snorkeling, wilayah perairan Raja Ampat adalah salah satu destinasi diving terbaik di dunia. Menurut laporan sebuah organisasi sosial lingkungan internasional, The Nature Conservancy and Conservation International, sekitar 75% spesies karang di dunia hidup di kepulauan Raja Ampat. Destinasi ini memiliki kekayaan dan keunikan spesies yang tinggi dengan ditemukannya 1.318 jenis ikan, 699 jenis moluska (hewan lunak), dan 537 jenis terumbu karang. ', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
