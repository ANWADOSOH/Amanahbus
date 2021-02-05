-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 04:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amanahbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUS_ID` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `RIGIS_NUMBER` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `COLOR` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `BRAND` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `P_BUS` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `B_num` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_ID`, `RIGIS_NUMBER`, `COLOR`, `BRAND`, `P_BUS`, `B_num`) VALUES
('01', '123 ยะลา', 'เเดง เหลือง', '้honda', '39767603720201027_021712.jpg', 27),
('02', '350 ปัตตานี', 'ขาว เทา', 'toyota', '51883779520201027_021653.jpg', 30),
('03', '621 กรุงเทพ', 'เเดง เหลือง', 'ืnissan', '151528950520201029_072928.jpg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `COS_ID` int(50) NOT NULL,
  `STD_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `MONNY` int(50) DEFAULT NULL,
  `STATUS` varchar(10) COLLATE utf8mb4_thai_520_w2 DEFAULT 'ชำระเเล้ว',
  `STDY_YR` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `mon` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `C_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`COS_ID`, `STD_ID`, `MONNY`, `STATUS`, `STDY_YR`, `mon`, `C_date`) VALUES
(6, '004', 200, 'ชำระเเล้ว', '2563', 'เมษายน', '2020-10-22'),
(9, '007', 240, 'ชำระเเล้ว', '2563', 'กุมภาพันธ์', '2020-10-25'),
(14, '12536', 84, 'ชำระเเล้ว', '2563', 'กรกฎาคม', '2020-10-27'),
(15, '12536', 216, 'ชำระเเล้ว', '2563', 'ธันวาคม', '2020-10-28'),
(16, '004', 240, 'ชำระเเล้ว', '2563', 'มีนาคม', '2020-10-29'),
(17, '004', 240, 'ชำระเเล้ว', '2563', 'เมษายน', '2020-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRV_ID` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `D_NAME` varchar(20) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `D_LNAME` varchar(20) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `P_DRV` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `AGE` int(10) DEFAULT NULL,
  `ID_NUMBER` int(20) DEFAULT NULL,
  `LICEN_ID` int(20) DEFAULT NULL,
  `ADDRES` varchar(100) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `SEX` varchar(10) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `PHONE` int(10) DEFAULT NULL,
  `B_DAY` date DEFAULT NULL,
  `BUS_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRV_ID`, `D_NAME`, `D_LNAME`, `P_DRV`, `AGE`, `ID_NUMBER`, `LICEN_ID`, `ADDRES`, `SEX`, `PHONE`, `B_DAY`, `BUS_ID`) VALUES
('111', 'ฟีซี', 'ซีฟา', '135107519420201027_021628.jpg', 20, 53453876, 2147483647, '150.3', 'ชาย', 45435, '2020-10-10', '02'),
('123', 'อันวา', 'ดอเซาะ', '4443541320201027_021637.jpg', 53, 123, 2147483647, 'kuhjk154345', 'ชาย', 456456, '2020-10-07', '03'),
('301', 'อาลี', 'มามะ', 'A12658763-vote0.jpg', 20, 2147483647, 123456789, '160 ปาการอ  เมือง ปัตตานี', 'ชาย', 98725987, '1999-07-29', '01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `STD_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `date` date NOT NULL,
  `BUS_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `FEEDBACK` text COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `STDY_YR` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `F_ID` int(50) NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`STD_ID`, `date`, `BUS_ID`, `FEEDBACK`, `STDY_YR`, `F_ID`, `level`) VALUES
('', '2020-10-16', '01', '', '2563', 9, 'มาก'),
('', '2020-10-16', '01', 'าทสาื้อะอ้เอ', '2566', 10, 'มาก'),
('', '2020-10-21', '01', 'nhfgfg', '2563', 11, 'ปากลาง'),
('', '2020-10-21', '04', '', '2563', 12, 'มาก'),
('', '2020-10-21', '01', '', '2563', 13, 'มากที่สุด');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `STD_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `BUS_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `STDY_YR` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `CLASS` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `ROOM` int(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rigis_ID` int(11) NOT NULL,
  `zone` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`STD_ID`, `BUS_ID`, `STDY_YR`, `CLASS`, `ROOM`, `date`, `rigis_ID`, `zone`) VALUES
('008', '02', '2563', 'ป.1', 1, '2020-10-27', 10, 2),
('007', '03', '2563', 'ม.5', 12, '2020-10-28', 33, 1),
('004', '02', '2563', 'ม.1', 6, '2020-10-29', 35, 1),
('005', '03', '2563', 'ม.1', 9, '2020-10-29', 36, 2),
('003', '01', '2563', 'ม.3', 2, '2020-10-29', 37, 3),
('003', '01', '2563', 'อนุบาล3', 1, '2020-10-29', 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `SLR_ID` int(50) NOT NULL,
  `SALARY_NUM` int(50) DEFAULT NULL,
  `S_date` date DEFAULT NULL,
  `TCH_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `mon` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `DRV_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`SLR_ID`, `SALARY_NUM`, `S_date`, `TCH_ID`, `mon`, `DRV_ID`) VALUES
