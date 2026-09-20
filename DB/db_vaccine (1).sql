-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 12:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_district`
--

CREATE TABLE `db_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(10, 'CHINMAI UNNI', 'chinmaiunni8@gmail.com', 'chinmai1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(10) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `booking_slot` varchar(50) NOT NULL,
  `booking_status` varchar(50) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL,
  `slot_id` int(10) NOT NULL,
  `booking_fordate` varchar(50) NOT NULL,
  `hospitalvaccine_id` int(11) NOT NULL,
  `booking_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_slot`, `booking_status`, `user_id`, `slot_id`, `booking_fordate`, `hospitalvaccine_id`, `booking_amount`) VALUES
(45, '2024-09-01', '1', '2', 3, 2, '2024-09-18', 13, '150'),
(46, '2024-09-01', '2', '2', 4, 2, '2024-09-18', 13, '150'),
(47, '2024-09-23', '1', '2', 3, 4, '2024-09-25', 13, '150');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(3, 'Childerns'),
(5, 'Adults'),
(6, 'Adolescents'),
(7, 'Infants');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_center`
--

CREATE TABLE `tbl_center` (
  `center_id` int(10) NOT NULL,
  `center_name` varchar(50) NOT NULL,
  `center_email` varchar(50) NOT NULL,
  `center_password` varchar(50) NOT NULL,
  `center_address` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `center_contact` varchar(50) NOT NULL,
  `center_proof` varchar(500) NOT NULL,
  `center_photo` varchar(500) NOT NULL,
  `center_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_center`
--

INSERT INTO `tbl_center` (`center_id`, `center_name`, `center_email`, `center_password`, `center_address`, `place_id`, `center_contact`, `center_proof`, `center_photo`, `center_status`) VALUES
(3, 'CHC Kadayiruppu', 'chckadayiruppu@gmail.com', 'chck', 'Kadayiruppu\r\nKolenchery\r\nErnakulam Dist\r\nKerala', 5, '9495868917', 'WhatsApp-Image-2024-01-02-at-12.47.58_27c351bc.jpg', 'WhatsApp-Image-2024-01-02-at-12.47.58_27c351bc.jpg', 2),
(4, 'Medical Trust', 'medicaltrust@gmail.com', 'medicaltrust', 'Pallimukku\r\nKochi\r\nErnakulam District\r\nKerala', 9, '0484 2358001', 'Medical Trust pic.jfif', 'Medical Trust pic.jfif', 1),
(7, 'CHC Vadavucode', 'chcvadavucode@gmail.com', 'chcvadavucode', 'Vadavucode P.O\r\nPuthencruz\r\nErnakulam\r\nKerala', 4, '484 273 0251', 'vadavucodechcpic.jpg', 'vadavucodechcpic.jpg', 0),
(8, 'M.O.S.C Medical College Hospital', 'moscmm@gmail.com', 'moscmm', 'Medical College Road\r\nKolenchery P O. \r\nErnakulam \r\nKerala', 5, '0484 288 5000 ', 'MOSC pic.jfif', 'MOSC pic.jfif', 1),
(9, 'Amrita Hospital', 'amritahospital@gmail.com', 'amritahospital', 'Ponekkara\r\nEdappally\r\nErnakulam\r\nKerala \r\n', 9, '09449847321', 'Amrita hospital.jfif', 'Amrita hospital.jfif', 1),
(10, 'Aster Medcity', 'aster@gmail.com', 'aster', 'Cheranelloor\r\nKochi\r\nErnakulam district\r\nKerala ', 9, '0484 669 9999', 'Aster pic.jpg', 'Aster pic.jpg', 1),
(11, 'Apollo Adlux Hospital', 'appoloadlux@gmail.com', 'appoloadlux', 'Near Adlux convention center \r\nAngamaly\r\nErnakulam District \r\nKerala ', 10, ' 0484 273 5000', 'Adlux Hospital.jfif', 'Adlux Hospital.jfif', 1),
(12, 'VPS Lakeshore Hospital', 'lakeshore@gmail.com', 'lakeshore', 'NH 66\r\nMaradu\r\nErnakulam District\r\nKerala', 11, '0484 270 1033', 'Lakeshore pic.jfif', 'Lakeshore pic.jfif', 1),
(24, 'Renai Medicity', 'renaimedicity@gmail.com', 'Renaimedicity', 'Pallimukku\r\nKochi\r\nErnakulam District\r\nKerala', 9, '9495838977', 'Renaimedicity.jpg', 'Renaimedicity.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(50) NOT NULL,
  `complaint_content` varchar(50) NOT NULL,
  `complaint_reply` varchar(50) NOT NULL,
  `complaint_status` int(50) NOT NULL DEFAULT 0,
  `complaint_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `complaint_reply`, `complaint_status`, `complaint_date`, `user_id`, `center_id`) VALUES
