-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 07:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL,
  `cost_of_item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `cart`
--
DELIMITER $$
CREATE TRIGGER `delete` BEFORE DELETE ON `cart` FOR EACH ROW BEGIN
	insert into purchase(pcid,ppid,no_of_items,cost_of_items,date_time) VALUES(old.cid,old.pid,old.no_of_items,old.no_of_items*old.cost_of_item,now());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert1` AFTER INSERT ON `cart` FOR EACH ROW BEGIN
	update products set no_of_items=no_of_items-1 where ID=new.pid; 
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update1` AFTER UPDATE ON `cart` FOR EACH ROW BEGIN
	update products set no_of_items=no_of_items-1 where ID=old.pid;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `Time_of_join` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `user`, `password`, `phone_no`, `Time_of_join`) VALUES
(1, 'Dharani', 'Ds', 1234567890, '2018-02-28 09:39:37'),
(2, 'DS', 'Dharani', 9876543211, '2018-02-28 03:24:12'),
(3, 'qwerty', 'qwerty', 9876543212, '2018-02-28 02:56:59'),
(4, 'qwerty123', 'uyfkl', 76, '2018-02-28 02:09:40'),
(6, 'wertyu', '123', 9876543210, '2018-02-28 16:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_username` varchar(20) NOT NULL,
  `e_password` varchar(20) NOT NULL,
  `e_phone_no` bigint(10) NOT NULL,
  `e_date_join` datetime NOT NULL,
  `eid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_username`, `e_password`, `e_phone_no`, `e_date_join`, `eid`) VALUES
('Stupid', 'sss', 8765432190, '2018-02-28 11:11:00', 1),
('ram', 'pingu', 9090807060, '2018-03-01 02:05:54', 2);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(10) NOT NULL,
  `catogery` varchar(20) NOT NULL,
  `Item_name` varchar(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `catogery`, `Item_name`, `cost`, `no_of_items`) VALUES
(1, 'Households', 'Air Freshener', 90, 57),
(2, 'Kitchen', 'Sugar', 9, 37),
(4, 'ihiof', 'erfrweg', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pcid` int(10) NOT NULL,
  `ppid` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL,
  `cost_of_items` int(10) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pcid`, `ppid`, `no_of_items`, `cost_of_items`, `date_time`) VALUES
(1, 4, 1, 40, '2018-02-27 15:00:02'),
(1, 2, 1, 40, '2018-02-27 15:00:02'),
(1, 4, 3, 120, '2018-02-27 15:04:48'),
(1, 1, 1, 50, '2018-02-27 15:04:48'),
(1, 2, 1, 40, '2018-02-27 15:04:48'),
(1, 1, 2, 100, '2018-02-27 18:42:38'),
(1, 2, 1, 40, '2018-02-27 18:42:39'),
(2, 1, 1, 50, '2018-02-27 18:47:42'),
(2, 2, 1, 40, '2018-02-27 18:47:42'),
(2, 4, 2, 80, '2018-02-27 19:23:21'),
(1, 4, 7, 280, '2018-02-28 01:54:01'),
(1, 2, 2, 18, '2018-02-28 16:45:24'),
(1, 2, 2, 18, '2018-02-28 16:51:01'),
(1, 2, 2, 18, '2018-02-28 16:51:01'),
(1, 2, 1, 9, '2018-02-28 16:51:39'),
(1, 2, 1, 9, '2018-02-28 16:51:39'),
(1, 2, 5, 45, '2018-02-28 17:16:47'),
(1, 1, 1, 90, '2018-02-28 18:49:57'),
(1, 4, 1, 9, '2018-02-28 19:18:02'),
(1, 1, 2, 180, '2018-02-28 19:19:03'),
(1, 2, 1, 9, '2018-02-28 19:19:03'),
(1, 1, 1, 90, '2018-02-28 19:19:49'),
(1, 2, 1, 9, '2018-02-28 19:19:49'),
(1, 1, 5, 450, '2018-02-28 22:10:12'),
(1, 2, 7, 63, '2018-02-28 22:10:12'),
(1, 4, 5, 45, '2018-02-28 22:10:12'),
(1, 1, 1, 90, '2018-03-01 11:13:07'),
(1, 2, 1, 9, '2018-03-01 11:13:07'),
(1, 1, 2, 180, '2018-03-01 11:19:58'),
(1, 2, 5, 45, '2018-03-01 11:19:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_references_cart_customer` (`cid`),
  ADD KEY `pid` (`pid`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `e_username` (`e_username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Item_name` (`Item_name`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `fk_references_purchase_customer` (`pcid`),
  ADD KEY `fk_references_purchase_products` (`ppid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_references_cart_customer` FOREIGN KEY (`cid`) REFERENCES `customer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_references_cart_products` FOREIGN KEY (`pid`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_references_purchase_customer` FOREIGN KEY (`pcid`) REFERENCES `customer` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_references_purchase_products` FOREIGN KEY (`ppid`) REFERENCES `products` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