(71, 600, '2020-10-28', NULL, '2020-10', '111'),
(74, 700, '2020-10-28', '001', '2020-10', NULL),
(75, 100, '2021-02-05', '001', '2021-02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `STD_ID` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `F_name` varchar(20) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `LNAME` varchar(20) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `PHONE` varchar(10) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `SEX` varchar(10) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `ADDRES` varchar(100) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `ID_NUMBER` varchar(20) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `P_STD` text COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `DISEASE` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `AGE` int(10) DEFAULT NULL,
  `B_DAY` date DEFAULT NULL,
  `P_name` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `P_lname` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `P_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`STD_ID`, `F_name`, `LNAME`, `PHONE`, `SEX`, `ADDRES`, `ID_NUMBER`, `P_STD`, `DISEASE`, `AGE`, `B_DAY`, `P_name`, `P_lname`, `P_ID`) VALUES
('003', 'สารีนา', 'มานิ', '0847484184', 'หญิง', '130 ม.5 ปัตตานี', '123456', '151297655420201029_070041.jpg', 'หัวใจ', 12, '2013-06-27', 'มุรนี', 'มานิ', '123456789'),
('004', 'นุรอีมาน', 'สาเเละ', '0883890459', 'หญิง', '170 ม.2 ปาการอ', '123456', '138004964420201029_070348.jpg', 'แพ้กุ้ง', 12, '2014-11-29', 'มารีนี', 'สาเเละ', '123456789'),
('005', 'สุไลมาน', 'ดอเลาะ', '0810974589', 'ชาย', '150 ม.3 ปัตตานี', '1950100', '149593384020201027_021519.jpg', '-', 15, '2020-03-17', 'อับดุล', 'ดอเลาะ', '123456789'),
('007', 'อันวา', 'ดอเซาะ', '0987097133', 'ชาย', '150.3', '123', '19181242520201027_021505.jpg', '-', 21, '2020-10-13', 'มานี', 'มานา', '456'),
('009', 'อารีนา', ' มาลี', '0987097133', 'หญิง', '150.3', '19520', '121831003520201029_071523.jpg', '-', 12, '2015-06-29', 'อับดุล', 'ดอเลาะ', '19501');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TCH_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `T_NAME` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `T_LNAME` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `SEX` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `AGE` int(50) DEFAULT NULL,
  `ID_NUMBER` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `T_PHONE` int(50) DEFAULT NULL,
  `P_TCH` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `ADDRES` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `B_DAY` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `BUS_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TCH_ID`, `T_NAME`, `T_LNAME`, `SEX`, `AGE`, `ID_NUMBER`, `T_PHONE`, `P_TCH`, `ADDRES`, `B_DAY`, `BUS_ID`) VALUES
('001', 'นุรดีน', 'ดอเลาะ', 'ชาย', 53, '1950100221112', 987097133, '6713356120201029_070842.jpg', '120 เมือง ปัตตานี', '1997-03-29', '02'),
('002', 'มารีนี', 'สะเเต', 'หญิง', 21, '1950100221112', 987097122, '121831003520201029_071523.jpg', '135 ม.4 เมือง ปัตตานี', '2012-06-29', '03'),
('003', 'มะดารี ', 'กามา', 'ชาย', 30, '19501', 987236548, '167472270520201029_075825.jpg', '120 ต.ลิดล', '2020-10-14', '01');

-- --------------------------------------------------------

--
-- Table structure for table `updown`
--

CREATE TABLE `updown` (
  `STD_ID` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `DAY` date DEFAULT NULL,
  `STATUS` varchar(50) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `UD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `updown`
--

INSERT INTO `updown` (`STD_ID`, `DAY`, `STATUS`, `UD_ID`) VALUES
('008', '2020-10-20', 'รับ', 32),
('007', '2020-10-19', 'รับ', 34),
('007', '2020-10-26', ' รับ', 35),
('004', '2020-10-26', ' รับ', 37),
('004', '2020-10-26', ' ส่ง', 41),
('004', '2020-10-26', ' รับ', 42),
('008', '2020-10-27', ' ', 43),
('008', '2020-10-27', ' รับ', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUS_ID`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`COS_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRV_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rigis_ID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`SLR_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`STD_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TCH_ID`);

--
-- Indexes for table `updown`
--
ALTER TABLE `updown`
  ADD PRIMARY KEY (`UD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `COS_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rigis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `SLR_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `updown`
--
ALTER TABLE `updown`
  MODIFY `UD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
