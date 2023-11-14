SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `admin` (
  `personid` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
  `personid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `deliveryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `customer` (
  `personid` int(11) NOT NULL,
  `paymentPreference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `delivery` (
  `deliveryid` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  `deliveryStatus` varchar(50) NOT NULL DEFAULT 'Order Placed',
  `deliveryDate` date DEFAULT current_timestamp(),
  `totalCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--


-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `personid` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `accesslevel` varchar(15) NOT NULL,
  `accountpassword` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phoneno` bigint(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productStock` int(11) NOT NULL,
  `productDescription` varchar(200) NOT NULL,
  `productCap` int(11) NOT NULL,
  `productPhoto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`productID`,`productName`,`productPrice`,`productStock`,`productDescription`,`productCap`,`productPhoto`)
VALUES (1, "T-Shirt", 100000,300,"Men's Nike Sportswear Club T-Shirt",5,"https://m.media-amazon.com/images/I/710EYMTMSSL._AC_SY879_.jpg");

INSERT INTO `product` (`productID`,`productName`,`productPrice`,`productStock`,`productDescription`,`productCap`,`productPhoto`)
VALUES (2,"Iphone 13",120000,200,"Iphone 13, 256gb storage",3,"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=80&.v=1629842667000");

INSERT INTO `product` (`productID`,`productName`,`productPrice`,`productStock`,`productDescription`,`productCap`,`productPhoto`)
VALUES (3,"Fart Spray",500,100,"Play fart pranks for fun",1,"https://m.media-amazon.com/images/I/71jwVGVj+WL._SL1500_.jpg");

INSERT INTO `product` (`productID`,`productName`,`productPrice`,`productStock`,`productDescription`,`productCap`,`productPhoto`)
VALUES (4,"Nike Shoes",1000,100,"Nike Men's Air Force 1 Low SP Undercover White/White-Sail-White",1,"https://m.media-amazon.com/images/I/51rO+y541FL._AC_SX695_.jpg");

INSERT INTO `product` (`productID`,`productName`,`productPrice`,`productStock`,`productDescription`,`productCap`,`productPhoto`)
VALUES (5,"Amazon Basics 4K LED TV",25000,250,"4K Ultra HD Smart LED Fire TV",1,"https://m.media-amazon.com/images/I/71AqQyCMmeL._SL1240_.jpg");

-- Indexes for table `admin`

ALTER TABLE `admin`
  ADD PRIMARY KEY (`personid`);


-- Indexes for table `cart`
ALTER TABLE `cart`
  ADD PRIMARY KEY (`personid`,`productid`,`deliveryid`);


-- Indexes for table `customer`

ALTER TABLE `customer`
  ADD PRIMARY KEY (`personid`);


-- Indexes for table `delivery`

ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliveryid`);


-- Indexes for table `persons`

ALTER TABLE `persons`
  ADD PRIMARY KEY (`personid`),
  ADD UNIQUE KEY `email` (`email`);

-- Indexes for table `product`
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);


-- AUTO_INCREMENT for table `delivery`
ALTER TABLE `delivery`
  MODIFY `deliveryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


-- AUTO_INCREMENT for table `persons`
ALTER TABLE `persons`
  MODIFY `personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;
