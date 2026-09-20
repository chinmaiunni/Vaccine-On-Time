-- Structure only: no account records or personal data.
-- Import into a new empty db_vaccine database, not the existing working database.
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET NAMES utf8mb4;

CREATE TABLE `db_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_hospitalvaccine` (
  `hospitalvaccine_id` int(11) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `hospitalvaccine_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_review` (
  `review_id` int(10) NOT NULL,
  `review_comment` varchar(50) NOT NULL,
  `review_count` varchar(50) NOT NULL,
  `review_date` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_slot` (
  `slot_id` int(10) NOT NULL,
  `slot_from` varchar(50) NOT NULL,
  `slot_to` varchar(50) NOT NULL,
  `slot_count` varchar(20) NOT NULL,
  `center_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` varchar(50) NOT NULL,
  `stock_date` varchar(50) NOT NULL,
  `hospitalvaccine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(10) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tbl_vaccine` (
  `vaccine_id` int(11) NOT NULL,
  `vaccine_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `db_district`
  ADD PRIMARY KEY (`district_id`);

ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

ALTER TABLE `tbl_center`
  ADD PRIMARY KEY (`center_id`);

ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

ALTER TABLE `tbl_hospitalvaccine`
  ADD PRIMARY KEY (`hospitalvaccine_id`);

ALTER TABLE `tbl_newuser`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`slot_id`);

ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

ALTER TABLE `db_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_center`
  MODIFY `center_id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_hospitalvaccine`
  MODIFY `hospitalvaccine_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_newuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_slot`
  MODIFY `slot_id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT;

