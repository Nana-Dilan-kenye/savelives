-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 11:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login&signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userFullname` varchar(128) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userWanum` varchar(128) NOT NULL,
  `userBloodgroup` varchar(128) NOT NULL,
  `userWeight` varchar(128) NOT NULL,
  `userGender` varchar(128) NOT NULL,
  `userBirth` varchar(128) NOT NULL,
  `userRegion` varchar(128) NOT NULL,
  `userCity` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL,
  `userLastTran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFullname`, `userName`, `userEmail`, `userWanum`, `userBloodgroup`, `userWeight`, `userGender`, `userBirth`, `userRegion`, `userCity`, `userPwd`, `userLastTran`) VALUES
(6, 'Kenye Dilan Nana2', 'admin2', 'example1@gmail.com', '1234567890', 'O-', '12', 'male', '2022-02-05', 'Southwest', 'Buea', '$2y$10$9waYvokka5TShai1SnYfmOPvHqSM9SUkbIyl3.HumqmXU77Y87D1W', ''),
(7, 'Kenye Dilan Nana', 'admin1', 'example@gmail.com', '123456789', 'O+', '45', 'Male', '2019-11-04', 'NorthWest', 'Buea', '$2y$10$Ls3CC4vberIpu/OlYjLBsOSF5GEIw7ZevhdZnRUgk6m1y7oocog9i', ''),
(8, 'Nana Dilan', 'admin', 'nanadilan78@gmail.com', '673436870', 'A-', '60', 'Male', '2018-11-03', 'Littoral', 'Douala', '$2y$10$CnRwSgEssjSvTLFurE6K0On1R5JFcLHm1oyIM5Zyyd01pzXLqzvfy', ''),
(9, 'Mbappe Ken', 'admin12', 'example12@gmail.com', '24556635676', 'A+', '45', 'Male', '2023-02-07', 'East', 'Ebolowa', '$2y$10$8XyiIRhRgXmVRnZ06IWbeeMtGz9KIipzf3XPKY4KtQw5rkt9BjZ0e', ''),
(10, 'Miriam Ma', 'admin13', 'ETONDISONIA@GMAIL.COM', '6734368703', 'B-', '60', 'Female', '2018-09-07', 'West', 'Bafousam', '$2y$10$V.sAX9Ou2sl9W5y6KZzBCuiduw/hn2RF52reTZagXduHT6yJZdDXC', ''),
(11, 'Micah Anji', 'admin11', 'example22@gmail.com', '6734368705', 'O-', '60', 'Male', '2006-02-01', 'FarNorth', 'Maroua', '$2y$10$OTK6aBz6AKXe9ZBkrUBh9.XIOGTVCH.0IYqc6gh.yKwSaGmaAvfeG', ''),
(12, 'Daize Catherine', 'admin133', 'example33@gmail.com', '67343687033', 'B+', '60', 'Female', '2018-01-06', 'North', 'Garoua', '$2y$10$qU3xfBnv67AjPZHhSqpkc.6qXFWSejhwx6YkAJVnM8BToxyNgIBVi', ''),
(13, 'Njong Presley', 'admin14', 'example123@gmail.com', '67343687039', 'O+', '45', 'Male', '2008-11-03', 'SouthWest', 'Buea', '$2y$10$TnWWdCG1/3mG34OjxI0AZ.vG66RXn1T2YlarYpKGjYQcpUPVOSGYe', ''),
(14, 'Daize Cathy', 'admin212', 'example212@gmail.com', '6734368765', 'O-', '60', 'Female', '2019-02-03', 'NorthWest', 'Bamenda', '$2y$10$VzNh2qTnInpoVL4IJSqBBuSywelC8gnxzVHZazsl7mqKSTPbVueRi', ''),
(15, 'Clinton charles', 'admin1233', 'example222@gmail.com', '12345678903', 'O-', '45', 'Male', '2019-12-04', 'NorthWest', 'Bamenda', '$2y$10$brIoAPigP/WYiQf9cbzgJOH1OsQtWiAPctjE/n/9WTy.owh3gXtta', ''),
(16, 'Dilan Kenye', 'admin5', 'kenyedil34@gmail.com', '678257494', 'O-', '54', 'Male', '2001-02-02', 'SouthWest', 'Buea', '$2y$10$DbfZB5Ism.VdnZuCNOILyOqIXgf8Ws8bAw.5HB8Xjs5xnX.etwssW', '2021-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
