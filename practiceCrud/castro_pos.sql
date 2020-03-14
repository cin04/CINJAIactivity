-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2019 at 01:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_t`
--

CREATE TABLE `customer_t` (
  `Customer_Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `PostalCode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_t`
--

INSERT INTO `customer_t` (`Customer_Id`, `Name`, `Address`, `City`, `State`, `PostalCode`) VALUES
(1, 'Contemporary Casuals', '1355 Hines Blvd', 'Gainesville', 'FL', '32601-2871'),
(2, 'Value Furniture', '15145 S.W. 17th St.', 'Piano', 'TX', '75094-7743'),
(3, 'Home Furnishing', '1900 Allard Ave.', 'Albany', 'NY', '12209-1125'),
(4, 'Eastern Furniture', '1925 Beltline Rd.', 'Carteret', 'NJ', '07008-3188'),
(5, 'Impressions', '5585 Westcott Ct.', 'Sacramento', 'CA', '94206-4056'),
(6, 'Furniture Gallery', '325 Flatiron Dr.', 'Boulder', 'CO', '80154-4432'),
(7, 'Period Furniture', '394 Rainbow Dr.', 'Seatle', 'WA', '97954-5589'),
(8, 'California Classics', '816 Peach Rd.', 'Santa Clara', 'CA', '96915-7754'),
(9, 'M and H Casual Furniture', '3709 First Street', 'Clearwater', 'FL', '34620-2314'),
(10, 'Seminole Interiors', '2400 Rocky Point  Dr. ', 'Seminole', 'FL', '34636-4423'),
(11, 'American Euro Lifestyles', '2424 Missouri Ave', 'Prospect Park', 'NJ', '07508-5621'),
(12, 'Battle Creek Furniture', '345 Capitol Ave. Carlisle', 'Battle Creek', 'MI', '49015-3401'),
(13, 'Heritage Furnishing', '66789 College Ave', 'Carlisle', 'PA', '17013-8834'),
(14, 'Kaneohe Homes', '112 Kiowai St.', 'Kaneohe', 'HI', '96744-2537'),
(15, 'Mountain Scenes', '4132 Main Street', 'Ogden', 'UT', '84403-4432'),
(16, 'Cindy Castro', 'Molave Street', 'Davao', 'DDS', '8000'),
(17, 'Jai', 'Gem Village', 'Davao', 'Del Sur', '8000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_view`
-- (See below for the actual view)
--
CREATE TABLE `data_view` (
`Order_ID` int(11)
,`Name` varchar(25)
,`Description` varchar(25)
,`Quantity` int(11)
,`StandardPrice` int(11)
,`OrderDate` date
,`Image` varchar(225)
);

-- --------------------------------------------------------

--
-- Table structure for table `orderline_t`
--

CREATE TABLE `orderline_t` (
  `Order_ID` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderline_t`
--

INSERT INTO `orderline_t` (`Order_ID`, `Product_Id`, `Quantity`) VALUES
(1001, 1, 2),
(1001, 2, 2),
(1001, 4, 1),
(1002, 3, 5),
(1003, 3, 3),
(1004, 6, 2),
(1004, 8, 2),
(1005, 4, 4),
(1006, 4, 1),
(1006, 5, 2),
(1006, 7, 2),
(1007, 1, 3),
(1007, 2, 2),
(1008, 3, 3),
(1008, 8, 3),
(1009, 4, 2),
(1009, 7, 3),
(1010, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_t`
--

CREATE TABLE `order_t` (
  `Order_ID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `Customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_t`
--

INSERT INTO `order_t` (`Order_ID`, `OrderDate`, `Customer_ID`) VALUES
(1001, '2010-10-21', 1),
(1002, '2010-10-21', 8),
(1003, '2010-10-22', 15),
(1004, '2010-10-22', 5),
(1005, '2010-10-24', 3),
(1006, '2010-10-24', 2),
(1007, '2010-10-27', 11),
(1008, '2010-10-30', 12),
(1009, '2010-11-05', 4),
(1010, '2010-11-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_t`
--

CREATE TABLE `product_t` (
  `Product_Id` int(11) NOT NULL,
  `Description` varchar(25) NOT NULL,
  `Finish` varchar(25) NOT NULL,
  `StandardPrice` int(11) NOT NULL,
  `Line_Id` int(11) NOT NULL,
  `Image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_t`
--

INSERT INTO `product_t` (`Product_Id`, `Description`, `Finish`, `StandardPrice`, `Line_Id`, `Image`) VALUES
(1, 'End Table', 'Cherry', 175, 1, 'endtable.jpeg'),
(2, 'Coffee Table', 'Natural Ash', 200, 2, 'coffetable.jpg'),
(3, 'Computer Desk', 'Natural Ask', 375, 2, 'Computer Desk.jpg'),
(4, 'Entertainment Center', 'Natural Maple', 640, 3, 'Entertainment Center.jpeg'),
(5, 'Writers Desk', 'Cherry', 325, 1, 'Writers Desk.jpg'),
(6, 'Drawers Desk', 'White Ash', 750, 2, 'Drawers Desk.jpg'),
(7, 'Dining Table', 'Natural Ash', 800, 2, 'Dining Table.jpeg'),
(8, 'Computer Desk', 'Walnut', 500, 3, 'Computer Desk.jpg'),
(9, 'Living Room Table', 'Walnut', 550, 1, 'livingroom.jpeg');

-- --------------------------------------------------------

--
-- Structure for view `data_view`
--
DROP TABLE IF EXISTS `data_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_view`  AS  select `o`.`Order_ID` AS `Order_ID`,`c`.`Name` AS `Name`,`p`.`Description` AS `Description`,`ol`.`Quantity` AS `Quantity`,`p`.`StandardPrice` AS `StandardPrice`,`o`.`OrderDate` AS `OrderDate`,`p`.`Image` AS `Image` from (((`order_t` `o` join `customer_t` `c` on(`o`.`Customer_ID` = `c`.`Customer_Id`)) join `orderline_t` `ol` on(`o`.`Order_ID` = `ol`.`Order_ID`)) join `product_t` `p` on(`ol`.`Product_Id` = `p`.`Product_Id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_t`
--
ALTER TABLE `customer_t`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `orderline_t`
--
ALTER TABLE `orderline_t`
  ADD PRIMARY KEY (`Order_ID`,`Product_Id`);

--
-- Indexes for table `order_t`
--
ALTER TABLE `order_t`
  ADD PRIMARY KEY (`Order_ID`),
  ADD UNIQUE KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `product_t`
--
ALTER TABLE `product_t`
  ADD PRIMARY KEY (`Product_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_t`
--
ALTER TABLE `customer_t`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_t`
--
ALTER TABLE `order_t`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `product_t`
--
ALTER TABLE `product_t`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