(12, 'gh', 'cbvh', 'ok hospital', 1, '2024-08-28', 0, 4),
(16, 'Complaint about Hospital', 'bad exprerience', 'ok madam', 1, '2024-09-23', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(11, 'kollammm'),
(12, 'Ernakulam'),
(13, 'Kannur'),
(15, 'Malappuram');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`) VALUES
(1, 'it is a nice website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospitalvaccine`
--

CREATE TABLE `tbl_hospitalvaccine` (
  `hospitalvaccine_id` int(11) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `hospitalvaccine_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospitalvaccine`
--

INSERT INTO `tbl_hospitalvaccine` (`hospitalvaccine_id`, `vaccine_id`, `center_id`, `hospitalvaccine_amount`) VALUES
(13, 1, 4, '150'),
(14, 9, 4, '100'),
(15, 13, 4, '100'),
(16, 11, 4, '100'),
(17, 12, 4, '100'),
(18, 15, 4, '750'),
(19, 16, 4, '3000'),
(20, 23, 4, '50'),
(21, 30, 4, '50'),
(22, 32, 4, '1300'),
(23, 34, 4, '500'),
(24, 1, 8, '101');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newuser`
--

CREATE TABLE `tbl_newuser` (
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_dob` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_photo` varchar(500) NOT NULL,
  `user_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newuser`
--

INSERT INTO `tbl_newuser` (`user_id`, `place_id`, `user_name`, `user_gender`, `user_dob`, `user_address`, `user_contact`, `user_email`, `user_password`, `user_photo`, `user_proof`) VALUES
(1, 4, 'Alwin Roy', 'Male', '28/05/2004', 'alwin house', '8285899556', 'alwin@gmail.com', 'alwinpass', 'Screenshot (93).png', 'Screenshot (93).png'),
(3, 4, 'Nandana M.S', 'Female', '20/09/2004', 'Moothedathu house\r\nKollapady\r\nPuthencruz\r\nErnakulam District', '9778246538', 'nandananandhu555@gmail.com', 'nandana', 'user nandana pic.jpg', 'user nandana pic.jpg'),
(4, 7, 'Sarath M.S', 'Male', '27/05/2004', 'Mankulangara house\r\nPinarmunda\r\nPeringala\r\nErnakulam District', '9895270684', 'sarathsuresh579@gmail.com', 'sarath123', 'sarath anime-boy-nawpic-8.jpg', 'sarath anime-boy-nawpic-8.jpg'),
(5, 8, 'Solomon T Mathew', 'Male', '25/11/2004', 'Kochukuzhiyil house\r\nThiruvaniyoor\r\nErnakulam District', '8330081498', 'solomonsolo2552@gmail.com', 'solo', 'Solo pic.jpg', 'Solo pic.jpg'),
(6, 4, 'Nandhu Narayanan', 'Male', '2001-10-25', 'Parithiyil House\r\nThiruvaniyoor P.O\r\nnaducruz', '9744205333', 'nandhu@gmail.com', 'Nandhu123', 'Solo pic.jpg', 'Solo pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(4, 'Puthencruz', '682308', 12),
(5, 'Kolenchery', '682311', 12),
(7, 'Peringala', '683565', 12),
(8, 'Thiruvaniyoor', '682308', 12),
(9, 'Kochi', '682016', 12),
(10, 'Angamaly', '683576', 12),
(11, 'Maradu', '682040', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(10) NOT NULL,
  `review_comment` varchar(50) NOT NULL,
  `review_count` varchar(50) NOT NULL,
  `review_date` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `slot_id` int(10) NOT NULL,
  `slot_from` varchar(50) NOT NULL,
  `slot_to` varchar(50) NOT NULL,
  `slot_count` varchar(20) NOT NULL,
  `center_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`slot_id`, `slot_from`, `slot_to`, `slot_count`, `center_id`) VALUES
(2, '09:00', '10:00', '20', 4),
(3, '10:00', '11:00', '20', 4),
(4, '10:00', '11:00', '20', 4),
(5, '10:00', '11:00', '20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` varchar(50) NOT NULL,
  `stock_date` varchar(50) NOT NULL,
  `hospitalvaccine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `hospitalvaccine_id`) VALUES
(10, '50', '2024-09-01', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(10) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'infants', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `vaccine_id` int(11) NOT NULL,
  `vaccine_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`vaccine_id`, `vaccine_name`, `category_id`) VALUES
(1, 'DTP Booster 2', 3),
(2, 'MR 2nd Dose', 3),
(3, 'OPV Booster', 3),
(4, 'DTP Booster 1', 3),
(6, 'Td', 6),
(8, 'Bacillus Calmette Guerin(BCG)', 7),
(9, 'Oral Polio Vaccine(OPV)-0', 7),
(11, 'Oral Polio Vaccine(OPV)-2', 7),
(12, 'Oral Polio Vaccine(OPV)-3', 7),
(13, 'Oral Polio Vaccine(OPV)-1', 7),
(15, 'Inactivated Polio  Vaccine (IPV)', 7),
(16, 'Pneumococcal Conjugate Vaccine (PCV)', 7),
(17, 'Rotavirus (RVV)', 7),
(18, 'Measles Rubella (MR) 1st dose', 7),
(19, 'Japanese Encephalitis (JE) - 1', 7),
(20, 'Pentavalent -1', 7),
(21, 'Pentavalent - 2', 7),
(22, 'Pentavalent - 3', 7),
(23, 'Hepatitis B', 7),
(24, 'Japanese Encephalitis (JE) - 2', 3),
(25, 'Varicella Vaccine', 3),
(26, 'Human Papillomavirus (HPV)', 6),
(27, 'Tdap Booster', 6),
(28, 'Human Papillomavirus (HPV)', 5),
(29, 'Tdap Booster', 5),
(30, 'Hepatitis B', 5),
(31, 'Influenza Vaccine', 5),
(32, 'Hepatitis A', 5),
(33, 'Varicella Vaccine', 5),
(34, 'MMR Vaccine', 5),
(35, 'Covid Vaccine', 5),
(36, 'Anti Rabies Vaccine', 5),
(37, 'Pneumococcal Conjugate Vaccine (PPSV23/PCV13)', 5),
(38, 'Zoster Vaccine', 5),
(39, 'Typhoid Vaccine', 5),
(40, 'Meningococcal Conjugate Vaccine', 5),
(41, 'Yellow Fever Vaccine', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_district`
--
ALTER TABLE `db_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_center`
--
ALTER TABLE `tbl_center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_hospitalvaccine`
--
ALTER TABLE `tbl_hospitalvaccine`
  ADD PRIMARY KEY (`hospitalvaccine_id`);

--
-- Indexes for table `tbl_newuser`
--
ALTER TABLE `tbl_newuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_district`
--
ALTER TABLE `db_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_center`
--
ALTER TABLE `tbl_center`
  MODIFY `center_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hospitalvaccine`
--
ALTER TABLE `tbl_hospitalvaccine`
  MODIFY `hospitalvaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_newuser`
--
ALTER TABLE `tbl_newuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `slot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
