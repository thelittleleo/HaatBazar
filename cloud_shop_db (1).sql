-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 07:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_settings_table`
--

CREATE TABLE `add_settings_table` (
  `add_id` int(2) NOT NULL,
  `add_name` varchar(50) NOT NULL,
  `add_cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_settings_table`
--

INSERT INTO `add_settings_table` (`add_id`, `add_name`, `add_cost`) VALUES
(1, 'Front Page Large ', '1000'),
(2, 'Front Page 2nd Large', '900'),
(3, 'Front page Small', '500');

-- --------------------------------------------------------

--
-- Table structure for table `add_table`
--

CREATE TABLE `add_table` (
  `add_request_id` int(4) NOT NULL,
  `add_id` int(4) NOT NULL,
  `add_cost` varchar(4) NOT NULL,
  `add_start_date` varchar(50) NOT NULL,
  `add_end_date` varchar(50) NOT NULL,
  `add_shop_id` int(4) NOT NULL,
  `add_customer_id` int(4) NOT NULL,
  `add_image` varchar(100) NOT NULL,
  `add_title` varchar(150) NOT NULL,
  `add_ac` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_table`
--

INSERT INTO `add_table` (`add_request_id`, `add_id`, `add_cost`, `add_start_date`, `add_end_date`, `add_shop_id`, `add_customer_id`, `add_image`, `add_title`, `add_ac`) VALUES
(1, 1, '1000', '2018-08-28', '2018-08-30', 1, 4, 'resized_26951819_1547610648649253_8852792112690232651_o.jpg', '50% sale is going on at uganda', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(2) NOT NULL,
  `admin_mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_mobile`) VALUES
(1, '01710684220');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(10) NOT NULL,
  `customer_mobile` varchar(15) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_age` int(3) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_sex` varchar(10) NOT NULL,
  `customer_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_mobile`, `customer_name`, `customer_age`, `customer_city`, `customer_address`, `customer_sex`, `customer_image`) VALUES
(4, '01921533945', 'Abdul Malek Mia', 41, 'Dhaka', 'Savar, jahangirnagar', 'Male', 'resized_27067867_917648061720287_4781294666689376504_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `login_id` int(10) NOT NULL,
  `login_mobile` varchar(15) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `login_mobile`, `login_password`, `login_type`) VALUES
(2, '01710684220', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, '01921533945', '81dc9bdb52d04dc20036dbd8313ed055', 'customer'),
(4, '01621117395', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `offer_table`
--

CREATE TABLE `offer_table` (
  `offer_id` int(10) NOT NULL,
  `offer_shop_id` int(10) NOT NULL,
  `offer_product_id` int(10) NOT NULL,
  `offer_details` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_table`
--

INSERT INTO `offer_table` (`offer_id`, `offer_shop_id`, `offer_product_id`, `offer_details`) VALUES
(1, 1, 2, 12),
(2, 1, 2, 13),
(3, 1, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_pack_size` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_place` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_shop_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `product_brand`, `product_pack_size`, `product_image`, `product_price`, `product_place`, `product_type`, `product_quantity`, `product_shop_id`) VALUES
(2, 'Dal', 'Miniket', '10 Kg', 'resized_thumb-1920-2688.jpg', '450', 'Godown', 'Groceries', 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_table`
--

CREATE TABLE `shop_table` (
  `shop_id` int(10) NOT NULL,
  `shop_name` varchar(150) NOT NULL,
  `shop_brand` varchar(150) NOT NULL,
  `shop_phone` varchar(30) NOT NULL,
  `shop_area` varchar(100) NOT NULL,
  `shop_type` varchar(50) NOT NULL,
  `shop_customer_id` int(10) NOT NULL,
  `shop_logo` varchar(150) NOT NULL,
  `shop_image` varchar(150) NOT NULL,
  `shop_start_date` varchar(30) NOT NULL,
  `shop_status` varchar(10) NOT NULL,
  `shop_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_table`
--

INSERT INTO `shop_table` (`shop_id`, `shop_name`, `shop_brand`, `shop_phone`, `shop_area`, `shop_type`, `shop_customer_id`, `shop_logo`, `shop_image`, `shop_start_date`, `shop_status`, `shop_message`) VALUES
(1, 'Sathi Food Corner', 'Uniliver', '1234567', 'Savar', 'Foods', 4, '', '', '', '', 'Your subscription period is almost over! Please renew!');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_table`
--

CREATE TABLE `subscription_table` (
  `subscription_id` int(10) NOT NULL,
  `subscription_shop_id` int(10) NOT NULL,
  `subscription_cost` varchar(50) NOT NULL,
  `subscription_date` varchar(50) NOT NULL,
  `subscription_period` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_table`
--

INSERT INTO `subscription_table` (`subscription_id`, `subscription_shop_id`, `subscription_cost`, `subscription_date`, `subscription_period`) VALUES
(1, 1, '990', '19/07/2018', '2 months'),
(2, 1, '200', 'September 3, 2018', '3 months'),
(3, 1, '1000', 'September 3, 2018', '4 months'),
(4, 1, '200', 'September 3, 2018', '1 month');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(7) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_age` int(3) NOT NULL,
  `user_sex` varchar(10) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_mobile`, `user_name`, `user_city`, `user_age`, `user_sex`, `user_address`, `user_image`) VALUES
(1, '01710684220', 'Sagar', 'Dhaka', 23, 'Male', 'Savar', ''),
(2, '01621117395', 'Purnima Das Pinky', 'Chittagong', 23, 'Female', 'Dhanmondi 27,Dhaka', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_settings_table`
--
ALTER TABLE `add_settings_table`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `add_table`
--
ALTER TABLE `add_table`
  ADD PRIMARY KEY (`add_request_id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_mobile` (`admin_mobile`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_mobile` (`customer_mobile`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_mobile` (`login_mobile`);

--
-- Indexes for table `offer_table`
--
ALTER TABLE `offer_table`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop_table`
--
ALTER TABLE `shop_table`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `subscription_table`
--
ALTER TABLE `subscription_table`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_settings_table`
--
ALTER TABLE `add_settings_table`
  MODIFY `add_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_table`
--
ALTER TABLE `add_table`
  MODIFY `add_request_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer_table`
--
ALTER TABLE `offer_table`
  MODIFY `offer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_table`
--
ALTER TABLE `shop_table`
  MODIFY `shop_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription_table`
--
ALTER TABLE `subscription_table`
  MODIFY `subscription_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
