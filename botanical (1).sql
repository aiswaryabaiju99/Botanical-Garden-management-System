-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 07:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botanical`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`reg_id`, `name`, `email`, `phno`, `address`, `pincode`, `password`, `status`) VALUES
(1, 'Aiswarya Baiju', 'aiswarya@gmail.com', 9876543210, 'aishu ponkunam', 686785, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(2, 'Aishu M', 'aishu@gmail.com', 9876542310, 'aishu ponkunam', 686585, '', 0),
(3, 'Aishu A', 'aishu123@gmail.com', 9876543210, 'aishu ponkunam', 686585, 'Aishu123#', 0),
(4, 'Veena K', 'veena@gmail.com', 9876543210, 'Veena chengalam', 686585, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(5, 'Sayana Santhosh', 'sayana@gmail.com', 9876543210, 'sayana villa', 686532, 'Sayana123#', 0),
(6, 'Minu', 'minu@gmail.com', 9876543210, 'Minu', 0, 'Minu123#', 0),
(7, 'Devu', 'devu@gmail.com', 9876543210, 'Devus', 0, 'Devu123#', 0),
(8, 'Ninu', 'ninu@gmail.com', 9876543212, 'Ninu', 0, 'Ninu123#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `username`, `password`) VALUES
(1, 'admin1234@gmail.com', 'Admin1234$');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `p_id`, `username`, `name`, `price`, `image`, `quantity`) VALUES
(2, 3, 'devu@gmail.com', 'Patchouli', 300, 'patchouli.jpg', 0),
(3, 7, 'devu@gmail.com', ' Smooth Flatsedge', 200, 'UHU.jpg', 0),
(6, 7, 'minu@gmail.com', ' Smooth Flatsedge', 200, 'UHU.jpg', 0),
(7, 3, 'minu@gmail.com', 'Patchouli', 300, 'patchouli.jpg', 0),
(8, 3, 'ninu@gmail.com', 'Patchouli', 300, 'patchouli.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`c_id`, `c_name`, `c_status`) VALUES
(1, 'Medicinal Plants', 0),
(2, 'Economical Plants', 0),
(3, 'Ornamental Plants', 0),
(5, 'Carnivorous Plants', 0),
(11, 'Aquatic Plants', 0),
(12, 'Shurbs', 0),
(13, 'herbs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `log_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`log_id`, `reg_id`, `username`, `password`, `status`, `type`) VALUES
(1, 1, 'aiswarya@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0),
(2, 2, 'aishu@gmail.com', '', 0, 0),
(3, 3, 'aishu123@gmail.com', 'Aishu123#', 0, 0),
(4, 4, 'veena@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0),
(5, 5, 'sayana@gmail.com', 'Sayana123#', 0, 0),
(6, 6, 'minu@gmail.com', 'Minu123#', 0, 1),
(7, 0, 'admin', 'Admin123#', 0, 2),
(8, 7, 'devu@gmail.com', 'Devu123#', 0, 1),
(9, 8, 'ninu@gmail.com', 'Ninu123#', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pass`
--

CREATE TABLE `tbl_pass` (
  `pass_id` int(11) NOT NULL,
  `passtype_id` int(11) NOT NULL,
  `no_pass` int(250) NOT NULL,
  `pass_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pass`
--

INSERT INTO `tbl_pass` (`pass_id`, `passtype_id`, `no_pass`, `pass_status`) VALUES
(1, 1, 0, 0),
(3, 2, 200, 0),
(4, 3, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passtype`
--

CREATE TABLE `tbl_passtype` (
  `passtype_id` int(11) NOT NULL,
  `passtype` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `from_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_passtype`
--

INSERT INTO `tbl_passtype` (`passtype_id`, `passtype`, `amount`, `from_date`) VALUES
(1, 'Adult', 100, NULL),
(3, 'Kids', 50, NULL),
(4, 'Students', 50, '2022-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plants`
--

CREATE TABLE `tbl_plants` (
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `price` int(25) NOT NULL,
  `quantity` int(50) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_status` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `fetures` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plants`
--

INSERT INTO `tbl_plants` (`p_id`, `s_id`, `p_name`, `b_name`, `price`, `quantity`, `descp`, `image`, `p_status`, `type`, `fetures`) VALUES
(1, 12, 'Bigleaf Hydrange', 'Hydrangea macrophylla ', 300, 70, 'It is a deciduous shrub growing to 2 m (7 ft) tall by 2.5 m (8 ft) broad with large heads of pink or blue flowers in summer ', 'Hydrangea.jpg', 1, 'sale', 'flowering,vascular,'),
(3, 2, 'Patchouli', 'Pogostemon cablin', 300, 70, ' Patchouli is antibacterial and anti fungal. Used for ages in the Far East, Patchouli was employed to treat nausea, headaches, colds.', 'patchouli.jpg', 1, 'sale', 'herb,non-vascular,'),
(7, 7, ' Smooth Flatsedge', 'Cyperus laevigatus', 200, 50, 'grows in wet areas, especially in brackish water, wet alkaline soils, mineral-rich hot springs, and other moist saline and alkaline habitat.', 'UHU.jpg', 0, 'sale', 'shrub,'),
(8, 1, 'Rose', 'Rose', 70, 60, '', 'hereb.jpeg', 0, 'sale', 'flowering,vascular,'),
(9, 1, 'Garlic', 'Allium sativum Penne', 200, 25, 'Used for Ringworm, Dysentery, Wounds.', 'garlic.jpg', 1, 'sale', 'shrub,'),
(10, 7, 'vvdxdv', 'dvdvdv', 44, 33, 'ews', 'hereb.jpeg', 0, 'sale', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `sale_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `plant_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub`
--

CREATE TABLE `tbl_sub` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub`
--

INSERT INTO `tbl_sub` (`s_id`, `c_id`, `s_name`, `status`) VALUES
(1, 1, 'medicinal shurb', 1),
(2, 1, 'Medicinal Herbs', 1),
(7, 11, 'Brackish water plants', 1),
(9, 5, 'Byblidaceae‎ ', 1),
(10, 5, 'Sarraceniaceae', 1),
(11, 3, 'Palm', 1),
(12, 1, 'Shade Plants', 0),
(13, 1, 'Cannabis', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `log_id` (`log_id`);

--
-- Indexes for table `tbl_pass`
--
ALTER TABLE `tbl_pass`
  ADD PRIMARY KEY (`pass_id`);

--
-- Indexes for table `tbl_passtype`
--
ALTER TABLE `tbl_passtype`
  ADD PRIMARY KEY (`passtype_id`);

--
-- Indexes for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pass`
--
ALTER TABLE `tbl_pass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_passtype`
--
ALTER TABLE `tbl_passtype`
  MODIFY `passtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
