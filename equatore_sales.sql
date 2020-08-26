-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 08:21 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-6+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `asset_cat` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`transaction_id`, `date`, `name`, `amount`, `supplier`, `asset_cat`, `remarks`) VALUES
(18, '11/2/2017', 'cash', '1000000', 'Keneth', 'current', 'Starter Capital'),
(19, '11/2/2017', 'Building', '5000000', 'Keneth', 'long', 'For running the bussinnes'),
(20, '11/2/2017', 'Deposit', '200000', 'Keneth', 'other', 'deposited in Ks bank');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`transaction_id`, `date`, `name`, `invoice`, `amount`, `remarks`, `balance`) VALUES
(1, '11/01/2017', '', 'IN-620333', '500', 'good', -500),
(2, '11/01/2017', 'keneth', 'IN-03326329', '500', 'Pen', -500),
(3, '11/01/2017', '', 'IN-3273788', '500', 'Pen', -1000),
(4, '11/01/2017', '', 'IN-22085', '500', 'Pen', -1500),
(5, '11/01/2017', '', 'IN-833422', '500', 'Pen', -500),
(6, '11/01/2017', 'keneth', 'IN-233320', '500', 'Pen', -500);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `pod_name` varchar(60) DEFAULT NULL,
  `price` varchar(76) DEFAULT NULL,
  `qty` varchar(60) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL,
  `amount` varchar(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`, `pod_name`, `price`, `qty`, `units`, `amount`) VALUES
(1, 'Mandela Shaban', 'Banda', '0754307471', '2', 'pen', '10/18/2017', 'Nice clear', NULL, NULL, NULL, NULL, NULL),
(2, 'joan', 'Kireka', '0786031092', '1000', 'Pen', '11/18/2017', 'For personal use', NULL, NULL, NULL, NULL, NULL),
(3, 'Juma', 'Sabir', '0754307983', '700', 'Books', '12/18/2017', 'For personel use', NULL, NULL, NULL, NULL, NULL),
(4, 'Peter', 'Ronny', '0754307083', '700000', 'Laptop', '11/1/2017', 'Ist an i5', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equity`
--

CREATE TABLE `equity` (
  `equity_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equity`
--

INSERT INTO `equity` (`equity_id`, `name`, `amount`, `remarks`, `date`) VALUES
(58, 'John', '2000000', '', '11/2/2017');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `item`, `amount`, `remarks`, `date`) VALUES
(59, 'Advertising', '15,000', 'For the products', '11/2/2017'),
(60, 'Printing and stationery', '8,700', 'in the office', '11/2/2017'),
(61, 'Rent for premises', '75000', 'Its for the two rooms', '11/2/2017');

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE `liabilities` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `liab_cat` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liabilities`
--

INSERT INTO `liabilities` (`transaction_id`, `date`, `name`, `amount`, `supplier`, `liab_cat`, `remarks`) VALUES
(18, '11/2/2017', 'Sallary payable', '200000', '', 'current', 'Paid to peter next month'),
(19, '11/2/2017', 'Account payable(seeds)', '20000', '', 'current', 'Will be paid next month keneth'),
(20, '11/2/2017', 'Comon Stock', '200000', '', 'current', 'For running the buzo'),
(21, '11/2/2017', 'Car', '7000000', '', 'long', 'Paid in next two years');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `units` varchar(15) DEFAULT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `units`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(1, NULL, 'Pen', 'Pen', 'black ', '0.0', '300', '500', '200', 'MN seeds', 0, 1, 2, 'Nov-01-2017', 'Jan-12-2017'),
(2, NULL, 'Books', 'Books', 'Text books', '0.0', '500', '700', '200', 'Keneth', 0, 1, 80, 'Nov-01-2018', 'Oct-12-2017'),
(3, NULL, 'Laptop Hp', 'Laptop', ' Ist an i5', '0.0', '500000', '700000', '200000', 'Ricky', 0, 2, 30, 'Nov-01-2019', 'Jan-12-2017'),
(4, 'kg', 'seeds A ', 'Seeds A', ' For suffer', '0.0', '200', '500', '300', 'Keneth', 0, 2, 40, 'Nov-05-2019', 'Nov-4-2017');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`transaction_id`, `invoice_number`, `date`, `suplier`, `remarks`) VALUES
(1, 'RS-28273023 	', '11/1/2017', 'Keneth', 'Book'),
(2, 'RS-28273023', '', 'Keneth', 'Book'),
(3, 'IN-03326329', '11/12/2017', 'Keneth', 'Pen'),
(4, 'Tax payable', '11/2/2017', 'Keneth', 'Will be paid next month');

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases_item`
--

INSERT INTO `purchases_item` (`id`, `name`, `qty`, `cost`, `invoice`) VALUES
(1, 'Pen', 1, '500', ''),
(2, 'Pen', 12, '6000', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`, `customer_name`) VALUES
(19, 'RS-3023627', '1', '1', '500', '200', 'Pen', 'Pen', 'black', '500', '0.0', '11/01/17', NULL),
(20, 'RS-23282220', '1', '1', '500', '200', 'Pen', 'Pen', 'black', '500', '0.0', '11/01/17', NULL),
(21, 'RS-23282220', '1', '1', '500', '200', 'Pen', 'Pen', 'black', '500', '0.0', '11/01/17', NULL),
(22, 'RS-23282220', '2', '1', '700', '200', 'Books', 'Books', 'Text books', '700', '0.0', '11/01/17', NULL),
(23, 'RS-85332202', '2', '1', '700', '200', 'Books', 'Books', 'Text books', '700', '0.0', '11/01/17', NULL),
(24, 'RS-202262', '3', '2', '1400000', '200000', 'Laptop Hp', 'Laptop', ' Ist an i5', '700000', '0.0', '11/01/17', NULL),
(25, 'RS-28273023', '2', '1', '700', '200', 'Books', 'Books', 'Text books', '700', '0.0', '11/01/17', NULL),
(26, 'RS-5462638', '2', '2', '1400', '200', 'Books', 'Books', 'Text books', '700', '0.0', '11/03/17', NULL),
(27, 'RS-7082295', '4', '1', '500', '300', 'seeds A ', 'Seeds A', ' For suffer', '500', '0.0', '11/05/17', NULL),
(28, 'RS-7082295', '4', '2', '1000', '300', 'seeds A ', 'Seeds A', ' For suffer', '500', '0.0', '11/05/17', NULL),
(29, 'RS-200520', '2', '1', '700', '200', 'Books', 'Books', 'Text books', '700', '0.0', '11/09/17', 'Mandela Shaban');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(1, 'Keneth', 'Kireka', '078603111', 'Eric', 'KS compny'),
(2, 'Ricky', 'Kampala', 'JOhn', '078603083', 'Its suplire sof laptop company'),
(3, 'MN seeds', 'Ruky Gulu', 'Ronny', '078603083', 'We give the best seeds');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'cashier', 'cashier', 'Cashier Pharmacy', 'Cashier'),
(3, 'admin', 'admin123', 'Administrator', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `equity`
--
ALTER TABLE `equity`
  ADD PRIMARY KEY (`equity_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `purchases_item`
--
ALTER TABLE `purchases_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `equity`
--
ALTER TABLE `equity`
  MODIFY `equity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `liabilities`
--
ALTER TABLE `liabilities`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchases_item`
--
ALTER TABLE `purchases_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
