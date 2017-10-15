-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 10:30 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemasters`
--

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` mediumint(9) DEFAULT NULL,
  `floorplan` varchar(50) NOT NULL,
  `beds` tinyint(4) NOT NULL,
  `baths` tinyint(4) NOT NULL,
  `parks` tinyint(4) NOT NULL,
  `bWidth` varchar(10) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `name`, `price`, `floorplan`, `beds`, `baths`, `parks`, `bWidth`, `description`) VALUES
(1, 'The Roslin', 350000, 'roslin', 4, 2, 2, '16.5m', '<p>The Roslin has been designed to take full advantage of your block. Huge gourmet kitchen and cabana/alfresco to the front of the home allows you to watch the kids play out the front and know they are safe. With spacious open plan living, high ceilings, 4 double sized bedrooms and 2 bathrooms, The Roslin has it all.</p>\r\n<ul><li>Huge gourmet kitchen opening onto alfresco area</li><li>Spacious living and dining rooms</li><li>Separate media room</li></ul>'),
(2, 'The Sinclair', 650000, 'sinclair', 4, 2, 2, '15m', '<p>The Sinclair has been designed with the growing family in mind, from the large bedrooms to the huge Web Zone and Games Room, Theatre and separate Study. Plenty of space awaits the homeowner, space for the whole family to share.</p>\r\n<ul><li>Huge wrap around kitchen and breakfast bar area</li>\r\n<li>Large family, dining and games room</li>\r\n<li>High ceilings to all living areas</li></ul>'),
(3, 'The Dublin', 625000, 'dublin', 4, 2, 2, '12.5m', '<p>For a new home that offers all the essential features your family demands, with the perfect balance of space to relax and retreat, look no further than The Dublin.\r\nThis well-appointed four bedroom, two bathroom home is a parent\'s dream, with the master bedroom positioned at the rear for maximum privacy.</p>\r\n<ul><li>Separate home theatre</li>\r\n<li>Spacious living and dining rooms</li>\r\n<li>Huge gourmet kitchen</li></ul>'),
(4, 'The Manhattan', 450000, 'manhattan', 4, 2, 2, '8.5m - 10m', '<p>The Manhattan comes complete with quality fittings and the superior attention to detail built into each of our homes. With such a long list of fantastic design attributes and quality features, The Manhattan must be seen to be truly appreciated.</p>\r\n\r\n<ul><li>Huge Gourmet Kitchen</li><li>Separate home theatre</li><li>Spacious living and dining rooms</li></ul>'),
(5, 'The Gosford', 550000, 'gosford', 4, 2, 2, '12m', '<p>The Gosford is the ideal home for practical everyday living and family togetherness. Large windows, high ceilings and a cleverly positioned atrium serve to bring plenty of natural light and a touch of greenery within, giving the entire open plan area a sense of space and brightness.</p>\r\n<ul><li>Spacious kitchen with adjoining scullery</li>\r\n<li>Large family, dining and theatre rooms</li>\r\n<li>31 Course high ceilings to living areas</li></ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
