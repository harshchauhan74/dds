-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 08:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `updationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `phonenumber` char(10) DEFAULT NULL,
  `emailid` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`, `updationdate`, `phonenumber`, `emailid`) VALUES
(4, 'harsh', '123', '2025-02-03 10:04:21', '10000', 'h@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `bookingid` int(11) NOT NULL,
  `packageid` int(11) DEFAULT NULL,
  `useremail` varchar(100) DEFAULT NULL,
  `fromdate` varchar(100) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `cancelledby` varchar(100) DEFAULT NULL,
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`bookingid`, `packageid`, `useremail`, `fromdate`, `comment`, `regdate`, `status`, `cancelledby`, `updationdate`) VALUES
(5, 4, 'harsh@gmail.com', '2025-01-17', 'sqs', '2025-01-31 10:08:07', 2, 'u', '2025-02-03 09:16:19'),
(9, 5, 'harsh@gmail.com', '2025-02-12', 'vdvd', '2025-02-04 09:40:12', 2, 'u', '2025-02-04 09:40:34'),
(10, 5, 'harsh@gmail.com', '0354-05-06', '53354', '2025-02-06 08:44:54', 2, 'u', '2025-02-06 08:45:02'),
(11, 4, 'harsh@gmail.com', '2025-02-14', '53354', '2025-02-14 09:41:23', 1, NULL, '2025-02-15 09:25:05'),
(14, 6, 'harsh@gmail.com', '2025-04-15', 'book ma trip', '2025-02-18 09:37:23', 1, NULL, '2025-03-04 09:56:47'),
(15, 13, 'jay@gmail.com', '2025-04-10', 'book my package', '2025-02-19 06:51:37', 1, NULL, '2025-02-19 07:59:15'),
(16, 9, 'jay@gmail.com', '2025-02-21', 'gfg', '2025-02-19 07:58:45', 0, NULL, NULL),
(17, 13, 'zuber123@gmail.com', '2025-03-14', 'koi bhi takleef pdi toh mooh dod dunga', '2025-03-04 08:20:34', 1, NULL, '2025-03-04 08:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `phonenumber` char(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `postingdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `fullname`, `emailid`, `phonenumber`, `subject`, `description`, `postingdate`, `status`) VALUES
(6, 'harsh', 'harsh12@gmail.com', '6598324170', 'login', 'not login in your website', '2025-02-19 06:54:35', NULL),
(20, 'harsh', 'harsh@gmail.com', '9312563214', 'gb', 'dfg', '2025-02-19 07:54:11', NULL),
(21, 'farman', 'farma12@gmail.com', '2536459852', 'booking', 'not bokking package', '2025-03-04 09:49:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `issue` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `postingdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `adminremark` varchar(100) DEFAULT NULL,
  `adminremarkdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `emailid`, `issue`, `description`, `postingdate`, `adminremark`, `adminremarkdate`) VALUES
(5, 'jay@gmail.com', 'Refund', 'refund me', '2025-02-19 06:50:39', NULL, NULL),
(8, 'harsh@gmail.com', 'Cancellation', '--', '2025-03-04 09:52:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `packageid` int(11) NOT NULL,
  `packagename` varchar(200) DEFAULT NULL,
  `packagetype` varchar(150) DEFAULT NULL,
  `packagelocation` varchar(100) DEFAULT NULL,
  `packageprice` int(11) DEFAULT NULL,
  `packagefeatures` varchar(255) DEFAULT NULL,
  `packagedetail` varchar(255) DEFAULT NULL,
  `packageimage` varchar(100) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`packageid`, `packagename`, `packagetype`, `packagelocation`, `packageprice`, `packagefeatures`, `packagedetail`, `packageimage`, `creationdate`, `updationdate`) VALUES
(4, 'Bhutan', 'Single', 'Thimphu-Paro-Punakha', 10000, '7 day tour,  Free Wi-fi, Free Breakfast, Free Pickup and drop facility ', 'A thimphu-paro-punakha tour offers a perfect introduction to Bhutan\'s rich cuture, stunning landscapes, and iconic landmarks. This tour blends history, spirituality, and breathtaking acenery, making it a perfect way to expeirience Bhutan\'s charm.', 'BHUTAN-THIMPU-PARO-PUNAKHA-TOUR-6N-7D.jpeg', '2025-01-25 10:14:16', '2025-03-21 06:57:27'),
(5, 'Soulmate Special Bali - 7 Nights', 'Couple', 'Indonesia(Bali)', 43250, '8 day tour, Free Pickup and drop facility, Free Wi-fi , Free professional guide', 'Airport transfers by private car | Popular Sightseeing included | Suitable for Couple and budget travelers', 'bali.jpg', '2025-01-25 10:15:39', '2025-03-21 06:58:53'),
(6, 'Lakshadweep', 'Family', 'Lakshadweep', 43500, '15 day tour, scuba diving, boat tours', 'Lakshadweep tour packages include crusies, island visits, and adventure activities. ', 'Lakshadweep.jpg', '2025-02-14 07:13:17', '2025-03-21 06:59:18'),
(7, 'Gangtok & Darjeeling Holiday (Without Flights)', 'Family', 'Sikkim', 25000, '6 day tour, Free Wi-fi, Free pickup and drop facility', 'Ideal tour for Family | Sightseeing in Gangtok and Darjeeling | Full day excursion to idyllic Changu Lake | Visit to Ghoom Monastery', 'Darjeeling.jpg', '2025-02-18 09:11:34', '2025-03-21 06:59:51'),
(9, 'Short Trip To Dubai', 'Single', 'Dubai', 59500, '5 day tour, Free pick up and drop facility, Free Wi-fi, Free breakfast', 'A Holiday Package for the entire family.', 'dubai.jpg', '2025-02-18 09:14:41', '2025-03-21 07:00:29'),
(13, 'Kerala', 'Family', 'Kerala', 20000, '10 day tour, Free Wi-fi, Free pick up and drop facility.', 'Visit Matupetty Dam, tea plantation and a spice garden | View sunset in Kanyakumari | AC Car at disposal for 2hrs extra (once per city)', 'Kerala.jpg', '2025-02-18 09:17:46', '2025-03-21 07:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(10) DEFAULT NULL,
  `phonenumber` char(10) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `fullname`, `phonenumber`, `emailid`, `password`, `regdate`, `updationdate`) VALUES
(1006, 'jay', '9312563214', 'jay@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-01-10 08:35:48', '2025-02-18 09:38:04'),
(1010, 'HARSH', '8799380770', 'harsh@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-01-18 10:34:19', '2025-03-21 06:28:44'),
(1011, 'Zuber', '8799380770', 'zuber123@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-03-04 08:18:35', '2025-03-04 08:22:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
