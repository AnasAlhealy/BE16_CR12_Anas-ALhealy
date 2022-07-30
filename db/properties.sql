-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 02:09 PM
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
-- Database: `be16_cr12_lacasamia_anas_alhealy`
--

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `advert_title`, `size`, `room_number`, `city`, `price`, `latitude`, `longitude`, `image`, `price_reduction`) VALUES
(1, 'Detached house in 1220 Wien', 212, 6, 'Gangmian', 690102, '48.20856098621748 ', '16.349337729346303', 'https://api.lorem.space/image/house', '0'),
(2, 'Other agricultural land in 1210 Wien', 94, 4, 'Lae', 281918, '48.26561415332573', '16.427529484445706', 'https://api.lorem.space/image/house', '0'),
(3, 'Newly built property in 1220 Wien', 199, 1, 'Saumur', 324556, '48.099652195344206', '16.296208534608077', 'https://api.lorem.space/image/house', '0'),
(4, 'Apartment in 1100 Wien,Favoriten', 172, 3, 'Linhares', 770696, '48.140677588578704', '16.394227178212372', 'https://api.lorem.space/image/house', '0'),
(5, 'Detached house in 1220 Wien', 97, 1, 'Al Jarrāḩī', 574228, '48.175603545815605', '16.432164341498797', 'https://api.lorem.space/image/house', '0'),
(6, 'Apartment in 1230 Wien', 470, 2, 'Jianshan', 357061, '48.20901857920228', '16.244538461534706', 'https://api.lorem.space/image/house', '1'),
(7, 'House in 1120 Wien', 425, 7, 'Charleston', 485750, '48.248699209309116', '16.456711917742957', 'https://api.lorem.space/image/house', '0'),
(8, 'Apartment in 1190 Wien', 70, 4, 'Krasnoye', 545504, '48.184417159753956', '16.26239124425773', 'https://api.lorem.space/image/house', '1'),
(9, 'House in 1120 Wien', 52, 8, 'Xiabeisi', 751737, '48.23589499104761', '16.38118091391478', 'https://api.lorem.space/image/house', '1'),
(10, 'Newly built property in 1120 Wien', 261, 3, 'Rietavas', 508508, '48.29908466631812', '16.415341528607065', 'https://api.lorem.space/image/house', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
