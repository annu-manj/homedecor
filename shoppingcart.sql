-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 21, 2024 at 05:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qtty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `productid`, `qtty`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 2),
(3, 1, 2, 1),
(4, 1, 24, 1),
(5, 1, 7, 2),
(6, 1, 1, 2),
(7, 1, 1, 6),
(8, 1, 1, 1),
(9, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(15) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `img`) VALUES
(1, 'Furnitures', 'images/furniture1.jpg'),
(2, 'Textile', 'images/textile0.jpg'),
(3, 'Kitchenware', 'images\\kitchen2.jpg'),
(4, 'Decoration', 'images/mirror.jpeg'),
(5, 'Lightings', 'images/l5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payement_id` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `card_no` int(11) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `upi_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryid`, `name`, `price`, `qty`, `img`) VALUES
(1, 1, 'Trendy Book Shelf', 8500, 14, 'images\\b1.jpg'),
(2, 1, 'Checkers Book Shelf', 7500, 20, 'images\\b6.jpg'),
(3, 1, 'Daisuke 1 Seater Sofa', 9000, 15, 'images\\s2.jpg'),
(4, 1, 'Brufus Arm Chair', 4500, 30, 'images\\s4.jpg'),
(5, 1, 'Ozone 2Door Wardrobe', 19000, 40, 'images\\wardrobe1 (2).jpg'),
(6, 2, 'Printed Micro Fiber Filled Cushio', 299, 36, 'images\\cushion1.jpg'),
(7, 2, 'Grey Silk 8 Feet Eyelet Curtain', 355, 15, 'images\\cushion3.jpg'),
(8, 2, 'Stripped Micro Fiber Filled Cushion', 299, 20, 'images\\cushion2.jpg'),
(9, 2, 'Grey with White Printed Curtain', 200, 40, 'images\\curtain2.jpg'),
(10, 2, 'Printed Dining Linen set', 450, 20, 'images\\curtain.jpg'),
(11, 2, 'Pure White classic curtain bed', 563, 9, 'images\\linen1.jpg'),
(12, 3, 'Vintage dinnerware', 699, 21, 'images\\kit1.jpg'),
(13, 3, 'ILAOPALA white dinner set', 1000, 9, 'images\\kit2.jpg'),
(14, 3, 'Classic dinner set', 1500, 10, 'images\\kit3.jpg'),
(15, 3, 'Elegant dinner set', 1499, 20, 'images\\kit4.jpg'),
(16, 3, 'Coffee maker', 566, 20, 'images\\kit5.jpg'),
(17, 3, 'Milton Glassy flask', 799, 20, 'images\\kit7.jpg'),
(18, 4, 'Hanging Mirror', 1999, 10, 'images\\decor2.jpg'),
(19, 4, 'Golden Flower vase', 1299, 20, 'images\\decor1.jfif'),
(20, 4, 'Wooden frame', 999, 15, 'images\\decor4.jpeg'),
(21, 4, 'Golden-white photo frame', 399, 60, 'images\\decor5.jpeg'),
(22, 5, 'Cluster Hanging light', 1690, 20, 'images\\light1.jpg'),
(23, 5, 'Beige Metal Hanging', 2999, 20, 'images\\l7.jpg'),
(24, 5, 'Antique gold light cluster', 599, 5, 'images\\l9.jpg'),
(26, 1, 'nithani sofa', 3990, 15, 'images/s3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'ananya manoj', 'anansmanj2@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payement_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
