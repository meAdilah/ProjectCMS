-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 06:08 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentoffcampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adsid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `adstitle` varchar(50) NOT NULL,
  `adscontent` varchar(300) NOT NULL,
  `adsdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adsid`, `username`, `adstitle`, `adscontent`, `adsdate`) VALUES
(5, 'danish', 'Minyak Dagu', '2 RM1', '2018-05-20'),
(6, 'danish', 'AYAM BAKAR', 'AYAM BAKAR RM5 SAHAJA!!!!', '2018-05-21'),
(7, 'danish', 'BILIK SEWA', 'BILIK UNTUK DISEWA AREA GAMBANG SAHAJA!!!!! AYUHHHHH APA TUNGGU LAGI??? SERTAI KAMI SEKARANG. WS SAYA MUAHKED', '2018-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `ref`, `date`, `title`, `description`) VALUES
(2, 'A10', '2018-05-21', 'EXAMINATION DELAY', 'DELAY TO 12/2/2019');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `dateofdonation` date NOT NULL,
  `totaldonation` varchar(255) NOT NULL,
  `receiptnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `identification`, `dateofdonation`, `totaldonation`, `receiptnum`) VALUES
(1, 'ALI BIN ABU', '2332477', '2018-05-01', '1000', 'A1212');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `evid` int(11) NOT NULL,
  `evdate` date NOT NULL,
  `evtitle` varchar(50) NOT NULL,
  `evvenue` varchar(50) NOT NULL,
  `evdesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`evid`, `evdate`, `evtitle`, `evvenue`, `evdesc`) VALUES
(2, '2018-05-31', 'PENGUMPULAN SAMPAH', 'BELAKANG ASRAMA', 'BARANGAN YANG BOLEH DIKITAR SEMULA SAHAJA. OLEH ITU,  JANGAN BAWAK SAMPAH');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `dateofusage` date NOT NULL,
  `totalusage` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `identification`, `dateofusage`, `totalusage`, `description`) VALUES
(1, 'WAN AHAMA', '1221', '2018-05-09', '350', 'For electricity bill');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `level`) VALUES
(8, 'ali', '$2y$10$PEOeW9y8kZxAitnTRoQRVOU8HhoFznXP.rHhHN0zMgXdOLbAjc6bm', 'muhddanishabdw@gmail.com', 3),
(11, 'danish', '$2y$10$fwxFu2NB.YZz9ybbeByMF.i75TiuKpYv9o09lRzq43QrVcCsRyy3O', 'alcatrazcc@yahoo.com', 2),
(13, 'shafee', '$2y$10$wjsVfHO9aVqrTWsfxAHQ8.RU/frVn3WzRJMo4Gv43LE7nDLSnk1s.', 'shafee@yahoo.com', 2),
(14, 'Roby', '$2y$10$zQT8J/jFNqXF46lYzUHgheHJ4D/H69LUeg3rOASR.G7YitqiMLmay', 'roby@gmail.com', 1),
(15, 'Ahmad', '$2y$10$LLc0b2OjGLoUE9YakhRexeK4dxZW.po31af9ucLt1AjsYmeaRdiL2', 'ahmad@gm.com', 1),
(16, 'bibi', 'bibi123', 'bibi@gmail.com', 3),
(17, 'rere', 'rere12', 'rere@gm.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `metricid` varchar(255) NOT NULL,
  `dateofpayment` date NOT NULL,
  `totalpayment` varchar(255) NOT NULL,
  `receiptnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `metricid`, `dateofpayment`, `totalpayment`, `receiptnum`) VALUES
(11, 'AA16178', '2018-05-07', '50', 'A346779'),
(12, 'CB16167', '2018-05-04', '50', 'A34443'),
(13, 'CB16169', '2018-05-05', '50', '123dsgsdv'),
(14, 'cc1534', '2018-05-05', '50', 'as23456');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `metricid` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `residing` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `name`, `metricid`, `phoneno`, `email`, `address`, `postcode`, `city`, `state`, `residing`, `status`) VALUES
(1, 'danish', 'MUHAMMAD DANISH BIN ABDUL WAHAB', 'CB16167', '0189000041', 'muhddanishabdw@gmail.com', 'Pahang, Malaysia', '25050', 'Kuantan', 'Sabah', 'Taman Gambang Damai', 'Approved'),
(4, 'shafee', 'SHAFEE APDAL', 'AA16178', '0180097761', 'shafee@yahoo.com', 'A-12, Lorong Alaf', '234000', 'Sepang', 'Perak', 'Taman Impian', 'Pending'),
(5, 'farah', 'FARAH', 'CB273732', '0198884484', 'farah@gmail.com', 'A-56 gambut', '450098', 'Kuantan', 'Sarawak', 'Taman Gambang Damai', 'Pending'),
(6, 'Roby', 'Robiatul', 'CB16169', '01117568115', 'roby@gmail.com', 'no 12, jln meme', '81000', 'Kuantan', 'Sabah', 'Gambang', 'Approved'),
(7, 'Ahmad', 'ahmad', 'cc1534', '098754321', 'ahmad@gm.com', 'jalan tar', '23450', 'Raub', 'Terengganu', 'Gambang damai', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adsid`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`evid`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `adsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `evid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
