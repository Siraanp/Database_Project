-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: April 12, 2021 at 07:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoshihoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  `email` varchar(255) NULL,
  `password` varchar(255) NULL,
  PRIMARY KEY (a_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name` , `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NULL,
  `email` varchar(50) NULL,
  `password` varchar(100) NULL,
  `mobile` bigint(20) NULL,
  `address` varchar(255) NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NULL,
  PRIMARY KEY (c_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`) VALUES
(4, 'sunil Vishwakarma', 'amitvish9999@gmail.com', '8190', 7275308190, 'kolpanday,azamgarh', 'male', 'China'),
(7, 'suraj vishwakarma', 'suraj@gmail.com', '8190', 9120140055, 'kolpanday,azamgarh', 'male', 'India'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bnjkghjbjb', 'male', 'india'),
(9, 'Ragini Vishwakarma', 'ragini@gmail.com', '1234`', 7275540965, 'kolpanday(Kolgghat),Azamgarh', 'male', 'India'),
(10, 'Anjali Vishwakarma', 'anjali@gmail.com', '123', 7275308190, 'kolpanday azamgarh', 'male', 'India'),
(11, 'mrityunjai', 'mr8090@gmail.com', '8190', 71727534567, 'kolpghta', 'male', 'India'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', '1234', 9015501897, 'Noida', 'male', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NULL,
  `type` varchar(15) NULL,
  `bedding` varchar(10) NULL,
  `price` bigint(20) NULL,
  PRIMARY KEY (room_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`,`room_no`, `type`, `bedding`, `price`) VALUES
(1, 101, 'Superior Room', 'Single', 220),
(2, 102, 'Superior Room', 'Double', 220),
(3, 103, 'Superior Room', 'Triple', 220),
(4, 104, 'Superior Room', 'Quad', 220),
(5, 201, 'Deluxe Room', 'Single', 320),
(6, 202, 'Deluxe Room', 'Double', 320),
(7, 203, 'Deluxe Room', 'Triple', 320),
(8, 204, 'Deluxe Room', 'Quad', 320),
(9, 301, 'Guest House', 'Single', 180),
(10, 302, 'Guest House', 'Double', 180),
(11, 303, 'Guest House', 'Quad', 180),
(12, 401, 'Single Room', 'Single', 150),
(13, 402, 'Single Room', 'Double', 150),
(14, 403, 'Single Room', 'Triple', 150),
(15, 404, 'Single Room', 'Quad', 150);
-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NULL,
  `email` varchar(100) NULL,
  `message` varchar(255) NULL,
  `fdate` date DEFAULT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (c_id) REFERENCES customer(c_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`,`fdate`,`c_id`) VALUES
(1, 'Anjali Vishwakarma','anjali@gmail.com', 'Nice', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contry` varchar(50) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` varchar(6) NOT NULL,
  `check_out_date` date NOT NULL,
  `Occupancy` varchar(100) NOT NULL,
  `a_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (a_id) REFERENCES admin(a_id),
  FOREIGN KEY (c_id) REFERENCES customer(c_id),
  FOREIGN KEY (room_id) REFERENCES rooms(room_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `contry`, `room_type`, `check_in_date`, `check_in_time`, `check_out_date`, `Occupancy`,`a_id`,`c_id`,`room_id`) VALUES
(5, 'Sumit', 'sumit@gmail.com', 7398713060, 'kolpanday,azamgarh', 'India', 'Superior Room', '2019-12-05', '12:00', '2019-01-06', 'single', 1, 4, 1),
(6, 'Om', 'om@gmail.com', 7890809, 'bnjkghjbjb',  'India', 'Superior Room', '2019-05-08', '08:00', '2019-06-04', 'single', 1, 8, 1),
(7, 'Ragini Vishwakarma', 'ragini@gmail.com', 727550965, 'Kolpanday,Kolghat,Azamgarh', 'India', 'Superior Room', '2019-12-06', '08:00', '2019-12-06', 'single', 1, 9, 1),
(8, 'Anlaji viahwakarma', 'anjali@gmail.com', 7275308190, 'kolpanday azamgarh', 'India', 'Deluxe Room', '2019-12-06', '08:00', '2019-12-06', 'single', 1, 10, 5),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', 0, 'dfjdlfj', '', 'Deluxe Room', '2019-05-22', '22:57', '2017-10-31', 'single', 1, 12, 5);




