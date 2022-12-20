-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 03:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footie`
--

-- --------------------------------------------------------

--
-- Table structure for table `footie`
--

CREATE TABLE `footie` (
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footie`
--

INSERT INTO `footie` (`type`, `name`, `price`, `image`) VALUES
('unisex training', 'nike air jordaan', 4000000, 0x6e696b652e706e67),
('unisex training', 'Adidas Running', 1200000, 0x6164696461735f72756e6e696e672e706e67),
('running shoes', 'Adidas Running 2', 4000000, 0x6e696b652d6169722e706e67),
('school', 'Nike Air ', 2500000, 0x6e696b652d636f6c6f722e706e67),
('school', 'balenciaga', 10000000, 0x62616c656e63696167612e706e67),
('travel', 'Off White 2', 12000000, 0x6f66662d77686974652e706e67),
('running', 'Puma 3', 1200000, 0x70756d612e706e67),
('school', 'Nike Air Jordan Red', 7000000, 0x6e696b652d7265642e706e67),
('unisex training', 'Nike Air Jordan Corange', 9000000, 0x6e696b652d6f72616e67652e706e67),
('basket', 'Nike Air Jordan Blue', 12000000, 0x6e696b652d626c75652e706e67),
('unisex training', 'Adidas Airmax', 3400000, 0x6164696461732e706e67),
('boot', 'Timberland Boots', 4100000, 0x74696d6265726c616e642e706e67),
('casual', 'Nike Air Mini', 3100000, 0x6169722d6d696e692d636f6c6f722e706e67),
('formal', 'Nike Air Form1', 4100000, 0x666f726d616c2e706e67),
('white', 'Nike White', 12000000, 0x77686974652e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
