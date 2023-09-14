-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `ID` int(5) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `pquantity` int(20) NOT NULL,
  `pdesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`ID`, `pname`, `pprice`, `pimg`, `pquantity`, `pdesc`) VALUES
(1, 'T-Shirt', 30, 'user.jpg', 20, 'XXL Size. Pure Cotton. Good Quality.'),
(2, 'Watch', 80, 'p30.jpg', 50, 'Premium Watch. Free Size. Good Quality.'),
(3, 'Sketchers', 55, 'p32.jpg', 22, 'Branded Shoe. Free Size. Good Quality.'),
(4, 'Sports-Shoe', 75, 'p5.jpg', 25, 'Waterproof Premium Shoe. Free Size. Good Quality.'),
(5, 'Titan-Watch', 90, 'p11.jpg', 40, 'Premium Watch. Branded. Good Quality.'),
(6, 'Sunglass', 25, 'p21.jpg', 100, 'Premium Sunglass. Waterproof. Good Quality.'),
(7, 'Cookware-Set', 50, 'p12.jpg', 30, 'Premium Non-stick Cookware Sets. Good Quality.'),
(8, 'Bed-Sheet', 23, 'p22.jpg', 500, 'Premium bed sheet. Good Quality. Pure Cotton.'),
(9, 'Casual-Shirt', 20, 'p16.jpg', 300, 'Branded. XXL Size. Good Quality.'),
(10, 'Bag', 60, 'p25.jpg', 200, 'Branded. Premium Bag. Good Quality.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'ardent2023', 'ardent123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `ID` int(10) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ordered',
  `Delivery_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`ID`, `customer_name`, `customer_mail`, `customer_address`, `product_name`, `product_price`, `product_image`, `status`, `Delivery_Date`) VALUES
(1, 'Debajyoti Talukder', 'XYZ@gmail.com', 'West Bengal, India', 'T-Shirt', 30, 'user.jpg', 'ordered', '2023-05-05'),
(2, 'Debajyoti Talukder', 'XYZ@gmail.com', 'West Bengal, India', 'Titan-Watch', 90, 'p11.jpg', 'ordered', '2023-05-05'),
(3, 'Ardent Computech', 'ardent@XYZ.com', 'West Bengal, India', 'Sketchers', 55, 'p32.jpg', 'ordered', '2023-05-05'),
(4, 'Debajyoti Talukder', 'XYZ@gmail.com', 'West Bengal, India', 'Sunglass', 25, 'p21.jpg', 'ordered', '2023-05-05'),
(5, 'Debajyoti Talukder', 'XYZ@gmail.com', 'West Bengal, India', 'Watch', 80, 'p30.jpg', 'ordered', '2023-05-06'),
(6, 'Debajyoti Talukder', 'XYZ@gmail.com', 'West Bengal, India', 'Bag', 60, 'p25.jpg', 'ordered', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_mail` varchar(30) NOT NULL,
  `customer_phone` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `customer_name`, `customer_mail`, `customer_phone`, `username`, `password`) VALUES
(1, 'Debajyoti Talukder', 'XYZ@gmail.com', 123456789, 'debajyoti2001', 'debajyoti123'),
(2, 'Ardent Computech', 'ardent@gmail.com', 123456789, 'ardent2023', 'ardent123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
